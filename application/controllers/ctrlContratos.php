<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlContratos extends CI_Controller {

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
        $this->load->model("contratos_model");
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
            $data['scripts'] = array('cliente');
            $data['ctrlscripts'] = array('ctrlContratos');
            $data['contentView'] = 'vContratos';
            $this->_renderView($data);
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data);
        }
    }

    public function getRecords() {
        try {
            $data = $this->contratos_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->contratos_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getContratoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratantes() {
        try {
            $data = $this->contratos_model->getContratantes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTestigosContratista() {
        try {
            $data = $this->contratos_model->getTestigosContratista();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratistas() {
        try {
            $data = $this->contratos_model->getContratistas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCiudades() {
        try {
            $data = $this->contratos_model->getCiudades();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstados() {
        try {
            $data = $this->contratos_model->getEstados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDesarrollos() {
        try {
            $data = $this->contratos_model->getDesarrollos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipos() {
        try {
            $data = $this->contratos_model->getTipos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getManzanasXDesarrollo() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getManzanasXDesarrollo($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getLotesXManzana() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getLotesXManzana($ID, $M);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumerosXLotes() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getNumerosXLotes($ID, $M, $L);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getModelosXNumeroDeVivienda() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getModelosXNumeroDeVivienda($ID, $M, $L);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTiposDeVivienda() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getTiposDeVivienda($ID, $M, $L, $NV, $MD);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddContrato() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST)); 
            $data = array(
                'ContratoDeObra' => strtoupper($ENCABEZADO["ContratoDeObra"]),
                'Contratante' => ((isset($ENCABEZADO["Contratante"]) && $ENCABEZADO["Contratante"] !== '' && $ENCABEZADO["Contratante"] !== NULL) ? $ENCABEZADO["Contratante"] : NULL),
                'Contratista' => ((isset($ENCABEZADO["Contratista"]) && $ENCABEZADO["Contratista"] !== '' && $ENCABEZADO["Contratista"] !== NULL) ? $ENCABEZADO["Contratista"] : NULL),
                'NumeroTestimonioLC' => ((isset($ENCABEZADO["NumeroTestimonioLC"]) && $ENCABEZADO["NumeroTestimonioLC"] !== '' && $ENCABEZADO["NumeroTestimonioLC"] !== NULL) ? $ENCABEZADO["NumeroTestimonioLC"] : NULL),
                'FechaOtorgamientoLC' => ((isset($ENCABEZADO["FechaOtorgamientoLC"]) && $ENCABEZADO["FechaOtorgamientoLC"] !== '' && $ENCABEZADO["FechaOtorgamientoLC"] !== NULL) ? $ENCABEZADO["FechaOtorgamientoLC"] : NULL),
                'NotarioLC' => strtoupper((isset($ENCABEZADO["NotarioLC"]) && $ENCABEZADO["NotarioLC"] !== '' && $ENCABEZADO["NotarioLC"] !== NULL) ? $ENCABEZADO["NotarioLC"] : NULL),
                'NumeroNotarioLC' => ((isset($ENCABEZADO["NumeroNotarioLC"]) && $ENCABEZADO["NumeroNotarioLC"] !== '' && $ENCABEZADO["NumeroNotarioLC"] !== NULL) ? $ENCABEZADO["NumeroNotarioLC"] : NULL),
                'PartidoAdscripcionLC' => ((isset($ENCABEZADO["PartidoAdscripcionLC"]) && $ENCABEZADO["PartidoAdscripcionLC"] !== '' && $ENCABEZADO["PartidoAdscripcionLC"] !== NULL) ? $ENCABEZADO["PartidoAdscripcionLC"] : NULL),
                'NumeroTestimonioLCO' => ((isset($ENCABEZADO["NumeroTestimonioLCO"]) && $ENCABEZADO["NumeroTestimonioLCO"] !== '' && $ENCABEZADO["NumeroTestimonioLCO"] !== NULL) ? $ENCABEZADO["NumeroTestimonioLCO"] : NULL),
                'FechaOtorgamientoLCO' => (($ENCABEZADO["FechaOtorgamientoLCO"] !== '' && $ENCABEZADO["FechaOtorgamientoLCO"] !== NULL) ? $ENCABEZADO["FechaOtorgamientoLCO"] : NULL),
                'NotarioLCO' => (($ENCABEZADO["NotarioLCO"] !== '' && $ENCABEZADO["NotarioLCO"] !== NULL) ? $ENCABEZADO["NotarioLCO"] : NULL),
                'NumeroNotarioLCO' => (($ENCABEZADO["NumeroNotarioLCO"] !== '' && $ENCABEZADO["NumeroNotarioLCO"] !== NULL) ? $ENCABEZADO["NumeroNotarioLCO"] : NULL),
                'PartidoAdscripcionLCO' => (($ENCABEZADO["PartidoAdscripcionLCO"] !== '' && $ENCABEZADO["PartidoAdscripcionLCO"] !== NULL) ? $ENCABEZADO["PartidoAdscripcionLCO"] : NULL),
                'NumeroAnteIMSS' => (($ENCABEZADO["NumeroAnteIMSS"] !== '' && $ENCABEZADO["NumeroAnteIMSS"] !== NULL) ? $ENCABEZADO["NumeroAnteIMSS"] : NULL),
                'LugarDelTrabajo' => strtoupper(($ENCABEZADO["LugarDelTrabajo"] !== '' && $ENCABEZADO["LugarDelTrabajo"] !== NULL) ? $ENCABEZADO["LugarDelTrabajo"] : NULL),
                'Ciudad' => ((isset($ENCABEZADO["Ciudad"]) && $ENCABEZADO["Ciudad"] !== '' && $ENCABEZADO["Ciudad"] !== NULL) ? $ENCABEZADO["Ciudad"] : NULL),
                'Estado' => ((isset($ENCABEZADO["Estado"]) && $ENCABEZADO["Estado"] !== '' && $ENCABEZADO["Estado"] !== NULL) ? $ENCABEZADO["Estado"] : NULL),
                'DescripcionObra' => strtoupper(($ENCABEZADO["DescripcionObra"] !== '' && $ENCABEZADO["DescripcionObra"] !== NULL) ? $ENCABEZADO["DescripcionObra"] : NULL),
                'TotalViviendas' => (($ENCABEZADO["TotalViviendas"] !== '' && $ENCABEZADO["TotalViviendas"] !== NULL) ? $ENCABEZADO["TotalViviendas"] : NULL),
                'FechaInicio' => (($ENCABEZADO["FechaInicio"] !== '' && $ENCABEZADO["FechaInicio"] !== NULL) ? $ENCABEZADO["FechaInicio"] : NULL),
                'FechaTermino' => (($ENCABEZADO["FechaTermino"] !== '' && $ENCABEZADO["FechaTermino"] !== NULL) ? $ENCABEZADO["FechaTermino"] : NULL),
                'Observaciones' => strtoupper(($ENCABEZADO["Observaciones"] !== '' && $ENCABEZADO["Observaciones"] !== NULL) ? $ENCABEZADO["Observaciones"] : NULL),
                'SubTotalContrato' => ((isset($ENCABEZADO["SubTotalContrato"]) && $ENCABEZADO["SubTotalContrato"] !== '' && $ENCABEZADO["SubTotalContrato"] !== NULL) ? $ENCABEZADO["SubTotalContrato"] : NULL),
                'IVA' => ((isset($ENCABEZADO["SubTotalContrato"]) && $ENCABEZADO["SubTotalContrato"] !== '' && $ENCABEZADO["SubTotalContrato"] !== NULL) ? (($ENCABEZADO["SinIVA"] == false || $ENCABEZADO["SinIVA"] == "false") ? ($ENCABEZADO["SubTotalContrato"] * 0.16) : 0.0) : 0.0),
                'TotalContrato' => ((isset($ENCABEZADO["SubTotalContrato"]) && $ENCABEZADO["SubTotalContrato"] !== '' && $ENCABEZADO["SubTotalContrato"] !== NULL) ? (($ENCABEZADO["SinIVA"] == false || $ENCABEZADO["SinIVA"] == "false") ? ($ENCABEZADO["SubTotalContrato"] * 1.16) : $ENCABEZADO["SubTotalContrato"]) : 0.0),
                'Saldo' => ((isset($ENCABEZADO["SubTotalContrato"]) && $ENCABEZADO["SubTotalContrato"] !== '' && $ENCABEZADO["SubTotalContrato"] !== NULL) ? (($ENCABEZADO["SinIVA"] == false || $ENCABEZADO["SinIVA"] == "false") ? ($ENCABEZADO["SubTotalContrato"] * 1.16) : $ENCABEZADO["SubTotalContrato"]) : 0.0),
                'TotalEnLetra' => strtoupper(($ENCABEZADO["TotalEnLetra"] !== '' && $ENCABEZADO["TotalEnLetra"] !== NULL) ? $ENCABEZADO["TotalEnLetra"] : NULL),
                'PorcentajeAnticipo' => (($ENCABEZADO["PorcentajeAnticipo"] !== '' && $ENCABEZADO["PorcentajeAnticipo"] !== NULL) ? $ENCABEZADO["PorcentajeAnticipo"] : NULL),
                'MontoAnticipo' => (($ENCABEZADO["MontoAnticipo"] !== '' && $ENCABEZADO["MontoAnticipo"] !== NULL) ? $ENCABEZADO["MontoAnticipo"] : NULL),
                'FechaEntrgaAnticipo' => (($ENCABEZADO["FechaEntrgaAnticipo"] !== '' && $ENCABEZADO["FechaEntrgaAnticipo"] !== NULL) ? $ENCABEZADO["FechaEntrgaAnticipo"] : NULL),
                'PenalizacionXDia' => (($ENCABEZADO["PenalizacionXDia"] !== '' && $ENCABEZADO["PenalizacionXDia"] !== NULL) ? $ENCABEZADO["PenalizacionXDia"] : NULL),
                'CiudadPartido' => (($ENCABEZADO["CiudadPartido"] !== '' && $ENCABEZADO["CiudadPartido"] !== NULL) ? $ENCABEZADO["CiudadPartido"] : NULL),
                'EstadoPartido' => (($ENCABEZADO["EstadoPartido"] !== '' && $ENCABEZADO["EstadoPartido"] !== NULL) ? $ENCABEZADO["EstadoPartido"] : NULL),
                'CiudadFirma' => (($ENCABEZADO["CiudadFirma"] !== '' && $ENCABEZADO["CiudadFirma"] !== NULL) ? $ENCABEZADO["CiudadFirma"] : NULL),
                'EstadoFirma' => (($ENCABEZADO["EstadoFirma"] !== '' && $ENCABEZADO["EstadoFirma"] !== NULL) ? $ENCABEZADO["EstadoFirma"] : NULL),
                'DiaFirma' => (($ENCABEZADO["FechaFirma"] !== '' && $ENCABEZADO["FechaFirma"] !== NULL) ? $ENCABEZADO["FechaFirma"] : NULL),
                'MesFirma' => (($ENCABEZADO["FechaFirma"] !== '' && $ENCABEZADO["FechaFirma"] !== NULL) ? $ENCABEZADO["FechaFirma"] : NULL),
                'AnioFirma' => (($ENCABEZADO["FechaFirma"] !== '' && $ENCABEZADO["FechaFirma"] !== NULL) ? $ENCABEZADO["FechaFirma"] : NULL),
                'ContratanteFirma' => strtoupper(($ENCABEZADO["ContratanteFirma"] !== '' && $ENCABEZADO["ContratanteFirma"] !== NULL) ? $ENCABEZADO["ContratanteFirma"] : NULL),
                'ContratistaFirma' => strtoupper(($ENCABEZADO["ContratistaFirma"] !== '' && $ENCABEZADO["ContratistaFirma"] !== NULL) ? $ENCABEZADO["ContratistaFirma"] : NULL),
                'TestigoContratanteFirma' => ((isset($ENCABEZADO["TestigoContratanteFirma"]) && $ENCABEZADO["TestigoContratanteFirma"] !== '' && $ENCABEZADO["TestigoContratanteFirma"] !== NULL) ? $ENCABEZADO["TestigoContratanteFirma"] : NULL),
                'TestigoContratistaFirma' => ((isset($ENCABEZADO["TestigoContratistaFirma"]) && $ENCABEZADO["TestigoContratistaFirma"] !== '' && $ENCABEZADO["TestigoContratistaFirma"] !== NULL) ? $ENCABEZADO["TestigoContratistaFirma"] : NULL),
                'Registro' => Date('d/m/Y h:i:s a'),
                'RepresentanteContratante' => strtoupper(($ENCABEZADO["RepresentanteContratante"] !== '' && $ENCABEZADO["RepresentanteContratante"] !== NULL) ? $ENCABEZADO["RepresentanteContratante"] : NULL),
                'RepresentanteContratista' => strtoupper(($ENCABEZADO["RepresentanteContratista"] !== '' && $ENCABEZADO["RepresentanteContratista"] !== NULL) ? $ENCABEZADO["RepresentanteContratista"] : NULL),
                'IdProyecto' => strtoupper(($ENCABEZADO["IdProyecto"] !== '' && $ENCABEZADO["IdProyecto"] !== NULL) ? $ENCABEZADO["IdProyecto"] : NULL),
                'IdEtapa' => strtoupper(($ENCABEZADO["IdEtapa"] !== '' && $ENCABEZADO["IdEtapa"] !== NULL) ? $ENCABEZADO["IdEtapa"] : NULL),
                'TipoContratoT' => strtoupper(($ENCABEZADO["TipoContratoT"] !== '' && $ENCABEZADO["TipoContratoT"] !== NULL) ? $ENCABEZADO["TipoContratoT"] : NULL),
                'TipoContrato' => strtoupper(($ENCABEZADO["TipoContrato"] !== '' && $ENCABEZADO["TipoContrato"] !== NULL) ? $ENCABEZADO["TipoContrato"] : NULL)
            );
//            var_dump($data);
            $ID = $this->contratos_model->onAction('ContratosDeObra', $data, 'save', 0);
            /* DETALLE */
            if (isset($DETALLE)) {
                for ($index = 0; $index < count($DETALLE); $index++) {
                    $detalle = array(
                        'IdContratoDeObra' => $ID,
                        'Desarrollo' => $DETALLE[$index]["Desarrollo"],
                        'Manzana' => $DETALLE[$index]["Manzana"],
                        'Lote' => $DETALLE[$index]["Lote"],
                        'NumeroVivienda' => $DETALLE[$index]["NumeroVivienda"],
                        'NumeroViviendaT' => $DETALLE[$index]["NumeroViviendaT"],
                        'ModeloVivienda' => $DETALLE[$index]["ModeloVivienda"],
                        'ModeloViviendaT' => $DETALLE[$index]["ModeloViviendaT"],
                        'TipoVivienda' => $DETALLE[$index]["TipoVivienda"],
                        'TipoViviendaT' => $DETALLE[$index]["TipoViviendaT"],
                        'Registro' => date('d/m/Y h:i:s a')
                    );
                    /* ENCABEZADO ENLACE DETALLE */
                    $IDDETALLE = $this->contratos_model->onAction('ContratosDeObraD', $detalle, "save", 0);
                }
            }
//            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $data = $this->contratos_model->getUsuarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateContrato() {
        try {
//            var_dump(filter_input_array(INPUT_POST));
            extract(filter_input_array(INPUT_POST));

            $E = json_decode($ENCABEZADO, true);
            var_dump($E);
            print "\n\n\n";
            $data = array(
                'NumeroTestimonioLC' => ((isset($E["NumeroTestimonioLC"]) && $E["NumeroTestimonioLC"] !== '' && $E["NumeroTestimonioLC"] !== NULL) ? $E["NumeroTestimonioLC"] : NULL),
                'FechaOtorgamientoLC' => ((isset($E["FechaOtorgamientoLC"]) && $E["FechaOtorgamientoLC"] !== '' && $E["FechaOtorgamientoLC"] !== NULL) ? $E["FechaOtorgamientoLC"] : NULL),
                'NotarioLC' => strtoupper((isset($E["NotarioLC"]) && $E["NotarioLC"] !== '' && $E["NotarioLC"] !== NULL) ? $E["NotarioLC"] : NULL),
                'NumeroNotarioLC' => ((isset($E["NumeroNotarioLC"]) && $E["NumeroNotarioLC"] !== '' && $E["NumeroNotarioLC"] !== NULL) ? $E["NumeroNotarioLC"] : NULL),
                'PartidoAdscripcionLC' => ((isset($E["PartidoAdscripcionLC"]) && $E["PartidoAdscripcionLC"] !== '' && $E["PartidoAdscripcionLC"] !== NULL) ? $E["PartidoAdscripcionLC"] : NULL),
                'NumeroTestimonioLCO' => ((isset($E["NumeroTestimonioLCO"]) && $E["NumeroTestimonioLCO"] !== '' && $E["NumeroTestimonioLCO"] !== NULL) ? $E["NumeroTestimonioLCO"] : NULL),
                'FechaOtorgamientoLCO' => (($E["FechaOtorgamientoLCO"] !== '' && $E["FechaOtorgamientoLCO"] !== NULL) ? $E["FechaOtorgamientoLCO"] : NULL),
                'NotarioLCO' => (($E["NotarioLCO"] !== '' && $E["NotarioLCO"] !== NULL) ? $E["NotarioLCO"] : NULL),
                'NumeroNotarioLCO' => (($E["NumeroNotarioLCO"] !== '' && $E["NumeroNotarioLCO"] !== NULL) ? $E["NumeroNotarioLCO"] : NULL),
                'PartidoAdscripcionLCO' => (($E["PartidoAdscripcionLCO"] !== '' && $E["PartidoAdscripcionLCO"] !== NULL) ? $E["PartidoAdscripcionLCO"] : NULL),
                'NumeroAnteIMSS' => (($E["NumeroAnteIMSS"] !== '' && $E["NumeroAnteIMSS"] !== NULL) ? $E["NumeroAnteIMSS"] : NULL),
                'LugarDelTrabajo' => strtoupper(($E["LugarDelTrabajo"] !== '' && $E["LugarDelTrabajo"] !== NULL) ? $E["LugarDelTrabajo"] : NULL),
                'Ciudad' => ((isset($E["Ciudad"]) && $E["Ciudad"] !== '' && $E["Ciudad"] !== NULL) ? $E["Ciudad"] : NULL),
                'Estado' => ((isset($E["Estado"]) && $E["Estado"] !== '' && $E["Estado"] !== NULL) ? $E["Estado"] : NULL),
                'DescripcionObra' => strtoupper(($E["DescripcionObra"] !== '' && $E["DescripcionObra"] !== NULL) ? $E["DescripcionObra"] : NULL),
                'TotalViviendas' => (($E["TotalViviendas"] !== '' && $E["TotalViviendas"] !== NULL) ? $E["TotalViviendas"] : NULL),
                'FechaInicio' => (($E["FechaInicio"] !== '' && $E["FechaInicio"] !== NULL) ? $E["FechaInicio"] : NULL),
                'FechaTermino' => (($E["FechaTermino"] !== '' && $E["FechaTermino"] !== NULL) ? $E["FechaTermino"] : NULL),
                'Observaciones' => strtoupper(($E["Observaciones"] !== '' && $E["Observaciones"] !== NULL) ? $E["Observaciones"] : NULL),
                'SubTotalContrato' => ((isset($E["SubTotalContrato"]) && $E["SubTotalContrato"] !== '' && $E["SubTotalContrato"] !== NULL) ? $E["SubTotalContrato"] : NULL),
                'IVA' => (isset($E["SINIVAX"]) && $E["SINIVAX"] !== '' && $E["SINIVAX"] === 0) ? ($E["SubTotalContrato"] * 0.16) : 0.0,
                'TotalContrato' => (isset($E["SINIVAX"]) && $E["SINIVAX"] !== '' && $E["SINIVAX"] === 0) ? ($E["SubTotalContrato"] * 1.16) : $E["SubTotalContrato"],
                'Saldo' => ((isset($E["SubTotalContrato"]) && $E["SubTotalContrato"] !== '' && $E["SubTotalContrato"] !== NULL) ? ((ISSET($E["SINIVA"])) ? ($E["SubTotalContrato"] * 1.16) : $E["SubTotalContrato"]) : 0.0),
                'TotalEnLetra' => strtoupper(($E["TotalEnLetra"] !== '' && $E["TotalEnLetra"] !== NULL) ? $E["TotalEnLetra"] : NULL),
                'PorcentajeAnticipo' => (($E["PorcentajeAnticipo"] !== '' && $E["PorcentajeAnticipo"] !== NULL) ? $E["PorcentajeAnticipo"] : NULL),
                'MontoAnticipo' => (($E["MontoAnticipo"] !== '' && $E["MontoAnticipo"] !== NULL) ? $E["MontoAnticipo"] : NULL),
                'FechaEntrgaAnticipo' => (($E["FechaEntrgaAnticipo"] !== '' && $E["FechaEntrgaAnticipo"] !== NULL) ? $E["FechaEntrgaAnticipo"] : NULL),
                'PenalizacionXDia' => (($E["PenalizacionXDia"] !== '' && $E["PenalizacionXDia"] !== NULL) ? $E["PenalizacionXDia"] : NULL),
                'CiudadPartido' => (($E["CiudadPartido"] !== '' && $E["CiudadPartido"] !== NULL) ? $E["CiudadPartido"] : NULL),
                'EstadoPartido' => (($E["EstadoPartido"] !== '' && $E["EstadoPartido"] !== NULL) ? $E["EstadoPartido"] : NULL),
                'CiudadFirma' => (($E["CiudadFirma"] !== '' && $E["CiudadFirma"] !== NULL) ? $E["CiudadFirma"] : NULL),
                'EstadoFirma' => (($E["EstadoFirma"] !== '' && $E["EstadoFirma"] !== NULL) ? $E["EstadoFirma"] : NULL),
                'DiaFirma' => (($E["FechaFirma"] !== '' && $E["FechaFirma"] !== NULL) ? $E["FechaFirma"] : NULL),
                'MesFirma' => (($E["FechaFirma"] !== '' && $E["FechaFirma"] !== NULL) ? $E["FechaFirma"] : NULL),
                'AnioFirma' => (($E["FechaFirma"] !== '' && $E["FechaFirma"] !== NULL) ? $E["FechaFirma"] : NULL),
                'ContratanteFirma' => strtoupper(($E["ContratanteFirma"] !== '' && $E["ContratanteFirma"] !== NULL) ? $E["ContratanteFirma"] : NULL),
                'ContratistaFirma' => strtoupper(($E["ContratistaFirma"] !== '' && $E["ContratistaFirma"] !== NULL) ? $E["ContratistaFirma"] : NULL),
                'TestigoContratanteFirma' => ((isset($E["TestigoContratanteFirma"]) && $E["TestigoContratanteFirma"] !== '' && $E["TestigoContratanteFirma"] !== NULL) ? strtoupper($E["TestigoContratanteFirma"]) : NULL),
                'TestigoContratistaFirma' => ((isset($E["TestigoContratistaFirma"]) && $E["TestigoContratistaFirma"] !== '' && $E["TestigoContratistaFirma"] !== NULL) ? $E["TestigoContratistaFirma"] : NULL),
                'Registro' => Date('d/m/Y h:i:s a')
            );

            if (isset($E["RepresentanteContratista"]) && $E["RepresentanteContratista"] !== '' && $E["RepresentanteContratista"] !== NULL) {
                $data['RepresentanteContratista'] = $E["RepresentanteContratista"];
            }

            if (isset($E["RepresentanteContratante"]) && $E["RepresentanteContratante"] !== '' && $E["RepresentanteContratante"] !== NULL) {
                $data['RepresentanteContratante'] = $E["RepresentanteContratante"];
            }
            if (isset($E["IdEtapa"]) && $E["IdEtapa"] !== '' && $E["IdEtapa"] !== NULL) {
                $data['IdEtapa'] = $E["IdEtapa"];
            }
            if (isset($E["TipoContrato"]) && $E["TipoContrato"] !== '' && $E["TipoContrato"] !== NULL) {
                $data['TipoContrato'] = $E["TipoContrato"];
                $data['TipoContratoT'] = $E["TipoContratoT"];
            }
            if (isset($E["IdProyecto"]) && $E["IdProyecto"] !== '' && $E["IdProyecto"] !== NULL) {
                $data['IdProyecto'] = $E["IdProyecto"];
            }
            if (isset($E["Contratante"]) && $E["Contratante"] !== '' && $E["Contratante"] !== NULL) {
                $data['Contratante'] = $E["Contratante"];
            }
            if (isset($E["Contratista"]) && $E["Contratista"] !== '' && $E["Contratista"] !== NULL) {
                $data['Contratista'] = $E["Contratista"];
            }
            if (isset($E["ContratoDeObra"]) && $E["ContratoDeObra"] !== '' && $E["ContratoDeObra"] !== NULL) {
                $data['ContratoDeObra'] = $E["ContratoDeObra"];
            }
            $this->contratos_model->onAction('ContratosDeObra', $data, 'update', array('ID', $E["ID"]));

            print "\n\n\n";
            print "DETALLE";
            $D = json_decode($DETALLE, true);
//            var_dump($D);
//            print $D[0]["IdContratoDeObra"];

            /* DETALLE */
            if (isset($D)) {
                $dtm = $this->contratos_model->getContratosDeObraDByIDE($E["ID"]);
                $data = array('Estatus' => 'INACTIVO');
                $this->contratos_model->onAction('ContratosDeObraD', $data, 'update', array('IdContratoDeObra', $E["ID"]));
                for ($index = 0; $index < count($D); $index++) {
                    foreach ($dtm as $k => $v) {
                        if ($D[$index]["Desarrollo"] === $v->Desarrollo && $D[$index]["Manzana"] === $v->Manzana &&
                                $D[$index]["Lote"] === $v->Lote && $D[$index]["NumeroViviendaT"] === $v->NumeroViviendaT && $D[$index]["Estatus"] !== "NUEVO") {
                            $data = array('Estatus' => 'ACTIVO');
                            $this->contratos_model->onAction('ContratosDeObraD', $data, 'update', array('ID', $v->ID));
                            break;
                        }
                    }
                    if ($D[$index]["Estatus"] == "NUEVO") {
                        $D = array(
                            'IdContratoDeObra' => $E["ID"],
                            'Desarrollo' => $D[$index]["Desarrollo"],
                            'Manzana' => $D[$index]["Manzana"],
                            'Lote' => $D[$index]["Lote"],
                            'NumeroVivienda' => $D[$index]["NumeroVivienda"],
                            'NumeroViviendaT' => $D[$index]["NumeroViviendaT"],
                            'ModeloVivienda' => $D[$index]["ModeloVivienda"],
                            'ModeloViviendaT' => $D[$index]["ModeloViviendaT"],
                            'TipoVivienda' => $D[$index]["TipoVivienda"],
                            'TipoViviendaT' => $D[$index]["TipoViviendaT"],
                            'Registro' => date('d/m/Y h:i:s a'),
                            'Estatus' => "ACTIVO"
                        );
                        print "* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ";
                        print_r($D);
                        print "* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ";
                        $this->contratos_model->onAction('ContratosDeObraD', $D, "save", 0);
                    }
                }
            }
            /*             * ARCHIVO* */
            print "\n\n\n";
            if (isset($_FILES["RDocumentoFileD"]["name"]) && strlen($_FILES["RDocumentoFileD"]["name"]) > 1) {
                $img = base_url() . 'uploads/ContratosDeObra/Scan/' . $_FILES["RDocumentoFileD"]["name"];
                if (!file_exists('uploads/ContratosDeObra/Scan')) {
                    mkdir('uploads/ContratosDeObra/Scan', 0777, true);
                }
                if (move_uploaded_file($_FILES["RDocumentoFileD"]["tmp_name"], 'uploads/ContratosDeObra/Scan/' . $_FILES["RDocumentoFileD"]["name"])) {
                    echo "El fichero es válido y se subió con éxito.\n";
                } else {
                    echo "¡Posible ataque de subida de ficheros!\n";
                }
                $data = array('rDocumento' => $img);
                $this->contratos_model->onAction('ContratosDeObra', $data, 'update', array('ID', $E["ID"]));
                /*                 * FIN ARCHIVO* */
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratosDeObraDByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->contratos_model->getContratosDeObraDByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarContrato() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus'=>'CANCELADO'
            );
            $this->contratos_model->onAction('ContratosDeObra', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
