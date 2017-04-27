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

<?php echo form_open_multipart('controlador2/RViviendas2'); ?>    
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
                                    <select class="form-control" id="Desarrollo" name="Desarrollo"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                            <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
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
                                    <label for="1" class="control-label">Manzanas</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="Resultado">
                                    <select class="form-control" id="Manzana" name="Manzana"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Tipo de lotes</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoLotes">
                                    <select class="form-control" id="TLotes" name="TLotes"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
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
                                <div class="col-md-12 col-xs-12" id="Lotes">
                                    <select class="form-control" id="Lotes" name="Lotes"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Viviendas</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="NViviendas" id="NViviendas" >
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
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="NumViviendas" id="NumViviendas" >
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
                                    <input value="0" type="number" step="0.01" class="form-control" name="SuperficieHV" id="SuperficieHV" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="23" class="control-label">Uso del lote:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Uso" name="Uso"   required="required">
                                        <option value="">Selecciona</option>
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
                            <div  id="ResultadoVivienda">

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

