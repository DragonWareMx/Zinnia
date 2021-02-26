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
        <form action="
        @switch($tipo)
            @case('PRODUCCIONES')
                {{route('producciones')}}
                @break
            @case('COPRODUCCIONES')
                {{route('coproducciones')}}
                @break
            @case('PROYECTOS')
                {{route('proyectos')}}
                @break
        @endswitch" method="get">
            @csrf
            <div class="uk-flex uk-flex-right uk-margin-top">
                <input name="busqueda" type="text" max="1000" class="searcher" placeholder="Ingrese texto de búsqueda" required>
                <button type="submit" class="font_titles uk-button uk-button-secondary searcher_button">BUSCAR</button>
            </div>
        </form>
        <div class="uk-text-center font_titles uk-text-secondary uk-margin-small-top" style="font-size: 30px;">
            {{$tipo}}</div>
        <div class="uk-margin-auto uk-text-center uk-width-2-3@m font_vietnam" style="font-size: 14px;">Texto breve
            descriptivo, o informativo acerca de las producciones por zinnia, ejemplo, elaborado con amor, pasión y
            dedicación en cada paso.</div>
    </div>

    @foreach ($elements as $element)
    <div class="uk-container uk-container-xlarge uk-padding-remove-right">
        <div class="p_container uk-margin-medium-top uk-margin-large-bottom" style="min-height: 426px; width:100%;">
            <div class="uk-container uk-container-xlarge uk-flex uk-flex-wrap">
                <div class="uk-width-1-2@m">
                    <div class="div_images_p uk-flex">
                        <div class="uk-width-1-5 uk-padding-small" style="height:100%;">
                            <div class="next_btn font_vietnam uk-text-center">
                                @if (count($element->image) > 0 && count($element->video) > 0)
                                    {{ count($element->image) }} @if(count($element->image) > 1)fotos @else foto @endif y {{count($element->video)}} @if(count($element->video) > 1)videos @else video @endif para ver
                                @elseif(count($element->image) > 0)
                                    {{ count($element->image) }} @if(count($element->image) > 1)fotos @else foto @endif para ver
                                @elseif(count($element->video) > 0)
                                    {{count($element->video)}} @if(count($element->video) > 1)videos @else video @endif para ver
                                @else
                                    Sin fotos ni videos para ver
                                @endif
                            </div>
                            <img id="gal_low" class="gal_low" src="{{ asset('/img/fotoZinnia/Procella.png') }}" alt="">
                        </div>
                        <div class="uk-width-4-5" id="imagen-seleccionada">
                            <img id="gal_high" class="gal_high" src="{{ asset('/img/fotoZinnia/Procella.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="uk-width-1 gal_desc font_vietnam"
                        uk-tooltip="title: Descripción de la foto, Lorem ipsum dolor sit aawdawdawd adw dadwa awdawdawdawd awdawdad awdawd awd awd awdaw dawdawd met, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.d">
                        {{ Str::limit('Descripción de la foto, Lorem ipsum dolor sit aawdawdawd adw dadwa awdawdawdawd awdawdad aw Descripción de la foto, Lorem ipsum dolor sit aawdawdawd adw dadwa awdawdawdawdawdawd awdawd awdawd awdawd awdawdad awdawd awd awd awdaw dawdawd met,', 150) }}
                    </div>
                </div>
                <div class="date_position2 font_vietnam">Fecha de la obra 11.02.2021</div>
                <div class="uk-width-1-2@m uk-flex">
                    <div class="gal_white uk-flex uk-flex-wrap" style="min-height: 450px;">
                        <a class="p_title font_vietnam" uk-tooltip="{{$element->titulo}}" href="
                            @switch($tipo)
                                @case('PRODUCCIONES')
                                @case('COPRODUCCIONES')
                                    {{ route('produccion',['id'=>Crypt::encrypt($element->id)]) }}
                                    @break
                                @case('PROYECTOS')
                                    {{ route('proyecto',['id'=>Crypt::encrypt($element->id)]) }}
                                    @break
                            @endswitch
                        ">
                            {{ Str::limit($element->titulo, 65) }}
                        </a>
                        <div class="p_desc font_vietnam">{{ $element->sinopsis, 240 }}</div>
                        <div class="more-info uk-width-1 uk-text-break uk-flex uk-flex-wrap"
                            style="border: none; padding-top:0px;">
                            <div class="font_vietnam p_data uk-width-1-3">
                                <div style="font-weight: bold;">Duración de la obra</div>
                                <div class="uk-text-truncate">45 minutos.</div>
                            </div>
                            <div class="font_vietnam p_data uk-width-1-3">
                                <div style="font-weight: bold;">Género</div>
                                <div class="uk-text-truncate" uk-tooltip="title:asdasdasd">Lorem impsun dolor no se que
                                    no
                                    se cuanto.</div>
                            </div>
                            <div class="font_vietnam p_data uk-width-1-3">
                                <div style="font-weight: bold;">Público a quien está dirigida</div>
                                <div class="uk-text-truncate" uk-tooltip="title:asdasdasd">Familiar, principalmente
                                    infantil.</div>
                            </div>
                            <div class="font_vietnam p_data uk-width-1-3">
                                <div style="font-weight: bold;">Reconocimientos</div>
                                <div class="uk-text-truncate uk-flex uk-flex-bottom" uk-tooltip="title:asdasdasd">
                                    <img src="{{ asset('img/iconos/reconocimiento.png') }}" width="25px" height="25px">
                                    <img src="{{ asset('img/iconos/reconocimiento.png') }}" width="25px" height="25px">
                                    <img src="{{ asset('img/iconos/reconocimiento.png') }}" width="25px" height="25px">
                                    5 más ...
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1" style="margin-bottom: 0px; margin-top:auto">
                            <button class="p_downloads" href="#">
                                <div class="font_titles" style="font-size: 18px;color: #FFFFFF;">MÁS INFORMACIÓN</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    {!! $elements->links() !!}
</div>
@endsection