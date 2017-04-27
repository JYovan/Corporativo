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

                foreach ($Proyecto as $Proyecto1) {
                    
                }
                ?>
            </td>
        </tr>
    </table>

<?php  echo form_open_multipart('controlador2/RDesarrolloAct'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de Proyecto de Desarrollo Inmobiliario</strong>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                </br>	
                                <input type="hidden" class="form-control" name="ID" id="ID" value="<?php echo $Proyecto1->ID ?>">	
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Modelo de negocio</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Modelo" name="Modelo"   required="required">
                                        <option value="<?php echo $Proyecto1->Modelo ?>">
                                            <?php 
                                            $respuesta = "-";
                                            foreach ($ModelosN as $ModelosN1) {
                                                if ($ModelosN1->id_modelo == $Proyecto1->Modelo) {
                                                    $respuesta = $ModelosN1->dsc_modelo;
                                                }
                                            }
                                            echo $respuesta;
                                            ?>                   
                                        </option>
<?php  foreach ($ModelosN as $ModelosN1) { ?> 
                                            <option value="<?php echo $ModelosN1->id_modelo; ?>"><?php  echo $ModelosN1->dsc_modelo; ?></option>
                                            <?php  }?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-12 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Inmueble a desarrollar</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control" id="Inmueble[]"  size="2" multiple="multiple"  name="Inmueble[]" >
                                            <option value="<?php echo $Proyecto1->Inmueble ?>" selected="selected">
                                                <?php 
                                                $respuesta = "-";
                                                $resp = explode(',', $Proyecto1->Inmueble);
                                                $n = count($resp);
                                                for ($i = 0; $i < $n; $i++) {
                                                    foreach ($Inmueble as $Inmueble1) {
                                                        if ($Inmueble1->ID == $resp[$i]) {
                                                            $respuesta = $Inmueble1->Ubicacion;
                                                        }
                                                    }
                                                    echo $respuesta . ', ';
                                                }
                                                ?>
                                            </option>
    <?php  foreach ($Inmueble as $Inmueble1) { ?> 
                                                <option value="<?php  echo $Inmueble1->ID; ?>"><?php  echo $Inmueble1->Ubicacion; ?></option>
    <?php  } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre del desarrollo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="NDesarrollo" id="NDesarrollo" value="<?php echo $Proyecto1->Proyecto ?>"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Segmento del desarrollo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  value="<?php  echo $Proyecto1->SegmentoD ?>" type="text" class="form-control" name="SegmentoD" id="SegmentoD" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Pais" class="control-label">Superficie del terreno:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12"  id="Pais2">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="number" step="0.01" class="form-control" name="SuperficieT" value="<?php echo $Proyecto1->SuperficieT ?>" id="SuperficieT" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Estado" class="control-label">Secciones a desarrollar:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12" id="Estado2">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="number" class="form-control" name="SeccionD" id="SeccionD"  value="<?php  echo $Proyecto1->SeccionD ?>" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Ciudad" class="control-label">Número total de viviendas:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12" id="Ciudad2">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="number" class="form-control" name="NumeroViviendas" value="<?php  echo $Proyecto1->NumeroViviendas ?>" id="NumeroViviendas" >
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
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Fecha de inicio</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo $Proyecto1->Finicio ?>"  type="text" class="form-control" name="Finicio" id="datepicker"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Fecha de término</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo $Proyecto1->Ftermino ?>"  type="text" class="form-control" name="Ftermino" id="datepicker2" >
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url();?>index.php/controlador2/Menu?ID=25&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>