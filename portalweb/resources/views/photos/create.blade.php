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
        {!! Form::file('foto',array('required'=>true,'maxlenght'=>100,'accept'=>"image/*")) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Subir', array("class" => "btn btn-primary")) !!}
    </div>
</div>
{!! Form::close() !!}