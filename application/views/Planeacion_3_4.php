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

    <?php echo form_open_multipart('controlador3/Planeacion3_4'); ?> 
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
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Operación</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Operacion" name="Operacion"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Operacion as $Operacion1) { ?> 
                                            <option value="<?php echo $Operacion1->id_Operacion; ?>"><?php echo $Operacion1->dsc_Operacion; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>





                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Duración de la actividad (min)</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="Duracion" id="Duracion"   required="required">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Margen</label>
                                    (%)<br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="Margen" id="Margen"   required="required">
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Unidades estimadas por hora:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="UnitxHr" id="UnitxHr" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Estado" class="control-label">Unidades estimadas por día:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="UnitxDay" id="UnitxDay" >
                                </div>	
                            </div>
                        </td>
                    </tr>   

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Equipo:</label><br>
                                </div>   
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Equipo" name="Equipo">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Equipo as $Equipo1) { ?> 
                                            <option value="<?php echo $Equipo1->ID; ?>"><?php echo $Equipo1->Nombre . " " . $Equipo1->Marca . " " . $Equipo1->Modelo; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>	
                            </div>

                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Cantidad de unidades que cubre el equipo por ciclo:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="1" class="form-control" name="EquipoUnit" id="EquipoUnit">
                                </div>	
                            </div>

                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Tiempo por ciclo (min):</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="EquipoTime" id="EquipoTime">
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-8 col-xs-12">	
                                <div class="col-md-12 col-xs-6">
                                    <label for="1" class="control-label">Material(Por ciclo):</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" size="6" multiple="multiple" id="Material[]" name="Material[]">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Material as $Material1) { ?> 
                                            <option value="<?php echo $Material1->Folio; ?>"><?php echo $Material1->Producto . " " . $Material1->Marca . " (" . $Material1->UnidadMedida . ")"; ?></option>
                                        <?php } ?>
                                    </select>
                                    </br>
                                </div>  
                            </div>

                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-6">
                                    <label for="1" class="control-label">Cantidad(separar por coma):</label><br>
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="CantMat" name="CantMat" rows="5" cols="70%" class="form-control"></textarea> 
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <label for="Estado" class="control-label">Responsable:</label><br>	
                            </div>	
                            <div class="col-md-12 col-xs-12"> 
                                <select class="form-control" id="Registra[]" name="Registra[]"  size="5" multiple="multiple"   required="required">
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
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Observaciones</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="Observaciones" id="Observaciones" >
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/Plan2a?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>

