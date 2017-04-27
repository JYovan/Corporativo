<div class="row">	 
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-info container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" ><h3 class="text-white">MI PERFIL</h3></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <label for="chkTooltip"><input type="checkbox" class="" id="chkTooltip" name="chkTooltip" data-toggle="tooltip" data-placement="left" data-original-title="MOSTRAR LEYENDAS"></label>
                </div>
            </div>
            <div class="panel-body" align="">
                <div class="col-md-2" align="center">
                    <span class="fa fa-user fa-5x"></span>
                    <h2>ADMINISTRADOR</h2>
                </div>
                <div class="col-md-5">
                    <label for="">USUARIO: <?php print $_SESSION["USUARIO_NOMBRE"]; ?></label>
                </div>
                <div class="col-md-5">
                    <label for="">CONTRASEÑA: <?php print $_SESSION["USUARIO_CONTRASENA"]; ?></label>
                </div>
                <div class="col-md-6">
                    <label for="">ULTIMO ACCESO: <span class="label label-info">22/03/2017 13:50:45 PM</span></label>
                </div>
                <div class="col-md-12" align="center"><h1>HISTORIAL DE MOVIMIENTOS</h1></div>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>MODULO</th>
                            <th>TIPO</th>
                            <th>ACCION</th>
                            <th>FECHA DEL MOVIMIENTO</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TRAMITE DE FACTURAS</td>
                            <td><span class="fa fa-plus info-icon"></span></td>
                            <td>FACTURA 2750</td>
                            <td>22/03/2017 13:53:00 PM</td> 
                        </tr> 
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>