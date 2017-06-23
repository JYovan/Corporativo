<div class="panel panel-primary">
    <div class="panel-heading container-fluid">
        <div class="col-md-4"><a href="<?php print base_url() . "index.php/ctrlPuntoDeVenta/" ?>"><span class="fa fa-arrow-left text-white"></span></a></div>
        <div class="col-md-4" align="center"><h3 class="panel-title">CAJAS DE VENTA</h3></div>
        <div class="col-md-4"></div>

    </div>
    <div class="panel-body">
        <div class="col-md-12" align="center">
            <button id="btnNuevo" type="button" class="btn btn-raised btn-default fa-lg" ><span class="fa fa-plus"></span><br>NUEVO</button>
            <button type="button" id="btnEditar" class="btn btn-raised btn-default fa-lg" ><span class="fa fa-pencil"></span><br>EDITAR</button>
            <button type="button" class="btn btn-raised btn-default fa-lg" id="btnRefrescar"><span class="fa fa-refresh"></span><br>REFRESCAR</button>
            <button type="button" class="btn btn-raised btn-default fa-lg" id="btnFondoDeCaja"><span class="fa fa-money"></span><br>FONDO DE CAJA</button>
            <button type="button" class="btn btn-raised btn-default fa-lg" id="btnVerFondosDeCaja"><span class="fa fa-eye"></span><br>FONDOS DE CAJAS</button>
        </div>
        <div class="col-md-12" id="CajasDeVenta"></div>
    </div>
</div>


<!--MODAL NUEVO-->

<div class="modal" id="mdlNuevo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">NUEVA CAJA</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">TIPO DE CAJA</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option value=""></option>
                                <option value="1">CAJA PRINCIPAL</option>
                                <option value="2">CAJA ADICIONAL</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE CAJA</label>
                            <select id="NumeroDeCaja" name="NumeroDeCaja" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">UBICACIÓN</label>
                            <select id="Area" name="Area" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CAJERO</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>
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

<!--EDITAR-->

<div class="modal" id="mdlEditar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">EDITAR CAJA</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control hide" readonly="" >
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO DE CAJA</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option value=""></option>
                                <option value="1">CAJA PRINCIPAL</option>
                                <option value="2">CAJA ADICIONAL</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE CAJA</label>
                            <select id="NumeroDeCaja" name="NumeroDeCaja" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">UBICACIÓN</label>
                            <select id="Area" name="Area" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CAJERO</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>
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

<!--FONDO DE CAJA-->

<div class="modal" id="mdlFondoDeCaja">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times"></span></button>
                <h4 class="modal-title">FONDO DE CAJA DE INICIO DEL TURNO</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control hide" readonly="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">CAJA</label>
                            <select id="Caja" name="Caja" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">EFECTIVO INICIAL EN CAJA</label>
                            <select id="EfectivoInicial" name="EfectivoInicial" class="form-control">
                                <option value=""></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">CANTIDAD INICIAL</label>
                            <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="0" min="1">
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



<!--CONFIRMACION Y ASIGNACION DE CODIGO BARRAS -->

<div class="modal" id="mdlFondoDeCaja">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times"></span></button>
                <h4 class="modal-title">CONFIRMACION Y ASIGNACION DE CODIGO DE BARRAS</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control hide" readonly="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">CAJA</label>
                            <select id="Caja" name="Caja" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">EFECTIVO INICIAL EN CAJA</label>
                            <select id="EfectivoInicial" name="EfectivoInicial" class="form-control">
                                <option value=""></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">CANTIDAD INICIAL</label>
                            <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="0" min="1">
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
<!--SCRIPTS-->

<script>
    var master_url = "<?php print base_url() . "index.php/ctrlCajaDeVenta/"; ?>";
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnRefrescar = $("#btnRefrescar");

    var mdlEditar = $("#mdlEditar");
    var btnEditar = $("#btnEditar");
    var btnModificar = mdlEditar.find("#btnGuardar");

    var mdlFondoDeCaja = $("#mdlFondoDeCaja");
    var btnFondoDeCaja = $("#btnFondoDeCaja");
    var btnGuardarFondoDeCaja = mdlFondoDeCaja.find("#btnGuardar");
    var btnVerFondosDeCaja = $("#btnVerFondosDeCaja");

    $(document).ready(function() {

        btnVerFondosDeCaja.on("click", function() {
            getFondosDeCajas();
        });

        btnGuardarFondoDeCaja.on("click", function() {
            var frm = new FormData(mdlFondoDeCaja.find("#frmNuevo")[0]);
            $.ajax({
                url: master_url + 'onAgregarFondoDeCaja',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREADO UN FONDO DE CAJA', 'success');
                mdlFondoDeCaja.modal('hide');
                console.log(data, x, jq);
                getFondosDeCajas();
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnFondoDeCaja.click(function() {
            mdlFondoDeCaja.modal('show');
        });

        btnEditar.on("click", function() {

            if (temp !== undefined && temp !== null && temp !== '' && temp > 0) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'POR FAVOR ESPERE...'
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

                    $.each(dtm, function(k, v) {
                        mdlEditar.find("#" + k).val(v);
                        mdlEditar.find("#" + k).select2("val", v);
                    });
                    mdlEditar.modal('show');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnModificar.on("click", function() {

            var frm = new FormData(mdlEditar.find("#frmEditar")[0]);
            $.ajax({
                url: master_url + 'onModificar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UNA CAJA', 'success');
                btnRefrescar.trigger('click');
                mdlEditar.modal('hide');
                console.log(data, x, jq);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnGuardar.on("click", function() {
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            $.ajax({
                url: master_url + 'onAgregar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UNA NUEVA CAJA', 'success');
                btnRefrescar.trigger('click');
                mdlNuevo.modal('hide');
                console.log(data, x, jq);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnRefrescar.on("click", function() {
            getRecords();
        });
        btnNuevo.on("click", function() {
            mdlNuevo.modal('show');
        });
        /*INIT*/
        getRecords();
        getAreas();
        getResponsables();
        getCajas();
    });

    function getCajas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + "getCajas",
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.CAJA + '</option>';
            });
            mdlFondoDeCaja.find("#Caja").html(options);
            console.log('CAJAS ');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getAreas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + "getAreas",
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.AREA + '</option>';
            });
            mdlNuevo.find("#Area").html(options);
            mdlEditar.find("#Area").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getResponsables() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + "getResponsables",
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>';
            });
            mdlNuevo.find("#Responsable").html(options);
            mdlEditar.find("#Responsable").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getRecords() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: 'JSON'
        }).done(function(data, x, jq) {
            console.log(data, x, jq);
            $("#CajasDeVenta").html(getTable('tblCajasDeVenta', data));
            $('#tblCajasDeVenta tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><br><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblCajasDeVenta').DataTable(tableOptions);
            var detailRows = [];
            $('#tblCajasDeVenta tbody').on('click', 'tr td.details-control', function() {
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
            $('#tblCajasDeVenta tbody').on('click', 'tr', function() {
                $("#tblCajasDeVenta").find("tr").removeClass("success");
                $("#tblCajasDeVenta").find("tr").removeClass("warning");
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
                temp = parseInt(dtm);
                console.log('ONE CLICK');
                console.log(temp);

            });
            //DB CLICK FOR EDIT
            $('#tblCajasDeVenta tbody').on('dblclick', 'tr', function() {
                $("#tblCajasDeVenta").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm);

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


    function getFondosDeCajas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getFondosDeCajas',
            type: "POST",
            dataType: 'JSON'
        }).done(function(data, x, jq) {
            console.log(data, x, jq);
            $("#CajasDeVenta").html(getTable('tblFondosDeCajas', data));
            $('#tblFondosDeCajas tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><br><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblFondosDeCajas').DataTable(tableOptions);
            var detailRows = [];
            $('#tblFondosDeCajas tbody').on('click', 'tr td.details-control', function() {
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
            $('#tblFondosDeCajas tbody').on('click', 'tr', function() {
                $("#tblFondosDeCajas").find("tr").removeClass("success");
                $("#tblFondosDeCajas").find("tr").removeClass("warning");
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
                temp = parseInt(dtm);
                console.log('ONE CLICK');
                console.log(temp);

            });
            //DB CLICK FOR EDIT
            $('#tblFondosDeCajas tbody').on('dblclick', 'tr', function() {
                $("#tblCajasDeVenta").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm);

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
</script>