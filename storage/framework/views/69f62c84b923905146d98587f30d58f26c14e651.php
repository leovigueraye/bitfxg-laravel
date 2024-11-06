<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e($settings->site_name); ?> | <?php echo $__env->yieldContent('title'); ?></title>
        
        
        <link rel="icon" href="<?php echo e(asset('storage/app/public/'.$settings->favicon)); ?>" type="image/png"/>
        <?php $__env->startSection('styles'); ?>
           
            <link href="<?php echo e(asset('temp/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="<?php echo e(asset('temp/css/materialdesignicons.min.css')); ?>" rel="stylesheet" type="text/css" />
        
            <link rel="stylesheet" href="<?php echo e(asset('temp/css/line.css')); ?>">
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <!-- Main Css -->
            <link href="<?php echo e(asset('temp/css/style.css')); ?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('temp/css/colors/default.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body class="h-100 bg-soft-primary">
       <?php echo $__env->yieldContent('content'); ?>

       <?php $__env->startSection('scripts'); ?>
          <script src="<?php echo e(asset('temp/js/jquery-3.5.1.min.js')); ?>"></script>
            <script src="<?php echo e(asset('temp/js/bootstrap.bundle.min.js')); ?>"></script>
            
            <!-- SLIDER -->
            <script src="<?php echo e(asset('temp/js/owl.carousel.min.js')); ?>"></script>
            <script src="<?php echo e(asset('temp/js/owl.init.js')); ?>"></script>
            <!-- Icons -->
            <script src="<?php echo e(asset('temp/js/feather.min.js')); ?>"></script>
            <script src="<?php echo e(asset('temp/js/bundle.js')); ?>"></script>
            
            <script src="<?php echo e(asset('temp/js/app.js')); ?>"></script>
            <script src="<?php echo e(asset('temp/js/widget.js')); ?>"></script>
       <?php echo $__env->yieldSection(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\24fxtrade\Account\resources\views/layouts/guest.blade.php ENDPATH**/ ?>