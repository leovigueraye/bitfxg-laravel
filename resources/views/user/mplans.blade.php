
@extends('layouts.app')
    @section('content')
        @include('user.nav')        
		<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">Available packages</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					<div class="mb-5 row">
						@forelse ($plans as $plan)
						<div class="col-lg-4">
							<div class="pricing-table card purple border bg-{{$bg}} shadow p-4">
								<!-- Table Head -->
								{{-- <div class="pricing-label d-inline">Plan name</div> --}}
								<h2 class="text-{{$text}}">{{$plan->name}}</h2>
								<!-- Price -->
								<div class="price-tag">
									<span class="symbol text-{{$text}}">{{$settings->currency}}</span>
									<span class="amount text-{{$text}}">{{number_format($plan->price)}}</span>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									<div class="feature text-{{$text}}">Minimum Possible Deposit:<span class="text-{{$text}}">{{$settings->currency}}{{number_format($plan->min_price)}}</span></div>
									<div class="feature text-{{$text}}">Maximum Possible Deposit:<span  class="text-{{$text}}">{{$settings->currency}}{{number_format($plan->max_price)}}</span></div>
									<div class="feature text-{{$text}}">Minimum Return:<span class="text-{{$text}}">{{$settings->currency}}{{number_format($plan->minr)}}</span></div>
									<div class="feature text-{{$text}}">Maximum Return:<span class="text-{{$text}}">{{$settings->currency}}{{number_format($plan->maxr)}}</span></div>
									<div class="feature text-{{$text}}">Gift Bonus:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->gift}}</span></div>
									<div class="feature text-{{$text}}">Duration:<span class="text-{{$text}}">{{$plan->expiration}}</span></div>
								</div> 
								@if (!$uplan)
									<!-- Button -->
									<div class="">
										<form method="post" action="{{route('joinplan')}}">
											<h5 class="text-{{$text}}">Amount to invest: ({{$settings->currency}}{{number_format($plan->price)}} default)</h5>
											<input type="number" min="{{$plan->min_price}}" max="{{$plan->max_price}}" name="iamount" placeholder="{{$settings->currency.$plan->price}}" class="form-control text-{{$text}} bg-{{$bg}}"> <br>
											<input type="hidden" name="duration" value="{{$plan->expiration}}">
											<input type="hidden" name="id" value="{{ $plan->id }}">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="submit" class="btn btn-block pricing-action btn-primary" value="Join plan" >
										</form>
									</div>
								@else
								<button class="btn btn-block pricing-action btn-primary" disabled>Join Plan</button>
								@endif
								
							</div>
						</div>
						@empty
						<div class="col-lg-12">
							<div class="pricing-table card purple border bg-{{$bg}} p-4 text-center">
								<h4 class="text-{{$text}}">No Investment Plan at the moment.</h4>
							</div>
						</div>
						@endforelse
					</div>
				</div>	
			</div>
    @endsection