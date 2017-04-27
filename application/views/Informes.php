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
    <?php echo form_open_multipart('Reportes/IDInformes'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Módulo de Informes
                            </strong>
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
                        <td bgcolor="#3a545f">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Impuestos" class="control-label" style="color:#FFF">Informes preestablecidos</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Metas</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelMetas_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Metas de la Organización  
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Ingresos</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelIngresos_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Honorarios mensuales cobrados 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelIngresos_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Honorarios cobrados  
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelIngresos_3">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Recibos de honorarios emitidos 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelIngresos_4">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Deposito en cuentas bancarias de la organización 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelIngresos_5">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Operaciones de la caja de efectivo  
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Egresos</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelEgresos_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Pago a terceros  
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelEgresos_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Saldos diarios de cuentas de efectivo 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelEgresos_3">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Padrón de proveedores  
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelEgresos_4">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Operaciones con proveedores 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelPagosProgramados">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Pagos programados 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Servicios</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelDirectorio">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Directorio
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/Excel">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Expediente
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelServicios_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Referencias de documentos y trámites  
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelServicios_3">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Documentación para trámites contables
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelServicios_4">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Total de declaraciones de pago de impuestos 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelServicios_5">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Total de trámites contables
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Gestión de Personal</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelPersonal_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Expediente de empleado  
                            </div>
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelPersonal_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Ausencias laborales de los empleados 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelPersonal_3">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Oportunidades de empleo publicadas 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelPersonal_4">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Solicitudes de empleo
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Recursos Materiales</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelMateriales_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Padrón de inmuebles 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelMateriales_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Padrón de muebles 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelMateriales_3">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Ingreso de material
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelMateriales_4">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Asignación de artículos y materiales 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Unidades de Transporte</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelTransportes_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Padrón de unidades de transporte
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelTransportes_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Solicitudes de unidades de transporte 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Vinculación con la Sociedad</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelVinculacion_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Temas de actividades formativas
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelVinculacion_2">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Solicitudes de actividades formativas
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelVinculacion_3">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Evaluaciones de actividades formativas 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelVinculacion_4">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Temas de estancias profesionales 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelVinculacion_5">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Solicitudes de estancias profesionales
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelVinculacion_6">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Solicitudes de donativos 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Infraestructura Tecnológica</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/Tecnologia_1">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Servicios al equipo de cómputo
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <strong style="color:#FFF">Transmisión</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-10 col-xs-10">
                                <a href="<?php echo base_url(); ?>index.php/Reportes/ExcelTransmision">
                                    <img src="<?php echo base_url(); ?>imagenes/Excel_logo.jpg" width="30" height="30" />
                                </a>
                                Transmisiones
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td bgcolor="#3a545f">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Impuestos" class="control-label" style="color:#FFF">Informes sobre el cliente</label><br>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Nombre_cliente" class="control-label">Nombre del cliente:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="ID_cliente2">
                                <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                        <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <blockquote>
                                    <br>
                                    <input type="radio" value="1" name="IDInforme" id="IDInforme" required/> Trámites contables
                                    <br>
                                    <input type="radio" value="2" name="IDInforme" id="IDInforme" required/> Trámites de Cálculo Fiscal
                                    <br>
                                    <input type="radio" value="3" name="IDInforme" id="IDInforme" required/> Trámites IMSS
                                    <br>
                                    <input type="radio" value="4" name="IDInforme" id="IDInforme" required/> Nómina de clientes
                                    <br>
                                    <input type="radio" value="5" name="IDInforme" id="IDInforme" required/> Honorarios brindados cobrados
                                    <br>
                                    <input type="radio" value="6" name="IDInforme" id="IDInforme" required/> Honorarios pagados
                                    <br>

                                </blockquote>   
                            </div>
                        </td>
                    </tr> 


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">   
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Consultar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=11&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


