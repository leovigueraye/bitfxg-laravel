
@extends('layouts.app')
    @section('content')
        @include('admin.nav')        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2 mb-5">
                        <h1 class="title1 d-inline text-{{$text}}">View Deposit Screenshot</h1>
                        <div class="d-inline">
                            <div class="float-right btn-group">
                                <a class="btn btn-primary btn-sm" href="{{route('mdeposits')}}"> <i class="fa fa-arrow-left"></i> back</a>
                            </div>
                        </div>
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 bg-{{$bg}} shadow">
                             <img src="{{ asset('storage/app/public/'. $deposit->proof) }}" alt="Proof of Payment" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
    @endsection