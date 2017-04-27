<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlPagoATerceros extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("pagoaterceros_model");
        $this->load->model("resource_model");
    }

    private $defaultData = array(
        'title' => 'Rabina Corporacion',
        'layout' => 'layout/lytDefault',
        'contentView' => 'vUndefined',
    );

    private function _renderView($data = array()) {
        $data = array_merge($this->defaultData, $data);
        $this->load->view($data['layout'], $data);
    }

    public function index() {
//        session_start();
//        if (isset($_SESSION["ID"])) { 
//            $data['contentView'] = 'Admon_4_2';
//            $this->_renderView($data);
//        } else { 
//            $data['contentView'] = 'vLogin';
//            $this->_renderView($data);
//        }
    }

    public function getFacturas() {
        try {
            $data = $this->pagoaterceros_model->getFacturas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFacturaByID() {
        try {
            if (isset($_POST["ID"])) {
                extract($_POST);
                $data = $this->pagoaterceros_model->getFacturaByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $data = $this->pagoaterceros_model->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresas() {
        try {
            $data = $this->pagoaterceros_model->getEmpresas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function PagoTerceros() {
        $Fecha = date("d/m/y");
        $indiceuser = $this->input->post('user');
        $PagosP = $this->input->post('PagosP');
        $Unidad = $this->input->post('Unidad');
        $Personal = $this->input->post('Personal');
        $Concepto = $this->input->post('Concepto');
        $Monto = $this->input->post('Monto');
        $Proveedor = $this->input->post('Proveedor');
        $Forma = $this->input->post('Forma');
        $Caja = $this->input->post('Caja');
        $ReferenciaC = $this->input->post('ReferenciaC');
        $CuentaFuente = $this->input->post('CuentaFuente');
        $FechaPago = $this->input->post('FechaPago');
        $FechaRPago = $this->input->post('FechaRPago');
        $Comprobante = $this->input->post('Comprobante');
        $Emisor = $this->input->post('Emisor');
        $datos = $this->modelo->getPagoTerceros(
                $Unidad, $Personal, $Concepto, $Monto, $Proveedor, $Forma, $Caja, $ReferenciaC, $CuentaFuente, $FechaPago, $FechaRPago, $Comprobante, $Emisor
        );
        $datos = $this->modelo->getFechaPagoProgramado($PagosP);
        if ($CuentaFuente != '0') {
            $HoySaldos = $this->modelo->getHoySaldosALL($Fecha);
            foreach ($HoySaldos as $HoySaldos1) {
                if ($HoySaldos1->IDCuenta == $CuentaFuente) {
                    $Saldo = $HoySaldos1->Saldo;
                    $SaldoActual = $Saldo - $Monto;
                }
            }
            $datix = $this->modelo->getRestaSaldoCuenta(
                    $SaldoActual, $CuentaFuente, $Fecha
            );
        }
        echo '<script>alert("Se ha registrado el pago")</script>';
//Cargando usuarios
        $where = '';
        $USUARIOS = $this->modelo->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        $Cuentas = $this->modelo->getCuentasALL();
        $data['Cuentas'] = $Cuentas;
        $HoySaldos = $this->modelo->getHoySaldosALL($Fecha);
        $data['HoySaldos'] = $HoySaldos;
//Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Admon_4';
        $this->_renderView($data);
    }

    public function onAddPagoATercero() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Unidad' => strtoupper($Unidad),
                'Factura' => $Factura,
                'Concepto' => strtoupper($Personal),
                'Monto' => $Monto,
                'Proveedor' => $Proveedor,
                'Forma' => strtoupper($Forma),
                'Caja' => $Caja,
                'IDCuentaFuente' => $CuentaFuente,
                'FechaPago' => $FechaPago,
                'FechaRPago' => $FechaRPago,
                'Comprobante' => strtoupper($Comprobante),
                'Emisor' => $Emisor,
                'ReferenciaDePago' => strtoupper($ReferenciaC)
            );
            $this->resource_model->onAction('PagoTerceros', $data, "save", 0);
            $data = array(
                'Estatus' => 'PAGADA',
            );
            $this->resource_model->onAction('TramiteFactura', $data, "update", array('IdTramiteFactura', $Factura));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->pagoaterceros_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getCuentas() {
        try {
            $data = $this->pagoaterceros_model->getCuentas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getUsuarios() {
        try {
            $data = $this->pagoaterceros_model->getUsuarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
