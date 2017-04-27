<!-- configuramos el plugin-->



<div class="container">	

    <?php echo form_open_multipart('controlador/Cobranza'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
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
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Módulo de Recursos Electrónicos de Consulta
                            </strong>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Espacio" class="control-label" style="color:#FFF">   </label><br>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">DEFIRYO</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="http://www.matecsoluciones.mx/Corporativo" target="_blank"><img src="<?php echo base_url(); ?>imagenes/Mundo.png" width="30" height="30" /></a>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R1&i=<?php echo $indice ?>">Normatividad</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R2&i=<?php echo $indice ?>">Tasas, indicadores y tarifas</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R3&i=<?php echo $indice ?>">Sitios de interés</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R4&i=<?php echo $indice ?>">Revistas</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Leyes fiscales 2015</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_001.docx" style="color:#999">&bull; Decreto por el que se adicionan diversas disposiciones a la Ley de Premios, Estímulos y Recompensas Civiles, para crear el Premio Nacional de Cultura Contributiva. (Publicado el 27 de enero de 2015).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_002.doc" style="color:#999">&bull; Ley de Premios, Estímulos y Recompensas Civiles. (Última reforma publicada el 26 de diciembre de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_003.doc" style="color:#999">&bull; Constitución Política de los Estados Unidos Mexicanos. (Última reforma publicada el 7 de julio de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_004.docx" style="color:#999">&bull; Manual de Organización General del Servicio de Administración Tributaria. (Publicado el 12 de mayo de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_005.zip" style="color:#999">&bull; Presupuesto de Egresos de la Federación para el Ejercicio Fiscal 2015.</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_006.doc" style="color:#999">&bull; Ley de Ingresos de la Federación para el Ejercicio Fiscal de 2015 (Publicado el 13 de noviembre de 2014)</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_007.doc" style="color:#999">&bull; Ley de Firma Electrónica Avanzada (Publicada el 11 de enero de 2012).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_008.doc" style="color:#999">&bull; Ley Aduanera. Última reforma publicada el 9 de diciembre de 2013.  (Contiene las cantidades y multas actualizadas por Reglas de Carácter General en Materia de Comercio Exterior publicadas el 29 de diciembre de 2014.)</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_009.doc" style="color:#999">&bull; Ley de Comercio Exterior. (Publicada el 21 de diciembre de 2006).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_010.doc" style="color:#999">&bull; Ley de Coordinación Fiscal. (Última reforma publicada el 11 de agosto de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_011.doc" style="color:#999">&bull; Ley Federal de Derechos. (Última reforma publicada el 11 de agosto de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_012.doc" style="color:#999">&bull; Código Fiscal de la Federación. (Contiene reforma del 14 de marzo de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_013.docx" style="color:#999">&bull; Código de Comercio. (Última reforma publicada el 10 de enero de 2014). </a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_014.doc" style="color:#999">&bull; Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental. (Contiene la última reforma publicada el 14 de julio de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_015.doc" style="color:#999">&bull; Ley Federal del Impuesto sobre Automóviles Nuevos. Publicada el 27 de diciembre de 2006. (Cantidades actualizadas por Resolución Miscelánea Fiscal DOF 09-01-2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_016.doc" style="color:#999">&bull; Ley de ayuda alimentaria para los trabajadores. (Publicada el 17 de enero de 2011).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_017.doc" style="color:#999">&bull; Ley del Impuesto al Valor Agregado. (Última reforma publicada el 11 de diciembre de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_018.pdf" style="color:#999">&bull; Ley Sobre la Celebración de Tratados. (Publicada el 2 de enero de 1992).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_019.doc" style="color:#999">&bull; Ley del Servicio de Administración Tributaria. (Publicada el 9 de abril de 2012). </a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_020.doc" style="color:#999">&bull; Ley Federal de Procedimiento Administrativo. (Última reforma publicada el 9 de abril de 2012).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_021.docx" style="color:#999">&bull; Ley Federal de Procedimiento Contencioso Administrativo. (Última reforma publicada el 24 de diciembre de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_022.doc" style="color:#999">&bull; Ley Federal del Presupuesto y Responsabilidad Hacendaria. (Publicada el 11 de agosto de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_023.doc" style="color:#999">&bull; Ley de los Impuestos Generales de Importación y de Exportación. (Publicada el 13 de diciembre de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_024.doc" style="color:#999">&bull; -Decreto por el que se modifica la Tarifa de la Ley de los Impuestos Generales de Importación y de Exportación. (Publicado el 30 de julio de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_025.doc" style="color:#999">&bull;  -Decreto por el que se modifica la Tarifa de la Ley de los Impuestos Generales de Importación y de Exportación. (Publicado el 10 de diciembre de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_026.doc" style="color:#999">&bull; Ley Orgánica del Tribunal Federal de Justicia Fiscal y Administrativa. (Última reforma publicada el 3 de junio de 2011).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_027.doc" style="color:#999">&bull; Ley Orgánica de la Administración Pública Federal. (Última reforma publicada el 24 de diciembre de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_028.docx" style="color:#999">&bull;  -Decreto por el que se reforma la fracción XXVII del artículo 38 de la Ley Orgánica de la Administración Pública Federal.</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_029.doc" style="color:#999">&bull; Ley de Inversión Extranjera. (Publicada el 14 de julio de 2014. Última reforma publicada el 11 de agosto de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_030.doc" style="color:#999">&bull; Ley de Migración. (Publicada el 7 de junio de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_031.doc" style="color:#999">&bull; Ley General de Sociedades Mercantiles. (Última reforma publicada el 15 de diciembre de 2011).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_032.doc" style="color:#999">&bull; Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita. (Publicada el 17 de octubre de 2012).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_033.doc" style="color:#999">&bull; Ley del Impuesto sobre la Renta. (Última reforma publicada el 11 de diciembre de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_034.doc" style="color:#999">&bull; Ley del Impuesto Especial sobre Producción y Servicios. (Última reforma publicada el 11 de diciembre de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/Enlace_035.doc" style="color:#999">&bull; Ley Federal de los Derechos del Contribuyente. (Publicada el 23 de junio de 2005).</a></label></br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Reglamentos</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_001.doc" style="color:#999">&bull;  Reglamento del Código Fiscal de la Federación. (Publicado el 2 de abril de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_002.doc" style="color:#999">&bull; Reglamento de la Ley de Firma Electrónica Avanzada. (Publicado el 21 de marzo de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_003.doc" style="color:#999">&bull; Reglamento de la Ley Federal para la Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita. (Publicado el 16 de agosto de 2013).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_004.doc" style="color:#999">&bull; Reglamento de la Ley del Impuesto sobre la Renta. (Contiene la última reforma publicada el 04 de diciembre de 2006).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_005.pdf" style="color:#999">&bull; Reglamento de la Ley del Impuesto al Activo. (Reglamento publicado el 30 de marzo de 1989, contiene la última reforma publicada el 04-10-1993). Reglamento abrogado a partir del 1º de enero de 2008 por Decreto del 01-10-2007.</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_006.doc" style="color:#999">&bull; Reglamento de la Ley del Impuesto al Valor Agregado. (Contiene la última reforma publicado el 25 de septiembre de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_007.doc" style="color:#999">&bull; Reglamento de la Ley del Impuesto Especial sobre Producción y Servicios. (Publicado el 04 de diciembre de 2006).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_008.doc" style="color:#999">&bull; Reglamento de la Ley Aduanera. (Reglamento publicado el 6 de junio de 1996, contiene la ultima reforma publicada el 27-12-2011).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_009.pdf" style="color:#999">&bull; Reglamento de la Ley de Comercio Exterior----- Decreto por el que se reforman, adicionan y derogan diversas disposiciones del Reglamento de la Ley de Comercio Exterior. Publicado el 22 de mayo de 2014</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_010.pdf" style="color:#999">&bull; Reglamento de la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental. (Publicado el 11 de junio de 2003).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_011.doc" style="color:#999">&bull; Reglamento de la Ley de Asociaciones Público Privadas. (Publicado el 05 de noviembre de 2012).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_012.doc" style="color:#999">&bull; Reglamento de la Ley Federal de Presupuesto y Responsabilidad Hacendaria. (Contiene la reforma del 25 de abril de 2014).</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="<?php echo base_url(); ?>uploads/Recursos/EnlaceR_013.doc" style="color:#999">&bull; Decreto por el que se reforman, adicionan y derogan diversas disposiciones del Reglamento de la Ley Federal de Presupuesto y Responsabilidad Hacendaria. (Publicado el 31 de octubre de 2014).</a></label></br>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary" onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


