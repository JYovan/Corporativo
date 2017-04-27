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

    <?php echo form_open_multipart('controlador3/Planeacion2_2'); ?> 
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
                            foreach ($InfOrden as $InfOrden1) {
                                echo "Nombre del producto: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfOrden1->Nproducto; ?> </strong><?php
                                $orden = $InfOrden1->ID;
                                $Proyecto = $InfOrden1->Proyecto;
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
                            }
                            ?>
                            <input  type="hidden" class="form-control" name="Orden" id="Orden" value="<?php echo $orden ?>">
                            <input  type="hidden" class="form-control" name="Proyecto" id="Proyecto" value="<?php echo $Proyecto ?>">
                        </td>
                    </tr>





                    <tr>
                        <td> 
                            <div class="col-md-2 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Partes de prenda</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">

                                    <select class="form-control" id="Prendas" name="Prendas"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Prendas as $Prendas1) { ?>                    
                                            <option value="<?php echo $Prendas1->id_prenda; ?>"><?php echo $Prendas1->dsc_prenda; ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Medida 1(m)</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Medida1" id="Medida1" >
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Medida 2(m)</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Medida2" id="Medida2" >
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Medida 3(m)</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Medida3" id="Medida3" >
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Medida 4(m)</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Medida4" id="Medida4" >
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Medida 5(m)</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Medida5" id="Medida5" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Agregar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/Plan2?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>

