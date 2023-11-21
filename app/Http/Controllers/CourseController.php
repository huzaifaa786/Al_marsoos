<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);
        Course::create($request->all());
        return redirect()->back()->with('success','Course added successfully');
    }

    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index',['courses'=>$courses]);
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.course.update',['course'=>$course]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $course = Course::find($request->id);
        $course->update($request->all());
        return redirect()->route('course.index');
    }
    public function coursesearch(Request $request)
    {   
      
        $search_results = Course::where('name', 'LIKE', '%' . $request->name . '%')->paginate(4);

        if ($search_results->isEmpty()) {
            // If no results are found, return a message
            return view('Courses.searchcourse', ['coursesearch' => $search_results, 'message' => 'No matches found.']);
        } else {
            // If results are found, paginate and return the view
            return view('Courses.searchcourse', ['coursesearch' => $search_results]);
        }
        
    }
}

