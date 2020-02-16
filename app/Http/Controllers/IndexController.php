<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

class IndexController extends Controller
{
    public function view()
    {
        return view('index', [
            'users' => User::all(),
            'posts' => Post::all()
        ]);
    }
}
