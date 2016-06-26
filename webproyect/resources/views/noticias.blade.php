@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
    <li class="active"><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" id="cursos">Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
    <li><a target="_blank" href="/au" id="aula_virtual">Aula Virtual</a></li>
@endsection

<?php

$dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>
@section('contenido')
    <h2><span>Últimas Noticias</span></h2>
    <?php $i = 1; $row = 3; $open = false; ?>
    @foreach($noticias as $item)
        <?php if ($i == 1 || ($i - 1) % $row == 0) {
            echo '<div class="row">';
            $open = true;
        } ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <div class="newsBox">
                <div class="thumbnail">
                    <figure>
                        <time datetime="">{{$dias[date('w',strtotime($item->updated_at))]." ".date('d',strtotime($item->updated_at))." de ".$meses[date('n',strtotime($item->updated_at))-1]. " del ".date('Y',strtotime($item->updated_at))}}</time>
                        @if($item->imagen)
                            <img src="{{asset('media/posts/'.$item->imagen)}}" alt="{{$item->titulo}}" height="200px">
                        @else
                            <img src="{{asset('images/logo.jpg')}}" alt="{{$item->titulo}}">
                        @endif
                    </figure>
                    <a href="posts/{{$item->id}}" style="text-decoration: none; color: darkred">
                        <div>
                            <div class="box_inner" style=" text-transform: uppercase">
                                <strong>{{$item->titulo}}</strong>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php if ($i % $row == 0) {
            echo '</div>';
            $open = false;
        } $i++; ?>
    @endforeach
    <?php if ($open) {
        echo '</div>';
    } ?>
    <div class="text-center">
        <?php echo $noticias->render(); ?>
    </div>

@endsection