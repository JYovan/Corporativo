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
                $temp = "Material eliminado";
                ?>
            </td>
        </tr>
    </table>

    <?php echo form_open_multipart(base_url().'index.php/controlador/CambiarPrecios2'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">
                                MATERIAL, PRODUCTOS O SERVICIOS registrados por proveedor en catálogo
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Actualizar precios del proveedor</strong>		
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
                            <div class="col-md-12 col-xs-12">
                                <label for="P" class="control-label">Proveedor:</label><br>	
                            </div>
                            <div class="col-md-12 col-xs-12" align="center">
                                <?php
                                foreach ($Proveedor as $Proveedor1)
                                    echo $Proveedor1->Proveedor;
                                ?> 
                            </div> 
                        </td>
                    </tr>
                    <tr bgcolor="#b2bcb3">
                        <td>
                            <div class="col-md-6 col-xs-12">
                                MATERIAL, PRODUCTO O SERVICIO
                            </div>
                            <div class="col-md-6 col-xs-12">
                                Precio
                            </div> 
                        </td>
                    </tr>

                    <?php
                    $i = 0;
                    foreach ($Productos as $Catalogo1) {

                        if ($Catalogo1->Proveedor == $Proveedor1->ID) {
                            if (($i % 2) == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="hidden" name="ID[]" id="ID[]" value="<?php echo $Catalogo1->ID; ?>" > 

                                            <?php
                                            foreach ($Prod as $Prod1) {
                                                if ($Catalogo1->Folio == $Prod1->Folio) {
                                                    $temp = $Prod1->Producto . " " . $Prod1->Marca . " " . $Prod1->UnidadMedida;
                                                }
                                                //echo $Prod1->Folio;
                                                //echo "<br/>";
                                            }
                                            $n = count($Prod);
                                            echo "- ";
                                            echo $temp;
                                            ?>  
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input  class="form-control" type="number" step="0.01" name="Precio[]" id="Precio[]" value="<?php echo $Catalogo1->Precio; ?>" required="required" > 
                                        </div> 
                                    </td>
                                </tr>
        <?php } else {
            ?>
                                <tr bgcolor="#b2bcb3">
                                    <td>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="hidden" step="0.01" name="ID[]" id="ID[]" value="<?php echo $Catalogo1->ID; ?>" > 

                                            <?php
                                            foreach ($Prod as $Prod1) {
                                                if ($Catalogo1->Folio == $Prod1->Folio) {
                                                    $temp = $Prod1->Producto . " " . $Prod1->Marca . " " . $Prod1->UnidadMedida;
                                                }
                                            }
                                            echo "- ";
                                            echo $temp;
                                            ?>  
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <input  class="form-control" type="number" step="0.01" name="Precio[]" id="Precio[]" value="<?php echo $Catalogo1->Precio; ?>" required="required" > 
                                        </div> 
                                    </td>
                                </tr>
        <?php
        }
        $i++;
    }
}
?>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Actualizar</button>		
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>	
                                </br>	
                                </br>	
                            </div>
                        </td>
                    </tr>
                </table>   
            </td>
        </tr>
    </table>
</form>

<?php echo form_open_multipart(base_url().'index.php/controlador/Admon'); ?>     
<table  width="100%">
    <tr>
        <td width="80%">
            <input  class="form-control" type="hidden" name="SegSocID" id="SegSocID" value="<?php echo "A54" ?>">
        </td>
        <td width="20%" align="right">
            <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>

