<?php $__env->startSection('title', 'Contact us'); ?>

<?php $__env->startSection('styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-12">
                    <div class="page-next-level">
                        <h4 class="title"><?php echo e($content->getContent('ROu4q6','title')); ?></h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><?php echo e($settings->site_name); ?></a>
                                    </li>

                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="overflow-hidden text-white shape">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="pb-4 section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-phone d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold"><?php echo e($content->getContent('0EXbji','title')); ?></h5>

                            <a href="tel:<?php echo e($content->getContent('0EXbji','description')); ?>"
                                class="text-primary"><?php echo e($content->getContent('0EXbji','description')); ?></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-envelope d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold"><?php echo e($content->getContent('HLgyaQ','title')); ?></h5>

                            <a href="mailto:<?php echo e($content->getContent('HLgyaQ','description')); ?>"
                                class="text-primary"><?php echo e($content->getContent('HLgyaQ','description')); ?></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-map-marker d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold"><?php echo e($content->getContent('52GPRA','title')); ?></h5>
                            <p class="text-muted"><?php echo e($content->getContent('52GPRA','description')); ?></p>

                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-12">
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
                </div>
                <div class="pt-2 col-lg-12 col-md-6 pt-sm-0">
                    <div class="border-0 rounded shadow card">
                        <div class="py-5 card-body">
                            <h4 class="card-title"><?php echo e($content->getContent('EOUU7R','title')); ?></h4>
                            <div class="mt-4 custom-form">
                                <div id="message"></div>
                                <form method="post" action="<?php echo e(route('enquiry')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Name <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>

                                                    <input name="name" id="name" type="text" class="pl-5 form-control" placeholder="Full Name :">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    
                                                    <input name="email" id="email" type="email"
                                                        class="pl-5 form-control" placeholder="Your email">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <div class="position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" type="text"
                                                        class="pl-5 form-control" placeholder="Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <div class="position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea id="comments" rows="4"
                                                        class="pl-5 form-control" name="message"
                                                        placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="text-center col-sm-12">
                                            <input type="submit" id="submit" name="send"
                                                class="submitBnt btn btn-primary btn-block" value="Send Message">
                                            <div id="simple-msg"></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end custom-form-->
                        </div>
                    </div>
                </div>
                <!--end col-->


                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->


        <!--end container-->
    </section>
    <!--end section-->
    <!-- End contact -->


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\24fxtrade\Account\resources\views/home/contact.blade.php ENDPATH**/ ?>