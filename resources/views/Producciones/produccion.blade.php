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
            {{$tipo}}</div>
        <div class="uk-margin-auto uk-text-center uk-width-2-3@m font_vietnam" style="font-size: 14px;">Texto breve
            descriptivo, o informativo acerca de las producciones por zinnia, ejemplo, elaborado con amor, pasión y
            dedicación en cada paso.</div>
    </div>
    <div class="p_container uk-margin-medium-top uk-margin-medium-bottom" style="min-height: 526px; width:100%;">
        <div class="uk-container uk-container-xlarge uk-flex uk-flex-wrap">
            <div class="uk-width-1-2@m">
                <div class="div_images_p uk-flex uk-flex-center">
                    <div class="uk-width-1-4 uk-margin-right gal_disapear" style="height:100%;">
                        <div class="next_btn font_vietnam" onclick="clickImagen();">Siguiente</div>
                        <img id="gal_low" class="gal_low" src="{{ asset('/img/fotoZinnia/Procella.png') }}" alt="">
                    </div>
                    <div class="uk-width-3-4 " id="imagen-seleccionada">
                        <img id="gal_high" class="gal_high" src="{{ asset('/img/fotoZinnia/Procella.png') }}" alt="">
                    </div>
                </div>
                <div class="uk-width-1 gal_desc font_vietnam"
                    uk-tooltip="title: Descripción de la foto, Lorem ipsum dolor sit aawdawdawd adw dadwa awdawdawdawd awdawdad awdawd awd awd awdaw dawdawd met, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.d">
                    {{ Str::limit('Descripción de la foto, Lorem ipsum dolor sit aawdawdawd adw dadwa awdawdawdawd awdawdad aw Descripción de la foto, Lorem ipsum dolor sit aawdawdawd adw dadwa awdawdawdawdawdawd awdawd awdawd awdawd awdawdad awdawd awd awd awdaw dawdawd met,', 150) }}
                </div>
                <div class="font_vietnam uk-margin-top uk-width-1 uk-text-center"
                    style="font-size: 22px; color:#FFFFFF;">GALERIA DE FOTOS</div>
                <div class="font_vietnam uk-margin-small-top uk-width-1 uk-text-center"
                    style="font-size: 14px;color: #FFFFFF;">{{ count($element->image) }} fotos para ver</div>
            </div>
            <div class="date_position2 font_vietnam">Fecha de la obra 11.02.2021</div>
            <div class="uk-width-1-2@m uk-flex">
                <div class="gal_white">
                <div class="p_title font_vietnam"  uk-tooltip="{{$element->titulo}}" >{{ Str::limit($element->titulo, 65) }}</div>
                <div class="p_desc font_vietnam">{{ $element->sinopsis, 240 }}</div>
                <div class="more-info uk-width-1 uk-text-break uk-overflow-auto" style="border: none; padding-top:0px;">
                    {!! $element->descripcion !!}
                </div>
                <div class="uk-width-1">
                    <button class="p_downloads" href="#modal-descargables" uk-toggle>
                        <div class="font_titles" style="font-size: 18px;color: #FFFFFF;">DESCARGABLES</div>
                    </button>
                </div>
                </div>
            </div> 
        </div> 
    </div>

    <div id="modal-descargables" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-background-secondary">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="font_titles uk-flex uk-flex-center" style="color: white; font-size:24px;">DESCARGABLES</div>
            {{-- Descargable 1 --}}
            <div class="p_downloable uk-margin-small-top font_vietnam">
                <a  class="uk-width-4-5 uk-text-truncate" style="color:white" href="{{asset('/img/fotoZinnia/Procella.png')}}" download class="uk-text-truncate">Increíble descargable pdf número 1.pdf</a>
                <a  style="color:white;"href="{{asset('/img/fotoZinnia/Procella.png')}}" download uk-icon="download"></a>
            </div>
            {{-- Descargable 2 --}}
            <div class="p_downloable uk-margin-small-top font_vietnam">
                <a  class="uk-width-4-5 uk-text-truncate"style="color:white"href="{{asset('/img/fotoZinnia/Procella.png')}}" download class="uk-text-truncate">Por favor seleccióneme a mí señor calamardo.pdf</a>
                <a style="color:white"href="{{asset('/img/fotoZinnia/Procella.png')}}" download uk-icon="download"></a>
            </div>
            {{-- Descargable 3 --}}
            <div class="p_downloable uk-margin-small-top font_vietnam">
                <a   class="uk-width-4-5 uk-text-truncate"style="color:white"href="{{asset('/img/fotoZinnia/Procella.png')}}" download class="uk-text-truncate">Descargable chungo.pdf</a>
                <a  style="color:white"href="{{asset('/img/fotoZinnia/Procella.png')}}" download uk-icon="download"></a>
            </div>
            {{-- Descargable 4 --}}
            <div class="p_downloable uk-margin-small-top font_vietnam">
                <a   class="uk-width-4-5 uk-text-truncate"style="color:white"href="{{asset('/img/fotoZinnia/Procella.png')}}" download class="uk-text-truncate">FotosEvento2.pdf</a>
                <a style="color:white" href="{{asset('/img/fotoZinnia/Procella.png')}}" download uk-icon="download"></a>
            </div>
        </div>
    </div>

    {{-- PONER AQUI LA FECHA --}}
    <div class="date_position font_vietnam">Fecha de la obra 11.02.2021</div>
                

    <div class="uk-container  uk-container-xlarge">
        <div class="uk-width-1-1">
            <div class=" uk-grid-match" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="more-info uk-text-break">
                        <h1>MÁS INFORMACIÓN</h1>
                        {!! $element->masinfo !!}
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="video-carousel">
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
                            <!-- SLIDE 7 -->
                            <div class="slide">
                                <iframe class="video"
                                    src="https://www.youtube.com/embed/J3pF2jkQ4vc?ecver=2&enablejsapi=1"></iframe>
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

    <div class="uk-section uk-section-small">
        @if (isset($element->n_reconocimientos) && $element->n_reconocimientos > 0)
            <div class="uk-width-1 div-reconocimientos uk-text-center">
                <div class="uk-container uk-container-xlarge">
                    <h3 class="uk-text-center uk-margin-top">RECONOCIMIENTOS</h3>
                    <h4 class="uk-text-center">Galardonada a {{ $element->n_reconocimientos }} reconocimientos</h4>
                    <p>{{$element->reconocimientos}}</p>
                </div>
            </div>
        @endif
    </div>

    <div class="uk-container  uk-container-xlarge">
        <div class="uk-width-1-1" style="z-index: 100">
            <div class=" uk-grid-match" uk-grid>
                <div class="uk-width-3-5@m">
                    <div class="more-info uk-text-break">
                        <h1>CRÍTICAS</h1>
                        {!! $element->criticas !!}
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="critic-important">
                        <div class="critic-inside font_vietnam">
                            <div
                                class="uk-width-1 uk-text-left uk-padding uk-padding-remove-bottom uk-margin-small-bottom">
                                <img src="{{ asset('img/iconos/quote.png') }}" width="50px" height="50px">
                            </div>
                            <div class="uk-width-1 uk-padding uk-padding-remove-top uk-text-break">
                                {!! $element->quote !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-small">
        <div class="uk-container uk-container-xlarge uk-flex uk-flex-right">
            <button class="uk-button font_titles" style="color: black"> &#x3C; REGRESAR</button>
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

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
        It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script>
    //cantidad de imagenes cargadas
    var imgCount = 2;
    var index = 0;

    var items = [
        {
            src: '{{ asset('/img/fotoZinnia/Procella.png') }}',
            w: 0,
            h: 0,
            desc: "descripcion de ejemplo"
        },
        {
            src: '{{ asset('/img/fotoZinnia/Abril Cira.jpg') }}',
            w: 0,
            h: 0,
            desc: "descripcion de ejemplo"
        },
    ];

     //IMAGEN GALERIA

    //pre es el elemento donde se muestra la previsualizacion de la imagen seleccionada
    //"imagen-seleccionada" es el visualizador de la imagen
    var pre = document.getElementById("gal_high");
    var pre2 = document.getElementById("gal_low");

    //controla cuando se selecciona una imagen
    function clickImagen(){
        index++;
        if(index > imgCount-1){
            index = 0
        }
        //hace que se muestre la nueva imagen en el visualizador
        pre.src = items[index].src;
        pre2.src = items[index].src;

        setIndex(index);
    }

    //PHOTOSWIPE
    var pswpElement = document.querySelectorAll('.pswp')[0];

    function setIndex(i){
        index = i;
    }

    // build items array
    var openPhotoSwipe = function() {
        // define options (if needed)
        var options = {
            // optionName: 'option value'
            // for example:
            index: index // start at first slide
        };

        // Initializes and opens PhotoSwipe
        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

        gallery.listen('gettingData', function(index, item) {
            if (item.w < 1 || item.h < 1) { // unknown size
                var img = new Image();
                img.onload = function() { // will get size after load
                    item.w = this.width; // set image width
                    item.h = this.height; // set image height
                    gallery.invalidateCurrItems(); // reinit Items
                    gallery.updateSize(true); // reinit Items
                }
                img.src = item.src; // let's download image
            }
        });

        // Gallery starts closing
        gallery.listen('afterChange', function() {
            setIndex(gallery.getCurrentIndex());
            //hace que se muestre la nueva imagen en el visualizador
            pre.src = items[index].src;
            pre2.src = items[index].src;
        });

        gallery.init();
    };

    document.getElementById('imagen-seleccionada').onclick = openPhotoSwipe;
</script>
@endsection