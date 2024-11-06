<div class="row">
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="paypreform">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>"> Deposit option:</h5>
                    <select name="deposit_option" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                        <option value="<?php echo e($settings->deposit_option); ?>"> <?php echo e($settings->deposit_option); ?>(Current)</option>
                        <option value="manual">Manual</option>
                        <option  value="auto">Automatic</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>"> Withdrawal option:</h5>
                    <select name="withdrawal_option" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                        <option value="<?php echo e($settings->withdrawal_option); ?>"><?php echo e($settings->withdrawal_option); ?>(Current)</option>
                        <option value="manual">Manual</option>
                        <option  value="auto">Automatic</option>
                    </select>
                </div> 
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>"> Minimum Deposit Amount:</h5>
                    <input class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>"  type="text" name="minamt" value="<?php echo e($moresettings->minamt); ?>" required> 
                    <small class="text-<?php echo e($text); ?>">This amount indicates the minimum amount a user can deposit</small>
                </div> 
                <div class="form-group col-md-12">
                    <button type="submit" class="px-4 btn btn-primary">Save</button>
                </div> 
            </div>
            
        </form>
    </div>
</div><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/PaymentSettings/withdrawal.blade.php ENDPATH**/ ?>