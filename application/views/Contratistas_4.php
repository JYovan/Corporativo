<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
$page_index_back = base_url() . "index.php/ctrlContratistas";
$page_index_forward = base_url() . "index.php/ctrlContratistas";
$page_index_menu = base_url() . "index.php/ctrlContratistas";
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row"> 
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo $page_index_back; ?>'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center">REPORTE GLOBAL DE DESTAJO TRABAJOS REALIZADOS</div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <a href = '<?php echo $page_index_menu; ?>'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <?php // echo form_open_multipart(base_url() . 'index.php/controlador/ContratistaPagos'); ?> 
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-5"> 
                        <label for="1" class="control-label">Desarrollo</label>
                        <select class="form-control" id="Ndesarrollo" name="Ndesarrollo" >
                            <option value="0">Selecciona</option>
                            <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-5" id="ResultadoDesarrollo">
                        <label for="2" class="control-label">Concepto de pago</label>
                        <select class="form-control" id="ConceptoP" name="ConceptoP" >
                            <option value="0">Selecciona</option>
                        </select>
                    </div>
                    <div id="ConceptoProgress" class="col-md-5 text-center hide" align="center">
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-lg btn-emerald btn-lg disabled" type="button" id="btnSearch" name="btnSearch" value="<?php echo $indice; ?>" ><span class="fa fa-search fa-3x"></span></button>
                    </div>
                    <div class="col-md-12 table-responsive" id="tblResultado"> 
                    </div>
                    <div id="tblResultadoProgress" class="col-md-12 text-center hide" align="center">
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div> 
</div>
<script>
//    cli.config.Concepto();
//    cli.config.Contratista();
//    cli.config.Pagos();
    cli.config.ReporteDestajo();
    $(document).ready(function () {
        $("#Ndesarrollo").on('change', function () {
            console.log("LINEA 62: " + $(this));
            console.log("LINEA 63: " + $(this).val());
            if ($("#Ndesarrollo").val() !== undefined) {
                $("#ResultadoDesarrollo").addClass("hide");
                $("#ConceptoProgress").removeClass("hide");

                $.ajax({
                    url: base_url + 'index.php/ctrlContratistas/getConceptos',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: $(this).val()
                    }
                }).done(function (data) {
                    console.log('LINEA : 71');
                    console.log(data);
                    if (parseInt === 0) {
                        $.notify({
                            title: '<span class="fa fa-exclamation fa-lg"></span>',
                            message: 'ERROR! EL DESARROLLO ES INVÁLIDO'
                        }, {
                            type: 'danger'
                        }, {
                            animate: {
                                enter: 'animated bounceIn',
                                exit: 'animated bounceOut'
                            }
                        });
                    } else {

                        var options = "<option value=''></option>";

                        $.each(data, function (k, v) {
                            options = options + '<option value="' + v.ID + '">' + v.CONCEPTO + '</option>';
                        });
                        $("#ConceptoP").html(options);
                        $.notify({
                            title: '<span class="fa fa-check fa-lg"></span>',
                            message: 'EXITO! DATOS ENCONTRADOS'
                        }, {
                            type: 'success'
                        }, {
                            animate: {
                                enter: 'animated bounceIn',
                                exit: 'animated bounceOut'
                            }
                        });
                        $("#ResultadoDesarrollo").removeClass("hide");
                        $("#ConceptoProgress").addClass("hide");
                        $("#btnSearch").removeClass("disabled");
                    }
                }).fail(function (x, y, z) {
                    console.log(x.responseText);
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'ERROR! EL DESARROLLO ES INVÁLIDO' + x.responseText
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                });
            }
        });

        $("#btnSearch").click(function () {
            getReporteGlobalDeDestajoTR();
        });
    });
    function getReporteGlobalDeDestajoTR() {
        $("#tblResultado").addClass("hide");
        $("#tblResultadoProgress").removeClass("hide");
        $.ajax({
            url: base_url + 'index.php/ctrlContratistas/getReporteGlobalDeDestajoTR',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $("#Ndesarrollo").val(),
                CONCEPTO: $("#ConceptoP").val()
            }
        }).done(function (data, txt, jq) {
            $("#" + target_result).html("");
            $("#tblResultadoProgress").addClass("hide");
            $("#tblResultado").removeClass("hide");
            var tblname = "tblConceptoDePago";
            var target_result = "tblResultado";
            var tblName = tblname;
//        $("#"+target_messages).append(data);
//        console.log(data.length);
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data)); 
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
            } else {
                $("#" + target_result).html('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><h1>NO SE ENCONTRARON REGISTROS.</h1></div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z)
        });
    }
</script>

