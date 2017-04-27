<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class resource_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select('ID, Banco, Titular, NoCuenta, CLABE, Fecha, Empresa', false);
            $this->db->from('Cuentas AS C');
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

    /*
     * FUNCTION THAT SAVE, UPDATE AND DELETE RECORDS
     */

    public function onAction($tbl, $array, $type, $condition) {
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
//                    print $str = $this->db->last_query();
                    print 1;
                    break;
                case "delete":
                    $this->db->where($condition[0], $condition[1]);
                    $this->db->update($tbl, array('Estatus' => 'INACTIVO'));
                    print 1;
                    break;
                default:
                    break;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onActionEmail($para, $asunto, $mensaje) {
        try { 
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8\r\n"; 
            $headers .= 'From: sistema@rabina.com.mx ' . "\r\n";
            mail($para, $asunto, $mensaje, $headers);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
