<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->back();
    }

    public function index()
    {
        $blogs = Student::all();
        return view('admin.students.allstudents', compact('blogs'));
    }
}
