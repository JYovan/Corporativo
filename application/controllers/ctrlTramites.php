<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlTramites extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("resource_model");
        $this->load->model("tramites_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vTramites');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->tramites_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramites_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAdjuntosByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramites_model->getAdjuntosByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->tramites_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTramites() {
        try {
            $data = $this->tramites_model->getTramites();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratos() {
        try {
            $data = $this->tramites_model->getContratos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $data = $this->tramites_model->getResponsables();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyectos' => (isset($Proyectos) && $Proyectos !== '') ? $Proyectos : NULL,
                'IdTramite' => (isset($Tramite) && $Tramite !== '') ? $Tramite : NULL,
                'Tramite' => (isset($TramiteT) && $TramiteT !== '') ? $TramiteT : NULL,
                'Contrato' => (isset($Contrato) && $Contrato !== '') ? $Contrato : NULL,
                'Instancia' => (isset($Instancia) && $Instancia !== '') ? strtoupper($Instancia) : NULL,
                'Requisitos' => (isset($Requisitos) && $Requisitos !== '') ? strtoupper($Requisitos) : NULL,
                'Duracion' => (isset($Duracion) && $Duracion !== '') ? strtoupper($Duracion) : NULL,
                'Direccion' => (isset($Direccion)) ? strtoupper($Direccion) : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? strtoupper($Responsable) : NULL,
                'FechaInicio' => (isset($FechaInicio) && $FechaInicio !== '') ? strtoupper($FechaInicio) : NULL,
                'FechaTermino' => (isset($FechaTermino) && $FechaTermino !== '') ? strtoupper($FechaTermino) : NULL,
                'Observaciones' => (isset($ObservacionesDelTramite) && $ObservacionesDelTramite !== '') ? strtoupper($ObservacionesDelTramite) : NULL,
                'Evidencia' => (isset($Evidencia) && $Evidencia !== '') ? strtoupper($Evidencia) : NULL, 
                'Estado' => (isset($Estado) && $Estado !== '') ? strtoupper($Estado) : NULL,
            );
            $ID = $this->resource_model->onAction('rtramites', $data, 'save', 0);
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAddSeguimientoTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Ndesarrollo' => (isset($Proyectos) && $Proyectos !== '') ? $Proyectos : NULL,
                'Tramite' => (isset($Tramite) && $Tramite !== '') ? $Tramite : NULL,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper($Observaciones) : NULL,
                'Evidencia' => (isset($Evidencia) && $Evidencia !== '') ? $Evidencia : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL,
                'EstadoTramite' => (isset($EstadoSeguimiento) && $EstadoSeguimiento !== '') ? $EstadoSeguimiento : NULL,
                'EstadoTramiteT' => (isset($EstadoTramiteT) && $EstadoTramiteT !== '') ? $EstadoTramiteT : NULL
            );
            $ID = $this->resource_model->onAction('rtramitesseguimiento', $data, 'save', 0);
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onUpdateTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyectos' => (isset($Proyectos) && $Proyectos !== '') ? $Proyectos : NULL,
                'IdTramite' => (isset($Tramite) && $Tramite !== '') ? $Tramite : NULL,
                'Tramite' => (isset($TramiteT) && $TramiteT !== '') ? $TramiteT : NULL,
                'Contrato' => (isset($Contrato) && $Contrato !== '') ? $Contrato : NULL,
                'Instancia' => (isset($Instancia) && $Instancia !== '') ? strtoupper($Instancia) : NULL,
                'Requisitos' => (isset($Requisitos) && $Requisitos !== '') ? strtoupper($Requisitos) : NULL,
                'Duracion' => (isset($Duracion) && $Duracion !== '') ? strtoupper($Duracion) : NULL,
                'Direccion' => (isset($Direccion)) ? strtoupper($Direccion) : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? strtoupper($Responsable) : NULL,
                'FechaInicio' => (isset($FechaInicio) && $FechaInicio !== '') ? strtoupper($FechaInicio) : NULL,
                'FechaTermino' => (isset($FechaTermino) && $FechaTermino !== '') ? strtoupper($FechaTermino) : NULL,
                'Observaciones' => (isset($ObservacionesDelTramite) && $ObservacionesDelTramite !== '') ? strtoupper($ObservacionesDelTramite) : NULL,
                'Evidencia' => (isset($Evidencia) && $Evidencia !== '') ? strtoupper($Evidencia) : NULL,
                'Archivo' => (isset($Archivo) && $Archivo !== '') ? strtoupper($Archivo) : NULL,
                'Estado' => (isset($Estado) && $Estado !== '') ? strtoupper($Estado) : NULL,
            );
//            var_dump($data);
            $this->resource_model->onAction('rtramites', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAddArchivoDeSeguiientoDeTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $URL_DOC = 'uploads/Tramites';
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
                        'rArchivo' => ($img),
                        'Archivo' => $_FILES["Archivo"]["name"],
                        'Carpeta' => 'Tramites'
                    );
                    $this->resource_model->onAction('rtramitesseguimiento', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onEliminarArchivoGuardadoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('rtramitesseguimiento', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getAdjuntoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramites_model->getAdjuntoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
