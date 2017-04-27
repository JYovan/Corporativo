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
                    <div class="text-center cursor-hand" onclick="onHideFunctions()"><h1 class="text-white">MÓDULO DE GESTIONES REALIZADAS ANTE EL IMSS<span class="fa fa-chevron-up" ></span></h1></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <label for="chkTooltip"><input type="checkbox" class="" id="chkTooltip" name="chkTooltip" data-toggle="tooltip" data-placement="left" data-original-title="MOSTRAR LEYENDAS"></label>
                </div>
            </div>
            <div class="panel-body" align="center">
                <fieldset>
                    <div class="col-md-12" id="btnAccions">   
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="ORDEN DE TRAMITE (IMSS Ó NÓMINA)">
                                <span class="fa fa-copy fa-2x info-icon"></span>
                            </button>
                        </span>
                        <button id="btnRefresh" class="btn btn-warning btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-2x warning-icon"></span>
                        </button>
                        <button id="btnCancelarTramiteIMMSNOMINA" class="btn btn-warning btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR ORDEN DE TRAMITE (IMSS Ó NÓMINA)">
                            <span class="fa fa-times fa-2x danger-icon"></span>
                        </button>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlPatronIMMS" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title="" data-original-title="PATRÓN ANTE EL IMSS" type="button" >
                                <span class="fa fa-group fa-2x success-icon"></span>
                            </button>
                        </span>
                        <button id="btnProcesos" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO TRAMITE">
                            <span class="fa fa-gears fa-2x danger-icon"></span>
                        </button> 
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNumeroPatronalNPIE" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL ">
                                <span class="fa fa-file-text-o fa-2x danger-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlConstanciaIMMS" > 
                            <button class="btn btn-danger btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="CONSTANCIA DE MOVIMIENTOS AFILIATORIOS AL IMSS">
                                <span class="fa fa-list-ol fa-2x lime-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlConstanciaAutorizacionesIMMS" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="CONSTANCIA DE AUTORIZACIONES Y SUSPENSIONES ANTE EL IMSS">
                                <span class="fa fa-list-ol fa-2x purple-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlPatronalesIMMSReingresos" > 
                            <button class="btn btn-warning btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="MOVIMIENTOS PATRONALES ANTE EL IMSS DE ALTAS O REINGRESOS">
                                <span class="fa fa-th-list fa-2x bluegrey-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlMovPatronalesSalarios" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="PRESENTAR MOVIMIENTOS PATRONALES ANTE EL IMSS DE MODIFICACIÓN DE SALARIOS">
                                <span class="fa fa-table fa-2x brown-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlMovPatronalesBajasTrabajadores" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="MOVIMIENTOS PATRONALES ANTE EL IMSS DE BAJAS DE LOS TRABAJADORES">
                                <span class="fa fa-retweet fa-2x info-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlDeclaracionAnualRiesgosTrabajo" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">
                                <span class="fa fa-exclamation-triangle fa-2x warning-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlAvisoRegistroPatronal" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="AVISO DE MODIFICACIÓN AL REGISTRO PATRONAL">
                                <span class="fa fa-pencil fa-2x success-icon"></span>
                            </button>
                        </span>


                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlDeclaracionSueldosYSalarios" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="DECLARACIÓN DE SUELDOS Y SALARIOS DE TRABAJADORES (ARCHIVO DIM)  ">
                                <span class="fa fa-flag-checkered fa-2x danger-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlAvisoMovAfiliatoriosTrabajadores" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="AVISO DE MOVIMIENTOS AFILIATORIOS DE TRABAJADORES ">
                                <span class="fa fa-comments fa-2x lime-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlTramiteSATIC" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="PRESENTAR TRÁMITE DE SATIC">
                                <span class="fa fa-clone fa-2x purple-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlRenovarCancelarNPIEYCertificadoDigital" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="RENOVAR O CANCELAR N.P.I.E. Y CERTIFICADO DIGITAL">
                                <span class="fa fa-bomb fa-2x bluegrey-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlGeneracionMensuaSUAREVEINFONAVIT" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="GENERACIÓN MENSUAL SUA (IMSS, REV E INFONAVIT)">
                                <span class="fa fa-calendar fa-2x brown-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlAclaracionesYCancelacionesAnteElIMMS" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="ACLARACIONES Y CANCELACIONES ANTE EL IMSS">
                                <span class="fa fa-ban fa-2x info-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlElaboracionFiniquitos" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="ELABORACIÓN DE FINIQUITOS">
                                <span class="fa fa fa-asterisk fa-2x warning-icon"></span>
                            </button>
                        </span>


                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlPrevensionSocialEnProceso" > 
                            <button class="btn btn-default btn-lg fa-lg hide" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="TRÁMITES DE PREVISIÓN SOCIAL EN PROCESO">
                                <span class="fa fa-gg fa-2x success-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlTramitePrevisionSocialConcluidos" > 
                            <button class="btn btn-default btn-lg fa-lg hide" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="TRÁMITES PREVISIÓN SOCIAL CONCLUIDOS">
                                <span class="fa fa-check-square-o fa-2x danger-icon"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlIMMS" > 
                            <button class="btn btn-default btn-lg fa-lg hide" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="IMSS">
                                <span class="fa fa-magic fa-2x lime-icon"></span>
                            </button>
                        </span>
                        <button id="btnHistorial" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="VER HISTORIAL DE TRAMITES">
                            <span class="fa fa-eye fa-2x bluegrey-icon"></span>
                        </button>
                        <button id="btnAvance" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="AVANZAR TRAMITE">
                            <span class="fa fa-forward fa-2x brown-icon"></span>
                        </button>
                        <button id="btnCancelarTramite" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR TRAMITE">
                            <span class="fa fa-times fa-2x danger-icon"></span>
                        </button>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlAsesoriasTramiteIMSS" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="ASESORÍAS EN TRÁMITES IMSS">
                                <span class="fa fa-assistive-listening-systems fa-2x lime-icon"></span>
                            </button>
                        </span>

                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlGenerarNominaTrabajadores" > 
                            <button class="btn btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="GENERAR NÓMINA DE TRABAJADORES">
                                <span class="fa fa-diamond fa-2x purple-icon"></span>
                            </button>
                        </span>
                        <button id="btnNominas" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="VER HISTORIAL DE NOMINAS">
                            <span class="fa fa-eye fa-2x bluegrey-icon"></span>
                        </button> 
                        <button id="btnEditarNomina" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="VER NÓMINA DE TRABAJADORES">
                            <span class="fa fa-pencil fa-2x brown-icon"></span>
                        </button> 
                        <button id="btnCancelarNomina" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR NÓMINA DE TRABAJADORES">
                            <span class="fa fa-ban fa-2x danger-icon"></span>
                        </button> 

                        <button id="btnConcluirNomina" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CONCLUIR NOMINA">
                            <span class="fa fa-check fa-2x lime-icon"></span>
                        </button>

                        <hr>
                    </div>
                </fieldset>
                <div class="col-md-12" id="msgSeguridadSocial"></div> 
                <div class="col-md-12" id="rSeguridadSocial"></div> 
            </div>
        </div>
    </div>
</div>

<div class="modal  animated zoomInUp" id="mdlIMMS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NUEVO TRAMITE</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">Tramite</label>
                            <select id="Tramite" name="Tramite" class="form-control">
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>  

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select> 
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NUEVO EXPEDIENTE</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Cliente" name="Cliente" class="form-control">

                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">MES</label>
                            <input type="text" id="Mes" name="Mes" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="mm">
                        </div>

                        <div class="col-md-4">
                            <label for="">Tramite</label>
                            <select id="Tramite" name="Tramite" class="form-control">
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">FECHA DE LA SOLICITUD</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-8">
                            <label for="">TIPO DE EVIDENCIA</label>
                            <input type="text" id="Asesoria" name="Asesoria" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlPatronIMMS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NUEVO TRAMITE COMO PATRÓN ANTE EL IMSS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="TRAMITE COMO PATRÓN ANTE EL IMSS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL CLIENTE</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DEL CLIENTE</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlNumeroPatronalNPIE" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL">
                        </div>

                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlConstanciaIMMS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>CONSTANCIA DE MOVIMIENTOS AFILIATORIOS AL IMSS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="CONSTANCIA DE MOVIMIENTOS AFILIATORIOS AL IMSS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlConstanciaAutorizacionesIMMS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> CONSTANCIA DE AUTORIZACIONES Y SUSPENSIONES ANTE EL IMSS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="CONSTANCIA DE AUTORIZACIONES Y SUSPENSIONES ANTE EL IMSS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlPatronalesIMMSReingresos" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> PRESENTAR MOVIMIENTOS PATRONALES ANTE EL IMSS DE ALTAS O REINGRESOS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="PRESENTAR MOVIMIENTOS PATRONALES ANTE EL IMSS DE ALTAS O REINGRESOS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlMovPatronalesSalarios" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> MOVIMIENTOS PATRONALES ANTE EL IMSS DE MODIFICACIÓN DE SALARIOS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="MOVIMIENTOS PATRONALES ANTE EL IMSS DE MODIFICACIÓN DE SALARIOS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlMovPatronalesBajasTrabajadores" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> MOVIMIENTOS PATRONALES ANTE EL IMSS DE BAJAS DE LOS TRABAJADORES </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="MOVIMIENTOS PATRONALES ANTE EL IMSS DE BAJAS DE LOS TRABAJADORES">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlDeclaracionAnualRiesgosTrabajo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlAltaPatronalRenaudacionActividades" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> ALTA PATRONAL E INSCRIPCIÓN EN EL SEGURO DE RIESGOS DE TRABAJO O REANUDACIÓN DE ACTIVIDADES </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="ALTA PATRONAL E INSCRIPCIÓN EN EL SEGURO DE RIESGOS DE TRABAJO O REANUDACIÓN DE ACTIVIDADES">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlAvisoRegistroPatronal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> AVISO DE MODIFICACIÓN AL REGISTRO PATRONAL </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlDeclaracionSueldosYSalarios" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> DECLARACIÓN DE SUELDOS Y SALARIOS DE TRABAJADORES (ARCHIVO DIM) </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlDeclaracionSueldosYSalarios" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> DECLARACIÓN DE SUELDOS Y SALARIOS DE TRABAJADORES (ARCHIVO DIM) </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlAvisoMovAfiliatoriosTrabajadores" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>AVISO DE MOVIMIENTOS AFILIATORIOS DE TRABAJADORES  </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlTramiteSATIC" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>PRESENTAR TRÁMITE DE SATIC</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="PRESENTAR TRÁMITE DE SATIC">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlRenovarCancelarNPIEYCertificadoDigital" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>RENOVAR O CANCELAR NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="RENOVAR O CANCELAR NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL ">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlGeneracionMensuaSUAREVEINFONAVIT" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>GENERACIÓN MENSUAL SUA (IMSS, REV E INFONAVIT) </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="GENERACIÓN MENSUAL SUA (IMSS, REV E INFONAVIT) ">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlAclaracionesYCancelacionesAnteElIMMS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>ACLARACIONES Y CANCELACIONES ANTE EL IMSS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="ACLARACIONES Y CANCELACIONES ANTE EL IMSS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div class="modal  animated zoomInUp" id="mdlElaboracionFiniquitos" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>ELABORACIÓN DE FINIQUITOS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="ELABORACIÓN DE FINIQUITOS">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlAsesoriasTramiteIMSS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>ASESORÍAS EN TRÁMITES IMSS</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="ASESORÍAS EN TRÁMITES IMSS">
                        </div>

                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="">ASESORIA</label>
                            <input type="text" class="form-control" id="Asesoria" name="Asesoria" placeholder="ASESORÍA X">
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlGenerarNominaTrabajadores" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>GENERAR NÓMINA DE TRABAJADORES DE CLIENTES</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="GENERAR NÓMINA DE TRABAJADORES DE CLIENTES">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">TIPO DE NÓMINA</label>
                            <select type="text" id="TipoNomina" name="TipoNomina" class="form-control">
                                <option></option>
                                <option value="0"></option>
                                <option value="1">SEMANAL</option>
                                <option value="2">QUINCENAL</option>
                                <option value="3">MENSUAL</option> 
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">NÚMERO DE TRABAJADORES</label>
                            <input type="number" id="Trabajadores" name="Trabajadores" class="form-control" placeholder="1" min="1" max="9999999">
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlGenerarNominaTrabajadoresU" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>NÓMINA DE TRABAJADORES DE CLIENTES</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="NÓMINA DE TRABAJADORES DE CLIENTES">
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">
                            </select>
                        </div> 
                        <div class="col-md-6">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO DE NÓMINA</label>
                            <select type="text" id="TipoNomina" name="TipoNomina" class="form-control">
                                <option></option>
                                <option value="0"></option>
                                <option value="1">SEMANAL</option>
                                <option value="2">QUINCENAL</option>
                                <option value="3">MENSUAL</option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE TRABAJADORES</label>
                            <input type="number" id="Trabajadores" name="Trabajadores" class="form-control" placeholder="1" min="1" max="9999999">
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlAvance" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span>AVANZAR TRAMITE</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" class="form-control" id="ID" name="ID">
                        </div>
                        <div class="col-md-12" id="rTramite">

                        </div>
                        <div class="col-md-12 hide">
                            <input type="text" id="EstatusT" name="EstatusT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12 hide">
                            <label for="">TIPO</label>
                            <input type="text" class="form-control" id="Tipo" name="Tipo" value="GENERAR NÓMINA DE TRABAJADORES DE CLIENTES">
                        </div>
                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control hide">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div> 
                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal  animated zoomInUp" id="mdlProcesos" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NUEVO TRAMITE </h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">TIPO</label>
                            <select class="form-control" id="Tipo" name="Tipo">
                                <option></option>
                                <option value="NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL">NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL</option>
                                <option value="CONSTANCIA DE MOVIMIENTOS AFILIATORIOS AL IMSS">CONSTANCIA DE MOVIMIENTOS AFILIATORIOS AL IMSS</option>
                                <option value="CONSTANCIA DE AUTORIZACIONES Y SUSPENSIONES ANTE EL IMSS">CONSTANCIA DE AUTORIZACIONES Y SUSPENSIONES ANTE EL IMSS</option>
                                <option value="PRESENTAR MOVIMIENTOS PATRONALES ANTE EL IMSS DE ALTAS O REINGRESOS">PRESENTAR MOVIMIENTOS PATRONALES ANTE EL IMSS DE ALTAS O REINGRESOS</option>
                                <option value="MOVIMIENTOS PATRONALES ANTE EL IMSS DE MODIFICACIÓN DE SALARIOS">MOVIMIENTOS PATRONALES ANTE EL IMSS DE MODIFICACIÓN DE SALARIOS</option>
                                <option value="MOVIMIENTOS PATRONALES ANTE EL IMSS DE BAJAS DE LOS TRABAJADORES">MOVIMIENTOS PATRONALES ANTE EL IMSS DE BAJAS DE LOS TRABAJADORES</option>
                                <option value="DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO">DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO</option>
                                <option value="AVISO DE MODIFICACIÓN AL REGISTRO PATRONAL">AVISO DE MODIFICACIÓN AL REGISTRO PATRONAL</option>
                                <option value="DECLARACIÓN DE SUELDOS Y SALARIOS DE TRABAJADORES (ARCHIVO DIM)">DECLARACIÓN DE SUELDOS Y SALARIOS DE TRABAJADORES (ARCHIVO DIM)</option>
                                <option value="AVISO DE MOVIMIENTOS AFILIATORIOS DE TRABAJADORES">AVISO DE MOVIMIENTOS AFILIATORIOS DE TRABAJADORES</option>
                                <option value="PRESENTAR TRÁMITE DE SATIC">PRESENTAR TRÁMITE DE SATIC</option>
                                <option value="RENOVAR O CANCELAR NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL">RENOVAR O CANCELAR NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL</option>
                                <option value="GENERACIÓN MENSUAL SUA (IMSS, REV E INFONAVIT)">GENERACIÓN MENSUAL SUA (IMSS, REV E INFONAVIT)</option>
                                <option value="ACLARACIONES Y CANCELACIONES ANTE EL IMSS">ACLARACIONES Y CANCELACIONES ANTE EL IMSS</option>
                                <option value="ELABORACIÓN DE FINIQUITOS">ELABORACIÓN DE FINIQUITOS</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-4">
                            <label for="">ESTATUS</label>
                            <select type="text" id="Estatus" name="Estatus" class="form-control">
                                <option></option>
                                <option value="1">EN PROCESO</option>
                                <option value="2">CONCLUIDO</option>
                                <option value="3">NOTIFICADO AL ÁREA CONTABLE</option>
                                <option value="4">NOTIFICADO AL TITULAR DE LA EMPRESA</option>
                                <option value="5">INTEGRADO AL EXPEDIENTE DE LA EMPRESA </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-2x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<script>
    var master_url = base_url + 'index.php/ctrlSeguridadSocial/';

    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var mdlPatronIMMS = $("#mdlPatronIMMS");
    var btnGuardarPatronIMMS = mdlPatronIMMS.find("#btnGuardar");

    var mdlNumeroPatronalNPIE = $("#mdlNumeroPatronalNPIE");
    var btnGuardarNumeroPatronalNPIE = mdlNumeroPatronalNPIE.find("#btnGuardar");

    var mdlConstanciaIMMS = $("#mdlConstanciaIMMS");
    var btnGuardarConstanciaIMMS = mdlConstanciaIMMS.find("#btnGuardar");

    var mdlConstanciaAutorizacionesIMMS = $("#mdlConstanciaAutorizacionesIMMS");
    var btnGuardarConstanciaAutorizacionesIMMS = mdlConstanciaAutorizacionesIMMS.find("#btnGuardar");

    var mdlPatronalesIMMSReingresos = $("#mdlPatronalesIMMSReingresos");
    var btnGuardarPatronalesIMMSReingresos = mdlPatronalesIMMSReingresos.find("#btnGuardar");

    var mdlMovPatronalesSalarios = $("#mdlMovPatronalesSalarios");
    var btnGuardarMovPatronalesSalarios = mdlMovPatronalesSalarios.find("#btnGuardar");

    var mdlMovPatronalesBajasTrabajadores = $("#mdlMovPatronalesBajasTrabajadores");
    var btnGuardarMovPatronalesBajasTrabajadores = mdlMovPatronalesBajasTrabajadores.find("#btnGuardar");

    var mdlDeclaracionAnualRiesgosTrabajo = $("#mdlDeclaracionAnualRiesgosTrabajo");
    var btnGuardarDeclaracionAnualRiesgosTrabajo = mdlDeclaracionAnualRiesgosTrabajo.find("#btnGuardar");

    var mdlAltaPatronalRenaudacionActividades = $("#mdlAltaPatronalRenaudacionActividades");
    var btnGuardarAltaPatronalRenaudacionActividades = mdlAltaPatronalRenaudacionActividades.find("#btnGuardar");

    var mdlAvisoRegistroPatronal = $("#mdlAvisoRegistroPatronal");
    var btnGuardarAvisoRegistroPatronal = mdlAvisoRegistroPatronal.find("#btnGuardar");

    var mdlDeclaracionSueldosYSalarios = $("#mdlDeclaracionSueldosYSalarios");
    var btnGuardarDeclaracionSueldosYSalarios = mdlDeclaracionSueldosYSalarios.find("#btnGuardar");

    var mdlAvisoMovAfiliatoriosTrabajadores = $("#mdlAvisoMovAfiliatoriosTrabajadores");
    var btnGuardarAvisoMovAfiliatoriosTrabajadores = mdlAvisoMovAfiliatoriosTrabajadores.find("#btnGuardar");

    var mdlTramiteSATIC = $("#mdlTramiteSATIC");
    var btnGuardarTramiteSATIC = mdlTramiteSATIC.find("#btnGuardar");

    var mdlRenovarCancelarNPIEYCertificadoDigital = $("#mdlRenovarCancelarNPIEYCertificadoDigital");
    var btnGuardarRenovarCancelarNPIEYCertificadoDigital = mdlRenovarCancelarNPIEYCertificadoDigital.find("#btnGuardar");

    var mdlGeneracionMensuaSUAREVEINFONAVIT = $("#mdlGeneracionMensuaSUAREVEINFONAVIT");
    var btnGuardarGeneracionMensuaSUAREVEINFONAVIT = mdlGeneracionMensuaSUAREVEINFONAVIT.find("#btnGuardar");

    var mdlAclaracionesYCancelacionesAnteElIMMS = $("#mdlAclaracionesYCancelacionesAnteElIMMS");
    var btnGuardarAclaracionesYCancelacionesAnteElIMMS = mdlAclaracionesYCancelacionesAnteElIMMS.find("#btnGuardar");

    var mdlElaboracionFiniquitos = $("#mdlElaboracionFiniquitos");
    var btnGuardarElaboracionFiniquitos = mdlElaboracionFiniquitos.find("#btnGuardar");

    var mdlAsesoriasTramiteIMSS = $("#mdlAsesoriasTramiteIMSS");
    var btnGuardarAsesoriasTramiteIMSS = mdlAsesoriasTramiteIMSS.find("#btnGuardar");
    var mdlGenerarNominaTrabajadores = $("#mdlGenerarNominaTrabajadores");
    var btnGuardarGenerarNominaTrabajadores = mdlGenerarNominaTrabajadores.find("#btnGuardar");
    var btnHistorial = $("#btnHistorial");
    var btnRefresh = $("#btnRefresh");
    var btnAvance = $("#btnAvance");
    var btnCancelarTramite = $("#btnCancelarTramite");
    var btnNominas = $("#btnNominas");
    var btnConcluirNomina = $("#btnConcluirNomina");
    var btnEditarNomina = $("#btnEditarNomina");
    var btnCancelarNomina = $("#btnCancelarNomina");
    var mdlGenerarNominaTrabajadoresU = $("#mdlGenerarNominaTrabajadoresU");
    var mdlAvance = $("#mdlAvance");
    var btnProcesos = $("#btnProcesos");
    var mdlProcesos = $("#mdlProcesos");

    var btnGuardarProceso = mdlProcesos.find("#btnGuardar");
    var btnCancelarTramiteIMMSNOMINA = $("#btnCancelarTramiteIMMSNOMINA");

    $(document).ready(function () {

        btnCancelarTramite.click(function () {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onCancelarTramite',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    btnHistorial.trigger('click');
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', '*** TRAMITE, CANCELADO ***', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnCancelarTramiteIMMSNOMINA.click(function () {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onCancelarTramiteIMMSNOMINA',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    onGetRecords();
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ORDEN DE TRAMITE DE IMMS O NOMINA, CANCELADA', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
//        $(".btn").tooltip({placement: 'top'}).tooltip('show');

        getEmpresas();
        getTramites();
        onGetRecords();

        /**BTNS SAVE**/

        btnGuardarProceso.click(function () {
            frm = new FormData(mdlProcesos.find('#frmNuevo')[0]);
            frm.append('EmpresaT', mdlProcesos.find("#Empresa option:selected").text());
            frm.append('EstatusT', mdlProcesos.find("#Estatus option:selected").text());
            var Tipo = mdlProcesos.find("#Tipo");
            var Tipo = mdlProcesos.find("#Tipo");
            if (Tipo.val() !== undefined && Tipo.val() !== '') {
                $.ajax({
                    url: master_url + 'onAddHistorico',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data) {
                    mdlProcesos.modal('hide');
                    getHistorial();
                    console.log(data);
                    console.log('SE HA SUBIDO EL ARCHIVO');
                }).fail(function () {
                    console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                    console.log(arguments);
                });
            }
        });

        btnProcesos.click(function () {
            mdlProcesos.modal('show');
        });

        btnCancelarNomina.click(function () {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onCancelarNomina',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    getNominas();
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NOMINA CANCELADA', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });

            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnEditarNomina.click(function () {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getNominasByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    if (dtm !== undefined) {
                        mdlGenerarNominaTrabajadoresU.modal('show');
                        mdlGenerarNominaTrabajadoresU.find("#ID").val(dtm.ID);
                        mdlGenerarNominaTrabajadoresU.find("#Empresa").select2("val", dtm.EMPRESAID).select2('disable');
                        mdlGenerarNominaTrabajadoresU.find("#Fecha").val(dtm.FECHA);
                        mdlGenerarNominaTrabajadoresU.find("#Estatus").select2("val", dtm.ESTATUSID).select2('disable');
                        mdlGenerarNominaTrabajadoresU.find("#TipoNomina").select2("val", dtm["TIPO DE NOMINA"]).select2('disable');
                        mdlGenerarNominaTrabajadoresU.find("#Trabajadores").val(dtm["NUMERO DE TRABAJADORES"]);

                        if (dtm.DOCUMENTO !== null && dtm.DOCUMENTO !== undefined && dtm.DOCUMENTO !== '') {
                            var ext = getExt(dtm.DOCUMENTO);
                            console.log(ext);
                            if (ext === "gif" || ext === "jpg" || ext === "png") {
                                mdlGenerarNominaTrabajadoresU.find("#frtArchivo").html("<hr><img id='trtImagen' src='" + dtm.DOCUMENTO + "' class ='img-responsive'/>");
                            } else if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                mdlGenerarNominaTrabajadoresU.find("#frtArchivo").html('<hr> <embed src="' + dtm.DOCUMENTO + '" type="application/pdf" width="90%" height="800px"' +
                                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            } else {
                                mdlGenerarNominaTrabajadoresU.find("#btnGuardar").removeClass("hide");
                            }
                        } else {
                            mdlGenerarNominaTrabajadoresU.find("#frtArchivo").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                        }
                    } else {
                        HoldOn.close();
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE HA PODIDO ENCONTRAR INFORMACIÓN SOBRE ESTE REGISTRO', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnAvance.click(function () {
            if (temp !== undefined && temp !== null && temp !== "" && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                mdlAvance.find("#ID").val(temp);
                $.ajax({
                    url: master_url + 'getHistorialByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data[0]);
                    var dtm = data[0];
                    console.log("EMPRESA: " + dtm.EMPRESAID);
                    mdlAvance.find("#Empresa").select2("val", parseInt(dtm.EMPRESAID)).select2('disable');
                    mdlAvance.find("#Empresa").val(parseInt(dtm.EMPRESAID));
                    mdlAvance.find("#Fecha").val(dtm.FECHA).attr("readonly", true);
                    mdlAvance.find("#Estatus").val(parseInt(dtm.ESTATUSID));
                    mdlAvance.find("#rTramite").html("<div class=\"col-md-6\"><h3>TRAMITE ACTUAL: </h3><h3 class=\"text-info\">" + dtm.TRAMITE + "</h3></div><div class=\"col-md-6\"><h3>ESTATUS ACTUAL: </h3><p class=\"text-info\">" + dtm.ESTATUS + "</p></div>");
                    mdlAvance.find("#EstatusT").val(dtm.ESTATUS);
                    if (dtm.ESTATUS !== "CONCLUIDO") {
                        mdlAvance.modal('show');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTE TRAMITE YA ESTA CONCLUIDO', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        $(".modal ").on('show.bs.modal', function () {
            $(".modal").find("#frtArchivo").html("");
        });

        mdlAvance.find("#Estatus").change(function (e) {
            onAvance();
        });

        mdlAvance.find("#btnGuardar").click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });

            var sts = mdlAvance.find("#Estatus").find("option:selected").text();
            var stsbefore = mdlAvance.find("#EstatusT").val();
            if (sts === stsbefore) {
                mdlAvance.find("#btnGuardar").addClass("hide");
                mdlAvance.find("#msgNuevo").html('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>ESTE ESTATUS ES EL MISMO QUE EL ANTERIOR, POR FAVOR SELECCIONE UNO DISTINTO</div>');
            } else {
                mdlAvance.find("#btnGuardar").removeClass("hide");
                mdlAvance.find("#msgNuevo").html('');
                frm = new FormData(mdlAvance.find('#frmNuevo')[0]);
                //                frm.append('EmpresaT', mdl.find("#Empresa").find("option:selected").text());
                frm.append('EstatusT', mdlAvance.find("#Estatus").find("option:selected").text());
                $.ajax({
                    url: master_url + 'onAvance',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    mdlAvance.modal('hide');
                    getHistorial();
                    console.log(data);
                    console.log('SE HA SUBIDO EL ARCHIVO');
                }).fail(function (x, y, z) {
                    console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                    console.log(arguments);
                }).always(function () {
                    HoldOn.close();
                });
            }

        });

        btnRefresh.click(function () {
            btnAvance.addClass('hide');
            btnCancelarTramite.addClass('hide');
            btnConcluirNomina.addClass("hide");
            btnCancelarNomina.addClass("hide");
            btnEditarNomina.addClass("hide");
            btnCancelarTramiteIMMSNOMINA.removeClass("hide");
            onGetRecords();
        });

        btnHistorial.click(function () {
            btnAvance.removeClass('hide');
            btnCancelarTramite.removeClass('hide');
            btnConcluirNomina.addClass("hide");
            btnCancelarNomina.addClass("hide");
            btnEditarNomina.addClass("hide");
            btnCancelarTramiteIMMSNOMINA.addClass("hide");
            getHistorial();
        });

        btnGuardar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            dataf = new FormData(mdlNuevo.find('#frmNuevo')[0]);
            dataf.append('Empresa', mdlNuevo.find("#Cliente").val());
            dataf.append('TramiteT', mdlNuevo.find("#Tramite").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: dataf
            }).done(function (data) {
                mdlNuevo.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnGuardarPatronIMMS.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            var mdl = $("#mdlPatronIMMS");
            frm = new FormData(mdl.find('#frmNuevo')[0]);
            frm.append('Tipo', "TRAMITE COMO PATRÓN ANTE EL IMSS");
            frm.append('EmpresaT', mdl.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdl.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdl.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function (x, y, z) {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnGuardarNumeroPatronalNPIE.click(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            var mdl = $("#mdlNumeroPatronalNPIE");
            frm = new FormData(mdl.find('#frmNuevo')[0]);
            frm.append('Tipo', "NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL");
            frm.append('EmpresaT', mdl.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdl.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdl.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnGuardarConstanciaAutorizacionesIMMS.click(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            frm = new FormData(mdlConstanciaAutorizacionesIMMS.find('#frmNuevo')[0]);
            frm.append('Tipo', "CONSTANCIA DE AUTORIZACIONES Y SUSPENSIONES ANTE EL IMSS");
            frm.append('EmpresaT', mdlConstanciaAutorizacionesIMMS.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlConstanciaAutorizacionesIMMS.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlConstanciaAutorizacionesIMMS.modal('hide');
                console.log(data);
                getHistorial();
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnGuardarConstanciaIMMS.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            frm = new FormData(mdlConstanciaIMMS.find('#frmNuevo')[0]);
            frm.append('Tipo', "CONSTANCIA DE MOVIMIENTOS AFILIATORIOS AL IMSS");
            frm.append('EmpresaT', mdlConstanciaIMMS.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlConstanciaIMMS.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlConstanciaIMMS.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnGuardarPatronalesIMMSReingresos.click(function () {
            frm = new FormData(mdlPatronalesIMMSReingresos.find('#frmNuevo')[0]);
            frm.append('Tipo', "PRESENTAR MOVIMIENTOS PATRONALES ANTE EL IMSS DE ALTAS O REINGRESOS");
            frm.append('EmpresaT', mdlPatronalesIMMSReingresos.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlPatronalesIMMSReingresos.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlPatronalesIMMSReingresos.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarMovPatronalesSalarios.click(function () {
            frm = new FormData(mdlMovPatronalesSalarios.find('#frmNuevo')[0]);
            frm.append('Tipo', "MOVIMIENTOS PATRONALES ANTE EL IMSS DE MODIFICACIÓN DE SALARIOS");
            frm.append('EmpresaT', mdlMovPatronalesSalarios.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlMovPatronalesSalarios.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlMovPatronalesSalarios.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarMovPatronalesBajasTrabajadores.click(function () {
            frm = new FormData(mdlMovPatronalesBajasTrabajadores.find('#frmNuevo')[0]);
            frm.append('Tipo', "MOVIMIENTOS PATRONALES ANTE EL IMSS DE BAJAS DE LOS TRABAJADORES");
            frm.append('EmpresaT', mdlMovPatronalesBajasTrabajadores.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlMovPatronalesBajasTrabajadores.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlMovPatronalesBajasTrabajadores.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarDeclaracionAnualRiesgosTrabajo.click(function () {
            frm = new FormData(mdlDeclaracionAnualRiesgosTrabajo.find('#frmNuevo')[0]);
            frm.append('Tipo', "DECLARACIÓN ANUAL DE RIESGOS DE TRABAJO");
            frm.append('EmpresaT', mdlDeclaracionAnualRiesgosTrabajo.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlDeclaracionAnualRiesgosTrabajo.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlDeclaracionAnualRiesgosTrabajo.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarAltaPatronalRenaudacionActividades.click(function () {
            frm = new FormData(mdlAltaPatronalRenaudacionActividades.find('#frmNuevo')[0]);
            frm.append('Tipo', "ALTA PATRONAL E INSCRIPCIÓN EN EL SEGURO DE RIESGOS DE TRABAJO O REANUDACIÓN DE ACTIVIDADES");
            frm.append('EmpresaT', mdlAltaPatronalRenaudacionActividades.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlAltaPatronalRenaudacionActividades.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlAltaPatronalRenaudacionActividades.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarAvisoRegistroPatronal.click(function () {
            frm = new FormData(mdlAvisoRegistroPatronal.find('#frmNuevo')[0]);
            frm.append('Tipo', "AVISO DE MODIFICACIÓN AL REGISTRO PATRONAL");
            frm.append('EmpresaT', mdlAvisoRegistroPatronal.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlAvisoRegistroPatronal.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlAvisoRegistroPatronal.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarDeclaracionSueldosYSalarios.click(function () {
            frm = new FormData(mdlDeclaracionSueldosYSalarios.find('#frmNuevo')[0]);
            frm.append('Tipo', "DECLARACIÓN DE SUELDOS Y SALARIOS DE TRABAJADORES (ARCHIVO DIM)");
            frm.append('EmpresaT', mdlDeclaracionSueldosYSalarios.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlDeclaracionSueldosYSalarios.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlDeclaracionSueldosYSalarios.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarAvisoMovAfiliatoriosTrabajadores.click(function () {
            frm = new FormData(mdlAvisoMovAfiliatoriosTrabajadores.find('#frmNuevo')[0]);
            frm.append('Tipo', "AVISO DE MOVIMIENTOS AFILIATORIOS DE TRABAJADORES ");
            frm.append('EmpresaT', mdlAvisoMovAfiliatoriosTrabajadores.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlAvisoMovAfiliatoriosTrabajadores.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlAvisoMovAfiliatoriosTrabajadores.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarTramiteSATIC.click(function () {
            frm = new FormData(mdlTramiteSATIC.find('#frmNuevo')[0]);
            frm.append('Tipo', "PRESENTAR TRÁMITE DE SATIC");
            frm.append('EmpresaT', mdlTramiteSATIC.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlTramiteSATIC.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlTramiteSATIC.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarRenovarCancelarNPIEYCertificadoDigital.click(function () {
            frm = new FormData(mdlRenovarCancelarNPIEYCertificadoDigital.find('#frmNuevo')[0]);
            frm.append('Tipo', "RENOVAR O CANCELAR NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL");
            frm.append('EmpresaT', mdlRenovarCancelarNPIEYCertificadoDigital.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlRenovarCancelarNPIEYCertificadoDigital.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlRenovarCancelarNPIEYCertificadoDigital.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarGeneracionMensuaSUAREVEINFONAVIT.click(function () {
            frm = new FormData(mdlGeneracionMensuaSUAREVEINFONAVIT.find('#frmNuevo')[0]);
            frm.append('Tipo', "GENERACIÓN MENSUAL SUA (IMSS, REV E INFONAVIT)");
            frm.append('EmpresaT', mdlGeneracionMensuaSUAREVEINFONAVIT.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlGeneracionMensuaSUAREVEINFONAVIT.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlGeneracionMensuaSUAREVEINFONAVIT.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarAclaracionesYCancelacionesAnteElIMMS.click(function () {
            frm = new FormData(mdlAclaracionesYCancelacionesAnteElIMMS.find('#frmNuevo')[0]);
            frm.append('Tipo', "ACLARACIONES Y CANCELACIONES ANTE EL IMSS");
            frm.append('EmpresaT', mdlAclaracionesYCancelacionesAnteElIMMS.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlAclaracionesYCancelacionesAnteElIMMS.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlAclaracionesYCancelacionesAnteElIMMS.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarElaboracionFiniquitos.click(function () {
            frm = new FormData(mdlElaboracionFiniquitos.find('#frmNuevo')[0]);
            frm.append('Tipo', "ELABORACIÓN DE FINIQUITOS");
            frm.append('EmpresaT', mdlElaboracionFiniquitos.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlElaboracionFiniquitos.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistorico',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlElaboracionFiniquitos.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarAsesoriasTramiteIMSS.click(function () {
            frm = new FormData(mdlAsesoriasTramiteIMSS.find('#frmNuevo')[0]);
            frm.append('Tipo', mdlAsesoriasTramiteIMSS.find("#Asesoria").val());
            frm.append('EmpresaT', mdlAsesoriasTramiteIMSS.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlAsesoriasTramiteIMSS.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistoricoAsesoria',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlAsesoriasTramiteIMSS.modal('hide');
                getHistorial();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnGuardarGenerarNominaTrabajadores.click(function () {
            frm = new FormData(mdlGenerarNominaTrabajadores.find('#frmNuevo')[0]);
            frm.append('TipoNomina', mdlGenerarNominaTrabajadores.find("#TipoNomina").val());
            frm.append('EmpresaT', mdlGenerarNominaTrabajadores.find("#Empresa").find("option:selected").text());
            frm.append('EstatusT', mdlGenerarNominaTrabajadores.find("#Estatus").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddHistoricoNomina',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                mdlGenerarNominaTrabajadores.modal('hide');
                getNominas();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        btnNominas.click(function () {
            btnAvance.addClass("hide");
            btnConcluirNomina.removeClass("hide");
            btnEditarNomina.removeClass("hide");
            btnCancelarNomina.removeClass("hide");
            btnCancelarTramiteIMMSNOMINA.addClass("hide");
            getNominas();
        });

        btnConcluirNomina.click(function () {
            if (temp !== undefined && temp !== null && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onConcluirNomina',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'TRAMITE CONCLUIDO', 'success');
                    getNominas();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        /***END BTN SAVE***/
//        $("#fileuploadtf").click(function () {
//            console.log('ok');
//            $("#rArchivo").trigger('click');
//        });

        HoldOn.close();
    });


    function onAvance() {
        var sts = mdlAvance.find("#Estatus").find("option:selected").text();
        var stsbefore = mdlAvance.find("#EstatusT").val();
        if (sts === stsbefore) {
            mdlAvance.find("#btnGuardar").addClass("hide");
            mdlAvance.find("#msgNuevo").html('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>ESTE ESTATUS ES EL MISMO QUE EL ANTERIOR, POR FAVOR SELECCIONE UNO DISTINTO</div>');
        } else {
            mdlAvance.find("#btnGuardar").removeClass("hide");
            mdlAvance.find("#msgNuevo").html('');
        }
    }

    function onUpload(e) {
        var parent = $(e).parent().parent();
        var btnFile = parent.find("input[type='file']");
        var rArchivo = parent.find("#frtArchivo");
        btnFile.change(function () {
            var imageType = /image.*/;
            if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    rArchivo.html('<img src="' + reader.result + '" width=\"450\" height=\"600\">');
                };
                reader.readAsDataURL(btnFile[0].files[0]);
            } else {
                if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match('application/pdf')) {
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        rArchivo.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="900px" height="1200px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnFile[0].files[0]);
                } else {
                    var extension = getExt(btnFile[0].files[0].name);
                    switch (extension) {
                        case "rar":
                            rArchivo.html('<img src="../../media/overlays/rar.png" class="image-responsive">');
                            break;
                        case "zip":
                            rArchivo.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "zip":
                            rArchivo.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "xml":
                            rArchivo.html('<img src="../../media/overlays/xml.png" class="image-responsive">');
                            break;
                        case "doc":
                            rArchivo.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "docx":
                            rArchivo.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "xls":
                            rArchivo.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "xlsx":
                            rArchivo.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "txt":
                            rArchivo.html('<img src="../../media/overlays/txt.png" class="image-responsive">');
                            break;
                        case "css":
                            rArchivo.html('<img src="../../media/overlays/css.png" class="image-responsive">');
                            break;
                        case "html":
                            rArchivo.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "htm":
                            rArchivo.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "sql":
                            rArchivo.html('<img src="../../media/overlays/sql.png" class="image-responsive">');
                            break;
                        default:
                            rArchivo.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                            break;
                    }
                }
            }
        });
        btnFile.trigger('click');
    }

    function getEmpresas() {
        $.ajax({
            url: master_url + 'getEmpresas',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.RAZON + '</option>';
                    });
                    $("#mdlNuevo #Cliente").html(options);
                    $(".modal form #Empresa").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getTramites() {
        $.ajax({
            url: master_url + 'getTramites',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.TRAMITE + '</option>';
                    });
                    $("#mdlNuevo #Tramite").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function onAddHistorico(modal) {
        var mdl = $("#" + modal);
        frm = new FormData(mdl.find('#frmNuevo')[0]);
        frm.append('EmpresaT', mdl.find("#Empresa").find("option:selected").text());
        frm.append('EstatusT', mdl.find("#Estatus").find("option:selected").text());
        $.ajax({
            url: master_url + 'onAddHistorico',
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: frm
        }).done(function (data) {
            console.log(data);
            console.log('SE HA SUBIDO EL ARCHIVO');
        }).fail(function () {
            console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
            console.log(arguments);
        });
    }


    function onGetRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });

        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var tblName = "tblSeguridadSocial";
            if (data.length > 0) {
                $("#rSeguridadSocial").html(getTable("tblSeguridadSocial", data));

                $('#tblSeguridadSocial tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#tblSeguridadSocial').DataTable(tableOptions);

                //CLICK SELECTED ROW
                $('#tblSeguridadSocial tbody').on('click', 'tr', function () {
                    $("#tblSeguridadSocial").find("tr").removeClass("success");
                    $("#tblSeguridadSocial").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    //                temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    temp = parseInt($(dtm[0])[0].innerText);
                    console.log(temp);
                });

                //DB CLICK FOR EDIT
                $('#tblSeguridadSocial tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('IDFACT V1: ' + $(dtm[0]));
                    console.log($(dtm[0])[0].innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    console.log('******************');
                    console.log('*****' + temp + '*****');
                    console.log('******************'); 
                    //                    $("#btnEditar" + doc).trigger("click");
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
                $("#msgSeguridadSocial").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">ERROR, REVISE LA CONSOLA PARA MÁS DETALLES</h1>' +
                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getHistorial() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });

        $.ajax({
            url: master_url + 'getHistorial',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            //            console.log(data, x, jq);
            var tblName = "tblSeguridadSocial";
            if (data.length > 0) {
                $("#rSeguridadSocial").html(getTable("tblSeguridadSocial", data));

                $('#tblSeguridadSocial tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#tblSeguridadSocial').DataTable(tableOptions);

                //CLICK SELECTED ROW
                $('#tblSeguridadSocial tbody').on('click', 'tr', function () {
                    $("#tblSeguridadSocial").find("tr").removeClass("success");
                    $("#tblSeguridadSocial").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    //                temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    temp = parseInt($(dtm[0])[0].innerText);
                    console.log('******************');
                    console.log('*****' + temp + '*****');
                    console.log('******************');
                });

                //DB CLICK FOR EDIT
                $('#tblSeguridadSocial tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('IDFACT V1: ' + $(dtm[0]));
                    console.log($(dtm[0])[0].innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    //                    $("#btnEditar" + doc).trigger("click");
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
                $("#msgSeguridadSocial").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">ERROR, REVISE LA CONSOLA PARA MÁS DETALLES</h1>' +
                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getNominas() {
        btnConcluirNomina.removeClass("hide");
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });

        $.ajax({
            url: master_url + 'getNominas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var tblName = "tblNominas";
            if (data.length > 0) {
                $("#rSeguridadSocial").html(getTable("tblNominas", data));

                $('#tblNominas tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#tblNominas').DataTable(tableOptions);

                //CLICK SELECTED ROW
                $('#tblNominas tbody').on('click', 'tr', function () {
                    $("#tblNominas").find("tr").removeClass("success");
                    $("#tblNominas").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    //                temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    temp = parseInt($(dtm[0])[0].innerText);
                });

                //DB CLICK FOR EDIT
                $('#tblNominas tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('IDFACT V1: ' + $(dtm[0]));
                    console.log($(dtm[0])[0].innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    console.log('******************');
                    console.log('*****' + temp + '*****');
                    console.log('******************');

                    $("#btnEditarNomina").trigger("click");
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
                $("#msgSeguridadSocial").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">ERROR, REVISE LA CONSOLA PARA MÁS DETALLES</h1>' +
                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onHideFunctions() {
//        $("#btnAccions"). animated zoomInUpToggle("fast", "linear");
        $("div .title-module").find("span").toggleClass("fa-chevron-up fa-chevron-down");
    }

</script>
