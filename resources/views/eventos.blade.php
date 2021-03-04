@extends('layout.main')

@section('head')
    <title>ZINNIA - Eventos</title>
    <!-- CSS de Material Design -->
    <link rel="stylesheet" href="{{asset('css/material_design.css')}}" />
    
    <link href="{{ asset('/css/contacto.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container uk-padding-remove">
    <video autoplay="autoplay" loop="loop" class="uk-width-1-1" muted preload="auto" volume="0" style="">
        <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
    </video>    
    <div class="uk-width-1-1 uk-text-center uk-position-absolute" style="margin-top:-48%; width:90%; height:100%; margin-left:5%">
        {{-- <form action="" method="get">
            @csrf
            <div class="uk-flex uk-flex-right uk-margin-top">
                <input name="busqueda" type="text" max="1000" class="searcher" placeholder="Ingrese texto de búsqueda" required>
                <button type="submit" class="font_titles uk-button uk-button-secondary searcher_button">BUSCAR</button>
            </div>
        </form> --}}
        <h1>EVENTOS</h1>
        <div id="imgDiv" class="event uk-width-1-4 uk-padding-small" style="background-color: #1C1C1C;">
            <div class="uk-background-contain uk-background-muted uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{asset('img/images/ProximamenteSalavirtual.PNG')}}); background-color:black">>
                <div id="info" class="uk-text-center uk-position-absolute " style="margin-top:">
                    <p class="txtInfo">Titulo</p>
                    <p class="txtInfo">Evento</p>
                    <p class="txtInfo">Hora</p>
                </div>
            </div>
            <p class="title_event">TÍTULO</p>
            <p>Link: </p>
            <p>Fecha: </p>
            <p class="masinfo" onclick="moreInfo()">Más información</p>
        </div>
    </div>
</div>

<script>
    function moreInfo(){
        contenedor=document.getElementById("imgDiv");
        img =document.getElementById("img");
        contenedor.style.backgroundColor = "rgb(255,255,255,0.3)";
        img.style.opacity = "0.6";
    }
</script>
@endsection
