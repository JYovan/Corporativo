/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var pv = window.pv || {}; 

pv.config = (function () {
    return {
        onReady: function () {
            $(document).ready(function () {
                getPV();
            });
            $("#cmbEstado").on('change', function (e) {
                onChangeValueEstate();
            });

            $("#btnAgregarPostVenta").on('click', function () {
                $("#fRegistroCita")[0].reset();
                if ($("#btnRegistrarPostVenta").hasClass("hide")) {
                    $("#btnRegistrarPostVenta").removeClass("hide");
                    $("#btnActualizarPostVenta").addClass("hide");
                }
            });
            $("#btnEditarPostVenta").on('click', function () {
                onBeforeUpdatePV();
            });
            $('#btnReCargarPostVentas').on('click', function () {
                getPV();
                console.log('Desde el boton');
            });
            $('#btnEliminarPostVenta').on('click', function () {
                onDeletePV();
            });
            $('#btnExportarPDF').on('click', function () {
                $('#mdlReporteGeneralCitas').modal('handleUpdate');
            });

            $('#mdlReporteGeneralCitas').on('shown.bs.modal', function () {
                getReporteGeneralDeCitas();

            });
            $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
                getReporteGeneralDeCitasEV();
                getReporteGeneralDeCitasFE();
            });

            $("#cmbCiudad").on('change', function (e) {
                $("#txtIDCiudad").val($("#cmbCiudad").val());
            });

            $("#btnRegistrarPostVenta").on('click', function () {
                onAddRecordPV();
            });
            $("#btnActualizarPostVenta").on('click', function () {
                onUpdateRecordPV();
            });
        }
    }
})();

function onChangeValueEstate() {
  
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 5,
            IdEstado: $("#cmbEstado").val()
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        if (data !== undefined && data !== null && data.length > 0) {
            var options = '';
            $.each(data, function (k, v) {
                options += '<option value="' + v.id_ciudad + '" >' + v.dsc_ciudad + '</option>';
//                        console.log(v);
            });
//            $("#msgrPostVenta").append(data);
            $("#cmbCiudad").html(options);
        }
    });
}


/******************************************
 * AJAX FUNCTIONS FOR GET DATA
 */

/*
 * INDICE 1 
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function getPV() {
    temp = null;
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
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
        var tblName = "tblPostVenta";
        $("#rPostVenta").html(getTable(tblName, data));
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
                onBeforeUpdatePV();
            });
        } else {
            $("#msgPostVenta").html('<div class="alert alert-dismissible alert-warning">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong><h1 class="text-center">NO EXISTEN REGISTROS DISPONIBLES</h1></a>' +
                    '</div>');
        }
    });
}
/*
 * INDICE 2
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function getReporteGeneralDeCitas() {
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
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
        var tblName = "tblReporteGeneralDeCitas";

        $("#rReporteGeneralDeCitas").html(getTable(tblName, data));
        console.log(data);
        $('#' + tblName).DataTable(tableOptions);
        $('#' + tblName).DataTable().columns.adjust().draw();
        $('#' + tblName + ' tbody').on('click', 'tr', function () {
            $("#" + tblName).find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).addClass('warning');
        });
    });
}
/*
 * INDICE 3
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function getGarantias() {
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 3
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        var tblName = "tblGarantias";
        $("#rGarantias").html(getTable(tblName, data));
        console.log(data);
        $('#' + tblName).DataTable(tableOptions);
        $('#' + tblName + ' tbody').on('click', 'tr', function () {
            $("#" + tblName).find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).addClass('warning');
        });
    });
}
/*
 * INDICE 4
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function onDeletePV() {
    if (temp !== 0 && temp !== undefined && temp !== null) {
        $.ajax({
            url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
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
                $("#msgPostVenta").fadeIn(100);
                $("#msgPostVenta").html('<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong><h1 class="text-center">REGISTRO ' + temp + ' ELIMINADO</h1></a>' +
                        '</div>');
            }
            temp = null;
            getPV();
        });
    } else
    {
        $('#mdlMessages').modal('toggle');
    }
}
/*
 * INDICE 5
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
//function onChangeValueEstate() {
//
//    $.ajax({
//        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
//        type: "POST",
//        dataType: "JSON",
//        data: {
//            indice: 5,
//            IdEstado: $("#cmbEstado").val()
//        },
//        error: function (XMLHttpRequest, textStatus, errorThrown) {
//            console.log(errorThrown);
//            console.log(textStatus);
//        }
//    }).done(function (data) {
//        if (data !== undefined && data !== null && data.length > 0) {
//            var options = '';
//            $.each(data, function (k, v) {
//                options += '<option value="' + v.id_ciudad + '" >' + v.dsc_ciudad + '</option>';
////                        console.log(v);
//            });
//            $("#cmbCiudad").html(options);
//        }
//    });
//}
/*
 * INDICE 6
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function onAddRecordPV() {
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
        type: "POST",
        data: {
            indice: 6,
            Actividad: $("#cmbActividad").val(),
            Fecha: $("#txtFecha").val(),
            Descripcion: $("#txtDescripcion").val(),
            Lugar: $("#txtLugar").val(),
            Calle: $("#txtCalle").val(),
            Numero: $("#txtNumero").val(),
            Colonia: $("#txtColonia").val(),
            IdEstado: $("#cmbEstado").val(),
            IdCiudad: $("#cmbCiudad").val(),
            Duracion: $("#txtDuracion").val(),
            HoraInicio: $("#txtHoraInicio").val(),
            HoraTermino: $("#txtHoraTermino").val(),
            Participante: $("#txtParticipante").val(),
            IdCliente: $("#cmbClientes").val(),
            Otros: $("#txtOtroParticipante").val(),
            Notario: $("#txtNotario").val(),
            NumeroNotario: $("#txtNumeroNotario").val(),
            Observaciones: $("#txtObservaciones").val()
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        if (data !== undefined && data !== null && data.length > 0) {
            $('#mdlNuevaPostVenta').modal('hide');
            $("#msgPostVenta").html('<div class="alert alert-dismissible alert-success">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1>CITA AGREGADA CORRECTAMENTE</h1></a>' +
                    '</div>');
            getPV();
            $("#fRegistroCita")[0].reset()
        }
    });
}
/*
 * INDICE 7
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function onBeforeUpdatePV() {
    /**
     * AJAX CALL FOR UPDATE RECORD
     */
    if (temp !== undefined && temp !== null) {
        $.ajax({
            url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
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
            $("#cmbActividad").val(data[0].Actividad);
            $("#txtFecha").val(data[0].Fecha);
            $("#txtDescripcion").val(data[0].Descripcion);
            $("#txtLugar").val(data[0].Lugar);
            $("#txtCalle").val(data[0].Calle);
            $("#txtNumero").val(data[0].Numero);
            $("#txtNumero").val(data[0].Numero);
            $("#txtColonia").val(data[0].Colonia);
            $("#cmbEstado").trigger('change');
            $("#cmbEstado").val(data[0].IdEstado);
            $("#txtIDCiudad").val(data[0].IdCiudad);
//            $("#cmbCiudad").val($("#txtIDCiudad").val()).trigger('change');
            $("#txtDuracion").val(data[0].Duracion);
            $("#txtHoraInicio").val(data[0].HoraInicio);
            $("#txtHoraTermino").val(data[0].HoraTermino);
            $("#txtParticipante").val(data[0].Participante);
            $("#cmbClientes").val(data[0].IdCliente);
            $("#txtOtroParticipante").val(data[0].Otros);
            $("#txtIDPostVenta").val(data[0].IdPostVenta);
            $("#txtNotario").val(data[0].Notario);
            $("#txtNumeroNotario").val(data[0].NumeroNotario);
            $("#txtObservaciones").val(data[0].Observaciones);
        });

        $('#mdlNuevaPostVenta').modal('toggle');
        if ($("#btnActualizarPostVenta").hasClass("hide")) {
            $("#btnActualizarPostVenta").removeClass("hide");
            $("#btnRegistrarPostVenta").addClass("hide");
        } else
        {
            console.log('no')
        }
    } else {
        $("#mdlMessages").modal('toggle');
    }
}
/*
 * INDICE 8
 * @author Ing.Giovanni Flores
 * @function getPV 
 * @description Obtiene un listado de registros
 */
function onUpdateRecordPV() {
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
        type: "POST",
        data: {
            indice: 8,
            ID: $("#txtIDPostVenta").val(),
            Actividad: $("#cmbActividad").val(),
            Fecha: $("#txtFecha").val(),
            Descripcion: $("#txtDescripcion").val(),
            Lugar: $("#txtLugar").val(),
            Calle: $("#txtCalle").val(),
            Numero: $("#txtNumero").val(),
            Colonia: $("#txtColonia").val(),
            IdEstado: $("#cmbEstado").val(),
            IdCiudad: $("#txtIDCiudad").val(),
            Duracion: $("#txtDuracion").val(),
            HoraInicio: $("#txtHoraInicio").val(),
            HoraTermino: $("#txtHoraTermino").val(),
            Participante: $("#txtParticipante").val(),
            IdCliente: $("#cmbClientes").val(),
            Otros: $("#txtOtroParticipante").val(),
            Notario: $("#txtNotario").val(),
            NumeroNotario: $("#txtNumeroNotario").val(),
            Observaciones: $("#txtObservaciones").val()
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        console.log(data)
        if (data !== undefined && data !== null && data.length > 0) {
            $('#mdlNuevaPostVenta').modal('hide');
            $("#msgPostVenta").html('<div class="alert alert-dismissible alert-success">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1>CITA ' + temp + ' ACTUALIZADA CORRECTAMENTE</h1></a>' +
                    '</div>');
//                    $("#msgPostVenta").append(data);
            getPV();
            $("#fRegistroCita")[0].reset()
        }
    });
    $('#mdlNuevaPostVenta').modal('hide');
}


function getReporteGeneralDeCitasEV() {
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 9
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        var tblName = "tblReporteGeneralDeCitasEV";

        $("#rReporteGeneralDeCitasEV").html(getTable(tblName, data));
        console.log(data);
        $('#' + tblName).DataTable(tableOptions);
        $('#' + tblName).DataTable().columns.adjust().draw();
        $('#' + tblName + ' tbody').on('click', 'tr', function () {
            $("#" + tblName).find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).addClass('warning');
        });
    });
}


function getReporteGeneralDeCitasFE() {
    $.ajax({
        url: base_url + "index.php/ctrlPostVenta/onLoadPostVentas",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 10
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        var tblName = "tblReporteGeneralDeCitasFE";

        $("#rReporteGeneralDeCitasFE").html(getTable(tblName, data));
        console.log(data);
        $('#' + tblName).DataTable(tableOptions);
        $('#' + tblName).DataTable().columns.adjust().draw();
        $('#' + tblName + ' tbody').on('click', 'tr', function () {
            $("#" + tblName).find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).addClass('warning');
        });
    });
}