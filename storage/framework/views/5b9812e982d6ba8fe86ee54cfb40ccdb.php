<?php $__env->startSection('content'); ?>
    <div>Exam - show</div>
    <hr>
<style>
    .btn-custom {
    width: 150px; /* Set a fixed width */
    height: 50px; /* Set a fixed height */
    font-size: 16px; /* Optional: Set a font size */
}

</style>
    <?php if(@isset($exam)): ?>
        <img src="<?php echo e(asset('storage/' . $exam->image)); ?>">
        <br>
        <br>
        <h1><?php echo e($exam->title); ?></h1>
        <p>Exam Code <?php echo e($exam->id); ?></p>

        <p><?php echo e($exam->description); ?></p>
        <button class="btn btn-lg btn-success btn-custom"  onclick="window.location.href='<?php echo e(route('exam.edit', ['id' => $exam->id])); ?>'">Edit</button>
        


        <button class="btn btn-lg btn-danger" onclick="deleteCard(1)">Delete</button>

       
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

        
    <form id="delete-form" action="<?php echo e(route('exam.delete', ['id' => $exam->id ])); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>

        <script>
            function deleteCard(id) {
                if (confirm('Are you sure you want to delete this card?')) {
                    document.getElementById('delete-form').submit();
                }
            }
        </script>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\LARAVEL PROJECTS\Image-Gallery\resources\views/exams/show.blade.php ENDPATH**/ ?>