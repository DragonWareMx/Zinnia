<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/LOGOS/nombresolo.jpg') }}">
    <title>ZINNIA - Inicio</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    {{-- linea para que salga miniatura de sitio al compartirlo --}}
    <link rel="image_src" href="{{ asset ('img/LOGOS/logocolor_only.png')}}" /> 

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
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/menu.js') }}"></script>

    
</head>

<body style="background-color: black">

        <!-- ***** Preloader Start ***** -->
        <style>
            /* 
    ---------------------------------------------
    preloader
    --------------------------------------------- 
    */
            #preloader {
            overflow: hidden;
            background-image: linear-gradient(145deg, #000000 0%, #181818 100%);
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: fixed;
            z-index: 9999;
            color: #fff;
            }

            #preloader .jumper {
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            display: block;
            position: absolute;
            margin: auto;
            width: 50px;
            height: 50px;
            }

            #preloader .jumper > div {
            background-color: #fff;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            position: absolute;
            opacity: 0;
            width: 50px;
            height: 50px;
            -webkit-animation: jumper 1s 0s linear infinite;
            animation: jumper 1s 0s linear infinite;
            }

            #preloader .jumper > div:nth-child(2) {
            -webkit-animation-delay: 0.33333s;
            animation-delay: 0.33333s;
            }

            #preloader .jumper > div:nth-child(3) {
            -webkit-animation-delay: 0.66666s;
            animation-delay: 0.66666s;
            }

            @-webkit-keyframes jumper {
            0% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            5% {
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0;
            }
            }

            @keyframes jumper {
            0% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            5% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
            }
            </style>
            <script>
            // Page loading animation
            $(window).on('load', function () {
            if ($('.cover').length) {
                $('.cover').parallax({
                    imageSrc: $('.cover').data('image'),
                    zIndex: '1'
                });
            }

            $("#preloader").animate({
                'opacity': '0'
            }, 600, function () {
                setTimeout(function () {
                    $("#preloader").css("visibility", "hidden").fadeOut();
                }, 300);
            });
            });
            </script>
            <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
            </div>

    <!-- ***** Preloader End ***** -->


    <div class="container uk-padding-remove">
        <video autoplay="autoplay" loop="loop" class="video_fondo" preload="auto" muted>
            <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
        </video>
        <div class="uk-width-1-1 uk-text-center uk-position-absolute img-logo-blanco" style="margin-top:-550px">
            <img src="{{asset('img/LOGOS/logoblanco.png')}}"  style="width:25%; max-width:333px; max-height:466px">  
        </div>
    </div>
    <div class="sticky">
        <nav class="uk-navbar-container main-navbar menu-desktop" uk-navbar="mode: click" style="background-color:transparent !important; border:0px !important;" >
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li class="nav-item nav-item-white" >
                        <a href="#">Producciones</a>
                        <div uk-dropdown="pos: bottom-left; mode: click; offset: -17;" style="background-color:black !important">
                            <ul class="uk-nav uk-navbar-dropdown-nav" style="background-color:black !important">
                                <li><a href="{{ route('producciones') }}" >Producciones</a></li>
                                <li><a href="{{ route('coproducciones') }}" >Coproducciones y colaboraciones</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-item-white">
                        <a href="{{ route('proyectos') }}">Proyectos</a>
                    </li>
                    <li class="nav-item nav-item-white"><a href="{{route('eventos')}}">Próximos eventos</a></li>
                    <li class="nav-item nav-item-white"><a href="{{route('quienes-somos')}}">Quiénes somos</a></li>
                    <li class="nav-item nav-item-white"><a href="{{route('contacto')}}">Contacto</a></li>

                </ul>
            </div>
        </nav>
        <nav class="uk-navbar-container main-navbar menu-phone" uk-navbar="mode: click" style="z-index: 981; background-color:transparent !important; border:0px !important ">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#" uk-navbar-toggle-icon></a>
                        <div class="uk-navbar-dropdown" uk-dropdown="pos: bottom-left; mode: click; offset: 13;" style="background-color: black !important">
                            <ul class="uk-nav uk-navbar-dropdown-nav nav-item nav-item-white" style="margin: 0px">
                                <li>
                                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                                        <li class="uk-parent">
                                            <a href="{{ route('producciones') }}">Producciones</a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="{{ route('producciones') }}">Producciones</a></li>
                                                <li><a href="{{ route('coproducciones') }}">Coproducciones y
                                                        colaboraciones</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('proyectos') }}">Proyectos</a></li>
                                <li><a href="{{route('eventos')}}">Próximos eventos</a></li>
                                <li><a href="{{route('quienes-somos')}}">Quiénes somos</a></li>
                                <li><a href="{{route('contacto')}}">Contacto</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-center">
                <a class="uk-navbar-item uk-logo" href="/inicio">
                    <img src="{{ asset('img/LOGOS/logocolor_text_white.png') }}" height="57px" width="102.45px"
                        class="uk-margin-small-left">
                </a>
            </div>
        </nav>

        <div class="uk-navbar-dropbar"></div>
    </div>


    <footer
        class="main-footer uk-grid-colapse uk-grid-match uk-child-width-expand@m uk-text-center uk-flex-wrap-reverse"
        uk-grid>
        <div>
            <div class="uk-padding-small uk-flex uk-flex-left@m uk-flex-center uk-flex-middle uk-flex-wrap">
                <a class="uk-logo" href="/inicio">
                    <img src="{{ asset('img/LOGOS/LogoHorizontal2.png') }}" height="60px" width="133.23px">
                </a>
                <a href="http://www.dragonware.com.mx" target="_blank"
                    class="uk-flex uk-flex-left@m uk-flex-center uk-flex-middle uk-margin-small-top"
                    style="text-decoration: none; color: #D2D2D2; width:100%">
                    <div class="texto-dragonware uk-flex uk-flex-middle">
                        Desarrollado por DragonWare.
                        <img src="{{ asset('img/ico/dragonBlanco.png') }}" width="23px" height="16px">
                    </div>
                </a>
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-center uk-flex-wrap">
                <div class="uk-width-3-5 uk-flex-between uk-flex">
                    <a href="https://twitter.com/ZEscenica?s=09" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="https://www.facebook.com/zinnia.comp.escenica/" target="_blank"><i
                            class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/zinniacompania/" target="_blank"><i
                            class="fa fa-instagram fa-2x"></i></a>
                    <a href="mailto:zinnia.escenica@gmail.com"><i class="fa fa-envelope fa-2x"></i></a>
                </div>
                <div class="texto-center uk-margin-small-top">Mujeres y madres en la escena Michoacana.</div>
                <div class="texto-center  uk-margin-small-top">Copyright © 2021 Zinnia.</div>
            </div>
        </div>
        <div>
            <div class="uk-padding-small uk-light uk-flex uk-flex-middle uk-flex-right@m uk-flex-center uk-flex-wrap">
                <div class="texto-center uk-margin-small-top"
                    style="font-size: 16px;font-style: italic; color: #D2D2D2">
                    "Esta página
                    web es apoyada
                    por
                    el Sistema de Apoyos
                    a la Creación y Proyectos Culturales (Fonca)"</div>
                <img src="{{asset('img/LOGOS/SecretariaCultura_FoncaBN.png')}}" class="uk-margin-auto" width="400px">
            </div>
        </div>
    </footer> 

</body>
{{-- <script>
    $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 5) {
            alert(aaa);
            $(".header").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("active");
        }
    });
});
</script> --}}
</html>