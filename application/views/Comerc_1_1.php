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

<?php echo form_open_multipart('controlador/RegistroCliente'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro de cliente</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Desarrollo inmobiliario</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Proyectos" name="Proyectos" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                            <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    Nombre completo del cliente:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Ncliente" id="Ncliente" required="required">
                                    </br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Datos de comercialización
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    Persona que lo refiere o le recomendó:
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Referencia" name="Referencia" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($ComRef as $ComRef1) { ?> 
                                            <option value="<?php echo $ComRef1->id_medios; ?>"><?php echo $ComRef1->dsc_medios; ?></option>
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    Medio por el que se enteró de la venta de la vivienda:
                                </div>
                                <div class="col-md-8 col-xs-12" align="right">
                                    <select class="form-control" id="Medio" name="Medio" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Medio as $Medio1) { ?> 
                                            <option value="<?php echo $Medio1->id_referencia; ?>"><?php echo $Medio1->dsc_referencia; ?></option>
<?php } ?>
                                    </select>
                                    </br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Datos de localización
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
                            <div class="col-xs-3 col-sm-3">
                                <label for="Calle" class="control-label">Calle:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="Numero" class="control-label">No.:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="Colonia" class="control-label">Colonia:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="CP" class="control-label">CP:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Calle" id="Calle" required>	
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="No" id="No" required>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Colonia" id="Colonia" required>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CP" id="CP" required>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pais" class="control-label">País:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Estado" class="control-label">Estado:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Ciudad" class="control-label">Ciudad:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4" id="Pais2">
                                <select class="form-control" id="Pais" name="Pais"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Pais as $Pais1) { ?> 
                                        <option value="<?php echo $Pais1->id_pais; ?>"><?php echo $Pais1->dsc_pais; ?></option>
<?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-4 col-sm-4" id="Estado2">
                                <select class="form-control" id="Estado" name="Estado"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estado as $Estado1) { ?> 
                                        <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
<?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-4 col-sm-4" id="Ciudad2">
                                <select class="form-control" id="Ciudad" name="Ciudad"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                        <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
<?php } ?>
                                </select>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada" class="control-label">Teléfono fijo:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono" class="control-label">Teléfono móvil:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pagina" class="control-label">Correo:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Telfijo" id="Telfijo" required>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel" id="Tel" required>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="text" name="Correo" id="Correo">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Redes Sociales</label><br>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="row form-group">	  
                                <div class="col-xs-6 col-sm-6" align="center">
                                    <label for="REDSocial" class="control-label">Red Social</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="center">
                                    <label for="Correo" class="control-label">Correo Electrónico</label><br>		  	
                                </div>		  
                            </div>
                            <div class="row form-group">	  
                                <div class="col-xs-6 col-sm-6" align="center">
                                    <label for="facebook" class="control-label">Facebook:</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6">		  	
                                    <input class="form-control" type="text" id="facebook" name="facebook">		  	
                                </div>		  
                            </div>
                            <div class="row form-group">	  
                                <div class="col-xs-6 col-sm-6" align="center">
                                    <label for="twitter" class="control-label">Twitter:</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6">		  	
                                    <input class="form-control" type="text" id="twitter" name="twitter" >		  	
                                </div>		  
                            </div>
                            <div class="row form-group">	  
                                <div class="col-xs-6 col-sm-6" align="center">
                                    <label for="linkedin" class="control-label">LinkedIn:</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6">		  	
                                    <input class="form-control" type="text" id="linkedin" name="linkedin" >		  	
                                </div>		  
                            </div>
                            <div class="row form-group">	  
                                <div class="col-xs-6 col-sm-6" align="center">
                                    <label for="google" class="control-label">Google+:</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6">		  	
                                    <input class="form-control" type="text" id="google" name="google" >		  	
                                </div>		  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Datos de identificación</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada" class="control-label">Género:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono" class="control-label">Estado civil:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pagina" class="control-label">Clave de identificación de elector:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <select class="form-control" id="Genero" name="Genero"  required>
                                    <option value="">Selecciona</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <select class="form-control" id="EdoCivil" name="EdoCivil"  required>
                                    <option value="">Selecciona</option>
                                    <option value="Soltero">Soltero(a)</option>
                                    <option value="Casado">Casado(a)</option>
                                    <option value="Divorciado">Divorciado(a)</option>
                                    <option value="Viudo">Viudo(a)</option>
                                </select>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="text" name="IFE" id="IFE">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada" class="control-label">RFC:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono" class="control-label">CURP:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pagina" class="control-label">Número de Seg. Soc:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="RFC" id="RFC" required>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CURP" id="CURP" required>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="text" name="NSS" id="NSS">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada" class="control-label">Nivel de estudios:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <select class="form-control" id="Escolaridad" name="Escolaridad"  required>
                                    <option value="">Selecciona</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Preparatoria">Preparatoria</option>
                                    <option value="Licenciatura">Nivel superior licenciatura</option>
                                    <option value="Posgrado">Nivel superior posgrado</option>
                                </select>
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

<?php echo form_open_multipart('controlador/xxx'); ?>     
<table width="100%">    
    <tr>
        <td>
            <div class="col-md-12 col-xs-12">
                <div class="col-md-10 col-xs-4" id="ID_cliente" align="left">
                </div>
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
                </div>
            </div>
        </td>
    </tr>
</table> 
</form> 
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
    cli.config.RCliente();
</script>

