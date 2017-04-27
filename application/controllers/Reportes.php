<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
    }

    private $defaultData = array(
        'title' => 'Plataforma DEFIRYO',
        'layout' => 'layout/lytDefault',
        'contentView' => 'vUndefined',
    );

    private function _renderView($data = array()) {
        $data = array_merge($this->defaultData, $data);
        $this->load->view($data['layout'], $data);
    }

    public function Reporte() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->get('i');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        $this->load->model("modelo", "cliente");
        $d_cliente = $this->cliente->getID_Cliente($where);
        $data['ID_cliente'] = $d_cliente;
        // View render
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Informes';
        $this->_renderView($data);
    }

    public function IDInformes() {
        $this->load->model("modelo", "datos");
        $ID_cliente = $this->input->post('ID_cliente');
        $IDInforme = $this->input->post('IDInforme');
        $indiceuser = $this->input->post('user');

        if ($IDInforme == '1') {
            //Carga las librerías
            $this->load->library('excel');
            // Propiedades del Documento
            $this->excel->getProperties()->setCreator("DEFIRYO")
                    ->setLastModifiedBy("DEFIRYO")
                    ->setTitle('Reporte')
                    ->setSubject('Subject');

            //Bases de datos               
            $this->load->model("modelo", "TraContables");
            $TraContables = $this->TraContables->getTraContablesID($ID_cliente);
            $this->load->model("modelo", "Cliente");
            $IDCliente = $this->Cliente->getID_Cliente();
            $this->load->model("modelo", "Estatus");
            $Estatus = $this->Estatus->getEstatusALL();

            //Cargamos el template del encabezado
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $this->excel = $objReader->load('uploads/Cliente_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
            $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
            //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

            $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
                "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
                "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
                "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
                "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
                "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
                "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
                "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
                "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
                "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

            $inicioy = 3;

            foreach ($TraContables as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Cliente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($IDCliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Tramite);
                $variable = $sol->Estado;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Estatus as $arreglo1) {
                        if ($variable == $arreglo1->id_estatusSS) {
                            $resultado = $arreglo1->dsc_estatusSS;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ObservacionesBG);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Fecha);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Hora);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');
            //Fecha y número aleatorio para nombrar al excel dentro del zip         
            $filename = "Tramites contables.xls";
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache
            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
            //$objWriter->save('uploads/rep_excel/'.$filename);
        }

        if ($IDInforme == '2') {
            //Carga las librerías
            $this->load->library('excel');
            // Propiedades del Documento
            $this->excel->getProperties()->setCreator("DEFIRYO")
                    ->setLastModifiedBy("DEFIRYO")
                    ->setTitle('Reporte')
                    ->setSubject('Subject');

            //Bases de datos   
            $this->load->model("modelo", "Declaraciones");
            $Declaraciones = $this->Declaraciones->getTotalesDeclaracionesID2($ID_cliente);
            $this->load->model("modelo", "Mes");
            $Mes = $this->Mes->getMeses();
            $this->load->model("modelo", "Cliente");
            $Cliente = $this->Cliente->getID_Cliente();

            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR1");
            $ISRR1 = $this->ISRR1->getDeclaraciones($ID_cliente);
            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR97");
            $ISRR97 = $this->ISRR97->getDeclaracionesR97($ID_cliente);
            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR");
            $ISRR = $this->ISRR->getDeclaracionesR($ID_cliente);
            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR14");
            $ISRR14 = $this->ISRR14->getDeclaracionesR14($ID_cliente);
            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR12");
            $ISRR12 = $this->ISRR12->getDeclaracionesR12($ID_cliente);
            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR7");
            $ISRR7 = $this->ISRR7->getDeclaracionesR7($ID_cliente);
            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "ISRR10");
            $ISRR10 = $this->ISRR10->getDeclaracionesR10($ID_cliente);

            //Bases de datos IVA P Moral 
            $this->load->model("modelo", "IVAPM");
            $IVAPM = $this->IVAPM->getDeclaracionesIVAR24($ID_cliente);

            //Bases de datos IVA P Fisica 
            $this->load->model("modelo", "IVAPF");
            $IVAPF = $this->IVAPF->getDeclaracionesIVAR21($ID_cliente);

            //Bases de datos Nomina 
            $this->load->model("modelo", "Nomina");
            $Nomina = $this->Nomina->getDeclaracionesSN($ID_cliente);

            //Bases de datos Cedular A 
            $this->load->model("modelo", "Cedular_A");
            $Cedular_A = $this->Cedular_A->getDeclaracionesCA($ID_cliente);

            //Bases de datos Cedular G 
            $this->load->model("modelo", "Cedular_G");
            $Cedular_G = $this->Cedular_G->getDeclaracionesCG($ID_cliente);

            //Bases de datos Cedular H 
            $this->load->model("modelo", "Cedular_H");
            $Cedular_H = $this->Cedular_H->getDeclaracionesCH($ID_cliente);

            //Bases de datos Hospedaje 
            $this->load->model("modelo", "Hospedaje");
            $Hospedaje = $this->Hospedaje->getDeclaracionesHo($ID_cliente);

            //Cargamos el template del encabezado
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $this->excel = $objReader->load('uploads/Cliente_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
            $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
            //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

            $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
                "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
                "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
                "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
                "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
                "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
                "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
                "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
                "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
                "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

            $inicioy = 3;

            foreach ($Declaraciones as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->Mes;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->ISR);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->IVA);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Nomina);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Cedular);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Hospedaje);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Federales);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Estatales);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Total);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Fecha);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');

            //ISR R1
            $inicioy = 3;

            foreach ($ISRR1 as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Ingresosant);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[4] . $inicioy, $sol->Base);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $sol->Ingresosact);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[6] . $inicioy, $sol->ISRcausado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[7] . $inicioy, $sol->Total);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[8] . $inicioy, $sol->ImpuestoP);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[9] . $inicioy, $sol->Coeficiente);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[10] . $inicioy, $sol->Pagos);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[11] . $inicioy, $sol->Utilidad);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[12] . $inicioy, $sol->ImpuestoB);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[13] . $inicioy, $sol->Perdidas);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[14] . $inicioy, $sol->ImpuestoCargo);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[15] . $inicioy, $sol->ParteAct);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[16] . $inicioy, $sol->ParteRecargos);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[17] . $inicioy, $sol->SubsidioEmp);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[18] . $inicioy, $sol->IDE);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[19] . $inicioy, $sol->IEPS);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[20] . $inicioy, $sol->Disel);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[21] . $inicioy, $sol->TotalApp);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[22] . $inicioy, $sol->CantPagar);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[23] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[24] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[25] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(1);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R1');
            //
            //ISR R97
            $inicioy = 3;

            foreach ($ISRR97 as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[3] . $inicioy, $sol->Suma_Ing);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[4] . $inicioy, $sol->Ing);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[5] . $inicioy, $sol->Total_Ing);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[6] . $inicioy, $sol->Ing_Externos);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[7] . $inicioy, $sol->Suma_Deduc);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[8] . $inicioy, $sol->Deduc_Auto);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[9] . $inicioy, $sol->Total_Deduc);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[10] . $inicioy, $sol->Part_Utilidad);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[11] . $inicioy, $sol->Perdidas);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[12] . $inicioy, $sol->Base);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[13] . $inicioy, $sol->ISR_Det);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[14] . $inicioy, $sol->Reducciones);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[15] . $inicioy, $sol->ISR_Causado);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[16] . $inicioy, $sol->Pagos_Prov);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[17] . $inicioy, $sol->Imp_Ret);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[18] . $inicioy, $sol->OtrasCargo);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[19] . $inicioy, $sol->OtrasFavor);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[20] . $inicioy, $sol->Imp_Cargo);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[21] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[22] . $inicioy, $sol->ParteAct);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[23] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[24] . $inicioy, $sol->Multas);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[25] . $inicioy, $sol->Total_Cont);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[26] . $inicioy, $sol->Sub_Emple);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[27] . $inicioy, $sol->Compensaciones);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[28] . $inicioy, $sol->IEPS);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[29] . $inicioy, $sol->Otros);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[30] . $inicioy, $sol->Diesel);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[31] . $inicioy, $sol->TotalApp);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[32] . $inicioy, $sol->Fecha);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[33] . $inicioy, $sol->MontoPagado);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[34] . $inicioy, $sol->Imp_UltHrs);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[35] . $inicioy, $sol->CantCargo);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[36] . $inicioy, $sol->CantFavor);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[37] . $inicioy, $sol->CantPagar);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[38] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[39] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[40] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(2);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R97');
            //
            //ISR R
            $inicioy = 3;

            foreach ($ISRR as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[3] . $inicioy, $sol->Cargo_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[4] . $inicioy, $sol->IEPS_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[5] . $inicioy, $sol->ParteAct_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[6] . $inicioy, $sol->Disel_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[7] . $inicioy, $sol->ParteRec_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[8] . $inicioy, $sol->OtrosEst_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[9] . $inicioy, $sol->TotalCont_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[10] . $inicioy, $sol->TESOFE_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[11] . $inicioy, $sol->CreditoSal_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[12] . $inicioy, $sol->DiselMinero_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[13] . $inicioy, $sol->Subsidio_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[14] . $inicioy, $sol->TotalApp_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[15] . $inicioy, $sol->IDE_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[16] . $inicioy, $sol->CantCargo_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[17] . $inicioy, $sol->Compensaciones_R);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[18] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[19] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[20] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(3);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R');
            //
            //ISR R14
            $inicioy = 3;

            foreach ($ISRR14 as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[3] . $inicioy, $sol->Suma_Ing);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[4] . $inicioy, $sol->Ing);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[5] . $inicioy, $sol->Total_Ing);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[6] . $inicioy, $sol->GastosAnt);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[7] . $inicioy, $sol->GastosAct);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[8] . $inicioy, $sol->TotalGastos);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[9] . $inicioy, $sol->PagosAnt);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[10] . $inicioy, $sol->ImpuestoRet);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[11] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[12] . $inicioy, $sol->ParteAct);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[13] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[14] . $inicioy, $sol->TotalCont);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[15] . $inicioy, $sol->Credito_sal);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[16] . $inicioy, $sol->Sub_Empleo);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[17] . $inicioy, $sol->Imp_Depositos);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[18] . $inicioy, $sol->Compensaciones);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[19] . $inicioy, $sol->IEPS);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[20] . $inicioy, $sol->Diesel);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[21] . $inicioy, $sol->Carreteras);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[22] . $inicioy, $sol->Otros);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[23] . $inicioy, $sol->Diesel_Marino);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[24] . $inicioy, $sol->FechaAnt);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[25] . $inicioy, $sol->Monto_Ant);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[26] . $inicioy, $sol->Imp_UltHrs);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[27] . $inicioy, $sol->CFavor);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[28] . $inicioy, $sol->CPagar);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[29] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[30] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[31] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(4);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R14');
            //
            //ISR R12
            $inicioy = 3;

            foreach ($ISRR12 as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[3] . $inicioy, $sol->Cargo_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[4] . $inicioy, $sol->IEPS_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[5] . $inicioy, $sol->ParteAct_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[6] . $inicioy, $sol->Disel_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[7] . $inicioy, $sol->ParteRec_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[8] . $inicioy, $sol->OtrosEst_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[9] . $inicioy, $sol->TotalCont_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[10] . $inicioy, $sol->TESOFE_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[11] . $inicioy, $sol->CreditoSal_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[12] . $inicioy, $sol->DiselMinero_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[13] . $inicioy, $sol->Subsidio_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[14] . $inicioy, $sol->TotalApp_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[15] . $inicioy, $sol->IDE_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[16] . $inicioy, $sol->CantCargo_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[17] . $inicioy, $sol->Compensaciones_R);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[18] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[19] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[20] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(5);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R12');
            //
            //ISR R7
            $inicioy = 3;

            foreach ($ISRR7 as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[3] . $inicioy, $sol->Suma_Ing);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[4] . $inicioy, $sol->Ing);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[5] . $inicioy, $sol->Total_Ing);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[6] . $inicioy, $sol->GastosAnt);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[7] . $inicioy, $sol->GastosAct);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[8] . $inicioy, $sol->TotalGastos);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[9] . $inicioy, $sol->PagosAnt);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[10] . $inicioy, $sol->ImpuestoRet);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[11] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[12] . $inicioy, $sol->ParteAct);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[13] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[14] . $inicioy, $sol->TotalCont);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[15] . $inicioy, $sol->Credito_sal);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[16] . $inicioy, $sol->Sub_Empleo);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[17] . $inicioy, $sol->Imp_Depositos);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[18] . $inicioy, $sol->Compensaciones);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[19] . $inicioy, $sol->IEPS);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[20] . $inicioy, $sol->Diesel);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[21] . $inicioy, $sol->Carreteras);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[22] . $inicioy, $sol->Otros);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[23] . $inicioy, $sol->Diesel_Marino);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[24] . $inicioy, $sol->FechaAnt);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[25] . $inicioy, $sol->Monto_Ant);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[26] . $inicioy, $sol->Imp_UltHrs);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[27] . $inicioy, $sol->CFavor);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[28] . $inicioy, $sol->CPagar);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[29] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[30] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[31] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(6);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R7');
            //
            //ISR R10
            $inicioy = 3;

            foreach ($ISRR10 as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[3] . $inicioy, $sol->DeduccionOp);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[4] . $inicioy, $sol->Ing);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[5] . $inicioy, $sol->Deducciones);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[6] . $inicioy, $sol->DImp_Local);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[7] . $inicioy, $sol->D_Opc);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[8] . $inicioy, $sol->Predial);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[9] . $inicioy, $sol->D_PrimerEm);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[10] . $inicioy, $sol->Base);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[11] . $inicioy, $sol->Imp_Cargo);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[12] . $inicioy, $sol->Imp_Rete);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[13] . $inicioy, $sol->Otras_Cargo);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[14] . $inicioy, $sol->Otras_Favor);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[15] . $inicioy, $sol->Imp_ACargo);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[16] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[17] . $inicioy, $sol->ParteAct);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[18] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[19] . $inicioy, $sol->Multas);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[20] . $inicioy, $sol->Total_Cont);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[21] . $inicioy, $sol->Credito);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[22] . $inicioy, $sol->Sub_Empleo);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[23] . $inicioy, $sol->Imp_Dep);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[24] . $inicioy, $sol->Compensaciones);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[25] . $inicioy, $sol->IEPS);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[26] . $inicioy, $sol->Diesel);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[27] . $inicioy, $sol->Carretera);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[28] . $inicioy, $sol->Otros);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[29] . $inicioy, $sol->Diesel_Marino);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[30] . $inicioy, $sol->TotalApp);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[31] . $inicioy, $sol->Fecha);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[32] . $inicioy, $sol->MontoPagado);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[33] . $inicioy, $sol->Imp_UltHrs);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[34] . $inicioy, $sol->CantCargo);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[35] . $inicioy, $sol->CantFavor);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[36] . $inicioy, $sol->CantPagar);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[37] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[38] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(7)->setCellValue($columnas[39] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(7);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('ISR_R10');
            //
            //IVA P Moral
            $inicioy = 3;

            foreach ($IVAPM as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[3] . $inicioy, $sol->Imp_Cobrado);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[4] . $inicioy, $sol->Imp_Pagado);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[5] . $inicioy, $sol->Imp_Retenido);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[6] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[7] . $inicioy, $sol->AFavor);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[8] . $inicioy, $sol->Parte_Act);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[9] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[10] . $inicioy, $sol->Multas);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[11] . $inicioy, $sol->Total_Cont);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[12] . $inicioy, $sol->Disminucion_Cont);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[13] . $inicioy, $sol->FechaRealizado);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[14] . $inicioy, $sol->Pagado_Ant);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[15] . $inicioy, $sol->Imp_UltHoras);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[16] . $inicioy, $sol->Cant_Favor);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[17] . $inicioy, $sol->Cant_Pagar);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[18] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[19] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(8)->setCellValue($columnas[20] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(8);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('IVAPM');
            //
            //IVA P Fisica
            $inicioy = 3;

            foreach ($IVAPF as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[2] . $inicioy, $sol->SaldoFavor);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[3] . $inicioy, $sol->Ingresos);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[4] . $inicioy, $sol->Otrosingresos);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[5] . $inicioy, $sol->Exentos);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[6] . $inicioy, $sol->Ingresoscobrados);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[7] . $inicioy, $sol->Ingresosnocobrados);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[8] . $inicioy, $sol->TotalIngresos);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[9] . $inicioy, $sol->IVAtrasladado);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[10] . $inicioy, $sol->Totalgastos);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[11] . $inicioy, $sol->ivaacreditable);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[12] . $inicioy, $sol->GastosconIVA);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[13] . $inicioy, $sol->GastossinIVA);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[14] . $inicioy, $sol->IVAfavor);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[15] . $inicioy, $sol->IVApagar);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[16] . $inicioy, $sol->Total_actos16);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[17] . $inicioy, $sol->Total_actos0);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[18] . $inicioy, $sol->DTotal_actos16);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[19] . $inicioy, $sol->Valor_actos16);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[20] . $inicioy, $sol->Acredit_Saldo_favor);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[21] . $inicioy, $sol->PA_Cargo);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[22] . $inicioy, $sol->Pparte_Actualizada);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[23] . $inicioy, $sol->PParte_recargos);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[24] . $inicioy, $sol->PTotal_contribuciones);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[25] . $inicioy, $sol->PCant_cargo);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[26] . $inicioy, $sol->PCant_pagar);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[27] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[28] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(9)->setCellValue($columnas[29] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(9);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('IVAPF');
            //
            //Nomina
            $inicioy = 3;

            foreach ($Nomina as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[2] . $inicioy, $sol->Importe);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[3] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[4] . $inicioy, $sol->Actualizaciones);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[5] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[6] . $inicioy, $sol->S_nomina);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[7] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[8] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(10)->setCellValue($columnas[9] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(10);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Nomina');
            //
            //Cedular A
            $inicioy = 3;

            foreach ($Cedular_A as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[2] . $inicioy, $sol->Ingresos);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[3] . $inicioy, $sol->Deducciones);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[4] . $inicioy, $sol->Perdidas);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[5] . $inicioy, $sol->Base);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[6] . $inicioy, $sol->ImpRet);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[7] . $inicioy, $sol->PagoProv);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[8] . $inicioy, $sol->TotalRetenido);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[9] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[10] . $inicioy, $sol->Imp_pagado);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[11] . $inicioy, $sol->ACargo2);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[12] . $inicioy, $sol->Saldo_Favor);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[13] . $inicioy, $sol->Imp_Cedular);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[14] . $inicioy, $sol->Actualizacion);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[15] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[16] . $inicioy, $sol->Multa_Pagos);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[17] . $inicioy, $sol->Compensacion);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[18] . $inicioy, $sol->SubTotal);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[19] . $inicioy, $sol->Redondeo);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[20] . $inicioy, $sol->Total_Impuesto);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[21] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[22] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(11)->setCellValue($columnas[23] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(11);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('CedularA');
            //
            //Cedular G
            $inicioy = 3;

            foreach ($Cedular_G as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[2] . $inicioy, $sol->Ingresos);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[3] . $inicioy, $sol->Deducciones);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[4] . $inicioy, $sol->Perdidas);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[5] . $inicioy, $sol->Base);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[6] . $inicioy, $sol->ImpRet);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[7] . $inicioy, $sol->PagoProv);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[8] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[9] . $inicioy, $sol->Imp_pagado);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[10] . $inicioy, $sol->ACargo2);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[11] . $inicioy, $sol->Saldo_Favor);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[12] . $inicioy, $sol->Imp_Cedular);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[13] . $inicioy, $sol->Actualizacion);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[14] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[15] . $inicioy, $sol->Multa_Pagos);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[16] . $inicioy, $sol->Compensacion);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[17] . $inicioy, $sol->SubTotal);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[18] . $inicioy, $sol->Redondeo);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[19] . $inicioy, $sol->Total_Impuesto);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[20] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[21] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(12)->setCellValue($columnas[22] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(12);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('CedularG');
            //
            //Cedular H
            $inicioy = 3;

            foreach ($Cedular_H as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[2] . $inicioy, $sol->Ingresos);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[3] . $inicioy, $sol->Deducciones);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[4] . $inicioy, $sol->Base);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[5] . $inicioy, $sol->ImpRet);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[6] . $inicioy, $sol->TotalRetenido);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[7] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[8] . $inicioy, $sol->Imp_pagado);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[9] . $inicioy, $sol->ACargo2);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[10] . $inicioy, $sol->Saldo_Favor);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[11] . $inicioy, $sol->Imp_Cedular);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[12] . $inicioy, $sol->Actualizacion);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[13] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[14] . $inicioy, $sol->Multa_Pagos);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[15] . $inicioy, $sol->Compensacion);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[16] . $inicioy, $sol->SubTotal);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[17] . $inicioy, $sol->Redondeo);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[18] . $inicioy, $sol->Total_Impuesto);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[19] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[20] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(13)->setCellValue($columnas[21] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(13);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('CedularS');
            //
            //Hospedaje
            $inicioy = 3;

            foreach ($Hospedaje as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Folio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->meses;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Mes as $arreglo1) {
                        if ($variable == $arreglo1->id_meses) {
                            $resultado = $arreglo1->dsc_meses;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[2] . $inicioy, $sol->Importe);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[3] . $inicioy, $sol->ACargo);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[4] . $inicioy, $sol->Actualizaciones);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[5] . $inicioy, $sol->Recargos);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[6] . $inicioy, $sol->Hospedaje);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[7] . $inicioy, $sol->Dia);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[8] . $inicioy, $sol->Mes);
                $this->excel->setActiveSheetIndex(14)->setCellValue($columnas[9] . $inicioy, $sol->Anio);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(14);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Hospedaje');
            //


            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');
            //Fecha y número aleatorio para nombrar al excel dentro del zip         
            $filename = "Tramites fiscales.xls";
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache
            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
            //$objWriter->save('uploads/rep_excel/'.$filename);
        }

        if ($IDInforme == '3') {
            //Carga las librerías
            $this->load->library('excel');
            // Propiedades del Documento
            $this->excel->getProperties()->setCreator("DEFIRYO")
                    ->setLastModifiedBy("DEFIRYO")
                    ->setTitle('Reporte')
                    ->setSubject('Subject');

            //Bases de datos               
            $this->load->model("modelo", "TramiteSS");
            $TramiteSS = $this->TramiteSS->getTramiteSSID($ID_cliente);
            $this->load->model("modelo", "Cliente");
            $IDCliente = $this->Cliente->getID_Cliente();
            $this->load->model("modelo", "Tramites");
            $Tramites = $this->Tramites->getTramitesSALL();
            $this->load->model("modelo", "Estatus");
            $Estatus = $this->Estatus->getEstatusALL();

            //Cargamos el template del encabezado
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $this->excel = $objReader->load('uploads/Cliente_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
            $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
            //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

            $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
                "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
                "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
                "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
                "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
                "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
                "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
                "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
                "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
                "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

            $inicioy = 3;

            foreach ($TramiteSS as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Cliente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($IDCliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->Tramite;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Tramites as $arreglo1) {
                        if ($variable == $arreglo1->id_tramite) {
                            $resultado = $arreglo1->dsc_tramite;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
                $variable = $sol->Estado;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Estatus as $arreglo1) {
                        if ($variable == $arreglo1->id_estatusSS) {
                            $resultado = $arreglo1->dsc_estatusSS;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Asesoria);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Fecha);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Hora);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');

            //Fecha y número aleatorio para nombrar al excel dentro del zip         
            $filename = "Tramites IMSS.xls";
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache
            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
            //$objWriter->save('uploads/rep_excel/'.$filename);
        }

        if ($IDInforme == '4') {
            //Carga las librerías
            $this->load->library('excel');
            // Propiedades del Documento
            $this->excel->getProperties()->setCreator("DEFIRYO")
                    ->setLastModifiedBy("DEFIRYO")
                    ->setTitle('Reporte')
                    ->setSubject('Subject');

            //Bases de datos               
            $this->load->model("modelo", "TramiteSS");
            $TramiteSS = $this->TramiteSS->getTramiteSSIDNomina($ID_cliente);
            $this->load->model("modelo", "Cliente");
            $IDCliente = $this->Cliente->getID_Cliente();
            $this->load->model("modelo", "Tramites");
            $Tramites = $this->Tramites->getTramitesSALL();
            $this->load->model("modelo", "Estatus");
            $Estatus = $this->Estatus->getEstatusALL();

            //Cargamos el template del encabezado
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $this->excel = $objReader->load('uploads/Cliente_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
            $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
            //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

            $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
                "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
                "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
                "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
                "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
                "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
                "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
                "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
                "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
                "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

            $inicioy = 3;

            foreach ($TramiteSS as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $variable = $sol->Cliente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($IDCliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
                $variable = $sol->Tramite;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Tramites as $arreglo1) {
                        if ($variable == $arreglo1->id_tramite) {
                            $resultado = $arreglo1->dsc_tramite;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
                $variable = $sol->Estado;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Estatus as $arreglo1) {
                        if ($variable == $arreglo1->id_estatusSS) {
                            $resultado = $arreglo1->dsc_estatusSS;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Asesoria);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Fecha);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Hora);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');

            //Fecha y número aleatorio para nombrar al excel dentro del zip         
            $filename = "Nomina de clientes.xls";
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache
            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
            //$objWriter->save('uploads/rep_excel/'.$filename);
        }

        if ($IDInforme == '5') {
            //Carga las librerías
            $this->load->library('excel');
            // Propiedades del Documento
            $this->excel->getProperties()->setCreator("DEFIRYO")
                    ->setLastModifiedBy("DEFIRYO")
                    ->setTitle('Reporte')
                    ->setSubject('Subject');


            //Bases de datos               
            $this->load->model("modelo", "Cobrados");
            $HonorariosCobrados = $this->Cobrados->getCobranzaID2($ID_cliente);
            $this->load->model("modelo", "Cliente");
            $Cliente = $this->Cliente->getID_Cliente();
            $this->load->model("modelo", "Tarifa");
            $Tarifa = $this->Tarifa->getTarifa();
            $this->load->model("modelo", "Cuentas");
            $Cuenta = $this->Cuentas->getCuentasALL();
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

            //Cargamos el template del encabezado
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $this->excel = $objReader->load('uploads/Cliente_5.xls'); //Abrimos el excel en dónde escribiremos la información generada
            $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
            //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

            $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
                "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
                "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
                "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
                "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
                "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
                "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
                "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
                "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
                "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

            $inicioy = 3;

            foreach ($HonorariosCobrados as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, 'Honorario ' . $sol->ID);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->FolioCobranza);
                $variable = $sol->ID_cliente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ConceptoCobro);
                $variable = $sol->Id_tarifa;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Tarifa as $arreglo1) {
                        if ($variable == $arreglo1->id_tarifa) {
                            $resultado = $arreglo1->dsc_tarifa;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->MontoPagar);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Resto);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->FechaCobro);
                $variable = $sol->IdResponsableServicio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $resultado);
                $variable = $sol->IdResponsableOrden;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->FechaPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->UltimoPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->FormaPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->BancoPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->CuentaPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Factura);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->NoFactura);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->FormaConsignarPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->FechaEntregaEfectivo);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->FolioAcuseEntrega);
                $variable = $sol->IDCuentaDepositoBancario;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cuenta as $arreglo1) {
                        if ($variable == $arreglo1->ID) {
                            $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->FechaDepositoBancario);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Deposito);
                $variable = $sol->ResponsabledeCobro;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Cobrado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->ReciboElaborado);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');

            //Fecha y número aleatorio para nombrar al excel dentro del zip         
            $filename = "Honorarios brindados cobrados.xls";
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache
            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
            //$objWriter->save('uploads/rep_excel/'.$filename);
        }

        if ($IDInforme == '6') {
            //Carga las librerías
            $this->load->library('excel');
            // Propiedades del Documento
            $this->excel->getProperties()->setCreator("DEFIRYO")
                    ->setLastModifiedBy("DEFIRYO")
                    ->setTitle('Reporte')
                    ->setSubject('Subject');

            //Bases de datos               
            $this->load->model("modelo", "Cobrados");
            $HonorariosCobrados = $this->Cobrados->getCobranzaID3($ID_cliente);
            $this->load->model("modelo", "Cliente");
            $Cliente = $this->Cliente->getID_Cliente();
            $this->load->model("modelo", "Tarifa");
            $Tarifa = $this->Tarifa->getTarifa();
            $this->load->model("modelo", "Cuentas");
            $Cuenta = $this->Cuentas->getCuentasALL();
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

            //Cargamos el template del encabezado
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $this->excel = $objReader->load('uploads/Cliente_6.xls'); //Abrimos el excel en dónde escribiremos la información generada
            $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
            //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

            $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
                "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
                "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
                "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
                "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
                "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
                "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
                "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
                "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
                "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

            $inicioy = 3;

            foreach ($HonorariosCobrados as $sol) {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, 'Honorario ' . $sol->ID);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->FolioCobranza);
                $variable = $sol->ID_cliente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ConceptoCobro);
                $variable = $sol->Id_tarifa;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Tarifa as $arreglo1) {
                        if ($variable == $arreglo1->id_tarifa) {
                            $resultado = $arreglo1->dsc_tarifa;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->MontoPagar);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Resto);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->FechaCobro);
                $variable = $sol->IdResponsableServicio;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $resultado);
                $variable = $sol->IdResponsableOrden;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->FechaPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->UltimoPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->FormaPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->BancoPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->CuentaPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Factura);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->NoFactura);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->FormaConsignarPago);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->FechaEntregaEfectivo);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->FolioAcuseEntrega);
                $variable = $sol->IDCuentaDepositoBancario;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cuenta as $arreglo1) {
                        if ($variable == $arreglo1->ID) {
                            $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->FechaDepositoBancario);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Deposito);
                $variable = $sol->ResponsabledeCobro;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Cobrado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->ReciboElaborado);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }

            $this->excel->setActiveSheetIndex(0);
            $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');

            //Fecha y número aleatorio para nombrar al excel dentro del zip         
            $filename = "Honorarios pagados.xls";
            header('Content-Type: application/vnd.ms-excel'); //mime type
            header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
            header('Cache-Control: max-age=0'); //no cache
            //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
            //if you want to save it as .XLSX Excel 2007 format
            $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
            //force user to download the Excel file without writing it to server's HD
            $objWriter->save('php://output');
            //$objWriter->save('uploads/rep_excel/'.$filename);
        }
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        $this->load->model("modelo", "cliente");
        $d_cliente = $this->cliente->getID_Cliente($where);
        $data['ID_cliente'] = $d_cliente;
        // View render
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Informes';
        $this->_renderView($data);
    }

    public function Excel() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //$idcliente = $this->input->get('Folio');
        $this->load->model("modelo", "solicitud");
        //$solicitudes = $this->solicitud->getInformacion($idcliente);
        $solicitudes = $this->solicitud->getInformacionExcel();
        $this->load->model("modelo", "Rama");
        $Rama = $this->Rama->getRama();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getCliente();
        $this->load->model("modelo", "TipoCliente");
        $TipoCliente = $this->TipoCliente->getTipoCliente2();
        $this->load->model("modelo", "SubTipoCliente");
        $SubTipoCliente = $this->SubTipoCliente->getSubTipoCliente2();
        $this->load->model("modelo", "Regimen");
        $Regimen = $this->Regimen->getRegimen();
        $this->load->model("modelo", "Forma");
        $Forma = $this->Forma->getForma();
        $this->load->model("modelo", "Ambito");
        $Ambito = $this->Ambito->getAmbito();
        $this->load->model("modelo", "Tamanio");
        $Tamanio = $this->Tamanio->getTamanio();
        $this->load->model("modelo", "Sector");
        $Sector = $this->Sector->getSector();
        $this->load->model("modelo", "Clasificacion");
        $Clasificacion = $this->Clasificacion->getClasificacion();
        $this->load->model("modelo", "Pais");
        $Pais = $this->Pais->getPais();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Reporte.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");
        $inicioy = 3;

        foreach ($solicitudes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Sucursal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Folio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->NombreC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->RazonS);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->RFC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->CURP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->RepresentanteL);
            $Idvariable = $sol->cliente;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    $id_real = $arreglo1->id_cliente;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $resultado);
            $Idvariable = $sol->Tipo_cliente;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($TipoCliente as $arreglo1) {
                    $id_real = $arreglo1->id_Tipo_cliente;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_Tipo_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $resultado);
            $Idvariable = $sol->SubTipo_cliente;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($SubTipoCliente as $arreglo1) {
                    $id_real = $arreglo1->id_SubTipo_cliente;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_SubTipo_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $resultado);
            $Idvariable = $sol->RegimenJ;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Regimen as $arreglo1) {
                    $id_real = $arreglo1->id_regimen;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_regimen;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $resultado);
            $Idvariable = $sol->FormaJ;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Forma as $arreglo1) {
                    $id_real = $arreglo1->id_forma;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_forma;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $resultado);
            $Idvariable = $sol->AmbitoA;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ambito as $arreglo1) {
                    $id_real = $arreglo1->id_ambito;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ambito;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $resultado);
            $Idvariable = $sol->Tamanio;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Tamanio as $arreglo1) {
                    $id_real = $arreglo1->id_tamanio;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_tamanio;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $resultado);
            $Idvariable = $sol->Sector;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Sector as $arreglo1) {
                    $id_real = $arreglo1->id_sector;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_sector;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $resultado);
            $Idvariable = $sol->Clasificacion;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Clasificacion as $arreglo1) {
                    $id_real = $arreglo1->id_clasificacion;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_clasificacion;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $resultado);
            $Idvariable = $sol->Rama;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Rama as $arreglo1) {
                    $id_real = $arreglo1->id_rama;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_rama;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Calle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->No);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Colonia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->CP);
            $Idvariable = $sol->Pais;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Pais as $arreglo1) {
                    $id_real = $arreglo1->id_pais;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_pais;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $resultado);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Lada);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->Pagina);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->facebook);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->twitter);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[29] . $inicioy, $sol->linkedin);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[30] . $inicioy, $sol->google);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[31] . $inicioy, $sol->Contacto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[32] . $inicioy, $sol->Profesion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[33] . $inicioy, $sol->Puesto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[34] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[35] . $inicioy, $sol->C_Lada);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[36] . $inicioy, $sol->C_Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[37] . $inicioy, $sol->C_Ext);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[38] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[39] . $inicioy, $sol->Contrasenia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[40] . $inicioy, $sol->CIEC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[41] . $inicioy, $sol->NIP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[42] . $inicioy, $sol->CIEC_fortalecida);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[43] . $inicioy, $sol->Cont_clave_fiel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[44] . $inicioy, $sol->Cont_sello_digital);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[45] . $inicioy, $sol->UsuarioITSE);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[46] . $inicioy, $sol->ContraseniaITSE);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[47] . $inicioy, $sol->Antiguedad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[48] . $inicioy, $sol->PagoDespacho);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[49] . $inicioy, $sol->Observaciones);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "ReporteDirectorio.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelDirectorio() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //$idcliente = $this->input->get('Folio');
        $this->load->model("modelo", "solicitud");
        //$solicitudes = $this->solicitud->getInformacion($idcliente);
        $solicitudes = $this->solicitud->getInformacionExcel();
        $this->load->model("modelo", "Rama");
        $Rama = $this->Rama->getRama();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getCliente();
        $this->load->model("modelo", "TipoCliente");
        $TipoCliente = $this->TipoCliente->getTipoCliente2();
        $this->load->model("modelo", "SubTipoCliente");
        $SubTipoCliente = $this->SubTipoCliente->getSubTipoCliente2();
        $this->load->model("modelo", "Regimen");
        $Regimen = $this->Regimen->getRegimen();
        $this->load->model("modelo", "Forma");
        $Forma = $this->Forma->getForma();
        $this->load->model("modelo", "Ambito");
        $Ambito = $this->Ambito->getAmbito();
        $this->load->model("modelo", "Tamanio");
        $Tamanio = $this->Tamanio->getTamanio();
        $this->load->model("modelo", "Sector");
        $Sector = $this->Sector->getSector();
        $this->load->model("modelo", "Clasificacion");
        $Clasificacion = $this->Clasificacion->getClasificacion();
        $this->load->model("modelo", "Pais");
        $Pais = $this->Pais->getPais();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/DirectorioUsuario.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");
        $inicioy = 3;

        foreach ($solicitudes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Folio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->NombreC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->RazonS);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->RFC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->RepresentanteL);
            $Idvariable = $sol->cliente;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    $id_real = $arreglo1->id_cliente;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $resultado);
            $Idvariable = $sol->Tipo_cliente;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($TipoCliente as $arreglo1) {
                    $id_real = $arreglo1->id_Tipo_cliente;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_Tipo_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $resultado);
            $Idvariable = $sol->SubTipo_cliente;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($SubTipoCliente as $arreglo1) {
                    $id_real = $arreglo1->id_SubTipo_cliente;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_SubTipo_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $resultado);

            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Calle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->No);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Colonia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->CP);
            $Idvariable = $sol->Pais;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Pais as $arreglo1) {
                    $id_real = $arreglo1->id_pais;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_pais;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $resultado);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Lada);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Pagina);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->facebook);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->twitter);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->linkedin);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->google);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Contacto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->Profesion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Puesto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->C_Lada);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->C_Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->C_Ext);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "DirectorioUsuario.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//**************************************************************
//*************************************************************Metas ********************************************************************** 
    public function ExcelMetas_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Metas");
        $Metas = $this->Metas->getListaMetas();
        //Bases de datos               
        $this->load->model("modelo", "Metas");
        $HMetas = $this->Metas->getHistoricoMetas();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Metas_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Metas as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, 'Meta ' . $sol->ID);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Ponderacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Descripcion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Meta);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Estrategias);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->FormaEvidencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->A);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->B);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->R);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->An);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Bn);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Rn);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Sentido);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Frecuencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Unidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Situacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->MetaxMes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Meta1anos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->Meta5anos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Meta20202);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->Fecha);
            $variable = $sol->Encargado;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $resultado);
            $variable = $sol->Responsable;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->MesInicial . '/' . $sol->AnioInicial);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->FechaActualizaEvidencia);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }

        $inicioy = 3;

        foreach ($HMetas as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, 'Meta ' . $sol->Meta);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $sol->Situacion);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->An);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Bn);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[4] . $inicioy, $sol->Rn);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $sol->FechaActualizaEvidencia);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(1);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Histórico');
        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Metas_Organizacion.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin metas *************************************************** 
//*************************************************************Ingresos ********************************************************************** 
    public function ExcelIngresos_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Cobrados");
        $HonorariosCobrados = $this->Cobrados->getHonoCobrados();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getID_Cliente();
        $this->load->model("modelo", "Mes");
        $Mes = $this->Mes->getMeses();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Ingresos_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($HonorariosCobrados as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->IDCliente;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    if ($variable == $arreglo1->Folio) {
                        $resultado = $arreglo1->NombreC;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->MesHonorarios;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Mes as $arreglo1) {
                    if ($variable == $arreglo1->id_meses) {
                        $resultado = $arreglo1->dsc_meses;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $variable = $sol->IDResponsable;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Ingresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Honorarios mensuales cobrados.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelIngresos_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Cobrados");
        $HonorariosCobrados = $this->Cobrados->getCobranzaALL();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getID_Cliente();
        $this->load->model("modelo", "Tarifa");
        $Tarifa = $this->Tarifa->getTarifa();
        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Ingresos_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($HonorariosCobrados as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, 'Honorario ' . $sol->ID);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->FolioCobranza);
            $variable = $sol->ID_cliente;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    if ($variable == $arreglo1->Folio) {
                        $resultado = $arreglo1->NombreC;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ConceptoCobro);
            $variable = $sol->Id_tarifa;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Tarifa as $arreglo1) {
                    if ($variable == $arreglo1->id_tarifa) {
                        $resultado = $arreglo1->dsc_tarifa;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->MontoPagar);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Resto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->FechaCobro);
            $variable = $sol->IdResponsableServicio;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $resultado);
            $variable = $sol->IdResponsableOrden;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->FechaPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->UltimoPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->FormaPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->BancoPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->CuentaPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Factura);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->NoFactura);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->FormaConsignarPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->FechaEntregaEfectivo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->FolioAcuseEntrega);
            $variable = $sol->IDCuentaDepositoBancario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cuenta as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->FechaDepositoBancario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Deposito);
            $variable = $sol->ResponsabledeCobro;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Cobrado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->ReciboElaborado);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Ingresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Honorarios cobrados.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelIngresos_3() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Recibos");
        $Recibos = $this->Recibos->getNoRecibos();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Ingresos_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Recibos as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, 'Honorario ' . $sol->IDOrdenCobro);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, 'Recibo ' . $sol->ReciboNoRecibo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->ReciboFechaPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ReciboNombre);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->ReciboCantidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->ReciboHonorarios);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->ReciboSubtotal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->ReciboIVA);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->ReciboTotal);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Ingresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Recibos emitidos.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelIngresos_4() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Depositos");
        $Depositos = $this->Depositos->getDepositosALL();
        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Ingresos_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Depositos as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Cliente);
            $variable = $sol->IDCuentaDepositoBancario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cuenta as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Deposito);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->FechaDepositoBancario);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Ingresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Depositos a cuentas.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelIngresos_5() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Caja");
        $Caja = $this->Caja->getCajaALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Ingresos_5.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Caja as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->IO);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Fuente);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Unidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Personal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Concepto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Monto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Receptor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Competencia);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Ingresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Caja de Efectivo.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin ingresos *************************************************** 
//**************************************************Egresos*************************************************** ****************
    public function ExcelEgresos_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Pagos");
        $Pagos = $this->Pagos->getPagosAll();
        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Egresos_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Pagos as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Unidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Personal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Concepto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Monto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Proveedor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Forma);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Caja);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->ReferenciaC);
            $variable = $sol->IDCuentaFuente;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cuenta as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->FechaPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->FechaRPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Comprobante);
            $variable = $sol->Emisor;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $resultado);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Egresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Pago a terceros.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelEgresos_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos    
        $this->load->model("modelo", "Saldos");
        $Saldos = $this->Saldos->getSaldosAll2();
        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();



        //Bases de datos  ingresos           
        $this->load->model("modelo", "Cobrados");
        $HonorariosCobrados = $this->Cobrados->getCobranzaALL();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getID_Cliente();
        $this->load->model("modelo", "Tarifa");
        $Tarifa = $this->Tarifa->getTarifa();
        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();


        //Bases de datos  egresos            
        $this->load->model("modelo", "Pagos");
        $Pagos = $this->Pagos->getPagosAll();
        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();


        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Egresos_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Saldos as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->IDCuenta;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cuenta as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Saldo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Egresos');


        $inicioy = 3;
        foreach ($HonorariosCobrados as $sol) {
            if ($sol->FormaConsignarPago == 'Deposito_en_cuenta_bancaria') {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, 'Ingreso');
                $variable = $sol->ID_cliente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cliente as $arreglo1) {
                        if ($variable == $arreglo1->Folio) {
                            $resultado = $arreglo1->NombreC;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->ConceptoCobro);

                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Deposito);
                $variable = $sol->IDCuentaDepositoBancario;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cuenta as $arreglo1) {
                        if ($variable == $arreglo1->ID) {
                            $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[6] . $inicioy, $sol->FechaDepositoBancario);
                $variable = $sol->ResponsabledeCobro;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[7] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[8] . $inicioy, $sol->Cobrado);

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }
        }

        foreach ($Pagos as $sol) {
            if ($sol->Forma != 'Efectivo') {
                //A partir de aqui se empieza a escribir en las celdas del documento excel
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, 'Egresos');
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $sol->Unidad);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->Concepto);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Monto);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[4] . $inicioy, $sol->Proveedor);

                $variable = $sol->IDCuentaFuente;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Cuenta as $arreglo1) {
                        if ($variable == $arreglo1->ID) {
                            $resultado = $arreglo1->Banco . ' (' . $arreglo1->NoCuenta . ') ';
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[6] . $inicioy, $sol->FechaPago);
                $variable = $sol->Emisor;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($USUARIOS as $arreglo1) {
                        if ($variable == $arreglo1->Id) {
                            $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[7] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[8] . $inicioy, 'Pagado');

                $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
                $inicioy++;
            }
        }

        $this->excel->setActiveSheetIndex(1);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Movimientos_Cuentas');

        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Egresos');

        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Saldos diarios.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelEgresos_3() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "Proveedores");
        $Proveedores = $this->Proveedores->getProveedoresAll();

        $this->load->model("modelo", "Cuentas");
        $Cuenta = $this->Cuentas->getCuentasALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Rama");
        $Rama = $this->Rama->getRama();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getCliente();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();
        $this->load->model("modelo", "Actividad");
        $Actividad = $this->Actividad->getActividades();
        $this->load->model("modelo", "Tamanio");
        $Tamanio = $this->Tamanio->getTamanio();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Egresos_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Proveedores as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Folio);
            $variable = $sol->Tipo;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    if ($variable == $arreglo1->id_cliente) {
                        $resultado = $arreglo1->dsc_cliente;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Proveedor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->RFC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Pagina);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Calle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->No);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Colonia);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $resultado);
            $Idvariable = $sol->Municipio;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Contacto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->TelContacto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->MailContacto);
            $Idvariable = $sol->Rama;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Rama as $arreglo1) {
                    $id_real = $arreglo1->id_rama;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_rama;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $resultado);
            $Idvariable = $sol->Actividad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Actividad as $arreglo1) {
                    $id_real = $arreglo1->id_actividad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_actividad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $resultado);
            $Idvariable = $sol->Tamanio;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Tamanio as $arreglo1) {
                    $id_real = $arreglo1->id_tamanio;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_tamanio;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->Servicios);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Titular);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->RFCcuenta);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Cuenta);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Banco);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->CLABE);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Egresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Padrón de proveedores.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelEgresos_4() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "MovimientoProveedor");
        $MovimientoProveedor = $this->MovimientoProveedor->getMovimientosAll();
        $this->load->model("modelo", "Proveedor");
        $Proveedor = $this->Proveedor->getProveedoresAll();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Egresos_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($MovimientoProveedor as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            if ($sol->Proveedor != '0') {
                $variable = $sol->Proveedor;
                if (!$variable) {
                    $resultado = 0;
                } else {
                    foreach ($Proveedor as $arreglo1) {
                        if ($variable == $arreglo1->ID) {
                            $resultado = $arreglo1->Proveedor;
                            $resultadoRFC = $arreglo1->RFC;
                            $resultadoTel = $arreglo1->Tel;
                        }
                    }
                }
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultadoRFC);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultadoTel);
            } else {
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->OtroProveedor);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->RFC);
                $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Telefono);
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Adquiere);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Concepto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Servicios);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Monto);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Egresos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Operaciones con proveedores.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin Egresos *************************************************** 
//*************************************************************Servicios*************************************************** 
    public function ExcelServicios_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Referenciados");
        $Referenciados = $this->Referenciados->getRefTipo2();
        $this->load->model("modelo", "Estatus");
        $Estatus = $this->Estatus->getEstatusRef();
        $this->load->model("modelo", "Tipo");
        $Tipo = $this->Tipo->getRefTipo();
        $this->load->model("modelo", "Categoria");
        $Categoria = $this->Categoria->getRefCategoria();
        $this->load->model("modelo", "Cliente");
        $IDCliente = $this->Cliente->getID_Cliente();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Puesto");
        $Puesto = $this->Puesto->getPuesto();
        $this->load->model("modelo", "Area");
        $Area = $this->Area->getArea();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Servicios_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Referenciados as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->Estatus;
            foreach ($Estatus as $arreglo1) {
                if ($variable == $arreglo1->id_estatus) {
                    $resultado = $arreglo1->dsc_estatus;
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->Tipo;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Tipo as $arreglo1) {
                    if ($variable == $arreglo1->id_tipo) {
                        $resultado = $arreglo1->dsc_tipo;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Numero);
            $variable = $sol->Categoria;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Categoria as $arreglo1) {
                    if ($variable == $arreglo1->id_categoria) {
                        $resultado = $arreglo1->dsc_categoria;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->CopiConocimiento);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Asunto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Prioridad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->FechaDocumento);
            $variable = $sol->Cliente;
            if (!$variable) {
                $resultado = ' ';
            } else {
                foreach ($IDCliente as $arreglo1) {
                    if ($variable == $arreglo1->Folio) {
                        $resultado = $arreglo1->NombreC;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->NombreExterno . ' ' . $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->RemitenteExterno);
            $variable = $sol->AreaInterno;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Area as $arreglo1) {
                    if ($variable == $arreglo1->id_area) {
                        $resultado = $arreglo1->dsc_area;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $resultado);
            $variable = $sol->PuestoInterno;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Puesto as $arreglo1) {
                    if ($variable == $arreglo1->id_puesto) {
                        $resultado = $arreglo1->dsc_puesto;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $resultado);
            $variable = $sol->NombreInterno;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Servicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Actividad);
            $variable = $sol->AreaDestinatario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Area as $arreglo1) {
                    if ($variable == $arreglo1->id_area) {
                        $resultado = $arreglo1->dsc_area;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $resultado);
            $variable = $sol->PuestoDestinatario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Puesto as $arreglo1) {
                    if ($variable == $arreglo1->id_puesto) {
                        $resultado = $arreglo1->dsc_puesto;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $resultado);
            $variable = $sol->NombreDestinatario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $resultado);
            $variable = $sol->NombreRecibe;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $resultado);
            $variable = $sol->AreaRecibe;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Area as $arreglo1) {
                    if ($variable == $arreglo1->id_area) {
                        $resultado = $arreglo1->dsc_area;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $resultado);
            $variable = $sol->PuestoRecibe;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Puesto as $arreglo1) {
                    if ($variable == $arreglo1->id_puesto) {
                        $resultado = $arreglo1->dsc_puesto;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->FechaRecibe);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->HoraRecibe);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->FormatoDocumento);
            $variable = $sol->AreaUbicacion;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Area as $arreglo1) {
                    if ($variable == $arreglo1->id_area) {
                        $resultado = $arreglo1->dsc_area;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->Ubicacion);
            $variable = $sol->Asignatario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->TramiteFolio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->TramiteObservaciones);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Servicios');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Referencias de documentos.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelServicios_3() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Contabilidad");
        $Contabilidad = $this->Contabilidad->getDocContALL();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getID_Cliente();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Servicios_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Contabilidad as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->Folio;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    if ($variable == $arreglo1->Folio) {
                        $resultado = $arreglo1->NombreC;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Mes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Poliza);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ObservacionesPoliza);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->ComprobanteI);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->ObservacionesComprobantes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->PolizaEgreso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->ObservacionesPolizaEgreso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->ComprobanteE);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->ObservacionesComprobante2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->PolizaDiario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->ObservacionesPolizaDiario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Estados);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->ObservacionesEstados);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->SAT);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->ObservacionesSAT);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Cuotas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->ObservacionesCuotas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->IMSS);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->ObservacionesIMSS);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->INFONAVIT);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->ObservacionesINFONAVIT);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Nomina);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->ObservacionesNomina);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Servicios');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Documentacion para tramites.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelServicios_4() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Declaraciones");
        $Declaraciones = $this->Declaraciones->getTotalesDeclaracionesALL();
        $this->load->model("modelo", "Mes");
        $Mes = $this->Mes->getMeses();
        $this->load->model("modelo", "Cliente");
        $Cliente = $this->Cliente->getID_Cliente();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Servicios_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Declaraciones as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->Folio;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Cliente as $arreglo1) {
                    if ($variable == $arreglo1->Folio) {
                        $resultado = $arreglo1->NombreC;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->Mes;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Mes as $arreglo1) {
                    if ($variable == $arreglo1->id_meses) {
                        $resultado = $arreglo1->dsc_meses;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->ISR);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->IVA);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Nomina);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Cedular);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Hospedaje);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Federales);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Estatales);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Total);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Servicios');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Declaraciones de pago de impuestos.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelServicios_5() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos               
        $this->load->model("modelo", "TraContables");
        $TraContables = $this->TraContables->getTraContablesID2();
        $this->load->model("modelo", "Cliente");
        $IDCliente = $this->Cliente->getID_Cliente();
        $this->load->model("modelo", "Estatus");
        $Estatus = $this->Estatus->getEstatusALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Servicios_5.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($TraContables as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->Cliente;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($IDCliente as $arreglo1) {
                    if ($variable == $arreglo1->Folio) {
                        $resultado = $arreglo1->NombreC;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Tramite);
            $variable = $sol->Estado;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Estatus as $arreglo1) {
                    if ($variable == $arreglo1->id_estatusSS) {
                        $resultado = $arreglo1->dsc_estatusSS;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ObservacionesBG);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Mes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Hora);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }

        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tramites');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Tramites contables.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin Servicios *************************************************** 
//*************************************************************Personal *************************************************** 
    public function ExcelPersonal_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "InfoEmpleados");
        $InfoEmpleados = $this->InfoEmpleados->getInfoEmpleALL();
        $this->load->model("modelo", "Pais");
        $Pais = $this->Pais->getPais();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();
        //Bases de valoraciones   
        $this->load->model("modelo", "Valoraciones");
        $Valoraciones = $this->Valoraciones->getValoracionesALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Mes");
        $Mes = $this->Mes->getMeses();
        //Bases de Formacion   
        $this->load->model("modelo", "Formacion");
        $Formacion = $this->Formacion->getFormacionesALL();
        //Bases de Expediente   
        $this->load->model("modelo", "Expediente");
        $Expediente = $this->Expediente->getResultadoExpALL();
        $this->load->model("modelo", "Documentos");
        $Documentos = $this->Documentos->getDocumentosALL2();
        //Bases de Formacion   
        $this->load->model("modelo", "Tabulador");
        $Tabulador = $this->Tabulador->getTabuladorALL();
        //Bases de Remuneraciones   
        $this->load->model("modelo", "Remuneraciones");
        $Remuneraciones = $this->Remuneraciones->getRemuneracionesALL();
        //Bases de Historial   
        $this->load->model("modelo", "Historial");
        $Historial = $this->Historial->gethistorialALL();
        $this->load->model("modelo", "Puesto");
        $Puesto = $this->Puesto->getPuesto();
        $this->load->model("modelo", "Area");
        $Area = $this->Area->getArea();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Expediente_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($InfoEmpleados as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->IDUser);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Nombre);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->apaterno);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->amaterno);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Genero);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->EstadoCivil);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->CURP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->RFC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Cedula);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->NSS);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->NP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->NA);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Licencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->TipoLicencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->NoLicencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Calle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->No);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Colonia);
            $Idvariable = $sol->Pais;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Pais as $arreglo1) {
                    $id_real = $arreglo1->id_pais;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_pais;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $resultado);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Cel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->facebook);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->twitter);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->linkedin);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->Instagram);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->Estudios);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[29] . $inicioy, $sol->Certificado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[30] . $inicioy, $sol->Institucion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[31] . $inicioy, $sol->Programa);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[32] . $inicioy, $sol->Ingles);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[33] . $inicioy, $sol->Software);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[34] . $inicioy, $sol->Cargo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[35] . $inicioy, $sol->Organizacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[36] . $inicioy, $sol->FechaInicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[37] . $inicioy, $sol->FechaTermino);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[38] . $inicioy, $sol->TelTrabajo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[39] . $inicioy, $sol->SueldoAnt);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[40] . $inicioy, $sol->Funciones);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[41] . $inicioy, $sol->ViveCon);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[42] . $inicioy, $sol->Dependientes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[43] . $inicioy, $sol->Auto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[44] . $inicioy, $sol->DuenioCasa);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[45] . $inicioy, $sol->Renta);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[46] . $inicioy, $sol->SueldoDeseado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[47] . $inicioy, $sol->Hijos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[48] . $inicioy, $sol->NHijos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[49] . $inicioy, $sol->OtrosIngresos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[50] . $inicioy, $sol->OtroMes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[51] . $inicioy, $sol->Deudas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[52] . $inicioy, $sol->MDeuda);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[53] . $inicioy, $sol->Abono);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[54] . $inicioy, $sol->Gastos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[55] . $inicioy, $sol->Salud);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[56] . $inicioy, $sol->PadeceEnfermedad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[57] . $inicioy, $sol->Enfermedad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[58] . $inicioy, $sol->Discapacidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[59] . $inicioy, $sol->TipoDiscapacidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[60] . $inicioy, $sol->ActividadF);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[61] . $inicioy, $sol->ActividadFisica);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[62] . $inicioy, $sol->Estatura);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[63] . $inicioy, $sol->Peso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[64] . $inicioy, $sol->HaceDeporte);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[65] . $inicioy, $sol->Deporte);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[66] . $inicioy, $sol->Frecuencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[67] . $inicioy, $sol->Pasatiempo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[68] . $inicioy, $sol->Fecha);


            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Personal');

        $inicioy = 3;
        foreach ($Valoraciones as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->IDEmpleado;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->Mes;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Mes as $arreglo1) {
                    if ($variable == $arreglo1->id_meses) {
                        $resultado = $arreglo1->dsc_meses;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->FechaV);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Peso);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[4] . $inicioy, $sol->Talla);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $sol->Indice);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[6] . $inicioy, $sol->Diagnostico);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[7] . $inicioy, $sol->Observacion);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[8] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(1);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Valoraciones');

        $inicioy = 3;
        foreach ($Formacion as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->IDUser;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[1] . $inicioy, $sol->Modalidad);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[2] . $inicioy, $sol->Programa);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[3] . $inicioy, $sol->Institucion);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[4] . $inicioy, $sol->FechaInicio);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[5] . $inicioy, $sol->FechaTermino);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[6] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(2);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Formacion');


        $inicioy = 3;
        foreach ($Expediente as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->idEmpleado;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->idDocumento;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Documentos as $arreglo1) {
                    if ($variable == $arreglo1->id_documentos) {
                        $resultado = $arreglo1->dsc_documentos;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[2] . $inicioy, $sol->Observacion);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[3] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(3);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Expediente');

        $inicioy = 3;
        foreach ($Tabulador as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[0] . $inicioy, $sol->dsc_puesto);
            $this->excel->setActiveSheetIndex(4)->setCellValue($columnas[1] . $inicioy, $sol->Sueldo);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(4);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Tabulador');

        $inicioy = 3;
        foreach ($Remuneraciones as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->Empleado;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->meses;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Mes as $arreglo1) {
                    if ($variable == $arreglo1->id_meses) {
                        $resultado = $arreglo1->dsc_meses;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[2] . $inicioy, $sol->Dias);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[3] . $inicioy, $sol->DiaPago);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[4] . $inicioy, $sol->FormaPago);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[5] . $inicioy, $sol->Sueldo);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[6] . $inicioy, $sol->Vacacional);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[7] . $inicioy, $sol->Antiguedad);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[8] . $inicioy, $sol->IMSS);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[9] . $inicioy, $sol->INFONAVIT);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[10] . $inicioy, $sol->Aguinaldo);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[11] . $inicioy, $sol->Bono);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[12] . $inicioy, $sol->Despensa);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[13] . $inicioy, $sol->Horas);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[14] . $inicioy, $sol->Percepciones);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[15] . $inicioy, $sol->ISPT);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[16] . $inicioy, $sol->Prestamo);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[17] . $inicioy, $sol->Ahorro);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[18] . $inicioy, $sol->IMSS2);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[19] . $inicioy, $sol->Falta);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[20] . $inicioy, $sol->Deducciones);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[21] . $inicioy, $sol->Pago);
            $this->excel->setActiveSheetIndex(5)->setCellValue($columnas[22] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(5);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Remuneraciones');


        $inicioy = 3;
        foreach ($Historial as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->IDUser;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->idArea;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Area as $arreglo1) {
                    if ($variable == $arreglo1->id_area) {
                        $resultado = $arreglo1->dsc_area;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[1] . $inicioy, $resultado);
            $variable = $sol->idPuesto;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Puesto as $arreglo1) {
                    if ($variable == $arreglo1->id_puesto) {
                        $resultado = $arreglo1->dsc_puesto;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[2] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[3] . $inicioy, $sol->FechaAlta);
            $this->excel->setActiveSheetIndex(6)->setCellValue($columnas[4] . $inicioy, $sol->FechaBaja);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(6);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Historial');

        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Personal');

        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Expediente de los empleados.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelPersonal_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Faltas");
        $Faltas = $this->Faltas->getIncSolALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Expediente_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Faltas as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->Empleado;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->TAusencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->NDias);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->NHoras);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->D1Ausencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->D2Ausencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->TIncapacidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Tpermiso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Remunerada);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Estado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->FechaAutorizacion);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Ausencias');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Ausencias laborales.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelPersonal_3() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Oportunidades");
        $Oportunidades = $this->Oportunidades->getOportunidadesEmpleoALL();
        $this->load->model("modelo", "Contratacion");
        $Contratacion = $this->Contratacion->getContratacion();
        $this->load->model("modelo", "Jornada");
        $Jornada = $this->Jornada->getJornada();
        $this->load->model("modelo", "Nivel");
        $Nivel = $this->Nivel->getNivelEstudios();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Expediente_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Oportunidades as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->id);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Puesto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Funciones);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Actividades);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Metas);
            $variable = $sol->Jornada;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Jornada as $arreglo1) {
                    if ($variable == $arreglo1->id_jornada) {
                        $resultado = $arreglo1->dsc_jornada;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $resultado);
            $variable = $sol->Contratacion;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Contratacion as $arreglo1) {
                    if ($variable == $arreglo1->id_contratacion) {
                        $resultado = $arreglo1->dsc_contratacion;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Sueldo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Lugar);
            $variable = $sol->Estudios;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Nivel as $arreglo1) {
                    if ($variable == $arreglo1->id_estudios) {
                        $resultado = $arreglo1->dsc_estudios;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->ProgramasE);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Competencias);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Experiencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Genero);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->EstadoCivil);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Edad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Oportunidades');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Oportunidades de empleo.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelPersonal_4() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Solicitudes");
        $Solicitudes = $this->Solicitudes->getSolicitudesALL();
        $this->load->model("modelo", "Pais");
        $Pais = $this->Pais->getPais();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Expediente_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Solicitudes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->ID);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Nombre);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Genero);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->EstadoCivil);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->CURP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->RFC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Cedula);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->NSS);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->NP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->NA);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Licencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->TipoLicencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->NoLicencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Calle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->No);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Colonia);
            $Idvariable = $sol->Pais;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Pais as $arreglo1) {
                    $id_real = $arreglo1->id_pais;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_pais;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $resultado);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->Cel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->facebook);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->twitter);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->linkedin);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->Instagram);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->Estudios);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->Certificado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->Institucion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[29] . $inicioy, $sol->Programa);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[30] . $inicioy, $sol->Ingles);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[31] . $inicioy, $sol->Software);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[32] . $inicioy, $sol->Cargo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[33] . $inicioy, $sol->Organizacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[34] . $inicioy, $sol->FechaInicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[35] . $inicioy, $sol->FechaTermino);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[36] . $inicioy, $sol->TelTrabajo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[37] . $inicioy, $sol->SueldoAnt);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[38] . $inicioy, $sol->Funciones);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[39] . $inicioy, $sol->ViveCon);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[40] . $inicioy, $sol->Dependientes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[41] . $inicioy, $sol->Auto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[42] . $inicioy, $sol->DuenioCasa);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[43] . $inicioy, $sol->Renta);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[44] . $inicioy, $sol->SueldoDeseado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[45] . $inicioy, $sol->Salud);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[46] . $inicioy, $sol->PadeceEnfermedad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[47] . $inicioy, $sol->Enfermedad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[48] . $inicioy, $sol->Discapacidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[49] . $inicioy, $sol->TipoDiscapacidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[50] . $inicioy, $sol->ActividadF);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[51] . $inicioy, $sol->ActividadFisica);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[52] . $inicioy, $sol->Estatura);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[53] . $inicioy, $sol->Peso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[54] . $inicioy, $sol->Supox);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[55] . $inicioy, $sol->Familiares);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[56] . $inicioy, $sol->Familiar);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[57] . $inicioy, $sol->Viajar);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[58] . $inicioy, $sol->CambiarR);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[59] . $inicioy, $sol->FechaPresentarse);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Solicitudes');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Solicitudes de empleo.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin Personal *************************************************** 
//*************************************************************Material *************************************************** 
    public function ExcelMateriales_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Inmuebles");
        $Inmuebles = $this->Inmuebles->getInmuebles();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Material_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Inmuebles as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Folio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Nombre);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Calle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->No);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Colonia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->CP);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->UniAdmtivas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Empleados);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Pisos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Estacionamientos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Superficie);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Construccion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->SitJuridica);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Propietario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Arrendatario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->Renta);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Inmuebles');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Catalogo de inmuebles.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelMateriales_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Muebles");
        $Muebles = $this->Muebles->getMuebles();
        $this->load->model("modelo", "Area");
        $Area = $this->Area->getArea();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Material_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Muebles as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Folio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Nombre);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Marca);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Modelo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Material);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Color);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Resguardo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Caracteristicas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Adquisicion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Baja);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Estado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Proveedor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Serie);
            $variable = $sol->Area;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Area as $arreglo1) {
                    if ($variable == $arreglo1->id_area) {
                        $resultado = $arreglo1->dsc_area;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Valor1);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Valor2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Nota);
            $variable = $sol->Responsable;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $resultado);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Muebles');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Catalogo de muebles.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelMateriales_3() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Material_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Material as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Folio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Resguardo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Material);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Marca);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Modelo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Entrada);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Cajas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->CostoCaja);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Paquete);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->CostoPaquete);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Unidades);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->CostoUnidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->CostoTotal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Proveedor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Nota);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Materiales');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Ingreso de materiales.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelMateriales_4() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "SalidaMaterial");
        $SalidaMaterial = $this->SalidaMaterial->getSalMatlesALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Material_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($SalidaMaterial as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->MaterialID;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Material as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Material;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $variable = $sol->Asigna;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $variable = $sol->Recibe;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Cajas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Paquete);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Unidades);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Asignaciones');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Asignaciones de articulos.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin Material *************************************************** 
//*************************************************************Transporte *************************************************** 
    public function ExcelTransportes_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Transportes");
        $Transportes = $this->Transportes->getTransprtesALL();
        $this->load->model("modelo", "Mantenimiento");
        $Mantenimiento = $this->Mantenimiento->getMantenimientoALL();
        $this->load->model("modelo", "Verificaciones");
        $Verificaciones = $this->Verificaciones->getVerificacionesALL();
        $this->load->model("modelo", "Accidentes");
        $Accidentes = $this->Accidentes->getAccidentesALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Transportes_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;
        foreach ($Transportes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Clase);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Tipo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Marca);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Modelo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Color);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Combustible);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Propietario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Placas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Valor1);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Aseguradora);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Poliza);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }

        $inicioy = 3;
        foreach ($Mantenimiento as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $variable = $sol->IDUnidad;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Transportes as $arreglo1) {
                    if ($variable == $arreglo1->IDUnidad) {
                        $resultado = $arreglo1->Tipo . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Color;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $sol->Mantenimiento);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->Kilometraje);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Taller);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[4] . $inicioy, $sol->Costo);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $sol->Tareas);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[6] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(1);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Mantenimiento');

        $inicioy = 3;
        foreach ($Verificaciones as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $variable = $sol->IDUnidad;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Transportes as $arreglo1) {
                    if ($variable == $arreglo1->IDUnidad) {
                        $resultado = $arreglo1->Tipo . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Color;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[1] . $inicioy, $sol->AnioVerificacion);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[2] . $inicioy, $sol->Semestre);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[3] . $inicioy, $sol->FechaRealizacion);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[4] . $inicioy, $sol->LugarRealizacion);
            $this->excel->setActiveSheetIndex(2)->setCellValue($columnas[5] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(2);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Verificaciones');

        $inicioy = 3;
        foreach ($Accidentes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $variable = $sol->IDUnidad;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Transportes as $arreglo1) {
                    if ($variable == $arreglo1->IDUnidad) {
                        $resultado = $arreglo1->Tipo . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Color;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[1] . $inicioy, $sol->FechaAccidente);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[2] . $inicioy, $sol->HoraAccidente);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[3] . $inicioy, $sol->Descripcion);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[4] . $inicioy, $sol->Danios);
            $this->excel->setActiveSheetIndex(3)->setCellValue($columnas[5] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        $this->excel->setActiveSheetIndex(3);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Accidentes');

        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Unidades');

        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Unidades de transporte.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelTransportes_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Solicitudes");
        $Solicitudes = $this->Solicitudes->getSolicitudesALL2();
        $this->load->model("modelo", "Transportes");
        $Transportes = $this->Transportes->getTransprtesALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Transportes_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Solicitudes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $variable = $sol->IDUnidad;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Transportes as $arreglo1) {
                    if ($variable == $arreglo1->IDUnidad) {
                        $resultado = $arreglo1->Tipo . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Color;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Comision);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->FechaComision);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Descripcion);
            $Idvariable = $sol->Estado2;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad2;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->LugarSalida);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->HoraSalida);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->HoraRegreso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Duracion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Pasajeros);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->NombresPasajeros);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Conductor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Disponibilidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Estado);
            $variable = $sol->IDUnidadAsignada;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Transportes as $arreglo1) {
                    if ($variable == $arreglo1->IDUnidad) {
                        $resultado = $arreglo1->Tipo . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Color;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $resultado);
            $variable = $sol->Autoriza;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->FechaAutorizacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->HoraAutorizacion);


            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Solicitudes');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Solicitudes de transportes.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin Transporte *************************************************** 
//*************************************************************Vinculacion *************************************************** 
    public function ExcelVinculacion_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Temas");
        $Temas = $this->Temas->getTemasALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Vinculacion_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Temas as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Tema_1);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Tema_2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Tema_3);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Tema_4);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Tema_5);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Tema_6);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Tema_7);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Tema_8);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Tema_9);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Tema_10);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Tema_11);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Tema_12);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Tema_13);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Temas');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Temas de formacion.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelVinculacion_2() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Solicitudes");
        $Solicitudes = $this->Solicitudes->getCursosAll();
        $this->load->model("modelo", "Modalidad");
        $Modalidad = $this->Modalidad->getModalidad();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Actividad");
        $Actividad = $this->Actividad->getActividad();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Vinculacion_2.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Solicitudes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $variable = $sol->TipoActividad;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Actividad as $arreglo1) {
                    if ($variable == $arreglo1->id_actividad) {
                        $resultado = $arreglo1->dsc_actividad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->NombreActividad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Solicitante);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ResponsableOrganizacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Objetivo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Temas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Ciudad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Domicilio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Telefono);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Email);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Pagina);
            $variable = $sol->Modalidad;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Modalidad as $arreglo1) {
                    if ($variable == $arreglo1->id_modalidad) {
                        $resultado = $arreglo1->dsc_modalidad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->DuracionHoras);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Horario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->FechaInicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->FechaTermino);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->CupoMinimo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->CupoMaximo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->Perfil);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Fecha);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->Aprobacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Costo);
            $variable = $sol->Responsable;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->NuevoNombreActividad);
            $variable = $sol->Modalidad2;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Modalidad as $arreglo1) {
                    if ($variable == $arreglo1->id_modalidad) {
                        $resultado = $arreglo1->dsc_modalidad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->Duracion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->Horario2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->FechaInicio2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->FechaTermino2);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Solicitudes');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Solicitudes de actividades de formacion.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelVinculacion_3() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Evaluaciones");
        $Evaluaciones = $this->Evaluaciones->getEvaluacionesALL2();
        $this->load->model("modelo", "Solicitudes");
        $Solicitudes = $this->Solicitudes->getCursosAll();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Vinculacion_3.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Evaluaciones as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $variable = $sol->Formacionid;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Solicitudes as $arreglo1) {
                    if ($variable == $arreglo1->id) {
                        $resultado = $arreglo1->NombreActividad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Dominio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Materiales);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Habilidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Estructura);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Objetivos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Fundamentos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Practica);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Limpieza);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Mobiliario);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Equipo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->CalidadMI);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->CongruenciaMI);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->EntregaMI);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->CalidadME);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->CongruenciaME);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->EntregaME);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->CalifCurso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->CalifInstruc);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Evaluaciones');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Evaluaciones de actividades de formacion.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelVinculacion_4() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Temas");
        $Temas = $this->Temas->getProyectos();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Vinculacion_4.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Temas as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Tema_1);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Tema_2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Tema_3);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Tema_4);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Tema_5);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Tema_6);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Tema_7);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Temas');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Temas de estancias.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelVinculacion_5() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Solicitudes");
        $Solicitudes = $this->Solicitudes->getEstanciasALL();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $this->load->model("modelo", "Apoyos");
        $Apoyos = $this->Apoyos->getApoyoEconomico();
        $this->load->model("modelo", "Duracion");
        $Duracion = $this->Duracion->getDuracion();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();
        $this->load->model("modelo", "Sector");
        $Sector = $this->Sector->getRegimen();
        $this->load->model("modelo", "Estancia");
        $Estancia = $this->Estancia->getEstancia();
        $this->load->model("modelo", "Estudios");
        $Estudios = $this->Estudios->getEstudios();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Vinculacion_5.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Solicitudes as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $Idvariable = $sol->NombreProyecto;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estancia as $arreglo1) {
                    $id_real = $arreglo1->id_estancia;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estancia;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Solicitante);
            $Idvariable = $sol->NivelEstudios;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estudios as $arreglo1) {
                    $id_real = $arreglo1->id_estudios;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estudios;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->ProgramaEducativo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Institucion);
            $Idvariable = $sol->Sector;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Sector as $arreglo1) {
                    $id_real = $arreglo1->id_regimen;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_regimen;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->DomicilioInstCalle);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->DomicilioInstNumero);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->DomicilioInstColonia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->DomicilioInstTelefono);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $resultado);
            $variable = $sol->Duracion;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Duracion as $arreglo1) {
                    if ($variable == $arreglo1->id_duracion) {
                        $resultado = $arreglo1->dsc_duracion;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Justificacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->Objetivo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Metas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Actividades);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Aprobacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->Apoyo);
            $variable = $sol->FormaEntrega;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Apoyos as $arreglo1) {
                    if ($variable == $arreglo1->id_apoyo) {
                        $resultado = $arreglo1->dsc_apoyo;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->Periodicidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Monto);
            $variable = $sol->Responsable;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->FechaInicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Horario);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Estancias');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Solicitudes de estancias.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelVinculacion_6() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "Donativo");
        $Donativo = $this->Donativo->getDonativosAll();
        $this->load->model("modelo", "Pais");
        $Pais = $this->Pais->getPais();
        $this->load->model("modelo", "Estado");
        $Estado = $this->Estado->getEstado2();
        $this->load->model("modelo", "Ciudad");
        $Ciudad = $this->Ciudad->getCiudad2();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Vinculacion_6.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($Donativo as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->ID);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Solicita);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Nombre);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->RFC);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Domicilio);
            $Idvariable = $sol->Pais;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Pais as $arreglo1) {
                    $id_real = $arreglo1->id_pais;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_pais;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $resultado);
            $Idvariable = $sol->Estado;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Estado as $arreglo1) {
                    $id_real = $arreglo1->id_estado;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_estado;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $resultado);
            $Idvariable = $sol->Ciudad;
            if (!$Idvariable) {
                $resultado = 0;
            } else {
                foreach ($Ciudad as $arreglo1) {
                    $id_real = $arreglo1->id_ciudad;
                    if ($id_real == $Idvariable) {
                        $resultado = $arreglo1->dsc_ciudad;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Representante);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->CURP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Cel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->Tel);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->facebook);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->twitter);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->linkedin);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->Instagram);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Objetivo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->Servicios);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Logros);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->Lugar);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Ingresosx);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->Proyecto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->Duracion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Problematica);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->ObjGral);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->Metas);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->Poblacion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->Metodologia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[29] . $inicioy, $sol->Ltrabajo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[30] . $inicioy, $sol->Donativo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[31] . $inicioy, $sol->DActividad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[32] . $inicioy, $sol->Impacto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[33] . $inicioy, $sol->Fecha);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Donativos');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Solicitudes de donativos.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

    public function ExcelPagosProgramados() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "PagosProg");
        $PagosProg = $this->PagosProg->getPagosProg();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Egresos_5.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($PagosProg as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Unidad);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->Personal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->Concepto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Monto);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->Proveedor);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Forma);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Caja);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->FechaPago);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->Comprobante);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('PagosProgramados');
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Pagos Programados.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************Fin Vinculacion *************************************************** 
//********************************************************************** 
    public function Tecnologia_1() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');

        //Bases de datos   
        $this->load->model("modelo", "ServPreventivo");
        $ServPreventivo = $this->ServPreventivo->getServPreventivo();
        $this->load->model("modelo", "ServCorrectivo");
        $ServCorrectivo = $this->ServCorrectivo->getServCorrectivo();
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipo();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Tecnologicos_1.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);
        //$objWorksheet = $this->excel->getActiveSheet()->setTitle('Metas');

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");

        $inicioy = 3;

        foreach ($ServPreventivo as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->Serie);
            $variable = $sol->Equipo;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Equipo as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Nombre . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Serie;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->FechaServicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Hardware);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->ObservacionesHardware);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Perifericos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->ObservacionesPerifericos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Software);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $sol->ObservacionesSoftware);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Antivirus);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->ObservacionesAntivirus);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Internet);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->ObservacionesInternet);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->Intranet);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->ObservacionesIntranet);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->ObservacionesCorreo);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->Asesoria);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->ObservacionesAsesoria);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->Otro);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->ObservacionesOtro);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->Observaciones);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->HrInicio);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->HrTermino);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->Asesor);
            $variable = $sol->Usuario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $resultado);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }



        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Preventivo');

        $inicioy = 3;

        foreach ($ServCorrectivo as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel	
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[0] . $inicioy, $sol->Serie);
            $variable = $sol->Equipo;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($Equipo as $arreglo1) {
                    if ($variable == $arreglo1->ID) {
                        $resultado = $arreglo1->Nombre . ' ' . $arreglo1->Marca . ' ' . $arreglo1->Modelo . ' ' . $arreglo1->Serie;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[1] . $inicioy, $resultado);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[2] . $inicioy, $sol->FechaServicio);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[3] . $inicioy, $sol->Hardware);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[4] . $inicioy, $sol->ObservacionesHardware);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[5] . $inicioy, $sol->Perifericos);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[6] . $inicioy, $sol->ObservacionesPerifericos);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[7] . $inicioy, $sol->Software);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[8] . $inicioy, $sol->ObservacionesSoftware);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[9] . $inicioy, $sol->Antivirus);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[10] . $inicioy, $sol->ObservacionesAntivirus);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[11] . $inicioy, $sol->Internet);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[12] . $inicioy, $sol->ObservacionesInternet);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[13] . $inicioy, $sol->Intranet);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[14] . $inicioy, $sol->ObservacionesIntranet);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[15] . $inicioy, $sol->Correo);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[16] . $inicioy, $sol->ObservacionesCorreo);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[17] . $inicioy, $sol->Asesoria);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[18] . $inicioy, $sol->ObservacionesAsesoria);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[19] . $inicioy, $sol->Otro);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[20] . $inicioy, $sol->ObservacionesOtro);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[21] . $inicioy, $sol->Propuesta);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[22] . $inicioy, $sol->FechaSolucion);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[23] . $inicioy, $sol->HrInicio);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[24] . $inicioy, $sol->HrTermino);
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[25] . $inicioy, $sol->Asesor);
            $variable = $sol->Usuario;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($USUARIOS as $arreglo1) {
                    if ($variable == $arreglo1->Id) {
                        $resultado = $arreglo1->nombre . ' ' . $arreglo1->apaterno . ' ' . $arreglo1->amaterno;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(1)->setCellValue($columnas[26] . $inicioy, $resultado);

            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }


        $this->excel->setActiveSheetIndex(1);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Correctivo');

        $this->excel->setActiveSheetIndex(0);
        $objWorksheet = $this->excel->getActiveSheet()->setTitle('Preventivo');


        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "Mantenimiento Preventivo.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************fin tecnologia*************************************************************************
//*************************************************transmisiones**************************************************************************
    public function ExcelTransmision() {
        //Carga las librerías
        $this->load->library('excel');
        // Propiedades del Documento
        $this->excel->getProperties()->setCreator("DEFIRYO")
                ->setLastModifiedBy("DEFIRYO")
                ->setTitle('Reporte')
                ->setSubject('Subject');


        $Ndesarrollo = 7;
        //Abriendo BD Proyectos
        $this->load->model("modelo", "Transmisiones");
        $Transmisiones = $this->Transmisiones->getTransmisiones($Ndesarrollo);
        //Abriendo BD Proyectos
        $this->load->model("modelo", "FormaT");
        $FormaT = $this->FormaT->getFormaTAll();

        //Cargamos el template del encabezado
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $this->excel = $objReader->load('uploads/Reporte.xls'); //Abrimos el excel en dónde escribiremos la información generada
        $objWorksheet = $this->excel->getActiveSheet()->toArray(null, null, null, null, null, null);

        $columnas = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
            "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
            "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
            "CA", "CB", "CC", "CD", "CE", "CF", "CG", "CH", "CI", "CJ", "CK", "CL", "CM", "CN", "CO", "CP", "CQ", "CR", "CS", "CT", "CU", "CV", "CW", "CX", "CY", "CZ",
            "DA", "DB", "DC", "DD", "DE", "DF", "DG", "DH", "DI", "DJ", "DK", "DL", "DM", "DN", "DO", "DP", "DQ", "DR", "DS", "DT", "DU", "DV", "DW", "DX", "DY", "DZ",
            "EA", "EB", "EC", "ED", "EE", "EF", "EG", "EH", "EI", "EJ", "EK", "EL", "EM", "EN", "EO", "EP", "EQ", "ER", "ES", "ET", "EU", "EV", "EW", "EX", "EY", "EZ",
            "FA", "FB", "FC", "FD", "FE", "FF", "FG", "FH", "FI", "FJ", "FK", "FL", "FM", "FN", "FO", "FP", "FQ", "FR", "FS", "FT", "FU", "FV", "FW", "FX", "FY", "FZ",
            "GA", "GB", "GC", "GD", "GE", "GF", "GG", "GH", "GI", "GJ", "GK", "GL", "GM", "GN", "GO", "GP", "GQ", "GR", "GS", "GT", "GU", "GV", "GW", "GX", "GY", "GZ",
            "HA", "HB", "HC", "HD", "HE", "HF", "HG", "HH", "HI", "HJ", "HK", "HL", "HM", "HN", "HO", "HP", "HQ", "HR", "HS", "HT", "HU", "HV", "HW", "HX", "HY", "HZ",
            "IA", "IB", "IC", "ID", "IE", "IF", "IG", "IH", "II", "IJ", "IK", "IL", "IM", "IN", "IO", "IP", "IQ", "IR", "IS", "IT", "IU", "IV", "IW", "IX", "IY", "IZ");
        $inicioy = 3;

        foreach ($Transmisiones as $sol) {
            //A partir de aqui se empieza a escribir en las celdas del documento excel
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[0] . $inicioy, $sol->NFideicomiso);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[1] . $inicioy, $sol->FechaEntrega);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[2] . $inicioy, $sol->FechaNot);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[3] . $inicioy, $sol->Notificador);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[4] . $inicioy, $sol->RecibeNot);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[5] . $inicioy, $sol->Manzana);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[6] . $inicioy, $sol->Lotes);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[7] . $inicioy, $sol->Viviendas);
            //Abriendo BD Proyectos
            $this->load->model("modelo", "Modelos");
            $Modelos = $this->Modelos->getModelos($sol->Manzana, $sol->Lotes);
            $ModelitoCasa = ' ';
            foreach ($Modelos as $Modelos1) {
                $ModelitoCasa = $Modelos1->Modelo;
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[8] . $inicioy, $ModelitoCasa);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[9] . $inicioy, $sol->Adquirente);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[10] . $inicioy, $sol->Genero);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[11] . $inicioy, $sol->Telefono);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[12] . $inicioy, $sol->C1);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[13] . $inicioy, $sol->M1);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[14] . $inicioy, $sol->C2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[15] . $inicioy, $sol->M2);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[16] . $inicioy, $sol->C3);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[17] . $inicioy, $sol->M3);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[18] . $inicioy, $sol->C4);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[19] . $inicioy, $sol->M4);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[20] . $inicioy, $sol->C5);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[21] . $inicioy, $sol->M5);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[22] . $inicioy, $sol->C6);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[23] . $inicioy, $sol->M6);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[24] . $inicioy, $sol->C7);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[25] . $inicioy, $sol->M7);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[26] . $inicioy, $sol->C8);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[27] . $inicioy, $sol->M8);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[28] . $inicioy, $sol->C9);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[29] . $inicioy, $sol->M9);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[30] . $inicioy, $sol->C10);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[31] . $inicioy, $sol->M10);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[32] . $inicioy, $sol->PrecioBase);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[33] . $inicioy, $sol->MontoDescuento);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[34] . $inicioy, $sol->CostoAdic);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[35] . $inicioy, $sol->PrecioTotal);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[36] . $inicioy, $sol->PrecioContrato);
            $variable = $sol->FormaTrans;
            if (!$variable) {
                $resultado = 0;
            } else {
                foreach ($FormaT as $arreglo1) {
                    if ($variable == $arreglo1->id_forma) {
                        $resultado = $arreglo1->dsc_forma;
                    }
                }
            }
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[37] . $inicioy, $resultado);

            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[38] . $inicioy, $sol->MontoAnt);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[39] . $inicioy, $sol->OtrosAbonos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[40] . $inicioy, $sol->Cofinanciado);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[41] . $inicioy, $sol->CreditoA);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[42] . $inicioy, $sol->InstitucionA);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[43] . $inicioy, $sol->CreditoB);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[44] . $inicioy, $sol->InstitucionB);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[45] . $inicioy, $sol->Importe);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[46] . $inicioy, $sol->Diferencia);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[47] . $inicioy, $sol->PrecioVentaN);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[48] . $inicioy, $sol->PrecioVentaE);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[49] . $inicioy, $sol->PagoTerreno);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[50] . $inicioy, $sol->PagoRendimientos);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[51] . $inicioy, $sol->TotalIng);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[52] . $inicioy, $sol->FirmaNP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[53] . $inicioy, $sol->FechaFirmaNP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[54] . $inicioy, $sol->NPub);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[55] . $inicioy, $sol->NumNP);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[56] . $inicioy, $sol->Adscripcion);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[57] . $inicioy, $sol->NumeralR);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[58] . $inicioy, $sol->Observaciones);
            $this->excel->setActiveSheetIndex(0)->setCellValue($columnas[59] . $inicioy, $sol->Cancelacion);


            $this->excel->getActiveSheet()->getRowDimension($inicioy)->setRowHeight(18); //Ajustamos el alto de las celdas
            $inicioy++;
        }
        //Fecha y número aleatorio para nombrar al excel dentro del zip         
        $filename = "ReporteDirectorio.xls";
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        //$objWriter->save('uploads/rep_excel/'.$filename);
    }

//*************************************************************************************************************************************************  
//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

    public function info() {

        $files = get_filenames($this->folder, FALSE);

        if ($files) {
            $data['files'] = $files;
        } else {
            $data['files'] = NULL;
        }
        $this->load->view('filenames', $data);
    }

    public function ReportesPDF() {
        // Se carga el modelo alumno
        $this->load->model("modelo", "PDF_modelo");
        // Se carga la libreria fpdf
        $this->load->library('Pdf');

        // Se obtienen los alumnos de la base de datos
        $recibos = $this->PDF_modelo->getNoRecibos();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();

        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Recibo DEFIRYO");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200, 200, 200);

        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        foreach ($recibos as $recibo) {
            
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'R', 'L'));
        $this->pdf->SetWidths(array(95, 65, 30));
        $this->pdf->Row(array(utf8_decode('Calle Aldama No. 6-A'), utf8_decode(''), html_entity_decode('')));
        $this->pdf->Row(array(utf8_decode('Zona Centro'), utf8_decode(''), html_entity_decode('')));
        $this->pdf->Row(array(utf8_decode('Silao, GTO. México.'), utf8_decode(''), html_entity_decode('')));
        $this->pdf->Row(array(utf8_decode('Tel. +52 (472) 722 23 24'), utf8_decode(''), html_entity_decode('')));
        $this->pdf->Row(array(utf8_decode('"TU PROTECCION NUESTRA MISION"'), utf8_decode('Número de recibo: '), html_entity_decode($recibo->ReciboNoRecibo)));
        $this->pdf->Ln(7);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(150));
        $this->pdf->RowDraw(array(utf8_decode('Recibí de:')), '1', 'true');
        $this->pdf->SetAligns(array('L', 'L', 'R'));
        $this->pdf->SetWidths(array(20, 100, 30));
        $this->pdf->Row(array(utf8_decode(''), utf8_decode($recibo->ReciboNombre), html_entity_decode('')));
        $this->pdf->Row(array(utf8_decode(''), utf8_decode($recibo->ReciboHonorarios), html_entity_decode($recibo->ReciboCantidad)));
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(150));
        $this->pdf->Row(array(''));
        $this->pdf->Ln(7);
        $this->pdf->SetAligns(array('L', 'R', 'R'));
        $this->pdf->SetWidths(array(95, 65, 15));
        $this->pdf->Row(array(utf8_decode(''), utf8_decode('Sub-Total: '), html_entity_decode($recibo->ReciboSubtotal)));
        $this->pdf->Row(array(utf8_decode(''), utf8_decode('IVA: '), html_entity_decode($recibo->ReciboIVA)));
        $this->pdf->Row(array(utf8_decode(''), utf8_decode('Total: '), html_entity_decode($recibo->ReciboTotal)));


        // La variable $x se utiliza para mostrar un número consecutivo

        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Lista de recibos.pdf", 'I');
    }

    public function GrafxPrecioDia() {
        $Comercializador = $_POST["Comercializador"];
        $Cemento = $_POST["Cemento"];
        $Start = date_create_from_format('d/m/Y', $_POST["FechaInicioEdo"]);
        $StartFecha = date_format($Start, 'Ymd');
        $End = date_create_from_format('d/m/Y', $_POST["FechaTerminoEdo"]);
        $EndFecha = date_format($End, 'Ymd');

        $this->load->model("modelo", "ComerPrecios");
        $ComerPreciosID = $this->ComerPrecios->getComerPreciosID($Comercializador);
        $this->load->model("modelo", "Marca");
        $Marca = $this->Marca->getMarca();


        $f[] = "";
        $c[] = "";
        $g[] = "";
        $mo[] = "";
        $ma[] = "";
        $dif[] = "";
        $resultado = "";
        $i = 0;
        foreach ($ComerPreciosID as $ComerPreciosID1) {
            $Valor = date_create_from_format('d/m/Y', $ComerPreciosID1->Fecha);
            $fecha = date_format($Valor, 'Ymd');

            if ($fecha >= $StartFecha && $fecha <= $EndFecha) {
                $f[$i] = $ComerPreciosID1->Fecha;
                $c[$i] = $ComerPreciosID1->PrecioCblanco;
                $g[$i] = $ComerPreciosID1->PrecioCgris;
                $mo[$i] = $ComerPreciosID1->PrecioCmortero;
                $ma[$i] = $ComerPreciosID1->Marca;
                $i++;
            }
        }
        $m = count($f);

        $resultado = array_unique($f);
        $conuntm = count($resultado);



        $marcasdif = array_unique($ma);
        $conuntmarcas = count($marcasdif);
        ?>    
        <div class="col-md-6 col-xs-12" id="GrafxPrecioDialabel">
            <canvas id="Barra1" />
        </div>  
        <div id="legendDiv1" class="col-md-6 col-xs-12 doughnut-legend" >
        </div>

        <script>
            var data1 = {
            labels : [
                    < ?
                    for ($i = 0; $i < $conuntm; $i++){
            if (!empty($resultado[$i])){
            echo '"'.$resultado[$i].'",';
            }}? >
            ],
                    datasets : [
                    {
                    < ? for ($i = 0; $i < 1; $i++){  ? >
                            label: < ? echo '"'.$marcasdif[1].'"'; ? > ,
                            fillColor : "rgba(118,207,40,1)",
                            strokeColor : "rgba(118,207,40,0.8)",
                            highlightFill: "rgba(118,207,40,0.75)",
                            highlightStroke: "rgba118,207,40,0.5)",
                            data : [
                                    < ?
                                    if ($Cemento == 1){
                            for ($i = 0; $i < $conuntm; $i++){
                            echo $c[$i].',';
                            }}
                            if ($Cemento == 2){
                            for ($i = 0; $i < $conuntm; $i++){
                            echo $g[$i].',';
                            }}
                            if ($Cemento == 3){
                            for ($i = 0; $i < $conuntm; $i++){
                            echo $mo[$i].',';
                            }}? >
                            ]
                            < ? } ? >
                    }
                    ]

            };
            var Barras1 = document.getElementById("Barra1").getContext("2d");
            window.myBarra1 = new Chart(Barras1).Bar(data1, {
            animationEasing : "easeOutBounce",
                    animateRotate : true,
                    animateScale : false,
                    scaleFontSize : 8.5,
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

//Fin cemento
}
