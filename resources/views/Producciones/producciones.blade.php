@extends('layout.main')

@section('head')
    <link href="{{ asset('/css/productions.css') }}" rel="stylesheet">
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
        <div class="uk-text-center font_titles uk-text-secondary uk-margin-small-top" style="font-size: 30px;">PRODUCCIONES</div>
        <div class="uk-margin-auto uk-text-center uk-width-2-3@m font_vietnam" style="font-size: 14px;" >Texto breve descriptivo, o informativo acerca de las producciones por zinnia, ejemplo, elaborado con amor, pasión y dedicación en cada paso.</div>
    </div>
</div>
@endsection