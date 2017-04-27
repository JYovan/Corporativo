<!-- configuramos el plugin-->
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
                <h3 class="panel-title">Visualización de trámites</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('controlador/xxx'); ?> 

                <div class="col-md-12 col-xs-12">	
                    <div class="col-md-3 col-xs-12">
                        <label for="1" class="control-label">Nombre del desarrolo</label><br>
                    </div>  
                    <div class="col-md-9 col-xs-12">
                        <select class="form-control" id="Proyectos" name="Proyectos" >
                            <option value="0">Selecciona</option>
                            <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12" id="ResultDesarrollo">
                    <div class="col-md-3 col-xs-6" align="right">
                        <label for="NombreActividad" class="control-label">Tramite</label><br>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <select class="form-control" id="Tramite" name="Tramite"  required>
                            <option value="0">Selecciona</option>
                            <?php foreach ($Tramite as $Tramite1) { ?> 
                                <option value="<?php echo $Tramite1->ID; ?>"><?php echo $Tramite1->Tramite; ?></option>
                            <?php } ?>
                        </select>		
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="">
                        Reporte de trámites:
                    </strong>	
                </div>
                <div class="col-xs-12 col-sm-12">   
                    <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                </div>
                <div class="col-xs-12 col-sm-12" id="Resultado">

                </div>

                </form>
            </div><!---FIN PANEL BODY -->
        </div><!---FIN PANEL -->   


        <table width="100%">    
            <tr>
                <td width="80%">    
                </td>
                <td width="20%" align="right">    
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=22&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table>
    </div>
    <script>
        cli.config.ReporteTramite();
        cli.config.CambioTramite();
        cli.config.InfoTramite();
    </script>