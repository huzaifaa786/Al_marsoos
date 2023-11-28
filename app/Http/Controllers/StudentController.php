<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
         $request->validate([
            'first_name' => 'required',
            'last_name'=> 'required',
            'father_name'=> 'required',
            'number'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'=> 'required|unique:students',
            'gender'=> 'required',
            'date_of_birth'=> 'required',
            'address'=> 'required',
        ]);
        $student=  Student::create($request->all());
        if($student)
        {}
        return redirect()->back()->with('success','Student added successfully');
    }

    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', ['students'=>$students]);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        toastr()->info('Update your data...');
        return view('admin.student.update', ['student'=>$student]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'=> 'required',
            'father_name'=> 'required',
            'number'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'=> 'required',
            'gender'=> 'required',
            'date_of_birth'=> 'required',
            'address'=> 'required',
        ]);
        $student = Student::find($request->id);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success','Student update successfully');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('success','Student delete successfully');
    }
}
