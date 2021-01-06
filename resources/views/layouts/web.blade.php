<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')?config('app.name'):'' }} @yield('title')</title>

    <!-- Scripts & Libraries-->
    <script src="{{ mix('js/app.js') }}"></script>
{{--    <script src="{{ mix('js/websites/vendor.js') }}" defer></script>--}}
{{--    <script src="{{ mix('js/websites/main.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles & Libraries-->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/websites/theme.css') }}" rel="stylesheet">
    <link href="{{ mix('css/websites/customize.css') }}" rel="stylesheet">


    <!-- Customize Styles -->
    @stack('websites-css')
</head>
<body>
@include('websites.partials.header')

@yield('content')

@include('websites.partials.footer')
   <script src="{{ mix('js/websites/vendor.js') }}" defer></script>
    {{-- <script src="{{ mix('js/websites/main.js') }}" defer></script> --}}
<!-- Customize Script -->
@stack('websites-js')


</body>
</html>
