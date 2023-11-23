<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PayerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScholarsController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\StudentController;

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


Route::view('layout/layout', 'layout.layout');

Route::view('Contact/contact', 'Contact.contact')->name('contact');
Route::view('MorePages/ourevents', 'MorePages.ourevents')->name('MorePages.ourevents');
Route::view('MorePages/eventdetail', 'MorePages.eventdetail')->name('MorePages.eventdetail');

Route::view('admin/layout', 'admin.layout');
Route::view('admin/addstudent', 'admin.student.create')->name('newstudents');
Route::view('admin/course', 'admin.course.addcourse')->name('newcourse');
Route::view('admin/login', 'admin.auth.login')->name('admin.login');
Route::get('all/messages', [ContactController::class, 'index'])->name('contact.show.message');

Route::post('admin/login', [AdminController::class, 'login'])->name('admin.auth.login');


Route::get('Blog/bloglist', [FrontendController::class, 'index'])->name('Blog.bloglist');
Route::get('/', [FrontendController::class, 'home'])->name('Home.index');
Route::get('about/us', [FrontendController::class, 'about'])->name('about');
Route::get('blog/{id}', [FrontendController::class, 'blogDetail'])->name('blog.detail');
Route::get('logout', [AdminController::class, 'logout'])->name('logout/page');

Route::post('add/course', [CourseController::class, 'store'])->name('addcourse');
Route::get('send/message', [SMSController::class, 'sendSMS'])->name('sendsms');

Route::get('student/index', [StudentController::class, 'index'])->name('student.index');
Route::post('add/students', [StudentController::class, 'store'])->name('addstudents');
Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('student/update', [StudentController::class, 'update'])->name('student.update');
Route::get('student/destroy/{id}', [StudentController::class, 'destroy'])->name('student.delete');

Route::view('course/create', 'admin.course.create')->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/index', [CourseController::class, 'index'])->name('course.index');
Route::get('course/destroy/{id}', [CourseController::class, 'destroy'])->name('course.delete');
Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('course/update', [CourseController::class, 'update'])->name('course.update');

Route::view('blogs/create', 'admin.blog.create')->name('blog.create');
Route::post('blogs/store', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('blogs/index', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('blogs/edit/{id}', [BlogPostController::class, 'edit'])->name('blog.edit');
Route::post('blogs/update', [BlogPostController::class, 'update'])->name('blog.update');
Route::get('blogs/destroy/{id}', [BlogPostController::class, 'destroy'])->name('blog.delete');
Route::post('blogs/search', [BlogPostController::class, 'blogsearch'])->name('blog.search');

Route::get('payer/time', [PayerController::class, 'PayerTime'])->name('prayer.time');

Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('courses/course', [FrontendController::class, 'course'])->name('courses.view');
Route::get('course/{id}', [FrontendController::class, 'courseDetail'])->name('Course.detail');
Route::post('course/search', [CourseController::class, 'coursesearch'])->name('course.search');

Route::view('/event', 'admin.event.create')->name('event.create');
Route::post('/event/create', [EventController::class, 'store'])->name('Event.store');
Route::get('events/index', [EventController::class, 'index'])->name('event.index');
Route::get('events/destroy/{id}', [EventController::class, 'destroy'])->name('event.delete');
Route::get('event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::post('event/update', [EventController::class, 'update'])->name('event.update');

Route::get('payment/view', [FrontendController::class, 'payment'])->name('donate.index');
Route::post('payment/create',[PaymentController::class,'stripePost'])->name('payment.store');

Route::view('/scholars', 'admin.scholars.create')->name('scholars.create');
Route::post('scholar/store',[ScholarsController::class,'store'])->name('scholar.store');
Route::get('scholar/index',[ScholarsController::class,'index'])->name('scholar.index');
Route::get('scholar/destroy/{id}', [ScholarsController::class, 'destroy'])->name('scholar.delete');
Route::get('scholar/edit/{id}', [ScholarsController::class, 'edit'])->name('scholar.edit');
Route::post('scholar/update', [ScholarsController::class, 'update'])->name('scholar.update');

Route::get('scholar/view',[FrontendController::class,'scholars'])->name('scholar');
Route::get('scholar/{id}', [FrontendController::class, 'scholarsdetail'])->name('scholar.detail');