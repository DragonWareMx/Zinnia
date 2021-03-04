<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset('img/LOGOS/logocolor_only.png') }}">
        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    </head>
    <body style="background-color:black">
        <div class="container uk-padding-remove">
            <video autoplay="autoplay" loop="loop" class="video_fondo" preload="auto" muted>
                <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
            </video>
            <div class="uk-width-1-1 uk-text-center uk-position-absolute" style="margin-top:-48%">
                <a href="/inicio" style="outline:none"><img src="{{asset('img/LOGOS/logocolor_edited-2.png')}}" class="" style="width:25%;"></a>    
            </div>
        </div>

        <footer
            class="main-footer uk-grid-colapse uk-grid-match uk-child-width-expand@s uk-text-center uk-flex-wrap-reverse"
            uk-grid>
            <div>
                <div class="uk-padding-small uk-flex uk-flex-left@m uk-flex-center uk-flex-middle uk-flex-wrap">
                    <a class="uk-logo" href="#">
                        <img src="{{ asset('img/LOGOS/LogoHorizontal2.png') }}" height="75px" width="166.54px">
                    </a>
                    <a href="" class="uk-flex uk-flex-left@m uk-flex-center uk-flex-middle uk-margin-small-top"
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
                <div class="uk-padding-small uk-light uk-flex uk-flex-middle uk-flex-right@m uk-flex-center uk-flex-wrap">
                    <div class="texto-center uk-margin-small-top" style="font-style: italic; color: #D2D2D2">"Esta página
                        web es apoyado
                        por
                        el Sistema de Apoyos
                        a la Creación y Proyectos Culturales (Fonca)."</div>
                    <img src="{{asset('img/LOGOS/SecretariaCultura_FoncaBN.png')}}" class="uk-margin-auto" width="360px">
                </div>
            </div>
        </footer>
    </body>
</html>