<?php $__env->startSection('content'); ?>
 <!--=====================================-->
        <!--=      Breadcrumb Area Start        =-->
        <!--=====================================-->
        <section class="breadcrumb mb-0">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>" class="active">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
 <!--=====================================-->
        <!--=          Map Area Start           =-->
        <!--=====================================-->
        <section class="sec-mar">
            <div class="container">
                <img src="<?php echo e(asset('assets/media/contact/map.png')); ?>" alt="">
            </div>
        </section>
        <!--=====================================-->
        <!--=        Contact Area Start         =-->
        <!--=====================================-->
<section class="contact sec-mar mb-none-on-mobile">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form method="post" action="" class="al-buraq-contact-form card">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="4" id="contact-message" required name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <button type="submit" class="al-buraq-btn btn-fill-primary btn-xl">Send Message</button>
                    </div>
                    <!-- Alert Message -->
                    <div class="alert-msg message"></div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <h5 class="mb-2">Get in Touch</h5>
                    <p class="mb-2">Be free to contact us if you have any question or confussion. We will
                        contact you back as soon as possible</p>
                    <h5 class="mb-2">Email</h5>
                    <p class="mb-2">Our support team will get back to in 24h during standard business hours.</p>
                    <h4><a href="mailto:info@example.com">info@example.com</a></h4>
                    <h5 class="mb-2">Contact</h5>
                    <p class="mb-2">Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                    <h4><a href="tel:+12445383653">+1 244 538 3653</a></h4>
                    <h5 class="mb-2">Address</h5>
                    <p class="address">1957 Turkey Pen Road, New York</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/Contact/contact.blade.php ENDPATH**/ ?>