<?php $__env->startSection('content'); ?>
    <div class="m-5">
        <table id='course'>
            <thead>
                <th>Course Name</th>
                <th>Duration</th>
                <th>Start time</th>
                <th>End time</th>
                <th>image</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($course->name); ?></td>
                        <td><?php echo e($course->duration); ?></td>
                        <td><?php echo e($course->start_time); ?></td>
                        <td><?php echo e($course->end_time); ?></td>
                        <td><img src="<?php echo e($course->image); ?>" alt="" width="40px" height="40px"></td>
                        <td><?php echo e($course->description); ?></td>
                        <td> <a href="<?php echo e(route('course.edit',['id'=> $course->id])); ?>" type="button" class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="<?php echo e(route('course.delete', ['id' => $course->id])); ?>" type="button" onclick="return confirm('<?php echo e(__('Are you sure you want to delete?')); ?>')"
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
            $("#course").dataTable();
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

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/admin/course/index.blade.php ENDPATH**/ ?>