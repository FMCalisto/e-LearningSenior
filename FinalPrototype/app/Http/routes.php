<?php

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

