<form method="post" action="javascript:void(0)" id="updatewithdrawalinfo">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <fieldset>
        <div class="row pt-4">
            <div class="form-group col-md-6 pb-3">
                <label class="">Bank Name</label>
                <input type="text" name="bank_name" value="<?php echo e(Auth::user()->bank_name); ?>"  class="form-control " placeholder="Enter bank name">
            </div>
            <div class="form-group col-md-6 pb-3">
                <label class="">Account Name</label>
                <input type="text" name="account_name" value="<?php echo e(Auth::user()->account_name); ?>"  class="form-control " placeholder="Enter Account name">
            </div>
            <div class="form-group col-md-6 pb-3">
                <label class="">Account Number</label>
                <input type="text" name="account_no" value="<?php echo e(Auth::user()->account_number); ?>"  class="form-control " placeholder="Enter Account Number">
            </div>
            <div class="form-group col-md-6 pb-3">
                <label class="">Swift Code</label>
                <input type="text" name="swiftcode" value="<?php echo e(Auth::user()->swift_code); ?>"  class="form-control " placeholder="Enter Swift Code">
            </div>
        </div>
    </fieldset>
    <fieldset class="mt-2">
        <div class="row">
            <div class="form-group col-md-6 pb-3">
                <label class="">Bitcoin</label>
                <input type="text" name="btc_address" value="<?php echo e(Auth::user()->btc_address); ?>"  class="form-control " placeholder="Enter Bitcoin Address">
                <small class="">Enter your Bitcoin Address that will be used to withdraw your funds</small>
            </div>
            <div class="form-group col-md-6 pb-3">
                <label class="">Ethereum</label>
                <input type="text" name="eth_address" value="<?php echo e(Auth::user()->eth_address); ?>"  class="form-control " placeholder="Enter Etherium Address">
                <small class="">Enter your Ethereum Address that will be used to withdraw your funds</small>
            </div>
            <div class="form-group col-md-6 pb-3">
                <label class="">Litecoin</label>
                <input type="text" name="ltc_address" value="<?php echo e(Auth::user()->ltc_address); ?>"  class="form-control " placeholder="Enter Litcoin Address">
                <small class="">Enter your Litecoin Address that will be used to withdraw your funds</small>
            </div>
        </div>
    </fieldset>
    <button type="submit" class="px-5 btn btn-primary">Save</button>
</form>


<script>
    
    document.getElementById('updatewithdrawalinfo').addEventListener('submit', function() {
       // alert('love');
        $.ajax({
            url: "<?php echo e(route('updateacount')); ?>",
            type: 'POST',
            data: $('#updatewithdrawalinfo').serialize(),
            success: function(response) {
                if (response.status === 200) {
                    $.notify({
                        // options
                        icon: 'flaticon-alarm-1',
                        title: 'Success',
                        message: response.success,
                    },{
                        // settings
                        type: 'success',
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },
    
                    });
                } else {
                   
                }
            },
            error: function(data) {
                console.log(data);
            },
    
        });
    });
</script><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/profile/update-withdrawal-method.blade.php ENDPATH**/ ?>