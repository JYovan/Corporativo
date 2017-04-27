<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class bienesinmuebles_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",IR.ID,"</span>") AS ID, IR.Propietario, IR.RFC AS "RFC (PROPIETARIO)", '
                . 'IR.IFE AS "IFE (PROPIETARIO)", IR.Calle1 AS "CALLE (PROPIETARIO)", IR.Colonia1 AS "COLONIA (PROPIETARIO)", IR.Numero1 AS "NUMERO (PROPIETARIO)", '
                . 'IR.Estado1 AS "ESTADO (PROPIETARIO)", IR.Municipio1 AS "MUNICIPIO (PROPIETARIO)", IR.Comunidad1 AS "COMUNIDAD (PROPIETARIO)", '
                . 'IR.CP1 AS "CODIGO POSTAL (PROPIETARIO)", IR.Tel1 AS "TELEFONO (PROPIETARIO)", IR.Correo1 AS "CORREO (PROPIETARIO)", '
                . 'IR.Vendedor AS VENDEDOR, IR.RFC2 AS "RFC (VENDEDOR)", IR.IFE2 AS "IFE (VENDEDOR)", IR.Calle2 AS "CALLE (VENDEDOR)", IR.Colonia2 AS "COLONIA (VENDEDOR)", '
                . 'IR.Numero2 AS "NUMERO (VENDEDOR)", IR.Estado2 AS "ESTADO (VENDEDOR)", IR.Municipio2 AS "MUNICIPIO (VENDEDOR)", IR.Comunidad2 AS "COMUNIDAD (VENDEDOR)", '
                . 'IR.CP2 AS "CÓDIGO POSTAL (VENDEDOR)", IR.Tel2 AS "TELEFONO (VENDEDOR)", IR.Correo2 AS "CORREO (VENDEDOR)", IR.Tinmueble AS "TIPO DE INMUEBLE (VENDEDOR)", '
                . 'IR.Ubicacion  AS "UBICACIÓN", IR.Norte AS "UBICACIÓN NORTE", IR.Sur  AS "UBICACIÓN SUR", IR.Este  AS "UBICACIÓN ESTE", IR.Oeste  AS "UBICACIÓN OESTE", '
                . 'IR.Noreste  AS "UBICACIÓN NOROESTE", IR.Sureste  AS "UBICACIÓN SURESTE", IR.Noroeste AS "UBICACIÓN NOROESTE", IR.Suroeste AS "UBICACIÓN SUROESTE", '
                . 'IR.Terreno AS "SUPERFICIE DEL TERRENO", IR.Construido AS "SUPERFICIE CONSTRUIDA", IR.Servidumbres AS "SERVIDUMBRES", IR.Gravamenes AS "GRAVÁMENES", '
                . 'IR.Otras AS OTRAS, IR.Valor, IR.Vventa, IR.Tomo, IR.Libro, IR.Seccion, IR.Folio, IR.Numeral, '
                . 'IR.Notario, IR.Nnotario, IR.Partido, IR.Notario2, IR.Nnotario2, IR.Partido2, (CASE WHEN IR.Comprador IS NULL THEN "SIN COMPRADOR" ELSE (SELECT CONCAT(U.nombre," ",U.apaterno," ",U.amaterno) FROM usuarios AS U WHERE U.Id = IR.Comprador) END) AS COMPRADOR, '
                . 'IR.FechaCompraVenta AS "FECHA COMPRA VENTA", FORMAT(IR.Monto,2) AS MONTO, IR.Modalidad, IR.FormaPago AS "FORMA DE PAGO", FORMAT(IR.Impuestos,2) AS IMPUESTOS, FORMAT(IR.GastosRegistrales,2) AS "GASTOS REGISTRALES", '
                . 'FORMAT(IR.GastosNotariales,2) AS "GASTOS NOTARIALES", IR.FechaLugarEntrega AS "FECHA LUGAR DE ENTREGA", IR.Fideicomitente AS "FIDEICOMITENTE", IR.Fiduciario AS "FIDUCATARIO", '
                . 'IR.Fideicomisario, IR.Delegados, IR.Depositario, IR.Acto, IR.Tomo2 "TOMOS", IR.Numero, IR.Fecha, IR.Contrato, IR.Estatus, IR.Registro ', false);
        $this->db->from('Inmuebleregistro AS IR'); 
        $this->db->where_in('IR.Estatus',array('ACTIVO','VENDIDO'));
//        $this->db->where_not_in('IR.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('IR.ID', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getRecordByID($ID) {
        $this->db->select('IR.ID AS ID, IR.Propietario, IR.RFC, '
                . 'IR.IFE, IR.Calle1, IR.Colonia1, IR.Numero1, IR.Estado1, IR.Municipio1, IR.Comunidad1, '
                . 'IR.CP1, IR.Tel1, IR.Correo1, IR.Vendedor, IR.RFC2, IR.IFE2, IR.Calle2, IR.Colonia2, '
                . 'IR.Numero2, IR.Estado2, IR.Municipio2, IR.Comunidad2, IR.CP2, IR.Tel2, IR.Correo2, '
                . 'IR.Tinmueble, IR.Ubicacion, IR.Norte, IR.Sur, IR.Este, IR.Oeste, IR.Noreste, IR.Sureste, '
                . 'IR.Noroeste, IR.Suroeste, IR.Terreno, IR.Construido, IR.Servidumbres, IR.Gravamenes, '
                . 'IR.Otras, IR.Valor, IR.Vventa, IR.Tomo, IR.Libro, IR.Seccion, IR.Folio, IR.Numeral, '
                . 'IR.Notario, IR.Nnotario, IR.Partido, IR.Notario2, IR.Nnotario2, IR.Partido2, IR.Comprador, '
                . 'IR.FechaCompraVenta, IR.Monto, IR.Modalidad, IR.FormaPago, IR.Impuestos, IR.GastosRegistrales, '
                . 'IR.GastosNotariales, IR.FechaLugarEntrega, IR.Fideicomitente, IR.Fiduciario, IR.Fideicomisario, '
                . 'IR.Delegados, IR.Depositario, IR.Acto, IR.Tomo2, IR.Numero, IR.Fecha, IR.Contrato, IR.Estatus, IR.Registro ', false);
        $this->db->from('Inmuebleregistro AS IR'); 
        $this->db->where('IR.ID',$ID);
        $this->db->where_in('IR.Estatus',array('ACTIVO','VENDIDO'));
        
//        $this->db->where_not_in('IR.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('IR.ID', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getExpedientesXInmuebleByID($ID) {
        $this->db->select('IE.ID, IE.Inmueble AS INMUEBLE, '
                        . 'IE.TDocumento AS DOCUMENTO, IE.Observaciones AS OBSERVACIONES, '
                        . 'IE.Nombre AS "NOMBRE DEL ARCHIVO", IE.Estatus, IE.Registro,IE.rDocumento AS "RUTA DEL ARCHIVO"', false);
        $this->db->from('InmuebleExp AS IE');  
        $this->db->join('InmuebleRegistro AS IR','IE.Inmueble = IR.ID'); 
        $this->db->where('IE.Estatus','ACTIVO');
        $this->db->where('IE.ID',$ID); 
        
//        $this->db->where_not_in('IR.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('IR.ID', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getInmueblesTipo() {
        $this->db->select('IT.id_Tinmueble AS ID, IT.dsc_Tinmueble AS TIPO', false);
        $this->db->from('inmuebletipo AS IT'); 
//        $this->db->where_not_in('IR.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('IT.id_Tinmueble', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getBienesInmuebles() {
        $this->db->select('IR.ID, IR.Ubicacion AS UBICACION, IR.Propietario PROPIETARIO, IR.RFC', false);
        $this->db->from('Inmuebleregistro AS IR'); 
        $this->db->where('IR.Ubicacion IS NOT NULL',null,false);
//        $this->db->where_not_in('IR.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('IR.ID', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getCompradores() {
        $this->db->select('U.Id AS ID, CONCAT(U.nombre," ",U.apaterno," ",U.amaterno) AS USUARIO', false);
        $this->db->from('usuarios AS U'); 
        $this->db->where('U.CompraBienesInmuebles LIKE \'SI\'',null,false);
//        $this->db->where_not_in('IR.Estatus', array('CANCELADA', 'CANCELADO', 'INACTIVO'));
        $this->db->order_by('U.Id', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getReferenciadosTipo() {
        $this->db->select('RT.id_tipo AS ID, RT.dsc_tipo AS DOCUMENTO', false);
        $this->db->from('Referenciados_Tipo AS RT');  
        $this->db->order_by('RT.id_tipo', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }
    function getExpedientesXInmuebles() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",IE.ID,"</span>") AS ID, IE.InmuebleT AS INMUEBLE, '
                        . 'IE.DocumentoT AS DOCUMENTO, IE.Observaciones AS OBSERVACIONES, '
                        . 'IE.Nombre AS "NOMBRE DEL ARCHIVO", IE.Estatus, IE.Registro', false);
        $this->db->from('InmuebleExp AS IE');  
        $this->db->join('InmuebleRegistro AS IR','IE.Inmueble = IR.ID'); 
        $this->db->where('IE.Estatus','ACTIVO');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getExpedientesXInmueble($ID) {
        $this->db->select('IE.DocumentoT AS DOCUMENTO, IE.Observaciones AS OBSERVACIONES, '
                        . 'IE.Nombre AS "NOMBRE DEL ARCHIVO", '
                . 'CONCAT("<button type=\"button\" class=\"btn btn3d btn-king-blue\" onclick=\"getDocumento(this,\'",IE.rDocumento,"\')\" target=\"_blank\"><span class=\"fa fa-eye fa-2x\"></span></button>") AS ARCHIVO,'
                        . 'IE.Estatus, IE.Registro,IE.rDocumento', false);
        $this->db->from('InmuebleExp AS IE');  
        $this->db->join('InmuebleRegistro AS IR','IE.Inmueble = IR.ID');
        $this->db->where('IR.ID',$ID);
        $this->db->where('IE.Inmueble',$ID);
        $this->db->where('IE.Estatus','ACTIVO');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }
}
