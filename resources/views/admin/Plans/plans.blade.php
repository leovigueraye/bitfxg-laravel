
@extends('layouts.app')
    @section('content')
        @include('admin.nav')        
		<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1">System Plans</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					<div class="mb-5 row">
						<div class="mt-2 mb-3 col-lg-12">
							<a class="btn btn-primary" href="{{route('newplan')}}"><i class="fa fa-plus"></i> New plan</a>
						</div>
						@forelse ($plans as $plan)
						<div class="col-md-4 pb-4">
							<div class="card shadow h-100">            
								<div class="card-body">
								<h2>{{$plan->name}}  </h2>
								<h4 class="card-title text-center py-3">{{$settings->currency}} <span class="display-2 ">{{number_format($plan->price)}}</span></h4>                            
								<div class="pt-5">
								<div class="clearfix">
									<span class="float-start">Minimum Possible Deposit:</span>
									<span class="float-end">{{$settings->currency}}{{number_format($plan->min_price)}} </span>                
								</div>
								<div class="clearfix">
									<span class="float-start">Maximum Possible Deposit:</span>
									<span class="float-end">{{$settings->currency}}{{number_format($plan->max_price)}}</span>
								</div>
								<div class="clearfix">
									<span class="float-start">Minimum Return:</span>
									<span class="float-end">{{number_format($plan->minr)}}%</span>
								</div>
								<div class="clearfix">
									<span class="float-start">Maximum Return:</span>
									<span class="float-end">{{number_format($plan->maxr)}}%</span>
								</div>
								<div class="clearfix">
									<span class="float-start">Gift Bonus:</span>
									<span class="float-end">{{$settings->currency}}{{$plan->gift}}</span>
								</div>
								<div class="clearfix">
									<span class="float-start">Duration:</span>
									<span class="float-end">{{$settings->currency}}{{$plan->gift}}</span>
								</div>
								</div>
								
								<div class="text-center">
									<a href="{{route('editplan', $plan->id)}}" class="btn btn-primary"><i class="text-white flaticon-pencil"></i>
									</a> &nbsp; 
									<a href="{{ url('admin/dashboard/trashplan') }}/{{$plan->id}}" class="btn btn-danger"><i class="text-white fa fa-times"></i>
									</a>
								</div>          

								</div>
							</div>
							</div>
						
						@empty
						<div class="col-lg-8">
							<div class="pricing-table card purple border bg-{{$bg}} shadow p-4">
								<h4 class="text-{{$text}}">No Investment Plan at the moment, click the button above to add a plan.</h4>
							</div>
						</div>
						@endforelse
						
					</div>
				</div>
			</div>
	@endsection