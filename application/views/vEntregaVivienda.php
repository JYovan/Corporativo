<div class="row"> 
    <div class="col-md-8">
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
    <div class="col-md-4" align="right"><br><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#mdlPostVenta"> <span class="fa fa-align-justify fa-2x"></span></button><br></div>
    <div class="col-md-12"><br></div>
    <div class="col-md-12">  
        <!------------------------OPTIONS------------------------------------------>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg"></span> MODULO DE PROCESO DE ENTREGA DE VIVIENDA</h3> 

                <input  class="form-control" type="hidden" name="user" id="user" value="<?php // echo $indice; ?>">
            </div> 
            <div class="panel-body">
                <div id="btnAccions" align="center">
                    <fieldset>
                            <button id="btnAgregarEntregaVivienda" class="btn btn-lg btn-info " data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaEntregaVivienda"><span class="fa fa-plus fa-lg fa-2x"></span></button> 
                            <button id="btnEditarEntregaVivienda" class="btn btn-lg btn-success"><span class="fa fa-pencil fa-lg fa-2x"></span></button>
                            <button id="btnReCargarEntregaViviendas" class="btn btn-lg btn-warning"><span class="fa fa-refresh fa-lg fa-2x"></span></button>
                            <button id="btnEliminarEntregaVivienda" class="btn btn-lg btn-danger"><span class="fa fa-minus fa-lg fa-2x"></span></button>
                            <button id="btnExportarPDF" class="btn btn-lg btn-default" data-toggle="modal" data-target="#mdlReporteGeneralCitas" ><span class="fa fa-file-pdf-o fa-lg fa-2x"></span></button>
                    </fieldset>
                </div>
                <br>
                <div id="msgEntregaVivienda"></div>
                <div id="rEntregaVivienda"></div> 
            </div>
            </form>
        </div>
        <fieldset> 
            <div class="col-md-10"></div>
             
        </fieldset>
    </div> 
</div>
<!-- Modal -->

<div id="mdlNuevaEntregaVivienda" class="modal fade" data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="fEntregaViviendaPV">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Contenido de carpeta de entrega de vivienda </h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="txtIDGPV" name="txtIDGPV" class="form-control hide" value="" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="cmbCitaPV">Cita</label>
                            <select class="form-control " id="cmbCitaPV" name="cmbCitaPV" >

                            </select>
                        </div>
                        <div class="col-md-12 hide">
                            <label for="txtCitaPV">Cita</label>
                            <input type="text" id="txtIDCitaPV" name="txtIDCitaPV" class="form-control hide" value="" readonly="" placeholder="ID">
                            <input type="text" id="txtCitaPV" name="txtCitaPV" class="form-control" value="" readonly="">
                        </div>
                    </fieldset>
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th class="hide">ID</th>
                                    <th>DOCUMENTO</th>
                                    <th>ENTREGADO</th>
                                    <th>NO ENTREGADO</th>
                                    <th>OBSERVACIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDCVPG" name="txtIDCVPG" class="form-control"></td>
                                    <td>Coberturas y vigencias de póliza de garantías</td>
                                    <td><input type="radio" id="rCVPG" name="rCVPG" value="ON" required="" class="form-control"/></td>
                                    <td><input type="radio" id="rCVPG" name="rCVPG" value="OFF"  required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrCVPG" name="txtrCVPG" value="" class="form-control"  maxlength="499" /></td> 
                                </tr>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDPAG" name="txtIDPAG" class="form-control"></td>
                                    <td>Procedimiento de atención de garantías</td>
                                    <td><input type="radio" name="rPAG" value="ON"  required="" class="form-control"/></td>
                                    <td><input type="radio" name="rPAG" value="OFF"  required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrPAG" name="txtrPAG" value="" class="form-control"  maxlength="499" /></td> 
                                </tr>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDGCS" name="txtIDGCS" class="form-control"></td>
                                    <td>Guía para realizar sus contratos de servicios (agua, luz, etc.)</td>
                                    <td><input type="radio" name="rGCS" value="ON" required="" class="form-control"/></td>
                                    <td><input type="radio" name="rGCS" value="OFF"  required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrGCS" name="txtrGCS" value="" class="form-control"  maxlength="499" /></td> 
                                </tr>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDPOVSM" name="txtIDPOVSM" class="form-control"></td>
                                    <td>Plano oficial de la vivienda con sellos municipales</td>
                                    <td><input type="radio" name="rPOVSM" value="ON"  required="" class="form-control"/></td>
                                    <td><input type="radio" name="rPOVSM" value="OFF"  required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrPOVSM" name="txtrPOVSM" value="" class="form-control"  maxlength="499" /></td> 
                                </tr>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDPAEIAAV" name="txtIDPAEIAAV" class="form-control"></td>
                                    <td>Planos arquitectónicos y estructurales de su que indiquen las ampliaciones más adecuadas de la vivienda.</td>
                                    <td><input type="radio" name="rPAEIAAV" value="ON"  required="" class="form-control"/></td>
                                    <td><input type="radio" name="rPAEIAAV" value="OFF"  required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrPAEIAAV" name="txtrPAEIAAV" value="" class="form-control" maxlength="499"  /></td> 
                                </tr>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDMMV" name="txtIDMMV" class="form-control"></td>
                                    <td>Manual de mantenimiento de la vivienda</td>
                                    <td><input type="radio" name="rMMV" value="ON" required="" class="form-control"/></td>
                                    <td><input type="radio" name="rMMV" value="OFF" required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrMMV" name="txtrMMV" value="" class="form-control"  maxlength="499" /></td> 
                                </tr>
                                <tr>
                                    <td class="hide"><input type="text" id="txtIDAERVP" name="txtIDAERVP" class="form-control"></td>
                                    <td>Acta de entrega-recepción de la vivienda y pólizas</td>
                                    <td><input type="radio" name="rAERVP" value="ON"  required="" class="form-control"/></td>
                                    <td><input type="radio" name="rAERVP" value="OFF"  required="" class="form-control"/></td>
                                    <td><input type="text" id="txtrAERVP" name="txtrAERVP" value="" class="form-control" maxlength="499" /></td> 
                                </tr>
                            </tbody>
                        </table>
                    <fieldset>
                        <div class="col-md-6">
                            <label for="txtFechaEntrega">Fecha de Entrega</label>
                            <input type="date" id="txtFechaEntrega" name="txtFechaEntrega" value="" required="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="cmbClienteRecibio">Cliente que recibió</label>
                            <select id="cmbClienteRecibio" name="cmbClienteRecibio" required="" class="form-control">
                                <?php
                                foreach ($lClientes as $Cliente) {
                                    print '<option value="' . $Cliente->ID . '">' . $Cliente->Ncliente . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="txtPersonaEntrego">Persona de la organización que entrego</label>
                            <input type="text" id="txtPersonaEntrego" name="txtPersonaEntrego" required="" class="form-control" maxlength="49">
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button id="btnRegistrarEntregaVivienda" type="button" class="btn btn-primary">GUARDAR</button>
                    <button id="btnActualizarEntregaVivienda" type="button" class="btn btn-warning hide">GUARDAR</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!----End Modals----->
<?php
$this->load->view('layout/modals/modalPostVenta', true);
$this->load->view('layout/modals/mdlMessages', true);
