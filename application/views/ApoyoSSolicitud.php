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

    <?php echo form_open_multipart('controlador/Donativos'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Solicitud de donativo</strong>
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
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="Descripcion" class="control-label">¿Quién solicita el apoyo?</label><br> 
                                </div>  
                                <div class="col-xs-4 col-sm-4">
                                    <select class="form-control" id="Solicita" name="Solicita"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Persona">Persona</option>
                                        <option value="Institución">Institución</option>
                                    </select>
                                </div>
                                <div class="col-xs-2 col-sm-2">

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
                                <div class="col-xs-4 col-sm-4" align="right">
                                    <label for="NombreExterno" class="control-label">Nombre completo:</label><br>
                                </div>
                                <div class="col-xs-8 col-sm-8">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Nombre" id="Nombre" >		
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
                                <div class="col-xs-4 col-sm-4" align="right">
                                    <label for="NombreExterno" class="control-label">Registro Federal de Contribuyentes:</label><br>
                                </div>
                                <div class="col-xs-8 col-sm-8">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="RFC" id="RFC" >		
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
                                <div class="col-xs-4 col-sm-4" align="right">
                                    <label for="NombreExterno" class="control-label">Domicilio:</label><br>
                                </div>
                                <div class="col-xs-8 col-sm-8">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Domicilio" id="Domicilio" >		
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
                            <div class="col-xs-12 col-sm-12">
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-4 col-sm-4" align="right">
                                    <label for="NombreExterno" class="control-label">Representante:</label><br>
                                </div>
                                <div class="col-xs-8 col-sm-8">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Representante" id="Representante" >		
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
                                <div class="col-xs-4 col-sm-4" align="right">
                                    <label for="NombreExterno" class="control-label">Clave única de Registro de Población (Representante):</label><br>
                                </div>
                                <div class="col-xs-8 col-sm-8">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CURP" id="CURP" >		
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
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada" class="control-label">Correo electrónico:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono" class="control-label">Celular:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pagina" class="control-label">Teléfono:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="text" name="Correo" id="Correo" required>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="text" name="Cel" id="Cel" required>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="text" name="Tel" id="Tel">
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
                                    <label for="Instagram" class="control-label">Instagram:</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6">		  	
                                    <input class="form-control" type="text" id="Instagram" name="Instagram" >		  	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Objetivo u Objeto social</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Objetivo" name="Objetivo" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Servicios o actividades que realiza</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Servicios" name="Servicios" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Principales logros</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Logros" name="Logros" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-6 col-sm-6" >
                                    <label for="Descripcion" class="control-label">El lugar donde desempeñan las actividades es:</label><br> 
                                </div>  
                                <div class="col-xs-4 col-sm-4">
                                    <select class="form-control" id="Lugar" name="Lugar"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Propio">Propio</option>
                                        <option value="Rentado">Rentado</option>
                                        <option value="Comodato">Comodato</option>
                                    </select>
                                </div>
                                <div class="col-xs-2 col-sm-2">

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
                                <div class="col-xs-6 col-sm-6" >
                                    <label for="Descripcion" class="control-label">Fuente principal de sus ingresos:</label><br> 
                                </div>  
                                <div class="col-xs-4 col-sm-4">
                                    <select class="form-control" id="Ingresosx" name="Ingresosx"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Ingresos por servicios">Ingresos por servicios  de la organización</option>
                                        <option value="Ingresos por participacion">Ingresos por participación en proyectos</option>
                                        <option value="Ingresos por actividades">Ingresos por actividades distintas de los servicios y objeto social </option>
                                        v<option value="Donativos">Donativos</option>
                                    </select>
                                </div>
                                <div class="col-xs-2 col-sm-2">

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
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Datos de la actividad o proyecto 
                                    para el que solicita el donativo </strong>	
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="NombreExterno" class="control-label">Nombre de la actividad o proyecto:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Proyecto" id="Proyecto" >		
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
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="NombreExterno" class="control-label">Duración:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Duracion" id="Duracion" >		
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Problemática o necesidad que atiende</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Problematica" name="Problematica" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Objetivo general</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="ObjGral" name="ObjGral" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Metas</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Metas" name="Metas" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Población objetivo o beneficiarios</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Poblacion" name="Poblacion" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Metodología para evaluar los resultados logros</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Metodologia" name="Metodologia" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="NombreExterno" class="control-label">Lugar de trabajo:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Ltrabajo" id="Ltrabajo" >		
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
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="NombreExterno" class="control-label">Monto del donativo:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Donativo" id="Donativo" >		
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Descripcion" class="control-label">Describir las actividades en que se aplicará en su caso el recurso aportado</br>
                                        Ejemplo: 1. Acción 1, $ Monto; 2. Acción 2, $ Monto</label>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="DActividad" name="DActividad" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <p><label for="Descripcion" class="control-label">¿Cómo impactará o beneficiará al proyecto la cantidad aportada?</label><br>         </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Impacto" name="Impacto" rows="3" cols="70%" class="form-control"></textarea> 	
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>


