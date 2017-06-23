<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
$PERMISOS = $_SESSION["PERMISOS"][22];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="ATRAS"></span>
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE COBRANZA <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <span class="fa fa-navicon cursor-hand" onclick="onMenu()" data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                </div>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlCobranza/Cobranza'); ?>
            <div class="panel-body">

                <fieldset>
                    <div class="" align="center">
                        <?php
                        if ($PERMISOS->Crear === '1') {
                            ?>
                            <span  data-toggle="modal" data-easein="swoopIn">
                                <button class="btn btn-info btn-lg fa-lg" id="btnNuevaOrdenDecobro"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""  type="button"
                                        data-original-title="NUEVA ORDEN DE COBRO">
                                    <span class="fa fa-plus fa-3x info-icon"></span>
                                </button>
                            </span>
                            <?php
                        }

                        if ($PERMISOS->Modificar === '1') {
                            ?>
                            <button id="btnEditar" class="btn btn-default btn-lg fa-lg"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""  type="button"
                                    data-original-title="EDITAR">
                                <span class="fa fa-pencil fa-3x success-icon"></span>
                            </button>

                            <?php
                        }
                        if ($PERMISOS->Eliminar === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg" type="button" id="btnCancelar"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="CANCELAR ORDEN DE COBRO">
                                <span class="fa fa-ban fa-3x danger-icon"></span>
                            </button>
                            <?php
                        }
                        if ($PERMISOS->Consultar === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg"  id="btnRefrescar"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""  type="button"
                                    data-original-title="REFRESCAR">
                                <span class="fa fa-refresh fa-3x warning-icon"></span>
                            </button>

                            <?php
                        }

                        if ($PERMISOS->Crear === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg"  id="btnPagoSinAsignar"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""  type="button"
                                    data-original-title="PAGO SIN ASIGNAR">
                                <span class="fa fa-unlink fa-3x lime-icon"></span>
                            </button>

                            <?php
                        }

                        if ($PERMISOS->Reportes === '1') {
                            ?>
                            <button id="btnGenerarOrdenDeCobro" type="button" class="btn btn-default btn-lg fa-lg"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="GENERAR ORDEN DE COBRO">
                                <span class="fa fa-print fa-3x danger-icon"></span>
                            </button>
                            <?php
                        }
                        if ($PERMISOS->Crear === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg" type="button" id="btnIngresosCobrados"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="INGRESOS COBRADOS">
                                <span class="fa fa-dollar fa-3x  purple-icon"></span>
                            </button>
                            <?php
                        }
                        if ($PERMISOS->Eliminar === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg hide" type="button" id="btnCancelarIngresosCobrado"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="CANCELAR INGRESO">
                                <span class="fa fa-warning fa-3x"></span>
                            </button>
                            <?php
                        }
                        if ($PERMISOS->Consultar === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg" type="button" id="btnHIC"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="HISTORIAL DE INGRESOS">
                                <span class="fa fa-eye fa-3x bluegrey-icon"></span>
                            </button>
                            <button class="btn btn-default btn-lg fa-lg" type="button" id="btnBuscarYExportar"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="BUSCAR Y EXPORTAR">
                                <span class="fa fa-search fa-3x bluegrey-icon"></span>
                            </button>
                            <button class="btn btn-default btn-lg fa-lg" type="button" id="btnSaldosEnContratos"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="SALDOS EN CONTRATOS">
                                <span class="fa fa-file-text fa-3x cyan-icon"></span>
                            </button>
                            <?php
                        }
                        if ($PERMISOS->Reportes === '1') {
                            ?>
                            <button class="btn btn-default btn-lg fa-lg hide" type="button" id="btnReciboDePago"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="GENERAR RECIBO DE PAGO">
                                <span class="fa fa-print fa-3x cyan-icon"></span>
                            </button>
                            <?php
                        }
                        ?>
                        <div class="hide">


                            <span data-toggle="modal" data-easing="swoopIn" data-target="#mdlEstadoDeCuenta">
                                <button class="btn btn-danger btn-lg fa-lg" type="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="ESTADO DE CUENTA DE CLIENTE">
                                    <span class="fa fa-list-alt fa-3x"></span>
                                </button>
                            </span>

                            <span data-toggle="modal" data-easing="swoopIn" data-target="#">
                                <button class="btn btn-king-blue btn-lg fa-lg" type="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="DEPÓSITOS EN CUENTAS BANCARIAS">
                                    <span class="fa fa-sliders fa-3x"></span>
                                </button>
                            </span>

                            <span data-toggle="modal" data-easing="swoopIn" data-target="#">
                                <button class="btn btn-brown btn-lg fa-lg" type="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="INGRESOS A CAJA DE ADMINISTRACIÓN">
                                    <span class="fa fa-archive fa-3x"></span>
                                </button>
                            </span>

                            <span data-toggle="modal" data-easing="swoopIn" data-target="#">
                                <button class="btn btn-a-blue btn-lg fa-lg" type="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="ESTADO DE CUENTA TOTAL">
                                    <span class="fa fa-sort-numeric-desc fa-3x"></span>
                                </button>
                            </span>
                            <span data-toggle="modal" data-easing="swoopIn" data-target="#">
                                <button class="btn btn-a-green btn-lg fa-lg" type="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="TABULADOR DE INGRESOS POR SERVICIOS">
                                    <span class="fa fa-list-ol  fa-3x"></span>
                                </button>
                            </span>

                            <span data-toggle="modal" data-easing="swoopIn" data-target="#">
                                <button class="btn btn-red btn-lg fa-lg" type="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="CANCELAR COBROS PENDIENTES">
                                    <span class="fa fa-minus fa-3x"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div id="divFiltros" class="col-md-12 hide">
                        <form>
                            <div class="col-md-2">
                                <label for="">INICIO (FECHA DE PAGO)</label>
                                <input type="text" id="txtInicio" name="txtInicio" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                            </div>
                            <div class="col-md-2">
                                <label for="">TERMINO (FECHA DE PAGO)</label>
                                <input type="text" id="txtTermino" name="txtTermino" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                            </div>
                            <div class="col-md-4">
                                <label for="">EMPRESA</label>
                                <select id="cmbEmpresa" name="cmbEmpresa" class="form-control"></select>
                            </div>
                            <div class="col-md-4">
                                <label for="">EMPRESA CLIENTE</label>
                                <select id="cmbEmpresaCliente" name="cmbEmpresaCliente" class="form-control">
                                </select>
                            </div>
                            <div class="col-md-12"></div>
                            <div class="col-md-3">
                                <label for="">PROYECTO</label>
                                <select id="cmbProyecto" name="cmbProyecto" class="form-control"></select>
                            </div>
                            <div class="col-md-3">
                                <label for="">ETAPA</label>
                                <select id="cmbEtapa" name="cmbEtapa" class="form-control">
                                    <option></option>
                                    <option value="0">NA</option>
                                    <option value="1">ETAPA 1</option>
                                    <option value="2">ETAPA 2</option>
                                    <option value="3">ETAPA 3</option>
                                    <option value="4">ETAPA 4</option>
                                    <option value="5">ETAPA 5</option>
                                    <option value="6">ETAPA 6</option>
                                    <option value="7">ETAPA 7</option>
                                    <option value="8">ETAPA 8</option>
                                    <option value="9">ETAPA 9</option>
                                    <option value="10">ETAPA 10</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">CONTRATO</label>
                                <select id="cmbContrato" name="cmbContrato" class="form-control">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">TIPO</label>
                                <select id="cmbTipo" name="cmbTipo" class="form-control">
                                    <option></option>
                                    <option value="1">PLATAFORMAS DE TEPETATE PARA VIVIENDA</option>
                                    <option value="2">URBANIZACIÓN</option>
                                    <option value="3">VIVIENDA</option>
                                </select>
                            </div>
                            <div class="col-md-12" align="center">
                                <button id="btnCobranza"
                                        type="button" class="btn btn3d btn-default fa-lg"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="REPORTE COBRANZA">
                                    <span class="fa fa-ticket fa-2x yellow-icon"></span>
                                </button>
                                <button id="btnCobranzaXContratos"
                                        type="button" class="btn btn3d btn-default fa-lg"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="COBRANZA POR CONTRATOS">
                                    <span class="fa fa-ticket fa-2x kingblue-icon"></span>
                                </button>
                                <button id="btnCobranzaXContratosTotales"
                                        type="button" class="btn btn3d btn-default fa-lg hide"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="COBRANZA POR CONTRATOS(TOTALES)">
                                    <span class="fa fa-ticket fa-2x black-icon"></span>
                                </button>
                                <button type="button" class="btn btn3d btn-default fa-lg hide"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title=""
                                        data-original-title="BUSCAR">
                                    <span class="fa fa-check fa-3x purple-icon"></span>
                                </button>
                                <button type="button" class="btn btn3d btn-default fa-lg"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="" id="btnReset"
                                        data-original-title="REINICIAR">
                                    <span class="fa fa-trash fa-2x black-icon"></span>
                                </button>
                            </div>
                        </form>
                        <div class="col-md-12">
                            <button id="btnCobranzaTotales"
                                    type="button" class="btn btn3d btn-default fa-lg hide"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="REPORTE DE COBRANZA (SOLO TOTALES)">
                                <span class="fa fa-ticket fa-2x kingblue-icon"></span>
                            </button>
                            <button id="btnHistorialIngresosCobrados"
                                    type="button" class="btn btn3d btn-default fa-lg hide"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title=""
                                    data-original-title="REPORTE DE INGRESOS COBRADOS">
                                <span class="fa fa-ticket fa-2x lime-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12" align="center" id="msgContadoresCobranza">
                        <label class="label label-danger"><span class="fa fa-cog fa-spin"></span> REGISTROS SIN PAGOS</label>
                        <label class="label label-king-blue"><span class="fa fa-cog fa-spin"></span> REGISTROS CON PAGOS PARCIALES</label>
                        <label class="label label-success"><span class="fa fa-cog fa-spin"></span> REGISTROS PAGADOS</label>
                    </div>
                    <div id="msgCobranza" class="col-md-12" align="center">
                    </div>
                    <div id="rtblCobranza">
                        <div align="center">
                            <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
                        </div>
                    </div>

                    <div class=" col-md-5 pgresponse hide" align="center">
                        <div class="table-responsive">
                            <table class="table table-hover display tblOptions">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                        ?>
                                        <tr>
                                            <td class="col-md-4 hide"><input type="radio" value="C1" name="CobranzaID" id="CobranzaID" required class="form-control"/></td>
                                            <td>ORDEN DE COBRO</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4 hide"><input type="radio" value="C8" name="CobranzaID" id="CobranzaID" required class="form-control"/></td>
                                            <td>GENERAR ORDEN DE COBRO DE INGRESOS MENSUALES </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4 hide"><input type="radio" value="C3" name="CobranzaID" id="CobranzaID" required class="form-control"/></td>
                                            <td>TRÁMITE DE COBRO Y EMISIÓN DE RECIBO </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4 hide"><input type="radio" value="C2" name="CobranzaID" id="CobranzaID" required class="form-control"/></td>
                                            <td>REGISTRO DE INGRESOS COBRADOS </td>
                                        </tr>
                                    <?php }
                                    ?>
                                    <tr>
                                        <td class="col-md-4 hide"><input type="radio" value="C4" name="CobranzaID" id="CobranzaID" required class="form-control"/></td>
                                        <td>ESTADO DE CUENTA DE CLIENTE </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-4 hide"><input type="radio" value="C5" name="CobranzaID" id="CobranzaID" class="form-control" required/></td>
                                        <td> ESTADO DE DEPÓSITOS CUENTAS BANCARIAS DE ADMINISTRACIÓN</td>
                                    </tr>
                                    <?php
                                    if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                        ?>

                                    <?php }
                                    ?>
                                    <tr>
                                        <td class="col-md-4 hide"><input type="radio" value="C9" name="CobranzaID" id="CobranzaID" class="form-control" required/></td>
                                        <td>ESTADO DE CUENTA TOTAL</td>
                                    </tr>

                                    <?php
                                    if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                        ?>
                                        <tr>
                                            <td class="col-md-4 hide"><input type="radio" value="C7" name="CobranzaID" id="CobranzaID" required class="form-control" /></td>
                                            <td>TABULADOR DE INGRESOS POR SERVICIOS</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-4 hide"><input type="radio" value="C10" name="CobranzaID" id="CobranzaID" required class="form-control" /></td>
                                            <td>BORRAR COBROS PENDIENTES </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id=""
                         <div class="col-md-4" align="center">
                            <button class="btn btn-lg fa-lg btn-success hide" type="submit"  id="btnOK" name="btnOK" value="<?php echo $indice; ?>"><span class="fa fa-arrow-right fa-5x"></span></button>
                        </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".tblOptions > tbody > tr").on('click', function(e) {
            $(this).find("td > input#CobranzaID").attr("checked", true);
            $("#btnOK").trigger("click");
        });
    });
</script>

<div id="mdlOrdenDeCobro" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">NUEVA ORDEN DE COBRO </h2>
            </div>

            <form id="frmCobranzaOrden">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-6">
                            <label for="">FOLIO</label>
                            <input type="text" id="Folio" name="Folio" class="form-control" placeholder="FOLIO" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">NO. FACTURA</label>
                            <input type="text" id="NFactura" name="NFactura" class="form-control" placeholder="F0001" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DEL CLIENTE</label>
                            <select class="form-control" id="Cliente" name="Cliente" required="">
                                <option value="">Selecciona</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Concepto de cobro</label>
                            <input id="Concepto" name="Concepto" style="text-transform:uppercase" onkeyup="" class="form-control" type="text" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">CONTRATO</label>
                            <select id="IdContrato" name="IdContrato" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO DEL CONTRATO</label>
                            <input type="text" id="MontoContrato" name="MontoContrato" readonly="" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Tarifa</label>
                            <select class="form-control" id="Tarifa" name="Tarifa"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($Tarifa as $Tarifa1) { ?>
                                    <option value="<?php echo $Tarifa1->id_tarifa; ?>"><?php echo $Tarifa1->dsc_tarifa; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO A PAGAR</label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control"  type="number" step="0.01"  name="MontoAPagar" id="MontoAPagar" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE COBRO</label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control" onchange="onValidateFormRC()" type="text"  value="" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="FechaCobro" id="FechaCobro" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">QUIEN PRESTÓ EL SERVICIO </label>
                            <select class="form-control" id="IdPrestadorDelServicio" name="IdPrestadorDelServicio" onchange="onValidateFormRC()" required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $temporal) { ?>
                                    <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">QUIEN EMITE LA ORDEN DE COBRO</label>
                            <select class="form-control" id="IdEmisorDeLaOrden" name="IdEmisorDeLaOrden" onchange="onValidateFormRC()" required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $temporal) { ?>
                                    <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                <?php } ?>
                            </select>
                            <br>
                        </div>
                        <input type="file" id="Factura" name="Factura" class="hide">
                        <div id="btnAdjunto" class="col-md-12 cursor-hand" align="center">
                            <span class="fa fa-upload fa-5x"></span>
                            <h1>ADJUNTAR FACTURA</h1>
                        </div>
                        <div id="VistaPreviaFactura" class="col-md-12"></div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button>
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" ><span class="fa fa-check fa-3x"></span></button>
                <!--<button class="btn btn-lg fa-lg btn-success hide hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>-->
            </div>
        </div>
    </div>
</div>


<div id="mdlOrdenDeCobroU" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">EDITAR ORDEN DE COBRO </h2>
            </div>

            <form id="frmCobranzaOrdenU">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="ID" name="ID" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">FOLIO</label>
                            <input type="text" id="Folio" name="Folio" class="form-control" placeholder="FOLIO" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">NO. FACTURA</label>
                            <input type="text" id="NFactura" name="NFactura" class="form-control" placeholder="F0001" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DEL CLIENTE</label>
                            <select class="form-control" id="Cliente" name="Cliente" required="">
                                <option value="">Selecciona</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Concepto de cobro</label>
                            <input id="Concepto" name="Concepto" style="text-transform:uppercase" onkeyup="" class="form-control" type="text" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">CONTRATO</label>
                            <select id="IdContratoU" name="IdContratoU" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO DEL CONTRATO</label>
                            <input type="text" id="MontoContratoU" name="MontoContratoU" readonly="" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Tarifa</label>
                            <select class="form-control" id="Tarifa" name="Tarifa"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($Tarifa as $Tarifa1) { ?>
                                    <option value="<?php echo $Tarifa1->id_tarifa; ?>"><?php echo $Tarifa1->dsc_tarifa; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO A PAGAR</label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control"  type="number" step="0.01"  name="MontoAPagar" id="MontoAPagar" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE COBRO</label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control" onchange="onValidateFormRC()" type="text"  value="" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="FechaCobro" id="FechaCobro" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">QUIEN PRESTÓ EL SERVICIO</label>
                            <select class="form-control" id="IdPrestadorDelServicio" name="IdPrestadorDelServicio" onchange="onValidateFormRC()" required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $temporal) { ?>
                                    <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">QUIEN EMITE LA ORDEN DE COBRO</label>
                            <select class="form-control" id="IdEmisorDeLaOrden" name="IdEmisorDeLaOrden" onchange="onValidateFormRC()" required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $temporal) { ?>
                                    <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                <?php } ?>
                            </select>
                            <br>
                        </div>
                        <input type="file" id="Factura" name="Factura" class="hide">
                        <div id="btnAdjunto" class="col-md-12 cursor-hand" align="center">
                            <span class="fa fa-upload fa-5x"></span>
                            <h1>ADJUNTAR FACTURA</h1>
                        </div>
                        <div id="VistaPreviaFactura" class="col-md-12"></div>
                        <div id="msgResult"></div>
                    </fieldset>

                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button>
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" ><span class="fa fa-check fa-3x"></span></button>
                <!--<button class="btn btn-lg fa-lg btn-success hide hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>-->
            </div>
        </div>
    </div>
</div>

<div id="mdlIngresosCobrados" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title bounce" id="myModalLabel">REGISTRO DE INGRESOS COBRADOS</h2>
            </div>
            <form id="frmIngresosCobrados">
                <div id="msg-result-ingresoscobrados" class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="IdCobranza" name="IdCobranza" class="form-control" readonly="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">NO.RECIBO</label>
                            <input type="text" id="NoRecibo" name="NoRecibo" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE EMISIÓN</label>
                            <input type="text" id="FechaEmsion" name="FechaEmsion" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE PAGO</label>
                            <input type="text" id="FechaPago" name="FechaPago" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">RECIBÍ DE</label>
                            <select id="Recibi" name="Recibi" class="form-control" >

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">LA CANTIDAD DE</label>
                            <input type="number" id="Cantidad" name="Cantidad" class="form-control" placeholder="0" >
                        </div>
                        <div class="col-md-4">
                            <label for="">POR CONCEPTO DE</label>
                            <input type="text" id="Concepto" name="Concepto" class="form-control" placeholder="X">
                        </div>
                        <div class="col-md-3">
                            <label for="">FORMA DE PAGO</label>
                            <select id="FormaDePago" name="FormaDePago" class="form-control" >
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">REFERENCIA</label>
                            <input type="text" id="Referencia" name="Referencia" class="form-control" placeholder="XXXXXXXXXX">
                        </div>
                        <div class="col-md-3">
                            <label for="">EMITE</label>
                            <select id="Emisor" name="Emisor" class="form-control">
                                <option value="0"></option>
                                <option value="1">RECIBO</option>
                                <option value="2">FACTURA</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">NUMERO</label>
                            <input type="text" class="form-control" id="Numero" name="Numero" placeholder="NUMERO DE RECIBO/FACTURA">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>FORMA DE CONSIGNAR EL MONTO PAGADO</label>
                            <select id="FormaDeConsignarMonto" name="FormaDeConsignarMonto" class="form-control" >
                                <option value="0"></option>
                                <option value="1">EFECTIVO - CAJA DE INGRESOS ADMINISTRACIÓN</option>
                                <option value="2">DEPOSITO EN CUENTA BANCARIA</option>
                                <option value="3">CHEQUE</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-6 hide">
                            <label>FECHA DE ENTREGA DE EFECTIVO CAJA DE INGRESOS ADMINISTRACIÓN</label>
                            <input type="text" id="FechaIngresoAdministracion" name="FechaIngresoAdministracion" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-6 hide">
                            <label>FOLIO DE ACUSE DE ENTREGA DE EFECTIVO CAJA DE INGRESOS ADMINISTRACIÓN</label>
                            <input type="text" class="form-control" id="FolioIngresoAdministracion" name="FolioIngresoAdministracion" placeholder="FO00001">
                        </div>
                        <div class="col-md-4 hide">
                            <label>BANCO</label>
                            <input type="text" class="form-control" id="Banco" name="Banco" placeholder="BAN BAJIO, BANAMEX, BANCOMER...">
                        </div>
                        <div class="col-md-4 hide">
                            <label>CUENTA</label>
                            <input type="text" class="form-control" id="Cuenta" name="Cuenta" placeholder="">
                        </div>
                        <div class="col-md-4 hide">
                            <label>FECHA DE OPERACIÓN BANCARIA</label>
                            <input type="text" class="form-control" id="FechaDeLaOperacion" name="FechaDeLaOperacion" data-provide="datepicker" data-date-format="dd/mm/yyyy" placeholder="">
                        </div>
                        <div class="col-md-12 hide">
                            <label>NOMBRE DE LA PERSONA QUE REALIZO EL TRÁMITE DE COBRO AL CLIENTE</label>
                            <select id="CobradorDelTramite" name="CobradorDelTramite" class="form-control">

                            </select>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button>
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" value="" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlPagoSinAsignar" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PAGO SIN ASIGNAR O CON OBSERVACIÓN</h4>
            </div>
            <form id="frmPagoSinAsignar">
                <div class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-6">
                            <label for="">EMPRESA RABINA</label>
                            <select id="Empresa" name="Empresa" class="form-control"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">CLIENTE</label>
                            <select id="Cliente" name="Cliente" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE PAGO(OPERACION BANCARIA)</label>
                            <input type="text" id="FechaDePago" name="FechaDePago" class="form-control cursor-hand" placeholder="FECHA DE PAGO" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE INFORME</label>
                            <input type="text" id="FechaDeInforme" name="FechaDeInforme" class="form-control cursor-hand" placeholder="FECHA DE PAGO" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE REGISTRO</label>
                            <input type="text" id="FechaDeRegistro" name="FechaDeRegistro" class="form-control cursor-hand" placeholder="FECHA DE PAGO" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-3">
                            <label for="">FORMA DE PAGO</label>
                            <select id="FormaDePago" name="FormaDePago" class="form-control"
                    </div>
                    <div class="col-md-3">
                        <label for="">REFERENCIA</label>
                    </div>
                    <div class="col-md-3">
                        <label for="">BANCO</label>
                    </div>
                    <div class="col-md-3">
                        <label for="">CUENTA</label>
                    </div>
                    <div class="col-md-2">
                        <label for="">No</label>
                    </div>
                    <div class="col-md-3">
                        <label for="">NÚMERO DE CONTRATO</label>
                    </div>
                    <div class="col-md-3">
                        <label for="">NÚMERO DE FACTURA</label>
                    </div>
                    <div class="col-md-4">
                        <label for="">MONTO DE PAGO A FACTURA</label>
                    </div>
                </fieldset>
            </div>
        </form>

        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button>
            <button class="btn btn-lg fa-lg btn-success hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" value="<?php echo $indice; ?>" ><span class="fa fa-check fa-3x"></span></button>
            <button class="btn btn-lg fa-lg btn-success hide hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>
        </div>
    </div>
</div>
</div>





<div id="mdlEmisionReciboPago" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">EMISIÓN DE RECIBOS DE PAGO</h2>
            </div>
            <form id="frmReciboAGenerar">
                <div class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">EMPRESAS / CLIENTES</label>
                            <select class="form-control" id="cmbEmpresaCliente" name="cmbEmpresaCliente"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($ID_cliente as $ID_cliente1) { ?>
                                    <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                                <?php } ?>
                            </select>
                            <input  type="hidden" name="user" id="user" value="<?php echo $indice; ?>" >
                        </div>
                        <div id="Resultado" class=" col-md-12 hide" >

                        </div>
                        <div id="dLoader" class="col-md-12 hide">
                            <h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>
                        </div>
                        <div id="ResultadoRecibo" class="col-md-12 hide">
                            <div class="col-md-12">
                                <input class="form-control hide" type="text" name="CobranzaIDR" id="CobranzaIDR"  value="">
                            </div>
                            <div class="col-md-4  hide" align="center">
                                <div class="well">
                                    <img src="<?php echo base_url(); ?>media/logo.png" width="80%" height="auto" >
                                    <p class="span6">LOMA DEL PEDREGAL #417</p>
                                    <p class="span6">COL. LOMAS DEL CAMPESTRE</p>
                                    <p class="span6">LEÓN GTO. MÉXICO. </p>
                                    <p class="span6">TEL. +52 (477) 779 72 21</p>
                                    <p class="span6">+52 (477) 779 72 27</p>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <label for="NoRecibo" class="control-label">No. de Recibo:</label>
                                <input  style="text-transform:uppercase; color:#F30" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ReciboNoRecibo" id="ReciboNoRecibo" value="">
                            </div>
                            <div class="col-md-4 ">
                                <label for="ReciboFechaPago" class="control-label">Fecha de pago:</label>
                                <input  style="text-transform:uppercase" onkeyup="" data-provide="datepicker" data-date-format="dd/mm/yyyy" class="form-control" type="text" name="ReciboFechaPago" id="ReciboFechaPago" value=" " required>
                            </div>
                            <div class="col-md-4 ">
                                <label for="ReciboNombre" class="control-label">Recibí de:</label>
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ReciboNombre" id="ReciboNombre" value=" ">
                            </div>
                            <div class="col-md-4 ">
                                <label for="MontoTotal" class="control-label">Monto a cobrar:</label>
                                <input  style="text-transform:uppercase" onkeyup="" class="form-control" readonly="" type="text" name="MontoTotal" id="MontoTotal" value=" ">
                            </div>
                            <div class="col-md-8 ">
                                <label for="ReciboHonorarios" class="control-label">Por concepto de: </label>
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ReciboHonorarios" id="ReciboHonorarios" value=" ">
                            </div>
                            <div class="col-md-4 ">
                                <label for="ReciboCantidad" class="control-label">La cantidad de:</label>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="ReciboCantidad" id="ReciboCantidad" value="" onblur="onChangeAmount()" onkeyup="onChangeAmount()">
                            </div>
                            <div class="col-md-3">
                                <br>
                                <span class="label label-default">TOTAL</span>
                                <span class="label label-primary tt">$ 0.00</span>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <span class="label label-default">RESTANTE</span>
                                <span class="label label-success rtt">$ 0.00</span>
                            </div>
                            <div id="ModificarRecibo" class="col-md-4 hide">
                                <label for="ReciboTotal" class="control-label">TOTAL</label>
                                <input class="form-control" type="text" name="ReciboTotal" id="ReciboTotal" value=" ">
                            </div>
                            <div class=" col-md-2 margin-15-top">
                                <button class="btn btn-lg fa-lg btn-success btn-lg fa-lg" type="button"  id="generar" name="generar"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                                    <span class="fa fa-check fa-3x"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>

            </div>
        </div>
    </div>
</div>

<div id="mdlCobroPorHonorariosMensuales" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ORDEN DE COBRO POR HONORARIOS MENSUALES</h4>
            </div>

            <form id="frmReciboAGenerar">
                <div class="modal-body text-center">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">ORDEN DE COBRO POR HONORARIOS MENSUALES</a></li>
                        <li><a href="#profile" data-toggle="tab">
                                ORDEN DE COBRO POR HONORARIOS MENSUALES POR CLIENTE</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane  animated zoomInUp active in" id="home">

                            <fieldset>
                                <div class="col-md-12">
                                    <h2>LA SIGUIENTE INSTRUCCIÓN EMITIRÁ EL COBRO POR LOS HONORARIOS MENSUALES CORRESPONDIENTES A LA TOTALIDAD DE LOS CLIENTES POR SU RESPONSABLE, ES UNA INSTRUCCIÓN MENSUAL Y SOLO SE PODRÁ EMITIR UNA VEZ.</h2>
                                </div>

                                <div class="col-md-6">
                                    <label for="">MES A COBRAR</label>
                                    <select class="form-control" id="meses" name="meses"  required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Meses as $Meses1) { ?>
                                            <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">EJERCICIO A COBRAR</label>
                                    <input  class="form-control" type="text" name="anio" id="anio"  value="<?php echo date("Y") ?>" required="required">
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane  animated zoomInUp" id="profile">
                            <fieldset>
                                <div class="col-md-12 margin-15-top">

                                    <select class="form-control" id="ID_cliente" name="ID_cliente"  required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($ID_cliente as $ID_cliente1) { ?>
                                            <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">MES A COBRAR</label>
                                    <select class="form-control" id="meses2" name="meses2"  required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Meses as $Meses1) { ?>
                                            <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">EJERCICIO A COBRAR</label>
                                    <input  class="form-control" type="text" name="anio2" id="anio2"  value="<?php echo date("Y") ?>" required="required">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button type="button" class="btn btn-success btn-lg fa-lg" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlEstadoDeCuenta" class="modal  animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ESTADO DE CUENTA</h4>
            </div>
            <form id="frmIngresosCobrados">
                <div id="msg-result-ingresoscobrados" class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-4">
                            <label for="Cliente" class="control-label">cliente:</label>
                            <select class="form-control" id="Cliente" name="Cliente"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($ID_cliente as $ID_cliente1) { ?>
                                    <option value="<?php echo $ID_cliente1->ID; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="NombreActividad" class="control-label">Fecha de inicio </label>
                            <input class="form-control" type="text" name="FechaInicioEdo" id="FechaInicioEdo" data-provide="datepicker" data-date-format="dd/mm/yyyy"  value="<?php echo date("d/m/Y") ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="NombreActividad" class="control-label">Fecha de término </label>
                            <input class="form-control" type="text" name="FechaTerminoEdo" id="FechaTerminoEdo" data-provide="datepicker" data-date-format="dd/mm/yyyy" value="<?php echo date("d/m/Y") ?>">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-emerald btn-lg fa-lg" id="btnEstadoDeCuenta" name="btnEstadoDeCuenta">
                                <span class="fa fa-search fa-3x"></span>
                            </button>
                            <button type="button" class="btn btn-emerald btn-lg fa-lg hide hide" id="btnEstadoDeCuentaProgress" name="btnEstadoDeCuentaProgress">
                                <span class="fa fa-refresh fa-spin fa-3x"></span>
                            </button>
                        </div>
                    </fieldset>
                    <div id="msg-result-edocuenta" class="table-responsive">
                    </div>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button>
                <button class="btn btn-lg fa-lg btn-success hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" value="<?php echo $indice; ?>" ><span class="fa fa-check fa-3x"></span></button>
                <button class="btn btn-lg fa-lg btn-success hide hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>
            </div>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + "index.php/ctrlCobranza/";
    var btnPagoSinAsignar = $("#btnPagoSinAsignar");
    var mdlPagoSinAsignar = $("#mdlPagoSinAsignar");
    var btnNuevaOrdenDecobro = $("#btnNuevaOrdenDecobro");
    var mdlOrdenDeCobro = $("#mdlOrdenDeCobro");
    var divFiltros = $("#divFiltros");
    var btnHistorialIngresosCobrados = $("#btnHistorialIngresosCobrados");
    var btnCobranza = $("#btnCobranza");
    var btnReset = $("#btnReset");
    var btnCobranzaXContratos = $("#btnCobranzaXContratos");
    var btnSaldosEnContratos = $("#btnSaldosEnContratos");
    var btnCobranzaXContratosTotales = $("#btnCobranzaXContratosTotales");
    var btnCancelar = $("#btnCancelar");
    var btnAdjunto = mdlOrdenDeCobro.find("#btnAdjunto");
    var Factura = mdlOrdenDeCobro.find("#Factura");
    var VistaPreviaFactura = mdlOrdenDeCobro.find("#VistaPreviaFactura");
    var btnRefrescar = $("#btnRefrescar");
    var btnEditar = $("#btnEditar");
    var mdlOrdenDeCobroU = $("#mdlOrdenDeCobroU");
    var btnAdjuntoEditar = mdlOrdenDeCobroU.find("#btnAdjunto");
    var FacturaEditar = mdlOrdenDeCobroU.find("#Factura");
    var VistaPreviaFacturaEditar = mdlOrdenDeCobroU.find("#VistaPreviaFactura");

    $(document).ready(function() {

        FacturaEditar.on('change', function() {
            var imageType = /image.*/;
            if (FacturaEditar[0].files[0] !== undefined && FacturaEditar[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    VistaPreviaFacturaEditar.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(FacturaEditar[0].files[0]);
            } else {
                if (FacturaEditar[0].files[0] !== undefined && FacturaEditar[0].files[0].type.match('application/pdf')) {
                    var readerpdf = new FileReader();
                    readerpdf.onload = function(e) {
                        VistaPreviaFacturaEditar.append('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="900px" height="1200px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(FacturaEditar[0].files[0]);
                } else {
                    var extension = getExt(FacturaEditar[0].files[0].name);
                    switch (extension) {
                        case "rar":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/rar.png" class="image-responsive">');
                            break;
                        case "zip":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "zip":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "xml":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/xml.png" class="image-responsive">');
                            break;
                        case "doc":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "docx":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "xls":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "xlsx":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "txt":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/txt.png" class="image-responsive">');
                            break;
                        case "css":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/css.png" class="image-responsive">');
                            break;
                        case "html":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "htm":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "sql":
                            VistaPreviaFacturaEditar.html('<img src="../../media/overlays/sql.png" class="image-responsive">');
                            break;
                        default:
                            VistaPreviaFacturaEditar.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                            break;
                    }
                }
            }
        });

        btnAdjuntoEditar.on('click', function() {
            FacturaEditar.trigger('click');
        });


        Factura.on('change', function() {
            var imageType = /image.*/;
            if (Factura[0].files[0] !== undefined && Factura[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    VistaPreviaFactura.html('<img src="' + reader.result + '"  class="img-responsive">');
                };
                reader.readAsDataURL(Factura[0].files[0]);
            } else {
                if (Factura[0].files[0] !== undefined && Factura[0].files[0].type.match('application/pdf')) {
                    var readerpdf = new FileReader();
                    readerpdf.onload = function(e) {
                        VistaPreviaFactura.append('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="900px" height="1200px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(Factura[0].files[0]);
                } else {
                    var extension = getExt(Factura[0].files[0].name);
                    switch (extension) {
                        case "rar":
                            VistaPreviaFactura.html('<img src="../../media/overlays/rar.png" class="image-responsive">');
                            break;
                        case "zip":
                            VistaPreviaFactura.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "zip":
                            VistaPreviaFactura.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "xml":
                            VistaPreviaFactura.html('<img src="../../media/overlays/xml.png" class="image-responsive">');
                            break;
                        case "doc":
                            VistaPreviaFactura.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "docx":
                            VistaPreviaFactura.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "xls":
                            VistaPreviaFactura.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "xlsx":
                            VistaPreviaFactura.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "txt":
                            VistaPreviaFactura.html('<img src="../../media/overlays/txt.png" class="image-responsive">');
                            break;
                        case "css":
                            VistaPreviaFactura.html('<img src="../../media/overlays/css.png" class="image-responsive">');
                            break;
                        case "html":
                            VistaPreviaFactura.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "htm":
                            VistaPreviaFactura.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "sql":
                            VistaPreviaFactura.html('<img src="../../media/overlays/sql.png" class="image-responsive">');
                            break;
                        default:
                            VistaPreviaFactura.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                            break;
                    }
                }
            }
        });

        btnAdjunto.on('click', function() {
            Factura.trigger('click');
        });

        btnCancelar.on('click', function() {
            if (temp !== undefined && temp !== 0 && temp > 0) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'CANCELANDO...'
                });
                $.ajax({
                    url: master_url + 'onCancelarOrden',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data);
                    onRefresh();
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'ORDEN DE COBRO CANCELADA', 'success');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        onRefresh();

        btnCobranzaXContratosTotales.on('click', function() {
            console.log('Espere...');
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onGenerarAcumuladoCobranzaXContratosTotales',
                type: "POST",
                data: {
                    INICIO: (divFiltros.find("#txtInicio").val() !== '') ? divFiltros.find("#txtInicio").val() : 0,
                    TERMINO: (divFiltros.find("#txtTermino").val() !== '') ? divFiltros.find("#txtTermino").val() : 0,
                    EMPRESA: (divFiltros.find("#cmbEmpresa").val() > 0) ? divFiltros.find("#cmbEmpresa").val() : 0,
                    CLIENTE: (divFiltros.find("#cmbEmpresaCliente").val() > 0) ? divFiltros.find("#cmbEmpresaCliente").val() : 0,
                    PROYECTO: (divFiltros.find("#cmbProyecto").val() > 0) ? divFiltros.find("#cmbProyecto").val() : 0,
                    ETAPA: (divFiltros.find("#cmbEtapa").val() > 0) ? divFiltros.find("#cmbEtapa").val() : 0,
                    CONTRATO: (divFiltros.find("#cmbContrato").val() > 0) ? divFiltros.find("#cmbContrato").val() : 0,
                    TIPO: (divFiltros.find("#cmbTipo").val() > 0) ? divFiltros.find("#cmbTipo").val() : 0
                }
            }).done(function(data, x, jq) {
                console.log(data);
                console.log(divFiltros.find("#cmbEmpresa").val(), divFiltros.find("#cmbEmpresaCliente").val(),
                        divFiltros.find("#cmbProyecto").val(), divFiltros.find("#cmbEtapa").val());
                //                HoldOn.close();
                console.log('Reporte "COBRANZA POR CONTRATOS TOTALES" generado!');
                window.open(data, '_blank');
            }).fail(function(x, y, z) {
                //                HoldOn.close();
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnSaldosEnContratos.on('click', function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
// onGetRecords("tblCobranza", base_url + "index.php/ctrlCobranza/onLoadData", 1, "rtblCobranza", "msgCobranza", "NO SE ENCONTRARON REGISTROS");
//onGetRecords(tblname, url, indicex, target_result, target_fail_messages, fail_message) {

            temp = 0;
            $.ajax({
                url: master_url + 'getContratosConSaldo',
                type: "POST",
                dataType: "JSON"
            }).done(function(data) {
                var tblName = 'tblCobranza';
                if (data.length > 0) {
                    $("#rtblCobranza").html(getTable(tblName, data));

                    $('#tblCobranza tfoot th').each(function() {
                        var title = $(this).text();
                        $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                    });

                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    });
                    // Apply the search
                    tblSelected.columns().every(function() {
                        var that = this;
                        $('input', this.footer()).on('keyup change', function() {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN MOVIMIENTOS  CON SALDO O NO HAY CONTRATOS REGISTRADOS (POSIBLE ERROR EN LA CONEXION A LA BASE DE DATOS)', 'danger');
                }
            }).fail(function(x, y, z) {
                console.log("ERROR AL OBTENER LOS REGISTROS");
                console.log(x.responseText, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnCobranzaXContratos.on('click', function() {
            console.log('Espere...');
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onGenerarAcumuladoCobranzaXContratos',
                type: "POST",
                data: {
                    INICIO: (divFiltros.find("#txtInicio").val() !== '') ? divFiltros.find("#txtInicio").val() : 0,
                    TERMINO: (divFiltros.find("#txtTermino").val() !== '') ? divFiltros.find("#txtTermino").val() : 0,
                    EMPRESA: (divFiltros.find("#cmbEmpresa").val() > 0) ? divFiltros.find("#cmbEmpresa").val() : 0,
                    CLIENTE: (divFiltros.find("#cmbEmpresaCliente").val() > 0) ? divFiltros.find("#cmbEmpresaCliente").val() : 0,
                    PROYECTO: (divFiltros.find("#cmbProyecto").val() > 0) ? divFiltros.find("#cmbProyecto").val() : 0,
                    ETAPA: (divFiltros.find("#cmbEtapa").val() > 0) ? divFiltros.find("#cmbEtapa").val() : 0,
                    CONTRATO: (divFiltros.find("#cmbContrato").val() > 0) ? divFiltros.find("#cmbContrato").val() : 0,
                    TIPO: (divFiltros.find("#cmbTipo").val() > 0) ? divFiltros.find("#cmbTipo").val() : 0
                }
            }).done(function(data, x, jq) {
                console.log(data);
                console.log(divFiltros.find("#cmbEmpresa").val(), divFiltros.find("#cmbEmpresaCliente").val(),
                        divFiltros.find("#cmbProyecto").val(), divFiltros.find("#cmbEtapa").val());
                //                HoldOn.close();
                console.log('Reporte "COBRANZA POR CONTRATOS" generado!');
                window.open(data, '_blank');
            }).fail(function(x, y, z) {
                //                HoldOn.close();
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnCobranza.on('click', function() {
            console.log('Espere...');
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onGenerarAcumuladoCobranza',
                type: "POST",
                data: {
                    INICIO: (divFiltros.find("#txtInicio").val() !== '') ? divFiltros.find("#txtInicio").val() : 0,
                    TERMINO: (divFiltros.find("#txtTermino").val() !== '') ? divFiltros.find("#txtTermino").val() : 0,
                    EMPRESA: (divFiltros.find("#cmbEmpresa").val() > 0) ? divFiltros.find("#cmbEmpresa").val() : 0,
                    CLIENTE: (divFiltros.find("#cmbEmpresaCliente").val() > 0) ? divFiltros.find("#cmbEmpresaCliente").val() : 0,
                    PROYECTO: (divFiltros.find("#cmbProyecto").val() > 0) ? divFiltros.find("#cmbProyecto").val() : 0,
                    ETAPA: (divFiltros.find("#cmbEtapa").val() > 0) ? divFiltros.find("#cmbEtapa").val() : 0,
                    CONTRATO: (divFiltros.find("#cmbContrato").val() > 0) ? divFiltros.find("#cmbContrato").val() : 0,
                    TIPO: (divFiltros.find("#cmbTipo").val() > 0) ? divFiltros.find("#cmbTipo").val() : 0
                }
            }).done(function(data, x, jq) {
                console.log(
                        divFiltros.find("#cmbEmpresa").val(), divFiltros.find("#cmbEmpresaCliente").val(),
                        divFiltros.find("#cmbProyecto").val(), divFiltros.find("#cmbEtapa").val());
                //                HoldOn.close();
                console.log('Reporte generado!');
                console.log(data, x, jq);
                window.open(data, '_blank');
            }).fail(function(x, y, z) {
                //                HoldOn.close();
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnHistorialIngresosCobrados.on('click', function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onGenerarAcumuladoCobranzaHistorialIngresos',
                type: "POST",
                data: {
                    EMPRESA: (divFiltros.find("#cmbEmpresa").val() > 0) ? divFiltros.find("#cmbEmpresa").val() : 0,
                    EMPRESA_CLIENTE: (divFiltros.find("#cmbEmpresaCliente").val() > 0) ? divFiltros.find("#cmbEmpresaCliente").val() : 0,
                    PROYECTO: (divFiltros.find("#cmbProyecto").val() > 0) ? divFiltros.find("#cmbProyecto").val() : 0,
                    ETAPA: (divFiltros.find("#cmbEtapa").val() > 0) ? divFiltros.find("#cmbEtapa").val() : 0
                }
            }).done(function(data, x, jq) {
                window.open(data, '_blank');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnNuevaOrdenDecobro.on('click', function() {
            mdlOrdenDeCobro.modal('show');
        });

        btnPagoSinAsignar.on('click', function() {
            mdlPagoSinAsignar.modal('show');
        });

        var IdContrato = $("#mdlOrdenDeCobro #IdContrato");
        var IdContratoU = mdlOrdenDeCobroU.find("#IdContratoU");
        IdContrato.change(function() {

            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/getMontoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdContrato.val()
                }
            }).done(function(data, x, jq) {
                console.log(data);
                if (data[0] !== undefined) {
                    var dtm = data[0];
                    var MontoContrato = $("#MontoContrato");
                    MontoContrato.val(dtm.TOTAL);
                }
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log('OPERACION FINALIZADA');
                HoldOn.close();
            });
        });
        IdContratoU.change(function() {
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/getMontoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdContratoU.val()
                }
            }).done(function(data, x, jq) {
                console.log(data);
                if (data[0] !== undefined) {
                    var dtm = data[0];
                    var MontoContratoU = $("#MontoContratoU");
                    MontoContratoU.val(dtm.TOTAL);
                }
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log('OPERACION FINALIZADA');
            });
        });

        $("#btnReciboDePago").on('click', function() {
            if (temp !== undefined && temp !== 0 && temp > 0) {
                $("#btnReciboDePago").addClass("hide").find("span").removeClass("fa-print").addClass("fa-cog fa-spin");
                $.ajax({
                    url: base_url + 'index.php/ctrlCobranza/onGenerateReciboDePago',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    getContadoresDeCobranzaXEstatus();
                    console.log(data, x, jq);
                    window.open(data, '_blank');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    $("#btnReciboDePago").removeClass("hide").find("span").addClass("fa-print").removeClass("fa-cog fa-spin");
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnReset.on('click', function() {
            divFiltros.find('select').select2("val", "");
            divFiltros.find('input').val('');
        });

        $("#btnHIC").on('click', function() {
            if (divFiltros.hasClass("hide")) {
                divFiltros.removeClass("hide");
            }
            getEmpresasEnCobranza();
            btnEditar.addClass("hide");
            $("#btnHistorialIngresosCobrados").addClass("hide").find("span").removeClass("fa-eye").addClass("fa-cog fa-spin");
            $("#rtblCobranza").html("");
            onGetRecordsHistory("tblCobranzaIngresos", base_url + "index.php/ctrlCobranza/getHistorialDeIngresos", 0, "rtblCobranza", "msgCobranza", "NO SE ENCONTRARON REGISTROS");
            setTimeout(function() {
                $("#btnCancelarIngresosCobrado").removeClass("hide");
                $("#btnReciboDePago").removeClass("hide");

                $("#btnHistorialIngresosCobrados").removeClass("hide").find("span").addClass("fa-eye").removeClass("fa-cog fa-spin");
            }, 1250);
        });
        $("#btnBuscarYExportar").on('click', function() {
            if (divFiltros.hasClass("hide")) {
                divFiltros.removeClass("hide");
            }
            btnReset.trigger('click');
            getEmpresasEnCobranza();
        });

        $("#btnCancelarIngresosCobrado").on('click', function() {
            if (temp !== undefined && temp !== 0 && temp > 0) {
                $("#btnCancelarIngresosCobrado").addClass("hide").find("span").removeClass("fa-times").addClass("fa-cog fa-spin");
                onNotify('<span class="fa fa-check fa-lg"></span>', 'INGRESO CANCELADO', 'info');

                $.ajax({
                    url: base_url + 'index.php/ctrlCobranza/onCancelarIngreso',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data, x, jq);
                    getContadoresDeCobranzaXEstatus();
                    $("#btnHIC").trigger('click');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    $("#btnCancelarIngresosCobrado").removeClass("hide").find("span").addClass("fa-times").removeClass("fa-cog fa-spin");
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        $("#mdlIngresosCobrados #btnGuardar").on('click', function() {
            $("#mdlIngresosCobrados #btnGuardar").addClass("hide").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            var frm = $("#mdlIngresosCobrados #frmIngresosCobrados").serialize();
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/addCobro',
                type: "POST",
                data: frm
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                $("#mdlIngresosCobrados").modal("hide");
                onRefresh();
                getContadoresDeCobranzaXEstatus();
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                $("#mdlIngresosCobrados #btnGuardar").removeClass("hide").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
            });
        });

        $("#btnIngresosCobrados").on('click', function() {
            if (temp !== undefined && temp !== 0 && temp > 0) {
                $.ajax({
                    url: base_url + "index.php/ctrlCobranza/getNumeroDeCobro",
                    type: "POST",
                    dataType: "JSON"
                }).done(function(data, x, jq) {
                    console.log(data);
                    getContadoresDeCobranzaXEstatus();
                    $("#NoRecibo").removeClass("hide");
                    $("#NoRecibo").next().remove();
                    $("#NoRecibo").val(data[0].COBRO);
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    console.log('OPERACION CONCLUIDA');
                });
                $("#btnIngresosCobrados").addClass("hide").find("span").removeClass("fa-dollar").addClass("fa-cog fa-spin");
                $.ajax({
                    url: base_url + 'index.php/ctrlCobranza/getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    if (dtm.Estatus === 'ACTIVO' || dtm.Estatus === 'PAGOS PARCIALES') {

                        $("#mdlIngresosCobrados #IdCobranza").val(dtm.ID);
                        $("#mdlIngresosCobrados #Recibi").select2("val", dtm.Cliente);
                        $("#mdlIngresosCobrados #Cantidad").val(dtm.Saldo);
                        $("#mdlIngresosCobrados #Concepto").val(dtm.Concepto);
                        $("#mdlIngresosCobrados #Numero").val(dtm.NFactura);
                        $("#mdlIngresosCobrados").modal('show');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTA ORDEN YA ESTA PAGADA', 'danger');
                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    console.log('');
                    $("#btnIngresosCobrados").removeClass("hide").find("span").addClass("fa-dollar").removeClass("fa-cog fa-spin");
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        var fdcm = $("#FormaDeConsignarMonto");
        fdcm.change(function() {
            console.log($(fdcm).val());
            var v = $(fdcm).val();
            if (parseInt(v) === 1) {
                $("#FechaIngresoAdministracion").parent().removeClass("hide");
                $("#FolioIngresoAdministracion").parent().removeClass("hide");
                $("#Banco").parent().addClass("hide");
                $("#Cuenta").parent().addClass("hide");
                $("#FechaDeLaOperacion").parent().addClass("hide");
                $("#CobradorDelTramite").parent().addClass("hide");
                $("#IdCobranza").parent().addClass("hide");
            }
            if (parseInt(v) === 2) {
                $("#FechaIngresoAdministracion").parent().addClass("hide");
                $("#FolioIngresoAdministracion").parent().addClass("hide");
                $("#Banco").parent().removeClass("hide");
                $("#Cuenta").parent().removeClass("hide");
                $("#FechaDeLaOperacion").parent().removeClass("hide");
                $("#CobradorDelTramite").parent().removeClass("hide");
                $("#IdCobranza").parent().removeClass("hide");
            }
            if (parseInt(v) === 3) {
                $("#FechaIngresoAdministracion").parent().addClass("hide");
                $("#FolioIngresoAdministracion").parent().addClass("hide");
                $("#Banco").parent().addClass("hide");
                $("#Cuenta").parent().addClass("hide");
                $("#FechaDeLaOperacion").parent().addClass("hide");
                $("#CobradorDelTramite").parent().addClass("hide");
                $("#IdCobranza").parent().addClass("hide");
            }
        });

        btnRefrescar.on('click', function() {
            onRefresh();
        });

        var btnGRDP = $("#btnGenerarOrdenDeCobro");
        btnGRDP.on('click', function() {
            if (temp !== undefined && temp !== 0 && temp > 0) {
                btnGRDP.find("span").removeClass("fa-print").addClass("fa-cog fa-spin");
                $.ajax({
                    url: base_url + 'index.php/ctrlCobranza/onGenerarOrdenDeCobro',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data);
                    window.open(data, '_blank');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    getContadoresDeCobranzaXEstatus();
                    btnGRDP.find("span").removeClass("fa-cog fa-spin").addClass("fa-print");
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnEditar.on('click', function() {
            HoldOn.open({
                theme: "sk-cube-grid"
            });
            if (temp !== undefined && temp !== 0 && temp > 0) {
                $.ajax({
                    url: master_url + "getRecordByID",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    var mdl = $("#mdlOrdenDeCobroU");
                    var dtm = data[0];
                    if (dtm.Estatus === 'ACTIVO' || dtm.Estatus === 'SIN PAGOS') {
                        mdlOrdenDeCobroU.find("#btnGuardar").removeClass("hide");
                    } else {
                        mdlOrdenDeCobroU.find("#btnGuardar").addClass("hide");
                    }
                    $(mdl).find("#ID").val(dtm.ID);
                    $(mdl).find("#Folio").val(dtm.Folio);
                    $(mdl).find("#Cliente").select2("val", dtm.Cliente);
                    $(mdl).find("#Concepto").val(dtm.Concepto);
                    $(mdl).find("#IdContratoU").select2("val", dtm.IdContrato);
                    $(mdl).find("#Tarifa").select2("val", dtm.Tarifa);
                    $(mdl).find("#MontoAPagar").val(dtm.MontoAPagar);
                    $(mdl).find("#NFactura").val(dtm.NFactura);
                    $(mdl).find("#FechaCobro").val(dtm.FechaCobro);
                    $(mdl).find("#IdEmisorDeLaOrden").select2("val", dtm.IdEmisorDeLaOrden);
                    $(mdl).find("#IdPrestadorDelServicio").select2("val", dtm.IdPrestadorDelServicio);
                    $(mdl).find("#MontoContratoU").val(dtm.MontoContrato);
                    if (dtm.Url !== null && dtm.Url !== undefined && dtm.Url !== '') {
                        var ext = getExt(dtm.Url);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            mdlOrdenDeCobroU.find("#VistaPreviaFactura").html("<hr><img id='trtImagen' src='" + (base_url + dtm.Url) + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlOrdenDeCobroU.find("#VistaPreviaFactura").html('<hr> <embed src="' + (base_url + dtm.Url) + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            mdlOrdenDeCobroU.find("#VistaPreviaFactura").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        mdlOrdenDeCobroU.find("#VistaPreviaFactura").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');

                    }
                    mdlOrdenDeCobroU.modal('toggle');
                    console.log(data, x, jq);
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                HoldOn.close();
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        mdlOrdenDeCobro.find("#btnGuardar").on('click', function() {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'GUARDANDO...'
            });
            var fdta = new FormData(mdlOrdenDeCobro.find("#frmCobranzaOrden")[0]);
            console.log('mdlOrdenDeCobro.find("#Factura")[0].files)');
            console.log(mdlOrdenDeCobro.find("#Factura")[0].files)
            fdta.append('FACTURA', mdlOrdenDeCobro.find("#Factura")[0].files);
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/addOrdenDeCobro',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: fdta
            }).done(function(data, x, jq) {
                console.log(data);
                console.log(jq);
                btnRefrescar.trigger('click');
                mdlOrdenDeCobro.modal('hide');
                getContadoresDeCobranzaXEstatus();
                $.notify({
                    title: '<span class="fa fa-check fa-lg"></span>',
                    message: 'EXITO! ORDEN GUARDADA'
                }, {
                    type: 'success'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
                $("#msgResult").html('<span class="label label-success">EXITO! ORDEN GUARDADA</span>');

            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        mdlOrdenDeCobroU.find("#btnGuardar").on('click', function() {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'GUARDANDO...'
            });
            var fdta = new FormData(mdlOrdenDeCobroU.find("#frmCobranzaOrdenU")[0]);
            console.log('mdlOrdenDeCobroU.find("#Factura")[0].files)');
            console.log(mdlOrdenDeCobroU.find("#Factura")[0].files);
            fdta.append('FACTURA', mdlOrdenDeCobroU.find("#Factura")[0].files);
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/onUpdateOrdenDeCobro',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: fdta
            }).done(function(data, x, jq) {
                console.log(data);
                console.log(jq);
                btnRefrescar.trigger('click');
                mdlOrdenDeCobroU.modal('hide');
                getContadoresDeCobranzaXEstatus();
                $.notify({
                    title: '<span class="fa fa-check fa-lg"></span>',
                    message: 'EXITO! ORDEN GUARDADA'
                }, {
                    type: 'success'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
                $("#msgResult").html('<span class="label label-success">EXITO! ORDEN GUARDADA</span>');

            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        $("#mdlOrdenDeCobro").on('hidden.bs.modal', function(e) {
            $("#mdlOrdenDeCobro input").val("");
            $("#mdlOrdenDeCobro select").select2("val", "");

        });

        $("#cmbEmpresaCliente").change(function(e) {
            $("#Resultado").removeClass("hide");
            $("#Resultado").html('<h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>');
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/ResultadoRecibo',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaCliente").val()
                }
            }).done(function(data) {
                $("#Resultado").html(data);
            });
        });

        $("#generar").on('click', function() {
            var formdata = $("#frmReciboAGenerar").serialize();
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/Recibo',
                type: "POST",
                data: formdata
            }).done(function(data) {
                console.log(data);

            }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest.responseText);
                console.log(errorThrown);
                console.log(textStatus);
            });
        });

        $("#btnEstadoDeCuenta").on('click', function() {
            $("#btnEstadoDeCuenta").addClass("hide");
            $("#btnEstadoDeCuentaProgress").removeClass("hide");

            $("#msg-result-edocuenta").removeClass("hide");
            $("#msg-result-edocuenta").html('<div align="center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
            //            $("#ResultadoEdoCuenta").html('<div class="text-center" align="center"><h2><i class="fa fa-circle-o faa-burst animated"></i> ESPERE...</h2></div>');
            getEstadoDeCuenta();
            setTimeout(function() {
                $("#btnEstadoDeCuentaProgress").addClass("hide");
                $("#btnEstadoDeCuenta").removeClass("hide");
            }, 2500);

        });

    });

    function onValidateFormRC() {
        var frm = $("#frmCobranzaOrden").serializeArray();
        var validation_form = false;
        $.each(frm, function(k, v) {
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                console.log(k, v);
                validation_form = false;
                return false;
            }
        });
        if (validation_form) {
            $("#btnGuardar").removeClass("hide");
        } else {
            $("#btnGuardar").addClass("hide");
        }
    }

    function onSelectCobroPendiente(cp) {
        $("#dLoader").removeClass("hide");
        //        $("#ResultadoRecibo").html('<h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>');
        console.log('...');
        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/LlenadoRecibo',
            type: "POST",
            dataType: "JSON",
            data: {
                CobroPendiente: cp
            }
        }).done(function(data) {
            console.log(data);
            $("#dLoader").addClass("hide");
            $("#ResultadoRecibo").removeClass("hide");
            $("#ReciboNoRecibo").val(data.COBRANZAID);
            $("#CobranzaIDR").val(data.COBRANZAID);
            $("#ReciboNombre").val(data.RECIBI);
            $("#MontoTotal").val(data.RESTO);
            $("#ReciboCantidad").val(data.RESTO);
            $("#ReciboHonorarios").val(data.CONCEPTO);
            $("#dTotal").val(data.RTOTAL);
            $("#ReciboTotal").val(data.TOTAL);
            $("#ReciboFechaPago").val(data.FECHA);
        });
    }

    function onChangeAmount() {
        var stt = 0.000;
        stt = parseFloat($("#ReciboCantidad").val());
        var tt = 0.000;
        tt = parseFloat($("#MontoTotal").val());
        $(".tt").text(" $ " + $.number(stt, 2, '.', ' ,'));
        var rtt = parseFloat($("#MontoTotal").val()) - stt;
        console.log(rtt === 0, rtt < 0, rtt > 0);
        if (stt > tt || stt === 0) {
            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'LA CANTIDAD INGRESADA NO PUEDE SER MAYOR AL MONTO O CERO'
            }, {
                type: 'warning'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $("#generar").addClass("hide");
        } else {
            if (rtt >= 0 || stt <= tt) {
                $(".rtt").text(" $ " + $.number(rtt, 2, '.', ' ,'));
                $("#generar").removeClass("hide");
            } else {
                $(".rtt").text(" $ " + $.number(rtt, 2, '.', ' ,'));
                $("#generar").addClass("hide");
            }
            if (rtt === 0) {
                $(".rtt").removeClass("label-danger");
                $(".rtt").addClass("label-success");
            } else {
                $(".rtt").removeClass("label-success");
                $(".rtt").addClass("label-danger");
            }
        }
    }

    function onGetRecords(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
        $("#" + target_result).html('<div align="center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
        temp = 0;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                INDICE: indicex
            }
        }).done(function(data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));

                $('#' + tblName + ' tfoot th').each(function() {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    console.log('ID');
                    console.log(dtm[0]);
                    temp = parseInt(dtm[0]);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('ID');
                    console.log(dtm[0]);

                    temp = parseInt(dtm[0]);
                    btnEditar.trigger("click");
                });
                // Apply the search
                tblSelected.columns().every(function() {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
        }).fail(function(x, y, z) {
            console.log("ERROR AL OBTENER LOS REGISTROS");
            console.log(x.responseText, y, z);
        });
    }


    function onGetRecordsHistory(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
        $("#" + target_result).html('<div align="center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
        temp = 0;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                INDICE: indicex
            }
        }).done(function(data, x, jq) {

            //        console.log(data)
            var tblName = tblname;
            //        $("#"+target_messages).append(data);
            //        console.log(data.length);
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $("#" + target_result + " tfoot th").each(function() {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    console.log('ID');
                    console.log(dtm[0]);
                    temp = parseInt(dtm[0]);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('ID');
                    console.log(dtm[0]);

                    temp = parseInt(dtm[0]);
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
        }).fail(function(x, y, z) {
            console.log(x.responseText);
            console.log(x, y, z);
        });
    }

    function onChangeEdoCuenta() {
        var Cliente = $('#Cliente').get(0).value;
        var FechaInicioEdo = $('#FechaInicioEdo').get(0).value;
        var FechaTerminoEdo = $('#FechaTerminoEdo').get(0).value;

        //    $('#ResultadoEdoCuenta').load(base_url + 'index.php/ctrlCobranza/EdoCuenta', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/EdoCuenta',
            type: "POST",
            data: {
                Cliente: Cliente,
                FechaInicioEdo: FechaInicioEdo,
                FechaTerminoEdo: FechaTerminoEdo
            }
        }).done(function(data) {
            $('#ResultadoEdoCuenta').html(data);
        });
    }

    function getEstadoDeCuenta() {
        console.log($("#Cliente").val(), $("#FechaInicioEdo").val(), $("#FechaTerminoEdo").val());
        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/getEstadoDeCuenta',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#Cliente").val(),
                FECHAINICIO: $("#FechaInicioEdo").val(),
                FECHAFINAL: $("#FechaTerminoEdo").val()
            }
        }).done(function(data) {
            //            console.log('EDO CUENTA');
            //            console.log(data);
            $("#msg-result-edocuenta").html(getTable("tblEstadoDeCuenta", data));
            $('#tblEstadoDeCuenta').DataTable(tableOptions);
            $("#msg-result-edocuenta").addClass("table-responsive");
            $("#tblEstadoDeCuenta > tbody > tr").each(function(k, v) {
                $(this).find("td")[2].innerHTML = '<span class="label label-success">' + $(this).find("td")[2].innerText + '</span>';
                $(this).find("td")[6].innerHTML = '<span class="label label-warning">' + $(this).find("td")[6].innerText + '</span>';
                $(this).find("td")[7].innerHTML = '<span class="label label-info">' + $(this).find("td")[7].innerText + '</span>';
                $(this).find("td")[9].innerHTML = '<span class="label label-danger">' + $(this).find("td")[9].innerText + '</span>';
            });
        }).fail(function(x, y, z) {
            console.log(x.responseText);
        });
    }

    function getDirectorio() {
        $.ajax({
            url: master_url + 'getDirectorio',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            //            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function(k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.RazonS + '</option>';
                });
                $(".modal #Cliente").html(options);
                $("#mdlIngresosCobrados #Recibi").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS EN DIRECTORIO', 'danger');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }


    function getEmpresasEnCobranza() {
        HoldOn.open({
            theme: "sk-cube-grid"
        });
        $.ajax({
            url: master_url + 'getEmpresasEnCobranza',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            //            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function(k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.RazonS + '</option>';
                });
                $("#cmbEmpresa").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS EN DIRECTORIO', 'danger');
            }
            getClientesEnCobranza();
            getProyectosXContratosDeObra();
            getContratosDeObraEnCobranza();
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getClientesEnCobranza() {
        $.ajax({
            url: master_url + 'getClientesEnCobranza',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            //            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function(k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.RazonS + '</option>';
                });
                $("#cmbEmpresaCliente").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS EN DIRECTORIO', 'danger');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            //            HoldOn.close();
        });
    }

    function getProyectosXContratosDeObra() {
//        HoldOn.open({
//            theme: "sk-cube-grid"
        //        });
        $.ajax({
            url: master_url + 'getProyectosXContratosDeObra',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            //            console.log(data)
            var options = '<option value=""></option>';
            $.each(data, function(k, v) {
                options = options + '<option value="' + v.ID + '">' + (v.PROYECTO) + '</option>';
            });
            divFiltros.find("#cmbProyecto").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            //            HoldOn.close();
        });
    }

    function getContratosDeObra() {
        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/getContratosDeObra',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            //            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function(k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.CONTRATODEOBRA + '</option>';
                });
                $(".modal #IdContrato").html(options);
                $(".modal #IdContratoU").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS EN DIRECTORIO', 'danger');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        });
    }

    function getContratosDeObraEnCobranza() {
        HoldOn.open({
            theme: "sk-cube-grid"
        });
        $.ajax({
            url: master_url + 'getContratosDeObraEnCobranza',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function(k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.CONTRATODEOBRA + ' ' + ((v["TOTAL FACTURAS"] <= 0) ? '(NO TIENE FACTURAS)' : '') + '</option>';
                });
                divFiltros.find("#cmbContrato").html(options);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS EN DIRECTORIO', 'danger');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getUsuarios() {
        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/getUsuarios',
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                //                console.log(data)
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function(k, v) {
                        options = options + '<option value="' + v.Id + '">' + v.nombre + ' ' + v.apaterno + ' ' + v.amaterno + '</option>';
                    });
                    $("#CobradorDelTramite").html(options);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS DE USUARIOS', 'danger');
                }
            },
            error: function(x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function onGetFormasDePago() {
        $.ajax({
            url: base_url + 'index.php/ctrlCompras/getFormaDePago',
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function(k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.FORMADEPAGO + '</option>';
                    });
                    $("#FormaDePago").html(options);
                } else {
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'NO SE HA PODIDO OBTENER LAS FORMAS DE PAGO: LINEA 1217'
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
    function onRefresh() {
        $("#btnCancelarIngresosCobrado").addClass("hide");
        $("#btnIngresosCobrados").removeClass("hide");
        btnEditar.removeClass("hide");
        $("#btnReciboDePago").addClass("hide");
        divFiltros.addClass("hide");
        //        onGetRecords("tblCobranza", base_url + "index.php/ctrlCobranza/onLoadData", 1, "rtblCobranza", "msgCobranza", "NO SE ENCONTRARON REGISTROS");
        getRecords();
        getDirectorio();
        getContratosDeObra();
        getUsuarios();
        onGetFormasDePago();
        getContadoresDeCobranzaXEstatus();
    }

    function getContadoresDeCobranzaXEstatus() {
        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/getContadoresDeCobranzaXEstatus',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            //            console.log(data)
            var msg = '<label class="label label-danger">' + (data[0]["SIN PAGOS"]) + ' REGISTROS SIN PAGOS</label>';
            msg += '<label class="label label-king-blue">' + (data[0]["PAGOS PARCIALES"]) + ' REGISTROS CON PAGOS PARCIALES</label>';
            msg += '<label class="label label-success">' + (data[0].PAGADA) + ' REGISTROS PAGADOS</label>';
            $("#msgContadoresCobranza").html(msg);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            console.log('OPERACION CONTADORES FINALIZADA');
            HoldOn.close();
        });
    }

    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            $("#rtblCobranza").html(getTable('tblCobranza', data));
            $('#tblCobranza tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblCobranza').DataTable(tableOptions);
            $('#tblCobranza tbody').on('click', 'tr', function() {
                $("#tblCobranza").find("tr").removeClass("success");
                $("#tblCobranza").find("tr").removeClass("warning");
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
            $('#tblCobranza tbody').on('dblclick', 'tr', function() {
                $("#tblCobranza").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                btnEditar.trigger("click");
            });
            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

</script>