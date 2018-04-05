<?php

namespace App\Http\Controllers;

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
}