<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogPost;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;


class BlogPostController extends Controller
{
    public function store(Request $request)
    {
        Blog::create($request->all());
        return redirect()->back();
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.allblog', compact('blogs'));
    }
}
