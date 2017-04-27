<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mobiliario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    } 
    
    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETMOBILIARIO()");
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
            $query = $this->db->query("CALL SP_GETMOBILIARIOBYID($ID)");
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
    
    function getFotosXMobiliarioID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOSXMOBILIARIOID($ID)");
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
    
    function getFotoXID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOXID($ID)");
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
    
    function getEmpresas() {
        $this->db->select('D.ID, D.RazonS AS EMPRESA', false);
        $this->db->from('directorio AS D'); 
        $this->db->where('D.Empresa','PROPIA');
        $this->db->order_by('D.RazonS', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
    
    function getProveedores() {
        $this->db->select('PRO.ID, PRO.Proveedor AS PROVEEDOR', false);
        $this->db->from('proveedores AS PRO');
        $this->db->where('PRO.Estatus','ACTIVO');
        $this->db->order_by('PRO.Proveedor', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    } 
    
    function getInmobiliario() {
        $this->db->select('IMU.ID, CONCAT(IMU.Nombre," (",IMU.Calle," #",IMU.No,", ",IMU.Colonia," ",IMU.CP,")") AS INMUEBLE', false);
        $this->db->from('inmuebles AS IMU');
        $this->db->where('IMU.Estatus','ACTIVO');
        $this->db->order_by('IMU.Nombre', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
    
    function getResponsables() {
        $this->db->select('U.Id AS ID, CONCAT(U.nombre," ", U.apaterno," ",U.amaterno)  AS RESPONSABLE', false);
        $this->db->from('usuarios AS U');
        $this->db->where('U.Estatus','ACTIVO');
        $this->db->order_by('U.nombre', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
    
    function getTipos() {
        $this->db->select('TM.ID AS ID, TM.Tipo AS TIPO', false);
        $this->db->from('tipomueble AS TM');
        $this->db->where('TM.Estatus','ACTIVO');
        $this->db->order_by('TM.Tipo', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
}