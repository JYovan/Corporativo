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

class ctrlTransmisiones extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("resource_model");
        $this->load->model("transmisiones_model");
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
            $this->load->view('vTransmision');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->transmisiones_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCancelados() {
        try {
            $data = $this->transmisiones_model->getCancelados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDispersiones() {
        try {
            $data = $this->transmisiones_model->getDispersiones();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDispersionesPagadas() {
        try {
            $data = $this->transmisiones_model->getDispersionesPagadas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getProyectos() {
        try {
            $data = $this->transmisiones_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getManzanasXDesarrollo() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getManzanasXDesarrollo($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getLotesXManzana() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getLotesXManzana($ID, $M);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumerosXLotes() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getNumerosXLotes($ID, $M, $L);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getIncrementosXTerrenos() {
        try {
            $data = $this->transmisiones_model->getIncrementosXTerrenos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
            $img = base_url() . 'uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . $ManzanaT . '/' . $LotesT . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFile"]["name"]);

            $data = array(
                'NFideicomiso' => $NFideicomiso,
                'FechaEntrega' => $FechaEntrega,
                'FechaNot' => $FechaNot,
                'Notificador' => strtoupper($Notificador),
                'RecibeNot' => strtoupper($RecibeNot),
                'Manzana' => $ManzanaT,
                'Lotes' => $LotesT,
                'Viviendas' => $Viviendas,
                'Adquirente' => strtoupper($Adquirente),
                'Genero' => $Genero,
                'Telefono' => $Telefono,
                'C1' => ($txtCantidadCreditos !== '' ? $txtCantidadCreditos : 0.0),
                'M1' => ($txtMontoCreditos !== '' ? $txtMontoCreditos : 0.0),
                'C2' => ($txtCantidadEmpresarial !== '' ? $txtCantidadEmpresarial : 0.0),
                'M2' => ($txtMontoEmpresarial !== '' ? $txtMontoEmpresarial : 0.0),
                'C3' => ($txtCantidadPromocionMama !== '' ? $txtCantidadPromocionMama : 0.0),
                'M3' => ($txtMontoPromocionMama !== '' ? $txtMontoPromocionMama : 0.0),
                'C4' => ($txtCantidadPrimavera !== '' ? $txtCantidadPrimavera : 0.0),
                'M4' => ($txtMontoPrimavera !== '' ? $txtMontoPrimavera : 0.0),
                'C5' => ($txtCantidadVerano !== '' ? $txtCantidadVerano : 0.0),
                'M5' => ($txtMontoVerano !== '' ? $txtMontoVerano : 0.0 ),
                'C6' => ($txtCantidadOlimpico !== '' ? $txtCantidadOlimpico : 0.0),
                'M6' => ($txtMontoOlimpico !== '' ? $txtMontoOlimpico : 0.0),
                'C7' => ($txtCantidadVivaMexico !== '' ? $txtCantidadVivaMexico : 0.0),
                'M7' => ($txtMontoVivaMexico !== '' ? $txtMontoVivaMexico : 0.0),
                'C8' => ($txtCantidadDeMiedo !== '' ? $txtCantidadDeMiedo : 0.0),
                'M8' => ($txtMontoDeMiedo !== '' ? $txtMontoDeMiedo : 0.0),
                'C9' => ($txtCantidadAguinaldo !== '' ? $txtCantidadAguinaldo : 0.0),
                'M9' => ($txtMontoAguinaldo !== '' ? $txtMontoAguinaldo : 0.0),
                'C10' => ($txtCantidadOtro !== '' ? $txtCantidadOtro : 0.0),
                'M10' => ($txtMontoOtro !== '' ? $txtMontoOtro : 0.0),
                'CantidadBuenFin' => $txtCantidadBuenFin,
                'MontoBuenFin' => $txtMontoBuenFin,
                'PrecioBase' => ($PrecioBase !== '' ? $PrecioBase : 0.0),
                'MontoDescuento' => ($MontoDescuento !== '' ? $MontoDescuento : 0.0),
                'CostoAdic' => ($CostoAdic !== '' ? $CostoAdic : 0.0),
                'PrecioTotal' => ($PrecioTotal !== '' ? $PrecioTotal : 0.0),
                'PrecioContrato' => 0.0, //NO TIENE SENTIDO GUARDAR ESTE DATO PORQUE NO TIENE NADA NI EXISTE EN EL FORMULARIO SIN EMBARGO COMO YA HAY DATOS SE DEJARÁ POR SI LLEGA A SURGIR QUE FALTA ESTE CAMPO (ESTE TIPO DE ERRORES SE DEBE A UNA FALTA DE NORMALIZACION NIVEL 2 Y 3, INFRINGIENDO CIERTAS REGLAS ESTABLECIDAS EN LAS BASES DE DATOS
                'FormaTrans' => $FormaTrans,
                'MontoAnt' => ($MontoAnt !== '' ? $MontoAnt : 0.0),
                'OtrosAbonos' => $OtrosAbonos,
                'Cofinanciado' => $Cofinanciado,
                'CreditoA' => ($CreditoA !== '' ? $CreditoA : 0.0),
                'InstitucionA' => ($InstitucionA !== '' ? $InstitucionA : NULL),
                'CreditoB' => ($CreditoB !== '' ? $CreditoB : 0.0),
                'InstitucionB' => ($InstitucionB !== '' ? $InstitucionB : NULL),
                'Importe' => 0.0, //NO TIENE SENTIDO GUARDAR ESTE DATO PORQUE NO TIENE NADA NI EXISTE EN EL FORMULARIO SIN EMBARGO COMO YA HAY DATOS SE DEJARÁ POR SI LLEGA A SURGIR QUE FALTA ESTE CAMPO (ESTE TIPO DE ERRORES SE DEBE A UNA FALTA DE NORMALIZACION NIVEL 2 Y 3, INFRINGIENDO CIERTAS REGLAS ESTABLECIDAS EN LAS BASES DE DATOS
                'Diferencia' => 0.0, //NO TIENE SENTIDO GUARDAR ESTE DATO PORQUE NO TIENE NADA NI EXISTE EN EL FORMULARIO SIN EMBARGO COMO YA HAY DATOS SE DEJARÁ POR SI LLEGA A SURGIR QUE FALTA ESTE CAMPO (ESTE TIPO DE ERRORES SE DEBE A UNA FALTA DE NORMALIZACION NIVEL 2 Y 3, INFRINGIENDO CIERTAS REGLAS ESTABLECIDAS EN LAS BASES DE DATOS
                'PrecioVentaN' => ($PrecioVentaN !== '' ? $PrecioVentaN : 0.0),
                'PrecioVentaE' => ($PrecioVentaE !== '' ? $PrecioVentaE : 0.0),
                'PagoTerreno' => ($PagoTerreno !== '' ? $PagoTerreno : 0.0),
                'PagoRendimientos' => ($PagoRendimientos !== '' ? $PagoRendimientos : 0.0),
                'TotalIng' => ($TotalIng !== '' ? $TotalIng : 0.0),
                'FirmaNP' => strtoupper($FirmaNP),
                'FechaFirmaNP' => $FechaFirmaNP,
                'NPub' => strtoupper($NPub),
                'NumNP' => $NumNP,
                'Adscripcion' => strtoupper($Adscripcion),
                'NumeralR' => $NumeralR,
                'Observaciones' => $Observaciones,
                'Cancelacion' => 0,
                'Disp_PrecioVentaE' => 0,
                'Disp_PagoTerreno' => 0,
                'Disp_PagoRendimientos' => 0,
                'Disp_TotalIng' => 0,
                'Total' => 0,
                'FechaNotDis' => "",
                'FechaNotRabina' => strtoupper(Date('d-m-Y h:i:s a')),
                'NombreNotif' => "",
                'NombreNotifRabina' => "",
                'MontoFideicomiso' => 0,
                'Montofideicomitente' => 0,
                'MontofideicomitenteRabina' => 0,
                'FechaDispersion' => "",
                'CantidadDispersada' => 0,
                'CuentaDispersion' => "",
                'ReferenciaTran' => "",
                'Disp_Numero' => 0,
                'Registro' => strtoupper(Date('d-m-Y h:i:s a')),
                'RDocumento' => $img
            );
            $ID = $this->resource_model->onAction('Transmision', $data, 'save', 0);
//            $this->onUploadFile();
            print 1;
            $to = "ing.giovanniflores93@gmail.com, orico09@me.com, recepcion@rabina.com.mx, areatecnica@rabina.com.mx, administrativo@rabina.com.mx";
            $subject = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
            $message = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA TRANSMIIDO UNA VIVIENDA, NO TRANSACCION: " . $ID . "</p>
                        <p>PROYECTO: $NFideicomisoT</p>
                        <p>MANZANA: $ManzanaT </p>
                        <p>LOTE: $LotesT</p>
                        <p>NUMERO: $Viviendas</p>
                        <p>FECHA DE NOTIFICACIÓN: " . strtoupper(Date('d-m-Y h:i:s a')) . "</p>
                            <img src=\"" . $img . "\" width=\"100%\" height=\"100%\"/>
                        </body>
                        </html>";
// Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
            $headers .= 'From: sistema@rabina.com.mx ' . "\r\n";
            mail($to, $subject, $message, $headers);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUploadFile() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            if (!file_exists('uploads/Transmisiones/Scan')) {
                mkdir('uploads/Transmisiones/Scan', 0777, true);
            }
            if (!file_exists('uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . $ManzanaT . '/' . $LotesT . '/' . $Viviendas)) {
                mkdir('uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . $ManzanaT . '/' . $LotesT . '/' . $Viviendas, 0777, true);
            }
            if (move_uploaded_file($_FILES["RDocumentoFile"]["tmp_name"], 'uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . $ManzanaT . '/' . $LotesT . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFile"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !";
                $this->onAdd();
            } else {
                echo "NO SE PUDO SUBIR EL ARCHIVO";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getRecordsByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPagoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getPagoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDispersionByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getDispersionByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'NFideicomiso' => $NFideicomiso,
                'FechaEntrega' => $FechaEntrega,
                'FechaNot' => $FechaNot,
                'Notificador' => strtoupper($Notificador),
                'RecibeNot' => strtoupper($RecibeNot),
                'Manzana' => ($ManzanaT !== '' ? $ManzanaT : $Manzana),
                'Lotes' => ($LotesT !== '' ? $LotesT : $Lotes),
                'Viviendas' => ($ViviendasT !== '' ? $ViviendasT : $Viviendas),
                'Adquirente' => strtoupper($Adquirente),
                'Genero' => $Genero,
                'Telefono' => $Telefono,
                'C1' => ($txtCantidadCreditos !== '' ? $txtCantidadCreditos : 0.0),
                'M1' => ($txtMontoCreditos !== '' ? $txtMontoCreditos : 0.0),
                'C2' => ($txtCantidadEmpresarial !== '' ? $txtCantidadEmpresarial : 0.0),
                'M2' => ($txtMontoEmpresarial !== '' ? $txtMontoEmpresarial : 0.0),
                'C3' => ($txtCantidadPromocionMama !== '' ? $txtCantidadPromocionMama : 0.0),
                'M3' => ($txtMontoPromocionMama !== '' ? $txtMontoPromocionMama : 0.0),
                'C4' => ($txtCantidadPrimavera !== '' ? $txtCantidadPrimavera : 0.0),
                'M4' => ($txtMontoPrimavera !== '' ? $txtMontoPrimavera : 0.0),
                'C5' => ($txtCantidadVerano !== '' ? $txtCantidadVerano : 0.0),
                'M5' => ($txtMontoVerano !== '' ? $txtMontoVerano : 0.0 ),
                'C6' => ($txtCantidadOlimpico !== '' ? $txtCantidadOlimpico : 0.0),
                'M6' => ($txtMontoOlimpico !== '' ? $txtMontoOlimpico : 0.0),
                'C7' => ($txtCantidadVivaMexico !== '' ? $txtCantidadVivaMexico : 0.0),
                'M7' => ($txtMontoVivaMexico !== '' ? $txtMontoVivaMexico : 0.0),
                'C8' => ($txtCantidadDeMiedo !== '' ? $txtCantidadDeMiedo : 0.0),
                'M8' => ($txtMontoDeMiedo !== '' ? $txtMontoDeMiedo : 0.0),
                'C9' => ($txtCantidadAguinaldo !== '' ? $txtCantidadAguinaldo : 0.0),
                'M9' => ($txtMontoAguinaldo !== '' ? $txtMontoAguinaldo : 0.0),
                'C10' => ($txtCantidadOtro !== '' ? $txtCantidadOtro : 0.0),
                'M10' => ($txtMontoOtro !== '' ? $txtMontoOtro : 0.0),
                'CantidadBuenFin' => $txtCantidadBuenFin,
                'MontoBuenFin' => $txtMontoBuenFin,
                'PrecioBase' => ($PrecioBase !== '' ? $PrecioBase : 0.0),
                'MontoDescuento' => ($MontoDescuento !== '' ? $MontoDescuento : 0.0),
                'CostoAdic' => ($CostoAdic !== '' ? $CostoAdic : 0.0),
                'PrecioTotal' => ($PrecioTotal !== '' ? $PrecioTotal : 0.0),
                'PrecioContrato' => 0.0, //NO TIENE SENTIDO GUARDAR ESTE DATO PORQUE NO TIENE NADA NI EXISTE EN EL FORMULARIO SIN EMBARGO COMO YA HAY DATOS SE DEJARÁ POR SI LLEGA A SURGIR QUE FALTA ESTE CAMPO (ESTE TIPO DE ERRORES SE DEBE A UNA FALTA DE NORMALIZACION NIVEL 2 Y 3, INFRINGIENDO CIERTAS REGLAS ESTABLECIDAS EN LAS BASES DE DATOS
                'FormaTrans' => $FormaTrans,
                'MontoAnt' => ($MontoAnt !== '' ? $MontoAnt : 0.0),
                'OtrosAbonos' => $OtrosAbonos,
                'Cofinanciado' => $Cofinanciado,
                'CreditoA' => ($CreditoA !== '' ? $CreditoA : 0.0),
                'InstitucionA' => ($InstitucionA !== '' ? $InstitucionA : NULL),
                'CreditoB' => ($CreditoB !== '' ? $CreditoB : 0.0),
                'InstitucionB' => ($InstitucionB !== '' ? $InstitucionB : NULL),
                'Importe' => 0.0, //NO TIENE SENTIDO GUARDAR ESTE DATO PORQUE NO TIENE NADA NI EXISTE EN EL FORMULARIO SIN EMBARGO COMO YA HAY DATOS SE DEJARÁ POR SI LLEGA A SURGIR QUE FALTA ESTE CAMPO (ESTE TIPO DE ERRORES SE DEBE A UNA FALTA DE NORMALIZACION NIVEL 2 Y 3, INFRINGIENDO CIERTAS REGLAS ESTABLECIDAS EN LAS BASES DE DATOS
                'Diferencia' => 0.0, //NO TIENE SENTIDO GUARDAR ESTE DATO PORQUE NO TIENE NADA NI EXISTE EN EL FORMULARIO SIN EMBARGO COMO YA HAY DATOS SE DEJARÁ POR SI LLEGA A SURGIR QUE FALTA ESTE CAMPO (ESTE TIPO DE ERRORES SE DEBE A UNA FALTA DE NORMALIZACION NIVEL 2 Y 3, INFRINGIENDO CIERTAS REGLAS ESTABLECIDAS EN LAS BASES DE DATOS
                'PrecioVentaN' => ($PrecioVentaN !== '' ? $PrecioVentaN : 0.0),
                'PrecioVentaE' => ($PrecioVentaE !== '' ? $PrecioVentaE : 0.0),
                'PagoTerreno' => ($PagoTerreno !== '' ? $PagoTerreno : 0.0),
                'PagoRendimientos' => ($PagoRendimientos !== '' ? $PagoRendimientos : 0.0),
                'TotalIng' => ($TotalIng !== '' ? $TotalIng : 0.0),
                'FirmaNP' => strtoupper($FirmaNP),
                'FechaFirmaNP' => $FechaFirmaNP,
                'NPub' => strtoupper($NPub),
                'NumNP' => $NumNP,
                'Adscripcion' => strtoupper($Adscripcion),
                'NumeralR' => $NumeralR,
                'Observaciones' => $Observaciones
            );
            $this->resource_model->onAction('Transmision', $data, 'update', array('ID', $ID));

            if (isset($_FILES["RDocumentoFileU"]["name"])) {
                if (!file_exists('uploads/Transmisiones/Scan')) {
                    mkdir('uploads/Transmisiones/Scan', 0777, true);
                }
                if (!file_exists('uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . ($ManzanaT !== '' ? $ManzanaT : $Manzana) . '/' . ($LotesT !== '' ? $LotesT : $Lotes) . '/' . ($ViviendasT !== '' ? $ViviendasT : $Viviendas))) {
                    mkdir('uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . ($ManzanaT !== '' ? $ManzanaT : $Manzana) . '/' . ($LotesT !== '' ? $LotesT : $Lotes) . '/' . ($ViviendasT !== '' ? $ViviendasT : $Viviendas), 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileU"]["tmp_name"], 'uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . ($ManzanaT !== '' ? $ManzanaT : $Manzana) . '/' . ($LotesT !== '' ? $LotesT : $Lotes) . '/' . ($ViviendasT !== '' ? $ViviendasT : $Viviendas) . '/' . utf8_decode($_FILES["RDocumentoFileU"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = base_url() . 'uploads/Transmisiones/Scan/' . $NFideicomisoT . '/' . ($ManzanaT !== '' ? $ManzanaT : $Manzana) . '/' . ($LotesT !== '' ? $LotesT : $Lotes) . '/' . ($ViviendasT !== '' ? $ViviendasT : $Viviendas) . '/' . utf8_decode($_FILES["RDocumentoFileU"]["name"]);
                    $data = array(
                        'RDocumento' => $img
                    );
                    $this->resource_model->onAction('Transmision', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }

//            VERIFICAR SI LA TRANSMISION ESTA SIENDO EDITADA Y... YA FUE DISPERSADA, 
//                    PARA ASI ACTUALIZAR LOS CAMPOS CORRESPONDIENTES EN LA DISPERSION PORQUE LA DISPERSION TIENE EN LA TABLA MANZANA, LOTE Y NUMERO

            $data = $this->transmisiones_model->getRecordsByID($ID);
            $dtm = json_decode(json_encode($data), FALSE);
            if ($dtm[0]->Estatus === "DISPERSADA") {
                $data = array(
                    'Manzana' => ($ManzanaT !== '' ? $ManzanaT : $Manzana),
                    'Lotes' => ($LotesT !== '' ? $LotesT : $Lotes),
                    'Viviendas' => ($ViviendasT !== '' ? $ViviendasT : $Viviendas)
                );

                $ID = $this->resource_model->onAction('Dispersion', $data, 'update', array('ID', $ID));
            }
//            var_dump($_FILES);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onDispersion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $img = base_url() . 'uploads/Dispersiones/Scan/' . $NFideicomisoT . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]);

            $data = array(
                'NFideicomiso' => $NFideicomiso,
                'Manzana' => $Manzana,
                'Lotes' => $Lotes,
                'Viviendas' => $Viviendas,
                'FechaNotDis' => $FechaNotDis,
                'FechaNotRabina' => $FechaNotRabina,
                'NombreNotif' => $NombreNotif,
                'NombreNotifRabina' => $NombreNotifRabina,
                'MontoFideicomiso' => $MontoFideicomiso,
                'Montofideicomitente' => $Montofideicomitente,
                'MontofideicomitenteRabina' => $MontofideicomitenteRabina,
                'FechaDispersion' => (isset($FechaDispersion) && $FechaDispersion !== null && $FechaDispersion !== "") ? $FechaDispersion : "",
                'CantidadDispersada' => (isset($CantidadDispersada) && $CantidadDispersada !== null && $CantidadDispersada !== "") ? $CantidadDispersada : 0,
                'CuentaDispersion' => (isset($CuentaDispersion) && $CuentaDispersion !== null && $CuentaDispersion !== "") ? $CuentaDispersion : 0,
                'ReferenciaTran' => (isset($ReferenciaTran) && $ReferenciaTran !== null && $ReferenciaTran !== "") ? $ReferenciaTran : 0,
                'IdTransmision' => $IDTransmision,
                'Registro' => strtoupper(Date('d-m-Y h:i:s a')),
                'Observaciones' => strtoupper($Observaciones),
                'DiferenciaAFavor' => (isset($DiferenciaAFavor) && $DiferenciaAFavor !== null && $DiferenciaAFavor !== "") ? $DiferenciaAFavor : 0,
                'DiferenciaEnContra' => (isset($DiferenciaEnContra) && $DiferenciaEnContra !== null && $DiferenciaEnContra !== "") ? $DiferenciaEnContra : 0,
                'RDocumento' => $img);

            $ID = $this->resource_model->onAction('Dispersion', $data, 'save', 0);
            $data = array('Estatus' => 'DISPERSADA');
            $this->resource_model->onAction('Transmision', $data, 'update', array('ID', $IDTransmision));

            if (isset($_FILES["RDocumentoFileD"]["name"])) {
                if (!file_exists('uploads/Dispersiones/Scan')) {
                    mkdir('uploads/Dispersiones/Scan', 0777, true);
                }
                if (!file_exists('uploads/Dispersiones/Scan/' . $NFideicomisoT . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas)) {
                    mkdir('uploads/Dispersiones/Scan/' . $NFideicomisoT . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas, 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], 'uploads/Dispersiones/Scan/' . $NFideicomisoT . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = base_url() . 'uploads/Dispersiones/Scan/' . $NFideicomisoT . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]);
                    $data = array(
                        'RDocumento' => $img
                    );
                    $this->resource_model->onAction('Dispersion', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }

            $to = "ing.giovanniflores93@gmail.com, orico09@me.com, recepcion@rabina.com.mx, areatecnica@rabina.com.mx, administrativo@rabina.com.mx";
            $subject = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
            $message = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA DISPERSADO UNA VIVIENDA, # DE TRANSACCION: " . $ID . "</p>
                        <p>PROYECTO: $NFideicomisoT</p>
                        <p>MANZANA: $Manzana </p>
                        <p>LOTE: $Lotes</p>
                        <p>NUMERO: $Viviendas</p>
                        <p>FECHA DE NOTIFICACIÓN: " . strtoupper(Date('d-m-Y h:i:s a')) . "</p>
                            <img src=\"" . $img . "\" width=\"100%\" height=\"100%\"/>
                        </body>
                        </html>";
// Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
            $headers .= 'From: sistema@rabina.com.mx ' . "\r\n";
            mail($to, $subject, $message, $headers);
        } catch (Exception $exc) {
            
        }
    }

    public function onCancel() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO');
            $this->resource_model->onAction('Transmision', $data, 'update', array('ID', $ID));
            $this->resource_model->onAction('Dispersion', $data, 'update', array('IdTransmision', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateDispersion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $img = base_url() . 'uploads/Dispersiones/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]);
            $data = array();
            if (isset($FechaNotDis) && $FechaNotDis !== '') {
                $data['FechaNotDis'] = $FechaNotDis;
            }
            if (isset($FechaNotRabina) && $FechaNotRabina !== '') {
                $data['FechaNotRabina'] = $FechaNotRabina;
            }
            if (isset($NombreNotif) && $NombreNotif !== '') {
                $data['NombreNotif'] = $NombreNotif;
            }
            if (isset($NombreNotifRabina) && $NombreNotifRabina !== '') {
                $data['NombreNotifRabina'] = $NombreNotifRabina;
            }
            if (isset($MontoFideicomiso) && $MontoFideicomiso !== '') {
                $data['MontoFideicomiso'] = $MontoFideicomiso;
            }
            if (isset($Montofideicomitente) && $Montofideicomitente !== '') {
                $data['Montofideicomitente'] = $Montofideicomitente;
            }
            if (isset($MontofideicomitenteRabina) && $MontofideicomitenteRabina !== '') {
                $data['MontofideicomitenteRabina'] = $MontofideicomitenteRabina;
            }
            if (isset($FechaDispersion) && $FechaDispersion !== '') {
                $data['FechaDispersion'] = $FechaDispersion;
            }
            if (isset($CantidadDispersada) && $CantidadDispersada !== '') {
                $data['CantidadDispersada'] = $CantidadDispersada;
            }
            if (isset($CuentaDispersion) && $CuentaDispersion !== '') {
                $data['CuentaDispersion'] = $CuentaDispersion;
            }
            if (isset($ReferenciaTran) && $ReferenciaTran !== '') {
                $data['ReferenciaTran'] = $ReferenciaTran;
            }
            if (isset($Observaciones) && $Observaciones !== '') {
                $data['Observaciones'] = $Observaciones;
            }
            $this->resource_model->onAction('Dispersion', $data, 'update', array('ID', $ID));
            if (isset($_FILES["RDocumentoFileD"]["name"])) {
                if (!file_exists('uploads/Dispersiones/Scan')) {
                    mkdir('uploads/Dispersiones/Scan', 0777, true);
                }
                if (!file_exists('uploads/Dispersiones/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas)) {
                    mkdir('uploads/Dispersiones/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas, 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], 'uploads/Dispersiones/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = base_url() . 'uploads/Dispersiones/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]);
                    $data = array(
                        'RDocumento' => $img
                    );
                    $this->resource_model->onAction('Dispersion', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO ACTUALIZAR EL ARCHIVO";
                }
            }
            $para = "ing.giovanniflores93@gmail.com, orico09@me.com, recepcion@rabina.com.mx, areatecnica@rabina.com.mx, administrativo@rabina.com.mx";
            $asunto = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
            $mensaje = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA MODIFICADO UNA DISPERSIÓN</p>
                        <p>PROYECTO: $NFideicomiso</p>
                        <p>MANZANA: $Manzana </p>
                        <p>LOTE: $Lotes</p>
                        <p>NUMERO: $Viviendas</p>
                        <p>FECHA DE NOTIFICACIÓN: " . strtoupper(Date('d-m-Y h:i:s a')) . "</p>
                            <img src=\"" . $img . "\" width=\"100%\" height=\"100%\"/>
                        </body>
                        </html>";
//            $this->resource_model->onActionEmail($para, $asunto, $mensaje);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onBusquedaEspecifica() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->onBusquedaEspecifica($Proyecto, $FechaNotI, $FechaNotF);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onBusquedaEspecificaXSuma() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->onBusquedaEspecificaXSuma($Proyecto, $FechaNotI, $FechaNotF);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onPagoDispersado() {
        try {
            extract(filter_input_array(INPUT_POST));
            $img = base_url() . 'uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . $_FILES["RDocumentoFileD"]["name"];

            $data = array(
                'IdTransmision' => $IdTransmision,
                'IdDispersion' => $IdDispersion,
                'FechaDispersion' => $FechaDispersion,
                'CantidadDispersada' => $CantidadDispersada,
                'CuentaDispersion' => $CuentaDispersion,
                'Referencia' => $ReferenciaTran,
                'Observaciones' => strtoupper($Observaciones),
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/Y h:i:s a'));

            $ID = $this->resource_model->onAction('PagosXDispersion', $data, 'save', 0);

            if (isset($_FILES["RDocumentoFileD"]["name"])) {
                if (!file_exists('uploads/DispersionesPagadas/Scan')) {
                    mkdir('uploads/DispersionesPagadas/Scan', 0777, true);
                }
                if (!file_exists('uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas)) {
                    mkdir('uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas, 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], 'uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = base_url() . 'uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . ($_FILES["RDocumentoFileD"]["name"]);
                    $data = array(
                        'rDocumento' => $img
                    );
                    $this->resource_model->onAction('PagosXDispersion', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }

            $data = array(
                'FechaDispersion' => $FechaDispersion,
                'CantidadDispersada' => $CantidadDispersada,
                'CuentaDispersion' => $CuentaDispersion,
                'ReferenciaTran' => $ReferenciaTran);

            $ID = $this->resource_model->onAction('Dispersion', $data, 'update', array('ID', $IdDispersion));

            $para = "ing.giovanniflores93@gmail.com";
            $asunto = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
            $mensaje = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA INGRESADO UN PAGO EN UNA DISPERSION: " . $ID . "</p>
                        <p>PROYECTO: $NFideicomiso</p>
                        <p>MANZANA: $Manzana </p>
                        <p>LOTE: $Lotes</p>
                        <p>NUMERO: $Viviendas</p>
                        <p>FECHA DE NOTIFICACIÓN: " . strtoupper(Date('d-m-Y h:i:s a')) . "</p>
                            <img src=\"" . $img . "\" width=\"100%\" height=\"100%\"/>
                        </body>
                        </html>";
//            $this->resource_model->onActionEmail($para, $asunto, $mensaje);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdatePagoDispersado() {
        try {
            extract(filter_input_array(INPUT_POST));
            $img = base_url() . 'uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . $_FILES["RDocumentoFileD"]["name"];

            $data = array(
                'FechaDispersion' => $FechaDispersion,
                'CantidadDispersada' => $CantidadDispersada,
                'CuentaDispersion' => $CuentaDispersion,
                'Referencia' => $ReferenciaTran,
                'Observaciones' => strtoupper($Observaciones));

            $this->resource_model->onAction('PagosXDispersion', $data, 'update', array('ID', $ID));

            if (isset($_FILES["RDocumentoFileD"]["name"])) {
                if (!file_exists('uploads/DispersionesPagadas/Scan')) {
                    mkdir('uploads/DispersionesPagadas/Scan', 0777, true);
                }
                if (!file_exists('uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas)) {
                    mkdir('uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas, 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], 'uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = base_url() . 'uploads/DispersionesPagadas/Scan/' . $NFideicomiso . '/' . $Manzana . '/' . $Lotes . '/' . $Viviendas . '/' . ($_FILES["RDocumentoFileD"]["name"]);
                    $data = array(
                        'rDocumento' => $img
                    );
                    $this->resource_model->onAction('PagosXDispersion', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }



            $para = "ing.giovanniflores93@gmail.com";
            $asunto = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
            $mensaje = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA INGRESADO UN PAGO EN UNA DISPERSION: " . $ID . "</p>
                        <p>PROYECTO: $NFideicomiso</p>
                        <p>MANZANA: $Manzana </p>
                        <p>LOTE: $Lotes</p>
                        <p>NUMERO: $Viviendas</p>
                        <p>FECHA DE NOTIFICACIÓN: " . strtoupper(Date('d-m-Y h:i:s a')) . "</p>
                            <img src=\"" . $img . "\" width=\"100%\" height=\"100%\"/>
                        </body>
                        </html>";
//            $this->resource_model->onActionEmail($para, $asunto, $mensaje);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelPagoDispersion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => "INACTIVO");
//            var_dump(filter_input_array(INPUT_POST));
//            $data = $this->transmisiones_model->getPagosXDispersionByIDSF($ID);
            $this->resource_model->onAction('PagosXDispersion', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPagosXDispersionByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getPagosXDispersionByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPagosXDispersionByIDSF() {
        try {
            $data = $this->transmisiones_model->getPagosXDispersionByIDSF($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteDispersiones() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 10, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 550; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total = 0.0;
            $total_pago_de_terreno = 0.0;
            $total_pago_de_rendimientos = 0.0;
            $total_de_ingreso = 0.0;
            $total_de_cantidad_dispersada = 0.0;

            $top = 0;
            $rows = $this->transmisiones_model->getReporteDispersiones($PROYECTO, $INICIO, $FIN);
            $pdf->SetY(15);
            $pdf->SetX(130);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(50, 10, utf8_decode($PROYECTOT), 0, 1);
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, strtoupper(DATE('d/m/Y h:i:s a')), 0, 0);
            $pdf->SetY(25);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetTextColor(4, 71, 136);
            $pdf->SetFont('Arial', '', 16);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', '', 15);
            $pdf->Cell(50, 10, utf8_decode("ACUMULADO DE DISPERSIONES"), 0, 0);
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(38);
            $pdf->SetX(19);
//            $pdf->Cell(/* X */200, 0, "FECHA", 0, 0, 'L'); 
            $pdf->MultiCell(25, 3, utf8_decode("FECHA DISPERSIÓN"));
            $pdf->SetY(40);
            $pdf->SetX(45);
            $pdf->Cell(/* X */300, 0, "ESTATUS", 0, 0, 'L');
//            $pdf->SetX(85);
//            $pdf->Cell(/* X */400, 0, "ORDEN DE COMPRA", 0, 1, 'L');
            $pdf->SetX(75);
            $pdf->Cell(/* X */400, 0, "PROYECTO", 0, 0, 'L');
            $pdf->SetX(100);
            $pdf->Cell(/* X */500, 0, "ADQUIRIENTE", 0, 0, 'L');
            $pdf->SetX(135);
            $pdf->Cell(/* X */500, 0, "MANZANA", 0, 0, 'L');
            $pdf->SetX(150);
            $pdf->Cell(/* X */500, 0, "LOTE", 0, 0, 'L');
            $pdf->SetX(160);
            $pdf->Cell(/* X */500, 0, "NUMERO", 0, 0, 'L');
            $pdf->SetY(38);
            $pdf->SetX(177);
//            $pdf->Cell(/* X */500, 0, "PAGO DE TERRENO", 0, 1, 'L');
            $pdf->MultiCell(16, 3, "PAGO DE TERRENO");
            $pdf->SetFont('Arial', 'B', 5.5);
            $pdf->SetY(38);
            $pdf->SetX(200);
            $pdf->MultiCell(17, 3, "PAGO DE RENDIMIENTOS");
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(38);
            $pdf->SetX(221);
            $pdf->MultiCell(20, 3, "TOTAL DE INGRESO");
            $pdf->SetY(38);
            $pdf->SetX(245);
            $pdf->MultiCell(20, 3, "CANTIDAD DISPERSADA");
            $pdf->SetFont('Arial', '', 9);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetY(45);
            if ($top > $page_height) {
                $pdf->AddPage();
                $top = 0;
            }
//            for ($index = 0; $index < 1000; $index++) {
            foreach ($rows as $row) {
                if ($top > $page_height) {
                    $page_height = 700;
                    $pdf->AddPage();
                    $top = 0;
                }
                $pdf->Cell(10, 1, "", 0, 1, 'L');
                $pdf->SetX(20);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(10, 5, $row->{"FECHA DISPERSION"}, 0, 0, 'L');
                $pdf->SetX(40);
                $pdf->SetFont('Arial', 'B', 6);
                $pdf->Cell(10, 5, "DISPERSION CON PAGOS", 0, 0, 'L');
                $pdf->SetX(75);
                $pdf->Cell(10, 5, $row->PROYECTO, 0, 0, 'L');
                $Y = $pdf->GetY();
                $pdf->SetX(95);
                $pdf->SetFont('Arial', 'B', 5);
//                $pdf->Cell(10, 5, $row->ADQUIRENTE, 0, 0, 'L');
                $txt_adquiriente = $row->ADQUIRENTE;
                if (strlen($txt_adquiriente) > 40) {
                    $pdf->SetFont('Arial', 'B', 4.5);
                    $pdf->MultiCell(40, 3, strtoupper(utf8_decode($row->ADQUIRENTE)));
                    $top += 25;
                } else {
                    $pdf->MultiCell(40, 3, strtoupper(utf8_decode($row->ADQUIRENTE)));
                    $top += 20;
                }
                $YY = $pdf->GetY();

                $pdf->SetY($Y);
                $pdf->SetX(140);
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->Cell(10, 5, $row->MANZANA, 0, 0, 'L');
                $pdf->SetX(153);
                $pdf->Cell(10, 5, $row->LOTE, 0, 0, 'L');
                $pdf->SetX(165);
                $pdf->Cell(10, 5, $row->NUMERO, 0, 0, 'L');
                $pdf->SetX(177);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"PAGO DE TERRENO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(200);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"PAGO DE RENDIMIENTOS"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(223);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"TOTAL DE INGRESO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(246);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"CANTIDAD DISPERSADA"}, 2, '.', ', '), 0, 0, 'L');

                $pdf->SetY($YY);
                $pdf->Cell(10, 1, "", 0, 1, 'L');
                $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());


                $total_pago_de_terreno += $row->{"PAGO DE TERRENO"};
                $total_pago_de_rendimientos += $row->{"PAGO DE RENDIMIENTOS"};
                $total_de_ingreso += $row->{"TOTAL DE INGRESO"};
                $total_de_cantidad_dispersada += $row->{"CANTIDAD DISPERSADA"};
            }


//            }
            $pdf->SetDrawColor(0, 0, 0);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetFont('Arial', 'B', 6.5);
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, (count($rows) == 1) ? "1 REGISTRO" : count($rows) . " REGISTROS", 0, 0, 'L');
            $pdf->SetX(140);
            $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 0, 'L');
            $pdf->SetX(177);
            $pdf->SetTextColor(183, 28, 28);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_terreno, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(200);
            $pdf->SetTextColor(230, 81, 0);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_rendimientos, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(223);
            $pdf->SetTextColor(51, 105, 30);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_ingreso, 2, '.', ', '), 0, 0, 'L');

            $pdf->SetX(246);
            $pdf->SetTextColor(1, 87, 155);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_cantidad_dispersada, 2, '.', ', '), 0, 1, 'L');

            $top += 20;
            $pdf->SetFont('Arial', '', 10);
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales', 0777, true);
            }
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales/')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales/', 0777, true);
            }
            $url = 'uploads/Transmisiones/AcumuladosGenerales/ACUMULADO_DISPERSIONES_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteDispersionesXProyectoYEtapaXIncremento() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 10, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 550; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total = 0.0;
            $total_pago_de_terreno = 0.0;
            $total_pago_de_rendimientos = 0.0;
            $total_de_ingreso = 0.0;
            $total_de_cantidad_dispersada = 0.0;
            $total_a_favor = 0.0;
            $total_en_contra = 0.0;
            $incremento = 0.0;

            $top = 0;
            $rows = $this->transmisiones_model->getReporteDispersionesMasIncremento($PROYECTO, $INICIO, $FIN);
            $pdf->SetY(15);
            $pdf->SetX(130);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(50, 10, utf8_decode($PROYECTOT), 0, 1);
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, strtoupper(DATE('d/m/Y h:i:s a')), 0, 0);
            $pdf->SetY(25);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetTextColor(4, 71, 136);
            $pdf->SetFont('Arial', '', 16);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', '', 15);
            $pdf->Cell(50, 10, utf8_decode("ACUMULADO DE DISPERSIONES"), 0, 0);
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(38);
            $pdf->SetX(15);
            $pdf->MultiCell(25, 3, utf8_decode("FECHA DISPERSIÓN"));
            $pdf->SetY(40);
            $pdf->SetX(40);
            $pdf->Cell(/* X */300, 0, "ESTATUS", 0, 0, 'L');
            $pdf->SetX(75);
//            $pdf->Cell(/* X */400, 0, "PROYECTO", 0, 0, 'L');
            $pdf->Cell(/* X */500, 0, "ADQUIRIENTE", 0, 0, 'L');
            $pdf->SetX(110);
            $pdf->Cell(/* X */500, 0, "MANZANA", 0, 0, 'L');
            $pdf->SetX(128);
            $pdf->Cell(/* X */500, 0, "LOTE", 0, 0, 'L');
            $pdf->SetX(140);
            $pdf->Cell(/* X */500, 0, "NUMERO", 0, 0, 'L');
            $pdf->SetY(38);
            $pdf->SetX(155);
            $pdf->MultiCell(16, 3, "PAGO DE TERRENO");
            $pdf->SetFont('Arial', 'B', 5.5);
            $pdf->SetY(38);
            $pdf->SetX(177);
            $pdf->MultiCell(17, 3, "PAGO DE RENDIMIENTOS");
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(38);
            $pdf->SetX(200);
            $pdf->MultiCell(15, 3, "TOTAL DE INGRESO");
            $pdf->SetY(38);
            $pdf->SetX(221);
            $pdf->MultiCell(20, 3, "CANTIDAD DISPERSADA");
            $pdf->SetY(38);
            $pdf->SetX(242);
            $pdf->MultiCell(20, 3, "DIFERENCIA A FAVOR");
            $pdf->SetY(38);
            $pdf->SetX(265);
            $pdf->MultiCell(20, 3, "DIFERENCIA EN CONTRA");
            $pdf->SetFont('Arial', '', 9);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetY(45);
            if ($top > $page_height) {
                $pdf->AddPage();
                $top = 0;
            }
//            for ($index = 0; $index < 1000; $index++) {
            foreach ($rows as $row) {
                if ($top > $page_height) {
                    $page_height = 650;
                    $pdf->AddPage();
                    $top = 0;
                }
                $pdf->Cell(10, 1, "", 0, 1, 'L');
                $pdf->SetX(15);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(10, 5, $row->{"FECHA DISPERSION"}, 0, 0, 'L');
                $pdf->SetX(37);
                $pdf->SetFont('Arial', 'B', 6);
                $pdf->Cell(10, 5, "DISPERSION CON PAGOS", 0, 0, 'L');
                $pdf->SetX(72);
//                $pdf->Cell(10, 5, $row->PROYECTO, 0, 0, 'L');
                $Y = $pdf->GetY();
                $pdf->SetFont('Arial', 'B', 5);
                $txt_adquiriente = $row->ADQUIRENTE;
                if (strlen($txt_adquiriente) > 40) {
                    $pdf->SetFont('Arial', 'B', 4.5);
                    $pdf->MultiCell(40, 3, strtoupper(utf8_decode($row->ADQUIRENTE)));
                    $top += 25;
                } else {
                    $pdf->MultiCell(40, 3, strtoupper(utf8_decode($row->ADQUIRENTE)));
                    $top += 20;
                }
                $YY = $pdf->GetY();

                $pdf->SetY($Y);
                $pdf->SetX(118);
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->Cell(10, 5, $row->MANZANA, 0, 0, 'L');
                $pdf->SetX(130);
                $pdf->Cell(10, 5, $row->LOTE, 0, 0, 'L');
                $pdf->SetX(143);
                $pdf->Cell(10, 5, $row->NUMERO, 0, 0, 'L');
                $pdf->SetX(155);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"PAGO DE TERRENO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(177);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"PAGO DE RENDIMIENTOS"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(200);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"TOTAL DE INGRESO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(223);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"CANTIDAD DISPERSADA"}, 2, '.', ', '), 0, 0, 'L');
                if ($row->{"DIFERENCIA A FAVOR"} > 0) {
                    $pdf->SetTextColor(51, 105, 30);
                } else {
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->SetX(245);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"DIFERENCIA A FAVOR"}, 2, '.', ', '), 0, 0, 'L');
                if ($row->{"DIFERENCIA EN CONTRA"} > 0) {
                    $pdf->SetTextColor(183, 28, 28);
                } else {
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->SetX(265);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"DIFERENCIA EN CONTRA"}, 2, '.', ', '), 0, 0, 'L');

                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetY($YY);
                $pdf->Cell(10, 1, "", 0, 1, 'L');
                $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());


                $total_pago_de_terreno += $row->{"PAGO DE TERRENO"};
                $total_pago_de_rendimientos += $row->{"PAGO DE RENDIMIENTOS"};
                $total_de_ingreso += $row->{"TOTAL DE INGRESO"};
                $total_de_cantidad_dispersada += $row->{"CANTIDAD DISPERSADA"};
                $total_a_favor += $row->{"DIFERENCIA A FAVOR"};
                $total_en_contra += $row->{"DIFERENCIA EN CONTRA"};
                $incremento += $row->INCREMENTO;
            }
            $top += 20;

            if ($top > $page_height) {
                $page_height = 650;
                $pdf->AddPage();
                $top = 0;
            }
            $pdf->SetDrawColor(0, 0, 0);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetFont('Arial', 'B', 6.5);
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, (count($rows) == 1) ? "1 REGISTRO" : count($rows) . " REGISTROS", 0, 1, 'L');
            
            
            $top += 80;

            if ($top > $page_height) {
                $page_height = 650;
                $pdf->AddPage();
                $top = 0;
            }
            $pdf->SetFont('Arial', 'B', 20);
            $pdf->SetX(115);
            $pdf->Cell(/* X */10, 8, "TOTALES ACUMULADOS", 0, 1, 'L');
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $pdf->SetX(15);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetTextColor(183, 28, 28);
            $YX = $pdf->GetY();
            $pdf->Cell(/* X */10, 5, "TOTAL EN PAGOS DE TERRENO", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_terreno, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);
            $pdf->SetX(80);
            $pdf->SetTextColor(230, 81, 0);
            $pdf->Cell(/* X */10, 5, "TOTAL EN PAGO DE RENDIMIENTOS", 0, 1, 'L');
            $pdf->SetX(85);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_rendimientos, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(160);
            $pdf->SetTextColor(51, 105, 30);
            $pdf->Cell(/* X */10, 5, "TOTAL DE INGRESO", 0, 1, 'L');
            $pdf->SetX(165);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_ingreso, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(225);
            $pdf->SetTextColor(1, 87, 155);
            $pdf->Cell(/* X */10, 5, "TOTAL DISPERSADO", 0, 1, 'L');
            $pdf->SetX(230);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_cantidad_dispersada, 2, '.', ', '), 0, 1, 'L');
 
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $YX = $pdf->GetY();
            $pdf->SetX(15);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(/* X */10, 5, "TOTAL A FAVOR", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_a_favor, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(50);
            $pdf->Cell(/* X */10, 5, "TOTAL EN CONTRA", 0, 1, 'L');
            $pdf->SetX(55);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_en_contra, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(90);
            $pdf->Cell(/* X */10, 5, "TOTAL DE DIFERENCIAS", 0, 1, 'L');
            $pdf->SetX(95);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_a_favor - $total_en_contra, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(140);
            $pdf->Cell(/* X */10, 5, "INCREMENTOS", 0, 1, 'L');
            $pdf->SetX(140);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($incremento, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(170);
            $pdf->Cell(/* X */10, 5, "TOTAL PAGADO(INCREMENTOS) ", 0, 1, 'L');
            $pdf->SetX(175);
            $pdf->Cell(/* X */10, 8, "$ " . number_format(($total_de_cantidad_dispersada + $incremento), 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(230);
            $pdf->Cell(/* X */10, 5, "TOTAL PAGADO (DIFERENCIAS)", 0, 1, 'L');
            $pdf->SetX(235);
            $pdf->Cell(/* X */10, 8, "$ " . number_format(($total_de_cantidad_dispersada + $incremento) + ($total_a_favor - $total_en_contra), 2, '.', ', '), 0, 0, 'L');
 
            $pdf->SetFont('Arial', '', 10);
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales', 0777, true);
            }
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales/')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales/', 0777, true);
            }
            $url = 'uploads/Transmisiones/AcumuladosGenerales/ACUMULADO_DISPERSIONES_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }


    public function getReporteDispersionesXProyectoYEtapaXIncrementoTotales() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 10, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 550; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total = 0.0;
            $total_pago_de_terreno = 0.0;
            $total_pago_de_rendimientos = 0.0;
            $total_de_ingreso = 0.0;
            $total_de_cantidad_dispersada = 0.0;
            $total_a_favor = 0.0;
            $total_en_contra = 0.0;
            $incremento = 0.0;

            $top = 0;
            $rows = $this->transmisiones_model->getReporteDispersionesMasIncremento($PROYECTO, $INICIO, $FIN);
            $pdf->SetY(15);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', '', 40);
            $pdf->Cell(50, 10, utf8_decode($PROYECTOT), 0, 1);
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, strtoupper(DATE('d/m/Y h:i:s a')), 0, 0);
            $pdf->SetY(25);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetTextColor(4, 71, 136);
            $pdf->SetFont('Arial', '', 16);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 15);
            $pdf->Cell(50, 10, utf8_decode("TOTALES ACUMULADOS"), 0, 0);
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetTextColor(0, 0, 0); 

            $pdf->SetY(45);
            if ($top > $page_height) {
                $pdf->AddPage();
                $top = 0;
            } 
            foreach ($rows as $row) {  
                $total_pago_de_terreno += $row->{"PAGO DE TERRENO"};
                $total_pago_de_rendimientos += $row->{"PAGO DE RENDIMIENTOS"};
                $total_de_ingreso += $row->{"TOTAL DE INGRESO"};
                $total_de_cantidad_dispersada += $row->{"CANTIDAD DISPERSADA"};
                $total_a_favor += $row->{"DIFERENCIA A FAVOR"};
                $total_en_contra += $row->{"DIFERENCIA EN CONTRA"};
                $incremento += $row->INCREMENTO;
            } 
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $pdf->SetX(15);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetTextColor(183, 28, 28);
            $YX = $pdf->GetY();
            $pdf->Cell(/* X */10, 5, "TOTAL EN PAGOS DE TERRENO", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_terreno, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);
            $pdf->SetX(80);
            $pdf->SetTextColor(230, 81, 0);
            $pdf->Cell(/* X */10, 5, "TOTAL EN PAGO DE RENDIMIENTOS", 0, 1, 'L');
            $pdf->SetX(85);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_rendimientos, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(160);
            $pdf->SetTextColor(51, 105, 30);
            $pdf->Cell(/* X */10, 5, "TOTAL DE INGRESO", 0, 1, 'L');
            $pdf->SetX(165);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_ingreso, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(225);
            $pdf->SetTextColor(1, 87, 155);
            $pdf->Cell(/* X */10, 5, "TOTAL DISPERSADO", 0, 1, 'L');
            $pdf->SetX(230);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_cantidad_dispersada, 2, '.', ', '), 0, 1, 'L');

            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $YX = $pdf->GetY();
            $pdf->SetX(15);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(/* X */10, 5, "TOTAL A FAVOR", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_a_favor, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(50);
            $pdf->Cell(/* X */10, 5, "TOTAL EN CONTRA", 0, 1, 'L');
            $pdf->SetX(55);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_en_contra, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(90);
            $pdf->Cell(/* X */10, 5, "TOTAL DE DIFERENCIAS", 0, 1, 'L');
            $pdf->SetX(95);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_a_favor - $total_en_contra, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(145);
            $pdf->Cell(/* X */10, 5, "INCREMENTO POR AJUSTE DE PRECIO DEL TERRENO", 0, 1, 'L');
            $pdf->SetX(150);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($incremento, 2, '.', ', '), 0, 1, 'L');
         

            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $YX = $pdf->GetY();
            $pdf->SetX(15);
            $pdf->Cell(/* X */10, 5, "TOTAL PAGADO (POR AJUSTE DE PRECIO)(DIFERENCIAS)", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format(($total_de_cantidad_dispersada + $incremento) + ($total_a_favor - $total_en_contra), 2, '.', ', '), 0, 0, 'L'); 

            $pdf->SetY($YX);
            $pdf->SetX(145);
            $pdf->Cell(/* X */10, 5, "TOTAL PAGADO(AJUSTE DE PRECIO) ", 0, 1, 'L');
            $pdf->SetX(150);
            $pdf->Cell(/* X */10, 8, "$ " . number_format(($total_de_cantidad_dispersada + $incremento), 2, '.', ', '), 0, 1, 'L');

            $top += 20;
            $pdf->SetFont('Arial', '', 10);
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales', 0777, true);
            }
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales/')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales/', 0777, true);
            }
            $url = 'uploads/Transmisiones/AcumuladosGenerales/ACUMULADO_DISPERSIONES_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getReporteDispersionesXProyectoYEtapa() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 10, 15/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $height_of_cell = 60; // mm
            $page_height = 550; // mm (portrait letter)
            $page_width = 180; // mm (portrait letter)
            $bottom_margin = 0; // mm

            $total = 0.0;
            $total_pago_de_terreno = 0.0;
            $total_pago_de_rendimientos = 0.0;
            $total_de_ingreso = 0.0;
            $total_de_cantidad_dispersada = 0.0;
            $total_a_favor = 0.0;
            $total_en_contra = 0.0;

            $top = 0;
            $rows = $this->transmisiones_model->getReporteDispersiones($PROYECTO, $INICIO, $FIN);
            $pdf->SetY(15);
            $pdf->SetX(130);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(50, 10, utf8_decode($PROYECTOT), 0, 1);
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1);
            $pdf->SetX(230);
            $pdf->Cell(25, 5, strtoupper(DATE('d/m/Y h:i:s a')), 0, 0);
            $pdf->SetY(25);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetTextColor(4, 71, 136);
            $pdf->SetFont('Arial', '', 16);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', '', 15);
            $pdf->Cell(50, 10, utf8_decode("ACUMULADO DE DISPERSIONES"), 0, 0);
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(38);
            $pdf->SetX(15);
            $pdf->MultiCell(25, 3, utf8_decode("FECHA DISPERSIÓN"));
            $pdf->SetY(40);
            $pdf->SetX(40);
            $pdf->Cell(/* X */300, 0, "ESTATUS", 0, 0, 'L');
            $pdf->SetX(75);
//            $pdf->Cell(/* X */400, 0, "PROYECTO", 0, 0, 'L');
            $pdf->Cell(/* X */500, 0, "ADQUIRIENTE", 0, 0, 'L');
            $pdf->SetX(110);
            $pdf->Cell(/* X */500, 0, "MANZANA", 0, 0, 'L');
            $pdf->SetX(128);
            $pdf->Cell(/* X */500, 0, "LOTE", 0, 0, 'L');
            $pdf->SetX(140);
            $pdf->Cell(/* X */500, 0, "NUMERO", 0, 0, 'L');
            $pdf->SetY(38);
            $pdf->SetX(155);
            $pdf->MultiCell(16, 3, "PAGO DE TERRENO");
            $pdf->SetFont('Arial', 'B', 5.5);
            $pdf->SetY(38);
            $pdf->SetX(177);
            $pdf->MultiCell(17, 3, "PAGO DE RENDIMIENTOS");
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(38);
            $pdf->SetX(200);
            $pdf->MultiCell(15, 3, "TOTAL DE INGRESO");
            $pdf->SetY(38);
            $pdf->SetX(221);
            $pdf->MultiCell(20, 3, "CANTIDAD DISPERSADA");
            $pdf->SetY(38);
            $pdf->SetX(242);
            $pdf->MultiCell(20, 3, "DIFERENCIA A FAVOR");
            $pdf->SetY(38);
            $pdf->SetX(265);
            $pdf->MultiCell(20, 3, "DIFERENCIA EN CONTRA");
            $pdf->SetFont('Arial', '', 9);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetY(45);
            if ($top > $page_height) {
                $pdf->AddPage();
                $top = 0;
            }
//            for ($index = 0; $index < 1000; $index++) {
            foreach ($rows as $row) {
                if ($top > $page_height) {
                    $page_height = 650;
                    $pdf->AddPage();
                    $top = 0;
                }
                $pdf->Cell(10, 1, "", 0, 1, 'L');
                $pdf->SetX(15);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(10, 5, $row->{"FECHA DISPERSION"}, 0, 0, 'L');
                $pdf->SetX(37);
                $pdf->SetFont('Arial', 'B', 6);
                $pdf->Cell(10, 5, "DISPERSION CON PAGOS", 0, 0, 'L');
                $pdf->SetX(72);
//                $pdf->Cell(10, 5, $row->PROYECTO, 0, 0, 'L');
                $Y = $pdf->GetY();
                $pdf->SetFont('Arial', 'B', 5);
                $txt_adquiriente = $row->ADQUIRENTE;
                if (strlen($txt_adquiriente) > 40) {
                    $pdf->SetFont('Arial', 'B', 4.5);
                    $pdf->MultiCell(40, 3, strtoupper(utf8_decode($row->ADQUIRENTE)));
                    $top += 25;
                } else {
                    $pdf->MultiCell(40, 3, strtoupper(utf8_decode($row->ADQUIRENTE)));
                    $top += 20;
                }
                $YY = $pdf->GetY();

                $pdf->SetY($Y);
                $pdf->SetX(118);
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->Cell(10, 5, $row->MANZANA, 0, 0, 'L');
                $pdf->SetX(130);
                $pdf->Cell(10, 5, $row->LOTE, 0, 0, 'L');
                $pdf->SetX(143);
                $pdf->Cell(10, 5, $row->NUMERO, 0, 0, 'L');
                $pdf->SetX(155);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"PAGO DE TERRENO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(177);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"PAGO DE RENDIMIENTOS"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(200);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"TOTAL DE INGRESO"}, 2, '.', ', '), 0, 0, 'L');
                $pdf->SetX(223);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"CANTIDAD DISPERSADA"}, 2, '.', ', '), 0, 0, 'L');
                if ($row->{"DIFERENCIA A FAVOR"} > 0) {
                    $pdf->SetTextColor(51, 105, 30);
                } else {
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->SetX(245);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"DIFERENCIA A FAVOR"}, 2, '.', ', '), 0, 0, 'L');
                if ($row->{"DIFERENCIA EN CONTRA"} > 0) {
                    $pdf->SetTextColor(183, 28, 28);
                } else {
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->SetX(265);
                $pdf->Cell(10, 5, "$ " . number_format($row->{"DIFERENCIA EN CONTRA"}, 2, '.', ', '), 0, 0, 'L');

                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetY($YY);
                $pdf->Cell(10, 1, "", 0, 1, 'L');
                $pdf->Line(/* Izq-X */15, /* Top-Y */ $pdf->GetY(), /* Largo */ 275, $pdf->GetY());


                $total_pago_de_terreno += $row->{"PAGO DE TERRENO"};
                $total_pago_de_rendimientos += $row->{"PAGO DE RENDIMIENTOS"};
                $total_de_ingreso += $row->{"TOTAL DE INGRESO"};
                $total_de_cantidad_dispersada += $row->{"CANTIDAD DISPERSADA"};
                $total_a_favor += $row->{"DIFERENCIA A FAVOR"};
                $total_en_contra += $row->{"DIFERENCIA EN CONTRA"};
            }

            if ($top > $page_height) {
                $page_height = 650;
                $pdf->AddPage();
                $top = 0;
            }
            $pdf->SetDrawColor(0, 0, 0);
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());

            $pdf->SetFont('Arial', 'B', 6.5);
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, (count($rows) == 1) ? "1 REGISTRO" : count($rows) . " REGISTROS", 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 20);
            $pdf->SetX(115);
            $pdf->Cell(/* X */10, 8, "TOTAL ACUMULADO", 0, 1, 'L');
            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $pdf->SetX(15);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetTextColor(183, 28, 28);
            $YX = $pdf->GetY();
            $pdf->Cell(/* X */10, 5, "TOTAL EN PAGOS DE TERRENO", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_terreno, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);
            $pdf->SetX(80);
            $pdf->SetTextColor(230, 81, 0);
            $pdf->Cell(/* X */10, 5, "TOTAL EN PAGO DE RENDIMIENTOS", 0, 1, 'L');
            $pdf->SetX(85);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_pago_de_rendimientos, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(160);
            $pdf->SetTextColor(51, 105, 30);
            $pdf->Cell(/* X */10, 5, "TOTAL DE INGRESO", 0, 1, 'L');
            $pdf->SetX(165);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_ingreso, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(225);
            $pdf->SetTextColor(1, 87, 155);
            $pdf->Cell(/* X */10, 5, "TOTAL DISPERSADO", 0, 1, 'L');
            $pdf->SetX(230);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_de_cantidad_dispersada, 2, '.', ', '), 0, 1, 'L');

            $pdf->Line(/* Izq-X */12, /* Top-Y */ $pdf->GetY(), /* Largo */ 280, $pdf->GetY());
            $YX = $pdf->GetY();
            $pdf->SetX(15);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(/* X */10, 5, "TOTAL A FAVOR", 0, 1, 'L');
            $pdf->SetX(20);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_a_favor, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(80);
            $pdf->Cell(/* X */10, 5, "TOTAL EN CONTRA", 0, 1, 'L');
            $pdf->SetX(82);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_en_contra, 2, '.', ', '), 0, 0, 'L');
            $pdf->SetY($YX);

            $pdf->SetX(160);
            $pdf->Cell(/* X */10, 5, "RESUMEN DE DIFERENCIAS", 0, 1, 'L');
            $pdf->SetX(165);
            $pdf->Cell(/* X */10, 8, "$ " . number_format($total_a_favor - $total_en_contra, 2, '.', ', '), 0, 0, 'L');

            $top += 20;
            $pdf->SetFont('Arial', '', 10);
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales', 0777, true);
            }
            if (!file_exists('uploads/Transmisiones/AcumuladosGenerales/')) {
                mkdir('uploads/Transmisiones/AcumuladosGenerales/', 0777, true);
            }
            $url = 'uploads/Transmisiones/AcumuladosGenerales/ACUMULADO_DISPERSIONES_' . Date('d') . '_' . Date('m') . '_' . Date('Y') . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpleados() {
        try {
            $data = $this->transmisiones_model->getEmpleados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddIncremento() {
        try {
            /* ING.GIOVANNI - CODE IMPROVEMENT APPLIED 27/03/2017 - 11:43 AM */
            $xdata = array();
            foreach (filter_input_array(INPUT_POST) as $key => $value) {
                $xdata[$key] = (isset($value) && $value !== null && $value !== '' && $value !== '0') ? strtoupper($value) : NULL;
            }
            $xdata['Registro'] = Date('d/m/Y h:i:s a');
            $xdata['Estatus'] = 'ACTIVO';
            $ID = $this->resource_model->onAction('IncrementoTerreno', $xdata, 'save', 0);

            $URL_DOC = 'uploads/IncrementosXTerrenos';
            $master_url = base_url() . $URL_DOC . '/';
            if (!file_exists($URL_DOC)) {
                mkdir($URL_DOC, 0777, true);
            }
            if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
            }
            if ($_FILES["Archivo"]["name"] !== '') {
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'URL' => ($img),
                        'CARPETA' => 'IncrementosXTerrenos',
                        'ARCHIVO' => $_FILES["Archivo"]["name"]
                    );
                    $this->resource_model->onAction('IncrementoTerreno', $data, 'update', array('ID', $ID));
                    $this->onEnviar($ID);
                }
            } else {
                print 'NO SE PUDO OBTENER EL ARCHIVO';
            }
        } catch (Exception $exc) {
            print "\n ERROR EN onAddIncremento \n";
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarIncremento() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('IncrementoTerreno', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getIncrementoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transmisiones_model->getIncrementoXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* ENVIO DE EMAIL */

    public function onEnviar($ID) {
        try {
            extract(filter_input_array(INPUT_POST));
            $Subject = "SE HA REGISTRADO UN INCREMENTO";
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DEL PAGO DE ACTUALIZACIÓN</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>PROYECTO</B></th>'
                    . '<th><B>MANZANA</B></th>'
                    . '<th><B>LOTE</B></th>'
                    . '<th><B>NUMERO</B></th>'
                    . '<th><B>ADQUIRENTE</B></th>'
                    . '<th><B>FECHA DE NOTIFICACION</B></th>'
                    . '<th><B>FECHA DE NOTIFICACION RABINA</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $ProyectoT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ManzanaT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $LoteT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Numero . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Adquirente . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaNotificacion . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaNotificacionRabina . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>NÚMERO DE OPERACIÓN DE DISPERSION DE RECURSOS</B></th>'
                    . '<th><B>FECHA DE LA DISPERSION EN CUENTA</B></th>'
                    . '<th><B>CANTIDAD DISPERSADA</B></th>'
                    . '<th><B>CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</B></th>'
                    . '<th><B>REFERENCIA DE LA TRANSFERENCIA</B></th>'
                    . '<th><B>OBSERVACIONES</B></th>'
                    . '<th><B>REGISTRO</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $NumeroDeOperacionDispersionRecursos . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $FechaDispersionCuenta . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . "$ " . number_format($NuevaCantidadDispersada, 2, '.', ', ') . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $CuentaDispersionRecurso . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $ReferenciaTransferencia . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Observaciones . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(Date('d/m/Y h:i:s a')) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onSendEmail($ID, $Subject, $bodyContent);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSendEmail($IDX, $Subject, $bodyContent) {
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
            $mail->setFrom('sistemas@rabina.com.mx', 'MENSAJE DEL SISTEMA RABINA');
            $mail->addReplyTo('sistemas@rabina.com.mx', 'NO RESPONDER');
            $mail->addAddress('sistemas@rabina.com.mx');   // Add a recipient  
            $mail->addBCC('orico09@me.com');
            $mail->addBCC('administrativo@rabina.com.mx');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('sistemarabina@gmail.com');
            $mail->addBCC('sistemas@rabina.com.mx');
            if ($_FILES["Archivo"]["name"] !== '') {
                $mail->addAttachment('uploads/IncrementosXTerrenos/' . $IDX . '/' . $_FILES["Archivo"]["name"], $_FILES["Archivo"]["name"]);
            }
            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = $Subject;
            $mail->AddEmbeddedImage('media/Rabina.png', 'RabinaLogo');

            $mail->Body = utf8_decode($bodyContent);
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

    public function onCheckNewPage($top, $page_height, $pdf) {
        try {
            if ($top > $page_height) {
                $page_height = 650;
                $pdf->AddPage();
                $top = 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
