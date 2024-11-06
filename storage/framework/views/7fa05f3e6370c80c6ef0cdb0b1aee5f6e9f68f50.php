

<?php $__env->startSection('title', $settings->site_title); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

      <!-- Banner Image -->
      <section>
        <div class="container-fluid bg1">
            <div class="row">
                <div class="col-md text-light my-5">
                    <span class="text-center my-5">
                        <h1>Forex</h1>
                        <p><a href="/" class="text-white">Home</a> > Forex</p>
                    </span>
                </div>
            </div>
    </div>
    </section>

<section class="py-5">
  <div class="container">
    <div class="text-center">
      <p>Trade Forex</p>
      <h1>Trade Multiple Currencies</h1>
    </div>
      <div class="row">
          <div class="col-md-5 col-sm-12">
              <p class="pb-2">With approximately $6 trillion traded in the market every day, the Forex market has the highest liquidity in the world. This means that one can buy almost any currency he wishes in high volumes any time the market is open. The Forex market is open 24 hours, five days a week – Monday to Friday.</p> 
              <p>Bitsmit parades among the best traders in the industry. Joining the team is a click away to start earning in the largest global financial market. </p>
          </div>
          <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
              <div>
                  <img src="<?php echo e(asset('temp/images/forex.png')); ?>" alt="Rounded Image" class="img-fluid">
              </div>
          </div>
      </div>
</div>
<!-- end container -->
</div>
</section>

<section>
  <div class="container">
    <h4 class="text-center">Currency Pairs</h4>
    <p>There are hundreds of currencies in the world, and each one has its own three-letter symbol. For instance, the American Dollar is represented by USD, Euros are EUR, Swiss Francs are CHF, and British Pounds are GBP.</p>
    <p>Currencies are divided into two main categories – Major currencies and Minors. The major currencies are derived from the most powerful economies around the globe – the US, Japan, the UK, the Eurozone, Canada, Australia, Switzerland and New Zealand. When you pit them against a counterpart. they become a currency pair. For instance, the GBP against the USD becomes GBP/USD where one’s value is relative to the other. If the GBP goes up against the USD, then the USD goes down.</p>
    <div>
      <img src="<?php echo e(asset('temp/images/what-is-forex_final.png')); ?>" alt="" class="img-fluid">
    </div>
  </div>
  
</section>

<section>
  <div class="container py-5">
    <h4 class="text-center">Why Trade Forex with 24bitfx</h4>
    <p>When trading forex, as well as any other instrument, you must be able to trade with confidence. Profits can never be guaranteed, and any type of trading has its advantages and disadvantages, as well as the risk of losing funds. We are committed to a set of values which define our relationship with our customers. As such, we provide the best trading experience possible, offering level multilingual customer service and the most advanced and user-friendly , as well as the investment packages that allow our clients participate in elite trading schemes, cashing out on a well orchestrated team effort.Thereby mitigating against risk.</p>
    <div>
      <img src="<?php echo e(asset('temp/images/about-us-hero-1024x305.webp')); ?>" alt="" class="img-fluid">
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container-fluid pt-5 bg-dark">
    <div class="text-center text-white pt-1">
      <h3>Get Started By Opening a Free Account</h3>
    </div>
    <div class="text-center text-white pt-5 pb-2">
      <a href="<?php echo e(url('/login')); ?>"><button type="button" class="btn btn-danger px-3">Open an Account <br><span class="te">Get a $50 Bonus for a Free New Account</span></button></a>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/home/forex.blade.php ENDPATH**/ ?>