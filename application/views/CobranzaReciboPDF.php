<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <?php
    foreach ($NoRecibos as $Recibos1) {
        if ($Recibos1->ReciboNoRecibo == $Recibo) {
            $R1 = $Recibos1->ReciboNoRecibo;
            $R2 = $Recibos1->ReciboFechaPago;
            $R3 = $Recibos1->ReciboNombre;
            $R4 = $Recibos1->ReciboCantidad;
            $R5 = $Recibos1->ReciboHonorarios;
            $R6 = $Recibos1->ReciboSubtotal;
            $R7 = $Recibos1->ReciboIVA;
            $R8 = $Recibos1->ReciboTotal;
        }
    }
    ?> 
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">EMISIÓN DE RECIBOS DE PAGO</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlCobranza/Recibo'); ?>
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-4">
                        <label for="NoRecibo" class="control-label">No. de Recibo: <p class="text-info"> <?php echo $R1; ?></p></label>
                    </div>
                    <div class="col-md-4">
                        <label for="ReciboFechaPago" class="control-label">Fecha de pago: <p class="text-info"><?php echo $R2; ?></p></label>
                    </div>
                    <div class="col-md-4">
                        <label for="ReciboNombre" class="control-label">Recibí de:  <p class="text-info"><?php echo $R3; ?></p></label>
                    </div>
                    <div class="col-md-4">
                        <label for="ReciboCantidad" class="control-label">La cantidad de:  <p class="text-info"><?php echo '$ ' . number_format($R4, 2, '.', ', '); ?></p></label>	
                    </div>
                    <div class="col-md-4"> 
                        <label for="ReciboHonorarios" class="control-label">Por concepto de:  <p class="text-info"><?php echo $R5; ?></p></label> 
                    </div>
                    <div class="col-md-12 text-center"> 
                        <label for="ReciboTotal" class="control-label">Total:</label> 
                        <h1><?php echo "$ " . number_format($R8, 2, '.', ', '); ?></h1>		
                    </div>
                    <div class="col-md-12" align="center">
                        <button type="button" id="btnGenerarRecibo" name="btnGenerarRecibo" class="btn btn-lg btn-danger"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/ReportesPDF'" data-toggle="tooltip" data-placement="top" title="" data-original-title="GENERAR PDF">
                            <span class="fa fa-external-link fa-5x"></span>
                        </button>
                    </div>
                </fieldset>
            </div>
        </div>
    </div> 
</form>

<table width="100%">    
    <tr>
        <td width="80%">   

        </td>
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'"><span class="fa fa-arrow-left fa-2x"></span></button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.PagosParaRecibo();
    cli.config.LlenarRecibo();
</script>


