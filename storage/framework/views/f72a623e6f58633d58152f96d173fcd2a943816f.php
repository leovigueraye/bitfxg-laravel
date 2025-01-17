<?php $__env->startSection('title', 'User Login'); ?>

<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <div class="text-center">
                       <a href="/"><img src="<?php echo e(asset('storage/app/public/'.$settings->logo)); ?>" alt="" class="mb-3 img-fluid auth__logo"></a> 
                    </div>
                    
                        <?php if(Session::has('status')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo e(session('status')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">User Login</h4>
                            <form method="POST" action="<?php echo e(route('login')); ?>"  class="mt-4 login-form">
                                 <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="name@example.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1" name="remember">
                                                    <label class="custom-control-label" for="customCheck1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <p class="mb-0 forgot-pass"><a href="<?php echo e(route('password.request')); ?>"
                                                    class="text-dark font-weight-bold">Forgot password ?</a></p>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Sign in</button>
                                    </div>
                                    <!--end col-->

                                    <div class="mt-4 text-center col-lg-12">
                                        <?php if($settings->enable_social_login == "yes"): ?>
                                        <h6>Or Login With</h6>
                                        <div class="row">

                                            <!--end col-->
                                            <div class="mt-3 col-12">
                                                <a href="<?php echo e(route('social.redirect', ['social' => 'google'])); ?>" class="btn btn-block btn-light"><i
                                                        class="mdi mdi-google text-danger"></i> Google</a>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <!--end col-->
                                    <!--end col-->

                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Don't have an account
                                                ?</small> <a href="<?php echo e(route('register')); ?>"
                                                class="text-dark font-weight-bold">Sign Up</a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  <?php echo e(date('Y')); ?> &nbsp; <?php echo e($settings->site_name); ?> &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
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
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\24fxtrade\Account\resources\views/auth/login.blade.php ENDPATH**/ ?>