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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', 'UserController@signup');
Route::get('/signin', 'UserController@signin');
Route::get('/otp', 'UserController@otp');

// Profile Controller
Route::get('profile/', 'ProfileController@profile');
Route::get('profile/education', 'ProfileController@education');
Route::get('profile/career', 'ProfileController@career');
Route::get('profile/prof/edit', 'ProfileController@profedit');