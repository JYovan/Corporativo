<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class cajadeventa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select('CV.ID,'
                    . '(CASE '
                    . 'WHEN CV.Tipo = 0 THEN "NO APLICA" '
                    . 'WHEN CV.Tipo = 1 THEN "CAJA PRINCIPAL" '
                    . 'WHEN CV.Tipo = 2 THEN "CAJA ADICIONAL" '
                    . 'END) AS TIPO,CV.NumeroDeCaja AS "NUMERO DE CAJA", '
                    . '(CASE '
                    . 'WHEN CV.Area IS NULL THEN "SIN AREA" '
                    . 'ELSE (SELECT CM.Categoria FROM categoriasmateriales AS CM WHERE CM.ID = CV.Area )'
                    . 'END)'
                    . ' AS "UBICACIÓN DE LA CAJA",'
                    . '(CASE '
                    . 'WHEN CV.Responsable IS NULL THEN "SIN RESPONSABLE"'
                    . ' ELSE (SELECT CONCAT(IE.Nombre," ",IE.apaterno," ",IE.amaterno) FROM informacionempleados AS IE WHERE IE.ID = CV.Responsable)'
                    . 'END) AS "RESPONSABLE DE LA CAJA"', false);
            $this->db->from('cajadeventa AS CV');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFondosDeCajas() {
        try {
            $this->db->select('FDC.ID, FDC.Fecha, FDC.Caja, FDC.EfectivoInicial AS "EFECTIVO INICIAL", CONCAT("$",FORMAT(FDC.Cantidad ,2)) AS CANTIDAD, FDC.Estatus, FDC.Registro', false);
            $this->db->from('fondodecaja AS FDC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID($ID) {
        try {
            $this->db->select('CV.*', false);
            $this->db->from('cajadeventa AS CV');
            $this->db->where('CV.Estatus', 'ACTIVO');
            $this->db->where('CV.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCajas() {
        try {
            $this->db->select('CV.ID, CONCAT(CV.Caja," ",(CASE WHEN CV.Tipo = 1 THEN "(PRINCIPAL)" ELSE "(ADICIONAL)" END)) AS CAJA', false);
            $this->db->from('cajadeventa AS CV');
            $this->db->where_in('CV.Estatus', 'ACTIVO');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreas() {
        try {
            $this->db->select('CM.ID, CM.Categoria AS AREA', false);
            $this->db->from('categoriasmateriales AS CM');
            $this->db->where_in('CM.Estatus', 'ACTIVO');
            $this->db->order_by('CM.Categoria', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $this->db->select('IE.ID, CONCAT(IE.Nombre," ",IE.apaterno," ",IE.amaterno) AS RESPONSABLE', false);
            $this->db->from('informacionempleados AS IE');
            $this->db->order_by('IE.Nombre', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar($array) {
        try {
            $this->db->insert("cajadeventa", $array);
            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFondoDeCaja($array) {
        try {
            $this->db->insert("fondodecaja", $array);
            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
