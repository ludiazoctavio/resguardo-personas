<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="container">
            <div class="row d-flex justify-content-lg-between mx-0">
                <div class="imagen-encabezado">
                    <a href="https://ru.soluint.com/adip-regeneracion-urbana/public">
                        <img src="https://ru.soluint.com/adip-regeneracion-urbana/public/src/img/logo-header.svg" alt="Gobierno de la Ciudad de México">
                    </a>
                </div>
            </div>
        </header>
        <div class="pleca" id="pleca">
            <div class="container">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    
                    </li>
                    <li class="nav-item">
                    
                    </li>
                    <li class="nav-item">
                    
                    </li>
                </ul>
            </div>
        </div>
        <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>-->

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-3 col-md-7 col-9">
                    <img src="https://ru.soluint.com/adip-regeneracion-urbana/public/src/img/gobierno-y-adip.svg">
                </div>
                <div class="col-lg-6 col-10 text-center text-lg-left mt-3 mt-lg-0">
                    <p>Plataforma de registro de personas bajo el resguardo del Gobierno de la Ciudad de México</p>
                    <p class="font-weight-bold">Diseñado y operado por la Agencia Digital de Innovación Pública</p>
                </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
