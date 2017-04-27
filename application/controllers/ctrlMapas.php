<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlMapas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("mapas_model");
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
            $this->load->view('vMapas');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    function getProyectos() {
        try {
            $data = $this->mapas_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getCoordenadasXProyecto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getCoordenadasXProyecto($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getPolygonoXDesarrollo() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getPolygonoXDesarrollo($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordsMaps() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getRecordsMaps($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getPolygonoXCasa() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getPolygonoXCasa($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDesarrollos() {
        try {
            $data = $this->mapas_model->getDesarrollos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDesarrollosXModelo() {
        try {
            $data = $this->mapas_model->getDesarrollosXModelo();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDesarrollosSCO() {
        try {
            $data = $this->mapas_model->getDesarrollosSCO();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getManzanasXDesarrollo() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getManzanasXDesarrollo($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getLotesXManzana() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getLotesXManzana($ID, $M);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumerosXLotes() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getNumerosXLotes($ID, $M, $L);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getModelosXNumeroDeVivienda() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getModelosXNumeroDeVivienda($ID, $M, $L);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTiposDeVivienda() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->getTiposDeVivienda($ID, $M, $L, $NV, $MD);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            $image = "";
            $data = array(
                'IdProyecto' => $IdProyecto,
                'Manzana' => $Manzana,
                'Lote' => $Lote,
                'ManzanaT' => $ManzanaT,
                'LoteT' => $LoteT,
                'Numero' => $Numero,
                'NumeroT' => $NumeroT,
                'Modelo' => $Modelo,
                'ModeloT' => $ModeloT,
                'Tipo' => $Tipo,
                'TipoT' => $TipoT,
                'Latitud' => $Latitud,
                'Longitud' => $Longitud,
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d-m-Y h:i:s a')),
                'Icono' => 'imagenes/house_default.png'
            );
            $ID = $this->mapas_model->onAction('CoordenadasXDesarrolloD', $data, 'save', 0);
            print 1;

            $to = "ing.giovanniflores93@gmail.com, orico09@me.com, recepcion@rabina.com.mx";
            $subject = "MENSAJE DESDE WWW.SISTEMA.RABINA.COM.MX";
            $message = "<html>
                        <head>
                        <title>ATENCIÓN</title>
                        </head>
                        <body align=\"center\">
                        <p>SE HA REGISTRADO UNA NUEVA VIVIENDA EN EL MAPA</p>
                        <p>PROYECTO: $ProyectoT</p>
                        <p>MANZANA: $ManzanaT </p>
                        <p>LOTE: $LoteT</p>
                        <p>MODELO: $ModeloT </p>
                        <p>NUMERO: $NumeroT</p>
                        <P>TIPO: $TipoT</P>
                        <p>FECHA DE REGISTRO: " . strtoupper(Date('d-m-Y h:i:s a')) . "</p>
                        </body>
                        </html>";

// Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
            $headers .= 'From: sistema@rabina.com.mx ' . "\r\n";
            mail($to, $subject, $message, $headers);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddD() {
        try {
            extract(filter_input_array(INPUT_POST));
            var_dump(filter_input_array(INPUT_POST));
            $image = "";
            $data = array(
                'IdProyecto' => $IdProyecto,
                'Latitud' => $Latitud,
                'Longitud' => $Longitud,
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d-mm-Y h:i:s a')),
                'Icono' => 'imagenes/house_default.png'
            );
//            $ID = $this->mapas_model->onAction('CoordenadasXDesarrollo', $data, 'save', 0);
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onRemove() {
        try {
            extract(filter_input_array(INPUT_POST));
            $this->mapas_model->onAction('CoordenadasXDesarrolloD', array(), 'delete', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array();
            if (isset($IdProyecto) && $IdProyecto !== '') {
                $data['IdProyecto'] = $IdProyecto;
            }
            if (isset($Manzana) && $Manzana !== '') {
                $data['Manzana'] = $Manzana;
            }
            if (isset($ManzanaT) && $ManzanaT !== '') {
                $data['ManzanaT'] = $ManzanaT;
            }
            if (isset($Lote) && $Lote !== '') {
                $data['Lote'] = $Lote;
            }
            if (isset($LoteT) && $LoteT !== '') {
                $data['LoteT'] = $LoteT;
            }
            if (isset($Numero) && $Numero !== '') {
                $data['Numero'] = $Numero;
            }
            if (isset($NumeroT) && $NumeroT !== '') {
                $data['NumeroT'] = $NumeroT;
            }
            if (isset($Modelo) && $Modelo !== '') {
                $data['Modelo'] = $Modelo;
            }
            if (isset($ModeloT) && $ModeloT !== '') {
                $data['ModeloT'] = $ModeloT;
            }
            if (isset($Tipo) && $Tipo !== '') {
                $data['Tipo'] = $Tipo;
            }
            if (isset($TipoT) && $TipoT !== '') {
                $data['TipoT'] = $TipoT;
            }
            if (isset($Latitud) && $Latitud !== '') {
                $data['Latitud'] = $Latitud;
            }
            if (isset($Longitud) && $Longitud !== '') {
                $data['Longitud'] = $Longitud;
            }
            if (count($data) > 0) {
                $this->mapas_model->onAction('CoordenadasXDesarrolloD', $data, 'update', array('ID', $ID));
            } else {
                var_dump($data);
                print 'NO SE ACTUALIZO NADA';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEntregar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->mapas_model->onEntregar($ID); 
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
