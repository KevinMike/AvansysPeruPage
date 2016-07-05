@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" >Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" >Quienes Somos</a></li>
    <li class="active"><a href="{{ url('/post') }}" >Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" >Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" >Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" >Contáctanos</a></li>
    <li><a target="_blank" href="/aula" >Aula Virtual</a></li>
@endsection

@section('cabecera')
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Noticias</h1>
                </div>
            </div>
        </div>
    </header>
@endsection
<?php

    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>
@section('contenido')
    <section class="news-box">
        <div class="container">
            <h2><span>Últimas Noticias</span></h2>
            <?php $i = 1; $row=4; $open=false; ?>
                @foreach($noticias as $item)
                <?php if($i==1 || ($i-1)%$row==0){ echo'<div class="row">'; $open=true; } ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" >
                    <div class="newsBox">
                        <div class="thumbnail" style="position:relative; overflow:  hidden; height: 260px;">
                            <figure><time datetime="">{{$dias[date('w',strtotime($item->updated_at))]." ".date('d',strtotime($item->updated_at))." de ".$meses[date('n',strtotime($item->updated_at))-1]. " del ".date('Y',strtotime($item->updated_at))}}</time>
                                @if($item->imagen)
                                    <img src="{{asset('media/posts/'.$item->imagen)}}" alt="{{$item->titulo}}" height="200px">
                                @else
                                    <img src="{{asset('images/logo.jpg')}}" alt="{{$item->titulo}}">
                                @endif
                            </figure>
                            <a href="posts/{{$item->id}}" style="text-decoration: none; position: absolute; bottom: 0px; width: 100%"><div class="caption maxheight2"><div class="box_inner" style=" text-transform: uppercase">
                                    {{$item->titulo}}
                                </div></div></a>
                        </div>
                    </div>
                </div>
                <?php if($i%$row==0){ echo'</div>'; $open=false; } $i++; ?>
                @endforeach
            <?php if($open){ echo'</div>'; } ?>
            <div class="text-center">
                <?php echo $noticias->render(); ?>
            </div>
        </div>
    </section>

@endsection