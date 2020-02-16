<?php

namespace App\Http\Controllers\Dashboard;

use App\User;

class UsersController extends DashboardController
{
    public function view()
    {
        return view('dashboard.users', ['users' => User::all()]);
    }

    public function view_user()
    {
        abort(501, 'Not Implemented Yet');
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
