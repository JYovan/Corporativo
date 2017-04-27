<div class="row">
    <fieldset>
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary container-fluid">
                <div class="panel-heading row">
                    <div class="col-md-2 panel-title">
                        <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-arrow-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="ATRAS"></span>
                        </a> 
                    </div>
                    <div class="col-md-8"> 
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE PRESTAMOS <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <fieldset id="fAccions">
                        <div id="btnAccions" align="center" class="col-md-12">
                            <fieldset>
                                <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" >
                                    <button id="btnAgregarTramiteFactura" class="btn btn3d btn-lg btn-info fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                                        <span class="fa fa-plus fa-lg"></span>
                                    </button>
                                </span>
                                <button id="btnModificar" class="btn btn3d btn-lg btn-success fa-2x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="MODIFICAR"  ><span class="fa fa-pencil fa-lg"></span></button>
                                <button id="btnRefresh" class="btn btn3d btn-lg btn-warning fa-2x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR"  ><span class="fa fa-refresh fa-lg"></span></button>
                                <button id="btnCancelarPago" class="btn btn3d btn-lg btn-danger fa-2x disabled"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR PAGO"  ><span class="fa fa-times fa-lg"></span></button>
                                <!--                            <button id="btnFacturasCanceladas" class="btn btn3d btn-lg btn-danger fa-2x hide"
                                                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="FACTURAS CANCELADAS"  >
                                                                <span class="fa fa-eye-slash fa-lg"></span></button>-->
                                <button id="btnCancelarPrestamo" class="btn btn3d btn-lg btn-a-orange fa-2x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR PRESTAMO">
                                    <span class="fa fa-ban fa-lg"></span>
                                </button>  <button id="btnConsultarSaldos" class="btn btn3d btn-lg btn-indigo fa-2x"
                                                   data-toggle="tooltip" data-placement="top" title="" data-original-title="CONSULTA DE SALDOS">
                                    <span class="fa fa-file-text fa-lg"></span>
                                </button>  
                                <button id="btnPagar" class="btn btn3d btn-lg btn-brown fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GENERAR PAGO">
                                    <span class="fa fa-money fa-lg"></span>
                                </button> 
                                <span  data-toggle="hide" data-easein="swoopIn" data-target="#content-busqueda" >
                                    <button id="btnBuscar" class="btn btn3d btn-lg btn-emerald fa-2x" data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSQUEDA ESPECIFICA"  >
                                        <span class="fa fa-search fa-lg"></span>
                                    </button> 
                                </span>
                                <button id="btnConsultarPagos" class="btn btn3d btn-lg btn-king-blue fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="HISTORIAL DE PAGOS">
                                    <span class="fa fa-eye fa-lg"></span>
                                </button>  
                                <button id="btnAyuda" class="btn btn3d btn-lg btn-dark fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="AYUDA">
                                    <span class="fa fa-magic fa-lg"></span>
                                </button>  

                            </fieldset>
                        </div> 
                    </fieldset>
                    <fieldset id="dSearch" accesskey="s" class="hide">
                        <form id="fSearch">
                            <div class="col-xs-12 col-md-2">
                                <label for="">DESDE</label>
                                <input type="text" class="form-control" id="FechaApartirB" name="FechaApartirB" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <label for="">HASTA</label>
                                <input type="text" class="form-control" id="FechaLimiteB" name="FechaLimiteB" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label for="">MUTUANTE</label>
                                <select id="IdMutuanteB" name="IdMutuanteB" class="form-control">

                                </select>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label for="">MUTUATARIO</label>
                                <select id="IdMutuatarioB" name="IdMutuatarioB" class="form-control">

                                </select>
                            </div>
                            <div class="col-xs-12 col-md-1">
                                <button id="btnBuscarAhora"  type="button" class="btn btn3d btn-lg btn-indigo fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSCAR">
                                    <span class="fa fa-search fa-lg"></span>
                                </button> 
                            </div>
                            <div class="col-xs-12 col-md-1">
                                <button id="btnResetBuscar"  type="button" class="btn btn3d btn-lg btn-indigo fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="RESETEAR">
                                    <span class="fa fa-trash fa-lg"></span>
                                </button>  
                            </div>
                        </form>
                        <div class="col-xs-12 col-md-2">
                            <button id="btnAcumulado" type="button" class="btn btn3d btn-lg btn-indigo fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="ACUMULADO">
                                <span class="fa fa-list-ol fa-lg"></span> 
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <button id="btnAcumuladoAgrupado" type="button" class="btn btn3d btn-lg btn-indigo fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="ACUMULADO AGRUPADO">
                                <span class="fa fa-list-alt fa-lg"></span> 
                        </div>
                    </fieldset>
                    <fieldset id="dSearchHistory" accesskey="s" class="hide">
                        <form id="fSearchHistory">
                            <div class="col-xs-12 col-md-2">
                                <label for="">DESDE</label>
                                <input type="text" class="form-control" id="FechaApartirB" name="FechaApartirB" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <label for="">HASTA</label>
                                <input type="text" class="form-control" id="FechaLimiteB" name="FechaLimiteB" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label for="">MUTUANTE</label>
                                <select id="IdMutuanteB" name="IdMutuanteB" class="form-control">

                                </select>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <label for="">MUTUATARIO</label>
                                <select id="IdMutuatarioB" name="IdMutuatarioB" class="form-control">

                                </select>
                            </div>
                            <div class="col-xs-12 col-md-1">
                                <button id="btnBuscarHistorial"  type="button" class="btn btn3d btn-lg btn-indigo fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSCAR">
                                    <span class="fa fa-search fa-lg"></span>
                                </button> 
                            </div>
                            <div class="col-xs-12 col-md-1">
                                <button id="btnResetBuscarHistorial"  type="reset" class="btn btn3d btn-lg btn-indigo fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="RESETEAR">
                                    <span class="fa fa-trash fa-lg"></span>
                                </button>  
                            </div>
                        </form> 
                    </fieldset>
                    <fieldset id="fResults"> 
                        <div id="msgContratosMutuo"></div>
                        <div id="rContratosMutuo"></div>
                    </fieldset>
                    <fieldset id="fProgress" class="hide">
                        <div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>
                    </fieldset>
                    <fieldset id="frSaldos" class="hide">
                        <div class="col-md-4 text-center hide">
                            <span class="fa fa-download fa-3x cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGAR TODOS COMO MULTIPLE PDF" onclick="getPDFByMutuanteAgrupado(this)"></span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fa fa-list-alt fa-3x cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGA PDF AGRUPADO" onclick="getPDFByMutuantesAgrupados(this)"></span>
                            <span class="fa fa-list-alt fa-3x cursor-hand text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGAR PDF (LE DEBE A)" onclick="getLeDebeA(this)"></span>
                        </div>
                        <div class="col-md-4 text-center hide">
                            <span class="fa fa-file-zip-o fa-3x cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGAR TODOS COMO ZIP" onclick="getZIPPDFByMutuanteAgrupado(this)"></span>
                        </div>
                        <div class="col-md-6"><h1 class="">SALDOS DE MUTUOS</h1></div>
                        <div class="col-md-3 text-center">
                            <label class=" cursor-hand"><input type="checkbox" id="chkRefreshSaldos" name="chkRefreshSaldos" class="option-input checkbox cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCO AUTOMATICO"> REFRESCAR</label>
                        </div>
                        <div class="col-md-12"><hr></div>
                        <div id="rSaldosMutuos" class="col-md-12"></div>
                    </fieldset> 

                </div>
            </div>
        </div>
    </fieldset>
</div>


<!------------------------------------MODALS------------------------------------>

<div id="mdlAyuda" class="modal animated slideInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-file-text fa-lg"></span> AYUDA GENERAL DE PRESTAMOS</h2>
            </div> 
            <div class="modal-body">
                <fieldset>
                    <div class="cold-md-12">
                        <img src="../../imagenes/Help/CancelarPago.png" class="img-responsive">
                    </div>
                    <div class="col-md-12" id="msgNuevoContratosMutuo"> 
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default zoomIn" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlNuevo" class="modal animated slideInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-file-text fa-lg"></span> NUEVO CONTRATO</h2>
            </div>
            <form id="fNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-xs-12 col-md-6">
                            <label for="">MUTUANTE: </label>
                            <select id="IdMutuante" name="IdMutuante" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">MUTUATARIO: </label>
                            <select id="IdMutuatario" name="IdMutuatario" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">CANTIDAD A PRESTAR: </label>
                            <input type="number" class="form-control" id="CantidadPrestada" onkeyup="onCalculateInteres()" onkeydown="onCalculateInteres()" onkeypress="onCalculateInteres()" onchange="onCalculateInteres()" min="1" max="99999999999999999" name="CantidadPrestada" required="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">INTERÉS: </label>
                            <input type="number" class="form-control" id="Interes" onkeyup="onCalculateInteres()" onkeydown="onCalculateInteres()" onkeypress="onCalculateInteres()"  onchange="onCalculateInteres()"  name="Interes" required="" max="99" min="0.01" value="">
                        </div> 
                        <div class="col-xs-12 col-md-6">
                            <label for="">PAGO MENSUAL DE: </label>
                            <p class="text-primary text-center" id="PagoMensualT" name="PagoMensualT" ></p>
                            <input type="number" class="form-control hide" id="PagoMensual" name="PagoMensual" readonly="" max="99" min="0.01">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">PAGO ANUAL DE: </label>
                            <p class="text-danger text-center" id="PagoAnualT" name="PagoAnualT" ></p>
                            <input type="number" class="form-control hide" id="PagoAnual" name="PagoAnual" readonly="" max="99" min="0.01">
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="">CUENTA SALIENTE: </label>
                            <select class="form-control" id="IdCuentaSaliente" name="IdCuentaSaliente" required="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">FORMA DE PAGO: </label>
                            <select class="form-control " id="IdFormaDePago" name="IdFormaDePago" >
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <label for="">CUENTA ENTRANTE: </label>
                            <select class="form-control" id="IdCuentaEntrante" name="IdCuentaEntrante" required="">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <label for="">A PARTIR DEL DÍA: </label>
                            <input type="text" class="form-control" id="FechaApartir" name="FechaApartir" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">HASTA EL DÍA: </label>
                            <input type="text" class="form-control" id="FechaLimite" name="FechaLimite" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DEL CONTRATO DE MUTUO: </label>
                            <input type="text" class="form-control" id="FechaContrato" name="FechaContrato" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DE SOLICITUD DE ELABORACIÓN: </label>
                            <input type="text" class="form-control" id="FechaSolicitud" name="FechaSolicitud" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DE ENTREGA DE CONTRATO ELABORADO: </label>
                            <input type="text" class="form-control" id="FechaEntregaContrato" name="FechaEntregaContrato" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">SOLICITANTE </label>
                            <select  class="form-control" id="IdSolicitante" name="IdSolicitante"  required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">RESPONSABLE </label>
                            <select  id="IdResponsable" name="IdResponsable" class="form-control" required="">
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-12" id="frtImagen" align="center"></div> 
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center">
                            <br>
                            <i class="fa fa-cloud-upload fa-5x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <input type="file" class="btn btn-primary hide" id="rtImagen" name="rtImagen">
                        </div>

                        <div class="col-md-12" id="msgNuevoContratosMutuo"> 
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default zoomIn" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnAdd" type="button" class="btn btn-success" ><span class="fa fa-check fa-3x"></span></button>
                <button id="btnAddProgress" type="button" class="btn btn-success hide"><span class="fa fa-refresh fa-spin fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlModificar" class="modal animated slideInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-file-text fa-lg"></span> MODIFICAR CONTRATO</h2>
            </div>
            <form id="fModificar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="IDU" name="IDU" class="form-control hide" readonly="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">MUTUANTE: </label>
                            <select id="IdMutuanteU" name="IdMutuanteU" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">MUTUATARIO: </label>
                            <select id="IdMutuatarioU" name="IdMutuatarioU" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">CANTIDAD A PRESTAR: </label>
                            <input type="number" class="form-control" id="CantidadPrestadaU" name="CantidadPrestadaU" onchange="onCalculateInteresU()" min="1" max="99999999999999999" name="CantidadPrestada" required="">
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <label for="">INTERÉS: </label>
                            <input type="number" class="form-control" id="InteresU" onchange="onCalculateInteresU()"  name="InteresU" required="" max="99" min="0.01">
                        </div> 
                        <div class="col-xs-12 col-md-3">
                            <label for="">PAGO MENSUAL DE: </label>
                            <p class="text-primary text-center" id="PagoMensualUT" name="PagoMensualUT" >$ 0.00</p>
                            <input type="number" class="form-control hide" id="PagoMensualU" name="PagoMensualU" readonly="" max="99" min="0.01">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <label for="">PAGO ANUAL DE: </label>
                            <p class="text-primary text-center" id="PagoAnualUT" name="PagoAnualUT" >$ 0.00</p>
                            <input type="number" class="form-control hide" id="PagoAnualU" name="PagoAnualU" readonly="" max="99" min="0.01">
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="">CUENTA SALIENTE: </label>
                            <select class="form-control" id="IdCuentaSalienteU" name="IdCuentaSalienteU" required="">
                                <option value=""></option>
                            </select>
                            <input type="text" readonly="" id="IdCuentaSalienteUX" class="hide" name="IdCuentaSalienteUX">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">FORMA DE PAGO: </label>
                            <select class="form-control " id="IdFormaDePagoU" name="IdFormaDePagoU" >
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <label for="">CUENTA ENTRANTE: </label>
                            <select class="form-control" id="IdCuentaEntranteU" name="IdCuentaEntranteU" required="">
                                <option value=""></option>
                            </select>
                            <input type="text" readonly="" class="hide" id="IdCuentaEntranteUX" name="IdCuentaEntranteUX">
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <label for="">A PARTIR DEL DÍA: </label>
                            <input type="text" class="form-control" id="FechaApartirU" name="FechaApartirU" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">HASTA EL DÍA: </label>
                            <input type="text" class="form-control" id="FechaLimiteU" name="FechaLimiteU" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DEL CONTRATO DE MUTUO: </label>
                            <input type="text" class="form-control" id="FechaContratoU" name="FechaContratoU" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DE SOLICITUD DE ELABORACIÓN: </label>
                            <input type="text" class="form-control" id="FechaSolicitudU" name="FechaSolicitudU" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DE ENTREGA DE CONTRATO ELABORADO: </label>
                            <input type="text" class="form-control" id="FechaEntregaContratoU" name="FechaEntregaContratoU" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">SOLICITANTE </label>
                            <select  class="form-control" id="IdSolicitanteU" name="IdSolicitanteU"  required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">RESPONSABLE </label>
                            <select  id="IdResponsableU" name="IdResponsableU" class="form-control" required="">
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-12" id="frtImagenU" align="center"></div> 
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtfU" align="center">
                            <br>
                            <i class="fa fa-upload fa-5x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <input type="file" class="btn btn-primary hide" id="rtImagenU" name="rtImagenU">
                        </div>

                        <script>

                            window.onload = function () {

                                var fileInput = document.getElementById('rtImagen');
                                var fileDisplayArea = document.getElementById('frtImagen');

                                fileInput.addEventListener('change', function (e) {
                                    var file = fileInput.files[0];
                                    var imageType = /image.*/;
                                    if (file.type.match(imageType)) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                            fileDisplayArea.innerHTML = "";
                                            var img = new Image();
                                            img.src = reader.result;
                                            img.className = "img-responsive";
                                            fileDisplayArea.appendChild(img);
                                        }
                                        reader.readAsDataURL(file);
                                    } else {
                                        fileDisplayArea.innerHTML = "LA API DE FILEREADER NO ES CAPAZ DE EJECUTARSE EN ESTE NAVEGADOR, UTILIZA CHROME O FIREFOX!"
                                    }
                                });

                                var fileInputU = document.getElementById('rtImagenU');
                                var fileDisplayAreaU = document.getElementById('frtImagenU');

                                fileInputU.addEventListener('change', function (e) {
                                    var fileU = fileInputU.files[0];
                                    var imageTypeU = /image.*/;
                                    if (fileU.type.match(imageTypeU)) {
                                        var readerU = new FileReader();
                                        readerU.onload = function (e) {
                                            fileDisplayAreaU.innerHTML = "";
                                            var imgU = new Image();
                                            imgU.src = readerU.result;
                                            imgU.className = "img-responsive";
                                            fileDisplayAreaU.appendChild(imgU);
                                        }
                                        readerU.readAsDataURL(fileU);
                                    } else {
                                        fileDisplayAreaU.innerHTML = "LA API DE FILEREADER NO ES CAPAZ DE LEER ESTE ARCHIVO, PERO PUEDE CONTINUAR SI ES UN PDF."
                                    }
                                });
                            };
                        </script>
                        <div class="col-md-12" id="msgUpdateContratosMutuo"> 
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default zoomIn" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnUpdate" type="button" class="btn btn-success" ><span class="fa fa-check fa-3x"></span></button>
                <button id="btnUpdateProgress" type="button" class="btn btn-success hide"><span class="fa fa-refresh fa-spin fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlPago" class="modal animated slideInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-file-text fa-lg"></span> GENERAR PAGO DE CONTRATO</h2>
            </div>
            <form id="fPago">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="ID" name="ID" class="form-control hide" readonly="">
                        </div>
                        <div class="col-xs-12 col-md-4" >
                            <label for="">FECHA DEL MUTUO</label>
                            <h3 id="txtFechaDelMutuo"></h3>
                        </div>
                        <div class="col-xs-12 col-md-4" >
                            <label for="">MUTUANTE</label>
                            <h3 id="txtMutuante"></h3>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">MUTUATARIO</label>
                            <h3 id="txtMutuatario"></h3>
                        </div>
                        <div class="col-xs-12 col-md-12"> 
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">MONTO DEL MUTUO</label>
                            <h3 id="txtMontoMutuo"></h3>
                            <input type="text" class="form-control hide" id="CantidadPrestada" name="CantidadPrestada" readonly="">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">INTERÉS</label>
                            <h3 id="txtInteres"></h3>
                            <input type="text" class="form-control hide" id="Interes" name="Interes" readonly="">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">MONTO A PAGAR</label> 
                            <h3 id="txtMontoAPagar"></h3>
                            <input type="text" class="form-control hide" id="MontoAPagar" name="MontoAPagar" readonly="">
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="chkInteres">APLICAR INTERÉS</label>  
                            <input type="checkbox" class="form-control" id="chkInteres" name="chkInteres">
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="">CANTIDAD A PAGAR</label> 
                            <input type="text" class="form-control " id="Pago" name="Pago" onchange="getSaldo();" onkeyup="getSaldo();" onkeydown="getSaldo();" onkeypress="getSaldo();">
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">SALDO</label> 
                            <h3 id="txtSaldo"></h3>
                            <input type="text" id="Saldo" name="Saldo" class="form-control hide">
                        </div> 
                        <div class="col-xs-12 col-md-12" id="msgCalculoDePago">

                        </div>


                        <div class="col-xs-12 col-md-4">
                            <label for="">NUMERO DE PAGO</label>
                            <input type="text" value="" class="form-control" id="NumeroDePago" name="NumeroDePago" readonly="">
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <label for="">FORMA DE PAGO</label>
                            <select class="form-control " id="FormaDePago" name="FormaDePago" >
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label for="">REFERENCIA DE PAGO</label>
                            <input type="text" class="form-control " id="Referencia" name="Referencia" > 
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <label for="">CUENTA SALIENTE: </label> 
                            <h3 id="txtCuentaSaliente"></h3>
                        </div> 

                        <div class="col-xs-12 col-md-4">
                            <label for="">CUENTA ENTRANTE: </label>
                            <select class="form-control" id="CuentaEntrante" name="CuentaEntrante" required="">
                                <option value=""></option>
                            </select>
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <label for="">FECHA DEL PAGO: </label>
                            <input type="text" class="form-control" id="FechaDelPago" name="FechaDelPago" data-provide="datepicker" data-date-format="dd/mm/yyyy"  required="">
                        </div>  
                        <div class="col-md-12" id="msgPagoContratosMutuo"> 
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default zoomIn" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnAddPago" type="button" class="btn btn-success" ><span class="fa fa-check fa-3x"></span></button>
                <button id="btnAddPagoProgress" type="button" class="btn btn-success disabled hide"><span class="fa fa-refresh fa-spin fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlReport" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">VISTA PREVIA</h4>
            </div>
            <div id="" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button> 
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------------------------------------->
<script>
    var master_url = base_url + 'index.php/ctrlPrestamos/';
    var mdlAyuda = $("#mdlAyuda");
    var btnAyuda = $("#btnAyuda");
    var btnCancelarPrestamo = $("#btnCancelarPrestamo");
    var status_row = "";
    $(document).ready(function () {
        /*EVT COMPONENTS*/

        btnCancelarPrestamo.click(function () {
            if (temp !== undefined && temp !== null && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CANCELANDO..."
                });
                if (status_row === 'SIN PAGOS') {
                    $.ajax({
                        url: master_url + 'onCancelarPrestamo',
                        type: "POST",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PRESTAMO: ' + temp + ' CANCELADO', 'success');
                        onRefresh();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    HoldOn.close();
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE PUEDE CANCELAR UN MOVIMIENTO CON PAGOS', 'danger');
                }
            } else {
                HoldOn.close();
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        $("#fileuploadtf").click(function () {
            console.log('SELECCIONE I')
            $("#rtImagen").trigger('click');
        });

        $("#fileuploadtfU").click(function () {
            $("#rtImagenU").trigger('click');
        });

        $("#chkInteres").change(function () {
            if ($(this)[0].checked) {
                var f = $("#fPago")[0];
                var c = 0.0;
                var i = 0.0;
                c = $(f).find("#CantidadPrestada").val();
                i = parseFloat($(f).find("#Interes").val()) + parseFloat(c);
                $("#txtMontoAPagar").text('$ ' + $.number(i, 2, '.', ', '));
                $(f).find("#MontoAPagar").val(parseFloat(i));
            } else {
                var f = $("#fPago")[0];
                var c = $(f).find("#CantidadPrestada").val();
                $("#txtMontoAPagar").text('$ ' + $.number(c, 2, '.', ', '));
                $(f).find("#MontoAPagar").val(parseFloat(c));
            }
            getSaldo();
        });

        $("#IdCuentaSaliente").change(function () {
            getCuentasByNotID("IdCuentaSaliente", "IdCuentaEntrante");
        });

        $("#IdCuentaSalienteU").change(function () {
            getCuentasByNotID("IdCuentaSalienteU", "IdCuentaEntranteU");
        });

        onRefresh();

        /*EVT BUTTONS*/

        btnAyuda.click(function () {
            mdlAyuda.modal('show');
        });

        $("#btnAdd").click(function () {
            onAddContrato();
        });

        $("#btnCancelarPago").click(function () {
            onCancelPago();
            $("#fAccions").removeClass("hide");
            $("#fResults").removeClass("hide");
            $("#fProgress").addClass("hide");
            $("#frSaldos").addClass("hide");
            //            $("#btnRefresh").trigger('click');
            getRecordsHistory("tblHistorialDePagosDeMutuo", base_url + "index.php/ctrlPrestamos/getHistorialDePagos", 1, "rContratosMutuo", "msgContratosMutuo", "NO SE ENCONTRARON REGISTROS");
        });

        $("#btnBuscar").click(function () {
            $("#dSearch").fadeToggle("fast", function () {
                $("#dSearch").toggleClass("hide");
            });
        });

        $("#btnAcumulado").click(function () {
            $("#btnAcumulado").addClass("disabled");
            $("#btnAcumulado").find("span").removeClass("fa-list-ol").addClass("fa-refresh fa-spin");

            var desde = $("#FechaApartirB").val();
            var hasta = $("#FechaLimiteB").val();
            var mutuante = $("#IdMutuanteB").val();
            var mutuatario = $("#IdMutuatarioB").val();
            if (desde !== '' || hasta !== '' || mutuante !== '' || mutuatario !== '') {
                $.ajax({
                    url: base_url + 'index.php/ctrlPrestamos/onCreateAcumulado',
                    type: "POST",
                    data: {
                        DESDE: desde,
                        HASTA: hasta,
                        ID: mutuante,
                        IDX: mutuatario
                    }
                }).done(function (data, x, jq) {
                    console.log(data)
                    if (parseInt(data) === 0) {
                        $("#msgContratosMutuo").html('<p class="text-primary">LA EMPRESA NO TIENE MOVIMIENTOS.</p>');
                    } else {
                        $("#msgContratosMutuo").html('');
                        window.open(data, '_blank');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('REPORTE ACUMULADO GENERADO');
                    $("#btnAcumulado").removeClass("disabled");
                    $("#btnAcumulado").find("span").removeClass("fa-refresh fa-spin").addClass("fa-list-ol");
                });
            } else {
                $("#fSearch label").effect("shake", "slow");
                $("#btnAcumulado").removeClass("disabled");
                $("#btnAcumulado").find("span").removeClass("fa-refresh fa-spin").addClass("fa-list-ol");
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE LLENAR LA INFORMACIÓN NECESARIA', 'danger');
            }
        });

        $("#btnAcumuladoAgrupado").click(function () {
            var desde = $("#FechaApartirB").val();
            var hasta = $("#FechaLimiteB").val();
            var mutuante = $("#IdMutuanteB").val();
            var mutuatario = $("#IdMutuatarioB").val();
            if (desde !== '' || hasta !== '' || mutuante !== '' || mutuatario !== '') {
                $.ajax({
                    url: base_url + 'index.php/ctrlPrestamos/getRecordsIDByIDAgrupado',
                    type: "POST",
                    data: {
                        DESDE: desde,
                        HASTA: hasta,
                        ID: mutuante,
                        IDX: mutuatario
                    }
                }).done(function (data, x, jq) {
                    console.log(data)
                    if (parseInt(data) === 0) {
                        $("#msgContratosMutuo").html('<p class="text-primary">LA EMPRESA NO TIENE MOVIMIENTOS.</p>');
                    } else {
                        $("#msgContratosMutuo").html('');
                        window.open(data, '_blank');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('REPORTE ACUMULADO AGRUPADO GENERADO');
                });
            } else {
                $("#fSearch label").effect("shake", "slow");
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE COMPLETAR LA INFORMACIÓN NECESARIA', 'danger');
            }
        });

        $("#btnBuscarAhora").click(function () {
            var prestador = $("#IdMutuanteB").val();
            var deudor = $("#IdMutuatarioB").val();
            var url = base_url + "index.php/ctrlPrestamos/getRecords";
            var target_result = "rContratosMutuo";
            var target_fail_messages = "msgContratosMutuo";
            var fail_message = "NO SE ENCONTRARON REGISTROS";
            $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            var tblname = "tblContratosDeMutuo";
            var tblName = tblname;

            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/getRecordsIDByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: prestador,
                    IDX: deudor,
                    DESDE: $("#FechaApartirB").val(),
                    HASTA: $("#FechaLimiteB").val()
                }
            }).done(function (data, x, jq) {
                if (data.length > 0) {
                    $("#" + target_result).html(getTable(tblName, data));
                    $("#" + tblname + "  tbody > tr").each(function (k, v) {
                        var row = $(this).find("td")[4];
                        var rowi = $(this).find("td")[5];
                        var rows = $(this).find("td")[6];
                        var rowcus = $(this).find("td")[7];
                        var rowfp = $(this).find("td")[8];
                        var rowcue = $(this).find("td")[9];
                        rowi.innerHTML = '<span class="label label-danger">  ' + rowi.innerText + ' % </span>';
                        var row_value = row.innerText;
                        row.innerHTML = '<span class="label label-primary"> $ ' + $.number(row_value, 2, '.', ', ') + '</span>';

                        rows.innerHTML = '<span class="label label-info"> $ ' + $.number(rows.innerText, 2, '.', ', ') + '</span>';
                        rowcus.innerHTML = '<span class="label label-primary"> ' + rowcus.innerText + '</span>';
                        rowfp.innerHTML = '<span class="label label-warning"> ' + rowfp.innerText + '</span>';
                        rowcue.innerHTML = '<span class="label label-info"> ' + rowcue.innerText + '</span>';

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
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                    });
                } else {
                    $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">' + fail_message + '</h1>' +
                            '</div>');
                    $("#" + target_result).html("<div align='center'></div>");
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'BUSQUEDA FINALIZADA', 'danger');

            });
        });

        $("#btnBuscarHistorial").click(function () {
            var target_result = "rContratosMutuo";
            var target_fail_messages = "msgContratosMutuo";
            var fail_message = "NO SE ENCONTRARON REGISTROS";
            $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            var tblname = "tblHistorialDePagosDeMutuo";
            var tblName = tblname;
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/getBusquedaDeHistorialDePagos',
                type: "POST",
                dataType: "JSON",
                data: {
                    INICIO: $("#fSearchHistory").find("#FechaApartirB").val(),
                    FIN: $("#fSearchHistory").find("#FechaLimiteB").val(),
                    ACREEDOR: $("#fSearchHistory").find("#IdMutuanteB").val(),
                    DEUDOR: $("#fSearchHistory").find("#IdMutuatarioB").val()
                }
            }).done(function (data, x, jq) {
                if (data.length > 0) {
                    $("#" + target_result).html(getTable(tblName, data));
                    $("#" + tblname + "  tbody > tr").each(function (k, v) {
                        var row = $(this).find("td")[4];
                        var rowi = $(this).find("td")[5];
                        var rows = $(this).find("td")[6];
                        var rowcus = $(this).find("td")[7];
//                        var rowfp = $(this).find("td")[8];
                        //                        var rowcue = $(this).find("td")[9];
                        rowi.innerHTML = '<span class="label label-danger">  ' + rowi.innerText + ' % </span>';
                        var row_value = row.innerText;
                        row.innerHTML = '<span class="label label-primary">$' + $.number(row_value, 2, '.', ', ') + '</span>';
                        rows.innerHTML = '<span class="label label-info">$' + $.number(rows.innerText, 2, '.', ', ') + '</span>';
                        rowcus.innerHTML = '<span class="label label-emerald">' + rowcus.innerText + '</span>';
//                        rowfp.innerHTML = '<span class="label label-warning"> ' + rowfp.innerText + '</span>';
//                        rowcue.innerHTML = '<span class="label label-info"> ' + rowcue.innerText + '</span>';
                        //
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
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                    });
                } else {
                    $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">' + fail_message + '</h1>' +
                            '</div>');
                    $("#" + target_result).html("<div align='center'></div>");
                }
            }).fail(function (x, y, z) {
                console.log('ERROR');
                console.log(x, y, z);
                console.log('ERROR');

            }).always(function () {
                console.log('BUSQUEDA EN HISTORIAL FINALIZADA');
            });
        });

        $("#btnModificar").click(function () {
            var mdlUpdate = $("#mdlModificar");
            if (temp !== undefined && temp !== 0 && temp > 0) {
                mdlUpdate.modal('toggle');
                var frmu = $("#fModificar")[0];
                $(frmu).find("#ID").val(temp);
                console.log(frmu);
                $.ajax({
                    url: base_url + 'index.php/ctrlPrestamos/getRecordsByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log('FORM');
                    console.log(data);
                    console.log('END FORM');
                    var dtm = data[0];
                    console.log(dtm.Estatus)
                    if (dtm.Estatus === 'PAGADO') {
                        mdlUpdate.find("#btnUpdate").addClass("hide");
                    } else {
                        mdlUpdate.find("#btnUpdate").removeClass("hide");
                    }
                    $(frmu).find("#IDU").val(dtm.ID);
                    $(frmu).find("#IdMutuanteU").select2("val", dtm.IdMutuante);
                    $(frmu).find("#IdMutuatarioU").select2("val", dtm.IdMutuatario);
                    $(frmu).find("#CantidadPrestadaU").val(dtm.Saldo);
                    $(frmu).find("#InteresU").val(dtm.Interes);
                    $(frmu).find("#IdCuentaSalienteU").select2("val", dtm.IdCuentaSaliente);
                    $(frmu).find("#IdCuentaSalienteUX").val(dtm.IdCuentaSaliente);
                    $(frmu).find("#IdFormaDePagoU").select2("val", dtm.IdFormaDePago);
                    $(frmu).find("#IdCuentaEntranteU").select2("val", dtm.IdCuentaEntrante);
                    $(frmu).find("#IdCuentaEntranteUX").val(dtm.IdCuentaEntrante);

                    $(frmu).find("#FechaApartirU").val(dtm.FechaApartir);
                    $(frmu).find("#FechaLimiteU").val(dtm.FechaLimite);
                    $(frmu).find("#FechaContratoU").val(dtm.FechaContrato);
                    $(frmu).find("#FechaSolicitudU").val(dtm.FechaSolicitud);
                    $(frmu).find("#FechaEntregaContratoU").val(dtm.FechaEntregaContrato);

                    $(frmu).find("#IdSolicitanteU").select2("val", dtm.IdSolicitante);
                    $(frmu).find("#IdResponsableU").select2("val", dtm.IdResponsable);
                    console.log(dtm.rImagen);
                    $(frmu).find("#frtImagenU").html('');
                    if (dtm.rImagen !== null && dtm.rImagen !== undefined && dtm.rImagen !== '') {
                        var ext = getExt(dtm.rImagen);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            $(frmu).find("#frtImagenU").html("<hr><img id='trtImagen' src='" + dtm.rImagen + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            $(frmu).find("#frtImagenU").html('<hr> <embed src="' + dtm.rImagen + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        $(frmu).find("#frtImagenU").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                    onCalculateInteresU();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {

                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        $("#btnUpdate").click(function () {
            $("#btnUpdate").find("span").removeClass("fa-check").addClass("fa-cog fa-spin disabled");
            $("#btnUpdate").addClass("disabled");
            onUpdate();
            setTimeout(function () {
                $("#btnUpdate").find("span").addClass("fa-check").removeClass("fa-cog fa-spin disabled");
                $("#btnUpdate").removeClass("disabled");
            }, 2500);
        });

        $("#btnRefresh").click(function () {
            onRefresh();
        });

        $("#btnConsultarPagos").click(function () {
            $("#btnCancelarPago").removeClass("disabled");
            $("#fAccions").removeClass("hide");
            $("#fResults").removeClass("hide");
            $("#fProgress").addClass("hide");
            $("#frSaldos").addClass("hide");
            $("#dSearchHistory").removeClass("hide");
            getRecordsHistory("tblHistorialDePagosDeMutuo", base_url + "index.php/ctrlPrestamos/getHistorialDePagos", 1, "rContratosMutuo", "msgContratosMutuo", "NO SE ENCONTRARON REGISTROS");
        });

        $("#btnPagar").click(function () {
            console.log('ok')
            var mdlPago = $("#mdlPago");
            if (temp !== undefined && temp !== 0 && temp > 0) {
                mdlPago.modal('toggle');
                var frmu = $("#fPago")[0];
                $(frmu).find("#ID").val(temp);
                console.log(frmu);
                $.ajax({
                    url: base_url + 'index.php/ctrlPrestamos/getRecordsByIDPay',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    var dtm = data[0];
                    if (dtm.Estatus === 'PAGADO') {
                        mdlPago.find("#btnAddPago").addClass("hide");
                    } else {
                        mdlPago.find("#btnAddPago").removeClass("hide");
                        $(frmu).find("#txtMutuante").text(dtm.MUTUANTE);
                        $(frmu).find("#txtMutuatario").text(dtm.MUTUATARIO);
                        $(frmu).find("#txtFechaDelMutuo").text(dtm.FechaContrato);

                        $(frmu).find("#CantidadPrestada").val(dtm.Saldo);
                        $(frmu).find("#NumeroDePago").val(dtm.NPAGO);
                        $(frmu).find("#MontoAPagar").val(parseFloat(dtm.Saldo));
                        $("#txtInteres").text('$ ' + $.number(parseFloat(dtm.Saldo) * (dtm.Interes / 100), 2, '.', ', '));
                        $(frmu).find("#Interes").val(parseFloat(dtm.Saldo) * (dtm.Interes / 100));
                        $("#txtMontoAPagar").text('$ ' + $.number(dtm.Saldo, 2, '.', ', '));
                        $(frmu).find("#MontoAPagar").val(parseFloat(dtm.Saldo));
                        $(frmu).find("#txtMontoMutuo").text('$ ' + $.number(dtm.Saldo, 2, '.', ', '));
                        $(frmu).find("#txtCuentaSaliente").text(dtm["CUENTA SALIENTE"]);
                        $(frmu).find("#IdCuentaEntrante").select2(dtm.IdCuentaEntrante);
                        $(frmu).find("#Pago").val("0");
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {

                });
            } else {

                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        $("#btnAddPago").click(function () {
            //        onAddPago(form, btn_submit, btn_progress, modal, btn_refresh, msg, url_method)
            onAddPago("fPago", "btnAddPago", "btnAddPagoProgress", "mdlPago", "btnRefresh", "msgPagoContratosMutuo", "ctrlPrestamos/onAddPago");
        });

        $("#btnResetBuscar").click(function () {
            $("#fSearch")[0].reset();
            $('#fSearch select').select2("val", "");
        });

        var refresh = false;
        $("#btnConsultarSaldos").click(function () {
            $("#frSaldos").addClass("hide");
            $("#dSearchHistory").addClass("hide");
            $("#btnConsultarSaldos").addClass("disabled");
            $("#btnConsultarSaldos").find("span").removeClass("fa-file-text").addClass("fa-cog fa-spin");

            $("#fResults").addClass("hide");
            $("#fProgress").removeClass("hide");
            if (refresh === false) {
                onStartRefresh();
            }
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/getMutuantesAgrupados',
                type: "POST"
            }).done(function (data, x, jq) {
                $("#fProgress").addClass("hide");
                $("#frSaldos").removeClass("hide");
                $("#rSaldosMutuos").html(data);

                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LOS SALDOS HAN SIDO ACTUALIZADOS', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);

                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'HA OCURRIDO UN PROBLEMA MIENTRAS SE ACTUALIZABAN LOS SALDOS', 'danger');
            }).always(function () {
                $("#fProgress").addClass("hide");
                setTimeout(function () {
                    $("#btnConsultarSaldos").removeClass("disabled");
                    $("#btnConsultarSaldos").find("span").addClass("fa-file-text").removeClass("fa-cog fa-spin");
                }, 1000);
            });
        });

        var min = 60;
        function onStartRefresh() {
            refresh = true;
            var parent = $("#chkRefreshSaldos").parent()[0];

            if (min === 0) {
                min = 60;
            }
            min = min - 1;
            if ($("#chkRefreshSaldos")[0] !== undefined) {
                var chk = $("#chkRefreshSaldos")[0].checked;
                if (chk) {
                    if (min === 0) {
                        min = 60;
                        onUpdateSaldosPorMutuante();
                    }
                } else {
                    //                    console.log('CONSULTA NO PROCESADA');
                }
            } else {
                console.log('NO SE HA DEFINIDO UN CHECKBOX PARA REFRESCAR')
            }
            if ($("#chkRefreshSaldos")[0] !== undefined) {
                if ($("#chkRefreshSaldos")[0].checked) {
                    parent.innerHTML = '<input type="checkbox" id="chkRefreshSaldos" checked="true" name="chkRefreshSaldos" class="form-control option-input checkbox cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCO AUTOMATICO"> REFFRESCAR(' + min + ')';
                } else {
                    parent.innerHTML = '<input type="checkbox" id="chkRefreshSaldos" name="chkRefreshSaldos" class="form-control option-input checkbox cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCO AUTOMATICO"> REFFRESCAR(' + min + ')';
                }
            }
            var t = setTimeout(onStartRefresh, 1000);
        }
        /*EVT MODALS*/
        $('#mdlPago').on('hidden.bs.modal', function (e) {
            $("#fPago")[0].reset();
            $('#fPago select').select2("val", "");
            $("#frtImagen").html("");
        });

        $('#mdlNuevo').on('hidden.bs.modal', function (e) {
            $("#fNuevo")[0].reset();
            $('#fNuevo select').select2("val", "");
            $("#frtImagen").html("");
        });

        $('#mdlModificar').on('hidden.bs.modal', function (e) {
            $("#fModificar")[0].reset();
            $('#fModificar select').select2("val", "");
            $("#mdlModificar").find("#btnUpdate").removeClass("hide");
        });

    });

    function onUpdateSaldosPorMutuante() {
        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getMutuantesAgrupados',
            type: "POST"
        }).done(function (data, x, jq) {
            $("#rSaldosMutuos").html(data);

            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LOS SALDOS HAN SIDO ACTUALIZADOS', 'success');
        }).fail(function (x, y, z) {
            console.log(x, y, z);

            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'OCURRIO UN ERROR AL ACTUALIZAR LOS SALDOS', 'danger');
        }).always(function () {
            console.log('CONSULTA PROCESADA.');
        });

    }

    function onHideFunctions() {
        $("#btnAccions").fadeToggle("fast", "linear");
        $("div .title-module").find("span").toggleClass("fa-chevron-up fa-chevron-down");
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
                    var row = $(this).find("td")[4];
                    var rowi = $(this).find("td")[5];
                    var rows = $(this).find("td")[6];
                    var rowcus = $(this).find("td")[7];
                    var rowfp = $(this).find("td")[8];
                    var rowcue = $(this).find("td")[9];
                    rowi.innerHTML = '<span class="label label-danger">' + rowi.innerText + ' % </span>';
                    var row_value = row.innerText;
                    row.innerHTML = '<span class="label label-primary">' + row_value + '</span>';

                    rows.innerHTML = '<span class="label label-emerald">' + rows.innerText + '</span>';
                    rowcus.innerHTML = '<span class="label label-primary">' + rowcus.innerText + '</span>';
                    rowfp.innerHTML = '<span class="label label-warning">' + rowfp.innerText + '</span>';
                    rowcue.innerHTML = '<span class="label label-info">' + rowcue.innerText + '</span>';

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
                    status_row = dtm[1];
                    console.log(status_row);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt(dtm[0]);
                    $("#btnModificar").trigger("click");
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

    function getRecordsHistory(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
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
                    var row = $(this).find("td")[4];
                    var rowi = $(this).find("td")[5];
                    var rows = $(this).find("td")[6];
                    var rowcus = $(this).find("td")[8];
                    var rowfp = $(this).find("td")[9];
                    rowi.innerHTML = '<span class="label label-danger">  ' + rowi.innerText + ' % </span>';
                    var row_value = row.innerText;
                    row.innerHTML = '<span class="label label-primary">' + row_value + '</span>';
                    var row_value = rows.innerText;
                    rows.innerHTML = '<span class="label label-emerald">' + row_value + '</span>';

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
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
                $("#" + target_result).html("<div align='center'></div>");
            }
        });
    }

    function onAddContrato() {
        var frm = $("#fNuevo").serializeArray();
        //       console.log("FORM: "+frm);
        $("#btnAdd").addClass("hide");
        $("#btnAddProgress").removeClass("hide");
        var validation_form = false;
        $.each(frm, function (k, v) {
            console.log(v.value);
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                setTimeout(function () {
                    $("#btnAdd").removeClass("hide");
                    $("#btnAddProgress").addClass("hide");
                }, 900);
                console.log(k, v)
                validation_form = false;
                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#msgNuevoContratosMutuo").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });
        if (validation_form) {
            dataf = new FormData($('#fNuevo')[0]);
            console.log(dataf);
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/onAddContrato',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: dataf
            }).done(function (data, x, jq) {
                console.log(data)
                $("#mdlNuevo").modal('toggle');
                $("#btnRefresh").trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                $("#msgNuevoContratosMutuo").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
            HA OCURRIDO UN ERROR, INTENTE DE NUEVO O MÁS TARDE.</div>');
            }).always(function () {
                console.log('FINISHED ONADDPAYMENT');
                $("#btnAdd").removeClass("hide");
                $("#btnAddProgress").addClass("hide");
            });
        } else {
            console.log('FORMULARIO INVALIDO');
        }
    }

    function onAddPago(form, btn_submit, btn_progress, modal, btn_refresh, msg, url_method) {
        var frm = $("#" + form).serializeArray();
        //       console.log("FORM: "+frm);
        $("#" + btn_submit).addClass("hide");
        $("#" + btn_progress).removeClass("hide");
        var validation_form = false;
        $.each(frm, function (k, v) {
            //            console.log(v.value);
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                setTimeout(function () {
                    $("#" + btn_submit).removeClass("hide");
                    $("#" + btn_progress).addClass("hide");
                }, 900);
                //                console.log(k, v)
                validation_form = false;
                //                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#msgNuevoContratosMutuo").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });
        if (validation_form) {
            $.ajax({
                url: base_url + 'index.php/' + url_method,
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                if (parseInt(data) !== 0) {
                    $("#" + modal).modal('toggle');
                    $("#" + btn_refresh).trigger('click');
                } else {
                    $("#" + msg).html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                NO SE HA PODIDO PROCESAR LA PETICION</div>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                $("#" + msg).html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
            HA OCURRIDO UN ERROR, INTENTE DE NUEVO O MÁS TARDE.</div>');
            }).always(function () {
                console.log('FINISHED ONADDPAYMENT');
                $("#" + btn_submit).removeClass("hide");
                $("#" + btn_progress).addClass("hide");
            });
        } else {
            console.log('FORMULARIO INVALIDO');
        }
    }

    function getUsuarios(target) {
        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getUsuarios',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                //                console.log(data)
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.Id + '">' + v.nombre + ' ' + v.apaterno + ' ' + v.amaterno + '</option>';
                    });
                    $("#" + target).html(options);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS DE USUARIOS', 'danger');
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getDirectorio() {
        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getDirectorio',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                //                console.log(data)
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.RazonS + '</option>';
                    });
                    $("#IdMutuante").html(options);
                    $("#IdMutuanteU").html(options);
                    $("#IdMutuatario").html(options);
                    $("#IdMutuatarioU").html(options);

                    $("#IdMutuanteB").html(options);
                    $("#IdMutuatarioB").html(options);

                    $("#fSearchHistory").find("#IdMutuanteB").html(options);
                    $("#fSearchHistory").find("#IdMutuatarioB").html(options);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS EN DIRECTORIO', 'danger');
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getFormasDePago(target) {
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getFormasDePago',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                //                console.log(data);
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v["FORMA PAGO"] + '</option>';
                    });
                    $("#" + target).html(options);
                } else {
                    console.log('NO Fetching Formas de pago...');

                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS FORMAS DE PAGO', 'danger');
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getCuentas(target_result) {
        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getCuentas',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                //                console.log(data);
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.CUENTA + '</option>';
                    });
                    $("#" + target_result).html(options);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS FORMAS DE PAGO', 'danger');
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getCuentasByNotID(target_value, target_result) {
        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getCuentasByNotID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#" + target_value).val()
            },
            success: function (data) {
                //                console.log(data);
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.CUENTA + '</option>';
                    });
                    $("#" + target_result).html(options);
                } else {
                    console.log('NO Fetching Formas de pago...');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SÉ ENCONTRARON REGISTROS FORMAS DE PAGO', 'danger');
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function onUploadFile(frm, method_url, btn_refresh, mdl) {
        dataf = new FormData($('#' + frm)[0]);
        console.log(dataf);
        $.ajax({
            url: base_url + 'index.php/' + method_url,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: dataf
        }).done(function (data) {
            console.log(data);
            $("#" + btn_refresh).trigger('click');
            $("#" + mdl).modal('toggle');
        }).fail(function () {
            console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
            console.log(arguments);
        });
    }

    function onRefresh() {
        $("#btnCancelarPago").addClass("disabled");
        $("#fAccions").removeClass("hide");
        $("#fResults").removeClass("hide");
        $("#fProgress").addClass("hide");
        $("#frSaldos").addClass("hide");
        $("#dSearchHistory").addClass("hide");
        getRecords("tblContratosDeMutuo", base_url + "index.php/ctrlPrestamos/getRecords", 1, "rContratosMutuo", "msgContratosMutuo", "NO SE ENCONTRARON REGISTROS");
        getDirectorio();
        getUsuarios("IdSolicitante");
        getUsuarios("IdSolicitanteU");
        getUsuarios("IdResponsable");
        getUsuarios("IdResponsableU");

        getFormasDePago("IdFormaDePago");
        getFormasDePago("IdFormaDePagoU");
        getFormasDePago("FormaDePago");

        getCuentas("IdCuentaSaliente");
        getCuentas("IdCuentaSalienteU");
        getCuentas("IdCuentaEntrante");
        getCuentas("IdCuentaEntranteU");
        getCuentas("CuentaEntrante");
    }

    function onCancelPago() {
        if (temp !== undefined && temp !== 0 && temp > 0) {
            $("#btnCancelarPago").find("span").removeClass("fa-times").addClass("fa-refresh fa-spin");
            $("#btnCancelarPago").addClass('disabled')
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/onCancelarPago',
                type: "POST",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PAGO CANCELADO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE PUDO COMPLETAR LA OPERACION, CONSULTE LA CONSOLA PARA MÁS INFORMACIÓN', 'danger');
            }).always(function () {
                setTimeout(function () {
                    $("#btnCancelarPago").removeClass('disabled');
                    $("#btnCancelarPago").find("span").addClass("fa-times").removeClass("fa-refresh fa-spin");
                }, 2500);
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }

    function checkFile() {
        var filename = document.getElementById("upload_file").value;
        var ext = getExt(filename);
        //  alert(filename.files[0].filesize);
        // alert(ext);
        if (ext === "gif" || ext === "jpg" || ext === "png") {
            return true;
        }
        document.getElementById("upload_file").value = '';
        return false;
    }

    function getReporteMutuanteAgrupado(evt, ID) {
        $(evt).removeClass("fa-download");
        $(evt).addClass("fa-cog fa-spin disabled");
        console.log(evt);
        console.log(ID);
        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getReporteMutuanteAgrupado',
            type: "POST",
            data: {
                ID: ID
            }
        }).done(function (data, x, jq) {
            if (parseInt(data) === 0) {
                $("#msgContratosMutuo").html('<p class="text-primary">LA EMPRESA NO TIENE MOVIMIENTOS.</p>');
            } else {
                $("#msgContratosMutuo").html('');
                window.open(data, '_blank');
            }
            $(evt).removeClass("fa-cog fa-spin disabled");
            $(evt).addClass("fa-download");
        }).fail(function (x, y, z) {

            console.log(x, y, z);
        }).always(function () {

        });
    }
    function getPDFByMutuanteAgrupado(evt) {
        $(evt).removeClass("fa-download");
        $(evt).addClass("fa-cog fa-spin disabled");

        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getPDFByMutuanteAgrupado',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (parseInt(data) === 0) {
                $("#msgContratosMutuo").html('<p class="text-primary">LAS EMPRESAS NO TIENEN MOVIMIENTOS.</p>');
            } else {
                $.each(data, function (k, v) {
                    console.log(v);
                    setTimeout(function () {
                        $(evt).addClass("fa-download").removeClass("fa-cog fa-spin disabled");
                        $("#msgContratosMutuo").html('');
                        window.open(v, '_blank');

                    }, 1500);
                });
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('OPERACION COMPLETADA');
        });
    }

    function getZIPPDFByMutuanteAgrupado(evt) {
        $(evt).removeClass("fa-file-zip-o");
        $(evt).addClass("fa-cog fa-spin disabled");

        $.ajax({
            url: base_url + 'index.php/ctrlPrestamos/getZIPPDFByMutuanteAgrupado',
            type: "POST"
                    //            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            if (parseInt(data) === 0) {
                $("#msgContratosMutuo").html('<p class="text-primary">LAS EMPRESAS NO TIENEN MOVIMIENTOS.</p>');
            } else {
                window.open(data, '_blank');
//                $.each(data, function (k, v) {
                //                    console.log(v);
                setTimeout(function () {
                    $(evt).addClass("fa-file-zip-o");
                    $(evt).removeClass("fa-cog fa-spin disabled");
                    $("#msgContratosMutuo").html('');
                }, 1500);
                //                });
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('OPERACION COMPLETADA');
        });
    }
    function onUpdate() {
        var frm = $("#fModificar").serializeArray();
        //       console.log("FORM: "+frm);
        $("#btnUpdate").addClass("hide");
        $("#btnUpdateProgress").removeClass("hide");
        var validation_form = false;
        $.each(frm, function (k, v) {
            console.log(v.value);
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                setTimeout(function () {
                    $("#btnUpdate").removeClass("hide");
                    $("#btnUpdateProgress").addClass("hide");
                }, 900);
                console.log(k, v)
                validation_form = false;
                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#msgUpdateContratosMutuo").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });
        if (validation_form) {
            dataf = new FormData($("#fModificar")[0]);
            console.log(dataf);
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/onUpdateContrato',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: dataf
            }).done(function (data, x, jq) {
                console.log(data)
                $("#mdlModificar").modal('toggle');
                $("#btnRefresh").trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                $("#msgUpdateContratosMutuo").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
            HA OCURRIDO UN ERROR, INTENTE DE NUEVO O MÁS TARDE.</div>');
            }).always(function () {
                console.log('FINISHED ONUPDATE');
                $("#btnUpdate").removeClass("hide");
                $("#btnUpdateProgress").addClass("hide");
            });
        } else {
            console.log('FORMULARIO INVALIDO');
        }
    }

    function getPDFByMutuantesAgrupados(evt) {
        $(evt).removeClass("fa-list-alt");
        $(evt).addClass("fa-cog fa-spin disabled");
        setTimeout(function () {
            $(evt).addClass("fa-list-alt");
            $(evt).removeClass("fa-cog fa-spin disabled");
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/getPDFtest',
                type: "POST"
            }).done(function (data, x, jq) {
                console.log(data)
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log("PDF GENERADO");
            });
        }, 2500);
    }
    function getLeDebeA(evt) {
        $(evt).removeClass("fa-list-alt");
        $(evt).addClass("fa-cog fa-spin disabled");
        setTimeout(function () {
            $(evt).addClass("fa-list-alt");
            $(evt).removeClass("fa-cog fa-spin disabled");
            $.ajax({
                url: base_url + 'index.php/ctrlPrestamos/getLeDebeA',
                type: "POST"
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log("PDF GENERADO");
            });
        }, 2500);
    }
    function getSaldo() {
        var mr = parseFloat($("#MontoAPagar").val());
        var p = parseFloat($("#Pago").val());
        var s = mr - p;
        if (p > mr) {
            $("#msgCalculoDePago").html('<div class="alert alert-dismissible alert-warning">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1 class="text-center">EL MONTO A PAGAR NO DEBE DE SER MAYOR AL MONTO RESTANTE.</h1>' +
                    '</div>');
            $("#txtSaldo").text('$ 0.00');
            $("#Pago").val(0);
        } else {
            $("#txtSaldo").text('$ ' + $.number(s, 2, '.', ', '));
            $("#Saldo").val(s);
        }
    }

    function onCalculateInteres() {
        var c = $("#CantidadPrestada").val();
        var i = $("#Interes").val();
        $("#PagoMensual").val(c * (i / 100))
        $("#PagoMensualT").text('$ ' + $.number(c * (i / 100), 2, '.', ', '));
        $("#PagoAnual").val((c * (i / 100)) * 12);
        $("#PagoAnualT").text('$ ' + $.number((c * (i / 100)) * 12, 2, '.', ', '));

    }
    function onCalculateInteresU() {
        var c = $("#CantidadPrestadaU").val();
        var i = $("#InteresU").val();
        $("#PagoMensualU").val(c * (i / 100))
        $("#PagoAnualU").val((c * (i / 100)) * 12)
        $("#PagoMensualUT").text('$ ' + $.number(c * (i / 100), 2, '.', ', '));
        $("#PagoAnualUT").text('$ ' + $.number((c * (i / 100)) * 12, 2, '.', ', '));
    }
</script>