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

    <?php echo form_open_multipart('controlador/OportESolicitud'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Solicitud de Recursos Humanos</strong>
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
                                <div class="col-md-4 col-xs-6" align="right">
                                    <label for="Puesto" class="control-label">Nombre del puesto ofertado:</label><br>
                                </div>
                                <div class="col-md-8 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Puesto" id="Puesto" >		
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
                                    <label for="Funciones" class="control-label">Funciones del puesto</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Funciones" name="Funciones" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                    <label for="Actividades" class="control-label">Actividades del puesto</label><br> 
                                </div>  
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Metas" class="control-label">Metas del puesto</label><br> 
                                </div>  
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
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="Jornada" class="control-label">Jornada a cumplir:</label>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control" id="Jornada" name="Jornada"  required>
                                            <option value="">Selecciona</option>
                                            <?php foreach ($Jornada as $Jornada1) { ?> 
                                                <option value="<?php echo $Jornada1->id_jornada; ?>"><?php echo $Jornada1->dsc_jornada; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="Contratacion" class="control-label">Tipo de contratación:</label>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control" id="Contratacion" name="Contratacion"  required>
                                            <option value="">Selecciona</option>
                                            <?php foreach ($Contratacion as $Contratacion1) { ?> 
                                                <option value="<?php echo $Contratacion1->id_contratacion; ?>"><?php echo $Contratacion1->dsc_contratacion; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="Sueldo" class="control-label">Sueldo ofertado:</label>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Sueldo" id="Sueldo" >	
                                    </div>
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
                                <div class="col-md-6 col-xs-12" align="right">
                                    <label for="Lugar" class="control-label">Lugar de trabajo:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Lugar" id="Lugar" >		
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
                                <div class="col-md-6 col-xs-12" align="right">
                                    <label for="Estudios" class="control-label">Nivel de estudios solicitado para cubrir el puesto:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" id="Estudios" name="Estudios"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($NivelEstudios as $NivelEstudios1) { ?> 
                                            <option value="<?php echo $NivelEstudios1->id_estudios; ?>"><?php echo $NivelEstudios1->dsc_estudios; ?></option>
                                        <?php } ?>
                                    </select>		
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
                                <div class="col-md-6 col-xs-12" align="right">
                                    <label for="ProgramasE" class="control-label">Programas educativos que cumplan con el perfil del puesto:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ProgramasE" id="ProgramasE" >		
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
                                    <label for="Competencias" class="control-label">Competencias( conocimientos y habilidades) requeridas para el puesto</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Competencias" name="Competencias" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                    <label for="Experiencia" class="control-label">Experiencia laboral requerida para el puesto</label><br> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Experiencia" name="Experiencia" rows="3" cols="70%" class="form-control"></textarea> 	
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
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="Jornada" class="control-label">Género:</label>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control" id="Genero" name="Genero"  required>
                                            <option value="">Selecciona</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Indistinto">Indistinto</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="Contratacion" class="control-label">Estado Civil:</label>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control" id="EstadoCivil" name="EstadoCivil"  required>
                                            <option value="">Selecciona</option>
                                            <option value="Soltero(a)">Soltero(a)</option>
                                            <option value="Casado(a)">Casado(a)</option>
                                            <option value="Divorviado(a)">Divorciado(a)</option>
                                            <option value="Unión_libre(a)">Unión libre(a)</option>
                                            <option value="Indistinto">Indistinto</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="Sueldo" class="control-label">Edad:</label>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Edad" id="Edad" >	
                                    </div>
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
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Procedimiento" class="control-label">
                                    Procedimiento:
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="Requisitos" class="control-label">
                                        <p>-Llenar solicitud de empleo en línea.</p>
                                        <p>-Recibir correo electrónico de confirmación indicándole la fecha, lugar y persona con quien  debe presentarse a entrevista.</p>
                                        <p>-Presentarse a la entrevista laboral con curriculum vitae en extenso.</p> 
                                        <p>-Esperar los resultados del proceso de selección.</p>

                                    </label>
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
                                <button class="btn btn-primary  btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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


