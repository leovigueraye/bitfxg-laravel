<div class="row">
    <div class="col-12">
        <form method="post" action="<?php echo e(route('updatewebinfo')); ?>" id="appinfoform" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class=" row">
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Website Name</h5>
                    <input type="text" name="site_name" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->site_name); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Website Title</h5>
                    <input type="text" name="site_title" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->site_title); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Website Keywords</h5>
                    <input type="text" name="keywords" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->keywords); ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Website Url (https://yoursite.com)</h5>
                    <input type="text" placeholder="https://yoursite.com" name="site_address" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="<?php echo e($settings->site_address); ?>" required>
                </div>
                <div class="form-group col-md-12">
                    <h5 class="text-<?php echo e($text); ?>">Website Description</h5>
                    <textarea name="description" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" rows="4"><?php echo e($settings->description); ?></textarea>
                </div> 
            </div>
            
            <div class=" row">
                <div class="form-group col-md-12">
                    <h5 class="text-<?php echo e($text); ?>">Announcement</h5>
                    <textarea name="update" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" rows="2"><?php echo e($settings->newupdate); ?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Live chat widget Code</h5>
                    <textarea name="tawk_to" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" rows="4"><?php echo e($settings->tawk_to); ?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Timezone</h5>
                    <select name="timezone" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> select2">
                        <option><?php echo e($settings->timezone); ?></option>
                        <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($list); ?>"><?php echo e($list); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                    
                    <div class="mt-4">
                        <h5 class="text-<?php echo e($text); ?>">Installation Type</h5>
                        <select name="install_type" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                            <option><?php echo e($settings->install_type); ?></option>
                            <option>Main-Domain</option>
                            <option>Sub-Domain</option>
                            <option>Sub-Folder</option>
                        </select>  
                    </div>
                    
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Logo (Recommended size; max width, 200px and max height 100px.)</h5>
                    <input name="logo" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" type="file">
                </div>
                <div class="form-group col-md-6">
                    <h5 class="text-<?php echo e($text); ?>">Favicon (Recommended type: png, size: max width, 32px and max height 32px.)</h5>
                    <input name="favicon" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" type="file">
                </div> 
            </div>
            
            <div class="mt-3 row">
                <input type="submit" class="px-5 btn btn-primary btn-lg" value="Update">
            </div>
             
        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/AppSettings/webinfo.blade.php ENDPATH**/ ?>