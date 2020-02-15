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

Route::get('/', 'IndexController@index')->name('index');

## Dashboard routes.
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/settings', 'DashboardController@settings')->name('dashboard.settings');
Route::get('/dashboard/users', 'DashboardController@users')->name('dashboard.users');
Route::get('/dashboard/posts', 'DashboardController@posts')->name('dashboard.posts');
Route::get('/dashboard/tags', 'DashboardController@tags')->name('dashboard.tags');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/posts', 'PostsController@index')->name('posts');

Auth::routes();
