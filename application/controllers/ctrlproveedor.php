<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlproveedor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("mdlproveedor");
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

    public function onAction() {
        date_default_timezone_set('America/Mexico_City');
        if (isset($_POST["index"])) {
            extract($_POST);
            switch ($index) {
                case 1:
                    $data = $DB["TYPE"] = "update";
                    $fechaactual = date('Y-m-d H:i:s');
                    $DB["TABLE"] = "Catalogo";
                    $DB["KEYVALUES"] = array(
                        "Precio" => $NPRECIO,
                        "FechaPrecio" => $fechaactual
                    );
                    $DB["FIELD_ID_UPDATE"] = "ID";
                    $DB["FIELD_CONDITION_UPDATE"] = $ID;
                    $data = $this->mdlproveedor->onAction($DB);
                    $data_json_callback = $this->mdlproveedor->getPrice($ID);
                    print json_encode($data_json_callback);
                    break;
                default:
                    break;
            }
        }
    }

    public function getData() {
        try {
            $data = $this->mdlproveedor->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
