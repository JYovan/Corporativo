<?php
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ctrlDispersion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->folder2 = 'uploads/Tramites/';
        $this->folder3 = 'uploads/Evidencias/';
        $this->folder4 = 'uploads/Inmuebles/';
        $this->folder5 = 'uploads/Muebles/';
        $this->folder6 = 'uploads/Material/';
        $this->folder7 = 'uploads/Accidentes/';
        $this->folder8 = 'uploads/Expediente/';
        $this->folder9 = 'uploads/Nomina/';
        $this->folder10 = 'uploads/SSExpediente/';
        $this->folder11 = 'uploads/InmuebleExp/';
        $this->folder12 = 'uploads/ViviendaExp/';
        $this->folder14 = 'uploads/TramitesExp/';
    }

    public function getNumberWithFormat() {
        $fn = '$ '.number_format($_POST["numero"], $_POST["ndecimales"], '.', ', ');
        print $fn;
    }

    /*     * *
     * REPORTE DE DISPERSIONES
     */

    public function ReporteDispersion() {
        $Ndesarrollo = $_POST["Ndesarrollo"];
        if ($Ndesarrollo !== null) {
            $Start = date_create_from_format('d/m/Y', $_POST["FechaInicioEdo"]);
            $StartFecha = date_format($Start, 'Ymd');
            $End = date_create_from_format('d/m/Y', $_POST["FechaTerminoEdo"]);
            $EndFecha = date_format($End, 'Ymd');
//Abriendo BD Proyectos
            $this->load->model("dispersion_model", "DisModel");
            $Dispersiones = $this->DisModel->getDispersiones($Ndesarrollo);
//        var_dump($Dispersiones);
            if ($Dispersiones != null) {
                ?>

                <div id="sReporteDispersion" class="col-xs-12 col-sm-12 " align="center">
                    <br> <i class="fa fa-pencil-square fa-3x"></i> <label  class="control-label"><h2> REPORTE DE DISPERSI&Oacute;N</h2></label><br>		
                </div>
                <div id="hrReporteDispersion" class="col-xs-12 col-sm-12 ">
                    <hr class="">
                </div>
                <div class="table table-responsive">
                    <table class="table-striped table-hover">
                        <thead>
                            <tr class="text-uppercase text-center">
                                <th>Número de dispersi&oacute;n</th>
                                <th>Notificación  a Fiduciaria</th>
                                <th>Notificación  a Rabina</th>
                                <th>Manzana</th>
                                <th>Lote</th>
                                <th>Vivienda</th>
                                <th>Modelo</th>
                                <th>Adquirente</th>
                                <th>Precio de venta</th>
                                <th>Pago por terreno</th>
                                <th>Pago por rendimientos</th>
                                <th>Total de ingreso</th>
                                <th>Cantidad dispersada</th>
                                <th>Fecha de dispersi&oacute;n</th>
                                <th>Referencia bancaria</th>
                            </tr>
                        </thead> 
                        <tbody>
                            </tr> 
                            <?php
                            $i = 0;
                            $total = 0;
                            foreach ($Dispersiones as $Dispersion) {
                                $Valor = date_create_from_format('d/m/Y', $Dispersion->FechaEntrega);
                                $fecha[$i] = date_format($Valor, 'Ymd');
                                $indice[$i] = $Dispersion->ID;
                                $i++;
                            }
                            $n = count($fecha);

                            for ($i = 0; $i < $n - 1; $i++) {
                                for ($j = 0; $j < $n - 1; $j++) {
                                    if ($fecha[$j] > $fecha[$j + 1]) {
                                        $aux = $fecha[$j];
                                        $aux2 = $indice[$j];

                                        $fecha[$j] = $fecha[$j + 1];
                                        $indice[$j] = $indice[$j + 1];

                                        $fecha[$j + 1] = $aux;
                                        $indice[$j + 1] = $aux2;
                                    }
                                }
                            }
                            $k = 0;
                            foreach ($Dispersiones as $Dispersion) {
                                $k++;
                                //$Valor=$Edocuenta1->FechaCobro;
                                $Valor = date_create_from_format('d/m/Y', $Dispersion->FechaNot);
                                $fecha = date_format($Valor, 'Ymd');
                                //$fecha = strtotime($Valor);
                                if ($fecha >= $StartFecha && $fecha <= $EndFecha) {
                                    //Abriendo BD Proyectos
                                    $this->load->model("modelo", "Modelos");
                                    $Modelos = $this->Modelos->getModelos($Dispersion->Manzana, $Dispersion->Lotes);
                                    $ModelitoCasa = ' ';
                                    foreach ($Modelos as $Modelos1) {
                                        $ModelitoCasa = $Modelos1->Modelo;
                                    }
                                    if ($k % 2) {
                                        ?>
                                        <tr class="text-center">
                                            <td> 
                                                <?php
                                                for ($i = 0; $i < $n; $i++) {
                                                    if ($Dispersion->ID == $indice[$i]) {
                                                        $resulty = $i + 1;
                                                    }
                                                }
                                                echo $resulty
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $Valor1 = date_create_from_format('d/m/Y', $Dispersion->FechaEntrega);
                                                echo date_format($Valor1, 'd/m/y')
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $Valor2 = date_create_from_format('d/m/Y', $Dispersion->FechaNot);
                                                echo date_format($Valor2, 'd/m/y')
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $Dispersion->Manzana ?>
                                            </td>
                                            <td>
                                                <?php echo $Dispersion->Lotes ?>
                                            </td>
                                            <td>
                                                <?php echo $Dispersion->Viviendas ?>
                                            </td>
                                            <td>
                                                <?php echo "<h6>" . ucwords(strtolower($ModelitoCasa)) . "</h6>" ?>
                                            </td>
                                            <td>
                                                <?php echo "<h6>" . ucwords(strtolower($Dispersion->Adquirente)) . "</h6>" ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->PrecioVentaN, 2, '.', ',') ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->PagoTerreno, 2, '.', ',') ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->PagoRendimientos, 2, '.', ',') ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->TotalIng, 2, '.', ',') ?> 
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->CantidadDispersada, 2, '.', ',') ?> 
                                            </td>
                                            <td>
                                                <?php
                                                echo $Dispersion->FechaNotDis;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $Dispersion->ReferenciaTran;
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    } else {
                                        ?>
                                        <tr>
                                            <td> 
                                                <?php
                                                for ($i = 0; $i < $n; $i++) {
                                                    if ($Dispersion->ID == $indice[$i]) {
                                                        $resulty = $i + 1;
                                                    }
                                                }
                                                echo $resulty
                                                ?> 
                                            </td>
                                            <td>
                                                <?php
                                                $Valor1 = date_create_from_format('d/m/Y', $Dispersion->FechaEntrega);
                                                echo date_format($Valor1, 'd/m/y')
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $Valor2 = date_create_from_format('d/m/Y', $Dispersion->FechaNot);
                                                echo date_format($Valor2, 'd/m/y')
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $Dispersion->Manzana ?>
                                            </td>
                                            <td>
                                                <?php echo $Dispersion->Lotes ?>
                                            </td>
                                            <td>
                                                <?php echo $Dispersion->Viviendas ?>
                                            </td>
                                            <td>
                                                <?php echo "<h6>" . ucwords(strtolower($ModelitoCasa)) . "</h6>" ?>
                                            </td>
                                            <td>
                                                <?php echo "<h6>" . ucwords(strtolower($Dispersion->Adquirente)) . "</h6>" ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->PrecioVentaN, 2, '.', ',') ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->PagoTerreno, 2, '.', ',') ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->PagoRendimientos, 2, '.', ',') ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($Dispersion->TotalIng, 2, '.', ',') ?> 
                                            </td>
                                            <td>
                                        <?php echo number_format($Dispersion->CantidadDispersada, 2, '.', ',') ?> 
                                            </td>
                                        </tr>
                                        <?php
                                    }

                                    $total = $total + $Dispersion->TotalIng;
                                }
                            }
                            ?> 
                        </tbody>
                        <tfoot align="right">
                            <tr>
                                <td colspan="15">
                <?php echo "TOTAL = " . number_format($total, 2, '.', ',') ?> 
                                <td>
                            </tr>
                        </tfoot>
                    </table> 
                </div>
                <?php
            } else {
                echo '<div class="alert alert-dismissible alert-warning">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>ATENCI&Oacute;N!</h4>
                            <p>ESTE DESARROLLO NO TIENE REGISTROS DISPONIBLES EN EL RANGO DE FECHAS SELECCIONADO</p></div>';
            }
        }
    }

    /*
     * 
     * GRAFICO DE TRANSMISION VS DISPERSION
     * 
     */

    public function getGraficoDeTransmisionVSDispersion($Ndesarrollo, $FechaInicioEdo, $FechaTerminoEdo) {
        $this->load->model("dispersion_model", "DisModel");
        $this->load->model("modelo", "Transmisiones");
        $Transmisiones = $this->Transmisiones->getTransmisionesMonto($Ndesarrollo);
        $TransmisionesNoDispersadas = $this->DisModel->getTransmisionesNoDispersadas($Ndesarrollo);
        $TransmisionesIDX = json_decode(json_encode($Transmisiones), true);
        $TND = json_decode(json_encode($TransmisionesNoDispersadas), true);
        if (isset($TransmisionesIDX[0]['Transmisiones']) || $TransmisionesIDX[0]['Transmisiones'] != null || isset($TND[0]['Dispersiones']) || $TND[0]['Dispersiones'] != null) {
            $chart = "<!DOCTYPE html>";
            $chart .="<div class='xy-overflow-component'>";
            $chart .="<div class='col-md-12'>"
                    . "<canvas id='barTransmisionesVSDispersiones' class='col-md-12' width='800' height='300'></canvas>";
            $chart .="</div>";
            $chart .="</div>"
                    . "<script>";
            $chart .="$( document ).ready(function() {";
            $chart .='$("#hrTitulo").removeClass("hide");  ';
            $chart .='$("#sTituloTransVSDisp").removeClass("hide");  ';
            $chart .="Chart.defaults.global.scaleLabel = function(label){return label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, \".\");};";
            $chart .= 'var data = {labels : ["TRANSMISIONES", "DISPERSIONES", "TRANSMISIONES NO DISPERSADAS"], datasets : [';
            $chart .='{label: "$ ",
                            fillColor:  ["rgba(205,64,64,0.5)", "rgba(220,220,220,0.5)", "rgba(24,178,235,0.5)", "rgba(220,220,220,0.5)"],
                            strokeColor: "rgb(0,140,140)",
                            highlightFill: "rgb(0,179,179)",
                            highlightStroke: "rgb(0,179,179)",';
            $chart .='data: [' . $TransmisionesIDX[0]['Transmisiones'] . ' , ' . $TND[0]['Dispersiones'] . ', ' . ($TransmisionesIDX[0]['Transmisiones'] - $TND[0]['Dispersiones']) . ']';

            $chart .='} ]  };
//                console.log("Contexto");
//                console.log($("#barTransmisionesVSDispersiones"));
                            var Barras1 = $("#barTransmisionesVSDispersiones").get(0).getContext("2d");
                            if(Barras1 != undefined){
                            window.myBarra1 = new Chart(Barras1).Bar(data, {
                            animationEasing : "easeOutBounce",
                            multiTooltipTemplate : function (label) {
                            return label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");},
                                    animateRotate : true,
                                    animateScale : false,
                                    scaleFontSize : 12.5,
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
                                    // String - Template string for single tooltips
                                    //tooltipTemplate: "<%if (label){%><%=label %>: <%}%><%= \' $ \'+ value  %>",
                                    tooltipTemplate: function(v) {return getNumberWithFormat(v.value) },
                                    // String - Template string for multiple tooltips 
//                                    responsive : true,
                                    showTooltips: true, 
                            onAnimationComplete: function()
                            {   
                                this.showTooltip(this.datasets[0].bars, true);
                                
                            },
                            tooltipEvents: ["touchstart", "touchmove"]});
                            myBarra1.datasets[0].bars[0].fillColor = "rgb(0,179,179)";
                            myBarra1.datasets[0].bars[1].fillColor = "rgb(1,143,94)";
                            myBarra1.datasets[0].bars[2].fillColor = "rgb(255,128,0)";
                            myBarra1.datasets[0].bars[0].highlightFill = "rgb(0,217,217)";
                            myBarra1.datasets[0].bars[1].highlightFill = "rgb(109,217,0)";
                            myBarra1.datasets[0].bars[2].highlightFill = "rgb(255,191,0)";
                            myBarra1.datasets[0].bars[0].highlightStroke = "rgb(0,179,179)";
                            myBarra1.datasets[0].bars[1].highlightStroke = "rgb(1,143,94)";
                            myBarra1.datasets[0].bars[2].highlightStroke = "rgb(255,128,0)"; 
                            myBarra1.update();  
                            }else{
                  //          console.log("contexto");
                //console.log($("#barTransmisionesVSDispersiones"));
                            }        ';
            $chart .="});";
            $chart .="</script></html>";
            print $chart;
        } else {
            print '<br><div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <H2 CLASS="text-center">ESTE DESARROLLO NO TIENE MOVIMIENTOS</H2>
                    </div> </html>';
        }
    }

}
