<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsAdmin;

class DashboardController extends Controller
{
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware(Authenticate::class);
        $this->middleware(IsAdmin::class);
    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function users()
    {
        return view('dashboard.users');
    }

    public function posts()
    {
        return view('dashboard.posts');
    }

    public function tags()
    {
        return view('dashboard.tags');
    }
}
