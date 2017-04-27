<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class inmobiliario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    } 
    
    function getRecords() {
        try {
                $query = $this->db->query("CALL SP_GETINMOBILIARIO()");
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
    function getRecordByID($ID) {
        try {
                $query = $this->db->query("CALL SP_GETINMOBILIARIOBYID($ID)");
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
    
   
    function getCiudades($ID) {
        $this->db->select('C.id AS ID, CONCAT(C.dsc_ciudad, " (", (SELECT E.dsc_estado FROM Estado AS E WHERE E.id_estado =C.id_estado), ")") AS CIUDAD', false);
        $this->db->from('Ciudad AS C');
        $this->db->where('C.id_estado',$ID);
        $this->db->order_by('C.dsc_ciudad', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getEstados() {
        $this->db->select('E.id_estado AS ID, E.dsc_estado AS ESTADO', false);
        $this->db->from('Estado AS E');
        $this->db->order_by('E.dsc_estado', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
    function getUsos() {
        $this->db->select('UI.ID AS ID, UI.Uso AS USO', false);
        $this->db->from('usosinmuebles AS UI');
        $this->db->where('UI.Estatus', 'ACTIVO');
        $this->db->order_by('UI.Uso', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
}