<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlTramites extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("resource_model");
        $this->load->model("tramites_model");
        $this->load->library('session');
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vTramites');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->tramites_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramites_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAdjuntosByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramites_model->getAdjuntosByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->tramites_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTramites() {
        try {
            $data = $this->tramites_model->getTramites();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratos() {
        try {
            $data = $this->tramites_model->getContratos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $data = $this->tramites_model->getResponsables();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyectos' => (isset($Proyectos) && $Proyectos !== '') ? $Proyectos : NULL,
                'IdTramite' => (isset($Tramite) && $Tramite !== '') ? $Tramite : NULL,
                'Tramite' => (isset($TramiteT) && $TramiteT !== '') ? $TramiteT : NULL,
                'Contrato' => (isset($Contrato) && $Contrato !== '') ? $Contrato : NULL,
                'Instancia' => (isset($Instancia) && $Instancia !== '') ? strtoupper($Instancia) : NULL,
                'Requisitos' => (isset($Requisitos) && $Requisitos !== '') ? strtoupper($Requisitos) : NULL,
                'Duracion' => (isset($Duracion) && $Duracion !== '') ? strtoupper($Duracion) : NULL,
                'Direccion' => (isset($Direccion)) ? strtoupper($Direccion) : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? strtoupper($Responsable) : NULL,
                'FechaInicio' => (isset($FechaInicio) && $FechaInicio !== '') ? strtoupper($FechaInicio) : NULL,
                'FechaTermino' => (isset($FechaTermino) && $FechaTermino !== '') ? strtoupper($FechaTermino) : NULL,
                'Observaciones' => (isset($ObservacionesDelTramite) && $ObservacionesDelTramite !== '') ? strtoupper($ObservacionesDelTramite) : NULL,
                'Evidencia' => (isset($Evidencia) && $Evidencia !== '') ? strtoupper($Evidencia) : NULL,
                'Estado' => (isset($Estado) && $Estado !== '') ? strtoupper($Estado) : NULL,
            );
            $ID = $this->resource_model->onAction('rtramites', $data, 'save', 0);
            $Subject = utf8_decode("SE HA REGISTRADO UN NUEVO TRÁMITE: ");
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="25%" width="25%">';
            $bodyContent .= '<BR><h1>DATOS DEL TRÁMITE</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>DESARROLLO INMOBILIARIO</B></th>'
                    . '<th><B>NOMBRE DEL TRÁMITE</B></th>'
                    . '<th><B>CONTRATO</B></th>'
                    . '<th><B>INSTANCIA DONDE SE REALIZA</B></th>'
                    . '<th><B>REQUISITOS PARA SU TRAMITACIÓN</B></th>'
                    . '<th><B>DURACIÓN APROXIMADA DEL TRÁMITE</B></th>'
                    . '<th><B>DIRECCIÓN DEL LUGAR DE TRAMITACIÓN</B></th>'
                    . '<th><B>OBSERVACIONES DEL TRAMITE</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($ProyectosT) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($TramiteT) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(($ContratoT !== '') ? $ContratoT : "NO APLICA") . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Instancia) . '</td>';
            $bodyContent .= '<td style="padding: 10px;" align="justify">' . strtoupper($Requisitos) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Duracion) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Direccion) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($ObservacionesDelTramite) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $bodyContent .= '<BR><h1>ASIGNACIÒN DEL TRÁMITE</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>RESPONSABLE</B></th>'
                    . '<th><B>FECHA DE INICIO DEL TRÁMITE</B></th>'
                    . '<th><B>FECHA DE TÉRMINO DEL TRÁMITE</B></th>'
                    . '<th><B>ESTADO DEL TRAMITE</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($ResponsableT) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($FechaInicio) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($FechaTermino) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($EstadoT) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';
            $this->onEnviarTramite($Subject, $bodyContent);
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAddSeguimientoTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Ndesarrollo' => (isset($Proyectos) && $Proyectos !== '') ? $Proyectos : NULL,
                'Tramite' => (isset($Tramite) && $Tramite !== '') ? $Tramite : NULL,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper($Observaciones) : NULL,
                'Evidencia' => (isset($Evidencia) && $Evidencia !== '') ? $Evidencia : NULL,
                'Fecha' => (isset($Fecha) && $Fecha !== '') ? $Fecha : NULL,
                'EstadoTramite' => (isset($EstadoSeguimiento) && $EstadoSeguimiento !== '') ? $EstadoSeguimiento : NULL,
                'EstadoTramiteT' => (isset($EstadoTramiteT) && $EstadoTramiteT !== '') ? $EstadoTramiteT : NULL
            );
            $ID = $this->resource_model->onAction('rtramitesseguimiento', $data, 'save', 0);
            $Subject = utf8_decode("SE HA AGREGADO UN SEGUIMIENTO AL TRÁMITE: ");
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="25%" width="25%">';
            $bodyContent .= '<BR><h1>DATOS DEL SEGUIMIENTO</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>DESARROLLO INMOBILIARIO</B></th>'
                    . '<th><B>NOMBRE DEL TRÁMITE</B></th>'
                    . '<th><B>OBSERVACIONES</B></th>'
                    . '<th><B>EVIDENCIA</B></th>'
                    . '<th><B>FECHA</B></th>'
                    . '<th><B>ESTADO DEL TRAMITE</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($ProyectosT) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($TramiteT) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($ContratoT) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Observaciones) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Evidencia) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Fecha) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($EstadoTramiteT) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $this->onEnviarTramite($Subject, $bodyContent);
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onUpdateTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Proyectos' => (isset($Proyectos) && $Proyectos !== '') ? $Proyectos : NULL,
                'IdTramite' => (isset($Tramite) && $Tramite !== '') ? $Tramite : NULL,
                'Tramite' => (isset($TramiteT) && $TramiteT !== '') ? $TramiteT : NULL,
                'Contrato' => (isset($Contrato) && $Contrato !== '') ? $Contrato : NULL,
                'Instancia' => (isset($Instancia) && $Instancia !== '') ? strtoupper($Instancia) : NULL,
                'Requisitos' => (isset($Requisitos) && $Requisitos !== '') ? strtoupper($Requisitos) : NULL,
                'Duracion' => (isset($Duracion) && $Duracion !== '') ? strtoupper($Duracion) : NULL,
                'Direccion' => (isset($Direccion)) ? strtoupper($Direccion) : NULL,
                'Responsable' => (isset($Responsable) && $Responsable !== '') ? strtoupper($Responsable) : NULL,
                'FechaInicio' => (isset($FechaInicio) && $FechaInicio !== '') ? strtoupper($FechaInicio) : NULL,
                'FechaTermino' => (isset($FechaTermino) && $FechaTermino !== '') ? strtoupper($FechaTermino) : NULL,
                'Observaciones' => (isset($ObservacionesDelTramite) && $ObservacionesDelTramite !== '') ? strtoupper($ObservacionesDelTramite) : NULL,
                'Evidencia' => (isset($Evidencia) && $Evidencia !== '') ? strtoupper($Evidencia) : NULL,
                'Archivo' => (isset($Archivo) && $Archivo !== '') ? strtoupper($Archivo) : NULL,
                'Estado' => (isset($Estado) && $Estado !== '') ? strtoupper($Estado) : NULL,
            );
//            var_dump($data);
            $this->resource_model->onAction('rtramites', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onAddArchivoDeSeguiientoDeTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $URL_DOC = 'uploads/Tramites';
            $master_url = base_url() . $URL_DOC . '/';

            if (isset($_FILES["Archivo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'rArchivo' => ($img),
                        'Archivo' => $_FILES["Archivo"]["name"],
                        'Carpeta' => 'Tramites'
                    );
                    $this->resource_model->onAction('rtramitesseguimiento', $data, 'update', array('ID', $ID));
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function onEliminarArchivoGuardadoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('rtramitesseguimiento', $data, "update", array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getAdjuntoByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->tramites_model->getAdjuntoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviarTramite($Subject, $bodyContent) {
        try {
            $URL_DOC = 'uploads/TramitesXID';
            $master_url = base_url() . $URL_DOC . '/';
            require_once APPPATH . "/third_party/PHPMailer/class.smtp.php";
            require_once APPPATH . "/third_party/PHPMailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sistemarabina@gmail.com';
            $mail->Password = '1q3E5t7U9o';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('sistemas@rabina.com.mx', 'MENSAJE DEL SISTEMA');
            $mail->addReplyTo('sistemas@rabina.com.mx', 'NO RESPONDER');
            $mail->addAddress('sistemas@rabina.com.mx');   // Add a recipient
            $mail->addBCC('orico09@me.com');
//            $mail->addBCC('administrativo@rabina.com.mx');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('areatecnica@rabina.com.mx');
//            $mail->addBCC('sistemarabina@gmail.com');
            $mail->addBCC('sistemas@rabina.com.mx');
//            if ($_FILES["rtImagen"]["name"] !== '') {
//                $mail->addAttachment($URL, $_FILES["rtImagen"]["name"]);
//            } else {
//                print 'NO SE ENVIO EL ARCHIVO ADJUNTO';
//                print $URL;
//            }
            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = $Subject;
            $mail->AddEmbeddedImage('media/LogoRabina2017.png', 'RabinaLogo');

            $mail->Body = utf8_decode($bodyContent);
            if (!$mail->send()) {
                echo 'EL MENSAJE NO PUDO SER ENVIADO';
                echo 'ERROR EN EL CORREO: ' . $mail->ErrorInfo;
            } else {
                echo 'MENSAJE ENVIADO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
