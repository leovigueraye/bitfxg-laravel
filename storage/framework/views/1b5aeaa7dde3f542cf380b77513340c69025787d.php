<div>
    <?php if(count($plans) > 0): ?>
        <div class="mt-4 row">
            <div class="col-md-8">
                <div class="card">
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
                    <div class="card-body">
                        <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
                        <div class="select-menu" x-data="{ open: false }" :class="open ? 'active' : ''">
                            <div class="select-btn" @click="open = ! open">
                                <div class="d-flex">
                                    <?php if($planSelected): ?>
                                        <span class="mr-2 fas fa-hand-holding-seedling"></span>
                                        <span class="sBtn-text"><?php echo e($planSelected->name); ?></span>
                                    <?php else: ?>
                                        <span class="sBtn-text">Select your a plan</span>
                                    <?php endif; ?>
                                </div>
                                <i class="fas fa-angle-down"></i>
                            </div>

                            <ul class="options">
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="option" wire:click="selectPlan(<?php echo e($plan->id); ?>)"
                                        @click=" open=false">
                                        <i class="fas fa-hand-holding-seedling"></i>
                                        <span class="option-text">
                                            <?php echo e($plan->name); ?>

                                            <?php if($plan->status == 'inactive'): ?>
                                                <span class="badge badge-danger"><?php echo e($plan->status); ?></span>
                                            <?php endif; ?>
                                        </span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                        <div class="mt-5">
                            <div class="">
                                <p>Choose Quick Amount to Invest</p>
                            </div>
                            <div class="flex-wrap mb-1 d-flex justify-content-start align-items-center">
                                <button class="mb-2 border-black border rounded-none btn btn-light"
                                    wire:click="selectAmount('100')"><?php echo e($settings->currency); ?>100</button>
                                <button class="mb-2 border-black border rounded-none btn btn-light"
                                    wire:click="selectAmount('250')"><?php echo e($settings->currency); ?>250</button>
                                <button class="mb-2 border-black border rounded-none btn btn-light"
                                    wire:click="selectAmount('500')"><?php echo e($settings->currency); ?>500</button>
                                <button class="mb-2 border-black border rounded-none btn btn-light"
                                    wire:click="selectAmount('1000')"><?php echo e($settings->currency); ?>1,000</button>
                                <button class="mb-2 border-black border rounded-none btn btn-light"
                                    wire:click="selectAmount('1500')"><?php echo e($settings->currency); ?>1,500</button>
                                <button class="mb-2 border-black border rounded-none btn btn-light"
                                    wire:click="selectAmount('2000')"><?php echo e($settings->currency); ?>2,000</button>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="">
                                <p>Or Enter Your Amount</p>
                                <div>
                                    <input type="number" required wire:model='amountToInvest'
                                        wire:keyup="checkIfAmountIsEmpty" name="" id=""
                                        class="form-control d-block w-100" placeholder="1000"
                                        min="<?php echo e($planSelected ? $planSelected->min_price : '0'); ?>"
                                        max="<?php echo e($planSelected ? $planSelected->max_price : '10000000000'); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <p>Choose Payment Method</p>
                        </div>
                        <div class="select-menu2">
                            <ul class="options2 d-block">
                                <li class="mb-3 option2 <?php echo e($paymentMethod == 'Account Balance' ? 'bg-light border border-primary' : ''); ?>"
                                    id="acnt" wire:click="chanegePaymentMethod('Account Balance')">
                                    <i class="fas fa-wallet"></i>
                                    <span class="option-text2 d-block mr-2">Account Balance </span> <br>
                                    <span class="small">
                                        <?php echo e($settings->currency); ?><?php echo e(number_format(Auth::user()->account_bal)); ?>

                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>Your Investment Details</p>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Name of plan</p>
                                <span class="text-primary small"><?php echo e($planSelected ? $planSelected->name : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Plan Price</p>
                                <span
                                    class="text-primary small"><?php echo e($settings->currency); ?><?php echo e($planSelected ? $planSelected->price : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Duration</p>
                                <span
                                    class="text-primary small"><?php echo e($planSelected ? $planSelected->expiration : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Profit</p>
                                <span class="text-primary small">
                                    <?php if($planSelected): ?>
                                        <?php if($planSelected->increment_type == 'Fixed'): ?>
                                            <?php echo e($settings->currency); ?><?php echo e($planSelected->increment_amount); ?>

                                            <?php echo e($planSelected->increment_interval); ?>

                                        <?php else: ?>
                                            <?php echo e($planSelected->increment_amount); ?>%
                                            <?php echo e($planSelected->increment_interval); ?>

                                        <?php endif; ?>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Minimum Deposit</p>
                                <span
                                    class="text-primary small"><?php echo e($planSelected ? $settings->currency . $planSelected->min_price : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Maximum Deposit</p>
                                <span
                                    class="text-primary small"><?php echo e($planSelected ? $settings->currency . $planSelected->max_price : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Minimum Return</p>
                                <span
                                    class="text-primary small"><?php echo e($planSelected ? $planSelected->minr . '%' : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Maximum Return</p>
                                <span
                                    class="text-primary small"><?php echo e($planSelected ? $planSelected->maxr . '%' : '-'); ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Bonus</p>
                                <span
                                    class="text-primary small"><?php echo e($planSelected ? $settings->currency . $planSelected->gift : '-'); ?></span>
                            </div>
                        </div>
                        <hr>
                        <div class="justify-content-between d-md-flex">
                            <span class="small d-block d-md-inline">Payment method:</span>
                            <span class="small text-primary"><?php echo e($paymentMethod ? $paymentMethod : '-'); ?></span>
                        </div>
                        <hr>
                        <div class="justify-content-between d-md-flex">
                            <span class="d-block d-md-inline font-weight-bold">Amount to Invest:</span>
                            <span
                                class="text-primary font-weight-bold"><?php echo e($settings->currency); ?><?php echo e($amountToInvest ? number_format($amountToInvest) : '0'); ?></span>
                        </div>
                        <div class="mt-3 text-center">
                            <?php if($planSelected->status == 'active'): ?>
                                <form action="" wire:submit.prevent="joinPlan">
                                    <button class="px-3 btn btn-primary">
                                        Confirm & Invest
                                    </button>
                                </form>
                            <?php else: ?>
                                <button class="px-3 btn btn-primary" >
                                    Confirm & Invest
                                </button>
                                <small class="text-info d-block">
                                    You cannot invest in this plan at the moment because it's inactive
                                </small>
                            <?php endif; ?>

                            <span class="mt-2 small text-primary" wire:loading wire:target="joinPlan">
                                <?php echo e($feedback); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="mt-4 row">
            <div class="col-md-12">
                <div class="py-4 card">
                    <div class="text-center card-body">
                        <p>No investment plan at the moment, please contact our support for more information</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>
<?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/livewire/user/investment-plan.blade.php ENDPATH**/ ?>