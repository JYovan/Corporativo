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

    <?php echo form_open_multipart('controlador/do_uploadA3'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro de artículos y materiales</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro</strong>
                                <?php
                                foreach ($Materiales as $Materiales1) {
                                    
                                }
                                if (empty($Materiales1)) {
                                    $Nmateriales = 0;
                                } else {
                                    $Nmateriales = $Materiales1->ID;
                                }
                                ?>
                                <input class="form-control" type="hidden" name="Numero" id="Numero" value="<?php echo str_pad($Nmateriales + 1, 6, "0", STR_PAD_LEFT); ?>">
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
                                    Organización de resguardo:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Resguardo" id="Resguardo" required="required" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    Descripción del artículo o material:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Material" id="Material" required="required" >
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
                                    Marca:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Marca" id="Marca" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    Estilo / Modelo:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Modelo" id="Modelo" >
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
                                    Forma de entrada:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <select class="form-control" id="Entrada" name="Entrada" >
                                        <option value="">Selecciona</option> 
                                        <option value="Por unidad">Por unidad</option>
                                        <option value="Por paquete">Por paquete</option>
                                        <option value="Por caja">Por caja</option>
                                    </select>
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    Fecha de entrada:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input class="form-control" type="text" name="Fecha" id="datepicker" required="required" value="<?php echo date("d/m/Y") ?>">
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
                                    Número de cajas:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Cajas" id="Cajas">
                                    </br>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Costo por caja:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CostoCaja" id="CostoCaja">
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
                                    Número de paquetes:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Paquete" id="Paquete">
                                    </br>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Costo por paquete:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CostoPaquete" id="CostoPaquete">
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
                                    Número de unidades:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Unidades" id="Unidades" >
                                    </br>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Costo unitario:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CostoUnidad" id="CostoUnidad">
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
                                    Costo total:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CostoTotal" id="CostoTotal" required="required">
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
                                    Proveedor:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Proveedor" name="Proveedor" required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Proveedor as $Proveedor1) { ?> 
                                            <option value="<?php echo $Proveedor1->ID; ?>"><?php echo $Proveedor1->Proveedor; ?></option>
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
                                <div class="col-md-3 col-xs-12">
                                    Nota:
                                </div>
                                <div class="col-md-9 col-xs-12" align="right">
                                    <textarea id="Nota" name="Nota" rows="5" cols="70%" class="form-control"></textarea>
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

<table width="100%">    
    <tr>
        <td width="80%">
        </td>
    </tr>
    <tr>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=81&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>


