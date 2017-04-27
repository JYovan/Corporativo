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
                                        <li class="active"><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R2&i=<?php echo $indice ?>">Tasas, indicadores y tarifas</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R3&i=<?php echo $indice ?>">Sitios de interés</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/controlador/Recursos?Recurso=R4&i=<?php echo $indice ?>">Revistas</a></li>
                                    </ul>
                                </div>
                            </nav>
                    </tr> 
                    <tr>
                        <td bgcolor="#548dd4" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Tablas, Tasas, Tarifas e indicadores Fiscales (DOF)</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/derechos_2012.aspx" style="color:#999" target="_blank">&bull; Cantidades a pagar por derechos.</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/cpp.aspx" style="color:#999" target="_blank">&bull; Costo porcentual promedio de captación.</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/inpc_2015.aspx" style="color:#999" target="_blank">&bull; Índice Nacional de Precios al Consumidor.</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/salarios_minimos.aspx" style="color:#999" target="_blank">&bull; Salarios mínimos</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/tasas_ieps_2015.aspx" style="color:#999" target="_blank">&bull; Factores y tasas del impuesto especial sobre producción y servicios</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/tarifa_anual.aspx" style="color:#999" target="_blank">&bull; Tarifas para el cálculo del ISR. Declaración Anual</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/tarifas_pp.aspx" style="color:#999" target="_blank">&bull; Tarifas para cálculo de ISR. Pagos provisionales</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/tasas_de_recargos.aspx" style="color:#999" target="_blank">&bull; Tasas de recargos</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/udis_principal.aspx" style="color:#999" target="_blank">&bull; Valor de las UDIS</a></label></br>
                            </div>
                            <div class="col-xs-12 col-sm-12" align="left">
                                <label class="control-label"><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/tipo_cambio.aspx" style="color:#999" target="_blank">&bull; Tipo de cambio</a></label></br>
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

