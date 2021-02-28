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
Route::get('/', 'PageController@index')->name('home');

// Route::get('/', function () {
//     // return view('welcome');
// })->name('home');

Route::get('posts', 'PageController@posts')->name('posts');

// Route::get('post', function () {
//     return view('post');
// })->name('post');

Route::get('contact', 'PageController@contact')->name('contact');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('about', 'PageController@about')->name('about');