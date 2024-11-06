<?php $__env->startSection('title', 'User Login'); ?>

<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <?php endif; ?>

                        
                        
                        <?php if(session('status')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            A verification link has been sent to the email address, please click on the link to verify your email address.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?> 
                        
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                           
                            <form method="POST" action="<?php echo e(route('verification.send')); ?>"  class="mt-4 login-form">
                                 <?php echo csrf_field(); ?>
                                 
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit"> <?php echo e(__('Resend Verification Email')); ?></button>
                                       <br> Note: if you can't find the email in your inbox, check your spam folder and set the email as "not spam" to receive email's from 24fxtrade in your inbox
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            
                            <form method="POST" action="<?php echo e(route('logout')); ?>" class="mt-4 login-form">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-primary btn-block pad">
                                    <?php echo e(__('Log Out')); ?>

                                </button>
                            </form>
                            
                            
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>