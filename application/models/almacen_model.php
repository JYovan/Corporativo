<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class almacen_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETALMACEN()");
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

    public function getDevoluciones() {
        try {
            $query = $this->db->query("CALL SP_GETDEVOLUCIONES()");
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

    public function getDevolucionByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDEVOLUCIONBYID($ID)");
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

    public function getMovimientos() {
        try {
            $this->db->select('CONCAT("<span class=\"label label-primary\">", MXA.ID, "</span>") AS ID, 
                (SELECT A.Nombre FROM Almacen AS A WHERE A.ID = MXA.IdAlmacen) AS ALMACEN,  MXA.Producto, 
                MXA.CondicionT AS "CONDICIÓN", MXA.FormaT AS "FORMA/TIPO", MXA.CantidadSolicitada AS "CANTIDAD SOLICITADA", 
                MXA.FechaIngreso AS "FECHA DE INGRESO", MXA.ProveedorT AS "PROVEEDOR", MXA.NombreEntrega AS "NOMBRE DE QUIEN ENTREGA",
                MXA.ReferenciaOC AS "REFERENCIA DE ORDEN DE COMPRA", MXA.RecibeInstPro AS "RECIBE EN INSTALACIONES DEL PROVEEDOR", 
                MXA.RecibeAlmacenT AS "RECIBE EN ALMACÉN", MXA.ReferenciaFactura AS "REFERENCIA DE FACTURA", 
                MXA.Observaciones, MXA.Estatus, MXA.Registro, (CASE WHEN MXA.Cancelacion IS NULL THEN "SIN DATO" ELSE MXA.Cancelacion END) AS "FECHA DE CANCELACIÓN",(CASE WHEN  MXA.Modificacion IS NULL THEN "SIN DATO" ELSE  MXA.Modificacion END) "ULTIMA MODIFICACIÓN"', false);
            $this->db->from('MovimientosXAlmacen AS MXA');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTiposDeViviendas() {
        try {
            $this->db->select('VP.ID, UPPER(VP.Prototipo) AS PROTOTIPO', false);
            $this->db->from('viviendasprototipos AS VP');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getOrdenesDeCompra($ID) {
        try {
            $query = $this->db->query("CALL SP_GETORDENESDECOMPRA(" . $ID . ")");
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

    public function getOrdenesDeCompraByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETORDENESDECOMPRABYID(" . $ID . ")");
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

    public function getRecordByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETALMACENBYID(" . $ID . ")");
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

    public function getProyectos() {
        try {
            $this->db->select('P.ID ID, P.Proyecto AS PROYECTO', false);
            $this->db->from('Proyectos AS P');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenes() {
        try {
            $this->db->select('A.ID, CONCAT(A.Nombre," (",(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = A.Proyecto),")") AS ALMACEN', false);
            $this->db->from('Almacen AS A');
            $this->db->where_in('A.Estatus', 'ACTIVO');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

//
//    public function getAlmacenes() {
//        try {
//            $query = $this->db->query("CALL SP_GETALMACENES()");
//            /*
//             * FOR DEBUG ONLY
//             */
//            $str = $this->db->last_query();
//            $data = $query->result();
//            return $data;
//        } catch (Exception $exc) {
//            echo $exc->getTraceAsString();
//        }
//    }
    public function getCatalogo() {
        try {
            $query = $this->db->query("CALL SP_GETCATALOGO()");
//            $this->db->onActions($this->db->conn_id);
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

    public function getAlmacenesConProductos() {
        try {
            $query = $this->db->query("CALL SP_GETALMACENESCONPRODUCTOS()");
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

    public function getAlmacenesConProductosAsignados() {
        try {
            $query = $this->db->query("CALL SP_GETALMACENESCONPRODUCTOSASIGNADOS()");
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

    public function getProductos() {
        try {
            $this->db->select('CONCAT("<span class=\"label label-king-blue\">",P.ID,"</span>") AS ID, (CONCAT(UPPER(P.Producto)," (",CASE WHEN P.Marca = "" THEN "SIN MARCA" ELSE P.Marca END,")")) AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacen($ID) {
        try {
            $this->db->select('P.ID, CONCAT(UPPER(P.Producto)," (",PXA.Proveedor,")") AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->join('ProductosXAlmacen AS PXA', 'P.ID = PXA.IdProducto');
            $this->db->where('PXA.IdAlmacen = ' . $ID . ' AND PXA.Estatus LIKE \'ACTIVO\'', NULL, FALSE);
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacenXProveedor($ID, $PRO) {
        try {
            $this->db->select('P.ID, CONCAT(UPPER(P.Producto)," (",PXA.Proveedor,")") AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->join('ProductosXAlmacen AS PXA', 'P.ID = PXA.IdProducto');
            $this->db->where('PXA.IdAlmacen = ' . $ID . ' AND PXA.IdProveedor = ' . $PRO . ' AND PXA.Estatus LIKE \'ACTIVO\'', NULL, FALSE);
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosSinAsignar() {
        try {
            $query = $this->db->query("CALL SP_GETPRODUCTOSSINASIGNAR()");
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

    public function getProductosSinAsignarXAlmacen($ID) {
        try {
            $this->db->select('CONCAT("<span class=\"label label-king-blue\">",P.ID,"</span>") AS "<span class=\"label label-emerald\">ID</span>", (CONCAT("<div class=\"col-md-12\">",UPPER(P.Producto)," (",CASE WHEN P.Marca = "" THEN "SIN MARCA" ELSE P.Marca END,")</div>")) AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->where('P.ID NOT IN (SELECT PXA.IdProducto FROM ProductosXAlmacen AS PXA WHERE PXA.IdAlmacen = ' . $ID . ' AND PXA.Estatus LIKE \'ACTIVO\')', NULL, FALSE);
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosSinAsignarXAlmacenXProveedor($ID, $PRO) {
        try {
            $this->db->select('CONCAT("<span class=\"label label-king-blue\">",P.ID,"</span>") AS "<span class=\"label label-emerald\">ID</span>", (CONCAT("<div class=\"col-md-12\">",UPPER(P.Producto)," (",CASE WHEN P.Marca = "" THEN "SIN MARCA" ELSE P.Marca END,")</div>")) AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->where('P.ID NOT IN (SELECT PXA.IdProducto FROM ProductosXAlmacen AS PXA WHERE PXA.IdAlmacen = ' . $ID . ' AND PXA.Estatus LIKE \'ACTIVO\')', NULL, FALSE);
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosAsignadosXAlmacen($ID) {
        try {
            $query = $this->db->query("CALL SP_GETPRODUCTOSASIGNADOSXALMACEN(" . $ID . ")");
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

    public function getProductosAsignadosXAlmacenXProveedor($ID, $PRO) {
        try {
            $query = $this->db->query("CALL SP_GETPRODUCTOSASIGNADOSXALMACENXPROVEEDOR(" . $ID . "," . $PRO . ")");
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

    public function getPaises() {
        try {
            $this->db->select('P.id_pais ID, P.dsc_pais AS PAIS', false);
            $this->db->from('Pais AS P');
            $this->db->where('P.id_pais IN (SELECT E.id_pais FROM Estado AS E)', null, false);
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

    public function getEstadosXPais($ID) {
        try {
            $this->db->select('E.id_estado AS ID, E.dsc_estado AS ESTADO', false);
            $this->db->from('Estado AS E');
            $this->db->where('E.id_pais', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMunicipiosXEstado($ID) {
        try {
            $this->db->select('C.id_ciudad AS ID, C.dsc_ciudad AS MUNICIPIO', false);
            $this->db->from('Ciudad AS C');
            $this->db->where('C.id_estado', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $this->db->select('U.Id AS ID, CONCAT(U.nombre," ", U.apaterno, " ", U.amaterno) AS RESPONSABLE', false);
            $this->db->from('usuarios AS U');
            $this->db->where('U.Almacenista', 'SI');
            $this->db->order_by('U.Nombre', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $this->db->select('PRO.ID, UPPER(PRO.Proveedor) AS PROVEEDOR', false);
            $this->db->from('Proveedores AS PRO');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedoresXAlmacen($ID) {
        try {
            $this->db->select('PRO.ID, UPPER(PRO.Proveedor) AS PROVEEDOR', false);
            $this->db->from('Proveedores AS PRO');
            $this->db->join('ProductosXAlmacen AS PXA', 'PRO.ID = PXA.IdProveedor');
            $this->db->where('PXA.IdAlmacen', $ID);
            $this->db->group_by('PRO.ID');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $this->db->select('U.Id AS ID, UPPER(CONCAT(U.nombre," ",U.apaterno," ",U.amaterno)) AS USUARIO', false);
            $this->db->from('usuarios AS U');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistenciasPorAlmacen($ID) {
        try {
            $query = $this->db->query("CALL SP_GETEXISTENCIASPORALMACEN(" . $ID . ")");
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

    public function getEntradas() {
        try {
            $query = $this->db->query("CALL SP_GETENTRADAS()");
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

    public function getEntradasXProyectoXAlmacenXProveedorXProducto() {
        try {
            $query = $this->db->query("CALL SP_GETENTRADASXPROYECTOXALMACENXPROVEEDORXPRODUCTO($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO)");
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

    public function getSalidas() {
        try {
            $query = $this->db->query("CALL SP_GETSALIDAS()");
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

    public function getSalidasXProyectoXAlmacenXProveedorXProducto() {
        try {
            $query = $this->db->query("CALL SP_GETSALIDASXPROYECTOXALMACENXPROVEEDORXPRODUCTO($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO)");
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

    public function getExistencias() {
        try {
            $query = $this->db->query("CALL SP_GETEXISTENCIAS()");
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

    public function getProductosExistentes() {
        try {
            $query = $this->db->query("CALL SP_GETPRODUCTOSEXISTENTES()");
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

    public function getExistenciasXAlmacenYProveedor($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN) {
        try {
            $query = $this->db->query("CALL SP_GETEXISTENCIASXALMACENYPROVEEDOR(" . $PROYECTO . "," . $ALMACEN . "," . $PROVEEDOR . ",'" . $INICIO . "','" . $FIN . "')");
//            var_dump($query);
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

    public function getProveedoresExistentes() {
        try {
            $query = $this->db->query("CALL SP_GETPROVEEDORESEXISTENTES()");
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

    public function getExistenciasXAlmacenXProveedorYProducto($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN, $PRODUCTO) {
        try {
            $query = $this->db->query("CALL SP_GETEXISTENCIASXALMACENXPROVEEDORYPRODUCTO(" . $PROYECTO . "," . $ALMACEN . "," . $PROVEEDOR . ",'" . $INICIO . "','" . $FIN . "'," . $PRODUCTO . ")");
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

    public function onCancelarSalida($ID) {
        try {
            $query = $this->db->query("CALL SP_ONCANCELARSALIDA(" . $ID . ",'" . (Date('d/m/Y h:i:s a')) . "')");
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

    public function getSalidaByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETSALIDABYID(" . $ID . ")");
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

    public function onBeforeCancelarEntrada($ID) {
        try {
            $query = $this->db->query("CALL SP_ONBEFORECANCELARENTRADA(" . $ID . ")");
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

    public function onCancelarEntrada($ID) {
        try {
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradaByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETENTRADABYID(" . $ID . ")");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            PRINT $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacenAsignados() {
        try {
            $query = $this->db->query("CALL SP_PRODUCTOSXALMACEN()");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            PRINT $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSalidaXID($ID) {
        try {
            $this->db->select('S.*', false);
            $this->db->from('salidas AS S');
            $this->db->where('S.ID', $ID);
            $this->db->where_in('S.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDevolucionesXFechas($ALMACEN, $INICIO, $FIN) {
        try {
            $this->db->select('D.*', false);
            $this->db->from('devoluciones AS D');
            $this->db->where('D.IdAlmacen', $ALMACEN);

            if ($INICIO != '') {
                $this->db->where('str_to_date(D.FechaDevolucion, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(D.FechaDevolucion, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            $this->db->where_in('D.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenesConDevolucion() {
        try {
            $this->db->select('A.ID, CONCAT(A.Nombre," (",(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = A.Proyecto),")") AS ALMACEN', false);
            $this->db->from('Almacen AS A');
            $this->db->where('A.ID IN (SELECT D.IdAlmacen FROM Devoluciones AS D WHERE D.Estatus IN(\'ACTIVO\'))');
            $this->db->where_in('A.Estatus', 'ACTIVO');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosConDevolucion() {
        try {
            $this->db->select('P.ID,P.Producto AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->where('P.ID IN (SELECT D.IdProducto FROM Devoluciones AS D WHERE D.Estatus IN(\'ACTIVO\') )');
            $this->db->where_in('P.Estatus', 'ACTIVO');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosConDevolucion() {
        try {
            $this->db->select('P.ID, P.Proyecto AS PROYECTO', false);
            $this->db->from('Salidas AS S');
            $this->db->join('Almacen AS A', 'S.IdAlmacen = A.ID');
            $this->db->join('Proyectos AS P', 'P.ID = A.Proyecto');
            $this->db->where('A.ID IN (SELECT D.IdAlmacen FROM Devoluciones AS D WHERE D.Estatus IN(\'ACTIVO\') )');
            $this->db->where_in('A.Estatus', 'ACTIVO');
            $this->db->where_in('S.Estatus', 'ACTIVO');
            $this->db->where_in('P.Estatus', 'ACTIVO');
            $this->db->group_by('P.ID');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenesConExistencias($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO) {
        try {
            $NOT_IN = array('CANCELADA', 'CANCELADO', 'INACTIVO', 'INACTIVA');
            $SELECT = "(SELECT A.Nombre FROM Almacen AS A WHERE A.ID = E.IdAlmacen) AS ALMACEN,
			E.ProveedorT AS \"PROVEEDOR\",  
			E.Producto AS PRODUCTO,
            CONCAT(\"$\",FORMAT(E.Precio,2)) AS PRECIO, 
            E.CondicionT AS \"CONDICION DEL ARTICULO\", 
            E.UnidadMedida AS \"UNIDAD DE MEDIDA (ENTRADA)\",     
	    (SUM(E.CantidadEntrante) - (SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')))
            AS \"CANTIDAD DISPONIBLE\", 
            CASE 
            WHEN E.CantidadCajas > 0 THEN 
            (SUM(E.CantidadCajas) - (SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')  ) ) 
            WHEN (SUM(E.CantidadCajas) - (SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')  ) )  > 0 THEN 
            (SUM(E.CantidadCajas) - (SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')  ) ) 
            ELSE 0
            END
            AS \"CANTIDAD DISPONIBLE EN CAJAS\", 
            CASE 
            WHEN E.CantidadPaquetes > 0 THEN 
            (SUM(E.CantidadPaquetes) -(SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')  ) ) 
            ELSE 0
            END AS \"CANTIDAD DISPONIBLE EN PAQUETES\", 
            CASE 
            WHEN E.CantidadUnidades > 0 THEN 
            (SUM(E.CantidadUnidades) -(SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')  ) ) 
            ELSE 0
            END  AS \"CANTIDAD DISPONIBLE EN UNIDADES\", 
            E.UnidadMedida AS \"UNIDAD DE MEDIDA\"";
            $this->db->select($SELECT, false);
            $this->db->from('Entradas AS E');
            $this->db->join('Almacen AS A', 'E.IdAlmacen = A.ID');
            $this->db->where("(SELECT SUM(EE.CantidadEntrante) FROM Entradas AS EE 
            WHERE EE.IdProducto = E.IdProducto AND E.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')  ) - (SELECT CASE WHEN SUM(S.CantidadSaliente) > 0 
            AND SUM(S.CantidadSaliente) IS NOT NULL THEN 
            SUM(S.CantidadSaliente) ELSE 0 END FROM Salidas AS S WHERE S.IdProducto = E.IdProducto AND S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA'))", NULL, false);
            if ($INICIO != '') {
                $this->db->where('str_to_date(E.FechaIngreso, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(E.FechaIngreso, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            if ($PROYECTO != '') {
                $this->db->where('A.Proyecto', $PROYECTO);
            }
            if ($ALMACEN != '') {
                $this->db->where('E.IdAlmacen', $ALMACEN);
            }
            if ($PROVEEDOR != '') {
                $this->db->where('E.IdProveedor', $PROVEEDOR);
            }
            if ($PRODUCTO != '') {
                $this->db->where('E.IdProducto', $PRODUCTO);
            }
            $this->db->where_not_in('E.Estatus', $NOT_IN);
            $this->db->group_by('E.IdAlmacen, E.IdProducto, E.Precio, E.CondicionT, E.UnidadMedida');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;         
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradasXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO) {
        try {
            $NOT_IN = array('CANCELADA', 'CANCELADO', 'INACTIVO', 'INACTIVA');
            $SELECT = 'CONCAT("<span class=\"label label-primary\">", E.ID, "</span>") AS ID, 
                 P.Proyecto  AS PROYECTO,  
                 A.Nombre   AS ALMACEN,
                E.Producto AS PRODUCTO, 
                E.CondicionT AS "CONDICION DEL ARTICULO", 
                E.UnidadMedida AS "UNIDAD DE MEDIDA (ENTRADA)", 
                CONCAT( E.CantidadSolicitada)  AS "CANTIDAD SOLICITADA", 
               CONCAT( E.CantidadEntrante) AS "CANTIDAD ENTRANTE", 
                E.CantidadCajas AS "CANTIDAD EN CAJAS", 
                E.CantidadPaquetes AS "CANTIDAD EN PAQUETES", 
                E.CantidadUnidades AS "CANTIDAD EN UNIDADES", 
                E.FechaIngreso AS "FECHA DE INGRESO", 
                E.ProveedorT AS "PROVEEDOR", 
                E.NombreEntrega AS "NOMBRE DE QUIEN ENTREGA",
                E.ReferenciaOC AS "REFERENCIA DE ORDEN DE COMPRA", 
                E.RecibeInstPro AS "RECIBE EN INSTALACIONES DEL PROVEEDOR", 
                E.RecibeAlmacenT AS "RECIBE EN ALMACÉN", 
                E.ReferenciaFactura AS "REFERENCIA DE FACTURA", 
                E.Observaciones, 
                E.Estatus, 
                E.Registro, 
                (CASE WHEN E.Cancelacion IS NULL THEN "SIN DATO" ELSE E.Cancelacion END) AS "FECHA DE CANCELACIÓN",
                (CASE WHEN  E.Modificacion IS NULL THEN "SIN DATO" ELSE  E.Modificacion END) AS "ULTIMA MODIFICACIÓN"';
            $this->db->select($SELECT, false);
            $this->db->from('Entradas AS E');
            $this->db->join('Almacen AS A', 'A.ID = E.IdAlmacen');
            $this->db->join('Proyectos AS P', 'P.ID = A.Proyecto');
            $this->db->where("E.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')", NULL, false);
            if ($INICIO != '') {
                $this->db->where('str_to_date(E.FechaIngreso, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(E.FechaIngreso, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            if ($PROYECTO != '') {
                $this->db->where('P.ID', $PROYECTO);
            }
            if ($ALMACEN != '') {
                $this->db->where('E.IdAlmacen', $ALMACEN);
            }
            if ($PROVEEDOR != '') {
                $this->db->where('E.IdProveedor', $PROVEEDOR);
            }
            if ($PRODUCTO != '') {
                $this->db->where('E.IdProducto', $PRODUCTO);
            }
            $this->db->where_not_in('E.Estatus', $NOT_IN);
            $this->db->group_by('E.IdAlmacen, E.IdProducto, E.Precio, E.CondicionT, E.UnidadMedida');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;         
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSalidasXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO) {
        try {
            $NOT_IN = array('CANCELADA', 'CANCELADO', 'INACTIVO', 'INACTIVA');
            $SELECT = '(CASE 
			WHEN (SELECT COUNT(*) FROM Devoluciones AS DEV WHERE DEV.IdSalida = S.ID AND DEV.Estatus LIKE \'ACTIVO\') > 0 THEN 
                        CONCAT("<span class=\"label label-danger\">", S.ID, "</span>") 
                        ELSE CONCAT("<span class=\"label label-primary\">", S.ID, "</span>") 
                        END) AS ID,
                        P.Proyecto AS "PROYECTO",
                        A.Nombre AS "ALMACEN",  
               S.Producto AS "PRODUCTO", 
               S.ConceptoT AS "SALIDA POR CONCEPTO DE", 
               S.CantidadDisponible AS "CANTIDAD DISPONIBLE ANTES DE LA SALIDA", 
               S.CantidadRestante AS "CANTIDAD DESPUES DE LA SALIDA",
               S.CondicionT AS "CONDICION DEL ARTICULO", 
               S.UnidadMedida AS "UNIDAD DE MEDIDA", 
               S.CantidadSaliente AS "CANTIDAD", 
               S.CantidadCajas "CANTIDAD EN CAJAS", 
               S.CantidadPaquetes AS "CANTIDAD EN PAQUETES", 
               S.CantidadUnidades AS "CANTIDAD EN UNIDADES", 
               S.UnidadMedida  AS "UNIDAD DE MEDIDA(GENERAL)", S.Precio, S.FechaEgreso "FECHA DE SALIDA", 
               S.HoraEgreso AS "HORA DE SALIDA", S.ProveedorT AS PROVEEDOR, S.NombreEntrega AS "NOMBRE DE QUIEN ENTREGA", 
               S.ReferenciaFactura AS "REFERENCIA DE LA FACTURA", 
               CASE 
               WHEN S.Observaciones IS NULL THEN "SIN OBSERVACIONES"
               ELSE S.Observaciones END AS OBSERVACIONES, S.ObservacionesGenerales AS "OBSERVACIONES DE LA SALIDA", 
               S.Estatus, S.Registro';
            $this->db->select($SELECT, false);
            $this->db->from('Salidas AS S');
            $this->db->join('Almacen AS A', 'A.ID = S.IdAlmacen');
            $this->db->join('Proyectos AS P', 'P.ID = A.Proyecto');
            $this->db->where("S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')", NULL, false);
            if ($INICIO != '') {
                $this->db->where('str_to_date(S.FechaEgreso, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(S.FechaEgreso, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            if ($PROYECTO != '') {
                $this->db->where('P.ID', $PROYECTO);
            }
            if ($ALMACEN != '') {
                $this->db->where('S.IdAlmacen', $ALMACEN);
            }
            if ($PROVEEDOR != '') {
                $this->db->where('S.IdProveedor', $PROVEEDOR);
            }
            if ($PRODUCTO != '') {
                $this->db->where('S.IdProducto', $PRODUCTO);
            }
            $this->db->where_not_in('S.Estatus', $NOT_IN);
            $this->db->group_by('S.IdAlmacen, S.IdProducto, S.Precio, S.CondicionT, S.UnidadMedida');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;         
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }


    public function getDevolucionesXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PRODUCTO) {
        try {
            $NOT_IN = array('CANCELADA', 'CANCELADO', 'INACTIVO', 'INACTIVA');
            $SELECT = '(CASE 
			WHEN (SELECT COUNT(*) FROM Salidas AS S WHERE D.IdSalida = S.ID AND D.Estatus LIKE \'ACTIVO\') > 0 THEN 
                      D.ID  ELSE D.ID END)   AS ID,
        (
        CASE 
        WHEN D.IdAlmacen IS NULL THEN "NO ESPECIFICO"
        WHEN D.IdAlmacen IS NOT NULL THEN (SELECT A.Nombre FROM Almacen AS A WHERE A.Estatus IN (\'ACTIVO\') AND A.ID = D.IdAlmacen)
        END
        ) AS ALMACEN
        , D.IdEntrada AS ENTRADA, D.IdSalida AS SALIDA, 
        (CASE
        WHEN D.IdProducto IS NULL THEN "NO ESPECIFICO PRODUCTO"
        WHEN D.IdProducto IS NOT NULL THEN (SELECT P.Producto FROM Productos AS P WHERE P.Estatus IN(\'ACTIVO\') AND P.ID = D.IdProducto)
        END) AS PRODUCTO, 
        D.Producto, D.CondicionT AS "CONDICIONES EN LAS QUE SALIO", "DEVOLUCION" AS TIPO, D.TipoSalida AS "FORMA EN LA QUE SALIO", 
        D.CantidadDevuelta AS "CANTIDAD DEVUELTA", D.CantidadSaliente AS "CANTIDAD QUE SALIO", D.CantidadCajas AS "CANTIDAD EN CAJAS(SALIDA)", 
        D.CantidadUnidades AS "CANTIDAD EN UNIDADES(SALIDA)", D.CantidadPaquetes AS "CANTIDAD EN PAQUETES(SALIDA)", 
        D.UnidadMedida AS "UNIDAD DE MEDIDA", fORMAT(D.Precio,2) AS PRECIO, D.FechaEgreso AS "FECHA DE SALIDA", D.HoraEgreso AS "HORA DE EGRESO(SALIDA)", 
        (CASE
        WHEN D.IdProveedor IS NULL THEN "NO ESPEFICIO"
        WHEN D.IdProveedor IS NOT NULL THEN (SELECT PRO.Proveedor FROM Proveedores AS PRO WHERE PRO.Estatus IN(\'ACTIVO\') AND PRO.ID = D.IdProveedor)
        END) AS PROVEEDOR, D.NombreEntrega AS "ENTREGÓ", D.ReferenciaFactura AS "REF. FACTURA", D.Observaciones, D.ObservacionesGenerales AS "OBSERVACIONES GENERALES(SALIDA", D.ConceptoT AS CONCEPTO, 
        D.CantidadDisponible AS "CANTIDAD DISPONIBLE (SALIDA)", D.CantidadRestante AS "CANTIDAD RESTANTE(SALIDA)", D.FechaDevolucion AS "FECHA DEVOLUCION", 
        D.TipoDevolucion AS "CONDICIONES DE LA DEVOLUCIÓN", D.CantidadNoDevuelta AS "CANTIDAD NO DEVUELTA", D.Estatus, D.Registro ';
            $this->db->select($SELECT, false);
            $this->db->from('Devoluciones AS D');
            $this->db->join('Salida AS S', 'S.ID = D.IdSalida');
            $this->db->join('Almacen AS A', 'A.ID = D.IdAlmacen');
            $this->db->join('Proyectos AS P', 'P.ID = A.Proyecto');
            $this->db->where("S.Estatus NOT IN('CANCELADA','CANCELADO','INACTIVO','INACTIVA')", NULL, false);
            if ($INICIO != '') {
                $this->db->where('str_to_date(D.FechaDevolucion, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
            }
            if ($FIN != '') {
                $this->db->where('str_to_date(D.FechaDevolucion, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
            }
            if ($PROYECTO != '') {
                $this->db->where('P.ID', $PROYECTO);
            }
            if ($ALMACEN != '') {
                $this->db->where('D.IdAlmacen', $ALMACEN);
            }
//            if ($PROVEEDOR != '') {
//                $this->db->where('S.IdProveedor', $PROVEEDOR);
//            }
            if ($PRODUCTO != '') {
                $this->db->where('D.IdProducto', $PRODUCTO);
            }
            $this->db->where_not_in('D.Estatus', $NOT_IN);
            $this->db->where_not_in('A.Estatus', $NOT_IN);
            $this->db->where_not_in('P.Estatus', $NOT_IN);
//            $this->db->group_by('S.IdAlmacen, S.IdProducto, S.Precio, S.CondicionT, S.UnidadMedida');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;         
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
