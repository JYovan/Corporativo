<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlEntregaVivienda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->folder2 = 'uploads/Tramites/';
        $this->folder3 = 'uploads/Evidencias/';
        $this->folder4 = 'uploads/Inmuebles/';
        $this->folder5 = 'uploads/Muebles/';
        $this->folder6 = 'uploads/Material/';
        $this->folder7 = 'uploads/Accidentes/';
        $this->folder8 = 'uploads/Expediente/';
        $this->folder9 = 'uploads/Nomina/';
        $this->folder10 = 'uploads/SSExpediente/';
        $this->folder11 = 'uploads/InmuebleExp/';
        $this->folder12 = 'uploads/ViviendaExp/';
        $this->folder14 = 'uploads/TramitesExp/';
    }

    /*
     * DEVUELVE UN LISTADO DE LAS POST VENTAS
     */

    public function onLoadEntregaVivienda() {
        if (isset($_REQUEST)) {
            extract($_REQUEST);
            $this->load->model("EntregaVivienda_Model");
            switch ($indice) {
                case 1:
                    $data = $this->EntregaVivienda_Model->getRecords();
                    print json_encode($data);
                    break;
                case 2:
                    $data = $this->EntregaVivienda_Model->getFilterRecords();
                    print json_encode($data);
                    break;
                case 3:
                    /*
                     * INSERT
                     */
                    var_dump($_REQUEST);
                    if (isset($_REQUEST)) {
                        extract($_REQUEST);
                        $tf = 0;
                        $data = array(
                            'FechaEntrega' => $txtFechaEntrega,
                            'ClienteRecibio' => $cmbClienteRecibio,
                            'PersonaEntrego' => $txtPersonaEntrego,
                            'IdPostVenta' => $cmbCitaPV);
                        $ID_GPV = $this->EntregaVivienda_Model->crudRecord("EntregaVivienda", $data, "save", 0);
                        $dataCVPG = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "COBERTURAS Y VIGENCIAS DE PÓLIZA DE GARANTÍAS",
                            'Entregado' => $rCVPG == "ON" ? 1 : 0,
                            'Observacion' => $txtrCVPG,
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataCVPG, "save", 0);
                        $dataPAG = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "PROCEDIMIENTO DE ATENCIÓN DE GARANTÍAS",
                            'Entregado' => $rPAG == "ON" ? 1 : 0,
                            'Observacion' => $txtrPAG
                        );

                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataPAG, "save", 0);
                        $dataGCS = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "GUÍA PARA REALIZAR SUS CONTRATOS DE SERVICIOS (AGUA, LUZ, ETC.)",
                            'Entregado' => $rGCS == "ON" ? 1 : 0,
                            'Observacion' => $txtrGCS
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataGCS, "save", 0);

                        $dataPOVSM = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "PLANO OFICIAL DE LA VIVIENDA CON SELLOS MUNICIPALES",
                            'Entregado' => $rPOVSM == "ON" ? 1 : 0,
                            'Observacion' => $txtrPOVSM
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataPOVSM, "save", 0);
                        $dataPAEIAAV = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "PLANOS ARQUITECTÓNICOS Y ESTRUCTURALES DE SU QUE INDIQUEN LAS AMPLIACIONES MÁS ADECUADAS DE LA VIVIENDA.",
                            'Entregado' => $rPAEIAAV == "ON" ? 1 : 0,
                            'Observacion' => $txtrPAEIAAV
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataPAEIAAV, "save", 0);
                        $dataMMV = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "MANUAL DE MANTENIMIENTO DE LA VIVIENDA",
                            'Entregado' => $rMMV == "ON" ? 1 : 0,
                            'Observacion' => $txtrMMV
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataMMV, "save", 0);
                        $dataAERVP = array(
                            'IdEntregaVivienda' => $ID_GPV,
                            'Documento' => "ACTA DE ENTREGA-RECEPCIÓN DE LA VIVIENDA Y PÓLIZAS",
                            'Entregado' => $rAERVP == "ON" ? 1 : 0,
                            'Observacion' => $txtrAERVP);
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $dataAERVP, "save", 0);

                        $tf += ($rPAEIAAV == "ON") ? 1 : 0;
                        $tf += ($rPOVSM == "ON") ? 1 : 0;
                        $tf += ($rCVPG == "ON") ? 1 : 0;
                        $tf += ($rPAG == "ON") ? 1 : 0;
                        $tf += ($rGCS == "ON") ? 1 : 0;
                        $tf += ($rMMV == "ON") ? 1 : 0;
                        $tf += ($rAERVP == "ON") ? 1 : 0;
                        if ($tf === 7) {
                            $data = array('Estatus' => 'ENTREGADO');
                            $this->EntregaVivienda_Model->crudRecord("EntregaVivienda", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                        }else{
                         $data = array('Estatus' => 'ACTIVO');
                            $this->EntregaVivienda_Model->crudRecord("EntregaVivienda", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                        }
                        print 1;
                    } else {
                        print 0;
                    }
                    break;

                default:
                case 4:
                    print $this->EntregaVivienda_Model->onDeleteRecord('EntregaVivienda', $ID);
                    break;
                case 5:
                    $data = $this->EntregaVivienda_Model->getRecordsJSON('ciudad', $IdEstado);

                    print json_encode($data);
                    break;
                case 6:
                    break;
                case 7:
                    $data = $this->EntregaVivienda_Model->getRecordsByID($ID);
                    print json_encode($data);
                    break;
                case 8:
//                    var_dump($_REQUEST);
                    if (isset($_REQUEST)) {
                        $tf = 0;
                        extract($_REQUEST);
                        $data = array(
                            'FechaEntrega' => $txtFechaEntrega,
                            'ClienteRecibio' => $cmbClienteRecibio,
                            'PersonaEntrego' => $txtPersonaEntrego,
                            'IdPostVenta' => $cmbCitaPV);
                        $IDGPV = $this->EntregaVivienda_Model->crudRecord("EntregaVivienda", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                        $data = array(
                            'Entregado' => $rCVPG == "ON" ? 1 : 0,
                            'Observacion' => $txtrCVPG
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDCVPG));

                        $data = array(
                            'Entregado' => $rPAG == "ON" ? 1 : 0,
                            'Observacion' => $txtrPAG
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDPAG));
                        $data = array(
                            'Entregado' => $rGCS == "ON" ? 1 : 0,
                            'Observacion' => $txtrGCS
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDGCS));
                        $data = array(
                            'Entregado' => $rPOVSM == "ON" ? 1 : 0,
                            'Observacion' => $txtrPOVSM
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDPOVSM));
                        $data = array(
                            'Entregado' => $rPAEIAAV == "ON" ? 1 : 0,
                            'Observacion' => $txtrPAEIAAV
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDPAEIAAV));
                        $data = array(
                            'Entregado' => $rMMV == "ON" ? 1 : 0,
                            'Observacion' => $txtrMMV
                        );
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDMMV));
                        $data = array(
                            'Entregado' => $rAERVP == "ON" ? 1 : 0,
                            'Observacion' => $txtrAERVP);
                        $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaViviendaDocumento', $txtIDAERVP));

                        $tf += ($rPAEIAAV == "ON") ? 1 : 0;
                        $tf += ($rPOVSM == "ON") ? 1 : 0;
                        $tf += ($rCVPG == "ON") ? 1 : 0;
                        $tf += ($rPAG == "ON") ? 1 : 0;
                        $tf += ($rGCS == "ON") ? 1 : 0;
                        $tf += ($rMMV == "ON") ? 1 : 0;
                        $tf += ($rAERVP == "ON") ? 1 : 0;
                        if ($tf === 7) {
                            $data = array('Estatus' => 'ENTREGADO');
                            $this->EntregaVivienda_Model->crudRecord("EntregaVivienda", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                            $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                            $this->EntregaVivienda_Model->crudRecord("PostVenta", $data, "update", array('IdPostVenta', $txtIDCitaPV));
                         }else{
                            $data = array('Estatus' => 'ACTIVO');
                            $this->EntregaVivienda_Model->crudRecord("EntregaVivienda", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                            $this->EntregaVivienda_Model->crudRecord("EntregaViviendaDocumento", $data, "update", array('IdEntregaVivienda', $txtIDGPV));
                            $this->EntregaVivienda_Model->crudRecord("PostVenta", $data, "update", array('IdPostVenta', $txtIDCitaPV));
                        }
                    }
                    break;
                default:
                    break;
            }
        } else {
            header('Location: ' + base_url());
        }
    }

}
