<?php

namespace App\Http\Controllers;
use DB;

class HomeController extends Controller
{
	/**
	* Display signup page
	*
	*/
	public function signup()
	{
		return view('signup');
	}
	public function getPosts()
    {
        $posts = DB::table('posts')->get();
		//$posts = DB::select('SELECT postTitle FROM posts');

        return view('sell', ['posts' => $posts]);
    }

    public function myPosts()
    {
    	$posts = DB::table('posts')->get();

    	return view('my-posts', ['posts' => $posts]);
    }
}