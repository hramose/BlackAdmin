<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ secure_asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ secure_asset('assets/img/favicon.png') }}">
    <title>
        Black Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ secure_asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ secure_asset('assets/css/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
    @include('layout.partials.sidebar')
        <div class="main-panel">
    @include('layout.partials.navbar')
            <div class="content">
                @yield('content')
            </div>
    @include('layout.partials.footer')
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ secure_asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ secure_asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ secure_asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ secure_asset('assets/js/black-dashboard.min.js?v=1.0.0') }}"></script>
</body>

</html>