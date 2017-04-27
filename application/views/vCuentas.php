<div class="row"> 
    <div class="col-md-12 margin-15-top-bottom">  
        <!------------------------OPTIONS------------------------------------------>
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO CUENTAS <span class="fa fa-chevron-up" ></span></div>
                </div> 
                <div class="col-md-2 panel-title" align="right">
                    <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div id="btnAccions" align="center" class="col-md-12">
                        <fieldset>
                            <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaCuenta" > 
                                <button id="btnAgregarTerceros" class="btn btn3d   btn-default fa-lg "  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVA CUENTA">
                                    <span class="fa fa-plus fa-3x info-icon"></span></button>
                            </span>
                            <button id="btnEditarCuentas" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="MODIFICAR CUENTA"><span class="fa fa-pencil fa-3x success-icon"></span></button>

                            <button id="btnRefrescarCuentas" class="btn btn3d btn- btn-default fa-lg" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="REFRESCAR CUENTAS"  ><span class="fa fa-refresh fa-3x warning-icon"></span></button>

                            <button id="btnRefrescarCuentas" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="ACTUALIZAR SALDO"  ><i class="fa fa-money fa-3x cyan-icon"></i>  
                            </button>
                        </fieldset>
                    </div>  
                    <div id="content-busqueda" class="col-md-12 ui-widget-content hide ztop">
                        <form id="frmBusquedaEspecifica">
                            <div class="col-md-2">
                                <label for="">INICIO</label> 
                                <input type="text" data-provide="datepicker" id="FechaInicioH" name="FechaInicioH" class="form-control" required="" data-date-format="dd/mm/yyyy" readonly="">

                            </div>
                            <div class="col-md-2">
                                <label for="">TERMINO</label>
                                <input type="text" data-provide="datepicker" id="FechaTerminoH" name="FechaInicioH" class="form-control" required="" data-date-format="dd/mm/yyyy" readonly="">

                            </div>
                            <div class="col-md-3">
                                <label for="">EMPRESA</label>
                                <select id="cmbEmpresaBusqueda" name="cmbEmpresaBusqueda" class="form-control"> 
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">PROVEEDOR</label>
                                <select id="cmbProveedorFactura" name="cmbProveedorFactura" class="form-control">
                                </select>
                            </div>
                            <div class="col-md-1" align="center" > 
                                <button id="btnReporteBusqueda" class="btn btn3d btn-lg btn-indigo"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSCAR" type="button" >
                                    <span class="fa fa-search fa-2x"></span>
                                </button>
                            </div>
                            <div class="col-md-1" align="center" > 
                                <button id="btnResetBusqueda" class="btn btn3d btn-lg btn-brown"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="RESETEAR"  type="button" >
                                    <span class="fa fa-trash fa-2x"></span>
                                </button>
                                <script>
                                </script>
                                <!--</span>-->
                            </div>
                            <div class="col-md-12" align="center" >
                                <div id="msgReportsTF"></div> 

                                <button id="btnReportesFacturas" class="btn btn3d btn-lg btn-brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL(A)"  type="button" >
                                    <span class="fa fa-eye fa-2x"></span>
                                </button> 
                                <button id="btnReportesFacturasSinAvanzar" class="btn btn3d btn-lg btn-brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL(SA)(REGISTRADA)"  type="button" >
                                    <span class="fa fa-eye-slash fa-2x"></span>
                                </button> 
                                <button id="btnCRIndividual" class="btn btn3d btn-lg btn-brown " data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO"  type="button" >
                                    <span class="fa fa-exclamation fa-2x"></span>
                                </button>  
                                <button id="btnAcumuladoPorProveedor" class="btn btn3d btn-lg btn-brown " data-toggle="tooltip" data-placement="top" title="" data-original-title="ACUMULADO ESPECÍFICO"  type="button" >
                                    <span class="fa fa-file-text fa-2x"></span>
                                </button>  
                                <!--</span>-->
                            </div>
                        </form>
                    </div>
                    <div id="msgTerceros" class="col-md-12"></div>
                    <div id="rTerceros" class=""></div> 
                </fieldset>
            </div>
        </div>
        <fieldset> 
            <div class="col-md-10"></div>
            <div class="col-md-1">
            </div>
        </fieldset>
    </div> 
</div>
<!--  -->
<div id="mdlNuevaCuenta" class="modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NUEVA CUENTA </h4>
            </div>
            <form id="frmNuevaCuenta">
                <div id="" class="modal-body text-center">
                    <fieldset>   
                        <div class="col-md-4">
                            <label for="">BANCO</label>
                            <input type="text" id="Banco" name="Banco" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">TITULAR</label>
                            <input type="text" id="Titular" name="Titular" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">No.CUENTA</label>
                            <input type="text" id="NoCuenta" name="NoCuenta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy"  >
                        </div>
                        <div class="col-md-4">
                            <label for="">CLABE</label>
                            <input type="text" id="CLABE" name="CLABE" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">SALDO</label>
                            <input type="number" id="Saldo" name="Saldo" class="form-control" required /> 
                        </div>
                        <div id="msg" class="col-md-12">

                        </div>
                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default btn-3x" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button> 
                <button id="btnGuardar" name="btnGuardar" type="button" class="btn btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-3x success-icon"></span></button> 
            </div>
        </div>
    </div>
</div>

<div id="mdlModificarCuenta" class="modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">MODIFICAR CUENTA</h4>
            </div>
            <form id="frmUpdateCuenta">
                <div id="" class="modal-body text-center">
                    <fieldset>   
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" readonly="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">BANCO</label>
                            <input type="text" id="Banco" name="Banco" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">TITULAR</label>
                            <input type="text" id="Titular" name="Titular" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">No.CUENTA</label>
                            <input type="text" id="NoCuenta" name="NoCuenta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy"  >
                        </div>
                        <div class="col-md-4">
                            <label for="">CLABE</label>
                            <input type="text" id="CLABE" name="CLABE" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">SALDO</label>
                            <input type="number" id="Saldo" name="Saldo" class="form-control" required /> 
                        </div>
                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button> 
                <button type="button" id="btnUpdate" class="btn btn-default fa-lg"><span class="fa fa-check fa-3x warning-icon"></span></button> 
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        onRefresh();

        $("#btnRefrescarCuentas").click(function () {
            onRefresh();
        });

        $("#btnEditarCuentas").click(function () {
            onBeforeUpdate()
        });

        var mdlbtnGuardarCuenta = $("#mdlNuevaCuenta #btnGuardar");

        mdlbtnGuardarCuenta.click(function () {
            mdlbtnGuardarCuenta.find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            mdlbtnGuardarCuenta.addClass("disabled");
            onAddRecordCuenta();
            setTimeout(function () {
                mdlbtnGuardarCuenta.find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                mdlbtnGuardarCuenta.removeClass("disabled");
            }, 1500);
        });


        var mdlbtnActualizarCuenta = $("#mdlModificarCuenta #btnUpdate");
        mdlbtnActualizarCuenta.click(function () {
            onUpdateRecord();
        });

        $("div.modal").on('hidden.bs.modal', function (e) {
            $("div.modal input").val("");
            $("div.modal select").select2("val", "");
        });

    });

    function getOptions(url, idcomponent, has_elements, elements) {
        $.ajax({
            url: base_url + url,
            type: "POST",
            dataType: "JSON",
            data: has_elements ? elements : false,
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.RazonS + '</option>';
                    });
                    $(idcomponent).html(options);
                } else {
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'NO SÉ ENCONTRARON REGISTROS'
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }


    function getRecords(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
        temp = 0;
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                indice: indicex
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                //
                $("#" + tblname + "  tbody > tr").each(function (k, v) {
                    var rowban = $(this).find("td")[1];
                    var row = $(this).find("td")[2];
                    var rows = $(this).find("td")[4];
                    var rowi = $(this).find("td")[5];
                    rowban.innerHTML = '<span class="label label-indigo">  ' + rowban.innerText + ' </span>';
                    rowi.innerHTML = '<span class="label label-danger">  ' + rowi.innerText + ' </span>';
                    var row_value = row.innerText;
                    row.innerHTML = '<span class="label label-primary"> ' + row_value + '</span>';
                    rows.innerHTML = '<span class="label label-emerald">$ ' + $.number(rows.innerText, 2, '.', ', ') + '</span>';

                });

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
                    $("#btnEditarCuentas").trigger("click");
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
                $("#" + target_result).html("<div align='center'></div>");
            }
        });
    }

    function onAddRecordCuenta() {
        var frm = $("#frmNuevaCuenta");
        var validation_form = false;
        $.each(frm.serializeArray(), function (k, v) {
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                validation_form = false;
//                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#frmNuevaCuenta #msg").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });

        if (validation_form) {
            $.ajax({
                url: base_url + 'index.php/ctrlCuentas/onAddRecordCuenta',
                type: "POST",
                data: frm.serialize()
            }).done(function (data, x, jq) {
                getRecords("tblCuentas", base_url + "index.php/ctrlTerceros/getRecords", 1, "rTerceros", "msgTerceros", "NO SE ENCONTRARON REGISTROS");
//                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA: AddCuenta')
            });
            var mdlGuardarCuenta = $("#mdlNuevaCuenta");
            mdlGuardarCuenta.modal("toggle");
        } else {
            console.log('NO OK')
        }
    }

    function onBeforeUpdate() {
        if (temp !== undefined && temp !== '' && temp !== 0) {
            $.ajax({
                url: base_url + 'index.php/ctrlCuentas/getRecordsByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                $("#mdlModificarCuenta #ID").val(dtm.ID);
                $("#mdlModificarCuenta #Banco").val(dtm.Banco);
                $("#mdlModificarCuenta #Titular").val(dtm.Titular);
                $("#mdlModificarCuenta #NoCuenta").val(dtm.NoCuenta);
                $("#mdlModificarCuenta #CLABE").val(dtm.CLABE);
                $("#mdlModificarCuenta #Fecha").val(dtm.Fecha);
                $("#mdlModificarCuenta #Saldo").val(dtm.Saldo);
                $("#mdlModificarCuenta #Empresa").val(parseInt(dtm.Empresa));
                $("#mdlModificarCuenta #Empresa").select2("val", parseInt(dtm.Empresa));
                $("#mdlModificarCuenta").modal('toggle');
                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }

    function onUpdateRecord() {
        var mdlActualizarCuenta = $("#mdlModificarCuenta");
         var mdlbtnActualizarCuenta = $("#mdlModificarCuenta #btnUpdate");
        mdlbtnActualizarCuenta.find("span").removeClass("fa-refresh").addClass("fa-cog fa-spin");
        mdlbtnActualizarCuenta.addClass("disabled");
        var frm = $("#frmUpdateCuenta");
        console.log(frm);
        var validation_form = false;
        $.each(frm.serializeArray(), function (k, v) {
            console.log(v.value);
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                validation_form = false;
                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#frmUpdateCuenta #msg").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });
        if (validation_form) {
            $.ajax({
                url: base_url + 'index.php/ctrlCuentas/onUpdateRecord',
                type: "POST",
                data: frm.serialize()
            }).done(function (data, x, jq) {
                if (parseInt(data) === 1) {
                    onRefresh();
                    mdlActualizarCuenta.modal("toggle");
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ACTUALIZADO', 'success');
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ PUDO ACTUALIZAR EL REGISTRO', 'danger');
                    console.log(data,jq);
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA: UpdateCuenta')
            });
        } else {
            console.log('NO OK')
        }
        setTimeout(function () {
            mdlbtnActualizarCuenta.find("span").removeClass("fa-cog fa-spin").addClass("fa-refresh");
            mdlbtnActualizarCuenta.removeClass("disabled");
        }, 1500);
    }

    function onRefresh() {
        var prepareCall = $.Callbacks();
        prepareCall.add(getRecords("tblCuentas", base_url + "index.php/ctrlCuentas/getRecords", 1, "rTerceros", "msgTerceros", "NO SE ENCONTRARON REGISTROS"));
        prepareCall.add(getOptions('index.php/ctrlCuentas/getDirectorio', "#mdlNuevaCuenta #Empresa", false, {}));
        prepareCall.add(getOptions('index.php/ctrlCuentas/getDirectorio', "#mdlModificarCuenta #Empresa", false, {}));
        prepareCall.add(onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DATOS ACTUALIZADOS', 'success'));
        prepareCall.fire();
    } 
</script>