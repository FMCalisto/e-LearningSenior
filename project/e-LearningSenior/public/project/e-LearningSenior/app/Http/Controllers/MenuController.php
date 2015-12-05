<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    
    public function home()
    {
    	return view('menu.home');
    }

    public function courses()
    {
    	return view('menu.courses');
    }

    public function profile()
    {
    	return view('menu.profile');
    }

    public function about()
    {
    	return view('menu.about');
    }

    public function help()
    {
    	return view('menu.help');
    }

}
