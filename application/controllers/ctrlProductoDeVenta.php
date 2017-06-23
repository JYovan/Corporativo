<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */

class ctrlProductoDeVenta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("productosdeventa_model");
        $this->load->model("resource_model");
        require_once APPPATH . "/third_party/fpdf17/fpdf.php";
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vProductosDeVenta');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->productosdeventa_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCategoriasDeMateriales() {
        try {
            $data = $this->productosdeventa_model->getCategoriasDeMateriales();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosAsignadosXAlmacen() {
        try {
            $data = $this->productosdeventa_model->getProductosAsignadosXAlmacen();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosAsignados() {
        try {
            $data = $this->productosdeventa_model->getProductosAsignados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedoresXProductosAsignados() {
        try {
            $data = $this->productosdeventa_model->getProveedoresXProductosAsignados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
