<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $blogs = Blog::paginate(3);
        
        // dd($category);
        return view('Blog.bloglist', ['blogs' => $blogs]);
    }
    public function blogDetail($id)
    {
        $blog = Blog::find($id);
        return view('Blog.detail', ['blog' => $blog]);
    }
    public function home()
    {
        // Retrieve all users
        $blogs = Blog::all();
        // dd($category);
        return view('Home.index', ['blogs' => $blogs]);
    }

}
