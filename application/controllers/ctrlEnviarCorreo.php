<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class ctrlEnviarCorreo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function index() {
        session_start();
        if (isset($_SESSION["ID"])) {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vEnviarCorreo');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function onEnviar() {
        try {
            extract(filter_input_array(INPUT_POST));

            $Subject = "SE HA REGISTRADO UN INCREMENTO";
            $bodyContent = '<div align="center" style="overflow-x:auto;">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<BR><h1>DATOS DEL PAGO DE ACTUALIZACIÓN</h1>';
            $bodyContent .= '<table border="2" align="center" style="border-collapse: collapse;overflow-x:auto;">';
            $bodyContent .= '<thead>'
                    . '<tr style="background-color:MidnightBlue; color:white;" align="center">'
                    . '<th><B>NÚMERO DE OPERACIÓN DE DISPERSION DE RECURSOS</B></th>'
                    . '<th><B>FECHA DE LA DISPERSION EN CUENTA</B></th>'
                    . '<th><B>CANTIDAD DISPERSADA</B></th>'
                    . '<th><B>CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</B></th>'
                    . '<th><B>REFERENCIA DE LA TRANSFERENCIA</B></th>'
                    . '<th><B>OBSERVACIONES</B></th>'
                    . '<th><B>REGISTRO</B></th>'
                    . '</tr>'
                    . '</thead>';
            $bodyContent .= '<tbody align="center">';
            $bodyContent .= '<tr>';
            $bodyContent .= '<td style="padding: 10px;">123</td>';
            $bodyContent .= '<td style="padding: 10px;">28/03/2017</td>';
            $bodyContent .= '<td style="padding: 10px;">$500.00</td>';
            $bodyContent .= '<td style="padding: 10px;">8367</td>';
            $bodyContent .= '<td style="padding: 10px;">557722334488</td>';
            $bodyContent .= '<td style="padding: 10px;">XXXXXXXXXXXXXXXX</td>';
            $bodyContent .= '<td style="padding: 10px;">' . strtoupper(Date('d/m/Y h:i:s a')) . '</td>';
            $bodyContent .= '</tr>';
            $bodyContent .= '</tbody>';
            $bodyContent .= '</table>';

            $this->onSendEmail($Subject, $bodyContent);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSendEmail($Subject, $bodyContent) {
        try {
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
            $mail->setFrom('sistemas@rabina.com.mx', 'MENSAJE DEL SISTEMA RABINA');
            $mail->addReplyTo('sistemas@rabina.com.mx', 'NO RESPONDER');
            $mail->addAddress('sistemas@rabina.com.mx');   // Add a recipient  
//                $mail->addBCC('orico_02@me.com');
            $mail->addBCC('ing.giovanniflores93@gmail.com');
            $mail->addBCC('sistemarabina@gmail.com');
            $mail->addBCC('sistemas@rabina.com.mx');
//            $mail->addAttachment('media/log_1o.png', 'new.png');

            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = $Subject;
            $mail->AddEmbeddedImage('media/Rabina.png', 'RabinaLogo');

            $mail->Body = $bodyContent;
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
