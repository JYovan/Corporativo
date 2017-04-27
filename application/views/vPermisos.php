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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MODULO DE PERMISOS<span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <div id="pnlPrincipal" clas="col-md-12">

                        <div class="col-md-5">
                            <label for="">USUARIO</label>
                            <select id="IdUsuario" name="IdUsuario" class="form-control"></select>
                        </div>
                        <div class="col-md-5">
                            <label for="">MODULO</label>
                            <select id="IdModulo" name="IdModulo" class="form-control"></select>
                        </div>
                        <div class="col-md-2">
                            <button id="btnGuardar" class="btn btn3d btn-default fa-lg"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="ACEPTAR"  type="button"
                                    data-original-title="ACEPTAR">
                                <span class="fa fa-check fa-3x info-icon"></span>
                            </button>  
                            <button id="btnRefrescar" class="btn btn3d btn-default fa-lg"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="REFRESCAR"  type="button"
                                    data-original-title="REFRESCAR">
                                <span class="fa fa-refresh fa-3x warning-icon"></span>
                            </button> 
                        </div>
                    </div>
                    <div id="tblPermisos" class="xoverflowx">
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th class="hide">ID</th>
                                    <th>USUARIO</th>
                                    <th>MODULO</th> 
                                    <th>VER</th> 
                                    <th>CREAR</th> 
                                    <th>MODIFICAR</th> 
                                    <th>ELIMINAR</th> 
                                    <th>CONSULTAR</th> 
                                    <th>REPORTES</th> 
                                    <th>BUSCAR</th> 
                                    <th>REGISTRO</th> 
                                    <th>FECHA DE MODIFICACION</th>
                                    <th>ESTATUS</th>
                                </tr>
                            </thead>
                            <tbody class="">  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlPermisos/';
    var pnlPrincipal = $("#pnlPrincipal");
    var IdUsuario = pnlPrincipal.find("#IdUsuario");
    var IdModulo = pnlPrincipal.find("#IdModulo");
    var btnRefrescar = $("#btnRefrescar");
    var tblPermisos = $("#tblPermisos");

    $(document).ready(function () {
        btnRefrescar.click(function () {
            getRecords();
            getUsuarios();
            getModulos();
        });
        btnRefrescar.trigger('click');
    });

    function getRecords() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO POR FAVOR ESPERE..."
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            tblPermisos.html(getTable("tblPermisosx", data));

            var head = tblPermisos.find('table > thead tr th');
            head.first().addClass("hide");
            console.log(head);

            var rows = tblPermisos.find('table > tbody tr');
            $.each(rows, function (k, v) {
                $($(v).find("td")[0]).addClass("hide");
//                console.log(v);
            });
        }).fail(function (x, y, z) {
            console.log(x.responseText);
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    
    function getUsuarios()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getUsuarios',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.USUARIO + '</option>';
            });
            IdUsuario.html(options); 
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    
    function getModulos()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getModulos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.MODULO + '</option>';
            });
            IdModulo.html(options); 
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>