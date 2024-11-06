@php	
$sub_link = "https://metatraderweb.app/trade";
@endphp
@extends('layouts.app')
    @section('content')
        @include('user.nav')        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">Trading Account(s)</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					
					<div class="mb-5 row">
						<div class="col-lg-8 offset-lg-2 card bg-{{$bg}} shadow-lg p-lg-3 p-sm-5">
						<h2 class="text-{{$text}}">{{$settings->site_name}} Account manager</h2> <br>
							<div clas="well">
							<p class="text-justify text-{{$text}}">Don’t have time to trade or learn how to trade? 
							Our Account Management Service is The Best Profitable Trading Option for you, 
							We can help you to manage your account in the financial MARKET with a simple subscription model.<br>
							<small>Terms and Conditions apply</small><br>Reach us at {{$settings->contact_email}} 
							for more info.</p>
							</div>
							<br>
							<div class="py-3">
								<a class="text-white btn btn-primary" data-toggle="modal" data-target="#submitmt4modal">
									Subscribe Now
								</a>	
							</div>
							
						</div>
					</div>
					<div class="row mb-5 card shadow bg-{{$bg}} p-4 ">
						<div class="mb-3 col-12">
							<h1 class="text-{{$text}}">My Trading Accounts</h1>
						</div>
                        <div class="col-12">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="UserTable" class="table table-hover text-{{$text}}"> 
                                    <thead> 
                                        <tr> 
                                            <th>Account ID</th>
                                            <th>Account Password</th>
                                            <th>Account Type</th>
                                            <th>Currency</th>
                                            <th>Leverage</th>
                                            <th>Server</th>
                                            <th>Duration</th>
                                            <th>Submitted at</th>
                                            <th>Started at</th>
											<th>Expiring at</th>
											<th>Status</th>
                                            <th>Action</th>
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                    @forelse($subscriptions as $sub)
                                    <tr>
                                        <td>{{$sub->mt4_id}}</td>
                                            <td>{{$sub->mt4_password}}</td>
                                            <td>{{$sub->account_type}}</td>
                                            <td>{{$sub->currency}}</td>
                                            <td>{{$sub->leverage}}</td>
                                            <td>{{$sub->server}}</td>
                                            <td>{{$sub->duration}}</td>
                                            <td>{{\Carbon\Carbon::parse($sub->created_at)->toDayDateTimeString()}}</td>
                                            <td>{{\Carbon\Carbon::parse($sub->start_date)->toDayDateTimeString()}}</td>
											<td>
												@if (!empty($sub->end_date))
													{{\Carbon\Carbon::parse($sub->end_date)->toDayDateTimeString()}}
												@else
													Not Started yet
												@endif
											</td>
											<td>{{$sub->status}}</td>
                                            <td>
												@if ($sub->status == "Pending")
												<a href="{{ url('dashboard/delsubtrade') }}/{{$sub->id}}" class="btn btn-danger btn-sm">Delete</a>	
												@else
												<a href="#" data-toggle="modal" class="btn btn-danger btn-sm" onclick="deletemt4()">Delete</a>
												@endif
                                            </td>
                                    	</tr>
									@empty
										<tr>
											<td colspan="13" class="text-center">
												No data available
											</td>
										</tr>
                                    @endforelse
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-12">
							<h3 class="text-{{$text}}">Connect to your trading account to monitor activities on your trading account(s).</h3>
							<iframe src="{{$sub_link}}" name="WebTrader" title="{{$title}}" frameborder="0" style="display: block; border: none; height: 76vh; width: 80vw;"></iframe>
						</div>
					</div>
					<!-- end of chart -->
				</div>	
			</div>
			@include('user.modals')
			
			<script type="text/javascript">
				function deletemt4(){
					swal({
						title: "Error!",
						text: "Your subscription has already started, send an Email to {{$settings->contact_email}} to have your MT4 Details Deleted.",
						icon: "error",
						buttons: {
							confirm: {
								text: "Okay",
								value: true,
								visible: true,
								className: "btn btn-danger",
								closeModal: true
							}
						}
					});
				}
			</script>
	@endsection