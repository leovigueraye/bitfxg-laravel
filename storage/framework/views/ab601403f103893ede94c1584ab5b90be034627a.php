<div class="row">
    <div class="col-md-8 offset-md-2">
        <form action="javascript:void(0)" method="POST" id="coinpayform">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">Merchant ID</h5>
                <input  class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Merchant ID" type="text" name="cp_m_id" value="<?php echo e($cpd->cp_m_id); ?>" required> 
            </div>
            
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">CoinPayment IPN Secret</h5>
                <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="CoinPayment IPN Secret" type="text" name="cp_ipn_secret" value="<?php echo e($cpd->cp_ipn_secret); ?>" required> 
            </div>
            
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">CoinPayments debug email</h5>
                <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="CoinPayments debug email" type="text" name="cp_debug_email" value="<?php echo e($cpd->cp_debug_email); ?>" required> 
            </div>
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">Public key</h5>
                <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Public key" type="text" name="cp_p_key" value="<?php echo e($cpd->cp_p_key); ?>" required> 
            </div>
            <div class="form-group">
                <h5 class="text-<?php echo e($text); ?>">Private key</h5>
                <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" placeholder="Private key" type="text" name="cp_pv_key" value="<?php echo e($cpd->cp_pv_key); ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">  
            </div>
        </form>
    </div>
</div><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/PaymentSettings/coinpayment.blade.php ENDPATH**/ ?>