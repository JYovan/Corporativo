<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class compras_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    } 
    
    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETCOMPRAS()");
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
    function getOrdenesDeCompra() {
        try {
            $query = $this->db->query("CALL SP_GETORDENESDECOMPRAS()");
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
    
    function getOrdenesDeCompraADetalle() {
        try {
            $query = $this->db->query("CALL SP_GETORDENESDECOMPRASADETALLE()");
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

    function getCanceledRecords() {
        try {
            $this->db->select("co.ID, pro.Proyecto, co.Numero AS FOLIO, co.Fecha, co.Estatus");
            $this->db->from("Cotizaciones AS co");
            $this->db->join('Proyectos AS pro', 'co.Proyecto = pro.ID');
            $this->db->where_in("co.Estatus", array("CANCELADA"));
            $this->db->order_by('co.ID', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAction($tbl, $array, $type, $condition) {
        try {
            switch ($type) {
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
                    break;
                case "delete":
                    $this->db->where($condition[0], $condition[1]);
                    $this->db->update($tbl, array('Estatus' => 'INACTIVO'));
                    break;
                default:
                    break;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getCompras() {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA,  DIR.NombreC AS EMPRESA, '
                . 'tfac.ModeloNegocio AS "MODELO DE NEGOCIO", tfac.Actividad AS ACTIVIDAD, '
                . 'tfac.NumeroDeContrato AS "CONTRATO", '
                . 'PRO.Proveedor AS PROVEEDOR, '
                . 'tfac.NumeroFactura AS "FACTURA", tfac.Importe AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . ' concat(IE.Nombre," ",IE.apaterno," ", IE.amaterno)AS RECEPTOR, tfac.Estatus AS ESTATUS', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
        return $data;
    }

    function getProductByID($ID) {
        $this->db->select("*");
        $this->db->from("Productos AS P");
        $this->db->where("P.ID", $ID);
        $query = $this->db->get();
        return $query->result();
    }

    function getProductByIDPrice($ID, $PROVEEDORES, $CANTIDAD) {
        $this->db->select("P.ID AS IDPROD, P.Folio, P.Etiqueta AS IDETI, P.Producto, P.Marca, P.UnidadMedida,PRO.ID AS IDPROV, PRO.Proveedor, C.Precio, (C.Precio*" . $CANTIDAD . ") AS IMPORTE", false);
        $this->db->from("Productos AS P");
//        $this->db->join("Catalogo AS C", "P.Folio = C.Folio");
        $this->db->join("Catalogo AS C", "P.ID = C.IdProducto");
        $this->db->join("Proveedores AS PRO", "C.Proveedor = PRO.ID");
        $this->db->where("P.ID", $ID);
        $this->db->where("PRO.ID", $PROVEEDORES);
        $this->db->where("P.Estatus", 'ACTIVO');
        $this->db->where("C.Estatus", 'ACTIVO');
//        $this->db->where("P.Etiqueta", $ETIQUETAID);
//        $this->db->where_in("C.Proveedor", $PROVEEDORES);
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getProductByEtiqueta($ID, $PRO) {
        $this->db->select("P.*");
        $this->db->from("Productos AS P");
//        $this->db->join("Catalogo AS C", "P.Folio = C.Folio");
        $this->db->join("Catalogo AS C", "P.ID = C.IdProducto");
        $this->db->join("Proveedores AS PRO", "C.Proveedor = PRO.ID");
        $this->db->where("P.Etiqueta", $ID);
        $this->db->where("PRO.ID", $PRO);
        $this->db->where("P.Estatus", 'ACTIVO');
        $this->db->where("C.Estatus", 'ACTIVO');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getProductByEtiquetaID($ID, $PROVEEDOR) {
        $this->db->select("P.*,C.Precio");
        $this->db->from("Productos AS P");
//        $this->db->join("Catalogo AS C", "P.Folio = C.Folio");
        $this->db->join("Catalogo AS C", "P.ID = C.IdProducto");
        $this->db->where("P.Etiqueta", $ID);
        $this->db->where_in("C.Proveedor", $PROVEEDOR);
        $this->db->where("P.Estatus", 'ACTIVO');
        $this->db->where("C.Estatus", 'ACTIVO');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }
    function getProductosXProveedor($PROVEEDOR) {
        $this->db->select("P.*,C.Precio");
        $this->db->from("Productos AS P");
//        $this->db->join("Catalogo AS C", "P.Folio = C.Folio");
        $this->db->join("Catalogo AS C", "P.ID = C.IdProducto");
//        $this->db->where("P.Etiqueta", $ID);
        $this->db->where_in("C.Proveedor", $PROVEEDOR);
        $this->db->where("P.Estatus", 'ACTIVO');
        $this->db->where("C.Estatus", 'ACTIVO');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getMaxID() {
        $this->db->select("MAX(C.ID) AS MAXID", false);
        $this->db->from("Cotizaciones AS C");
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getHeadRow($ID) {
        try {
            $this->db->select("C.ID, PROY.Proyecto AS PROYECTO,C.Elabora AS ELABORA,C.Solicitante AS SOLICITA, C.Numero AS NUMERO, C.Fecha AS FECHA,C.Anotaciones AS ANOTACIONES,C.Estatus AS ESTATUS");
            $this->db->from("Cotizaciones AS C");
            $this->db->join("Proyectos AS PROY", "C.Proyecto = PROY.ID");
            $this->db->where("C.ID", $ID);
            $query = $this->db->get();
            $str = $this->db->last_query();
//        print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDetailRow($ID) {
        try {
            $this->db->select("CD.IdCotizacionD AS IDDETALLE,PRO.ID AS IDPROV, P.ID AS IDPROD,P.Producto,P.Marca,CD.Precio,P.UnidadMedida, PRO.Proveedor,CC.id_conceptos AS IDETI, CC.dsc_conceptos AS ETIQUETA, CD.Cantidad AS CANTIDAD, (CD.Precio * CD.Cantidad) AS IMPORTE", false);
            $this->db->from("CotizacionesDetalle AS CD");
            $this->db->join("Proveedores AS PRO", "CD.IdProveedor = PRO.ID");
            $this->db->join("CotizacionConceptos AS CC", "CD.IdEtiqueta = CC.id_conceptos");
            $this->db->join("Productos AS P", "CD.IdProducto = P.ID");
//            $this->db->join("Catalogo AS C", "P.Folio = C.Folio");
            $this->db->join("Catalogo AS C", "P.ID = C.IdProducto");
            $this->db->where("CD.IdCotizacion", $ID);
            $this->db->where_not_in("CD.Estatus", array('ELIMINADO'));
            $this->db->group_by("CD.IdCotizacionD", "CD.IdProveedor", "P.ID");
            $this->db->order_by("CD.IdCotizacionD", "ASC");
            $query = $this->db->get();
            $str = $this->db->last_query();
//        print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDataReportCotizacion($ID) {
        try {
            $this->db->select("C.ID,C.Numero AS NUMERO, C.Fecha AS FECHA, C.Anotaciones AS ANOTACIONES,  "
                    . "CC.dsc_conceptos AS CATEGORIA, CONCAT(PROD.Producto,\" \",PROD.Marca) AS PRODUCTO, CD.Cantidad AS CANTIDAD,"
                    . "CD.Precio AS PRECIO, CD.Fecha AS FECHARPRO, PRO.Proveedor AS PROVEEDOR,CD.Cantidad * CD.Precio AS SUBTOTAL,((CD.Cantidad * CD.Precio) * 0.16 )AS IVA,CD.Cantidad * CD.Precio AS IMPORTEXP, "
                    . "PRO.Calle AS PROCALLE, PRO.Tel AS PROTEL,PROYS.ID AS IDPROYECTO, PROYS.Proyecto AS PROYECTO, PROD.UnidadMedida AS UNIDAD, C.Estatus AS ESTATUS,"
                    . "DIR.RazonS AS RAZON_A_FACTURAR,DIR.RFC, DIR.NombreC AS EMPRESA, DIR.CALLE, DIR.Tel AS TEL,DIR.Correo AS CORREO,"
                    . "UPPER(CONCAT(DIR.Calle, \" No \", DIR.No, \" \", DIR.Colonia, \",\",EDO.dsc_estado, \" \",CIU.dsc_ciudad,\" C.P \",DIR.CP)) AS DIRECCION_FACTURA,"
                    . "UPPER(CONCAT(PRO.Calle,\" No\",PRO.No,\" \",PRO.Colonia,\",\")) AS DIR_PROVEEDOR ", false);
            $this->db->from("Cotizaciones AS C");
            $this->db->join("CotizacionesDetalle AS CD", "C.ID = CD.IdCotizacion");
            $this->db->join("Proveedores AS PRO", "CD.IdProveedor = PRO.ID");
            $this->db->join("Proyectos AS PROYS", "C.Proyecto = PROYS.ID");
            $this->db->join("CotizacionConceptos AS CC", "CD.IdEtiqueta = CC.id_conceptos");
            $this->db->join("Productos AS PROD", "CD.IdProducto  = PROD.ID");
            $this->db->join("Directorio AS DIR", "C.IdFacturado = DIR.ID");
            $this->db->join("Estado AS EDO", "DIR.Estado = EDO.id_estado");
            $this->db->join("Ciudad AS CIU", "DIR.Ciudad = CIU.id_ciudad");
            $this->db->where("C.ID", $ID);
            $this->db->where_not_in("CD.Estatus", array('ELIMINADO'));
//            $this->db->group_by("PROD.ID"); 
            $this->db->group_by("CD.IdCotizacionD", "CD.IdProveedor", "PROD.ID");
            $this->db->order_by("CD.IdCotizacionD", "ASC");
            $query = $this->db->get();
            $str = $this->db->last_query();
//        print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getOrdenDeCompra($ID) {
        try {
//            $this->db->select("C.Anotaciones AS ANOTACIONES,  "
//                    . "CC.dsc_conceptos AS CATEGORIA, CONCAT(PROD.Producto,\" \",PROD.Marca) AS PRODUCTO, CD.Cantidad AS CANTIDAD,"
//                    . "CD.Precio AS PRECIO, CD.Fecha AS FECHARPRO, PRO.Proveedor AS PROVEEDOR,CD.Cantidad * CD.Precio AS SUBTOTAL,((CD.Cantidad * CD.Precio) * 0.16 )AS IVA,CD.Cantidad * CD.Precio AS IMPORTEXP, "
//                    . "PRO.Calle AS PROCALLE, PRO.Tel AS PROTEL,PROYS.ID AS IDPROYECTO, PROYS.Proyecto AS PROYECTO, PROD.UnidadMedida AS UNIDAD, C.Estatus AS ESTATUS,"
//                    . "DIR.RazonS AS RAZON_A_FACTURAR,DIR.RFC, DIR.NombreC AS EMPRESA, DIR.CALLE, DIR.Tel AS TEL,DIR.Correo AS CORREO,"
//                    . "UPPER(CONCAT(DIR.Calle, \" No \", DIR.No, \" \", DIR.Colonia, \",\",EDO.dsc_estado, \" \",CIU.dsc_ciudad,\" C.P \",DIR.CP)) AS DIRECCION_FACTURA,"
//                    . "UPPER(CONCAT(PRO.Calle,\" No\",PRO.No,\" \",PRO.Colonia,\",\")) AS DIR_PROVEEDOR ", false);
            $this->db->select("OC.ID,CASE WHEN CO.Solicitante IS NULL THEN 'NO APLICA' ELSE (SELECT UPPER(CONCAT(U.nombre,' ',U.apaterno,' ',U.amaterno)) FROM usuarios AS U WHERE U.Id = CO.Solicitante) END AS SOLICITANTE,"
                    . "(SELECT PROY.Proyecto FROM Proyectos AS PROY WHERE PROY.ID = OC.Proyecto) AS PROYECTO, OC.Numero AS NUMERO, DIR.RazonS AS RAZON_A_FACTURAR, "
                    . "(SELECT FP.dsc_FormaPago FROM FormaPago AS FP WHERE FP.id_FormaPago = OC.FormaDePago) AS FORMADEPAGO,UPPER(PRO.Proveedor) AS PROVEEDOR,CONCAT(PROD.Producto,\" \",PROD.Marca) AS PRODUCTO,"
                    . "PROD.UnidadMedida AS UNIDAD, OCD.Cantidad AS CANTIDAD, OCD.Precio AS PRECIO, "
                    . "OCD.Cantidad * OCD.Precio AS IMPORTEXP, OC.Fecha AS FECHA, OC.Observaciones AS ANOTACIONES, "
                    . "DIR.RFC,PRO.Tel AS PROTEL,DIR.CALLE, DIR.Tel AS TEL,DIR.Correo AS CORREO, "
                    . "UPPER(CONCAT(DIR.Calle, \" No \", DIR.No, \" \", DIR.Colonia, \",\",EDO.dsc_estado, \" \", CIU.dsc_ciudad,\" C.P \",DIR.CP)) AS DIRECCION_FACTURA, "
                    . "UPPER(CONCAT(PRO.Calle,\" No\",PRO.No,\" \",PRO.Colonia)) AS DIR_PROVEEDOR,"
                    . "DIR.NombreC AS EMPRESA, OC.LugarDeEntrega AS LUGARDEENTREGA,"
                    . "(SELECT CONCAT(U.nombre,\" \",U.apaterno,\" \",U.amaterno) FROM usuarios AS U WHERE U.Id = CO.Elabora) AS ELABORO, "
                    . "(SELECT CONCAT(U.nombre,\" \",U.apaterno,\" \",U.amaterno) FROM usuarios AS U WHERE U.Id = OC.Autoriza) AS AUTORIZA, "
                    . "OC.Recibe AS RECIBE, (SELECT SUBSTRING(C.NoCuenta,4) FROM Cuentas AS C WHERE C.ID = OC.Cuenta) AS CUENTA,PRO.Icono AS ICONO", false);
            $this->db->from("OrdenDeCompra AS OC");
            $this->db->join("OrdenDeCompraD AS OCD", "OC.ID = OCD.IDOrdenDeCompra");
            $this->db->join("Cotizaciones AS CO", "OC.IdCotizacion = CO.ID");
            $this->db->join("Directorio AS DIR", "CO.IdFacturado = DIR.ID");
            $this->db->join("Proveedores AS PRO", "OCD.Proveedor = PRO.ID");
            $this->db->join("Estado AS EDO", "DIR.Estado = EDO.id_estado");

            $this->db->join("Ciudad AS CIU", "DIR.Ciudad = CIU.id_ciudad");
            $this->db->join("Productos AS PROD", "OCD.IdProducto = PROD.ID");
            $this->db->where("CO.ID", $ID);
            $this->db->where_not_in("OCD.Estatus", array('ELIMINADO'));
//            $this->db->group_by("PROD.ID"); 
//            $this->db->group_by("OCD.ID");
//            $this->db->order_by("OCD.IDOrdenDeCompra", "ASC");
            $query = $this->db->get();
            $str = $this->db->last_query();
//        print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getEmpresas() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Directorio');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function getFormaDePago() {
        try {
            $this->db->select('FP.id_FormaPago AS ID, FP.dsc_FormaPago FORMADEPAGO');
            $this->db->from('FormaPago AS FP');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumeroDeCotizacionXProyecto($ID) {
        try {
            $this->db->select("LPAD((COUNT(*)+1),5,'0') AS COTIZACION", false);
            $this->db->from("Cotizaciones AS C");
            $this->db->where("C.Proyecto", $ID);
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getUsuarios() {
        try {
            $this->db->select('*');
            $this->db->from('usuarios AS USR');
            $this->db->order_by('USR.nombre', 'ASC');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getCuentas() {
        try {
            $this->db->select('C.ID, UPPER(CONCAT(C.Banco, " - ", C.Titular, "-  ",SUBSTRING(C.NoCuenta,4))) AS CUENTA', false);
            $this->db->from('Cuentas AS C');
            $this->db->order_by('C.Titular', 'ASC');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
