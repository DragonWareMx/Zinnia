<!DOCTYPE html>
<html lang="es">

    <head>
        <title>ZINNIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset('img/LOGOS/logocolor_only.png') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    </head>
    <body style="background-color:black">
        <div class="container uk-padding-remove">
            <video autoplay="autoplay" loop="loop" class="video_fondo" preload="auto" muted>
                <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
            </video>
            <div class="uk-width-1-1 uk-text-center uk-position-absolute img-logo-blanco" style="margin-top:-550px">
                <a href="/inicio"><img src="{{asset('img/LOGOS/logocolor_edited-2.png')}}"  style="width:25%; max-width:333px; max-height:466px"> </a>
            </div>

            <div class="uk-margin-small-top uk-text-center uk-flex uk-flex-column uk-flex-center" style="font-style: italic; color: #D2D2D2">"Esta página
                web es apoyado
                por 
                el Sistema de<br> Apoyos
                a la Creación y Proyectos Culturales (Fonca)."
                <img src="{{asset('img/LOGOS/SecretariaCultura_FoncaBN.png')}}" class="uk-margin-auto" width="360px">
            </div>
            
        </div>
    </body>
</html>