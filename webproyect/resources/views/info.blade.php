@extends('master')
@section('menu')
    <li><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
    <li class="active"><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
    <li><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
    <li><a href="{{ url('/cursos') }}" id="cursos">Cursos</a></li>
    <li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
    <li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
    <li><a target="_blank" href="/aula" id="aula_virtual">Aula Virtual</a></li>
    @endsection

    @section('contenido')
            <!-- container -->
    <!-- main content -->
    <div class="col-lg-8 col-sm-12">
        <h3>¿Quienes Somos?</h3>
        <p>Consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex
            quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil
            nesciunt unde veniam magnam repudiandae sapiente.</p>
        <h3>Nuestros Logros</h3>
        <strong>2014</strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid
            molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta
            accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos
            aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
        <strong>2013</strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid
            molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta
            accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos
            aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
        <strong>2012</strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid
            molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta
            accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos
            aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
        <strong>2011</strong>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid
            molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta
            accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos
            aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
    </div>
    <!-- /main -->

    <!-- Sidebar -->
    <div class="col-lg-4 col-sm-12">
        <div class="panel">
            <h4>Servicios a los Participantes</h4>
            <ul class="list-unstyled list-spaces">
                <li><a href="">Responsive Design</a><br>
                    <span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span>
                </li>
                <li><a href="">HTML5, CSS3 and JavaScript</a><br>
                    <span class="small text-muted">Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</span>
                </li>
                <li><a href="">Bootstrap</a><br>
                    <span class="small text-muted">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span>
                </li>
                <li><a href="">Clean Template</a><br>
                    <span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span>
                </li>
                <li><a href="">Premium Quality</a><br>
                    <span class="small text-muted">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</span>
                </li>
            </ul>
        </div>
    </div>
@endsection