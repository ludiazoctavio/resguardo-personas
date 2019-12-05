<!doctype html>
<html class="html-custom" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Gobierno de la Ciudad de México') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('extra_head')
</head>
<body class="body-custom">
    <div id="app">
        @include('layouts.includes.header')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.includes.footer')
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- extra_script --}}
    @yield('extra_script')
</body>
</html>
