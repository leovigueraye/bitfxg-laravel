
<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="{{ $bgmenu }}">
        <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            {{ $settings->site_name }}
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="{{ $bgmenu }}">

        <div class="container-fluid">
            <div class="text-center d-md-block d-none">
                <a href="{{ route('deposits') }}" class="pricing-action btn btn-warning btn-sm">Fund your Account</a>
                &nbsp;
                <a href="{{ route('withdrawalsdeposits') }}" class="pricing-action btn btn-danger btn-sm">Withdraw
                    Funds</a>
                {{-- <a href="{{route('withdrawalsdeposits')}}" class="rounded btn btn-info btn-sm">Buy a Plan</a> --}}
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <li class="nav-item hidden-caret">
                    <form action="javascript:void(0)" method="post" id="styleform" class="form-inline">

                        <div class="form-group">
                            <label class="style_switch">
                                <input name="style" id="style" type="checkbox" value="true" class="modes">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        @if (Auth::user()->dashboard_style == 'dark')
                            <script>
                                document.getElementById("style").checked = true;
                            </script>
                        @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </li>
                @if ($settings->google_translate == 'on')
                    <li class="nav-item hidden-caret">
                        <div id="google_translate_element"></div>
                    </li>
                @endif

                @if ($settings->enable_kyc == 'yes')
                    <li class="nav-item dropdown hidden-caret">
                        @if (Auth::user()->account_verify == 'Verified')
                            <a class="nav-link text-success" href="#">
                                <i class="fas fa-user-check"></i>
                                <strong style="font-size:8px;">Verified</strong>
                            </a>
                        @else
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                                <strong style="font-size:8px;">KYC</strong>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="m-0 row">
                                            @if (Auth::user()->account_verify == 'Under review')
                                                Your Submission is under review
                                            @else
                                                <a href="{{ route('account.verify') }}" class="btn btn-success btn-sm">Verify
                                                Account </a>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </li>
                @endif
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p><a
                                            href="{{ route('profile') }}"
                                            class="btn btn-xs btn-secondary btn-sm">Account Settings</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('dashboard/deposits') }}">Deposit</a>
                                <a class="dropdown-item" href="{{ url('dashboard/withdrawals') }}">Withdraw</a>
                                <a class="dropdown-item" href="{{ url('dashboard/buy-plan') }}">Buy Plan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<script type="text/javascript">
    //create investment
    $("#styleform").on('change', function() {
        $.ajax({
            url: "{{ url('/dashboard/changetheme') }}",
            type: 'POST',
            data: $("#styleform").serialize(),
            success: function(data) {
                location.reload(true);
            },
            error: function(data) {
                console.log(data);
            },

        });
    });
</script>
