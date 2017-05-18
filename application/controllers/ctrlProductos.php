<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlProductos extends CI_Controller {

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
        $this->load->model("modelo");
        $this->load->model("productos_model");
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
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vProductos');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
            $this->load->view('layout/base/lytBaseFoot');
        }
    }

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    public function getRecords() {
        try {
            $data = $this->productos_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordsByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->productos_model->getRecordsByID($ID);
                print json_encode($data);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciosXProductoByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->productos_model->getPreciosXProductoByID($ID);
                print json_encode($data);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEtiquetas() {
        try {
            $data = $this->productos_model->getEtiquetas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $data = $this->productos_model->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAdd() {
        try {
            date_default_timezone_set('America/Mexico_City');
            if (filter_var(filter_input(INPUT_POST, 'Producto'), FILTER_SANITIZE_STRING)) {
                extract(filter_input_array(INPUT_POST));

                $data = array(
                    'Folio' => '',
                    'Etiqueta' => $Etiqueta,
                    'Producto' => strtoupper($Producto),
                    'Marca' => strtoupper($Marca),
                    'UnidadMedida' => strtoupper($UnidadMedida),
                    'Proveedores' => $Proveedores,
                    'Registro' => Date('d/m/Y h:i:s a')
                );
                $ID = $this->resource_model->onAction('Productos', $data, 'save', 0);
                print 1;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddAsignacion() {
        try {
            date_default_timezone_set('America/Mexico_City');
            if (filter_var(filter_input(INPUT_POST, 'IdProducto'), FILTER_SANITIZE_STRING)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'IdProducto' => $IdProducto,
                    'Proveedor' => $Proveedor,
                    'Precio' => $Precio,
                    'FechaPrecio' => Date('d/m/Y h:i:s a')
                );
                $ID = $this->resource_model->onAction('Catalogo', $data, 'save', 0);
                print 1;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            date_default_timezone_set('America/Mexico_City');
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'Etiqueta' => $Etiqueta,
                    'Producto' => $Producto,
                    'Marca' => $Marca,
                    'UnidadMedida' => $UnidadMedida,
                    'Proveedores' => $Proveedores
                );
                $ID = $this->resource_model->onAction('Productos', $data, 'update', array('ID', $ID));
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array( 
                'Estatus' => 'INACTIVO'
            );
            $ID = $this->resource_model->onAction('Productos', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarPrecio() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array( 
                'Estatus' => 'INACTIVO'
            );
            $ID = $this->resource_model->onAction('catalogo', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdatePrecioXProductoYProveedor() {
        try {
            date_default_timezone_set('America/Mexico_City');
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'Precio' => $PRECIO,
                    'FechaPrecio' => Date('d/m/Y h:i:s a')
                );
                $ID = $this->resource_model->onAction('Catalogo', $data, 'update', array('ID', $ID));
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciosXProducto() {
        try {
            $data = $this->productos_model->getPreciosXProducto();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAsignar() {
        try {
            $data = $this->productos_model->getProductosXAsignar();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductoXProveedor() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'PRODUCTO'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->productos_model->getProductoXProveedor($PRODUCTO, $PROVEEDOR);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciosXProductoByIDS() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'IDPRODUCTO'), FILTER_SANITIZE_NUMBER_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->productos_model->getPreciosXProductoByIDS($IDPRODUCTO, $IDPROVEEDOR);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
