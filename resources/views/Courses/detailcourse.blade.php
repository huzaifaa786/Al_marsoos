@extends('layout.layout')
@section('content')
  <!--=====================================-->
        <!--=      Breadcrumb Area Start        =-->
        <!--=====================================-->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="{{route('Home.index')}}">Home</a></li>
                        <li><a href="{{route('courses.view')}}">Courses</a></li>
                        <li><a href="#" class="active">Course Detail</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=   Sermon Detail Area Start   =-->
        <!--=====================================-->
        <section class="sermon-detail sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-12">
                        <div class="heading">
                            <h2 class="title clr-primary text-start">Bayans/Sermons</h2>
                            <p class="text-start">Watch and listen Islamic videos, Bayan and sermons from below</p>
                        </div>
                        <div class="detail-sermon-card">
                            <div class="img-box">
                                <img class="detail-image" src="{{$courses->image}}" style="height:500px;" width=100%  alt="">
                               
                                <div class="content-inner">
                                    <h3 class="title">{{$courses->name}}</h3>
                                </div>
                            </div>
                            <div class="content-box">
                                <p>
                                    {!!$courses->description!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 pt-5">
                        <div class="sidebar-1 p-0">
                            <form method="post" action="{{route('course.search')}}">
                                @csrf
                                <div class="input-group form-group">
                                    <input class="form-control" name="name" placeholder="Search">
                                    <button class="input-group-text ps-3 pe-3" type="submit"><i
                                            class="fal fa-search"></i></button>
                                </div>
                            </form>
                            {{-- <h6 class="mb-4">Comments</h6>
                            <div class="comment-sec mb-4">
                                <div class="user d-flex">
                                    <img src="assets/media/sermons/user-1.png" alt="">
                                    <span class="name">Farooq Ahmad</span>
                                </div>
                                <p class="comment">Contrary popular belief, Lorem Ipsum is not simply random text</p>
                            </div>
                            <div class="comment-sec mb-4">
                                <div class="user d-flex">
                                    <img src="assets/media/sermons/user-2.png" alt="">
                                    <span class="name">Farooq Ahmad</span>
                                </div>
                                <p class="comment">Contrary popular belief, Lorem Ipsum is not simply random text</p>
                            </div>
                            <div class="comment-sec mb-4">
                                <div class="user d-flex">
                                    <img src="assets/media/sermons/user-3.png" alt="">
                                    <span class="name">Faiqa Bukhari</span>
                                </div>
                                <p class="comment">Contrary popular belief, Lorem Ipsum is not simply random text</p>
                            </div> --}}
                            {{-- <div class="comment-sec mb-4">
                                <form method="post" action="https://uiparadox.co.uk/public/templates/al-buraq/course-detail.html">
                                    <div class="row">
                                        <div class="col-2  position-relative pe-0">
                                            <input type="file" name="user_img" class="user-img">
                                            <button class="user-img-btn"><i class="fa fa-user-circle"></i></button>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control p-2" name="comment"
                                            placeholder="Give your comments on this video here" required></textarea>
                                    </div>
                                    <div class="mt-0 mb-4 text-end">
                                        <button type="submit" class="al-buraq-btn btn-fill-primary btn-lg">Comment
                                            Now</button>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=  More Sermons Area Start   =-->
        <!--=====================================-->
        <section class="sermons">
            <div class="container">
                <div class="heading">
                    <h2 class="title clr-primary text-start mb-0">More Videos Like This</h2>
                </div>
                <div class="row">
                    @foreach ( App\Models\Course::latest()->take(4)->get() as $key => $course)
                        
                    @if ($course->id != $courses->id)
                    <div class="col-lg-4 col-12 mb-5">
                        <div class="sermon-card">
                            <div class="sermon-img">
                                <img src="{{$course->image}}" style=" height:150px; width:100%;" alt="" class="image">
                                <div class="overlay">
                                    <a href="#" class="icon" data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                            ></i></a>
                                </div>
                            </div>
                            <div class="content-box">
                                <h6 class="title">{{$course->name}}</h6>
                                <p class="description">
                                    {!! Str::limit(strip_tags($course->description), 100) !!}
                                </p>
                                <a href="{{ route('Course.detail', $course->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <iframe style="width: 100%;height:400px;border: 0;"
                                        src="https://www.youtube.com/embed/B0-0PvAAgzg"
                                        title="360 Product Video / Fashion Feature"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>   
@endsection