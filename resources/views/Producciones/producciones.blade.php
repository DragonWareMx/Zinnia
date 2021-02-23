@extends('layout.main')

@section('head')
<link href="{{ asset('/css/productions.css') }}" rel="stylesheet">
<script src="https://www.youtube.com/iframe_api"></script>
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

    <div class="p_container uk-margin-medium-top uk-margin-medium-bottom" style="height: 526px; width:100%">
        <div class="uk-container">
            <div class="uk-width-1-2@m">
                <div class="div_images_p uk-flex">
                    <div class="uk-width-1-4 uk-background-primary " style="height:100%;">
                        <div class="next_btn font_vietnam">Siguiente</div>
                        <img id="gal_low" class="gal_low" src="{{ asset('/img/fotoZinnia/Procella.png') }}" alt="">
                    </div>
                    <div class="uk-width-3-4 uk-background-default">
                        <img id="gal_high" class="gal_low" src="{{ asset('/img/fotoZinnia/Procella.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m">
            </div>
        </div>
    </div>
        
    <div class="uk-container">

        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
            <div class=" uk-grid-match" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-card more-info">
                        <h1>MÁS INFORMACIÓN</h1>
                        <p><strong>EQUIPO CREATIVO</strong></p>
                        <p><strong>Asistente general: &nbsp</strong>Laura Camacho</p>
                        <p><strong>Diseño y atrezo de escenografía: &nbsp</strong>Abigail Araoz y Tania Murillo</p>
                        <p><strong>Realización de escenografía: &nbsp</strong>Raúl Medina Ríos (Gigio) y el Sr. Leonel
                        </p>
                        <p><strong>Iluminación:&nbsp</strong>Raúl Medina Ríos (Gigio)</p>
                        <p><strong>Diseño cartel y edición de video:&nbsp</strong> Tania Murillo</p>
                        <p><strong>Tipografía base:&nbsp</strong>LAMIA DOP</p>
                        <p><strong>Fotografía de estudio:&nbsp</strong>Sebastián Portillo-FOTOVIVA</p>
                        <p><strong>Fotografía escénica: &nbsp</strong>Fausto Jijón</p>
                        <p><strong>Gestión Cultural: &nbsp</strong>Procella Romero</p>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-card video-carousel">
                        <div class="video-slider">
                            <!-- SLIDE 1 -->
                            <div class="slide">
                                <iframe class="video"
                                    src="https://www.youtube.com/embed/GEo5bmUKFvI?ecver=2&enablejsapi=1"></iframe>
                            </div>
                            <!-- SLIDE 4 -->
                            <div class="slide">
                                <iframe class="video"
                                    src="https://www.youtube.com/embed/846cjX0ZTrk?ecver=2&enablejsapi=1"></iframe>
                            </div>
                            <!-- SLIDE 5 -->
                            <div class="slide">
                                <iframe class="video"
                                    src="https://www.youtube.com/embed/gSRFqpheg6Y?ecver=2&enablejsapi=1"></iframe>
                            </div>
                            <!-- END OF SLIDES -->
                            <div class="slide-arrow left"></div>
                            <div class="slide-arrow right"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
		var pos = 0,
			slides = $('.slide'),
			numOfSlides = slides.length;

		function nextSlide() {
			// `[]` returns a vanilla DOM object from a jQuery object/collection
			slides[pos].video.stopVideo()
			slides.eq(pos).animate({ left: '-100%' }, 500);
			pos = (pos >= numOfSlides - 1 ? 0 : ++pos);
			slides.eq(pos).css({ left: '100%' }).animate({ left: 0 }, 500);
		}

		function previousSlide() {
			slides[pos].video.stopVideo()
			slides.eq(pos).animate({ left: '100%' }, 500);
			pos = (pos == 0 ? numOfSlides - 1 : --pos);
			slides.eq(pos).css({ left: '-100%' }).animate({ left: 0 }, 500);
		}

		$('.left').click(previousSlide);
		$('.right').click(nextSlide);
	})

	function onYouTubeIframeAPIReady() {
		$('.slide').each(function (index, slide) {
			// Get the `.video` element inside each `.slide`
			var iframe = $(slide).find('.video')[0]
			// Create a new YT.Player from the iFrame, and store it on the `.slide` DOM object
			slide.video = new YT.Player(iframe)
		})
	}
</script>
@endsection