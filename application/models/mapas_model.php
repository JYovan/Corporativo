<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class mapas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function getRecords() {
        $this->db->select('PRO.ID,UPPER(PRO.Producto) AS PRODUCTO, PRO.Marca AS MARCA, PRO.UnidadMedida AS "UNIDAD", '
                . 'CASE WHEN PRO.Proveedores IS NOT NULL AND PRO.Proveedores <> \'\' THEN (SELECT P.Proveedor FROM Proveedores AS P WHERE P.ID = PRO.Proveedores) ELSE "SIN PROVEEDOR" END AS PROVEEDOR', false);
        $this->db->from('Productos AS PRO');
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
        $this->db->select('CO.IdProyecto AS ID, P.Proyecto AS PROYECTO, P.NumeroViviendas, CO.Latitud, CO.Longitud, CO.Icono AS ICONO,CO.Portada AS PORTADA, 
            (SELECT COUNT(*) FROM Transmision AS T WHERE T.NFideicomiso = CO.IdProyecto AND T.Estatus LIKE \'ACTIVO\') AS TRANSMITIDAS,
            CONCAT("$",FORMAT((SELECT SUM(T.PagoTerreno) FROM Transmision AS T WHERE T.NFideicomiso = CO.IdProyecto AND T.Estatus IN( \'ACTIVO\',\'DISPERSADA\')),2)) AS "TOTAL TERRENOS",
             CONCAT("$",FORMAT((SELECT SUM(T.PagoRendimientos) FROM Transmision AS T WHERE T.NFideicomiso = CO.IdProyecto AND T.Estatus IN( \'ACTIVO\',\'DISPERSADA\')),2)) AS "TOTAL RENDIMIENTOS",
             CONCAT("$",FORMAT((SELECT SUM(T.TotalIng) FROM Transmision AS T WHERE T.NFideicomiso = CO.IdProyecto AND T.Estatus IN( \'ACTIVO\',\'DISPERSADA\')),2)) AS "TOTAL TRANSMITIDO",
             CONCAT("$",FORMAT((SELECT SUM(D.Montofideicomitente) FROM Dispersion AS D WHERE D.NFideicomiso = CO.IdProyecto AND D.Estatus LIKE \'ACTIVO\'),2)) AS "TOTAL FIDEICOMITENTE EXTERNO",
             CONCAT("$",FORMAT((SELECT SUM(D.MontofideicomitenteRabina) FROM Dispersion AS D WHERE D.NFideicomiso = CO.IdProyecto AND D.Estatus LIKE \'ACTIVO\'),2)) AS "TOTAL FIDEICOMITENTE RABINA",
             CONCAT("$",FORMAT((SELECT SUM(D.MontoFideicomiso) FROM Dispersion AS D WHERE D.NFideicomiso = CO.IdProyecto AND D.Estatus LIKE \'ACTIVO\'),2)) AS "TOTAL FIDEICOMISO",
             CONCAT("$",FORMAT((SELECT SUM(D.CantidadDispersada) FROM Dispersion AS D WHERE D.NFideicomiso = CO.IdProyecto  AND D.Estatus LIKE \'ACTIVO\'),2)) AS "TOTAL DISPERSADO",
            

            (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CO.IdProyecto  AND D.Estatus LIKE \'ACTIVO\') AS DISPERSADAS,
            (SELECT count(*) FROM Dispersion AS D  WHERE D.NFideicomiso = CO.IdProyecto AND D.ID in (SELECT PXD.IdDispersion FROM PagosXDispersion AS PXD)  AND D.Estatus LIKE \'ACTIVO\') AS PAGADAS,
            
             CONCAT("$",FORMAT((SELECT SUM((
             CASE 
             WHEN D.DiferenciaAFavor IS NOT NULL AND D.DiferenciaAFavor > 0 THEN  (D.CantidadDispersada)  
             WHEN D.DiferenciaEnContra IS NOT NULL AND D.DiferenciaEnContra > 0 THEN (D.CantidadDispersada) 
             ELSE D.CantidadDispersada END)) 
                FROM  Dispersion AS D INNER JOIN Transmision AS T 
                ON D.IdTransmision = T.ID 
                WHERE D.Estatus LIKE \'ACTIVO\' AND T.Estatus LIKE \'DISPERSADA\' 
                AND D.NFideicomiso = CO.IdProyecto),2)) AS "TOTAL DISPERSADO",
                
            CONCAT("$",FORMAT((SELECT SUM(D.CantidadDispersada) 
            FROM  Dispersion AS D INNER JOIN Transmision AS T 
            ON D.IdTransmision = T.ID 
            WHERE D.Estatus LIKE \'ACTIVO\' AND T.Estatus LIKE \'DISPERSADA\' 
            AND D.NFideicomiso = CO.IdProyecto AND 
            (SELECT COUNT(PXD.ID) FROM PagosXDispersion AS PXD WHERE PXD.IdDispersion = D.ID) > 0),2)) AS "TOTAL PAGADO",
              
             CONCAT("$",FORMAT((SELECT SUM(IT.Incremento) FROM rabinaco_corporativo.incrementoterreno AS IT INNER JOIN Transmision AS T 
            ON IT.IdTransmision = T.ID INNER JOIN Dispersion AS D ON IT.IdDispersion = D.ID
            WHERE IT.Proyecto = P.ID AND D.Estatus LIKE \'ACTIVO\' AND T.Estatus LIKE \'DISPERSADA\' 
            AND IT.Estatus NOT IN(\'INACTIVO\',\'CANCELADO\',\'CANCELADA\')),2)) AS INCREMENTO,

            CONCAT("$",FORMAT((SELECT SUM((CASE WHEN (SELECT COUNT(*) FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\')) > 0 THEN 
        (SELECT IT.CantidadDispersada   FROM incrementoterreno AS IT WHERE IT.IdTransmision = T.ID AND IT.Estatus NOT IN(\'INACTIVO\', \'CANCELADO\') ORDER BY IT.ID DESC LIMIT 1)  
        ELSE D.CantidadDispersada END)) 
            FROM  Dispersion AS D INNER JOIN Transmision AS T 
            ON D.IdTransmision = T.ID 
            WHERE D.Estatus LIKE \'ACTIVO\' AND T.Estatus LIKE \'DISPERSADA\' 
            AND D.NFideicomiso = CO.IdProyecto AND 
            (SELECT COUNT(PXD.ID) FROM PagosXDispersion AS PXD WHERE PXD.IdDispersion = D.ID) > 0) +  
            
            (SELECT SUM(IT.Incremento) FROM rabinaco_corporativo.incrementoterreno AS IT INNER JOIN Transmision AS T ON IT.IdTransmision = T.ID 
            INNER JOIN Dispersion AS D ON IT.IdDispersion = D.ID
            WHERE IT.Proyecto = P.ID AND IT.Estatus NOT IN(\'INACTIVO\',\'CANCELADO\',\'CANCELADA\')),2)) as "TOTAL PAGADO ACTUALIZADO",
             
            
            (P.NumeroViviendas - (SELECT count(*) FROM Dispersion AS D  WHERE D.NFideicomiso = CO.IdProyecto AND D.ID in (SELECT PXD.IdDispersion FROM PagosXDispersion AS PXD)  AND D.Estatus LIKE \'ACTIVO\')) AS "NO VENDIDAS"', false);
        $this->db->from('CoordenadasXDesarrollo AS CO');
        $this->db->join('Proyectos AS P', 'CO.IdProyecto = P.ID');
        $this->db->where('CO.IdProyecto  AND P.Modelo IN (2,3)', NULL, false);
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

    function getCoordenadasXProyecto($ID) {
        $this->db->select('C.ID, C.IdProyecto,  C.Latitud, C.Longitud, C.Estatus, C.Registro', false);
        $this->db->from('CoordenadasXDesarrollo AS C');
        $this->db->where('C.IdProyecto', $ID);
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

    function getPolygonoXDesarrollo($ID) {
        try {
            $this->db->select('PXD.ID, PXD.IdProyecto AS IDPXD,  PXD.Latitud AS LATITUD, PXD.Longitud AS LONGITUD, PXD.Estatus ESTATUS, PXD.Registro, PXD.StrokeColor AS STROKECOLOR, PXD.BackGroundColor AS BACKGROUNDCOLOR', false);
            $this->db->from('PolygonoXDesarrollo AS PXD');
            $this->db->where('PXD.IdProyecto', $ID);
            $this->db->order_by('PXD.ID', 'ASC');
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

    function getPolygonoXCasa($ID) {
        try {
            $this->db->select('CXD.ID, CXD.IdProyecto, CXD.Manzana, CXD.Lote, '
                    . 'CXD.ManzanaT, CXD.LoteT, CXD.Numero,CXD.NumeroT, '
                    . 'CXD.Modelo, CXD.ModeloT, CXD.Tipo,CXD.TipoT, CXD.Latitud, '
                    . 'CXD.Longitud, CXD.Registro,(SELECT T.Adquirente FROM Transmision AS T 
                                WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT 
                                AND T.Viviendas = CXD.NumeroT AND T.Estatus  IN(\'ACTIVO\',\'DISPERSADA\',\'TRANSMITIDA\') LIMIT 1) AS Adquiriente,
                        (CASE
                            WHEN
                                    (SELECT count(*) FROM Transmision AS T 
                                    WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'DISPERSADA\' LIMIT 1) > 0
                                    AND (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT LIMIT 1) > 0 
                                    AND (SELECT count(*) FROM PagosXDispersion AS PXD INNER JOIN Dispersion AS D ON PXD.IdDispersion = D.ID WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT LIMIT 1) > 0 
                                    AND (SELECT count(*) FROM Entregadas AS E WHERE E.IdCoordenadaDesarrolloD = CXD.ID GROUP BY E.IdCoordenadaDesarrolloD) > 0 
                                THEN "imagenes/entregada.png"
                            WHEN
                                (SELECT count(*) FROM Transmision AS T 
                                   WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'DISPERSADA\' LIMIT 1) > 0
                                   AND (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT LIMIT 1) > 0 
                                   AND (SELECT count(*) FROM PagosXDispersion AS PXD INNER JOIN Dispersion AS D ON PXD.IdDispersion = D.ID WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT  LIMIT 1) > 0 
                            THEN "imagenes/pagada.png"
                            WHEN
                                (SELECT count(*) FROM Transmision AS T 
                                   WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'DISPERSADA\' LIMIT 1) > 0
                                   AND (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT LIMIT 1) > 0 
                            THEN "imagenes/dispersion.png"
                            WHEN 
                                (SELECT count(*) FROM Transmision AS T 
                                   WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'ACTIVO\'  LIMIT 1) > 0 
                            THEN "imagenes/transmision.png"
                            ELSE "imagenes/activo.png"
                            END) AS Icono, 
                        (CASE
                            WHEN
                                (SELECT count(*) FROM Transmision AS T 
                                WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'DISPERSADA\' LIMIT 1) > 0
                                AND (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT LIMIT 1) > 0 
                                AND (SELECT count(*) FROM PagosXDispersion AS PXD INNER JOIN Dispersion AS D ON PXD.IdDispersion = D.ID WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT LIMIT 1) > 0 
                                AND (SELECT count(*) FROM Entregadas AS E WHERE E.IdCoordenadaDesarrolloD = CXD.ID GROUP BY E.IdCoordenadaDesarrolloD) > 0 
                            THEN "<span class=\"label label-king-blue\">ENTREGADA</span>"
                            WHEN
                                (SELECT count(*) FROM Transmision AS T 
                                WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'DISPERSADA\'  LIMIT 1) > 0
                                AND (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT  LIMIT 1) > 0 
                                AND (SELECT count(*) FROM PagosXDispersion AS PXD INNER JOIN Dispersion AS D ON PXD.IdDispersion = D.ID WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT  LIMIT 1) > 0 
                            THEN "<span class=\"label label-king-blue\">DISPERSION CON PAGOS</span>"
                            WHEN
                                (SELECT count(*) FROM Transmision AS T 
                                WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'DISPERSADA\'  LIMIT 1) > 0
                                AND (SELECT count(*) FROM Dispersion AS D WHERE D.NFideicomiso = CXD.IdProyecto AND D.Manzana = CXD.ManzanaT AND D.Lotes = CXD.LoteT AND D.Viviendas = CXD.NumeroT  LIMIT 1) > 0 
                            THEN "<span class=\"label label-emerald\">DISPERSADA</span>"
                            WHEN 
                                (SELECT count(*) FROM Transmision AS T 
                                WHERE T.NFideicomiso = CXD.IdProyecto AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus LIKE \'ACTIVO\'  LIMIT 1) > 0 
                            THEN "<span class=\"label label-warning\">TRANSMITIDA</span>"
                            ELSE "SIN VENDER"
                        END) AS Estatus,  
                        
                        CONCAT("$",FORMAT((SELECT CASE WHEN T.PrecioVentaN > 0 THEN T.PrecioVentaN ELSE "$0.0" END FROM Transmision AS T WHERE T.NFideicomiso = CXD.IdProyecto 
                        AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus IN(\'ACTIVO\',\'DISPERSADA\',\'TRANSMITIDA\') LIMIT 1),2),"") AS "PRECIO DE VENTA",

                        CONCAT("$",FORMAT((SELECT T.PagoTerreno FROM Transmision AS T WHERE T.NFideicomiso = CXD.IdProyecto 
                        AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus IN(\'ACTIVO\',\'DISPERSADA\',\'TRANSMITIDA\') LIMIT 1),2),"") AS "PAGO POR TERRENO", 
                        
                        CONCAT("$",FORMAT((SELECT T.PagoRendimientos FROM Transmision AS T WHERE T.NFideicomiso = CXD.IdProyecto 
                        AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus  IN(\'ACTIVO\',\'DISPERSADA\',\'TRANSMITIDA\') LIMIT 1),2),"") AS "PAGO POR RENDIMIENTOS", 
                        
                        CONCAT("<span class=\"label label-indigo\">$",FORMAT((SELECT T.TotalIng FROM Transmision AS T WHERE T.NFideicomiso = CXD.IdProyecto 
                        AND T.Manzana = CXD.ManzanaT AND T.Lotes = CXD.LoteT AND T.Viviendas = CXD.NumeroT AND T.Estatus  IN(\'ACTIVO\',\'DISPERSADA\',\'TRANSMITIDA\') LIMIT 1),2),"</span>") AS "TOTAL DE INGRESO"
                        ', false);
            $this->db->from('CoordenadasXDesarrolloD AS CXD');
            $this->db->where('CXD.IdProyecto', $ID);
            $this->db->where_in('CXD.Estatus', array('ACTIVO'));
            $this->db->order_by('CXD.ID', 'ASC');
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

    function getRecordByID($ID) {
        try {
            $this->db->select('CXD.ID, (SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = CXD.IdProyecto) AS IdProyecto, CXD.Manzana, CXD.Lote, CXD.ManzanaT, CXD.LoteT, CXD.Numero,CXD.NumeroT, CXD.Modelo, CXD.ModeloT, CXD.Tipo,CXD.TipoT, CXD.Latitud, CXD.Longitud, CXD.Estatus, CXD.Registro, CXD.Icono', false);
            $this->db->from('CoordenadasXDesarrolloD AS CXD');
            $this->db->where('CXD.ID', $ID);
            $this->db->order_by('CXD.ID', 'ASC');
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

    function getDesarrollos() {
        $this->db->select('CO.IdProyecto AS ID, P.Proyecto AS PROYECTO, CO.Latitud, CO.Longitud, CO.Icono AS ICONO', false);
        $this->db->from('CoordenadasXDesarrollo AS CO');
        $this->db->join('Proyectos AS P', 'CO.IdProyecto = P.ID');
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

    function getDesarrollosXModelo() {
        $this->db->select('P.ID ID, P.Proyecto AS PROYECTO', false);
        $this->db->from('Proyectos AS P');
        $this->db->where_in('P.Modelo', array(1, 2, 3));
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

    function getDesarrollosSCO() {
        $this->db->select('P.ID ID, P.Proyecto AS PROYECTO', false);
        $this->db->from('Proyectos AS P');
        $this->db->where('P.ID IN (SELECT CXD.IdProyecto FROM CoordenadasXDesarrollo AS CXD)', null, false);
        $this->db->where_in('P.Modelo', array(1, 2, 3));
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

    function getModelosXNumeroDeVivienda($ID, $M, $L) {
        $this->db->select('PV.Id AS ID,PV.Modelo AS MODELO', false);
        $this->db->from('ProyectosViviendas AS PV');
        $this->db->where('PV.Desarrollo', $ID);
        $this->db->where('PV.Manzana', $M);
        $this->db->where('PV.Lotes', $L);
        $this->db->where('PV.Modelo <>\'\' AND PV.Modelo <> \'-\'', NULL, FALSE);
        $this->db->order_by('PV.Modelo', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//       print $str = $this->db->last_query();
        return $data;
    }

    function getTiposDeVivienda($ID, $M, $L, $NV, $MD) {
        $this->db->select('DISTINCT PV.Id AS ID,UPPER(PV.Prototipo) AS TIPO', false);
        $this->db->from('ProyectosViviendas AS PV');
        $this->db->where('PV.Desarrollo', $ID);
        $this->db->where('PV.Manzana', $M);
        $this->db->where('PV.Lotes', $L);
        $this->db->where('PV.Id LIKE \'%' . $MD . '%\'');
        $this->db->where('PV.NumViviendas LIKE \'%' . $NV . '%\'');
        $this->db->group_by('PV.Prototipo');
        $this->db->order_by('PV.Prototipo', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
//       print $str = $this->db->last_query();
        return $data;
    }

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

    function getRecordsMaps($ID) {
        $this->db->select('*', false);
        $this->db->from('Mapas AS M');
        $this->db->where('M.Proyecto', $ID);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        $data = $query->result();
        return $data;
    }

    function getCountRows($ID) {
        $this->db->select('*', false);
        $this->db->from('Mapas AS M');
        $this->db->where('M.Proyecto', $ID);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        $data = $query->result();
        return $data;
    }

    
    function onEntregar($ID) {
        try {
            $query = $this->db->query("CALL SP_ONENTREGAR(".$ID.",'". strtoupper(Date('d/m/Y h:i:s a'))."','".strtoupper(Date('d/m/Y'))."','".strtoupper(Date('h:i:s a'))."','".strtoupper(Date('d/m/Y h:i:s a'))."','ENTREGADA')");
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
