<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 pt-2">
                <div class="border rounded mt-5 p-4">
                    <h1 class="display-4">Create a New Post</h1>
                    <p class="lead">Fill and submit this form to create a post</p>

                    <hr>

                    <form action="<?php echo e(route('blog.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" id="title" class="form-control" name="title" required
                                placeholder="Enter Post Title">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Post Body</label>
                            <textarea id="body" id="summernote" class="summernote" class="form-control" name="body"
                                placeholder="Enter Post Body" rows="5" ></textarea>
                            <div class="blog-post-body">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary btn-lg" type="submit">
                                    Create Post
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\Al_marsoos\resources\views/admin/blog/create.blade.php ENDPATH**/ ?>