<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="container">	
    <div class="col-md-12 margin-15-top"></div>
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">MATERIAL, PRODUCTOS O SERVICIOS REGISTRADOS EN CATÁLOGO</h3>
            </div>
            <?php echo form_open_multipart(base_url().'index.php/controlador/ActualizarPreProductos'); ?>    
            <div class="panel-body"> 
                <fieldset>
                    <div class="col-md-12 col-xs-12">
                        <label for="P" class="control-label">Proveedor</label><br>	
                        <input  class="form-control" type="hidden" name="Ident" id="Ident" value="2">	
                        <select class="form-control" id="ID" name="ID" >
                            <option value="">Selecciona</option>
                            <?php foreach ($Proveedor as $Proveedor1) { ?> 
                                <option value="<?php echo $Proveedor1->ID; ?>"><?php echo $Proveedor1->Proveedor; ?></option>
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
            </form>
        </div>
    </div> 
    <?php echo form_open_multipart(base_url().'index.php/controlador/Admon'); ?>     
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

