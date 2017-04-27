<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlTipoVivienda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("tipovivienda_model");
    }
 
    public function getViviendasXProyecto() {
        try {
                extract(filter_input_array(INPUT_POST));
            $data = $this->tipovivienda_model->getViviendasXProyecto($PROYECTO);
//            var_dump($data);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
