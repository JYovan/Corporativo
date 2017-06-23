<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlCobranza extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->load->model("modelo");
        $this->load->model("cobranza_model");
    }

    public function index() {
        $this->onLoad();
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

    public function onLoad() {
        try {
            session_start();

            if (isset($_SESSION["ID"])) {
                $indiceuser = $_SESSION["ID"];
                $where = '';
                $USUARIOS = $this->modelo->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $where = '';
                $d_RefTipo = $this->modelo->getRefTipo($where);
                $data['RefTipo'] = $d_RefTipo;
                $where = '';
                $Estatus = $this->modelo->getEstatusRef($where);
                $data['Estatus'] = $Estatus;
                $where = '';
                $d_responsables = $this->modelo->getResponsable($where);
                $data['Responsables'] = $d_responsables;
                $d_ID_cliente = $this->modelo->getID_Cliente($where);
                $data['ID_cliente'] = $d_ID_cliente;
                $Tarifa = $this->modelo->getTarifa();
                $data['Tarifa'] = $Tarifa;
                $Meses = $this->modelo->getMeses($where);
                $data['Meses'] = $Meses;
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'vCobranza';
                $this->_renderView($data);
            } else {
                $this->load->view('layout/base/lytBaseHead');
                $this->load->view('vLogin');
                $this->load->view('layout/base/lytBaseFoot');
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onLoadData() {
        try {
            if (isset($_POST["INDICE"])) {
                extract($_POST);
                switch ($INDICE) {
                    case 1:
                        $this->getRecords();
                        break;
                    default:
                        break;
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* FUNCIONES ACTUALES */

    public function getRecords() {
        try {
            $data = $this->cobranza_model->getRecords();
//            var_dump($data);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialDeIngresos() {
        try {
            $data = $this->cobranza_model->getHistorialDeIngresos();
//            var_dump($data);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_STRING)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->cobranza_model->getRecordByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMontoByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_STRING)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->cobranza_model->getMontoByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumeroDeCobro() {
        try {
            $data = $this->cobranza_model->getNumeroDeCobro();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $data = $this->cobranza_model->getUsuarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDirectorio() {
        try {
            $data = $this->cobranza_model->getDirectorio();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresasEnCobranza() {
        try {
            $data = $this->cobranza_model->getEmpresasEnCobranza();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getClientesEnCobranza() {
        try {
            $data = $this->cobranza_model->getClientesEnCobranza();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratosDeObra() {
        try {
            $data = $this->cobranza_model->getContratosDeObra();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratosDeObraEnCobranza() {
        try {
            $data = $this->cobranza_model->getContratosDeObraEnCobranza();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratosConSaldo() {
        try {
            $data = $this->cobranza_model->getContratosConSaldo();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function addOrdenDeCobro() {
        try {
            extract(filter_input_array(INPUT_POST));
            var_dump(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'Folio'), FILTER_SANITIZE_STRING)) {
                $data = array(
                    'Folio' => $Folio,
                    'Cliente' => $Cliente,
                    'Concepto' => strtoupper($Concepto),
                    'Tarifa' => $Tarifa,
                    'MontoAPagar' => $MontoAPagar,
                    'FechaCobro' => $FechaCobro,
                    'IdPrestadorDelServicio' => $IdPrestadorDelServicio,
                    'IdEmisorDeLaOrden' => $IdEmisorDeLaOrden,
                    'NFactura' => $NFactura,
                    'IdCliente' => $Cliente,
                    'Saldo' => $MontoAPagar,
                    'Registro' => Date('d/m/Y h:i:s a'),
                    'IdContrato' => $IdContrato,
                    'MontoContrato' => $MontoContrato
                );
                $ID = $this->cobranza_model->onAction("Cobranza", $data, "save", 0);
//                var_dump($_FILES);
                print 1;
                $tmpFilePath = $_FILES['Factura']['tmp_name'];
                if (!file_exists('uploads/Cobranza')) {
                    mkdir('uploads/Cobranza', 0777, true);
                }
                if (!file_exists('uploads/Cobranza/OrdenesDeCobro')) {
                    mkdir('uploads/Cobranza/OrdenesDeCobro', 0777, true);
                }
                if (!file_exists('uploads/Cobranza/OrdenesDeCobro/' . $ID)) {
                    mkdir('uploads/Cobranza/OrdenesDeCobro/' . $ID, 0777, true);
                }
                $newFilePath = "uploads/Cobranza/OrdenesDeCobro/$ID/" . $_FILES['Factura']['name'];

                //Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    print 'ARCHIVO SUBIDO CON EXITO';
                    $data = array(
                        'Url' => $newFilePath);
                    $this->cobranza_model->onAction('Cobranza', $data, "update", array('ID', $ID));
                } else {
                    print 'NO SE SUBIO NI VERGA';
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            print $exc->getMessage();
        }
    }

    public function addCobro() {
        try {
            extract(filter_input_array(INPUT_POST));

            if (filter_var(filter_input(INPUT_POST, 'IdCobranza'), FILTER_SANITIZE_NUMBER_INT)) {

                $data = array(
                    'NoRecibo' => $NoRecibo,
                    'FechaEmsion' => $FechaEmsion,
                    'FechaPago' => $FechaPago,
                    'Cliente' => $Recibi,
                    'Cantidad' => $Cantidad,
                    'Concepto' => ($Concepto),
                    'Emisor' => $Emisor,
                    'Numero' => $Numero,
                    'FormaDeConsignarMonto' => $FormaDeConsignarMonto,
                    'FechaIngresoAdministracion' => (($FechaIngresoAdministracion !== '') ? $FechaIngresoAdministracion : NULL),
                    'FolioIngresoAdministracion' => (($FolioIngresoAdministracion !== '') ? $FolioIngresoAdministracion : NULL),
                    'Banco' => (($Banco !== '') ? $Banco : NULL),
                    'Cuenta' => (($Cuenta !== '') ? $Cuenta : NULL),
                    'FechaDeLaOperacion' => (($FechaDeLaOperacion !== '') ? $FechaDeLaOperacion : NULL),
                    'CobradorDelTramite' => (($CobradorDelTramite !== '') ? $CobradorDelTramite : NULL),
                    'IdCobranza' => $IdCobranza,
                    'FormaDePago' => $FormaDePago,
                    'Referencia' => strtoupper($Referencia),
                    'Registro' => Date('d/m/Y h:i:s a')
                );
                $ID = $this->cobranza_model->onAction("CobranzaIngresos", $data, "save", 0);

                $dtm = $this->cobranza_model->getRecordByID($IdCobranza);

                $Saldo = ($dtm[0]->Saldo - $Cantidad);

//                if ($dtm[0]->Saldo == $Cantidad && $Saldo == 0 || $Cantidad < $dtm[0]->Saldo) {
//                    $ID = $this->cobranza_model->onAction("CobranzaIngresos", $data, "save", 0);
//                }

                if ($dtm[0]->Saldo == $Cantidad && $Saldo == 0) {
//                    print ' FELICIDADES, SALDO EN CEROS ';
                    $data = array(
                        'Saldo' => 0.0,
                        'Estatus' => 'PAGADA'
                    );
                }

                if ($Cantidad < $dtm[0]->Saldo) {
                    $data = array(
                        'Saldo' => $Saldo,
                        'Estatus' => 'PAGOS PARCIALES'
                    );
//                    print ' MONTO A PAGAR: ' . $dtm[0]->Saldo . ' CANTIDAD: ' . $Cantidad . ' SALDO: ' . ($dtm[0]->Saldo - $Cantidad) . ', ';
                }

                if ($Cantidad > $dtm[0]->Saldo) {
//                    print ' EL MONTO QUE USTED ESTA PAGANDO ES MUCHO MAYOR AL QUE SE DEBE DE PAGAR, ';
                } else {
                    $this->cobranza_model->onAction("Cobranza", $data, "update", array('ID', $IdCobranza));
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            print $exc->getMessage();
        }
    }

    public function onCancelarOrden() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->cobranza_model->onAction("Cobranza", $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            print $exc->getMessage();
        }
    }

    public function onCancelarIngreso() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                $dtm = $this->cobranza_model->getIngresoByID($ID);
                $data = array(
                    'Saldo' => ($dtm[0]->Saldo + $dtm[0]->Cantidad),
                    'Estatus' => ($dtm[0]->MontoAPagar == ($dtm[0]->Saldo + $dtm[0]->Cantidad)) ? 'ACTIVO' : 'PAGOS PARCIALES'
                );
                $this->cobranza_model->onAction("Cobranza", $data, "update", array('ID', $dtm[0]->ID));

                $data = array(
                    'Estatus' => 'CANCELADO'
                );
                $this->cobranza_model->onAction("CobranzaIngresos", $data, "update", array('ID', $ID));
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            print $exc->getMessage();
        }
    }

    public function onUpdateOrdenDeCobro() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                $data = array(
                    'Folio' => $Folio,
                    'Cliente' => $Cliente,
                    'Concepto' => strtoupper($Concepto),
                    'Tarifa' => $Tarifa,
                    'MontoAPagar' => $MontoAPagar,
                    'FechaCobro' => $FechaCobro,
                    'IdPrestadorDelServicio' => $IdPrestadorDelServicio,
                    'IdEmisorDeLaOrden' => $IdEmisorDeLaOrden,
                    'NFactura' => $NFactura,
                    'Saldo' => $MontoAPagar,
                    'IdContrato' => $IdContratoU,
                    'MontoContrato' => $MontoContratoU
                );
                $this->cobranza_model->onAction("Cobranza", $data, "update", array('ID', $ID));
                if (isset($_FILES['Factura']['name'])) {
                    $tmpFilePath = $_FILES['Factura']['tmp_name'];
                    if (!file_exists('uploads/Cobranza')) {
                        mkdir('uploads/Cobranza', 0777, true);
                    }
                    if (!file_exists('uploads/Cobranza/OrdenesDeCobro')) {
                        mkdir('uploads/Cobranza/OrdenesDeCobro', 0777, true);
                    }
                    if (!file_exists('uploads/Cobranza/OrdenesDeCobro/' . $ID)) {
                        mkdir('uploads/Cobranza/OrdenesDeCobro/' . $ID, 0777, true);
                    }
                    $newFilePath = "uploads/Cobranza/OrdenesDeCobro/$ID/" . $_FILES['Factura']['name'];

                    //Upload the file into the temp dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        print 'ARCHIVO SUBIDO CON EXITO: ' . $_FILES['Factura']['name'];
                        $data = array(
                            'Url' => $newFilePath);
                        $this->cobranza_model->onAction('Cobranza', $data, "update", array('ID', $ID));
                    } else {
                        print 'NO SE SUBIO: ' . $_FILES['Factura']['name'];
                    }
                }
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            print $exc->getMessage();
        }
    }

    public function onGenerarOrdenDeCobro() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {

                extract(filter_input_array(INPUT_POST));
                date_default_timezone_set('America/Mexico_City');
                require_once APPPATH . "/third_party/fpdf17/fpdf.php";

                $image = "log_1o.png";
                $pdf = new FPDF('P', 'mm', 'A4');
                $pdf->AddPage();
                $pdf->Image('media/' . $image, 10, 10, /* ANCHO */ 60, /* ALTO */ 21);

                $pdf->SetFont('Arial', 'B', 32);
                $tblAlto = 0;
                $tblAncho = 0;
                $tblAnchoColumnas = 150;
                $rows = $this->cobranza_model->getRecordsReportByID($ID);
                $nrows = count($rows);
//                var_dump($rows);
                if (isset($rows[0])) {
                    $rdata = $rows[0];
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 20);
                    $pdf->SetX(75);
                    $pdf->Cell(100, 10, utf8_decode("ORDEN DE COBRO"), 0, 1, 'L');
//                    $pdf->Text(/* X */75, /* Y */ 25, utf8_decode("ORDEN DE COMPRA"));
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetX(80);
                    $pdf->Cell(100, 10, utf8_decode("FECHA DE EMISIÓN") . Date('d-m-Y h:i:s a'), 0, 0, 'L');
//                    $pdf->Text(/* X */95, /* Y */ 30, $rdata->FECHA);
                    $pdf->SetFont('Arial', 'B', 12);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(155);
                    $pdf->Cell(100, 10, "FOLIO. ", 0, 0, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(170);
                    $pdf->Cell(100, 10, strtoupper($rdata->FOLIO), 0, 1, 'L');
//                    $pdf->Text(/* X */160, /* Y */ 25, "No. " . $rdata->NUMERO);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, "CLIENTE: ", 0, 0, 'L');
                    $pdf->SetX(110);
                    $pdf->Cell(100, 5, "CONTRATO: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 12);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(40);
                    $pdf->Cell(100, 5, utf8_decode($rdata->EMPRESA), 0, 0, 'L');
                    $pdf->SetX(138);
                    $pdf->Cell(100, 5, utf8_decode($rdata->CONTRATO), 0, 1, 'L');
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, "CONCEPTO DE COBRO: ", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(15);
                    $pdf->MultiCell(175, 5, utf8_decode($rdata->{"CONCEPTO DE COBRO"}));
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, "MONTO A PAGAR: ", 0, 0, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(110);
                    $pdf->Cell(100, 5, "FECHA DE COBRO: ", 0, 0, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(55);
                    $pdf->Cell(100, 5, $rdata->{"MONTO A PAGAR"}, 0, 0, 'L');
                    $pdf->SetX(155);
                    $pdf->Cell(100, 5, $rdata->{"FECHA COBRO"}, 0, 1, 'L');
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, "NOMBRE DE QUIEN PRESTO EL SERVICIO ", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, $rdata->{"RESPONSABLE DEL SERVICIO"}, 0, 0, 'L');

                    if (!file_exists('uploads/OrdenesDeCobro')) {
                        mkdir('uploads/OrdenesDeCobro', 0777, true);
                    }
                    if (!file_exists('uploads/OrdenesDeCobro/' . $rdata->EMPRESA)) {
                        mkdir('uploads/OrdenesDeCobro/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/OrdenesDeCobro/' . $rdata->EMPRESA . '/ORCO' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '_' . Date('h_i_s_a') . '.pdf';
                    $pdf->Output($url);
                    print base_url() . $url;
////                    }
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

    public function onGenerateReciboDePago() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {

                extract(filter_input_array(INPUT_POST));
                date_default_timezone_set('America/Mexico_City');
                require_once APPPATH . "/third_party/fpdf17/fpdf.php";

                $image = "log_1o.png";
                $pdf = new FPDF('P', 'mm', 'A4');
                $pdf->AddPage();
                $pdf->Image('media/' . $image, 10, 10, /* ANCHO */ 60, /* ALTO */ 21);

                $pdf->SetFont('Arial', 'B', 32);
                $tblAlto = 0;
                $tblAncho = 0;
                $tblAnchoColumnas = 150;
                $rows = $this->cobranza_model->getHistorialDeIngresosByID($ID);
                $nrows = count($rows);

                if (isset($rows[0])) {
                    $rdata = $rows[0];
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 20);
                    $pdf->SetX(80);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetX(80);
                    $pdf->Cell(100, 10, utf8_decode("RECIBO DE PAGO"), 0, 1, 'L');
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetX(95);
                    $pdf->Cell(100, 5, Date('d-m-Y h:i:s a'), 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(140);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetX(140);
                    $pdf->Cell(100, 10, "# DE RECIBO ", 0, 0, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(170);
                    $pdf->Cell(100, 10, strtoupper($rdata->FOLIO), 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(130);
                    $pdf->Cell(100, 10, utf8_decode("FECHA DE EMISIÓN"), 0, 0, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(170);
                    $pdf->Cell(100, 10, strtoupper($rdata->{"FECHA EMISION"}), 0, 1, 'L');
//                    $pdf->Text(/* X */160, /* Y */ 25, "No. " . $rdata->NUMERO);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, utf8_decode("RECIBÍ DE: "), 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(35);
                    $pdf->Cell(100, 5, utf8_decode($rdata->CLIENTE), 0, 1, 'L');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, utf8_decode("LA CANTIDAD DE: "), 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(50);
                    $pdf->Cell(100, 5, utf8_decode($rdata->MONTO), 0, 1, 'L');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, utf8_decode("POR CONCEPTO DE: "), 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(15);
                    $STR = "";
//                    for ($index = 0; $index < 500; $index++) {
//                        $STR .="12345 ";
//                    }
//                    $pdf->MultiCell(175, 5, $STR);
                    $pdf->MultiCell(175, 5, utf8_decode($rdata->CONCEPTO . ' ' . $this->getNumeroXLetra(1)));

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(130);
                    $pdf->Cell(100, 5, utf8_decode("TOTAL"), 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(145);
                    $pdf->Cell(100, 5, utf8_decode($rdata->MONTO), 0, 1, 'L');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(130);
                    $pdf->Cell(100, 5, utf8_decode("I.V.A"), 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(145);
                    $pdf->Cell(100, 5, $rdata->IVA, 0, 1, 'L');


                    if (!file_exists('uploads/RecibosDePago')) {
                        mkdir('uploads/RecibosDePago', 0777, true);
                    }
                    if (!file_exists('uploads/RecibosDePago/' . $rdata->CLIENTE)) {
                        mkdir('uploads/RecibosDePago/' . $rdata->CLIENTE, 0777, true);
                    }
                    $url = 'uploads/RecibosDePago/' . $rdata->CLIENTE . '/RDP_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '_' . Date('h_i_s_a') . '.pdf';
                    $pdf->Output($url);
                    print base_url() . $url;
////                    }
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

    public function getNumeroXLetra($n) {
        try {
            $array = array(
                1 => 'UN',
                2 => 'DOS',
                3 => 'TRES',
                4 => 'CUATRO',
                5 => 'CINCO',
                6 => 'SEIS',
                7 => 'SIETE',
                8 => 'OCHO',
                9 => 'NUEVE',
                10 => 'DIEZ'
            );
            $special = array(3 => 'CIENTOS', 4 => 'MIL', 6 => 'MILLON');
            $letra = "";
            $largo = strlen($n);

            if ($n > 0) {
                foreach ($array as $key => $value) {
                    if ($n == $key) {
                        $letra .= $value;
                    }
                }
            }
            if ($largo == 1) {
                $letra .= ' PESO';
            }
            if ($largo > 1) {
                $letra .= ' PESOS';
            }
            return $letra;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /*     * FUNCIONES ANTERIORES * */

    public function getEstadoDeCuenta() {
        try {
            if (isset($_POST["ID"])) {
                extract($_POST);
                $data = $this->cobranza_model->getEstadoDeCuenta($ID, $FECHAINICIO, $FECHAFINAL);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContadoresDeCobranzaXEstatus() {
        try {
            $data = $this->cobranza_model->getContadoresDeCobranzaXEstatus();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosXContratosDeObra() {
        try {
            $data = $this->cobranza_model->getProyectosXContratosDeObra();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGenerarAcumuladoCobranza() {

        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 42.3, /* ALTO */ 13.6);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'COBRANZA', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(20);
            $pdf->SetFont('Arial', 'B', 8);
            $YY = 0;
            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 1, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 4, utf8_decode('EMPRESA'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 4, 'CLIENTE', 0, 0, 'L');
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetX($space += 22.5);
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 4, utf8_decode('LUGAR DE TRABAJO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($space += 30);
            $pdf->Cell(20, 4, 'CONTRATO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetX($X);
            $Y = $pdf->GetY();
            $pdf->MultiCell(22.5, 4, utf8_decode('MONTO DEL CONTRATO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 25);
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 4, utf8_decode('FACTURA'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 18);
            $Y = $pdf->GetY();
            $pdf->MultiCell(35, 4, utf8_decode('CONCEPTO DE COBRO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);

            /*             * ****************** */
            $pdf->SetX($X += 43);
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 4, utf8_decode('MONTO A PAGAR'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 25);
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 4, utf8_decode('MONTO PAGADO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 23);
            $Y = $pdf->GetY();
            $pdf->MultiCell(16, 4, utf8_decode('SALDO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            /*             * ****************** */
            $pdf->SetY($Y);
            $pdf->SetX($X += 20);
            $pdf->MultiCell(20, 4, utf8_decode('FECHA DE COBRO'));
            /*             * ****************** */
            $pdf->SetY($YY);
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */
            $rows = 0;
            $rows = $this->cobranza_model->getCobranzaAcumulada($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO, $TIPO); /*             * OK* */

//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL' &&
//                    isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL' &&
//                    isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL' &&
//                    isset($ETAPA) && $ETAPA !== '0' && $ETAPA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresaXClienteXProyectoXEtapa($EMPRESA, $EMPRESA_CLIENTE, $PROYECTO, $ETAPA); /*                 * OK* */
//            } else
//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL' &&
//                    isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL' &&
//                    isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresaXClienteXProyecto($EMPRESA, $EMPRESA_CLIENTE, $PROYECTO); /*                 * OK* */
//            } else
//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL' &&
//                    isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL' &&
//                    isset($ETAPA) && $ETAPA !== '0' && $ETAPA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresaXClienteXEtapa($EMPRESA, $EMPRESA_CLIENTE, $ETAPA); /*                 * OK* */
//            } else
//            if (isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL' &&
//                    isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL' &&
//                    isset($ETAPA) && $ETAPA !== '0' && $ETAPA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXClienteXProyectoXEtapa($EMPRESA_CLIENTE, $PROYECTO, $ETAPA); /*                 * OK* */
//            } else
//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL' &&
//                    isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresaXCliente($EMPRESA, $EMPRESA_CLIENTE); /*                 * OK* */
//            } else
//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL' &&
//                    isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresaXProyecto($EMPRESA, $PROYECTO); /*                 * OK* */
//            } else
//            if (isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL' &&
//                    isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXClienteXProyecto($EMPRESA_CLIENTE, $PROYECTO); /*                 * OK* */
//            } else
//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL' &&
//                    isset($ETAPA) && $ETAPA !== '0' && $ETAPA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresaXEtapa($EMPRESA, $ETAPA); /*                 * OK* */
//            } else
//            if (isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL' &&
//                    isset($ETAPA) && $ETAPA !== '0' && $ETAPA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXClienteXEtapa($EMPRESA_CLIENTE, $ETAPA); /*                 * OK* */
//            } else
//            if (isset($EMPRESA) && $EMPRESA !== '0' && $EMPRESA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEmpresa($EMPRESA); /*                 * OK* */
//            } else
//            if (isset($EMPRESA_CLIENTE) && $EMPRESA_CLIENTE !== '0' && $EMPRESA_CLIENTE !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXCliente($EMPRESA_CLIENTE); /*                 * OK* */
//            } else
//            if (isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXProyecto($PROYECTO); /*                 * OK* */
//            } else
//            if (isset($PROYECTO) && $PROYECTO !== '0' && $PROYECTO !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXProyecto($PROYECTO); /*                 * OK* */
//            } else
//            if (isset($ETAPA) && $ETAPA !== '0' && $ETAPA !== 'NULL') {
//                $rows = $this->cobranza_model->getCobranzaAcumuladaXEtapa($ETAPA); /*                 * OK* */
//            } else {
//                $rows = $this->cobranza_model->getCobranzaAcumulada(); /*                 * OK* */
//            }

            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
            $MONTO_DE_CONTRATOS = 0.0;
            $MONTO_A_PAGAR = 0.0;
            $MONTO_PAGADO = 0.0;
            $SALDO = 0.0;
            $nrows = 0;
            $movmientos_pagados_en_cero = 0;
            $movmientos_con_saldo_en_cero = 0;

            for ($index = 0; $index < count($rows); $index++) {
                $nrows ++;
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(25, 2.5, utf8_decode($rows[$index]->{"EMPRESA RABINA"}));
                $YY = $pdf->GetY();
                $pdf->SetY($Y);
                $pdf->SetX(35);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 2.5, utf8_decode($rows[$index]->{"EMPRESA / CLIENTE"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(68);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(25, 3, utf8_decode($rows[$index]->{"LUGAR DE TRABAJO"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(97.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, utf8_decode($rows[$index]->CONTRATO));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(118);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, "$" . number_format($rows[$index]->{"MONTO DEL CONTRATO"}, 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(143);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"FACTURA"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetFont('Arial', 'B', 5);
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(155);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(45, 2.5, strtoupper(utf8_decode($rows[$index]->{"CONCEPTO DE COBRO"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(203);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"MONTO A PAGAR"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(227);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                if ($rows[$index]->{"MONTO PAGADO"} > 0) {
                    $movmientos_pagados_en_cero ++;
                }
                if ($rows[$index]->SALDO > 0) {
                    $movmientos_con_saldo_en_cero ++;
                }
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"MONTO PAGADO"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(250);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->SALDO)), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(275);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"FECHA COBRO"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);

                $pdf->Cell(0, 0, "", 0, 1, 'L');

                $MONTO_DE_CONTRATOS += $rows[$index]->{"MONTO DEL CONTRATO"};
                $MONTO_A_PAGAR += $rows[$index]->{"MONTO A PAGAR"};
                $MONTO_PAGADO += $rows[$index]->{"MONTO PAGADO"};
                $SALDO += $rows[$index]->SALDO;

                $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
//                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                if ($pdf->GetY() > 190) {
                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY(195);
                    $pdf->SetX(140);
                    $pdf->MultiCell(25, 10, $pages);
                    $pdf->AddPage();
                    $pages += 1;
                } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);
                }
            }
            $YC = $pdf->GetY();
            $pdf->SetY($YC);
            $pdf->SetX(5);
            $pdf->MultiCell(30, 3, $nrows . " MOVIMIENTOS");
            $pdf->SetY($YC);
            $pdf->SetX(68);
            $pdf->MultiCell(50, 3, $movmientos_pagados_en_cero . " MOVIMIENTOS CON PAGOS");
            $pdf->SetY($YC);
            $pdf->SetX(143);
            $pdf->MultiCell(50, 3, ($movmientos_pagados_en_cero - $movmientos_con_saldo_en_cero) . " MOVIMIENTOS SALDADOS");
            $pdf->SetY($YC);
            $pdf->SetX(223);
            $pdf->MultiCell(50, 3, $movmientos_con_saldo_en_cero . " MOVIMIENTOS CON SALDO");
            /*             * *RESUMEN DE MOVIMIENTOS** */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(5, 5, "", 0, 1, 'L');
            $YF = $pdf->GetY();
            $pdf->SetY($YF);
            $pdf->SetX(15);
//            $pdf->MultiCell(50, 3, "TOTAL EN CONTRATOS");
            $pdf->MultiCell(50, 3, "TOTAL FACTURADO");
            $pdf->SetY($YF);
            $pdf->SetX(115);
            $pdf->MultiCell(50, 3, "TOTAL PAGADO FACTURADO");
            $pdf->SetY($YF);
            $pdf->SetX(230);
            $pdf->MultiCell(50, 3, "SALDO FACTURADO");

            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            $pdf->Cell(5, 1, "", 0, 1, 'L');
            $YD = $pdf->GetY();
            $pdf->SetY($YD);
            $pdf->SetX(15);
//            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_DE_CONTRATOS), 2, '.', ', '));
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_A_PAGAR), 2, '.', ', '));
            $pdf->SetY($YD);
            $pdf->SetX(115);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_PAGADO), 2, '.', ', '));
            $pdf->SetY($YD);
            $pdf->SetX(230);
            $pdf->MultiCell(30, 3, " $ " . number_format(($SALDO), 2, '.', ', '));

            /*             * ***************************FIN DETALLE************************** */

            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            if (!file_exists('uploads/Cobranza')) {
                mkdir('uploads/Cobranza', 0777, true);
            }
            $file_name = "COBRANZA_ACUMULADA_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Cobranza/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGenerarAcumuladoCobranzaXContratos() {

        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 42.3, /* ALTO */ 13.6);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(50, 15, 'COBRANZA', 0, 0, 'L');
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetTextColor(255, 0, 0);
            $pdf->SetY(10);
            $pdf->SetX(135);
            $pdf->Cell(50, 15, '(CONTRATOS)', 0, 0, 'L');
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pdf->SetY(8);
            $pdf->SetX(238);
            $pdf->MultiCell(30, 4, strtoupper(utf8_decode("FECHA DE IMPRESIÓN  " . date("d/m/Y ") . ' ' . date("h:i:s a"))));
            $pdf->SetFont('Arial', 'B', 8);
            $YY = 0;
            $space = 10;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 5, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 4, utf8_decode('EMPRESA'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($space += 25);
            $pdf->Cell(40, 4, 'PROYECTO', 0, 0, 'L');
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetX($space += 33);
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 4, utf8_decode('CONTRATANTE'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($space += 28);
            $pdf->Cell(20, 4, 'PERIODO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetX($X -= 2);
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 4, utf8_decode('CONCEPTO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 53);
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 4, utf8_decode('CONTRATO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 18);
            $Y = $pdf->GetY();
            $pdf->MultiCell(35, 4, utf8_decode('VIVIENDAS'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);

            /*             * ****************** */
            $pdf->SetX($X += 20);
            $Y = $pdf->GetY();
            $pdf->MultiCell(40, 4, utf8_decode('CONTRATO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 25);
            $Y = $pdf->GetY();
            $pdf->MultiCell(40, 4, utf8_decode('PAGADO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 23);
            $Y = $pdf->GetY();
            $pdf->MultiCell(16, 4, utf8_decode('SALDO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            /*             * ****************** */
            $pdf->SetY($YY);
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), 290, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */
            $rows = 0;
            $rows = $this->cobranza_model->getCobranzaPorContratos($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO, $TIPO); /*             * OK* */

            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
            $MONTO_DE_CONTRATOS = 0.0;
            $VIVIENDAS = 0.0;
            $URBANIZACION = 0;
            $MONTO_PAGADO = 0.0;
            $SALDO = 0.0;
            $nrows = 0;
            $movmientos_pagados_en_cero = 0;
            $movmientos_con_saldo = 0;
            $movmientos_con_saldo_en_cero = 0;

            for ($index = 0; $index < count($rows); $index++) {
                $pdf->SetFont('Arial', 'B', 6);
                $nrows ++;
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(25, 2.5, utf8_decode($rows[$index]->CONTRATISTA));
                $YY = $pdf->GetY();
                $pdf->SetY($Y);
                $pdf->SetX(35);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 2.5, utf8_decode($rows[$index]->PROYECTO));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(68);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(25, 3, utf8_decode($rows[$index]->CONTRATANTE));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(97.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(20, 3, utf8_decode($rows[$index]->{"FECHA INICIO"} . " " . $rows[$index]->{"FECHA TERMINO"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(115);
                $pdf->SetFont('Arial', 'B', 6);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(50, 3, strtoupper(utf8_decode($rows[$index]->CONCEPTO)));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(170);
                $pdf->SetFont('Arial', 'B', 6.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(45, 2.5, strtoupper(utf8_decode($rows[$index]->{"CONTRATO DE OBRA"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(190);
                $pdf->SetFont('Arial', 'B', 6);
                if ($rows[$index]->VIVIENDAS > 0) {
                    $VIVIENDAS += $rows[$index]->VIVIENDAS;
                } else {
                    $URBANIZACION++;
                }
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->VIVIENDAS)));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(203);
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"TOTAL DEL CONTRATO"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(230);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                if ($rows[$index]->{"MONTO PAGADO"} > 0) {
                    $movmientos_pagados_en_cero ++;
                }
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"MONTO PAGADO"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(255);
                if (floatval($rows[$index]->SALDO) > 0) {
                    $movmientos_con_saldo++;
                }
                if (floatval($rows[$index]->SALDO) <= 0.99999999999999999999) {
                    $movmientos_con_saldo_en_cero++;
                }
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->SALDO)), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);

                $pdf->Cell(0, 0, "", 0, 1, 'L');

                $MONTO_DE_CONTRATOS += $rows[$index]->{"TOTAL DEL CONTRATO"};
//                    $MONTO_A_PAGAR += $rows[$index]->{"MONTO A PAGAR"};
                $MONTO_PAGADO += $rows[$index]->{"MONTO PAGADO"};
                $SALDO += $rows[$index]->SALDO;

                $pdf->Line(5, $pdf->GetY(), 290, $pdf->GetY());
//                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                if ($pdf->GetY() > 190) {
                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY(195);
                    $pdf->SetX(140);
                    $pdf->MultiCell(25, 10, $pages);
                    $pdf->AddPage();
                    $pages += 1;
                } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);
                }
            }
            $YC = $pdf->GetY();
            $pdf->SetY($YC);
            $pdf->SetX(5);
            $pdf->MultiCell(30, 3, $nrows . " MOVIMIENTOS");
            $pdf->SetY($YC);
            $pdf->SetX(68);
            $pdf->MultiCell(50, 3, $movmientos_pagados_en_cero . " MOVIMIENTOS CON PAGOS");
            $pdf->SetY($YC);
            $pdf->SetX(143);
            $pdf->MultiCell(50, 3, ($movmientos_con_saldo_en_cero) . " MOVIMIENTOS SALDADOS");
            $pdf->SetY($YC);
            $pdf->SetX(223);
            $pdf->MultiCell(50, 3, $movmientos_con_saldo . " MOVIMIENTOS CON SALDO");
            /*             * *RESUMEN DE MOVIMIENTOS** */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(5, 5, "", 0, 1, 'L');
            $YF = $pdf->GetY();
            $pdf->SetY($YF);
            $pdf->SetX(15);
            $pdf->MultiCell(50, 3, "TOTAL EN CONTRATOS");
            $pdf->SetY($YF);
            $pdf->SetX(70);
            $pdf->MultiCell(50, 3, "TOTAL DE VIVIENDAS");
            $pdf->SetY($YF);
            $pdf->SetX(130);
            $pdf->MultiCell(50, 3, utf8_decode("MOVIMIENTOS DE URBANIZACIÓN"));
            $pdf->SetY($YF);
            $pdf->SetX(210);
            $pdf->MultiCell(50, 3, "TOTAL PAGADO");
            $pdf->SetY($YF);
            $pdf->SetX(260);
            $pdf->MultiCell(50, 3, "SALDO");

            $pdf->Line(5, $pdf->GetY(), 290, $pdf->GetY());
            $pdf->Cell(5, 1, "", 0, 1, 'L');
            $YD = $pdf->GetY();
            $pdf->SetY($YD);
            $pdf->SetX(15);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_DE_CONTRATOS), 2, '.', ', '));
            $pdf->SetY($YD);
            $pdf->SetX(80);
            $pdf->MultiCell(30, 3, ($VIVIENDAS));
            $pdf->SetY($YD);
            $pdf->SetX(150);
            $pdf->MultiCell(30, 3, ($URBANIZACION));

            $pdf->SetY($YD);
            $pdf->SetX(208);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_PAGADO), 2, '.', ', '));
            $pdf->SetY($YD);
            $pdf->SetX(255);
            $pdf->MultiCell(30, 3, " $ " . number_format(($SALDO), 2, '.', ', '));

            /*             * ***************************FIN DETALLE************************** */

            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            if (!file_exists('uploads/Cobranza')) {
                mkdir('uploads/Cobranza', 0777, true);
            }
            $file_name = "COBRANZA_ACUMULADA_X_CONTRATOS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Cobranza/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGenerarAcumuladoCobranzaXContratosTotales() {

        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 42.3, /* ALTO */ 13.6);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(50, 15, 'COBRANZA', 0, 0, 'L');
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetTextColor(255, 0, 0);
            $pdf->SetY(10);
            $pdf->SetX(135);
            $pdf->Cell(50, 15, '(CONTRATOS)', 0, 0, 'L');
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pdf->SetY(8);
            $pdf->SetX(238);
            $pdf->MultiCell(30, 4, strtoupper(utf8_decode("FECHA DE IMPRESIÓN  " . date("d/m/Y ") . ' ' . date("h:i:s a"))));
            $pdf->SetFont('Arial', 'B', 8);
            $YY = 0;
            $space = 10;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 5, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(25, 4, utf8_decode('EMPRESA'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($space += 25);
//            $pdf->Cell(40, 4, 'PROYECTO', 0, 0, 'L');
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetX($space += 33);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(25, 4, utf8_decode('CONTRATANTE'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($space += 28);
//            $pdf->Cell(20, 4, 'PERIODO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetX($X -= 2);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(20, 4, utf8_decode('CONCEPTO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 53);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(20, 4, utf8_decode('CONTRATO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 18);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(35, 4, utf8_decode('VIVIENDAS'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);

            /*             * ****************** */
            $pdf->SetX($X += 20);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(40, 4, utf8_decode('CONTRATO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 25);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(40, 4, utf8_decode('PAGADO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 23);
            $Y = $pdf->GetY();
//            $pdf->MultiCell(16, 4, utf8_decode('SALDO'));
            $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
            /*             * ****************** */
            $pdf->SetY($YY);
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), 290, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */
            $rows = 0;

            $rows = $this->cobranza_model->getCobranzaPorContratos($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO); /*             * OK* */

            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
            $MONTO_DE_CONTRATOS = 0.0;
            $VIVIENDAS = 0.0;
            $URBANIZACION = 0;
            $MONTO_PAGADO = 0.0;
            $SALDO = 0.0;
            $nrows = 0;
            $movmientos_pagados_en_cero = 0;
            $movmientos_con_saldo = 0;
            $movmientos_con_saldo_en_cero = 0;

            for ($index = 0; $index < count($rows); $index++) {
                $pdf->SetFont('Arial', 'B', 6);
                $nrows ++;
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(25, 2.5, utf8_decode($rows[$index]->CONTRATISTA));
                $YY = $pdf->GetY();
                $pdf->SetY($Y);
                $pdf->SetX(35);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(30, 2.5, utf8_decode($rows[$index]->PROYECTO));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(68);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(25, 3, utf8_decode($rows[$index]->CONTRATANTE));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(97.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(20, 3, utf8_decode($rows[$index]->{"FECHA INICIO"} . " " . $rows[$index]->{"FECHA TERMINO"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(115);
                $pdf->SetFont('Arial', 'B', 6);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(50, 3, strtoupper(utf8_decode($rows[$index]->CONCEPTO)));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(170);
                $pdf->SetFont('Arial', 'B', 6.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(45, 2.5, strtoupper(utf8_decode($rows[$index]->{"CONTRATO DE OBRA"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(190);
                $pdf->SetFont('Arial', 'B', 6);
                if ($rows[$index]->VIVIENDAS > 0) {
                    $VIVIENDAS += $rows[$index]->VIVIENDAS;
                } else {
                    $URBANIZACION++;
                }
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->VIVIENDAS)));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(203);
//                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"TOTAL DEL CONTRATO"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(230);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                if ($rows[$index]->{"MONTO PAGADO"} > 0) {
                    $movmientos_pagados_en_cero ++;
                }
//                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"MONTO PAGADO"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(255);
                if ($rows[$index]->SALDO > 0.0) {
                    $movmientos_con_saldo++;
                }
                if ($rows[$index]->SALDO <= 0.999999999999999999999999) {
                    $movmientos_con_saldo_en_cero++;
                }
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
//                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->SALDO)), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);

//                $pdf->Cell(0, 0, "", 0, 1, 'L');

                $MONTO_DE_CONTRATOS += $rows[$index]->{"TOTAL DEL CONTRATO"};
//                    $MONTO_A_PAGAR += $rows[$index]->{"MONTO A PAGAR"};
                $MONTO_PAGADO += $rows[$index]->{"MONTO PAGADO"};
                $SALDO += $rows[$index]->SALDO;

                $pdf->Line(5, $pdf->GetY(), 290, $pdf->GetY());
//                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
            }
            $pdf->SetFont('Arial', 'B', 8);
            $YC = $pdf->GetY();
            $pdf->SetY($YC);
            $pdf->SetX(5);
            $pdf->MultiCell(30, 3, $nrows . " MOVIMIENTOS");
            $pdf->SetY($YC);
            $pdf->SetX(68);
            $pdf->MultiCell(50, 3, $movmientos_pagados_en_cero . " MOVIMIENTOS CON PAGOS");
            $pdf->SetY($YC);
            $pdf->SetX(143);
            $pdf->MultiCell(50, 3, ($movmientos_con_saldo_en_cero) . " MOVIMIENTOS SALDADOS");
            $pdf->SetY($YC);
            $pdf->SetX(223);
            $pdf->MultiCell(50, 3, $movmientos_con_saldo . " MOVIMIENTOS CON SALDO");
            /*             * *RESUMEN DE MOVIMIENTOS** */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(5, 5, "", 0, 1, 'L');
            $YF = $pdf->GetY();
            $pdf->SetY($YF);
            $pdf->SetX(15);
            $pdf->MultiCell(50, 3, "TOTAL EN CONTRATOS");
            $pdf->SetY($YF);
            $pdf->SetX(70);
            $pdf->MultiCell(50, 3, "TOTAL DE VIVIENDAS");
            $pdf->SetY($YF);
            $pdf->SetX(130);
            $pdf->MultiCell(50, 3, utf8_decode("MOVIMIENTOS DE URBANIZACIÓN"));
            $pdf->SetY($YF);
            $pdf->SetX(210);
            $pdf->MultiCell(50, 3, "TOTAL PAGADO");
            $pdf->SetY($YF);
            $pdf->SetX(260);
            $pdf->MultiCell(50, 3, "SALDO");

            $pdf->Line(5, $pdf->GetY(), 290, $pdf->GetY());
            $pdf->Cell(5, 1, "", 0, 1, 'L');
            $YD = $pdf->GetY();
            $pdf->SetY($YD);
            $pdf->SetX(15);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_DE_CONTRATOS), 2, '.', ', '));
            $pdf->SetY($YD);
            $pdf->SetX(80);
            $pdf->MultiCell(30, 3, ($VIVIENDAS));
            $pdf->SetY($YD);
            $pdf->SetX(150);
            $pdf->MultiCell(30, 3, ($URBANIZACION));

            $pdf->SetY($YD);
            $pdf->SetX(208);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_PAGADO), 2, '.', ', '));
            $pdf->SetY($YD);
            $pdf->SetX(255);
            $pdf->MultiCell(30, 3, " $ " . number_format(($SALDO), 2, '.', ', '));

            /*             * ***************************FIN DETALLE************************** */

            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            if (!file_exists('uploads/Cobranza')) {
                mkdir('uploads/Cobranza', 0777, true);
            }
            $file_name = "COBRANZA_ACUMULADA_X_CONTRATOS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Cobranza/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGenerarAcumuladoCobranzaHistorialIngresos() {

        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 42.3, /* ALTO */ 13.6);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(100);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'INGRESOS COBRADOS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(20);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 1, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 4, utf8_decode('EMPRESA'));
            $pdf->SetY($Y);
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 4, 'CLIENTE', 0, 0, 'L');
            $pdf->SetX($space += 27.5);
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 4, utf8_decode('LUGAR DE TRABAJO'));
            $pdf->SetY($Y);
            $pdf->SetX($space += 30);
            $pdf->Cell(20, 4, 'CONTRATO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetX($X);
            $Y = $pdf->GetY();
            $pdf->MultiCell(22.5, 4, utf8_decode('MONTO DEL CONTRATO'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 25);
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 4, utf8_decode('FOLIO'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 15);
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 4, utf8_decode('FACTURA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 18);
            $Y = $pdf->GetY();
            $pdf->MultiCell(18, 4, utf8_decode('MONTO A PAGAR'));
            $pdf->SetY($Y);

            /*             * ****************** */
            $pdf->SetX($X += 22);
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 4, utf8_decode('RECIBO'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 15);
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 4, utf8_decode('FECHA EMISIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 15);
            $Y = $pdf->GetY();
            $pdf->MultiCell(16, 4, utf8_decode('FECHA DE PAGO'));
            $YY = $pdf->GetY();
            /*             * ****************** */
            $pdf->SetY($Y);
            $pdf->SetX($X += 18);
            $pdf->MultiCell(25, 4, utf8_decode('MONTO PAGADO'));
            /*             * ****************** */
            $pdf->SetY($Y);
            $pdf->SetX($X += 17);
            $pdf->MultiCell(25, 4, utf8_decode('CONCEPTO'));
            /*             * ****************** */
            $pdf->SetY($YY);
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

            $rows = $this->cobranza_model->getHistorialDeIngresosAcumuladosXEmpresaXClienteXFecha($EMPRESA, $EMPRESA_CLIENTE, $CONTRATO);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
            $MONTO_DE_CONTRATOS = 0.0;
            $MONTO_A_PAGAR = 0.0;
            $MONTO_PAGADO = 0.0;

            for ($index = 0; $index < count($rows); $index++) {
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, utf8_decode($rows[$index]->{"EMPRESA RABINA"}));
                $YY = $pdf->GetY();
                $pdf->SetY($Y);
                $pdf->SetX(40);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, utf8_decode($rows[$index]->{"EMPRESA / CLIENTE"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(73);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(25, 3, utf8_decode($rows[$index]->{"LUGAR DE TRABAJO"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(102.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, utf8_decode($rows[$index]->{"CONTRATO"}));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(123);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, "$" . number_format($rows[$index]->{"MONTO DEL CONTRATO"}, 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(150);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"FOLIO"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(165);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"FACTURA"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(182.5);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"MONTO A PAGAR"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(205);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"RECIBO"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(220);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"FECHA EMISION"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(235);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"FECHA DE PAGO"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(252);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, " $ " . number_format(strtoupper(utf8_decode($rows[$index]->{"MONTO PAGADO"})), 2, '.', ', '));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->SetY($Y);
                $pdf->SetX(273);
//                $pdf->MultiCell(35, 3, utf8_decode("1234567890123456789012345678901234567890."));
                $pdf->MultiCell(30, 3, strtoupper(utf8_decode($rows[$index]->{"CONCEPTO"})));
                $YY = ($YY > $pdf->GetY()) ? $YY : $pdf->GetY();
                $pdf->SetY($YY);

                $pdf->Cell(0, 0, "", 0, 1, 'L');

                $MONTO_DE_CONTRATOS += $rows[$index]->{"MONTO DEL CONTRATO"};
                $MONTO_A_PAGAR += $rows[$index]->{"MONTO A PAGAR"};
                $MONTO_PAGADO += $rows[$index]->{"MONTO PAGADO"};

                $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
//                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                if ($pdf->GetY() > 190) {
                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY(195);
                    $pdf->SetX(140);
                    $pdf->MultiCell(25, 10, $pages);
                    $pdf->AddPage();
                    $pages += 1;
                } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);
                }
            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            $YF = $pdf->GetY();
            $pdf->SetY($YF);
            $pdf->SetX(110);
            $pdf->MultiCell(30, 3, "TOTALES: ");
            $pdf->SetY($YF);
            $pdf->SetX(120);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_DE_CONTRATOS), 2, '.', ', '));
            $pdf->SetY($YF);
            $pdf->SetX(182.5);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_A_PAGAR), 2, '.', ', '));
            $pdf->SetY($YF);
            $pdf->SetX(252);
            $pdf->MultiCell(30, 3, " $ " . number_format(($MONTO_PAGADO), 2, '.', ', '));
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Cobranza')) {
                mkdir('uploads/Cobranza', 0777, true);
            }
            if (!file_exists('uploads/Cobranza/Ingresos')) {
                mkdir('uploads/Cobranza/Ingresos', 0777, true);
            }
            $file_name = "INGRESOS_COBRADOS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Cobranza/Ingresos/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
