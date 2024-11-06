<?php $content = app('App\Http\Controllers\FrontController'); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($settings->site_name); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description"
            content="<?php echo e($settings->description); ?>">

    <meta itemprop="name" content="<?php echo e($settings->site_name); ?> - <?php echo e($settings->site_title); ?>">
    <meta itemprop="description"
        content="<?php echo e($settings->description); ?>">
    <meta itemprop="image" content="<?php echo e(asset('temp/images/meta.png')); ?>">

    <link rel="icon" href="<?php echo e(asset('storage/app/public/'. $settings->favicon)); ?>" type="image/png"/>
    <link rel="stylesheet" href="<?php echo e(asset('temp/bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('temp/css/style.css')); ?>">
    <script src="<?php echo e(asset('temp/Js/bootstrap.bundle.js')); ?>"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark shadow px-lg-5">
        <div class="container-fluid py-lg-3 ">
          <a class="navbar-brand" href="/">
          <img src="<?php echo e(asset('storage/app/public/'. $settings->logo)); ?>" height="35" alt="" class="mr-2">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/about')); ?>"> <strong class="pr-5">ABOUT US</strong></a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-4" href="#" role="button" data-bs-toggle="dropdown">INSTRUMENTS</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(url('/crypto')); ?>">Crypto</a></li>
                    <li><hr class="dropdown-divider"></hr></li>
                    <li><a class="dropdown-item" href="<?php echo e(url('/forex')); ?>">Forex</a></li>
                    <li><hr class="dropdown-divider"></hr></li>
                    <li><a class="dropdown-item" href="<?php echo e(url('/gold')); ?>">Gold</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/statistic')); ?>"> <strong>STATISTIC</strong></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-4" href="#" role="button" data-bs-toggle="dropdown">ACCOUNT</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(url('/login')); ?>">Login</a></li>
                    <li><hr class="dropdown-divider"></hr></li>
                    <li><a class="dropdown-item" href="<?php echo e(url('/register')); ?>">Sign Up</a></li>
                </ul>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/contact')); ?>"> <strong>CONTACT US</strong></a>
              </li>
            </ul>

          </div>

          <div class="">
              <form class="text-right">
                  <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                  </button>
                </span class="px-5">
                 <a href="<?php echo e(url('/contact')); ?>"><button type="button" class="btn btn-danger px-2 py-2">Create an Account</button></a> </li>      
                </form>
          </div>
           
          <!-- The Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-fullscreen">
                <div class="modal-content bg-dark">
                  <div class="modal-header">
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body modal-search">
                    <input type="text" class="form-control bg-dark text-light" placeholder="Search...">
                  </div>
                </div>
              </div>
            </div>
        </div>
      </nav>

      <?php echo $__env->yieldContent('content'); ?>

    <footer class="container-fluid bg-secondary text-white px-md-5 py-5">
      <div class="py-5 px-lg-5">
        Warning: Before you start trading, you should completely understand the risks involved with the currency and crypto market and trading on margin, and you should be aware of your level of experience.
      </div>
      <div class="row text-white px-lg-5 px-sm-2">
        <div class="col border border-dark bg-dark d-flex p-4">
          <div>
            <img src="assets/images/icon-message.png" alt="">
          </div>
          <div>
            <a href="mailto:s%75%70%70o%72t@24bitf%78.%63om" class="text-white">support@24bitfx.com</a>
            <p>Drop Us a Line</p>
          </div>
        </div>
        <div class="col border border-dark bg-danger d-flex p-4">
          <div>
            <img src="assets/images/icon-phone-call.png" alt="">
          </div>
          <div>
            <a href="tel:+14124536112" class="text-white">+14124536112</a>
            <p>Call Us Now</p>
          </div>
        </div>
        <div class="col border border-dark bg-dark d-flex p-4">
          <div>
            <img src="assets/images/icon-placeholder.png" alt="">
          </div>
          <div>
            <p><?php echo e($content->getContent('52GPRA','description')); ?></p>
            <p>Get Direction</p>
          </div>
        </div>
      </div>
    
      <div class="pt-3 text-center">
        <p> © Copyright <?php echo e(date("Y")); ?> <?php echo e($settings->site_name); ?> All Rights Reserved.</p>
      </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/layouts/base.blade.php ENDPATH**/ ?>