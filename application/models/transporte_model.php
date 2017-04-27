<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class transporte_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRecords() {
        try {
            $query = $this->db->query("CALL SP_GETTRANSPORTE()");
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

    function getMantenimientos() {
        try {
            $query = $this->db->query("CALL SP_GETMANTENIMIENTOS()");
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
    function getMantenimientoByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETMANTENIMIENTOXID($ID)");
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
    function getVerificacionByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETVERIFICACIONXID($ID)");
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
    
    function getFotosXMantenimientoByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOSMANTENIMIENTOXID($ID)");
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
    
    function getDocumentosXMantenimientoByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOSMANTENIMIENTOXID($ID)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getVerificaciones() {
        try {
            $query = $this->db->query("CALL SP_GETVERIFICACIONES()");
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

    
    function getFotosXVerificacionByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOSVERIFICACIONXID($ID)");
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
    
    function getDocumentosXVerificacionByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOSVERIFICACIONXID($ID)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getAccidentes() {
        try {
            $query = $this->db->query("CALL SP_GETACCIDENTES()");
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
    
    
    function getFotosXAccidenteByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOSACCIDENTEXID($ID)");
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
    
    function getDocumentosXAccidenteByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOSACCIDENTEXID($ID)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getAccidenteByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETACCIDENTEXID($ID)");
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

    function getSolicitudes() {
        try {
            $query = $this->db->query("CALL SP_GETSOLICITUDES()");
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

    
    function getFotosXSolicitudByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOSXSOLICITUDBYID($ID)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function getDocumentosXSolicitudByID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOSXSOLICITUDBYID($ID)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function getFotosXTransporte($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOSXTRANSPORTE($ID)");
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

    function getFotoXID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOXTRANSPORTEID($ID)");
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

    function getDocumentosXTransporte($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOSXTRANSPORTE($ID)");
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

    function getDocumentoXID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOXTRANSPORTEID($ID)");
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

    function getDocumentoXMantenimientoID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOXMANTENIMIENTOID($ID)");
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

    function getFotoXMantenimientoID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOXMANTENIMIENTOID($ID)");
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
    
    
    function getDocumentoXVerificacionID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOXVERIFICACIONID($ID)");
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getFotoXVerificacionID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOXVERIFICACIONID($ID)");
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


    function getDocumentoXAccidenteID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOXACCIDENTEID($ID)");
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

    function getFotoXAccidenteID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOXACCIDENTEID($ID)");
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
    public function getRecordByID($ID) {
        try {
            $this->db->select('T.*', false);
            $this->db->from("Transporte AS T");
            $this->db->where('T.ID', $ID);
            $this->db->where_not_in("T.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('T.ID', 'ASC');
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

    public function getSolicitudByID($ID) {
        try {
            $this->db->select('TS.ID, TS.IdTransporte, '
                    . '(SELECT CONCAT(T.Tipo, " (",T.Color,")" ) '
                    . 'FROM Transporte AS T WHERE T.ID = TS.IdTransporte AND T.Estatus NOT IN(\'INACTIVO\')) AS TRANSPORTE, TS.Comision, '
                    . 'TS.FechaComision, TS.Descripcion, (CASE 
                    WHEN TS.EstadoDestino IS NULL THEN "SIN ESTADO DE DESTINO"
                    ELSE (SELECT E.dsc_estado FROM estado AS E WHERE E.id_estado = TS.EstadoDestino)
                    END) AS "ESTADO DESTINO",TS.EstadoDestino, TS.CiudadDestino, (CASE 
                    WHEN TS.CiudadDestino IS NULL THEN "SIN CIUDAD DE DESTINO"
                    ELSE (SELECT C.dsc_ciudad FROM ciudad AS C WHERE C.Id = TS.CiudadDestino)
                    END) AS "CIUDAD DESTINO",  '
                    . 'TS.LugarSalida, TS.HoraSalida, TS.HoraRegreso, TS.DuracionComision, '
                    . 'TS.Pasajeros, TS.NombresPasajeros, TS.Conductor, TS.Fecha, TS.Disponibilidad, '
                    . 'TS.EstatusSolicitud, TS.Autoriza, TS.FechaAutorizacion, TS.HoraAutorizacion, '
                    . 'TS.Estatus, TS.Registro', false);
            $this->db->from("transportesolicitud AS TS");
            $this->db->where('TS.ID', $ID);
            $this->db->where_not_in("TS.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('TS.ID', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            PRINT $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getDocumentoXSolicitudID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETDOCUMENTOXSOLICITUDID($ID)");
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

    function getFotoXSolicitudID($ID) {
        try {
            $query = $this->db->query("CALL SP_GETFOTOXSOLICITUDID($ID)");
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

    public function getConductores() {
        try {
            $this->db->select('U.Id AS ID, CONCAT(U.nombre, " ", U.apaterno," ", U.amaterno) AS CONDUCTOR', false);
            $this->db->from("usuarios AS U");
            $this->db->where_not_in("U.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('U.nombre', 'ASC');
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

    public function getAutorizadores() {
        try {
            $this->db->select('U.Id AS ID, CONCAT(U.nombre, " ", U.apaterno," ", U.amaterno) AS AUTORIZADOR', false);
            $this->db->from("usuarios AS U");
            $this->db->where("U.AutorizaTransporte","SI");
            $this->db->where_not_in("U.Estatus", array("INACTIVO", "ELIMINADO", "CANCELADO"));
            $this->db->order_by('U.nombre', 'ASC');
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

    public function getEstados() {
        try {
            $this->db->select('E.id_estado AS ID, E.dsc_estado AS ESTADO', false);
            $this->db->from("estado AS E");
            $this->db->order_by('E.dsc_estado', 'ASC');
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

    public function getCiudades($ID) {
        try {
            $this->db->select('C.id AS ID, C.dsc_ciudad AS CIUDAD', false);
            $this->db->from("ciudad AS C");
            $this->db->where("C.id_estado", $ID);
            $this->db->order_by('C.dsc_ciudad', 'ASC');
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
    
    public function getCiudadesX() {
        try {
            $this->db->select('C.id AS ID, C.dsc_ciudad AS CIUDAD', false);
            $this->db->from("ciudad AS C"); 
            $this->db->order_by('C.dsc_ciudad', 'ASC');
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

}
