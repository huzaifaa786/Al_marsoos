
<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('scholar')); ?>" class="active">Scholars</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Scholars Area Start         =-->
    <!--=====================================-->
    <section class="scholars sec-pad sec-mar mb-none-on-mobile  scholars-bg">
        <div class="container">
            <div class="heading">
                <h2 class="title clr-primary">Islamic Scholars</h2>
                <p>It is the responsibility of every Muslim to serve for DEEN</p>
            </div>
            <div class="row offset-lg-2 text-center justify-content-center">
                <?php $__currentLoopData = $scholars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                
                <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="<?php echo e($scholar->image); ?>" style="width:290px;height:250px" alt="">
                        <div class="content-box">
                            <h6 class="name"><?php echo e($scholar->name); ?></h6>
                            <p class="about-scholar">
                                <?php echo Str::limit(strip_tags($scholar->description), 100); ?> 
                            </p>
                            <a href="<?php echo e(route('scholar.detail', $scholar->id)); ?>" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <div class="paginate">
                <?php echo e($scholars->links()); ?>

            </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/Scholars/scholars.blade.php ENDPATH**/ ?>