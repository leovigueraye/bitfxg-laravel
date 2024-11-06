<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}
?> 

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="main-panel bg-<?php echo e($bg); ?>">
			<div class="content bg-<?php echo e($bg); ?>">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Available packages</h1>
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
						<?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<div class="col-lg-4">
							<div class="pricing-table card purple border bg-<?php echo e($bg); ?> shadow p-4">
								<!-- Table Head -->
								
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
									<div class="feature text-<?php echo e($text); ?>">Minimum Return:<span class="text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?><?php echo e(number_format($plan->minr)); ?></span></div>
									<div class="feature text-<?php echo e($text); ?>">Maximum Return:<span class="text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?><?php echo e(number_format($plan->maxr)); ?></span></div>
									<div class="feature text-<?php echo e($text); ?>">Gift Bonus:<span class="text-<?php echo e($text); ?>"><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?></span></div>
									<div class="feature text-<?php echo e($text); ?>">Duration:<span class="text-<?php echo e($text); ?>"><?php echo e($plan->expiration); ?></span></div>
								</div> 
								<?php if(!$uplan): ?>
									<!-- Button -->
									<div class="">
										<form method="post" action="<?php echo e(route('joinplan')); ?>">
											<h5 class="text-<?php echo e($text); ?>">Amount to invest: (<?php echo e($settings->currency); ?><?php echo e(number_format($plan->price)); ?> default)</h5>
											<input type="number" min="<?php echo e($plan->min_price); ?>" max="<?php echo e($plan->max_price); ?>" name="iamount" placeholder="<?php echo e($settings->currency.$plan->price); ?>" class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>"> <br>
											<input type="hidden" name="duration" value="<?php echo e($plan->expiration); ?>">
											<input type="hidden" name="id" value="<?php echo e($plan->id); ?>">
											<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
											<input type="submit" class="btn btn-block pricing-action btn-primary" value="Join plan" >
										</form>
									</div>
								<?php else: ?>
								<button class="btn btn-block pricing-action btn-primary" disabled>Join Plan</button>
								<?php endif; ?>
								
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
						<div class="col-lg-12">
							<div class="pricing-table card purple border bg-<?php echo e($bg); ?> p-4 text-center">
								<h4 class="text-<?php echo e($text); ?>">No Investment Plan at the moment.</h4>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>	
			</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyip\onlintrader 4.032\resources\views/user/mplans.blade.php ENDPATH**/ ?>