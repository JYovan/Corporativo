<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class terceros_model extends CI_Model {

    public function __construct() {
        parent::__construct(); 
    }


    public function getRecords() {
        try {
            $this->db->select('pt.ID, '
                    . 'CONCAT("<span class=\"label label-indigo\">",pt.Unidad,"</span>") AS "CONCEPTO DE PAGO",  '
                    . 'CONCAT("<span class=\"label label-danger\">",pt.Concepto,"</span>") AS "# FACTURA",'
                    . 'CONCAT("<span class=\"label label-emerald\">$",FORMAT(pt.Monto,2),"</span>") AS MONTO,'
                    . '(CASE '
                    . ' WHEN pt.Proveedor IS NULL THEN "SIN PROVEEDOR" '
                    . 'ELSE (SELECT PRO.Proveedor FROM Proveedores AS PRO WHERE PRO.ID = pt.Proveedor AND pt.Estatus LIKE \'ACTIVO\') END) AS PROVEEDOR'
                    . ',pt.Forma AS "FORMA DE PAGO",pt.Caja AS "CAJA DE EFECTIVO",'
                    . '(SELECT CONCAT(C.Banco," - ",C.Titular," - ",C.NoCuenta) FROM Cuentas C WHERE C.ID = pt.IDCuentaFuente) AS "CUENTA DE INGRESO",'
                    . 'pt.FechaPago AS "FECHA DE PAGO",pt.FechaRPago AS "FECHA DE REALIZACIÓN DEL PAGO",pt.Comprobante AS "TIPO DE COMPROBANTE",(SELECT CONCAT(U.nombre," ",U.apaterno," ",U.amaterno) FROM usuarios AS U WHERE U.Id =  pt.Emisor) AS EMISOR, pt.ReferenciaDePago AS "REFERENCIA DE PAGO", pt.Estatus', false);
        $this->db->from('PagoTerceros AS pt'); 
        $this->db->where_in('pt.Estatus',array('ACTIVO'));
        $this->db->order_by("pt.ID","DESC");
        $query = $this->db->get();
        $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str; 
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }


    /*
     * FUNCTION THAT SAVE, UPDATE AND DELETE RECORDS
     */

    function onAction($tbl, $array, $type, $condition) {
        try {
            switch ($type) {
                case "select":

                    break;
                case "save":
                    $this->db->insert($tbl, $array);
//                    print $str = $this->db->last_query();
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
}
