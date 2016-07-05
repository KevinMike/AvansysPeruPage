@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
    <li class="active"><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" id="cursos">Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
    <li><a target="_blank" href="/aula" id="aula_virtual">Aula Virtual</a></li>
    @endsection

    @section('contenido')
    <?php
    $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    ?>
    <!-- container -->
    <div class="row">

        <!-- Article main content -->
        <article class="col-md-12 maincontent text-justify">
            <br/>
            <br/>
            <h2 class="text-center">{{ $item->titulo }}</h2>
            <strong class="text-left">{{$dias[date('w',strtotime($item->updated_at))]." ".date('d',strtotime($item->updated_at))." de ".$meses[date('n',strtotime($item->updated_at))-1]. " del ".date('Y',strtotime($item->updated_at))." , ".date("g:i a",strtotime($item->updated_at))}}</strong>
            <br>
            <br>
            @if($item->imagen)
                <div class="text-center col-md-12">
                    <img src="{{asset('media/posts/'.$item->imagen)}}" alt="{{$item->titulo}}">
                    <br/>
                    <br/>
                </div>

            @endif
            <p>{!! nl2br($item->texto) !!}</p>
            <br>
            <h4>Comentarios</h4>
            <div class="comentarios">
                <div id="fb-root"></div>
                <div class="fb-comments" data-href="http://enei.tacna.com/{{ $item->id  }}" data-numposts="5"
                     width="100%"></div>
            </div>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-md-12 sidebar sidebar-right">
            <br>
            <br>
            @if($next)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure>
                                <time datetime="">{{$dias[date('w',strtotime($next->updated_at))]." ".date('d',strtotime($next->updated_at))." de ".$meses[date('n',strtotime($next->updated_at))-1]. " del ".date('Y',strtotime($next->updated_at))}}</time>
                                @if($next->imagen)
                                    <img src="{{asset('media/posts/'.$next->imagen)}}" alt="{{$next->titulo}}">
                                @else
                                    <img src="{{asset('images/logo.jpg')}}" alt="{{$next->titulo}}">
                                @endif
                            </figure>
                            <a href="/pagina/public/posts/{{$next->id}}" style="text-decoration: none;">
                                <div class="caption maxheight2">
                                    <div class="box_inner" style=" text-transform: uppercase">
                                        <strong><i class="fa fa-arrow-circle-left"></i></strong> {{$next->titulo}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            @if($previus)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure>
                                <time datetime="">{{$dias[date('w',strtotime($previus->updated_at))]." ".date('d',strtotime($previus->updated_at))." de ".$meses[date('n',strtotime($previus->updated_at))-1]. " del ".date('Y',strtotime($previus->updated_at))}}</time>
                                @if($previus->imagen)
                                    <img src="{{asset('media/posts/'.$previus->imagen)}}" alt="{{$previus->titulo}}">
                                @else
                                    <img src="{{asset('images/logo.jpg')}}" alt="{{$previus->titulo}}">
                                @endif
                            </figure>
                            <a href="/pagina/public/posts/{{$previus->id}}" style="text-decoration: none;">
                                <div class="caption maxheight2">
                                    <div class="box_inner" style=" text-transform: uppercase">
                                        <strong><i class="fa fa-arrow-circle-right"></i></strong> {{$previus->titulo}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </aside>
        <!-- /Sidebar -->
    </div>
    <!-- /container -->
@endsection
@section('javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=1608437069443308";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        });
    </script>
@endsection