
<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('courses.view')); ?>" class="active">Courses</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=   Sermons Area Start   =-->
    <!--=====================================-->
    <section class="sermons sec-pad sec-mar mb-none-on-mobile sermons-bg">
        <div class="container">
            <div class="heading">
                <h2 class="title clr-primary text-start">Courses/Sermons</h2>
                <p class="text-start">Watch and listen Islamic videos, Bayan and sermons from below</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        
                        <div class="col-lg-6 col-sm-6 mb-4 col-12 ">
                            <div class="sermon-card">
                                <div class="sermon-img">
                                    <img src="<?php echo e($course->image); ?>"  alt="Image" style="height:300px;" width=447px class="image">
                                    <div class="overlay">
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><?php echo e($course->name); ?></h6>
                                    <p class="description">
                                        <?php echo Str::limit(strip_tags($course->description), 200); ?>

                                    </p>
                                    <a href="<?php echo e(route('Course.detail', $course->id)); ?>" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                    <div class="pagination-wrape">
                        <?php echo e($courses->links()); ?>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-1">
                        <form method="post" action="<?php echo e(route('course.search')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="input-group form-group">
                                <input class="form-control" name="name" placeholder="Search">
                                <button class="input-group-text ps-3 pe-3" type="submit"><i
                                        class="fal fa-search"></i></button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/Courses/courses.blade.php ENDPATH**/ ?>