<?php $__env->startSection('content'); ?>
  <!--=====================================-->
        <!--=      Breadcrumb Area Start        =-->
        <!--=====================================-->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('Blog.bloglist')); ?>" class="active">Blogs</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=         Blogs Area Start          =-->
        <!--=====================================-->
        <section class="blogs sec-mar  bg-color-light sec-pad">
            <div class="container">
                <div class="heading">
                    <h2 class="title clr-primary text-start">Blogs</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <?php $__currentLoopData = $BlogsSearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row mb-4">
                            <div class="col-xl-4">
                                <img src="<?php echo e($blog->image); ?>" alt="">
                            </div>
                            <div class="col-xl-8">
                                <div class="content-box">
                                    <h6 class="title"><?php echo e($blog->title); ?></h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i><?php echo e($blog->created_at->format('M d, Y')); ?></li>
                                        
                                    </ul>
                                    <p class="description">
                                        <?php echo Str::limit(strip_tags($blog->body), 200); ?>

                                        </p>
                                    <a href="<?php echo e(route('blog.detail', $blog->id)); ?>" class="al-buraq-btn btn-fill-primary btn-lg">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="pagination-wrape mb-0">
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-1">
                            <form method="post" action="<?php echo e(route('blog.search')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="input-group form-group">
                                    <input class="form-control" name="title" placeholder="Search">
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

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\Al_marsoos\resources\views/Blog/searchblog.blade.php ENDPATH**/ ?>