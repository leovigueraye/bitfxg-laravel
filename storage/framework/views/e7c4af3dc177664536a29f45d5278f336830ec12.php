    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Payment Settings</h1>
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
						<div class="col-12">
                            <div class="card p-md-5 p-2 shadow-lg bg-<?php echo e($bg); ?>">
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a href="#dep" class="nav-link active" data-bs-toggle="tab">Payment Methods</a>
									</li>
									<li class="nav-item">
										<a href="#with" class="nav-link" data-bs-toggle="tab">Payment Preference</a>
									</li>
                                    <li class="nav-item">
										<a href="#coin" class="nav-link" data-bs-toggle="tab">Coinpayment</a>
									</li>
                                    <li class="nav-item">
										<a href="#gate" class="nav-link" data-bs-toggle="tab">Gateways</a>
									</li>
									<li class="nav-item">
										<a href="#trans" class="nav-link" data-bs-toggle="tab">Transfer</a>
									</li>
								</ul>
                                <div class="tab-content">
									<div class="tab-pane fade show active" id="dep">
										<?php echo $__env->make('admin.Settings.PaymentSettings.deposit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
									<div class="tab-pane fade" id="with">
										<?php echo $__env->make('admin.Settings.PaymentSettings.withdrawal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
                                    <div class="tab-pane fade" id="coin">
										<?php echo $__env->make('admin.Settings.PaymentSettings.coinpayment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
                                    <div class="tab-pane fade" id="gate">
										<?php echo $__env->make('admin.Settings.PaymentSettings.gateway', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
									<div class="tab-pane fade" id="trans">
										<?php echo $__env->make('admin.Settings.PaymentSettings.transfers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
								</div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			
<script>
	// Submit payment option/ preference form
	$('#paypreform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('paypreference')); ?>",
			type: 'POST',
			data: $('#paypreform').serialize(),
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




	// Submit coinpayment form
	$('#coinpayform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('updatecpd')); ?>",
			type: 'POST',
			data: $('#coinpayform').serialize(),
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



	// Submit Gatway form
	$('#gatewayform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('updategateway')); ?>",
			type: 'POST',
			data: $('#gatewayform').serialize(),
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


	// Submit Tranfer settings form
	$('#trasfer').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('updatetransfer')); ?>",
			type: 'POST',
			data: $('#trasfer').serialize(),
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/PaymentSettings/show.blade.php ENDPATH**/ ?>