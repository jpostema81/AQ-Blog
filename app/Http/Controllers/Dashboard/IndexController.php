<?php

namespace App\Http\Controllers\Dashboard;

use App\Post;
use App\Tag;
use App\User;

class IndexController extends DashboardController
{
    public function view()
    {
        return view('dashboard.index', [
            'user_count' => User::all()->count(),
            'post_count' => Post::all()->count(),
            'tag_count' => Tag::all()->count()
        ]);
    }
}
