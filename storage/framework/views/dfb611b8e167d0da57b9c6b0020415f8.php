<?php $__env->startSection('content'); ?>
    <section>
        <div class="gap black-layer opc75">
            <div class="fixed-bg2" style="background-image: url(<?php echo e(asset('asset/images/photo2.jpg')); ?>);"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">Latest Al Marsoos Updates</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('Home.index')); ?>" title=""
                                    itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Al Marsoos News</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="remove-ext3 blog-sec">
                    <div class="row">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 col-sm-6 col-lg-6">
                                <div class="post-bx lst brd-rd5">
                                    <div class="post-thmb"><a href="<?php echo e(route('blog.detail',$blog->id)); ?>" title="" itemprop="url"><img
                                                src="<?php echo e($blog->image); ?>" alt="<?php echo e($blog->title); ?>" itemprop="image"></a>
                                    </div>
                                    <div class="post-inf">
                                        <h5 itemprop="headline"><a href="<?php echo e(route('blog.detail',$blog->id)); ?>" title=""
                                                itemprop="url"><?php echo e($blog->title); ?></a></h5>
                                        <ul class="pst-mta">
                                            <li><i class="far fa-calendar-alt theme-clr"></i>
                                                <?php echo e($blog->created_at->format('M d, Y')); ?></li>
                                            <li><i class="far fa-user theme-clr"></i> By <a href="#" title=""
                                                    itemprop="url">Mubeen Malik</a></li>
                                        </ul>
                                        <p itemprop="description"><?php echo Str::limit(strip_tags($blog->body), 200); ?></p>
                                        <a href="<?php echo e(route('blog.detail',$blog->id)); ?>">View Details</a>
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

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\islamic\resources\views/Blog/bloglist.blade.php ENDPATH**/ ?>