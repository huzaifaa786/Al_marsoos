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
                    <li><a href="{{route('Blog.bloglist')}}" class="active">Blog Detail</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=   Blogs Area Start   =-->
    <!--=====================================-->
    <section class="blogs-detail sec-mar">
        <div class="container">
            <div class="heading w-75 mb-0">
                <h2 class="title clr-primary text-start">{{$blog->title}}</h2>
            
            </div>
            <div class="mt-0 mb-2">
                <i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="detail-blog-card">
                        <div class="img-box">
                            <img src="{{ $blog->image }}" style="height:500px;" width=100% alt="">
                            <div class="content-inner">
                                <h3 class="title">{{ $blog->title }}</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}</li>
                                    <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <div>
                                {!!$blog->body!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-1 p-0">
                        <form method="post" action="{{route('blog.search')}}">
                            @csrf
                            <div class="input-group form-group">
                                <input class="form-control" name="title" placeholder="Search">
                                <button class="input-group-text ps-3 pe-3" type="submit"><i
                                        class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="row">

                       @foreach ( App\Models\Blog::latest()->take(4)->get() as $key => $Blog)
                              @if ($Blog->id != $blog->id)    
                        <div class="col-lg-12 col-sm-6">
                            <div class="blog-card mt-3 mb-3">
                                <img src="{{$Blog->image}}" style=" height:150px; width:100%;"  alt="">
                                <div class="content-box">
                                    <h6 class="title">{{$Blog->title}}</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>{{ $Blog->created_at->format('M d, Y') }}</li>
                                        <li><i class="fas fa-user"></i>Ahmad Ansari</li>
                                    </ul>
                                    <p class="description">{!! Str::limit(strip_tags($blog->body), 50) !!}</p>
                                    <a href="{{ route('blog.detail', $Blog->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        {{-- <div class="col-lg-12 col-sm-6">
                            <div class="blog-card mb-3">
                                <img src="assets/media/blogs/blog-9.jpg" alt="">
                                <div class="content-box">
                                    <h6 class="title">Islamophobia</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>Nov 28, 2023</li>
                                        <li><i class="fas fa-user"></i>Mufti Akbar</li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit sed do
                                        eiusmod tempor incididunt ut labore.</p>
                                    <a href="blog-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="blog-card mb-3">
                                <img src="assets/media/blogs/blog-10.png" alt="">
                                <div class="content-box">
                                    <h6 class="title">Islamic Stories</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>Nov 28, 2023</li>
                                        <li><i class="fas fa-user"></i>Molana Faiq</li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit sed do
                                        eiusmod tempor incididunt ut labore.</p>
                                    <a href="blog-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
