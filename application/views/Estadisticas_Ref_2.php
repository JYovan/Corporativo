<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Informes gráficos</title>
        <script src="<?php echo base_url(); ?>js/Chart/Chart.js"></script>
        <script src="<?php echo base_url(); ?>js/Chart/Chart.min.js"></script>
        <script src="<?php echo base_url(); ?>js/Chart/legend.js"></script>


        <script>
            function addText() {

                var canvas = document.getElementById("chart-area");
                var ctx = document.getElementById("chart-area").getContext("2d");

                var cx = canvas.width / 3;
                var cy = canvas.height / 3;

                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.font = '14px verdana';
                ctx.fillStyle = '#FFFFFF';
                ctx.fillText("Estatus", cx, cy);

            }

        </script>

    </head>

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
                    $Ar = 0;
                    $Aa = 0;
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
                    ?> 

                </td>
            </tr>
        </table>

        <form action="Estadisticas_Ref.php" method="POST">
            <table width="100%" border="1" bordercolor="#FF6633">
                <tr>
                    <td align="left">
                        <strong style="color:#FFF">
                            ESTADISTICA<BR />
                        </strong>
                    </td>
                </tr>
            </table>

            <div class="col-md-6 col-xs-12">
                <canvas id="chartDiv" />
                </br>
            </div>
            <div id="legendDiv" class="col-md-6 col-xs-12 doughnut-legend" >
            </div>


            <script>
                var randomScalingFactor = function () {
                    return Math.round(Math.random() * 100)
                };

                var data = {
                    labels: ["Administrativo", "Fiscal", "Contable", "Jurídico", "Vinculación"],
                    datasets: [
                        {
                            label: "Registrado",
                            fillColor: "rgba(220,220,220,0.5)",
                            strokeColor: "rgba(220,220,220,0.8)",
                            highlightFill: "rgba(220,220,220,0.75)",
                            highlightStroke: "rgba(220,220,220,1)",
                            data: [<?php echo $Ar ?>,<?php echo $Fr ?>,<?php echo $Cr ?>,<?php echo $Jr ?>,<?php echo $Vr ?>]
                        },
                        {
                            label: "Asignado",
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,0.8)",
                            highlightFill: "rgba(151,187,205,0.75)",
                            highlightStroke: "rgba(151,187,205,1)",
                            data: [<?php echo $Aa ?>,<?php echo $Fa ?>,<?php echo $Ca ?>,<?php echo $Ja ?>,<?php echo $Va ?>]
                        },
                        {
                            label: "En proceso",
                            fillColor: "rgba(74,129,149,0.5)",
                            strokeColor: "rgba(74,129,149,0.8)",
                            highlightFill: "rgba(74,129,149,0.75)",
                            highlightStroke: "rgba(74,129,149,1)",
                            data: [<?php echo $Ap ?>,<?php echo $Fp ?>,<?php echo $Cp ?>,<?php echo $Jp ?>,<?php echo $Vp ?>]
                        }
                    ]

                };
                var myLineChart = new Chart(document.getElementById("chartDiv").getContext("2d")).Bar(data,
                        {
                            scaleShowGridLines: true,
                            scaleGridLineColor: "rgba(255,255,255,.05)",
                            scaleGridLineWidth: 1,
                            barShowStroke: true,
                            barStrokeWidth: 1,
                            responsive: true

                        });
                document.getElementById("legendDiv").innerHTML = myLineChart.generateLegend();
            </script> 

        </form> 


        <table  width="100%">
            <tr>
                <td width="80%">
                </td>
                <td width="20%" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=3&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>