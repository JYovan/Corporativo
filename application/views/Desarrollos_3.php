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

<?php echo form_open_multipart('controlador2/RManzana'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Sembrado inmobiliario de lotes</strong>
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
                                    <label for="1" class="control-label">Manzana</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="Resultado">
                                    <select class="form-control" id="Manzana" name="Manzana"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Lotes</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="NLotes" id="NLotes" >
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
                                    <label for="1" class="control-label">Cantidad de lotes regulares:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input value="0" type="number" step="1" class="form-control" name="LotesHr" id="LotesHr" >
                                </div>	
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="col-md-3 col-xs-12">
                                    <label for="2" class="control-label">Numeración de lotes:</label><br>	
                                </div>	
                                <div class="col-md-9 col-xs-12">
                                    <input type="text" class="form-control" name="NLotesHr" id="NLotesHr" >
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Cantidad de lotes  irregulares:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input value="0" type="number" step="1" class="form-control" name="LotesHi" id="LotesHi" >
                                </div>	
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="col-md-3 col-xs-12">
                                    <label for="4" class="control-label">Numeración de lotes:</label><br>	
                                </div>	
                                <div class="col-md-9 col-xs-12">
                                    <input type="text" class="form-control" name="NLotesHi" id="NLotesHi" >
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="5" class="control-label">Cantidad de lotes comerciales:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input value="0" type="number" step="1" class="form-control" name="LotesC" id="LotesC" >
                                </div>	
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="col-md-3 col-xs-12">
                                    <label for="6" class="control-label">Numeración de lotes:</label><br>	
                                </div>	
                                <div class="col-md-9 col-xs-12">
                                    <input type="text" class="form-control" name="NLotesC" id="NLotesC" >
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="7" class="control-label">Total de lotes en manzana:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12" id="ResultadoLotes">
                                    <input value="0" type="number" step="0.01" class="form-control" name="Total" id="Total" readonly="readonly">
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
    cli.config.Manzana();
    cli.config.Lotes1();
    cli.config.Lotes2();
    cli.config.Lotes3();
</script>

