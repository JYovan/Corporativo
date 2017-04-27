<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class GarantiaPostVenta_Model extends CI_Model {

    function __construct() {
        $this->db = $this->load->database('seug', TRUE);
    }

    function getRecordsJoined() {
        $this->db->select('g.IdGarantia,g.FechaEntrega, g.ClienteRecibio, pv.Actividad ');
        $this->db->from('Garantia g');
        $this->db->join('PostVenta AS pv', 'pv.IdPostVenta = g.IdPostVenta');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecords() {
        $this->db->select('g.IdGarantia ID, proy.ID AS "NUMERO DESARROLLO", proy.Proyecto AS PROYECTO, prov.Manzana AS MANZANA, prov.Lotes AS LOTES, g.IdVivienda AS VIVIENDA, cli.Ncliente CLIENTE, g.Concepto CONCEPTO, g.Dias DIAS, g.Meses MESES, g.Anios AS "AÑOS", g.FechaInicio AS "FECHA INICIO", g.FechaTermino AS "FECHA TERMINO", g.Estatus AS ESTATUS');
        $this->db->from('Garantia AS g');
        $this->db->join('ProyectosViviendas AS prov', 'g.IdDesarrollo = prov.Desarrollo');
        $this->db->join('Proyectos AS proy', 'g.IdDesarrollo = proy.ID AND g.IdManzana = prov.Manzana AND g.IdLote = prov.Lotes');
        $this->db->join('Clientes AS cli', 'g.IdCliente = cli.ID');
//        $this->db->where('g.IdManzana ', 'prov.Manzana'); 
        $status = array('ACTIVO', 'VALIDA','NO VALIDA');
        $this->db->where_in('g.Estatus', $status); 
        $this->db->group_by("g.IdGarantia");
        $this->db->order_by("g.IdGarantia", "asc");
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
//        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order) {
        $this->db->distinct();
        $cols = "";
        for ($index = 0; $index < count($Columns); $index++) {
            if ($index < count($Columns)) {
                $cols .= $Alias . '.' . $Columns[$index] . ',';
            } else {
                $cols .= $Alias . '.' . $Columns[$index] . ' ';
            }
        }
        $this->db->select($cols);

        $this->db->from($Table . ' AS ' . $Alias);
        $this->db->group_by($Alias . '.' . $Group);
        $this->db->order_by($Alias . '.' . $vOrder, $Order);
        $where = "";
        $j = 1;
        for ($index1 = 0; $index1 < count($Where); $index1++) {
            if ($j < count($Where)) {
                $where .= $Alias . '.' . $Where[$index1] . ' AND ';
            } else {
                $where .= $Alias . '.' . $Where[$index1] . ' ';
            }
            $j++;
        }
        if ($Where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getRecordsDistincts($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order) {
        $this->db->distinct();
        $cols = "";
        for ($index = 0; $index < count($Columns); $index++) {
            if ($index < count($Columns)) {
                $cols .= $Alias . '.' . $Columns[$index] . ',';
            } else {
                $cols .= $Alias . '.' . $Columns[$index] . ' ';
            }
        }
        $this->db->select($cols);

        $this->db->from($Table . ' AS ' . $Alias);
        $this->db->group_by($Alias . '.' . $Group);
        $this->db->order_by($Alias . '.' . $vOrder, $Order);
        $where = "";
        $j = 1;
        for ($index1 = 0; $index1 < count($Where); $index1++) {
            if ($j < count($Where)) {
                $where .= $Alias . '.' . $Where[$index1] . ' AND ';
            } else {
                $where .= $Alias . '.' . $Where[$index1] . ' ';
            }
            $j++;
        }
        $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getFilterRecords() {
        $this->db->select('pv.IdPostVenta, pv.Actividad,cli.Ncliente Cliente, pv.Fecha');
        $this->db->from('PostVenta AS pv');
        $this->db->join('Clientes cli', 'pv.IdCliente = cli.ID');
        $this->db->where('pv.Actividad', 'ENTREGA DE VIVIENDA');
        $this->db->where('pv.Estatus', 'ACTIVO');
        $query = $this->db->get();
        return $query->result();
    }
    
    function getFilterValidateRecords() {
        $this->db->select("g.IdGarantia ID, proy.Proyecto AS PROYECTO, prov.Manzana AS MANZANA, proy.ID AS IdDesarrollo,"
                . "prov.Lotes AS LOTE, g.IdVivienda AS VIVIENDA, cli.ID AS IDCLIENTE, cli.Ncliente CLIENTE, g.Concepto CONCEPTO, "
                . "g.Dias DIAS, g.Meses MESES, g.Anios AS 'AÑOS', g.FechaInicio AS 'FECHA INICIO', g.FechaTermino AS 'FECHA TERMINO'," 
                . "g.Estatus AS ESTATUS, DATEDIFF(g.FechaTermino, g.FechaInicio ) AS DIASRESTANTES");
        $this->db->from("Garantia AS g");
        $this->db->join("ProyectosViviendas AS prov", "g.IdDesarrollo = prov.Desarrollo");
        $this->db->join("Proyectos AS proy", "g.IdDesarrollo = proy.ID AND g.IdManzana = prov.Manzana AND g.IdLote = prov.Lotes");
        $this->db->join("Clientes AS cli", "g.IdCliente = cli.ID"); 
        $this->db->where("g.Estatus", "ACTIVO");
        $this->db->group_by("g.IdGarantia");
        $this->db->order_by("g.IdGarantia", "asc");
        $query = $this->db->get(); 
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }
    
    function getFilterValidateRecordsByID($ID) {
        $this->db->select("g.IdGarantia ID, proy.Proyecto AS PROYECTO, prov.Manzana AS MANZANA, proy.ID AS IdDesarrollo,"
                . "prov.Lotes AS LOTE, g.IdVivienda AS VIVIENDA, cli.ID AS IDCLIENTE, cli.Ncliente CLIENTE, g.Concepto CONCEPTO, "
                . "g.Dias DIAS, g.Meses MESES, g.Anios AS 'AÑOS', g.FechaInicio AS 'FECHA INICIO', g.FechaTermino AS 'FECHA TERMINO'," 
                . "g.Estatus AS ESTATUS, DATEDIFF(g.FechaTermino, g.FechaInicio ) AS DIASRESTANTES");
        $this->db->from("Garantia AS g");
        $this->db->join("ProyectosViviendas AS prov", "g.IdDesarrollo = prov.Desarrollo");
        $this->db->join("Proyectos AS proy", "g.IdDesarrollo = proy.ID AND g.IdManzana = prov.Manzana AND g.IdLote = prov.Lotes");
        $this->db->join("Clientes AS cli", "g.IdCliente = cli.ID"); 
        $this->db->where("g.IdGarantia", $ID);
        $this->db->where("g.Estatus", "ACTIVO");
        $this->db->group_by("g.IdGarantia");
        $this->db->order_by("g.IdGarantia", "asc");
        $query = $this->db->get(); 
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getOptionsRecords($select, $alias, $from, $conditions) {
        $this->db->select($select);
        $this->db->from($from);
        foreach ($conditions as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->where($alias . '.Estatus', 'ACTIVO');
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
        $this->db->from('Garantia as g');
//        $this->db->join('Garantiadocumento AS gd', 'g.IdGarantia = gd.IdGarantia');
        $this->db->where('g.IdGarantia ', $ID);
        $this->db->where('g.Estatus', 'ACTIVO');
        $query = $this->db->get();
        return $query->result();
    }

    function getRecordsReport() {
        $this->db->select("proy.Proyecto PROYECTO, g.IdVivienda VIVIENDA, cli.Ncliente CLIENTE,
                          g.Concepto CONCEPTO, CONCAT(g.Dias,' DIAS, ', g.Meses,' MESES, ', g.Anios,' AÑOS') AS 'TIEMPO DE COBERTURA' , 
                          g.FechaInicio AS 'FECHA INICIO', g.FechaTermino AS 'FECHA TERMINO', CONCAT(DATEDIFF(g.FechaTermino, g.FechaInicio),' DIAS') AS 'DIAS RESTANTES DE COBERTURA', 
                          g.Estatus AS ESTATUS", FALSE);

        $this->db->from("Garantia AS g");
        $this->db->join("ProyectosViviendas AS prov", "g.IdDesarrollo = prov.Desarrollo");
        $this->db->join("Proyectos AS proy", "g.IdDesarrollo = proy.ID AND g.IdManzana = prov.Manzana AND g.IdLote = prov.Lotes");
        $this->db->join("Clientes AS cli", "g.IdCliente = cli.ID");
        $this->db->where("g.Estatus", "ACTIVO");
        $this->db->group_by("g.IdGarantia");
        $this->db->order_by("g.IdGarantia", "ASC");
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
//        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function onDeleteRecord($tbl, $ID) {
        try {
            $this->db->where('IdGarantia', $ID);
            $this->db->update($tbl, array('Estatus' => 'INACTIVO'));
            return 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordsJSON($tbl, $IdEstado) {
        $this->db->select('id_ciudad, dsc_ciudad');
        $this->db->from('Ciudad');
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
                    $str = $this->db->last_query();
                    $query = $this->db->query('SELECT LAST_INSERT_ID()');
                    $row = $query->row_array();
                    $LastIdInserted = $row['LAST_INSERT_ID()'];
//                    print $str;
                    return $LastIdInserted;
                    break;
                case "update":
                    $this->db->where($condition[0], $condition[1]);
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
