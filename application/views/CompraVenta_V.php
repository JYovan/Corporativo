<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Reporte de Compraventa</h3>
            </div>
            <?php echo form_open_multipart('controlador/xxx'); ?> 
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12 col-xs-12">
                        <label for="Cliente" class="control-label">Nombre del fideicomiso</label><br>

                        <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"   required="required">
                            <option value="">Selecciona</option>
                            <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6"> 
                        <label for="NombreActividad" class="control-label">Fecha de inicio </label><br>
                        <input class="form-control" type="text" name="FechaInicioEdo" id="datepicker"  value="<?php echo date("d/m/Y") ?>">	
                       
                    </div>
                    <div class="col-md-6"> 
                        <label for="NombreActividad" class="control-label">Fecha de término </label><br>
                        <input class="form-control" type="text" name="FechaTerminoEdo" id="datepicker2"  value="<?php echo date("d/m/Y") ?>">	
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                    </div>
                    <div class="col-md-12">
                        <h1 class="text-center">REPORTE</h1>
                        <hr> 
                    </div> 
                    <div class="col-xs-12 col-sm-12" id="Resultado">

                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>
</div>

<table width="100%">    
    <tr>
        <td width="80%">    
        </td>
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.RepCompraV();
</script>


