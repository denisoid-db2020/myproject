
<?php $__env->startSection('title'); ?><?php echo e($data -> mail); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1> <?php echo e($data -> mail); ?> </h1>

<div class="alert alert-info">
  <p><?php echo e($data -> name); ?></p>
  <p><?php echo e($data -> message); ?></p>
  <p><?php echo e($data -> number); ?></p>
  <p><?php echo e($data -> created_at); ?></p>
<a href="<?php echo e(route ('contact-update', $data->id)); ?>"><button class="btn btn-primary"> Редактировать</button></a>
  <a href="<?php echo e(route ('contact-delete', $data->id)); ?>"><button class="btn btn-danger"> Удалить</button></a>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\blog\resources\views/onemessage.blade.php ENDPATH**/ ?>