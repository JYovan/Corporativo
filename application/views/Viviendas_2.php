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
                <h3 class="panel-title">Expediente de viviendas
            </div> 
            <div class="panel-body">
                <?php echo form_open_multipart('controlador/ViviendaExp'); ?> 
                <div class="col-xs-12 col-sm-12" id="Tipo_vivienda">
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="Cliente" class="control-label">Seleccionar modelo de vivienda:</label><br>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <select class="form-control" id="Vivienda" name="Vivienda" >
                            <option value="">Selecciona</option>
                            <?php foreach ($Vivienda as $Vivienda1) { ?> 
                                <option value="<?php echo $Vivienda1->ID; ?>"><?php echo $Vivienda1->Modelo; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12">
                    Documento
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="Cliente" class="control-label">Tipo de documento:</label><br>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <select class="form-control" id="TDocumento" name="TDocumento" required="required">
                            <option value="">Selecciona</option>
                            <?php foreach ($RefTipo as $RefTipo1) { ?> 
                                <option value="<?php echo $RefTipo1->id_tipo; ?>"><?php echo $RefTipo1->dsc_tipo; ?></option>
                            <?php } ?>
                        </select>	
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="col-md-3 col-xs-6" align="right">
                        <label for="NombreExterno" class="control-label">Observaciones:</label><br>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Observaciones" id="Observaciones"  >		
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="Adjuntar" class="control-label">Adjuntar documento (Max 2MB)</label>
                    </div>
                    <div class="col-md-4">
                        <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" />
                        </br>	
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <label for="Adjuntar" class="control-label">(word, excel, pdf, jpg, png, zip, rar)</label><br>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                </div>
                </form>
            </div><!---FIN PANEL BODY -->
        </div><!---FIN PANEL -->   
        <table width="100%">    
            <tr>
                <td width="80%">    
                </td>
                <td width="20%" align="right">    
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=20&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table>
    </div>
    <script>
        cli.config.Proyecto();
    </script>