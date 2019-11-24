<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Gobierno de la Ciudad de México') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @include('sweetalert::alert')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- extra_head --}}
    @yield('extra_head')
</head>
<body>
    <div id="app">
        @include('layouts.includes.header')
        <main class="py-4">
            <div class="row mx-0">
                <div class="col-3">
                    <nav class="nav flex-column lateral-menu">
                        {{-- Menú lateral --}}
                        @include('layouts.menu.a_dep')
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
        @include('layouts.includes.footer')
    </div>
    {{-- extra_script --}}
    @yield('extra_script')
</body>
</html>
