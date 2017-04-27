<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>  
<div class="row">
    <div class="col-md-12 margin-15-top">	
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Cotizaciones</h3>
            </div>
            <?php
            echo form_open_multipart('controlador/xxx');
            ?>
            <div class="panel-body">
                <fieldset> 
                    <div class="col-md-12" align="center">
                        <button class="btn btn-primary btn-lg disabled" type="button" id="btnGuardar" name="btnGuardar" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  ><span class="fa fa-save fa-2x"></span></button>
                    </div>
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            PROYECTO</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-xs-12">
                                            <label for="P" class="control-label">Proyecto</label>
                                            <select class="form-control" id="Proyectos" name="Proyectos" >
                                                <option value=""></option>
                                                <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                                    <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                                                <?php } ?>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            PRODUCTOS</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div id="pnlOpciones" class="hide">
                                            <fieldset>
                                                <div class="col-md-12 col-xs-12">
                                                    <label for="P" class="control-label">Anotaciones</label>
                                                    <input  style="text-transform:uppercase" class="form-control" type="text" name="Anotaciones" id="Anotaciones" required="required">
                                                </div> 
                                                <div class="col-md-4 col-xs-12">
                                                    <div class="col-md-12 col-xs-6">
                                                        <label for="Numero" class="control-label">Número de cotización:</label><br>	
                                                    </div>
                                                    <div class="col-md-12 col-xs-6">
                                                        <?php
                                                        $N = 0;
                                                        foreach ($Cotizaciones as $Cotizaciones1) {
                                                            $N = $Cotizaciones1->ID;
                                                        }
                                                        if (empty($Cotizaciones1)) {
                                                            $N = 0;
                                                        }
                                                        ?>
                                                        <input  style="text-transform:uppercase" value="<?php echo str_pad($N + 1, 6, "0", STR_PAD_LEFT); ?>" class="form-control" type="text" name="Numero" id="Numero"  required>	
                                                    </div>    
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <div class="col-md-12 col-xs-6">
                                                        Fecha:
                                                    </div>
                                                    <div class="col-md-12 col-xs-6">
                                                        <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="Fecha" id="datepicker" required>
                                                        </br>
                                                    </div>    
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <div class="col-md-12 col-xs-6">
                                                        Proveedor(s):
                                                    </div>
                                                    <div class="col-md-12 col-xs-6">
                                                        <select class="form-control" id="Proveedores" name="Proveedores" required="required">
                                                            <option value=""></option>
                                                            <?php foreach ($Proveedor as $Proveedor1) { ?> 
                                                                <option value="<?php echo $Proveedor1->ID; ?>"><?php echo $Proveedor1->Proveedor; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        </br>
                                                    </div>    
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <label for="P" class="control-label">CATEGORIA</label>
                                                    <select class="form-control" id="Etiqueta" name="Etiqueta" >
                                                        <option value=""></option>
                                                        <?php foreach ($Etiqueta as $Etiqueta1) { ?> 
                                                            <option value="<?php echo $Etiqueta1->id_conceptos; ?>"><?php echo $Etiqueta1->dsc_conceptos; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>  
                                                <div class="col-md-4 col-xs-12"  id="ID_Producto">
                                                    <label for="P" class="control-label">Productos o materiales</label>	
                                                    <select class="form-control" id="Producto" name="Producto" required="required" onchange="onValidateData()">
                                                        <option value=""></option> 
                                                    </select>
                                                </div>
                                                <div id="ProductLoader" class="col-md-4 col-xs-12 text-center hide" align="center">
                                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                                    <span class="sr-only">Espere...</span>
                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <label for="P" class="control-label">Cantidad</label>
                                                    <input  style="text-transform:uppercase" class="form-control" type="number" name="Cantidad" id="Cantidad" required="required" onkeyup=""  onblur="" onchange="" min="1" max="999" value="1">
                                                </div>
                                                <div id="dpbtnAdd" class="hide">
                                                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> <span class="sr-only"></span>
                                                </div>
                                                <div id="dbtnAdd" class="col-md-1 col-xs-12">
                                                    <br><button class="btn btn-success btn-lg btnAddRow" type="button" id="Agregar" name="Agregar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar"  ><span class="fa fa-plus fa-2x"></span></button>
                                                </div>
                                                <div class="col-md-12 col-xs-12" id="Cotizacion">
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover tblCProductos ">
                                                        <thead>
                                                            <tr class="primary">
                                                                <th class="text-center col-md-4">PROVEEDOR</th>
                                                                <th class="text-center col-md-4">PRODUCTO</th>
                                                                <th class="text-center">UNIDAD</th>
                                                                <th class="text-center">CANTIDAD</th>
                                                                <th class="text-center col-md-2">PRECIO.U</th>
                                                                <th class="text-center col-md-4">IMPORTE</th>
                                                                <th class="text-center hide">IMPORTE F</th>
                                                                <th class="text-center"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody> 
                                                        </tbody> 
                                                    </table>
                                                </div>
                                                <div class="col-md-12">
                                                    <div  id="thTOTAL"></div>
                                                </div>
                                            </fieldset>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>
</div>
<?php echo form_open_multipart(base_url() . 'index.php/controlador/Regresar'); ?>     
<table  width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=19&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>
<script>
//        cli.config.AgregaMaterial();
//        cli.config.ChangeProducto();


</script>
<script src="<?php print base_url() . 'js/controllers/ctrlCompras.js'; ?>"></script>