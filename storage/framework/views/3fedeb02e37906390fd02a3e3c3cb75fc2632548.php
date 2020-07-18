

<?php $__env->startSection('title'); ?>
Контакты<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1> Контакты </h1>
<form  action="/contact/submit" method="post">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя"  id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Введите email</label>
    <input type="text" name="email" placeholder="Введите email"  id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="number">Введите номер</label>
    <input type="text" name="number" placeholder="Введите номер"  id="number" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\blog\resources\views/contact.blade.php ENDPATH**/ ?>