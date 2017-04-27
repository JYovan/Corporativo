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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE SUMINISTRO DE MATERIALES <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
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
                            <button class="btn btn-info btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                        <button id="btnEditar" class="btn btn-success btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR">
                            <span class="fa fa-pencil fa-3x"></span>
                        </button>
                        <button id="btnAsignar" class="btn btn3d btn-king-blue btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ASIGNAR PRODUCTOS">
                            <span class="fa fa-arrow-down fa-3x"></span>
                        </button>
                        <button id="btnRefresh" class="btn btn-warning btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x"></span>
                        </button>
                        <button id="btnMovimientos" class="btn btn-a-orange btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="MOVIMIENTOS">
                            <span class="fa fa-eye fa-3x"></span>
                        </button>
                        <button id="btnNuevoMovimiento" class="btn btn-indigo btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO MOVIMIENTO">
                            <span class="fa fa-sign-in fa-3x"></span>
                        </button>
                        <button id="btnRecepcion" class="btn btn-danger btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR MOVIMIENTO">
                            <span class="fa fa-times fa-3x"></span>
                        </button>
                    </div>
                    <div id="msgAlmacen" class="col-md-12"></div>
                    <div id="rAlmacen" class=""></div> 
                </div>
            </div>
        </div>
    </fieldset>
</div>

<div id="mdlNuevo" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO ALMACEN </h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <INPUT type="text" id="Nombre" name="Nombre" class="form-control" placeholder="NOMBRE DEL ALMACEN" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-6">
                            <label for="">PAÍS</label>
                            <select id="Pais" name="Pais" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select id="Municipio" name="Municipio" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="EJ: LOMAS DEL CAMPESTRE">
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="EJ: LOMAS DEL PEDREGAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text"  id="Numero" name="Numero" class="form-control" placeholder="417">
                        </div>
                        <div class="col-md-4">
                            <label for="">RESPONSABLE</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>  
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlModificar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO ALMACEN </h2>
            </div> 
            <form id="frmModificar">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" placeholder="" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">PAÍS ACTUAL</label>
                            <input type="text" id="Pais" name="Pais" class="form-control" placeholder="" readonly="">
                            <label for="">PAÍS</label>
                            <select id="PaisU" name="PaisU" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO ACTUAL</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" readonly="">
                            <label for="">ESTADO</label>
                            <select id="EstadoU" name="EstadoU" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD ACTUAL</label>
                            <input type="text" id="Municipio" name="Municipio" class="form-control" placeholder="" readonly="">

                            <label for="">CIUDAD</label>
                            <select id="MunicipioU" name="MunicipioU" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="EJ: LOMAS DEL PEDREGAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text"  id="Numero" name="Numero" class="form-control" placeholder="417">
                        </div>
                        <div class="col-md-4">
                            <label for="">RESPONSABLE</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>  
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlNuevoMovimiento" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO MOVIMIENTO</h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-4">
                            <label for="">Almacén de resguardo </label>
                            <select id="Almacen" name="Almacen" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">PRODUCTO</label>
                            <select id="Producto" name="Producto" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">Condiciones del articulo</label>
                            <select id="Estado" name="Estado" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">Forma de entrada</label>
                            <select id="FormaEntrada" name="FormaEntrada" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">Número de unidades ingresadas</label>
                            <input type="number" id="Unidades" name="Unidades" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Fecha de ingreso</label>
                            <input type="text" id="FechaIngreso" name="FechaIngreso" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-4">
                            <label for="">Para Tipo de Vivienda </label>
                            <input type="text"  id="TipoVivienda" name="TipoVivienda" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="">Procedencia </label>
                            <select id="Procedencia" name="Procedencia" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">Proveedor </label>
                            <select id="Proveedor" name="Proveedor" class="form-control">
                            </select>  
                        </div> 
                        <div class="col-md-4">
                            <label for="">Nombre de quien entrega</label>
                            <select id="Entrega" name="Entrega" class="form-control">
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label for="">Referencia de orden de compra</label>
                            <input type="text" id="RefOrden" name="RefOrden" class="form-control" />  
                        </div>
                        <div class="col-md-4">
                            <label for="">Referencia de factura</label>
                            <input type="text" id="RefFactura" name="RefFactura" class="form-control" />  
                        </div>
                        <div class="col-md-4">
                            <label for="">Recibe en instalaciones del proveedor</label>
                            <input type="text" id="RecibeProveedor" name="RecibeProveedor" class="form-control" />  
                        </div>
                        <div class="col-md-4">
                            <label for="">Recibe en almacén</label>
                            <input type="text" id="RecibeAlmacen" name="RecibeAlmacen" class="form-control" />  
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>


<div id="mdlAsignacion" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">ASIGNACIÓN DE PRODUCTOS AL ALMACÉN</h2>
            </div> 
            <form id="frmAsignacion">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-4">
                            <label for="">ALMACEN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                            </select>  
                        </div>
                        <!--                        <div class="col-md-6">
                                                    <label for="">PRODUCTO</label>
                                                    <select id="IdProducto" name="IdProducto" class="form-control">
                                                    </select>  
                                                </div>-->
                        <div class="col-md-4">
                            <label for="">PROVEEDOR</label>
                            <select id="IdProveedor" name="IdProveedor" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4 hide">
                            <label for="">USUARIO</label>
                            <select id="IdUsuario" name="IdUsuario" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option value="1">ENTRADA</option>
                                <option value="2">SALIDA</option>
                                <option value="3">CONTEO FISICO</option>
                                <option value="4">OTRO</option>
                            </select>  
                        </div>
                        <!--                        <div class="col-md-4 hide">
                                                    <label for="">CANTIDAD</label>
                                                    <input type="number" id="Cantidad" name="Cantidad" class="form-control" placeholder="0" min="1">
                                                </div>-->
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea id="Observaciones" name="Observaciones" rows="5" cols="20" class="form-control">
                            </textarea> 
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="txtSearch" name="txtSearch" class="form-control" placeholder="NOMBRE DEL PRODUCTO">
                        </div> 
                        <div class="col-md-2"  id="nProductos"></div>
                        <div class="col-md-2"  align="left">
                            <button id="btnRemoverTodos"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="QUITAR TODOS" class="btn btn3d btn-danger"><span class="fa fa-arrow-left fa-2x"></span></button>
                            <button id="btnAgregarTodos"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="AGREGAR TODOS" class="btn btn3d btn-success"><span class="fa fa-arrow-right fa-2x"></span></button>
                        </div>
                        <div class="col-md-4" id="nProductosAsignados" align="center"></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6" id="dtblProductos">
                            <table id="tblProductos" class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th class="hide">#</th>
                                        <th>Column heading</th>
                                        <th>Column heading</th>
                                        <th>Column heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6" id="dtblProductosAsignados">
                            <div class=""></div>
                            <table id="tblProductosAsignados" class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th class="hide">#</th>
                                        <th colspan="2">PRODUCTO ASIGNADO</th>
                                        <th>QUITAR</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + 'index.php/ctrlAlmacen/';

    var mdlNuevo = $("#mdlNuevo");
    var mdlModificar = $("#mdlModificar");

    var frmNuevo = mdlNuevo.find("#frmNuevo");
    var btnSave = mdlNuevo.find("#btnSave");
    var btnEditar = $("#btnEditar");

    var frmModificar = mdlModificar.find("#frmModificar");
    var btnSaveU = mdlModificar.find("#btnSave");

    var btnRefresh = $("#btnRefresh");

    var Pais = mdlNuevo.find("#Pais");
    var Estado = mdlNuevo.find("#Estado");
    var Municipio = mdlNuevo.find("#Municipio");
    var Responsable = mdlNuevo.find("#Responsable");

    var btnNuevoMovimiento = $("#btnNuevoMovimiento");
    var mdlNuevoMovimiento = $("#mdlNuevoMovimiento");

    var btnAsignar = $("#btnAsignar");
    var mdlAsignacion = $("#mdlAsignacion");

    var call = $.Callbacks();

    var nProductos = mdlAsignacion.find("#nProductos");
    var nProductosAsignados = mdlAsignacion.find("#nProductosAsignados");
    var btnRemoverTodos = mdlAsignacion.find("#btnRemoverTodos");


    $(document).ready(function () {

        btnRemoverTodos.click(function () {
            onRemoveAsignados();
        });

        var search = $("#txtSearch");
        search.keyup(function () {
            if ($(this).val() !== '') {
                $("#tblProductos tbody tr").addClass("hide");
                var modules = $("#tblProductos tbody").find("tr");
                $.each(modules, function (k, v) {
                    var cell = $(v).find("td");
                    var producto = $(v).find("td")[1].innerText;
                    if (producto.includes(search.val().toUpperCase())) {
                        cell.parent().removeClass("hide").addClass("unhide");
                    } else {
                        cell.parent().removeClass("unhide");
                    }
                });
            } else {
                $("#tblProductos tbody tr").removeClass("hide");
            }
            var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
            nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA ENCONTRADA" : nrow + " FILAS ENCONTRADAS") + "</span>");
        });

        $("#tblProductosAsignados tr").droppable({
            hoverClass: "highlight",
            drop: function (event, e) {

                var row = '<tr>';
                row += e.draggable[0].innerHTML;
                row += "<td><button type=\"button\" class=\"btn btn3d btn-lg btn-danger\">";
                row += "<span class=\"fa fa-minus fa-2x\" onclick=\"onRemove(this)\"></span></button></td>";
                row += "</tr>";

                $("#tblProductosAsignados tbody").append(row);
                $(e.draggable).remove();
                $(e.helper).remove();
                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            }
        });

        mdlAsignacion.on('hidden.bs.modal', function () {
            $("#tblProductosAsignados tbody").empty();
        });

        btnAsignar.click(function () {
            getProyectos();
            getPaises();
            getResponsables();
            getAlmacenes();
//            getProductos();
            getProveedores();
            getProductosNoAsignados();
            mdlAsignacion.modal('show');
        });

        btnNuevoMovimiento.click(function () {
            mdlNuevoMovimiento.modal("show");
        });

        Pais.change(function () {
            getEstadosXPais();
        });

        mdlModificar.find("#PaisU").change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getEstadosXPais',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlModificar.find("#PaisU").val()
                }
            }).done(function (data, x, jq) {
//            console.log(data);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.ESTADO + '</option>';
                });
                mdlModificar.find("#EstadoU").html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        Estado.change(function () {
            getMunicipiosXEstado();
        });

        mdlModificar.find("#EstadoU").change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getMunicipiosXEstado',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlModificar.find("#EstadoU").val()
                }
            }).done(function (data, x, jq) {
//            console.log(data);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MUNICIPIO + '</option>';
                });
                mdlModificar.find("#MunicipioU").html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnRefresh.click(function () {
            onRefresh();
        });

        btnEditar.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && parseInt(temp) > 0) {
                mdlModificar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnSave.click(function () {
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    mdlNuevo.modal('hide');
                    btnRefresh.trigger('click');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnSaveU.click(function () {
            var frm = mdlModificar.find("#frmModificar");
            $.ajax({
                url: master_url + 'onUpdate',
                type: "POST",
                data: frm.serialize()
            }).done(function (data, x, jq) {
                console.log(data);
                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    mdlModificar.modal('hide');
                    btnRefresh.trigger('click');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        mdlModificar.on('show.bs.modal', function () {
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
                mdlModificar.find("#ID").val(dtm.ID);
                mdlModificar.find("#Proyecto").val(dtm.Proyecto);
                mdlModificar.find("#Proyecto").select2('val', dtm.Proyecto);
                mdlModificar.find("#Responsable").val(dtm.ID);
                mdlModificar.find("#Responsable").select2('val', dtm.Responsable);
                mdlModificar.find("#Numero").val(dtm.Numero);
                mdlModificar.find("#Calle").val(dtm.Calle);
                mdlModificar.find("#Colonia").val(dtm.Colonia);
                mdlModificar.find("#Pais").val(dtm.PAIS);
                mdlModificar.find("#Estado").val(dtm.ESTADO);
                mdlModificar.find("#Municipio").val(dtm.MUNICIPIO);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        onRefresh();

    });

    function onRemove(e) {
        console.log('------------------------------------------------------');
        var trow = $(e).parent().parent().parent();
        console.log(trow);
        var tcell = trow.find("td");
        console.log(tcell);
        var xrow = "";
        xrow += "<td>";
        xrow += tcell[0].innerHTML;
        xrow += "</td>";
        xrow += "<td class=\"text-justify\">";
        xrow += tcell[1].innerHTML;
        xrow += "</td>";
        $("#tblProductos tbody tr").draggable("destroy");
        $("#tblProductos tbody").append("<tr data-toggle=\"tooltip\">" + xrow + "</tr>");
        var c = {};
        $("#tblProductos tbody tr").draggable({
            helper: "clone",
            start: function (event, ui) {
                c.tr = this;
                c.helper = ui.helper;
            },
            stop: function (event, ui) {
                var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            },
            zIndex: 10000
        });
        trow.remove();
        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");

        var xnrow = parseInt($("#tblProductosAsignados tbody tr").length);
        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((xnrow === 1) ? xnrow + " FILA" : (xnrow === 0) ? xnrow + " FILAS" : xnrow + " FILAS") + "</span>");
        console.log('------------------------------------------------------');

    }

    function onRefresh() {
        call.add(onGetRecords("tblAlmacenes", master_url + "getRecords", "rAlmacen", "msgAlmacen", "NO SE ENCONTRARON REGISTROS"));
        call.fire();
    }

    function onGetRecords(tblname, url, target_result, target_fail_messages, fail_message)
    {
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
                    temp = $(dtm[0])[0].innerText;
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    $("#btnEditar").trigger("click");
                });
            } else {
                $("#" + target_result).html("");
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {

        });
    }

    function getProyectos()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProyectos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
//            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            mdlNuevo.find("#Proyecto").html(options);
            mdlModificar.find("#Proyecto").html(options);
            mdlNuevoMovimiento.find("#Proyecto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenes()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAlmacenes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            mdlAsignacion.find("#IdAlmacen").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductos()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProductos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlAsignacion.find("#IdProducto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function getProveedores()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProveedores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
            });
            mdlAsignacion.find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getResponsables()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getResponsables',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
//            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>';
            });
            Responsable.html(options);
            mdlModificar.find("#Responsable").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getPaises()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getPaises',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
//            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PAIS + '</option>';
            });
            Pais.html(options);
            mdlModificar.find("#PaisU").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getEstadosXPais()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getEstadosXPais',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: Pais.val()
            }
        }).done(function (data, x, jq) {
//            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ESTADO + '</option>';
            });
            Estado.html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getMunicipiosXEstado()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getMunicipiosXEstado',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: Estado.val()
            }
        }).done(function (data, x, jq) {
//            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.MUNICIPIO + '</option>';
            });
            Municipio.html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosNoAsignados()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        temp = 0;
        $.ajax({
            url: master_url + 'getProductosNoAsignados',
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function (data) {
            var tblName = "tblProductos";
            if (data.length > 0) {
                $("#dtblProductos").html(getTable(tblName, data));
                var thID = $("#" + tblName + " thead").find("th")[0];
                var thPRO = $("#" + tblName + " thead").find("th")[1];
                var thIDf = $("#" + tblName + " tfoot").find("th")[0];
                var thPROf = $("#" + tblName + " tfoot").find("th")[1];
                console.log('******************************************HEADER**********************************************');
                $(thID).addClass("hide");
                $(thPRO).attr('colspan', 2);
                $(thIDf).addClass("hide");
                $(thPROf).attr('colspan', 2);
                console.log('*******************************************END HEADER*********************************************');


                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                });
                var c = {};
                $("#" + tblName + " tbody tr").draggable({
                    helper: "clone",
                    start: function (event, ui) {
                        c.tr = this;
                        c.helper = ui.helper;
                    },
                    stop: function (event, ui) {
                        var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    },
                    zIndex: 10000
                });
                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            } else {
//                $("#" + target_result).html("");
//                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
//                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
//                        '<h1 class="text-center">' + fail_message + '</h1>' +
//                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemoveAsignados() {
//        console.log('------------------------------------------------------');
        $("#tblProductos tbody tr").draggable("destroy");
        $('#tblProductosAsignados > tbody  > tr').each(function () {
            var tcell = $(this).find("td");
            var xrow = "";
            xrow += "<td>";
            xrow += tcell[0].innerHTML;
            xrow += "</td>";
            xrow += "<td class=\"text-justify\">";
            xrow += tcell[1].innerHTML;
            xrow += "</td>";
            $("#tblProductos tbody").append("<tr data-toggle=\"tooltip\">" + xrow + "</tr>");

            console.log('* * * * * * * * * * * * * * * * * * * * * * * REMOVIDO * * * * * * * * * * * * * * * * * * * * ');
            $(this).remove();
            console.log($(this));
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ');
        });
        var c = {};
        $("#tblProductos tbody tr").draggable({
            helper: "clone",
            start: function (event, ui) {
                c.tr = this;
                c.helper = ui.helper;
            },
            stop: function (event, ui) {
                var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            },
            zIndex: 10000
        });

        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");

        var xnrow = parseInt($("#tblProductosAsignados tbody tr").length);
        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((xnrow === 1) ? xnrow + " FILA" : (xnrow === 0) ? xnrow + " FILAS" : xnrow + " FILAS") + "</span>");
        console.log('------------------------------------------------------');
        //        console.log('------------------------------------------------------');
    }
    function onAddAsignados() {
        $('#tblProductosAsignados > tbody  > tr').each(function () {
            if (!$(this).hasClass("hide")) {
                console.log($(this));
            } else {
                
            }
        });
    }
</script>