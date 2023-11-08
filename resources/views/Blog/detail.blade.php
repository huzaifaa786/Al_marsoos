{{-- @extends('layout.layout')
@section('content')
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg2" style="background-image: url({{ asset('asset/images/bloglist.jpg') }});"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">Help Needed For Poor</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('Blog.bloglist') }}" title=""
                                    itemprop="url">Blog</a></li>
                            <li class="breadcrumb-item active">Blog Detail</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="blog-detail-wrp">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-lg-9">
                            <div class="blog-detail">
                                <div class="blog-detail-inf brd-rd5">
                                    <img src="{{ asset('asset/images/resources/photo2.jpg') }}" alt="blog-detail-img.jpg"
                                        itemprop="image" height="100px">
                                    <div class="blog-detail-inf-inr">
                                        <ul class="pst-mta">
                                            <li><i class="far fa-calendar-alt theme-clr"></i>
                                                {{ $blog->created_at->format('M d, Y') }}</li>
                                            <li><i class="far fa-user theme-clr"></i> By <a href="#" title=""
                                                    itemprop="url">Mubeen Malik</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-detail-desc">
                                    <p itemprop="description">{{ $blog->title }}</p>
                                    <p itemprop="description">{!! $blog->body !!}</p>
                                    <img src="{{ $blog->image }}" alt="{{ $blog->title }}" itemprop="image"
                                        style="height:500px;">

                                    <div class="pst-shr-tgs">
                                        <div class="scl1 float-left">
                                            <span>Share This:</span>
                                            <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                            <a href="#" title="Youtube" itemprop="url" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </div>
                                        <div class="tag-clouds float-right">
                                            <span>Tags:</span>
                                            <a href="#" title="" itemprop="url">Namaz</a>, <a href="#"
                                                title="" itemprop="url">Roza</a>, <a href="#" title=""
                                                itemprop="url">Hajj</a>, <a href="#" title=""
                                                itemprop="url">Zakat</a>
                                        </div>
                                    </div>
                                    <div class="cmts-wrp">
                                        <h4 itemprop="headline">02 Thoughts on <span class="theme-clr">'Help Needed For
                                                Poor'</span></h4>
                                        <ul class="cmt-thrd">
                                            <li>
                                                <div class="cmt-bx">
                                                    <img class="brd-rd50" src="assets/images/resources/cmt-img1.jpg"
                                                        alt="cmt-img1.jpg" itemprop="image">
                                                    <div class="cmt-inf">
                                                        <h6 itemprop="headline">Mike Stepliton</h6>
                                                        <span><i class="theme-clr far fa-calendar-alt"></i>Aug 14,
                                                            2020</span>
                                                        <p itemprop="description">Similique sunt in culpa qui officia.vero
                                                            eos et accusamus et iusto odio dignissimos ducimuss qui
                                                            blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                            dolores</p>
                                                        <a class="comment-reply-link theme-clr" href="#"
                                                            title="" itemprop="url">Reply</a>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li>
                                                        <div class="cmt-bx">
                                                            <img class="brd-rd50"
                                                                src="assets/images/resources/cmt-img2.jpg"
                                                                alt="cmt-img2.jpg" itemprop="image">
                                                            <div class="cmt-inf">
                                                                <h6 itemprop="headline">Maria Stepliton</h6>
                                                                <span><i class="theme-clr far fa-calendar-alt"></i>Aug 14,
                                                                    2020</span>
                                                                <p itemprop="description">Similique sunt in culpa qui
                                                                    officia.vero eos et accusamus et iusto odio dignissismos
                                                                    ducimuss qui blanditiis praesentium voluptatum.</p>
                                                                <a class="comment-reply-link theme-clr" href="#"
                                                                    title="" itemprop="url">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul><!-- Comment Thread -->
                                    </div><!-- Comments Wrap -->
                                    <div class="cnt-frm cmt-frm">
                                        <h4 itemprop="headline">Leave Your Comments</h4>
                                        <p itemprop="description">Spam are not sunt in culpa qui officia.vero eos et
                                            accusamus.</p>
                                        <form>
                                            <div class="row mrg10">
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <input class="brd-rd5" type="text" placeholder="Name">
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <input class="brd-rd5" type="email" placeholder="Email">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <input class="brd-rd5" type="text" placeholder="Subject">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea class="brd-rd5" placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <button type="submit" class="theme-btn theme-bg brd-rd5">POST
                                                        COMMENT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="sidebar-wrp">
                                <div class="widget">
                                    <h5 itemprop="headline">Search</h5>
                                    <form class="srch-frm brd-rd5">
                                        <input type="text" placeholder="Search">
                                        <button type="submit" class="theme-clr"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h5 itemprop="headline">Categories</h5>
                                    <ul class="cat-lst">
                                        <li><a href="#" title="" itemprop="url">House Accommodation</a>(10)
                                        </li>
                                        <li><a href="#" title="" itemprop="url">Health Events</a>(06)</li>
                                        <li><a href="#" title="" itemprop="url">Donation Event</a>(03)</li>
                                        <li><a href="#" title="" itemprop="url">Education</a>(07)</li>
                                        <li><a href="#" title="" itemprop="url">Food</a>(12)</li>
                                        <li><a href="#" title="" itemprop="url">Health Care</a>(02)</li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 itemprop="headline">Latest Causes</h5>
                                    <div class="ltst-car lst-caus text-center owl-carousel">
                                        <div class="lst-cas">
                                            <img class="brd-rd5" src="assets/images/resources/lst-cas-img1.jpg"
                                                alt="lst-cas-img1.jpg" itemprop="image">
                                            <h6 itemprop="headline"><a href="#" title=""
                                                    itemprop="url">Water For All Cause</a></h6>
                                        </div>
                                        <div class="lst-cas">
                                            <img class="brd-rd5" src="assets/images/resources/lst-cas-img2.jpg"
                                                alt="lst-cas-img2.jpg" itemprop="image">
                                            <h6 itemprop="headline"><a href="#" title="" itemprop="url">Help
                                                    For Education</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h5 itemprop="headline">Recent Posts</h5>
                                    <div class="rcnt-wrp">
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title=""
                                                itemprop="url"><img src="assets/images/resources/rcnt-img1.jpg"
                                                    alt="rcnt-img1.jpg" itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Importance of Prayer</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept 09,
                                                    2020</span>
                                            </div>
                                        </div>
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title=""
                                                itemprop="url"><img src="assets/images/resources/rcnt-img2.jpg"
                                                    alt="rcnt-img2.jpg" itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Islamic Teachings</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Jun 05,
                                                    2020</span>
                                            </div>
                                        </div>
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title=""
                                                itemprop="url"><img src="assets/images/resources/rcnt-img3.jpg"
                                                    alt="rcnt-img3.jpg" itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Video Tutorials</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Mar 20,
                                                    2020</span>
                                            </div>
                                        </div>
                                        <div class="rcnt-bx">
                                            <a class="brd-rd5" href="blog-detail.html" title=""
                                                itemprop="url"><img src="assets/images/resources/rcnt-img4.jpg"
                                                    alt="rcnt-img4.jpg" itemprop="image"></a>
                                            <div class="rcnt-inf">
                                                <h6 itemprop="headline"><a href="blog-detail.html" title=""
                                                        itemprop="url">Give Zakat Online</a></h6>
                                                <span class="theme-clr"><i class="far fa-calendar-alt"></i>Feb 25,
                                                    2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Sidebar Wrap -->
                        </div>
                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
@endsection() --}}
