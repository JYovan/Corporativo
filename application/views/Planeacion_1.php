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

    <?php
    echo form_open_multipart('controlador3/do_uploadP1');
    $Indicador = 1;
    foreach ($Ordenes as $Ordenes1) {
        $Indicador = $Ordenes1->ID;
    }
    ?>
    <input type="hidden" name="Numero" id="Numero"  value="<?php echo str_pad($Indicador + 1, 6, "0", STR_PAD_LEFT); ?>">

    <script type="text/javascript">
        var myPicker1 = new jscolor.color(document.getElementById("myField1"), {})
        myPicker1.fromString('517C87')   // now you can access API via 'myPicker' variable
    </script> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Formato de pedido de producto del cliente</strong>
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
                                    <select class="form-control" id="Proyecto" name="Proyecto"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php
                                        foreach ($Proyecto as $Proyecto1) {
                                            foreach ($TipoP as $Tipo1) {
                                                if ($Tipo1->id_tipo == $Proyecto1->Tipo) {
                                                    $Resp = $Tipo1->dsc_tipo;
                                                }
                                            }
                                            ?>                    
                                            <option value="<?php echo $Proyecto1->ID; ?>"><?php echo $Resp . " " . $Proyecto1->Numero . " " . $Proyecto1->Proyecto; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#b3b2b2">
                            <strong style="color:#FFF">Descripción general del pedido o campaña</strong>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Código del producto</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="Folio">
                                    <input type="text" class="form-control" name="Folio" id="Folio"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Nombre de pieza</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="Nproducto" id="Nproducto"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de orden de compra</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control" name="OrdenC" id="OrdenC"   required="required">
                                </div>
                            </div>
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
                                <label for="1" class="control-label">Grupo de prenda</label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <select class="form-control" id="Grupo" name="Grupo"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Grupo as $Concepto) { ?> 
                                        <option value="<?php echo $Concepto->id_concepto; ?>"><?php echo $Concepto->dsc_concepto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <label for="1" class="control-label">Género</label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <select class="form-control" id="Genero" name="Genero"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Genero as $Concepto) { ?> 
                                        <option value="<?php echo $Concepto->id_concepto; ?>"><?php echo $Concepto->dsc_concepto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <label for="1" class="control-label">Posición del Cuerpo
                                </label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <select class="form-control" id="Posicion" name="Posicion"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Posicion as $Concepto) { ?> 
                                        <option value="<?php echo $Concepto->id_concepto; ?>"><?php echo $Concepto->dsc_concepto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <label for="1" class="control-label">Población objetivo
                                </label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <select class="form-control" id="Poblacion" name="Poblacion"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Poblacion as $Concepto) { ?> 
                                        <option value="<?php echo $Concepto->id_concepto; ?>"><?php echo $Concepto->dsc_concepto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <label for="1" class="control-label">Uso de la prenda
                                </label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <select class="form-control" id="Uso" name="Uso"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Uso as $Concepto) { ?> 
                                        <option value="<?php echo $Concepto->id_concepto; ?>"><?php echo $Concepto->dsc_concepto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <label for="1" class="control-label">Temporada
                                </label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <select class="form-control" id="Temporada" name="Temporada"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Temporada as $Concepto) { ?> 
                                        <option value="<?php echo $Concepto->id_concepto; ?>"><?php echo $Concepto->dsc_concepto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <label for="1" class="control-label">Colección

                                </label><br>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Coleccion" id="Coleccion" >
                            </div>
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
                            <div class="col-md-3 col-xs-12">	
                                <label for="1" class="control-label">Talla</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <label for="2" class="control-label">Número de unidades</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <label for="1" class="control-label">Precio unitario</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <label for="2" class="control-label">Precio total</label><br>
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <label for="2" class="control-label">Código de color</label><br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-12">	
                                <label for="1" class="control-label">Extra Chica</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="1" class="form-control" name="UnidadesXS" id="UnidadesXS" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PUXS" id="PUXS" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PTXS" id="PTXS" >
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <input type="text" name="myFieldXS" id="myFieldXS" value="517C87" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-12">	
                                <label for="1" class="control-label">Chica</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="1" class="form-control" name="UnidadesS" id="UnidadesS" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PUS" id="PUS" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PTS" id="PTS" >
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <input type="text" name="myFieldS" id="myFieldS" value="517C87" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-12">	
                                <label for="1" class="control-label">Mediana</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="1" class="form-control" name="UnidadesM" id="UnidadesM" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PUM" id="PUM" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PTM" id="PTM" >
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <input type="text" name="myFieldM" id="myFieldM" value="517C87" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-12">	
                                <label for="1" class="control-label">Grande</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="1" class="form-control" name="UnidadesL" id="UnidadesL" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PUL" id="PUL" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PTL" id="PTL" >
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <input type="text" name="myFieldL" id="myFieldL" value="517C87" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-12">	
                                <label for="1" class="control-label">Extra Grande</label><br>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="1" class="form-control" name="UnidadesXL" id="UnidadesXL" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PUXL" id="PUXL" >
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <input type="number" step="0.01" class="form-control" name="PTXL" id="PTXL" >
                            </div>
                            <div class="col-md-3 col-xs-12">	
                                <input type="text" name="myFieldXL" id="myFieldXL" value="517C87" class="form-control">
                            </div>
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
                        <td bgcolor="#d3d3d3">
                            <strong style="color:#FFF">Datos de quien solicita la elaboración</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <label for="Estado" class="control-label">Solicita:</label><br>	
                            </div>	
                            <div class="col-md-12 col-xs-12"> 
                                <select class="form-control" id="Solicita" name="Solicita"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                        <option value="<?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12 col-xs-12">  
                                </br>
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#d3d3d3">
                            <strong style="color:#FFF">Datos de quien registra el pedido en la organización</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <label for="Estado" class="control-label">Registra:</label><br>	
                            </div>	
                            <div class="col-md-12 col-xs-12"> 
                                <select class="form-control" id="Registra" name="Registra"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                        <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12 col-xs-12">  
                                </br>
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
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.FolioProd();
</script>