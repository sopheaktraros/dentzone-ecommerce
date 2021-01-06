<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')?config('app.name'):'' }} @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles & Libraries-->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admins/main.css') }}" rel="stylesheet">

    <!-- Customize Styles -->
    @stack('admin-css')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts & Libraries-->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/admins/vendor.js') }}"></script>
    <script src="{{ mix('js/admins/main.js') }}"></script>
    <!-- Customize Script -->
    @stack('admin-js')
</body>
</html>
