/*
 Copyright 2016 Ing.Giovanni Flores
 
 Version: 1.0 Timestamp: Mon April 11 14:43:36 EDT 2016
 
 This software is licensed under the Apache License, Version 2.0 (the "Apache License") or the GNU
 General Public License version 2 (the "GPL License"). You may choose either license to govern your
 use of this software only upon the condition that you accept all of the terms of either the Apache
 License or the GPL License.
 
 You may obtain a copy of the Apache License and the GPL License at:
 
 http://www.apache.org/licenses/LICENSE-2.0
 http://www.gnu.org/licenses/gpl-2.0.html
 
 Unless required by applicable law or agreed to in writing, software distributed under the Apache License
 or the GPL Licesnse is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
 either express or implied. See the Apache License and the GPL License for the specific language governing
 permissions and limitations under the Apache License and the GPL License.
 */

/**
 * Creates an instance of Document.
 *
 * @constructor
 * @author Ing.Giovanni Flores 
 * @description Prepared the document
 */

$(document).ready(function (e) {
    var c = $.Callbacks();
    c.add(getEV());
    c.add();
    c.fire();
    $('#mdlNuevaEntregaVivienda').on('shown.bs.modal', function () {
        getCitas("cmbCitaPV");
    });
    $('#mdlNuevaEntregaVivienda').on('hidden.bs.modal', function () {
        if ($("#cmbCitaPV").parent("div").hasClass("hide")) {
            $("#cmbCitaPV").parent("div").removeClass("hide");
            $("#txtCitaPV").parent("div").addClass("hide");
        }
    });
    /*
     * NUEVO
     */
    $("#btnAgregarEntregaVivienda").on('click', function () {
        $("#fEntregaViviendaPV")[0].reset();
        if ($("#btnRegistrarEntregaVivienda").hasClass("hide")) {
            $("#btnRegistrarEntregaVivienda").removeClass("hide");
            $("#btnActualizarEntregaVivienda").addClass("hide");
        }
    });
    /*
     * AGREGAR
     */
    $("#btnRegistrarEntregaVivienda").on('click', function () {
        onAddRecordEV();
    });
    /*
     * DOBLE CLIC PARA MODIFICAR
     */
    $("#btnEditarEntregaVivienda").on('click', function () {
        onBeforeUpdateEV();
    });
    /*
     * MODIFCAR
     */
    $("#btnActualizarEntregaVivienda").on('click', function () {
        if ($("#btnActualizarEntregaVivienda").hasClass("hide")) {
            $("#btnActualizarEntregaVivienda").removeClass("hide");
            $("#btnRegistrarEntregaVivienda").addClass("hide");
        }
        onUpdateRecordEV();
    });
    /*
     * REFRESCAR
     */
    $("#btnReCargarEntregaViviendas").on('click', function () {
        getEV();
    });
    /*
     * ELIMINAR
     */
    $("#btnEliminarEntregaVivienda").on('click', function () {
        if (temp !== null && temp !== undefined && temp !== 0 && temp !== '') {
            onDeleteEV();
        } else {
            $("#mdlMessages").modal('toggle');
        }
    });

});
/*
 * INDICE 1
 */
function getEV() {
    temp = null;
    $.ajax({
        url: base_url + "index.php/ctrlEntregaVivienda/onLoadEntregaVivienda",
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
        var tblName = "tblEntregaVivienda";
        $("#rEntregaVivienda").html(getTable(tblName, data));
//        console.log(data);
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
                onBeforeUpdateEV();
            });
        } else {
            $("#msgEntregaVivienda").html('<div class="alert alert-dismissible alert-warning">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong><h1 class="text-center">NO EXISTEN REGISTROS DISPONIBLES</h1></a>' +
                    '</div>');
        }
    });
}

/*
 * INDICE 2
 */
function getCitas(component) {
    $.ajax({
        url: base_url + "index.php/ctrlEntregaVivienda/onLoadEntregaVivienda",
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
                options += '<option value="' + v.IdPostVenta + '" >' + v.Actividad + ', ' + v.Cliente + ', ' + v.Fecha + '</option>';
            });
            $("#" + component).html(options);
        } else {
            $("#" + component).prop("readonly");
        }
    });
}

/*
 * INDICE 3
 */
function onAddRecordEV() {
    var formdata = $("#fEntregaViviendaPV").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlEntregaVivienda/onLoadEntregaVivienda",
        data: formdata + "&indice=" + 3,
        success: function (data) {
            if (data !== undefined && data !== null && data.length > 0) {
                $('#mdlNuevaEntregaVivienda').modal('hide');
                $("#msgEntregaVivienda").html(
                        '<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1>REGISTRO AGREGADO CORRECTAMENTE</h1></a></div>');
            }
            getEV();
//            $("#msgEntregaVivienda").append(data);
            $("#fEntregaViviendaPV")[0].reset();
            if ($("#btnActualizarEntregaVivienda").hasClass("hide")) {
                $("#btnActualizarEntregaVivienda").removeClass("hide");
                $("#btnRegistrarEntregaVivienda").addClass("hide");
            } else
            {
                $("#btnActualizarEntregaVivienda").addClass("hide");
                $("#btnRegistrarEntregaVivienda").removeClass("hide");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    });
}

/*
 * INDICE 4
 */
function onDeleteEV() {
    if (temp !== 0 && temp !== undefined && temp !== null) {
        $.ajax({
            url: base_url + "index.php/ctrlEntregaVivienda/onLoadEntregaVivienda",
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
                $("#msgEntregaVivienda").fadeIn(100);
                $("#msgEntregaVivienda").html('<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong><h1 class="text-center">REGISTRO ' + temp + ' ELIMINADO</h1></a>' +
                        '</div>');
            }
            temp = null;
            getEV();
        });
    } else
    {
        $('#mdlMessages').modal('toggle');
    }
}
/*
 * INDICE 5
 */

/*
 * INDICE 7
 */
function onBeforeUpdateEV() {
    /**
     * AJAX CALL FOR UPDATE RECORD
     */

    if (temp !== undefined && temp !== null) {
        $('#mdlNuevaEntregaVivienda').modal('toggle');
        $.ajax({
            url: base_url + "index.php/ctrlEntregaVivienda/onLoadEntregaVivienda",
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
            if (data !== undefined) {
                $("#txtCitaPV").parent("div").removeClass("hide");
                $("#cmbCitaPV").parent("div").addClass("hide");
                $("#txtCitaPV").val(data[0].Actividad + ', ' + data[0].CLIENTE + ', ' + data[0].FechaEntrega);
                $("#txtIDCitaPV").val(data[0].IdPostVenta);
                if (data[0].Estatus === 'ENTREGADO') {
                    $("#btnActualizarEntregaVivienda").addClass("hide");
                }
                $("#msgEntregaVivienda").append(data);
                $('input[name="rCVPG"][value="' + (parseInt(data[0].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $('input[name="rPAG"][value="' + (parseInt(data[1].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $('input[name="rGCS"][value="' + (parseInt(data[2].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $('input[name="rPOVSM"][value="' + (parseInt(data[3].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $('input[name="rPAEIAAV"][value="' + (parseInt(data[4].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $('input[name="rMMV"][value="' + (parseInt(data[5].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $('input[name="rAERVP"][value="' + (parseInt(data[6].Entregado) === 0 ? "OFF" : "ON") + '"]').prop('checked', true);
                $("#txtIDCVPG").val(data[0].IdEntregaViviendaDocumento);
                $("#txtIDPAG").val(data[1].IdEntregaViviendaDocumento);
                $("#txtIDGCS").val(data[2].IdEntregaViviendaDocumento);
                $("#txtIDPOVSM").val(data[3].IdEntregaViviendaDocumento);
                $("#txtIDPAEIAAV").val(data[4].IdEntregaViviendaDocumento);
                $("#txtIDMMV").val(data[5].IdEntregaViviendaDocumento);
                $("#txtIDAERVP").val(data[6].IdEntregaViviendaDocumento);
//            
                $("#txtIDGPV").val(data[0].IdEntregaVivienda);
                $("#cmbCitaPV").val(data[0].IdPostVenta);
                $("#txtrCVPG").val(data[0].Observacion);
                $("#txtrPAG").val(data[1].Observacion);
                $("#txtrGCS").val(data[2].Observacion);
                $("#txtrPOVSM").val(data[3].Observacion);
                $("#txtrPAEIAAV").val(data[4].Observacion);
                $("#txtrMMV").val(data[5].Observacion);
                $("#txtrAERVP").val(data[6].Observacion);
                $("#txtFechaEntrega").val(data[0].FechaEntrega);
                $("#cmbClienteRecibio").val(data[0].ClienteRecibio);
                $("#txtPersonaEntrego").val(data[0].PersonaEntrego);
            } else {
                $("#bMessages").html('<fieldset> ' +
                        '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-5x"></span></h1></div>' +
                        '<div class="col-md-6"><H1> ESTA REGISTRO YA HA SIDO ENTREGADO!</H1></div>' +
                        '</fieldset> ');
                $("#mdlMessages").modal('toggle');
            }
        });
        if ($("#btnActualizarEntregaVivienda").hasClass("hide")) {
            $("#btnActualizarEntregaVivienda").removeClass("hide");
            $("#btnRegistrarEntregaVivienda").addClass("hide");
        }
    } else {
        $("#mdlMessages").modal('toggle');
    }
}
/*
 * INDICE 8
 */
function onUpdateRecordEV() {
    var formdata = $("#fEntregaViviendaPV").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlEntregaVivienda/onLoadEntregaVivienda",
        data: formdata + "&indice=" + 8,
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
//        console.log(data)
        if (data !== undefined && data !== null && data.length > 0) {
            $('#mdlNuevaEntregaVivienda').modal('hide');
            $("#msgEntregaVivienda").html('<div class="alert alert-dismissible alert-success">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1>ENTREGA ' + temp + ' ACTUALIZADA CORRECTAMENTE</h1></a>' +
                    '</div>');
//            $("#msgEntregaVivienda").append(data);
            getEV();
            $("#fEntregaViviendaPV")[0].reset()
        }
    });
}

