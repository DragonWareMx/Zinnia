<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset('img/LOGOS/logocolor_only.png') }}">
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
    </body>
</html>