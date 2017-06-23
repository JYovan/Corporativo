<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">RESPONSABLES DE CAJAS DE VENTA</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12" align="center">
            <button id="btnNuevo" type="button" class="btn btn-raised btn-default fa-lg" ><span class="fa fa-plus"></span><br>NUEVO</button>
            <button type="button" class="btn btn-raised btn-default fa-lg" ><span class="fa fa-pencil"></span><br>EDITAR</button>
            <button type="button" class="btn btn-raised btn-default fa-lg" id="btnRefrescar"><span class="fa fa-refresh"></span><br>REFRESCAR</button>
        </div>
        <div class="col-md-12" id="Cajeros"></div>
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
                        <select id="Caja" name="Caja" class="form-control">
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
                        <label for="">RESPONSABLE</label>
                        <select id="Responsable" name="Responsable" class="form-control">
                        </select>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button type="button" class="btn btn-success fa-lg"><span class="fa fa-check fa-2x success-icon"></span></button>
            </div>
        </div>
    </div>
</div>

<!--SCRIPTS-->

<script>
    var master_url = "<?php print base_url() . "index.php/ctrlResponsables/"; ?>";
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");

    var btnRefrescar = $("#btnRefrescar");

    $(document).ready(function() {
        btnRefrescar.on("click", function() {
            getRecords();
        });
        btnNuevo.click(function() {
            getAreas();
            getResponsables();
            mdlNuevo.modal('show');
        });
        /*INIT*/
        getRecords();
    });

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
            console.log(data);
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.AREA + '</option>';
            });
            mdlNuevo.find("#Area").html(options);
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
            console.log(data)
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>';
            });
            mdlNuevo.find("#Responsable").html(options);
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
            $("#Cajeros").html(getTable('tblCajeros', data));
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }
</script>