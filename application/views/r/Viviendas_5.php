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

<?php echo form_open_multipart('controlador/AsignarVivienda'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de Tipo de Vivienda</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos del desarrollo</strong>		
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
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre del desarrolo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"  required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                            <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Viviendas asignadas</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-3 col-xs-12">	
                                    <label for="1" class="control-label">Modelo de vivienda</label><br>	
                                </div>
                                <div class="col-md-3 col-xs-12">	
                                    <label for="1" class="control-label">Tipo de vivienda</label><br>	
                                </div>
                                <div class="col-md-3 col-xs-12">	
                                    <label for="1" class="control-label">Superficie del modelo de vivienda</label><br>	
                                </div>
                                <div class="col-md-3 col-xs-12">	
                                    <label for="1" class="control-label">Precio inicial de la vivienda</label><br>	
                                </div>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12" id="Viviendas">

                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Asignar nuevas viviendas</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-3 col-xs-12">	
                                    <select class="form-control" id="Vivienda" name="Vivienda"  required="required">
                                        <option value="">Selecciona</option >
                                        <?php foreach ($Vivienda as $Vivienda1) { ?> 
                                            <option value="<?php echo $Vivienda1->ID; ?>"><?php echo $Vivienda1->Modelo; ?></option>
<?php } ?>
                                    </select>	
                                </div>
                                <div class="col-md-3 col-xs-12">	
                                    <select class="form-control" id="TipoV" name="TipoV"  required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Tipos as $Tipos1) { ?> 
                                            <option value="<?php echo $Tipos1->ID; ?>"><?php echo $Tipos1->Prototipo; ?></option>
<?php } ?>
                                    </select>	
                                </div>
                                <div class="col-md-3 col-xs-12" id="InfoViviendas1">	

                                </div>
                                <div class="col-md-3 col-xs-12" id="InfoViviendas2">	

                                </div>
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
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Agregar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=20&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.AsigVivienda();
    cli.config.InfoVivienda();
</script>

