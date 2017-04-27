<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlCuentas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("cuentas_model");
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
            $data['contentView'] = 'vCuentas';
            $this->_renderView($data);
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data);
        }
    }

    public function getDirectorio() {
        try {
            $data = $this->cuentas_model->getDirectorio();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->cuentas_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->cuentas_model->getRecordsByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddRecordCuenta() {
        try {
            if (isset($_POST["Banco"])) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    "Banco" => $Banco,
                    "Titular" => $Titular,
                    "NoCuenta" => $NoCuenta,
                    "CLABE" => $CLABE,
                    "Fecha" => $Fecha,
                    "Empresa" => $Empresa,
                    "Saldo" => $Saldo
                );
                $ID = $this->resource_model->onAction("Cuentas", $data, "save", false);
                $data = array(
                    "IDCuenta" => $ID,
                    "Saldo" => $Saldo,
                    "Fecha" => $Fecha,
                );
                $ID = $this->resource_model->onAction("Saldos_Cuentas", $data, "save", false);
                print $ID;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateRecord() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    "Banco" => $Banco,
                    "Titular" => $Titular,
                    "NoCuenta" => $NoCuenta,
                    "CLABE" => $CLABE,
                    "Fecha" => $Fecha,
                    "Empresa" => $Empresa,
                    "Saldo" => $Saldo
                );
                $this->resource_model->onAction("Cuentas", $data, "update", array('ID', $ID));
                $data = array(
                    "IDCuenta" => $ID,
                    "Saldo" => $Saldo,
                    "Fecha" => date("d/m/Y H:i:s"),
                );
                $ID = $this->resource_model->onAction("Saldos_Cuentas", $data, "save", false);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            print 0;
        }
    }

}
