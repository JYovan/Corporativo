<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlArchivos extends CI_Controller {

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
        $this->load->model("resource_model");
    }

    public function index() {
        $this->load->view('layout/base/lytBaseHead');
        $this->load->view('vArchivos');
        $this->load->view('layout/base/lytBaseFoot');
    }

    public function onUploadArchivo() {
        try {
            var_dump($_FILES);
            $total = count($_FILES['rArchivo']['name']);

// Loop through each file
            for ($i = 0; $i < $total; $i++) {
                //Get the temp file path
                $tmpFilePath = $_FILES['rArchivo']['tmp_name'][$i];

                //Make sure we have a filepath
                if ($tmpFilePath != "") {
                    //Setup our new file path
                    if (!file_exists('uploads/Archivos')) {
                        mkdir('uploads/Archivos', 0777, true);
                    }
                    $newFilePath = "uploads/Archivos/" . $_FILES['rArchivo']['name'][$i];

                    //Upload the file into the temp dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {

                        //Handle other code here
                    }
                }
            }
//            if (isset($_FILES["rArchivo"]["name"])) {
//                if (!file_exists('uploads/Archivos')) {
//                    mkdir('uploads/Archivos', 0777, true);
//                }
//                if (move_uploaded_file($_FILES["rArchivo"]["tmp_name"], 'uploads/Archivos/' . utf8_decode($_FILES["rArchivo"]["name"]))) {
//                    echo "EL ARCHIVO SE SUBIO EXITOSAMENTE ! ! !";
//                } else {
//                    echo "NO SE PUDO SUBIR EL ARCHIVO";
//                }
//            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
