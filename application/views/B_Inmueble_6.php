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

<?php echo form_open_multipart('controlador/BorrarTerreno'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Borrar cobros pendientes</strong>
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Borrar registro de inmuebles</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-2 col-xs-12" align="right">
                                    <label for="NFolio" class="control-label">Inmueble</label><br>
                                </div>  		  
                                <div class="col-md-6 col-xs-12" align="left">
                                    <select class="form-control" id="Inmueble" name="Inmueble" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Inmueble as $Inmueble1) { ?> 
                                            <option value="<?php echo $Inmueble1->ID; ?>"><?php echo $Inmueble1->Ubicacion; ?></option>
<?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-12 col-xs-12" align="right">
                                    <input  type="hidden" name="user" id="user" value="<?php echo $indice; ?>" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Resultado">

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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.PagosParaRecibo();
    cli.config.LlenarRecibo();
    cli.config.PaguitosRecibo();
</script>