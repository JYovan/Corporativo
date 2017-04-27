<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class mdlproveedor extends CI_Model {

    public function __construct() {
        parent::__construct(); 
    }

    function getPrice($ID) {
        $this->db->select("*, true AS MODIFICADO", false);
        $this->db->from("Catalogo AS c");
        $this->db->where("c.ID", $ID);
        $query = $this->db->get();
        $data = $query->result();
//        $data = $this->db->last_query();
//        var_dump($data);
        return $data;
    }

    function getData() {
        try {
            $this->db->select("*");
            $this->db->from("Productos AS P");
            $this->db->join("Catalogo AS C", "P.Folio = C.Folio");
            $this->db->join("Proveedores AS PRO", "C.Proveedor = PRO.ID ");
            $this->db->join("CotizacionConceptos AS CC", " P.Etiqueta = CC.id_conceptos");
            $this->db->order_by("PRO.Proveedor", "ASC");
            $this->db->group_by("PRO.ID");
            $query = $this->db->get();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getProveedores() {
        try {
            $this->db->select("*");
            $this->db->from("Proveedores AS PRO"); 
            $this->db->order_by("PRO.Proveedor", "ASC");
            $this->db->group_by("PRO.ID");
            $query = $this->db->get();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

//    function onAction($tbl, $array, $type, $condition, $select_fields) {
    function onAction($DB) {
        try {
            switch ($DB["TYPE"]) {
                case "select":
                    $this->db->select($DB["FIELDS"]);
                    $this->db->from($DB["TABLE"] . ' AS ' . $DB["ALIAS"]);
                    break;
                case "selectj":
                    break;
                case "save":
                    $this->db->insert($DB["TABLE"], $DB["KEYVALUES"]);
                    print $str = $this->db->last_query();
                    $query = $this->db->query('SELECT LAST_INSERT_ID()');
                    $row = $query->row_array();
                    $LastIdInserted = $row['LAST_INSERT_ID()'];
                    return $LastIdInserted;
                    break;
                case "update":
                    $this->db->where($DB["FIELD_ID_UPDATE"], $DB["FIELD_CONDITION_UPDATE"]);
                    $this->db->update($DB["TABLE"], $DB["KEYVALUES"]);
//                    print $str = $this->db->last_query();
                    break;
                case "delete":
                    $this->db->where($DB["FIELD_UPDATE"], $DB["FIELD_CONDITION_UPDATE"]);
                    $this->db->update($DB["TABLE"], array('Estatus' => 'INACTIVO'));
                    break;
                default:
                    break;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
