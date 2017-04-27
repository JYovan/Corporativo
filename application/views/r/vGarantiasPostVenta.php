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
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg fa-2x"></span> MODULO DE ATENCION DE GARANTIAS</h3> 
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php // echo $indice; ?>">
            </div> 
            <div class="panel-body">
                <div id="btnAccions" align="center">
                    <fieldset> 
                            <button id="btnAgregarGarantiaPostVenta" class="btn btn-lg btn-info fa-2x"  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaGarantiaPostVenta"><span  data-toggle="tooltip" title="NUEVO" class="fa fa-plus fa-lg"></span></button> 
                            <button id="btnEditarGarantiaPostVenta" class="btn btn-lg btn-success fa-2x"><span  data-toggle="tooltip" title="EDITAR" class="fa fa-pencil fa-lg"></span></button>
                            <button id="btnReCargarGarantiaPostVentas" class="btn btn-lg btn-warning fa-2x"><span data-toggle="tooltip" title="REFRESCAR"  class="fa fa-refresh fa-lg"></span></button>
                            <button id="btnEliminarGarantiaPostVenta" class="btn btn-lg btn-danger fa-2x"><span  data-toggle="tooltip" title="ELIMINAR" class="fa fa-minus fa-lg"></span></button>
                            <button id="btnValidarGarantía" class="btn btn-lg btn-olive fa-2x" ><span  data-toggle="tooltip" title="VALIDAR" class="fa fa-check fa-lg"></span></button>
                            <button id="btnExportarPDF" class="btn btn-lg btn-default fa-2x" data-toggle="modal" data-target="#mdlReporteGarantiasViviendas" ><span class="fa fa-file-pdf-o fa-lg"></span></button>
                            <button id="btnExportarPDF" class="btn btn-lg btn-primary fa-2x" data-toggle="modal" data-target="#mdlReporteGarantiasViviendas" ><span class="fa fa-file-excel-o fa-lg"></span></button>
                          </fieldset>
                </div>
                <br>
                <div id="msgGarantiaPostVenta"></div>
                <div id="rGarantiaPostVenta"></div> 
            </div>
        </div>
        <fieldset> 
            <div class="col-md-10"></div> 
        </fieldset>
    </div> 
</div>



<!-- Modal -->

<div id="mdlNuevaGarantiaPostVenta" class="modal fade" data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="fGarantiaPV">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-database fa-lg"></span> Registro de atención de Garantías </h2>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div id="msgGPV"></div>
                        <div class="col-md-12 ">
                            <input type="text" id="IdGarantia" name="IdGarantia" class="form-control hide" value="" >
                        </div>
                        <div class="col-md-12 has-success">
                            <label for="IdDesarrollo">DESARROLLO</label>
                            <select id="IdDesarrollo" name="IdDesarrollo" class="form-control " required="">
                                <option></option>
                                <?php
                                if (isset($Desarrollos)) {
                                    foreach ($Desarrollos as $Desarrollo) {
                                        print '<option value="' . $Desarrollo->ID . '">' . $Desarrollo->Proyecto . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="IdManzana">Manzana</label>
                            <select id="IdManzana" name="IdManzana" class="form-control" required="" disabled="">
                                <option></option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="IdLote">Lote</label>
                            <select id="IdLote" name="IdLote" class="form-control" required="" readonly="" disabled="">
                                <option></option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="IdVivienda">Vivienda</label>
                            <select id="IdVivienda" name="IdVivienda" class="form-control" required="" readonly="" disabled="">
                                <option></option>

                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="IdCliente">CLIENTE</label>
                            <select id="IdCliente" name="IdCliente" class="form-control" required="" readonly="" disabled="">
                                <option></option>
                                <?php
                                if (isset($lClientes)) {
                                    foreach ($lClientes as $Cliente) {
                                        print '<option value="' . $Cliente->ID . '">' . $Cliente->Ncliente . '</option>';
                                    }
                                } else {
                                    print '<option value ="0">SIN DATOS</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="Concepto">Concepto</label>
                            <select id="Concepto" name="Concepto" class="form-control" readonly="" disabled="">
                                <option></option>
                                <option value="CIMENTACIÓN">CIMENTACIÓN</option>
                                <option value="MUROS">MUROS</option>
                                <option value="TRABES">TRABES</option>
                                <option value="CASTILLOS">CASTILLOS</option>
                                <option value="LOSAS">LOSAS</option>
                                <option value="IMPERMEABILIZACIÓN">IMPERMEABILIZACIÓN</option>
                                <option value="INSTALACIÓN HIDRÁULICA">INSTALACIÓN HIDRÁULICA</option>
                                <option value="INSTALACIÓN SANITARIA">INSTALACIÓN SANITARIA</option>
                                <option value="INSTALACIÓN DE GAS">INSTALACIÓN DE GAS</option>
                                <option value="MUEBLES DE BAÑO">MUEBLES DE BAÑO</option>
                                <option value="ACCESORIOS DE BAÑO">ACCESORIOS DE BAÑO</option>
                                <option value="FUGAS DE AGUA EN LAS LLAVES">FUGAS DE AGUA EN LAS LLAVES</option>
                                <option value="FUNCIONAMIENTO DE PUERTAS">FUNCIONAMIENTO DE PUERTAS</option>
                                <option value="FUNCIONAMIENTO DE VENTANA">FUNCIONAMIENTO DE VENTANA</option>
                                <option value="FUNCIONAMIENTO DE HERRAJES">FUNCIONAMIENTO DE HERRAJES</option>
                                <option value="FUNCIONAMIENTO DE CHAPAS">FUNCIONAMIENTO DE CHAPAS</option>
                                <option value="CALENTADOR DE AGUA">CALENTADOR DE AGUA</option>
                                <option value="INSTALACIÓN ELÉCTRICA EN LO GENERAL">INSTALACIÓN ELÉCTRICA EN LO GENERAL</option>
                                <option value="ACCESORIOS ELÉCTRICOS COMPLETOS">ACCESORIOS ELÉCTRICOS COMPLETOS</option>
                                <option value="VIDRIOS">VIDRIOS</option>
                                <option value="CHAPAS">CHAPAS</option>
                                <option value="LLAVES">LLAVES</option>
                                <option value="PINTURA">PINTURA</option>
                                <option value="PASTAS">PASTAS</option>
                                <option value="TIROL">TIROL</option>
                                <option value="PISO">PISO</option>
                            </select>
                        </div> <div id="sTituloCCDI" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2>COBERTURA </h2></label>	
                        </div>
                        <div id="hrTituloCCDI" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div>
                        <div class="col-md-4">
                            <label for="Dias">Dias</label>
                            <input type="text" id="Dias" name="Dias" required="" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="Meses">Meses</label>
                            <input type="text" id="Meses" name="Meses" required="" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="Anios">Años</label>
                            <input type="text" id="Anios" name="Anios" required="" class="form-control" readonly="" pattern="[0-9][1,5]">
                        </div>
                        <div class="col-md-6">
                            <label for="FechaInicio">Fecha de Inicio</label>
                            <input type="date" id="FechaInicio" name="FechaInicio" required="" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="FechaTermino">Fecha de termino</label>
                            <input type="date" id="FechaTermino" name="FechaTermino" required="" class="form-control" readonly="">
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button id="btnRegistrarGarantiaPostVenta" type="button" class="btn btn-primary disabled" > GUARDAR</button>
                    <button id="btnActualizarGarantiaPostVenta" type="button" class="btn btn-warning hide">GUARDAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="mdlReporteGarantiasViviendas" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">REPORTE DE GARANTÍAS DE LAS VIVIENDAS</h4>
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

<div id="mdlVGarantia" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">VALIDACIÓN DE GARANTIAS</h4>
            </div>
            <form id="fVGarantia" name="fVGarantia">
                <div id="pnlVGarantia" class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="IdGarantiaValida" name="IdGarantiaValida" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 has-warning">
                            <label for="IdGarantiav">SELECCIONE LA GARANTIA</label>
                            <select id="IdGarantiav" name="IdGarantiav" class="form-control" placeholder="GARANTIA..">

                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="cmbDesarrollo">DESARROLLO</label>
                            <select id="cmbDesarrollo" name="cmbDesarrollo" class="form-control" readonly>
                                <option></option>
                                <?php
                                if (isset($Desarrollos)) {
                                    foreach ($Desarrollos as $Desarrollo) {
                                        print '<option value="' . $Desarrollo->ID . '">' . $Desarrollo->Proyecto . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="txtManzana">MANZANA</label>
                            <input type="text" id="txtManzana" name="txtManzana" class="form-control" placeholder="MANZANA..." readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="txtLote">LOTE</label>
                            <input type="text" id="txtLote" name="txtLote" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="txtNumeroVivienda">NUMERO DE VIVIENDA</label>
                            <input type="text" id="txtNumeroVivienda" name="txtNumeroVivienda" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="txtNumeroCliente">NÚMERO DE CLIENTE</label>
                            <select id="txtNumeroCliente" name="txtNumeroCliente" class="form-control" readonly="">

                                <option></option>
                                <?php
                                if (isset($lClientes)) {
                                    foreach ($lClientes as $Cliente) {
                                        print '<option value="' . $Cliente->ID . '">' . $Cliente->Ncliente . '</option>';
                                    }
                                } else {
                                    print '<option value ="0">SIN DATOS</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="ConceptoV">CONCEPTO DE GARANTIA</label>
                            <select id="ConceptoV" name="ConceptoV" class="form-control" readonly>
                                <option></option>
                                <option value="CIMENTACIÓN">CIMENTACIÓN</option>
                                <option value="MUROS">MUROS</option>
                                <option value="TRABES">TRABES</option>
                                <option value="CASTILLOS">CASTILLOS</option>
                                <option value="LOSAS">LOSAS</option>
                                <option value="IMPERMEABILIZACIÓN">IMPERMEABILIZACIÓN</option>
                                <option value="INSTALACIÓN HIDRÁULICA">INSTALACIÓN HIDRÁULICA</option>
                                <option value="INSTALACIÓN SANITARIA">INSTALACIÓN SANITARIA</option>
                                <option value="INSTALACIÓN DE GAS">INSTALACIÓN DE GAS</option>
                                <option value="MUEBLES DE BAÑO">MUEBLES DE BAÑO</option>
                                <option value="ACCESORIOS DE BAÑO">ACCESORIOS DE BAÑO</option>
                                <option value="FUGAS DE AGUA EN LAS LLAVES">FUGAS DE AGUA EN LAS LLAVES</option>
                                <option value="FUNCIONAMIENTO DE PUERTAS">FUNCIONAMIENTO DE PUERTAS</option>
                                <option value="FUNCIONAMIENTO DE VENTANA">FUNCIONAMIENTO DE VENTANA</option>
                                <option value="FUNCIONAMIENTO DE HERRAJES">FUNCIONAMIENTO DE HERRAJES</option>
                                <option value="FUNCIONAMIENTO DE CHAPAS">FUNCIONAMIENTO DE CHAPAS</option>
                                <option value="CALENTADOR DE AGUA">CALENTADOR DE AGUA</option>
                                <option value="INSTALACIÓN ELÉCTRICA EN LO GENERAL">INSTALACIÓN ELÉCTRICA EN LO GENERAL</option>
                                <option value="ACCESORIOS ELÉCTRICOS COMPLETOS">ACCESORIOS ELÉCTRICOS COMPLETOS</option>
                                <option value="VIDRIOS">VIDRIOS</option>
                                <option value="CHAPAS">CHAPAS</option>
                                <option value="LLAVES">LLAVES</option>
                                <option value="PINTURA">PINTURA</option>
                                <option value="PASTAS">PASTAS</option>
                                <option value="TIROL">TIROL</option>
                                <option value="PISO">PISO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="TiempoCobertura">TIEMPO DE COBERTURA(MESES)</label>
                            <input type="text" id="TiempodeCobertura" name="TiempodeCobertura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="DiasRestantes">DÍAS RESTANTES DE COBERTURA</label>
                            <input type="text" id="DiasRestantes" name="DiasRestantes" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="FechaInicioV">FECHA DE INICIO</label>
                            <input type="text" id="FechaInicioV" name="FechaInicioV" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="FechaTerminoV">FECHA DE TERMINO</label>
                            <input type="text" id="FechaTerminoV" name="FechaTerminoV" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6 has-error">
                            <label for="MotivoValidez">MOTIVO DE VALIDEZ</label>
                            <select id="MotivoValidez" name="MotivoValidez" class="form-control" required="">
                                <option></option>
                                <option>DEFECTO DE FABRICA</option>
                                <option>DEFECTO DE CONSTRUCCIÓN</option>
                                <option>OTROS</option>
                            </select>
                        </div>
                        <div class="col-md-6 has-error">
                            <label for="ValidezGarantia">VALIDEZ DE GARANTÍA</label>
                            <select id="ValidezGarantia" name="ValidezGarantia" class="form-control" required="">
                                <option></option>
                                <option>VALIDA</option>
                                <option>NO VALIDA</option>
                            </select>
                        </div>
                        <div class="col-md-6 has-error">
                            <label for="FechaAtencionGarantia">FECHA DE INICIO DE ATENCIÓN DE LA GARANTÍA</label>
                            <input type="date" id="FechaAtencionGarantia" name="FechaAtencionGarantia" class="form-control" required="">
                        </div>
                        <div class="col-md-6 has-error">
                            <label for="FechaTerminoGarantia">FECHA DE TERMINO DE ATENCIÓN DE LA GARANTÍA </label>
                            <input type="date" id="FechaTerminoGarantia" name="FechaTerminoGarantia" class="form-control" required="">
                        </div>
                        <div class="col-md-12 has-error">
                            <label for="Responsable">RESPONSABLE DE ATENCIÓN EN DE LA GARANTÍA EN LA ORGANIZACIÓN </label>
                            <input type="text" id="Responsable" name="Responsable" class="form-control" required="">
                        </div>
                        <div class="col-md-12 has-error">
                            <label for="vObservaciones">OBSERVACIONES </label>
                            <input type="text" id="vObservaciones" name="vObservaciones" class="form-control" required="">
                        </div> 
                        <div class="col-md-12 has-error">
                            <label for="vGarantiaAtendida">GARANTÍA ATENDIDA  </label>
                            <select id="vGarantiaAtendida" name="vGarantiaAtendida" class="form-control" required="">
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span> CERRAR</button>
                <button id="btnValidar" name="btnValidar" type="button" class="btn btn-validation disabled">VALIDAR <span class="fa fa-check fa-lg"></span> </button> 
            </div>
        </div>
    </div>
</div>

<!----End Modals----->

<?php
$this->load->view('layout/modals/modalPostVenta', true);
$this->load->view('layout/modals/mdlMessages', true);
