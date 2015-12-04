<?php

/*
|--------------------------------------------------------------------------
| Interface Bar
|--------------------------------------------------------------------------
|
| @author: Francisco Maria Calisto
|
*/

interface BarInterface
{
	
}

class Bar implements BarInterface
{

}

App::bind('BarInterface', 'Bar');

// App::bind('BarInterface', function()
// {
// 	return new Bar;
// });

Route::get('bar', function(/*BarInterface $bar*/)
{
	// dd($bar);
	$bar = App::make('BarInterface');

	dd($bar);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Developed Routes
|--------------------------------------------------------------------------
|
| @author: Francisco Maria Calisto
|
*/

Route::get('/', 'IndexController@index');

Route::get('home', 'MenuController@home');

Route::get('courses', 'MenuController@courses');

Route::get('profile', 'MenuController@profile');

Route::get('about', 'MenuController@about');

Route::get('help', 'MenuController@help');


/*
|--------------------------------------------------------------------------
| Courses Developed Routes
|--------------------------------------------------------------------------
|
| @author: Francisco Maria Calisto
|
*/

// Route::get('courses', 'CoursesController@index');
// // Route::get('courses/create', 'CoursesController@create');
// Route::get('courses/{id}', 'CoursesController@show');
// // Route::get('courses', 'CoursesController@store');
// // Route::get('courses/{id}'/edit, 'CoursesController@edit');

// Routes optimization
Route::resource('courses', 'CoursesController');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| @author: Francisco Maria Calisto
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*
|--------------------------------------------------------------------------
| Tests Routes
|--------------------------------------------------------------------------
|
| @author: Francisco Maria Calisto
|
*/

Route::get('testAdmin', ['middleware' => 'admin', function()
{
	return 'this page may only be viewed by admins';
}]);