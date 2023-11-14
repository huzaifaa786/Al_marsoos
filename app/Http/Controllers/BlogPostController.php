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
        $request->validate([
            "title"=> "required",
            'body'=> 'required',
            'image'=> 'required'
        ]);
        Blog::create($request->all());
        return redirect()->back()->with('success','Blog post created successfully');
    }

    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index',['blogs'=>$blog]);
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.update',['blog'=>$blog]);
    }
    public function update(Request $request)
    {
        $validated= $request->validate([
            'title'=> 'required',
            'body'=> 'required'
        ]);
            $blog = Blog::find($request->id);
            $blog->update($request->all());
            return redirect()->route('blog.index');
    }
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back();
    }
    public function blogsearch(Request $request)
    {   
        $search_results = Blog::where('title','LIKE','%'.$request->title.'%')->get();
        return view('Blog.searchblog',['BlogsSearch'=>$search_results]);
    }
}
