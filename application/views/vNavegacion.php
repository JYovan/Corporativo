<?php
if (isset($_SESSION["ID"])) {
    ?>

    <div id="wrapper">
        <div id="sidebar-wrapper" align="center">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php print base_url(); ?>">
                        <img src="<?php print base_url() ?>media/logo.png" class="img-responsive" width="60%">
                    </a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/ctrlCobranza/">COBRANZA</a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/ctrlCompras/">COMPRAS Y SUMINISTROS</a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/ctrlContratos/">CONTRATOS</a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/controlador/Menu?ID=14&i=35">PAGO A TERCEROS</a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/ctrlPrestamos/">PRESTAMOS</a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/ctrlTramiteFactura/">TRAMITE DE FACTURAS</a>
                </li>
                <li>
                    <a href="<?php print base_url(); ?>index.php/ctrlTransmisiones">TRASNMISIÓN Y DISPERSIÓN</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img alt="Brand" src="<?php echo base_url(); ?>media/logo.png" class="img-responsive"
                         width="90">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-responsive-collapse" id="bs-example-navbar-collapse-2">

                <ul class="nav navbar-nav">
                    <form class="navbar-form navbar-left"><div class="col-md-12">
                            <div class="form-group">
                                <input type="search" id="txtSearch" name="txtSearch" value="" placeholder="BÚSQUEDA RÁPIDA..." class="form-control text-white input-margin-zero" onkeyup="onSearch()">
                            </div>
                        </div>
                    </form>
                    <li class="dropdown hide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="DESARROLLOS INMOBILIARIOS"><a href="#"><span class="fa fa-leaf fa-lg"></span></a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><div id="txtHoraMin" class="trench-f" ></div></a>
                        <?php if (isset($_SESSION['ID'])) { ?>
                            <ul class="dropdown-menu" role="menu">
                                <li class="cursor-hand"><a href="<?php echo base_url(); ?>index.php/ctrlUsuario/"><span class="fa fa-user"></span> <?php print $_SESSION["USUARIO_NOMBRE"]; ?></a></li>
                                <li class="cursor-hand"><a href="#" onclick="SystemExit()"><span class="fa fa-cog"></span> CONFIGURACIONES</a></li>
                                <li class="divider"></li>
                                <li class="cursor-hand"><a href="#" onclick="SystemExit()"><span class="fa fa-arrow-right"></span> SALIR</a></li>
                            </ul>
                            <?php
                            base_url() . 'index.php/ctrlsesion/setInicioSesion';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
}
?>
<div class="container-fluid">
    <article>
        <section id="container">