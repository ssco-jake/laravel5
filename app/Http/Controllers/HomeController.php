<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
*@Resource("/")
*/

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Controller methods are called when a request enters the application
	| with their assigned URI. The URI a method responds to may be set
	| via simple annotations. Here is an example to get you started!
	|
	*/

	
	public function index()
	{
		dd('Home Controller');
		return view('hello');
	}

}
