<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index',[ 'users'=>User::all()]);

    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin');
    }
    public function edit(User $user)
    {
        return view('admin.users.edit',['user'=>$user]);
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect()->route('users.index');
    }


    public function BannedUser($id)
    {
        $user = User::findOrFail($id);

         $user->update(['status' => 'Banned']); 
         return redirect()->back();
    }
}
