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