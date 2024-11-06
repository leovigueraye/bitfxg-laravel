    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">MT4 Subscription Settings</h1>
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
						<div class="col-md-8 offset-md-2">
                            <div class="card p-1 p-md-5 shadow-lg bg-<?php echo e($bg); ?>">
								<form method="post" action="javascript:void(0)" id="subform">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
									<div class="form-group">
										<h5 class="text-<?php echo e($text); ?>">Use MT4 Subscription Feature</h5>
										<div class="selectgroup">
											<label class="selectgroup-item">
												<input type="radio" name="subscription_service" id="subscripton" value="on" class="selectgroup-input" checked="">
												<span class="selectgroup-button">On</span>
											</label>
											<label class="selectgroup-item">
												<input type="radio" name="subscription_service" id="subscriptonoff" value="off" class="selectgroup-input">
												<span class="selectgroup-button">Off</span>
											</label>
										</div>
										<div>
										  <small class="text-<?php echo e($text); ?>">Your users will not be able to see/use this service if turned off</small> 
										</div>
									</div>
                                    <div class="form-group">
                                        <h4 class="text-<?php echo e($text); ?>">Monthly Subscription Fee:</h4>
                                        <input type="text" name="monthlyfee" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->monthlyfee); ?>">
                                    </div>
                                
                                    <div class="form-group">
                                        <h4 class="text-<?php echo e($text); ?>">Quaterly Subscription Fee:</h4>
                                        <input type="text" name="quaterlyfee" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"  value="<?php echo e($settings->quarterlyfee); ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <h4 class="text-<?php echo e($text); ?>">Yearly Subscription Fee:</h4>
                                        <input type="text" name="yearlyfee" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"  value="<?php echo e($settings->yearlyfee); ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                                        <input type="hidden" name="id" value="1">
                                    </div>
                                
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<?php if($settings->subscription_service=='on'): ?>
			<script>document.getElementById("subscripton").checked= true;</script>
			<?php else: ?>
			<script>document.getElementById("subscriptonoff").checked= true;</script>
			<?php endif; ?>
<script>
	// Submit email preference form
	$('#subform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('updatesubfee')); ?>",
			type: 'POST',
			data: $('#subform').serialize(),
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/SubscriptionSettings/show.blade.php ENDPATH**/ ?>