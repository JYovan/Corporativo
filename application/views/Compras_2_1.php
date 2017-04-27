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


<?php echo form_open_multipart(base_url().'index.php/controlador/RegistroOrdenCompra'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Generar Orden de compra</strong>
                        </td>
                    </tr>


                    <?php
                    foreach ($OrdenCompra as $OrdenCompra1) {
                        
                    }
                    ?>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Nombre del solicitante:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($USUARIOS as $USUARIOS1) {
                                        if ($USUARIOS1->Id == $OrdenCompra1->Solicitante) {
                                            $respuesta = $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno;
                                        }
                                    }
                                    ?>
                                    <input   type="text" value="<?php echo $respuesta ?>"  class="form-control" name="1" id="1" readonly="readonly">
                                </div>
                            </div> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($USUARIOS as $USUARIOS1) {
                                        if ($USUARIOS1->Id == $OrdenCompra1->Facturar) {
                                            $respuesta = $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno;
                                        }
                                    }
                                    ?>
                                    <label for="P" class="control-label">Facturar a:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" value="<?php echo $respuesta ?>"  class="form-control" name="2" id="2" readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Aplicar a:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <?php
                                    $respuesta = "";
                                    $result = explode(',', $OrdenCompra1->multiple);
                                    $R = count($result);
                                    for ($i = 0; $i < $R; $i++) {
                                        foreach ($Contratos as $Contratos1) {
                                            if ($Contratos1->ID == $result[$i]) {
                                                $respuesta.=$Contratos1->Folio . " ";
                                            }
                                        }
                                    }
                                    ?>
                                    <input   type="text" value="<?php echo $respuesta ?>"  class="form-control" name="3" id="3" readonly="readonly">
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Nombre del solicitante:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Solicitante" name="Solicitante"  required="required">
                                        <option value="">Selecciona</option>
<?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                            <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Facturar a:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Facturar" name="Facturar"  required="required">
                                        <option value="">Selecciona</option>
<?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                            <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Aplicar a:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" size="5" multiple="multiple" id="Contratos[]" name="Contratos[]" required="required">
                                        <option value="">Selecciona</option>
<?php foreach ($Contratos as $Contratos1) { ?> 
                                            <option value="<?php echo $Contratos1->ID; ?>"><?php echo $Contratos1->Folio . " " . $Contratos1->Descripcion; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
<?php
foreach ($Proveedorall as $Proveedorall1) {
    if ($Proveedorall1->ID == $Proveed) {
        ?>
                                        <div class="col-md-12 col-xs-12" style="background-color:#099">
        <?php echo $Proveedorall1->Proveedor; ?>
                                            <input  type="hidden" name="Proveedor" id="Proveedor" value="<?php echo $Proveedorall1->Proveedor ?>">
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            Domicilio: <?php echo $Proveedorall1->Calle . " " . $Proveedorall1->No . " " . $Proveedorall1->Colonia; ?>
                                            <input  type="hidden" name="Domicilio" id="Domicilio" value="<?php echo $Proveedorall1->Calle . " " . $Proveedorall1->No . " " . $Proveedorall1->Colonia ?>">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Teléfono: <?php echo $Proveedorall1->Tel; ?>
                                            <input  type="hidden" name="Telefono" id="Telefono" value="<?php echo $Proveedorall1->Tel ?>">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Correo: <?php echo $Proveedorall1->Correo; ?>
                                            <input  type="hidden" name="Correo" id="Correo" value="<?php echo $Proveedorall1->Correo ?>">
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Página web: <?php echo $Proveedorall1->Pagina; ?>
                                            <input  type="hidden" name="Pagina" id="Pagina" value="<?php echo $Proveedorall1->Pagina ?>">
                                        </div>
                                        <div class="col-md-6 col-xs-12">

                                        </div>
        <?php
    }
}
?>
                            </div>
                        </td>
                    </tr>





                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
<?php
foreach ($Proyectos as $Proyectos1) {
    if ($Proyectos1->ID == $Pr) {
        ?>
                                        <div class="col-md-12 col-xs-12" style="background-color:#099">
                                            Lugar de entrega
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            Fraccionamiento: <?php echo $Proyectos1->Proyecto; ?>
                                            <input  type="hidden" name="Fracc" id="Fracc" value="<?php echo $Proyectos1->Proyecto ?>">
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            Localidad: <?php echo $Proyectos1->Calle . " " . $Proyectos1->No . " " . $Proyectos1->Colonia; ?>
                                            <input  type="hidden" name="Localidad" id="Localidad" value="<?php echo $Proyectos1->Calle . " " . $Proyectos1->No . " " . $Proyectos1->Colonia ?>">
                                        </div>
                            <?php
                        }
                    }
                    ?>
                            </div>
                        </td>
                    </tr>


                    <?php
                    $indic = 0;
                    if (empty($CotizacionALL)) {
                        echo "Vacio";
                    }
                    $posible = 0;
                    foreach ($CotizacionALL as $Cotizacion) {
                        $micadena = $Cotizacion->Aprobacion;
                        $Cotiz = $Cotizacion->Numero;
                        $encuentra = ',';
                        $posible = strpos($micadena, $encuentra);

                        if ($posible != 0) {
                            $aprobaciones = explode(',', $Cotizacion->Aprobacion);
                            $cuenta = count($aprobaciones);
                            for ($b = 0; $b < $cuenta; $b++) {
                                $Prov2[$b] = substr($aprobaciones[$b], strpos($aprobaciones[$b], "-") + strlen("-"));
                                $Etiqueta2[$b] = substr($aprobaciones[$b], 0, strpos($aprobaciones[$b], "-"));
                            }
                            $cuenta = $cuenta - 1;
                        } else {
                            //$Labels=new array();
                            $aprobaciones[0] = $Cotizacion->Aprobacion;
                            $micadena2 = $aprobaciones[0];
                            $encuentra2 = '-';
                            $Prov2[0] = substr($aprobaciones[0], strpos($aprobaciones[0], "-") + strlen("-"));
                            $Etiqueta2[0] = substr($aprobaciones[0], 0, strpos($aprobaciones[0], "-"));
                            $cuenta = 0;
                        }

                        if (empty($Cotizacion->Aprobacion)) {
                            $anteriorApro = $Cotizacion->Aprobacion;
                        } else {
                            $anteriorApro = $Cotizacion->Aprobacion . ",";
                        }
                        ?> 

                        <input  value="<?php echo $Numero; ?>" type="hidden" name="ID" id="ID">
                        <input  value="<?php echo $Etiquet; ?>" type="hidden" name="Etiquet" id="Etiquet">
                        <input  value="<?php echo $Proveed; ?>" type="hidden" name="Proveed" id="Proveed">
                        <table width="100%" border="1" bordercolor="#9c9a9a">
                            <?php
                            $Label = 0;
                            $pos = 0;
                            $mystring = $Etiquet;
                            $findme = ',';
                            $pos = strpos($mystring, $findme);
                            if ($pos != 0) {
                                $Labels = explode(',', $Etiquet);
                            } else {
                                //$Labels=new array();
                                $Labels[0] = $Etiquet;
                            }

                            $a = count($Etiquetas);
                            $m = count($Labels);



                            for ($b = 1; $b <= $a; $b++) {


                                foreach ($Etiquetas as $Etiquetas1) {
                                    if ($Etiquetas1->id_conceptos == $b) {
                                        $Label = $Etiquetas1->dsc_conceptos;
                                        $IDLabel = $Etiquetas1->id_conceptos;

                                        $si = 0;
                                        for ($o = 0; $o < $m; $o++) {
                                            if ($Labels[$o] == $IDLabel) {
                                                $si = 1;
                                            }
                                        }
                                        if ($si == '1') {
                                            $Aprobada = "No";
                                            for ($t = 0; $t <= $cuenta; $t++) {
                                                if ($Etiqueta2[$t] == $IDLabel) {
                                                    $Aprobada = "Si";
                                                }
                                            }
                                            if ($Aprobada == "Si") {
                                                $indic = $indic + 1;
                                                ?>
                                                <tr>
                                                    <td bgcolor="#96b298">
                                                        <div class="col-md-11 col-xs-12">
                                                            <strong style="color:#FFF"><?php echo $Label ?></strong>
                                                        </div>
                                                        <div class="col-md-1 col-xs-12">

                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                $Prov = 0;
                                                $ProdFolio = "";
                                                $CantiNum = "";
                                                $CantLetras = "";
                                                $Proveedores = $Proveed;
                                                $c = count($Proveedores);
                                                for ($d = 0; $d < $c; $d++) {
                                                    $Total = 0;
                                                    $Importe = 0;
                                                    foreach ($Proveedorall as $Proveedoresall1) {
                                                        if ($Proveedoresall1->ID == $Proveedores) {
                                                            $Prov = $Proveedoresall1->Proveedor;
                                                            $IDProv = $Proveedoresall1->ID;
                                                            ?>
                                                            <tr>
                                                                <td bgcolor="#c6c8c6"> 
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>Cantidad</small>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>Cantidad con letra</small>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>Unidad</small>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12">
                                                                        <small>Concepto</small>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>P.U.</small>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>Importe</small>
                                                                    </div>
                                                                </td>
                                                            </tr>			
                                                            <?php
                                                            $mystring = $Cotizacion->Productos;
                                                            $findme = ',';
                                                            $pos = strpos($mystring, $findme);
                                                            if ($pos != 0) {
                                                                $ProdMat = explode(',', $Cotizacion->Productos);
                                                            } else {
                                                                //$Labels=new array();
                                                                $ProdMat[0] = $Cotizacion->Productos;
                                                            }
                                                            $e = count($ProdMat);

                                                            for ($f = 0; $f < $e; $f++) {
                                                                $Material = "-";
                                                                $P = "-";
                                                                $PrecioU = "0";
                                                                foreach ($Catalogo as $Catalogo1) {
                                                                    if ($Catalogo1->Folio == $ProdMat[$f] && $Catalogo1->Proveedor == $Proveedores) {
                                                                        $PrecioU = $Catalogo1->Precio;
                                                                    }
                                                                }
                                                                foreach ($ProductoALL as $ProductosALL1) {
                                                                    if ($ProductosALL1->Folio == $ProdMat[$f]) {
                                                                        $P = $ProductosALL1->Producto . " " . $ProductosALL1->Marca . " " . $ProductosALL1->UnidadMedida;
                                                                        $Pfolio = $ProductosALL1->Folio;
                                                                        $medida = $ProductosALL1->UnidadMedida;
                                                                        $L = $ProductosALL1->Etiqueta;
                                                                    }
                                                                }

                                                                $mystring = $Cotizacion->Cantidad;
                                                                $findme = ',';
                                                                $pos = strpos($mystring, $findme);
                                                                if ($pos != 0) {
                                                                    $Cantidades = explode(',', $Cotizacion->Cantidad);
                                                                } else {
                                                                    //$Labels=new array();
                                                                    $Cantidades[0] = $Cotizacion->Cantidad;
                                                                }
                                                                $g = count($Cantidades);
                                                                $cant = $Cantidades[$f];
                                                                $Importe = $PrecioU * $cant;

                                                                if ($L == $IDLabel) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                            <?php
                                            $CantiNum.=$cant . ",";
                                            $ProdFolio.=$Pfolio . ",";
                                            $CantLetra = num_to_letras($cant);
                                            $CantLetras.=$CantLetra . ",";
                                            ?>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo number_format($cant, 2, '.', ',') ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo $CantLetra ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo $medida ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12">
                                                                                <strong><?php echo $P; ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo number_format($PrecioU, 2, '.', ',') ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo number_format($Importe, 2, '.', ',') ?></strong>
                                                                            </div>
                                            <?php
                                            $Total = $Total + $Importe;
                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="col-md-12 col-xs-12" align="right">
                                                                        <strong style="color:#b40000"><?php echo 'Total: ' . number_format($Total, 2, '.', ',') ?></strong>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                    <?php
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    ?>

                        </table>
<?php }
?>
                    <input  value="<?php echo $ProdFolio; ?>" type="hidden" name="ProdFolio" id="ProdFolio">
                    <input  value="<?php echo $CantiNum; ?>" type="hidden" name="CantiNum" id="CantiNum">
                    <input  value="<?php echo $CantLetras; ?>" type="hidden" name="CantLetras" id="CantLetras">
                    <input  value="<?php echo $Cotiz; ?>" type="hidden" name="Cotizacion" id="Cotizacion">
                    <input  value="<?php echo $Aproba; ?>" type="hidden" name="Aprobacion" id="Aprobacion">

                    <input  value="<?php echo $OrdenCompra1->ID; ?>" type="hidden" name="ID" id="ID">
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12"> 
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
<?php if ($indic != 0) { ?>
                                <div class="col-xs-12 col-sm-12">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Actualizar</button>		
                                </div>
<?php } ?>


                        </td>
                    </tr> 
                </table>   
            </td>
        </tr>
    </table>
</form>


<?php echo form_open_multipart('controlador/OrdenCompraPDFID'); ?>     
<table  width="100%">
    <tr>
        <td width="100%">
            <div class="col-xs-12 col-sm-12">

                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="ID" name="ID" value="<?php echo $OrdenCompra1->ID ?>">Descargar PDF</button>		
            </div>
        </td>
    </tr>
</table>
</form>


<?php echo form_open_multipart('controlador/OrdenCompraPDF'); ?>     
<table  width="100%">
    <tr>
        <td width="100%">
            <div class="col-xs-12 col-sm-12">

                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="ID" name="ID" value="<?php echo $OrdenCompra1->ID ?>">Ver PDF</button>		
            </div>
        </td>
    </tr>
</table>
</form>

<table width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=19&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.AgregaMaterial();
    cli.config.Convertir();
</script>
