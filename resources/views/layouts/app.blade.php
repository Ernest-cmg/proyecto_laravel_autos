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
    <script src="{{ asset('js/scripts/crearAuto.js') }}" defer></script>
    <script src="{{ asset('js/scripts/register.js') }}" defer></script>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleApp.css') }}" rel="stylesheet">

    <link href="{{ asset('css/autos/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/autos/crearAuto.css')}}" rel="stylesheet">
    <link href="{{ asset('css/autos/edit.css')}}" rel="stylesheet">
    <link href="{{ asset('css/register.css')}}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <div class="logo">
                    <img src="images/logo/logo.png">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="{{ url('/') }}"><i class="fas fa-house-damage"></i> INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/autos') }}"><i class="fas fa-car"></i> AUTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/contacto') }}"><i class="fas fa-address-book"></i> CONTACTO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('REGISTRASE') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/') }}"><i class="fas fa-house-damage"></i>  INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/autos') }}"><i class="fas fa-car"></i> AUTOS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-archive"></i>
                                    INVENTARIO
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="{{url('/users')}}"><i class="fas fa-align-justify"></i> Mis publicaciones</a>
                                    <a class="dropdown-item " href="{{url('/autos/create')}}"><i class="fas fa-plus"></i> Agregar Publicación</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/contacto') }}"><i class="fas fa-address-book"></i> CONTACTO</a>
                            </li>



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown " class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="images/{{ Auth::user()->avatar}}" style="width: 40px;height: 40px; border-radius: 50%; margin-left: 20px;"> {{ Auth::user()->name }} <span class="caret"></span></a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{route('users.edit', Auth::user()->id)}}"><i class="fas fa-user-circle"></i> Mi perfil</a>
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="far fa-times-circle"></i> {{ __('Cerrar Sección') }}
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
        </nav>

        <main class="">
            @yield('content')
        </main>





    </div>



</body>
</html>
