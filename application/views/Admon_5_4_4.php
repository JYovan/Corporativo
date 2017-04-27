<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">AGREGAR MATERIAL, PRODUCTO O SERVICIO AL CATÁLOGO</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlProductos/RegistroProductos2'); ?> 
            <div class="panel-body">
                <fieldset> 
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-4 col-xs-12">
                            <label for="P" class="control-label">MATERIAL, PRODUCTO O SERVICIO</label><br>		
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <select class="form-control" id="ID" name="ID" >
                                <option value="">Selecciona</option>
                                <?php foreach ($Productos as $Producto1) { ?> 
                                    <option value="<?php echo $Producto1->Folio; ?>"><?php echo $Producto1->Producto . " " . $Producto1->Marca . " " . $Producto1->UnidadMedida; ?></option>
                                <?php } ?>
                            </select>
                        </div> 		
                    </div> 
                    <div class="col-md-12 col-xs-12" id="ActMaterial">
                        <div class="col-md-12 col-xs-12">
                            <label for="P" class="control-label">CATEGORIA </label> 
                            <select class="form-control" id="Etiqueta" name="Etiqueta" required="required" >
                                <option value="">Selecciona</option>
                                <?php foreach ($Etiqueta as $Etiqueta1) { ?> 
                                    <option value="<?php echo $Etiqueta1->id_conceptos; ?>"><?php echo $Etiqueta1->dsc_conceptos; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-3 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                                <label for="P" class="control-label">MATERIAL/PRODUCTO/SERVICIO</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input  class="form-control" type="text" name="Producto" id="Producto" required="required" >
                            </div> 
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                                <label for="P" class="control-label">Marca/Modelo</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input  class="form-control" type="text" name="Marca" id="Marca">
                            </div> 
                        </div> 
                        <div class="col-md-3 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                                <label for="P" class="control-label">Unidad o medida</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input  class="form-control" type="text" name="UnidadMedida" id="UnidadMedida" required="required" >
                            </div> 
                        </div> 
                        <div class="col-md-3 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                                <label for="P" class="control-label">Proveedor(ACTUAL)</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input type="text" class="hide" id="IDPRO" name="VProveedores" readonly="">
                                <input type="text" class="form-control" id="VProveedores" name="VProveedores" readonly="">
                                 
                            </div> 
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                                <label for="P" class="control-label">Proveedores</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control" size="5" multiple="multiple" id="Proveedores[]" name="Proveedores[]" required="required">
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Proveedor as $Proveedor1) { ?> 
                                        <option value="<?php echo $Proveedor1->ID; ?>"><?php echo $Proveedor1->Proveedor; ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Actualizar</button>		
                    </div>
                </fieldset>
            </div>
            </form>
        </div>    
    </div>
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
<script>
    cli.config.ActMaterial();
    $(document).ready(function () {
        $("select#ID").change(function () {
            if ($("select#ID").val() !== '') {
            console.log('ok')
                $.ajax({
                    url: base_url + 'index.php/ctrlProductos/ActMaterial',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: $("#ID").val()
                    },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
                }).done(function (data) {
                    console.log(data.ETIQUETA);
                    if (data !== undefined && data !== null) {
                        $("#Etiqueta").val(data.ETIQUETA);
                        $("#Producto").val(data.PRODUCTO);
                        $("#Marca").val(data.MARCA);
                        $("#UnidadMedida").val(data.UNIDAD);
                        $("#VProveedores").val(data.PROVEEDORES);
//                        $("#VProveedores").val(data.PROVEEDOR);
                        console.log('CON DATOS');
                        console.log(data);
                    } else {
                        console.log('SIN DATOS');
                        console.log(data);
                    }
                });
            } else {
                console.log($("#ID").val());
            }
        });
    });
</script>
