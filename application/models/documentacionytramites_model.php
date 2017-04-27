<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class documentacionytramites_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTACIONYTRAMITES()");
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
            $query = $this->db->query("CALL SP_GETDOCUMENTACIONYTRAMITEXID($ID)");
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

    public function getHistorialXTramiteID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETHISTORIALXTRAMITEID($ID)");
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

    public function getArchivoHistorialXTramiteID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETARCHIVOHISTORIALXTRAMITEID($ID)");
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

    public function getHistorialXTramiteConcluidoID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETHISTORIALXTRAMITECONCLUIDOID($ID)");
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

    public function getArchivoHistorialXTramiteConcluidoID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETARCHIVOXHISTORIALXTRAMITECONCLUIDOID($ID)");
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

    public function getDocumentacionYTramitesAsignadoXID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTACIONYTRAMITESASIGNADOXID($ID)");
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


    public function getDocumentacionYTramitesAsignados() {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTACIONYTRAMITESASIGNADOS()");
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


    public function getDocumentacionYTramitesAsignadosXUsuarioID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTACIONYTRAMITESASIGNADOSXUSUARIOID($ID)");
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

    function getAreas() {
        $this->db->select('A.id_area AS ID, A.dsc_area AS AREA', false);
        $this->db->from('area AS A');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        return $data;
    }

    function getPuestos() {
        $this->db->select('P.id_puesto AS ID, P.dsc_puesto AS PUESTO', false);
        $this->db->from('puesto AS P');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        return $data;
    }

    function getEmpleados() {
        try {
            $this->db->select('IE.ID, CONCAT(IE.Nombre, " ",IE.apaterno," ",IE.amaterno) AS EMPLEADO', false);
            $this->db->from('InformacionEmpleados as IE');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getProveedores() {
        try {
            $this->db->select('PRO.ID,PRO.Proveedor AS PROVEEDOR', false);
            $this->db->from('proveedores as PRO');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getTipos() {
        try {
            $this->db->select('TD.ID,TD.TIPO AS TIPO', false);
            $this->db->from('tipodocumentacion as TD');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getCategorias() {
        try {
            $this->db->select('CD.ID,CD.CATEGORIA AS CATEGORIA', false);
            $this->db->from('categoriadocumentacion as CD');
            $this->db->order_by('CD.CATEGORIA','ASC');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
