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

<?php echo form_open_multipart('controlador/Tecnologia_2'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">MÓDULO DE INFRAESTRUCTURA TECNOLÓGICA</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Infraestructura tecnológica</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Nombre" class="control-label">Registro de Servicio Correctivo de Equipo de Cómputo</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="Tipo" class="control-label">Número de servicio:</label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <?php
                                    $N = 0;
                                    foreach ($RefTipo2 as $RefTipo1) {
                                        $N = $RefTipo1->ID;
                                    }
                                    if (empty($RefTipo1)) {
                                        $N = 0;
                                    }
                                    ?>
                                    <input  style="text-transform:uppercase" value="DC-<?php echo str_pad($N + 1, 6, "0", STR_PAD_LEFT); ?>-<?php echo date("Y"); ?>" class="form-control" type="text" name="Serie" id="Serie" required>		
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="Tipo" class="control-label">Fecha de servicio:</label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaServicio" id="datepicker" required>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="Categoria" class="control-label">Equipo:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Equipo" name="Equipo"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($Equipo as $RefCategoria1) { ?> 
                                            <option value="<?php echo $RefCategoria1->ID; ?>"><?php echo $RefCategoria1->Nombre . "-" . $RefCategoria1->Marca . "-" . $RefCategoria1->Modelo . "-" . $RefCategoria1->Serie; ?></option>
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Tipo del servicio</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Hardware</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Hardware" id="Hardware" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Hardware" id="Hardware" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Hardware" id="Hardware" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesHardware" id="ObservacionesHardware">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Periféricos</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Perifericos" id="Perifericos" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Perifericos" id="Perifericos" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Perifericos" id="Perifericos" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesPerifericos" id="ObservacionesPerifericos">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Software</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Software" id="Software" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Software" id="Software" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Software" id="Software" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesSoftware" id="ObservacionesSoftware">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Antivirus</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Antivirus" id="Antivirus" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Antivirus" id="Antivirus" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Antivirus" id="Antivirus" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesAntivirus" id="ObservacionesAntivirus">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Acceso a internet</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Internet" id="Internet" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Internet" id="Internet" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Internet" id="Internet" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesInternet" id="ObservacionesInternet">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Intranet</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Intranet" id="Intranet" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Intranet" id="Intranet" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Intranet" id="Intranet" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesIntranet" id="ObservacionesIntranet">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Servicio de Correo Electrónico</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Correo" id="Correo" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Correo" id="Correo" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Correo" id="Correo" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesCorreo" id="ObservacionesCorreo">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Asesoría técnica</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Asesoria" id="Asesoria" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Asesoria" id="Asesoria" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Asesoria" id="Asesoria" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesAsesoria" id="ObservacionesAsesoria">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Servicio" class="control-label">Otro</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Configuración
                                    <input type="radio" value="Configuracion" name="Otro" id="Otro" />
                                    Instalación
                                    <input type="radio" value="Instalacion" name="Otro" id="Otro" />
                                    Reparación
                                    <input type="radio" value="Reparacion" name="Otro" id="Otro" />
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesOtro" id="ObservacionesOtro">
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
                                <strong style="color:#FFF">Descripción del servicio</strong>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Asunto" class="control-label">Propuesta o solución al problema:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <textarea id="Propuesta" name="Propuesta" rows="5" cols="70%" class="form-control"></textarea> 		
                                </div>
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
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-3" align="right">
                                    <label for="Servicio" class="control-label">Fecha de solución:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-3">
                                    <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaSolucion" id="FechaSolucion" required>		
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-3" align="right">
                                    <label for="Servicio" class="control-label">Hora de inicio:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-3">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="HrInicio" id="HrInicio" required>		
                                </div>

                                <div class="col-md-6 col-xs-3" align="right">
                                    <label for="Servicio" class="control-label">Hora de término:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-3">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="HrTermino" id="HrTermino" required>		
                                </div>	
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
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-3" align="right">
                                    <label for="Servicio" class="control-label">Nombre del asesor responsable:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-9">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Asesor" id="Asesor" required>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-3" align="right">
                                    <label for="Servicio" class="control-label">Nombre del usuario del equipo:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-9">
                                    <select class="form-control" id="Usuario" name="Usuario"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($Responsables as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
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
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=16&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


