
@extends('layouts.app')
    @section('content')
        @include('user.nav')        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="">
                <div class="page-inner">
                    <div class="mt-2 mb-5">
                        <h1 class="title1 text-{{$text}}">Account Verification</h1> <br> <br>
                    </div>
                    <x-danger-alert/>
					<x-success-alert/>
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-{{$bg}}">
                            <div class="py-3">
                                <h5 class=" text-{{$text}}">KYC verification - Upload documents below to get verified.</h5>
                            </div>
                            <form role="form" method="post" action="{{route('kycsubmit')}}"  enctype="multipart/form-data">
                                <h5 class="text-{{$text}}">Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</h5>
                                <input type="file" class="form-control bg-{{$bg}} text-{{$text}}" name="idcard" required><br>
                                <h5 class="text-{{$text}}">Passport photogragh</h5>
                                <input type="file" class="form-control bg-{{$bg}} text-{{$text}}" name="passport" required><br>
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">

                               <button type="submit" class="btn btn-{{$text}}" {{Auth::user()->account_verify == 'Verified' ? 'disabled' : ' '}}>
                                Submit documents
                               </button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
    @endsection