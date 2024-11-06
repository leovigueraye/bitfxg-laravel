<div class="row">
    <div class="col-md-12">
        <h4>Configuration</h4>
        <hr>
    </div>
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="emailform">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="">
                        <h5 class="text-<?php echo e($text); ?>">Mail Server</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" name="server" id="sendmailserver" value="sendmail" class="selectgroup-input" checked="">
                                <span class="selectgroup-button">Sendmail</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="server" id="smtpserver" value="smtp" class="selectgroup-input">
                                <span class="selectgroup-button">SMTP</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Email From</h5>
                    <input type="email" name="emailfrom" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->emailfrom); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Email From Name</h5>
                    <input type="text" name="emailfromname" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->emailfromname); ?>" required>
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-<?php echo e($text); ?>">SMTP Host</h5>
                    <input type="text" name="smtp_host" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> smtpinput" value="<?php echo e($settings->smtp_host); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-<?php echo e($text); ?>">SMPT Port</h5>
                    <input type="text" name="smtp_port" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> smtpinput" value="<?php echo e($settings->smtp_port); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-<?php echo e($text); ?>">SMPT Encryption</h5>
                    <input type="text" name="smtp_encrypt" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> smtpinput" value="<?php echo e($settings->smtp_encrypt); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-<?php echo e($text); ?>">SMPT Username</h5>
                    <input type="text" name="smtp_user" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> smtpinput" value="<?php echo e($settings->smtp_user); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="text-<?php echo e($text); ?>">SMPT Password</h5>
                    <input type="text" name="smtp_password" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> smtpinput" value="<?php echo e($settings->smtp_password); ?>">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4>Google Login Credentials</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Client ID</h5>
                    <input type="text" name="google_id" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->google_id); ?>">
                    <small class="text-<?php echo e($text); ?>"> From console.cloud.google.com</small>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Client Secret</h5>
                    <input type="text" name="google_secret" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->google_secret); ?>">
                    <small class="text-<?php echo e($text); ?>"> From console.cloud.google.com</small>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Redirect URL</h5>
                    <input type="text" name="google_redirect" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->google_redirect); ?>">
                    <small class="text-<?php echo e($text); ?>">Set this to your Valid OAuth Redirect URI in console.cloud.google.com. Be sure to replace the 'yoursite.com' with your website url  </small>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-md-12">
                    <h4>Google Captcha Credentials</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Captcha Secret</h5>
                    <input type="text" name="capt_secret" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->capt_secret); ?>">
                    <small class="text-<?php echo e($text); ?>"> From https://www.google.com/recaptcha/admin/create  </small>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Captcha Site-Key</h5>
                    <input type="text" name="capt_sitekey" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->capt_sitekey); ?>">
                    <small class="text-<?php echo e($text); ?>"> From https://www.google.com/recaptcha/admin/create</small>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>


<?php if($settings->mail_server=='sendmail'): ?>
<script>document.getElementById("sendmailserver").checked= true;</script>
<?php else: ?>
<script>document.getElementById("smtpserver").checked= true;</script>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/AppSettings/email.blade.php ENDPATH**/ ?>