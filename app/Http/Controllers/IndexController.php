<?php

namespace App\Http\Controllers;

use App\Post;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index', ['posts' => Post::all()]);
    }
}
