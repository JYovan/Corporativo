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

    <?php echo form_open_multipart(base_url().'index.php/controlador/EstanciaAprobacion'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">APROBAR DE ESTANCIA LABORAL</strong>
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
                        <td align="left">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <div class="col-md-2 col-xs-12" align="left">
                                    <label for="Estancia" class="control-label">Estancia solicitada:</label><br>
                                </div>
                                <div class="col-md-10 col-xs-12" align="left">
                                    <select class="form-control" id="Estanciaid" name="Estanciaid"  required>
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Estancias as $Estancias1) { ?> 
                                            <option value="<?php echo $Estancias1->id; ?>"><?php echo $Estancias1->Solicitante; ?></option>
                                        <?php } ?>
                                    </select>		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="EstanciaElegida">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-4 col-xs-4">
                                    <label for="Aprobacion" class="control-label">Solicitud aprobada </label><br>  	
                                </div>
                                <div class="col-md-4 col-xs-4">
                                    <input type="radio" value="Sí" name="Aprobacion" id="Aprobacion" required/> Sí	
                                </div> 
                                <div class="col-md-4 col-xs-4">
                                    <input type="radio" value="No" name="Aprobacion" id="Aprobacion" required/>No 	
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
                                <div class="col-md-4 col-xs-4">
                                    <label for="Apoyo" class="control-label">Se dará apoyo económico </label><br>  	
                                </div>
                                <div class="col-md-4 col-xs-4">
                                    <input type="radio" value="Sí" name="Apoyo" id="Apoyo" required/> Sí	
                                </div> 
                                <div class="col-md-4 col-xs-4">
                                    <input type="radio" value="No" name="Apoyo" id="Apoyo" required/>No 	
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
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="FormaEntrega" class="control-label">Forma de entrega del apoyo económico:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <select class="form-control" id="FormaEntrega" name="FormaEntrega" >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Apoyo as $Apoyo1) { ?> 
                                        <option value="<?php echo $Apoyo1->id_apoyo; ?>"><?php echo $Apoyo1->dsc_apoyo; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-3 col-sm-3">

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
                                <div class="col-md-3 col-xs-12">
                                    <label for="Periodicidad" class="control-label">Periodicidad del apoyo económico</label><br>  	
                                </div>
                                <div class="col-md-3 col-xs-4">
                                    <input type="radio" value="Semanal" name="Periodicidad" id="Periodicidad" > Semanal	
                                </div> 
                                <div class="col-md-3 col-xs-4">
                                    <input type="radio" value="Quincenal" name="Periodicidad" id="Periodicidad" >Quincenal 	
                                </div> 
                                <div class="col-md-3 col-xs-4">
                                    <input type="radio" value="Mensual" name="Periodicidad" id="Periodicidad" >Mensual 	
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
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-3 col-xs-6" align="right">
                                <label for="Monto" class="control-label">Monto total del apoyo:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Monto" id="Monto" >		
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
                                <label for="Responsable" class="control-label">Responsable en Defiryo del seguimiento y evaluación de la estancia:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Responsables as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                    <?php } ?>
                                </select>
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
                                <div class="col-md-6 col-xs-6">
                                    <label for="FechaInicio" class="control-label">Fecha de inicio</label><br> 	
                                </div> 
                                <div class="col-md-3 col-xs-6">
                                    <input   type="text" class="form-control" value="<?php echo date("d/m/Y") ?>" name="FechaInicio" id="datepicker" >  	
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
                                <div class="col-md-6 col-xs-6">
                                    <label for="Horario" class="control-label">Horario de la actividad</label><br> 	
                                </div> 
                                <div class="col-md-3 col-xs-6">
                                    <input   type="text" class="form-control" name="Horario" id="Horario" >  	
                                </div> 
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Enviar Solicitud</button>
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
<script>
    cli.config.Estancia();
</script>

