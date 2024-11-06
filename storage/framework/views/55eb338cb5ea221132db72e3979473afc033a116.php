<?php $__env->startComponent('mail::message'); ?>
# Hello <?php echo e($foramin  ? 'Admin' : $user->name); ?>


<?php if($foramin): ?>
    This is to inform you of a successfull Deposit of <?php echo e($settings->currency.$deposit->amount); ?> from <?php echo e($user->name); ?>, please login to process it.
    
<?php else: ?>
    <?php if($deposit->status == 'Processed'): ?>
    This is to inform you that your deposit of <?php echo e($settings->currency.$deposit->amount); ?> have been received and confirmed. <br>
    Your account balance is now: <?php echo e($settings->currency.$user->account_bal); ?>

    <?php else: ?>
    This is to inform you that your deposit of <?php echo e($settings->currency.$deposit->amount); ?> is successfull, please wait while we confirm your deposit. You will receive a notification regarding the status of this transation.
    <?php endif; ?>
        
<?php endif; ?>
Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\Production\24fxtrade\Account\resources\views/emails/success-deposit.blade.php ENDPATH**/ ?>