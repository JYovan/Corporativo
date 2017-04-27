<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlMobiliario extends CI_Controller {

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
        $this->load->model("resource_model");
        $this->load->model("mobiliario_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vMobiliario');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data);
        }
    }

    public function getRecords() {
        try {
            $data = $this->mobiliario_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mobiliario_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotosXMobiliarioID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mobiliario_model->getFotosXMobiliarioID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mobiliario_model->getFotoXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresas() {
        try {
            $data = $this->mobiliario_model->getEmpresas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $data = $this->mobiliario_model->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInmobiliario() {
        try {
            $data = $this->mobiliario_model->getInmobiliario();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $data = $this->mobiliario_model->getResponsables();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipos() {
        try {
            $data = $this->mobiliario_model->getTipos();
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
            $this->resource_model->onAction('mobiliario', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function onEliminarFotoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->resource_model->onAction('fotoxmobiliario', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddMobiliario() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Tipo' => (isset($Tipo) && $Tipo !== '') ? strtoupper($Tipo) : NULL,
                'Nombre' => (isset($Nombre) && $Nombre !== '') ? strtoupper($Nombre) : NULL,
                'Marca' => (isset($Marca) && $Marca !== '') ? strtoupper($Marca) : NULL,
                'Modelo' => (isset($Modelo) && $Modelo !== '') ? strtoupper($Modelo) : NULL,
                'Material' => (isset($Material) && $Material !== '') ? strtoupper($Material) : NULL,
                'Color' => (isset($Color) && $Color !== '') ? strtoupper($Color) : NULL,
                'Resguardo' => (isset($Resguardo) && $Resguardo !== '') ? strtoupper($Resguardo) : NULL,
                'Caracteristicas' => (isset($Caracteristicas) && $Caracteristicas !== '') ? strtoupper($Caracteristicas) : NULL,
                'FechaAdquisicion' => (isset($Adquisicion) && $Adquisicion !== '') ? strtoupper($Adquisicion) : NULL,
                'Baja' => (isset($Baja) && $Baja !== '') ? strtoupper($Baja) : NULL,
                'Estado' => (isset($Estado) && $Estado !== '') ? strtoupper($Estado) : NULL,
                'IdProveedor' => (isset($Proveedor) && $Proveedor !== '') ? strtoupper($Proveedor) : NULL,
                'Proveedor' => (isset($ProveedorT) && $ProveedorT !== '') ? strtoupper($ProveedorT) : NULL,
                'Serie' => (isset($Serie) && $Serie !== '') ? strtoupper($Serie) : NULL,
                'Area' => (isset($Area) && $Area !== '') ? strtoupper($Area) : NULL,
                'ValorAdquisicion' => (isset($ValorAdquisicion) && $ValorAdquisicion !== '') ? strtoupper($ValorAdquisicion) : NULL,
                'ValorActual' => (isset($ValorActual) && $ValorActual !== '') ? strtoupper($ValorActual) : NULL,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper($Observaciones) : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? strtoupper($Responsable) : NULL,
                'Empresa' => (isset($Empresa) && $Empresa !== '') ? strtoupper($Empresa) : NULL,
                'EstatusUsoMueble' => (isset($EstatusUsoMueble) && $EstatusUsoMueble !== '') ? strtoupper($EstatusUsoMueble) : NULL,
                'FechaAsignacion' => (isset($FechaAsignacion) && $FechaAsignacion !== '') ? strtoupper($FechaAsignacion) : NULL,
                'FolioAsignacion' => (isset($FolioAsignacion) && $FolioAsignacion !== '') ? strtoupper($FolioAsignacion) : NULL,
                'InmuebleDestino' => (isset($InmuebleDestino) && $InmuebleDestino !== '') ? strtoupper($InmuebleDestino) : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $ID = $this->resource_model->onAction('mobiliario', $data, 'save', 0);
            print "\n";
            for ($index = 0; $index < count($_FILES["Archivo"]["name"]); $index++) {
                if ($_FILES["Archivo"]["name"][$index] !== '') {
                    print "ARCHIVO #" . $index . " " . $_FILES["Archivo"]["name"][$index] . " OK!";
                }
            }
            if (isset($ID)) {
                $URL_DOC = 'uploads/Mobiliario';
                $master_url = base_url() . $URL_DOC . '/';
                for ($index = 0; $index < count($_FILES["Archivo"]["name"]); $index++) {
                    if ($_FILES["Archivo"]["name"][$index] !== '') {
                        if (isset($_FILES["Archivo"]["name"][$index])) {
                            if (!file_exists($URL_DOC)) {
                                mkdir($URL_DOC, 0777, true);
                            }
                            if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                                mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                            }
                            if (move_uploaded_file($_FILES["Archivo"]["tmp_name"][$index], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"][$index]))) {
                                $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"][$index];
                                $data = array(
                                    'IDMOBILIARIO' => $ID,
                                    'URL' => ($img),
                                    'ARCHIVO' => $_FILES["Archivo"]["name"][$index],
                                    'CARPETA' => 'Mobiliario',
                                    'ESTATUS' => 'ACTIVO',
                                    'REGISTRO' => Date('d/m/Y h:i:s a')
                                );
                                $this->resource_model->onAction('fotoxmobiliario', $data, 'save', 0);
                            } else {
                                echo "NO SE PUDO SUBIR EL ARCHIVO";
                            }
                        }
                    }
                }
            } else {
                print 'ERROR, NO HA PODIDO OBTENERSE EL ID DE REGISTRO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateMobiliario() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Nombre' => (isset($Nombre) && $Nombre !== '') ? strtoupper($Nombre) : NULL,
                'Marca' => (isset($Marca) && $Marca !== '') ? strtoupper($Marca) : NULL,
                'Modelo' => (isset($Modelo) && $Modelo !== '') ? strtoupper($Modelo) : NULL,
                'Material' => (isset($Material) && $Material !== '') ? strtoupper($Material) : NULL,
                'Color' => (isset($Color) && $Color !== '') ? strtoupper($Color) : NULL,
                'Resguardo' => (isset($Resguardo) && $Resguardo !== '') ? strtoupper($Resguardo) : NULL,
                'Caracteristicas' => (isset($Caracteristicas) && $Caracteristicas !== '') ? strtoupper($Caracteristicas) : NULL,
                'FechaAdquisicion' => (isset($Adquisicion) && $Adquisicion !== '') ? strtoupper($Adquisicion) : NULL,
                'Baja' => (isset($Baja) && $Baja !== '') ? strtoupper($Baja) : NULL,
                'Serie' => (isset($Serie) && $Serie !== '') ? strtoupper($Serie) : NULL,
                'Area' => (isset($Area) && $Area !== '') ? strtoupper($Area) : NULL,
                'ValorAdquisicion' => (isset($ValorAdquisicion) && $ValorAdquisicion !== '') ? strtoupper($ValorAdquisicion) : NULL,
                'ValorActual' => (isset($ValorActual) && $ValorActual !== '') ? strtoupper($ValorActual) : NULL,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper($Observaciones) : NULL,
                'FechaAsignacion' => (isset($FechaAsignacion) && $FechaAsignacion !== '') ? strtoupper($FechaAsignacion) : NULL,
                'FolioAsignacion' => (isset($FolioAsignacion) && $FolioAsignacion !== '') ? strtoupper($FolioAsignacion) : NULL,
            );
            if (isset($Empresa) && $Empresa !== '') {
                $data['Empresa'] = strtoupper($Empresa);
            }
            /* TIPO DE MOBILIARIO */
            if (isset($Tipo) && $Tipo !== '') {
                $data['Tipo'] = strtoupper($Tipo);
            }
            if (isset($Proveedor) && $Proveedor !== '' && isset($ProveedorT) && $ProveedorT !== '') {
                $data['IdProveedor'] = strtoupper($Proveedor);
                $data['Proveedor'] = strtoupper($ProveedorT);
            }
            /* ESTATUS DE USO DEL MUEBLE */
            if (isset($EstatusUsoMueble) && $EstatusUsoMueble !== '') {
                $data['EstatusUsoMueble'] = strtoupper($EstatusUsoMueble);
            }
            /* INMUEBLE DE DESTINO */
            if (isset($InmuebleDestino) && $InmuebleDestino !== '') {
                $data['InmuebleDestino'] = strtoupper($InmuebleDestino);
            }
            /* RESPONSABLE DEL RESGUARDO */
            if (isset($Responsable) && $Responsable !== '') {
                $data['Responsable'] = strtoupper($InmuebleDestino);
            }
            /* ESTADO DEL MUEBLE */
            if (isset($Estado) && $Estado !== '') {
                $data['Estado'] = strtoupper($Estado);
            }

            $this->resource_model->onAction('mobiliario', $data, 'update', array('ID', $ID));
            print "\n";
            $URL_DOC = 'uploads/Mobiliario';
            $master_url = base_url() . $URL_DOC . '/';
            for ($index = 0; $index < count($_FILES["Archivo"]["name"]); $index++) {
                if ($_FILES["Archivo"]["name"][$index] !== '') {
                    print "ARCHIVO ACTUALIZADO #" . $index . " " . $_FILES["Archivo"]["name"][$index] . " OK!";

                    if (isset($_FILES["Archivo"]["name"][$index])) {
                        if (!file_exists($URL_DOC)) {
                            mkdir($URL_DOC, 0777, true);
                        }
                        if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                            mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                        }
                        if (move_uploaded_file($_FILES["Archivo"]["tmp_name"][$index], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"][$index]))) {
                            $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"][$index];
                            $data = array(
                                'IDMOBILIARIO' => $ID,
                                'URL' => ($img),
                                'ARCHIVO' => $_FILES["Archivo"]["name"][$index],
                                'CARPETA' => 'Mobiliario',
                                'ESTATUS' => 'ACTIVO',
                                'REGISTRO' => Date('d/m/Y h:i:s a')
                            );
                            $this->resource_model->onAction('fotoxmobiliario', $data, 'save', 0);
                        } else {
                            echo "NO SE PUDO SUBIR EL ARCHIVO";
                        }
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
