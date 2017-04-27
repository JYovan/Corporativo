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

<?php echo form_open_multipart('controlador3/Planeacion4'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Recuento de inventario de almacén de productos textiles y prendas de vestir </strong>
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
                                    <label for="1" class="control-label">No. de inventario</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="Ninventario" id="Ninventario"   required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Fecha</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input    type="text" class="form-control" name="Fecha" id="datepicker" >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">No. de almacén:</label><br>
                                </div>	
                                <div class="col-md-12 col-xs-12"  id="Pais2">
                                    <input type="number" step="0.01" class="form-control" name="Nalmacen" id="Nalmacen" >
                                </div>	
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Denominación del almacén:</label><br>	
                                </div>	
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" name="Denominacion" id="Denominacion" >
                                </div>	
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
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>