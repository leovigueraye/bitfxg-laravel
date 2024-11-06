    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h1 class="title1 text-<?php echo e($text); ?>">Trading Accounts</h1>
                        <p class="text-<?php echo e($text); ?>">
                            Manage trading accounts submitted by users. Collect their submitted details and connect to your master trading account
                        </p>
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
                        <div class="col p-4 card shadow bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>"> 
                                    <thead> 
                                        <tr> 
                                            <th>USER</th>
                                            <th>Account ID</th>
                                            <th>Account Password</th>
                                            <th>Account Type</th>
                                            <th>Currency</th>
                                            <th>Leverage</th>
                                            <th>Server</th>
                                            <th>Duration</th>
                                            <th>Submitted at</th>
                                            <th>Started at</th>
                                            <th>Expiring at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                    <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($sub->tuser->name); ?> <?php echo e($sub->tuser->l_name); ?></td>
                                            <td><?php echo e($sub->mt4_id); ?></td>
                                            <td><?php echo e($sub->mt4_password); ?></td>
                                            <td><?php echo e($sub->account_type); ?></td>
                                            <td><?php echo e($sub->currency); ?></td>
                                            <td><?php echo e($sub->leverage); ?></td>
                                            <td><?php echo e($sub->server); ?></td>
                                            <td><?php echo e($sub->duration); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($sub->created_at)->toDayDateTimeString()); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($sub->start_date)->toDayDateTimeString()); ?></td>
                                            <td>
                                                <?php if(!empty($sub->end_date)): ?>
													<?php echo e(\Carbon\Carbon::parse($sub->end_date)->toDayDateTimeString()); ?>

												<?php else: ?>
													Not Started yet
												<?php endif; ?>
                                               
                                            </td>
                                            <td><?php echo e($sub->status); ?></td>
                                            <td>
                                                <?php if($sub->status == "Pending"): ?>
												<a href="<?php echo e(url('admin/dashboard/confirmsub')); ?>/<?php echo e($sub->id); ?>" class="mb-2 btn btn-primary btn-sm">Process</a>	
												<?php else: ?>
												<a class="mb-2 btn btn-success btn-sm">Active</a>
                                                <?php endif; ?>
                                                <a href="<?php echo e(url('admin/dashboard/delsub')); ?>/<?php echo e($sub->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/msubtrade.blade.php ENDPATH**/ ?>