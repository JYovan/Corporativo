<?php
/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ctrlContratistas extends CI_Controller {

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
        $this->load->model("contratistas_model");
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
            $indiceuser = $this->input->get('i');
            $USUARIOS = $this->modelo->getUSUARIOSALL('');
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'vContratistas';
            $this->_renderView($data);
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vLogin';
            $this->_renderView($data);
        }
    }

    public function RDestajo() {
        $Ndesarrollo = $_POST["Ndesarrollo"];
        $ConceptoP = $_POST["ConceptoP"];
        $ContratistasPagos = $this->modelo->getContratistasPagosAll($Ndesarrollo, $ConceptoP);
        $Conceptos = $this->modelo->getConceptoPAll();
        $Contratistas = $this->modelo->getContratistas();

        $i = 0;
        $r[0] = "-";
        if (empty($ContratistasPagos)) {
            echo "Vacio";
        }
        foreach ($ContratistasPagos as $ContratistasPagos1) {
            $m = count($r);
            $encontro = "No";
            for ($i = 0; $i < $m; $i++) {
                if ($r[$i] == $ContratistasPagos1->Contratistas) {
                    $encontro = "Si";
                }
            }
            if ($encontro == "No") {
                $r[$i] = $ContratistasPagos1->Contratistas;
            }
        }

        $temp = count($r);
        for ($i = 1; $i < $temp; $i++) {
            $respuesta2 = '-';
            foreach ($Contratistas as $Contratistas1) {
                if ($Contratistas1->ID == $r[$i]) {
                    $respuesta2 = $Contratistas1->Proveedor;
                }
            }
            ?>
            <div class="col-md-12 ">
                <?php echo $respuesta2 ?>
            </div>

            <div class="col-md-12 " style="background-color:#99A79A">
                <div class="col-xs-12 col-md-8 ">
                    Fecha
                </div>
                <div class="col-xs-12 col-md-8 ">
                    Anterior
                </div>
                <div class="col-xs-12 col-md-8 ">
                    Esta
                </div>
                <div class="col-xs-12 col-md-8 ">
                    Acumulado
                </div>
            </div>

            <?php
            foreach ($ContratistasPagos as $ContratistasPagos1) {
                if ($r[$i] == $ContratistasPagos1->Contratistas) {
                    ?>
                    <div class="col-md-12 ">
                        <div class="col-xs-12 col-md-8 ">
                            <?php echo $ContratistasPagos1->FechaPago ?>
                        </div>
                        <div class="col-xs-12 col-md-8 ">
                            <?php echo $ContratistasPagos1->TotalTrabajos - $ContratistasPagos1->TrabajosPendientes ?>
                        </div>
                        <div class="col-xs-12 col-md-8 ">
                            <?php echo $ContratistasPagos1->TrabajosRealizados ?>
                        </div>
                        <div class="col-xs-12 col-md-8 ">
                            <?php echo ($ContratistasPagos1->TotalTrabajos - $ContratistasPagos1->TrabajosPendientes) + $ContratistasPagos1->TrabajosRealizados ?>
                        </div>
                    </div>

                    <?php
                }
            }
        }
        ?>
        <?php
    }

    public function ContratistasRConcepto() {
        extract(filter_input_array(INPUT_POST));
        $data = array(
            'Ndesarrollo' => $Ndesarrollo,
            'ConceptoP' => $ConceptoP,
            'Contratistas' => $Contratistas,
            'Precio' => $Precio,
            'TotalTrabajos' => $TotalTrabajos,
            'MontoTrabajos' => $MontoTrabajos,
            'Inicio' => $Inicio,
            'Termino' => $Termino
        );
        $datos = $this->contratistas_model->getContratistasRConcepto($data);
        try {
            if (isset($_POST["Ndesarrollo"])) {
                print $datos;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateConcepto() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'Ndesarrollo' => $NdesarrolloU,
                    'ConceptoP' => $ConceptoPU,
                    'Contratistas' => $ContratistasU,
                    'Precio' => $PrecioU,
                    'TotalTrabajos' => $TotalTrabajosU,
                    'MontoTrabajos' => $MontoTrabajosU,
                    'Inicio' => $InicioU,
                    'Termino' => $TerminoU
                );
                $IDU = $this->contratistas_model->onAction('Rconceptos', $data, "update", array('ID', $ID));
                print 1;
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function Contratistas() {
        $where = '';

        $ContratistasID = $this->input->post('ContratistasID');
        $indiceuser = $this->input->post('user');

        if ($ContratistasID == 'Contratistas_1') {

            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
//Proyectos

            $Proyectos = $this->modelo->getProyectosALL();
            $data['Proyectos'] = $Proyectos;
//Abriendo BD Proyectos

            $ConceptoP = $this->modelo->getConceptoPAll();
            $data['ConceptoP'] = $ConceptoP;
//Abriendo BD Proyectos

            $Contratistas = $this->modelo->getContratistas();
            $data['Contratistas'] = $Contratistas;
//Proyectos

            $Lotes = $this->modelo->getLotesALL();
            $data['Lotes'] = $Lotes;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Contratistas_1';
            $this->_renderView($data);
        }
        if ($ContratistasID == 'Contratistas_2') {

            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
//Abriendo BD Proyectos

            $ConceptoP = $this->modelo->getConceptoPAll();
            $data['ConceptoP'] = $ConceptoP;
//Abriendo BD Proyectos

            $Contratistas = $this->modelo->getContratistas();
            $data['Contratistas'] = $Contratistas;
            $data['contentView'] = 'Contratistas_2';
            $this->_renderView($data);
        }
        if ($ContratistasID == 'Contratistas_3') {

            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
//Abriendo BD Proyectos

            $ConceptoP = $this->modelo->getConceptoPAll2();
            $data['ConceptoP'] = $ConceptoP;
//Abriendo BD Proyectos

            $Conceptos = $this->modelo->getConceptoPAll();
            $data['Conceptos'] = $Conceptos;
//Abriendo BD Proyectos

            $Contratistas = $this->modelo->getContratistas();
            $data['Contratistas'] = $Contratistas;
//Abriendo BD Proyectos

            $FormaPago = $this->modelo->getFormaPago();
            $data['FormaPago'] = $FormaPago;
//Abriendo BD Proyectos

            $TipoComprobante = $this->modelo->getTipoComprobante2();
            $data['TipoComprobante'] = $TipoComprobante;
//Proyectos

            $Proyectos = $this->modelo->getProyectosALL();
            $data['Proyectos'] = $Proyectos;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Contratistas_3';
            $this->_renderView($data);
        }
        if ($ContratistasID == 'Contratistas_4') {

            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
//Abriendo BD Proyectos

            $ConceptoP = $this->modelo->getConceptoPAll2();
            $data['ConceptoP'] = $ConceptoP;
//Abriendo BD Proyectos

            $Conceptos = $this->modelo->getConceptoPAll();
            $data['Conceptos'] = $Conceptos;
//Abriendo BD Proyectos

            $Contratistas = $this->modelo->getContratistas();
            $data['Contratistas'] = $Contratistas;
//Abriendo BD Proyectos

            $FormaPago = $this->modelo->getFormaPago();
            $data['FormaPago'] = $FormaPago;
//Abriendo BD Proyectos

            $TipoComprobante = $this->modelo->getTipoComprobante2();
            $data['TipoComprobante'] = $TipoComprobante;
//Proyectos

            $Proyectos = $this->modelo->getProyectosALL();
            $data['Proyectos'] = $Proyectos;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Contratistas_4';
            $this->_renderView($data);
        }
        if ($ContratistasID == 'Contratistas_5') {

            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
//Abriendo BD Proyectos

            $ConceptoP = $this->modelo->getConceptoPAll();
            $data['ConceptoP'] = $ConceptoP;
//Abriendo BD Proyectos

            $Conceptos = $this->modelo->getConceptoPAll();
            $data['Conceptos'] = $Conceptos;
//Abriendo BD Proyectos

            $Contratistas = $this->modelo->getContratistas();
            $data['Contratistas'] = $Contratistas;
//Abriendo BD Proyectos

            $FormaPago = $this->modelo->getFormaPago();
            $data['FormaPago'] = $FormaPago;
//Abriendo BD Proyectos

            $TipoComprobante = $this->modelo->getTipoComprobante2();
            $data['TipoComprobante'] = $TipoComprobante;
//Proyectos

            $Proyectos = $this->modelo->getProyectosALL();
            $data['Proyectos'] = $Proyectos;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Contratistas_5';
            $this->_renderView($data);
        }
        if ($ContratistasID == 'Contratistas_6') {

            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
//Abriendo BD Proyectos

            $ContPagos = $this->modelo->getContratistasPagosAlltodos();
            $data['ContPagos'] = $ContPagos;
//Abriendo BD Proyectos

            $Conceptos = $this->modelo->getConceptoPAll();
            $data['Conceptos'] = $Conceptos;
//Abriendo BD Proyectos

            $ConceptoP = $this->modelo->getConceptoPAll();
            $data['ConceptoP'] = $ConceptoP;
//Proyectos

            $Proyectos = $this->modelo->getProyectosALL();
            $data['Proyectos'] = $Proyectos;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Contratistas_6';
            $this->_renderView($data);
        }
    }

    public function ContratistaPagos() {

        $indiceuser = $this->input->post('user');
        $Ndesarrollo = $this->input->post('Ndesarrollo');
        $ConceptoP = $this->input->post('ConceptoP');
        $Contratistas = $this->input->post('Contratistas');

        $ID = $this->input->post('Contratistas');
        $Precio = str_replace(",", "", $this->input->post('Precio'));
        $TotalTrabajos = str_replace(",", "", $this->input->post('TotalTrabajos'));
        $MontoTrabajos = str_replace(",", "", $this->input->post('MontoTrabajos'));
        $TrabajosRealizados = str_replace(",", "", $this->input->post('TrabajosRealizados'));
        $MontoTrabajosRealizados = str_replace(",", "", $this->input->post('MontoTrabajosRealizados'));
        $TrabajosPendientes = str_replace(",", "", $this->input->post('TrabajosPendientes'));
        $MontoTrabajosPendientes = str_replace(",", "", $this->input->post('MontoTrabajosPendientes'));
        $TrabajosaPagar = str_replace(",", "", $this->input->post('TrabajosaPagar'));
        $PrecioPagar = str_replace(",", "", $this->input->post('PrecioPagar'));
        $MontoPago = str_replace(",", "", $this->input->post('MontoPago'));
        $FechaPago = $this->input->post('FechaPago');
        $FormaPago = $this->input->post('FormaPago');
        $Comprobante = $this->input->post('Comprobante');
        $Inicio = $this->input->post('Inicio');
        $Termino = $this->input->post('Termino');
        $Paga = $this->input->post('Paga');
        $Observaciones = $this->input->post('Observaciones');
        $TrabajosRealizados = $TrabajosRealizados + $TrabajosaPagar;
        $MontoTrabajosRealizados = $MontoTrabajosRealizados + $MontoPago;
        $datos = $this->contratistas_model->getContratistaPagos(
                $ID, $Ndesarrollo, $ConceptoP, $Contratistas, $Precio, $TotalTrabajos, $MontoTrabajos, $TrabajosRealizados, $MontoTrabajosRealizados, $TrabajosPendientes, $MontoTrabajosPendientes, $TrabajosaPagar, $PrecioPagar, $MontoPago, $FechaPago, $FormaPago, $Comprobante, $Inicio, $Termino, $Paga, $Observaciones
        );
        echo '<script>alert("Registro completo")</script>';

//        $USUARIOS = $this->modelo->getUSUARIOSALL();
//        $data['USUARIOS'] = $USUARIOS;
//        $data['User'] = $indiceuser;
//        $data['scripts'] = array('cliente');
//        $data['contentView'] = 'Contratistas';
//        $this->_renderView($data);
    }

    public function getConceptos() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->contratistas_model->getConceptos($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ContratistasDes() {
        $Ndesarrollo = $_POST["Ndesarrollo"];
        $ConceptoP2 = $this->modelo->getConceptosID($Ndesarrollo);
        $Conceptos = $this->modelo->getConceptoPAll();
        $data['Conceptos'] = $Conceptos;
        ?>     
        <div class="col-md-12 ">
            <label for="2" class="control-label">Concepto de pago</label><br>
        </div>  
        <div class="col-md-12 ">
            <select class="form-control" id="ConceptoP" name="ConceptoP" >
                <option value="0">Selecciona</option>
                <?php
                $i = 0;
                $r[0] = "-";
                foreach ($ConceptoP2 as $ConceptoP1) {
                    $m = count($r);
                    $encontro = "No";
                    for ($i = 0; $i < $m; $i++) {
                        if ($r[$i] == $ConceptoP1->ConceptoP) {
                            $encontro = "Si";
                        }
                    }
                    if ($encontro == "No") {
                        $r[$i] = $ConceptoP1->ConceptoP;
                    }
                }

                $temp = count($r);
                for ($i = 1; $i < $temp; $i++) {
                    $resp = "-";
                    foreach ($Conceptos as $Conceptos1) {
                        if ($Conceptos1->id_concepto == $r[$i]) {
                            $resp = $Conceptos1->dsc_concepto;
                        }
                    }
                    ?> 
                    <option value="<?php echo $r[$i]; ?>"><?php echo $resp; ?></option>
                <?php } ?>
            </select>
        </div>
        <?php
    }

    public function GrafxConcepto() {
        $ConceptoP = $_POST["ConceptoP"];
        $Ndesarrollo = $_POST["Ndesarrollo"];
//Abriendo BD Proyectos

        $ContratistasPagos = $this->modelo->getContratistasPagosAll($Ndesarrollo, $ConceptoP);
//Abriendo BD Proyectos

        $Conceptos = $this->modelo->getConceptoPAll();

        $r = 0;
        $u = 0;
        $p = 0;
        foreach ($ContratistasPagos as $ContratistasPagos1) {
            $r = $r + $ContratistasPagos1->TrabajosaPagar;
            $u = $ContratistasPagos1->TrabajosaPagar;
            $p = $ContratistasPagos1->TrabajosPendientes - $ContratistasPagos1->TrabajosaPagar;
        }

        $respuesta = '-';
        foreach ($Conceptos as $temp) {
            if ($temp->id_concepto == $ConceptoP) {
                $respuesta = $temp->dsc_concepto;
            }
        }
        ?>    
        <div class="col-md-6 " id="GrafxTrabajo">
            <canvas id="Barra2" />
        </div>  
        <?php ?>
        <script>
            var data2 = {
            labels : [
                    < ? echo '"'.$respuesta.'"' ? >
            ],
                    datasets : [
                    {
                    label: "Realizados",
                            fillColor : "rgba(118,207,40,1)",
                            strokeColor : "rgba(118,207,40,0.8)",
                            highlightFill: "rgba(118,207,40,0.75)",
                            highlightStroke: "rgba(118,207,40,0.5)",
                            data : [ < ? echo $r ? > ]
                    },
                    {
                    label: "Pendientes",
                            fillColor : "rgba(251,32,32,1)",
                            strokeColor : "rgba(251,32,32,0.8)",
                            highlightFill: "rgba(251,32,32,0.75)",
                            highlightStroke: "rgba(251,32,32,0.5)",
                            data : [ < ? echo $p ? > ]
                    }
                    ]

            };
            var Barras2 = document.getElementById("Barra2").getContext("2d");
            window.myBarra2 = new Chart(Barras2).Bar(data2, {
            animationEasing : "easeOutBounce",
                    animateRotate : true,
                    animateScale : false,
                    scaleFontSize : 10,
                    scaleFontColor : "#666666",
                    //scaleOverride: true,
                    //scaleSteps: 10,
                    //scaleStepWidth: 1,
                    //scaleStartValue: 0,
                    scaleShowGridLines : true,
                    scaleGridLineColor : "rgba(255,255,255,.05)",
                    scaleGridLineWidth : 1,
                    barShowStroke : true,
                    barStrokeWidth : 1,
                    responsive : true
            });
            legend(document.getElementById("legendDiv2"), data2);
            // document.getElementById("legendDiv2").innerHTML = myBarra2.generateLegend();
        </script>

        <?php
    }

    public function GrafxComportamiento() {
        $ConceptoP = $_POST["ConceptoP"];
        $Ndesarrollo = $_POST["Ndesarrollo"];
        $Start = date_create_from_format('d/m/Y', $_POST["FechaInicioEdo"]);
        $StartFecha = date_format($Start, 'Ymd');
        $End = date_create_from_format('d/m/Y', $_POST["FechaTerminoEdo"]);
        $EndFecha = date_format($End, 'Ymd');
//Abriendo BD Proyectos
        $ContratistasPagos = $this->modelo->getContratistasPagosAll($Ndesarrollo, $ConceptoP);
//Abriendo BD Proyectos

        $Conceptos = $this->modelo->getConceptoPAll();

        $f[] = "";
        $c[] = "";

        for ($i = 1; $i < 37; $i++) {
            $r[$i] = 0;
        }
        $i = 0;
        foreach ($ContratistasPagos as $ContratistasPagos1) {
            $Valor = date_create_from_format('d/m/Y', $ContratistasPagos1->FechaPago);
            $fecha = date_format($Valor, 'Ymd');

            if ($fecha >= $StartFecha && $fecha <= $EndFecha) {
                $f[$i] = $ContratistasPagos1->FechaPago;
                $c[$i] = $ContratistasPagos1->TrabajosaPagar;
                $i++;
            }
        }
        $m = count($f);
        ?>    
        <div class="col-md-10 " id="GrafxComportamiento">
            <canvas id="Barra1" />
        </div>  
        <?php ?>
        <script>
            var data1 = {
            labels : [
        <?php
        for ($i = 0; $i < $m; $i++) {
            echo '"' . $f[$i] . '",';
        }
        ?>
            ],
                    datasets : [
                    {
                    label: "Realizados",
                            fillColor : "rgba(118,207,40,1)",
                            strokeColor : "rgba(118,207,40,0.8)",
                            highlightFill: "rgba(118,207,40,0.75)",
                            highlightStroke: "rgba118,207,40,0.5)",
                            data : [
        <?php
        for ($i = 0; $i < $m; $i++) {
            echo $c[$i] . ',';
        }
        ?>
                            ]
                    }
                    ]

            };
            var Barras1 = document.getElementById("Barra1").getContext("2d");
            window.myBarra1 = new Chart(Barras1).Bar(data1, {
            animationEasing : "easeOutBounce",
                    animateRotate : true,
                    animateScale : false,
                    scaleFontSize : 6.5,
                    scaleFontColor : "#666666",
                    //scaleOverride: true,
                    //scaleSteps: 10,
                    //scaleStepWidth: 1,
                    //scaleStartValue: 0,
                    scaleShowGridLines : true,
                    scaleGridLineColor : "rgba(255,255,255,.05)",
                    scaleGridLineWidth : 1,
                    barShowStroke : true,
                    barStrokeWidth : 1,
                    responsive : true
            });
            legend(document.getElementById("legendDiv1"), data1);
            //document.getElementById("legendDiv1").innerHTML = myBarra1.generateLegend();
        </script> 

        <?php
    }

    public function ContratistasConcepto() {
        $Ndesarrollo = $_POST["Ndesarrollo"];
        $ConceptoP = $_POST["ConceptoP"];
        $Contratistas = $this->modelo->getContratistasID($Ndesarrollo, $ConceptoP);
        $Cont = $this->modelo->getContratistas();
        ?>     
        <div class="col-md-12 ">
            <label for="2" class="control-label">Contratista proveedor</label><br>
        </div>  
        <div class="col-md-12 ">
            <select class="form-control" id="Contratistas" name="Contratistas" >
                <option value="0">Selecciona</option>
                <?php
                $i = 0;
                $r[0] = "-";
                foreach ($Contratistas as $Contratistas1) {
                    $m = count($r);
                    $encontro = "No";
                    for ($i = 0; $i < $m; $i++) {
                        if ($r[$i] == $Contratistas1->Contratistas) {
                            $encontro = "Si";
                        }
                    }
                    if ($encontro == "No") {
                        $r[$i] = $Contratistas1->Contratistas;
                    }
                }

                $temp = count($r);
                for ($i = 1; $i < $temp; $i++) {
                    $resp = "-";
                    foreach ($Cont as $Cont1) {
                        if ($Cont1->ID == $r[$i]) {
                            $resp = $Cont1->Proveedor;
                        }
                    }
                    ?> 
                    <option value="<?php echo $r[$i]; ?>"><?php echo $resp; ?></option>
                <?php } ?>
            </select>
        </div>
        <?php
    }

    public function InformacionContratista() {
        $Ndesarrollo = $_POST["Ndesarrollo"];
        $ConceptoP = $_POST["ConceptoP"];
        $Contratistas = $_POST["Contratistas"];
        $Rconceptos = $this->modelo->getRconceptos($Ndesarrollo, $ConceptoP, $Contratistas);
        $USUARIOS = $this->modelo->getUSUARIOSALL();
        $FormaPago = $this->modelo->getFormaPago();
        $data['FormaPago'] = $FormaPago;
        $TipoComprobante = $this->modelo->getTipoComprobante2();
        $data['TipoComprobante'] = $TipoComprobante;
        foreach ($Rconceptos as $Rconceptos1) {
            
        }
        ?> 
        <table width="100%">
            <tr>
                <td> 
                    <div class="col-xs-12 col-md-8 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Precio unitario del trabajo</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input  style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Precio" id="Precio" value="<?php echo number_format($Rconceptos1->Precio, 2, '.', ',') ?>" required>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td> 
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Número total de trabajos a realizar</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="TotalTrabajos" id="TotalTrabajos" value="<?php echo number_format($Rconceptos1->TotalTrabajos, 0, '.', ',') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Monto</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="MontoTrabajos" value="<?php echo number_format($Rconceptos1->MontoTrabajos, 2, '.', ',') ?>" id="MontoTrabajos" >
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td> 
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Número total de trabajos realizados hasta la fecha</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="TrabajosRealizados" id="TrabajosRealizados" value="<?php echo number_format($Rconceptos1->TrabajosRealizados, 0, '.', ',') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Monto</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="MontoTrabajosRealizados"  value="<?php echo number_format($Rconceptos1->MontoTrabajosRealizados, 2, '.', ',') ?>" id="MontoTrabajosRealizados" >
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td> 
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Número total de trabajos pendientes</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="TrabajosPendientes" id="TrabajosPendientes"  value="<?php echo number_format($Rconceptos1->TotalTrabajos - $Rconceptos1->TrabajosRealizados, 0, '.', ',') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Monto</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="MontoTrabajosPendientes" id="MontoTrabajosPendientes"  value="<?php echo number_format(($Rconceptos1->TotalTrabajos - $Rconceptos1->TrabajosRealizados) * $Rconceptos1->Precio, 2, '.', ',') ?>"  >
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td> 
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Número de trabajos a pagar</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()" type="number" step="0.01" class="form-control" name="TrabajosaPagar" id="TrabajosaPagar" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Precio al que se pagarán</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()"   type="text" class="form-control" name="PrecioPagar" id="PrecioPagar"  value="<?php echo number_format($Rconceptos1->Precio, 2, '.', ',') ?>" >
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td> 
                    <div class="col-md-6 " id="ResultadoTrabajosNvos">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Monto del pago</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase; color:#F30;" onkeyup="javascript:this.value = this.value.toUpperCase()" type="number" step="0.01" class="form-control" name="MontoPago" id="MontoPago" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Fecha del pago</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="FechaPago" id="FechaPago"   value="<?php echo date("d/m/y") ?>"  >
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td> 
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Forma de pago</label><br>
                        </div>  
                        <div class="col-md-12 ">      
                            <select class="form-control" id="FormaPago" name="FormaPago" >
                                <option value="1">Efectivo</option>
                                <?php foreach ($FormaPago as $FormaPago1) { ?> 
                                    <option value="<?php echo $FormaPago1->id_FormaPago; ?>"><?php echo $FormaPago1->dsc_FormaPago; ?></option>
                                <?php } ?>
                            </select>                
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Tipo de comprobante de pago</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <select class="form-control" id="Comprobante" name="Comprobante" >
                                <option value="1">Firma en bitácora</option>
                                <?php foreach ($TipoComprobante as $TipoComprobante1) { ?> 
                                    <option value="<?php echo $TipoComprobante1->id_TipoComprobante; ?>"><?php echo $TipoComprobante1->dsc_TipoComprobante; ?></option>
                                <?php } ?>
                            </select>         
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td> 
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="1" class="control-label">Fecha de inicio de trabajos</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input type="text" class="form-control" name="Inicio" id="Inicio"   value="<?php echo $Rconceptos1->Inicio ?>"  required>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Fecha de término de trabajos</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Termino" id="Termino"   value="<?php echo $Rconceptos1->Termino ?>" >
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Nombre de quien realiza el pago</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <select class="form-control" id="Paga" name="Paga" >
                                <option value="4">ROGELIO ALEJANDRO RAMÍREZ URBINA</option>
                                <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                    <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">	
                        <div class="col-md-12 ">
                            <label for="2" class="control-label">Observaciones</label><br>
                        </div>  
                        <div class="col-md-12 ">
                            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Observaciones" id="Observaciones">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <?php
    }

    public function RepxConceptos() {
        $ConceptoP = $_POST["ConceptoP"];
        $Start = date_create_from_format('d/m/Y', $_POST["FechaInicioEdo"]);
        $StartFecha = date_format($Start, 'Ymd');
        $End = date_create_from_format('d/m/Y', $_POST["FechaTerminoEdo"]);
        $EndFecha = date_format($End, 'Ymd');

//Abriendo BD Proyectos

        $ContratistasPagos = $this->modelo->getContratistasPagosAll1($ConceptoP);
//Abriendo BD Proyectos

        $Conceptos = $this->modelo->getConceptoPAll();
//Abriendo BD Proyectos

        $Contratistas = $this->modelo->getContratistas();


//Abriendo cobranza
//$Edocuenta = $this->modelo->getCobranzaDepositos($Folio); 
//Abriendo BD cliente 
        ?>
        <table width="100%">    
            <?php
            $TotalPagado = 0;
            $TotalDeuda = 0;
            if ($ConceptoP != '0') {
                ?>
                <tr>
                    <td bgcolor="#99A79A">
                        <div class="col-xs-12 col-md-8 " align="center" style="background-color:#99A79A">
                            Contratista
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Fecha del trabajo realizado 
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Número de trabajos realizados
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Monto pagado por el trabajo realizado
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Número de últimos trabajos realizados
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Monto pagado por últimos trabajos
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Número de trabajos por realizar
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Monto de trabajos por realizar
                        </div>
                        <div class="col-md-2 " align="center" style="background-color:#99A79A">

                        </div>
                    </td>
                </tr> 
                <?php
                foreach ($ContratistasPagos as $ContratistasPagos1) {
                    //$Valor=$Edocuenta1->FechaCobro;
                    $Valor = date_create_from_format('d/m/Y', $ContratistasPagos1->FechaPago);
                    $fecha = date_format($Valor, 'Ymd');
                    //$fecha = strtotime($Valor);
                    if ($fecha >= $StartFecha && $fecha <= $EndFecha) {
                        $TotalPagado = $TotalPagado + $ContratistasPagos1->MontoTrabajosRealizados;
                        $TotalDeuda = $ContratistasPagos1->MontoTrabajosPendientes - $ContratistasPagos1->MontoPago;
                        ?>  
                        <tr>
                            <td>
                                <div class="col-xs-12 col-md-8 " align="center">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($Contratistas as $temp) {
                                        if ($temp->ID == $ContratistasPagos1->Contratistas) {
                                            $respuesta = $temp->Proveedor;
                                        }
                                    }
                                    echo $respuesta
                                    ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->FechaPago ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->TrabajosRealizados ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo number_format($ContratistasPagos1->MontoTrabajosRealizados, 2, '.', ',') ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->TrabajosaPagar ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo number_format($ContratistasPagos1->MontoPago, 2, '.', ',') ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->TrabajosPendientes - $ContratistasPagos1->TrabajosaPagar ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo number_format(($ContratistasPagos1->TrabajosPendientes - $ContratistasPagos1->TrabajosaPagar) * $ContratistasPagos1->PrecioPagar, 2, '.', ',') ?>
                                </div>
                                <div class="col-md-2 " align="center">

                                </div>
                            </td>
                        </tr> 

                        <?php
                    }
                }
                ?>
                <tr>
                    <td>
                        <div class="col-md-8 " align="center">

                        </div>
                        <div class="col-xs-12 col-md-8 " align="right">
                            <?php echo "Total de trabajos pagados: $" . number_format($TotalPagado, 2, '.', ',') ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-8 " align="center">

                        </div>
                        <div class="col-xs-12 col-md-8 " align="right">
                            <?php echo "Total de trabajos pendientes por pagar: $" . number_format($TotalDeuda, 2, '.', ',') ?>
                        </div>
                    </td>
                </tr>
                <?php
            } else {
                ?>	
                <tr>
                    <td bgcolor="#99A79A">
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Concepto
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Contratista
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Fecha del trabajo realizado 
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Número de trabajos realizados
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Monto pagado por el trabajo realizado
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Número de últimos trabajos realizados
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Monto pagado por últimos trabajos
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Número de trabajos por realizar
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">
                            Monto de trabajos por realizar
                        </div>
                        <div class="col-md-1 " align="center" style="background-color:#99A79A">

                        </div>
                    </td>
                </tr>
                <?php
                $ContratistasPagos3 = $this->modelo->getContratistasPagosAlltodos();
                foreach ($ContratistasPagos3 as $ContratistasPagos1) {
                    //$Valor=$Edocuenta1->FechaCobro;
                    $Valor = date_create_from_format('d/m/Y', $ContratistasPagos1->FechaPago);
                    $fecha = date_format($Valor, 'Ymd');

                    //$fecha = strtotime($Valor);
                    if ($fecha >= $StartFecha && $fecha <= $EndFecha) {
                        ?>       
                        <tr>
                            <td>
                                <div class="col-md-1 " align="center">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($Conceptos as $temp) {
                                        if ($temp->id_concepto == $ContratistasPagos1->ConceptoP) {
                                            $respuesta = $temp->dsc_concepto;
                                        }
                                    }
                                    echo $respuesta
                                    ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($Contratistas as $temp) {
                                        if ($temp->ID == $ContratistasPagos1->Contratistas) {
                                            $respuesta = $temp->Proveedor;
                                        }
                                    }
                                    echo $respuesta
                                    ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->FechaPago ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->TrabajosRealizados ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo number_format($ContratistasPagos1->MontoTrabajosRealizados, 2, '.', ',') ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->TrabajosaPagar ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo number_format($ContratistasPagos1->MontoPago, 2, '.', ',') ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo $ContratistasPagos1->TrabajosPendientes - $ContratistasPagos1->TrabajosaPagar ?>
                                </div>
                                <div class="col-md-1 " align="center">
                                    <?php echo number_format(($ContratistasPagos1->TrabajosPendientes - $ContratistasPagos1->TrabajosaPagar) * $ContratistasPagos1->PrecioPagar, 2, '.', ',') ?>
                                </div>
                                <div class="col-md-1 " align="center">

                                </div>
                            </td>
                        </tr>    
                        <?php
                    }
                }
            }
            ?>
            <tr>
                <td>
                    <div class=" col-sm-12">
                        </br>
                    </div>
                </td>
            </tr>   
        </table>
        <?php
    }

    /* NUEVOS METODOS UTILIZANDO JSON PARA CONTRATISTAS 22/06/2016 */

    public function getContratistasDes() {
        try {
            extract(filter_input_array(INPUT_POST));
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                $data = $this->contratistas_model->getContratistasDes($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratistasConcepto() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->contratistas_model->getContratistasConcepto($ID, $CONCEPTO);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getInformacionContratista() {
        try {
            $Ndesarrollo = $_POST["Ndesarrollo"];
            $ConceptoP = $_POST["ConceptoP"];
            $Contratistas = $_POST["Contratistas"];
            $Rconceptos = $this->modelo->getRconceptos($Ndesarrollo, $ConceptoP, $Contratistas);
            $USUARIOS = $this->modelo->getUSUARIOSALL();
            $FormaPago = $this->modelo->getFormaPago();
            $data['FormaPago'] = $FormaPago;
            $TipoComprobante = $this->modelo->getTipoComprobante2();
            $data['TipoComprobante'] = $TipoComprobante;
            print json_encode($Rconceptos);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteGlobalDeDestajoTR() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->contratistas_model->getReporteGlobalDeDestajoTR($ID, $CONCEPTO);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->contratistas_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratistasConceptos() {
        try {
            $data = $this->contratistas_model->getContratistasConceptos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratistas() {
        try {
            $data = $this->contratistas_model->getContratistas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFormasDePago() {
        try {
            $data = $this->contratistas_model->getFormasDePago();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosEnUso() {
        try {
            $data = $this->contratistas_model->getConceptosEnUso();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipoComprobante() {
        try {
            $data = $this->contratistas_model->getTipoComprobante();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosDePago() {
        try {
            $data = $this->contratistas_model->getConceptosDePago();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosDePagoByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->contratistas_model->getConceptosDePagoByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddPayment() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'IDRP'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = array(
                    'IdRconcepto' => $IDRP,
                    'IdContratistasPagos' => $ContratistasRP,
                    'IdFormaDePago' => $FormaPagoRP,
                    'IdUsuario' => $Paga,
                    'IdTipoComprobante' => $ComprobanteRP,
                    'Inicio' => $FechaInicioTRRP,
                    'Termino' => $FechaTerminoTrabajosRP,
                    'NumeroDeTrabajosPagados' => $TrabajosaPagarRP,
                    'PrecioPago' => $PrecioPagarRP,
                    'Observacion' => strtoupper($Observaciones),
                    'FechaPago' => $FechaPago
                );
                var_dump($data);
                $ID = $this->contratistas_model->onAction('HistorialDePagosPorConcepto', $data, "save", 0);
                $data = array(
                    'TrabajosRealizados' => $TrabajosRealizadosRP,
                    'Estatus' => ($TrabajosPendientesRP === '0' ) ? 'CONCLUIDO' : 'INCOMPLETO'
                );
                $IDU = $this->contratistas_model->onAction('Rconceptos', $data, "update", array('ID', $IDRP));
                $json = array('ID' => $ID, 'IDU' => $IDU);
                print json_encode($json);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialDePagos() {
        try {
            $data = $this->contratistas_model->getHistorialDePagos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialDePagosByID() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->contratistas_model->getHistorialDePagosByID($ID);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteConceptoDestajo() {
        try {
            if (filter_var(filter_input(INPUT_POST, 'ID'), FILTER_VALIDATE_INT)) {
                extract(filter_input_array(INPUT_POST));
                $data = $this->contratistas_model->getReporteConceptoDestajo($ID, $FECHAINICIO, $FECHATERMINO);
                print json_encode($data);
            } else {
                print 0;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
