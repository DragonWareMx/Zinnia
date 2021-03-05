@extends('layout.main')

@section('head')
<title>ZINNIA - Contacto</title>
<!-- CSS de Material Design -->
<link rel="stylesheet" href="{{asset('css/material_design.css')}}" />

<link href="{{ asset('/css/contacto.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container uk-padding-remove">
    <video autoplay="autoplay" loop="loop" class="video-fondo-perfiles uk-width-1-1" muted preload="auto">
        <source src="{{asset('img/fondoAuroraMAX.mp4')}}" type="video/mp4">
    </video>
    <div class="uk-width-1-1 uk-text-center uk-position-absolute contenedor"
        style="margin-top:-48%; width:90%; height:100%; margin-left:5%">
        <h1>CONTACTO</h1>
        <div class="uk-padding" style="border: 1px solid #D2D2D2;">
            <img src="{{ asset('img/LOGOS/logoblanco.png') }}" height="198px" width="142px">
            <h3>TELÉFONO</h3>
            <p>Directora Lic. Tania Murillo <a href="tel:4434215261"
                    style="text-decoration: none; color:white">4434215261</a></p>
            <h3>CORREO ELECTRÓNICO</h3>
            <p><a href="mailto:zinnia.escenica@gmail.com"
                    style="text-decoration: none; color:white">zinnia.escenica@gmail.com </a></p>
            <h3>SÍGUENOS EN NUESTRAS REDES SOCIALES</h3>
            <div>
                <a href="https://twitter.com/ZEscenica?s=09" target="_blank" style="text-decoration: none">
                    <img class="uk-margin-right" src="{{asset('img/iconos/tw.png')}}" height="25px" width="25px">
                </a>
                <a href="https://www.facebook.com/zinnia.comp.escenica/" target="_blank" style="text-decoration: none">
                    <img class="uk-margin-right" src="{{asset('img/iconos/FB.png')}}" height="25px" width="25px">
                </a>
                <a href="https://www.instagram.com/zinniacompania/" target="_blank" style="text-decoration: none">
                    <img src="{{asset('img/iconos/IG.png')}}" height="25px" width="25px">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="critic-important uk-margin-top form" style="margin-right:30%; margin-left:30%; margin-bottom:30px">
    <div class="critic-inside uk-padding">
        <p class="title_form">¿NECESITAS SABER MÁS?</p>
        <p class="font_vietnam">Enviános un mensaje y nos comunicaremos contigo lo más pronto posible</p>

        <div class="omrs-input-group uk-margin-bottom">
            <label class="omrs-input-underlined">
                <input id="nombre" type="text" name="nombre" required>
                <span class="omrs-input-label">Nombre completo</span>
            </label>
        </div>
        <div class="omrs-input-group uk-margin-bottom">
            <label class="omrs-input-underlined ">
                <input id="mail" type="email" name="mail" required>
                <span class="omrs-input-label">Correo electrónico</span>
            </label>
        </div>
        <div class="omrs-input-group uk-margin-bottom">
            <label class="omrs-input-underlined">
                <input id="msj" type="text" name="msj" required>
                <span class="omrs-input-label">Mensaje</span>
            </label>
        </div>
        <div class="btn">
            <a href="#" style="text-decoration: none; color:white">ENVIAR</a>
        </div>
    </div>
</div>

@endsection