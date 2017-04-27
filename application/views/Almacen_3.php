<!-- configuramos el plugin-->

<div class="container">	

    <?php echo form_open_multipart('controlador/xxx'); ?>  
    <table width="100%" border="1" bordercolor="#FF6633">
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

                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Recepción de artículos, materiales y equipo en almacén</strong>
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
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Almacén</label><br>	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Proyectos" name="Proyectos" >
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
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Catálogo:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr> 


                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Otro:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" class="form-control" type="text" name="Calle" id="Calle" required="required">
                                </div> 
                            </div>
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Estado del  artículo,  material  y equipo de ingreso:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Forma de entrada:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Fecha de ingreso:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" class="form-control" type="text" name="Calle" id="Calle" required="required">
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Proveedor:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Referencia de orden de compra:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" class="form-control" type="text" name="Calle" id="Calle" required="required">
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Referencia de factura:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" class="form-control" type="text" name="Calle" id="Calle" required="required">
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Recibe en instalaciones del proveedor:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Recibe en almacén:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="P" class="control-label">Nombre de quien entrega:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" class="form-control" type="text" name="Calle" id="Calle" required="required">
                                </div> 
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td height="27" colspan="2">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                        </td>
                    </tr>
                </table>   
            </td>
        </tr>
    </table>
</form>

<?php echo form_open_multipart('controlador/Regresar'); ?>     
<table  width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=26&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>
