<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class tramites_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETTRAMITES()");
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

    public function getRecordByID($ID) {
        try {
            $this->db->select('RT.*', false);
            $this->db->from("rtramites AS RT");
            $this->db->where('RT.ID',$ID);
            $this->db->where_not_in("RT.Estatus", array("INACTIVO","ELIMINADO", "CANCELADO"));
            $this->db->order_by('RT.ID','ASC');    
            $query = $this->db->get();
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

    public function getAdjuntoByID($ID) {
        try {
            $this->db->select('RTS.*', false);
            $this->db->from("rtramites AS RT");
            $this->db->join("rtramitesseguimiento AS RTS","RT.ID = RTS.Tramite");
            $this->db->where('RTS.ID',$ID);
            $this->db->where_not_in("RTS.Estatus", array("INACTIVO","ELIMINADO", "CANCELADO"));
            $this->db->order_by('RTS.ID','ASC');    
            $query = $this->db->get();
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
    public function getAdjuntosByID($ID) {
        try {
            $this->db->select('RTS.*', false);
            $this->db->from("rtramites AS RT");
            $this->db->join("rtramitesseguimiento AS RTS","RT.ID = RTS.Tramite");
            $this->db->where('RT.ID',$ID);
            $this->db->where_not_in("RTS.Estatus", array("INACTIVO","ELIMINADO", "CANCELADO"));
            $this->db->order_by('RTS.ID','ASC');    
            $query = $this->db->get();
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
    
    public function getProyectos() {
        try {
            $this->db->select('PROY.ID, PROY.Proyecto AS PROYECTO', false);
            $this->db->from("Proyectos AS PROY");
            $this->db->where_not_in("PROY.Estatus", array("ELIMINADO", "CANCELADO"));
            $this->db->order_by('PROY.Proyecto','ASC');    
            $query = $this->db->get();
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

    public function getTramites() {
        try {
            $this->db->select('RT.id_tramite AS ID, RT.dsc_tramite AS TRAMITE', false);
            $this->db->from("tramitesconstruccion AS RT");
            $this->db->where_not_in("RT.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('RT.dsc_tramite','ASC');    
            $query = $this->db->get();
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

    public function getContratos() {
        try {
            $this->db->select('CDO.ID AS ID, CDO.ContratoDeObra AS CONTRATO', false);
            $this->db->from("contratosdeobra AS CDO");
            $this->db->where_not_in("CDO.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('CDO.ContratoDeObra','ASC');    
            $query = $this->db->get();
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

    public function getResponsables() {
        try {
            $this->db->select('U.Id AS ID, CONCAT(U.nombre," ", U.apaterno," ", U.amaterno) AS RESPONSABLE', false);
            $this->db->from("usuarios AS U"); 
            $this->db->where_not_in("U.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('U.nombre','ASC');    
            $query = $this->db->get();
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
