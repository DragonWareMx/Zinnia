@extends('layout.main')

@section('head')
    <title>ZINNIA - Producciones</title>
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container uk-padding-remove ">
    <video autoplay="autoplay" loop="loop" class="uk-width-1-1 video_fondo" muted preload="auto" volume="0" style="object-fit: cover;">
        <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
    </video>
    <div class="uk-width-1-1 uk-text-center uk-position-absolute" style="margin-top:-38%">
        <img src="{{asset('img/LOGOS/logoblanco.png')}}" class="" style="width:20%;">    
    </div>
    
</div>
@endsection