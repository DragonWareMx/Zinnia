<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('head')
</head>

<body>
    <div class="sticky">
        <nav class="uk-navbar-container main-navbar" uk-navbar="mode: click">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#">Logo</a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="nav-item">
                        <a href="#">Producciones</a>
                        {{-- <div class="uk-navbar-dropdown main-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Producciones</a></li>
                                    <li><a href="#">Coproducciones y colaboraciones</a></li>
                                </ul>
                            </div> --}}
                        <div uk-dropdown="pos: bottom-left; mode: click; offset: -17;">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Producciones</a></li>
                                <li><a href="#">Coproducciones y colaboraciones</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#">Proyectos</a>
                        <div uk-dropdown="pos: bottom-left; mode: click; offset: -17;">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-nav-header">Opciones</li>
                                <li><a href="#">Editar</a></li>
                                <li class="uk-nav-header">Acciones</li>
                                <li><a href="#">Bloquear</a></li>
                                <li><a href="#">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#">Próximos eventos</a></li>
                    <li class="nav-item"><a href="#">Quiénes somos</a></li>
                    <li class="nav-item"><a href="#">Contacto</a></li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="uk-container uk-container-large">
            @yield('content')
        </div>
    </div>
    {{-- <footer class="main-footer">
        <div class="footer-left">
            <a class="uk-navbar-item uk-logo" href="#">Logo</a>
        </div>
        <div class="footer-center">
            <a class="uk-navbar-item uk-logo" href="#">Logo</a>
        </div>
        <div class="footer-right">
            <a class="uk-navbar-item uk-logo" href="#">Logo</a>
        </div>
    </footer> --}}
    <footer class="main-footer uk-grid-colapse uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-padding-small uk-flex uk-flex-left uk-flex-middle">
                <a class="uk-logo" href="#">
                    <img src="{{ asset('img/LOGOS/LogoHorizontal.png') }}" height="75px" width="166.54px"
                        style="filter: grayscale(1) ;">
                </a>
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-center uk-flex-wrap">
                <div class="uk-width-3-5 uk-flex-between uk-flex">
                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="#"><i class="fa fa-envelope fa-2x"></i></a>
                </div>
                <div class="texto-center uk-margin-small-top">Mujeres y madres en la escena Michoacana.</div>
                <div class="texto-center  uk-margin-small-top">Copyright © 2021 Zinnia.</div>
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-middle uk-flex-right">
                <div class="texto-dragonware uk-margin-small-right uk-flex uk-flex-middle">
                    Desarrollado por DragonWare.
                    <img src="{{ asset('img/ico/dragonBlanco.png') }}" width="23px" height="16px">
                </div>
            </div>
        </div>
    </footer>

</body>

</html>