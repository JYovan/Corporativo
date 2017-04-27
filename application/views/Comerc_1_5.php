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

<?php echo form_open_multipart('controlador/ClienteTrabajo'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos laborales</strong>
                            </div>
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
                            <div class="col-xs-12 col-sm-12">   
                                <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Expediente del cliente
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Resultado">
                                </br>
                            </div>
                        </td>
                    </tr>
                </table>  
            </td>
        </tr>
    </table>
</form>

<?php echo form_open_multipart('controlador/xxx'); ?>     
<table width="100%">    
    <tr>
        <td>
            <div class="col-md-12 col-xs-12">
                <div class="col-md-10 col-xs-4" id="ID_cliente" align="left">
                </div>
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
                </div>
            </div>
        </td>
    </tr>
</table> 
</form> 
</div>
<script>
    cli.config.ExpedienteCliente();
</script>