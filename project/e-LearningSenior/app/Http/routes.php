<?php

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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'MenuController@home');

Route::get('courses', 'MenuController@courses');

Route::get('profile', 'MenuController@profile');

Route::get('about', 'MenuController@about');

Route::get('help', 'MenuController@help');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
