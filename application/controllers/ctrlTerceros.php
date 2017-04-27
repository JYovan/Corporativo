<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlTerceros extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("terceros_model");
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
            $data['contentView'] = 'vTerceros';
            $this->_renderView($data);
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data);
        }
    }

    public function getRecords() {
        try {
            $data = $this->terceros_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            $data = $this->terceros_model->getRecordsByID();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddRecord() {
        try {
            $data = array(
                'Unidad', 'Personal', 'Concepto', 'Monto', 'Proveedor', 'Forma', 'Caja', 'FechaPago', 'Comprobante', 'Pagado'
            );
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateRecord() {
        
    }

}
