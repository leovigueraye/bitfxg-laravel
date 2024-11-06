    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
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
					<div class="mb-5 row p-md-3">
						<div class="shadow col-12 p-md-2">
							<div class="col-12 text-center bg-<?php echo e($bg); ?> p-3">
								<h1 class="title1 text-<?php echo e($text); ?>"><?php echo e($settings->site_name); ?> Support</h1>
								<div class="sign-up-row widget-shadow text-<?php echo e($text); ?>">
									<h4 class="text-<?php echo e($text); ?>">For inquiries, suggestions or complains. Mail us</h4>
									<h1 class="mt-3 text-primary"> <a href="mailto:<?php echo e($settings->contact_email); ?>"><?php echo e($settings->contact_email); ?></a> </h1>
								</div>
							</div>
							<div class="pb-5 col-md-8 offset-md-2">
								<form method="post" action="<?php echo e(route('enquiry')); ?>">
									<input type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>" />
									<div class="form-group">
										<input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
									</div>
									
									<div class="form-group">
										<h5 for="" class="text-<?php echo e($text); ?>">Message<span class=" text-danger">*</span></h5>
										<textarea name="message" class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" rows="5"></textarea>
									</div>
									<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
									<div class="d-grid pt-2">
										<input type="submit" class="py-2 btn btn-primary btn-block" value="Send">
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/user/support.blade.php ENDPATH**/ ?>