<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function view()
    {
        return view('users', [
            'users' => User::all()
        ]);
    }

    public function view_specific(User $user)
    {
        return view('users-specific', ['user' => $user]);
    }
}
