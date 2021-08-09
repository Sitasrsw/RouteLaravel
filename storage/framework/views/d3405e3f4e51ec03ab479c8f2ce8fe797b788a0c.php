<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contsent="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(url('form')); ?>" method "POST">
    <input type="text" name="nama" placeholder="nama"/>
    <input type="email" name="email" placeholder="email"/>
    <?php echo csrf_field(); ?>
    <input type="submit"/>
</form>
</body>
</html><?php /**PATH D:\laravel\new-laravel\resources\views/form.blade.php ENDPATH**/ ?>