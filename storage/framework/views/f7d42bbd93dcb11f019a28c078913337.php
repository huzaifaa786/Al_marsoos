<?php $__env->startSection('content'); ?>
    <div class="m-5">
        <table id='datatable'>
            <thead>
                <th>Person Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Message</th>
                
            </thead>
            <tbody>
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($message->name); ?></td>
                        <td><?php echo e($message->email); ?></td>
                        <td><?php echo e($message->phone); ?></td>
                        <td><div style="overflow-y: scroll; height:100px;"><?php echo e($message->message); ?></div></td>
                       
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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
            
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\Al_marsoos\resources\views/admin/message/contact.blade.php ENDPATH**/ ?>