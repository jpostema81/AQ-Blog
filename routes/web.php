<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@view')->name('index');
Route::get('/users', 'UsersController@view')->name('users');
Route::get('/users/{user}', 'UsersController@view_specific')->name('users.specific');
Route::get('/posts', 'PostsController@view')->name('posts');
Route::get('/posts/{post}', 'PostsController@view_specific')->name('posts.specific');
Auth::routes();

## Dashboard routes.
Route::namespace('Dashboard')->group(static function () {
    ## Home
    Route::get('/dashboard', 'IndexController@view')->name('dashboard');

    ## Settings
    Route::get('/dashboard/settings', 'SettingsController@view')->name('dashboard.settings');
    Route::post('/dashboard/settings/edit', 'SettingsController@edit')->name('dashboard.settings.edit');

    ## Users - TODO: Rename to fit naming scheme.
    Route::get('/dashboard/users', 'UsersController@view')->name('dashboard.users');
    Route::get('/dashboard/users/{id}', 'UsersController@view_specific')->name('dashboard.users.specific');
    Route::post('/dashboard/users/add', 'UsersController@add')->name('dashboard.users.add');
    Route::post('/dashboard/users/edit', 'UsersController@edit')->name('dashboard.users.edit');
    Route::post('/dashboard/users/remove', 'UsersController@remove')->name('dashboard.users.remove');

    ## Posts - TODO: Rename to fit naming scheme.
    Route::get('/dashboard/posts', 'PostsController@index')->name('dashboard.posts');
    Route::get('/dashboard/posts/{id}', 'PostsController@show')->name('dashboard.posts.specific');
    Route::get('/dashboard/posts/create', 'PostsController@create')->name('dashboard.posts.create');
    Route::post('/dashboard/posts/store', 'PostsController@store')->name('dashboard.posts.store');
    Route::post('/dashboard/posts/edit', 'PostsController@edit')->name('dashboard.posts.edit');
    Route::post('/dashboard/posts/destroy', 'PostsController@destroy')->name('dashboard.posts.destroy');

    ## Tags - TODO: Rename to fit naming scheme.
    Route::get('/dashboard/tags', 'TagsController@view')->name('dashboard.tags');
    Route::post('/dashboard/tags/add', 'TagsController@add')->name('dashboard.tags.add');
    Route::post('/dashboard/tags/edit', 'TagsController@edit')->name('dashboard.tags.edit');
    Route::post('/dashboard/tags/remove', 'TagsController@remove')->name('dashboard.tags.remove');
});
