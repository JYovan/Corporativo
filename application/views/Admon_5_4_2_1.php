<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top"></div>
    <div class="col-md-12"></div>

    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">MATERIAL, PRODUCTO O SERVICIO REGISTRADO EN CATÁLOGO</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/CambiarPrecios'); ?>   
            <div class="panel-body">
                <h1 class="text-center">ACTUALIZAR PRECIOS DEL MATERIAL, PRODUCTO O SERVICIO</h1>
                <hr>
                <div class="col-md-8 col-xs-12">
                    <label for="P" class="control-label">MATERIAL, PRODUCTO O SERVICIO: </label>
                    <?php
                    foreach ($Productos as $Producto1)
                        echo '<br>' . $Producto1->Producto . " " . $Producto1->Marca . " " . $Producto1->UnidadMedida;
                    ?> 
                </div>
                <div class="col-md-4">
                    <label for="">FECHA</label>
                    <p><?php print Date('d') . '/' . Date('m') . '/' . Date('Y') ?></p>

                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="table-responsive">
                        <table id='tblPrecioXProducto' class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>PROVEEDOR</th>
                                    <th>PRECIO ACTUAL</th> 
                                    <th>NUEVO PRECIO</th> 
                                    <th>FECHA MODIFICACIÓN(PRECIO)</th> 
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                $i = 0;
                                foreach ($Catalogo as $Catalogo1) {

                                    if ($Catalogo1->Folio == $Producto1->Folio) {
                                        if (($i % 2) == 0) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <input type="hidden"  name="ID[]" id="ID[]" value="<?php echo $Catalogo1->ID; ?>">
                                                </td>
                                                <td>
                                                    <?php
                                                    $temp = 0;
                                                    foreach ($Proveedor as $Proveedores1) {
                                                        if ($Proveedores1->ID == $Catalogo1->Proveedor) {
                                                            $temp = $Proveedores1->Proveedor;
                                                        }
                                                    }
                                                    echo "- ";
                                                    echo $temp;
                                                    ?>  
                                                </td>
                                                <td class="info">
                                                    <input  class="form-control" type="number" min="0.0001" step="0.01" name="Precio[]" id="Precio[]" value="<?php echo $Catalogo1->Precio; ?>" readonly=""> 
                                                </td>
                                                <td class="success">
                                                    <input  class="form-control" type="number" min="0.0001" step="0.01" name="PrecioN[]" id="PrecioN[]" value="" required="required" > 
                                                </td>
                                                <td>
                                                    <input type="text" value="<?php print $Catalogo1->FechaPrecio; ?>" name="FechaPrecio[]" id="FechaPrecio[]" data-date-format="dd/mm/yyyy" readonly="">
                                                </td>
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="ACTUALIZAR" >
                                                        <button class="btn btn-warning btnUpdateRow" onclick="" type="button">
                                                            <span class="fa fa-refresh"></span>
                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php } else {
                                            ?>
                                            <tr bgcolor="#b2bcb3">
                                                <td> 
                                                    <input type="hidden" step="0.01" name="ID[]" id="ID[]" value="<?php echo $Catalogo1->ID; ?>">
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach ($Proveedor as $Proveedores1) {
                                                        if ($Proveedores1->ID == $Catalogo1->Proveedor) {
                                                            $temp = $Proveedores1->Proveedor;
                                                        }
                                                    }
                                                    echo "- ";
                                                    echo $temp;
                                                    ?>   
                                                </td>
                                                <td class="info">
                                                    <input  class="form-control" type="number" min="0.0001" step="0.01" name="Precio[]" id="Precio[]" value="<?php echo $Catalogo1->Precio; ?>" readonly="" > 
                                                </td>
                                                <td class="success">
                                                    <input  class="form-control" type="number" min="0.0001" step="0.01" name="PrecioN[]" id="PrecioN[]" value="" required="required" > 
                                                </td>
                                                <td>
                                                    <input type="text" value="<?php print $Catalogo1->FechaPrecio; ?>" name="FechaPrecio[]" id="FechaPrecio[]"  data-date-format="dd/mm/yyyy" readonly="">
                                                </td>
                                                <td>
                                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="ACTUALIZAR" >
                                                        <button class="btn btn-warning btnUpdateRow" onclick="" type="button">
                                                            <span class="fa fa-refresh"></span>
                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        $i++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-11"></div>
                <div class="col-md-1">
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="ACTUALIZAR TODO" >
                        <button class="btn btn-lg btn-success disabled" type="submit"  id="user" name="user" value="<?php echo $indice; ?>"><span class="fa fa-refresh fa-lg"></span></button>
                    </span>
                </div>
            </div>
            </form>
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
        $(document).ready(function (e) {
            $(".btnUpdateRow").click(function (e) {
//                console.log($(this).closest("tr").find("input[name='ID[]']").val() + ', ' + $(this).closest("tr").find("input[name='Precio[]']").val());
//                console.log($(this).closest("tr").find("input[name='PrecioN[]']").val() + ', ' + $(this).closest("tr").find("input[name='FechaPrecio[]']").val());
//                console.log($(this).closest("tr").find("input[name='PrecioN[]']").val() != '')
//                console.log('-----------------------------------------------------------------')
                /*START TO VALIDATE PRICE*/
                var cur_input_date = $(this).closest("tr").find("input[name='FechaPrecio[]']");
                if ($(this).closest("tr").find("input[name='PrecioN[]']").val() !== '') {
//                ^ [ + - ]?[0 - 9]{1, 9}(?:\.[0 - 9]{1, 2})?$
                    if (parseFloat($(this).closest("tr").find("input[name='PrecioN[]']").val()) >= 0.001) {

                        $.ajax({
                            url: base_url + 'index.php/ctrlproveedor/onAction',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                index: 1,
                                ID: $(this).closest("tr").find("input[name='ID[]']").val(),
                                NPRECIO: $(this).closest("tr").find("input[name='PrecioN[]']").val()
                            },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                console.log(errorThrown);
                                console.log(textStatus);
                            }
                        }).done(function (data) {
//                            console.log(data)
                            var dtm = data[0];
//                            console.log(dtm)
                            if (dtm.MODIFICADO)
                            {
                                $.notify({
                                    title: '<span class="fa fa-check fa-lg"></span>',
                                    message: 'PRECIO ACTUALIZADO'
                                }, {
                                    type: 'success'
                                }, {
                                    animate: {
                                        enter: 'animated bounceIn',
                                        exit: 'animated bounceOut'
                                    }
                                });
                                cur_input_date.val(dtm.FechaPrecio);
                            } else {
                                $.notify({
                                    title: '<span class="fa fa-exclamation fa-lg"></span>',
                                    message: 'PRECIO NO ACTUALIZADO'
                                }, {
                                    type: 'danger'
                                }, {
                                    animate: {
                                        enter: 'animated bounceIn',
                                        exit: 'animated bounceOut'
                                    }
                                });
                            }
                        });
                        $(this).closest("tr").find("input[name='Precio[]']").val($(this).closest("tr").find("input[name='PrecioN[]']").val())
                        $(this).closest("tr").find("input[name='PrecioN[]']").val('')

                    } else {
                        $.notify({
                            title: '<span class="fa fa-exclamation fa-lg"></span>',
                            message: 'NO SE PUEDE PONER UN PRECIO MENOR A CERO'
                        }, {
                            type: 'danger'
                        }, {
                            animate: {
                                enter: 'animated bounceIn',
                                exit: 'animated bounceOut'
                            }
                        });
                    }
                } else {
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'NO SE PUEDE ACTUALIZAR EL "PRECIO ACTUAL" SIN UN "NUEVO PRECIO"'
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                }

                /*END OF VALIDATE PRICE*/
            });
        });
    </script>