<form method="POST" action="javascript:void(0)" id="updateemailpref">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row pt-4">
        <div class="mb-3 col-md-6 pb-3">
            <label class="">Send confirmation OTP to my email when withdrawing my funds.</label>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="otpsend" id="otpsendYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="otpsend" id="otpsendNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div>
        
        <div class="mb-3 col-md-6 pb-3">
            <label class="">Send me email when i get profit.</label>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="roiemail" id="roiemailYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="roiemail" id="roiemailNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div>
        <div class="mb-3 col-md-6 pb-3">
            <label class="">Send me email when my investment plan expires.</label>
            <div class="selectgroup">
                <label class="selectgroup-item">
                    <input type="radio" name="invplanemail" id="invplanemailYes" value="Yes" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Yes</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="invplanemail" id="invplanemailNo" value="No" class="selectgroup-input">
                    <span class="selectgroup-button">No</span>
                </label>
            </div>
        </div>
        <div class="mt-2 col-12">
            <button type="submit" class="px-5 btn btn-primary">Save</button>
        </div>
    </div>
    
</form>



<?php if(Auth::user()->sendotpemail == "Yes"): ?>
    <script>
        document.getElementById('otpsendYes').checked = true;
    </script>    
<?php else: ?>
<script>
    document.getElementById('otpsendNo').checked = true;
</script> 
<?php endif; ?>





<?php if(Auth::user()->sendroiemail == "Yes"): ?>
    <script>
        document.getElementById('roiemailYes').checked = true;
    </script>    
<?php else: ?>
<script>
    document.getElementById('roiemailNo').checked = true;
</script> 
<?php endif; ?>


<?php if(Auth::user()->sendinvplanemail == "Yes"): ?>
    <script>
        document.getElementById('invplanemailYes').checked = true;
    </script>    
<?php else: ?>
<script>
    document.getElementById('invplanemailNo').checked = true;
</script> 
<?php endif; ?>



<script>
    
    document.getElementById('updateemailpref').addEventListener('submit', function() {
       // alert('love');
        $.ajax({
            url: "<?php echo e(route('updateemail')); ?>",
            type: 'POST',
            data: $('#updateemailpref').serialize(),
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
</script><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/profile/update-security-form.blade.php ENDPATH**/ ?>