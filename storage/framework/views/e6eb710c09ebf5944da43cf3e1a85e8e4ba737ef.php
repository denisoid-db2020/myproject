

<?php $__env->startSection('title'); ?>
Обновление записи<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1> Обновление записи </h1>


<form  action="<?php echo e(route('contact-update-submit', $data->id)); ?>" method="post">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Введите имя"  id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="mail">Введите email</label>
    <input type="text" name="mail" value="<?php echo e($data->mail); ?>" placeholder="Введите email"  id="mail" class="form-control">
  </div>

  <div class="form-group">
    <label for="number">Введите номер</label>
    <input type="text" name="number" value="<?php echo e($data->number); ?>" placeholder="Введите номер"  id="number" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message"  class="form-control" placeholder="Введите сообщение"><?php echo e($data->message); ?></textarea>
  </div>
  <button type="submit" class="btn btn-success">Обновить</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\blog\resources\views/message-update.blade.php ENDPATH**/ ?>