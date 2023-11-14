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
                        <li><a href="{{route('Blog.bloglist')}}" class="active">Blogs</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=         Blogs Area Start          =-->
        <!--=====================================-->
        <section class="blogs sec-mar  bg-color-light sec-pad">
            <div class="container">
                <div class="heading">
                    <h2 class="title clr-primary text-start">Blogs</h2>
                    <p class="text-start">Watch and listen Islamic videos, Bayan and sermons from below</p>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                       
                        <div class="row mb-4">
                            @foreach ($blogs as $blog)
                                <div class="col-xl-4">
                                    <img src="{{ $blog->image }}" alt="">
                                </div>
                                <div class="col-xl-8">
                                    <div class="content-box">
                                        <h6 class="title">{{ $blog->title }}</h6>
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}</li>
                                            <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                        </ul>
                                        <p class="description">
                                            {!! Str::limit(strip_tags($blog->body), 200) !!}
                                        </p>
                                        <a href="{{ route('blog.detail', $blog->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">Learn
                                            More</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="row mb-4">
                            <div class="col-xl-4">
                                <img src="assets/media/blogs/blog-2.jpg" alt="">
                            </div>
                            <div class="col-xl-8">
                                <div class="content-box">
                                    <h6 class="title">Islamophobia</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>Nov 28, 2023</li>
                                        <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit sed
                                        do eiusmod tempor incididunt ut labore.</p>
                                    <a href="blog-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn
                                        More</a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row mb-4">
                            <div class="col-xl-4">
                                <img src="assets/media/blogs/blog-3.jpg" alt="">
                            </div>
                            <div class="col-xl-8">
                                <div class="content-box">
                                    <h6 class="title">Muslim Culture</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>Nov 28, 2023</li>
                                        <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit sed
                                        do eiusmod tempor incididunt ut labore.</p>
                                    <a href="blog-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-4">
                                <img src="assets/media/blogs/blog-4.jpg" alt="">
                            </div>
                            <div class="col-xl-8">
                                <div class="content-box">
                                    <h6 class="title">Islamophobia</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>Nov 28, 2023</li>
                                        <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit sed
                                        do eiusmod tempor incididunt ut labore.</p>
                                    <a href="blog-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn
                                        More</a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="pagination-wrape mb-0">
                            {{ $blogs->links() }}
                        </div>
                      
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-1">
                            <form method="post" action="{{route('blog.search')}}">
                                @csrf
                                <div class="input-group form-group">
                                    <input class="form-control" name="title" placeholder="Search">
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
