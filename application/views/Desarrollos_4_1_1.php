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

                foreach ($Viviendas as $Viviendas1) {
                    
                }
                ?>
            </td>
        </tr>
    </table>

<?php echo form_open_multipart('controlador2/RViviendas2Act'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Sembrado inmobiliario de viviendas</strong>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                </br>		
                                <input value="<?php echo $Viviendas1->Id ?>" type="hidden" name="ID" id="ID" >
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Desarrollo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <?php
                                    $respuesta = 0;
                                    foreach ($Desarrollo as $Desarrollo1) {
                                        if ($Desarrollo1->ID == $Viviendas1->Desarrollo) {
                                            $respuesta = $Desarrollo1->Proyecto;
                                            $IDdesarrollo = $Desarrollo1->ID;
                                        }
                                    }
                                    ?>
                                    <input value="<?php echo $respuesta ?>" type="text" readonly="readonly" name="Desarrollo2" id="Desarrollo2" class="form-control">
                                    <input value="<?php echo $IDdesarrollo ?>" type="hidden" name="Desarrollo" id="Desarrollo" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Manzana</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo $Viviendas1->Manzana ?>" type="text" readonly="readonly" name="Manzana" id="Manzana" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Tipo de lotes</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo $Viviendas1->TLotes ?>" type="text" readonly="readonly" name="TLotes" id="TLotes" class="form-control">      
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Lotes</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo $Viviendas1->Lotes ?>" type="text" readonly="readonly" name="Lotes" id="Lotes" class="form-control">      
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Viviendas</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo $Viviendas1->NViviendas ?>" type="text" class="form-control" name="NViviendas" id="NViviendas" >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">

                                </div>  
                                <div class="col-md-12 col-xs-12">

                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Numeración de Viviendas</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo $Viviendas1->NumViviendas ?>" type="text" class="form-control" name="NumViviendas" id="NumViviendas" >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="22" class="control-label">Superficie habitacional vendible del lote:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12"  id="Pais2">
                                    <input  value="<?php echo $Viviendas1->SuperficieHV ?>"  type="number" step="0.01" class="form-control" name="SuperficieHV" id="SuperficieHV" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="23" class="control-label">Uso del lote:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <?php
                                    $respuesta = 0;
                                    foreach ($Uso as $Uso1) {
                                        if ($Uso1->id_uso == $Viviendas1->Uso) {
                                            $respuesta = $Uso1->dsc_uso;
                                        }
                                    }
                                    ?>
                                    <select class="form-control" id="Uso" name="Uso"   required="required">
                                        <option value="<?php echo $Viviendas1->Uso; ?>" selected="selected"><?php echo $respuesta; ?></option>
<?php foreach ($Uso as $Uso1) { ?> 
                                            <option value="<?php echo $Uso1->id_uso; ?>"><?php echo $Uso1->dsc_uso; ?></option>
<?php } ?>
                                    </select>
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br/>
                            <br/>

                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#999999">
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-3 col-xs-12">
                                    <label for="1" class="control-label">Modelo</label><br>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <label for="2" class="control-label">Tipo de vivienda</label><br>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <label for="3" class="control-label">Cantidad</label><br>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <label for="4" class="control-label">Color en plano</label><br>
                                </div>	
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <div>	
                                <script src="<?php echo base_url(); ?>js/jscolor/jscolor.js"></script>
                                <?php
                                $i = 0;
                                $n = count($Viviendas);
                                foreach ($Viviendas as $Vivienda1) {
                                    $i++;
                                    $color = $Vivienda1->Color;
                                    if (empty($color)) {
                                        $color = "517C87";
                                    }
                                    for ($cont = 1; $cont <= $n; $cont++) {
                                        ?>    
                                        <script type="text/javascript">
                                          var myPicker1 = new jscolor.color(document.getElementById(<?php echo "'myField" . "$cont'" ?>), {})
                                          myPicker1.fromString(<?php $color ?>)
                                        </script>
        <?php
    }
    ?>    
                                    <div class="col-md-3 col-xs-12">	
    <?php echo $Vivienda1->Modelo; ?>
                                        <input value="<?php echo $Vivienda1->Modelo ?>" name="<?php echo "Modelos" . $i; ?>" id="<?php echo "Modelos" . $i; ?>" type="hidden">
                                    </div>
                                    <div class="col-md-3 col-xs-12">	
    <?php echo $Vivienda1->Prototipo; ?>
                                        <input value="<?php echo $Vivienda1->Prototipo ?>" name="<?php echo "Prototipos" . $i; ?>" id="<?php echo "Prototipos" . $i; ?>" type="hidden">
                                    </div>
                                    <div class="col-md-3 col-xs-12">	

                                        <input type="text" class="form-control" name="<?php echo "Cantidad" . $i; ?>" id="<?php echo "Cantidad" . $i; ?>" value="<?php echo $Vivienda1->Arreglo ?>" >	
                                    </div>
                                    <div class="col-md-3 col-xs-12">	
                                        <input type="text" name="<?php echo "myField" . $i; ?>" id="<?php echo "myField" . $i; ?>" value="<?php echo $color; ?>" class="form-control">

                                        <input value="<?php echo $Vivienda1->Id ?>" name="<?php echo "Idents" . $i; ?>" id="<?php echo "Idents" . $i; ?>" type="hidden">
                                        <input value="<?php echo $i ?>" name="Indicador" id="Indicador" type="hidden">
                                    </div>
    <?php
}
?>    	
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador2/Menu?ID=25&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Lotes();
    cli.config.ManzanaLotes();
    cli.config.LotesxTipo();
    cli.config.Cambiarviviendas();
</script>

