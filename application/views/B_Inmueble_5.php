<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">

    </div>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">VISUALIZACIÓN DE EXPEDIENTE DE INMUEBLE</h3>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <label for="">INMUEBLE</label>
                        <select class="form-control" id="Inmueble" name="Inmueble" >
                            <option value="0">Selecciona</option>
                            <?php foreach ($Inmueble as $Inmueble1) { ?> 
                                <option value="<?php echo $Inmueble1->ID; ?>"><?php echo $Inmueble1->Ubicacion; ?></option>
                            <?php } ?>
                        </select>	
                    </div>
                    <div class="col-md-12">
                        <h1 class="text-center">REPORTE DE DOCUMENTOS</h1>
                        <hr>

                        <div class="col-xs-12 col-sm-12" id="Resultado"> 
                            <div id="spCarga" class="col-md-12 text-center hide">
                                <h1><span class="fa fa-circle-o faa-burst animated"></span> ESPERE...</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 hide">
                        <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>  
    <table width="100%">    
        <tr>
            <td width="80%">    
            </td>
            <td width="20%" align="right">    
                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>
<script>
//    cli.config.ReporteBInmueble_5();
</script>
<script>
    $(document).ready(function (e) {
        $("#Inmueble").change(function () {
            $("#Resultado").html(
                    '<div id="spCarga" class="col-md-12 text-center hide">' +
                    '<h1><span class="fa fa-circle-o faa-burst animated"></span> ESPERE...</h1>' +
                    '</div>');
            var Inmueble = $('#Inmueble').get(0).value;
            $('#Resultado').load('ReporteInmuebleExp', {Inmueble: Inmueble});
            $("#spCarga").removeClass("hide");
        });

    });
</script>