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
			<div class="content bg-<?php echo e($bg); ?>">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Add Investment Plan</h1>
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
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-<?php echo e($bg); ?>">
                                <form role="form" method="post" action="<?php echo e(route('addplan')); ?>">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h5 class="text-<?php echo e($text); ?>">Plan Name</h5>
                                            <input  class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter Plan name" type="text" name="name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h5 class="text-<?php echo e($text); ?>">Plan price(<?php echo e($settings->currency); ?>)</h5> 
                                            <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter Plan price" type="text" name="price" required>   
                                            <small class="text-<?php echo e($text); ?>">This is the maximum amount a user can pay to invest in this plan, enter the value without a comma(,)</small>
                                       </div>	
                                       <div class="form-group col-md-6">
                                            <h5 class="text-<?php echo e($text); ?>">Plan Minimum Price (<?php echo e($settings->currency); ?>)</h5> 			 
                                             <input placeholder="Enter Plan minimum price" class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" type="text" name="min_price" required>  
                                             <small class="text-<?php echo e($text); ?>">This is the minimum amount a user can pay to invest in this plan, enter the value without a comma(,)</small> 
                                       </div>
                                       <div class="form-group col-md-6">
                                             <h5 class="text-<?php echo e($text); ?>">Plan Maximum Price (<?php echo e($settings->currency); ?>)</h5> 			 
                                             <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter Plan maximum price" type="text" name="max_price" required> 
                                            <small class="text-<?php echo e($text); ?>">Same as plan price, enter the value without a comma(,)</small> 
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-<?php echo e($text); ?>">Minimum return (%)</h5> 
                                           <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter minimum return" type="text" name="minr" required>   
                                           <small class="text-<?php echo e($text); ?>">This is the minimum return (ROI) for this plan, enter the value without a comma(,)</small>
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-<?php echo e($text); ?>">Maximum return (%)</h5> 
                                           <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter maximum return" type="text" name="maxr" required>  
                                           <small class="text-<?php echo e($text); ?>">This is the Maximum return (ROI) for this plan, enter the value without a comma(,)</small> 
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-<?php echo e($text); ?>">Gift Bonus (<?php echo e($settings->currency); ?>)</h5> 
                                           <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Enter Additional Gift Bonus" type="text" name="gift" value="0" required>  
                                           <small class="text-<?php echo e($text); ?>">Optional Bonus if a user buys this plan.enter the value without a comma(,) </small>  
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-<?php echo e($text); ?>">Top up Interval</h5> 	
                                           <select class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" name="t_interval">
                                               <option>Monthly</option>
                                               <option>Weekly</option>
                                               <option>Daily</option>
                                               <option>Hourly</option>
                                               <option>Every 30 Minutes</option>
                                           </select>  
                                           <small class="text-<?php echo e($text); ?>">This specifies how often the system should add profit(ROI) to user account.</small>    
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-<?php echo e($text); ?>">Top up Type</h5> 
                                           <select class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" name="t_type">
                                               <option>Percentage</option>
                                               <option>Fixed</option>
                                           </select>  
                                           <small class="text-<?php echo e($text); ?>">This specifies if the system should add profit in percentage(%) or a fixed amount.</small>   
                                       </div>

                                       <div class="form-group col-md-6">
                                           <h5 class="text-<?php echo e($text); ?>">Top up Amount (in % or <?php echo e($settings->currency); ?> as specified above)</h5> 
                                           <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="top up amount" type="text" name="t_amount" required> 
                                           <small class="text-<?php echo e($text); ?>">This is the amount the system will add to users account as profit, based on what you selected in topup type and topup interval above.</small>   
                                       </div>
                                      
                                       <div class="form-group col-md-6">
                                        <h5 class="text-<?php echo e($text); ?>">Investment Duration</h5> 
                                           <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="eg 1 Days, 2 Weeks, 1 Months" type="text" name="expiration" required> 
                                           <small class="text-<?php echo e($text); ?>">This specifies how long the investment plan will run. Please strictly follow the guide on <a href="" data-toggle="modal" data-target="#durationModal">how to setup investment duration</a> else it may not work. </small> 
                                            
                                       </div>
                                       <div class="form-group col-md-12">
                                           <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                           <input type="submit" class="btn btn-primary" value="Add Plan">   
                                       </div>
                                    </div>
                               </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
            
            <div id="durationModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-<?php echo e($bg); ?>">
                            <h5 class="text-<?php echo e($text); ?>">FIRSTLY, Always preceed the time frame with a digit, that is do not write the number in letters, <br> <br> SECONDLY, always add space after the number, <br> <br> LASTLY, the first letter of the timeframe should be in CAPS and always add 's' to the timeframe even if your duration is just a day, month or year.</h5>
                            <h2 class="text-<?php echo e($text); ?>">Eg, 1 Days, 3 Weeks, 1 Hours, 48 Hours, 4 Months, 1 Years, 9 Months</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="topupModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-<?php echo e($bg); ?>">
                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function getduration(id, event){
                    event.preventDefault();
                    document.getElementById('duridden').value = id;
                }
            </script>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/admin/Plans/newplan.blade.php ENDPATH**/ ?>