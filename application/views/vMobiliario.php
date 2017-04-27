<div class="row">
    <fieldset>
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row"  align="center">
                        <div class="col-md-4"></div> 
                        <div class="col-md-4"><h3 class="panel-title">MÓDULO MOBILIARIO</h3></div>
                        <div class="col-md-2"></div> 
                        <div class="col-md-2" id=""><span class="fa fa-clock-o fa-lg"></span></div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12" align="center">
                        <!---NUEVO--->
                        <button id="btnNuevo" type="button" class="btn btn3d btn-default fa-lg"
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO">
                            <span class="fa fa-plus fa-3x info-icon"></span>
                        </button>
                        <!---EDITAR--->
                        <button id="btnEditar" type="button" class="btn btn3d btn-default fa-lg"
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR">
                            <span class="fa fa-pencil fa-3x success-icon"></span>
                        </button>
                        <!---REFRESCAR--->
                        <button id="btnRefrescar" type="button" class="btn btn3d btn-default fa-lg"
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x warning-icon"></span>
                        </button>
                        <!---ELIMINAR--->
                        <button id="btnEliminar" type="button" class="btn btn3d btn-default fa-lg"
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ELIMINAR">
                            <span class="fa fa-ban fa-3x danger-icon"></span>
                        </button>
                    </div>
                    <div id="tblResultado" class="col-md-12"></div>
                </div>
            </div>
        </div>
    </fieldset>
</div>

<!---MODAL NUEVO--->

<div id="mdlNuevo" class="modal animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h1 class="modal-title" id="myModalLabel">NUEVO MOBILIARIO</h1>
            </div>
            <form id="frmNuevo">
                <div id="" class="modal-body text-center">
                    <fieldset>   
                        <div class="col-md-4 has-error">
                            <label for="">EMPRESA DE RESGUARDO</label>
                            <select id="Empresa" name="Empresa" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">DENOMINACIÓN O NOMBRE DEL MUEBLE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: ESCRITORIO EJECUTIVO">
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">TIPO DE MOBILIARIO</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option></option> 
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control" placeholder="EJ: TRONCOSO">
                        </div>
                        <div class="col-md-4">
                            <label for="">MODELO (AÑO)</label>
                            <input type="text" id="Modelo" name="Modelo" class="form-control" placeholder="EJ: 2017">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE SERIE</label>  
                            <input type="text" id="Serie" name="Serie" class="form-control" /> 
                        </div>
                        <div class="col-md-4">
                            <label for="">COLOR</label>
                            <input type="text" id="Color" name="Color" class="form-control" placeholder="EJ: GRIS">
                        </div>
                        <div class="col-md-4">
                            <label for="">MATERIAL DE QUE ESTA HECHO</label>
                            <input type="text" id="Material" name="Material" class="form-control" placeholder="EJ: MADERA">
                        </div>
                        <div class="col-md-4">
                            <label for="">OTRAS CARACTERÍSTICAS</label>
                            <textarea id="Caracteristicas" name="Caracteristicas" rows="4" cols="20" class="form-control" >
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE ADQUISICIÓN</label>  
                            <input type="text" id="Adquisicion" name="Adquisicion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">PROVEEDOR</label>  
                            <select id="Proveedor" name="Proveedor" class="form-control">
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label for="">VALOR DE ADQUISICIÓN</label>  
                            <input type="text" id="ValorAdquisicion" name="ValorAdquisicion" class="form-control" /> 
                        </div>
                        <div class="col-md-4 has-info">
                            <label for="">ESTATUS DE USO DEL MUEBLE</label>  
                            <select id="EstatusUsoMueble" name="EstatusUsoMueble" class="form-control">
                                <option></option>
                                <option value="1">ASIGNADO</option>
                                <option value="2">SIN ASIGNAR</option>
                                <option value="3">BAJA</option>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE ASIGNACIÓN</label>  
                            <input type="text" id="FechaAsignacion" name="FechaAsignacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO DE ASIGNACIÓN</label>  
                            <input type="text" id="FolioAsignacion" name="FolioAsignacion" class="form-control" placeholder="XXXX"  >
                        </div>

                        <div class="col-md-4">
                            <label for="">FECHA DE BAJA</label>  
                            <input type="text" id="Baja" name="Baja" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">INMUEBLE DE DESTINO</label>  
                            <select id="InmuebleDestino" name="InmuebleDestino" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">ÁREA DESTINO</label>  
                            <input type="text" id="Area" name="Area" class="form-control" placeholder=""> 
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 has-error">
                            <label for="">RESPONSABLE DEL RESGUARDO</label>  
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO DEL MUEBLE</label>  
                            <select id="Estado" name="Estado" class="form-control">
                                <option></option>
                                <option value="1">NUEVO</option>
                                <option value="2">BUENO</option>
                                <option value="3">REGULAR</option>
                                <option value="4">MALO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">VALOR ACTUAL</label>  
                            <input type="text" id="ValorActual" name="ValorActual" class="form-control" /> 
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>  
                            <textarea id="Observaciones" name="Observaciones" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div> 
                        <div class="col-md-12" align="center">
                            <h1>ADJUNTAR FOTOS</h1>
                        </div>
                        <div class="col-md-12" id="XVistaPrevia" align="center"></div>
                        <div class="row">
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div><div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-md-12"></div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div>
                                    <a href="#" class="thumbnail" onclick="onUpload(this)">
                                        <img src="../../media/si.png" alt="...">
                                    </a>
                                    <input type="file" id="Archivo" name="Archivo[]" class="hide">
                                </div>
                                <div id="btnVP"></div>
                            </div>
                        </div>

                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button> 
                <button id="btnGuardar" name="btnGuardar" type="button" class="btn btn-success fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-3x success-icon"></span></button> 
            </div>
        </div>
    </div>
</div> 

<!---FIN MODAL NUEVO--->



<!---MODAL EDITAR--->

<div id="mdlEditar" class="modal animated zoomInUp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h1 class="modal-title" id="myModalLabel">EDITAR MUEBLE</h1>
            </div>
            <form id="frmEditar">
                <div id="" class="modal-body text-center">

                    <fieldset>   
                        <div class="col-md-12 has-success hide">
                            <input type="text" id="ID" name="ID" class="form-control" placeholder="PK" readonly="">
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">EMPRESA DE RESGUARDO</label>
                            <select id="Empresa" name="Empresa" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">DENOMINACIÓN O NOMBRE DEL MUEBLE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: ESCRITORIO EJECUTIVO">
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">TIPO DE MOBILIARIO</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option></option> 
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control" placeholder="EJ: TRONCOSO">
                        </div>
                        <div class="col-md-4">
                            <label for="">MODELO (AÑO)</label>
                            <input type="text" id="Modelo" name="Modelo" class="form-control" placeholder="EJ: 2017">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE SERIE</label>  
                            <input type="text" id="Serie" name="Serie" class="form-control" /> 
                        </div>
                        <div class="col-md-4">
                            <label for="">COLOR</label>
                            <input type="text" id="Color" name="Color" class="form-control" placeholder="EJ: GRIS">
                        </div>
                        <div class="col-md-4">
                            <label for="">MATERIAL DE QUE ESTA HECHO</label>
                            <input type="text" id="Material" name="Material" class="form-control" placeholder="EJ: MADERA">
                        </div>
                        <div class="col-md-4">
                            <label for="">OTRAS CARACTERÍSTICAS</label>
                            <textarea id="Caracteristicas" name="Caracteristicas" rows="4" cols="20" class="form-control" >
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE ADQUISICIÓN</label>  
                            <input type="text" id="Adquisicion" name="Adquisicion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">PROVEEDOR</label>  
                            <select id="Proveedor" name="Proveedor" class="form-control">
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label for="">VALOR DE ADQUISICIÓN</label>  
                            <input type="text" id="ValorAdquisicion" name="ValorAdquisicion" class="form-control" /> 
                        </div>
                        <div class="col-md-4 has-info">
                            <label for="">ESTATUS DE USO DEL MUEBLE</label>  
                            <select id="EstatusUsoMueble" name="EstatusUsoMueble" class="form-control">
                                <option></option>
                                <option value="1">ASIGNADO</option>
                                <option value="2">SIN ASIGNAR</option>
                                <option value="3">BAJA</option>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE ASIGNACIÓN</label>  
                            <input type="text" id="FechaAsignacion" name="FechaAsignacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO DE ASIGNACIÓN</label>  
                            <input type="text" id="FolioAsignacion" name="FolioAsignacion" class="form-control" placeholder="XXXX"  >
                        </div>

                        <div class="col-md-4">
                            <label for="">FECHA DE BAJA</label>  
                            <input type="text" id="Baja" name="Baja" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">INMUEBLE DE DESTINO</label>  
                            <select id="InmuebleDestino" name="InmuebleDestino" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4 has-error">
                            <label for="">ÁREA DESTINO</label>  
                            <input type="text" id="Area" name="Area" class="form-control" placeholder=""> 
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4 has-error">
                            <label for="">RESPONSABLE DEL RESGUARDO</label>  
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO DEL MUEBLE</label>  
                            <select id="Estado" name="Estado" class="form-control">
                                <option></option>
                                <option value="1">NUEVO</option>
                                <option value="2">BUENO</option>
                                <option value="3">REGULAR</option>
                                <option value="4">MALO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">VALOR ACTUAL</label>  
                            <input type="text" id="ValorActual" name="ValorActual" class="form-control" /> 
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>  
                            <textarea id="Observaciones" name="Observaciones" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div> 
                        <div class="col-md-12" align="center">
                            <h1><span class="fa fa-picture-o fa-2x kingblue-icon"></span> FOTOS DEL MOBILIARIO</h1>
                        </div>
                        <div class="col-md-12" id="XVistaPrevia" align="center"></div>
                        <div class="col-md-12" id='SetDeFotos' name='SetDeFotos'></div>

                    </fieldset> 
                </div>
            </form>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button> 
                <button id="btnGuardar" name="btnGuardar" type="button" class="btn btn-success fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button> 
            </div>
        </div>
    </div>
</div> 

<!---FIN MODAL EDITAR--->



<!---SCRIPTS AJAX--->
<script>
    var master_url = base_url + 'index.php/ctrlMobiliario/';

    /***MODALES***/
    var mdlNuevo = $("#mdlNuevo");
    var mdlEditar = $("#mdlEditar");
    /*** FIN MODALES***/

    /***BOTONES***/
    var btnNuevo = $("#btnNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnEliminar = $("#btnEliminar");

    var btnEditar = $("#btnEditar");
    var btnModificar = mdlEditar.find("#btnGuardar");

    var btnRefrescar = $("#btnRefrescar");
    /*** FIN BOTONES***/

    var tblResultado = $("#tblResultado");

    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var rArchivo = mdlNuevo.find("#rArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");


    var btnArchivoU = mdlEditar.find("#btnArchivo");
    var rArchivoU = mdlEditar.find("#rArchivo");
    var VistaPreviaU = mdlEditar.find("#XVistaPrevia");
    var SetDeFotos = mdlEditar.find("#SetDeFotos");

    var XVistaPrevia = mdlNuevo.find("#XVistaPrevia");

    $(document).ready(function () {

        btnModificar.click(function () {
            var frm = new FormData(mdlEditar.find("#frmEditar")[0]);
            frm.append('ProveedorT', mdlEditar.find("#Proveedor option:selected").text());
            $.ajax({
                url: master_url + 'onUpdateMobiliario',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log('ARCHIVO ACTUALIZADO');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ACTUALIZADO', 'success');
                console.log(data, x, jq);
                mdlEditar.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
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
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'info');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'warning');
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

        btnGuardar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            frm.append('ProveedorT', mdlNuevo.find("#Proveedor option:selected").text());
            $.ajax({
                url: master_url + 'onAddMobiliario',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnRefrescar.trigger('click');
                mdlNuevo.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnNuevo.click(function () {
            $('.modal #Ciudad').html('');
            VistaPrevia.html("");
            getTipos();
            getEmpresas();
            getProveedores();
            getInmobiliario();
            getResponsables();
            mdlNuevo.modal('show');
        });

        btnEditar.click(function () {
            $('.modal #Ciudad').html('');
            VistaPreviaU.html("");
            SetDeFotos.html("");
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
                    var dtm = data[0];
                    $.ajax({
                        url: master_url + 'getTipos',
                        type: "POST",
                        dataType: "JSON"
                    }).done(function (data, x, jq) {
                        console.log(data);
                        var option = '<option></option>';
                        $.each(data, function (k, v) {
                            console.log(v);
                            option += '<option value="' + v.ID + '">' + v.TIPO + '</option>';
                        });
                        $('.modal #Tipo').html(option);
                        $.ajax({
                            url: master_url + 'getEmpresas',
                            type: "POST",
                            dataType: "JSON"
                        }).done(function (data, x, jq) {
                            console.log(data);
                            var option = '<option></option>';
                            $.each(data, function (k, v) {
                                option += '<option value="' + v.ID + '">' + v.EMPRESA + '</option>';
                            });
                            $('.modal #Empresa').html(option);
                            $.ajax({
                                url: master_url + 'getProveedores',
                                type: "POST",
                                dataType: "JSON"
                            }).done(function (data, x, jq) {
                                console.log(data);
                                var option = '<option></option>';
                                $.each(data, function (k, v) {
                                    option += '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
                                });
                                $('.modal #Proveedor').html(option);
                                $.ajax({
                                    url: master_url + 'getInmobiliario',
                                    type: "POST",
                                    dataType: "JSON"
                                }).done(function (data, x, jq) {
                                    console.log(data);
                                    var option = '<option></option>';
                                    $.each(data, function (k, v) {
                                        option += '<option value="' + v.ID + '">' + v.INMUEBLE + '</option>';
                                    });
                                    $('.modal #InmuebleDestino').html(option);
                                    $.ajax({
                                        url: master_url + 'getResponsables',
                                        type: "POST",
                                        dataType: "JSON"
                                    }).done(function (data, x, jq) {
                                        console.log(data);
                                        var option = '<option></option>';
                                        $.each(data, function (k, v) {
                                            option += '<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>';
                                        });
                                        $('.modal #Responsable').html(option);

                                        console.log('* * * * * * * DATOS PRINCIPALES AL OBTENER POR ID * * * * * * ');
                                        console.log(dtm);
                                        console.log('* * * * * * * * * * * * * ');
                                        if (dtm !== undefined) {
                                            VistaPreviaU.html("");
                                            SetDeFotos.html("");
                                            $.ajax({
                                                url: master_url + 'getFotosXMobiliarioID',
                                                type: "POST",
                                                dataType: "JSON",
                                                data: {
                                                    ID: dtm.ID
                                                }
                                            }).done(function (data, x, jq) {
                                                console.log('* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ');
                                                var thumbs = '<div class="row">';
                                                var size_img = 12;
                                                console.log(data);
                                                if (data.length > 0) {

                                                    console.log('CON ' + data.length + ' IMAGENES');

                                                    $.each(data, function (k, v) {
                                                        console.log(v);
                                                        thumbs += '<div class="col-xs-2 col-md-2">';
                                                        thumbs += '<div>';
                                                        thumbs += '<a href="#" class="thumbnail" onclick="">';
                                                        thumbs += '<img src="' + v.URL + '" alt="...">';
                                                        thumbs += '</a>';
                                                        thumbs += ' <input type="file" id="Archivo" name="Archivo[]" class="hide">';
                                                        thumbs += '</div>';
                                                        thumbs += '<div id="btnVP">'
                                                                + '<button id="btnVPX" type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip"  data-placement="top"  title=""  type="button" data-original-title="VER IMAGEN COMPLETA" onclick="getFotoXID(' + v.ID + ')">'
                                                                + '<span class="fa fa-eye fa-2x kingblue-icon"></span>'
                                                                + '</button>'
                                                                + '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXID(' + v.ID + ','+ dtm.ID+')"><span class="fa fa-ban fa-2x danger-icon"></span></button></div>'
                                                                + '<div><input type="text" id="txtEstatus" name="txtEstatus[]" class="form-control hide" value="EN USO"  readonly=""></div>';
                                                        thumbs += '</div>';
                                                    });

                                                    for (var n = data.length; n < size_img; n++) {
                                                        if (n === 6) {
                                                            thumbs += '<div class="col-xs-12 col-md-12"><br></div>';
                                                        }
                                                        thumbs += '<div class="col-xs-2 col-md-2">';
                                                        thumbs += '<div>';
                                                        thumbs += '<a href="#" class="thumbnail" onclick="onUploadOnUpdate(this)">';
                                                        thumbs += '<img src="../../media/si.png" alt="...">';
                                                        thumbs += '</a>';
                                                        thumbs += ' <input type="file" id="Archivo" name="Archivo[]" class="hide">';
                                                        thumbs += '</div>';
                                                        thumbs += '<div><input type="text" id="txtEstatus" name="txtEstatus[]" class="form-control hide" value="DISPONIBLE" readonly=""></div>';
                                                        thumbs += '<div id="btnVP"></div>';
                                                        thumbs += '</div>';
                                                    }
                                                } else {
                                                    for (var n = data.length; n < size_img; n++) {
                                                        if (n === 6) {
                                                            thumbs += '<div class="col-xs-12 col-md-12"><br></div>';
                                                        }
                                                        thumbs += '<div class="col-xs-2 col-md-2">';
                                                        thumbs += '<div>';
                                                        thumbs += '<a href="#" class="thumbnail" onclick="onUploadOnUpdate(this)">';
                                                        thumbs += '<img src="../../media/si.png" alt="...">';
                                                        thumbs += '</a>';
                                                        thumbs += ' <input type="file" id="Archivo" name="Archivo[]" class="hide">';
                                                        thumbs += '</div>';
                                                        thumbs += '<div><input type="text" id="txtEstatus" name="txtEstatus[]" class="form-control hide" value="DISPONIBLE" readonly=""></div>';
                                                        thumbs += '<div id="btnVP"></div>';
                                                        thumbs += '</div>';
                                                    }
                                                    console.log('SIN IMAGENES');
                                                }
                                                thumbs += '</div>';
                                                SetDeFotos.html(thumbs);

                                                console.log('* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ');
                                                mdlEditar.find("#ID").val(dtm.ID);
                                                mdlEditar.find("#Tipo").select2("val", dtm.Tipo);
                                                mdlEditar.find("#Nombre").val(dtm.Nombre);
                                                mdlEditar.find("#Marca").val(dtm.Marca);
                                                mdlEditar.find("#Modelo").val(dtm.Modelo);
                                                mdlEditar.find("#Material").val(dtm.Material);
                                                mdlEditar.find("#Color").val(dtm.Color);
                                                mdlEditar.find("#Resguardo").val(dtm.Resguardo);
                                                mdlEditar.find("#Caracteristicas").val(dtm.Caracteristicas);
                                                mdlEditar.find("#Adquisicion").val(dtm.FechaAdquisicion);
                                                mdlEditar.find("#Baja").val(dtm.Baja);
                                                mdlEditar.find("#Estado").val(dtm.Estado);
                                                mdlEditar.find("#Estado").select2("val", parseInt(dtm.Estado));
                                                mdlEditar.find("#Proveedor").val(dtm.IdProveedor);
                                                mdlEditar.find("#Proveedor").select2("val", parseInt(dtm.IdProveedor));
                                                mdlEditar.find("#Serie").val(dtm.Serie);
                                                mdlEditar.find("#Area").val(dtm.Area);
                                                mdlEditar.find("#ValorAdquisicion").val(dtm.ValorAdquisicion);
                                                mdlEditar.find("#ValorActual").val(dtm.ValorActual);
                                                mdlEditar.find("#Observaciones").val(dtm.Observaciones);
                                                mdlEditar.find("#Responsable").val(dtm.Responsable);
                                                mdlEditar.find("#Responsable").select2("val", dtm.Responsable);
                                                mdlEditar.find("#EstatusUsoMueble").val(dtm.EstatusUsoMueble);
                                                mdlEditar.find("#EstatusUsoMueble").select2("val", dtm.EstatusUsoMueble);
                                                mdlEditar.find("#Empresa").val(dtm.Empresa);
                                                mdlEditar.find("#Empresa").select2("val", dtm.Empresa);
                                                mdlEditar.find("#FechaAsignacion").val(dtm.FechaAsignacion);
                                                mdlEditar.find("#FolioAsignacion").val(dtm.FolioAsignacion);
                                                mdlEditar.find("#InmuebleDestino").val(dtm.InmuebleDestino);
                                                mdlEditar.find("#InmuebleDestino").select2("val", dtm.InmuebleDestino);
                                                mdlEditar.modal('show');
                                            }).fail(function (x, y, z) {
                                                console.log(x, y, z);
                                            }).always(function () {
                                                HoldOn.close();
                                            });

                                        }

                                    }).fail(function (x, y, z) {
                                        console.log('FAIL EN RESPONSABLE');
                                        console.log(x, y, z);
                                    }).always(function () {
                                        HoldOn.close();
                                    });
                                }).fail(function (x, y, z) {
                                    console.log('FAIL EN INMOBILIARIO');
                                    console.log(x, y, z);
                                }).always(function () {
                                    HoldOn.close();
                                });
                            }).fail(function (x, y, z) {
                                console.log('FAIL EN PROVEEDORES');
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                        }).fail(function (x, y, z) {
                            console.log('FAIL EN EMPRESAS');
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    }).fail(function (x, y, z) {
                        console.log('FAIL EN TIPO DE MOBILIARIO');
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }).fail(function (x, y, z) {
                    console.log('FAIL AL OBTENER LOS DATOS PRINCIPALES');
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnRefrescar.click(function () {
            getRecords();
        });
        getUpdatedRecords();
    });

    function getUpdatedRecords() {
        getRecords();
        setTimeout(function () {
            getUpdatedRecords();
        }, 3000000);
    }

    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO... POR FAVOR ESPERE"
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            tblResultado.html(getTable("tblMobiliario", data));
            $('#tblMobiliario tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="BUSCAR POR ' + title + '" />');
            });
            var tblSelected = $('#tblMobiliario').DataTable(tableOptions);
            $('#tblMobiliario tbody').on('click', 'tr', function () {
                $("#tblMobiliario").find("tr").removeClass("success");
                $("#tblMobiliario").find("tr").removeClass("warning");
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
            $('#tblMobiliario tbody').on('dblclick', 'tr', function () {
                $("#tblMobiliario").find("tr").removeClass("warning");
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

    function getEmpresas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getEmpresas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.EMPRESA + '</option>';
            });
            $('.modal #Empresa').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProveedores() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getProveedores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
            });
            $('.modal #Proveedor').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getInmobiliario() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getInmobiliario',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.INMUEBLE + '</option>';
            });
            $('.modal #InmuebleDestino').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getResponsables() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getResponsables',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                console.log(v);
                option += '<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>';
            });
            $('.modal #Responsable').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getTipos() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getTipos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                console.log(v);
                option += '<option value="' + v.ID + '">' + v.TIPO + '</option>';
            });
            $('.modal #Tipo').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onUpload(e) {
        var Archivo = $(e).parent('div').find("#Archivo");
        var VistaPrevia = $(e).parent('div').find("a");
        var VP = $(e).parent().parent().find("div#btnVP");

        Archivo.change(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'POR FAVOR ESPERE...'
            });
            var imageType = /image.*/;
            if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    console.log(Archivo[0].files[0]);
                    var preview = '<img src="' + reader.result + '" id="XVP">';
                    VistaPrevia.html(preview);
                    XVistaPrevia.html("");
                    VP.html('<button id="btnVPX" type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip"  data-placement="top"  title=""  type="button" data-original-title="VER IMAGEN COMPLETA" onclick="onXVistaPrevia(this)"><span class="fa fa-eye fa-2x kingblue-icon"></span></button>');
                };
                reader.readAsDataURL(Archivo[0].files[0]);
                HoldOn.close();
            } else {
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="600px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(Archivo[0].files[0]);
                } else {
                    VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
                HoldOn.close();
            }
        });

        Archivo.trigger('click');
        console.log(Archivo);
    }

    function onUploadOnUpdate(e) {
        var Archivo = $(e).parent('div').find("#Archivo");
        var VistaPrevia = $(e).parent('div').find("a");
        var VP = $(e).parent().parent().find("div#btnVP");

        Archivo.change(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'POR FAVOR ESPERE...'
            });
            var imageType = /image.*/;
            if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    console.log(Archivo[0].files[0]);
                    var preview = '<img src="' + reader.result + '" id="XVP">';
                    VistaPrevia.html(preview);
                    VistaPreviaU.html("");
                    VP.html('<button id="btnVPX" type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip"  data-placement="top"  title=""  type="button" data-original-title="VER IMAGEN COMPLETA" onclick="onXVistaPreviaUpdate(this)"><span class="fa fa-eye fa-2x lime-icon"></span></button>');
                };
                reader.readAsDataURL(Archivo[0].files[0]);
                HoldOn.close();
            } else {
                HoldOn.close();
            }
        });

        Archivo.trigger('click');
        console.log(Archivo);
    }

    function onXVistaPrevia(e) {
        var source = $(e).parent().parent().find('img#XVP').attr('src');

        if (source !== null && source !== undefined && source !== '') {
            var ext = getExt(source);
            console.log(ext);
            if (ext === "gif" || ext === "jpg" || ext === "png") {
                XVistaPrevia.html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
            }
            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                XVistaPrevia.html('<hr> <embed src="' + source + '" type="application/pdf" width="90%" height="800px"' +
                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
            }
        } else {
            XVistaPrevia.html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
        }
        if (source.length > 200) {
            XVistaPrevia.html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
        }
    }

    function onXVistaPreviaUpdate(e) {
        var source = $(e).parent().parent().find('img#XVP').attr('src');
        if (source !== null && source !== undefined && source !== '') {
            var ext = getExt(source);
            console.log(ext);
            if (ext === "gif" || ext === "jpg" || ext === "png") {
                VistaPreviaU.html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
            }
            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                VistaPreviaU.html('<hr> <embed src="' + source + '" type="application/pdf" width="90%" height="800px"' +
                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
            }
        } else {
            VistaPreviaU.html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
        }
        if (source.length > 200) {
            VistaPreviaU.html("<hr><img id='trtImagen' src='" + source + "' class ='img-responsive'/>");
        }
    }

    function getFotoXID(IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getFotoXID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            VistaPreviaU.html('<img src="' + data[0].URL + '" class="img-responsive">');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarFotoXID(IDX, IDPK) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXID',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO ELIMINADA', 'success');
            onReloadSetDeFotosXID(IDPK);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onReloadSetDeFotosXID(IDX) {
        SetDeFotos.html("");
        $.ajax({
            url: master_url + 'getFotosXMobiliarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ');
            var thumbs = '<div class="row">';
            var size_img = 12;
            console.log(data);
            if (data.length > 0) {

                console.log('CON ' + data.length + ' IMAGENES');

                $.each(data, function (k, v) {
                    console.log(v);
                    thumbs += '<div class="col-xs-2 col-md-2">';
                    thumbs += '<div>';
                    thumbs += '<a href="#" class="thumbnail" onclick="">';
                    thumbs += '<img src="' + v.URL + '" alt="...">';
                    thumbs += '</a>';
                    thumbs += ' <input type="file" id="Archivo" name="Archivo[]" class="hide">';
                    thumbs += '</div>';
                    thumbs += '<div id="btnVP">'
                            + '<button id="btnVPX" type="button" class="btn btn3d btn-default fa-lg" data-toggle="tooltip"  data-placement="top"  title=""  type="button" data-original-title="VER IMAGEN COMPLETA" onclick="getFotoXID(' + v.ID + ')">'
                            + '<span class="fa fa-eye fa-2x kingblue-icon"></span>'
                            + '</button>'
                            + '<button type="button" class="btn btn3d btn-default fa-lg" onclick="onEliminarFotoXID(' + v.ID + ','+IDX+')"><span class="fa fa-ban fa-2x danger-icon"></span></button></div>'
                            + '<div><input type="text" id="txtEstatus" name="txtEstatus[]" class="form-control hide" value="EN USO"  readonly=""></div>';
                    thumbs += '</div>';
                });

                for (var n = data.length; n < size_img; n++) {
                    if (n === 6) {
                        thumbs += '<div class="col-xs-12 col-md-12"><br></div>';
                    }
                    thumbs += '<div class="col-xs-2 col-md-2">';
                    thumbs += '<div>';
                    thumbs += '<a href="#" class="thumbnail" onclick="onUploadOnUpdate(this)">';
                    thumbs += '<img src="../../media/si.png" alt="...">';
                    thumbs += '</a>';
                    thumbs += ' <input type="file" id="Archivo" name="Archivo[]" class="hide">';
                    thumbs += '</div>';
                    thumbs += '<div><input type="text" id="txtEstatus" name="txtEstatus[]" class="form-control" value="DISPONIBLE" readonly=""></div>';
                    thumbs += '<div id="btnVP"></div>';
                    thumbs += '</div>';
                }
            } else {
                for (var n = data.length; n < size_img; n++) {
                    if (n === 6) {
                        thumbs += '<div class="col-xs-12 col-md-12"><br></div>';
                    }
                    thumbs += '<div class="col-xs-2 col-md-2">';
                    thumbs += '<div>';
                    thumbs += '<a href="#" class="thumbnail" onclick="onUploadOnUpdate(this)">';
                    thumbs += '<img src="../../media/si.png" alt="...">';
                    thumbs += '</a>';
                    thumbs += ' <input type="file" id="Archivo" name="Archivo[]" class="hide">';
                    thumbs += '</div>';
                    thumbs += '<div><input type="text" id="txtEstatus" name="txtEstatus[]" class="form-control hide" value="DISPONIBLE" readonly=""></div>';
                    thumbs += '<div id="btnVP"></div>';
                    thumbs += '</div>';
                }
                console.log('SIN IMAGENES');
            }
            thumbs += '</div>';
            SetDeFotos.html(thumbs);
            
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }
</script>
<!---FIN SCRIPTS AJAX--->