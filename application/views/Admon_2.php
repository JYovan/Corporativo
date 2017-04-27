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

<?php echo form_open_multipart('controlador/do_uploadA2'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Control Mobiliario</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro</strong>
                                <?php
                                foreach ($Muebles as $Muebles1) {
                                    
                                }
                                if (empty($Muebles1)) {
                                    $Nmuebles = 0;
                                } else {
                                    $Nmuebles = $Muebles1->ID;
                                }
                                ?>
                                <input class="form-control" type="hidden" name="Numero" id="Numero" value="<?php echo str_pad($Nmuebles + 1, 6, "0", STR_PAD_LEFT); ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    Denominación o nombre del mueble:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Nombre" id="Nombre" required="required">
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    Tipo de mobiliario:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <select class="form-control" id="TMobiliario" name="TMobiliario"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($TMobiliario as $TMobiliario1) { ?> 
                                            <option value="<?php echo $TMobiliario1->id_mobiliario; ?>"><?php echo $TMobiliario1->dsc_mobiliario; ?></option>
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6" align="right">
                                    Marca:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Marca" id="Marca" required="required" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Modelo (año):
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Modelo" id="Modelo" required="required" >
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
                                <div class="col-md-3 col-xs-6" align="right">
                                    Material:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Material" id="Material" required="required" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Color:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Color" id="Color" required="required" >
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
                                <div class="col-md-3 col-xs-6" align="right">
                                    Organización de resguardo:
                                </div>
                                <div class="col-md-9 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Resguardo" id="Resguardo" >
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    Otras características:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <textarea  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Caracteristicas" name="Caracteristicas" rows="5" cols="70%" class="form-control"></textarea>
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
                                <div class="col-md-3 col-xs-6" align="right">
                                    Fecha de adquisición:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  class="form-control" type="text" name="Adquisicion" id="datepicker" required="required" value="<?php echo date("d/m/Y") ?>" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Fecha de baja:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input class="form-control" type="text" name="Baja" id="datepicker2" required="required" value="<?php echo date("d/m/Y") ?>" >
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
                                <div class="col-md-3 col-xs-6" align="right">
                                    Estado del mueble:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <select class="form-control" id="Estado" name="Estado"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Nuevo">Nuevo</option>
                                        <option value="Bueno">Bueno</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                    </br>
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Proveedor:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Proveedor" id="Proveedor" >
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
                                <div class="col-md-3 col-xs-6" align="right">
                                    Número de serie:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Serie" id="Serie" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Área destino:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <select class="form-control" id="Area" name="Area"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($Area as $Area1) { ?> 
                                            <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
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
                                <div class="col-md-3 col-xs-6" align="right">
                                    Valor de adquisición:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Valor1" id="Valor1" required="required" >
                                    </br>
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Valor actual:
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Valor2" id="Valor2" >
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    Nota del registro:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <textarea  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Nota" name="Nota" rows="5" cols="70%" class="form-control"></textarea>
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    Responsable del resguardo:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <select class="form-control" id="Responsable" name="Responsable"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($Responsables as $temporal) { ?> 
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
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Adjuntar" class="control-label">Adjuntar fotografía (Max 2MB)</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" />
                                    </br>	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <label for="Adjuntar" class="control-label">(jpg, png)</label><br>
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

<?php echo form_open_multipart('controlador/Admon_2_1'); ?>     
<table width="100%">    
    <tr>
        <td bgcolor="#ff6600" align="center">
            <strong style="color:#FFF">Visualizar registros</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="col-md-12 col-xs-12">
                </br>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="col-md-12 col-xs-12">
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="left">
                    <button class="btn btn-primary" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Ver</button>
                </div>
                <div class="col-md-8 col-xs-4" id="ID_cliente" align="left">
                </div>
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=8&i=<?php echo $indice ?>'">Regresar</button>
                </div>
            </div>
        </td>
    </tr>
</table> 
</form> 
</div>


