<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlProveedors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("proveedores_model");
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
            $this->load->view('vProveedores');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }  
    }

    function onAdd() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'Proveedor'), FILTER_SANITIZE_STRING)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'Tipo' => $Tipo,
                    'Proveedor' => strtoupper($Proveedor),
                    'RFC' => ((isset($RFC) && $RFC !== '') ? $RFC : NULL),
                    'Correo' => ((isset($Correo) && $Correo !== '') ? $Correo : NULL),
                    'Pagina' => ((isset($Pagina) && $Pagina !== '') ? $Pagina : NULL),
                    'Calle' => ((isset($Calle) && $Calle !== '') ? $Calle : NULL),
                    'No' => ((isset($No) && $No !== '') ? $No : NULL),
                    'Colonia' => ((isset($Colonia) && $Colonia !== '') ? $Colonia : NULL),
                    'Municipio' => ((isset($Municipio) && $Municipio !== '') ? $Municipio : NULL),
                    'Estado' => ((isset($Estado) && $Estado !== '') ? $Estado : NULL),
                    'Tel' => ((isset($Tel) && $Tel !== '') ? $Tel : NULL),
                    'Contacto' => ((isset($Contacto) && $Contacto !== '') ? $Contacto : NULL),
                    'TelContacto' => ((isset($TelContacto) && $TelContacto !== '') ? $TelContacto : NULL),
                    'MailContacto' => ((isset($MailContacto) && $MailContacto !== '') ? $MailContacto : NULL),
                    'Rama' => ((isset($Rama) && $Rama !== '') ? $Rama : NULL),
                    'Actividad' => ((isset($Actividad) && $Actividad !== '') ? $Actividad : NULL),
                    'Tamanio' => ((isset($Tamanio) && $Tamanio !== '') ? $Tamanio : NULL),
                    'Servicios' => ((isset($Servicios) && $Servicios !== '') ? $Servicios : NULL),
                    'Titular' => ((isset($Titular) && $Titular !== '') ? $Titular : NULL),
                    'RFCcuenta' => ((isset($RFCcuenta) && $RFCcuenta !== '') ? $RFCcuenta : NULL),
                    'Cuenta' => ((isset($Cuenta) && $Cuenta !== '') ? $Cuenta : NULL),
                    'Banco' => ((isset($Banco) && $Banco !== '') ? $Banco : NULL),
                    'CLABE' => ((isset($CLABE) && $CLABE !== '') ? $CLABE : NULL),
                    'Fecha' => ((isset($Fecha) && $Fecha !== '') ? $Fecha : NULL),
                    'Registro' => Date('d/m/Y h:i:s a')
                );
                
                $ID = $this->resource_model->onAction("Proveedores", $data, "save", 0);
                
            if (isset($_FILES["Icono"]["name"])) {
                if (!file_exists('media/logos')) {
                    mkdir('media/logos', 0777, true);
                } 
                if (move_uploaded_file($_FILES["Icono"]["tmp_name"], 'media/logos/' . utf8_decode($_FILES["Icono"]["name"]))) {
                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = base_url() . 'media/logos/' . ($_FILES["Icono"]["name"]);
                    $data = array(
                        'Icono' => $img
                    );
                    $this->resource_model->onAction('Proveedores', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onUpdate() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'Tipo' => $Tipo,
                    'Proveedor' => strtoupper($Proveedor),
                    'RFC' => ((isset($RFC) && $RFC !== '') ? $RFC : NULL),
                    'Correo' => ((isset($Correo) && $Correo !== '') ? $Correo : NULL),
                    'Pagina' => ((isset($Pagina) && $Pagina !== '') ? $Pagina : NULL),
                    'Calle' => ((isset($Calle) && $Calle !== '') ? $Calle : NULL),
                    'No' => ((isset($No) && $No !== '') ? $No : NULL),
                    'Colonia' => ((isset($Colonia) && $Colonia !== '') ? $Colonia : NULL),
                    'Municipio' => ((isset($Municipio) && $Municipio !== '') ? $Municipio : NULL),
                    'Estado' => ((isset($Estado) && $Estado !== '') ? $Estado : NULL),
                    'Tel' => ((isset($Tel) && $Tel !== '') ? $Tel : NULL),
                    'Contacto' => ((isset($Contacto) && $Contacto !== '') ? $Contacto : NULL),
                    'TelContacto' => ((isset($TelContacto) && $TelContacto !== '') ? $TelContacto : NULL),
                    'MailContacto' => ((isset($MailContacto) && $MailContacto !== '') ? $MailContacto : NULL),
                    'Rama' => ((isset($Rama) && $Rama !== '') ? $Rama : NULL),
                    'Actividad' => ((isset($Actividad) && $Actividad !== '') ? $Actividad : NULL),
                    'Tamanio' => ((isset($Tamanio) && $Tamanio !== '') ? $Tamanio : NULL),
                    'Servicios' => ((isset($Servicios) && $Servicios !== '') ? $Servicios : NULL),
                    'Titular' => ((isset($Titular) && $Titular !== '') ? $Titular : NULL),
                    'RFCcuenta' => ((isset($RFCcuenta) && $RFCcuenta !== '') ? $RFCcuenta : NULL),
                    'Cuenta' => ((isset($Cuenta) && $Cuenta !== '') ? $Cuenta : NULL),
                    'Banco' => ((isset($Banco) && $Banco !== '') ? $Banco : NULL),
                    'CLABE' => ((isset($CLABE) && $CLABE !== '') ? $CLABE : NULL),
                    'Fecha' => ((isset($Fecha) && $Fecha !== '') ? $Fecha : NULL),
                    'Registro' => Date('d/m/Y h:i:s a')
                );
                var_dump($data);
                $ID = $this->resource_model->onAction("Proveedores", $data, "update", array('ID', $ID));
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->proveedores_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->proveedores_model->getRecordsByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipos() {
        try {
            $data = $this->proveedores_model->getTipos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getRamas() {
        try {
            $data = $this->proveedores_model->getRamas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getTamanio() {
        try {
            $data = $this->proveedores_model->getTamanio();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getCiudades() {
        try {
            $data = $this->proveedores_model->getCiudades();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getEstados() {
        try {
            $data = $this->proveedores_model->getEstados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getActividades() {
        try {
            $data = $this->proveedores_model->getActividades();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
