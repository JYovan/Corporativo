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

<?php echo form_open_multipart(base_url().'index.php/controlador/OrdenPago2'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Trámite de cobro de servicios</strong>
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos del Cobro</strong>	
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12">

                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <label for="FechaPago" class="control-label">Origen del cobro:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text"  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" name="Cliente" id="Cliente" required="required">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12">

                                </div>
                                <div class="col-md-2 col-xs-12">    

                                    <label for="FechaPago" class="control-label">Fecha de pago:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12" align="right">
                                    <input  class="form-control" type="text" name="FechaPago" id="datepicker"  value="<?php echo date("d/m/Y") ?>" required>
                                    <br />		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-12">
                                    <label for="FormaPago" class="control-label">Último pago:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="UltimoPago" id="UltimoPago" required="required">
                                    <br />
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td  bgcolor="#3a545f">
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <strong style="color:#FFF">Depósito en cuenta bancaria</strong>
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
                                <div class="col-md-4 col-xs-6">
                                    <label for="FechaDepositoBancario" class="control-label">Cuenta por consignar el monto pagado</label><br>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <select class="form-control" id="CuentaDepositoBancario" name="CuentaDepositoBancario"  required>
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Cuentas as $Cuentas1) { ?> 
                                            <option value="<?php echo $Cuentas1->ID; ?>"><?php echo $Cuentas1->Banco . ' ' . $Cuentas1->NoCuenta; ?></option>
<?php } ?>
                                    </select>	
                                    <br />	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-6">
                                    <label for="FechaDepositoBancario" class="control-label">Fecha de operación bancaria</label><br>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="FechaDepositoBancario" id="datepicker2" value="<?php echo date("d/m/Y") ?>" >		
                                    <br />
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
                                </br>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar cobro</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>


