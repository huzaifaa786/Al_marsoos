

<?php $__env->startSection('content'); ?>
    <div class="m-5">
        <table id='scholars'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Image</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $scholars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($scholar->name); ?></td>
                        <td><?php echo e($scholar->email); ?></td>
                        <td><?php echo e($scholar->mobileno); ?></td>
                        <td><img src="<?php echo e($scholar->image); ?>" alt="" width="40px" height="40px"></td>
                        <td><?php echo e($scholar->qualification); ?></td>
                        <td><?php echo e($scholar->experience); ?></td>
                        <td><?php echo e($scholar->description); ?></td>
                        <td> <a href="<?php echo e(route('scholar.edit', ['id' => $scholar->id])); ?>" type="button"
                                class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="<?php echo e(route('scholar.delete', ['id' => $scholar->id])); ?>" type="button"
                                onclick="return confirm('<?php echo e(__('Are you sure you want to delete?')); ?>')"
                                class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(function() {
            $("#scholars").dataTable();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/admin/scholars/index.blade.php ENDPATH**/ ?>