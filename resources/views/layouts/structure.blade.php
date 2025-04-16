<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">

    <!-- Scripts -->
</head>

<body>
    <div id="app">


        <header>
            <div class="logo">CloudFact</div>

            <button type="button" class="btn btn-dark position-relative" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <i class='bx bxs-bell-ring'></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </button>
        </header>



        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class='bx bx-grid-alt'></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">CloudFact</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class='bx bx-user'></i>
                            <span>Perfil</span>
                        </a>
                    </li><br>

                    <li class="sidebar-item">
                        <a href="{{ route('.dashboard') }}" class="sidebar-link">
                            <i class='bx bxs-dashboard'></i>
                            <span>Panel</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class='bx bx-book-reader'></i>
                            <span>Lecturas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('.park') }}" class="sidebar-link">
                            <i class='bx bx-printer'></i>
                            <span>Parque</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class='bx bx-move-horizontal'></i>
                            <span>Movimientos</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Instalaciones</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Desinstalaciones</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class='bx bx-home-smile'></i>
                            <span>Inventario</span>
                        </a>
                    </li>


                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class='bx bx-folder-minus'></i>
                            <span>Contratos</span>
                        </a>
                    </li>


                    <br><br><br>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class='bx bx-lock-open-alt'></i>
                            <span>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </span>
                        </a>
                    </li>
                </ul>

            </aside>

            
            <!--CONETENIDO-->
            @yield('content')
            <!--CONETENIDO-->


        </div>




    </div>



    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

</body>

</html>