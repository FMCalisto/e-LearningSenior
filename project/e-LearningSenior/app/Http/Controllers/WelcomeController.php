<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| @author: Francisco Maria Calisto
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 *
	 */

	public function __construct(){
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index() {
		//return "Index";

		return view('welcome');
	}

}