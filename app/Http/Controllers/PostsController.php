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

    public function view_specific(Post $post)
    {
        return view('posts-specific', ['post' => $post]);
    }
}
