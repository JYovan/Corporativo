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

<?php echo form_open_multipart('controlador/ActProveedor'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Actualización de información de proveedores</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Selección de proveedor</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-4 col-xs-12">
                                    <label for="1" class="control-label">Proveedor</label><br>
                                </div>  
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Proveedor" name="Proveedor" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Proveedor as $Proveedor) { ?> 
                                            <option value="<?php echo $Proveedor->ID; ?>"><?php echo $Proveedor->Proveedor; ?></option>
<?php } ?>
                                    </select>
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Actualizar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=83&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
