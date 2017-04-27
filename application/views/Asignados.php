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

<?php echo form_open_multipart('controlador/Confirmar'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Trámites asignados</strong>		
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
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-2 col-xs-12" align="center">
                                    <label for="NFolio" class="control-label">Trámites</label><br>
                                </div>		  
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" id="Historico" name="Historico" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($asignados as $datos1) { ?> 
                                            <option value="<?php echo $datos1->ID; ?>"><?php echo $datos1->Numero . " " . $datos1->Prioridad . " " . $datos1->FechaRecibe; ?></option>
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
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Resultado</strong>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td> 
                            <div class="col-xs-12 col-sm-12" id="Consulta">

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>  	
                            <div class="col-xs-12 col-sm-12">  
                                </br>
                                </br>
                                </br>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>  	
                            <div class="col-xs-12 col-sm-12">  
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Confirmar</button>
                            </div> 
                        </td>
                    </tr>
                </table>   
            </td>
        </tr>
    </table>
</form>

<table   width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=3&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.ConsultarTramite();
</script>

