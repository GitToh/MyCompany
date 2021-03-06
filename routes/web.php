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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Home
Route::get('/', 'BasicController@home');

// About
Route::get('about', 'BasicController@about');

// Service
Route::get('service', 'BasicController@service');

// Portfolio
Route::get('portfolio', 'BasicController@portfolio');

// Blog
Route::get('blog', 'BasicController@blog');

// Contact
Route::get('contact', 'BasicController@contact');
