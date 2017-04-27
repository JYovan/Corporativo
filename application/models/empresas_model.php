<?php
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class empresas_model extends CI_Model {

    public function __construct() {
        parent::__construct(); 
    }
    
    function getRecords() {
        $this->db->select('
            DIR.ID, DIR.NombreC AS "NOMBRE COMERCIAL", DIR.RazonS AS RAZON, DIR.RFC AS RFC, 
            DIR.RepresentanteL AS "REPRESENTANTE LEGAL", DIR.Calle AS CALLE, DIR.No AS "# EXT", 
            DIR.Colonia AS COLONIA, DIR.CP AS "CODIGO POSTAL", 
            (SELECT CONCAT(U.nombre, " ", U.apaterno, " ",U.amaterno) FROM usuarios AS U 
            WHERE U.ID = DIR.id_responsable) AS RESPONSABLE', false);
        $this->db->from('Directorio AS DIR'); 
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
}