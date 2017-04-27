<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">

    <div class="cold-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <img src="<?php print base_url() . 'imagenes/icono.png' ?>" width="24" height="24"> 
                    REGISTRO PAGOS PROGRAMADOS</h3>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="col-xs-12 col-sm-12">
                        <h1 class="text-center">Saldos al día de hoy</h1>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <label for="">ACTIVIDAD</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Unidad" id="Unidad" >
                    </div>
                    <div class="col-md-4">
                        <label for="">PERSONAL:</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Personal" id="Personal" >
                    </div>
                    <div class="col-md-4">
                        <label for="">CONCEPTO DE PAGO:</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Concepto" id="Concepto" required="required" >
                    </div>
                    <div class="col-md-4">
                        <label for="">MONTO</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" step="0.01" type="number" name="Monto" id="Monto" required="required" >

                    </div>
                    <div class="col-md-4">
                        <label for="">PROVEEDOR</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Proveedor" id="Proveedor" >
                    </div> 
                    <div class="col-md-4">
                        <label for="">FORMA DEL PAGO</label>
                        <select class="form-control" id="Forma" name="Forma" required>
                            <option value="">Selecciona</option> 
                            <option value="Efectivo">Efectivo</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Deposito">Depósito</option>
                            <option value="Transferencia">Transferencia</option>
                        </select>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

    <?php echo form_open_multipart(base_url() . 'index.php/controlador/PagoTerceros2'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro orden de pago a terceros</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                        </td>
                    </tr>
                    <?php foreach ($HoySaldos as $HoySaldos1) { ?> 
                        <tr>
                            <td>
                                <div class="col-md-3 col-xs-6">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($Cuentas as $temp) {
                                        if ($temp->ID == $HoySaldos1->IDCuenta) {
                                            $respuesta = $temp->Banco;
                                        }
                                    }
                                    echo $respuesta
                                    ?>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($Cuentas as $temp) {
                                        if ($temp->ID == $HoySaldos1->IDCuenta) {
                                            $respuesta = $temp->NoCuenta;
                                        }
                                    }
                                    echo $respuesta
                                    ?>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <?php echo $HoySaldos1->Saldo; ?>
                                </div>
                            </td>
                        </tr>
                    <?php } ?> 
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro</strong>
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
                                    ACTIVIDAD:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Unidad" id="Unidad" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Personal:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Personal" id="Personal" >
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
                                    Concepto de pago:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Concepto" id="Concepto" required="required" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Monto:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" step="0.01" type="number" name="Monto" id="Monto" required="required" >
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
                                    Proveedor o persona a pagar:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Proveedor" id="Proveedor" >
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
                                    Forma del pago:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Forma" name="Forma"  required>
                                        <option value="">Selecciona</option> 
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Deposito">Depósito</option>
                                        <option value="Transferencia">Transferencia</option>
                                    </select>
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Caja de efectivo:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Caja" name="Caja"  required>
                                        <option value="">Selecciona</option> 
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
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
                                <div class="col-md-3 col-xs-12">
                                    Fecha en que se debe realizar el pago:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input class="form-control" type="text" name="FechaPago" id="datepicker"  value="<?php echo date("d/m/Y") ?>"  >
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">
                                    Tipo de comprobante de pago:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <select class="form-control" id="Comprobante" name="Comprobante"  required>
                                        <option value="">Selecciona</option> 
                                        <option value="Factura">Factura</option>
                                        <option value="Recibo">Recibo</option>
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
    </tr>
    <tr>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=82&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>


