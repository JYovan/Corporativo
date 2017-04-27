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

<?php echo form_open_multipart('controlador/BorrarPagoTerceros'); ?> 
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
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Saldos al día de hoy</strong>
                            </div>
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
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Pago Programado</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">
                                    Pagos programados:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <select class="form-control" id="PagosP" name="PagosP" >
                                        <option value="0">Selecciona</option>
<?php foreach ($PagosP as $PagosP1) { ?> 
                                            <option value="<?php echo $PagosP1->ID; ?>"><?php echo $PagosP1->Concepto . ' / ' . $PagosP1->Proveedor . '/ ' . $PagosP1->FechaPago; ?></option>
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Borrar</button>
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
<script>
    cli.config.InfoPagosP();
</script>