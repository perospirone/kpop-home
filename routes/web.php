<?php

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

  return redirect('/home');
  return view('index');
});

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');

Route::get('/new', function () {
  return view('write-post');
})->name('new');

Route::post('/posts/create', 'PostController@create')->name('create.post');

Route::post('/posts/{id}', 'PostController@addLikes');
