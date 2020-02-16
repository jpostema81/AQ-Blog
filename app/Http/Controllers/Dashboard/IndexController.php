<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsAdmin;
use App\Post;
use App\User;

class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        $this->middleware(Authenticate::class);
        $this->middleware(IsAdmin::class);
    }

    public function view()
    {
        return view('dashboard.index', [
            'user_count' => User::all()->count(),
            'post_count' => Post::all()->count(),
            'tag_count' => 0 // Replace with `Tag::all()->count()`
        ]);
    }
}
