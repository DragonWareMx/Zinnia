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
                <div class="uk-flex uk-flex-right uk-width-1-1 div-img-responsive2 uk-margin-top uk-margin-bottom">
                    <img src="{{asset('img/fotoZinnia/foto2.1.png')}}" style="width:50%" uk-parallax="opacity: 0,1; y: 50,0; viewport: 0.5">
                </div>
            </div>
        </div>
    </div>
    {{-- DIV PERFILES  --}}
    <div class="uk-width-1-1" style="background-color: #1C1C1C">
        <video autoplay="autoplay" loop="loop" class="uk-width-1-1 video-fondo-perfiles" muted preload="auto" volume="0" style="object-fit: cover;" width="640" height="360">
            <source src="{{asset('img/fondoAurora.mp4')}}" type="video/mp4">
        </video>
        <video autoplay="autoplay" loop="loop" class="uk-width-1-1 video-fondo-perfiles-r" muted preload="auto" volume="0" style="object-fit: cover; display:none" width="640" height="360">
            <source src="{{asset('img/fondovrt.mp4')}}" type="video/mp4">
        </video>
        <div class="div-info-perfiles uk-position-absolute uk-width-1-1 uk-padding-small" style="margin-top:-56.25%; ">
            <p class="text-title uk-margin-top uk-margin-small-bottom uk-margin-left " style="color:white">MISIÓN</p>
            <div class="uk-width-1-1 uk-flex uk-flex-wrap uk-flex-center uk-padding-small">
                
                <div class="card uk-flex uk-flex-wrap uk-flex-center uk-padding uk-text-center uk-margin-large-right" style="color:white" uk-parallax="opacity: 0,1; y: -20,0; scale: 1.2,1; viewport: 0.5;">
                    <a href="{{asset('img/fotoZinnia/cv/CVTaniaMurillo.pdf')}}" download="CVTaniaMurillo.pdf" uk-tooltip="Clic para más info" class="uk-width-1-1">
                        <img src="{{asset('img/fotoZinnia/TaniaMurillo.jpg')}}" style="width:100px; height:100px; border-radius:100%; object-fit: cover;">
                    </a>
                    <a href="{{asset('img/fotoZinnia/cv/CVTaniaMurillo.pdf')}}" download="CVTaniaMurillo.pdf" class="uk-link-reset" uk-tooltip="Clic para más info">
                        <div class="uk-width-1-1 card-nombre"><b>TANIA MURILLO TOVAR</b></div>
                    </a>
                    <div class="uk-width-1-1 card-rol">Concepto y Dirección Escénica</div>
                    
                    <div class="div-iconos uk-margin-small-top">
                        <a href="https://www.facebook.com/tanmurix" uk-icon="icon: facebook; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                        <a href="https://www.instagram.com/tanmurix/" uk-icon="icon: instagram; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                    </div>
                </div>

                <div class="card uk-flex uk-flex-wrap uk-flex-center uk-padding uk-text-center" style="color:white" uk-parallax="opacity: 0,1; y: -20,0; scale: 1.2,1; viewport: 0.5;">
                    <a href="{{asset('img/fotoZinnia/cv/CVProcella.pdf')}}" download="CVProcella.pdf" uk-tooltip="Clic para más info" class="uk-width-1-1">
                        <img src="{{asset('img/fotoZinnia/Procella.png')}}" style="width:100px; height:100px; border-radius:100%; object-fit: cover;">
                    </a>
                    <a href="{{asset('img/fotoZinnia/cv/CVProcella.pdf')}}" download="CVProcella.pdf" class="uk-link-reset" uk-tooltip="Clic para más info">
                        <div class="uk-width-1-1 card-nombre"><b>PROCELLA ROMERO ZEPEDA</b></div>
                    </a>
                    <div class="uk-width-1-1 card-rol">Actriz y Gestora Cultural</div>
                    <div class="div-iconos uk-margin-small-top">
                        <a href="https://www.facebook.com/procella" uk-icon="icon: facebook; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                        <a href="https://www.instagram.com/procellarz/ " uk-icon="icon: instagram; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                    </div>
                </div>

            </div>
            <div class="uk-width-1-1 uk-flex uk-flex-wrap uk-flex-center uk-padding-small">
                
                <div class="card uk-flex uk-flex-wrap uk-flex-center uk-padding uk-text-center" style="color:white" uk-parallax="opacity: 0,1; y: -20,0; scale: 1.2,1; viewport: 0.5;">
                    <a href="{{asset('img/fotoZinnia/cv/CVLauraCamacho.pdf')}}" download="LauraCamacho.pdf" uk-tooltip="Clic para más info" class="uk-width-1-1">
                        <img src="{{asset('img/fotoZinnia/LauraCamacho.jpg')}}" style="width:100px; height:100px; border-radius:100%; object-fit: cover;">
                    </a>
                    <a href="{{asset('img/fotoZinnia/cv/CVLauraCamacho.pdf')}}" download="CVLauraCamacho.pdf" class="uk-link-reset" uk-tooltip="Clic para más info">
                        <div class="uk-width-1-1 card-nombre"><b>LAURA CAMACHO APARICIO</b></div>
                    </a>
                    <div class="uk-width-1-1 card-rol">Asistencia General</div>
                    <div class="div-iconos uk-margin-small-top">
                        <a href="https://www.facebook.com/lahadamar6" uk-icon="icon: facebook; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                        <a href="https://www.instagram.com/lauxcamacho/" uk-icon="icon: instagram; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                    </div>
                </div>

                <div class="card uk-flex uk-flex-wrap uk-flex-center uk-padding uk-text-center uk-margin-large-right uk-margin-large-left" style="color:white" uk-parallax="opacity: 0,1; y: -20,0; scale: 1.2,1; viewport: 0.5;">
                    <a href="{{asset('img/fotoZinnia/cv/CVLandyMedina.pdf')}}" download="LandyMedina.pdf" uk-tooltip="Clic para más info" class="uk-width-1-1">
                        <img src="{{asset('img/fotoZinnia/LandyMedina.jpg')}}" style="width:100px; height:100px; border-radius:100%; object-fit: cover;">
                    </a>
                    <a href="{{asset('img/fotoZinnia/cv/CVLandyMedina.pdf')}}" download="CVLandyMedina.pdf" class="uk-link-reset" uk-tooltip="Clic para más info">
                        <div class="uk-width-1-1 card-nombre"><b>LANDY MEDINA GALAZ</b></div>
                    </a>
                    <div class="uk-width-1-1 card-rol">Actriz</div>
                    <div class="div-iconos uk-margin-small-top">
                        <a href="https://www.facebook.com/landy.nana" uk-icon="icon: facebook; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                        <a href="https://www.instagram.com/landy.medina/" uk-icon="icon: instagram; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                    </div>
                </div>

                <div class="card uk-flex uk-flex-wrap uk-flex-center uk-padding uk-text-center" style="color:white" uk-parallax="opacity: 0,1; y: -20,0; scale: 1.2,1; viewport: 0.5;">
                    <a href="{{asset('img/fotoZinnia/cv/CVAbrilCira.pdf')}}" download="CVAbrilCira.pdf" uk-tooltip="Clic para más info" class="uk-width-1-1">
                        <img src="{{asset('img/fotoZinnia/AbrilCira.jpg')}}" style="width:100px; height:100px; border-radius:100%; object-fit: cover;">
                    </a>
                    <a href="{{asset('img/fotoZinnia/cv/CVAbrilCira.pdf')}}" download="CVAbrilCira.pdf" class="uk-link-reset" uk-tooltip="Clic para más info">
                        <div class="uk-width-1-1 card-nombre"><b>ABRIL CIRA PÉREZ VÉLEZ</b></div>
                    </a>
                    <div class="uk-width-1-1 card-rol">Actriz</div>
                    <div class="div-iconos uk-margin-small-top">
                        <a href="https://www.facebook.com/Abril-Cira-396665810528851/" uk-icon="icon: facebook; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                        <a href="https://www.instagram.com/abrilcira/" uk-icon="icon: instagram; ratio: 1.5" class="uk-link-text" target="_blank"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
</div>
@endsection