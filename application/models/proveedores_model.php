<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class proveedores_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETPROVEEDORES()");
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

    public function getRecordsByID($ID) {
        try {
//            $this->db->select('PRO.ID, PRO.Tipo AS TIPO, PRO.Proveedor AS PROVEEDOR, PRO.RFC, PRO.Correo AS CORREO, 
//PRO.Pagina AS PÁGINA, CONCAT(PRO.Calle," ",PRO.No, " ",PRO.Colonia) AS DOMICILIO, PRO.Tel AS TELEFONO, PRO.Contacto,
//PRO.MailContacto AS "EMAIL DE CONTACTO", PRO.Servicios, PRO.Titular, PRO.RFCcuenta AS "RFC DE LA CUENTA",
//PRO.Cuenta, PRO.Banco, PRO.CLABE, PRO.Fecha, PRO.Estatus', false);
            $this->db->select('*', false);
            $this->db->from("Proveedores AS PRO");
            $this->db->where("PRO.ID", $ID);
            $this->db->where_not_in("PRO.Estatus", array("ELIMINADO", "CANCELADO"));
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

    public function getTipos() {
        try {
            $this->db->select('C.id AS ID, C.dsc_cliente AS TIPO', false);
            $this->db->from("Cliente AS C");
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

    public function getRamas() {
        try {
            $this->db->select('R.id_rama AS ID, R.dsc_rama AS RAMA', false);
            $this->db->from("Rama AS R");
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

    public function getTamanio() {
        try {
            $this->db->select('T.id_tamanio AS ID, T.dsc_tamanio AS TAMANIO', false);
            $this->db->from("Tamanio AS T");
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
    public function getCiudades() {
        try {
            $this->db->select('C.id_ciudad AS ID, C.dsc_ciudad AS CIUDAD', false);
            $this->db->from("Ciudad AS C");
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
    public function getEstados() {
        try {
            $this->db->select('C.id_estado AS ID, C.dsc_estado AS ESTADO', false);
            $this->db->from("Estado AS C");
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
    public function getActividades() {
        try {
            $this->db->select('C.id_actividad AS ID, C.dsc_actividad AS ACTIVIDADES', false);
            $this->db->from("Actividades AS C");
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

}
