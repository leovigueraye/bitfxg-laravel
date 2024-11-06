<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2" data-background-color="<?php echo e($bg); ?>">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth::user()->name); ?>

                            
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo e(route('profile')); ?>">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?php echo e((request()->routeIs('dashboard')) ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/dashboard')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item d-md-none ">
                    <a href="<?php echo e(url('dashboard/deposits')); ?>">
                        <i class="fa fa-download " aria-hidden="true"></i>
                        <p>Fund your Account</p>
                    </a>
                </li>
                <li class="nav-item d-md-none <?php echo e((request()->routeIs('withdrawalsdeposits')) ? 'active' : ''); ?> <?php echo e((request()->routeIs('withdrawfunds')) ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('dashboard/withdrawals')); ?>">
                        <i class="fa fa-arrow-alt-circle-up " aria-hidden="true"></i>
                        <p>Withdraw Funds</p>
                    </a>
                </li>

                <li class="nav-item <?php echo e((request()->routeIs('tradinghistory')) ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('dashboard/tradinghistory')); ?>">
                        <i class="fa fa-signal " aria-hidden="true"></i>
                        <p>Profit Record</p>
                    </a>
                </li>
                <li class="nav-item <?php echo e((request()->routeIs('accounthistory')) ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('dashboard/accounthistory')); ?>">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions history</p>
                    </a>
                </li>
                <?php if($moresettings->use_crypto_feature == 'true'): ?>
                    <li class="nav-item <?php echo e((request()->routeIs('assetbalance')) ? 'active' : ''); ?> <?php echo e((request()->routeIs('swaphistory')) ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('assetbalance')); ?>">
                            <i class="fa fa-coins" aria-hidden="true"></i>
                            <p>Swap Crypto</p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($moresettings->use_transfer): ?>
                    <li class="nav-item <?php echo e((request()->routeIs('transferview')) ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('transferview')); ?>">
                            <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                            <p>Transfer funds</p>
                        </a>
                    </li>  
                <?php endif; ?>
                
                <?php if($settings->subscription_service == 'on'): ?>
                    <li class="nav-item <?php echo e((request()->routeIs('subtrade')) ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('dashboard/subtrade')); ?>">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <p>Managed Accounts</p>
                        </a>
                    </li>
                <?php endif; ?>
                
                <li class="nav-item <?php echo e((request()->routeIs('mplans')) ? 'active' : ''); ?> <?php echo e((request()->routeIs('myplans')) ? 'active' : ''); ?>">
                    <a data-toggle="collapse" href="#mpack">
                        <i class="fas fa-cubes"></i>
                        <p>Pool Trading</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mpack">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo e(url('dashboard/buy-plan')); ?>">
                                    <span class="sub-item">Trading Plans</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('dashboard/myplans')); ?>">
                                    <span class="sub-item">My Plans</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>  
                <li class="nav-item <?php echo e((request()->routeIs('referuser')) ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('referuser')); ?>">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Refer Users</p>
                    </a>
                </li>
                <li class="nav-item <?php echo e((request()->routeIs('support')) ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('dashboard/support')); ?>">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Help/Support</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/user/sidebar.blade.php ENDPATH**/ ?>