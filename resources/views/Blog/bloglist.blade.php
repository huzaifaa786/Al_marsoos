@extends('layout.layout')
@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg2" style="background-image: url({{ asset('asset/images/photo2.jpg') }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">Latest Al Marsoos Updates</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('Home.index') }}" title=""
                                    itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Al Marsoos News</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="remove-ext3 blog-sec">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-md-4 col-sm-6 col-lg-6">
                                <div class="post-bx lst brd-rd5">
                                    <div class="post-thmb"><a href="{{ route('blog.detail',$blog->id) }}" title="" itemprop="url"><img
                                                src="{{ $blog->image }}" alt="{{ $blog->title }}" itemprop="image"></a>
                                    </div>
                                    <div class="post-inf">
                                        <h5 itemprop="headline"><a href="{{ route('blog.detail',$blog->id) }}" title=""
                                                itemprop="url">{{ $blog->title }}</a></h5>
                                        <ul class="pst-mta">
                                            <li><i class="far fa-calendar-alt theme-clr"></i>
                                                {{ $blog->created_at->format('M d, Y') }}</li>
                                            <li><i class="far fa-user theme-clr"></i> By <a href="#" title=""
                                                    itemprop="url">Mubeen Malik</a></li>
                                        </ul>
                                        <p itemprop="description">{!! Str::limit(strip_tags($blog->body), 200) !!}</p>
                                        <a href="{{ route('blog.detail',$blog->id) }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
