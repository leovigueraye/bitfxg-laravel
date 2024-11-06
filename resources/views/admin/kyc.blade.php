@extends('layouts.app')
    @section('content')
        @include('admin.nav')        
		<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">{{$settings->site_name}} account verification list</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					<div class="mb-5 row">
						
						<div class="col-12 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover  text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Full name</th> 
											<th>Email</th> 
											<th>KYC Status</th>
											<th>Action</th> 
										</tr> 
									</thead> 
									<tbody> 
										@foreach($users as $list)
										<tr> 
											<th scope="row">{{$list->id}}</th>
											 <td>{{$list->name}} {{$list->l_name}} </td> 
											 <td>{{$list->email}}</td> 
											 
											 <td>
												@if ($list->account_verify == 'Verified')
													<span class="badge badge-success">Verified</span>
												@else
													<span class="badge badge-danger">{{$list->account_verify}}</span>
												@endif	 
											</td> 
											 <td>
											<a href="#"  data-toggle="modal" data-target="#viewkycIModal{{$list->id}}" class="btn btn-{{$text}} btn-sm"><i class="fa fa-eye"></i> ID</a>
											<a href="#" data-toggle="modal" data-target="#viewkycPModal{{$list->id}}" class="btn btn-{{$text}} btn-sm"><i class="fa fa-eye"></i> Passport</a>
											
											<a href="#" data-toggle="modal" data-target="#action{{$list->id}}" class="btn btn-primary btn-sm">Action</a>
											 {{-- <a href="{{ url('admin/dashboard/rejectkyc') }}/{{$list->id}}" class="btn btn-danger btn-sm">Reject</a> --}}
											 </td> 
										</tr> 
										
										<div id="action{{$list->id}}" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header bg-{{$bg}}">
														<h3 class="mb-2 d-inline text-{{$text}}">Process KYC</h3>
														<button type="button" class="close text-{{$text}}" data-dismiss="modal" aria-h6="Close">
														<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body bg-{{$bg}}">
														<form action="{{route('processkyc')}}" method="post">
															@csrf
															<div class="form-group">
																<select name="action" id="" class="form-control bg-{{$bg}} text-{{$text}}" required>
																	<option value="Accept">Accept and verify user</option>
																	<option value="Reject">Reject and remain unverified</option>
																</select>
															</div>
															<div class="form-group">
																<textarea name="message" placeholder="Enter Message " class="form-control bg-{{$bg}} text-{{$text}}" required>This is to inform you that following the documents you submited, your account have been verified. You can now enjoy all our services without restrictions. Cheers!!</textarea>
															</div>
															<div class="form-group">
																<h5 class="text-{{$text}}">Email subject</h5>
																<input type="text" name="subject" id="" class="form-control bg-{{$bg}} text-{{$text}}" placeholder="Account is verified successfully" required>
															</div>
															<input type="hidden" name="user_id" value="{{$list->id}}">
															<div class="form-group">
																<button type="submit" class="btn btn-primary px-4"> Confirm </button>
															</div>
														</form>	
													</div>
												</div>
											</div>
										</div>
										<!-- /view KYC ID Modal -->

										<!-- View KYC ID Modal -->
									<div id="viewkycIModal{{$list->id}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
										
										<!-- Modal content-->
										<div class="modal-content">
										  <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
											<h4 class="modal-title text-{{$text}}">KYC verification - ID card view</h4>
											<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
										  </div>
										  <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
											<img src="{{ asset('storage/app/public/'. $list->id_card) }}" alt="ID Card" title="" class="img-fluid" />
										  </div>
										</div>
									  </div>
									</div>
									<!-- /view KYC ID Modal -->
									
									<!-- View KYC Passport Modal -->
									<div id="viewkycPModal{{$list->id}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
						
										<!-- Modal content-->
										<div class="modal-content">
										  <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}} ">
											<h4 class="modal-title text-{{$text}}">KYC verification - Passport view</h4>
											<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
										  </div>
										  <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
											<img src="{{ asset('storage/app/public/'. $list->passport) }}" alt="Passport" title="" class="img-fluid" />
										  </div>
										  </div>
										</div>
									  </div>
									</div>
									<!-- /view KYC Passport Modal -->
										@endforeach
										
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	@endsection