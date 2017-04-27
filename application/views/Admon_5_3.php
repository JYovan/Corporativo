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
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">
                                Visualización registro de proveedores
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Menú de búsqueda de proveedores</strong>		
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
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="P" class="control-label">Proveedor</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Proveedor" name="Proveedor" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Proveedor as $Proveedor1) { ?> 
                                            <option value="<?php echo $Proveedor1->ID; ?>"><?php echo $Proveedor1->Proveedor; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="T" class="control-label">Tipo de proveedor</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Tipo" name="Tipo"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($cliente as $cliente1) { ?> 
                                            <option value="<?php echo $cliente1->id_cliente; ?>"><?php echo $cliente1->dsc_cliente; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="R" class="control-label">Rama</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Rama" name="Rama" required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Rama as $Rama1) { ?> 
                                            <option value="<?php echo $Rama1->id_rama; ?>"><?php echo $Rama1->dsc_rama; ?></option>
<?php } ?>
                                    </select>	
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="A" class="control-label">Actividad</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Actividad" name="Actividad" required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Actividades as $Actividades1) { ?> 
                                            <option value="<?php echo $Actividades1->id_actividad; ?>"><?php echo $Actividades1->dsc_actividad; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Resultado</strong>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>	 
                            <div class="col-xs-12 col-sm-12" id="Consulta">

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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=83&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Proveedor();
    cli.config.ProveedorTipo();
    cli.config.ProveedorRama();
    cli.config.ProveedorActividad();
</script>

