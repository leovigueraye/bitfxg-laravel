@extends('layouts.base')

@section('title', $settings->site_title)

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')

      <!-- Banner Image -->
      <section>
        <div class="container-fluid bg1">
            <div class="row">
                <div class="col-md text-light my-5">
                    <span class="text-center my-5">
                        <h1>Statistic</h1>
                        <p><a href="/" class="text-white">Home</a> > Statistic</p>
                    </span>
                </div>
            </div>
    </div>
    </section>

  <section class="py-5">
    <div class="container text-center">
      <p>Real Time Market</p>
      <h1>Statistic</h1>
      <p> 
        With the MetaTrader 4 Platform, aimed at both beginners and expert traders, we offer the best services for every need of an investor.
        Here we present you with Market Statistics, in the Cryptocurrency Market, so you can make an informed investment decision with precise accuracy.</p>
    </div>
  </section>

      <!-- Statistics Table -->
      <section class="py-5">
        <div class="container border shadow">
          <p class="pt-3">statistics</p><hr>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>COIN</th>
                  <th>PRICE</th>
                  <th>MARKETCAP</th>
                  <th>VOLUME (24H)</th>
                  <th>SUPPLY</th>
                  <th>CHANGE</th>
                  <th>LAST 24H</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

  <section class="py-5">
    <div class="container border">
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
      <div class="tab-content py-2">
        <div class="tab-pane container active" id="usd">
        <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/bitcoin.png')}}" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">$ 29,228.48 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="{{ asset('temp/images/ethereum.png')}}" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">$ 1,833.40 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/dogecoin.png')}}" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">$ 0.073585 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/USD_coin.png')}}" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">$ 0.999575 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="eur">
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/bitcoin.png')}}" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">26.558,36 € <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="{{ asset('temp/images/ethereum.png')}}" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">1.665,91 € <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/dogecoin.png')}}" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">0,066862 € <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/USD_coin.png')}}" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">0,908260 € <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="gbp">
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/bitcoin.png')}}" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">22,922.43 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="{{ asset('temp/images/ethereum.png')}}" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">1,437.84 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/dogecoin.png')}}" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">0.057709 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/USD_coin.png')}}" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">0.783916 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="ngn">
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/bitcoin.png')}}" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">22,371,044.59 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="{{ asset('temp/images/ethereum.png')}}" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">1,403,258.02 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/dogecoin.png')}}" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">56.32 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/USD_coin.png')}}" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">765.06 <span class="text-success">0.01%</span> </span>
              </div>
            </div>
            <div class="tab-pane container fade" id="aud">
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/bitcoin.png')}}" alt="" class="px-2">Bitcoin (BTC)</span>
                <span class="float-end">44,452.82 <span class="text-success">0.53%</span></span>
              </div><hr>
              <div class="clearfix">                     
                <span class="float-start"><img src="{{ asset('temp/images/ethereum.png')}}" alt="" class="px-2">Ethereum (ETH)</span>
                <span class="float-end">2,788.37 <span class="text-success">0.06%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/dogecoin.png')}}" alt="" class="px-2">Dogecoin (DOGE)</span>
                <span class="float-end">0.111913 <span class="text-danger">1.16%</span></span>
              </div><hr>
              <div class="clearfix">        
                <span class="float-start"><img src="{{ asset('temp/images/USD_coin.png')}}" alt="" class="px-2">Tether (USDT)</span>
                <span class="float-end">1.52 <span class="text-success">0.01%</span> </span>
              </div>
        </div>
      </div>
    </div>
  </section>

@endsection