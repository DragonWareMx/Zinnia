@extends('layout.main')

@section('head')
    <title>ZINNIA - Quiénes somos</title>
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/productions.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/quienesSomos.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    {{-- TITULO DE LA PESTAÑA --}}
    <div class="uk-text-center font_titles uk-text-secondary uk-margin-small-top" style="font-size: 30px;">
        QUIÉNES SOMOS
    </div>
    {{-- BANNER CON FOTOGRAFIA --}}
    <div class="div_portada uk-margin-small-top uk-flex uk-flex-center uk-flex-middle uk-flex-column">
        <p class="txt-zinnia uk-margin-remove">ZINNIA</p>
        <p class="txt-slogan uk-margin-remove" uk-parallax="target: #test-filter; blur: 0,10;">Mujeres y madres en la escena Michoacana</p>
    </div>
    {{-- DIV la compañia e historia --}}
    <div class="uk-width-1-1 uk-flex uk-flex-wrap">
        <div class="uk-width-1-3@m uk-padding-small" style="color:black">
            <p class="text-title uk-margin-left uk-margin-small-bottom">LA COMPAÑÍA</p>
            <div class="uk-width-3-4 uk-margin-left text-descripcion">ZINNIA es una compañía de teatro independiente con sede en Morelia, Michoacán, 
                integrada por mujeres y madres profesionistas dedicadas a la creación, producción y gestión 
                de proyectos escénicos artísticos.
            </div>
            <div class="uk-width-3-4 uk-margin-left uk-margin-small-top uk-flex uk-flex-right div-logo-company">
                <img src="{{asset('img/LOGOS/logoblancoynegro.png')}}" style="width:50%" uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">
            </div>
        </div>

        <div class="uk-width-2-3@m uk-padding div_historia" style="background-color:#1C1C1C; color:white">
            <p class="text-title uk-margin-top uk-margin-small-bottom">HISTORIA</p>
            <div class="text-descripcion">
                Zinnia Compañía Escénica. Mujeres y madres en la escena michoacana, se crea en junio de 2015 bajo la dirección de Tania Murillo. Inició 
                su actividad artística con el proyecto “Cuéntame algo diferente, Taller de arte para niños y jóvenes con discapacidad” ganador de la beca 
                México Cultura para la Armonía 2015, Morelia Mich., el cual se desarrolló en diferentes sedes durante 2017 y actualmente sigue vigente. 
                La compañía se consolida con la integración de Procella Romero en la gestión cultural y en la actuación, así como con la participación de 
                compañeras artistas invitadas para los diferentes proyectos.
            </div>
        </div>
    </div>
    {{-- DIV Mision y vision, con segunda fotografia --}}
    <div class="uk-width-1-1">
        <div class="uk-width-1-1 uk-padding-small" style="color:black">
            <p class="text-title uk-margin-top uk-margin-small-bottom uk-margin-left">VISIÓN</p>
            <div class="text-descripcion uk-width-2-5@m uk-margin-left">
                Buscamos consolidarnos en un futuro cercano como una empresa cultural con alta calidad social y artística, que sea referente del quehacer escénico 
                estatal y nacional, para lograr proyectar a nivel internacional la labor artística de las mujeres mexicanas.
            </div>
        </div>
        <div class="uk-width-1-1 uk-padding-small" style="background-color:#1C1C1C; color:white">
            <p class="text-title uk-margin-top uk-margin-small-bottom uk-margin-left">MISIÓN</p>
            <div class="uk-width-1-1 uk-flex uk-flex-wrap">
                <div class="text-descripcion uk-margin-left uk-margin-small-bottom uk-width-1-2@s">
                    Somos un equipo conformado por artistas profesionales comprometidas con su entorno social, egresadas de distintas universidades nacionales de la 
                    Licenciatura en Teatro o Arte Dramático (Universidad de las Américas Puebla, Casa del Teatro, Universidad Michoacana de San Nicolás de Hidalgo). 
                    Nuestro objetivo es crear, producir y gestionar proyectos escénicos multidisciplinarios que desde el quehacer artístico promuevan espacios de diálogo 
                    y reflexión, retomando las temáticas que atañen a nuestro contexto. Zinnia es la primera flor cultivada en el espacio y como metáfora la compañía busca 
                    generar un espacio de crecimiento en donde las y los artistas encuentren la libertad de crear lo inimaginable, para después compartirlo.  
                </div>
                <img src="{{asset('img/fotoZinnia/foto2.1.png')}}" class="uk-width-2-5@s uk-position-absolute img2" style="margin-top:-15%; margin-left:55%; max-width:615px; max-height:400px" uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">
            </div>
        </div>
    </div>
    
</div>
@endsection