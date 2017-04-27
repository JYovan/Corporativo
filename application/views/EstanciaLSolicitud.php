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

    <?php echo form_open_multipart(base_url().'index.php/controlador/EstanciaSolicitud'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Solicitud de estancia laboral</strong>
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
                                <label for="NombreProyecto" class="control-label">Nombre del proyecto de estancia profesional:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <select class="form-control" id="NombreProyecto" name="NombreProyecto"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estancia as $Estancia1) { ?> 
                                        <option value="<?php echo $Estancia1->id_estancia; ?>"><?php echo $Estancia1->dsc_estancia; ?></option>
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
                                <label for="Solicitante" class="control-label">Nombre del solicitante:</label><br>
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
                                <label for="NivelEstudios" class="control-label">Nivel de estudios:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <select class="form-control" id="NivelEstudios" name="NivelEstudios"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estudios as $Estudios1) { ?> 
                                        <option value="<?php echo $Estudios1->id_estudios; ?>"><?php echo $Estudios1->dsc_estudios; ?></option>
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
                                <label for="ProgramaEducativo" class="control-label">Programa educativo de estudio:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ProgramaEducativo" id="ProgramaEducativo" >		
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
                                <label for="Institucion" class="control-label">Nombre de la institución u  organización de procedencia:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Institucion" id="Institucion" >		
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
                                <label for="Sector" class="control-label">Sector:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <select class="form-control" id="Sector" name="Sector"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Sector as $Sector1) { ?> 
                                        <option value="<?php echo $Sector1->id_regimen; ?>"><?php echo $Sector1->dsc_regimen; ?></option>
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
                                <div class="col-xs-12 col-sm-12">
                                    <label for="DomicilioInstitucion" class="control-label">Domicilio de la institución de procedencia</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="DomicilioInstCalle" class="control-label">Calle:</label>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="DomicilioInstCalle" id="DomicilioInstCalle" >
                            </div>
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="DomicilioInstNumero" class="control-label">Número:</label>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="DomicilioInstNumero" id="DomicilioInstNumero" >
                            </div>
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="DomicilioInstColonia" class="control-label">Colonia:</label>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="DomicilioInstColonia" id="DomicilioInstColonia" >
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
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="DomicilioInstTelefono" class="control-label">Teléfono:</label>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="DomicilioInstTelefono" id="DomicilioInstTelefono" >
                            </div>
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="DomicilioInstCiudad" class="control-label">Estado:</label>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <select class="form-control" id="Estado" name="Estado"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estado as $Estado1) { ?> 
                                        <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="DomicilioInstEstado" class="control-label">Ciudad:</label>
                            </div>
                            <div class="col-md-2 col-xs-6" id="Ciudad2">
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
                            <div class="col-md-2 col-xs-6" align="right">
                                <label for="Duracion" class="control-label">Duración de la estancia:</label>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <select class="form-control" id="Duracion" name="Duracion"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Duracion as $Duracion1) { ?> 
                                        <option value="<?php echo $Duracion1->id_duracion; ?>"><?php echo $Duracion1->dsc_duracion; ?></option>
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Justificacion" class="control-label">Justificación de la estancia:</label><br> 
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Justificacion" name="Justificacion" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                    <label for="Objetivo" class="control-label">Objetivo de la estancia:</label><br> 
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
                                    <label for="Metas" class="control-label">Metas de la estancia:</label><br> 
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Metas" name="Metas" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                    <label for="Actividades" class="control-label">Actividades a realizar:</label><br> 
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Actividades" name="Actividades" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Enviar Solicitud</button>
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
    cli.config.Ciudad();
</script>


