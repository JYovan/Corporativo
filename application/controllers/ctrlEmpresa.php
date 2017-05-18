<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlEmpresa extends CI_Controller {

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
        $this->load->model("modelo");
        $this->load->model("resource_model");
        $this->load->model("empresas_model");
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
            $indiceuser = $_SESSION["ID"];
            $where = '';
            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $d_cliente = $this->modelo->getCliente($where);
            $data['cliente'] = $d_cliente;
//Abriendo BD responsables
            $where = '';
            $d_responsables = $this->modelo->getResponsable($where);
            $data['Responsables'] = $d_responsables;
//Abriendo BD Tipo-cliente
            $where = '';
            $d_Tipo_cliente = $this->modelo->getTipoCliente2($where);
            $data['Tipo_cliente'] = $d_Tipo_cliente;
//Abriendo BD SubTipo-cliente
            $where = '';
            $d_SubTipo_cliente = $this->modelo->getSubTipoCliente2($where);
            $data['SubTipo_cliente'] = $d_SubTipo_cliente;
//Abriendo BD cliente
            $where = '';
            $d_ID_cliente = $this->modelo->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
//Abriendo BD Regimen
            $where = '';
            $d_regimen = $this->modelo->getRegimen($where);
            $data['Regimen'] = $d_regimen;
//Abriendo BD Forma
            $where = '';
            $d_Forma = $this->modelo->getForma($where);
            $data['Forma'] = $d_Forma;
//Abriendo BD Ambito
            $where = '';
            $d_Ambito = $this->modelo->getAmbito($where);
            $data['Ambito'] = $d_Ambito;
//Abriendo BD Clasificacion
            $where = '';
            $d_Clasificacion = $this->modelo->getClasificacion($where);
            $data['Clasificacion'] = $d_Clasificacion;
//Abriendo BD Tamanio
            $where = '';
            $d_Tamanio = $this->modelo->getTamanio($where);
            $data['Tamanio'] = $d_Tamanio;
//Abriendo BD Sector
            $where = '';
            $d_Sector = $this->modelo->getSector($where);
            $data['Sector'] = $d_Sector;
//Abriendo BD Rama
            $where = '';
            $d_Rama = $this->modelo->getRama($where);
            $data['Rama'] = $d_Rama;
//Abriendo BD Pais
            $where = '';
            $d_Pais = $this->modelo->getPais($where);
            $data['Pais'] = $d_Pais;
//Abriendo BD Estado
            $where = '';
            $d_Estado = $this->modelo->getEstado2($where);
            $data['Estado'] = $d_Estado;
//Abriendo BD Ciudad
            $where = '';
            $d_Ciudad = $this->modelo->getCiudad2($where);
            $data['Ciudad'] = $d_Ciudad;
// View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vEmpresas';
            $this->_renderView($data);
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    public function getRecords() {
        try {
            $data = $this->empresas_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresaByID() {
        try {
            extract($this->input->post());
            $data = $this->empresas_model->getEmpresaByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddEmpresa() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'NombreC'), FILTER_SANITIZE_STRING)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'Sucursal' => $Sucursal,
                    'Estatus' => 0,
                    'id_responsable' => $Responsable,
                    'Folio' => "",
                    'NombreC' => $NombreC,
                    'RazonS' => $RazonS,
                    'RFC' => $RFC,
                    'CURP' => $CURP,
                    'RepresentanteL' => $RepresentanteL,
                    'cliente' => $cliente,
                    'Tipo_cliente' => $Tipo_cliente,
                    'SubTipo_cliente' => $SubTipo_cliente,
                    'RegimenJ' => $RegimenJ,
                    'FormaJ' => $FormaJ,
                    'AmbitoA' => $AmbitoA,
                    'Tamanio' => $Tamanio,
                    'Sector' => $Sector,
                    'Clasificacion' => '',
                    'Rama' => $Rama,
                    'Calle' => $Calle,
                    'No' => $No,
                    'Colonia' => $Colonia,
                    'CP' => $CP,
                    'Pais' => $Pais,
                    'Estado' => $Estado,
                    'Ciudad' => $Ciudad,
                    'Lada' => $Lada,
                    'Tel' => $Tel,
                    'Pagina' => $Pagina,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'linkedin' => $linkedin,
                    'google' => $google,
                    'Contacto' => $Contacto,
                    'Profesion' => $Profesion,
                    'Puesto' => $Puesto,
                    'Correo' => $Correo,
                    'C_Lada' => $C_Lada,
                    'C_Tel' => $C_Tel,
                    'C_Ext' => $C_Ext,
                    'Fecha' => $Fecha
                );
                $ID = $this->resource_model->onAction("Directorio", $data, "save", 0);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
