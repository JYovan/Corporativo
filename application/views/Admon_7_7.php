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

<?php echo form_open_multipart('controlador/IncSolicitud'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Solicitud de Incapacidad laboral</strong>
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
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Tipo de ausencia laboral:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="TAusencia" name="TAusencia"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Incapacidad">Incapacidad</option>
                                        <option value="Ausencia con permiso">Ausencia con permiso</option>
                                        <option value="Inasistencia">Inasistencia</option>
                                    </select>
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Número de días de la ausencia laboral:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  class="form-control" type="number" name="NDias" id="NDias">
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Número de horas de la ausencia laboral:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   class="form-control" type="number" name="NHoras" id="NHoras">
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
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Periodo de la ausencia
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Día inicial:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="D1Ausencia" id="datepicker" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Día de término:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="D2Ausencia" id="datepicker2" required="required" >
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
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Tipo de incapacidad laboral:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="TIncapacidad" name="TIncapacidad" >
                                        <option value="">Selecciona</option>
                                        <option value="Por enfermedad general">Por enfermedad general</option>
                                        <option value="Por maternidad">Por maternidad</option>
                                        <option value="Por riesgo de trabajo">Por riesgo de trabajo</option>
                                    </select>
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Tipo de permiso laboral:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Tpermiso" name="Tpermiso" >
                                        <option value="">Selecciona</option>
                                        <option value="Atención de salud">Atención de salud</option>
                                        <option value="Atención de salud de familiares">Atención de salud de familiares</option>
                                        <option value="Asuntos escolares de hijos">Asuntos escolares de hijos</option>
                                        <option value="Asuntos familiares">Asuntos familiares</option>
                                        <option value="Asuntos jurídicos personales">Asuntos jurídicos personales</option>
                                        <option value="Fallecimiento de familiar">Fallecimiento de familiar</option>
                                        <option value="Formación académica">Formación académica</option>
                                        <option value="Premio o reconocimiento">Premio o reconocimiento</option>
                                        <option value="Trámites administrativos">Trámites administrativos</option>
                                        <option value="Viajes">Viajes</option>
                                    </select>
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Ausencia laboral remunerada:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Remunerada" name="Remunerada"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
