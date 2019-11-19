<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plataforma de registro de personas bajo el resguardo del Gobierno de la Ciudad de México</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header class="container">
            <div class="row d-flex justify-content-lg-between mx-0">
                <div class="imagen-encabezado">
                    <a href="https://ru.soluint.com/adip-regeneracion-urbana/public">
                        <img src="https://ru.soluint.com/adip-regeneracion-urbana/public/src/img/logo-header.svg" alt="Gobierno de la Ciudad de México">
                    </a>
                </div>
            </div>
        </header>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Personas
                </div>
            </div>
        </div>
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
    </body>
</html>
