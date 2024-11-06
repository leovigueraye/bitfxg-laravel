<div class="row">
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="gatewayform">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <h4 class="text-primary"> <i class="fa fab-stripe"></i> Stripe:</h4>
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">Stripe secret key</h5>
                <input type="text" name="s_s_k" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->s_s_k); ?>">
            </div>
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">Stripe publishable key</h5>
                <input type="text" name="s_p_k" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->s_p_k); ?>">
            </div>
            <hr>
            <h4 class="text-primary"><i class="fa fab-paypal"></i> Paypal:</h4>
            <div class="form-group">
                <h4 class="text-<?php echo e($text); ?>">Paypal client ID</h4>
                <input type="text" name="pp_ci" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->pp_ci); ?>">
            </div>
            <div class="form-group">
                <h4 class="text-<?php echo e($text); ?>">Paypal client secret</h4>
                <input type="text" name="pp_cs" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->pp_cs); ?>">
            </div>
            <hr>
            <h4 class="text-primary"><i class="fa fab-paypal"></i> Paystack:</h4>
            <div class="form-group">
                <h4 class="text-<?php echo e($text); ?>">Paystack Public Key</h4>
                <input type="text" name="paystack_public_key" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($paystack->paystack_public_key); ?>">
            </div>
            <div class="form-group">
                <h4 class="text-<?php echo e($text); ?>">Paystack Secret Key</h4>
                <input type="text" name="paystack_secret_key" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($paystack->paystack_secret_key); ?>">
            </div>
            <div class="form-group">
                <h4 class="text-<?php echo e($text); ?>">Paystack URL</h4>
                <input type="text" name="paystack_url" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($paystack->paystack_url); ?>" readonly>
            </div>
            <div class="form-group">
                <h4 class="text-<?php echo e($text); ?>">Paystack Email</h4>
                <input type="text" name="paystack_email" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($paystack->paystack_email); ?>">
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="px-4 btn btn-primary">Save Settings</button>
            </div> 
        </form>
    </div>
</div><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/PaymentSettings/gateway.blade.php ENDPATH**/ ?>