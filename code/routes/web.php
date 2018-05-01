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
    return view('landing');
});

Auth::routes();

Route::get('signup', function () {
    return view('auth/register');
});

Route::get('home', function () {
    return view('home');
});

Route::get('buy-details', function () {
    return view('buy-details');
});

Route::get('my-posts', function () {
    return view('my-posts');
});

Route::get('sell', function () {
    return view('sell');
});