
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('subtitle', $subtitle); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead"><?php echo e($description); ?></p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><?php echo e($author); ?></p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\57314\laravelcourse2\resources\views/home/about.blade.php ENDPATH**/ ?>