<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Course;

use Carbon\Carbon;

class CoursesController extends Controller
{

    // public function __constructor()
    // {
    //     $this->middleware('auth', ['only' => ['create', 'show']], ['except' => ['index', 'show']]);
    // }

    public function index()
    {

    	$courses = Course::latest('published_at')->where('published_at', '<=', Carbon::now())->get(); // FIXME

    	return view('courses.index')->with('courses', $courses);

        // return \Auth::user();
    }

    public function show(Course $course)
    {
    	return view('courses.show')->with('course', $course);
    }

    // public function create()
    // {

        
    //     if(Auth::guest())
    //     {
    //         return redirect('courses');
    //     }
        

    //     return view('courses.create'); // FIXME
    
    // }

    public function store(CreateCourseRequest $request)
    {
        // validation

        // $course = new Course($request->all());

        // Course::user()->courses()->save($course);

        // Auth::user()->course()->save($course);

        Auth::user()->course()->create($request->all());

        \Session::flash('flash_message', 'Your course is ok!!!');

        return redirect('courses');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit')->with('course', $course);
    }

}
