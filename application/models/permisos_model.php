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

    public function getEntradasYSalidas() {
        try {
            $query = $this->db->query("CALL SP_GETENTRADASYSALIDAS()");
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

    public function getEntradasYSalidasXUsuarioID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETENTRADASYSALIDASXUSUARIOID($ID)");
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

    public function getUsuariosXReloj() {
        try {
            $query = $this->db->query("CALL SP_GETUSUARIOS()");
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

    public function onBuscarAccesosXFechas($INICIO, $FIN,$USUARIO) {
        try {

            $NOT_IN = array('CANCELADA', 'CANCELADO', 'INACTIVO', 'INACTIVA');
            $SELECT = "RC.ID, RC.Nombre AS \"SESSIÓN DE\", RC.IdUsuarioT AS VERIFICO, RC.Tipo AS \"ENTRADA/SALIDA\", 
    RC.Fecha AS FECHA, RC.Hora AS HORA, RC.Observaciones AS OBSERVACIONES, RC.Estatus AS ESTATUS ";
            $this->db->select($SELECT, false);
            $this->db->from('relojchecador AS RC');

            if ($USUARIO != '') {
                $this->db->where('RC.IdUsuario',$USUARIO);
            }
            if ($INICIO != '') {
                $this->db->where('str_to_date(RC.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(RC.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            $this->db->order_by('RC.ID','ASC');
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

    public function onBuscarReporteDeAccesosXFechas($INICIO, $FIN,$USUARIO) {
        try {

            $NOT_IN = array('CANCELADA', 'CANCELADO', 'INACTIVO', 'INACTIVA');
            $SELECT = "RC.ID, RC.Nombre AS \"SESSIÓN DE\", RC.IdUsuarioT AS VERIFICO, RC.Tipo AS \"ENTRADASALIDA\", 
    RC.Fecha AS FECHA, RC.Hora AS HORA, RC.Observaciones AS OBSERVACIONES, RC.Estatus AS ESTATUS ";
            $this->db->select($SELECT, false);
            $this->db->from('relojchecador AS RC');

            if ($USUARIO != '') {
                $this->db->where('RC.IdUsuario',$USUARIO);
            }
            if ($INICIO != '') {
                $this->db->where('str_to_date(RC.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(RC.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            $this->db->order_by('RC.ID','ASC');
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
