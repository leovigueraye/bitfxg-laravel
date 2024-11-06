<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-<?php echo e($text); ?>">Terms and Privacy Policy</h1>
            </div>
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
            <div class="mb-5 row">
                <div class="col-md-12">
                    <div class="card p-1 p-md-5 shadow-lg bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <form method="post" action="<?php echo e(route('savetermspolicy')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <h5 class="text-<?php echo e($text); ?>">Use Terms and Privacy Policy?</h5>
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="terms" id="termsyes" value="yes" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Yes</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="terms" id="termsno" value="no" class="selectgroup-input">
                                                <span class="selectgroup-button">No</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="ckeditor form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="termsprivacy">
                                            <?php echo e($terms->description); ?>

                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($terms->useterms =='yes'): ?>
    <script>document.getElementById("termsyes").checked= true;</script>
    <?php else: ?>
    <script>document.getElementById("termsno").checked= true;</script>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('scripts'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
        <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/admin/Settings/FrontendSettings/privacy.blade.php ENDPATH**/ ?>