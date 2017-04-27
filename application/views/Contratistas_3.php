<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
$page_index_back = base_url() . "index.php/ctrlContratistas";
$page_index_forward = base_url() . "index.php/ctrlContratistas";
$page_index_menu = base_url() . "index.php/ctrlContratistas";
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row"> 
                <div class="col-md-4 panel-title">
                    <a  href = '<?php echo $page_index_back; ?>'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-4"> 
                    <div class="text-center">REGISTRO DE PAGO</div>
                </div>
                <div class="col-md-4 panel-title" align="right">
                    <a href = '<?php echo $page_index_menu; ?>'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <?php // echo form_open_multipart(base_url() . 'index.php/controlador/ContratistaPagos'); ?>    
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-4">
                        <label for="1" class="control-label">Desarrollo</label>
                        <select class="form-control" id="Ndesarrollo" name="Ndesarrollo" >
                            <option value="0">Selecciona</option>
                            <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4" id="ResultadoDesarrollo">
                        <label for="2" class="control-label">Concepto de pago</label>
                        <select class="form-control" id="ConceptoP" name="ConceptoP" >
                            <option value="0">Selecciona</option>
                        </select>
                    </div>
                    <div id="ConceptoProgress" class="col-md-4 text-center hide" align="center">
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    </div>
                    <div class="col-md-4"id="ResultadoConcepto">	 
                        <label for="2" class="control-label">Contratista proveedor</label> 
                        <select class="form-control" id="Contratistas" name="Contratistas" >
                            <option value="0">Selecciona</option>
                        </select>
                    </div>  
                    <div id="ResultadoConceptoProgress" class="col-md-4 hide" align="center">
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    </div>          
                    <div id="ResultadoContratistaProgress" class="col-md-12 hide" align="center">
                        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    </div>          
                    <div id="ResultadoContratista" class="hide">

                        <div class="col-md-4" id="ResultadoInfo">	 
                            <br>
                            <label for="1" class="control-label">Precio unitario del trabajo</label>
                            <input  style="text-transform:uppercase" onchange="onChangeTrabajo()" type="number" step="0.01" class="form-control" name="Precio" id="Precio" required>
                        </div>

                        <div class="col-md-4">
                            <label for="1" class="control-label">Número total de trabajos a realizar</label>
                            <input style="text-transform:uppercase"  onchange="onChangeTrabajo()"  type="number" step="0.01" class="form-control" name="TotalTrabajos" id="TotalTrabajos" required>
                        </div>
                        <div class="col-md-4 ">	 
                            <br>
                            <label for="2" class="control-label">Monto(T)</label> 
                            <input style="text-transform:uppercase" type="text" class="form-control" name="MontoTrabajos" id="MontoTrabajos" >
                        </div> 

                        <div class="col-md-6 ">	 
                            <label for="1" class="control-label">Número total de trabajos realizados hasta la fecha</label> 
                            <input style="text-transform:uppercase" onchange="onChangeMount('Precio', 'TrabajosRealizados', 'MontoTrabajosRealizados')" type="number" step="0.01" class="form-control" name="TrabajosRealizados" id="TrabajosRealizados" required>
                        </div> 
                        <div class="col-md-6 ">		 
                            <br>
                            <label for="2" class="control-label">Monto (TR)</label> 
                            <input style="text-transform:uppercase" type="number" step="0.01" class="form-control" name="MontoTrabajosRealizados" id="MontoTrabajosRealizados" >
                        </div> 
                        <div class="col-md-6 ">	 
                            <label for="1" class="control-label">Número total de trabajos pendientes</label> 
                            <input style="text-transform:uppercase" onchange="onChangeMount('Precio', 'TrabajosPendientes', 'MontoTrabajosPendientes')" type="number" step="0.01" class="form-control" name="TrabajosPendientes" id="TrabajosPendientes" required>
                        </div> 
                        <div class="col-md-6 ">	 
                            <label for="2" class="control-label">Monto (TP)</label> 
                            <input style="text-transform:uppercase" onkeyup=""  type="number" step="0.01" class="form-control" name="MontoTrabajosPendientes" id="MontoTrabajosPendientes" >
                        </div> 
                        <div class="col-md-6 ">	 
                            <label for="1" class="control-label">Número de trabajos a pagar</label> 
                            <input style="text-transform:uppercase" onchange="onChangeMount('PrecioPagar', 'TrabajosaPagar', 'MontoPago')" type="number" step="0.01" class="form-control" name="TrabajosaPagar" id="TrabajosaPagar" required>
                        </div> 
                        <div class="col-md-6 ">	 
                            <label for="2" class="control-label">Precio al que se pagarán</label> 
                            <input style="text-transform:uppercase"  onchange="onChangeMount('PrecioPagar', 'TrabajosaPagar', 'MontoPago')"  type="number" step="0.01" class="form-control" name="PrecioPagar" id="PrecioPagar" >
                        </div> 
                        <div class="col-md-6 ">	 
                            <label for="1" class="control-label">Monto del pago</label> 
                            <input style="text-transform:uppercase" onkeyup="" type="number" step="0.01" class="form-control" name="MontoPago" id="MontoPago" required>
                        </div> 
                        <div class="col-md-6 ">	 
                            <label for="2" class="control-label">Fecha del pago</label> 
                            <input   type="text" class="form-control" name="FechaPago" id="datepicker"  data-provide="datepicker" data-date-format="dd/mm/yyyy"  value="<?php echo date("d/m/Y") ?>">
                        </div> 
                        <div class="col-md-6 ">	
                            <label for="1" class="control-label">Forma de pago</label>   
                            <select class="form-control" id="FormaPago" name="FormaPago" >
                                <option value="1">Efectivo</option>
                                <?php foreach ($FormaPago as $FormaPago1) { ?> 
                                    <option value="<?php echo $FormaPago1->id_FormaPago; ?>"><?php echo $FormaPago1->dsc_FormaPago; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 ">	 
                            <label for="2" class="control-label">Tipo de comprobante de pago</label>
                            <select class="form-control" id="Comprobante" name="Comprobante" >
                                <option value="1">Firma en bitácora</option>
                                <?php foreach ($TipoComprobante as $TipoComprobante1) { ?> 
                                    <option value="<?php echo $TipoComprobante1->id_TipoComprobante; ?>"><?php echo $TipoComprobante1->dsc_TipoComprobante; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6">	 
                            <label for="1" class="control-label">Fecha de inicio de trabajos</label>
                            <input type="text" class="form-control" name="Inicio" id="datepicker2"   data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-6 ">	
                            <label for="2" class="control-label">Fecha de término de trabajos</label>
                            <input  type="text" value="" class="form-control" name="Termino" id="datepicker3"  data-provide="datepicker" data-date-format="dd/mm/yyyy" />
                        </div>
                        <div class="col-md-6 ">	 
                            <label for="2" class="control-label">Nombre de quien realiza el pago</label> 
                            <select class="form-control" id="Paga" name="Paga" >
                                <option value="4">ROGELIO ALEJANDRO RAMÍREZ URBINA</option>
                                <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                    <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
                                <?php } ?>
                            </select> 
                        </div>
                        <div class="col-md-12">	
                            <label for="2" class="control-label">Observaciones</label>
                            <input style="text-transform:uppercase" onkeyup=""  type="text" class="form-control" name="Observaciones" id="Observaciones">
                        </div>
                        <div class=" col-sm-12" align="right">
                            <button class="btn btn-lg btn-success" type="button" id="user" name="user" value="<?php echo $indice; ?>" ><span class="fa fa-check fa-3x"></span></button>
                        </div>
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div> 
</div>
<script>
//    cli.config.Concepto();
//    cli.config.Contratista();
//    cli.config.Pagos();
    cli.config.TrabajosNvos();
    cli.config.TrabajosNvos2();
    $(document).ready(function () {
        $('#Ndesarrollo').change(function (e) {
            console.log($('#Ndesarrollo').get(0).value);
            $("#ResultadoDesarrollo").addClass("hide");
            $("#ConceptoProgress").removeClass("hide");
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/getContratistasDes',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: $('#Ndesarrollo').get(0).value,
                }
            }).done(function (data) {
                console.log(data);
                $("#ConceptoProgress").addClass("hide");
                $("#ResultadoDesarrollo").removeClass("hide");
                var options = "<option value=''></option>";

                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.CONCEPTO + '</option>';
                });
                $("#ConceptoP").html(options);

            }).fail(function () {
                console.log(arguments);
            });
        });
        $("#ConceptoP").change(function () {
            console.log("Fetching...");
            $("#ResultadoConcepto").addClass("hide");
            $("#ResultadoConceptoProgress").removeClass("hide");
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/getContratistasConcepto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: $("#Ndesarrollo").val(),
                    CONCEPTO: $("#ConceptoP").val()
                }
            }).done(function (data, x, jq) {
                $("#ResultadoConcepto").removeClass("hide");
                $("#ResultadoConceptoProgress").addClass("hide");
                var options = "<option value=''></option>";

                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
                });
                $("#Contratistas").html(options);
            }).fail(function (x, y, z) {
                console.log(x.responseText);
            });
        });
        $("#Contratistas").change(function () {
            console.log('ok')
            $("#ResultadoContratistaProgress").removeClass("hide");
            $("#ResultadoContratista").addClass("hide");

//            $("#ResultadoDesarrollo").addClass("hide");
//            $("#ConceptoProgress").removeClass("hide");
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/getInformacionContratista',
                type: "POST",
                dataType: "JSON",
                data: {
                    Ndesarrollo: $('#Ndesarrollo').get(0).value,
                    ConceptoP: $('#ConceptoP').get(0).value,
                    Contratistas: $('#Contratistas').get(0).value
                }
            }).done(function (data) {
                var dtm = data[0];
                $("#ResultadoContratista").removeClass("hide");
                $("#ResultadoContratistaProgress").addClass("hide");
                $("#TotalTrabajos").val(dtm.TotalTrabajos);
                $("#Precio").val(dtm.Precio);
                $("#TrabajosRealizados").val(dtm.TrabajosRealizados);
                $("#MontoTrabajosRealizados").val(dtm.MontoTrabajosRealizados);
                $("#TrabajosPendientes").val(parseFloat(dtm.TotalTrabajos) - parseFloat(dtm.TrabajosRealizados));
                $("#MontoTrabajosPendientes").val($("#TrabajosPendientes").val() * ($("#Precio").val() === 0 ? 1 : $("#Precio").val()));
                $("#TrabajosPagar").val(dtm.TrabajosPagar);
                $("#PrecioPagar").val(dtm.PrecioaPagar);
                $("#MontoPago").val(dtm.MontoaPagar);
                $("#FechaPago").val(dtm.FechaPago);
                $("#datepicker2").val(dtm.Inicio);
                $("#datepicker3").val(dtm.Termino);
                $("#MontoTrabajos").val(dtm.MontoTrabajos);
                console.log('LINEA 253');
                console.log(data);
            }).fail(function () {
                console.log(arguments);
            });

        });
    });
    function onChangeTrabajo() {
        var p = $("#Precio").val();
        var c = $("#TotalTrabajos").val();
        $("#MontoTrabajos").val($.number((p * c), 3, '.', ', '))
    }
    function onChangeMount(c1, c2, r) {
        var p = $("#" + c1).val();
        var c = $("#" + c2).val();
        $("#" + r).val((p * c));
    }
</script>