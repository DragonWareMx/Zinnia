@extends('layout.main')

@section('head')
<title>
    @switch($tipo)
        @case('PRODUCCIONES')
            ZINNIA - Producciones
            @break
        @case('COPRODUCCIONES')
            ZINNIA - Coroducciones
            @break
        @case('PROYECTOS')
            ZINNIA - Proyectos
            @break
    @endswitch
</title>
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
        <div class="uk-margin-auto uk-text-center uk-width-2-3@m font_vietnam" style="font-size: 14px;">
            @switch($tipo)
                @case('PRODUCCIONES')
                @case('COPRODUCCIONES')
                "El universo teatral no tiene límites que los de la imaginación humana" Henri Gouhier
                    @break
                @case('PROYECTOS')
                "En algún lugar, algo increíble está esperando a ser descubierto" Carl Sagan
                    @break
            @endswitch
        </div>
    </div>

    @foreach ($elements as $element)
    <div class="uk-container uk-container-xlarge uk-padding-remove-right" style="margin-bottom:50px;">
        <div class="p_container uk-margin-medium-top uk-margin-large-bottom" style="min-height: 426px; width:100%;">
            @if ($element->fecha)
                {{-- PONER AQUI LA FECHA --}}
                <div class="date_position3 font_vietnam">Fecha de la obra {{ $element->fecha }}</div>
            @endif
            @if ($element->estado)
                {{-- PONER AQUI LA FECHA --}}
                <div class="date_position3 font_vietnam">{{ $element->estado }}</div>
            @endif
            <div class="uk-container uk-container-xlarge uk-flex uk-flex-wrap">
                <div class="uk-width-1-2@m">
                    <div class="div_images_p uk-flex uk-flex-center">
                        <div class="uk-width-1-5 uk-padding-small gal_disapear" style="height:100%;">
                            <div class="next_btn font_vietnam uk-text-center" style="height:36px;">
                                @if (count($element->image) > 0 && count($element->video) > 0)
                                    {{ count($element->image) }} @if(count($element->image) > 1)fotos @else foto @endif y {{count($element->video)}} @if(count($element->video) > 1)videos @else video @endif
                                @elseif(count($element->image) > 0)
                                    {{ count($element->image) }} @if(count($element->image) > 1)fotos @else foto @endif
                                @elseif(count($element->video) > 0)
                                    {{count($element->video)}} @if(count($element->video) > 1)videos @else video @endif
                                @else
                                    Sin fotos ni videos
                                @endif
                            </div>
                            @if (count($element->image) <= 0)
                                <img id="gal_low" class="gal_low" src="{{ asset('/img/iconos/default.jpg') }}" alt="">
                            @elseif(count($element->image) == 1)
                                <img id="gal_low" class="gal_low" src="{{ asset('/img/iconos/default.jpg') }}" alt="">
                            @else
                                <img id="gal_low" class="gal_low" src="{{ asset('/img/images/'.$element->image[1]->link) }}" alt="">
                            @endif
                        </div>
                        <div class="uk-width-4-5" id="imagen-seleccionada">
                            @if (count($element->image) <= 0)
                                <img id="gal_high" class="gal_high" src="{{ asset('/img/iconos/default.jpg') }}" alt="">
                            @else
                                <img id="gal_high" class="gal_high" src="{{ asset('/img/images/'.$element->image[0]->link) }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="uk-width-1 gal_desc font_vietnam">
                        @if (count($element->image) > 0)
                            {{ Str::limit($element->image[0]->descripcion, 150) }}
                        @endif
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-flex date_space">
                    <div class="gal_white uk-flex uk-flex-wrap" style="min-height: 450px;">
                        <a class="p_title font_vietnam" href="
                            @switch($tipo)
                                @case('PRODUCCIONES')
                                @case('COPRODUCCIONES')
                                    {{ route('produccion',['id'=>Crypt::encrypt($element->id)]) }}
                                    @break
                                @case('PROYECTOS')
                                    {{ route('proyecto',['id'=>Crypt::encrypt($element->id)]) }}
                                    @break
                            @endswitch
                        " style="text-decoration: none; color: black;">
                            {{ Str::limit($element->titulo, 100) }}
                        </a>
                        @switch($tipo)
                            @case('PRODUCCIONES')
                            @case('COPRODUCCIONES')
                                <div class="p_desc font_vietnam">{{ $element->sinopsis }}</div>
                                <div class="more-info uk-width-1 uk-text-break uk-overflow-auto"
                                    style="border: none; padding-top:0px;">
                                    {!! $element->maindata !!}
        
                                    @if ($element->n_reconocimientos > 0 && $element->reconocimientos)
                                        <div class="font_vietnam p_data uk-width-1-3">
                                            <div style="font-weight: bold;">Reconocimientos</div>
                                            <div class="uk-text-truncate uk-flex uk-flex-bottom">
                                                @for ($i = 0; $i < $element->n_reconocimientos; $i++)
                                                    @if ($i == 3)
                                                        {{ $element->n_reconocimientos-$i }} más ...
                                                        @break
                                                    @endif
                                                    <img src="{{ asset('img/iconos/reconocimiento.png') }}" width="25px" height="25px">
                                                @endfor
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                @break
                            @case('PROYECTOS')
                                <div class="more-info uk-width-1 uk-text-break uk-overflow-auto"
                                    style="border: none; padding-top:0px;">
                                    {{ $element->subtitulo }}
                                    <br>
                                    <br>
                                    {!! $element->descripcion !!}
                                </div>
                                @break
                        @endswitch
                        <div class="uk-width-1" style="margin-bottom: 0px; margin-top:auto">
                            <a class="p_downloads" href="
                            @switch($tipo)
                                @case('PRODUCCIONES')
                                @case('COPRODUCCIONES')
                                    {{ route('produccion',['id'=>Crypt::encrypt($element->id)]) }}
                                    @break
                                @case('PROYECTOS')
                                    {{ route('proyecto',['id'=>Crypt::encrypt($element->id)]) }}
                                    @break
                            @endswitch
                            " style="text-decoration: none">
                                <div class="font_titles" style="font-size: 18px;color: #FFFFFF;">MÁS INFORMACIÓN</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($element->fecha)
                {{-- PONER AQUI LA FECHA --}}
                <div class="date_position font_vietnam">Fecha de la obra {{ $element->fecha }}</div>
            @endif
            @if ($element->estado)
                {{-- PONER AQUI LA FECHA --}}
                <div class="date_position font_vietnam">{{ $element->estado }}</div>
            @endif
        </div>
    </div>
    @endforeach

    {!! $elements->links() !!}
</div>
@endsection