<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class EntregaVivienda_Model extends CI_Model {

    function __construct() {
        $this->db = $this->load->database('seug', TRUE);
    }

    function getRecordsJoined() {
        $this->db->select('g.IdEntregaVivienda,g.FechaEntrega AS "FECHA ENTREGA", g.ClienteRecibio AS "CLIENTE RECIBIO", pv.Actividad, pv.Estatus ');
        $this->db->from('EntregaVivienda g');
        $this->db->join('PostVenta AS pv', 'pv.IdPostVenta = g.IdPostVenta');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecords() {
        $this->db->select('g.IdEntregaVivienda AS ID,g.FechaEntrega AS "FECHA ENTREGA", cli.Ncliente AS "CLIENTE RECIBIO",  pv.Actividad AS ACTIVIDAD, g.Estatus AS ESTATUS');
        $this->db->from('EntregaVivienda g');
        $this->db->join('PostVenta pv', 'g.IdPostVenta = pv.IdPostVenta');
        $this->db->join('Clientes cli', 'g.ClienteRecibio = cli.ID');
        $this->db->where('pv.Actividad', 'ENTREGA DE VIVIENDA');
        $status = array('ACTIVO','ENTREGADO');
        $this->db->where_in('g.Estatus', $status);
        $query = $this->db->get();
//                    print $str = $this->db->last_query();
        return $query->result();
    }

    function getFilterRecords() {
        $this->db->select('pv.IdPostVenta, pv.Actividad,cli.Ncliente Cliente, pv.Fecha');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Clientes cli', 'pv.IdCliente = cli.ID');
        $this->db->where('pv.Actividad', 'ENTREGA DE VIVIENDA');
        $this->db->where('pv.Estatus', 'ACTIVO');
        $query = $this->db->get();
//                    print $str = $this->db->last_query();
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
        $this->db->select('ev.*, evd.*,pv.*, cli.ID, cli.Ncliente AS CLIENTE');
        $this->db->from('EntregaVivienda AS ev');
        $this->db->join('EntregaViviendaDocumento AS evd', 'evd.IdEntregaVivienda = ev.IdEntregaVivienda');
        $this->db->join('PostVenta AS pv', 'pv.IdPostVenta = ev.IdPostVenta');
        $this->db->join('Clientes AS cli', 'pv.IdCliente = cli.ID');
        $this->db->where('ev.IdEntregaVivienda', $ID); 
        $status = array('ACTIVO','ENTREGADO');
        $this->db->where_in('ev.Estatus', $status);
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsReport() {
        $this->db->select('pv.Actividad, pv.Lugar, pv.HoraInicio, '
                . 'pv.HoraTermino, pv.Participante, c.Ncliente Cliente, pv.Notario, pv.Observaciones');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Clientes AS c', 'pv.IdCliente = c.ID');
        $this->db->where('pv.Estatus', 'ACTIVO');
        $query = $this->db->get();
        return $query->result();
    }

     function onDeleteRecord($tbl,$ID) {
        try { 
            $this->db->where('IdEntregaVivienda', $ID);
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

    function crudRecord($tbl, $array, $type, $condition) {
        try {
            switch ($type) {
                case "select":

                    break;
                case "save":
                    $this->db->insert($tbl, $array);
                    print $str = $this->db->last_query();
                    $query = $this->db->query('SELECT LAST_INSERT_ID()');
                    $row = $query->row_array();
                    $LastIdInserted = $row['LAST_INSERT_ID()'];
                    return $LastIdInserted;
                    break;
                case "update":
                    $this->db->where($condition[0], $condition[1]);
                    $this->db->update($tbl, $array);
                    print $str = $this->db->last_query();
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
