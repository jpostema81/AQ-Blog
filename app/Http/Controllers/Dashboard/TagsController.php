<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function view()
    {
        return view('dashboard.tags', ['tags' => []]); // Replace with Tag::all().
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
