<!-- resources/views/images/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Image Gallery</h1>
    <br>
    <?php if(count($images)): ?>
        <div class="row">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key % 3 == 0 && $key != 0): ?>
        </div>
        <div class="row">

    <?php endif; ?>
    <div class=" col-sm-4 "  >
        <div class=" text-center">
            <div><img src="<?php echo e(asset('storage/'. $img->image)); ?>" class="image" alt="<?php echo e($img->title); ?>" style="width: 100%; height: 200px;  "></div>
            <br>
        </div>
            
        </div>
    
    
 


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <div class="alert alert-danger">No Images available at the moment.</div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\LARAVEL PROJECTS\Image-Gallery\resources\views/images/index.blade.php ENDPATH**/ ?>