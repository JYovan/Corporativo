<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlCompras extends CI_Controller {

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
        $this->load->model("modelo");
        $this->load->model("compras_model");
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
        try {
            $where = '';

            session_start();
            if (isset($_SESSION["ID"])) {
                $indiceuser = $_SESSION["ID"];
                $USUARIOS = $this->modelo->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
//Abriendo BD Proyectos

                $Proyectos = $this->modelo->getProyectosAll();
                $data['Proyectos'] = $Proyectos;
//Abriendo BD Productos

                $Productos = $this->modelo->getProductosAll();
                $data['Productos'] = $Productos;
//Cargando Ordenes 
                $Cotizaciones = $this->modelo->getCotizacionesALL();
                $data['Cotizaciones'] = $Cotizaciones;
//Cargando Conceptos de cotizaciones

                $Etiqueta = $this->modelo->getCotizacionConceptosALL();
                $data['Etiqueta'] = $Etiqueta;
                $data['scripts'] = array('cliente');
//            $data['ctrlscripts'] = array('ctrlCompras');
                $data['contentView'] = 'vCompras';
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

    public function onLoad() {
        try {
            if (isset($_POST["indice"])) {
                extract(filter_input_array(INPUT_POST));
                switch ($indice) {
                    case 1:
                        $this->getProductByID($ID);
                        break;
                    case 2:
                        $this->getProductByEtiqueta($ID, $PROVEEDORES);
                        break;
                    case 3:
                        $this->getProductByIDPrice($ID, $PROVEEDORES, $CANTIDAD);
                        break;
                    case 4:
                        $this->getProductByEtiquetaID($ID, $PROVEEDORES);
                        break;
                    case 5:
                        extract(filter_input_array(INPUT_POST));
                        if (isset($ENCABEZADO["PROYECTO"]) && isset($ENCABEZADO["NUMERO"]) && isset($ENCABEZADO["ANOTACIONES"])) {
                            /* ENCABEZADO */
                            $encabezado = array(
                                'Proyecto' => $ENCABEZADO["PROYECTO"],
                                'Numero' => strtoupper($ENCABEZADO["NUMERO"]),
                                'Fecha' => $ENCABEZADO["FECHA"],
                                'Anotaciones' => strtoupper($ENCABEZADO["ANOTACIONES"]),
                                'IdFacturado' => $ENCABEZADO["FACTURADO"],
                                'Solicitante' => $ENCABEZADO["SOLICITANTE"],
                                'Elabora' => $ENCABEZADO["ELABORA"]
                            );

                            $IDENCABEZADO = $this->compras_model->onAction('Cotizaciones', $encabezado, "save", 0);

                            /* DETALLE */
                            for ($index = 0; $index < count($DETALLE); $index++) {
                                $detalle = array(
                                    'IdCotizacion' => $IDENCABEZADO,
                                    'IdProveedor' => $DETALLE[$index]["IDPRO"],
                                    'IdEtiqueta' => $DETALLE[$index]["IDETI"],
                                    'IdProducto' => $DETALLE[$index]["IDPROD"],
                                    'Cantidad' => $DETALLE[$index]["CANTIDAD"],
                                    'Precio' => $DETALLE[$index]["PRECIO"],
                                    'Fecha' => date('d/m/Y h:i:s a')
                                );
                                /* ENCABEZADO ENLACE DETALLE */
                                $IDDETALLE = $this->compras_model->onAction('CotizacionesDetalle', $detalle, "save", 0);
                            }
                            print 1;
                        } else {
                            print 0;
                        }
                        break;
                    case 6:
                        $data = $this->compras_model->getRecords();
                        print json_encode($data);
                        break;
                    case 7:
                        $data = $this->compras_model->getMaxID();
                        print json_encode($data);
                        break;
                    case 8:
                        if (isset($_POST["ID"])) {
                            extract(filter_input_array(INPUT_POST));
                            $this->getResume($ID);
                        } else {
                            print 0;
                        }
                        break;
                    case 9:
                        if (isset($_POST["ID"])) {
                            extract(filter_input_array(INPUT_POST));
                            $this->onCancelarCotizacion($ID);
                        } else {
                            print 0;
                        }
                        break;
                    case 10:
                        $data = $this->compras_model->getCanceledRecords();
                        print json_encode($data);
                        break;
                    case 11:
                        $this->getProductByIDPrice($ID, $PROVEEDORES, $CANTIDAD);
                        break;
                    case 12:
                        break;
                    case 13:
                        $data = $this->compras_model->getEmpresas();
                        print json_encode($data);
                        break;
                    default:
                        break;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));

            if (isset($ID) && isset($ENCABEZADO["ANOTACIONES"])) {
                /* ENCABEZADO */
                $encabezado = array(
//                                'Proyecto' => $ENCABEZADO["PROYECTO"],
//                                'Numero' => $ENCABEZADO["NUMERO"],
//                                'Fecha' => date('d/m/Y H:i:s'),
                    'Anotaciones' => strtoupper($ENCABEZADO["ANOTACIONES"]),
                    'Elabora' => $ENCABEZADO["ELABORA"],
                    'Solicitante' => $ENCABEZADO["SOLICITA"]
                );

                $IDUPDATE = $this->compras_model->onAction('Cotizaciones', $encabezado, "update", array('ID', $ID));

                /* DETALLE */
                for ($index = 0; $index < count($DETALLE); $index++) {

                    if ($DETALLE[$index]['ESTATUS'] == 'GUARDADO') {
                        $encabezado = array(
                            'Cantidad' => $DETALLE[$index]["CANTIDAD"],
                        );
                        $this->compras_model->onAction('CotizacionesDetalle', $encabezado, "update", array('IdCotizacionD', $DETALLE[$index]['IDDET']));
                    }
                    if ($DETALLE[$index]['ESTATUS'] == 'ELIMINADO') {
                        $encabezado = array(
                            'Estatus' => 'ELIMINADO'
                        );
                        $this->compras_model->onAction('CotizacionesDetalle', $encabezado, "update", array('IdCotizacionD', $DETALLE[$index]['IDDET']));
                    }
//                        'IdCotizacionD' => $IDDET;
                    $detalle = array(
                        'IdCotizacion' => $ID,
                        'IdProveedor' => $DETALLE[$index]["IDPRO"],
                        'IdEtiqueta' => $DETALLE[$index]["IDETI"],
                        'IdProducto' => $DETALLE[$index]["IDPROD"],
                        'Cantidad' => $DETALLE[$index]["CANTIDAD"],
                        'Precio' => $DETALLE[$index]["PRECIO"],
                        'Fecha' => date('d/m/Y h:m:s')
                    );

                    if ($DETALLE[$index]['ESTATUS'] == 'NUEVO') {
                        $this->compras_model->onAction('CotizacionesDetalle', $detalle, "save", 0);
                    }
                    /* ENCABEZADO ENLACE DETALLE */
//                                $IDDETALLE = $this->compras_model->onAction('CotizacionesDetalle', $detalle, "save", 0);
                }
                print 1;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductByID($ID) {
        try {
            $data = $this->compras_model->getProductByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductByEtiqueta($ID, $PROVEEDORES) {
        try {
            $data = $this->compras_model->getProductByEtiqueta($ID, $PROVEEDORES);
            print json_encode($data);
//            print data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductByIDPrice($ID, $PROVEEDORES, $CANTIDAD) {
        try {
            $data = $this->compras_model->getProductByIDPrice($ID, $PROVEEDORES, $CANTIDAD);
            print json_encode($data);
//            print data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductByEtiquetaID($ID, $PROVEEDOR) {
        try {
            $data = $this->compras_model->getProductByEtiquetaID($ID, $PROVEEDOR);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXProveedor() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->compras_model->getProductosXProveedor($PROVEEDOR);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResume($ID) {
        try {
            $datahead = $this->compras_model->getHeadRow($ID);
            $datarows = $this->compras_model->getDetailRow($ID);
//            print $datarows;
            $record = array(
                "HEAD" => json_encode($datahead),
                "ROWS" => json_encode($datarows)
            );
            print json_encode($record);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarCotizacion($ID) {
        try {
            if (isset($ID)) {
                $data = array(
                    'Estatus' => 'CANCELADA'
                );
                $this->compras_model->onAction('Cotizaciones', $data, "update", array('ID', $ID));
                print 1;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDataReportCotizacion() {
        try {
            if (isset($_POST["ID"])) {
                date_default_timezone_set('America/Mexico_City');
                require_once APPPATH . "/third_party/fpdf17/fpdf.php";
                if (!isset($ID)) {
                    extract(filter_input_array(INPUT_POST));
                }
                $image = "log_1o.png";
                $pdf = new FPDF('P', 'mm', 'A4');
                $pdf->AddPage();
                $pdf->Image('media/' . $image, 10, 10, /* ANCHO */ 60, /* ALTO */ 21);

                $pdf->SetFont('Arial', 'B', 32);
                $tblAlto = 0;
                $tblAncho = 0;
                $tblAnchoColumnas = 150;
                $rows = $this->compras_model->getDataReportCotizacion($ID);
                $nrows = count($rows);
//                var_dump($rows);
                if (isset($rows[0])) {
                    $rdata = $rows[0];
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 20);
                    $pdf->Text(/* X */85, /* Y */ 25, utf8_decode("COTIZACIÓN"));
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->Text(/* X */95, /* Y */ 30, $rdata->FECHA);
                    $pdf->SetFont('Arial', '', 15);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->Text(/* X */160, /* Y */ 25, "No. " . strtoupper($rdata->NUMERO));
                    $pdf->Line(/* Izq-X */15, /* IZQ-Y */ 35, /* Largo */ 195, /* DER-Y */ 35);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */15, /* Y */ 40, "FACTURADO A: ");
                    $pdf->Text(/* X */110, /* Y */ 40, "PROVEEDOR: ");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                    $pdf->Line(/* Izq-X */105, /* Top-Y */ 38, /* Largo */ 105, 68);
                    $pdf->SetFont('Arial', '', 7);
                    $pdf->Text(/* X */15, /* Y */ 45, ($rdata->RAZON_A_FACTURAR != NULL && $rdata->RAZON_A_FACTURAR != "NULL" && $rdata->RAZON_A_FACTURAR != "" ? $rdata->RAZON_A_FACTURAR : "NA"));

                    $pdf->SetXY(110, 42);
                    $pdf->MultiCell(85, 3, strtoupper(utf8_decode($rdata->PROVEEDOR)));

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */15, /* Y */ 51, "DOMICILIO");
                    $pdf->Text(/* X */110, /* Y */ 51, "DOMICILIO");
                    /* LINEA INFERIOR DE "FACTURADO A" Y DE "PROVEEDOR" */
                    $pdf->Line(/* Izq-X */15, /* Top-Y */ 70, /* Largo */ 195, 70);
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetXY(15, 52);
                    $pdf->MultiCell(85, 3, utf8_decode($rdata->DIRECCION_FACTURA));
                    $pdf->SetXY(110, 52);
                    $pdf->MultiCell(85, 3, utf8_decode($rdata->DIR_PROVEEDOR));

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */15, /* Y */ 61, "RFC: ");
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->Text(/* X */25, /* Y */ 61, $rdata->RFC);
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */110, /* Y */ 61, "TEL: ");
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->Text(/* X */118, /* Y */ 61, $rdata->PROTEL);
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */15, /* Y */ 65, "E-MAIL: ");
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->Text(/* X */28, /* Y */ 65, $rdata->CORREO);

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */15, /* Y */ 69, "TEL: ");
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->Text(/* X */25, /* Y */ 69, $rdata->TEL);

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetFont('Arial', '', 8);
                    /* LINEA INFERIOR DE OBSERVACIONES */
                    $pdf->Line(/* Izq-X */15, /* IZQ-Y */ 91, /* Largo */ 195, /* DER-Y */ 91);

                    $pdf->SetXY(15, 72);
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->MultiCell(175, 3, utf8_decode("OBSERVACIONES: "));
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetXY(15, 75);
                    $strf = "";

                    $nchar = 110;
                    /* SON 110 CARACTERES POR RENGLON**LOS ESPACION TAMBIEN CUENTAN* */
                    for ($index = 0; $index < 110; $index++) {
                        $strf .= "1";
                    }
                    $nob = strlen($rdata->ANOTACIONES);
                    if ($nob > 330) {
                        
                    }
                    $pdf->MultiCell(175, 3, strtoupper(utf8_decode($rdata->ANOTACIONES)));

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Text(/* X */15, /* Y */ 96, "PRODUCTO");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                    $pdf->Line(/* Izq-X */105, /* Top-Y */ 92, /* Largo */ 105, 97);

                    $pdf->Text(/* X */107, /* Y */ 96, "UNIDAD");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                    $pdf->Line(/* Izq-X */122, /* Top-Y */ 92, /* Largo */ 122, 97);

                    $pdf->Text(/* X */123, /* Y */ 96, "CANTIDAD");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                    $pdf->Line(/* Izq-X */142, /* Top-Y */ 92, /* Largo */ 142, 97);

                    $pdf->Text(/* X */144, /* Y */ 96, "PRECIO.U");
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                    $pdf->Line(/* Izq-X */162, /* Top-Y */ 92, /* Largo */ 162, 97);

                    $pdf->Text(/* X */172, /* Y */ 96, "IMPORTE");
                    /* LINEA INFERIOR DE TITULOS DE DETALLE */
                    $pdf->Line(/* Izq-X */15, /* IZQ-Y */ 98, /* Largo */ 195, /* DER-Y */ 98);

                    $pdf->SetFont('Arial', 'B', 4);
                    $TT = 0;
                    $top = 110;
                    $pdf->SetDrawColor(224, 224, 224);
                    foreach ($rows as $key => $value) {
                        $pdf->Line(/* Izq-X */17, /* IZQ-Y */ $top - 7, /* Largo */ 190, /* DER-Y */ $top - 7);
                        if (strlen($value->PRODUCTO) >= 70) {
                            $pdf->SetFont('Arial', 'B', 4);
                        } else {
                            $pdf->SetFont('Arial', 'B', 6);
                        }
                        $pdf->Text(/* X */16, /* Y */ $top - 8, strtoupper(utf8_decode($value->PRODUCTO)));
                        /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                        $pdf->Line(/* Izq-X */105, /* Top-Y */ $top - 10, /* Largo */ 105, $top - 8);
                        if (strlen($value->UNIDAD) >= 6) {
                            $pdf->SetFont('Arial', 'B', 4);
                        } else {
                            $pdf->SetFont('Arial', 'B', 6);
                        }
                        $pdf->Text(/* X */107, /* Y */ $top - 8, strtoupper($value->UNIDAD));
                        /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                        $pdf->Line(/* Izq-X */122, /* Top-Y */ $top - 10, /* Largo */ 122, $top - 8);
                        if (strlen($value->UNIDAD) >= 6) {
                            $pdf->SetFont('Arial', 'B', 4);
                        } else {
                            $pdf->SetFont('Arial', 'B', 6);
                        }
                        $pdf->Text(/* X */129, /* Y */ $top - 8, $value->CANTIDAD);
                        /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                        $pdf->Line(/* Izq-X */142, /* Top-Y */ $top - 10, /* Largo */ 142, $top - 8);

                        $pdf->Text(/* X */144, /* Y */ $top - 8, "$ " . number_format($value->PRECIO, 2, '.', ', '));
                        /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                        $pdf->Line(/* Izq-X */162, /* Top-Y */ $top - 10, /* Largo */ 162, $top - 8);

                        $pdf->Text(/* X */164, /* Y */ $top - 8, "$ " . number_format($value->IMPORTEXP, 2, '.', ', '));
                        $TT = $TT + $value->IMPORTEXP;
                        $top = $top + 5;
                    }
                    $pdf->SetDrawColor(96, 96, 96);
                    $top = $top - 10;
                    $pdf->Line(/* Izq-X */15, /* IZQ-Y */ $top, /* Largo */ 195, /* DER-Y */ $top);
                    $top = $top + 5;
                    $pdf->SetFont('Arial', 'B', 8);
                    $pdf->Text(/* X */144, /* Y */ $top, "SUBTOTAL: ");
                    $pdf->Text(/* X */164, /* Y */ $top, "$ " . number_format($TT, 2, '.', ', '));
                    $top = $top + 5;
                    $pdf->Text(/* X */144, /* Y */ $top, "I.V.A: ");
                    $pdf->Text(/* X */164, /* Y */ $top, "$ " . number_format($TT * 0.16, 2, '.', ', '));
                    $top = $top + 5;
                    $pdf->Text(/* X */144, /* Y */ $top, "TOTAL: ");
                    $pdf->Text(/* X */164, /* Y */ $top, "$ " . number_format($TT + ($TT * 0.16), 2, '.', ', '));
                    $top = $top + 25;

                    $pdf->Line(/* Izq-X */25, /* IZQ-Y */ $top, /* Largo */ 75, /* DER-Y */ $top);
                    $pdf->Line(/* Izq-X */80, /* IZQ-Y */ $top, /* Largo */ 130, /* DER-Y */ $top);
                    $pdf->Line(/* Izq-X */135, /* IZQ-Y */ $top, /* Largo */ 185, /* DER-Y */ $top);
                    $top = $top + 5;
                    $pdf->Text(/* X */40, /* Y */ $top, utf8_decode("ELABORÓ"));
                    $pdf->Text(/* X */95, /* Y */ $top, utf8_decode("AUTORIZÓ"));
                    $pdf->Text(/* X */155, /* Y */ $top, utf8_decode("RECIBIÓ"));
//
                    if (!file_exists('uploads/Cotizaciones')) {
                        mkdir('uploads/Cotizaciones', 0777, true);
                    }
                    if (!file_exists('uploads/Cotizaciones/' . $rdata->EMPRESA)) {
                        mkdir('uploads/Cotizaciones/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/Cotizaciones/' . $rdata->EMPRESA . '/COT_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function onApproved() {
        try {
//                var_dump(filter_input_array(INPUT_POST)); 
            if (isset($_POST["ID"])) {
                extract(filter_input_array(INPUT_POST));
                $rows = $this->compras_model->getDataReportCotizacion($ID);
                $data = array(
                    'Proyecto' => $rows[0]->IDPROYECTO,
                    'Numero' => $rows[0]->NUMERO,
                    'Fecha' => $rows[0]->FECHARPRO,
                    'Observaciones' => $rows[0]->ANOTACIONES,
                    'Estatus' => 'ACTIVO',
                    'Registro' => Date('d/m/Y h:m:s a'),
                    'FormaDePago' => $FORMADEPAGO,
                    'LugarDeEntrega' => $ENTREGA,
                    'Contrato' => $CONTRATO,
                    'IdCotizacion' => $ID,
                    'Autoriza' => $AUTORIZA,
                    'Recibe' => strtoupper($RECIBE),
                    'Cuenta' => $CUENTA
                );
                $IDOC = $this->compras_model->onAction('OrdenDeCompra', $data, "save", 0);
                for ($index = 0; $index < count($DETALLE); $index++) {
                    $data = array(
                        'IDOrdenDeCompra' => $IDOC,
                        'Proveedor' => $DETALLE[$index]["IDPRO"],
                        'IdEtiqueta' => $DETALLE[$index]["IDETI"],
                        'IdProducto' => $DETALLE[$index]["IDPROD"],
                        'Cantidad' => $DETALLE[$index]["CANTIDAD"],
                        'Precio' => $DETALLE[$index]["PRECIO"],
                        'Fecha' => Date('d/m/Y h:i:s a'),
                        'Estatus' => 'ACTIVO',
                        'Registro' => Date('d/m/Y h:i:s a')
                    );
//                    var_dump($data);
                    $this->compras_model->onAction('OrdenDeCompraD', $data, "save", 0);
                }
                $data = array(
                    'Estatus' => 'APROBADA'
                );
                $this->compras_model->onAction('Cotizaciones', $data, "update", array('ID', $ID));
                print 1;

                $to = "ing.giovanniflores93@gmail.com, orico09@me.com, administrativo@rabina.com.mx, areatecnica@rabina.com.mx, recepcion@rabina.com.mx";
                $subject = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
                $message = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA APROBADO UNA ORDEN DE COMPRA</p>  
                        <p>ID: " . $IDOC . "</p>  
                        </body>
                        </html>";

// Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
                $headers .= 'From: sistema@rabina.com.mx ' . "\r\n";
//            $headers .= 'Cc: myboss@example.com' . "\r\n";
                mail($to, $subject, $message, $headers);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGenerarOrdenDeCompra() {
        try {
            if (isset($_POST["ID"])) {
                date_default_timezone_set('America/Mexico_City');
                require_once APPPATH . "/third_party/fpdf17/fpdf.php";
                extract(filter_input_array(INPUT_POST));
                $image = "log_1o.png";
                $pdf = new FPDF('P', 'mm', 'A4');
                $margen_izq = 2.5;
                $pdf->AddPage();
                $pdf->Image('media/' . $image, $margen_izq, 5, /* ANCHO */ 60, /* ALTO */ 21);

                $pdf->SetFont('Arial', 'B', 32);
                $tblAlto = 0;
                $tblAncho = 0;
                $tblAnchoColumnas = 150;
                $rows = $this->compras_model->getOrdenDeCompra($ID);
                $nrows = count($rows);
//                var_dump($rows);
                if (isset($rows[0])) {
                    $rdata = $rows[0];
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 20);
                    $pdf->SetX(70);
                    $pdf->Cell(100, 10, utf8_decode("ORDEN DE COMPRA"), 0, 1, 'L');
//                    $pdf->Text(/* X */75, /* Y */ 25, utf8_decode("ORDEN DE COMPRA"));
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->SetX(90);
                    $pdf->Cell(100, 3, utf8_decode($rdata->PROYECTO), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetX(85);
                    $pdf->Cell(100, 10, Date('d-m-Y h:m:s a'), 0, 0, 'L');
//                    $pdf->Text(/* X */95, /* Y */ 30, $rdata->FECHA);
                    $pdf->SetFont('Arial', '', 15);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetX(160);
                    $pdf->Cell(100, 10, "No. " . strtoupper($rdata->NUMERO), 0, 1, 'L');
//                    $pdf->Text(/* X */160, /* Y */ 25, "No. " . $rdata->NUMERO);
                    $pdf->Cell(100, 5, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */$margen_izq, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 208, /* DER-Y */ $pdf->GetY());


                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetX($margen_izq);
                    $pdf->Cell(100, 5, "FACTURADO A: ", 0, 0, 'L');
                    $pdf->SetX(50);
                    $pdf->Cell(100, 5, "SOLICITANTE: ", 0, 0, 'L');

                    $pdf->SetX(110);
                    $pdf->Cell(100, 5, "PROVEEDOR: ", 0, 1, 'L');
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
//                    $pdf->Line(/* Izq-X */105, /* Top-Y */ 38, /* Largo */ 105, 168);
                    $pdf->SetFont('Arial', '', 7);

                    $cy = $pdf->GetY();

                    $pdf->setX($margen_izq);
                    $pdf->MultiCell(40, 2.5, utf8_decode($rdata->RAZON_A_FACTURAR));

                    $cyf = $pdf->GetY();

                    $pdf->SetY($cy);

                    $cy = $pdf->GetY();

                    $pdf->SetX(50);
                    $pdf->MultiCell(50, 2.5, utf8_decode($rdata->SOLICITANTE));

                    $pdf->SetXY(110, 40);
                    $pdf->MultiCell(60, 4, utf8_decode($rdata->PROVEEDOR));
                    $pdf->Image('media/' . (($rdata->ICONO !== '' && $rdata->ICONO !== null && $rdata->ICONO !== 'NULL') ? $rdata->ICONO : 'logos/si.png'), 170, 37, /* ANCHO */ 36, /* ALTO */ 12);
                    

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->Cell(100, 1.5, "", 0, 1, 'L');
                    $pdf->setX($margen_izq); 
                    $pdf->Cell(100, 5, "DOMICILIO", 0, 0, 'L');

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetX(50);
                    $pdf->Cell(100, 5, "CUENTA: ", 0, 0, 'L');
                    $pdf->SetX(70);
                    $pdf->Cell(100, 5, $rdata->CUENTA, 0, 0, 'L');
                    $pdf->SetX(110);
                    $pdf->Cell(100, 5, "DOMICILIO", 0, 1, 'L');
                    /* LINEA INFERIOR DE "FACTURADO A" Y DE "PROVEEDOR" */
                    $pdf->SetFont('Arial', '', 8);
                    $cyf = $pdf->GetY();
                    $pdf->SetXY($margen_izq, $cyf);
                    $pdf->MultiCell(85, 3, utf8_decode($rdata->DIRECCION_FACTURA));
                    $pdf->SetXY(110,$cyf);
                    $pdf->MultiCell(50, 3, utf8_decode($rdata->DIR_PROVEEDOR));

                    $pdf->Cell(100, 3, "", 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetY($pdf->GetY());
                    $pdf->setX($margen_izq);
                    $pdf->Cell(100, 5, "RFC: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, $rdata->RFC, 0, 0, 'L');
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetX(110);
                    $pdf->Cell(100, 5, "TEL: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetX(118);
                    $pdf->Cell(100, 5, $rdata->PROTEL, 0, 1, 'L');
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->setX($margen_izq);
                    $pdf->Cell(100, 5, "E-MAIL: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetX(18);
                    $pdf->Cell(100, 5, $rdata->CORREO . ",", 0, 0, 'L');
                    $pdf->SetX(63);
                    $pdf->Cell(100, 5, "areatecnica@rabina.com.mx", 0, 1, 'L');

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->setX($margen_izq);
                    $pdf->Cell(100, 5, "TEL: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetX(15);
                    $pdf->Cell(100, 5, $rdata->TEL, 0, 1, 'L');
                    /* SI, IZQ-X Y LARGO SON IGUALES, LA LINEA SE DIBUJA EN VERTICAL */
                    $pdf->Line(/* Izq-X */105, /* Top-Y */ 38, /* Largo */ 105,  $pdf->GetY()-5);
                    $pdf->Line(/* Izq-X */$margen_izq, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 208, /* DER-Y */ $pdf->GetY());

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->setX($margen_izq);
                    $pdf->Cell(100, 5, "FORMA DE PAGO: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetX(35);
                    $pdf->Cell(100, 5, $rdata->FORMADEPAGO, 0, 0, 'L');

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetX(110);
                    $pdf->Cell(100, 5, "LUGAR DE ENTREGA: ", 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetX(145);
                    $LE = (($rdata->LUGARDEENTREGA == 1) ? 'OFICINA' : (($rdata->LUGARDEENTREGA == 2) ? 'BODEGA' : (($rdata->LUGARDEENTREGA == 3) ? 'OBRA' : (($rdata->LUGARDEENTREGA == 4) ? 'INSTALACIONES DEL PROVEEDOR' : ''))));

                    if (strlen($LE) > 10) {
                        $pdf->SetFont('Arial', '', 7.5);
                    } else {
                        $pdf->SetFont('Arial', '', 9);
                    }
                    $pdf->Cell(100, 5, $LE, 0, 1, 'L');


                    /* LINEA INFERIOR DE OBSERVACIONES */
                    $pdf->Line(/* Izq-X */$margen_izq, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 208, /* DER-Y */ $pdf->GetY());

                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->setX($margen_izq);
                    $pdf->Cell(100, 5, utf8_decode("OBSERVACIONES: "), 0, 1, 'L');
                    $pdf->SetFont('Arial', '', 8);
                    $strf = "";

                    $nchar = 110;
                    /* SON 110 CARACTERES POR RENGLON**LOS ESPACION TAMBIEN CUENTAN* */
                    for ($index = 0; $index < 110; $index++) {
                        $strf .= "1234567890 ";
                    }
                    $pdf->setX($margen_izq);
                    $nob = strlen($rdata->ANOTACIONES);
//                    $pdf->MultiCell(175, 3, strtoupper(utf8_decode($strf)));
                    $pdf->MultiCell(175, 3, strtoupper(utf8_decode($rdata->ANOTACIONES)));
                    $pdf->Cell(100, 2, "", 0, 1, 'L');
                    $pdf->Line(/* Izq-X */$margen_izq, /* Top-Y */ $pdf->GetY(), /* Largo */ 208, $pdf->GetY());


                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->setX($margen_izq);
                    $pdf->Cell(100, 5, "PRODUCTO", 0, 0, 'L');

                    $pdf->SetX(118);
                    $pdf->Cell(100, 5, "UNIDAD", 0, 0, 'L');

                    $pdf->SetX(133);
                    $pdf->Cell(100, 5, "CANTIDAD", 0, 0, 'L');

                    $pdf->SetX(154);
                    $pdf->Cell(100, 5, "PRECIO.U", 0, 0, 'L');

                    $pdf->SetX(175);
                    $pdf->Cell(100, 5, "IMPORTE", 0, 1, 'L');

                    /* LINEA INFERIOR DE TITULOS DE DETALLE */
                    $pdf->Line(/* Izq-X */$margen_izq, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 208, /* DER-Y */ $pdf->GetY());

                    $pdf->SetFont('Arial', 'B', 4);
                    $TT = 0;
                    $top = 110;
                    $n_page = 1;
                    $pdf->SetDrawColor(224, 224, 224);
                    $pdf->SetDrawColor(224, 224, 224);
//                    for ($index1 = 0; $index1 < 10; $index1++) {
                    foreach ($rows as $key => $value) {
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
                        if (strlen($value->PRODUCTO) >= 70) {
                            $pdf->SetFont('Arial', 'B', 6);
                        } else {
                            $pdf->SetFont('Arial', 'B', 7);
                        }
                        $cy = $pdf->GetY();
                        $pdf->SetX($margen_izq);
                        $pdf->MultiCell(115, 4, strtoupper(utf8_decode($value->PRODUCTO)), 0);
//                        $pdf->Cell(100, 5, strtoupper(utf8_decode($value->PRODUCTO)), 0, 0, 'L');
                        if (strlen($value->UNIDAD) >= 6) {
                            $pdf->SetFont('Arial', 'B', 5);
                        } else {
                            $pdf->SetFont('Arial', 'B', 6);
                        }
                        $cyf = $pdf->GetY();

                        $pdf->setY($cy);
                        $pdf->SetX(120);
                        $pdf->Cell(100, 5, strtoupper($value->UNIDAD), 0, 0, 'L');

                        $pdf->SetFont('Arial', 'B', 7);
                        $pdf->SetX(137);
                        $pdf->Cell(100, 5, $value->CANTIDAD, 0, 0, 'L');

                        $pdf->SetX(154);
                        $pdf->Cell(100, 5, "$ " . number_format($value->PRECIO, 2, '.', ', '), 0, 0, 'L');

                        $pdf->SetX(175);
                        $pdf->Cell(100, 5, "$ " . number_format($value->IMPORTEXP, 2, '.', ', '), 0, 1, 'L');
                        $TT = $TT + $value->IMPORTEXP;
                        $pdf->setY($cyf);
                        $pdf->Line(/* Izq-X */$margen_izq, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 208, /* DER-Y */ $pdf->GetY());
                    }
//                    }

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
                    $pdf->SetDrawColor(96, 96, 96);
                    $pdf->Line(/* Izq-X */$margen_izq, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 208, /* DER-Y */ $pdf->GetY());

                    $pdf->SetFont('Arial', 'B', 8);
                    $pdf->SetX(154);
                    $pdf->Cell(100, 5, "SUBTOTAL: ", 0, 0, 'L');
                    $pdf->SetX(175);
                    $pdf->Cell(100, 5, "$ " . number_format($TT, 2, '.', ', '), 0, 1, 'L');
                    $pdf->SetX(154);
                    $pdf->Cell(100, 5, "I.V.A: ", 0, 0, 'L');
                    $pdf->SetX(175);
                    $pdf->Cell(100, 5, "$ " . number_format($TT * 0.16, 2, '.', ', '), 0, 1, 'L');

                    $pdf->SetX(154);
                    $pdf->Cell(100, 5, "TOTAL: ", 0, 0, 'L');
                    $pdf->SetX(175);
                    $pdf->Cell(100, 5, "$ " . number_format($TT + ($TT * 0.16), 2, '.', ', '), 0, 1, 'L');


                    $pdf->SetFont('Arial', 'B', 6);

                    $pdf->Cell(100, 10, "", 0, 1, 'L');
                    $pdf->SetX(28);
                    $pdf->Cell(100, 5, utf8_decode($rdata->ELABORO), 0, 0, 'L');
                    $pdf->SetX(83);
                    $pdf->Cell(100, 5, utf8_decode($rdata->AUTORIZA), 0, 0, 'L');
                    $pdf->SetX(150);
                    $pdf->Cell(100, 5, utf8_decode(strtoupper($rdata->RECIBE)), 0, 1, 'L');
                    $pdf->Line(/* Izq-X */25, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 75, /* DER-Y */ $pdf->GetY());
                    $pdf->Line(/* Izq-X */80, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 130, /* DER-Y */ $pdf->GetY());
                    $pdf->Line(/* Izq-X */135, /* IZQ-Y */ $pdf->GetY(), /* Largo */ 185, /* DER-Y */ $pdf->GetY());
//                 
                    $pdf->SetFont('Arial', 'B', 8);
                    $pdf->SetX(40);
                    $pdf->Cell(100, 5, utf8_decode("ELABORÓ"), 0, 0, 'L');
                    $pdf->SetX(95);
                    $pdf->Cell(100, 5, utf8_decode("AUTORIZÓ"), 0, 0, 'L');
                    $pdf->SetX(155);
                    $pdf->Cell(100, 5, utf8_decode("RECIBIÓ"), 0, 1, 'L');
//
                    if (!file_exists('uploads/Cotizaciones')) {
                        mkdir('uploads/Cotizaciones', 0777, true);
                    }
                    if (!file_exists('uploads/Cotizaciones/' . $rdata->EMPRESA)) {
                        mkdir('uploads/Cotizaciones/' . $rdata->EMPRESA, 0777, true);
                    }
                    $url = 'uploads/Cotizaciones/' . $rdata->EMPRESA . '/COT_' . $rdata->ID . '_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';
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

    public function getFormaDePago() {
        try {
            $data = $this->compras_model->getFormaDePago();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumeroDeCotizacionXProyecto() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->compras_model->getNumeroDeCotizacionXProyecto($ID);
                print json_encode($data);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $data = $this->compras_model->getUsuarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuentas() {
        try {
            $data = $this->compras_model->getCuentas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
