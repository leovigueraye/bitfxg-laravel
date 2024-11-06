
@extends('layouts.app')
    @section('content')
        @include('admin.nav')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h1 class="title1 text-{{$text}}">Trading Accounts</h1>
                        <p class="text-{{$text}}">
                            Manage trading accounts submitted by users. Collect their submitted details and connect to your master trading account
                        </p>
                    </div>
                    <x-danger-alert/>
					<x-success-alert/>
                   
                    <div class="mb-5 row">
                        <div class="col p-4 card shadow bg-{{Auth('admin')->User()->dashboard_style}}">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-hover text-{{$text}}"> 
                                    <thead> 
                                        <tr> 
                                            <th>USER</th>
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
                                    @foreach($subscriptions as $sub)
                                    <tr>
                                        <td>{{$sub->tuser->name}} {{$sub->tuser->l_name}}</td>
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
												<a href="{{ url('admin/dashboard/confirmsub') }}/{{$sub->id}}" class="mb-2 btn btn-primary btn-sm">Process</a>	
												@else
												<a class="mb-2 btn btn-success btn-sm">Active</a>
                                                @endif
                                                <a href="{{ url('admin/dashboard/delsub') }}/{{$sub->id}}" class="btn btn-danger btn-sm">Delete</a>
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