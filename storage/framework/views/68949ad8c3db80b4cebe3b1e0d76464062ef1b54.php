    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
		<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-<?php echo e($text); ?>">Manage clients deposits</h1>
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
						
						<div class="col-12 card shadow p-4 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Client name</th>
											<th>Client email</th>
											<th>Amount</th>
											<th>Payment Method</th>
											
											<th>Status</th> 
											<th>Date created</th>
											<th>Option</th>
										</tr> 
									</thead> 
									<tbody> 
										<?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<th scope="row"><?php echo e($deposit->id); ?></th>
											<td><?php echo e($deposit->duser->name); ?></td>
											<td><?php echo e($deposit->duser->email); ?></td> 
											<td><?php echo e($settings->currency); ?><?php echo e(number_format($deposit->amount)); ?></td> 
											<td><?php echo e($deposit->payment_mode); ?></td>
											
											<td>
												<?php if($deposit->status == "Processed"): ?>
													<span class="badge bg-success"><?php echo e($deposit->status); ?></span>
												<?php else: ?>
													<span class="badge bg-danger"><?php echo e($deposit->status); ?></span>
												<?php endif; ?>
											</td> 
											<td><?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?></td> 
											<td> 
												<a href="<?php echo e(route('viewdepositimage',$deposit->id )); ?>" class="btn btn-<?php echo e($text); ?> btn-sm m-1" title="View payment screenshot">
													<i class="fa fa-eye"></i>
												</a>
												<a href="<?php echo e(url('admin/dashboard/deldeposit')); ?>/<?php echo e($deposit->id); ?>" class="m-1 btn btn-danger btn-sm">Delete</a> 

												<?php if($deposit->status !="Processed"): ?> 
													<a class="btn btn-primary btn-sm" href="<?php echo e(url('admin/dashboard/pdeposit')); ?>/<?php echo e($deposit->id); ?>">Process</a>
												<?php endif; ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Deposits/mdeposits.blade.php ENDPATH**/ ?>