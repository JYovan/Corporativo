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

    <?php echo form_open_multipart('controlador3/Planeacion0'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">REGISTRO DE CAMPAÑA O PRODUCTO</strong>
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
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Proyecto</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Tipo" name="Tipo"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($TipoP as $TipoP1) { ?> 
                                            <option value="<?php echo $TipoP1->id_tipo; ?>"><?php echo $TipoP1->dsc_tipo; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#d3d3d3">
                            <strong style="color:#FFF">Campaña</strong>
                        </td>
                    </tr>  
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Número</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="Numero" id="Numero"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Nombre de asignación</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Nombre" id="Nombre" >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre de cadena</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Ncadena" id="Ncadena"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Ubicado de cadena</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Ucadena" id="Ucadena" >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Código del producto</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="Folio" id="Folio"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Estado" class="control-label">Fecha de solicitud:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" value="<?php echo date("d/m/Y") ?>" class="form-control" name="Solicitud" id="datepicker" >
                                </div>	
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Número de piezas que comprende</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="Piezas" id="Piezas"   required="required">
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Tipo de pieza o prenda</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="TipoProducto" id="TipoProducto"   required="required">
                                </div>
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Clave de código de barras</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="CDBarras" id="CDBarras" >
                                </div>
                                </br>
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#d3d3d3">
                            <strong style="color:#FFF">Datos del cliente y de entrega del pedido o campaña</strong>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre del cliente</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Cliente" name="Cliente"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Cliente as $Cliente1) { ?> 
                                            <option value="<?php echo $Cliente1->Folio; ?>"><?php echo $Cliente1->NombreC; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Fecha de entrega final</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo date("d/m/Y") ?>"   type="text" class="form-control" name="Fentrega" id="datepicker2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Número de entregas</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" name="NumeroEntregas" id="NumeroEntregas"   required="required">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Lugar de entrega</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" name="LugarEntrega" id="LugarEntrega"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Forma de entrega</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="FormaEnt" name="FormaEnt"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($FormaEnt as $FormaEnt1) { ?> 
                                            <option value="<?php echo $FormaEnt1->id_forma; ?>"><?php echo $FormaEnt1->dsc_forma; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
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
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>

