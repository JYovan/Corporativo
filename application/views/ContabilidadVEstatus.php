<!-- configuramos el plugin-->

<div class="container">	
    <table width="100%">
        <tr>
            <td>
                <?php
                $respuesta = '-';
                foreach ($USUARIOS as $USUARIOS1) {
                    if ($USUARIOS1->Id == $User) {
                        $respuesta = $USUARIOS1->nombre;
                        $indice = $USUARIOS1->Id;
                    }
                }
                echo $respuesta;
                ?>
            </td>
        </tr>
    </table>
<?php echo form_open_multipart('controlador/xxx'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <div class="col-xs-9 col-sm-9">
                                <strong style="color:#FFF">Visualización del estado de trámites contables</strong>
                            </div>
                            <div class="col-xs-3 col-sm-3" align="right">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelServicios_5">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
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
                        <td>
                            <div class="col-md-12 col-xs-6">
                                <label for="NombreActividad" class="control-label">Empresa: </label><br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-9 col-sm-9" id="ID_cliente2">
                                    <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                            <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
<?php } ?>
                                    </select>

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Mes" name="Mes"  required>
                                        <option value="0">Selecciona</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
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
                            <div class="col-xs-12 col-sm-12" id="ResultadoConcluidos">

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
</form>

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
    cli.config.ReporteCEstatus();
</script>


