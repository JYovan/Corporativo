<?php
$PERMISOS = $_SESSION["PERMISOS"][36];
?>
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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE CONTRATOS <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    
                    <div class="col-md-2 panel-title" align="right">
                        <span class="fa fa-navicon cursor-hand" onclick="onMenu()" data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                    </div>
                </div>
                <div class="panel-body"> 
                    <fieldset id="fAccions">
                        <div id="btnAccions" align="center" class="col-md-12">
                            <fieldset>
                                <?php
                                if ($PERMISOS->Crear === '1') {
                                    ?>
                                    <span  data-toggle="modal" data-easein="swoopIn">
                                        <button id="btnAgregarTramiteFactura" class="btn btn3d btn-lg btn-info fa-3x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                                            <span class="fa fa-plus fa-lg info-icon"></span>
                                        </button>
                                    </span>
                                    <?php
                                }

                                if ($PERMISOS->Modificar === '1') {
                                    ?>
                                    <button id="btnEditar" class="btn btn3d btn-lg btn-success fa-3x"
                                            data-toggle="tooltip" data-placement="top" title="" data-original-title="MODIFICAR"  >
                                        <span class="fa fa-pencil fa-lg success-icon"></span></button>

                                    <?php
                                }

                                if ($PERMISOS->Consultar === '1') {
                                    ?>
                                    <button id="btnRefresh" class="btn btn3d btn-lg btn-warning fa-3x"
                                            data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR"  >
                                        <span class="fa fa-refresh fa-lg warning-icon"></span></button>
                                    <?php
                                }

                                if ($PERMISOS->Eliminar === '1') {
                                    ?>
                                    <button id="btnCancelar" class="btn btn3d btn-lg btn-warning fa-3x"
                                            data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR"  >
                                        <span class="fa fa-ban fa-lg danger-icon"></span></button> 
                                    <?php
                                }
                                ?>

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
                    <fieldset id=""> 
                        <div id="msgContratos"></div>
                        <div id="rContratos"></div>
                    </fieldset>  

                </div>
            </div>
        </div>
    </fieldset>
</div>
<!------------------------------------MODALS------------------------------------>

<div id="mdlNuevo" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-file-text fa-lg"></span> NUEVO CONTRATO DE OBRA</h2>
            </div>
            <form id="fNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-xs-6 col-md-6 has-error">
                            <label for="">PROYECTO </label>
                            <select id="IdProyecto" name="IdProyecto" class="form-control">
                            </select>
                        </div>

                        <div class="col-xs-6 col-md-6 has-error">
                            <label for="">ETAPA </label>
                            <select id="IdEtapa" name="IdEtapa" class="form-control">
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

                        <div class="col-xs-12 col-md-12">
                            <label for="">CONTRATO DE OBRA </label>
                            <input type="text" id="ContratoDeObra" name="ContratoDeObra" class="form-control" required="" placeholder="XX-XXXX"/>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">CONTRATANTE </label>
                            <select id="Contratante" name="Contratante" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">REPRESENTANTE LEGAL DEL CONTRATANTE </label>
                            <input type="text" id="RepresentanteContratante" name="RepresentanteContratante" class="form-control" required="" placeholder="NOMBRE"/>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">CONTRATISTA </label>
                            <select id="Contratista" name="Contratista" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">REPRESENTANTE LEGAL DEL CONTRATISTA </label>
                            <input type="text" id="RepresentanteContratista" name="RepresentanteContratista" class="form-control" required="" placeholder="NOMBRE"/>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL REPRESENTANTE LEGAL DEL CONTRATANTE</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-6">
                            <label for="">NÚMERO DEL TESTIMONIO NOTARIAL DEL REPRESENTANTE LEGAL</label>
                            <input type="text" id="NumeroTestimonioLC" name="NumeroTestimonioLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE OTORGAMIENTO DEL TESTIMONIO NOTARIAL</label>
                            <input type="text" id="FechaOtorgamientoLC" name="FechaOtorgamientoLC" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">NOTARIO PÚBLICO QUE LO OTORGO</label>
                            <input type="text" id="NotarioLC" name="NotarioLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">NÚMERO DE NOTARIO PÚBLICO</label>
                            <input type="text" id="NumeroNotarioLC" name="NumeroNotarioLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Partido de adscripción</label>
                            <input type="text" id="PartidoAdscripcionLC" name="PartidoAdscripcionLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>


                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL REPRESENTANTE LEGAL DEL CONTRATISTA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-6">
                            <label for="">Número del Testimonio Notarial del representante legal  </label>
                            <input type="text" id="NumeroTestimonioLCO" name="NumeroTestimonioLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">Fecha de otorgamiento del Testimonio Notarial</label>
                            <input type="text" id="FechaOtorgamientoLCO" name="FechaOtorgamientoLCO" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Notario Público que lo otorgo</label>
                            <input type="text" id="NotarioLCO" name="NotarioLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Número de Notario Público</label>
                            <input type="text" id="NumeroNotarioLCO" name="NumeroNotarioLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Partido de adscripción</label>
                            <input type="text" id="PartidoAdscripcionLCO" name="PartidoAdscripcionLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Datos del Contratista</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <label for="">Número de Registro Patronal ante el IMSS</label>
                            <input type="text" id="NumeroAnteIMSS" name="NumeroAnteIMSS" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Información del trabajo a realizar materia del contrato</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12"> 
                            <label for="">Lugar donde se realizaran los trabajos</label>
                            <input type="text" id="LugarDelTrabajo" name="LugarDelTrabajo" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">Ciudad </label>
                            <select id="Ciudad" name="Ciudad" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Estado </label>
                            <select id="Estado" name="Estado" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">CARACTERÍSTICAS DE LA OBRA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO DE CONTRATO</label>
                            <select id="TipoContrato" name="TipoContrato" class="form-control">
                                <option></option>
                                <option value="1">PLATAFORMAS DE TEPETATE PARA VIVIENDA</option>
                                <option value="2">URBANIZACIÓN</option>
                                <option value="3">VIVIENDA</option>
                            </select>
                        </div>
                        <div class="col-md-8"> 
                            <label for="">Descripción de la obra</label>
                            <input type="text" id="DescripcionObra" name="DescripcionObra" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6"> 
                            <label for="">TOTAL DE VIVIENDAS</label>
                            <input type="number" id="TotalViviendas" name="TotalViviendas" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6"> 
                            <label for="">Fecha de Inicio</label>
                            <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" />
                        </div>
                        <div class="col-md-6"> 
                            <label for="">Fecha de termino</label>
                            <input type="text" id="FechaTermino" name="FechaTermino" class="form-control" required=""  placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" />
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">DESARROLLO</label>
                            <select id="Desarrollo" name="Desarrollo" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">MANZANA</label>
                            <select id="Manzana" name="Manzana" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">LOTE</label>
                            <select id="Lote" name="Lote" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">NÚMERO</label> 
                            <select id="NumeroDeVivienda" name="NumeroDeVivienda" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">MODELO</label>
                            <select id="ModeloVivienda" name="ModeloVivienda" class="form-control">
                            </select>
                        </div> 
                        <div class="col-md-4 col-xs-6">
                            <label for="">TIPO</label>
                            <select id="TipoVivienda" name="TipoVivienda" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div> 
                        <div class="col-md-1">
                            <br>
                            <button id="btnAddCasa" name="btnAddCasa" type="button" class="btn btn3d btn-lg btn-success"><span class="fa fa-plus fa-2x"></span></button>
                        </div>

                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-hover" id="tblProyectoDetalle" name="tblProyectoDetalle">
                                <thead>
                                    <tr class="primary">
                                        <th class="hide">DESARROLLO_ID</th>
                                        <th>DESARROLLO</th>
                                        <th class="hide">MANZANA_ID</th>
                                        <th>MANZANA</th>
                                        <th class="hide">LOTE_ID</th>
                                        <th>LOTE</th>
                                        <th class="hide">NUMEROVIVIENDA_ID</th>
                                        <th>NUMERO</th>
                                        <th class="hide">MODELO_ID</th>
                                        <th>MODELO</th>
                                        <th class="hide">TIPO_ID</th>
                                        <th>TIPO</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table> 
                        </div>

                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea id="Observaciones" name="Observaciones" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Valor total del contrato</label>
                            <input id="SubTotalContrato" name="SubTotalContrato" type="text" class="form-control" placeholder="0.0">
                        </div>
                        <div class="col-md-1">
                            <label for="">SIN I.V.A<input type="checkbox" id="SINIVA" name="SINIVA" class="form-control"></label>
                        </div>
                        <div class="col-md-3" id="dIVA">
                            <label for="">I.V.A</label>
                            <h4>$0.0</h4>
                        </div> 
                        <div class="col-md-4 col-xs-6" id="dTotal">
                            <label for="">TOTAL</label>
                            <h4>$0.0</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="">Importe total con letra</label>
                            <input type="text" id="TotalEnLetra" name="TotalEnLetra" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">% del anticipo </label>
                            <input type="text" id="PorcentajeAnticipo" name="PorcentajeAnticipo" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Monto del anticipo</label>
                            <input type="text" id="MontoAnticipo" name="MontoAnticipo" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Fecha en que se entregara el anticipo</label>
                            <input type="text" id="FechaEntrgaAnticipo" name="FechaEntrgaAnticipo" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-6">
                            <label for="">Penalización diaria por no ejecutar la obra en el plazo establecido de manera injustificada</label>
                            <input type="text" id="PenalizacionXDia" name="PenalizacionXDia" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Partido Judicial de los Tribunales que se sujetaran en caso de desacuerdo</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-6">
                            <label for="">Ciudad</label>
                            <select id="CiudadPartido" name="CiudadPartido" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Estado</label>
                            <select id="EstadoPartido" name="EstadoPartido" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Información de la firma del contrato</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-3">
                            <label for="">CIUDAD</label>
                            <select id="CiudadFirma" name="CiudadFirma" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">ESTADO</label>
                            <select id="EstadoFirma" name="EstadoFirma" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA (DIA/MES/AÑO)</label>
                            <input type="text" id="FechaFirma" name="FechaFirma" class="form-control" required=""  placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-6">
                            <label for="">Contratante</label>
                            <input type="text" id="ContratanteFirma" name="ContratanteFirma" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Testigo (Contratante)</label>
                            <input type="text" id="TestigoContratanteFirma" name="TestigoContratanteFirma" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Contratista</label>
                            <input type="text" id="ContratistaFirma" name="ContratistaFirma" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Testigo (Contratista)</label>
                            <select id="TestigoContratistaFirma" name="TestigoContratistaFirma" class="form-control">

                            </select>
                        </div>



                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>

                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default zoomIn" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnGuardar" type="button" class="btn btn-success" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlModificar" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-xs-6 col-md-6 has-error">
                            <label for="">PROYECTO </label>
                            <select id="IdProyecto" name="IdProyecto" class="form-control">
                            </select>
                        </div>

                        <div class="col-xs-6 col-md-6 has-error">
                            <label for="">ETAPA </label>
                            <select id="IdEtapa" name="IdEtapa" class="form-control">
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
                        <div class="col-xs-12 col-md-12">
                            <label for="">CONTRATO DE OBRA </label>
                            <input type="text" id="ContratoDeObra" name="ContratoDeObra" class="form-control" required="" placeholder="XX-XXXX"/>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">CONTRATANTE </label>
                            <select id="Contratante" name="Contratante" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">REPRESENTANTE LEGAL DEL CONTRATANTE </label>
                            <input type="text" id="RepresentanteContratante" name="RepresentanteContratante" class="form-control" required="" placeholder="NOMBRE"/>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">CONTRATISTA </label>
                            <select id="Contratista" name="Contratista" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="">REPRESENTANTE LEGAL DEL CONTRATISTA </label>
                            <input type="text" id="RepresentanteContratista" name="RepresentanteContratista" class="form-control" required="" placeholder="NOMBRE"/>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL REPRESENTANTE LEGAL DEL CONTRATANTE</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-6">
                            <label for="">NÚMERO DEL TESTIMONIO NOTARIAL DEL REPRESENTANTE LEGAL</label>
                            <input type="text" id="NumeroTestimonioLC" name="NumeroTestimonioLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE OTORGAMIENTO DEL TESTIMONIO NOTARIAL</label>
                            <input type="text" id="FechaOtorgamientoLC" name="FechaOtorgamientoLC" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">NOTARIO PÚBLICO QUE LO OTORGO</label>
                            <input type="text" id="NotarioLC" name="NotarioLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">NÚMERO DE NOTARIO PÚBLICO</label>
                            <input type="text" id="NumeroNotarioLC" name="NumeroNotarioLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Partido de adscripción</label>
                            <input type="text" id="PartidoAdscripcionLC" name="PartidoAdscripcionLC" class="form-control" required="" placeholder="XXXXX"/>
                        </div>


                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL REPRESENTANTE LEGAL DEL CONTRATISTA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-6">
                            <label for="">Número del Testimonio Notarial del representante legal  </label>
                            <input type="text" id="NumeroTestimonioLCO" name="NumeroTestimonioLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">Fecha de otorgamiento del Testimonio Notarial</label>
                            <input type="text" id="FechaOtorgamientoLCO" name="FechaOtorgamientoLCO" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Notario Público que lo otorgo</label>
                            <input type="text" id="NotarioLCO" name="NotarioLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Número de Notario Público</label>
                            <input type="text" id="NumeroNotarioLCO" name="NumeroNotarioLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Partido de adscripción</label>
                            <input type="text" id="PartidoAdscripcionLCO" name="PartidoAdscripcionLCO" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Datos del Contratista</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <label for="">Número de Registro Patronal ante el IMSS</label>
                            <input type="text" id="NumeroAnteIMSS" name="NumeroAnteIMSS" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Información del trabajo a realizar materia del contrato</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12"> 
                            <label for="">Lugar donde se realizaran los trabajos</label>
                            <input type="text" id="LugarDelTrabajo" name="LugarDelTrabajo" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">Ciudad </label>
                            <select id="Ciudad" name="Ciudad" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Estado </label>
                            <select id="Estado" name="Estado" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Características de la obra</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO DE CONTRATO</label>
                            <select id="TipoContrato" name="TipoContrato" class="form-control">
                                <option></option>
                                <option value="1">PLATAFORMAS DE TEPETATE PARA VIVIENDA</option>
                                <option value="2">URBANIZACIÓN</option>
                                <option value="3">VIVIENDA</option>
                            </select>
                        </div>
                        <div class="col-md-8"> 
                            <label for="">Descripción de la obra</label>
                            <input type="text" id="DescripcionObra" name="DescripcionObra" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-4 col-xs-6"> 
                            <label for="">TOTAL DE VIVIENDAS</label>
                            <input type="number" id="TotalViviendas" name="TotalViviendas" class="form-control" required="" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-6"> 
                            <label for="">Fecha de Inicio</label>
                            <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" />
                        </div>
                        <div class="col-md-6"> 
                            <label for="">Fecha de termino</label>
                            <input type="text" id="FechaTermino" name="FechaTermino" class="form-control" required=""  placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" />
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">DESARROLLO</label>
                            <select id="Desarrollo" name="Desarrollo" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">MANZANA</label>
                            <select id="Manzana" name="Manzana" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">LOTE</label>
                            <select id="Lote" name="Lote" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">NÚMERO</label> 
                            <select id="NumeroDeVivienda" name="NumeroDeVivienda" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">MODELO</label>
                            <select id="ModeloVivienda" name="ModeloVivienda" class="form-control">
                            </select>
                        </div> 
                        <div class="col-md-4 col-xs-6">
                            <label for="">TIPO</label>
                            <select id="TipoVivienda" name="TipoVivienda" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div> 
                        <div class="col-md-1 col-xs-1">
                            <br>
                            <button id="btnAddCasa" name="btnAddCasa" type="button" class="btn btn3d btn-lg btn-success"><span class="fa fa-plus fa-2x"></span></button>
                        </div>

                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-hover" id="tblProyectoDetalle" name="tblProyectoDetalle">
                                <thead>
                                    <tr class="primary">
                                        <th class="hide">DESARROLLO_ID</th>
                                        <th>DESARROLLO</th>
                                        <th class="hide">MANZANA_ID</th>
                                        <th>MANZANA</th>
                                        <th class="hide">LOTE_ID</th>
                                        <th>LOTE</th>
                                        <th class="hide">NUMEROVIVIENDA_ID</th>
                                        <th>NUMERO</th>
                                        <th class="hide">MODELO_ID</th>
                                        <th>MODELO</th>
                                        <th class="hide">TIPO_ID</th>
                                        <th>TIPO</th>
                                        <th></th>
                                        <th>ESTATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table> 
                        </div>

                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea id="Observaciones" name="Observaciones" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <label for="">Valor total del contrato</label>
                            <input id="SubTotalContrato" name="SubTotalContrato" type="text" class="form-control" placeholder="0.0">
                        </div>
                        <div class="col-md-1">
                            <label for="">SIN I.V.A<input type="checkbox" id="SINIVA" name="SINIVA" class="form-control"></label>
                        </div>
                        <div class="col-md-3" id="dIVA">
                            <label for="">I.V.A</label>
                            <h4>$0.0</h4>
                        </div> 
                        <div class="col-md-4 col-xs-6" id="dTotal">
                            <label for="">TOTAL</label>
                            <h4>$0.0</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="">Importe total con letra</label>
                            <input type="text" id="TotalEnLetra" name="TotalEnLetra" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">% del anticipo </label>
                            <input type="text" id="PorcentajeAnticipo" name="PorcentajeAnticipo" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Monto del anticipo</label>
                            <input type="text" id="MontoAnticipo" name="MontoAnticipo" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Fecha en que se entregara el anticipo</label>
                            <input type="text" id="FechaEntrgaAnticipo" name="FechaEntrgaAnticipo" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-6">
                            <label for="">Penalización diaria por no ejecutar la obra en el plazo establecido de manera injustificada</label>
                            <input type="text" id="PenalizacionXDia" name="PenalizacionXDia" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Partido Judicial de los Tribunales que se sujetaran en caso de desacuerdo</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-6">
                            <label for="">Ciudad</label>
                            <select id="CiudadPartido" name="CiudadPartido" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Estado</label>
                            <select id="EstadoPartido" name="EstadoPartido" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">Información de la firma del contrato</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <hr class="style18">
                        </div>
                        <div class="col-md-3">
                            <label for="">CIUDAD</label>
                            <select id="CiudadFirma" name="CiudadFirma" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">ESTADO</label>
                            <select id="EstadoFirma" name="EstadoFirma" class="form-control" placeholder="SELECCIONE...">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA (DIA/MES/AÑO)</label>
                            <input type="text" id="FechaFirma" name="FechaFirma" class="form-control" required=""  placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-6">
                            <label for="">Contratante</label>
                            <input type="text" id="ContratanteFirma" name="ContratanteFirma" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Testigo (Contratante)</label>
                            <input type="text" id="TestigoContratanteFirma" name="TestigoContratanteFirma" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Contratista</label>
                            <input type="text" id="ContratistaFirma" name="ContratistaFirma" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Testigo (Contratista)</label>
                            <select id="TestigoContratistaFirma" name="TestigoContratistaFirma" class="form-control">

                            </select>
                        </div>

                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>

                        <div id="msgResult" class="col-md-12">
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default zoomIn" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button id="btnModificar" type="button" class="btn btn-success" ><span class="fa fa-check fa-3x"></span></button> 
            </div>
        </div>
    </div>
</div>



<!----------------------------------------------------------------------------->
<script>
    var master_url = base_url + 'index.php/ctrlContratos/';
    var btnRefresh = $("#btnRefresh");

    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnAddCasa = mdlNuevo.find("#btnAddCasa");

    var cmbDesarrollo = mdlNuevo.find("#Desarrollo");
    var TipoVivienda = mdlNuevo.find("#TipoVivienda");
    var cmbManzana = mdlNuevo.find("#Manzana");
    var cmbLotes = mdlNuevo.find("#Lote");
    var NumeroDeVivienda = mdlNuevo.find("#NumeroDeVivienda");
    var tblProyectoDetalle = mdlNuevo.find("#tblProyectoDetalle tbody");
    var chkA = mdlNuevo.find("#chkA");
    var chkB = mdlNuevo.find("#chkB");
    var chkAYB = mdlNuevo.find("#chkAYB");
    var SubTotalContrato = mdlNuevo.find("#SubTotalContrato");
    var nvivivendas = 0;
    var ModeloVivienda = mdlNuevo.find("#ModeloVivienda");
    var SINIVA = mdlNuevo.find("#SINIVA");

    var RDocumentoImgD = mdlNuevo.find("#RDocumentoImgD");
    var RDocumentoFileD = mdlNuevo.find("#RDocumentoFileD");
    var RDocumentoDisplayD = mdlNuevo.find("#RDocumentoDisplayD");


    var btnEditar = $("#btnEditar");
    var mdlModificar = $("#mdlModificar");
    var btnAddCasaU = mdlModificar.find("#btnAddCasa");
    var btnModificar = mdlModificar.find("#btnModificar");

    var cmbDesarrolloU = mdlModificar.find("#Desarrollo");
    var TipoViviendaU = mdlModificar.find("#TipoVivienda");
    var cmbManzanaU = mdlModificar.find("#Manzana");
    var cmbLotesU = mdlModificar.find("#Lote");
    var NumeroDeViviendaU = mdlModificar.find("#NumeroDeVivienda");
    var tblProyectoDetalleU = mdlModificar.find("#tblProyectoDetalle tbody");
    var chkAU = mdlModificar.find("#chkA");
    var chkBU = mdlModificar.find("#chkB");
    var chkAYBU = mdlModificar.find("#chkAYB");
    var SubTotalContratoU = mdlModificar.find("#SubTotalContrato");
    var nvivivendas = 0;
    var ModeloViviendaU = mdlModificar.find("#ModeloVivienda");
    var SINIVAU = mdlModificar.find("#SINIVA");

    var deleted_items = [];
    var new_items = [];

    var RDocumentoImgDU = mdlModificar.find("#RDocumentoImgD");
    var RDocumentoFileDU = mdlModificar.find("#RDocumentoFileD");
    var RDocumentoDisplayDU = mdlModificar.find("#RDocumentoDisplayD");
    var btnAgregarTramiteFactura = $("#btnAgregarTramiteFactura");

    var btnCancelar = $("#btnCancelar");

    $(document).ready(function () {

        btnCancelar.click(function () {
            if (temp !== null, temp !== 0 && temp !== undefined) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                $.ajax({
                    url: master_url + 'onCancelarContrato',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    btnRefresh.trigger('click');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONTRATO CANCELADO', 'danger');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function ( ) {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnAgregarTramiteFactura.click(function () {
            getTestigosContratista();
            getContratantes();
            HoldOn.open({
                theme: "sk-cube-grid"
            });
            $.ajax({
                url: master_url + 'getProyectos',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
                });
                mdlNuevo.find("#IdProyecto").html(options);
                mdlModificar.find("#IdProyecto").html(options);
                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            mdlNuevo.modal('show');
        });

        onRefresh();
        getCiudades();
        getEstados();
        getDesarrollos();

        /*EVT COMPONENTS*/

        RDocumentoImgD.click(function () {
            RDocumentoFileD.trigger('click');
        });

        RDocumentoFileD.change(function () {
            var imageType = /image.*/;
            if (RDocumentoFileD[0].files[0] !== undefined && RDocumentoFileD[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayD.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileD[0].files[0]);
            } else {
                if (RDocumentoFileD[0].files[0] !== undefined && RDocumentoFileD[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayD.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileD[0].files[0]);
                } else {
                    RDocumentoDisplayD.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        RDocumentoImgDU.click(function () {
            RDocumentoFileDU.trigger('click');
        });

        RDocumentoFileDU.change(function () {
            var imageType = /image.*/;
            if (RDocumentoFileDU[0].files[0] !== undefined && RDocumentoFileDU[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayDU.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileDU[0].files[0]);
            } else {
                if (RDocumentoFileDU[0].files[0] !== undefined && RDocumentoFileDU[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayDU.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileDU[0].files[0]);
                } else {
                    RDocumentoDisplayDU.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        btnModificar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ACTUALIZANDO... POR FAVOR ESPERE"
            });
            var encabezado = {
                ID: temp,
                IdProyecto: mdlModificar.find("#IdProyecto").val(),
                IdEtapa: mdlModificar.find("#IdEtapa").val(),
                ContratoDeObra: mdlModificar.find("#ContratoDeObra").val(),
                Contratante: mdlModificar.find("#Contratante").val(),
                Contratista: mdlModificar.find("#Contratista").val(),
                NumeroTestimonioLC: mdlModificar.find("#NumeroTestimonioLC").val(),
                FechaOtorgamientoLC: mdlModificar.find("#FechaOtorgamientoLC").val(),
                NotarioLC: mdlModificar.find("#NotarioLC").val(),
                NumeroNotarioLC: mdlModificar.find("#NumeroNotarioLC").val(),
                PartidoAdscripcionLC: mdlModificar.find("#PartidoAdscripcionLC").val(),
                NumeroTestimonioLCO: mdlModificar.find("#NumeroTestimonioLCO").val(),
                FechaOtorgamientoLCO: mdlModificar.find("#FechaOtorgamientoLCO").val(),
                NotarioLCO: mdlModificar.find("#NotarioLCO").val(),
                NumeroNotarioLCO: mdlModificar.find("#NumeroNotarioLCO").val(),
                PartidoAdscripcionLCO: mdlModificar.find("#PartidoAdscripcionLCO").val(),
                NumeroAnteIMSS: mdlModificar.find("#NumeroAnteIMSS").val(),
                LugarDelTrabajo: mdlModificar.find("#LugarDelTrabajo").val(),
                Ciudad: mdlModificar.find("#Ciudad").val(),
                Estado: mdlModificar.find("#Estado").val(),
                DescripcionObra: mdlModificar.find("#DescripcionObra").val(),
                TotalViviendas: mdlModificar.find("#TotalViviendas").val(),
                FechaInicio: mdlModificar.find("#FechaInicio").val(),
                FechaTermino: mdlModificar.find("#FechaTermino").val(),
                Observaciones: mdlModificar.find("#Observaciones").val(),
                SubTotalContrato: mdlModificar.find("#SubTotalContrato").val(),
                SINIVAX: (mdlModificar.find("#SINIVA")[0].checked) ? 1 : 0,
                TotalEnLetra: mdlModificar.find("#TotalEnLetra").val(),
                PorcentajeAnticipo: mdlModificar.find("#PorcentajeAnticipo").val(),
                MontoAnticipo: mdlModificar.find("#MontoAnticipo").val(),
                FechaEntrgaAnticipo: mdlModificar.find("#FechaEntrgaAnticipo").val(),
                PenalizacionXDia: mdlModificar.find("#PenalizacionXDia").val(),
                CiudadPartido: mdlModificar.find("#CiudadPartido").val(),
                EstadoPartido: mdlModificar.find("#EstadoPartido").val(),
                CiudadFirma: mdlModificar.find("#CiudadFirma").val(),
                EstadoFirma: mdlModificar.find("#EstadoFirma").val(),
                FechaFirma: mdlModificar.find("#FechaFirma").val(),
                ContratanteFirma: mdlModificar.find("#ContratanteFirma").val(),
                ContratistaFirma: mdlModificar.find("#ContratistaFirma").val(),
                TestigoContratanteFirma: mdlModificar.find("#TestigoContratanteFirma").val(),
                TestigoContratistaFirma: mdlModificar.find("#TestigoContratistaFirma").val(),
                RepresentanteContratante: mdlModificar.find("#RepresentanteContratante").val(),
                RepresentanteContratista: mdlModificar.find("#RepresentanteContratista").val(),
                TipoContrato: mdlModificar.find("#TipoContrato").val(),
                TipoContratoT: mdlModificar.find("#TipoContrato").find("option:selected").text()
            };
            var detalle = [];
            tblProyectoDetalleU.find('tr').each(function (key, value) {
                $(this).each(function (k, v) {
                    var producto = {
                        IdContratoDeObra: mdlModificar.find("#ID").val(),
                        Desarrollo: $(v).find(".tdDesarrollo")[0].innerText,
                        Manzana: $(v).find(".tdManzana")[0].innerText,
                        Lote: $(v).find(".tdLote")[0].innerText,
                        TipoVivienda: $(v).find(".tdTipoVivienda")[0].innerText,
                        TipoViviendaT: $(v).find(".tdTipoViviendaT").find("span")[0].innerText,
                        NumeroVivienda: $(v).find(".tdNumeroDeVivienda")[0].innerText,
                        NumeroViviendaT: $(v).find(".tdNumeroDeViviendaT").find("span")[0].innerText,
                        ModeloVivienda: $(v).find(".tdModelo")[0].innerText,
                        ModeloViviendaT: $(v).find(".tdModeloT").find("span")[0].innerText,
                        Estatus: $(v).find(".tdEstatusSPAN").find("span")[0].innerText
                    };
                    detalle.push(producto);
                });
            });
            var frm = new FormData(mdlModificar.find("form")[0]);
            frm.append('ID', temp);
            frm.append('ENCABEZADO', JSON.stringify(encabezado));
            frm.append('DETALLE', JSON.stringify(detalle));
            $.ajax({
                url: master_url + 'onUpdateContrato',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(" * * * * * * * * * * * * * * * * LOG * * * * * * * * * * * * * *");
                console.log(data, x, jq);
                console.log(" * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *");
                RDocumentoDisplayDU.html("");
                mdlModificar.modal('hide');
                btnRefresh.trigger('click');
            }).fail(function (x, y, z) {
                console.log(" * * * * * * * * * * * * * * * * LOG ERROR * * * * * * * * * * * * * *");
                console.log(x, y, z);
                console.log(" * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *");
                mdlModificar.find("#msgResult").html(x);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        btnEditar.click(function () {
            getTestigosContratista();
            getContratantes();
            HoldOn.open({
                theme: "sk-cube-grid"
            });
            $.ajax({
                url: master_url + 'getProyectos',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
                });
                mdlNuevo.find("#IdProyecto").html(options);
                mdlModificar.find("#IdProyecto").html(options);
                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            if (temp !== undefined && temp !== '' && temp !== 0)
            {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO..."
                });
                $.ajax({
                    url: master_url + 'getContratoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    var dtm = data[0];

                    if (dtm !== undefined) {
                        mdlModificar.find("#ID").val(dtm.ID);
                        mdlModificar.find("#IdProyecto").select2("val", dtm.IdProyecto);
                        mdlModificar.find("#IdEtapa").select2("val", dtm.IdEtapa);
                        mdlModificar.find("#ContratoDeObra").val(dtm.ContratoDeObra);
                        mdlModificar.find("#Contratante").select2("val", dtm.Contratante);
                        mdlModificar.find("#Contratista").select2("val", dtm.Contratista);
                        mdlModificar.find("#NumeroTestimonioLC").val(dtm.NumeroTestimonioLC);
                        mdlModificar.find("#FechaOtorgamientoLC").val(dtm.FechaOtorgamientoLC);
                        mdlModificar.find("#NotarioLC").val(dtm.NotarioLC);
                        mdlModificar.find("#NumeroNotarioLC").val(dtm.NumeroNotarioLC);
                        mdlModificar.find("#PartidoAdscripcionLC").val(dtm.PartidoAdscripcionLC);
                        mdlModificar.find("#FechaOtorgamientoLCO").val(dtm.FechaOtorgamientoLCO);
                        mdlModificar.find("#RepresentanteContratante").val(dtm.RepresentanteContratante);
                        mdlModificar.find("#RepresentanteContratista").val(dtm.RepresentanteContratista);
                        mdlModificar.find("#NumeroTestimonioLCO").val(dtm.NumeroTestimonioLCO);
                        mdlModificar.find("#FechaOtorgamientoLCO").val(dtm.FechaOtorgamientoLCO);
                        mdlModificar.find("#NotarioLCO").val(dtm.NotarioLCO);
                        mdlModificar.find("#NumeroNotarioLCO").val(dtm.NumeroNotarioLCO);
                        mdlModificar.find("#PartidoAdscripcionLCO").val(dtm.PartidoAdscripcionLCO);
                        mdlModificar.find("#NumeroAnteIMSS").val(dtm.NumeroAnteIMSS);
                        mdlModificar.find("#LugarDelTrabajo").val(dtm.LugarDelTrabajo);
                        mdlModificar.find("#NumeroAnteIMSS").val(dtm.NumeroAnteIMSS);
                        mdlModificar.find("#Ciudad").select2("val", dtm.Ciudad);
                        mdlModificar.find("#Estado").select2("val", dtm.Estado);
                        mdlModificar.find("#TipoContrato").select2("val", dtm.TipoContrato);
                        mdlModificar.find("#DescripcionObra").val(dtm.DescripcionObra);
                        mdlModificar.find("#TotalViviendas").val(dtm.TotalViviendas);
                        mdlModificar.find("#FechaInicio").val(dtm.FechaInicio);
                        mdlModificar.find("#FechaTermino").val(dtm.FechaTermino);
                        mdlModificar.find("#Observaciones").val(dtm.Observaciones);
                        mdlModificar.find("#SubTotalContrato").val(dtm.SubTotalContrato);
                        if (parseFloat(dtm.IVA) > 0) {
                            console.log('TIENE IVA');
                            console.log(dtm.IVA);
                            console.log('TIENE IVA');
                            mdlModificar.find("#dIVA").html('<label for="">I.V.A </label><h4>$ ' + $.number(dtm.IVA, 3, '.', ', ') + '</h4>');
                            mdlModificar.find("#SINIVA").prop('checked', false);
                        } else {
                            mdlModificar.find("#dIVA").html('<label for="">I.V.A </label><h4>$ 0.0</h4>');
                            mdlModificar.find("#SINIVA").prop('checked', true);
                        }
                        mdlModificar.find("#dTotal").html('<label for="">TOTAL </label><h4>$ ' + $.number((dtm.TotalContrato), 3, '.', ', ') + '</h4>');
                        mdlModificar.find("#TotalEnLetra").val(dtm.TotalEnLetra);
                        mdlModificar.find("#PorcentajeAnticipo").val(dtm.PorcentajeAnticipo);
                        mdlModificar.find("#MontoAnticipo").val(dtm.MontoAnticipo);
                        mdlModificar.find("#FechaEntrgaAnticipo").val(dtm.FechaEntrgaAnticipo);
                        mdlModificar.find("#PenalizacionXDia").val(dtm.PenalizacionXDia);
                        mdlModificar.find("#CiudadPartido").select2("val", dtm.CiudadPartido);
                        mdlModificar.find("#EstadoPartido").select2("val", dtm.EstadoPartido);
                        mdlModificar.find("#CiudadFirma").select2("val", dtm.CiudadFirma);
                        mdlModificar.find("#EstadoFirma").select2("val", dtm.EstadoFirma);
                        mdlModificar.find("#FechaFirma").val(dtm.DiaFirma);
                        mdlModificar.find("#ContratanteFirma").val(dtm.ContratanteFirma);
                        mdlModificar.find("#ContratistaFirma").val(dtm.ContratistaFirma);
                        mdlModificar.find("#TestigoContratanteFirma").val(dtm.TestigoContratanteFirma);
                        mdlModificar.find("#TestigoContratistaFirma").select2("val", dtm.TestigoContratistaFirma);
                        //                        Registro, Estatus, Saldo, IdContrato
                        tblProyectoDetalleU.find("tr").each(function (k, v) {
                            $(this).remove();
                        });
                        $.ajax({
                            url: master_url + 'getContratosDeObraDByID',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: dtm.ID
                            }
                        }).done(function (data, x, jq) {
                            console.log(" * * * * * * * * * * * * * * * * DETALLE * * * * * * * * * * * * * *");
                            console.log(data);
                            console.log(" * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *");
                            $.each(data, function (k, v) {
                                console.log('ROW ADDED');
                                var row = '';
                                row += '<tr>';
                                row += '<td class="tdDesarrollo hide">';
                                row += v.Desarrollo;
                                row += '</td>';
                                row += '<td><span class="label label-primary">';
                                row += v.PROYECTO;
                                row += '</span></td>';
                                row += '<td class="tdManzana hide">';
                                row += v.Manzana;
                                row += '</td>';
                                row += '<td><span class="label label-danger">';
                                row += v.ManzanaT;
                                row += '</span></td>';
                                row += '<td class="tdLote hide">';
                                row += v.Lote;
                                row += '</td>';
                                row += '<td><span class="label label-success">';
                                row += v.Lote;
                                row += '</span></td>';
                                row += '<td  class="tdNumeroDeVivienda hide">';
                                row += v.NumeroVivienda;
                                row += '</td>';
                                row += '<td class="tdNumeroDeViviendaT"><span class="label label-info">';
                                //                row += (i === 1) ? NumeroDeViviendaU.val() + '-B' : NumeroViviendaAYB;
                                row += v.NumeroViviendaT;
                                row += '</span></td>';
                                row += '<td class="tdModelo hide">';
                                row += v.ModeloVivienda;
                                row += '</td>';
                                row += '<td class="tdModeloT"><span class="label label-primary">';
                                row += v.ModeloViviendaT;
                                row += '</span></td>';
                                row += '<td class="tdTipoVivienda hide">';
                                row += v.TipoVivienda;
                                row += '</td>';
                                row += '<td class="tdTipoViviendaT"><span class="label label-warning">';
                                row += v.TipoViviendaT;
                                row += '</span></td>';
                                row += '<td><buttton type="button" id="btnRemoveRow" onclick="onRemoveRow(this)" class="btn btn3d btn-danger btn-lg"><span class="fa fa-minus fa-2x"></span></button>';
                                row += '</td>';
                                row += '<td class="tdEstatus hide">';
                                row += 'ACTIVO';
                                row += '</td>';
                                row += '<td class="tdEstatusSPAN">';
                                row += '<span class="label label-emerald">ACTIVO</span>';
                                row += '</td>';
                                row += '</tr>';
                                tblProyectoDetalleU.append(row);
                            });
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                        });

                        if (dtm.rDocumento !== null && dtm.rDocumento !== undefined && dtm.rDocumento !== '') {
                            var ext = getExt(dtm.rDocumento);
                            if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "PNG") {
                                mdlModificar.find("#RDocumentoDisplayD").html("<hr><img id='trtImagen' src='" + dtm.rDocumento + "' class ='img-responsive'/>");
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                mdlModificar.find("#RDocumentoDisplayD").html('<hr> <embed src="' + dtm.rDocumento + '" type="application/pdf" width="90%" height="800px"' +
                                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            }
                        } else {
                            mdlModificar.find("#RDocumentoDisplayD").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                        }
                        mdlModificar.modal('show');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });
        TipoVivienda.change(function () {
            btnAddCasa.removeClass("disabled");
        })
        SINIVA.change(function () {
            onCalculateIVA();
        });
        SubTotalContrato.keyup(function () {
            onCalculateIVA();
        });
        cmbManzana.change(function () {
            getLotesXManzana(cmbDesarrollo.val(), cmbManzana.val());
        });
        cmbLotes.change(function () {
            getNumerosXLotes(cmbDesarrollo.val(), cmbManzana.find("option:selected").text(), cmbLotes.val());
        });
        NumeroDeVivienda.change(function () {
            getModelosXNumeroDeVivienda(cmbDesarrollo.val(), cmbManzana.find("option:selected").text(), cmbLotes.val());
        });
        ModeloVivienda.change(function () {
            getTiposDeVivienda(cmbDesarrollo.val(), cmbManzana.find("option:selected").text(), cmbLotes.val(), NumeroDeVivienda.val(), ModeloVivienda.val());
        });
        btnAddCasa.click(function () {
            var nrows = 1;
            console.log('OK CHECKED');
            HoldOn.open({
                theme: "sk-bounce",
                message: "AGREGANDO CASA... POR FAVOR ESPERE"
            });
            for (var i = 0; i < nrows; i++) {
                console.log('ROW ADDED');
                var row = '';
                row += '<tr>';
                row += '<td class="tdDesarrollo hide">';
                row += cmbDesarrollo.val();
                row += '</td>';
                row += '<td><span class="label label-primary">';
                row += cmbDesarrollo.find("option:selected").text();
                row += '</span></td>';
                row += '<td class="tdManzana hide">';
                row += cmbManzana.val();
                row += '</td>';
                row += '<td><span class="label label-danger">';
                row += cmbManzana.find("option:selected").text();
                row += '</span></td>';
                row += '<td class="tdLote hide">';
                row += cmbLotes.val();
                row += '</td>';
                row += '<td><span class="label label-success">';
                row += cmbLotes.find("option:selected").text();
                row += '</span></td>';
                row += '<td  class="tdNumeroDeVivienda hide">';
                row += tblProyectoDetalle.find("tr").length + 1;
                row += '</td>';
                row += '<td class="tdNumeroDeViviendaT"><span class="label label-info">';
                //                row += (i === 1) ? NumeroDeVivienda.val() + '-B' : NumeroViviendaAYB;
                row += NumeroDeVivienda.val();
                row += '</span></td>';
                row += '<td class="tdModelo hide">';
                row += ModeloVivienda.val();
                row += '</td>';
                row += '<td class="tdModeloT"><span class="label label-primary">';
                row += ModeloVivienda.find("option:selected").text();
                row += '</span></td>';
                row += '<td class="tdTipoVivienda hide">';
                row += TipoVivienda.val();
                row += '</td>';
                row += '<td class="tdTipoViviendaT"><span class="label label-warning">';
                row += TipoVivienda.find("option:selected").text();
                row += '</span></td>';
                row += '<td><buttton type="button" id="btnRemoveRow" onclick="onRemoveRow(this)" class="btn btn3d btn-danger btn-lg"><span class="fa fa-minus fa-2x"></span></button>';
                row += '</td>';
                row += '</tr>';
                tblProyectoDetalle.append(row);
            }
            setTimeout(function () {
                HoldOn.close();
                cmbManzana.select2("val", "");
                cmbLotes.select2("val", "");
                NumeroDeVivienda.select2("val", "");
                ModeloVivienda.select2("val", "");
                TipoVivienda.select2("val", "");
            }, 150);
        });
        TipoViviendaU.change(function () {
            btnAddCasa.removeClass("disabled");
        })
        SINIVAU.change(function () {
            onCalculateIVAU();
        });
        SubTotalContratoU.keyup(function () {
            onCalculateIVAU();
        });
        cmbManzanaU.change(function () {
            getLotesXManzanaU(cmbDesarrolloU.val(), cmbManzanaU.val());
        });
        cmbLotesU.change(function () {
            getNumerosXLotesU(cmbDesarrolloU.val(), cmbManzanaU.find("option:selected").text(), cmbLotesU.val());
        });
        NumeroDeViviendaU.change(function () {
            getModelosXNumeroDeViviendaU(cmbDesarrolloU.val(), cmbManzanaU.find("option:selected").text(), cmbLotesU.val());
        });
        ModeloViviendaU.change(function () {
            getTiposDeViviendaU(cmbDesarrolloU.val(), cmbManzanaU.find("option:selected").text(), cmbLotesU.val(), NumeroDeViviendaU.val(), ModeloViviendaU.val());
        });
        btnAddCasaU.click(function () {
            var NumeroViviendaAYB = '';
            var nrows = 1;
            console.log('OK CHECKED');
            HoldOn.open({
                theme: "sk-bounce",
                message: "AGREGANDO CASA... POR FAVOR ESPERE"
            });
            for (var i = 0; i < nrows; i++) {
                console.log('ROW ADDED');
                var row = '';
                row += '<tr>';
                row += '<td class="tdDesarrollo hide">';
                row += cmbDesarrolloU.val();
                row += '</td>';
                row += '<td><span class="label label-primary">';
                row += cmbDesarrolloU.find("option:selected").text();
                row += '</span></td>';
                row += '<td class="tdManzana hide">';
                row += cmbManzanaU.val();
                row += '</td>';
                row += '<td><span class="label label-danger">';
                row += cmbManzanaU.find("option:selected").text();
                row += '</span></td>';
                row += '<td class="tdLote hide">';
                row += cmbLotesU.val();
                row += '</td>';
                row += '<td><span class="label label-success">';
                row += cmbLotesU.find("option:selected").text();
                row += '</span></td>';
                row += '<td  class="tdNumeroDeVivienda hide">';
                row += tblProyectoDetalleU.find("tr").length + 1;
                row += '</td>';
                row += '<td class="tdNumeroDeViviendaT"><span class="label label-info">';
                //                row += (i === 1) ? NumeroDeViviendaU.val() + '-B' : NumeroViviendaAYB;
                row += NumeroDeViviendaU.val();
                row += '</span></td>';
                row += '<td class="tdModelo hide">';
                row += ModeloViviendaU.val();
                row += '</td>';
                row += '<td class="tdModeloT"><span class="label label-primary">';
                row += ModeloViviendaU.find("option:selected").text();
                row += '</span></td>';
                row += '<td class="tdTipoVivienda hide">';
                row += TipoViviendaU.val();
                row += '</td>';
                row += '<td class="tdTipoViviendaT"><span class="label label-warning">';
                row += TipoViviendaU.find("option:selected").text();
                row += '</span></td>';
                row += '<td><buttton type="button" id="btnRemoveRow" onclick="onRemoveRow(this)" class="btn btn3d btn-danger btn-lg"><span class="fa fa-minus fa-2x"></span></button>';
                row += '</td>';
                row += '<td class="tdEstatus hide">';
                row += 'NUEVO';
                row += '</td>';
                row += '<td class="tdEstatusSPAN">';
                row += '<span class="label label-info">NUEVO</span>';
                row += '</td>';
                row += '</tr>';
                var producto = {
                    Desarrollo: cmbDesarrolloU.val(),
                    Manzana: cmbManzanaU.val(),
                    Lote: cmbLotesU.val(),
                    TipoVivienda: TipoViviendaU.val(),
                    TipoViviendaT: TipoViviendaU.find("option:selected").text(),
                    NumeroVivienda: tblProyectoDetalleU.find("tr").length + 1,
                    NumeroViviendaT: NumeroDeViviendaU.val(),
                    ModeloVivienda: ModeloViviendaU.val(),
                    ModeloViviendaT: ModeloViviendaU.find("option:selected").text()
                };
                new_items.push(producto);
                tblProyectoDetalleU.append(row);
            }
            setTimeout(function () {
                HoldOn.close();
                cmbManzanaU.select2("val", "");
                cmbLotesU.select2("val", "");
                NumeroDeViviendaU.select2("val", "");
                ModeloViviendaU.select2("val", "");
                TipoViviendaU.select2("val", "");
            }, 150);
        });

        btnRefresh.click(function () {
            onGetRecords("tblContratos", master_url + "getRecords", "rContratos", "msgContratos", "NO SE ENCONTRARON REGISTROS");
        });
        btnGuardar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            var frm = mdlNuevo.find("#fNuevo").serialize();
            var encabezado = {
                IdProyecto: mdlNuevo.find("#IdProyecto").val(),
                IdEtapa: mdlNuevo.find("#IdEtapa").val(),
                ContratoDeObra: mdlNuevo.find("#ContratoDeObra").val(),
                Contratante: mdlNuevo.find("#Contratante").val(),
                Contratista: mdlNuevo.find("#Contratista").val(),
                NumeroTestimonioLC: mdlNuevo.find("#NumeroTestimonioLC").val(),
                FechaOtorgamientoLC: mdlNuevo.find("#FechaOtorgamientoLC").val(),
                NotarioLC: mdlNuevo.find("#NotarioLC").val(),
                NumeroNotarioLC: mdlNuevo.find("#NumeroNotarioLC").val(),
                PartidoAdscripcionLC: mdlNuevo.find("#PartidoAdscripcionLC").val(),
                NumeroTestimonioLCO: mdlNuevo.find("#NumeroTestimonioLCO").val(),
                FechaOtorgamientoLCO: mdlNuevo.find("#FechaOtorgamientoLCO").val(),
                NotarioLCO: mdlNuevo.find("#NotarioLCO").val(),
                NumeroNotarioLCO: mdlNuevo.find("#NumeroNotarioLCO").val(),
                PartidoAdscripcionLCO: mdlNuevo.find("#PartidoAdscripcionLCO").val(),
                NumeroAnteIMSS: mdlNuevo.find("#NumeroAnteIMSS").val(),
                LugarDelTrabajo: mdlNuevo.find("#LugarDelTrabajo").val(),
                Ciudad: mdlNuevo.find("#Ciudad").val(),
                Estado: mdlNuevo.find("#Estado").val(),
                DescripcionObra: mdlNuevo.find("#DescripcionObra").val(),
                TotalViviendas: mdlNuevo.find("#TotalViviendas").val(),
                FechaInicio: mdlNuevo.find("#FechaInicio").val(),
                FechaTermino: mdlNuevo.find("#FechaTermino").val(),
                Observaciones: mdlNuevo.find("#Observaciones").val(),
                SubTotalContrato: mdlNuevo.find("#SubTotalContrato").val(),
                SinIVA: (mdlNuevo.find("#SINIVA")[0].checked),
                TotalEnLetra: mdlNuevo.find("#TotalEnLetra").val(),
                PorcentajeAnticipo: mdlNuevo.find("#PorcentajeAnticipo").val(),
                MontoAnticipo: mdlNuevo.find("#MontoAnticipo").val(),
                FechaEntrgaAnticipo: mdlNuevo.find("#FechaEntrgaAnticipo").val(),
                PenalizacionXDia: mdlNuevo.find("#PenalizacionXDia").val(),
                CiudadPartido: mdlNuevo.find("#CiudadPartido").val(),
                EstadoPartido: mdlNuevo.find("#EstadoPartido").val(),
                CiudadFirma: mdlNuevo.find("#CiudadFirma").val(),
                EstadoFirma: mdlNuevo.find("#EstadoFirma").val(),
                FechaFirma: mdlNuevo.find("#FechaFirma").val(),
                ContratanteFirma: mdlNuevo.find("#ContratanteFirma").val(),
                ContratistaFirma: mdlNuevo.find("#ContratistaFirma").val(),
                TestigoContratanteFirma: mdlNuevo.find("#TestigoContratanteFirma").val(),
                TestigoContratistaFirma: mdlNuevo.find("#TestigoContratistaFirma").val(),
                RepresentanteContratante: mdlNuevo.find("#RepresentanteContratante").val(),
                RepresentanteContratista: mdlNuevo.find("#RepresentanteContratista").val(),
                TipoContrato: mdlNuevo.find("#TipoContrato").val(),
                TipoContratoT: mdlNuevo.find("#TipoContrato").find("option:selected").text()
            };
            var detalle = [];
            tblProyectoDetalle.find('tr').each(function (key, value) {
                $(this).each(function (k, v) {
                    var producto = {
                        IdContratoDeObra: $("#IdContratoDeObra").val(),
                        Desarrollo: $(v).find(".tdDesarrollo")[0].innerText,
                        Manzana: $(v).find(".tdManzana")[0].innerText,
                        Lote: $(v).find(".tdLote")[0].innerText,
                        TipoVivienda: $(v).find(".tdTipoVivienda")[0].innerText,
                        TipoViviendaT: $(v).find(".tdTipoViviendaT").find("span")[0].innerText,
                        NumeroVivienda: $(v).find(".tdNumeroDeVivienda")[0].innerText,
                        NumeroViviendaT: $(v).find(".tdNumeroDeViviendaT").find("span")[0].innerText,
                        ModeloVivienda: $(v).find(".tdModelo")[0].innerText,
                        ModeloViviendaT: $(v).find(".tdModeloT").find("span")[0].innerText
                    };
                    detalle.push(producto);
                });
            });
            $.ajax({
                url: master_url + 'onAddContrato',
                type: "POST",
                data: {
                    ENCABEZADO: encabezado,
                    DETALLE: detalle
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                //                setTimeout(function () {
                btnGuardar.removeClass('disabled').find('span').addClass('fa-check').removeClass('fa-cog fa-spin');
                mdlNuevo.modal('hide');
                btnRefresh.trigger('click');
                //                }, 2000);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        cmbDesarrollo.change(function () {
            console.log(cmbDesarrollo.val());
            cmbManzana.select2("val", "");
            cmbLotes.select2("val", "");
            NumeroDeVivienda.select2("val", "");
            ModeloVivienda.select2("val", "");
            TipoVivienda.select2("val", "");
            cmbManzana.html("");
            cmbLotes.html("");
            NumeroDeVivienda.html("");
            ModeloVivienda.html("");
            TipoVivienda.html("");
            getManzanasXDesarrollo(cmbDesarrollo.val());
        });
        cmbDesarrolloU.change(function () {
            console.log(cmbDesarrolloU.val());
            cmbManzanaU.select2("val", "");
            cmbLotesU.select2("val", "");
            NumeroDeViviendaU.select2("val", "");
            ModeloViviendaU.select2("val", "");
            TipoViviendaU.select2("val", "");
            cmbManzanaU.html("");
            cmbLotesU.html("");
            NumeroDeViviendaU.html("");
            ModeloViviendaU.html("");
            TipoViviendaU.html("");
            getManzanasXDesarrolloU(cmbDesarrolloU.val());
        });
        mdlNuevo.on('hidden.bs.modal', function () {
            mdlNuevo.find("table tbody").html("");
            mdlNuevo.find("input:checkbox").prop('checked', false);
        });
    });
    function onCalculateIVA() {
        var SINIVA = $("#SINIVA");
        var SubTotalContrato = $("#SubTotalContrato");
        if (SINIVA[0].checked === false) {
            $("#dIVA").html('<label for="">I.V.A </label><h4>$ ' + $.number((SubTotalContrato.val() * 0.16), 3, '.', ', ') + '</h4>');
            $("#dTotal").html('<label for="">TOTAL </label><h4>$ ' + $.number((SubTotalContrato.val() * 1.16), 3, '.', ', ') + '</h4>');
        } else {
            $("#dIVA").html('<label for="">I.V.A </label><h4>$ 0.0</h4>');
            $("#dTotal").html('<label for="">TOTAL </label><h4>$ ' + $.number((SubTotalContrato.val()), 3, '.', ', ') + '</h4>');
        }
    }
    function onCalculateIVAU() {
        var SINIVA = mdlModificar.find("#SINIVA");
        var SubTotalContrato = mdlModificar.find("#SubTotalContrato");
        if (SINIVA[0].checked === false) {
            mdlModificar.find("#dIVA").html('<label for="">I.V.A </label><h4>$ ' + $.number((SubTotalContrato.val() * 0.16), 3, '.', ', ') + '</h4>');
            mdlModificar.find("#dTotal").html('<label for="">TOTAL </label><h4>$ ' + $.number((SubTotalContrato.val() * 1.16), 3, '.', ', ') + '</h4>');
        } else {
            mdlModificar.find("#dIVA").html('<label for="">I.V.A </label><h4>$ 0.0</h4>');
            mdlModificar.find("#dTotal").html('<label for="">TOTAL </label><h4>$ ' + $.number((SubTotalContrato.val()), 3, '.', ', ') + '</h4>');
        }
    }
    function onRefresh() {
        getTestigosContratista();
        getContratantes();
        onGetRecords("tblContratos", master_url + "getRecords", "rContratos", "msgContratos", "NO SE ENCONTRARON REGISTROS");
    }
    function onGetRecords(tblname, url, target_result, target_fail_messages, fail_message) {
        temp = 0;
        HoldOn.open({
            theme: "sk-folding-cube",
            message: "CARGANDO... POR FAVOR ESPERE"
        });
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
                console.log(errorThrown.responseText);
            }
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

//                $("#" + target_result + "  tbody > tr").each(function (k, v) {
//                    var frow = $(this).find("td");
                //                    frow[0].innerHTML = '<span class="label label-primary">' + frow[0].innerText + '</span>';
                //                });
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
                    console.log($(dtm));
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[0]));
                    temp = $(dtm[0])[0].innerText;
                    console.log(temp);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data(); 
                    temp = $(dtm[0])[0].innerText;
                    btnEditar.trigger("click");
                });
                // Apply the search thead
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.header()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            // Apply the search
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
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
        }
        ).fail(function (x, y, z) {
            console.log(x, y, z);
            console.log(x.responseText);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getContratantes() {
        $.ajax({
            url: master_url + 'getContratantes',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.RAZON + '</option>';
                    });
                    $(".modal #Contratante").html(options);
                    $(".modal #Contratista").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
    function getTestigosContratista() {
        $.ajax({
            url: master_url + 'getTestigosContratista',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.TESTIGO + '</option>';
                    });
                    $(".modal #TestigoContratistaFirma").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
    function getEstados() {
        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.ESTADOS + '</option>';
                    });
                    $(".modal #Estado").html(options);
                    $(".modal #EstadoPartido").html(options);
                    $(".modal #EstadoFirma").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
    function getCiudades() {
        $.ajax({
            url: master_url + 'getCiudades',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.CIUDAD + '</option>';
                    });
                    $(".modal #Ciudad").html(options);
                    $(".modal #CiudadPartido").html(options);
                    $(".modal #CiudadFirma").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
    function getDesarrollos() {
        $.ajax({
            url: master_url + 'getDesarrollos',
            type: "POST",
            dataType: "JSON",
        }).done(function (data, x, jq) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.PROYECTOS + '</option>';
                });
                $(".modal #Desarrollo").html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }
    function getManzanasXDesarrollo(ID) {
        var Manzana = mdlNuevo.find("#Manzana");
        Manzana.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getManzanasXDesarrollo',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID
            }
        }).done(function (data) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                });
                Manzana.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getLotesXManzana(ID, M) {
        var Lote = mdlNuevo.find("#Lote");
        Lote.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getLotesXManzana',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data[0] !== undefined && dtm.LOTES !== undefined) {
                $.each(dtm.LOTES.split(","), function (k, v) {
                    options = options + '<option value="' + v + '">' + v + '</option>';
                });
                Lote.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getNumerosXLotes(ID, M, L) {
        var NumeroDeVivienda = mdlNuevo.find("#NumeroDeVivienda");
        NumeroDeVivienda.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getNumerosXLotes',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
            console.log('NUMEROS');
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    console.log(v);
                    $.each(v.NUMEROS.split(','), function (k, vv) {
                        options = options + '<option value="' + vv + '">' + (vv + ' (' + v.MODELO + ')') + '</option>';
                    });
                });
                NumeroDeVivienda.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getModelosXNumeroDeVivienda(ID, M, L) {
        var ModeloVivienda = mdlNuevo.find("#ModeloVivienda");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getModelosXNumeroDeVivienda',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MODELO + '</option>';
                });
                ModeloVivienda.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getTiposDeVivienda(ID, M, L, NV, MOD) {
        var TipoVivienda = mdlNuevo.find("#TipoVivienda");
        TipoVivienda.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getTiposDeVivienda',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L,
                NV: NV,
                MD: MOD
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.TIPO + '</option>';
                });
                TipoVivienda.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getManzanasXDesarrolloU(ID) {
        var Manzana = mdlModificar.find("#Manzana");
        Manzana.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getManzanasXDesarrollo',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID
            }
        }).done(function (data) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                });
                Manzana.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getLotesXManzanaU(ID, M) {
        var Lote = mdlModificar.find("#Lote");
        Lote.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getLotesXManzana',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data[0] !== undefined && dtm.LOTES !== undefined) {
                $.each(dtm.LOTES.split(","), function (k, v) {
                    options = options + '<option value="' + v + '">' + v + '</option>';
                });
                Lote.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getNumerosXLotesU(ID, M, L) {
        var NumeroDeVivienda = mdlModificar.find("#NumeroDeVivienda");
        NumeroDeVivienda.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getNumerosXLotes',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
            console.log('NUMEROS');
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    console.log(v);
                    $.each(v.NUMEROS.split(','), function (k, vv) {
                        options = options + '<option value="' + vv + '">' + (vv + ' (' + v.MODELO + ')') + '</option>';
                    });
                });
                NumeroDeVivienda.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getModelosXNumeroDeViviendaU(ID, M, L) {
        var ModeloVivienda = mdlModificar.find("#ModeloVivienda");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getModelosXNumeroDeVivienda',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MODELO + '</option>';
                });
                ModeloVivienda.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getTiposDeViviendaU(ID, M, L, NV, MOD) {
        var TipoVivienda = mdlModificar.find("#TipoVivienda");
        TipoVivienda.html("");
        console.log(ID, M, L, NV, MOD);
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getTiposDeVivienda',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L,
                NV: NV,
                MD: MOD
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.TIPO + '</option>';
                });
                TipoVivienda.html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getTipos() {
        $.ajax({
            url: master_url + 'getTipos',
            type: "POST",
            dataType: "JSON",
        }).done(function (data, x, jq) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.TIPO + '</option>';
                });
                $(".modal #TipoVivienda").html(options);
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }
    function onCalculate() {
        $("#dIVA").text('OK')
    }
    function onRemoveRow(evt) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "REMOVIMIENDO CASA... POR FAVOR ESPERE"
        });
        var row = $(evt).parent().parent();
        console.log("* * * * * * * * * * * VALORES ANTES DE REMOVER EL ITEM* * * * * * * * * * ");
        console.log(row);
        console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        var producto = {
            Desarrollo: $(row).find(".tdDesarrollo")[0].innerText,
            Manzana: $(row).find(".tdManzana")[0].innerText,
            Lote: $(row).find(".tdLote")[0].innerText,
            TipoVirowienda: $(row).find(".tdTipoVivienda")[0].innerText,
            TipoVirowiendaT: $(row).find(".tdTipoViviendaT").find("span")[0].innerText,
            NumeroVirowienda: $(row).find(".tdNumeroDeVivienda")[0].innerText,
            NumeroVirowiendaT: $(row).find(".tdNumeroDeViviendaT").find("span")[0].innerText,
            ModeloVirowienda: $(row).find(".tdModelo")[0].innerText,
            ModeloVirowiendaT: $(row).find(".tdModeloT").find("span")[0].innerText
        };
        deleted_items.push(producto);
        row.remove();
        HoldOn.close();
    }

</script>