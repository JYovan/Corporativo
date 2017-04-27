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
<?php echo form_open_multipart('controlador/Comerc_5_2'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de transmisión de propiedad en ejecución 
                                de fideicomiso y extinción parcial del mismo</strong>
                        </td>
                    </tr>   



                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Nombre del fideicomiso</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"   required="required">
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
                                    <label for="1" class="control-label">Manzana:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoManzana">
                                    <select class="form-control" id="Manzana" name="Manzana"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Lote:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoLotes">
                                    <select class="form-control" id="Lotes" name="Lotes"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Viviendas:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoViviendas">
                                    <select class="form-control" id="Viviendas" name="Viviendas"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <label for="Redes" class="control-label">Información de la vivienda</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12" id="ResultadoViviendasInfo">

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
                    <tr>
                        <td>

                            <div class="col-xs-12 col-sm-12" id="Cambio">

                            </div>

                        </td>
                    </tr>











                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ManzanaF();
    cli.config.LotesF();
    cli.config.LotesFM();
    cli.config.ViviendasF();
    cli.config.ViviendasInFo();
    cli.config.ActViviendasInFo();

    cli.config.FormulaA0();
    cli.config.FormulaA1();
    cli.config.FormulaA2();
    cli.config.FormulaB1();
    cli.config.FormulaB2();
</script>

