    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">IP Address Blacklist</h1>
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
						<div class="col-md-12">
                            <div class="card p-1 p-md-5 shadow-lg bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                                <div class="row">
                                    <div class="mb-3 col-md-8 offset-md-2">
                                        <form method="post" action="javascript:void(0)" id="ipform" >
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <h6 class="text-<?php echo e($text); ?>">IP Address</h6>
                                                <input type="text" name="ipaddress" id="ipaddress" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                                                <small class="text-<?php echo e($text); ?>">This IP Address wont be able to access your website.</small> 
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Blacklist">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">IP-address</th>
                                                        <th scope="col">Date blacklisted</th>
                                                        <th scope="col">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="showipaddress">
                                                
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
<script>
    let textinput = document.getElementById('ipaddress');
    getallips();
    function getallips(){
        let url = "<?php echo e(route('allipaddress')); ?>";
        fetch(url)
        .then(function(res){
            return res.json();
        })
        .then(function (response){
            if(response.status === 200){
                document.getElementById('showipaddress').innerHTML = response.data;
            }
        })
        .catch(function(err){
            console.log(err);
        });
        
    }

    function deleteip(id){
        let url = "<?php echo e(url('admin/dashboard/delete-ip')); ?>"  + '/' + id;
        fetch(url)
        .then(function(res){
            return res.json();
        })
        .then(function (response){
            if(response.status === 200){
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
                getallips();
            }
        })
        .catch(function(err){
            console.log(err);
        });
    }
	// Submit email preference form
	$('#ipform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "<?php echo e(route('addipaddress')); ?>",
			type: 'POST',
			data: $('#ipform').serialize(),
			success: function(response) {
				if (response.status === 200) {
                    textinput.value = "";
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
                    getallips();
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/Ipaddress/ipaddress.blade.php ENDPATH**/ ?>