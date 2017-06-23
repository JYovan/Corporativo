<?php

/*
 * Copyright 2017 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */

class ctrlPuntoDeVenta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        require_once APPPATH . "/third_party/fpdf17/fpdf.php";
        $this->load->model("puntodeventa_model");
        $this->load->model("resource_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vPuntoDeVenta');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->puntodeventa_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
