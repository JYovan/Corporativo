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

    <?php echo form_open_multipart('controlador/ForAprobacion'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Aprobación de Formación Continua</strong>
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
                                <strong style="color:#FFF">Datos de asignación de la Actividad de Formación</strong>	
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Estancia" class="control-label">Actividad solicitada:</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Formacionid" name="Formacionid"  required>
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($ActividadS as $ActividadS1) { ?> 
                                            <?php
                                            $respuesta = '-';
                                            foreach ($TipoAct as $temp) {
                                                if ($temp->id_actividad == $ActividadS1->TipoActividad) {
                                                    $respuesta = $temp->dsc_actividad;
                                                }
                                            }
                                            ?>  
                                            <option value="<?php echo $ActividadS1->id; ?>"><?php echo $ActividadS1->NombreActividad . ' ' . $ActividadS1->Solicitante . ' (' . $respuesta . ') '; ?></option>
                                        <?php } ?>
                                    </select>		
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Solicitud" class="control-label">Solicitud aprobada: </label><br>  	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input type="radio" value="Sí" name="Aprobacion" id="Aprobacion" required/> Sí	
                                </div> 
                                <div class="col-md-3 col-xs-6">
                                    <input type="radio" value="No" name="Aprobacion" id="Aprobacion" required/>No 	
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
                                <label for="Costo" class="control-label">Costo:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Costo" id="Costo" >		
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
                                <label for="Responsable" class="control-label">Responsable en Defiryo de la impartición:</label><br>		
                            </div>
                            <div class="col-md-6 col-xs-6" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Responsables as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
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
                                <label for="NuevoNombreActividad" class="control-label">Nuevo nombre de la actividad:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NuevoNombreActividad" id="NuevoNombreActividad" >		
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
                                <label for="Duracion" class="control-label">Duración total en horas:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Duracion" id="Duracion" >		
                                </br>
                                </br>
                            </div>
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Horario" class="control-label">Horario de trabajo:</label><br>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Horario" id="Horario" >
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
                            <div class="col-xs-12 col-sm-12" align="left">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Actualizar información</button>
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


