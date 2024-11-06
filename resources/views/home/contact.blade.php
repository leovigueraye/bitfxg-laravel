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

    <section>
      <div class="container py-5">
        <h1 class="px-4">Get in Touch</h1>
        <div class="row pt-4">
          <div class="col-md-8 px-5">
            <form>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Your Name" name="email">
                </div>
                <div class="col">
                  <input type="email" class="form-control" placeholder="Email ID" name="pswd">
                </div>
              </div>
            </form>

            <form>
              <div class="row py-5">
                <div class="col">
                  <input type="tel" class="form-control" placeholder="Phone No." name="tel">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
              </div>

              <textarea class="form-control" rows="5" id="comment" placeholder="Your Message" name="text"></textarea>

              <div class="py-5">
                <button type="button" class="btn btn-danger">Send Message</button>
              </div>
            </form>
          </div>
          <div class="col-md-4 bg-dark text-white py-5">
            <div class="d-flex py-2">
              <div class="rounded-circle bg-danger w-25 h-25">
                <img src="{{ asset('temp/images/icon-placeholder.png')}}" alt="" class="w-100 h-100">
              </div>
              <div class="px-3">
                <p>Our Location</p>
              <p>Apo Resettlement,</p>
              <p>Apo, FCT Abuja,</p>
              </div>              
            </div>
            <div class="d-flex py-2">
              <div class="rounded-circle bg-warning w-25 h-25">
                <img src="{{ asset('temp/images/icon-phone-call.png')}}" alt="" class="w-100 h-100">
              </div>
              <div class="px-3">
                <p>Call Us Today</p>
                <p>Tel.: +234 808 357 07468</p>
              </div>  
            </div>
            <div class="d-flex py-2">
              <div class="rounded-circle bg-primary w-25 h-25">
                <img src="{{ asset('temp/images/icon-message.png')}}" alt="" class="w-100 h-100">
              </div>     
              <div class="px-3">
                <p>Email Us Now</p>
                <p>eguriasel98@yahoo.com,</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection