<?php $content = app('App\Http\Controllers\FrontController'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($settings->site_name); ?> | <?php echo e($settings->site_title); ?></title>
    <link rel="icon" href="<?php echo e(asset('storage/app/public/photos/'.$settings->favicon)); ?>" type="image/png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?php echo e(asset ('temp/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo e(asset ('temp/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/jquery/magnific-popup.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('temp/lib/icofont/icofont.min.css')); ?>" rel="stylesheet">




    <!-- Main Stylesheet File -->
    <link href="<?php echo e(asset('temp/css/frontend_style_blue.css')); ?>" rel="stylesheet">

</head>
<body>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  {<?php echo $settings->tawk_to; ?>}
  </script>

  <!--==========================
    Header
  ============================-->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
            <a href="#intro" class="mr-auto logo"><img src="<?php echo e(asset('storage/app/public/photos/'.$settings->logo)); ?>" alt="<?php echo e($settings->site_name); ?>" title="" class="img-fluid" /></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              
            <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              </li>
              <li><a href="#contact">Contact us</a></li>
    
              <?php if($settings->site_preference =="Web dashboard only"): ?>
              <?php if(auth()->guard()->guest()): ?>
              <li><a href="login" class="">Sign In</a></li>
              <li><a href="register" class="btn-log ">Get started</a></li>
              <?php else: ?>
              <li class="nav-item dropdown avatar">
                    <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#" role="button"         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                      <a href="dashboard" class="dropdown-item text-dark">Dashboard</a><br>
                        <a href="<?php echo e(route('logout')); ?>" class="dropdown-item text-dark"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              Logout
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
              </li>
              <?php endif; ?>
              <?php else: ?>
    
              <li><a href="<?php echo e($settings->bot_link); ?>" class="btn-log ">Get started</a></li>
              <?php endif; ?>
    
            </ul>
          </nav><!-- nav-menu- -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"> </ol>

        <div class="carousel-inner" role="listbox"  >
          
          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo e(asset('storage/app/public/photos/'.$content->getImage('57VnOE','img_path'))); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo e($content->getContent('toe3Ew','title')); ?></h2>
                <p><?php echo e($content->getContent('toe3Ew','description')); ?></p>
                <a href="login" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo e(asset('storage/app/public/photos/'.$content->getImage('dC6ZaA','img_path'))); ?>" alt="" ></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo e($content->getContent('jJwh78','title')); ?></h2>
                <p><?php echo e($content->getContent('jJwh78','description')); ?></p>
                <a href="login" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo e(asset('storage/app/public/photos/'.$content->getImage('9kHash','img_path'))); ?>" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo e($content->getContent('SLxaB2','title')); ?></h2>
                <p><?php echo e($content->getContent('SLxaB2','description')); ?></p>
                <a href="login" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo e(asset('storage/app/public/photos/'.$content->getImage('CcW52g','img_path'))); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo e($content->getContent('BkP8pH','title')); ?></h2>
                <p><?php echo e($content->getContent('BkP8pH','description')); ?></p>
                <a href="login" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo e(asset('storage/app/public/photos/'.$content->getImage('96i7xH','img_path'))); ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo e($content->getContent('W6gTBN','title')); ?></h2>
                <p><?php echo e($content->getContent('W6gTBN','description')); ?></p>
                <a href="login" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section><!-- #intro end -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3><?php echo e($content->getContent('anvs8c','title')); ?> <?php echo e($settings->site_name); ?></h3>
          <p><?php echo e($content->getContent('anvs8c','description')); ?></p>
        </header>

        <div class="text-center row about-cols">

          <div class="col-lg-3 col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo e(asset ('temp/img/about/innovate.png')); ?>" alt="" class="mt-4 w-25">
                
              </div>
              <h2 class="title"><a href="#"><?php echo e($content->getContent('epJ4LI','title')); ?></a></h2>
              <p><?php echo e($content->getContent('epJ4LI','description')); ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo e(asset ('temp/img/about/secure.png')); ?>" alt="" class="mt-4 w-25">
                
              </div>
              <h2 class="title"><a href="#"><?php echo e($content->getContent('5hbB6X','title')); ?></a></h2>
              <p><?php echo e($content->getContent('5hbB6X','description')); ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo e(asset ('temp/img/about/prof.png')); ?>" alt="" class="mt-4 w-25">
               
              </div>
              <h2 class="title"><a href="#"><?php echo e($content->getContent('Zrhm3I','title')); ?></a></h2>
              <p><?php echo e($content->getContent('Zrhm3I','description')); ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo e(asset ('temp/img/about/invest.png')); ?>" alt="" class="mt-4 w-25">
               
              </div>
              <h2 class="title"><a href="#"><?php echo e($content->getContent('yTKhlt','title')); ?></a></h2>
              <p><?php echo e($content->getContent('yTKhlt','description')); ?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3><?php echo e($content->getContent('u0Ervr','title')); ?></h3>
          <p><?php echo e($content->getContent('u0Ervr','description')); ?></p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" >
                <svg class="svg">
                  <use xlink:href="<?php echo e(asset ('temp/img/sprite.svg#icon-stable')); ?>"></use>
                </svg>
              </div>
              <h3 class="title"><?php echo e($content->getContent('Dwu6Bv','title')); ?></h3>
              <p class="description"><?php echo e($content->getContent('Dwu6Bv','description')); ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <svg class="svg">
                  <use xlink:href="<?php echo e(asset ('temp/img/sprite.svg#icon-payment')); ?>"></use>
                </svg>
              </div>
              <h3 class="title"><?php echo e($content->getContent('eMo1d2','title')); ?></h3>
              <p class="description"><?php echo e($content->getContent('eMo1d2','description')); ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <svg class="svg">
                  <use xlink:href="<?php echo e(asset ('temp/img/sprite.svg#icon-referral')); ?>"></use>
                </svg>
              </div>
              <h3 class="title"><?php echo e($content->getContent('kEJPm3','title')); ?></h3>
              <p class="description"><?php echo e($content->getContent('kEJPm3','description')); ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <svg class="svg">
                  <use xlink:href="<?php echo e(asset ('temp/img/sprite.svg#icon-dollar')); ?>"></use>
                </svg>
              </div>
              <h3 class="title"><?php echo e($content->getContent('bBSnFV','title')); ?></h3>
              <p class="description"><?php echo e($content->getContent('bBSnFV','description')); ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <svg class="svg">
                  <use xlink:href="<?php echo e(asset ('temp/img/sprite.svg#icon-support')); ?>"></use>
                </svg>
              </div>
              <h3 class="title"><?php echo e($content->getContent('DUK9pc','title')); ?></h3>
              <p class="description"><?php echo e($content->getContent('DUK9pc','description')); ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <svg class="svg">
                  <use xlink:href="<?php echo e(asset ('temp/img/sprite.svg#icon-shield')); ?>"></use>
                </svg>
              </div>
              <h3 class="title"><?php echo e($content->getContent('VaeiMW','title')); ?></h3>
              <p class="description"><?php echo e($content->getContent('VaeiMW','description')); ?></p>
            </div>
          </div>

      </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3><?php echo e($content->getContent('vr6Xw0','title')); ?></h3>
          <p><?php echo e($content->getContent('vr6Xw0','description')); ?></p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">

          
      
          <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- Basic Plan  -->
              <div class="col-lg-4 col-md-6">
                <div class="pricing-box">
                    <h3><?php echo e($plan->name); ?></h3>
                    <div class="cur">
                      <span><?php echo e($settings->currency); ?></span>
                      <h2><?php echo e($plan->price); ?></h2>
                      <h6><?php echo e($settings->s_currency); ?></h6>
                     </div>
                  <div class="price-list">
                    <ul class="list-unstyled">
                      <li class="list-item"><i class="bx bx-check"></i>Min. Possible deposit: <?php echo e($settings->currency); ?><?php echo e($plan->min_price); ?></li>
                      <li class="list-item"><i class="bx bx-check"></i>Max. Possible deposit: <?php echo e($settings->currency); ?><?php echo e($plan->max_price); ?></li>
                      <li class="list-item"><i class="bx bx-check"></i><?php echo e($settings->currency); ?><?php echo e($plan->minr); ?> Minimum return</li>
                      <li class="list-item"><i class="bx bx-check"></i><?php echo e($settings->currency); ?><?php echo e($plan->maxr); ?> Maximum return</li>
                      <li class="list-item"><i class="bx bx-check"></i><?php echo e($settings->currency); ?><?php echo e($plan->gift); ?> Gift Bonus</li>
                    </ul>
                  </div>
                  <div class="pricing-button">
                    <a href="" class="btn btn-primary">Buy Now</a>
                  </div>
                </div>
              </div>
            
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Testimonials Sections
    ============================-->

    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3><?php echo e($content->getContent('SMsJr1','title')); ?></h3>
          <p><?php echo e($content->getContent('SMsJr1','description')); ?></p>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
              <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="testimonial-item">
                <img src="<?php echo e(asset('storage/photos/'.$testimony->picture)); ?>" class="testimonial-img" alt="">
                <h3><?php echo e($testimony->name); ?></h3>
                <h4><?php echo e($testimony->position); ?></h4>
                <p>
                  <?php echo e($testimony->what_is_said); ?>

                </p>
              </div>  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
            </div>
          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Transactions Sections
    ============================-->

    <section id="transaction" class="transaction">
      <div class="container">

        <header class="section-header">
          <h3><?php echo e($content->getContent('OtEicb','title')); ?></h3>
          <p><?php echo e($content->getContent('OtEicb','description')); ?></p>
        </header>
        <div class="row">
          <div class="col-lg-12 col-md-6"></div>
          <div class="transaction-box">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#tab1" data-toggle="tab">Withdrawal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tab2" data-toggle="tab">Deposit</a>
              </li>
            </ul>

            <div class="clearfix tab-content">
              <div id="tab1" class="tab-pane active">
                <div class="shadow table-responsive">
                  <table class="table table-striped">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">amount</th>
                        <th scope="col">Mode</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($deposit->duser->name); ?></th>
                        <td><?php echo e($deposit->created_at); ?></td>
                        <td><?php echo e($settings->currency); ?><?php echo e($deposit->amount); ?></td>
                        <td><?php echo e($deposit->payment_mode); ?></td>
                        <td><?php echo e($deposit->status); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="tab2"  class="tab-pane">
                <div class="shadow table-responsive">
                  <table class="table table-striped">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">amount</th>
                        <th scope="col">Mode</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <th scope="row"><?php echo e($deposit->duser->name); ?></th>
                          <td><?php echo e($deposit->created_at); ?></td>
                          <td><?php echo e($settings->currency); ?><?php echo e($deposit->amount); ?></td>
                          <td><?php echo e($deposit->payment_mode); ?></td>
                          <td><?php echo e($deposit->status); ?></td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </section>
    <!-- End transaction -->

    <!--==========================
      Frequently Ask questions
    ============================-->
    <section id="faq">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title"><?php echo e($content->getContent('OLZt1I','title')); ?></h3>
          <p><?php echo e($content->getContent('OLZt1I','description')); ?></p>
          <span class="section-divider"></span>
        </div>

        <ul id="faq-list" class="wow fadeInUp">
          <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li>
             <a data-toggle="collapse" class="collapsed" href="#faq<?php echo e($item->id); ?>"><?php echo e($item->question); ?> <i class="ion-android-remove"></i></a>
             <div id="faq<?php echo e($item->id); ?>" class="collapse" data-parent="#faq<?php echo e($item->id); ?>">
              <p>
                <?php echo e($item->answer); ?> 
              </p>
            </div>
          </li> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

      </div>
    </section> <!-- #faq  ends-->

    <!--==========================
      Payments Sections
    ============================-->

    <section id="payments" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3 ><?php echo e($content->getContent('U7zpEj','title')); ?></h3>
        </header>

        <div class="owl-carousel payments-carousel">
          <img src="<?php echo e(asset('temp/img/payments/payment-1.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-2.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-3.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-4.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-5.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-6.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-7.png')); ?>" alt="">
          <img src="<?php echo e(asset('temp/img/payments/payment-8.png')); ?>" alt="">
        </div>

      </div>
    </section><!-- #Payments ends -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3><?php echo e($content->getContent('9sNF7G','title')); ?></h3>
          <p><?php echo e($content->getContent('9sNF7G','description')); ?></p>
          
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3><?php echo e($content->getContent('52GPRA','title')); ?></h3>
              <p><?php echo e($content->getContent('52GPRA','description')); ?></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3><?php echo e($content->getContent('0EXbji','title')); ?></h3>
              <p><a href="tel: <?php echo e($content->getContent('0EXbji','description')); ?>"> <?php echo e($content->getContent('0EXbji','description')); ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>EMAIL</h3>
              <p><a href="<?php echo e($settings->contact_email); ?>"><?php echo e($settings->contact_email); ?></a> </p>
            </div>
          </div>

        </div>

        <div class="form">

          <?php if(Session::has('message')): ?>
          <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo e(Session::get('message')); ?>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <?php endif; ?>

          <form  action="<?php echo e(action('App\Http\Controllers\UsersController@sendcontact')); ?>"  method="POST" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="form3" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="form2" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="form8" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
  <!--==========================
    Footer Sections
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><?php echo e($settings->site_name); ?></h3>
            <p><?php echo e($content->getContent('ETsdbc','description')); ?></p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right scrollto"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
           
            <h4>Contact Us</h4>
            <p>
               <?php echo e($content->getContent('52GPRA','description')); ?> <br>
              <a href="#" class="text-white"><strong>Phone:</strong> <?php echo e($content->getContent('0EXbji','description')); ?><br></a>
              <a href="#" class="text-white"><strong>Email:</strong> <?php echo e($settings->contact_email); ?><br></a>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright  <?php echo e(date('Y')); ?> &nbsp;<strong> <?php echo e($settings->site_name); ?> &nbsp;</strong> All Rights Reserved.
      </div>
    </div>
  </footer><!-- #footer ends -->
    
  <!-- Back to top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="<?php echo e(asset('temp/lib/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/jquery.easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/php-email-form/validate.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/waypoints/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/venobox/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('temp/lib/aos/aos.js')); ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo e(asset('temp/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/home/oldindex.blade.php ENDPATH**/ ?>