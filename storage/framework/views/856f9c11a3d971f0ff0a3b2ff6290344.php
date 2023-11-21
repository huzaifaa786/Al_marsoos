<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uiparadox.co.uk/public/templates/al-buraq/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 06:58:43 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Al-Marsoos   </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/media/mlogo.PNG')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/sal.css')); ?>">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-266165434-1');
    </script>


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="<?php echo e(asset('assets/media/mlogo.PNG')); ?>" alt="logo" class="mb-5"><br>
        <img src="<?php echo e(asset('assets/media/preloader.gif')); ?>" alt="logo">
    </div>
    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper">
        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header">
            <!-- Start Main menu Nav -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-logo" href="<?php echo e(route('Home.index')); ?>"><img
                            src="<?php echo e(asset('assets/media/mlogo.PNG')); ?>" width="50px" height="50px"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse center justify-content-end" id="mynavbar">
                        <ul class="navbar-nav text-right mainmenu ">
                            <li class="menu-item-has-children">
                                <a href="<?php echo e(route('Home.index')); ?>" class="active">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo e(route('Blog.bloglist')); ?>">Blogs</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo e(route('about')); ?>">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">More</a>
                                <ul class="al-buraq-submenu multiline">
                                    <li><a href="<?php echo e(route('Home.index')); ?>">Home </a></li>
                                    <li><a href="services.html">Services Page</a></li>
                                    <li><a href="courses.html">Courses Page</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="d-flex right-nav">
                            <a href="donate-now.html" class="al-buraq-btn btn-fill-primary btn-lg">Donate Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <?php echo $__env->yieldContent('content'); ?>
        <!--=====================================-->
        <!--=     Footer Area Start     =-->
        <!--=====================================-->
        <footer>
            <div class=" footer-top container ">
                <div class="footer-light bg-color-light">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6" data-sal-delay="100">
                            <div class="footer-widget">
                                <a href="<?php echo e(route('Home.index')); ?>"><img class="logo" alt=""
                                        src="<?php echo e(asset('assets/media/mlogo.PNG')); ?>"></a>
                                <p>Islam is about knowing what and how to live your life in the best way. Lorem Ipsum
                                    proin gravida nibh vel velit auctor aliquet.</p>
                                <ul class="list-unstyled info">
                                    <li><i class="fas fa-map-marked-alt"></i>1957 Turkey Pen Road, New York</li>
                                    <li><a href="mailto:info@al-buraq.com"><i
                                                class="fas fa-envelope"></i>contactinfo@al-buraq.com </a></li>
                                    <li><a href="tel:1234567678"><i class="fas fa-phone-alt"></i>+1 917-239-5190</a>
                                    </li>
                                    <li><i class="fas fa-fax"></i>646-385-7126</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6" data-sal-delay="100">
                            <div class="footer-widget">
                                <h6 class="widget-title">Quick Links</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="blogs.html">Blogs</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6" data-sal-delay="100">
                            <div class="footer-widget">
                                <h6 class="widget-title">Latest Blogs</h6>
                                <div class="footer-blogs-link">
                                    <?php $__currentLoopData = App\Models\Blog::latest()->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="row" href="<?php echo e(route('blog.detail', $Blog->id)); ?>">
                                            <div class="col-5 mb-3">
                                                <img src="<?php echo e($Blog->image); ?>" alt="">
                                            </div>
                                            <div class="col-7 ps-0">
                                                <h6 class="title"><?php echo e($Blog->title); ?></h6>
                                                <p class="date"><i
                                                        class="fas fa-calendar-alt"></i><?php echo e($Blog->created_at->format('M d, Y')); ?>

                                                </p>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6" data-sal-delay="100">
                            <div class="footer-widget">
                                <h6 class="widget-title">Contact us</h6>
                                <div class="contact-form">
                                    <form method="post"
                                        action="<?php echo e(route('contact.store')); ?>"
                                        class="footer-contact-form ">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Mobile No" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="message" class="form-control" name="message" placeholder="Write Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="mt-0 mb-3">
                                            <button type="submit" class="contact-form-btn">Send Now</button>
                                        </div>
                                        <div class="alert-msg message mb-3"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-copyright">
                        <span class="copyright-text">© 2023. All rights reserved by Al-Marsoos.</span>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <!-- Jquery Js -->
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/sal.js')); ?>"></script>
    <?php echo $__env->yieldContent('jscript'); ?>
    <!-- Site Scripts -->
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
        < script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" >
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>


<!-- Mirrored from uiparadox.co.uk/public/templates/al-buraq/index-1.html by HTTrack Website Copier/3.x [XR&CO2014], Wed, 08 Nov 2023 06:58:43 GMT -->

</html>
<?php /**PATH F:\laraval\Al_marsoos\resources\views/layout/layout.blade.php ENDPATH**/ ?>