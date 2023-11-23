<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\Scholars;
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
    public function course(){
        $course = Course::paginate(4);
        return view('Courses.courses',['courses' => $course]);
    }
    public function about(){
        return view('MorePages.about');
    }
    public function blogDetail($id)
    {
        $blog = Blog::find($id);
        return view('Blog.detail', ['blog' => $blog]);
    }
    public function courseDetail($id)
    {
        $course = Course::find($id);
        return view('Courses.detailcourse', ['courses' => $course]);
    }
    public function home()
    {
        // Retrieve all users
        $blogs = Blog::all();
        // dd($category);
        return view('Home.index', ['blogs' => $blogs]);
    }
    public function payment(){
        return view('payment.stripe');
    }
    public function scholars()
    {
        // Retrieve all users
        $scholar = Scholars::paginate(6);
        // dd($category);
        return view('Scholars.scholars', ['scholars' => $scholar]);
    }
    public function scholarsdetail($id)
    {
        $scholars = Scholars::find($id);
        return view('Scholars.scholarsdetail', ['scholar' => $scholars]);
    }

}
