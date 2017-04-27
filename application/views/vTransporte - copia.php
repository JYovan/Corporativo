<div class="row">	
    <div class="col-md-12 margin-15-top"> 
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" onclick="onHideFunctions()"><h1 class="text-white">MÓDULO DE UNIDADES DE TRANSPORTE<span class="fa fa-chevron-up" ></span></h1></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <label for="chkTooltip"><input type="checkbox" class="" id="chkTooltip" name="chkTooltip" data-toggle="tooltip" data-placement="left" data-original-title="MOSTRAR LEYENDAS"></label>
                </div>
            </div>
            <div class="panel-body" align="center">
                <div class="col-md-12">
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnNuevo" name="btnNuevo"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="NUEVO">
                        <span class="fa fa-plus fa-3x info-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnEditar" name="btnEditar"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="EDITAR">
                        <span class="fa fa-pencil fa-3x success-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnRefrescar" name="btnRefrescar" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="REFRESCAR">
                        <span class="fa fa-refresh fa-3x warning-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminar" name="btnEliminar" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ELIMINAR">
                        <span class="fa fa-ban fa-3x danger-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMantenimiento" name="btnMantenimiento"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="NUEVO MANTENIMIENTO">
                        <span class="fa fa-wrench fa-3x purple-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMantenimientos" name="btnMantenimientos"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="MANTENIMIENTOS">
                        <span class="fa fa-eye fa-3x purple-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnEliminarMantenimiento" name="btnEliminarMantenimiento"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ELIMINAR MANTENIMIENTO">
                        <span class="fa fa-ban fa-3x purple-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnVerificar" name="btnVerificar"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="NUEVA VERIFICACION">
                        <span class="fa fa-calendar-check-o fa-3x kingblue-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnVerificaciones" name="btnVerificaciones"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="VERIFICACIONES">
                        <span class="fa fa-eye fa-3x kingblue-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnEliminarVerificacion" name="btnEliminarVerificacion"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ELIMINAR VERIFICACION">
                        <span class="fa fa-ban fa-3x kingblue-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnAccidente" name="btnAccidente"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="NUEVO ACCIDENTE">
                        <span class="fa fa-ambulance fa-3x cyan-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnAccidentes" name="btnAccidentes"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ACCIDENTES">
                        <span class="fa fa-eye fa-3x cyan-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnEliminarAccidente" name="btnEliminarAccidente"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ELIMINAR ACCIDENTE">
                        <span class="fa fa-ban fa-3x cyan-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnSolicitud" name="btnSolicitud"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="NUEVA SOLICITUD">
                        <span class="fa fa-id-card fa-3x teal-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnSolicitudes" name="btnSolicitudes"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="SOLICITUDES">
                        <span class="fa fa-eye fa-3x teal-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnAprobarSolicitud" name="btnAprobarSolicitud"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="APROBAR SOLICITUD">
                        <span class="fa fa-check-circle-o fa-3x teal-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnEliminarSolicitud" name="btnEliminarSolicitud"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ELIMINAR SOLICITUD">
                        <span class="fa fa-ban fa-3x teal-icon"></span>
                    </button>
                </div>
                <div class="col-md-12" id="tblResultado"></div>
            </div>
        </div>
    </div>
</div>
<!-------MODALS------->
<div class="modal animated zoomInUp" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-bus fa-lg"></span> NUEVA UNIDAD DE TRANSPORTE</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-4 col-xs-12">
                            <label for="">Fecha</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control cursor-hand" readonly="" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">CLASE DE LA UNIDAD</label>
                            <select id="Clase" name="Clase" class="form-control">
                                <option></option>
                                <option value="1">AUTOMÓVIL</option>
                                <option value="2">CAMIÓN</option>
                                <option value="3">CAMIONETA</option>
                                <option value="4">TRACTOR</option>
                                <option value="5">VEHÍCULO ELECTRÓNICO</option>
                                <option value="6">REMOLQUE</option>
                                <option value="7">MOTOCICLETA</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TIPO DE AUTOMÓVIL</label>
                            <input type="text" id="Tipo" name="Tipo" class="form-control" placeholder="EJ: Lamborghini CENTENARIO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control" placeholder="EJ: Lamborghini" >
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">MODELO</label>
                            <input type="text" id="Modelo" name="Modelo" class="form-control" placeholder="2017">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">COLOR</label>
                            <input type="text" id="Color" name="Color" class="form-control" placeholder="EJ: NEGRO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TIPO DE COMBUSTIBLE</label>
                            <input type="text" id="Combustible" name="Combustible" class="form-control" placeholder="DIESEL" >
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">NOMBRE DEL PROPIETARIO</label>
                            <input type="text" id="Propietario" name="Propietario" class="form-control" placeholder="EJ: ROGELIO RAMIREZ TORRES">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">PLACAS</label>
                            <input type="text" id="Placas" name="Placas" class="form-control" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">VALOR DE ADQUISICIÓN</label>
                            <input type="text" id="Valor" name="Valor" class="form-control" placeholder="EJ: 9876000.00">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">ASEGURADORA</label>
                            <input type="text" id="Aseguradora" name="Aseguradora" class="form-control" >
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">NÚMERO DE POLIZA</label>
                            <input type="text" id="Poliza" name="Poliza" class="form-control" >
                        </div>

                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div class="col-md-6">
                                    <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS</h1>  
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasFotos" name="btnMasFotos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS FOTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div>

                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div id="" class="col-md-6">
                                    <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN</h1>
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasDocumentos" name="btnMasDocumentos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS DOCUMENTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div>
                            <div id="SetDeObservacionesXDocumento" class="col-md-12"> 

                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXDocumentoX"></div>
                                    <div class="col-md-12">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: DOCUMENTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnFichero" name="btnFichero"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR DOCUMENTO" onclick="onAgregarDocumento(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarDocumento" name="btnEliminarDocumento" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div class="modal animated zoomInUp" id="mdlEditar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-bus fa-lg"></span> EDITAR UNIDAD DE TRANSPORTE</h2>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">Fecha</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control cursor-hand" readonly="" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">CLASE DE LA UNIDAD</label>
                            <select id="Clase" name="Clase" class="form-control">
                                <option></option>
                                <option value="1">AUTOMÓVIL</option>
                                <option value="2">CAMIÓN</option>
                                <option value="3">CAMIONETA</option>
                                <option value="4">TRACTOR</option>
                                <option value="5">VEHÍCULO ELECTRÓNICO</option>
                                <option value="6">REMOLQUE</option>
                                <option value="7">MOTOCICLETA</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TIPO DE AUTOMÓVIL</label>
                            <input type="text" id="Tipo" name="Tipo" class="form-control" placeholder="EJ: Lamborghini CENTENARIO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control" placeholder="EJ: Lamborghini" >
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">MODELO</label>
                            <input type="text" id="Modelo" name="Modelo" class="form-control" placeholder="2017">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">COLOR</label>
                            <input type="text" id="Color" name="Color" class="form-control" placeholder="EJ: NEGRO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TIPO DE COMBUSTIBLE</label>
                            <input type="text" id="Combustible" name="Combustible" class="form-control" placeholder="DIESEL" >
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">NOMBRE DEL PROPIETARIO</label>
                            <input type="text" id="Propietario" name="Propietario" class="form-control" placeholder="EJ: ROGELIO RAMIREZ TORRES">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">PLACAS</label>
                            <input type="text" id="Placas" name="Placas" class="form-control" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">VALOR DE ADQUISICIÓN</label>
                            <input type="text" id="Valor" name="Valor" class="form-control" placeholder="EJ: 9876000.00">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">ASEGURADORA</label>
                            <input type="text" id="Aseguradora" name="Aseguradora" class="form-control" >
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">NÚMERO DE POLIZA</label>
                            <input type="text" id="Poliza" name="Poliza" class="form-control" >
                        </div>
                        <!----INICIO SECCION DE FOTOS X UNIDAD DE TRANSPORTE--->

                        <div class="col-xs-12 col-md-12" align="center">
                            <div id="" class="col-md-12">
                                <div class="col-md-12">
                                    <h1><span class="fa fa-paperclip fa-2x kingblue-icon"></span> ADJUNTAR</h1>  
                                </div> 
                            </div>
                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-3">
                                        <label for="">TIPO</label>
                                        <select class="form-control" id="cmbTipo" name="cmbTipo"> 
                                            <option value="1">FOTO</option>
                                            <option value="2">DOCUMENTACIÓN</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFotoU(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivoU" name="btnArchivoU" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnAgregarAdjunto" name="btnAgregarAdjunto" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x lime-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS</h1> 
                            <div id="VistPreviaXFoto"></div>
                        </div>
                        <div id="tblFotosXTransporte"></div>

                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN</h1> 
                            <div id="VistPreviaXDocumento"></div>
                        </div>
                        <div id="tblDocumentosXTransporte"></div>

                        <div class="col-md-12"><hr></div>

                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-wrench fa-2x purple-icon"></span> MANTENIMIENTOS</h1> 
                            <div id="VistPreviaXMantenimientoXDocumento"></div>
                        </div>
                        <div id="tblDocumentosXMantenimientoXTransporte"></div>

                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-calendar-check-o fa-2x kingblue-icon"></span> VERIFICACIONES</h1> 
                            <div id="VistPreviaXVerificacionXDocumento"></div>
                        </div>
                        <div id="tblDocumentosXVerificacionXTransporte"></div>


                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-ambulance fa-2x cyan-icon"></span> ACCIDENTES</h1> 
                            <div id="VistPreviaXAccidenteXDocumento"></div>
                        </div>
                        <div id="tblDocumentosXAccidenteXTransporte"></div>


                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-id-card fa-2x teal-icon"></span> SOLICITUDES</h1> 
                            <div id="VistPreviaXAccidenteXDocumento"></div>
                        </div>
                        <div id="tblDocumentosXAccidenteXTransporte"></div>

                        <div id="msgEditar" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal animated zoomInUp" id="mdlMantenimiento" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-wrench fa-lg"></span> NUEVO MANTENIMIENTO </h2>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12" align="center">
                            <label for="">UNIDAD DE TRANSPORTE</label>
                            <div id="Auto"></div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TIPO DE MANTENIMIENTO</label>
                            <select id="Mantenimiento" name="Mantenimiento" class="form-control">
                                <option></option>
                                <option value="1">CORRECTIVO</option>
                                <option value="2">PREVENTIVO</option>
                                <option value="3">PREDICTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">KILOMETRAJE</label>
                            <input type="text" id="Kilometraje" name="Kilometraje" class="form-control" placeholder="EJ: 100,000 KM">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TALLER</label>
                            <input type="text" id="Taller" name="Taller" class="form-control" placeholder="EJ: RABINA" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">COSTO DEL SERVICIO ($)</label>
                            <input type="text" id="Costo" name="Costo" class="form-control" placeholder="EJ: 15000.00">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">TAREAS REALIZADAS</label> 
                            <textarea id="Tareas" name="Tareas" rows="4" cols="20" class="form-control"></textarea>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">FECHA DEL MANTENIMIENTO</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control cursor-hand" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>    
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div class="col-md-6">
                                    <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS</h1>  
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasFotos" name="btnMasFotos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS FOTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div> 
                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div id="" class="col-md-6">
                                    <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN</h1>
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasDocumentos" name="btnMasDocumentos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS DOCUMENTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div>
                            <div id="SetDeObservacionesXDocumento" class="col-md-12"> 

                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXDocumentoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: DOCUMENTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnFichero" name="btnFichero"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR DOCUMENTO" onclick="onAgregarDocumento(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarDocumento" name="btnEliminarDocumento" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div id="msgEditar" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal animated zoomInUp" id="mdlVerificacion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> NUEVA VERIFICACIÓN </h2>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12" align="center">
                            <label for="">UNIDAD DE TRANSPORTE</label>
                            <div id="Auto"></div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">AÑO DE VERIFICACIÓN</label>     
                            <input type="text" id="AnioVerificacion" name="AnioVerificacion" class="form-control" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="yyyy">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">SEMESTRE DEL AÑO</label>
                            <select id="Semestre" name="Semestre" class="form-control">
                                <option></option>
                                <option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                                <option value="SEGUNDO SEMESTRE">SEGUNDO SEMESTRE</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">FECHA DE REALIZACIÓN</label>
                            <input type="text" id="FechaRealizacion" name="FechaRealizacion" class="form-control cursor-hand" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <label for="">LUGAR DE REALIZACIÓN</label>
                            <textarea id="LugarRealizacion" name="LugarRealizacion" rows="5" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div class="col-md-6">
                                    <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS</h1>  
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasFotos" name="btnMasFotos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS FOTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div> 
                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div id="" class="col-md-6">
                                    <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN</h1>
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasDocumentos" name="btnMasDocumentos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS DOCUMENTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div>
                            <div id="SetDeObservacionesXDocumento" class="col-md-12"> 

                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXDocumentoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: DOCUMENTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnFichero" name="btnFichero"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR DOCUMENTO" onclick="onAgregarDocumento(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarDocumento" name="btnEliminarDocumento" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div id="msgEditar" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--ACCIDENTE-->
<div class="modal animated zoomInUp" id="mdlAccidente" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> NUEVO ACCIDENTE </h2>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12" align="center">
                            <label for="">UNIDAD DE TRANSPORTE</label>
                            <div id="Auto"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DEL ACCIDENTE</label>     
                            <input type="text" id="FechaAccidente" name="FechaAccidente" class="form-control cursor-hand" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div> 
                        <div class="col-md-6">
                            <label for="">HORA DEL ACCIDENTE</label>
                            <input type="text" id="HoraAccidente" name="HoraAccidente" class="form-control" placeholder="12:00:00 PM">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">DESCRIPCIÓN DEL ACCIDENTE</label>
                            <textarea id="Descripcion" type="text" name="Descripcion" rows="5" cols="20" class="form-control" value="" placeholder="YO NO CHOQUE, ME CHOCARON">
                            </textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">DAÑOS DEL TRANSPORTE CAUSADOS</label>
                            <textarea id="Danios"  type="text"  name="Danios" rows="5" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div class="col-md-6">
                                    <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS</h1>  
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasFotos" name="btnMasFotos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS FOTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div> 
                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div id="" class="col-md-6">
                                    <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN</h1>
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasDocumentos" name="btnMasDocumentos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS DOCUMENTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div>
                            <div id="SetDeObservacionesXDocumento" class="col-md-12"> 

                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXDocumentoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: DOCUMENTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnFichero" name="btnFichero"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR DOCUMENTO" onclick="onAgregarDocumento(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarDocumento" name="btnEliminarDocumento" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div id="msgEditar" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--SOLICITUD-->

<div class="modal animated zoomInUp" id="mdlSolicitud" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> NUEVA SOLICITUD </h2>
            </div>
            <form id="frmSolicitud">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12" align="center">
                            <label for="">UNIDAD DE TRANSPORTE</label>
                            <div id="Auto"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE LA COMISIÓN</label>     
                            <input type="text" id="Comision" name="Comision" class="form-control" placeholder="EJ: RECIBI X MATERIAL">
                        </div> 
                        <div class="col-md-6">
                            <label for="">FECHA DE LA COMISIÓN</label>
                            <input type="text" id="FechaComision" name="FechaComision" class="form-control cursor-hand"  placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">DESCRIPCIÓN DE LA COMISIÓN (RUTA)</label>
                            <textarea id="Descripcion" type="text" name="Descripcion" rows="5" cols="20" class="form-control" value="" placeholder="1.Dirígete al oeste por Loma del Pedregal hacia Loma del Copal. 2.Gira a la derecha con dirección a Loma del Copal  3.Gira a la izquierda con dirección a Blvd. Campestre">
                            </textarea>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">ESTADO DESTINO</label>
                            <select class="form-control" id="EstadoDestino" name="EstadoDestino">

                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">CIUDAD DESTINO</label>
                            <select class="form-control" id="CiudadDestino" name="CiudadDestino">

                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">LUGAR DE SALIDA</label>
                            <textarea id="LugarSalida" type="text" name="LugarSalida" rows="5" cols="20" class="form-control" value="" placeholder="Blvd. Campestre 1821
                                      Lomas del Campestre, 37150 León, Gto.">
                            </textarea>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">HORA DE SALIDA</label>     
                            <input type="text" id="HoraSalida" name="HoraSalida" class="form-control" placeholder="EJ: 10:15 AM">
                        </div> 
                        <div class="col-md-4 col-xs-12">
                            <label for="">HORA DE REGRESO</label>     
                            <input type="text" id="HoraRegreso" name="HoraRegreso" class="form-control" placeholder="EJ: 12:15 AM">
                        </div> 
                        <div class="col-md-12"></div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">DURACIÓN DE LA COMISIÓN (HRS)</label>     
                            <input type="text" id="DuracionComision" name="DuracionComision" class="form-control" placeholder="EJ: 2 HORAS ">
                        </div> 
                        <div class="col-md-4 col-xs-12">
                            <label for="">NÚMERO DE PERSONAS QUE ABORDARÁN LA UNIDAD</label>     
                            <input type="text" id="Pasajeros" name="Pasajeros" class="form-control" placeholder="EJ: 5 PERSONAS">
                        </div> 
                        <div class="col-md-4 col-xs-12">
                            <label for="">PERSONAS QUE ABORDARÁN LA UNIDAD</label>      
                            <textarea id="NombresPasajeros" type="text" name="NombresPasajeros" rows="5" cols="20" class="form-control" value="" placeholder="EJ: ARMANDO, PEPITO, CONTA, JOSE, VIRI, MILTON">
                            </textarea>
                        </div> 
                        <div class="col-md-12">
                            <label for="">CONDUCTOR DEL VEHÍCULO</label>
                            <select  id="Conductor" name="Conductor" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div class="col-md-6">
                                    <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS</h1>  
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasFotos" name="btnMasFotos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS FOTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div> 
                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6" align="center">  
                            <div id="" class="col-md-12">
                                <div id="" class="col-md-6">
                                    <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN</h1>
                                </div> 
                                <div class="col-md-6">
                                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnMasDocumentos" name="btnMasDocumentos" data-toggle="tooltip" data-placement="top" data-original-title="AGREGAR MÁS DOCUMENTOS">
                                        <span class="fa fa-plus fa-2x lime-icon"></span> 
                                    </button>
                                </div>
                            </div>
                            <div id="SetDeObservacionesXDocumento" class="col-md-12"> 

                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXDocumentoX"></div>
                                    <div class="col-md-9">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: DOCUMENTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnFichero" name="btnFichero"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR DOCUMENTO" onclick="onAgregarDocumento(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarDocumento" name="btnEliminarDocumento" onclick="onEliminarFoto(this)" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR"><span class="fa fa-trash fa-2x black-icon"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div id="msgEditar" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal animated zoomInUp" id="mdlAprobarSolicitud" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> APROBAR SOLICITUD </h2>
            </div>
            <form id="frmSolicitud">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12" align="center">
                            <label for="">UNIDAD DE TRANSPORTE</label>
                            <div id="Auto"></div>
                            <div class="col-md-6">
                                <label for="">NOMBRE DE LA COMISIÓN</label>
                                <div id="Comision"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="">DESCRIPCIÓN DE LA COMISIÓN (RUTA)</label>
                                <div id="Descripcion"></div>
                            </div>
                        </div> 
                        <div class="col-md-12"></div> 
                        <div class="col-md-4 col-xs-12">
                            <label for="">FECHA DE AUTORIZACIÓN</label>
                            <input type="text" id="FechaAutorizacion" name="FechaAutorizacion" class="form-control cursor-hand"  placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">DISPONIBILIDAD</label>
                            <select class="form-control" id="Disponibilidad" name="Disponibilidad">
                                <option value="NO"></option> 
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label for="">APROBACIÓN</label>
                            <select class="form-control" id="EstatusSolicitud" name="EstatusSolicitud">
                                <option value="NO"></option> 
                                <option value="APROBADO">APROBADO</option>
                                <option value="NO APROBADO">NO APROBADO</option>
                                <option value="NO DISPONIBLE">NO DISPONIBLE</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <label for="">AUTORIZA /NO AUTORIZA</label>
                            <select class="form-control" id="Autoriza" name="Autoriza">

                            </select>
                        </div>
                        <div class="col-md-12"></div> 
                        <div id="msgEditar" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div class="modal animated zoomInUp" id="mdlVerSolicitud" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> SOLICITUD </h2>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12" align="center">
                        <label for="">UNIDAD DE TRANSPORTE</label>
                        <div id="Auto"></div>
                        <div class="col-md-8">
                            <label for="">NOMBRE DE LA COMISIÓN</label>
                            <div id="Comision"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE LA COMISIÓN</label>
                            <div id="FechaComision"></div>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-8">
                            <label for="">DESCRIPCIÓN DE LA COMISIÓN (RUTA)</label>
                            <div id="Descripcion"></div>
                        </div>
                        <div class="col-md-2">
                            <label for="">ESTADO DESTINO</label>
                            <div id="EstadoDestino"></div>
                        </div>
                        <div class="col-md-2">
                            <label for="">CIUDAD DESTINO</label>
                            <div id="CiudadDestino"></div>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">LUGAR DE SALIDA</label>
                            <div id="LugarSalida"></div>
                        </div>
                        <div class="col-md-2">
                            <label for="">HORA DE SALIDA</label>
                            <div id="HoraSalida"></div>
                        </div>
                        <div class="col-md-2">
                            <label for="">HORA DE REGRESO</label>
                            <div id="HoraRegreso"></div>
                        </div>
                        <div class="col-md-2">
                            <label for="">DURACIÓN DE LA COMISION(HRS)</label>
                            <div id="DuracionComision"></div>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-8">
                            <label for="">PERSONAS QUE ABORDARÁN LA UNIDAD</label>
                            <div id="NombresPasajeros"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONDUCTOR DEL VEHÍCULO</label>
                            <div id="Conductor"></div>
                        </div>
                    </div>
                    
                        <!----INICIO SECCION DE FOTOS X UNIDAD DE TRANSPORTE--->

                        <div class="col-xs-12 col-md-12" align="center">
                            <div id="" class="col-md-12">
                                <div class="col-md-12">
                                    <h1><span class="fa fa-paperclip fa-2x kingblue-icon"></span> ADJUNTAR</h1>  
                                </div> 
                            </div>
                            <div id="SetDeObservaciones" class="col-md-12">
                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXFotoX"></div>
                                    <div class="col-md-3">
                                        <label for="">TIPO</label>
                                        <select class="form-control" id="cmbTipo" name="cmbTipo"> 
                                            <option value="1">FOTO</option>
                                            <option value="2">DOCUMENTACIÓN</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">OBSERVACIONES</label>
                                        <textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1" rows="5" cols="20"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFotoU(this)"><span class="fa fa-upload fa-2x cyan-icon"></span> </button>
                                        <input type="file" id="btnArchivoU" name="btnArchivoU" class="hide">
                                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnAgregarAdjunto" name="btnAgregarAdjunto" 
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x lime-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    var master_url = base_url + 'index.php/ctrlTransporte/';
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnMasFotos = mdlNuevo.find("#btnMasFotos");
    var btnMasDocumentos = mdlNuevo.find("#btnMasDocumentos");

    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    var btnModificar = mdlEditar.find("#btnGuardar");
    var btnImagen = mdlEditar.find("#btnImagen");
    var btnArchivo = mdlEditar.find("#btnArchivo");
    var VistaPreviaXFoto = mdlEditar.find("#VistaPreviaXFoto");
    var ObservacionesXFoto = mdlEditar.find("#ObservacionesXFoto");
    var btnAgregarAdjunto = mdlEditar.find("#btnAgregarAdjunto");

    var btnMantenimientos = $("#btnMantenimientos");
    var btnMantenimiento = $("#btnMantenimiento");
    var mdlMantenimiento = $("#mdlMantenimiento");
    var btnGuardarMantenimiento = mdlMantenimiento.find("#btnGuardar");
    var btnMasFotosMantenimiento = mdlMantenimiento.find("#btnMasFotos");
    var btnMasDocumentosMantenimiento = mdlMantenimiento.find("#btnMasDocumentos");

    var btnEliminarMantenimiento = $("#btnEliminarMantenimiento");
    var btnEliminarVerificacion = $("#btnEliminarVerificacion");
    var btnEliminarAccidente = $("#btnEliminarAccidente");
    var btnEliminarSolicitud = $("#btnEliminarSolicitud");

    var btnVerificar = $("#btnVerificar");
    var btnVerificaciones = $("#btnVerificaciones");
    var mdlVerificacion = $("#mdlVerificacion");
    var btnGuardarVerificacion = mdlVerificacion.find("#btnGuardar");

    var btnMasFotosVerificacion = mdlVerificacion.find("#btnMasFotos");
    var btnMasDocumentosVerificacion = mdlVerificacion.find("#btnMasDocumentos");

    var btnAccidente = $("#btnAccidente");
    var btnAccidentes = $("#btnAccidentes");
    var mdlAccidente = $("#mdlAccidente");
    var btnMasFotosAccidente = mdlAccidente.find("#btnMasFotos");
    var btnMasDocumentosAccidente = mdlAccidente.find("#btnMasDocumentos");
    var btnGuardarAccidente = mdlAccidente.find("#btnGuardar");

    var btnSolicitud = $("#btnSolicitud");
    var btnSolicitudes = $("#btnSolicitudes");
    var mdlSolicitud = $("#mdlSolicitud");
    var btnMasFotosSolicitud = mdlSolicitud.find("#btnMasFotos");
    var btnMasDocumentosSolicitud = mdlSolicitud.find("#btnMasDocumentos");
    var btnGuardarSolicitud = mdlSolicitud.find("#btnGuardar");
    var btnAprobarSolicitud = $("#btnAprobarSolicitud");
    var mdlAprobarSolicitud = $("#mdlAprobarSolicitud");
    var btnGuardarAprobacion = mdlAprobarSolicitud.find("#btnGuardar");
    var mdlVerSolicitud = $("#mdlVerSolicitud");

    $(document).ready(function () {
        /**SOLICITUDES**/

        btnGuardarAprobacion.click(function () {
            if (mdlAprobarSolicitud.find("#ID").val() !== undefined && mdlAprobarSolicitud.find("#ID").val() !== null &&
                    mdlAprobarSolicitud.find("#ID").val() !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "APROBANDO POR FAVOR ESPERE..."
                });
                var frm = new FormData(mdlAprobarSolicitud.find("form")[0]);
                $.ajax({
                    url: master_url + 'onAprobarSolicitud',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data);
                    mdlAprobarSolicitud.modal('hide');
                    btnSolicitudes.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA APROBADO LA SOLICITUD', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'NO HA SIDO POSIBLE PROCESAR LA INFORMACIÓN, CIERRE Y VUELVA A SELECCIONAR LA UNIDAD DE TRANSPORTE', 'success');
            }
        });

        btnAprobarSolicitud.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                getAutorizadores();
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "APROBANDO..."
                });
                $.ajax({
                    url: master_url + 'getSolicitudByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var r = data[0];
                    console.log('* * * * * * TRANSPORTE * * * * * *');
                    console.log(r);
                    console.log('* * * * * *  * * * * * * * * * * * ');
                    console.log(r.EstatusSolicitud)
                    console.log(r.EstatusSolicitud === 'APROBADO')

                    if (r.EstatusSolicitud !== 'APROBADO') {
                        mdlAprobarSolicitud.find("#ID").val(r.ID);
                        mdlAprobarSolicitud.find("#Auto").html("<h1 class='text-success font50'>" + r.TRANSPORTE + "</h1>");
                        mdlAprobarSolicitud.find("#Comision").html("<h1 class='text-warning font25'>" + r.Comision + "</h1>");
                        mdlAprobarSolicitud.find("#Descripcion").html("<h1 class='text-info font25'>" + r.Descripcion + "</h1>");
                        mdlAprobarSolicitud.modal('show');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO ES POSIBLE APROBAR REGISTROS YA APROBADOS', 'danger');
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO NO APROBADO', 'danger');
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

        btnEliminarSolicitud.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminarSolicitud',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnSolicitudes.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SOLICITUD ELIMINADA', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnSolicitudes.click(function () {
            btnEliminarSolicitud.removeClass("hide");
            btnAprobarSolicitud.removeClass("hide");
            btnEliminarAccidente.addClass("hide");
            btnEliminarVerificacion.addClass("hide");
            btnEliminarMantenimiento.addClass("hide");
            btnEliminar.addClass("hide");
            btnEditar.addClass("hide");
            btnMantenimiento.addClass("hide");
            btnVerificar.addClass("hide");
            btnAccidente.addClass("hide");
            btnSolicitud.addClass("hide");
            getSolicitudes();
        });

        btnGuardarSolicitud.click(function () {
            if (mdlSolicitud.find("#ID").val() !== undefined && mdlSolicitud.find("#ID").val() !== null &&
                    mdlSolicitud.find("#ID").val() !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO POR FAVOR ESPERE..."
                });
                var frm = new FormData(mdlSolicitud.find("form")[0]);
                $.ajax({
                    url: master_url + 'onAddSolicitud',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data);
                    mdlSolicitud.modal('hide');
                    btnSolicitudes.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UNA NUEVA SOLICITUD', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'NO HA SIDO POSIBLE PROCESAR LA INFORMACIÓN, CIERRE Y VUELVA A SELECCIONAR LA UNIDAD DE TRANSPORTE', 'success');
            }
        });

        mdlSolicitud.find("#EstadoDestino").change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            $.ajax({
                url: master_url + 'getCiudades',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: $(this).val()
                }
            }).done(function (data, x, jq) {
                var option = '<option></option>';
                $.each(data, function (k, v) {
                    option += '<option value="' + v.ID + '">' + v.CIUDAD + '</option>';
                });
                mdlSolicitud.find("#CiudadDestino").html(option);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnSolicitud.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var r = data[0];
                    var vpxf = mdlSolicitud.find("div#VistaPreviaXFotoX");
                    var block_vpxf = mdlSolicitud.find("div#VistaPreviaXFotoX").parent("div.block");
                    var vpxd = mdlSolicitud.find("div#VistaPreviaXDocumentoX");
                    var block_vpxd = mdlSolicitud.find("div#VistaPreviaXDocumentoX").parent("div.block");
                    $.each(block_vpxf, function () {
                        $(this).remove();
                    });
                    $.each(block_vpxd, function () {
                        $(this).remove();
                    });
                    $.each(vpxf, function () {
                        $(this).html("");
                    });
                    $.each(vpxd, function () {
                        $(this).html("");
                    });
                    getEstados();
                    getConductores();
                    mdlSolicitud.find("#ID").val(r.ID);
                    mdlSolicitud.find("#Descripcion").val("");
                    mdlSolicitud.find("#NombresPasajeros").val("");
                    mdlSolicitud.find("#LugarSalida").val("");
                    mdlSolicitud.find("#Danios").val("");
                    mdlSolicitud.find("#Auto").html("<h1 class='text-success font100'>" + r.Tipo + "</h1>");
                    mdlSolicitud.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        /**ACCIDENTES**/
        btnAccidentes.click(function () {
            btnEliminarSolicitud.addClass("hide");
            btnAprobarSolicitud.addClass("hide");
            btnSolicitud.addClass("hide");
            btnEliminarAccidente.removeClass("hide");
            btnEliminarVerificacion.addClass("hide");
            btnEliminarMantenimiento.addClass("hide");
            btnEliminar.addClass("hide");
            btnEditar.addClass("hide");
            btnMantenimiento.addClass("hide");
            btnVerificar.addClass("hide");
            btnAccidente.addClass("hide");
            getAccidentes();
        });

        btnGuardarAccidente.click(function () {
            if (mdlAccidente.find("#ID").val() !== undefined && mdlAccidente.find("#ID").val() !== null &&
                    mdlAccidente.find("#ID").val() !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO POR FAVOR ESPER..."
                });
                var frm = new FormData(mdlAccidente.find("form")[0]);
                $.ajax({
                    url: master_url + 'onAddAccidente',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data);
                    mdlAccidente.modal('hide');
                    btnAccidentes.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO ACCIDENTE', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'NO HA SIDO POSIBLE PROCESAR LA INFORMACIÓN, CIERRE Y VUELVA A SELECCIONAR LA UNIDAD DE TRANSPORTE', 'success');
            }
        });

        btnAccidente.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var r = data[0];
                    var vpxf = mdlAccidente.find("div#VistaPreviaXFotoX");
                    var block_vpxf = mdlAccidente.find("div#VistaPreviaXFotoX").parent("div.block");
                    var vpxd = mdlAccidente.find("div#VistaPreviaXDocumentoX");
                    var block_vpxd = mdlAccidente.find("div#VistaPreviaXDocumentoX").parent("div.block");
                    $.each(block_vpxf, function () {
                        $(this).remove();
                    });
                    $.each(block_vpxd, function () {
                        $(this).remove();
                    });
                    $.each(vpxf, function () {
                        $(this).html("");
                    });
                    $.each(vpxd, function () {
                        $(this).html("");
                    });
                    mdlAccidente.find("#ID").val(r.ID);
                    mdlAccidente.find("#Descripcion").val("");
                    mdlAccidente.find("#Danios").val("");
                    mdlAccidente.find("#Auto").html("<h1 class='text-success font100'>" + r.Tipo + "</h1>");
                    mdlAccidente.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnVerificaciones.click(function () {
            btnEliminarSolicitud.addClass("hide");
            btnAprobarSolicitud.addClass("hide");
            btnSolicitud.addClass("hide");
            btnEliminarAccidente.addClass("hide");
            btnEliminarVerificacion.removeClass("hide");
            btnEliminarMantenimiento.addClass("hide");
            btnEliminar.addClass("hide");
            btnEditar.addClass("hide");
            btnMantenimiento.addClass("hide");
            btnVerificar.addClass("hide");
            btnAccidente.addClass("hide");
            getVerificaciones();
        });

        btnGuardarVerificacion.click(function () {
            var frm = new FormData(mdlVerificacion.find("form")[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            $.ajax({
                url: master_url + 'onAddVerificacion',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                mdlVerificacion.modal('hide');
                btnVerificaciones.trigger('click');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UNA NUEVA VERIFICACIÓN', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnVerificar.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    var r = data[0];


                    var vpxf = mdlVerificacion.find("div#VistaPreviaXFotoX");
                    var block_vpxf = mdlVerificacion.find("div#VistaPreviaXFotoX").parent("div.block");
                    var vpxd = mdlVerificacion.find("div#VistaPreviaXDocumentoX");
                    var block_vpxd = mdlVerificacion.find("div#VistaPreviaXDocumentoX").parent("div.block");
                    $.each(block_vpxf, function () {
                        $(this).remove();
                    });
                    $.each(block_vpxd, function () {
                        $(this).remove();
                    });
                    $.each(vpxf, function () {
                        $(this).html("");
                    });
                    $.each(vpxd, function () {
                        $(this).html("");
                    });

                    mdlVerificacion.find("#ID").val(r.ID);
                    mdlVerificacion.find("#Auto").html("<h1 class='text-success font100'>" + r.Tipo + "</h1>");
                    mdlVerificacion.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnEliminarAccidente.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminarAccidente',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnAccidentes.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'ACCIDENTE ELIMINADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnEliminarVerificacion.click(function () {

            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminarVerificacion',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnVerificaciones.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'VERIFICACIÓN ELIMINADA', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnEliminarMantenimiento.click(function () {

            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminarMantenimiento',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnMantenimientos.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MANTENIMIENTO ELIMINADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnMantenimientos.click(function () {
            btnEliminarSolicitud.addClass("hide");
            btnAprobarSolicitud.addClass("hide");
            btnSolicitud.addClass("hide");
            btnEliminarAccidente.addClass("hide");
            btnEliminarMantenimiento.removeClass("hide");
            btnEliminarVerificacion.addClass("hide");
            btnEliminar.addClass("hide");
            btnEditar.addClass("hide");
            btnMantenimiento.addClass("hide");
            btnVerificar.addClass("hide");
            btnAccidente.addClass("hide");
            getMantenimientos();
        });

        btnGuardarMantenimiento.click(function () {
            var frm = new FormData(mdlMantenimiento.find("form")[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            $.ajax({
                url: master_url + 'onAddMantenimiento',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                mdlMantenimiento.modal('hide');
                btnMantenimientos.trigger('click');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO MANTENIMIENTO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnModificar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            var frm = new FormData(mdlEditar.find("form")[0]);
            $.ajax({
                url: master_url + 'onUpdateTransporte',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                mdlEditar.modal('hide');
                btnRefrescar.trigger('click');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA ACTUALIZADO LA UNIDAD', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnAgregarAdjunto.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            var frm = new FormData(mdlEditar.find("form")[0]);
            var Adjunto = mdlEditar.find("#btnArchivoU");
            frm.append('TIPO', mdlEditar.find("#cmbTipo").val());
            frm.append('OBSERVACIONES', mdlEditar.find("#ObservacionesXFoto").val());
            frm.append('ADJUNTO', Adjunto[0].files[0], Adjunto[0].files[0].name);
            $.ajax({
                url: master_url + 'onAgregarAdjunto',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA ADJUNTADO EL ARCHIVO', 'success');
                mdlEditar.find("#ObservacionesXFoto").val("");
                Adjunto.val("");
                getFotosXTransporteID();
                getDocumentosXTransporte();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnMasDocumentos.click(function () {
            onAgregarMasDocumentos();
        });
        btnMasFotos.click(function () {
            onAgregarMasFotos();
        });

        btnMasFotosMantenimiento.click(function () {
            onAgregarMasFotosMantenimiento();
        });

        btnMasDocumentosMantenimiento.click(function () {
            onAgregarMasDocumentosMantenimiento();
        });

        btnMasFotosVerificacion.click(function () {
            onAgregarMasFotosVerificacion();
        });

        btnMasDocumentosVerificacion.click(function () {
            onAgregarMasDocumentosVerificacion();
        });

        btnMasFotosAccidente.click(function () {
            onAgregarMasFotosAccidente();
        });

        btnMasDocumentosAccidente.click(function () {
            onAgregarMasDocumentosAccidente();
        });


        btnMasFotosSolicitud.click(function () {
            onAgregarMasFotosSolicitud();
        });

        btnMasDocumentosSolicitud.click(function () {
            onAgregarMasDocumentosSolicitud();
        });

        btnImagen.click(function () {
            btnArchivo.change(function () {
                var imageType = /image.*/;
                if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match(imageType)) {

                    var reader = new FileReader();
                    reader.onload = function () {
                        console.log(btnArchivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" class="img-responsive">';
                        VistaPreviaXFoto.html(preview);
                    };
                    reader.readAsDataURL(btnArchivo[0].files[0]);
                    HoldOn.close();
                } else {
                    if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPreviaXFoto.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="100%" height="600px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(btnArchivo[0].files[0]);
                    } else {
                        VistaPreviaXFoto.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                    HoldOn.close();
                }
                ObservacionesXFoto.focus();
            });
            btnArchivo.trigger('click');
        });

        btnMantenimiento.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    var r = data[0];
                    var vpxf = mdlMantenimiento.find("div#VistaPreviaXFotoX");
                    var block_vpxf = mdlMantenimiento.find("div#VistaPreviaXFotoX").parent("div.block");
                    var vpxd = mdlMantenimiento.find("div#VistaPreviaXDocumentoX");
                    var block_vpxd = mdlMantenimiento.find("div#VistaPreviaXDocumentoX").parent("div.block");
                    $.each(block_vpxf, function () {
                        $(this).remove();
                    });
                    $.each(block_vpxd, function () {
                        $(this).remove();
                    });
                    $.each(vpxf, function () {
                        $(this).html("");
                    });
                    $.each(vpxd, function () {
                        $(this).html("");
                    });
                    onAgregarMasFotosMantenimiento();
                    onAgregarMasDocumentosMantenimiento();
                    console.log(' * * * R * * * ');
                    console.log(r);
                    console.log(' * * * FR * * * ');
                    mdlMantenimiento.find("#ID").val(r.ID);
                    mdlMantenimiento.find("#Auto").html("<h1 class='text-success font100'>" + r.Tipo + "</h1>");
                    mdlMantenimiento.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnEditar.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var r = data[0];
                    if (r !== undefined) {
                        mdlEditar.find("#ID").val(r.ID);
                        mdlEditar.find("#Clase").select2("val", parseInt(r.Clase));
                        mdlEditar.find("#Tipo").val(r.Tipo);
                        mdlEditar.find("#Marca").val(r.Marca);
                        mdlEditar.find("#Modelo").val(r.Modelo);
                        mdlEditar.find("#Color").val(r.Color);
                        mdlEditar.find("#Combustible").val(r.Combustible);
                        mdlEditar.find("#Propietario").val(r.Propietario);
                        mdlEditar.find("#Placas").val(r.Placas);
                        mdlEditar.find("#Valor").val(r.Valor);
                        mdlEditar.find("#Aseguradora").val(r.Aseguradora);
                        mdlEditar.find("#Poliza").val(r.Poliza);
                        mdlEditar.find("#Fecha").val(r.Fecha);
                        getFotosXTransporteID();
                        getDocumentosXTransporte();
                        mdlEditar.find("#VistPreviaXFoto").html('');
                        mdlEditar.find("#VistPreviaXDocumento").html('');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                mdlEditar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }

        });

        btnEliminar.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'onEliminar',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
                    console.log('ELIMINADO: ' + temp);
                    btnRefrescar.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnRefrescar.click(function () {
            btnSolicitud.removeClass("hide");
            btnEliminarAccidente.addClass("hide");
            btnEliminarVerificacion.addClass("hide");
            btnEliminarMantenimiento.addClass("hide");
            btnEliminarSolicitud.addClass("hide");
            btnAprobarSolicitud.addClass("hide");
            btnEliminar.removeClass("hide");
            btnEditar.removeClass("hide");
            btnMantenimiento.removeClass("hide");
            btnVerificar.removeClass("hide");
            btnAccidente.removeClass("hide");
            getRecords();
        });

        btnGuardar.click(function () {
            var frm = new FormData(mdlNuevo.find('form')[0]);
            $.ajax({
                url: master_url + 'onAddTransporte',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                mdlNuevo.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnNuevo.click(function () {
            var vpxf = mdlNuevo.find("div#VistaPreviaXFotoX");
            var block_vpxf = mdlNuevo.find("div#VistaPreviaXFotoX").parent("div.block");
            var vpxd = mdlNuevo.find("div#VistaPreviaXDocumentoX");
            var block_vpxd = mdlNuevo.find("div#VistaPreviaXDocumentoX").parent("div.block");
            $.each(block_vpxf, function () {
                $(this).remove();
            });
            $.each(block_vpxd, function () {
                $(this).remove();
            });
            $.each(vpxf, function () {
                $(this).html("");
            });
            $.each(vpxd, function () {
                $(this).html("");
            });
            onAgregarMasFotos();
            onAgregarMasDocumentos();
            mdlNuevo.modal('show');
        });

        getRecords();
    });

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
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblResultado").html(getTable('tblTransporte', data));
            var tblSelected = $('#tblTransporte').DataTable(tableOptions);
            $('#tblTransporte tbody').on('click', 'tr', function () {
                $("#tblTransporte").find("tr").removeClass("success");
                $("#tblTransporte").find("tr").removeClass("warning");
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblTransporte tbody').on('dblclick', 'tr', function () {
                $("#tblTransporte").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                btnEditar.trigger("click");
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getMantenimientos() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getMantenimientos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblResultado").html(getTable('tblTransporteMantenimiento', data));
            var tblSelected = $('#tblTransporteMantenimiento').DataTable(tableOptions);
            $('#tblTransporteMantenimiento tbody').on('click', 'tr', function () {
                $("#tblTransporteMantenimiento").find("tr").removeClass("success");
                $("#tblTransporteMantenimiento").find("tr").removeClass("warning");
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblTransporteMantenimiento tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteMantenimiento").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getVerificaciones() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getVerificaciones',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblResultado").html(getTable('tblTransporteVerificacion', data));
            var tblSelected = $('#tblTransporteVerificacion').DataTable(tableOptions);
            $('#tblTransporteVerificacion tbody').on('click', 'tr', function () {
                $("#tblTransporteVerificacion").find("tr").removeClass("success");
                $("#tblTransporteVerificacion").find("tr").removeClass("warning");
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblTransporteVerificacion tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteVerificacion").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAccidentes() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAccidentes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblResultado").html(getTable('tblTransporteAccidente', data));
            var tblSelected = $('#tblTransporteAccidente').DataTable(tableOptions);
            $('#tblTransporteAccidente tbody').on('click', 'tr', function () {
                $("#tblTransporteAccidente").find("tr").removeClass("success");
                $("#tblTransporteAccidente").find("tr").removeClass("warning");
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblTransporteAccidente tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteAccidente").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function getSolicitudes() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getSolicitudes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblResultado").html(getTable('tblTransporteSolicitud', data));
            var tblSelected = $('#tblTransporteSolicitud').DataTable(tableOptions);
            $('#tblTransporteSolicitud tbody').on('click', 'tr', function () {
                $("#tblTransporteSolicitud").find("tr").removeClass("success");
                $("#tblTransporteSolicitud").find("tr").removeClass("warning");
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblTransporteSolicitud tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteSolicitud").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                /**MODAL DE VISUALIZACION A DETALLE**/
                mdlVerSolicitud.find("#Auto").html("<h1 class='text-success font50'>" + dtm[1] + "</h1>");
                mdlVerSolicitud.find("#Comision").html("<h1 class='text-warning font25'>" + dtm[3] + "</h1>");
                mdlVerSolicitud.find("#FechaComision").html("<h1 class='text-info font25'>" + dtm[4] + "</h1>");
                mdlVerSolicitud.find("#Descripcion").html("<h1 class='text-info font25'>" + dtm[5] + "</h1>");
                mdlVerSolicitud.find("#EstadoDestino").html("<h1 class='text-info font25'>" + dtm[6] + "</h1>");
                mdlVerSolicitud.find("#CiudadDestino").html("<h1 class='text-info font25'>" + dtm[7] + "</h1>");
                mdlVerSolicitud.find("#LugarSalida").html("<h1 class='text-info font25'>" + dtm[8] + "</h1>");
                mdlVerSolicitud.find("#HoraSalida").html("<h1 class='text-info font25'>" + dtm[9] + "</h1>");
                mdlVerSolicitud.find("#HoraRegreso").html("<h1 class='text-info font25'>" + dtm[10] + "</h1>");
                mdlVerSolicitud.find("#DuracionComision").html("<h1 class='text-info font25'>" + dtm[11] + "</h1>");
                mdlVerSolicitud.find("#Pasajeros").html("<h1 class='text-info font25'>" + dtm[12] + "</h1>");
                mdlVerSolicitud.find("#NombresPasajeros").html("<h1 class='text-info font25'>" + dtm[13] + "</h1>");
                mdlVerSolicitud.find("#Conductor").html("<h1 class='text-info font25'>" + dtm[14] + "</h1>");
                
                mdlVerSolicitud.modal('show');
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function onAgregarFoto(e) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        var parent = $(e).parent('div');
        var parentofparent = $(e).parent().parent('div');
        var btnArchivo = parent.find('#btnArchivo');
        var ObservacionesXFotoX = parentofparent.find('#ObservacionesXFoto');
        var VistaPreviaXFotoX = parentofparent.find("#VistaPreviaXFotoX");

        btnArchivo.change(function () {
            var imageType = /image.*/;
            if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function () {
                    console.log(btnArchivo[0].files[0]);
                    var preview = '<img src="' + reader.result + '" class="img-responsive">';
                    VistaPreviaXFotoX.html(preview);
                };
                reader.readAsDataURL(btnArchivo[0].files[0]);
                HoldOn.close();
            } else {
                if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        VistaPreviaXFotoX.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="100%" height="600px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnArchivo[0].files[0]);
                } else {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log((reader.result));
                        console.log(getExt(reader.result));
                    };
                    VistaPreviaXFotoX.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
                HoldOn.close();
            }
            ObservacionesXFotoX.focus();
        });
        btnArchivo.trigger('click');
    }

    function onAgregarDocumento(e) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        var parent = $(e).parent('div');
        var parentofparent = $(e).parent().parent('div');
        var btnArchivo = parent.find('#btnDocumento');
        var ObservacionesXDocumento = parentofparent.find('#ObservacionesXDocumento');
        var VistaPreviaXDocumentoX = parentofparent.find("#VistaPreviaXDocumentoX");
        btnArchivo.change(function () {
            var imageType = /image.*/;
            if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function () {
                    console.log(btnArchivo[0].files[0]);
                    var preview = '<img src="' + reader.result + '" class="img-responsive">';
                    VistaPreviaXDocumentoX.html(preview);
                };
                reader.readAsDataURL(btnArchivo[0].files[0]);
                HoldOn.close();
            } else {
                if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        VistaPreviaXDocumentoX.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="100%" height="600px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnArchivo[0].files[0]);
                } else {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log((reader.result));
                        console.log(getExt(reader.result));
                    };
                    VistaPreviaXDocumentoX.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
                HoldOn.close();
            }
            ObservacionesXDocumento.focus();
        });
        btnArchivo.trigger('click');
    }

    function onAgregarFotoU(e) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        var parent = $(e).parent('div');
        var parentofparent = $(e).parent().parent('div');
        var btnArchivo = parent.find('#btnArchivoU');
        var ObservacionesXFotoX = parentofparent.find('#ObservacionesXFoto');
        var VistaPreviaXFotoX = parentofparent.find("#VistaPreviaXFotoX");

        btnArchivo.change(function () {
            var imageType = /image.*/;
            if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function () {
                    console.log(btnArchivo[0].files[0]);
                    var preview = '<img src="' + reader.result + '" class="img-responsive">';
                    VistaPreviaXFotoX.html(preview);
                };
                reader.readAsDataURL(btnArchivo[0].files[0]);
                HoldOn.close();
            } else {
                if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        VistaPreviaXFotoX.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="100%" height="600px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnArchivo[0].files[0]);
                } else {
                    VistaPreviaXFotoX.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
                HoldOn.close();
            }
            ObservacionesXFotoX.focus();
        });
        btnArchivo.trigger('click');
    }

    function onAgregarMasFotos() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXFotoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlNuevo.find("#SetDeObservaciones").append(block);
    }
    function onAgregarMasFotosMantenimiento() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXFotoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlMantenimiento.find("#SetDeObservaciones").append(block);
    }
    function onAgregarMasFotosVerificacion() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXFotoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlVerificacion.find("#SetDeObservaciones").append(block);
    }

    function onAgregarMasFotosAccidente() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXFotoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlAccidente.find("#SetDeObservaciones").append(block);
    }

    function onAgregarMasFotosSolicitud() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXFotoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXFoto" name="ObservacionesXFoto[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnImagen" name="btnImagen"  data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarFoto(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnArchivo" name="btnArchivo[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlSolicitud.find("#SetDeObservaciones").append(block);
    }

    function onAgregarMasDocumentos() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXDocumentoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarDocumento(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlNuevo.find("#SetDeObservacionesXDocumento").append(block);
    }

    function onAgregarMasDocumentosMantenimiento() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXDocumentoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarDocumento(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlMantenimiento.find("#SetDeObservacionesXDocumento").append(block);
    }

    function onAgregarMasDocumentosVerificacion() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXDocumentoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarDocumento(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlVerificacion.find("#SetDeObservacionesXDocumento").append(block);
    }

    function onAgregarMasDocumentosAccidente() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXDocumentoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarDocumento(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlAccidente.find("#SetDeObservacionesXDocumento").append(block);
    }

    function onAgregarMasDocumentosSolicitud() {
        var block = '<div class="col-md-12 block">';
        block += '<div class="col-md-12" id="VistaPreviaXDocumentoX" align="center"></div>';
        block += '<div class="col-md-9">';
        block += '<label for="">OBSERVACIONES</label>';
        block += '<textarea type="text" class="form-control" id="ObservacionesXDocumento" name="ObservacionesXDocumento[]" placeholder="EJ: FOTO 1"  rows="5" cols="20"></textarea>';
        block += '</div>';
        block += '<div class="col-md-3">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="ADJUNTAR FOTO" onclick="onAgregarDocumento(this)">';
        block += '<span class="fa fa-upload fa-2x cyan-icon"></span> </button>';
        block += '<input type="file" id="btnDocumento" name="btnDocumento[]" class="hide">';
        block += '<button type="button" class="btn btn3d btn-default fa-lg" id="btnEliminarFoto" name="btnEliminarFoto"';
        block += 'data-toggle="tooltip" data-placement="top" data-original-title="ELIMINAR" onclick="onEliminarFoto(this)"><span class="fa fa-trash fa-2x black-icon"></span> </button>';
        block += '</div>';
        block += '</div>';
        mdlSolicitud.find("#SetDeObservacionesXDocumento").append(block);
    }

    function onEliminarFoto(r) {
        $(r).parent().parent().remove();
        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'FOTO ELIMINADA', 'danger');
    }

    function getFotosXTransporteID() {
        $.ajax({
            url: master_url + 'getFotosXTransporte',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: mdlEditar.find("#ID").val()
            }
        }).done(function (data, x, jq) {
            console.log(data);
            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getFotoXID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXID(' + v.ID + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlEditar.find("#tblFotosXTransporte").html(tbl);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getFotoXID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getFotoXID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var dtm = data[0];
            console.log(dtm);
            var source = dtm.URL;
            console.log(dtm.URL);
            if (source !== null && source !== undefined && source !== '') {
                var ext = getExt(source);
                console.log(ext);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    mdlEditar.find("#VistPreviaXFoto").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlEditar.find("#VistPreviaXFoto").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlEditar.find("#VistPreviaXFoto").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentosXTransporte() {
        $.ajax({
            url: master_url + 'getDocumentosXTransporte',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: mdlEditar.find("#ID").val()
            }
        }).done(function (data, x, jq) {
            console.log(data);
            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getDocumentoXID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarDocumentoXID(' + v.ID + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlEditar.find("#tblDocumentosXTransporte").html(tbl);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentoXID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getDocumentoXID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var dtm = data[0];
            console.log(dtm);
            var source = dtm.URL;
            console.log(dtm.URL);
            if (source !== null && source !== undefined && source !== '') {
                var ext = getExt(source);
                console.log(ext);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    mdlEditar.find("#VistPreviaXDocumento").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlEditar.find("#VistPreviaXDocumento").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlEditar.find("#VistPreviaXDocumento").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarFotoXID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXID',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            mdlEditar.find("#VistPreviaXFoto").html('');
            getFotosXTransporteID();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarDocumentoXID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarDocumentoXID',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            mdlEditar.find("#VistPreviaXDocumento").html('');
            getDocumentosXTransporte();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getEstados() {
        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.ESTADO + '</option>';
            });
            mdlSolicitud.find("#EstadoDestino").html(option);
        }).fail(function (x, y, z) {
            console.log('* * * * * ERROR AL OBTENER LOS ESTADOS* * * * * *');
            console.log(x, y, z);
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * *');
        }).always(function () {
            console.log('ESTADOS OK');
        });
    }

    function getConductores() {
        $.ajax({
            url: master_url + 'getConductores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.CONDUCTOR + '</option>';
            });
            mdlSolicitud.find("#Conductor").html(option);
        }).fail(function (x, y, z) {
            console.log('* * * * * ERROR AL OBTENER LOS CONDUCTORES* * * * * *');
            console.log(x, y, z);
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * *');
        }).always(function () {
            console.log('ESTADOS OK');
        });
    }

    function getAutorizadores() {
        $.ajax({
            url: master_url + 'getAutorizadores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.AUTORIZADOR + '</option>';
            });
            mdlAprobarSolicitud.find("#Autoriza").html(option);
        }).fail(function (x, y, z) {
            console.log('* * * * * ERROR AL OBTENER LOS CONDUCTORES* * * * * *');
            console.log(x, y, z);
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * *');
        }).always(function () {
            console.log('ESTADOS OK');
        });
    }


    function getFotosXMantenimientoXTransporte() {
        $.ajax({
            url: master_url + 'getFotosXMantenimientoXTransporte',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: mdlEditar.find("#ID").val()
            }
        }).done(function (data, x, jq) {
            console.log(data);
            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getFotoXID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXID(' + v.ID + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlEditar.find("#tblFotosXTransporte").html(tbl);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>