<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function view()
    {
        return view('dashboard.users', ['users' => User::all()]);
    }

    public function view_user()
    {
        return false;
    }

    public function edit()
    {
        abort(501, 'Not Implemented Yet');
    }

    public function remove()
    {
        abort(501, 'Not Implemented Yet');
    }
}
