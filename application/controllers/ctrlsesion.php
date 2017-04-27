<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlsesion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->load->model("permisos_model");
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
            $data['contentView'] = 'vMenu';
            $data['scripts'] = array('cliente');
            $this->_renderView($data);
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function onLoadMenuF() {
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'vMenu';
        $this->_renderView($data);
    }

    public function onLogIn() {
        try {
            $this->load->model("sesion_model");
            extract($_POST);
            if (isset($login) && isset($password)) {
                $datos = json_encode($this->sesion_model->getAcceso($login, $password));
                $dtm = json_decode($datos, true);
                if (isset($dtm[0]['Id'])) {
                    session_start();
                    $_SESSION["ID"] = $dtm[0]['Id'];
                    $_SESSION["PERMISOS"] = $this->permisos_model->getPermisosXUsuario($dtm[0]['Id']);
                    $_SESSION["USUARIO_ID"] = $dtm[0]['Id'];
                    $_SESSION["USUARIO_NOMBRE"] = $dtm[0]['nombre'];
                    $_SESSION["USUARIO_IMAGEN"] = $dtm[0]['Imagen'];
                    $_SESSION["USUARIO_CONTRASENA"] = $dtm[0]['DataPass'];
                    $_SESSION["USUARIO"] = $dtm;
                    $_SESSION["firstime"] = 0; 
                    $this->onLoadMenu();
                } else {
                    echo $this->load->view('layout/base/lytBaseHead');
                    echo $this->load->view('vLogin');
                    print 0;
                }
            } else {
                if (isset($_SESSION["ID"])) {
                    echo $this->load->view('layout/base/lytBaseHead');
                    echo $this->load->view('vLogin');
                    print 0;
                } else {
                    $data['contentView'] = 'vMenu';
                $this->_renderView($data);
                    print 1;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onValidateSession() {
        try {
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onLoadData() {
        session_start();
        if (isset($_SESSION['ID'])) {
            $this->onLoadMenu();
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function setInicioSesion() {
        if (isset($_SESSION["ID"])) {
            unset($_SESSION['ID']);
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        } else {
            $this->onLoadMenu();
        }
    }

    public function onLoadMenu() {
        if (isset($_SESSION['ID'])) {
            $where = '';
            $this->load->model("modelo");
            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $indiceuser = $_SESSION['USUARIO'];
            $data['User'] = $indiceuser[0]['Id'];
            $Permisos = $this->modelo->getPermisos($indiceuser[0]['Id']);
            $data['PERMISOS'] = $Permisos;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vMenu';
            $this->_renderView($data);
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function onGoOut() {
        session_start();
        $_SESSION["firstime"] = 0;
        session_unset();
        session_destroy();
        print 0;
    }

}
