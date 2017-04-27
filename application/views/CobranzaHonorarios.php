<!-- configuramos el plugin-->

<div class="container">	<?php
        $indice = $_SESSION["ID"]; 
        ?> 

<?php echo form_open_multipart(base_url().'index.php/ctrlCobranza/HonoOrdenCobro'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Orden de cobro por honorarios mensuales</strong>
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="Nombre_cliente" class="control-label">La siguiente instrucción emitirá el cobro por los honorarios mensuales correspondientes a la totalidad de los clientes por su responsable, es una instrucción mensual y solo se podrá emitir una vez.</label><br>		
                                </div>
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
                            <div class="col-xs-12 col-sm-12">	    		  
                                <div class="col-md-3 col-xs-6">
                                    Mes a cobrar		  	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="meses" name="meses"  required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Meses as $Meses1) { ?> 
                                            <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
<?php } ?>
                                    </select>
                                    <br />
                                </div> 
                                <div class="col-md-3 col-xs-6">
                                    Ejercicio a cobrar		  	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  class="form-control" type="text" name="anio" id="anio"  value="<?php echo date("Y") ?>" required="required">	
                                </div>
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
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Enviar orden</button>
                            </div>
                        </td>
                    </tr>
                </table>  
            </td>
        </tr>
    </table>
</form>

<?php echo form_open_multipart(base_url().'index.php/ctrlCobranza/IDHonoOrdenCobro'); ?> 

<table width="100%" border="1" bordercolor="#FF6633">
    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td bgcolor="#ff6600">
                        <strong style="color:#FFF">Orden de cobro por honorarios mensuales por cliente</strong>
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
                        <div class="col-xs-12 col-sm-12">
                            <label for="Nombre_cliente" class="control-label">Nombre del cliente:</label><br>		
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-xs-9 col-sm-9" id="ID_cliente2">
                                <select class="form-control" id="ID_cliente" name="ID_cliente"  required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                        <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
<?php } ?>
                                </select>

                            </div>
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
                        <div class="col-xs-12 col-sm-12">	    		  
                            <div class="col-md-3 col-xs-6">
                                Mes a cobrar		  	
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <select class="form-control" id="meses2" name="meses2"  required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Meses as $Meses1) { ?> 
                                        <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
<?php } ?>
                                </select>
                                <br />
                            </div> 
                            <div class="col-md-3 col-xs-6">
                                Ejercicio a cobrar		  	
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <input  class="form-control" type="text" name="anio2" id="anio2"  value="<?php echo date("Y") ?>" required="required">	
                            </div>
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
                        <div class="col-xs-12 col-sm-12">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" id="user2" name="user2" value="<?php echo $indice; ?>" >Enviar orden por cliente</button>
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
    </tr>
    <tr>
        <td width="20%" align="right">  
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
        </td>
    </tr>
</table>
</div>


