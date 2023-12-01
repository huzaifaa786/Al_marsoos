
<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('scholar')); ?>">Scholars</a></li>
                    <li><a href="#" class="active">Scholars Detail</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=    Scholar Detail Area Start      =-->
    <!--=====================================-->
    <section class="scholar-detail sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo e($scholar->image); ?>" alt="">
                    <a href="<?php echo e(route('contact')); ?>" class="al-buraq-btn btn-fill-primary btn-xl-2 mt-3">Contact Now</a>
                </div>
                <div class="col-lg-8">
                    <div class="content-section">
                        <div class="top-content">
                            <h3 class="scholar-name"><?php echo e($scholar->name); ?></h3>
                        </div>
                        <hr>
                        <h6 class="content-title">Overview</h6>
                        <p style="text-align: justify">
                            <?php echo $scholar->description; ?>

                        </p>
                        <h6 class="content-title">Personal Profile</h6>
                        <div class="row profile-tab">
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">DEGREE: <span><?php echo e($scholar->qualification); ?></span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">SERVING EXPERIENCE: <span><?php echo e($scholar->experience); ?></span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">PHONE: <span><?php echo e($scholar->mobileno); ?></span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">EMAIL: <span><?php echo e($scholar->email); ?></span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=     More Scholars Area Start      =-->
    <!--=====================================-->
    <section class="scholars sec-mar mb-none-on-mobile ">
        <div class="container">
            <div class="scholars-slider justify-content-center">
                <?php $__currentLoopData = App\Models\Scholars::latest()->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scholars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($scholars->id != $scholar->id): ?>
                <div class="scholar-box text-center">
                    <img src="<?php echo e($scholars->image); ?>" style="width:290px;height:250px" alt="">
                    <h6 class="name"><?php echo e($scholars->name); ?></h6>
                    <p class="about-scholar">
                        <?php echo e($scholars->description); ?>

                    </p>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <div class="text-center">
                <a href="<?php echo e(route('scholar')); ?>" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/Scholars/scholarsdetail.blade.php ENDPATH**/ ?>