<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class seguridadsocial_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",SSD.ID,"</span>") AS ID,(SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = SSD.Cliente) AS EMPRESA, SSD.Mes, (SELECT TR.dsc_tramite FROM SSTramites AS TR WHERE TR.id_tramite = SSD.Tramite) AS TRAMITE, SSD.FechaSolicitud AS "FECHA SOLICITUD", SSD.Evidencia, SSD.Registro', false);
        $this->db->from('SSDocumentos AS SSD');
        $this->db->where_in('SSD.Estatus',array('ACTIVO'));
        $query = $this->db->get();
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        return $data;
    }

    function getEmpresas() {
        try {
            $this->db->select('DIR.ID, DIR.RazonS AS RAZON, DIR.Folio AS FOLIO');
            $this->db->from('Directorio AS DIR');
            $this->db->where('DIR.Empresa','PROPIA');
            $this->db->order_by('DIR.RazonS', 'ASC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getEmpresasByID($ID) {
        try {
            $this->db->select('DIR.ID, DIR.RazonS AS RAZON, DIR.Folio AS FOLIO');
            $this->db->from('Directorio AS DIR');
            $this->db->where('DIR.ID', $ID);
            $this->db->order_by('DIR.RazonS', 'ASC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getTramites() {
        try {
            $this->db->select('SST.id_tramite AS ID, SST.dsc_tramite AS TRAMITE');
            $this->db->from('SSTramites AS SST');
            $this->db->order_by('SST.dsc_tramite', 'ASC');
            $query = $this->db->get();
            $data = $query->result();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getHistorial() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",SSH.ID,"</span>") AS ID, SSH.Asesoria AS TRAMITE, 
        CASE 
            WHEN SSH.Estatus IS NULL THEN "<span class=\"label label-danger\">CANCELADO</span>"
            WHEN SSH.Estatus = 0 THEN "<span class=\"label label-danger\">CANCELADO</span>"
            WHEN SSH.Estatus = 1 THEN "<span class=\"label label-primary\">EN PROCESO</span>"
            WHEN SSH.Estatus = 2 THEN "<span class=\"label label-emerald\">CONCLUIDO</span>"
            WHEN SSH.Estatus = 3 THEN "<span class=\"label label-warning\">NOTIFICADO AL ÁREA CONTABLE</span>"
            WHEN SSH.Estatus = 4 THEN "<span class=\"label label-indigo\">NOTIFICADO AL TITULAR DE LA EMPRESA</span>"
            WHEN SSH.Estatus = 5 THEN "<span class=\"label label-info\">INTEGRADO AL EXPEDIENTE DE LA EMPRESA</span>"
        END AS ESTATUS,
        CASE 
            WHEN SSH.Empresa IS NULL THEN (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.Folio = SSH.Cliente) 
        ELSE 
            (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = SSH.Empresa) 
        END AS EMPRESA, 
        SSH.Fecha AS FECHA, SSH.Hora AS HORA, 
        CASE 
        WHEN SSH.FechaTermino IS NULL THEN "SIN CONCLUIR"
        ELSE SSH.FechaTermino END AS "FECHA TERMINO"', false);
        $this->db->from('SSHistorico AS SSH');
        $this->db->where_in('SSH.EstatusR',array('ACTIVO'));
        $this->db->order_by('SSH.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getHistorialByID($ID) {
        $this->db->select('SSH.ID AS ID, SSH.Asesoria AS TRAMITE, SSH.Estatus AS ESTATUSID,
        CASE 
            WHEN SSH.Estatus IS NULL THEN "CANCELADO"
            WHEN SSH.Estatus = 0 THEN "CANCELADO"
            WHEN SSH.Estatus = 1 THEN "EN PROCESO"
            WHEN SSH.Estatus = 2 THEN "CONCLUIDO"
            WHEN SSH.Estatus = 3 THEN "NOTIFICADO AL ÁREA CONTABLE"
            WHEN SSH.Estatus = 4 THEN "NOTIFICADO AL TITULAR DE LA EMPRESA"
            WHEN SSH.Estatus = 5 THEN "INTEGRADO AL EXPEDIENTE DE LA EMPRESA"
        END AS ESTATUS,
        CASE 
            WHEN SSH.Empresa IS NULL THEN (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.Folio = SSH.Cliente) 
        ELSE 
            (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = SSH.Empresa) 
        END AS EMPRESA, SSH.Empresa AS EMPRESAID, 
        SSH.Fecha AS FECHA, SSH.Hora AS HORA', false);
        $this->db->from('SSHistorico AS SSH');
        $this->db->where('SSH.ID', $ID);
        $this->db->order_by('SSH.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }

    function getNominas() {
        $this->db->select('CONCAT("<span class=\"label label-primary\">",SSN.ID,"</span>") AS ID,
            (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = SSN.Empresa) AS EMPRESA, SSN.Fecha, 
            CASE 
            WHEN SSN.TipoNomina = 1 THEN "SEMANAL"
            WHEN SSN.TipoNomina = 2 THEN "QUINCENAL"
            WHEN SSN.TipoNomina = 3 THEN "MENSUAL"
            END AS "TIPO DE NOMINA", SSN.NTrabajadores AS "NÚMERO DE TRABAJADORES",
            SSN.Registro AS "FECHA DE INICIO", SSN.FechaTermino AS "FECHA TERMINO",
            CONCAT((TIMESTAMPDIFF(SECOND,str_to_date(SSN.Registro, \'%d/%m/%Y %h:%i:%s\') ,str_to_date(SSN.FechaTermino, \'%d/%m/%Y %h:%i:%s\'))), " SEGUNDOS")AS "DURACIÓN EN SEGUNDOS",
            CONCAT(FORMAT((TIMESTAMPDIFF(SECOND,str_to_date(SSN.Registro, \'%d/%m/%Y %h:%i:%s\') ,str_to_date(SSN.FechaTermino, \'%d/%m/%Y %h:%i:%s\')) /60),2), " MINUTOS") AS "DURACIÓN EN MINUTOS",
            CONCAT(FORMAT((TIMESTAMPDIFF(SECOND,str_to_date(SSN.Registro, \'%d/%m/%Y %h:%i:%s\') ,str_to_date(SSN.FechaTermino, \'%d/%m/%Y %h:%i:%s\')) /60)/60,2), " HORAS") AS "DURACIÓN EN HORAS",
        CASE 
            WHEN SSN.Estatus IS NULL THEN "<span class=\"label label-danger\">CANCELADO</span>"
            WHEN SSN.Estatus = 0 THEN "<span class=\"label label-danger\">CANCELADO</span>"
            WHEN SSN.Estatus = 1 THEN "<span class=\"label label-primary\">EN PROCESO</span>"
            WHEN SSN.Estatus = 2 THEN "<span class=\"label label-emerald\">CONCLUIDO</span>"
            WHEN SSN.Estatus = 3 THEN "<span class=\"label label-warning\">NOTIFICADO AL ÁREA CONTABLE</span>"
            WHEN SSN.Estatus = 4 THEN "<span class=\"label label-indigo\">NOTIFICADO AL TITULAR DE LA EMPRESA</span>"
            WHEN SSN.Estatus = 5 THEN "<span class=\"label label-info\">INTEGRADO AL EXPEDIENTE DE LA EMPRESA</span>"
        END AS ESTATUS', false);
        $this->db->from('SSNomina AS SSN');
        $query = $this->db->get();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        $data = $query->result();
        return $data;
    }

    function getNominasByID($ID) {
        $this->db->select('SSN.ID AS ID,
            (SELECT DIR.RazonS FROM Directorio AS DIR WHERE DIR.ID = SSN.Empresa) AS EMPRESA, SSN.Empresa AS EMPRESAID, SSN.Fecha AS FECHA, 
             SSN.TipoNomina  AS "TIPO DE NOMINA", 
            CASE 
                WHEN SSN.FechaTermino IS NULL THEN "SIN CONCLUIR"
                ELSE SSN.FechaTermino END AS "FECHA TERMINO",
            CASE 
                WHEN SSN.Estatus IS NULL THEN "CANCELADO"
                WHEN SSN.Estatus = 0 THEN "CANCELADO"
                WHEN SSN.Estatus = 1 THEN "EN PROCESO"
                WHEN SSN.Estatus = 2 THEN "CONCLUIDO"
                WHEN SSN.Estatus = 3 THEN "NOTIFICADO AL ÁREA CONTABLE"
                WHEN SSN.Estatus = 4 THEN "NOTIFICADO AL TITULAR DE LA EMPRESA"
                WHEN SSN.Estatus = 5 THEN "INTEGRADO AL EXPEDIENTE DE LA EMPRESA"
            END AS ESTATUS,
            SSN.Estatus AS ESTATUSID,SSN.NTrabajadores AS "NUMERO DE TRABAJADORES", 
            SSN.rDocumento AS DOCUMENTO', false);
        $this->db->from('SSNomina AS SSN');
        $this->db->where('SSN.ID', $ID);
        $this->db->order_by('SSN.ID', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str;
        return $data;
    }
}