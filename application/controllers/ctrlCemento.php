<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlCemento extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("cemento_model");
        $this->load->model("resource_model");
    }

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
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vCemento');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    public function getRecords() {
        try {
            $data = $this->cemento_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsComercializadores() {
        try {
            $data = $this->cemento_model->getRecordsComercializadores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getComercializadoresByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->cemento_model->getComercializadoresByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByDate() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->cemento_model->getRecordsByDate($Inicio, $Fin);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddPrecioCemento() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Fecha' => $Fecha,
                'Comercializador' => $Comercializador,
                'Marca' => $Marca,
                'Atiende' => strtoupper($Atiende),
                'PrecioCblanco' => ($PrecioCblanco !== NULL && $PrecioCblanco !== '') ? $PrecioCblanco : 0.0,
                'PrecioCgris' => ($PrecioCgris !== NULL && $PrecioCgris !== '') ? $PrecioCgris : 0.0,
                'PrecioCmortero' => ($PrecioCmortero !== NULL && $PrecioCmortero !== '') ? $PrecioCmortero : 0.0,
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
//            var_dump($data);
            $this->resource_model->onAction('ComerCementoPrecio', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdatePrecioCemento() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Fecha' => $Fecha,
                'Comercializador' => $Comercializador,
                'Marca' => $Marca,
                'Atiende' => strtoupper($Atiende),
                'PrecioCblanco' => ($PrecioCblanco !== NULL && $PrecioCblanco !== '') ? $PrecioCblanco : 0.0,
                'PrecioCgris' => ($PrecioCgris !== NULL && $PrecioCgris !== '') ? $PrecioCgris : 0.0,
                'PrecioCmortero' => ($PrecioCmortero !== NULL && $PrecioCmortero !== '') ? $PrecioCmortero : 0.0
            );
//            var_dump($data);
            $this->resource_model->onAction('ComerCementoPrecio', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getComercializadores() {
        try {
            $data = $this->cemento_model->getComercializadores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMarcas() {
        try {
            $data = $this->cemento_model->getMarcas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciosDelCementoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->cemento_model->getPreciosDelCementoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPaises() {
        try {
            $data = $this->cemento_model->getPaises();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCiudades() {
        try {
            $data = $this->cemento_model->getCiudades();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCiudadesXEstado() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->cemento_model->getCiudadesXEstado($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstados() {
        try {
            $data = $this->cemento_model->getEstados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->resource_model->onAction('ComerCementoPrecio', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddComercializador() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Nombre' => ((isset($Nombre) && $Nombre !== '') ? strtoupper($Nombre) : NULL),
                'Tel' => ((isset($Tel) && $Tel !== '') ? $Tel : NULL),
                'Pagina' => ((isset($Pagina) && $Pagina !== '') ? $Pagina : NULL),
                'Direccion' => ((isset($Direccion) && $Direccion !== '') ? strtoupper($Direccion) : NULL),
                'Numero' => ((isset($Numero) && $Numero !== '') ? $Numero : NULL),
                'Pais' => ((isset($Pais) && $Pais !== '') ? $Pais : NULL),
                'Estado' => ((isset($Estado) && $Estado !== '') ? $Estado : NULL),
                'Ciudad' => ((isset($Ciudad) && $Ciudad !== '') ? $Ciudad : NULL),
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $this->resource_model->onAction('ComerCemento', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateComercializador() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Nombre' => ((isset($Nombre) && $Nombre !== '') ? strtoupper($Nombre) : NULL),
                'Tel' => ((isset($Tel) && $Tel !== '') ? $Tel : NULL),
                'Pagina' => ((isset($Pagina) && $Pagina !== '') ? $Pagina : NULL),
                'Direccion' => ((isset($Direccion) && $Direccion !== '') ? strtoupper($Direccion) : NULL),
                'Numero' => ((isset($Numero) && $Numero !== '') ? $Numero : NULL)
            );
            if ((isset($Pais) && $Pais !== '' && is_numeric($Pais))) {
                $data['Pais'] = $Pais;
            }
            if ((isset($Estado) && $Estado !== '' && is_numeric($Estado))) {
                $data['Estado'] = $Estado;
            }
            if ((isset($Ciudad) && $Ciudad !== '' && is_numeric($Ciudad))) {
                $data['Ciudad'] = $Ciudad;
            }
            $this->resource_model->onAction('ComerCemento', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGenerarReporteDePrecios() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->cemento_model->getRecordsByDateWT($Inicio, $Fin);

            try {
                date_default_timezone_set('America/Mexico_City');
                require_once APPPATH . "/third_party/fpdf17/fpdf.php";

                $image = "log_1o.png";
                $pdf = new FPDF('P', 'pt', array(1240, 1554));
                $pdf->AddPage();
                $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);
                $pdf->SetAutoPageBreak(false);

                $pdf->SetFont('Arial', 'B', 50);
                $top = 0;
                $alto_pagina = 2000;
                $pdf->SetY(85);
                if (isset($data[0])) {
                    /* ENCABEZADO */
                    $pdf->SetX(375);
                    $pdf->Cell(50, 5, "PRECIOS DEL CEMENTO", 0, 0);
                    $pdf->SetFont('Arial', 'B', 12);
                    $pdf->SetY(85);
                    $pdf->SetX(1030);
                    $pdf->Cell(50, 20, utf8_decode("FECHA DE IMPRESIÓN"), 0, 1);
                    $pdf->SetX(1030);
                    $pdf->Cell(50, 5, strtoupper(Date('d/m/Y h:i:s a')), 0, 1);

                    $pdf->SetFont('Arial', 'B', 20);
                    $pdf->SetY(160);
                    $pdf->SetX(70);
                    $pdf->Cell(50, 20, "FECHA", 0, 0);
                    $pdf->SetX(250);
                    $pdf->Cell(50, 20, "COMERCIALIZADOR", 0, 0);
                    $pdf->SetX(550);
                    $pdf->Cell(50, 20, "MARCA", 0, 0);
                    $YH = $pdf->GetY();
                    $pdf->SetX(710);
                    $pdf->MultiCell(120, 20, "CEMENTO BLANCO");
                    $pdf->SetY($YH);
                    $pdf->SetX(900);
                    $pdf->MultiCell(120, 20, "CEMENTO GRIS");
                    $pdf->SetY($YH);
                    $pdf->SetX(1050);
                    $pdf->Cell(50, 20, "MORTERO", 0, 1);
                    $pdf->Cell(50, 20, "", 0, 1);
                    $pdf->Line(/* Izq-X */70, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                    $pdf->Cell(50, 10, "", 0, 1);

                    /* FIN ENCABEZADO */

                    /* DETALLE */
                    $top += 120;
                    $pdf->SetFont('Arial', '', 20);
                    for ($index = 0; $index < count($data); $index++) {
                        $YZ = $pdf->GetY();
                        $pdf->SetX(70);
                        $pdf->Cell(25, 20, $data[$index]->Fecha, 0, 0);
                        $pdf->SetX(200);
                        $pdf->MultiCell(300, 20, utf8_decode($data[$index]->COMERCIALIZADOR));
                        $YZX = ($pdf->GetY() > $YZ) ? $pdf->GetY() : $YZ;
                        $pdf->SetFont('Arial', '', 18);
                        $pdf->SetY($YZ);
                        $pdf->SetX(550);
                        $pdf->MultiCell(350, 20, strtoupper(utf8_decode($data[$index]->MARCA)));
                        $pdf->SetFont('Arial', '', 20);
                        $pdf->SetY($YZ);
                        $pdf->SetX(720);
                        $pdf->MultiCell(350, 20, utf8_decode($data[$index]->{"CEMENTO BLANCO"}));
                        $pdf->SetY($YZ);
                        $pdf->SetX(900);
                        $pdf->MultiCell(350, 20, utf8_decode($data[$index]->{"CEMENTO GRIS"}));
                        $pdf->SetY($YZ);
                        $pdf->SetX(1070);
                        $pdf->MultiCell(350, 20, utf8_decode($data[$index]->MORTERO));
                        $pdf->SetY($YZX);
                        $top += 40;
                        $pdf->Cell(50, 5, "", 0, 1);
                        $pdf->Line(/* Izq-X */70, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                        $pdf->Cell(50, 10, "", 0, 1);
                        if ($top > $alto_pagina) {
                            $pdf->AddPage();
                            $top = 0;
                            $alto_pagina = 3200;
                        }
                    }

                    /* FIN DETALLE */
                    $URL_DOC = 'uploads/PreciosDelCemento';
                    $master_url = base_url() . $URL_DOC . '/';
                    if (!file_exists($URL_DOC)) {
                        mkdir($URL_DOC, 0777, true);
                    }
                    $fname = utf8_decode(strtoupper("PRECIOS_DEL_CEMENTO_" . Date('d_m_Y_h_i_s_a')));
                    $url = 'uploads/PreciosDelCemento/' . $fname . '.pdf';
                    $pdf->Output($url);
                    print base_url() . $url;
                } else {
                    print 0;
                }
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
