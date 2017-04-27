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

                foreach ($Desarrollo as $Desarrollo1) {
                    
                }
                ?>
            </td>
        </tr>
    </table>

<?php echo form_open_multipart('controlador2/RSManzana'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Relación de distrubución de la superficie</strong>
                        </td>
                    </tr> 
                    <tr>
                        <td> 	
                            <div class="col-md-4 col-xs-12">
                                <label for="1" class="control-label">Desarrollo</label><br>
                            </div>  
                            <div class="col-md-8 col-xs-12">
                                <select class="form-control" id="Desarrollo" name="Desarrollo"   required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                        <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
<?php } ?>
                                </select>
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
                            <div class="col-md-12 col-xs-12" id="Resultado">
                                </br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">  
                                </br>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador2/Menu?ID=25&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ProyectoInform();
</script>