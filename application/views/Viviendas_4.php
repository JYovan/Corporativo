<?php
$respuesta = '-';
foreach ($USUARIOS as $USUARIOS1) {
    if ($USUARIOS1->Id == $User) {
        $respuesta = $USUARIOS1->nombre;
        $indice = $USUARIOS1->Id;
    }
}
?>
<div class="row">	  
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Borrar registro de vivienda
            </div> 
            <div class="panel-body"> 
                <?php echo form_open_multipart('controlador/BorrarVivienda'); ?> 
                <div class="col-md-12 col-xs-12" id="Tipo_vivienda">	
                    <div class="col-md-3 col-xs-12">
                        <label for="Cliente" class="control-label">Seleccionar modelo de vivienda:</label><br>
                    </div>		  
                    <div class="col-md-9 col-xs-12" align="left">
                        <select class="form-control" id="Vivienda" name="Vivienda" >
                            <option value="0">Selecciona</option>
                            <?php foreach ($Vivienda as $Vivienda1) { ?> 
                                <option value="<?php echo $Vivienda1->ID; ?>"><?php echo $Vivienda1->Modelo; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 col-xs-12" align="right">
                        <input  type="hidden" name="user" id="user" value="<?php echo $indice; ?>" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Borrar</button>
                </div>
                </form>
            </div><!---FIN PANEL BODY -->
        </div><!---FIN PANEL -->
        <table width="100%">
            <tr>
                <td width="80%">
                </td>
            </tr>
            <tr>
                <td width="20%" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=20&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table> 
    </div>
    <script>
        cli.config.Proyecto();
    </script>