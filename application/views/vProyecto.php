<div class="row"> 
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary container-fluid">
                <div class="panel-heading row">
                    <div class="col-md-2 panel-title">
                        <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-arrow-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="ATRAS"></span>
                        </a> 
                    </div>
                    <div class="col-md-8"> 
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE PROYECTOS <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <span class="fa fa-navicon cursor-hand" onclick="onMenu()" data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                    </div>
                </div>
            <fieldset>
                <div class="col-md-12" align="center">
                            <button class="btn btn-default btn-lg text-center fa-lg" id="btnNuevo" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="NUEVO"  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x info-icon"></span>
                            </button>
                            <button class="btn btn-default btn-lg text-center fa-lg" id="btnEditar" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="EDITAR"  type="button"
                                    data-original-title="EDITAR">
                                <span class="fa fa-pencil fa-3x success-icon"></span>
                            </button> 
                            <button class="btn btn-default btn-lg text-center fa-lg" id="btnRefrescar" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="ACTUALIZAR"  type="button"
                                    data-original-title="ACTUALIZAR">
                                <span class="fa fa-refresh fa-3x warning-icon "></span>
                            </button> 
                            <button class="btn btn-default btn-lg text-center fa-lg" id="btnEliminar" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="ELIMINAR"  type="button"
                                    data-original-title="ELIMINAR">
                                <span class="fa fa-trash fa-3x  danger-icon"></span>
                            </button>  
                </div>
                <div class="col-md-12" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div> 


<!--MODALES-->

<!--NUEVO-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVO PROYECTO</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">
                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">ACTIVIDAD</label>
                            <select id="Actividad" name="Actividad" class="form-control">
                                
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE DEL PROYECTO</label>    
                            <input type="text" class="form-control" id="Proyecto" name="Proyecto" placeholder="LA PERA, LA PERA X">
                        </div> 
                        <div class="col-md-12">
                            <label for="">DESCRIPCIÓN DEL PROYECTO</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control" rows="4" cols="20" placeholder="NO MÁS DE 999 CARACTERES...">
                            </textarea>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">MODELO DE NEGOCIO</label>    
                            <select type="text" class="form-control" id="Modelo" name="Modelo" >
                                <option></option>
                                <option value="1">DESARROLLO RABINA</option>
                                <option value="2">DESARROLLO EN FIDEICOMISO</option>
                                <option value="3">DESARROLLO POR CONTRATO DE OBRA</option>
                            </select>
                        </div> 
                        <div class="col-6 col-md-6">
                            <label for="">INMUEBLE A CONSTRUIR</label>    
                            <select type="text" class="form-control" id="Inmueble" name="Inmueble" >
                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">SEGMENTO</label>    
                            <input type="text" class="form-control" id="SegmentoD" name="SegmentoD" placeholder="X">
                        </div> 
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DEL TERRENO</label>    
                            <input type="text" class="form-control" id="SuperficieT" name="SuperficieT" placeholder="X">
                        </div> 
                        <div class="col-md-4">
                            <label for="">SECCION</label>    
                            <input type="text" class="form-control" id="SeccionD" name="SeccionD" placeholder="X">
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO DE VIVIENDAS</label>    
                            <input type="text" class="form-control" id="NumeroViviendas" name="NumeroViviendas" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">FECHA DE INICIO</label>    
                            <input type="text" class="form-control" id="Finicio" name="Finicio" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">FECHA DE TERMINO</label>    
                            <input type="text" class="form-control" id="Ftermino" name="Ftermino" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">CALLE</label>    
                            <input type="text" class="form-control" id="Calle" name="Calle" placeholder="LOMA DEL PEDREGAL">
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>    
                            <input type="text" class="form-control" id="No" name="No" placeholder="417">
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>    
                            <input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="LOMAS DEL CAMPESTRE">
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option></option>
                                <option value="PROPIO">PROPIO</option>
                                <option value="FIDEICOMISO">FIDEICOMISO</option>
                                <option value="CONTRATO DE OBRA">CONTRATO DE OBRA</option>
                                <option value="COMERCIALIZACION DE MATERIALES">COMERCIALIZACION DE MATERIALES</option> 
                            </select>
                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <button type="button" class="btn btn-default fa-lg" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-3x">
                                </span> 
                                <H1> SUBIR LOGO O IDENTIDAD DEL PROYECTO</h1>
                            </button>
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button type="button" class="btn btn-default fa-lg" id="btnGuardar"><span class="fa fa-check fa-3x success-icon"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--EDITAR-->
<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR PROYECTO</h4>
            </div>
            <form id="frmEditar"><div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control hide">
                        </div>

                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <select id="Empresa" name="Empresa" class="form-control">
                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">ACTIVIDAD</label>
                            <select id="Actividad" name="Actividad" class="form-control">
                                
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE DEL PROYECTO</label>    
                            <input type="text" class="form-control" id="Proyecto" name="Proyecto" placeholder="LA PERA, LA PERA X">
                        </div> 
                        <div class="col-md-12">
                            <label for="">DESCRIPCIÓN DEL PROYECTO</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control" rows="4" cols="20" placeholder="NO MÁS DE 999 CARACTERES...">
                            </textarea>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">MODELO</label>    
                            <select type="text" class="form-control" id="Modelo" name="Modelo" >
                                <option></option>
                                <option value="1">DESARROLLO RABINA</option>
                                <option value="2">DESARROLLO EN FIDEICOMISO</option>
                                <option value="3">DESARROLLO POR CONTRATO DE OBRA</option>
                            </select>
                        </div> 
                        <div class="col-6 col-md-6">
                            <label for="">INMUEBLE</label>    
                            <select type="text" class="form-control" id="Inmueble" name="Inmueble" >
                            </select>
                        </div> 

                        <div class="col-md-4">
                            <label for="">SEGMENTO</label>    
                            <input type="text" class="form-control" id="SegmentoD" name="SegmentoD" placeholder="X">
                        </div> 
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DEL TERRENO</label>    
                            <input type="text" class="form-control" id="SuperficieT" name="SuperficieT" placeholder="X">
                        </div> 
                        <div class="col-md-4">
                            <label for="">SECCION</label>    
                            <input type="text" class="form-control" id="SeccionD" name="SeccionD" placeholder="X">
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO DE VIVIENDAS</label>    
                            <input type="text" class="form-control" id="NumeroViviendas" name="NumeroViviendas" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">FECHA DE INICIO</label>    
                            <input type="text" class="form-control" id="Finicio" name="Finicio" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">FECHA DE TERMINO</label>    
                            <input type="text" class="form-control" id="Ftermino" name="Ftermino" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">CALLE</label>    
                            <input type="text" class="form-control" id="Calle" name="Calle" placeholder="LOMA DEL PEDREGAL">
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>    
                            <input type="text" class="form-control" id="No" name="No" placeholder="417">
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>    
                            <input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="LOMAS DEL CAMPESTRE">
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option></option>
                                <option value="PROPIO">PROPIO</option>
                                <option value="FIDEICOMISO">FIDEICOMISO</option>
                                <option value="CONTRATO DE OBRA">CONTRATO DE OBRA</option>
                                <option value="COMERCIALIZACION DE MATERIALES">COMERCIALIZACION DE MATERIALES</option> 
                            </select>
                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <button type="button" class="btn btn-default fa-lg" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-3x">
                                </span> 
                                <H1> SUBIR LOGO O IDENTIDAD DEL PROYECTO</h1>
                            </button>
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button type="button" class="btn btn-default fa-lg" id="btnModificar"><span class="fa fa-check fa-3x success-icon"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--SCRIPT-->

<script>
    var master_url = base_url + 'index.php/ctrlProyectos/';
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");

    var Archivo = mdlNuevo.find("#RutaLogo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var ModificarArchivo = mdlEditar.find("#RutaLogo");
    var btnModificarArchivo = mdlEditar.find("#btnArchivo");
    var ModificarVistaPrevia = mdlEditar.find("#VistaPrevia");
    var btnModificar = mdlEditar.find("#btnModificar");

    var btnRefrescar = $("#btnRefrescar");

    var btnEliminar = $("#btnEliminar");

    $(document).ready(function () {

        btnEliminar.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
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
                    console.log(data);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PROYECTO ELIMINADO', 'danger');
                    getRecords();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        
        btnRefrescar.click(function () {
            getRecords();
        });


        btnModificar.click(function () {
            var frm = new FormData(mdlEditar.find("#frmEditar")[0]);
            $.ajax({
                url: master_url + 'onModificar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN PROYECTO', 'success');
                getRecords();
                mdlEditar.modal('hide');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEditar.click(function () {
            getInmuebles();
            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getProyectoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    btnEditar.find("input").val("");
                    btnEditar.find("select").empty().select2();
                    btnEditar.find("select").val(null).trigger("change");
                    var proyecto = data[0];
                    mdlEditar.find("#ID").val(proyecto.ID);
                    mdlEditar.find("#Empresa").val(proyecto.IdEmpresa);
                    mdlEditar.find("#Empresa").select2("val",proyecto.IdEmpresa);
                    mdlEditar.find("#Actividad").val(proyecto.IdActividad);
                    mdlEditar.find("#Actividad").select2("val",proyecto.IdActividad);
                    mdlEditar.find("#Proyecto").val(proyecto.Proyecto);
                    mdlEditar.find("#Descripcion").val("");
                    mdlEditar.find("#Descripcion").val(proyecto.Descripcion);
                    mdlEditar.find("#Modelo").val(proyecto.Modelo);
                    mdlEditar.find("#Modelo").select2("val",proyecto.Modelo);
                    mdlEditar.find("#Inmueble").select2("val",proyecto.Inmueble);
                    mdlEditar.find("#Tipo").select2("val",proyecto.Tipo);
                    mdlEditar.find("#SegmentoD").val(proyecto.SegmentoD);
                    mdlEditar.find("#SuperficieT").val(proyecto.SuperficieT);
                    mdlEditar.find("#SeccionD").val(proyecto.SeccionD);
                    mdlEditar.find("#NumeroViviendas").val(proyecto.NumeroViviendas);
                    mdlEditar.find("#Finicio").val(proyecto.Finicio);
                    mdlEditar.find("#Ftermino").val(proyecto.Ftermino);
                    mdlEditar.find("#Calle").val(proyecto.Calle);
                    mdlEditar.find("#No").val(proyecto.No);
                    mdlEditar.find("#Colonia").val(proyecto.Colonia);
                    if (proyecto.rImagen !== null && proyecto.rImagen !== undefined && proyecto.rImagen !== '') {
                        var ext = getExt(proyecto.rImagen);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' +  proyecto.rImagen + '" class ="img-responsive"/>');
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' +  proyecto.rImagen + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        mdlEditar.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
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
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            $.ajax({
                url: master_url + 'onAgregar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO PROYECTO', 'success');
                getRecords();
                mdlNuevo.modal('hide');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnArchivo.click(function () {
            Archivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(Archivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + Archivo[0].files[0].name + '</p>\n\
                                    </div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(Archivo[0].files[0]);
                    } else {
                        VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
                HoldOn.close();
            });
            Archivo.trigger('click');
        });


        btnModificarArchivo.click(function () {
            ModificarArchivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(ModificarArchivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                                    </div>';
                        ModificarVistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(ModificarArchivo[0].files[0]);
                } else {
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            ModificarVistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(ModificarArchivo[0].files[0]);
                    } else {
                        ModificarVistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
                HoldOn.close();
            });
            ModificarArchivo.trigger('click');
        });

        btnNuevo.click(function () {
            getInmuebles();
            mdlNuevo.find("#Descripcion").val("");
            mdlNuevo.modal('show');
        }); 
        /*CALLS*/
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
            $("#tblRegistros").html(getTable('tblEmpresas', data));
            $('#tblEmpresas tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblEmpresas').DataTable(tableOptions);
            $('#tblEmpresas tbody').on('click', 'tr', function () {
                $("#tblEmpresas").find("tr").removeClass("success");
                $("#tblEmpresas").find("tr").removeClass("warning");
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
            $('#tblEmpresas tbody').on('dblclick', 'tr', function () {
                $("#tblEmpresas").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
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

    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
    }
    
    function getInmuebles() {
        $.ajax({
            url: master_url + 'getInmuebles',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            console.log('* * * * * OPTIONS * * * * * ');
            $.each(data, function (k, v) {
//                console.log(v)
                options += '<option value="' + v.ID + '">' + v.INMUEBLE + '</option>';
            });
            console.log('* * * * * OPTIONS * * * * * ');
            mdlNuevo.find("#Inmueble").html(options);
            mdlEditar.find("#Inmueble").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        getEmpresas() ;
    }
    
    function getEmpresas() {
        $.ajax({
            url: master_url + 'getEmpresas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            console.log('* * * * * OPTIONS * * * * * ');
            $.each(data, function (k, v) {
//                console.log(v)
                options += '<option value="' + v.ID + '">' + v.EMPRESA + '</option>';
            });
            console.log('* * * * * OPTIONS * * * * * ');
            mdlNuevo.find("#Empresa").html(options);
            mdlEditar.find("#Empresa").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        getActividades();
    }
    
    function getActividades() {
        $.ajax({
            url: master_url + 'getActividades',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            console.log('* * * * * OPTIONS * * * * * ');
            $.each(data, function (k, v) {
//                console.log(v)
                options += '<option value="' + v.ID + '">' + v.ACTIVIDAD + '</option>';
            });
            console.log('* * * * * OPTIONS * * * * * ');
            mdlNuevo.find("#Actividad").html(options);
            mdlEditar.find("#Actividad").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>