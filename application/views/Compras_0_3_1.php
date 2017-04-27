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


<?php echo form_open_multipart(base_url().'index.php/controlador/Aprobar'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Autorizar las cotizaciones</strong>
                        </td>
                    </tr>

                    <?php
                    $indic = 0;
                    if (empty($CotizacionALL)) {
                        echo "Si";
                    }
                    $posible = 0;
                    foreach ($CotizacionALL as $Cotizacion) {
                        $micadena = $Cotizacion->Aprobacion;
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
                        <table width="100%" border="1" bordercolor="#9c9a9a">
                            <?php
                            $Label = 0;
                            $pos = 0;
                            $mystring = $Cotizacion->Etiqueta;
                            $findme = ',';
                            $pos = strpos($mystring, $findme);
                            if ($pos != 0) {
                                $Labels = explode(',', $Cotizacion->Etiqueta);
                            } else {
                                //$Labels=new array();
                                $Labels[0] = $Cotizacion->Etiqueta;
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
                                            if ($Aprobada == "No") {
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
                                                $Proveedores = explode(',', $Cotizacion->Proveedores);
                                                $c = count($Proveedores);
                                                for ($d = 0; $d < $c; $d++) {
                                                    $Total = 0;
                                                    foreach ($Proveedorall as $Proveedoresall1) {
                                                        if ($Proveedoresall1->ID == $Proveedores[$d]) {
                                                            $Prov = $Proveedoresall1->Proveedor;
                                                            $IDProv = $Proveedoresall1->ID;
                                                            ?>
                                                            <tr>
                                                                <td bgcolor="#b2bcb3">
                                                                    <div class="col-md-11 col-xs-12">
                                                                        <strong style="color:#FFF"><?php echo $Prov ?></strong>
                                                                    </div>
                                                                    <div class="col-md-1 col-xs-12">
                                                                        <input name="Aprobar" id="Aprobar" type="radio" value="<?php echo $anteriorApro . $IDLabel . "-" . $IDProv ?>" />				  
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td bgcolor="#c6c8c6">
                                                                    <div class="col-md-4 col-xs-12">
                                                                        <small>Concepto</small>
                                                                    </div>    
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>Unidad</small>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12"  align="right">
                                                                        <small>Cantidad</small>
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
                                                                $PrecioU = "-";
                                                                foreach ($Catalogo as $Catalogo1) {
                                                                    if ($Catalogo1->Folio == $ProdMat[$f] && $Catalogo1->Proveedor == $Proveedores[$d]) {
                                                                        $PrecioU = $Catalogo1->Precio;
                                                                    }
                                                                }
                                                                foreach ($ProductoALL as $ProductosALL1) {
                                                                    if ($ProductosALL1->Folio == $ProdMat[$f]) {
                                                                        $P = $ProductosALL1->Producto . " " . $ProductosALL1->Marca . " " . $ProductosALL1->UnidadMedida;
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
                                                                $Importe = $PrecioU * $Cantidades[$f];
                                                                $Total = $Total + $Importe;


                                                                if ($L == $IDLabel) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="col-md-4 col-xs-12">
                                                                                <strong><?php echo $P; ?></strong>
                                                                            </div>    
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo $medida ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo $cant ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo $PrecioU ?></strong>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12"  align="right">
                                                                                <strong><?php echo $Importe ?></strong>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="col-md-12 col-xs-12" align="right">
                                                                        <strong style="color:#b40000"><?php echo 'Total: ' . $Total ?></strong>
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
<?php } ?>


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
                                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Aprobar</button>		
                                </div>
<?php } ?>
                        </td>
                    </tr> 
                </table>   
            </td>
        </tr>
    </table>
</form>

<?php if ($indic == 0) { ?>
    <?php echo form_open_multipart('controlador/TerminarAprobacion'); ?>     
    <table  width="100%">
        <tr>
            <td width="100%" align="right">
                <input  value="<?php echo $Numero; ?>" type="hidden" name="Numero" id="Numero">
                <input  value="<?php echo $indice; ?>" type="hidden" name="user" id="user"> 
                <div class="col-xs-12 col-sm-12">
                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="Terminado" name="Terminado" value="Sí">Terminar</button>		
                </div>
            </td>
        </tr>
    </table>
<?php } ?>
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
</script>
