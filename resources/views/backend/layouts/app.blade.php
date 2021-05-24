<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- vector map CSS -->
    <link href="{{ asset('backend/vendors/vectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{ asset('backend/vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('backend/vendors/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

    <!-- Toastr CSS -->
    <link href="{{ asset('backend/vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    @yield('css')

    <!-- Custom CSS -->
    <link href="{{ asset('backend/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        @include('backend.layouts.top_nav')
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        @include('backend.layouts.vertical_nav')
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        @include('backend.layouts.setting_panel')
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            @yield('content')

            <!-- Footer -->
            @include('backend.layouts.footer')
            <!-- /Main Content -->
        </div>
        <!-- /Main Content -->
    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('backend/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('backend/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('backend/dist/js/feather.min.js') }}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('backend/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/toggle-data.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('backend/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/morris.js/morris.min.js') }}"></script>

    <!-- Counter Animation JavaScript -->
    <script src="{{ asset('backend/vendors/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- EChartJS JavaScript -->
    <script src="{{ asset('backend/vendors/echarts/dist/echarts-en.min.js') }}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{ asset('backend/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Vector Maps JavaScript -->
    <script src="{{ asset('backend/vendors/vectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/dist/js/vectormap-data.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('backend/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('backend/vendors/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('backend/dist/js/init.js') }}"></script>
{{--    <script src="{{ asset('backend/dist/js/dashboard-data.js') }}"></script>--}}

    @include('backend.includes.notifications')

    @yield('script')
</body>
</html>
