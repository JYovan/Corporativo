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

<?php echo form_open_multipart('controlador3/Planeacion2_1'); ?>   
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro técnico de fabricación del producto</strong>
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
                                <label for="Info" class="control-label">Información de la orden solicitada</label><br>	
                            </div>
                            <?php
                            $unidades = 0;
                            foreach ($InfoRegis as $InfOrden1) {
                                echo "Nombre del producto: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->Nproducto; ?> </strong><?php
                                $orden = $InfOrden1->ID;
                                echo "</p>";
                                echo "Cliente: ";
                                foreach ($Proyectos as $Proyectos1) {
                                    if ($Proyectos1->ID == $InfOrden1->Proyecto) {
                                        foreach ($Cliente as $Cliente1) {
                                            if ($Cliente1->Folio == $Proyectos1->Cliente) {
                                                $Ncliente = $Cliente1->NombreC;
                                            }
                                        }
                                    }
                                }
                                ?>	<strong style="color:#ff6600"><?php echo $Ncliente; ?> </strong><?php
                                echo "</p>";
                                echo "Código del producto: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->Folio; ?> </strong><?php
                                echo "</p>";
                                echo "Nombre de cadena: ";
                                foreach ($Proyectos as $Proyectos1) {
                                    if ($Proyectos1->ID == $InfOrden1->Proyecto) {
                                        $Ncadena = $Proyectos1->Ncadena;
                                    }
                                }
                                ?>	<strong style="color:#ff6600"><?php echo $Ncadena; ?> </strong><?php
                                echo "</p>";
                                echo "Ubicado de cadena: ";
                                foreach ($Proyectos as $Proyectos1) {
                                    if ($Proyectos1->ID == $InfOrden1->Proyecto) {
                                        $Ucadena = $Proyectos1->Ucadena;
                                    }
                                }
                                ?>	<strong style="color:#ff6600"><?php echo $Ucadena; ?> </strong><?php
                                echo "</p>";
                                echo "Fecha de entrega: ";
                                foreach ($Proyectos as $Proyectos1) {
                                    if ($Proyectos1->ID == $InfOrden1->Proyecto) {
                                        $Fentrega = $Proyectos1->Fentrega;
                                    }
                                }
                                ?>	<strong style="color:#ff6600"><?php echo $Fentrega; ?> </strong><?php
                                echo "</p>";
                                if (!empty($InfOrden1->UnidadesXS)) {
                                    echo "Unidades talla XS: ";
                                    ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->UnidadesXS; ?> </strong><?php
                                }
                                if (!empty($InfOrden1->UnidadesS)) {
                                    echo "</p>";
                                    echo "Unidades talla S: ";
                                    ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->UnidadesS; ?> </strong><?php
                                }
                                if (!empty($InfOrden1->UnidadesM)) {
                                    echo "</p>";
                                    echo "Unidades talla M: ";
                                    ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->UnidadesM; ?> </strong><?php
                                }
                                if (!empty($InfOrden1->UnidadesL)) {
                                    echo "</p>";
                                    echo "Unidades talla L: ";
                                    ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->UnidadesL; ?> </strong><?php
                                }
                                if (!empty($InfOrden1->UnidadesXL)) {
                                    echo "</p>";
                                    echo "Unidades talla XL: ";
                                    ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->UnidadesXL; ?> </strong><?php
                                }
                                $unidades = $InfOrden1->UnidadesXS + $InfOrden1->UnidadesS + $InfOrden1->UnidadesM + $InfOrden1->UnidadesL + $InfOrden1->UnidadesXL;
                            }
                            ?>
                            <input  type="hidden" class="form-control" name="Orden" id="Orden" value="<?php echo $orden ?>">
                        </td>
                    </tr>




                    <tr>
                        <td bgcolor="#b40000">
                            <div class="col-md-12 col-xs-12" style="color:#ffffff">
                                Material a utilizar
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600">Operación</strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600">Material</strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                                <strong style="color:#ff6600">Cantidad por prenda</strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                                <strong style="color:#ff6600">Precio Unitario</strong align="center">
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                                <strong style="color:#ff6600">Gasto total</strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                                <strong style="color:#ff6600">Gasto por prenda</strong>
                            </div>
                        </td>
                    </tr>
                    <?php
                    $Sumagastounitario = 0;
                    $Sumagastototal = 0;
                    foreach ($Material as $Material1) {
                        $arreglo = explode(',', $Material1->Material);
                        $n = count($arreglo);
                        $arreglo2 = explode(',', $Material1->CantMat);
                        $n2 = count($arreglo2);
                        if ($n > $n2) {
                            $R = $n;
                        } else {
                            $R = $n2;
                        }
                        for ($i = 0; $i < $R; $i++) {
                            ?>
                            <tr>
                                <td>
                                    <div class="col-md-2 col-xs-12" style="color:#ffffff">
                                        <?php
                                        $operacion = '-';
                                        foreach ($Operaciones as $temp1) {
                                            if ($temp1->id_Operacion == $Material1->Operacion) {
                                                $operacion = $temp1->dsc_Operacion;
                                            }
                                        }
                                        ?>
                                        <strong style="color:#c0c0bf"><?php echo $operacion; ?></strong>
                                    </div>
                                    <div class="col-md-2 col-xs-12" style="color:#ffffff">
        <?php
        $resp = '-';
        foreach ($Productos as $temp1) {
            if ($temp1->Folio == $arreglo[$i]) {
                $resp = $temp1->Producto . " " . $temp1->Marca . " " . $temp1->UnidadMedida;
            }
        }
        ?>
                                        <strong style="color:#c0c0bf"><?php echo $resp; ?></strong>
                                    </div>
                                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                        <strong style="color:#c0c0bf"><?php echo number_format($arreglo2[$i], 2, '.', ','); ?></strong>
                                    </div>
                                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                        <?php
                                        $preciou = 0;
                                        foreach ($Catalogo as $temp1) {
                                            if ($temp1->Folio == $arreglo[$i]) {
                                                $preciou = $temp1->Precio;
                                            }
                                        }
                                        ?>
        <?php if (!empty($preciou)) { ?>
                                            <strong style="color:#c0c0bf"><?php echo number_format($preciou, 2, '.', ','); ?></strong>
                                        <?php } else { ?>
                                            <strong style="color:#c0c0bf"><?php echo ' '; ?></strong>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
        <?php
        $gastototal = $preciou * $arreglo2[$i] * $unidades;
        $Sumagastototal = $Sumagastototal + $gastototal;
        ?>
                                        <strong style="color:#c0c0bf"><?php echo number_format($gastototal, 2, '.', ','); ?></strong>
                                    </div>
                                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
        <?php
        $gastounitario = $preciou * $arreglo2[$i];
        $Sumagastounitario = $Sumagastounitario + $gastounitario;
        ?>
                                        <strong style="color:#c0c0bf"><?php echo number_format($gastounitario, 2, '.', ','); ?></strong>
                                    </div>
                                </td>
                            </tr>
    <?php } ?>

<?php } ?>
                    <tr>
                        <td>
                            <div class="col-md-8 col-xs-12" style="color:#ffffff" align="right">
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                <strong style="color:#ffffff"><?php echo
number_format($Sumagastototal, 2, '.', ',');
?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                <strong style="color:#ffffff"><?php echo number_format($Sumagastounitario, 2, '.', ','); ?></strong>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador4/Plan2c?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
