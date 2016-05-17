@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" id="inicio" >Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" id="quienes_somos" >Quienes Somos</a></li>
    <li><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" id ="cursos" >Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
    <li class="active"><a href="{{ url('/contacto')}}" id="contactanos" >Contáctanos</a></li>
    <li><a target="_blank" href="http://home.lan:90/moodle/" id="aula_virtual">Aula Virtual</a></li>
@endsection

@section('contenido')
    <!-- container -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Tu Mensaje</h3>
                <p>
                    Mandanos un mensaje si deseas información, te responderemos a la brevedad.
                </p>
                {!! Form::open(['url' => '/send','method'=>'post']) !!}
                    <div class="form-group">
                        {!! Form::label('email','Email',array('class'=>"col-md-4 control-label")) !!}
                        {!! Form::email('email',null,['class' => 'form-control','required' => true]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('subject','Asunto',array('class'=>"col-md-4 control-label")) !!}
                        {!! Form::text('subject',null, ['class' => 'form-control','required' => true]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body','Mensaje',array('class'=>"col-md-4 control-label")) !!}
                        {!! Form::textarea('body',null, ['class' => 'form-control','required' => true,'id'=> 'message']) !!}
                    </div>
                    {!! Form::submit('Enviar', ['class' => 'btn btn-two' ] ) !!}<p><br/></p>
                {!! Form::close() !!}
                <p><br></p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title">Dirección</h3>
                        <div class="contact-info">
                            <h5>Dirección</h5>
                            <p>Tacna, Distrito Gregorio Albarracín <br> Asoc. Las Viñas Mz “B” Lote 4 <br>Referencia: Pasando SENASA a cuadra y media antes de llegar al mercado CENEPA</p>

                            <h5>Email</h5>
                            <p>informes@avansysperu.com <br> gerencia@avansysperu.com</p>

                            <h5>Telefono</h5>
                            <p>Fijo: 052 – 60 89 27 <br> Celular: 930 77 37 17</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="section-title">Atención</h3>
                        <div class="contact-info">
                            <h5>Lunes - Viernes</h5>
                            <p>09:00 AM - 6:30 PM</p>

                            <h5>Sábado</h5>
                            <p>10:00 AM - 1:00 PM</p>

                            <h5>Domingo</h5>
                            <p>Sin Atención</p>
                        </div>
                    </div>
                </div>
                <h3 class="section-title">Ubicanos en...</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2spe!4v1463494503304!6m8!1m7!1smC041MgKAVJgfq5EKsOHVg!2m2!1d-18.03145126902847!2d-70.25128430640441!3f271.7646457334082!4f-2.8925925203103873!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    <!-- /container -->

    <!-- Ventana Modal de Confirmación-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Enhorabuena!!!</h4>
                </div>
                <div class="modal-body">
                    <p>Su mensaje ha sido enviado, le responderemos en breve.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Siguiente</button>
                </div>
            </div>

        </div>
    </div><!-- fin de la ventana modal -->

@endsection

@section('javascript')
    <script type="text/javascript">
        @if($status)
            $("#myModal").on("show", function() { // wire up the OK button to dismiss the modal when shown
            $("#myModal a.btn").on("click", function(e) {
                console.log("button pressed"); // just as an example...
                $("#myModal").modal('hide'); // dismiss the dialog
            });
        });
        $("#myModal").on("hide", function() { // remove the event listeners when the dialog is dismissed
            $("#myModal a.btn").off("click");
        });
        $("#myModal").on("hidden", function() { // remove the actual elements from the DOM when fully hidden
            $("#myModal").remove();
        });
        $("#myModal").modal({ // wire up the actual modal functionality and show the dialog
            "backdrop" : "static",
            "keyboard" : true,
            "show" : true // ensure the modal is shown immediately
        });
        @endif
    </script>
@endsection