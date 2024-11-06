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
						<h1 class="title1 text-<?php echo e($text); ?>">Fund Your Account</h1>
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
						<div class="col-md-12">
							<div class="card bg-<?php echo e($bg); ?>">
								<div class="card-body">
									<div class="row">
										<div class="col-md-8">
											
											<form action="javascript:;" method="post" id="submitpaymentform">
												<?php echo csrf_field(); ?>
												<div class="row">
													<div class="mb-4 col-md-12">
														<h5 class="card-title text-<?php echo e($text); ?>">Enter Amount</h5>
														<input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter Amount" min="<?php echo e($moresettings->minamt); ?>" type="number" name="amount" required>
													</div>
													<div class="mb-4 col-md-12">
														<input type="hidden" name="payment_method" id="paymethod">
													</div>
													<div class="mt-2 mb-1 col-md-12">
														<h5 class="card-title text-<?php echo e($text); ?>">Choose Payment Method from the list below</h5>
													</div>
													<?php $__empty_1 = true; $__currentLoopData = $dmethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
													<div class="mb-2 col-md-6">
														<a style="cursor: pointer;" data-method="<?php echo e($method->name); ?>" id="<?php echo e($method->id); ?>" class="text-decoration-none" onclick="checkpamethd(this.id)">
															<div class="rounded shadow bg-<?php echo e($bg); ?>">
																<div class="card-body">
																	<span class="text-<?php echo e($text); ?>">
																		<?php if(!empty($method->img_url)): ?>
																		<img src="<?php echo e($method->img_url); ?>" alt="" class="" style="width: 25px;">
																		<?php endif; ?>
																		  <?php echo e($method->name); ?>

																	</span> 
																</div>
															</div>
														</a>
													</div>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
													<div class="mb-1 col-md-12">
														<p class="text-<?php echo e($text); ?>">No Payment Method enabled at the moment, please check back later.</p>
													</div>
													<?php endif; ?>
													<?php if(count($dmethods)>0): ?>
														<div class="mt-2 mb-1 col-md-12">
															<input type="submit" class="px-5 btn btn-primary btn-lg" value="Procced to Payment">
														</div>
													<?php endif; ?>
													
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<script>
				let paymethod = document.querySelector('#paymethod');
				
				function checkpamethd(id){
					let url = "<?php echo e(url('/dashboard/get-method/')); ?>" + '/' + id;
					fetch(url)
					.then(function(res){
						return res.json();
					})
					.then(function (response){
						paymethod.value = response;
						$.notify({
							// options
							icon: 'flaticon-alarm-1',
							title: 'Payment Method',
							message: 'you have chosen to pay with ' + ' ' + response,
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
					})
					.catch(function(err){
						console.log(err);
					});
				}
				$('#submitpaymentform').on('submit', function() {
					//alert('love');
					if (paymethod.value == "") {
						$.notify({
							// options
							icon: 'flaticon-alarm-1',
							title: 'Select Payment Method',
							message: 'Please choose a payment method by clicking on it',
						},{
							// settings
							type: 'danger',
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
					}else {
						let makepayurl = "<?php echo e(url('/dashboard/newdeposit')); ?>"
						//console.log(makepayurl);
						document.getElementById("submitpaymentform").action = makepayurl;
						
					}
					
				});
			</script>
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/user/deposits.blade.php ENDPATH**/ ?>