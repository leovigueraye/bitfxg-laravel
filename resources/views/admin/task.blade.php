
@extends('layouts.app')
    @section('content')
        @include('admin.nav')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2">
                        <h1 class="title1 text-{{$text}}">Create New Task</h1> <br> <br>
                    </div>
                    @if(Session::has('message'))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                            </div>
                        </div>
                    </div>
                    @endif
        
                    @if(count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert" >
                                <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row mb-5">
                        <div class="col-lg-8 offset-lg-2 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                            <form method="post" action="{{route('addtask')}}" enctype="multipart/form-data">
                                <div class="form-group">
                                    <h5 class=" text-{{$text}}">Task Title</h5>
                                    <input type="text" name="tasktitle" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="task title" required>
                                </div>
                                
                                <div class="form-group">
                                    <h5 class=" text-{{$text}}">Note </h5>
                                    <textarea name="note" id=""  rows="5" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="task description" required></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <h5 class=" text-{{$text}}">Task Delegations</h5>
                                    <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="delegation" required>
                                        @foreach ($admin as $user)
                                            <option value="{{$user->id}}">{{$user->firstName}} {{$user->lastName}}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-{{$text}}">Admin to assign this task to</small>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <h5 class=" text-{{$text}}">From</h5>
                                        <input type="date" name="start_date" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="First name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class=" text-{{$text}}">To</h5>
                                        <input type="date" name="end_date" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="Last name" required>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class=" text-{{$text}}">Priority</h5>
                                    <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="priority" required>
                                        <option>Immediately</option>
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{Auth('admin')->User()->id}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-primary" value="Submit"> 
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endsection