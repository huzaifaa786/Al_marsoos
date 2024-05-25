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
    
    <!--=====================================-->
    <!--=        Contact Area Start         =-->
    <!--=====================================-->
    <section class="contact sec-mar mb-none-on-mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" required name="name">
                            </div>
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" required
                                    name="email">
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="phone">Mobile No</label>
                            <input type="integer" class="form-control" name="phone" id="phone" required
                                placeholder="Enter Mobile No" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" type="text" required></textarea>
                        </div>
                        <button type="submit" class=" al-buraq-btn btn-fill-primary btn-xl">Submit</button>
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

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\Al_marsoos\resources\views/Contact/contact.blade.php ENDPATH**/ ?>