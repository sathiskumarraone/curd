<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostsController@index');
Route::post('/posts', 'App\Http\Controllers\PostsController@store');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostsController@edit');
Route::put('/posts/{post}', 'App\Http\Controllers\PostsController@update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostsController@destroy');
