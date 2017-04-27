<!-- configuramos el plugin-->

<div class="container">	
    <?php
        $indice = $_SESSION["ID"]; 
        echo form_open_multipart(base_url().'index.php/ctrlCobranza/OrdenPago'); ?> 
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
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Datos de la Orden de Cobro</strong>	
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
                            <strong>Información del cliente </strong>
                            </br>
                            <?php
                            foreach ($Cobranza as $Cobranza1) {
                                echo "Folio: ";
                                ?>	<strong style="color:#ff6600"><?php echo $Cobranza1->FolioCobranza; ?> </strong><?php
                                echo "</p>";
                                echo "</p>";
                                $resp = $Cobranza1->UltimoPago;
                                $monto = $resp;
                                if ($resp == 0) {
                                    $resp = 'Sin registro de recibo';
                                }
                                $Resta = $Cobranza1->Resto;


                                if ($resp != 'Sin registro de recibo') {
                                    $resto = $Cobranza1->Resto;
                                    $Resta = $resto - $resp;
                                }


                                $cliente = $Cobranza1->ID_cliente;
                                foreach ($ID_cliente as $ID_cliente1) {
                                    if ($ID_cliente1->Folio == $cliente) {
                                        echo "Cliente: ";
                                        ?>	<strong style="color:#ff6600"><?php echo $ID_cliente1->NombreC; ?> </strong><?php
                                        $CLIENTE = $ID_cliente1->NombreC;
                                    }
                                }
                                echo "</p>";
                                echo "Concepto de cobro: ";
                                ?>	<strong style="color:#ff6600"><?php echo $Cobranza1->ConceptoCobro; ?> </strong><?php
                                echo "</p>";
                                $Id_tarifa = $Cobranza1->Id_tarifa;
                                foreach ($Tarifa as $Tarifa1) {
                                    if ($Tarifa1->id_tarifa == $Id_tarifa) {
                                        echo "Tarifa aplicada: ";
                                        ?>	<strong style="color:#ff6600"><?php echo $Tarifa1->dsc_tarifa; ?> </strong><?php
                                    }
                                }
                                echo "</p>";
                                echo "Monto a pagar: ";
                                ?>	<strong style="color:#ff6600"><?php echo $Cobranza1->Resto; ?> </strong><?php
                                echo "</p>";
                                echo "Fecha de cobro: ";
                                ?>	<strong style="color:#ff6600"><?php echo $Cobranza1->FechaCobro; ?> </strong><?php
                                echo "</p>";
                                $IdResponsableServicio = $Cobranza1->IdResponsableServicio;
                                foreach ($USUARIOS as $USUARIOS1) {
                                    if ($USUARIOS1->Id == $IdResponsableServicio) {
                                        echo "Nombre de quien prestó el servicio: ";
                                        ?>	<strong style="color:#ff6600"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?> </strong><?php
                                    }
                                }

                                echo "</p>";
                                $IdResponsableOrden = $Cobranza1->IdResponsableOrden;
                                foreach ($USUARIOS as $USUARIOS1) {
                                    if ($USUARIOS1->Id == $IdResponsableOrden) {
                                        echo "Nombre de quien emite la orden de cobro: ";
                                        ?>	<strong style="color:#ff6600"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?> </strong><?php
                                    }
                                }
                            }
                            ?>
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
                                    <input type="hidden" name="Deposito" id="Deposito"  value="<?php echo $resp; ?>">
                                    <input type="hidden" name="Cliente" id="Cliente"  value="<?php echo $CLIENTE; ?>">

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
                                    <input class="form-control" type="text" name="UltimoPago" id="UltimoPago"  value="<?php echo $resp; ?>" disabled="disabled">
                                    <input type="hidden" name="Monto" id="Monto"  value="<?php echo $monto ?>">
                                    <br />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-6">
                                    <label for="FormaPago" class="control-label">Forma de pago:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="FormaPago" name="FormaPago"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Tarjeta_de_debito">Tarjeta de débito</option>
                                        <option value="Tarjeta_de_credito">Tarjeta de crédito</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Transferencia">Transferencia Bancaria</option>
                                    </select>
                                    <br />		
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-6">
                                    <label for="BancoPago" class="control-label">Banco:</label><br>
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="BancoPago" id="BancoPago" >
                                    <br />		
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <label for="CuentaPago" class="control-label">Cuenta:</label><br>
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CuentaPago" id="CuentaPago" >	
                                    <br />	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-6">
                                    <label for="Factura" class="control-label">Emite Factura:</label><br>
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <select class="form-control" id="Factura" name="Factura"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>	
                                    <br />	
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <label for="NoFactura" class="control-label">Número de factura:</label><br>
                                </div>
                                <div class="col-md-2 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NoFactura" id="NoFactura" >	
                                    <br />	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12">
                                    <label for="FormaConsignarPago" class="control-label">Forma de consignar el monto pagado:</label><br>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <select class="form-control" id="FormaConsignarPago" name="FormaConsignarPago"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Efectivo_caja_de_ingresos_administracion">Efectivo  caja de ingresos administración</option>
                                        <option value="Deposito_en_cuenta_bancaria">Depósito en cuenta bancaria</option>
                                    </select>	
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
                        <td bgcolor="#3a545f">
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-12 col-sm-12">
                                    <strong style="color:#FFF">Efectivo caja de ingresos de administración</strong>
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
                                <div class="col-md-4 col-xs-12">
                                    <label for="FechaEntregaEfectivo" class="control-label">Fecha de entrega de efectivo caja de ingresos administración</label><br>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="FechaEntregaEfectivo" id="datepicker2" value="<?php echo date("d/m/Y") ?>" >	
                                    <br />	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12">
                                    <label for="FolioAcuseEntrega" class="control-label">Folio de  acuse de entrega de efectivo  caja de ingresos administración</label><br>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="FolioAcuseEntrega" id="FolioAcuseEntrega"  >		
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
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="FechaDepositoBancario" id="datepicker3" value="<?php echo date("d/m/Y") ?>" >		
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
                                <div class="col-md-12 col-xs-12">
                                    <label for="ResponsabledeCobro" class="control-label">Nombre de la persona que realizó el trámite de cobro al cliente:</label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-12 col-xs-12" id="cliente2">
                                    <select class="form-control" id="ResponsabledeCobro" name="ResponsabledeCobro"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
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
                                <input   class="form-control" type="hidden" name="CobranzaID" id="CobranzaID" value="<?php echo $Cobranza1->ID; ?>">	
                                <?php if ($Resta <= 0) { ?>
                                    <input   class="form-control" type="hidden" name="Cobrado" id="Cobrado" value="Pagado">  
                                <?php } else {
                                    ?>
                                    <input   class="form-control" type="hidden" name="Cobrado" id="Cobrado" value="Parcial"> 
                                <?php } ?>
                                <input   class="form-control" type="hidden" name="Resto" id="Resto" value="<?php echo $Resta; ?>">
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