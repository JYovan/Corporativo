<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">REGISTRO DE INGRESOS COBRADOS</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlCobranza/Cobranza'); ?>  
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12 col-sm-12">
                        <label for="ID_cliente" class="control-label">EMPRESAS / CLIENTES</label>
                        <select class="form-control" id="cmbEmpresaRIC" name="cmbEmpresaRIC"  required>
                            <option value=""></option>
                            <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                            <?php } ?>
                        </select>
                    </div> 
                    <div class="col-xs-12 col-sm-12 margin-15-top" align="left" id="Resultado">
                    </div> 
                    <div class="col-md-12">
                        <input class="form-control" type="hidden" name="CobranzaID" id="CobranzaID" value="CP"> 
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="btnConfirmar" name="btnConfirmar" value="<?php echo $indice; ?>">Continuar</button>
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
            <td width="20%" align="right">    
                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
            </td>
        </tr>
    </table>
</div>
<script>
//    cli.config.ConsultarPagoPendiente();
    $(document).ready(function () {
        $("#ID_cliente").change(function () {
            $('#Resultado').html('<h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>');

            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/ResultadoPagoPendiente',
                type: "POST",
                data: {
                    ID: $('#ID_cliente').val()
                }
            }).done(function (data) {
                $('#Resultado').html(data);

                $('#tblIngresosCobrados tbody').on('click', 'tr', function () {
                    $("#tblIngresosCobrados").find("tr").removeClass("success");
                    $("#tblIngresosCobrados").find("tr").removeClass("warning");
                    $(this).addClass('success');
                    $(this).find("#PagoPendiente").prop("checked", true);
                });
                
            });
        });
    });
</script>

