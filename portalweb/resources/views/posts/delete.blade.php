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