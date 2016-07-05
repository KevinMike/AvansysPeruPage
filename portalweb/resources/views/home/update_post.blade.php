@extends('app')
@section('content')
	  <!--Agregar enlaces a las publicaciones-->
		<script type="text/javascript">
            $(function(){
				initSample();
                $('#atras').click(function(){
                    parent.history.back();
                    return false;
                });
            });
            function agregar_enlace () {
				var link = document.getElementById("link").value;
				var nombre = document.getElementById("nombre").value;
				var cadena = "<a target='_blank' href='"+ link +"'>"+nombre+"</a>";
				document.getElementById("texto").value = document.getElementById("texto").value + cadena;
			}
		</script>
		<div class="container">
		<h1>ACTUALIZAR PUBLICACIONES</h1>
		<!--<h3>Insertar enlaces en los post</h3>
		<form class="form-horizontal" role="form" >
        	<div class="form-group">
	            <label class="col-md-4 control-label" for="link">Enlace: </label>
	            <div class="col-md-6">
	            	<input class="form-control" type="text" id="link">
	            </div>
        	</div>

       		<div class="form-group">
       			<label class="col-md-4 control-label" for="nombre">Nombre del Enlace: </label>
            	<div class="col-md-6">
                	<input class="form-control" type="text" id = "nombre"/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
					<input class="btn btn-primary" type="button" onClick="agregar_enlace()" value="Agregar">
                </div>
            </div>
        </form>-->

		<h3>EDITAR</h3>

		{!! Form::open(["url" => "/home/update_post",'class'=>"form-horizontal", 'role'=>"form",'files' => true]) !!}
			{!! Form::text('id',$post->id,['hidden'=>true]) !!}
			<div class="form-group">
				{!! Form::label('titulo','Titulo',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('titulo',$post->titulo,['class' => 'form-control','required' => true,"maxlenght" => '80','id' => 'titulo']) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('texto','Contenido',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::textarea('texto',$post->texto,['class' => 'form-control', 'required' => true,'id'=>'editor']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('imagen', 'Imagen',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::file('imagen',array('maxlenght'=>100,'accept'=>"image/*")) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
				    {!! Form::submit('Registrar Publicación',['class' => 'btn btn-primary']) !!}
                    <input type="button" value="Atras" class="btn btn-warning" id="atras"/>
				</div>
			</div>
		{!! Form::close() !!}
		</div>
@endsection