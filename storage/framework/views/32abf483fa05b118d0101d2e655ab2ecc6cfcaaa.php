    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
		<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1">System Plans</h1>
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
						<div class="mt-2 mb-3 col-lg-12">
							<a class="btn btn-primary" href="<?php echo e(route('newplan')); ?>"><i class="fa fa-plus"></i> New plan</a>
						</div>
						<?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<div class="col-md-4 pb-4">
							<div class="card shadow h-100">            
								<div class="card-body">
								<h2><?php echo e($plan->name); ?>  </h2>
								<h4 class="card-title text-center py-3"><?php echo e($settings->currency); ?> <span class="display-2 "><?php echo e(number_format($plan->price)); ?></span></h4>                            
								<div class="pt-5">
								<div class="clearfix">
									<span class="float-start">Minimum Possible Deposit:</span>
									<span class="float-end"><?php echo e($settings->currency); ?><?php echo e(number_format($plan->min_price)); ?> </span>                
								</div>
								<div class="clearfix">
									<span class="float-start">Maximum Possible Deposit:</span>
									<span class="float-end"><?php echo e($settings->currency); ?><?php echo e(number_format($plan->max_price)); ?></span>
								</div>
								<div class="clearfix">
									<span class="float-start">Minimum Return:</span>
									<span class="float-end"><?php echo e(number_format($plan->minr)); ?>%</span>
								</div>
								<div class="clearfix">
									<span class="float-start">Maximum Return:</span>
									<span class="float-end"><?php echo e(number_format($plan->maxr)); ?>%</span>
								</div>
								<div class="clearfix">
									<span class="float-start">Gift Bonus:</span>
									<span class="float-end"><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?></span>
								</div>
								<div class="clearfix">
									<span class="float-start">Duration:</span>
									<span class="float-end"><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?></span>
								</div>
								</div>
								
								<div class="text-center">
									<a href="<?php echo e(route('editplan', $plan->id)); ?>" class="btn btn-primary"><i class="text-white flaticon-pencil"></i>
									</a> &nbsp; 
									<a href="<?php echo e(url('admin/dashboard/trashplan')); ?>/<?php echo e($plan->id); ?>" class="btn btn-danger"><i class="text-white fa fa-times"></i>
									</a>
								</div>          

								</div>
							</div>
							</div>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<div class="col-lg-8">
							<div class="pricing-table card purple border bg-<?php echo e($bg); ?> shadow p-4">
								<h4 class="text-<?php echo e($text); ?>">No Investment Plan at the moment, click the button above to add a plan.</h4>
							</div>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Plans/plans.blade.php ENDPATH**/ ?>