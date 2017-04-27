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

    <?php echo form_open_multipart('controlador/Proveedores2');
    foreach ($Proveedor as $Proveedor1) {
        ?>

        <input   class="form-control" type="hidden" name="IDProveedor" id="IDProveedor" value="<?php echo $Proveedor1->ID ?>">	

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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Proveedor" value="<?php echo $Proveedor1->Proveedor ?>" id="Proveedor" required="required" >
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="RFC" id="RFC" value="<?php echo $Proveedor1->RFC ?>" required="required" >
                                        </br>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        Correo electrónico:
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <input  class="form-control" value="<?php echo $Proveedor1->Correo ?>" type="email" name="Correo" id="Correo" required="required" >
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pagina" id="Pagina" value="<?php echo $Proveedor1->Pagina ?>" >
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Calle" id="Calle" value="<?php echo $Proveedor1->Calle ?>" required="required">
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        Número:
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="No" id="No" value="<?php echo $Proveedor1->No ?>" required="required">
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        Colonia:
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Colonia" id="Colonia" value="<?php echo $Proveedor1->Colonia ?>" required="required">
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
                                        Teléfono:
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel" id="Tel" value="<?php echo $Proveedor1->Tel ?>" required="required">
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Contacto" id="Contacto" value="<?php echo $Proveedor1->Contacto ?>" required="required" >
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TelContacto" id="TelContacto" value="<?php echo $Proveedor1->TelContacto ?>" >
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        Correo:
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <input   class="form-control" type="email" name="MailContacto" id="MailContacto" value="<?php echo $Proveedor1->MailContacto ?>">
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
                                    <textarea id="Servicios" name="Servicios" rows="3" cols="70%" class="form-control"><?php echo $Proveedor1->Servicios ?></textarea>
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Titular" id="Titular" value="<?php echo $Proveedor1->Titular ?>" >
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        RFC:
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <input class="form-control" type="text" name="RFCcuenta" id="RFCcuenta" value="<?php echo $Proveedor1->RFCcuenta ?>" required="required" >
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
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Cuenta" id="Cuenta" value="<?php echo $Proveedor1->Cuenta ?>" >
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        Nombre del banco:
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Banco" id="Banco" value="<?php echo $Proveedor1->Banco ?>" >
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        CLABE:
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CLABE" id="CLABE" value="<?php echo $Proveedor1->CLABE ?>" >
                                    </div>
                                </div>
                            </td>
                        </tr>       
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Actualizar</button>
                                </div>
                            </td>
                        </tr>
                    </table>  
                </td>
            </tr>
        </table>
<?php } ?>
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
