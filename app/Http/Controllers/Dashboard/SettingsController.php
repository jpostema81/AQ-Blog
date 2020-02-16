<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class SettingsController extends DashboardController
{
    public function view()
    {
        return view('dashboard.settings');
    }

    public function edit(Request $request)
    {
        abort(501, 'Not Implemented Yet');
    }
}
