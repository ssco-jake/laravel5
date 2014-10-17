<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
*@Resource("dogs")
*/

class DogsController extends Controller {

	
	public function index()
	{
		dd('dogs');

		return view('hello');
	}

}
