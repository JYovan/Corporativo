<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

class CtrlProyectos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("proyectos_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vProyecto');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->proyectos_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectoByID() {
        try {
            extract($this->input->post());
            $data = $this->proyectos_model->getProyectoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());
            $data = array(
                'IdEmpresa'=>(isset($Empresa) && $Empresa !=='')? $Empresa :NULL,
                'IdActividad'=>(isset($Actividad) && $Actividad !=='')? $Actividad :NULL,
                'Proyecto' => ($Proyecto !== NULL) ? $Proyecto : NULL,
                'Descripcion' => ($Descripcion !== NULL && $Descripcion !=='') ? $Descripcion : NULL,
                'Modelo' => ($Modelo !== NULL) ? $Modelo : NULL,
                'Inmueble' => ($Inmueble !== NULL) ? $Inmueble : NULL,
                'SegmentoD' => ($SegmentoD !== NULL) ? $SegmentoD : NULL,
                'SuperficieT' => ($SuperficieT !== NULL && $SuperficieT !== '') ? $SuperficieT : 0.0,
                'SeccionD' => ($SeccionD !== NULL && $SeccionD !== '') ? $SeccionD : 0.0,
                'NumeroViviendas' => ($NumeroViviendas !== NULL && $NumeroViviendas !== '') ? $NumeroViviendas : 0,
                'Finicio' => ($Finicio !== NULL) ? $Finicio : NULL,
                'Ftermino' => ($Ftermino !== NULL) ? $Ftermino : NULL,
                'Calle' => ($Calle !== NULL) ? $Calle : NULL,
                'No' => ($No !== NULL) ? $No : NULL,
                'Colonia' => ($Colonia !== NULL) ? $Colonia : NULL,
                'Tipo' => ($Tipo !== NULL) ? $Tipo : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $ID = $this->proyectos_model->onAgregar($data);
            print "ID: " . $ID;
            $URL_DOC = 'uploads/Proyectos';
            $master_url = base_url() . $URL_DOC . '/';

            if (isset($_FILES["RutaLogo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["RutaLogo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["RutaLogo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["RutaLogo"]["name"];
                    $DATA = array(
                        'rImagen' => ($img)
                    );
                    $this->proyectos_model->onModificar($ID, $DATA);
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'IdEmpresa'=>(isset($Empresa) && $Empresa !=='')? $Empresa :NULL,
                'IdActividad'=>(isset($Actividad) && $Actividad !=='')? $Actividad :NULL,
                'Proyecto' => ($Proyecto !== NULL) ? $Proyecto : NULL,
                'Descripcion' => ($Descripcion !== NULL && $Descripcion !=='') ? $Descripcion : NULL,
                'Modelo' => ($Modelo !== NULL) ? $Modelo : NULL,
                'Inmueble' => ($Inmueble !== NULL) ? $Inmueble : NULL,
                'SegmentoD' => ($SegmentoD !== NULL) ? $SegmentoD : NULL,
                'SuperficieT' => ($SuperficieT !== NULL && $SuperficieT !=='') ? $SuperficieT : 0.0,
                'SeccionD' => ($SeccionD !== NULL && $SeccionD !=='') ? $SeccionD : 0,
                'NumeroViviendas' => ($NumeroViviendas !== NULL && $NumeroViviendas !=='') ? $NumeroViviendas : 0,
                'Finicio' => ($Finicio !== NULL) ? $Finicio : NULL,
                'Ftermino' => ($Ftermino !== NULL) ? $Ftermino : NULL,
                'Calle' => ($Calle !== NULL) ? $Calle : NULL,
                'No' => ($No !== NULL) ? $No : NULL,
                'Colonia' => ($Colonia !== NULL) ? $Colonia : NULL,
                'Tipo' => ($Tipo !== NULL) ? $Tipo : NULL
            );
            $this->proyectos_model->onModificar($ID, $DATA);
            print "ID: " . $ID;
            $URL_DOC = 'uploads/Proyectos';
            $master_url = base_url() . $URL_DOC . '/';

            if (isset($_FILES["RutaLogo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["RutaLogo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["RutaLogo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["RutaLogo"]["name"];
                    $DATA = array(
                        'rImagen' => ($img)
                    );
                    $this->proyectos_model->onModificar($ID, $DATA);
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
            extract($this->input->post());
            $this->proyectos_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInmuebles() {
        try {
            $data = $this->proyectos_model->getInmuebles();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getEmpresas() {
        try {
            $data = $this->proyectos_model->getEmpresas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getActividades() {
        try {
            $data = $this->proyectos_model->getActividades();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
