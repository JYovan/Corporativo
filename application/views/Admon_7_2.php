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

    <?php
    echo form_open_multipart('controlador/InfoEmpleado');
    foreach ($InfoEmple as $InfoEmple1)
        ;
    ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Información personal</strong>
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
                                <div class="col-md-12 col-xs-12">
                                    <label for="NombreExterno" class="control-label">Nombre (s)  / Apellido   Paterno    / Apellido Materno</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo $InfoEmple1->Nombre . ' ' . $InfoEmple1->apaterno . ' ' . $InfoEmple1->amaterno; ?>" class="form-control" type="text" name="Nombre" id="Nombre" disabled="disabled">		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="NombreExterno" class="control-label">Género:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Genero" name="Genero"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>	
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="NombreExterno" class="control-label">Estado Civil:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="EstadoCivil" name="EstadoCivil"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Soltero(a)">Soltero(a)</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorviado(a)">Divorciado(a)</option>
                                        <option value="Unión_libre(a)">Unión libre(a)</option>
                                    </select>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="4" class="control-label">Clave Única de Registro de población:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CURP" id="CURP" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="5" class="control-label">Registro Federal de Contribuyentes :</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="RFC" id="RFC" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="6" class="control-label">Cédula profesional:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Cedula" id="Cedula" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="7" class="control-label">Número de Seguridad Social:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NSS" id="NSS" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="8" class="control-label">Número de Pasaporte:</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NP" id="NP" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="9" class="control-label">Número de Afore:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NA" id="NA" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="10" class="control-label">Cuenta con licencia de manejo de automóvil:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Licencia" name="Licencia"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="11" class="control-label">Tipo de licencia:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TipoLicencia" id="TipoLicencia" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="12" class="control-label">Número de licencia:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NoLicencia" id="NoLicencia" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12" align="left">
                                    <strong style="color:#FFF">Datos de localización</strong>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="13" class="control-label">Calle:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Calle" id="Calle" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="14" class="control-label">Número:</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="No" id="No" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="15" class="control-label">Colonia:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Colonia" id="Colonia" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="16" class="control-label">País:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6"  id="Pais2">
                                    <select class="form-control" id="Pais" name="Pais"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($Pais as $Pais1) { ?> 
                                            <option value="<?php echo $Pais1->id_pais; ?>"><?php echo $Pais1->dsc_pais; ?></option>
<?php } ?>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="17" class="control-label">Estado:</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-6" id="Estado2">
                                    <select class="form-control" id="Estado" name="Estado"  required >
                                        <option value="">Selecciona</option>
<?php foreach ($Estado as $Estado1) { ?> 
                                            <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
<?php } ?>
                                    </select>	
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="18" class="control-label">Ciudad:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6" id="Ciudad2">
                                    <select class="form-control" id="Ciudad" name="Ciudad"  required >
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
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="19" class="control-label">Correo:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input value="<?php echo $InfoEmple1->Correo ?>" class="form-control" type="text" name="Correo" id="Correo" disabled="disabled">		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="20" class="control-label">Celular:</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Cel" id="Cel" >		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="21" class="control-label">Teléfono:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel" id="Tel" >		
                                </div>
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
                                <div class="col-xs-12 col-sm-12">	  
                                    <div class="col-xs-6 col-sm-6" align="center">
                                        <label for="REDSocial" class="control-label">Red Social</label><br>		  	
                                    </div>
                                    <div class="col-xs-6 col-sm-6" align="center">
                                        <label for="Correo" class="control-label">Correo Electrónico</label><br>		  	
                                    </div>
                                </div>		  
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-12">	  
                                    <div class="col-xs-6 col-sm-6" align="center">
                                        <label for="facebook" class="control-label">Facebook:</label><br>		  	
                                    </div>
                                    <div class="col-xs-6 col-sm-6">		  	
                                        <input class="form-control" type="text" id="facebook" name="facebook">		  	
                                    </div>	
                                </div>	  
                            </div>
                            <div class="row form-group">	
                                <div class="col-xs-12 col-sm-12">  
                                    <div class="col-xs-6 col-sm-6" align="center">
                                        <label for="twitter" class="control-label">Twitter:</label><br>		  	
                                    </div>
                                    <div class="col-xs-6 col-sm-6">		  	
                                        <input class="form-control" type="text" id="twitter" name="twitter" >		  	
                                    </div>	
                                </div>	  
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-12">	  
                                    <div class="col-xs-6 col-sm-6" align="center">
                                        <label for="linkedin" class="control-label">LinkedIn:</label><br>		  	
                                    </div>
                                    <div class="col-xs-6 col-sm-6">		  	
                                        <input class="form-control" type="text" id="linkedin" name="linkedin" >		  	
                                    </div>
                                </div>		  
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-12">	  
                                    <div class="col-xs-6 col-sm-6" align="center">
                                        <label for="Instagram" class="control-label">Instagram:</label><br>		  	
                                    </div>
                                    <div class="col-xs-6 col-sm-6">		  	
                                        <input class="form-control" type="text" id="Instagram" name="Instagram" >		  	
                                    </div>
                                </div>		  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Nivel de estudios</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="22" class="control-label">Nivel de estudios alcanzado:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Estudios" name="Estudios"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Doctorado">Doctorado</option>
                                        <option value="Maestría">Maestría</option>
                                        <option value="Licenciatura">Licenciatura</option>
                                        <option value="Técnica">Técnica</option>
                                        <option value="Preparatoria">Preparatoria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Primaria">Primaria</option>
                                    </select>
                                    </br>
                                    </br>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="23" class="control-label">Certificado que obtuvo:</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Certificado" name="Certificado"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Doctorado">Titulado</option>
                                        <option value="Estudios_concluídos">Estudios concluídos</option>
                                        <option value="Estudios_no_concluídos">Estudios no concluídos</option>>
                                    </select>		
                                </div>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="24" class="control-label">Institución donde cursó sus últimos estudios</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Institucion" id="Institucion" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="25" class="control-label">Nombre del programa educativo (en su caso)</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Programa" id="Programa" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-2 col-xs-6">
                                    <label for="26" class="control-label">Habla inglés:</label><br>  	
                                </div>
                                <div class="col-md-2 col-xs-3">
                                    <input type="radio" value="Sí" name="Ingles" id="Ingles" required/> Sí	
                                </div> 
                                <div class="col-md-2 col-xs-3">
                                    <input type="radio" value="No" name="Ingles" id="Ingles" required/>No 	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="27" class="control-label">Software que conoce</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Software" id="Software" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Experiencia</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-6">
                                    <label for="28" class="control-label">Cargo o puesto que desempeñaba</label><br>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Cargo" id="Cargo" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="29" class="control-label">Institución, organización o persona con quien laboró</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Organizacion" id="Organizacion" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-4">
                                    <label for="30" class="control-label">Fecha en que inició a trabajar:</label><br>		
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <label for="31" class="control-label">Fecha en que dejó de trabajar:</label><br>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="FechaInicio" id="FechaInicio" required>		
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="FechaTermino" id="FechaTermino" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-4">
                                    <label for="31" class="control-label">Teléfono de su trabajo:</label><br>		
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <label for="32" class="control-label">Sueldo:</label><br>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TelTrabajo" id="TelTrabajo" required>		
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="SueldoAnt" id="SueldoAnt" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="34" class="control-label">Funciones que desempeñaba</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Funciones" name="Funciones" rows="3" cols="70%" class="form-control"></textarea> 	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Información Socio-económica</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <div class="col-xs-6 col-sm-3">
                                    <label for="35" class="control-label">Vive con:</label><br>		
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <select class="form-control" id="ViveCon" name="ViveCon"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Padres">Padres</option>
                                        <option value="Esposo(a)">Esposo(a)</option>
                                        <option value="Esposo(a)_e_hijo(s)">Esposo(a) e hijo(s)</option>
                                        <option value="Pareja">Pareja</option>
                                        <option value="Hijo(s)">Hijo(s)</option>
                                        <option value="Parientes">Parientes</option>
                                        <option value="Solo">Solo</option>
                                    </select>		
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <label for="36" class="control-label">Dependientes económicos:</label><br>	
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <select class="form-control" id="Dependientes" name="Dependientes">
                                        <option value="">Selecciona</option>
                                        <option value="Hijo(s)">Hijo(s)</option>
                                        <option value="Conyuge">Conyuge</option>
                                        <option value="Padres">Padres</option>
                                        <option value="Pareja">Pareja</option>
                                        <option value="Otro(s)">Otro(s)</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-4">
                                    <label for="36" class="control-label">¿Tiene automóvil propio?</label><br>  	
                                </div>
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="Sí" name="Auto" id="Auto" required/> Sí	
                                </div> 
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="No" name="Auto" id="Auto" required/>No 	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-4">
                                    <label for="37" class="control-label">¿Es dueño de la casa que habita?</label><br>  	
                                </div>
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="Sí" name="DuenioCasa" id="DuenioCasa" required/> Sí	
                                </div> 
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="No" name="DuenioCasa" id="DuenioCasa" required/>No 	
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-4">
                                    <label for="38" class="control-label">¿Paga renta?</label><br>  	
                                </div>
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="Sí" name="Renta" id="Renta" required/> Sí	
                                </div> 
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="No" name="Renta" id="Renta" required/>No 	
                                </div>   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-4">
                                    <label for="39" class="control-label">Sueldo mensual deseado</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="SueldoDeseado" id="SueldoDeseado" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-4">
                                    <label for="38" class="control-label">¿Cuenta con hijos?</label><br>  	
                                </div>
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="Sí" name="Hijos" id="Hijos" required/> Sí	
                                </div> 
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="No" name="Hijos" id="Hijos" required/>No 	
                                </div>	
                                <div class="col-xs-6 col-sm-2">
                                    <label for="39" class="control-label">Número de hijos</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-2">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NHijos" id="NHijos" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-4">
                                    <label for="38" class="control-label">¿Tiene otros ingresos?</label><br>  	
                                </div>
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="Sí" name="OtrosIngresos" id="OtrosIngresos" required/> Sí	
                                </div> 
                                <div class="col-xs-3 col-sm-2">
                                    <input type="radio" value="No" name="OtrosIngresos" id="OtrosIngresos" required/>No 	
                                </div>	
                                <div class="col-xs-6 col-sm-2">
                                    <label for="39" class="control-label">Importe mensual</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-2">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="OtroMes" id="OtroMes" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-6 col-sm-2">
                                    <label for="38" class="control-label">¿Tiene deudas?</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-2">
                                    <input type="radio" value="Sí" name="Deudas" id="Deudas" required/> Sí	
                                    <input type="radio" value="No" name="Deudas" id="Deudas" required/>No 	
                                </div>	
                                <div class="col-xs-6 col-sm-2">
                                    <label for="39" class="control-label">Monto de la deuda</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-2">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="MDeuda" id="MDeuda" required>	
                                </div>

                                <div class="col-xs-6 col-sm-2">
                                    <label for="39" class="control-label">Abono mensual</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-2">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Abono" id="Abono" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">		
                                <div class="col-xs-6 col-sm-6">
                                    <label for="39" class="control-label">Gastos mensuales</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Gastos" id="Gastos" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Información del estado de salud</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="40" class="control-label">Estado actual de salud:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Salud" name="Salud"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Buena">Buena</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Mala">Mala</option>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="41" class="control-label">¿Padece alguna enfermedad crónica?:</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="PadeceEnfermedad" name="PadeceEnfermedad"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="42" class="control-label">¿Cuál enfermedad padece?</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Enfermedad" id="Enfermedad" >		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="43" class="control-label">¿Tiene algún tipo de discapacidad?</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Discapacidad" name="Discapacidad"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="44" class="control-label">Tipo de discapacidad:</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="TipoDiscapacidad" name="TipoDiscapacidad">
                                        <option value="">Selecciona</option>
                                        <option value="Sensorial">Sensorial</option>
                                        <option value="Motriz">Motriz</option>
                                        <option value="Intelectual">Intelectual</option>
                                        <option value="Mental">Mental</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="45" class="control-label">¿Realiza alguna actividad física deportiva?</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="ActividadF" name="ActividadF"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="46" class="control-label">¿Que actividad física (s) o deportiva realiza?</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ActividadFisica" id="ActividadFisica" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="47" class="control-label">Estatura</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Estatura" id="Estatura" required>			
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" align="center">
                                <div class="col-md-12 col-xs-6" align="center">
                                    <label for="48" class="control-label">Peso</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Peso" id="Peso" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Información de esparcimiento</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">		
                                <div class="col-xs-6 col-sm-3">
                                    <label for="39" class="control-label">¿Realiza alguna actividad física deportiva?</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <select class="form-control" id="HaceDeporte" name="HaceDeporte"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="col-xs-6 col-sm-3">
                                    <label for="39" class="control-label">¿Qué actividad?</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Deporte" id="Deporte" required>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">		
                                <div class="col-xs-6 col-sm-3">
                                    <label for="39" class="control-label">Frecuencia con la que realiza deporte</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <select class="form-control" id="Frecuencia" name="Frecuencia"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Diario">Diario</option>
                                        <option value="Semanualmente">Semanualmente</option>
                                        <option value="Quincenalmente">Quincenalmente</option>
                                        <option value="Mensualmente">Mensualmente</option>
                                        <option value="Ocasionalmente">Ocasionalmente</option>
                                    </select>
                                </div>

                                <div class="col-xs-6 col-sm-3">
                                    <label for="39" class="control-label">¿Cuales son sus pasatiempos favoritos?</label><br>  	
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pasatiempo" id="Pasatiempo" required>	
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
                                <button class="btn btn-lg btn-primary  btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
    cli.config.Estado();
    cli.config.Ciudad();
</script>


