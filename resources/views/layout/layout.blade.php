<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from masjidsidiki.info/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 07:10:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Al Marsoos</title>

    <link rel="shortcut icon" href="favicon.html">
    <link rel="icon" sizes="16x16 32x32 64x64" href="favicon.html">
    <link rel="icon" type="image/png" sizes="196x196" href="{{ asset('asset/images/favicon-192.html') }}">
    <link rel="icon" type="image/png" sizes="160x160" href="{{ asset('asset/images/favicon-160.html') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('asset/images/favicon-96.html') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('asset/images/favicon-64.html') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/images/favicon-32.html') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/favicon-16.html') }}">
    <link rel="apple-touch-icon" href="{{ asset('asset/images/favicon-57.html') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('asset/images/favicon-114.html') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('asset/images/favicon-72.html') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('asset/images/favicon-144.html') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('asset/images/favicon-60.html') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('asset/images/favicon-120.html') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('asset/images/favicon-76.html') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('asset/images/favicon-152.html') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/images/favicon-180.html') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ asset('asset/images/favicon-144.html') }}">
    <meta name="msapplication-config" content="{{ asset('asset/images/browserconfig.html') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('asset/css/colors/color.css') }}" title="color" /><!-- Color -->
    <link rel="alternate stylesheet" href="{{ asset('asset/css/colors/color2.css') }}" title="color2" />
    <!-- Color2 -->
    <link rel="alternate stylesheet" href="{{ asset('asset/css/colors/color3.css') }}" title="color3" />
    <!-- Color3 -->
    <link rel="alternate stylesheet" href="{{ asset('asset/css/colors/color4.css') }}" title="color4" />
    <!-- Color4 -->

    <!-- Revolution Style -->
    <link rel="stylesheet" href="{{ asset('asset/css/revolution/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/revolution/navigation.css') }}">
    @yield('css')
</head>

<body itemscope>
    <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div><!-- Preloader -->
    <main>
        <header class="style1 style3">
            <div class="topbar">
                <div class="container">
                    <div class="scl1 float-left">
                        <span>Follow us:</span>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                class="fab fa-google-plus-g"></i></a>
                    </div>
                    <ul class="float-right tp-lnks">
                        <li><i class="fas fa-envelope theme-clr"></i><a href="#" title=""
                                itemprop="url">info@bismillah.com</a></li>
                        <li><i class="flaticon-phone-volume theme-clr"></i>+(00) 123-345-11</li>
                    </ul>
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo "><a href="" title="Logo"><img
                                src="{{ asset('asset/images/kkkk.jpeg') }}" style="height: 100px; width:100px;"
                                alt="logo1.png"></a>
                    </div><!-- Logo -->
                    <nav>
                        <div>
                            <ul>
                                <li><a href="{{ route('Home.index') }}" title="" itemprop="url">Home</a></li>
                                <li><a href="{{ route('Blog.bloglist') }}" title="" itemprop="url">Blogs</a>
                                </li>
                                {{-- <li class="menu-item-has-children"><a href="#" title=""
                                        itemprop="url">More Pages</a><i class="fas fa-angle-down"></i>
                                    <ul>
                                        <li class="menu-item-has-children"><a href="#" title=""
                                                itemprop="url">Our Events</a><i class="fas fa-angle-right"></i>
                                            <ul>
                                                <li><a href="{{ route('MorePages.ourevents') }}" title=""
                                                        itemprop="url">Our
                                                        Events</a></li>
                                                <li><a href="{{ route('MorePages.eventdetail') }}" title=""
                                                        itemprop="url">Event
                                                        Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title=""
                                                itemprop="url">Our Products</a><i class="fas fa-angle-right"></i>
                                            <ul>
                                                <li><a href="product.html" title="" itemprop="url">Our
                                                        Products</a></li>
                                                <li><a href="product-detail.html" title=""
                                                        itemprop="url">Product Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title=""
                                                itemprop="url">Our Team</a><i class="fas fa-angle-right"></i>
                                            <ul>
                                                <li><a href="team.html" title="" itemprop="url">Our Team</a>
                                                </li>
                                                <li><a href="team-detail.html" title="" itemprop="url">Team
                                                        Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title=""
                                                itemprop="url">Gallery Styles</a><i class="fas fa-angle-right"></i>
                                            <ul>
                                                <li><a href="gallery1.html" title="" itemprop="url">Gallery
                                                        Style 1</a></li>
                                                <li><a href="gallery2.html" title="" itemprop="url">Gallery
                                                        Style 2</a></li>
                                                <li><a href="gallery3.html" title="" itemprop="url">Gallery
                                                        Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html" title="" itemprop="url">Error Page</a></li>
                                        <li><a href="search-found.html" title="" itemprop="url">Search
                                                Found</a></li>
                                        <li><a href="search-not-found.html" title="" itemprop="url">Search Not
                                                Found</a></li>
                                        <li><a href="islamic-teaching.html" title="" itemprop="url">Islamic
                                                Teaching</a></li>
                                        <li><a href="about.html" title="" itemprop="url">About Us</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="menu-item-has-children"><a href="#" title=""
                                        itemprop="url">Our Causes</a><i class="fas fa-angle-down"></i>
                                    <ul>
                                        <li><a href="cause.html" title="" itemprop="url">Cause</a></li>
                                        <li><a href="cause-detail.html" title="" itemprop="url">Cause
                                                Detail</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="menu-item-has-children"><a href="#" title=""
                                        itemprop="url">Our Services</a><i class="fas fa-angle-down"></i>
                                    <ul>
                                        <li><a href="service.html" title="" itemprop="url">Service Style 1</a>
                                        </li>
                                        <li><a href="service2.html" title="" itemprop="url">Service Style 2</a>
                                        </li>
                                        <li><a href="service-detail.html" title="" itemprop="url">Service
                                                Detail</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('Contact.contact') }}" title=""
                                        itemprop="url">Contact</a></li>
                            </ul>
                            <a class="srch-btn" href="#" title="" itemprop="url"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div><!-- Logo Menu Sec -->
        </header><!-- Header -->
        <div class="header-search">
            <span class="srch-cls-btn brd-rd5"><i class="fas fa-times"></i></span>
            <form>
                <input type="text" placeholder="Search here...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div><!-- Header Search -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <ul class="rspn-scil">
                    <li><a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                class="fab fa-google-plus-g"></i></a></li>
                </ul>
                <form class="rspn-srch">
                    <input type="text" placeholder="Enter Your Keyword" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Logo" itemprop="url"><img
                            src="{{ asset('asset/images/logo2.png') }}" alt="logo2.png" itemprop="image"></a></div>
                <div class="rspn-cnt">
                    <span><i class="fas fa-envelope theme-clr"></i><a href="#" title=""
                            itemprop="url">info@bismillah.com</a></span>
                    <span><i class="flaticon-phone-volume theme-clr"></i>+(00) 123-345-11</span>
                </div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>
                    <li><a href="{{ route('Home.index') }}" title="" itemprop="url">Home</a></li>
                    <li><a href="{{ route('Blog.bloglist') }}" title="" itemprop="url">Blogs</a></li>
                    {{-- <li class="menu-item-has-children"><a href="#" title="" itemprop="url">More --}}
                    {{-- Pages</a> --}}
                    {{-- <ul> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Our
                                    Events</a>
                                <ul>
                                    <li><a href="events.html" title="" itemprop="url">Our Events</a></li>
                                    <li><a href="event-detail.html" title="" itemprop="url">Event Detail</a>
                                    </li>
                                </ul>
                            </li> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Our
                                    Products</a>
                                <ul>
                                    <li><a href="product.html" title="" itemprop="url">Our Products</a></li>
                                    <li><a href="product-detail.html" title="" itemprop="url">Product
                                            Detail</a></li>
                                </ul>
                            </li> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Our
                                    Team</a>
                                <ul>
                                    <li><a href="team.html" title="" itemprop="url">Our Team</a></li>
                                    <li><a href="team-detail.html" title="" itemprop="url">Team Detail</a></li>
                                </ul>
                            </li> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" title=""
                                    itemprop="url">Gallery Styles</a>
                                <ul>
                                    <li><a href="gallery1.html" title="" itemprop="url">Gallery Style 1</a>
                                    </li>
                                    <li><a href="gallery2.html" title="" itemprop="url">Gallery Style 2</a>
                                    </li>
                                    <li><a href="gallery3.html" title="" itemprop="url">Gallery Style 3</a>
                                    </li>
                                </ul>
                            </li> --}}
                    {{-- <li><a href="404.html" title="" itemprop="url">Error Page</a></li>
                            <li><a href="search-found.html" title="" itemprop="url">Search Found</a></li>
                            <li><a href="search-not-found.html" title="" itemprop="url">Search Not Found</a>
                            </li>
                            <li><a href="islamic-teaching.html" title="" itemprop="url">Islamic Teaching</a>
                            </li>
                            <li><a href="about.html" title="" itemprop="url">About Us</a></li> --}}
                    {{-- </ul> --}}
                    {{-- </li> --}}
                    {{-- <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Our
                            Causes</a>
                        <ul>
                            <li><a href="cause.html" title="" itemprop="url">Cause</a></li>
                            <li><a href="cause-detail.html" title="" itemprop="url">Cause Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Our
                            Services</a>
                        <ul>
                            <li><a href="service.html" title="" itemprop="url">Service Style 1</a></li>
                            <li><a href="service2.html" title="" itemprop="url">Service Style 2</a></li>
                            <li><a href="service-detail.html" title="" itemprop="url">Service Detail</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ route('Contact.contact') }}" title="" itemprop="url">Contact</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        @yield('content')
        <footer>
            <div class="gap no-gap">
                <img class="vector-bg-footer" src="{{ asset('asset/images/bg-vector.png') }}" alt="vector-bg"
                    itemprop="image">
                <div class="container">
                    <div class="footer-data brd-rd20 overlap-220">
                        <div class="footer-data-inr">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="widget">
                                        <h5 itemprop="headline">About Us</h5>
                                        <p itemprop="description">Vividly colored flowers swayed gracefully, filling the air with a delightful fragrance,
                                             while the sun's warm embrace bathed everything in a golden glow.
                                        </p>
                                        <div class="loc-mp brd-rd5" id="loc-mp"></div>
                                        <span><i class="fas fa-map-marker-alt theme-clr"></i>Find us on Map</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="widget">
                                        <h5 itemprop="headline">Latest Blogs</h5>
                                        <div class="rcnt-wrp">
                                            <div class="rcnt-bx">
                                                <a class="brd-rd5" href="" title="" itemprop="url"><img
                                                        src="{{ asset('asset/images/resources/rcnt-img1.jpg') }}"
                                                        alt="rcnt-img1.jpg" itemprop="image"></a>
                                                <div class="rcnt-inf">
                                                    <h6 itemprop="headline"><a href="" title=""
                                                            itemprop="url">Help Poor People</a></h6>
                                                    <span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept
                                                        09, 2020</span>
                                                </div>
                                            </div>
                                            <div class="rcnt-bx">
                                                <a class="brd-rd5" href="" title="" itemprop="url"><img
                                                        src="{{ asset('asset/images/resources/rcnt-img2.jpg') }}"
                                                        alt="rcnt-img2.jpg" itemprop="image"></a>
                                                <div class="rcnt-inf">
                                                    <h6 itemprop="headline"><a href="" title=""
                                                            itemprop="url">Learn Modern Islam</a></h6>
                                                    <span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept
                                                        05, 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="widget">
                                        <h5 itemprop="headline">Contact Info</h5>
                                        <ul class="cnt-inf">
                                            <li><i class="far fa-envelope theme-clr"></i><a href="#"
                                                    title="" itemprop="url">bismillah@mail.com</a></li>
                                            <li><i class="fas fa-phone theme-clr"></i><span>1800-123-456-7</span></li>
                                            <li><i class="fas fa-map-marker-alt theme-clr"></i>19-J David Road H Block,
                                                America</li>
                                            <li><i class="fas fa-fax theme-clr"></i>1800-123-456-7</li>
                                        </ul>
                                        <div class="scl1">
                                            <a href="#" title="Twitter" itemprop="url" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" title="Facebook" itemprop="url" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="#" title="Linkedin" itemprop="url" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                            <a href="#" title="Instagram" itemprop="url" target="_blank"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" title="Youtube" itemprop="url" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="widget">
                                        <h5 itemprop="headline">Quick Contact</h5>
                                        <form>
                                            <div class="row mrg10">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input class="brd-rd5" type="text" placeholder="Name">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input class="brd-rd5" type="email" placeholder="Email">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea class="brd-rd5" placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <button class="brd-rd5 theme-btn theme-bg">SUBMIT NOW</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cpy-rgt text-center">
                            <p itemprop="description"><a href="#" title="" itemprop="url"
                                    target="_blank">BISMILLAH</a> &copy; 2020 / ALL RIGHTS RESERVED</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section>
            <div class="gap theme-bg bottom-spac50 top-spac270">
                <div class="container">
                    <div class="newsletter-wrp">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <h4 itemprop="headline">Subscribe, For Weekly Updates</h4>
                            </div>
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <form class="newsletter brd-rd30">
                                    <input type="email" placeholder="Enter your email address">
                                    <button type="submit" class="green-bg theme-btn">SIGNUP NOW</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- Newsletter Wrap -->
                </div>
            </div>
        </section>
        {{-- <div class="sidepanel">
            <span><i class="fa fa-cog fa-spin"></i></span>
            <div class="color-picker">
                <h3>Choose Your Color</h3>
                <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
                <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
                <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
                <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
            </div><!-- Color Picker -->
        </div><!-- Side Panel --> --}}
    </main><!-- Main Wrapper -->

    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcavdONRtu_0BfV63xiQX1LiJpX1ZJ2N0"></script>
    <script src="{{ asset('asset/js/google-map-int.js') }}"></script>
    <script src="{{ asset('asset/js/custom-scripts.js') }}"></script>

    <!-- Revolution JS Files -->
    <script src="{{ asset('asset/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Slider Revolution 5.0 Extensions -->
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('asset/js/revolution/revolution-init.js') }}"></script>
    @yield('script')
</body>

<!-- Mirrored from masjidsidiki.info/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 07:10:49 GMT -->

</html>
