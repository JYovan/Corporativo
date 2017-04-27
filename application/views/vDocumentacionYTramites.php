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
                    <div class="text-center cursor-hand"><h1 class="text-white">MÓDULO DE DOCUMENTACIÓN Y TRAMITES</h1></div>
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
                            data-original-title="REGISTRO">
                        <span class="fa fa-plus fa-3x info-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnEditar" name="btnEditar"
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
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnCancelar" name="btnCancelar"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="CANCELAR">
                        <span class="fa fa-ban fa-3x danger-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnAsignar" name="btnAsignar"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="ASIGNACIÓN DE TRÁMITE">
                        <span class="fa fa-compress fa-3x danger-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnVerAsignados" name="btnVerAsignados"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="VER TODOS LOS TRÁMITES ASIGNADOS">
                        <span class="fa fa-eye fa-3x danger-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnCancelarAsignacion" name="btnCancelarAsignacion"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="CANCELAR ASIGNADO">
                        <span class="fa fa-ban fa-3x danger-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnVerMisAsignados" name="btnVerMisAsignados"
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title=""  type="button"
                            data-original-title="VER MIS TRÁMITES ASIGNADOS">
                        <span class="fa fa-eye fa-3x purple-icon"></span>
                    </button>
                </div>
                <div class="col-md-12" id="tblTitulo"><h1></h1></div>
                <div class="col-md-12" id="tblResult"></div>
            </div>
        </div>
    </div>
</div>

<!--MODAL DE REGISTRO-->


<div class="modal animated zoomInUp" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> REGISTRO DE DOCUMENTACIÓN Y TRAMITES</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-6">
                            <label for="">TIPO</label>
                            <select class="form-control" id="Tipo" name="Tipo">
                                <option></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">NÚMERO</label>
                            <input type="text" class="form-control" id="Numero" name="Numero" placeholder="XX-XXXXXX-XXXX" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">CATEGORÍA</label>
                            <select class="form-control" id="Categoria" name="Categoria">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">COPIA DE CONOCIMIENTO</label>
                            <select class="form-control" id="CopiaConocimiento" name="CopiaConocimiento">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">ASUNTO</label>
                            <textarea class="form-control" type="text" placeholder="ESCRIBA A DETALLE EL ASUNTO" id="Asunto" name="Asunto" rows="4" cols="20">
                            </textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRIORIDAD</label>
                            <select class="form-control" id="Prioridad" name="Prioridad">
                                <option></option>
                                <option value="NORMAL">NORMAL</option>
                                <option value="URGENTE">URGENTE</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DEL DOCUMENTO</label>
                            <input id="FechaDocumento" name="FechaDocumento" type="text" class="form-control cursor-hand" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-12" align="center"><h1>REMITENTE EXTERNO</h1></div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" class="form-control" placeholder="EJ: FULANITO" id="NombreExterno" name="NombreExterno">
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO REMITENTE</label>
                            <select id="RemitenteExterno" name="RemitenteExterno" class="form-control">
                                <option></option>
                                <option value="CLIENTE">CLIENTE</option>
                                <option value="PROVEEDOR">PROVEEDOR</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">REMITENTE</label>
                            <select id="Cliente" name="Cliente" class="form-control">
                                <option></option> 
                            </select>
                            <label for="">OTRO</label>
                            <input type="text" id="RemitenteOtro" name="RemitenteOtro" class="form-control" placeholder="EJ: FULANITO X">
                        </div>
                        <div class="col-md-12" align="center"><h1>REMITENTE INTERNO</h1></div>
                        <div class="col-md-4">
                            <label for="">ÁREA</label>
                            <select class="form-control" id="AreaInterno" name="AreaInterno">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <select class="form-control" id="PuestoInterno" name="PuestoInterno"> <option></option> </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <select class="form-control" id="NombreInterno" name="NombreInterno"> <option></option> </select>
                        </div>
                        <div class="col-md-12" align="center"><h1>DESTINATARIO</h1></div>
                        <div class="col-md-4">
                            <label for="">SERVICIO/PROCEDIMIENTO</label><input type="text" class="form-control" id="Servicio" name="Servicio" placeholder="EJ:LICENCIA X">
                        </div>
                        <div class="col-md-4">
                            <label for="">ACTIVIDAD</label>
                            <input type="text" class="form-control" id="Actividad" name="Actividad">
                        </div>
                        <div class="col-md-4">
                            <label for="">ÁREA</label><select class="form-control" id="AreaDestinatario" name="AreaDestinatario"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">PUESTO</label><select class="form-control" id="PuestoDestinatario" name="PuestoDestinatario"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE</label><select class="form-control" id="NombreDestinatario" name="NombreDestinatario"></select>
                        </div>
                        <div class="col-md-12" align="center"><h1>DATOS DE RECEPCIÓN</h1></div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label><select class="form-control" id="NombreRecibe" name="NombreRecibe"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ÁREA</label><select class="form-control" id="AreaRecibe" name="AreaRecibe"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">PUESTO</label><select class="form-control" id="PuestoRecibe" name="PuestoRecibe"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DEL DOCUMENTO</label>
                            <input id="FechaRecibe" name="FechaRecibe" type="text" class="form-control cursor-hand" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">HORA DEL DOCUMENTO</label>
                            <input id="HoraRecibe" name="HoraRecibe" type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">FORMATO DEL DOCUMENTO</label>
                            <select class="form-control" id="FormatoDocumento" name="FormatoDocumento">
                                <option></option>
                                <option value="FISICO">FISICO</option>
                                <option value="ELECTRONICO">ELECTRONICO</option>

                            </select>
                        </div>
                        <div class="col-md-12" align="center"><h1>UBICACIÓN DEL ARCHIVO FÍSICO</h1></div>

                        <div class="col-md-6">
                            <label for="">ÁREA</label><select class="form-control" id="AreaRecibe" name="AreaRecibe"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">UBICACIÓN EN ARCHIVO ELECTRÓNICO</label>
                            <input type="text" class="form-control" id="AreaRecibe" name="AreaRecibe">
                        </div>
                        <div class="col-md-12" id="VistaPrevia" align="center"></div>
                        <div class="col-md-12" align="center">
                            <input type="file" id="Archivo" name="Archivo" class="hide">
                            <button type="button" class="btn btn3d btn-default fa-lg" id="btnUpload" name="btnUpload" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-3x cyan-icon"></span></button>
                        </div>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> EDITAR DOCUMENTACIÓN Y TRAMITES</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide"> 
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">TIPO</label>
                            <select class="form-control" id="Tipo" name="Tipo">
                                <option></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">NÚMERO</label>
                            <input type="text" class="form-control" id="Numero" name="Numero" placeholder="XX-XXXXXX-XXXX" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">CATEGORÍA</label>
                            <select class="form-control" id="Categoria" name="Categoria">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">COPIA DE CONOCIMIENTO</label>
                            <select class="form-control" id="CopiaConocimiento" name="CopiaConocimiento">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">ASUNTO</label>
                            <textarea class="form-control" type="text" placeholder="ESCRIBA A DETALLE EL ASUNTO" id="Asunto" name="Asunto" rows="4" cols="20">
                            </textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRIORIDAD</label>
                            <select class="form-control" id="Prioridad" name="Prioridad">
                                <option></option>
                                <option value="NORMAL">NORMAL</option>
                                <option value="URGENTE">URGENTE</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DEL DOCUMENTO</label>
                            <input id="FechaDocumento" name="FechaDocumento" type="text" class="form-control cursor-hand" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-12" align="center"><h1>REMITENTE EXTERNO</h1></div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" class="form-control" placeholder="EJ: FULANITO" id="NombreExterno" name="NombreExterno">
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO REMITENTE</label>
                            <select id="RemitenteExterno" name="RemitenteExterno" class="form-control">
                                <option></option>
                                <option value="CLIENTE">CLIENTE</option>
                                <option value="PROVEEDOR">PROVEEDOR</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">REMITENTE</label>
                            <select id="Cliente" name="Cliente" class="form-control">
                                <option></option> 
                            </select>

                            <label for="">OTRO</label>
                            <input type="text" id="RemitenteOtro" name="RemitenteOtro" class="form-control" placeholder="EJ: FULANITO X">
                        </div>
                        <div class="col-md-12" align="center"><h1>REMITENTE INTERNO</h1></div>
                        <div class="col-md-4">
                            <label for="">ÁREA</label>
                            <select class="form-control" id="AreaInterno" name="AreaInterno">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <select class="form-control" id="PuestoInterno" name="PuestoInterno"> <option></option> </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <select class="form-control" id="NombreInterno" name="NombreInterno"> <option></option> </select>
                        </div>
                        <div class="col-md-12" align="center"><h1>DESTINATARIO</h1></div>
                        <div class="col-md-4">
                            <label for="">SERVICIO</label><input type="text" class="form-control" id="Servicio" name="Servicio" placeholder="EJ:LICENCIA X">
                        </div>
                        <div class="col-md-4">
                            <label for="">ACTIVIDAD</label>
                            <input type="text" class="form-control" id="Actividad" name="Actividad">
                        </div>
                        <div class="col-md-4">
                            <label for="">ÁREA</label><select class="form-control" id="AreaDestinatario" name="AreaDestinatario"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">PUESTO</label><select class="form-control" id="PuestoDestinatario" name="PuestoDestinatario"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE</label><select class="form-control" id="NombreDestinatario" name="NombreDestinatario"></select>
                        </div>
                        <div class="col-md-12" align="center"><h1>DATOS DE RECEPCIÓN</h1></div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label><select class="form-control" id="NombreRecibe" name="NombreRecibe"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ÁREA</label><select class="form-control" id="AreaRecibe" name="AreaRecibe"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">PUESTO</label><select class="form-control" id="PuestoRecibe" name="PuestoRecibe"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DEL DOCUMENTO</label>
                            <input id="FechaRecibe" name="FechaRecibe" type="text" class="form-control cursor-hand" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">HORA DEL DOCUMENTO</label>
                            <input id="HoraRecibe" name="HoraRecibe" type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">FORMATO DEL DOCUMENTO</label>
                            <select class="form-control" id="FormatoDocumento" name="FormatoDocumento">
                                <option></option>
                                <option value="FISICO">FISICO</option>
                                <option value="ELECTRONICO">ELECTRONICO</option>

                            </select>
                        </div>
                        <div class="col-md-12" align="center"><h1>UBICACIÓN DEL ARCHIVO FÍSICO</h1></div>

                        <div class="col-md-6">
                            <label for="">ÁREA</label><select class="form-control" id="AreaRecibe" name="AreaRecibe"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">UBICACIÓN EN ARCHIVO ELECTRÓNICO</label>
                            <input type="text" class="form-control" id="AreaRecibe" name="AreaRecibe">
                        </div>
                        <div class="col-md-12" id="VistaPrevia" align="center"></div>
                        <div class="col-md-12" align="center">
                            <input type="file" id="Archivo" name="Archivo" class="hide">
                            <button type="button" class="btn btn3d btn-default fa-lg" id="btnUpload" name="btnUpload" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-3x cyan-icon"></span></button>
                        </div>
                        <!--                        <div class="col-md-12">
                                                    <h3>TRÁMITES ASIGNADOS</h3> 
                                                </div>
                                                <div class="col-md-12" id="VistaPreviaX" align="center"></div>
                                                <div class="col-md-12" id="tblAsignados"></div>-->
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


<div class="modal animated zoomInUp" id="mdlAsignar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> ASIGNAR TRÁMITE</h2>
            </div>
            <form id="frmAsignar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">ASIGNAR A</label>
                            <select id="AsignadoA" name="AsignadoA" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea type="text" placeholder="ESCRIBA SUS OBSERVACIONES A DETALLE" id="ObservacionesAsignacion" name="ObservacionesAsignacion" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <br>
                        <div class="col-md-12" id="VistaPrevia" align="center"></div>
                        <div class="col-md-12" align="center">
                            <input type="file" id="Archivo" name="Archivo" class="hide">
                            <button type="button" class="btn btn3d btn-default fa-lg" id="btnUpload" name="btnUpload" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-3x cyan-icon"></span></button>
                        </div>
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


<div class="modal animated zoomInUp" id="mdlVerAsignacion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> TRÁMITE ASIGNADO</h2>
            </div>
            <form id="frmAsignar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="text" id="IDDYT" name="IDDYT" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">ASIGNADO A</label>
                            <select id="AsignadoA" name="AsignadoA" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea type="text" placeholder="ESCRIBA SUS OBSERVACIONES A DETALLE" id="ObservacionesAsignacion" name="ObservacionesAsignacion" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <br>
                        <div class="col-md-12" id="VistaPreviaX" align="center"></div>
                        <br>
                        <div class="col-md-6">
                            <label for="">ESTATUS DOCUMENTACIÓN</label>
                            <select id="EstatusTramite" name="EstatusTramite" class="form-control">
                                <option></option>
                                <option value="1">EN TRAMITE</option>
                                <option value="2">CONCLUIDO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">OBSERVACIONES</label>
                            <textarea type="text" placeholder="ESCRIBA SUS OBSERVACIONES A DETALLE" id="Observaciones" name="Observaciones" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <br>
                        <div class="col-md-12" id="VistaPrevia" align="center"></div>
                        <div class="col-md-12" align="center">
                            <input type="file" id="Archivo" name="Archivo" class="hide">
                            <button type="button" class="btn btn3d btn-default fa-lg" id="btnUpload" name="btnUpload" onclick="onAgregarFoto(this)"><span class="fa fa-upload fa-3x cyan-icon"></span></button>
                        </div>
                        <div class="col-md-12" id="" align="center"><h1>HISTORIAL EN TRAMITE</div>
                        <div class="col-md-12" id="VistaPreviaHistorialXTramite" align="center"></div>
                        <div class="col-md-12" id="HistorialXTramite">

                        </div>
                        <br>
                        <div class="col-md-12" id="" align="center"><h1>HISTORIAL EN TRAMITE CONCLUIDO</div>
                        <div class="col-md-12" id="VistaPreviaHistorialXTramiteConcluido" align="center"></div>
                        <div class="col-md-12" id="HistorialXTramiteConcluido">

                        </div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button id="btnGuardar" name="btnGuardar" type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"><span class="fa fa-check fa-2x success-icon"></span></button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--FIN MODALES-->
<script>
    var master_url = base_url + 'index.php/ctrlDocumentacionYTtramites/';

    var mdlNuevo = $("#mdlNuevo");
    var btnNuevo = $("#btnNuevo");
    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    var btnModificar = mdlEditar.find("#btnGuardar");
    var btnRefrescar = $("#btnRefrescar");
    var btnUpload = mdlNuevo.find("#btnUpload");
    var Archivo = mdlNuevo.find("#Archivo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnAsignar = $("#btnAsignar");
    var mdlAsignar = $("#mdlAsignar");
    var btnGuardarAsignacion = mdlAsignar.find("#btnGuardar");
    var btnVerAsignados = $("#btnVerAsignados");
    var btnCancelarAsignacion = $("#btnCancelarAsignacion");
    var mdlVerAsignacion = $("#mdlVerAsignacion");
    var btnGuardarAsinacionEstatus = mdlVerAsignacion.find("#btnGuardar");
    var btnCancelar = $("#btnCancelar");
    var btnVerMisAsignados = $("#btnVerMisAsignados");

    var tblTitulo = $("#tblTitulo");

    var VistaPreviaHistorialXTramite = mdlVerAsignacion.find("#VistaPreviaHistorialXTramite");
    var VistaPreviaHistorialXTramiteConcluido = mdlVerAsignacion.find("#VistaPreviaHistorialXTramiteConcluido");

    $(document).ready(function () {

        getDocumentacionYTramitesAsignadosXUsuarioID();

        btnGuardarAsinacionEstatus.click(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'GUARDANDO...'
            });
            var frm = new FormData(mdlVerAsignacion.find("#frmAsignar")[0]);
            frm.append('ESTATUSDOCUMENTACIONT',mdlVerAsignacion.find("#EstatusTramite option:selected").text());
            frm.append('ASIGNADOAT',mdlVerAsignacion.find("#AsignadoA option:selected").text());
            $.ajax({
                url: master_url + 'onAvanzarTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                console.log(data);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTACIÓN AGREGADA', 'success');

                getDocumentacionYTramitesAsignadosXUsuarioID();
                mdlVerAsignacion.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            console.log(mdlVerAsignacion.find("#frmAsignar"));
            console.log(frm);
        });

        btnVerMisAsignados.click(function () {
            btnEditar.addClass("hide");
            btnCancelar.addClass("hide");
            btnAsignar.addClass("hide");
            btnCancelarAsignacion.addClass("hide");
            VistaPreviaHistorialXTramite.html("");
            VistaPreviaHistorialXTramiteConcluido.html("");
            getDocumentacionYTramitesAsignadosXUsuarioID();
        });

        btnCancelar.click(function () {

            if (temp !== undefined && temp !== null && temp !== '' && temp !== '0' && temp > 0) {
                $.ajax({
                    url: master_url + 'onCancelar',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnRefrescar.trigger('click');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'TRAMITE CANCELADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR EN EL REGISTRO', 'danger');
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnCancelarAsignacion.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && temp !== '0' && temp > 0) {
                $.ajax({
                    url: master_url + 'onCancelarAsignacion',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnVerAsignados.trigger('click');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ASIGNACIÓN CANCELADA', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR EN EL REGISTRO', 'danger');
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnVerAsignados.click(function () {
            btnEditar.addClass("hide");
            btnAsignar.addClass("hide");
            btnCancelar.addClass("hide");
            btnCancelarAsignacion.removeClass("hide");
            getDocumentacionYTramitesAsignados();
        });

        btnGuardarAsignacion.click(function () {
            var frm = new FormData(mdlAsignar.find("form")[0]);
            $.ajax({
                url: master_url + 'onAsignar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTACIÓN ASIGNADA', 'success');
                mdlAsignar.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnAsignar.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && temp !== '0' && temp > 0) {
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    var dtm = data[0];
                    console.log(' * * * REGISTRO * * *');
                    console.log(dtm);
                    console.log(' * * * REGISTRO * * *');

//                    if (dtm.EstatusDocumentacion !== "ASIGNADO") {
                    mdlAsignar.find("#ID").val(temp);
                    mdlAsignar.find("#ObservacionesAsignacion").val("");
                    mdlAsignar.find("#VistaPrevia").html("<h1>ADJUNTE UN ARCHIVO</h1>");
                    mdlAsignar.modal('show');
//                    } else {
//                        btnRefrescar.trigger('click');
//                        onNotify('<span class="fa fa-check fa-lg"></span>', 'YA HA SIDO ASIGNADO ESTE TRÁMITE', 'danger');
//                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });

            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnModificar.click(function () {
            var frm = new FormData(mdlEditar.find("form")[0]);
            $.ajax({
                url: master_url + 'onUpdateDocumentacionYTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTACIÓN ACTUALIZADA', 'success');
                mdlEditar.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEditar.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && temp !== '0') {
                var VistaPreviaDocumentacion = mdlEditar.find("#VistaPrevia");
                var VistaPreviaDocumentacionX = mdlEditar.find("#VistaPreviaX");
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    $.each(dtm, function (k, v) {
                        mdlEditar.find("#" + k).val(v);
                        mdlEditar.find("#" + k).select2("val", v);
                    });
                    if (dtm.URL !== null && dtm.URL !== undefined && dtm.URL !== '') {
                        var ext = getExt(dtm.URL);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            VistaPreviaDocumentacion.html("<hr><img id='trtImagen' src='" + dtm.URL + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            VistaPreviaDocumentacion.html('<hr> <embed src="' + dtm.URL + '" type="application/pdf" width="100%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        VistaPreviaDocumentacion.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                    if (dtm.URLASIGNADA !== null && dtm.URLASIGNADA !== undefined && dtm.URLASIGNADA !== '') {
                        var ext = getExt(dtm.URLASIGNADA);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            VistaPreviaDocumentacionX.html("<hr><img id='trtImagen' src='" + dtm.URLASIGNADA + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            VistaPreviaDocumentacionX.html('<hr> <embed src="' + dtm.URLASIGNADA + '" type="application/pdf" width="100%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        VistaPreviaDocumentacionX.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }

                    mdlEditar.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnGuardar.click(function () {
            var frm = new FormData(mdlNuevo.find("form")[0]);
            $.ajax({
                url: master_url + 'onAddDocumentacionYTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
//                $.each(mdlNuevo.find("#Tipo").find("option"),function(k,v){
//                   console.log($(v).val()); 
//                });
                console.log(data, x, jq);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DOCUMENTACIÓN AGREGADA', 'success');
                mdlNuevo.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnUpload.click(function () {
        });

        btnRefrescar.click(function () {
            getRecords();
            btnCancelar.removeClass("hide");
            btnEditar.removeClass("hide");
            btnAsignar.removeClass("hide");
            btnCancelarAsignacion.addClass("hide");
        });
        btnNuevo.click(function () {
            mdlNuevo.find("#Asunto").val("");
            mdlNuevo.find("#VistaPrevia").html("<h1>SELECCIONAR ARCHIVO</h1>");
            mdlNuevo.modal('show');
        });
//        getRecords();
        getAreas();
        getPuestos();
        getEmpleados();
        getProveedores();
        getTipos();
        getCategorias();

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
            tblTitulo.html("<h1>DOCUMENTACIÓN Y TRAMITES</h1>");
            console.log(data);
            $("#tblResult").html(getTable('tblTramites', data));
            $('#tblTramites tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblTramites').DataTable(tableOptions);
            $('#tblTramites tbody').on('click', 'tr', function () {
                $("#tblTramites").find("tr").removeClass("success");
                $("#tblTramites").find("tr").removeClass("warning");
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
            $('#tblTramites tbody').on('dblclick', 'tr', function () {
                $("#tblTramites").find("tr").removeClass("warning");
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

    function onAgregarFoto(e) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        var parent = $(e).parent('div');
        var btnArchivo = parent.find('#Archivo');
        var VistaPreviaXFotoX = $(".modal").find("#VistaPrevia");

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
        });
        btnArchivo.trigger('click');
    }

    function getAreas() {
        $.ajax({
            url: master_url + 'getAreas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $('.modal #AreaInterno').append('<option value="' + v.ID + '">' + v.AREA + '</option>');
                $('.modal #AreaRecibe').append('<option value="' + v.ID + '">' + v.AREA + '</option>');
                $('.modal #AreaDestinatario').append('<option value="' + v.ID + '">' + v.AREA + '</option>');
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getPuestos() {
        $.ajax({
            url: master_url + 'getPuestos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $('.modal #PuestoInterno').append('<option value="' + v.ID + '">' + v.PUESTO + '</option>');
                $('.modal #PuestoDestinatario').append('<option value="' + v.ID + '">' + v.PUESTO + '</option>');
                $('.modal #PuestoRecibe').append('<option value="' + v.ID + '">' + v.PUESTO + '</option>');
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getEmpleados() {
        $.ajax({
            url: master_url + 'getEmpleados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $('.modal #NombreDestinatario').append('<option value="' + v.ID + '">' + v.EMPLEADO + '</option>');
                $('.modal #NombreInterno').append('<option value="' + v.ID + '">' + v.EMPLEADO + '</option>');
                $('.modal #NombreRecibe').append('<option value="' + v.ID + '">' + v.EMPLEADO + '</option>');
                $('.modal #AsignadoA').append('<option value="' + v.ID + '">' + v.EMPLEADO + '</option>');
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProveedores() {
        $.ajax({
            url: master_url + 'getProveedores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
//                console.log(v);
                $('.modal #Cliente').append('<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>');
            });
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
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
//                console.log(v);
                $('.modal #Tipo').append('<option value="' + v.ID + '">' + v.TIPO + '</option>');
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCategorias() {
        $.ajax({
            url: master_url + 'getCategorias',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
//                console.log(v);
                $('.modal #Categoria').append('<option value="' + v.ID + '">' + v.CATEGORIA + '</option>');
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumentacionYTramitesAsignados() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getDocumentacionYTramitesAsignados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            tblTitulo.html("<h1>TODOS LOS TRAMITES ASIGNADOS</h1>");
            console.log('TRAMITES ASIGNADOS');
            console.log(data, x, jq);
            console.log(data);
            $("#tblResult").html(getTable('tblTramites', data));
            $('#tblTramites tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblTramites').DataTable(tableOptions);
            $('#tblTramites tbody').on('click', 'tr', function () {
                $("#tblTramites").find("tr").removeClass("success");
                $("#tblTramites").find("tr").removeClass("warning");
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
            $('#tblTramites tbody').on('dblclick', 'tr', function () {
                $("#tblTramites").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);

                var VistaPreviaDocumentacionX = mdlVerAsignacion.find("#VistaPreviaX");

                $.ajax({
                    url: master_url + 'getDocumentacionYTramitesAsignadoXID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    $.each(dtm, function (k, v) {
                        mdlVerAsignacion.find("#" + k).val(v);
                        mdlVerAsignacion.find("#" + k).select2("val", v);
                    });
                    if (dtm.URL !== null && dtm.URL !== undefined && dtm.URL !== '') {
                        var ext = getExt(dtm.URL);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            VistaPreviaDocumentacionX.html("<hr><img id='trtImagen' src='" + dtm.URL + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            VistaPreviaDocumentacionX.html('<hr> <embed src="' + dtm.URL + '" type="application/pdf" width="100%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        VistaPreviaDocumentacionX.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }

                    mdlVerAsignacion.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function    getDocumentacionYTramitesAsignadosXUsuarioID() {
        var USUARIO_ID = <?php print $_SESSION["USUARIO_ID"]; ?>;

        console.log("* * * * * USUARIO ID * * * * * ");
        console.log(USUARIO_ID);
        console.log("* * * * * * * * * * * * * * * * ");

        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getDocumentacionYTramitesAsignadosXUsuarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: USUARIO_ID
            }
        }).done(function (data, x, jq) {
            tblTitulo.html("<h1>MIS TRAMITES ASIGNADOS</h1>");
            console.log('TRAMITES ASIGNADOS');
            console.log(data, x, jq);
            console.log(data);
            $("#tblResult").html(getTable('tblTramites', data));
            $('#tblTramites tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblTramites').DataTable(tableOptions);
            $('#tblTramites tbody').on('click', 'tr', function () {
                $("#tblTramites").find("tr").removeClass("success");
                $("#tblTramites").find("tr").removeClass("warning");
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
            $('#tblTramites tbody').on('dblclick', 'tr', function () {
                $("#tblTramites").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);

                var VistaPreviaDocumentacionX = mdlVerAsignacion.find("#VistaPreviaX");

                $.ajax({
                    url: master_url + 'getDocumentacionYTramitesAsignadoXID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    mdlVerAsignacion.find("select").select2("val", "");
                    $.each(dtm, function (k, v) {
                        mdlVerAsignacion.find("#" + k).val(v);
                        mdlVerAsignacion.find("#" + k).select2("val", v);
                    });
                    if (dtm.URL !== null && dtm.URL !== undefined && dtm.URL !== '') {
                        var ext = getExt(dtm.URL);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            VistaPreviaDocumentacionX.html("<hr><img id='trtImagen' src='" + dtm.URL + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            VistaPreviaDocumentacionX.html('<hr> <embed src="' + dtm.URL + '" type="application/pdf" width="100%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        VistaPreviaDocumentacionX.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                    mdlVerAsignacion.find("#Observaciones").val("");
                    mdlVerAsignacion.find("#VistaPrevia").html("");
                    getHistorialXTramiteID(temp);
                    mdlVerAsignacion.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }



    function getHistorialXTramiteID(IDX) {
        console.log('ID : ' + IDX);
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getHistorialXTramiteID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $("#HistorialXTramite").html(getTable('tblHistorialXTramite', data));
            $('#tblHistorialXTramite tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblHistorialXTramite').DataTable(tableOptions);
            $('#tblHistorialXTramite tbody').on('click', 'tr', function () {
                $("#tblHistorialXTramite").find("tr").removeClass("success");
                $("#tblHistorialXTramite").find("tr").removeClass("warning");
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
//                temp = parseInt(dtm[0]);
            });

            //DB CLICK FOR EDIT
            $('#tblHistorialXTramite tbody').on('dblclick', 'tr', function () {
                $("#tblHistorialXTramite").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                getArchivoHistorialXTramiteID();
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
        getHistorialXTramiteConcluidoID(IDX);
    }


    function getHistorialXTramiteConcluidoID(IDX) {
        console.log('ID : ' + IDX);
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getHistorialXTramiteConcluidoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $("#HistorialXTramiteConcluido").html(getTable('tblHistorialXTramiteConcluido', data));
            $('#tblHistorialXTramiteConcluido tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblHistorialXTramiteConcluido').DataTable(tableOptions);
            $('#tblHistorialXTramiteConcluido tbody').on('click', 'tr', function () {
                $("#tblHistorialXTramiteConcluido").find("tr").removeClass("success");
                $("#tblHistorialXTramiteConcluido").find("tr").removeClass("warning");
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
            $('#tblHistorialXTramiteConcluido tbody').on('dblclick', 'tr', function () {
                $("#tblHistorialXTramiteConcluido").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                getArchivoHistorialXTramiteConcluidoID();
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

    function getArchivoHistorialXTramiteID() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getArchivoHistorialXTramiteID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: temp
            }
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var dtm = data[0];
            if (dtm.URL !== null && dtm.URL !== undefined && dtm.URL !== '') {
                var ext = getExt(dtm.URL);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    VistaPreviaHistorialXTramite.html("<hr><img id='trtImagen' src='" + dtm.URL + "' class ='img-responsive'/><button type=\"button\"  class=\"btn btn3d btn-default fa-lg\" id=\"btnBorrarVistaPreviaHistorialXTramiteConcluido\" name=\"VistaPreviaHistorialXTramiteConcluido\" onclick=\"onEliminarVistaPreviaHistorialXTramite()\"><span class=\"fa fa-trash fa-3x\"></span></button>\n\
                <button type=\"button\"  class=\"btn btn3d btn-default fa-lg\" id=\"btnEliminarArchivoXTramite\" name=\"btnEliminarArchivoXTramite\" onclick=\"onEliminarArchivoHistorialXTramite(" + dtm.ID + ")\"><span class=\"fa fa-ban fa-3x danger-icon\"></span></button>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    VistaPreviaHistorialXTramite.html('<hr> <embed src="' + dtm.URL + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"><button type="button" class="btn btn3d btn-default fa-lg" id="btnBorrarVistaPreviaHistorialXTramiteConcluido" name="VistaPreviaHistorialXTramiteConcluido" onclick="onEliminarVistaPreviaHistorialXTramite()"><span class="fa fa-trash fa-3x"></span></button>\n\
                                 <button type=\"button\"  class=\"btn btn3d btn-default fa-lg\" id=\"btnEliminarArchivoXTramite\" name=\"btnEliminarArchivoXTramite\" onclick=\"onEliminarArchivoHistorialXTramite(' + dtm.ID + ')\"><span class=\"fa fa-ban fa-3x danger-icon\"></span></button>');
                }
            } else {
                VistaPreviaHistorialXTramite.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getArchivoHistorialXTramiteConcluidoID() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getArchivoHistorialXTramiteConcluidoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: temp
            }
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var dtm = data[0];
            if (dtm.URL !== null && dtm.URL !== undefined && dtm.URL !== '') {
                var ext = getExt(dtm.URL);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    VistaPreviaHistorialXTramiteConcluido.html("<hr><img id='trtImagen' src='" + dtm.URL + "' class ='img-responsive'/><button type=\"button\"  class=\"btn btn3d btn-default fa-lg\" id=\"btnBorrarVistaPreviaHistorialXTramiteConcluido\" name=\"VistaPreviaHistorialXTramiteConcluido\" onclick=\"onEliminarVistaPreviaHistorialXTramiteConcluido()\"><span class=\"fa fa-trash fa-3x\"></span></button>\n\
                 <button type=\"button\"  class=\"btn btn3d btn-default fa-lg\" id=\"btnEliminarArchivoXTramiteConcluido\" name=\"btnEliminarArchivoXTramiteConcluido\" onclick=\"onEliminarArchivoHistorialXTramiteConcluido(" + dtm.ID + ")\"><span class=\"fa fa-ban fa-3x danger-icon\"></span></button>");
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    VistaPreviaHistorialXTramiteConcluido.html('<hr> <embed src="' + dtm.URL + '" type="application/pdf" width="100%" height="800px"' +
                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"><button  type="button" class="btn btn3d btn-default fa-lg" id="btnBorrarVistaPreviaHistorialXTramiteConcluido" name="VistaPreviaHistorialXTramiteConcluido" onclick="onEliminarVistaPreviaHistorialXTramiteConcluido()"><span class="fa fa-trash fa-3x"></span></button>\n\
                                <button type=\"button\"  class=\"btn btn3d btn-default fa-lg\" id=\"btnEliminarArchivoXTramiteConcluido\" name=\"btnEliminarArchivoXTramiteConcluido\" onclick=\"onEliminarArchivoHistorialXTramiteConcluido(' + dtm.ID + ')\"><span class=\"fa fa-ban fa-3x danger-icon\"></span></button>');
                }
            } else {
                VistaPreviaHistorialXTramiteConcluido.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarVistaPreviaHistorialXTramite() {
        VistaPreviaHistorialXTramite.html("");
    }
    function onEliminarVistaPreviaHistorialXTramiteConcluido() {
        VistaPreviaHistorialXTramiteConcluido.html("");
    }



    function onEliminarArchivoHistorialXTramite(IDX) {
        console.log("Eliminando tramite..." + IDX);
    }

    function onEliminarArchivoHistorialXTramiteConcluido(IDX) {
        console.log("Eliminando tramite concluido..." + IDX);
    }

</script>