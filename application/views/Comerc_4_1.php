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
<?php echo form_open_multipart('controlador/RegistroPagos'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de pagos por concepto de compra de vivienda
                            </strong>
                        </td>
                    </tr>   


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Info" class="control-label">Información del cliente</label><br>	
                            </div>
                            <?php
                            $Enero = "-";
                            $Febrero = "-";
                            $Marzo = "-";
                            $Abril = "-";
                            $Mayo = "-";
                            $Junio = "-";
                            $Julio = "-";
                            $Agosto = "-";
                            $Septiembre = "-";
                            $Octubre = "-";
                            $Noviembre = "-";
                            $Diciembre = "-";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Cliente</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Cliente" name="Cliente" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Clientes as $Clientes1) { ?> 
                                            <option value="<?php echo $Clientes1->ID; ?>"><?php echo $Clientes1->Ncliente; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12" id="RCliente">

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
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Registro de pago</label><br>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Año  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <select class="form-control" id="Anio" name="Anio"  required>
                                        <option value="">Selecciona</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>             
                                    </select>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Mensualidad pagada		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <select class="form-control" id="Mensualidad" name="Mensualidad"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Meses as $Meses1) { ?> 
                                            <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                </div> 
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Monto  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01"  class="form-control" name="Monto" id="Monto" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Forma de pago
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <select class="form-control" id="FPago" name="FPago"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Deposito">Deposito</option>
                                        <option value="Transferencia">Transferencia</option>            
                                    </select>
                                    <br>
                                </div>  		  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Institución bancaria o financiera	  	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input type="text"  class="form-control" name="InstitBancaria" id="InstitBancaria" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Número de cuenta
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="text"  class="form-control" name="Ncuenta" id="Ncuenta" required>
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Referencia del pago		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="text" class="form-control" name="RefePago" id="RefePago" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Fecha del pago	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="text" class="form-control" value="<?php echo date("d/m/Y") ?>" name="FePago" id="datepicker" required>
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Número de pago
                                </div>
                                <div class="col-md-3 col-xs-6" >
                                    <input class="form-control" type="text" name="NPago" id="NPago"   >
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Saldo al día
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01"  class="form-control" name="Saldo" id="Saldo" >
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-10 col-sm-12">
                                <label for="hist" class="control-label">Histórico Mensual</label>
                                </br>		
                            </div>
                            <div class="col-md-2 col-xs-6" align="right">
                                Año  	
                                <select class="form-control" id="AnioHist" name="AnioHist"  required>
                                    <option selected="selected" value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>             
                                </select>
                                <br>
                            </div> 
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <div id="ResultadoHistorico"> 
                                <table >
                                    <tr>
                                        <td>
                                            <div class="col-md-4 col-xs-12">	  
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Enero	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Febrero
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input  class="form-control" name="Enero" id="Enero" value="<?php echo $Enero; ?>" disabled=true>  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input  class="form-control" name="Febrero" id="Febrero" value="<?php echo $Febrero; ?>"  disabled=true>
                                                </div>    		  
                                            </div>
                                            <div class="col-md-4 col-xs-12">	  
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Marzo	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Abril
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input  class="form-control" name="Marzo" id="Marzo" value="<?php echo $Marzo; ?>"  disabled=true>	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Abril" id="Abril" value="<?php echo $Abril; ?>"  disabled=true>
                                                </div>    		  
                                            </div>
                                            <div class="col-md-4 col-xs-12">	  
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Mayo	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Junio
                                                </div> 
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Mayo" id="Mayo" value="<?php echo $Mayo; ?>"  disabled=true>	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Junio" id="Junio" value="<?php echo $Junio; ?>"  disabled=true>
                                                </div>  		  
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-md-4 col-xs-12">	  
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Julio	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Agosto
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Julio" id="Julio" value="<?php echo $Julio; ?>"  disabled=true> 	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Agosto" id="Agosto" value="<?php echo $Agosto; ?>"  disabled=true>
                                                </div>    		  
                                            </div>
                                            <div class="col-md-4 col-xs-12">	  
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Septiembre	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Octubre
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Septiembre" id="Septiembre" value="<?php echo $Septiembre; ?>"  disabled=true>  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Octubre" id="Octubre" value="<?php echo $Octubre; ?>"  disabled=true>
                                                </div>    		  
                                            </div>
                                            <div class="col-md-4 col-xs-12">	  
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Noviembre	  	
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    Diciembre
                                                </div> 
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input  class="form-control" name="Noviembre" id="Noviembre" value="<?php echo $Noviembre; ?>"  disabled=true>
                                                </div>
                                                <div class="col-md-6 col-xs-6" align="center">
                                                    <input class="form-control" name="Diciembre" id="Diciembre" value="<?php echo $Diciembre; ?>"  disabled=true>
                                                </div>  		  
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
    cli.config.Mensualidades();
    cli.config.ResultClienteHist();
</script>

