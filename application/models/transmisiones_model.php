<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class transmisiones_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETTRANSMISIONES()");
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

    function getDispersiones() {
        try {
            $query = $this->db->query("CALL SP_GETDISPERSIONES()");
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

    function getDispersionesPagadas() {
        try {
            $query = $this->db->query("CALL SP_GETDISPERSIONESPAGADAS()");
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

    function getReporteDispersionesMasIncremento($PROYECTO, $INICIO, $FIN) {
        $this->db->select('D.ID AS ID, D.FechaDispersion AS "FECHA DISPERSION",(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = T.NFideicomiso) AS PROYECTO, '
                . 'T.Adquirente AS ADQUIRENTE, T.Manzana AS MANZANA, '
                . 'T.Lotes AS "LOTE", T.Viviendas AS NUMERO,'
                . '(CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        ((SELECT SUM(IT.Incremento) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) + T.PagoTerreno) 
        ELSE T.PagoTerreno END) AS "PAGO DE TERRENO", 
     
        (CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.PagoRendimientos  FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)
        ELSE T.PagoRendimientos END) AS "PAGO DE RENDIMIENTOS", '
                
        . '(CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.TotalIngresoTerrenoVenta  FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)  
        ELSE T.TotalIng END) AS "TOTAL DE INGRESO", 
        
        (CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.CantidadDispersada   FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)  
        ELSE D.CantidadDispersada END) AS "CANTIDAD DISPERSADA", 

        (SELECT SUM(IT.Incremento) FROM rabinaco_corporativo.incrementoterreno AS IT
        WHERE IT.IdTransmision = T.ID AND IT.IdDispersion = D.ID AND IT.Estatus LIKE \'ACTIVO\') AS INCREMENTO,

        D.DiferenciaAFavor AS "DIFERENCIA A FAVOR", D.DiferenciaEnContra AS "DIFERENCIA EN CONTRA"', false);
        $this->db->from('Transmision AS T');
        $this->db->join('Dispersion AS D', 'T.ID = D.IdTransmision');
        if ($PROYECTO !== NULL && $PROYECTO !== '') {
            $this->db->where('T.NFideicomiso', $PROYECTO);
        }
        if ($INICIO !== NULL && $INICIO !== '') {
            $this->db->where('str_to_date(D.FechaDispersion, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FIN !== NULL && $FIN !== '') {
            $this->db->where('str_to_date(D.FechaDispersion, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_in('T.Estatus', array('DISPERSADA'));
        $this->db->where('(SELECT COUNT(PXD.ID) FROM Dispersion AS D INNER JOIN PagosXDispersion AS PXD WHERE PXD.IdDispersion = D.ID AND D.IdTransmision = T.ID AND PXD.Estatus IN("ACTIVO")) > 0 ORDER BY  str_to_date(D.FechaDispersion, \'%d/%m/%Y\') ASC', NULL, false);

        $this->db->limit('99999', '0');
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

    function getReporteDispersiones($PROYECTO, $INICIO, $FIN) {
        $this->db->select('D.ID AS ID, D.FechaDispersion AS "FECHA DISPERSION",(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = T.NFideicomiso) AS PROYECTO, '
                . 'T.Adquirente AS ADQUIRENTE, T.Manzana AS MANZANA, '
                . 'T.Lotes AS "LOTE", T.Viviendas AS NUMERO,'
                . '(CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        ((SELECT SUM(IT.Incremento) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) + T.PagoTerreno) 
        ELSE T.PagoTerreno END) AS "PAGO DE TERRENO", 
     
        (CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.PagoRendimientos  FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)
        ELSE T.PagoRendimientos END) AS "PAGO DE RENDIMIENTOS", '
                
        . '(CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.TotalIngresoTerrenoVenta  FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)  
        ELSE T.TotalIng END) AS "TOTAL DE INGRESO", 
        
        (CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.CantidadDispersada   FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)  
        ELSE D.CantidadDispersada END) AS "CANTIDAD DISPERSADA", 

        D.DiferenciaAFavor AS "DIFERENCIA A FAVOR", D.DiferenciaEnContra AS "DIFERENCIA EN CONTRA"', false);
        $this->db->from('Transmision AS T');
        $this->db->join('Dispersion AS D', 'T.ID = D.IdTransmision');
        if ($PROYECTO !== NULL && $PROYECTO !== '') {
            $this->db->where('T.NFideicomiso', $PROYECTO);
        }
        if ($INICIO !== NULL && $INICIO !== '') {
            $this->db->where('str_to_date(D.FechaDispersion, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FIN !== NULL && $FIN !== '') {
            $this->db->where('str_to_date(D.FechaDispersion, \'%d/%m/%Y\') <= str_to_date(\'' . $FIN . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_in('T.Estatus', array('DISPERSADA'));
        $this->db->where('(SELECT COUNT(PXD.ID) FROM Dispersion AS D INNER JOIN PagosXDispersion AS PXD WHERE PXD.IdDispersion = D.ID AND D.IdTransmision = T.ID AND PXD.Estatus IN("ACTIVO")) > 0 ORDER BY  str_to_date(D.FechaDispersion, \'%d/%m/%Y\') ASC', NULL, false);

        $this->db->limit('99999', '0');
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

    function getCancelados() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",T.ID,"</span>") AS ID, (SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = T.NFideicomiso) AS PROYECTO, T.FechaEntrega AS "FECHA DE ENTREGA", T.FechaNot AS "FECHA DE NOTIFICACIÓN", T.Notificador AS "NOTIFICADOR", T.Manzana AS MANZANA, T.Lotes AS "LOTE", T.Viviendas AS NUMERO, T.Adquirente AS ADQUIRENTE, T.Estatus AS ESTATUS', false);
        $this->db->from('Transmision AS T');
        $this->db->where_in('T.Estatus', array('INACTIVO'));
        $this->db->limit('99999', '0');
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

    function getRecordsByID($ID) {
        $this->db->select('*', false);
        $this->db->from('Transmision AS T');
        $this->db->where('T.ID', $ID);
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

    function getDispersionByID($ID) {
        $this->db->select('D.ID, D.IdTransmision, D.MontoFideicomiso, D.Montofideicomitente, D.MontofideicomitenteRabina, D.FechaNotDis, D.FechaNotRabina, D.NombreNotif, D.NombreNotifRabina, D.Manzana, D.Lotes, D.Viviendas, (SELECT PRO.Proyecto FROM Proyectos AS PRO WHERE PRO.ID = D.NFideicomiso ) AS PROYECTON,D.RDocumento, D.Observaciones', false);
        $this->db->from('Dispersion AS D');
        $this->db->where('D.ID', $ID);
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

    function getRecordsByTransmision($ID) {
        $this->db->select('*', false);
        $this->db->from('Transmision AS T');
        $this->db->where('T.ID', $ID);
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

    function getProyectos() {
        $this->db->select('P.ID ID, P.Proyecto AS PROYECTO', false);
        $this->db->from('Proyectos AS P');
        $this->db->where_in('P.Modelo', array(1, 2));
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        return $data;
    }

    function getManzanasXDesarrollo($ID) {
        $this->db->select('PM.ID, PM.Manzana AS MANZANA', false);
        $this->db->from('ProyectosManzanas AS PM');
        $this->db->where('PM.Proyecto', $ID);
        $this->db->order_by('PM.MANZANA', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getLotesXManzana($ID, $M) {
        $this->db->select('L.ID, CONCAT(L.NLotesHr,\',\',L.NLotesHi,\',\',L.NLotesC) AS LOTES', false);
        $this->db->from('ProyectosManzanas AS L');
        $this->db->where('L.Proyecto', $ID);
        $this->db->where('L.ID', $M);
        $this->db->order_by('L.NLotesHr', 'ASC');
//        $this->db->limit('0','99999');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getNumerosXLotes($ID, $M, $L) {
        $this->db->select('PV.Id AS ID, PV.NumViviendas AS NUMEROS, PV.Modelo AS MODELO', false);
        $this->db->from('ProyectosViviendas AS PV');
        $this->db->where('PV.Desarrollo', $ID);
        $this->db->where('PV.Manzana', $M);
        $this->db->where('PV.Lotes', $L);
        $this->db->where('PV.NumViviendas <>', '');
        $this->db->where('PV.Modelo <>\'\' AND PV.Modelo <> \'-\'', NULL, FALSE);
        $this->db->order_by('PV.NumViviendas', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
//        print $str = $this->db->last_query();
//        PRINT $str;
        return $data;
    }

    function onBusquedaEspecifica($Proyecto, $FechaNotI, $FechaNotF) {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",T.ID,"</span>") AS ID, '
                . '(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = T.NFideicomiso) AS PROYECTO, T.FechaEntrega AS "FECHA DE ENTREGA", '
                . 'T.FechaNot AS "FECHA DE NOTIFICACIÓN", T.Notificador AS "NOTIFICADOR", T.RecibeNot AS "RECIBE NOTIFICACIÓN", '
                . 'T.Manzana AS MANZANA, T.Lotes AS "LOTE", T.Viviendas AS NUMERO, T.Adquirente AS ADQUIRENTE, CONCAT("$",FORMAT(T.PrecioBase,2)) AS "PRECIO BASE" ,'
                . 'CONCAT("$",FORMAT(T.MontoDescuento,2)) AS DESCUENTO, CONCAT("$",FORMAT(T.CostoAdic,2)) AS "COSTO ADICIONAL", '
                . 'CONCAT("$",FORMAT(T.PrecioTotal,2)) AS "PRECIO TOTAL", CONCAT("$",FORMAT(T.PrecioVentaN,2)) AS "PRECIO DE VENTA NETO",'
                . 'CONCAT("$",FORMAT(T.PrecioVentaE,2)) AS "PRECIO DE VENTA EN ESCRITURA",CONCAT("$", FORMAT(T.PagoTerreno, 2)) AS "PAGO DE TERRENO",'
                
                . ' (CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
		CONCAT("$", FORMAT(((SELECT SUM(IT.Incremento) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) + T.PagoTerreno), 2)) 
		ELSE CONCAT("$", FORMAT(T.PagoTerreno, 2)) END) AS "PAGO DE TERRENO (ACTUALIZADO)", '
                
                . 'CONCAT("$", FORMAT(T.PagoRendimientos, 2)) AS "PAGO DE RENDIMIENTOS",
                    
                      (CASE 
        WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        CONCAT("$", FORMAT( (SELECT IT.PagoRendimientos  FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1), 2))  
        ELSE CONCAT("$", FORMAT(T.PagoRendimientos, 2)) END) AS "PAGO DE RENDIMIENTOS (ACTUALIZADO)", '
                
                . '   (CASE 
        WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        CONCAT("$", FORMAT((SELECT IT.TotalIngresoTerrenoVenta  FROM incrementoterreno AS IT 
        WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1), 2)) 
        ELSE CONCAT("$", FORMAT(T.TotalIng, 2)) END) AS "TOTAL DE INGRESO (ACTUALIZADO)", 
     
        T.Estatus AS ESTATUS', false);
        $this->db->from('Transmision AS T');
        $this->db->where('T.NFideicomiso', $Proyecto);
        if ($FechaNotI != '') {
            $this->db->where('str_to_date(T.FechaNot, \'%d/%m/%Y\') >= str_to_date(\'' . $FechaNotI . '\', \'%d/%m/%Y\') ');
        }
        if ($FechaNotF != '') {
            $this->db->where('str_to_date(T.FechaNot, \'%d/%m/%Y\') <= str_to_date(\'' . $FechaNotF . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_in('T.Estatus', array('ACTIVO', 'DISPERSADA'));
        $this->db->limit('99999', '0');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
//        print $str = $this->db->last_query();
//        PRINT $str;
        return $data;
    }

    function onBusquedaEspecificaXSuma($Proyecto, $FechaNotI, $FechaNotF) {
        $this->db->select('CONCAT("$",FORMAT(SUM(T.PrecioBase),2)) AS "PRECIO BASE" ,'
                . 'CONCAT("$",FORMAT(SUM(T.MontoDescuento),2)) AS DESCUENTO, '
                . 'CONCAT("$",FORMAT(SUM(T.CostoAdic),2)) AS "COSTO ADICIONAL", '
                . 'CONCAT("$",FORMAT(SUM(T.PrecioTotal),2)) AS "PRECIO TOTAL", '
                . 'CONCAT("$",FORMAT(SUM(T.PrecioVentaN),2)) AS "PRECIO DE VENTA NETO",'
                . 'CONCAT("$",FORMAT(SUM(T.PrecioVentaE),2)) AS "PRECIO DE VENTA EN ESCRITURA",'
                . 'CONCAT("$",FORMAT(SUM(T.PagoTerreno),2)) AS "PAGO DE TERRENO",'
                . 'CONCAT("$",FORMAT(SUM(T.PagoRendimientos),2)) AS "PAGO DE RENDIMIENTOS",'
                . 'CONCAT("$",FORMAT(SUM(T.TotalIng),2)) AS "TOTAL DE INGRESO", T.Estatus AS ESTATUS', false);
        $this->db->from('Transmision AS T');
        $this->db->where('T.NFideicomiso', $Proyecto);
        if ($FechaNotI != '') {
            $this->db->where('str_to_date(T.FechaNot, \'%d/%m/%Y\') >= str_to_date(\'' . $FechaNotI . '\', \'%d/%m/%Y\') ');
        }
        if ($FechaNotF != '') {
            $this->db->where('str_to_date(T.FechaNot, \'%d/%m/%Y\') <= str_to_date(\'' . $FechaNotF . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_in('T.Estatus', array('ACTIVO'));
        $this->db->limit('99999', '0');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
//        print $str = $this->db->last_query();
//        PRINT $str;
        return $data;
    }

    function getPagosXDispersionByID($ID) {
        $this->db->select("PXD.ID, PXD.IdTransmision, PXD.IdDispersion, PXD.FechaDispersion as \"FECHA DISPERSION\", "
                . "PXD.CantidadDispersada AS \"CANTIDAD DISPERSADA\", PXD.CuentaDispersion AS \"CUENTA DISPERSION\", "
                . "PXD.Referencia AS REFERENCIA, PXD.Observaciones AS OBSERVACIONES, PXD.Estatus AS ESTATUS,PXD.Registro,"
                . "D.FechaNotDis,D.NombreNotif,D.NombreNotifRabina,D.FechaNotRabina,(SELECT PRO.Proyecto FROM Proyectos AS PRO WHERE PRO.ID = D.NFideicomiso ) AS PROYECTON,"
                . "D.Manzana,D.Lotes, D.Viviendas, D.MontoFideicomiso,D.CuentaDispersion,D.MontoFideicomiso,D.MontofideicomitenteRabina,D.Montofideicomitente,D.ReferenciaTran,D.Observaciones,PXD.rDocumento", false);
        $this->db->from('PagosXDispersion AS PXD');
        $this->db->join('Dispersion AS D', 'D.ID = PXD.IdDispersion');
        $this->db->where('PXD.ID', $ID);
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

    /*
     * SE OCUPA DUPLICAR ESTE METODO PORQUE SE REQUIERE SIN FORMATO 
     *  */

    function getPagosXDispersionByIDSF($ID) {
        $this->db->select("PXD.ID, PXD.IdTransmision, PXD.IdDispersion, PXD.FechaDispersion as \"FECHA DISPERSION\", "
                . "PXD.CantidadDispersada AS \"CANTIDAD DISPERSADA\", PXD.CuentaDispersion AS \"CUENTA DISPERSION\", "
                . "PXD.Referencia AS REFERENCIA, PXD.Observaciones AS OBSERVACIONES, PXD.Estatus AS ESTATUS,PXD.Registro,"
                . "D.FechaNotDis,D.NombreNotif,D.NombreNotifRabina,D.FechaNotRabina,(SELECT PRO.Proyecto FROM Proyectos AS PRO WHERE PRO.ID = D.NFideicomiso ) AS PROYECTON,"
                . "D.Manzana,D.Lotes, D.Viviendas, D.MontoFideicomiso,D.CuentaDispersion,D.MontoFideicomiso,D.MontofideicomitenteRabina,D.Montofideicomitente,D.ReferenciaTran,D.Observaciones,PXD.rDocumento", false);
        $this->db->from('PagosXDispersion AS PXD');
        $this->db->join('Dispersion AS D', 'D.ID = PXD.IdDispersion');
        $this->db->where('PXD.ID', $ID);
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

    function getPagoByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETPAGOBYID($ID)");
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

    function getEmpleados() {
        try {
            $where = "";
            $this->db->select('*');
            $this->db->from('InformacionEmpleados');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getIncrementosXTerrenos() {
        try {
            $query = $this->db->query("CALL SP_GETINCREMENTOSXTERRENOS()");
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

    function getIncrementoXID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETINCREMENTOXID($ID)");
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
