<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'address' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);
        Event::create($request->all());
        return redirect()->back()->with('success', 'Event added successfully');
    }
    public function index()
    {
        $event = Event::all();
        return view('admin.event.index', ['events' => $event]);
    }
    public function destroy($id)
    {

        $event = Event::find($id);
        $event->delete();
        return redirect()->back()->with('success','Course Delete successfully');
    }
    public function edit($id)
    {
        $events = Event::find($id);
        toastr()->info('Update your data...');
        return view('admin.event.update', ['event' => $events]);
    }
    public function update(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);
        $event = Event::find($request->id);
        $event->update($request->all());
        return redirect()->route('event.index')->with('success','Event update successfully');
    }
}
