    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Crypto Assets/Exchnage Settings</h1>
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
                            <div class="card p-3 p-md-5 shadow-lg bg-<?php echo e($bg); ?>">
                                <div class="row">
                                    <div class="form-group col-12 d-inline">
                                        <h5 class="text-<?php echo e($text); ?>">Use this Feature</h5>
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="crypto" id="cryptoyes" value="true" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">On</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="crypto" id="cryptono" value="false" class="selectgroup-input">
                                                <span class="selectgroup-button">Off</span>
                                            </label>
                                        </div>
                                        <div>
                                            <small class="text-<?php echo e($text); ?>">Your users will not be able to see/use this service if turned off</small> 
                                        </div>
                                        <?php if($moresettings->use_crypto_feature=='true'): ?>
                                        <script>document.getElementById("cryptoyes").checked= true;</script>
                                        <?php else: ?>
                                        <script>document.getElementById("cryptono").checked= true;</script>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <form action="<?php echo e(route('exchangefee')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class=" form-group">
                                                <h5 class="text-<?php echo e($text); ?>">Exchange Fee</h5>
                                                <input type="text" name="fee" value="<?php echo e($moresettings->fee); ?>" class="text-<?php echo e($text); ?> form-control bg-<?php echo e($bg); ?>" id="">
                                            </div>
                                            <?php if($settings->currency != '$'): ?>
                                                <div class=" form-group">
                                                    <h5 class="text-<?php echo e($text); ?>"><?php echo e($settings->s_currency); ?>/USD Rate</h5>
                                                    <input type="number" name="rate" value="<?php echo e($moresettings->currency_rate); ?>" step=".0" class="text-<?php echo e($text); ?> form-control bg-<?php echo e($bg); ?>" placeholder="450">
                                                    <small class="text-<?php echo e($text); ?>">This rate will be used to calculate your users crypto equivilent in your chosen currency.</small>
                                                </div>  
                                            <?php endif; ?>
                                           
                                            <div class=" form-group">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mt-3 col-12">
                                        <div class=" table-responsive">
                                            <table class="table table-hover text-<?php echo e($text); ?>">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Asset Name</th>
                                                        <th scope="col">Asset Symbol</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php echo $__env->make('admin.Settings.Crypto.assets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <small class="text-<?php echo e($text); ?>">Be sure that non of your users have balances greater than 0 in thier asset account before you disable the asset.</small> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <script>
                

            $('#cryptoyes').on('click', function() {
                // let truevalue = $('#cryptoyes').val()
                let uurl = "<?php echo e(url('admin/dashboard/useexchange')); ?>"  + '/' + 'true';
                $.ajax({
                    url: uurl,
                    type: 'GET',
                    
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

            $('#cryptono').on('click', function() {
                // let truevalue = $('#cryptoyes').val()
                let uurl = "<?php echo e(url('admin/dashboard/useexchange')); ?>"  + '/' + 'false';
                $.ajax({
                    url: uurl,
                    type: 'GET',
                    
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/Crypto/pageview.blade.php ENDPATH**/ ?>