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
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg fa-2x"></span> MODULO DE QUEJAS Y COMENTARIOS</h3> 
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
            </div> 
            <div class="panel-body">
                <div id="btnAccions" align="center">
                    <fieldset> 
                         
                            <button id="btnAgregarQuejasYComentarios" class="btn btn3d btn-lg btn-info fa-2x" data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaQuejasYComentarios"><span class="fa fa-plus fa-lg"></span></button> 
                            <button id="btnEditarQuejasYComentarios" class="btn btn3d btn-lg btn-success fa-2x"><span class="fa fa-pencil fa-lg"></span></button>
                            <button id="btnReCargarQuejasYComentarios" class="btn btn3d btn-lg btn-warning fa-2x"><span class="fa fa-refresh fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-danger fa-2x"><span class="fa fa-minus fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-primary fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-validation fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-yellow fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-sky fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-water fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-olive fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnEliminarQuejasYComentarios" class="btn btn3d btn-lg btn-pink fa-2x"><span class="fa fa-check fa-lg"></span></button>
                            <button id="btnExportarPDF" class="btn btn3d btn-lg btn-default fa-2x" data-toggle="modal" data-target="#mdlReporteGarantiasViviendas" ><span class="fa fa-file-pdf-o fa-lg"></span></button>
                            <button id="btnExportarPDF" class="btn btn3d btn-lg btn-excel fa-2x" data-toggle="modal" data-target="#mdlReporteGarantiasViviendas" ><span class="fa fa-file-excel-o fa-lg"></span></button>
                        
                    </fieldset>
                </div>
                <br>
                <div id="msgQuejasYComentarios"></div>
                <div id="rQuejasYComentarios"></div> 
            </div>
        </div>
        <fieldset> 
            <div class="col-md-10"></div>
            <div class="col-md-1">
                <button type="button" id="salir" name="salir" class="btn btn-primary btn-lg"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">
                    <span class="fa fa-arrow-left fa-lg"></span> Regresar</button>
            </div>
        </fieldset>
    </div> 
</div>



<!-- Modal -->

<div id="mdlNuevaQuejasYComentarios" class="modal fade" data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="fGarantiaPV">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-database fa-lg"></span> Registro de Garantías de la Vivienda </h2>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div id="msgQCO"></div>
                        <div class="col-md-12 ">
                            <input type="text" id="Id" name="Id" class="form-control hide" value="" >
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
                    <button id="btnRegistrarQuejasYComentarios" type="button" class="btn btn-primary disabled" > GUARDAR</button>
                    <button id="btnActualizarQuejasYComentarios" type="button" class="btn btn-warning hide">GUARDAR</button>
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

<!--                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tabReporteGeneral" data-toggle="tab">REPORTE GENERAL</a></li>
                    <li><a href="#tabEntregaVivienda" data-toggle="tab">PARA ENTREGA DE VIVIENDAS</a></li>
                    <li><a href="#tabFirmaEscrituras" data-toggle="tab">PARA FIRMA DE ESCRITURAS</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="tabReporteGeneral">
                        <br>-->
                        <div id="rReporteGeneralDeGarantias"></div>
<!--                    </div>
                    <div class="tab-pane fade" id="tabEntregaVivienda">
                        <br>
                        <div id="rReporteGeneralDeCitasEV"></div>
                    </div> 
                    <div class="tab-pane fade" id="tabFirmaEscrituras">
                        <br>
                        <div id="rReporteGeneralDeCitasFE"></div>
                    </div> 
                </div>-->
 
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
