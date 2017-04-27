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

    <?php echo form_open_multipart('controlador/ForSolicitud'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Solicitud de Formación Continua</strong>
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="TipoActividad" class="control-label">Tipo de actividad:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <select class="form-control" id="TipoActividad" name="TipoActividad"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Actividad as $Actividad1) { ?> 
                                        <option value="<?php echo $Actividad1->id_actividad; ?>"><?php echo $Actividad1->dsc_actividad; ?></option>
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="NombreActividad" class="control-label">Nombre de la actividad:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NombreActividad" id="NombreActividad" >		
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Solicitante" class="control-label">Organización o persona física que lo solicita:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Solicitante" id="Solicitante" >		
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="ResponsableOrganizacion" class="control-label">Nombre del responsable de la actividad en la organización:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ResponsableOrganizacion" id="ResponsableOrganizacion" >		
                            </div>
                            <div class="col-xs-3 col-sm-3">

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
                                    <label for="Objetivo" class="control-label">Objetivo General de la actividad formativa:</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Objetivo" name="Objetivo" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                    <label for="Temas" class="control-label">Temas a desarrollar:</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Temas" name="Temas" rows="3" cols="70%" class="form-control"></textarea> 	
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Ciudad" class="control-label">Ciudad:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Ciudad" id="Ciudad" >		
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Domicilio" class="control-label">Domicilio:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Domicilio" id="Domicilio" >		
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Telefono" class="control-label">Teléfono:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Telefono" id="Telefono" >		
                            </div>
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Email" class="control-label">E-mail:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  class="form-control" type="email" name="Email" id="Email" >
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Pagina" class="control-label">Pagina web:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pagina" id="Pagina" >		
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Modalidad" class="control-label">Modalidad:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <select class="form-control" id="Modalidad" name="Modalidad"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Modalidad as $Modalidad1) { ?> 
                                        <option value="<?php echo $Modalidad1->id_modalidad; ?>"><?php echo $Modalidad1->dsc_modalidad; ?></option>
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="DuracionHoras" class="control-label">Duración total en horas:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="DuracionHoras" id="DuracionHoras" >	
                                </br>	
                                </br>
                            </div>
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Horario" class="control-label">Horario de trabajo:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Horario" id="Horario" >
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="FechaInicio" class="control-label">Fecha de inicio:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  value="<?php echo date("d/m/Y") ?>"  class="form-control" type="text" name="FechaInicio" id="datepicker" >
                                </br>		
                            </div>
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="FechaTermino" class="control-label">Fecha de termino:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  value="<?php echo date("d/m/Y") ?>"  class="form-control" type="text" name="FechaTermino" id="datepicker2" >
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="CupoMinimo" class="control-label">Cupo mínimo:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CupoMinimo" id="CupoMinimo" >	
                                </br>	
                            </div>
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="CupoMaximo" class="control-label">Cupo máximo:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CupoMaximo" id="CupoMaximo" >
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
                                <div class="col-md-12 col-xs-12" >
                                    <label for="Perfil" class="control-label">Perfil de los asistentes:</label><br> 
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Perfil" name="Perfil" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <button class="btn btn-lg btn-primary  btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Registrar</button>
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


