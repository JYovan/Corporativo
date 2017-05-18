<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlsesion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->load->model("permisos_model");
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
            $data['contentView'] = 'vMenu';
            $data['scripts'] = array('cliente');
            $this->_renderView($data);
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function onLoadMenuF() {
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'vMenu';
        $this->_renderView($data);
    }

    public function onLogIn() {
        try {
            $this->load->model("sesion_model");
            extract($_POST);
            if (isset($login) && isset($password)) {
                $datos = json_encode($this->sesion_model->getAcceso($login, $password));
                $dtm = json_decode($datos, true);
                if (isset($dtm[0]['Id'])) {
                    session_start();
                    $_SESSION["ID"] = $dtm[0]['Id'];
                    $_SESSION["PERMISOS"] = $this->permisos_model->getPermisosXUsuario($dtm[0]['Id']);
                    $_SESSION["USUARIO_ID"] = $dtm[0]['Id'];
                    $_SESSION["USUARIO_NOMBRE"] = $dtm[0]['nombre'];
                    $_SESSION["USUARIO_IMAGEN"] = $dtm[0]['Imagen'];
                    $_SESSION["USUARIO_CONTRASENA"] = $dtm[0]['DataPass'];
                    $_SESSION["USUARIO"] = $dtm;
                    $_SESSION["firstime"] = 0;
                    $this->onLoadMenu();
                } else {
                    echo $this->load->view('layout/base/lytBaseHead');
                    echo $this->load->view('vLogin');
                    print 0;
                }
            } else {
                if (isset($_SESSION["ID"])) {
                    echo $this->load->view('layout/base/lytBaseHead');
                    echo $this->load->view('vLogin');
                    print 0;
                } else {
                    $data['contentView'] = 'vMenu';
                    $this->_renderView($data);
                    print 1;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onValidateSession() {
        try {
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onLoadData() {
        session_start();
        if (isset($_SESSION['ID'])) {
            $this->onLoadMenu();
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function setInicioSesion() {
        if (isset($_SESSION["ID"])) {
            unset($_SESSION['ID']);
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        } else {
            $this->onLoadMenu();
        }
    }

    public function onLoadMenu() {
        if (isset($_SESSION['ID'])) {
            $where = '';
            $this->load->model("modelo");
            $USUARIOS = $this->modelo->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $indiceuser = $_SESSION['USUARIO'];
            $data['User'] = $indiceuser[0]['Id'];
            $Permisos = $this->modelo->getPermisos($indiceuser[0]['Id']);
            $data['PERMISOS'] = $Permisos;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'vMenu';
            $this->_renderView($data);
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function onGoOut() {
        session_start();
        $_SESSION["firstime"] = 0;
        session_unset();
        session_destroy();
        print 0;
    }

    public function getUsuariosXReloj() {
        try {
            $data = $this->permisos_model->getUsuariosXReloj();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradasYSalidas() {
        try {
            $data = $this->permisos_model->getEntradasYSalidas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradasYSalidasXUsuarioID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->permisos_model->getEntradasYSalidasXUsuarioID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onBuscarAccesosXFechas() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->permisos_model->onBuscarAccesosXFechas($INICIO, $FIN,$USUARIO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddEntradaSalida() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            $data = array(
                'IdUsuario' => ($IdUsuario !== '' ? $IdUsuario : NULL),
                'IdUsuarioT' => ($IdUsuarioT !== '' ? $IdUsuarioT : NULL),
                'Nombre' => ($Nombre !== '' ? $Nombre : $IdUsuarioT),
                'Tipo' => ($Tipo !== '' ? $Tipo : NULL),
                'Fecha' => strtoupper(Date('d/m/Y')),
                'Hora' => strtoupper(Date('h:i:s a')),
                'Observaciones' => ($Observaciones !== '' ? $Observaciones : 'SIN OBSERVACIONES'),
                'Registro' => strtoupper(Date('d/m/Y h:i:s a')),
                'Estatus' => 'ACTIVO'
            );
            $ID = $this->resource_model->onAction('relojchecador', $data, 'save', 0);
            $this->onEnviar(strtoupper(Date('h:i:s a')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviar($HORA) {
        try {
            extract(filter_input_array(INPUT_POST));
            $ENTRADA_SALIDA_MESSAGE = ($Tipo === 'ENTRADA') ? "INICIADO" : "CERRADO";
            $ENTRADA_SALIDA_MESSAGE_TITLE = ($Tipo === 'ENTRADA') ? "INICIO" : "CIERRE";
            $Subject = utf8_decode("$IdUsuarioT HA $ENTRADA_SALIDA_MESSAGE LABORES A LAS $HORA");
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="25%" width="25%">';
            $bodyContent .= "<BR><h1>DATOS DE $ENTRADA_SALIDA_MESSAGE_TITLE DE LABORES</h1>";
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>SESION DE</B></th>'
                    . '<th><B>VERIFICO</B></th>'
                    . '<th><B>ENTRADA/SALIDA</B></th>'
                    . '<th><B>FECHA</B></th>'
                    . '<th><B>HORA</B></th>'
                    . '<th><B>OBSERVACIONES</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">' . $IdUsuarioT . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $Nombre . '</td>'; 
            $bodyContent .= '<td style="padding: 10px;">' . $Tipo . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(Date('d/m/Y')) . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . $HORA . '</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper($Observaciones !== '' ? $Observaciones : 'SIN OBSERVACIONES') . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onEnviarEmail($Subject, $bodyContent);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEnviarEmail($Subject, $bodyContent) {
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
            $mail->addBCC('rramirez@rabina.com.mx');
            $mail->addBCC('orico09@me.com');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('sistemarabina@gmail.com');
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

    public function onGenerarReporteDeAccesos() {
        try {
            extract(filter_input_array(INPUT_POST));
            $row = $this->permisos_model->onBuscarReporteDeAccesosXFechas($INICIO, $FIN, $USUARIO);

            /* INIT VARIABLES */
            $pages = 0;
            /* START REPORT CONFIGURATION */
            date_default_timezone_set('America/Mexico_City');
            require_once APPPATH . "/third_party/fpdf17/fpdf.php";
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 2.5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetFont('Arial', '', 25);
            $pdf->SetY(10);
            $pdf->SetX(90);
            $pdf->Cell(100, 10, 'REPORTE DE ACCESOS', 0, 0, 'L');
            $pdf->SetY(20);
            $pdf->SetX(115);
            $pdf->SetTextColor(178, 0, 0);
            $pdf->SetFont('Arial', '', 10);

            if ($INICIO !== "" && $INICIO === $FIN) {
                $pdf->SetX(95);
                $pdf->Cell(100, 5, "TODAS LAS ENTRADAS Y SALIDAS DEL $INICIO", 0, 0, 'L');
            } else {
                if ($INICIO !== "" && $FIN !== "") {
                    $pdf->SetX(85);
                    $pdf->Cell(100, 5, "TODAS LAS ENTRADAS Y SALIDAS DESDE $INICIO AL $FIN", 0, 0, 'L');
                } else {
                    $pdf->Cell(100, 5, "TODAS LAS ENTRADAS Y SALIDAS", 0, 0, 'L');
                }
            }

            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(10);
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 5, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetX(238);
            $pdf->Cell(100, 5, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            /* START REPORT HEADER */
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(30);
            $pdf->SetX(25);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(15, 5, 'VERIFICO', 0, 0);
            $pdf->SetX(105);
            $pdf->Cell(15, 5, 'ENTRADA/SALIDA', 0, 0);
            $pdf->SetX(145);
            $pdf->Cell(15, 5, 'FECHA', 0, 0);
            $pdf->SetX(175);
            $pdf->Cell(15, 5, 'HORA', 0, 0);
            $pdf->SetX(210);
            $pdf->Cell(15, 5, 'OBSERVACIONES', 0, 0);

            $pdf->SetY(35);
            $pdf->Line(10, $pdf->GetY(), 285, $pdf->GetY());

            /* START DETAIL */
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetY(36);
            $Y = 36;
            $YY = 36;
            $top = 0;
            $page = 1;
            $YL = 30;
            $page_size = 300;
//            for ($i = 0; $i < 50; $i++) {
            foreach ($row as $k => $v) {
                $top += 10;
                $pdf->SetFont('Arial', '', 10);
                $pdf->SetX(15);
                $pdf->MultiCell(80, 5, strtoupper(utf8_decode($v->VERIFICO)));
                $Y = $YY > $Y ? $YY : $Y;
                $pdf->SetY($Y);
                $pdf->SetX(110);
                $pdf->SetFont('Arial', 'B', 10);
                if ($v->ENTRADASALIDA === "ENTRADA") {
                    $pdf->SetTextColor(63, 127, 31);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                }
                $pdf->MultiCell(45, 5, strtoupper($v->ENTRADASALIDA));

                $pdf->SetFont('Arial', '', 10);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetY($Y);
                $pdf->SetX(145);
                $pdf->MultiCell(45, 5, strtoupper($v->FECHA));

                $pdf->SetY($Y);
                $pdf->SetX(175);
                $pdf->MultiCell(45, 5, strtoupper($v->HORA));

                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY($Y);
                $pdf->SetX(205);
                $Temporal_data = strtoupper(utf8_decode(($v->OBSERVACIONES === "SIN OBSERVACIONES") ? "" : $v->OBSERVACIONES));
                $pdf->MultiCell(80, 5, strtoupper($Temporal_data));
                if (strlen($Temporal_data) > 40) {
                    $top -= 10;
                    $top += 40;
                }
                $Y = $YY > $Y ? $YY : $Y;
                $YY = $pdf->GetY();
                $pdf->SetY($YY);
                $pdf->Line(10, $pdf->GetY(), 285, $pdf->GetY());

                if ($top > $page_size) {
                    /* LINES FOR DE TABLE */
                    /* LINE 1 TOP */
                    $pdf->Line(10, $YL, 285, $YL);

                    /* LINE 1 LEFT */
                    $pdf->Line(10, $YL, 10, $pdf->GetY());

                    /* LINE 2 LEFT */
                    $pdf->Line(100, $YL, 100, $pdf->GetY());

                    /* LINE 3 LEFT */
                    $pdf->Line(140, $YL, 140, $pdf->GetY());

                    /* LINE 4 LEFT */
                    $pdf->Line(170, $YL, 170, $pdf->GetY());

                    /* LINE 5 LEFT */
                    $pdf->Line(200, $YL, 200, $pdf->GetY());

                    /* LINE 1 LEFT */
                    $pdf->Line(285, $YL, 285, $pdf->GetY());
                    $pdf->AddPage();
                    $pdf->SetY(10);
                    $Y = 10;
                    $YY = 10;
                    $YL = 10;
                    $top = 0;
                    $page = 2;
                    $page_size = 370;
                    $pdf->Line(10, 10, 285, 10);
                } else {
                    
                }
            }
//            }//
            if ($page === 2) {
                /* LINES FOR DE TABLE */
                /* LINE 1 TOP */
                $pdf->Line(10, $YL, 285, $YL);

                /* LINE 1 LEFT */
                $pdf->Line(10, $YL, 10, $pdf->GetY());

                /* LINE 2 LEFT */
                $pdf->Line(100, $YL, 100, $pdf->GetY());

                /* LINE 3 LEFT */
                $pdf->Line(140, $YL, 140, $pdf->GetY());

                /* LINE 4 LEFT */
                $pdf->Line(170, $YL, 170, $pdf->GetY());

                /* LINE 5 LEFT */
                $pdf->Line(200, $YL, 200, $pdf->GetY());

                /* LINE 1 LEFT */
                $pdf->Line(285, $YL, 285, $pdf->GetY());
            } else {
                /* LINES FOR DE TABLE */
                /* LINE 1 TOP */
                $pdf->Line(10, $YL, 285, $YL);

                /* LINE 1 LEFT */
                $pdf->Line(10, $YL, 10, $pdf->GetY());

                /* LINE 2 LEFT */
                $pdf->Line(100, $YL, 100, $pdf->GetY());

                /* LINE 3 LEFT */
                $pdf->Line(140, $YL, 140, $pdf->GetY());

                /* LINE 4 LEFT */
                $pdf->Line(170, $YL, 170, $pdf->GetY());

                /* LINE 5 LEFT */
                $pdf->Line(200, $YL, 200, $pdf->GetY());

                /* LINE 1 LEFT */
                $pdf->Line(285, $YL, 285, $pdf->GetY());
            }

            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/ControlDeAccesos')) {
                mkdir('uploads/ControlDeAccesos', 0777, true);
            }
            $file_name = "ACCESOS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/ControlDeAccesos/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
