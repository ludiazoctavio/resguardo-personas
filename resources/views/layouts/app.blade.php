<!doctype html>
<html class="html-custom" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Gobierno de la Ciudad de México') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/r-2.2.3/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    @yield('extra_head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- extra_head --}}
</head>
<body class="body-custom">
    @include('layouts.includes.header')
    <div id="app">
        <main class="py-4">
            <div class="row mx-lg-5 mx-0">
                <div class="col-lg-3 col-12">
                    <nav class="nav flex-column lateral-menu">
                        {{-- Menú lateral --}}
                        @if(auth()->user()->has_role(1))
                        @include('layouts.menu.superadmin')
                        @elseif(auth()->user()->has_role(2))
                        @include('layouts.menu.admin_locatel')
                        @elseif(auth()->user()->has_role(3))
                        @include('layouts.menu.sup_locatel')
                        @elseif(auth()->user()->has_role(4))
                        @include('layouts.menu.o_locatel')
                        @elseif(auth()->user()->has_role(5))
                        @include('layouts.menu.admin_dep')
                        @elseif(auth()->user()->has_role(6))
                        @include('layouts.menu.a_dep')
                        @endif
                    </nav>
                </div>
                <div class="col-lg-9 col-12">
                    {{-- content --}}
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @include('layouts.includes.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
    {{-- extra_script --}}
    @yield('extra_script')
</body>
</html>
