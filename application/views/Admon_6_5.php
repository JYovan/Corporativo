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

<?php echo form_open_multipart('controlador/TranspSolicitud'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Solicitud de unidad de transporte</strong>
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
                                <div class="col-md-3 col-xs-6">
                                    Unidad de transporte:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Unidad" name="Unidad"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Unidad as $Unidad1) { ?> 
                                            <option value="<?php echo $Unidad1->IDUnidad; ?>"><?php echo $Unidad1->Tipo . ' ' . $Unidad1->Marca . ' ' . $Unidad1->Modelo . ' ' . $Unidad1->Color; ?></option>
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
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Nombre de la comisión:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Comision" id="Comision" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Fecha de la comisión:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaComision" id="datepicker" required="required" >
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
                                    Descripción de la comisión (Ruta):
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <textarea id="Descripcion" name="Descripcion" rows="5" cols="70%" class="form-control"></textarea>
                                    </br>
                                </div>    
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Estado Destino:
                                </div>
                                <div class="col-md-12 col-xs-6" align="right" id="Estado2">
                                    <select class="form-control" id="Estado" name="Estado"  required >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Estado as $Estado1) { ?> 
                                            <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
<?php } ?>
                                    </select>	
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Ciudad Destino:
                                </div>
                                <div class="col-md-12 col-xs-6" align="right" id="Ciudad2">
                                    <select class="form-control" id="Ciudad" name="Ciudad"  required >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                            <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
<?php } ?>
                                    </select>			
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
                                    Lugar de salida:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="LugarSalida" id="LugarSalida" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Hora de salida:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("H:i") ?>" class="form-control" type="text" name="HoraSalida" id="HoraSalida" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Hora de regreso:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("H:i") ?>" class="form-control" type="text" name="HoraRegreso" id="HoraRegreso" required="required" >
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
                                    Duración de la comisión (hrs):
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Duracion" id="Duracion" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Número de personas que abordarán la unidad:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pasajeros" id="Pasajeros" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Nombre de las personas que abordarán la unidad:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <textarea id="NombresPasajeros" name="NombresPasajeros" rows="5" cols="70%" class="form-control"></textarea>
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
                                <div class="col-md-3 col-xs-12">
                                    Conductor del vehículo:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <select class="form-control" id="Conductor" name="Conductor">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                    </select>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=84&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>