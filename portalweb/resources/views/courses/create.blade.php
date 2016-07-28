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
        {!! Form::file('imagen_curso',array('maxlenght'=>100,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('logo_curso', 'Logo del Curso',array('class'=>"col-md-4 control-label")) !!}
    <div class="col-md-6">
        {!! Form::file('logo_curso',array('maxlenght'=>100,'required'=>true,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Registrar Curso',['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!!Form::close()!!}