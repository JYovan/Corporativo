<?php
header('Access-Control-Allow-Origin: *');
if (session_status() == 1) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>RABINA CORPORACIÓN</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/lib/bootstrap.min.css">
        <?php echo link_tag('css/main.css'); ?>
        <?php echo link_tag('css/styles.min.css'); ?>
        <?php echo link_tag('css/lib/jquery-ui-1.10.4.custom.min.css'); ?>
        <?php echo link_tag('css/lib/ui.jqgrid.css'); ?>


        <!-- scripts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        --><script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<!--        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>-->
        <script src="<?php echo base_url(); ?>js/lib/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>js/lib/i18n/grid.locale-es.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/lib/jquery.jqGrid.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/lib/date_es.js"></script>
        <link href="<?php echo base_url(); ?>js/datepicker/datepicker3.css" rel="stylesheet"/>
        <script src="<?php echo base_url(); ?>js/lib/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/datepicker/bootstrap-datepicker.min.js"></script>

        <!---------------LIBRERIA DE GRÁFICOS---------------------->

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/demo.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/hover/css/hover-min.css">
<!--        <script src="<?php echo base_url(); ?>js/Chart/Chart.js"></script>
    <script src="<?php echo base_url(); ?>js/Chart/Chart.min.js"></script>
        --><script src="<?php echo base_url(); ?>js/Chart/legend.js"></script> 

        <script src="<?php echo base_url(); ?>js/Chart/Chart.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jnumber/jquery.number.min.js"></script> 
        <?php echo link_tag('css/animate/animate.min.css'); ?>
        <?php
        if (isset($_SESSION['ID'])) {
            ?>

            <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.core.js" ></script>
            <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.dynamic.js" ></script>
            <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.tooltips.js" ></script>
            <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.resizing.js" ></script>
            <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.gantt.js" ></script> 
        <?php }
        ?>
        <!------------------------------------------------------------------------------->

        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/demo.css">-->

        <?php echo link_tag('css/font-awesome.min.css'); ?>
        <?php echo link_tag('css/font-awesome-animation.min.css'); ?>

        <script src="<?php echo base_url(); ?>js/pace.js"></script>   
        <script src="<?php echo base_url(); ?>js/notify/bootstrap-notify-3.1.3/bootstrap-notify.min.js"></script>   

        <!----MASTER LIBS---->
        <!--        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.11,af-2.1.1,b-1.1.2,b-colvis-1.1.2,b-flash-1.1.2,b-html5-1.1.2,b-print-1.1.2,cr-1.3.1,fh-3.1.1,r-2.0.2,rr-1.1.1,sc-1.4.1,se-1.1.2/datatables.min.css"/>
                <script type="text/javascript" src="https://cdn.datatables.net/t/dt/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.11,af-2.1.1,b-1.1.2,b-colvis-1.1.2,b-flash-1.1.2,b-html5-1.1.2,b-print-1.1.2,cr-1.3.1,fh-3.1.1,r-2.0.2,rr-1.1.1,sc-1.4.1,se-1.1.2/datatables.min.js"></script>
        -->
        <?php echo link_tag("js/tabletools/master/DataTables/datatables.min.css"); ?>
        <script src="<?php echo base_url(); ?>js/tabletools/master/DataTables/datatables.min.js"></script>
        <!------------->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



        <?php echo link_tag('css/pace/pace-theme-center-simple.css'); ?>  
        <script src="<?php echo base_url(); ?>js/config.js"></script>

        <?php
        if (isset($scripts)):
            foreach ($scripts as $js):
                ?>
                <script src="<?php echo base_url() . "js/{$js}.js"; ?>" type="text/javascript"></script>
                <?php
            endforeach;
        endif;
        if (isset($ctrlscripts)) {
            ?>
            <script src="<?php echo base_url() . 'js/controllers/ctrl.js'; ?>" type="text/javascript"></script>
            <?php
            foreach ($ctrlscripts as $js):
                ?>
                <script src="<?php echo base_url() . "js/controllers/{$js}.js"; ?>" type="text/javascript"></script>
            <?php endforeach; ?>
            <?php
        }
        ?> 
        <script src="<?php echo base_url(); ?>js/jscolor/jscolor.js"></script>
        <script>
            var base_url = "<?php echo base_url(); ?>";

            $(document).ready(function () {
                $(".modal-title").addClass("font50");
                $(".modal select").parent().addClass("has-info");
                $(".modal textarea").parent().addClass("has-info ");
                $(".modal input").parent().addClass("has-info ");

                var chkTooltip = $("#chkTooltip");
                chkTooltip.change(function () {
                    if (chkTooltip[0].checked) {
                        $(".btn").tooltip({placement: 'top'}).tooltip('show');
                    } else {
                        $(".btn").tooltip({placement: 'top'}).tooltip('hide');
                    }
                });
                $(".modal").on('hidden.bs.modal', function () {
                    $(".modal input").val("");
                    $(".modal select").select2("val", "");
                });

                $('.modal').find('.modal-dialog').addClass('fullscreen');
                //http://bootstrap-notify.remabledesigns.com/#documentation 
                $.notifyDefaults({
                    placement: {
                        from: "bottom",
                        align: "center"
                    },
                    animate: {
                        enter: "animated bounceIn",
                        exit: "animated bounceOut"
                    },
                    allow_dismiss: true,
                    delay: 1500
                });

                var resume_col = 0;
                $("#textbox").bind('keyup', function (e) {
                    if (e.which >= 97 && e.which <= 122) {
                        var newKey = e.which - 32;
                        e.keyCode = newKey;
                        e.charCode = newKey;
                    }

                    $("#textbox").val(($("#textbox").val()).toUpperCase());
                });
                $("#datepicker").datepicker();
                $("#datepicker2").datepicker();
                $("#datepicker3").datepicker();
                $("#datepicker4").datepicker();
                //Agregamos el "Idioma" Español con las traducciones que deseemos y el formato que queramos que tenga la fecha.
                $.datepicker.regional['es'] = {
                    closeText: 'Cerrar',
                    prevText: '<Ant',
                    nextText: 'Sig>',
                    currentText: 'Hoy',
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
                    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi&eacute;', 'Juv', 'Vie', 'S&aacute;b'],
                    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
                    weekHeader: 'Sm',
                    dateFormat: 'dd/mm/yy',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''
                };
                //Indicamos que por defecto coja el idioma es(Español)
                $.datepicker.setDefaults($.datepicker.regional['es']);
                //Declaramos que todos los IDs que se llamen datepicker(id="datepicker") se conviertan en el Objeto Datepicker
                // y le indicamos que se aparezca una lista con los meses y otra con los años.
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1
                });
                $('.datepicker').datepicker({
                    format: 'mm/dd/yyyy',
                    startDate: '-3d'
                });
                $('select').select2();
                $(".select2, .select2-multiple").on('select2:open', function (e) {
                    $('.select2-search input').prop('focus', false);
                });
                $('[data-toggle="tooltip"]').tooltip();
                $('.btn').addClass('btn3d');
                $('.fa fa-arrow-left').addClass('faa-horizontal animated');
//                $("input[type=radio]").addClass("form-control");
                //                $(".btn").addClass("hvr-bounce-in");
                $("div.panel-primary, div.panel-info, div.panel-warning, div.panel-danger").addClass('shadow-effect');
                $('table dataTable').css('display', 'block');
                $.fn.dataTable.tables({visible: true, api: true})
                        .columns.adjust();
                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $.fn.dataTable
                            .tables({visible: true, api: true})
                            .columns.adjust();
                });
                $("label").addClass('bounceIn');
                
            });
            function onMenu(){ 
        $("#wrapper").toggleClass("toggled");
    }
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                var ampm = h >= 12 ? 'pm' : 'am';
                m = checkTime(m);
                s = checkTime(s);
                $("#Hora").val(h + ":" + m + ":" + s + " " + ampm);
                $("#txtHoraMin").html(h + ":" + m + " " + ampm);
                //                $("#txtHoraMin").html(h + ":" + m + ":" + s + " " + ampm );
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                ;  // add zero in front of numbers < 10
                return i;
            }
            function SystemExit() {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE.."
                });
                //                onLogOut();
                $.ajax({
                    url: base_url + 'index.php/ctrlsesion/onGoOut',
                    type: "POST",
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                    }
                }).done(function (data) {
                    if (parseInt(data) === 0) {
                        window.location.href = base_url;
                    }
                }).always(function () {
                    HoldOn.close();
                });

            }
            function aMayusculas(obj, id) {
                obj = obj.toUpperCase();
                document.getElementById(id).value = obj;
            }
            function launchIntoFullscreen(element) {
                if (element.requestFullscreen) {
                    element.requestFullscreen();
                } else if (element.mozRequestFullScreen) {
                    element.mozRequestFullScreen();
                } else if (element.webkitRequestFullscreen) {
                    element.webkitRequestFullscreen();
                } else if (element.msRequestFullscreen) {
                    element.msRequestFullscreen();
                }
            }

            startTime();

            $('.modal').removeClass('.animated .bounce .fade .slideInUp .slideInDown').addClass('.animated .zoomInUp');
        </script>
        <!------------------------------CUSTOM SCRIPTS------------------------------> 
        <!--<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>-->
<!--        <script src="<?php echo base_url(); ?>js/vel/velocity.min.js"></script>
        <script src="<?php echo base_url(); ?>js/vel/velocity.ui.min.js"></script>-->
        <script src="<?php echo base_url(); ?>js/scripts.min.js"></script>
        <script src="<?php echo base_url() . 'js/HoldOn/HoldOn.min.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/HoldOn/HoldOn.min.css">
        <?php echo link_tag('js/select2/select2.min.css'); ?>
        <script src="<?php echo base_url(); ?>js/select2/select2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/vegas/vegas.min.css">
        <script src="<?php echo base_url(); ?>js/vegas/vegas.min.js"></script>
        <script src="<?php echo base_url(); ?>js/gmaps-master/gmaps.min.js"></script>
        <!--<script src="<?php echo base_url(); ?>js/snow/snowstorm.js"></script>-->
                <!--<script src="<?php echo base_url(); ?>js/shortcut.js"></script>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>js/sidebar/css/simple-sidebar.css">
        <!------------------------------END CUSTOM SCRIPTS-------------------------->
    </head>
    <?php
    if (isset($_SESSION["ID"])) {
        ?>
    
       <div id="wrapper">
        <div id="sidebar-wrapper" align="center">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php print base_url(); ?>index.php/">
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
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData">
                        <img alt="Brand" src="<?php echo base_url(); ?>media/logo.png" class="img-responsive" 
                             width="90">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

                    <ul class="nav navbar-nav hide">
                        <?php
                                extract($_SESSION);
                        if ($PERMISOS[18]->Ver === '1') {
                            ?>
                            <li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="TRAMITE DE FACTURAS"><a href="#"><span class="fa fa-folder fa-lg"></span> <span class="sr-only"></span></a></li>

                            <?php
                        }
                        if ($PERMISOS[9]->Ver === '1') {
                            ?>
                            <li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="COMPRAS"><a href="#"><span class="fa fa-shopping-cart fa-lg"></span> <span class="sr-only"></span></a></li>

                            <?php
                        }
                        if ($PERMISOS[12]->Ver === '1') {
                            ?>
                            <li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="TRANSMISIÓN Y DISPERSIÓN"><a href="#"><span class="fa fa-exchange fa-lg"></span> <span class="sr-only"></span></a></li>
                            <?php
                        }
                        if ($PERMISOS[19]->Ver === '1') {
                            ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="PAGO A TERCEROS"><a href="#"><span class="fa fa-group fa-lg"></span> <span class="sr-only"></span></a></li>
                                    <?php
                                }
                                if ($PERMISOS[0]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="MAPA"><a href="#"><span class="fa fa-globe fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[36]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="CONTRATOS"><a href="#"><span class="fa fa-book fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[35]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="PRESTAMOS"><a href="#"><span class="fa fa-handshake-o fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[3]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="BIENES INMUEBLES"><a href="#"><span class="fa fa-home fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[6]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="TRAMITES"><a href="#"><span class="fa fa-clipboard fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[22]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="PRECIOS DEL CEMENTO"><a href="#"><span class="fa fa-phone fa-lg" ></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[23]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="INMOBILIARIO"><a href="#"><span class="fa fa-industry fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[40]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="MOBILIARIO"><a href="#"><span class="fa fa-bed fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[21]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="COBRANZA"><a href="#"><span class="fa fa-usd fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[8]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="PRODUCTOS"><a href="#"><span class="fa fa-puzzle-piece fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[31]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="UNIDADES DE TRANSPORTE"><a href="#"><span class="fa fa-bus fa-lg"></span> <span class="sr-only"></span></a></li> 
                                    <?php
                                }
                                if ($PERMISOS[27]->Ver === '1') {
                                    ?><li class="" data-toggle="tooltip" data-placement="bottom" title="" type="button" data-original-title="SEGURIDAD SOCIAL">
                                <a href="#">
                                    <span class="fa fa-user-md fa-lg"></span> 
                                    <span class="sr-only"></span>
                                </a>
                            </li>
                        <?php }
                        ?>
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