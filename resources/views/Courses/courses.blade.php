@extends('layout.layout')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index-1.html">Home</a></li>
                    <li><a href="courses.html" class="active">Courses</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=   Sermons Area Start   =-->
    <!--=====================================-->
    <section class="sermons sec-pad sec-mar mb-none-on-mobile sermons-bg">
        <div class="container">
            <div class="heading">
                <h2 class="title clr-primary text-start">Courses/Sermons</h2>
                <p class="text-start">Watch and listen Islamic videos, Bayan and sermons from below</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($courses as $course)
                            
                        
                        <div class="col-lg-6 col-sm-6 mb-4 col-12 ">
                            <div class="sermon-card">
                                <div class="sermon-img">
                                    <img src="{{$course->image}}" alt="" class="image">
                                    <div class="overlay">
                                        <a href="#" class="icon" data-bs-toggle="modal"
                                            data-bs-target="#videoModal"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h6 class="title">{{$course->name}}</h6>
                                    <p class="description">
                                        {!! Str::limit(strip_tags($course->description), 200) !!}
                                    </p>
                                    <a href="course-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <div class="pagination-wrape">
                        {{ $courses->links() }}
                        {{-- <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link current" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-1">
                        <form method="get" action="https://uiparadox.co.uk/public/templates/al-buraq/courses.html">
                            <div class="input-group form-group">
                                <input class="form-control" name="query" placeholder="Search">
                                <button class="input-group-text ps-3 pe-3" type="submit"><i
                                        class="fal fa-search"></i></button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
