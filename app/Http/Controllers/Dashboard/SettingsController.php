<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
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
