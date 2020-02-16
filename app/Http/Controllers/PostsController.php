<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function view()
    {
        return view('posts', [
            'posts' => Post::all()
        ]);
    }
}
