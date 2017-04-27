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
                        <span class="fa fa-arrow-left faa-horizontal animated"></span>
                    </a>  
                </div>
                <div class="col-md-4"> 
                    <div class="text-center">REGISTRO DE CONCEPTO DE PAGO</div>
                </div>
                <div class="col-md-4 panel-title" align="right">
                    <a href = '<?php echo $page_index_menu; ?>'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <?php // echo form_open_multipart(base_url() . 'index.php/ctrlContratistas/ContratistasRConcepto'); ?>    
            <form id="frmRConceptos">
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
                        <div class="col-md-4">
                            <label for="1" class="control-label">Concepto de pago</label>
                            <select class="form-control" id="ConceptoP" name="ConceptoP"  required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($ConceptoP as $ConceptoP1) { ?> 
                                    <option value="<?php echo $ConceptoP1->id_concepto; ?>"><?php echo $ConceptoP1->dsc_concepto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="2" class="control-label">Contratista proveedor</label> 
                            <select class="form-control" id="Contratistas" name="Contratistas"  required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($Contratistas as $Contratistas1) { ?> 
                                    <option value="<?php echo $Contratistas1->ID; ?>"><?php echo $Contratistas1->Proveedor; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <label for="1" class="control-label">Precio unitario del trabajo</label> 
                            <input   type="number" step="0.01" class="form-control" name="Precio" id="Precio" required="required">
                        </div>
                        <div class="col-md-4">
                            <label for="1" class="control-label">Número total de trabajos a realizar</label> 
                            <input  type="number" step="0.01" class="form-control" name="TotalTrabajos" id="TotalTrabajos" required>
                        </div>

                        <div class="col-md-4" id="ResultadoMonto">
                            <label for="2" class="control-label">Monto total por trabajos a realizar</label> 
                            <input   type="number" step="0.01" class="form-control" name="MontoTrabajos" id="MontoTrabajos" >
                        </div>
                        <div class="col-md-4"> 
                            <label for="1" class="control-label">Fecha de inicio de trabajos</label>
                            <input type="text" class="form-control" name="Inicio" id="datepicker"  value=""  data-provide="datepicker" data-date-format="dd/mm/yyyy" required>
                        </div>
                        <div class="col-md-4">
                            <label for="2" class="control-label">Fecha de término de trabajos</label> 
                            <input  value="" data-provide="datepicker" data-date-format="dd/mm/yyyy" type="text" class="form-control" name="Termino" id="datepicker2" >
                        </div>
                        <div class="col-md-4 hide" id="ResultadoLotes">
                            <label for="">LOTES</label>
                            <select class="form-control" size="5" multiple="multiple" id="LotesM[]" name="LotesM[]" required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($Lotes as $Lotes1) { ?> 
                                    <option value="<?php echo $Lotes1->ID; ?>"><?php echo "Lote " . $Lotes1->Numero; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                        <div class="col-md-12" align="right">
                            <button id="btnAdd" type="button" class="btn btn-success btn-lg"><span class="fa fa-check fa-3x"></span></button>
                            <button id="btnAddProgress" type="button" class="btn btn-success btn-lg disabled hide"><span class="fa fa-cog fa-spin fa-3x"></span></button>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>    
</div>
<script>
//    cli.config.Precio();
//    cli.config.TotalTrabajos();
//    cli.config.Lotes()
//    cli.config.Lotes2();
    $(document).ready(function () {

        $("#TotalTrabajos").change(function () {
            var c = parseFloat($("#TotalTrabajos").val());
            var p = parseFloat($("#Precio").val());
            var rf = 0.0;
            var rf = c * p;
            $("#MontoTrabajos").val(rf)
        });

        $("#btnAdd").click(function () {
            $(this).addClass("hide");
            $("#btnAddProgress").removeClass("hide");
            var frm = $("#frmRConceptos").serialize();
            
            $.ajax({
                url: base_url + 'index.php/ctrlContratistas/ContratistasRConcepto',
                type: "POST",
                data: frm
            }).done(function (data) {
                console.log(data);
                $("#btnAdd").removeClass("hide");
                $("#btnAddProgress").addClass("hide");
                
                $.notify({
                    title: '<span class="fa fa-check fa-lg"></span>',
                    message: 'REGISTRO GUARDADO...'
                }, {
                    type: 'success'
                }, {
                    animate: {
                        enter: 'animated bounceIn',
                        exit: 'animated bounceOut'
                    }
                });
                 $("#frmRConceptos")[0].reset();
            }).fail(function (x,y,z) {
                console.log(x,y,z);
            }); 

        });

    });
</script>

