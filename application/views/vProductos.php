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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE PRODUCTOS <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <div align="center">
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-default btn-lg fa-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x info-icon"></span>
                            </button>
                        </span>
                        <button id="btnEditar" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR">
                            <span class="fa fa-pencil fa-3x success-icon"></span>
                        </button>
                        <button id="btnRefresh" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x warning-icon"></span>
                        </button>
                        <button id="btnEliminar" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ELIMINAR PRODUCTO">
                            <span class="fa fa-ban fa-3x danger-icon"></span>
                        </button>
                        <button id="btnPrecios" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CONSULTAR PRECIOS">
                            <span class="fa fa-money fa-3x purple-icon"></span>
                        </button>
                        <button id="btnEditarPrecio" class="btn btn-default btn-lg fa-lg disabled" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR PRECIO"> 
                            <span class="fa fa-usd fa-3x bluegrey-icon"></span>
                            <span class="fa fa-pencil fa-3x bluegrey-icon"></span> 
                        </button>
                        <button id="btnEliminarPrecio" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ELIMINAR PRECIO">
                            <span class="fa fa-ban fa-3x success-icon"></span>
                        </button>
                        <button id="btnAsignar" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ASIGNAR PRODUCTOS">
                            <span class="fa fa-share fa-3x danger-icon"></span>
                        </button>
                        <button id="btnGeneradorCodigos" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="GENERADOR DE CÓDIGOS DE BARRAS">
                            <span class="fa fa-gear fa-3x kingblue-icon"></span>
                        </button>
                        <button id="btnGenerarCodigo" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="GENERAR CÓDIGO DE BARRAS">
                            <span class="fa fa-barcode fa-3x kingblue-icon"></span>
                        </button>
                    </div>
                    <div id="rBusqueda" class="hide">
                        <fieldset>
                            <div class="col-md-4">
                                <label for="">PRODUCTO</label>
                                <select id="bProducto" name="bProducto" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">PROVEEDOR</label>
                                <select id="bProveedor" name="bProveedor" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PRECIO</label>
                                <input type="text" id="bPrecio" name="bPrecio" class="form-control" placeholder="$ 0.0" />
                            </div>
                            <div class="col-md-2">

                                <button id="btnBuscar" class="btn btn-default btn-lg fa-lg" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="BÚSQUEDA ESPECÍFICA">
                                    <span class="fa fa-search fa-3x"></span>
                                </button>
                            </div>
                        </fieldset>
                    </div>

                    <div id="msgProductos" class="col-md-12"></div>

                    <div id="rProductos" class=""></div> 
                </div>
            </div>
        </div>
    </fieldset>
</div>

<div class="modal  animated zoomInUp" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-puzzle-piece fa-lg"></span> NUEVO PRODUCTO O SERVICIO</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-4" align="center">
                            <div id="rDisplay" class="col-md-12">
                            </div>
                            <div class="col-md-12 hide">
                                <input type="file" class="form-control" id="rFile" name="rFile">
                            </div>
                            <div class="col-md-12 cursor-hand" align="center" id="rIcon">
                                <span class="fa fa-upload"></span>
                                <p>SELECCIONAR ARCHIVO</p>
                            </div></div>
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="">NOMBRE DEL PRODUCTO</label>
                                <input type="text" id="Producto" name="Producto" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">CATEGORIA</label>
                                <select id="Etiqueta" name="Etiqueta" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">MARCA</label>
                                <input type="text" id="Marca" name="Marca" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">UNIDAD O MEDIDA</label>
                                <input type="text" id="UnidadMedida" name="UnidadMedida" class="form-control">
                            </div> 
                            <div class="col-md-12">
                                <label for="">PROVEEDOR</label>
                                <select id="Proveedores" name="Proveedores" class="form-control">

                                </select>
                            </div>
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

<div class="modal animated bounce" id="mdlGeneradorCodigos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">GENERADOR DE CODIGOS DE BARRAS</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12"> 

                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button type="button" class="btn btn-default fa-lg"><span class="fa fa-check fa-3x success-icon"></span></button>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        var rFile = $("#rFile");
        var rIcon = $("#rIcon");
        var rDisplay = $("#rDisplay");
        rIcon.click(function () {
            rFile.trigger('click');
        });
        rFile.change(function () {
            var imageType = /image.*/;
            if (rFile[0].files[0] !== undefined && rFile[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    rDisplay.html('<img src="' + reader.result + '" width="262" height="262">');
                };
                reader.readAsDataURL(rFile[0].files[0]);
            } else {
                if (rFile[0].files[0] !== undefined && rFile[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        rDisplay.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(rFile[0].files[0]);
                } else {
                    rDisplay.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });
    });
</script>

<div class="modal  animated zoomInUp" id="mdlModificar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-puzzle-piece fa-lg"></span> NUEVO PRODUCTO O SERVICIO</h2>
            </div>
            <form id="frmModificar">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-12">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE DEL PRODUCTO</label>
                            <input type="text" id="Producto" name="Producto" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">CATEGORIA</label>
                            <select id="Etiqueta" name="Etiqueta" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MARCA</label>
                            <input type="text" id="Marca" name="Marca" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">UNIDAD O MEDIDA</label>
                            <input type="text" id="UnidadMedida" name="UnidadMedida" class="form-control">
                        </div> 
                        <div class="col-md-8">
                            <label for="">PROVEEDOR</label>
                            <select id="Proveedores" name="Proveedores" class="form-control">

                            </select>
                        </div>
                        <div id="msgUpdate" class="col-md-12"></div>
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



<div class="modal  animated zoomInUp" id="mdlPrecioXProveedor" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-puzzle-piece fa-lg"></span>ASIGNAR PRODUCTO O SERVICIO A PROVEEDOR</h2>
            </div>
            <form id="frmPrecioXProveedor">
                <div class="modal-body">
                    <fieldset class=""> 
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROVEEDOR</label>
                            <select id="Proveedor" name="Proveedor" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRODUCTO O SERVICIO</label>
                            <select id="IdProducto" name="IdProducto" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO</label>
                            <input type="number" id="Precio" name="Precio" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DEL PRECIO</label>
                            <input type="text" id="FechaPrecio" name="FechaPrecio" class="form-control" value="<?php print Date('d/m/Y'); ?>" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-11">
                        </div> 
                        <div id="msgPrecioXProveedor" class="col-md-12">

                        </div>

                        <div id="rPrecioXProveedor" class="col-md-12">
                        </div>
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


<div class="modal  animated zoomInUp" id="mdlEditarPrecioXProveedor" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-puzzle-piece fa-lg"></span>EDITAR PRECIO DE PRODUCTO O SERVICIO</h2>
            </div>
            <form id="frmPrecioXProductoYProveedor">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-12">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PRODUCTO O SERVICIO</label>
                            <input type="text" id="IdProducto" name='IdProducto' class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="Proveedor" name="Proveedor" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO</label>
                            <input type="number" id="Precio" name="Precio" class="form-control" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DEL PRECIO</label>
                            <input type="text" id="FechaPrecio" name="FechaPrecio" class="form-control" value="" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-11">
                        </div>  
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


<div class="modal  animated zoomInUp" id="mdlProductosXProveedor" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-puzzle-piece fa-lg"></span> PRODUCTOS O SERVICIOS POR PROVEEDOR</h2>
            </div>
            <form id="frmPrecioXProveedor">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-12">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-5">
                            <label for="">PROVEEDOR</label>
                            <select id="Proveedor" name="Proveedor" class="form-control">

                            </select>
                        </div>

                        <div class="col-md-5">
                            <label for="">PRODUCTO O SERVICIO</label>
                            <select id="IdProducto" name="IdProducto" class="form-control">

                            </select>
                        </div>
                        <div id="msgPrecioXProveedor" class="col-md-12"></div>
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
    var master_url = base_url + 'index.php/ctrlProductos/';

    var btnEliminar = $("#btnEliminar");
    var btnEliminarPrecio = $("#btnEliminarPrecio");
    var btnGenerarCodigo = $("#btnGenerarCodigo");
    var btnGeneradorCodigos = $("#btnGeneradorCodigos");
    var mdlGeneradorCodigos = $("#mdlGeneradorCodigos");

    $(document).ready(function () {

        btnGeneradorCodigos.click(function(){
           mdlGeneradorCodigos.modal('show'); 
        });

        btnGenerarCodigo.click(function () {
            if (temp !== undefined && temp !== null && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GENERANDO... POR FAVOR ESPERE"
                });
                $.ajax({
                    url: master_url + 'onGenerarCodigoXProducto',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CODIGO GENERADO', 'success');
                    window.open(data, '_blank');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnEliminarPrecio.click(function () {
            console.log(temp);
            if (temp !== undefined && temp !== null && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ELIMINANDO... POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminarPrecio',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    $("#btnPrecios").trigger('click');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PRECIO, ELIMINADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnEliminar.click(function () {
            console.log(temp);
            if (temp !== undefined && temp !== null && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ELIMINANDO... POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminar',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    onRefresh();
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        onRefresh();

        $("#mdlPrecioXProveedor #IdProducto").change(function () {
            onCheckPrice();
        });


        $("#mdlPrecioXProveedor #Proveedor").change(function () {
            onCheckPrice();
        });

        var btnAsignarPXP = $("#mdlPrecioXProveedor #btnGuardar");
        btnAsignarPXP.click(function () {
            $(btnAsignarPXP).addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            var frm = $("#frmPrecioXProveedor").serialize();
            $.ajax({
                url: master_url + 'onAddAsignacion',
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                if (parseInt(data) === 1) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'PRODUCTO ASIGNADO', 'success');
                    $("#mdlPrecioXProveedor").modal('hide');
                    $("#btnPrecios").trigger('click');
                } else {
                    $("#mdlPrecioXProveedor #msgPrecioXProveedor").html('<span class="label label-danger">NO SE HA PODIDO ASIGNAR EL PRODUCTO</span>');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'PRECIO ACTUALIZADO', 'success');
                }
            }).fail(function (x, y, z) {
                $("#mdlPrecioXProveedor #msgPrecioXProveedor").html('<span class="label label-danger">NO SE HA PODIDO ASIGNAR EL PRODUCTO</span>');
                console.log(x, y, z);
            }).always(function () {
                $(btnAsignarPXP).removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
                console.log('OPERACION COMPLETADA');
            });
        });

        var btnPXPGuardar = $("#mdlEditarPrecioXProveedor #btnGuardar");
        btnPXPGuardar.click(function () {
            $(btnPXPGuardar).addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            var precio = $("#mdlEditarPrecioXProveedor #Precio").val();
            if (precio !== undefined && precio !== '') {
                $.ajax({
                    url: master_url + 'onUpdatePrecioXProductoYProveedor',
                    type: "POST",
                    data: {
                        ID: $("#mdlEditarPrecioXProveedor #ID").val(),
                        PRECIO: $("#mdlEditarPrecioXProveedor #Precio").val()
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    $("#mdlEditarPrecioXProveedor").modal('toggle');
                    $("#btnPrecios").trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'PRECIO ACTUALIZADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    $(btnPXPGuardar).removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
                    console.log('OPERACION COMPLETADA');
                });
            }
        });

        $("#mdlPrecioXProveedor").on('show.bs.modal', function () {

        });


        $("#btnAsignar").click(function () {
            $("#mdlPrecioXProveedor").modal('toggle');
        });

        $("#btnEditarPrecio").click(function () {
            console.log(temp);
            if (temp !== undefined && temp !== null && temp !== 0) {
                $("#mdlEditarPrecioXProveedor").modal('toggle');
                $.ajax({
                    url: master_url + 'getPreciosXProductoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    var mdl = $("#mdlEditarPrecioXProveedor");
                    console.log(dtm);
                    $(mdl).find("#ID").val(dtm.ID)
                    $(mdl).find("#IdProducto").val(dtm.PRODUCTO)
                    $(mdl).find("#Proveedor").val(dtm.PROVEEDOR)
                    $(mdl).find("#Precio").val(dtm.PRECIO)
                    $(mdl).find("#FechaPrecio").val(dtm["FECHA DEL PRECIO"])
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('OPERACION FINALIZADA');
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        $("#btnPrecios").click(function () {
            $("#btnEditarPrecio").removeClass("disabled");
            onGetRecordsByPrice("tblPrecioXProducto", master_url + "getPreciosXProducto", "rProductos", "msgProductos", "NO SE ENCONTRARON REGISTROS");
            btnEliminar.addClass("hide");
            btnEliminarPrecio.removeClass("hide");
        });

        $("#mdlNuevo #btnGuardar").click(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            var frm = $("#frmNuevo").serialize();
            $("#mdlNuevo #btnGuardar").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            $("#mdlNuevo #btnGuardar").addClass("disabled");

            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                console.log(parseInt(data) === 1);
                $("#mdlNuevo").modal('toggle');
                $("#btnRefresh").trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                $("#mdlNuevo #btnGuardar").find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                $("#mdlNuevo #btnGuardar").removeClass("disabled");
                HoldOn.close();
            });
        });

        $("#btnEditar").click(function () {
            $("#btnEditar").find("span").removeClass("fa-pencil").addClass("fa-cog fa-spin");
            $("#btnEditar").addClass("disabled");
            onBeforeUpdate();
            setTimeout(function () {
                $("#btnEditar").find("span").removeClass("fa-cog fa-spin").addClass("fa-pencil");
                $("#btnEditar").removeClass("disabled");
            }, 2500);
        });

        $("#mdlModificar #btnGuardar").click(function () {
            var frm = $("#frmModificar").serialize();
            $("#mdlModificar #btnGuardar").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            $("#mdlModificar #btnGuardar").addClass("disabled");
            $.ajax({
                url: master_url + 'onUpdate',
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data)
                console.log(parseInt(data) === 1)
                if (parseInt(data) === 1) {
                    onRefresh();
                    $("#mdlModificar").modal('hide');
                } else {
                    $("#msgUpdate").html('<div class="alert alert-dismissible alert-danger"><h2>NO SE HA PODIDO ACTUALIZAR EL PRODUCTO, REVISE QUE ESTE BIEN CAPTURADO, SIN CARACTERES ESPECIALES O VACIOS</h2></div>')
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z)
            }).always(function () {
                $("#mdlModificar #btnGuardar").find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                $("#mdlModificar #btnGuardar").removeClass("disabled");
            });
        });

        $("#btnRefresh").click(function () {
            $("#btnRefresh").find("span").removeClass("fa-refresh").addClass("fa-cog fa-spin");
            $("#btnRefresh").addClass("disabled");
            onRefresh();
            setTimeout(function () {
                $("#btnRefresh").find("span").removeClass("fa-cog fa-spin").addClass("fa-refresh");
                $("#btnRefresh").removeClass("disabled");
            }, 2500);
        });
    });

    function onRefresh() {

        btnEliminar.removeClass("hide");
        btnEliminarPrecio.addClass("hide");
        getEtiquetas();
        getProductos();
        getProveedores();
        $("#btnEditarPrecio").addClass("disabled");
        onGetRecords("tblProductos", master_url + "getRecords", "rProductos", "msgProductos", "NO SE ENCONTRARON REGISTROS");
    }

    function onBeforeUpdate() {
        console.log('ID TEMPORAL: ' + temp);
        if (temp !== undefined && temp !== null && temp !== 0) {
            $.ajax({
                url: master_url + 'getRecordsByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                var dtm = data[0];
                console.log(dtm);
                $("#mdlModificar").modal('toggle');
                $("#mdlModificar #ID").val(dtm.ID);
                $("#mdlModificar #Producto").val(dtm.Producto);
                $("#mdlModificar #Etiqueta").select2("val", dtm.Etiqueta);
                $("#mdlModificar #Marca").val(dtm.Marca);
                $("#mdlModificar #UnidadMedida").val(dtm.UnidadMedida);
                $("#mdlModificar #Proveedores").select2("val", dtm.Proveedores);

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }

    function onGetRecords(tblname, url, target_result, target_fail_messages, fail_message) {

        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
        temp = 0;
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                var detailRows = [];
                $('#' + tblName + ' tbody').on('click', 'tr td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = tblSelected.row(tr);
                    var idx = $.inArray(tr.attr('id'), detailRows);

                    if (row.child.isShown()) {
                        tr.removeClass('details');
                        row.child.hide();

                        // Remove from the 'open' array
                        detailRows.splice(idx, 1);
                    } else {
                        tr.addClass('details');
                        row.child(format(row.data())).show();

                        // Add to the 'open' array
                        if (idx === -1) {
                            detailRows.push(tr.attr('id'));
                        }
                    }
                });
                tblSelected.on('draw', function () {
                    $.each(detailRows, function (i, id) {
                        $('#' + id + ' td.details-control').trigger('click');
                    });
                });
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
                    temp = parseInt($(dtm[0])[0].innerText);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[0]).find("span").innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    $("#btnEditar").trigger("click");
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onGetRecordsByPrice(tblname, url, target_result, target_fail_messages, fail_message) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
        temp = 0;
        $("#btnPrecios").addClass("disabled").find("span").removeClass("fa-money").addClass("fa-cog fa-spin");
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                var detailRows = [];
                $('#' + tblName + ' tbody').on('click', 'tr td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = tblSelected.row(tr);
                    var idx = $.inArray(tr.attr('id'), detailRows);

                    if (row.child.isShown()) {
                        tr.removeClass('details');
                        row.child.hide();

                        // Remove from the 'open' array
                        detailRows.splice(idx, 1);
                    } else {
                        tr.addClass('details');
                        row.child(format(row.data())).show();

                        // Add to the 'open' array
                        if (idx === -1) {
                            detailRows.push(tr.attr('id'));
                        }
                    }
                });
                tblSelected.on('draw', function () {
                    $.each(detailRows, function (i, id) {
                        $('#' + id + ' td.details-control').trigger('click');
                    });
                });
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
                    temp = parseInt($(dtm[0])[0].innerText);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    //                console.log(dtm);
                    var id = $(dtm[0])[0].innerText;

                    temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    temp = id;
                    console.log('TEMP ID: ' + id);
                    $("#btnEditarPrecio").trigger("click");
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
            $("#btnPrecios").removeClass("disabled").find("span").addClass("fa-money").removeClass("fa-cog fa-spin");
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductos() {
        $.ajax({
            url: master_url + 'getProductosXAsignar',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
                    });
                    $("#mdlPrecioXProveedor #IdProducto").html(options);
                    $("#mdlProductosXProveedor #IdProducto").html(options);
                    $("#mdlPrecioXProveedor #IdProducto").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getEtiquetas() {
        $.ajax({
            url: master_url + 'getEtiquetas',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.ETIQUETA + '</option>';
                    });
                    $("#mdlNuevo #Etiqueta").html(options);
                    $("#mdlModificar #Etiqueta").html(options);
                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getProveedores() {
        $.ajax({
            url: master_url + 'getProveedores',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
                    });
                    $("#mdlNuevo #Proveedores").html(options);
                    $("#mdlModificar #Proveedores").html(options);
                    $("#mdlPrecioXProveedor #Proveedor").html(options);
                    $("#mdlProductosXProveedor #Proveedor").html(options);
                    $("#mdlPrecioXProveedor #Proveedor").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getPreciosXProducto() {
        $("#tblPreciosXProducto").html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: master_url + 'getPreciosXProducto',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var tblName = 'tblPreciosXProducto';
            if (data.length > 0) {
                $("#rPrecioXProveedor").html(getTable(tblName, data));
                $("#tblPreciosXProducto  tbody > tr").each(function (k, v) {
                    var frow = $(this).find("td");
                    frow[0].innerHTML = '<span class="label label-primary">' + frow[0].innerText + '</span>';

                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                var detailRows = [];
                $('#' + tblName + ' tbody').on('click', 'tr td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = tblSelected.row(tr);
                    var idx = $.inArray(tr.attr('id'), detailRows);

                    if (row.child.isShown()) {
                        tr.removeClass('details');
                        row.child.hide();

                        // Remove from the 'open' array
                        detailRows.splice(idx, 1);
                    } else {
                        tr.addClass('details');
                        row.child(format(row.data())).show();

                        // Add to the 'open' array
                        if (idx === -1) {
                            detailRows.push(tr.attr('id'));
                        }
                    }
                });
                //CLICK SELECTED ROW
                $('#tblPreciosXProducto tbody').on('click', 'tr', function () {
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
                    console.log(dtm);
                    temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[1]));
                    console.log($(dtm[2]));
                    console.log($(dtm[3]));
                    $("#mdlPrecioXProveedor #ID").val($(dtm[0])[0].innerText);
                    $("#mdlPrecioXProveedor #IdProducto").val($(dtm[1])[0].innerText);
                    $("#mdlPrecioXProveedor #Proveedor").val($(dtm[2])[0].innerText);
                    $("#mdlPrecioXProveedor #Precio").val($(dtm[3])[0].innerText);
                    $("#mdlPrecioXProveedor #FechaPrecio").val($(dtm[4])[0].innerText);

                });
            } else {

            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('BUSCANDO PRECIOS...');
        });

    }

    function getPreciosXProductoByIDS() {
        var producto = $("#mdlPrecioXProveedor #IdProducto").val();
        var proveedor = $("#mdlPrecioXProveedor #Proveedor").val();
        console.log(producto, proveedor);
        $("#tblPreciosXProducto").html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        if (producto !== undefined && producto !== '' &&
                proveedor !== undefined && proveedor !== '') {
            $.ajax({
                url: master_url + 'getPreciosXProductoByIDS',
                type: "POST",
                dataType: "JSON",
                data: {
                    IDPRODUCTO: producto,
                    IDPROVEEDOR: proveedor
                }
            }).done(function (data, x, jq) {
                console.log(data);
                var tblName = 'tblPreciosXProducto';
                if (data.length > 0) {
                    $("#rPrecioXProveedor").html(getTable(tblName, data));
                    $("#tblPreciosXProducto  tbody > tr").each(function (k, v) {
                        var frow = $(this).find("td");
                        frow[0].innerHTML = '<div class="text-center"><span class="label label-primary">' + frow[0].innerText + '</span></div>';
                    });
                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    var detailRows = [];
                    $('#' + tblName + ' tbody').on('click', 'tr td.details-control', function () {
                        var tr = $(this).closest('tr');
                        var row = tblSelected.row(tr);
                        var idx = $.inArray(tr.attr('id'), detailRows);

                        if (row.child.isShown()) {
                            tr.removeClass('details');
                            row.child.hide();

                            // Remove from the 'open' array
                            detailRows.splice(idx, 1);
                        } else {
                            tr.addClass('details');
                            row.child(format(row.data())).show();

                            // Add to the 'open' array
                            if (idx === -1) {
                                detailRows.push(tr.attr('id'));
                            }
                        }
                    });
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
                        temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    });
                } else {

                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('BUSCANDO PRECIOS...');
            });
        } else {

        }

    }

    function onCheckPrice() {
        var producto = $("#mdlPrecioXProveedor #IdProducto").val();
        var proveedor = $("#mdlPrecioXProveedor #Proveedor").val();
        $("#mdlPrecioXProveedor #rPrecioXProveedor").html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: master_url + 'getProductoXProveedor',
            type: "POST",
            dataType: "JSON",
            data: {
                PRODUCTO: producto,
                PROVEEDOR: proveedor
            }
        }).done(function (data, x, jq) {
            var tblName = 'tblPrecioXProveedorActual';
            if (data.length > 0) {
                $("#mdlPrecioXProveedor #rPrecioXProveedor").html('');
                $("#mdlPrecioXProveedor #rPrecioXProveedor").html(getTable(tblName, data));
                $("#tblPrecioXProveedorActual  tbody > tr").each(function (k, v) {
                    var frow = $(this).find("td");
                    frow[0].innerHTML = '<span class="label label-primary">' + frow[0].innerText + '</span>';
                    frow[4].innerHTML = '<span class="label label-emerald">' + frow[4].innerText + '</span>';
                    frow[5].innerHTML = '<span class="label label-info">' + frow[5].innerText + '</span>';
                });
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
                });
            } else {
                $("#mdlPrecioXProveedor #rPrecioXProveedor").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblName);
        }).fail(function (x, z, y) {
            console.log(x, y, z);
        }).always(function () {
            console.log('OPERACION COMPLETADA');
        });
    }
</script>