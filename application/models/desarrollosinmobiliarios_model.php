<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class desarrollosinmobiliarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select('CONCAT("<span class=\"label label-primary\">",P.ID,"</span>") AS ID, P.Proyecto, P.Modelo, P.Inmueble, P.SegmentoD AS "SEGMENTO", P.SuperficieT AS "SUPERFICIE DEL TERRENO", P.SeccionD AS "SECCIONES A DESARROLLAR", P.NumeroViviendas AS "NÚMERO TOTAL DE VIVIENDAS", P.Finicio AS "FECHA DE INICIO", P.Ftermino AS "FECHA DE TÉRMINO", P.Calle, P.No "NUMERO EXT", P.Colonia, P.Tipo', false);
            $this->db->from('Proyectos AS P');
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID($ID) {
        try {
            $this->db->select('*', false);
            $this->db->from('Proyectos AS P');
            $this->db->where('P.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getModelosDeNegocio() {
        try {
            $this->db->select('MN.id_modelo AS ID, MN.dsc_modelo AS MODELO', false);
            $this->db->from('ModeloNegocio AS MN');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInmuebleRegistro() {
        try {
            $this->db->select('IR.ID AS ID, IR.Propietario AS PROPIETARIO, IR.Ubicacion AS UBICACION', false);
            $this->db->from('InmuebleRegistro AS IR');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenes() {
        try {
            $this->db->select('A.ID, CONCAT(A.Nombre," (",(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = A.Proyecto),")") AS ALMACEN', false);
            $this->db->from('Almacen AS A');
            $this->db->where_in('A.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductos() {
        try {
            $this->db->select('CONCAT("<span class=\"label label-king-blue\">",P.ID,"</span>") AS ID, (CONCAT(UPPER(P.Producto)," (",CASE WHEN P.Marca = "" THEN "SIN MARCA" ELSE P.Marca END,")")) AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosSinAsignar() {
        try {
            $this->db->select('CONCAT("<span class=\"label label-king-blue\">",P.ID,"</span>") AS "<span class=\"label label-emerald\">ID</span>", (CONCAT("<div class=\"col-md-6\">",UPPER(P.Producto)," (",CASE WHEN P.Marca = "" THEN "SIN MARCA" ELSE P.Marca END,")</div>")) AS PRODUCTO', false);
            $this->db->from('Productos AS P');
            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPaises() {
        try {
            $this->db->select('P.id_pais ID, P.dsc_pais AS PAIS', false);
            $this->db->from('Pais AS P');
            $this->db->where('P.id_pais IN (SELECT E.id_pais FROM Estado AS E)', null, false);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstadosXPais($ID) {
        try {
            $this->db->select('E.id_estado AS ID, E.dsc_estado AS ESTADO', false);
            $this->db->from('Estado AS E');
            $this->db->where('E.id_pais', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMunicipiosXEstado($ID) {
        try {
            $this->db->select('C.id_ciudad AS ID, C.dsc_ciudad AS MUNICIPIO', false);
            $this->db->from('Ciudad AS C');
            $this->db->where('C.id_estado', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $this->db->select('U.Id AS ID, CONCAT(U.nombre," ", U.apaterno, " ", U.amaterno) AS RESPONSABLE', false);
            $this->db->from('usuarios AS U');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $this->db->select('PRO.ID, UPPER(PRO.Proveedor) AS PROVEEDOR', false);
            $this->db->from('Proveedores AS PRO');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $this->db->select('PRO.ID, UPPER(PRO.Proyecto) AS PROYECTO', false);
            $this->db->from('Proyectos AS PRO');
            $this->db->where_in('PRO.Tipo', array('PROPIO', 'FIDEICOMISO', 'CONTRATO DE OBRA'));
            $this->db->where_in('PRO.Modelo', array(1, 2, 3));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getManzanasXProyecto($ID) {
        try {
            $this->db->select('PSC.ID, PSC.Manzana AS MANZANA', false);
            $this->db->from('ProyectosSeccion AS PSC');
//            $this->db->where_in('PRO.Tipo', array('PROPIO', 'FIDEICOMISO', 'CONTRATO DE OBRA'));
//            $this->db->where_in('PRO.Modelo', array(1, 2, 3));
            $this->db->where('PSC.Desarrollo', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipoLoteXProyectoYManzana($ID,$MANZANA) {
        try {
            $this->db->select('PM.ID, PM.NLotesHr AS REGULARES, PM.NLotesHi AS IRREGULARES, PM.NLotesC AS COMERCIALES', false);
            $this->db->from('ProyectosManzanas AS PM');
            $this->db->where('PM.Proyecto', $ID);
            $this->db->where('PM.Manzana', $MANZANA);
//            $this->db->where_in('PRO.Modelo', array(1, 2, 3)); 
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSeccionesXProyecto($ID) {
        try {
            $this->db->select('PRO.ID, UPPER(PRO.Proyecto) AS PROYECTO, PRO.SeccionD SECCION', false);
            $this->db->from('Proyectos AS PRO');
            $this->db->where_in('PRO.Tipo', array('PROPIO', 'FIDEICOMISO', 'CONTRATO DE OBRA'));
            $this->db->where_in('PRO.Modelo', array(1, 2, 3));
            $this->db->where('PRO.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSembradoDeManzanas() {
        try {
            $this->db->select('CONCAT("<span class=\"label label-primary\">",P.ID,"</span>") AS ID, P.Desarrollo, P.Seccion, P.Manzana, P.SuperficieH AS "SUPERFICIE HABITACIONAL", P.SuperficieC AS "SUPERFICIE COMERCIAL", P.SuperficieD AS "SUPERFICIE DONACIÓN", P.SuperficieV AS "SUPERFICIE VENDIBLE", P.Total AS "TOTAL DE SUPERFICIE EN MANZANA",P.Estatus, P.Registro', false);
            $this->db->from('ProyectosSeccion AS P');
//            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getSembradoDeLotes() {
        try {
//            $this->db->select(
//                    'CONCAT("<span class=\"label label-primary\">",PM.ID,"</span>") AS ID, PM.Proyecto, PM.Manzana, '
//                    . 'PM.NLotes AS "NÚMERO DE LOTES", PM.LotesHr AS "CANTIDAD DE LOTES REGULARES", '
//                    . 'PM.NLotesHr AS "NUMERACIÓN DE LOTES", PM.LotesHi AS "CANTIDAD DE LOTES IRREGULARES", '
//                    . 'PM.LotesC "CANTIDAD DE LOTES COMERCIALES", '
//                    . 'PM.NLotesC AS "NUMERACIÓN DE LOTES", PM.Total AS "TOTAL DE LOTES EN MANZANA", PM.Registro, PM.Estatus', false);
            $this->db->select('CONCAT("<span class=\"label label-primary\">",PM.ID,"</span>") AS ID, PM.Proyecto, PM.Manzana, PM.NLotes AS "NÚMERO DE LOTES", PM.Calle, '
                    . 'PM.LotesHr AS "CANTIDAD DE LOTES REGULARES", PM.NLotesHr AS "NUMERACIÓN DE LOTES", PM.LotesHi AS "CANTIDAD DE LOTES IRREGULARES",'
                    . 'PM.NLotesHi AS "NUMERACIÓN DE LOTES IRREGULARES", PM.LotesC AS "CANTIDAD DE LOTES COMERCIALES", '
                    . 'PM.NLotesC  AS "NUMERACIÓN DE LOTES COMERCIALES", PM.Total AS "TOTAL DE LOTES EN MANZANA", PM.Registro, PM.Estatus', false);
            $this->db->from('ProyectosManzanas AS PM');
//            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getSembradoDeViviendas() {
        try {
            $this->db->select(
                    'CONCAT("<span class=\"label label-primary\">",PV.Id,"</span>") AS ID,'
                    . '(SELECT P.Proyecto FROM Proyectos AS P WHERE P.ID = PV.Desarrollo) AS DESARROLLO, PV.Manzana, PV.TLotes as "TIPO DE LOTE", PV.Lotes AS LOTE, PV.NViviendas "CANTIDAD DE VIVIENDAS", PV.NumViviendas AS "NUMEROS OFICIALES", '
                    . 'PV.SuperficieHV AS "SUPERFICIE VENDIBLE", PV.Uso, PV.Indicador AS "INDICADOR DE PROYECTO", PV.Modelo, PV.Prototipo, PV.Registro, PV.Estatus', false);
            $this->db->from('ProyectosViviendas AS PV');
//            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getModelosDeViviendas() {
        try {
            $this->db->select('VR.ID, VR.Modelo AS MODELO', false);
            $this->db->from('viviendasregistro AS VR');
//            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getViviendasPrototipos() {
        try {
            $this->db->select('VP.ID,VP.Prototipo AS PROTOTIPO', false);
            $this->db->from('ViviendasPrototipos AS VP');
//            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getViviendasRegistro() {
        try {
            $this->db->select('VR.Modelo AS MODELO', false);
            $this->db->from('ViviendasRegistro AS VR');
//            $this->db->where_in('P.Estatus', array('ACTIVO'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
//        var_dump($str);
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}