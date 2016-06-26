@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" >Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" >Quienes Somos</a></li>
    <li ><a href="{{ url('/post') }}" >Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" >Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" >Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" >Contáctanos</a></li>
    <li><a target="_blank" href="/aula" >Aula Virtual</a></li>
@endsection

@section('contenido')
    <div class="container" >
        <div class="text-center">
            <h1>Página Web No Encontrada</h1>
            <p><img src="{{asset('images/404.png')}}" alt="" ></p>
        </div>

    </div>

@endsection