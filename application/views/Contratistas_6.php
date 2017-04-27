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
                    $(function () {
                        $("#datepicker").datepicker();
                    });
                    $(function () {
                        $("#datepicker2").datepicker();
                    });
                    $(function () {
                        $("#datepicker3").datepicker();
                    });
                    $(function () {
                        $("#datepicker4").datepicker();
                    });
                </script>




                <script>
                    $(function () {
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

                    $(function () {
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

                                for ($i = 1; $i < 37; $i++) {
                                    $r[$i] = 0;
                                    $n[$i] = 0;
                                    $p[$i] = 0;
                                }
                                $Ar = 0;
                                $Fr = 0;
                                $Cr = 0;
                                $Jr = 0;
                                $Vr = 0;
                                foreach ($ContPagos as $ContPagos1) {
                                    foreach ($Conceptos as $Conceptos1) {
                                        if ($ContPagos1->ConceptoP == $Conceptos1->id_concepto) {
                                            $r[$ContPagos1->ConceptoP] = $r[$ContPagos1->ConceptoP] + $ContPagos1->TrabajosaPagar;
                                            $n[$ContPagos1->ConceptoP] = $ContPagos1->TrabajosaPagar;
                                            $p[$ContPagos1->ConceptoP] = $ContPagos1->TrabajosPendientes - $ContPagos1->TrabajosaPagar;
                                        }
                                    }
                                }
                                $i = 1;
                                foreach ($Conceptos as $Conceptos1) {
                                    $C[$i] = $Conceptos1->dsc_concepto;
                                    $i++;
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
                                    Gráfico de comportamiento
                                </strong>
                                <?php echo date('d/m/y'); ?>
                            </td>
                        </tr>
                    </table>  

                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Desarrollo</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="Ndesarrollo1" name="Ndesarrollo1" >
                                <option value="">Selecciona</option>
                                <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                    <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Concepto de pago</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="ConceptoP1" name="ConceptoP1"  required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($ConceptoP as $ConceptoP1) { ?> 
                                    <option value="<?php echo $ConceptoP1->id_concepto; ?>"><?php echo $ConceptoP1->dsc_concepto; ?></option>
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
                                    <input class="form-control"  type="text" name="FechaInicioEdo" id="datepicker"  value="<?php echo date("d/m/Y") ?>">	
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <input class="form-control" type="text" name="FechaTerminoEdo" id="datepicker2"  value="<?php echo date("d/m/Y") ?>">	
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />

                    <div class="col-md-10 col-xs-12" id="GrafxComportamiento">
                        <canvas id="Barra1" />
                        <script>
                            var data1 = {
                                labels: [
<?php
for ($i = 1; $i < 37; $i++) {
    echo '"' . $C[$i] . '",';
}
?>
                                ],
                                datasets: [
                                    {
                                        label: "Realizados",
                                        fillColor: "rgba(220,220,220,0.5)",
                                        strokeColor: "rgba(220,220,220,0.8)",
                                        highlightFill: "rgba(220,220,220,0.75)",
                                        highlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
for ($i = 1; $i < 37; $i++) {
    echo $r[$i] . ',';
}
?>
                                        ]
                                    },
                                    {
                                        label: "Pagados",
                                        fillColor: "rgba(74,129,149,0.5)",
                                        strokeColor: "rgba(74,129,149,0.8)",
                                        highlightFill: "rgba(74,129,149,0.75)",
                                        highlightStroke: "rgba(74,129,149,1)",
                                        data: [
<?php
for ($i = 1; $i < 37; $i++) {
    echo $p[$i] . ',';
}
?>
                                        ]
                                    }
                                ]

                            };

                            var Barras1 = document.getElementById("Barra1").getContext("2d");
                            window.myBarra1 = new Chart(Barras1).Bar(data1, {
                                animationEasing: "easeOutBounce",
                                animateRotate: true,
                                animateScale: false,
                                scaleFontSize: 6.5,
                                scaleFontColor: "#666666",
                                //scaleOverride: true,
                                //scaleSteps: 10,
                                //scaleStepWidth: 1,
                                //scaleStartValue: 0,
                                scaleShowGridLines: true,
                                scaleGridLineColor: "rgba(255,255,255,.05)",
                                scaleGridLineWidth: 1,
                                barShowStroke: true,
                                barStrokeWidth: 1,
                                responsive: true
                            });

                            legend(document.getElementById("legendDiv1"), data1);
                            //document.getElementById("legendDiv1").innerHTML = myBarra1.generateLegend();
                        </script> 
                        </br>
                    </div>
                    <div id="legendDiv1" class="col-md-6 col-xs-12 doughnut-legend" >
                    </div>













                    <table width="100%">

                        <tr>
                            <td bgcolor="#ff6600" align="left">
                                <strong style="color:#FFF">
                                    Gráfico de trabajos
                                </strong>
                                <?php echo date('d/m/y'); ?>
                            </td>
                        </tr>
                    </table>  

                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Desarrollo</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="Ndesarrollo" name="Ndesarrollo" >
                                <option value="">Selecciona</option>
                                <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                    <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Concepto de pago</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="ConceptoP" name="ConceptoP"  required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($ConceptoP as $ConceptoP1) { ?> 
                                    <option value="<?php echo $ConceptoP1->id_concepto; ?>"><?php echo $ConceptoP1->dsc_concepto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <br />

                    <div class="col-md-6 col-xs-12" id="GrafxTrabajo">
                        <canvas id="Barra2" />
                        <script>
                            var data2 = {
                                labels: [
                                    "Excavaciones", "Drenaje", "Cimbra", "Armado"],
                                datasets: [
                                    {
                                        label: "Realizados",
                                        fillColor: "rgba(247,70,74,0.5)",
                                        strokeColor: "rgba(247,70,74,0.8)",
                                        highlightFill: "rgba(247,70,74,0.75)",
                                        highlightStroke: "rgba(247,70,74,1)",
                                        data: [<?php echo $Er ?>,<?php echo $Dr ?>,<?php echo $Cr ?>,<?php echo $Ar ?>]
                                    },
                                    {
                                        label: "Ultimos",
                                        fillColor: "rgba(247,28,33,0.5)",
                                        strokeColor: "rgba(247,28,33,0.8)",
                                        highlightFill: "rgba(247,28,33,0.75)",
                                        highlightStroke: "rgba(247,28,33,1)",
                                        data: [<?php echo $Er ?>,<?php echo $Dr ?>,<?php echo $Cr ?>,<?php echo $Ar ?>]
                                    },
                                    {
                                        label: "Pendientes",
                                        fillColor: "rgba(234,25,94,0.5)",
                                        strokeColor: "rgba(234,25,94,0.8)",
                                        highlightFill: "rgba(234,25,94,0.75)",
                                        highlightStroke: "rgba(234,25,94,1)",
                                        data: [<?php echo $Er ?>,<?php echo $Dr ?>,<?php echo $Cr ?>,<?php echo $Ar ?>]
                                    }
                                ]

                            };


                            var Barras2 = document.getElementById("Barra2").getContext("2d");
                            window.myBarra2 = new Chart(Barras2).Bar(data2, {
                                animationEasing: "easeOutBounce",
                                animateRotate: true,
                                animateScale: false,
                                scaleFontSize: 6.5,
                                scaleFontColor: "#666666",
                                //scaleOverride: true,
                                //scaleSteps: 10,
                                //scaleStepWidth: 1,
                                //scaleStartValue: 0,
                                scaleShowGridLines: true,
                                scaleGridLineColor: "rgba(255,255,255,.05)",
                                scaleGridLineWidth: 1,
                                barShowStroke: true,
                                barStrokeWidth: 1,
                                responsive: true
                            });

                            legend(document.getElementById("legendDiv2"), data2);
                            // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
                        </script>
                        </br>
                    </div>
                    <div id="legendDiv2" class="col-md-6 col-xs-12 doughnut-legend" >
                    </div>
















                    <table width="100%">
                        <tr>
                            <td bgcolor="#ff6600" align="left">
                                <strong style="color:#FFF">
                                    Gráfico por montos
                                </strong>
                                <?php echo date('d/m/y'); ?>
                            </td>
                        </tr>
                    </table>

                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Desarrollo</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="Ndesarrollo2" name="Ndesarrollo2" >
                                <option value="">Selecciona</option>
                                <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                    <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">	
                        <div class="col-md-12 col-xs-12">
                            <label for="1" class="control-label">Concepto de pago</label><br>
                        </div>  
                        <div class="col-md-12 col-xs-12">
                            <select class="form-control" id="ConceptoP2" name="ConceptoP2"  required="required">
                                <option value="">Selecciona</option>
                                <?php foreach ($ConceptoP as $ConceptoP1) { ?> 
                                    <option value="<?php echo $ConceptoP1->id_concepto; ?>"><?php echo $ConceptoP1->dsc_concepto; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <br />

                    <div class="col-md-6 col-xs-12" id="GrafxMonto2">
                        <canvas id="Barra3" />
                        <script>
                            var data3 = {
                                labels: [
                                    "Excavaciones", "Drenaje", "Cimbra", "Armado"],
                                datasets: [
                                    {
                                        label: "Realizados",
                                        fillColor: "rgba(247,70,74,0.5)",
                                        strokeColor: "rgba(247,70,74,0.8)",
                                        highlightFill: "rgba(247,70,74,0.75)",
                                        highlightStroke: "rgba(247,70,74,1)",
                                        data: [<?php echo $Er ?>,<?php echo $Dr ?>,<?php echo $Cr ?>,<?php echo $Ar ?>]
                                    },
                                    {
                                        label: "Ultimos",
                                        fillColor: "rgba(247,28,33,0.5)",
                                        strokeColor: "rgba(247,28,33,0.8)",
                                        highlightFill: "rgba(247,28,33,0.75)",
                                        highlightStroke: "rgba(247,28,33,1)",
                                        data: [<?php echo $Er ?>,<?php echo $Dr ?>,<?php echo $Cr ?>,<?php echo $Ar ?>]
                                    },
                                    {
                                        label: "Pendientes",
                                        fillColor: "rgba(234,25,94,0.5)",
                                        strokeColor: "rgba(234,25,94,0.8)",
                                        highlightFill: "rgba(234,25,94,0.75)",
                                        highlightStroke: "rgba(234,25,94,1)",
                                        data: [<?php echo $Er ?>,<?php echo $Dr ?>,<?php echo $Cr ?>,<?php echo $Ar ?>]
                                    }
                                ]

                            };


                            var Barras3 = document.getElementById("Barra3").getContext("2d");
                            window.myBarra3 = new Chart(Barras3).Bar(data3, {
                                animationEasing: "easeOutBounce",
                                animateRotate: true,
                                animateScale: false,
                                scaleFontSize: 6.5,
                                scaleFontColor: "#666666",
                                //scaleOverride: true,
                                //scaleSteps: 10,
                                //scaleStepWidth: 1,
                                //scaleStartValue: 0,
                                scaleShowGridLines: true,
                                scaleGridLineColor: "rgba(255,255,255,.05)",
                                scaleGridLineWidth: 1,
                                barShowStroke: true,
                                barStrokeWidth: 1,
                                responsive: true
                            });

                            legend(document.getElementById("legendDiv3"), data3);
                            // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
                        </script>
                        </br>
                    </div>
                    <div id="legendDiv3" class="col-md-6 col-xs-12 doughnut-legend" >
                    </div>





                    <table width="100%">
                        <tr>
                            <td align="left">

                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ff6600" align="left">

                            </td>
                        </tr>
                    </table>  





                    <div class="col-md-12">
                        <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlContratistas'"><span class="fa fa-arrow-left fa-3x"></span></button>
                    </div>
                </div>
                </body>
                </html>
                <script>
                    cli.config.GrafxComportamiento();
                    cli.config.GrafxComportamiento1();
                    cli.config.GrafxComportamiento2();
                    cli.config.GrafxComportamiento3();
                    cli.config.GrafxConcepto();
                    cli.config.GrafxMonto();
                    cli.config.GrafxConcepto2();
                    cli.config.GrafxMonto2();
                </script>