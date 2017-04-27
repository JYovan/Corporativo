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

<?php echo form_open_multipart('controlador/INCAprobacion'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Aprobación de incapacidad laboral</strong>
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
                                    Solicitud:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="IDAprobacion" name="IDAprobacion"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Solicitud as $Solicitud1) { ?> 
                                            <option value="<?php echo $Solicitud1->ID; ?>"><?php echo 'Solicitud ' . $Solicitud1->ID ?></option>
<?php } ?>
                                    </select>
                                    </br>
                                </div>   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Información</strong>		
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
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Aprobación</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6">
                                    Remuneración:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Remunerada" name="Remunerada"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>
                                    </br>
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
                                    Estado de solicitud:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Estado" name="Estado"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Aprobado">Aprobado</option>
                                        <option value="No aprobado">No aprobado</option>
                                    </select>
                                    </br>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.INCResS();
</script>
