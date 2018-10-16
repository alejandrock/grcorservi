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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    </head>

    <body>

        <div id="app">

            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="">
                            <figure id="logoCorservi">
                                 <img src="{{ asset('assets/img/logoNav.png') }}" alt="Logo">
                            </figure>
                            
                        </a>
                    </div>

                    @if(Auth::check())

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->username }}

                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{'home'}}">Escritorio</a>
                                            <a href="#"> Mí Perfil</a>
                                            <a href="{{'logout'}}">Cerrar Sesión</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endif 
                    
                </div>


           </nav>

         @if(Auth::check())
 

            <div class="row justify-content-md-left">
                <div class="col-md-1">
                    <nav class="navbar-default navbar-static-side" id="menu_principal" role="navigation">
                        <div class="sidebar-collapse">

                            <button class="btn btn-default hidden-xs con-tooltip" title="" type="button" id="barra_menu" value="0" data-original-title="Ver/Esconder Menú" style="left: 250px;"><i class="fa fa-angle-double-left"></i></button> 
                    
                            <ul class="nav" id="side-menu">

                                <li>
                                    <figure id="logo-login" class="hidden-xs"><img src="{{ asset('assets/img/logo.png') }}" alt="Grupo Corservi"></figure>

                                    <a href="#">Inicio</span></a>

                                    <ul class="nav nav-second-level">

                                        <li><a href="{{'afiliacion'}}"><i class="fa fa-dashboard"></i> Afiliación</a></li>

                                    </ul>


                                    <ul class="nav nav-second-level">
                                        <li><a href="{{'empleados'}}"><i class= "fa fa-newspaper-o"></i> Empleados</a></li>
                                    </ul>   


                                    <ul class="nav nav-second-level">
                                        <li><a href="{{'incapacidad'}}"><i class= "fa fa-newspaper-o"></i> Incapacidad</a></li>
                                    </ul>    


                                    <ul class="nav nav-second-level">
                                        <li><a href="{{'usuarios'}}"><i class= "fa fa-newspaper-o"></i> Usuarios</a></li>
                                    </ul>  
                                

                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        
        </div>

         @endif


        @yield('content')


        <!-- Scripts -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    <script src="{{ asset('/assets/js/layout.js') }}"></script>
    <script src="{{ asset('/assets/js/test.js') }}"></script>




    </body>
    </html>
