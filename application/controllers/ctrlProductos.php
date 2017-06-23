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

    public function onGenerarCodigoXProducto() {
        try {
            extract($this->input->post());
            $data = $this->productos_model->getProductoByPrecioID($ID);
            $producto = $data[0];

            //var_dump($data[0]);
            $pdf = new PDF_Code128();
            $pdf->AddPage();
            $pdf->SetFont('Arial', '', 10);
            $YR = 15;
            $Y = 35;

            //A set 
            $pdf->Code128(5, 5, "123456789012345", 30, 12);
            $pdf->SetXY(4, 18);
            $pdf->MultiCell(35, 3, "123456789012345", 0, 'J');
            $pdf->AddPage();
            $pdf->Code128(5, 5, "12345678901234", 30, 12);
            $pdf->SetY(18);
            $pdf->SetX(4);
            $pdf->MultiCell(35, 3, "12345678901234", 0, 'J');
 
            if (!file_exists('uploads/Codigos')) {
                mkdir('uploads/Codigos', 0777, true);
            }
            $file_name = $producto->ID . "";
            $url = 'uploads/Codigos/' . $file_name . '.pdf';
            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**/
}

require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class PDF_Code128 extends FPDF {

    protected $T128;                                         // Tableau des codes 128
    protected $ABCset = "";                                  // jeu des caractères éligibles au C128
    protected $Aset = "";                                    // Set A du jeu des caractères éligibles
    protected $Bset = "";                                    // Set B du jeu des caractères éligibles
    protected $Cset = "";                                    // Set C du jeu des caractères éligibles
    protected $SetFrom;                                      // Convertisseur source des jeux vers le tableau
    protected $SetTo;                                        // Convertisseur destination des jeux vers le tableau
    protected $JStart = array("A" => 103, "B" => 104, "C" => 105); // Caractères de sélection de jeu au début du C128
    protected $JSwap = array("A" => 101, "B" => 100, "C" => 99);   // Caractères de changement de jeu

//____________________________ Extension du constructeur _______________________

    function __construct($orientation = 'P', $unit = 'mm', $format = 'A4') {

        parent::__construct($orientation, $unit, array(40,45));

        $this->T128[] = array(2, 1, 2, 2, 2, 2);           //0 : [ ]               // composition des caractères
        $this->T128[] = array(2, 2, 2, 1, 2, 2);           //1 : [!]
        $this->T128[] = array(2, 2, 2, 2, 2, 1);           //2 : ["]
        $this->T128[] = array(1, 2, 1, 2, 2, 3);           //3 : [#]
        $this->T128[] = array(1, 2, 1, 3, 2, 2);           //4 : [$]
        $this->T128[] = array(1, 3, 1, 2, 2, 2);           //5 : [%]
        $this->T128[] = array(1, 2, 2, 2, 1, 3);           //6 : [&]
        $this->T128[] = array(1, 2, 2, 3, 1, 2);           //7 : [']
        $this->T128[] = array(1, 3, 2, 2, 1, 2);           //8 : [(]
        $this->T128[] = array(2, 2, 1, 2, 1, 3);           //9 : [)]
        $this->T128[] = array(2, 2, 1, 3, 1, 2);           //10 : [*]
        $this->T128[] = array(2, 3, 1, 2, 1, 2);           //11 : [+]
        $this->T128[] = array(1, 1, 2, 2, 3, 2);           //12 : [,]
        $this->T128[] = array(1, 2, 2, 1, 3, 2);           //13 : [-]
        $this->T128[] = array(1, 2, 2, 2, 3, 1);           //14 : [.]
        $this->T128[] = array(1, 1, 3, 2, 2, 2);           //15 : [/]
        $this->T128[] = array(1, 2, 3, 1, 2, 2);           //16 : [0]
        $this->T128[] = array(1, 2, 3, 2, 2, 1);           //17 : [1]
        $this->T128[] = array(2, 2, 3, 2, 1, 1);           //18 : [2]
        $this->T128[] = array(2, 2, 1, 1, 3, 2);           //19 : [3]
        $this->T128[] = array(2, 2, 1, 2, 3, 1);           //20 : [4]
        $this->T128[] = array(2, 1, 3, 2, 1, 2);           //21 : [5]
        $this->T128[] = array(2, 2, 3, 1, 1, 2);           //22 : [6]
        $this->T128[] = array(3, 1, 2, 1, 3, 1);           //23 : [7]
        $this->T128[] = array(3, 1, 1, 2, 2, 2);           //24 : [8]
        $this->T128[] = array(3, 2, 1, 1, 2, 2);           //25 : [9]
        $this->T128[] = array(3, 2, 1, 2, 2, 1);           //26 : [:]
        $this->T128[] = array(3, 1, 2, 2, 1, 2);           //27 : [;]
        $this->T128[] = array(3, 2, 2, 1, 1, 2);           //28 : [<]
        $this->T128[] = array(3, 2, 2, 2, 1, 1);           //29 : [=]
        $this->T128[] = array(2, 1, 2, 1, 2, 3);           //30 : [>]
        $this->T128[] = array(2, 1, 2, 3, 2, 1);           //31 : [?]
        $this->T128[] = array(2, 3, 2, 1, 2, 1);           //32 : [@]
        $this->T128[] = array(1, 1, 1, 3, 2, 3);           //33 : [A]
        $this->T128[] = array(1, 3, 1, 1, 2, 3);           //34 : [B]
        $this->T128[] = array(1, 3, 1, 3, 2, 1);           //35 : [C]
        $this->T128[] = array(1, 1, 2, 3, 1, 3);           //36 : [D]
        $this->T128[] = array(1, 3, 2, 1, 1, 3);           //37 : [E]
        $this->T128[] = array(1, 3, 2, 3, 1, 1);           //38 : [F]
        $this->T128[] = array(2, 1, 1, 3, 1, 3);           //39 : [G]
        $this->T128[] = array(2, 3, 1, 1, 1, 3);           //40 : [H]
        $this->T128[] = array(2, 3, 1, 3, 1, 1);           //41 : [I]
        $this->T128[] = array(1, 1, 2, 1, 3, 3);           //42 : [J]
        $this->T128[] = array(1, 1, 2, 3, 3, 1);           //43 : [K]
        $this->T128[] = array(1, 3, 2, 1, 3, 1);           //44 : [L]
        $this->T128[] = array(1, 1, 3, 1, 2, 3);           //45 : [M]
        $this->T128[] = array(1, 1, 3, 3, 2, 1);           //46 : [N]
        $this->T128[] = array(1, 3, 3, 1, 2, 1);           //47 : [O]
        $this->T128[] = array(3, 1, 3, 1, 2, 1);           //48 : [P]
        $this->T128[] = array(2, 1, 1, 3, 3, 1);           //49 : [Q]
        $this->T128[] = array(2, 3, 1, 1, 3, 1);           //50 : [R]
        $this->T128[] = array(2, 1, 3, 1, 1, 3);           //51 : [S]
        $this->T128[] = array(2, 1, 3, 3, 1, 1);           //52 : [T]
        $this->T128[] = array(2, 1, 3, 1, 3, 1);           //53 : [U]
        $this->T128[] = array(3, 1, 1, 1, 2, 3);           //54 : [V]
        $this->T128[] = array(3, 1, 1, 3, 2, 1);           //55 : [W]
        $this->T128[] = array(3, 3, 1, 1, 2, 1);           //56 : [X]
        $this->T128[] = array(3, 1, 2, 1, 1, 3);           //57 : [Y]
        $this->T128[] = array(3, 1, 2, 3, 1, 1);           //58 : [Z]
        $this->T128[] = array(3, 3, 2, 1, 1, 1);           //59 : [[]
        $this->T128[] = array(3, 1, 4, 1, 1, 1);           //60 : [\]
        $this->T128[] = array(2, 2, 1, 4, 1, 1);           //61 : []]
        $this->T128[] = array(4, 3, 1, 1, 1, 1);           //62 : [^]
        $this->T128[] = array(1, 1, 1, 2, 2, 4);           //63 : [_]
        $this->T128[] = array(1, 1, 1, 4, 2, 2);           //64 : [`]
        $this->T128[] = array(1, 2, 1, 1, 2, 4);           //65 : [a]
        $this->T128[] = array(1, 2, 1, 4, 2, 1);           //66 : [b]
        $this->T128[] = array(1, 4, 1, 1, 2, 2);           //67 : [c]
        $this->T128[] = array(1, 4, 1, 2, 2, 1);           //68 : [d]
        $this->T128[] = array(1, 1, 2, 2, 1, 4);           //69 : [e]
        $this->T128[] = array(1, 1, 2, 4, 1, 2);           //70 : [f]
        $this->T128[] = array(1, 2, 2, 1, 1, 4);           //71 : [g]
        $this->T128[] = array(1, 2, 2, 4, 1, 1);           //72 : [h]
        $this->T128[] = array(1, 4, 2, 1, 1, 2);           //73 : [i]
        $this->T128[] = array(1, 4, 2, 2, 1, 1);           //74 : [j]
        $this->T128[] = array(2, 4, 1, 2, 1, 1);           //75 : [k]
        $this->T128[] = array(2, 2, 1, 1, 1, 4);           //76 : [l]
        $this->T128[] = array(4, 1, 3, 1, 1, 1);           //77 : [m]
        $this->T128[] = array(2, 4, 1, 1, 1, 2);           //78 : [n]
        $this->T128[] = array(1, 3, 4, 1, 1, 1);           //79 : [o]
        $this->T128[] = array(1, 1, 1, 2, 4, 2);           //80 : [p]
        $this->T128[] = array(1, 2, 1, 1, 4, 2);           //81 : [q]
        $this->T128[] = array(1, 2, 1, 2, 4, 1);           //82 : [r]
        $this->T128[] = array(1, 1, 4, 2, 1, 2);           //83 : [s]
        $this->T128[] = array(1, 2, 4, 1, 1, 2);           //84 : [t]
        $this->T128[] = array(1, 2, 4, 2, 1, 1);           //85 : [u]
        $this->T128[] = array(4, 1, 1, 2, 1, 2);           //86 : [v]
        $this->T128[] = array(4, 2, 1, 1, 1, 2);           //87 : [w]
        $this->T128[] = array(4, 2, 1, 2, 1, 1);           //88 : [x]
        $this->T128[] = array(2, 1, 2, 1, 4, 1);           //89 : [y]
        $this->T128[] = array(2, 1, 4, 1, 2, 1);           //90 : [z]
        $this->T128[] = array(4, 1, 2, 1, 2, 1);           //91 : [{]
        $this->T128[] = array(1, 1, 1, 1, 4, 3);           //92 : [|]
        $this->T128[] = array(1, 1, 1, 3, 4, 1);           //93 : [}]
        $this->T128[] = array(1, 3, 1, 1, 4, 1);           //94 : [~]
        $this->T128[] = array(1, 1, 4, 1, 1, 3);           //95 : [DEL]
        $this->T128[] = array(1, 1, 4, 3, 1, 1);           //96 : [FNC3]
        $this->T128[] = array(4, 1, 1, 1, 1, 3);           //97 : [FNC2]
        $this->T128[] = array(4, 1, 1, 3, 1, 1);           //98 : [SHIFT]
        $this->T128[] = array(1, 1, 3, 1, 4, 1);           //99 : [Cswap]
        $this->T128[] = array(1, 1, 4, 1, 3, 1);           //100 : [Bswap]                
        $this->T128[] = array(3, 1, 1, 1, 4, 1);           //101 : [Aswap]
        $this->T128[] = array(4, 1, 1, 1, 3, 1);           //102 : [FNC1]
        $this->T128[] = array(2, 1, 1, 4, 1, 2);           //103 : [Astart]
        $this->T128[] = array(2, 1, 1, 2, 1, 4);           //104 : [Bstart]
        $this->T128[] = array(2, 1, 1, 2, 3, 2);           //105 : [Cstart]
        $this->T128[] = array(2, 3, 3, 1, 1, 1);           //106 : [STOP]
        $this->T128[] = array(2, 1);                       //107 : [END BAR]

        for ($i = 32; $i <= 95; $i++) {                                            // jeux de caractères
            $this->ABCset .= chr($i);
        }
        $this->Aset = $this->ABCset;
        $this->Bset = $this->ABCset;

        for ($i = 0; $i <= 31; $i++) {
            $this->ABCset .= chr($i);
            $this->Aset .= chr($i);
        }
        for ($i = 96; $i <= 127; $i++) {
            $this->ABCset .= chr($i);
            $this->Bset .= chr($i);
        }
        for ($i = 200; $i <= 210; $i++) {                                           // controle 128
            $this->ABCset .= chr($i);
            $this->Aset .= chr($i);
            $this->Bset .= chr($i);
        }
        $this->Cset = "0123456789" . chr(206);

        for ($i = 0; $i < 96; $i++) {                                                   // convertisseurs des jeux A & B
            @$this->SetFrom["A"] .= chr($i);
            @$this->SetFrom["B"] .= chr($i + 32);
            @$this->SetTo["A"] .= chr(($i < 32) ? $i + 64 : $i - 32);
            @$this->SetTo["B"] .= chr($i);
        }
        for ($i = 96; $i < 107; $i++) {                                                 // contrôle des jeux A & B
            @$this->SetFrom["A"] .= chr($i + 104);
            @$this->SetFrom["B"] .= chr($i + 104);
            @$this->SetTo["A"] .= chr($i);
            @$this->SetTo["B"] .= chr($i);
        }
    }

//________________ Fonction encodage et dessin du code 128 _____________________
    function Code128($x, $y, $code, $w, $h) {
        $Aguid = "";                                                                      // Création des guides de choix ABC
        $Bguid = "";
        $Cguid = "";
        for ($i = 0; $i < strlen($code); $i++) {
            $needle = substr($code, $i, 1);
            $Aguid .= ((strpos($this->Aset, $needle) === false) ? "N" : "O");
            $Bguid .= ((strpos($this->Bset, $needle) === false) ? "N" : "O");
            $Cguid .= ((strpos($this->Cset, $needle) === false) ? "N" : "O");
        }

        $SminiC = "OOOO";
        $IminiC = 4;

        $crypt = "";
        while ($code > "") {
            // BOUCLE PRINCIPALE DE CODAGE
            $i = strpos($Cguid, $SminiC);                                                // forçage du jeu C, si possible
            if ($i !== false) {
                $Aguid [$i] = "N";
                $Bguid [$i] = "N";
            }

            if (substr($Cguid, 0, $IminiC) == $SminiC) {                                  // jeu C
                $crypt .= chr(($crypt > "") ? $this->JSwap["C"] : $this->JStart["C"]);  // début Cstart, sinon Cswap
                $made = strpos($Cguid, "N");                                             // étendu du set C
                if ($made === false) {
                    $made = strlen($Cguid);
                }
                if (fmod($made, 2) == 1) {
                    $made--;                                                            // seulement un nombre pair
                }
                for ($i = 0; $i < $made; $i += 2) {
                    $crypt .= chr(strval(substr($code, $i, 2)));                          // conversion 2 par 2
                }
                $jeu = "C";
            } else {
                $madeA = strpos($Aguid, "N");                                            // étendu du set A
                if ($madeA === false) {
                    $madeA = strlen($Aguid);
                }
                $madeB = strpos($Bguid, "N");                                            // étendu du set B
                if ($madeB === false) {
                    $madeB = strlen($Bguid);
                }
                $made = (($madeA < $madeB) ? $madeB : $madeA );                         // étendu traitée
                $jeu = (($madeA < $madeB) ? "B" : "A" );                                // Jeu en cours

                $crypt .= chr(($crypt > "") ? $this->JSwap[$jeu] : $this->JStart[$jeu]); // début start, sinon swap

                $crypt .= strtr(substr($code, 0, $made), $this->SetFrom[$jeu], $this->SetTo[$jeu]); // conversion selon jeu
            }
            $code = substr($code, $made);                                           // raccourcir légende et guides de la zone traitée
            $Aguid = substr($Aguid, $made);
            $Bguid = substr($Bguid, $made);
            $Cguid = substr($Cguid, $made);
        }                                                                          // FIN BOUCLE PRINCIPALE

        $check = ord($crypt[0]);                                                   // calcul de la somme de contrôle
        for ($i = 0; $i < strlen($crypt); $i++) {
            $check += (ord($crypt[$i]) * $i);
        }
        $check %= 103;

        $crypt .= chr($check) . chr(106) . chr(107);                               // Chaine cryptée complète

        $i = (strlen($crypt) * 11) - 8;                                            // calcul de la largeur du module
        $modul = $w / $i;

        for ($i = 0; $i < strlen($crypt); $i++) {                                      // BOUCLE D'IMPRESSION
            $c = $this->T128[ord($crypt[$i])];
            for ($j = 0; $j < count($c); $j++) {
                $this->Rect($x, $y, $c[$j] * $modul, $h, "F");
                $x += ($c[$j++] + $c[$j]) * $modul;
            }
        }
    }

}
