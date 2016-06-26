<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- Preloader-->
    <link rel="stylesheet" href="{{asset('css/introLoader.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/helpers/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/helpers/spin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.introLoader.min.js')}}"></script>
    <!-- Loader -->
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jquery-ui-1.11.3/jquery-ui.min.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script type="text/javascript" src="//cdn.ckeditor.com/4.5.8/full/ckeditor.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('plugins/jquery-ui-1.11.3/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chosen.jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.battatech.excelexport.min.js')}}"></script>
    <script type="text/javascript">
        $(document).on('ready',function () {
            $("#element").introLoader({

                animation: {
                    name: 'simpleLoader',
                    options: {
                        exitFx:'fadeOut',
                        ease: "linear",
                        style: 'light',
                        delayBefore: 500, //delay time in milliseconds
                        exitTime: 300
                    }
                },

                spinJs: {}

            });

            CKEDITOR.replace('descripcion');
            $("#btnExport").click(function () {
                var uri = $("#tblExport").battatech_excelexport({
                    containerid: "example",
                    datatype: 'table',
                    returnUri: true
                });
                var today = new Date();
                $(this).attr('download', 'ReporteFinal' + '.xls').attr('href', uri);
            });
            var datatable = {
                "oLanguage": {
                    "oAria": {
                        "sSortAscending": " - ordenar de forma ascendente",
                        "sSortDescending": " - ordenar de forma descendente",
                        "sInfoEmpty": "No hay información para mostrar",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sSearch": "Buscar :",
                        "sZeroRecords": "No hay ningún registro"

                    },
                    "oPaginate": {
                        "sFirst": "Primera página",
                        "sLast": "Última página",
                        "sNext": "Página siguiente",
                        "sPrevious": "Página anterior"
                    },

                    "sEmptyTable": "Esta tabla no tiene datos",
                    "sInfo": "Mostrando  _START_ - _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 entradas",
                    "sInfoFiltered": "(filtrados de _MAX_  registros en total)",
                    "sLengthMenu": "Motrar _MENU_ registros",
                    "sSearch": "Buscar :",
                    "sZeroRecords": "No se encontraron coincidencias"

                }
            };
            $(".chosen-select").chosen({
                no_results_text: "No se encontró coincidencias con :",
                width: '100%',
                allow_single_deselect: true
            });
            // Setup - add a text input to each footer cell
            $('#example tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="' + title + '" />');
            });
            // DataTable
            var table = $('#example').DataTable(datatable);
            // Apply the search
            table.columns().every(function () {
                var that = this;

                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that
                                .search(this.value)
                                .draw();
                    }
                });
            });
            initSample();
            $("#tabs").tabs();
            $("#datepicker").datepicker({dateFormat: 'dd-mm-yy'});
            if ($('#select_post option').length < 1) {
                $("#actualizar_post").attr("disabled", "disabled");
                $("#eliminar_post").attr("disabled", "disabled");

            }
            if ($('#select_curso option').length < 1) {
                $("#actualizar_curso").attr("disabled", "disabled");
                $("#eliminar_curso").attr("disabled", "disabled");

            }
            if ($('#select_foto option').length < 1) {
                $("#eliminar_foto").attr("disabled", "disabled");

            }
        });
    </script>
</head>
<body>
<div id="element"></div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cecap Avansys Perú</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Inicio</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>

                    <li><a href="{{ url('/auth/register') }}">Register</a></li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
<script type="text/javascript">
    /* exported initSample */
    if (CKEDITOR.env.ie && CKEDITOR.env.version < 9)
        CKEDITOR.tools.enableHtml5Elements(document);
    // The trick to keep the editor in the sample quite small
    // unless user specified own height.
    CKEDITOR.config.height = 150;
    CKEDITOR.config.width = 'auto';

    var initSample = (function () {
        var wysiwygareaAvailable = isWysiwygareaAvailable(),
                isBBCodeBuiltIn = !!CKEDITOR.plugins.get('bbcode');

        return function () {
            var editorElement = CKEDITOR.document.getById('editor');

            // :(((
            if (isBBCodeBuiltIn) {
                editorElement.setHtml(
                        'Hello world!\n\n' +
                        'I\'m an instance of [url=http://ckeditor.com]CKEditor[/url].'
                );
            }

            // Depending on the wysiwygare plugin availability initialize classic or inline editor.
            if (wysiwygareaAvailable) {
                CKEDITOR.replace('editor');
            } else {
                editorElement.setAttribute('contenteditable', 'true');
                CKEDITOR.inline('editor');

                // TODO we can consider displaying some info box that
                // without wysiwygarea the classic editor may not work.
            }
        };

        function isWysiwygareaAvailable() {
            // If in development mode, then the wysiwygarea must be available.
            // Split REV into two strings so builder does not replace it :D.
            if (CKEDITOR.revision == ( '%RE' + 'V%' )) {
                return true;
            }

            return !!CKEDITOR.plugins.get('wysiwygarea');
        }
    })();
    function eliminar_fila(id) {
        url = "/pagina/public/ajax/delete?id=" + id;
        $.ajax({
            url: this.url,
            type: "GET",
            //async: true,
            success: function (msj) {
                $('#fila_' + id).remove();
                alert("Se Elimino con exito, recargue la pagina de preferencia");
            },
            error: function (xhr, errmsg, err) {
                alert("Error: Hubo un Error de Comunicacion con el Servidor");
            }
        });
    }
    function agregar_enlace() {
        var link = document.getElementById("link").value;
        var nombre = document.getElementById("nombre").value;
        var cadena = "<a target='_blank' href='" + link + "'>" + nombre + "</a>";
        document.getElementById("texto").value = document.getElementById("texto").value + cadena;
    }
</script>
</html>
