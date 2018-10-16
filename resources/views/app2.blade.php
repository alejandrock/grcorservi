<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Corservi</title>

        <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/assets/fonts/css/fontawesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="https://use.fontawesome.com/66afc307ac.js"></script>

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="">
                            <figure id="logoCorservi">
                                 <img src="{{ asset('assets/img/logoNav.png') }}" alt="Logo">
                            </figure>
                            
                        </a>
                    </div>


                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())

                                <li><a href="{{ url('register') }}">Registro</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->username }}
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{'afiliacion'}}">
                                                Afiliaciones
                                            </a>
                                            <a href="{{'home'}}">
                                                Escritorio
                                            </a>
                                            <a href="{{'incapacidad' }}">
                                                Incapacidades
                                            </a>

                                            <a href="#">
                                                Mi Perfil
                                            </a>


                                            <a href="#"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Cerrar Sesión
                                            </a>

                                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

        @yield('content')
    </div>
        <!-- Scripts -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>

    </body>
    </html>
