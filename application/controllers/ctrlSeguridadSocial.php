<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlSeguridadSocial extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("resource_model");
        $this->load->model("seguridadsocial_model");
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
            $this->load->view('vSeguridadSocial');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
            $DOCUMENTO = base_url() . 'uploads/SSDocumentos/' . strtoupper($Empresa) . '/' . strtoupper($TramiteT) . '/' . utf8_decode($_FILES["rArchivo"]["name"]);
            $data = array(
                'Cliente' => $Empresa,
                'Mes' => $Mes,
                'Tramite' => $Tramite,
                'FechaSolicitud' => $Fecha,
                'Evidencia' => strtoupper($Asesoria),
                'NDocumento' => $_FILES["rArchivo"]["name"],
                'rDocumento' => $DOCUMENTO,
                'Registro' => Date('d/m/Y h:i:s a')
            );

            $ID = $this->resource_model->onAction('SSDocumentos', $data, 'save', 0);

            $img = $_FILES["rArchivo"]["tmp_name"];
            if (!file_exists('uploads/SSDocumentos/Scan')) {
                mkdir('uploads/SSDocumentos/Scan', 0777, true);
            }
            if (!file_exists('uploads/SSDocumentos/' . strtoupper($Empresa) . '/' . strtoupper(filter_var($TramiteT, FILTER_SANITIZE_SPECIAL_CHARS)))) {
                mkdir('uploads/SSDocumentos/' . strtoupper($Empresa) . '/' . strtoupper(filter_var($TramiteT, FILTER_SANITIZE_SPECIAL_CHARS)), 0777, true);
            }
            if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], 'uploads/SSDocumentos/' . strtoupper($Empresa) . '/' . strtoupper(filter_var($TramiteT, FILTER_SANITIZE_SPECIAL_CHARS)) . '/' . utf8_decode($_FILES["rArchivo"]["name"]))) {
                echo "EL ARCHIVO ES VÁLIDO Y SE SUBIÓ CON EXITO.\n";
            } else {
                echo "¡NO SE PUDO SUBIR EL ARCHIVO, VERIFIQUE LA CONSOLA PARA MÁS DETALLES!";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUploadImage() {
        try {
            extract(filter_input_array(INPUT_POST));
            $img = $_FILES["rArchivo"]["tmp_name"];
            if (!file_exists('uploads/SSExpediente/Scan')) {
                mkdir('uploads/SSExpediente/Scan', 0777, true);
            }
            if (!file_exists('uploads/SSExpediente/' . strtoupper($Empresa) . '/' . strtoupper($Tramite))) {
                mkdir('uploads/SSExpediente/' . strtoupper($Empresa) . '/' . strtoupper($Tramite), 0777, true);
            }
            if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], 'uploads/SSExpediente/' . strtoupper($Empresa) . '/' . strtoupper($Tramite) . '/' . utf8_decode($_FILES["rArchivo"]["name"]))) {
                echo "EL ARCHIVO ES VÁLIDO Y SE SUBIÓ CON EXITO.\n";
            } else {
                echo "¡NO SE PUDO SUBIR EL ARCHIVO, VERIFIQUE LA CONSOLA PARA MÁS DETALLES!";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresas() {
        try {
            $data = $this->seguridadsocial_model->getEmpresas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTramites() {
        try {
            $data = $this->seguridadsocial_model->getTramites();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->seguridadsocial_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorial() {
        try {
            $data = $this->seguridadsocial_model->getHistorial();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNominas() {
        try {
            $data = $this->seguridadsocial_model->getNominas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->seguridadsocial_model->getHistorialByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            $data = $this->seguridadsocial_model->getEmpresasByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddHistorico() {
        try {
            extract(filter_input_array(INPUT_POST));
            $dtm = $this->seguridadsocial_model->getEmpresasByID($Empresa);

//            var_dump($dtm); 
            var_dump(filter_input_array(INPUT_POST));
            $data = array(
                'Cliente' => $dtm[0]->FOLIO,
                'Tramite' => (isset($Asesoria) && $Asesoria !== "") ? $Asesoria : $Estatus,
                'Fecha' => $Fecha,
                'Asesoria' => strtoupper($Tipo),
                'Estatus' => $Estatus,
                'Hora' => Date("h:i:s"),
                'Empresa' => $Empresa,
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'save', 0);

            $DOCUMENTO = base_url() . 'uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . (strtoupper($EstatusT)) . '/' . $ID . '/' . ($_FILES["rArchivo"]["name"]);

            $data = array(
                'rDocumento' => $DOCUMENTO
            );

            $img = $_FILES["rArchivo"]["tmp_name"];
            if (!file_exists('uploads/SSHistorico/Scan')) {
                mkdir('uploads/SSHistorico/Scan', 0777, true);
            }
            if (!file_exists('uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $ID)) {
                mkdir('uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $ID, 0777, true);
            }
            if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], 'uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $ID . '/' . utf8_decode($_FILES["rArchivo"]["name"]))) {
                echo "EL ARCHIVO ES VÁLIDO Y SE SUBIÓ CON EXITO.\n";
            } else {
                echo "¡NO SE PUDO SUBIR EL ARCHIVO, VERIFIQUE LA CONSOLA PARA MÁS DETALLES!";
            }
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddHistoricoAsesoria() {
        try {
            extract(filter_input_array(INPUT_POST));
            $dtm = $this->seguridadsocial_model->getEmpresasByID($Empresa);

//            var_dump($dtm); 
            var_dump(filter_input_array(INPUT_POST));
            $data = array(
                'Cliente' => $dtm[0]->FOLIO,
                'Tramite' => $Estatus,
                'Fecha' => $Fecha,
                'Asesoria' => strtoupper($Asesoria),
                'Estatus' => $Estatus,
                'Hora' => Date("h:i:s"),
                'Empresa' => $Empresa,
                'Registro' => strtoupper(Date('d/m/Y h:i:s a')),
                'FechaTermino' => ($EstatusT == "CONCLUIDO") ? Date("d/m/Y h:i:s a") : NULL
            );
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'save', 0);

            $DOCUMENTO = base_url() . 'uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . (strtoupper($EstatusT)) . '/' . $ID . '/' . ($_FILES["rArchivo"]["name"]);

            $data = array(
                'rDocumento' => $DOCUMENTO
            );

            $img = $_FILES["rArchivo"]["tmp_name"];
            if (!file_exists('uploads/SSHistorico/Scan')) {
                mkdir('uploads/SSHistorico/Scan', 0777, true);
            }
            if (!file_exists('uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $ID)) {
                mkdir('uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $ID, 0777, true);
            }
            if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], 'uploads/SSHistorico/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $ID . '/' . utf8_decode($_FILES["rArchivo"]["name"]))) {
                echo "EL ARCHIVO ES VÁLIDO Y SE SUBIÓ CON EXITO.\n";
            } else {
                echo "¡NO SE PUDO SUBIR EL ARCHIVO, VERIFIQUE LA CONSOLA PARA MÁS DETALLES!";
            }
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'EstatusR' => 'CANCELADO'
            );
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function onCancelarTramiteIMMSNOMINA() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'CANCELADO'
            );
            
            $ID = $this->resource_model->onAction('SSDocumentos', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAvance() {
        try {
            extract(filter_input_array(INPUT_POST));
            var_dump(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => $Estatus
            );
            if ($EstatusT == "CONCLUIDO") {
                $data = array('FechaTermino' => Date("d/m/Y h:i:s a"), 'Estatus' => $Estatus);
            }
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAvanceAsesoria() {
        try {
            extract(filter_input_array(INPUT_POST));
            var_dump(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => $Estatus
            );
            if ($EstatusT == "CONCLUIDO") {
                $data = array('FechaTermino' => Date("d/m/Y h:i:s a"), 'Estatus' => $Estatus);
            }
            $ID = $this->resource_model->onAction('SSHistorico', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddHistoricoNomina() {
        try {
            extract(filter_input_array(INPUT_POST));
            $dtm = $this->seguridadsocial_model->getEmpresasByID($Empresa);

//            var_dump($dtm); 
            var_dump(filter_input_array(INPUT_POST));
            $dmyhsia = strtoupper(Date('d-m-Y__h_i_s_a'));
            $data = array(
                'Empresa' => $Empresa,
                'Fecha' => $Fecha,
                'Estatus' => $Estatus,
                'TipoNomina' => $TipoNomina,
                'NTrabajadores' => $Trabajadores,
                'Registro' => strtoupper(Date('d/m/Y h:i:s a')),
                'FechaTermino' => ($EstatusT == "CONCLUIDO") ? strtoupper(Date('d/m/Y h:i:s a')) : NULL
            );
            $ID = $this->resource_model->onAction('SSNomina', $data, 'save', 0);
            $DOCUMENTO = base_url() . 'uploads/SSNomina/' . strtoupper($dtm[0]->RAZON) . '/' . strtoupper($EstatusT) . '/' . $dmyhsia . '/' . ($_FILES["rArchivo"]["name"]);
            $data = array(
                'rDocumento' => $DOCUMENTO
            );
            $img = $_FILES["rArchivo"]["tmp_name"];
            if (!file_exists('uploads/SSNomina/Scan')) {
                mkdir('uploads/SSNomina/Scan', 0777, true);
            }
            if (!file_exists('uploads/SSNomina/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $dmyhsia)) {
                mkdir('uploads/SSNomina/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $dmyhsia, 0777, true);
            }
            if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], 'uploads/SSNomina/' . strtoupper($dtm[0]->RAZON) . '/' . utf8_decode(strtoupper($EstatusT)) . '/' . $dmyhsia . '/' . utf8_decode($_FILES["rArchivo"]["name"]))) {
                echo "EL ARCHIVO ES VÁLIDO Y SE SUBIÓ CON EXITO.\n";
            } else {
                echo "¡NO SE PUDO SUBIR EL ARCHIVO, VERIFIQUE LA CONSOLA PARA MÁS DETALLES!";
            }
            $this->resource_model->onAction('SSNomina', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onConcluirNomina() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 2,
                'FechaTermino' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $dtm = $this->seguridadsocial_model->getNominasByID($ID);

            $sts = $dtm[0]->ESTATUS;
            print $ID . ", " . $sts . ", ";
            if ($sts == "EN PROCESO" || $sts == "NOTIFICADO AL ÁREA CONTABLE" || $sts == "NOTIFICADO AL TITULAR DE LA EMPRESA" || $sts == "INTEGRADO AL EXPEDIENTE DE LA EMPRESA") {
                $this->resource_model->onAction('SSNomina', $data, 'update', array('ID', $ID));
            } else {
                print "NO SE HA ACTUALIZ EL REGISTRO PORQUE YA ESTA CONCLUIDO.";
                print_r($dtm);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNominasByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            print utf8_decode(json_encode($this->seguridadsocial_model->getNominasByID($ID)));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarNomina() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 0);
            $this->resource_model->onAction('SSNomina', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
