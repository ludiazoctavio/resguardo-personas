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
    {{-- extra_head --}}
    @yield('extra_head')
</head>
<body class="body-custom">
    @include('layouts.includes.header')
    <div id="app">
        <main class="py-4">
            <div class="row mx-0">
                <div class="col-3">
                    <nav class="nav flex-column lateral-menu">
                        {{-- Menú lateral --}}
                        {{auth()->user()->has_role(config('Superadmin'))}}
                        @if(auth()->user()->has_role(1))
                        @include('layouts.menu.superadmin')
                        @endif
                    </nav>
                </div>
                <div class="col-9">
                    <div class="container">
                    {{-- content --}}
                    @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('layouts.includes.footer')
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- extra_script --}}
    @yield('extra_script')
</body>
</html>
