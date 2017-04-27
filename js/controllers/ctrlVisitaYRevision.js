/*
 * DOCUMENT
 */

$(document).ready(function () {
    var call = $.Callbacks();
    call.add(onLoad());
    call.add(getRecordsVYR);
    call.fire();
});

/*
 * CHANGES IN FORM 
 */
function onLoad() {
    $("#ExistenObservaciones").on('change', function (e) {
        console.log($("#ExistenObservaciones").val())
        $("#btnRegistrarVisitaYRevision").removeClass("disabled");
        if ($("#fObservaciones").hasClass("hide") && $("#ExistenObservaciones").val() === '1') {
            $("#fObservaciones").removeClass("hide");
        } else {
            $("#fObservaciones").addClass("hide");
        }
    });
    /*
     * NUEVO
     */
    $("#btnAgregarVisitaYRevision").on('click', function () {
        $("#frmVisitaYRevision")[0].reset();
        $("#nIdSesion").parent("div").addClass("hide");
        $("#btnRegistrarVisitaYRevision").addClass("disabled");
        $("#IdSesion").parent("div").removeClass("hide");
        
        if ($("#btnRegistrarVisitaYRevision").hasClass("hide")) {
            $("#btnRegistrarVisitaYRevision").removeClass("hide");
            $("#btnActualizarVisitaYRevision").addClass("hide");
        }
        $("#fObservaciones").addClass("hide");
    });
    $("#btnRegistrarVisitaYRevision").on('click', function () {
        onAddRecordVYR();
        $("#mdlNuevaVisitaYRevision").modal('toggle');
    });

    /*
     * OBTENER
     */
    $("#btnReCargarVisitaYRevisions").on('click', function () {
        getRecordsVYR();
    });
    $("#btnEditarVisitaYRevision").on('click', function () {
        onBeforeUpdateVYR();
    });
    $("#btnActualizarVisitaYRevision").on('click', function () {
        onUpdateVYR();
    });

    /*
     * ELIMINAR
     */
    $('#btnEliminarVisitaYRevision').on('click', function () {
        onDeleteVYR();
    });

    getCitas("IdSesion");
}
/*
 * SELECT
 */
function getRecordsVYR() {
    temp = null;
    $.ajax({
        url: base_url + "index.php/ctrlVisitaYRevision/onLoadVisitaYRevision",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 1
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        var tblName = "tblVisitaYRevision";
        $("#rVisitaYRevision").html(getTable(tblName, data));
//        console.log(data.length);
        if (data.length > 0) {
            var tblSelected = $('#' + tblName).DataTable(tableOptions);
            //CLICK SELECTED ROW
            $('#' + tblName + ' tbody').on('click', 'tr', function () {
                $("#" + tblName).find("tr").removeClass("success");
                $("#" + tblName).find("tr").removeClass("warning");
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                $("#" + tblName).find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
                console.log("TEMPORAL: " + temp);
                onBeforeUpdateVYR();
            });
        } else {
            $("#msgVisitaYRevision").html('<div class="alert alert-dismissible alert-warning">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong><h1 class="text-center">NO EXISTEN REGISTROS DISPONIBLES</h1></a>' +
                    '</div>');
        }
    });
}
function getCitas(component) {
    $.ajax({
        url: base_url + "index.php/ctrlVisitaYRevision/onLoadVisitaYRevision",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 2
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
//        console.log(data);
        if (data !== undefined && data !== null && data.length > 0) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '" >' + v.ACTIVIDAD + ', ' + v.CLIENTE + ', ' + v.FECHA + '</option>';
            });
            $("#" + component).html(options);
        } else {
            $("#" + component).prop("readonly");
        }
    });
}

/*
 * INSERT
 */

function onAddRecordVYR() {
    var formdata = $("#frmVisitaYRevision").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlVisitaYRevision/onLoadVisitaYRevision",
        data: formdata + "&indice=" + 3,
        success: function (data) {
            if (data !== undefined && data !== null && data.length > 0) {
                $('#mdlNuevaVisitaYRevision').modal('hide');
                $("#msgVisitaYRevision").html(
                        '<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1>REGISTRO AGREGADO CORRECTAMENTE</h1></a></div>');
            }
//           
//            $("#msgVisitaYRevision").append(data); 
            getRecordsVYR();
            $("#frmVisitaYRevision")[0].reset();
            if ($("#btnActualizarVisitaYRevision").hasClass("hide")) {
                $("#btnActualizarVisitaYRevision").removeClass("hide");
                $("#btnRegistrarVisitaYRevision").addClass("hide");
            } else
            {
                $("#btnActualizarVisitaYRevision").addClass("hide");
                $("#btnRegistrarVisitaYRevision").removeClass("hide");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    });
}

/*
 * UPDATE
 */

function onUpdateVYR() {
    var formdata = $("#frmVisitaYRevision").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlVisitaYRevision/onLoadVisitaYRevision",
        data: formdata + "&indice=" + 8,
        success: function (data) {
            if (data !== undefined && data !== null && data.length > 0) {
                $('#mdlNuevaVisitaYRevision').modal('hide');
                $("#msgVisitaYRevision").html(
                        '<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1>REGISTRO ACTUALIZADO CORRECTAMENTE</h1></a></div>');
            }
            getRecordsVYR();
//            $("#msgVisitaYRevision").append(data);
            $("#fVisitaYRevision")[0].reset();
            if ($("#btnActualizarVisitaYRevision").hasClass("hide")) {
                $("#btnActualizarVisitaYRevision").removeClass("hide");
                $("#btnRegistrarVisitaYRevision").addClass("hide");
            } else
            {
                $("#btnActualizarVisitaYRevision").addClass("hide");
                $("#btnRegistrarVisitaYRevision").removeClass("hide");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    });

}

function onBeforeUpdateVYR() {

    /**
     * AJAX CALL FOR UPDATE RECORD
     */
    if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {
        console.log("TEMP: " + temp);
        $('#mdlNuevaVisitaYRevision').modal('toggle');
        $.ajax({
            url: base_url + "index.php/ctrlVisitaYRevision/onLoadVisitaYRevision",
            type: "POST",
            dataType: "JSON",
            data: {
                indice: 7,
                ID: temp
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function (data) {
            console.log(data);
            status_document = 'u';
            $("#IdSesion").parent("div").addClass("hide");
            if ($("#nIdSesion").parent("div").hasClass("hide")) {
                $("#nIdSesion").parent("div").removeClass("hide");
                $("#nIdSesion").val(data[0].ID);
            }

            $("#IdSesion").val(data[0].SESION);
            $("#ExistenObservaciones").val(data[0].OBSERVACIONES === 'SI' ? 1 : 0);
            $("#uIdSesion").val(data[0].SESION);
            $("#uExistenObservaciones").val(data[0].OBSERVACIONES === 'SI' ? 1 : 0);
            if (data[0].OBSERVACIONES === 'SI') {
                $("#fObservaciones").removeClass("hide");
                $("#ObservacionesVisita").val(data[0].OBSERVACIONESVISITA);
                $("#Seguimiento").val(data[0].SEGUIMIENTO);
                $("#uObservacionesVisita").val(data[0].OBSERVACIONESVISITA);
                $("#uSeguimiento").val(data[0].SEGUIMIENTO);
            } else {
                $("#fObservaciones").addClass("hide");
            }
        });

        if ($("#btnActualizarVisitaYRevision").hasClass("hide")) {
            $("#btnActualizarVisitaYRevision").removeClass("hide");
            $("#btnRegistrarVisitaYRevision").addClass("hide");
        } else {

        }
        setFormSuccess();
    } else {
        $("#mdlMessages").modal('toggle');
    }

}

/*
 * DELETE
 */

function onDeleteVYR() {
    if (temp !== 0 && temp !== undefined && temp !== null) {
        $.ajax({
            url: base_url + "index.php/ctrlVisitaYRevision/onLoadVisitaYRevision",
            type: "POST",
            data: {
                indice: 4,
                ID: temp
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function (data) {
            console.log(data)
            if (parseInt(data) === 1) {
                $("#msgVisitaYRevision").fadeIn(100);
                $("#msgVisitaYRevision").html('<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong><h1 class="text-center">REGISTRO ELIMINADO</h1></a>' +
                        '</div>');
            }
            temp = null;
            getRecordsVYR();
        });
    } else
    {
        $('#mdlMessages').modal('toggle');
    }
}



var form = "frmVisitaYRevision";
function setFormSuccess() {
    $('#' + form + ' input, #' + form + ' select').each(
            function (index) {
                var input = $(this);
                $("#" + input.attr('id')).parent("div").removeClass("has-warning");
                $("#" + input.attr('id')).parent("div").removeClass("has-error");
                $("#" + input.attr('id')).parent("div").addClass("has-success");
            }
    );
}

function setFormWarning() {
    $('#' + form + ' input, #' + form + ' select').each(
            function (index) {
                var input = $(this);
                $("#" + input.attr('id')).parent("div").removeClass("has-success");
                $("#" + input.attr('id')).parent("div").removeClass("has-error");
                $("#" + input.attr('id')).parent("div").addClass("has-warning");
            }
    );
}
function setFormDanger() {
    $('#' + form + ' input, #' + form + ' select').each(
            function (index) {
                var input = $(this);
                $("#" + input.attr('id')).parent("div").removeClass("has-success");
                $("#" + input.attr('id')).parent("div").removeClass("has-warning");
                $("#" + input.attr('id')).parent("div").addClass("has-error");
            }
    );
}