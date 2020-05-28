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

use App\Http\Controllers\PostController;

Route::get('/', function () {
  return view('welcome');
});
Route::get('/posts', 'PostController@index');
// Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{post}', 'PostController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/regist', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::patch('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@destroy');
