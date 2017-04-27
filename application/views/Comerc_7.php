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
<?php echo form_open_multipart('controlador/Comerc_7_disp'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Dispersión de la vivienda</strong>
                        </td>
                    </tr>   



                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Nombre del fideicomiso</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                            <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <label for="Redes" class="control-label">Información de la vivienda</label>
                                <hr  color="#000033"/>	
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Fecha en notificación de la dispersión de recursos  por la Institución Fiduciaria  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="FechaNotDis" id="datepicker" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Fecha de notificación de la dispersión de recursos a Corporación Rabina 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="FechaNotRabina" id="datepicker2" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Nombre de quien notifica  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="NombreNotif" id="NombreNotif">
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Nombre de quien recibe notificación de transmisión en Corporación Rabina
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="NombreNotifRabina" id="NombreNotifRabina">
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>




                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Datos de identificación de la vivienda</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Manzana:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoManzana">
                                    <select class="form-control" id="Manzana" name="Manzana"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Lote:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoLotes">
                                    <select class="form-control" id="Lotes" name="Lotes"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Viviendas:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoViviendas">
                                    <select class="form-control" id="Viviendas" name="Viviendas"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Notificación:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoNnotificacion">
                                    <input   type="number" class="form-control" name="NumNotificacion" id="NumNotificacion" value="" required="required">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-12 col-xs-12">
                                <button class="btn btn-primary" type="button" id="Agregar" name="Agregar">Agregar</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-12 col-xs-12" id="AgregaDispersion">
                                <input   type="hidden" name="i" id="i" value="<?php echo 0 ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-primary" type="button"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Monto de fideicomiso  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" step="0.01" class="form-control" name="MontoFideicomiso" id="MontoFideicomiso" required>
                                    <br>
                                </div>  	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Monto para fideicomitente externo
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" step="0.01" class="form-control" name="Montofideicomitente" id="Montofideicomitente" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Monto para fideicomitente Corporación Rabina 
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="number" step="0.01" class="form-control" name="MontofideicomitenteRabina" id="MontofideicomitenteRabina" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Fecha de la dispersión en cuenta
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="FechaDispersion" id="datepicker3" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Cantidad dispersada  
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="number" step="0.01" class="form-control" name="CantidadDispersada" id="CantidadDispersada" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Cuenta de la corporación de dispersión del recurso
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="CuentaDispersion" id="CuentaDispersion">
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Referencia de la transferencia 
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="ReferenciaTran" id="ReferenciaTran">
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-12 col-xs-12" id="AgregaDispersion2">

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
            <button type="button" id="regresar" name="regresar" class="btn btn-lg btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ManzanaF();
    cli.config.LotesF();
    cli.config.LotesFM();
    cli.config.ViviendasF();
    cli.config.AgregaVivDispersion();
    cli.config.GuardaVivDispersion();
    cli.config.ViviendasInFo();
    cli.config.NumNotificacion();
</script>

