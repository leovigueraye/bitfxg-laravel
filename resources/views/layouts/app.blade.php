
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="{{ asset('dash/js/color-modes.js') }} "></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ovigue Eguriase, php and python developer">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->site_name }} | {{ $title }}</title>
    <link rel="icon" href="{{ asset('storage/app/public/' . $settings->favicon) }}" type="image/png" />

    

    @section('styles')
        <!-- Fonts and icons -->
        <script src="{{ asset('dash/js/plugin/webfont/webfont.min.js') }}"></script>
        <!-- Sweet Alert -->
        <script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js') }} "></script>
        <!-- CSS Files -->
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="{{ asset('dash/css/bootstrap.min.css') }}">        
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

                <!-- Bootstrap Notify -->
                <script src="{{ asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }} "></script>
        <script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js') }} "></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>

    @show
    @livewireStyles

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      
      .callback-button {
    position: fixed;
    bottom: 60px;
    right: 60px;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    z-index: 999;
}

/* Popup Style */
.callback-popup {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    z-index: 1000;
}

.callback-popup h3 {
    margin-top: 0;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('dash/css/dashboard.css') }}">
  </head>
  <body>
  @yield('content')

  
  <script>
    $(document).ready(function() {
            $('#welcomeModal').modal('show');
        });
  </script>

    

    @livewireScripts
    @section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="{{ asset('dash/js/dashboard.js') }} "></script>
    <script src="{{ asset('dash/js/core/bootstrap.bundle.js') }} "></script>
        <!--   Core JS Files   -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- {{-- <script src="{{ asset('dash/js/core/jquery.3.2.1.min.js')}} "></script> --}} -->
        <!-- <script src="{{ asset('dash/js/core/popper.min.js') }}"></script> -->
        <!-- <script src="{{ asset('dash/js/core/bootstrap.min.js') }} "></script> -->
        <!-- jQuery UI -->
        <!-- <script src="{{ asset('dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script> -->
        <!-- <script src="{{ asset('dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script> -->
        <!-- jQuery Scrollbar -->
        <script src="{{ asset('dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }} "></script>
        <!-- jQuery Sparkline -->
        <script src="{{ asset('dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }} "></script>
        <!-- Sweet Alert -->
        <script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js') }} "></script>
        <!-- Bootstrap Notify -->
        <script src="{{ asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }} "></script>

        <script type="text/javascript"
                src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
        </script>

        <script src="{{ asset('dash/js/atlantis.min.js') }}"></script>
        <script src="{{ asset('dash/js/atlantis.js') }}"></script>
        
  

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
        <script src="{{ asset('dash/js/customs.js') }}"></script>
		<script>
			$(document).ready(function() {
				$(".dataTables_length select").addClass("bg-{{$bg}} text-{{$text}}");
				$(".dataTables_filter input").addClass("bg-{{$bg}} text-{{$text}}");
				$(".dataTables_length select").addClass("bg-{{$bg}} text-{{$text}}");
    			$(".dataTables_filter input").addClass("bg-{{$bg}} text-{{$text}}");
			});
		</script>
    @show
  </body>
</html>