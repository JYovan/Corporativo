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
                    <div class="text-center cursor-hand" onclick="onHideFunctions()"><h1 class="text-white">MÓDULO DE TRAMITES<span class="fa fa-chevron-up" ></span></h1></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <label for="chkTooltip"><input type="checkbox" class="" id="chkTooltip" name="chkTooltip" data-toggle="tooltip" data-placement="left" data-original-title="MOSTRAR LEYENDAS"></label>
                </div>
            </div>
            <div class="panel-body" align="center">
                <div class="col-md-12">
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnAdd" name="btnAdd"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""  type="button"
                            data-original-title="REGISTRO DE TRÁMITE">
                        <span class="fa fa-plus fa-3x info-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnEdit" name="btnEdit"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""  type="button"
                            data-original-title="EDITAR TRAMITE">
                        <span class="fa fa-pencil fa-3x success-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg" id="btnRefrescar" name="btnRefrescar"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""  type="button"
                            data-original-title="REFRESCAR">
                        <span class="fa fa-refresh fa-3x warning-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnAsignar" name="btnAsignar"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""  type="button"
                            data-original-title="ASIGNACIÓN DE TRÁMITE">
                        <span class="fa fa-compress fa-3x danger-icon"></span>
                    </button>
                    <button type="button" class="btn btn3d btn-default fa-lg hide" id="btnSeguimiento" name="btnSeguimiento"
                            data-toggle="tooltip"
                            data-placement="top"
                            title=""  type="button"
                            data-original-title="SEGUIMIENTO DE TRÁMITE">
                        <span class="fa fa-chain  fa-3x purple-icon"></span>
                    </button>
                </div>
                <div class="col-md-12" id="tblResult"></div>
            </div>
        </div>
    </div>
</div>
<?php
?>
<!-------MODALS------->

<div class="modal animated zoomInUp" id="mdlNuevoTramite" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> REGISTRO DE TRÁMITE</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-4 has-error">
                            <label for="">DESARROLLO INMOBILIARIO</label>
                            <select class="form-control" id="Proyectos" name="Proyectos">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">NOMBRE DEL TRÁMITE</label>
                            <select class="form-control" id="Tramite" name="Tramite">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">CONTRATO</label>
                            <select class="form-control" id="Contrato" name="Contrato">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">INSTANCIA DONDE SE REALIZA</label>
                            <input type="text" class="form-control" id="Instancia" name="Instancia" placeholder="LUGAR EXACTO">
                        </div>
                        <div class="col-md-4">
                            <label for="">REQUISITOS PARA SU TRAMITACIÓN</label>
                            <input type="text" class="form-control" id="Requisitos" name="Requisitos" placeholder="FORMATO ORIGINAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">DURACIÓN APROXIMADA DEL TRÁMITE</label>
                            <input type="text" class="form-control" id="Duracion" name="Duracion" placeholder="12 MESES, 365 DIAS">
                        </div>
                        <div class="col-md-12">
                            <label for="">DIRECCIÓN DEL LUGAR DE TRAMITACIÓN</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="EJ: LOMA DEL PEDREGAL, LOMAS DEL CAMPESTRE # 417">
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES DEL TRAMITE</label>
                            <textarea id="ObservacionesDelTramite" name="ObservacionesDelTramite" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-12" align="center">
                            <h2>ASIGNACIÒN DEL TRAMITE</h2>
                            <hr class="style18">
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">RESPONSABLE</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE INICIO DEL TRÁMITE</label>
                            <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE TÉRMINO DEL TRÁMITE</label>
                            <input type="text" id="FechaTermino" name="FechaTermino" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-12 has-error">
                            <label for="">ESTADO DEL TRAMITE</label>
                            <select id="Estado" name="Estado" class="form-control">
                                <option value="0"></option>
                                <option value="1">GENERANDO REQUISITOS PARA TRÁMITE</option>
                                <option value="2">TRÁMITE INICIADO</option>
                                <option value="3">TRÁMITE FINALIZADO</option>
                                <option value="4">EVIDENCIA DE TRÁMITE REALIZADO ARCHIVADA</option>
                            </select>
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal animated zoomInUp" id="mdlModificarTramite" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> MODIFICAR TRÁMITE</h2>
            </div>
            <form id="frmModificar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">DESARROLLO INMOILIARIO</label>
                            <select class="form-control" id="Proyectos" name="Proyectos">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">NOMBRE DEL TRÁMITE</label>
                            <select class="form-control" id="Tramite" name="Tramite">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">CONTRATO</label>
                            <select class="form-control" id="Contrato" name="Contrato">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">INSTANCIA DONDE SE REALIZA</label>
                            <input type="text" class="form-control" id="Instancia" name="Instancia" placeholder="LUGAR EXACTO">
                        </div>
                        <div class="col-md-6">
                            <label for="">DURACIÓN APROXIMADA DEL TRÁMITE</label>
                            <input type="text" class="form-control" id="Duracion" name="Duracion" placeholder="12 MESES, 365 DIAS">
                        </div>

                        <div class="col-md-12 has-error">
                            <label for="">REQUISITOS PARA SU TRAMITACIÓN</label>
                            <textarea id="Requisitos" name="Requisitos" rows="5" cols="20" class="form-control">
                            </textarea>
                            <!--<input type="textarea" class="form-control" id="Requisitos" name="Requisitos" placeholder="FORMATO ORIGINAL">-->
                        </div>
                        <div class="col-md-12">
                            <label for="">DIRECCIÓN DEL LUGAR DE TRAMITACIÓN</label>
                            <textarea id="Direccion" name="Direccion" rows="4" cols="20" class="form-control">
                            </textarea>
                            <!--<input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="EJ: LOMA DEL PEDREGAL, LOMAS DEL CAMPESTRE # 417">-->
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES DEL TRAMITE</label>
                            <textarea id="ObservacionesDelTramite" name="ObservacionesDelTramite" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-12" align="center">
                            <h2>ASIGNACIÒN DEL TRAMITE</h2>
                            <hr class="style18">
                        </div>
                        <div class="col-md-3 has-error">
                            <label for="">RESPONSABLE</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">FECHA DE INICIO DEL TRÁMITE</label>
                            <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">FECHA DE TÉRMINO DEL TRÁMITE</label>
                            <input type="text" id="FechaTermino" name="FechaTermino" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-3 has-error">
                            <label for="">ESTADO DEL TRAMITE</label>
                            <select id="Estado" name="Estado" class="form-control">
                                <option value="0"></option>
                                <option value="1">GENERANDO REQUISITOS PARA TRÁMITE</option>
                                <option value="2">TRÁMITE INICIADO</option>
                                <option value="3">TRÁMITE FINALIZADO</option>
                                <option value="4">EVIDENCIA DE TRÁMITE REALIZADO ARCHIVADA</option>
                            </select>
                        </div>

                        <div class="col-md-12" align="center">
                            <h2>SEGUIMIENTO DEL TRÁMITE</h2>
                            <hr class="style18">
                        </div>
                        <div id="Seguimiento">
                            <div class="col-md-2">
                                <label for="">FECHA DEL TRÁMITE</label>
                                <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-md-3">
                                <label for="">ESTADO DEL TRÁMITE</label>
                                <select id="EstadoSeguimiento" name="EstadoSeguimiento" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">GENERANDO REQUISITOS PARA TRÁMITE</option>
                                    <option value="2">TRÁMITE INICIADO</option>
                                    <option value="3">TRÁMITE FINALIZADO</option>
                                    <option value="4">EVIDENCIA DE TRÁMITE REALIZADO ARCHIVADA</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">TIPO DE EVIDENCIA</label>
                                <input type="text" id="Evidencia" name="Evidencia" class="form-control" placeholder="EJ: LICENCIA DE CONSTRUCCIÓN">
                            </div>
                            <div class="col-md-3">
                                <label for="">OBSERVACIÓN</label>
                                <input type="text" id="Observaciones" name="Observaciones" class="form-control"  >
                            </div>
                            <div class="col-md-1">
                                <button type="button" id="btnAddSeguimiento" name="btnAddSeguimiento" class="btn btn3d btn-default fa-lg" >
                                    <span class="fa fa-check fa-2x"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 hide" align="center">
                            <div id="" class="cursor-hand ">
                                <button type="button" class="btn btn3d btn-default fa-lg" id="rDocumento" name="rDocumento">
                                    <span class="fa fa-paperclip fa-2x"></span>
                                </button>
                                <input type="file" class="form-control hide" id="rDocumentoFile" name="rDocumentoFile">
                            </div>
                        </div>
                        <div id="rDocumentoDisplay" name="rDocumentoDisplay" class="col-md-12 row">
                        </div>
                        <div class="row" align="center">
                            <div class="col-md-12"><h3 class="text-danger">*LOS REGISTROS SE GUARDAN Y ELIMINAN DIRECTAMENTE SIN NECESIDAD DE ACTUALIZAR*</h3></div>
                            <div id="VistaPrevia" name="VistaPrevia" class="col-md-12"></div>
                            <div id="SeguimientoHead">
                                <div class="col-md-2">
                                    FECHA
                                </div>
                                <div class="col-md-2">
                                    ESTADO
                                </div>
                                <div class="col-md-2">
                                    EVIDENCIA
                                </div>
                                <div class="col-md-2">
                                    OBSERVACIÓN
                                </div>
                                <div class="col-md-4">
                                    ADJUNTO
                                </div>
                            </div>
                            <div id="SeguimientoBody">

                            </div>
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    var master_url = base_url + 'index.php/ctrlTramites/';
    var btnAdd = $("#btnAdd");
    var btnEdit = $("#btnEdit");
    var mdlNuevoTramite = $("#mdlNuevoTramite");
    var btnGuardar = mdlNuevoTramite.find("#btnGuardar");
    var mdlModificarTramite = $("#mdlModificarTramite");
    var btnModificar = mdlModificarTramite.find("#btnGuardar");

    var rDocumento = mdlModificarTramite.find("#rDocumento");
    var rDocumentoFile = mdlModificarTramite.find("#rDocumentoFile");
    var rDocumentoDisplay = mdlModificarTramite.find("#rDocumentoDisplay");

    var btnAddSeguimiento = mdlModificarTramite.find("#btnAddSeguimiento");

    var tblSeguimiento = mdlModificarTramite.find("#tblSeguimiento");

    var SeguimientoBody = mdlModificarTramite.find("#SeguimientoBody");

    var btnRefrescar = $("#btnRefrescar");

    $(document).ready(function() {

        btnRefrescar.click(function() {
            getRecords();
        });

        btnModificar.click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var frm = new FormData();
            frm.append('ID', mdlModificarTramite.find("#ID").val());
            frm.append('Proyectos', mdlModificarTramite.find("#Proyectos").val());
            frm.append('Tramite', mdlModificarTramite.find("#Tramite").val());
            frm.append('TramiteT', mdlModificarTramite.find("#Tramite").find("option:selected").text());
            frm.append('Contrato', mdlModificarTramite.find("#Contrato").val());
            frm.append('Instancia', mdlModificarTramite.find("#Instancia").val());
            frm.append('Requisitos', mdlModificarTramite.find("#Requisitos").val());
            frm.append('Duracion', mdlModificarTramite.find("#Duracion").val());
            frm.append('Direccion', mdlModificarTramite.find("#Direccion").val());
            frm.append('Responsable', mdlModificarTramite.find("#Responsable").val());
            frm.append('FechaInicio', mdlModificarTramite.find("#FechaInicio").val());
            frm.append('FechaTermino', mdlModificarTramite.find("#FechaTermino").val());
            frm.append('ObservacionesDelTramite', mdlModificarTramite.find("#ObservacionesDelTramite").val());
            frm.append('Estado', mdlModificarTramite.find("#Estado").val());
            $.ajax({
                url: master_url + 'onUpdateTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                mdlModificarTramite.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnAddSeguimiento.click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var rowx = '';
            var frm = new FormData(mdlModificarTramite.find('form')[0]);
            frm.append('Tramite', mdlModificarTramite.find("#ID").val());
            frm.append('TramiteT', mdlModificarTramite.find("#Tramite").find("option:selected").text());
            frm.append('ProyectosT', mdlModificarTramite.find("#Proyectos").find("option:selected").text());
            frm.append('ContratoT', mdlModificarTramite.find("#Contrato").find("option:selected").text());

            frm.append('Fecha', mdlModificarTramite.find("#Seguimiento #Fecha").val());
            frm.append('Observaciones', mdlModificarTramite.find("#Seguimiento #Observaciones").val());
            frm.append('Evidencia', mdlModificarTramite.find("#Seguimiento #Evidencia").val());
            frm.append('Proyectos', mdlModificarTramite.find("#Proyectos").val());
            frm.append('EstadoTramiteT', mdlModificarTramite.find("#EstadoSeguimiento").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddSeguimientoTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log('++++++++++++  ID  +++++++++++');
                console.log(data);
                console.log('+++++++++++++++++++++++++++++');
                rowx += '<div class="col-md-12 panel panel-default">';
                rowx += '<div class="col-md-2 text-success">';
                rowx += mdlModificarTramite.find("#Fecha").val();
                rowx += '</div>';

                rowx += '<div class="col-md-2 text-success hide tdEstado">';
                rowx += mdlModificarTramite.find("#EstadoSeguimiento").val();
                rowx += '</div>';
                rowx += '<div class="col-md-2 text-success">';
                rowx += mdlModificarTramite.find("#EstadoSeguimiento").find("option:selected").text();
                rowx += '</div>';

                rowx += '<div class="col-md-2 text-success">';
                rowx += mdlModificarTramite.find("#Evidencia").val();
                rowx += '</div>';

                rowx += '<div class="col-md-2 text-success">';
                rowx += mdlModificarTramite.find("#Observaciones").val();
                rowx += '</div>';

                rowx += '<div class="col-md-4">';
                rowx += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onUpload(this,' + data + ')" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="ADJUNTAR ARCHIVO"><span class="fa fa-paperclip fa-2x"></span></button>';
                rowx += '<input type="file" id="rArchivo" name="rArchivo[]" class="hide">';
                rowx += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onRemove(this)"><span class="fa fa-times fa-2x danger-icon"></span></button>';
                rowx += '</div>';
                rowx += '</div>';
                SeguimientoBody.append(rowx);

                onNotify('<span class="fa fa-check fa-lg"></span>', 'SEGUIMIENTO AGREGADO', 'success');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'ADJUNTE EL ARCHIVO AL NUEVO REGISTRO AGREGADO', 'success');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });

        });

        rDocumentoFile.change(function() {

            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var imageType = /image.*/;
            if (rDocumentoFile[0].files[0] !== undefined && rDocumentoFile[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    console.log(rDocumentoFile[0].files[0]);
                    var preview = '<div class="col-md-4">\n\
                            <div class="thumbnail">\n\
                                    <img src="' + reader.result + '" width="192" height="192" >\n\
                                    <div class="caption">\n\
                                        <p>' + rDocumentoFile[0].files[0].name + '</p>\n\
                                    </div>\n\
                                </div>\n\
                            </div>';
                    rDocumentoDisplay.append(preview);
                };
                reader.readAsDataURL(rDocumentoFile[0].files[0]);
            } else {
                if (rDocumentoFile[0].files[0] !== undefined && rDocumentoFile[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function(e) {
                        rDocumentoDisplay.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(rDocumentoFile[0].files[0]);
                } else {
                    rDocumentoDisplay.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
            HoldOn.close();
        });

        rDocumento.click(function() {
            rDocumentoFile.trigger('click');
        });

        btnAdd.click(function() {
            mdlNuevoTramite.find("input").val("");
            mdlNuevoTramite.find("textarea").val("");
            mdlNuevoTramite.find("select").select2("val", "");
            mdlNuevoTramite.modal('show');
        });

        btnGuardar.click(function() {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'GUARDANDO...'
            });
            var frm = new FormData(mdlNuevoTramite.find('form')[0]);
            frm.append('ProyectosT', mdlNuevoTramite.find("#Proyectos").find("option:selected").text());
            frm.append('TramiteT', mdlNuevoTramite.find("#Tramite").find("option:selected").text());
            frm.append('ContratoT', mdlNuevoTramite.find("#Contrato").find("option:selected").text());
            frm.append('ResponsableT', mdlNuevoTramite.find("#Responsable").find("option:selected").text());
            frm.append('EstadoT', mdlNuevoTramite.find("#Estado").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                getRecords();
                mdlNuevoTramite.modal('hide');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnEdit.click(function() {
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
                }).done(function(data, x, jq) {
                    console.log(data);
                    var dtm = data[0];
                    if (dtm !== undefined) {
                        SeguimientoBody.html("");
                        mdlModificarTramite.find("#ID").val(dtm.ID).addClass("hide");
                        mdlModificarTramite.find("#Proyectos").select2("val", dtm.Proyectos);
                        mdlModificarTramite.find("#Tramite").select2("val", dtm.IdTramite);
                        mdlModificarTramite.find("#Contrato").select2("val", dtm.Contrato);
                        mdlModificarTramite.find("#Evidencia").val(dtm.Evidencia);
                        mdlModificarTramite.find("#Instancia").val(dtm.Instancia);
                        mdlModificarTramite.find("#Requisitos").val(dtm.Requisitos);
                        mdlModificarTramite.find("#Duracion").val(dtm.Duracion);
                        mdlModificarTramite.find("#Direccion").val(dtm.Direccion);
                        mdlModificarTramite.find("#Responsable").select2("val", dtm.Responsable);
                        mdlModificarTramite.find("#FechaInicio").val(dtm.FechaInicio);
                        mdlModificarTramite.find("#FechaTermino").val(dtm.FechaTermino);
                        mdlModificarTramite.find("#Estado").val(dtm.Estado);
                        mdlModificarTramite.find("#ObservacionesDelTramite").val(dtm.Observaciones);
                        mdlModificarTramite.find("#Estado").select2("val", dtm.Estado);
                        $.ajax({
                            url: master_url + 'getAdjuntosByID',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: temp
                            }
                        }).done(function(data, x, jq) {
                            $.each(data, function(k, v) {
                                console.log('***************************ADJUNTO*****************************+');
                                console.log(v);
                                console.log('********************************************************+');
                                var rowx = '';
                                rowx += '<div class="col-md-12 panel panel-default">';
                                rowx += '<div class="col-md-2">';
                                rowx += v.Fecha;
                                rowx += '</div>';

                                rowx += '<div class="col-md-2">';
                                rowx += v.EstadoTramiteT;
                                rowx += '</div>';

                                rowx += '<div class="col-md-2">';
                                rowx += v.Evidencia;
                                rowx += '</div>';

                                rowx += '<div class="col-md-2">';
                                rowx += v.Observaciones;
                                rowx += '</div>';

                                rowx += '<div class="col-md-4">';
                                rowx += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onPreview(this,' + v.ID + ')" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="VER ARCHIVO"><span class="fa fa-eye fa-2x"></span></button>';
                                rowx += '<input type="file" id="rArchivo" name="rArchivo[]" class="hide">';
                                rowx += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onUpload(this,' + v.ID + ')" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="ADJUNTAR ARCHIVO"><span class="fa fa-paperclip fa-2x"></span></button>';
                                rowx += '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onRemoveSavedFile(this,' + v.ID + ')"><span class="fa fa-times fa-2x danger-icon"></span></button>';
                                rowx += '</div>';
                                rowx += '</div>';
                                SeguimientoBody.append(rowx);
                            });
                            mdlModificarTramite.find("#VistaPrevia").html("");
                            mdlModificarTramite.modal('show');
                        }).fail(function(x, y, z) {
                            console.log(x, y, z);
                        }).always(function() {
                            HoldOn.close();
                        });
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        getRecords();
        getTramites();
        getProyectos();
        getContratos();
        getResponsables();
    });

    function getProyectos() {
        $.ajax({
            url: master_url + 'getProyectos',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            $.each(data, function(k, v) {
                $('.modal #Proyectos').append('<option value="' + v.ID + '">' + v.PROYECTO + '</option>');
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getTramites() {
        $.ajax({
            url: master_url + 'getTramites',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
//            console.log(data, x, jq);
            $.each(data, function(k, v) {
//                console.log(k, v);
                $('.modal #Tramite').append('<option value="' + v.ID + '">' + v.TRAMITE + '</option>');
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getContratos() {
        $.ajax({
            url: master_url + 'getContratos',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
//            console.log(data, x, jq);
            $.each(data, function(k, v) {
//                console.log(k, v);
                $('.modal #Contrato').append('<option value="' + v.ID + '">' + v.CONTRATO + '</option>');
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getResponsables() {
        $.ajax({
            url: master_url + 'getResponsables',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
//            console.log(data, x, jq);
            $.each(data, function(k, v) {
//                console.log(k, v);
                $('.modal #Responsable').append('<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>');
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

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
        }).done(function(data, x, jq) {
            console.log(data);
            $("#tblResult").html(getTable('tblTramites', data));
            $('#tblTramites tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblTramites').DataTable(tableOptions);
            $('#tblTramites tbody').on('click', 'tr', function() {
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
            $('#tblTramites tbody').on('dblclick', 'tr', function() {
                $("#tblTramites").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0]));
                temp = parseInt(dtm[0]);
                btnEdit.trigger("click");
            });
            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onUpload(e, IDX) {
        console.log(IDX);
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
        var row = $(e).parent().parent();
        var btnArchivo = $(row).find('#rArchivo');
        var VistaPrevia = mdlModificarTramite.find('#VistaPrevia');

        btnArchivo.change(function() {
            var formData = new FormData();
            formData.append('ID', IDX);
            formData.append('Archivo', btnArchivo[0].files[0], btnArchivo[0].files[0].name);
            $.ajax({
                url: master_url + 'onAddArchivoDeSeguiientoDeTramite',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: formData
            }).done(function(data, x, jq) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'SE SUBIO CON EXITO EL ARCHIVO', 'success');
                console.log(data, x, jq);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });

            var imageType = /image.*/;
            if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    console.log(btnArchivo[0].files[0]);
                    var preview = '<img src="' + reader.result + '" width="384" height="384" >';
                    VistaPrevia.html(preview);
                };
                reader.readAsDataURL(btnArchivo[0].files[0]);
            } else {
                if (btnArchivo[0].files[0] !== undefined && btnArchivo[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function(e) {
                        VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="600px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnArchivo[0].files[0]);
                } else {
                    VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });
        btnArchivo.trigger('click');
        console.log('+ + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + ');
        console.log(row);
        console.log('+ + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + ');
        HoldOn.close();
    }

    function onRemove(e) {
        $(e).parent().parent().remove();
    }

    function onRemoveSavedFile(e, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'onEliminarArchivoGuardadoXID',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            $(e).parent().parent().remove();
            console.log(data, x, jq);
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ARCHIVO ELIMINADO', 'danger');

        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onPreview(e, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAdjuntoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log(data);
            var dtm = data[0];
            if (dtm.rArchivo !== null && dtm.rArchivo !== undefined && dtm.rArchivo !== '') {
                var ext = getExt(dtm.rArchivo);
                console.log(ext);
                if (ext === "gif" || ext === "jpg" || ext === "png") {
                    mdlModificarTramite.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + dtm.rArchivo + '" class ="img-responsive"/>');
                }
                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                    mdlModificarTramite.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + dtm.rArchivo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                }
                if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                    mdlModificarTramite.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                }
            } else {
                mdlModificarTramite.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
            }
            HoldOn.close();
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });

    }

    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
    }

</script>