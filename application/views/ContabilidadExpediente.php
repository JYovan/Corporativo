<!-- configuramos el plugin-->

<div class="container">	
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

    <h3><?php
        $respuesta = '-';
        foreach ($USUARIOS as $USUARIOS1) {
            if ($USUARIOS1->Id == $User) {
                $respuesta = $USUARIOS1->nombre;
                $indice = $USUARIOS1->Id;
            }
        }
        echo $respuesta;
        ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-center">
                Visualización de trámites contables en proceso</h3>
        </div>
        <div class="panel-body">
            <?php echo form_open_multipart('controlador/xxx'); ?> 
            <div class="col-md-12 col-xs-6">
                <label for="Cliente" class="control-label">Empresa: </label> 
                <select class="form-control" id="Cliente" name="Cliente"  required>
                    <option value="0">Selecciona</option>
                    <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                        <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                    <?php } ?>
                </select>	
            </div>

            <div class="col-xs-12 col-sm-12" align="center">
                <br><label class="control-label"><h2>Reporte de trámites:</h2></label>	
            </div>
            <div class="col-xs-12 col-sm-12">
                <hr class="">
            </div>
            <div class="col-xs-12 col-sm-12" id="Resultado">

            </div>     
            <div class="col-xs-12 col-sm-12">   
                <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
            </div>

            </form>
        </div>
    </div>

    <!-------------------------------------------------------------------------------------------------------------------------------------------------->
<!--    <table width="100%">
        <tr>
            <td>
    <?php
//                $respuesta = '-';
//                foreach ($USUARIOS as $USUARIOS1) {
//                    if ($USUARIOS1->Id == $User) {
//                        $respuesta = $USUARIOS1->nombre;
//                        $indice = $USUARIOS1->Id;
//                    }
//                }
//                echo $respuesta;
    ?>
            </td>
        </tr>
    </table>

    <?php // echo form_open_multipart('controlador/xxx'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Visualización de trámites contables en proceso</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-6">
                                <label for="NombreActividad" class="control-label">Empresa: </label><br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">

                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Cliente" name="Cliente"  required>
                                        <option value="0">Selecciona</option>
    <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                                <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
    <?php } ?>
                                    </select>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">
                                    Reporte de trámites:
                                </strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Resultado">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>	
                                </br>	
                                </br>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">   
                                <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                            </div>
                        </td>
                    </tr>
                </table>  
            </td>
        </tr>
    </table>
</form>-->

    <table width="100%">    
        <tr>
            <td width="80%">    
            </td>
            <td width="20%" align="right">    
                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=4&i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>
<script>
    cli.config.ReporteSSTramitesE();
</script>


