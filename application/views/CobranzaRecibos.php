<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	 
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">EMISIÓN DE RECIBOS DE PAGO</h3>
            </div>

            <form id="frmReciboAGenerar">
                <div class="panel-body">
                    <fieldset>
                        <div class="col-md-12">
                            <label for="">EMPRESAS / CLIENTES</label> 
                            <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                    <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                                <?php } ?>
                            </select>
                            <input  type="hidden" name="user" id="user" value="<?php echo $indice; ?>" >
                        </div>
                        <div id="Resultado" class=" col-md-12 hide" >

                        </div>
                        <div id="dLoader" class="col-md-12 hide">
                            <h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>
                        </div>
                        <div id="ResultadoRecibo" class="col-md-12 hide"> 

                            <div class="col-md-12">
                                <input class="form-control hide" type="text" name="CobranzaID" id="CobranzaID"  value=" "> 
                            </div>

                            <div class="col-md-4  hide" align="center">
                                <div class="well">
                                    <img src="<?php echo base_url(); ?>media/logo.png" width="80%" height="auto" > 
                                    <p class="span6">LOMA DEL PEDREGAL #417</p>
                                    <p class="span6">COL. LOMAS DEL CAMPESTRE</p>
                                    <p class="span6">LEÓN GTO. MÉXICO. </p>
                                    <p class="span6">TEL. +52 (477) 779 72 21</p>
                                    <p class="span6">+52 (477) 779 72 27</p>
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <label for="NoRecibo" class="control-label">No. de Recibo:</label> 
                                        <input  style="text-transform:uppercase; color:#F30" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ReciboNoRecibo" id="ReciboNoRecibo" value=" ">
                            </div>     
                            <div class="col-md-4 ">
                                <label for="ReciboFechaPago" class="control-label">Fecha de pago:</label> 
                                <input  style="text-transform:uppercase" onkeyup="" data-provide="datepicker" data-date-format="dd/mm/yyyy" class="form-control" type="text" name="ReciboFechaPago" id="ReciboFechaPago" value=" " required>
                            </div>

                            <div class="col-md-4 ">
                                <label for="ReciboNombre" class="control-label">Recibí de:</label>
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ReciboNombre" id="ReciboNombre" value=" ">		
                            </div>
                            <div class="col-md-4 ">
                                <label for="MontoTotal" class="control-label">Monto a cobrar:</label> 
                                <input  style="text-transform:uppercase" onkeyup="" class="form-control" readonly="" type="text" name="MontoTotal" id="MontoTotal" value=" ">		
                            </div>
                            <div class="col-md-8 ">
                                <label for="ReciboHonorarios" class="control-label">Por concepto de: </label> 
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ReciboHonorarios" id="ReciboHonorarios" value=" ">		
                            </div>
                            <div class="col-md-4 ">
                                <label for="ReciboCantidad" class="control-label">La cantidad de:</label> 
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="ReciboCantidad" id="ReciboCantidad" value="" onblur="onChangeAmount()" onkeyup="onChangeAmount()">		
                            </div>
                            <div class="col-md-3">
                                <br>
                                <span class="label label-default">TOTAL</span>
                                <span class="label label-primary tt">$ 0.00</span>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <span class="label label-default">RESTANTE</span>
                                <span class="label label-success rtt">$ 0.00</span>
                            </div>
                            <div id="ModificarRecibo" class="col-md-4 hide">
                                <label for="ReciboTotal" class="control-label">TOTAL</label> 
                                <input class="form-control" type="text" name="ReciboTotal" id="ReciboTotal" value=" ">
                            </div>
                            <div class=" col-md-2 margin-15-top">
                                <button class="btn btn-lg btn-success btn-block disabled" type="button"  id="generar" name="generar"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                                    <span class="fa fa-check fa-3x"></span></button> 
                            </div> 
                        </div> 
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <table width="100%">    
        <tr>
            <td width="80%">    
            </td>
            <td width="20%" align="right">    
                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
            </td>
        </tr>
    </table>
</div>
<script>
//    cli.config.PagosParaRecibo();
//    cli.config.LlenarRecibo();
//    cli.config.PaguitosRecibo();
    $(document).ready(function () {

        $("#ID_cliente").change(function (e) {
            $("#Resultado").removeClass("hide");
            $("#Resultado").html('<h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>');
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/ResultadoRecibo',
                type: "POST",
                data: {
                    ID: $("#ID_cliente").val()
                }
            }).done(function (data) {
                $("#Resultado").html(data);
            });
        });

        $("#generar").click(function () {
            var formdata = $("#frmReciboAGenerar").serialize();
            $.ajax({
                url: base_url + 'index.php/ctrlCobranza/Recibo',
                type: "POST",
                data: formdata
            }).done(function (data) {
                console.log(data);
                
            }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest.responseText);
                console.log(errorThrown);
                console.log(textStatus);
            });
        });

    });
    function onSelectCobroPendiente(cp) {
        $("#dLoader").removeClass("hide");
//        $("#ResultadoRecibo").html('<h1 class="text-center"><span class="fa fa-circle-o faa-burst animated"></span> Espere...</h1>');

        $.ajax({
            url: base_url + 'index.php/ctrlCobranza/LlenadoRecibo',
            type: "POST",
            dataType: "JSON",
            data: {
                CobroPendiente: cp
            }
        }).done(function (data) {
            console.log(data)
            $("#dLoader").addClass("hide");
            $("#ResultadoRecibo").removeClass("hide"); 
            $("#ReciboNoRecibo").val(data.COBRANZAID);
            $("#CobranzaIDR").val(data.COBRANZAID);
            $("#ReciboNombre").val(data.RECIBI);
            $("#MontoTotal").val(data.RESTO);
            $("#ReciboCantidad").val(data.RESTO);
            $("#ReciboHonorarios").val(data.CONCEPTO);
            $("#dTotal").val(data.RTOTAL);
            $("#ReciboTotal").val(data.TOTAL);
            $("#ReciboFechaPago").val(data.FECHA);
        });
    }
    function onChangeAmount() {
        var stt = 0.000;
        stt = parseFloat($("#ReciboCantidad").val());
        var tt = 0.000;
        tt = parseFloat($("#MontoTotal").val());
        $(".tt").text(" $ " + $.number(stt, 2, '.', ' ,'));
        var rtt = parseFloat($("#MontoTotal").val()) - stt;
        console.log(rtt === 0, rtt < 0, rtt > 0)
        if (stt > tt || stt === 0) {
            $.notify({
                title: '<span class="fa fa-exclamation fa-lg"></span>',
                message: 'LA CANTIDAD INGRESADA NO PUEDE SER MAYOR AL MONTO O CERO'
            }, {
                type: 'warning'
            }, {
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOut'
                }
            });
            $("#generar").addClass("disabled");
        } else {
            if (rtt >= 0 || stt <= tt) {
                $(".rtt").text(" $ " + $.number(rtt, 2, '.', ' ,'));
                $("#generar").removeClass("disabled");
            } else {
                $(".rtt").text(" $ " + $.number(rtt, 2, '.', ' ,'));
                $("#generar").addClass("disabled");
            }
            if (rtt === 0) {
                $(".rtt").removeClass("label-danger");
                $(".rtt").addClass("label-success");
            } else {
                $(".rtt").removeClass("label-success");
                $(".rtt").addClass("label-danger");
            }
        }
    }
</script>
