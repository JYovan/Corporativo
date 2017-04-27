<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
$page_index_back = base_url() . "index.php/controlador/Admon?SegSocID=A54";
$page_index_forward = base_url() . "index.php/controlador/Admon?SegSocID=A54";
$page_index_menu = base_url() . "index.php/controlador/Admon?SegSocID=A54";
?>
<div class="row"> 
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row"> 
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo $page_index_back; ?>'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center">AGREGAR MATERIAL, PRODUCTO O SERVICIO AL CATÁLOGO</div>
                </div> 
                <div class="col-md-2 panel-title" align="right">
                    <a href = '<?php echo $page_index_menu; ?>'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/RegistroProductos'); ?>    

            <div class="panel-body">
                <fieldset>
                    <div class="col-md-4">  
                        <label for="P" class="control-label">CATEGORÍA DE MATERIALES, PRODUCTOS Y SERVICIOS</label> 
                        <select class="form-control" id="Etiqueta" name="Etiqueta" required="required" >
                            <option value="">Selecciona</option>
                            <?php foreach ($Etiqueta as $Etiqueta1) { ?> 
                                <option value="<?php echo $Etiqueta1->id_conceptos; ?>"><?php echo $Etiqueta1->dsc_conceptos; ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                    <div class="col-md-8"> 
                        <br>
                        <label for="P" class="control-label">MATERIAL/PRODUCTO/SERVICIO</label> 
                        <input  class="form-control" type="text" name="Producto" id="Producto" required="required" >
                    </div>  
                    <div class="col-md-3"> 
                        <label for="P" class="control-label">Marca/Modelo</label> 
                        <input  class="form-control" type="text" name="Marca" id="Marca">
                    </div>  
                    <div class="col-md-3"> 
                        <label for="P" class="control-label">Unidad o medida</label> 
                        <input  class="form-control" type="text" name="UnidadMedida" id="UnidadMedida" required="required" >
                    </div>  
                    <div class="col-md-6"> 
                        <label for="P" class="control-label">Proveedores</label> 
                        <select class="form-control" size="5" multiple="multiple" id="Proveedores[]" name="Proveedores[]" required="required">
                            <option value="">Selecciona</option>
                            <?php foreach ($Proveedor as $Proveedor1) { ?> 
                                <option value="<?php echo $Proveedor1->ID; ?>"><?php echo $Proveedor1->Proveedor; ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                    <div class="col-sm-12" align="right">
                        <br>
                        <button class="btn btn-lg btn-primary btn-lg" type="submit"  id="user" name="user" value="<?php echo $indice; ?>"><span class="fa fa-check fa-3x"></span></button>		
                    </div>
                    <div class="col-sm-12">
                        <h1 class="text-center">ÚLTIMO INGRESO</h1>
                        <hr>
                    </div>
                    <?php
                    $a = 0;
                    $b = 0;
                    $c = 0;
                    foreach ($Productos as $Productos1) {
                        $a = $Productos1->Producto;
                        $b = $Productos1->UnidadMedida;
                        $c = $Productos1->Proveedores;
                    }
                    ?> 
                    <div class="col-md-4 ">
                        <?php echo $a; ?>
                    </div> 
                    <div class="col-md-4 ">
                        <?php echo $b; ?>
                    </div> 
                    <div class="col-md-4 ">
                        <?php
                        $temp = 0;
                        $proveedores3 = array();
                        $proveedores3 = explode(',', $c);
                        $numero = count($proveedores3);
                        for ($i = 0; $i < $numero; $i++) {
                            foreach ($Proveedor as $Proveedores1) {
                                if ($Proveedores1->ID == $proveedores3[$i]) {
                                    $temp = $Proveedores1->Proveedor;
                                }
                            }
                            echo "- ";
                            echo $temp;
                            echo "</br>";
                        }
                        ?>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-12">

                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>