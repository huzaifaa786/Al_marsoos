
<?php $__env->startSection('content'); ?>
  <!--=====================================-->
        <!--=      Breadcrumb Area Start        =-->
        <!--=====================================-->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('courses.view')); ?>">Courses</a></li>
                        <li><a href="#" class="active">Course Detail</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=   Sermon Detail Area Start   =-->
        <!--=====================================-->
        <section class="sermon-detail sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-12">
                        <div class="heading">
                            <h2 class="title clr-primary text-start">Bayans/Sermons</h2>
                            <p class="text-start">Watch and listen Islamic videos, Bayan and sermons from below</p>
                        </div>
                        <div class="detail-sermon-card">
                            <div class="img-box">
                                <img class="detail-image" src="<?php echo e($courses->image); ?>" style="height:500px;" width=100%  alt="">
                               
                                <div class="content-inner">
                                    <h3 class="title"><?php echo e($courses->name); ?></h3>
                                </div>
                            </div>
                            <div class="content-box">
                                <p>
                                    <?php echo $courses->description; ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 pt-5">
                        <div class="sidebar-1 p-0">
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
        <!--=====================================-->
        <!--=  More Sermons Area Start   =-->
        <!--=====================================-->
        <section class="sermons">
            <div class="container">
                <div class="heading">
                    <h2 class="title clr-primary text-start mb-0">More Videos Like This</h2>
                </div>
                <div class="row">
                    <?php $__currentLoopData = App\Models\Course::latest()->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <?php if($course->id != $courses->id): ?>
                    <div class="col-lg-4 col-12 mb-5">
                        <div class="sermon-card">
                            <div class="sermon-img">
                                <img src="<?php echo e($course->image); ?>" style=" height:150px; width:100%;" alt="" class="image">
                                <div class="overlay">
                                    <a href="#" class="icon" data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                            ></i></a>
                                </div>
                            </div>
                            <div class="content-box">
                                <h6 class="title"><?php echo e($course->name); ?></h6>
                                <p class="description">
                                    <?php echo Str::limit(strip_tags($course->description), 100); ?>

                                </p>
                                <a href="<?php echo e(route('Course.detail', $course->id)); ?>" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <iframe style="width: 100%;height:400px;border: 0;"
                                        src="https://www.youtube.com/embed/B0-0PvAAgzg"
                                        title="360 Product Video / Fashion Feature"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/Courses/detailcourse.blade.php ENDPATH**/ ?>