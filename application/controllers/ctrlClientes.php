<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlClientes extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("clientes_model");
        $this->load->model("resource_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vClientes');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            print json_encode($this->clientes_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRegistroByID() {
        try {
            print json_encode($this->clientes_model->getRegistroByID($this->input->post("ID")));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            print json_encode($this->clientes_model->getProyectos());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstados() {
        try {
            $data = $this->clientes_model->getEstados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMunicipiosXEstado() {
        try {
            $data = $this->clientes_model->getMunicipiosXEstado($this->input->post("ID"));
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* AGREGAR */

    public function onAgregar() {
        try {
            $data = array();
            foreach ($this->input->post() as $key => $v) {
                if ($v !== '') {
                    $data[$key] = ($v !== '') ? strtoupper($v) : NULL;
                }
            }
            $data["Registro"] = Date('d/m/Y h:i:s a');
            $data["Estatus"] = "ACTIVO";

            $this->resource_model->onAction("clientes", $data, "save", 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* MODIFICAR */

    public function onModificar() {
        try {
            $ID = $this->input->post("ID");
            $data = array();
            foreach ($this->input->post() as $key => $v) {
                if ($v !== '') {
                    $data[$key] = ($v !== '') ? strtoupper($v) : NULL;
                }
            }
            unset($data["ID"]);
            $this->resource_model->onAction("clientes", $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* MODIFICAR */

    public function onEliminar() {
        try {
            $ID = $this->input->post("ID");
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction("clientes", $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
