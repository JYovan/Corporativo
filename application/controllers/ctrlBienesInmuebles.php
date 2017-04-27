<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

class ctrlBienesInmuebles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("bienesinmuebles_model");
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
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vBienesInmuebles');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    public function getRecords() {
        try {
            $data = $this->bienesinmuebles_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->bienesinmuebles_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExpedientesXInmuebleByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->bienesinmuebles_model->getExpedientesXInmuebleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExpedientesXInmueble() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->bienesinmuebles_model->getExpedientesXInmueble($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExpedientesXInmuebles() {
        try {
            $data = $this->bienesinmuebles_model->getExpedientesXInmuebles();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInmueblesTipo() {
        try {
            $data = $this->bienesinmuebles_model->getInmueblesTipo();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getBienesInmuebles() {
        try {
            $data = $this->bienesinmuebles_model->getBienesInmuebles();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCompradores() {
        try {
            $data = $this->bienesinmuebles_model->getCompradores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReferenciadosTipo() {
        try {
            $data = $this->bienesinmuebles_model->getReferenciadosTipo();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Propietario' => (isset($Propietario) && $Propietario !== '') ? strtoupper($Propietario) : NULL,
                'RFC' => (isset($RFC) && $RFC !== '') ? strtoupper($RFC) : NULL,
                'IFE' => (isset($IFE) && $IFE !== '') ? strtoupper($IFE) : NULL,
                'Calle1' => (isset($Calle1) && $Calle1 !== '') ? strtoupper($Calle1) : NULL,
                'Colonia1' => (isset($Colonia1) && $Colonia1 !== '') ? strtoupper($Colonia1) : NULL,
                'Numero1' => (isset($Numero1) && $Numero1 !== '') ? strtoupper($Numero1) : NULL,
                'Estado1' => (isset($Estado1) && $Estado1 !== '') ? strtoupper($Estado1) : NULL,
                'Municipio1' => (isset($Municipio1) && $Municipio1 !== '') ? strtoupper($Municipio1) : NULL,
                'Comunidad1' => (isset($Comunidad1) && $Comunidad1 !== '') ? strtoupper($Comunidad1) : NULL,
                'CP1' => (isset($CP1) && $CP1 !== '') ? strtoupper($CP1) : NULL,
                'Tel1' => (isset($Tel1) && $Tel1 !== '') ? strtoupper($Tel1) : NULL,
                'Correo1' => (isset($Correo1) && $Correo1 !== '') ? strtoupper($Correo1) : NULL,
                'Vendedor' => (isset($Vendedor) && $Vendedor !== '') ? strtoupper($Vendedor) : NULL,
                'RFC2' => (isset($RFC2) && $RFC2 !== '') ? strtoupper($RFC2) : NULL,
                'IFE2' => (isset($IFE2) && $IFE2 !== '') ? strtoupper($IFE2) : NULL,
                'Calle2' => (isset($Calle2) && $Calle2 !== '') ? strtoupper($Calle2) : NULL,
                'Colonia2' => (isset($Colonia2) && $Colonia2 !== '') ? strtoupper($Colonia2) : NULL,
                'Numero2' => (isset($Numero2) && $Numero2 !== '') ? strtoupper($Numero2) : NULL,
                'Estado2' => (isset($Estado2) && $Estado2 !== '') ? strtoupper($Estado2) : NULL,
                'Municipio2' => (isset($Municipio2) && $Municipio2 !== '') ? strtoupper($Municipio2) : NULL,
                'Comunidad2' => (isset($Comunidad2) && $Comunidad2 !== '') ? strtoupper($Comunidad2) : NULL,
                'CP2' => (isset($CP2) && $CP2 !== '') ? strtoupper($CP2) : NULL,
                'Tel2' => (isset($Tel2) && $Tel2 !== '') ? strtoupper($Tel2) : NULL,
                'Correo2' => (isset($Correo2) && $Correo2 !== '') ? strtoupper($Correo2) : NULL,
                'Tinmueble' => (isset($Tinmueble) && $Tinmueble !== '') ? strtoupper($Tinmueble) : NULL,
                'Ubicacion' => (isset($Ubicacion) && $Ubicacion !== '') ? strtoupper($Ubicacion) : NULL,
                'Norte' => (isset($Norte) && $Norte !== '') ? strtoupper($Norte) : NULL,
                'Sur' => (isset($Sur) && $Sur !== '') ? strtoupper($Sur) : NULL,
                'Este' => (isset($Este) && $Este !== '') ? strtoupper($Este) : NULL,
                'Oeste' => (isset($Oeste) && $Oeste !== '') ? strtoupper($Oeste) : NULL,
                'Noreste' => (isset($Noreste) && $Noreste !== '') ? strtoupper($Noreste) : NULL,
                'Sureste' => (isset($Sureste) && $Sureste !== '') ? strtoupper($Sureste) : NULL,
                'Noroeste' => (isset($Noroeste) && $Noroeste !== '') ? strtoupper($Noroeste) : NULL,
                'Suroeste' => (isset($Suroeste) && $Suroeste !== '') ? strtoupper($Suroeste) : NULL,
                'Terreno' => (isset($Terreno) && $Terreno !== '') ? strtoupper($Terreno) : NULL,
                'Construido' => (isset($Construido) && $Construido !== '') ? strtoupper($Construido) : NULL,
                'Servidumbres' => (isset($Construido) && $Construido !== '') ? strtoupper($Construido) : NULL,
                'Gravamenes' => (isset($Gravamenes) && $Gravamenes !== '') ? strtoupper($Gravamenes) : NULL,
                'Otras' => (isset($Otras) && $Otras !== '') ? strtoupper($Otras) : NULL,
                'Valor' => (isset($Valor) && $Valor !== '') ? strtoupper($Valor) : NULL,
                'Vventa' => (isset($Vventa) && $Vventa !== '') ? strtoupper($Vventa) : NULL,
                'Tomo' => (isset($Tomo) && $Tomo !== '') ? strtoupper($Tomo) : NULL,
                'Libro' => (isset($Libro) && $Libro !== '') ? strtoupper($Libro) : NULL,
                'Seccion' => (isset($Seccion) && $Seccion !== '') ? strtoupper($Seccion) : NULL,
                'Folio' => (isset($Folio) && $Folio !== '') ? strtoupper($Folio) : NULL,
                'Numeral' => (isset($Numeral) && $Numeral !== '') ? strtoupper($Numeral) : NULL,
                'Notario' => (isset($Notario) && $Notario !== '') ? strtoupper($Notario) : NULL,
                'Nnotario' => (isset($Nnotario) && $Nnotario !== '') ? strtoupper($Nnotario) : NULL,
                'Partido' => (isset($Partido) && $Partido !== '') ? strtoupper($Partido) : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $this->resource_model->onAction('Inmuebleregistro', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Propietario' => (isset($Propietario) && $Propietario !== '') ? strtoupper($Propietario) : NULL,
                'RFC' => (isset($RFC) && $RFC !== '') ? strtoupper($RFC) : NULL,
                'IFE' => (isset($IFE) && $IFE !== '') ? strtoupper($IFE) : NULL,
                'Calle1' => (isset($Calle1) && $Calle1 !== '') ? strtoupper($Calle1) : NULL,
                'Colonia1' => (isset($Colonia1) && $Colonia1 !== '') ? strtoupper($Colonia1) : NULL,
                'Numero1' => (isset($Numero1) && $Numero1 !== '') ? strtoupper($Numero1) : NULL,
                'Estado1' => (isset($Estado1) && $Estado1 !== '') ? strtoupper($Estado1) : NULL,
                'Municipio1' => (isset($Municipio1) && $Municipio1 !== '') ? strtoupper($Municipio1) : NULL,
                'Comunidad1' => (isset($Comunidad1) && $Comunidad1 !== '') ? strtoupper($Comunidad1) : NULL,
                'CP1' => (isset($CP1) && $CP1 !== '') ? strtoupper($CP1) : NULL,
                'Tel1' => (isset($Tel1) && $Tel1 !== '') ? strtoupper($Tel1) : NULL,
                'Correo1' => (isset($Correo1) && $Correo1 !== '') ? strtoupper($Correo1) : NULL,
                'Vendedor' => (isset($Vendedor) && $Vendedor !== '') ? strtoupper($Vendedor) : NULL,
                'RFC2' => (isset($RFC2) && $RFC2 !== '') ? strtoupper($RFC2) : NULL,
                'IFE2' => (isset($IFE2) && $IFE2 !== '') ? strtoupper($IFE2) : NULL,
                'Calle2' => (isset($Calle2) && $Calle2 !== '') ? strtoupper($Calle2) : NULL,
                'Colonia2' => (isset($Colonia2) && $Colonia2 !== '') ? strtoupper($Colonia2) : NULL,
                'Numero2' => (isset($Numero2) && $Numero2 !== '') ? strtoupper($Numero2) : NULL,
                'Estado2' => (isset($Estado2) && $Estado2 !== '') ? strtoupper($Estado2) : NULL,
                'Municipio2' => (isset($Municipio2) && $Municipio2 !== '') ? strtoupper($Municipio2) : NULL,
                'Comunidad2' => (isset($Comunidad2) && $Comunidad2 !== '') ? strtoupper($Comunidad2) : NULL,
                'CP2' => (isset($CP2) && $CP2 !== '') ? strtoupper($CP2) : NULL,
                'Tel2' => (isset($Tel2) && $Tel2 !== '') ? strtoupper($Tel2) : NULL,
                'Correo2' => (isset($Correo2) && $Correo2 !== '') ? strtoupper($Correo2) : NULL,
                'Tinmueble' => (isset($Tinmueble) && $Tinmueble !== '') ? strtoupper($Tinmueble) : NULL,
                'Ubicacion' => (isset($Ubicacion) && $Ubicacion !== '') ? strtoupper($Ubicacion) : NULL,
                'Norte' => (isset($Norte) && $Norte !== '') ? strtoupper($Norte) : NULL,
                'Sur' => (isset($Sur) && $Sur !== '') ? strtoupper($Sur) : NULL,
                'Este' => (isset($Este) && $Este !== '') ? strtoupper($Este) : NULL,
                'Oeste' => (isset($Oeste) && $Oeste !== '') ? strtoupper($Oeste) : NULL,
                'Noreste' => (isset($Noreste) && $Noreste !== '') ? strtoupper($Noreste) : NULL,
                'Sureste' => (isset($Sureste) && $Sureste !== '') ? strtoupper($Sureste) : NULL,
                'Noroeste' => (isset($Noroeste) && $Noroeste !== '') ? strtoupper($Noroeste) : NULL,
                'Suroeste' => (isset($Suroeste) && $Suroeste !== '') ? strtoupper($Suroeste) : NULL,
                'Terreno' => (isset($Terreno) && $Terreno !== '') ? strtoupper($Terreno) : NULL,
                'Construido' => (isset($Construido) && $Construido !== '') ? strtoupper($Construido) : NULL,
                'Servidumbres' => (isset($Construido) && $Construido !== '') ? strtoupper($Construido) : NULL,
                'Gravamenes' => (isset($Gravamenes) && $Gravamenes !== '') ? strtoupper($Gravamenes) : NULL,
                'Otras' => (isset($Otras) && $Otras !== '') ? strtoupper($Otras) : NULL,
                'Valor' => (isset($Valor) && $Valor !== '') ? strtoupper($Valor) : NULL,
                'Vventa' => (isset($Vventa) && $Vventa !== '') ? strtoupper($Vventa) : NULL,
                'Tomo' => (isset($Tomo) && $Tomo !== '') ? strtoupper($Tomo) : NULL,
                'Libro' => (isset($Libro) && $Libro !== '') ? strtoupper($Libro) : NULL,
                'Seccion' => (isset($Seccion) && $Seccion !== '') ? strtoupper($Seccion) : NULL,
                'Folio' => (isset($Folio) && $Folio !== '') ? strtoupper($Folio) : NULL,
                'Numeral' => (isset($Numeral) && $Numeral !== '') ? strtoupper($Numeral) : NULL,
                'Notario' => (isset($Notario) && $Notario !== '') ? strtoupper($Notario) : NULL,
                'Nnotario' => (isset($Nnotario) && $Nnotario !== '') ? strtoupper($Nnotario) : NULL,
                'Partido' => (isset($Partido) && $Partido !== '') ? strtoupper($Partido) : NULL
            );
            $this->resource_model->onAction('Inmuebleregistro', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddCompraVenta() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Notario2' => (isset($Notario2) && $Notario2 !== '') ? strtoupper($Notario2) : NULL,
                'Nnotario2' => (isset($Nnotario2) && $Nnotario2 !== '') ? strtoupper($Nnotario2) : NULL,
                'Partido2' => (isset($Partido2) && $Partido2 !== '') ? strtoupper($Partido2) : NULL,
                'Comprador' => (isset($Comprador) && $Comprador !== '') ? strtoupper($Comprador) : NULL,
                'FechaCompraVenta' => (isset($FechaCompraVenta) && $FechaCompraVenta !== '') ? strtoupper($FechaCompraVenta) : NULL,
                'Monto' => (isset($Monto) && $Monto !== '') ? strtoupper($Monto) : NULL,
                'Modalidad' => (isset($Modalidad) && $Modalidad !== '') ? strtoupper($Modalidad) : NULL,
                'FormaPago' => (isset($FormaPago) && $FormaPago !== '') ? strtoupper($FormaPago) : NULL,
                'Impuestos' => (isset($Impuestos) && $Impuestos !== '') ? strtoupper($Impuestos) : NULL,
                'GastosRegistrales' => (isset($GastosRegistrales) && $GastosRegistrales !== '') ? strtoupper($GastosRegistrales) : NULL,
                'GastosNotariales' => (isset($GastosNotariales) && $GastosNotariales !== '') ? strtoupper($GastosNotariales) : NULL,
                'FechaLugarEntrega' => (isset($FechaLugarEntrega) && $FechaLugarEntrega !== '') ? strtoupper($FechaLugarEntrega) : NULL,
                'Estatus' => 'VENDIDO'
            );
            $this->resource_model->onAction('Inmuebleregistro', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onFideicomiso() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Fideicomitente' => (isset($Fideicomitente) && $Fideicomitente !== '') ? strtoupper($Fideicomitente) : NULL,
                'Fiduciario' => (isset($Fiduciario) && $Fiduciario !== '') ? strtoupper($Fiduciario) : NULL,
                'Fideicomisario' => (isset($Fideicomisario) && $Fideicomisario !== '') ? strtoupper($Fideicomisario) : NULL,
                'Delegados' => (isset($Delegados) && $Delegados !== '') ? strtoupper($Delegados) : NULL,
                'Depositario' => (isset($Depositario) && $Depositario !== '') ? strtoupper($Depositario) : NULL,
                'Acto' => (isset($Acto) && $Acto !== '') ? strtoupper($Acto) : NULL,
                'Tomo2' => (isset($Tomo2) && $Tomo2 !== '') ? strtoupper($Tomo2) : NULL,
                'Numero' => (isset($Numero) && $Numero !== '') ? strtoupper($Numero) : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? strtoupper($Fecha) : NULL,
                'Contrato' => (isset($Contrato) && $Contrato !== '') ? strtoupper($Contrato) : NULL
            );
            $this->resource_model->onAction('Inmuebleregistro', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddExpediente() {
        try {
            extract(filter_input_array(INPUT_POST));
            $URL_DOC = 'uploads/InmuebleExp';
            $master_url = base_url() . $URL_DOC . '/';
            $F = $_FILES;
            $data = array(
                'Inmueble' => $ID,
                'InmuebleT' => $INMUEBLE,
                'TDocumento' => $TDocumento,
                'DocumentoT' => ($DOCUMENTO),
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper($Observaciones) : NULL,
                'Nombre' => ($F["RDocumentoFileD"]["name"]),
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $IDIEXP = $this->resource_model->onAction('InmuebleExp', $data, 'save', 0);

            if (isset($_FILES["RDocumentoFileD"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDIEXP . '/' . $DOCUMENTO))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDIEXP . '/' . $DOCUMENTO), 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], $URL_DOC . '/' . $IDIEXP . '/' . utf8_decode($DOCUMENTO) . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"]))) {
//                echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !"; 
                    $img = $master_url . $IDIEXP . '/' . $DOCUMENTO . '/' . $_FILES["RDocumentoFileD"]["name"];
                    $data = array(
                        'rDocumento' => ($img)
                    );
                    $this->resource_model->onAction('InmuebleExp', $data, 'update', array('ID', $IDIEXP));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateExpediente() {
        try {
            extract(filter_input_array(INPUT_POST));
            $URL_DOC = 'uploads/InmuebleExp';
            $master_url = base_url() . $URL_DOC . '/';
            $F = $_FILES;
            $data = array(
                'Inmueble' => $ID,
                'InmuebleT' => utf8_decode($INMUEBLE),
                'TDocumento' => $TDocumento,
                'DocumentoT' => utf8_decode($DOCUMENTO),
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper(utf8_decode($Observaciones)) : NULL
            );
            $this->resource_model->onAction('InmuebleExp', $data, 'update', array('ID', $IDEXP));
            if (isset($_FILES["RDocumentoFileD"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $IDIEXP . '/' . $DOCUMENTO))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $IDIEXP . '/' . $DOCUMENTO), 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], utf8_decode($URL_DOC . '/' . $IDIEXP . '/' . $DOCUMENTO . '/' . utf8_decode($_FILES["RDocumentoFileD"]["name"])))) {
                    $img = $master_url . $IDIEXP . '/' . $DOCUMENTO . '/' . $_FILES["RDocumentoFileD"]["name"];
                    $data = array(
                        'Nombre' => utf8_decode($F["RDocumentoFileD"]["name"]),
                        'rDocumento' => utf8_decode($img)
                    );
                    $this->resource_model->onAction('InmuebleExp', $data, 'update', array('ID', $IDEXP));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarExpediente() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->resource_model->onAction('InmuebleExp', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onCancelar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->resource_model->onAction('Inmuebleregistro', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
