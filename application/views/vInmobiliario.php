<div class="row">
    <fieldset>
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">MODULO INMOBILIARIO</h3>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title" id="myModalLabel">NUEVO INMUEBLE</h1>
            </div>
            <form id="frmNuevo">
                <div id="" class="modal-body text-center">
                    <fieldset>   
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: CHANGARRITO">
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="EJ: GORREON">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" id="No" name="No" class="form-control" placeholder="EJ: 501">
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="EJ: LOMA">
                        </div>
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL</label>
                            <input type="text" id="CP" name="CP" class="form-control" placeholder="EJ: 37500">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select id="Ciudad" name="Ciudad" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">LÍNEA TELEFÓNICA</label>
                            <select id="LineaTelefonica" name="LineaTelefonica" class="form-control" >
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE LÍNEAS TELEFÓNICAS</label>
                            <input type="text" id="NumeroDeLineas" name="NumeroDeLineas" class="form-control" placeholder="EJ: 2">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMEROS DE LÍNEAS TELEFÓNICAS</label>
                            <input type="text" id="Tel" name="Tel" class="form-control" placeholder="EJ: 77 66 55 1, 77 77 22 1....">
                        </div>
                        <div class="col-md-4">
                            <label for="">OFICINAS</label>
                            <textarea id="UniAdmtivas" name="UniAdmtivas" rows="5" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE EMPLEADOS</label>
                            <input type="text" id="Empleados" name="Empleados" class="form-control" placeholder="100">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE PISOS</label>
                            <input type="text" id="Pisos" name="Pisos" class="form-control" placeholder="2">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">ESPACIOS PARA ESTACIONAMIENTO</label>
                            <input type="text" id="Estacionamientos" name="Estacionamientos" class="form-control" placeholder="25">
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DEL TERRENO (M2)</label>
                            <input type="text" id="Superficie" name="Superficie" class="form-control" placeholder="5000">
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE CONSTRUIDA</label>
                            <input type="text" id="Construccion" name="Construccion" class="form-control" placeholder="50000 MTS">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE FRENTE</label>
                            <input type="text" id="Frente" name="Frente" class="form-control" placeholder="50000 MTS">
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE FONDO</label>
                            <input type="text" id="Fondo" name="Fondo" class="form-control" placeholder="50000 MTS">
                        </div>
                        <div class="col-md-4">
                            <label for="">SITUACIÓN JURÍDICA DEL INMUEBLE</label>
                            <input type="text" id="SitJuridica" name="SitJuridica" class="form-control" placeholder="NA">
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL ARRENDADOR O PROPIETARIO</label>
                            <input type="text" id="Propietario" name="Propietario" class="form-control" placeholder="EJ: PEDRO">
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL ARRENDATARIO</label>
                            <input type="text" id="Arrendatario" name="Arrendatario" class="form-control" placeholder="EJ: ROGELIO">
                        </div>
                        <div class="col-md-4">
                            <label for="">VALOR DEL INMUEBLE</label>
                            <input type="text" id="ValorInmueble" name="ValorInmueble" class="form-control" placeholder="SOLO NUMERO CON SU PUNTO DECIMAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">VALOR DE VENTA</label>
                            <input type="text" id="ValorVenta" name="ValorVenta" class="form-control" placeholder="SOLO NUMERO CON SU PUNTO DECIMAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO MENSUAL DE LA RENTA</label>
                            <input type="text" id="Renta" name="Renta" class="form-control" placeholder="SOLO NUMERO CON SU PUNTO DECIMAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA EN QUE SE INICIÓ LA PRESTACIÓN DE LOS SERVICIOS DEL LUGAR</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-8">
                            <label for="">USO DEL INMUEBLE</label>
                            <select id="UsoInmueble" name="UsoInmueble" class="form-control">
                                <option></option> 
                            </select>
                        </div>
                        <div id="" name="" class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" name="VistaPrevia" class="col-md-12"></div>
                            <input type="file" id="rArchivo" name="rArchivo" class="hide">
                            <button type="button" id="btnArchivo" name="btnArchivo" class="btn btn3d btn-default fa-lg">
                                <span class="fa fa-upload fa-5x"></span>
                                <h1>ADJUNTAR ARCHIVO</h1>
                            </button>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title" id="myModalLabel">EDITAR INMUEBLE</h1>
            </div>
            <form id="frmEditar">
                <div id="" class="modal-body text-center">
                    <fieldset>   
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" readonly="" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: CHANGARRITO">
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="EJ: GORREON">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" id="No" name="No" class="form-control" placeholder="EJ: 501">
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="EJ: LOMA">
                        </div>
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL</label>
                            <input type="text" id="CP" name="CP" class="form-control" placeholder="EJ: 37500">
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select id="Ciudad" name="Ciudad" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-12"></div> 

                        <div class="col-md-4">
                            <label for="">LÍNEA TELEFÓNICA</label>
                            <select id="LineaTelefonica" name="LineaTelefonica" class="form-control" >
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE LÍNEAS TELEFÓNICAS</label>
                            <input type="text" id="NumeroDeLineas" name="NumeroDeLineas" class="form-control" placeholder="EJ: 2">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMEROS DE LÍNEAS TELEFÓNICAS</label>
                            <input type="text" id="Tel" name="Tel" class="form-control" placeholder="EJ: 77 66 55 1, 77 77 22 1....">
                        </div>
                        <div class="col-md-4">
                            <label for="">OFICINAS</label>
                            <textarea id="UniAdmtivas" name="UniAdmtivas" rows="5" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE EMPLEADOS</label>
                            <input type="text" id="Empleados" name="Empleados" class="form-control" placeholder="100">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE PISOS</label>
                            <input type="text" id="Pisos" name="Pisos" class="form-control" placeholder="2">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">ESPACIOS PARA ESTACIONAMIENTO</label>
                            <input type="text" id="Estacionamientos" name="Estacionamientos" class="form-control" placeholder="25">
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DEL TERRENO (M2)</label>
                            <input type="text" id="Superficie" name="Superficie" class="form-control" placeholder="5000">
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE CONSTRUIDA</label>
                            <input type="text" id="Construccion" name="Construccion" class="form-control" placeholder="50000 MTS">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">SITUACIÓN JURÍDICA DEL INMUEBLE</label>
                            <input type="text" id="SitJuridica" name="SitJuridica" class="form-control" placeholder="NA">
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL ARRENDADOR O PROPIETARIO</label>
                            <input type="text" id="Propietario" name="Propietario" class="form-control" placeholder="EJ: PEDRO">
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL ARRENDATARIO</label>
                            <input type="text" id="Arrendatario" name="Arrendatario" class="form-control" placeholder="EJ: ROGELIO">
                        </div>
                        <div class="col-md-4">
                            <label for="">VALOR DEL INMUEBLE</label>
                            <input type="text" id="ValorInmueble" name="ValorInmueble" class="form-control" placeholder="SOLO NUMERO CON SU PUNTO DECIMAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">VALOR DE VENTA</label>
                            <input type="text" id="ValorVenta" name="ValorVenta" class="form-control" placeholder="SOLO NUMERO CON SU PUNTO DECIMAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO MENSUAL DE LA RENTA</label>
                            <input type="text" id="Renta" name="Renta" class="form-control" placeholder="SOLO NUMERO CON SU PUNTO DECIMAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA EN QUE SE INICIÓ LA PRESTACIÓN DE LOS SERVICIOS DEL LUGAR</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div>
                        <div class="col-md-8">
                            <label for="">USO DEL INMUEBLE</label>
                            <select id="UsoInmueble" name="UsoInmueble" class="form-control">
                                <option></option>
                                 
                            </select>
                        </div>
                        <div class="col-md-12 ">
                            <h2 class="text-danger"> *UNA VEZ CARGADO EL ARCHIVO, YA NO TIENE QUE HACER CLIC EN GUARDAR* </h2>
                        </div>
                        <div id="" name="" class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" name="VistaPrevia" class="col-md-12"></div>
                            <input type="file" id="rArchivo" name="rArchivo" class="hide">
                            <button type="button" id="btnArchivo" name="btnArchivo" class="btn btn3d btn-default fa-lg">
                                <span class="fa fa-upload fa-5x"></span>
                                <h1>ADJUNTAR ARCHIVO</h1>
                            </button>
                        </div>
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
    var master_url = base_url + 'index.php/ctrlInmobiliario/';

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
    var VistaPreviaU = mdlEditar.find("#VistaPrevia");

    $(document).ready(function () {

        btnModificar.click(function () {
            var formData = new FormData(mdlEditar.find("#frmEditar")[0]);
            $.ajax({
                url: master_url + 'onUpdateInmobiliario',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: formData
            }).done(function (data, x, jq) {
                console.log('ARCHIVO ACTUALIZADO');
                console.log(data, x, jq);
                mdlEditar.modal('hide');
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close()
            });
        });

        btnArchivoU.click(function () {
            rArchivoU.change(function () {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'POR FAVOR ESPERE...'
                });
                var imageType = /image.*/;
                if (rArchivoU[0].files[0] !== undefined && rArchivoU[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(rArchivoU[0].files[0]);
                        var preview = '<img src="' + reader.result + '" height="384" class="img-responsive">';
                        VistaPreviaU.html(preview);
                    };
                    reader.readAsDataURL(rArchivoU[0].files[0]);
                    var formData = new FormData();
                    formData.append('ID', mdlEditar.find("#ID").val());
                    formData.append('Archivo', rArchivoU[0].files[0], rArchivoU[0].files[0].name);
                    $.ajax({
                        url: master_url + 'onUpdateArchivoXID',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData
                    }).done(function (data, x, jq) {
                        console.log('ARCHIVO ACTUALIZADO');
                        console.log(data, x, jq);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close()
                    });
                } else {
                    if (rArchivoU[0].files[0] !== undefined && rArchivoU[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPreviaU.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="600px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(rArchivoU[0].files[0]);
                    } else {
                        VistaPreviaU.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                    HoldOn.close();
                }
            });
            rArchivoU.trigger('click');
        });

        btnArchivo.click(function () {
            rArchivo.change(function () {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'POR FAVOR ESPERE...'
                });
                var imageType = /image.*/;
                if (rArchivo[0].files[0] !== undefined && rArchivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(rArchivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" height="384" class="img-responsive">';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(rArchivo[0].files[0]);
                    HoldOn.close();
                } else {
                    if (rArchivo[0].files[0] !== undefined && rArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="600px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(rArchivo[0].files[0]);
                    } else {
                        VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                    HoldOn.close();
                }
            });
            rArchivo.trigger('click');
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
                })
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
            if (rArchivo[0].files[0] !== undefined) {
                frm.append('Archivo', rArchivo[0].files[0], rArchivo[0].files[0].name);
            }
            $.ajax({
                url: master_url + 'onAddInmobiliario',
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

        mdlNuevo.find("#Estado").change(function () {
            getCiudades($(this).val());
        });

        mdlEditar.find("#Estado").change(function () {
            getCiudades($(this).val());
        });

        btnNuevo.click(function () {
            $('.modal #Ciudad').html('');
            VistaPrevia.html("");
            getEstados();
            getUsos();
            mdlNuevo.modal('show');
        });

        btnEditar.click(function () {
            getUsos();
            getEstados();
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
                    var dtm = data[0];
                    if (dtm !== undefined) {
                        $('.modal #Ciudad').html('');
                        VistaPreviaU.html("");
                        mdlEditar.find("#ID").val(dtm.ID);
                        mdlEditar.find("#Nombre").val(dtm.Nombre);
                        mdlEditar.find("#Calle").val(dtm.Calle);
                        mdlEditar.find("#No").val(dtm.No);
                        mdlEditar.find("#Colonia").val(dtm.Colonia);
                        mdlEditar.find("#CP").val(dtm.CP);
                        mdlEditar.find("#Estado").val(dtm.Estado);
                        mdlEditar.find("#Estado").select2("val", dtm.Estado);
                        mdlEditar.find("#Estado");
                        $.ajax({
                            url: master_url + 'getCiudades',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: dtm.Estado
                            }
                        }).done(function (data, x, jq) {
                            console.log(data)
                            var option = '<option></option>';
                            $.each(data, function (k, v) {
                                option += '<option value="' + v.ID + '">' + v.CIUDAD + '</option>'
                            });
                            mdlEditar.find('#Ciudad').html(option);
                            mdlEditar.find("#Ciudad").val(dtm.Ciudad);
                            mdlEditar.find("#Ciudad").select2("val", dtm.Ciudad);
                            mdlEditar.find("#Tel").val(dtm.Tel);
                            mdlEditar.find("#UniAdmtivas").val(dtm.UniAdmtivas);
                            mdlEditar.find("#Empleados").val(dtm.Empleados);
                            mdlEditar.find("#Pisos").val(dtm.Pisos);
                            mdlEditar.find("#Estacionamientos").val(dtm.Estacionamientos);
                            mdlEditar.find("#Superficie").val(dtm.Superficie);
                            mdlEditar.find("#Construccion").val(dtm.Construccion);
                            mdlEditar.find("#SitJuridica").val(dtm.SitJuridica);
                            mdlEditar.find("#Propietario").val(dtm.Propietario);
                            mdlEditar.find("#Arrendatario").val(dtm.Arrendatario);
                            mdlEditar.find("#Renta").val(dtm.Renta);
                            mdlEditar.find("#Fecha").val(dtm.Fecha);

                            mdlEditar.find("#LineaTelefonica").select2("val", dtm.LineaTelefonica);
                            mdlEditar.find("#NumeroDeLineas").val(dtm.NumeroDeLineas);
                            mdlEditar.find("#ValorInmueble").val(dtm.ValorInmueble);
                            mdlEditar.find("#ValorVenta").val(dtm.ValorVenta);
                            mdlEditar.find("#UsoInmueble").select2("val", dtm.UsoInmueble);

                            if (dtm.rDocumento !== null && dtm.rDocumento !== undefined && dtm.rDocumento !== '') {
                                var ext = getExt(dtm.rDocumento);
                                console.log(ext);
                                if (ext === "gif" || ext === "jpg" || ext === "png") {
                                    VistaPreviaU.html("<hr><img id='trtImagen' src='" + dtm.rDocumento + "' class ='img-responsive'/>");
                                }
                                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                    VistaPreviaU.html('<hr> <embed src="' + dtm.rDocumento + '" type="application/pdf" width="90%" height="800px"' +
                                            ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                                }
                            } else {
                                VistaPreviaU.html('<h1 class="text-danger">NO EXISTE ARCHIVO ADJUNTO</h1>');
                            }

                            mdlEditar.modal('show');
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            console.log('CIUDADES COMPLETADO');
                        });
                    }
                }
                ).fail(function (x, y, z) {
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

        getRecords();
    });

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
            tblResultado.html(getTable("tblInmobiliario", data));
            $('#tblInmobiliario tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="BUSCAR POR ' + title + '" />');
            });
            var tblSelected = $('#tblInmobiliario').DataTable(tableOptions);
            $('#tblInmobiliario tbody').on('click', 'tr', function () {
                $("#tblInmobiliario").find("tr").removeClass("success");
                $("#tblInmobiliario").find("tr").removeClass("warning");
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
            $('#tblInmobiliario tbody').on('dblclick', 'tr', function () {
                $("#tblInmobiliario").find("tr").removeClass("warning");
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

    function getEstados() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.ESTADO + '</option>'
            });
            $('.modal #Estado').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCiudades(EDO) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCiudades',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: EDO
            }
        }).done(function (data, x, jq) {
            console.log(data)
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.CIUDAD + '</option>'
            });
            $('.modal #Ciudad').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getUsos() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'POR FAVOR ESPERE...'
        });
        $.ajax({
            url: master_url + 'getUsos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.USO + '</option>'
            });
            $('.modal #UsoInmueble').html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>
<!---FIN SCRIPTS AJAX--->