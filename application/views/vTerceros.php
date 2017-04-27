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
                    <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE PAGO A TERCEROS <span class="fa fa-chevron-up" ></span></div>
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
                            <button id="btnPago" class="btn btn3d  btn-default  btn-lg fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO PAGO">
                                <span class="fa fa-plus fa-3x info-icon"></span></button>            
                            <button id="btnEditarCuentas" class="btn btn3d btn-default btn-lg fa-lg" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="MODIFICAR CUENTA"><span class="fa fa-pencil fa-3x success-icon"></span></button>

                            <button id="btnRefrescarCuentas" class="btn btn3d btn-default btn-lg fa-lg" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="REFRESCAR CUENTAS"  ><span class="fa fa-refresh fa-3x warning-icon"></span></button>

                            <button id="btnRefrescarCuentas" class="btn btn3d btn-default btn-lg fa-lg" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="NUEVO PAGO PROGRAMADO"  > 
                                <i class="fa fa-money fa-3x danger-icon"></i>  
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


<div id="mdlNuevoPagoATercero" class="modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NUEVO PAGO A TERCERO</h4>
            </div>
            <form id="frmPagoATercero">
                <div id="" class="modal-body">
                    <fieldset>

                        <div class="col-md-12 has-error">
                            <label for="">FACTURA</label>
                            <select id="Factura" name="Factura" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NO. FACTURA</label>
                            <input type="text" id="NumFactura" name="NumFactura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-8">
                            <label for="">CONCEPTO DE PAGO</label>
                            <input type="text" id="Unidad" name="Unidad" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4 has-warning">
                            <label for="">MONTO</label>
                            <input type="text" id="Monto" name="Monto" class="form-control" readonly="">
                        </div>
                        <div class="col-md-8">
                            <label for="">PROVEEDOR</label>
                            <select id="Proveedor" name="Proveedor" class="form-control"></select>
                        </div>
                        <div class="col-md-12 text-center">
                            <h2>$ 0.0</h2>
                        </div>
                        <div class="col-md-12">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control"></select>
                        </div>
                        <div class="col-md-6  has-success">
                            <label for="">Forma del pago: </label>
                            <select class="form-control" id="Forma" name="Forma"  required>
                                <option value="">Selecciona</option> 
                                <option value="Efectivo">EFECTIVO</option>
                                <option value="Cheque">CHEQUE</option>
                                <option value="Deposito">DEPÓSITO</option>
                                <option value="Transferencia">TRANSFERENCIA</option>
                            </select> 
                        </div>
                        <div class="col-md-6  has-success">
                            <label for="">Caja de efectivo: </label>
                            <select class="form-control" id="Caja" name="Caja"  required>
                                <option value="">Selecciona</option> 
                                <option value="Sí">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>  
                        <div class="col-md-6  has-success">
                            <label for="">Referencia de pago: </label>
                            <input onkeyup="" class="form-control" type="text" name="ReferenciaC" id="ReferenciaC" >
                        </div>  
                        <div class="col-md-6  has-success">
                            <label for="">CUENTA DE DONDE SALDRÁ EL INGRESO PARA EL PAGO:</label>
                            <select id="CuentaFuente" name="CuentaFuente" class="form-control"></select>
                        </div>
                        <div class="col-md-6 has-success"> 
                            <label for="">Fecha en que se debe realizar el pago:</label>
                            <input class="form-control" type="text" name="FechaPago" id="datepicker"  value=""  data-provide="datepicker"  data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-6 has-success">  
                            <label for="">Fecha de realización del pago: </label>
                            <input  value="" class="form-control" type="text" name="FechaRPago" id="datepicker2" data-provide="datepicker"  data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-6 has-success">   
                            <label for="">Tipo de comprobante de pago:</label>
                            <select class="form-control" id="Comprobante" name="Comprobante"  required>
                                <option value="">Selecciona</option> 
                                <option value="Factura">Factura</option>
                                <option value="Recibo">Recibo</option>
                            </select>
                        </div>
                        <div class="col-md-6 has-primary">
                            <label for="">Nombre de quien emite la orden de pago: </label>
                            <select class="form-control" id="Emisor" name="Emisor"></select>
                        </div>
                        <div id="msg" class="col-md-12">

                        </div>
                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default btn-3x" data-dismiss="modal"><span class="fa fa-times fa-5x"></span></button> 
                <button id="btnGuardar" name="btnGuardar" type="button" class="btn btn-default btn-3x" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-5x"></span></button> 
            </div>
        </div>
    </div>
</div>

<div id="mdlNuevoPagoProgramado" class="modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NUEVO PAGO PROGRAMADO</h4>
            </div>
            <form id="frmNuevaCuenta">
                <div id="" class="modal-body">
                    <fieldset>   
                        <div class="col-md-4">
                            <label for="">ACTIVIDAD</label>
                            <input type="text" id="Unidad" name="Unidad" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">PERSONAL</label>
                            <select id="Personal" name="Personal" class="form-control"> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONCEPTO</label>
                            <input type="text" id="Concepto" name="Concepto" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO</label>
                            <input type="number" id="Monto" name="Monto" class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="">PROVEEDOR</label> 
                            <select id="Proveedor" name="Proveedor" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FORMA</label>
                            <select id="Forma" name="Forma" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label class=" cursor-hand"><input type="checkbox" id="chkRefreshSaldos" name="chkRefreshSaldos" class="option-input-validated checkbox cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="CAJA DE EFECTIVO"> CAJA DE EFECTIVO</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE PAGO</label>
                            <input type="text" id="FechaPago" name="FechaPago"  data-provide="datepicker" data-date-format="dd/mm/yyyy" class="form-control">
                        </div> 
                        <div class="col-md-4">
                            <label for="">COMPROBANTE</label>
                            <select id="Comprobante" name="Comprobante" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div> 
                        <div id="msg" class="col-md-12">

                        </div>
                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default btn-3x" data-dismiss="modal"><span class="fa fa-times fa-5x"></span></button> 
                <button id="btnGuardar" name="btnGuardar" type="button" class="btn btn-default btn-3x" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-5x"></span></button> 
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
            <div id="" class="modal-body text-center">
                <fieldset>   
                    <div class="col-md-4">
                        <label for="">BANCO</label>
                        <input type="text" id="BancoU" name="BancoU" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">TITULAR</label>
                        <input type="text" id="TitularU" name="TitularU" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">No.CUENTA</label>
                        <input type="text" id="NoCuentaU" name="NoCuentaU" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">CLABE</label>
                        <input type="text" id="ClabeU" name="ClabeU" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <label for="">EMPRESA</label>
                        <select id="EmpresaU" name="EmpresaU" class="form-control" >
                            <option value=""></option>
                        </select>
                    </div>
                </fieldset> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-5x"></span></button> 
                <button type="button" id="btnUpdate" class="btn btn-yellow"><span class="fa fa-refresh fa-5x"></span></button> 
            </div>
        </div>
    </div>
</div>
<script>
    var mdlNuevoPagoATercero = $("#mdlNuevoPagoATercero");
    var Factura = mdlNuevoPagoATercero.find("#Factura");
    var Proveedor = mdlNuevoPagoATercero.find("#Proveedor");
    var Empresa = mdlNuevoPagoATercero.find("#Empresa");
    var CuentaFuente = mdlNuevoPagoATercero.find("#CuentaFuente");
    var Emisor = mdlNuevoPagoATercero.find("#Emisor");
    var btnSavePagoATercero = mdlNuevoPagoATercero.find("#btnGuardar");
    var btnPago = $("#btnPago");

    $(document).ready(function () {
        
        btnSavePagoATercero.click(function(){
           var frm = new FormData(mdlNuevoPagoATercero.find("form")[0]);
           console.log(frm);
        });
        
        getRecords("tblCuentas", base_url + "index.php/ctrlTerceros/getRecords", 1, "rTerceros", "msgTerceros", "NO SE ENCONTRARON REGISTROS");
        
        var prepareCall = $.Callbacks();
        prepareCall.add(getOptions('index.php/ctrlContratos/getDirectorio', "Empresa", false, {}));
        prepareCall.add(getOptions('index.php/ctrlContratos/getDirectorio', "EmpresaU", false, {}));
        prepareCall.fire();

        Factura.change(function () {
            onChangeFactura();
        });

        btnPago.click(function () {
            getFacturas();
            mdlNuevoPagoATercero.modal('show');
            mdlNuevoPagoATercero.find("form").reset();
        });

        $("#btnRefrescarCuentas").click(function () {
            getRecords("tblCuentas", base_url + "index.php/ctrlTerceros/getRecords", 1, "rTerceros", "msgTerceros", "NO SE ENCONTRARON REGISTROS");
        });

        $("#btnEditarCuentas").click(function () {
            $("#mdlModificarCuenta").modal('toggle');
        });

        var mdlbtnGuardarCuenta = $("#mdlNuevaCuenta #btnGuardar");
        var mdlGuardarCuenta = $("#mdlNuevaCuenta");

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
        var mdlActualizarCuenta = $("#mdlModificarCuenta");

        mdlbtnActualizarCuenta.click(function () {
            mdlbtnActualizarCuenta.find("span").removeClass("fa-refresh").addClass("fa-cog fa-spin");
            mdlbtnActualizarCuenta.addClass("disabled");
            setTimeout(function () {
                mdlbtnActualizarCuenta.find("span").removeClass("fa-cog fa-spin").addClass("fa-refresh");
                mdlbtnActualizarCuenta.removeClass("disabled");
                mdlActualizarCuenta.modal("toggle");
            }, 1500);
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
                    $("#" + idcomponent).html(options);
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

        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
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
                    $("#btnEditarCuentas").trigger("click");
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
                $("#" + target_result).html("<div align='center'></div>");
            }
        }).always(function () {
            HoldOn.close();
        });
    }

    function onAddRecordCuenta() {
        var frm = $("#frmNuevaCuenta");
        console.log(frm);
        var validation_form = false;
        $.each(frm.serializeArray(), function (k, v) {
            console.log(v.value);
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                validation_form = false;
                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#frmNuevaCuenta #msg").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });

        if (validation_form) {
            $.ajax({
                url: base_url + 'index.php/ctrlTerceros/onAddRecordCuenta',
                type: "POST",
                data: frm.serialize()
            }).done(function (data, x, jq) {
                getRecords("tblCuentas", base_url + "index.php/ctrlTerceros/getRecords", 1, "rTerceros", "msgTerceros", "NO SE ENCONTRARON REGISTROS");
                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA: AddCuenta');
            });

            var mdlGuardarCuenta = $("#mdlNuevaCuenta");
            mdlGuardarCuenta.modal("toggle");
        } else {
            console.log('NO OK');
        }
    }

    function getFacturas() {

        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO... POR FAVOR ESPERE"
        });
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getFacturas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + "<option value='" + v.ID + "'>" + v.FACTURA + " - " + v.EMPRESA + " - " + v.PROVEEDOR + "</option>";
            });
            Factura.html(options);
        }).fail(function (x, e, t) {
            console.log(x, e, t);
            console.log('ERROR');
            console.log(arguments);
        }).always(function () {
            HoldOn.close();
        });
        getProveedores();
    }

    function getProveedores() {
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getProveedores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
            var options = "<option value=''></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.Proveedor + '</option>';
            });
            Proveedor.html(options);
            Proveedor.attr("disabled", true);
        }).fail(function () {
            console.log(arguments);
        }).always(function () {
            getEmpresas();
        });
    }

    function getEmpresas() {
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getEmpresas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
            var options = "<option value=''></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.NombreC + '</option>';
            });
            Empresa.html(options);
            Empresa.attr("disabled", true);
        }).fail(function () {
            console.log(arguments);
        });
        getCuentas();
    }
    function getCuentas() {
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getCuentas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
            var options = "<option value=''></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.Cuenta + '</option>';
            });
            CuentaFuente.html(options);
        }).fail(function () {
            console.log(arguments);
        });
        getUsuarios();
    }
    function getUsuarios() {
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getUsuarios',
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
            var options = "<option value=''></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.NOMBRE + '</option>';
            });
            Emisor.html(options);
        }).fail(function () {
            console.log(arguments);
        });
    }

    function onChangeFactura() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO... POR FAVOR ESPERE"
        });
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getFacturaByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#Factura").val()
            }
        }).done(function (data) {
            console.log(data);
            mdlNuevoPagoATercero.find("#Monto").val(data[0].IMPORTE);
            mdlNuevoPagoATercero.find("div > h2").text("$ " + $.number(data[0].IMPORTE, 3, '.', ', '));
            mdlNuevoPagoATercero.find("#Unidad").val("FACTURA " + data[0].FACTURA);
            mdlNuevoPagoATercero.find("#Proveedor").select2("val", data[0].PROVEEDOR);
            mdlNuevoPagoATercero.find("#Empresa").select2("val", data[0].EMPRESA);
            mdlNuevoPagoATercero.find("#NumFactura").val(data[0].FACTURA);
        }).fail(function () {
            console.log(arguments);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>