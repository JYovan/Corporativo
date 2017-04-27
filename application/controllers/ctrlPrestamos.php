<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlPrestamos extends CI_Controller {

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
        $this->load->model("prestamos_model");
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
            $this->load->view('vPrestamos');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        } 
    }

    public function getRecords() {
        try {
            $data = $this->prestamos_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialDePagos() {
        try {
            $data = $this->prestamos_model->getHistorialDePagos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getBusquedaDeHistorialDePagos() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->prestamos_model->getBusquedaDeHistorialDePagos($INICIO, $FIN, $ACREEDOR, $DEUDOR);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->prestamos_model->getRecordsByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsIDByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->prestamos_model->getRecordsIDByID($ID, $IDX, $DESDE, $HASTA);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByIDPay() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->prestamos_model->getRecordsByIDPay($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $data = $this->prestamos_model->getUsuarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDirectorio() {
        try {
            $data = $this->prestamos_model->getDirectorio();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuentas() {
        try {
            $data = $this->prestamos_model->getCuentas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuentasByNotID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->prestamos_model->getCuentasByNotID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddContrato() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'IdMutuante'), FILTER_VALIDATE_INT)) {
                $mutuante = $this->prestamos_model->getMutuanteByID($IdMutuante);
                $mutuatario = $this->prestamos_model->getMutuanteByID($IdMutuatario);
                $img = base_url() . 'uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContrato) . '/' . $_FILES["rtImagen"]["name"];

                $data = array(
                    'IdMutuante' => $IdMutuante,
                    'IdMutuatario' => $IdMutuatario,
                    'IdCuentaSaliente' => $IdCuentaSaliente,
                    'IdFormaDePago' => $IdFormaDePago,
                    'IdCuentaEntrante' => $IdCuentaEntrante,
                    'CantidadPrestada' => $CantidadPrestada,
                    'Interes' => $Interes,
                    'FechaApartir' => $FechaApartir,
                    'FechaLimite' => $FechaLimite,
                    'FechaContrato' => $FechaContrato,
                    'FechaSolicitud' => $FechaSolicitud,
                    'FechaEntregaContrato' => $FechaEntregaContrato,
                    'IdSolicitante' => $IdSolicitante,
                    'IdResponsable' => $IdResponsable,
                    'Saldo' => $CantidadPrestada,
                    'Estatus' => 'SIN PAGOS',
                    'rImagen' => $img
                );
                $ID = $this->prestamos_model->onAction("ContratosDeMutuo", $data, "save", 0);
                $this->onUploadFile();
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddPago() {
        try {
            extract(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                $data = array(
                    'IdContratoDeMutuo' => $ID,
                    'CantidadAPagar' => ($CantidadPrestada - $Pago),
                    'InteresAplicado' => (isset($chkInteres)) ? ($chkInteres == 'on') ? 'SI' : 'NO' : 'NO',
                    'Interes' => (isset($chkInteres)) ? ($chkInteres == 'on') ? $Interes : 0 : 0,
                    'MontoAPagar' => $Saldo,
                    'Pago' => $Pago,
                    'NumeroDePago' => $NumeroDePago,
                    'FormaDePago' => $FormaDePago,
                    'Referencia' => strtoupper($Referencia),
                    'CuentaEntrante' => $CuentaEntrante,
                    'FechaDelPago' => $FechaDelPago,
                    'Saldo' => $Saldo,
                );
                $IDPDCDM = $this->prestamos_model->onAction("PagoDeContratoDeMutuo", $data, "save", 0);
                if (doubleval($Saldo) === 0.0) {
                    $data = array('Saldo' => 0, 'Estatus' => 'PAGADO');
                } else {
                    $data = array('Saldo' => $Saldo, 'Estatus' => 'PAGOS PARCIALES');
                }
                $this->prestamos_model->onAction('ContratosDeMutuo', $data, "update", array('ID', $ID));
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUploadFile() {
        try {
            extract(filter_input_array(INPUT_POST));
            $mutuante = $this->prestamos_model->getMutuanteByID($IdMutuante);
            $mutuatario = $this->prestamos_model->getMutuanteByID($IdMutuatario);

            if (!file_exists('uploads/Contratos/Scan')) {
                mkdir('uploads/Contratos/Scan', 0777, true);
            }
            if (!file_exists('uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContrato))) {
                mkdir('uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContrato), 0777, true);
            }
//            if (move_uploaded_file($_FILES["rtImagen"]["tmp_name"], 'uploads/Contratos/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura . '/' . $_FILES["rtImagen"]["name"])) {
            if (move_uploaded_file($_FILES["rtImagen"]["tmp_name"], 'uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContrato) . '/' . utf8_decode($_FILES["rtImagen"]["name"]))) {
                echo "El fichero es válido y se subió con éxito.\n";
            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateUploadedFile() {
        try {
            extract(filter_input_array(INPUT_POST));
            $mutuante = $this->prestamos_model->getMutuanteByID($IdMutuanteU);
            $mutuatario = $this->prestamos_model->getMutuanteByID($IdMutuatarioU);

            if (!file_exists('uploads/Contratos/Scan')) {
                mkdir('uploads/Contratos/Scan', 0777, true);
            }
            if (!file_exists('uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContratoU))) {
                mkdir('uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContratoU), 0777, true);
            }
//            if (move_uploaded_file($_FILES["rtImagen"]["tmp_name"], 'uploads/Contratos/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura . '/' . $_FILES["rtImagen"]["name"])) {
            if (move_uploaded_file($_FILES["rtImagenU"]["tmp_name"], 'uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContratoU) . '/' . $_FILES["rtImagenU"]["name"])) {
                echo "El fichero es válido y se subió con éxito.\n";
            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateContrato() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'IdMutuanteU'), FILTER_VALIDATE_INT)) {
                $mutuante = $this->prestamos_model->getMutuanteByID($IdMutuanteU);
                $mutuatario = $this->prestamos_model->getMutuanteByID($IdMutuatarioU);
                $img = base_url() . 'uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContratoU) . '/' . $_FILES["rtImagenU"]["name"];

                $data = array(
                    'IdMutuante' => $IdMutuanteU,
                    'IdMutuatario' => $IdMutuatarioU,
                    'IdCuentaSaliente' => ($IdCuentaSalienteU !== '' && $IdCuentaSalienteU !== 'null') ? $IdCuentaSalienteUX : $IdCuentaSalienteU,
                    'IdFormaDePago' => $IdFormaDePagoU,
                    'IdCuentaEntrante' => ($IdCuentaEntranteUX !== '' && $IdCuentaEntranteUX !== 'null') ? $IdCuentaEntranteU : $IdCuentaEntranteUX,
                    'CantidadPrestada' => $CantidadPrestadaU,
                    'Interes' => $InteresU,
                    'FechaApartir' => $FechaApartirU,
                    'FechaLimite' => $FechaLimiteU,
                    'FechaContrato' => $FechaContratoU,
                    'FechaSolicitud' => $FechaSolicitudU,
                    'FechaEntregaContrato' => $FechaEntregaContratoU,
                    'IdSolicitante' => $IdSolicitanteU,
                    'IdResponsable' => $IdResponsableU,
                    'Saldo' => $CantidadPrestadaU
                );
                $ID = $this->prestamos_model->onAction("ContratosDeMutuo", $data, "update", array('ID', $IDU));
                if ($_FILES["rtImagenU"]["tmp_name"] !== "") {
                    $img = base_url() . 'uploads/Contratos/Scan/' . $mutuante[0]->RazonS . '/' . $mutuatario[0]->RazonS . '/' . str_replace("/", " ", $FechaContratoU) . '/' . $_FILES["rtImagenU"]["name"];
                    $data = array('rImagen' => $img);
                    $this->prestamos_model->onAction('ContratosDeMutuo', $data, "update", array('ID', $IDU));
                    $this->onUpdateUploadedFile();
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCreateAcumulado() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
            $image = "log_1o.png";
            $ancho_pagina = 1240;
            $alto_pagina = 1554;
            $left = 30;
            $right = 30;
            $top = 30;
            $bottom = 30;
            $pdf = new FPDF('P', 'pt', array($ancho_pagina, $alto_pagina));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, $left * 2, $right * 2, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;
            $x = 300;
            $rows = $this->prestamos_model->getRecordsIDByID($ID, $IDX, $DESDE, $HASTA);
//            $rows = $this->tramitefactura_model->getRecordsRowsReportSA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
//            var_dump($rows);
            $nrows = count($rows);
            if (isset($rows[0])) {
                $rdata = $rows[0];
                if (isset($rdata->MUTUANTE)) {
                    $pdf->SetFont('Arial', '', 35);
                    if (strlen($rdata->MUTUANTE) > 25) {
                        $pdf->SetFont('Arial', '', 28);
                        $pdf->Text(/* X */$ancho_pagina / 3.3, /* Y */ $alto_pagina / 12, $rdata->MUTUANTE);
                    } else {
                        $pdf->SetFont('Arial', '', 25);
                        $pdf->Text(/* X */$ancho_pagina / 2.4, /* Y */ $alto_pagina / 12, $rdata->MUTUANTE);
                    }
                    $pdf->SetFont('Arial', '', 25);
                    $pdf->Text(/* X */$ancho_pagina / 2.3, /* Y */ $alto_pagina / 10, "REPORTE DE ACUMULADO");
                    $pdf->SetDrawColor(2, 2, 21);
                    $pdf->SetFont('Arial', '', 16);
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 8);

                    $pdf->SetFont('Arial', 'B', 16);
                    $pdf->Text(/* X */$left * 7, /* Y */ $alto_pagina / 7.2, "MUTUATARIO");
                    $pdf->Text(/* X */$left * 20, /* Y */ $alto_pagina / 7.2, "FECHA");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 7.2), /* Largo */ $left * 19, ($alto_pagina / 7.8));
                    $pdf->Text(/* X */$left * 24, /* Y */ $alto_pagina / 7.2, "CANTIDAD PRESTADA");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ ($alto_pagina / 7.15), /* Largo */ $left * 29, ($alto_pagina / 7.8));
                    $pdf->Text(/* X */$left * 33.5, /* Y */ $alto_pagina / 7.2, "SALDO");
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 7, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 7);

                    $div_row = ($alto_pagina / 7.5) + 30;
                    $last_top = $div_row;
                    $total_prestado = 0.0;
                    $total_saldo = 0.0;
                    $pdf->setY($last_top - 15);
                    $pdf->SetFont('Arial', '', 16);
//                    for ($index = 0; $index < 10; $index++) {
                    foreach ($rows as $key) {
                        if ($div_row > $alto_pagina) {
                            $pdf->AddPage();
                            $div_row = 0;
                        }
                        $pdf->SetX(65);
                        $pdf->Cell(/* X */35, 25, $key->MUTUATARIO, 0, 0, 'L');
                        $pdf->SetX(585);
                        $pdf->Cell(/* X */55, 25, $key->{"FECHA DEL CONTRATO DE MUTUO"}, 0, 0, 'L');
                        $pdf->SetX(730);
                        $pdf->Cell(/* X */55, 25, "$ " . number_format($key->{"CANTIDAD PRESTADA"}, 2, '.', ', '), 0, 0, 'L');
                        $pdf->SetX(975);
                        $pdf->Cell(/* X */55, 25, "$ " . number_format($key->SALDO, 2, '.', ', '), 0, 1, 'L');
                        $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $pdf->GetY(), /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $pdf->GetY());
                        $total_prestado = $total_prestado + $key->{"CANTIDAD PRESTADA"};
                        $total_saldo = $total_saldo + $key->SALDO;
                        $last_top = $div_row + 8;
                        $div_row = $div_row + 25;
                    }
//                    }
                    $pdf->SetFont('Arial', 'B', 16);
                    $pdf->SetX(500);
                    $pdf->Cell(/* X */35, 25, "TOTAL ACUMULADO: ", 0, 0, 'L');
                    $pdf->SetX(710);
                    $pdf->Cell(/* X */35, 25, "$ " . number_format($total_prestado, 2, '.', ', '), 0, 0, 'L');
                    $pdf->SetX(960);
                    $pdf->Cell(/* X */35, 25, "$ " . number_format($total_saldo, 2, '.', ', '), 0, 0, 'L');
                    if (!file_exists('uploads/Contratos/Acumulados')) {
                        mkdir('uploads/Contratos/Acumulados', 0777, true);
                    }
                    if (!file_exists('uploads/Contratos/Acumulados/' . $rdata->MUTUANTE)) {
                        mkdir('uploads/Contratos/Acumulados/' . $rdata->MUTUANTE, 0777, true);
                    }
                    $url = 'uploads/Contratos/Acumulados/' . $rdata->MUTUANTE . '/ACUMULADO_' . $rdata->ID . '_' . $rdata->MUTUATARIO . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                    $pdf->Output($url);
                    print base_url() . $url;
                } else {
                    print 0;
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsIDByIDAgrupado() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
            $image = "log_1o.png";
            $ancho_pagina = 1240;
            $alto_pagina = 1554;
            $left = 30;
            $right = 30;
            $top = 30;
            $bottom = 30;
            $pdf = new FPDF('P', 'pt', array($ancho_pagina, $alto_pagina));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, $left * 2, $right * 2, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;
            $x = 300;
            $rows = $this->prestamos_model->getRecordsIDByIDAgrupado($ID, $IDX, $DESDE, $HASTA);
//            $rows = $this->tramitefactura_model->getRecordsRowsReportSA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
//            var_dump($rows);
            $nrows = count($rows);
            if (isset($rows[0])) {
                $rdata = $rows[0];
                if (isset($rdata->MUTUANTE)) {
                    $pdf->SetFont('Arial', '', 35);
                    if (strlen($rdata->MUTUANTE) > 25) {
                        $pdf->SetFont('Arial', '', 28);
                        $pdf->Text(/* X */$ancho_pagina / 3.3, /* Y */ $alto_pagina / 12, $rdata->MUTUANTE);
                    } else {
                        $pdf->SetFont('Arial', '', 25);
                        $pdf->Text(/* X */$ancho_pagina / 2.4, /* Y */ $alto_pagina / 12, $rdata->MUTUANTE);
                    }
                    $pdf->SetFont('Arial', '', 25);
                    $pdf->Text(/* X */$ancho_pagina / 2.3, /* Y */ $alto_pagina / 10, "REPORTE DE ACUMULADO");
                    $pdf->SetDrawColor(2, 2, 21);
                    $pdf->SetFont('Arial', '', 16);
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 8);

                    $pdf->Text(/* X */$left * 5, /* Y */ $alto_pagina / 7.2, "MUTUATARIO");
                    $pdf->Text(/* X */$left * 18.5, /* Y */ $alto_pagina / 7.2, "FECHA");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 7.2), /* Largo */ $left * 19, ($alto_pagina / 7.8));
                    $pdf->Text(/* X */$left * 22.8, /* Y */ $alto_pagina / 7.2, "CANTIDAD PRESTADA");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ ($alto_pagina / 7.15), /* Largo */ $left * 29, ($alto_pagina / 7.8));
                    $pdf->Text(/* X */$left * 32.5, /* Y */ $alto_pagina / 7.2, "SALDO");
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 7, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 7);

                    $div_row = ($alto_pagina / 7.5) + 30;
                    $last_top = $div_row;
                    $total_prestado = 0.0;
                    $total_saldo = 0.0;

                    $pdf->SetFont('Arial', '', 16);
                    foreach ($rows as $key) {
                        $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ $div_row - 15, /* Largo */ $left * 2, $div_row + 8);
                        $pdf->Text(/* X */$left * 2.3, /* Y */ $div_row, $key->MUTUATARIO);
//                        $pdf->Line(/* Izq-X */$left * 17, /* Top-Y */ $div_row - 25, /* Largo */ $left * 17, $div_row + 8);
                        $pdf->Text(/* X */$left * 18, /* Y */ $div_row, $key->{"FECHA DEL CONTRATO DE MUTUO"});
//                        $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ $div_row - 15, /* Largo */ $left * 19, $div_row + 8);
                        $pdf->Text(/* X */$left * 22.5, /* Y */ $div_row, "$ " . number_format($key->{"CANTIDAD PRESTADA"}, 2, '.', ', '));
//                        $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ $div_row - 15, /* Largo */ $left * 29, $div_row + 8);
                        $pdf->Text(/* X */$left * 31, /* Y */ $div_row, "$ " . number_format($key->SALDO, 2, '.', ', '));
                        $pdf->Line(/* Izq-X */$left * 39.34, /* Top-Y */ $div_row - 15, /* Largo */ $left * 39.35, $div_row + 8);
                        $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $div_row + 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $div_row + 8);
                        $total_prestado = $total_prestado + $key->{"CANTIDAD PRESTADA"};
                        $total_saldo = $total_saldo + $key->SALDO;
                        $last_top = $div_row + 8;
                        $div_row = $div_row + 25;
                    }
                    $last_top = $last_top + 20;
                    $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 2, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 17.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 17.5, $last_top - 20);
                    $pdf->Line(/* Izq-X */$left * 21.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 21.5, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 29, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 39.35, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 39.35, $last_top + 5);

                    $pdf->Line(/* Izq-X */$left * 12, /* Top-Y */ $div_row - 17, /* Largo */ $left * 12, $div_row + 8);
                    $pdf->Text(/* X */$left * 13, /* Y */ $last_top, "TOTAL ACUMULADO: ");
//                    $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ $div_row - 10, /* Largo */ $left * 2, $div_row + 5);
                    $pdf->Text(/* X */$left * 22, /* Y */ $last_top, "$ " . number_format($total_prestado, 2, '.', ', '));
                    $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ $div_row - 10, /* Largo */ $left * 29, $div_row + 5);
                    $pdf->Text(/* X */$left * 31, /* Y */ $last_top, "$ " . number_format($total_saldo, 2, '.', ', '));
                    $last_top += 5;
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $last_top, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $last_top);

                    if (!file_exists('uploads/Contratos/Acumulados')) {
                        mkdir('uploads/Contratos/Acumulados', 0777, true);
                    }
                    if (!file_exists('uploads/Contratos/Acumulados/' . $rdata->MUTUANTE)) {
                        mkdir('uploads/Contratos/Acumulados/' . $rdata->MUTUANTE, 0777, true);
                    }
                    $url = 'uploads/Contratos/Acumulados/' . $rdata->MUTUANTE . '/ACUMULADO_' . $rdata->ID . '_' . $rdata->MUTUATARIO . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                    $pdf->Output($url);
                    print base_url() . $url;
                } else {
                    print 0;
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMutuantesAgrupados() {
        try {
            $thum = "";
            $head = $this->prestamos_model->getMutuantesAgrupados();
            foreach ($head as $datahead) {
                $thum .= '<div class="col-md-12 col-xs-12">';
                $thum .= '<div class="table-responsive">';
                $thum .= '<table class="table table-bordered" height="350" id="tbl' . str_replace(".", "_", str_replace(" ", "_", $datahead->RAZON)) . '_' . $datahead->ID . '">';
                $thum .= '<thead>';
                $thum .= '<tr class="primary">';
                $thum .= '<th class="text-center" colspan="4"><h2 class="text-white"> <span class="fa fa-list-alt fa-lg cursor-hand"></span> ' . $datahead->RAZON . ' <span class="fa fa-download fa-lg cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGAR" onclick="getReporteMutuanteAgrupado(this,' . $datahead->ID . ')"></span></h2> </th>';
                $thum .= '</tr>';
                $thum .= '<tr class="primary">';
                $thum .= '<th class="text-center">EMPRESA</th>';
                $thum .= '<th class="green-background text-center">ADEUDA</th>';
                $thum .= '<th class="red-background text-center">SE LE ADEUDA</th>';
                $thum .= '<th class="blue-light-background text-center">BALANCE</th>';
                $thum .= '</tr>';
                $thum .= '</thead>';
                $thum .= '<tbody>';
                $total_adeuda = 0;
                $total_se_le_adeuda = 0;
                $total_diferencias = 0;
                $row = $this->prestamos_model->getSaldosByIdMutuante($datahead->ID);
                foreach ($row as $datarow) {
                    $thum .= '<tr>';
                    $thum .= '<td class="text-center"><span class="label label-primary ">' . $datarow->EMPRESA . '</span></td>';
                    $thum .= '<td class="text-center"><span class="label label-green">$ ' . number_format($datarow->ADEUDA, 2, '.', ', ') . '</span></td>';
                    $rowmxmu = $this->prestamos_model->getSaldoByIdMutuatarioXMutuante($datarow->IDMU, $datarow->IDMUT);
                    $dtm = json_encode($rowmxmu);
                    $dif = 0.0;
                    if (count($rowmxmu) > 0) {
                        $se_le_adeuda = $rowmxmu[0]->{"SE LE ADEUDA"} * -1;
                        $thum .= '<td class="text-center"><span class="label label-red">$ ' . number_format($se_le_adeuda, 2, '.', ', ') . '<span></td>';
                        $dif = $datarow->ADEUDA - $rowmxmu[0]->{"SE LE ADEUDA"};
                        $thum .= '<td class="text-center"><span class="label label-blue-light">$ ' . number_format($dif, 2, '.', ', ') . '<span></td>';
                        $total_se_le_adeuda = $total_se_le_adeuda + $se_le_adeuda;
                        $total_diferencias = $total_diferencias + $dif;
                    } else {
                        $thum .= '<td class="text-center"><span class="label label-red">$ ' . number_format(0, 2, '.', ', ') . '<span></td>';
                        $thum .= '<td class="text-center"><span class="label label-blue-light">$ ' . number_format($datarow->ADEUDA, 2, '.', ', ') . '<span></td>';
                        $total_diferencias = $total_diferencias + $datarow->ADEUDA;
                    }
                    $thum .= '</tr>';
                    $total_adeuda = $total_adeuda + $datarow->ADEUDA;
                }
                $row = $this->prestamos_model->getSaldosByIdMutuatario($datahead->ID);
                $xdif = 0;
                foreach ($row as $datarow) {
                    $thum .= '<tr>';
                    $thum .= '<td class="text-center"><span class="label label-primary">' . $datarow->EMPRESA . '</span></td>';
                    $thum .= '<td class="text-center"><span class="label label-green">$ ' . number_format($datarow->ADEUDA, 2, '.', ', ') . '</span></td>';
                    $xdif = $datarow->{"SE LE ADEUDA"} * -1;
                    $thum .= '<td class="text-center"><span class="label label-red">$ ' . number_format($xdif, 2, '.', ', ') . '<span></td>';
                    $thum .= '<td class="text-center"><span class="label label-blue-light">$ ' . number_format($xdif, 2, '.', ', ') . '<span></td>';
                    $thum .= '</tr>';
                    $total_adeuda = $total_adeuda + $datarow->ADEUDA;
                    $total_se_le_adeuda = $total_se_le_adeuda + $xdif;
                    $total_diferencias = $total_diferencias + $xdif;
                }

                $thum .= '</tbody>';
                $thum .= '<tfoot>';
                $thum .= '<tr>';
                $thum .= '<th class="blue-background text-center">TOTAL ACUMULADO</th>';
                $thum .= '<th class="green-background"><span class="label label-green">$ ' . number_format($total_adeuda, 2, '.', ', ') . '<span></th>';
                $thum .= '<th class="red-background"><span class="label label-red">$ ' . number_format($total_se_le_adeuda, 2, '.', ', ') . '<span></th>';
                $thum .= '<th class="blue-light-background"><span class="label label-blue-light">$ ' . number_format($total_diferencias, 2, '.', ', ') . '<span></th>';
                $thum .= '</tr>';
                $thum .= '</tfoot>';
                $thum .= '</table>';
                $thum .= '</div>';
                $thum .= '</div>';
            }

            $head = $this->prestamos_model->getMutuatariosAgrupados();
            if (count($head) > 0) {
                foreach ($head as $datahead) {
                    $thum .= '<div class="col-md-12 col-xs-12">';
                    $thum .= '<div class="table-responsive">';
                    $thum .= '<table class="table table-bordered" height="350" id="tbl' . str_replace(".", "_", str_replace(" ", "_", $datahead->RAZON)) . '_' . $datahead->ID . '">';
                    $thum .= '<thead>';
                    $thum .= '<tr class="primary">';
                    $thum .= '<th class="text-center" colspan="4"><h2> <span class="fa fa-list-alt fa-lg cursor-hand"></span> ' . $datahead->RAZON . ' <span class="fa fa-download fa-lg cursor-hand" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGAR" onclick="getReporteMutuanteAgrupado(this,' . $datahead->ID . ')"></span></h2> </th>';
                    $thum .= '</tr>';
                    $thum .= '<tr class="primary">';
                    $thum .= '<th class="text-center">EMPRESA</th>';
                    $thum .= '<th class="green-background text-center">ADEUDA</th>';
                    $thum .= '<th class="red-background text-center">SE LE ADEUDA</th>';
                    $thum .= '<th class="blue-light-background text-center">BALANCE</th>';
                    $thum .= '</tr>';
                    $thum .= '</thead>';
                    $thum .= '<tbody>';
                    $total_adeuda = 0;
                    $total_se_le_adeuda = 0;
                    $total_diferencias = 0;
                    $row = $this->prestamos_model->getSaldosByIdMutuante($datahead->ID);
                    foreach ($row as $datarow) {
                        $thum .= '<tr>';
                        $thum .= '<td class="text-center"><span class="label label-primary">' . $datarow->EMPRESA . '</span></td>';
                        $thum .= '<td class="text-center"><span class="label label-green">$ ' . number_format($datarow->ADEUDA, 2, '.', ', ') . '</span></td>';

                        $rowmxmu = $this->prestamos_model->getSaldoByIdMutuatarioXMutuante($datarow->IDMU, $datarow->IDMUT);
                        $dtm = json_encode($rowmxmu);
                        $dif = 0.0;
                        if (count($rowmxmu) > 0) {
                            $se_le_adeuda = $rowmxmu[0]->{"SE LE ADEUDA"} * -1;
                            $thum .= '<td class="text-center"><span class="label label-red">$ ' . number_format($se_le_adeuda, 2, '.', ', ') . '<span></td>';
                            $dif = $datarow->ADEUDA - $rowmxmu[0]->{"SE LE ADEUDA"};
                            $thum .= '<td class="text-center"><span class="label label-blue-light">$ ' . number_format($dif, 2, '.', ', ') . '<span></td>';
                            $total_se_le_adeuda = $total_se_le_adeuda + $se_le_adeuda;
                            $total_diferencias = $total_diferencias + $dif;
                        } else {
                            $thum .= '<td class="text-center"><span class="label label-red">$ ' . number_format(0, 2, '.', ', ') . '<span></td>';
                            $thum .= '<td class="text-center"><span class="label label-blue-light">$ ' . number_format($datarow->ADEUDA, 2, '.', ', ') . '<span></td>';
                            $total_diferencias = $total_diferencias + $datarow->ADEUDA;
                        }
                        $thum .= '</tr>';
                        $total_adeuda = $total_adeuda + $datarow->ADEUDA;
                    }
                    $row = $this->prestamos_model->getSaldosByIdMutuatario($datahead->ID);
//                    var_dump($row);
                    $xdif = 0;
                    foreach ($row as $datarow) {
                        $thum .= '<tr>';
                        $thum .= '<td class="text-center"><span class="label label-primary">' . $datarow->EMPRESA . '</span></td>';
                        $thum .= '<td class="text-center"><span class="label label-green">$ ' . number_format($datarow->ADEUDA, 2, '.', ', ') . '</span></td>';
                        $xdif = $datarow->{"SE LE ADEUDA"} * -1;
                        $thum .= '<td class="text-center"><span class="label label-red">$ ' . number_format($xdif, 2, '.', ', ') . '<span></td>';
                        $thum .= '<td class="text-center"><span class="label label-blue-light">$ ' . number_format($xdif, 2, '.', ', ') . '<span></td>';
                        $thum .= '</tr>';
                        $total_adeuda = $total_adeuda + $datarow->ADEUDA;
                        $total_se_le_adeuda = $total_se_le_adeuda + $xdif;
                        $total_diferencias = $total_diferencias + $xdif;
                    }
                    $thum .= '</tbody>';
                    $thum .= '<tfoot>';
                    $thum .= '<tr>';
                    $thum .= '<th class="blue-background text-center">TOTAL ACUMULADO</th>';
                    $thum .= '<th class="green-background"><span class="label label-green">$ ' . number_format($total_adeuda, 2, '.', ', ') . '<span></th>';
                    $thum .= '<th class="red-background"><span class="label label-red">$ ' . number_format($total_se_le_adeuda, 2, '.', ', ') . '<span></th>';
                    $thum .= '<th class="blue-light-background"><span class="label label-blue-light">$ ' . number_format($total_diferencias, 2, '.', ', ') . '<span></th>';
                    $thum .= '</tr>';
                    $thum .= '</tfoot>';
                    $thum .= '</table>';
                    $thum .= '</div>';
                    $thum .= '</div>';
                }
            }

            $thum .= '<script>$(document).ready(function () {
                $(\'[data-toggle="tooltip"]\').tooltip();';
            foreach ($head as $datahead) {
                $thum .= '$(\'#tbl' . str_replace(".", "_", str_replace(" ", "_", $datahead->RAZON)) . '_' . $datahead->ID . ' tbody\').on(\'click\', \'tr\', function () {
                    $(\'#tbl' . str_replace(".", "_", str_replace(" ", "_", $datahead->RAZON)) . '_' . $datahead->ID . ' tbody\').find("tr").removeClass("success");
                    $(\'#tbl' . str_replace(".", "_", str_replace(" ", "_", $datahead->RAZON)) . '_' . $datahead->ID . ' tbody\').find("tr").removeClass("warning");
                    $(this).addClass("warning");
                });';
            }
            $thum .= '});</script>';
            print $thum;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteMutuanteAgrupado() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
            $image = "log_1o.png";
            $ancho_pagina = 1240;
            $alto_pagina = 1554;
            $left = 30;
            $right = 30;
            $top = 30;
            $bottom = 30;
            $pdf = new FPDF('P', 'pt', array($ancho_pagina, $alto_pagina));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, $left * 2, $right * 2, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;
            $x = 300;
            $rows = $this->prestamos_model->getSaldosByID($ID);
            $nrows = count($rows);
            if (isset($rows[0])) {
                $rdata = $rows[0];
                if (isset($rdata->PRESTADOR)) {
                    $pdf->SetFont('Arial', '', 35);
                    if (strlen($rdata->PRESTADOR) > 25) {
                        $pdf->SetFont('Arial', '', 28);
                        $pdf->Text(/* X */$ancho_pagina / 3.3, /* Y */ $alto_pagina / 12, $rdata->PRESTADOR);
                    } else {
                        $pdf->SetFont('Arial', '', 25);
                        $pdf->Text(/* X */$ancho_pagina / 2.4, /* Y */ $alto_pagina / 12, $rdata->PRESTADOR);
                    }
                    $pdf->SetFont('Arial', '', 25);
                    $pdf->Text(/* X */$ancho_pagina / 2.3, /* Y */ $alto_pagina / 10, "REPORTE DE SALDOS");
                    $pdf->SetDrawColor(2, 2, 21);
                    $pdf->SetFont('Arial', '', 16);
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 8);

                    $pdf->Text(/* X */$left * 6.5, /* Y */ $alto_pagina / 7.2, "EMPRESA");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 7.2), /* Largo */ $left * 19, ($alto_pagina / 7.8));
                    $pdf->Text(/* X */$left * 21, /* Y */ $alto_pagina / 7.2, "ADEUDA ");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ ($alto_pagina / 7.15), /* Largo */ $left * 29, ($alto_pagina / 7.8));
                    $pdf->Text(/* X */$left * 27, /* Y */ $alto_pagina / 7.2, "SE LE ADEUDA");
                    $pdf->Text(/* X */$left * 33.5, /* Y */ $alto_pagina / 7.2, "BALANCE");
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 7, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 7);

                    $div_row = ($alto_pagina / 7.5) + 30;
                    $last_top = $div_row;
                    $total_prestado = 0.0;
                    $total_saldo = 0.0;
                    $total_diferencia = 0.0;
                    $pdf->SetFont('Arial', '', 16);
                    foreach ($rows as $key) {
                        $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ $div_row - 15, /* Largo */ $left * 2, $div_row + 8);
                        $pdf->Text(/* X */$left * 2.5, /* Y */ $div_row, $key->EMPRESA);
//                        $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ $div_row - 15, /* Largo */ $left * 19, $div_row + 8);
//                        $pdf->SetFillColor(0,102,0);
//                        $pdf->Cell(25,5,"$ " . number_format($key->ADEUDA, 2, '.', ', '),0,1,'L',1); //your cell

                        $pdf->Text(/* X */$left * 19.5, /* Y */ $div_row, "$ " . number_format($key->ADEUDA, 2, '.', ', '));
//                        $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ $div_row - 15, /* Largo */ $left * 29, $div_row + 8);
                        $pdf->Text(/* X */$left * 26, /* Y */ $div_row, "$ " . number_format($key->{"SE LE ADEUDA"}, 2, '.', ', '));
                        $pdf->Text(/* X */$left * 33, /* Y */ $div_row, "$ " . number_format($key->DIFERENCIA, 2, '.', ', '));
                        $pdf->Line(/* Izq-X */$left * 39.34, /* Top-Y */ $div_row - 15, /* Largo */ $left * 39.35, $div_row + 8);
                        $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $div_row + 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $div_row + 8);
                        $total_diferencia = $total_diferencia + $key->DIFERENCIA;
                        $total_prestado = $total_prestado + $key->ADEUDA;
                        $total_saldo = $total_saldo + $key->{"SE LE ADEUDA"};
                        $last_top = $div_row + 8;
                        $div_row = $div_row + 25;
                    }
                    $last_top = $last_top + 20;
                    $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 2, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 19, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 25.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 25.5, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 32.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 32.5, $last_top + 5);
                    $pdf->Line(/* Izq-X */$left * 39.35, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 39.35, $last_top + 5);

                    $pdf->Line(/* Izq-X */$left * 12, /* Top-Y */ $div_row - 17, /* Largo */ $left * 12, $div_row + 8);
                    $pdf->Text(/* X */$left * 13, /* Y */ $last_top, "TOTAL ACUMULADO: ");
//                    $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ $div_row - 10, /* Largo */ $left * 2, $div_row + 5);
                    $pdf->Text(/* X */$left * 19.5, /* Y */ $last_top, "$ " . number_format($total_prestado, 2, '.', ', '));
//                    $pdf->Line(/* Izq-X */$left * 26, /* Top-Y */ $div_row - 10, /* Largo */ $left * 26, $div_row + 5);
                    $pdf->Text(/* X */$left * 26, /* Y */ $last_top, "$ " . number_format($total_saldo, 2, '.', ', '));
                    $pdf->Text(/* X */$left * 33, /* Y */ $last_top, "$ " . number_format($total_diferencia, 2, '.', ', '));
                    $last_top += 5;
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $last_top, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $last_top);

                    if (!file_exists('uploads/Contratos/Acumulados')) {
                        mkdir('uploads/Contratos/Acumulados', 0777, true);
                    }
                    if (!file_exists('uploads/Contratos/Acumulados/' . $rdata->PRESTADOR)) {
                        mkdir('uploads/Contratos/Acumulados/' . $rdata->PRESTADOR, 0777, true);
                    }
                    $url = 'uploads/Contratos/Acumulados/' . $rdata->PRESTADOR . '/ACUMULADO_' . $rdata->ID . '_' . $rdata->EMPRESA . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                    $pdf->Output($url);
                    print base_url() . $url;
                } else {
                    print 0;
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPDFByMutuanteAgrupado() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $head = $this->prestamos_model->getMutuantesAgrupados();

            $image = "log_1o.png";
            $ancho_pagina = 1240;
            $alto_pagina = 1554;
            $left = 30;
            $right = 30;
            $urls = array();
            $n = 0;
            foreach ($head as $datahead) {
                $pdf = new FPDF('P', 'pt', array($ancho_pagina, $alto_pagina));
                $pdf->AddPage();
                $pdf->Image('media/' . $image, $left * 2, $right * 2, /* ANCHO */ 254, /* ALTO */ 84);
                $pdf->SetFont('Arial', 'B', 32);
                $pdf->SetFont('Arial', '', 35);
                if (strlen($datahead->RAZON) > 26) {
                    $pdf->SetFont('Arial', '', 28);
                    $pdf->Text(/* X */$ancho_pagina / 3.15, /* Y */ $alto_pagina / 12, $datahead->RAZON);
                } else {
                    $pdf->SetFont('Arial', '', 25);
                    $pdf->Text(/* X */$ancho_pagina / 2.4, /* Y */ $alto_pagina / 12, $datahead->RAZON);
                }
                $pdf->SetFont('Arial', '', 25);
                $pdf->Text(/* X */$ancho_pagina / 2.3, /* Y */ $alto_pagina / 10, "REPORTE DE SALDOS");
                $pdf->SetDrawColor(2, 2, 21);
                $pdf->SetFont('Arial', '', 16);
                $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 8);

                $pdf->Text(/* X */$left * 6.5, /* Y */ $alto_pagina / 7.2, "EMPRESA");
                /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 7.2), /* Largo */ $left * 19, ($alto_pagina / 7.8));
                $pdf->Text(/* X */$left * 21, /* Y */ $alto_pagina / 7.2, "ADEUDA");
                /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */$left * 29, /* Top-Y */ ($alto_pagina / 7.15), /* Largo */ $left * 29, ($alto_pagina / 7.8));
                $pdf->Text(/* X */$left * 27, /* Y */ $alto_pagina / 7.2, "SE LE ADEUDA");
                $pdf->Text(/* X */$left * 33.5, /* Y */ $alto_pagina / 7.2, "BALANCE");
                $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 7, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 7);

                $div_row = ($alto_pagina / 7.5) + 30;
                $last_top = $div_row;
                $total_prestado = 0.0;
                $total_saldo = 0.0;
                $total_diferencia = 0.0;
                $pdf->SetFont('Arial', '', 16);

                $rows = $this->prestamos_model->getSaldosByID($datahead->ID);
                foreach ($rows as $key) {
                    $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ $div_row - 15, /* Largo */ $left * 2, $div_row + 8);
                    $pdf->Text(/* X */$left * 2.5, /* Y */ $div_row, $key->EMPRESA);

                    $pdf->Text(/* X */$left * 19.5, /* Y */ $div_row, "$ " . number_format($key->ADEUDA, 2, '.', ', '));
                    $pdf->Text(/* X */$left * 26, /* Y */ $div_row, "$ " . number_format($key->{"SE LE ADEUDA"}, 2, '.', ', '));
                    $pdf->Text(/* X */$left * 33, /* Y */ $div_row, "$ " . number_format($key->DIFERENCIA, 2, '.', ', '));
                    $pdf->Line(/* Izq-X */$left * 39.34, /* Top-Y */ $div_row - 15, /* Largo */ $left * 39.35, $div_row + 8);
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $div_row + 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $div_row + 8);
                    $total_diferencia = $total_diferencia + $key->DIFERENCIA;
                    $total_prestado = $total_prestado + $key->ADEUDA;
                    $total_saldo = $total_saldo + $key->{"SE LE ADEUDA"};
                    $last_top = $div_row + 8;
                    $div_row = $div_row + 25;
                }
                $last_top = $last_top + 20;
                $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 2, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 19, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 25.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 25.5, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 32.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 32.5, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 39.35, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 39.35, $last_top + 5);

                $pdf->Line(/* Izq-X */$left * 12, /* Top-Y */ $div_row - 17, /* Largo */ $left * 12, $div_row + 8);
                $pdf->Text(/* X */$left * 13, /* Y */ $last_top, "TOTAL ACUMULADO: ");
                $pdf->Text(/* X */$left * 19.5, /* Y */ $last_top, "$ " . number_format($total_prestado, 2, '.', ', '));
                $pdf->Text(/* X */$left * 26, /* Y */ $last_top, "$ " . number_format($total_saldo, 2, '.', ', '));
                $pdf->Text(/* X */$left * 33, /* Y */ $last_top, "$ " . number_format($total_diferencia, 2, '.', ', '));
                $last_top += 5;
                $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $last_top, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $last_top);

                if (!file_exists('uploads/Contratos/Acumulados')) {
                    mkdir('uploads/Contratos/Acumulados', 0777, true);
                }
                if (!file_exists('uploads/Contratos/Acumulados/' . $datahead->RAZON)) {
                    mkdir('uploads/Contratos/Acumulados/' . $datahead->RAZON, 0777, true);
                }
                $url = 'uploads/Contratos/Acumulados/' . $datahead->RAZON . '/ACUMULADO_' . $datahead->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                $pdf->Output($url);
                $urls[$n] = base_url() . $url;
                $n = $n + 1;
            }
            if (count($urls) > 0) {
                print json_encode($urls);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* creates a compressed zip file */

    public function create_zip($files = array(), $destination = '', $overwrite = false) {
        //if the zip file already exists and overwrite is false, return false
        if (file_exists($destination) && !$overwrite) {
            return false;
        }
        //vars
        $valid_files = array();
        //if files were passed in...
        if (is_array($files)) {
            //cycle through each file
            foreach ($files as $file) {
                //make sure the file exists
                if (file_exists($file)) {
                    $valid_files[] = $file;
                }
            }
        }
        //if we have good files...
        if (count($valid_files)) {
            //create the archive
            $zip = new ZipArchive();
            if ($zip->open($destination, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
                return false;
            }
            //add the files
            foreach ($valid_files as $file) {
                $zip->addFile($file, $file);
            }
            //debug
            //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
            //close the zip -- done!
            $zip->close();

            //check to make sure the file exists
            return file_exists($destination);
        } else {
            return false;
        }
    }

    public function getZIPPDFByMutuanteAgrupado() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $head = $this->prestamos_model->getMutuantesAgrupados();

            $image = "log_1o.png";
            $ancho_pagina = 1240;
            $alto_pagina = 1554;
            $left = 30;
            $right = 30;
            $urls = array();
            $file_names = array();
            $n = 0;
            foreach ($head as $datahead) {
                $pdf = new FPDF('P', 'pt', array($ancho_pagina, $alto_pagina));
                $pdf->AddPage();
                $pdf->Image('media/' . $image, $left * 2, $right * 2, /* ANCHO */ 254, /* ALTO */ 84);
                $pdf->SetFont('Arial', 'B', 32);
                $pdf->SetFont('Arial', '', 35);
                if (strlen($datahead->RAZON) > 26) {
                    $pdf->SetFont('Arial', '', 28);
                    $pdf->Text(/* X */$ancho_pagina / 3.15, /* Y */ $alto_pagina / 12, $datahead->RAZON);
                } else {
                    $pdf->SetFont('Arial', '', 25);
                    $pdf->Text(/* X */$ancho_pagina / 2.4, /* Y */ $alto_pagina / 12, $datahead->RAZON);
                }
                $pdf->SetFont('Arial', '', 25);
                $pdf->Text(/* X */$ancho_pagina / 2.3, /* Y */ $alto_pagina / 10, "REPORTE DE SALDOS");
                $pdf->SetDrawColor(2, 2, 21);
                $pdf->SetFont('Arial', '', 16);
                $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 8);

                $pdf->Text(/* X */$left * 6.5, /* Y */ $alto_pagina / 7.2, "EMPRESA");
                $pdf->Text(/* X */$left * 21, /* Y */ $alto_pagina / 7.2, "ADEUDA");
                $pdf->Text(/* X */$left * 27, /* Y */ $alto_pagina / 7.2, "SE LE ADEUDA");
                $pdf->Text(/* X */$left * 33.5, /* Y */ $alto_pagina / 7.2, "BALANCE");
                $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $alto_pagina / 7, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $alto_pagina / 7);

                $div_row = ($alto_pagina / 7.5) + 30;
                $last_top = $div_row;
                $total_prestado = 0.0;
                $total_saldo = 0.0;
                $total_diferencia = 0.0;
                $pdf->SetFont('Arial', '', 16);

                $rows = $this->prestamos_model->getSaldosByID($datahead->ID);
                foreach ($rows as $key) {
                    $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ $div_row - 15, /* Largo */ $left * 2, $div_row + 8);
                    $pdf->Text(/* X */$left * 2.5, /* Y */ $div_row, $key->EMPRESA);

                    $pdf->Text(/* X */$left * 19.5, /* Y */ $div_row, "$ " . number_format($key->ADEUDA, 2, '.', ', '));
                    $pdf->Text(/* X */$left * 26, /* Y */ $div_row, "$ " . number_format($key->{"SE LE ADEUDA"}, 2, '.', ', '));
                    $pdf->Text(/* X */$left * 33, /* Y */ $div_row, "$ " . number_format($key->DIFERENCIA, 2, '.', ', '));
                    $pdf->Line(/* Izq-X */$left * 39.34, /* Top-Y */ $div_row - 15, /* Largo */ $left * 39.35, $div_row + 8);
                    $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $div_row + 8, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $div_row + 8);
                    $total_diferencia = $total_diferencia + $key->DIFERENCIA;
                    $total_prestado = $total_prestado + $key->ADEUDA;
                    $total_saldo = $total_saldo + $key->{"SE LE ADEUDA"};
                    $last_top = $div_row + 8;
                    $div_row = $div_row + 25;
                }
                $last_top = $last_top + 20;
                $pdf->Line(/* Izq-X */$left * 2, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 2, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 19, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 19, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 25.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 25.5, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 32.5, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 32.5, $last_top + 5);
                $pdf->Line(/* Izq-X */$left * 39.35, /* Top-Y */ ($alto_pagina / 8), /* Largo */ $left * 39.35, $last_top + 5);

                $pdf->Line(/* Izq-X */$left * 12, /* Top-Y */ $div_row - 17, /* Largo */ $left * 12, $div_row + 8);
                $pdf->Text(/* X */$left * 13, /* Y */ $last_top, "TOTAL ACUMULADO: ");
                $pdf->Text(/* X */$left * 19.5, /* Y */ $last_top, "$ " . number_format($total_prestado, 2, '.', ', '));
                $pdf->Text(/* X */$left * 26, /* Y */ $last_top, "$ " . number_format($total_saldo, 2, '.', ', '));
                $pdf->Text(/* X */$left * 33, /* Y */ $last_top, "$ " . number_format($total_diferencia, 2, '.', ', '));
                $last_top += 5;
                $pdf->Line(/* Izq-X */$left * 2, /* IZQ-Y */ $last_top, /* Largo */ $ancho_pagina - ($right * 2), /* DER-Y */ $last_top);

                if (!file_exists('uploads/Contratos/Acumulados')) {
                    mkdir('uploads/Contratos/Acumulados', 0777, true);
                }
                if (!file_exists('uploads/Contratos/Acumulados/' . $datahead->RAZON)) {
                    mkdir('uploads/Contratos/Acumulados/' . $datahead->RAZON, 0777, true);
                }
                $url = 'uploads/Contratos/Acumulados/' . $datahead->RAZON . '/ACUMULADO_' . $datahead->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                $pdf->Output($url);
                $file_names[$n] = $datahead->RAZON . '/ACUMULADO_' . $datahead->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                $urls[$n] = base_url() . $url;
                $n = $n + 1;
            }

            $zip = new ZipArchive();
            $filename = "SALDOS DE MUTUOS.zip";
            $path = base_url() . 'uploads/Contratos/Acumulados/';
            if ($zip->open('uploads/Contratos/Acumulados/' . $filename, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
                exit("NO ES POSIBLE GENERAR EL ARCHIVO <$filename>\n");
            }
            for ($index = 0; $index < count($urls); $index++) {
                if ($zip->addFile('uploads/Contratos/Acumulados/' . $file_names[$index], $file_names[$index])) {
                    
                } else {
                    $zip->addFromString("ERROR.txt", "!!!!!NO SE AGREGO EL ARCHIVO " . $urls[$index]);
                }
            }
            print $path . 'SALDOS DE MUTUOS.zip';
            $zip->close();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPDFByMutuantesAgrupados() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            if (!isset($ID)) {
//                extract(filter_input_array(INPUT_POST));
//            }
            $head = $this->prestamos_model->getMutuantesAgrupados();
            $image = "log_1o.png";

            $alto_pagina = 1200;
            $ancho_pagina = 1554;
            $left = 30;
            $right = 30;
            $top = 180;

//            $top = 380;
            $total_prestado = 0.0;
            $total_saldo = 0.0;
            $total_diferencia = 0.0;

            $pdf = new FPDF('L', 'pt', array($ancho_pagina, $alto_pagina));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, $left * 2, $right * 2, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', '', 35);
            $pdf->Text(/* X */$ancho_pagina / 2, /* Y */ $top - 80, "REPORTE DE SALDO");
            $pdf->SetY(-15);
            $pdf->SetAutoPageBreak(false);
            foreach ($head as $datahead) {
                if ($top > 1100) {
                    $pdf->AddPage();
                }
                $rows = $this->prestamos_model->getSaldosByID($datahead->ID);
                $nrows = count($rows);
                if (isset($rows[0])) {
                    $rdata = $rows[0];
                    $pdf->SetDrawColor(121, 121, 121);
                    if (isset($rdata->PRESTADOR)) {
                        $pdf->SetTextColor(4, 71, 136);
                        if (strlen($rdata->PRESTADOR) > 35) {
                            $pdf->SetFont('Arial', '', 28);
//                            $pdf->Text(/* X */$left * 3, /* Y */ $top, $rdata->PRESTADOR);
                            $pdf->SetXY($ancho_pagina / 3, $top);
                            $pdf->Cell(/* X */$left * 10, 0, $rdata->PRESTADOR, 0, 1, 'L');
                            $top += 50;
                        } else {
                            $pdf->SetFont('Arial', '', 25);
                            $pdf->SetXY($ancho_pagina / 2.2, $top);
                            $pdf->Cell(/* X */$left * 10, 0, $rdata->PRESTADOR, 0, 1, 'L');
                            $top += 50;
                        }
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->SetFont('Arial', 'B', 18);
                        $pdf->SetXY($left * 3, $top - 12);
                        $pdf->Cell(/* X */$left * 7, 0, "EMPRESA", 0, 1, 'L');

                        $pdf->SetXY($left * 22, $top - 12);
                        $pdf->Cell(/* X */$left * 7, 0, "ADEUDA", 0, 1, 'L');

                        $pdf->SetXY($left * 32, $top - 12);
                        $pdf->Cell(/* X */$left * 7, 0, "SE LE ADEUDA", 0, 1, 'L');

                        $pdf->SetXY($left * 40, $top - 12);
                        $pdf->Cell(/* X */$left * 7, 0, "BALANCE", 0, 1, 'L');

                        $pdf->Line(/* Izq-X */$left * 3, /* Top-Y */ $top + 10, /* Largo */ $left * 46, $top + 10);
                        $top += 30;
                        foreach ($rows as $row) {
                            if ($top > 1100) {
                                $pdf->AddPage();
                            }
                            $pdf->SetFont('Arial', '', 18);
                            $pdf->SetXY($left * 3, $top - 12);
                            $pdf->SetTextColor(0, 0, 0);
                            $pdf->Cell(/* X */$left * 10, 25, $row->EMPRESA, 0, 1, 'L');
                            $pdf->SetXY($left * 22, $top - 12);
                            $pdf->SetTextColor(0, 102, 0);
                            $pdf->Cell(/* X */$left * 25, 25, "$ " . number_format($row->ADEUDA, 2, '.', ', '), 0, 1, 'L');

                            $pdf->SetTextColor(204, 0, 0);
                            $pdf->SetXY($left * 32, $top - 12);
                            $pdf->Cell(/* X */$left * 25, 25, "$ " . number_format($row->{"SE LE ADEUDA"}, 2, '.', ', '), 0, 1, 'L');

                            $pdf->SetTextColor(16, 139, 156);
                            $pdf->SetXY($left * 40, $top - 12);
                            $pdf->Cell(/* X */$left * 25, 25, "$ " . number_format($row->DIFERENCIA, 2, '.', ', '), 0, 1, 'L');

                            $total_prestado += $row->ADEUDA;
                            $total_saldo += $row->{"SE LE ADEUDA"};
                            $total_diferencia += $row->DIFERENCIA;
                            $top += 30;
                        }
                        $pdf->SetFont('Arial', 'B', 18);
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->Line(/* Izq-X */$left * 3, /* Top-Y */ $top - 20, /* Largo */ $left * 46, $top - 20);
                        $pdf->SetXY($left * 15, $top - 16);
                        $pdf->Cell(/* X */$left * 25, 25, "TOTAL ACUMULADO", 0, 1, 'L');

//                        $pdf->Text(/* X */$left * 7, /* Y */ $top, "TOTAL ACUMULADO");
                        $pdf->SetTextColor(0, 102, 0);
                        $pdf->SetXY($left * 22, $top - 16);
                        $pdf->Cell(/* X */$left * 25, 25, "$ " . number_format($total_prestado, 2, '.', ', '), 0, 1, 'L');

                        $pdf->SetTextColor(204, 0, 0);
                        $pdf->SetXY($left * 32, $top - 16);
                        $pdf->Cell(/* X */$left * 25, 25, "$ " . number_format($total_saldo, 2, '.', ', '), 0, 1, 'L');

                        $pdf->SetTextColor(16, 139, 156);
                        $pdf->SetXY($left * 40, $top - 16);
                        $pdf->Cell(/* X */$left * 25, 25, "$ " . number_format($total_diferencia, 2, '.', ', '), 0, 1, 'L');

                        $total_prestado = 0;
                        $total_saldo = 0;
                        $total_diferencia = 0;
//                        $pdf->SetAutoPageBreak($alto_pagina,10);
                        $top += 40;
                        if (!file_exists('uploads/Contratos/Acumulados')) {
                            mkdir('uploads/Contratos/Acumulados', 0777, true);
                        }
                        if (!file_exists('uploads/Contratos/Acumulados/' . $rdata->PRESTADOR)) {
                            mkdir('uploads/Contratos/Acumulados/' . $rdata->PRESTADOR, 0777, true);
                        }
                        $url = 'uploads/Contratos/Acumulados/' . $rdata->PRESTADOR . '/ACUMULADO_' . $rdata->ID . '_' . $rdata->EMPRESA . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
                    } else {
                        print 0;
                    }
                } else {
                    print 0;
                }
            }
            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPDFtest() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 12, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 260; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total_prestado = 0.0;
            $total_saldo = 0.0;
            $total_diferencia = 0.0;
            $n_page = 1;

            $top = 0;
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(15);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'REPORTE DE SALDOS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(30);
            $pdf->SetFont('Arial', '', 10);
            $head = $this->prestamos_model->getMutuantesAgrupados();
            foreach ($head as $datahead) {
                if ($pdf->GetY() > 190) {
                    $pdf->SetDrawColor(192, 192, 192);
                    $pdf->SetTextColor(192, 192, 192);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                    $pdf->SetX(150);
                    $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                    $n_page += 1;
                    $pdf->AddPage();
                    $top = 0;
                    $pdf->SetDrawColor(0, 0, 0);
                }
                $pdf->SetTextColor(4, 71, 136);
                $pdf->SetFont('Arial', '', 16);
                if (strlen($datahead->RAZON) > 35) {
                    $pdf->SetX(90);
                    $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                } else {
                    $pdf->SetX(120);
                    $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                }
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetX(15);
                $pdf->Cell(/* X */200, 0, "EMPRESA", 0, 1, 'L');
                $pdf->SetFont('Arial', 'B', 6);
                $txt = "LE DEBEN A " . $datahead->NCOMERCIAL;
                if (strlen("LE DEBEN A " . $datahead->NCOMERCIAL) > 40) {
                    $pdf->SetX(110);
                } else {
                    $pdf->SetX(120);
                }
                $pdf->Cell(/* X */300, 0, "LE DEBEN A " . $datahead->NCOMERCIAL, 0, 1, 'L');
                $pdf->SetX(180);
                $pdf->Cell(/* X */400, 0, $datahead->NCOMERCIAL . " LE DEBE A", 0, 1, 'L');
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetX(240);
                $pdf->Cell(/* X */500, 0, "BALANCE", 0, 1, 'L');
                $pdf->SetFont('Arial', '', 10);
                $pdf->Cell(100, 2, "", 0, 1, 'L');

                $total_adeuda = 0;
                $total_se_le_adeuda = 0;
                $total_diferencias = 0;
                $rows = $this->prestamos_model->getSaldosByIdMutuante($datahead->ID);

                foreach ($rows as $row) {
//                    if ($top > $page_height) {
//                        $pdf->AddPage();
//                        $top = 0; 
//                    }
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                    }
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(14, 8, $row->EMPRESA, 0, 0, 'L');
                    $pdf->SetX(120);
                    $pdf->SetTextColor(0, 102, 0);
                    $pdf->Cell(10, 8, '$ ' . number_format($row->ADEUDA, 2, '.', ', '), 0, 0, 'L');
                    $rowmxmu = $this->prestamos_model->getSaldoByIdMutuatarioXMutuante($row->IDMU, $row->IDMUT);
                    $dtm = json_encode($rowmxmu);
                    $dif = 0.0;
                    $se_le_adeuda = 0.0;
                    if (count($rowmxmu) > 0) {
                        $se_le_adeuda = $rowmxmu[0]->{"SE LE ADEUDA"} * -1;
                        $pdf->SetX(180);
                        $pdf->SetTextColor(204, 0, 0);
                        $pdf->Cell(10, 8, '$ ' . number_format($se_le_adeuda, 2, '.', ', '), 0, 0, 'L');
                        $dif = $row->ADEUDA - $rowmxmu[0]->{"SE LE ADEUDA"};
                        $pdf->SetX(240);
                        $pdf->SetTextColor(16, 139, 156);
                        $pdf->Cell(10, 8, '$ ' . number_format($dif, 2, '.', ', '), 0, 1, 'L');
                        $total_se_le_adeuda = $total_se_le_adeuda + $se_le_adeuda;
                        $total_diferencia = $total_diferencia + $dif;
                        $total_saldo += $se_le_adeuda;
                    } else {
                        $pdf->SetX(180);
                        $pdf->SetTextColor(0, 102, 0);
                        $pdf->SetTextColor(204, 0, 0);
                        $pdf->Cell(10, 8, '$ ' . number_format(0, 2, '.', ', '), 0, 0, 'L');
                        $pdf->SetX(240);
                        $pdf->SetTextColor(16, 139, 156);
                        $pdf->Cell(10, 8, '$ ' . number_format($row->ADEUDA, 2, '.', ', '), 0, 1, 'L');
                        $total_diferencia = $total_diferencia + $row->ADEUDA;
                        $se_le_adeuda = $row->ADEUDA;
                    }
                    $top = $top + 20;
                    $total_prestado += $row->ADEUDA;
                    $total_saldo += $row->{"SE LE ADEUDA"};
                }
                $xdif = 0;
                $rowx = $this->prestamos_model->getSaldosByIdMutuatario($datahead->ID);
                foreach ($rowx as $row) {
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                    }
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(14, 8, $row->EMPRESA, 0, 0, 'L');
                    $pdf->SetX(120);
                    $pdf->SetTextColor(0, 102, 0);
                    $pdf->Cell(10, 8, '$ ' . number_format($row->ADEUDA, 2, '.', ', '), 0, 0, 'L');
                    $se_le_adeuda = $row->{"SE LE ADEUDA"} * -1;
                    $pdf->SetX(180);
                    $pdf->SetTextColor(204, 0, 0);
                    $pdf->Cell(10, 8, '$ ' . number_format($se_le_adeuda, 2, '.', ', '), 0, 0, 'L');
                    $pdf->SetX(240);
                    $pdf->SetTextColor(16, 139, 156);
                    $pdf->Cell(10, 8, '$ ' . number_format($se_le_adeuda, 2, '.', ', '), 0, 1, 'L');
                    $top = $top + 18;
                    $total_saldo += $se_le_adeuda;
                    $total_diferencia = $total_diferencia + $se_le_adeuda;
                }
                if ($pdf->GetY() > 190) {
                    $pdf->SetDrawColor(192, 192, 192);
                    $pdf->SetTextColor(192, 192, 192);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                    $pdf->SetX(150);
                    $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                    $n_page += 1;
                    $pdf->AddPage();
                    $top = 0;
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());

                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetX(80);
                $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
                $pdf->SetX(120);
                $pdf->SetTextColor(0, 102, 0);
                $pdf->Cell(/* X */10, 8, "$ " . number_format($total_prestado, 2, '.', ', '), 0, 0, 'L');

                $pdf->SetX(180);
                $pdf->SetTextColor(204, 0, 0);
                $pdf->Cell(/* X */10, 8, "$ " . number_format($total_saldo, 2, '.', ', '), 0, 0, 'L');

                $pdf->SetX(240);
                $pdf->SetTextColor(16, 139, 156);
                $pdf->Cell(/* X */10, 8, "$ " . number_format($total_diferencia, 2, '.', ', '), 0, 1, 'L');

                $total_prestado = 0.0;
                $total_saldo = 0.0;
                $total_diferencia = 0.0;
                $top += 20;
                $pdf->SetFont('Arial', '', 10);
            }
            $head = $this->prestamos_model->getMutuatariosAgrupados();
            if (count($head) > 0) {
                foreach ($head as $datahead) {
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                    $pdf->SetTextColor(4, 71, 136);
                    $pdf->SetFont('Arial', '', 16);
                    if (strlen($datahead->RAZON) > 35) {
                        $pdf->SetX(90);
                        $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                    } else {
                        $pdf->SetX(120);
                        $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                    }
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(/* X */200, 0, "EMPRESA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 7);
                    $pdf->SetX(120);
                    $pdf->Cell(/* X */300, 0, "LE DEBEN A " . $datahead->RAZON, 0, 1, 'L');
                    $pdf->SetX(180);
                    $pdf->Cell(/* X */400, 0, $datahead->RAZON . " LE DEBE A", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(240);
                    $pdf->Cell(/* X */500, 0, "BALANCE", 0, 1, 'L');
                    $pdf->SetFont('Arial', '', 10);

                    $row = $this->prestamos_model->getSaldosByIdMutuatario($datahead->ID);
                    foreach ($row as $datarow) {
                        if ($pdf->GetY() > 190) {
                            $pdf->SetDrawColor(192, 192, 192);
                            $pdf->SetTextColor(192, 192, 192);
                            $pdf->Cell(100, 5, "", 0, 1, 'L');
                            $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                            $pdf->SetX(150);
                            $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                            $n_page += 1;
                            $pdf->AddPage();
                            $top = 0;
                            $pdf->SetDrawColor(0, 0, 0);
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->SetX(15);
                        $pdf->Cell(12, 8, $datarow->EMPRESA, 0, 0, 'L');
                        $pdf->SetTextColor(0, 102, 0);
                        $pdf->SetX(120);
                        $pdf->Cell(10, 8, "$ " . number_format(0, 2, '.', ', '), 0, 0, 'L');
                        $pdf->SetTextColor(204, 0, 0);
                        $pdf->SetX(180);
                        $xdif = $datarow->{"SE LE ADEUDA"} * -1;
                        $total_saldo = $total_saldo + $xdif;
                        $pdf->Cell(10, 8, "$ " . number_format($xdif, 2, '.', ', '), 0, 0, 'L');
                        $pdf->SetTextColor(16, 139, 156);
                        $pdf->SetX(240);
                        $pdf->Cell(10, 8, "$ " . number_format($xdif, 2, '.', ', '), 0, 1, 'L');
                        $total_diferencia = $total_diferencia + $xdif;
                        $top = $top + 20;
                    }
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(80);
                    $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
                    $pdf->SetX(120);
                    $pdf->SetTextColor(0, 102, 0);
                    $pdf->Cell(/* X */10, 8, "$ " . number_format(0, 2, '.', ', '), 0, 0, 'L');

                    $pdf->SetX(180);
                    $pdf->SetTextColor(204, 0, 0);
                    $pdf->Cell(/* X */10, 8, "$ " . number_format($total_saldo, 2, '.', ', '), 0, 0, 'L');

                    $pdf->SetX(240);
                    $pdf->SetTextColor(16, 139, 156);
                    $pdf->Cell(/* X */10, 8, "$ " . number_format($total_diferencia, 2, '.', ', '), 0, 1, 'L');

                    $total_prestado = 0.0;
                    $total_saldo = 0.0;
                    $total_diferencia = 0.0;
                    $top += 20;

                    $total_adeuda = 0;
                    $total_se_le_adeuda = 0;
                    $total_diferencias = 0;
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                }
            }


            if (!file_exists('uploads/Contratos/Acumulados')) {
                mkdir('uploads/Contratos/Acumulados', 0777, true);
            }
            if (!file_exists('uploads/Contratos/Acumulados/')) {
                mkdir('uploads/Contratos/Acumulados/', 0777, true);
            }
            $url = 'uploads/Contratos/Acumulados/ACUMULADO_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getLeDebeA() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 12, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 260; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total_prestado = 0.0;
            $total_saldo = 0.0;
            $total_diferencia = 0.0;
            $n_page = 1;

            $top = 0;
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(15);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'REPORTE DE SALDOS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(30);
            $pdf->SetFont('Arial', '', 10);
            $head = $this->prestamos_model->getMutuantesAgrupados();
            foreach ($head as $datahead) {
                if ($pdf->GetY() > 190) {
                    $pdf->SetDrawColor(192, 192, 192);
                    $pdf->SetTextColor(192, 192, 192);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                    $pdf->SetX(150);
                    $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                    $n_page += 1;
                    $pdf->AddPage();
                    $top = 0;
                    $pdf->SetDrawColor(0, 0, 0);
                }
                $pdf->SetTextColor(4, 71, 136);
                $pdf->SetFont('Arial', '', 16);
                if (strlen($datahead->RAZON) > 35) {
                    $pdf->SetX(90);
                    $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                } else {
                    $pdf->SetX(120);
                    $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                    $pdf->Cell(100, 1, "", 0, 1, 'L');
                }
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetX(15);
                $pdf->Cell(/* X */200, 0, "EMPRESA", 0, 1, 'L');
                $pdf->SetFont('Arial', 'B', 9);
                $txt = "LE DEBEN A " . $datahead->NCOMERCIAL;
                if (strlen("LE DEBEN A " . $datahead->NCOMERCIAL) > 40) {
                    $pdf->SetX(150);
                } else {
                    $pdf->SetX(150);
                }
//                $pdf->Cell(/* X */300, 0, "LE DEBEN A " . $datahead->NCOMERCIAL, 0, 1, 'L');
                $pdf->SetX(150);
                $pdf->Cell(/* X */400, 0, $datahead->NCOMERCIAL . " LE DEBE A", 0, 1, 'L');
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetX(240);
//                $pdf->Cell(/* X */500, 0, "BALANCE", 0, 1, 'L');
                $pdf->SetFont('Arial', '', 10);
                $pdf->Cell(100, 2, "", 0, 1, 'L');

                $total_adeuda = 0;
                $total_se_le_adeuda = 0;
                $total_diferencias = 0;
                $rows = $this->prestamos_model->getSaldosByIdMutuante($datahead->ID);

                foreach ($rows as $row) {
//                    if ($top > $page_height) {
//                        $pdf->AddPage();
//                        $top = 0; 
//                    }
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                    }
                    $rowmxmu = $this->prestamos_model->getSaldoByIdMutuatarioXMutuante($row->IDMU, $row->IDMUT);

                    $pdf->SetX(120);
                    $dtm = json_encode($rowmxmu);
                    $dif = 0.0;
                    $se_le_adeuda = 0.0;
                    if (count($rowmxmu) > 0) {
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->SetX(15);
                        $pdf->Cell(14, 8, $row->EMPRESA, 0, 0, 'L');
                        $se_le_adeuda = $rowmxmu[0]->{"SE LE ADEUDA"};
                        $pdf->SetX(150);
                        $pdf->SetTextColor(204, 0, 0);
                        $pdf->Cell(10, 8, '$ ' . number_format($se_le_adeuda, 2, '.', ', '), 0, 1, 'L');
                        $dif = $row->ADEUDA - $rowmxmu[0]->{"SE LE ADEUDA"};
                        $pdf->SetX(240);
                        $pdf->SetTextColor(16, 139, 156);
//                        $pdf->Cell(10, 8, '$ ' . number_format($dif, 2, '.', ', '), 0, 1, 'L');
                        $total_se_le_adeuda = $total_se_le_adeuda + $se_le_adeuda;
                        $total_diferencia = $total_diferencia + $dif;
                        $total_saldo += $se_le_adeuda;
                    } else {
                        $pdf->SetX(180);
                        $pdf->SetTextColor(0, 102, 0);
                        $pdf->SetTextColor(204, 0, 0);
//                        $pdf->Cell(10, 8, '$ ' . number_format(0, 2, '.', ', '), 0, 0, 'L');
                        $pdf->SetX(240);
                        $pdf->SetTextColor(16, 139, 156);
//                        $pdf->Cell(10, 8, '$ ' . number_format($row->ADEUDA, 2, '.', ', '), 0, 1, 'L');
                        $total_diferencia = $total_diferencia + $row->ADEUDA;
                        $se_le_adeuda = $row->ADEUDA;
                    }
                    $top = $top + 20;
                    $total_prestado += $row->ADEUDA;
                    $total_saldo += $row->{"SE LE ADEUDA"};
                }
                $xdif = 0;
                $rowx = $this->prestamos_model->getSaldosByIdMutuatario($datahead->ID);
                foreach ($rowx as $row) {
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                    }
                    $se_le_adeuda = $row->{"SE LE ADEUDA"};
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(14, 8, $row->EMPRESA, 0, 0, 'L');
                    $pdf->SetX(120);
                    $pdf->SetTextColor(0, 102, 0);
//                    $pdf->Cell(10, 8, '$ ' . number_format($row->ADEUDA, 2, '.', ', '), 0, 0, 'L');
                    $pdf->SetX(150);
                    $pdf->SetTextColor(204, 0, 0);
                    $pdf->Cell(10, 8, '$ ' . number_format($se_le_adeuda, 2, '.', ', '), 0, 1, 'L');
                    $pdf->SetX(240);
                    $pdf->SetTextColor(16, 139, 156);
//                    $pdf->Cell(10, 8, '$ ' . number_format($se_le_adeuda, 2, '.', ', '), 0, 1, 'L');
                    $top = $top + 18;
                    $total_saldo += $se_le_adeuda;
                    $total_diferencia = $total_diferencia + $se_le_adeuda;
                }
                if ($pdf->GetY() > 190) {
                    $pdf->SetDrawColor(192, 192, 192);
                    $pdf->SetTextColor(192, 192, 192);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                    $pdf->SetX(150);
                    $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                    $n_page += 1;
                    $pdf->AddPage();
                    $top = 0;
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());

                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetX(80);
                $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
                $pdf->SetX(120);
                $pdf->SetTextColor(0, 102, 0);
//                $pdf->Cell(/* X */10, 8, "$ " . number_format($total_prestado, 2, '.', ', '), 0, 0, 'L');

                $pdf->SetX(150);
                $pdf->SetTextColor(204, 0, 0);
                $pdf->Cell(/* X */10, 8, "$ " . number_format($total_saldo, 2, '.', ', '), 0, 1, 'L');

                $pdf->SetX(240);
                $pdf->SetTextColor(16, 139, 156);
//            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_diferencia, 2, '.', ', '), 0, 1, 'L');

                $total_prestado = 0.0;
                $total_saldo = 0.0;
                $total_diferencia = 0.0;
                $top += 20;
                $pdf->SetFont('Arial', '', 10);
            }
            $head = $this->prestamos_model->getMutuatariosAgrupados();
            if (count($head) > 0) {
                foreach ($head as $datahead) {
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                    $pdf->SetTextColor(4, 71, 136);
                    $pdf->SetFont('Arial', '', 16);
                    if (strlen($datahead->RAZON) > 35) {
                        $pdf->SetX(90);
                        $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                    } else {
                        $pdf->SetX(120);
                        $pdf->Cell(100, 10, $datahead->RAZON, 0, 1, 'L');
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                        $pdf->Cell(100, 1, "", 0, 1, 'L');
                    }
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(/* X */200, 0, "EMPRESA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(100);
//                    $pdf->Cell(/* X */300, 0, "LE DEBEN A " . $datahead->RAZON, 0, 1, 'L');
                    $pdf->SetX(150);
                    $pdf->Cell(/* X */400, 0, $datahead->RAZON . " LE DEBE A", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(240);
//                    $pdf->Cell(/* X */500, 0, "BALANCE", 0, 1, 'L');
                    $pdf->SetFont('Arial', '', 10);

                    $row = $this->prestamos_model->getSaldosByIdMutuatario($datahead->ID);
                    foreach ($row as $datarow) {
                        if ($pdf->GetY() > 190) {
                            $pdf->SetDrawColor(192, 192, 192);
                            $pdf->SetTextColor(192, 192, 192);
                            $pdf->Cell(100, 5, "", 0, 1, 'L');
                            $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                            $pdf->SetX(150);
                            $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                            $n_page += 1;
                            $pdf->AddPage();
                            $top = 0;
                            $pdf->SetDrawColor(0, 0, 0);
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->SetX(15);
                        $pdf->Cell(12, 8, $datarow->EMPRESA, 0, 0, 'L');
                        $pdf->SetTextColor(0, 102, 0);
                        $pdf->SetX(120);
//                        $pdf->Cell(10, 8, "$ " . number_format(0, 2, '.', ', '), 0, 0, 'L');
                        $pdf->SetTextColor(204, 0, 0);
                        $pdf->SetX(150);
                        $xdif = $datarow->{"SE LE ADEUDA"};
                        $total_saldo = $total_saldo + $xdif;
                        $pdf->Cell(10, 8, "$ " . number_format($xdif, 2, '.', ', '), 0, 1, 'L');
                        $pdf->SetTextColor(16, 139, 156);
                        $pdf->SetX(240);
//                        $pdf->Cell(10, 8, "$ " . number_format($xdif, 2, '.', ', '), 0, 1, 'L');
                        $total_diferencia = $total_diferencia + $xdif;
                        $top = $top + 20;
                    }
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 275, $pdf->GetY() - 2);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(80);
                    $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
                    $pdf->SetX(120);
                    $pdf->SetTextColor(0, 102, 0);
//                    $pdf->Cell(/* X */10, 8, "$ " . number_format(0, 2, '.', ', '), 0, 0, 'L');

                    $pdf->SetX(150);
                    $pdf->SetTextColor(204, 0, 0);
                    $pdf->Cell(/* X */10, 8, "$ " . number_format($total_saldo, 2, '.', ', '), 0, 1, 'L');

                    $pdf->SetX(240);
                    $pdf->SetTextColor(16, 139, 156);
//                    $pdf->Cell(/* X */10, 8, "$ " . number_format($total_diferencia, 2, '.', ', '), 0, 1, 'L');

                    $total_prestado = 0.0;
                    $total_saldo = 0.0;
                    $total_diferencia = 0.0;
                    $top += 20;

                    $total_adeuda = 0;
                    $total_se_le_adeuda = 0;
                    $total_diferencias = 0;
                    if ($pdf->GetY() > 190) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                }
            }

            if (!file_exists('uploads/Contratos/Acumulados')) {
                mkdir('uploads/Contratos/Acumulados', 0777, true);
            }
            if (!file_exists('uploads/Contratos/Acumulados/')) {
                mkdir('uploads/Contratos/Acumulados/', 0777, true);
            }
            $url = 'uploads/Contratos/Acumulados/ACUMULADO_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPDFtestR() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $p = new FPDF();
            $p->AddPage();
            $p->SetFont('Arial', 'B', 16);
            $p->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 286.93; // mm (portrait letter)
            $bottom_margin = 0; // mm

            for ($i = 0; $i <= 100; $i++) {
                $block = floor($i / 6);
                $space_left = $page_height - ($p->GetY() + $bottom_margin); // space left on page
                if ($i / 6 == floor($i / 6) && $height_of_cell > $space_left) {
                    $p->AddPage(); // page break
                }
                $p->Cell(100, 10, 'This is a text line - Group ' . $block, 'B', 2);
            }
            if (!file_exists('uploads/Contratos/Acumulados')) {
                mkdir('uploads/Contratos/Acumulados', 0777, true);
            }
            if (!file_exists('uploads/Contratos/Acumulados/')) {
                mkdir('uploads/Contratos/Acumulados/', 0777, true);
            }
            $url = 'uploads/Contratos/Acumulados/ACUMULADO_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $p->Output($url);
            print base_url() . $url;
//            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarPago() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
//                print $ID;
                $row = $this->prestamos_model->getPagoByID($ID);
                $rowx = $this->prestamos_model->getSaldoByID($row[0]->IdContratoDeMutuo);
                $cantidad_prestada = $row[0]->Pago + $rowx[0]->Saldo;
                $saldo = $cantidad_prestada;
                /* ACCIONES */
                /* SE COMPARA SI EL PAGO ES EL RESPONSABLE DE QUE SE HAYA CONCLUIDO EL PAGO DE LOS PRESTAMOS O NO */
                /* ADEMAS SE OCUPA ACTUALIZAR EL SALDO DE ESE MOVIMIENTO, PARA REGRESARLO A UN ESTADO ANTERIOR, DONDE TENIA O NO PAGOS */
                /* ASÍ MISMO CANCELAR EL MOVIMIENTO QUE SE HIZO EN EL HISTORIAL DE PAGOS */
                if ($rowx[0]->CantidadPrestada == $cantidad_prestada) {
                    $data = array(
                        'Saldo' => $saldo,
                        'Estatus' => 'SIN PAGOS'
                    );
                    $ID = $this->prestamos_model->onAction("ContratosDeMutuo", $data, "update", array('ID', $rowx[0]->ID));
                    $data = array(
                        'Estatus' => 'CANCELADO'
                    );
                    $ID = $this->prestamos_model->onAction("PagoDeContratoDeMutuo", $data, "update", array('ID', $row[0]->ID));
                    print 'NUEVO ESTATUS: SIN PAGOS, ';
                    print 'NUEVO SALDO: ' . $saldo . ' MOVIMIENTO ' . $row[0]->ID . ' EN HISTORIAL DE PAGOS CON UN MONTO DE ' . $row[0]->Pago . ', CANCELADO';
                } else {
                    $data = array(
                        'Saldo' => $saldo,
                        'Estatus' => 'PAGOS PARCIALES'
                    );
                    $ID = $this->prestamos_model->onAction("ContratosDeMutuo", $data, "update", array('ID', $rowx[0]->ID));
                    $data = array(
                        'Estatus' => 'CANCELADO'
                    );
                    $ID = $this->prestamos_model->onAction("PagoDeContratoDeMutuo", $data, "update", array('ID', $row[0]->ID));
                    print 'NUEVO ESTATUS: PAGOS PARCIALES, ';
                    print 'SALDO ORIGINAL: ' . $rowx[0]->CantidadPrestada . ', SALDO PARCIAL: ' . $saldo . ', MOVIMIENTO ' . $row[0]->ID . ' EN HISTORIAL DE PAGOS CON UN MONTO DE ' . $row[0]->Pago . ', CANCELADO';
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarPrestamo() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'CANCELADO'
            );
            $this->prestamos_model->onAction("ContratosDeMutuo", $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}