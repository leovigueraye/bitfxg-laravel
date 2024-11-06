    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Referral/Other Bonus Settings</h1>
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
						<div class="col-md-8 offset-md-2">
							<form method="post" action="javascript:void(0)" id="refform">
								<?php echo csrf_field(); ?>
								<?php echo method_field('PUT'); ?>
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Direct Referral Commission (%) </h5>
									<input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="ref_commission" value="<?php echo e($settings->referral_commission); ?>" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Indirect Referral Commission 1 (%) </h5>
									<input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="ref_commission1" value="<?php echo e($settings->referral_commission1); ?>" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Indirect Referral Commission 2 (%) </h5>
									<input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="ref_commission2" value="<?php echo e($settings->referral_commission2); ?>" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Indirect Referral Commission 3 (%) </h5>
									<input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="ref_commission3" value="<?php echo e($settings->referral_commission3); ?>" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Indirect Referral Commission 4 (%) </h5>
									<input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="ref_commission4" value="<?php echo e($settings->referral_commission4); ?>" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Indirect Referral Commission 5 (%) </h5>
									<input type="text" class="form-control  bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="ref_commission5" value="<?php echo e($settings->referral_commission5); ?>" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-<?php echo e($text); ?>">Registration Bonus(<?php echo e($settings->currency); ?>)</h5>
									<input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="signup_bonus" value="<?php echo e($settings->signup_bonus); ?>" required>
								</div>
								<div class="form-group">
									<input type="submit" class="px-5 btn btn-primary btn-lg" value="Update">
									<input type="hidden" name="id" value="1">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<script>
	// Submit email preference form
	$('#refform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('updaterefbonus')); ?>",
			type: 'POST',
			data: $('#refform').serialize(),
			success: function(response) {
				if (response.status === 200) {
					$.notify({
						// options
						icon: 'flaticon-alarm-1',
						title: 'Success',
						message: response.success,
					},{
						// settings
						type: 'success',
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 1031,
						delay: 5000,
						timer: 1000,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
	
					});
				} else {
					
				}
			},
			error: function(error) {
				console.log(error);
			},
		});
	});
</script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/ReferralSettings/show.blade.php ENDPATH**/ ?>