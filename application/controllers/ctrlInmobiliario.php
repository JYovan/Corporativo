<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlInmobiliario extends CI_Controller {

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
        $this->load->model("inmobiliario_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vInmobiliario');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    public function getRecords() {
        try {
            $data = $this->inmobiliario_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->inmobiliario_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstados() {
        try {
            $data = $this->inmobiliario_model->getEstados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsos() {
        try {
            $data = $this->inmobiliario_model->getUsos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCiudades() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->inmobiliario_model->getCiudades($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddInmobiliario() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Nombre' => (isset($Nombre) && $Nombre !== '') ? strtoupper($Nombre) : NULL,
                'Calle' => (isset($Calle) && $Calle !== '') ? strtoupper($Calle) : NULL,
                'No' => (isset($No) && $No !== '') ? $No : NULL,
                'Colonia' => (isset($Colonia) && $Colonia !== '') ? strtoupper($Colonia) : NULL,
                'CP' => (isset($CP) && $CP !== '') ? $CP : NULL,
                'LineaTelefonica' => (isset($LineaTelefonica) && $LineaTelefonica !== '') ? $LineaTelefonica : NULL,
                'NumeroDeLineas' => (isset($NumeroDeLineas) && $NumeroDeLineas !== '') ? $NumeroDeLineas : NULL,
                'Tel' => (isset($Tel) && $Tel !== '') ? $Tel : NULL,
                'UniAdmtivas' => (isset($UniAdmtivas) && $UniAdmtivas !== '') ? $UniAdmtivas : NULL,
                'Empleados' => (isset($Empleados) && $Empleados !== '') ? $Empleados : NULL,
                'Pisos' => (isset($Pisos) && $Pisos !== '') ? $Pisos : NULL,
                'Estacionamientos' => (isset($Estacionamientos) && $Estacionamientos !== '') ? $Estacionamientos : NULL,
                'Superficie' => (isset($Superficie) && $Superficie !== '') ? $Superficie : NULL,
                'Construccion' => (isset($Construccion) && $Construccion !== '') ? $Construccion : NULL,
                'SitJuridica' => (isset($SitJuridica) && $SitJuridica !== '') ? strtoupper($SitJuridica) : NULL,
                'Propietario' => (isset($Propietario) && $Propietario !== '') ? strtoupper($Propietario) : NULL,
                'Arrendatario' => (isset($Arrendatario) && $Arrendatario !== '') ? strtoupper($Arrendatario) : NULL,
                'Renta' => (isset($Renta) && $Renta !== '') ? $Renta : NULL,
                'ValorInmueble' => (isset($ValorInmueble) && $ValorInmueble !== '') ? $ValorInmueble : 0,
                'ValorVenta' => (isset($ValorVenta) && $ValorVenta !== '') ? $ValorVenta : 0,
                'UsoInmueble' => (isset($UsoInmueble) && $UsoInmueble !== '') ? $UsoInmueble : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            if (isset($Estado) && $Estado !== '') {
                $data['Estado'] = $Estado;
            }
            if (isset($Ciudad) && $Ciudad !== '') {
                $data['Ciudad'] = $Ciudad;
            }

            $ID = $this->resource_model->onAction('inmuebles', $data, 'save', 0);

            $URL_DOC = 'uploads/Inmuebles';
            $master_url = base_url() . $URL_DOC . '/';

            if (isset($_FILES["Archivo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'rDocumento' => ($img),
                        'rArchivo' => $_FILES["Archivo"]["name"],
                        'Carpeta' => 'Inmuebles'
                    );
                    $this->resource_model->onAction('inmuebles', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateInmobiliario() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Nombre' => (isset($Nombre) && $Nombre !== '') ? strtoupper($Nombre) : NULL,
                'Calle' => (isset($Calle) && $Calle !== '') ? strtoupper($Calle) : NULL,
                'No' => (isset($No) && $No !== '') ? $No : NULL,
                'Colonia' => (isset($Colonia) && $Colonia !== '') ? strtoupper($Colonia) : NULL,
                'CP' => (isset($CP) && $CP !== '') ? $CP : NULL,
                'LineaTelefonica' => (isset($LineaTelefonica) && $LineaTelefonica !== '') ? $LineaTelefonica : NULL,
                'NumeroDeLineas' => (isset($NumeroDeLineas) && $NumeroDeLineas !== '') ? $NumeroDeLineas : NULL,
                'Tel' => (isset($Tel) && $Tel !== '') ? $Tel : NULL,
                'UniAdmtivas' => (isset($UniAdmtivas) && $UniAdmtivas !== '') ? $UniAdmtivas : NULL,
                'Empleados' => (isset($Empleados) && $Empleados !== '') ? $Empleados : NULL,
                'Pisos' => (isset($Pisos) && $Pisos !== '') ? $Pisos : NULL,
                'Estacionamientos' => (isset($Estacionamientos) && $Estacionamientos !== '') ? $Estacionamientos : NULL,
                'Superficie' => (isset($Superficie) && $Superficie !== '') ? $Superficie : NULL,
                'Construccion' => (isset($Construccion) && $Construccion !== '') ? $Construccion : NULL,
                'SitJuridica' => (isset($SitJuridica) && $SitJuridica !== '') ? strtoupper($SitJuridica) : NULL,
                'Propietario' => (isset($Propietario) && $Propietario !== '') ? strtoupper($Propietario) : NULL,
                'Arrendatario' => (isset($Arrendatario) && $Arrendatario !== '') ? strtoupper($Arrendatario) : NULL,
                'ValorInmueble' => (isset($ValorInmueble) && $ValorInmueble !== '') ? $ValorInmueble : 0,
                'ValorVenta' => (isset($ValorVenta) && $ValorVenta !== '') ? $ValorVenta : 0,
                'UsoInmueble' => (isset($UsoInmueble) && $UsoInmueble !== '') ? $UsoInmueble : NULL,
                'Renta' => (isset($Renta) && $Renta !== '') ? $Renta : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL
            );
            if (isset($Estado) && $Estado !== '') {
                $data['Estado'] = $Estado;
            }
            if (isset($Ciudad) && $Ciudad !== '') {
                $data['Ciudad'] = $Ciudad;
            }

            $this->resource_model->onAction('inmuebles', $data, 'update', array('ID', $ID));

            $URL_DOC = 'uploads/Inmuebles';
            $master_url = base_url() . $URL_DOC . '/';
//            var_dump($_FILES);
            if (isset($_FILES["rArchivo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                $file = $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["rArchivo"]["name"]);
//                var_dump($file);
                if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], $file)) {
                    $img = $master_url . $ID . '/' . $_FILES["rArchivo"]["name"];
                    $data = array(
                        'rDocumento' => ($img),
                        'rArchivo' => $_FILES["rArchivo"]["name"],
                        'Carpeta' => 'Inmuebles'
                    );
                    $this->resource_model->onAction('inmuebles', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
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
            $this->resource_model->onAction('inmuebles', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onUpdateArchivoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $URL_DOC = 'uploads/Inmuebles';
            $master_url = base_url() . $URL_DOC . '/';

            if (isset($_FILES["Archivo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'rDocumento' => ($img),
                        'rArchivo' => $_FILES["Archivo"]["name"],
                        'Carpeta' => 'Inmuebles'
                    );
                    $this->resource_model->onAction('inmuebles', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
