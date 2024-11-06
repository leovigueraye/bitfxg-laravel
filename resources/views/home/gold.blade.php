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
                        <h1>Gold</h1>
                        <p><a href="/" class="text-white">Home</a> > Gold</p>
                    </span>
                </div>
            </div>
    </div>
    </section>

      <section>
        <div class="container text-center py-5">
          <p>Trade Commodity</p>
          <h3>Expert market insights and analysis</h3>
        </div>
        <div class="container py-5">
          <div class="row">
            <div class="col-md">
              <div class="card shadow h-100">
                <img class="card-img-top" src="{{ asset('temp/images/gold-bars.jpg')}}" alt="Card image">
                <div class="card-body">                  
                  <h4 class="card-title">A Stable Investment</h4>
                  <p class="card-text">Whether it's behaving like a bull or a bear, the gold market offers high liquidity and excellent opportunities to profit in nearly all environments due to its unique position within the world’s economic and political systems. Our expert team creates the right gold investment portfolios.</p>
                  <a href="{{url('/login')}}" class="btn btn-outline-danger w-100">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card shadow h-100">
                <img class="card-img-top" src="{{ asset('temp/images/gold-bars.jpg')}}" alt="Card image">
                <div class="card-body">                  
                  <h4 class="card-title">Why Trade Gold?</h4>                  
                  <p class="card-text">Once upon a time, trading gold was a difficult position, you had to buy and sell the metal itself. These days, you can trade gold using the Gold Exchange Traded Funds, directly on your system, or getting professionals to trade for you. You can trade gold just like stock or Forex.</p>
                  <a href="{{url('/login')}}" class="btn btn-outline-danger w-100">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card shadow h-100">
                <img class="card-img-top" src="{{ asset('temp/images/gold-bars.jpg')}}" alt="Card image">
                <div class="card-body">                  
                  <h4 class="card-title">Gold and Forex</h4>
                  <p class="card-text">Gold is effectively a currency in the forex market. It is nearly always traded against the US dollar with the code XAU/USD. Liquidity also plays an important role when trading gold on the forex market. Average daily trading volumes of gold exceed all currency pairs, excluding EUR/USD, GBP/USD, and USD/JPY.</p>
                  <a href="{{url('/login')}}" class="btn btn-outline-danger w-100">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container-fluid text-center text-white bg-dark py-5 px-5">
            <h3 class="pb-5">Discover <span class="text-danger">a Better Trading Experience</span></h3>
          <div class="row">
            <div class="col-md mb-4">
            <i class="bi bi-graph-up-arrow display-5"></i>
              <p class="pt-4 text-danger">Competitve Cost</p>
              <p>Competitive costs whatever your trading or investing style</p>
            </div>
            <div class="col-md mb-4">
            <i class="bi bi-house display-5"></i>
              <p class="pt-4 text-danger">Mentor and Support</p>
              <p>Education and personal support to help you get started</p>
            </div>
            <div class="col-md">
            <i class="bi bi-lightbulb-fill display-5"></i>
              <p class="pt-4 text-danger">Innovative Strategies</p>
              <p>Free trading strategy ideas from market experts</p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 text-center">
        <div class="container">
          <p class="pb-3 h5">Join dynamic<span class="text-danger"> bitfxg</span></p>
          <p class="pb-5">Licensed and regulated across multiple jurisdictions, we serve clients in over 150 countries worldwide.</p>
          <img src="{{ asset('temp/images/98114653-grey-map.png')}}" alt="" class="img-fluid">
        </div>
      </section>

      <section class="py-5">
        <div class="container-fluid pt-5 bg-dark">
          <div class="text-center text-white pt-1">
            <h3>Get Started By Opening a Free Account</h3>
          </div>
          <div class="text-center text-white pt-5 pb-2">
            <a href="{{url('/login')}}"><button type="button" class="btn btn-danger px-3">Open an Account <br><span class="te">Get a $50 Bonus for a Free New Account</span></button></a>
          </div>
        </div>
      </section>

@endsection