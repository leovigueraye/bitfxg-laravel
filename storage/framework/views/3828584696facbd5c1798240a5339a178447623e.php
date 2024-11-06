<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
    $bg = 'light';
} else {
    $text = "light";
    $bg = 'dark';
}
?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
    <div class="content bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
        <div class="page-inner">
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
            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3 card bg-<?php echo e($bg); ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1 class="d-inline text-primary"><?php echo e($user->name); ?></h1><span></span>
                                    <div class="d-inline">
                                        <div class="float-right btn-group">
                                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('manageusers')); ?>"> <i class="fa fa-arrow-left"></i> back</a> &nbsp;
                                            <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-lg-right">
                                                <a class="dropdown-item" href="<?php echo e(route('loginactivity', $user->id)); ?>">Login Activity</a>
                                                <?php if($user->status==NULL || $user->status=='blocked'): ?>
                                                <a class="dropdown-item" href="<?php echo e(url('admin/dashboard/uunblock')); ?>/<?php echo e($user->id); ?>">Unblock</a> 
                                                <?php else: ?>
                                                <a class="dropdown-item" href="<?php echo e(url('admin/dashboard/uublock')); ?>/<?php echo e($user->id); ?>">Block</a>
                                                <?php endif; ?>
                                                <?php if($user->trade_mode=='on'): ?>
                                                <a class="dropdown-item" href="<?php echo e(url('admin/dashboard/usertrademode')); ?>/<?php echo e($user->id); ?>/off">Turn off trade</a> 
                                                <?php else: ?>
                                                <a class="dropdown-item" href="<?php echo e(url('admin/dashboard/usertrademode')); ?>/<?php echo e($user->id); ?>/on">Turn on trade</a>
                                                <?php endif; ?>
                                                <?php if($user->email_verified_at): ?>
                                                
                                                <?php else: ?>
                                                <a href="<?php echo e(url('admin/dashboard/email-verify')); ?>/<?php echo e($user->id); ?>" class="dropdown-item">Verify Email</a>
                                                <?php endif; ?>
                                                <a href="#"  data-toggle="modal" data-target="#topupModal" class="dropdown-item">Credit/Debit</a>
                                                <a href="#" data-toggle="modal" data-target="#resetpswdModal"  class="dropdown-item">Reset Password</a>
                                                <a href="#" data-toggle="modal" data-target="#clearacctModal" class="dropdown-item">Clear Account</a>
                                                <a href="#" data-toggle="modal" data-target="#TradingModal" class="dropdown-item">Add Trading History</a>
                                                <a href="#" data-toggle="modal" data-target="#edituser" class="dropdown-item">Edit</a>
                                                <a href="<?php echo e(route('showusers', $user->id)); ?>" class="dropdown-item">Add Referral</a>
                                                <a href="#" data-toggle="modal" data-target="#sendmailtooneuserModal" class="dropdown-item">Send Email</a>
                                                <a href="#" data-toggle="modal" data-target="#switchuserModal"  class="dropdown-item text-success">Login as <?php echo e($user->name); ?></a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal" class="dropdown-item text-danger">Delete <?php echo e($user->name); ?></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row text-<?php echo e($text); ?>">
                                <div class="col-md-3">
                                    <h5 class="text-bold">Account Balance</h5>
                                    <p><?php echo e($settings->currency); ?><?php echo e(number_format($user->account_bal)); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Profit</h5>
                                    <p><?php echo e($settings->currency); ?><?php echo e(number_format($user->roi)); ?> </p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Referral Bonus</h5>
                                    <p><?php echo e($settings->currency); ?><?php echo e(number_format($user->ref_bonus)); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Bonus</h5>
                                    <p><?php echo e($settings->currency); ?><?php echo e(number_format($user->bonus)); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <h5>User Account Status</h5>
                                    <?php if($user->status == "blocked"): ?>
                                    <span class="badge badge-danger">Blocked</span>
                                    <?php else: ?>
                                    <span class="badge badge-success">Active</span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <h5>Inv. Plans</h5>
                                    
                                    <?php if($user->plan != NULL): ?>
                                      <a class="btn btn-sm btn-primary d-inline" href="<?php echo e(route('user.plans', $user->id)); ?>">View Plans</a>  
                                    <?php else: ?>
                                        <p>No Investment Plan</p>
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="col-md-3">
                                    <h5>KYC</h5>
                                    <?php if($user->account_verify == "Not Verified" || $user->account_verify == NULL): ?>
                                    <span class="badge badge-danger">Not Verified Yet</span>
                                    <?php else: ?>
                                    <span class="badge badge-success">Verified</span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <h5>Trade Mode</h5>
                                    <?php if($user->trade_mode == "off" || $user->trade_mode == NULL): ?>
                                    <span class="badge badge-danger">Off</span>
                                    <?php else: ?>
                                    <span class="badge badge-success">On</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mt-3 row text-<?php echo e($text); ?>">
                                <div class="col-md-12">
                                    <h5>USER INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-<?php echo e($text); ?>">
                                <div class="col-md-4 border-right">
                                    <h5>Fullname</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->name); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-<?php echo e($text); ?>">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->email); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-<?php echo e($text); ?>">
                                <div class="col-md-4 border-right">
                                    <h5>Mobile Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->phone); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-<?php echo e($text); ?>">
                                <div class="col-md-4 border-right">
                                    <h5>Date of birth</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->dob); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-<?php echo e($text); ?>">
                                <div class="col-md-4 border-right">
                                    <h5>Nationality</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->country); ?></h5>
                                </div>
                            </div>
                            
                            <div class="p-3 border row text-<?php echo e($text); ?>">
                                <div class="col-md-4 border-right">
                                    <h5>Registered</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e(\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.Users.users_actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/admin/Users/userdetails.blade.php ENDPATH**/ ?>