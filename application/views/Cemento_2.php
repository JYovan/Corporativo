<div class="container">	
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">PRECIOS DEL CEMENTO</h3>
        </div>
        <div class="panel-body">
            <form id="frmPrecioDelCemento">
                <fieldset>
                    <div class="col-md-4">
                        <label>FECHA</label>
                        <input id="Fecha" name="Fecha" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                    </div>
                    <div class="col-md-4">
                        <label>COMERCIALIZADOR</label>
                        <select id="Comercializador" name="Comercializador" class="form-control">
                            <option value=""></option>
                            <?php foreach ($Comercializador as $Comercializador1) { ?> 
                                <option value="<?php echo $Comercializador1->ID; ?>"><?php echo $Comercializador1->Nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>NOMBRE DE QUIEN ATIENDE</label>
                        <input id="Atiende" name="Atiende" class="form-control">
                    </div> 
                    <div class="col-md-3">
                        <br>
                        <label>MARCA</label>
                        <select class="form-control" id="Marca" name="Marca" >
                            <option value=""></option>
                            <?php foreach ($Marca as $Marca1) { ?> 
                                <option value="<?php echo $Marca1->id_marca; ?>"><?php echo $Marca1->dsc_marca; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <br>
                        <label>CEMENTO BLANCO</label>
                        <input id="PrecioCblanco" name="PrecioCblanco" class="form-control" placeholder="$0.0">
                    </div>
                    <div class="col-md-3">
                        <label>CEMENTO GRIS TIPO II PORTLAND</label>
                        <input id="PrecioCgris" name="PrecioCgris" class="form-control" placeholder="$0.0">
                    </div>
                    <div class="col-md-3">
                        <label>CEMENTO MORTERO O DE ALBAÑILERÍA</label>
                        <input id="PrecioCmortero" name="PrecioCmortero" class="form-control" placeholder="$0.0">
                    </div>
                    <div class="col-md-12" align="right">
                        <button id="btnGuardar" type="button" name="btnGuardar" class="btn btn-lg btn3d btn-emerald"><span class="fa fa-check fa-2x"></span></button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script> 
    $(document).ready(function () {
        $("#frmPrecioDelCemento #btnGuardar").click(function () {
             $("#frmPrecioDelCemento #btnGuardar").addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            console.log('ok')
            var frm = $("#frmPrecioDelCemento").serialize();
            $.ajax({
                url: base_url + 'index.php/ctrlCemento/onAddPrecioCemento',
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                $("#frmPrecioDelCemento")[0].reset();
                $("#frmPrecioDelCemento select").select2("val","");
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO AGREGADO', 'info');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () { 
             $("#frmPrecioDelCemento #btnGuardar").removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
             });
        });
        
        
    });
</script>

