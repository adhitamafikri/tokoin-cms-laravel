<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('icon.ico') }}" rel="icon" type="image/png">

    <title>{{ config('app.name', 'Tokoin CMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/argon.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div id="app">
        @if (!Auth::check())
            @include ('components.header')
        @endif

        @if (!in_array(Request::segment(1), array('login', 'register', 'password')))
            @include ('components.sidebar')
        @endif

        <main class="main-content">
            @if (Auth::check())
                @include ('components.header-logged-in')
            @endif
            
            @yield('content')
        </main>
    </div>

    <!-- scripts -->
    <script src="{{ asset('js/argon.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
