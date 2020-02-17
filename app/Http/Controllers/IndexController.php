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
            'posts' => Post::all(),
            'recent_posts' => Post::all()->sortByDesc(static function ($post) {
                return $post->created_at;
            })->take(10),
            'user_count' => User::all()->count(),
            'post_count' => Post::all()->count(),
            'tag_count' => 0 // Replace with 'Tag::all()->count()'
        ]);
    }
}
