<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cobranza_model extends CI_Model {

    function __construct() {
        parent::__construct();
    } 
    
    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZA()");
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

    function getHistorialDeIngresos() {
        try {
            $query = $this->db->query("CALL SP_GETHISTORIALDEINGRESOS()");
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

    function getContratosConSaldo() {
        try {
            $query = $this->db->query("CALL SP_GETCONTRATOSCONSALDOS()");
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

    function getHistorialDeIngresosAcumuladosXEmpresaXClienteXFecha($EMPRESA, $EMPRESA_CLIENTE, $CONTRATO) {
        try {
            $query = $this->db->query("CALL SP_GETHISTORIALDEINGRESOSACUMULADOSXEMPRESAXCLIENTEXFECHA()");
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

    function getCobranzaAcumuladaXEmpresaXClienteXProyectoXEtapa($EMPRESA, $EMPRESA_CLIENTE, $PROYECTO, $ETAPA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESAXCLIENTEXPROYECTOXETAPA($EMPRESA, $EMPRESA_CLIENTE, $PROYECTO,$ETAPA)");
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

    function getCobranzaAcumuladaXClienteXProyectoXEtapa($EMPRESA_CLIENTE, $PROYECTO, $ETAPA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXCLIENTEXPROYECTOXETAPA($EMPRESA_CLIENTE, $PROYECTO,$ETAPA)");
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

    function getCobranzaAcumuladaXEmpresaXClienteXProyecto($EMPRESA, $EMPRESA_CLIENTE, $PROYECTO) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESAXCLIENTEXPROYECTO($EMPRESA, $EMPRESA_CLIENTE, $PROYECTO)");
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

    function getCobranzaAcumuladaXEmpresaXClienteXEtapa($EMPRESA, $EMPRESA_CLIENTE, $ETAPA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESAXCLIENTEXETAPA($EMPRESA, $EMPRESA_CLIENTE, $ETAPA)");
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

    function getCobranzaAcumuladaXEmpresaXCliente($EMPRESA, $EMPRESA_CLIENTE) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESAXCLIENTE($EMPRESA,$EMPRESA_CLIENTE)");
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

    function getCobranzaAcumuladaXEmpresaXProyecto($EMPRESA, $PROYECTO) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESAXPROYECTO($EMPRESA,$PROYECTO)");
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

    function getCobranzaAcumuladaXEmpresa($EMPRESA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESA($EMPRESA)");
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

    function getCobranzaAcumuladaXCliente($EMPRESA_CLIENTE) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXCLIENTE($EMPRESA_CLIENTE)");
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

    function getCobranzaAcumuladaXProyecto($PROYECTO) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXPROYECTO($PROYECTO)");
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

    function getCobranzaAcumuladaXEtapa($ETAPA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXETAPA($ETAPA)");
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

    function getCobranzaAcumuladaXClienteXProyecto($EMPRESA_CLIENTE, $PROYECTO) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXCLIENTEXPROYECTO($EMPRESA_CLIENTE, $PROYECTO)");
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

    function getCobranzaAcumuladaXClienteXEtapa($EMPRESA_CLIENTE, $ETAPA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXCLIENTEXETAPA($EMPRESA_CLIENTE, $ETAPA)");
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

    function getCobranzaAcumuladaXEmpresaXEtapa($EMPRESA, $ETAPA) {
        try {
            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADAXEMPRESAXETAPA($EMPRESA,$ETAPA)");
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

//    function getCobranzaAcumulada() {
//        try {
//            $query = $this->db->query("CALL SP_GETCOBRANZAACUMULADA()");
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

    function getContratosDeObraEnCobranza() {
        try {
            $query = $this->db->query("CALL SP_GETCONTRATOSDEOBRAENCOBRANZA()");
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

    function getCobranzaPorContratos($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO, $TIPO) {
//        var_dump($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO);
        $this->db->select('CONTRATISTA.RazonS AS CONTRATISTA,
                (SELECT CONCAT(PROYECTOS.Proyecto, CASE 
			WHEN CDO.IdEtapa IS NULL THEN ", NO APLICA" 
			WHEN CDO.IdEtapa = 0 THEN "" 
			WHEN CDO.IdEtapa = 1 THEN ", ETAPA 1" 
			WHEN CDO.IdEtapa = 2 THEN ", ETAPA 2" 
			WHEN CDO.IdEtapa = 3 THEN ", ETAPA 3" 
			WHEN CDO.IdEtapa = 4 THEN ", ETAPA 4" 
			WHEN CDO.IdEtapa = 5 THEN ", ETAPA 5" 
			WHEN CDO.IdEtapa = 6 THEN ", ETAPA 6" 
			WHEN CDO.IdEtapa = 7 THEN ", ETAPA 7" 
			WHEN CDO.IdEtapa = 8 THEN ", ETAPA 8" 
			WHEN CDO.IdEtapa = 9 THEN ", ETAPA 9" 
			WHEN CDO.IdEtapa = 10 THEN ", ETAPA 10" 
		END)) AS PROYECTO,
                CONTRATANTE.RazonS AS CONTRATANTE, CDO.FechaInicio AS "FECHA INICIO", CDO.FechaTermino AS "FECHA TERMINO", 
                CDO.DescripcionObra AS CONCEPTO, CDO.ContratoDeObra AS "CONTRATO DE OBRA", 
                (CASE WHEN CDO.TotalViviendas IS NULL THEN 0 ELSE CDO.TotalViviendas END) AS "VIVIENDAS", CDO.TotalContrato AS "TOTAL DEL CONTRATO",

                ((SELECT CASE WHEN SUM(CI.Cantidad) IS NULL THEN 0 ELSE SUM(CI.Cantidad) END
                FROM CobranzaIngresos AS CI LEFT JOIN Cobranza AS C ON C.ID = CI.IdCobranza
                WHERE C.IdContrato = CDO.ID AND CI.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') AND
                C.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') )) AS "MONTO PAGADO", 

                (CDO.TotalContrato - (SELECT CASE WHEN SUM(CI.Cantidad) IS NULL THEN 0 ELSE SUM(CI.Cantidad) END
                FROM CobranzaIngresos AS CI LEFT JOIN Cobranza AS C ON C.ID = CI.IdCobranza
                WHERE C.IdContrato = CDO.ID AND CI.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') AND
                C.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') ) ) AS SALDO', false);
        $this->db->from('ContratosDeObra AS CDO');
        $this->db->join('Cobranza AS COBRANZA', 'COBRANZA.IdContrato = CDO.ID', 'left');
        $this->db->join('Directorio AS CONTRATANTE', 'CDO.Contratante = CONTRATANTE.ID');
        $this->db->join('Directorio AS CONTRATISTA', 'CDO.Contratista = CONTRATISTA.ID');
        $this->db->join('Proyectos AS PROYECTOS', 'CDO.IdProyecto = PROYECTOS.ID');

        if ($INICIO !== 0 && $INICIO !== '0' && $INICIO !== '' && $INICIO !== 'undefined' && strlen($INICIO) > 0 && $TERMINO !== 0 && $TERMINO !== '0' && $TERMINO !== '' && $TERMINO !== 'undefined' && strlen($TERMINO) > 0) {
            $this->db->where("COBRANZA.ID IN (SELECT COBRANZAINGRESOS.IdCobranza FROM CobranzaIngresos AS COBRANZAINGRESOS WHERE str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') >= str_to_date('$INICIO', '%d/%m/%Y') AND str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') <= str_to_date('$TERMINO', '%d/%m/%Y'))");
        }
        if ($INICIO !== 0 && $INICIO !== '0' && $INICIO !== '' && $INICIO !== 'undefined' && strlen($INICIO) > 0) {
            $this->db->where("COBRANZA.ID IN (SELECT COBRANZAINGRESOS.IdCobranza FROM CobranzaIngresos AS COBRANZAINGRESOS WHERE str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') >= str_to_date('$INICIO', '%d/%m/%Y'))");
        }
        if ($EMPRESA !== 0 && $EMPRESA !== '0' && $EMPRESA !== '' && $EMPRESA !== 'undefined') {
            $this->db->where('CONTRATISTA.ID', $EMPRESA);
        }
        if ($CLIENTE !== 0 && $CLIENTE !== '0' && $CLIENTE !== '' && $CLIENTE !== 'undefined') {
            $this->db->where('CONTRATANTE.ID', $CLIENTE);
        }
        if ($PROYECTO != 0 && $PROYECTO != '0' && $PROYECTO !== '' && $PROYECTO !== 'undefined') {
            $this->db->where('PROYECTOS.ID', $PROYECTO);
        }
        if ($ETAPA != 0 && $ETAPA != '0' && $ETAPA !== '' && $ETAPA !== 'undefined') {
            $this->db->where('CDO.IdEtapa', $ETAPA);
        }
        if ($CONTRATO != 0 && $CONTRATO != '0' && $CONTRATO !== '' && $CONTRATO !== 'undefined') {
            $this->db->where('CDO.ID', $CONTRATO);
        }
        if ($TIPO != 0 && $TIPO != '0' && $TIPO !== '' && $TIPO !== 'undefined') {
            $this->db->where('CDO.TipoContrato', $TIPO);
        }
        $this->db->where_not_in('CDO.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
        $this->db->group_by('CDO.ID');
        $this->db->order_by('CDO.ID', 'ASC');
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

    function getCobranzaPorContratosZeros($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO) {
//        var_dump($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO);
        $this->db->select('CONTRATISTA.RazonS AS CONTRATISTA,
                (SELECT CONCAT(PROYECTOS.Proyecto, CASE 
			WHEN CDO.IdEtapa IS NULL THEN ", NO APLICA" 
			WHEN CDO.IdEtapa = 0 THEN "" 
			WHEN CDO.IdEtapa = 1 THEN ", ETAPA 1" 
			WHEN CDO.IdEtapa = 2 THEN ", ETAPA 2" 
			WHEN CDO.IdEtapa = 3 THEN ", ETAPA 3" 
			WHEN CDO.IdEtapa = 4 THEN ", ETAPA 4" 
			WHEN CDO.IdEtapa = 5 THEN ", ETAPA 5" 
			WHEN CDO.IdEtapa = 6 THEN ", ETAPA 6" 
			WHEN CDO.IdEtapa = 7 THEN ", ETAPA 7" 
			WHEN CDO.IdEtapa = 8 THEN ", ETAPA 8" 
			WHEN CDO.IdEtapa = 9 THEN ", ETAPA 9" 
			WHEN CDO.IdEtapa = 10 THEN ", ETAPA 10" 
		END)) AS PROYECTO,
                CONTRATANTE.RazonS AS CONTRATANTE, CDO.FechaInicio AS "FECHA INICIO", CDO.FechaTermino AS "FECHA TERMINO", 
                COBRANZA.Concepto AS CONCEPTO, CDO.ContratoDeObra AS "CONTRATO DE OBRA", 
                (CASE WHEN CDO.TotalViviendas IS NULL THEN 0 ELSE CDO.TotalViviendas END) AS "VIVIENDAS", CDO.TotalContrato AS "TOTAL DEL CONTRATO",

                ((SELECT CASE WHEN SUM(CI.Cantidad) IS NULL THEN 0 ELSE SUM(CI.Cantidad) END
                FROM CobranzaIngresos AS CI LEFT JOIN Cobranza AS C ON C.ID = CI.IdCobranza
                WHERE C.IdContrato = CDO.ID AND CI.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') AND
                C.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') )) AS "MONTO PAGADO", 

                (CDO.TotalContrato - (SELECT CASE WHEN SUM(CI.Cantidad) IS NULL THEN 0 ELSE SUM(CI.Cantidad) END
                FROM CobranzaIngresos AS CI LEFT JOIN Cobranza AS C ON C.ID = CI.IdCobranza
                WHERE C.IdContrato = CDO.ID AND CI.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') AND
                C.Estatus NOT IN (\'INACTIVO\', \'CANCELADO\', \'CANCELADA\') ) ) AS SALDO', false);
        $this->db->from('ContratosDeObra AS CDO');
        $this->db->join('Cobranza AS COBRANZA', 'COBRANZA.IdContrato = CDO.ID', 'left');
        $this->db->join('Directorio AS CONTRATANTE', 'CDO.Contratante = CONTRATANTE.ID');
        $this->db->join('Directorio AS CONTRATISTA', 'CDO.Contratista = CONTRATISTA.ID');
        $this->db->join('Proyectos AS PROYECTOS', 'CDO.IdProyecto = PROYECTOS.ID');

        if ($INICIO !== 0 && $INICIO !== '0' && $INICIO !== '' && $INICIO !== 'undefined' && strlen($INICIO) > 0 && $TERMINO !== 0 && $TERMINO !== '0' && $TERMINO !== '' && $TERMINO !== 'undefined' && strlen($TERMINO) > 0) {
            $this->db->where("COBRANZA.ID IN (SELECT COBRANZAINGRESOS.IdCobranza FROM CobranzaIngresos AS COBRANZAINGRESOS WHERE str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') >= str_to_date('$INICIO', '%d/%m/%Y') AND str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') <= str_to_date('$TERMINO', '%d/%m/%Y'))");
        }
        if ($INICIO !== 0 && $INICIO !== '0' && $INICIO !== '' && $INICIO !== 'undefined' && strlen($INICIO) > 0) {
            $this->db->where("COBRANZA.ID IN (SELECT COBRANZAINGRESOS.IdCobranza FROM CobranzaIngresos AS COBRANZAINGRESOS WHERE str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') >= str_to_date('$INICIO', '%d/%m/%Y'))");
        }
        if ($EMPRESA !== 0 && $EMPRESA !== '0' && $EMPRESA !== '' && $EMPRESA !== 'undefined') {
            $this->db->where('CONTRATISTA.ID', $EMPRESA);
        }
        if ($CLIENTE !== 0 && $CLIENTE !== '0' && $CLIENTE !== '' && $CLIENTE !== 'undefined') {
            $this->db->where('CONTRATANTE.ID', $CLIENTE);
        }
        if ($PROYECTO != 0 && $PROYECTO != '0' && $PROYECTO !== '' && $PROYECTO !== 'undefined') {
            $this->db->where('PROYECTOS.ID', $PROYECTO);
        }
        if ($ETAPA != 0 && $ETAPA != '0' && $ETAPA !== '' && $ETAPA !== 'undefined') {
            $this->db->where('CDO.IdEtapa', $ETAPA);
        }
        if ($CONTRATO != 0 && $CONTRATO != '0' && $CONTRATO !== '' && $CONTRATO !== 'undefined') {
            $this->db->where('CDO.ID', $CONTRATO);
        }
        $this->db->where_not_in('CDO.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
        $this->db->group_by('CDO.ContratoDeObra');
        $this->db->order_by('COBRANZA.ID', 'ASC');
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

    function getHistorialDeIngresosByID($ID) {
        $this->db->select('CI.ID,C.Folio AS FOLIO, CI.NoRecibo AS "RECIBO", CI.FechaEmsion AS "FECHA EMISION",CI.FechaPago AS "FECHA DE PAGO", (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = CI.Cliente) AS CLIENTE,CONCAT("$",FORMAT(CI.Cantidad,2)) AS MONTO,CONCAT("$",FORMAT(CI.Cantidad*1.16,2)) AS IVA, CI.Concepto AS CONCEPTO, CI.Numero AS NUMERO,CI.Registro,CI.Estatus', false);
        $this->db->from('Cobranza AS C');
        $this->db->join('CobranzaIngresos AS CI', 'CI.IdCobranza = C.ID');
        $this->db->where('CI.ID', $ID);
        $this->db->where_not_in('CI.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
        $this->db->group_by('CI.ID');
        $this->db->order_by('CI.ID', 'DESC');
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

    function getRecordByID($ID) {
        try {
            $this->db->select('*', false);
            $this->db->from('Cobranza AS C');
            $this->db->where('C.ID', $ID);
            $this->db->where_not_in('C.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
            $this->db->group_by('C.ID');
            $this->db->order_by('C.ID', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getIngresoByID($ID) {
        try {
            $this->db->select('C.*,CI.Cantidad', false);
            $this->db->from('Cobranza AS C');
            $this->db->join('CobranzaIngresos AS CI', 'CI.IdCobranza = C.ID');
            $this->db->where('CI.ID', $ID);
            $this->db->where_not_in('C.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            print $str;
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordsByID($ID) {
        try {
            $this->db->select('C.ID,C.Folio, DIR.NombreC AS "EMPRESA / CLIENTE", C.Concepto AS "CONCEPTO DE COBRO",CONCAT("$ ",FORMAT(C.MontoAPagar,2)) AS "MONTO A PAGAR", C.FechaCobro AS "FECHA COBRO",
        CONCAT(USR.nombre," ", USR.apaterno, " ",USR.amaterno)  AS "RESPONSABLE DEL SERVICIO", CONCAT(USRR.nombre," ", USRR.apaterno, " ",USRR.amaterno) AS "RESPONSABLE DE ORDEN"', false);
            $this->db->from('Cobranza AS C');
            $this->db->join('Tarifa AS TAR', 'C.Tarifa = TAR.id_tarifa');
            $this->db->join('Directorio AS DIR', 'C.Cliente = DIR.ID');
            $this->db->join('usuarios AS USR', 'C.IdPrestadorDelServicio = USR.ID');
            $this->db->join('usuarios AS USRR', 'C.IdEmisorDeLaOrden = USRR.ID');
            $this->db->where('C.ID', $ID);
            $this->db->where_not_in('C.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
            $this->db->group_by('C.ID');
            $this->db->order_by('C.ID', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordsReportByID($ID) {
        try {
            $this->db->select('C.ID,C.Folio AS FOLIO, DIR.NombreC AS "EMPRESA", C.Concepto AS "CONCEPTO DE COBRO",CONCAT("$ ",FORMAT(C.MontoAPagar,2)) AS "MONTO A PAGAR", C.FechaCobro AS "FECHA COBRO",
        CONCAT(USR.nombre," ", USR.apaterno, " ",USR.amaterno)  AS "RESPONSABLE DEL SERVICIO", CONCAT(USRR.nombre," ", USRR.apaterno, " ",USRR.amaterno) AS "RESPONSABLE DE ORDEN",
        CASE 
        WHEN C.IdContrato IS NULL THEN "SIN CONTRATO"
        WHEN C.IdContrato IS NOT NULL THEN (SELECT CO.ContratoDeObra FROM ContratosDeObra AS CO WHERE CO.ID = C.IdContrato)
        END AS CONTRATO', false);
            $this->db->from('Cobranza AS C');
            $this->db->join('Tarifa AS TAR', 'C.Tarifa = TAR.id_tarifa');
            $this->db->join('Directorio AS DIR', 'C.Cliente = DIR.ID');
            $this->db->join('usuarios AS USR', 'C.IdPrestadorDelServicio = USR.ID');
            $this->db->join('usuarios AS USRR', 'C.IdEmisorDeLaOrden = USRR.ID');
            $this->db->where('C.ID', $ID);
            $this->db->where_not_in('C.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
            $this->db->group_by('C.ID');
            $this->db->order_by('C.ID', 'DESC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDirectorio() {
        try {
            $this->db->select('*');
            $this->db->from('Directorio AS DIR');
            $this->db->order_by('DIR.RazonS', 'ASC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getEmpresasEnCobranza() {
        try {
            $query = $this->db->query("CALL GETEMPRESASENCOBRANZA()");
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

    function getClientesEnCobranza() {
        try {
            $query = $this->db->query("CALL GETCLIENTESENCOBRANZA()");
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

    public function getNumeroDeCobro() {
        try {
            $this->db->select("LPAD((COUNT(*)+1),5,'0') AS COBRO", false);
            $this->db->from("CobranzaIngresos AS C");
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getEstadoDeCuenta($ID, $FECHAINICIO, $FECHAFINAL) {
        $this->db->select('CO.ID, CO.ConceptoCobro AS CONCEPTO, CONCAT("$ ",FORMAT(CO.MontoPagar, 2))  AS MONTO,CO.FechaCobro AS "FECHA COBRO (VENCIMIENTO)", 
CO.FechaPago AS "FECHA PAGO", UPPER(CO.Cobrado) AS "ESTADO DEL COBRO",CONCAT("$ ",FORMAT((CO.MontoPagar  - CO.Resto), 2))  AS "MONTO PAGADO",
GROUP_CONCAT(RE.ReciboNoRecibo SEPARATOR \', \') AS "NO. DE RECIBOS", CO.NoFactura AS "NO. DE FACTURA",CONCAT("$ ",FORMAT(SUM(CO.Resto), 2))  AS "TOTAL A PAGAR"', false);
        $this->db->from('Cobranza AS CO');
        $this->db->join('Recibos AS RE', 'CO.ID = RE.IDOrdenCobro');
        $this->db->join('Directorio AS DIR', 'CO.ID_Cliente = DIR.Folio');
        $this->db->where('DIR.ID', $ID);
        $this->db->where('STR_TO_DATE(`CO`.`FechaCobro`, \'%m/%d/%Y\') 
BETWEEN STR_TO_DATE(\'' . $FECHAINICIO . '\', \'%d/%m/%Y\') AND STR_TO_DATE(\'' . $FECHAFINAL . '\', \'%d/%m/%Y\')');

        $this->db->group_by('CO.ID');
        $this->db->order_by('CO.ID', 'ASC');
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

    function getUltimoPago($IDcobranza) {
        $where = "IDOrdenCobro='" . $IDcobranza . "'";
        $this->db_UltimoPago->select('*');
        $this->db_UltimoPago->from('Recibos');
        if ($where != NULL)
            $this->db_UltimoPago->where($where, NULL, FALSE);
        $query = $this->db_UltimoPago->get();
        return $query->result();
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

    function getMontoByID($ID) {
        try {
            $this->db->select('CDO.TotalContrato AS TOTAL');
            $this->db->from('ContratosDeObra AS CDO');
            $this->db->where('CDO.ID', $ID);
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getContratosDeObra() {
        $this->db->select('CDO.ID, CDO.ContratoDeObra AS CONTRATODEOBRA', false);
        $this->db->from('ContratosDeObra AS CDO');
        $this->db->order_by('CDO.ContratoDeObra', 'ASC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    public function getContadoresDeCobranzaXEstatus() {
        try {
            $query = $this->db->query("CALL SP_GETCONTADORESDECOBRANZAXESTATUS()");
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

    public function getProyectosXContratosDeObra() {
        try {
            $query = $this->db->query("CALL SP_GETPROYECTOSXCONTRATOSDEOBRA()");
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

    function getCobranzaAcumulada($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO, $TIPO) {
//        var_dump($INICIO, $TERMINO, $EMPRESA, $CLIENTE, $PROYECTO, $ETAPA, $CONTRATO);
        $this->db->select('C.ID, C.Folio, 
        CASE 
        WHEN CDO.Contratista IS NULL THEN "SIN EMPRESA" 
        WHEN CDO.Contratista IS NOT NULL THEN  
			(SELECT DR.RazonS FROM Directorio AS DR WHERE CDO.Contratista = DR.ID AND CDO.ID = C.IdContrato) 
		END "EMPRESA RABINA", 
        DIR.RazonS AS "EMPRESA / CLIENTE", 
        CASE 
        WHEN CDO.IdProyecto IS NULL THEN "SIN PROYECTO"
        WHEN CDO.IdProyecto IS NOT NULL THEN  
        (SELECT CONCAT(PROY.Proyecto, CASE 
			WHEN CDO.IdEtapa IS NULL THEN ", NO APLICA" 
			WHEN CDO.IdEtapa = 0 THEN "" 
			WHEN CDO.IdEtapa = 1 THEN ", ETAPA 1" 
			WHEN CDO.IdEtapa = 2 THEN ", ETAPA 2" 
			WHEN CDO.IdEtapa = 3 THEN ", ETAPA 3" 
			WHEN CDO.IdEtapa = 4 THEN ", ETAPA 4" 
			WHEN CDO.IdEtapa = 5 THEN ", ETAPA 5" 
			WHEN CDO.IdEtapa = 6 THEN ", ETAPA 6" 
			WHEN CDO.IdEtapa = 7 THEN ", ETAPA 7" 
			WHEN CDO.IdEtapa = 8 THEN ", ETAPA 8" 
			WHEN CDO.IdEtapa = 9 THEN ", ETAPA 9" 
			WHEN CDO.IdEtapa = 10 THEN ", ETAPA 10" 
		END) 
        FROM Proyectos AS PROY WHERE PROY.ID = CDO.IdProyecto) END AS "LUGAR DE TRABAJO", 
        CASE WHEN C.IdContrato IS NULL THEN "SIN CONTRATO" 
		ELSE  CDO.ContratoDeObra END AS CONTRATO, 
        CASE WHEN C.MontoContrato IS NULL THEN "$0.0" 
		ELSE C.MontoContrato END AS "MONTO DEL CONTRATO", 
        C.NFactura AS "FACTURA", C.Concepto AS "CONCEPTO DE COBRO", 
        C.MontoAPagar AS "MONTO A PAGAR", 
        (C.MontoAPagar - C.Saldo) AS "MONTO PAGADO", 
        (CASE 
		WHEN C.Saldo > 0 THEN C.Saldo
		WHEN C.Saldo = 0.00000 THEN C.Saldo
		END) AS SALDO, 
        C.FechaCobro AS "FECHA COBRO", 
        CONCAT(USR.nombre, " ", USR.apaterno, " ", USR.amaterno) AS "RESPONSABLE DEL SERVICIO", 
        CONCAT(USRR.nombre, " ", USRR.apaterno, " ", USRR.amaterno) AS "RESPONSABLE DE ORDEN", 
        (CASE WHEN C.Estatus = "ACTIVO" THEN "SIN PAGOS" ELSE C.Estatus END) AS ESTATUS', false);
        $this->db->from('Cobranza AS C');
        $this->db->join('Tarifa AS TAR', "C.Tarifa = TAR.id_tarifa");
        $this->db->join('Directorio AS DIR', "C.Cliente = DIR.ID");
        $this->db->join('ContratosDeObra AS CDO', "CDO.ID = C.IdContrato");
        $this->db->join('usuarios AS USR', "C.IdPrestadorDelServicio = USR.ID");
        $this->db->join('usuarios AS USRR', "C.IdEmisorDeLaOrden = USRR.ID");
        $this->db->join('Directorio AS CONTRATANTE', 'CDO.Contratante = CONTRATANTE.ID');
        $this->db->join('Directorio AS CONTRATISTA', 'CDO.Contratista = CONTRATISTA.ID');
        $this->db->join('Proyectos AS PROYECTOS', 'CDO.IdProyecto = PROYECTOS.ID');

        if ($INICIO !== 0 && $INICIO !== '0' && $INICIO !== '' && $INICIO !== 'undefined' && strlen($INICIO) > 0 && $TERMINO !== 0 && $TERMINO !== '0' && $TERMINO !== '' && $TERMINO !== 'undefined' && strlen($TERMINO) > 0) {
            $this->db->where("C.ID IN (SELECT COBRANZAINGRESOS.IdCobranza FROM CobranzaIngresos AS COBRANZAINGRESOS WHERE str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') >= str_to_date('$INICIO', '%d/%m/%Y') AND str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') <= str_to_date('$TERMINO', '%d/%m/%Y'))");
        }
        if ($INICIO !== 0 && $INICIO !== '0' && $INICIO !== '' && $INICIO !== 'undefined' && strlen($INICIO) > 0) {
            $this->db->where("C.ID IN (SELECT COBRANZAINGRESOS.IdCobranza FROM CobranzaIngresos AS COBRANZAINGRESOS WHERE str_to_date(COBRANZAINGRESOS.FechaPago, '%d/%m/%Y') >= str_to_date('$INICIO', '%d/%m/%Y'))");
        }

        if ($EMPRESA !== 0 && $EMPRESA !== '0' && $EMPRESA !== '' && $EMPRESA !== 'undefined') {
            $this->db->where('CONTRATISTA.ID', $EMPRESA);
        }
        if ($CLIENTE !== 0 && $CLIENTE !== '0' && $CLIENTE !== '' && $CLIENTE !== 'undefined') {
            $this->db->where('CONTRATANTE.ID', $CLIENTE);
        }
        if ($PROYECTO != 0 && $PROYECTO != '0' && $PROYECTO !== '' && $PROYECTO !== 'undefined') {
            $this->db->where('PROYECTOS.ID', $PROYECTO);
        }

        if ($ETAPA != 0 && $ETAPA != '0' && $ETAPA !== '' && $ETAPA !== 'undefined') {
            $this->db->where('CDO.IdEtapa', $ETAPA);
        }
        if ($CONTRATO != 0 && $CONTRATO != '0' && $CONTRATO !== '' && $CONTRATO !== 'undefined') {
            $this->db->where('CDO.ID', $CONTRATO);
        }
        if ($TIPO != 0 && $TIPO != '0' && $TIPO !== '' && $TIPO !== 'undefined') {
            $this->db->where('CDO.TipoContrato', $TIPO);
        }
        $this->db->where_not_in('C.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
        $this->db->where_not_in('CDO.Estatus', array('INACTIVO', 'CANCELADO', 'CANCELADA'));
//        $this->db->group_by('CDO.ID');
        $this->db->order_by('C.ID', 'ASC');
        $query = $this->db->get();
        /*
         * 
         * FOR DEBUG ONLY
         * 
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
//        var_dump($str);
        return $data;
    }

}
