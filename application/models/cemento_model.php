<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cemento_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",PC.ID,"</span>") AS ID, PC.Fecha, CONCAT(CC.Nombre," (TEL: ",CC.Tel,")") AS COMERCIALIZADOR, CCM.dsc_marca AS MARCA, PC.Atiende, '
                . 'CONCAT("$",FORMAT(PC.PrecioCblanco,2)) AS "CEMENTO BLANCO",CONCAT("$",FORMAT(PC.PrecioCgris,2)) AS "CEMENTO GRIS", CONCAT("$",FORMAT(PC.PrecioCmortero,2)) AS "MORTERO", PC.Estatus AS ESTATUS, PC.Registro "FECHA DE REGISTRO"', false);
        $this->db->from('ComerCementoPrecio AS PC');
        $this->db->join('ComerCemento AS CC', 'PC.Comercializador = CC.ID');
        $this->db->join('ComerCementoMarca AS CCM', 'PC.Marca = CCM.id_marca');
        $this->db->where_not_in('PC.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('PC.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getRecordsByDate($Inicio, $Fin) {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",PC.ID,"</span>") AS ID, PC.Fecha, CONCAT(CC.Nombre," (TEL: ",CC.Tel,")") AS COMERCIALIZADOR, CCM.dsc_marca AS MARCA, PC.Atiende, '
                . 'CONCAT("$",FORMAT(PC.PrecioCblanco,2)) AS "CEMENTO BLANCO",CONCAT("$",FORMAT(PC.PrecioCgris,2)) AS "CEMENTO GRIS", CONCAT("$",FORMAT(PC.PrecioCmortero,2)) AS "MORTERO", PC.Estatus AS ESTATUS, PC.Registro "FECHA DE REGISTRO"', false);
        $this->db->from('ComerCementoPrecio AS PC');
        $this->db->join('ComerCemento AS CC', 'PC.Comercializador = CC.ID');
        $this->db->join('ComerCementoMarca AS CCM', 'PC.Marca = CCM.id_marca');
        if ($Inicio != '') {
            $this->db->where('str_to_date(PC.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $Inicio . '\', \'%d/%m/%Y\') ');
        }
        if ($Fin != '') {
            $this->db->where('str_to_date(PC.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $Fin . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_not_in('PC.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('PC.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getRecordsByDateWT($Inicio, $Fin) {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",PC.ID,"</span>") AS ID, PC.Fecha, CC.Nombre AS COMERCIALIZADOR, CCM.dsc_marca AS MARCA, PC.Atiende, '
                . 'CONCAT("$",FORMAT(PC.PrecioCblanco,2)) AS "CEMENTO BLANCO",CONCAT("$",FORMAT(PC.PrecioCgris,2)) AS "CEMENTO GRIS", CONCAT("$",FORMAT(PC.PrecioCmortero,2)) AS "MORTERO", PC.Estatus AS ESTATUS, PC.Registro "FECHA DE REGISTRO"', false);
        $this->db->from('ComerCementoPrecio AS PC');
        $this->db->join('ComerCemento AS CC', 'PC.Comercializador = CC.ID');
        $this->db->join('ComerCementoMarca AS CCM', 'PC.Marca = CCM.id_marca');
        if ($Inicio != '') {
            $this->db->where('str_to_date(PC.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $Inicio . '\', \'%d/%m/%Y\') ');
        }
        if ($Fin != '') {
            $this->db->where('str_to_date(PC.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $Fin . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_not_in('PC.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('PC.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getPreciosDelCementoByID($ID) {
        $this->db->select('PC.ID, PC.Fecha, PC.Comercializador, PC.Marca, PC.Atiende, PC.PrecioCblanco, PC.PrecioCgris, PC.PrecioCmortero, PC.Estatus, PC.Registro', false);
        $this->db->from('ComerCementoPrecio AS PC');
        $this->db->where('PC.ID', $ID);
        $this->db->where_not_in('PC.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('PC.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getComercializadores() {
        try {
            $this->db->select('CC.ID AS ID,CONCAT(CC.Nombre," (TEL: ",CC.Tel,")") AS COMERCIALIZADOR', false);
            $this->db->from('ComerCemento AS CC');
            $this->db->where_not_in('CC.Estatus', array('INACTIVO', 'CANCELADO'));
            $this->db->order_by('CC.ID', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordsComercializadores() {
        try {
            $this->db->select('CC.ID AS ID,CC.Nombre AS COMERCIALIZADOR,CC.Tel AS TELEFONO, CC.Direccion, CC.Numero, CC.Estatus, CC.Registro', false);
            $this->db->from('ComerCemento AS CC');
            $this->db->where_not_in('CC.Estatus', array('INACTIVO', 'CANCELADO'));
            $this->db->order_by('CC.ID', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getComercializadoresByID($ID) {
        try {
            $this->db->select('CC.ID, CC.Nombre, CC.Tel, '
                            . 'CC.Pagina, CC.Direccion, CC.Numero, '
                            . 'CC.Pais, (SELECT P.dsc_pais FROM Pais AS P WHERE P.id_pais = CC.Pais) AS PaisT, '
                            . 'CC.Estado, '
                            . '(SELECT E.dsc_estado FROM Estado AS E WHERE E.id_estado = CC.Estado) AS EstadoT, '
                            . 'CC.Ciudad, (SELECT C.dsc_ciudad FROM Ciudad AS C WHERE C.id_ciudad = CC.Ciudad) AS CiudadT,'
                            . 'CC.Estatus, CC.Registro', false);
            $this->db->from('ComerCemento AS CC');
            $this->db->where('CC.ID',$ID);
            $this->db->where_not_in('CC.Estatus', array('INACTIVO', 'CANCELADO')); 
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getMarcas() {
        try {
            $this->db->select('CCM.id_marca AS ID, CCM.dsc_marca AS MARCA');
            $this->db->from('ComerCementoMarca AS CCM');
            $this->db->where_not_in('CCM.Estatus', array('INACTIVO', 'CANCELADO'));
            $this->db->order_by('CCM.id_marca', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPaises() {
        try {
            $this->db->select('P.id_pais ID, P.dsc_pais AS PAIS', false);
            $this->db->from('Pais AS P');
            $this->db->where('P.id_pais IN (SELECT E.id_pais FROM Estado AS E)', null, false);
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

    function getCiudades() {
        $this->db->select('C.id_ciudad AS ID, CONCAT(C.dsc_ciudad) AS CIUDAD', false);
        $this->db->from('Ciudad AS C');
        $this->db->order_by('C.dsc_ciudad', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getCiudadesXEstado($ID) {
        $this->db->select('C.id_ciudad AS ID, C.dsc_ciudad AS CIUDAD', false);
        $this->db->from('Ciudad AS C');
        $this->db->where('C.id_estado',$ID);
        $query = $this->db->get();
        $data = $query->result();
            $str = $this->db->last_query();
//        print $str;
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getEstados() {
        $this->db->select('E.id_estado AS ID, E.dsc_estado AS ESTADOS', false);
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

}
