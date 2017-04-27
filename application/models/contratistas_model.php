<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class contratistas_model extends CI_Model {

    public function __construct() {
        parent::__construct(); 
    }

    function getContratistasRConcepto($data) {
        $this->db->insert('Rconceptos', $data);
        $str = $this->db->last_query();
//        print $str;
        $query = $this->db->query('SELECT LAST_INSERT_ID()');
        $row = $query->row_array();
        $LastIdInserted = $row['LAST_INSERT_ID()'];
        return $LastIdInserted;
    }

    function getConceptos($ID) {
        try {
            $this->db->select('COCO.id_concepto AS ID, COCO.dsc_concepto AS CONCEPTO');
            $this->db->from('ContratistasConceptos AS COCO');
            $this->db->join('Rconceptos AS RCO', 'COCO.id_concepto = RCO.ConceptoP');
            $this->db->where('RCO.Ndesarrollo', $ID);
            $this->db->group_by('COCO.id_concepto');
            $this->db->order_by('COCO.dsc_concepto', 'ASC');
            $query = $this->db->get();
            $dtm = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            return $dtm;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getContratistasDes($ID) {
        try {
            $this->db->select('CC.id_concepto AS ID, CC.dsc_concepto AS CONCEPTO');
            $this->db->from('Rconceptos AS RC');
            $this->db->join('ContratistasConceptos AS CC', 'RC.ConceptoP = CC.id_concepto');
            $this->db->where('RC.Ndesarrollo', $ID);
            $this->db->group_by('CC.id_concepto');
            $this->db->order_by('CC.dsc_concepto', 'ASC');
            $query = $this->db->get();
            $dtm = $query->result();
            return $dtm;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getContratistasConcepto($ID, $CONCEPTO) {
        try {
            $this->db->select('PRO.ID, PRO.Proveedor AS PROVEEDOR');
            $this->db->from('Rconceptos AS RC');
            $this->db->join('ContratistasConceptos AS CC', 'RC.ConceptoP = CC.id_concepto');
            $this->db->join('Proveedores AS PRO', 'RC.Contratistas = PRO.ID');
            $this->db->where('RC.Ndesarrollo', $ID);
            $this->db->where('RC.ConceptoP', $CONCEPTO);
            $this->db->where('PRO.Actividad', 5);
            $this->db->group_by('PRO.ID');
            $this->db->order_by('PRO.Proveedor', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            $dtm = $query->result();
            return $dtm;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getReporteGlobalDeDestajoTR($ID, $CONCEPTO) {
        try {
            $this->db->select('PRO.Proveedor AS PROVEEDOR, HDDPC.FechaPago AS FECHA, (RCO.TotalTrabajos - HDDPC.NumeroDeTrabajosPagados) AS ANTERIOR, HDDPC.NumeroDeTrabajosPagados AS ESTA,  (`HDDPC`.`NumeroDeTrabajosPagados`+(RCO.TotalTrabajos - HDDPC.NumeroDeTrabajosPagados)) AS ACUMULADO');
            $this->db->from('Rconceptos AS RCO');
            $this->db->join('HistorialDePagosPorConcepto AS HDDPC', 'RCO.ID = HDDPC.IdRconcepto');
            $this->db->join('Proveedores AS PRO', 'HDDPC.IdContratistasPagos = PRO.ID');
            $this->db->where('RCO.Ndesarrollo', $ID);
            $this->db->where('RCO.ConceptoP', $CONCEPTO);
            $this->db->where('PRO.Actividad', 5);
            $this->db->order_by('RCO.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            $dtm = $query->result();
            return $dtm;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getContratistaPagos(
    $ID, $Ndesarrollo, $ConceptoP, $Contratistas, $Precio, $TotalTrabajos, $MontoTrabajos, $TrabajosRealizados, $MontoTrabajosRealizados, $TrabajosPendientes, $MontoTrabajosPendientes, $TrabajosaPagar, $PrecioPagar, $MontoPago, $FechaPago, $FormaPago, $Comprobante, $Inicio, $Termino, $Paga, $Observaciones
    ) {
        $data = array(
            'IDRconcepto' => $ID,
            'Ndesarrollo' => $Ndesarrollo,
            'ConceptoP' => $ConceptoP,
            'Contratistas' => $Contratistas,
            'Precio' => $Precio,
            'TotalTrabajos' => $TotalTrabajos,
            'MontoTrabajos' => $MontoTrabajos,
            'TrabajosRealizados' => $TrabajosRealizados,
            'MontoTrabajosRealizados' => $MontoTrabajosRealizados,
            'TrabajosPendientes' => $TrabajosPendientes,
            'MontoTrabajosPendientes' => $MontoTrabajosPendientes,
            'TrabajosaPagar' => $TrabajosaPagar,
            'PrecioPagar' => $PrecioPagar,
            'MontoPago' => $MontoPago,
            'FechaPago' => $FechaPago,
            'FormaPago' => $FormaPago,
            'Comprobante' => $Comprobante,
            'Inicio' => $Inicio,
            'Termino' => $Termino,
            'Paga' => $Paga,
            'Observaciones' => $Observaciones
        );
        $this->db->insert('ContratistasPagos', $data);
        $datos = array(
            'TrabajosRealizados' => $TrabajosRealizados,
            'MontoTrabajosRealizados' => $MontoTrabajosRealizados,
            'TrabajosPagar' => $TrabajosaPagar,
            'PrecioaPagar' => $PrecioPagar,
            'MontoaPagar' => $MontoPago,
            'FechaPago' => $FechaPago,
            'FormaPago' => $FormaPago,
            'Comprobante' => $Comprobante,
            'Inicio' => $Inicio,
            'Termino' => $Termino,
            'Pago' => $Paga,
            'Observaciones' => $Observaciones
        );
        $this->db->where('ID', $ID);
        $this->db->update('Rconceptos', $datos);
        return 1;
    }

    function getProyectos() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Proyectos');
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistasConceptos() {
        $where = "";
        $this->db->select('CC.id_concepto AS ID, CC.dsc_concepto AS CONCEPTO');
        $this->db->from('ContratistasConceptos AS CC');
        $this->db->order_by('CC.dsc_concepto', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistas() {
        $this->db->select('PRO.ID, PRO.Proveedor AS PROVEEDOR');
        $this->db->from('Proveedores AS PRO');
        $this->db->where('PRO.Actividad', 5);
        $this->db->order_by('PRO.Proveedor', 'ASC');
//            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getFormasDePago() {
        $this->db->select('FP.id_FormaPago AS ID, FP.dsc_FormaPago AS "FORMA PAGO"');
        $this->db->from('FormaPago AS FP');
        $this->db->order_by('FP.dsc_FormaPago', 'ASC');
//            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getTipoComprobante() {
        $this->db->select('TC.id_TipoComprobante AS ID, TC.dsc_TipoComprobante AS "TIPO COMPROBANTE"');
        $this->db->from('TipoComprobante AS TC');
        $this->db->order_by('TC.dsc_TipoComprobante', 'ASC');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getConceptosDePago() {
        $this->db->select('RCO.ID, RCO.Estatus AS ESTATUS, PROY.Proyecto AS PROYECTO,PRO.Proveedor AS CONTRATISTA, '
                . 'CC.dsc_concepto AS CONCEPTO, CONCAT("$ ",FORMAT(RCO.Precio,2)) AS PRECIO, '
                . 'FORMAT(RCO.TotalTrabajos,2) AS "# DE TRABAJOS", CONCAT("$ ",FORMAT(RCO.Precio * RCO.TotalTrabajos,2)) AS "MONTO POR TRABAJOS", '
                . 'FORMAT(CASE WHEN HDPPC.NumeroDeTrabajosPagados IS NULL THEN 0 ELSE FORMAT(HDPPC.NumeroDeTrabajosPagados,2) END,2) AS "# DE TRABAJOS REALIZADOS",CONCAT("$ ",FORMAT(CASE WHEN (HDPPC.NumeroDeTrabajosPagados * HDPPC.PrecioPago) IS NOT NULL THEN (HDPPC.NumeroDeTrabajosPagados * HDPPC.PrecioPago) ELSE 0 END,2)) AS "MONTO POR TRABAJOS REALIZADOS",'
                . 'RCO.Inicio AS "INICIO DE TRABAJOS", RCO.Termino AS "TERMINO DE TRABAJOS", RCO.Registro AS REGISTRO', false);
//        $this->db->select('RCO.ID, RCO.Estatus AS ESTATUS, PROY.Proyecto AS PROYECTO, PRO.Proveedor AS CONTRATISTA, CC.dsc_concepto AS CONCEPTO, 
//RCO.Precio AS PRECIO, RCO.TotalTrabajos AS "# DE TRABAJOS", RCO.Precio * RCO.TotalTrabajos AS "MONTO POR TRABAJOS", 
//CASE WHEN HDPPC.NumeroDeTrabajosPagados IS NULL THEN 0 ELSE HDPPC.NumeroDeTrabajosPagados END AS "# DE TRABAJOS REALIZADOS",
// (HDPPC.NumeroDeTrabajosPagados * HDPPC.PrecioPago) AS "MONTO POR TRABAJOS REALIZADOS", 
// RCO.Inicio AS "INICIO DE TRABAJOS", RCO.Termino AS "TERMINO DE TRABAJOS", RCO.Registro AS REGISTRO', false);
        $this->db->from('Rconceptos AS RCO');
        $this->db->join('Proyectos AS PROY', 'RCO.Ndesarrollo = PROY.ID');
        $this->db->join('ContratistasConceptos AS CC', 'RCO.ConceptoP = CC.id_concepto');
        $this->db->join('Proveedores AS PRO', 'RCO.Contratistas = PRO.ID');
        $this->db->join('HistorialDePagosPorConcepto AS HDPPC', 'HDPPC.IdRconcepto = RCO.ID', 'left');
        $this->db->where('PRO.Actividad', 5);
//        $this->db->order_by('RCO.ID', 'DESC');
//            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getConceptosDePagoByID($ID) {
        $this->db->select('RCO.ID, RCO.Estatus AS ESTATUS, PROY.ID AS  IDPROYECTO, PROY.Proyecto AS  PROYECTO,PRO.ID AS IDCONTRATISTA, PRO.Proveedor AS CONTRATISTA, CC.id_concepto AS  IDCONCEPTO, CC.dsc_concepto AS CONCEPTO, RCO.Precio AS PRECIO, RCO.TotalTrabajos AS "# DE TRABAJOS", RCO.MontoTrabajos AS "MONTO POR TRABAJOS", RCO.Inicio AS "INICIO DE TRABAJOS", RCO.Termino AS "TERMINO DE TRABAJOS", RCO.Registro AS REGISTRO,(CASE WHEN RCO.MontoTrabajosRealizados IS NULL THEN 0 WHEN RCO.MontoTrabajosRealizados IS NOT NULL THEN RCO.MontoTrabajosRealizados END) AS MontoTrabajosRealizados , (CASE WHEN RCO.TrabajosRealizados IS NULL THEN 0 WHEN RCO.TrabajosRealizados IS NOT NULL THEN RCO.TrabajosRealizados END) AS TrabajosRealizados', false);
        $this->db->from('Rconceptos AS RCO');
        $this->db->join('Proyectos AS PROY', 'RCO.Ndesarrollo = PROY.ID');
        $this->db->join('ContratistasConceptos AS CC', 'RCO.ConceptoP = CC.id_concepto');
        $this->db->join('Proveedores AS PRO', 'RCO.Contratistas = PRO.ID');
        $this->db->where('PRO.Actividad', 5);
        $this->db->where('RCO.ID', $ID);
        $this->db->order_by('RCO.ID', 'DESC');
//            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
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

    function getHistorialDePagos() {
        $this->db->select('HDPPC.ID, HDPPC.Inicio AS "INICIO DE TRABAJO", HDPPC.Termino AS "TERMINO DE TRABAJO", PRO.Proveedor AS CONTRATISTA, FP.dsc_FormaPago AS "FORMA DE PAGO", TC.dsc_TipoComprobante AS "TIPO DE COMPROBANTE", CC.dsc_concepto AS CONCEPTO, HDPPC.NumeroDeTrabajosPagados AS "TRABAJOS REALIZADOS", CONCAT("$",FORMAT(HDPPC.PrecioPago,2)) AS "PRECIO PAGADO", CONCAT("$",FORMAT((HDPPC.NumeroDeTrabajosPagados * HDPPC.PrecioPago),2)) AS IMPORTE, HDPPC.Observacion AS OBSERVACIONES, HDPPC.Registro AS "FECHA DEL MOVIMIENTO", CONCAT(USR.nombre, " ", USR.apaterno, " ", USR.amaterno) AS "MOVIMIENTO REALIZADO POR"', false);
        $this->db->from('HistorialDePagosPorConcepto AS HDPPC');
        $this->db->join('Rconceptos AS RCO', 'HDPPC.IdRconcepto = RCO.ID');
        $this->db->join('ContratistasConceptos AS CC', 'RCO.ConceptoP = CC.id_concepto');
        $this->db->join('Proveedores AS PRO', 'HDPPC.IdContratistasPagos = PRO.ID');
        $this->db->join('FormaPago AS FP', 'HDPPC.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('usuarios AS USR', 'HDPPC.IdUsuario = USR.Id');
        $this->db->join('TipoComprobante AS TC', 'HDPPC.IdTipoComprobante = TC.id_TipoComprobante');
        $this->db->order_by('HDPPC.ID', 'DESC');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getHistorialDePagosByID($ID) {
        $this->db->select('HDPPC.ID, HDPPC.Inicio AS "INICIO DE TRABAJO", HDPPC.Termino AS "TERMINO DE TRABAJO", PRO.Proveedor AS CONTRATISTA, FP.dsc_FormaPago AS "FORMA DE PAGO", TC.dsc_TipoComprobante AS "TIPO DE COMPROBANTE", CC.dsc_concepto AS CONCEPTO, HDPPC.NumeroDeTrabajosPagados AS "TRABAJOS REALIZADOS", HDPPC.PrecioPago AS "PRECIO PAGADO", (HDPPC.NumeroDeTrabajosPagados * HDPPC.PrecioPago) AS IMPORTE, HDPPC.Observacion AS OBSERVACIONES, HDPPC.Registro AS "FECHA DEL MOVIMIENTO", CONCAT(USR.nombre, " ", USR.apaterno, " ", USR.amaterno) AS "MOVIMIENTO REALIZADO POR"', false);
        $this->db->from('HistorialDePagosPorConcepto AS HDPPC');
        $this->db->join('Rconceptos AS RCO', 'HDPPC.IdRconcepto = RCO.ID');
        $this->db->join('ContratistasConceptos AS CC', 'RCO.ConceptoP = CC.id_concepto');
        $this->db->join('Proveedores AS PRO', 'HDPPC.IdContratistasPagos = PRO.ID');
        $this->db->join('FormaPago AS FP', 'HDPPC.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('usuarios AS USR', 'HDPPC.IdUsuario = USR.Id');
        $this->db->join('TipoComprobante AS TC', 'HDPPC.IdTipoComprobante = TC.id_TipoComprobante');
        $this->db->where('HDPPC.IdRconcepto', $ID);
        $this->db->order_by('HDPPC.ID', 'DESC');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

    function getReporteConceptoDestajo($ID, $FECHAINICIO, $FECHATERMINO) {
        try {
            $this->db->select('PRO.Proveedor AS CONTRATISTA,CP.Inicio AS "FECHA DEL TRABAJO REALIZADO",'
                    . ' CP.TrabajosRealizados AS "# TRABAJOS REALIZADOS",CP.MontoTrabajosRealizados AS "MONTO PAGADO POR EL TRABAJO REALIZADO", '
                    . 'CP.TrabajosaPagar AS "TRABAJOS A PAGAR", CP.MontoPago AS "MONTO PAGADO POR ULTIMOS TRABAJOS",'
                    . '(CP.TrabajosPendientes - CP.TrabajosaPagar) AS "TRABAJOS A REALIZAR", '
                    . '((CP.TrabajosPendientes - CP.TrabajosaPagar) * CP.PrecioPagar) AS "MONTO DE TRABAJOS POR REALIZAR"');
            $this->db->from('ContratistasPagos AS CP');
            $this->db->join('Proveedores AS PRO', 'CP.Contratistas = PRO.ID');
            $this->db->join('ContratistasConceptos AS CC', 'CP.ConceptoP = CC.id_concepto');
            $this->db->where('CC.id_concepto', $ID);
            $this->db->where('STR_TO_DATE(CP.Inicio, \'%d/%m/%Y\')  >= STR_TO_DATE(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\')');
            $this->db->where('STR_TO_DATE(CP.Termino , \'%d/%m/%Y\') <= STR_TO_DATE(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\')');

            $this->db->where('PRO.Actividad', 5);
            $this->db->order_by('CP.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            $dtm = $query->result();
            return $dtm;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getConceptosEnUso() {
        $this->db->select('CC.id_concepto AS ID, CC.dsc_concepto AS DESCRIPCION');
        $this->db->from('ContratistasPagos AS CP');
        $this->db->join('Proveedores AS PRO', 'CP.Contratistas = PRO.ID');
        $this->db->join('ContratistasConceptos AS CC', 'CP.ConceptoP = CC.id_concepto');
        $this->db->order_by('CC.dsc_concepto', 'ASC');
//            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $query->result();
    }

}
