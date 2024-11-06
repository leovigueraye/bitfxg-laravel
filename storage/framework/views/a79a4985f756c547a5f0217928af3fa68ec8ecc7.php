<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($settings->site_name); ?> | <?php echo e($title); ?></title>
    <link rel="icon" href="<?php echo e(asset('storage/app/public/' . $settings->favicon)); ?>" type="image/png" />

    <?php $__env->startSection('styles'); ?>
        <!-- Fonts and icons -->
        <script src="<?php echo e(asset('dash/js/plugin/webfont/webfont.min.js')); ?>"></script>
        <!-- Sweet Alert -->
        <script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
        <!-- CSS Files -->
        <link rel="stylesheet" href="<?php echo e(asset('dash/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('dash/css/fonts.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('dash/css/atlantis.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('dash/css/customs.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('dash/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('dash/css/atlantis.min.css')); ?>">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="<?php echo e(asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?> "></script>
        <script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>

        <!--PayPal-->
        <script>
            // Add your client ID and secret
            var PAYPAL_CLIENT = '<?php echo e($settings->pp_ci); ?>';
            var PAYPAL_SECRET = '<?php echo e($settings->pp_cs); ?>';

            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
        </script>
        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo e($settings->pp_ci); ?>"></script>
    <?php echo $__env->yieldSection(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body data-background-color="dark">
    <div id="app">
		<script>
		{<?php echo $settings->tawk_to; ?>}	
		</script>
        <div>
            <div class="wrapper">
                <?php echo $__env->yieldContent('content'); ?>
                <footer class="footer bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                    <div class="container-fluid">
                        <div class="text-center row copyright text-align-center">
                            <p>All Rights Reserved &copy; <?php echo e($settings->site_name); ?> <?php echo e(date('Y')); ?></p> <br>
                            <?php if($settings->google_translate == 'on'): ?>
                                 <div class="text-center">
                                <div id="google_translate_element"></div>
                            </div>
                            <?php endif; ?>
                           
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php $__env->startSection('scripts'); ?>
        <!--   Core JS Files   -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="<?php echo e(asset('dash/js/core/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/js/core/bootstrap.min.js')); ?> "></script>
        <!-- jQuery UI -->
        <script src="<?php echo e(asset('dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>
        <!-- jQuery Scrollbar -->
        <script src="<?php echo e(asset('dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?> "></script>
        <!-- jQuery Sparkline -->
        <script src="<?php echo e(asset('dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?> "></script>
        <!-- Sweet Alert -->
        <script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
        <!-- Bootstrap Notify -->
        <script src="<?php echo e(asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?> "></script>

        <script type="text/javascript"
                src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
        </script>

        <script src="<?php echo e(asset('dash/js/atlantis.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/js/atlantis.js')); ?>"></script>
        
  

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
        <script src="<?php echo e(asset('dash/js/customs.js')); ?>"></script>
		<script>
			$(document).ready(function() {
				$(".dataTables_length select").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
				$(".dataTables_filter input").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
				$(".dataTables_length select").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
    			$(".dataTables_filter input").addClass("bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>");
			});
		</script>
    <?php echo $__env->yieldSection(); ?>
    
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/layouts/app.blade.php ENDPATH**/ ?>