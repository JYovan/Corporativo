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

<?php echo form_open_multipart('controlador2/RSManzana'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Sembrado inmobiliario de manzanas</strong>
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
                                    <label for="2" class="control-label">Sección</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="Resultado">
                                    <select class="form-control" id="Seccion" name="Seccion"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Número de manzana</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  type="number" class="form-control" name="Manzana" id="Manzana" >
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
                                    <label for="4" class="control-label">Superficie habitacional:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input value="0" type="number" step="0.01" class="form-control" name="SuperficieH" id="SuperficieH" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="5" class="control-label">Superficie comercial:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input value="0" type="number" step="0.01" class="form-control" name="SuperficieC" id="SuperficieC" >
                                </div>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="6" class="control-label">Superficie de donación:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input value="0"  type="number" step="0.01" class="form-control" name="SuperficieD" id="SuperficieD" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="7" class="control-label">Superficie vendible:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12" id="Resultado2">
                                    <input value="0"  step="0.01" type="number" class="form-control" name="SuperficieV" id="SuperficieV" >
                                </div>	
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Total de superficie en manzana:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12"  id="ResultadoSuma">
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
    cli.config.Seccion();
    cli.config.SumaSuperficies();
    cli.config.SumaSuperficies2();
    cli.config.SumaSuperficies3();
</script>

