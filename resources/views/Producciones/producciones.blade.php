@extends('layout.main')

@section('head')
<title>ZINNIA - Producciones</title>
<link href="{{ asset('/css/productions.css') }}" rel="stylesheet">
<script src="https://www.youtube.com/iframe_api"></script>

{{-- PHOTOSWIPE --}}

<!-- Core CSS file -->
<link rel="stylesheet" href="{{ asset('/plugins/PhotoSwipe/dist/photoswipe.css') }}">

<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
    In the folder of skin CSS file there are also:
    - .png and .svg icons sprite,
    - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="{{ asset('/plugins/PhotoSwipe/dist/default-skin/default-skin.css') }}">

<!-- Core JS file -->
<script src="{{ asset('/plugins/PhotoSwipe/dist/photoswipe.min.js') }}"></script>

<!-- UI JS file -->
<script src="{{ asset('/plugins/PhotoSwipe/dist/photoswipe-ui-default.min.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="uk-container">
        <form action="#" method="post">
            @csrf
            <div class="uk-flex uk-flex-right uk-margin-top">
                <input type="text" max="1000" class="searcher" placeholder="Ingrese texto de búsqueda" required>
                <button type="submit" class="font_titles uk-button uk-button-secondary searcher_button">BUSCAR</button>
            </div>
        </form>
        <div class="uk-text-center font_titles uk-text-secondary uk-margin-small-top" style="font-size: 30px;">
            PRODUCCIONES</div>
        <div class="uk-margin-auto uk-text-center uk-width-2-3@m font_vietnam" style="font-size: 14px;">Texto breve
            descriptivo, o informativo acerca de las producciones por zinnia, ejemplo, elaborado con amor, pasión y
            dedicación en cada paso.</div>
    </div>
</div>
@endsection