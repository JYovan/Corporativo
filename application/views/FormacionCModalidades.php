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

    <?php echo form_open_multipart('controlador/Modalidades'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Modalidades de Educación Continua</strong>
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Conferencia
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Conferencia" class="control-label" style="text-align:justify">
                                        Actividad formativa que tiene como objetivo introducir un tema, transmitir contenidos teóricos, y narrar experiencias. Se realiza mediante exposiciones orales desarrolladas por expertos en el tema quienes en ocasiones se apoyan de recursos audiovisuales.
                                    </label>
                                    <br> 
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Coloquio
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Coloquio" class="control-label" style="text-align:justify">
                                        Actividad formativa en la que se convoca a un número limitado de personas para que debatan un problema, sin que necesariamente haya de recaer acuerdo.
                                    </label>
                                    <br> 
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Congreso
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10">
                                    <label for="Congreso" class="control-label" style="text-align:justify">
                                        Actividad formativa en la que se establece el contacto e intercambio de experiencias y opiniones en acuerdo con personas calificadas, en determinada área del conocimiento, donde se analiza la información compartida por conductores especialistas.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Curso
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Curso" class="control-label" style="text-align:justify">
                                        Actividad formativa que tiene el objetivo de trasmitir o actualizar los conocimientos sobre un área o temática específica. Con la guía de un especialista utilizando diversas técnicas didácticas de trabajo individual o colectivo.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Diploma
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Diploma" class="control-label" style="text-align:justify">

                                        Actividad formativa tiene como objetivo enriquecer la formación académica, la experiencia profesional y laboral, así como la cultura general de los participantes. Contempla un programa con una estructura curricular estricta que debe ser coherente y organizada, incluye mecanismos de evaluación parcial y/o global del desempeño del participante.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Foro
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Foro" class="control-label" style="text-align:justify">
                                        Actividad formativa en donde se reúnen un grupo reducido de personas para discutir asuntos de interés actual ante un auditorio donde en ocasiones participa en la discusión.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Jornada
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Jornada" class="control-label" style="text-align:justify">
                                        Actividad formativa generalmente monográfica y de corta duración.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Mesa Redonda
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="MesaRedonda" class="control-label" style="text-align:justify">
                                        Actividad formativa que tiene el objetivo de presentar información y opiniones sobre un mismo tema asunto desde ópticas distintas, mediante la participación de un grupo reducido un de expertos que exponen y discuten sus ideas frente a un auditorio más numeroso, que posteriormente interviene haciéndoles preguntas y comentarios.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Taller
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Taller" class="control-label" style="text-align:justify">
                                        Actividad formativa que tiene el objetivo el desarrollo de habilidades a partir de la realización de tareas específicas que dan lugar un acercamiento práctico vivencial de los conocimientos. Las actividades son formuladas por un especialista que acompaña a los participantes asesorándolos durante el proceso. Su duración es de 30 a 50 minutos.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Seminario
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Seminario" class="control-label" style="text-align:justify">
                                        Actividad formativa que tiene el objetivo  de generar el aprendizaje de un grupo a partir de su propia interacción. Los participantes aportan al seminario sus conocimientos y/o experiencias en distintos temas. La dinámica de trabajo consiste en el estudio previo e individual de material selecto, para su posterior análisis y discusión en sesiones grupales periódicas, coordinadas por un moderador. Generalmente se tiene como producto final un documento resultado de las reflexiones de los participantes.
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
                                <button class="btn btn-primary" type="submit"  id="Modalidad" name="Modalidad" value="<?php echo $indice; ?>">
                                    Simposio
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-10" >
                                    <label for="Simposio" class="control-label" style="text-align:justify">
                                        Actividad formativa de comunicación deliberada que permite la intervención secuencial de varios instructores quienes imparten a nivel especializado diversos enfoques sobre un solo tema.
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


