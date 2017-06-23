<?php
if (isset($_SESSION["ID"])) {
    $indice = $_SESSION["ID"];
}
?>

<div class="row">

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="col-md-12">
        <div class="panel panel-success container-fluid">
            <div class="panel-heading row">
                <div class="col-md-4 panel-title">
                    <a  href='#' onclick="SystemExit()">
                        <span class="fa fa-arrow-left"></span>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="text-center">MEN&Uacute;</div>
                </div>
            </div>
            <div id="vContentMenu" align="center" class="panel-body">
                <div class="row">
                    <!--<div class="col-md-12">-->
                    <?php
                    $PERMISOS = $_SESSION["PERMISOS"];

                    if ($PERMISOS[0]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlMapas/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn  text-center ">
                                    <span class="fa fa-globe fa-5x "></span>
                                    <div class="caption">
                                        <h5>MAPA</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    if ($PERMISOS[1]->Ver === '1') {
                        ?>
                        <a>
                            <div class="col-md-4 hover" onclick="onControlDeAcceso()">
                                <div class="thumbnail animated zoomIn text-center">
                                    <span class="fa fa-clock-o fa-5x  "></span>
                                    <div class="caption">
                                        <h5 class="">CONTROL DE ACCESO</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    if ($PERMISOS[2]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlEmpresa/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-institution fa-5x   "></span>
                                    <div class="caption">
                                        <h5>EMPRESAS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    if ($PERMISOS[3]->Ver === '1') {
                        ?>
    <!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-home fa-5x  "></span>
                                    <div class="caption">
                                        <h5>BIENES INMUEBLES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>-->
                        <a href="<?php echo base_url(); ?>index.php/ctrlBienesInmuebles">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-home fa-5x   "></span>
                                    <div class="caption">
                                        <h5>BIENES INMUEBLES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--</div>END SECTION-->

                    <!--<div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[4]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlDesarrollosInmobiliarios/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-leaf fa-5x  "></span>
                                    <div class="caption">
                                        <h5>DESARROLLOS INMOBILIARIOS </h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[5]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=20&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-star fa-5x  "></span>
                                    <div class="caption">
                                        <h5>TIPOS DE VIVIENDAS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[6]->Ver === '1') {
                        ?>
                                                                                            <!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=22&i=<?php echo $indice ?>">
                                                                                                                        <div class="col-md-4 hover">
                                                                                                                            <div class="thumbnail animated zoomIn   text-center">
                                                                                                                                <span class="fa fa-clipboard fa-5x  "></span>
                                                                                                                                <div class="caption">
                                                                                                                                    <h5>TRAMITES</h5>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </a>-->
                        <a href="<?php echo base_url(); ?>index.php/ctrlTramites/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-clipboard fa-5x  "></span>
                                    <div class="caption">
                                        <h5>TRAMITES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    if ($PERMISOS[7]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlProveedors/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-truck fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PROVEEDORES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--                    </div>

                                        <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[8]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlProductos/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-puzzle-piece fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PRODUCTOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[9]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlCompras/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-shopping-cart fa-5x "></span>
                                    <div class="caption">
                                        <h5>COMPRAS Y SUMINISTROS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[10]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlAlmacen">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-archive fa-5x  "></span>
                                    <div class="caption">
                                        <h5>SUMINISTRO DE MATERIALES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[11]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlContratistas">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-crosshairs fa-5x   "></span>
                                    <div class="caption">
                                        <h5>CONTROL DE OBRA</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <?php
                    if ($PERMISOS[12]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlTransmisiones">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-exchange fa-5x   "></span>
                                    <div class="caption">
                                        <h5>TRANSMISIÓN Y DISPERSIÓN</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[13]->Ver === '1') {
                        ?>

                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-expand fa-5x   "></span>
                                    <div class="caption">
                                        <h5>COMERCIALIZACIÓN</h5>
                                    </div>
                                </div>
                            </div>
                        </a>


                        <a href="<?php echo base_url(); ?>index.php/ctrlComercializacion">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-expand fa-5x   "></span>
                                    <div class="caption">
                                        <h5>COMERCIALIZACIÓN X</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[14]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlComportamientoDesarrollo">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-random fa-5x   "></span>
                                    <div class="caption">
                                        <h5>COMPORTAMIENTO DESARROLLOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[15]->Ver === '1') {
                        ?>
                        <a href="#" data-toggle="modal" data-target="#mdlPostVenta">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-cubes fa-5x   "></span>
                                    <div class="caption">
                                        <h5>PROMOCIÓN / POST-VENTA</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--</div>-->
                    <?php
                    if ($PERMISOS[16]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlDocumentacionYTtramites/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-newspaper-o fa-5x  "></span>
                                    <div class="caption">
                                        <h5>DOCUMENTACIÓN Y TRÁMITES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
            <!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=2&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-newspaper-o fa-5x  "></span>
                                    <div class="caption">
                                        <h5>DOCUMENTACIÓN Y TRÁMITES</h5>
                                    </div>
                                </div>
                            </div>
                        </a>-->

                        <?php
                    }
                    if ($PERMISOS[17]->Ver === '1') {
                        ?>
                                                                                            <!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=3&i=<?php echo $indice ?>">
                                                                                                                        <div class="col-md-4 hover">
                                                                                                                            <div class="thumbnail animated zoomIn   text-center">
                                                                                                                                <span class="fa fa-files-o fa-5x  "></span>
                                                                                                                                <div class="caption">
                                                                                                                                    <h5>TRAMITES REFERENCIADOS</h5>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </a>-->

                        <?php
                    }
                    if ($PERMISOS[18]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlTramiteFactura/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-folder-open fa-5x faa-vertical "></span>
                                    <div class="caption">
                                        <h5>TRAMITE DE FACTURAS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[19]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=14&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-group fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PAGO A TERCEROS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>index.php/ctrlTerceros/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-group fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PAGO A TERCEROS X</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--        </div>

                                <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[20]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlCuentas/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-credit-card-alt fa-5x  "></span>
                                    <div class="caption">
                                        <h5>CUENTAS BANCARIAS</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[21]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlCobranza/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-usd fa-5x  "></span>
                                    <div class="caption">
                                        <h5>COBRANZA</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[22]->Ver === '1') {
                        ?>

                        <a href="<?php echo base_url(); ?>index.php/ctrlCemento">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-phone fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PRECIO DEL CEMENTO</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    if ($PERMISOS[23]->Ver === '1') {
                        ?>
            <!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=8&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-cogs fa-5x  "></span>
                                    <div class="caption">
                                        <h5>ADMINISTRACIÓN</h5>
                                    </div>
                                </div>
                            </div>
                        </a>  -->
                        <a href="<?php echo base_url(); ?>index.php/ctrlInmobiliario/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-industry fa-5x   "></span>
                                    <div class="caption">
                                        <h5>INMOBILIARIO</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    <!--        </div>

                                <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[40]->Ver === '1') {
                        ?>

                        <a href="<?php echo base_url(); ?>index.php/ctrlMobiliario/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-bed fa-5x   "></span>
                                    <div class="caption">
                                        <h5>MOBILIARIO</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    if ($PERMISOS[24]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controladorCalculo/Menu?ID=6&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-calculator fa-5x    "></span>
                                    <div class="caption">
                                        <h5>CALCULO DE IMPUESTOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[25]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=11&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-bar-chart fa-5x    "></span>
                                    <div class="caption">
                                        <h5>GRÁFICAS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[26]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=4&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-money fa-5x    "></span>
                                    <div class="caption">
                                        <h5 class="">CONTABILIDAD</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--        </div>
                            <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[27]->Ver === '1') {
                        ?>

                        <a href="<?php echo base_url(); ?>index.php/ctrlSeguridadSocial/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-user-md fa-5x   "></span>
                                    <div class="caption">
                                        <h5 class="">SEGURIDAD SOCIAL</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[28]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-chain fa-5x   "></span>
                                    <div class="caption">
                                        <h5>VINCULACIÓN</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[29]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-child fa-5x   "></span>
                                    <div class="caption">
                                        <h5>METAS</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[30]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=12&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-recycle fa-5x   "></span>
                                    <div class="caption">
                                        <h5>RECURSOS</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--        </div>
                            <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[31]->Ver === '1') {
                        ?>
                                                                                                        <!--                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=13&i=<?php echo $indice ?>">
                                                                                                                                <div class="col-md-4 hover">
                                                                                                                                    <div class="thumbnail animated zoomIn   text-center">
                                                                                                                                        <span class="fa fa-bus fa-5x  "></span>
                                                                                                                                        <div class="caption">
                                                                                                                                            <h5>UNIDADES DE TRANSPORTE</h5>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </a>-->
                        <a href="<?php echo base_url(); ?>index.php/ctrlTransporte/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-bus fa-5x  "></span>
                                    <div class="caption">
                                        <h5>UNIDADES DE TRANSPORTE</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[32]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=15&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-user fa-5x   "></span>
                                    <div class="caption">
                                        <h5>PERSONAL</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[33]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=16&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-laptop fa-5x   "></span>
                                    <div class="caption">
                                        <h5>INFRAESTRUCTURA TECNOLÓGICA</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[34]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/controlador/Menu?ID=18&i=<?php echo $indice ?>">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-edit fa-5x   "></span>
                                    <div class="caption">
                                        <h5>ENTREVISTAS</h5>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--<a href="#" data-toggle="modal" data-target="#mdlTramitesFacturas">-->

                        <!--<a href="#" data-toggle="modal" data-target="#mdlTramitesFacturas">-->

                    <?php }
                    ?>
                    <!--        </div>
                            <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[35]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlPrestamos/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-handshake-o fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PRESTAMOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[36]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlContratos/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-book fa-5x   "></span>
                                    <div class="caption">
                                        <h5>CONTRATOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[37]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlEnviarCorreo/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-paper-plane fa-5x  "></span>
                                    <div class="caption">
                                        <h5>ENVIAR UN CORREO</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    if ($PERMISOS[38]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlArchivos/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-file fa-5x  "></span>
                                    <div class="caption">
                                        <h5>ARCHIVOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php }
                    ?>
                    <!--        </div>
                            <div class="col-md-12">-->
                    <?php
                    if ($PERMISOS[39]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlPermisos/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-lock fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PERMISOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <?php
                    }
                    ?>


                    <?php
                    if ($PERMISOS[41]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/CtrlProyectos/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-lightbulb-o fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PROYECTOS</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    ?>


                    <?php
                    if ($PERMISOS[41]->Ver === '1') {
                        ?>
                        <a href="<?php echo base_url(); ?>index.php/ctrlPuntoDeVenta/">
                            <div class="col-md-4 hover">
                                <div class="thumbnail animated zoomIn   text-center">
                                    <span class="fa fa-shopping-basket fa-5x  "></span>
                                    <div class="caption">
                                        <h5>PUNTO DE VENTA</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    <a onclick=" SystemExit()">
                        <div class="col-md-4 hover">
                            <div class="thumbnail animated zoomIn   text-center">
                                <span class="fa fa-sign-out fa-5x  "></span>
                                <div class="caption">
                                    <h5>SALIR</h5>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>


<div id="mdlControlDeAcceso" class="modal  rollIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="frmControlAcceso">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="myModalLabel">CONTROL DE ACCESO</h2>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12" align="center">
                            <h1>
                                <?php
//                            var_dump($_SESSION["USUARIO"][0]);
                                $USER_DATA = $_SESSION["USUARIO"][0];
                                print $USER_DATA["nombre"] . " " . $USER_DATA["apaterno"] . " " . $USER_DATA["amaterno"];
                                ?></h1>
                        </div>
                        <div class="col-md-12 hide">
                            <input type="text" id="Nombre" name="Nombre" value="<?php print $USER_DATA["nombre"] . " " . $USER_DATA["apaterno"] . " " . $USER_DATA["amaterno"] ?>" class="form-control">
                        </div>
                        <div id="rFechaYHora" class="text-center"></div>
                        <div class="col-md-4">
                            <label for="">USUARIO</label>
                            <select id="IdUsuario" name="IdUsuario" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">ENTRADA/SALIDA</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option></option>
                                <option>ENTRADA</option>
                                <option>SALIDA</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">OBSERVACIONES</label>
                            <textarea class="form-control" type="text" id="Observaciones" name="Observaciones" rows="4" cols="20" placeholder="TUVE UN ACCIDENTE, FUI AL BANCO, ETC." >
                            </textarea>
                        </div>
                        <div class="col-md-2" align="right">
                            <button id="btnChecar" name="btnChecar" type="button" class="btn btn3d btn-lg btn-default fa-lg">
                                <span class="fa fa-check fa-5x kingblue-icon"></span><p>CHECAR</p>
                            </button>
                        </div>
                        <div class="col-md-12" align="center">
                            <h1>MIS ENTRADAS Y SALIDAS</h1>
                        </div>
                        <div class="col-md-12" id="RelojChecadorXUsuarioID">
                        </div>
                        <?php
                        if ($PERMISOS[1]->Ver === '1' && $PERMISOS[1]->Reportes === '1') {
                            ?>
                            <div class="col-md-12">
                                <fieldset>
                                    <div class="col-md-2">
                                        <button id="btnReiniciarFiltroDeAccesos" name="btnReiniciarFiltroDeAccesos" class="btn btn-default fa-lg"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title=""  type="button"
                                                data-original-title="REINICIAR"><span class="fa fa-trash fa-2x kingblue-icon"></span></button>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">FECHA INICIAL</label>
                                        <input type="text" id="FechaInicial" name="FechaInicial" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">FECHA FINAL</label>
                                        <input type="text" id="FechaFinal" name="FechaFinal" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">USUARIO</label>
                                        <select id="Usuario" name="Usuario" class="form-control">

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button id="btnBuscarAccesos" name="btnBuscarAccesos" class="btn btn-default fa-lg"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title=""  type="button"
                                                data-original-title="BUSCAR ACCESOS"><span class="fa fa-search fa-2x kingblue-icon"></span></button>
                                        <button id="btnGenerarReporteDeAccesos" name="btnGenerarReporteDeAccesos" class="btn btn-default fa-lg"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title=""  type="button"
                                                data-original-title="GENERAR REPORTE DE ACCESOS"><span class="fa fa-check fa-2x kingblue-icon"></span></button>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-12" align="center">
                                <h1>TODOS LAS ENTRADAS Y SALIDAS</h1>
                            </div>
                            <div class="col-md-12" id="RelojChecador">
                            </div>
                        <?php }
                        ?>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-5x  "></span></button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    var master_url = "<?php print base_url() . "index.php/ctrlsesion/" ?>";
    var mdlControlDeAcceso = $("#mdlControlDeAcceso");
    var btnStop = mdlControlDeAcceso.find("#btnStop");
    var btnPlay = mdlControlDeAcceso.find("#btnPlay");
    var btnChecar = mdlControlDeAcceso.find("#btnChecar");

    var record = false;
    var search = $("#txtSearch");
    var USER_DATA = <?php print json_encode($_SESSION["USUARIO"][0]); ?>;

    var USER_NAME = "<?php print $USER_DATA["nombre"] . " " . $USER_DATA["apaterno"] . " " . $USER_DATA["amaterno"]; ?>";

    var btnBuscarAccesos = mdlControlDeAcceso.find("#btnBuscarAccesos");
    var btnGenerarReporteDeAccesos = mdlControlDeAcceso.find("#btnGenerarReporteDeAccesos");
    var btnReiniciarFiltroDeAccesos = mdlControlDeAcceso.find("#btnReiniciarFiltroDeAccesos");

    $(document).ready(function() {

        btnReiniciarFiltroDeAccesos.click(function() {
            mdlControlDeAcceso.find("#FechaInicial").val("");
            mdlControlDeAcceso.find("#FechaFinal").val("");
            mdlControlDeAcceso.find("#Usuario").val("");
            mdlControlDeAcceso.find("#Usuario").select2("val", "");
            getEntradasYSalidas();
        });

        btnGenerarReporteDeAccesos.click(function() {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onGenerarReporteDeAccesos',
                type: "POST",
                data: {
                    USUARIO: (mdlControlDeAcceso.find("#Usuario").val() !== '') ? mdlControlDeAcceso.find("#Usuario").val() : '',
                    INICIO: (mdlControlDeAcceso.find("#FechaInicial").val() !== '') ? mdlControlDeAcceso.find("#FechaInicial").val() : '',
                    FIN: (mdlControlDeAcceso.find("#FechaFinal").val() !== '') ? mdlControlDeAcceso.find("#FechaFinal").val() : ''
                }
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                window.open(data, '_blank');
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        getUsuariosXReloj();

        btnBuscarAccesos.click(function() {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'BUSCANDO...'
            });
            temp = 0;
            $.ajax({
                url: master_url + 'onBuscarAccesosXFechas',
                type: "POST",
                dataType: "JSON",
                data: {
                    USUARIO: (mdlControlDeAcceso.find("#Usuario").val() !== '') ? mdlControlDeAcceso.find("#Usuario").val() : '',
                    INICIO: (mdlControlDeAcceso.find("#FechaInicial").val() !== '') ? mdlControlDeAcceso.find("#FechaInicial").val() : '',
                    FIN: (mdlControlDeAcceso.find("#FechaFinal").val() !== '') ? mdlControlDeAcceso.find("#FechaFinal").val() : ''
                }
            }).done(function(data, x, jq) {
                console.log(data);
                mdlControlDeAcceso.find("#RelojChecador").html(getTable('tblRelojChecador', data));
                mdlControlDeAcceso.find('#tblRelojChecador tfoot th').each(function() {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });
                var tblSelected = mdlControlDeAcceso.find('#tblRelojChecador').DataTable(tableOptions);
                mdlControlDeAcceso.find('#tblRelojChecador tbody').on('click', 'tr', function() {
                    mdlControlDeAcceso.find("#tblRelojChecador").find("tr").removeClass("success");
                    mdlControlDeAcceso.find("#tblRelojChecador").find("tr").removeClass("warning");
//                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                    console.log(dtm);
                    console.log(dtm[0]);
                    console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                    temp = parseInt(dtm[0]);
                });
                // Apply the search
                tblSelected.columns().every(function() {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        });

        btnChecar.click(function() {
            if (mdlControlDeAcceso.find("#IdUsuario").val() !== '' && mdlControlDeAcceso.find("#Tipo").val() !== '') {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                var frm = new FormData(mdlControlDeAcceso.find("#frmControlAcceso")[0]);
                frm.append('IdUsuarioT', mdlControlDeAcceso.find("#IdUsuario option:selected").text());
                console.log(frm);
                $.ajax({
                    url: master_url + 'onAddEntradaSalida',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {
                    console.log(data, x, jq);
                    mdlControlDeAcceso.find("#frmControlAcceso")[0].reset();
                    mdlControlDeAcceso.find("select").select2("val", "");
                    mdlControlDeAcceso.find("textarea").val("");
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'GRACIAS', 'success');
                    getEntradasYSalidas();
                    getEntradasYSalidasXUsuarioID();
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', 'DEBES DE ESPECIFICAR QUIEN ERES Y SI ESTAS "ENTRANDO" O "SALIENDO"', 'danger');
            }
        });



        $("#btnSalir").on('click', function(evt) {
            SystemExit();
        });

        search.focus();
        search.keyup(function() {
            if ($(this).val() !== '') {
                $("#vContentMenu a").addClass("hide");
                var modules = $("#vContentMenu a").find("h5");
                $.each(modules, function(k, v) {
                    var legend = "";
                    legend = ($(v)[0].innerText);
                    if (legend.includes(search.val().toUpperCase())) {
                        $(v).parent().parent().parent().parent().removeClass("hide");
                    }
                });
            } else {
                $("#vContentMenu a").removeClass("hide");
            }
            console.log($(this).val())
        });

        btnPlay.click(function() {
            record = true;
        });
        btnStop.click(function() {
            record = false;
        });
        mdlControlDeAcceso.on('show.bs.modal', function(e) {
            mdlControlDeAcceso.find("#Observaciones").val("");
//            onRecord();
        });

        $("#mdlControlDeAcceso").on('hidden.bs.modal', function(e) {
            video.pause();
            video.src = null;
            video.src = "";
        });

    });

    function onSearch() {
        if ($(this).val() !== '') {
            $("#vContentMenu a").addClass("hide");
            var modules = $("#vContentMenu a").find("h5");
            $.each(modules, function(k, v) {
                var legend = "";
                legend = ($(v)[0].innerText);
                if (legend.includes(search.val().toUpperCase())) {
                    $(v).parent().parent().parent().parent().removeClass("hide");
                }
            });
        } else {
            $("#vContentMenu a").removeClass("hide");
        }
        console.log($(this).val())
    }

    function getUsuariosXReloj() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getUsuariosXReloj',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></options>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.USUARIO + '</option>';
            });
            mdlControlDeAcceso.find("#IdUsuario").html(options);
            mdlControlDeAcceso.find("#Usuario").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getEntradasYSalidas() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getEntradasYSalidas',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            console.log(data);
            mdlControlDeAcceso.find("#RelojChecador").html(getTable('tblRelojChecador', data));
            mdlControlDeAcceso.find('#tblRelojChecador tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = mdlControlDeAcceso.find('#tblRelojChecador').DataTable(tableOptions);
            mdlControlDeAcceso.find('#tblRelojChecador tbody').on('click', 'tr', function() {
                mdlControlDeAcceso.find("#tblRelojChecador").find("tr").removeClass("success");
                mdlControlDeAcceso.find("#tblRelojChecador").find("tr").removeClass("warning");
//                console.log(this)
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }


    function getEntradasYSalidasXUsuarioID() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getEntradasYSalidasXUsuarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: <?php print $_SESSION["USUARIO_ID"] ?>
            }
        }).done(function(data, x, jq) {
            console.log(data);
            mdlControlDeAcceso.find("#RelojChecadorXUsuarioID").html(getTable('tblRelojChecadorXUsuarioID', data));
            mdlControlDeAcceso.find('#tblRelojChecadorXUsuarioID tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = mdlControlDeAcceso.find('#tblRelojChecadorXUsuarioID').DataTable(tableOptions);
            mdlControlDeAcceso.find('#tblRelojChecadorXUsuarioID tbody').on('click', 'tr', function() {
                mdlControlDeAcceso.find("#tblRelojChecadorXUsuarioID").find("tr").removeClass("success");
                mdlControlDeAcceso.find("#tblRelojChecadorXUsuarioID").find("tr").removeClass("warning");
//                console.log(this)
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onControlDeAcceso() {
        mdlControlDeAcceso.find("#Observaciones").val("");
        mdlControlDeAcceso.modal('show');
        console.log(USER_DATA);
        $(this).find("#Nombre").val(USER_DATA.nombre + " " + USER_DATA.apaterno + " " + USER_DATA.amaterno);
        $(this).find("#Observaciones").val("");
//            getRelojChecador();
        record = true;
        getEntradasYSalidas();
        getEntradasYSalidasXUsuarioID();
    }



    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var video = document.getElementById('video');
    var mediaConfig = {video: true};
    var errBack = function(e) {
        console.log('An error has occurred!', e)
    };

    function getRelojChecador() {

        // Grab elements, create settings, etc.
        // Put video listeners into place
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia(mediaConfig).then(function(stream) {
                video.src = window.URL.createObjectURL(stream);
                console.log('VIDEO LOG: ' + video);
                video.play();
            });
        }

        /* Legacy code below! */
        else if (navigator.getUserMedia) { // Standard
            navigator.getUserMedia(mediaConfig, function(stream) {
                video.src = stream;
                video.play();
            }, errBack);
        } else if (navigator.webkitGetUserMedia) { // WebKit-prefixed
            navigator.webkitGetUserMedia(mediaConfig, function(stream) {
                video.src = window.webkitURL.createObjectURL(stream);
                console.log(video);
                video.play();
            }, errBack);
        } else if (navigator.mozGetUserMedia) { // Mozilla-prefixed
            navigator.mozGetUserMedia(mediaConfig, function(stream) {
                video.src = window.URL.createObjectURL(stream);
                video.play();
            }, errBack);
        }

        // Trigger photo take
        document.getElementById('snap').addEventListener('click', function() {
            context.drawImage(video, 0, 0, 320, 240);
            $("#rFechaYHora").html('<div class="col-md-12">FECHA Y HORA DE REGISTRO</div><h2>' + new Date().toLocaleString() + '</h2>');
        });
    }
    function onRecord() {
        if (record)
        {
            context.drawImage(video, 0, 0, 320, 240);
            $("#rFechaYHora").html('<div class="col-md-12">FECHA Y HORA DE REGISTRO</div><h2>' + new Date().toLocaleString() + '</h2>');
            record = true;
            setTimeout(onRecord, 50);
        }
    }
</script>
<?php
$this->load->view('layout/modals/modalPostVenta', true);
$this->load->view('layout/modals/modalTramitesFacturas', true);
$this->load->view('layout/modals/mdlNotificarProblema', true);
