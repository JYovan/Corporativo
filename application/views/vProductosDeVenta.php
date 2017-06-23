<div class="panel panel-primary">
    <div class="panel-heading container-fluid">
        <div class="col-md-4"><a href="<?php print base_url() . "index.php/ctrlPuntoDeVenta/" ?>"><span class="fa fa-arrow-left text-white"></span></a></div>
        <div class="col-md-4" align="center"><h3 class="panel-title">CONFIRMACION Y ASIGNACION DE CODIGOS DE BARRAS</h3></div>
        <div class="col-md-4"></div>

    </div>
    <div class="panel-body">
        <div class="col-md-12" align="center">
            <button id="btnNuevo" type="button" class="btn btn-raised btn-default fa-lg" ><span class="fa fa-plus"></span><br>NUEVO</button>
            <button type="button" id="btnEditar" class="btn btn-raised btn-default fa-lg" ><span class="fa fa-pencil"></span><br>EDITAR</button>
            <button type="button" class="btn btn-raised btn-default fa-lg" id="btnRefrescar"><span class="fa fa-refresh"></span><br>REFRESCAR</button>
        </div>
        <div class="col-md-12" id="CajasDeVenta"></div>
    </div>
</div>


<!--MODAL NUEVO-->

<div class="modal animated rubberBand" id="mdlNuevo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">NUEVA CONFIRMACION Y ASIGNACION DE CODIGO DE BARRAS</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12" id="tblProductosAsignadosAVenta">
                            <table class="table table-striped table-hover hide">
                                <thead>
                                    <tr>
                                        <th>ID</th><!---1--->
                                        <th>IdAlmacen</th>
                                        <th>IdProducto</th>
                                        <th>Producto</th>
                                        <th>IdProveedor</th><!---5--->
                                        <th>Proveedor</th>
                                        <th>Tipo</th>
                                        <th>TipoT</th>
                                        <th>Cantidad</th>
                                        <th>Observaciones</th><!---10--->
                                        <th>Estatus</th>
                                        <th>Modificacion</th>
                                        <th>Registro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <label for="">Seleccionar Producto</label>
                            <select id="Producto" name="Producto" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Seleccionar Proveedor</label>
                            <select id="Proveedor" name="Proveedor" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Unidad de medida de venta</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Forma de venta</label>
                            <select class="form-control" id="" name="">
                                <option></option>
                                <option value="1">UNIDAD O PIEZA</option>
                                <option value="2">PAQUETE</option>
                                <option value="3">CAJA</option>
                                <option value="4">A GRANEL</option>
                            </select>
                        </div>
                        <div class="col-md-12" align="center">
                            <h3>Rellenar según la opción que se elija de forma de venta</h3>
                        </div>
                        <div class="col-md-4">
                            <label for="">Cantidad en paquete</label>
                            <input type="number" class="form-control" id="CantidadEnPaquete" name="CantidadEnPaquete" min="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Cantidad en caja</label>
                            <input type="number" class="form-control" id="CantidadEnCaja" name="CantidadEnCaja" min="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Cantidad a granel</label>
                            <input type="number" class="form-control" id="CantidadAGranel" name="CantidadAGranel" min="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio costo(OC)</label>
                            <input type="number" class="form-control" id="PrecioCosto" name="PrecioCosto" min="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio venta</label>
                            <input type="number" class="form-control" id="PrecioVenta" name="PrecioVenta" min="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio mayoreo</label>
                            <input type="number" class="form-control" id="PrecioMayoreo" name="PrecioMayoreo" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">DEPARTAMENTO DEL ALMACÉN</label>
                            <select id="Departamento" name="Departamento" class="form-control"></select>
                        </div>
                        <div class="col-md-6">
                            <label for="">SUBCATEGORÍA</label>
                            <select id="" name="" class="form-control"></select>
                        </div>
                        <div class="col-md-12" align="center">
                            <h3>Datos de inventario</h3>
                        </div>
                        <div class="col-md-4">
                            <label for="">Este producto utiliza inventario</label>
                            <select id="" name="" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Cantidad Actual</label>
                            <input type="number" class="form-control" id="" name="" min="0">
                        </div>
                        <div class="col-md-4">
                            <label for="">Minimo en existencia</label>
                            <input type="number" class="form-control" id="" name="" min="0">
                        </div>
                        <div class="col-md-12">
                            <label for="">Asignar código de barrras de producto de venta</label>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button type="button" class="btn btn-success fa-lg" id="btnGuardar"><span class="fa fa-check fa-2x success-icon"></span></button>
            </div>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + 'index.php/ctrlProductoDeVenta/';
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    // IIFE - Immediately Invoked Function Expression
    (function(evt) {
        // The global jQuery object is passed as a parameter
        evt(window.jQuery, window, document);
    }
    (function($, window, document) {
        // The $ is now locally scoped
        // Listen for the jQuery ready event on the document
        $(function() {
            btnNuevo.on("click", function() {
                getRecords();
                mdlNuevo.modal('show');
            });
            /*START METHODS*/
            getProveedoresXProductosAsignados();
            getProductosAsignados();
            getCategoriasDeMateriales();
        });
        // The rest of the code goes here!


        function getRecords() {
            temp = 0;
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getProductosAsignadosXAlmacen',
                type: "POST",
                dataType: "JSON"
            }).done(function(data, x, jq) {
                console.log(data);
                mdlNuevo.find("#tblProductosAsignadosAVenta").html(getTable('tblProductosAsignados', data));
                mdlNuevo.find('#tblProductosAsignados tfoot th').each(function() {
                    var title = $(this).text();
                    //   $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                    //  $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div>');
                    $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');

                });
                var tblSelected = mdlNuevo.find('#tblProductosAsignados').DataTable(tableOptions);
                mdlNuevo.find('#tblProductosAsignados tbody').on('click', 'tr', function() {
                    mdlNuevo.find("#tblProductosAsignados").find("tr").removeClass("success");
                    mdlNuevo.find("#tblProductosAsignados").find("tr").removeClass("warning");
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
                mdlNuevo.find('#tblProductosAsignados tbody').on('dblclick', 'tr', function() {
                    $("#tblProductosAsignados").find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt(dtm[0]);
                    btnEditar.trigger("click");
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

        function getProductosAsignados() {
            $.ajax({
                url: master_url + 'getProductosAsignados',
                type: "POST",
                dataType: 'JSON'
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                var options = '<option></option>';
                $.each(data, function(k, v) {
                    options += '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
                });
                mdlNuevo.find("#Producto").html(options);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        }
        function getProveedoresXProductosAsignados() {
            $.ajax({
                url: master_url + 'getProveedoresXProductosAsignados',
                type: "POST",
                dataType: 'JSON'
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                var options = '<option></option>';
                $.each(data, function(k, v) {
                    options += '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
                });
                mdlNuevo.find("#Proveedor").html(options);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        }
        function getCategoriasDeMateriales() {
            $.ajax({
                url: master_url + 'getCategoriasDeMateriales',
                type: "POST",
                dataType: 'JSON'
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                var options = '<option></option>';
                $.each(data, function(k, v) {
                    options += '<option value="' + v.ID + '">' + v.CATEGORIA + '</option>';
                });
                mdlNuevo.find("#Departamento").html(options);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        }

    }));
</script>