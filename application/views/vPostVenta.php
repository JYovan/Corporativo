<!--/*  
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it . 
 * Este código, estructura (HTML), scripts y hojas de estilo(css), no pueden ser redistribuidos y/o modificados sin permiso del autor.
 */-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row"> 
    <div class="col-md-8">
        <!-----------------------------SUBTITULO-------------------------------------> 
    </div>
    <div class="col-md-4" align="right"> 
    </div>
    <div class="col-md-12"><br></div>
    <div class="col-md-12"> 

        <!------------------------OPTIONS------------------------------------------>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg"></span> MODULO DE PROGRAMACIÓN DE CITA POSTVENTA</h3>
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
            </div> 
            <div class="panel-body">
                <div id="btnAccions" align="center">
                    <fieldset>
                        <button type="button" id="salir" name="salir" class="btn btn-lg btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlSesion/onLoadData'">
                            <span class="fa fa-arrow-left fa-lg"></span>
                        </button>
                        <button id="btnAgregarPostVenta" class="btn btn-lg btn-info" data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaPostVenta"><span class="fa fa-plus fa-lg fa-2x"></span></button> 
                        <button id="btnEditarPostVenta" class="btn btn-lg btn-success"><span class="fa fa-pencil fa-lg fa-2x"></span></button>
                        <button id="btnReCargarPostVentas" class="btn btn-lg btn-warning"><span class="fa fa-refresh fa-lg fa-2x"></span></button>
                        <button id="btnEliminarPostVenta" class="btn btn-lg btn-danger"><span class="fa fa-minus fa-lg fa-2x"></span></button>
                        <button id="btnExportarPDF" class="btn btn-lg btn-default" data-toggle="modal" data-target="#mdlReporteGeneralCitas" ><span class="fa fa-file-pdf-o fa-lg fa-2x"></span></button>
                        <button id="btnExportarXLS" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#mdlReporteGeneralCitas" ><span class="fa fa-file-excel-o fa-lg fa-2x"></span></button>
                        <button class="btn btn-lg btn-primary " type="button" data-toggle="modal" data-target="#mdlPostVenta"> 
                            <span class="fa fa-align-justify fa-2x"></span>
                        </button>
                    </fieldset>
                </div>
                <br>
                <div id="msgPostVenta"></div>
                <div id="rPostVenta"></div> 
            </div>
            </form>
        </div>
        <fieldset> 
            <div class="col-md-10"></div>
            <div class="col-md-1">
            </div>
        </fieldset>
    </div> 
</div>



<!-- Modal -->

<div id="mdlNuevaPostVenta" class="modal fade" data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="fRegistroCita">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Programación de cita postventa </h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <!--------------------GRAFICO - COMPORTAMIENTO DE COMERCIALIZACION DE LOS DESARROLLOS INMOBILIARIOS-------------------->
                        <div class="form-group" align="">  
                            <div class="col-md-12 hide">
                                <input type="text" id="txtIDPostVenta"  class="form-control" value="" readonly="">
                            </div>
                            <div class="col-md-6">
                                <label for="cmbActividad">Actividad</label>
                                <select id="cmbActividad" class="form-control" required="">
                                    <option>ENTREGA DE VIVIENDA</option>
                                    <option>ENTREGA DE ESCRITURAS</option>
                                    <option>ATENCI&Oacute;N DE GARANT&Iacute;AS</option>
                                    <option>ATENCI&Oacute;N A PROSPECTO DE CLIENTE</option>
                                    <option>PROMOCIÓN DE VIVIENDA</option>
                                    <option>ASESOR&Iacute;A</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="txtFecha">Fecha</label>
                                <input id="txtFecha" type="date" class="form-control" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="txtDescripcion">Descripción/orden del día</label>
                                <input type="text" id="txtDescripcion" onblur="this.value.toUpperCase()" class="form-control" required=""  maxlength="49" onkeypress="this.value.toUpperCase()" onkeydown="this.value.toUpperCase()">
                            </div>
                            <div class="col-md-12">
                                <label for="txtLugar">Lugar</label>
                                <input type="text" id="txtLugar" class="form-control" required=""  maxlength="49">
                            </div>
                            <div id="sTituloCCDI" class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>Domicilio del lugar </h2></label>	
                            </div>
                            <div id="hrTituloCCDI" class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div>  
                            <div class="col-md-4">
                                <label for="txtCalle">Calle</label>
                                <input type="text" id="txtCalle" class="form-control" required=""  maxlength="99">
                            </div>
                            <div class="col-md-4">
                                <label for="txtNumero">Numero</label>
                                <input type="text" id="txtNumero" class="form-control" required=""  maxlength="25">
                            </div>
                            <div class="col-md-4">
                                <label for="txtColonia">Colonia</label>
                                <input type="text" id="txtColonia" class="form-control" required=""  maxlength="50">
                            </div>
                            <div class="col-md-6">
                                <label for="cmbEstado">Estado</label>
                                <select id="cmbEstado" class="form-control" required="">
                                    <?php
                                    foreach ($lEstados as $Estado) {
                                        print '<option value="' . $Estado->id_estado . '">' . $Estado->dsc_estado . '</option>';
                                    }
                                    ?> 
                                </select>  
                            </div>
                            <div class="col-md-6">
                                <label for="cmbCiudad">Ciudad</label>
                                <select id="cmbCiudad" class="form-control" required="">
                                    <option>SIN DATOS</option>
                                </select>
                                <input type="text" id="txtIDCiudad" class="hide">
                            </div>
                            <div class="col-md-4">
                                <label for="txtDuracion">Duración</label>
                                <input type="text" id="txtDuracion" class="form-control" required="" maxlength="49">
                            </div>
                            <div class="col-md-4">
                                <label for="txtHoraInicio">Hora de Inicio</label>
                                <input type="text" id="txtHoraInicio" class="form-control" required="" maxlength="49">
                            </div>
                            <div class="col-md-4">
                                <label for="txtHoraTermino">Hora de termino</label>
                                <input type="text" id="txtHoraTermino" class="form-control" required="" maxlength="49">
                            </div>

                            <div id="sTituloCCDI" class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>Participantes </h2></label>	
                            </div>
                            <div id="hrTituloCCDI" class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div>
                            <div class="col-md-4">
                                <label for="txtParticipante">Por la organizacion</label>
                                <input type="text" id="txtParticipante" class="form-control" required="" maxlength="49">
                            </div>
                            <div class="col-md-4">
                                <label for="cmbCliente">Cliente</label> 
                                <select id="cmbClientes" class="form-control" required="">
                                    <?php
                                    foreach ($lClientes as $Cliente) {
                                        print '<option value="' . $Cliente->ID . '">' . $Cliente->Ncliente . '</option>';
                                    }
                                    ?>
                                </select> 
                            </div>
                            <div class="col-md-4">
                                <label for="txtOtroParticipante">Otros</label>
                                <input type="text" id="txtOtroParticipante" class="form-control" required="" maxlength="49">
                            </div>
                            <div class="col-md-6">
                                <label for="txtNotario">Nombre del Notario Público </label>
                                <input type="text" id="txtNotario" class="form-control" required="" maxlength="49">
                            </div>
                            <div class="col-md-6">
                                <label for="txtNumeroNotario">Numero del Notario Público </label>
                                <input type="text" id="txtNumeroNotario" class="form-control" required="" maxlength="49">
                            </div>
                            <div class="col-md-12">
                                <label for="txtObservaciones">Observaciones </label>
                                <input type="text" id="txtObservaciones" class="form-control" maxlength="499">
                            </div>
                        </div>
                    </fieldset> 
                    <br>
                    <div id="msgrPostVenta"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button id="btnRegistrarPostVenta" type="button" class="btn btn-primary">GUARDAR</button>
                    <button id="btnActualizarPostVenta" type="button" class="btn btn-warning hide">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="mdlReporteGeneralCitas" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Reporte general de citas </h4>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tabReporteGeneral" data-toggle="tab">REPORTE GENERAL</a></li>
                    <li><a href="#tabEntregaVivienda" data-toggle="tab">PARA ENTREGA DE VIVIENDAS</a></li>
                    <li><a href="#tabFirmaEscrituras" data-toggle="tab">PARA FIRMA DE ESCRITURAS</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="tabReporteGeneral">
                        <br>
                        <div id="rReporteGeneralDeCitas"></div>
                    </div>
                    <div class="tab-pane fade" id="tabEntregaVivienda">
                        <br>
                        <div id="rReporteGeneralDeCitasEV"></div>
                    </div> 
                    <div class="tab-pane fade" id="tabFirmaEscrituras">
                        <br>
                        <div id="rReporteGeneralDeCitasFE"></div>
                    </div> 
                </div>

                <div id="rGarantias"></div>
                <div id="rEscrituras"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button> 
            </div>
        </div>
    </div>
</div>

<!----End Modals----->

<script>
//    cli.config.onCambiarEstado(); 
    pv.config.onReady();
</script>
<?php
$this->load->view('layout/modals/modalPostVenta', true);
$this->load->view('layout/modals/mdlMessages', true);
