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
                                <!-- El logotipo y el icono que despliega el menú se agrupan
                                     para mostrarlos mejor en los dispositivos móviles -->
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

                                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                                     otro elemento que se pueda ocultar al minimizar la barra -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R1&i=<?php echo $indice ?>">Normatividad</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R2&i=<?php echo $indice ?>">Tasas, indicadores y tarifas</a></li>
                                        <li class="active"><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R3&i=<?php echo $indice ?>">Sitios de interés</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R4&i=<?php echo $indice ?>">Revistas</a></li>
                                    </ul>
                                </div>
                            </nav>
                    </tr> 
                    <tr>
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Instituciones u organizaciones</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/Paginas/Inicio.aspx" style="color:#999" target="_blank">&bull; Servicio de Administración Tributaria SAT  </a></label></br>
                            </div> 
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.imss.gob.mx/patrones/sua" style="color:#999" target="_blank">&bull; Instituto Mexicano de Seguridad Social   IMSS      </a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://portal.infonavit.org.mx/wps/wcm/connect/infonavit/patrones" style="color:#999" target="_blank">&bull; Instituto del Fondo Nacional  de la Vivienda para los Trabajadores INFONAVIT</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.stps.gob.mx/bp/index.html" style="color:#999" target="_blank">&bull; Secretaría del Trabajo y Previsión Social</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.finanzas.guanajuato.gob.mx/mapa.php?id=10" style="color:#999" target="_blank">&bull; Secretaría de Finanzas, Inversión y Administración del Estado de Guanajuato</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://sde.guanajuato.gob.mx/index.php/fortalecimiento-a-mipymes" style="color:#999" target="_blank">&bull; Secretaría de Desarrollo Económico Sustentable del Estado de Guanajuato</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://imcp.org.mx/" style="color:#999" target="_blank">&bull; Instituto Mexicano de Contadores Públicos  IMCP</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="https://www.inadem.gob.mx/" style="color:#999" target="_blank">&bull; Instituto Nacional del Emprendedor</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.inegi.org.mx/" style="color:#999" target="_blank">&bull; Instituto Nacional de Geografía y Estadística</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.dof.gob.mx/" style="color:#999" target="_blank">&bull; Diario Oficial de la Federación</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://bindermexico.com/" style="color:#999" target="_blank">&bull; Binder México</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.banxico.org.mx/" style="color:#999" target="_blank">&bull; Banco de México</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.banamex.com/" style="color:#999" target="_blank">&bull; Banamex</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.bancomer.com/index.jsp" style="color:#999" target="_blank">&bull; BBVA Bancomer</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.santander.com.mx/NuevaVersion/index.html" style="color:#999" target="_blank">&bull; Banco Santander</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.bb.com.mx/index.php" style="color:#999" target="_blank">&bull; Banco del Bajío</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.banorte.com/portal/personas/home.web" style="color:#999" target="_blank">&bull; Banorte</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.contpaqi.com/CONTPAQi/" style="color:#999" target="_blank">&bull; Contpacqi</a></label></br>
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

