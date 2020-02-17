<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function view()
    {
        return view('users', [
            'admins' => User::all()->where('is_admin', true),
            'users' => User::all()->where('is_admin', false)
        ]);
    }

    public function view_specific(User $user)
    {
        return view('users-specific', ['user' => $user]);
    }
}
