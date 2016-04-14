@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" >Inicio</a></li>
    <li ><a href="{{ url('/informacion') }}" >Quienes Somos</a></li>
    <li><a href="{{ url('/post') }}" >Noticias</a></li>
    <li class="active" ><a href="{{ url('/cursos') }}" >Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" >Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" >Contáctanos</a></li>
    <li><a target="_blank" href="http://home.lan:90/moodle/" >Aula Virtual</a></li>
@endsection

@section('cabecera')
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Cursos</h1>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('contenido')
    <div id="courses">
        <section class="container">
            <h3>Cursos Abiertos</h3>
            <?php $i = 1; $row=3; $open=false; ?>
            @foreach($curso as $item)
                <?php if($i==1 || ($i-1)%$row==0){ echo'<div class="row">'; $open=true; } ?>
                <div class="col-md-4">
                    <div class="featured-box">
                        <i class="fa fa-cogs fa-2x"></i>
                        <div class="text">
                            <h3><a href="cursos/{{$item->id}}" style="text-decoration: none">{{$item->nombre}}</a></h3>
                            <ul>
                                <li><b>Fecha de Inicio: </b>{{ date('d-m-Y', strtotime($item->fecha_inicio)) }}</li>
                                <li><b>Duracion: </b>{{$item->duracion}}</li>
                                <li><b>Frecuencia: </b>{{$item->frecuencia}}</li>
                                <li><b>Costo: </b>{{$item->costo}} soles</li>
                                <li><b>Horario: </b>{{$item->horario}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if($i%$row==0){ echo'</div>'; $open=false; } $i++; ?>
            @endforeach
            <?php if($open){ echo'</div>'; } ?>
        </section>
    </div>
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- Article content -->
            <section class="col-sm-12 maincontent">
                <h3>Pre-inscribete a los cursos acá</h3>
                <p>La preinscripción sirve para que nosotros podamos enviarte más información del curso de tu interés. </p>
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
                    {!! Form::label('curso','Curso',array('class'=>"col-md-4 control-label")) !!}
                    <div class="col-md-6">
                        <select name="curso" id="curso" class="form-control">
                            @foreach ($curso as $item)
                                <option value="{{$item->id}}">{{$item->nombre}} / <small>Inicio </small> {{$item->fecha_inicio}}</option>
                            @endforeach
                        </select>
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
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Completar Preinscripción',['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>
    <!-- /container -->
@endsection