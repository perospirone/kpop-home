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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');

Route::get('/new', function () {
  return view('write-post');
})->name('new');

Route::post('/posts/create', 'PostController@create')->name('create.post');

Route::post('/posts/{id}', 'PostController@addLikes');

Route::get('/profile/{username}', 'ProfileController@show')->name('profile');

Route::get('/post/{id}', 'PostController@show')->name('post');

Route::get('/settings', 'SettingsController@index')->name('settings');
Route::put('/settings', 'SettingsController@update')->name('settings.update');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// rotas teste

Route::get('/teste', 'TesteController@teste');
