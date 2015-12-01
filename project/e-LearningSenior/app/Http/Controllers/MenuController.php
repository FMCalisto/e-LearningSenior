<?php namespace App\Http\Controllers;

class MenuController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| @author: Francisco Maria Calisto
	|
	*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function home() {
		//return "Index";

		return view('menu.home');
	}

	public function courses() {
		//return "Cursos";

		return view('menu.courses');
	}

	public function profile() {
		//return "Profile";

		return view('menu.profile');
	}

	public function about() {
		//return "About";

		return view('menu.about');
	}

	public function help() {
		//return "Help";

		return view('menu.help');
	}

}