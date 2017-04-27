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


<div class="modal animated zoomInUp" id="mdlVerSolicitud" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center"><span class="fa fa-calendar-check-o fa-lg"></span> SOLICITUD </h2>
            </div>
            <form id="frmSolicitud">
                <div class="modal-body">
                    
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>