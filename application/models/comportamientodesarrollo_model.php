<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ComportamientoDesarrollo_Model extends CI_Model {

    function __construct() {
        $this->db = $this->load->database('seug', TRUE);
    } 
    
    function getGraficoDeEstatusdelosProyectos() {
        $this->db->select('pro.Proyecto, pro.NumeroViviendas as ViviendasAConstruir, Count(c.Capartado) Apartados, (pro.NumeroViviendas - Count(c.Capartado)) ViviendasSinVender, sum(c.Vendidax) AS Vendidas');
        $this->db->from('Proyectos as pro');
        $this->db->join('Clientes as c', 'pro.ID = c.Proyectos');
        $this->db->group_by("c.Proyectos");
        $query = $this->db->get(); 
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
//        print $str; 
        return $data;
    }
    function getGraficoDeEstatusdelosProyectosPorcentajes() {
        $this->db->select('pro.Proyecto, pro.NumeroViviendas as ViviendasAConstruir, (Count(c.Capartado)*100)/pro.NumeroViviendas Apartados, ((pro.NumeroViviendas - Count(c.Capartado))*100)/pro.NumeroViviendas ViviendasSinVender, (sum(c.Vendidax)*100)/pro.NumeroViviendas AS Vendidas');
        $this->db->from('Proyectos as pro');
        $this->db->join('Clientes as c', 'pro.ID = c.Proyectos');
        $this->db->group_by("c.Proyectos");
        $query = $this->db->get(); 
        return $query->result();
    }
}
