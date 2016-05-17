@extends('master')
@section('menu')
	<li class="active" ><a href="{{ url('/') }}" id="inicio" >Inicio</a></li>
	<li><a href="{{ url('/informacion') }}" id="quienes_somos" >Quienes Somos</a></li>
	<li><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
	<li><a href="{{ url('/cursos') }}" id ="cursos" >Cursos</a></li>
	<li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
	<li><a href="{{ url('/contacto')}}" id="contactanos" >Contáctanos</a></li>
	<li><a target="_blank" href="http://home.lan:90/moodle/" id="aula_virtual">Aula Virtual</a></li>
@stop

@section('contenido')
        <div class="slider">
            <ul class="pgwSlider">
                <li><img src="{{asset('images/slider/slide-one.jpg')}}" alt="Texto alternativo" data-description="Eiffel Tower and Champ de Mars"></li>
                <li><img src="{{asset('images/slider/slide-one.jpg')}}" alt="Texto Alternativo" ></li>
                <li><img src="{{asset('images/slider/slide-one.jpg')}}"><span>Shanghai, China</span></li>
                <li><img src="{{asset('images/slider/slide-one.jpg')}}"><span>New York, NY, USA</span></li>
            </ul>
        </div>

        <h1>Noticias</h1>
        @foreach ($post as $item)
            <div class="publicacion">
                <div class="titulo">
                    <h2>{{ $item->titulo }}</h2>
                </div>
                <div class="p_contenido">
                    <div class="fecha">
                        {{$item->updated_at}}
                    </div>
                    <div class="texto">
                        <!--{!! nl2br(htmlentities($item->texto)) !!}-->
                        {!! nl2br($item->texto) !!}
                    </div>
                    <div class="comentarios">
                        <div id="fb-root"></div>
                        <div class="fb-comments" data-href="http://enei.tacna.com/{{ $item->id  }}" data-numposts="5" width="100%"></div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        <?php echo $post->render(); ?>
@endsection
@section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=1608437069443308";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            var pgwSlider = $('.pgwSlider').pgwSlider({
                displayControls : true,
                transitionEffect: 'fading',
                selectionMode:	'mouveOver',
            });
        });
    </script>
@endsection