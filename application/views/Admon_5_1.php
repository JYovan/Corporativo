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

<?php echo form_open_multipart('controlador/Proveedores'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro de proveedores</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos generales</strong>
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
                                    Tipo de proveedor:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Tipo" name="Tipo"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($cliente as $cliente1) { ?> 
                                            <option value="<?php echo $cliente1->id_cliente; ?>"><?php echo $cliente1->dsc_cliente; ?></option>
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">
                                    Nombre completo o denominación social:
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Proveedor" id="Proveedor" required="required" >
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6">
                                    RFC:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="RFC" id="RFC" required="required" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Correo electrónico:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  class="form-control" type="email" name="Correo" id="Correo" required="required" >
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
                                <div class="col-md-3 col-xs-12">
                                    Página web:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   class="form-control" type="text" name="Pagina" id="Pagina" >
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos de localización</strong>
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
                                <div class="col-md-2 col-xs-12">
                                    Calle:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Calle" id="Calle" required="required">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    Número:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="No" id="No" required="required">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    Colonia:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Colonia" id="Colonia" required="required">
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
                                <div class="col-md-2 col-xs-12">
                                    Estado:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <select class="form-control" id="Estado" name="Estado"   required="required" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Estado as $Estado1) { ?> 
                                            <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
<?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    Municipio:
                                </div>
                                <div class="col-md-2 col-xs-12"  id="Ciudad2">
                                    <select class="form-control" id="Ciudad" name="Ciudad"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                            <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
<?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    Teléfono:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel" id="Tel" required="required">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos de contacto</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">
                                    Nombre completo:
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Contacto" id="Contacto" required="required" >
                                    </br>
                                </div>    
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">
                                    Teléfono
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TelContacto" id="TelContacto" >
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    Correo:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   class="form-control" type="email" name="MailContacto" id="MailContacto">
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Información específica de la persona física o moral</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                Rama:
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <select class="form-control" id="Rama" name="Rama" required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Rama as $Rama1) { ?> 
                                        <option value="<?php echo $Rama1->id_rama; ?>"><?php echo $Rama1->dsc_rama; ?></option>
<?php } ?>
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
                                <div class="col-md-3 col-xs-12">
                                    Actividad:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <select class="form-control" id="Actividad" name="Actividad" required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Actividades as $Actividades1) { ?> 
                                            <option value="<?php echo $Actividades1->id_actividad; ?>"><?php echo $Actividades1->dsc_actividad; ?></option>
<?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    Tamaño de la organización:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <select class="form-control" id="Tamanio" name="Tamanio"  required  >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Tamanio as $Tamanio1) { ?> 
                                            <option value="<?php echo $Tamanio1->id_tamanio; ?>"><?php echo $Tamanio1->dsc_tamanio; ?></option>
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
                            <div class="col-xs-12 col-sm-12" >
                                Principales bienes y/o servicios que ofrece: 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>	
                            <div class="col-xs-12 col-sm-12">
                                <textarea id="Servicios" name="Servicios" rows="3" cols="70%" class="form-control"></textarea>
                                </br> 	
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Información Bancaria  para pago vía transferencia </strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">
                                    Titular de la cuenta:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Titular" id="Titular" >
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    RFC:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input class="form-control" type="text" name="RFCcuenta" id="RFCcuenta" >
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-12">
                                    Número de cuenta:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Cuenta" id="Cuenta" >
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    Nombre del banco:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Banco" id="Banco" >
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    CLABE:
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CLABE" id="CLABE" >
                                </div>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=83&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>
