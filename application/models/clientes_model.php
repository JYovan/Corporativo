<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class clientes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $sql = $this->db;
            $this->db->select("C.ID, (CASE "
                    . "WHEN C.Proyectos IS NULL THEN \"NO ESPECIFICA\" ELSE "
                    . "(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = C.Proyectos)"
                    . " END) AS PROYECTO,(CASE WHEN C.Ncliente IS NULL THEN \"NO ESPECÍFICA\" ELSE C.Ncliente END) AS CLIENTE, "
                    . "(CASE "
                    . "WHEN C.Referencia IS NULL THEN \"NO ESPECÍFICA\" "
                    . "WHEN C.Referencia = 0 THEN \"NO ESPECÍFICA\" "
                    . "WHEN C.Referencia = 1 THEN \"PROMOTOR\" "
                    . "WHEN C.Referencia = 2 THEN \"FAMILIAR\" "
                    . "WHEN C.Referencia = 3 THEN \"AMIGO\" "
                    . "WHEN C.Referencia = 4 THEN \"OTRO CLIENTE\" "
                    . "WHEN C.Referencia = 5 THEN \"INICIATIVA PERSONAL\" "
                    . "ELSE \"N/A\" END) AS \"RECOMENDÓ\", "
                    . "(CASE "
                    . "WHEN C.Medio IS NULL THEN \"NO ESPECÍFICA\" "
                    . "WHEN C.Medio = 0 THEN \"NO ESPECÍFICA\" "
                    . "WHEN C.Medio = 1 THEN \"RADIO\" "
                    . "WHEN C.Medio = 2 THEN \"TELEVISIÓN\" "
                    . "WHEN C.Medio = 3 THEN \"FACEBOOK\" "
                    . "WHEN C.Medio = 4 THEN \"TWITTER\" "
                    . "WHEN C.Medio = 5 THEN \"ANUNCIO EN PARADERO\" "
                    . "WHEN C.Medio = 6 THEN \"ANUNCIO EN PENDÓN\" "
                    . "WHEN C.Medio = 7 THEN \"ESPECTACULAR\" "
                    . "WHEN C.Medio = 8 THEN \"POR EL PERIÓDICO\" "
                    . "WHEN C.Medio = 9 THEN \"POR REVISTA\" "
                    . "WHEN C.Medio = 10 THEN \"POR FOLLETOS INFORMATIVOS\" "
                    . "WHEN C.Medio = 11 THEN \"PÁGINA WEB\" "
                    . "WHEN C.Medio = 12 THEN \"CORREO ELECTRÓNICO\" "
                    . "WHEN C.Medio = 13 THEN \"PORQUE PASE POR EL DESARROLLO DE LA VIVIENDA\" "
                    . "WHEN C.Medio = 14 THEN \"PERIFONEO\" "
                    . "WHEN C.Medio = 14 THEN \"TELÉFONO\" "
                    . " END) AS \"MEDIO\", IFNULL(C.Calle,\"NO ESPECIFICA\") AS CALLE, IFNULL(C.No,\"NO ESPECÍFICA\") AS \"NÚMERO\", IFNULL(C.Colonia,\"NO ESPECÍFICA\") AS COLONIA, "
                    . "IFNULL(C.CP,\"NO ESPECÍFICA\") AS \"CÓDIGO POSTAL\", "
                    . "(CASE WHEN C.Pais IS NULL THEN \"NO ESPECIFICA\" WHEN C.Pais = 0 THEN \"NO ESPECIFICA\" ELSE (SELECT P.dsc_pais FROM Pais AS P WHERE P.id_pais = C.Pais) END) AS \"PAÍS\", "
                    . "(CASE WHEN C.Estado IS NULL THEN \"NO ESPECIFICA\" WHEN C.Estado = 0 THEN \"NO ESPECIFICA\" ELSE (SELECT E.dsc_estado FROM Estado AS E WHERE E.id_estado = C.Estado) END) AS ESTADO, "
                    . "(CASE WHEN C.Ciudad IS NULL THEN \"NO ESPECIFICA\" WHEN C.Ciudad = 0 THEN \"NO ESPECIFICA\" ELSE (SELECT CI.dsc_ciudad FROM Ciudad AS CI WHERE CI.id_ciudad = C.Ciudad) END) AS CIUDAD, "
                    . "IFNULL(C.Telfijo,\"NO ESPECÍFICA\") AS \"TELÉFONO FIJO\",  "
                    . "IFNULL(C.Tel,\"NO ESPECÍFICA\") AS \"TELÉFONO MÓVIL\", IFNULL(C.Correo,\"NO ESPECÍFICA\") AS CORREO,IFNULL(C.IFE,\"NO ESPECÍFICA\") AS IFE, "
                    . "IFNULL(C.RFC,\"NO ESPECÍFICA\") AS RFC, IFNULL(C.CURP,\"NO ESPECÍFICA\") AS CURP, IFNULL(C.NSS,\"NO ESPECÍFICA\") AS NSS, "
                    . "IFNULL(C.Escolaridad,\"NO ESPECÍFICA\") AS ESCOLARIDAD,C.Estatus, C.Registro ", false);
            $sql->from('Clientes AS C');
            $sql->where_in('C.Estatus', array('ACTIVO'));
            $query = $sql->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $sql->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRegistroByID($ID) {
        try {
            $sql = $this->db;
            $this->db->select("C.*", false);
            $sql->from('Clientes AS C');
            $sql->where('C.ID', $ID);
            $query = $sql->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $sql->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $this->db->select('PRO.ID, UPPER(PRO.Proyecto) AS PROYECTO', false);
            $this->db->from('Proyectos AS PRO');
//            $this->db->where_in('PRO.Tipo', array('PROPIO', 'FIDEICOMISO', 'CONTRATO DE OBRA'));
//            $this->db->where_in('PRO.Modelo', array(1, 2, 3));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
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

    public function getMunicipiosXEstado($ID) {
        try {
            $this->db->select('C.id_ciudad AS ID, C.dsc_ciudad AS MUNICIPIO', false);
            $this->db->from('Ciudad AS C');
            $this->db->where('C.id_estado', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
