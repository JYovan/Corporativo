<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class productos_model extends CI_Model {

    public function __construct() {
        parent::__construct(); 
    }
  
    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETPRODUCTOS()");
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
  
    function getProductosXAsignar() {
        try {
            $query = $this->db->query("CALL SP_GETPRODUCTOSXASIGNAR()");
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
    
    
    function getRecordsByID($ID) {
        $this->db->select('*', false);
        $this->db->from('Productos AS PRO');
        $this->db->where('PRO.ID',$ID);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    
    function getProductoByID($ID) {
        $this->db->select('*', false);
        $this->db->from('Productos AS PRO');
        $this->db->where('PRO.ID',$ID);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    function getProductoByPrecioID($ID) {
        $this->db->select('*', false);
        $this->db->from('catalogo AS C');
        $this->db->where('C.ID',$ID);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    
    function getEtiquetas() {
        $this->db->select('C.id_conceptos AS ID, C.dsc_conceptos AS ETIQUETA', false);
        $this->db->from('CotizacionConceptos AS C'); 
        $this->db->order_by('C.dsc_conceptos','ASC');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    function getProveedores() {
        $this->db->select('PRO.ID AS ID, PRO.Proveedor AS PROVEEDOR', false);
        $this->db->from('Proveedores AS PRO'); 
        $this->db->order_by('PRO.Proveedor','ASC');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    function getPreciosXProducto() {
        try {
            $query = $this->db->query("CALL SP_GETPRECIOSXPRODUCTO()");
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
    function getPreciosXProductoByIDS($IDPRODUCTO, $IDPROVEEDOR) {
        $this->db->select('CAT.ID, PROD.Producto AS PRODUCTO, PROD.Marca AS MARCA, PRO.Proveedor AS PROVEEDOR, CONCAT("$",FORMAT(CAT.Precio,2)) AS PRECIO, CAT.FechaPrecio AS "FECHA DEL PRECIO"', false);
        $this->db->from('Catalogo AS CAT'); 
        $this->db->join('Productos AS PROD','CAT.IdProducto = PROD.ID'); 
        $this->db->join('Proveedores AS PRO','CAT.Proveedor = PRO.ID');
        $this->db->where('PROD.ID',$IDPRODUCTO);
        $this->db->where('PRO.ID',$IDPROVEEDOR);
        $this->db->where_in('PROD.Estatus',array('ACTIVO'));
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    
    function getPreciosXProductoByID($ID) {
        $this->db->select('CAT.ID, PROD.Producto AS PRODUCTO,PROD.Marca AS MARCA, PRO.Proveedor AS PROVEEDOR, CAT.Precio AS PRECIO, CAT.FechaPrecio AS "FECHA DEL PRECIO"', false);
        $this->db->from('Catalogo AS CAT'); 
        $this->db->join('Productos AS PROD','CAT.IdProducto = PROD.ID'); 
        $this->db->join('Proveedores AS PRO','CAT.Proveedor = PRO.ID');
        $this->db->where('CAT.ID',$ID); 
        $this->db->where_in('PROD.Estatus',array('ACTIVO'));
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    function getProductoXProveedor($IDPRODUCTO, $IDPROVEEDOR) {
        $this->db->select('CAT.ID, PROD.Producto AS PRODUCTO, PROD.Marca AS MARCA, PRO.Proveedor AS PROVEEDOR, CONCAT("$",FORMAT(CAT.Precio,2)) AS PRECIO, CAT.FechaPrecio AS "FECHA DEL PRECIO"', false);
        $this->db->from('Catalogo AS CAT'); 
        $this->db->join('Productos AS PROD','CAT.IdProducto = PROD.ID'); 
        $this->db->join('Proveedores AS PRO','CAT.Proveedor = PRO.ID');
        $this->db->where('PROD.ID',$IDPRODUCTO);
        $this->db->where('PRO.ID',$IDPROVEEDOR);
        $this->db->where_in('PROD.Estatus',array('ACTIVO'));
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }
    
    function getCheckProductoBeforeAdd() {
        try {
            $query = $this->db->query("CALL SP_GETCHECKPRODUCTOBEFOREADD()");
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
}
