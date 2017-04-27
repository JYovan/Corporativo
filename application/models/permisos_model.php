<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class permisos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    } 
    
    public function getPermisosXUsuario($ID) {
        try {
            $query = $this->db->query("CALL SP_GETPERMISOSXUSUARIO($ID)");
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
    
    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETPERMISOS()");
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
    
    public function getUsuarios() {
        try {
            $query = $this->db->query("CALL SP_GETUSUARIOSENPERMISOS()");
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
    
    public function getModulos() {
        try {
            $query = $this->db->query("CALL SP_GETMODULOSENPERMISOS()");
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