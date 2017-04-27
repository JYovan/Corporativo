<!-- configuramos el plugin-->
<?php
if (session_status() == 1) {
    session_start();
}
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top"></div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">REGISTRO ORDEN DE PAGO A TERCEROS</h3>
            </div>
            <div class="panel-body"> 
                <fieldset>

                    <div class="col-md-12">
                        <h1 class="text-center">Saldos al día de hoy</h1>
                        <hr> 
                    </div>
                    <div class="col-md-12">
                        <label for="PagosP">PAGOS PROGRAMADOS</label>
                        <select class="form-control" id="PagosP" name="PagosP" >
                            <option value="0">Selecciona</option>
                            <?php
                            foreach ($PagosP as $PagosP1) {
                                if ($PagosP1->Pagado != date('m')) {
                                    ?> 
                                    <option value="<?php echo $PagosP1->ID; ?>"><?php echo $PagosP1->Concepto . ' / ' . $PagosP1->Proveedor . '/ ' . $PagosP1->FechaPago; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">NUEVO REGISTRO</h1>
                        <hr>
                    </div>

                    <form id="frmPagoATercero" name="frmPagoATercero">
                        <div class="" id="IPagosP"> 

                            <div class="col-md-6 has-success">
                                <label for=""> Factura: </label>
                                <!--<input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="Concepto" id="Concepto" required="required" >-->
                                <select id="Factura" name="Factura" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">  CONCEPTO DE PAGO:</label> 
                                <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="Unidad" id="Unidad" required="required" >
                                <div id="onLoadUnidad" class="hide" align="center">
                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">No Factura: </label>
                                <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="Personal" id="Personal" required="required" >
                                <div id="onLoadPersonal" class="hide" align="center">
                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                </div>

                            </div>    

                            <div class="col-md-6">
                                <label for=""> Monto: </label>
                                <input  style="text-transform:uppercase" onkeyup="" class="form-control" step="0.01" type="number" name="Monto" id="Monto" required="required" >
                                <div id="onLoadMonto" class="hide" align="center">
                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <label for=""> Proveedor: </label>
                                <!--<input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="Proveedor" id="Proveedor" >-->
                                <select id="Proveedor" name="Proveedor" class="form-control disabled" readonly>
                                    <option value=""></option>
                                </select>
                                <div id="onLoadProveedor" class="hide" align="center">
                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <label for="">EMPRESA</label>
                                <select id="Empresas" name="Empresas" class="form-control">

                                </select>
                                <div id="onLoadEmpresas" class="hide" align="center">
                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <label for="">Forma del pago: </label>
                                <select class="form-control" id="Forma" name="Forma"  required>
                                    <option value="">Selecciona</option> 
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Deposito">Depósito</option>
                                    <option value="Transferencia">Transferencia</option>
                                </select> 
                            </div>
                            <div class="col-md-6">
                                <label for="">Caja de efectivo: </label>
                                <select class="form-control" id="Caja" name="Caja"  required>
                                    <option value="">Selecciona</option> 
                                    <option value="Sí">Sí</option>
                                    <option value="No">No</option>
                                </select>
                            </div>  
                            <div class="col-md-6">
                                <label for="">Referencia de pago: </label>
                                <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="ReferenciaC" id="ReferenciaC" >
                            </div>  
                            <div class="col-md-6"> 
                                <label for="">Cuenta de donde saldrá el ingreso para el pago: </label>
                                <select class="form-control" id="CuentaFuente" name="CuentaFuente" >
                                    <option value="0">Selecciona</option>
                                    <?php foreach ($Cuentas as $Cuentas1) { ?> 
                                        <option value="<?php echo $Cuentas1->ID; ?>">
                                            <?php echo ' Titular: ' . $Cuentas1->Titular . ' - Banco:  ' . $Cuentas1->Banco . '  -No. Cta: ' . $Cuentas1->NoCuenta ?></option>
                                    <?php } ?>
                                </select> 
                            </div>
                            <div class="col-md-6"> 
                                <label for="">Fecha en que se debe realizar el pago:</label>
                                <input class="form-control" type="text" name="FechaPago" id="datepicker"  value=""  data-provide="datepicker"  data-date-format="dd/mm/yyyy" >
                            </div>
                            <div class="col-md-6">  
                                <label for="">Fecha de realización del pago: </label>
                                <input  value="" class="form-control" type="text" name="FechaRPago" id="datepicker2" data-provide="datepicker"  data-date-format="dd/mm/yyyy" >
                            </div>
                            <div class="col-md-6">   
                                <label for="">Tipo de comprobante de pago:</label>
                                <select class="form-control" id="Comprobante" name="Comprobante"  required>
                                    <option value="">Selecciona</option> 
                                    <option value="Factura">Factura</option>
                                    <option value="Recibo">Recibo</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Nombre de quien emite la orden de pago: </label>
                                <select class="form-control" id="Emisor" name="Emisor">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                    <?php } ?>
                                </select> 
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-lg btn-primary " type="button" id="btnAddPagoTercero" name="user" value="<?php echo $indice; ?>" ><span class="fa fa-save fa-3x"></button>

                            </div>
                        </div>
                    </form>

                </fieldset>
                <div class="col-md-12" id="msgPagoTerceros"></div>
                <div class="col-md-12" id="rPagoTerceros">

                </div>
            </div>
        </div>
    </div> 
</div>

<script>
    $(document).ready(function () {
        onRefresh();
        $("#Factura").change(function () {
            onChangeFactura();
        });
        $("#btnAddPagoTercero").click(function () {
            $("#btnAddPagoTercero").addClass("disabled");
            $("#btnAddPagoTercero").find("span").removeClass("fa-save").addClass("fa-cog fa-spin");

            var dataf = new FormData($('#frmPagoATercero')[0]);
            console.log(dataf);
            $.ajax({
                url: base_url + 'index.php/ctrlPagoATerceros/onAddPagoATercero',
                type: "POST",
                data: $("#frmPagoATercero").serialize()
            }).done(function (data, x, jq) {
                console.log(data);
                $("#frmPagoATercero")[0].reset();
                $("#frmPagoATercero input").val("");
                $("#frmPagoATercero select").select2("val", "");
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PAGO REALIZADO', 'success');

                onRefresh();
            }).fail(function (x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE HA PODIDO REALIZAR EL PAGO', 'danger');
                console.log(x, y, z);
            }).always(function () {
                console.log('ok')
                $("#btnAddPagoTercero").find("span").removeClass("fa-cog fa-spin").addClass("fa-save");
                $("#btnAddPagoTercero").removeClass("disabled");

            });
        })
    });

    function onRefresh() {
        var c = $.Callbacks();
        c.add(getFacturas());
        c.add(getEmpresas());
        c.add(getProveedores());
        c.fire();
        getRecords("tblPagoTerceros", base_url + "index.php/ctrlPagoATerceros/getRecords", 1, "rPagoTerceros", "msgPagoTerceros", "NO SE ENCONTRARON REGISTROS");

    }

    function getFacturas() {
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getFacturas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
//                                    console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + "<option value='" + v.ID + "'>" + v.FACTURA + " - " + v.EMPRESA + " - " + v.PROVEEDOR + "</option>";
            });
            $("#Factura").html(options);
        }).fail(function (x, e, t) {
            console.log(x, e, t);
            console.log('ERROR');
            console.log(arguments);
        });
    }

    function onChangeFactura() {
        $("#onLoadMonto").removeClass("hide");
        $("#Monto").addClass("hide");
        $("#onLoadProveedor").removeClass("hide");
        $("#Proveedor").addClass("hide");
        $("#onLoadEmpresas").removeClass("hide");
        $("#Empresas").addClass("hide");
        $("#Unidad").addClass("hide");
        $("#onLoadUnidad").removeClass("hide");
        $("#Personal").addClass("hide");
        $("#onLoadPersonal").removeClass("hide");
        $.ajax({
            url: base_url + 'index.php/ctrlPagoATerceros/getFacturaByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#Factura").val()
            }
        }).done(function (data) {
            console.log(data);
            $("#Monto").val(data[0].IMPORTE);
            $("#Unidad").val("FACTURA " + data[0].FACTURA);
            $("#Proveedor").select2("val", data[0].PROVEEDOR);
            $("#Empresas").select2("val", data[0].EMPRESA);
            $("#Personal").val(data[0].FACTURA);

            $("#Monto").removeClass("hide");
            $("#onLoadMonto").addClass("hide");
            $("#Proveedor").removeClass("hide");
            $("#onLoadProveedor").addClass("hide");
            $("#Empresas").removeClass("hide");
            $("#onLoadEmpresas").addClass("hide");
            $("#Unidad").removeClass("hide");
            $("#onLoadUnidad").addClass("hide");
            $("#Personal").removeClass("hide");
            $("#onLoadPersonal").addClass("hide");
        }).fail(function () {
            console.log(arguments);
        });
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
            $("#Proveedor").html(options);
        }).fail(function () {
            console.log(arguments);
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
            $("#Empresas").html(options);
        }).fail(function () {
            console.log(arguments);
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
            //        console.log(data)
            var tblName = tblname;
//        $("#"+target_messages).append(data);
            //        console.log(data.length);
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
//            $("#" + tblname + "  thead > tr").each(function (k, v) {
//                var col_selected = $(this).find("th")[0];
//                $(col_selected).after("<th>AVANZAR</th>");
//            });
                //
                $("#" + tblname + "  tbody > tr").each(function (k, v) {
//                    var row = $(this).find("td")[4];
//                    var rowi = $(this).find("td")[5];
//                    var rows = $(this).find("td")[6];
//                    var rowcus = $(this).find("td")[7];
//                    var rowfp = $(this).find("td")[8];
//                    var rowcue = $(this).find("td")[9];
//                    rowi.innerHTML = '<span class="label label-danger">' + rowi.innerText + ' % </span>';
//                    var row_value = row.innerText;
//                    row.innerHTML = '<span class="label label-primary">' + row_value + '</span>';
//
//                    rows.innerHTML = '<span class="label label-emerald">' + rows.innerText + '</span>';
//                    rowcus.innerHTML = '<span class="label label-primary">' + rowcus.innerText + '</span>';
//                    rowfp.innerHTML = '<span class="label label-warning">' + rowfp.innerText + '</span>';
//                    rowcue.innerHTML = '<span class="label label-info">' + rowcue.innerText + '</span>';

                });
//            $("#" + tblname + "  tfoot > tr").each(function (k, v) {
//                var col_selected = $(this).find("th")[0];
//                $(col_selected).after("<th>HOLA</th>");
//            });

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
//                    $("#btnModificar").trigger("click");
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

</script>
<script>
    cli.config.InfoPagosP();
</script>