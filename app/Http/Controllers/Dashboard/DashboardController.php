<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsNotYourself;
use App\Providers\RouteServiceProvider;

class DashboardController extends Controller
{
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    public function __construct()
    {
        $this->middleware(Authenticate::class);
        $this->middleware(IsNotYourself::class);
    }
}
