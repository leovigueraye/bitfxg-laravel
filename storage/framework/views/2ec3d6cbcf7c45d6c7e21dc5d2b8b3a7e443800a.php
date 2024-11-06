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
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">System Plans</h1>
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
						<div class="col-lg-4">
							<div class="pricing-table purple border p-4 card bg-<?php echo e($bg); ?> shadow">
								
								<h2 class="text-<?php echo e($text); ?>"><?php echo e($plan->name); ?></h2>
								<!-- Price -->
								<div class="price-tag">
									<span class="symbol text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?></span>
									<span class="amount text-<?php echo e($text); ?>"><?php echo e(number_format($plan->price)); ?></span>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									<div class="feature text-<?php echo e($text); ?>">Minimum Possible Deposit:<span class="text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?><?php echo e(number_format($plan->min_price)); ?></span></div>
									<div class="feature text-<?php echo e($text); ?>">Maximum Possible Deposit:<span  class="text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?><?php echo e(number_format($plan->max_price)); ?></span></div>
									<div class="feature text-<?php echo e($text); ?>">Minimum Return:<span class="text-<?php echo e($text); ?>"><?php echo e(number_format($plan->minr)); ?>%</span></div>
									<div class="feature text-<?php echo e($text); ?>">Maximum Return:<span class="text-<?php echo e($text); ?>"><?php echo e(number_format($plan->maxr)); ?>%</span></div>
									<div class="feature text-<?php echo e($text); ?>">Gift Bonus:<span class="text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?></span></div>
									<div class="feature text-<?php echo e($text); ?>">Duration:<span class="text-<?php echo e($text); ?>"><?php echo e($plan->expiration); ?></span></div>
								</div> <br>
								
								<!-- Button -->
								<div class="text-center">
									<a href="<?php echo e(route('editplan', $plan->id)); ?>" class="btn btn-primary"><i class="text-white flaticon-pencil"></i>
									</a> &nbsp; 
									<a href="<?php echo e(url('admin/dashboard/trashplan')); ?>/<?php echo e($plan->id); ?>" class="btn btn-danger"><i class="text-white fa fa-times"></i>
									</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/admin/Plans/plans.blade.php ENDPATH**/ ?>