<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CETAP Avansys-Perú</title>
    <!-- Preloader-->
    <link rel="stylesheet" href="{{asset('css/introLoader.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/helpers/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/helpers/spin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.introLoader.min.js')}}"></script>
    <!-- Loader -->
    <link rel="stylesheet" href="{{asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/PgwSlider/pgwslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/isotope.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css') }}">
    <link rel="stylesheet" href="{{asset('css/publicacion.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilo_opcional.css')}}">
    <script type="text/javascript" src="{{asset('plugins/jquery-ui-1.11.3/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/PgwSlider/pgwslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    @yield('javascript')
</head>
<body>
<div id="element"></div>
<header>
    <div class="container">
        <div class="row">
            <img id="img2" src="{{asset('images/logo.png')}}" alt="" class="text-center" height="150px">
        </div>
    </div>
</header>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            -<a class="navbar-brand" href="{{ url('/') }}" id="inicio">Avansys - Perú</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="items nav navbar-nav ">
                @yield('menu')
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="separador"></div>
<section>
    <article id="principal" class="row">
        @yield('contenido')
    </article>
    <aside>
        <div class="subsection1">
            <div class="cabecera"><p id="titulo2">Fanpage de AvansysPerú</p></div>
            <div class="contenedor">
                <div id="fb-root"></div>
                <div class="fb-page" data-href="https://www.facebook.com/avansys.peru.tacna/" data-tabs="timeline"
                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/avansys.peru.tacna/"><a
                                    href="https://www.facebook.com/avansys.peru.tacna/">Centro de Capacitacion en
                                Infomatica Empresarial Avansys - Peru</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="subsection2">
            <div class="cabecera">
                <p>¿Ya usaste nuestra Aula Virtual?</p>
            </div>
            <div class="contenedor">
                Haz de tu experiencia de aprendizaje lo más provechoza posible. Si te matriculas a un curso en Avansys
                Perú, solicita tu cuenta para ingresar al aula virtual.
                <img src="{{asset('/images/aula_virtual.png')}}" alt="">
            </div>
        </div>

    </aside>
</section>
<footer>
    @Copyright 2016 - Todos los derechos reservados <br>
    Telefono: 052 – 60 89 27 <br>
    Desarrollado por <a target="_blank" href="https://www.linkedin.com/in/kevin-mike-herrera-vega-0330b497" style="text-decoration: none; color:white;">Kevin Mike Herrera Vega</a>
</footer>
</body>
</html>