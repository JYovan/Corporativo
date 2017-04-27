<!-- configuramos el plugin-->
<div class="row"> 
    <div class="col-md-12"> 
        <!-----------------------------SUBTITULO------------------------------------->
        <table width="100%" border="0" >
            <tr>
                <td><h2>
                        <?php
                        $respuesta = '-';
                        foreach ($USUARIOS as $USUARIOS1) {
                            if ($USUARIOS1->Id == $User) {
                                $respuesta = $USUARIOS1->nombre;
                                $indice = $USUARIOS1->Id;
                            }
                        }
                        echo $respuesta;
                        ?></h2>
                </td>
            </tr>
        </table>

        <!------------------------------------------------------------------>


        <!------------------------OPTIONS------------------------------------------>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-cog fa-lg"></span> Reporte de DISPERSIONES</h3>
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
            </div>
            <div class="panel-body">

                <?php echo form_open_multipart('ctrlDispersion/ReporteDispersion'); ?> 
                <fieldset>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-md-3 col-xs-12" align="right">
                                <label for="Cliente" class="control-label text-uppercase">Nombre del fideicomiso</label><br>
                            </div>
                            <div class="col-md-9 col-xs-12">
                                <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                        <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-md-6 col-xs-12">
                                <label for="NombreActividad" class="control-label">Periodo: </label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <label for="NombreActividad" class="control-label">Fecha de inicio </label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <label for="NombreActividad" class="control-label">Fecha de término </label><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-md-6 col-xs-12">

                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input class="form-control" type="text" name="FechaInicioEdo" id="datepicker"  value="<?php echo date("d/m/Y") ?>">	
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input class="form-control" type="text" name="FechaTerminoEdo" id="datepicker2"  value="<?php echo date("d/m/Y") ?>">	
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12">
                            </br>	
                        </div>
                        <div class="col-xs-12 col-sm-12">    
                            <button class="btn btn-lg btn-primary btn-block hide" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar <span class="fa fa-exclamation fa-lg"></span></button>
                            <br>
                        </div>


                        <div class="col-xs-12 col-sm-12" id="Resultado">

                        </div>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div> 



<table width="100%">    
    <tr>
        <td width="80%">    
        </td>
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  
                    onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>'"><span class="fa fa-arrow-left fa-lg"></span> Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.RepDisp();
</script>


