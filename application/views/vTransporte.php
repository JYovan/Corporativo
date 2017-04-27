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
                        <div class="col-md-4">
                            <label for="">Fecha</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control cursor-hand" readonly="" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <label for="">TIPO DE AUTOMÓVIL</label>
                            <input type="text" id="Tipo" name="Tipo" class="form-control" placeholder="EJ: Lamborghini CENTENARIO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control" placeholder="EJ: Lamborghini" >
                        </div>
                        <div class="col-md-4">
                            <label for="">MODELO</label>
                            <input type="text" id="Modelo" name="Modelo" class="form-control" placeholder="2017">
                        </div>
                        <div class="col-md-4">
                            <label for="">COLOR</label>
                            <input type="text" id="Color" name="Color" class="form-control" placeholder="EJ: NEGRO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">TIPO DE COMBUSTIBLE</label>
                            <input type="text" id="Combustible" name="Combustible" class="form-control" placeholder="DIESEL" >
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL PROPIETARIO</label>
                            <input type="text" id="Propietario" name="Propietario" class="form-control" placeholder="EJ: ROGELIO RAMIREZ TORRES">
                        </div>
                        <div class="col-md-4">
                            <label for="">PLACAS</label>
                            <input type="text" id="Placas" name="Placas" class="form-control" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">VALOR DE ADQUISICIÓN</label>
                            <input type="text" id="Valor" name="Valor" class="form-control" placeholder="EJ: 9876000.00">
                        </div>
                        <div class="col-md-4">
                            <label for="">ASEGURADORA</label>
                            <input type="text" id="Aseguradora" name="Aseguradora" class="form-control" >
                        </div>
                        <div class="col-md-4">
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                        <div class="col-md-4">
                            <label for="">Fecha</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control cursor-hand" readonly="" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <label for="">TIPO DE AUTOMÓVIL</label>
                            <input type="text" id="Tipo" name="Tipo" class="form-control" placeholder="EJ: Lamborghini CENTENARIO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control" placeholder="EJ: Lamborghini" >
                        </div>
                        <div class="col-md-4">
                            <label for="">MODELO</label>
                            <input type="text" id="Modelo" name="Modelo" class="form-control" placeholder="2017">
                        </div>
                        <div class="col-md-4">
                            <label for="">COLOR</label>
                            <input type="text" id="Color" name="Color" class="form-control" placeholder="EJ: NEGRO">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">TIPO DE COMBUSTIBLE</label>
                            <input type="text" id="Combustible" name="Combustible" class="form-control" placeholder="DIESEL" >
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL PROPIETARIO</label>
                            <input type="text" id="Propietario" name="Propietario" class="form-control" placeholder="EJ: ROGELIO RAMIREZ TORRES">
                        </div>
                        <div class="col-md-4">
                            <label for="">PLACAS</label>
                            <input type="text" id="Placas" name="Placas" class="form-control" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">VALOR DE ADQUISICIÓN</label>
                            <input type="text" id="Valor" name="Valor" class="form-control" placeholder="EJ: 9876000.00">
                        </div>
                        <div class="col-md-4">
                            <label for="">ASEGURADORA</label>
                            <input type="text" id="Aseguradora" name="Aseguradora" class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE POLIZA</label>
                            <input type="text" id="Poliza" name="Poliza" class="form-control" >
                        </div>
                        <!----INICIO SECCION DE FOTOS X UNIDAD DE TRANSPORTE--->

                        <div class="col-md-12" align="center">
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
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x kingblue-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" 
                                        data-placement="top" data-original-title="REMOVER FOTO" onclick="onRemoverFoto()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button></h1> 
                            <div id="VistaPreviaXFoto"></div>
                        </div>
                        <div id="tblFotosXTransporte"></div>

                        <div class="col-md-12" align="center">    
                            <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTACIÓN
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" 
                                        data-placement="top" data-original-title="REMOVER DOCUMENTO" onclick="onRemoverDocumento()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button></h1> 
                            <div id="VistaPreviaXDocumento"></div>
                        </div>
                        <div id="tblDocumentosXTransporte"></div>
                        <!--
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
                                                <div id="tblDocumentosXAccidenteXTransporte"></div>-->

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

<!--MANTENIMIENTO-->
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
                        <div class="col-md-4">
                            <label for="">TIPO DE MANTENIMIENTO</label>
                            <select id="Mantenimiento" name="Mantenimiento" class="form-control">
                                <option></option>
                                <option value="1">CORRECTIVO</option>
                                <option value="2">PREVENTIVO</option>
                                <option value="3">PREDICTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">KILOMETRAJE</label>
                            <input type="text" id="Kilometraje" name="Kilometraje" class="form-control" placeholder="EJ: 100,000 KM">
                        </div>
                        <div class="col-md-4">
                            <label for="">TALLER</label>
                            <input type="text" id="Taller" name="Taller" class="form-control" placeholder="EJ: RABINA" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">COSTO DEL SERVICIO ($)</label>
                            <input type="text" id="Costo" name="Costo" class="form-control" placeholder="EJ: 15000.00">
                        </div>
                        <div class="col-md-4">
                            <label for="">TAREAS REALIZADAS</label> 
                            <textarea id="Tareas" name="Tareas" rows="4" cols="20" class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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


<div class="modal animated zoomInUp" id="mdlVerMantenimiento" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-wrench fa-lg"></span>MANTENIMIENTO</h2>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="text" id="IDTRANSPORTE" name="IDTRANSPORTE" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12" align="center">
                            <label for="">UNIDAD DE TRANSPORTE</label>
                            <div id="Auto"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO DE MANTENIMIENTO</label>
                            <select id="Mantenimiento" name="Mantenimiento" class="form-control">
                                <option></option>
                                <option value="1">CORRECTIVO</option>
                                <option value="2">PREVENTIVO</option>
                                <option value="3">PREDICTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">KILOMETRAJE</label>
                            <input type="text" id="Kilometraje" name="Kilometraje" class="form-control" placeholder="EJ: 100,000 KM">
                        </div>
                        <div class="col-md-4">
                            <label for="">TALLER</label>
                            <input type="text" id="Taller" name="Taller" class="form-control" placeholder="EJ: RABINA" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">COSTO DEL SERVICIO ($)</label>
                            <input type="text" id="Costo" name="Costo" class="form-control" placeholder="EJ: 15000.00">
                        </div>
                        <div class="col-md-4">
                            <label for="">TAREAS REALIZADAS</label> 
                            <textarea id="Tareas" name="Tareas" rows="4" cols="20" class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DEL MANTENIMIENTO</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control cursor-hand" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>    

                        <div class="col-md-12" align="center">
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
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x kingblue-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" 
                                        data-placement="top" data-original-title="REMOVER FOTO" onclick="onRemoverFotoMantenimiento()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button>
                            </h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXFotoXMantenimiento" align="center"></div>
                        <div id="tblFotosXMantenimiento"></div> 
                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTOS 
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" 
                                        data-placement="top" data-original-title="REMOVER DOCUMENTO" onclick="onRemoverDocumentoMantenimiento()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button>
                            </h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXDocumentoXMantenimiento" align="center"></div>
                        <div id="tblDocumentosXMantenimiento"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--FIN MANTENIMIENTO-->

<!--VERIFICACION-->
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
                        <div class="col-md-4">
                            <label for="">AÑO DE VERIFICACIÓN</label>     
                            <input type="text" id="AnioVerificacion" name="AnioVerificacion" class="form-control" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="">SEMESTRE DEL AÑO</label>
                            <select id="Semestre" name="Semestre" class="form-control">
                                <option></option>
                                <option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                                <option value="SEGUNDO SEMESTRE">SEGUNDO SEMESTRE</option>
                            </select>
                        </div>
                        <div class="col-md-4">
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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


<div class="modal animated zoomInUp" id="mdlVerVerificacion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> VERIFICACIÓN </h2>
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
                        <div class="col-md-4">
                            <label for="">AÑO DE VERIFICACIÓN</label>     
                            <input type="text" id="AnioVerificacion" name="AnioVerificacion" class="form-control" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="">SEMESTRE DEL AÑO</label>
                            <select id="Semestre" name="Semestre" class="form-control">
                                <option></option>
                                <option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                                <option value="SEGUNDO SEMESTRE">SEGUNDO SEMESTRE</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE REALIZACIÓN</label>
                            <input type="text" id="FechaRealizacion" name="FechaRealizacion" class="form-control cursor-hand" placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <label for="">LUGAR DE REALIZACIÓN</label>
                            <textarea id="LugarRealizacion" name="LugarRealizacion" rows="5" cols="20" class="form-control">
                            </textarea>
                        </div>

                        <!--SET DE FOTOS Y DOCUMENTOS X VERIFICACION-->
                        <div class="col-md-12" align="center">
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
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x kingblue-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS 
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="REMOVER FOTO" onclick="onRemoverFotoVerificacion()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button>
                            </h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXFotoXVerificacion" align="center"></div>
                        <div id="tblFotosXVerificacion"></div> 
                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTOS
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="REMOVER DOCUMENTO" onclick="onRemoverDocumentoVerificacion()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button>
                            </h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXDocumentoXVerificacion" align="center"></div>
                        <div id="tblDocumentosXVerificacion"></div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--FIN VERIFICACION-->

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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
                                    </button>
                                </div>
                            </div>
                            <div id="SetDeObservacionesXDocumento" class="col-md-12"> 

                                <div class="col-md-12 block">
                                    <div class="col-md-12" id="VistaPreviaXDocumentoX" align="center"></div>
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

<div class="modal animated zoomInUp" id="mdlVerAccidente" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-ambulance fa-lg"></span> ACCIDENTE </h2>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="text" id="IDTRANSPORTE" name="IDTRANSPORTE" class="form-control" readonly="">
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

                        <!--SET DE FOTOS Y DOCUMENTOS X VERIFICACION-->
                        <div class="col-md-12" align="center">
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
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x kingblue-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS 
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="REMOVER FOTO" onclick="onRemoverFotoAccidente()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button></h1>  

                        </div>
                        <div class="col-md-12" id="VistaPreviaXFotoXAccidente" align="center"></div>

                        <div id="tblFotosXAccidente"></div> 
                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTOS 
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="REMOVER DOCUMENTO" onclick="onRemoverDocumentoAccidente()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button></h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXDocumentoXAccidente" align="center"></div>
                        <div id="tblDocumentosXAccidente"></div>

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--FIN ACCIDENTE-->

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
                        <div class="col-md-4">
                            <label for="">DESCRIPCIÓN DE LA COMISIÓN (RUTA)</label>
                            <textarea id="Descripcion" type="text" name="Descripcion" rows="5" cols="20" class="form-control" value="" placeholder="1.Dirígete al oeste por Loma del Pedregal hacia Loma del Copal. 2.Gira a la derecha con dirección a Loma del Copal  3.Gira a la izquierda con dirección a Blvd. Campestre">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO DESTINO</label>
                            <select class="form-control" id="EstadoDestino" name="EstadoDestino">

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD DESTINO</label>
                            <select class="form-control" id="CiudadDestino" name="CiudadDestino">

                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">LUGAR DE SALIDA</label>
                            <textarea id="LugarSalida" type="text" name="LugarSalida" rows="5" cols="20" class="form-control" value="" placeholder="Blvd. Campestre 1821
                                      Lomas del Campestre, 37150 León, Gto.">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">HORA DE SALIDA</label>     
                            <input type="text" id="HoraSalida" name="HoraSalida" class="form-control" placeholder="EJ: 10:15 AM">
                        </div> 
                        <div class="col-md-4">
                            <label for="">HORA DE REGRESO</label>     
                            <input type="text" id="HoraRegreso" name="HoraRegreso" class="form-control" placeholder="EJ: 12:15 AM">
                        </div> 
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">DURACIÓN DE LA COMISIÓN (HRS)</label>     
                            <input type="text" id="DuracionComision" name="DuracionComision" class="form-control" placeholder="EJ: 2 HORAS ">
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO DE PERSONAS QUE ABORDARÁN LA UNIDAD</label>     
                            <input type="text" id="Pasajeros" name="Pasajeros" class="form-control" placeholder="EJ: 5 PERSONAS">
                        </div> 
                        <div class="col-md-4">
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                                        <span class="fa fa-plus fa-2x kingblue-icon"></span> 
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
                        <div class="col-md-4">
                            <label for="">FECHA DE AUTORIZACIÓN</label>
                            <input type="text" id="FechaAutorizacion" name="FechaAutorizacion" class="form-control cursor-hand"  placeholder="XX/XX/XXXX" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="">DISPONIBILIDAD</label>
                            <select class="form-control" id="Disponibilidad" name="Disponibilidad">
                                <option value="NO"></option> 
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">APROBACIÓN</label>
                            <select class="form-control" id="EstatusSolicitud" name="EstatusSolicitud">
                                <option value="NO"></option> 
                                <option value="APROBADO">APROBADO</option>
                                <option value="NO APROBADO">NO APROBADO</option>
                                <option value="NO DISPONIBLE">NO DISPONIBLE</option>
                            </select>
                        </div>
                        <div class="col-md-12 ">
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
            <form id="frmSolicitud">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="text" id="IDTRANSPORTE" name="IDTRANSPORTE" class="form-control" readonly="">
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
                        <div class="col-md-4">
                            <label for="">DESCRIPCIÓN DE LA COMISIÓN (RUTA)</label>
                            <textarea id="Descripcion" type="text" name="Descripcion" rows="5" cols="20" class="form-control" value="" placeholder="1.Dirígete al oeste por Loma del Pedregal hacia Loma del Copal. 2.Gira a la derecha con dirección a Loma del Copal  3.Gira a la izquierda con dirección a Blvd. Campestre">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO DESTINO</label>
                            <select class="form-control" id="EstadoDestino" name="EstadoDestino">

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD DESTINO</label>
                            <select class="form-control" id="CiudadDestino" name="CiudadDestino">

                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">LUGAR DE SALIDA</label>
                            <textarea id="LugarSalida" type="text" name="LugarSalida" rows="5" cols="20" class="form-control" value="" placeholder="Blvd. Campestre 1821
                                      Lomas del Campestre, 37150 León, Gto.">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">HORA DE SALIDA</label>     
                            <input type="text" id="HoraSalida" name="HoraSalida" class="form-control" placeholder="EJ: 10:15 AM">
                        </div> 
                        <div class="col-md-4">
                            <label for="">HORA DE REGRESO</label>     
                            <input type="text" id="HoraRegreso" name="HoraRegreso" class="form-control" placeholder="EJ: 12:15 AM">
                        </div> 
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">DURACIÓN DE LA COMISIÓN (HRS)</label>     
                            <input type="text" id="DuracionComision" name="DuracionComision" class="form-control" placeholder="EJ: 2 HORAS ">
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO DE PERSONAS QUE ABORDARÁN LA UNIDAD</label>     
                            <input type="text" id="Pasajeros" name="Pasajeros" class="form-control" placeholder="EJ: 5 PERSONAS">
                        </div> 
                        <div class="col-md-4">
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


                        <!----INICIO SECCION DE FOTOS X UNIDAD DE TRANSPORTE--->

                        <div class=" col-md-12" align="center">
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
                                                data-toggle="tooltip" data-placement="top" data-original-title="GUARDAR ADJUNTO"><span class="fa fa-check fa-2x kingblue-icon"></span> </button>
                                    </div>
                                </div>
                            </div> 
                        </div>


                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS 
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="REMOVER FOTO" onclick="onRemoverFotoSolicitud()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button>
                            </h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXFotoXSolicitud" align="center"></div>
                        <div id="tblFotosXSolicitud"></div> 
                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-copy fa-2x kingblue-icon"></span> DOCUMENTOS
                                <button type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" data-original-title="REMOVER DOCUMENTO" onclick="onRemoverDocumentoSolicitud()">
                                    <span class='fa fa-trash fa-lg kingblue-icon'></span></button>
                            </h1>     
                        </div>
                        <div class="col-md-12" id="VistaPreviaXDocumentoXSolicitud" align="center"></div>
                        <div id="tblDocumentosXSolicitud"></div>

                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--FIN SOLICITUDES-->

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
    var mdlVerMantenimiento = $("#mdlVerMantenimiento");
    var btnAgregarAdjuntoMantenimiento = mdlVerMantenimiento.find("#btnAgregarAdjunto");
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
    var mdlVerVerificacion = $("#mdlVerVerificacion");
    var btnAgregarAdjuntoVerificacion = mdlVerVerificacion.find("#btnAgregarAdjunto");
    var btnGuardarVerificacion = mdlVerificacion.find("#btnGuardar");

    var btnMasFotosVerificacion = mdlVerificacion.find("#btnMasFotos");
    var btnMasDocumentosVerificacion = mdlVerificacion.find("#btnMasDocumentos");

    var btnAccidente = $("#btnAccidente");
    var btnAccidentes = $("#btnAccidentes");
    var mdlAccidente = $("#mdlAccidente");
    var mdlVerAccidente = $("#mdlVerAccidente");
    var btnAgregarAdjuntoAccidente = mdlVerAccidente.find("#btnAgregarAdjunto");
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
    var btnAgregarAdjuntoSolicitud = mdlVerSolicitud.find("#btnAgregarAdjunto");

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
                    console.log(r.EstatusSolicitud);
                    console.log(r.EstatusSolicitud === 'APROBADO');

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

        $(".modal").find("#EstadoDestino").change(function () {
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
                $(".modal").find("#CiudadDestino").html(option);
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


        btnAgregarAdjuntoSolicitud.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            var frm = new FormData(mdlVerSolicitud.find("form")[0]);
            var Adjunto = mdlVerSolicitud.find("#btnArchivoU");
            frm.append('TIPO', mdlVerSolicitud.find("#cmbTipo").val());
            frm.append('OBSERVACIONES', mdlVerSolicitud.find("#ObservacionesXFoto").val());
            frm.append('ADJUNTO', Adjunto[0].files[0], Adjunto[0].files[0].name);
            $.ajax({
                url: master_url + 'onAgregarAdjuntoSolicitud',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA ADJUNTADO EL ARCHIVO', 'success');
                mdlVerSolicitud.find("#ObservacionesXFoto").val("");
                Adjunto.val("");
                getFotosXSolicitudByID(mdlVerSolicitud.find("#ID").val());
                getDocumentosXSolicitudByID(mdlVerSolicitud.find("#ID").val());
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnAgregarAdjuntoAccidente.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            var frm = new FormData(mdlVerAccidente.find("form")[0]);
            var Adjunto = mdlVerAccidente.find("#btnArchivoU");
            frm.append('TIPO', mdlVerAccidente.find("#cmbTipo").val());
            frm.append('OBSERVACIONES', mdlVerAccidente.find("#ObservacionesXFoto").val());
            frm.append('ADJUNTO', Adjunto[0].files[0], Adjunto[0].files[0].name);
            $.ajax({
                url: master_url + 'onAgregarAdjuntoAccidente',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA ADJUNTADO EL ARCHIVO', 'success');
                mdlVerAccidente.find("#ObservacionesXFoto").val("");
                Adjunto.val("");
                getFotosXAccidenteByID(mdlVerAccidente.find("#ID").val());
                getDocumentosXAccidenteByID(mdlVerAccidente.find("#ID").val());
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnAgregarAdjuntoVerificacion.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            var frm = new FormData(mdlVerVerificacion.find("form")[0]);
            var Adjunto = mdlVerVerificacion.find("#btnArchivoU");
            frm.append('TIPO', mdlVerVerificacion.find("#cmbTipo").val());
            frm.append('OBSERVACIONES', mdlVerVerificacion.find("#ObservacionesXFoto").val());
            frm.append('ADJUNTO', Adjunto[0].files[0], Adjunto[0].files[0].name);
            $.ajax({
                url: master_url + 'onAgregarAdjuntoVerificacion',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA ADJUNTADO EL ARCHIVO', 'success');
                mdlVerVerificacion.find("#ObservacionesXFoto").val("");
                Adjunto.val("");
                getFotosXVerificacionID(mdlVerVerificacion.find("#ID").val());
                getDocumentosXVerificacionByID(mdlVerVerificacion.find("#ID").val());
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnAgregarAdjuntoMantenimiento.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPER..."
            });
            var frm = new FormData(mdlVerMantenimiento.find("form")[0]);
            var Adjunto = mdlVerMantenimiento.find("#btnArchivoU");
            frm.append('TIPO', mdlVerMantenimiento.find("#cmbTipo").val());
            frm.append('OBSERVACIONES', mdlVerMantenimiento.find("#ObservacionesXFoto").val());
            frm.append('ADJUNTO', Adjunto[0].files[0], Adjunto[0].files[0].name);
            $.ajax({
                url: master_url + 'onAgregarAdjuntoMantenimiento',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA ADJUNTADO EL ARCHIVO', 'success');
                mdlVerMantenimiento.find("#ObservacionesXFoto").val("");
                Adjunto.val("");
                getFotosXMantenimientoID(mdlVerMantenimiento.find("#ID").val());
                getDocumentosXMantenimientoByID(mdlVerMantenimiento.find("#ID").val());
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
                        mdlEditar.find("#VistaPreviaXFoto").html('');
                        mdlEditar.find("#VistaPreviaXDocumento").html('');
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
        getEstados();
        getConductores();
        getCiudadesX();
    });

    /*GENERADORES DE TABLAS CON BUSCADOR DINAMICO*/
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
            /*DB CLICK FOR EDIT*/
            $('#tblTransporte tbody').on('dblclick', 'tr', function () {
                $("#tblTransporte").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                btnEditar.trigger("click");
            });
            /* Apply the search*/
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
            /*DB CLICK FOR EDIT*/
            $('#tblTransporteMantenimiento tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteMantenimiento").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                getMantenimientoByID();
            });
            /* Apply the search*/
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


    function getMantenimientoByID() {
        if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getMantenimientoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                var r = data[0];

                mdlVerMantenimiento.find("#VistaPreviaXFotoX").html("");
                mdlVerMantenimiento.find("#VistaPreviaXFotoXMantenimiento").html("");
                mdlVerMantenimiento.find("#VistaPreviaXDocumentoXMantenimiento").html("");
                getFotosXMantenimientoID(r.ID);
                getDocumentosXMantenimientoByID(r.ID);
                /*DATOS DEL MANTENIMIENTO*/
                mdlVerMantenimiento.find("#ID").val(r.ID);
                mdlVerMantenimiento.find("#IDTRANSPORTE").val(r.IdTransporte);
                mdlVerMantenimiento.find("#Mantenimiento").select2("val", r.MANTENIMIENTO);
                mdlVerMantenimiento.find("#Kilometraje").val(r.Kilometraje);
                mdlVerMantenimiento.find("#Taller").val(r.Taller);
                mdlVerMantenimiento.find("#Costo").val(r.COSTO);
                mdlVerMantenimiento.find("#Tareas").val(r.Tareas);
                mdlVerMantenimiento.find("#Fecha").val(r.Fecha);
                mdlVerMantenimiento.find("#Mantenimiento").select2("val", r.MANTENIMIENTO);
                mdlVerMantenimiento.find("#Auto").html("<h1 class='text-success font50'>" + r.TRANSPORTE + "</h1>");
                mdlVerMantenimiento.modal('show');
            }).fail(function (x, y, z) {
                console.log('*****ERROR AL OBTENER LA INFORMACION PRINCIPAL DEL MANTENIMIENTO*****');
                console.log(x, y, z);
                console.log('***********************************************************');
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
        }
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
            /*DB CLICK FOR EDIT*/
            $('#tblTransporteVerificacion tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteVerificacion").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                /*VER EL REGISTRO A DETALLE*/
                getVerificacionByID();
                /*FIN DEL REGISTRO A DETALLE*/
            });
            /* Apply the search*/
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

    function getVerificacionByID() {

        if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getVerificacionByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                var r = data[0];

                mdlVerVerificacion.find("#VistaPreviaXFotoX").html("");
                mdlVerVerificacion.find("#VistaPreviaXFotoXVerificacion").html("");
                mdlVerVerificacion.find("#VistaPreviaXDocumentoXVerificacion").html("");

                getFotosXVerificacionID(r.ID);
                getDocumentosXVerificacionByID(r.ID);

                /*DATOS DEL MANTENIMIENTO*/
                mdlVerVerificacion.find("#ID").val(r.ID);
                mdlVerVerificacion.find("#IDTRANSPORTE").val(r.IdTransporte);
                mdlVerVerificacion.find("#Semestre").select2("val", r.Semestre);
                mdlVerVerificacion.find("#AnioVerificacion").val(r.AnioVerificacion);
                mdlVerVerificacion.find("#FechaRealizacion").val(r.FechaRealizacion);
                mdlVerVerificacion.find("#LugarRealizacion").val(r.LugarRealizacion);
                mdlVerVerificacion.find("#Auto").html("<h1 class='text-success font50'>" + r.TRANSPORTE + "</h1>");
                mdlVerVerificacion.modal('show');
            }).fail(function (x, y, z) {
                console.log('*****ERROR AL OBTENER LA INFORMACION PRINCIPAL DEL MANTENIMIENTO*****');
                console.log(x, y, z);
                console.log('***********************************************************');
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
        }
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
            /*DB CLICK FOR EDIT*/
            $('#tblTransporteAccidente tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteAccidente").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                getAccidenteByID();
            });
            /*             Apply the search*/
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

    function getAccidenteByID() {
        if (temp !== null && temp !== undefined && temp !== '' && temp !== 'null' && temp > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getAccidenteByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                var r = data[0];

                mdlVerAccidente.find("#VistaPreviaXFotoX").html("");
                mdlVerAccidente.find("#VistaPreviaXFotoXAccidente").html("");
                mdlVerAccidente.find("#VistaPreviaXDocumentoXAccidente").html("");
                getFotosXAccidenteByID(r.ID);
                getDocumentosXAccidenteByID(r.ID);
                /*DATOS DEL MANTENIMIENTO*/
                mdlVerAccidente.find("#ID").val(r.ID);
                mdlVerAccidente.find("#IDTRANSPORTE").val(r.IdTransporte);
                mdlVerAccidente.find("#FechaAccidente").val(r.FechaAccidente);
                mdlVerAccidente.find("#HoraAccidente").val(r.HoraAccidente);
                mdlVerAccidente.find("#Descripcion").val(r.Descripcion);
                mdlVerAccidente.find("#Danios").val(r.Danios);
                mdlVerAccidente.find("#Auto").html("<h1 class='text-success font50'>" + r.TRANSPORTE + "</h1>");
                mdlVerAccidente.modal('show');
            }).fail(function (x, y, z) {
                console.log('*****ERROR AL OBTENER LA INFORMACION PRINCIPAL DEL ACCIDENTE*****');
                console.log(x, y, z);
                console.log('***********************************************************');
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
        }
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
            /*DB CLICK FOR EDIT*/
            $('#tblTransporteSolicitud tbody').on('dblclick', 'tr', function () {
                $("#tblTransporteSolicitud").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                /**MODAL DE VISUALIZACION A DETALLE**/

                $.ajax({
                    url: master_url + 'getSolicitudByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log('* * * * * * * * * * * * * * * ');
                    console.log(data);
                    var dtm = data[0];
                    console.log('* * * * * * * * * * * * * * * ');


                    getDocumentosXSolicitudByID(dtm.ID);
                    getFotosXSolicitudByID(dtm.ID);

                    mdlVerSolicitud.find("#ID").val(dtm.ID);
                    mdlVerSolicitud.find("#IDTRANSPORTE").val(dtm.IdTransporte);
                    console.log('* XTRANSPORTE *');
                    mdlVerSolicitud.find("#FechaComision").val(dtm.FechaComision);
                    mdlVerSolicitud.find("#Descripcion").val(dtm.Descripcion);

                    mdlVerSolicitud.find("#EstadoDestino").val(dtm.EstadoDestino);
                    mdlVerSolicitud.find("#CiudadDestino").val(dtm.CiudadDestino);

                    mdlVerSolicitud.find("#EstadoDestino").select2("val", dtm.EstadoDestino);
                    mdlVerSolicitud.find("#CiudadDestino").select2("val", dtm.CiudadDestino);

                    mdlVerSolicitud.find("#LugarSalida").val(dtm.LugarSalida);
                    mdlVerSolicitud.find("#HoraSalida").val(dtm.HoraSalida);
                    mdlVerSolicitud.find("#HoraRegreso").val(dtm.HoraRegreso);
                    mdlVerSolicitud.find("#DuracionComision").val(dtm.DuracionComision);
                    mdlVerSolicitud.find("#Pasajeros").val(dtm.Pasajeros);
                    mdlVerSolicitud.find("#NombresPasajeros").val(dtm.NombresPasajeros);
                    mdlVerSolicitud.find("#Conductor").val(dtm.Conductor);
                    mdlVerSolicitud.find("#Conductor").select2("val", dtm.Conductor);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                mdlVerSolicitud.modal('show');
            });
            /*Apply the search*/
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

    /*DETECTORES DE EVENTOS PARA MANAGER DE ARCHIVOS*/

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
            HoldOn.close();
            ObservacionesXFotoX.focus();
        });

        btnArchivo.trigger('click');
        HoldOn.close();
    }

    /*BLOQUES DE HTML PARA GENERAR MANAGERS DE ARCHIVOS*/

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
                    mdlEditar.find("#VistaPreviaXFoto").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlEditar.find("#VistaPreviaXFoto").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlEditar.find("#VistaPreviaXFoto").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
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
                    mdlEditar.find("#VistaPreviaXDocumento").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlEditar.find("#VistaPreviaXDocumento").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlEditar.find("#VistaPreviaXDocumento").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
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
            mdlEditar.find("#VistaPreviaXFoto").html('');
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
            mdlEditar.find("#VistaPreviaXDocumento").html('');
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
            $(".modal").find("#EstadoDestino").html(option);
        }).fail(function (x, y, z) {
            console.log('* * * * * ERROR AL OBTENER LOS ESTADOS* * * * * *');
            console.log(x, y, z);
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * *');
        }).always(function () {
            console.log('ESTADOS OK');
        });
    }

    function getCiudadesX() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getCiudadesX',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.CIUDAD + '</option>';
            });
            $(".modal").find("#CiudadDestino").html(option);
            console.log('CIUDADEX COMPLETADO')
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
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
            $(".modal").find("#Conductor").html(option);
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


    function onRemoverFoto() {
        mdlEditar.find("#VistaPreviaXFoto").html("");
    }
    function onRemoverDocumento() {
        mdlEditar.find("#VistaPreviaXDocumento").html("");
    }
    /* FIN EDITOR DE TRANSPORTE*/

    /*MANAGERS DE FOTOS Y DOCUMENTOS MANTENIMIENTO DE TRANSPORTE*/

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

    function getDocumentosXMantenimientoByID(IDX) {

        $.ajax({
            url: master_url + 'getDocumentosXMantenimientoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS DOCUMENTOS DE MANTENIMIENTO * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");
            /*DOCUMENTOS X MANTENIMIENTO ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td class="hide">';
                var ext = getExt(v.URL);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    tbl += "<img id='trtImagen' src='" + v.URL + "' class ='img-responsive'/>";
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    tbl += '<embed src="' + v.URL + '" type="application/pdf" width="90%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">';
                }
                tbl += '</td>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getDocumentoXMantenimientoID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarDocumentoXMantenimientoID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerMantenimiento.find("#tblDocumentosXMantenimiento").html(tbl);
        }).fail(function (x, y, z) {
            console.log('*****ERROR AL OBTENER LOS DOCUMENTOS DEL MANTENIMIENTO*****');
            console.log(x, y, z);
            console.log('***********************************************************');
        }).always(function () {
            HoldOn.close();
        });

    }

    function getFotosXMantenimientoID(IDX) {

        $.ajax({
            url: master_url + 'getFotosXMantenimientoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS FOTOS DE MANTENIMIENTO * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");

            /*FOTOS X MANTENIMIENTO ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getFotoXMantenimientoID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXMantenimientoID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerMantenimiento.find("#tblFotosXMantenimiento").html(tbl);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarFotoXMantenimientoID(IDFTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXMantenimientoID',
            type: "POST",
            data: {
                ID: IDFTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO ELIMINADA', 'success');
            mdlVerMantenimiento.find("#VistaPreviaXFotoX").html("");
            getFotosXMantenimientoID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarDocumentoXMantenimientoID(IDDOCTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarDocumentoXMantenimientoID',
            type: "POST",
            data: {
                ID: IDDOCTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTO ELIMINADO', 'success');
            mdlVerMantenimiento.find("#VistaPreviaXDocumentoX").html("");
            getDocumentosXMantenimientoByID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentoXMantenimientoID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getDocumentoXMantenimientoID',
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
                    mdlVerMantenimiento.find("#VistaPreviaXDocumentoXMantenimiento").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlVerMantenimiento.find("#VistaPreviaXDocumentoXMantenimiento").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerMantenimiento.find("#VistaPreviaXDocumentoX").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getFotoXMantenimientoID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getFotoXMantenimientoID',
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
                    mdlVerMantenimiento.find("#VistaPreviaXFotoXMantenimiento").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlVerMantenimiento.find("#VistaPreviaXFotoXMantenimiento").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerMantenimiento.find("#VistaPreviaXFotoX").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemoverFotoMantenimiento() {
        mdlVerMantenimiento.find("#VistaPreviaXFotoXMantenimiento").html("");
    }
    function onRemoverDocumentoMantenimiento() {
        mdlVerMantenimiento.find("#VistaPreviaXDocumentoXMantenimiento").html("");
    }

    /*FIN DE MANAGERS DE FOTOS Y DOCUMENTOS MANTENIMIENTO DE TRANSPORTE*/


    /*MANAGERS DE FOTOS Y DOCUMENTOS VERIFICACION DE TRANSPORTE*/

    function getDocumentosXVerificacionByID(IDX) {

        $.ajax({
            url: master_url + 'getDocumentosXVerificacionByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS DOCUMENTOS DE VERIFICACION * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");
            /*DOCUMENTOS X VERIFICACION ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td class="hide">';
                var ext = getExt(v.URL);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    tbl += "<img id='trtImagen' src='" + v.URL + "' class ='img-responsive'/>";
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    tbl += '<embed src="' + v.URL + '" type="application/pdf" width="90%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">';
                }
                tbl += '</td>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getDocumentoXVerificacionID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarDocumentoXVerificacionID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerVerificacion.find("#tblDocumentosXVerificacion").html(tbl);
        }).fail(function (x, y, z) {
            console.log('*****ERROR AL OBTENER LOS DOCUMENTOS DEL VERIFICACION*****');
            console.log(x, y, z);
            console.log('***********************************************************');
        }).always(function () {
            HoldOn.close();
        });

    }

    function getFotosXVerificacionID(IDX) {

        $.ajax({
            url: master_url + 'getFotosXVerificacionByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS FOTOS DE VERIFICACION * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");

            /*FOTOS X VERIFICACION ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getFotoXVerificacionID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXVerificacionID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerVerificacion.find("#tblFotosXVerificacion").html(tbl);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarFotoXVerificacionID(IDFTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXVerificacionID',
            type: "POST",
            data: {
                ID: IDFTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO ELIMINADA', 'success');
            mdlVerVerificacion.find("#VistaPreviaXFotoX").html("");
            getFotosXVerificacionID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarDocumentoXVerificacionID(IDDOCTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarDocumentoXVerificacionID',
            type: "POST",
            data: {
                ID: IDDOCTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTO ELIMINADO', 'success');
            mdlVerVerificacion.find("#VistaPreviaXDocumentoX").html("");
            getDocumentosXVerificacionByID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentoXVerificacionID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getDocumentoXVerificacionID',
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
                    mdlVerVerificacion.find("#VistaPreviaXDocumentoXVerificacion").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlVerVerificacion.find("#VistaPreviaXDocumentoXVerificacion").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerVerificacion.find("#VistaPreviaXDocumentoXVerificacion").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
            console.log(x.responseText);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getFotoXVerificacionID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getFotoXVerificacionID',
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
                    mdlVerVerificacion.find("#VistaPreviaXFotoXVerificacion").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlVerVerificacion.find("#VistaPreviaXFotoXVerificacion").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerVerificacion.find("#VistaPreviaXFotoXVerificacion").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemoverFotoVerificacion() {
        mdlVerVerificacion.find("#VistaPreviaXFotoXVerificacion").html("");
    }
    function onRemoverDocumentoVerificacion() {
        mdlVerVerificacion.find("#VistaPreviaXDocumentoXVerificacion").html("");
    }

    /*FIN DE MANAGERS DE FOTOS Y DOCUMENTOS VERIFICACION DE TRANSPORTE*/

    /*MANAGERS DE FOTOS Y DOCUMENTOS ACCIDENTE POR TRANSPORTE*/

    function getDocumentosXAccidenteByID(IDX) {

        $.ajax({
            url: master_url + 'getDocumentosXAccidenteByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS DOCUMENTOS DEL ACCIDENTE * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");
            /*DOCUMENTOS X VERIFICACION ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td class="hide">';
                var ext = getExt(v.URL);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    tbl += "<img id='trtImagen' src='" + v.URL + "' class ='img-responsive'/>";
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    tbl += '<embed src="' + v.URL + '" type="application/pdf" width="90%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">';
                }
                tbl += '</td>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getDocumentoXAccidenteID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarDocumentoXAccidenteID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerAccidente.find("#tblDocumentosXAccidente").html(tbl);
        }).fail(function (x, y, z) {
            console.log('*****ERROR AL OBTENER LOS DOCUMENTOS DEL VERIFICACION*****');
            console.log(x, y, z);
            console.log('***********************************************************');
        }).always(function () {
            HoldOn.close();
        });

    }

    function getFotosXAccidenteByID(IDX) {

        $.ajax({
            url: master_url + 'getFotosXAccidenteByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS FOTOS DEL ACCIDENTE * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");

            /*FOTOS X VERIFICACION ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getFotoXAccidenteID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXAccidenteID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerAccidente.find("#tblFotosXAccidente").html(tbl);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function onEliminarFotoXAccidenteID(IDFTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXAccidenteID',
            type: "POST",
            data: {
                ID: IDFTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO ELIMINADA', 'success');
            mdlVerAccidente.find("#VistaPreviaXFotoXAccidente").html("");
            getFotosXAccidenteByID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarDocumentoXAccidenteID(IDDOCTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarDocumentoXAccidenteID',
            type: "POST",
            data: {
                ID: IDDOCTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTO ELIMINADO', 'success');
            mdlVerAccidente.find("#VistaPreviaXDocumentoXAccidente").html("");
            getDocumentosXAccidenteByID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentoXAccidenteID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getDocumentoXAccidenteID',
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
                    mdlVerAccidente.find("#VistaPreviaXDocumentoXAccidente").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlVerAccidente.find("#VistaPreviaXDocumentoXAccidente").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerAccidente.find("#VistaPreviaXDocumentoXAccidente").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
            console.log(x.responseText);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getFotoXAccidenteID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getFotoXAccidenteID',
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
                    console.log('GIF, JPG, PNG');
                    mdlVerAccidente.find("#VistaPreviaXFotoXAccidente").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    console.log('PDF');
                    mdlVerAccidente.find("#VistaPreviaXFotoXAccidente").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerAccidente.find("#VistaPreviaXFotoXAccidente").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemoverFotoAccidente() {
        mdlVerAccidente.find("#VistaPreviaXFotoXAccidente").html("");
    }
    function onRemoverDocumentoAccidente() {
        mdlVerAccidente.find("#VistaPreviaXDocumentoXAccidente").html("");
    }
    /*FIN DE MANAGERS DE FOTOS Y DOCUMENTOS ACCIDETE POR TRANSPORTE*/
    /*MANAGER DE FOTOS Y DOCUMENTO DE SOLICITUD POR TRANSPORTE*/


    function getDocumentosXSolicitudByID(IDX) {

        $.ajax({
            url: master_url + 'getDocumentosXSolicitudByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS DOCUMENTOS DEL ACCIDENTE * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");
            /*DOCUMENTOS X VERIFICACION ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td class="hide">';
                var ext = getExt(v.URL);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    tbl += "<img id='trtImagen' src='" + v.URL + "' class ='img-responsive'/>";
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    tbl += '<embed src="' + v.URL + '" type="application/pdf" width="90%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">';
                }
                tbl += '</td>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getDocumentoXSolicitudID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarDocumentoXSolicitudID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerSolicitud.find("#tblDocumentosXSolicitud").html(tbl);
        }).fail(function (x, y, z) {
            console.log('*****ERROR AL OBTENER LOS DOCUMENTOS DEL VERIFICACION*****');
            console.log(x, y, z);
            console.log('***********************************************************');
        }).always(function () {
            HoldOn.close();
        });

    }

    function getFotosXSolicitudByID(IDX) {

        $.ajax({
            url: master_url + 'getFotosXSolicitudByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log("* * * * * DATOS FOTOS DEL ACCIDENTE * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * *");

            /*FOTOS X VERIFICACION ID*/

            var tbl = '<table class="table table-striped table-hover">';
            tbl += '<thead><th>OBSERVACIONES</th><th>VER</th><th>ELIMINAR</th></thead>';
            $.each(data, function (k, v) {
                console.log(v);
                tbl += '<tr>';
                tbl += '<td>';
                tbl += v.OBSERVACIONES;
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="getFotoXSolicitudID(' + v.ID + ')"><span class="fa fa-eye fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '<td>';
                tbl += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXSolicitudID(' + v.ID + ',' + IDX + ')"><span class="fa fa-ban fa-2x"></span></button>';
                tbl += '</td>';
                tbl += '</tr>';
            });
            tbl += '<tr></tr>';
            tbl += '<thead></thead>';
            tbl += '</table>';
            mdlVerSolicitud.find("#tblFotosXSolicitud").html(tbl);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentoXSolicitudID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getDocumentoXSolicitudID',
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
                    mdlVerSolicitud.find("#VistaPreviaXDocumentoXSolicitud").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlVerSolicitud.find("#VistaPreviaXDocumentoXSolicitud").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerSolicitud.find("#VistaPreviaXDocumentoXSolicitud").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
            console.log(x.responseText);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getFotoXSolicitudID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getFotoXSolicitudID',
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
                    console.log('GIF, JPG, PNG');
                    mdlVerSolicitud.find("#VistaPreviaXFotoXSolicitud").html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    console.log('PDF');
                    mdlVerSolicitud.find("#VistaPreviaXFotoXSolicitud").html('<hr> <embed src="' + source + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
            } else {
                mdlVerSolicitud.find("#VistaPreviaXFotoXSolicitud").html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function onEliminarFotoXSolicitudID(IDFTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXSolicitudID',
            type: "POST",
            data: {
                ID: IDFTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO ELIMINADA', 'success');
            mdlVerSolicitud.find("#VistaPreviaXFotoXSolicitud").html("");
            getFotosXSolicitudByID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarDocumentoXSolicitudID(IDDOCTO, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarDocumentoXSolicitudID',
            type: "POST",
            data: {
                ID: IDDOCTO
            }
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTO ELIMINADO', 'success');
            mdlVerSolicitud.find("#VistaPreviaXDocumentoXSolicitud").html("");
            getDocumentosXSolicitudByID(IDX);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function onRemoverFotoSolicitud() {
        mdlVerSolicitud.find("#VistaPreviaXFotoXSolicitud").html("");
    }
    function onRemoverDocumentoSolicitud() {
        mdlVerSolicitud.find("#VistaPreviaXDocumentoXSolicitud").html("");
    }
</script>