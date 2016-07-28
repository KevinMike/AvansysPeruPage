$(document).on('ready',function () {

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