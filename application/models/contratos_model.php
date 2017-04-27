<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class contratos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETCONTRATOS()");
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
//    function getRecords() {
////        $this->db->select('CDO.ID,CDO.ContratoDeObra AS CONTRATO', false);
//        $this->db->select('CONCAT("<span class=\"label label-primary\">",CDO.ID, "</span>") AS ID, '
//                . '(SELECT PRO.Proyecto FROM Proyectos AS PRO WHERE PRO.ID = CDO.IdProyecto) AS PROYECTO,'
//                . '(CASE '
//                . 'WHEN CDO.IdEtapa IS NULL THEN "NO APLICA" '
//                . 'WHEN CDO.IdEtapa = 0 THEN "NO APLICA" '
//                . 'WHEN CDO.IdEtapa = 1 THEN "ETAPA 1" '
//                . 'WHEN CDO.IdEtapa = 2 THEN "ETAPA 2" '
//                . 'WHEN CDO.IdEtapa = 3 THEN "ETAPA 3" '
//                . 'WHEN CDO.IdEtapa = 4 THEN "ETAPA 4" '
//                . 'WHEN CDO.IdEtapa = 5 THEN "ETAPA 5" '
//                . 'WHEN CDO.IdEtapa = 6 THEN "ETAPA 6" '
//                . 'WHEN CDO.IdEtapa = 7 THEN "ETAPA 7" '
//                . 'WHEN CDO.IdEtapa = 8 THEN "ETAPA 8" '
//                . 'WHEN CDO.IdEtapa = 9 THEN "ETAPA 9" '
//                . 'WHEN CDO.IdEtapa = 10 THEN "ETAPA 10" '
//                . 'END) '
//                . 'AS ETAPA,'
//                . ''
//                . 'CDO.ContratoDeObra AS CONTRATO,'
//                . '(SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = CDO.Contratante) AS CONTRATANTE,'
//                . '(SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = CDO.Contratista) AS CONTRATISTA, '
//                . 'CDO.NumeroTestimonioLC AS "# TESTIMONIO NOTARIAL", CDO.FechaOtorgamientoLC "FECHA OTORGAMIENTO CONTRATANTE", '
//                . 'CDO.NotarioLC AS "NOTARIO CONTRATANTE", CDO.NumeroNotarioLC AS "# NOTARIO CONTRATANTE",'
//                . 'CDO.PartidoAdscripcionLC AS "PARTIDO DE ADSCRICIÓN CONTRATANTE", CDO.NumeroTestimonioLCO AS "# TESTIMONIO", '
//                . 'CDO.FechaOtorgamientoLCO "FECHA OTORGAMIENTO CONTRATISTA", CDO.NotarioLCO AS "NOTARIO CONTRATISTA", '
//                . 'CDO.NumeroNotarioLCO AS "# NOTARIO CONTRATISTA", CDO.PartidoAdscripcionLCO AS "PARTIDO DE ADSCRICIÓN CONTRATISTA", CDO.NumeroAnteIMSS "# IMMS", '
//                . 'CDO.LugarDelTrabajo AS "LUGAR DE TRABAJO",(SELECT CIU.dsc_ciudad FROM Ciudad AS CIU WHERE CIU.id = CDO.Ciudad) AS CIUDAD, '
//                . '(SELECT EST.dsc_estado FROM Estado AS EST WHERE EST.id_estado =  CDO.Estado) AS ESTADO, CDO.DescripcionObra DESCRIPCION, '
//                . 'CDO.TotalViviendas AS "# VIVIENDAS", CDO.FechaInicio AS "FECHA INICIO", '
//                . 'CDO.FechaTermino AS "FECHA TERMINO", CDO.Observaciones, CONCAT("$",FORMAT(CDO.SubTotalContrato,2)) AS "SUBTOTAL",CONCAT("$",FORMAT(CDO.IVA,2)) AS "I.V.A",'
//                . 'CONCAT("$",FORMAT(CDO.TotalContrato,2)) AS "TOTAL", CDO.TotalEnLetra AS "TOTAL EN LETRA", CDO.PorcentajeAnticipo AS "PORCENTAJE DEL ANTICIPO", '
//                . 'CDO.MontoAnticipo AS "MONTO", CDO.FechaEntrgaAnticipo AS "FECHA DEL ANTICIPO", CDO.PenalizacionXDia AS "PENALIZACIÓN POR DÍA",'
//                . '(SELECT CIU.dsc_ciudad FROM Ciudad AS CIU WHERE CIU.id =CDO.CiudadPartido) AS "CIUDAD DEL PARTIDO", '
//                . '(SELECT EST.dsc_estado FROM Estado AS EST WHERE EST.id_estado = CDO.EstadoPartido) AS "ESTADO DEL PARTIDO", '
//                . '(SELECT CIU.dsc_ciudad FROM Ciudad AS CIU WHERE CIU.id = CDO.CiudadFirma) AS "CIUDAD DE LA FIRMA", '
//                . '(SELECT EST.dsc_estado FROM Estado AS EST WHERE EST.id_estado = CDO.EstadoFirma) AS "ESTADO DE LA FIRMA", CDO.DiaFirma AS "FECHA FIRMA", '
//                . 'CDO.ContratanteFirma AS "CONTRATANTE QUE FIRMA",CDO.ContratistaFirma AS "CONTRATISTA QUE FIRMA", '
//                . 'CDO.TestigoContratanteFirma AS "TESTIGO CONTRATANTE (FIRMA)", CDO.TestigoContratistaFirma AS "TESTIGO CONTRATISTA (FIRMA)", '
//                . 'CDO.RepresentanteContratante AS "REPRESENTANTE CONTRATANTE", CDO.RepresentanteContratista AS "REPRESENTANTE CONTRATISTA", '
//                . 'FORMAT((SELECT CASE WHEN SUM(CI.Cantidad)  IS NULL THEN 0 ELSE SUM(CI.Cantidad)  END
//FROM CobranzaIngresos AS CI INNER JOIN Cobranza AS C ON C.ID = CI.IdCobranza
//WHERE C.IdContrato = CDO.ID  AND  CI.Estatus NOT IN (\'INACTIVO\',\'CANCELADO\',\'CANCELADA\') AND
//C.Estatus NOT IN (\'INACTIVO\',\'CANCELADO\',\'CANCELADA\') ),2)	 AS PAGADO, 
//FORMAT(CDO.TotalContrato,2) "TOTAL DEL CONTRATO", 
//FORMAT((CDO.TotalContrato - (SELECT CASE WHEN SUM(CI.Cantidad)  IS NULL THEN 0 ELSE SUM(CI.Cantidad)  END
//FROM CobranzaIngresos AS CI INNER JOIN Cobranza AS C ON C.ID = CI.IdCobranza
//WHERE C.IdContrato = CDO.ID  AND  CI.Estatus NOT IN (\'INACTIVO\',\'CANCELADO\',\'CANCELADA\') AND
//C.Estatus NOT IN (\'INACTIVO\',\'CANCELADO\',\'CANCELADA\') )	),2) AS "TOTAL RESTANTE",'
//                . 'CONCAT("$",FORMAT(CDO.Saldo,2)) AS SALDO, '
//                . 'CDO.Registro, (CASE WHEN CDO.Estatus = \'ACTIVO\' THEN "SIN PAGOS" ELSE CDO.Estatus END) AS ESTATUS', false);
//        $this->db->from('ContratosDeObra AS CDO');
//        $this->db->where_not_in('CDO.Estatus', array('CANCELADA', 'CANCELADO'));
//        $this->db->order_by('CDO.ID', 'DESC');
//        $query = $this->db->get();
//        /*
//         * FOR DEBUG ONLY
//         */
//        $str = $this->db->last_query();
//        print $str;
//        $data = $query->result();
//        return $data;
//    }

    function getContratoByID($ID) {
        $this->db->select('*', false);
        $this->db->from('ContratosDeObra AS CDO');
        $this->db->where_not_in('CDO.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where('CDO.ID', $ID);
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getContratoDByID($ID) {
        $this->db->select('*', false);
        $this->db->from('ContratosDeObraD AS CDOD');
        $this->db->where_not_in('CDO.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where('CDOD.IdContratoDeObra', $ID);
        $this->db->order_by('CDOD.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getContratantes() {
        $this->db->select('DIR.ID, DIR.RazonS AS RAZON', false);
        $this->db->from('Directorio AS DIR');
        $this->db->order_by('DIR.RazonS', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getTestigosContratista() {
        $this->db->select('U.Id AS ID, CONCAT(U.nombre, " ", U.apaterno," ", U.amaterno) AS TESTIGO', false);
        $this->db->from('usuarios AS U');
        $this->db->order_by('U.nombre', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getContratistas() {
        $this->db->select('DIR.ID, DIR.RazonS AS RAZON', false);
        $this->db->from('Directorio AS DIR');
        $this->db->order_by('DIR.RazonS', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getCiudades() {
        $this->db->select('C.id AS ID, CONCAT(C.dsc_ciudad, " (", (SELECT E.dsc_estado FROM Estado AS E WHERE E.id_estado =C.id_estado), ")") AS CIUDAD', false);
        $this->db->from('Ciudad AS C');
        $this->db->order_by('C.dsc_ciudad', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getEstados() {
        $this->db->select('E.id_estado AS ID, E.dsc_estado AS ESTADOS', false);
        $this->db->from('Estado AS E');
        $this->db->order_by('E.dsc_estado', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getDesarrollos() {
        $this->db->select('P.ID, P.Proyecto AS PROYECTOS', false);
        $this->db->from('Proyectos AS P');
        $this->db->where('P.Modelo', 2);
        $this->db->where('P.ID IN(SELECT DISTINCT (PM.Proyecto) FROM ProyectosManzanas AS PM WHERE PM.Proyecto <> 0)');
        $this->db->order_by('P.Proyecto', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
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
        $query = $this->db->get();
//       print $str = $this->db->last_query();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getTipos() {
        $this->db->select('VP.ID, VP.Prototipo AS TIPO', false);
        $this->db->from('ViviendasPrototipos AS VP');
        $this->db->order_by('VP.Prototipo', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
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

    function getContratosDeObraDByID($ID) {
        $this->db->select('CDOD.ID, CDOD.IdContratoDeObra, CDOD.Desarrollo, '
                . '(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = CDOD.Desarrollo) AS PROYECTO, '
                . '(SELECT PM.Manzana FROM ProyectosManzanas AS PM WHERE PM.ID=CDOD.Manzana AND PM.Proyecto = CDOD.Desarrollo) AS ManzanaT,'
                . ' CDOD.Manzana AS Manzana,  CDOD.Lote, '
                . 'CDOD.NumeroVivienda, CDOD.NumeroViviendaT, CDOD.ModeloVivienda, CDOD.ModeloViviendaT, '
                . 'CDOD.TipoVivienda, CDOD.TipoViviendaT, CDOD.Registro, CDOD.Estatus', false);
        $this->db->from('ContratosDeObraD AS CDOD');
        $this->db->where('CDOD.IdContratoDeObra', $ID);
        $this->db->where_not_in('CDOD.Estatus', array('INACTIVO','CANCELADO','ELIMINADA'));
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }
    

    function getContratosDeObraDByIDE($ID) {
        $this->db->select('CDOD.ID, CDOD.IdContratoDeObra, CDOD.Desarrollo, '
                . '(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = CDOD.Desarrollo) AS PROYECTO, '
                . '(SELECT PM.Manzana FROM ProyectosManzanas AS PM WHERE PM.ID=CDOD.Manzana AND PM.Proyecto = CDOD.Desarrollo) AS ManzanaT,'
                . ' CDOD.Manzana AS Manzana,  CDOD.Lote, '
                . 'CDOD.NumeroVivienda, CDOD.NumeroViviendaT, CDOD.ModeloVivienda, CDOD.ModeloViviendaT, '
                . 'CDOD.TipoVivienda, CDOD.TipoViviendaT, CDOD.Registro, CDOD.Estatus', false);
        $this->db->from('ContratosDeObraD AS CDOD');
        $this->db->where('CDOD.IdContratoDeObra', $ID); 
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getContratoDeObraDByID($ID) {
        $this->db->select('CDOD.ID, CDOD.IdContratoDeObra, CDOD.Desarrollo, '
                . '(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = CDOD.Desarrollo) AS PROYECTO, '
                . '(SELECT PM.Manzana FROM ProyectosManzanas AS PM WHERE PM.ID=CDOD.Manzana AND PM.Proyecto = CDOD.Desarrollo) AS ManzanaT,'
                . ' CDOD.Manzana AS Manzana,  CDOD.Lote, '
                . 'CDOD.NumeroVivienda, CDOD.NumeroViviendaT, CDOD.ModeloVivienda, CDOD.ModeloViviendaT, '
                . 'CDOD.TipoVivienda, CDOD.TipoViviendaT, CDOD.Registro, CDOD.Estatus', false);
        $this->db->from('ContratosDeObraD AS CDOD');
        $this->db->where('CDOD.ID', $ID);
        $this->db->where_not_in('CDOD.Estatus', array('INACTIVO','CANCELADO','ELIMINADA'));
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
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
}
