<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlResources extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function index() {
        
    }

    public function getFormatNumber() {
        try {
            if (isset($_POST["NDECIMALES"])) {
                print '$ ' . number_format($_POST["NUMERO"], $_POST["NDECIMALES"], '.', ', ');
            } else {
                print '$ ' . number_format($_POST["NUMERO"], 2, '.', ", ");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getNumeroXLetra($n) {
        try {
            $array = array(
                1 => 'UN',
                2 => 'DOS',
                3 => 'TRES',
                4 => 'CUATRO',
                5 => 'CINCO',
                6 => 'SEIS',
                7 => 'SIETE',
                8 => 'OCHO',
                9 => 'NUEVE',
                10 => 'DIEZ'
            );

            if ($n > 0) { 
                foreach ($array as $key => $value) {
                    if($n==$key){
                        $letra .=$value;
                    }
                }
            }
            print $letra;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
