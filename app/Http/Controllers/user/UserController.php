<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile()
    {
      
        if (auth()->check()) {
            $user = auth()->user();
            $followedTrainingPrograms = $user->training_programs;
            return view('Home.profile', ['followedTrainingPrograms' => $followedTrainingPrograms, 'user' => $user]);
        } else {
            return redirect()->route('login');
        }
    }
}
