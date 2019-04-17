<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Pocket</title>

        <!-- Página Inicial -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                z-index: 999;
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
    <body class="is-preload">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastre-se</a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="wrapper">
            <header id="header">
                <div class="logo">
                    <span class="icon fa-dollar"></span>
                </div>
                <div class="content">
                    <div class="inner">
                        <h1>My Pocket</h1>
                        <p>Um sistema simples e intuitivo, criado para facilitar a gestão financeira de seu dia a dia.<br />
                        Comece agora mesmo, <a href="{{ route('register') }}">Cadastre-se</a></p>
                    </div>
                </div>
            </header>
            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; Powered by: BRUNO BELTRAME.</p>
            </footer>
        </div>
        <!-- BG -->
        <div id="bg"></div>
    </body>
</html>

