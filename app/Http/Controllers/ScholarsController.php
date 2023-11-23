<?php

namespace App\Http\Controllers;

use App\Models\Scholars;
use Illuminate\Http\Request;

class ScholarsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'mobileno' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'description' => 'required',
        ]);
        Scholars::create($request->all());
        return redirect()->back()->with('success', 'Scholar added successfully');
    }
    public function index()
    {
        $scholar = Scholars::all();
        return view('admin.scholars.index', ['scholars' => $scholar]);
    }
    public function destroy($id)
    {

        $scholar = Scholars::find($id);
        $scholar->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $scholars = Scholars::find($id);
        return view('admin.scholars.update', ['scholar' => $scholars]);
    }
    public function update(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobileno' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'description'=>'required',
        ]);
        $event = Scholars::find($request->id);
        $event->update($request->all());
        return redirect()->route('scholar.index');
    }
}
