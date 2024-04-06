<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function RegisterPage(){
        return view('register');
    }
    public function register(Request $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id'=>2,
            'gender'=>null,
            'dateOfBirth'=>null,
            'status'=>'Accepted',
        ]);
        Auth::login($user);

        return redirect('name');
    }

    public function LoginPage(){
        return view('Auth.login');
    }


    public function login(Request $request){
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           
            $user = Auth::user();
            
           
            // session([
            //     'user_email' => $user->email,
            //     'user_id' => $user->id,
            // ]);
            if ($user->status == 'Banned') {
                Auth::logout();
                return back()->withInput()->withErrors([
                    'email' => 'Your account is inactive. Please contact the administrator.'
                ]);

            }
          
        }
        return redirect('admin');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}