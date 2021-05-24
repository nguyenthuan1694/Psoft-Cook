<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PSOFT</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('backend/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('frontend/images/logos/logo_ico.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>