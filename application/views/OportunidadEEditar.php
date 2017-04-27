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
    <?php echo form_open_multipart('controlador/OportESolicitudActualizada'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">SOLICITUD DE RECURSOS HUMANOS</strong>
                            <?php foreach ($Oportunidad as $Oportunidadid)
                                
                                ?>
                            <input type="hidden" name="ID" id="ID" value="<?php echo $Oportunidadid->id ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-4 col-sm-4" align="right">
                                    <label for="Puesto" class="control-label">Nombre del puesto ofertado:</label><br>
                                </div>
                                <div class="col-xs-8 col-sm-8">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Puesto" id="Puesto" value="<?php echo $Oportunidadid->Puesto ?>" >		
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Funciones" name="Funciones" rows="3" cols="70%" class="form-control"><?php echo $Oportunidadid->Funciones ?></textarea> 	
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Actividades" name="Actividades" rows="3" cols="70%" class="form-control"><?php echo $Oportunidadid->Actividades ?></textarea> 	
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Metas" name="Metas" rows="3" cols="70%" class="form-control"><?php echo $Oportunidadid->Metas ?></textarea> 	
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
                                <div class="col-xs-4 col-sm-4">
                                    <label for="Jornada" class="control-label">Jornada a cumplir:</label><br>
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <label for="Contratacion" class="control-label">Tipo de contratación:</label><br>	
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <label for="Sueldo" class="control-label">Sueldo ofertado:</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-4 col-sm-4">
                                    <?php
                                    $respuesta1 = '-';
                                    foreach ($Jornada as $Jornada1) {
                                        if ($Jornada1->id_jornada == $Oportunidadid->Jornada) {
                                            $respuesta1 = $Jornada1->dsc_jornada;
                                        }
                                    }
                                    ?>
                                    <input class="form-control" type="text" name="Jornada" id="Jornada" value="<?php echo $respuesta1 ?>" disabled="disabled">	
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <?php
                                    $respuesta2 = '-';
                                    foreach ($Contratacion as $Contratacion1) {
                                        if ($Contratacion1->id_contratacion == $Oportunidadid->Contratacion) {
                                            $respuesta2 = $Contratacion1->dsc_contratacion;
                                        }
                                    }
                                    ?>
                                    <input class="form-control" type="text" name="Contratacion" id="Contratacion" value="<?php echo $respuesta2 ?>" disabled="disabled">			
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Sueldo" id="Sueldo" value="<?php echo $Oportunidadid->Sueldo ?>" >	
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
                                    <label for="Lugar" class="control-label">Lugar de trabajo:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Lugar" id="Lugar" value="<?php echo $Oportunidadid->Lugar ?>" >		
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
                                    <label for="Estudios" class="control-label">Nivel de estudios solicitado para cubrir el puesto:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <?php
                                    $respuesta3 = '-';
                                    foreach ($NivelEstudios as $NivelEstudios1) {
                                        if ($NivelEstudios1->id_estudios == $Oportunidadid->Estudios) {
                                            $respuesta3 = $NivelEstudios1->dsc_estudios;
                                        }
                                    }
                                    ?>
                                    <input class="form-control" type="text" name="Estudios" id="Estudios" value="<?php echo $respuesta3 ?>" disabled="disabled">	
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
                                    <label for="ProgramasE" class="control-label">Programas educativos que cumplan con el perfil del puesto:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ProgramasE" id="ProgramasE" value="<?php echo $Oportunidadid->ProgramasE ?>" >		
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Competencias" name="Competencias" rows="3" cols="70%" class="form-control"><?php echo $Oportunidadid->Competencias ?> </textarea> 	
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Experiencia" name="Experiencia" rows="3" cols="70%" class="form-control"><?php echo $Oportunidadid->Experiencia ?> </textarea> 	
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
                                <div class="col-xs-4 col-sm-4">
                                    <label for="Genero" class="control-label">Género:</label><br>
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <label for="EstadoCivil" class="control-label">Estado Civil:</label><br>	
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <label for="Edad" class="control-label">Edad:</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-4 col-sm-4">
                                    <input class="form-control" type="text" name="Genero" id="Genero" value="<?php echo $Oportunidadid->Genero ?>" disabled="disabled">	
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <input class="form-control" type="text" name="EstadoCivil" id="EstadoCivil" value="<?php echo $Oportunidadid->EstadoCivil ?>" disabled="disabled">		
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Edad" id="Edad" value="<?php echo $Oportunidadid->Edad ?>">	
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
                                <button class="btn btn-primary  btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Actualizar</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <br>
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
        <td width="20%">    
            <button type="button" id="regresar" name="regresar" class="btn btn-lg btn-primary btn-block"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>


