<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

class ctrlDesarrollosInmobiliarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("desarrollosinmobiliarios_model");
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
        $this->load->view('layout/base/lytBaseHead');
        $this->load->view('vDesarrollosInmobiliarios');
        $this->load->view('layout/base/lytBaseFoot');
    }

    public function getRecords() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->desarrollosinmobiliarios_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getModelosDeNegocio() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getModelosDeNegocio();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInmuebleRegistro() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getInmuebleRegistro();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSembradoDeManzanas() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getSembradoDeManzanas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSembradoDeLotes() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getSembradoDeLotes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getModelosDeViviendas() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getModelosDeViviendas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getViviendasPrototipos() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getViviendasPrototipos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSembradoDeViviendas() {
        try {
            $data = $this->desarrollosinmobiliarios_model->getSembradoDeViviendas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSeccionesXProyecto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->desarrollosinmobiliarios_model->getSeccionesXProyecto($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getManzanasXProyecto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->desarrollosinmobiliarios_model->getManzanasXProyecto($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipoLoteXProyectoYManzana() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->desarrollosinmobiliarios_model->getTipoLoteXProyectoYManzana($ID, $MANZANA);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyecto' => (isset($Proyecto) && $Proyecto !== NULL && $Proyecto !== '') ? strtoupper($Proyecto) : '',
                'Modelo' => (isset($Modelo) && $Modelo !== NULL && $Modelo !== '') ? $Modelo : 0,
                'Inmueble' => (isset($Inmueble) && $Inmueble !== NULL && $Inmueble !== '') ? $Inmueble : 0,
                'SegmentoD' => (isset($SegmentoD) && $SegmentoD !== NULL && $SegmentoD !== '') ? strtoupper($SegmentoD) : '',
                'SuperficieT' => (isset($SuperficieT) && $SuperficieT !== NULL && $SuperficieT !== '') ? $SuperficieT : 0,
                'SeccionD' => (isset($SeccionD) && $SeccionD !== NULL && $SeccionD !== '') ? $SeccionD : 0,
                'NumeroViviendas' => (isset($NumeroViviendas) && $NumeroViviendas !== NULL && $NumeroViviendas !== '') ? $NumeroViviendas : 0,
                'Finicio' => (isset($Finicio) && $Finicio !== NULL && $Finicio !== '') ? $Finicio : '',
                'Ftermino' => (isset($Ftermino) && $Ftermino !== NULL && $Ftermino !== '') ? $Ftermino : '',
                'Calle' => (isset($Calle) && $Calle !== NULL && $Calle !== '') ? strtoupper($Calle) : '',
                'No' => (isset($No) && $No !== NULL && $No !== '') ? $No : 0,
                'Colonia' => (isset($Colonia) && $Colonia !== NULL && $Colonia !== '') ? $Colonia : '',
                'Tipo' => (isset($Tipo) && $Tipo !== NULL && $Tipo !== '') ? strtoupper($Tipo) : '',
                'Registro' => Date("d/m/Y h:i:s a")
            );
            $this->resource_model->onAction('Proyectos', $data, 'save', 0);
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyecto' => (isset($Proyecto) && $Proyecto !== NULL && $Proyecto !== '') ? strtoupper($Proyecto) : '',
                'Modelo' => (isset($Modelo) && $Modelo !== NULL && $Modelo !== '') ? $Modelo : 0,
                'Inmueble' => (isset($Inmueble) && $Inmueble !== NULL && $Inmueble !== '') ? $Inmueble : 0,
                'SegmentoD' => (isset($SegmentoD) && $SegmentoD !== NULL && $SegmentoD !== '') ? strtoupper($SegmentoD) : '',
                'SuperficieT' => (isset($SuperficieT) && $SuperficieT !== NULL && $SuperficieT !== '') ? $SuperficieT : 0,
                'SeccionD' => (isset($SeccionD) && $SeccionD !== NULL && $SeccionD !== '') ? $SeccionD : 0,
                'NumeroViviendas' => (isset($NumeroViviendas) && $NumeroViviendas !== NULL && $NumeroViviendas !== '') ? $NumeroViviendas : 0,
                'Finicio' => (isset($Finicio) && $Finicio !== NULL && $Finicio !== '') ? $Finicio : '',
                'Ftermino' => (isset($Ftermino) && $Ftermino !== NULL && $Ftermino !== '') ? $Ftermino : '',
                'Calle' => (isset($Calle) && $Calle !== NULL && $Calle !== '') ? strtoupper($Calle) : '',
                'No' => (isset($No) && $No !== NULL && $No !== '') ? $No : 0,
                'Colonia' => (isset($Colonia) && $Colonia !== NULL && $Colonia !== '') ? $Colonia : '',
                'Tipo' => (isset($Tipo) && $Tipo !== NULL && $Tipo !== '') ? strtoupper($Tipo) : ''
            );
            $this->resource_model->onAction('Proyectos', $data, 'update', array('ID', $ID));
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddSembradoViviendas() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));


            $D = json_decode($DETALLE, true);
            /* DETALLE */
            if (isset($DETALLE)) {
                for ($index = 0; $index < count($D); $index++) {
                    $detalle = array(
                        'Desarrollo' => (isset($D[$index]["Desarrollo"]) && $D[$index]["Desarrollo"] !== NULL && $D[$index]["Desarrollo"] !== '') ? strtoupper($D[$index]["Desarrollo"]) : NULL,
                        'Manzana' => (isset($D[$index]["Manzana"]) && $D[$index]["Manzana"] !== NULL && $D[$index]["Manzana"] !== '') ? strtoupper($D[$index]["Manzana"]) : NULL,
                        'TLotes' => (isset($D[$index]["TLotes"]) && $D[$index]["TLotes"] !== NULL && $D[$index]["TLotes"] !== '') ? strtoupper($D[$index]["TLotes"]) : NULL,
                        'Lotes' => (isset($D[$index]["Lotes"]) && $D[$index]["Lotes"] !== NULL && $D[$index]["Lotes"] !== '') ? strtoupper($D[$index]["Lotes"]) : NULL,
                        'NViviendas' => (isset($D[$index]["NViviendas"]) && $D[$index]["NViviendas"] !== NULL && $D[$index]["NViviendas"] !== '') ? strtoupper($D[$index]["NViviendas"]) : NULL,
                        'NumViviendas' => (isset($D[$index]["NumViviendas"]) && $D[$index]["NumViviendas"] !== NULL && $D[$index]["NumViviendas"] !== '') ? strtoupper($D[$index]["NumViviendas"]) : NULL,
                        'SuperficieHV' => (isset($D[$index]["SuperficieHV"]) && $D[$index]["SuperficieHV"] !== NULL && $D[$index]["SuperficieHV"] !== '') ? strtoupper($D[$index]["SuperficieHV"]) : NULL,
                        'Uso' => (isset($D[$index]["Uso"]) && $D[$index]["Uso"] !== NULL && $D[$index]["Uso"] !== '') ? strtoupper($D[$index]["Uso"]) : NULL,
                        'Indicador' => (isset($D[$index]["Indicador"]) && $D[$index]["Indicador"] !== NULL && $D[$index]["Indicador"] !== '') ? strtoupper($D[$index]["Indicador"]) : NULL,
                        'Modelo' => (isset($D[$index]["Modelo"]) && $D[$index]["Modelo"] !== NULL && $D[$index]["Modelo"] !== '') ? strtoupper($D[$index]["Modelo"]) : NULL,
                        'Prototipo' => (isset($D[$index]["Prototipo"]) && $D[$index]["Prototipo"] !== NULL && $D[$index]["Prototipo"] !== '') ? strtoupper($D[$index]["Prototipo"]) : NULL,
                        'Registro' => date('d/m/Y h:i:s a')
                    );
                    /* ENCABEZADO ENLACE DETALLE */
                    $IDDETALLE = $this->resource_model->onAction('ProyectosViviendas', $detalle, 'save', 0);
                }
            }
//            $this->resource_model->onAction('ProyectosViviendas', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddSembradoLotes() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyecto' => (isset($Proyecto) && $Proyecto !== NULL && $Proyecto !== '') ? strtoupper($Proyecto) : NULL,
                'Manzana' => (isset($ManzanaT) && $ManzanaT !== NULL && $ManzanaT !== '') ? strtoupper($ManzanaT) : NULL,
                'NLotes' => (isset($NLotes) && $NLotes !== NULL && $NLotes !== '') ? strtoupper($NLotes) : NULL,
                'LotesHr' => (isset($LotesHr) && $LotesHr !== NULL && $LotesHr !== '') ? strtoupper($LotesHr) : NULL,
                'NLotesHr' => (isset($NLotesHr) && $NLotesHr !== NULL && $NLotesHr !== '') ? strtoupper($NLotesHr) : NULL,
                'LotesHi' => (isset($LotesHi) && $LotesHi !== NULL && $LotesHi !== '') ? strtoupper($LotesHi) : NULL,
                'NLotesHi' => (isset($NLotesHi) && $NLotesHi !== NULL && $NLotesHi !== '') ? strtoupper($NLotesHi) : NULL,
                'LotesC' => (isset($LotesC) && $LotesC !== NULL && $LotesC !== '') ? strtoupper($LotesC) : NULL,
                'NLotesC' => (isset($NLotesC) && $NLotesC !== NULL && $NLotesC !== '') ? strtoupper($NLotesC) : NULL,
                'Total' => (isset($Total) && $Total !== NULL && $Total !== '') ? strtoupper($Total) : NULL,
                'Calle' => (isset($Calle) && $Calle !== NULL && $Calle !== '') ? strtoupper($Calle) : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $this->resource_model->onAction('ProyectosManzanas', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddSembradoManzanas() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Desarrollo' => (isset($Desarrollo) && $Desarrollo !== NULL && $Desarrollo !== '') ? strtoupper($Desarrollo) : NULL,
                'Seccion' => (isset($Seccion) && $Seccion !== NULL && $Seccion !== '') ? strtoupper($Seccion) : NULL,
                'Manzana' => (isset($Manzana) && $Manzana !== NULL && $Manzana !== '') ? strtoupper($Manzana) : NULL,
                'SuperficieH' => (isset($SuperficieH) && $SuperficieH !== NULL && $SuperficieH !== '') ? strtoupper($SuperficieH) : NULL,
                'SuperficieC' => (isset($SuperficieC) && $SuperficieC !== NULL && $SuperficieC !== '') ? strtoupper($SuperficieC) : NULL,
                'SuperficieD' => (isset($SuperficieD) && $SuperficieD !== NULL && $SuperficieD !== '') ? strtoupper($SuperficieD) : NULL,
                'SuperficieV' => (isset($SuperficieV) && $SuperficieV !== NULL && $SuperficieV !== '') ? strtoupper($SuperficieV) : NULL,
                'Total' => (isset($Total) && $Total !== NULL && $Total !== '') ? strtoupper($Total) : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $this->resource_model->onAction('ProyectosSeccion', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
