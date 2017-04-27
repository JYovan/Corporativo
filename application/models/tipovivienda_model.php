<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class tipovivienda_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getViviendasXProyecto($PROYECTO) {
        try {
            $query = $this->db->query("CALL SP_GETVIVIENDASXPROYECTO($PROYECTO)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
