<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlTransporte extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("resource_model");
        $this->load->model("transporte_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vTransporte');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    public function getRecords() {
        try {
            $data = $this->transporte_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstados() {
        try {
            $data = $this->transporte_model->getEstados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCiudades() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getCiudades($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getCiudadesX() {
        try { 
            $data = $this->transporte_model->getCiudadesX();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConductores() {
        try {
            $data = $this->transporte_model->getConductores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAutorizadores() {
        try {
            $data = $this->transporte_model->getAutorizadores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMantenimientos() {
        try {
            $data = $this->transporte_model->getMantenimientos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getMantenimientoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getMantenimientoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getVerificacionByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getVerificacionByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotosXMantenimientoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotosXMantenimientoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }


    public function getDocumentosXMantenimientoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentosXMantenimientoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getFotosXSolicitudByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotosXSolicitudByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentosXSolicitudByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentosXSolicitudByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getFotosXAccidenteByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotosXAccidenteByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentosXAccidenteByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentosXAccidenteByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getVerificaciones() {
        try {
            $data = $this->transporte_model->getVerificaciones();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    public function getFotosXVerificacionByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotosXVerificacionByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }


    public function getDocumentosXVerificacionByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentosXVerificacionByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAccidentes() {
        try {
            $data = $this->transporte_model->getAccidentes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getAccidenteByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getAccidenteByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSolicitudes() {
        try {
            $data = $this->transporte_model->getSolicitudes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSolicitudByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getSolicitudByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotosXTransporte() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotosXTransporte($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* SE UTILIZA PARA OBTENER LA VISTA PREVIA DEL TRANSPORTE SOLICITADO */

    public function getFotoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotoXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentosXTransporte() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentosXTransporte($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentoXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /*     * TRANSPORTE* */

    public function onAddTransporte() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Clase' => (isset($Clase) && $Clase !== '') ? $Clase : NULL,
                'Tipo' => (isset($Tipo) && $Tipo !== '') ? strtoupper($Tipo) : NULL,
                'Marca' => (isset($Marca) && $Marca !== '') ? strtoupper($Marca) : NULL,
                'Modelo' => (isset($Modelo) && $Modelo !== '') ? strtoupper($Modelo) : NULL,
                'Color' => (isset($Color) && $Color !== '') ? strtoupper($Color) : NULL,
                'Combustible' => (isset($Combustible) && $Combustible !== '') ? strtoupper($Combustible) : NULL,
                'Propietario' => (isset($Propietario) && $Propietario !== '') ? strtoupper($Propietario) : NULL,
                'Placas' => (isset($Placas) && $Placas !== '') ? strtoupper($Placas) : NULL,
                'Valor' => (isset($Valor) && $Valor !== '') ? $Valor : NULL,
                'Aseguradora' => (isset($Aseguradora) && $Aseguradora !== '') ? strtoupper($Aseguradora) : NULL,
                'Poliza' => (isset($Poliza) && $Poliza !== '') ? $Poliza : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $ID = $this->resource_model->onAction('transporte', $data, 'save', 0);
            print "\n";
            if (isset($ID)) {
                $URL_DOC = 'uploads/FotosXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnArchivo"]["name"]); $index++) {
                    if ($_FILES["btnArchivo"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnArchivo"]["tmp_name"][$index], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivo"]["name"][$index]))) {
                            $img = $master_url . $ID . '/' . $_FILES["btnArchivo"]["name"][$index];
                            $data = array(
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'FotosXTransporte',
                                'FOTO' => $_FILES["btnArchivo"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXFoto[$index])
                            );
                            $this->resource_model->onAction('fotosxtransporte', $data, 'save', 0);
                            print "FOTO #" . $index . " " . $_FILES["btnArchivo"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXFoto[$index] . " OK!";
                            print "\n";
                        }
                    }
                }

                $URL_DOC = 'uploads/DocumentosXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnDocumento"]["name"]); $index++) {
                    if ($_FILES["btnDocumento"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnDocumento"]["tmp_name"][$index], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnDocumento"]["name"][$index]))) {
                            $img = $master_url . $ID . '/' . $_FILES["btnDocumento"]["name"][$index];
                            $data = array(
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'DocumentosXTransporte',
                                'DOCUMENTO' => $_FILES["btnDocumento"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXDocumento[$index])
                            );
                            $this->resource_model->onAction('documentosxtransporte', $data, 'save', 0);
                            print "DOCUMENTO #" . $index . " " . $_FILES["btnDocumento"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXDocumento[$index] . " OK!";
                            print "\n";
                        }
                    }
                }
            }
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateTransporte() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Clase' => (isset($Clase) && $Clase !== '') ? $Clase : NULL,
                'Tipo' => (isset($Tipo) && $Tipo !== '') ? strtoupper($Tipo) : NULL,
                'Marca' => (isset($Marca) && $Marca !== '') ? strtoupper($Marca) : NULL,
                'Modelo' => (isset($Modelo) && $Modelo !== '') ? strtoupper($Modelo) : NULL,
                'Color' => (isset($Color) && $Color !== '') ? strtoupper($Color) : NULL,
                'Combustible' => (isset($Combustible) && $Combustible !== '') ? strtoupper($Combustible) : NULL,
                'Propietario' => (isset($Propietario) && $Propietario !== '') ? strtoupper($Propietario) : NULL,
                'Placas' => (isset($Placas) && $Placas !== '') ? strtoupper($Placas) : NULL,
                'Valor' => (isset($Valor) && $Valor !== '') ? $Valor : NULL,
                'Aseguradora' => (isset($Aseguradora) && $Aseguradora !== '') ? strtoupper($Aseguradora) : NULL,
                'Poliza' => (isset($Poliza) && $Poliza !== '') ? $Poliza : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL
            );
            $this->resource_model->onAction('transporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onEliminar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('transporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAgregarAdjunto() {
        try {
            extract(filter_input_array(INPUT_POST));
            if ($TIPO === '1') {
                print 'FOTO';
                $URL_DOC = 'uploads/FotosXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                var_dump($_FILES);
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdTransporte' => $ID,
                        'URL' => ($img),
                        'CARPETA' => 'FotosXTransporte',
                        'FOTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('fotosxtransporte', $data, 'save', 0);
                }
            } else {
                print 'DOCUMENTACIÓN';

                $URL_DOC = 'uploads/DocumentosXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdTransporte' => $ID,
                        'URL' => ($img),
                        'CARPETA' => 'DocumentosXTransporte',
                        'DOCUMENTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('documentosxtransporte', $data, 'save', 0);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('ESTATUS' => 'INACTIVO');
            $this->resource_model->onAction('fotosxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarDocumentoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('ESTATUS' => 'INACTIVO');
            $this->resource_model->onAction('documentosxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /*     * MANTENIMIENTO* */

    public function onAddMantenimiento() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump($_FILES);
            var_dump(filter_input_array(INPUT_POST));
            $data = array(
                'IdTransporte' => (isset($ID) && $ID !== '') ? $ID : NULL,
                'Mantenimiento' => (isset($Mantenimiento) && $Mantenimiento !== '') ? $Mantenimiento : NULL,
                'Kilometraje' => (isset($Kilometraje) && $Kilometraje !== '') ? $Kilometraje : NULL,
                'Taller' => (isset($Taller) && $Taller !== '') ? $Taller : NULL,
                'Costo' => (isset($Costo) && $Costo !== '') ? $Costo : NULL,
                'Tareas' => (isset($Tareas) && $Tareas !== '') ? $Tareas : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $IDX = $this->resource_model->onAction('transportemantenimiento', $data, 'save', 0);
            print "\n";
            if (isset($IDX)) {
                $URL_DOC = 'uploads/FotosXMantenimientoXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnArchivo"]["name"]); $index++) {
                    if ($_FILES["btnArchivo"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnArchivo"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnArchivo"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnArchivo"]["name"][$index];
                            $data = array(
                                'IdMantenimiento'=>$IDX,
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'FotosXMantenimientoXTransporte',
                                'FOTO' => $_FILES["btnArchivo"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXFoto[$index])
                            );
                            $this->resource_model->onAction('fotosxmantenimientoxtransporte', $data, 'save', 0);
                            print "FOTO #" . $index . " " . $_FILES["btnArchivo"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXFoto[$index] . " OK!";
                            print "\n";
                        }
                    }
                }

                $URL_DOC = 'uploads/DocumentosXMantenimientoXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnDocumento"]["name"]); $index++) {
                    if ($_FILES["btnDocumento"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnDocumento"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnDocumento"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnDocumento"]["name"][$index];
                            $data = array(
                                'IdMantenimiento' => $IDX,
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'DocumentosXMantenimientoXTransporte',
                                'DOCUMENTO' => $_FILES["btnDocumento"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXDocumento[$index])
                            );
                            $this->resource_model->onAction('documentosxmantenimientoxtransporte', $data, 'save', 0);
                            print "DOCUMENTO #" . $index . " " . $_FILES["btnDocumento"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXDocumento[$index] . " OK!";
                            print "\n";
                        }
                    }
                }
            }
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarMantenimiento() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('transportemantenimiento', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getDocumentoXMantenimientoID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentoXMantenimientoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getFotoXMantenimientoID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotoXMantenimientoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
 
    function onAgregarAdjuntoMantenimiento() {
        try {
            extract(filter_input_array(INPUT_POST));
            if ($TIPO === '1') {
                print 'FOTO';
                $URL_DOC = 'uploads/FotosXMantenimientoXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                var_dump($_FILES);
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdMantenimiento'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'FotosXMantenimientoXTransporte',
                        'FOTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('fotosxmantenimientoxtransporte', $data, 'save', 0);
                }
            } else {
                print 'DOCUMENTACIÓN';
                $URL_DOC = 'uploads/DocumentosXMantenimientoXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdMantenimiento'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'DocumentosXMantenimientoXTransporte',
                        'DOCUMENTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('documentosxmantenimientoxtransporte', $data, 'save', 0);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarFotoXMantenimientoID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('fotosxmantenimientoxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarDocumentoXMantenimientoID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('documentosxmantenimientoxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    /** VERIFICACIÓN * */
    public function onAddVerificacion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'IdTransporte' => (isset($ID) && $ID !== '') ? $ID : NULL,
                'AnioVerificacion' => (isset($AnioVerificacion) && $AnioVerificacion !== '') ? $AnioVerificacion : NULL,
                'Semestre' => (isset($Semestre) && $Semestre !== '') ? $Semestre : NULL,
                'FechaRealizacion' => (isset($FechaRealizacion) && $FechaRealizacion !== '') ? $FechaRealizacion : NULL,
                'LugarRealizacion' => (isset($LugarRealizacion) && $LugarRealizacion !== '') ? strtoupper($LugarRealizacion) : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );

            $IDX = $this->resource_model->onAction('transporteverificacion', $data, 'save', 0);
            print "\n";

            if (isset($IDX)) {
                $URL_DOC = 'uploads/FotosXVerificacionXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnArchivo"]["name"]); $index++) {
                    if ($_FILES["btnArchivo"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnArchivo"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnArchivo"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnArchivo"]["name"][$index];
                            $data = array(
                                'IdTransporte' => $ID,
                                'IdVerificacion'=>$IDX,
                                'URL' => ($img),
                                'CARPETA' => 'FotosXVerificacionXTransporte',
                                'FOTO' => $_FILES["btnArchivo"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXFoto[$index])
                            );
                            $this->resource_model->onAction('fotosxverificacionxtransporte', $data, 'save', 0);
                            print "FOTO #" . $index . " " . $_FILES["btnArchivo"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXFoto[$index] . " OK!";
                            print "\n";
                        }
                    }
                }

                $URL_DOC = 'uploads/DocumentosXVerificacionXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnDocumento"]["name"]); $index++) {
                    if ($_FILES["btnDocumento"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnDocumento"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnDocumento"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnDocumento"]["name"][$index];
                            $data = array(
                                'IdTransporte' => $ID,
                                'IdVerificacion'=>$IDX,
                                'URL' => ($img),
                                'CARPETA' => 'DocumentosXVerificacionXTransporte',
                                'DOCUMENTO' => $_FILES["btnDocumento"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXDocumento[$index])
                            );
                            $this->resource_model->onAction('documentosxverificacionxtransporte', $data, 'save', 0);
                            print "DOCUMENTO #" . $index . " " . $_FILES["btnDocumento"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXDocumento[$index] . " OK!";
                            print "\n";
                        }
                    }
                }
            }
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarVerificacion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('transporteverificacion', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getDocumentoXVerificacionID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentoXVerificacionID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getFotoXVerificacionID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotoXVerificacionID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAgregarAdjuntoVerificacion() {
        try {
            extract(filter_input_array(INPUT_POST));
            if ($TIPO === '1') {
                print 'FOTO';
                $URL_DOC = 'uploads/FotosXVerificacionXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                var_dump($_FILES);
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdVerificacion'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'FotosXVerificacionXTransporte',
                        'FOTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('fotosxverificacionxtransporte', $data, 'save', 0);
                }
            } else {
                print 'DOCUMENTACIÓN';
                $URL_DOC = 'uploads/DocumentosXVerificacionXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdVerificacion'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'DocumentosXVerificacionXTransporte',
                        'DOCUMENTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('documentosxverificacionxtransporte', $data, 'save', 0);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarFotoXVerificacionID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('fotosxverificacionxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarDocumentoXVerificacionID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('documentosxverificacionxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    

    /*     * ACCIDENTES* */

    public function onAddAccidente() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'IdTransporte' => (isset($ID) && $ID !== '') ? $ID : NULL,
                'FechaAccidente' => (isset($FechaAccidente) && $FechaAccidente !== '') ? $FechaAccidente : NULL,
                'HoraAccidente' => (isset($HoraAccidente) && $HoraAccidente !== '') ? $HoraAccidente : NULL,
                'Descripcion' => (isset($Descripcion) && $Descripcion !== '') ? $Descripcion : NULL,
                'Danios' => (isset($Danios) && $Danios !== '') ? $Danios : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $IDX = $this->resource_model->onAction('transporteaccidente', $data, 'save', 0);

            if (isset($IDX)) {
                $URL_DOC = 'uploads/FotosXAccidenteXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnArchivo"]["name"]); $index++) {
                    if ($_FILES["btnArchivo"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnArchivo"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnArchivo"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnArchivo"]["name"][$index];
                            $data = array(
                                'IdAccidente' => $IDX,
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'FotosXAccidenteXTransporte',
                                'FOTO' => $_FILES["btnArchivo"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXFoto[$index])
                            );
                            $this->resource_model->onAction('fotosxaccidentextransporte', $data, 'save', 0);
                            print "FOTO #" . $index . " " . $_FILES["btnArchivo"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXFoto[$index] . " OK!";
                            print "\n";
                        }
                    }
                }

                $URL_DOC = 'uploads/DocumentosXAccidenteXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnDocumento"]["name"]); $index++) {
                    if ($_FILES["btnDocumento"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnDocumento"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnDocumento"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnDocumento"]["name"][$index];
                            $data = array(
                                'IdAccidente'=>$IDX,
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'DocumentosXAccidenteXTransporte',
                                'DOCUMENTO' => $_FILES["btnDocumento"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXDocumento[$index])
                            );
                            $this->resource_model->onAction('documentosxaccidentextransporte', $data, 'save', 0);
                            print "DOCUMENTO #" . $index . " " . $_FILES["btnDocumento"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXDocumento[$index] . " OK!";
                            print "\n";
                        }
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAccidente() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('transporteaccidente', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
    public function getDocumentoXAccidenteID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentoXAccidenteID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getFotoXAccidenteID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotoXAccidenteID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onAgregarAdjuntoAccidente() {
        try {
            extract(filter_input_array(INPUT_POST));
            if ($TIPO === '1') {
                print 'FOTO';
                $URL_DOC = 'uploads/FotosXAccidenteXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                var_dump($_FILES);
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdAccidente'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'FotosXAccidenteXTransporte',
                        'FOTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('fotosxaccidentextransporte', $data, 'save', 0);
                }
            } else {
                print 'DOCUMENTACIÓN';
                $URL_DOC = 'uploads/DocumentosXAccidenteXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdAccidente'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'DocumentosXAccidenteXTransporte',
                        'DOCUMENTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('documentosxaccidentextransporte', $data, 'save', 0);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarFotoXAccidenteID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('fotosxaccidentextransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarDocumentoXAccidenteID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('documentosxaccidentextransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /*     * SOLICITUDES* */

    public function onAddSolicitud() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'IdTransporte' => (isset($ID) && $ID !== '') ? $ID : NULL,
                'Comision' => (isset($Comision) && $Comision !== '') ? strtoupper($Comision) : NULL,
                'FechaComision' => (isset($FechaComision) && $FechaComision !== '') ? $FechaComision : NULL,
                'Descripcion' => (isset($Descripcion) && $Descripcion !== '') ? strtoupper($Descripcion) : NULL,
                'EstadoDestino' => (isset($EstadoDestino) && $EstadoDestino !== '') ? $EstadoDestino : NULL,
                'CiudadDestino' => (isset($CiudadDestino) && $CiudadDestino !== '') ? $CiudadDestino : NULL,
                'LugarSalida' => (isset($LugarSalida) && $LugarSalida !== '') ? strtoupper($LugarSalida) : NULL,
                'HoraSalida' => (isset($HoraSalida) && $HoraSalida !== '') ? $HoraSalida : NULL,
                'HoraRegreso' => (isset($HoraRegreso) && $HoraRegreso !== '') ? $HoraRegreso : NULL,
                'DuracionComision' => (isset($DuracionComision) && $DuracionComision !== '') ? $DuracionComision : NULL,
                'Pasajeros' => (isset($Pasajeros) && $Pasajeros !== '') ? $Pasajeros : NULL,
                'NombresPasajeros' => (isset($NombresPasajeros) && $NombresPasajeros !== '') ? strtoupper($NombresPasajeros) : NULL,
                'Conductor' => (isset($Conductor) && $Conductor !== '') ? $Conductor : NULL,
                'Disponibilidad' => (isset($Disponibilidad) && $Disponibilidad !== '') ? $Disponibilidad : NULL,
                'EstatusSolicitud' => 'NO APROBADA',
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $IDX = $this->resource_model->onAction('transportesolicitud', $data, 'save', 0);

            if (isset($IDX)) {
                $URL_DOC = 'uploads/FotosXSolicitudXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnArchivo"]["name"]); $index++) {
                    if ($_FILES["btnArchivo"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnArchivo"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnArchivo"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnArchivo"]["name"][$index];
                            $data = array(
                                'IdTransporte' => $ID,
                                'IdSolicitud' => $IDX,
                                'URL' => ($img),
                                'CARPETA' => 'FotosXSolicitudXTransporte',
                                'FOTO' => $_FILES["btnArchivo"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXFoto[$index])
                            );
                            $this->resource_model->onAction('fotosxsolicitudxtransporte', $data, 'save', 0);
                            print "FOTO #" . $index . " " . $_FILES["btnArchivo"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXFoto[$index] . " OK!";
                            print "\n";
                        }
                    }
                }

                $URL_DOC = 'uploads/DocumentosXSolicitudXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDX))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDX), 0777, true);
                }
                for ($index = 0; $index < count($_FILES["btnDocumento"]["name"]); $index++) {
                    if ($_FILES["btnDocumento"]["name"][$index] !== '') {
                        print "\n";
                        if (move_uploaded_file($_FILES["btnDocumento"]["tmp_name"][$index], $URL_DOC . '/' . $IDX . '/' . utf8_decode($_FILES["btnDocumento"]["name"][$index]))) {
                            $img = $master_url . $IDX . '/' . $_FILES["btnDocumento"]["name"][$index];
                            $data = array(
                                'IdSolicitud' => $IDX,
                                'IdTransporte' => $ID,
                                'URL' => ($img),
                                'CARPETA' => 'DocumentosXSolicitudXTransporte',
                                'DOCUMENTO' => $_FILES["btnDocumento"]["name"][$index],
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a'),
                                'OBSERVACIONES' => strtoupper($ObservacionesXDocumento[$index])
                            );
                            $this->resource_model->onAction('documentosxsolicitudxtransporte', $data, 'save', 0);
                            print "DOCUMENTO #" . $index . " " . $_FILES["btnDocumento"]["name"][$index] . ", ";
                            print "OBSERVACIONES " . $ObservacionesXDocumento[$index] . " OK!";
                            print "\n";
                        }
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAgregarAdjuntoSolicitud() {
        try {
            extract(filter_input_array(INPUT_POST));
            if ($TIPO === '1') {
                print 'FOTO';
                $URL_DOC = 'uploads/FotosXSolicitudXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                var_dump($_FILES);
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdSolicitud'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'FotosXSolicitudXTransporte',
                        'FOTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('fotosxsolicitudxtransporte', $data, 'save', 0);
                }
            } else {
                print 'DOCUMENTACIÓN';
                $URL_DOC = 'uploads/DocumentosXSolicitudXTransporte';
                $master_url = base_url() . $URL_DOC . '/';

                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["btnArchivoU"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["btnArchivoU"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["btnArchivoU"]["name"];
                    $data = array(
                        'IdSolicitud'=>$ID,
                        'IdTransporte' => $IDTRANSPORTE,
                        'URL' => ($img),
                        'CARPETA' => 'DocumentosXSolicitudXTransporte',
                        'DOCUMENTO' => $_FILES["btnArchivoU"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'OBSERVACIONES' => strtoupper($OBSERVACIONES)
                    );
                    $this->resource_model->onAction('documentosxsolicitudxtransporte', $data, 'save', 0);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarSolicitud() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('transportesolicitud', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAprobarSolicitud() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Fecha'=>Date('d/m/Y'),
                'Disponibilidad' => (isset($Disponibilidad) && $Disponibilidad !== '') ? $Disponibilidad : NULL,
                'EstatusSolicitud' => (isset($EstatusSolicitud) && $EstatusSolicitud !== '') ? $EstatusSolicitud : NULL,
                'Autoriza' => (isset($Autoriza) && $Autoriza !== '') ? $Autoriza : NULL,
                'FechaAutorizacion' => (isset($FechaAutorizacion) && $FechaAutorizacion !== '') ? $FechaAutorizacion : NULL, 
                'HoraAutorizacion'=>Date('h:i:s a'));
            $this->resource_model->onAction('transportesolicitud', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
    public function getDocumentoXSolicitudID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getDocumentoXSolicitudID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getFotoXSolicitudID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->transporte_model->getFotoXSolicitudID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarFotoXSolicitudID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('fotosxsolicitudxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function onEliminarDocumentoXSolicitudID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('documentosxsolicitudxtransporte', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
