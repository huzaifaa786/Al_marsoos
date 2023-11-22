@extends('layout.layout')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('Home.index') }}">Home</a></li>
                    <li><a href="{{ route('courses.view') }}" class="active">Courses</a></li>
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

                        @if ($coursesearch->isEmpty())
                            <h1 style="color: #CF8122;">No match Found</h1>
                        @else
                            @foreach ($coursesearch as $course)
                                <div class="col-lg-6 col-sm-6 mb-4 col-12">
                                    <div class="sermon-card">
                                        <div class="sermon-img">
                                            <img src="{{ $course->image }}" alt="Image" style="height:200px;"
                                                width="100%" class="image">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="content-box">
                                            <h6 class="title">{{ $course->name }}</h6>
                                            <p class="description">
                                                {!! Str::limit(strip_tags($course->description), 200) !!}
                                            </p>
                                            <a href="{{ route('Course.detail', $course->id) }}"
                                                class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $coursesearch->links() }}
                        @endif

                        {{-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                        </div> --}}
                    </div>
                    <div class="pagination-wrape">
                        {{ $coursesearch->links() }}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-1">
                        <form method="post" action="{{ route('course.search') }}">
                            @csrf
                            <div class="input-group form-group">
                                <input class="form-control" name="name" placeholder="Search">
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
