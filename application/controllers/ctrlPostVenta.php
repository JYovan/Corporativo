<?php
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlPostVenta extends CI_Controller {

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

    private $defaultData = array(
        'title' => 'Rabina Corporacion',
        'layout' => 'layout/lytDefault',
        'contentView' => 'vUndefined',
    );

    private function _renderView($data = array()) {
        $data = array_merge($this->defaultData, $data);
        $this->load->view($data['layout'], $data);
    }

    public function removeCache() {
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=<?php echo base_url(); ?>"> 
        <?php
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
        if ($this->input->get('ID')!= null) {
            $this->onLoadMenu();
        }
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data); 
                
        }
    }

    private function onLoadMenu() {
        $MENU = $this->input->get('ID');
        $indiceuser = $this->input->get('i');
        extract($_REQUEST);
        $where = '';
        $this->load->model("modelo");
        $USUARIOS = $this->modelo->getUSUARIOSALL($where);
        $lEstados = $this->modelo->getEstado2();
        $lClientes = $this->modelo->getClientes();
        $Proyectos = $this->modelo->getProyectosAll();
        switch ($mnuID) {
            case 0:
                $data['USUARIOS'] = $USUARIOS;
                $data['lEstados'] = $lEstados;
                $data['lClientes'] = $lClientes;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['ctrlscripts'] = array('ctrlEPostVenta');
                $data['contentView'] = 'vPostVenta';
                $this->_renderView($data);
                break;
            case 1:
                $data['USUARIOS'] = $USUARIOS;
                $data['lEstados'] = $lEstados;
                $data['lClientes'] = $lClientes;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['ctrlscripts'] = array('ctrlEntregaVivienda');
                $data['contentView'] = 'vEntregaVivienda';
                $this->_renderView($data);
                break;
            case 2:
                $data['Desarrollos'] = $Proyectos;
                $data['USUARIOS'] = $USUARIOS;
                $data['lEstados'] = $lEstados;
                $data['lClientes'] = $lClientes;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['ctrlscripts'] = array('ctrlGarantias');
                $data['contentView'] = 'vGarantiasPostVenta';
                $this->_renderView($data);
                break;
            case 3:
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['ctrlscripts'] = array('ctrlVisitaYRevision');
                $data['contentView'] = 'vVisitaYRevision';
                $this->_renderView($data);
                break;
            case 4:
                break;
            case 5:
                break;
            case 6:
                $data['Desarrollos'] = $Proyectos;
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['ctrlscripts'] = array('ctrlQuejasComentarios');
                $data['contentView'] = 'vQuejasYComentarios';
                $this->_renderView($data);
                break; 
            default:
                break;
        }
    }

    /*
     * DEVUELVE UN LISTADO DE LAS POST VENTAS
     */

    public function onLoadPostVentas() {
        if (isset($_REQUEST)) {
            extract($_REQUEST);
            $this->load->model("PostVenta_Model");
            switch ($indice) {
                case 1:
                    $data = $this->PostVenta_Model->getRecords();
                    print json_encode($data);
                    break;
                case 2:
                    $data = $this->PostVenta_Model->getRecordsReport();
                    print json_encode($data);
                    break;
                case 3:
                    $data = $this->PostVenta_Model->getRecordsReport();
                    print json_encode($data);
                    break;

                default:
                case 4:
                    print $this->PostVenta_Model->onDeleteRecord('PostVenta', $ID);
                    break;
                case 5:
                    $data = $this->PostVenta_Model->getRecordsJSON('Ciudad', $IdEstado);
                    print json_encode($data);
                    break;
                case 6:
                    if (isset($_REQUEST)) {
                        $data = array(
                            'Actividad' => $Actividad,
                            'Fecha' => $Fecha,
                            'Descripcion' => $Descripcion,
                            'Lugar' => $Lugar,
                            'Calle' => $Calle,
                            'Numero' => $Numero,
                            'Colonia' => $Colonia,
                            'IdEstado' => $IdEstado,
                            'IdCiudad' => $IdCiudad,
                            'Duracion' => $Duracion,
                            'HoraInicio' => $HoraInicio,
                            'HoraTermino' => $HoraTermino,
                            'Participante' => $Participante,
                            'IdCliente' => $IdCliente,
                            'Otros' => $Otros,
                            'Notario' => $Notario,
                            'NumeroNotario' => $NumeroNotario,
                            'Observaciones' => $Observaciones
                        );
                        $this->PostVenta_Model->crudRecord("PostVenta", $data, "save", 0);
                        print 1;
                    } else {
                        print 0;
                    }
                    break;
                case 7:
                    if (isset($ID)) {
                        $data = $this->PostVenta_Model->getRecordsByID($ID);
                        print json_encode($data);
                    }
                    break;
                case 8:
                    if (isset($_REQUEST)) {
                        $data = array(
                            'Actividad' => $Actividad,
                            'Fecha' => $Fecha,
                            'Descripcion' => $Descripcion,
                            'Lugar' => $Lugar,
                            'Calle' => $Calle,
                            'Numero' => $Numero,
                            'Colonia' => $Colonia,
                            'IdEstado' => $IdEstado,
                            'IdCiudad' => $IdCiudad,
                            'Duracion' => $Duracion,
                            'HoraInicio' => $HoraInicio,
                            'HoraTermino' => $HoraTermino,
                            'Participante' => $Participante,
                            'IdCliente' => $IdCliente,
                            'Otros' => $Otros,
                            'Notario' => $Notario,
                            'NumeroNotario' => $NumeroNotario,
                            'Observaciones' => $Observaciones
                        );
                        $this->PostVenta_Model->crudRecord("PostVenta", $data, "update", $ID);
//                        var_dump($data);
                        print 1;
                    } else {
                        print 0;
                    }
                    break;
                case 9:
                    $data = $this->PostVenta_Model->getRecordsReportEV();
                    print json_encode($data);
                    break;
                case 10:
                    $data = $this->PostVenta_Model->getRecordsReportFE();
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
