<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class tramitesreferenciados_model extends CI_Model {

    public function __construct() {
        $this->db = $this->load->database('seug', TRUE);
    }

    function getRecords() {
        $this->db->select('REF.*,REF.Estatus AS ESTATUS', FALSE);
        $this->db->from('Referenciados  AS REF');
//        $this->db->join('ProyectosViviendas AS prov', 'g.IdDesarrollo = prov.Desarrollo');   
//        $this->db->group_by("g.IdGarantia");
//        $this->db->order_by("g.IdGarantia", "asc");
        $this->db->where('REF.Status', 'ACTIVO');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
//        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

}