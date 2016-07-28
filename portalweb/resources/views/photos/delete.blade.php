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