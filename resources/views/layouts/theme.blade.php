<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php /*=====csrf_token====*/@endphp
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')?config('app.name'):'' }} -@yield('title')</title>

    <link rel="shortcut icon" href="{{ url('favicon.png') }}">

    <link href="{{ mix('assets/themes/ecam_theme/css/ecam.theme.css') }}" rel="stylesheet">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admins/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admins/main.css') }}" rel="stylesheet">

    @stack('admin-css')
</head>
<body class="{{ config('ecamtheme.theme.name') }}" data-mode="{{ config('ecamtheme.theme.mode.skin') }}" id="ecam">
    <div class="{{ config('ecamtheme.theme.layout.body.class_name')  }}">
        @include('admins.partials.header')

        @include('admins.partials.sidebar')

        <main class="main-page">
            <div class="@yield('page-name-class')">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h5>@yield('title')</h5>
                            @yield('breadcrumbs')
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/admins/vendor.js') }}"></script>
    <script src="{{ mix('assets/themes/ecam_theme/js/ecam.js') }}"></script>
    <script src="{{ mix('js/admins/main.js') }}"></script>

    @include('admins.partials.toast')

    @stack('admin-js')
</body>
</html>
