<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::all()
        ]);
    }
}
