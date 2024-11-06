    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                <h1 class="title1 text-<?php echo e($text); ?>">Add New Manager</h1>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <div class="mb-5 row">
                    <div class="col-lg-8 offset-lg-2 card p-3 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> shadow">
                        <form method="POST" action="<?php echo e(url('admin/dashboard/saveadmin')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="pt-3 form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <h4 class="text-<?php echo e($text); ?>">First Name</h4>
                                <div>
                                    <input id="name" type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="fname" value="<?php echo e(old('fname')); ?>" required>
                                    <?php if($errors->has('fname')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('fname')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="pt-3 form-group<?php echo e($errors->has('l_name') ? ' has-error' : ''); ?>">
                                <h4 class="text-<?php echo e($text); ?>">Last Name</h4>
                                <div>
                                    <input id="name" type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="l_name" value="<?php echo e(old('l_name')); ?>" required>
                                    <?php if($errors->has('l_name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('l_name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="pt-3 form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <h4 class="text-<?php echo e($text); ?>">E-Mail Address</h4>

                                <div>
                                    <input id="email" type="email" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="pt-3 form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <h4 class="text-<?php echo e($text); ?>">Phone number</h4>
                                <div>
                                    <input id="phone" type="number" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required>

                                    <?php if($errors->has('phone')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('phone')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="pt-3 form-group">
                                <h4 class="text-<?php echo e($text); ?>">Type</h4>
                                <select class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="type">
                                    <option>Super Admin</option>
                                    <option>Admin</option>
                                    <option>Conversion Agent</option>
                                </select><br>
                            </div>

                            <div class=" form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                
                                <h4 class="text-<?php echo e($text); ?>">Password</h4>
                                <div>
                                    <input id="password" type="password" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="pt-3 form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                <h4 class="text-<?php echo e($text); ?>">Confirm Password</h4>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="password_confirmation" required>

                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group pt-3">
                                <div>
                                    <button type="submit" class="px-3 btn btn-primary btn-lg">
                                        <i class="fa fa-plus"></i> Save User
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/addadmin.blade.php ENDPATH**/ ?>