<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlDocumentacionYTtramites extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("resource_model");
        $this->load->model("documentacionytramites_model");
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vDocumentacionYTramites');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->documentacionytramites_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialXTramiteID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getHistorialXTramiteID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getArchivoHistorialXTramiteID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getArchivoHistorialXTramiteID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getHistorialXTramiteConcluidoID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getHistorialXTramiteConcluidoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getArchivoHistorialXTramiteConcluidoID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getArchivoHistorialXTramiteConcluidoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentacionYTramitesAsignadoXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getDocumentacionYTramitesAsignadoXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentacionYTramitesAsignados() {
        try {
            $data = $this->documentacionytramites_model->getDocumentacionYTramitesAsignados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDocumentacionYTramitesAsignadosXUsuarioID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->documentacionytramites_model->getDocumentacionYTramitesAsignadosXUsuarioID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreas() {
        try {
            $data = $this->documentacionytramites_model->getAreas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpleados() {
        try {
            $data = $this->documentacionytramites_model->getEmpleados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $data = $this->documentacionytramites_model->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPuestos() {
        try {
            $data = $this->documentacionytramites_model->getPuestos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTipos() {
        try {
            $data = $this->documentacionytramites_model->getTipos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCategorias() {
        try {
            $data = $this->documentacionytramites_model->getCategorias();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddDocumentacionYTramite() {
        try {
            $data = array();
            foreach (filter_input_array(INPUT_POST) as $key => $value) {
                $data[$key] = (isset($value) && $value !== null && $value !== '' && $value !== '0') ? strtoupper($value) : NULL;
            }
            $data['Registro'] = Date('d/m/Y h:i:s a');
            $data['Estatus'] = 'ACTIVO';
            $ID = $this->resource_model->onAction('documentacionytramites', $data, 'save', 0);

            $URL_DOC = 'uploads/DocumentacionYTramites';
            $master_url = base_url() . $URL_DOC . '/';
            if (!file_exists($URL_DOC)) {
                mkdir($URL_DOC, 0777, true);
            }
            if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
            }
            if ($_FILES["Archivo"]["name"] !== '') {
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'URL' => ($img),
                        'CARPETA' => 'DocumentacionYTramites',
                        'ARCHIVO' => $_FILES["Archivo"]["name"]
                    );
                    $this->resource_model->onAction('documentacionytramites', $data, 'update', array('ID', $ID));
                }
            } else {
                print 'NO SE PUDO OBTENER EL ARCHIVO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdateDocumentacionYTramite() {
        try {
            $data = array();
            extract(filter_input_array(INPUT_POST));
            foreach (filter_input_array(INPUT_POST) as $key => $value) {
                $data[$key] = (isset($value) && $value !== null && $value !== '' && $value !== '0') ? strtoupper($value) : NULL;
            }
            $data['Registro'] = Date('d/m/Y h:i:s a');
            $data['Estatus'] = 'ACTIVO';
            $this->resource_model->onAction('documentacionytramites', $data, 'update', array('ID', $ID));

            $URL_DOC = 'uploads/DocumentacionYTramites';
            $master_url = base_url() . $URL_DOC . '/';
            if (!file_exists($URL_DOC)) {
                mkdir($URL_DOC, 0777, true);
            }
            if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
            }
            if ($_FILES["Archivo"]["name"] !== '') {
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'URL' => ($img),
                        'CARPETA' => 'DocumentacionYTramites',
                        'ARCHIVO' => $_FILES["Archivo"]["name"]
                    );
                    $this->resource_model->onAction('documentacionytramites', $data, 'update', array('ID', $ID));
                }
            } else {
                print 'NO SE PUDO OBTENER EL ARCHIVO O NO SE ACTUALIZO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAsignar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data['AsignadoA'] = (isset($AsignadoA) !== NULL) ? $AsignadoA : NULL;
            $data['ObservacionesAsignacion'] = (isset($ObservacionesAsignacion) !== NULL) ? $ObservacionesAsignacion : NULL;

            $this->resource_model->onAction('documentacionytramites', $data, 'update', array('ID', $ID));

            $URL_DOC = 'uploads/DocumentacionAsignada';
            $master_url = base_url() . $URL_DOC . '/';
            if (!file_exists($URL_DOC)) {
                mkdir($URL_DOC, 0777, true);
            }
            if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
            }
            if ($_FILES["Archivo"]["name"] !== '') {
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                    $data = array(
                        'URLASIGNADA' => ($img),
                        'CARPETAASIGNADA' => 'DocumentacionAsignada',
                        'ARCHIVOASIGNADO' => $_FILES["Archivo"]["name"]
                    );
                    $this->resource_model->onAction('documentacionytramites', $data, 'update', array('ID', $ID));
                    $data = array(
                        'IdDocumentacionYTramite' => $ID,
                        'URL' => ($img),
                        'CARPETA' => 'DocumentacionAsignada',
                        'ARCHIVO' => $_FILES["Archivo"]["name"],
                        'ESTATUS' => 'ACTIVO',
                        'REGISTRO' => Date('d/m/Y h:i:s a'),
                        'IdUsuario' => $AsignadoA
                    );
                    $this->resource_model->onAction('documentacionytramitesasignados', $data, 'save', 0);
                }
            } else {
                print 'NO SE PUDO OBTENER EL ARCHIVO O NO SE ACTUALIZO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelar() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('documentacionytramites', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarAsignacion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'INACTIVO');
            $this->resource_model->onAction('documentacionytramitesasignados', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnTramite() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'EN TRAMITE');
            $this->resource_model->onAction('documentacionytramitesasignados', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onTramiteConcluido() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array('Estatus' => 'CONCLUIDO');
            $this->resource_model->onAction('documentacionytramitesasignados', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAvanzarTramite() {
        try {
            extract(filter_input_array(INPUT_POST));

            $URL_DOC = 'uploads/DocumentacionAsignada';
            $master_url = base_url() . $URL_DOC . '/';
            if (!file_exists($URL_DOC)) {
                mkdir($URL_DOC, 0777, true);
            }
            if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
            }

            if ($EstatusTramite === '1') {
                $this->onEnTramite();
                $URL_DOC = 'uploads/DocumentacionAsignadaEnTramite';
                $master_url = base_url() . $URL_DOC . '/';
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                print 'EN TRAMITE';
                $data = array(
                    'IdAsignacion' => $ID,
                    'Observacion' => (isset($Observaciones) && $Observaciones !== NULL) ? strtoupper($Observaciones) : NULL,
                    'IdDocumentacionYTramite' => $IDDYT,
                    'URL' => ($img),
                    'CARPETA' => 'DocumentacionAsignadaEnTramite',
                    'ARCHIVO' => $_FILES["Archivo"]["name"],
                    'ESTATUS' => 'ACTIVO',
                    'REGISTRO' => Date('d/m/Y h:i:s a')
                );
                $this->resource_model->onAction('observacionesxdocumentacionytramiteasignado', $data, 'save', 0);
            } else if ($EstatusTramite === '2') {
                $this->onTramiteConcluido();
                $URL_DOC = 'uploads/DocumentacionAsignadaConcluida';
                $master_url = base_url() . $URL_DOC . '/';
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                $img = $master_url . $ID . '/' . $_FILES["Archivo"]["name"];
                print 'CONCLUIDO';
                $data = array(
                    'IdAsignacion' => $ID,
                    'Observacion' => (isset($Observaciones) && $Observaciones !== NULL) ? strtoupper($Observaciones) : NULL,
                    'IdDocumentacionYTramite' => $IDDYT,
                    'URL' => ($img),
                    'CARPETA' => 'DocumentacionAsignadaConcluida',
                    'ARCHIVO' => $_FILES["Archivo"]["name"],
                    'ESTATUS' => 'ACTIVO',
                    'REGISTRO' => Date('d/m/Y h:i:s a')
                );
                $this->resource_model->onAction('observacionesxdocumentacionytramiteasignadoyconcluido', $data, 'save', 0);
            }

            if ($_FILES["Archivo"]["name"] !== '') {
                if (move_uploaded_file($_FILES["Archivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Archivo"]["name"]))) {
                    print 'SE HA SUBIDO UN ARCHIVO CON EXITO';
                } else {
                    print 'NO SE PUDO SUBIR EL ARCHIVO, PERO SE REALIZO EL REGISTRO';
                }
            }
            $this->onEnviar($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviar($ID, $data) {
        try {
            extract(filter_input_array(INPUT_POST));
            $Subject = utf8_decode("SE HA REGISTRADO UN AVANCE EN DOCUMENTACIÓN Y TRAMITES");
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DEL AVANCE</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>ASIGNADO A</B></th>'
                    . '<th><B>OBSERVACIONES DEL TRAMITE ASIGNADO</B></th>'
                    . '<th><B>ESTATUS ANTES DEL AVANCE</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $ASIGNADOAT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(utf8_decode($ObservacionesAsignacion)) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(($ESTATUSDOCUMENTACIONT === 'CONCLUIDO') ? 'CONCLUIDO' : 'EN TRAMITE') . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>ESTATUS DEL AVANCE </B></th>'
                    . '<th><B>OBSERVACIONES DEL AVANCE</B></th>'
                    . '<th><B>ARCHIVO</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $ESTATUSDOCUMENTACIONT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(utf8_decode($Observaciones)) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $_FILES["Archivo"]["name"] . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onSendEmail($ID, $Subject, $bodyContent, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSendEmail($IDX, $Subject, $bodyContent, $data) {
        try {
            $URL_DOC = 'uploads/IncrementosXTerrenos';
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
            $mail->addBCC('administrativo@rabina.com.mx');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('sistemarabina@gmail.com');
            $mail->addBCC('sistemas@rabina.com.mx');
            if ($_FILES["Archivo"]["name"] !== '') {
                $mail->addAttachment('uploads/' . $data['CARPETA'] . '/' . $IDX . '/' . $_FILES["Archivo"]["name"], $_FILES["Archivo"]["name"]);
            }
            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = $Subject;
            $mail->AddEmbeddedImage('media/Rabina.png', 'RabinaLogo');

            $mail->Body = utf8_decode($bodyContent);
            if (!$mail->send()) {
                echo 'EL MENSAJE NO PUDO SER ENVIADO';
                echo 'ERROR EN EL CORREO: ' . $mail->ErrorInfo;
            } else {
//                    var_dump($dtm);
                echo 'MENSAJE ENVIADO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
