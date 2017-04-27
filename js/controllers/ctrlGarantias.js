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
var status_document = 'i';
var tempdata = "";
$(document).ready(function (e) {
    var c = $.Callbacks();
    c.add(getGPV());
    c.fire();

    $('#mdlNuevaGarantiaPostVenta').on('shown.bs.modal', function () {

    });
    $("#IdDesarrollo").on('change', function () {
        onCheckDesarrollo();
        $("#IdManzana").html("<option></option>");
        $("#IdLotes").html("<option></option>");
        getRecordsDistinct(9, $("#IdDesarrollo").val(), "IdManzana");
    });
    $("#IdManzana").on('change', function () {
        getRecordsDistinct(10, $("#IdDesarrollo").val(), "IdLote");
        //console.log('ocurrio un cambio en IdManzana');
    });
    $("#IdLote").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
//        console.log('IdManzana: ' + $("#IdManzana").val() + ', Lote: ' + $("#IdLote").val());
        getRecordsDistinct(11, $("#IdDesarrollo").val(), "IdVivienda");
    });

    $("#IdVivienda").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });

    $("#IdCliente").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });
    $("#Dias").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });
    $("#Meses").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });
    $("#Anios").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });
    $("#FechaInicio").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });
    $("#FechaTermino").on('change', function () {
        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
    });

    $("#Concepto").on('change', function () {

        if (this.value.trim() !== '' && this.value !== undefined && this.value !== null && this.value.length > 0) {
            $(this).parent("div").addClass("has-success");
        } else {
            $(this).parent("div").addClass("has-error");
        }
        if ($("#Concepto").val() !== '') {
            $("#btnRegistrarGarantiaPostVenta").removeClass("disabled");
        } else {
            $("#btnRegistrarGarantiaPostVenta").addClass("disabled");
        }
    });
    $("#Dias").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                        // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
    $("#Meses").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                        // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
    $("#Anios").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                        // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
    $("#FechaTermino").on('change', function () {
        if ($("#btnRegistrarGarantiaPostVenta").hasClass("hide")) {
            $("#btnRegistrarGarantiaPostVenta").removeClass("hide");
        }
    });
    $("#btnAgregarGarantiaPostVenta").on('click', function () {
        $("#fGarantiaPV")[0].reset();
        onCheckDesarrollo();
        if ($("#btnRegistrarGarantiaPostVenta").hasClass("hide")) {
            $("#btnRegistrarGarantiaPostVenta").removeClass("hide");
            $("#btnActualizarGarantiaPostVenta").addClass("hide");
        }
        setFormDanger();
        $("div label[for='uIdManzana']").remove();
        $("div input#uIdManzana").remove();
        $("div label[for='uIdLotes']").remove();
        $("div input#uIdLotes").remove();
        $("div label[for='uIdVivienda']").remove();
        $("div input#uIdVivienda").remove();
    });
    $("#btnRegistrarGarantiaPostVenta").on('click', function () {
        onAddRecordGPV();
        $("#fGarantiaPV")[0].reset();
    });
    $("#btnActualizarGarantiaPostVenta").on('click', function () {
        onUpdateRecordGPV();
    });
    $("#btnEditarGarantiaPostVenta").on('click', function () {
        onBeforeUpdateGPV();
    });
    $("#btnReCargarGarantiaPostVentas").on('click', function () {
        getGPV();
    });
    $("#btnValidarGarantía").on('click', function () {
        if (temp !== null) {
            onShowVGPVByID(temp);
        } else {
            $("#mdlVGarantia").modal('toggle');
        }

    });
    $("#btnValidar").on('click', function () {
        console.log('Validando...');
        onValidateDataByID();
        $("#btnValidar").addClass("disabled");
    });
    $("#btnEliminarGarantiaPostVenta").on('click', function () {
        onDeleteGPV();
        getGPV();
    });

    $("#IdGarantiav").on('change', function () {
        onShowVGPVByID($("#IdGarantiav").val());
    });
    $('#mdlReporteGarantiasViviendas').on('shown.bs.modal', function () {
        getReporteGeneralDeGarantias();

    });

    $('#mdlVGarantia').on('shown.bs.modal', function () {
        if (temp === null) {
            $("#fVGarantia")[0].reset();
        }
    });
//    $("#fVGarantia").on('change', function () {
//        onValidateData("fVGarantia");
//    })
//    $("#fVGarantia").on('focusout', function () {
//        onValidateData("fVGarantia");
//    })
//    $("#fVGarantia").on('focusin', function () {
//        onValidateData("fVGarantia");
//    })
    $("#fVGarantia").on("input", function () {
        onValidateData("fVGarantia");
    });
    $("#fVGarantia").on("select", function () {
        onValidateData("fVGarantia");
    });

    $('#mdlVGarantia').on('hidden.bs.modal', function () {
        temp = null;
        $("#btnValidar").addClass("disabled");
    });
});
/*
 * INDICE 1
 */
function getGPV() {
    temp = null;
    $.ajax({
        url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
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
        var tblName = "tblGarantiaPostVenta";
//        $("#rGarantiaPostVenta").append(data);
        $("#rGarantiaPostVenta").html(getTable(tblName, data));
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
//                console.log("TEMPORAL: " + temp);
                onBeforeUpdateGPV();
            });
        } else {
            $("#msgGarantiaPostVenta").html('<div class="alert alert-dismissible alert-warning">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong><h1 class="text-center">NO EXISTEN REGISTROS DISPONIBLES</h1></a>' +
                    '</div>');
        }

        onShowVGPV();
    });
}

function onShowVGPV() {
    $.ajax({
        url: base_url + "index.php/ctrlGarantiaPostVenta/",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 13
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
                var dbvalue = v.PROYECTO + ', MANZANA: ' + v.MANZANA + ', LOTE: ' + v.LOTE + ', VIVIENDA: ' + v.VIVIENDA + ', CONCEPTO: ' + v.CONCEPTO;
                options += '<option value="' + v.ID + '" >' + dbvalue + '</option>';
            });
            $("#IdGarantiav").html(options);
        } else {
            $("#IdGarantiav").prop("readonly");
        }
    });

}


function onShowVGPVByID(id) {
    $.ajax({
        url: base_url + "index.php/ctrlGarantiaPostVenta/",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 14,
            ID: id
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        console.log(data[0]);
        if (data[0] !== null && data[0] !== undefined) {
            $("#mdlVGarantia").modal('toggle');
            $("#IdGarantiaValida").val(data[0].ID);
            $("#IdGarantiav").val(data[0].ID);
            $("#cmbDesarrollo").val(data[0].IdDesarrollo);
            $("#txtManzana").val(data[0].MANZANA);
            $("#txtLote").val(data[0].LOTE);
            $("#txtNumeroVivienda").val(data[0].VIVIENDA);
            $("#txtNumeroCliente").val(data[0].IDCLIENTE);
            $("#ConceptoV").val(data[0].CONCEPTO);
            $("#TiempodeCobertura").val(data[0].MESES);
            $("#DiasRestantes").val(data[0].DIASRESTANTES);
            $("#FechaInicioV").val(data[0]["FECHA INICIO"]);
            $("#FechaTerminoV").val(data[0]["FECHA TERMINO"]);
        } else {
            $("#bMessages").html('<fieldset> ' +
                    '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-5x"></span></h1></div>' +
                    '<div class="col-md-6"><H1> ESTA GARANTIA YA HA SIDO VALIDADA O ATENDIDA!</H1></div>' +
                    '</fieldset> ');
            $("#mdlMessages").modal('toggle');
        }
    });
}

/*
 * INDICE 2
 */
function getCitas() {
    $.ajax({
        url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
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
            $("#cmbCitaPV").html(options);
        } else {
            $("#cmbCitaPV").prop("readonly");
        }
    });
}

/*
 * INDICE 3
 */
function onAddRecordGPV() {
    var formdata = $("#fGarantiaPV").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
        data: formdata + "&indice=" + 3,
        success: function (data) {
//            console.log(data);
//            $("#msgGarantiaPostVenta").append(data); 
            if (data !== undefined && data !== null && data.length > 0) {
                $('#mdlNuevaGarantiaPostVenta').modal('hide');
                $("#msgGarantiaPostVenta").html(
                        '<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1>REGISTRO AGREGADO CORRECTAMENTE</h1></a></div>');
            }
            getGPV();
            $("#fGarantiaPV")[0].reset();
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
function onDeleteGPV() {
    if (temp !== 0 && temp !== undefined && temp !== null) {
        $.ajax({
            url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
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
                $("#msgGarantiaPostVenta").fadeIn(100);
                $("#msgGarantiaPostVenta").html('<div class="alert alert-dismissible alert-danger">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong><h1 class="text-center">REGISTRO ELIMINADO</h1></a>' +
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
function onBeforeUpdateGPV() {
    /**
     * AJAX CALL FOR UPDATE RECORD
     */
    if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {
        console.log("TEMP: " + temp);
        $.ajax({
            url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
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
//            console.log(data);
            status_document = 'u';
            if (data[0] !== undefined) {
                $('#mdlNuevaGarantiaPostVenta').modal('toggle');
                $("#IdGarantia").val(data[0].IdGarantia);
                $("#IdDesarrollo").val(data[0].IdDesarrollo).trigger("change");

                /*
                 * REMOVE THESE ELEMENTS AFTER UPDATE OR CLOSE MODAL
                 */
                $("div label[for='uIdManzana']").remove();
                $("div input#uIdManzana").remove();
                $("#IdManzana").parent("div").append(
                        '<label for="uIdManzana">Manzana Actual</label><input id="uIdManzana" type="text" value="' + data[0].IdManzana + '" class="form-control" readonly="">');

                $("div label[for='uIdLotes']").remove();
                $("div input#uIdLotes").remove();
                $("#IdLote").parent("div").append(
                        '<label for="uIdLotes">Lote Actual</label><input id="uIdLotes" type="text" value="' + data[0].IdLote + '" class="form-control" readonly="">');

                $("div label[for='uIdVivienda']").remove();
                $("div input#uIdVivienda").remove();
                $("#IdVivienda").parent("div").append(
                        '<label for="uIdLotes">Vivienda Actual</label><input id="uIdVivienda" type="text" value="' + data[0].IdVivienda.trim() + '" class="form-control" readonly="">');

                /*
                 * END OF ELEMENTS FOR TO DISPLAY DATA
                 */

                $("#IdCliente").val(data[0].IdCliente);
                $("#Concepto").val(data[0].Concepto);
                $("#Dias").val(data[0].Dias);
                $("#Meses").val(data[0].Meses);
                $("#Anios").val(data[0].Anios);
                $("#FechaInicio").val(data[0].FechaInicio);
                $("#FechaTermino").val(data[0].FechaTermino);
            } else {
                $("#bMessages").html('<fieldset> ' +
                        '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-5x"></span></h1></div>' +
                        '<div class="col-md-6"><H1> ESTA GARANTIA NO ESTA DISPONIBLE!</H1></div>' +
                        '</fieldset> ');
                $("#mdlMessages").modal('toggle');
            }
        });

        if ($("#btnActualizarGarantiaPostVenta").hasClass("hide")) {
            $("#btnActualizarGarantiaPostVenta").removeClass("hide");
            $("#btnRegistrarGarantiaPostVenta").addClass("hide");
        } else {

        }

        setFormSuccess();
    } else {
        $("#bMessages").html('<fieldset> ' +
                '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-5x"></span></h1></div>' +
                '<div class="col-md-6"><H1>NO SE HA SELECCIONADO NING&Uacute;N REGISTRO!</H1></div>' +
                '</fieldset> ');
        $("#mdlMessages").modal('toggle');
    }

}
/*
 * INDICE 8
 */
function onUpdateRecordGPV() {
    var formdata = $("#fGarantiaPV").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
        data: formdata + "&indice=" + 8 +
                "&uIdManzana=" + ($("#IdManzana").val() === '' ? $("#uIdManzana").val() : $("#IdManzana").val()) +
                "&uIdLote=" + ($("#IdLote").val() === '' ? $("#uIdLotes").val() : $("#IdLote").val()) +
                "&uIdVivienda=" + ($("#IdVivienda").val() === '' ? $("#uIdVivienda").val() : $("#IdVivienda").val()),
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
//        console.log(data)
        if (data !== undefined && data !== null && data.length > 0) {
            $('#mdlNuevaGarantiaPostVenta').modal('hide');
            $("#msgGarantiaPostVenta").html('<div class="alert alert-dismissible alert-success">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1>GARANTIA  ACTUALIZADA CORRECTAMENTE</h1></a>' +
                    '</div>');
//            $("#msgGarantiaPostVenta").append(data);
            getGPV();
            $("#fGarantiaPV")[0].reset()
        }
    });
}
/*
 * INDICE 9
 */
function getRecordsDistinct(indez, IdDesarrollo, component) {
    var formdata = $("#fGarantiaPV").serialize();
//    console.log(formdata);
    if (IdDesarrollo !== undefined && IdDesarrollo !== null && IdDesarrollo !== '' && IdDesarrollo.length > 0) {
        $.ajax({
            url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
            type: "POST",
            dataType: "JSON",
            data: formdata + "&indice=" + indez + "&IdDesarrollo=" + IdDesarrollo,
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function (data) {
//            console.log(data);
            $("#msgGPV").append(data);
            if (data !== undefined && data !== null && data.length > 0) {
                var options = '<option></option>';
//                var str = [];
                $.each(data, function (k, v) {
                    var str = v.dbvalue.split(',');
//                    console.log(str);
                    if (str !== undefined && str !== null && str.length > 1) {
                        $.each(str, function (k, v) {
                            options += '<option value="' + v.trim() + '" >' + v.trim() + '</option>';
//                            console.log(k,v);
                        });
                    } else {
                        options += '<option value="' + v.dbvalue.trim() + '" >' + v.dbvalue.trim() + '</option>';
                    }
                });
                $("#" + component).html(options);
            } else {
                $("#" + component).prop("readonly");
            }
        });
    }
}

function getReporteGeneralDeGarantias() {
    $.ajax({
        url: base_url + "index.php/ctrlGarantiaPostVenta/onLoadGarantiaPostVentas",
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 12
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data) {
        var tblName = "tblReporteGeneralDeGarantias";

//        $("#rReporteGeneralDeGarantias").append(data);
        $("#rReporteGeneralDeGarantias").html(getTable(tblName, data));
//        console.log(data);
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
var form = "fGarantiaPV";
function onCheckDesarrollo() {
    if ($("#IdDesarrollo").val() !== '') {
        $('#' + form + ' input, #' + form + ' select').each(
                function (index) {
                    var input = $(this);
                    if ($("#" + input.attr('value')).val() === '') {
                        $("#" + input.attr('id')).parent("div").removeClass("has-error");
                        $("#" + input.attr('id')).parent("div").addClass("has-success");
                    } else {
                        $("#" + input.attr('id')).parent("div").addClass("has-error");
                        $("#" + input.attr('id')).removeAttr("readonly");
                        $("#" + input.attr('id')).removeAttr("disabled");
                    }
                }
        );
    } else {
        $('#' + form + ' input, #' + form + ' select').each(
                function (index) {
                    var input = $(this);
                    $("#" + input.attr('id')).parent("div").removeClass("has-error");
                    $("#" + input.attr('id')).attr("readonly", true);
                    $("#" + input.attr('id')).attr("disabled", true);
                }
        );
        $('#' + form)[0].reset();
        $("#IdDesarrollo").removeAttr("readonly");
        $("#IdDesarrollo").removeAttr("disabled");
    }

}

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

function onValidateData(frm) {
    var tf = false;
    $('#' + frm + ' input, #' + frm + ' select').each(
            function (index) {
                var input = $(this);
//                console.log($("#" + input.attr('id')).val().length)
//                console.log($("#" + input.attr('id')).val())
                if ($("#" + input.attr('id')).val().length > 0) {
                    $("#" + input.attr('id')).parent("div").removeClass("has-error");
                } else {
                    $("#" + input.attr('id')).parent("div").addClass("has-error");
                }
            }
    );

    $('#' + frm + ' input, #' + frm + ' select').each(
            function (index) {
                var input = $(this);
                if ($("#" + input.attr('id')).parent("div").hasClass("has-error")) {
                    tf = false;
                    if (!$("#btnValidar").hasClass("disabled")) {
                        $("#btnValidar").addClass("disabled");
                    }
                    return false;
                } else {
                    tf = true;
                }
            }
    );
    if (tf) {
        $("#btnValidar").removeClass("disabled");
    }
}

function onValidateDataByID() {
    var formdata = $("#fVGarantia").serialize();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/ctrlGarantiaPostVenta/",
        data: formdata + "&indice=" + 15,
        success: function (data) {
//            console.log(data);
//            $("#msgGarantiaPostVenta").append(data); 
            if (data !== undefined && data !== null && data.length > 0) {
                $('#mdlVGarantia').modal('hide');
                $("#msgGarantiaPostVenta").html(
                        '<div class="alert alert-dismissible alert-success">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1>GARANTIA ACTUALIZADA CORRECTAMENTE</h1></a></div>');
            }
            getGPV();
            $("#fVGarantia")[0].reset();
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    });
}