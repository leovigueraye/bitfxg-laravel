

<?php $__env->startSection('title', $settings->site_title); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

<!-- Image sliders-->
    <!-- Carousel -->
    <section class="h-50 ">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
          
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active ">              
                <img src="<?php echo e(asset('temp/images/shubham-dhage-_rZnChsIFuQ-unsplash.jpg')); ?>" alt="" class="d-block w-100 h-75 img-fluid">
                <div class="carousel-caption">
                    <p class="display-2"> Bismit Trade</p>
                    <p class="display-2">Experienced Brokers</p>
                    <p class="text-lead">Trade the Market with experts brokers</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('temp/images/shubham-dhage-208asI7iZiU-unsplash.jpg')); ?>" alt="" class="d-block w-100 h-75 img-fluid">
                <div class="carousel-caption">
                    <p class="display-2"> Bismit Trade</p>
                    <p class="display-2">Experienced Brokers</p>
                    <p class="text-lead">Trade the Market with experts brokers</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('temp/images/choong-deng-xiang-EbbqeyHpbto-unsplash.jpg')); ?>" alt="" class="d-block w-100 h-75 img-fluid">
                <div class="carousel-caption">
                    <p class="display-2"> Bismit Trade</p>
                    <p class="display-2">Experienced Brokers</p>
                    <p class="text-lead">Trade the Market with experts brokers</p>
                </div>
              </div>
            </div>
          
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section>
        <div class="container px-4" >
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
              <div class="col d-flex align-items-start bg-light text-dark py-4">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 py-3">
                  <img src="<?php echo e(asset('temp/images/pf-icon3.png')); ?>" alt="" class="img-fluid">
                </div>
                <div>
                  <h4 class="text-body-emphasis">Forex</h4>
                  <p>Forex, also known as the foreign exchange market or FX market, is the world's most traded market, with a $5.1 trillion turnover per day.</p>
                </div>
              </div>
              <div class="col d-flex align-items-start bg-danger text-light py-4">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 py-3">
                  <img src="<?php echo e(asset('temp/images/icon-white-stats3.png ')); ?>" alt="" class="img-fluid">
                </div>
                <div>
                    <h4 class="text-body-emphasis">Cryptos</h4>                    
                    <p>Trade Crypto with a hones broker. Make money whether in a dip or rising market. Connect with veteran brokers and learn from the pro.</p>
                </div>
              </div>
              <div class="col d-flex align-items-start bg-dark text-light py-4">
                <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 py-3">
                  <img src="<?php echo e(asset('temp/images/icon-process3.png ')); ?>" alt="" class="img-fluid">
                </div>
                <div>
                    <h4 class="text-body-emphasis">Stock</h4>
                    <p>Invest in the world's most popular assets. From established industries to booming new age industries. Trade with confidence.</p>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section>
        <div class="main">
            <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
                            <div class="text-center">
                                <img src="<?php echo e(asset('temp/images/viktor-forgacs-3PyBkxgTiL0-unsplash.jpg ')); ?>" alt="Rounded Image" class="img-rounded img-responsive img-dog img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <p class="text-danger pb-2">About 24btifx </p> 
                            <p class="h3 pb-3">We Make Your Dreams Come True</p>
                            <p>24btifx is an international broker with our agents in different countries. We are the preferred brokers by successful traders because of our track records. We provide the best customer experience by providing its clients with training materials, cutting-edge trading technologies and latest strategies on the Forex market. We serve both as mentors and guide to newbie and reliable partner to veteran traders.</p>
                            <p class="h3 py-4">Why Choose 24btifx?</p>
                            <p class="pb-4">If you are looking for a reliable and honest broker, consider opening an account with 24bitfx. You will be surprised how easy and comfortable trading the financial can become when there is a professional company standing behind you.</p>
                            <button type="button" class="btn btn-outline-danger py-3 px-3">Read More</button>
                        </div>
                    </div>
            </div>
        <!-- end container -->
        </div>
    </section>

    <section class="py-5">
        <div class="container  px-5">
            <div class="row">
                <div class="col-md-5">
                    <p class="text-danger">Our Premium Services</p> 
                    <p class="h3">We Trade the Best Sectors</p>
                </div>
                <div class="col-md-7">
                    <p class="text-lead">Invest in the world’s most popular assets From established industries to booming new age up-and-comers pick from over a dozen of different routes to a smart investment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors -->
    <section>    

<div class="container sectors">
  <div class="bd-example-snippet bd-code-snippet">
    <div class="bd-example m-0 border-0">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="row g-0 h-100">
              <div class="col-md-6">
                <img src="<?php echo e(asset('temp/images/blockchain-technology-smart-bitcoin.jpg ')); ?>" alt="" class="img-fluid h-100 w-100">
              </div>
              <div class="col-md-6 bg-danger d-flex align-items-center">
                <div class="card-body">                 
                  <h4 class="card-title">Bitcoin</h4>
                  <p class="card-text">One of the easiest routes to financial success is trading the bitcoin. You are sure to make money whether in a dipping market or a rising market.</p>
                  <a href="<?php echo e(url('/crypto')); ?>"><button type="button" class="btn">Read More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <div class="row g-0 h-100">
              <div class="col-md-6">
                <img src="<?php echo e(asset('temp/images/crude-oil.jpg')); ?>" alt="" class="img-fluid h-100 w-100">
              </div>
              <div class="col-md-6 bg-dark text-white d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Crude Oil</h4>
                  <p class="card-text">Crude oil trading offers excellent opportunities to profit in nearly all market conditions due to its unique standing within the world’s economic and political systems.</p>
                  <a href="#"><button type="button" class="btn text-white">Read More</button></a>                        
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <div class="row g-0 h-100">
              <div class="col-md-6">
                <img src="<?php echo e(asset('temp/images/shutterstock_112336277-825x510-1.jpg')); ?>" alt="" class="img-fluid h-100 w-100">
              </div>
              <div class="col-md-6 bg-dark text-white d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Trade Gold</h4>
                  <p class="card-text">Whether it's behaving like a bull or a bear, the gold market offers high liquidity and excellent opportunities to profit in nearly all environments due to its unique position within the world’s economic and political systems.</p>
                  <a href="<?php echo e(url('/gold')); ?>"><button type="button" class="btn text-white">Read More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <div class="row g-0 h-100">
              <div class="col-md-6">
                <img src="<?php echo e(asset('temp/images/forex.png ')); ?>" alt="" class="img-fluid h-100 w-100">
              </div>
              <div class="col-md-6 bg-danger d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Trade Forex</h4>
                  <p class="card-text">The high liquidity and ability to trade with leverage increases the popularity of Forex market. Galaxy Digitalz offers to trade on over 60 forex pairs with competitive spreads and fast execution. Join us as we take you through a profit trip in the forex market.</p>
                  <a href="#"><button type="button" class="btn">Read More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
      
    </section>

    <section class="py-5">
      <div class="conatiner-fluid bg-dark text-white px-5">
        <div class="row py-3">
          <div class="col-md-1 py-1">
            <img src="<?php echo e(asset('temp/images/icon-concept.png')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <h1>1429</h1>
            <p>Happy Customers</p>
          </div>
          <div class="col-md-1 py-1">
            <img src="<?php echo e(asset('temp/images/icon-process.png')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <h1>20+</h1>
            <p>Winning awards</p>
          </div>
          <div class="col-md-1 py-1">
            <img src="<?php echo e(asset('temp/images/icon-engineer.png')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <h1>3507</h1>
            <p>Clients Served</p>
          </div>
          <div class="col-md-1 py-1">
            <img src="<?php echo e(asset('temp/images/icon-artist.png')); ?>" alt="" class="img-fluid">
          </div>
          <div class="col">
            <h1>2100</h1>
            <p>Completed Trades</p>
          </div>
        </div>
      </div>
        <div class="container py-1">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <p class="text-danger pb-2">META 4 - 5 Trader</p> 
                    <p class="h3 pb-3">Reliable Tools</p>
                    <p>Rich And User-Friendly Interface Easily Connect To Global Markets Available For Smartphones, MacOS, Windows 10</p>
                </div>

                <div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <img src="<?php echo e(asset('temp/images/forex.png')); ?>" alt="Rounded Image" class="img-fluid ">
            </div>
            </div>
    </div>
    </section>

    <!-- Pricing -->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="text-danger">Join us and Start Trading</p> 
                    <p class="h3">Choose Your Plan</p>
                </div>
                <div class="col-md-7">
                    <p class="text-lead">Ready to get free access to the world of investing? Choose a plan and start trading with the best in the market.</p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center py-5">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-lg h-100">
                    <div class="card-header py-4 bg-dark text-light">
                      <h4 class="my-2 fw-normal">Silver Pack</h4>
                      <span class="card-title pricing-card-title pt-3 display-3">$500</span><span class="small">/w</span>                      
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4 ">
                        <li><i class="bi bi-check"></i> Access to Premium Trades</li>
                        <li><i class="bi bi-check"></i> Live Trade Bonus</li>
                        <li><i class="bi bi-check"></i> Private Wallet</li>
                        <li><i class="bi bi-check"></i> Daily Trade Bonus</li>
                      </ul>
                      <button type="button" class="btn btn-lg btn-outline-dark">Open Account</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-lg h-100">
                    <div class="card-header py-4 bg-danger text-light">
                      <h4 class="my-2 fw-normal">Diamond Pack</h4>
                      <span class="card-title pricing-card-title pt-3 display-3">$5000</span><span class="small">/w</span>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">
                        <li><i class="bi bi-check"></i> Premium Trade Deals</li>
                        <li><i class="bi bi-check"></i> Daily Trade Bonus</li>
                        <li><i class="bi bi-check"></i> Private Mentorship</li>
                        <li><i class="bi bi-check"></i> Registration Bonus</li>
                        <li><i class="bi bi-check"></i> Live Trade Bonus</li>
                      </ul>
                      <button type="button" class="btn btn-lg btn-outline-danger">Open Account</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-lg h-100">
                    <div class="card-header py-4 bg-dark text-light">
                      <h4 class="my-2 fw-normal">Gold Pack</h4>
                      <span class="card-title pricing-card-title pt-3 display-3">$1000</span><span class="small">/w</span>                      
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">                      
                        <li><i class="bi bi-check"></i> Premium Trade Deals</li>
                        <li><i class="bi bi-check"></i> Private Wallet</li>
                        <li><i class="bi bi-check"></i> Registration Bonus</li>
                        <li><i class="bi bi-check"></i> Live Trade Bonus</li>
                      </ul>
                      <button type="button" class=" btn btn-lg btn-outline-dark">Open Account</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <section>
      <div class="container text-center">
        <h4>INVESTMENT CALCULATOR</h4>
      <h3>FIND OUT HOW MUCH YOU WILL GET WITH OUR EASY-TO-USE CONVERTER</h3>
      </div>
      <div class="container-fluid py-2 bg-dark">
        <div class="row py-2">
          <div class="col py-5 px-5">
            <div class="input-group mt-3 mb-3">
              <select>
                <option value="bitcoin"
                  data-val="29134.0000000000">BTC</option>
                <option value="ethereum"
                  data-val="1852.5800000000">ETH</option>
                <option value="dogecoin"
                  data-val="0.0775740000">DOGE</option>
                <option value="usd-coin"
                  data-val="1.0000000000">USDC</option>
                <option value="tether" data-val="0.9995370000">
                  USDT</option>
              <input type="text" class="form-control" placeholder="1">
            </div>

            <div class="input-group mt-3 mb-3">
            <select>
                <option value="AFN" data-val="85.623175">AFN
                </option>
                <option value="AED" data-val="3.67303">AED
                </option>
                <option value="ALL" data-val="90.815181">ALL
                </option>
                <option value="AMD" data-val="388.951269">AMD
                </option>
                <option value="ANG" data-val="1.801123">ANG
                </option>
                <option value="AOA" data-val="826.492727">AOA
                </option>
                <option value="ARS" data-val="268.638299">ARS
                </option>
                <option value="AUD" data-val="1.486889">AUD
                </option>
                <option value="AWG" data-val="1.8025">AWG
                </option>
                <option value="AZN" data-val="1.697015">AZN
                </option>
                <option value="BAM" data-val="1.756838">BAM
                </option>
                <option value="BBD" data-val="2.017876">BBD
                </option>
                <option value="BDT" data-val="108.475185">BDT
                </option>
                <option value="BGN" data-val="1.75778">BGN
                </option>
                <option value="BHD" data-val="0.376735">BHD
                </option>
                <option value="BIF" data-val="2828.385358">BIF
                </option>
                <option value="BMD" data-val="1">BMD</option>
                <option value="BND" data-val="1.328273">BND
                </option>
                <option value="BOB" data-val="6.905906">BOB
                </option>
                <option value="BRL" data-val="4.778904">BRL
                </option>
                <option value="BSD" data-val="0.999326">BSD
                </option>
                <option value="BYN" data-val="2.522524">BYN
                </option>
                <option value="BYR" data-val="19600">BYR
                </option>
                <option value="BTC" data-val="3.3240157E-5">BTC
                </option>
                <option value="CLF" data-val="0.029705">CLF
                </option>
                <option value="BTN" data-val="81.942151">BTN
                </option>
                <option value="BZD" data-val="2.014462">BZD
                </option>
                <option value="CHF" data-val="0.866306">CHF
                </option>
                <option value="CUC" data-val="1">CUC</option>
                <option value="CAD" data-val="1.32265">CAD
                </option>
                <option value="CRC" data-val="535.908376">CRC
                </option>
                <option value="CLP" data-val="819.639763">CLP
                </option>
                <option value="DKK" data-val="6.697601">DKK
                </option>
                <option value="CUP" data-val="26.5">CUP</option>
                <option value="CNY" data-val="7.1878">CNY
                </option>
                <option value="DJF" data-val="177.938468">DJF
                </option>
                <option value="ETB" data-val="55.029329">ETB
                </option>
                <option value="DOP" data-val="56.079048">DOP
                </option>
                <option value="CVE" data-val="99.043342">CVE
                </option>
                <option value="ERN" data-val="15">ERN</option>
                <option value="GEL" data-val="2.579728">GEL
                </option>
                <option value="EUR" data-val="0.89888">EUR
                </option>
                <option value="GBP" data-val="0.77805">GBP
                </option>
                <option value="GBX" data-val="77.805">GBX
                </option>
                <option value="DZD" data-val="134.650797">DZD
                </option>
                <option value="GNF" data-val="8594.655289">GNF
                </option>
                <option value="GMD" data-val="59.699">GMD
                </option>
                <option value="GGP" data-val="0.777972">GGP
                </option>
                <option value="FJD" data-val="2.2183">FJD
                </option>
                <option value="HRK" data-val="6.723859">HRK
                </option>
                <option value="HNL" data-val="24.600943">HNL
                </option>
                <option value="GTQ" data-val="7.845497">GTQ
                </option>
                <option value="IMP" data-val="0.777972">IMP
                </option>
                <option value="GHS" data-val="11.593083">GHS
                </option>
                <option value="ILS" data-val="3.62021">ILS
                </option>
                <option value="ILA" data-val="362.021">ILA
                </option>
                <option value="HTG" data-val="136.411408">HTG
                </option>
                <option value="JEP" data-val="0.777972">JEP
                </option>
                <option value="ISK" data-val="131.509877">ISK
                </option>
                <option value="INR" data-val="81.99055">INR
                </option>
                <option value="KGS" data-val="87.86979">KGS
                </option>
                <option value="GYD" data-val="209.261172">GYD
                </option>
                <option value="KES" data-val="142.109676">KES
                </option>
                <option value="BWP" data-val="13.149787">BWP
                </option>
                <option value="JMD" data-val="154.233101">JMD
                </option>
                <option value="HUF" data-val="341.138977">HUF
                </option>
                <option value="KRW" data-val="1286.649878">KRW
                </option>
                <option value="KWD" data-val="0.30708">KWD
                </option>
                <option value="KHR" data-val="4126.656187">KHR
                </option>
                <option value="LKR" data-val="328.057489">LKR
                </option>
                <option value="LBP" data-val="15000.583876">LBP
                </option>
                <option value="IQD" data-val="1309.139906">IQD
                </option>
                <option value="CDF" data-val="2558.999854">CDF
                </option>
                <option value="KYD" data-val="0.832787">KYD
                </option>
                <option value="LYD" data-val="4.732989">LYD
                </option>
                <option value="LVL" data-val="0.60489">LVL
                </option>
                <option value="COP" data-val="3973.31">COP
                </option>
                <option value="MMK" data-val="2098.719964">MMK
                </option>
                <option value="JOD" data-val="0.709101">JOD
                </option>
                <option value="LRD" data-val="185.249539">LRD
                </option>
                <option value="MKD" data-val="55.261621">MKD
                </option>
                <option value="KMF" data-val="443.101674">KMF
                </option>
                <option value="MVR" data-val="15.350264">MVR
                </option>
                <option value="CZK" data-val="21.610404">CZK
                </option>
                <option value="MAD" data-val="9.683988">MAD
                </option>
                <option value="MUR" data-val="45.919882">MUR
                </option>
                <option value="KZT" data-val="445.461487">KZT
                </option>
                <option value="MNT" data-val="3447.859842">MNT
                </option>
                <option value="EGP" data-val="30.7986">EGP
                </option>
                <option value="MZN" data-val="63.249664">MZN
                </option>
                <option value="NAD" data-val="17.969607">NAD
                </option>
                <option value="LSL" data-val="17.970227">LSL
                </option>
                <option value="FKP" data-val="0.777972">FKP
                </option>
                <option value="MWK" data-val="1052.773411">MWK
                </option>
                <option value="NPR" data-val="131.107119">NPR
                </option>
                <option value="NZD" data-val="1.621797">NZD
                </option>
                <option value="GIP" data-val="0.777972">GIP
                </option>
                <option value="MDL" data-val="17.388727">MDL
                </option>
                <option value="NGN" data-val="792.010499">NGN
                </option>
                <option value="PHP" data-val="54.730092">PHP
                </option>
                <option value="HKD" data-val="7.817501">HKD
                </option>
                <option value="MOP" data-val="8.04653">MOP
                </option>
                <option value="OMR" data-val="0.384747">OMR
                </option>
                <option value="PGK" data-val="3.618235">PGK
                </option>
                <option value="RON" data-val="4.436296">RON
                </option>
                <option value="IDR" data-val="15025">IDR
                </option>
                <option value="PKR" data-val="286.569683">PKR
                </option>
                <option value="MXN" data-val="16.989297">MXN
                </option>
                <option value="SBD" data-val="8.354802">SBD
                </option>
                <option value="QAR" data-val="3.641029">QAR
                </option>
                <option value="NIO" data-val="36.55064">NIO
                </option>
                <option value="RSD" data-val="105.263867">RSD
                </option>
                <option value="IRR" data-val="42249.999848">IRR
                </option>
                <option value="SAR" data-val="3.75115">SAR
                </option>
                <option value="SHP" data-val="1.21675">SHP
                </option>
                <option value="SCR" data-val="13.486013">SCR
                </option>
                <option value="JPY" data-val="141.754505">JPY
                </option>
                <option value="PAB" data-val="0.999416">PAB
                </option>
                <option value="SLL" data-val="19749.999991">SLL
                </option>
                <option value="SGD" data-val="1.33121">SGD
                </option>
                <option value="SVC" data-val="8.744667">SVC
                </option>
                <option value="PLN" data-val="4.013663">PLN
                </option>
                <option value="KPW" data-val="899.956499">KPW
                </option>
                <option value="SYP" data-val="2512.531395">SYP
                </option>
                <option value="STD" data-val="20697.981008">STD
                </option>
                <option value="TMT" data-val="3.5">TMT</option>
                <option value="RUB" data-val="90.512855">RUB
                </option>
                <option value="LAK" data-val="19075.679317">LAK
                </option>
                <option value="TND" data-val="3.068498">TND
                </option>
                <option value="TJS" data-val="10.948125">TJS
                </option>
                <option value="TWD" data-val="31.337041">TWD
                </option>
                <option value="SDG" data-val="601.496925">SDG
                </option>
                <option value="LTL" data-val="2.95274">LTL
                </option>
                <option value="TZS" data-val="2443.476025">TZS
                </option>
                <option value="TTD" data-val="6.782843">TTD
                </option>
                <option value="UYU" data-val="37.987873">UYU
                </option>
                <option value="SOS" data-val="568.501443">SOS
                </option>
                <option value="USD" data-val="1.000268">USD
                </option>
                <option value="USX" data-val="100">USX</option>
                <option value="UZS" data-val="11602.964294">UZS
                </option>
                <option value="MGA" data-val="4429.373456">MGA
                </option>
                <option value="WST" data-val="2.683112">WST
                </option>
                <option value="VUV" data-val="117.040601">VUV
                </option>
                <option value="XAF" data-val="589.227038">XAF
                </option>
                <option value="MRO" data-val="356.999828">MRO
                </option>
                <option value="XDR" data-val="0.73784">XDR
                </option>
                <option value="SZL" data-val="17.993263">SZL
                </option>
                <option value="XCD" data-val="2.70255">XCD
                </option>
                <option value="TOP" data-val="2.34265">TOP
                </option>
                <option value="MYR" data-val="4.56598">MYR
                </option>
                <option value="ZMK" data-val="9001.202849">ZMK
                </option>
                <option value="UAH" data-val="36.728318">UAH
                </option>
                <option value="ZAR" data-val="17.975104">ZAR
                </option>
                <option value="ZAc" data-val="1797.5104">ZAc
                </option>
                <option value="XOF" data-val="589.227038">XOF
                </option>
                <option value="NOK" data-val="10.09273">NOK
                </option>
                <option value="VEF" data-val="2892692.735968">
                  VEF</option>
                <option value="ZMW" data-val="19.462834">ZMW
                </option>
                <option value="XAG" data-val="0.040624">XAG
                </option>
                <option value="PEN" data-val="3.584011">PEN
                </option>
                <option value="XPF" data-val="107.477042">XPF
                </option>
                <option value="PYG" data-val="7270.604087">PYG
                </option>
                <option value="ZWL" data-val="321.999592">ZWL
                </option>
                <option value="RWF" data-val="1169.548619">RWF
                </option>
                <option value="SEK" data-val="10.422702">SEK
                </option>
                <option value="SRD" data-val="38.4305">SRD
                </option>
                <option value="THB" data-val="34.415497">THB
                </option>
                <option value="TRY" data-val="26.956985">TRY
                </option>
                <option value="UGX" data-val="3638.895127">UGX
                </option>
                <option value="VND" data-val="23657.5">VND
                </option>
                <option value="XAU" data-val="0.00051">XAU
                </option>
                <option value="YER" data-val="250.349813">YER
                </option>
                <option value="SLE" data-val="20.885056">SLE
                </option>
                <option value="VES" data-val="29.050866">VES
                </option>
              </select>            
              <input type="text" class="form-control" placeholder="29,780.90">
            </div>
          </div>
          <div class="col">
            <img src="<?php echo e(asset('temp/images/devices_dpr_1.0-768x460.webp')); ?>" alt="" class="img-fluid">
          </div>
        </div>

        <div class="text-center py-5">
          <h5 class="text-white">Cryptocurrency Trade Volume</h5>
          <h3 class="text-danger">View the Market. Trade with Precise Information</h3>
        </div>

        <div class="container">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#usd">USD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#eur">EUR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#gbp">GBP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#ngn">NGN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#aud">AUD</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content text-white py-2">
            <div class="tab-pane container active" id="usd">
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/bitcoin.png')); ?>" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">$ 29,228.48 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="<?php echo e(asset('temp/images/ethereum.png')); ?>" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">$ 1,833.40 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/dogecoin.png')); ?>" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">$ 0.073585 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/USD_coin.png')); ?>" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">$ 0.999575 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="eur">
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/bitcoin.png')); ?>" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">26.558,36 € <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="<?php echo e(asset('temp/images/ethereum.png')); ?>" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">1.665,91 € <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/dogecoin.png')); ?>" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">0,066862 € <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/USD_coin.png')); ?>" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">0,908260 € <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="gbp">
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/bitcoin.png')); ?>" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">22,922.43 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="<?php echo e(asset('temp/images/ethereum.png')); ?>" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">1,437.84 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/dogecoin.png')); ?>" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">0.057709 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/USD_coin.png')); ?>" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">0.783916 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="ngn">
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/bitcoin.png')); ?>" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">22,371,044.59 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="<?php echo e(asset('temp/images/ethereum.png')); ?>" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">1,403,258.02 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/dogecoin.png')); ?>" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">56.32 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/USD_coin.png')); ?>" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">765.06 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="aud">
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/bitcoin.png')); ?>" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">44,452.82 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="<?php echo e(asset('temp/images/ethereum.png')); ?>" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">2,788.37 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/dogecoin.png')); ?>" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">0.111913 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="<?php echo e(asset('temp/images/USD_coin.png')); ?>" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">1.52 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <h3 class="text-center py-3">What Our <span class="text-danger">Customer Says</span></h3>
        <div class="row">
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <p class="card-text">I became an investor with 24bitfx and the result was good. I had a mentor that followed me up, and made trading so easy.</p>               
                  <img src="<?php echo e(asset('temp/images/testimonial2-90x90.jpg')); ?>" alt="" class="img-thumbnail rounded-circle">
                  <h6>Sarah Reuben</h6>
                  <p>Bitcoin Investor</p>           
            </div>
          </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <p class="card-text">I have consulted for several firms, and I can tell you that the guys at Bitsmit are among the best in the industry.</p>               
                  <img src="<?php echo e(asset('temp/images/testimonial1-90x90.jpg')); ?>" alt="" class="img-thumbnail rounded-circle">
                  <h6>Trendy Maxwell</h6>
                  <p>Business Intelligence Specialist</p>           
            </div>
          </div>
          </div>
          <div class="col-md">
            <div class="card">
              <div class="card-body text-center">
                <p class="card-text">One thing most people failed to realize is that you can make money everyday while sitting at the comfort of your home. This is what I do for a living.</p>               
                  <img src="<?php echo e(asset('temp/images/testimonial4-90x90.jpg')); ?>" alt="" class="img-thumbnail rounded-circle">
                  <h6>Lucy Brenda</h6>
                  <p>Forex Trader</p>           
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section>
      <div class="container-fluid pt-5 bg-dark">
        <div class="text-center text-white pt-1">
          <h3>To grow your confidence <span class="text-danger">Get started with a minimum package</span></h3>
        </div>
        <div class="text-center text-white pt-5 pb-2">
          <a href="<?php echo e(url('/login')); ?>"> <button type="button" class="btn btn-danger">Open an Account</button> </a>
        </div>
      </div>
    </section>    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/home/index.blade.php ENDPATH**/ ?>