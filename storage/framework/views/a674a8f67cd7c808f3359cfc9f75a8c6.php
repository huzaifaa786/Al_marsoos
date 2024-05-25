<?php $__env->startSection('content'); ?>
    <div class="m-5">
        <table id='student'>
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Admission Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($student->first_name); ?></td>
                        <td><?php echo e($student->last_name); ?></td>
                        <td><?php echo e($student->father_name); ?></td>
                        <td><?php echo e($student->number); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><?php echo e($student->address); ?></td>
                        <td><?php echo e($student->gender); ?></td>
                        <td><?php echo e($student->date_of_birth); ?></td>
                        <td><?php echo e($student->admission_date); ?></td>
                        <td> <a href="<?php echo e(route('student.edit',['id'=> $student->id])); ?>" type="button" class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="<?php echo e(route('student.delete', ['id' => $student->id])); ?>" type="button" onclick="return confirm('<?php echo e(__('Are you sure you want to delete?')); ?>')"
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
            $("#student").dataTable();
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

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\Al_marsoos\resources\views/admin/student/index.blade.php ENDPATH**/ ?>