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

	
//Route::get('buy-details', ['uses' => 'homeController@getPosts']);

Route::get('my-posts', function () {
    return view('my-posts');
});

Route::get('sell', ['uses' => 'homeController@getPosts']);

Route::post('startPost', function (){
	$postTitle = Request::input('postTitle');
	return view('buy-details', ['postTitle' => $postTitle]);
});
Route::post('createPost', function(){
	$postTitle = Request::input('postTitle');
	$qty= Request::input('qty');
	$price = Request::input('price');
	DB::table('posts')->insert(
		[ 'postTitle' => $postTitle, 'postQTY' => $qty, 'postPrice' => $price ]
	);
	header('location:my-posts');
	die();
});






