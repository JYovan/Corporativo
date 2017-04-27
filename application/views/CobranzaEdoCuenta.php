<!-- configuramos el plugin-->
<?php 
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">ESTADO DE CUENTA</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlCobranza/EdoCuenta'); ?> 
            <div class="panel-body">
                <fieldset>

                    <div class="col-md-12">
                        <label for="Cliente" class="control-label">Seleccionar cliente:</label>
                        <select class="form-control" id="Cliente" name="Cliente"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                            <?php } ?>
                        </select>	
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <label for="NombreActividad" class="control-label">Fecha de inicio </label>
                        <input class="form-control" type="text" name="FechaInicioEdo" id="FechaInicioEdo" data-provide="datepicker" data-date-format="dd/mm/yyyy"  value="<?php echo date("d/m/Y") ?>">	
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <label for="NombreActividad" class="control-label">Fecha de término </label>
                        <input class="form-control" type="text" name="FechaTerminoEdo" id="FechaTerminoEdo" data-provide="datepicker" data-date-format="dd/mm/yyyy" value="<?php echo date("d/m/Y") ?>">	
                    </div>
                </fieldset>
                    <div class="margin-15-top" id="ResultadoEdoCuenta">
                    </div>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
        </td>
    </tr>
</table> 
<script>
    cli.config.EdoCuenta();
</script>


