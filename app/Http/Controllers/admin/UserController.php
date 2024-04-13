<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return redirect()->route('users.index');
    }
    public function submitCoachRequest()
    {
        $user = Auth::user(); 
        if ($user) {
            $user->update(['coach_request_status' => 'pending']);
    
        }

        return redirect()->back();
    }
    public function showRequests()
    {
        $requests = User::where('coach_request_status', 'pending')->get();

        return view('admin.requestForCoach', compact('requests'));
    }
    public function AcceptCoach($id)
    {
        $user = User::findOrFail($id);

         $user->update(['coach_request_status' => 'accepted']); 
         $user->role = 'coach';
         return redirect()->back();
    }
    public function RejectCoach($id)
    {
        $user = User::findOrFail($id);

         $user->update(['coach_request_status' => 'rejected']); 
         return redirect()->back();
    }

    public function BannedUser($id)
    {
        $user = User::findOrFail($id);

         $user->update(['status' => 'Banned']); 
         return redirect()->back();
    }
}
