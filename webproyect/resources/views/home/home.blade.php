@extends('app')

@section('content')
	<style>
		tfoot input {
			width: 100%;
			padding: 3px;
			box-sizing: border-box;
		}
	</style>
<div class="container-fluid">
	<div class="container">
		@if($errors->has())
			<div class="alert-box alert">
				<!--recorremos los errores en un loop y los mostramos-->
				@foreach ($errors->all(':message') as $message)
					<div class="alert alert-danger" role="alert">{{ $message }}</div>
				@endforeach
			</div>
		@endif
		@if(Session::has('confirm'))
			<div class="alert-box success round">
				<div class="alert alert-success" role="alert">{{ Session::get('confirm') }}</div>
			</div>
		@endif
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
				<div class="panel-body" id="tabs">
                    <ul>
                        <li><a href="#tabs-1">PUBLICACIONES</a></li>
                        <li><a href="#tabs-2">CURSOS</a></li>
                        <li><a href="#tabs-3">FOTOS</a></li>
                        <li><a href="#tabs-4">PREINSCRIPCIONES</a></li>
                    </ul>


                    <div id="tabs-1">

                    	<h1><b><i class="fa fa-file-text"></i> PUBLICACIONES</b></h1>
                    	<!--<h4><b>Insertar enlaces en los post</b></h4>
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

						<h4><b>Registrar Publicaciones</b></h4>

						{!! Form::open(["url" => "/home/add_post",'class'=>"form-horizontal", 'role'=>"form", 'files' => true]) !!}
							<div class="form-group">
								{!! Form::label('titulo','Titulo',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
								{!! Form::text('titulo',null,['class' => 'form-control','required' => true,"maxlenght" => '80','id' => 'titulo']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('texto','Contenido',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
								{!! Form::textarea('texto',null,['class' => 'form-control', 'required' => true, 'id'=>'editor']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('imagen', 'Imagen',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::file('imagen',array('maxlenght'=>100)) !!}
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Registrar Publicación',['class' => 'btn btn-primary']) !!}
								</div>
							</div>
						{!! Form::close() !!}

						<h4><b>Editar o Eliminar publicaciones</b></h4>
						{!! Form::open(array('class'=>"form-horizontal", 'role'=>"form")) !!}
						<div class="form-group">
							{!! Form::label('post','Titulo',array('class'=>"col-md-4 control-label")) !!}
							<div class="col-md-6">
								<select name="post" id="select_post" class="form-control chosen-select ">
								@foreach ($post as $item)
									<option value="{{$item->id}}">{{$item->titulo}} - {{$item->updated_at}}</option>
								@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Actualizar',array("onClick" => "this.form.action = 'home/update2'",'class' => 'btn btn-success','id'=>'actualizar_post')) !!}
								{!! Form::submit('Eliminar',array("onClick" => "this.form.action = 'home/delete_post'",'class' => 'btn btn-danger','id'=>'eliminar_post')) !!}
							</div>
						</div>
						{!! Form::close() !!}

                    </div>

                    <div id="tabs-2">

					    <h1><b><i class="fa fa-book"></i> CURSOS</b></h1>
					    <h4><b>Registrar Cursos</b></h4>
					    {!!Form::open(array('url' => 'home/add_curso','class'=>"form-horizontal", 'role'=>"form",'files' => true)) !!}
							<div class="form-group">
								{!! Form::label('nombre','Nombre del Curso',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('nombre',null,array('class'=>"form-control","maxlenght" => '30','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('descripcion','Descripción',array('class'=>"col-md-4 control-label ")) !!}
								<div class="col-md-6">
									{!! Form::textarea('descripcion',null,array('class'=>"textarea",)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('frecuencia','Frecuencia',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('frecuencia',null,array('class'=>"form-control","maxlenght" => '100','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('horario','Horas',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('horario',null,array('class'=>"form-control","maxlenght" => '100','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('fecha_inicio','Fecha de Inicio',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('fecha_inicio',null,array('class'=>"form-control",'required'=>true,'id'=>"datepicker")) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('costo','Costo',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('costo',null,array('class'=>"form-control",'required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('duracion','Duración',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('duracion',null,array('class'=>"form-control","maxlenght" => '50','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('imagen_curso', 'Imagen del Curso',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::file('imagen_curso',array('maxlenght'=>100)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('logo_curso', 'Logo del Curso',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::file('logo_curso',array('maxlenght'=>100,'required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Registrar Curso',['class' => 'btn btn-primary']) !!}
								</div>
							</div>
					    {!!Form::close()!!}

					    <h4><b>Editar y Eliminar Cursos</b></h4>
						{!! Form::open(array('class'=>"form-horizontal", 'role'=>"form")) !!}
							<div class="form-group">
								{!! Form::label('curso','Curso',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									<select name="curso" id="select_curso" class="form-control chosen-select">
										@foreach($curso as $item)
											<option value="{{$item->id}}">{{$item->nombre}} - Inicio: {{date('d-m-Y', strtotime($item->fecha_inicio))}}, {{$item->frecuencia}}, {{$item->horario}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Actualizar', array("onClick" => "this.form.action = 'home/update'",'class' => 'btn btn-success','id'=>'actualizar_curso')) !!}
									{!! Form::submit('Eliminar', array("onClick" => "this.form.action = 'home/delete_curso'",'class' => 'btn btn-danger','id'=>'eliminar_curso')) !!}
								</div>
							</div>
						{!! Form::close() !!}

                    </div>

                    <div id="tabs-3">

                        <h1><b><i class="fa fa-camera"></i> GALERIA DE FOTOS</b></h1>
					   <h4><b>Subir fotos</b></h4>

	                    {!! Form::open(array('url' => 'foto/guardar', 'class'=>"form-horizontal", 'role'=>"form", 'files' => true,'method'=>'POST')) !!}
			                <div class="form-group">
				                {!! Form::label('descripcion', 'Descripción',array('class'=>"col-md-4 control-label")) !!}
				                <div class="col-md-6">
				                {!! Form::text('descripcion', null,array('class'=>"form-control",'required'=>true,'maxlenght'=>50)) !!}
				            	</div>
			            	</div>
							<div class="form-group">
								{!! Form::label('categoria','Categorìa',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									<select name="categoria" class="form-control chosen-select">
										@foreach($categoria as $item)
											<option value="{{$item->id}}">{{$item->nombre}}</option>
										@endforeach
									</select>
								</div>
							</div>
			                <div class="form-group">
				                {!! Form::label('foto', 'Foto',array('class'=>"col-md-4 control-label")) !!}
					            <div class="col-md-6">
					            	{!! Form::file('foto',array('required'=>true,'maxlenght'=>100)) !!}
					            </div>
				        	</div>
				        	<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Subir', array("class" => "btn btn-primary")) !!}
								</div>
							</div>
		                {!! Form::close() !!}
						
			           	<h4><b>Eliminar Fotos</b></h4>
			           	{!! Form::open(array('url' => "foto/eliminar", 'class'=>"form-horizontal", 'role'=>"form", 'files' => true, 'method'=>"post")) !!}
			              	<div class="form-group">
								{!! Form::label('descripcion','Descripción',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									<select id="select_foto" name="descripcion" class="form-control chosen-select">
										@foreach($foto as $item)
											<option value="{{$item->id}}">{{$item->descripcion}}</option>
										@endforeach
									</select>
								</div>
							</div>
				        	<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Eliminar', array("class" => "btn btn-danger",'id'=>'eliminar_foto')) !!}
								</div>
							</div>
		                {!! Form::close() !!}

                    </div>

                    <div id="tabs-4">

						<h1><b><i class="fa fa-search"></i> PRE-INSCRIPCIONES</b></h1>
						<br>
						<a href="" id="btnExport" class="btn btn-primary"><i class="fa fa-table"></i> Exportar a Excel</a>
						<br/>
						<br/>
						<table id="example" class="display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>DNI</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Telefono</th>
									<th>Email</th>
									<th>Interés</th>
									<th>Curso</th>
									<th>Fecha Inicio</th>
									<th>-</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>DNI</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Telefono</th>
									<th>Email</th>
									<th>Interés</th>
									<th>Curso</th>
									<th>Fecha Inicio</th>
									<th>-</th>
								</tr>
							</tfoot>
							<tbody>

								@foreach($preinscripciones as $item)
									<tr id="fila_{{$item->id}}">
										<td>{{$item->dni}}</td>
										<td>{{$item->nombre}}</td>
										<td>{{$item->apellido}}</td>
										<td>{{$item->telefono}}</td>
										<td>{{$item->email}}</td>
										<td>{{$item->interes}}</td>
										<td>{{$item->curso_id->nombre}}</td>
										<td>{{$item->curso_id->fecha_inicio}}</td>
										<td><a href="#" onclick="eliminar_fila('{{$item->id}}')"><i class="fa fa-minus-circle"></i></a></td>
									</tr>
								@endforeach
							</tbody>
						</table>

                    </div>

			</div>
		</div>
	</div>
</div>
@endsection

