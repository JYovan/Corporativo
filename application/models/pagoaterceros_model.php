<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class pagoaterceros_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select('pt.ID,pt.Unidad AS "CONCEPTO DE PAGO",pt.Concepto AS "# FACTURA",CONCAT("$",FORMAT(pt.Monto,2)) AS MONTO,PRO.Proveedor,pt.Forma AS "FORMA DE PAGO",pt.Caja AS "CAJA DE EFECTIVO",(SELECT CONCAT(C.Banco," - ",C.Titular," - ",C.NoCuenta) FROM Cuentas C WHERE C.ID = pt.IDCuentaFuente) AS "CUENTA DE INGRESO",pt.FechaPago AS "FECHA DE PAGO",pt.FechaRPago AS "FECHA DE REALIZACIÓN DEL PAGO",pt.Comprobante AS "TIPO DE COMPROBANTE",(SELECT CONCAT(U.nombre," ",U.apaterno," ",U.amaterno) FROM usuarios AS U WHERE U.Id =  pt.Emisor) AS EMISOR, pt.ReferenciaDePago AS "REFERENCIA DE PAGO", pt.Estatus', false);
            $this->db->from('PagoTerceros AS pt');
            $this->db->join('Proveedores AS PRO', 'pt.Proveedor = PRO.ID');
            $this->db->where_in('pt.Estatus', array('ACTIVO'));
            $this->db->order_by("pt.ID", "DESC");
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str; 
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFacturas() {
        try {
            $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Estatus AS ESTATUS, tfac.Folio AS FOLIO,  '
                    . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA,  DIR.NombreC AS EMPRESA, '
                    . 'tfac.ModeloNegocio AS "ACTIVIDAD", PROY.Proyecto AS PROYECTO, '
                    . 'tfac.NumeroDeContrato AS "CONTRATO", '
                    . 'PRO.Proveedor AS PROVEEDOR, '
                    . 'tfac.NumeroFactura AS "FACTURA", CONCAT("$",FORMAT(tfac.Importe, 2)) AS IMPORTE, '
                    . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                    . ' concat(IE.Nombre," ",IE.apaterno," ", IE.amaterno)AS RECEPTOR, tfac.Estatus AS ESTATUS', false);
            $this->db->from('TramiteFactura AS tfac');
            $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
            $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
            $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
            $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
            $this->db->where('tfac.Importe>0 AND tfac.Importe IS NOT NULL',NULL, false);
            $this->db->where_in('tfac.Estatus', array('EN ELABORACIÓN DE FORMA DE PAGO', 'REGISTRADA Y PAGADA'));
            $this->db->order_by("tfac.IdTramiteFactura", "DESC");
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str; 
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFacturaByID($ID) {
        try {
            $this->db->select('tfac.IdTramiteFactura AS ID, tfac.Estatus AS ESTATUS, tfac.Folio AS FOLIO,  '
                    . 'tfac.Fecha AS FECHA, tfac.Hora AS HORA,  tfac.Empresa AS EMPRESA, '
                    . 'tfac.ModeloNegocio AS "ACTIVIDAD", PROY.Proyecto AS PROYECTO, '
                    . 'tfac.NumeroDeContrato AS "CONTRATO", '
                    . 'tfac.Proveedor AS PROVEEDOR, '
                    . 'tfac.NumeroFactura AS "FACTURA", tfac.Importe AS IMPORTE, '
                    . 'tfac.OrdenDeCompraRef AS "ORDEN DE COMPRA", tfac.Observacion AS OBSERVACION, '
                    . ' concat(IE.Nombre," ",IE.apaterno," ", IE.amaterno)AS RECEPTOR, tfac.Estatus AS ESTATUS', false);
            $this->db->from('TramiteFactura AS tfac');
            $this->db->join('Directorio AS DIR', 'tfac.Empresa = DIR.ID');
            $this->db->join('Proveedores AS PRO', 'tfac.Proveedor = PRO.ID');
            $this->db->join('InformacionEmpleados AS IE', 'tfac.Receptor = IE.ID');
            $this->db->join('Proyectos AS PROY', 'tfac.Actividad = PROY.ID');
            $this->db->where('tfac.IdTramiteFactura', $ID);
            $this->db->order_by("tfac.IdTramiteFactura", "DESC");
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str; 
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getProveedores() {
        $this->db->select('*');
        $this->db->from('Proveedores');
        $query = $this->db->get();
        return $query->result();
    }

    function getEmpresas() {
        $this->db->select('*');
        $this->db->from('Directorio');
        $query = $this->db->get();
        return $query->result();
    }

    public function PagoTerceros2() {
        $Fecha = date("d/m/y");
        $indiceuser = $this->input->post('user');
        $Unidad = $this->input->post('Unidad');
        $Personal = $this->input->post('Personal');
        $Concepto = $this->input->post('Concepto');
        $Monto = $this->input->post('Monto');
        $Proveedor = $this->input->post('Proveedor');
        $Forma = $this->input->post('Forma');
        $Caja = $this->input->post('Caja');
        $FechaPago = $this->input->post('FechaPago');
        $Comprobante = $this->input->post('Comprobante');
        $datos = $this->modelo->getPagoTerceros2(
                $Unidad, $Personal, $Concepto, $Monto, $Proveedor, $Forma, $Caja, $FechaPago, $Comprobante
        );
        echo '<script>alert("Se ha registrado el pago")</script>';
//Cargando usuarios
        $where = '';

        $USUARIOS = $this->modelo->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
//Abriendo BD Cuentas

        $Cuentas = $this->modelo->getCuentasALL();
        $data['Cuentas'] = $Cuentas;
//Abriendo BD Cuentas

        $HoySaldos = $this->modelo->getHoySaldosALL($Fecha);
        $data['HoySaldos'] = $HoySaldos;
//Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Admon_4';
        $this->_renderView($data);
    }

    public function getCuentas() {
        try {
            $this->db->select('C.ID, CONCAT("TITULAR: ",C.Titular, " - BANCO: ", C.Banco," - CUENTA: ",C.NoCuenta) AS Cuenta', false);
            $this->db->from('Cuentas AS C');
            $this->db->order_by("C.ID", "ASC");
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str; 
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $this->db->select('U.Id AS ID, CONCAT(U.nombre, " ", U.apaterno, " ",U.amaterno) AS NOMBRE', false);
            $this->db->from('usuarios AS U');
            $this->db->order_by("U.Id", "ASC");
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str; 
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
