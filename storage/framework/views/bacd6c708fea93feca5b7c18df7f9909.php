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
            <h5 class="card-title">Add Students</h5>

            <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('addstudents')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="mall"
                            placeholder="Enter first name">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Last name</label>
                        <input type="text" name="last_name" class="form-control" id="mall"
                            placeholder="Enter last name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label"> Father name</label>
                        <input type="text" name="father_name" class="form-control" id="mall"
                            placeholder="Enter father name">
                    </div>
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="name" name="number"
                            placeholder="Please enter phone #">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Please enter email">
                    </div>
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="suv price" name="date_of_birth">
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">Admission date<sub> (optional)</sub></label>
                        <input type="date" class="form-control" id="address" name="admission_date">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="inputNanme4" class="form-label">Address</label>
                    <input type="text" class="form-control" id="suv price" name="address"
                        placeholder="Please enter address">
                </div>
                <div class="d-flex  justify-content-end mt-3">
                    <button type="reset" class="btn btn-secondary m-1">Cancel</button>
                    <button type="submit" class="btn btn-primary m-1">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\Al_marsoos\resources\views/admin/student/create.blade.php ENDPATH**/ ?>