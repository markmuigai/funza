<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Funza --}}
    <link href="{{ asset('css/kidz.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kidz-color5.css') }}" rel="stylesheet"> 
    <style type="css">
        footer{
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- ====================================
    ——— PRELOADER
    ===================================== -->
    <div id="preloader" class="smooth-loader-wrapper">
        <div class="smooth-loader">
        <div class="loader">
            <span class="dot dot-1"></span>
            <span class="dot dot-2"></span>
            <span class="dot dot-3"></span>
            <span class="dot dot-4"></span>
        </div>
        </div>
    </div>
    <div id="app">
        @include('layouts.header')

        <main class="">
            @yield('app.content')
        </main>
    </div>
    
    {{-- Include login modal --}}
    @include('components.modals.login')

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/kidz.js') }}"></script>
    @yield('app.js')
    <script>
      $('.select2-select').select2({
            minimumResultsForSearch: -1
        });
    </script>
</body>
</html>
