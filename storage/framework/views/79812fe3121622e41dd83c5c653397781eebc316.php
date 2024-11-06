    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h2 class="text-<?php echo e($text); ?> pb-2">Welcome, <?php echo e(Auth::user()->name); ?>!</h2>
                            <?php if($settings->enable_annoc == "on"): ?>
                                <h5 id="ann" class="text-<?php echo e($text); ?>op-7 mb-4"><?php echo e($settings->newupdate); ?></h5>
                                <?php if(Session::has('getAnouc') && Session::get('getAnouc') == "true" ): ?>
                                    <script type="text/javascript">
                                        var announment = $("#ann").html();
                                        console.log(announment);
                                        swal({
                                            title: "Annoucement!",
                                            text: announment,
                                            icon: "info",
                                            buttons: {
                                                confirm: {
                                                    text: "Okay",
                                                    value: true,
                                                    visible: true,
                                                    className: "btn btn-info",
                                                    closeModal: true
                                                }
                                            }
                                        });
                                    </script>  
                                <?php endif; ?>
                                <?php echo e(session()->forget('getAnouc')); ?>

                            <?php endif; ?>

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
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-secondary">
                                        <i class="fa fa-dollar-sign"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-<?php echo e($text); ?> d-inlne"><b><?php echo e($settings->currency); ?><?php echo e(number_format(Auth::user()->account_bal, 2, '.', ',')); ?></b></h5>
                                        <small class="text-muted">Account Balance</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-coins"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($settings->currency); ?><?php echo e(number_format(Auth::user()->roi, 2, '.', ',')); ?></b></h5>
                                        <small class="text-muted text-<?php echo e($text); ?>">Total Profit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-secondary">
                                        <i class="fa fa-gift"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($settings->currency); ?><?php echo e(number_format(Auth::user()->bonus, 2, '.', ',')); ?></b></h5>
                                        <small class="text-muted text-<?php echo e($text); ?>">Total Bonus</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-info">
                                        <i class="fa fa-retweet"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($settings->currency); ?><?php echo e(number_format(Auth::user()->ref_bonus, 2, '.', ',')); ?></b></h5>
                                        <small class="text-muted text-<?php echo e($text); ?>">Total Referral Bonus</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-danger">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($user_plan->count()); ?></b></h5>
                                        <small class="text-muted text-<?php echo e($text); ?>">Total Investment Plans</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-envelope-open"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($user_plan_active->count()); ?></b></h5>
                                        <small class="text-muted text-<?php echo e($text); ?>">Active Investment Plans</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-warning">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <div>
                                        <?php $__currentLoopData = $deposited; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposited): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($deposited->count)): ?>
                                            <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($settings->currency); ?><?php echo e(number_format($deposited->count, 2, '.', ',')); ?></b></h5>
                                            <?php else: ?>
                                            <h5 class="mb-1 text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?>0.00</h5> 
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <small class="text-muted text-<?php echo e($text); ?>">Total Deposit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-<?php echo e($bg); ?> shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-danger">
                                        <i class="fa fa-arrow-alt-circle-up"></i>
                                    </span>
                                    <div>
                                        <?php $__currentLoopData = $total_withdrawal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposited): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($deposited->count)): ?>
                                            <h5 class="mb-1 text-<?php echo e($text); ?>"><b><?php echo e($settings->currency); ?><?php echo e(number_format($deposited->count, 2, '.', ',')); ?></b></h5>
                                            <?php else: ?>
                                            <h5 class="mb-1 text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?>0.00</h5> 
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <small class="text-muted text-<?php echo e($text); ?>">Total Withdrawals</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="pt-1 col-12">
                        <h3>Personal Trading Chart</h3>
                        <?php echo $__env->make('includes.chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                <!-- end of chart -->
            </div>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/user/dashboard.blade.php ENDPATH**/ ?>