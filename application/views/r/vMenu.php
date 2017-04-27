<!-- configuramos el plugin-->
<?php
?>
<div class="row">	
    <div class="col-md-12"></div>
    <div class="col-md-12">
        <div class="col-md-4"><h3>
                <?php
                if (isset($_SESSION["ID"])) {
                    $indice = $_SESSION["ID"];
                }
                ?></h3></div> 
        <div class="col-md-8" align="right">

            <script>
                $(document).ready(function (e) {
                    $("#btnSalir").on('click', function (evt) {
                        SystemExit();
                    });
<?php
if ($_SESSION["firstime"] == 0) {
    $_SESSION["firstime"] = 1;
    ?>
                        onStartUP();
                        $.notify({
                            title: '<span class="fa fa-hand-o-right fa-lg"></span>',
                            message: 'BIENVENIDO'
                        }, {
                            type: 'success'
                        }, {
                            animate: {
                                enter: 'animated fadeIn',
                                exit: 'animated bounceOut'
                            }
                        });
    <?php
} else {
    ?>
                        $.notify({
                            title: '<span class="fa fa-hand-o-right fa-lg"></span>',
                            message: 'BIENVENIDO'
                        }, {
                            type: 'success'
                        }, {
                            animate: {
                                enter: 'animated fadeIn',
                                exit: 'animated bounceOut'
                            }
                        });
<?php } ?>
                });
            </script>
        </div>
    </div>  
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="col-md-12">
        <div class="panel panel-primary container-fluid"> 
            <div class="panel-heading row">
                <div class="col-md-4 panel-title">
                    <a  href='#' onclick="SystemExit()">
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-4"> 
                    <div class="text-center">MEN&Uacute;</div>
                </div>
                <div class="col-md-4 panel-title" align="right">
                    <input type="search" id="txtSearch" name="txtSearch" value="" placeholder="BÚSQUEDA RÁPIDA..." class="form-control"> 
                    <script>
                        $(document).ready(function () {
                                     
                            var search = $("#txtSearch");
                           search.focus();
                            search.keyup(function () {
                                if ($(this).val() !== '') {
                                    $("#vContentMenu a").addClass("hide");
                                    var modules = $("#vContentMenu a").find("h4");
                                    $.each(modules, function (k, v) {
                                        var legend = "";
                                        legend = ($(v)[0].innerText);
                                        if (legend.includes(search.val().toUpperCase())) {
                                            $(v).parent().parent().parent().parent().removeClass("hide");
                                        }
                                    });
                                } else {
                                    $("#vContentMenu a").removeClass("hide");
                                }
                            });
                        });
                    </script>
                </div>
            </div>
            <div id="vContentMenu" align="center" class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                        <a href="<?php echo base_url(); ?>index.php/ctrlMapas/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary ">
                                    <span class="fa fa-globe fa-5x "></span>
                                    <div class="caption">
                                        <h4>MAPA</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" data-toggle="modal" data-target="#mdlControlDeAcceso">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-clock-o fa-5x"></span>
                                    <div class="caption">
                                        <h4>CONTROL DE ACCESO</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlEmpresa/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-institution fa-5x"></span>
                                    <div class="caption">
                                        <h4>EMPRESAS</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-home fa-5x"></span>
                                    <div class="caption">
                                        <h4>BIENES INMUEBLES</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlBienesInmuebles">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-home fa-5x"></span>
                                    <div class="caption">
                                        <h4>BIENES INMUEBLES X</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

<!--                        <a href="<?php // echo base_url(); ?>index.php/controlador2/Menu?ID=25&i=<?php // echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-ellipsis-h fa-5x"></span>
                                    <div class="caption">
                                        <h4>DESARROLLOS INMOBILIARIOS</h4>
                                    </div>
                                </div>
                            </div>
                        </a>-->

                        <a href="<?php echo base_url(); ?>index.php/ctrlDesarrollosInmobiliarios/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-ellipsis-h fa-5x"></span>
                                    <div class="caption">
                                        <h4>DESARROLLOS INMOBILIARIOS X</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=20&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-star fa-5x"></span>
                                    <div class="caption">
                                        <h4>TIPOS DE VIVIENDAS</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=22&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-clipboard fa-5x"></span>
                                    <div class="caption">
                                        <h4>TRAMITES</h4> 
                                    </div>
                                </div>
                            </div> 
                        </a> 

                        <a href="<?php echo base_url(); ?>index.php/ctrlProveedors/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-truck fa-5x"></span>
                                    <div class="caption">
                                        <h4>PROVEEDORES</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlProductos/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-puzzle-piece fa-5x"></span>
                                    <div class="caption">
                                        <h4>PRODUCTOS</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlCompras/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-shopping-cart fa-5x"></span>
                                    <div class="caption">
                                        <h4>COMPRAS Y SUMINISTROS</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=26&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-archive fa-5x"></span>
                                    <div class="caption">
                                        <h4>SUMINISTRO DE MATERIALES</h4>
                                    </div>
                                </div>
                            </div>
                        </a>  

                        <a href="<?php echo base_url(); ?>index.php/ctrlAlmacen">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-archive fa-5x"></span>
                                    <div class="caption">
                                        <h4>SUMINISTRO DE MATERIALES X</h4>
                                    </div>
                                </div>
                            </div>
                        </a>  

                        <a href="<?php echo base_url(); ?>index.php/ctrlContratistas">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-crosshairs fa-5x"></span>
                                    <div class="caption">
                                        <h4>CONTROL DE OBRA</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

<!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-exchange fa-5x"></span>
                                    <div class="caption">
                                        <h4>TRANSMISIÓN Y DISPERSIÓN</h4>
                                    </div>
                                </div>
                            </div>
                        </a>-->


                        <a href="<?php echo base_url(); ?>index.php/ctrlTransmisiones">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-exchange fa-5x"></span>
                                    <div class="caption">
                                        <h4>TRANSMISIÓN Y DISPERSIÓN X</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

<!--                        <a href="<?php echo base_url(); ?>index.php/ctrlDispersiones">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-arrows fa-5x"></span>
                                    <div class="caption">
                                        <h4>DISPERSIÓN</h4>
                                    </div>
                                </div>
                            </div>
                        </a>-->

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-expand fa-5x"></span>
                                    <div class="caption">
                                        <h4>COMERCIALIZACIÓN</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlComportamientoDesarrollo">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-random fa-5x"></span>
                                    <div class="caption">
                                        <h4>COMPORTAMIENTO DESARROLLOS</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" data-toggle="modal" data-target="#mdlPostVenta">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-cubes fa-5x"></span>
                                    <div class="caption">
                                        <h4>PROMOCIÓN / POST-VENTA</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=2&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-newspaper-o fa-5x"></span>
                                    <div class="caption">
                                        <h4>DOCUMENTACIÓN Y TRÁMITES</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=3&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-files-o fa-5x"></span>
                                    <div class="caption">
                                        <h4>TRAMITES REFERENCIADOS</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlTramiteFactura/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-folder-open fa-5x"></span>
                                    <div class="caption">
                                        <h4>TRAMITES DE FACTURAS</h4>
                                    </div>
                                </div>
                            </div>
                        </a> 


                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=14&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-group fa-5x"></span>
                                    <div class="caption">
                                        <h4>PAGO A TERCEROS</h4>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlTerceros/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-group fa-5x"></span>
                                    <div class="caption">
                                        <h4>PAGO A TERCEROS x</h4>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlCuentas/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-credit-card-alt fa-5x"></span>
                                    <div class="caption">
                                        <h4>CUENTAS BANCARIAS</h4>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlCobranza/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-usd fa-5x"></span>
                                    <div class="caption">
                                        <h4>COBRANZA</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

<!--                        <a href="<?php // echo base_url();     ?>index.php/controlador/Menu?ID=24&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-phone fa-5x"></span>
                                    <div class="caption">
                                        <h4>PRECIO DEL CEMENTO</h4>
                                    </div>
                                </div>
                            </div>
                        </a>-->

                        <a href="<?php echo base_url(); ?>index.php/ctrlCemento">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-phone fa-5x"></span>
                                    <div class="caption">
                                        <h4>PRECIO DEL CEMENTO X</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=8&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-cogs fa-5x"></span>
                                    <div class="caption">
                                        <h4>ADMINISTRACIÓN</h4>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controladorCalculo/Menu?ID=6&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-calculator fa-5x"></span>
                                    <div class="caption">
                                        <h4>CALCULO DE IMPUESTOS</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=11&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-bar-chart fa-5x"></span>
                                    <div class="caption">
                                        <h4>GRÁFICAS</h4> 
                                    </div>
                                </div>
                            </div>
                        </a> 

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=4&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-money fa-5x"></span>
                                    <div class="caption">
                                        <h4 class="">CONTABILIDAD</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

<!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=5&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-hospital-o fa-5x"></span>
                                    <div class="caption">
                                        <h4 class="">SEGURIDAD SOCIAL</h4>

                                    </div>
                                </div>
                            </div>
                        </a>-->

                        <a href="<?php echo base_url(); ?>index.php/ctrlSeguridadSocial/">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-hospital-o fa-5x"></span>
                                    <div class="caption">
                                        <h4 class="">SEGURIDAD SOCIAL X</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-chain fa-5x"></span>
                                    <div class="caption">
                                        <h4>VINCULACIÓN</h4>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-child fa-5x"></span>
                                    <div class="caption">
                                        <h4>METAS</h4>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=12&i=<?php echo $indice ?>">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-recycle fa-5x"></span>
                                        <div class="caption">
                                            <h4>RECURSOS</h4>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=13&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-bus fa-5x"></span>
                                    <div class="caption">
                                        <h4>UNIDADES DE TRANSPORTE</h4> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=15&i=<?php echo $indice ?>">
                            <div class="col-sm-3 col-md-3 hover">
                                <div class="thumbnail text-center text-primary">
                                    <span class="fa fa-user fa-5x"></span>
                                    <div class="caption">
                                        <h4>PERSONAL</h4>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=16&i=<?php echo $indice ?>">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-laptop fa-5x"></span>
                                        <div class="caption">
                                            <h4>INFRAESTRUCTURA TECNOLÓGICA</h4>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=18&i=<?php echo $indice ?>">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-edit fa-5x"></span>
                                        <div class="caption">
                                            <h4>ENTREVISTAS</h4>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!--<a href="#" data-toggle="modal" data-target="#mdlTramitesFacturas">-->

                            <!--<a href="#" data-toggle="modal" data-target="#mdlTramitesFacturas">-->
                            <a href="<?php echo base_url(); ?>index.php/ctrlPrestamos/">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-money fa-5x"></span>
                                        <div class="caption">
                                            <h4>PRESTAMOS</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo base_url(); ?>index.php/ctrlContratos/">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-wpforms fa-5x"></span>
                                        <div class="caption">
                                            <h4>CONTRATOS</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#mdlMensajeria">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-paper-plane fa-5x"></span>
                                        <div class="caption">
                                            <h4>ENVIAR UN CORREO</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo base_url(); ?>index.php/ctrlArchivos/">
                                <div class="col-sm-3 col-md-3 hover">
                                    <div class="thumbnail text-center text-primary">
                                        <span class="fa fa-file fa-5x"></span>
                                        <div class="caption">
                                            <h4>ARCHIVOS</h4>
                                        </div>
                                    </div>
                                </div> 
                            </a>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> 
    </div>
</div>


<div id="mdlControlDeAcceso" class="modal animated rollIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="frmControlAcceso">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="myModalLabel">CONTROL DE ACCESO</h2>
                </div>
                <div class="modal-body">
                    <div id="rFechaYHora" class="text-center"></div>
                    <div class="col-md-12" height="500">
                        <video id="video" width="320" height="240" autoplay></video>
                        <canvas id="canvas" width="320" height="240"></canvas>
                    </div>
                    <div class="col-md-12">
                        <button id="snap" type="button" class="btn btn3d btn-lg btn-indigo">CHECAR</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                </div>
            </div>
        </form>
    </div>
</div> 


<div id="mdlControlDeAcceso" class="modal animated rollIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="frmControlAcceso">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="myModalLabel">CONTROL DE ACCESO</h2>
                </div>
                <div class="modal-body">
                    <div id="rFechaYHora" class="text-center"></div>
                    <div class="col-md-12" height="500">
                        <video id="video" width="320" height="240" autoplay></video>
                        <canvas id="canvas" width="320" height="240"></canvas>
                    </div>
                    <div class="col-md-12">
                        <button id="snap" type="button" class="btn btn3d btn-lg btn-indigo">CHECAR</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                </div>
            </div>
        </form>
    </div>
</div> 

<script>
    $(document).ready(function () {
        $("#mdlControlDeAcceso").on('show.bs.modal', function (e) {
            getRelojChecador();
        });

        $("#mdlControlDeAcceso").on('hidden.bs.modal', function (e) {
            video.pause();
            video.src = null;
            video.src = "";
        });

    });
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var video = document.getElementById('video');
    var mediaConfig = {video: true};
    var errBack = function (e) {
        console.log('An error has occurred!', e)
    };
    function getRelojChecador() {

        // Grab elements, create settings, etc.


        // Put video listeners into place
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia(mediaConfig).then(function (stream) {
                video.src = window.URL.createObjectURL(stream);
                console.log('VIDEO LOG: ' + video);
                video.play();
            });
        }

        /* Legacy code below! */
        else if (navigator.getUserMedia) { // Standard
            navigator.getUserMedia(mediaConfig, function (stream) {
                video.src = stream;
                video.play();
            }, errBack);
        } else if (navigator.webkitGetUserMedia) { // WebKit-prefixed
            navigator.webkitGetUserMedia(mediaConfig, function (stream) {
                video.src = window.webkitURL.createObjectURL(stream);
                console.log(video);
                video.play();
            }, errBack);
        } else if (navigator.mozGetUserMedia) { // Mozilla-prefixed
            navigator.mozGetUserMedia(mediaConfig, function (stream) {
                video.src = window.URL.createObjectURL(stream);
                video.play();
            }, errBack);
        }

        // Trigger photo take
        document.getElementById('snap').addEventListener('click', function () {
            context.drawImage(video, 0, 0, 320, 240);
            $("#rFechaYHora").html('<div class="col-md-12">FECHA Y HORA DE REGISTRO</div><h2>' + new Date().toLocaleString() + '</h2>');
        });
    }


</script>
<?php
$this->load->view('layout/modals/modalPostVenta', true);
$this->load->view('layout/modals/modalTramitesFacturas', true);
$this->load->view('layout/modals/mdlNotificarProblema', true);


