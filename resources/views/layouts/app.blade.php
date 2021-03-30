<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema BRT</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body id="bodyTheme">
    <div id="app">
        <nav id="navTheme" class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Sistema Transporte BRT
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                     
                   
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Tarifa
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('vertarifa') }}">Ver Tarifas</a></li>
                                      <li><a href="{{ route('showformtarifa') }}">Crear una Tarifa</a></li>
                                    </ul>
                            </a>
                          </li> 
                          
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Promocion
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('verpromocion') }}">Ver Promocion</a></li>
                                      <li><a href="{{ route('showformpromocion') }}">Crear una Promocion</a></li>
                                    </ul>
                            </a>
                          </li>   
                          
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Reclamos
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('verreclamo') }}">Ver mis reclamos</a></li>
                                      <li><a href="{{ route('showformreclamo') }}">Crear un nuevo reclamo</a></li>
                                    </ul>
                            </a>
                          </li>   

                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Tramos
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('vertramos') }}">Ver mis tramos</a></li>
                                      <li><a href="{{ route('showformtramos') }}">Crear un nuevo tramo</a></li>
                                    </ul>
                            </a>
                          </li>   

                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Buses
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('verbuses') }}">Ver los buses</a></li>
                                      <li><a href="{{ route('showformbuses') }}">Crear un nuevo bus</a></li>
                                    </ul>
                            </a>
                          </li>  
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Rutas
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('verrutas') }}">Ver las rutas</a></li>
                                      <li><a href="{{ route('showformrutas') }}">Crear una nueva ruta</a></li>
                                    </ul>
                            </a>
                          </li>  
                     
                        @if(Auth::user()->id_rol == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios') }}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles') }}">Roles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/reporte">Reportes</a>
                        </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <form class="d-flex" action="{{route('busqueda')}}" method="post">
                        @csrf
                      <input class="form-control me-2" type="search" placeholder="Search" id="valor" name="valor" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Busqueda</button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre ." ". Auth::user()->apellido }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="/user/perfil"
                                       onclick="event.preventDefault();
                                                     document.getElementById('perfil-form').submit();">
                                        {{ __('Peril') }}
                                    </a>
                                    <form id="perfil-form" action="/user/perfil" method="GET" class="d-none">
                                        @csrf
                                    </form>

                                    <form class="dropdown-item">
                                        <input type="button"
                                        onclick="changeSize()"
                                        value="Cambiar tamaño texto">
                                    </form>

                                    <form class="dropdown-item">
                                        <input type="button"
                                        onclick="estilo1()"
                                        value="Estilo 1">
                                    </form>

                                    <form class="dropdown-item">
                                        <input type="button"
                                        onclick="estilo2()"
                                        value="Estilo 2">
                                    </form>

                                    <form class="dropdown-item">
                                        <input type="button"
                                        onclick="estilo3()"
                                        value="Estilo 3">
                                    </form>

                                    <form class="dropdown-item">
                                        <input type="button"
                                        onclick="remover()"
                                        value="Estilo dia y noche">
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        

        <div class="container-fluid text-center">    
            <div class="row content">
              <div class="col-sm-2 sidenav">
               
              </div>
              <div class="col-sm-8 text-left"> 
                @yield("content")
              </div>
              <div class="col-sm-2 sidenav">
             
              </div>
            </div>
          </div>
          
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
</html>
