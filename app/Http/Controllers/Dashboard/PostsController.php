<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function view()
    {
        return view('dashboard.posts', ['posts' => Post::all()]);
    }

    public function edit(Request $request)
    {
        abort(501, 'Not Implemented Yet');
    }

    public function remove(Request $request)
    {
        Post::destroy($request->post('post_id'));
        return redirect(RouteServiceProvider::DASHBOARD . '/posts');
    }
}
