<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Informes gráficos</title>
        <script src="<?php echo base_url(); ?>js/Chart/Chart.js"></script>
        <script src="<?php echo base_url(); ?>js/Chart/Chart.min.js"></script>
        <script src="<?php echo base_url(); ?>js/Chart/legend.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.core.js" ></script>
        <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.dynamic.js" ></script>
        <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.tooltips.js" ></script>
        <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.common.resizing.js" ></script>
        <script src="<?php echo base_url(); ?>js/RGraph/libraries/RGraph.gantt.js" ></script>




        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css">
            <script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
            <script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/demo.css">
                <script>
                    $(function() {
                    $("#datepicker").datepicker();
                    });
                    $(function() {
                    $("#datepicker2").datepicker();
                    });
                    $(function() {
                    $("#datepicker3").datepicker();
                    });
                    $(function() {
                    $("#datepicker4").datepicker();
                    });
                </script>




                <script>
                    $(function() {
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
                    });
                    $(function() {
                    //Declaramos que todos los IDs que se llamen datepicker(id="datepicker") se conviertan en el Objeto Datepicker
                    // y le indicamos que se aparezca una lista con los meses y otra con los años.
                    $("#datepicker").datepicker({
                    changeMonth: true,
                            changeYear: true,
                            numberOfMonths: 1
                    });
                    });
                </script>


                </head>
                </style>


                <div class="container">	 
                    <table width="100%">
                        <tr>
                            <td>
                                <?php
                                $respuesta = '-';
                                foreach ($USUARIOS as $USUARIOS1) {
                                    if ($USUARIOS1->Id == $User) {
                                        $respuesta = $USUARIOS1->nombre;
                                        $indice = $USUARIOS1->Id;
                                    }
                                }
                                echo $respuesta;

                                $f[] = "";
                                $b[] = "";
                                $g[] = "";
                                $mo[] = "";
                                $ma[] = "";
                                $c[] = "";
                                $t[] = "";

                                $i = 0;
                                foreach ($Desarrollo as $Desarrollo1) {
                                    $f[$i] = $Desarrollo1->ID;
                                    $b[$i] = $Desarrollo1->Proyecto;
                                    $i++;
                                }

                                $n = count($f);

                                $j = 0;
                                for ($i = 0; $i < $n; $i++) {
                                    $g[$i] = 0;
                                    $mo[$i] = 0;
                                    $ma[$i] = 0;
                                    $c[$i] = 0;
                                    $t[$i] = 0;
                                    foreach ($Transmision as $Transmision1) {
                                        if ($f[$i] == $Transmision1->NFideicomiso) {
                                            $c[$i] = $c[$i] + $Transmision1->PrecioVentaN;
                                            $g[$i] = $g[$i] + $Transmision1->PagoTerreno;
                                            $mo[$i] = $mo[$i] + $Transmision1->PagoRendimientos;
                                            $ma[$i] = $ma[$i] + $Transmision1->TotalIng;
                                            $t[$i] ++;
                                        }
                                    }
                                }
                                ?>
                            </td>
                        </tr>
                    </table>








                    <table width="100%">
                        <tr>
                            <td align="left">
                                <strong style="color:#000">
                                    Estadísticas<BR />
                                </strong>
                            </td>
                        </tr>
                    </table>











                    <table width="100%">
                        <tr>
                            <td bgcolor="#ff6600" align="left">
                                <strong style="color:#FFF">
                                    Gráfico de transmisiones 
                                </strong>
                                <?php echo "(Fechas consultadas)"; ?>
                            </td>
                        </tr>
                    </table>  


                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Fideicomiso</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="Comercializador" name="Comercializador"   required="required">
                                <option value="0">Selecciona</option>
                                <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                    <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-6 col-xs-12">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-6 col-xs-6">
                                    <label for="NombreActividad" class="control-label">Fecha de inicio </label><br>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <label for="NombreActividad" class="control-label">Fecha de término </label><br>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-6 col-xs-6">
                                    <input class="form-control" type="text" name="FechaInicioEdo" id="datepicker"  value="<?php echo date("d/m/Y") ?>">	
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <input class="form-control" type="text" name="FechaTerminoEdo" id="datepicker2"  value="<?php echo date("d/m/Y") ?>">	
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />
                    <br />
                    <br />

                    <div class="col-md-12 col-xs-12" id="GrafxPrecioDialabel">
                        <div class="col-md-6 col-xs-12">
                            <canvas id="Barra1" />
                            </br>
                        </div>
                        <div id="legendDiv1" class="col-md-6 col-xs-12 doughnut-legend" >
                        </div>
                        <script>
                            var data1 = {
                            labels : [
                                    //
                        //		for($i=0;$i<$n-1;$i++){
                        //		echo '"'.$b[$i].'",';
                        //		}
                        //		echo '"'.$b[$i].'"';
                        //		
                                    "Transmisiones"
                            ],
                                    datasets : [
<?php
for ($i = 0; $i < $n - 1; $i++) {
    ?>
                                        {
    <?php
    $a = $i * 35;
    $r = $i * 45;
    if ($a >= 250) {
        $a = ($a - $i * 34) * 2;
    }
    if ($r >= 250) {
        $r = ($r - $i * 34) * 2;
    }
    ?>
                                        label: <?php echo '"' . $b[$i] . '"'; ?>,
                                                fillColor : "rgba(<?php echo $a ?>,<?php echo $r ?>,40,1)",
                                                strokeColor : "rgba(<?php echo $a ?>,<?php echo $r ?>,40,0.8)",
                                                highlightFill: "rgba(<?php echo $a ?>,<?php echo $r ?>,40,0.75)",
                                                highlightStroke: "rgba(<?php echo $a ?>,<?php echo $r ?>,40,0.5)",
                                                data : [


    <?php echo $t[$i]; ?>
                                                ]
                                        },
<?php } ?>
                                    {

                                    label: <?php echo '"' . $b[$i] . '"'; ?>,
                                            fillColor : "rgba(118,207,40,1)",
                                            strokeColor : "rgba(118,207,40,0.8)",
                                            highlightFill: "rgba(118,207,40,0.75)",
                                            highlightStroke: "rgba118,207,40,0.5)",
                                            data : [
<?php echo $t[$i]; ?>
                                            ]
                                    }
                                    ]




                            };
                            var Barras1 = document.getElementById("Barra1").getContext("2d");
                            window.myBarra1 = new Chart(Barras1).Bar(data1, {
                            animationEasing : "easeOutBounce",
                                    animateRotate : true,
                                    animateScale : false,
                                    scaleFontSize : 6.5,
                                    scaleFontColor : "#666666",
                                    //scaleOverride: true,
                                    //scaleSteps: 10,
                                    //scaleStepWidth: 1,
                                    //scaleStartValue: 0,
                                    scaleShowGridLines : true,
                                    scaleGridLineColor : "rgba(255,255,255,.05)",
                                    scaleGridLineWidth : 1,
                                    barShowStroke : true,
                                    barStrokeWidth : 1,
                                    responsive : true
                            });
                            legend(document.getElementById("legendDiv1"), data1);
                            //document.getElementById("legendDiv1").innerHTML = myBarra1.generateLegend();
                        </script>
                        </br>
                    </div>



                    <div class="col-md-12 col-xs-12" id="GrafxPrecioDialabel">
                        <br />
                    </div>




                    <table width="100%">
                        <tr>
                            <td bgcolor="#ff6600" align="left">
                                <strong style="color:#FFF">
                                    Gráfico de transmisiones 
                                </strong>
                            </td>
                        </tr>
                    </table>  




                    <div class="col-md-12 col-xs-12" id="GrafxPrecioDialabel">
                        <div class="col-md-6 col-xs-12">
                            <canvas id="Barra2" />
                            </br>
                        </div>
                        <div id="legendDiv2" class="col-md-6 col-xs-12 doughnut-legend" >
                        </div>
                        <script>
                            var data2 = {
                            labels : [
                                    //
                        //		for($i=0;$i<$n-1;$i++){
                        //		echo '"'.$b[$i].'",';
                        //		}
                        //		echo '"'.$b[$i].'"';
                        //		
                                    "Precios"
                            ],
                                    datasets : [
<?php
for ($i = 0; $i < $n - 1; $i++) {
    ?>
                                        {
    <?php
    $a = $i * 35;
    $r = $i * 45;
    if ($a >= 250) {
        $a = ($a - $i * 34) * 2;
    }
    if ($r >= 250) {
        $r = ($r - $i * 34) * 2;
    }
    ?>
                                        label: <?php echo '"' . $b[$i] . '"'; ?>,
                                                fillColor : "rgba(<?php echo $a ?>,<?php echo $r ?>,40,1)",
                                                strokeColor : "rgba(<?php echo $a ?>,<?php echo $r ?>,40,0.8)",
                                                highlightFill: "rgba(<?php echo $a ?>,<?php echo $r ?>,40,0.75)",
                                                highlightStroke: "rgba(<?php echo $a ?>,<?php echo $r ?>,40,0.5)",
                                                data : [


    <?php echo $c[$i]; ?>
                                                ]
                                        },
<?php } ?>
                                    {

                                    label: <?php echo '"' . $b[$i] . '"'; ?>,
                                            fillColor : "rgba(118,207,40,1)",
                                            strokeColor : "rgba(118,207,40,0.8)",
                                            highlightFill: "rgba(118,207,40,0.75)",
                                            highlightStroke: "rgba118,207,40,0.5)",
                                            data : [
<?php echo $c[$i]; ?>
                                            ]
                                    }
                                    ]




                            };
                            var Barras2 = document.getElementById("Barra2").getContext("2d");
                            window.myBarra2 = new Chart(Barras2).Bar(data2, {
                            animationEasing : "easeOutBounce",
                                    animateRotate : true,
                                    animateScale : false,
                                    scaleFontSize : 6.5,
                                    scaleFontColor : "#666666",
                                    //scaleOverride: true,
                                    //scaleSteps: 10,
                                    //scaleStepWidth: 1,
                                    //scaleStartValue: 0,
                                    scaleShowGridLines : true,
                                    scaleGridLineColor : "rgba(255,255,255,.05)",
                                    scaleGridLineWidth : 1,
                                    barShowStroke : true,
                                    barStrokeWidth : 1,
                                    responsive : true
                            });
                            legend(document.getElementById("legendDiv2"), data2);
                            //document.getElementById("legendDiv1").innerHTML = myBarra1.generateLegend();
                        </script>
                        </br>
                    </div>








                    <table width="100%">    
                        <tr>
                            <td width="80%">    
                            </td>
                            <td width="20%" align="right">    
                                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
                            </td>
                        </tr>
                    </table>
                </div>
                </body>
                </html>
                <script>
                    cli.config.GrafxPrecioDia();
                    cli.config.GrafxPrecioDia1();
                    cli.config.GrafxPrecioDia2();
                    cli.config.GrafxPrecioDia3();
                </script>