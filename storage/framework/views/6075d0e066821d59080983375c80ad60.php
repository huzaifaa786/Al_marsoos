
<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index-1.html">Home</a></li>
                    <li><a href="courses.html" class="active">Courses</a></li>
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
                                    <img src="<?php echo e($course->image); ?>" alt="" class="image">
                                    <div class="overlay">
                                        <a href="#" class="icon" data-bs-toggle="modal"
                                            data-bs-target="#videoModal"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h6 class="title"><?php echo e($course->name); ?></h6>
                                    <p class="description">
                                        <?php echo Str::limit(strip_tags($course->description), 200); ?>

                                    </p>
                                    <a href="course-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <div class="pagination-wrape">
                        <?php echo e($courses->links()); ?>

                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-1">
                        <form method="get" action="https://uiparadox.co.uk/public/templates/al-buraq/courses.html">
                            <div class="input-group form-group">
                                <input class="form-control" name="query" placeholder="Search">
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