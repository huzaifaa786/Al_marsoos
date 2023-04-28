<?php $__env->startSection('content'); ?>
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg2" style="background-image: url(<?php echo e(asset('asset/images/islamicb1.jpg')); ?>);"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">Contact us</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('Home.index')); ?>" title=""
                                    itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Contact us</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-tl contact-cont text-center">
                    <span class="theme-clr">Contact us</span>
                    <h2 itemprop="headline">Get In Touch</h2>
                </div>
                <div class="cnt-frm text-center">
                    <form method="post" action="<?php echo e(route('Contact.contact')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mrg10">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <input class="brd-rd5" type="text" placeholder="Name" id="name" name="name">
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <input class="brd-rd5" type="email" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <input class="brd-rd5" type="text" placeholder="Phone"id="phone" name="phone">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea class="brd-rd5" placeholder="Message" id="message" name="message"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button type="submit" class="theme-btn theme-bg brd-rd5">SUBMIT NOW</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="cnt-mp brd-rd5" id="cnt-mp"></div>
                <div class="cnt-inf-wrp">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="sec-tl">
                                <span class="theme-clr">Get Information</span>
                                <h3 itemprop="headline">Contact Details</h3>
                            </div>
                            <ul class="cnt-inf-lst">
                                <li><i class="fas fa-envelope theme-clr"></i> <strong>Email</strong><a href="#"
                                        title="" itemprop="url">info@masjidsidiki.info</a><a href="#"
                                        title="" itemprop="url">www.masjidsidiki.info</a></li>
                                <li><i class="fas fa-phone theme-clr"></i> <strong>Phone</strong><span>(646)
                                        575-0933</span><span>(917) 497-0100</span></li>
                                <li><i class="fas fa-map-marker-alt theme-clr"></i> <strong>Address</strong><span>1462
                                        Boston Road Bronx NY 10456</span></li>
                                <li><i class="fas fa-fax theme-clr"></i>
                                    <strong>Fax</strong><span>(347)-597-5357</span><span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="cnt-img brd-rd5"><img src="<?php echo e(asset('asset/images/resources/photo2.jpg')); ?>" alt="Contact.jpg"
                                    itemprop="image" height="50px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\islamic\resources\views/Contact/contact.blade.php ENDPATH**/ ?>