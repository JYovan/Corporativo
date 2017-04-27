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

<?php echo form_open_multipart('controlador/ComercializadoresCemento'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de comercializadores de cemento</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos del comercializador</strong>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                </br>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre del comercializador</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  class="form-control" name="Nombre" id="Nombre" required="required">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Teléfono</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="Tel" id="Tel"  required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Página web</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="Pagina" id="Pagina" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Dirección</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Direccion" id="Direccion"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Numero" id="Numero" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Pais" class="control-label">País:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12"  id="Pais2">
                                    <select class="form-control" id="Pais" name="Pais"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Pais as $Pais1) { ?> 
                                            <option value="<?php echo $Pais1->id_pais; ?>"><?php echo $Pais1->dsc_pais; ?></option>
<?php } ?>
                                    </select>
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Estado" class="control-label">Estado:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12" id="Estado2">
                                    <select class="form-control" id="Estado" name="Estado"   required="required" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Estado as $Estado1) { ?> 
                                            <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
<?php } ?>
                                    </select>
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Ciudad" class="control-label">Ciudad:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12" id="Ciudad2">
                                    <select class="form-control" id="Ciudad" name="Ciudad"   required="required" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                            <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
<?php } ?>
                                    </select>	
                                </div>		
                            </div>
                        </td>
                    </tr>   

                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">  
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
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=24&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>

