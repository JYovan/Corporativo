<!-- configuramos el plugin-->

<div class="row">	
    <div class="col-md-12">
        <?php
        $indice = $_SESSION["ID"];
        ?> </div>
    <div class="col-md-12"> 
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Orden de cobro</h3>
            </div>
            <form id="frmCobranzaOrden">
                <div class="panel-body"> 
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">NOMBRE DEL CLIENTE</label>
                            <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                    <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">Concepto de cobro</label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="ConceptoCobro" id="ConceptoCobro" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">Tarifa</label> 
                            <select class="form-control" id="Id_tarifa" name="Id_tarifa"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($Tarifa as $Tarifa1) { ?> 
                                    <option value="<?php echo $Tarifa1->id_tarifa; ?>"><?php echo $Tarifa1->dsc_tarifa; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO A PAGAR</label>
                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control"  type="number" step="0.01"  name="MontoPagar" id="MontoPagar" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE COBRO</label>
                            <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text"  value="" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="FechaCobro" id="FechaCobro" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE DE QUIEN PRESTÓ EL SERVICIO</label>
                            <select class="form-control" id="IdResponsableServicio" name="IdResponsableServicio"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $temporal) { ?> 
                                    <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE DE QUIEN EMITE LA ORDEN DE COBRO</label>
                            <select class="form-control" id="IdResponsableOrden" name="IdResponsableOrden"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $temporal) { ?> 
                                    <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                <?php } ?>
                            </select>
                            <br>
                        </div> 
                        <div class="col-md-12" align="right">
                            <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" value="<?php echo $indice; ?>" ><span class="fa fa-check fa-3x"></span></button>
                        </div>
                        <div class="col-md-12 hide" align="right">
                            <button class="btn btn-lg btn-success disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>    
        </div>
    </div>
    <table width="100%">
        <tr>
            <td width="80%"> 
            </td>
        </tr>
        <tr>
            <td width="20%" align="right">  
                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
            </td>
        </tr>
    </table>
</div>

<script>
    $(document).ready(function () {
        $("#btnGuardar").click(function () {
            console.log("Procesando...");
            var frm = $("#frmCobranzaOrden").serialize();
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/OrdenCobro',
                type: "POST",
                data: frm
            }).done(function (data) {
                console.log(data);
                $("#msgResult").html(data);
                if (parseInt(data) === 1) {
                    $.notify({
                        title: '<span class="fa fa-check fa-lg"></span>',
                        message: 'EXITO! ORDEN GUARDADA'
                    }, {
                        type: 'success'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                } else {
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'ERROR! ORDEN NO GUARDADA'
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                }
            }).fail(function () {

            });

        });
    });
</script>
