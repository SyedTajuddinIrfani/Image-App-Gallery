<!-- resources/views/exams/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="card content-center" style="width: 60rem;" id="add_exam">
        <h5 class="card-header bg-dark" style="background-color: rgb(54, 54, 54) !important; color: white">Upload Image</h5>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('exam.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="image">Browse Image</label>
                    
                    <input type="file" name="image" id="image" class="form-control">
                    <br>
                </div>
                <!-- Add more form fields as needed -->
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
           



            <br>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

        </div>
    </div>

    <br>
    <br>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\LARAVEL PROJECTS\Image-Gallery\resources\views/exams/create.blade.php ENDPATH**/ ?>