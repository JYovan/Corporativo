<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class TramiteFactura_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('seug', TRUE);
    }

    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETFACTURAS()");
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

    function getRecordsPagados() {
        try {
            $query = $this->db->query("CALL SP_GETRECORDSPAGADOS()");
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

    function getRecordsCancelados() {
        try {
            $query = $this->db->query("CALL SP_GETRECORDSCANCELADOS()");
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

    function getRecordByID($ID) {
        try {
            $query = $this->db->query("CALL SP_FACTURASBYID(" . $ID . ")");
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

    function getRecordsByDate($FechaInicial, $FechaTermino, $FPago, $Proveedor) {
        try {
            $query = $this->db->query("CALL SP_GETRECORDSBYDATE(" . $FechaInicial . "," . $$FechaTermino . "," . $Proveedor . ")");
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

    function getRecordsReport($ID) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA,  DIR.NombreC AS EMPRESA, '
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", PROY.Proyecto AS PROYECTO, '
                . 'tfac.NumeroDeContrato AS "NUMERO DE CONTRATO", '
                . 'PRO.Proveedor AS PROVEEDOR, (SELECT CONCAT(U.nombre," ",U.apaterno," ",U.amaterno) FROM usuarios AS U WHERE U.Id = DIR.id_responsable) AS RESPONSABLE,'
                . 'tfac.NumeroFactura AS "FACTURA", tfac.Importe AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . ' concat(IE.Nombre," ",IE.apaterno," ", IE.amaterno)AS RECEPTOR, tfac.Estatus AS ESTATUS', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where('DIR.ID', $ID);
        $this->db->group_by('DIR.ID');
        $this->db->order_by('DIR.ID ', 'desc');
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

    function getRecordsReportBySuppplier($ID, $IDPRO) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.FechaFactura AS FECHA, tfac.Hora AS HORA,  DIR.NombreC AS EMPRESA, DIR.Calle AS CALLE, DIR.No AS NUMEROEXT, DIR.Colonia AS COLONIA, DIR.CP,(SELECT C.dsc_ciudad FROM Ciudad AS C WHERE C.id_ciudad = DIR.Ciudad) AS CIUDAD, (SELECT E.dsc_estado FROM Estado AS E WHERE E.id_estado = DIR.Estado) AS ESTADO,'
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", PROY.Proyecto AS PROYECTO, '
                . 'tfac.NumeroDeContrato AS "NUMERO DE CONTRATO", '
                . 'PRO.Proveedor AS PROVEEDOR, '
                . 'tfac.NumeroFactura AS "FACTURA", CONCAT("$",FORMAT(tfac.Importe, 2)) AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . ' concat(IE.Nombre," ",IE.apaterno," ", IE.amaterno)AS RECEPTOR, tfac.Estatus AS ESTATUS', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where('DIR.ID', $ID);
        $this->db->where('PRO.ID', $IDPRO);
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
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

    function getRecordsRowsReport($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.Folio AS ID, tfac.NumeroFactura AS FOLIO, PRO.Proveedor AS PROVEEDOR,hdmxo.MontoXPagar AS IMPORTE');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('ObservacionesXTramiteFactura AS oxtf', 'tfac.IdTramiteFactura = oxtf.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS otf', 'oxtf.IdObservacion = otf.IdObservacionTF');
        $this->db->join('HistorialDeMontosXObservacion AS hdmxo', 'otf.IdObservacionTF = hdmxo.IdObservacionTF');

        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
        $this->db->where('hdmxo.FormaDePago !=', 'NOTA DE CREDITO');
        $this->db->where('otf.Estatus', 'EN ELABORACIÓN DE FORMA DE PAGO');

        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);

        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('DIR.ID ', 'desc');
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

    function getRecordsRowsReportOBRA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.Folio AS ID, tfac.NumeroFactura AS FOLIO, PRO.Proveedor AS PROVEEDOR,hdmxo.MontoXPagar AS IMPORTE');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('ObservacionesXTramiteFactura AS oxtf', 'tfac.IdTramiteFactura = oxtf.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS otf', 'oxtf.IdObservacion = otf.IdObservacionTF');
        $this->db->join('HistorialDeMontosXObservacion AS hdmxo', 'otf.IdObservacionTF = hdmxo.IdObservacionTF');
        $this->db->where_in('tfac.ModeloNegocio', array('ADOP', 'CDIP', 'CDIPCDO', 'CDIEF'));
        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
        $this->db->where('hdmxo.FormaDePago !=', 'NOTA DE CREDITO');
        $this->db->where('otf.Estatus', 'EN ELABORACIÓN DE FORMA DE PAGO');

        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);

        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('DIR.ID ', 'desc');
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

    function getRecordsRowsReportMATERIAL($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.Folio AS ID, tfac.NumeroFactura AS FOLIO, PRO.Proveedor AS PROVEEDOR,hdmxo.MontoXPagar AS IMPORTE');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('ObservacionesXTramiteFactura AS oxtf', 'tfac.IdTramiteFactura = oxtf.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS otf', 'oxtf.IdObservacion = otf.IdObservacionTF');
        $this->db->join('HistorialDeMontosXObservacion AS hdmxo', 'otf.IdObservacionTF = hdmxo.IdObservacionTF');
        $this->db->where('tfac.ModeloNegocio', 'CDM');
        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
        $this->db->where('hdmxo.FormaDePago !=', 'NOTA DE CREDITO');
        $this->db->where('otf.Estatus', 'EN ELABORACIÓN DE FORMA DE PAGO');

        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);

        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('DIR.ID ', 'desc');
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

    function getRecordsRowsReportSA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('REPLACE(tfac.Folio,"-","/") AS ID, tfac.NumeroFactura AS FOLIO, PRO.Proveedor AS PROVEEDOR,tfac.Importe AS IMPORTE', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');

        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
//        $this->db->where('hdmxo.FormaDePago !=', 'NOTA DE CREDITO');
//        $this->db->where('otf.Estatus', 'EN ELABORACIÓN DE FORMA DE PAGO');

        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') '
                . ' GROUP BY  tfac.Folio, PRO.Proveedor  '
                . 'ORDER BY  tfac.Folio, PRO.Proveedor, str_to_date(tfac.FechaFactura, \'%d/%m/%Y\'), tfac.NumeroFactura, tfac.Folio ASC', NULL, false);
//        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion'); 
//        $this->db->order_by('tfac.Folio', 'ASC');
//        $this->db->order_by('tfac.NumeroFactura', 'ASC');
//        $this->db->order_by('PRO.Proveedor', 'ASC');
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

    function getRecordsRowsReportSAOBRA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.Folio AS ID, tfac.NumeroFactura AS FOLIO, PRO.Proveedor AS PROVEEDOR,tfac.Importe AS IMPORTE');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->where_in('tfac.ModeloNegocio', array('ADOP', 'CDIP', 'CDIPCDO', 'CDIEF'));
        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
//        $this->db->where('hdmxo.FormaDePago !=', 'NOTA DE CREDITO');
//        $this->db->where('otf.Estatus', 'EN ELABORACIÓN DE FORMA DE PAGO');

        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);
//        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('DIR.ID ', 'desc');
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

    function getRecordsRowsReportSAMATERIAL($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.Folio AS ID, tfac.NumeroFactura AS FOLIO, PRO.Proveedor AS PROVEEDOR,tfac.Importe AS IMPORTE');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->where('tfac.ModeloNegocio', 'CDM');
        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
//        $this->db->where('hdmxo.FormaDePago !=', 'NOTA DE CREDITO');
//        $this->db->where('otf.Estatus', 'EN ELABORACIÓN DE FORMA DE PAGO');

        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);
//        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('DIR.ID ', 'desc');
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

    function getRecordsRowsReportCR($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO, tfac.NumeroFactura AS NF,DATE_FORMAT(str_to_date(tfac.FechaFactura,\'%d/%m/%Y\') ,\'%d/%m/%Y\')AS FECHA, tfac.Importe AS IMPORTE,tfac.Observacion AS OBSERVACION', false);
        $this->db->from('TramiteFactura AS tfac');
        if ($ID != '') {
            $this->db->where('tfac.Empresa', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('tfac.Proveedor', $IDPRO);
        }
        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC, tfac.NumeroFactura ASC', NULL, false);
//        $this->db->order_by('tfac.FechaFactura','ASC');
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

    function getRecordsRowsReportCRMATERIAL($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO, tfac.NumeroFactura AS NF, tfac.FechaFactura AS FECHA, tfac.Importe AS IMPORTE,tfac.Observacion AS OBSERVACION');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->where('tfac.ModeloNegocio', 'CDM');
        if ($ID != '') {
            $this->db->where('tfac.Empresa', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('tfac.Proveedor', $IDPRO);
        }
        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);
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

    function getRecordsRowsReportCROBRA($ID, $FECHAINICIO, $FECHATERMINO, $IDPRO) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO, tfac.NumeroFactura AS NF, tfac.FechaFactura AS FECHA, tfac.Importe AS IMPORTE,tfac.Observacion AS OBSERVACION');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->where_in('tfac.ModeloNegocio', array('ADOP', 'CDIP', 'CDIPCDO', 'CDIEF'));
        if ($ID != '') {
            $this->db->where('tfac.Empresa', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('tfac.Proveedor', $IDPRO);
        }
        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where('tfac.Estatus NOT IN(\'CANCELADA\', \'CANCELADO\') ORDER BY  str_to_date(tfac.FechaFactura, \'%d/%m/%Y\') ASC', NULL, false);
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

    function getRecordsFacturaTramiteDePago() {
        $this->db->select('tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, DIR.NombreC AS EMPRESA, '
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", PROY.Proyecto AS PROYECTO, '
                . 'PRO.Proveedor AS PROVEEDOR, '
                . 'tfac.NumeroFactura AS "FACTURA", tfac.Importe AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . 'tfac.Estatus AS ESTATUS');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        var_dump($str);
        return $data;
    }

    function getRecordsByID($ID) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA, tfac.Empresa AS EMPRESA, '
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", tfac.Actividad AS PROYECTO, '
                . 'tfac.NumeroDeContrato AS "NUMERO DE CONTRATO", tfac.Proveedor AS PROVEEDOR, '
                . 'tfac.NumeroFactura AS "NUMERO DE FACTURA", tfac.Importe AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . 'tfac.Receptor AS RECEPTOR, tfac.Estatus AS ESTATUS, tfac.FechaFactura AS "FECHA FACTURA", tfac.rtImagen AS RTIMAGEN, tfac.Saldo AS SALDO, tfac.ImportePagado AS "IMPORTE PAGADO"');
        $this->db->from('TramiteFactura AS tfac');
//        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where('tfac.IdTramiteFactura', $ID);
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        var_dump($str);
        return $data;
    }

    function getFacturaByID($ID) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA, (SELECT D.RazonS FROM Directorio AS D WHERE D.ID = tfac.Empresa) AS EMPRESA, '
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", tfac.Actividad AS PROYECTO, '
                . 'tfac.NumeroDeContrato AS "NUMERO DE CONTRATO", (SELECT PRO.Proveedor FROM Proveedores AS PRO WHERE PRO.ID = tfac.Proveedor) AS PROVEEDOR, '
                . 'tfac.NumeroFactura AS "NUMERO DE FACTURA", tfac.Importe AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . 'tfac.Receptor AS RECEPTOR, tfac.Estatus AS ESTATUS, tfac.FechaFactura AS "FECHA FACTURA", tfac.rtImagen AS RTIMAGEN, tfac.Saldo AS SALDO, tfac.ImportePagado AS "IMPORTE PAGADO"');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where('tfac.IdTramiteFactura', $ID);
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        var_dump($str);
        return $data;
    }

    function getAvanceRapidoXFacturaID($ID) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA, (SELECT D.RazonS FROM Directorio AS D WHERE D.ID = tfac.Empresa) AS EMPRESA, tfac.Empresa AS EMPRESAID,'
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", tfac.Actividad AS PROYECTO, '
                . 'tfac.NumeroDeContrato AS "NUMERO DE CONTRATO", (SELECT PRO.Proveedor FROM Proveedores AS PRO WHERE PRO.ID = tfac.Proveedor) AS PROVEEDOR, tfac.Proveedor AS PROVEEDORID, '
                . 'tfac.NumeroFactura AS "NUMERO DE FACTURA", tfac.Importe AS IMPORTE, CONCAT("$",FORMAT(tfac.Importe,2)) AS FORMATO_IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . 'tfac.Receptor AS RECEPTOR, tfac.Estatus AS ESTATUS, tfac.FechaFactura AS "FECHA FACTURA", tfac.rtImagen AS RTIMAGEN, tfac.Saldo AS SALDO, tfac.ImportePagado AS "IMPORTE PAGADO"', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where('tfac.IdTramiteFactura', $ID);
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
//        var_dump($str);
        return $data;
    }

    function getRecordsHistoryByID($ID) {
        $this->db->select('OTF.IdObservacionTF AS ID,OTF.Observacion AS OBSERVACIÓN, OTF.TituloObservacion AS "TITULO DE LA OBSERVACIÓN", OTF.SeguimientoObservacion AS "SEGUIMIENTO", OTF.Estatus');
        $this->db->from('TramiteFactura AS TF');
        $this->db->join('ObservacionesXTramiteFactura AS OXT', 'TF.IdTramiteFactura = OXT.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS OTF', 'OXT.IdObservacion = OTF.IdObservacionTF');
        $this->db->where('TF.IdTramiteFactura', $ID);
        $this->db->order_by('OTF.IdObservacionTF', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        var_dump($str);
        return $data;
    }

    function getRecordsByIDReport($ID) {
        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Folio AS FOLIO,  '
                . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA, DIR.NombreC AS EMPRESA, '
                . 'tfac.ModeloNegocio AS "ACTIVIDAD", PROY.Proyecto AS PROYECTO, '
                . 'tfac.NumeroDeContrato AS "NUMERO DE CONTRATO", PRO.Proveedor AS PROVEEDOR, '
                . 'tfac.NumeroFactura AS "NUMERO DE FACTURA", tfac.Importe AS IMPORTE, '
                . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                . 'IE.Nombre AS RECEPTOR, tfac.Estatus AS ESTATUS');
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');

        $this->db->where('tfac.IdTramiteFactura', $ID);
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        var_dump($str);
        return $data;
    }

    function getHistoryRecordsByID($ID) {

        /*
         * SELECT 
         * hdmxo.Importe AS ImporteRestanteXPagar, hdmxo.MontoXPagar AS ImportePagado, 
         * tf.Importe AS ImporteFactura 
         * FROM TramiteFactura tf INNER JOIN ObservacionesXTramiteFactura oxtf 
          ON tf.IdTramiteFactura = oxtf.IdTramiteFactura
          INNER JOIN ObservacionesTF otf ON oxtf.IdObservacion = otf.IdObservacionTF
          INNER JOIN HistorialDeMontosXObservacion hdmxo ON otf.IdObservacionTF = hdmxo.IdObservacionTF
          WHERE tf.IdTramiteFactura = 1
         */
        $this->db->select('hdmxo.Importe AS ImporteRestanteXPagar');
        $this->db->from('TramiteFactura AS tf');
        $this->db->join('ObservacionesXTramiteFactura AS oxtf', 'tf.IdTramiteFactura = oxtf.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS otf', 'oxtf.IdObservacion = otf.IdObservacionTF');
        $this->db->join('HistorialDeMontosXObservacion AS hdmxo', 'otf.IdObservacionTF = hdmxo.IdObservacionTF');

        $this->db->where('tf.IdTramiteFactura', $ID);
        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('hdmxo.IdHistorialDeMontosXObservacion', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        var_dump($str);
        return $data;
    }

    function getHistoryByID($ID) {

        /*
         * SELECT 
         * hdmxo.Importe AS ImporteRestanteXPagar, hdmxo.MontoXPagar AS ImportePagado, 
         * tf.Importe AS ImporteFactura 
         * FROM TramiteFactura tf INNER JOIN ObservacionesXTramiteFactura oxtf 
          ON tf.IdTramiteFactura = oxtf.IdTramiteFactura
          INNER JOIN ObservacionesTF otf ON oxtf.IdObservacion = otf.IdObservacionTF
          INNER JOIN HistorialDeMontosXObservacion hdmxo ON otf.IdObservacionTF = hdmxo.IdObservacionTF
          WHERE tf.IdTramiteFactura = 1
         */
        $this->db->select("hdmxo.IdHistorialDeMontosXObservacion AS ID, hdmxo.Fecha AS 'FECHA DE REALIZACION', CONCAT(\"$\",FORMAT(hdmxo.Importe,2)) AS 'IMPORTE RESTANTE', CONCAT(\"$\",FORMAT(hdmxo.MontoXPagar,2)) AS MONTO, hdmxo.FormaDePago AS 'FORMA DE PAGO'", false);
        $this->db->from('TramiteFactura AS tf');
        $this->db->join('ObservacionesXTramiteFactura AS oxtf', 'tf.IdTramiteFactura = oxtf.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS otf', 'oxtf.IdObservacion = otf.IdObservacionTF');
        $this->db->join('HistorialDeMontosXObservacion AS hdmxo', 'otf.IdObservacionTF = hdmxo.IdObservacionTF');

        $this->db->where('tf.IdTramiteFactura', $ID);
        $this->db->group_by('hdmxo.IdHistorialDeMontosXObservacion');
        $this->db->order_by('hdmxo.IdHistorialDeMontosXObservacion', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getHistoryRecordsByRecordID($ID) {
        $this->db->select('OTF.IdObservacionTF AS ID, OTF.TituloObservacion AS OBSERVACION, OTF.SeguimientoObservacion AS SEGUIMIENTO, OTF.Estatus AS ESTATUS', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('ObservacionesXTramiteFactura AS OXTF', 'tfac.IdTramiteFactura = OXTF.IdTramiteFactura');
        $this->db->join('ObservacionesTF AS OTF', 'OXTF.IdObservacion = OTF.IdObservacionTF');
        $this->db->where('tfac.IdTramiteFactura', $ID);
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
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

    function onDeleteRecord($tbl, $ID) {
        try {
            $this->db->where('IdEntregaVivienda', $ID);
            $this->db->update($tbl, array('Estatus' => 'INACTIVO'));
            return 1;
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
                    print $str = $this->db->last_query();
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

    function getEmpleados() {
        $where = "";
        $this->db->select('*');
        $this->db->from('InformacionEmpleados');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getProveedores() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Proveedores AS PRO');
        $this->db->order_by('PRO.Proveedor', 'ASC');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
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

    function getActividades() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ActividadesTF');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getProveedoresByID($ID) {
        $this->db->select('*');
        $this->db->from('Proveedores');
        $this->db->where("ID", $ID);
        $query = $this->db->get();
        return $query->result();
    }

    function getEmpresasByID($ID) {
        $this->db->select('*');
        $this->db->from('Directorio');
        $this->db->where("ID", $ID);
        $query = $this->db->get();
        return $query->result();
    }

    function getProyectos() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Proyectos');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * FUNCIONES DE REPORTES POR :
     * -EMPRESAS
     * -EMPRESA
     */

    function getRecordsByBusiness($ID, $IDPRO, $FECHAINICIO, $FECHATERMINO) {

        $this->db->select('CONCAT("<span class=\"label label-primary\">",tfac.IdTramiteFactura,"</span>") AS ID, tfac.NumeroFactura AS "FACTURA", 
    
    CONCAT("<span class=\"label label-emerald\">$",FORMAT(tfac.Importe,2),"</span>") AS IMPORTE,
    
    (CASE 
    WHEN tfac.ImportePagado = 0.00 THEN
        CONCAT("<span class=\"label label-info\">$",FORMAT(tfac.ImportePagado,2),"</span>")  
    WHEN tfac.ImportePagado > 0 THEN
        CONCAT("<span class=\"label label-danger\">$",FORMAT(tfac.ImportePagado,2),"</span>") 
    END) AS "MONTO PAGADO",
    
    (CASE
    WHEN (tfac.Importe - tfac.ImportePagado) = 0.00 THEN
        CONCAT("<span class=\"label label-info\">$",FORMAT((tfac.Importe - tfac.ImportePagado),2),"</span>")  
    WHEN (tfac.Importe - tfac.ImportePagado) > 0.00 THEN 
        CONCAT("<span class=\"label label-danger\">$",FORMAT((tfac.Importe - tfac.ImportePagado),2),"</span>")  
    END) AS "SALDO A PAGAR", 
 
    tfac.Estatus AS ESTATUS, tfac.Folio AS FOLIO, DIR.NombreC AS EMPRESA, 
(CASE 
WHEN tfac.Actividad IS NULL OR tfac.Actividad = "" THEN "SIN PROYECTO"
ELSE 
(SELECT PROY.Proyecto FROM Proyectos AS PROY WHERE PROY.ID = tfac.Actividad) 
END) AS PROYECTO, 
tfac.NumeroDeContrato AS "CONTRATO", 
PRO.Proveedor AS PROVEEDOR, tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", 
tfac.Observacion AS OBSERVACION, concat(IE.Nombre, " ", IE.apaterno, " ", IE.amaterno)AS RECEPTOR, 
CONCAT(tfac.Fecha, " ", tfac.Hora) AS "FECHA Y HORA"', false);
//        $this->db->select('tfac.IdTramiteFactura AS ID, tfac.NumeroFactura AS "FACTURA", tfac.Importe AS IMPORTE,
// tfac.ImportePagado AS "MONTO PAGADO",(tfac.Importe - tfac.ImportePagado) "SALDO A PAGAR", tfac.Estatus AS ESTATUS, 
//tfac.Folio AS FOLIO, DIR.NombreC AS EMPRESA, PROY.Proyecto AS PROYECTO, tfac.NumeroDeContrato AS "CONTRATO", 
//PRO.Proveedor AS PROVEEDOR, tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", 
//tfac.Observacion AS OBSERVACION, concat(IE.Nombre, " ", IE.apaterno, " ", IE.amaterno)AS RECEPTOR, 
//CONCAT(tfac.Fecha, " ", tfac.Hora) AS "FECHA Y HORA"', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
//        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        if ($ID != '') {
            $this->db->where('DIR.ID', $ID);
        }
        if ($IDPRO != '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
        if ($FECHAINICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($FECHATERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $FECHATERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    /*
     * CANCELACION
     */

    function onCancelTF() {
        try {
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getSaldosGenerales() {

//        $this->db->select('CONCAT("<span class=\"label label-primary\">",tfac.IdTramiteFactura,"</span>") AS ID, tfac.NumeroFactura AS "FACTURA", 
//    
//    CONCAT("<span class=\"label label-emerald\">$",FORMAT(tfac.Importe,2),"</span>") AS IMPORTE,
//    
//    (CASE 
//    WHEN tfac.ImportePagado = 0.00 THEN
//        CONCAT("<span class=\"label label-info\">$",FORMAT(tfac.ImportePagado,2),"</span>")  
//    WHEN tfac.ImportePagado > 0 THEN
//        CONCAT("<span class=\"label label-danger\">$",FORMAT(tfac.ImportePagado,2),"</span>") 
//    END) AS "MONTO PAGADO",
//    
//    (CASE
//    WHEN (tfac.Importe - tfac.ImportePagado) = 0.00 THEN
//        CONCAT("<span class=\"label label-info\">$",FORMAT((tfac.Importe - tfac.ImportePagado),2),"</span>")  
//    WHEN (tfac.Importe - tfac.ImportePagado) > 0.00 THEN 
//        CONCAT("<span class=\"label label-danger\">$",FORMAT((tfac.Importe - tfac.ImportePagado),2),"</span>")  
//    END) AS "SALDO A PAGAR", 
// 
//    tfac.Estatus AS ESTATUS, tfac.Folio AS FOLIO, DIR.NombreC AS EMPRESA, 
//(CASE 
//WHEN tfac.Actividad IS NULL OR tfac.Actividad = "" THEN "SIN PROYECTO"
//ELSE 
//(SELECT PROY.Proyecto FROM Proyectos AS PROY WHERE PROY.ID = tfac.Actividad) 
//END) AS PROYECTO, 
//tfac.NumeroDeContrato AS "CONTRATO", 
//PRO.Proveedor AS PROVEEDOR, tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", 
//tfac.Observacion AS OBSERVACION, concat(IE.Nombre, " ", IE.apaterno, " ", IE.amaterno)AS RECEPTOR, 
//CONCAT(tfac.Fecha, " ", tfac.Hora) AS "FECHA Y HORA"', false);
        $this->db->select('DIR.NombreC AS EMPRESA,tfac.NumeroDeContrato AS "CONTRATO", tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA",  tfac.NumeroFactura AS "FACTURA",
tfac.Importe AS IMPORTE,tfac.ImportePagado AS "MONTO PAGADO", (tfac.Importe - tfac.ImportePagado) "SALDO A PAGAR",PRO.Proveedor AS PROVEEDOR', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->order_by('tfac.IdTramiteFactura', 'ASC');
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

    function getSaldosGeneralesByEmpresaAndProveedor($IDPRO, $IDEMPRESA, $INICIO, $TERMINO) {
        $this->db->select('DIR.NombreC AS EMPRESA,tfac.NumeroDeContrato AS "CONTRATO", tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA",  tfac.NumeroFactura AS "FACTURA",
        tfac.Importe AS IMPORTE,tfac.ImportePagado AS "MONTO PAGADO",
    CASE 
        WHEN (SELECT SUM(NXF.MontoF) FROM NotasDeCreditoXFacturas AS NXF WHERE NXF.IdFactura = tfac.IdTramiteFactura) > 0 THEN 
            (SELECT SUM(NXF.MontoF) FROM NotasDeCreditoXFacturas AS NXF WHERE NXF.IdFactura = tfac.IdTramiteFactura)
        ELSE 0 END "NOTA DE CREDITO",
    CASE 
        WHEN (tfac.Saldo > 0) AND tfac.Estatus = "PAGADA" AND (tfac.Importe - tfac.ImportePagado) = 0 THEN 0
        WHEN (tfac.Saldo > 0) AND tfac.Estatus <> "PAGADA"  AND tfac.Estatus <> "PARCIALMENTE PAGADA" THEN tfac.Saldo
        WHEN (tfac.Importe - tfac.ImportePagado) > 0 AND tfac.Estatus = "PARCIALMENTE PAGADA" THEN (tfac.Importe - tfac.ImportePagado)
        END "SALDO A PAGAR",
        tfac.SALDO, tfac.FechaFactura AS "FECHA FACTURA", PRO.Proveedor AS PROVEEDOR', false);
        $this->db->from('TramiteFactura AS tfac');
        $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
        $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
        $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
        if (isset($IDEMPRESA) && $IDEMPRESA !== '') {
            $this->db->where('DIR.ID', $IDEMPRESA);
        }
        if (isset($IDPRO) && $IDPRO !== '') {
            $this->db->where('PRO.ID', $IDPRO);
        }
        if ($INICIO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') >= str_to_date(\'' . $INICIO . '\', \'%d/%m/%Y\') ');
        }
        if ($TERMINO != '') {
            $this->db->where('str_to_date(tfac.Fecha, \'%d/%m/%Y\') <= str_to_date(\'' . $TERMINO . '\', \'%d/%m/%Y\') ');
        }
        $this->db->where_not_in('tfac.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->order_by('tfac.IdTramiteFactura', 'ASC');
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

    function onBeforeRegisterCheckFactura($ID, $PROVEEDOR) {
        $this->db->select('COUNT(*) AS NFACTURA');
        $this->db->from('TramiteFactura AS F');
        $this->db->where("F.NumeroFactura", $ID);
        $this->db->where("F.Proveedor", $PROVEEDOR);
        $this->db->where_not_in('F.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        return $query->result();
    }

    function getNotasDeCreditoXFacturas() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",NDC.IdNotasDeCredito,"</span>") AS ID,'
                . 'CASE '
                . 'WHEN NDC.rDocumento IS NULL THEN "<span class=\"fa fa-times fa-lg\"></span>"'
                . 'ELSE  "<span class=\"fa fa-check fa-lg\"></span>"'
                . ' END ADJUNTO,'
                . ' DIR.RazonS AS EMPRESA, CONCAT("<span class=\"label label-danger\">",TF.NumeroFactura,"</span>") AS FACTURA, '
                . 'CONCAT("<span class=\"label label-warning\">$",FORMAT((TF.Importe + NDC.MontoNC),2),"</span>") AS "IMPORTE",TF.FechaFactura AS "FECHA DE LA FACTURA", '
                . 'PRO.Proveedor, NDC.Folio AS "NOTA DE CREDITO", NDC.Concepto AS CONCEPTO, CONCAT("<span class=\"label label-indigo\">$",FORMAT(NDC.MontoNC,2),"</span>") AS "MONTO APLICADO", '
                . 'CONCAT("<span class=\"label label-emerald\">$",FORMAT(TF.Importe,2),"</span>") AS "IMPORTE FINAL",NDC.Estatus AS ESTATUS', false);
        $this->db->from('TramiteFactura AS TF');
        $this->db->join('Directorio AS DIR', 'TF.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'TF.Proveedor = PRO.ID');
        $this->db->join('NotasDeCreditoXFacturas AS NXF', 'TF.IdTramiteFactura = NXF.IdFactura');
        $this->db->join('NotasDeCredito AS NDC', 'NXF.IdNotaDeCredito = NDC.IdNotasDeCredito');
        $this->db->where_not_in('TF.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where_not_in('NDC.Estatus', array('CANCELADA', 'CANCELADO'));
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        $data = $query->result();
        return $data;
    }

    function getNotasDeCreditoByID($ID) {
        $this->db->select('NDC.IdNotasDeCredito,PRO.Proveedor, DIR.NombreC,NDC.Folio, NDC.Concepto, NDC.MontoNC,NDC.Observaciones, TF.Folio AS "FOLIO FACTURA",NDC.rDocumento,TF.NumeroFactura', false);
        $this->db->from('TramiteFactura AS TF');
        $this->db->join('Directorio AS DIR', 'TF.Empresa = DIR.ID');
        $this->db->join('Proveedores AS PRO', 'TF.Proveedor = PRO.ID');
        $this->db->join('NotasDeCreditoXFacturas AS NXF', 'TF.IdTramiteFactura = NXF.IdFactura');
        $this->db->join('NotasDeCredito AS NDC', 'NXF.IdNotaDeCredito = NDC.IdNotasDeCredito');
        $this->db->where_not_in('TF.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where_not_in('NDC.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where('NDC.IdNotasDeCredito', $ID);
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getInformacionAdicional() {
        $this->db->select('COUNT(*) AS TOTAL, TF.Estatus', false);
        $this->db->from('TramiteFactura AS TF');
        $this->db->group_by('TF.Estatus');
        $this->db->order_by('TF.Estatus', 'ASC');
        $query = $this->db->get();
        $str = $this->db->last_query();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getCuentas() {
        $this->db->select('C.ID, CONCAT("TITULAR : ",C.Titular,", BANCO: ",C.Banco,", CTA: ",C.NoCuenta) AS CUENTA', false);
        $this->db->from('Cuentas AS C');
        $this->db->order_by('C.Titular', 'ASC');
        $query = $this->db->get();
        $str = $this->db->last_query();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getUltimoFolioXProveedor($ID) {
        $this->db->select('TF.IdTramiteFactura, TF.Folio', false);
        $this->db->from('tramitefactura AS TF');
        $this->db->where('TF.Proveedor', $ID);
        $ignore = array('INACTIVO', 'CANCELADA','CANCELADO');
        $this->db->where_not_in('TF.Estatus', $ignore);
        $this->db->limit(1);
        $this->db->order_by('TF.IdTramiteFactura', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

}
