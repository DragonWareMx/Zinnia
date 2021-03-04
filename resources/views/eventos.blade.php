@extends('layout.main')

@section('head')
    <title>ZINNIA - Eventos</title>
    <!-- CSS de Material Design -->
    <link rel="stylesheet" href="{{asset('css/material_design.css')}}" />
    
    <link href="{{ asset('/css/contacto.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container uk-padding-remove">
    <video autoplay="autoplay" loop="loop" class="uk-width-1-1 video-fondo-perfiles" muted preload="auto" volume="0" style="">
        <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
    </video> 
    <video autoplay="autoplay" loop="loop" class="uk-width-1-1 video-fondo-perfiles-r" muted preload="auto" volume="0" style=" object-fit: cover; display:none">
        <source src="{{asset('img/fondovrt.mp4')}}" type="video/mp4">
    </video>   
    <div class="uk-width-1-1 uk-text-center uk-position-absolute contenedor" style="margin-top:-48%; width:90%; height:100%; margin-left:5%">
        {{-- <form action="" method="get">
            @csrf
            <div class="uk-flex uk-flex-right uk-margin-top">
                <input name="busqueda" type="text" max="1000" class="searcher" placeholder="Ingrese texto de búsqueda" required>
                <button type="submit" class="font_titles uk-button uk-button-secondary searcher_button">BUSCAR</button>
            </div>
        </form> --}}
        <h1>PRÓXIMOS EVENTOS</h1>
        <div id="columnResp" class="uk-flex">
            @foreach ($eventos as $evento)
            <div id="{{$evento->id}}" onmouseover="moreInfo(this.id)" onmouseout="normal(this.id)" onclick="goLink('{{$evento->link}}')" 
                class="uk-width-1-3 uk-width-1-1@s uk-padding-small uk-margin-right uk-margin-bottom div_img" style="background-color: #1C1C1C;">
                <img class="img_event" src="{{asset('img/images/'.$evento->image[0]->link)}}" style="max-height: 500px; margin-bottom:10px">
                <div id="infoA{{$evento->id}}" class="uk-animation-fade">
                    <p class="title_event">{{$evento->titulo}}</p>
                    <p class="txt_responsive">FECHA: {{$evento->fecha}} </p>
                    <p class="txt_responsive">HORA: {{$evento->hora}}</p>
                    <p class="txt_responsive">TIPO: {{$evento->tipo}}</p>
                </div>
                <div id="infoB{{$evento->id}}" style="display:none" class="uk-animation-scale-up">
                    <p class="title_event">Más información:</p>
                    <p>{{$evento->masinfo}}</p>
                </div>    
            </div>   
            @endforeach
        </div>
    </div>
</div>

<script>
    function moreInfo(ide){
        contenedor=document.getElementById(ide);        
        contenedor.style.backgroundColor = "rgb(255,255,255,0.3)";
        document.getElementById('infoA'+ide).style.display = 'none';
        document.getElementById('infoB'+ide).style.display = 'block';

    }
    function normal(ide){
        contenedor=document.getElementById(ide);        
        contenedor.style.backgroundColor = "#1C1C1C";
        document.getElementById('infoA'+ide).style.display = 'block';
        document.getElementById('infoB'+ide).style.display = 'none';
    }
    function goLink(link){
        window.open(link, '_blank');
    }
    // if (screen.width < 960){
    //     divCont = document.getElementById('columnResp');
    //     divCont.className ="uk-column";
        
    // } 
</script>
@endsection
