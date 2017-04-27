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

<?php echo form_open_multipart('controlador/BorrarMovCaja'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <div class="col-md-12 col-xs-12">
                                <strong style="color:#FFF">
                                    Borrar movimientos de caja de efectivo
                                </strong>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-12">
                                    <label for="P" class="control-label">Periodo de movimientos: </label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="Fi" class="control-label">Fecha de inicio </label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="Ft" class="control-label">Fecha de término </label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input class="form-control" type="text" name="FechaInicio" id="datepicker"  value="<?php echo date("d/m/Y") ?>">	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input class="form-control" type="text" name="FechaTermino" id="datepicker2"  value="<?php echo date("d/m/Y") ?>">	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">   
                                <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Buscar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">
                                    Reporte de movimientos:
                                </strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="ResultadoCuentas">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Borrar</button>		
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=82&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ParaBorrar();
</script>


