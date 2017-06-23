
<!------------------------OPTIONS------------------------------------------>
<div class="panel panel-success">
    <div class="panel-heading" align="center">
        <h3 class="panel-title">TRAMITE DE FACTURAS</h3>
    </div>
    <div class="panel-body">
        <fieldset>

            <div id="btnAccions" align="center" class="col-md-12">
                <fieldset>
                    <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" >
                        <button id="btnNuevo" class="btn  btn-default "  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                            <span class="fa fa-plus  info-icon"></span><br>NUEVO</button>
                    </span>
                    <button id="btnEditarTramiteFactura" class="btn btn3d  btn-default animated fadeInDown  "
                            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="MODIFICAR"  >
                        <span class="fa fa-pencil  success-icon"></span><br>EDITAR</button>
                    <button id="btnReCargarTramiteFactura" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR"  >
                        <span class="fa fa-refresh  warning-icon"></span><br>REFRESCAR</button>
                    <button id="btnCancelarFactura" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CANCELAR FACTURA"  >
                        <span class="fa fa-times  danger-icon"></span><br>CANCELAR FACTURA</button>
                    <button id="btnFacturasCanceladas" class="btn btn3d  btn-default animated fadeInDown  hide"
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="FACTURAS CANCELADAS"  >
                        <span class="fa fa-eye-slash  sea-icon"></span><br>CANCELAR FACTURA</button>
                    <button id="btnReporteAcumuladoGeneral" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="REPORTE ACUMULADO GENERAL"  >
                        <span class="fa fa-file-text  brown-icon"></span><br>ACUMULADO GENERAL
                    </button>
                    <button id="btnReporteTramiteFactura" class="btn btn3d  btn-default animated fadeInDown"
                            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ACUSE DE FACTURA"  >
                        <span class="fa fa-file-text purple-icon"></span><br>ACUSE DE FACTURA
                    </button>
                    <span  data-toggle="hide" data-easein="swoopIn" data-target="#content-busqueda" >
                        <button id="btnBusquedaEspecifica" class="btn btn3d  btn-default animated fadeInDown " data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSQUEDA ESPECIFICA"  >
                            <span class="fa fa-search "></span><br>BUSQUEDA
                        </button>
                    </span>
                    <button id="btnNC" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="APLICACIÓN DE NOTA DE CREDITO"  >
                        <span class="fa fa-eraser  cyan-icon"></span><br>APLICAR NOTA DE CRÉDITO
                    </button>
                    <button id="btnNotasDeCredito" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="VER NOTAS DE CRÉDITO APLICADAS">
                        <span class="fa fa-eye  ligth-green-icon"></span><br>VER NOTAS DE CRÉDITO
                    </button>
                    <button id="btnEditarNC" class="btn btn3d  btn-default animated fadeInDown  hide"
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="EDITAR NOTAS DE CRÉDITO APLICADAS">
                        <span class="fa fa-pencil  ligth-green-icon"></span>
                    </button>

                    <button id="btnCancelarNC" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR NOTA DE CRÉDITO">
                        <span class="fa fa-eraser  danger-icon"></span><br>CANCELAR NOTA DE CRÉDITO
                    </button>
                    <button id="btnAvance" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="AVANZAR"  >
                        <span class="fa fa-forward  bluegrey-icon"></span><br>AVANZAR
                    </button>
                    <button id="btnPagadas" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="VER FACTURAS PAGADAS"  >
                        <span class="fa fa-eye  success-icon"></span><br>FACTURAS PAGADAS
                    </button>
                    <button id="btnCancelarPagada" class="btn btn3d  btn-default animated fadeInDown  hide"
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR FACTURA PAGADA"  >
                        <span class="fa fa-ban  success-icon"></span><br>CANCELAR FACTURA PAGADA
                    </button>
                    <button id="btnCanceladas" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="VER FACTURAS CANCELADAS"  >
                        <span class="fa fa-eye  danger-icon"></span><br>FACTURAS CANCELADAS
                    </button>
                    <button id="btnPagarFactura" class="btn btn3d  btn-default animated fadeInDown "
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="PAGAR FACTURA"  >
                        <span class="fa fa-fast-forward  kingblue-icon"></span><br>PAGAR FACTURA(AUTORIZADA)
                    </button>
                    <button id="btnHistorialPagos" class="btn btn3d  btn-default animated fadeInDown  hide"
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="VER HISTORIAL DE PAGOS"  >
                        <span class="fa fa-eye "></span>
                    </button>
                    <button id="btnFacturaAGasto" class="btn btn3d  btn-default animated fadeInDown hide"
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="CONVERTIR EN GASTO"  >
                        <span class="fa fa-random "></span><br>CONVERTIR EN GASTO
                    </button>
                    <button id="btnAvance" class="btn btn3d  btn-default animated fadeInDown  hide"
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="FINALIZAR"  >
                        <span class="fa fa-fast-forward "></span>
                    </button>
                    <button class="btn btn3d  btn-info  hide" type="button" onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="MENU PRINCIPAL"  >
                        <span class="fa fa-th-large "></span>
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
                        <button id="btnReporteBusqueda" class="btn btn3d   btn-default fa-lg"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSCAR" type="button" >
                            <span class="fa fa-search fa-3x"></span>
                        </button>
                    </div>
                    <div class="col-md-1" align="center" >
                        <button id="btnResetBusqueda" class="btn btn3d   btn-default fa-lg"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="RESETEAR"  type="button" >
                            <span class="fa fa-trash fa-3x"></span>
                        </button>
                        <script>
                            $(document).ready(function() {
                                $("#btnResetBusqueda").click(function() {
                                    $("#frmBusquedaEspecifica")[0].reset();
                                    $("#frmBusquedaEspecifica select").select2("val", "");
                                });
                                $("#content-busqueda").draggable({scroll: false});
                            });
                        </script>
                        <!--</span>-->
                    </div>
                    <div class="col-md-12" align="center" >
                        <div id="msgReportsTF"></div>


                        <button id="btnCRIndividual" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO"  type="button" >
                            <span class="fa fa-exclamation fa-building-black fa-3x"></span>
                        </button>
                        <button id="btnCROBRA" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CONTRA RECIBO (OBRA)"  type="button" >
                            <span class="fa fa-building fa-3x fa-building-black"></span>
                        </button>
                        <button id="btnCRMATERIAL" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO (MATERIALES)"  type="button" >
                            <span class="fa fa-puzzle-piece fa-puzzle-piece-invert fa-3x"></span>
                        </button>
                        <button id="btnReportesFacturasSinAvanzar" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CONTRA RECIBO GENERAL(REGISTRADA)"  type="button" >
                            <span class="fa fa-exclamation fa-invert-negative fa-3x"></span>
                        </button>
                        <button id="btnReportesFacturasSinAvanzarOBRA" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL (REGISTRADA)(OBRA)"  type="button" >
                            <span class="fa fa-building fa-invert-negative fa-3x"></span>
                        </button>
                        <button id="btnReportesFacturasSinAvanzarMATERIAL" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CONTRA RECIBO GENERAL (REGISTRADA)(MATERIAL)"  type="button" >
                            <span class="fa fa-puzzle-piece fa-invert-negative fa-3x"></span>
                        </button>


                        <button id="btnReportesFacturas" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL(EN ELABORACIÓN DE FORMA DE PAGO)"  type="button" >
                            <span class="fa fa-exclamation fa-3x"></span>
                        </button>
                        <button id="btnReportesFacturasOBRA" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="CONTRA RECIBO GENERAL (EN ELABORACIÓN DE FORMA DE PAGO)(OBRA)"  type="button" >
                            <span class="fa fa-building fa-3x"></span>
                        </button>
                        <button id="btnReportesFacturasMATERIAL" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL (EN ELABORACIÓN DE FORMA DE PAGO)(MATERIAL)"  type="button" >
                            <span class="fa fa-puzzle-piece fa-3x"></span>
                        </button>

                        <button id="btnAcumuladoPorProveedor" class="btn btn3d   btn-default fa-lg" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ACUMULADO ESPECÍFICO"  type="button" >
                            <span class="fa fa-check lime-icon fa-3x"></span>
                        </button>

                        <!--</span>-->
                    </div>
                </form>
            </div>
            <div id="msgTramiteFactura" class="col-md-12"></div>
            <div id="rTramiteFactura" class=""></div>
        </fieldset>
    </div>
</div>
<div class="panel panel-primary hide">
    <div class="panel-heading">
        <h3 class="panel-title">INFORMACIÓN ADICIONAL</h3>
    </div>
    <div class="panel-body">

        <div class="col-md-3">
            <div class="panel panel-danger" id="pnlFacturasRegistradas">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-thumbs-o-up fa-4x"></i>
                        </div>
                        <div class="col-md-9 text-right">
                            <div class="huge">0</div>
                            <div>FACTURAS REGISTRADAS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary" id="pnlFacturasPagadas">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-check fa-4x"></i>
                        </div>
                        <div class="col-md-9 text-right">
                            <div class="huge">0</div>
                            <div>FACTURAS PAGADAS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info" id="pnlFacturasGastos">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-cc-mastercard fa-4x"></i>
                        </div>
                        <div class="col-md-9 text-right">
                            <div class="huge">0</div>
                            <div>GASTOS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-warning" id="pnlFacturasAutorizadas">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-shield fa-5x"></i>
                        </div>
                        <div class="col-md-9 text-right">
                            <div class="huge">0</div>
                            <div>FACTURAS AUTORIZADAS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->

<div id="mdlNuevo" class="modal animated fadeInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel">REGISTRO DE FACTURA PARA TRÁMITE DE PAGO </h2>
            </div>
            <form id="fTramiteFactura" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="IdTramiteFactura">ID</label>
                            <input type="text" id="IdTramiteFactura" name="IdTramiteFactura" class="form-control" readonly="" required="" value="0">
                        </div>
                        <div class="col-md-12 hide">
                            <label for="IdTramiteFactura">ESTATUS</label>
                            <input type="text" id="Estatus" name="Estatus" class="form-control" readonly="" required="" value="">
                        </div>
                        <div class="col-md-4">
                            <label for="Folio">Folio</label>
                            <input type="text" id="Folio" name="Folio" class="form-control" required="">
                        </div>
                        <div class="col-md-4">
                            <label for="Fecha">FECHA</label>
                            <input type="text" data-provide="datepicker" id="Fecha" name="Fecha" class="form-control" required="" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="Hora">HORA</label>
                            <input type="text" id="Hora" name="Hora" class="form-control" required="" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="Actividad">PROYECTO</label>
                            <select id="Actividad" name="Actividad" class="form-control">
                                <option value=""></option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Empresa">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="ModeloNegocio">ACTIVIDAD</label>
                            <!--<input type="text" id="ModeloNegocio" name="ModeloNegocio" class="form-control" required="" data-date-format="dd/mm/yyyy">-->
                            <select id="ModeloNegocio" name="ModeloNegocio" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="NumeroDeContrato">NÚMERO DE CONTRATO</label>
                            <input type="text" id="NumeroDeContrato" name="NumeroDeContrato" class="form-control" required="" >
                        </div>
                        <div class="col-md-6">
                            <label for="Proveedor">PROVEEDOR</label>
                            <select id="Proveedor" name="Proveedor" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="FechaFactura">FECHA DE LA FACTURA</label>
                            <input type="text" data-provide="datepicker" id="FechaFactura" name="FechaFactura" class="form-control" required="" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="NumeroFactura">NÚMERO DE FACTURA</label>
                            <input type="text" id="NumeroFactura" name="NumeroFactura" class="form-control" required=""  >
                        </div>
                        <div class="col-md-4">
                            <label for="Importe">IMPORTE</label>
                            <input type="number" id="Importe" name="Importe" class="form-control" required=""  >
                        </div>
                        <div class="col-md-2">
                            <label for=""><input type="checkbox" id="Pagada" name="Pagada" class="form-control">FACTURA PAGADA</label>
                        </div>
                        <div class="col-md-3">
                            <label for="OrdenDeCompraRef">ORDEN DE COMPRA DE REFERENCIA</label>
                            <input type="text" id="OrdenDeCompraRef" name="OrdenDeCompraRef" class="form-control" required=""  >
                        </div>
                        <div class="col-md-3">
                            <label for="">
                                <input type="checkbox" class="form-control" id="chkObservacion" name="chkObservacion">SIN OBSERVACIÓN
                            </label>
                        </div>
                        <script>
                            $(document).ready(function() {
                                var chk = $("#chkObservacion");
                                chk.change(function() {
                                    if (chk[0].checked) {
                                        $("#Observacion").val("SIN OBSERVACION");
                                        $("#Observacion").attr("readonly", true);
                                    } else {
                                        $("#Observacion").val("");
                                        $("#Observacion").removeAttr("readonly");
                                    }
                                });
                            });
                        </script>
                        <div class="col-md-4">
                            <label for="Observacion">OBSERVACIÓN </label>
                            <input type="text" id="Observacion" name="Observacion" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="Receptor">RECEPTOR EN RABINA </label>
                            <select id="Receptor" name="Receptor" class="form-control">
                                <option value=""></option>
                                <?php
                                foreach ($Empleados as $value) {
                                    print '<option value="' . $value->ID . '">' . $value->Nombre . ' ' . $value->apaterno . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtImagen"></div>
                        <div class="col-md-12 col-md-4"></div>
                        <div class="col-md-12 col-md-4 hand-cursor" id="fileuploadtf" align="center">
                            <br>
                            <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rtImagen" name="rtImagen">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgfacturas" class="col-md-12"></div>

                        <div class="col-md-12 cursor-hand" align="center" onclick="onMostrarPanelNC()">
                            <h1 class="font100">NOTAS DE CRÉDITO</h1>
                            <h4>*Haga click aqui*</h4>
                        </div>
                        <div id="pnlNotasDeCredito" class="hide">
                            <div class="col-md-4">
                                <label for="">FOLIO DE NOTA DE CRÉDITO</label>
                                <input typw="text" id="FolioNC" name="FolioNC" class="form-control" placeholder="NC000001">
                            </div>
                            <div class="col-md-4">
                                <label for="">TIPO DE NOTA DE CRÉDITO</label>
                                <select class="form-control" id="Concepto" name="Concepto">
                                    <option value=""></option>
                                    <option value="1">DESCUENTO POSTERIOR A LA EMISIÓN DE LA FACTURA</option>
                                    <option value="2">ANULACIÓN TOTAL DE LA FACTURA</option>
                                    <option value="3">COBRO DE GASTOS INCURRIDO DE MÁS(AJUSTE DE PRECIO)</option>
                                    <option value="4">PAGO PARCIAL DE LA COMPRAVENTA</option>
                                    <option value="5">DEVOLUCIÓN DE BIENES</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">MONTO DE NOTA DE CRÉDITO (APLICAR A LA FACTURA)</label>
                                <input type="number" id="MontoNCR" name="MontoNCR" class="form-control" placeholder="$0.0">
                            </div>
                            <div class="col-md-12">
                                <label for="">IMPORTE FINAL A PAGAR</label>
                                <input type="number" id="ImporteFacturaFinal" name="ImporteFacturaFinal" class="form-control" placeholder="$0.0" readonly="">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn3d  btn-default fa-lg" id="btnAddNCXF" name="btnAddNCXF" data-toggle="tooltip" data-placement="top" title="" data-original-title="APLICAR NOTA"  ><span class="fa fa-check purple-icon fa-3x"></span></button>
                            </div>

                            <div id="msgestatusNC" class="col-md-12">

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover " id="tblNotasDeCreditoXFactura">
                                    <thead>
                                        <tr>
                                            <th class="hide">ID</th>
                                            <th>Folio</th>
                                            <th>Concepto</th>
                                            <th>MONTO</th>
                                            <th class="hide">SALDO FINAL</th>
                                            <th>DOCUMENTO</th>
                                            <th class="col-md-6">VISTA PREVIA</th>
                                            <th>quitar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>TOTAL EN NOTAS DE CRÉDITO</th>
                                            <th class="ttf" colspan="7">0</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnRegistrarTramiteFactura" type="button" class="btn  btn-default fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"><span class="fa fa-check lime-icon fa-3x"></span></button>
                    <button id="btnActualizarTramiteFactura" type="button" class="btn btn-default fa-lg hide"><span class="fa fa-refresh fa-3x"></span></button>
                    <button id="btnActualizarTramiteFacturaProgress" type="button" class="btn btn-default fa-lg hide"><span class="fa fa-refresh fa-spin fa-3x"></span></button>
                    <!--<button id="btnUploadImage" type="submit" name="btnUploadImage" class="btn  btn-default fa-lg">SUBIR IMAGEN</button>-->
                </div>

            </form>
            <script>
                var fTramiteFactura = $("#fTramiteFactura");
                var MontoNCR = fTramiteFactura.find("#MontoNCR");
                var ImporteF = fTramiteFactura.find("#Importe");
                var ImporteFacturaFinal = fTramiteFactura.find("#ImporteFacturaFinal");
                var msgestatusNC = fTramiteFactura.find("#msgestatusNC");
                var btnAddNCXF = fTramiteFactura.find("#btnAddNCXF");
                var tblNotasDeCreditoXFactura = fTramiteFactura.find("#tblNotasDeCreditoXFactura");
                var btnPagadas = $("#btnPagadas");
                var btnCancelarPagada = $("#btnCancelarPagada");
                var btnEditarNC = $("#btnEditarNC");
                $(document).ready(function() {


                    btnAddNCXF.click(function() {
                        var importe_x = 0.0;
                        HoldOn.open({
                            theme: "sk-bounce",
                            message: "ESPERE..."
                        });
                        var rows_in = tblNotasDeCreditoXFactura.find("tbody > tr").length;
                        var tt = 0.0;
                        if (rows_in > 0) {
                            tblNotasDeCreditoXFactura.find("tbody > tr").each(function(k, v) {
                                var row = $(v).find(".ImporteNC");
                                var vt = parseFloat(row[0].innerText);
                                tt += parseFloat(vt);
                            });
                        }

                        if (tt >= 0 && tt < ImporteF.val()) {
                            if (ImporteF.val() !== undefined && ImporteF.val() > 0 && fTramiteFactura.find("#FolioNC").val() !== '' && fTramiteFactura.find("#ImporteFacturaFinal").val() !== '') {

                                var td = "<tr>";
                                td += "<td class=\"hide\">" + ((tblNotasDeCreditoXFactura.find("tbody > tr").length !== undefined && tblNotasDeCreditoXFactura.find("tbody > tr").length > 0) ? parseInt(tblNotasDeCreditoXFactura.find("tbody > tr").length) + 1 : 1) + "</td>";
                                td += "<td class=\"Folio\">" + fTramiteFactura.find("#FolioNC").val() + "</td>";
                                td += "<td class=\"Concepto hide\">" + fTramiteFactura.find("#Concepto").val() + "</td>";
                                td += "<td class=\"ConceptoT col-md-6\">" + fTramiteFactura.find("#Concepto").find("option:selected").text() + "</td>";
                                td += "<td class=\"ImporteNC\">" + fTramiteFactura.find("#MontoNCR").val() + "</td>";
                                td += "<td class=\"ImporteF\ hide\" > " + fTramiteFactura.find("#ImporteFacturaFinal").val() + " < /td>";
                                td += "<td ><button type=\"button\" id=\"btnNCRow\" class=\"btn btn3d btn-default\"  data-toggle=\"tooltip\" data-placement=\"top\"  data-original-title=\"ADJUNTAR ARCHIVO\" onclick=\"onSelectedItem(this)\"> <span class=\"fa fa-file fa-3x\"></span></button></td>";
                                td += "<td class=\"hide\"><input type=\"file\" class=\"btn btn3d btn-default\" id=\"rNC\" name=\"rNC[]\"></td>";
                                td += "<td class=\"col-md-6\"><div align=\"center\" class=\"col-md-12\" id=\"rArchivo\"></div></td>";
                                td += "<td><button type=\"button\" id=\"btnRemoveNC\" class=\"btn btn3d btn-default\" onclick=\"onRemoveNCRow(this)\"><span class=\"fa fa-times fa-3x\"></span></button> </td>";
                                td += "</tr>";
                                tblNotasDeCreditoXFactura.find("tbody").append("<script>$(document).ready(function () {$(\'[data-toggle=\"tooltip\"]\').tooltip();});<\/script>");
                                tt += parseFloat(fTramiteFactura.find("#MontoNCR").val());
                                if (tt >= 0 && tt <= ImporteF.val()) {
                                    tblNotasDeCreditoXFactura.find("tbody").append(td);
                                } else {
                                    tt -= parseFloat(fTramiteFactura.find("#MontoNCR").val());
                                    fTramiteFactura.find("#msgestatusNC").html('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>EL IMPORTE ES MENOR AL MONTO TOTAL DE LAS NOTAS DE CREDITO. VALIDACION: tt >= 0 && tt <= ImporteF.val()</h1></div>');
                                }

                            } else {
                                fTramiteFactura.find("#msgestatusNC").html('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>NECESITA CAPTURAR UN IMPORTE</h1></div>');
                            }

                            var tt = 0.0;
                            tblNotasDeCreditoXFactura.find("tbody > tr").each(function(k, v) {
                                var row = $(v).find(".ImporteNC");
                                var vt = parseFloat(row[0].innerText);
                                tt += parseFloat(vt);
                            });
                            tblNotasDeCreditoXFactura.find("tfoot th.ttf").html(tt);
                        } else {
                            fTramiteFactura.find("#msgestatusNC").html('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>EL IMPORTE ES MENOR AL MONTO TOTAL DE LAS NOTAS DE CREDITO. VALIDACION: tt >= 0 && tt < ImporteF.val()</h1></div>');
                        }

                        HoldOn.close();
                    });
                    MontoNCR.keyup(function() {
                        var importe = parseFloat(ImporteF.val());
                        var montocr = parseFloat(MontoNCR.val());
                        if (importe > 0 && montocr > 0 && montocr <= importe) {
                            var rt = importe - montocr;
                            ImporteFacturaFinal.val(rt);
                        }
                    });
                    mdlNuevo.find("#fileuploadtf").click(function() {
                        console.log('ok');
                        var Archivo = mdlNuevo.find("#rtImagen");
                        var VistaPreviaX = mdlNuevo.find("#frtImagen");
                        Archivo.change(function() {
                            HoldOn.open({
                                theme: 'sk-bounce',
                                message: 'ESPERE...'
                            });
                            var imageType = /image.*/;
                            if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    console.log(Archivo[0].files[0]);
                                    var preview = '<img src="' + reader.result + '" class="img-responsive" >';
                                    VistaPreviaX.html(preview);
                                };
                                reader.readAsDataURL(Archivo[0].files[0]);
                            } else {
                                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                                    console.log('ES UN PDF');
                                    var readerpdf = new FileReader();
                                    readerpdf.onload = function(e) {
                                        VistaPreviaX.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="100%" height="600px"' +
                                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                                    };
                                    readerpdf.readAsDataURL(Archivo[0].files[0]);
                                } else {
                                    VistaPreviaX.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                                }
                            }
                            HoldOn.close();
                        });
                        Archivo.trigger('click');
//                        $("#rtImagen").trigger('click');
                    });
                    $("#rtImagen").change(function() {

                        $("#rtImagenText").addClass("updated");
                        $("#rtImagenText").val($(this).val());
                    });
                    $('#mdlNuevo').on('hidden.bs.modal', function(e) {
                        $("#fTramiteFactura")[0].reset();
                        $('#fTramiteFactura select').select2("val", "");
                        tblNotasDeCreditoXFactura.find("tbody > tr").each(function(k, v) {
                            $(v).remove();
                        });
                        tblNotasDeCreditoXFactura.find("tfoot th.ttf").html("0");
                    });
                    $('#mdlRFPTDP').on('hidden.bs.modal', function(e) {
                        $("#fObservacionRDFPTDP")[0].reset();
                        $('#fObservacionRDFPTDP select').select2("val", "");
                    });
                    $('#mdlADFPEDFDP').on('hidden.bs.modal', function(e) {
                        $("#fObservacionADFPEDFDP")[0].reset();
                        $('#fObservacionADFPEDFDP select').select2("val", "");
                    });
                    $('#mdlADMPPDF').on('hidden.bs.modal', function(e) {
                        $("#fObservacionADMPPDF")[0].reset();
                        $('#fObservacionADMPPDF select').select2("val", "");
                    });
                });
                function onSelectedItem(e) {
                    var item = $(e).parent().parent();
                    var fbutton = $(item).find("#rNC");
                    var rArchivo = $(item).find("#rArchivo");
                    fbutton.change(function() {
                        var imageType = /image.*/;
                        if (fbutton[0].files[0] !== undefined && fbutton[0].files[0].type.match(imageType)) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                rArchivo.html('<img src="' + reader.result + '" width=\"450\" height=\"600\">');
                            };
                            reader.readAsDataURL(fbutton[0].files[0]);
                        } else {
                            if (fbutton[0].files[0] !== undefined && fbutton[0].files[0].type.match('application/pdf')) {
                                console.log('ES UN PDF');
                                var readerpdf = new FileReader();
                                readerpdf.onload = function(e) {
                                    rArchivo.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="600px" height="800px"' +
                                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                                };
                                readerpdf.readAsDataURL(fbutton[0].files[0]);
                            } else {
                                rArchivo.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                            }
                        }
                    });
                    fbutton.trigger('click');
                    console.log(item);
                }

                function onRemoveNCRow(e) {
                    $(e).parent().parent().remove();
                    var tt = 0.0;
                    tblNotasDeCreditoXFactura.find("tbody > tr").each(function(k, v) {
                        var row = $(v).find(".ImporteNC");
                        var vt = parseFloat(row[0].innerText);
                        tt += parseFloat(vt);
                    });
                    tblNotasDeCreditoXFactura.find("tfoot th.ttf").html(tt);
                }
                function onRemoveNCRRow(e) {
                    $(e).parent().parent().remove();
                    var tt = 0.0;
                    tblNotasDeCreditoXFacturaR.find("tbody > tr").each(function(k, v) {
                        var row = $(v).find(".ImporteNC");
                        var vt = parseFloat(row[0].innerText);
                        tt += parseFloat(vt);
                    });
                    tblNotasDeCreditoXFacturaR.find("tfoot th.ttf").html(tt);
                }
            </script>
        </div>
    </div>
</div>

<div id="mdlReportesTF" class="modal animated zoomIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">REPORTES DE FACTURAS PARA TRÁMITES DE PAGO</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div id="rHistorialDeFacturasParaTramitesDePago"></div>
                    <div class="col-md-12">
                        <div id="rRDFPTDP"></div>
                    </div>

                    <div class="col-sm-3 col-md-3 hover">
                        <div class="thumbnail text-center text-primary">
                            <span class="fa fa-copy fa-3x"></span>
                            <div class="caption">
                                <h4>CONTRA RECIBO</h4>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>

<div id="mdlRFPTDP" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="fObservacionRDFPTDP">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">REVISIÓN DE FACTURAS PARA TRÁMITE DE PAGO</h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <p>*NOTA: UNA VEZ AVANZADO EL REGISTRO ESTE NO PODRÁ VOLVER A UN ESTADO ANTERIOR</p>
                        </div>
                        <div class="col-md-4">
                            <label for="">ID:</label>
                            <input type="text" id="OXTIdTramiteFactura" name="OXTIdTramiteFactura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO:</label>
                            <input type="text" id="txtFolio" name="txtFolio" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTATUS ACTUAL:</label>
                            <input type="text" id="txtEstatus" name="txtEstatus" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="ObservacionesYN">TIENE OBSERVACIONES</label>
                            <select id="ObservacionesYN" class="form-control" name="ObservacionesYN">
                                <option value="0"></option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                        <div id="divObservaciones" class="hide">
                            <div class="col-md-12">
                                <label for="">OBSERVACIONES DE LA REVISIÓN:</label>
                                <input type="text" id="TituloObservacion" name="TituloObservacion" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="">SEGUIMIENTO QUE SE BRINDARA A LA OBSERVACIÓN:</label>
                                <input type="textarea" id="ContenidoObservacion" name="ContenidoObservacion" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label for="">ESTATUS PROXIMO:  </label><label class="text-danger"> REVISION</label>
                        </div>
                    </fieldset>
                    <div id="msgRDFPTDP"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnGuardarObservacionRDFPTDP" type="submit" class="btn btn-primary" > <span class="fa fa-save fa-3x"></span></button>
                    <button id="btnGuardarObservacionRDFPTDPProgress" type="submit" class="btn btn-primary disabled hide" > <span class="fa fa-save fa-3x"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="mdlRevision" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">REVISIÓN DE FACTURAS PARA TRÁMITE DE PAGO</h2>
            </div>
            <form id="fRevision">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <p>*NOTA: UNA VEZ AVANZADO EL REGISTRO ESTE NO PODRÁ VOLVER A UN ESTADO ANTERIOR</p>
                        </div>
                        <div class="col-md-4">
                            <label for="">ID:</label>
                            <input type="text" id="OXTIdTramiteFactura" name="OXTIdTramiteFactura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO:</label>
                            <input type="text" id="txtFolio" name="txtFolio" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTATUS ACTUAL:</label>
                            <input type="text" id="txtEstatus" name="txtEstatus" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="ObservacionesYN">TIENE OBSERVACIONES</label>
                            <select id="ObservacionesYN" class="form-control" name="ObservacionesYN">
                                <option value="0"></option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                        <div id="divObservaciones">
                            <div class="col-md-12">
                                <label for="">OBSERVACIONES DE LA REVISIÓN:</label>
                                <input type="text" id="TituloObservacion" name="TituloObservacion" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="">SEGUIMIENTO QUE SE BRINDARA A LA OBSERVACIÓN:</label>
                                <input type="textarea" id="ContenidoObservacion" name="ContenidoObservacion" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12" align="center">
                            <h1 class="font100">NOTAS DE CRÉDITO</h1>
                        </div>
                        <div class="col-md-12">
                            <label for="">IMPORTE DE LA FACTURA</label>
                            <input type="text" id="ImporteF" name="ImporteF" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO DE NOTA DE CRÉDITO</label>
                            <input typw="text" id="RFolioNC" name="RFolioNC" class="form-control" placeholder="NC000001">
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO DE NOTA DE CRÉDITO</label>
                            <select class="form-control" id="RConcepto" name="RConcepto">
                                <option value=""></option>
                                <option value="1">DESCUENTO POSTERIOR A LA EMISIÓN DE LA FACTURA</option>
                                <option value="2">ANULACIÓN TOTAL DE LA FACTURA</option>
                                <option value="3">COBRO DE GASTOS INCURRIDO DE MÁS(AJUSTE DE PRECIO)</option>
                                <option value="4">PAGO PARCIAL DE LA COMPRAVENTA</option>
                                <option value="5">DEVOLUCIÓN DE BIENES</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO DE NOTA DE CRÉDITO (APLICAR A LA FACTURA)</label>
                            <input type="number" id="RMontoNCR" name="RMontoNCR" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">IMPORTE FINAL A PAGAR</label>
                            <input type="number" id="RImporteFacturaFinal" name="RImporteFacturaFinal" class="form-control" placeholder="$0.0" readonly="">
                        </div>
                        <div class="col-md-6 col-sm-2">
                            <button type="button" class="btn btn3d  btn-default fa-lg" id="btnAddNCXFR" name="btnAddNCXFR" data-toggle="tooltip" data-placement="top" title="" data-original-title="APLICAR NOTA"  ><span class="fa fa-check purple-icon fa-3x"></span></button>
                        </div>

                        <div class="col-md-12">

                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>*ESTE PROCEDIMIENTO TIENE QUE HACERSE CON RESPONSABILIDAD*</strong>
                            </div>

                        </div>

                        <div id="msgestatusNC" class="col-md-12">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover " id="tblNotasDeCreditoXFacturaR">
                                <thead>
                                    <tr>
                                        <th class="hide">ID</th>
                                        <th>Folio</th>
                                        <th>Concepto</th>
                                        <th>MONTO</th>
                                        <th class="hide">SALDO FINAL</th>
                                        <th>DOCUMENTO</th>
                                        <th class="col-md-6">VISTA PREVIA</th>
                                        <th>quitar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>TOTAL EN NOTAS DE CRÉDITO</th>
                                        <th class="ttf" colspan="7">0</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label for="">ESTATUS PROXIMO:  </label><label class="text-danger"> REVISION</label>
                        </div>
                    </fieldset>
                    <div id="msgRDFPTDP"></div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnSave" type="button" class="btn  btn-default fa-lg" > <span class="fa fa-check lime-icon fa-3x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ></span></button>
            </div>
        </div>
    </div>
</div>
<script>
    var mdlNuevo = $("#mdlNuevo");
    var mdlRevision = $("#mdlRevision");
    var fRevision = mdlRevision.find("#fRevision");
    var RMontoNCR = fRevision.find("#RMontoNCR");
    var RImporteF = fRevision.find("#ImporteF");
    var RImporteFacturaFinal = fRevision.find("#RImporteFacturaFinal");
    var msgestatusNCR = fRevision.find("#msgestatusNC");
    var btnAddNCXFR = fRevision.find("#btnAddNCXFR");
    var tblNotasDeCreditoXFacturaR = fRevision.find("#tblNotasDeCreditoXFacturaR");
    $(document).ready(function() {

        btnAddNCXFR.click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });

            var rows_in = tblNotasDeCreditoXFacturaR.find("tbody > tr").length;
            var tt = 0.0;

            if (rows_in > 0) {
                tblNotasDeCreditoXFacturaR.find("tbody > tr").each(function(k, v) {
                    var row = $(v).find(".ImporteNC");
                    var vt = parseFloat(row[0].innerText);
                    tt += parseFloat(vt);
                });
            }

            if (tt >= 0 && tt < RImporteF.val()) {
                if (RImporteF.val() !== undefined && RImporteF.val() > 0 && fRevision.find("#FolioNC").val() !== '' && fRevision.find("#RImporteFacturaFinal").val() !== '') {

                    var td = "<tr>";
                    td += "<td class=\"hide\">" + ((tblNotasDeCreditoXFacturaR.find("tbody > tr").length !== undefined && tblNotasDeCreditoXFacturaR.find("tbody > tr").length > 0) ? parseInt(tblNotasDeCreditoXFacturaR.find("tbody > tr").length) + 1 : 1) + "</td>";
                    td += "<td class=\"Folio\">" + fRevision.find("#RFolioNC").val() + "</td>";
                    td += "<td class=\"Concepto hide\">" + fRevision.find("#RConcepto").val() + "</td>";
                    td += "<td class=\"ConceptoT col-md-6\">" + fRevision.find("#RConcepto").find("option:selected").text() + "</td>";
                    td += "<td class=\"ImporteNC\">" + fRevision.find("#RMontoNCR").val() + "</td>";
                    td += "<td class=\"RImporteF\ hide\" > " + fRevision.find("#RImporteFacturaFinal").val() + " < /td>";
                    td += "<td ><button type=\"button\" id=\"btnNCRow\" class=\"btn btn3d btn-default\"  data-toggle=\"tooltip\" data-placement=\"top\"  data-original-title=\"ADJUNTAR ARCHIVO\" onclick=\"onSelectedItem(this)\"> <span class=\"fa fa-file fa-3x\"></span></button></td>";
                    td += "<td class=\"hide\"><input type=\"file\" class=\"btn btn3d btn-default\" id=\"rNC\" name=\"rNC[]\"></td>";
                    td += "<td class=\"col-md-6\"><div align=\"center\" class=\"col-md-12\" id=\"rArchivo\"></div></td>";
                    td += "<td><button type=\"button\" id=\"btnRemoveNC\" class=\"btn btn3d btn-default\" onclick=\"onRemoveNCRRow(this)\"><span class=\"fa fa-times fa-3x\"></span></button> </td>";
                    td += "</tr>";
                    tblNotasDeCreditoXFacturaR.find("tbody").append("<script>$(document).ready(function () {$(\'[data-toggle=\"tooltip\"]\').tooltip();});<\/script>");
                    tt += parseFloat(fRevision.find("#RMontoNCR").val());
                    tt = parseFloat(tt).toFixed(3);

                    if (tt >= 0 || tt === RImporteF.val()) {
                        tblNotasDeCreditoXFacturaR.find("tbody").append(td);
                    } else {
                        fRevision.find("#msgestatusNC").html('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>EL IMPORTE ES MENOR (' + tt + ')AL MONTO TOTAL DE LAS NOTAS DE CREDITO.tt >= 0 && tt <= RImporteF.val()</h1></div>');

                        tt -= parseFloat(fRevision.find("#RMontoNCR").val());
                        fRevision.find("#msgestatusNC").append('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>EL IMPORTE ES MENOR (' + tt + ')AL MONTO TOTAL DE LAS NOTAS DE CREDITO.tt >= 0 && tt <= RImporteF.val()</h1></div>');
                    }

                } else {
                    fRevision.find("#msgestatusNC").html('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>NECESITA CAPTURAR UN IMPORTE</h1></div>');
                }
                var tt = 0.0;
                tblNotasDeCreditoXFacturaR.find("tbody > tr").each(function(k, v) {
                    var row = $(v).find(".ImporteNC");
                    var vt = parseFloat(row[0].innerText);
                    tt += parseFloat(vt);
                });
                tt = parseFloat(tt).toFixed(3);
                tblNotasDeCreditoXFacturaR.find("tfoot th.ttf").html(parseFloat(tt).toFixed(3));
            } else {
                fRevision.find("#msgestatusNC").html('<div class="alert alert-dismissible alert-danger">\n\
                <button type="button" class="close" data-dismiss="alert">&times;</button><h1>EL IMPORTE ES MENOR AL MONTO TOTAL DE LAS NOTAS DE CREDITO.</h1></div>');
            }
            fRevision.find("#RFolioNC").val("");
            fRevision.find("#RMontoNCR").val("");
            HoldOn.close();
        });

        RMontoNCR.keyup(function() {
            var importe = parseFloat(RImporteF.val());
            var montocr = parseFloat(RMontoNCR.val());
            if (importe > 0 && montocr > 0 && montocr <= importe) {
                var rt = importe - montocr;
                RImporteFacturaFinal.val(rt);
            }
        });

        mdlRevision.on('hidden.bs.modal', function(e) {
            $("#fRevision")[0].reset();
            $('#fRevision select').select2("val", "");
            tblNotasDeCreditoXFacturaR.find("tbody > tr").each(function(k, v) {
                $(v).remove();
            });
            tblNotasDeCreditoXFacturaR.find("tfoot th.ttf").html("0");
        });
    });</script>

<div id="mdlADFPEDFDP" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="fObservacionADFPEDFDP">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">AUTORIZACIÓN DE FACTURA PARA GENERACIÓN DE FORMA DE PAGO</h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-4">
                            <label for="">ID:</label>
                            <input type="text" id="OXTIdTramiteFacturaAutorizacion" name="OXTIdTramiteFacturaAutorizacion" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO:</label>
                            <input type="text" id="txtFolioRevision" name="txtFolioRevision" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTATUS ACTUAL:</label>
                            <input type="text" id="txtEstatusRevision" name="txtEstatusRevision" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="ObservacionesYNAU">OBSERVACIONES PARA GENERACIÓN DE FORMA DE PAGO</label>
                            <select id="ObservacionesYNAU" class="form-control" name="ObservacionesYNAU">
                                <option value="0"></option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                        <div id="divObservacionesAU" class="hide">
                            <div class="col-md-12">
                                <label for="">OBSERVACIONES DE LA AUTORIZACIÓN:</label>
                                <input type="text" id="TituloObservacionADFPEDFDP" name="TituloObservacionADFPEDFDP" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="">SEGUIMIENTO QUE SE BRINDARA A LA OBSERVACIÓN:</label>
                                <input type="textarea" id="ContenidoObservacionADFPEDFDP" name="ContenidoObservacionADFPEDFDP" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label class="">
                                <input type="checkbox" class="form-control" id="chkNoAutorizar" name="chkNoAutorizar">NO AUTORIZARADA
                            </label>
                            <BR>
                            <label for="">ESTATUS PROXIMO: </label><label class="text-danger"> AUTORIZADO</label>

                        </div>
                        <div class="col-md-12">
                            <div id="msgADFPEDFDP"></div>
                        </div>
                        <div id="tblObservacionesRevisadas" class="col-md-12">

                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnGuardarObservacionADFPEDFDP" type="submit" class="btn btn-primary" > <span class="fa fa-save fa-3x"></span></button>
                    <button id="btnGuardarObservacionADFPEDFDPProgress" type="submit" class="btn btn-primary hide" > <span class="fa fa-cog fa-spin fa-3x"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="mdlAutorizacion" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">AUTORIZACIÓN DE FACTURA PARA GENERACIÓN DE FORMA DE PAGO</h2>
            </div>
            <form id="fAutorizacion">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-4">
                            <label for="">ID:</label>
                            <input type="text" id="OXTIdTramiteFacturaAutorizacion" name="OXTIdTramiteFacturaAutorizacion" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO:</label>
                            <input type="text" id="txtFolioRevision" name="txtFolioRevision" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTATUS ACTUAL:</label>
                            <input type="text" id="txtEstatusRevision" name="txtEstatusRevision" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="ObservacionesYNAU">OBSERVACIONES PARA GENERACIÓN DE FORMA DE PAGO</label>
                            <select id="ObservacionesYNAU" class="form-control" name="ObservacionesYNAU">
                                <option value="0"></option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                        <div id="divObservacionesAU" class="">
                            <div class="col-md-12">
                                <label for="">OBSERVACIONES DE LA AUTORIZACIÓN:</label>
                                <input type="text" id="TituloObservacionADFPEDFDP" name="TituloObservacionADFPEDFDP" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="">SEGUIMIENTO QUE SE BRINDARA A LA OBSERVACIÓN:</label>
                                <input type="textarea" id="ContenidoObservacionADFPEDFDP" name="ContenidoObservacionADFPEDFDP" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label class="">
                                <input type="checkbox" class="form-control" id="chkNoAutorizar" name="chkNoAutorizar">NO AUTORIZARADA
                            </label>
                            <BR>
                            <label for="">ESTATUS PROXIMO: </label> <label class="text-danger"> AUTORIZADO</label>
                        </div>
                        <div class="col-md-12">
                            <div id="msgADFPEDFDP"></div>
                        </div>
                        <div id="tblObservacionesRevisadas" class="col-md-12">
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnSave" type="submit" class="btn  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"> <span class="fa fa-check lime-icon fa-3x" ></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlPagoFactura" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">AUTORIZACIÓN DE MONTO PARA PAGO DE FACTURA</h2>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#rPAY" data-toggle="tab" class="factura">FACTURA</a></li>
                    <li><a href="#rNC" data-toggle="tab" class="nc">NOTA DE CRÉDITO</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="rPAY">
                        <form id="fObservacionADMPPDF">
                            <fieldset>
                                <div class="col-md-4 hide">
                                    <label for="">ID:</label>
                                    <input type="text" id="IdTramiteFacturaADMPPDF" name="IdTramiteFacturaADMPPDF" class="form-control" readonly="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">FOLIO:</label>
                                    <input type="text" id="txtFolioADMPPDF" name="txtFolioADMPPDF" class="form-control" readonly="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">ESTATUS ACTUAL:</label>
                                    <input type="text" id="txtEstatusADMPPDF" name="txtEstatusADMPPDF" class="form-control" readonly="">
                                </div>
                                <div class="col-md-12">
                                    <label for="rDeterminaImporte">MONTO A PAGAR:</label>
                                    <select id="rDeterminaImporte" name="rDeterminaImporte" class="form-control" required="">
                                        <option value="0"></option>
                                        <option value="1">MISMO IMPORTE</option>
                                        <option value="2">OTRO MONTO</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">IMPORTE PAGADO </label>
                                    <input type="text" id="ImportePagado" name="ImportePagado" class="form-control" required="" readonly="">
                                </div>
                                <div id="divMonto" >
                                    <div class="col-md-6">
                                        <label for="">IMPORTE:</label>
                                        <input type="text" id="ImporteADMPPDF" name="ImporteADMPPDF" class="form-control" required="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">MONTO A PAGAR:</label>
                                        <input type="text" id="MontoXPagarADMPPDF" name="MontoXPagarADMPPDF" class="form-control" required="" onkeyup="onKeyUpImporteMenosMonto()"  readonly="">
                                    </div>
                                </div>
                                <div id="rObservaciones" class="col-md-12">

                                </div>
                                <div id="rSaldoImporteMenosMonto" class="col-md-12">
                                    <br><h3 class="text-center text-success">SALDO: </h3>
                                </div>

                                <div class="col-md-12" align="center">
                                    <!--<button id="btnAddNotaDeCredito" class="btn btn3d  btn-default fa-lg" >AGREGAR NOTA DE CRÉDITO</button>-->
                                </div>
                                <div class="col-md-12">
                                    <label for="">FORMA DE PAGO:</label>
                                    <select id="FormaDePago" name="FormaDePago" class="form-control">
                                        <option value=""></option>
                                        <option value="CHEQUE">CHEQUE</option>
                                        <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                                        <option value="EFECTIVO">EFECTIVO</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="">OBSERVACIONES DEL PAGO PARCIAL: </label>
                                    <input type="text" id="TituloObservacion" name="TituloObservacion" class="form-control" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="">SEGUIMIENTO QUE SE BRINDARA A LA OBSERVACIÓN:</label>
                                    <input type="textarea" id="ContenidoObservacion" name="ContenidoObservacion" class="form-control" required="">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                </div>
                                <div class="col-md-12">
                                    <label for="">ESTATUS PROXIMO AL COMPLETAR EL PAGO:</label><label class="text-danger"> PAGADA</label>
                                </div>
                                <div class="col-md-12">
                                    <label for="">ESTATUS PROXIMO AL SER UN PAGO INFERIOR AL IMPORTE:</label><label class="text-danger"> PARCIAL</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                        HISTORIAL DE PAGOS</a>
                                                </h4>
                                            </div>
                                            <div id="collapse2" class="panel-collapse">
                                                <div class="panel-body">
                                                    <div id="msgHistoryTramiteFactura"></div>
                                                    <div id="rHistoryPayments"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="rNC">
                        <form id="fNC">
                            <!--                            <fieldset>
                                                            <div id="vAddNC" class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <div id="sNC"><h1>SALDO: </h1></div>
                                                                </div>
                                                                <div id="ncMessages" class="col-md-12 text-center hide">
                                                                    <p class="text-danger">*EL MONTO NO ES IGUAL AL SALDO O ALGUN DATO FALTA*</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">FOLIO DE LA NOTA DE CRÉDITO</label>
                                                                    <input type="text" class="form-control" id="IdNotaDeCredito" name="IdNotaDeCredito" onkeyup="" placeholder="NC0001" />
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">CONCEPTO</label>
                                                                    <input type="text" class="form-control" id="ConceptoNC" name="ConceptoNC" onkeyup="" placeholder="DESCUENTO, OTRO MONTO, ETC.">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">MONTO TOTAL DE LA NOTA DE CREDITO</label>
                                                                    <input type="number" class="form-control" id="MontoTotalNC" name="MontoTotalNC"/>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">MONTO A APLICAR A LA FACTURA</label>
                                                                    <input type="number" class="form-control" id="MontoAplicado" name="MontoAplicado"/>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="">IMPORTE FACTURA RESTANTE</label>
                                                                    <input type="text" class="form-control" id="MontoFacturaRestante" name="MontoFacturaRestante" readonly=""/>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="">OBSERVACIONES</label>
                                                                    <input type="text" id="ObservacionesNC" name="ObservacionesNC" class="form-control"/>
                                                                </div>
                                                                <div class="col-md-12 hide">
                                                                    <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                                                                </div>

                                                                <div class="col-md-12" id="RDocumentoDisplayD" name="RDocumentoFileD"></div>

                                                                <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                                                                    <span class="fa fa-upload fa-3x"></span>
                                                                    <p>SELECCIONAR ARCHIVO</p>
                                                                </div>
                                                                <div class="col-md-12">
                                                                </div>

                                                            </div>
                                                        </fieldset>-->
                        </form>
                    </div>
                </div>
                <div id="msgADMPPDF"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnSave" type="button" class="btn  btn-default fa-lg" data-loading-text="GUARDANDO..." autocomplete="off"> <span class="fa fa-check lime-icon fa-3x"></span></button>
<!--                <button id="btnGuardarADMPPDF" type="button" class="btn btn-primary disabled" data-loading-text="GUARDANDO..." autocomplete="off"> <span class="fa fa-save fa-3x"></span></button>
                <button id="btnGuardarADMPPDFProgress" type="button" class="btn btn-primary hide disabled" data-loading-text="GUARDANDO..." autocomplete="off"> <span class="fa fa-cog fa-spin fa-3x"></span></button>
                <button id="btnNotaDeCredito" type="button" class="btn btn3d btn-default hide" ><span class="fa fa-check lime-icon fa-3x"></span></button>
                <button id="btnNotaDeCreditoProgress" type="button" class="btn btn3d btn-default disabled hide" ><span class="fa fa-cog fa-spin fa-3x"></span></button>-->
            </div>
        </div>
    </div>
</div>


<div id="mdlOBTF" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ESTATUS DEL TRAMITE</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div id="tMessages" class="col-md-12"></div>
                    <div id="cMessages" class="col-md-12"></div>
                    <div id="rContent" class="col-md-12" ></div>
                    <div id="rxContent" class="col-md-12" >

                    </div>
                </fieldset>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>

<div id="mdlPreview" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel">VISTA PREVIA </h2>
            </div>
            <div id="" class="modal-body text-center">
                <div id="result-preview"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlNotaDeCredito" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">APLICACIÓN DE NOTAS DE CRÉDITO</h2>
            </div>
            <div class="modal-body">
                <form id="fNotaDeCredito">
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">ID FACTURA</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <input type="text" id="EMPRESA_ID" name="EMPRESA_ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="PROVEEDOR_ID" name="PROVEEDOR_ID" class="form-control" readonly="">
                        </div>
                        <div id="" class="col-md-12">
                            <div class="col-md-12 hide">
                                <div id="sNC"><h1>SALDO: </h1></div>
                            </div>
                            <div id="ncMessages" class="col-md-12 text-center hide">
                                <p class="text-danger">*EL MONTO NO ES IGUAL AL SALDO O ALGUN DATO FALTA*</p>
                            </div>
                            <div class="col-md-6">
                                <label for="">FOLIO DE LA NOTA DE CRÉDITO</label>
                                <input type="text" class="form-control" id="IdNotaDeCredito" name="IdNotaDeCredito" onkeyup="" placeholder="NC0001" />
                            </div>
                            <div class="col-md-6">
                                <label for="">CONCEPTO</label>
                                <input type="text" class="form-control" id="ConceptoNC" name="ConceptoNC" onkeyup="" placeholder="DEVOLUCION, DESCUENTO, BONIFICACIÓN, AJUSTE DE PRECIO, DIFERENCIA EN PRECIO, ERROR DE CAPTURA, ETC.">
                            </div>
                            <div class="col-md-6">
                                <label for="">MONTO TOTAL DE LA FACTURA(INICIAL)</label>
                                <input type="number" class="form-control" id="Importe" name="Importe" readonly=""/>
                            </div>
                            <div class="col-md-6">
                                <label for="">MONTO TOTAL DE LA FACTURA(PAGADO)</label>
                                <input type="number" class="form-control" id="ImportePagado" name="ImportePagado" readonly=""/>
                            </div>
                            <div class="col-md-6">
                                <label for="">MONTO TOTAL DE LA FACTURA</label>
                                <input type="number" class="form-control" id="MontoFactura" name="MontoFactura" readonly=""/>
                            </div>
                            <div class="col-md-6">
                                <label for="">MONTO A APLICAR A LA FACTURA</label>
                                <input type="number" class="form-control" id="MontoAplicado" name="MontoAplicado"/>
                            </div>
                            <div class="col-md-12">
                                <label for="">IMPORTE FACTURA RESTANTE</label>
                                <input type="text" class="form-control" id="MontoFacturaRestante" name="MontoFacturaRestante" readonly=""/>
                            </div>
                            <div class="col-md-12">
                                <label for="">OBSERVACIONES</label>
                                <input type="text" id="ObservacionesNC" name="ObservacionesNC" class="form-control"/>
                            </div>
                            <div class="col-md-12 hide">
                                <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                            </div>

                            <div class="col-md-12" id="RDocumentoDisplayD" name="RDocumentoFileD"></div>

                            <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                                <span class="fa fa-upload fa-3x"></span>
                                <p>SELECCIONAR ARCHIVO</p>
                            </div>
                            <div class="col-md-12">
                            </div>

                        </div>
                    </fieldset>
                </form>
                <div id="msgADMPPDF"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnSave" type="button" class="btn  btn-default fa-lg" data-loading-text="GUARDANDO..." autocomplete="off" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" > <span class="fa fa-check lime-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlNotaDeCreditoV" class="modal animated zoomInUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">VER NOTA DE CRÉDITO</h2>
            </div>
            <div class="modal-body">
                <form id="fNotaDeCredito">
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">ID FACTURA</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <input type="text" id="EMPRESA_ID" name="EMPRESA_ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="PROVEEDOR_ID" name="PROVEEDOR_ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 hide">
                            <div id="sNC"><h1>SALDO: </h1></div>
                        </div>
                        <div id="ncMessages" class="col-md-12 text-center hide">
                            <p class="text-danger">*EL MONTO NO ES IGUAL AL SALDO O ALGUN DATO FALTA*</p>
                        </div>
                        <div class="col-md-6">
                            <label for="">FOLIO DE LA FACTURA</label>
                            <input type="text" class="form-control" id="FolioFactura" name="FolioFactura" onkeyup="" placeholder="F0001" readonly="" />
                        </div>
                        <div class="col-md-6">
                            <label for="">NUMERO DE LA FACTURA</label>
                            <input type="text" class="form-control" id="NumeroFactura" name="NumeroFactura" onkeyup="" placeholder="F0001" readonly="" />
                        </div>
                        <div class="col-md-6">
                            <label for="">FOLIO DE LA NOTA DE CRÉDITO</label>
                            <input type="text" class="form-control" id="IdNotaDeCredito" name="IdNotaDeCredito" onkeyup="" placeholder="NC0001" readonly="" />
                        </div>
                        <div class="col-md-6">
                            <label for="">CONCEPTO</label>
                            <input type="text" class="form-control" id="ConceptoNC" readonly="" name="ConceptoNC" onkeyup="" placeholder="DEVOLUCION, DESCUENTO, BONIFICACIÓN, AJUSTE DE PRECIO, DIFERENCIA EN PRECIO, ERROR DE CAPTURA, ETC.">
                        </div>

                        <!--HIDE FIELDS-->
                        <div class="col-md-6 hide">
                            <label for="">MONTO TOTAL DE LA FACTURA(INICIAL)</label>
                            <input type="number" class="form-control" id="Importe" name="Importe" readonly=""/>
                        </div>
                        <div class="col-md-6 hide">
                            <label for="">MONTO TOTAL DE LA FACTURA(PAGADO)</label>
                            <input type="number" class="form-control" id="ImportePagado" name="ImportePagado" readonly=""/>
                        </div>
                        <div class="col-md-6 hide">
                            <label for="">MONTO TOTAL DE LA FACTURA</label>
                            <input type="number" class="form-control" id="MontoFactura" name="MontoFactura" readonly=""/>
                        </div>
                        <!--END HIDE FIELDS-->

                        <div class="col-md-6">
                            <label for="">MONTO APLICADO A LA FACTURA</label>
                            <input type="number" class="form-control" id="MontoAplicado" name="MontoAplicado" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">IMPORTE FACTURA RESTANTE</label>
                            <input type="text" class="form-control" id="MontoFacturaRestante" name="MontoFacturaRestante" readonly=""/>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" id="ObservacionesNC" name="ObservacionesNC" class="form-control" readonly=""/>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-md-12 col-md-4"></div>
                        <div class="col-md-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>
                    </fieldset>
                </form>
                <div id="msgADMPPDF"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnSave" type="button" class="btn  btn-default fa-lg" data-loading-text="GUARDANDO..." autocomplete="off" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" > <span class="fa fa-check lime-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal animated zoomInUp" id="mdlAvanceRapido" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> AVANCE RÁPIDO DE FACTURAS</h2>
            </div>
            <form id="frmAvanceRapido">
                <div class="modal-body" align="center">
                    <fieldset>
                        <!--IDS-->
                        <div class="col-md-12 hide">
                            <label for="">FACTURA ID</label>
                            <input type="text" id="IdFactura" name="IdFactura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">FOLIO</label>
                            <input type="text" id="FolioFactura" name="FolioFactura" class="form-control" readonly="">
                            <hr>
                            <div id="FOLIO"> <h1></h1></div>
                        </div>
                        <div class="col-md-6">
                            <label for="">FACTURA</label>
                            <input type="text" id="Factura" name="Factura" class="form-control" readonly="">
                            <hr>
                            <div id="FACTURAT"> <h1></h1></div>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-6" align="center">
                            <label for="">EMPRESA</label>
                            <input type="text" class="form-control" id="EmpresaPagadoraID" name="EmpresaPagadoraID">
                            <hr>
                            <div id="EmpresaPagadora"> <h1></h1></div>
                        </div>


                        <div class="col-md-6" align="center">

                            <label for="">PROVEEDOR</label>
                            <input type="text" class="form-control" id="PROVEEDORID" name="PROVEEDORID">
                            <hr>
                            <div id="PROVEEDOR"> <h1></h1></div>
                        </div>


                        <div class="col-md-12" align="center">
                            <label for="">MONTO A PAGAR </label>
                            <input type="text" class="form-control" id="ImporteXPagar" name="ImporteXPagar">
                            <hr>
                            <div id="TotalImporteXPagar"> <h1>$ 0.00</h1></div>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">Forma del pago: </label>
                            <select class="form-control" id="Forma" name="Forma"  required>
                                <option value="">Selecciona</option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Deposito">Depósito</option>
                                <option value="Transferencia">Transferencia</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Referencia de pago </label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="ReferenciaDePago" id="ReferenciaDePago" placeholder="12134785" >
                        </div>
                        <div class="col-md-4">
                            <label for="">Cuenta de donde saldrá el ingreso para el pago </label>
                            <select class="form-control" id="IDCuentaFuente" name="IDCuentaFuente" >
                                <option value="0">Selecciona</option>
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">
                            <label for="">Fecha en que se debe realizar el pago</label>
                            <input class="form-control" type="text" name="FechaPago" id="FechaPago"  value=""  data-provide="datepicker"  data-date-format="dd/mm/yyyy"  placeholder="XX/XX/XXXX">
                        </div>
                        <div class="col-md-3">
                            <label for="">Fecha de realización del pago </label>
                            <input  value="" class="form-control" type="text" name="FechaRPago" id="FechaRPago" data-provide="datepicker"  data-date-format="dd/mm/yyyy" placeholder="XX/XX/XXXX">
                        </div>
                        <div class="col-md-3">
                            <label for="">Tipo de comprobante de pago</label>
                            <select class="form-control" id="Comprobante" name="Comprobante"  required>
                                <option value="">Selecciona</option>
                                <option value="Factura">Factura</option>
                                <option value="Recibo">Recibo</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">Nombre de quien emite la orden de pago </label>
                            <select class="form-control" id="Emisor" name="Emisor">
                                <option value="">Selecciona</option>
                            </select>
                        </div>
                        <div id="mdlMessagesXPago" class="col-md-12">

                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button type="button" class="btn btn-default btn-lg fa-lg" id="btnGuardar" name="btnGuardar"><span class="fa fa-check fa-3x success-icon"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!----End Modals----->

<script>
    var doc = "TramiteFactura";
    var call;
    var target_messages = "bMessages";
    var modal_messages = "mdlMessages";
    var json;
    /*
     * DOCUMENT
     */
    var btnNuevo = $("#btnNuevo");
    var mdlPagoFactura = $("#mdlPagoFactura");
    var btnNC = $("#btnNC");
    var mdlNotaDeCredito = $("#mdlNotaDeCredito");
    var RDocumentoImgD = mdlNotaDeCredito.find("#RDocumentoImgD");
    var RDocumentoFileD = mdlNotaDeCredito.find("#RDocumentoFileD");
    var RDocumentoDisplayD = mdlNotaDeCredito.find("#RDocumentoDisplayD");
    var MontoFactura = mdlNotaDeCredito.find("#MontoFactura");
    var MontoAplicado = mdlNotaDeCredito.find("#MontoAplicado");
    var MontoFacturaRestante = mdlNotaDeCredito.find("#MontoFacturaRestante");
    var btnSaveNC = mdlNotaDeCredito.find("#btnSave");
    var master_url = base_url + 'index.php/ctrlTramiteFactura/';
    var btnNotasDeCredito = $("#btnNotasDeCredito");
    var btnCanceladas = $("#btnCanceladas");
    var mdlNotaDeCreditoV = $("#mdlNotaDeCreditoV");

    var btnPagarFactura = $("#btnPagarFactura");
    var mdlAvanceRapido = $("#mdlAvanceRapido");
    var btnGuardarPagoRapido = mdlAvanceRapido.find("#btnGuardar");

    var btnReCargarTramiteFactura = $("#btnReCargarTramiteFactura");
    var btnFacturaAGasto = $("#btnFacturaAGasto");

    $(document).ready(function() {

        mdlNuevo.find("#Actividad").change(function() {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            console.log($(this).val());
            $.ajax({
                url: master_url + 'getModeloNegocioXProyectoID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlNuevo.find("#Actividad").val()
                }
            }).done(function(data, x, jq) {
                var dtm = data[0];
                console.log(dtm);
                if (dtm.Clave !== undefined && dtm.Clave !== null) {
                    mdlNuevo.find("#ModeloNegocio").select2("val", dtm.Clave);
                    mdlNuevo.find("#Empresa").select2("val", dtm.EMPRESA);

                } else {
                    mdlNuevo.find("#ModeloNegocio").select2("val", "");
                    mdlNuevo.find("#Empresa").select2("val", "");
                }
                console.log(data);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        var btnSaveRevision = mdlRevision.find("#btnSave");
        var mdlAutorizacion = $("#mdlAutorizacion");
        var btnSaveAutorizacion = mdlAutorizacion.find("#btnSave");

        getEmpresas();
        getInformacionAdicional();
        getActividades();
        getProveedores();
        getProyectos();
        getCuentas();

        btnFacturaAGasto.click(function() {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getRecordsByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    var dtm = data[0];
                    console.log(dtm);
                    if (dtm.ESTATUS === 'REGISTRADA') {
                        $.ajax({
                            url: master_url + 'onFacturaAGasto',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: temp
                            }
                        }).done(function(data, x, jq) {
                            btnReCargarTramiteFactura.trigger('click');
                            onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'SE HA CONVERTIDO LA FACTURA EN UN GASTO', 'danger');
                        }).fail(function(x, y, z) {
                            console.log(x, y, z);
                            console.log(x.responseText);
                        }).always(function() {
                            HoldOn.close();
                        });
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'SOLO SE PUEDE CONVERTIR EN GASTO UNA FACTURA REGISTRADA', 'danger');
                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                    console.log(x.responseText);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnCancelarPagada.click(function() {

            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onCancelarPagada',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    btnPagadas.trigger('click');
                    onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'SE HA CANCELADO LA FACTURA PAGADA', 'danger');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                    console.log(x.responseText);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        /**/
        btnGuardarPagoRapido.click(function() {
            var frm = new FormData(mdlAvanceRapido.find("form")[0]);

            HoldOn.open({
                theme: 'sk-bounce',
                message: 'GUARDANDO...'
            });
            $.ajax({
                url: master_url + 'onPagoRapido',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                mdlAvanceRapido.modal('hide');
                onNotify('<span class="fa fa-check fa-3x"></span>', 'FACTURA PAGADA', 'success');

            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnPagarFactura.click(function() {

            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getAvanceRapidoXFacturaID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data);
                    var dtm = data[0];
                    if (dtm.ESTATUS === 'AUTORIZADA') {
                        mdlAvanceRapido.find("#EmpresaPagadoraID").val(dtm.EMPRESAID).addClass("hide");
                        mdlAvanceRapido.find("#EmpresaPagadora").html('<h1 class="font75">' + dtm.EMPRESA + '</h1>');
                        mdlAvanceRapido.find("#PROVEEDORID").val(dtm.PROVEEDORID).addClass("hide");
                        mdlAvanceRapido.find("#PROVEEDOR").html('<h1 class="font75 text-danger">' + dtm.PROVEEDOR + '</h1>');
                        mdlAvanceRapido.find("#IdFactura").val(dtm.ID);
                        mdlAvanceRapido.find("#FolioFactura").val(dtm.FOLIO).addClass("hide");
                        mdlAvanceRapido.find("#FOLIO").html('<h1 class="font100 text-warning">' + dtm.FOLIO + '</h1>');
                        mdlAvanceRapido.find("#Factura").val(dtm["NUMERO DE FACTURA"]).addClass("hide");
                        mdlAvanceRapido.find("#FACTURAT").html('<h1 class="font100 purple-icon">' + dtm["NUMERO DE FACTURA"] + '</h1>');
                        mdlAvanceRapido.find("#ImporteXPagar").val(dtm.IMPORTE).addClass("hide");
                        mdlAvanceRapido.find("#TotalImporteXPagar").html('<h1 class="font100 text-success">' + dtm.FORMATO_IMPORTE + '</h1>');
                        mdlAvanceRapido.modal('show');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'LA FACTURA DEBE DE ESTAR "AUTORIZADA"', 'danger');
                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                    console.log(x.responseText);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        /**/
        btnEditarNC.click(function() {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getNotasDeCreditoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    if (dtm !== undefined) {
                        mdlNotaDeCreditoV.modal('show');
                        mdlNotaDeCreditoV.find("#ID").val(dtm.IdNotasDeCredito);
                        mdlNotaDeCreditoV.find("#PROVEEDOR_ID").val(dtm.Proveedor);
                        mdlNotaDeCreditoV.find("#EMPRESA_ID").val(dtm.NombreC);
                        mdlNotaDeCreditoV.find("#IdNotaDeCredito").val(dtm.Folio);
                        mdlNotaDeCreditoV.find("#ConceptoNC").val(dtm.Concepto);
                        mdlNotaDeCreditoV.find("#MontoAplicado").val(dtm.MontoNC);
                        mdlNotaDeCreditoV.find("#NumeroFactura").val(dtm.NumeroFactura);
                        mdlNotaDeCreditoV.find("#FolioFactura").val(dtm["FOLIO FACTURA"]);
                        mdlNotaDeCreditoV.find("#ObservacionesNC").val(dtm.Observaciones);

                        if (dtm.rDocumento !== null && dtm.rDocumento !== undefined && dtm.rDocumento !== '') {
                            var ext = getExt(dtm.rDocumento);
                            console.log(ext);
                            if (ext === "gif" || ext === "jpg" || ext === "png") {
                                mdlNotaDeCreditoV.find("#frtArchivo").html("<hr><img id='trtImagen' src='" + dtm.rDocumento + "' class ='img-responsive'/>");
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                mdlNotaDeCreditoV.find("#frtArchivo").html('<hr> <embed src="' + dtm.rDocumento + '" type="application/pdf" width="90%" height="800px"' +
                                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            }
                            if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                mdlNotaDeCreditoV.find("#frtArchivo").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                                mdlNotaDeCreditoV.find("#fileuploadtf").removeClass("hide");
                            }
                        } else {
                            mdlNotaDeCreditoV.find("#frtArchivo").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                            mdlNotaDeCreditoV.find("#fileuploadtf").removeClass("hide");

                        }

                    } else {
                        onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'OCURRIO UN PROBLEMA MIENTRAS SE OBTENIAN LOS DATOS, COMUNIQUESE CON EL ADMINISTRADOR DEL SISTEMA.', 'danger');
                    }

                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        mdlNotaDeCreditoV.on('hidden.bs.modal', function() {
            mdlNotaDeCreditoV.find("#RDocumentoDisplayD").html('');
            mdlNotaDeCreditoV.find("#RDocumentoImgD").addClass("hide");

        });

        btnCanceladas.click(function() {

            btnCancelarPagada.addClass("hide");
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            temp = 0;
            $.ajax({
                url: master_url + 'getRecordsCancelados',
                type: "POST",
                dataType: "JSON"
            }).done(function(data) {
                var tblName = "tblFacturasCanceladas";
                if (data.length > 0) {
                    $("#rTramiteFactura").html(getTable('tblFacturasCanceladas', data));
                    $('#tblFacturasCanceladas tfoot th').each(function() {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></div>');
                    });
                    var tblSelected = $('#tblFacturasCanceladas').DataTable(tableOptions);
                    var detailRows = [];
                    /*CLICK SELECTED ROW*/
                    $('#tblFacturasCanceladas tbody').on('click', 'tr', function() {

                        $("#tblFacturasCanceladas").find("tr").removeClass("success");
                        $("#tblFacturasCanceladas").find("tr").removeClass("warning");

                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var dtm = tblSelected.row(this).data();

                        temp = parseInt($(dtm[0])[0].innerText);
                    });
                    /*DB CLICK FOR EDIT*/
                    $('#tblFacturasCanceladas tbody').on('dblclick', 'tr', function() {
                        $("#tblFacturasCanceladas").find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                        console.log('IDFACT V1: ' + $(dtm[0]));
                        console.log($(dtm[0])[0].innerText);
                        var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                        temp = parseInt($(dtm[0])[0].innerText);
                        console.log('IDFACT: ' + temp);
                    });
                    /* Apply the search*/
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
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnPagadas.click(function() {

            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            temp = 0;
            $.ajax({
                url: master_url + 'getRecordsPagados',
                type: "POST",
                dataType: "JSON"
            }).done(function(data) {
                btnCancelarPagada.removeClass("hide");
                var tblName = "tblFacturasPagadas";
                if (data.length > 0) {
                    $("#rTramiteFactura").html(getTable('tblFacturasPagadas', data));
                    $('#tblFacturasPagadas tfoot th').each(function() {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });
                    var tblSelected = $('#tblFacturasPagadas').DataTable(tableOptions);
                    var detailRows = [];
                    /*CLICK SELECTED ROW*/
                    $('#tblFacturasPagadas tbody').on('click', 'tr', function() {

                        $("#tblFacturasPagadas").find("tr").removeClass("success");
                        $("#tblFacturasPagadas").find("tr").removeClass("warning");

                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var dtm = tblSelected.row(this).data();

                        temp = parseInt($(dtm[0])[0].innerText);
                    });
                    /*DB CLICK FOR EDIT*/
                    $('#tblFacturasPagadas tbody').on('dblclick', 'tr', function() {
                        $("#tblFacturasPagadas").find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                        console.log('IDFACT V1: ' + $(dtm[0]));
                        console.log($(dtm[0])[0].innerText);
                        var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                        temp = parseInt($(dtm[0])[0].innerText);
                        console.log('IDFACT: ' + temp);
                    });
                    /* Apply the search*/
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
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnNotasDeCredito.click(function() {
            btnCancelarPagada.addClass("hide");
            getNotasDeCreditoXFacturas();
        });

        btnSaveNC.click(function() {
            var frm = new FormData($('#fNotaDeCredito')[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: master_url + 'onNotaDeCreditoX',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                mdlNotaDeCredito.modal('hide');
                getNotasDeCreditoXFacturas();
                getInformacionAdicional();
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnSaveRevision.click(function() {

            console.log('revisando...');
            dataf = new FormData($("#fRevision")[0]);
            var detalleNC = [];
            var rows_in = tblNotasDeCreditoXFacturaR.find("tbody > tr").length;
            var tnc = 0.0;
            if (rows_in > 0) {
                tblNotasDeCreditoXFacturaR.find("tbody > tr").each(function(k, v) {
                    $(this).each(function(k, v) {
                        var nc = {
                            FOLIO: $(v).find(".Folio")[0].innerText,
                            CONCEPTO: $(v).find(".ConceptoT")[0].innerText,
                            MONTO: $(v).find(".ImporteNC")[0].innerText
                        };
                        detalleNC.push(nc);
                        tnc += parseFloat($(v).find(".ImporteNC")[0].innerText);
                    });
                });
            }

            dataf.append('NOTASDECREDITO', JSON.stringify(detalleNC));
            dataf.append('TOTALNOTASDECREDITO', parseFloat(tnc).toFixed(3));
            console.log('TOTAL DE NOTAS DE CREDITO: ' + tnc);
            $.ajax({
                type: "POST",
                url: master_url + 'onRevision',
                cache: false,
                contentType: false,
                processData: false,
                data: dataf
            }).done(function(data, x, jq) {
                console.log(data);
                $("#btnReCargarTramiteFactura").trigger('click');
                getInformacionAdicional();
                mdlRevision.modal('hide');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log('ACTION COMPLETADA');
            });
        });

        btnSaveAutorizacion.click(function() {
            var frm = mdlAutorizacion.find("#fAutorizacion").serialize();
            $.ajax({
                type: "POST",
                url: master_url + 'onAutorizacion',
                data: frm
            }).done(function(data, x, jq) {
                $("#btnReCargarTramiteFactura").trigger('click');
                getInformacionAdicional();
                mdlAutorizacion.modal('hide');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log('ACTION COMPLETADA');
            });
        });

        mdlAutorizacion.on('show.bs.modal', function() {

            $.ajax({
                url: master_url + 'getRecordsHistoryByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                var tbl = mdlAutorizacion.find("#tblObservacionesRevisadas");
                tbl.html(getTable('tblOR', data));
                /*        $("#tblObservacionesRevisadas").html(data); */
                var tblSelected = $("#tblOR").DataTable(tableOptions);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                getInformacionAdicional();
                console.log("CONSULTA DE HISTORIAL PROCESADA");
            });
        });

        RDocumentoImgD.click(function() {
            RDocumentoFileD.trigger('click');
        });

        RDocumentoFileD.change(function() {
            var imageType = /image.*/;
            if (RDocumentoFileD[0].files[0] !== undefined && RDocumentoFileD[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    RDocumentoDisplayD.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileD[0].files[0]);
            } else {
                if (RDocumentoFileD[0].files[0] !== undefined && RDocumentoFileD[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function(e) {
                        RDocumentoDisplayD.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileD[0].files[0]);
                } else {
                    RDocumentoDisplayD.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        mdlPagoFactura.find("#btnNotaDeCredito").click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: base_url + 'index.php/ctrl' + doc + "/onNotaDeCredito",
                type: "POST",
                data: {
                    Folio: mdlPagoFactura.find("#IdNotaDeCredito").val(),
                    Concepto: mdlPagoFactura.find("#ConceptoNC").val(),
                    MontoNC: mdlPagoFactura.find("#MontoTotalNC").val(),
                    ObservacionesNC: mdlPagoFactura.find("#ObservacionesNC").val(),
                    IdFactura: mdlPagoFactura.find("#IdTramiteFacturaADMPPDF").val(),
                    MontoF: mdlPagoFactura.find("#MontoAplicado").val(),
                    MontoRF: mdlPagoFactura.find("#MontoFacturaRestante").val()
                }
            }).done(function(data) {
                if (parseInt(data) > 0) {
                    onGetRecords("tblTramiteFactura", master_url + "onLoad", 1, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS");
                    mdlPagoFactura.modal('hide');
                } else {
                    mdlPagoFactura.find("#msgADMPPDF").html('<div class="alert alert-dismissible alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>ERROR! NO SE HA PODIDO PROCESAR LA SOLICITUD. CONSULTE LA CONSOLA DE ERRORES.</div>');
                    console.log(data);
                }
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                getInformacionAdicional();
                HoldOn.close();
            });
        });

        btnNC.click(function() {
            if (temp !== undefined && temp !== null && temp !== "" && parseInt(temp) > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO... POR FAVOR ESPERE"
                });
                $.ajax({
                    url: master_url + 'getFacturaByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    mdlNotaDeCredito.find('#ID').val(temp);
                    mdlNotaDeCredito.find('#MontoFacturaRestante').val(dtm.SALDO);
                    mdlNotaDeCredito.find('#MontoFactura').val(dtm.SALDO);
                    mdlNotaDeCredito.find('#EMPRESA_ID').val(dtm.EMPRESA);
                    mdlNotaDeCredito.find('#PROVEEDOR_ID').val(dtm.PROVEEDOR);
                    mdlNotaDeCredito.find('#ImportePagado').val(dtm["IMPORTE PAGADO"]);
                    mdlNotaDeCredito.find('#Importe').val(dtm.IMPORTE);
                    mdlNotaDeCredito.modal('show');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    getInformacionAdicional();
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        MontoAplicado.keyup(function() {
            console.log('MONTO APLICADO: ' + MontoAplicado.val() + ', MONTO TOTAL NC: ' + MontoFactura.val());
            if (parseFloat(MontoAplicado.val()) > 0 && parseFloat(MontoAplicado.val()) <= parseFloat(MontoFactura.val())) {
                var rt = parseFloat(MontoFactura.val()) - parseFloat(MontoAplicado.val());
                if (parseFloat(rt) >= 0) {
                    MontoFacturaRestante.val(rt);
                } else {
                    MontoFacturaRestante.val(MontoFactura.val());
                }
            } else {
                MontoFacturaRestante.val(parseFloat(MontoFactura.val()));
            }
            if (parseFloat(MontoAplicado.val()) > 0 && parseFloat(MontoAplicado.val()) > parseFloat(MontoFactura.val())) {
                MontoAplicado.val(0);
            }
        });


        /*
         * NUEVO
         */
        onGetRecords("tblTramiteFactura", master_url + "onLoad", 1, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS");

        $('#mdlADFPEDFDP').on('show.bs.modal', function(e) {
            $.ajax({
                url: master_url + 'getRecordsHistoryByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                var tbl = $("#tblObservacionesRevisadas");
                tbl.html(getTable('tblOR', data));

                var tblSelected = $("#tblOR").DataTable(tableOptions);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log("CONSULTA DE HISTORIAL PROCESADA");
            });
        });
        $('#mdlADMPPDF').on('show.bs.modal', function(e) {
            $.ajax({
                url: master_url + 'getRecordsHistoryByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                var tbl = $("#rObservaciones");
                tbl.html(getTable('tblOA', data));

                var tblSelected = $("#tblOA").DataTable(tableOptions);
                $("#tblOA tbody > tr").each(function(k, v) {
                    var row_value = $(this).find("td");
                    var status = row_value[4].innerText;
                    if (status === 'NO AUTORIZADA') {
                        row_value[4].innerHTML = '<div class="text-center"><span class="label label-danger">' + status + '</span></div>';
                    }
                    if (status === 'AUTORIZADA') {
                        row_value[4].innerHTML = '<div class="text-center"><span class="label label-emerald">' + status + '</span></div>';
                    }
                    if (status === 'REVISION') {
                        row_value[4].innerHTML = '<div class="text-center"><span class="label label-blue-light">' + status + '</span></div>';
                    }

                });
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log("CONSULTA DE HISTORIAL PROCESADA");
            });
        });

        /*ABRE EL MODAL DE NUEVO REGISTRO*/
        btnNuevo.on('click', function() {
            $("#fTramiteFactura")[0].reset();
            $("#nIdSesion").parent("div").addClass("hide");

            mdlNuevo.find("#btnRegistrarTramiteFactura").removeClass("hide");
            mdlNuevo.find("#btnActualizarTramiteFactura").addClass("hide");

            $("#IdSesion").parent("div").removeClass("hide");
            $("#fObservaciones").addClass("hide");
        });

        $("#btnRegistrarTramiteFactura").on('click', function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: master_url + 'onBeforeRegisterCheckFactura',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlNuevo.find("#NumeroFactura").val(),
                    PROVEEDOR: mdlNuevo.find("#Proveedor").val()
                }
            }).done(function(data, x, jq) {
                if (parseInt(data) === 1) {
                    console.log('SE ENCONTRARON FACTURAS');
                    $("#msgfacturas").html('<div class="alert alert-dismissible alert-danger">  <button type="button" class="close" data-dismiss="alert"><span class="fa fa-times fa-3x"></button><H3>ERROR! <br>INTENTO DE DUPLICIDAD DE DATOS. <br>ESTA FACTURA YA HA SIDO REGISTRADA.</H3></div>');
                } else {
                    /*FUNCION ESPECIAL PARA SUBIR ARCHIVOS POR MEDIO DE AJAX*/

                    console.log(mdlNuevo.find("#Empresa").val());
                    console.log(mdlNuevo.find("#Actividad").val());
                    console.log(mdlNuevo.find('#ModeloNegocio').val());
                    console.log(mdlNuevo.find('#Proveedor').val());

                    dataf = new FormData(mdlNuevo.find('#fTramiteFactura')[0]);
                    dataf.append('Empresa', mdlNuevo.find('#Empresa').val());
                    dataf.append('Actividad', mdlNuevo.find('#Actividad').val());
                    dataf.append('ModeloNegocio', mdlNuevo.find('#ModeloNegocio').val());
                    dataf.append('Proveedor', mdlNuevo.find('#Proveedor').val());
                    dataf.append('PAGADA', (mdlNuevo.find('#fTramiteFactura').find('#Pagada')[0].checked) ? 1 : 0);
                    var detalleNC = [];
                    var rows_in = tblNotasDeCreditoXFactura.find("tbody > tr").length;
                    var tnc = 0.0;
                    if (rows_in > 0) {
                        tblNotasDeCreditoXFactura.find("tbody > tr").each(function(k, v) {
                            $(this).each(function(k, v) {
                                var nc = {
                                    FOLIO: $(v).find(".Folio")[0].innerText,
                                    CONCEPTO: $(v).find(".ConceptoT")[0].innerText,
                                    MONTO: $(v).find(".ImporteNC")[0].innerText
                                };
                                detalleNC.push(nc);
                                tnc += parseFloat($(v).find(".ImporteNC")[0].innerText);
                            });
                        });
                    }

                    dataf.append('EmpresaT', mdlNuevo.find("#Empresa option:selected").text());
                    dataf.append('ActividadT', mdlNuevo.find("#Actividad option:selected").text());
                    dataf.append('ModeloNegocioT', mdlNuevo.find("#ModeloNegocio option:selected").text());
                    dataf.append('ProveedorT', mdlNuevo.find("#Proveedor option:selected").text());
                    dataf.append('ReceptorT', mdlNuevo.find("#Receptor option:selected").text());

                    dataf.append('NOTASDECREDITO', JSON.stringify(detalleNC));
                    dataf.append('TOTALNOTASDECREDITO', (tnc > 0) ? tnc : 0);

                    $.ajax({
                        url: master_url + 'onAdd',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: dataf
                    }).done(function(data) {
                        console.log(data);
                        console.log('SE HA SUBIDO EL ARCHIVO');
                        $("#btnReCargarTramiteFactura").trigger('click');
                        mdlNuevo.find("#frtImagen").html("");
                        mdlNuevo.find("#fTramiteFactura")[0].reset();
                        mdlNuevo.modal('hide');
                        mdlNuevo.find("#Observacion").removeAttr("readonly");
                        mdlNuevo.find("select").select2("val", "");
                        mdlNuevo.find("#btnRegistrarTramiteFactura").removeClass("hide");
                        mdlNuevo.find("#btnActualizarTramiteFactura").addClass("hide");
                    }).fail(function(x, y, z) {
                        console.log(x, y, z);
                        console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                        console.log(arguments);
                    });
                }
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                getInformacionAdicional();
                HoldOn.close();
                console.log('COMPROBACION COMPLETADA');
            });
        });
        /*
         * OBTENER
         */
        $("#btnReCargarTramiteFactura").on('click', function() {

            btnCancelarPagada.addClass("hide");
            onGetRecords("tbl" + doc, base_url + "index.php/ctrl" + doc + "/onLoad", 1, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS");
        });
        $("#btnEditar" + doc).on('click', function() {
            onBeforeSend(base_url + "index.php/ctrl" + doc + "/onLoad", 5, "mdlNuevo", "mdlMessages", "msg" + doc, "NO HA ELEGIDO NINGUN REGISTRO.", ["btnActualizar" + doc, "btnRegistrar" + doc]);
            $("#btnActualizarTramiteFactura").removeClass("hide");
            $("#btnRegistrarTramiteFactura").addClass("hide");
        });
        $("#btnActualizarTramiteFactura").on('click', function() {
            dataf = new FormData($('#fTramiteFactura')[0]);
            console.log(dataf);
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: master_url + 'onBeforeUpdate',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: dataf
            }).done(function(data) {
                console.log(data);
                console.log('SE HA ACTUALIZADO EL ARCHIVO');
                $('#mdlNuevo').modal('hide');
                $("#btnReCargarTramiteFactura").trigger('click');
            }).fail(function() {
                console.log('ERROR NO SE HA ACTUALIZADO EL ARCHIVO');
                console.log(arguments);
            }).always(function() {
                getInformacionAdicional();
                HoldOn.close();
            });
        });

        /*
         * ELIMINAR
         */
        $('#btnEliminarTramiteFactura').on('click', function() {
            onDeleteVYR();
        });

        /*
         * VALIDATE FORM
         */

        $("#mdlADMPPDF").on('hidden.bs.modal', function() {
            $("#fObservacionADMPPDF")[0].reset();
            $("#btnGuardarADMPPDF").addClass("disabled");
            $("select").select2("val", "");
        });
        $("#rDeterminaImporte").on('change', function() {
            var mxp = $("#MontoXPagarADMPPDF");
            switch (parseInt($("#rDeterminaImporte").val())) {
                case 1:
                    mxp.val($("#ImporteADMPPDF").val()).attr("readonly", true);
                    onKeyUpImporteMenosMonto();
                    break;
                case 2:
                    mxp.removeAttr("readonly").val('').focus();
                    onKeyUpImporteMenosMonto();
                    break;
                default:
                    mxp.removeAttr("readonly").val('').focus();
                    break;
            }
        });

        $("#FormaDePago").on('change', function() {
            if ($("#rDeterminaImporte").val() !== '' && $("#FormaDePago").val() !== '' && $("#MontoXPagarADMPPDF").val() !== '') {
                $("#btnGuardarADMPPDF").removeClass("disabled");
            } else {
                $("#btnGuardarADMPPDF").addClass("disabled");
            }
        });
        /*
         * REPORTS
         */

        $("#btnReporteAcumuladoGeneral").click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: master_url + 'getSaldosGenerales',
                type: "POST"
            }).done(function(data, x, jq) {
                console.log(data);
                window.open(data, '_blank');


            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log('OPERACION COMPLETADA: REPORTE GENERAL ACUMULADO');
                HoldOn.close();
                $("#btnReporteAcumuladoGeneral").find("span").addClass("fa-file-text");
            });
        });
        $("#btnAcumuladoPorProveedor").click(function() {
            if ($("#cmbProveedorFactura").val() !== undefined && $("#cmbProveedorFactura").val() !== '' || $("#cmbEmpresaBusqueda").val() !== undefined && $("#cmbEmpresaBusqueda").val() !== '') {

                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO... POR FAVOR ESPERE"
                });
                $.ajax({
                    url: master_url + 'getSaldosGeneralesByEmpresaAndProveedor',
                    type: "POST",
                    data: {
                        IDPRO: ($("#cmbProveedorFactura").val() !== undefined && $("#cmbProveedorFactura").val() !== '') ? $("#cmbProveedorFactura").val() : '',
                        IDEMPRESA: ($("#cmbEmpresaBusqueda").val() !== undefined && $("#cmbEmpresaBusqueda").val() !== '') ? $("#cmbEmpresaBusqueda").val() : '',
                        INICIO: $("#FechaInicioH").val(),
                        TERMINO: $("#FechaTerminoH").val()}
                }).done(function(data, x, jq) {
                    console.log(data);

                    window.open(data, '_blank');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    console.log('OPERACION COMPLETADA: ACUMULADO POR EMPRESA O PROVEEDOR ');
                    HoldOn.close();
                });
            } else {
                $("#cmbProveedorFactura").parent("div").find("label").effect("shake");
                $("#cmbEmpresaBusqueda").parent("div").find("label").effect("shake");
                $.notify({
                    title: '<span class="fa fa-exclamation fa-3x"></span>',
                    message: 'DEBE DE SELECCIONAR UNA EMPRESA O PROVEEDOR'
                }, {
                    type: 'danger'
                }, {
                    animate: {
                        enter: 'animated zoomInUpIn',
                        exit: 'animated zoomInUpOut'
                    }
                });
            }
        });

        $("#btnReporteTramiteFactura").on('click', function(e) {
            onCreateReport("mdlMessages", "bMessages", "NO HA ELEGIDO NINGUN REGISTRO");
        });

        $("#btnReportes").on('click', function(e) {
            onGetRecordReport("tblREVFTP", base_url + "index.php/ctrl" + doc + "/onLoad", 7, "rREVFTP", "rREVFTP", "NO SE ENCONTRARON REGISTROS");
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
            onGetRecordReport("tblREPFTP", base_url + "index.php/ctrl" + doc + "/onLoad", 7, "rREPFTP", "rREPFTP", "NO SE ENCONTRARON REGISTROS");
        });

        $("#btnAvance").on('click', function() {

            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {
                call = $.Callbacks();
                call.add(onActionJSON(base_url + "index.php/ctrl" + doc + "/onLoad", temp));
                call.fire();
            } else {
                $("#" + target_messages).html('<fieldset> ' +
                        '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-3x"></span></h1></div><div class="col-md-6"><H1>NO HA SELECCIONADO NINGUN REGISTRO   </H1></div>' +
                        '</fieldset> ');
                $("#" + modal_messages).modal('toggle');
            }
            HoldOn.close();
        });
        $("#fObservacionRDFPTDP").submit(function(e) {
            e.preventDefault();
            $("#btnGuardarObservacionRDFPTDP").addClass("hide");
            $("#btnGuardarObservacionRDFPTDPProgress").removeClass("hide");
            if (parseInt($("#ObservacionesYN").val()) === 2) {
                onAction("fObservacionRDFPTDP", base_url + "index.php/ctrl" + doc + "/onLoad", "&indice=" + 8);
                $("#mdlRFPTDP").modal('hide');
                onNotify('<span class="fa fa-cog fa-3x fa-spin"></span>', 'SE HA AVANZADO EL REGISTRO A REVISIÓN', 'success');
            } else {
                if ($("#TituloObservacion").val().length > 5) {
                    onAction("fObservacionRDFPTDP", base_url + "index.php/ctrl" + doc + "/onLoad", "&indice=" + 8);
                    $("#mdlRFPTDP").modal('hide');
                    onNotify('<span class="fa fa-cog fa-3x fa-spin"></span>', 'SE HA AVANZADO EL REGISTRO A REVISIÓN', 'success');
                } else {
                    $("#msgRDFPTDP").html(
                            '<div class="alert alert-dismissible alert-danger">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1>EL TITULO Y LA OBSERVACION DEBEN DE TENER MÁS DE 5 CARACTERES.</h1></div>');
                }
            }
        });

        /*METODO QUE GUARDA EL AVANCE DE LA FACTURA A PAGO PARCIAL O A ELABORACION DE FORMA DE PAGO*/         mdlPagoFactura.find("#btnSave").click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            var formdata = $("#fObservacionADMPPDF").serialize();
            $.ajax({
                type: "POST",
                url: master_url + 'onPagar',
                data: formdata
            }).done(function(data, x, jq) {
                console.log(data);
                $("#btnReCargarTramiteFactura").trigger('click');
                mdlPagoFactura.modal("hide");
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                console.log('ACTION COMPLETADA');
                HoldOn.close();
            });
        });


        $("#ObservacionesYN").on('change', function(e) {
            if (parseInt($("#ObservacionesYN").val()) === 1) {
                $("#divObservaciones").removeClass("hide");
            } else {
                $("#divObservaciones").addClass("hide");
            }
        });
        $("#ObservacionesYNAU").on('change', function(e) {
            if (parseInt($("#ObservacionesYNAU").val()) === 1) {
                $("#divObservacionesAU").removeClass("hide");
            } else {
                $("#divObservacionesAU").addClass("hide");
            }
        });

        $("#btnBusquedaEspecifica").on('click', function(e) {
            $("#content-busqueda").toggleClass('hide');
        });

        $("#btnReporteBusqueda").click(function(e) {
            onSearchByBusinessAndSuppliers("tbl" + doc, base_url + "index.php/ctrl" + doc + "/onCreateByBussines", 1, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS");
        });

        $("#btnNotaDeCreditoS").click(function() {
            $("#btnNotaDeCredito").addClass("hide");
            $("#btnNotaDeCreditoProgress").removeClass("hide");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + "/onLoad",
                type: "POST",
                data: {
                    indice: 17,
                    Folio: $("#IdNotaDeCredito").val(),
                    Concepto: $("#ConceptoNC").val(),
                    MontoNC: $("#MontoTotalNC").val(),
                    ObservacionesNC: $("#ObservacionesNC").val(),
                    IdFactura: $("#IdTramiteFacturaADMPPDF").val(),
                    MontoF: $("#MontoAplicado").val(),
                    MontoRF: $("#MontoFacturaRestante").val()
                }
            }).done(function(data) {
                if (parseInt(data) > 0) {
                    onGetRecords("tblTramiteFactura", master_url + "onLoad", 1, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS");
                    $("#mdlADMPPDF").modal('toggle');
                } else {
                    $("#msgADMPPDF").html('<div class="alert alert-dismissible alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>ERROR! NO SE HA PODIDO PROCESAR LA SOLICITUD. CONSULTE LA CONSOLA DE ERRORES.</div>');
                    console.log(data);
                }
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                $("#btnNotaDeCreditoProgress").addClass("hide");
                $("#btnNotaDeCredito").removeClass("hide");
            });
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var target = $(e.target).attr("class"); /* activated tab*/
            console.log(target);
            if (target === 'nc') {
                $("#btnGuardarADMPPDF").addClass("hide");
                $("#btnNotaDeCredito").removeClass("hide");
            } else {
                $("#btnGuardarADMPPDF").removeClass("hide");
                $("#btnNotaDeCredito").addClass("hide");
            }
        });

        $("#btnReportesFacturas").click(function(e) {
            $("#btnReportesFacturas").find("span").removeClass("fa-eye").addClass("fa-cog fa-spin");
            $("#btnReportesFacturas").addClass("disabled");
            console.log($("#cmbEmpresaBusqueda").val());
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onLoad',
                type: "POST",
                data: {
                    indice: 18,
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnReportesFacturas").find("span").removeClass("fa-cog fa-spin").addClass("fa-eye");
                $("#btnReportesFacturas").removeClass("disabled");
            });
        });

        $("#btnReportesFacturasOBRA").click(function(e) {
            $("#btnReportesFacturasOBRA").find("span").removeClass("fa-eye").addClass("fa-cog fa-spin");
            $("#btnReportesFacturasOBRA").addClass("disabled");
            console.log($("#cmbEmpresaBusqueda").val());
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onCreatePDFByIDOBRA',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnReportesFacturasOBRA").find("span").removeClass("fa-cog fa-spin").addClass("fa-eye");
                $("#btnReportesFacturasOBRA").removeClass("disabled");
            });
        });

        $("#btnReportesFacturasMATERIAL").click(function(e) {
            $("#btnReportesFacturasMATERIAL").find("span").removeClass("fa-eye").addClass("fa-cog fa-spin");
            $("#btnReportesFacturasMATERIAL").addClass("disabled");
            console.log($("#cmbEmpresaBusqueda").val());
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onCreatePDFByIDOBRAMATERIAL',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnReportesFacturasMATERIAL").find("span").removeClass("fa-cog fa-spin").addClass("fa-eye");
                $("#btnReportesFacturasMATERIAL").removeClass("disabled");
            });
        });

        $("#btnReportesFacturasSinAvanzar").click(function(e) {
            console.log($("#cmbEmpresaBusqueda").val());
            $("#btnReportesFacturasSinAvanzar").find("span").removeClass("fa-eye-slash").addClass("fa-cog fa-spin");
            $("#btnReportesFacturasSinAvanzar").addClass("disabled");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onLoad',
                type: "POST",
                data: {
                    indice: 22,
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnReportesFacturasSinAvanzar").find("span").removeClass("fa-cog fa-spin").addClass("fa-eye-slash");
                $("#btnReportesFacturasSinAvanzar").removeClass("disabled");
            });
        });

        $("#btnReportesFacturasSinAvanzarOBRA").click(function(e) {
            console.log($("#cmbEmpresaBusqueda").val());
            $("#btnReportesFacturasSinAvanzarOBRA").find("span").removeClass("fa-eye-slash").addClass("fa-cog fa-spin");
            $("#btnReportesFacturasSinAvanzarOBRA").addClass("disabled");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onCreatePDFByIDSAOBRA',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnReportesFacturasSinAvanzarOBRA").find("span").removeClass("fa-cog fa-spin").addClass("fa-eye-slash");
                $("#btnReportesFacturasSinAvanzarOBRA").removeClass("disabled");
            });
        });

        $("#btnReportesFacturasSinAvanzarMATERIAL").click(function(e) {
            console.log($("#cmbEmpresaBusqueda").val());
            $("#btnReportesFacturasSinAvanzarMATERIAL").find("span").removeClass("fa-eye-slash").addClass("fa-cog fa-spin");
            $("#btnReportesFacturasSinAvanzarMATERIAL").addClass("disabled");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onCreatePDFByIDSAMATERIAL',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnReportesFacturasSinAvanzarMATERIAL").find("span").removeClass("fa-cog fa-spin").addClass("fa-eye-slash");
                $("#btnReportesFacturasSinAvanzarMATERIAL").removeClass("disabled");
            });
        });
        /*
         *
         * CR POR PROVEEDOR
         *
         */

        $("#btnCRIndividual").click(function(e) {
            console.log('CR POR PROVEEDOR...');
            $("#btnCRIndividual").find("span").removeClass("fa-exclamation").addClass("fa-cog fa-spin");
            $("#btnCRIndividual").addClass("disabled");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/onLoad',
                type: "POST",
                data: {
                    indice: 19,
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS CON EL PROVEEDOR SELECCIONADO.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnCRIndividual").find("span").removeClass("fa-cog fa-spin").addClass("fa-exclamation");
                $("#btnCRIndividual").removeClass("disabled");
            });
        });

        $("#btnCROBRA").click(function(e) {

            $("#btnCROBRA").find("span").removeClass("fa-building").addClass("fa-cog fa-spin");
            $("#btnCROBRA").addClass("disabled");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/getContraReciboObra',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS CON EL PROVEEDOR SELECCIONADO.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnCROBRA").find("span").removeClass("fa-cog fa-spin").addClass("fa-building");
                $("#btnCROBRA").removeClass("disabled");
            });
        });

        $("#btnCRMATERIAL").click(function(e) {

            $("#btnCRMATERIAL").find("span").removeClass("fa-puzzle-piece").addClass("fa-cog fa-spin");
            $("#btnCRMATERIAL").addClass("disabled");
            $.ajax({url: base_url + 'index.php/ctrl' + doc + '/getContraReciboMateriales',
                type: "POST",
                data: {
                    ID: $("#cmbEmpresaBusqueda").val(),
                    FECHAINICIO: $("#FechaInicioH").val(),
                    FECHATERMINO: $("#FechaTerminoH").val(),
                    IDPRO: $("#cmbProveedorFactura").val()
                }
            }).done(function(data) {
                console.log(data);
                if (parseInt(data) === 0) {
                    $("#msgReportsTF").html('LA EMPRESA NO TIENE MOVIMIENTOS CON EL PROVEEDOR SELECCIONADO.');
                } else {
                    $("#msgReportsTF").html('');
                    window.open(data, '_blank');
                }
            }).always(function() {
                $("#btnCRMATERIAL").find("span").removeClass("fa-cog fa-spin").addClass("fa-puzzle-piece");
                $("#btnCRMATERIAL").removeClass("disabled");
            });
        });
        /**
         * FIN DE CR'S
         */
        $("#btnCancelarFactura").click(function() {
            if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {
                $.ajax({
                    url: master_url + 'onCancelarFactura',
                    type: "POST",
                    data: {
                        ID: temp}
                }).done(function(data) {
                    console.log(data);
                    if (parseInt(data) === 1) {
                        onNotify('<span class="fa fa-check lime-icon fa-3x"></span>', 'FACTURA CANCELADA', 'danger');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'NO SE HA PODIDO CANCELAR LA FACTURA', 'danger');
                    }
                    btnReCargarTramiteFactura.trigger('click');
                });
                onRefreshData();
            } else {
                onNotify('<span class="fa fa-exclamation fa-3x"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });


    });
    /*
     * CHANGES IN FORM
     */
    function onLoad() {
    }

    function onSearchByBusinessAndSuppliers(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
        $("#btnReporteBusqueda").find("span").removeClass("fa-search");
        $("#btnReporteBusqueda").find("span").addClass("fa-cog fa-spin");
        $("#btnReporteBusqueda").addClass("disabled");
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-3x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#cmbEmpresaBusqueda").val(),
                IDPRO: $("#cmbProveedorFactura").val(),
                FECHAINICIO: $("#FechaInicioH").val(),
                FECHATERMINO: $("#FechaTerminoH").val()
            }
        }).done(function(data) {
            console.log(data);
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $("#" + target_result + "  tbody > tr").each(function(k, v) {
                    var row_value = $(this).find("td")[0].innerText;
                    $(this).find("td")[0].innerHTML = '<div class="text-center"><span class="label label-primary">' + row_value + '</span></div>';
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                /*CLICK SELECTED ROW*/
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    temp = parseInt($(dtm[0]).find("span")[0].innerText);
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt($(dtm[0]).find("span")[0].innerText);
                    $("#btnEditar" + doc).trigger("click");
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            $("#btnReporteBusqueda").removeClass("disabled");
            $("#btnReporteBusqueda").find("span").removeClass("fa-cog fa-spin");
            $("#btnReporteBusqueda").find("span").addClass("fa-search");
        });
    }

    function getProyectos() {
        $.ajax({
            url: master_url + "getProyectos",
            type: "POST",
            dataType: "JSON"
        }).done(function(data) {

            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {

                options += '<option value="' + data[x].ID + '">' + data[x].Proyecto + '</option>';
            }
            mdlNuevo.find("#Actividad").html(options);
            mdlNuevo.find("#Actividad").html(options);
        });
    }

    function getProveedores() {
        $.ajax({
            url: master_url + "getProveedores",
            type: "POST",
            dataType: "JSON"
        }).done(function(data) {

            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {

                options += '<option value="' + data[x].ID + '">' + data[x].Proveedor + '</option>';
            }
            $("#Proveedor").html(options);
            $("#cmbProveedorFactura").html(options);
        });
    }

    function getActividades() {
        $.ajax({
            url: master_url + "getActividades",
            type: "POST",
            dataType: "JSON"
        }).done(function(data) {

            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                console.log(data[x])
                options += '<option value="' + data[x].Clave + '">' + data[x].Actividad + '</option>';
            }
            $("#ModeloNegocio").html(options);
        }).fail(function() {
            console.log('ERROR');
            console.log(arguments);
        });
    }

    function getEmpresas() {
        $.ajax({
            url: master_url + "getEmpresas",
            type: "POST",
            dataType: "JSON"
        }).done(function(data) {
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {

                options += '<option value="' + data[x].ID + '">' + data[x].NombreC + '</option>';
            }
            $("#Empresa").html(options);
            $("#cmbEmpresaBusqueda").html(options);
        });
    }

    function getInformacionAdicional() {
        $.ajax({
            url: master_url + "getInformacionAdicional",
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            console.log(data);
            $.each(data, function(k, v) {
                console.log(v);
                switch (v.Estatus) {
                    case  "PAGADA":
                        $("#pnlFacturasPagadas").find(".huge")[0].innerText = v.TOTAL;
                        break;
                    case  "REGISTRADA":
                        $("#pnlFacturasRegistradas").find(".huge")[0].innerText = v.TOTAL;
                        break;
                    case  "REGISTRADA Y PAGADA":
                        $("#pnlFacturasGastos").find(".huge")[0].innerText = v.TOTAL;
                        break;
                    case  "AUTORIZADA":
                        $("#pnlFacturasAutorizadas").find(".huge")[0].innerText = v.TOTAL;
                        break;
                }
            });

        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            console.log('COMPLETADO');
        });
    }

    function onCreateReport(modal_messages, target_messages, content_message) {
        $(this).find("span").removeClass("fa-file-text");
        $(this).find("span").addClass("fa-cog fa-spin disabled");
        if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {
            $.ajax({url: base_url + "index.php/ctrl" + doc + "/onLoad",
                type: "POST",
                dataType: "JSON",
                data: {indice: 6,
                    ID: temp
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(errorThrown);
                    console.log(textStatus);
                }
            }).done(function(data) {
                console.log(data);
                $.ajax({url: base_url + "index.php/ctrl" + doc + "/onCreatePDF",
                    type: "POST",
                    data: {
                        DATA: JSON.stringify(data[0])
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                    }
                }).done(function(data) {
                    console.log(data);
                    window.open(data, '_blank');
                });
            });
        } else {
            setTimeout(function() {
                $(this).find("span").removeClass("fa-cog fa-spin disabled");
                $(this).find("span").addClass("fa-file-text");
            }, 2500);
            $("#" + target_messages).html('<fieldset> ' +
                    '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-3x"></span></h1></div>' +
                    '<div class="col-md-6"><H1>' + content_message + '</H1></div>' + '</fieldset> ');
            $("#" + modal_messages).modal('toggle');
        }
    }

    function onValidateData(frm, component) {
        var tf = false;
        $('#' + frm + ' input, #' + frm + ' select').each(
                function(index) {
                    var input = $(this);

                    if ($("#" + input.attr('id')).val().length > 0) {
                        $("#" + input.attr('id')).parent("div").removeClass("has-error");
                    } else {
                        $("#" + input.attr('id')).parent("div").addClass("has-error");
                    }
                }
        );
        $('#' + frm + ' input, #' + frm + ' select').each(
                function(index) {
                    var input = $(this);
                    if ($("#" + input.attr('id')).parent("div").hasClass("has-error")) {
                        tf = false;
                        if (!$("#" + component).hasClass("disabled")) {
                            $("#" + component).addClass("disabled");
                        }
                        return false;
                    } else {
                        tf = true;
                    }
                }
        );
        if (tf) {
            $("#" + component).removeClass("disabled");
        }
    }

    function onGetRecords(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
        temp = 0;

        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                indice: indicex
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function(data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function() {
                    var title = $(this).text();
                    $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                var detailRows = [];
                /*CLICK SELECTED ROW*/
                $('#' + tblName + ' tbody').on('click', 'tr', function() {

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
                    temp = parseInt($(dtm[0])[0].innerText);
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('IDFACT V1: ' + $(dtm[0]));
                    console.log($(dtm[0])[0].innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    console.log('IDFACT: ' + temp);
                    $("#btnEditar" + doc).trigger("click");
                });
                /* Apply the search*/
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
            console.log('FETCHING...' + tblname);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function format(d) {
        console.log(d);
    }
    function onGetRecordsByDate(tblname, url, indicex, target_result, target_fail_messages, fail_message, dtms) {
        temp = 0;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                indice: indicex,
                FechaInicial: dtms[0],
                FechaTermino: dtms[1],
                FPago: dtms[2],
                Proveedor: dtms[3]
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function(data) {
            var tblName = tblname;

            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                /*CLICK SELECTED ROW*/
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    temp = parseInt($(dtm[0]).find("span")[0].innerText);
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt($(dtm[0]).find("span")[0].innerText);
                    $("#btnEditar" + doc).trigger("click");
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
        });
    }

    function onGetRecordsById(tblname, url, indicex, id, target_result, target_fail_messages, fail_message, dbclick) {
        temp = 0;
        $("#" + tblname).find("tr").removeClass("success");
        $("#" + tblname).find("tr").removeClass("warning");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                indice: indicex,
                ID: id
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function(data) {
            $("#rHistoryPayments").append(data);
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                /*CLICK SELECTED ROW*/
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    temp = parseInt($(dtm[0]).find("span")[0].innerText);
                });
                if (dbclick) {
                    /*DB CLICK FOR EDIT*/
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                        temp = parseInt($(dtm[0]).find("span")[0].innerText);
                        $("#btnEditar" + doc).trigger("click");
                    });
                }
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
        });
    }

    function onAction(form, url, assets_url) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO... POR FAVOR ESPERE"
        });
        var formdata = $("#" + form).serialize();
        $.ajax({
            type: "POST",
            url: url,
            data: formdata + assets_url
        }).done(function(data, x, jq) {
            console.log(data);
            onSuccess(data);
            $("#btnReCargarTramiteFactura").trigger('click');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            console.log('ACTION COMPLETADA');
            HoldOn.close();
        });
    }

    function onActionJSON(url) {
        console.log(temp);
        $.ajax({
            type: "POST",
            url: url,
            dataType: "JSON",
            data: {
                indice: 5,
                ID: temp
            },
            success: function(data) {
                console.log(data);
                json = data[0];
                var status_record = json.ESTATUS;
                console.log(json);
                $("#rHistoryPayments").html("");
                $("#rSaldoImporteMenosMonto").html('<br><h3 class="text-center text-success">SALDO</h3>' +
                        '<h3 class="text-center text-success">$ 0 </h3>');
                switch (status_record) {
                    case 'REGISTRADA':
                        var mdlRevision = $("#mdlRevision");
                        var btnSaveRevision = mdlRevision.find("#btnSave");
                        mdlRevision.find("#txtFolio").val(json.FOLIO);
                        mdlRevision.find("#OXTIdTramiteFactura").val(json.ID);
                        mdlRevision.find("#txtEstatus").val(json.ESTATUS);
                        mdlRevision.find("#ImporteF").val(json.IMPORTE);
                        mdlRevision.modal('show');
                        break;
                    case 'REVISION':
                        var mdlAutorizacion = $("#mdlAutorizacion");
                        var btnSaveAutorizacion = mdlAutorizacion.find("#btnSave");
                        mdlAutorizacion.find("#txtFolioRevision").val(json.FOLIO);
                        mdlAutorizacion.find("#OXTIdTramiteFacturaAutorizacion").val(json.ID);
                        mdlAutorizacion.find("#txtEstatusRevision").val(json.ESTATUS);
                        mdlAutorizacion.modal('show');
                        break;
                    case 'AUTORIZADA':
                        var mdlPagoFactura = $("#mdlPagoFactura");
                        mdlPagoFactura.find("#IdTramiteFacturaADMPPDF").val(json.ID);
                        mdlPagoFactura.find("#txtFolioADMPPDF").val(json.FOLIO);
                        mdlPagoFactura.find("#txtEstatusADMPPDF").val(json.ESTATUS);
                        mdlPagoFactura.find("#ImporteADMPPDF").val(json.SALDO);
                        mdlPagoFactura.find("#ImportePagado").val(json["IMPORTE PAGADO"]);
                        mdlPagoFactura.find("#MontoTotalNC").val(json.SALDO);
                        mdlPagoFactura.find("#MontoFacturaRestante").val(json.SALDO);
                        mdlPagoFactura.modal('toggle');
                        break;
                    case 'NO AUTORIZADA':
                        $("#fObservacionADFPEDFDP")[0].reset();
                        $("#txtFolioRevision").val(json.FOLIO);
                        $("#OXTIdTramiteFacturaAutorizacion").val(json.ID);
                        $("#txtEstatusRevision").val(json.ESTATUS);
                        $("#mdlADFPEDFDP").modal('toggle');
                        break;
                    case 'PARCIALMENTE PAGADA':
                        var mdlPagoFactura = $("#mdlPagoFactura");
                        $("#fObservacionADMPPDF")[0].reset();
                        $("#IdTramiteFacturaADMPPDF").val(json.ID);
                        $.ajax({
                            url: base_url + "index.php/ctrl" + doc + "/onLoad",
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                indice: 11,
                                ID: json.ID
                            },
                            success: function(data) {

                                if (data[0].ImporteRestanteXPagar !== '') {
                                    mdlPagoFactura.find("#ImporteADMPPDF").val(data[0].ImporteRestanteXPagar);
                                    mdlPagoFactura.find("#sNC").html('<h1 class="text-center">SALDO : $' + data[0].ImporteRestanteXPagar + '</h1>');
                                    mdlPagoFactura.find("#MontoTotalNC").val(data[0].ImporteRestanteXPagar);
                                    mdlPagoFactura.find("#MontoFacturaRestante").val(data[0].ImporteRestanteXPagar);
                                    mdlPagoFactura.find("#ImportePagado").val(json["IMPORTE PAGADO"]);
                                } else {

                                }
                            }
                        }).fail(function(x, y, z) {
                            console.log(x, y, z);
                        });
                        onGetRecordsById("tblHistory" + doc + "Payments", base_url + "index.php/ctrl" + doc + "/onLoad", 12, json.ID, "rHistoryPayments", "msgHistory" + doc, "NO SE ENCONTRARON REGISTROS", true);

                        mdlPagoFactura.find("#txtFolioADMPPDF").val(json.FOLIO);
                        mdlPagoFactura.find("#txtEstatusADMPPDF").val(json.ESTATUS);
                        mdlPagoFactura.modal('show');

                        break;
                    case 'EN ELABORACIÓN DE FORMA DE PAGO':

                        $("#cMessages").html("<H1>EL ESTATUS DE ESTA FACTURA ES: </H1><H1 class='text-info'> EN ELABORACION DE FORMA DE PAGO</H1><br><h1 class='text-center'>PAGOS REALIZADOS</h1><hr>");
                        onGetRecordsById("tblHistory" + doc + "PaymentsComplete", base_url + "index.php/ctrl" + doc + "/onLoad", 12, json.ID, "rContent", "cMessages" + doc, "NO SE ENCONTRARON REGISTROS", false);
                        $.ajax({
                            url: base_url + "index.php/ctrl" + doc + "/onLoad",
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                indice: 16,
                                ID: json.ID
                            },
                            success: function(data) {
                                console.log(data);
                                var tbl = "tbltHC" + doc;
                                $("#rxContent").html('<h1 class="text-center">OBSERVACIONES DEL PROCESO</h1><hr>');
                                $("#rxContent").append(getTable(tbl, data));
                                $('#' + tbl).DataTable(tableOptions);

                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                console.log(errorThrown);
                                console.log(textStatus);
                            }
                        });
                        $("#mdlOBTF").modal('toggle');

                        break;
                }
                var btnAvance = $("#btnAvance");
                btnAvance.removeClass("disabled");
                btnAvance.find("span").removeClass("fa-cog");
                btnAvance.find("span").removeClass("fa-spin");
                btnAvance.find("span").addClass("fa-forward");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        });
    }

    var temp_id = 0;
    function onSuccess(data) {
        temp_id = data;
        $("#mdlADFPEDFDP").modal("hide");
        $("#btnGuardarObservacionRDFPTDPProgress").addClass("hide");
        $("#btnGuardarObservacionRDFPTDP").removeClass("hide");
        $("#btnGuardarObservacionADFPEDFDPProgress").addClass("hide");
        $("#btnGuardarObservacionADFPEDFDP").removeClass("hide");
        $("#btnGuardarADMPPDF").removeClass("hide");
        $("#btnGuardarADMPPDFProgress").addClass("hide");
    }

    function onSuccessJSON(data) { }

    function onUpload(e) {
        var parent = $(e).parent().parent();
        var btnFile = parent.find("input[type='file']");
        var rArchivo = parent.find("#frtArchivo");
        btnFile.change(function() {
            var imageType = /image.*/;
            if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    rArchivo.html('<img src="' + reader.result + '" width=\"450\" height=\"600\">');
                };
                reader.readAsDataURL(btnFile[0].files[0]);
            } else {
                if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match('application/pdf')) {
                    var readerpdf = new FileReader();
                    readerpdf.onload = function(e) {
                        rArchivo.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="900px" height="1200px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnFile[0].files[0]);
                } else {
                    var extension = getExt(btnFile[0].files[0].name);
                    switch (extension) {
                        case "rar":
                            rArchivo.html('<img src="../../media/overlays/rar.png" class="image-responsive">');
                            break;
                        case "zip":
                            rArchivo.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "zip":
                            rArchivo.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "xml":
                            rArchivo.html('<img src="../../media/overlays/xml.png" class="image-responsive">');
                            break;
                        case "doc":
                            rArchivo.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "docx":
                            rArchivo.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "xls":
                            rArchivo.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "xlsx":
                            rArchivo.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "txt":
                            rArchivo.html('<img src="../../media/overlays/txt.png" class="image-responsive">');
                            break;
                        case "css":
                            rArchivo.html('<img src="../../media/overlays/css.png" class="image-responsive">');
                            break;
                        case "html":
                            rArchivo.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "htm":
                            rArchivo.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "sql":
                            rArchivo.html('<img src="../../media/overlays/sql.png" class="image-responsive">');
                            break;
                        default:
                            rArchivo.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                            break;
                    }
                }
            }
        });
        btnFile.trigger('click');
    }

    function onBeforeSend(url, indicex, modal_data, modal_messages, target_messages, content_message, buttons) {
        if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                data: {
                    indice: indicex,
                    ID: temp
                }
            }).done(function(data) {
                console.log(data);
                status_document = 'u';
                if (data[0] !== undefined) {
                    $('#' + modal_data).modal('toggle');
                    /*INSTRUCTIONS SET ALL DATA IN FORM */
                    putData(data[0]);
                    if (data[0].ESTATUS === 'REGISTRADA' || data[0].ESTATUS === 'REVISION') {
                        $("#btnActualizarTramiteFactura").removeClass("hide");
                    } else {
                        /*                  $("#btnActualizarTramiteFactura").addClass("hide")
                         $("#btnActualizarTramiteFacturaProgress").addClass("hide")*/
                    }
                } else {
                    $("#" + modal_messages).modal('toggle');
                }
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        } else {
            $("#" + modal_messages).modal('toggle');
        }
    }

    function putData(data) {
        mdlNuevo.find("#IdTramiteFactura").val(data.ID);
        mdlNuevo.find("#Folio").val(data.FOLIO);
        mdlNuevo.find("#Fecha").val(data.FECHA);
        mdlNuevo.find("#Hora").val(data.HORA);
        mdlNuevo.find("#Empresa").val(data.EMPRESA);
        mdlNuevo.find("#Empresa").select2("val", data.EMPRESA);
        /*MAS ADELANTE SE VA A CAMBIAR YA QUE LOS NOMBRES ESTAN MAL*/         mdlNuevo.find("#ModeloNegocio").select2("val", data.ACTIVIDAD);
        mdlNuevo.find("#Actividad").select2("val", data["PROYECTO"]);
        /*ESTOS 2 NOMBRES ANTERIORES ESTAN MAL, SE DEJO EN SU MOMENTO ASÍ PORQUE YA URGIA Y HUBO CAMBIO DE ULTIMO MINUTO*/
        mdlNuevo.find("#NumeroDeContrato").val(data["NUMERO DE CONTRATO"]);
        mdlNuevo.find("#Proveedor").val(data.PROVEEDOR);
        mdlNuevo.find("#Proveedor").select2("val", data.PROVEEDOR);
        mdlNuevo.find("#NumeroFactura").val(data["NUMERO DE FACTURA"]);
        mdlNuevo.find("#Importe").val(data.IMPORTE);
        mdlNuevo.find("#OrdenDeCompraRef").val(data["ORDEN DE COMPRA"]);
        mdlNuevo.find("#Observacion").val(data.OBSERVACION);
        mdlNuevo.find("#Receptor").val(data.RECEPTOR);
        mdlNuevo.find("#Receptor").select2("val", data.RECEPTOR);
        mdlNuevo.find("#FechaFactura").val(data["FECHA FACTURA"]);
        mdlNuevo.find("#Estatus").val(data.ESTATUS);
        /*    $("#frtImagen").html("<div class='img-ajax-upload'><img id='trtImagen' src='" + data.RTIMAGEN + "' /></div>");*/

        console.log('-----------------------');
        console.log(data.RTIMAGEN);
        console.log('-------------------------------------------------');
        mdlNuevo.find("#frtImagen").html('');
        if (data.RTIMAGEN !== null && data.RTIMAGEN !== undefined && data.RTIMAGEN !== '') {
            var ext = getExt(data.RTIMAGEN);
            console.log(ext);
            if (ext === "gif" || ext === "jpg" || ext === "png") {
                mdlNuevo.find("#frtImagen").html("<hr><img id='trtImagen' src='" + data.RTIMAGEN + "' class ='img-responsive'/>");
            }
            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                mdlNuevo.find("#frtImagen").html('<hr> <embed src="' + data.RTIMAGEN + '" type="application/pdf" width="90%" height="800px"' +
                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
            }
        } else {
            mdlNuevo.find("#frtImagen").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
        }

        mdlNuevo.find("#rtImagenText").val(data.RTIMAGEN);
    }

    function onCreatePDF(url, indicex, modal_data, modal_messages, target_messages, content_message, buttons) {

        if (temp !== undefined && temp !== null && temp !== 0 && temp !== '') {

            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                data: {
                    indice: indicex,
                    ID: temp
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(errorThrown);
                    console.log(textStatus);
                }
            }).done(function(data) {
                console.log(data);
                status_document = 'u';
                if (data[0] !== undefined) {

                    console.log(data[0]);
                    var docDefinition = {
                        /* a string or { width: number, height: number }*/
                        pageSize: 'A5',
                        /* by default we use portrait, you can change it to landscape if you wish*/
                        pageOrientation: 'landscape',
                        /* [left, top, right, bottom] or [horizontal, vertical] or just a number for equal margins*/
                        pageMargins: [40, 60, 40, 60],
                        content: [
                            {text: 'FACTURA PARA TRAMITE DE PAGO', style: 'title_style'},
                            {text: 'DATOS DEL REGISTRO', style: 'stitle_style'},
                            {
                                alignment: 'justify',
                                columns: [
                                    'FOLIO: ', {text: data[0].FOLIO, style: 'bcontent_style'},
                                    'PROVEEDOR: ', {text: data[0].FECHA, style: 'bcontent_style'},
                                    'FECHA: ', {text: data[0].FECHA, style: 'bcontent_style'}
                                ]
                            }
                        ]
                                /*                       [
                                 {text: 'FACTURA PARA TRAMITE DE PAGO', style: 'title_style'},
                                 {text: 'DATOS DEL REGISTRO', style: 'stitle_style'},
                                 {
                                 text: [
                                 'FOLIO: ', {text: data[0].FOLIO, style: 'bcontent_style'},
                                 'FECHA: ', {text: data[0].FECHA, style: 'bcontent_style'},
                                 {text: 'HORA', style: 'bcontent_style'},
                                 {text: 'EMPRESA RABINA', style: 'bcontent_style'},
                                 {text: 'MODELO DE NEGOCIO', style: 'bcontent_style'},
                                 {text: 'PROYECTO DE TRABAJO O ACTIVIDAD', style: 'bcontent_style'},
                                 {text: 'NÚMERO DE CONTRATO', style: 'bcontent_style'},
                                 ]
                                 },
                                 ]*/
                        , styles: {
                            header: {
                                fontSize: 18,
                                bold: true
                            },
                            bigger: {
                                fontSize: 15,
                                italics: true
                            },
                            title_style: {
                                fontSize: 22,
                                alignment: 'center',
                                bold: true
                            },
                            stitle_style: {
                                fontSize: 16,
                                alignment: 'center',
                                bold: true
                            },
                            bscontent_style: {
                                fontSize: 12,
                                alignment: 'left'
                            },
                            bcontent_style: {
                                fontSize: 12,
                                alignment: 'left',
                                bold: true
                            },
                            defaultStyle: {
                                columnGap: 40
                            }
                        }};
                    /* open the PDF in a new window*/
                    pdfMake.createPdf(docDefinition).open();
                    /* print the PDF (temporarily Chrome-only)
                     pdfMake.createPdf(docDefinition).print();

                     download the PDF (temporarily Chrome-only)
                     pdfMake.createPdf(docDefinition).download('optionalName.pdf');   */
                } else {
                    $("#" + target_messages).html('<fieldset> ' +
                            '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-3x"></span></h1></div>' +
                            '<div class="col-md-6"><H1>' + content_message + '</H1></div>' +
                            '</fieldset> ');
                    $("#" + modal_messages).modal('toggle');
                }
            });
            if ($("#" + buttons[0]).hasClass("hide")) {/*button update*/
                $("#" + buttons[0]).removeClass("hide"); /*hide button save*/
                $("#" + buttons[1]).addClass("hide"); /*unhide button update*/
            }
        } else {
            $("#" + target_messages).html('<fieldset> ' +
                    '<div class="col-md-4"><h1><span class="fa fa-warning faa-flash animated fa-3x"></span></h1></div>' +
                    '<div class="col-md-6"><H1>' + content_message + '</H1></div>' + '</fieldset> ');
            $("#" + modal_messages).modal('toggle');
        }
    }
    function onGetRecordReport(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
        temp = null;
        $("#" + tblname).find("tr").removeClass("success");
        $("#" + tblname).find("tr").removeClass("warning");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                indice: indicex
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
        }).done(function(data) {
            var tblName = tblname;

            if (data.length > 0) {
                resume_col = 7;
                $("#" + target_result).html(getTable(tblName, data));
                var tblSelected = $('#' + tblName).DataTable(tableOptionsResume);
                /*CLICK SELECTED ROW*/
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    console.log(this);
                    $(this).addClass('success');
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
        });
    }
    function onKeyUpImporteMenosMonto() {
        var importe = $("#ImporteADMPPDF").val();
        var monto = $("#MontoXPagarADMPPDF").val();
        var saldo = 0;
        if (parseFloat(monto) > 0) {
            saldo = importe - monto;
        } else {
            saldo = 0;
        }
        if (saldo < 0) {
            $("#rSaldoImporteMenosMonto").html('<p class="text-danger">EL MONTO ES MENOR A CERO O MAYOR AL IMPORTE</p>');
            $("#btnGuardarADMPPDF").addClass("disabled");
        } else {
            $("#rSaldoImporteMenosMonto").html('<br><h3 class="text-center text-success">SALDO</h3>' +
                    '<h3 class="text-center text-success">$ ' + saldo + '</h3>');
            onFormatNumber(saldo);
            /*        $("#btnGuardarADMPPDF").removeClass("disabled");*/
        }
    }

    function onFormatNumber(number) {
        var fnumber = number.toString();
        var str_number = fnumber.split('');
        var i = 0;
        var final_n = "";
        var str_f = [];
        for (var xxx = str_number.length; xxx >= 0; xxx--)
        {
            if (i === 3) {
                final_n += ".";
            } else {
                final_n += "" + str_number[xxx];
            }
        }
    }
    function onSearchByTramiteFactura() {
        var finicio = $("#FechaInicioH").val();
        var ftermino = $("#FechaTerminoH").val();
        var fpago = $("#cmbFacturaEstatus").val();
        var pro = $("#cmbProveedorFactura").val();
        console.log(finicio, ftermino, fpago, pro);
        var dtm = [];
        dtm.push(finicio);
        dtm.push(ftermino);
        dtm.push(fpago);
        dtm.push(pro);
        onGetRecordsByDate("tblTramiteFactura", master_url + "onLoad", 13, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS", dtm);
    }

    function onKeyUp() {
        var nc = 0;
        if ($("#MontoAplicado").val() !== '' &&
                $("#MontoFacturaRestante").val() > 0 &&
                $("#MontoFacturaRestante").val() ===
                $("#MontoAplicado").val() &&
                $("#IdNotaDeCredito").val() !== undefined && $("#IdNotaDeCredito").val() !== '' &&
                $("#ConceptoNC").val() !== undefined && $("#ConceptoNC").val() !== '') {

            nc = $("#MontoFacturaRestante").val() - $("#MontoAplicado").val();
            $("#btnNotaDeCredito").removeClass("disabled");
            $("#ncMessages").html('');
        } else {
            $("#btnNotaDeCredito").addClass("disabled");
            $("#ncMessages").html(' <p class="text-danger">*EL MONTO NO ES IGUAL AL SALDO O ALGUN DATO FALTA*</p>');
            $("#ncMessages").removeClass("hide");
        }
    }

    function onRefreshData() {
        onGetRecords("tblTramiteFactura", master_url + "onLoad", 1, "rTramiteFactura", "msgTramiteFactura", "NO SE ENCONTRARON REGISTROS");
    }

    function getNotasDeCreditoXFacturas() {
        temp = 0;
        $("#rTramiteFactura").html("<div align='center'><span class='fa fa-spinner fa-pulse fa-3x fa-fw'></span></div>");
        $.ajax({
            url: master_url + "getNotasDeCreditoXFacturas",
            type: "POST",
            dataType: "JSON"
        }).done(function(data) {
            var tblName = "tblNotasDeCreditoXFacturas";
            if (data.length > 0) {
                $("#rTramiteFactura").html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function() {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                var detailRows = [];
                /*CLICK SELECTED ROW*/
                $('#' + tblName + ' tbody').on('click', 'tr', function() {
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
                    temp = parseInt($(dtm[0])[0].innerText);
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function() {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);

                    $("#btnEditarNC").trigger("click");
                });
                /* Apply the search*/
                tblSelected.columns().every(function() {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#msgTramiteFactura").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                        '</div>');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        });
    }

    function onForwardRow(v) {
        console.log(v);
    }

    function onHideFunctions() {
        $("#btnAccions").fadeToggle("fast", "linear");
        $("div .title-module").find("span").toggleClass("fa-chevron-up fa-chevron-down");
    }

    function getCuentas() {
        $.ajax({
            url: master_url + 'getCuentas',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            console.log('* * * * * OPTIONS * * * * * ')
            $.each(data, function(k, v) {
//                console.log(v)
                options += '<option value="' + v.ID + '">' + v.CUENTA + '</option>';
            });
            console.log('* * * * * OPTIONS * * * * * ')
            mdlAvanceRapido.find("#IDCuentaFuente").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
        getEmpleados();
    }

    function getEmpleados() {
        $.ajax({
            url: master_url + 'getEmpleados',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.Nombre + ' ' + v.apaterno + ' ' + v.amaterno + '</option>';
            });
            mdlAvanceRapido.find("#Emisor").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }
    function onMostrarPanelNC() {
        mdlNuevo.find("#pnlNotasDeCredito").toggleClass("hide");
    }
</script>
<?php
$this->load->view('layout/modals/mdlMessages', true);
