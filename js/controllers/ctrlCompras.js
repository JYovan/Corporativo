
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
doc = "Compras";
var tcot = 0;
var tt = 0;
var nformat = "";
var target_messages = "mdlMessages";
var content_message = "NO HA ELEGIDO NINGUN REGISTRO";
$(document).ready(function (e) {
    var master_url = base_url + 'index.php/ctrlCompras/';
    var Autoriza = $("#Autoriza");
    var Recibe = $("#Recibe");
    var Cuenta = $("#Cuenta");
    onLoad();
    $("#Proyectos").change(function () {
        $("#Numero").addClass("hide");
        $("#Numero").parent().append('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
        $.ajax({
            url: master_url + 'getNumeroDeCotizacionXProyecto',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#Proyectos").val()
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $("#Numero").removeClass("hide");
            $("#Numero").next().remove();
            $("#Numero").val(data[0].COTIZACION);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('OPERACION CONCLUIDA');
        });
    });
    $(".btnAddRow").click(function (e) {
        e.preventDefault();

        if ($("#Etiqueta").val() !== undefined && $("#Etiqueta").val() !== '' &&
                $("#Producto").val() !== undefined && $("#Producto").val() !== '' &&
                $("#Cantidad").val() !== undefined && $("#Cantidad").val() !== '') {
            $("#dpbtnAdd").removeClass('hide');
            $("#dbtnAdd").addClass('hide');

            $("#Proyectos").attr("readonly", true);
            $("#Anotaciones").attr("readonly", true);
            $("#Fecha").attr("readonly", true);
            $("#Numero").attr("readonly", true);

            $("#Etiqueta").attr("readonly", true);
            $("#Proveedores").attr("readonly", true);
            $("#Producto").attr("readonly", true);
            $("#Cantidad").attr("readonly", true);

            $.ajax({
                url: base_url + 'index.php/ctrlCompras/onLoad',
                type: "POST",
                dataType: "JSON",
                data: {
                    indice: 3,
                    ID: $("#Producto").val(),
                    ETIQUETAID: $("#Etiqueta").val(),
                    PROVEEDORES: $("#Proveedores").val(),
                    CANTIDAD: $("#Cantidad").val()
                }
            }).done(function (data, textStatus, jqXHR) {
//                console.log(data);
//                console.log(textStatus);
//                console.log(jqXHR);
                var dtm = data[0];
                if (dtm !== undefined) {
                    $(".tblCProductos tbody").append(
                            '<tr>' +
                            '<td class="tdIdPro hide">' + dtm.IDPROV + '</td>' +
                            '<td>' + dtm.Proveedor + '</td>' +
                            '<td class="tdIdProd hide">' + dtm.IDPROD + '</td>' +
                            '<td class="tdIdEti hide">' + dtm.IDETI + '</td>' +
                            '<td>' + dtm.Producto + ' ' + dtm.Marca + '</td>' +
                            '<td>' + dtm.UnidadMedida + '</td>' +
                            '<td class="tdCantidad">' + $("#Cantidad").val() + '</td>' +
                            '<td class="tdPrecio hide">' + dtm.Precio + '</td>' +
                            '<td class="text-center"><span class="label label-default">$ ' + $.number(dtm.Precio, 5, '.', ' ,') + '</span></td>' +
                            '<td class="text-center"><span class="label label-warning">$ ' + $.number(dtm.IMPORTE, 5, '.', ', ') + '</span></td>' +
                            '<td class="tdImporte hide">' + dtm.IMPORTE + '</td>' +
                            '<td><button type="button" class="btn btn3d btn-danger btn-lg btnDeleteRow" onclick="onDeleteRow(this,\'thTOTAL\',\'dMessages\')" data-toggle="tooltip" data-placement="top" title="" data-original-title="ELIMINAR" ><span class="fa fa-minus"></span></button> </td><td class="tdEstatus"><span class="label label-emerald">NUEVO</span></td></tr>');
                    tt = tt + ($("#Cantidad").val() * dtm.Precio);

                    $("#thTOTAL").effect("highlight", 3000);
                    $("#thTOTAL").html('<div class="col-md-9"></div><span class="label label-default">TOTAL:</span><span class="label label-primary"> $ ' + $.number(tt, 5, '.', ', ') + '</span>');
                    $.notify({
                        title: '<span class="fa fa-check fa-lg"></span>',
                        message: 'PRODUCTO AGREGADO'
                    }, {
                        type: 'success'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                    $("#dMessages").html('<span class="label label-success">' +
                            'EXITO! PRODUCTO AGREGADO' +
                            '</span>');
                    $("#dMessages").effect("pulsate", 3000);
                } else {
                    $("#dMessages").html('<span class="label label-danger">' +
                            'ERROR! EL PRODUCTO, NO EXISTE O NO TIENE UN PRECIO ASIGNADO' +
                            '</span>');
                    $("#dMessages").effect("pulsate", 3000);
                }
                $("#dpbtnAdd").addClass('hide');
                $("#dbtnAdd").removeClass('hide');

                $("#Proyectos").attr("readonly", false);
                $("#Anotaciones").attr("readonly", false);
                $("#Fecha").attr("readonly", false);
                $("#Numero").attr("readonly", false);
                $("#Etiqueta").attr("readonly", false);
                $("#Proveedores").attr("readonly", false);
                $("#Producto").attr("readonly", false);
                $("#Cantidad").attr("readonly", false);
            });
        } else {
            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'FALTAN DATOS POR CAPTURAR'
            }, {
                type: 'danger'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $(".btnAddRow").effect("shake");
            $("#dMessages").html('<span class="label label-danger"> ERROR! FALTAN DATOS POR CAPTURAR</span>');
            $("#dMessages").effect("pulsate", 3000);
        }
    });
    $("#btnReport").click(function () {
//        console.log(temp);
        if (temp !== undefined && temp > 0) {

            $("#btnReporting").removeClass("hide");
            $("#btnReport").addClass("hide");
            $.notify({
                title: '<span class="fa fa-cog fa-lg"></span>',
                message: 'GENERANDO REPORTE...'
            }, {
                type: 'success'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $.ajax({
                url: base_url + 'index.php/ctrlCompras/getDataReportCotizacion',
                type: "POST",
                data: {
                    ID: temp
                }
            }).done(function (data, textStatus, jqXHR) {
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
                console.log("EXITO");
                console.log(data);
                $("#msgCompras").html("DOCUMENTO GENERADO EN: <br>" + data);

                $("#btnReport").removeClass("hide");
                $("#btnReporting").addClass("hide");
                window.open(data, '_blank');
            }).fail(function () {
                console.log("ERROR GRAVE");
                console.log(arguments);
            });
        } else {
            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'NO HA SELECCIONADO NINGUN REGISTRO'
            }, {
                type: 'danger'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
        }
    });
    $("#dbtnAddU").click(function (e) {
        e.preventDefault();
        if ($("#UEtiqueta").val() !== undefined && $("#UEtiqueta").val() !== '' &&
                $("#UProducto").val() !== undefined && $("#UProducto").val() !== '' &&
                $("#UCantidad").val() !== undefined && $("#UCantidad").val() !== '') {

            $("#dpbtnAddU").removeClass('hide');
            $("#dbtnAddU").addClass('hide');

            $("#Anotaciones").attr("readonly", true);

            $("#UEtiqueta").attr("readonly", true);
            $("#UProveedores").attr("readonly", true);
            $("#UProducto").attr("readonly", true);
            $("#UCantidad").attr("readonly", true);

            $.ajax({
                url: base_url + 'index.php/ctrlCompras/onLoad',
                type: "POST",
                dataType: "JSON",
                data: {
                    indice: 11,
                    ID: $("#UProducto").val(),
                    ETIQUETAID: $("#UEtiqueta").val(),
                    PROVEEDORES: $("#UProveedores").val(),
                    CANTIDAD: $("#UCantidad").val()
                }
            }).done(function (data, textStatus, jqXHR) {
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
                console.log(data)
                var dtm = data[0];
                if (dtm !== undefined) {
                    $(".tblCProductosU tbody").append(
                            '<tr class="">' +
                            '<td class="tdIDDETALLE hide">0</td>' +
                            '<td class="tdIdPro hide">' + dtm.IDPROV + '</td>' +
                            '<td>' + dtm.Proveedor + '</td>' +
                            '<td class="tdIdProd hide">' + dtm.IDPROD + '</td>' +
                            '<td class="tdIdEti hide">' + dtm.IDETI + '</td>' +
                            '<td>' + dtm.Producto + ' ' + dtm.Marca + '</td>' +
                            '<td>' + dtm.UnidadMedida + '</td>' +
                            '<td class="tdCantidad"><input type="number" class="form-control" id="spCantidad" name="spCantidad" min="1" max="99999999" value="' + $("#UCantidad").val() + '" onchange="onRecalculate(this,this.value)" /></td>' +
                            '<td class="tdPrecio hide">' + dtm.Precio + '</td>' +
                            '<td class="text-center"><span class="label label-default">$ ' + $.number(dtm.Precio, 5, '.', ' ,') + '</span></td>' +
                            '<td class="text-center tdImporteF"><span class="label label-warning">$ ' + $.number(dtm.IMPORTE, 5, '.', ', ') + '</span></td>' +
                            '<td class="tdImporte hide">' + dtm.IMPORTE + '</td>' +
                            '<td class="tdCantidadN hide">' + $("#UCantidad").val() + '</td>' +
                            '<td><button type="button" class="btn btn3d btn-danger btn-lg btnDeleteRow" onclick="onDeleteRow(this,\'pnlTotalCotizacionUpdate\',\'pnlOCMessagesUpdate\')" data-toggle="tooltip" data-placement="top" title="" data-original-title="ELIMINAR" ><span class="fa fa-minus"></span></button> </td><td class="tdEstatus"><span class="label label-emerald">NUEVO</span></td></tr>');
                    tt = tt + ($("#UCantidad").val() * dtm.Precio);

                    $("#pnlTotalCotizacionUpdate").effect("highlight", 3000);
                    $("#pnlTotalCotizacionUpdate").html('<div class="col-md-9"></div><span class="label label-default">TOTAL:</span><span class="label label-primary"> $ ' + $.number(tt, 5, '.', ', ') + '</span>');
                    $("#pnlTotalCotizacionUpdate").append("<script> $(document).ready(function () {$('[data-toggle=\"tooltip\"]').tooltip();});</script>");
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'PRODUCTO AGREGADO', 'success');

                    $("#dMessagesU").html('<span class="label label-success">' +
                            'EXITO! PRODUCTO AGREGADO' +
                            '</span>');
                    $("#dMessagesU").effect("pulsate", 3000);
                } else {
                    $("#dMessagesU").html('<span class="label label-danger">' +
                            'ERROR! EL PRODUCTO, NO EXISTE O NO TIENE UN PRECIO ASIGNADO' +
                            '</span>');
                    $("#dMessagesU").effect("pulsate", 3000);
                }
                $("#dpbtnAddU").addClass('hide');
                $("#dbtnAddU").removeClass('hide');

                $("#UAnotaciones").attr("readonly", false);
                $("#UEtiqueta").attr("readonly", false);
                $("#UProveedores").attr("readonly", false);
                $("#UProducto").attr("readonly", false);
                $("#UCantidad").attr("readonly", false);
            }).fail(function () {
                console.log('ERROR AL OBTENER LOS DATOS');
                console.log(arguments)
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'FALTAN DATOS POR CAPTURAR', 'danger');
            $("#UbtnAdd").effect("shake");
            $("#dMessagesU").html('<span class="label label-danger"> ERROR! FALTAN DATOS POR CAPTURAR</span>');
            $("#dMessagesU").effect("pulsate", 3000);
        }
    });
    $("#btnRefresh").click(function () {
        onLoad();
    });
    $("#btnApproved").click(function () {
        if (temp !== undefined && temp !== 0 && temp > 0) {
            $("#btnApproved").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            $("#btnApproved").addClass("disabled");

            $("#modal_title").html("CARGANDO...");
            $("#pnlHeadCotizacion").html("");
            $("#pnlResumenProgress").removeClass("hide");
            $("#tblCProductosResumen").parent().addClass("hide");
            $("#mdlDetalleOC").modal('toggle');
            $("#dResumen").html(temp);

            $.ajax({
                url: base_url + 'index.php/ctrlCompras/onLoad',
                type: "POST",
                dataType: "JSON",
                data: {
                    indice: 8,
                    ID: temp
                }
            }).done(function (data, textStatus, jqXHR) {
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
                tt = 0;
                $("#pnlHeadCotizacion").html("");
                var head = jQuery.parseJSON(data.HEAD)[0];
                var rows = jQuery.parseJSON(data.ROWS);
                if (head.ESTATUS === 'APROBADA') {
                    $("#btnApprovedMDL").addClass("hide");
                } else {
                    $("#btnApprovedMDL").removeClass("hide");
                }
                $("#pnlResumenProgress").addClass("hide");
                $("#tblCProductosResumen").parent().removeClass("hide");
                $("#pnlHeadCotizacion").html('<h1>' + head.PROYECTO + '</h1><hr>\n\
                   <div class="col-md-12" align="left"><div class="col-md-1"></div><div class="col-md-11">\n\
<p class="text-muted">FECHA</p></div></div>\n\
<div class="col-md-2"></div><div class="col-md-10">\n\
<p class="text-justify">' + head.FECHA + '</p></div>\n\
<div class="col-md-12" align="left"><div class="col-md-1"></div><div class="col-md-11">\n\
<p class="text-muted">ANOTACIONES</p></div></div>\n\
<div class="col-md-2"></div><div class="col-md-10">\n\
<p class="text-justify">' + head.ANOTACIONES + '</p></div>\n\
<div class="col-md-12" align="left"><div class="col-md-1"></div><div class="col-md-11">\n\
<p class="text-muted">DETALLE</p></div></div>');
                $("#modal_title").html("DETALLE - COTIZACION " + head.NUMERO);
//                $.each(rows, function (k, dtm) {
//                    tt += dtm.CANTIDAD * dtm.Precio;
//                });
                $.each(rows, function (k, dtm) {
                    $(".tblCProductosResumen tbody").append(
                            '<tr>' +
                            '<td class="tdIdPro hide">' + dtm.IDPROV + '</td>' +
                            '<td>' + dtm.Proveedor + '</td>' +
                            '<td class="tdIdProd hide">' + dtm.IDPROD + '</td>' +
                            '<td class="tdIdEti hide">' + dtm.IDETI + '</td>' +
                            '<td>' + dtm.Producto + ' ' + dtm.Marca + '</td>' +
                            '<td>' + dtm.UnidadMedida + '</td>' +
                            '<td class="tdCantidad">' + dtm.CANTIDAD + '</td>' +
                            '<td class="tdPrecio hide">' + dtm.Precio + '</td>' +
                            '<td class="text-center"><span class="label label-default">$ ' + $.number(dtm.Precio, 5, '.', ' ,') + '</span></td>' +
                            '<td class="text-center"><span class="label label-warning">$ ' + $.number(dtm.IMPORTE, 5, '.', ', ') + '</span></td>' +
                            '<td class="tdImporte hide">' + dtm.IMPORTE + '</td>' +
                            '<td class="hide"><button type="button" class="btn btn3d btn-danger btn-lg btnDeleteRow" onclick="onDeleteRow(this,\'pnlTotalCotizacion\',\'\')" data-toggle="tooltip" data-placement="top" title="" data-original-title="ELIMINAR" ><span class="fa fa-minus"></span></button> </td><td class="chksApproved text-center">' +
                            '<input type="checkbox" value="Seleccionado" name="chkRow" id="chkRow" class="form-control" onchange="onChangeRowApproved(this)">' +
                            '</td></tr>');
                });
                $("#pnlTotalCotizacion").html(
                        '<span class="label label-default">TOTAL:</span>' +
                        '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');

            }).fail(function () {
                console.log('Error al comprometer los datos');
            }).always(function () {
                $("#btnApproved").removeClass("disabled");
                $("#btnApproved").find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    });
    Cuenta.change(function () {
        if (Autoriza.val() !== '' && Recibe.val() !== '' && Cuenta.val() !== '') {
            $("#btnApprovedMDL").removeClass("disabled");
        }
    });
    $("#btnReportingOC").click(function () {
        onGenerarOrdenDeCompra();
    });
    $("#chkhHead").change(function () {
        tt = 0.0;
        $('#tblCProductosResumen > tbody  > tr').each(function (key, value) {
            $(this).each(function (k, v) {
                var stt = 0.0;
                if ($("#chkhHead")[0].checked) {
                    $(v).find("#chkRow")[0].checked = true;
                    stt = parseFloat($(v).find(".tdCantidad")[0].innerText) * parseFloat($(v).find(".tdPrecio")[0].innerText);
                    tt = tt + stt;
                } else {
                    tt = 0.0;
                    $(v).find("#chkRow")[0].checked = false;
                }
            });

        });
        $("#pnlTotalCotizacion").html(
                '<span class="label label-default">TOTAL:</span>' +
                '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');
    });
//    $("#chkRow").change(function () {
//        console.log(this);
//        $('#tblCProductosResumen > tbody  > tr').each(function (key, value) {
//            $(this).each(function (k, v) {
//                var stt = 0.0;
//                if ($(v).find("#chkRow")[0].checked) {
//                    stt = parseFloat($(v).find(".tdCantidad")[0].innerText) * parseFloat($(v).find(".tdPrecio")[0].innerText);
//                    tt = tt + stt;
//                } else {
//                    stt = parseFloat($(v).find(".tdCantidad")[0].innerText) * parseFloat($(v).find(".tdPrecio")[0].innerText);
//                    tt = tt - stt;
//                    $(v).find("#chkRow")[0].checked = false;
//                }
//            });
//
//        });
//        $("#pnlTotalCotizacion").html(
//                '<span class="label label-default">TOTAL:</span>' +
//                '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');
//    });
//    $("#btnApproved").click(function () {
//        onAproved();
//    });

    $("#btnApprovedMDL").click(function () {
        $("#btnApprovedMDL").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
        $("#btnApprovedMDL").addClass("disabled");
        $("#btnSaveCog").removeClass("hide");
        onAproved();
        setTimeout(function () {
            $("#btnApprovedMDL").removeClass("disabled");
            $("#btnApprovedMDL").find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
        }, 2500);
    });
    $("#btnEdit").click(function () {
        if (temp !== undefined && temp !== 0 && temp > 0) {
            $("#modal_title_update").html("CARGANDO...");
            $("#pnlHeadCotizacionUpdate").addClass("hide");
            $("#pnlAddProductos").addClass("hide");
            $("#pnlResumenProgressUpdate").removeClass("hide");
            $("#tblCProductosU").parent().addClass("hide");
            $("#mdlUpdateOC").modal('toggle');
            $("#dResumen").html(temp);

            $.ajax({
                url: base_url + 'index.php/ctrlCompras/onLoad',
                type: "POST",
                dataType: "JSON",
                data: {
                    indice: 8,
                    ID: temp
                }
            }).done(function (data, textStatus, jqXHR) {
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
                tt = 0;
//                $("#pnlHeadCotizacionUpdate").html("");
                var head = jQuery.parseJSON(data.HEAD)[0];
                var rows = jQuery.parseJSON(data.ROWS);
                $("#pnlResumenProgressUpdate").addClass("hide");
                $("#tblCProductosU").parent().removeClass("hide");
                $("h1.dtm_titulo_proy").text(head.PROYECTO);
                $("#UAnotaciones").val(head.ANOTACIONES);
                $("#UElabora").select2("val", head.ELABORA);
                $("p.dtm_fecha").text(head.FECHA);
                $("#USolicitante").val(head.SOLICITA);
                $("#USolicitante").select2("val", head.SOLICITA);
                $("#modal_title_update").html("EDITAR - COTIZACION " + head.NUMERO);
                $.each(rows, function (k, dtm) {
                    tt += dtm.CANTIDAD * dtm.Precio;
                });
                console.log('Procesando...')
                $.each(rows, function (k, dtm) {
                    $(".tblCProductosU tbody").append(
                            '<tr>' +
                            '<td class="tdIDDETALLE hide">' + dtm.IDDETALLE + '</td>' +
                            '<td class="tdIdPro hide">' + dtm.IDPROV + '</td>' +
                            '<td>' + dtm.Proveedor + '</td>' +
                            '<td class="tdIdProd hide">' + dtm.IDPROD + '</td>' +
                            '<td class="tdIdEti hide">' + dtm.IDETI + '</td>' +
                            '<td>' + dtm.Producto + ' ' + dtm.Marca + '</td>' +
                            '<td>' + dtm.UnidadMedida + '</td>' +
                            '<td class="tdCantidad"><input type="number" class="form-control" id="spCantidad" name="spCantidad" min="1" max="99999999" value="' + dtm.CANTIDAD + '" onchange="onRecalculate(this,this.value)" /></td>' +
                            '<td class="tdPrecio hide">' + dtm.Precio + '</td>' +
                            '<td class="text-center"><span class="label label-default">$ ' + $.number(dtm.Precio, 5, '.', ' ,') + '</span></td>' +
                            '<td class="text-center tdImporteF"><span class="label label-warning">$ ' + $.number(dtm.IMPORTE, 5, '.', ', ') + '</span></td>' +
                            '<td class="tdImporte hide">' + dtm.IMPORTE + '</td>' +
                            '<td class="tdCantidadN hide">' + dtm.CANTIDAD + '</td>' +
                            '<td><button type="button" class="btn btn3d btn-danger btn-lg" onclick="onDeleteRow(this,\'pnlTotalCotizacionUpdate\',\'pnlOCMessagesUpdate\')" data-toggle="tooltip" data-placement="top" title="" data-original-title="ELIMINAR" ><span class="fa fa-minus"></span></button> </td><td class="tdEstatus"><span class="label label-primary">GUARDADO</span></td></tr>');
                });
                //CLICK SELECTED ROW
                $('.tblCProductosU tbody').on('click', 'tr', function () {
                    $(".tblCProductosU").find("tr").removeClass("success");
//                    $.each($(".tblCProductosU tbody").find("tr").find(".tdCantidad"), function (k, v) {
//                        console.log($(v).find(".spCantidad").innerText)
//                    });
                    $(".tblCProductosU").find("tr").removeClass("warning");
                    $(this).addClass('success');


                });

                $("#pnlTotalCotizacionUpdate").html(
                        '<span class="label label-default">TOTAL:</span>' +
                        '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');
//                console.log(data);
                $("#dbtnAddU").removeClass("disabled");
                $("#pnlHeadCotizacionUpdate").removeClass("hide");
                $("#pnlAddProductos").removeClass("hide");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                console.log('Error al comprometer los datos Y/O extraerlos');
            });

        } else {
            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'DEBE DE ELEGIR UN REGISTRO'
            }, {
                type: 'danger'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
        }
    });
    $("#btnCancel").click(function () {
        onCancelCompra();
        onLoad();
    });
    $("#btnUpdate").click(function () {
        if ($("#tblCProductosU > tbody > tr").length > 0) {
            $("#btnUpdate").addClass("hide");
            $("#btnUpdateRefresh").removeClass("hide");
            onUpdate();
            setTimeout(function () {
                $("#btnUpdate").removeClass("hide");
                $("#btnUpdateRefresh").addClass("hide");
                $("#pnlOCMessagesUpdate").html('<span class="label label-success">' +
                        'EXITO! SE HAN GUARDADO LOS CAMBIOS' +
                        '</span>');
            }, 2500);

        } else {
            $("#pnlOCMessagesUpdate").html('<span class="label label-danger">ERROR! NO HA AGREGADO PRODUCTOS</span>');
            $("#pnlOCMessagesUpdate").effect("shake", 1000);

        }
    });
    $("#Etiqueta").change(function (e) {
        onChangeProductos("Proveedores", "Producto", "Etiqueta", "ProductLoader", "dMessages");
    });
    $("#UEtiqueta").change(function (e) {
        onChangeProductos("UProveedores", "UProducto", "UEtiqueta", "UProductLoader", "dUMessages");
    });
    $("#btnSave").click(function () {
        $("#btnSave").addClass("disabled").find("span").removeClass("fa-save").addClass("fa-cog fa-spin");
        onSave();
        setTimeout(function () {
            $("#btnSave").removeClass("disabled").find("span").addClass("fa-save").removeClass("fa-cog fa-spin");
        }, 2500);
    });
    $("#btnCanceledRecords").click(function () {
        getData("tblComprasCanceladas", base_url + "index.php/ctrlCompras/onLoad", 10, "rCompras", "msgCompras", "NO SE ENCONTRARON REGISTROS");
    });

    /*evento para remover las filas de las tablas, resetear la variable que acumula el total*/
    $("#mdlNuevoOC").on('hidden.bs.modal', function () {
        tt = 0;
        $("#frmCotizacion")[0].reset();
        $("#frmCotizacion select").select2("val", "");
        $('#tblCProductos > tbody  > tr').each(function (key, value) {
            $(this).remove();
        });
        $("#frmCotizacionUpdate input").val("");
        $("#thTOTAL").effect("highlight", 3000);
        $("#thTOTAL").html('<div class="col-md-9"></div><span class="label label-default">TOTAL:</span><span class="label label-primary"> $ 0.00</span>');
    });

    $("#mdlUpdateOC").on('hidden.bs.modal', function () {
        tt = 0;
//        console.log($('#pnlDetailCotizacionUpdate > tbody  > tr').length);
        $("#pnlOCMessagesUpdate").html("");
        $('#tblCProductosU > tbody  > tr').each(function (key, value) {
            $(this).remove();
            console.log('borrando..' + key)
        });
        $("#pnlTotalCotizacionUpdate").effect("highlight", 3000);
        $("#pnlTotalCotizacionUpdate").html('');

        $("#dbtnAddU").addClass("disabled");
        $("#frmCotizacionUpdate")[0].reset();
        $("#frmCotizacionUpdate input").val("");
        $("#frmCotizacionUpdate select").select2("val", "");
    });

    $("#mdlDetalleOC").on('hidden.bs.modal', function () {
        tt = 0;
        $('#tblCProductosResumen > tbody  > tr').each(function (key, value) {
            $(this).remove();
        });
    });

    $("#mdlNuevoOC").on('hidden.bs.modal', function () {
        $("#mdlNuevoOC input").val("");
        $("#mdlNuevoOC select").select2("val", "");
    });

    $("#Proyectos").change(function (e) {
        if ($("#Proyectos").val() !== "") {
            $("#pnlOpciones").removeClass("hide");
            $("#collapse1").removeClass("in");
            $("#collapse2").toggleClass("in");
        } else {
            $("#pnlOpciones").toggleClass("hide");
            $("#collapse2").toggleClass("in");
        }
    });
    /**/
});
function onOC() {

}
function onDeleteRow(e, target_total, target_messages) {
    var n = $(e).parent()[0].parentNode;
    target_total_value = tt;
    var temp_value = $(n).find("td.tdImporte")[0].innerText;
    if (target_total_value > 0) {
        tt = target_total_value - temp_value;
        console.log(target_total + "" + tt)

        $("#" + target_total).html(
                '<span class="label label-default">TOTAL:</span>' +
                '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');
        $("#" + target_total).effect("highlight", 3000);
        $("#" + target_total).html('<div class="col-md-9"></div><span class="label label-default">TOTAL:</span><span class="label label-primary"> $ ' + $.number(tt, 5, '.', ', ') + '</span>');

    }
//    $(e).parent()[0].parentNode.remove();
    var parent = $(e).parent()[0].parentNode;

    if ($(parent).find(".tdEstatus").find("span")[0].innerText === 'GUARDADO') {
        $(parent).find(".tdEstatus").find("span").removeClass("label-primary").addClass("label-danger");
        $(parent).find(".tdEstatus").find("span")[0].innerText = "ELIMINADO";
    }
    if ($(parent).find(".tdEstatus").find("span")[0].innerText === 'NUEVO') {
        parent.remove();
    }
//    $(e).parent()[0].parentNode.remove();
    $.notify({
        title: '<span class="fa fa-check fa-lg"></span>',
        message: 'REGISTRO ELIMINADO'
    }, {
        type: 'success'
    }, {
        animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
        }
    });

    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');

    $("#" + target_messages).html('<span class="label label-danger">' +
            '¡¡¡¡¡REGISTRO ELIMINADO!!!!!' +
            '</span>');

    $("#" + target_messages).effect("pulsate", 3000);
}

function onChangeProductos(origin_one, origin_two, origin_third, loader, msgs) {

    var Proveedores = $("#" + origin_one).val();
    if (Proveedores !== undefined && Proveedores !== null && Proveedores.length > 0) {
        $("#" + origin_two).parent('div').addClass("hide");
        $("#" + loader).removeClass("hide");
        $.ajax({
            url: base_url + 'index.php/ctrlCompras/onLoad',
            type: "POST",
            dataType: "JSON",
            data: {
                indice: 4,
                ID: $("#" + origin_third).val(),
                PROVEEDORES: $("#" + origin_one).val()
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function (data, textStatus, jqXHR) {
//            console.log(data);
//            console.log(textStatus);
//            console.log(jqXHR);
            if (data.length === 0) {

                $("#" + msgs).html('<span class="label label-danger">' +
                        'ERROR! EL PROVEEDOR SELECCIONADO NO TIENE PRODUCTOS EN ESTA CATEGORIA' +
                        '</span>');
                $("#" + msgs).effect("pulsate", 3000);

                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL PROVEEDOR SELECCIONADO NO TIENE PRODUCTOS EN ESTA CATEGORIA', 'danger');
            } else {
                $("#" + msgs).html('<span class="label label-success">' +
                        'EXITO! SE HAN ENCONTRADO PRODUCTOS EN ESTA CATEGORIA' +
                        '</span>');
                var options = '<option value=""></option>';
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.Producto + ' ' + v.Marca + '</option>';
                });
                $("#" + origin_two).html(options);
                $("#" + loader).addClass("hide");
                $("#" + origin_two).parent('div').removeClass("hide");
            }
        });
    } else {
        $.notify({
            title: '<span class="fa fa-exclamation fa-lg"></span>',
            message: 'DEBE DE SELECCIONAR UN PROVEEDOR'
        }, {
            type: 'danger'
        }, {
            animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
            }
        });
        $("#dMessages").html('<span class="label label-danger">' +
                'ERROR! DEBE DE SELECCIONAR UN PROVEEDOR' +
                '</span>');
        $("#Proveedores").val('');
    }
}

function  onChangeProductosx() {
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/onLoad',
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 2,
            ID: $("#Producto").val()
        }
    }).done(function (data, textStatus, jqXHR) {
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        var options = '<option value=""></option>';
        $.each(data, function (k, v) {
            options = options + '<option value="' + v.ID + '">' + v.Producto + ' ' + v.Marca + '</option>';
        });
        $("#Producto").html(options);
    });
}

function getFormatNumber(num) {
    $.ajax({
        url: base_url + 'index.php/ctrlResources/getFormatNumber',
        type: "POST",
        data: {
            NUMERO: num,
            NDECIMALES: 2
        }
    }).done(function (data, textStatus, jqXHR) {
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        nformat = data;
    });
    return nformat;
}

function onSave() {
    var encabezado = {
        PROYECTO: $("#Proyectos").val(),
        ELABORA: $("#Elabora").val(),
        SOLICITANTE: $("#Solicitante").val(),
        FECHA: $("#Fecha").val(),
        NUMERO: $("#Numero").val(),
        FACTURADO: $("#cmbFacturadoA").val(),
        ANOTACIONES: $("#Anotaciones").val(),
        ESTATUS: "SIN APROBAR"
    };
    var detalle = [];
    $('#tblCProductos > tbody  > tr').each(function (key, value) {
        $(this).each(function (k, v) {
            var producto = {
                IDPRO: $(v).find(".tdIdPro")[0].innerText,
                IDETI: $(v).find(".tdIdEti")[0].innerText,
                IDPROD: $(v).find(".tdIdProd")[0].innerText,
                CANTIDAD: $(v).find(".tdCantidad")[0].innerText,
                PRECIO: $(v).find(".tdPrecio")[0].innerText
            };
            detalle.push(producto);
        });
    });
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/onLoad',
        type: "POST",
        data: {
            indice: 5,
            ENCABEZADO: encabezado,
            DETALLE: detalle
        }
    }).done(function (data, textStatus, jqXHR) {
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        console.log(data);
        if (parseInt(data) === 1) {
            $("#mdlNuevoOC").modal("hide");
            onLoad();
        } else {
            $("#dMessages").html('<span class="label label-danger">' +
                    'ERROR! NO SE HA PODIDO PROCESAR LA COTIZACION </span>');
        }
    });
}

function getData(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
    $("#" + target_result).html('<div align="center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
    temp = 0;
    $.ajax({
        url: url,
        type: "POST",
        dataType: "JSON",
        data: {
            indice: indicex
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(XMLHttpRequest.responseText);
            console.log(errorThrown);
            console.log(textStatus);
        }
    }).done(function (data, textStatus, jqXHR) {
//        console.log(data);
//        console.log(textStatus);
//        console.log(jqXHR);
//        console.log(data)
        var tblName = tblname;
//        $("#"+target_messages).append(data);
//        console.log(data.length);
        if (data.length > 0) {
            $("#" + target_result).html(getTable(tblName, data));
            var tblSelected = $('#' + tblName).DataTable(tableOptions);
            //CLICK SELECTED ROW
            $('#' + tblName + ' tbody').on('click', 'tr', function () {
                $("#" + tblName).find("tr").removeClass("success");
                $("#" + tblName).find("tr").removeClass("warning");
//                console.log(this)
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
                $("#btnEdit").trigger("click");
            });
            /*ROW DETAILS PLUS*/

            /*END ROW DETAILS PLUS*/

            $.notify({
                title: '<span class="fa fa-check fa-lg"></span>',
                message: 'LOS DATOS HAN SIDO ACTUALIZADOS'
            }, {
                type: 'success'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
        } else {
            $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1 class="text-center">' + fail_message + '</h1>' +
                    '</div>');
        }
    });
}

function format(d) {
    console.log(d);
}

function onLoad() {
    $.ajax({
        url: base_url + 'index.php/ctrlproveedor/getData',
        type: "POST",
        dataType: "JSON",
        success: function (data) {
//            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
//                    console.log(v.Proveedor);
                    options = options + '<option value="' + v.ID + '">' + v.Proveedor + '</option>';
                });
                $("#Proveedores").html(options);
                $("#UProveedores").html(options);
            } else {
                $.notify({
                    title: '<span class="fa fa-exclamation fa-lg"></span>',
                    message: 'LOS PROVEEDORES NO TIENEN PRECIOS ASIGNADOS O OCURRIO MIENTRAS SE OBTENIAN'
                }, {
                    type: 'danger'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            }
        }
    });
    onGetFormasDePago();
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/onLoad',
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 13
        },
        success: function (data) {
//            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
//                    console.log(v.Proveedor);
                    options = options + '<option value="' + v.ID + '">' + v.NombreC + '</option>';
                });
                $("#cmbFacturadoA").html(options);
//                $("#UProveedores").html(options);
            } else {
                $.notify({
                    title: '<span class="fa fa-exclamation fa-lg"></span>',
                    message: 'LOS PROVEEDORES NO TIENEN PRECIOS ASIGNADOS O OCURRIO MIENTRAS SE OBTENIAN'
                }, {
                    type: 'danger'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            }
        }
    });
    getData("tblCompras", base_url + "index.php/ctrlCompras/onLoad", 6, "rCompras", "msgCompras", "NO SE ENCONTRARON REGISTROS");
    getUsuarios();
    getCuentas();
}

function onAproved() {

    HoldOn.open({
        theme: "sk-bounce",
        message: "ESPERE..."
    });
    console.log(temp);
    var detalle = [];
    var has_products = false;
    $('#tblCProductosResumen > tbody  > tr').each(function (key, value) {
        $(this).each(function (k, v) {
            if ($(v).find("#chkRow")[0].checked) {
                console.log("PRODUCTO SELECCIONADO: " + $(v).find(".tdIdProd")[0].innerText + ", CON EL PROVEEDOR: " + $(v).find(".tdIdPro")[0].innerText + ", CON PRECIO: " + $(v).find(".tdPrecio")[0].innerText);
                var producto = {
                    IDPRO: $(v).find(".tdIdPro")[0].innerText,
                    IDETI: $(v).find(".tdIdEti")[0].innerText,
                    IDPROD: $(v).find(".tdIdProd")[0].innerText,
                    CANTIDAD: $(v).find(".tdCantidad")[0].innerText,
                    PRECIO: $(v).find(".tdPrecio")[0].innerText
                };
                detalle.push(producto);
                has_products = true;
            } else {
                console.log("PRODUCTO NO SELECCIONADO: " + $(v).find(".tdIdProd")[0].innerText + ", CON EL PROVEEDOR: " + $(v).find(".tdIdPro")[0].innerText + ", CON PRECIO: " + $(v).find(".tdPrecio")[0].innerText);
            }
        });
    });

    if (temp !== undefined && temp !== null && temp !== 0 && temp > 0 && has_products) {

        $.ajax({
            url: base_url + 'index.php/ctrlCompras/onApproved',
            type: "POST",
            data: {
                ID: temp,
                CONTRATO: $("#Contrato").val(),
                FORMADEPAGO: $("#cmbFormaDePago").val(),
                ENTREGA: $("#cmbLugarRecepcion").val(),
                AUTORIZA: $("#Autoriza").val(),
                RECIBE: $("#Recibe").val(),
                CUENTA: $("#Cuenta").val(),
                DETALLE: detalle
            }
        }).done(function (data, textStatus, jqXHR) {
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);
            if (parseInt(data) === 1) {
                getData("tblCompras", base_url + "index.php/ctrlCompras/onLoad", 6, "rCompras", "msgCompras", "NO SE ENCONTRARON REGISTROS");
                $("#mdlDetalleOC").modal('hide');
                HoldOn.close();
                $.notify({
                    title: '<span class="fa fa-check fa-lg"></span>',
                    message: 'LA COTIZACION HA SIDO APROBADA'
                }, {
                    type: 'success'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            } else {
                $.notify({
                    title: '<span class="fa fa-exclamation fa-lg"></span>',
                    message: 'LA COTIZACION NO HA SIDO APROBADA'
                }, {
                    type: 'danger'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });

            }
        }).fail(function () {

            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'ERROR! LA COTIZACION NO HA SIDO APROBADA, POR UN PROBLEMA EN EL SERVIDOR'
            }, {
                type: 'danger'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
        });

    } else {
        $("#msgAprobacionDeCotizacion").html('<span class="label label-danger">DEBE DE SELECCIONAR UN REGISTRO</span>');
        $.notify({
            title: '<span class="fa fa-exclamation fa-lg"></span>',
            message: 'DEBE DE SELECCIONAR UN REGISTRO'
        }, {
            type: 'danger'
        }, {
            animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
            }
        });

    }

}

function onCancelCompra() {
    console.log(temp);
    if (temp !== undefined && temp !== null && temp !== 0 && temp > 0) {
        $.ajax({
            url: base_url + 'index.php/ctrlCompras/onLoad',
            type: "POST",
            data: {
                indice: 9,
                ID: temp
            }
        }).done(function (data, textStatus, jqXHR) {
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);
            console.log(data);
            if (parseInt(data) === 1) {
                $.notify({
                    title: '<span class="fa fa-check fa-lg"></span>',
                    message: 'EL REGISTRO ' + temp + ' HA SIDO CANCELADO'
                }, {
                    type: 'success'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            } else {
                $.notify({
                    title: '<span class="fa fa-exclamation fa-lg"></span>',
                    message: 'EL REGISTRO ' + temp + ' NO HA SIDO CANCELADO'
                }, {
                    type: 'danger'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            }
        });

    } else {
        $.notify({
            title: '<span class="fa fa-exclamation fa-lg"></span>',
            message: 'DEBE DE SELECCIONAR UN REGISTRO'
        }, {
            type: 'danger'
        }, {
            animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
            }
        });

    }
}

function getLastID() {
    $("#pgrNCotizacion").removeClass("hide");
    $("#Numero").parent().addClass("hide");
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/onLoad',
        type: "POST",
        dataType: "JSON",
        data: {
            indice: 7
        }
    }).done(function (data, textStatus, jqXHR) {
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        var pad = "000000";
        if (data[0].MAXID !== null) {
            var str_value = pad.substring(0, pad.length - data[0].MAXID.length) + (parseInt(data[0].MAXID) + 1);
        } else {
            var str_value = '000001';
        }
        $("#Numero").val(str_value);
        $("#pgrNCotizacion").addClass("hide");
        $("#Numero").parent().removeClass("hide");
        console.log(data);
    });
}

function onEnterCantidad(obj, event) {
    var temp_cantidad_sp = $(e).find(".spCantidad")[0].value;
    $(e).find(".tdCantidad").html(temp_cantidad_sp);
}

function onRecalculate(obj, v) {
    console.log(v === 0, parseInt(v) === 0);
    if (parseInt(v) === 0) {
        $(obj).val(1);
        $("#pnlDetailCotizacionUpdate").find("p.text-info").effect("highlight", 3000);
        $("#pnlDetailCotizacionUpdate").find("p.text-info").text("NO ES POSIBLE CAPTURAR VALORES EN 0");
    }
//    console.log(v, obj);
    /*SE ACCEDE AL COMPONENTE CON THIS, AQUI SE BUSCA, EL PRIMER PADRE ES UN "TD", EL PADRE DEL "TD" DONDE SE ENCUENTRA EL COMPONENTE, ES UN "TR", LA POSICION CERO ES LA UNICA QUE APARECE PORQUE SOLO ESTAMOS EDITANDO 1 REGISTRO*/
    var trpp = $(obj).parent().parent()[0];
    /*UNA VEZ QUE YA SE CONOCE EL TR EN EL CUAL SE ENCUENTRA EL COMPONENTE QUE SE EDITO, JUSTO EN ESE MOMENTO, NO TIENE ESE VALOR, HACE FALTA OBTENERLE Y MODIFICARLO, YA QUE SE QUEDA CON UN VALOR ANTERIOR AUNQUE ESTEMOS VISUALIZANDO UNO DIFERENTE*/
    var tds = $(trpp)[0].innerHTML;

    var cantidad = v;
    /*EL TR NOS DIVIDIRA EN UN ARREGLO DEL 0 HASTA N POSICIONES, LA POSICION 7 ES EL PRECIO EN ESTE CASO*/
    console.log($(tds));//<--ESTO TIENE EL ARREGLO DE "TD" DE CADA "TR"
    var preciou = $(tds)[8].innerHTML;
    var total_final = cantidad * preciou;

    /*ESTO IMPRIME UN TR*/
//    console.log($(trpp)[0]);

    var tr = $(trpp)[0];
//    console.log($(tr).find(".tdImporteF")[0].innerText);
    var td_importe = $(tr).find(".tdImporte")[0];
    var td_importe_format = $(tr).find(".tdImporteF")[0];
    var td_cantidad = $(tr).find(".tdCantidadN")[0];
    td_cantidad.innerText = cantidad;
    /*ESTO MODIFICA EL IMPORTE SIN FORMATO*/
    td_importe.innerText = total_final;
    td_importe_format.innerHTML = ' <span class="label label-warning">$ ' + $.number(total_final, 5, '.', ', ') + '</span>';
    if (tt > 0) {
        tt = 0;
    }
    $.each($(".tblCProductosU tbody").find("tr").find(".tdImporte"), function (k, v) {
        var vtt = 0;
        vtt = parseFloat(v.innerText);
        tt = (tt + vtt);

        $("#pnlTotalCotizacionUpdate").html(
                '<span class="label label-default">TOTAL:</span>' +
                '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');
    });
}

function onUpdate() {
    var uencabezado = {
        ID: $("#txtUID").val(),
        ELABORA: $("#UElabora").val(),
        SOLICITA: $("#USolicitante").val(),
        PROYECTO: $("#UProyectos").val(),
        NUMERO: $("#UNumero").val(),
        ANOTACIONES: $("#UAnotaciones").val()
    };
    var udetalle = [];
    $('#tblCProductosU > tbody  > tr').each(function (key, value) {
        $(this).each(function (k, v) {

            var uproducto = {
                IDDET: $(v).find(".tdIDDETALLE")[0].innerText,
                IDPRO: $(v).find(".tdIdPro")[0].innerText,
                IDETI: $(v).find(".tdIdEti")[0].innerText,
                IDPROD: $(v).find(".tdIdProd")[0].innerText,
                CANTIDAD: $(v).find(".tdCantidadN")[0].innerText,
                PRECIO: $(v).find(".tdPrecio")[0].innerText,
                ESTATUS: $(v).find(".tdEstatus").find("span")[0].innerText
            };
            var c = $(v).find(".tdCantidadN")[0].innerText;

            console.log(c);
            udetalle.push(uproducto);
        });
    });
    console.log(uencabezado, udetalle);
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/onUpdate',
        type: "POST",
        data: {
            ID: temp,
            ENCABEZADO: uencabezado,
            DETALLE: udetalle
        }
    }).done(function (data, textStatus, jqXHR) {
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        if (parseInt(data) === 1) {
            $("#mdlUpdateOC").modal("hide");
            onLoad();
        } else {
            $("#pnlOCMessagesUpdate").html('<span class="label label-danger">' +
                    'ERROR! NO SE HA PODIDO PROCESAR LA COTIZACION </span>');
        }
    });
//    $("#dbtnSave").addClass("hide");
//    $("#btnSave").removeClass("hide");
}

function onGenerarOrdenDeCompra() {

    if (temp !== undefined && temp !== null && temp !== 0 && temp > 0) {
        $("#btnReportingOC").addClass("disabled");
        $("#btnReportingOC").find("span").removeClass("fa-cart-arrow-down").addClass("fa-cog fa-spin");
        $.ajax({
            url: base_url + 'index.php/ctrlCompras/onGenerarOrdenDeCompra',
            type: "POST",
            data: {
                ID: temp
            }
        }).done(function (data, textStatus, jqXHR) {
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);
            $.notify({
                title: '<span class="fa fa-check fa-lg"></span>',
                message: 'GENERANDO ORDEN DE COMPRA...'
            }, {
                type: 'success'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });

            window.open(data, '_blank');
        }).fail(function () {
            console.log(arguments);
        }).always(function () {
            $("#btnReportingOC").removeClass("disabled");
            $("#btnReportingOC").find("span").removeClass("fa-cog fa-spin").addClass("fa-cart-arrow-down");
        });
    } else {
        $.notify({
            title: '<span class="fa fa-exclamation fa-lg"></span>',
            message: 'DEBE DE SELECCIONAR UN REGISTRO'
        }, {
            type: 'danger'
        }, {
            animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
            }
        });
    }
}

function onChangeRowApproved(e) {

    var stt = 0.0;
    var row = $(e).parent().parent();
    var precio = $(row).find(".tdPrecio")[0].innerText;
    var cantidad = $(row).find(".tdCantidad")[0].innerText;
    var stt = parseFloat($(row).find(".tdPrecio")[0].innerText) * parseFloat($(row).find(".tdCantidad")[0].innerText);
    console.log(stt, parseFloat(stt).toFixed(2));
    console.log($(e)[0].checked);
    if ($(e)[0].checked) {
        tt = tt + stt;
    } else {
        tt = tt - stt;
    }
//    $('#tblCProductosResumen > tbody  > tr').each(function (key, value) {
//        $(this).each(function (k, v) {
//            if ($(v).find("#chkRow")[0].checked) {
//                console.log($(v).find(".tdPrecio")[0].innerText);
//                console.log($(v).find(".tdCantidad")[0].innerText);
//                stt = parseFloat($(v).find(".tdCantidad")[0].innerText) * parseFloat($(v).find(".tdPrecio")[0].innerText);
//                console.log('SUBTOTAL: ' + stt);
//                tt = tt + stt;
//            } else {
//                stt = parseFloat($(v).find(".tdCantidad")[0].innerText) * parseFloat($(v).find(".tdPrecio")[0].innerText);
//                if(tt> 0){
//                    tt = tt - stt;
//                } 
//                else{
//                    tt = 0.0;
//                }
//                $(v).find("#chkRow")[0].checked = false;
//            }
//        });
//    });

    $("#pnlTotalCotizacion").html(
            '<span class="label label-default">TOTAL:</span>' +
            '<span class="label label-primary">$ ' + $.number(tt, 5, '.', ', ') + '</span>');
}

function onGetFormasDePago() {
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/getFormaDePago',
        type: "POST",
        dataType: "JSON",
        success: function (data) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.FORMADEPAGO + '</option>';
                });
                $("#cmbFormaDePago").html(options);
            } else {
                $.notify({
                    title: '<span class="fa fa-exclamation fa-lg"></span>',
                    message: 'LOS PROVEEDORES NO TIENEN PRECIOS ASIGNADOS O OCURRIO MIENTRAS SE OBTENIAN'
                }, {
                    type: 'danger'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
            }
        }
    });
}

function getUsuarios() {
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/getUsuarios',
        type: "POST",
        dataType: "JSON",
        success: function (data) {
            //                console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.Id + '">' + v.nombre + ' ' + v.apaterno + ' ' + v.amaterno + '</option>';
                });
                $("#Elabora").html(options);
                $("#UElabora").html(options);
                $("#Solicitante").html(options);
                $("#USolicitante").html(options);
                $("#Autoriza").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS DE USUARIOS', 'danger');
            }
        },
        error: function (x, y, z) {
            console.log(x, y, z);
        }
    });
}

function getCuentas() {
    $.ajax({
        url: base_url + 'index.php/ctrlCompras/getCuentas',
        type: "POST",
        dataType: "JSON",
        success: function (data) {
            //                console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.CUENTA + '</option>';
                });
                $("#Cuenta").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON CUENTAS', 'danger');
            }
        },
        error: function (x, y, z) {
            console.log(x, y, z);
        }
    });
}