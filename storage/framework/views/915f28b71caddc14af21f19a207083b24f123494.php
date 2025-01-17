<?php $__env->startSection('title', 'Create an Account'); ?>

<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="y auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <div class="text-center">
                        <a href="/"><img src="<?php echo e(asset('storage/app/public/'.$settings->logo)); ?>" alt="" class="mb-3 img-fluid auth__logo"></a>
                    </div>
                    
                    
                            <?php if(Session::has('status')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(Session::get('status')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                        
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">Create an Account</h4>
                            <form method="POST" action="<?php echo e(route('register')); ?>"  class="mt-4 login-form">
                                 <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>UserName <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" id="input1" class="pl-5 form-control"  name="username" id="input1" placeholder="Enter Unique Username" required>
                                                
                                                <?php if($errors->has('username')): ?>
                                                <small class="text-danger"><?php echo e($errors->first('username')); ?></small>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>FullName <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="pl-5 form-control"  name="name" value="<?php echo e(old('name')); ?>" id="f_name" placeholder="Enter FullName" required>
                                                
                                                <?php if($errors->has('name')): ?>
                                                <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="name@example.com" required>
                                                <?php if($errors->has('email')): ?>
                                                <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="phone" class="pl-5 form-control" name="phone" value="<?php echo e(old('phone')); ?>" id="phone" placeholder="Enter Phone number" required>
                                                <?php if($errors->has('phone')): ?>
                                                <small class="text-danger"><?php echo e($errors->first('phone')); ?></small>
                                                <?php endif; ?>
                                                
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
                                                <?php if($errors->has('password')): ?>
                                                <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
                                                <?php endif; ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" id="confirm-password" placeholder="Confirm Password" required>
                                                <?php if($errors->has('password')): ?>
                                                <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
                                                <?php endif; ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label>Country <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                                <select class="pl-5 d-block w-100 px-2 py-3 border border-light rounded-right" name="country" id="country" required>
                                                    <option selected disabled>Choose Country</option>
                                                        <?php echo $__env->make('auth.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </select>
                                            </div>
                                            <?php if($errors->has('country')): ?>
                                            <small class="text-danger"><?php echo e($errors->first('country')); ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <?php if(Session::has('ref_by')): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Referral ID <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="pl-5 form-control"  value="<?php echo e(session('ref_by')); ?>" name="ref_by" placeholder="optional referral id" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Referral ID</label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="pl-5 form-control"  name="ref_by" placeholder="optional referral id">
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if($settings->captcha == "true"): ?>
                                    <div class="col-lg-12">
                                        <div class="form-group  <?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                                            <label>Captcha<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <?php echo NoCaptcha::display(); ?>

                                                <?php if($errors->has('g-recaptcha-response')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($terms->useterms =='yes'): ?>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                    <label class="custom-control-label" for="customCheck1">I Accept the <a
                                                            href="<?php echo e(route('privacy')); ?>" class="text-primary">Terms And Privacy Policy</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Register</button>
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
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Already have an account
                                                </small> <a href="<?php echo e(route('login')); ?>"
                                                class="text-dark font-weight-bold">Login</a></p>
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
<script>
    $('#input1').on('keypress', function(e) {
        return e.which !== 32;
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>