
@extends('layouts.app')
    @section('content')
        @include('admin.nav')    
		<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-{{$text}}">Manage clients deposits</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="mb-5 row">
						
						<div class="col-12 card shadow p-4 bg-{{Auth('admin')->User()->dashboard_style}}">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Client name</th>
											<th>Client email</th>
											<th>Amount</th>
											<th>Payment Method</th>
											{{-- <th>Plan</th> --}}
											<th>Status</th> 
											<th>Date created</th>
											<th>Option</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($deposits as $deposit)
										<tr> 
											<th scope="row">{{$deposit->id}}</th>
											<td>{{$deposit->duser->name}}</td>
											<td>{{$deposit->duser->email}}</td> 
											<td>{{$settings->currency}}{{number_format($deposit->amount)}}</td> 
											<td>{{$deposit->payment_mode}}</td>
											{{-- @if(isset($deposit->dplan->name)) 
											<td>{{$deposit->dplan->name}}</td>
											@else
											<td>Account funds</td>
											@endif --}}
											<td>
												@if ($deposit->status == "Processed")
													<span class="badge bg-success">{{$deposit->status}}</span>
												@else
													<span class="badge bg-danger">{{$deposit->status}}</span>
												@endif
											</td> 
											<td>{{\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()}}</td> 
											<td> 
												<a href="{{route('viewdepositimage',$deposit->id )}}" class="btn btn-{{$text}} btn-sm m-1" title="View payment screenshot">
													<i class="fa fa-eye"></i>
												</a>
												<a href="{{ url('admin/dashboard/deldeposit') }}/{{$deposit->id}}" class="m-1 btn btn-danger btn-sm">Delete</a> 

												@if($deposit->status !="Processed") 
													<a class="btn btn-primary btn-sm" href="{{ url('admin/dashboard/pdeposit')}}/{{$deposit->id}}">Process</a>
												@endif
											</td> 
										</tr> 
										@endforeach
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
	@endsection