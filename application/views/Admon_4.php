<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">PAGO A TERCEROS</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?> 
            <div class="panel-body">
                <blockquote> 
                        <br>
                        <input type="radio" value="A40" name="SegSocID" id="SegSocID" required/>
                        Nuevo registro de cuenta bancaria 
                        <br>
                        <input type="radio" value="A41" name="SegSocID" id="SegSocID" required/>
                        Registro de saldos de cuentas bancarias 
                        <br>
                        <input type="radio" value="A46" name="SegSocID" id="SegSocID" required/>
                        Agregar pago programado 
                        <br>
                        <input type="radio" value="A47" name="SegSocID" id="SegSocID" required/>
                        Borrar pago programado 
                        <br>
                        <input type="radio" value="A42" name="SegSocID" id="SegSocID" required/>
                        Registro orden de pago a terceros
                        <br>
                        <input type="radio" value="A49" name="SegSocID" id="SegSocID" required/>
                        Registro cobro en otras cuentas
                        <br>
                        <input type="radio" value="A43" name="SegSocID" id="SegSocID" required/>
                        Registro de salida de caja de efectivo
                        <br>
                        <input type="radio" value="A44" name="SegSocID" id="SegSocID" required/>
                        Registro de ingreso de caja de efectivo
                        <br>
                        <input type="radio" value="A410" name="SegSocID" id="SegSocID" required/>
                        Borrar movimiento de caja de efectivo
                        <br> 
                    <input type="radio" value="A48" name="SegSocID" id="SegSocID" required/>
                    Estado de ingresos a caja de administración 
                    <br>
                    <input type="radio" value="A45" name="SegSocID" id="SegSocID" required/>
                    Control de pagos a terceros y estados de cuenta
                    <br>
                </blockquote>  
                <div class="col-md-12">
                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                </div> 
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-8"></div>
    <div class="col-md-4" align="right">     
        <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>    
    </div> 
</div>
