<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        Contact::create($request->all());
       toastr()->success('Thanks For Contact Us...');
        return redirect()->back();
    }
    public function index()
    {
        $message = Contact::all();
        return view('admin.message.contact',['messages'=>$message]);
    }
}
