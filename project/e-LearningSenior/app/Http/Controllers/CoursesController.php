<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Course;

use Carbon\Carbon;

class CoursesController extends Controller
{

    public function index()
    {
    	$courses = Course::latest('published_at')->where('published_at', '<=', Carbon::now())->get(); // FIXME

    	return view('courses.index')->with('courses', $courses);
    }

    public function show($id)
    {
    	$course = Course::findOrFail($id);

    	return view('courses.show')->with('course', $course);
    }

}
