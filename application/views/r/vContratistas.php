<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
$page_index_back = base_url() . "index.php/ctrlsesion/onLoadData";
$page_index_forward = base_url() . "index.php/ctrlsesion/onLoadData";
$page_index_menu = base_url() . "index.php/ctrlsesion/onLoadData";
?>
<div class="row">	
    <div class="col-md-12 margin-15-top"> 
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row"> 
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo $page_index_back; ?>'>
                        <span class="fa fa-arrow-left faa-horizontal animated"></span>
                    </a>  
                </div>
                <div class="col-md-8 cursor-hand"> 
                    <div class="text-center title-module" onclick="onHideFunctions()">MÓDULO DE CONTROL DE OBRA <span class="fa fa-chevron-up" ></span></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <a href = '<?php echo $page_index_menu; ?>'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div> 
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlContratistas/Contratistas'); ?> 
            <div class="panel-body">
                <fieldset>
                    <div id="btnAccions" align="center">
                        <fieldset>
                            <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlConceptoDePago" > 
                                <button id="btnAdd" type="button" class="btn btn3d btn-lg btn-info fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                                    <span class="fa fa-plus fa-lg"></span>
                                </button>
                            </span>
                            <button id="btnEdit" class="btn btn3d btn-lg btn-success fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="MODIFICAR"  ><span class="fa fa-pencil fa-lg"></span></button>
                            <button id="btnRefresh" class="btn btn3d btn-lg btn-warning fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR"  ><span class="fa fa-refresh fa-lg"></span></button>
                            <button id="btnCancel" class="btn btn3d btn-lg btn-danger fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR"  ><span class="fa fa-times fa-lg"></span></button>
                            <button id="btnReport" class="btn btn3d btn-lg btn-indigo fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="DESTAJO DE TRABAJOS REALIZADOS"  >
                                <span class="fa fa-file-text fa-lg"></span>
                            </button>
                            <button id="btnReportCDD" class="btn btn3d btn-lg btn-a-orange fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="CONCEPTO DE DESTAJO"  >
                                <span class="fa fa-file-text-o fa-lg"></span>
                            </button>

                            <button id="btnPayment" class="btn btn3d btn-lg btn-emerald fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="PAGOS" type="button">
                                <span class="fa fa-money fa-lg"></span>
                            </button> 
                            <button id="btnPaymentMultiple" class="btn btn3d btn-lg btn-dark fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="PAGO MUTIPLE" type="button">
                                <span class="fa fa-money fa-lg"></span>
                            </button> 
                            <button id="btnHistoryPayments" class="btn btn3d btn-lg btn-king-blue fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="HISTORIAL DE PAGOS" type="button">
                                <span class="fa fa-eye fa-lg"></span>
                            </button> 
                            <button id="btnChart" class="btn btn3d btn-lg btn-brown fa-2x"  type="button" 
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="REPORTE GRÁFICO" type="button">
                                <span class="fa fa-bar-chart fa-lg"></span>
                            </button>
                            <!--                            <button id="btnForward" class="btn btn3d btn-lg btn-dark fa-2x"  type="button" 
                                                                data-toggle="tooltip" data-placement="top" title="" data-original-title="AVANZAR" type="button">
                                                            <span class="fa fa-forward fa-lg"></span>
                                                        </button>-->
                        </fieldset>
                        <fieldset>
                            <div class="col-md-4">
                                <label class="">
                                    <input type="checkbox" class="checkbox form-control" id="chkMultiplePago" onchange="onAddCheck()">PAGO MULTIPLE
                                </label>
                            </div>
                        </fieldset>
                        <script>
                            function onAddCheck() {
                                var tbl = $("#tblResultConceptoPago").find("#tblConceptoPago"); 
                                $(tbl).each(function (key, value) { 
//                                    $(this).each(function (k, v) {
//                                        var row = $(v).find("td");
//                                        var status = row[1];
//                                        var sts = status.innerText;
//                                        if (sts === 'CONCLUIDO') {
//                                            row[1].innerHTML = '<span class="label label-dark-emerald">' + sts + '</span>';
//                                        } else if (sts === 'INCOMPLETO') {
//                                            row[1].innerHTML = '<span class="label label-dark-orange">' + sts + '</span>';
//                                        } else {
//                                            row[1].innerHTML = '<span class="label label-blue-sea">' + sts + '</span>';
//                                        }
//                                    }
                                });
                            }
                        </script>
                    </div>

                    <div id="msgConceptoPago" class="col-md-12"></div> 
                    <div id="tblResultConceptoPago"></div> 

                    <div class="col-md-12 hide">
                        <blockquote>
                            <div class="radio hide">
                                <label><input type="radio" value="Contratistas_1" name="ContratistasID" id="ContratistasID" required>REGISTRO DE CONCEPTO DE PAGO
                                </label>
                            </div> 
                            <div class="radio hide">
                                <label>
                                    <input type="radio" value="Contratistas_3" name="ContratistasID" id="ContratistasID" required/>
                                    Registro de pagos
                                </label>
                            </div> 
                            <div class="radio hide">
                                <label>
                                    <input type="radio" value="Contratistas_4" name="ContratistasID" id="ContratistasID" required/>
                                    Reporte global de destajo  de trabajos realizados
                                </label>
                            </div> 
                            <div class="radio hide">
                                <label>
                                    <input type="radio" value="Contratistas_5" name="ContratistasID" id="ContratistasID" required/>
                                    Reporte por concepto de destajo
                                </label>
                            </div> 
                            <div class="radio hide">
                                <label>
                                    <input type="radio" value="Contratistas_6" name="ContratistasID" id="ContratistasID" required/>
                                    Reporte gráfico    </label>
                            </div>  
                        </blockquote>
                    </div>
                    <div class="col-xs-12 col-sm-12 hide" align="left">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>
                    </div>
                </fieldset>
            </div>
            </form>
        </div> 
    </div>  
</div>


<div id="mdlConceptoDePago" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel">REGISTRO DE CONCEPTO DE PAGO</h2>
            </div>
            <form id="frmRConceptos"> 
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-4"> 
                            <label for="1" class="control-label">Desarrollo</label> 
                            <select class="form-control" id="Ndesarrollo" name="Ndesarrollo" >
                                <option value="0">Selecciona</option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="1" class="control-label">Concepto de pago</label>
                            <select class="form-control" id="ConceptoP" name="ConceptoP"  required="required">
                                <option value="">Selecciona</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="2" class="control-label">Contratista</label> 
                            <select class="form-control" id="Contratistas" name="Contratistas"  required="required">
                                <option value="">Selecciona</option> 
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="1" class="control-label">Precio unitario del trabajo</label> 
                            <input   type="number" step="0.01" class="form-control" name="Precio" id="Precio" required="required">
                        </div>
                        <div class="col-md-4">
                            <label for="1" class="control-label">Número total de trabajos a realizar</label> 
                            <input  type="number" step="0.01" class="form-control" name="TotalTrabajos" id="TotalTrabajos" required>
                        </div>

                        <div class="col-md-4" id="ResultadoMonto">
                            <label for="2" class="control-label">Monto total por trabajos a realizar</label> 
                            <input   type="number" step="0.01" class="form-control" name="MontoTrabajos" id="MontoTrabajos" >
                        </div>

                        <div class="col-md-4"> 
                            <label for="1" class="control-label">Fecha de inicio de trabajos</label>
                            <input type="text" class="form-control" name="Inicio" id="datepicker"  value=""  data-provide="datepicker" data-date-format="dd/mm/yyyy" required>
                        </div>
                        <div class="col-md-4">
                            <label for="2" class="control-label">Fecha de término de trabajos</label> 
                            <input  value="" data-provide="datepicker" data-date-format="dd/mm/yyyy" type="text" class="form-control" name="Termino" id="datepicker2" >
                        </div>
                        <div class="col-md-4 hide" id="ResultadoLotes">
                            <label for="">LOTES</label>
                            <select class="form-control" size="5" multiple="multiple" id="LotesM[]" name="LotesM[]" required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($Lotes as $Lotes1) { ?> 
                                    <option value="<?php echo $Lotes1->ID; ?>"><?php echo "Lote " . $Lotes1->Numero; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                        <div id="msgAddedRecord" class="col-md-12">
                        </div>
                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
                <button id="btnAddRecordContinue" type="button" class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR Y CONTINUAR"><span class="fa fa-check-square fa-2x"></span></button>
                <button id="btnAddRecordProgressContinue" type="button" class="btn btn-info btn-lg disabled hide">
                    <span class="fa fa-cog fa-spin fa-2x"></span></button>

                <button id="btnAddRecord" type="button" class="btn btn-success btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"><span class="fa fa-check fa-2x"></span></button>
                <button id="btnAddRecordProgress" type="button" class="btn btn-success btn-lg disabled hide">
                    <span class="fa fa-cog fa-spin fa-2x"></span></button>

            </div>
        </div>
    </div>
</div>


<div id="mdlConceptoDePagoU" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">REGISTRO DE CONCEPTO DE PAGO</h4>
            </div>
            <form id="frmRConceptosU"> 
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4"> 
                            <label for="1" class="control-label">Desarrollo</label> 
                            <select class="form-control" id="NdesarrolloU" name="NdesarrolloU" >
                                <option value="0">Selecciona</option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="1" class="control-label">Concepto de pago</label>
                            <select class="form-control" id="ConceptoPU" name="ConceptoPU"  required="required">
                                <option value="">Selecciona</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="2" class="control-label">Contratista</label> 
                            <select class="form-control" id="ContratistasU" name="ContratistasU"  required="required">
                                <option value="">Selecciona</option> 
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="1" class="control-label">Precio unitario del trabajo</label> 
                            <input   type="number" step="0.01" class="form-control" name="PrecioU" id="PrecioU" required="required">
                        </div>
                        <div class="col-md-4">
                            <label for="1" class="control-label">Número total de trabajos a realizar</label> 
                            <input  type="number" step="0.01" class="form-control" name="TotalTrabajosU" id="TotalTrabajosU" required>
                        </div>

                        <div class="col-md-4" id="ResultadoMontoU">
                            <label for="2" class="control-label">Monto total por trabajos a realizar</label> 
                            <input   type="number" step="0.01" class="form-control" name="MontoTrabajosU" id="MontoTrabajosU" >
                        </div>

                        <div class="col-md-4"> 
                            <label for="1" class="control-label">Fecha de inicio de trabajos</label>
                            <input type="text" class="form-control" name="InicioU" id="InicioU"  value=""  data-provide="datepicker" data-date-format="dd/mm/yyyy" required>
                        </div>
                        <div class="col-md-4">
                            <label for="2" class="control-label">Fecha de término de trabajos</label> 
                            <input  value="" data-provide="datepicker" data-date-format="dd/mm/yyyy" type="text" class="form-control" name="TerminoU" id="TerminoU" >
                        </div> 
                        <div id="msgUpdatedRecord" class="col-md-12">
                        </div>
                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
                <button id="btnUpdateRecord" type="button" class="btn btn-gold btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="MODIFICAR"><span class="fa fa-refresh fa-2x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlPagos" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title" id="">REGISTRO DE PAGOS</h1>
            </div>
            <form id="frmConceptPayment"> 
                <div class="modal-body">
                    <fieldset>
                        <div class=" col-md-12" align="right" id="msgAddPaymentHead">
                        </div>
                        <div class="col-md-12 hide">
                            <label>ID</label>
                            <input id="IDRP" name="IDRP" type="text" class="form-control" placeholder="" >
                        </div>
                        <div class="col-md-12" >
                            <h2 class="text-center" id="TDesarrollo">SIN DATOS</h2>
                            <hr>
                        </div>
                        <div class="col-md-4 hide">
                            <label for="1" class="control-label">Desarrollo</label>
                            <select class="form-control" id="NdesarrolloRP" name="NdesarrolloRP">
                                <option value="0">Selecciona</option> 
                            </select>
                        </div>
                        <div class="col-md-6" id="">
                            <label for="2" class="control-label">Concepto de pago</label>
                            <select class="form-control hide" id="ConceptoPRP" name="ConceptoPRP" >
                                <option value="0">Selecciona</option>
                            </select>
                            <br>
                            <label class="lead">
                                ContratistasRP
                            </label>
                        </div> 
                        <div class="col-md-6" id="">	 
                            <label for="2" class="control-label">Contratista</label> 
                            <select class="form-control hide" id="ContratistasRP" name="ContratistasRP" >
                                <option value="0">Selecciona</option>
                            </select>
                            <br>
                            <label class="lead">
                                ContratistasRP
                            </label>
                        </div>           
                        <div id="ResultadoContratista" class="">

                            <div class="col-md-4" id=""> 
                                <br>
                                <label for="1" class="control-label">Precio unitario del trabajo</label>
                                <input  style="text-transform:uppercase" onchange="" readonly="" type="number" step="0.01" class="form-control" name="PrecioRP" id="PrecioRP" required>
                            </div> 
                            <div class="col-md-4"> 
                                <label for="1" class="control-label">Número total de trabajos a realizar</label>
                                <input style="text-transform:uppercase"  onchange="" readonly="" type="number" step="0.01" class="form-control" name="TotalTrabajosRP" id="TotalTrabajosRP" required>
                            </div>
                            <div class="col-md-4">	 
                                <br>
                                <label for="2" class="control-label">Monto(T)</label> 
                                <input style="text-transform:uppercase" type="text" class="form-control mountest" name="MontoTrabajosRP" readonly="" id="MontoTrabajosRP" >
                            </div> 

                            <div class="col-md-8 ">	 
                                <label for="1" class="control-label">Número total de trabajos realizados hasta la fecha</label> 
                                <input style="text-transform:uppercase" readonly="" onchange="onCheckNumeroDeTrabajosARestar()" type="number" step="0.01" class="form-control" name="TrabajosRealizadosRP" id="TrabajosRealizadosRP" required>
                            </div> 
                            <script>

                            </script>
                            <div class="col-md-4">	 
                                <label for="2" class="control-label">Monto (TR)</label> 
                                <input style="text-transform:uppercase" type="text" step="0.01" class="form-control mountest" readonly=""  name="MontoTrabajosRealizadosRP" id="MontoTrabajosRealizadosRP" >
                            </div> 
                            <div class="col-md-8 ">	 
                                <label for="1" class="control-label">Número total de trabajos pendientes</label> 
                                <input style="text-transform:uppercase" readonly=""  onchange="" type="number" step="0.01" class="form-control" name="TrabajosPendientesRP" id="TrabajosPendientesRP" required>
                            </div> 
                            <div class="col-md-4 ">	 
                                <label for="2" class="control-label">Monto (TP)</label> 
                                <input style="text-transform:uppercase" onkeyup=""  type="text"  class="form-control mountest" readonly=""  name="MontoTrabajosPendientesRP" id="MontoTrabajosPendientesRP" >
                            </div> 
                            <div class="col-md-12">
                                <label class="checkbox">
                                    <input type="checkbox" class="form-control" id="chkMismoImporteYCantidad" name="chkMismoImporteYCantidad"> MISMO PRECIO Y CANTIDAD
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label class="checkbox">
                                    <input type="checkbox" class="form-control" id="chkCeros" name="chkCeros"> CERO TRABAJOS
                                </label>
                            </div>
                            <div class="col-md-4 ">	 
                                <label for="1" class="control-label">Número de trabajos a pagar</label> 
                                <input style="text-transform:uppercase" onchange=" onChangeNumeroDeTrabajosAPagar()" type="number" step="0.01" class="form-control" name="TrabajosaPagarRP" id="TrabajosaPagarRP" required>
                            </div> 
                            <div class="col-md-4 ">	 
                                <label for="2" class="control-label">Precio al que se pagarán</label> 
                                <input style="text-transform:uppercase"  onchange="onChangeMount('PrecioPagarRP', 'TrabajosaPagarRP', 'MontoPagoRP')"  type="number" step="0.01" class="form-control" name="PrecioPagarRP" id="PrecioPagarRP" >
                            </div> 
                            <div class="col-md-4 "> 
                                <label for="1" class="control-label">Monto del pago</label> 
                                <input style="text-transform:uppercase" onkeyup="" type="text" step="0.01" class="form-control mountest"  readonly="" name="MontoPagoRP" id="MontoPagoRP" required>
                            </div> 
                            <div class="col-md-12" id="msgAddPaymentCalculate">

                            </div>
                            <div class="col-md-4 ">	 
                                <label for="2" class="control-label">Fecha del pago</label> 
                                <input   type="text" class="form-control" name="FechaPago" id="FechaPago"  data-provide="datepickerRP" data-date-format="dd/mm/yyyy"  value="<?php echo date("d/m/Y") ?>">
                            </div> 
                            <div class="col-md-4 ">	
                                <label for="1" class="control-label">Forma de pago</label>   
                                <select class="form-control " id="FormaPagoRP" name="FormaPagoRP" >
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-md-4">	 
                                <label for="2" class="control-label">Tipo de comprobante de pago</label>
                                <select class="form-control" id="ComprobanteRP" name="ComprobanteRP" >
                                </select>
                            </div>
                            <div class="col-md-4">	 
                                <label for="1" class="control-label">Fecha de inicio de trabajos</label>
                                <input type="text" class="form-control" name="FechaInicioTRRP" id="FechaInicioTRRP"   data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            </div>
                            <div class="col-md-4">	
                                <label for="2" class="control-label">Fecha de término de trabajos</label>
                                <input  type="text" value="" class="form-control" name="FechaTerminoTrabajosRP" id="FechaTerminoTrabajosRP"  data-provide="datepicker" data-date-format="dd/mm/yyyy" />
                            </div>
                            <div class="col-md-4">	 
                                <label for="2" class="control-label">Nombre de quien realiza el pago</label> 
                                <select class="form-control" id="Paga" name="Paga" >
                                    <option value=""></option>
                                    <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                        <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
                                    <?php } ?>
                                </select> 
                            </div>
                            <div class="col-md-12">	
                                <label for="2" class="control-label">Observaciones</label>
                                <input style="text-transform:uppercase" onkeyup=""  type="text" class="form-control" name="Observaciones" id="Observaciones">
                            </div> 
                            <div class=" col-md-12" align="right" id="msgPaymentRegister">
                            </div>
                            <div id="rPaymentRegister">

                            </div>
                            <div class=" col-md-12" align="right" id="msgAddPayment">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
                <button id="btnAddPayment" type="button" class="btn btn-success btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"><span class="fa fa-check fa-2x"></span></button>
                <button id="btnAddPaymentProgress" type="button" class="btn btn-success btn-lg disabled hide">
                    <span class="fa fa-cog fa-spin fa-2x"></span></button>

            </div>
        </div>
    </div>
</div>

<div id="mdlHistorialDePagos" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">HISTORIAL DE PAGOS POR CONCEPTO</h1>
            </div>  
            <div class="modal-body">
                <fieldset> 
                    <div class=" col-md-12" align="right" id="msgPaymentHistory">
                    </div>
                    <div id="rPaymentHistory" class=" col-md-12">

                    </div>
                </fieldset>
            </div> 
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
            </div>
        </div>
    </div>
</div>

<div id="mdlDestajosTrabajosRealizados" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title"> REPORTE GLOBAL DE DESTAJO DE TRABAJOS REALIZADOS</h1>
            </div>  
            <form id="fDestajosTrabajosRealizados">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-5"> 
                            <label for="1" class="control-label">Desarrollo</label>
                            <select class="form-control" id="NdesarrolloRGDDDTR" name="NdesarrolloRGDDDTR" >
                                <option value="0">Selecciona</option>
                            </select>
                        </div>
                        <div class="col-md-5" id="ResultadoDesarrollo">
                            <label for="2" class="control-label">Concepto de pago</label>
                            <select class="form-control" id="ConceptoPRGDDDTR" name="ConceptoPRGDDDTR" >
                                <option value="0">Selecciona</option>
                            </select>
                        </div>
                        <div id="ConceptoProgress" class="col-md-5 text-center hide" align="center">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-lg btn-emerald btn-lg disabled" type="button" id="btnSearch" name="btnSearch" value="<?php echo $indice; ?>" ><span class="fa fa-search fa-3x"></span></button>
                        </div>
                        <div class="col-md-12">
                            <label class="label label-info">*SOLO SE MUESTRAN MOVIMIENTOS CON PAGOS</label>
                            <br>
                        </div>
                        <div class="col-md-12 table-responsive" id="tblResultado"> 
                        </div>
                        <div id="tblResultadoProgress" class="col-md-12 text-center hide" align="center">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                        </div>
                    </fieldset>
                </div> 
            </form>
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
            </div>
        </div>
    </div>
</div>

<div id="mdlPorConceptoDeDestajo" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title"> REPORTE POR CONCEPTO DE DESTAJO</h1>
            </div>  
            <form id="fDestajosTrabajosRealizados">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-4"> 
                            <label for="1" class="control-label">CONCEPTO DEL TRABAJO</label>
                            <select class="form-control" id="cmbConceptoTrabajo" name="cmbConceptoTrabajo" onchange="getReporteConceptoDestajo()">
                                <option value="0">Selecciona</option>
                            </select>
                        </div>
                        <div class="col-md-4" id="">
                            <label for="2" class="control-label">FECHA DE INICIO</label> 
                            <input type="text" class="form-control" name="FechaInicioCDD" id="FechaInicioCDD"   data-provide="datepicker" data-date-format="dd/mm/yyyy" onchange="getReporteConceptoDestajo()">
                        </div>
                        <div class="col-md-4" id="">
                            <label for="2" class="control-label">FECHA DE TÉRMINO</label> 
                            <input type="text" class="form-control" name="FechaTerminoCDD" id="FechaTerminoCDD"   data-provide="datepicker" data-date-format="dd/mm/yyyy" onchange="getReporteConceptoDestajo()">
                        </div>
                        <div class="col-md-12">
                            <label class="label label-info">*SOLO SE MUESTRAN MOVIMIENTOS CON PAGOS</label>
                            <br>
                        </div>
                        <div class="col-md-12 table-responsive" id="tblResultadoDestajo"> 
                        </div>
                        <div id="tblResultadoDestajoProgress" class="col-md-12 text-center hide" align="center">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                        </div>
                    </fieldset>
                </div> 
            </form>
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
            </div>
        </div>
    </div>
</div>

<div id="mdlGrafico" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title"> REPORTE GRÁFICO</h1>
            </div>   

            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12">
                        <h3 class="text-center">GRÁFICO DE COMPORTAMIENTO</h3>
                        <hr>
                    </div>
                    <div id="GComportamiento" align="center" style="width: 900px; height: 500px;">
                        <span class="fa fa-spinner fa-5x fa-pulse"></span>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12">
                        <h3 class="text-center">GRÁFICO DE TRABAJOS</h3>
                        <hr>
                    </div>
                    <div id="GTrabajos" align="center">
                        <span class="fa fa-spinner fa-5x fa-pulse"></span>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12">
                        <h3 class="text-center">GRÁFICO POR MONTOS</h3>
                        <hr>
                    </div>
                    <div id="GMontos" align="center">
                        <span class="fa fa-spinner fa-5x fa-pulse"></span>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">   
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button> 
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        getProyectos(["Ndesarrollo", "NdesarrolloU", "NdesarrolloRP", "NdesarrolloRGDDDTR"]);
        getContratistasConceptos(["ConceptoP", "ConceptoPU", "ConceptoPRP", "cmbConceptoTrabajo"]);
        getContratistas(["Contratistas", "ContratistasU", "ContratistasRP"]);
        getFormasDePago();
        getTipoComprobante();
        getData("tblConceptoPago", base_url + "index.php/ctrlContratistas/getConceptosDePago", "tblResultConceptoPago", "msgConceptoPago", "NO SE ENCONTRARON REGISTROS");
        getOptions('index.php/ctrlContratistas/getConceptosEnUso', "cmbConceptoTrabajo", false, {});
        $("#btnPayment").click(function () {
            onBeforePayment();
        });
        $("#btnAddPayment").click(function () {
            onAddPayment();
        });
        $("#btnHistoryPayments").click(function () {
            getData("tblHistorialDePagos", base_url + "index.php/ctrlContratistas/getHistorialDePagos", "tblResultConceptoPago", "msgConceptoPago", "NO SE ENCONTRARON REGISTROS");
        });
        $("#chkMismoImporteYCantidad").change(function () {
            $("#chkCeros")[0].checked = false;
            if ($("#chkMismoImporteYCantidad")[0].checked) {
                $("#TrabajosaPagarRP").attr("readonly", true);
                var precio = $("#PrecioRP").val();
                var num_tr = (parseFloat($("#TrabajosRealizadosRP").val()) > 0) ?
                        parseFloat($("#TrabajosRealizadosRP").val()) :
                        (parseFloat($("#TrabajosPendientesRP").val()) > 0) ?
                        parseFloat($("#TrabajosRealizadosRP").val()) +
                        parseFloat($("#TrabajosPendientesRP").val()) :
                        parseFloat($("#TrabajosPendientesRP").val());
                var monto_t = $("#MontoTrabajosRP").val();
                $("#TrabajosaPagarRP").val((parseFloat($("#TrabajosPendientesRP").val()) > 0) ?
                        parseFloat($("#TrabajosPendientesRP").val()) :
                        parseFloat($("#TrabajosPendientesRP").val()));
                $("#MontoTrabajosRealizadosRP").val(monto_t);
                var num_tra_a_pagar = num_trr + num_trp;
                $("#TrabajosRealizadosRP").val(num_tra_a_pagar);
                $("#TrabajosPendientesRP").val(0);
                $("#MontoTrabajosPendientesRP").val(0);
                $("#PrecioPagarRP").val(precio);
                $("#MontoPagoRP").val(monto_t);
            } else {
                var ttt = num_trr + num_trp;
                if (ttt === parseFloat($("#TotalTrabajosRP").val())) {
                    console.log('LOS TOTALES SON IGUALES');
                } else {
                    console.log('LOS TOTALES NO SON IGUALES ' + ttt);
                }
                $("#TrabajosaPagarRP").attr("readonly", false);
                $("#TrabajosRealizadosRP").val(num_trr);
                $("#TrabajosPendientesRP").val(num_trp);
                var mtp = parseFloat($("#PrecioRP").val()) * parseFloat($("#TrabajosPendientesRP").val());
                $("#MontoTrabajosPendientesRP").val(mtp.toFixed(4));
                var mtr = parseFloat(num_trr) * parseFloat($("#PrecioRP").val());
                $("#MontoTrabajosRealizadosRP").val(mtr.toFixed(4));
                $("#TrabajosaPagarRP").val(0);
                $("#MontoPagoRP").val(0);
            }
        });
        $("#chkCeros").change(function () {
            $("#chkMismoImporteYCantidad")[0].checked = false;
            if ($("#chkCeros")[0].checked) {
                $("#TrabajosaPagarRP").attr("readonly", true);
                var precio = $("#PrecioRP").val();
                $("#TrabajosaPagarRP").val(0);
                $("#MontoTrabajosRealizadosRP").val(0);
                $("#TrabajosRealizadosRP").val(0);
                $("#PrecioPagarRP").val(precio);
                $("#MontoPagoRP").val(0);
            } else {
                var ttt = num_trr + num_trp;
                if (ttt === parseFloat($("#TotalTrabajosRP").val())) {
                    console.log('LOS TOTALES SON IGUALES');
                } else {
                    console.log('LOS TOTALES NO SON IGUALES ' + ttt);
                }
                $("#TrabajosaPagarRP").attr("readonly", false);
                $("#TrabajosRealizadosRP").val(num_trr);
                $("#TrabajosPendientesRP").val(num_trp);
                var mtp = parseFloat($("#PrecioRP").val()) * parseFloat($("#TrabajosPendientesRP").val());
                $("#MontoTrabajosPendientesRP").val(mtp.toFixed(4));
                var mtr = parseFloat(num_trr) * parseFloat($("#PrecioRP").val());
                $("#MontoTrabajosRealizadosRP").val(mtr.toFixed(4));
                $("#TrabajosaPagarRP").val(0);
                $("#MontoPagoRP").val(0);
            }
        });
        $("#Precio").keyup(function () {
            var n = parseFloat($("#TotalTrabajos").val()) * parseFloat($("#Precio").val());
            $("#MontoTrabajos").val(n.toFixed(2));
        });
        $("#PrecioU").keyup(function () {
            var n = parseFloat($("#TotalTrabajosU").val()) * parseFloat($("#PrecioU").val());
            $("#MontoTrabajosU").val(n.toFixed(2));
        });
        $("#TotalTrabajos").keyup(function () {
            var n = parseFloat($("#TotalTrabajos").val()) * parseFloat($("#Precio").val());
            $("#MontoTrabajos").val(n.toFixed(2));
        });
        $("#TotalTrabajosU").keyup(function () {
            var n = parseFloat($("#TotalTrabajosU").val()) * parseFloat($("#PrecioU").val());
            $("#MontoTrabajosU").val(n.toFixed(2));
        });
        $("#btnAddRecord").click(function () {
            onAddRecord();
        });
        $("#btnEdit").click(function () {
            if (temp !== undefined && temp > 0) {
                $("#mdlConceptoDePagoU").modal('toggle');
                $.ajax({
                    url: base_url + 'index.php/ctrlContratistas/getConceptosDePagoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {

                    var dtm = data[0];
                    if (dtm.ESTATUS !== 'ACTIVO') {
                        $("#mdlConceptoDePagoU").find("#btnUpdateRecord").addClass("disabled");
                    }
                    var f = $("#frmRConceptosU");
                    f.find("#ID").val(dtm.ID);
                    f.find("#NdesarrolloU").val(dtm.IDPROYECTO);
                    f.find("#NdesarrolloU").select2("val", dtm.IDPROYECTO);
                    f.find("#ConceptoPU").val(dtm.IDCONCEPTO);
                    f.find("#ConceptoPU").select2("val", dtm.IDCONCEPTO);
                    f.find("#ContratistasU").val(dtm.IDCONTRATISTA);
                    f.find("#ContratistasU").select2("val", dtm.IDCONTRATISTA);
                    f.find("#PrecioU").val(dtm.PRECIO);
                    f.find("#TotalTrabajosU").val(dtm["# DE TRABAJOS"]);
                    f.find("#MontoTrabajosU").val(dtm["MONTO POR TRABAJOS"]);
                    f.find("#InicioU").val(dtm["INICIO DE TRABAJOS"]);
                    f.find("#TerminoU").val(dtm["TERMINO DE TRABAJOS"]);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('OPERACION COMPLETADA');
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
        });
        $("#btnUpdateRecord").click(function () {
            $("#btnUpdateRecord").find("span").removeClass("fa-refresh").addClass("fa-cog fa-spin");
            $("#btnUpdateRecord").addClass("disabled");
            var frm = $("#frmRConceptosU").serializeArray();
            var validation_form = false;
            $.each(frm, function (k, v) {
                if (v.value.length >= 1) {
                    validation_form = true;
                } else {
                    console.log(k, v);
                    validation_form = false;
                    console.log($("#" + v.name).parent().find("label")[0].innerText);
                    $("#msgUpdatedRecord").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                    return false;
                }
            });
            if (validation_form) {
                $.ajax({
                    url: base_url + 'index.php/ctrlContratistas/onUpdateConcepto',
                    type: "POST",
                    data: $("#frmRConceptosU").serialize()
                }).done(function (data, x, jq) {

                    $("#mdlConceptoDePagoU").modal('toggle');
                    $("#btnRefresh").trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('OPERACION COMPLETADA: UPDATE CONCEPTO');
                    setTimeout(function () {
                        $("#btnUpdateRecord").find("span").addClass("fa-refresh").removeClass("fa-cog fa-spin");
                        $("#btnUpdateRecord").removeClass("disabled");
                    }, 2500);
                });
            } else {
                setTimeout(function () {
                    $("#btnUpdateRecord").find("span").addClass("fa-refresh").removeClass("fa-cog fa-spin");
                    $("#btnUpdateRecord").removeClass("disabled");
                }, 2500);
            }
        });
        $("#btnReport").click(function () {
            $("#mdlDestajosTrabajosRealizados").modal('toggle');
        });
        $("#btnReportCDD").click(function () {
            $("#mdlPorConceptoDeDestajo").modal('toggle');
        });
        $("#btnAddRecordContinue").click(function () {
            onAddRecordContinue();
        });
        $("#btnRefresh").click(function () {
            getData("tblConceptoPago", base_url + "index.php/ctrlContratistas/getConceptosDePago", "tblResultConceptoPago", "msgConceptoPago", "NO SE ENCONTRARON REGISTROS");
        });
        $("#btnChart").click(function () {
            $("#mdlGrafico").modal('toggle');
            setTimeout(function () {
                getChart();
            }, 2500);
        });
        $('#mdlPagos').on('shown.bs.modal', function () {
            trare = $("#TrabajosRealizadosRP").val();
            trape = $("#TrabajosPendientesRP").val();
        });
        $('#mdlPagos').on('hidden.bs.modal', function (e) {
            $("#frmConceptPayment")[0].reset();
            $("#FormaPagoRP").select2("val", "");
            $("#ComprobanteRP").select2("val", "");
            $("#Paga").select2("val", "");
            $("#ComprobanteRP").select2("val", "");
            $("#btnAddPayment").removeClass("hide");
            $("#msgAddPaymentHead").html('<br><div class="alert alert-dismissible alert-info">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>UNA VEZ HECHO EL PAGO, EL CONCEPTO QUEDARÁ CONCLUIDO</div>');
        });
        $('#mdlConceptoDePago').on('hidden.bs.modal', function (e) {
            $('#mdlConceptoDePago form select').select2("val", "");
            $('#mdlConceptoDePago form input').val("");
        });
        $('#mdlConceptoDePagoU').on('hidden.bs.modal', function (e) {
            $('#mdlConceptoDePagoU form select').select2("val", "");
            $('#mdlConceptoDePagoU form input').val("");
            $("#mdlConceptoDePagoU").find("#btnUpdateRecord").removeClass("disabled");
        });
        $('#mdlDestajosTrabajosRealizados').on('hidden.bs.modal', function (e) {
            $("#tblResultado").html("");
            $('#fDestajosTrabajosRealizados select').select2("val", "");
        });
        $("#NdesarrolloRGDDDTR").on('change', function () {
            if ($("#NdesarrolloRGDDDTR").val() !== undefined) {
                $("#ResultadoDesarrollo").addClass("hide");
                $("#ConceptoProgress").removeClass("hide");
                $.ajax({
                    url: base_url + 'index.php/ctrlContratistas/getConceptos',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: $(this).val()
                    }
                }).done(function (data) {

                    if (parseInt === 0) {
                        $.notify({
                            title: '<span class="fa fa-exclamation fa-lg"></span>',
                            message: 'ERROR! EL DESARROLLO ES INVÁLIDO'
                        }, {
                            type: 'danger'
                        }, {
                            animate: {
                                enter: 'animated bounceIn',
                                exit: 'animated bounceOut'
                            }
                        });
                    } else {

                        var options = "<option value=''></option>";
                        $.each(data, function (k, v) {
                            options = options + '<option value="' + v.ID + '">' + v.CONCEPTO + '</option>';
                        });
                        $("#ConceptoPRGDDDTR").html(options);
                        $.notify({
                            title: '<span class="fa fa-check fa-lg"></span>',
                            message: 'EXITO! DATOS ENCONTRADOS'
                        }, {
                            type: 'success'
                        }, {
                            animate: {
                                enter: 'animated bounceIn',
                                exit: 'animated bounceOut'
                            }
                        });
                        $("#ResultadoDesarrollo").removeClass("hide");
                        $("#ConceptoProgress").addClass("hide");
                        $("#btnSearch").removeClass("disabled");
                    }
                }).fail(function (x, y, z) {
                    console.log(x.responseText);
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'ERROR! EL DESARROLLO ES INVÁLIDO' + x.responseText
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                });
            }
        });
        $("#btnSearch").click(function () {
            getReporteGlobalDeDestajoTR();
        });
    });
    function onAddPayment() {
        var frm = $("#frmConceptPayment").serializeArray();
        $("#btnAddPayment").addClass("hide");
        $("#btnAddPaymentProgress").removeClass("hide");
        var validation_form = false;
        $.each(frm, function (k, v) {
            if (v.value.length >= 1) {
                validation_form = true;
            } else {
                setTimeout(function () {
                    $("#btnAddPayment").removeClass("hide");
                    $("#btnAddPaymentProgress").addClass("hide");
                }, 900);
                console.log(k, v);
                validation_form = false;
                console.log($("#" + v.name).parent().find("label")[0].innerText);
                $("#msgAddPayment").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
LOS SIGUIENTES CAMPOS NO SON VÁLIDOS:<br> ' + $("#" + v.name).parent().find("label")[0].innerText + '</div>');
                return false;
            }
        });
        if (validation_form) {
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/onAddPayment',
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                $("#mdlPagos").modal('toggle');
                $("#btnRefresh").trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                $("#msgAddPayment").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
HA OCURRIDO UN ERROR, INTENTE DE NUEVO O MÁS TARDE.</div>');
            }).always(function () {
                console.log('FINISHED ONADDPAYMENT');
                $("#btnAddPayment").removeClass("hide");
                $("#btnAddPaymentProgress").addClass("hide");
            });
        } else {
            console.log('FORMULARIO INVALIDO');
        }
    }

    function onBeforePayment() {
        var btnPayment = $("#btnPayment");
        btnPayment.addClass("disabled");
        btnPayment.find("span").removeClass("fa-money").addClass("fa-cog fa-spin");
        $("#TrabajosaPagarRP").attr("readonly", false);
        if (temp !== undefined && temp !== 0 && temp > 0) {
            $("#IDRP").val(temp);
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/getConceptosDePagoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                if (dtm.ESTATUS === 'CONCLUIDO') {
                    console.log(data);
                    console.log('ESTATUS: ' + dtm.ESTATUS);
                    $("#btnAddPayment").addClass("hide");
                    $("#msgAddPaymentHead").html('<br><div class="alert alert-dismissible alert-success">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
<h2>EL CONCEPTO YA ESTA CONCLUIDO</h2></div>');
                    getHistorialDePagos("tblHistorialDePagosByID", base_url + "index.php/ctrlContratistas/getHistorialDePagosByID", "rPaymentHistory", "msgHistorialDePagos", "NO SE ENCONTRARON REGISTROS");
                    $("#mdlHistorialDePagos").modal('toggle');
                } else {
                    console.log(data);
                    $("#btnAddPayment").removeClass("hide");
                    $("#TDesarrollo").text(dtm.PROYECTO);
                    $("#NdesarrolloRP").select2("val", dtm.IDPROYECTO);
                    $("#ConceptoPRP").select2("val", dtm.IDCONCEPTO);
                    $("#ConceptoPRP").parent().find("label.lead")[0].innerHTML = '<h4>' + dtm.CONCEPTO + '</h4>';
                    $("#ContratistasRP").select2("val", dtm.IDCONTRATISTA);
                    $("#ContratistasRP").parent().find("label.lead")[0].innerHTML = '<h4>' + dtm.CONTRATISTA + '</h4>';
                    $("#PrecioRP").val(dtm.PRECIO);
                    $("#TotalTrabajosRP").val(dtm["# DE TRABAJOS"]);
                    $("#MontoTrabajosRP").val(dtm["MONTO POR TRABAJOS"]);
                    var trabajos_pendientes = parseFloat(dtm["# DE TRABAJOS"]) - parseFloat(dtm.TrabajosRealizados);
                    num_trr = parseFloat(dtm.TrabajosRealizados);
                    num_trp = parseFloat(trabajos_pendientes.toFixed(10));
                    $("#TrabajosRealizadosRP").val(dtm.TrabajosRealizados);
                    $("#MontoTrabajosRealizadosRP").val(parseFloat(dtm.TrabajosRealizados) * ($("#PrecioRP").val() === 0 ? 1 : $("#PrecioRP").val()));
                    $("#TrabajosPendientesRP").val(trabajos_pendientes.toFixed(10));
                    var mtprp = parseFloat($("#TrabajosPendientesRP").val()) * ($("#PrecioRP").val() === 0 ? 1 : $("#PrecioRP").val());
                    $("#MontoTrabajosPendientesRP").val(mtprp.toFixed(4));
                    $("#TrabajosaPagarRP").val(parseFloat($("#TotalTrabajosRP").val()) - parseFloat($("#TrabajosRealizadosRP").val()));
                    $("#TrabajosaPagarRP").val("");
                    $("#PrecioPagarRP").val(dtm.PRECIO);
                    var mprp = $("#TrabajosaPagarRP").val() * $("#PrecioRP").val();
                    $("#MontoPagoRP").val(mprp.toFixed(10));
                    $("#FechaInicioTRRP").val(dtm["INICIO DE TRABAJOS"]);
                    $("#FechaTerminoTrabajosRP").val(dtm["TERMINO DE TRABAJOS"]);
                    trare = $("#TrabajosRealizadosRP").val();
                    trape = $("#TrabajosPendientesRP").val();
                    getHistorialDePagos("tblHistorialDePagosByID", base_url + "index.php/ctrlContratistas/getHistorialDePagosByID", "rPaymentRegister", "msgPaymentRegister", "NO SE ENCONTRARON REGISTROS");
                    $("#mdlPagos").modal('toggle');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('FINISHED');
                $("#btnPayment").removeClass("disabled").find("span").removeClass("fa-spin fa-cog").addClass("fa-money");
            });
        } else {
            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'DEBE DE SELECCIONAR UN REGISTRO.'
            }, {
                type: 'danger'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $("#btnPayment").removeClass("disabled");
            $("#btnPayment").find("span").removeClass("fa-spin fa-cog").addClass("fa-money");
        }
    }

    function onAddRecord() {
        $("#btnAddRecord").addClass("hide");
        $("#btnAddRecordProgress").removeClass("hide");
        var frm = $("#frmRConceptos").serialize();
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/ContratistasRConcepto',
            type: "POST",
            data: frm
        }).done(function (data) {

            $("#mdlConceptoDePago").modal('toggle');
            $("#btnAddRecord").removeClass("hide");
            $("#btnAddRecordProgress").addClass("hide");
            $("#msgAddedRecord").html('<div class="alert alert-dismissible alert-success">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1 class="text-center">EXITO! REGISTRO GUARDADO</h1>' +
                    '</div>');
            $.notify({
                title: '<span class="fa fa-check fa-lg"></span>',
                message: 'REGISTRO GUARDADO...'
            }, {
                type: 'success'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $("#frmRConceptos")[0].reset();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
        $("#btnRefresh").trigger('click');
    }

    function onAddRecordContinue() {

        $("#btnAddRecordContinue").addClass("hide");
        $("#btnAddRecordContinueProgress").removeClass("hide");
        var frm = $("#frmRConceptos").serialize();
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/ContratistasRConcepto',
            type: "POST",
            data: frm
        }).done(function (data) {

            $("#btnAddRecordContinue").removeClass("hide");
            $("#btnAddRecordContinueProgress").addClass("hide");
            $("#msgAddedRecord").html('<div class="alert alert-dismissible alert-success">' +
                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<h1 class="text-center">EXITO! REGISTRO GUARDADO</h1>' +
                    '</div>');
            $.notify({
                title: '<span class="fa fa-check fa-lg"></span>',
                message: 'REGISTRO GUARDADO...'
            }, {
                type: 'success'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $("#frmRConceptos")[0].reset();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
        $("#btnRefresh").trigger('click');
    }

    function onHideFunctions() {
        $("#btnAccions").fadeToggle("fast", "linear");
        $("div .title-module").find("span").toggleClass("fa-chevron-up fa-chevron-down");
    }

    function getDataByIndex(tblname, url, indicex, target_result, target_fail_messages, fail_message) {
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
            }
        }).done(function (data, textStatus, jqXHR) {
            console.log(jqXHR);
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
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

    function getData(tblname, url, target_result, target_fail_messages, fail_message) {
        $("#" + target_result).html('<div align="center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
        temp = 0;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest.responseText);
                console.log(errorThrown);
            }
        }).done(function (data, textStatus, jqXHR) {
            console.log(jqXHR);
            var tblName = tblname;
            $("#" + target_result).html("");
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                /*ROW DETAILS PLUS*/
                var trs = $("#" + tblName + " > tbody > tr ");
                trs.each(function (key, value) {
                    var row = $(value).find();
                    console.log(row);
                });
                $('#' + tblName + ' > tbody  > tr').each(function (key, value) {
                    $(this).each(function (k, v) {
                        var row = $(v).find("td");
                        var status = row[1];
                        var sts = status.innerText;
//                        row[0].innerHTML = '<span class="label label-primary">' + row[0].innerText + '</span>';
//  
                        if (sts === 'CONCLUIDO') {
                            row[1].innerHTML = '<span class="label label-dark-emerald">' + sts + '</span>';
                        } else if (sts === 'INCOMPLETO') {
                            row[1].innerHTML = '<span class="label label-dark-orange">' + sts + '</span>';
                        } else {
                            row[1].innerHTML = '<span class="label label-blue-sea">' + sts + '</span>';
                        }
//                        row[2].innerHTML = '<span class="label label-indigo">' + row[2].innerText + '</span>';
//                        row[4].innerHTML = '<span class="label label-primary">' + $.number( row[4].innerText, 4, '.', ', ') + '</span>';
//                        row[5].innerHTML = '<span class="label label-default">$ ' + $.number( row[5].innerText, 2, '.', ', ') + '</span>';
//                        row[5].innerHTML = '$ ' + $.number(row[5].innerText, 2, '.', ', ');
//                        row[6].innerHTML = $.number(row[6].innerText, 2, '.', ', ');
//                        row[7].innerHTML = '$ ' + $.number(row[7].innerText, 2, '.', ', ');
//                        row[8].innerHTML = $.number(row[8].innerText, 2, '.', ', ');
//                        row[9].innerHTML = '$ ' + $.number(row[9].innerText === 'NULL' ? 0 : row[9].innerText, 4, '.', ', ');
//                        var monto = row[6].innerText;
//                        row[6].innerHTML = '<span class="label label-info">$ ' + $.number( monto, 2, '.', ', ') + '</span>';
//                        row[7].innerHTML = '<span class="label label-emerald">$ ' + $.number(row[7].innerText, 2, '.', ', ') + '</span>';
//                        row[8].innerHTML = (parseFloat(row[8].innerText) < parseFloat(row[5].innerText)) ? '<span class="label label-red">' + row[8].innerText + '</span>' : '<span class="label label-primary">' + row[8].innerText + '</span>';
//                        row[9].innerHTML = '<span class="label label-default">$ ' + $.number(row[9].innerText, 2, '.', ', ') + '</span>';

                    });
                });
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
                    var idx = $(dtm)[0];
//                    temp = parseInt($(idx)[0].innerText);
                    temp = parseInt(idx);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var idx = $(dtm)[0];
//                    temp = parseInt($(idx)[0].innerText);
                    temp = parseInt(idx);
                    $("#btnEdit").trigger("click");
                });
                $('#' + target_result).css('display', 'block');
                tblSelected.columns.adjust().draw();
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

    function getHistorialDePagos(tblname, url, target_result, target_fail_messages, fail_message) {
        $("#" + target_result).html('<div align="center"><i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i></div>');
        console.log(temp);
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {
                ID: temp
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest.responseText);
                console.log(errorThrown);
            }
        }).done(function (data, textStatus, jqXHR) {
            console.log(jqXHR);
            var tblName = tblname;
            $("#" + target_result).html("");
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
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
                    $("#btnEdit").trigger("click");
                });
                var sttfoot = 0.0;
                /*ROW DETAILS PLUS*/
                $('#' + tblName + ' > tbody  > tr').each(function (key, value) {
                    $(this).each(function (k, v) {

                        $(v).find("td")[1].innerHTML = '<span class="label label-primary">' + $(v).find("td")[1].innerText + '</span>';
                        $(v).find("td")[2].innerHTML = '<span class="label label-primary">' + $(v).find("td")[2].innerText + '</span>';
                        $(v).find("td")[3].innerHTML = '<span class="label label-warning">' + $(v).find("td")[3].innerText + '</span>';
                        $(v).find("td")[7].innerHTML = '<span class="label label-info"> ' + $.number($(v).find("td")[7].innerText, 2, '.', ', ') + '</span>';
                        $(v).find("td")[8].innerHTML = '<span class="label label-warning"> $ ' + $.number($(v).find("td")[8].innerText, 2, '.', ', ') + '</span>';
                        sttfoot = sttfoot + parseFloat($(v).find("td")[9].innerText);
                        $(v).find("td")[9].innerHTML = '<span class="label label-success"> $ ' + $.number($(v).find("td")[9].innerText, 2, '.', ', ') + '</span>';
                    });
                });
                $('#' + tblName + ' > tfoot  > tr').each(function (key, value) {
                    $(this).each(function (k, v) {
                        $("#" + target_result).append('<div class="text-center">\n\
                <span class="label label-default">TOTAL :  </span><span class="label label-primary"> $ ' + $.number(sttfoot, 2, '.', ', ') + '</span></div>');
                        $(v).find("th")[9].innerHTML = $.number(sttfoot, 2, '.', ', ');
                    });
                });
                $('#' + target_result).css('display', 'block');
                tblSelected.columns.adjust().draw();
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

    function getProyectos(dt) {
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getProyectos',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.Proyecto + '</option>';
                    });
                    $.each(dt, function (k, v) {
                        $("#" + v).html(options);
                    });
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

    function getContratistasConceptos(dt) {
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getContratistasConceptos',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.CONCEPTO + '</option>';
                    });
                    $.each(dt, function (k, v) {
                        $("#" + v).html(options);
                    });
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

    function getContratistas(dt) {
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getContratistas',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
//                
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
                    });
                    $.each(dt, function (k, v) {
                        $("#" + v).html(options);
                    });
                } else {
                    console.log('NO Fetching Contratistas...');
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

    function getFormasDePago() {
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getFormasDePago',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
//                
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v["FORMA PAGO"] + '</option>';
                    });
                    $("#FormaPagoRP").html(options);
                    console.log('done Fetching Formas de pago...');
                } else {
                    console.log('NO Fetching Formas de pago...');
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'NO SÉ ENCONTRARON REGISTROS FORMAS DE PAGO'
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

    function getTipoComprobante() {
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getTipoComprobante',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
//                
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v["TIPO COMPROBANTE"] + '</option>';
                    });
                    $("#ComprobanteRP").html(options);
                    console.log('done Fetching TIPO COMPROBANTE...');
                } else {
                    console.log('NO Fetching TIPO COMPROBANTE...');
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'NO SÉ ENCONTRARON REGISTROS TIPO COMPROBANTE'
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

    function onChangeTrabajo() {
        var p = $("#Precio").val();
        var c = $("#TotalTrabajos").val();
        var tt = (p * c).toFixed(2);
        $("#MontoTrabajos").val($.number(tt, 3, '.', ', '));
    }

    function onChangeMount(c1, c2, r) {
        var p = $("#" + c1).val();
        var c = $("#" + c2).val();
        var tt = (p * c).toFixed(2);
        $("#" + r).val(tt);
    }

    function onCheckNumeroDeTrabajosARestar() {
        var tp = $("#TotalTrabajosRP").val() - $("#TrabajosRealizadosRP").val();
        $("#TrabajosPendientesRP").val(tp.toFixed(2));
        onChangeMount('PrecioRP', 'TrabajosPendientesRP', 'MontoTrabajosPendientesRP');
    }
    var num_trr = 0;
    var num_trp = 0;
    function onChangeNumeroDeTrabajosAPagar() {

        if (parseFloat($("#TrabajosaPagarRP").val()) > 0 && $("#TrabajosaPagarRP").val() <= ($("#TotalTrabajosRP").val() - trare))
        {
            onChangeMount('PrecioPagarRP', 'TrabajosaPagarRP', 'MontoPagoRP');
            var tr = parseFloat(trare) + parseFloat($("#TrabajosaPagarRP").val());
//            $("#TrabajosRealizadosRP").val(tr.toFixed(4));
//            onChangeMount('PrecioRP', 'TrabajosRealizadosRP', 'MontoTrabajosRealizadosRP');
//            var tp = parseFloat($("#TotalTrabajosRP").val()) - parseFloat($("#TrabajosRealizadosRP").val());
//            $("#TrabajosPendientesRP").val(tp.toFixed(4));
//            onChangeMount('PrecioRP', 'TrabajosPendientesRP', 'MontoTrabajosPendientesRP');
            $("#msgAddPaymentCalculate").html('');
        } else {
            $("#msgAddPaymentCalculate").html('<br><div class="alert alert-dismissible alert-danger">\n\
   <button type="button" class="close" data-dismiss="alert">&times;</button>LA CANTIDAD DE TRABAJOS A PAGAR NO DEBE SER MAYOR A LA CANTIDAD DE TRABAJOS A REALIZAR O MENOR O IGUAL A CERO </div>');
        }
    }

    function getReporteGlobalDeDestajoTR() {
        $("#tblResultado").addClass("hide");
        $("#tblResultadoProgress").removeClass("hide");
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getReporteGlobalDeDestajoTR',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#NdesarrolloRGDDDTR").val(),
                CONCEPTO: $("#ConceptoPRGDDDTR").val()
            }
        }).done(function (data, txt, jq) {
            $("#tblResultadoProgress").addClass("hide");
            $("#tblResultado").removeClass("hide");
            var tblname = "tblConceptoDePago";
            var target_result = "tblResultado";
            var tblName = tblname;
            $("#" + target_result).html("");
            if (data.length > 0) {

                $("#" + target_result).html(getTable(tblName, data));
                $("#" + target_result + "  thead > tr").each(function (k, v) {
                    var row_value = $(this).find("th")[0].innerText;
                    $(this).find("th")[0].innerHTML = '<div class="text-center">' + row_value + '</div>';
                });
                $("#" + target_result + "  tbody > tr").each(function (k, v) {
                    var row_value = $(this).find("td")[0].innerText;
                    $(this).find("td")[0].innerHTML = '<div class="text-center"><span class="label label-primary">' + row_value + '</span></div>';
                    row_value = $(this).find("td")[1].innerText;
                    $(this).find("td")[1].innerHTML = '<span class="label label-warning text-center">' + row_value + '</span>';
                    row_value = $(this).find("td")[2].innerText;
                    $(this).find("td")[2].innerHTML = '<span class="label label-default text-center">' + row_value + '</span>';
                    row_value = $(this).find("td")[3].innerText;
                    $(this).find("td")[3].innerHTML = '<span class="label label-info text-center">' + row_value + '</span>';
                    row_value = $(this).find("td")[4].innerText;
                    $(this).find("td")[4].innerHTML = '<span class="label label-primary text-center">' + row_value + '</span>';
                });
                $("#" + target_result + "  tfoot > tr").each(function (k, v) {
                    var row_value = $(this).find("th")[0].innerText;
                    $(this).find("th")[0].innerHTML = '<div class="text-center">' + row_value + '</div>';
                });
                //CLICK SELECTED ROW
                $('#' + target_result + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('success');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
            } else {
                $("#" + target_result).html('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><h1>NO SE ENCONTRARON REGISTROS.</h1></div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

    function getReporteConceptoDestajo() {
        var ct = $("#cmbConceptoTrabajo").val();
        var fi = $("#FechaInicioCDD").val();
        var ft = $("#FechaTerminoCDD").val();
        $("#tblResultadoDestajoProgress").removeClass("hide");
        if (ct !== undefined && ct !== "" && ct.length > 0 && fi !== undefined && fi !== "" &&
                fi.length > 0 && ft !== undefined && ft !== "" && ft.length > 0) {
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/getReporteConceptoDestajo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: $("#cmbConceptoTrabajo").val(),
                    FECHAINICIO: $("#FechaInicioCDD").val(),
                    FECHATERMINO: $("#FechaTerminoCDD").val()
                }
            }).done(function (data, x, jq) {
                $("#tblResultadoDestajoProgress").addClass("hide");
                $("#tblResultadoDestajo").removeClass("hide");
                var tblname = "tblConceptoDeDestajo";
                var target_result = "tblResultadoDestajo";
                var tblName = tblname;
                $("#" + target_result).html("");
                if (data.length > 0) {

                    $("#" + target_result).html(getTable(tblName, data));
                    $("#" + tblName + "  tbody > tr").each(function (k, v) {
                        var row = $(this).find("td");
                        var row_value = $(this).find("td")[0].innerText;
                        row[0].innerHTML = '<div class="text-center"><span class="label label-primary">' + row_value + '</span></div>';
                        row_value = $(this).find("td")[1].innerText;
                        $(this).find("td")[1].innerHTML = '<span class="label label-warning text-center">' + row_value + '</span>';
                        row_value = $(this).find("td")[2].innerText;
                        $(this).find("td")[2].innerHTML = '<span class="label label-default text-center">' + row_value + '</span>';
                        row_value = $(this).find("td")[3].innerText;
                        $(this).find("td")[3].innerHTML = '<span class="label label-info text-center">$ ' + $.number(row_value, 2, '.', ', ') + '</span>';
                        row_value = $(this).find("td")[4].innerText;
                        $(this).find("td")[4].innerHTML = '<span class="label label-primary text-center">' + row_value + '</span>';
                        row_value = $(this).find("td")[5].innerText;
                        $(this).find("td")[5].innerHTML = '<span class="label label-info text-center">$ ' + $.number(row_value, 2, '.', ', ') + '</span>';
                        row_value = $(this).find("td")[6].innerText;
                        $(this).find("td")[6].innerHTML = '<span class="label label-primary text-center">' + row_value + '</span>';
                        row_value = $(this).find("td")[7].innerText;
                        $(this).find("td")[7].innerHTML = '<span class="label label-info text-center">$ ' + $.number(row_value, 2, '.', ', ') + '</span>';
                    });
                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + target_result + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('success');
                    });
                } else {
                    $("#" + target_result).html('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><h1>NO SE ENCONTRARON REGISTROS.</h1></div>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA');
            });
        }
    }

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
                        options = options + '<option value="' + v.ID + '">' + v.DESCRIPCION + '</option>';
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

    function getChart() {
        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawStuff);
        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
                ['MOVIMIENTO', 'PORCENTAJE'],
                ["PISO  ", 44],
                ["CIMBRA  ", 31],
                ["FONTANERIA", 12],
                ["APLANADO", 10],
                ['OTRO', 3]
            ]);
            var options = {
                title: 'MOVIMIENTOS ABIERTOS',
                width: 900,
                legend: {position: 'none'},
                chart: {subtitle: 'POPULARIDAD POR PORCENTAJE'},
                axes: {
                    x: {
                        0: {side: 'top', label: 'White to move'} // Top x-axis.
                    }
                },
                bar: {groupWidth: "90%"}
            };
            var chart = new google.charts.Bar(document.getElementById('GComportamiento'));
            // Convert the Classic options to Material options.
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        ;
    }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>