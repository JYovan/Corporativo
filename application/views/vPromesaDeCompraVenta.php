<div class="panel panel-success">
    <div class="panel-heading" align="center">
        <h3 class="panel-title">REGISTRO DE VIVIENDA VENDIDA</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12" align="center">
            <button class="btn btn-default btn-fab" id="btnNuevo"><span class="fa fa-plus"></span></button>
            <button class="btn btn-default btn-fab" id="btnEditar"><span class="fa fa-pencil"></span></button>
            <button class="btn btn-default btn-fab" id="btnRefrescar"><span class="fa fa-refresh"></span></button>
            <button class="btn btn-default btn-fab" id="btnEliminar"><span class="fa fa-trash"></span></button>
        </div>
        <div id="PromesasDeCompraVenta" class="col-md-12">
        </div>
    </div>
</div>
<!--MODAL NUEVA PROMESA-->
<div class="modal" id="mdlNuevo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">NUEVA VIVIENDA VENDIDA</h4>
            </div>
            <div class="modal-body">
                <fieldset>

                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-fab"><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div>
    </div>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlPromesaDeCompraVenta/';
    var Clientes = $("#Clientes");

    var mdlNuevo = $("#mdlNuevo");
    var btnNuevo = $("#btnNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var mdlEditar = $("#mdlEditar");
    var btnEditar = $("#btnEditar");
    var btnModificar = mdlEditar.find("#btnGuardar");

    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");

    /* IIFE - Immediately Invoked Function Expression*/
    (function($, window, document) {

        /* The $ is now locally scoped

         Listen for the jQuery ready event on the document*/
        $(function() {
            btnEliminar.on('click', function() {
                if (temp !== "" && temp !== '' && parseInt(temp) > 0) {
                    $.ajax({
                        url: master_url + 'onEliminar',
                        type: "POST",
                        data: {
                            ID: temp
                        }
                    }).done(function(data, x, jq) {
                        console.log(data);
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'PROMESA ELIMINADA', 'success');
                        btnRefrescar.trigger('click');
                    }).fail(function(x, y, z) {
                        console.log(x, y, z);
                    }).always(function() {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
                }
            });

            btnRefrescar.on('click', function() {
                getRecords();
            });

            btnNuevo.on('click', function() {
                $(".modal").find("#Ciudad").html("");
                mdlNuevo.modal('show');
            });

            btnGuardar.on('click', function() {
                HoldOn.open({
                    theme: 'sk-cube',
                    message: 'GUARDANDO...'
                });
                var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {
                    console.log(data);
                    mdlNuevo.modal('hide');
                    btnRefrescar.trigger('click');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            });

            btnEditar.on('click', function() {
                console.log("VALOR TEMP");
                console.log(temp);
                if (temp !== "" && temp !== '' && parseInt(temp) > 0) {
                    $(".modal").find("#Ciudad").html("");
                    $.ajax({
                        url: master_url + 'getRegistroByID',
                        type: "POST",
                        dataType: 'JSON',
                        data: {
                            ID: temp
                        }
                    }).done(function(data, x, jq) {
                        if (data[0] !== undefined) {
                            var dtm = data[0];
                            $.ajax({
                                url: master_url + 'getMunicipiosXEstado',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: dtm.Estado
                                }
                            }).done(function(data, x, jq) {
                                var options = "<option></option>";
                                $.each(data, function(k, v) {
                                    options += "<option value=\"" + v.ID + "\">" + v.MUNICIPIO + "</option>";
                                });
                                $(".modal").find("#Ciudad").html(options);
                            }).fail(function(x, y, z) {
                                console.log(x, y, z);
                            }).always(function() {
                                $.each(dtm, function(k, v) {
                                    mdlEditar.find("#" + k).val(v);
                                    mdlEditar.find("#" + k).select2("val", v);
                                });
                                mdlEditar.find("#ID").val(temp);
                                mdlEditar.modal('show');
                            });
                        } else {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTE EL REGISTRO', 'danger');
                            getRecords();
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

            btnModificar.on('click', function() {
                HoldOn.open({
                    theme: 'sk-cube',
                    message: 'GUARDANDO...'
                });
                var frm = new FormData(mdlEditar.find("#frmModificar")[0]);
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {
                    console.log(data);
                    getRecords();
                    mdlEditar.modal('hide');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            });
            mdlEditar.on('hidden.bs.modal', function() {
                mdlEditar.find("#ID").val("");
                temp = 0;
            });
            $(".modal").find("#Estado").on('change', function(k, v) {
                getMunicipiosXEstado($(this).val());
            });

            /*DECLARAR METODOS CONSTRUCTORES*/
            getRecords();
            getProyectos();
            getEstados();
        });

        /*The rest of the code goes here!*/

    }(window.jQuery, window, document));
    /* The global jQuery object is passed as a parameter*/

    function getRecords() {
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO...'
            });
            Clientes.html(getTable('tblClientes', data));
            Clientes.find("#tblClientes").DataTable(tableOptions);
            Clientes.find("#tblClientes tbody tr").on('click', function() {
                Clientes.find("#tblClientes tbody tr").removeClass("warning");
                $(this).addClass("warning");
                temp = $(this).find("td").eq(0).text();
                console.log($(this).find("td").eq(0).text());
            });
            Clientes.find("#tblClientes tbody tr").on('dblclick', function() {
                Clientes.find("#tblClientes tbody tr").removeClass("warning");
                $(this).addClass("warning");
                temp = $(this).find("td").eq(0).text();
                console.log($(this).find("td").eq(0).text());
                btnEditar.trigger("click");
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getProyectos() {
        $.ajax({
            url: master_url + 'getProyectos',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = "<option></option>";
            $.each(data, function(k, v) {
                options += "<option value=\"" + v.ID + "\">" + v.PROYECTO + "</option>";
            });
            $(".modal").find("#Proyectos").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }
</script>