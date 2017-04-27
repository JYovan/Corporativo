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
                        $Nivel = $USUARIOS1->AdministradorN;
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
                            <strong style="color:#FFF">
                                Ver registro de empleado
                                <input type="hidden" name="User" id="User"  value="<?php echo $indice ?>">
                            </strong>
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
                                    Registros:
                                </div>
<?php if ($Nivel == '1') { ?>
                                    <div class="col-md-3 col-xs-6">
                                        <select class="form-control" id="IDHojaCV" name="IDHojaCV"  required>
                                            <option value="">Selecciona</option>
                                            <?php foreach ($Empleados as $Empleados1) { ?> 
                                                <option value="<?php echo $Empleados1->IDUser; ?>"><?php echo $Empleados1->Nombre . ' ' . $Empleados1->apaterno . ' ' . $Empleados1->amaterno; ?></option>
    <?php } ?>
                                        </select>
                                        </br>
                                    </div>   
<?php } else { ?>
                                    <div class="col-md-3 col-xs-6">
                                        <select class="form-control" id="IDHojaCV" name="IDHojaCV"  required>
                                            <option value="">Selecciona</option>
                                            <?php foreach ($Empleados as $Empleados1) {
                                                if ($Empleados1->IDUser == $indice) {
                                                    ?>
                                                    <option value="<?php echo $Empleados1->IDUser; ?>"><?php echo $Empleados1->Nombre . ' ' . $Empleados1->apaterno . ' ' . $Empleados1->amaterno; ?></option>
        <?php }
    } ?>
                                        </select>
                                        </br>
                                    </div>
<?php } ?>
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
                                <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">
                                    Hoja de vida:
                                </strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="InfoHojaCV">

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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.CV();
</script>


