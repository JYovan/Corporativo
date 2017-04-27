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
                var_dump($respuesta);

                $cero = 0;
                $uno = 0;
                $dos = 0;
                $tres = 0;
                $cuatro = 0;
                $cinco = 0;
                $seis = 0;
                $siete = 0;
                $ocho = 0;
                $nueve = 0;
                foreach ($Directorio as $Directorio1) {
                    if ($Directorio1->Estatus == 0) {
                        $cero = $cero + 1;
                    } else {
                        if ($Directorio1->Estatus == 1) {
                            $uno = $uno + 1;
                        } else {
                            if ($Directorio1->Estatus == 2) {
                                $dos = $dos + 1;
                            } else {
                                if ($Directorio1->Estatus == 3) {
                                    $tres = $tres + 1;
                                } else {
                                    if ($Directorio1->Estatus == 4) {
                                        $cuatro = $cuatro + 1;
                                    } else {
                                        if ($Directorio1->Estatus == 5) {
                                            $cinco = $cinco + 1;
                                        } else {
                                            if ($Directorio1->Estatus == 6) {
                                                $seis = $seis + 1;
                                            } else {
                                                if ($Directorio1->Estatus == 7) {
                                                    $siete = $siete + 1;
                                                } else {
                                                    if ($Directorio1->Estatus == 8) {
                                                        $ocho = $ocho + 1;
                                                    } else {
                                                        if ($Directorio1->Estatus == 9) {
                                                            $nueve = $nueve + 1;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }


                foreach ($Estatus as $Estatus1)
                    $Ar = 0;$Aa = 0;
                $Ap = 0;
                $Fr = 0;
                $Fa = 0;
                $Fp = 0;
                $Cr = 0;
                $Ca = 0;
                $Cp = 0;
                $Jr = 0;
                $Ja = 0;
                $Jp = 0;
                $Vr = 0;
                $Va = 0;
                $Vp = 0;
                foreach ($Referenciados as $Referenciados1) {
                    if ($Referenciados1->Categoria == 1) {
                        if ($Referenciados1->Estatus == 0) {
                            $Ar = $Ar + 1;
                        }
                        if ($Referenciados1->Estatus == 1) {
                            $Aa = $Aa + 1;
                        }
                        if ($Referenciados1->Estatus == 2) {
                            $Ap = $Ap + 1;
                        }
                    } else {
                        if ($Referenciados1->Categoria == 2) {
                            if ($Referenciados1->Estatus == 0) {
                                $Fr = $Fr + 1;
                            }
                            if ($Referenciados1->Estatus == 1) {
                                $Fa = $Fa + 1;
                            }
                            if ($Referenciados1->Estatus == 2) {
                                $Fp = $Fp + 1;
                            }
                        } else {
                            if ($Referenciados1->Categoria == 3) {
                                if ($Referenciados1->Estatus == 0) {
                                    $Cr = $Cr + 1;
                                }
                                if ($Referenciados1->Estatus == 1) {
                                    $Ca = $Ca + 1;
                                }
                                if ($Referenciados1->Estatus == 2) {
                                    $Cp = $Cp + 1;
                                }
                            } else {
                                if ($Referenciados1->Categoria == 4) {
                                    if ($Referenciados1->Estatus == 0) {
                                        $Jr = $Jr + 1;
                                    }
                                    if ($Referenciados1->Estatus == 1) {
                                        $Ja = $Ja + 1;
                                    }
                                    if ($Referenciados1->Estatus == 2) {
                                        $Jp = $Jp + 1;
                                    }
                                } else {
                                    if ($Referenciados1->Categoria == 5) {
                                        if ($Referenciados1->Estatus == 0) {
                                            $Vr = $Vr + 1;
                                        }
                                        if ($Referenciados1->Estatus == 1) {
                                            $Va = $Va + 1;
                                        }
                                        if ($Referenciados1->Estatus == 2) {
                                            $Vp = $Vp + 1;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }




                //datos de subtipo de cliente
                $A = 0;
                $H = 0;
                $R = 0;
                $E = 0;
                $I = 0;
                $G = 0;
                $F = 0;
                $L = 0;
                $X = 0;
                //datos de MUEBLES
                $R1 = 0;
                $R2 = 0;
                $R3 = 0;
                $R4 = 0;
                $R5 = 0;
                $R6 = 0;
                $R7 = 0;
                $R8 = 0;
                $R9 = 0;
                $R10 = 0;
                $R11 = 0;
                $R12 = 0;
                $R13 = 0;
                $R14 = 0;
                $R15 = 0;
                $R16 = 0;
                $R17 = 0;
                foreach ($ID_cliente as $Directorio1) {
                    if ($Directorio1->Tipo_cliente == 1) {
                        $A = $A + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 2) {
                        $H = $H + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 3) {
                        $R = $R + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 4) {
                        $E = $E + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 5) {
                        $I = $I + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 6) {
                        $G = $G + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 7) {
                        $F = $F + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 8) {
                        $L = $L + 1;
                    }
                    if ($Directorio1->Tipo_cliente == 9) {
                        $X = $X + 1;
                    }


                    if ($Directorio1->Rama == 1) {
                        $R1 = $R1 + 1;
                    }
                    if ($Directorio1->Rama == 2) {
                        $R1 = $R2 + 1;
                    }
                    if ($Directorio1->Rama == 3) {
                        $R3 = $R3 + 1;
                    }
                    if ($Directorio1->Rama == 4) {
                        $R4 = $R4 + 1;
                    }
                    if ($Directorio1->Rama == 5) {
                        $R5 = $R5 + 1;
                    }
                    if ($Directorio1->Rama == 6) {
                        $R6 = $R6 + 1;
                    }
                    if ($Directorio1->Rama == 7) {
                        $R7 = $R7 + 1;
                    }
                    if ($Directorio1->Rama == 8) {
                        $R8 = $R8 + 1;
                    }
                    if ($Directorio1->Rama == 9) {
                        $R9 = $R9 + 1;
                    }
                    if ($Directorio1->Rama == 10) {
                        $R10 = $R10 + 1;
                    }
                    if ($Directorio1->Rama == 11) {
                        $R11 = $R11 + 1;
                    }
                    if ($Directorio1->Rama == 12) {
                        $R12 = $R12 + 1;
                    }
                    if ($Directorio1->Rama == 13) {
                        $R13 = $R13 + 1;
                    }
                    if ($Directorio1->Rama == 14) {
                        $R14 = $R14 + 1;
                    }
                    if ($Directorio1->Rama == 15) {
                        $R15 = $R15 + 1;
                    }
                    if ($Directorio1->Rama == 16) {
                        $R16 = $R16 + 1;
                    }
                    if ($Directorio1->Rama == 17) {
                        $R17 = $R17 + 1;
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
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Procedimiento de cálculo, pago y declaración de impuestos
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <div class="col-md-6 col-xs-6">
                    <strong style="color:#FFF">
                        Estatus
                    </strong>
                    <?php echo date('d/m/y'); ?>
                </div>
                <div class="col-md-6 col-xs-6" align="right">
                    <a href='<?php echo base_url(); ?>index.php/Reportes/Reporte?i=<?php echo $indice ?>'><strong>Reportes</strong></a>
                </div>
            </td>
        </tr>
    </table>

    <script>
        var doughnutData = [
        {
        value: <?php echo $cero ?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Sin información"
        },
        {
        value: <?php echo $uno ?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Información incompleta"
        },
        {
        value: <?php echo $dos ?>,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Información completa"
        },
        {
        value: <?php echo $tres ?>,
                color: "#d97041",
                highlight: "#f48655",
                label: "Generando balance contable"
        },
        {
        value: <?php echo $cuatro ?>,
                color: "#c8ccb2",
                highlight: "#e0e4cc",
                label: "Calculando los impuestos"
        },
        {
        value: <?php echo $cinco ?>,
                color: "#9d9b7f",
                highlight: "#c1bfa3",
                label: "Integrando los montos a declarar"
        },
        {
        value: <?php echo $seis ?>,
                color: "#7d4f6d",
                highlight: "#9f688c",
                label: "Notificado el monto a declarar"
        },
        {
        value: <?php echo $siete ?>,
                color: "#949FB1",
                highlight: "#b7c0d0",
                label: "Impuestos declarados"
        },
        {
        value: <?php echo $ocho ?>,
                color: "#4D5360",
                highlight: "#676d7b",
                label: "Impuestos pagados"
        },
        {
        value: <?php echo $nueve ?>,
                color: "#21323d",
                highlight: "#344d5d",
                label: "Inactivo"
        }
        ];
        window.onload = function(){
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
        responsive : true,
                segmentStrokeWidth : 0.5,
                percentageInnerCutout : 40,
                animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
        });
        var helpers = Chart.helpers;
        var legendHolder = document.getElementById('doughnut-legend')
                legendHolder.innerHTML = myDoughnut.generateLegend();
        // Include a html legend template after the module doughnut itself
        helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
        helpers.addEvent(legendNode, 'mouseover', function(){
        var activeSegment = myDoughnut.segments[index];
        activeSegment.save();
        activeSegment.fillColor = activeSegment.highlightColor;
        myDoughnut.showTooltip([activeSegment]);
        activeSegment.restore();
        });
        });
        helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
        myDoughnut.draw();
        });
        };</script>






    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="chart-area"/>
        </div>
        <div id="doughnut-legend" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>


    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Trámite de servicios
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>  

    <div class="col-md-6 col-xs-12">
        <canvas id="Barra1" />
        </br>
    </div>
    <div id="legendDiv1" class="col-md-6 col-xs-12 doughnut-legend" >
    </div>





    <script>
        var data1 = {
        labels : ["Administrativo", "Fiscal", "Contable", "Jurídico", "Vinculación"],
                datasets : [
                {
                label: "Registrado",
                        fillColor : "rgba(220,220,220,0.5)",
                        strokeColor : "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(220,220,220,0.75)",
                        highlightStroke: "rgba(220,220,220,1)",
                        data : [ <?php echo $Ar ?>, <?php echo $Fr ?>, <?php echo $Cr ?>, <?php echo $Jr ?>, <?php echo $Vr ?> ]
                },
                {
                label: "Asignado",
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(151,187,205,0.75)",
                        highlightStroke: "rgba(151,187,205,1)",
                        data : [ <?php echo $Aa ?>, <?php echo $Fa ?>, <?php echo $Ca ?>, <?php echo $Ja ?>, <?php echo $Va ?> ]
                },
                {
                label: "En proceso",
                        fillColor : "rgba(74,129,149,0.5)",
                        strokeColor : "rgba(74,129,149,0.8)",
                        highlightFill : "rgba(74,129,149,0.75)",
                        highlightStroke : "rgba(74,129,149,1)",
                        data : [ <?php echo $Ap ?>, <?php echo $Fp ?>, <?php echo $Cp ?>, <?php echo $Jp ?>, <?php echo $Vp ?> ]
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







    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Tipos de Empresas
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>  




    <div class="col-md-6 col-xs-12">
        <canvas id="Barra2" />
        </br>
    </div>
    <div id="legendDiv2" class="col-md-6 col-xs-12 doughnut-legend" >
    </div>





    <script>
        var data2 = {
        labels : ["Total Clientes", "P. Físicas", "P. Morales", "A. Religiosas", "RF. Extranjero"],
                datasets : [
                {
                label: "Asalariados",
                        fillColor : "rgba(247,70,74,0.5)",
                        strokeColor : "rgba(247,70,74,0.8)",
                        highlightFill: "rgba(247,70,74,0.75)",
                        highlightStroke: "rgba(247,70,74,1)",
                        data : [ <?php echo $A ?>, <?php echo $A ?>, 0, 0, 0 ]
                },
                {
                label: "Honorarios",
                        fillColor : "rgba(247,28,33,0.5)",
                        strokeColor : "rgba(247,28,33,0.8)",
                        highlightFill: "rgba(247,28,33,0.75)",
                        highlightStroke: "rgba(247,28,33,1)",
                        data : [ <?php echo $H ?>, <?php echo $H ?>, 0, 0, 0 ]
                },
                {
                label: "Arrendamiento",
                        fillColor : "rgba(234,25,94,0.5)",
                        strokeColor : "rgba(234,25,94,0.8)",
                        highlightFill : "rgba(234,25,94,0.75)",
                        highlightStroke : "rgba(234,25,94,1)",
                        data : [ <?php echo $R ?>, <?php echo $R ?>, 0, 0, 0]
                },
                {
                label: "Act. Empresarial",
                        fillColor : "rgba(233,76,128,0.5)",
                        strokeColor : "rgba(233,76,128,0.8)",
                        highlightFill : "rgba(233,76,128,0.75)",
                        highlightStroke : "rgba(233,76,128,1)",
                        data : [ <?php echo $E ?>, <?php echo $E ?>, 0, 0, 0]
                },
                {
                label: "Incorporación fiscal",
                        fillColor : "rgba(215,83,152,0.5)",
                        strokeColor : "rgba(215,83,152,0.8)",
                        highlightFill : "rgba(215,83,152,0.75)",
                        highlightStroke : "rgba(215,83,152,1)",
                        data : [ <?php echo $I ?>, <?php echo $I ?>, 0, 0, 0]
                },
                {
                label: "Régimen general",
                        fillColor : "rgba(70,191,189,0.5)",
                        strokeColor : "rgba(70,191,189,0.8)",
                        highlightFill : "rgba(70,191,189,0.75)",
                        highlightStroke : "rgba(70,191,189,1)",
                        data : [ <?php echo $G ?>, 0, <?php echo $G ?>, 0, 0]
                }
                ,
                {
                label: "Con fines no lucrativos",
                        fillColor : "rgba(18,155,153,0.5)",
                        strokeColor : "rgba(18,155,153,0.8)",
                        highlightFill : "rgba(18,155,153,0.75)",
                        highlightStroke : "rgba(18,155,153,1)",
                        data : [ <?php echo $F ?>, 0, <?php echo $F ?>, 0, 0]
                },
                {
                label: "A. Religiosa",
                        fillColor : "rgba(253,180,92,0.5)",
                        strokeColor : "rgba(253,180,92,0.8)",
                        highlightFill : "rgba(253,180,92,0.75)",
                        highlightStroke : "rgba(253,180,92,1)",
                        data : [ <?php echo $L ?>, 0, 0, <?php echo $L ?>, 0]
                },
                {
                label: "RF. Extranejro",
                        fillColor : "rgba(217,112,65,0.5)",
                        strokeColor : "rgba(217,112,65,0.8)",
                        highlightFill : "rgba(217,112,65,0.75)",
                        highlightStroke : "rgba(217,112,65,1)",
                        data : [ <?php echo $X ?>, 0, 0, 0, <?php echo $X ?> ]
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
        // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
    </script> 







    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Estado de los muebles
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-6 col-xs-12">
        <canvas id="Barra3" />
        </br>
    </div>
    <div id="legendDiv3" class="col-md-6 col-xs-12 doughnut-legend" >
    </div>





    <script>
        var data3 = {
        labels:  ["Total de muebles"],
                datasets: [
                {
                label: "Total de muebles",
                        fillColor : "rgba(247,70,74,0.5)",
                        strokeColor : "rgba(247,70,74,0.8)",
                        highlightFill: "rgba(247,70,74,0.75)",
                        highlightStroke: "rgba(247,70,74,1)",
                        data: [
<?php
$Tot = 0;
foreach ($Muebles as $Muebles2) {
    $Tot = $Tot + 1;
}
echo $Tot;
?>
                        ]
                },
                {
                label: "Nuevo",
                        fillColor : "rgba(233,76,128,0.5)",
                        strokeColor : "rgba(233,76,128,0.8)",
                        highlightFill : "rgba(233,76,128,0.75)",
                        highlightStroke : "rgba(233,76,128,1)",
                        data: [
<?php
$Result = 0;
foreach ($Muebles as $Muebles2) {
    if ($Muebles2->Estado == 'Nuevo') {
        $Result = $Result + 1;
    }
}
echo $Result;
?>
                        ]
                },
                {
                label: "Bueno",
                        fillColor : "rgba(70,191,189,0.5)",
                        strokeColor : "rgba(70,191,189,0.8)",
                        highlightFill : "rgba(70,191,189,0.75)",
                        highlightStroke : "rgba(70,191,189,1)",
                        data: [
<?php
$Result = 0;
foreach ($Muebles as $Muebles2) {
    if ($Muebles2->Estado == 'Bueno') {
        $Result = $Result + 1;
    }
}
echo $Result;
?>
                        ]
                },
                {
                label: "Regular",
                        fillColor : "rgba(253,180,92,0.5)",
                        strokeColor : "rgba(253,180,92,0.8)",
                        highlightFill : "rgba(253,180,92,0.75)",
                        highlightStroke : "rgba(253,180,92,1)",
                        data: [
<?php
$Result = 0;
foreach ($Muebles as $Muebles2) {
    if ($Muebles2->Estado == 'Regular') {
        $Result = $Result + 1;
    }
}
echo $Result;
?>
                        ]
                },
                {
                label: "Malo",
                        fillColor : "rgba(217,112,65,0.5)",
                        strokeColor : "rgba(217,112,65,0.8)",
                        highlightFill : "rgba(217,112,65,0.75)",
                        highlightStroke : "rgba(217,112,65,1)",
                        data: [
<?php
$Result = 0;
foreach ($Muebles as $Muebles2) {
    if ($Muebles2->Estado == 'Malo') {
        $Result = $Result + 1;
    }
}
echo $Result;
?>
                        ]
                },
                ]

        };
        var Barras3 = document.getElementById("Barra3").getContext("2d");
        window.myBarra3 = new Chart(Barras3).Bar(data3, {
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
        legend(document.getElementById("legendDiv3"), data3);
        // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
    </script> 


    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Entradas y salidas del material
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-6 col-xs-12">
        <canvas id="BarraM" />
        </br>
    </div>
    <div id="legendDivM" class="col-md-6 col-xs-12 doughnut-legend" >
    </div>





    <script>
        var dataM = {
        labels: [
<?php
foreach ($Material as $Material1) {
    echo '"' . $Material1->Material . '",';
}
?>
        ],
                datasets: [
                {
                label: "Existencia",
                        fillColor : "rgba(247,70,74,0.5)",
                        strokeColor : "rgba(247,70,74,0.8)",
                        highlightFill: "rgba(247,70,74,0.75)",
                        highlightStroke: "rgba(247,70,74,1)",
                        data: [
<?php
foreach ($Material as $Material2) {
    echo $Material2->Unidades . ',';
}
?>
                        ]
                },
                {
                label: "Salidas",
                        fillColor : "rgba(253,180,92,0.5)",
                        strokeColor : "rgba(253,180,92,0.8)",
                        highlightFill : "rgba(253,180,92,0.75)",
                        highlightStroke : "rgba(253,180,92,1)",
                        data: [
<?php
foreach ($Material as $Material3) {
    $suma = 0;
    foreach ($SalMaterial as $SalMaterial3) {
        if ($SalMaterial3->MaterialID == $Material3->ID) {
            $suma = $suma + $SalMaterial3->Unidades;
        }
    }
    echo $suma . ',';
}
?>
                        ]
                },
                ]

        };
        var BarrasM = document.getElementById("BarraM").getContext("2d");
        window.myBarraM = new Chart(BarrasM).Bar(dataM, {
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
        legend(document.getElementById("legendDivM"), dataM);
        // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
    </script>





    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Solicitudes de transporte
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-6 col-xs-12">
        <canvas id="Barra4" />
        </br>
    </div>
    <div id="legendDiv4" class="col-md-6 col-xs-12 doughnut-legend" >
    </div>





    <script>
        var data4 = {
        labels : ["Total", "Aprobados", "No aprobados", "Pendientes"],
                datasets: [
<?php
$R = 410;
$G = - 80;
$B = - 77;
foreach ($Unidad as $Unidad1) {
    ?>
                    { <?php
    $R = abs($R - 170);
    $G = $G + 150;
    if ($G > 255) {
        $G = $G - 255;
    }
    $B = $B + 151;
    if ($B > 255) {
        $B = $B - 255;
    }
    ?>
                    label: <?php echo '"' . $Unidad1->Marca . ' ' . $Unidad1->Tipo . ' ' . $Unidad1->Modelo . ' ' . $Unidad1->Color . '",'; ?>
                    fillColor : <?php echo '"rgba(' . $R . ',' . $G . ',' . $B . ',0.5)",'; ?>
                    strokeColor : <?php echo '"rgba(' . $R . ',' . $G . ',' . $B . ',0.8)",'; ?>
                    highlightFill: <?php echo '"rgba(' . $R . ',' . $G . ',' . $B . ',0.75)",'; ?>
                    highlightStroke: <?php echo '"rgba(' . $R . ',' . $G . ',' . $B . ',1)",'; ?>
                    data: [
    <?php
    $resultado = 0;
    $AprTr1 = 0;
    $AprTr2 = 0;
    $AprTr3 = 0;
    foreach ($SolTrans as $SolTrans1) {
        if ($SolTrans1->IDUnidad == $Unidad1->IDUnidad) {
            $resultado = $resultado + 1;
        }
        if ($SolTrans1->IDUnidad == $Unidad1->IDUnidad && $SolTrans1->Estado == 'Aprobado') {
            $AprTr1 = $AprTr1 + 1;
        }
        if ($SolTrans1->IDUnidad == $Unidad1->IDUnidad && $SolTrans1->Estado == 'No aprobado') {
            $AprTr2 = $AprTr2 + 1;
        }
        if ($SolTrans1->IDUnidad == $Unidad1->IDUnidad && $SolTrans1->Estado == 'Pendiente') {
            $AprTr3 = $AprTr3 + 1;
        }
    }
    ?>
    <?php echo $resultado ?>, <?php echo $AprTr1 ?>, <?php echo $AprTr2 ?>, <?php echo $AprTr3 ?>
                    ]
                    },
<?php } ?>
                ]

        };
        var Barras4 = document.getElementById("Barra4").getContext("2d");
        window.myBarra4 = new Chart(Barras4).Bar(data4, {
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
        legend(document.getElementById("legendDiv4"), data4);
        // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
    </script> 








    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Solicitudes de incapacidades
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-6 col-xs-12">
        <canvas id="Barra5" />
        </br>
    </div>
    <div id="legendDiv5" class="col-md-6 col-xs-12 doughnut-legend" >
    </div>


    <?php
    $Result1 = 0;
    $Result2 = 0;
    $Result3 = 0;
    $Result4 = 0;
    foreach ($Incapacidades as $Incapacidades1) {
        $Result1 = $Result1 + 1;
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->TAusencia == 'Incapacidad') {
            $Result2 = $Result2 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->TAusencia == 'Ausencia con permiso') {
            $Result3 = $Result3 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->TAusencia == 'Inasistencia') {
            $Result4 = $Result4 + 1;
        }
    }

    $NHoras1 = 0;
    $NHoras2 = 0;
    $NHoras3 = 0;
    $NHoras4 = 0;
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Aprobado') {
            $NHoras1 = $NHoras1 + $Incapacidades1->NHoras;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->TAusencia == 'Incapacidad' && $Incapacidades1->Estado == 'Aprobado') {
            $NHoras2 = $NHoras2 + $Incapacidades1->NHoras;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->TAusencia == 'Ausencia con permiso' && $Incapacidades1->Estado == 'Aprobado') {
            $NHoras3 = $NHoras3 + $Incapacidades1->NHoras;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->TAusencia == 'Inasistencia' && $Incapacidades1->Estado == 'Aprobado') {
            $NHoras4 = $NHoras4 + $Incapacidades1->NHoras;
        }
    }

    $Ap1 = 0;
    $Ap2 = 0;
    $Ap3 = 0;
    $Ap4 = 0;
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Aprobado') {
            $Ap1 = $Ap1 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Aprobado' && $Incapacidades1->TAusencia == 'Incapacidad') {
            $Ap2 = $Ap2 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Aprobado' && $Incapacidades1->TAusencia == 'Ausencia con permiso') {
            $Ap3 = $Ap3 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Aprobado' && $Incapacidades1->TAusencia == 'Inasistencia') {
            $Ap4 = $Ap4 + 1;
        }
    }

    $Nap1 = 0;
    $Nap2 = 0;
    $Nap3 = 0;
    $Nap4 = 0;
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'No aprobado') {
            $Nap1 = $Nap1 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'No aprobado' && $Incapacidades1->TAusencia == 'Incapacidad') {
            $Nap2 = $Nap2 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'No aprobado' && $Incapacidades1->TAusencia == 'Ausencia con permiso') {
            $Nap3 = $Nap3 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'No aprobado' && $Incapacidades1->TAusencia == 'Inasistencia') {
            $Nap4 = $Nap4 + 1;
        }
    }

    $Pen1 = 0;
    $Pen2 = 0;
    $Pen3 = 0;
    $Pen4 = 0;
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Pendiente') {
            $Pen1 = $Pen1 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Pendiente' && $Incapacidades1->TAusencia == 'Incapacidad') {
            $Pen2 = $Pen2 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Pendiente' && $Incapacidades1->TAusencia == 'Ausencia con permiso') {
            $Pen3 = $Pen3 + 1;
        }
    }
    foreach ($Incapacidades as $Incapacidades1) {
        if ($Incapacidades1->Estado == 'Pendiente' && $Incapacidades1->TAusencia == 'Inasistencia') {
            $Pen4 = $Pen4 + 1;
        }
    }
    ?> 



    <script>
        var data5 = {
        labels : ["Total", "Incapacidad", "Ausencia con permiso", "Inasistencia"],
                datasets : [
                {
                label: "Número de solicitudes",
                        fillColor : "rgba(247,70,74,0.5)",
                        strokeColor : "rgba(247,70,74,0.8)",
                        highlightFill: "rgba(247,70,74,0.75)",
                        highlightStroke: "rgba(247,70,74,1)",
                        data : [ <?php echo $Result1 ?>, <?php echo $Result2 ?>, <?php echo $Result3 ?>, <?php echo $Result4 ?> ]
                },
                {
                label: "Número de horas aprobadas",
                        fillColor : "rgba(233,76,128,0.5)",
                        strokeColor : "rgba(233,76,128,0.8)",
                        highlightFill : "rgba(233,76,128,0.75)",
                        highlightStroke : "rgba(233,76,128,1)",
                        data : [ <?php echo $NHoras1 ?>, <?php echo $NHoras2 ?>, <?php echo $NHoras3 ?>, <?php echo $NHoras4 ?> ]
                },
                {
                label: "Aprobados",
                        fillColor : "rgba(70,191,189,0.5)",
                        strokeColor : "rgba(70,191,189,0.8)",
                        highlightFill : "rgba(70,191,189,0.75)",
                        highlightStroke : "rgba(70,191,189,1)",
                        data : [ <?php echo $Ap1 ?>, <?php echo $Ap2 ?>, <?php echo $Ap3 ?>, <?php echo $Ap4 ?> ]
                },
                {
                label: "No aprobados",
                        fillColor : "rgba(253,180,92,0.5)",
                        strokeColor : "rgba(253,180,92,0.8)",
                        highlightFill : "rgba(253,180,92,0.75)",
                        highlightStroke : "rgba(253,180,92,1)",
                        data : [ <?php echo $Nap1 ?>, <?php echo $Nap2 ?>, <?php echo $Nap3 ?>, <?php echo $Nap4 ?> ]
                },
                {
                label: "Pendientes",
                        fillColor : "rgba(217,112,65,0.5)",
                        strokeColor : "rgba(217,112,65,0.8)",
                        highlightFill : "rgba(217,112,65,0.75)",
                        highlightStroke : "rgba(217,112,65,1)",
                        data : [ <?php echo $Pen1 ?>, <?php echo $Pen2 ?>, <?php echo $Pen3 ?>, <?php echo $Pen4 ?> ]
                },
                ]

        };
        var Barras5 = document.getElementById("Barra5").getContext("2d");
        window.myBarra5 = new Chart(Barras5).Bar(data5, {
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
        legend(document.getElementById("legendDiv5"), data5);
        // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
    </script> 


    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Adquisiciones con proveedores
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>

    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="pie2"/>
        </div>
        <div id="dona-legend2" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>



    <?php
    $adquisiciones = 0;
    $bienes = 0;
    $servicios = 0;
    foreach ($MovProveedores as $MovProveedores1) {
        if ($MovProveedores1->Adquiere == 'Bien') {
            $bienes = $bienes + 1;
        }
        if ($MovProveedores1->Adquiere == 'Servicio') {
            $servicios = $servicios + 1;
        }
        $adquisiciones = $adquisiciones + 1;
    }

    if ($adquisiciones) {
        $Pbienes = ($bienes * 100) / $adquisiciones;
        $Pservicios = ($servicios * 100) / $adquisiciones;
    } else {
        $Pbienes = '0';
        $Pservicios = '0';
    }
    ?>
    <script>
        var doughnutData2 = [
        {
        value: <?php echo $Pbienes ?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Bienes"
        },
        {
        value: <?php echo $Pservicios ?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Servicios"
        }
        ];
        //window.onload2 = function(){
        var pastel2 = document.getElementById("pie2").getContext("2d");
        window.myPie2 = new Chart(pastel2).Doughnut(doughnutData2, {
        responsive : true,
                segmentStrokeWidth : 0.5,
                percentageInnerCutout : 40,
                animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
        });
        //});

        var helpers = Chart.helpers;
        var legendHolder = document.getElementById('dona-legend2')
                legendHolder.innerHTML = myPie2.generateLegend();
        helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
        helpers.addEvent(legendNode, 'mouseover', function(){
        var activeSegment = myPie2.segments[index];
        activeSegment.save();
        activeSegment.fillColor = activeSegment.highlightColor;
        myPie2.showTooltip([activeSegment]);
        activeSegment.restore();
        });
        });
        helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
        myPie2.draw();
        });</script>








    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Clientes por sector
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="pie"></canvas>
        </div>
        <div id="pie-legend" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>




    <script>
        var pieData = [
        {
        value: <?php echo $R1 ?>,
                color:"#000000",
                label: "Agricultura"
        },
        {
        value : <?php echo $R2 ?>,
                color : "#595959",
                label: "Comercial"
        },
        {
        value : <?php echo $R3 ?>,
                color : "#cc4144",
                label: "Comunicación"
        },
        {
        value : <?php echo $R4 ?>,
                color : "#cc1f23",
                label: "De la administración"
        },
        {
        value : <?php echo $R5 ?>,
                color : "#c11d54",
                label: "De la construcción"
        },
        {
        value : <?php echo $R6 ?>,
                color : "#c0466f",
                label: "Energético"
        },
        {
        value : <?php echo $R7 ?>,
                color : "#b24b83",
                label: "Financiero"
        },
        {
        value : <?php echo $R8 ?>,
                color : "#40a3a1",
                label: "Ganadería"
        },
        {
        value : <?php echo $R9 ?>,
                color : "#148583",
                label: "Industrial"
        },
        {
        value : <?php echo $R10 ?>,
                color : "#f4ee46",
                label: "Investigación"
        },
        {
        value : <?php echo $R11 ?>,
                color : "#d09953",
                label: "Minero"
        },
        {
        value : <?php echo $R12 ?>,
                color : "#b5653f",
                label: "Pesquero"
        },
        {
        value : <?php echo $R13 ?>,
                color : "#954620",
                label: "Salud"
        },
        {
        value : <?php echo $R14 ?>,
                color : "#57bf9e",
                label: "Servicios"
        },
        {
        value : <?php echo $R15 ?>,
                color : "#f2f2f2",
                label: "Silvícola"
        },
        {
        value : <?php echo $R16 ?>,
                color : "#dbeef4",
                label: "Transporte"
        },
        {
        value : <?php echo $R17 ?>,
                color : "#69D2E7",
                label: "Turismo"
        },
        ];
        //window.onload2 = function(){
        var pastel = document.getElementById("pie").getContext("2d");
        window.myPie = new Chart(pastel).Doughnut(pieData, {
        responsive : true,
                segmentStrokeWidth : 0.5,
                percentageInnerCutout : 40,
                animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
        });
        //});

        var helpers = Chart.helpers;
        var legendHolder = document.getElementById('pie-legend')
                legendHolder.innerHTML = myPie.generateLegend();
        helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
        helpers.addEvent(legendNode, 'mouseover', function(){
        var activeSegment = myPie.segments[index];
        activeSegment.save();
        activeSegment.fillColor = activeSegment.highlightColor;
        myPie.showTooltip([activeSegment]);
        activeSegment.restore();
        });
        });
        helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
        myPie.draw();
        });</script>









    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Ingresos y egresos
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="line1"></canvas>
        </div>
        <div id="line-legend1" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>


    <?php
    $I = 0;
    $IEne = 0;
    $IFeb = 0;
    $IMar = 0;
    $IAbr = 0;
    $IMay = 0;
    $IJun = 0;
    $IJul = 0;
    $IAgo = 0;
    $ISep = 0;
    $IOct = 0;
    $INov = 0;
    $IDic = 0;
    foreach ($Ingresos as $Ingresos1) {
        $FechaI = date_create_from_format('d/m/Y', $Ingresos1->ReciboFechaPago);
        $IngresoAnio = date_format($FechaI, 'Y');
        $IngresoMes = date_format($FechaI, 'm');
        if ($IngresoAnio == date("Y")) {
            switch ($IngresoMes) {
                case 1: $IEne = $IEne + $Ingresos1->ReciboCantidad;
                    break;
                case 2: $IFeb = $IFeb + $Ingresos1->ReciboCantidad;
                    break;
                case 3: $IMar = $IMar + $Ingresos1->ReciboCantidad;
                    break;
                case 4: $IAbr = $IAbr + $Ingresos1->ReciboCantidad;
                    break;
                case 5: $IMay = $IMay + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $IJun = $IJun + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $IJul = $IJul + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $IAgo = $IAgo + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $ISep = $ISep + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $IOct = $IOct + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $INov = $INov + $Ingresos1->ReciboCantidad;
                    break;
                case 6: $IDic = $IDic + $Ingresos1->ReciboCantidad;
                    break;
            }
        }
    }


    $E = 0;
    $Ene = 0;
    $Feb = 0;
    $Mar = 0;
    $Abr = 0;
    $May = 0;
    $Jun = 0;
    $Jul = 0;
    $Ago = 0;
    $Sep = 0;
    $Oct = 0;
    $Nov = 0;
    $Dic = 0;
    foreach ($Egresos as $Egresos1) {
        $FechaE = date_create_from_format('d/m/Y', $Egresos1->FechaPago);
        $EgresoAnio = date_format($FechaE, 'Y');
        $EgresoMes = date_format($FechaE, 'm');
        if ($EgresoAnio == date("Y")) {
            switch ($EgresoMes) {
                case 1: $Ene = $Ene + $Egresos1->Monto;
                    break;
                case 2: $Feb = $Feb + $Egresos1->Monto;
                    break;
                case 3: $Mar = $Mar + $Egresos1->Monto;
                    break;
                case 4: $Abr = $Abr + $Egresos1->Monto;
                    break;
                case 5: $May = $May + $Egresos1->Monto;
                    break;
                case 6: $Jun = $Jun + $Egresos1->Monto;
                    break;
                case 6: $Jul = $Jul + $Egresos1->Monto;
                    break;
                case 6: $Ago = $Ago + $Egresos1->Monto;
                    break;
                case 6: $Sep = $Sep + $Egresos1->Monto;
                    break;
                case 6: $Oct = $Oct + $Egresos1->Monto;
                    break;
                case 6: $Nov = $Nov + $Egresos1->Monto;
                    break;
                case 6: $Dic = $Dic + $Egresos1->Monto;
                    break;
            }
        }
    }
    ?>
    <script>
        var lineChartData1 = {
        labels : ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                datasets : [
                {
                label: "Ingresos",
                        fillColor : "rgba(247,28,33,0.4)",
                        strokeColor : "rgba(247,28,33,0.8)",
                        pointColor : "rgba(247,28,33,1)",
                        pointStrokeColor : "rgba(28,43,45,0.8)",
                        pointHighlightFill : "rgba(247,28,33,0.75)",
                        pointHighlightStroke : "rgba(247,28,33,1)",
                        data : [ <?php echo $IEne; ?>, <?php echo $IFeb; ?>, <?php echo $IMar; ?>, <?php echo $IAbr; ?>, <?php echo $IMay; ?>, <?php echo $IJun; ?>, <?php echo $IJul; ?>, <?php echo $IAgo; ?>, <?php echo $ISep; ?>, <?php echo $IOct; ?>, <?php echo $INov; ?>, <?php echo $IDic; ?> ]
                },
                {
                label: "Egresos",
                        fillColor : "rgba(18,155,153,0.4)",
                        strokeColor : "rgba(18,155,153,0.8)",
                        pointStrokeColor : "rgba(28,43,45,0.8)",
                        pointHighlightFill : "rgba(18,155,153,0.75)",
                        pointHighlightStroke : "rgba(18,155,153,1)",
                        data : [ <?php echo $Ene; ?>, <?php echo $Feb; ?>, <?php echo $Mar; ?>, <?php echo $Abr; ?>, <?php echo $May; ?>, <?php echo $Jun; ?>, <?php echo $Jul; ?>, <?php echo $Ago; ?>, <?php echo $Sep; ?>, <?php echo $Oct; ?>, <?php echo $Nov; ?>, <?php echo $Dic; ?> ]
                }
                ]

        }



        var lines2 = document.getElementById("line1").getContext("2d");
        window.myLine1 = new Chart(lines2).Line(lineChartData1, {
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
        legend(document.getElementById("line-legend1"), lineChartData1);</script>







    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Trámites de Seguridad Social
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="Polar1"></canvas>
        </div>
        <div id="polar-legend1" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>

    <?php
    $A1 = 0;
    $A2 = 0;
    $A3 = 0;
    $A4 = 0;
    $A5 = 0;
    $A6 = 0;
    foreach ($ID_cliente as $Directorio2) {
        switch ($Directorio2->SS_1) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_2) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_3) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_4) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_5) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_6) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_7) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_8) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_9) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_10) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_11) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_12) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_13) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_14) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_15) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_18) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_19) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
        switch ($Directorio2->SS_20) {
            case 0: break;
            case 1: $A1 = $A1 + 1;
                break;
            case 2: $A2 = $A2 + 1;
                break;
            case 3: $A3 = $A3 + 1;
                break;
            case 4: $A4 = $A4 + 1;
                break;
            case 5: $A5 = $A5 + 1;
                break;
            case 6: $A6 = $A6 + 1;
                break;
        }
    }
    ?>
    <script>

        var polarData1 = [
        {
        value: <?php echo $A1; ?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "En proceso"
        },
        {
        value: <?php echo $A2; ?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Concluído"
        },
        {
        value: <?php echo $A3; ?>,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Notificación interna"
        },
        {
        value: <?php echo $A4; ?>,
                color: "#949FB1",
                highlight: "#A8B3C5",
                label: "Notificación externa"
        },
        {
        value: <?php echo $A5; ?>,
                color: "#4D5360",
                highlight: "#616774",
                label: "Integrado al expediente"
        }

        ];
        var Polars1 = document.getElementById("Polar1").getContext("2d");
        window.myPolar1 = new Chart(Polars1).PolarArea(polarData1, {
        animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
                scaleFontSize : 6.5,
                scaleFontColor : "#666666",
                scaleBeginAtZero : true,
                segmentShowStroke : true,
                segmentStrokeColor : "#fff",
                segmentStrokeWidth : 0.5,
                scaleShowGridLines : true,
                scaleGridLineColor : "rgba(255,255,255,.05)",
                scaleGridLineWidth : 1,
                responsive : true
        });
        //legend(document.getElementById("polar-legend1"), polarData1);

        var helpers = Chart.helpers;
        var legendHolder = document.getElementById('polar-legend1')
                legendHolder.innerHTML = myPolar1.generateLegend();
        helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
        helpers.addEvent(legendNode, 'mouseover', function(){
        var activeSegment = myPolar1.segments[index];
        activeSegment.save();
        activeSegment.fillColor = activeSegment.highlightColor;
        myPolar1.showTooltip([activeSegment]);
        activeSegment.restore();
        });
        });
        helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
        myPolar1.draw();
        });</script>








    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Trámites de Contabilidad
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="Polar2"></canvas>
        </div>
        <div id="polar-legend2" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>

    <?php
    $B1 = 0;
    $B2 = 0;
    $B3 = 0;
    $B4 = 0;
    $B5 = 0;
    $B6 = 0;
    foreach ($ID_cliente as $Directorio3) {
        switch ($Directorio3->CBalance) {
            case 0: break;
            case 1: $B1 = $B1 + 1;
                break;
            case 2: $B2 = $B2 + 1;
                break;
            case 3: $B3 = $B3 + 1;
                break;
            case 4: $B4 = $B4 + 1;
                break;
            case 5: $B5 = $B5 + 1;
                break;
            case 6: $B6 = $B6 + 1;
                break;
        }
        switch ($Directorio3->CEstado) {
            case 0: break;
            case 1: $B1 = $B1 + 1;
                break;
            case 2: $B2 = $B2 + 1;
                break;
            case 3: $B3 = $B3 + 1;
                break;
            case 4: $B4 = $B4 + 1;
                break;
            case 5: $B5 = $B5 + 1;
                break;
            case 6: $B6 = $B6 + 1;
                break;
        }
        switch ($Directorio3->CBalanceCP) {
            case 0: break;
            case 1: $B1 = $B1 + 1;
                break;
            case 2: $B2 = $B2 + 1;
                break;
            case 3: $B3 = $B3 + 1;
                break;
            case 4: $B4 = $B4 + 1;
                break;
            case 5: $B5 = $B5 + 1;
                break;
            case 6: $B6 = $B6 + 1;
                break;
        }
        switch ($Directorio3->CEdoAnual) {
            case 0: break;
            case 1: $B1 = $B1 + 1;
                break;
            case 2: $B2 = $B2 + 1;
                break;
            case 3: $B3 = $B3 + 1;
                break;
            case 4: $B4 = $B4 + 1;
                break;
            case 5: $B5 = $B5 + 1;
                break;
            case 6: $B6 = $B6 + 1;
                break;
        }
        switch ($Directorio3->CEdoDIOT) {
            case 0: break;
            case 1: $B1 = $B1 + 1;
                break;
            case 2: $B2 = $B2 + 1;
                break;
            case 3: $B3 = $B3 + 1;
                break;
            case 4: $B4 = $B4 + 1;
                break;
            case 5: $B5 = $B5 + 1;
                break;
            case 6: $B6 = $B6 + 1;
                break;
        }
    }
    ?>
    <script>

        var polarData2 = [
        {
        value: <?php echo $B1; ?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "En proceso"
        },
        {
        value: <?php echo $B2; ?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Concluído"
        },
        {
        value: <?php echo $B6; ?>,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Notificación interna"
        },
        {
        value: <?php echo $B4; ?>,
                color: "#949FB1",
                highlight: "#A8B3C5",
                label: "Notificación externa"
        },
        {
        value: <?php echo $B5; ?>,
                color: "#4D5360",
                highlight: "#616774",
                label: "Integrado al expediente"
        }

        ];
        var Polars2 = document.getElementById("Polar2").getContext("2d");
        window.myPolar2 = new Chart(Polars2).PolarArea(polarData2, {
        animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
                scaleFontSize : 6.5,
                scaleFontColor : "#666666",
                scaleBeginAtZero : true,
                segmentShowStroke : true,
                segmentStrokeColor : "#fff",
                segmentStrokeWidth : 0.5,
                scaleShowGridLines : true,
                scaleGridLineColor : "rgba(255,255,255,.05)",
                scaleGridLineWidth : 1,
                responsive : true
        });
        //legend(document.getElementById("polar-legend1"), polarData1);

        var helpers = Chart.helpers;
        var legendHolder = document.getElementById('polar-legend2')
                legendHolder.innerHTML = myPolar2.generateLegend();
        helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
        helpers.addEvent(legendNode, 'mouseover', function(){
        var activeSegment = myPolar2.segments[index];
        activeSegment.save();
        activeSegment.fillColor = activeSegment.highlightColor;
        myPolar2.showTooltip([activeSegment]);
        activeSegment.restore();
        });
        });
        helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
        myPolar2.draw();
        });</script>




    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Metas de la Organización
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>




    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="Radar1"></canvas>
        </div>
        <div id="radar-legend1" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>
    </div>   



    <script>
        var radarChartData1 = {

        labels: [
<?php
foreach ($Metas as $Metas1) {
    echo '"Meta ' . $Metas1->ID . '",';
}
?>
        ],
                datasets: [
                {
                label: "Meta al mes",
                        fillColor: "rgba(20,133,131,0.2)",
                        strokeColor: "rgba(20,133,131,1)",
                        pointColor: "rgba(20,133,131,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#249290",
                        pointHighlightStroke: "rgba(20,133,131,1)",
                        data: [
<?php
foreach ($Metas as $Metas2) {
    if (empty($Metas2->MetaxMes)) {
        $Result = 0;
    } else {
        $Result = ($Metas2->Rn * 100) / ($Metas2->MetaxMes);
    }
    if ($Result > 100) {
        echo '100,';
    } else {
        echo $Result . ',';
    }
}
?>
                        ]
                },
                {
                label: "Meta al año",
                        fillColor: "rgba(70,191,189,0.2)",
                        strokeColor: "rgba(70,191,189,1)",
                        pointColor: "rgba(70,191,189,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#46bfbd",
                        pointHighlightStroke: "rgba(70,191,189,1)",
                        data: [
<?php
foreach ($Metas as $Metas3) {
    if (empty($Metas3->Meta1anos)) {
        $Result = 0;
    } else {
        $Result = ($Metas3->Rn * 100) / ($Metas3->Meta1anos);
    }
    if ($Result > 100 || empty($Metas)) {
        echo '100,';
    } else {
        echo $Result . ',';
    }
}
?>
                        ]
                }
                ]
        };
        var Radars1 = document.getElementById("Radar1").getContext("2d");
        window.myRadar1 = new Chart(Radars1).Radar(radarChartData1, {
        animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
                scaleFontSize : 6.5,
                scaleFontColor : "#666666",
                scaleBeginAtZero : true,
                segmentShowStroke : true,
                segmentStrokeColor : "#fff",
                segmentStrokeWidth : 0.5,
                scaleShowGridLines : false,
                scaleGridLineColor : "rgba(255,255,255,.05)",
                scaleGridLineWidth : 1,
                angleLineColor : "rgba(255,255,255,.1)",
                angleLineWidth : 1,
                datasetStroke : true,
                datasetStrokeWidth : 2,
                responsive : true
        });
        legend(document.getElementById("radar-legend1"), radarChartData1);</script>


    <table width="100%">
        <tr>
            <td align="left">
                <strong style="color:#000">
                    Metas de la Organización
                </strong>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ff6600" align="left">
                <strong style="color:#FFF">
                    Estatus
                </strong>
                <?php echo date('d/m/y'); ?>
            </td>
        </tr>
    </table>  


    <div class="col-md-12 col-xs-12" align="center">
        <div class="col-md-6 col-xs-12" >
            <canvas id="cvs" ></canvas>
        </div>
    </div> 

    <script>
        $(document).ready(function ()
        {
        var canvas = document.getElementById("cvs");
        RGraph.Reset(canvas);
        canvas.width = $(window).width() * 0.8;
        canvas.height = $(window).width() * 0.25;
        var text_size = Math.min(5, ($(window).width() / 1000) * 10);
        var linewidth = $(window).width() > 500 ? 2 : 1;
        linewidth = $(window).width() > 750 ? 3 : linewidth;
        // Reset the translation fix so that it gets applied again
        canvas.__rgraph_aa_translated__ = false;
        var data = [
        [31, 28, 67, 'Tarea 1', 'red'], [0, 28, 50, 'Tarea 2'], [12, 28, 45, 'Tarea 3'],
        [59, 14, 0, 'Tarea 4'], [59, 21, 5, 'Tarea 5'], [46, 31, 92, 'Tarea 6'],
        [80, 21, 46, 'Tarea 7'], [94, 17, 84, 'Tarea 8'], [34, 14, 32, 'Tarea 9'],
        [64, 14, 28, 'Tarea 10']
        ];
        var gantt = new RGraph.Gantt({
        id: 'cvs',
                data: data,
                options: {
                labels: ['Enero', 'Febreo', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        xmax: 365,
                        'text.size': 8,
                        'labels.percent': true
                }
        }).draw();
        });
    </script>












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




    <?php echo form_open_multipart('controlador/Regresar'); ?>     
    <table  width="100%">
        <tr>
            <td width="80%">
            </td>
            <td width="20%">
                <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
            </td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>