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
                    <h1 class="text-<?php echo e($text); ?>"><?php echo e($title); ?></h1>	
                </div>
                <?php if(Session::has('message')): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
    
                <?php if(count($errors) > 0): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable" role="alert" >
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <i class="fa fa-warning"></i> <?php echo e($error); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
    
                <div class="mb-3 row">
                    <div class="p-2 shadow-lg col-md-4 bg-primary">
                        <h1 class="text-white"> Current Package:</h1>
                    </div>
                    <div class="col-md-8 bg-<?php echo e($bg); ?> shadow-lg text-<?php echo e($text); ?> p-3" >
                        <p style="color:#999;">ACTIVATED ON: <?php echo e(\Carbon\Carbon::parse($cplan->created_at)->toDayDateTimeString()); ?></p>
                        <h4> <strong>PACKAGE NAME:</strong> <?php echo e($cplan->dplan->name); ?></h4>
                        <h4> <strong>AMOUNT:</strong> <?php echo e($settings->currency); ?><?php echo e($cplan->amount); ?></h4>
                        <h4><strong>DURATION:</strong> <?php echo e($cplan->inv_duration); ?></h4>
                        <?php if($cplan->active=="yes"): ?>
                        <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
                        <?php elseif($cplan->active=="expired"): ?>
                        <p style="color:#fa3425;">Expired! <i class="fa fa-info-circle"></i></p>
                        <?php else: ?>
                        <p style="color:#fa3425;">Inactive! <i class="fa fa-info-circle"></i></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="p-3 shadow-lg row ">
                    <div class="mb-3 col-lg-12">
                        <a href="<?php echo e(url('dashboard/buy-plan')); ?>" class="btn btn-lg btn-<?php echo e($text); ?> nav-pills"> <i class="fa fa-plus"></i> Add plan</a>
                        <h1 class="text-<?php echo e($text); ?> my-3">Concurrent Packages:</h1>
                    </div>
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($cplan->id != $plan->id): ?>
                    <div class="col-lg-4">
                        <div class="border shadow card">
                            <div class="card-body bg-<?php echo e($bg); ?>">
                                
                                    <h1 class="text-<?php echo e($text); ?>"><?php echo e($plan->dplan->name); ?></h1>
                                    <p style="color:#999;">ACTIVATED ON: <?php echo e(\Carbon\Carbon::parse($plan->created_at)->toDayDateTimeString()); ?></p>

                                    <?php if($plan->dplan->increment_type=="Fixed"): ?>
                                    <h5 class="text-<?php echo e($text); ?>"> <b>ROI: </b>  <?php echo e($settings->currency.$plan->dplan->increment_amount); ?></h5>
                                    <?php else: ?>
                                    <h5 class="text-<?php echo e($text); ?>"> <b>ROI: </b><?php echo e($plan->dplan->increment_amount); ?>%</h5>
                                    <?php endif; ?>
                                    <h5 class="text-<?php echo e($text); ?>"> <b>INTERVAL: </b><?php echo e($plan->dplan->increment_interval); ?></h5>
                                    <h5 class="text-<?php echo e($text); ?>"> <b>AMOUNT:</b> <?php echo e($settings->currency); ?><?php echo e($plan->amount); ?></h5> 
                                    <h5 class="text-<?php echo e($text); ?>"> <b>DURATION: </b><?php echo e($plan->inv_duration); ?></h5>
                                    <h5 class="text-<?php echo e($text); ?>"> <b>MIN RETURN: </b><?php echo e($settings->currency.$plan->dplan->minr); ?></h5>
                                    <h5 class="text-<?php echo e($text); ?>"> <b>MAX RETURN: </b><?php echo e($settings->currency.$plan->dplan->maxr); ?></h5>
                                    <?php if($plan->active=="yes"): ?>
                                    <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
                                    <?php elseif($plan->active=="expired"): ?>
                                    <p style="color:#fa3425;">Expired! <i class="fa fa-info-circle"></i></p>
                                    <?php else: ?>
                                    <p style="color:#fa3425;">Inactive! <i class="fa fa-info-circle"></i></p>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyip\onlintrader 4.032\resources\views/user/myplans.blade.php ENDPATH**/ ?>