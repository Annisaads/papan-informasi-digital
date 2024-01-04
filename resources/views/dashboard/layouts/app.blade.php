<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Semen Baturaja Tbk</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboard/assets/images/logos/logo-ptsb-kecil.png') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('dashboard.partials.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('dashboard.partials.header')
            <!--  Header End -->

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/dashboard.js') }}"></script>
</body>

</html>
