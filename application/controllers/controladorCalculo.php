<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladorCalculo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
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

    public function removeCache() {
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=localhost:81/Corporativo/"> 
        <?php
    }

    public function index() {
        $data['contentView'] = 'Login';
        $this->_renderView($data);
    }

    public function Menu() {
        $this->load->model("modelo", "datos");
        $MENU = $this->input->get('ID');
        $indiceuser = $this->input->get('i');
        if ($MENU == 1) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $this->load->model("modelo", "cliente");
            $d_cliente = $this->cliente->getCliente($where);
            $data['cliente'] = $d_cliente;
            //Abriendo BD responsables
            $where = '';
            $this->load->model("modelo", "Responsables");
            $d_responsables = $this->Responsables->getResponsable($where);
            $data['Responsables'] = $d_responsables;
            //Abriendo BD Tipo-cliente
            $where = '';
            $this->load->model("modelo", "Tipo_cliente");
            $d_Tipo_cliente = $this->Tipo_cliente->getTipoCliente2($where);
            $data['Tipo_cliente'] = $d_Tipo_cliente;
            //Abriendo BD SubTipo-cliente
            $where = '';
            $this->load->model("modelo", "SubTipo_cliente");
            $d_SubTipo_cliente = $this->SubTipo_cliente->getSubTipoCliente2($where);
            $data['SubTipo_cliente'] = $d_SubTipo_cliente;
            //Abriendo BD cliente
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            //Abriendo BD Regimen
            $where = '';
            $this->load->model("modelo", "Regimen");
            $d_regimen = $this->Regimen->getRegimen($where);
            $data['Regimen'] = $d_regimen;
            //Abriendo BD Forma
            $where = '';
            $this->load->model("modelo", "Forma");
            $d_Forma = $this->Forma->getForma($where);
            $data['Forma'] = $d_Forma;
            //Abriendo BD Ambito
            $where = '';
            $this->load->model("modelo", "Ambito");
            $d_Ambito = $this->Ambito->getAmbito($where);
            $data['Ambito'] = $d_Ambito;
            //Abriendo BD Clasificacion
            $where = '';
            $this->load->model("modelo", "Clasificacion");
            $d_Clasificacion = $this->Clasificacion->getClasificacion($where);
            $data['Clasificacion'] = $d_Clasificacion;
            //Abriendo BD Tamanio
            $where = '';
            $this->load->model("modelo", "Tamanio");
            $d_Tamanio = $this->Tamanio->getTamanio($where);
            $data['Tamanio'] = $d_Tamanio;
            //Abriendo BD Sector
            $where = '';
            $this->load->model("modelo", "Sector");
            $d_Sector = $this->Sector->getSector($where);
            $data['Sector'] = $d_Sector;
            //Abriendo BD Rama
            $where = '';
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama($where);
            $data['Rama'] = $d_Rama;
            //Abriendo BD Pais
            $where = '';
            $this->load->model("modelo", "Pais");
            $d_Pais = $this->Pais->getPais($where);
            $data['Pais'] = $d_Pais;
            //Abriendo BD Estado
            $where = '';
            $this->load->model("modelo", "Estado");
            $d_Estado = $this->Estado->getEstado2($where);
            $data['Estado'] = $d_Estado;
            //Abriendo BD Ciudad
            $where = '';
            $this->load->model("modelo", "Ciudad");
            $d_Ciudad = $this->Ciudad->getCiudad2($where);
            $data['Ciudad'] = $d_Ciudad;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Directorio';
            $this->_renderView($data);
        }
        if ($MENU == 2) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD Clientes
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            //Abriendo BD responsables
            $where = '';
            $this->load->model("modelo", "Responsables");
            $d_responsables = $this->Responsables->getResponsable($where);
            $data['Responsables'] = $d_responsables;
            //Abriendo BD Area
            $where = '';
            $this->load->model("modelo", "Area");
            $Area = $this->Area->getArea($where);
            $data['Area'] = $Area;
            //Abriendo BD Puesto
            $where = '';
            $this->load->model("modelo", "Puesto");
            $Puesto = $this->Puesto->getPuesto($where);
            $data['Puesto'] = $Puesto;
            //Abriendo BD Tipo
            $where = '';
            $this->load->model("modelo", "RefTipo2");
            $d_RefTipo2 = $this->RefTipo2->getRefTipo2($where);
            $data['RefTipo2'] = $d_RefTipo2;
            //Abriendo BD Tipo
            $where = '';
            $this->load->model("modelo", "RefTipo");
            $d_RefTipo = $this->RefTipo->getRefTipo($where);
            $data['RefTipo'] = $d_RefTipo;
            //Abriendo BD Categoria
            $where = '';
            $this->load->model("modelo", "RefCategoria");
            $d_RefCategoria = $this->RefCategoria->getRefCategoria($where);
            $data['RefCategoria'] = $d_RefCategoria;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Referenciados';
            $this->_renderView($data);
        }
        if ($MENU == 3) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD tipo referenciado
            $where = '';
            $this->load->model("modelo", "RefTipo");
            $d_RefTipo = $this->RefTipo->getRefTipo($where);
            $data['RefTipo'] = $d_RefTipo;
            //Abriendo BD estatus
            $where = '';
            $this->load->model("modelo", "Estatus");
            $Estatus = $this->Estatus->getEstatusRef($where);
            $data['Estatus'] = $Estatus;
            //Abriendo BD responsables
            $where = '';
            $this->load->model("modelo", "Responsables");
            $d_responsables = $this->Responsables->getResponsable($where);
            $data['Responsables'] = $d_responsables;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Tramites';
            $this->_renderView($data);
        }
        if ($MENU == 4) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Contabilidad';
            $this->_renderView($data);
        }
        if ($MENU == 5) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'SegSoc';
            $this->_renderView($data);
        }
        if ($MENU == 6) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'CalculoImpuestos';
            $this->_renderView($data);
        }
        if ($MENU == 7) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Vinculacion';
            $this->_renderView($data);
        }
        if ($MENU == 8) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon';
            $this->_renderView($data);
        }
        if ($MENU == 81) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_3';
            $this->_renderView($data);
        }
        if ($MENU == 82) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_4';
            $this->_renderView($data);
        }
        if ($MENU == 83) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD Tamanio
            $where = '';
            $this->load->model("modelo", "Tamanio");
            $d_Tamanio = $this->Tamanio->getTamanio($where);
            $data['Tamanio'] = $d_Tamanio;
            $data['contentView'] = 'Admon_5';
            $this->_renderView($data);
        }
        if ($MENU == 84) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_6';
            $this->_renderView($data);
        }
        if ($MENU == 85) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_7';
            $this->_renderView($data);
        }
        if ($MENU == 9) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD tipo referenciado
            $where = '';
            $this->load->model("modelo", "RefTipo");
            $d_RefTipo = $this->RefTipo->getRefTipo($where);
            $data['RefTipo'] = $d_RefTipo;
            //Abriendo BD estatus
            $where = '';
            $this->load->model("modelo", "Estatus");
            $Estatus = $this->Estatus->getEstatusRef($where);
            $data['Estatus'] = $Estatus;
            //Abriendo BD responsables
            $where = '';
            $this->load->model("modelo", "Responsables");
            $d_responsables = $this->Responsables->getResponsable($where);
            $data['Responsables'] = $d_responsables;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Cobranza';
            $this->_renderView($data);
        }
        if ($MENU == 10) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Metas';
            $this->_renderView($data);
        }
        if ($MENU == 11) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "General");
            $USUARIOS = $this->General->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Directorio
            $Directorio = $this->General->getDirectorio();
            $data['Directorio'] = $Directorio;
            //Abriendo BD estatus
            $this->load->model("modelo", "RefEstatus");
            $RefEstatus = $this->RefEstatus->getEstatusRef();
            $data['RefEstatus'] = $RefEstatus;
            //Abriendo BD cliente
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            //Abriendo BD Categoria
            $this->load->model("modelo", "RefCategoria");
            $d_RefCategoria = $this->RefCategoria->getRefCategoria();
            $data['RefCategoria'] = $d_RefCategoria;
            //Abriendo BD referenciados
            $this->load->model("modelo", "Referenciados");
            $Referenciados = $this->Referenciados->getRefTipo2();
            $data['Referenciados'] = $Referenciados;
            //Gráfica
            $this->load->model("modelo", "Metas");
            $Metas = $this->Metas->getListaMetas();
            $data['Metas'] = $Metas;
            //Gráfica
            $this->load->model("modelo", "Muebles");
            $Muebles = $this->Muebles->getMuebles();
            $data['Muebles'] = $Muebles;
            //Abriendo BD transportes
            $this->load->model("modelo", "Transporte");
            $Transporte = $this->Transporte->getTransporteAll();
            $data['Unidad'] = $Transporte;
            //Abriendo BD transportes
            $this->load->model("modelo", "SolTrans");
            $SolTrans = $this->SolTrans->getSolicitudesALL2();
            $data['SolTrans'] = $SolTrans;
            //Abriendo BD Incapacidades
            $this->load->model("modelo", "Incapacidades");
            $Incapacidades = $this->Incapacidades->getIncSolALL();
            $data['Incapacidades'] = $Incapacidades;
            //Abriendo BD Proveedores
            $this->load->model("modelo", "MovProveedores");
            $MovProveedores = $this->MovProveedores->getMovimientosAll();
            $data['MovProveedores'] = $MovProveedores;
            //Abriendo BD Material
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialALL2();
            $data['Material'] = $Material;
            //Abriendo BD Material
            $this->load->model("modelo", "SalMaterial");
            $SalMaterial = $this->SalMaterial->getSalMatlesALL();
            $data['SalMaterial'] = $SalMaterial;
            //Abriendo BD Ingresos
            $where = '';
            $this->load->model("modelo", "Ingresos");
            $Ingresos = $this->Ingresos->getRecibosAll($where);
            $data['Ingresos'] = $Ingresos;
            //Abriendo BD Egresos
            $where = '';
            $this->load->model("modelo", "Egresos");
            $Egresos = $this->Egresos->getPagosAll($where);
            $data['Egresos'] = $Egresos;
            //Directorio
            $Estatus = $this->General->getEstatusI();
            $data['Estatus'] = $Estatus;
            $data['contentView'] = 'index';
            $this->_renderView($data);
        }
        if ($MENU == 12) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Recursos';
            $this->_renderView($data);
        }
        if ($MENU == 13) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_6';
            $this->_renderView($data);
        }
        if ($MENU == 14) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_4';
            $this->_renderView($data);
        }
        if ($MENU == 15) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Admon_7';
            $this->_renderView($data);
        }
        if ($MENU == 16) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Tecnologia';
            $this->_renderView($data);
        }
        if ($MENU == 17) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'B_Inmueble';
            $this->_renderView($data);
        }
        if ($MENU == 18) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Entrevistas';
            $this->_renderView($data);
        }
        if ($MENU == 19) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Compras';
            $this->_renderView($data);
        }
        if ($MENU == 20) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Viviendas';
            $this->_renderView($data);
        }
        if ($MENU == 21) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Comerc';
            $this->_renderView($data);
        }
        if ($MENU == 22) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'TramitesR';
            $this->_renderView($data);
        }
        if ($MENU == 23) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Contratistas';
            $this->_renderView($data);
        }
        if ($MENU == 24) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Cemento';
            $this->_renderView($data);
        }
        if ($MENU == 25) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Desarrollos';
            $this->_renderView($data);
        }
        if ($MENU == 'BorrarPP') {
            //Abriendo BD cliente
            $where = '';
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'BorrarPagos';
            $this->_renderView($data);
        }

        if ($MENU == 180) {
            $data['contentView'] = 'FueraServicio';
            $this->_renderView($data);
        }
    }

    public function cambiarInformacion() {
        //Abriendo BD Sub-cliente
        $idcliente = $_POST["idcliente"];
        $this->load->model("modelo", "cliente");
        $datos2 = $this->cliente->getInformacion($idcliente);
        //Abriendo BD estatus
        $where = '';
        $this->load->model("modelo", "estatus");
        $d_estatus = $this->estatus->getestatus2();

        foreach ($datos2 as $cliente2) {
            echo "RFC: ";
            ?>	<strong><?php echo $cliente2->RFC; ?> </strong><?php
            echo "</p>";
            echo "NOMBRE COMERCIAL: ";
            ?>	<strong><?php echo $cliente2->NombreC; ?> </strong><?php
            echo "</p>";
            echo "RAZ&Oacute;N SOCIAL: ";
            ?>	<strong ><?php echo $cliente2->RazonS; ?> </strong><?php
            echo "</p>";
            echo "REPRESENTANTE LEGAL: ";
            ?>	<strong ><?php echo $cliente2->RepresentanteL; ?> </strong><?php
            echo "</p>";
            echo "TEL&Eacute;FONO: ";
            ?>	<strong ><?php echo $cliente2->C_Lada . " " . $cliente2->C_Tel; ?> </strong><?php
            echo "</p>";
            echo "CORREO: ";
            ?>	<strong ><?php echo $cliente2->Correo; ?> </strong><?php
            echo "</p>";
            $r = 0;
            foreach ($d_estatus as $temporal) {
                if ($cliente2->Estatus == $temporal->id_estatus) {
                    $resultado = $temporal->dsc_estatus;
                    $r = 1;
                }if ($r == 0) {
                    $resultado = "-";
                }
            }
            echo "ESTATUS: ";
            ?>	<strong><?php echo $resultado; ?> </strong><?php
        }
    }

    public function CambiarEstatus() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Folio = $this->input->post('ID_cliente3');
        $Estatus = $this->input->post('Estatus');
        $datos = $this->datos->getestatus(
                $Folio, $Estatus
        );
        echo '<script>alert("Se ha cambiado el estatus correctamente")</script>';
        //Abriendo BD cliente
        $where = '';
        $this->load->model("modelo", "ID_cliente");
        $d_ID_cliente = $this->ID_cliente->getID_Cliente();
        $data['ID_cliente'] = $d_ID_cliente;
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        // View render
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'CalculoImpuestos';
        $this->_renderView($data);
    }

    public function CambiarOculto() {
        //Abriendo BD Sub-cliente
        $idcliente = $_POST["idcliente"];
        $this->load->model("modelo", "cliente");
        $datos2 = $this->cliente->getInformacion($idcliente);

        foreach ($datos2 as $cliente) {
            
        }
        ?>
        <input type="hidden" name="ID_cliente3" id="ID_cliente3"  value="<?php echo $cliente->Folio; ?>">	
        <?php
    }

    public function CambiarOculto2() {
        //Abriendo BD Sub-cliente
        $idcliente = $_POST["idcliente"];
        $this->load->model("modelo", "cliente");
        $datos2 = $this->cliente->getInformacion($idcliente);

        foreach ($datos2 as $cliente) {
            
        }
        ?>
        <input type="hidden" name="ID_cliente2" id="ID_cliente2"  value="<?php echo $cliente->Folio; ?>">	
        <?php
    }

    public function CambiarOculto3() {
        //Abriendo BD Sub-cliente
        $idcliente = $_POST["idcliente"];
        $this->load->model("modelo", "cliente");
        $datos2 = $this->cliente->getInformacion($idcliente);

        foreach ($datos2 as $cliente) {
            
        }
        ?>
        <input type="hidden" name="ID_cliente" id="ID_cliente"  value="<?php echo $cliente->Folio; ?>">	
        <?php
    }

    public function CambiarOculto4() {
        //Abriendo BD Sub-cliente
        $idcliente = $_POST["idcliente"];
        $this->load->model("modelo", "cliente");
        $datos2 = $this->cliente->getInformacion($idcliente);

        foreach ($datos2 as $cliente) {
            
        }
        ?>
        <input type="hidden" name="ID_cliente4" id="ID_cliente4"  value="<?php echo $cliente->Folio; ?>">	
        <?php
    }

    public function Impuestos() {
        $this->load->model("modelo", "datos");
        $cliente = $this->input->post('ID_cliente2');
        $Impuestos = $this->input->post('Impuestos');
        $this->load->model("modelo", "cliente");
        $datos2 = $this->cliente->getInformacion($cliente);
        $where = '';

        foreach ($datos2 as $cliente2) {
            
        }
        if ($cliente == 0 || !$cliente) {
            //Cargando usuarios
            $indiceuser = $this->input->post('user');
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente
            $this->load->model("modelo", "ID_cliente");
            $d_ID_cliente = $this->ID_cliente->getID_Cliente($where);
            $data['ID_cliente'] = $d_ID_cliente;
            // View render
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'CalculoImpuestos';
            $this->_renderView($data);
        }
        if ($Impuestos == 1) {
            //Cargando usuarios
            $indiceuser = $this->input->post('user');
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $this->load->model("modelo", "Declaraciones");
            $d_Declaraciones = $this->Declaraciones->getDeclaraciones($cliente);
            $data['Declaraciones'] = $d_Declaraciones;
            //Abriendo BD meses
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $length = strlen($cliente2->RFC);
            if ($length == 12) {
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'Administracion';
            } else {
                //Cargando usuarios
                $indiceuser = $this->input->post('user');
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['ID_cliente'] = $cliente;
                //Abriendo BD Cliente
                $this->load->model("modelo", "InfCliente");
                $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
                //Abriendo BD declaraciones
                $where = '';
                $this->load->model("modelo", "DeclaracionesR");
                $d_DeclaracionesR = $this->DeclaracionesR->getDeclaracionesR($cliente);
                $data['DeclaracionesR'] = $d_DeclaracionesR;
                //Abriendo BD meses
                $where = '';
                $this->load->model("modelo", "Meses");
                $Meses = $this->Meses->getMeses($where);
                $data['Meses'] = $Meses;
                //Abriendo BD Rama
                $this->load->model("modelo", "Rama");
                $d_Rama = $this->Rama->getRama();
                $data['Rama'] = $d_Rama;
                $data['InfCliente'] = $d_InfCliente;
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'Administracion_2';
            }
            $this->_renderView($data);
        }
        if ($Impuestos == 2) {
            //Cargando usuarios
            $indiceuser = $this->input->post('user');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $this->load->model("modelo", "Declaraciones");
            $d_Declaraciones = $this->Declaraciones->getDeclaracionesIVAR21($cliente);
            $data['DeclaracionesIVAR21'] = $d_Declaraciones;
            //Abriendo BD meses
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $length = strlen($cliente2->RFC);
            if ($length == 12) {
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'IVA_R21';
            } else {
                //Cargando usuarios
                $indiceuser = $this->input->post('user');
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['ID_cliente'] = $cliente;
                //Abriendo BD Cliente
                $this->load->model("modelo", "InfCliente");
                $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
                //Abriendo BD declaraciones
                $where = '';
                $this->load->model("modelo", "DeclaracionesR");
                $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesIVAR24($cliente);
                $data['DeclaracionesIVAR21'] = $d_Declaraciones;
                //Abriendo BD meses
                $where = '';
                $this->load->model("modelo", "Meses");
                $Meses = $this->Meses->getMeses($where);
                $data['Meses'] = $Meses;
                //Abriendo BD Rama
                $this->load->model("modelo", "Rama");
                $d_Rama = $this->Rama->getRama();
                $data['Rama'] = $d_Rama;
                $data['InfCliente'] = $d_InfCliente;
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'IVA_R21_2';
            }
            $this->_renderView($data);
        }
        if ($Impuestos == 3) {
            //Cargando usuarios
            $indiceuser = $this->input->post('user');
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $this->load->model("modelo", "Declaraciones");
            $d_Declaraciones = $this->Declaraciones->getDeclaracionesCG($cliente);
            $data['DeclaracionesCG'] = $d_Declaraciones;
            //Abriendo BD meses
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Cedular_G';
            $this->_renderView($data);
        }
        if ($Impuestos == 4) {
            //Cargando usuarios**
            $indiceuser = $this->input->post('user');
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $this->load->model("modelo", "Declaraciones");
            $d_Declaraciones = $this->Declaraciones->getDeclaracionesSN($cliente);
            $data['DeclaracionesSN'] = $d_Declaraciones;
            //Abriendo BD meses
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'S_Nomina';
            $this->_renderView($data);
        }
        if ($Impuestos == 5) {
            //Cargando usuarios
            $indiceuser = $this->input->post('user');
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD declaraciones
            $this->load->model("modelo", "DeclaracionesHo");
            $d_Declaraciones = $this->DeclaracionesHo->getDeclaracionesHo($cliente);
            $data['DeclaracionesHo'] = $d_Declaraciones;
            //Abriendo BD meses
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Hospedaje';
            $this->_renderView($data);
        }
    }

    public function Notificar() {
        //Cargando usuarios
        $where = '';
        $indiceuser = $this->input->post('user');
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo el  id del Cliente
        $this->load->model("modelo", "datos");
        $cliente = $this->input->post('ID_cliente4');
        //Abriendo BD Cliente
        $this->load->model("modelo", "InfCliente");
        $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
        $data['InfCliente'] = $d_InfCliente;
        //Abriendo BD declaraciones
        $where = '';
        $this->load->model("modelo", "Declaraciones");
        $d_Declaraciones = $this->Declaraciones->getTotalesDeclaracionesID2($cliente);
        $data['DeclaracionesSN'] = $d_Declaraciones;
        //Abriendo BD meses
        $where = '';
        $this->load->model("modelo", "Meses");
        $Meses = $this->Meses->getMeses($where);
        $data['Meses'] = $Meses;
        //Abriendo BD Rama
        $this->load->model("modelo", "Rama");
        $d_Rama = $this->Rama->getRama();
        $data['Rama'] = $d_Rama;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Notificar';
        $this->_renderView($data);
    }

    public function ubicacion() {
        $this->load->model("modelo", "datos");
        $ESTATUS = $this->input->get('ID');
        $cliente = $this->input->get('Cl');
        if ($ESTATUS == 0) {
            $data['contentView'] = 'NvoUsuario';
            $this->_renderView($data);
        }
        if ($ESTATUS == 1) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "Declaraciones");
            $d_Declaraciones = $this->Declaraciones->getDeclaraciones($cliente);
            $data['Declaraciones'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion';
            $this->_renderView($data);
        }
        if ($ESTATUS == 2) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_DeclaracionesR = $this->DeclaracionesR->getDeclaracionesR($cliente);
            $data['DeclaracionesR'] = $d_DeclaracionesR;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_2';
            $this->_renderView($data);
        }
        if ($ESTATUS == 3) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_DeclaracionesR = $this->DeclaracionesR->getDeclaracionesR15($cliente);
            $data['DeclaracionesR15'] = $d_DeclaracionesR;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_3';
            $this->_renderView($data);
        }
        if ($ESTATUS == 4) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_DeclaracionesR = $this->DeclaracionesR->getDeclaracionesR14($cliente);
            $data['DeclaracionesR14'] = $d_DeclaracionesR;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_4';
            $this->_renderView($data);
        }
        if ($ESTATUS == 5) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_DeclaracionesR = $this->DeclaracionesR->getDeclaracionesR12($cliente);
            $data['DeclaracionesR12'] = $d_DeclaracionesR;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_5';
            $this->_renderView($data);
        }
        if ($ESTATUS == 6) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesR7($cliente);
            $data['DeclaracionesR7'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_7';
            $this->_renderView($data);
        }
        if ($ESTATUS == 61) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesR97($cliente);
            $data['DeclaracionesR97'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_8';
            $this->_renderView($data);
        }
        if ($ESTATUS == 62) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR10");
            $DeclaracionesR10 = $this->DeclaracionesR10->getDeclaracionesR10($cliente);
            $data['DeclaracionesR10'] = $DeclaracionesR10;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Administracion_9';
            $this->_renderView($data);
        }
        if ($ESTATUS == 7) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesIVAR24($cliente);
            $data['DeclaracionesIVAR24'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'IVA_R24';
            $this->_renderView($data);
        }
        if ($ESTATUS == 8) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesIVAR21($cliente);
            $data['DeclaracionesIVAR21'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'IVA_R21';
            $this->_renderView($data);
        }
        if ($ESTATUS == 81) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesIVAR24($cliente);
            $data['DeclaracionesIVAR21'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'IVA_R21_2';
            $this->_renderView($data);
        }
        if ($ESTATUS == 9) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesCA($cliente);
            $data['DeclaracionesCA'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Cedular_A';
            $this->_renderView($data);
        }
        if ($ESTATUS == 10) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesCH($cliente);
            $data['DeclaracionesCH'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Cedular_H';
            $this->_renderView($data);
        }
        if ($ESTATUS == 11) {
            //Cargando usuarios
            $indiceuser = $this->input->get('i');
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['ID_cliente'] = $cliente;
            //Abriendo BD Cliente
            $this->load->model("modelo", "InfCliente");
            $d_InfCliente = $this->InfCliente->getInfCliente($cliente);
            //Abriendo BD declaraciones
            $where = '';
            $this->load->model("modelo", "DeclaracionesR");
            $d_Declaraciones = $this->DeclaracionesR->getDeclaracionesCG($cliente);
            $data['DeclaracionesCG'] = $d_Declaraciones;
            //Abriendo BD meses
            $where = '';
            $this->load->model("modelo", "Meses");
            $Meses = $this->Meses->getMeses($where);
            $data['Meses'] = $Meses;
            //Abriendo BD Rama
            $this->load->model("modelo", "Rama");
            $d_Rama = $this->Rama->getRama();
            $data['Rama'] = $d_Rama;
            $data['InfCliente'] = $d_InfCliente;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Cedular_G';
            $this->_renderView($data);
        }
    }

//******************************Hospedaje
//funciones Impuesto sobre hospedaje 

    public function Hospedj() {
        $Importe = $_POST["Importe"];
        $Actualizaciones = $_POST["Actualizaciones"];
        $Recargos = $_POST["Recargos"];
        $Importe2 = $Importe * 0.02;
        $resultado = $Importe2 + $Actualizaciones + $Recargos;

        $resultado = ceil($resultado);
        ?>
        <input  class="form-control" name="Hospedaje" id="Hospedaje" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Hospedj_2() {
        $Importe = $_POST["Importe"];
        $Importe2 = $Importe * 0.02;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $Importe2 ?>" readonly="readonly">
        <br />
        <?php
    }

    public function C_Actualizaciones() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Actualizaciones" id="Actualizaciones" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_Recargos() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Recargos" id="Recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//***************************************
//funciones Impuesto sobre la nomina    

    public function SNomina() {
        $Importe = $_POST["Importe"];
        $Actualizaciones = $_POST["Actualizaciones"];
        $Recargos = $_POST["Recargos"];
        $Importe2 = $Importe * 0.02;
        $resultado = $Importe2 + $Actualizaciones + $Recargos;
        $resultado = ceil($resultado);
        ?>
        <input  class="form-control" name="S_nomina" id="S_nomina" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function SNomina_2() {
        $Importe = $_POST["Importe"];
        $Importe2 = $Importe * 0.02;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $Importe2 ?>" readonly="readonly">
        <br />
        <?php
    }

    public function C_ActualizacionesNomina() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Actualizaciones" id="Actualizaciones" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_RecargosNomina() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Recargos" id="Recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//*************************************Funciones Cedular G
//funciones Impuesto Cedular  
    public function Cedular_Op1() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $resultado = $Ingresos - $Deducciones - $Perdidas;
        ?>
        <input  class="form-control" name="Base" id="Base" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_Op2() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = $temporal * 0.02;
        ?>
        <input  class="form-control" name="ImpRet" id="ImpRet" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_Op3() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = ($temporal * 0.02) - $PagoProv;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_Op4() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = ($temporal * 0.02) - $PagoProv - $Imp_pagado;
        ?>
        <input  class="form-control" name="ACargo2" id="ACargo2" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_C1() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = ($temporal * 0.02) - $PagoProv - $Imp_pagado;
        ?>
        <input  class="form-control" name="Imp_Cedular" id="Imp_Cedular" value="<?php echo $resultado ?>"  type="number" step="0.01" required>
        <br />
        <?php
    }

    public function Cedular_Op5() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $Imp_Cedular = ($temporal * 0.02) - $PagoProv - $Imp_pagado;

        $resultado = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        ?>
        <input  class="form-control" name="SubTotal" id="SubTotal" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_Op6() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $Imp_Cedular = ($temporal * 0.02) - $PagoProv - $Imp_pagado;

        $temporal = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        $redondeado = ceil($temporal);
        $resultado = round($redondeado - $temporal, 2);
        ?>
        <input  class="form-control" name="Redondeo" id="Redondeo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_Op7() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $Imp_Cedular = ($temporal * 0.02) - $PagoProv - $Imp_pagado;

        $temporal = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        $redondeado = ceil($temporal);
        $resultado = $redondeado;
        ?>
        <input  class="form-control" name="Total_Impuesto" id="Total_Impuesto" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

//*****************************Cedular A
    public function Cedular_OpA8() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = ($temporal * 0.02) - $PagoProv - $TotalRetenido;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpA9() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = ($temporal * 0.02) - $PagoProv - $Imp_pagado - $TotalRetenido;
        ?>
        <input  class="form-control" name="ACargo2" id="ACargo2" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpAC9() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $resultado = ($temporal * 0.02) - $PagoProv - $Imp_pagado - $TotalRetenido;
        ?>
        <input  class="form-control" name="Imp_Cedular" id="Imp_Cedular" value="<?php echo $resultado ?>" required>
        <br />
        <?php
    }

    public function Cedular_OpA5() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $Imp_Cedular = ($temporal * 0.02) - $PagoProv - $Imp_pagado - $TotalRetenido;

        $resultado = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        ?>
        <input  class="form-control" name="SubTotal" id="SubTotal" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpA6() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $Imp_Cedular = ($temporal * 0.02) - $PagoProv - $Imp_pagado - $TotalRetenido;

        $temporal = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        $redondeado = ceil($temporal);
        $resultado = round($redondeado - $temporal, 2);
        ?>
        <input  class="form-control" name="Redondeo" id="Redondeo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpA7() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $Perdidas = $_POST["Perdidas"];
        $PagoProv = $_POST["PagoProv"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones - $Perdidas;
        $Imp_Cedular = ($temporal * 0.02) - $PagoProv - $Imp_pagado - $TotalRetenido;

        $temporal = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        $redondeado = ceil($temporal);
        $resultado = $redondeado;
        ?>
        <input  class="form-control" name="Total_Impuesto" id="Total_Impuesto" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

//****************************Cedular H
    public function Cedular_OpH1() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $resultado = $Ingresos - $Deducciones;
        ?>
        <input  class="form-control" name="Base" id="Base" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpH2() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $temporal = $Ingresos - $Deducciones;
        $resultado = $temporal * 0.02;
        ?>
        <input  class="form-control" name="ImpRet" id="ImpRet" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpH3() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $temporal = $Ingresos - $Deducciones;
        $resultado = ($temporal * 0.02) - $TotalRetenido;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpH4() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones;
        $resultado = ($temporal * 0.02) - $TotalRetenido - $Imp_pagado;
        ?>
        <input  class="form-control" name="ACargo2" id="ACargo2" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpHC4() {
        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones;
        $resultado = ($temporal * 0.02) - $TotalRetenido - $Imp_pagado;
        ?>
        <input  class="form-control" name="Imp_Cedular" id="Imp_Cedular" value="<?php echo $resultado ?>" required>
        <br />
        <?php
    }

    public function Cedular_OpH5() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones;
        $Imp_Cedular = ($temporal * 0.02) - $TotalRetenido - $Imp_pagado;

        $resultado = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        ?>
        <input  class="form-control" name="SubTotal" id="SubTotal" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpH6() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones;
        $Imp_Cedular = ($temporal * 0.02) - $TotalRetenido - $Imp_pagado;

        $temporal = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        $redondeado = ceil($temporal);
        $resultado = round($redondeado - $temporal, 2);
        ?>
        <input  class="form-control" name="Redondeo" id="Redondeo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Cedular_OpH7() {
        //$Imp_Cedular= $_POST["Imp_Cedular"];
        $Actualizacion = $_POST["Actualizacion"];
        $Recargos = $_POST["Recargos"];
        $Multa_Pagos = $_POST["Multa_Pagos"];
        $Compensacion = $_POST["Compensacion"];

        $Ingresos = $_POST["Ingresos"];
        $Deducciones = $_POST["Deducciones"];
        $TotalRetenido = $_POST["TotalRetenido"];
        $Imp_pagado = $_POST["Imp_pagado"];
        $temporal = $Ingresos - $Deducciones;
        $Imp_Cedular = ($temporal * 0.02) - $TotalRetenido - $Imp_pagado;

        $temporal = $Imp_Cedular + $Actualizacion + $Recargos + $Multa_Pagos - $Compensacion;
        $redondeado = ceil($temporal);
        $resultado = $redondeado;
        ?>
        <input  class="form-control" name="Total_Impuesto" id="Total_Impuesto" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

//****************************************funciones R21 IVA

    public function SumaIngresos() {
        $Ingresos = $_POST["Ingresos"];
        $Otrosingresos = $_POST["Otrosingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        //$Ingresosnocobrados= $_POST["Ingresosnocobrados"];
        $resultado = $Ingresos + $Otrosingresos + $Ingresoscobrados;
        ?>
        <input class="form-control" name="TotalIngresos" id="TotalIngresos" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVAtrasladado() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        //$Ingresosnocobrados= $_POST["Ingresosnocobrados"];
        $suma = $Ingresos;
        $resultado = $suma * 0.16;
        ?>
        <input class="form-control" name="IVAtrasladado" id="IVAtrasladado" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function TotalGastos() {
        $GastosconIVA = $_POST["GastosconIVA"];
        $GastossinIVA = $_POST["GastossinIVA"];
        $resultado = $GastosconIVA + $GastossinIVA;
        ?>      
        <input class="form-control" name="Totalgastos" id="Totalgastos" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVAacreditable() {
        $GastosconIVA = $_POST["GastosconIVA"];
        $resultado = $GastosconIVA * 0.16;
        ?>      
        <input class="form-control" name="ivaacreditable" id="ivaacreditable" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVAFavor() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $GastosconIVA = $_POST["GastosconIVA"];
        //$ivaacreditable= $_POST["ivaacreditable"];
        $suma = $Ingresos + $Ingresoscobrados;
        $resultado1 = $suma * 0.16;
        $resultado2 = $GastosconIVA * 0.16;

        if ($resultado1 < $resultado2) {
            $resultado = $resultado2 - $resultado1;
        } else
            $resultado = 0;
        ?>
        <input class="form-control" name="IVAfavor" id="IVAfavor" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVAPagar() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $GastosconIVA = $_POST["GastosconIVA"];
        //$ivaacreditable= $_POST["ivaacreditable"];
        $suma = $Ingresos + $Ingresoscobrados;
        $resultado1 = $suma * 0.16;
        $resultado2 = $GastosconIVA * 0.16;

        if ($resultado1 > $resultado2) {
            $respuesta = $resultado1 - $resultado2;
        } else
            $respuesta = 0;
        ?>
        <input class="form-control" name="IVApagar" id="IVApagar" value="<?php echo $respuesta ?>" readonly="readonly">
        <br />
        <?php
    }

    public function Valor_actos16() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $Ingresosnocobrados = $_POST["Ingresosnocobrados"];
        $resultado = $Ingresos + $Ingresoscobrados - $Ingresosnocobrados;
        ?>
        <input class="form-control" name="Valor_actos16" id="Valor_actos16" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function PA_Cargo() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $Ingresosnocobrados = $_POST["Ingresosnocobrados"];
        $ivaacreditable = $_POST["ivaacreditable"];
        $Acredit_Saldo_favor = $_POST["Acredit_Saldo_favor"];
        $suma = $Ingresos + $Ingresoscobrados - $Ingresosnocobrados;
        $resultado1 = $suma * 0.16;
        if ($resultado1 < $ivaacreditable) {
            $resultado = $ivaacreditable - $resultado1;
        } else
            $resultado = 0;

        if ($resultado1 > $ivaacreditable) {
            $respuesta = $ivaacreditable - $resultado1 - $resultado;
            if ($respuesta < 0) {
                $respuesta = abs($respuesta);
            }
        } else
            $respuesta = 0;

        $resp = $respuesta - $Acredit_Saldo_favor;
        ?>
        <input class="form-control" name="PA_Cargo" id="PA_Cargo" value="<?php echo $resp ?>" readonly="readonly">
        <br />
        <?php
    }

    public function CantPagar21() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $Ingresosnocobrados = $_POST["Ingresosnocobrados"];
        $ivaacreditable = $_POST["ivaacreditable"];
        $Acredit_Saldo_favor = $_POST["Acredit_Saldo_favor"];
        $Pparte_Actualizada = $_POST["Pparte_Actualizada"];
        $PParte_recargos = $_POST["PParte_recargos"];
        $suma = $Ingresos + $Ingresoscobrados - $Ingresosnocobrados;
        $resultado1 = $suma * 0.16;
        if ($resultado1 < $ivaacreditable) {
            $resultado = $ivaacreditable - $resultado1;
        } else
            $resultado = 0;

        if ($resultado1 > $ivaacreditable) {
            $respuesta = $ivaacreditable - $resultado1 - $resultado;
            if ($respuesta < 0) {
                $respuesta = abs($respuesta);
            }
        } else
            $respuesta = 0;

        $resp = $respuesta - $Acredit_Saldo_favor + $PParte_recargos + $Pparte_Actualizada;
        ?>
        <input class="form-control" name="PTotal_contribuciones" id="PTotal_contribuciones" value="<?php echo $resp ?>" readonly="readonly">
        <br />
        <?php
    }

    public function CantPagar22() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $Ingresosnocobrados = $_POST["Ingresosnocobrados"];
        $ivaacreditable = $_POST["ivaacreditable"];
        $Acredit_Saldo_favor = $_POST["Acredit_Saldo_favor"];
        $Pparte_Actualizada = $_POST["Pparte_Actualizada"];
        $PParte_recargos = $_POST["PParte_recargos"];
        $suma = $Ingresos + $Ingresoscobrados - $Ingresosnocobrados;
        $resultado1 = $suma * 0.16;
        if ($resultado1 < $ivaacreditable) {
            $resultado = $ivaacreditable - $resultado1;
        } else
            $resultado = 0;

        if ($resultado1 > $ivaacreditable) {
            $respuesta = $ivaacreditable - $resultado1 - $resultado;
            if ($respuesta < 0) {
                $respuesta = abs($respuesta);
            }
        } else
            $respuesta = 0;

        $resp = $respuesta - $Acredit_Saldo_favor + $PParte_recargos + $Pparte_Actualizada;
        ?>
        <input class="form-control" name="PCant_cargo" id="PCant_cargo" value="<?php echo $resp ?>" readonly="readonly">
        <br />
        <?php
    }

    public function CantPagar23() {
        $Ingresos = $_POST["Ingresos"];
        $Ingresoscobrados = $_POST["Ingresoscobrados"];
        $Ingresosnocobrados = $_POST["Ingresosnocobrados"];
        $ivaacreditable = $_POST["ivaacreditable"];
        $Acredit_Saldo_favor = $_POST["Acredit_Saldo_favor"];
        $Pparte_Actualizada = $_POST["Pparte_Actualizada"];
        $PParte_recargos = $_POST["PParte_recargos"];
        $suma = $Ingresos + $Ingresoscobrados - $Ingresosnocobrados;
        $resultado1 = $suma * 0.16;
        if ($resultado1 < $ivaacreditable) {
            $resultado = $ivaacreditable - $resultado1;
        } else
            $resultado = 0;

        if ($resultado1 > $ivaacreditable) {
            $respuesta = $ivaacreditable - $resultado1 - $resultado;
            if ($respuesta < 0) {
                $respuesta = abs($respuesta);
            }
        } else
            $respuesta = 0;

        $resp = $respuesta - $Acredit_Saldo_favor + $PParte_recargos + $Pparte_Actualizada;

        $resp = ceil($resp);
        ?>
        <input class="form-control" name="PCant_pagar" id="PCant_pagar" value="<?php echo $resp ?>" readonly="readonly">
        <br />
        <?php
    }

    public function C_Actualizaciones2() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Pparte_Actualizada" id="Pparte_Actualizada" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_Recargos2() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="PParte_recargos" id="PParte_recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//************************************Funciones IVA r21_2


    public function IVA_R21_Op1() {
        $Imp_Cobrado = $_POST["Imp_Cobrado"];
        $Imp_Pagado = $_POST["Imp_Pagado"];
        $Imp_Retenido = $_POST["Imp_Retenido"];
        $temporal = $Imp_Cobrado - $Imp_Pagado - $Imp_Retenido;
        if ($temporal >= 0) {
            $resultado = $temporal;
        } else {
            $resultado = 0;
        }
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVA_R21_Op2() {
        $Imp_Cobrado = $_POST["Imp_Cobrado"];
        $Imp_Pagado = $_POST["Imp_Pagado"];
        $Imp_Retenido = $_POST["Imp_Retenido"];
        $temporal = $Imp_Cobrado - $Imp_Pagado - $Imp_Retenido;
        if ($temporal >= 0) {
            $resultado = 0;
        } else {
            $resultado = abs($temporal);
        }
        ?>
        <input  class="form-control" name="AFavor" id="AFavor" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVA_R21_Op3() {
        $Imp_Cobrado = $_POST["Imp_Cobrado"];
        $Imp_Pagado = $_POST["Imp_Pagado"];
        $Imp_Retenido = $_POST["Imp_Retenido"];
        $Parte_Act = $_POST["Parte_Act"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];
        $temporal = $Imp_Cobrado - $Imp_Pagado - $Imp_Retenido;
        if ($temporal >= 0) {
            $resultado = $temporal;
        } else {
            $resultado = 0;
        }

        $resultado = $resultado + $Parte_Act + $Recargos + $Multas;
        ?>
        <input  class="form-control" name="Total_Cont" id="Total_Cont" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVA_R21_Op4() {
        $Imp_Cobrado = $_POST["Imp_Cobrado"];
        $Imp_Pagado = $_POST["Imp_Pagado"];
        $Imp_Retenido = $_POST["Imp_Retenido"];
        $Parte_Act = $_POST["Parte_Act"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];
        $Disminucion_Cont = $_POST["Disminucion_Cont"];
        $Pagado_Ant = $_POST["Pagado_Ant"];
        $Imp_UltHoras = $_POST["Imp_UltHoras"];
        $temporal = $Imp_Cobrado - $Imp_Pagado - $Imp_Retenido;
        if ($temporal >= 0) {
            $resultado = $temporal;
        } else {
            $resultado = 0;
        }

        $resultado = $resultado + $Parte_Act + $Recargos + $Multas - $Disminucion_Cont - $Pagado_Ant - $Imp_UltHoras;
        if ($resultado < 0) {
            $resultado = 0;
        }

        $resultado = ceil($resultado);
        ?>
        <input  class="form-control" name="Cant_Pagar" id="Cant_Pagar" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function IVA_R21_Op5() {
        $Imp_Cobrado = $_POST["Imp_Cobrado"];
        $Imp_Pagado = $_POST["Imp_Pagado"];
        $Imp_Retenido = $_POST["Imp_Retenido"];
        $Parte_Act = $_POST["Parte_Act"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];
        $Disminucion_Cont = $_POST["Disminucion_Cont"];
        $Pagado_Ant = $_POST["Pagado_Ant"];
        $Imp_UltHoras = $_POST["Imp_UltHoras"];
        $temporal = $Imp_Cobrado - $Imp_Pagado - $Imp_Retenido;
        if ($temporal >= 0) {
            $resultado = $temporal;
        } else {
            $resultado = 0;
        }

        $resultado = $resultado + $Parte_Act + $Recargos + $Multas - $Disminucion_Cont - $Pagado_Ant - $Imp_UltHoras;
        if ($resultado >= 0) {
            $resultado = 0;
        } else {
            $resultado = abs($resultado);
        }
        ?>
        <input  class="form-control" name="Cant_Favor" id="Cant_Favor" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

//***********************************Funciones ISR R1

    public function Suma() {
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        ?>
        <input class="form-control" name="Total" id="Total" value="<?php echo $suma ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

    public function Utilidad() {
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        $Coeficiente = $_POST["coeficiente"];
        $Utilidad = $suma * $Coeficiente;
        ?>
        <input  class="form-control" name="Utilidad" id="Utilidad" value="<?php echo $Utilidad ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

    public function Base() {
        $perdidas = $_POST["perdidas"];
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        $Coeficiente = $_POST["coeficiente"];
        $utilidad = $suma * $Coeficiente;
        if ($utilidad > $perdidas) {
            $Base = $utilidad - $perdidas;
        } else {
            $Base = 0;
        }
        ?>
        <input  class="form-control" name="Base" id="Base" value="<?php echo $Base ?>" readonly="readonly">
        <?php
    }

    public function ISRcausado() {
        $perdidas = $_POST["perdidas"];
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        $Coeficiente = $_POST["coeficiente"];
        $utilidad = $suma * $Coeficiente;
        if ($utilidad > $perdidas) {
            $Base = $utilidad - $perdidas;
        } else {
            $Base = 0;
        }
        $ISRcausado = $Base * .3
        ?>
        <input  class="form-control" name="ISRcausado" id="ISRcausado" value="<?php echo $ISRcausado ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

    public function ImpuestoP() {
        $perdidas = $_POST["perdidas"];
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        $Coeficiente = $_POST["coeficiente"];
        $utilidad = $suma * $Coeficiente;
        if ($utilidad > $perdidas) {
            $Base = $utilidad - $perdidas;
        } else {
            $Base = 0;
        }
        $ISRcausado = $Base * .3
        ?>
        <input  class="form-control" name="ImpuestoP" id="ImpuestoP" value="<?php echo $ISRcausado ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

    public function ImpuestoCargo() {
        $perdidas = $_POST["perdidas"];
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        $Coeficiente = $_POST["coeficiente"];
        $Pagos = $_POST["Pagos"];
        $ImpuestoB = $_POST["ImpuestoB"];
        $utilidad = $suma * $Coeficiente;
        if ($utilidad > $perdidas) {
            $Base = $utilidad - $perdidas;
        } else {
            $Base = 0;
        }
        $ISRcausado = $Base * .3;

        $ImpuestoCargo = $ISRcausado - $Pagos - $ImpuestoB;
        ?>
        <input  class="form-control" name="ImpuestoCargo" id="ImpuestoCargo" value="<?php echo $ImpuestoCargo ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

    public function CantPagar() {
        $perdidas = $_POST["perdidas"];
        $ingresosAnt = $_POST["suma1"];
        $ingresosAct = $_POST["suma2"];
        $suma = $ingresosAnt + $ingresosAct;
        $Coeficiente = $_POST["coeficiente"];
        $Pagos = $_POST["Pagos"];
        $ImpuestoB = $_POST["ImpuestoB"];
        $utilidad = $suma * $Coeficiente;
        if ($utilidad > $perdidas) {
            $Base = $utilidad - $perdidas;
        } else {
            $Base = 0;
        }
        $ISRcausado = $Base * .3;

        $ImpuestoCargo = $ISRcausado - $Pagos - $ImpuestoB;

        $ParteAct = $_POST["parteact"];
        $IEPS = $_POST["ieps"];
        $ParteRecargos = $_POST["parterecargos"];
        $Disel = $_POST["disel"];
        $subsidioEmp = $_POST["subsidioEmp"];
        $IDE = $_POST["ide"];
        $S1 = $ImpuestoCargo + $ParteAct + $ParteRecargos;
        $Totalapp = $IEPS + $Disel + $subsidioEmp + $IDE;
        if ($S1 > $Totalapp) {
            $St = $S1 - $Totalapp;
        } else {
            $St = 0;
        }

        $St = ceil($St);
        ?>
        <input  class="form-control" name="CantPagar" id="CantPagar" value="<?php echo $St ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

    public function TotalApp() {
        $IEPS = $_POST["ieps"];
        $Disel = $_POST["disel"];
        $subsidioEmp = $_POST["subsidioEmp"];
        $IDE = $_POST["ide"];
        $Totalapp = $IEPS + $Disel + $subsidioEmp + $IDE;
        ?>
        <input  class="form-control" name="TotalApp" id="TotalApp" value="<?php echo $Totalapp ?>" readonly="readonly">
        <br>
        <br>
        <?php
    }

//*************************************funciones administracion 2 

    public function Cargo_R1() {
        $Cargo_R = $_POST["Cargo_R"];
        $ParteAct_R = $_POST["ParteAct_R"];
        $ParteRec_R = $_POST["ParteRec_R"];
        $Suma = $Cargo_R + $ParteAct_R + $ParteRec_R;
        ?>
        <input  class="form-control" name="TotalCont_R" id="TotalCont_R" value="<?php echo $Suma ?>" readonly="readonly">
        <br>
        <?php
    }

    public function CantCargo_R() {
        $Cargo_R = $_POST["Cargo_R"];
        $ParteAct_R = $_POST["ParteAct_R"];
        $ParteRec_R = $_POST["ParteRec_R"];
        $TotalCont_R = $Cargo_R + $ParteAct_R + $ParteRec_R;
        $IEPS_R = $_POST["IEPS_R"];
        $Disel_R = $_POST["Disel_R"];
        $OtrosEst_R = $_POST["OtrosEst_R"];
        $TESOFE_R = $_POST["TESOFE_R"];
        $CreditoSal_R = $_POST["CreditoSal_R"];
        $DiselMinero_R = $_POST["DiselMinero_R"];
        $Subsidio_R = $_POST["Subsidio_R"];
        $IDE_R = $_POST["IDE_R"];
        $Compensaciones_R = $_POST["Compensaciones_R"];
        $TotalApp_R = $IEPS_R + $Disel_R + $OtrosEst_R + $TESOFE_R + $CreditoSal_R + $DiselMinero_R + $Subsidio_R + $IDE_R + $Compensaciones_R;
        if ($TotalCont_R > $TotalApp_R) {
            $Resta = $TotalCont_R - $TotalApp_R;

            $Resta = ceil($Resta);
            ?>
            <input  class="form-control" name="CantCargo_R" id="CantCargo_R" value="<?php echo $Resta ?>" readonly="readonly">
            <br>
            <?php
        } else {
            $Resta = 0;
            ?>
            <input  class="form-control" name="CantCargo_R" id="CantCargo_R" value="<?php echo $Resta ?>" readonly="readonly">
            <br>
            <?php
        }
    }

    public function TotalApp_R1() {
        $IEPS_R = $_POST["IEPS_R"];
        $Disel_R = $_POST["Disel_R"];
        $OtrosEst_R = $_POST["OtrosEst_R"];
        $TESOFE_R = $_POST["TESOFE_R"];
        $CreditoSal_R = $_POST["CreditoSal_R"];
        $DiselMinero_R = $_POST["DiselMinero_R"];
        $Subsidio_R = $_POST["Subsidio_R"];
        $IDE_R = $_POST["IDE_R"];
        $Compensaciones_R = $_POST["Compensaciones_R"];
        $Suma = $IEPS_R + $Disel_R + $OtrosEst_R + $TESOFE_R + $CreditoSal_R + $DiselMinero_R + $Subsidio_R + $IDE_R + $Compensaciones_R;
        ?>
        <input  class="form-control" name="TotalApp_R" id="TotalApp_R" value="<?php echo $Suma ?>" readonly="readonly">
        <br>
        <?php
    }

//*************************Funciones ISR R7
    public function ISR_R7_Op0() {
        $meses = $_POST["meses"];
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $GastosAnt = $_POST["GastosAnt"];
        $GastosAct = $_POST["GastosAct"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();
        $base = $Suma_Ing + $Ing - $GastosAnt - $GastosAct;
        $resultado = '-';

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado = $resultado1 + $Limites->Cuota;
            }
        }
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R7_Op1() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $resultado = $Suma_Ing + $Ing;
        ?>
        <input  class="form-control" name="Total_Ing" id="Total_Ing" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R7_Op2() {
        $GastosAnt = $_POST["GastosAnt"];
        $GastosAct = $_POST["GastosAct"];
        $resultado = $GastosAnt + $GastosAct;
        ?>
        <input  class="form-control" name="TotalGastos" id="TotalGastos" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R7_Op3() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $resultado = $ACargo + $ParteAct + $Recargos;
        ?>
        <input  class="form-control" name="TotalGastos" id="TotalGastos" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R7_Op4() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];

        $Credito_sal = $_POST["Credito_sal"];
        $Sub_Empleo = $_POST["Sub_Empleo"];
        $Imp_Depositos = $_POST["Imp_Depositos"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Diesel = $_POST["Diesel"];
        $Carreteras = $_POST["Carreteras"];
        $Otros = $_POST["Otros"];
        $Diesel_Marino = $_POST["Diesel_Marino"];

        $Monto_Ant = $_POST["Monto_Ant"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];
        $Total_Cont = $ACargo + $ParteAct + $Recargos;
        $deducciones = $Credito_sal + $Sub_Empleo + $Imp_Depositos + $Compensaciones + $IEPS + $Diesel + $Carreteras + $Otros + $Diesel_Marino;

        $resultado = $Total_Cont - $deducciones - $Monto_Ant - $Imp_UltHrs;

        if ($resultado < 0) {
            $resultado = abs($resultado);
        } else {
            $resultado = 0;
        }
        ?>
        <input  class="form-control" name="CFavor" id="CFavor" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R7_Op5() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];

        $Credito_sal = $_POST["Credito_sal"];
        $Sub_Empleo = $_POST["Sub_Empleo"];
        $Imp_Depositos = $_POST["Imp_Depositos"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Diesel = $_POST["Diesel"];
        $Carreteras = $_POST["Carreteras"];
        $Otros = $_POST["Otros"];
        $Diesel_Marino = $_POST["Diesel_Marino"];

        $Monto_Ant = $_POST["Monto_Ant"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];
        $Total_Cont = $ACargo + $ParteAct + $Recargos;
        $deducciones = $Credito_sal + $Sub_Empleo + $Imp_Depositos + $Compensaciones + $IEPS + $Diesel + $Carreteras + $Otros + $Diesel_Marino;

        $resultado = $Total_Cont - $deducciones - $Monto_Ant - $Imp_UltHrs;

        if ($resultado >= 0) {
            $resultado = abs($resultado);
        } else {
            $resultado = 0;
        }

        $resultado = ceil($resultado);
        ?>
        <input  class="form-control" name="CPagar" id="CPagar" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function C_ActualizacionesR14() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="ParteAct" id="ParteAct" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_RecargosR14() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Recargos" id="Recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//*******************Funciones ISR r12
    public function C_ActualizacionesR12() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="ParteAct_R" id="ParteAct_R" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_RecargosR12() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="ParteRec_R" id="ParteRec_R" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//******************Funciones isr r7
    public function C_ActualizacionesR7() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="ParteAct" id="ParteAct" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_RecargosR7() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Recargos" id="Recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//*****************************funciones isr r97
    public function ISR_R97_Op1() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $resultado = $Suma_Ing + $Ing;
        ?>
        <input  class="form-control" name="Total_Ing" id="Total_Ing" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_Op2() {
        $Suma_Deduc = $_POST["Suma_Deduc"];
        $Deduc_Auto = $_POST["Deduc_Auto"];
        $resultado = $Suma_Deduc + $Deduc_Auto;
        ?>
        <input  class="form-control" name="Total_Deduc" id="Total_Deduc" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_Op3() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $resultado = $ACargo + $ParteAct + $Recargos + $Multas;
        ?>
        <input  class="form-control" name="Total_Cont" id="Total_Cont" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_Op4() {
        $Sub_Emple = $_POST["Sub_Emple"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Otros = $_POST["Otros"];
        $Diesel = $_POST["Diesel"];

        $resultado = $Sub_Emple + $Compensaciones + $IEPS + $Otros + $Diesel;
        ?>
        <input  class="form-control" name="TotalApp" id="TotalApp" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_Op5() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $Sub_Emple = $_POST["Sub_Emple"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Otros = $_POST["Otros"];
        $Diesel = $_POST["Diesel"];

        $MontoPagado = $_POST["MontoPagado"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];

        $suma1 = $ACargo + $ParteAct + $Recargos + $Multas;
        $suma2 = $Sub_Emple + $Compensaciones + $IEPS + $Otros + $Diesel;

        $resultado = $suma1 - $suma2 - $MontoPagado - $Imp_UltHrs;
        ?>
        <input  class="form-control" name="CantCargo" id="CantCargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_Op6() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $Sub_Emple = $_POST["Sub_Emple"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Otros = $_POST["Otros"];
        $Diesel = $_POST["Diesel"];

        $MontoPagado = $_POST["MontoPagado"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];

        $suma1 = $ACargo + $ParteAct + $Recargos + $Multas;
        $suma2 = $Sub_Emple + $Compensaciones + $IEPS + $Otros + $Diesel;

        $resultado = $suma1 - $suma2 - $MontoPagado - $Imp_UltHrs;

        if ($resultado < 0) {
            $resultado = abs($resultado);
        } else {
            $resultado = 0;
        }
        ?>
        <input  class="form-control" name="CantFavor" id="CantFavor" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_Op7() {
        $ACargo = $_POST["ACargo"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $Sub_Emple = $_POST["Sub_Emple"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Otros = $_POST["Otros"];
        $Diesel = $_POST["Diesel"];

        $MontoPagado = $_POST["MontoPagado"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];

        $suma1 = $ACargo + $ParteAct + $Recargos + $Multas;
        $suma2 = $Sub_Emple + $Compensaciones + $IEPS + $Otros + $Diesel;

        $resultado = $suma1 - $suma2 - $MontoPagado - $Imp_UltHrs;

        if ($resultado >= 0) {
            $resultado = abs($resultado);
        } else {
            $resultado = 0;
        }

        $resultado = ceil($resultado);
        ?>
        <input  class="form-control" name="CantPagar" id="CantPagar" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_OpB() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $Ing_Externos = $_POST["Ing_Externos"];
        $Suma_Deduc = $_POST["Suma_Deduc"];
        $Deduc_Auto = $_POST["Deduc_Auto"];
        $Part_Utilidad = $_POST["Part_Utilidad"];
        $Perdidas = $_POST["Perdidas"];
        $resultado = $Suma_Ing + $Ing - $Ing_Externos - $Suma_Deduc - $Deduc_Auto - $Part_Utilidad - $Perdidas;

        $Ingresos = $Suma_Ing + $Ing;
        $Deducciones = $Suma_Deduc + $Deduc_Auto;
        if ($Deducciones > $Ingresos) {
            $resultado = 0;
        }
        ?>
        <input  class="form-control" name="Base" id="Base" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_OpD() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $Ing_Externos = $_POST["Ing_Externos"];
        $Suma_Deduc = $_POST["Suma_Deduc"];
        $Deduc_Auto = $_POST["Deduc_Auto"];
        $Part_Utilidad = $_POST["Part_Utilidad"];
        $Perdidas = $_POST["Perdidas"];
        $base = $Suma_Ing + $Ing - $Ing_Externos - $Suma_Deduc - $Deduc_Auto - $Part_Utilidad - $Perdidas;

        $Ingresos = $Suma_Ing + $Ing;
        $Deducciones = $Suma_Deduc + $Deduc_Auto;
        if ($Deducciones > $Ingresos) {
            $base = 0;
        }

        $resultado = $base * 0.3;
        ?>
        <input  class="form-control" name="ISR_Det" id="ISR_Det" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_OpC() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $Ing_Externos = $_POST["Ing_Externos"];
        $Suma_Deduc = $_POST["Suma_Deduc"];
        $Deduc_Auto = $_POST["Deduc_Auto"];
        $Part_Utilidad = $_POST["Part_Utilidad"];
        $Perdidas = $_POST["Perdidas"];
        $reducciones = $_POST["Reducciones"];
        $base = $Suma_Ing + $Ing - $Ing_Externos - $Suma_Deduc - $Deduc_Auto - $Part_Utilidad - $Perdidas;

        $Ingresos = $Suma_Ing + $Ing;
        $Deducciones = $Suma_Deduc + $Deduc_Auto;
        if ($Deducciones > $Ingresos) {
            $base = 0;
        }

        $retenido = $base * 0.3;
        $resultado = $retenido - $reducciones;
        ?>
        <input  class="form-control" name="ISR_Causado" id="ISR_Causado" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_OpA() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $Ing_Externos = $_POST["Ing_Externos"];
        $Suma_Deduc = $_POST["Suma_Deduc"];
        $Deduc_Auto = $_POST["Deduc_Auto"];
        $Part_Utilidad = $_POST["Part_Utilidad"];
        $Perdidas = $_POST["Perdidas"];
        $reducciones = $_POST["Reducciones"];
        $Pagos_Prov = $_POST["Pagos_Prov"];
        $Imp_Ret = $_POST["Imp_Ret"];
        $OtrasCargo = $_POST["OtrasCargo"];
        $OtrasFavor = $_POST["OtrasFavor"];
        $base = $Suma_Ing + $Ing - $Ing_Externos - $Suma_Deduc - $Deduc_Auto - $Part_Utilidad - $Perdidas;

        $Ingresos = $Suma_Ing + $Ing;
        $Deducciones = $Suma_Deduc + $Deduc_Auto;
        if ($Deducciones > $Ingresos) {
            $base = 0;
        }

        $retenido = $base * 0.3;
        $causado = $retenido - $reducciones;
        $resultado = $causado - $Pagos_Prov - $Imp_Ret + $OtrasCargo - $OtrasFavor;
        ?>
        <input  class="form-control" name="Imp_Cargo" id="Imp_Cargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R97_OpA2() {
        $Suma_Ing = $_POST["Suma_Ing"];
        $Ing = $_POST["Ing"];
        $Ing_Externos = $_POST["Ing_Externos"];
        $Suma_Deduc = $_POST["Suma_Deduc"];
        $Deduc_Auto = $_POST["Deduc_Auto"];
        $Part_Utilidad = $_POST["Part_Utilidad"];
        $Perdidas = $_POST["Perdidas"];
        $reducciones = $_POST["Reducciones"];
        $Pagos_Prov = $_POST["Pagos_Prov"];
        $Imp_Ret = $_POST["Imp_Ret"];
        $OtrasCargo = $_POST["OtrasCargo"];
        $OtrasFavor = $_POST["OtrasFavor"];
        $base = $Suma_Ing + $Ing - $Ing_Externos - $Suma_Deduc - $Deduc_Auto - $Part_Utilidad - $Perdidas;

        $Ingresos = $Suma_Ing + $Ing;
        $Deducciones = $Suma_Deduc + $Deduc_Auto;
        if ($Deducciones > $Ingresos) {
            $base = 0;
        }

        $retenido = $base * 0.3;
        $causado = $retenido - $reducciones;
        $resultado = $causado - $Pagos_Prov - $Imp_Ret + $OtrasCargo - $OtrasFavor;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function C_ActualizacionesR97() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="ParteAct" id="ParteAct" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_RecargosR97() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;



        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Recargos" id="Recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

//********************************funciones isr r10
    public function ISR_R10_Op_1_1() {
        $DeduccionOp = $_POST["DeduccionOp"];
        if ($DeduccionOp == 'Sí') {
            ?>
            <input  class="form-control" type="number" step="0.01" value="0" name="Deducciones" id="Deducciones" readonly="readonly">
            <br />
            <?php
        } else {
            ?>
            <input  class="form-control" type="number" step="0.01" value="0" name="Deducciones" id="Deducciones" required="required">
            <br />
            <?php
        }
    }

    public function ISR_R10_Op_1_2() {
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $resultado = 0;
        if ($DeduccionOp == 'Sí') {
            $resultado = $Ing * 0.35;
        }
        ?>
        <input  class="form-control" name="D_Opc" id="D_Opc" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op_1_3() {
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];
        $resultado = 0;
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $resultado = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;
        ?>
        <input  class="form-control" name="Base" id="Base" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op_1_4() {
        $meses = $_POST["meses"];
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado = $resultado1 + $Limites->Cuota;
            }
        }
        ?>
        <input  class="form-control" name="Imp_Cargo" id="Imp_Cargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op_1_5() {
        $meses = $_POST["meses"];
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];

        $Imp_Rete = $_POST["Imp_Rete"];
        $Otras_Cargo = $_POST["Otras_Cargo"];
        $Otras_Favor = $_POST["Otras_Favor"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado2 = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado2 = $resultado1 + $Limites->Cuota;
            }
        }
        $resultado = $resultado2 - $Imp_Rete + $Otras_Cargo - $Otras_Favor;
        ?>
        <input  class="form-control" name="Imp_ACargo" id="Imp_ACargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op_1_52() {
        $meses = $_POST["meses"];
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];

        $Imp_Rete = $_POST["Imp_Rete"];
        $Otras_Cargo = $_POST["Otras_Cargo"];
        $Otras_Favor = $_POST["Otras_Favor"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado2 = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado2 = $resultado1 + $Limites->Cuota;
            }
        }
        $resultado = $resultado2 - $Imp_Rete + $Otras_Cargo - $Otras_Favor;
        ?>
        <input  class="form-control" name="ACargo" id="ACargo" value="<?php echo $resultado ?>" required="required">
        <br />
        <?php
    }

    public function ISR_R10_Op3() {
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];

        $Imp_Rete = $_POST["Imp_Rete"];
        $Otras_Cargo = $_POST["Otras_Cargo"];
        $Otras_Favor = $_POST["Otras_Favor"];
        $meses = $_POST["meses"];
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado2 = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado2 = $resultado1 + $Limites->Cuota;
            }
        }
        $ACargo = $resultado2 - $Imp_Rete + $Otras_Cargo - $Otras_Favor;

        $resultado = $ACargo + $ParteAct + $Recargos + $Multas;
        ?>
        <input  class="form-control" name="Total_Cont" id="Total_Cont" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op4() {
        $Credito = $_POST["Credito"];
        $Sub_Empleo = $_POST["Sub_Empleo"];
        $Imp_Dep = $_POST["Imp_Dep"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Diesel = $_POST["Diesel"];
        $Carretera = $_POST["Carretera"];
        $Otros = $_POST["Otros"];
        $Diesel_Marino = $_POST["Diesel_Marino"];

        $resultado = $Credito + $Sub_Empleo + $Imp_Dep + $Compensaciones + $IEPS + $Diesel + $Carretera + $Otros + $Diesel_Marino;
        ?>
        <input  class="form-control" name="TotalApp" id="TotalApp" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op5() {
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $Credito = $_POST["Credito"];
        $Sub_Empleo = $_POST["Sub_Empleo"];
        $Imp_Dep = $_POST["Imp_Dep"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Diesel = $_POST["Diesel"];
        $Carretera = $_POST["Carretera"];
        $Otros = $_POST["Otros"];
        $Diesel_Marino = $_POST["Diesel_Marino"];

        $MontoPagado = $_POST["MontoPagado"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];

        $meses = $_POST["meses"];
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];

        $Imp_Rete = $_POST["Imp_Rete"];
        $Otras_Cargo = $_POST["Otras_Cargo"];
        $Otras_Favor = $_POST["Otras_Favor"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado2 = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado2 = $resultado1 + $Limites->Cuota;
            }
        }
        $ACargo = $resultado2 - $Imp_Rete + $Otras_Cargo - $Otras_Favor;

        $suma1 = $ACargo + $ParteAct + $Recargos + $Multas;
        $suma2 = $Credito + $Sub_Empleo + $Imp_Dep + $Compensaciones + $IEPS + $Diesel + $Carretera + $Otros + $Diesel_Marino;

        $resultado = $suma1 - $suma2 - $MontoPagado - $Imp_UltHrs;
        ?>
        <input  class="form-control" name="CantCargo" id="CantCargo" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op6() {
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $Credito = $_POST["Credito"];
        $Sub_Empleo = $_POST["Sub_Empleo"];
        $Imp_Dep = $_POST["Imp_Dep"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Diesel = $_POST["Diesel"];
        $Carretera = $_POST["Carretera"];
        $Otros = $_POST["Otros"];
        $Diesel_Marino = $_POST["Diesel_Marino"];

        $MontoPagado = $_POST["MontoPagado"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];

        $meses = $_POST["meses"];
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];

        $Imp_Rete = $_POST["Imp_Rete"];
        $Otras_Cargo = $_POST["Otras_Cargo"];
        $Otras_Favor = $_POST["Otras_Favor"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado2 = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado2 = $resultado1 + $Limites->Cuota;
            }
        }
        $ACargo = $resultado2 - $Imp_Rete + $Otras_Cargo - $Otras_Favor;

        $suma1 = $ACargo + $ParteAct + $Recargos + $Multas;
        $suma2 = $Credito + $Sub_Empleo + $Imp_Dep + $Compensaciones + $IEPS + $Diesel + $Carretera + $Otros + $Diesel_Marino;

        $resultado = $suma1 - $suma2 - $MontoPagado - $Imp_UltHrs;

        if ($resultado < 0) {
            $resultado = abs($resultado);
        } else {
            $resultado = 0;
        }
        ?>
        <input  class="form-control" name="CantFavor" id="CantFavor" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function ISR_R10_Op7() {
        $ParteAct = $_POST["ParteAct"];
        $Recargos = $_POST["Recargos"];
        $Multas = $_POST["Multas"];

        $Credito = $_POST["Credito"];
        $Sub_Empleo = $_POST["Sub_Empleo"];
        $Imp_Dep = $_POST["Imp_Dep"];
        $Compensaciones = $_POST["Compensaciones"];
        $IEPS = $_POST["IEPS"];
        $Diesel = $_POST["Diesel"];
        $Carretera = $_POST["Carretera"];
        $Otros = $_POST["Otros"];
        $Diesel_Marino = $_POST["Diesel_Marino"];

        $MontoPagado = $_POST["MontoPagado"];
        $Imp_UltHrs = $_POST["Imp_UltHrs"];

        $meses = $_POST["meses"];
        $DeduccionOp = $_POST["DeduccionOp"];
        $Ing = $_POST["Ing"];
        $Deducciones = $_POST["Deducciones"];
        $DImp_Local = $_POST["DImp_Local"];
        $Predial = $_POST["Predial"];
        $D_PrimerEm = $_POST["D_PrimerEm"];

        $Imp_Rete = $_POST["Imp_Rete"];
        $Otras_Cargo = $_POST["Otras_Cargo"];
        $Otras_Favor = $_POST["Otras_Favor"];
        //Abriendo BD Cuentas
        $this->load->model("modelo", "tablas");
        $tablas = $this->tablas->getTablas();

        $resultado2 = '0';
        $DO = 0;
        if ($DeduccionOp == 'Sí') {
            $DO = $Ing * 0.35;
        }
        $base = $Ing - $Deducciones - $DImp_Local - $DO - $Predial - $D_PrimerEm;

        foreach ($tablas as $Limites) {
            $inferior = ($Limites->L_Inferior) * $meses;
            $superior = ($Limites->L_Superior) * $meses;
            if ($base >= $inferior && $base <= $superior) {
                $resultado1 = (($base - $inferior) * $Limites->Porcentaje) / 100;
                $resultado2 = $resultado1 + $Limites->Cuota;
            }
        }
        $ACargo = $resultado2 - $Imp_Rete + $Otras_Cargo - $Otras_Favor;

        $suma1 = $ACargo + $ParteAct + $Recargos + $Multas;
        $suma2 = $Credito + $Sub_Empleo + $Imp_Dep + $Compensaciones + $IEPS + $Diesel + $Carretera + $Otros + $Diesel_Marino;

        $resultado = $suma1 - $suma2 - $MontoPagado - $Imp_UltHrs;

        if ($resultado >= 0) {
            $resultado = abs($resultado);
        } else {
            $resultado = 0;
        }

        $resultado = ceil($resultado);
        ?>
        <input  class="form-control" name="CantPagar" id="CantPagar" value="<?php echo $resultado ?>" readonly="readonly">
        <br />
        <?php
    }

    public function C_ActualizacionesR10() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        //$this->load->model("modelo", "Recar");
        //$Recar = $this->Recar->getRecargos();
        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $res = $Impuestos * $factor;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="ParteAct" id="ParteAct" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>
        <?php
    }

    public function C_RecargosR10() {
        $Cantidad1 = '-';
        $Cantidad2 = '-';
        $MesaDeclarar = $_POST["MesaDeclarar"];
        $MesActual = $_POST["MesActual"];
        $Impuestos = $_POST["Impuestos"];
        $Anio = date("Y");
        $this->load->model("modelo", "INPC");
        $INPC = $this->INPC->getINPCs();
        $this->load->model("modelo", "Recar");
        $Recar = $this->Recar->getRecargos();

        $M1 = $MesActual - 1;
        if ($M1 == 0) {
            $M1 = 12;
            $Anio1 = $Anio - 1;
        } else {
            $Anio1 = $Anio;
        }
        if ($M1 == 12) {
            $Anio2 = $Anio - 1;
        }
        $M2 = $MesaDeclarar;
        if ($M2 == 0) {
            $M2 = 12;
            $Anio2 = $Anio - 1;
        } else {
            $Anio2 = $Anio;
        }
        if ($MesaDeclarar > $MesActual) {
            $Anio2 = $Anio - 1;
        }
        foreach ($INPC as $INPC1) {
            if ($M1 == $INPC1->Mes && $Anio1 == $INPC1->Anio) {
                $Cantidad1 = $INPC1->Cantidades;
            }
        }
        foreach ($INPC as $INPC1) {
            if ($M2 == $INPC1->Mes && $Anio2 == $INPC1->Anio) {
                $Cantidad2 = $INPC1->Cantidades;
            }
        }

        $factor = ($Cantidad1 / $Cantidad2) - 1;
        if ($factor < 0) {
            $factor = 1;
        }
        $actualizacion = $Impuestos * $factor;


        if ($MesaDeclarar > $MesActual) {
            $Anio = $Anio - 1;
        }
        $MesaDeclarar = $MesaDeclarar + 1;
        if ($MesaDeclarar == 13) {
            $MesaDeclarar = 1;
        }
        foreach ($Recar as $Recar1) {
            if ($MesaDeclarar == $Recar1->Mes && $Anio == $Recar1->Anio) {
                $indicador = $Recar1->ID;
            }
        }
        $suma = 0;
        foreach ($Recar as $Recar2) {
            if ($indicador <= $Recar2->ID) {
                $suma = $suma + ($Recar2->Tasa_Recargos);
            }
        }

        $recargos = $suma / 100;
        $res = ($Impuestos + $actualizacion) * $recargos;

        $resultado = round($res, 4);
        ?>
        <input class="form-control" name="Recargos" id="Recargos" type="number" step="0.01" value="<?php echo $resultado ?>" required="required">
        <br>		  <?php
    }

}
