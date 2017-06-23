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

        <!-- Material Design fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/lib/bootstrap.min.css">
        <link href="<?php print base_url(); ?>dist/css/bootstrap-material-design.min.css" rel="stylesheet">
        <link href="<?php print base_url(); ?>dist/css/ripples.min.css" rel="stylesheet">
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
        <script src="<?php print base_url(); ?>dist/js/ripples.min.js"></script>
        <script src="<?php print base_url(); ?>dist/js/material.min.js"></script>
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

            $(document).ready(function() {
                $.material.init();
                $('button').removeClass("btn-default").addClass("btn-raised btn-default");
//                $('.panel').removeClass("panel-primary").addClass("panel-success");
                $(".modal-title").addClass("font50");
                $(".modal select").parent().addClass("has-info");
                $(".modal textarea").parent().addClass("has-info ");
                $(".modal input").parent().addClass("has-info ");

                var chkTooltip = $("#chkTooltip");
                chkTooltip.change(function() {
                    if (chkTooltip[0].checked) {
                        $(".btn").tooltip({placement: 'top'}).tooltip('show');
                    } else {
                        $(".btn").tooltip({placement: 'top'}).tooltip('hide');
                    }
                });
                $(".modal").on('hidden.bs.modal', function() {
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
                $("#textbox").bind('keyup', function(e) {
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
                $(".select2, .select2-multiple").on('select2:open', function(e) {
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
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                    $.fn.dataTable
                            .tables({visible: true, api: true})
                            .columns.adjust();
                });
                $("label").addClass('bounceIn');

                $('[data-provide="datepicker"]').datepicker({

                    todayBtn: true,
                    autoclose: true,
                    todayHighlight: true
                });

                $("select").select2({
                    placeholder: "Selecciona una opción",
                    allowClear: true
                });
            });

            function onMenu() {
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
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                    }
                }).done(function(data) {
                    if (parseInt(data) === 0) {
                        window.location.href = base_url;
                    }
                }).always(function() {
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