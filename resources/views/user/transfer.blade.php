
@extends('layouts.app')
@section('styles')
    @parent
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

    @section('content')
        @include('user.nav')        
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
                    <div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">Transfer</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="row profile">
                        <div class="p-2 col-md-12">
                            <div class="card p-md-5 p-1 pb-md-0 pb-3 shadow-lg bg-{{$bg}}">
                                <div class="row">
                                    <div class="mb-3 col-md-4 offset-md-4">
                                        <div class="p-3 card bg-{{$bg}} shadow">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3 stamp stamp-md bg-success">
                                                    <i class="fa fa-dollar-sign"></i>
                                                </span>
                                                <div>
                                                    <h5 class="mb-1 text-{{$text}} d-inlne"><b>{{$settings->currency}}{{ number_format(Auth::user()->account_bal, 2, '.', ',')}}</b></h5>
                                                    <small class="text-muted">Your Account Balance</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-md-2">
                                        <form method="post" action="javascript:void(0)" id="transferform">
                                            @csrf
                                            <div class="form-group">
                                                <h5 for="" class="text-{{$text}}">Recipient Email or username <span class=" text-danger">*</span></h5>
                                                <input type="text" name="email" class="form-control text-{{$text}} bg-{{$bg}}" required>
                                            </div>
                                            <div class="form-group">
                                                <h5 for="" class="text-{{$text}}">Amount<span class=" text-danger">*</span></h5>
                                                <input type="number" min="{{$moresettings->min_transfer}}" name="amount" placeholder="Enter amount you want to transfer to recipient" class="form-control text-{{$text}} bg-{{$bg}}" required>
                                            </div>
                                            <div class="form-group">
                                                <h4  class="text-{{$text}}">Transfer Charges: <strong class=" text-danger">{{$moresettings->transfer_charges}}%</strong></h4>
                                            </div>
                                            <input type="hidden" name="password" id="acntpass">
                                            <div class="">
                                                <input type="submit" id="subbtn" class="py-2 btn btn-primary btn-block" value="Proceed">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>	
			</div>
@endsection

@section('scripts')
    @parent
    <script>
        
       $('#transferform').on('submit', function() {
            (async () => {

                const { value: password } = await Swal.fire({
                    title: 'Input your password',
                    input: 'password',
                    inputLabel: 'Enter your account password to complete transfer',
                    inputPlaceholder: 'Enter your account password'
                })

                if (password) {

                    document.getElementById('acntpass').value = password;
                    $("#subbtn").attr( "disabled", "disabled" ).val('Please wait....');
                    $.ajax({
                        url: "{{route('transfertouser')}}",
                        type: 'POST',
                        data: $('#transferform').serialize(),
                        success: function(response) {
                            if (response.status === 200) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: response.message,
                                    icon: 'success',
                                    confirmButtonText: 'Cool'
                                });
                                $("#subbtn").removeAttr( "disabled").val('Proceed');
                                setTimeout(() => {
                                    let url = "{{url('/dashboard/transfer-funds')}}";
			                        window.location.href = url;
                                }, 3000);
                            } else {
                                $("#subbtn").removeAttr( "disabled").val('Proceed');
                                Swal.fire({
                                    title: 'Error!',
                                    text: response.message,
                                    icon: 'error',
                                });
                            }
                        },
                        error: function(error) {
                            console.log(error);
                        },

                    });
                }else{
                    Swal.fire({
                        title: 'Error!',
                        text: 'Password is required',
                        icon: 'error',
                        confirmButtonText: 'Alright'
                    })
                }

            })()

        });
    </script>
    
@endsection