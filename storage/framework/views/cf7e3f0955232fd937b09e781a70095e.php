<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('Blog.bloglist')); ?>" class="active">Blog Detail</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=   Blogs Area Start   =-->
    <!--=====================================-->
    <section class="blogs-detail sec-mar">
        <div class="container">
            <div class="heading">
                <h2 class="title clr-primary text-start">Islamic Blogs</h2>
                <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="detail-blog-card">
                        <div class="img-box">
                            <img src="<?php echo e($blog->image); ?>" height="auto" width="auto" alt="">
                            <div class="content-inner">
                                <h3 class="title"><?php echo e($blog->title); ?></h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-calendar-alt"></i><?php echo e($blog->created_at->format('M d, Y')); ?></li>
                                    <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-box">
                            <?php echo strip_tags($blog->body); ?>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-1 p-0">
                        <form method="post" action="<?php echo e(route('blog.search')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="input-group form-group">
                                <input class="form-control" name="title" placeholder="Search">
                                <button class="input-group-text ps-3 pe-3" type="submit"><i
                                        class="fal fa-search"></i></button>
                            </div>
                        </form>
                        <h6 class="mb-4">Tags</h6>
                        <ul class="tags">
                            <li><a href="blog-detail.html">Islam & Youth</a></li>
                            <li><a href="blog-detail.html">Parenting</a></li>
                            <li><a href="blog-detail.html">Ahadith</a></li>
                            <li><a href="blog-detail.html">Ghusal</a></li>
                            <li><a href="blog-detail.html">Nikkah</a></li>
                        </ul>
                    </div>
                    <div class="row">
                       <?php $__currentLoopData = App\Models\Blog::latest()->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                      
                        <div class="col-lg-12 col-sm-6">
                            <div class="blog-card mt-3 mb-3">
                                <img src="<?php echo e($Blog->image); ?>" height="100px" alt="">
                                <div class="content-box">
                                    <h6 class="title"><?php echo e($Blog->title); ?></h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i><?php echo e($Blog->created_at->format('M d, Y')); ?></li>
                                        <li><i class="fas fa-user"></i>Ahmad Ansari</li>
                                    </ul>
                                    <p class="description"><?php echo Str::limit(strip_tags($blog->body), 50); ?></p>
                                    <a href="<?php echo e(route('blog.detail', $Blog->id)); ?>" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/Blog/detail.blade.php ENDPATH**/ ?>