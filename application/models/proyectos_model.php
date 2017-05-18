<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class proyectos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        try {
            $this->db->select('P.ID, '
                    . '(CASE '
                    . 'WHEN P.IdEmpresa IS NULL THEN "NO ESPECÍFICA" '
                    . 'ELSE (SELECT D.RazonS FROM Directorio AS D WHERE D.ID = P.IdEmpresa)'
                    . 'END) AS EMPRESA,'
                    . '(CASE '
                    . 'WHEN P.IdActividad IS NULL THEN "NO ESPECÍFICA" '
                    . 'ELSE (SELECT A.Actividad FROM Actividadestf AS A WHERE A.ID = P.IdActividad AND A.Estatus LIKE \'ACTIVO\') END) AS ACTIVIDAD,'
                    . 'P.Proyecto, '
                    . '(CASE '
                    . 'WHEN P.Modelo IS NULL THEN "NO ESPECIFICO" ELSE UPPER(MN.dsc_modelo)'
                    . 'END) '
                    . 'AS "MODELO DE NEGOCIO" , '
                    . 'CASE WHEN P.SegmentoD IS NULL THEN "NO ESPECIFICA" ELSE P.SegmentoD END AS SEGMENTO, '
                    . 'CASE WHEN P.SuperficieT IS NULL THEN "0" ELSE P.SuperficieT END AS "SUPERFICIE TERRENO",'
                    . 'CASE WHEN P.SeccionD IS NULL THEN "N/A" ELSE P.SeccionD END AS SECCION, '
                    . 'P.NumeroViviendas AS "NÚMERO DE VIVIENDAS", P.Finicio AS "FECHA DE INICIO", P.Ftermino AS "FECHA DE TERMINO", '
                    . 'P.Calle, P.No, P.Colonia, P.Tipo, P.Registro, P.Estatus', false);
            $this->db->from("proyectos AS P");
            $this->db->join('modelonegocio AS MN', 'MN.id_modelo = P.Modelo');
            $this->db->where_not_in("P.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectoByID($ID) {
        try {
            $this->db->select('RT.*', false);
            $this->db->from("proyectos AS RT");
            $this->db->where('RT.ID', $ID);
            $this->db->where_not_in("RT.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO")); 
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInmuebles() {
        try {
            $this->db->select('IR.ID, UPPER(CONCAT(IR.Ubicacion, " ",IR.Propietario)) AS INMUEBLE', false);
            $this->db->from('inmuebleregistro AS IR');
            $this->db->where("IR.Propietario IS NOT NULL AND IR.Ubicacion !=''", NULL, FALSE);
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

    public function getEmpresas() {
        try {
            $this->db->select('D.ID, D.RazonS AS EMPRESA', false);
            $this->db->from('directorio AS D');
            $this->db->where('D.Empresa','PROPIA');
            $this->db->order_by('D.RazonS','ASC');
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
    public function getActividades() {
        try {
            $this->db->select('ATF.ID, ATF.Actividad AS ACTIVIDAD', false);
            $this->db->from('actividadestf AS ATF');
            $this->db->where('ATF.Estatus','ACTIVO');
            $this->db->order_by('ATF.Actividad','ASC');
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

    public function onAgregar($array) {
        try {
            $array['Registro'] = Date('d/m/Y h:i:s a');
            $this->db->insert("proyectos", $array);
            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("proyectos", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->db->where('ID', $ID);
            $this->db->update("proyectos", $data);
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
