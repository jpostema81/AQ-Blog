<?php

namespace App\Http\Controllers\Dashboard;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends DashboardController
{
    public function view()
    {
        return view('dashboard.tags', ['tags' => Tag::all()]);
    }

    public function add(Request $request)
    {
        abort(501, 'Not Implemented Yet');
    }

    public function edit(Request $request)
    {
        abort(501, 'Not Implemented Yet');
    }

    public function remove(Request $request)
    {
        abort(501, 'Not Implemented Yet');
    }
}
