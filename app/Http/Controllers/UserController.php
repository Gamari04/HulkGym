<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.users.index', compact('users'));
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin');
    }
    public function edit($id)
    {
        // return view('admin.category.edit',[ 'category'=>$category]);
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }
    public function update(Request $request, User $user)
    {

        $user->roles()->sync([$request->input('role_id')]);
        $user->update($request->all());
        return redirect()->route('users.index');
    }
}
