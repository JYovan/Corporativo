<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlGarantiaPostVenta extends CI_Controller {

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

    public function index() {
//        $this->load->view("vGarantiasPostVenta");
        $this->onLoadGarantiaPostVentas();
    }

    public function onLoadGarantiaPostVentas() {
        try {
            if (isset($_REQUEST)) {
                extract($_REQUEST);
                $this->load->model("GarantiaPostVenta_Model");
                if (isset($indice)) {
                    switch ($indice) {
                        case 1:
                            $data = $this->GarantiaPostVenta_Model->getRecords();
                            print json_encode($data);
                            break;
                        case 2:
                            $data = $this->GarantiaPostVenta_Model->getFilterRecords();
                            print json_encode($data);
                            break;
                        case 3:
                            /*
                             * INSERT RECORD GARANTIA
                             */
                            $IDGPV = NULL;
                            if (isset($_REQUEST)) {
                                extract($_REQUEST);

                                $data = array(
                                    'IdDesarrollo' => $IdDesarrollo,
                                    'IdManzana' => $IdManzana,
                                    'IdLote' => $IdLote,
                                    'IdVivienda' => $IdVivienda,
                                    'IdCliente' => $IdCliente,
                                    'Concepto' => $Concepto,
                                    'Dias' => $Dias,
                                    'Meses' => $Meses,
                                    'Anios' => $Anios,
                                    'FechaInicio' => $FechaInicio,
                                    'FechaTermino' => $FechaTermino,
                                );
                                $IDGPV = $this->GarantiaPostVenta_Model->crudRecord("Garantia", $data, "save", false);
                                print $IDGPV;
                            } else {
                                print 0;
                            }
                            break;

                        default:
                        case 4:
                            /*
                             * NO DELETE ONLY CHANGE STATUS AT INACTIVE RECORD GARANTIA
                             */
                            print $this->GarantiaPostVenta_Model->onDeleteRecord('Garantia', $ID);
                            break;
                        case 5:
                            $data = $this->GarantiaPostVenta_Model->getRecordsJSON('ciudad', $IdEstado);

                            print json_encode($data);
                            break;
                        case 6:
                            break;
                        case 7:
                            if (isset($ID)) {
                                $data = $this->GarantiaPostVenta_Model->getRecordsByID($ID);
                                print json_encode($data);
                            }
                            break;
                        case 8:
                            /*
                             * UPDATE RECORD GARANTIA
                             */
                            $IDGPV = NULL;
                            var_dump($_REQUEST);
                            if (isset($_REQUEST)) {
                                extract($_REQUEST);
                                $data = array(
                                    'IdDesarrollo' => $IdDesarrollo,
                                    'IdManzana' => ($IdManzana == '' ? $uIdManzana : $IdManzana),
                                    'IdLote' => ($IdLote === '' ? $uIdLote : $IdLote),
                                    'IdVivienda' => ($IdVivienda == '' ? $uIdVivienda : $IdVivienda),
                                    'IdCliente' => $IdCliente,
                                    'Concepto' => $Concepto,
                                    'Dias' => $Dias,
                                    'Meses' => $Meses,
                                    'Anios' => $Anios,
                                    'FechaInicio' => $FechaInicio,
                                    'FechaTermino' => $FechaTermino,
                                );
                                $IDGPV = $this->GarantiaPostVenta_Model->crudRecord("Garantia", $data, "update", array('IdGarantia', $IdGarantia));
                            }
                            break;
                        case 9:
                            //OVERUSE OF THE getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order)
                            $data = $this->GarantiaPostVenta_Model->getRecordsDistinct(array('Manzana AS dbvalue', 'Id AS id'), 'ProyectosViviendas', 'prv', array("Desarrollo='" . $IdDesarrollo . "'"), "Manzana", "Manzana", "ASC");
                            print json_encode($data);
                            break;
                        case 10:
                            //getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order)
                            $data = $this->GarantiaPostVenta_Model->getRecordsDistinct(array('Lotes AS dbvalue', 'Id AS id', 'Desarrollo'), 'ProyectosViviendas', 'prv', array("Desarrollo='" . $IdDesarrollo . "'"), "Lotes", "Lotes", "ASC");
                            print json_encode($data);
                            break;
                        case 11:
                            //                                   getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order)
                            $data = $this->GarantiaPostVenta_Model->getRecordsDistincts(array('NumViviendas AS dbvalue', 'Id AS id', 'Desarrollo'), 'ProyectosViviendas', 'prv', array("Desarrollo='" . $IdDesarrollo . "'", "Manzana='" . $IdManzana . "'", "Lotes='" . $IdLote . "'"), "NumViviendas", "NumViviendas", "ASC");
                            print json_encode($data);
                            break;
                        case 12:
                            $data = $this->GarantiaPostVenta_Model->getRecordsReport();
                            print json_encode($data);
                            break;
                        case 13:
                            $data = $this->GarantiaPostVenta_Model->getFilterValidateRecords();
                            print json_encode($data);
                            break;
                        case 14:
                            $data = $this->GarantiaPostVenta_Model->getFilterValidateRecordsByID($ID);
                            print json_encode($data);
                            break;
                        case 15:
                            $IDGPV = NULL;
                            if (isset($_REQUEST)) {
                                extract($_REQUEST);

                                $data = array(
                                    'IdGarantia' => $IdGarantiav,
                                    'MotivoDeValidez' => $MotivoValidez,
                                    'Validez' => $ValidezGarantia,
                                    'FechaInicioAtencion' => $FechaAtencionGarantia,
                                    'FechaTerminoAtencion' => $FechaTerminoGarantia,
                                    'Responsable' => $Responsable,
                                    'Observaciones' => $vObservaciones,
                                    'Garantia' => $vGarantiaAtendida
                                );
                                $IDGPV = $this->GarantiaPostVenta_Model->crudRecord("GarantiaValida", $data, "save", false);
                                $data = array(
                                    'Estatus' => $ValidezGarantia
                                );
                               $this->GarantiaPostVenta_Model->crudRecord("Garantia", $data, "update", array('IdGarantia', $IdGarantiav));
                             print 1;
                            } else {
                                print 0;
                            }
                            break;
                        default:
                            break;
                    }
                } else {
                    header('Location: ' + base_url());
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
