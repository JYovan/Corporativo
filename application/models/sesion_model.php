<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Sesion_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('seug', TRUE);
    } 

    function getAcceso($login, $password) {
        $this->db->select('*');
        $this->db->from('usuarios AS users');
        $this->db->where('users.login', $login);
        $this->db->where('users.Estatus', 'ACTIVO');
        $this->db->where('(CONCAT("$_",\''.$password.'\',"_$")  = AES_DECRYPT(users.DataPass, \'SecurePass\'))', NULL, FALSE); 
        $query = $this->db->get();
//       print $str = $this->db->last_query(); 
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
//        var_dump($str);
        return $data; 
    }
    
    function getUSUARIOSALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('usuarios');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }
}
