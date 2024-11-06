<?php $__env->startSection('title', 'Frequently asked questions'); ?>

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
                        <h4 class="title"><?php echo e($content->getContent('wuZlis','title')); ?> </h4>

                        <div class="pt-2 mt-4 subcribe-form">

                        </div>

                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><?php echo e($settings->site_name); ?></a>
                                    </li>

                                    <li class="breadcrumb-item active" aria-current="page">Faq</li>
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

    <!-- Start Section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4"><?php echo e($content->getContent('1TYkw0','title')); ?></h4>
                        <p class="mx-auto para-desc text-muted"><?php echo e($content->getContent('1TYkw0','description')); ?></p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-question-circle"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="<?php echo e(url('/faq')); ?>" class="title h5 text-dark"><?php echo e($content->getContent('rK6Yhn','title')); ?></a>
                                <p class="mt-3 mb-0 text-muted"><?php echo e($content->getContent('rK6Yhn','description')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-file-bookmark-alt"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="<?php echo e(url('/login')); ?>" class="title h5 text-dark"><?php echo e($content->getContent('HBHBLo','title')); ?></a>
                                <p class="mt-3 mb-0 text-muted"><?php echo e($content->getContent('HBHBLo','description')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-cog"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="<?php echo e(url('/contact')); ?>" class="title h5 text-dark"><?php echo e($content->getContent('rCTDQh','title')); ?></a>
                                <p class="mt-3 mb-0 text-muted"><?php echo e($content->getContent('rCTDQh','description')); ?></p>
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
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4"><?php echo e($content->getContent('kMsswR','title')); ?></h4>
                        <p class="mx-auto para-desc text-muted"><?php echo e($content->getContent('kMsswR','description')); ?></p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="pt-2 mt-4 col-lg-9">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-2 border-0 rounded card">
                                <a data-toggle="collapse" href="#collapse<?php echo e($item->id); ?>" class="faq position-relative"
                                    aria-expanded="true" aria-controls="collapse<?php echo e($item->id); ?>">
                                    <div class="p-3 border-0 shadow card-header bg-light" id="heading<?php echo e($item->id); ?>">
                                        <h6 class="mb-0 title"><?php echo e($item->question); ?></h6>
                                    </div>
                                </a>
                                <div id="collapse<?php echo e($item->id); ?>" class="collapse show" aria-labelledby="heading<?php echo e($item->id); ?>"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0 text-muted faq-ans"> <?php echo e($item->answer); ?> </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="p-4 rounded shadow media align-items-center features feature-clean">
                        <div class="text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-envelope-check d-block h3"></i>
                        </div>
                        <div class="ml-4 content">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark"><?php echo e($content->getContent('EOUU7R','title')); ?></a></h5>
                            <p class="mb-0 text-muted"><?php echo e($content->getContent('EOUU7R','description')); ?></p>
                            <div class="mt-2">
                                <a href="<?php echo e(url('/contact')); ?>" class="btn btn-sm btn-soft-primary">Submit a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section -->


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\24fxtrade\Account\resources\views/home/faq.blade.php ENDPATH**/ ?>