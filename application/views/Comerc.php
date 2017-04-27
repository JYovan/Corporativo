<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE COMERCIALIZACIÓN</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Comercializacion'); ?>
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <blockquote> 
                            <br>
                            <input type="radio" value="COM_0" name="COMID" id="COMID" required/>
                            Formato de Compra-Venta
                            <br>
                            <input type="radio" value="COM_1" name="COMID" id="COMID" required/>
                            Cliente 
                            <br>
                            <input type="radio" value="COM_21" name="COMID" id="COMID" required/>
                            Datos de la promesa de compraventa/Registro de vivienda
                            <br>
                            <input type="radio" value="COM_3" name="COMID" id="COMID" required/>
                            Revisión de expediente para compraventa de inmueble    
                            <br>
                            <input type="radio" value="COM_22" name="COMID" id="COMID" required/>
                            Registro de liquidación de compraventa
                            <br>
                            <input type="radio" value="COM_4" name="COMID" id="COMID" required/>
                            Movimientos
                            <br> 
                            <input type="radio" value="COM_6" name="COMID" id="COMID" required/>
                            Expediente completo del cliente
                            <br>
                            <input type="radio" value="COM_77" name="COMID" id="COMID" required/>
                            Visualizar compraventas
                            <br>
                        </blockquote>   
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                    </div>
                </fieldset>
            </div> 
            </form>
        </div>
    </div>
    <table width="100%">
        <tr>
            <td width="80%">

            </td>
        </tr>
        <tr>
            <td width="20%" align="right">  
                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>

