
@extends('layouts.app')
    @section('content')
        @include('admin.nav')        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2">
                        <h1 class="title1 text-{{$text}}">New Members Assigned to Me </h1>
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
                   
                    <div class="row mb-5">
                        <div class="col-lg-12 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-hover text-{{$text}}">
                                    <thead> 
										<tr> 
											<th>ID</th> 
											<th>Balance</th> 
											<th>First Name</th> 
											<th>Last Name</th> 
											<th>Email</th> 
											<th>Phone</th>
											<th>Inv. plan</th>
											<th>Status</th>
                                            <th>Date registered</th> 
                                            <th>Assigned To</th>
											<th>Action</th> 
										</tr> 
                                    </thead>
                                    <tbody>
                                        @foreach ($usersAssigned as $list)
                                        <tr> 
                                            <th scope="row">{{$list->id}}</th>
											<td>${{$list->account_bal}}</td> 
											<td>{{$list->name}}</td> 
											<td>{{$list->l_name}}</td> 
											<td>{{$list->email}}</td> 
											<td>{{$list->phone_number}}</td>
											@if(isset($list->dplan->name)) 
											<td>{{$list->dplan->name}}</td>
											@else
											<td>NULL</td>
                                            @endif 
                                            <td>{{$list->status}}</td> 
                                            <td>{{\Carbon\Carbon::parse($list->created_at)->toDayDateTimeString()}}</td> 
                                            <td>{{$list->tuser->firstName}} {{$list->tuser->lastName}}</td>
                                            <td>
                                                @if ($list->cstatus =="Customer")
                                                <a class="btn btn-success btn-sm m-1">Converted</a>  
                                                @else
                                                <a href="{{ url('admin/dashboard/convert') }}/{{$list->id}}" class="btn btn-primary btn-sm m-1">Convert</a> 
                                                @endif
                                               
                                                <a class="btn btn-info btn-sm m-1" data-toggle="modal" data-target="#editModal{{$list->id}}" >Edit Status</a>
                                            </td>
                                        </tr> 

                                        <div id="editModal{{$list->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
                                                  <h4 class="modal-title">Edit this User status</h4>
                                                  <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
                                                    <form method="post" action="{{route('updateuser')}}">
                                                        <div class="form-group">
                                                            <h5 class=" text-{{$text}}">User Status</h5>
                                                            <textarea name="userupdate" id=""  rows="5" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="Enter here" required>{{$list->userupdate}}</textarea>
                                                        </div>
                                                        <input type="hidden" name="id" value="{{$list->id}}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="btn btn-primary" value="Save">
                                                            
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- /send all users email Modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection