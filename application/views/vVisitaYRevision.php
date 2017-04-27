<div class="row"> 
    <br>
    <div class="col-md-12">
        <div class="col-md-4">
            <!-----------------------------SUBTITULO-------------------------------------> <h2>
                <?php
                $respuesta = '-';
                foreach ($USUARIOS as $USUARIOS1) {
                    if ($USUARIOS1->Id == $User) {
                        $respuesta = $USUARIOS1->nombre;
                        $indice = $USUARIOS1->Id;
                    }
                }
                echo $respuesta;
                ?></h2> 
        </div>
        <div class="col-md-4"> 
        </div>
        <div class="col-md-4"  align="right"> 

            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#mdlPostVenta"> 
                <span class="fa fa-align-justify fa-2x"></span>
            </button>
        </div>
    </div>
    <div class="col-md-12">  
        <!------------------------OPTIONS------------------------------------------>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg fa-2x"></span> MODULO DE VISITA DE LA VIVIENDA Y REVISIÓN</h3> 
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php // echo $indice; ?>">
            </div> 
            <div class="panel-body">
                <div id="btnAccions" align="center">
                    <fieldset> 
                            <button id="btnAgregarVisitaYRevision" class="btn btn-lg btn-info fa-2x" data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaVisitaYRevision"><span class="fa fa-plus fa-lg"></span></button> 
                            <button id="btnEditarVisitaYRevision" class="btn btn-lg btn-success fa-2x"><span class="fa fa-pencil fa-lg"></span></button>
                            <button id="btnReCargarVisitaYRevisions" class="btn btn-lg btn-warning fa-2x"><span class="fa fa-refresh fa-lg"></span></button>
                            <button id="btnEliminarVisitaYRevision" class="btn btn-lg btn-danger fa-2x"><span class="fa fa-minus fa-lg"></span></button>
                            <button id="btnExportarPDF" class="btn btn-lg btn-default fa-2x" data-toggle="modal" data-target="#mdlReporteVisitaYRevision" ><span class="fa fa-file-pdf-o fa-lg"></span></button>
                            <button id="btnExportarPDF" class="btn btn-lg btn-primary fa-2x" data-toggle="modal" data-target="#mdlReporteVisitaYRevision" ><span class="fa fa-file-excel-o fa-lg"></span></button>
                     </fieldset>
                </div>
                <br>
                <div id="msgVisitaYRevision"></div>
                <div id="rVisitaYRevision"></div> 
            </div>
        </div>
        <fieldset> 
            <div class="col-md-10"></div> 
        </fieldset>
    </div> 
</div>



<!-- Modal -->

<div id="mdlNuevaVisitaYRevision" class="modal fade" data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="frmVisitaYRevision">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-database fa-lg"></span> Registro de Garantías de la Vivienda </h2>
                </div>
                <div class="modal-body"> 
                    <fieldset>
                        
                        <div class="col-md-12 hide">
                            <input type="text" id="IdVisita" name="IdVisita" class="form-control" readonly="">
                            <input type="text" id="uIdSesion" name="uIdSesion" class="form-control" readonly="">
                            <input type="text" id="uExistenObservaciones" name="uExistenObservaciones" class="form-control" readonly="">
                            <input type="text" id="uObservacionesVisita" name="uObservacionesVisita" class="form-control" readonly="">
                            <input type="text" id="uSeguimiento" name="uSeguimiento" class="form-control" readonly="">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="IdSesion">SELECCIONAR SESIÓN POR CLIENTE</label>
                            <select id="IdSesion" name="IdSesion" class="form-control" required="">
                                <option></option>
                            </select>
                        </div>
                        
                        <div class="col-md-12 hide">
                            <label for="nIdSesion">SESIÓN</label>
                            <input type="text" id="nIdSesion" name="nIdSesion" class="form-control" readonly="">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="ExistenObservaciones">EXISTEN OBSERVACIONES DE LA VIVIENDA</label>
                            <select id="ExistenObservaciones" name="ExistenObservaciones" class="form-control" required="">
                                <option></option>
                                <option value="1">SI</option>
                                <option value="0">NO</option>
                            </select>
                        </div>
                        
                    </fieldset>
                    <fieldset id="fObservaciones" class="hide">
                        <div class="col-md-12">
                            <label for="ObservacionesVisita">OBSERVACIONES DE LA VISITA</label>
                            <input type="text" id="ObservacionesVisita" name="ObservacionesVisita" class="form-control" maxlength="499">
                        </div>
                        <div class="col-md-12">
                            <label for="Seguimiento">SEGUIMIENTO QUE SE BRINDARA A LA OBSERVACIÓN</label>
                            <input type="text" id="Seguimiento" name="Seguimiento" class="form-control" maxlength="499">
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button id="btnRegistrarVisitaYRevision" type="button" class="btn btn-primary" > GUARDAR</button>
                    <button id="btnActualizarVisitaYRevision" type="button" class="btn btn-warning hide">GUARDAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="mdlReporteVisitaYRevision" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">REPORTE DE VISITA Y REVISIÓN</h4>
            </div>
            <div class="modal-body"> 
                <div id="rReporteGeneralDeGarantias"></div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button> 
            </div>
        </div>
    </div>
</div>

<!----End Modals----->

<?php
$this->load->view('layout/modals/modalPostVenta', true);
$this->load->view('layout/modals/mdlMessages', true);
