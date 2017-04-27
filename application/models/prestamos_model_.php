<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class prestamos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        $this->db->select('CDM.ID,CDM.Estatus,  USR.RazonS AS MUTUANTE, MUT.RazonS AS MUTUATARIO, '
                . 'CONCAT("$",FORMAT(CDM.CantidadPrestada,2)) AS "CANTIDAD PRESTADA", CDM.Interes AS "INTERÉS",CONCAT("$",FORMAT(CDM.Saldo,2)) AS SALDO,'
                . 'CONCAT(CUS.Banco, \' - \',CUS.NoCuenta, \' - \',CUS.Titular) AS "CUENTA SALIENTE", '
                . 'FP.dsc_FormaPago AS "FORMA DE PAGO", '
                . 'CONCAT(CUE.Banco, \' -\',CUE.NoCuenta, \' -\',CUE.Titular) AS "CUENTA ENTRANTE", '
                . 'CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", '
                . 'CDM.FechaContrato AS "FECHA DEL CONTRATO DE MUTUO", '
                . 'CDM.FechaSolicitud AS "FECHA DE SOLICITUD DE ELABORACIÓN", '
                . 'CDM.FechaEntregaContrato AS "FECHA DE ENTREGA DE CONTRATO ELABORADO", '
                . 'CDM.Registro AS REGISTRO', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('Directorio AS USR', 'CDM.IdMutuante = USR.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario =MUT.ID');
        $this->db->join('usuarios AS SOL', 'CDM.IdSolicitante = SOL.ID');
        $this->db->join('usuarios AS RES', 'CDM.IdResponsable = RES.ID');

        $this->db->join('Cuentas AS CUS', 'CDM.IdCuentaSaliente = CUS.ID');
        $this->db->join('FormaPago AS FP', 'CDM.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('Cuentas AS CUE', 'CDM.IdCuentaEntrante = CUE.ID');

        $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->order_by('CDM.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        return $data;
    }

    function getHistorialDePagos() {
        $this->db->select('PDCM.ID, PDCM.Estatus, MU.RazonS AS "MUTUANTE", MUT.RazonS "MUTUATARIO",CONCAT("$",FORMAT(CDM.CantidadPrestada,2)) AS "CANTIDAD PRESTADA", CDM.Interes AS INTERES, CONCAT("$",FORMAT(PDCM.Pago,2)) AS PAGO, 
CONCAT("$",FORMAT(CDM.CantidadPrestada - PDCM.Pago,2)) AS SALDO, CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", CDM.FechaContrato AS "FECHA DEL CONTRATO", 
CDM.FechaSolicitud AS "FECHA DE SOLICITUD", CDM.FechaEntregaContrato "FECHA DE ENTREGA DE CONTRATO ELABORADO", 
CDM.Registro "FECHA Y HORA DE REGISTRO"', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('PagoDeContratoDeMutuo AS PDCM', 'CDM.ID = PDCM.IdContratoDeMutuo');
        $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');
        $this->db->where_not_in('PDCM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->order_by('PDCM.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str; 
        return $data;
    }

    function getBusquedaDeHistorialDePagos($INICIO, $FIN, $ACREEDOR, $DEUDOR) {
        $this->db->select('PDCM.ID, PDCM.Estatus, MU.RazonS AS "MUTUANTE", MUT.RazonS "MUTUATARIO",CONCAT("$",FORMAT(CDM.CantidadPrestada,2)) AS "CANTIDAD PRESTADA", CDM.Interes AS INTERES, CONCAT("$",FORMAT(PDCM.Pago,2)) AS PAGO, 
CONCAT("$",FORMAT(CDM.CantidadPrestada - PDCM.Pago,2)) AS SALDO, CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", CDM.FechaContrato AS "FECHA DEL CONTRATO", 
CDM.FechaSolicitud AS "FECHA DE SOLICITUD", CDM.FechaEntregaContrato "FECHA DE ENTREGA DE CONTRATO ELABORADO", 
CDM.Registro "FECHA Y HORA DE REGISTRO"', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('PagoDeContratoDeMutuo AS PDCM', 'CDM.ID = PDCM.IdContratoDeMutuo');
        $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');

        if ($INICIO !== '' && strlen($INICIO) > 0) {
            $this->db->where('CDM.FechaContrato >=', $INICIO);
        }
        if ($FIN !== '' && strlen($FIN) > 0) {
            $this->db->where('CDM.FechaContrato <=', $FIN);
        }
        if ($ACREEDOR !== '' && strlen($ACREEDOR) > 0) {
            $this->db->where('MU.ID', $ACREEDOR);
        }

        if ($DEUDOR !== '' && strlen($DEUDOR) > 0) {
            $this->db->where('MUT.ID', $DEUDOR);
        }

        $this->db->where_not_in('PDCM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->order_by('PDCM.ID', 'DESC');
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str; 
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getRecordsByID($ID) {
        $this->db->select('CDM.ID,CDM.Estatus,  USR.RazonS AS MUTUANTE, MUT.RazonS AS MUTUATARIO, '
                . 'CDM.CantidadPrestada AS "CANTIDAD PRESTADA", CDM.Interes AS "INTERÉS",'
                . 'CONCAT(CUS.Banco, \' - \',CUS.NoCuenta, \' - \',CUS.Titular) AS "CUENTA SALIENTE", '
                . 'FP.dsc_FormaPago AS "FORMA DE PAGO", '
                . 'CONCAT(CUE.Banco, \' -\',CUE.NoCuenta, \' -\',CUE.Titular) AS "CUENTA ENTRANTE", '
                . 'CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", '
                . 'CDM.FechaContrato AS "FECHA DEL CONTRATO DE MUTUO", '
                . 'CDM.FechaSolicitud AS "FECHA DE SOLICITUD DE ELABORACIÓN", '
                . 'CDM.FechaEntregaContrato AS "FECHA DE ENTREGA DE CONTRATO ELABORADO", '
                . 'CDM.Registro AS REGISTRO,CDM.*', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('Directorio AS USR', 'CDM.IdMutuante = USR.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario =MUT.ID');
        $this->db->join('usuarios AS SOL', 'CDM.IdSolicitante = SOL.ID');
        $this->db->join('usuarios AS RES', 'CDM.IdResponsable = RES.ID');

        $this->db->join('Cuentas AS CUS', 'CDM.IdCuentaSaliente = CUS.ID');
        $this->db->join('FormaPago AS FP', 'CDM.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('Cuentas AS CUE', 'CDM.IdCuentaEntrante = CUE.ID');

        $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->where('CDM.ID', $ID);
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

    function getRecordsIDByID($ID, $IDX, $DESDE, $HASTA) {
        $this->db->select('CDM.ID,CDM.Estatus,  USR.RazonS AS MUTUANTE, MUT.RazonS AS MUTUATARIO, '
                . 'CDM.CantidadPrestada AS "CANTIDAD PRESTADA", CDM.Interes AS "INTERÉS",CDM.Saldo AS SALDO,'
                . 'CONCAT(CUS.Banco, \' - \',CUS.NoCuenta, \' - \',CUS.Titular) AS "CUENTA SALIENTE", '
                . 'FP.dsc_FormaPago AS "FORMA DE PAGO", '
                . 'CONCAT(CUE.Banco, \' -\',CUE.NoCuenta, \' -\',CUE.Titular) AS "CUENTA ENTRANTE", '
                . 'CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", '
                . 'CDM.FechaContrato AS "FECHA DEL CONTRATO DE MUTUO", '
                . 'CDM.FechaSolicitud AS "FECHA DE SOLICITUD DE ELABORACIÓN", '
                . 'CDM.FechaEntregaContrato AS "FECHA DE ENTREGA DE CONTRATO ELABORADO", '
                . 'CDM.Registro AS REGISTRO', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('Directorio AS USR', 'CDM.IdMutuante = USR.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario =MUT.ID');
        $this->db->join('usuarios AS SOL', 'CDM.IdSolicitante = SOL.ID');
        $this->db->join('usuarios AS RES', 'CDM.IdResponsable = RES.ID');

        $this->db->join('Cuentas AS CUS', 'CDM.IdCuentaSaliente = CUS.ID');
        $this->db->join('FormaPago AS FP', 'CDM.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('Cuentas AS CUE', 'CDM.IdCuentaEntrante = CUE.ID');
        if ($DESDE != '') {
            $this->db->where('STR_TO_DATE(CDM.FechaContrato, \'%d/%m/%Y\')  >= STR_TO_DATE(\'' . $DESDE . '\', \'%d/%m/%Y\')');
        }
        if ($HASTA != '') {
            $this->db->where('STR_TO_DATE(CDM.FechaContrato , \'%d/%m/%Y\') <= STR_TO_DATE(\'' . $HASTA . '\', \'%d/%m/%Y\')');
        }
        if ($ID != '') {
            $this->db->where('CDM.IdMutuante', $ID);
        }
        if ($IDX != '') {
            $this->db->where('CDM.IdMutuatario', $IDX);
        }
        $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->order_by('CDM.ID', 'DESC');
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

    function getRecordsIDByIDAgrupado($ID, $IDX, $DESDE, $HASTA) {
        $this->db->select('CDM.ID,CDM.Estatus,  USR.RazonS AS MUTUANTE, MUT.RazonS AS MUTUATARIO, '
                . 'SUM(CDM.CantidadPrestada) AS "CANTIDAD PRESTADA", CDM.Interes AS "INTERÉS",SUM(CDM.Saldo) AS SALDO,'
                . 'CONCAT(CUS.Banco, \' - \',CUS.NoCuenta, \' - \',CUS.Titular) AS "CUENTA SALIENTE", '
                . 'FP.dsc_FormaPago AS "FORMA DE PAGO", '
                . 'CONCAT(CUE.Banco, \' -\',CUE.NoCuenta, \' -\',CUE.Titular) AS "CUENTA ENTRANTE", '
                . 'CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", '
                . 'CDM.FechaContrato AS "FECHA DEL CONTRATO DE MUTUO", '
                . 'CDM.FechaSolicitud AS "FECHA DE SOLICITUD DE ELABORACIÓN", '
                . 'CDM.FechaEntregaContrato AS "FECHA DE ENTREGA DE CONTRATO ELABORADO", '
                . 'CDM.Registro AS REGISTRO', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('Directorio AS USR', 'CDM.IdMutuante = USR.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario =MUT.ID');
        $this->db->join('usuarios AS SOL', 'CDM.IdSolicitante = SOL.ID');
        $this->db->join('usuarios AS RES', 'CDM.IdResponsable = RES.ID');

        $this->db->join('Cuentas AS CUS', 'CDM.IdCuentaSaliente = CUS.ID');
        $this->db->join('FormaPago AS FP', 'CDM.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('Cuentas AS CUE', 'CDM.IdCuentaEntrante = CUE.ID');
        if ($DESDE != '') {
            $this->db->where('STR_TO_DATE(CDM.FechaContrato, \'%d/%m/%Y\')  >= STR_TO_DATE(\'' . $DESDE . '\', \'%d/%m/%Y\')');
        }
        if ($HASTA != '') {
            $this->db->where('STR_TO_DATE(CDM.FechaContrato , \'%d/%m/%Y\') <= STR_TO_DATE(\'' . $HASTA . '\', \'%d/%m/%Y\')');
        }
        if ($ID != '') {
            $this->db->where('CDM.IdMutuante', $ID);
        }
        if ($IDX != '') {
            $this->db->where('CDM.IdMutuatario', $IDX);
        }
        $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->group_by('CDM.IdMutuatario');
        $this->db->order_by('CDM.ID', 'DESC');
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

    function getRecordsByIDPay($ID) {
        $this->db->select('(SELECT (COUNT(PXC.ID) +1) FROM PagoDeContratoDeMutuo AS PXC WHERE PXC.IdContratoDeMutuo = 1) NPAGO,  '
                . '(SELECT CDM.CantidadPrestada - SUM(PDCDM.Pago) FROM PagoDeContratoDeMutuo AS PDCDM WHERE PDCDM.IdContratoDeMutuo = CDM.ID) AS "CANTIDAD RESTANTE", '
                . 'CDM.ID,CDM.Estatus,  USR.RazonS AS MUTUANTE, MUT.RazonS AS MUTUATARIO, '
                . 'CDM.CantidadPrestada AS "CANTIDAD PRESTADA", CDM.Interes AS "INTERÉS",'
                . 'CONCAT(CUS.Banco, \' - \',CUS.NoCuenta, \' - \',CUS.Titular) AS "CUENTA SALIENTE", '
                . 'FP.dsc_FormaPago AS "FORMA DE PAGO", '
                . 'CONCAT(CUE.Banco, \' -\',CUE.NoCuenta, \' -\',CUE.Titular) AS "CUENTA ENTRANTE", '
                . 'CDM.FechaApartir AS "A PARTIR DEL DÍA", CDM.FechaLimite AS "HASTA EL DÍA", '
                . 'CDM.FechaContrato AS "FECHA DEL CONTRATO DE MUTUO", '
                . 'CDM.FechaSolicitud AS "FECHA DE SOLICITUD DE ELABORACIÓN", '
                . 'CDM.FechaEntregaContrato AS "FECHA DE ENTREGA DE CONTRATO ELABORADO", '
                . 'CDM.Registro AS REGISTRO,CDM.*', false);
        $this->db->from('ContratosDeMutuo AS CDM');
        $this->db->join('Directorio AS USR', 'CDM.IdMutuante = USR.ID');
        $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario =MUT.ID');
        $this->db->join('usuarios AS SOL', 'CDM.IdSolicitante = SOL.ID');
        $this->db->join('usuarios AS RES', 'CDM.IdResponsable = RES.ID');

        $this->db->join('Cuentas AS CUS', 'CDM.IdCuentaSaliente = CUS.ID');
        $this->db->join('FormaPago AS FP', 'CDM.IdFormaDePago = FP.id_FormaPago');
        $this->db->join('Cuentas AS CUE', 'CDM.IdCuentaEntrante = CUE.ID');

        $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO'));
        $this->db->group_by('CDM.ID');
        $this->db->where('CDM.ID', $ID);
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

    function getDirectorio() {
        try {
            $this->db->select('*');
            $this->db->from('Directorio AS DIR');
            $this->db->order_by('DIR.RazonS', 'ASC');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getCuentas() {
        try {
            $this->db->select(" C.ID, CONCAT(C.Banco, ' ',C.NoCuenta, ' ',C.Titular) AS CUENTA", false);
            $this->db->from('Cuentas AS C');
            $this->db->order_by('C.Titular', 'ASC');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getCuentasByNotID($ID) {
        try {
            $this->db->select("C.ID, CONCAT(C.Banco, ' ',C.NoCuenta, ' ',C.Titular) AS CUENTA", false);
            $this->db->from('Cuentas AS C');
            $this->db->where_not_in('C.ID', array($ID));
            $this->db->order_by('C.Titular', 'ASC');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getMutuanteByID($ID) {
        try {
            $this->db->select('*');
            $this->db->from('Directorio AS DIR');
            $this->db->where('DIR.ID', $ID);
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
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

    function getMutuantesAgrupados() {
        try {
//            $this->db->select('CDM.IdMutuante AS ID,CDM.IdMutuatario AS IDMUT, MU.RazonS AS RAZON, MUT.RazonS AS DEUDOR, MU.NombreC AS NCOMERCIAL');
//            $this->db->from('ContratosDeMutuo AS CDM');
//            $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
//            $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');
//            $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO', 'PAGADO'));
//            $this->db->group_by('CDM.IdMutuante');
//            $this->db->order_by('CDM.IdMutuante', 'ASC');
//            $query = $this->db->get();
//            $str = $this->db->last_query();
//            print $str;
//            return $query->result();
            
            
            $query = $this->db->query("CALL SP_GETMUTUANTESAGRUPADOS()");
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

    function getMutuatariosAgrupados() {
        try {
            $this->db->select('`CDM`.`IDMUTUANTE` AS IDMUMT, `CDM`.`IDMUTUATARIO` AS ID, `MUT`.`RAZONS` AS RAZON, `MU`.`RAZONS` AS DEUDOR');
            $this->db->from('ContratosDeMutuo AS CDM');
            $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
            $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');
            $this->db->where('CDM.IdMutuatario NOT IN(
SELECT CDM.IdMutuante AS ID FROM (`ContratosDeMutuo` AS CDM) JOIN `Directorio` AS MU 
ON `CDM`.`IdMutuante` = `MU`.`ID` JOIN `Directorio` AS MUT 
ON `CDM`.`IdMutuatario` = `MUT`.`ID` WHERE `CDM`.`Estatus` NOT IN (\'CANCELADA\', \'CANCELADO\', \'PAGADO\')  
GROUP BY `CDM`.`IdMutuante` ORDER BY `CDM`.`IdMutuante` ASC)');
            $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO', 'PAGADO'));
            $this->db->group_by('CDM.IdMutuatario');
            $this->db->order_by('CDM.IdMutuatario', 'ASC');
            $query = $this->db->get();
            $str = $this->db->last_query();
//            print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getSaldosByID($ID) {
        try {
            $this->db->select('MU.ID, MU.RazonS AS PRESTADOR, MUT.ID, MUT.RazonS AS EMPRESA,  SUM(CDM.Saldo) AS ADEUDA,
                              (SELECT CASE WHEN SUM(CDMX.Saldo) IS NULL THEN 0 WHEN SUM(CDMX.Saldo) > 0 THEN SUM(CDMX.Saldo) END 
                               FROM ContratosDeMutuo AS CDMX INNER JOIN Directorio AS MU
                               ON CDMX.IdMutuante = MU.ID INNER JOIN Directorio AS MUT ON CDMX.IdMutuatario = MUT.ID 
                               WHERE CDMX.IdMutuatario = CDM.IdMutuante AND CDMX.IdMutuante = CDM.IdMutuatario
                               ORDER BY CDMX.IdMutuante ASC) AS "SE LE ADEUDA", (SUM(CDM.Saldo) - (SELECT CASE WHEN SUM(CDMX.Saldo) IS NULL THEN 0 WHEN SUM(CDMX.Saldo) > 0 THEN SUM(CDMX.Saldo) END 
FROM ContratosDeMutuo AS CDMX INNER JOIN Directorio AS MU
ON CDMX.IdMutuante = MU.ID
INNER JOIN Directorio AS MUT
ON CDMX.IdMutuatario = MUT.ID 
WHERE CDMX.IdMutuatario = CDM.IdMutuante AND CDMX.IdMutuante = CDM.IdMutuatario
ORDER BY CDMX.IdMutuante ASC)) AS DIFERENCIA', false);
            $this->db->from('ContratosDeMutuo AS CDM');
            $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
            $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');
            $this->db->where('CDM.IdMutuante', $ID);
            $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO', 'PAGADO'));
            $this->db->group_by('CDM.IdMutuatario');
            $this->db->order_by('CDM.IdMutuante', 'ASC');
            $query = $this->db->get();
            $str = $this->db->last_query();
//            print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getSaldosByIdMutuante($ID) {
        try {  
            $query = $this->db->query("CALL SP_GETSALDOSBYIDMUTUANTE(".$ID.")"); 
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

    function getSaldoByIdMutuatarioXMutuante($ID, $IDMU) {
        try {
            $this->db->select('MU.ID AS IDMU, MUT.RazonS AS PRESTADOR, MUT.ID AS IDMUT, MU.RazonS AS EMPRESA, 0 AS ADEUDA, SUM(CDM.Saldo) AS "SE LE ADEUDA"', false);
            $this->db->from('ContratosDeMutuo AS CDM');
            $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
            $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');
            $this->db->where('CDM.IdMutuatario', $ID);
            $this->db->where('CDM.IdMutuante', $IDMU);
            $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO', 'PAGADO'));
            $this->db->group_by('CDM.IdMutuante');
            $this->db->order_by('CDM.IdMutuante', 'ASC');
            $query = $this->db->get();
            $str = $this->db->last_query();
//            print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getSaldosByIdMutuatario($ID) {
        try {
            $this->db->select('MU.ID AS IDMU, MUT.RazonS AS PRESTADOR, MUT.ID AS IDMUT, MU.RazonS AS EMPRESA, 0 AS ADEUDA, SUM(CDM.Saldo) AS "SE LE ADEUDA"', false);
            $this->db->from('ContratosDeMutuo AS CDM');
            $this->db->join('Directorio AS MU', 'CDM.IdMutuante = MU.ID');
            $this->db->join('Directorio AS MUT', 'CDM.IdMutuatario = MUT.ID');
            $this->db->where('CDM.IdMutuatario', $ID);
            $this->db->where('MU.ID NOT IN (
 SELECT MUT.ID 
FROM (`ContratosDeMutuo` AS CDM) JOIN `Directorio` AS MU 
ON `CDM`.`IdMutuante` = `MU`.`ID` JOIN `Directorio` AS MUT 
ON `CDM`.`IdMutuatario` = `MUT`.`ID` 
WHERE `CDM`.`IdMutuante` = \'' . $ID . '\' 
AND `CDM`.`ESTATUS` NOT IN (\'CANCELADA\', \'CANCELADO\',\'PAGADO\') 
GROUP BY `CDM`.`IdMutuatario` ORDER BY `CDM`.`IdMutuante` ASC
 )');
            $this->db->where_not_in('CDM.Estatus', array('CANCELADA', 'CANCELADO', 'PAGADO'));
            $this->db->group_by('CDM.IdMutuante');
            $this->db->order_by('CDM.IdMutuante', 'ASC');
            $query = $this->db->get();
            $str = $this->db->last_query();
//            print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getPagoByID($ID) {
        try {
            $this->db->select('*', false);
            $this->db->from('PagoDeContratoDeMutuo AS PDCDM');
            $this->db->where('PDCDM.ID', $ID);
            $query = $this->db->get();
            $str = $this->db->last_query();
//            print $str;
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getSaldoByID($ID) {
        try {
            $this->db->select('*', false);
            $this->db->from('ContratosDeMutuo AS CDM');
            $this->db->where('CDM.ID', $ID);
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
