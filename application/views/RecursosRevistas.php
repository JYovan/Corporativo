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
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R3&i=<?php echo $indice ?>">Sitios de interés</a></li>
                                        <li class="active"><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R4&i=<?php echo $indice ?>">Revistas</a></li>
                                    </ul>
                                </div>
                            </nav>
                    </tr> 
                    <tr>
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Revistas</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://contaduriapublica.org.mx/" style="color:#999" target="_blank">&bull; Revista Contaduría Pública    </a></label></br>
                            </div> 
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.contaduriayadministracionunam.mx/" style="color:#999" target="_blank">&bull; Revista de contaduría y administración UNAM</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.revistapyme.com/" style="color:#999" target="_blank">&bull; Revista PYME       </a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.redalyc.org/coleccionHome.oa" style="color:#999" target="_blank">&bull; Red de Revistas Científicas de América Latina y el Caribe, España y Portugal </a></label></br>
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


