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
    <?php echo form_open_multipart('controlador/ForEvaluacion'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Evaluación de la Actividad</strong>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-4">
                                <br />		
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%">
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6">
                                    Curso a evaluar:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="IDCurso" name="IDCurso"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Cursos as $Cursos1) { ?> 
                                            <option value="<?php echo $Cursos1->id; ?>"><?php echo $Cursos1->NombreActividad; ?></option>
                                        <?php } ?>
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
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Aspectos a evaluar en el instructor o facilitador</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#ff6600">
                                            Manejo del grupo
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Excelente
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Bueno (a)
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Regular
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Malo (a)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Dominio de contenido
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Dominio" id="Dominio" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Dominio" id="Dominio" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Dominio" id="Dominio" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Dominio" id="Dominio" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Uso de materiales didácticos
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Materiales" id="Materiales" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Materiales" id="Materiales" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Materiales" id="Materiales" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Materiales" id="Materiales" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Habilidad didáctica pedagógica
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Habilidad" id="Habilidad" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Habilidad" id="Habilidad" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Habilidad" id="Habilidad" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Habilidad" id="Habilidad" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#ff6600">
                                            Contenido/Claridad
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Excelente
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Bueno (a)
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Regular
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Malo (a)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Estructuración
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Estructura" id="Estructura" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Estructura" id="Estructura" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Estructura" id="Estructura" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Estructura" id="Estructura" required/>
                                        </td>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Acorde a objetivos planeados
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Objetivos" id="Objetivos" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Objetivos" id="Objetivos" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Objetivos" id="Objetivos" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Objetivos" id="Objetivos" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Fundamentación teórica
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Fundamentos" id="Fundamentos" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Fundamentos" id="Fundamentos" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Fundamentos" id="Fundamentos" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Fundamentos" id="Fundamentos" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Fundamentación práctica
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Practica" id="Practica" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Practica" id="Practica" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Practica" id="Practica" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Practica" id="Practica" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Aspectos a evaluar de la actividad</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#ff6600">
                                            Espacio Físico
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Excelente
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Bueno (a)
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Regular
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Malo (a)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Limpieza
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Limpieza" id="Limpieza" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Limpieza" id="Limpieza" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Limpieza" id="Limpieza" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Limpieza" id="Limpieza" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Mobiliario
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Mobiliario" id="Mobiliario" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Mobiliario" id="Mobiliario" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Mobiliario" id="Mobiliario" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Mobiliario" id="Mobiliario" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Equipo tecnológico
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="Equipo" id="Equipo" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="Equipo" id="Equipo" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="Equipo" id="Equipo" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="Equipo" id="Equipo" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#ff6600">
                                            Materiales impresos
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Excelente
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Bueno (a)
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Regular
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Malo (a)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Calidad
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="CalidadMI" id="CalidadMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="CalidadMI" id="CalidadMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="CalidadMI" id="CalidadMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="CalidadMI" id="CalidadMI" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Congruente con lo analizado en la actividad formativa
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="CongruenciaMI" id="CongruenciaMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="CongruenciaMI" id="CongruenciaMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="CongruenciaMI" id="CongruenciaMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="CongruenciaMI" id="CongruenciaMI" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Entrega oportuna
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="EntregaMI" id="EntregaMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="EntregaMI" id="EntregaMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="EntregaMI" id="EntregaMI" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="EntregaMI" id="EntregaMI" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#ff6600">
                                            Materiales electrónicos
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Excelente
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Bueno (a)
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Regular
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            Malo (a)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Calidad
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="CalidadME" id="CalidadME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="CalidadME" id="CalidadME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="CalidadME" id="CalidadME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="CalidadME" id="CalidadME" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Congruente con lo analizado en la actividad formativa
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="CongruenciaME" id="CongruenciaME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="CongruenciaME" id="CongruenciaME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="CongruenciaME" id="CongruenciaME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="CongruenciaME" id="CongruenciaME" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f79646">
                                            Entrega oportuna
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Excelente" name="EntregaME" id="EntregaME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Bueno" name="EntregaME" id="EntregaME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Regular" name="EntregaME" id="EntregaME" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="Malo" name="EntregaME" id="EntregaME" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Calificación del curso </strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            10
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            9
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            8
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            7
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            6 ó menos
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="10" name="CalifCurso" id="CalifCurso" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="9" name="CalifCurso" id="CalifCurso" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="8" name="CalifCurso" id="CalifCurso" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="7" name="CalifCurso" id="CalifCurso" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="6omenos" name="CalifCurso" id="CalifCurso" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Calificación del instructor o facilitador </strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <table width="100%">
                                    <tr>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            10
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            9
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            8
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            7
                                        </td>
                                        <td width="20%" bgcolor="#8db3e2" align="center">
                                            6 ó menos
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="10" name="CalifInstruc" id="CalifInstruc" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="9" name="CalifInstruc" id="CalifInstruc" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="8" name="CalifInstruc" id="CalifInstruc" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="7" name="CalifInstruc" id="CalifInstruc" required/>
                                        </td>
                                        <td bgcolor="#ffffff" align="center">
                                            <input type="radio" value="6omenos" name="CalifInstruc" id="CalifInstruc" required/>
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Calificar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-lg btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


