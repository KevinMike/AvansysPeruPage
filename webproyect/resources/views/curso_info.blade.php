@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
    <li><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
    <li class="active"><a href="{{ url('/cursos') }}" id="cursos">Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
    <li><a target="_blank" href="/aula" id="aula_virtual">Aula Virtual</a></li>
    @endsection

    @section('contenido')
            <!-- container -->
    <div class="row">

        <!-- Article main content -->
        <article class="col-md-12 maincontent">
            <br/>
            <br/>
            <h2>{{$curso->nombre}}</h2>
            @if($curso->imagen_curso)
                <div class="text-center col-md-12">
                    <img src="{{asset('media/cursos/'.$curso->imagen_curso)}}" alt="{{$curso->titulo}}">
                    <br/>
                    <br/>
                </div>
            @endif
            <table class="table">
                <tr>
                    <td><b>Fecha de Inicio: </b></td>
                    <td>{{ date('d-m-Y', strtotime($curso->fecha_inicio)) }}</td>
                </tr>
                <tr>
                    <td><b>Duracion: </b></td>
                    <td>{{$curso->duracion}}</td>
                </tr>
                <tr>
                    <td><b>Frecuencia: </b></td>
                    <td>{{$curso->frecuencia}}</td>
                </tr>
                <tr>
                    <td><b>Costo: </b></td>
                    <td>{{$curso->costo}} soles</td>
                </tr>
                <tr>
                    <td><b>Horario: </b></td>
                    <td>{{$curso->horario}}</td>
                </tr>
            </table>
            <h2>Descripción del Curso</h2>
            <p>{!! nl2br($curso->descripcion) !!}</p>
            <h2>Pre-inscribete a {{$curso->nombre}}</h2>
            {!! Form::open(["url" => "/guardar_preinscripcion",'class'=>"form-horizontal", 'role'=>"form"]) !!}
            <div class="form-group">
                {!! Form::label('dni','Nro de DNI',array('class'=>"col-md-4 control-label")) !!}
                <div class="col-md-6">
                    {!! Form::text('dni',null,['class' => 'form-control','placeholder'=>'DNI','maxlength' => '8','required' => true]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('nombre','Nombre',array('class'=>"col-md-4 control-label")) !!}
                <div class="col-md-6">
                    {!! Form::text('nombre',null,['class' => 'form-control','placeholder'=>'NOMBRES','required' => true,'maxlength' => '30']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('apellido','Apellido',array('class'=>"col-md-4 control-label")) !!}
                <div class="col-md-6">
                    {!! Form::text('apellido',null,['class' => 'form-control','placeholder'=>'APELLIDOS','required' => true,'maxlength' => '30']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('telefono','Telefono/Celular',array('class'=>"col-md-4 control-label")) !!}
                <div class="col-md-6">
                    {!! Form::text('telefono',null,['class' => 'form-control','placeholder'=>'TELEFONO O CELULAR','required' => true,'maxlength' => '15']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email','Correo Electronico',array('class'=>"col-md-4 control-label")) !!}
                <div class="col-md-6">
                    {!! Form::email('email',null,['class' => 'form-control','placeholder'=>'CORREO ELECTRÓNICO','required' => true,'maxlength' => '50']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('interes','Interés',array('class'=>"col-md-4 control-label")) !!}
                <div class="col-md-6">
                    <select name="interes" id="interes" class="form-control">
                        @foreach ($interes as $interes)
                            <option value="{{$interes}}">{{$interes}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <select name="curso" id="curso" class="form-control" style="visibility:hidden">
                <option value="{{$curso->id}}">{{$curso->nombre}} /
                    <small>Inicio</small> {{$curso->fecha_inicio}}</option>
            </select>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Completar Preinscripción',['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </article>
        <!-- /Article -->
        <!-- /container -->
@endsection