
@extends('layouts.app')
    @section('content')
        @include('user.nav')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="">
				<div class="page-inner">
					<x-danger-alert/>
                    <x-success-alert/>
					<x-error-alert/>
					<div class="row profile">
                        <div class="p-2 col-md-12">
                            <div class="card p-md-5 p-1">
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a href="#per" class="nav-link active" data-bs-toggle="pill">Personal Settings</a>
									</li>
									<li class="nav-item">
										<a href="#set" class="nav-link" data-bs-toggle="pill">Withdrawal Settings</a>
									</li>
									<li class="nav-item">
										<a href="#pas" class="nav-link" data-bs-toggle="pill">Password/Security</a>
									</li>
									<li class="nav-item">
										<a href="#sec" class="nav-link" data-bs-toggle="pill">Other Settings</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane container fade show active" id="per">
										@include('profile.update-profile-information-form')
									</div>
									<div class="tab-pane container fade" id="set">
										@include('profile.update-withdrawal-method')
									</div>
									<div class="tab-pane container fade" id="pas">
										@include('profile.update-password-form')
									</div>
									<div class="tab-pane container fade" id="sec">
										@include('profile.update-security-form')
									</div>
								</div>
                            </div>
                        </div>
					</div>
				</div>	
			</div>
	@endsection