<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
    $gradient = "primary";
} else {
    $bg="dark";
    $text = "light";
    $gradient = "dark";
}

?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="panel-header bg-<?php echo e($gradient); ?>-gradient">
                <div class="py-5 page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="pb-2 text-white fw-bold">Dashboard</h2>
                            <h5 class="mb-2 text-white op-7">Welcome, <?php echo e(Auth('admin')->User()->firstName); ?> <?php echo e(Auth('admin')->User()->lastName); ?>!</h5> 
                        </div>
                        <?php if(Auth('admin')->User()->type == 'Super Admin' || Auth('admin')->User()->type == 'Admin'): ?>
                            <div class="py-2 ml-md-auto py-md-0">
                                <a href="<?php echo e(route('mdeposits')); ?>" class="mr-2 btn btn-success btn-border ">Deposits</a>
                                <a href="<?php echo e(route('mwithdrawals')); ?>" class="mr-2 btn btn-danger btn-border ">Withdrawals</a>
                                <a href="<?php echo e(route('manageusers')); ?>" class="btn btn-secondary ">Users</a>
                            </div> 
                        <?php endif; ?>
                        
                    </div>
                </div>
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
            <div class="page-inner mt--5">
                <!-- Beginning of  Dashboard Stats  -->
                <div class="row row-card-no-pd bg-<?php echo e($bg); ?> shadow-lg mt--2">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?> full-height">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="fa fa-download text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Total Deposit</p>
                                            <?php $__currentLoopData = $total_deposited; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposited): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($deposited->count)): ?>
                                            <?php echo e($settings->currency); ?><?php echo e(number_format($deposited->count)); ?>

                                            <?php else: ?>
                                            <?php echo e($settings->currency); ?>0.00
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?> full-height">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-download text-info"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Pending Deposit(s)</p>
                                            <?php $__currentLoopData = $pending_deposited; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposited): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($deposited->count)): ?>
                                            <?php echo e($settings->currency); ?><?php echo e(number_format($deposited->count)); ?>

                                            <?php else: ?>
                                            <?php echo e($settings->currency); ?>0.00
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?> full-height">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-arrows-1 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Total Withdrawal</p>
                                            <?php $__currentLoopData = $total_withdrawn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposited): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($deposited->count)): ?>
                                            <?php echo e($settings->currency); ?><?php echo e(number_format($deposited->count)); ?>

                                            <?php else: ?>
                                            <?php echo e($settings->currency); ?>0.00
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?> full-height">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-arrow text-secondary"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Pending Withdrawal</p>
                                            <?php $__currentLoopData = $pending_withdrawn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposited): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($deposited->count)): ?>
                                            <?php echo e($settings->currency); ?><?php echo e(number_format($deposited->count)); ?>

                                            <?php else: ?>
                                            <?php echo e($settings->currency); ?>0.00
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?>">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-users text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Total Users</p>
                                            <h4 class="card-title text-<?php echo e($text); ?>"><?php echo e(number_format($user_count)); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?>">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-remove-user text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Block Users</p>
                                            <h4 class="card-title text-<?php echo e($text); ?>"><?php echo e($blockeusers); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e($bg); ?>">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-user-2 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Active Users</p>
                                            <h4 class="card-title text-<?php echo e($text); ?>"><?php echo e($activeusers); ?></h4> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-diagram text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Investment Plans</p>
                                            <h4 class="card-title text-<?php echo e($text); ?>"><?php echo e($plans); ?></h4> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="overflow-auto">
                            <canvas id="myChart" height="100" class="text-<?php echo e($text); ?>" ></canvas>
                        </div>
                        
                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Deposit', 'Pending Deposit', 'Withdrawal', 'Pending Withdrawal', 'Total Transactions'],
                                    datasets: [{
                                        label: "# System Statistics in <?php echo e($settings->currency); ?>",
                                        data: [
                                            "<?php echo e($chart_pdepsoit); ?>", 
                                            "<?php echo e($chart_pendepsoit); ?>",
                                            "<?php echo e($chart_pwithdraw); ?>", 
                                            "<?php echo e($chart_pendwithdraw); ?>", 
                                            "<?php echo e($chart_trans); ?>"
                                            ],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>