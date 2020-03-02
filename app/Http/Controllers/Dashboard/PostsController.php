<?php

namespace App\Http\Controllers\Dashboard;

use App\Post;
use App\Providers\RouteServiceProvider;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('dashboard.posts', [
            'posts' => Post::all()->sortByDesc(static function ($post) {
                return $post->id;
            })
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('dashboard.post-add', ['tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // TODO: Validate input

        $post = new Post();
        $post->slug = Str::slug($request->title);
        $post->short_desc = $request->short_desc;
        $post->long_desc = $request->long_desc;
        $post->author_id = $request->user()->id;
        $post->save();

        return redirect(RouteServiceProvider::DASHBOARD . '/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id) . delete();
        return redirect(RouteServiceProvider::DASHBOARD . '/posts');
    }
}
