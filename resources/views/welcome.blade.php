<!DOCTYPE html>
<html lang="es">

    <head>
        <title>ZINNIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- linea para que salga miniatura de sitio al compartirlo --}}
        <link rel="image_src" href="{{ asset ('img/LOGOS/logocolor_only.png')}}" /> 
        <link rel="icon" href="{{ asset('img/LOGOS/logocolor_only.png') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body style="background-color:black">
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
                <a href="/inicio"><img src="{{asset('img/LOGOS/logocolor_edited-2.png')}}"  style="width:25%; max-width:333px; max-height:466px"> </a>
            </div>

            <div class="uk-margin-small-top uk-text-center uk-flex uk-flex-column uk-flex-center" style="font-style: italic; color: #D2D2D2">"Esta página
                web es apoyada
                por 
                el Sistema de<br> Apoyos
                a la Creación y Proyectos Culturales (Fonca)"
                <img src="{{asset('img/LOGOS/SecretariaCultura_FoncaBN.png')}}" class="uk-margin-auto" width="360px">
            </div>
            
        </div>
    </body>
</html>