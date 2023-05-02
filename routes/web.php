<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('layout/layout', 'layout.layout');
Route::view('/home', 'Home.index')->name('Home.index');
Route::view('Contact/contact', 'Contact.contact')->name('Contact.contact');
Route::view('MorePages/ourevents', 'MorePages.ourevents')->name('MorePages.ourevents');
Route::view('MorePages/eventdetail', 'MorePages.eventdetail')->name('MorePages.eventdetail');

Route::view('admin/layout', 'admin.layout');
// Route::view('admin/auth/login', 'admin.auth.login')->name('admin.auth.login');
Route::view('admin/blog/createblog', 'admin.blog.createblog')->name('admin.blog.createblog');
Route::view('admin/blog/allblog', 'admin.blog.allblog')->name('admin.blog.allblog');
Route::post('admin/auth/login', [AdminController::class, 'login'])->name('admin.auth.login');
Route::post('Contact/contact', [ContactController::class, 'store'])->name('Contact.contact');
Route::post('admin/blog/createblog', [BlogPostController::class, 'store'])->name('admin.blog.createblog');
Route::get('admin/blog/allblog', [BlogPostController::class, 'index'])->name('admin.blog.allblog');
Route::get('Blog/bloglist', [FrontendController::class, 'index'])->name('Blog.bloglist');
Route::get('Home/index', [FrontendController::class, 'home'])->name('Home.index');
Route::get('blog/{id}', [FrontendController::class, 'blogDetail'])->name('blog.detail');
Route::get('logout', [AdminController::class, 'logout'])->name('logout/page');
