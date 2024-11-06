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
					<h1 class="title1 text-<?php echo e($text); ?>">Transactions on your account</h1>
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
					<div class="col text-center card p-4 bg-<?php echo e($bg); ?>">
					    
					        <nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		
								  <h4 class="pt-3 nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true"> Deposits</h4>
		
								  <h4 class="pt-3 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#2" role="tab" aria-controls="nav-profile" aria-selected="false">Withdrawals</h4>
		
								  <h4 class="pt-3 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">Others</h4>
							    </div>
							</nav>
							
							<div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">
		
								
								<div class="tab-pane fade show active bg-<?php echo e($bg); ?> card p-3" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
        							<table id="UserTable" class="UserTable table table-hover text-<?php echo e($text); ?>"> 
        									<thead> 
        										<tr> 
        											<th>Amount</th>
        											<th>Payment mode</th>
        											<th>Status</th> 
        											<th>Date created</th>
        										</tr> 
        									</thead> 
        									<tbody> 
        										<?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        										<tr> 
        											<td><?php echo e($settings->currency); ?><?php echo e($deposit->amount); ?></td> 
        											<td><?php echo e($deposit->payment_mode); ?></td> 
        											<td>
													<?php if($deposit->status == "Processed"): ?>
													<span class="badge badge-success"><?php echo e($deposit->status); ?></span>
													<?php else: ?>
														<span class="badge badge-danger"><?php echo e($deposit->status); ?></span>
													<?php endif; ?>
													</td> 
        											<td><?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?></td> 
        										</tr> 
        										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        									</tbody> 
        								</table>
        							</div>
								</div>
		
								
								<div class="tab-pane fade p-3 bg-<?php echo e($bg); ?>" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
        							<table id="UserTable" class="UserTable table table-hover text-<?php echo e($text); ?>"> 
        									<thead> 
        										<tr> 
        											<th>Amount requested</th>
        											<th>Amount + charges</th>
        											<th>Recieving mode</th>
        											<th>Status</th> 
        											<th>Date created</th>
        										</tr> 
        									</thead> 
        									<tbody> 
        										<?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        										<tr> 
        											<td><?php echo e($settings->currency); ?><?php echo e($withdrawal->amount); ?></td>
        											<td><?php echo e($settings->currency); ?><?php echo e($withdrawal->to_deduct); ?></td> 
        											<td><?php echo e($withdrawal->payment_mode); ?></td> 
        											<td>
														<?php if($withdrawal->status == "Processed"): ?>
													<span class="badge badge-success"><?php echo e($withdrawal->status); ?></span>
													<?php else: ?>
														<span class="badge badge-danger"><?php echo e($withdrawal->status); ?></span>
													<?php endif; ?>
													</td> 
        											<td><?php echo e(\Carbon\Carbon::parse($withdrawal->created_at)->toDayDateTimeString()); ?></td> 
        										</tr> 
        										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        									</tbody> 
        								</table>
        							</div>
								</div>
		
								
								<div class="tab-pane fade p-3 bg-<?php echo e($bg); ?>" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
        								<table id="UserTable" class="UserTable table table-hover text-<?php echo e($text); ?>"> 
        									<thead> 
        										<tr> 
        											<th>Amount</th>
        											<th>Type</th>
        											<th>Plan/Narration</th>
        											<th>Date created</th>
        										</tr> 
        									</thead> 
        									<tbody> 
        									<?php $__currentLoopData = $t_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        										<tr> 
        											<td><?php echo e($settings->currency); ?><?php echo e($history->amount); ?></td> 
        											<td><?php echo e($history->type); ?></td> 
        											<td><?php echo e($history->plan); ?></td> 
        											<td><?php echo e(\Carbon\Carbon::parse($history->created_at)->toDayDateTimeString()); ?></td> 
        										</tr> 
        									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        									</tbody> 
        								</table>
        								
        							</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<?php echo $__env->make('user.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	
	<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\24fxtrade\Account\resources\views/user/transactions.blade.php ENDPATH**/ ?>