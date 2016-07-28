@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="container">
            @if($errors->has())
                <div class="alert-box alert">
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
                        <h4><b>Registrar Publicaciones</b></h4>
                            @include('posts.create')
                        <h4><b>Editar o Eliminar publicaciones</b></h4>
                            @include('posts.delete')
                    </div>
                    <div id="tabs-2">
                        <h1><b><i class="fa fa-book"></i> CURSOS</b></h1>
                        <h4><b>Registrar Cursos</b></h4>
                            @include('courses.create')
                        <h4><b>Editar y Eliminar Cursos</b></h4>
                            @include('courses.delete')
                    </div>
                    <div id="tabs-3">
                        <h1><b><i class="fa fa-camera"></i> GALERIA DE FOTOS</b></h1>
                        <h4><b>Subir fotos</b></h4>
                            @include('posts.create')
                        <h4><b>Eliminar Fotos</b></h4>
                            @include('posts.delete')
                    </div>
                    <div id="tabs-4">
                        <h1><b><i class="fa fa-search"></i> PRE-INSCRIPCIONES</b></h1>
                        <br>
                        <a href="" id="btnExport" class="btn btn-primary"><i class="fa fa-table"></i> Exportar a
                            Excel</a>
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
                                    <td><a href="#" onclick="eliminar_fila('{{$item->id}}')"><i
                                                    class="fa fa-minus-circle"></i></a></td>
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

