<?php 
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *'); 
class Dispersion_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('seug', TRUE);
    }

    //METODO QUE REALIZA UNA CONSULTA DE DISPERSIONES VS TRANSMISIONES PARA MOSTRAR UN RESULTADO COTEJADO DE LA INFORMACION EN UNA TABLA
    function getDispersiones($Ndesarrollo) {
        $this->db->select('d.*,t.PrecioVentaN,t.PagoTerreno,t.PagoRendimientos,t.FechaEntrega,t.FechaNot,t.TotalIng,t.Adquirente');
        $this->db->from('Transmision as t');
        $this->db->join('Dispersion as d', 't.Viviendas = d.Viviendas');
        $this->db->where("t.Manzana = d.Manzana");
        $this->db->where("t.Lotes = d.Lotes");
        $this->db->where("t.NFideicomiso", $Ndesarrollo);
        $this->db->where("t.Cancelacion !=", "Cancelado");
        $query = $this->db->get();
        $data = $this->db->last_query();
//        var_dump($data);
        return $query->result();
    }

    /*
     * METODO QUE OBTIENE LAS TRANSMISIONES VS DISPERSIONES PARA HACER UN GRAFICO DE BARRAS SOBRE LAS TRANSMISIONES VS DISPERSIONES Y LAS TRANSMISIONES NO DISPERSADAS
     */

    function getTransmisionesVSDispersiones($Ndesarrollo) {
        $this->db->select('d.*,t.PrecioVentaN,t.PagoTerreno,t.PagoRendimientos,t.FechaEntrega,t.FechaNot,t.TotalIng,t.Adquirente');
        $this->db->from('Transmision as t');
        $this->db->join('Dispersion as d', 't.Viviendas = d.Viviendas');
        $this->db->where("t.Manzana = d.Manzana");
        $this->db->where("t.Lotes = d.Lotes");
        $this->db->where("t.NFideicomiso", $Ndesarrollo);
        $this->db->where("t.Cancelacion !=", "Cancelado");
        $query = $this->db->get();
        return $query->result();
    }

    function getNoDispersadas($Ndesarrollo) {
        
        $this->db->select('d.*,t.ID,t.PrecioVentaN,t.PagoTerreno,t.PagoRendimientos,t.FechaEntrega,t.FechaNot,t.TotalIng,t.Adquirente');
        $this->db->from('Transmision as t');
        $this->db->join('Dispersion as d', 't.Viviendas = d.Viviendas');
        $this->db->where("t.Manzana = d.Manzana");
        $this->db->where("t.Lotes = d.Lotes");
        $this->db->where("t.NFideicomiso", $Ndesarrollo);
        $this->db->where("t.Cancelacion !=", "Cancelado");
        $this->db->where_not_in('t.ID', $TID->result());
        $query = $this->db->get();
        return $query->result();
    }
    function getTransmisionesNoDispersadas($Ndesarrollo) { 
         $this->db->select('sum(t.TotalIng) Transmisiones, SUM(t.Disp_TotalIng) Dispersiones, (sum(t.TotalIng)  - SUM(t.Disp_TotalIng) ) TransmisionesNoDisp', FALSE);
        $this->db->from('Transmision as t');
        $this->db->join('Dispersion as d', 't.Viviendas = d.Viviendas');
        $this->db->where("t.Manzana = d.Manzana");
        $this->db->where("t.Lotes = d.Lotes");
        $this->db->where("t.NFideicomiso", $Ndesarrollo);
        $this->db->where("t.Cancelacion !=", "Cancelado");
        $query = $this->db->get();
        return $query->result(); 
    }

}
