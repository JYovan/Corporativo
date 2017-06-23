<?php

/*
 * Copyright 2017 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */

class ctrlCajaDeVenta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        require_once APPPATH . "/third_party/fpdf17/fpdf.php";
        $this->load->model("cajadeventa_model");
        $this->load->model("resource_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vCajaDeVenta');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->cajadeventa_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFondosDeCajas() {
        try {
            $data = $this->cajadeventa_model->getFondosDeCajas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract($this->input->post());
            $data = $this->cajadeventa_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCajas() {
        try {
            $data = $this->cajadeventa_model->getCajas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreas() {
        try {
            $data = $this->cajadeventa_model->getAreas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $data = $this->cajadeventa_model->getResponsables();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'Caja' => "CAJA " . $NumeroDeCaja,
                'Tipo' => (isset($Tipo) && $Tipo !== '') ? $Tipo : NULL,
                'NumeroDeCaja' => (isset($NumeroDeCaja) && $NumeroDeCaja !== '') ? $NumeroDeCaja : NULL,
                'Area' => (isset($Area) && $Area !== '') ? $Area : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? $Responsable : NULL
            );
            $ID = $this->resource_model->onAction('cajadeventa', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());
            $data = array(
                'Caja' => "CAJA " . $NumeroDeCaja,
                'Tipo' => (isset($Tipo) && $Tipo !== '') ? $Tipo : NULL,
                'NumeroDeCaja' => (isset($NumeroDeCaja) && $NumeroDeCaja !== '') ? $NumeroDeCaja : NULL,
                'Area' => (isset($Area) && $Area !== '') ? $Area : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? $Responsable : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $ID = $this->cajadeventa_model->onAgregar($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFondoDeCaja() {
        try {
            extract($this->input->post());
            $data = array(
                'Fecha' => ($Fecha !== '') ? $Fecha : NULL,
                'Caja' => ($Caja !== '') ? $Caja : NULL,
                'EfectivoInicial' => ($EfectivoInicial !== '') ? $EfectivoInicial : NULL,
                'Cantidad' => ($Cantidad !== '') ? $Cantidad : 0,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $ID = $this->cajadeventa_model->onAgregarFondoDeCaja($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
