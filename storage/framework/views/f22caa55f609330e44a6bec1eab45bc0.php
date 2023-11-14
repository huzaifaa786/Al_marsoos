<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
                <div class="mt-1 mb-4">
                    <a class="px-2 py-2 text-sm btn btn-primary bg-blue-600 rounded"
                        href="<?php echo e(route('blog.create')); ?>"><?php echo e(__('Add Blog')); ?></a>
                </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($blog->title); ?></td>
                                    <td><div style="overflow-y: scroll; height:100px;"><?php echo $blog->body; ?></div></td>
                                    <td><img src="<?php echo e(asset($blog->image)); ?>" height="100" width="100" /></td>
                                    <td><a href="<?php echo e(route('blog.edit',['id'=>$blog->id])); ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="<?php echo e(route('blog.delete',['id'=>$blog->id])); ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Page level plugins -->
<script src="<?php echo e(asset('admin/asset/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/asset/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(asset('admin/asset/js/demo/datatables-demo.js')); ?>"></script>
<link href="<?php echo e(asset('admin/asset/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "iDisplayLength": 1
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/admin/Blog/index.blade.php ENDPATH**/ ?>