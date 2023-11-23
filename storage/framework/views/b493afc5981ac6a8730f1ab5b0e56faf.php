

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
    <div class="card mx-5 p-3 rounded-4">
        <div class="card-body">
            <h5 class="card-title">Add Scholars</h5>

            <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('scholar.update')); ?>">
                <?php echo csrf_field(); ?>
                <input type="text" name="id" id="" value="<?php echo e($scholar->id); ?>" hidden>
                <div class="row mt-3">
                    <div class="col">
                        <label for="name" class="form-label">Scholar Name</label>
                        <input type="text" name="name" class="form-control" required id="name"
                            placeholder="Enter Scholar name" value="<?php echo e($scholar->name); ?>">
                    </div>
                    <div class="col">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo e($scholar->email); ?>" required id="email"
                            placeholder="email">
                    </div>
                    <div class="col">
                        <label for="mobileno" class="form-label">Mobile Number</label>
                        <input type="integer" class="form-control" id="mobileno" value="<?php echo e($scholar->mobileno); ?>" required name="mobileno">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" name="qualification" class="form-control" value="<?php echo e($scholar->qualification); ?>" required id="qualification"
                            placeholder=" Enter Qualification">
                    </div>
                    <div class="col">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" class="form-control" id="experience"  value="<?php echo e($scholar->experience); ?>" required name="experience">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" required  name="description" placeholder="Add description of the course"><?php echo e($scholar->description); ?></textarea>
                </div>
                <div class="d-flex  justify-content-end mt-3">
                    <button type="reset" class="btn btn-secondary m-1">Cancel</button>
                    <button type="submit" class="btn btn-primary m-1">Update</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/admin/scholars/update.blade.php ENDPATH**/ ?>