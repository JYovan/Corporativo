<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlComportamientoDesarrollo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->load->model("modelo"); //SE CARGA EL MODELO PRINCIPAL
        $this->load->model("ComportamientoDesarrollo_Model"); //SE CARGA EL MODELO PRINCIPAL 
    }

    /*
     * DEVUELVE UN GRAFICO DE BARRAS SOBRE EL COMPORTAMIENTO DE COMERCIALIZACION DE LOS DESARROLLOS INMOBILIARIOS
     */

    private $defaultData = array(
        'title' => 'Rabina Corporacion',
        'layout' => 'layout/lytDefault',
        'contentView' => 'vUndefined',
    );

    private function _renderView($data = array()) {
        $data = array_merge($this->defaultData, $data);
        $this->load->view($data['layout'], $data);
    }

    public function index() {
        $data['scripts'] = array('cliente');
        $data['ctrlscripts'] = array('ctrlComportamientoDesarrollo');
        $data['contentView'] = 'vComportamientosDesarrollo';
        $this->_renderView($data);
    }

    public function getGraficoDeComportamientoCDI() {
        $gBarras = $this->ComportamientoDesarrollo_Model->getGraficoDeEstatusdelosProyectos();
        $dBarra = json_decode(json_encode($gBarras), true);
//        var_dump($dBarra);
        $labels = "";
        for ($index = 0; $index < count($dBarra); $index++) {
            $labels .='"' . $dBarra[$index]['Proyecto'] . '"';
            if ($index < count($dBarra) - 1) {
                $labels .=',';
            }
        }
//        var_dump($labels);
//         if (isset($dBarra[0]['Proyecto']) || $TransmisionesIDX[0]['Transmisiones'] != null || isset($TND[0]['Dispersiones']) || $TND[0]['Dispersiones'] != null) {
        $chart = "<!DOCTYPE html>";
        $chart .="<div class='xy-overflow-component'>";
        $chart .="<div class='col-md-12'>";
        $chart .= "<canvas id='barGraficoDeComportamientoCDI' class='col-md-12' width='800' height='250'></canvas>";
        $chart .= "<div id='CategoryBar' class='doughnut-legend col-md-2'></div>";
        $chart .="</div>";
        $chart .="</div>";
        $chart .= "<script>";
        $chart .="$( document ).ready(function() {";
//        $chart .="Chart.defaults.global.responsive = true;";
        $chart .='$("#hrTitulo").removeClass("hide");  ';
        $chart .='$("#sTituloTransVSDisp").removeClass("hide");  ';
        $chart .="Chart.defaults.global.scaleLabel = function(label){return label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, \".\");};";
        $chart .= 'var data = {labels: [' . $labels . '],datasets:[';
        //INICIO DE UN FOR PARA OBTENER LOS VALORES DE VIVIENDAS A CONSTRUIR
        $VAC = '';
        for ($indexvac = 0; $indexvac < count($dBarra); $indexvac++) {
            $VAC .= $dBarra[$indexvac]['ViviendasAConstruir'];
            if ($indexvac < count($dBarra) - 1) {
                $VAC .=',';
            }
        }
        $chart .='{
            label: "VIVIENDAS A CONSTRUIR",
            fillColor:  "rgb(0,102,76)",
                            strokeColor: "rgb(0,102,76)",
                            highlightFill: "rgb(0,132,99)",
                            highlightStroke: "rgb(0,102,76)",
            data: [' . $VAC . ']
        },';
        $AP = '';
        for ($indexap = 0; $indexap < count($dBarra); $indexap++) {
            $AP .= $dBarra[$indexap]['Apartados'];
            if ($indexap < count($dBarra) - 1) {
                $AP .=',';
            }
        }
        $chart .='{
            label: "APARTADOS",
            fillColor:  "rgb(115,220,255)",
                            strokeColor: "rgb(115,220,255)",
                            highlightFill: "rgb(164,233,255)",
                            highlightStroke: "rgb(0,179,179)",
            data: [' . $AP . ']
        },';
        $VIV = '';
        for ($indexaviv = 0; $indexaviv < count($dBarra); $indexaviv++) {
            $VIV .= $dBarra[$indexaviv]['Vendidas'];
            if ($indexaviv < count($dBarra) - 1) {
                $VIV .=',';
            }
        }
        $chart .='{
            label: "VIVIENDAS VENDIDAS",
            fillColor:  "rgb(163,217,0)",
                            strokeColor: "rgb(163,217,0)",
                            highlightFill: "rgb(200,255,34)",
                            highlightStroke: "rgb(0,179,179)",
            data: [' . $VIV . ']
        },';
        $VISV = '';
        for ($indexavisv = 0; $indexavisv < count($dBarra); $indexavisv++) {
            $VISV .= $dBarra[$indexavisv]['ViviendasSinVender'];
            if ($indexavisv < count($dBarra) - 1) {
                $VISV .=',';
            }
        }
        $chart .='{
            label: "VIVIENDAS SIN VENDER",
            fillColor:  "rgb(255,0,0)",
                            strokeColor: "rgb(255,0,0)",
                            highlightFill: "rgb(255,70,70)",
                            highlightStroke: "rgb(255,0,0)",
            data: [' . $VISV . ']
        }';

        $chart .=']  }; 
                            var ctx = $("#barGraficoDeComportamientoCDI").get(0).getContext("2d");
                            if(ctx != undefined){
                            window.MyBar = new Chart(ctx).Bar(data, { 
//                            responsive : true,
                            showTooltips: false,
                            onAnimationComplete: function () {

                                var ctx = this.chart.ctx;
                                ctx.font = this.scale.font;
                                ctx.fillStyle = this.scale.textColor
                                ctx.textAlign = "center";
                                ctx.textBaseline = "bottom";

                                this.datasets.forEach(function (dataset) {
                                    dataset.bars.forEach(function (bar) {
                                        ctx.fillText(bar.value, bar.x, bar.y - 5);
                                    });
                                })
                            },
                           animationEasing : "easeOutBounce",
                                    animateRotate : true,
                                    animateScale : false,
                                    scaleFontSize : 14.5,
                                    scaleFontColor : "#666666", 

    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,

    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,

                                    //scaleOverride: true,
                                    //scaleSteps: 10,
                                    //scaleStepWidth: 1,
                                    //scaleStartValue: 0,
                                    scaleShowGridLines : true,
                                    scaleGridLineColor : "rgba(255,255,255,.05)",
                                    scaleGridLineWidth : 1,
                                    barShowStroke : true,
                                    barStrokeWidth : 1
                            }); 
                            MyBar.update();  
                            }else{ 
                            }        ';
        $chart .="legend(document.getElementById('CategoryBar'), data);";
        $chart .="});";
        $chart .="</script></html>";
        print $chart;
    }

    public function getJSONgetGraficoDeComportamientoCDI() {
        try {
            $data = $this->ComportamientoDesarrollo_Model->getGraficoDeEstatusdelosProyectos();
            print json_encode($data);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    public function getGraficoDeComportamientoCDINum() {
        $gBarras = $this->ComportamientoDesarrollo_Model->getGraficoDeEstatusdelosProyectosPorcentajes();
        $dBarra = json_decode(json_encode($gBarras), true);
//        var_dump($dBarra);
        $labels = "";
        for ($index = 0; $index < count($dBarra); $index++) {
            $labels .='"' . $dBarra[$index]['Proyecto'] . '"';
            if ($index < count($dBarra) - 1) {
                $labels .=',';
            }
        }
//        var_dump($labels);
//         if (isset($dBarra[0]['Proyecto']) || $TransmisionesIDX[0]['Transmisiones'] != null || isset($TND[0]['Dispersiones']) || $TND[0]['Dispersiones'] != null) {
        $chart = "<!DOCTYPE html>";
        $chart .="<div class='xy-overflow-component'>";
        $chart .="<div class='col-md-12'>";
        $chart .= "<canvas id='barGraficoDeComportamientoCDIn' class='col-md-12' width='800' height='250'></canvas>";
        $chart .= "<div id='CategoryBarn' class='doughnut-legend col-md-2'></div>";
        $chart .="</div>";
        $chart .="</div>";
        $chart .= "<script>";
        $chart .="$( document ).ready(function() {";
//        $chart .="Chart.defaults.global.responsive = true;";
//        $chart .='$("#hrTitulo").removeClass("hide");  ';
//        $chart .='$("#sTituloTransVSDisp").removeClass("hide");  ';
        $chart .="Chart.defaults.global.scaleLabel = function(label){return label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, \".\");};";
        $chart .= 'var data = {labels: [' . $labels . '],datasets:[';
        //INICIO DE UN FOR PARA OBTENER LOS VALORES DE VIVIENDAS A CONSTRUIR
        $VAC = '';
        for ($indexvac = 0; $indexvac < count($dBarra); $indexvac++) {
            $VAC .= $dBarra[$indexvac]['ViviendasAConstruir'];
            if ($indexvac < count($dBarra) - 1) {
                $VAC .=',';
            }
        }
//            $chart .='{
//            label: "VIVIENDAS A CONSTRUIR",
//            fillColor:  "rgb(0,102,76)",
//                            strokeColor: "rgb(0,102,76)",
//                            highlightFill: "rgb(0,132,99)",
//                            highlightStroke: "rgb(0,102,76)",
//            data: [' . $VAC . ']
//        },';
        $AP = '';
        $RVMAX = explode(',', $VAC);
        for ($indexap = 0; $indexap < count($dBarra); $indexap++) {
            $AP .= $dBarra[$indexap]['Apartados'];
            if ($indexap < count($dBarra) - 1) {
                $AP .=',';
            }
        }
        $chart .='{
            label: "APARTADOS",
            fillColor:  "rgb(115,220,255)",
                            strokeColor: "rgb(115,220,255)",
                            highlightFill: "rgb(164,233,255)",
                            highlightStroke: "rgb(0,179,179)",
            data: [' . $AP . ']
        },';
        $VIV = '';
        for ($indexaviv = 0; $indexaviv < count($dBarra); $indexaviv++) {
            $VIV .= $dBarra[$indexaviv]['Vendidas'];
            if ($indexaviv < count($dBarra) - 1) {
                $VIV .=',';
            }
        }
        $chart .='{
            label: "VIVIENDAS VENDIDAS",
            fillColor:  "rgb(163,217,0)",
                            strokeColor: "rgb(163,217,0)",
                            highlightFill: "rgb(200,255,34)",
                            highlightStroke: "rgb(0,179,179)",
            data: [' . $VIV . ']
        },';
        $VISV = '';
        for ($indexavisv = 0; $indexavisv < count($dBarra); $indexavisv++) {
            $VISV .= $dBarra[$indexavisv]['ViviendasSinVender'];
            if ($indexavisv < count($dBarra) - 1) {
                $VISV .=',';
            }
        }
        $chart .='{
            label: "VIVIENDAS SIN VENDER",
            fillColor:  "rgb(255,0,0)",
                            strokeColor: "rgb(255,0,0)",
                            highlightFill: "rgb(255,70,70)",
                            highlightStroke: "rgb(255,0,0)",
            data: [' . $VISV . ']
        }';

        $chart .=']  }; 
                            var ctxn = $("#barGraficoDeComportamientoCDIn").get(0).getContext("2d");
                            if(ctxn != undefined){
                            window.MyBarn = new Chart(ctxn).Bar(data, { 
//                            responsive : true,
                            showTooltips: false,
                            onAnimationComplete: function () {

                                var ctx = this.chart.ctx;
                                ctx.font = this.scale.font;
                                ctx.fillStyle = this.scale.textColor
                                ctx.textAlign = "center";
                                ctx.textBaseline = "bottom";

                                this.datasets.forEach(function (dataset) {
                                    dataset.bars.forEach(function (bar) {
                                        ctx.fillText(bar.value + "%", bar.x, bar.y - 2);
                                    });
                                })
                            },
                           animationEasing : "easeOutBounce",
                                    animateRotate : true,
                                    animateScale : false,
                                    scaleFontSize : 14.5,
                                    scaleFontColor : "#666666", 

    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,

    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
                                    scaleShowGridLines : true,
                                    scaleGridLineColor : "rgba(255,255,255,.08)",
                                    scaleGridLineWidth : 1,
                                    barShowStroke : true,
                                    barStrokeWidth : 1
                            }); 
                            MyBarn.update();  
                            }else{ 
                            }        ';
        $chart .="legend(document.getElementById('CategoryBarn'), data);";
        $chart .="});";
        $chart .="</script></html>";
        print $chart;
    }

}
