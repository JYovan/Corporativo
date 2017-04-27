<!-- configuramos el plugin-->

<div class="row">	
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

    <?php echo form_open_multipart(base_url() . 'index.php/controlador/ActualizarPreProductos'); ?>    
    <fieldset>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">MATERIAL, PRODUCTO O SERVICIO REGISTRADOS EN CATÁLOGO</h3>
                </div>
                <div class="panel-body">
                    <fieldset>

                        <div class="col-md-12">
                            <label for="P" class="control-label">MATERIAL, PRODUCTO O SERVICIO</label><br>	
                            <input  class="form-control" type="hidden" name="Ident" id="Ident" value="1">	
                        </div>
                        <div class="col-md-12">
                            <select class="form-control" id="ID" name="ID" >
                                <option></option>
                                <?php foreach ($Productos as $Producto1) { ?> 
                                    <option value="<?php echo $Producto1->ID; ?>"><?php echo $Producto1->Producto . " " . $Producto1->Marca . " " . $Producto1->UnidadMedida; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </fieldset> 
</form>

<?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?>     
<table  width="100%">
    <tr>
        <td width="80%">
            <input  class="form-control" type="hidden" name="SegSocID" id="SegSocID" value="<?php echo "A54" ?>">
        </td>
        <td width="20%" align="right">
            <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>

