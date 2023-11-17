<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        Contact::create($request->all());
        return redirect()->back();
    }
}
