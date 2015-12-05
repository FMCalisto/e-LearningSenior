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

    public function create()
    {

        $tage = Tag::lists('name', 'id');

        
        if(Auth::guest())
        {
            return redirect('courses');
        }
        

        return view('courses.create')->with('tags', $tags); // FIXME
    
    }

    public function store(CreateCourseRequest $request)
    {
        // validation

        // dd($request->input('tags'));

        // $course = new Course($request->all());

        // Course::user()->courses()->save($course);

        // Auth::user()->course()->save($course);

        $course = Auth::user()->course()->create($request->all());

        $tagIDs = $request->input;

        $course->$tags->attach($request->input('tags'));

        flash('Your course is ok!!!');

        return redirect('courses')->with('flash_message');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit')->with('course', $course);
    }

}
