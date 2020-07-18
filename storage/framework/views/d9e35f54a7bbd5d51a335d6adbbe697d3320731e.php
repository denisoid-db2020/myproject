
<?php $__env->startSection('title'); ?>Все сообщения<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1> Все сообщения </h1>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-info">
  <h5><?php echo e($el -> mail); ?></h5>
  <p><?php echo e($el -> name); ?></p>
  <p><?php echo e($el -> created_at); ?></p>
  <a href="<?php echo e(route ('contact-message', $el->id)); ?>"><button class="btn btn-warning"> Подробнее</button></a>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\blog\resources\views/messages.blade.php ENDPATH**/ ?>