@extends('master')
@section('menu')
    <li ><a href="{{ url('/') }}" >Inicio</a></li>
    <li><a href="{{ url('/informacion') }}" >Quienes Somos</a></li>
    <li><a href="{{ url('/post') }}" >Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" >Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" >Fotos</a></li>
    <li class="active" ><a href="{{ url('/contacto')}}" >Contáctanos</a></li>
    <li><a target="_blank" href="http://home.lan:90/moodle/" >Aula Virtual</a></li>
@endsection

@section('cabecera')
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Contáctanos</h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('contenido')
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Tu Mensaje</h3>
                <p>
                    Mandanos un mensaje si deseas información, te responderemos a la brevedad.
                </p>
                {!! Form::open(['url' => '/send','method'=>'post']) !!}
                    <div class="form-group">
                        {!! Form::label('email','Correro Electrónico',array('class'=>"col-md-4 control-label")) !!}
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d948.5679662211528!2d-70.24937926907425!3d-18.012582451403556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf64fb272bef%3A0xcf6ba61f56564cdb!2sSan+Martin+520%2C+Tacna%2C+Per%C3%BA!5e0!3m2!1ses!2ses!4v1426265136737" width="100%" height="450" frameborder="0" style="border:0"></iframe>
            </div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqJ2HTtOoBl9P81kcVaQyfv_dDAwCcxGc&sensor=TRUE" type="text/javascript"></script>
    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(-18.0124466, -70.2494081),
                zoom: 20,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                    mapOptions);
        }
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