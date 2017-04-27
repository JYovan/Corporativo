<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PostVenta_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function getRecords() {
        $this->db->select('pv.IdPostVenta AS ID, pv.Actividad AS ACTIVIDAD, pv.Fecha AS FECHA, pv.Descripcion AS DESCRIPCION, '
                . 'pv.Lugar AS LUGAR, pv.Calle AS CALLE, pv.Numero "NUMERO EXTERIOR", pv.Colonia AS COLONIA,e.dsc_estado AS ESTADO,'
                . 'ciu.dsc_ciudad CIUDAD, pv.Duracion AS DURACION, pv.HoraInicio "HORA INICIO",pv.HoraTermino AS "HORA TERMINO",'
                . 'pv.Participante "PARTICIPANTE EMPRESA",cli.Ncliente CLIENTE, pv.Otros OTROS, pv.Notario AS NOTARIO, pv.NumeroNotario AS "NUMERO DEL NOTARIO",pv.Estatus AS ESTATUS');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Estado e', 'pv.IdEstado = e.id_estado');
        $this->db->join('Ciudad ciu', 'pv.IdCiudad = ciu.id_ciudad');
        $this->db->join('Clientes cli', 'pv.IdCliente = cli.ID');
        $this->db->where('pv.Estatus', 'ACTIVO');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsbyCols($tbl, $cols) {
        $this->db->select('pv.IdPostVenta, pv.Actividad, pv.Fecha, pv.Descripcion, pv.Lugar, pv.Calle, pv.Numero NumeroExt, pv.Calle');
        $this->db->from('PostVenta AS pv');
        $this->db->where('pv.Estatus', 'ACTIVO');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsByID($ID) {
        $this->db->select('*');
        $this->db->from('PostVenta as pv');
        $this->db->where('IdPostVenta', $ID);
        $this->db->where('Estatus', 'ACTIVO');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsReport() {
        $this->db->select('pv.Actividad, pv.Lugar, pv.HoraInicio, '
                . 'pv.HoraTermino, pv.Participante, c.Ncliente Cliente, pv.Notario, pv.Observaciones,pv.Estatus');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Clientes AS c', 'pv.IdCliente = c.ID');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsReportEV() {
        $this->db->select('pv.Actividad AS ACTIVIDAD, pv.Lugar AS LUGAR, pv.HoraInicio AS "HORA INICIO", '
                . 'pv.HoraTermino AS "HORA TERMINO", pv.Participante AS PARTICIPANTE, c.Ncliente CLIENTE, pv.Notario AS NOTARIO, pv.Observaciones AS OBSERVACIONES,pv.Estatus AS ESTATUS');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Clientes AS c', 'pv.IdCliente = c.ID');
        $this->db->where('pv.Actividad', 'ENTREGA DE VIVIENDA');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsReportFE() {
        $this->db->select('pv.Actividad AS ACTIVIDAD, pv.Lugar AS LUGAR, pv.HoraInicio AS "HORA INICIO", '
                . 'pv.HoraTermino AS "HORA TERMINO", pv.Participante AS PARTICIPANTE, c.Ncliente CLIENTE, pv.Notario AS NOTARIO, pv.Observaciones AS OBSERVACIONES,pv.Estatus AS ESTATUS');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Clientes AS c', 'pv.IdCliente = c.ID');
        $this->db->where('pv.Actividad', 'ENTREGA DE ESCRITURAS');
        $query = $this->db->get();
        return $query->result();
    }

    function onDeleteRecord($tbl, $ID) {
        try {
            $this->db->where('IdPostVenta', $ID);
            $this->db->update($tbl, array('Estatus' => 'INACTIVO'));
            return 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordsJSON($tbl, $IdEstado) {
        $this->db->select('id_ciudad, dsc_ciudad');
        $this->db->from($tbl);
        $this->db->where('id_estado', $IdEstado);
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * FUNCTION THAT SAVE, UPDATE AND DELETE RECORDS
     */

    function crudRecord($tbl, $array, $type, $ID) {
        try {
            switch ($type) {
                case "select":

                    break;
                case "save":
                    $this->db->insert($tbl, $array);
                    break;
                case "update":
                    $this->db->where('IdPostVenta', $ID);
                    $this->db->update($tbl, $array);
//                    print $str = $this->db->last_query();
                    break;
                case "delete":
                    $this->db->delete('PostVenta', array('IdPostVenta' => $ID));
                    break;
                default:
                    break;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
