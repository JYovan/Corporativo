<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class ctrlTramiteFactura extends CI_Controller {

    /**
     * Index Page for this controller.
     * onRevision
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
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->load->model("tramitefactura_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {

//        $data['User'] = $_SESSION['USER'];
            $Empleados = $this->tramitefactura_model->getEmpleados();
            $data['Empleados'] = $Empleados;
            $data['dtm'] = $_SESSION;
//            $data['ctrlscripts'] = array('ctrlTramiteFacturas');
            $data['contentView'] = 'vTramiteDeFacturas';
            $this->_renderView($data);
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data);
        }
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
        if (isset($_REQUEST)) {
            extract($_REQUEST);
            switch ($indice) {
                case 1:
                    /*
                     * SELECT
                     */
                    $data = $this->tramitefactura_model->getRecords();
                    print json_encode($data);
                    break;
                case 2:
                    /*
                     * INSERT
                     */

                    $EMPRESA = $this->tramitefactura_model->getEmpresasByID($Empresa);
                    $PROVEEDOR = $this->tramitefactura_model->getProveedoresByID($Proveedor);
                    $this->onSave($EMPRESA, $PROVEEDOR);
                    $this->onUploadImage($EMPRESA, $PROVEEDOR);
                    break;
                case 3:
                    /*
                     * UPDATE
                     */
                    $EMPRESA = $this->tramitefactura_model->getEmpresasByID($Empresa);
                    $PROVEEDOR = $this->tramitefactura_model->getProveedoresByID($Proveedor);
                    $this->onUpdate($EMPRESA, $PROVEEDOR);

                    if ($_FILES["rtImagen"]["tmp_name"] !== "") {
                        $this->onUploadImage($EMPRESA, $PROVEEDOR);
                    } else {
                        print 'ARCHIVO MANTENIBLE';
                    }
                    break;
                case 4:
                    /*
                     * DELETE
                     */
                    print $this->tramitefactura_model->onDeleteRecord('TramiteFactura', $ID);
                    break;
                case 5:
                    $data = $this->tramitefactura_model->getRecordsByID($ID);
                    print json_encode(($data));
                    break;
                case 6:
                    $data = $this->tramitefactura_model->getRecordsByIDReport($ID);
                    print json_encode($data);
                    break;
                case 7:
                    $data = $this->tramitefactura_model->getRecordsFacturaTramiteDePago();
                    print json_encode($data);
                    break;
                case 8:
                    /*
                     * REGISTRADA => REVISION
                     */
                    $data = array(
                        'Estatus' => 'REVISION'
                    );
                    $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $OXTIdTramiteFactura));

                    $data = array(
                        'Observacion' => ($ObservacionesYN == 1 ? "SI" : "NO"),
                        'TituloObservacion' => strtoupper($TituloObservacion),
                        'SeguimientoObservacion' => strtoupper($ContenidoObservacion),
                        'Estatus' => 'REVISION'
                    );
                    $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

                    $data = array(
                        'IdTramiteFactura' => $OXTIdTramiteFactura,
                        'IdObservacion' => $ID
                    );
                    $ID = $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);
                    break;
                case 9:
                    /*
                     * REVISION => AUTORIZACIÓN
                     */
//                    var_dump($_POST);
                    if (isset($chkNoAutorizar) && $chkNoAutorizar !== '') {
                        $data = array(
                            'Estatus' => 'NO AUTORIZADA'
                        );
                    } else {

                        $data = array(
                            'Estatus' => 'AUTORIZADA'
                        );
                    }
                    $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $OXTIdTramiteFacturaAutorizacion));

                    $data = array(
                        'Observacion' => ($ObservacionesYNAU == 1 ? "SI" : "NO"),
                        'TituloObservacion' => strtoupper($TituloObservacionADFPEDFDP),
                        'SeguimientoObservacion' => strtoupper($ContenidoObservacionADFPEDFDP),
                        'Estatus' => (isset($chkNoAutorizar) && $chkNoAutorizar !== '') ? 'NO AUTORIZADA' : 'AUTORIZADA'
                    );
                    $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);
                    $data = array(
                        'IdTramiteFactura' => $OXTIdTramiteFacturaAutorizacion,
                        'IdObservacion' => $ID
                    );
                    $ID = $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);
                    break;
                case 10:
                    /*
                     * AUTORIZACIÓN  => PAGADA
                     */
                    $estatus = 'PARCIAL';
//                    $json_data = $this->tramitefactura_model->getRecordsByIDReport($IdTramiteFacturaADMPPDF);

                    if ($MontoXPagarADMPPDF == $ImporteADMPPDF) {
                        $data = array(
                            'Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
                        );
                        $estatus = 'EN ELABORACIÓN DE FORMA DE PAGO';
                    } else {
                        if ($ImporteADMPPDF > 0 && $ImporteADMPPDF > $MontoXPagarADMPPDF) {
//                            $ImporteADMPPDF = $ImporteADMPPDF - $MontoXPagarADMPPDF;
                            $data = array(
                                'Estatus' => 'PARCIALMENTE PAGADA'
                            );
                            $estatus = 'PARCIALMENTE PAGADA';
                        } else {
                            $ImporteADMPPDF = $ImporteADMPPDF - $MontoXPagarADMPPDF;
                            $data = array(
                                'Estatus' => 'SOBREPAGADA'
                            );
                            $estatus = 'SOBREPAGADA';
                        }
                    }
                    $data['ImportePagado'] = $MontoXPagarADMPPDF;
                    $data['Saldo'] = $ImporteADMPPDF;
                    $this->tramitefactura_model->onAction(
                            'TramiteFactura', $data, "update", array('IdTramiteFactura', $IdTramiteFacturaADMPPDF));

                    $data = array(
                        'Observacion' => "SI",
                        'TituloObservacion' => strtoupper($TituloObservacion),
                        'SeguimientoObservacion' => strtoupper($ContenidoObservacion),
                        'Estatus' => $estatus
                    );
                    $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

                    if ($estatus == "EN ELABORACIÓN DE FORMA DE PAGO") {
                        $data = array(
                            'otf.Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
                        );
                        $this->tramitefactura_model->onAction(
                                'TramiteFactura tf INNER JOIN ObservacionesXTramiteFactura oxt
                                ON tf.IdTramiteFactura = oxt.IdTramiteFactura
                                INNER JOIN ObservacionesTF otf
                                ON otf.IdObservaciontf = oxt.IdObservacion', $data, "update", array('tf.IdTramiteFactura', $IdTramiteFacturaADMPPDF));
                    }

                    $data = array(
                        'IdTramiteFactura' => $IdTramiteFacturaADMPPDF,
                        'IdObservacion' => $ID
                    );
                    $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

                    $data = array(
                        'Importe' => $ImporteADMPPDF,
                        'MontoXPagar' => $MontoXPagarADMPPDF,
                        'Fecha' => Date('d/m/Y h:i:s a'),
                        'FormaDePago' => $FormaDePago,
                        'IdObservacionTF' => $ID
                    );
                    $ID = $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);

                    break;
                case 11:
                    $data = $this->tramitefactura_model->getHistoryRecordsByID($ID);
                    print json_encode($data);
                    break;
                case 12:
                    $data = $this->tramitefactura_model->getHistoryByID($ID);
                    print json_encode($data);
                    break;
                case 13:
                    $data = $this->tramitefactura_model->getRecordsByDate($FechaInicial, $FechaTermino, $FPago, $Proveedor);
                    print json_encode($data);
                    break;
                case 14:
                    $data = $this->tramitefactura_model->getEmpresas();
                    print json_encode($data);
                    break;
                case 15:
                    $data = $this->tramitefactura_model->getProveedores();
                    print json_encode($data);
                    break;
                case 16:
                    $data = $this->tramitefactura_model->getHistoryRecordsByRecordID($ID);
                    print json_encode($data);
                    break;
                case 17:
                    $this->onApplyNotaDeCredito();
                    break;
                case 18:
                    $this->onCreatePDFByID();
                    break;
                case 19:
                    $this->onCreatePDFBySupplierID();
                    break;
                case 20:
                    $this->onCancelarFactura($ID);
                    break;
                case 21:
                    $data = $this->tramitefactura_model->getProyectos();
                    print json_encode($data);
                    break;
                case 22:
                    $this->onCreatePDFByIDSA();
                    break;
            }
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
            /*
             * INSERT
             */

            $EMPRESA = $this->tramitefactura_model->getEmpresasByID($Empresa);
            $PROVEEDOR = $this->tramitefactura_model->getProveedoresByID($Proveedor);
            $this->onSave($EMPRESA, $PROVEEDOR);
//            $this->onUploadImage($EMPRESA, $PROVEEDOR);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->tramitefactura_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuentas() {
        try {
            $data = $this->tramitefactura_model->getCuentas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpleados() {
        try {
            $data = $this->tramitefactura_model->getEmpleados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresas() {
        try {

            $data = $this->tramitefactura_model->getEmpresas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $data = $this->tramitefactura_model->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->tramitefactura_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsPagados() {
        try {
            $data = $this->tramitefactura_model->getRecordsPagados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsCancelados() {
        try {
            $data = $this->tramitefactura_model->getRecordsCancelados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onBeforeUpdate() {
        try {
            /*
             * UPDATE
             */
            extract(filter_input_array(INPUT_POST));
            $EMPRESA = $this->tramitefactura_model->getEmpresasByID($Empresa);
            $PROVEEDOR = $this->tramitefactura_model->getProveedoresByID($Proveedor);
            $this->onUpdate($EMPRESA, $PROVEEDOR);

            if ($_FILES["rtImagen"]["tmp_name"] !== "") {
                $this->onUploadImage($EMPRESA, $PROVEEDOR);
            } else {
                print 'ARCHIVO MANTENIBLE';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarFactura() {
        try {
            if (isset($_POST["ID"])) {
                extract(filter_input_array(INPUT_POST));
                $data = array('Estatus' => "CANCELADA");
                $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $ID));
            } else {
                print 0;
            }
            $Subject = "SE HA CANCELADO UNA FACTURA";
            $bodyContent = '<div align="center">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<table border="0">';
            $bodyContent .= '<thead>'
                    . '<tr><th colspan="9"><B>RESUMEN DE LA CANCELACIÓN</B></th></tr>'
                    . '<tr>'
                    . '<th><B>ID</B></th>'
                    . '<th><B>EMPRESA</B></th>'
                    . '<th><B>PROYECTO</B></th>'
                    . '<th><B>PROVEEDOR</B></th>'
                    . '<th><B>FACTURA</B></th>'
                    . '<th><B>MONTO</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody>';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td>';
            $bodyContent .= $ID;
            $bodyContent .= '</td>';
            $bodyContent .= '<td>';
            $bodyContent .= $ID;
            $bodyContent .= '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $this->onSendEmail($Subject, $bodyContent);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCreatePDF() {
        try {
            $DATA = json_decode($_REQUEST['DATA'], true);
            $image = "log_1o.png";
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));

            $pdf->AddPage();
            $top = 240;
            $pdf->Image('media/' . $image, 40, 60, /* ANCHO */ 382, /* ALTO */ 126);
            $pdf->SetFont('Arial', 'B', 32);
            $pdf->Text(/* X */275, /* Y */ $top, "ACUSE DE FACTURA PARA TRAMITE DE PAGO");
            $top += 30;
            $pdf->Text(/* X */450, /* Y */ $top, "DATOS DEL REGISTRO");
            $pdf->SetFont('Arial', '', 18);
            $top += 40;
            $pdf->Text(/* X */125, /* Y */ $top, "FOLIO: ");
            $top += 50;
            $pdf->Text(/* X */125, /* Y */ $top, "FECHA: ");
            $top += 50;
            $pdf->Text(/* X */125, /* Y */ $top, "HORA: ");
            $top += 50;
            $pdf->Text(/* X */125, /* Y */ $top, "EMPRESA RABINA: ");
            $top += 50;
            $pdf->Text(/* X */125, /* Y */ $top, "ACTIVIDAD: ");
            $top += 50;
            $pdf->Text(/* X */125, /* Y */ $top, "RECEPCION: ");
            $top = 260;
            $top += 60;
            $pdf->Text(/* X */700, /* Y */ $top, "PROVEEDOR: ");
            $top += 50;
            $pdf->Text(/* X */700, /* Y */ $top, "NUMERO DE FACTURA: ");
            $top += 50;
            $pdf->Text(/* X */700, /* Y */ $top, "IMPORTE : ");
            $top += 50;
            $pdf->Text(/* X */700, /* Y */ $top, "ORDEN DE COMPRA : ");
            $top += 50;
            $pdf->Text(/* X */700, /* Y */ $top, "PROYECTO : ");
            $top += 50;
            $pdf->Text(/* X */700, /* Y */ $top, "NUMERO DE CONTRATO: ");
            $top += 50;
            $pdf->Text(/* X */125, /* Y */ $top, "OBSERVACION : ");
            $pdf->SetFont('Arial', 'B', 16);
            $ndate = str_split($DATA['FECHA']);
            $top = 260;
            $top += 50;
            $pdf->Text(/* X */205, /* Y */ $top, $DATA['FOLIO']);
            $top += 60;
            $pdf->Text(/* X */205, /* Y */ $top, $DATA['FECHA']);
            $top += 50;
            $pdf->Text(/* X */205, /* Y */ $top, $DATA['HORA']);
            $top += 25;
            $pdf->SetXY(305, $top);
            $pdf->MultiCell(220, 18, strtoupper(utf8_decode($DATA['EMPRESA'])));
//            $pdf->Text(/* X */305, /* Y */ $top, utf8_decode($DATA['EMPRESA']));
            $top += 65;
            $pdf->Text(/* X */265, /* Y */ $top, utf8_decode($DATA['ACTIVIDAD']));
            $top += 50;
            $pdf->Text(/* X */250, /* Y */ $top, $DATA['RECEPTOR']);
            $top += 10;
            $pdf->Text(/* X */930, /* Y */ $top, $DATA['NUMERO DE CONTRATO']);

//            $pdf->Text(/* X */850, /* Y */ 475, $DATA['PROVEEDOR']);
            $top = 260;
            $top += 45;
            $pdf->SetXY(820, $top);
            $pdf->MultiCell(250, 18, strtoupper(utf8_decode($DATA['PROVEEDOR'])));
            $top += 65;
            $pdf->Text(/* X */950, /* Y */ $top, $DATA['NUMERO DE FACTURA']);
            $top += 50;
            $pdf->Text(/* X */825, /* Y */ $top, " $ " . number_format($DATA['IMPORTE'], 2, '.', ', '));
            $top += 35;
            $pdf->SetXY(900, $top);
            $pdf->MultiCell(230, 18, strtoupper(utf8_decode($DATA['ORDEN DE COMPRA'])));
//            $pdf->Text(/* X */925, /* Y */ 625, $DATA['ORDEN DE COMPRA']);
            $top += 50;
            $pdf->SetXY(825, $top);
            $pdf->MultiCell(230, 18, strtoupper(utf8_decode($DATA['PROYECTO'])));
            $top += 130;
            $pdf->SetXY(125, $top);
            $pdf->MultiCell(1000, 18, utf8_decode($DATA['OBSERVACION']));

            $pdf->Text(/* X */425, /* Y */ 1025, "_________________________________________");
            $pdf->Text(/* X */475, /* Y */ 1075, "FIRMA Y NOMBRE DE QUIEN RECIBE");


            $x = 200;
            $y = 400;

            if (!file_exists('uploads/Facturas/Acuses')) {
                mkdir('uploads/Facturas/Acuses', 0777, true);
            }
            if (!file_exists('uploads/Facturas/Acuses/' . utf8_decode($DATA['EMPRESA']))) {
                mkdir('uploads/Facturas/Acuses/' . utf8_decode($DATA['EMPRESA']), 0777, true);
            }
            $url = 'uploads/Facturas/Acuses/' . utf8_decode($DATA['EMPRESA']) . '/' . $DATA['ID'] . '_' . str_replace("/", " ", $DATA['ORDEN DE COMPRA']) . '.pdf';
            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCreatePDFByBusiness() {
        try {
            $DATA = json_decode($_REQUEST['DATA'], true);
            $image = "log_1o.png";
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));

            $pdf->AddPage();
            $pdf->Image('media/' . $image, 40, 60, /* ANCHO */ 382, /* ALTO */ 126);
            $pdf->SetFont('Arial', 'B', 32);
            $pdf->Text(/* X */275, /* Y */ 325, "ACUSE DE FACTURA PARA TRAMITE DE PAGO");
            $pdf->Text(/* X */450, /* Y */ 375, "DATOS DEL REGISTRO");

            $pdf->SetFont('Arial', '', 18);
            $pdf->Text(/* X */125, /* Y */ 475, "FOLIO: ");
            $pdf->Text(/* X */125, /* Y */ 525, "FECHA: ");
            $pdf->Text(/* X */125, /* Y */ 575, "HORA: ");
            $pdf->Text(/* X */125, /* Y */ 625, "EMPRESA RABINA: ");
            $pdf->Text(/* X */125, /* Y */ 675, "MODELO DE NEGOCIO: ");
            $pdf->Text(/* X */125, /* Y */ 725, "RECEPCION: ");
            $pdf->Text(/* X */700, /* Y */ 725, "NUMERO DE CONTRATO: ");

            $pdf->Text(/* X */700, /* Y */ 475, "PROVEEDOR: ");
            $pdf->Text(/* X */700, /* Y */ 525, "NUMERO DE FACTURA: ");
            $pdf->Text(/* X */700, /* Y */ 575, "IMPORTE : ");
            $pdf->Text(/* X */700, /* Y */ 625, "ORDEN DE COMPRA : ");
            $pdf->Text(/* X */700, /* Y */ 675, "ACTIVIDAD : ");
            $pdf->Text(/* X */125, /* Y */ 775, "OBSERVACION : ");
            $pdf->SetFont('Arial', 'B', 16);
            $ndate = str_split($DATA['FECHA']);
            $pdf->Text(/* X */205, /* Y */ 475, $DATA['FOLIO']);
            $pdf->Text(/* X */205, /* Y */ 525, $DATA['FECHA']);
            $pdf->Text(/* X */205, /* Y */ 575, $DATA['HORA']);
            $pdf->Text(/* X */305, /* Y */ 625, $DATA['EMPRESA']);
            $pdf->Text(/* X */355, /* Y */ 675, $DATA['MODELO DE NEGOCIO']);
            $pdf->Text(/* X */250, /* Y */ 725, $DATA['RECEPTOR']);
            $pdf->Text(/* X */925, /* Y */ 725, $DATA['NUMERO DE CONTRATO']);

//            $pdf->Text(/* X */850, /* Y */ 475, $DATA['PROVEEDOR']);
            $pdf->SetXY(840, 460);
            $pdf->MultiCell(300, 18, $DATA['PROVEEDOR']);
            $pdf->Text(/* X */950, /* Y */ 525, $DATA['NUMERO DE FACTURA']);
            $pdf->Text(/* X */825, /* Y */ 575, " $ " . number_format($DATA['IMPORTE'], 4, '.', ', '));
            $pdf->Text(/* X */925, /* Y */ 625, $DATA['ORDEN DE COMPRA']);
            $pdf->Text(/* X */825, /* Y */ 675, $DATA['ACTIVIDAD']);
            $pdf->SetXY(125, 790);
            $pdf->MultiCell(1000, 18, $DATA['OBSERVACION']);

            $pdf->Text(/* X */425, /* Y */ 1025, "_________________________________________");
            $pdf->Text(/* X */475, /* Y */ 1075, "FIRMA Y NOMBRE DE QUIEN RECIBE");


            $x = 200;
            $y = 400;

            if (!file_exists('uploads/Facturas/Acuses')) {
                mkdir('uploads/Facturas/Acuses', 0777, true);
            }
            if (!file_exists('uploads/Facturas/Acuses/' . utf8_decode($DATA['EMPRESA']))) {
                mkdir('uploads/Facturas/Acuses/' . utf8_decode($DATA['EMPRESA']), 0777, true);
            }
            $url = 'uploads/Facturas/Acuses/' . utf8_decode($DATA['EMPRESA']) . '/' . $DATA['ID'] . '_' . str_replace("/", " ", $DATA['ORDEN DE COMPRA']) . '.pdf';
            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCreateByBussines() {
        try {
            if (isset($_POST["ID"]) || isset($_POST["IDPRO"]) || isset($_POST["FECHAINICIO"]) || isset($_POST["FECHATERMINO"])) {
                $data = $this->tramitefactura_model->getRecordsByBusiness($_POST["ID"], $_POST["IDPRO"], $_POST["FECHAINICIO"], $_POST["FECHATERMINO"]);
                $json = json_encode($data);
                print $json;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /*
     * CR GENERAL O POR EMPRESA
     */

    public function onCreatePDFByID() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReport($ID);
            $rows = $this->tramitefactura_model->getRecordsRowsReport($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            $pdf->SetY(100);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(590);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }

                    $pdf->SetFont('Arial', '', 18);
                    $pdf->SetY(120);
                    $pdf->SetX(450);
                    $pdf->Cell(100, 10, "RELACION SEMANAL CONTRA - RECIBOS - (OBRA)(MATERIAL)(EFP)", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(1050);
                    $pdf->Cell(100, 15, strtoupper(date("H:i:s a")), 0, 1, 'L');
                    $pdf->SetX(1055);
                    $pdf->Cell(100, 15, strtoupper(date("d/m/Y")), 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 18);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(170);
                    $pdf->SetX(140);
                    $pdf->Cell(100, 15, "NO.", 0, 0, 'L');
                    $pdf->SetX(290);
                    $pdf->Cell(100, 15, "FACTURA", 0, 0, 'L');
                    $pdf->SetX(590);
                    $pdf->Cell(100, 15, "PROVEEDOR", 0, 0, 'L');
                    $pdf->SetX(960);
                    $pdf->Cell(100, 15, "IMPORTE", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $ltop = 330;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $alto_fila = 20;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $n_page = 1;
                    $pdf->SetY(190);
//                    for ($index1 = 0; $index1 < 1000; $index1++) {
                    for ($index = 0; $index < count($rows); $index++) {
                        if ($pdf->GetY() > 1500) {
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
                        $pdf->SetX(140);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->ID, 0, 0, 'L');
                        $pdf->SetX(300);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->SetFont('Arial', '', 10);
                        $pdf->SetX(450);
                        $pdf->Cell(100, $alto_fila, utf8_decode($rows[$index]->PROVEEDOR), 0, 0, 'L');
                        $pdf->SetFont('Arial', '', 14);
                        $pdf->SetX(945);
                        $pdf->Cell(100, $alto_fila, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 1, 'L');
                        $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $ltop = $ltop + $lvtop;
                        $alto = $alto + 30;
                    }
//                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(880);
                    $pdf->Cell(100, $alto_fila, "TOTAL     $ " . number_format($rTotal, 2, '.', ', '), 0, 0, 'L');
                    if ($pdf->GetY() > 800) {
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
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());
                    $pdf->SetX(500);
                    $pdf->Cell(100, $alto_fila, "LIC.ROGELIO ALEJANDRO RAMIREZ URBINA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(630);
                    $pdf->Cell(100, $alto_fila, "RECIBE", 0, 1, 'L');


                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());

                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "C.P. CLEMENTE URBINA TORRES", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(590);
                    $pdf->Cell(100, $alto_fila, "AREA ADMON", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "FECHA: _______________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetX(260);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 0, 'L');
                    $pdf->SetX(750);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, $rdata->RESPONSABLE, 0, 0, 'L');
                    $pdf->SetX(830);
                    $pdf->Cell(100, $alto_fila, "ARQ. JOSE ORTEGA", 0, 1, 'L');
                    $pdf->SetX(860);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Cell(100, $alto_fila, "AREA TECNICA", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 0, 'L');
                    $pdf->SetX(800);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);

                    if (!file_exists('uploads/ContraRecibos')) {
                        mkdir('uploads/ContraRecibos', 0777, true);
                    }
                    if (!file_exists('uploads/ContraRecibos/' . $rdata->EMPRESA)) {
                        mkdir('uploads/ContraRecibos/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/ContraRecibos/' . $rdata->EMPRESA . '/CR_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function onCreatePDFByIDOBRA() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReport($ID);
            $rows = $this->tramitefactura_model->getRecordsRowsReportOBRA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            $pdf->SetY(100);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(590);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }

                    $pdf->SetFont('Arial', '', 18);
                    $pdf->SetY(120);
                    $pdf->SetX(500);
                    $pdf->Cell(100, 10, "RELACION SEMANAL CONTRA - RECIBOS - OBRA", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(1050);
                    $pdf->Cell(100, 15, strtoupper(date("H:i:s a")), 0, 1, 'L');
                    $pdf->SetX(1055);
                    $pdf->Cell(100, 15, strtoupper(date("d/m/Y")), 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 18);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(170);
                    $pdf->SetX(140);
                    $pdf->Cell(100, 15, "NO.", 0, 0, 'L');
                    $pdf->SetX(290);
                    $pdf->Cell(100, 15, "FACTURA", 0, 0, 'L');
                    $pdf->SetX(590);
                    $pdf->Cell(100, 15, "PROVEEDOR", 0, 0, 'L');
                    $pdf->SetX(960);
                    $pdf->Cell(100, 15, "IMPORTE", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $ltop = 330;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $alto_fila = 20;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $n_page = 1;
                    $pdf->SetY(190);
//                    for ($index1 = 0; $index1 < 1000; $index1++) {
                    for ($index = 0; $index < count($rows); $index++) {
                        if ($pdf->GetY() > 1500) {
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
                        $pdf->SetX(140);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->ID, 0, 0, 'L');
                        $pdf->SetX(300);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->SetFont('Arial', '', 10);
                        $pdf->SetX(450);
                        $pdf->Cell(100, $alto_fila, utf8_decode($rows[$index]->PROVEEDOR), 0, 0, 'L');
                        $pdf->SetFont('Arial', '', 14);
                        $pdf->SetX(945);
                        $pdf->Cell(100, $alto_fila, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 1, 'L');
                        $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $ltop = $ltop + $lvtop;
                        $alto = $alto + 30;
                    }
//                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(880);
                    $pdf->Cell(100, $alto_fila, "TOTAL     $ " . number_format($rTotal, 2, '.', ', '), 0, 0, 'L');
                    if ($pdf->GetY() > 800) {
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
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());
                    $pdf->SetX(500);
                    $pdf->Cell(100, $alto_fila, "LIC.ROGELIO ALEJANDRO RAMIREZ URBINA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(630);
                    $pdf->Cell(100, $alto_fila, "RECIBE", 0, 1, 'L');


                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());

                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "C.P. CLEMENTE URBINA TORRES", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(590);
                    $pdf->Cell(100, $alto_fila, "AREA ADMON", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "FECHA: _______________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetX(260);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 0, 'L');
                    $pdf->SetX(750);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, $rdata->RESPONSABLE, 0, 0, 'L');
                    $pdf->SetX(830);
                    $pdf->Cell(100, $alto_fila, "ARQ. JOSE ORTEGA", 0, 1, 'L');
                    $pdf->SetX(860);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Cell(100, $alto_fila, "AREA TECNICA", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 0, 'L');
                    $pdf->SetX(800);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);

                    if (!file_exists('uploads/ContraRecibos')) {
                        mkdir('uploads/ContraRecibos', 0777, true);
                    }
                    if (!file_exists('uploads/ContraRecibos/' . $rdata->EMPRESA)) {
                        mkdir('uploads/ContraRecibos/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/ContraRecibos/' . $rdata->EMPRESA . '/CR_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function onCreatePDFByIDOBRAMATERIAL() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);
            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReport($ID);
            $rows = $this->tramitefactura_model->getRecordsRowsReportMATERIAL($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);

            $pdf->SetY(100);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(590);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }

                    $pdf->SetFont('Arial', '', 18);
                    $pdf->SetY(120);
                    $pdf->SetX(500);
                    $pdf->Cell(100, 10, "RELACION SEMANAL CONTRA RECIBOS (MATERIAL)", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(1050);
                    $pdf->Cell(100, 15, strtoupper(date("H:i:s a")), 0, 1, 'L');
                    $pdf->SetX(1055);
                    $pdf->Cell(100, 15, strtoupper(date("d/m/Y")), 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 18);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(170);
                    $pdf->SetX(140);
                    $pdf->Cell(100, 15, "NO.", 0, 0, 'L');
                    $pdf->SetX(290);
                    $pdf->Cell(100, 15, "FACTURA", 0, 0, 'L');
                    $pdf->SetX(590);
                    $pdf->Cell(100, 15, "PROVEEDOR", 0, 0, 'L');
                    $pdf->SetX(960);
                    $pdf->Cell(100, 15, "IMPORTE", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $ltop = 330;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $alto_fila = 20;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $n_page = 1;
                    $pdf->SetY(190);
//                    for ($index1 = 0; $index1 < 1000; $index1++) {
                    for ($index = 0; $index < count($rows); $index++) {
                        if ($pdf->GetY() > 1500) {
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
                        $pdf->SetX(140);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->ID, 0, 0, 'L');
                        $pdf->SetX(300);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->SetFont('Arial', '', 10);
                        $pdf->SetX(450);
                        $pdf->Cell(100, $alto_fila, utf8_decode($rows[$index]->PROVEEDOR), 0, 0, 'L');
                        $pdf->SetFont('Arial', '', 14);
                        $pdf->SetX(945);
                        $pdf->Cell(100, $alto_fila, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 1, 'L');
                        $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $ltop = $ltop + $lvtop;
                        $alto = $alto + 30;
                    }
//                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(880);
                    $pdf->Cell(100, $alto_fila, "TOTAL     $ " . number_format($rTotal, 2, '.', ', '), 0, 0, 'L');
                    if ($pdf->GetY() > 800) {
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
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());
                    $pdf->SetX(500);
                    $pdf->Cell(100, $alto_fila, "LIC.ROGELIO ALEJANDRO RAMIREZ URBINA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(630);
                    $pdf->Cell(100, $alto_fila, "RECIBE", 0, 1, 'L');


                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());

                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "C.P. CLEMENTE URBINA TORRES", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(590);
                    $pdf->Cell(100, $alto_fila, "AREA ADMON", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "FECHA: _______________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetX(260);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 0, 'L');
                    $pdf->SetX(750);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, $rdata->RESPONSABLE, 0, 0, 'L');
                    $pdf->SetX(830);
                    $pdf->Cell(100, $alto_fila, "ARQ. JOSE ORTEGA", 0, 1, 'L');
                    $pdf->SetX(860);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Cell(100, $alto_fila, "AREA TECNICA", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 0, 'L');
                    $pdf->SetX(800);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);

                    if (!file_exists('uploads/ContraRecibos')) {
                        mkdir('uploads/ContraRecibos', 0777, true);
                    }
                    if (!file_exists('uploads/ContraRecibos/' . $rdata->EMPRESA)) {
                        mkdir('uploads/ContraRecibos/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/ContraRecibos/' . $rdata->EMPRESA . '/CR_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function onCreatePDFByIDSA() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
            $image = "log_1o.png";
//            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf = new FPDF('P', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 10, 10, /* ANCHO */ 60, /* ALTO */ 21);
            $pdf->SetFont('Arial', 'B', 15);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReport($ID);
            $rows = $this->tramitefactura_model->getRecordsRowsReportSA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            $pdf->SetY(15);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(70);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(70);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }

                    $pdf->SetFont('Arial', '', 9.5);
                    $pdf->SetY(20);
                    $pdf->SetX(85);
                    $pdf->Cell(100, 8, "RELACION SEMANAL CONTRA - RECIBOS", 0, 0, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(170);
                    $pdf->Cell(100, 6, strtoupper(date("H:i:s a")), 0, 1, 'L');
                    $pdf->SetX(170);
                    $pdf->Cell(100, 6, strtoupper(date("d/m/Y")), 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(35);
                    $pdf->SetX(20);
                    $pdf->Cell(100, 5.5, "NO.", 0, 0, 'L');
                    $pdf->SetX(38);
                    $pdf->Cell(100, 5.5, "FACTURA", 0, 0, 'L');
                    $pdf->SetX(80);
                    $pdf->Cell(100, 5.5, "PROVEEDOR", 0, 0, 'L');
                    $pdf->SetX(150);
                    $pdf->Cell(100, 5.5, "IMPORTE", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 195, $pdf->GetY());

                    $ltop = 330;
                    $pdf->SetFont('Arial', '', 7.5);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $alto_fila = 4.5;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $n_page = 1;
                    $pdf->SetY(40);
//                    for ($index1 = 0; $index1 < 1000; $index1++) {
                    for ($index = 0; $index < count($rows); $index++) {
                        if ($pdf->GetY() > 1500) {
                            $pdf->SetDrawColor(192, 192, 192);
                            $pdf->SetTextColor(192, 192, 192);
                            $pdf->Cell(100, 5, "", 0, 1, 'L');
                            $pdf->Line(/* Izq-X */80, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 195, $pdf->GetY() - 2);
                            $pdf->SetX(150);
                            $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                            $n_page += 1;
                            $pdf->AddPage();
                            $top = 0;
                            $pdf->SetDrawColor(0, 0, 0);
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->SetX(20);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->ID, 0, 0, 'L');
                        $pdf->SetX(40);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->SetFont('Arial', '', 7.5);
                        $y = $pdf->GetY();
                        $pdf->SetX(60);
                        $pdf->MultiCell(85, 5, strtoupper(utf8_decode($rows[$index]->PROVEEDOR)));
//                        $pdf->Cell(100, $alto_fila, strtoupper(utf8_decode($rows[$index]->PROVEEDOR)), 0, 0, 'L');
                        $pdf->SetFont('Arial', '', 7.5);
                        $yy = $pdf->GetY();
                        $pdf->SetY($y);
                        $pdf->SetX(150);
                        $pdf->Cell(100, $alto_fila, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 1, 'L');
                        $pdf->SetY($yy);
                        $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 195, $pdf->GetY());
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $ltop = $ltop + $lvtop;
                        $alto = $alto + 30;
                    }
//                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 195, $pdf->GetY());

                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 195, $pdf->GetY());
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(130);
                    $pdf->Cell(100, $alto_fila, "TOTAL     $ " . number_format($rTotal, 2, '.', ', '), 0, 0, 'L');
                    if ($pdf->GetY() > 950) {
                        $pdf->SetDrawColor(192, 192, 192);
                        $pdf->SetTextColor(192, 192, 192);
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ 230, $pdf->GetY() - 2);
                        $pdf->SetX(50);
                        $pdf->Cell(100, 3, $n_page, 0, 1, 'L');
                        $n_page += 1;
                        $pdf->AddPage();
                        $top = 0;
                        $pdf->SetDrawColor(0, 0, 0);
                        $pdf->SetTextColor(0, 0, 0);
                    }
                    $pdf->SetFont('Arial', '', 7.5);
                    $pdf->SetY($pdf->GetY() + 20);
                    $pdf->Line(/* Izq-X */70, /* Top-Y */ $pdf->GetY(), /* Largo */ 136, $pdf->GetY());
                    $pdf->SetX(75);
                    $pdf->Cell(100, $alto_fila, "LIC.ROGELIO ALEJANDRO RAMIREZ URBINA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 7.5);
                    $pdf->SetX(95);
                    $pdf->Cell(100, $alto_fila, "RECIBE", 0, 1, 'L');


                    $pdf->SetY($pdf->GetY() + 15);
                    $pdf->SetFont('Arial', '', 7.5);
                    $pdf->Line(/* Izq-X */70, /* Top-Y */ $pdf->GetY(), /* Largo */ 136, $pdf->GetY());

                    $pdf->SetX(80);
                    $pdf->Cell(100, $alto_fila, "C.P. CLEMENTE URBINA TORRES", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 7.5);
                    $pdf->SetX(95);
                    $pdf->Cell(100, $alto_fila, "AREA ADMON", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 7.5);
                    $pdf->SetX(80);
                    $pdf->Cell(100, $alto_fila, "FECHA: _______________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 7.5);
                    $pdf->SetY($pdf->GetY() + 10);
                    $pdf->SetX(25);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 0, 'L');
                    $pdf->SetX(140);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 1, 'L');
                    $pdf->SetX(30);
                    $pdf->Cell(100, $alto_fila, $rdata->RESPONSABLE, 0, 0, 'L');
                    $pdf->SetX(150);
                    $pdf->Cell(100, $alto_fila, "ARQ. JOSE ORTEGA", 0, 1, 'L');
                    $pdf->SetX(155);
                    $pdf->SetFont('Arial', 'B', 7.5);
                    $pdf->Cell(100, $alto_fila, "AREA TECNICA", 0, 1, 'L');
                    $pdf->SetX(30);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 0, 'L');
                    $pdf->SetX(140);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);

                    if (!file_exists('uploads/ContraRecibos')) {
                        mkdir('uploads/ContraRecibos', 0777, true);
                    }
                    if (!file_exists('uploads/ContraRecibos/' . $rdata->EMPRESA)) {
                        mkdir('uploads/ContraRecibos/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/ContraRecibos/' . $rdata->EMPRESA . '/CR_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function onCreatePDFByIDSAOBRA() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);

            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReport($ID);
            $rows = $this->tramitefactura_model->getRecordsRowsReportSAOBRA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            $pdf->SetY(100);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(590);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }

                    $pdf->SetFont('Arial', '', 18);
                    $pdf->SetY(120);
                    $pdf->SetX(500);
                    $pdf->Cell(100, 10, "RELACION SEMANAL CONTRA RECIBOS (OBRA)", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(1050);
                    $pdf->Cell(100, 15, strtoupper(date("H:i:s a")), 0, 1, 'L');
                    $pdf->SetX(1055);
                    $pdf->Cell(100, 15, strtoupper(date("d/m/Y")), 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 18);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(170);
                    $pdf->SetX(140);
                    $pdf->Cell(100, 15, "NO.", 0, 0, 'L');
                    $pdf->SetX(290);
                    $pdf->Cell(100, 15, "FACTURA", 0, 0, 'L');
                    $pdf->SetX(590);
                    $pdf->Cell(100, 15, "PROVEEDOR", 0, 0, 'L');
                    $pdf->SetX(960);
                    $pdf->Cell(100, 15, "IMPORTE", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $ltop = 330;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $alto_fila = 20;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $n_page = 1;
                    $pdf->SetY(190);
//                    for ($index1 = 0; $index1 < 1000; $index1++) {
                    for ($index = 0; $index < count($rows); $index++) {
                        if ($pdf->GetY() > 1500) {
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
                        $pdf->SetX(140);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->ID, 0, 0, 'L');
                        $pdf->SetX(300);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->SetFont('Arial', '', 10);
                        $pdf->SetX(450);
                        $pdf->Cell(100, $alto_fila, utf8_decode($rows[$index]->PROVEEDOR), 0, 0, 'L');
                        $pdf->SetFont('Arial', '', 14);
                        $pdf->SetX(945);
                        $pdf->Cell(100, $alto_fila, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 1, 'L');
                        $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $ltop = $ltop + $lvtop;
                        $alto = $alto + 30;
                    }
//                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(880);
                    $pdf->Cell(100, $alto_fila, "TOTAL     $ " . number_format($rTotal, 2, '.', ', '), 0, 0, 'L');
                    if ($pdf->GetY() > 800) {
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
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());
                    $pdf->SetX(500);
                    $pdf->Cell(100, $alto_fila, "LIC.ROGELIO ALEJANDRO RAMIREZ URBINA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(630);
                    $pdf->Cell(100, $alto_fila, "RECIBE", 0, 1, 'L');


                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());

                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "C.P. CLEMENTE URBINA TORRES", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(590);
                    $pdf->Cell(100, $alto_fila, "AREA ADMON", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "FECHA: _______________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetX(260);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 0, 'L');
                    $pdf->SetX(750);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, $rdata->RESPONSABLE, 0, 0, 'L');
                    $pdf->SetX(830);
                    $pdf->Cell(100, $alto_fila, "ARQ. JOSE ORTEGA", 0, 1, 'L');
                    $pdf->SetX(860);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Cell(100, $alto_fila, "AREA TECNICA", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 0, 'L');
                    $pdf->SetX(800);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);

                    if (!file_exists('uploads/ContraRecibos')) {
                        mkdir('uploads/ContraRecibos', 0777, true);
                    }
                    if (!file_exists('uploads/ContraRecibos/' . $rdata->EMPRESA)) {
                        mkdir('uploads/ContraRecibos/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/ContraRecibos/' . $rdata->EMPRESA . '/CR_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function onCreatePDFByIDSAMATERIAL() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);

            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReport($ID);
            $rows = $this->tramitefactura_model->getRecordsRowsReportSAMATERIAL($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);

            $pdf->SetY(100);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(590);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }

                    $pdf->SetFont('Arial', '', 18);
                    $pdf->SetY(120);
                    $pdf->SetX(500);
                    $pdf->Cell(100, 10, "RELACION SEMANAL CONTRA RECIBOS (MATERIAL)", 0, 1, 'L');
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(1050);
                    $pdf->Cell(100, 15, strtoupper(date("H:i:s a")), 0, 1, 'L');
                    $pdf->SetX(1055);
                    $pdf->Cell(100, 15, strtoupper(date("d/m/Y")), 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 18);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(170);
                    $pdf->SetX(140);
                    $pdf->Cell(100, 15, "NO.", 0, 0, 'L');
                    $pdf->SetX(290);
                    $pdf->Cell(100, 15, "FACTURA", 0, 0, 'L');
                    $pdf->SetX(590);
                    $pdf->Cell(100, 15, "PROVEEDOR", 0, 0, 'L');
                    $pdf->SetX(960);
                    $pdf->Cell(100, 15, "IMPORTE", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $ltop = 330;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $alto_fila = 20;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $n_page = 1;
                    $pdf->SetY(190);
//                    for ($index1 = 0; $index1 < 1000; $index1++) {
                    for ($index = 0; $index < count($rows); $index++) {
                        if ($pdf->GetY() > 1500) {
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
                        $pdf->SetX(140);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->ID, 0, 0, 'L');
                        $pdf->SetX(300);
                        $pdf->Cell(100, $alto_fila, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->SetFont('Arial', '', 10);
                        $pdf->SetX(450);
                        $pdf->Cell(100, $alto_fila, utf8_decode($rows[$index]->PROVEEDOR), 0, 0, 'L');
                        $pdf->SetFont('Arial', '', 14);
                        $pdf->SetX(945);
                        $pdf->Cell(100, $alto_fila, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 1, 'L');
                        $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $ltop = $ltop + $lvtop;
                        $alto = $alto + 30;
                    }
//                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());

                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $pdf->GetY(), /* Largo */ 1150, $pdf->GetY());
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(880);
                    $pdf->Cell(100, $alto_fila, "TOTAL     $ " . number_format($rTotal, 2, '.', ', '), 0, 0, 'L');
                    if ($pdf->GetY() > 800) {
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
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());
                    $pdf->SetX(500);
                    $pdf->Cell(100, $alto_fila, "LIC.ROGELIO ALEJANDRO RAMIREZ URBINA", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(630);
                    $pdf->Cell(100, $alto_fila, "RECIBE", 0, 1, 'L');


                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());

                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "C.P. CLEMENTE URBINA TORRES", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(590);
                    $pdf->Cell(100, $alto_fila, "AREA ADMON", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetX(530);
                    $pdf->Cell(100, $alto_fila, "FECHA: _______________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);
                    $pdf->SetY($pdf->GetY() + 100);
                    $pdf->SetX(260);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 0, 'L');
                    $pdf->SetX(750);
                    $pdf->Cell(100, $alto_fila, "____________________________________", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, $rdata->RESPONSABLE, 0, 0, 'L');
                    $pdf->SetX(830);
                    $pdf->Cell(100, $alto_fila, "ARQ. JOSE ORTEGA", 0, 1, 'L');
                    $pdf->SetX(860);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Cell(100, $alto_fila, "AREA TECNICA", 0, 1, 'L');
                    $pdf->SetX(280);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 0, 'L');
                    $pdf->SetX(800);
                    $pdf->Cell(100, $alto_fila, "FECHA:____________________", 0, 1, 'L');

                    $pdf->SetFont('Arial', '', 14);

                    if (!file_exists('uploads/ContraRecibos')) {
                        mkdir('uploads/ContraRecibos', 0777, true);
                    }
                    if (!file_exists('uploads/ContraRecibos/' . $rdata->EMPRESA)) {
                        mkdir('uploads/ContraRecibos/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/ContraRecibos/' . $rdata->EMPRESA . '/CR_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    /*
     * CR POR PROVEEDOR
     */

    public function onCreatePDFBySupplierID() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);

            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReportBySuppplier($ID, $IDPRO);
            $rows = $this->tramitefactura_model->getRecordsRowsReportCR($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            $pdf->SetY(80);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    $topt = 100;
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->SetX(675);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    } else {
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rdata->EMPRESA, 0, 1, 'L');
                    }
                    $pdf->SetFont('Arial', '', 18);
                    $topt = $topt + 25;
                    $pdf->Text(/* X */450, /* Y */ $topt, "LOMA DEL PEDREGAL # 417 LOMAS DEL CAMPESTRE");
                    $topt = $topt + 25;
                    $pdf->Text(/* X */550, /* Y */ $topt, utf8_decode(strtoupper("C.P.  37150  León, Gto.")));
                    $topt = $topt + 45;
                    $pdf->SetFont('Arial', 'B', 24);
                    $pdf->SetTextColor(25, 25, 112);
                    $pdf->Text(/* X */550, /* Y */ $topt, utf8_decode(strtoupper("CONTRA RECIBO")));
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetFont('Arial', '', 18);
                    $topt = $topt + 40;
                    $pdf->Text(/* X */100, /* Y */ $topt, utf8_decode(strtoupper("FECHA DE EMISIÓN:")));
//                    $pdf->Text(/* X */1000, /* Y */ $topt, utf8_decode(strtoupper("NO.")));
//                    $pdf->Text(/* X */1100, /* Y */ $topt, utf8_decode(strtoupper($rdata->ID)));
                    $pdf->Text(/* X */330, /* Y */ $topt, utf8_decode(strtoupper(Date('d/m/Y h:i:s a'))));
                    $topt = $topt + 25;
                    $pdf->Text(/* X */130, /* Y */ $topt, utf8_decode(strtoupper("RECIBIMOS DE: ")));
                    $pdf->Text(/* X */330, /* Y */ $topt, utf8_decode(strtoupper($rdata->PROVEEDOR)));
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'i', 10);
                    $pdf->Text(/* X */525, /* Y */ $topt, utf8_decode(strtoupper("*Los siguientes documentos a revisión para tramite de pago* ")));
                    $pdf->SetTextColor(0, 0, 0);
                    $ltop = 375;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $topt = $topt + 75;
                    $pdf->SetY(340);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */150, /* Y */ 330, utf8_decode("FOLIO"));
                    $pdf->Text(/* X */300, /* Y */ 330, utf8_decode("NÚMERO"));
                    $pdf->Text(/* X */450, /* Y */ 330, "FECHA");
                    $pdf->Text(/* X */590, /* Y */ 330, "IMPORTE");
                    $pdf->Text(/* X */860, /* Y */ 330, "OBSERVACIONES");
                    $pdf->Line(/* Izq-X */125, /* Top-Y */ $pdf->GetY(), /* Largo */ 1100, $pdf->GetY());
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetFont('Arial', '', 14);
                    for ($index = 0; $index < count($rows); $index++) {
//                        $pdf->Cell(72);
                        $pdf->SetX(150);
                        $pdf->Cell(100, 10, $rows[$index]->FOLIO, 0, 0, 'L');
                        $pdf->SetX(300);
                        $pdf->Cell(100, 10, $rows[$index]->NF, 0, 0, 'L');
                        $pdf->SetX(450);
                        $pdf->Cell(100, 10, $rows[$index]->FECHA, 0, 0, 'L');
                        $pdf->SetX(590);
                        $pdf->Cell(100, 10, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '), 0, 0, 'L');
//                        $pdf->Text(/* X */150, /* Y */ $topt - 8, $rows[$index]->FOLIO);
//                        $pdf->Text(/* X */300, /* Y */ $topt - 8, $rows[$index]->NF);
//                        $pdf->Text(/* X */450, /* Y */ $topt - 8, $rows[$index]->FECHA);
//                        $pdf->Text(/* X */600, /* Y */ $topt - 8, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '));
//                        $pdf->SetXY(800, $topt - 25);
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->MultiCell(/* X */300, 18, utf8_decode(strtoupper((($rows[$index]->OBSERVACION != "SIN OBSERVACIONES" && $rows[$index]->OBSERVACION != "SIN OBSERVACION" && $rows[$index]->OBSERVACION != "" && $rows[$index]->OBSERVACION != "NA") ? $rows[$index]->OBSERVACION : ''))));
                        $str = $rows[$index]->OBSERVACION;
                        if (strlen($str) > 30) {
                            $topt = $topt + 25;
                        }
                        if (strlen($str) > 60) {
                            $topt = $topt + 50;
                        }

                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $pdf->Line(/* Izq-X */125, /* Top-Y */ $pdf->GetY(), /* Largo */ 1100, $pdf->GetY());
                        $pdf->Cell(100, 5, "", 0, 1, 'L');
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $topt = $topt + $lvtop;
                        $alto = $alto + 30;
                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->SetDrawColor(0, 0, 0);
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetX(450);
                    $pdf->Cell(100, 10, "TOTAL", 0, 0, 'L');
                    $pdf->SetX(590);
                    $pdf->Cell(100, 10, "$ " . number_format($rTotal, 2, '.', ', '), 0, 1, 'L');

                    $topt = $topt + 75;
                    $pdf->SetFont('Arial', '', 14);
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->SetY($pdf->GetY() + 150);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $pdf->GetY(), /* Largo */ 850, $pdf->GetY());
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->SetX(600);
                    $pdf->Cell(100, 10, "RECIBE", 0, 1, 'L');
                    $fname = utf8_decode('CRXP_' . $rdata->EMPRESA . '_' . $rdata->ID);
                    $url = 'uploads/ContraRecibosXProveedor/' . $fname . '.pdf';
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

    public function getContraReciboObra() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);

            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReportBySuppplier($ID, $IDPRO);
            $rows = $this->tramitefactura_model->getRecordsRowsReportCROBRA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    $topt = 100;
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->Text(/* X */600, /* Y */ $topt, strtoupper($rdata->EMPRESA));
                    } else {
                        $pdf->Text(/* X */400, /* Y */ $topt, strtoupper($rdata->EMPRESA));
                    }
                    $pdf->SetFont('Arial', '', 25);
                    $topt = $topt + 25;
                    $pdf->Text(/* X */640, /* Y */ $topt, "OBRA");
                    $pdf->SetFont('Arial', '', 18);
                    $topt = $topt + 25;
                    $pdf->Text(/* X */500, /* Y */ $topt, "CALLE " . strtoupper($rdata->CALLE) . " # " . strtoupper($rdata->NUMEROEXT) . " COL." . strtoupper($rdata->COLONIA));
                    $topt = $topt + 25;
                    $pdf->Text(/* X */550, /* Y */ $topt, utf8_decode(strtoupper("C.P. " . $rdata->CP . " " . $rdata->CIUDAD . ", " . $rdata->ESTADO . ".")));
                    $topt = $topt + 45;
                    $pdf->SetFont('Arial', 'B', 24);
                    $pdf->SetTextColor(25, 25, 112);
                    $pdf->Text(/* X */550, /* Y */ $topt, utf8_decode(strtoupper("CONTRA RECIBO")));
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetFont('Arial', '', 18);
                    $topt = $topt + 40;
                    $pdf->Text(/* X */100, /* Y */ $topt, utf8_decode(strtoupper("FECHA DE EMISIÓN:")));
//                    $pdf->Text(/* X */1000, /* Y */ $topt, utf8_decode(strtoupper("NO.")));
//                    $pdf->Text(/* X */1100, /* Y */ $topt, utf8_decode(strtoupper($rdata->ID)));
                    $pdf->Text(/* X */330, /* Y */ $topt, utf8_decode(strtoupper(Date('d/m/Y h:m:s a'))));
                    $topt = $topt + 25;
                    $pdf->Text(/* X */130, /* Y */ $topt, utf8_decode(strtoupper("RECIBIMOS DE: ")));
                    $pdf->Text(/* X */330, /* Y */ $topt, utf8_decode(strtoupper($rdata->PROVEEDOR)));
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'i', 10);
                    $pdf->Text(/* X */525, /* Y */ $topt, utf8_decode(strtoupper("*Los siguientes documentos a revisión para tramite de pago* ")));
                    $pdf->SetTextColor(0, 0, 0);
                    $ltop = 375;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $topt = $topt + 75;
                    for ($index = 0; $index < count($rows); $index++) {
                        $pdf->Cell(72);
                        $pdf->Text(/* X */150, /* Y */ $topt - 8, $rows[$index]->FOLIO);
                        $pdf->Text(/* X */300, /* Y */ $topt - 8, $rows[$index]->NF);
                        $pdf->Text(/* X */450, /* Y */ $topt - 8, $rows[$index]->FECHA);
                        $pdf->Text(/* X */600, /* Y */ $topt - 8, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '));
                        $pdf->SetXY(800, $topt - 25);
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->MultiCell(/* X */300, 18, utf8_decode(strtoupper((($rows[$index]->OBSERVACION != "SIN OBSERVACIONES" && $rows[$index]->OBSERVACION != "SIN OBSERVACION" && $rows[$index]->OBSERVACION != "" && $rows[$index]->OBSERVACION != "NA") ? $rows[$index]->OBSERVACION : ''))));
                        $str = $rows[$index]->OBSERVACION;
                        if (strlen($str) > 30) {
                            $topt = $topt + 25;
                        }
                        if (strlen($str) > 60) {
                            $topt = $topt + 50;
                        }

                        $pdf->Line(/* Izq-X */125, /* Top-Y */ $topt, /* Largo */ 1100, $topt);
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $topt = $topt + $lvtop;
                        $alto = $alto + 30;
                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */150, /* Y */ 330, utf8_decode("FOLIO"));
                    $pdf->Text(/* X */300, /* Y */ 330, utf8_decode("NÚMERO"));
                    $pdf->Text(/* X */450, /* Y */ 330, "FECHA");
                    $pdf->Text(/* X */600, /* Y */ 330, "IMPORTE");
                    $pdf->Text(/* X */860, /* Y */ 330, "OBSERVACIONES");
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ 335, /* Largo */ 1150, 335);
                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $topt, /* Largo */ 1150, $topt);
                    $pdf->SetDrawColor(0, 0, 0);
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */390, /* Y */ $topt, "TOTAL");
                    $pdf->Text(/* X */590, /* Y */ $topt, "$ " . number_format($rTotal, 2, '.', ', '));

                    $topt = $topt + 75;
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $topt, /* Largo */ 850, $topt);
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */600, /* Y */ $topt, "RECIBE");


//                    if (!is_dir('uploads/ContraRecibosXProveedor')) {
//                        mkdir('uploads/ContraRecibosXProveedor', 0777, true);
//                    }
//                    if (!is_dir('uploads/ContraRecibosXProveedor/' . $rdata->EMPRESA . '/' . utf8_decode(strtoupper($rdata->PROVEEDOR)))) {
//                        mkdir('uploads/ContraRecibosXProveedor/' . $rdata->EMPRESA . '/' . utf8_decode(strtoupper($rdata->PROVEEDOR)), 0777, true);
//                    }
                    $fname = 'CRXP_' . $rdata->EMPRESA . '_' . utf8_decode(strtoupper($rdata->PROVEEDOR)) . '_' . $rdata->ID;
                    $url = 'uploads/ContraRecibosXProveedor/' . $fname . '.pdf';
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

    public function getContraReciboMateriales() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
//            require_once APPPATH . "/third_party/fpdf17/html_table.php";
            if (!isset($ID)) {
                extract(filter_input_array(INPUT_POST));
            }
//            $DATA = json_decode($_REQUEST['ID'], true);
            $image = "log_1o.png";
            $pdf = new FPDF('P', 'pt', array(1240, 1554));
            $pdf->AddPage();
            $pdf->Image('media/' . $image, 60, 60, /* ANCHO */ 254, /* ALTO */ 84);

            $pdf->SetFont('Arial', 'B', 32);
            $tblAlto = 0;
            $tblAncho = 0;
            $tblAnchoColumnas = 150;

            $data = $this->tramitefactura_model->getRecordsReportBySuppplier($ID, $IDPRO);
            $rows = $this->tramitefactura_model->getRecordsRowsReportCRMATERIAL($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO);
            $nrows = count($rows);
            if (isset($data[0])) {
                $rdata = $data[0];
                if (isset($rdata->EMPRESA)) {
                    $topt = 100;
                    if (strlen($rdata->EMPRESA) <= 10) {
                        $pdf->Text(/* X */675, /* Y */ $topt, strtoupper($rdata->EMPRESA));
                    } else {
                        $pdf->Text(/* X */400, /* Y */ $topt, strtoupper($rdata->EMPRESA));
                    }
                    $pdf->SetFont('Arial', '', 25);
                    $topt = $topt + 25;
                    $pdf->Text(/* X */500, /* Y */ $topt, "COMERCIO DE MATERIALES");
                    $pdf->SetFont('Arial', '', 16);
                    $topt = $topt + 25;
                    $pdf->Text(/* X */500, /* Y */ $topt, "CALLE " . strtoupper($rdata->CALLE) . " # " . strtoupper($rdata->NUMEROEXT) . " COL." . strtoupper($rdata->COLONIA));
                    $topt = $topt + 25;
                    $pdf->Text(/* X */550, /* Y */ $topt, utf8_decode(strtoupper("C.P. " . $rdata->CP . " " . $rdata->CIUDAD . ", " . $rdata->ESTADO . ".")));
                    $topt = $topt + 45;
                    $pdf->SetFont('Arial', 'B', 24);
                    $pdf->SetTextColor(25, 25, 112);
                    $pdf->Text(/* X */550, /* Y */ $topt, utf8_decode(strtoupper("CONTRA RECIBO")));
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetFont('Arial', '', 18);
                    $topt = $topt + 40;
                    $pdf->Text(/* X */100, /* Y */ $topt, utf8_decode(strtoupper("FECHA DE EMISIÓN:")));
//                    $pdf->Text(/* X */1000, /* Y */ $topt, utf8_decode(strtoupper("NO.")));
//                    $pdf->Text(/* X */1100, /* Y */ $topt, utf8_decode(strtoupper($rdata->ID)));
                    $pdf->Text(/* X */330, /* Y */ $topt, utf8_decode(strtoupper(Date('d/m/Y h:m:s a'))));
                    $topt = $topt + 25;
                    $pdf->Text(/* X */130, /* Y */ $topt, utf8_decode(strtoupper("RECIBIMOS DE: ")));
                    $pdf->Text(/* X */330, /* Y */ $topt, utf8_decode(strtoupper($rdata->PROVEEDOR)));
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'i', 10);
                    $pdf->Text(/* X */525, /* Y */ $topt, utf8_decode(strtoupper("*Los siguientes documentos a revisión para tramite de pago* ")));
                    $pdf->SetTextColor(0, 0, 0);
                    $ltop = 375;
                    $pdf->SetFont('Arial', '', 14);
                    $rTotal = 0;
                    $lvtop = 30;
                    $n = 0;
                    $altolinea = 0;
                    $alto = 30;
                    $ancho = 0;
                    $topt = $topt + 75;
                    for ($index = 0; $index < count($rows); $index++) {
                        $pdf->Cell(72);
                        $pdf->Text(/* X */150, /* Y */ $topt - 8, $rows[$index]->FOLIO);
                        $pdf->Text(/* X */300, /* Y */ $topt - 8, $rows[$index]->NF);
                        $pdf->Text(/* X */450, /* Y */ $topt - 8, $rows[$index]->FECHA);
                        $pdf->Text(/* X */600, /* Y */ $topt - 8, "$ " . number_format($rows[$index]->IMPORTE, 2, '.', ', '));
                        $pdf->SetXY(800, $topt - 25);
                        $pdf->SetDrawColor(236, 236, 251);
                        $pdf->MultiCell(/* X */300, 18, utf8_decode(strtoupper((($rows[$index]->OBSERVACION != "SIN OBSERVACIONES" && $rows[$index]->OBSERVACION != "SIN OBSERVACION" && $rows[$index]->OBSERVACION != "" && $rows[$index]->OBSERVACION != "NA") ? $rows[$index]->OBSERVACION : ''))));
                        $str = $rows[$index]->OBSERVACION;
                        if (strlen($str) > 30) {
                            $topt = $topt + 25;
                        }
                        if (strlen($str) > 60) {
                            $topt = $topt + 50;
                        }

                        $pdf->Line(/* Izq-X */125, /* Top-Y */ $topt, /* Largo */ 1100, $topt);
                        $rTotal = $rTotal + $rows[$index]->IMPORTE;
                        $topt = $topt + $lvtop;
                        $alto = $alto + 30;
                    }
                    $pdf->SetDrawColor(185, 185, 200);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */150, /* Y */ 330, utf8_decode("FOLIO"));
                    $pdf->Text(/* X */300, /* Y */ 330, utf8_decode("NÚMERO"));
                    $pdf->Text(/* X */450, /* Y */ 330, "FECHA");
                    $pdf->Text(/* X */600, /* Y */ 330, "IMPORTE");
                    $pdf->Text(/* X */860, /* Y */ 330, "OBSERVACIONES");
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ 335, /* Largo */ 1150, 335);
                    $pdf->SetDrawColor(219, 219, 234);
                    $pdf->Line(/* Izq-X */100, /* Top-Y */ $topt, /* Largo */ 1150, $topt);
                    $pdf->SetDrawColor(0, 0, 0);
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */390, /* Y */ $topt, "TOTAL");
                    $pdf->Text(/* X */590, /* Y */ $topt, "$ " . number_format($rTotal, 2, '.', ', '));

                    $topt = $topt + 75;
                    $pdf->SetFont('Arial', '', 14);
                    $pdf->Line(/* Izq-X */450, /* Top-Y */ $topt, /* Largo */ 850, $topt);
                    $topt = $topt + 25;
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Text(/* X */600, /* Y */ $topt, "RECIBE");


//                    if (!file_exists('uploads/ContraRecibosXProveedor')) {
//                        mkdir('uploads/ContraRecibosXProveedor', 0777, true);
//                    }
//                    if (!file_exists('uploads/ContraRecibosXProveedor/' . $rdata->EMPRESA . '/' . utf8_decode(strtoupper($rdata->PROVEEDOR)))) {
//                        mkdir('uploads/ContraRecibosXProveedor/' . $rdata->EMPRESA . '/' . utf8_decode(strtoupper($rdata->PROVEEDOR)), 0777, true);
//                    }
                    $fname = 'CRXP_' . $rdata->EMPRESA . '_' . utf8_decode(strtoupper($rdata->PROVEEDOR)) . "_" . $rdata->ID;
                    $url = 'uploads/ContraRecibosXProveedor/' . $fname . '.pdf';
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

    /*
     * END CR'S
     */

    public function onUploadImage($EMPRESA, $PROVEEDOR) {
        try {

            extract(filter_input_array(INPUT_POST));
            $img = $_FILES["rtImagen"]["tmp_name"];

            if (!file_exists('uploads/Facturas/Scan')) {
                mkdir('uploads/Facturas/Scan', 0777, true);
            }

            if (!file_exists('uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDOR[0]->Proveedor, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $NumeroFactura)) {
                mkdir('uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDOR[0]->Proveedor, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $NumeroFactura, 0777, true);
            }

            if (move_uploaded_file($_FILES["rtImagen"]["tmp_name"], 'uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDOR[0]->Proveedor, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $NumeroFactura . '/' . utf8_decode($_FILES["rtImagen"]["name"]))) {
                echo "El fichero es válido y se subió con éxito.\n";
            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSave($EMPRESA, $PROVEEDOR) {
        try {
            extract(filter_input_array(INPUT_POST));
            $EMPRESA = $this->tramitefactura_model->getEmpresasByID($Empresa);
            $PROVEEDOR = $this->tramitefactura_model->getProveedoresByID($Proveedor);
            $img = base_url() . 'uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura . '/' . $_FILES["rtImagen"]["name"];
            print "**********************************************";
            print $PAGADA;
            print "**********************************************";

            $ImporteCalculado = $Importe - $TOTALNOTASDECREDITO;
            if (isset($PAGADA) && ((int) $PAGADA) == 1) {
//                print 'PAGADA';
                $data = array(
                    'Folio' => strtoupper($Folio),
                    'Fecha' => strtoupper($Fecha),
                    'Hora' => $Hora,
                    'Empresa' => strtoupper($Empresa),
                    'ModeloNegocio' => strtoupper($ModeloNegocio),
                    'Actividad' => strtoupper($Actividad),
                    'NumeroDeContrato' => strtoupper($NumeroDeContrato),
                    'Proveedor' => $Proveedor,
                    'NumeroFactura' => strtoupper($NumeroFactura),
                    'Importe' => $ImporteCalculado,
                    'OrdenDeCompraRef' => strtoupper($OrdenDeCompraRef),
                    'Observacion' => strtoupper($Observacion),
                    'Receptor' => $Receptor,
                    'FechaFactura' => $FechaFactura,
                    'rtImagen' => $img,
                    'Estatus' => 'REGISTRADA Y PAGADA',
                    'ImportePagado' => $ImporteCalculado,
                    'Saldo' => 0
                );
            } else {
//                print 'NO PAGADA';
                $data = array(
                    'Folio' => strtoupper($Folio),
                    'Fecha' => strtoupper($Fecha),
                    'Hora' => $Hora,
                    'Empresa' => strtoupper($Empresa),
                    'ModeloNegocio' => strtoupper($ModeloNegocio),
                    'Actividad' => strtoupper($Actividad),
                    'NumeroDeContrato' => strtoupper($NumeroDeContrato),
                    'Proveedor' => $Proveedor,
                    'NumeroFactura' => strtoupper($NumeroFactura),
                    'Importe' => $ImporteCalculado,
                    'OrdenDeCompraRef' => strtoupper($OrdenDeCompraRef),
                    'Observacion' => strtoupper($Observacion),
                    'Receptor' => $Receptor,
                    'FechaFactura' => $FechaFactura,
                    'rtImagen' => $img,
                    'Estatus' => 'REGISTRADA',
                    'ImportePagado' => 0,
                    'Saldo' => $ImporteCalculado
                );
            }


            if (!file_exists('uploads/Facturas/Scan')) {
                mkdir('uploads/Facturas/Scan', 0777, true);
            }

            if (!file_exists('uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura)) {
                mkdir('uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura, 0777, true);
            }

            if (move_uploaded_file($_FILES["rtImagen"]["tmp_name"], 'uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura . '/' . utf8_decode($_FILES["rtImagen"]["name"]))) {
                echo "El fichero es válido y se subió con éxito.\n";
            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }
            $IDFACT = $this->tramitefactura_model->onAction('TramiteFactura', $data, "save", 0);
            $URL_FILE = 'uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura . '/' . utf8_decode($_FILES["rtImagen"]["name"]);
            $this->onEnviar($IDFACT, $data, $URL_FILE);

            $datafromfile = json_decode($NOTASDECREDITO);
            if (isset($_FILES["rNC"])) {
                for ($index = 0; $index < count($_FILES["rNC"]["name"]); $index++) {

                    $FOLIO = $datafromfile[$index]->FOLIO;
                    $CONCEPTO = $datafromfile[$index]->CONCEPTO;
                    $MONTO = $datafromfile[$index]->MONTO;
                    $EMPRESAX = strtoupper($EMPRESA[0]->NombreC);
                    $PROVEEDORX = strtoupper($PROVEEDOR[0]->Proveedor);
                    $DOCUMENTO = base_url() . 'uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . $PROVEEDORX . '/' . $FOLIO . '/' . $_FILES["rNC"]["name"][$index];

                    $data = array(
                        'Folio' => strtoupper($FOLIO),
                        'Concepto' => strtoupper($CONCEPTO),
                        'MontoNC' => strtoupper($MONTO),
                        'rDocumento' => $DOCUMENTO,
                        'Registro' => Date('d/m/Y h:i:s a')
                    );

                    $IDNC = $this->tramitefactura_model->onAction('NotasDeCredito', $data, "save", 0);

                    $data = array(
                        'IdNotaDeCredito' => strtoupper($IDNC),
                        'IdFactura' => strtoupper($IDFACT),
                        'MontoF' => strtoupper($MONTO)
                    );
                    $IDNCXF = $this->tramitefactura_model->onAction('NotasDeCreditoXFacturas', $data, "save", 0);

//                print $_FILES["rNC"]["name"][$index] . ', ' . $FOLIO . ', ' . $CONCEPTO . ', ' . $MONTO;

                    $img = $_FILES["rNC"]["tmp_name"][$index];
                    if (!file_exists('uploads/NotasDeCredito/Scan')) {
                        mkdir('uploads/NotasDeCredito/Scan', 0777, true);
                    }
                    if (!file_exists('uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . str_replace('¨', '', strtoupper($PROVEEDORX)) . '/' . $FOLIO)) {
                        mkdir('uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDORX, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $FOLIO, 0777, true);
                    }
                    if (move_uploaded_file($_FILES["rNC"]["tmp_name"][$index], 'uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDORX, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $FOLIO . '/' . utf8_decode($_FILES["rNC"]["name"][$index]))) {
                        echo "LA NOTA DE CREDITO SE SUBIO CON EXITO.\n";
                    } else {
                        echo "NO SE PUDO SUBIR LA NOTA DE CREDITO, VERIFIQUE EL TAMAÑO DEL ARCHIVO\n";
                    }

                    if (isset($TOTALNOTASDECREDITO) && $TOTALNOTASDECREDITO == $Importe) {
                        $data = array(
                            'Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
                        );
                        $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $IDFACT));
                    }

                    $data = array(
                        'Observacion' => "SI",
                        'TituloObservacion' => strtoupper("OBSERVACION DE LA NOTA DE CREDITO"),
                        'SeguimientoObservacion' => $CONCEPTO,
                        'Estatus' => ($TOTALNOTASDECREDITO == $Importe) ? 'EN ELABORACIÓN DE FORMA DE PAGO' : 'REGISTRADA'
                    );
                    $IDOTF = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

                    $data = array(
                        'IdTramiteFactura' => $IDFACT,
                        'IdObservacion' => $IDOTF
                    );
                    $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

                    $data = array(
                        'Importe' => $MONTO,
                        'MontoXPagar' => $MONTO,
                        'Fecha' => Date('d/m/Y h:i:s a'),
                        'FormaDePago' => $CONCEPTO,
                        'IdObservacionTF' => $IDOTF
                    );
                    $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate($EMPRESA, $PROVEEDOR) {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Folio' => strtoupper($Folio),
                'Fecha' => strtoupper($Fecha),
                'Hora' => $Hora,
                'Empresa' => strtoupper($Empresa),
                'ModeloNegocio' => strtoupper($ModeloNegocio),
                'Actividad' => strtoupper($Actividad),
                'NumeroDeContrato' => strtoupper($NumeroDeContrato),
                'Proveedor' => $Proveedor,
                'NumeroFactura' => strtoupper($NumeroFactura),
                'OrdenDeCompraRef' => strtoupper($OrdenDeCompraRef),
                'Observacion' => strtoupper($Observacion),
                'FechaFactura' => $FechaFactura,
                'Receptor' => $Receptor
            );
            if ($Estatus === 'REGISTRADA') {
                $data['Importe'] = $Importe;
                $data['Saldo'] = $Importe;
            }

            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $IdTramiteFactura));
            if ($_FILES["rtImagen"]["tmp_name"] !== "") {
                $img = base_url() . 'uploads/Facturas/Scan/' . strtoupper($EMPRESA[0]->NombreC) . '/' . strtoupper($PROVEEDOR[0]->Proveedor) . '/' . $NumeroFactura . '/' . $_FILES["rtImagen"]["name"];
                $data = array('rtImagen' => $img);
                $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $IdTramiteFactura));
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getActividades() {
        try {
            $data = $this->tramitefactura_model->getActividades();
            print json_encode($data);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    public function onApplyNotaDeCredito() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Folio' => strtoupper($Folio),
                'Concepto' => strtoupper($Concepto),
                'MontoNC' => strtoupper($MontoNC)
            );
            $IDNC = $this->tramitefactura_model->onAction('NotasDeCredito', $data, "save", 0);
//                    print $IDNC;
            $data = array(
                'IdNotaDeCredito' => strtoupper($IDNC),
                'IdFactura' => strtoupper($IdFactura),
                'MontoF' => strtoupper($MontoF)
            );
            $IDNCXF = $this->tramitefactura_model->onAction('NotasDeCreditoXFacturas', $data, "save", 0);
//                    print $IDNCXF;

            $data = array(
                'Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
            );
            $this->tramitefactura_model->onAction(
                    'TramiteFactura', $data, "update", array('IdTramiteFactura', $IdFactura));


            $data = array(
                'Observacion' => "SI",
                'TituloObservacion' => strtoupper("OBSERVACION DE LA NOTA DE CREDITO"),
                'SeguimientoObservacion' => strtoupper($ObservacionesNC),
                'Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

            $data = array(
                'IdTramiteFactura' => $IdFactura,
                'IdObservacion' => $ID
            );
            $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

            $data = array(
                'Importe' => $MontoF,
                'MontoXPagar' => $MontoF,
                'Fecha' => Date('d') . '-' . Date('m') . '-' . Date('Y'),
                'FormaDePago' => 'NOTA DE CRÉDITO',
                'IdObservacionTF' => $ID
            );
            $ID = $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSaldosGenerales() {
        try {
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 10, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 460; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total = 0.0;
            $total_monto_pagado = 0.0;
            $total_saldo_a_pagar = 0.0;

            $top = 0;
            $rows = $this->tramitefactura_model->getSaldosGenerales();
            $pdf->SetY(15);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'SALDOS GENERALES', 0, 5);
            $pdf->SetY(25);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetTextColor(4, 71, 136);
            $pdf->SetFont('Arial', '', 16);
            $pdf->SetX(120);
            $pdf->Cell(100, 10, "ACUMULADO DE FACTURAS", 0, 2);
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(40);
            $pdf->SetX(15);
            $pdf->Cell(/* X */200, 0, "EMPRESA", 0, 1, 'L');
            $pdf->Line(/* Izq-X */$pdf->GetX() + 50, /* Top-Y */ $pdf->GetY() - 2, /* Largo */ $pdf->GetY() + 20, $pdf->GetY() + 2);
            $pdf->SetX(60);
            $pdf->Cell(/* X */300, 0, "CONTRATO", 0, 1, 'L');
//            $pdf->SetX(85);
//            $pdf->Cell(/* X */400, 0, "ORDEN DE COMPRA", 0, 1, 'L');
            $pdf->SetX(85);
            $pdf->Cell(/* X */400, 0, "PROVEEDOR", 0, 1, 'L');
            $pdf->SetX(140);
            $pdf->Cell(/* X */500, 0, "FACTURA", 0, 1, 'L');
            $pdf->SetX(165);
            $pdf->Cell(/* X */500, 0, "IMPORTE", 0, 1, 'L');
            $pdf->SetX(200);
            $pdf->Cell(/* X */500, 0, "MONTO PAGADO", 0, 1, 'L');
            $pdf->SetX(240);
            $pdf->Cell(/* X */500, 0, "SALDO A PAGAR", 0, 1, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->SetY(43);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetY(45);
            if ($top > $page_height) {
                $pdf->AddPage();
                $top = 0;
            }
            foreach ($rows as $row) {
                if ($top > $page_height) {
                    $page_height = 580;
                    $pdf->AddPage();
                    $top = 0;
                }
                $pdf->SetX(10);
                if (strlen($row->EMPRESA) > 30) {
                    $pdf->SetFont('Arial', 'B', 5);
                    $pdf->Cell(10, 8, $row->EMPRESA, 0, 0, 'L');
//                    $pdf->Cell(10, 8, $row->EMPRESA, 0, 0, 'L');
                } else {
                    $pdf->SetFont('Arial', 'B', 7);
                    $pdf->Cell(10, 8, $row->EMPRESA, 0, 0, 'L');
                }
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->SetX(60);
                $pdf->Cell(10, 8, utf8_decode($row->CONTRATO), 0, 0, 'L');
                $pdf->SetX(85);
                if (strlen($row->PROVEEDOR) > 30) {
                    $pdf->SetFont('Arial', 'B', 6);
                    $temp = substr($row->PROVEEDOR, 0, 37);
                    $pdf->Cell(10, 8, strtoupper(utf8_decode($temp)), 0, 0, 'L');
                    $temp = substr($row->PROVEEDOR, 37, strlen($row->PROVEEDOR));
                    $pdf->SetY($pdf->GetY() + 2);
                    $pdf->SetX($pdf->GetX() + 75);
                    $pdf->Cell(10, 8, strtoupper(utf8_decode($temp)), 0, 0, 'L');
                    $top += 25;
                } else {
                    $pdf->SetFont('Arial', 'B', 8);
                    $pdf->Cell(10, 8, strtoupper(utf8_decode($row->PROVEEDOR)), 0, 0, 'L');
                    $top += 20;
                }
                $pdf->SetY($pdf->GetY() - 2);
                $pdf->SetDrawColor(96, 96, 96);
                $pdf->SetX(140);
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->Cell(10, 8, $row->FACTURA, 0, 0, 'L');
                $pdf->SetX(165);
                $pdf->Cell(10, 8, "$ " . number_format($row->IMPORTE, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(200);
                $pdf->Cell(10, 8, "$ " . number_format($row->{"MONTO PAGADO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(240);
                $pdf->Cell(10, 8, "$ " . number_format($row->{"SALDO A PAGAR"}, 2, '.', ', '), 0, 1, 'L');
                $total += $row->IMPORTE;
                $total_monto_pagado += $row->{"MONTO PAGADO"};
                $total_saldo_a_pagar += $row->{"SALDO A PAGAR"};
                $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());
            }
            $pdf->SetDrawColor(0, 0, 0);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetX(120);
            $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
            $pdf->SetX(165);
            $pdf->SetTextColor(0, 102, 0);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(200);
            $pdf->SetTextColor(204, 0, 0);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_monto_pagado, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(240);
            $pdf->SetTextColor(16, 139, 156);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_saldo_a_pagar, 2, '.', ', '), 0, 1, 'L');

            $top += 20;
            $pdf->SetFont('Arial', '', 10);
            if (!file_exists('uploads/Facturas/AcumuladosGenerales')) {
                mkdir('uploads/Facturas/AcumuladosGenerales', 0777, true);
            }
            if (!file_exists('uploads/Facturas/AcumuladosGenerales/')) {
                mkdir('uploads/Facturas/AcumuladosGenerales/', 0777, true);
            }
            $url = 'uploads/Facturas/AcumuladosGenerales/ACUMULADO_GENERAL_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSaldosGeneralesByEmpresaAndProveedor() {
        try {

            extract(filter_input_array(INPUT_POST));

            $rows = $this->tramitefactura_model->getSaldosGeneralesByEmpresaAndProveedor($IDPRO, $IDEMPRESA, $INICIO, $TERMINO);

            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 10, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 460; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mmonAdd

            $total = 0.0;
            $total_monto_pagado = 0.0;
            $total_saldo_a_pagar = 0.0;

            $top = 0;
            $pdf->SetY(15);
            $pdf->SetX(100);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(90, 15, 'REPORTE DE SALDOS', 0, 0, 'L');
            $pdf->SetFont('Arial', '', 6);
            $pdf->SetX(245);
            $pdf->Cell(100, 5, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetX(245);
            $pdf->Cell(100, 5, Date('d/m/Y h:i:s a'), 0, 0, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetTextColor(4, 71, 136);
            $pdf->SetFont('Arial', '', 16);
            $pdf->SetX(90);
            $pdf->Cell(100, 10, "REPORTE DE FACTURAS ACUMULADO", 0, 2);
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(40);
            $pdf->SetX(15);
            $pdf->Cell(/* X */200, 0, "EMPRESA", 0, 1, 'L');
            $pdf->SetX(60);
            $pdf->Cell(/* X */300, 0, "FECHA", 0, 1, 'L');
//            $pdf->SetX(85);
//            $pdf->Cell(/* X */400, 0, "ORDEN DE COMPRA", 0, 1, 'L');
            $pdf->SetX(85);
            $pdf->Cell(/* X */400, 0, "PROVEEDOR", 0, 1, 'L');
            $pdf->SetX(140);
            $pdf->Cell(/* X */500, 0, "FACTURA", 0, 1, 'L');
            $pdf->SetX(165);
            $pdf->Cell(/* X */500, 0, "IMPORTE", 0, 1, 'L');
            $pdf->SetX(188);
            $pdf->Cell(/* X */500, 0, "N.C", 0, 1, 'L');
            $pdf->SetX(205);
            $pdf->Cell(/* X */500, 0, "MONTO PAGADO", 0, 1, 'L');
            $pdf->SetX(240);
            $pdf->Cell(/* X */500, 0, "SALDO A PAGAR", 0, 1, 'L');
            $pdf->SetFont('Arial', '', 9);
            $pdf->SetY(43);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetY(45);
            if ($top > $page_height) {
                $pdf->AddPage();
                $top = 0;
            }
            $n = 1;
            foreach ($rows as $row) {
                if ($top > $page_height) {
                    $page_height = 580;
                    $pdf->AddPage();
                    $top = 0;
                }

                $pdf->SetX(15);
                $Y = $pdf->GetY();
                $pdf->SetFont('Arial', 'B', 7);
                if (strlen($row->EMPRESA) > 15) {
                    $pdf->SetFont('Arial', 'B', 5);
                    $pdf->MultiCell(40, 8, $row->EMPRESA);
                } else {
                    $pdf->MultiCell(40, 8, $row->EMPRESA);
                }
                $n += 1;
                $pdf->SetY($Y);

                $pdf->SetFont('Arial', 'B', 7);
                $pdf->SetX(60);
                $pdf->Cell(10, 8, utf8_decode($row->{"FECHA FACTURA"}), 0, 0, 'L');

                $Y = $pdf->GetY();
                $pdf->SetX(82.5);
                $pdf->SetFont('Arial', 'B', 6);

                if (strlen($row->PROVEEDOR) > 15) {
                    $pdf->SetFont('Arial', 'B', 5);
                    $pdf->MultiCell(50, 2.5, utf8_decode($row->PROVEEDOR));
                } else {
                    $pdf->MultiCell(50, 5, utf8_decode($row->PROVEEDOR));
                }
//                $pdf->MultiCell(50, 8, utf8_decode($row->PROVEEDOR));
                $pdf->SetY($Y);
                $top += 25;
                $pdf->SetDrawColor(96, 96, 96);
                $pdf->SetX(140);
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->Cell(10, 8, $row->FACTURA, 0, 0, 'L');


                $pdf->SetX(165);
                $pdf->Cell(10, 8, "$ " . number_format(($row->IMPORTE + (($row->{"NOTA DE CREDITO"} > 0) ? $row->{"NOTA DE CREDITO"} : 0)), 2, '.', ', '), 0, 0, 'L');

                if ($row->{"NOTA DE CREDITO"} > 0) {
                    $pdf->SetX($pdf->GetX() + 9.5);
                    $pdf->SetTextColor(217, 0, 0);
                    $pdf->Cell(10, 8, "- $ " . number_format($row->{"NOTA DE CREDITO"}, 2, '.', ', '), 0, 0, 'L');
                }
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetX(205);
                $pdf->Cell(10, 8, "$ " . number_format($row->{"MONTO PAGADO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(240);
                $pdf->Cell(10, 8, "$ " . number_format($row->{"SALDO A PAGAR"}, 2, '.', ', '), 0, 1, 'L');
//                $total += $row->IMPORTE;
                $total += ($row->IMPORTE + (($row->{"NOTA DE CREDITO"} > 0) ? $row->{"NOTA DE CREDITO"} : 0));
                $total_monto_pagado += $row->{"MONTO PAGADO"};
                $total_saldo_a_pagar += $row->{"SALDO A PAGAR"};
                $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());
                if ($top > $page_height) {
                    $page_height = 580;
                    $pdf->AddPage();
                    $top = 0;
                }
            }
            $pdf->SetDrawColor(0, 0, 0);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetX(120);
            $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
            $pdf->SetX(165);
            $pdf->SetTextColor(0, 102, 0);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(200);
            $pdf->SetTextColor(204, 0, 0);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_monto_pagado, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(240);
            $pdf->SetTextColor(16, 139, 156);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_saldo_a_pagar, 2, '.', ', '), 0, 1, 'L');

            $top += 20;
            $pdf->SetFont('Arial', '', 10);
            if (!file_exists('uploads/Facturas/AcumuladosPorEmpresaOProveedor')) {
                mkdir('uploads/Facturas/AcumuladosPorEmpresaOProveedor', 0777, true);
            }
            if (!file_exists('uploads/Facturas/AcumuladosPorEmpresaOProveedor/')) {
                mkdir('uploads/Facturas/AcumuladosPorEmpresaOProveedor/', 0777, true);
            }
            $url = 'uploads/Facturas/AcumuladosPorEmpresaOProveedor/ACUMULADO_EXP_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsHistoryByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getRecordsHistoryByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onBeforeRegisterCheckFactura() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->onBeforeRegisterCheckFactura($ID, $PROVEEDOR);
            $dtm = json_decode(json_encode($data), FALSE);
//            var_dump($data["NFACTURA"]);
            if ($dtm[0]->NFACTURA == 1) {
//                $msg = "ERROR: DUPLICIDAD<<br>MODULO: TRAMITE DE FACTURAS<br>USUARIO: ADMIN";
//                $msg = wordwrap($msg, 70);
//                mail("ing.giovanniflores93@gmail.com", "INTENTO DE DUPLICIDAD", $msg);
            }
            print $dtm[0]->NFACTURA;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /*     * METODOS NUEVOS* */

    public function onRevision() {
        try {

            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));

            $data = $this->tramitefactura_model->getRecordsByID($OXTIdTramiteFactura);
            $dtm = json_decode(json_encode($data), FALSE);

            $EMPRESA = $this->tramitefactura_model->getEmpresasByID($dtm[0]->EMPRESA);
            $PROVEEDOR = $this->tramitefactura_model->getProveedoresByID($dtm[0]->PROVEEDOR);

            $ImporteCalculado = $ImporteF - $TOTALNOTASDECREDITO;

            if ($ImporteF == $TOTALNOTASDECREDITO) {
                $data = array(
                    'ImportePagado' => $ImporteF,
                    'Saldo' => 0,
                    'Estatus' => 'EN ELABORACION DE FORMA DE PAGO'
                );
                $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $OXTIdTramiteFactura));
            } else {
                $data = array(
                    'Importe' => $ImporteCalculado,
                    'Saldo' => $ImporteCalculado,
                    'Estatus' => 'REVISION'
                );
                $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $OXTIdTramiteFactura));
            }

            $data = array(
                'Observacion' => ($ObservacionesYN == 1 ? "SI" : "NO"),
                'TituloObservacion' => strtoupper($TituloObservacion),
                'SeguimientoObservacion' => strtoupper($ContenidoObservacion),
                'Estatus' => ($ImporteF == $TOTALNOTASDECREDITO) ? 'EN ELABORACION DE FORMA DE PAGO' : 'REVISION'
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

            $data = array(
                'IdTramiteFactura' => $OXTIdTramiteFactura,
                'IdObservacion' => $ID
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

            $datafromfile = json_decode($NOTASDECREDITO);
            if (isset($_FILES["rNC"])) {
                for ($index = 0; $index < count($_FILES["rNC"]["name"]); $index++) {

                    $FOLIO = $datafromfile[$index]->FOLIO;
                    $CONCEPTO = $datafromfile[$index]->CONCEPTO;
                    $MONTO = $datafromfile[$index]->MONTO;
                    $EMPRESAX = strtoupper($EMPRESA[0]->NombreC);
                    $PROVEEDORX = strtoupper($PROVEEDOR[0]->Proveedor);
                    $DOCUMENTO = base_url() . 'uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . $PROVEEDORX . '/' . $FOLIO . '/' . $_FILES["rNC"]["name"][$index];

                    $data = array(
                        'Folio' => strtoupper($FOLIO),
                        'Concepto' => strtoupper($CONCEPTO),
                        'MontoNC' => strtoupper($MONTO),
                        'rDocumento' => $DOCUMENTO,
                        'Registro' => Date('d/m/Y h:i:s a')
                    );

                    $IDNC = $this->tramitefactura_model->onAction('NotasDeCredito', $data, "save", 0);

                    $data = array(
                        'IdNotaDeCredito' => strtoupper($IDNC),
                        'IdFactura' => strtoupper($OXTIdTramiteFactura),
                        'MontoF' => strtoupper($MONTO)
                    );
                    $IDNCXF = $this->tramitefactura_model->onAction('NotasDeCreditoXFacturas', $data, "save", 0);

//                print $_FILES["rNC"]["name"][$index] . ', ' . $FOLIO . ', ' . $CONCEPTO . ', ' . $MONTO;

                    $img = $_FILES["rNC"]["tmp_name"][$index];
                    if (!file_exists('uploads/NotasDeCredito/Scan')) {
                        mkdir('uploads/NotasDeCredito/Scan', 0777, true);
                    }
                    if (!file_exists('uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDORX, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $FOLIO)) {
                        mkdir('uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDORX, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $FOLIO, 0777, true);
                    }
                    if (move_uploaded_file($_FILES["rNC"]["tmp_name"][$index], 'uploads/NotasDeCredito/Scan/' . $EMPRESAX . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDORX, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $FOLIO . '/' . utf8_decode($_FILES["rNC"]["name"][$index]))) {
                        echo "LA NOTA DE CREDITO SE SUBIO CON EXITO.\n";
                    } else {
                        echo "NO SE PUDO SUBIR LA NOTA DE CREDITO, VERIFIQUE EL TAMAÑO DEL ARCHIVO\n";
                    }

                    if (isset($TOTALNOTASDECREDITO) && $TOTALNOTASDECREDITO == $ImporteF) {
                        $data = array(
                            'Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
                        );
                        $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $OXTIdTramiteFactura));
                    }

                    $data = array(
                        'Observacion' => "SI",
                        'TituloObservacion' => strtoupper("OBSERVACION DE LA NOTA DE CREDITO"),
                        'SeguimientoObservacion' => $CONCEPTO,
                        'Estatus' => ($TOTALNOTASDECREDITO == $ImporteF) ? 'EN ELABORACIÓN DE FORMA DE PAGO' : 'REGISTRADA'
                    );
                    $IDOTF = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

                    $data = array(
                        'IdTramiteFactura' => $OXTIdTramiteFactura,
                        'IdObservacion' => $IDOTF
                    );
                    $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

                    $data = array(
                        'Importe' => $MONTO,
                        'MontoXPagar' => $MONTO,
                        'Fecha' => Date('d/m/Y h:i:s a'),
                        'FormaDePago' => $CONCEPTO,
                        'IdObservacionTF' => $IDOTF
                    );
                    $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);
                }
            }
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAutorizacion() {
        try {
            extract(filter_input_array(INPUT_POST));
            /*
             * REVISION => AUTORIZACIÓN
             */
//                    var_dump($_POST);
            if (isset($chkNoAutorizar) && $chkNoAutorizar !== '') {
                $data = array(
                    'Estatus' => 'NO AUTORIZADA'
                );
            } else {

                $data = array(
                    'Estatus' => 'AUTORIZADA'
                );
            }
            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $OXTIdTramiteFacturaAutorizacion));

            $data = array(
                'Observacion' => ($ObservacionesYNAU == 1 ? "SI" : "NO"),
                'TituloObservacion' => strtoupper($TituloObservacionADFPEDFDP),
                'SeguimientoObservacion' => strtoupper($ContenidoObservacionADFPEDFDP),
                'Estatus' => (isset($chkNoAutorizar) && $chkNoAutorizar !== '') ? 'NO AUTORIZADA' : 'AUTORIZADA'
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);
            $data = array(
                'IdTramiteFactura' => $OXTIdTramiteFacturaAutorizacion,
                'IdObservacion' => $ID
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onNotaDeCredito() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Folio' => strtoupper($Folio),
                'Concepto' => strtoupper($Concepto),
                'MontoNC' => strtoupper($MontoNC)
            );

            $IDNC = $this->tramitefactura_model->onAction('NotasDeCredito', $data, "save", 0);
            $data = array(
                'IdNotaDeCredito' => strtoupper($IDNC),
                'IdFactura' => strtoupper($IdFactura),
                'MontoF' => strtoupper($MontoF)
            );

            $IDNCXF = $this->tramitefactura_model->onAction('NotasDeCreditoXFacturas', $data, "save", 0);
            $STS = 'EN ELABORACIÓN DE FORMA DE PAGO';

            if ($MontoRF === 0 || $MontoRF === "0") {
                $data = array(
                    'Saldo' => 0,
                    'Estatus' => $STS
                );
            } else {
                $STS = 'PARCIALMENTE PAGADA';
                $data = array(
                    'Saldo' => $MontoRF,
                    'Estatus' => $STS
                );
            }

            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $IdFactura));
            $data = array(
                'Observacion' => "SI",
                'TituloObservacion' => strtoupper("OBSERVACION DE LA NOTA DE CREDITO"),
                'SeguimientoObservacion' => strtoupper($ObservacionesNC),
                'Estatus' => $STS
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

            $data = array(
                'IdTramiteFactura' => $IdFactura,
                'IdObservacion' => $ID
            );
            $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

            $data = array(
                'Importe' => $MontoF,
                'MontoXPagar' => $MontoF,
                'Fecha' => Date('d') . '-' . Date('m') . '-' . Date('Y'),
                'FormaDePago' => 'NOTA DE CRÉDITO',
                'IdObservacionTF' => $ID
            );
            $ID = $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getRecordsByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFacturaByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getFacturaByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAvanceRapidoXFacturaID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getAvanceRapidoXFacturaID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNotasDeCreditoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getNotasDeCreditoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onNotaDeCreditoX() {
        try {
            extract(filter_input_array(INPUT_POST));
            //var_dump(filter_input_array(INPUT_POST));
            $DOCUMENTO = base_url() . 'uploads/NotasDeCredito/Scan/' . $EMPRESA_ID . '/' . $PROVEEDOR_ID . '/' . $IdNotaDeCredito . '/' . $_FILES["RDocumentoFileD"]["name"];

            $data = array(
                'Folio' => strtoupper($IdNotaDeCredito),
                'Concepto' => strtoupper($ConceptoNC),
                'MontoNC' => strtoupper($MontoAplicado),
                'Observaciones' => strtoupper($ObservacionesNC),
                'rDocumento' => $DOCUMENTO,
                'Registro' => Date('d/m/Y h:i:s a')
            );

            $IDNC = $this->tramitefactura_model->onAction('NotasDeCredito', $data, "save", 0);

            $data = array();
            if ($MontoFactura == $MontoAplicado) {
                print 'EN ELABORACION DE FORMA DE PAGO';
                $data['Estatus'] = 'EN ELABORACION DE FORMA DE PAGO';
                $data['Importe'] = $MontoFacturaRestante;
                $data['Saldo'] = $MontoFacturaRestante;
            }
            if ($MontoFactura > $MontoAplicado) {
                print 'EL MONTO DE LA FACTURA SIGUE SIENDO MAYOR AL MONTO DE LA NC, POR TANTO SE HARA UNA DISMINUCION EN EL SALDO Y NO EN EL ESTATUS';
                $data['Importe'] = $MontoFacturaRestante;
                $data['Saldo'] = $MontoFacturaRestante;
            }
            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $ID));

            $data = array(
                'IdNotaDeCredito' => strtoupper($IDNC),
                'IdFactura' => strtoupper($ID),
                'MontoF' => strtoupper($MontoAplicado)
            );

            $IDNCXF = $this->tramitefactura_model->onAction('NotasDeCreditoXFacturas', $data, "save", 0);

            $img = $_FILES["RDocumentoFileD"]["tmp_name"];
            if (!file_exists('uploads/NotasDeCredito/Scan')) {
                mkdir('uploads/NotasDeCredito/Scan', 0777, true);
            }
            if (!file_exists('uploads/NotasDeCredito/Scan/' . strtoupper($EMPRESA_ID) . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDOR_ID, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $IdNotaDeCredito)) {
                mkdir('uploads/NotasDeCredito/Scan/' . strtoupper($EMPRESA_ID) . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDOR_ID, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $IdNotaDeCredito, 0777, true);
            }
            if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], 'uploads/NotasDeCredito/Scan/' . strtoupper($EMPRESA_ID) . '/' . str_replace('¨', '', strtoupper(filter_var($PROVEEDOR_ID, FILTER_SANITIZE_SPECIAL_CHARS))) . '/' . $IdNotaDeCredito . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]))) {
                echo "LA NOTA DE CREDITO SE SUBIO CON EXITO.\n";
            } else {
                echo "NO SE PUDO SUBIR LA NOTA DE CREDITO, VERIFIQUE EL TAMAÑO DEL ARCHIVO\n";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNotasDeCreditoXFacturas() {
        try {
            $data = $this->tramitefactura_model->getNotasDeCreditoXFacturas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onPagar() {
        try {
            extract(filter_input_array(INPUT_POST));
            /*
             * AUTORIZACIÓN  => PAGADA
             */
            $estatus = 'PARCIAL';
//                    $json_data = $this->tramitefactura_model->getRecordsByIDReport($IdTramiteFacturaADMPPDF);

            if ($MontoXPagarADMPPDF == $ImporteADMPPDF) {
                $data = array(
                    'Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
                );
                $estatus = 'EN ELABORACIÓN DE FORMA DE PAGO';
            } else {
                if ($ImporteADMPPDF > 0 && $ImporteADMPPDF > $MontoXPagarADMPPDF) {
                    $ImporteADMPPDF = $ImporteADMPPDF - $MontoXPagarADMPPDF;
                    $data = array(
                        'Estatus' => 'PARCIALMENTE PAGADA'
                    );
                    $estatus = 'PARCIALMENTE PAGADA';
                } else {
                    $ImporteADMPPDF = $ImporteADMPPDF - $MontoXPagarADMPPDF;
                    $data = array(
                        'Estatus' => 'SOBREPAGADA'
                    );
                    $estatus = 'SOBREPAGADA';
                }
            }

            $data['ImportePagado'] = $ImportePagado + $MontoXPagarADMPPDF;
            $data['Saldo'] = ($MontoXPagarADMPPDF == $ImporteADMPPDF) ? 0 : $ImporteADMPPDF - ($ImportePagado + $MontoXPagarADMPPDF);
            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $IdTramiteFacturaADMPPDF));

            $data = array(
                'Observacion' => "SI",
                'TituloObservacion' => strtoupper($TituloObservacion),
                'SeguimientoObservacion' => strtoupper($ContenidoObservacion),
                'Estatus' => $estatus
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);

            if ($estatus == "EN ELABORACIÓN DE FORMA DE PAGO") {
                $data = array(
                    'otf.Estatus' => 'EN ELABORACIÓN DE FORMA DE PAGO'
                );
                $this->tramitefactura_model->onAction('TramiteFactura tf INNER JOIN ObservacionesXTramiteFactura oxt ON tf.IdTramiteFactura = oxt.IdTramiteFactura INNER JOIN ObservacionesTF otf ON otf.IdObservaciontf = oxt.IdObservacion', $data, "update", array('tf.IdTramiteFactura', $IdTramiteFacturaADMPPDF));
            }

            $data = array(
                'IdTramiteFactura' => $IdTramiteFacturaADMPPDF,
                'IdObservacion' => $ID
            );
            $this->tramitefactura_model->onAction('ObservacionesXTramiteFactura', $data, "save", 0);

            $data = array(
                'Importe' => $ImporteADMPPDF,
                'MontoXPagar' => $MontoXPagarADMPPDF,
                'Fecha' => Date('d') . '-' . Date('m') . '-' . Date('Y'),
                'FormaDePago' => $FormaDePago,
                'IdObservacionTF' => $ID
            );
            $ID = $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInformacionAdicional() {
        try {
            $dtm = $this->tramitefactura_model->getInformacionAdicional();
            print json_encode($dtm);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSendEmail($Subject, $bodyContent) {
        try {
            require_once APPPATH . "/third_party/PHPMailer/class.smtp.php";
            require_once APPPATH . "/third_party/PHPMailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sistemarabina@gmail.com';
            $mail->Password = '1q3E5t7U9o';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('sistemas@rabina.com.mx', 'MENSAJE DEL SISTEMA RABINA');
            $mail->addReplyTo('sistemas@rabina.com.mx', 'NO RESPONDER');
            $mail->addAddress('sistemas@rabina.com.mx');   // Add a recipient
            $mail->addBCC('orico09@me.com');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('sistemarabina@gmail.com');
            $mail->addBCC('sistemas@rabina.com.mx');
//            $mail->addAttachment('media/log_1o.png', 'new.png');

            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = $Subject;
            $mail->AddEmbeddedImage('media/LogoRabina2017.png', 'RabinaLogo');

            $mail->Body = $bodyContent;
            if (!$mail->send()) {
                echo 'EL MENSAJE NO PUDO SER ENVIADO';
                echo 'ERROR EN EL CORREO: ' . $mail->ErrorInfo;
            } else {
//                    var_dump($dtm);
                echo 'MENSAJE ENVIADO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onPagoRapido() {
        try {
            extract(filter_input_array(INPUT_POST));
            print " * * * * * * * * * * * * * * * * * * * *  * * * * * * * * * * PAGO EXPRESS * * * * * * * * * *  * * * * * * * * * *  * * * * * * * * * * ";

            $data = array(
                'Unidad' => "FACTURA $Factura",
                'Factura' => (isset($IdFactura) && $IdFactura !== null && $IdFactura !== '') ? $IdFactura : NULL,
                'Concepto' => (isset($Factura) && $Factura !== null && $Factura !== '') ? $Factura : NULL,
                'Monto' => (isset($ImporteXPagar) && $ImporteXPagar !== null && $ImporteXPagar !== '') ? $ImporteXPagar : NULL,
                'Proveedor' => (isset($PROVEEDORID) && $PROVEEDORID !== null && $PROVEEDORID !== '') ? $PROVEEDORID : NULL,
                'Forma' => (isset($Forma) && $Forma !== null && $Forma !== '') ? $Forma : NULL,
                'Caja' => 'No',
                'IDCuentaFuente' => (isset($IDCuentaFuente) && $IDCuentaFuente !== null && $IDCuentaFuente !== '') ? $IDCuentaFuente : NULL,
                'FechaPago' => (isset($FechaPago) && $FechaPago !== null && $FechaPago !== '') ? $FechaPago : NULL,
                'FechaRPago' => (isset($FechaRPago) && $FechaRPago !== null && $FechaRPago !== '') ? $FechaRPago : NULL,
                'Comprobante' => (isset($Comprobante) && $Comprobante !== null && $Comprobante !== '') ? $Comprobante : NULL,
                'Emisor' => (isset($Emisor) && $Emisor !== null && $Emisor !== '') ? $Emisor : NULL,
                'ReferenciaDePago' => (isset($ReferenciaDePago) && $ReferenciaDePago !== null && $ReferenciaDePago !== '') ? $ReferenciaDePago : NULL,
                'Estatus' => 'ACTIVO'
            );
            $this->tramitefactura_model->onAction('pagoterceros', $data, "save", 0);
            var_dump($data);
            $data = array(
                'Estatus' => 'PAGADA',
                'ImportePagado' => $ImporteXPagar,
                'Saldo' => 0
            );
            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $IdFactura));

            $data = array(
                'Observacion' => "SI",
                'TituloObservacion' => strtoupper("PAGO POR MEDIO DE PAGO EXPRESS"),
                'SeguimientoObservacion' => strtoupper("EL SALDO DE LA FACTURA QUEDO CUBIERTO AL UTILIZAR ESTA FUNCIÓN: FACTURA $Factura, IMPORTE $ $ImporteXPagar"),
                'Estatus' => "EN ELABORACIÓN DE FORMA DE PAGO"
            );
            $ID = $this->tramitefactura_model->onAction('ObservacionesTF', $data, "save", 0);
            $data = array(
                'Importe' => $ImporteXPagar,
                'MontoXPagar' => $ImporteXPagar,
                'Fecha' => Date('d/m/Y h:i:s a'),
                'FormaDePago' => $Forma,
                'IdObservacionTF' => $ID
            );
            $this->tramitefactura_model->onAction('HistorialDeMontosXObservacion', $data, "save", 0);
            print " * * * * * * * * * * * * * * * * * * * *  * * * * * * * * * *  * * * * * * * * * *  * * * * * * * * * *  * * * * * * * * * * ";
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarPagada() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'CANCELADA',
                'ImportePagado' => 0,
                'Saldo' => 0
            );
            $this->tramitefactura_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onFacturaAGasto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getRecordsByID($ID);
            $dtm = json_decode(json_encode($data), FALSE);
            $data = array(
                'Estatus' => 'REGISTRADA Y PAGADA',
                'ImportePagado' => $dtm[0]->IMPORTE,
                'Saldo' => 0
            );
            $this->tramitefactura_model->onAction('TramiteFactura', $data, "save", 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviar($ID, $data, $URL) {
        try {
            extract(filter_input_array(INPUT_POST));
            $Subject = utf8_decode("SE HA REGISTRADO UNA NUEVA FACTURA: $NumeroFactura, $" . number_format($Importe, 2, '.', ', '));
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DE LA FACTURA</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FOLIO</B></th>'
                    . '<th><B>FECHA</B></th>'
                    . '<th><B>HORA</B></th>'
                    . '<th><B>EMPRESA</B></th>'
                    . '<th><B>ACTIVIDAD</B></th>'
                    . '<th><B>PROYECTO</B></th>'
                    . '<th><B>NÚMERO DE CONTRATO</B></th>'
                    . '<th><B>PROVEEDOR</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $Folio . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Fecha . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Hora . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $EmpresaT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ModeloNegocioT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ActividadT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroDeContrato . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ProveedorT . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FECHA DE LA FACTURA</B></th>'
                    . '<th><B>NÚMERO DE FACTURA</B></th>'
                    . '<th><B>IMPORTE</B></th>'
                    . '<th><B>FACTURA PAGADA</B></th>'
                    . '<th><B>ORDEN DE COMPRA DE REFERENCIA</B></th>'
                    . '<th><B>OBSERVACIÓN</B></th>'
                    . '<th><B>RECEPTOR EN RABINA</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . "$ " . number_format($Importe, 2, '.', ', ') . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . ((((int) $PAGADA) == 1) ? "SI" : "NO") . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $OrdenDeCompraRef . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Observacion . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ReceptorT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . utf8_decode($URL) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onEnviarEmail($ID, $Subject, $bodyContent, $data, $URL);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviarEmail($IDX, $Subject, $bodyContent, $data, $URL) {
        try {
            $URL_DOC = 'uploads/IncrementosXTerrenos';
            $master_url = base_url() . $URL_DOC . '/';
            require_once APPPATH . "/third_party/PHPMailer/class.smtp.php";
            require_once APPPATH . "/third_party/PHPMailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sistemarabina@gmail.com';
            $mail->Password = '1q3E5t7U9o';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('sistemas@rabina.com.mx', 'MENSAJE DEL SISTEMA');
            $mail->addReplyTo('sistemas@rabina.com.mx', 'NO RESPONDER');
            $mail->addAddress('sistemas@rabina.com.mx');   // Add a recipient
            $mail->addBCC('orico09@me.com');
//            $mail->addBCC('administrativo@rabina.com.mx');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('sistemarabina@gmail.com');
            $mail->addBCC('sistemas@rabina.com.mx');
            if ($_FILES["rtImagen"]["name"] !== '') {
                $mail->addAttachment($URL, $_FILES["rtImagen"]["name"]);
            } else {
                print 'NO SE ENVIO EL ARCHIVO ADJUNTO';
                print $URL;
            }
            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = $Subject;
            $mail->AddEmbeddedImage('media/LogoRabina2017.png', 'RabinaLogo');

            $mail->Body = utf8_decode($bodyContent);
            if (!$mail->send()) {
                echo 'EL MENSAJE NO PUDO SER ENVIADO';
                echo 'ERROR EN EL CORREO: ' . $mail->ErrorInfo;
            } else {
                echo 'MENSAJE ENVIADO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUltimoFolioXProveedor() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramitefactura_model->getUltimoFolioXProveedor($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviarRevision($ID, $data, $URL) {
        try {
            extract(filter_input_array(INPUT_POST));
            $Subject = utf8_decode("SE HA REVISADO UNA FACTURA: $NumeroFactura, $" . number_format($Importe, 2, '.', ', '));
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DE LA FACTURA</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FOLIO</B></th>'
                    . '<th><B>FECHA</B></th>'
                    . '<th><B>HORA</B></th>'
                    . '<th><B>EMPRESA</B></th>'
                    . '<th><B>ACTIVIDAD</B></th>'
                    . '<th><B>PROYECTO</B></th>'
                    . '<th><B>NÚMERO DE CONTRATO</B></th>'
                    . '<th><B>PROVEEDOR</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $Folio . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Fecha . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Hora . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $EmpresaT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ModeloNegocioT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ActividadT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroDeContrato . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ProveedorT . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FECHA DE LA FACTURA</B></th>'
                    . '<th><B>NÚMERO DE FACTURA</B></th>'
                    . '<th><B>IMPORTE</B></th>'
                    . '<th><B>FACTURA PAGADA</B></th>'
                    . '<th><B>ORDEN DE COMPRA DE REFERENCIA</B></th>'
                    . '<th><B>OBSERVACIÓN</B></th>'
                    . '<th><B>RECEPTOR EN RABINA</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . "$ " . number_format($Importe, 2, '.', ', ') . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . ((((int) $PAGADA) == 1) ? "SI" : "NO") . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $OrdenDeCompraRef . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Observacion . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ReceptorT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . utf8_decode($URL) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onEnviarEmail($ID, $Subject, $bodyContent, $data, $URL);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviarAutorizacion($ID, $data, $URL) {
        try {
            extract(filter_input_array(INPUT_POST));
            $Subject = utf8_decode("SE HA AUTORIZADO UNA FACTURA: $NumeroFactura, $" . number_format($Importe, 2, '.', ', '));
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DE LA FACTURA</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FOLIO</B></th>'
                    . '<th><B>FECHA</B></th>'
                    . '<th><B>HORA</B></th>'
                    . '<th><B>EMPRESA</B></th>'
                    . '<th><B>ACTIVIDAD</B></th>'
                    . '<th><B>PROYECTO</B></th>'
                    . '<th><B>NÚMERO DE CONTRATO</B></th>'
                    . '<th><B>PROVEEDOR</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $Folio . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Fecha . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Hora . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $EmpresaT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ModeloNegocioT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ActividadT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroDeContrato . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ProveedorT . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FECHA DE LA FACTURA</B></th>'
                    . '<th><B>NÚMERO DE FACTURA</B></th>'
                    . '<th><B>IMPORTE</B></th>'
                    . '<th><B>FACTURA PAGADA</B></th>'
                    . '<th><B>ORDEN DE COMPRA DE REFERENCIA</B></th>'
                    . '<th><B>OBSERVACIÓN</B></th>'
                    . '<th><B>RECEPTOR EN RABINA</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . "$ " . number_format($Importe, 2, '.', ', ') . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . ((((int) $PAGADA) == 1) ? "SI" : "NO") . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $OrdenDeCompraRef . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Observacion . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ReceptorT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . utf8_decode($URL) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onEnviarEmail($ID, $Subject, $bodyContent, $data, $URL);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviarPago($ID, $data, $URL) {
        try {
            extract(filter_input_array(INPUT_POST));
            $Subject = utf8_decode("SE HA PAGADO UNA FACTURA: $NumeroFactura, $" . number_format($Importe, 2, '.', ', '));
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DE LA FACTURA</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FOLIO</B></th>'
                    . '<th><B>FECHA</B></th>'
                    . '<th><B>HORA</B></th>'
                    . '<th><B>EMPRESA</B></th>'
                    . '<th><B>ACTIVIDAD</B></th>'
                    . '<th><B>PROYECTO</B></th>'
                    . '<th><B>NÚMERO DE CONTRATO</B></th>'
                    . '<th><B>PROVEEDOR</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $Folio . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Fecha . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Hora . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $EmpresaT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ModeloNegocioT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ActividadT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroDeContrato . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ProveedorT . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>FECHA DE LA FACTURA</B></th>'
                    . '<th><B>NÚMERO DE FACTURA</B></th>'
                    . '<th><B>IMPORTE</B></th>'
                    . '<th><B>FACTURA PAGADA</B></th>'
                    . '<th><B>ORDEN DE COMPRA DE REFERENCIA</B></th>'
                    . '<th><B>OBSERVACIÓN</B></th>'
                    . '<th><B>RECEPTOR EN RABINA</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroFactura . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . "$ " . number_format($Importe, 2, '.', ', ') . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . ((((int) $PAGADA) == 1) ? "SI" : "NO") . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $OrdenDeCompraRef . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Observacion . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ReceptorT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . utf8_decode($URL) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onEnviarEmail($ID, $Subject, $bodyContent, $data, $URL);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getModeloNegocioXProyectoID() {
        try {
            extract($this->input->post());
            $data = $this->tramitefactura_model->getModeloNegocioXProyectoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
