<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlVisitaYRevision extends CI_Controller {

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
    

    public function onLoadVisitaYRevision() {
        if (isset($_REQUEST)) {
            extract($_REQUEST);
            $this->load->model("VisitaYRevision_Model");
            switch ($indice) {
                case 1:
                    $data = $this->VisitaYRevision_Model->getRecords();
                    print json_encode($data);
                    break;
                case 2:
                    $data = $this->VisitaYRevision_Model->getFilterRecords();
                    print json_encode($data);
                    break;
                case 3:
                    /*
                     * INSERT RECORD GARANTIA
                     */
                    $data = array();
                    foreach ($_POST as $key => $value) {
                        $data[$key] = $value;
                    }
                    array_pop($data);
                    $IDGPV = NULL;
                    if (isset($_POST)) {
                       $data = array(
                            'IdSesion' => ($IdSesion == "" ? $uIdSesion : $IdSesion),
                            'ExistenObservaciones' => ($ExistenObservaciones === $uExistenObservaciones ? $uExistenObservaciones : $ExistenObservaciones),
                            'ObservacionesVisita' => ($ObservacionesVisita === $uObservacionesVisita ? $uObservacionesVisita : $ObservacionesVisita),
                            'Seguimiento' => ($Seguimiento === $uSeguimiento ? $uSeguimiento : $Seguimiento),
                        );
                        $IDGPV = $this->VisitaYRevision_Model->crudRecord("VisitaYRevision", $data, "save", false);
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
                    print $this->VisitaYRevision_Model->onDeleteRecord('VisitaYRevision', $ID);
                    break;
                case 5:
                    $data = $this->VisitaYRevision_Model->getRecordsJSON('Ciudad', $IdEstado);

                    print json_encode($data);
                    break;
                case 6:
                    break;
                case 7:
                    if (isset($ID)) {
                        $data = $this->VisitaYRevision_Model->getRecordsByID($ID);
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
                            'IdSesion' => ($IdSesion == "" ? $uIdSesion : $IdSesion),
                            'ExistenObservaciones' => ($ExistenObservaciones === $uExistenObservaciones ? $uExistenObservaciones : $ExistenObservaciones),
                            'ObservacionesVisita' => ($ObservacionesVisita === $uObservacionesVisita ? $uObservacionesVisita : $ObservacionesVisita),
                            'Seguimiento' => ($Seguimiento === $uSeguimiento ? $uSeguimiento : $Seguimiento),
                        );
                        $IDGPV = $this->VisitaYRevision_Model->crudRecord("VisitaYRevision", $data, "update", array('IdVisita', $IdVisita));
                    }
                    break;
                case 9:
                    //OVERUSE OF THE getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order)
                    $data = $this->VisitaYRevision_Model->getRecordsDistinct(array('Manzana AS dbvalue', 'Id AS id'), 'ProyectosViviendas', 'prv', array("Desarrollo='" . $IdDesarrollo . "'"), "Manzana", "Manzana", "ASC");
                    print json_encode($data);
                    break;
                case 10:
                    //getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order)
                    $data = $this->VisitaYRevision_Model->getRecordsDistinct(array('Lotes AS dbvalue', 'Id AS id', 'Desarrollo'), 'ProyectosViviendas', 'prv', array("Desarrollo='" . $IdDesarrollo . "'"), "Lotes", "Lotes", "ASC");
                    print json_encode($data);
                    break;
                case 11:
                    //                                   getRecordsDistinct($Columns, $Table, $Alias, $Where, $Group, $vOrder, $Order)
                    $data = $this->VisitaYRevision_Model->getRecordsDistincts(array('NumViviendas AS dbvalue', 'Id AS id', 'Desarrollo'), 'ProyectosViviendas', 'prv', array("Desarrollo='" . $IdDesarrollo . "'", "Manzana='" . $IdManzana . "'", "Lotes='" . $IdLote . "'"), "NumViviendas", "NumViviendas", "ASC");
                    print json_encode($data);
                    break;
                case 12:
                    $data = $this->VisitaYRevision_Model->getRecordsReport();
                    print json_encode($data);
                    break;
                default:
                    break;
            }
        } else {
            header('Location: ' + base_url());
        }
    }

}
