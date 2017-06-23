<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class productosdeventa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select('PVC.*', false);
            $this->db->from('productosenventacodigo AS PVC');
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

    public function getProductosAsignadosXAlmacen() {
        try {
            $this->db->select('PXA.*', false);
            $this->db->from('productosxalmacen AS PXA');
            $this->db->where_in('PXA.IdAlmacen', array(8, 9));
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

    public function getProductosAsignados() {
        try {
            $this->db->select('P.ID, P.Producto as PRODUCTO', false);
            $this->db->from('productos AS P');
            $this->db->where('P.ID IN (SELECT PXA.IdProducto FROM productosxalmacen AS PXA WHERE PXA.IdAlmacen IN(8,9) GROUP BY PXA.IdProducto) AND P.Estatus LIKE \'ACTIVO\'', null, false);
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

    public function getProveedoresXProductosAsignados() {
        try {
            $this->db->select('P.ID, P.Proveedor as PROVEEDOR', false);
            $this->db->from('Proveedores AS P');
            $this->db->where('P.ID IN (SELECT PXA.IdProveedor FROM productosxalmacen AS PXA WHERE PXA.IdAlmacen IN(8,9) GROUP BY PXA.IdProveedor) AND P.Estatus LIKE \'ACTIVO\'', null, false);
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

    public function getCategoriasDeMateriales() {
        try {
            $this->db->select('CM.ID, CM.Categoria AS CATEGORIA', false);
            $this->db->from('categoriasmateriales AS CM');
            $this->db->where('CM.Estatus', "ACTIVO");
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

}
