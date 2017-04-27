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

<?php echo form_open_multipart('controlador/CambioP'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF"> Trayectoria laboral </strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Cambiar de posición</strong>
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6">
                                    Elegir empleado:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Empleado" name="Empleado"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                    </select>

                                    </br>
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
                        <td>
                            <div class="col-xs-12 col-sm-12" id="InfoEmpleado">

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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="AreaInterno" class="control-label">Área nueva:</label><br>	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="AreaInterno" name="AreaInterno"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Area as $Area1) { ?> 
                                            <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
<?php } ?>
                                    </select>	
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="PuestoInterno" class="control-label">Puesto nuevo:</label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="PuestoInterno" name="PuestoInterno"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Puesto as $Puesto1) { ?> 
                                            <option value="<?php echo $Puesto1->id_puesto; ?>"><?php echo $Puesto1->dsc_puesto; ?></option>
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
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
    </tr>
    <tr>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.InfoEmple();
</script>

