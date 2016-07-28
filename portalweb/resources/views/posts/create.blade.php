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
        {!! Form::file('imagen',array('maxlenght'=>100,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Registrar Publicación',['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}