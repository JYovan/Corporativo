<div class="row">	
    <div class="col-md-12 margin-15-top"> 
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" onclick="onHideFunctions()"><h1 class="text-white">ENVIAR UN CORREO<span class="fa fa-chevron-up" ></span></h1></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <label for="chkTooltip"><input type="checkbox" class="" id="chkTooltip" name="chkTooltip" data-toggle="tooltip" data-placement="left" data-original-title="MOSTRAR LEYENDAS"></label>
                </div>
            </div>
            <form id="frmCorreo">
                <div class="panel-body" align="">
                    <div class="col-md-12">
                        <label for="">ASUNTO</label>
                        <input type="text" class="form-control" id="txtAsunto" name="txtAsunto" placeholder="ASUNTO">
                    </div>
                    <div class="col-md-12">
                        <label for="">MENSAJE</label>
                        <textarea type="text" class="form-control" id="txtMensaje" name="txtMensaje" rows="4" cols="20" placeholder="ESCRIBA SU MENSAJE...">
                        </textarea>
                    </div>
                    <div class="col-md-12" align="right">
                        <button type="button" class="btn btn3d btn-default fa-lg" id="btnEnviar" name="btnEnviar"
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ENVIAR">
                            <span class="fa fa-send faa-tada animated fa-2x info-icon"></span>
                        </button> 
                    </div> 
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlEnviarCorreo/';
    var btnEnviar = $("#btnEnviar"); 
    
    $(document).ready(function () {
        btnEnviar.click(function () {
            console.log('ENVIANDO...');
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });

            var frm = new FormData();
            frm.append('ASUNTO', $("#frmCorreo").find("#txtAsunto").val());
            frm.append('MENSAJE', $("#frmCorreo").find("#txtMensaje").val());
            $.ajax({
                url: master_url + 'onEnviar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'MENSAJE ENVIADO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
    });
</script>