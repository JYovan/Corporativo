<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlador3 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder16 = 'uploads/Productos/';
        $this->folder17 = 'uploads/Patrones/';
    }

    private $defaultData = array(
        'title' => 'Body Form',
        'layout' => 'layout/lytDefault',
        'contentView' => 'vUndefined',
    );

    private function _renderView($data = array()) {
        $data = array_merge($this->defaultData, $data);
        $this->load->view($data['layout'], $data);
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
            $this->load->model("modelo", "ModelosN");
            $ModelosN = $this->ModelosN->getModelosN($where);
            $data['ModelosN'] = $ModelosN;
            $this->load->model("modelo", "Inmueble");
            $Inmueble = $this->Inmueble->getInmueblesReg($where);
            $data['Inmueble'] = $Inmueble;
            $data['User'] = $indiceuser;
            $data['contentView'] = 'Desarrollos';
            $this->_renderView($data);
        }

        if ($MENU == 27) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion';
            $this->_renderView($data);
        }

        if ($MENU == 28) {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion';
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

    public function Planeacion() {
        $this->load->model("modelo", "datos");
        $PlaneacionID = $this->input->post('PlaneacionID');
        $indiceuser = $this->input->post('user');

        if ($PlaneacionID == 'P0') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "Cliente");
            $Cliente = $this->Cliente->getID_Cliente();
            $data['Cliente'] = $Cliente;
            //Cargando usuarios
            $this->load->model("modelo", "FormaEnt");
            $FormaEnt = $this->FormaEnt->getFormaEnt();
            $data['FormaEnt'] = $FormaEnt;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_0';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P1') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Ordenes");
            $Ordenes = $this->Ordenes->getOrdenesSolicitadasALL();
            $data['Ordenes'] = $Ordenes;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "Modalidad");
            $Modalidad = $this->Modalidad->getModalidadPro();
            $data['Modalidad'] = $Modalidad;
            //Cargando usuarios
            $this->load->model("modelo", "FormaPago");
            $FormaPago = $this->FormaPago->getFormaPagoPro();
            $data['FormaPago'] = $FormaPago;
            //Cargando usuarios
            $this->load->model("modelo", "Grupo");
            $Grupo = $this->Grupo->getGrupo();
            $data['Grupo'] = $Grupo;
            //Cargando usuarios
            $this->load->model("modelo", "Genero");
            $Genero = $this->Genero->getGenero();
            $data['Genero'] = $Genero;
            //Cargando usuarios
            $this->load->model("modelo", "Posicion");
            $Posicion = $this->Posicion->getPosicion();
            $data['Posicion'] = $Posicion;
            //Cargando usuarios
            $this->load->model("modelo", "Poblacion");
            $Poblacion = $this->Poblacion->getPoblacion();
            $data['Poblacion'] = $Poblacion;
            //Cargando usuarios
            $this->load->model("modelo", "Uso");
            $Uso = $this->Uso->getUso();
            $data['Uso'] = $Uso;
            //Cargando usuarios
            $this->load->model("modelo", "Temporada");
            $Temporada = $this->Temporada->getTemporada();
            $data['Temporada'] = $Temporada;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_1';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P2') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P3') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_3';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P4') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;

            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_4';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P5') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_5';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P6') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_6';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P7') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_5a';
            $this->_renderView($data);
        }
        if ($PlaneacionID == 'P8') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Costos';
            $this->_renderView($data);
        }
    }

    public function Plan2() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->get('i');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Cargando usuarios
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getProyectosAll();
        $data['Proyecto'] = $Proyecto;
        //Cargando usuarios
        $this->load->model("modelo", "TipoP");
        $TipoP = $this->TipoP->getTipoP();
        $data['TipoP'] = $TipoP;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenALL();
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_2';
        $this->_renderView($data);
    }

    public function Plan2a() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->get('i');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Cargando usuarios
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getProyectosAll();
        $data['Proyecto'] = $Proyecto;
        //Cargando usuarios
        $this->load->model("modelo", "TipoP");
        $TipoP = $this->TipoP->getTipoP();
        $data['TipoP'] = $TipoP;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenALL();
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_3';
        $this->_renderView($data);
    }

    public function Planeacion0() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Tipo = $this->input->post('Tipo');
        $Numero = $this->input->post('Numero');
        $Nombre = $this->input->post('Nombre');
        $Ncadena = $this->input->post('Ncadena');
        $Ucadena = $this->input->post('Ucadena');
        $Folio = $this->input->post('Folio');
        $Solicitud = $this->input->post('Solicitud');
        $Piezas = $this->input->post('Piezas');
        $Productos = $this->input->post('Productos');
        $TipoProducto = $this->input->post('TipoProducto');
        $CDBarras = $this->input->post('CDBarras');
        $Cliente = $this->input->post('Cliente');
        $Fentrega = $this->input->post('Fentrega');
        $NumeroEntregas = $this->input->post('NumeroEntregas');
        $LugarEntrega = $this->input->post('LugarEntrega');
        $FormaEnt = $this->input->post('FormaEnt');
        $datos = $this->datos->getPlaneacion0(
                $Tipo, $Numero, $Nombre, $Ncadena, $Ucadena, $Folio, $Solicitud, $Piezas, $Productos, $TipoProducto, $CDBarras, $Cliente, $Fentrega, $NumeroEntregas, $LugarEntrega, $FormaEnt
        );
        echo '<script>alert("Se ha registrado el proyecto")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Comerc';
        $this->_renderView($data);
    }

    public function SeccionxProyecto() {
        //Abriendo BD Sub-cliente
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Secciones");
        $Secciones = $this->Secciones->getSecciones($Proyecto);
        foreach ($Secciones as $Secciones1) {
            $m = $Secciones1->SeccionD;
        }
        ?>
        <select class="form-control" id="Seccion" name="Seccion"   required="required">
            <option value="">Selecciona</option>
            <?php for ($i = 1; $i <= $m; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo "Sección " . $i; ?></option>
            <?php } ?>
        </select>
        <?php
    }

    public function ManzanaxSeccion() {
        //Abriendo BD Sub-cliente
        $Seccion = $_POST["Seccion"];
        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanasC($Seccion);
        ?>
        <select class="form-control" id="Manzana" name="Manzana"   required="required">
            <option value="">Selecciona</option>
            <?php foreach ($Manzanas as $Manzanas1) { ?>
                <option value="<?php echo $Manzanas1->Manzana; ?>"><?php echo "Manzana " . $Manzanas1->Manzana; ?></option>
            <?php } ?>
        </select>
        <?php
    }

    public function SumaSuperficies() {
        //Abriendo BD Sub-cliente
        $SuperficieH = $_POST["SuperficieH"];
        $SuperficieC = $_POST["SuperficieC"];
        $SuperficieD = $_POST["SuperficieD"];
        $SuperficieV = $_POST["SuperficieV"];
        $Total = $SuperficieH + $SuperficieC + $SuperficieD + $SuperficieV;
        ?>
        <input value="<?php echo $Total ?>" type="number" class="form-control" name="Total" id="Total" readonly="readonly">
        <?php
    }

    public function RSManzana() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo = $this->input->post('Desarrollo');
        $Seccion = $this->input->post('Seccion');
        $Manzana = $this->input->post('Manzana');
        $SuperficieH = $this->input->post('SuperficieH');
        $SuperficieC = $this->input->post('SuperficieC');
        $SuperficieD = $this->input->post('SuperficieD');
        $SuperficieV = $this->input->post('SuperficieV');
        $Total = $this->input->post('Total');
        $datos = $this->datos->getRSManzana(
                $Desarrollo, $Seccion, $Manzana, $SuperficieH, $SuperficieC, $SuperficieD, $SuperficieV, $Total
        );
        echo '<script>alert("Se ha sembrado la manzana")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos';
        $this->_renderView($data);
    }

    public function ManzanaxProyecto() {
        //Abriendo BD Sub-cliente
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanas($Proyecto);
        ?>
        <select class="form-control" id="Manzana" name="Manzana"   required="required">
            <option value="">Selecciona</option>
            <?php foreach ($Manzanas as $Manzanas1) { ?>
                <option value="<?php echo $Manzanas1->Manzana; ?>"><?php echo "Manzana " . $Manzanas1->Manzana; ?></option>
            <?php } ?>
        </select>
        <?php
    }

    public function SumaManzanas() {
        //Abriendo BD Sub-cliente
        $NLotes = $_POST["NLotes"];
        $LotesHr = $_POST["LotesHr"];
        $LotesHi = $_POST["LotesHi"];
        $LotesC = $_POST["LotesC"];
        $Total = $LotesHr + $LotesHi + $LotesC;
        if ($Total < $NLotes) {
            ?>
            <input style="color:#de6a1d" value="<?php echo $Total ?>" type="number" class="form-control" name="Total" id="Total" readonly="readonly">
            <?php
        }
        if ($Total == $NLotes) {
            ?>
            <input style="color:#2dac48" value="<?php echo $Total ?>" type="number" class="form-control" name="Total" id="Total" readonly="readonly">
            <?php
        }
        if ($Total > $NLotes) {
            ?>
            <input style="color:#F00" value="<?php echo $Total ?>" type="number" class="form-control" name="Total" id="Total" readonly="readonly">
            <?php
        }
    }

    public function RManzana() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        $NLotes = $this->input->post('NLotes');
        $LotesHr = $this->input->post('LotesHr');
        $NLotesHr = $this->input->post('NLotesHr');
        $LotesHi = $this->input->post('LotesHi');
        $NLotesHi = $this->input->post('NLotesHi');
        $LotesC = $this->input->post('LotesC');
        $NLotesC = $this->input->post('NLotesC');
        $Total = $this->input->post('Total');
        $datos = $this->datos->getRManzana(
                $Desarrollo, $Manzana, $NLotes, $LotesHr, $NLotesHr, $LotesHi, $NLotesHi, $LotesC, $NLotesC, $Total
        );
        echo '<script>alert("Se ha sembrado el lote")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos';
        $this->_renderView($data);
    }

    public function ManzanaxProyecto2() {
        //Abriendo BD Sub-cliente
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanas2($Proyecto);
        ?>
        <select class="form-control" id="Manzana" name="Manzana"   required="required">
            <option value="0">Selecciona</option>
            <?php foreach ($Manzanas as $Manzanas1) { ?>
                <option value="<?php echo $Manzanas1->Manzana; ?>"><?php echo "Manzana " . $Manzanas1->Manzana; ?></option>
            <?php } ?>
        </select>
        <?php
    }

    public function LotesxProyecto() {
        //Abriendo BD Sub-cliente
        $Proyecto = $_POST["Proyecto"];
        $Manzana = $_POST["Manzana"];
        $this->load->model("modelo", "Lotes");
        $Lotes = $this->Lotes->getLotes($Proyecto, $Manzana);
        foreach ($Lotes as $Lotes1) {
            
        }
        ?>
        <select class="form-control" id="TLotes" name="TLotes"   required="required">
            <option value="0">Selecciona</option>
            <?php if (!empty($Lotes1->NLotesHr)) { ?>
                <option value="Regulares"><?php echo "Lotes regulares " . $Lotes1->NLotesHr; ?></option>
            <?php } ?>
            <?php if (!empty($Lotes1->NLotesHi)) { ?>
                <option value="Irregulares"><?php echo "Lotes irregulares " . $Lotes1->NLotesHi; ?></option>
            <?php } ?>
            <?php if (!empty($Lotes1->NLotesC)) { ?>
                <option value="Comerciales"><?php echo "Lotes comerciales " . $Lotes1->NLotesC; ?></option> 
            <?php } ?>      
        </select>
        <?php
    }

    public function LotesxTipo() {
        //Abriendo BD Sub-cliente
        $temp = 0;
        $Proyecto = $_POST["Proyecto"];
        $Manzana = $_POST["Manzana"];
        $TLotes = $_POST["TLotes"];
        $this->load->model("modelo", "Lotes");
        $Lotes = $this->Lotes->getLotes($Proyecto, $Manzana);
        foreach ($Lotes as $Lotes1) {
            if ($TLotes == 'Regulares') {
                $temp = $Lotes1->NLotesHr;
            }
            if ($TLotes == 'Irregulares') {
                $temp = $Lotes1->NLotesHi;
            }
            if ($TLotes == 'Comerciales') {
                $temp = $Lotes1->NLotesC;
            }
        }
        $arreglo = explode(',', $temp);
        $n = count($arreglo);
        ?>
        <select class="form-control" id="Lotes" name="Lotes"   required="required">
            <option value="">Selecciona</option>
            <?php for ($i = 0; $i < $n; $i++) { ?>
                <option value="<?php echo $arreglo[$i]; ?>"><?php echo $arreglo[$i] ?></option>  
            <?php } ?>     
        </select>
        <?php
    }

    public function RViviendas2() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        $TLotes = $this->input->post('TLotes');
        $Lotes = $this->input->post('Lotes');
        $NViviendas = $this->input->post('NViviendas');
        $SuperficieHV = $this->input->post('SuperficieHV');
        $Uso = $this->input->post('Uso');
        $Indicador = $this->input->post('Indicador');
        //$Arreglo = $this->input->post('Cantidad1');
        for ($i = 1; $i <= $Indicador; $i++) {
            $variable = "Cantidad" . $i;
            $Arreglo = $this->input->post($variable);
            $temporal = "myField" . $i;
            $Color = $this->input->post($temporal);
            $temporal2 = "Modelos" . $i;
            $Modelo = $this->input->post($temporal2);
            $temporal3 = "Prototipos" . $i;
            $Prototipo = $this->input->post($temporal3);
            $datos = $this->datos->getRViviendas2(
                    $Desarrollo, $Manzana, $TLotes, $Lotes, $NViviendas, $SuperficieHV, $Uso, $Indicador, $Arreglo, $Color, $Modelo, $Prototipo
            );
        }

        echo '<script>alert("Se ha sembrado la vivienda")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos';
        $this->_renderView($data);
    }

    public function ReporteManzanas1() {
        $datos = 0;
        $datos2 = 0;
        $Desarrollo = $_POST["Desarrollo"];
        $Seccion = $_POST["Seccion"];
        $Manzana = $_POST["Manzana"];
        $TLotes = $_POST["TLotes"];

        $this->load->model("modelo", "Desarrollo2");
        $Desarrollo2 = $this->Desarrollo2->getProyectosAll();
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUsoAll();

        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanas($Desarrollo);

        $this->load->model("modelo", "Manzanas2");
        $Manzanas2 = $this->Manzanas2->getManzanasc2($Seccion);

        $this->load->model("modelo", "Lotes");
        $Lotes = $this->Lotes->getLotes($Desarrollo, $Manzana);

        $this->load->model("modelo", "XtipoLotes");
        $XtipoLotes = $this->XtipoLotes->getXtipoLotes($Desarrollo, $Manzana, $TLotes);
        ?> 
        <table width="100%" border="1" bordercolor="#9c9a9a">   
            <?php if (!empty($Desarrollo) && empty($Seccion) && empty($Manzana) && empty($TLotes)) { ?> 
                <tr>
                    <td bgcolor="#333333">
                        <div class="col-md-2 col-xs-12">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Sección</strong>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Manzana</strong>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie habitacional</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie comercial</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie de donación</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie vendible</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Total de superficie</strong>
                        </div>
                    </td>
                </tr> 
                <?php foreach ($Manzanas as $Manzanas1) { ?> 
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12">
                                <div class="col-md-6 col-xs-12"  align="center">
                                    <?php echo $Manzanas1->Seccion ?>
                                </div>
                                <div class="col-md-6 col-xs-12"  align="center">
                                    <?php echo $Manzanas1->Manzana ?>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieH . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieC . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieD . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieV . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->Total . " m2" ?>
                            </div>
                        </td>
                    </tr> 
                <?php } ?> 
            <?php } ?> 

            <?php if (!empty($Desarrollo) && !empty($Seccion) && empty($Manzana) && empty($TLotes)) { ?> 
                <tr>
                    <td bgcolor="#333333">
                        <div class="col-md-2 col-xs-12">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Sección</strong>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Manzana</strong>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie habitacional</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie comercial</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie de donación</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Superficie vendible</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Total de superficie</strong>
                        </div>
                    </td>
                </tr> 
                <?php foreach ($Manzanas2 as $Manzanas1) { ?> 
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12">
                                <div class="col-md-6 col-xs-12"  align="center">
                                    <?php echo $Manzanas1->Seccion ?>
                                </div>
                                <div class="col-md-6 col-xs-12"  align="center">
                                    <?php echo $Manzanas1->Manzana ?>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieH . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieC . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieD . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->SuperficieV . " m2" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Manzanas1->Total . " m2" ?>
                            </div>
                        </td>
                    </tr> 
                <?php } ?>  
            <?php } ?> 

            <?php if (!empty($Desarrollo) && !empty($Seccion) && !empty($Manzana) && empty($TLotes)) { ?> 
                <tr>
                    <td bgcolor="#333333">
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Proyecto</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Manzana</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Número total de lotes</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Tipo de lotes</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Cantidad de lotes</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Numeración de los lotes</strong>
                        </div>
                    </td>
                </tr> 
                <?php foreach ($Lotes as $Lotes1) { ?> 
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php
                                $respuesta = '-';
                                foreach ($Desarrollo2 as $Desarrollo1) {
                                    if ($Desarrollo1->ID == $Lotes1->Proyecto) {
                                        $respuesta = $Desarrollo1->Proyecto;
                                    }
                                }
                                echo $respuesta;
                                ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->Manzana ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->NLotes ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo "Regulares" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->LotesHr ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->NLotesHr ?>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php
                                $respuesta = '-';
                                foreach ($Desarrollo2 as $Desarrollo1) {
                                    if ($Desarrollo1->ID == $Lotes1->Proyecto) {
                                        $respuesta = $Desarrollo1->Proyecto;
                                    }
                                }
                                echo $respuesta;
                                ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->Manzana ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->NLotes ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo "Irregulares" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->LotesHi ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->NLotesHi ?>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php
                                $respuesta = '-';
                                foreach ($Desarrollo2 as $Desarrollo1) {
                                    if ($Desarrollo1->ID == $Lotes1->Proyecto) {
                                        $respuesta = $Desarrollo1->Proyecto;
                                    }
                                }
                                echo $respuesta;
                                ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->Manzana ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->NLotes ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo "Comerciales" ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->LotesC ?>
                            </div>
                            <div class="col-md-2 col-xs-12"  align="center">
                                <?php echo $Lotes1->NLotesC ?>
                            </div>
                        </td>
                    </tr> 
                <?php }
            }
            ?>

        <?php if (!empty($Desarrollo) && !empty($Seccion) && !empty($Manzana) && !empty($TLotes)) { ?> 
                <tr>
                    <td bgcolor="#333333">
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Proyecto</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Manzana</strong>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Tipo de lote</strong>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Lote</strong>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Número de viviendas</strong>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Superficie habitable de vivienda</strong>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Uso</strong>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <strong style="color:#FFF">Tipo de vivienda</strong>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Cantidad</strong>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                                <strong style="color:#FFF">Color</strong>
                            </div>
                        </div>
                    </td>
                </tr> 
                <?php
                foreach ($XtipoLotes as $XtipoLotes1) {
                    if (!empty($XtipoLotes1->Arreglo)) {
                        ?> 
                        <tr>
                            <td>
                                <div class="col-md-2 col-xs-12"  align="center">
                                    <?php
                                    $respuesta = '-';
                                    foreach ($Desarrollo2 as $Desarrollo1) {
                                        if ($Desarrollo1->ID == $XtipoLotes1->Desarrollo) {
                                            $respuesta = $Desarrollo1->Proyecto;
                                        }
                                    }
                                    echo $respuesta;
                                    ?>
                                </div>
                                <div class="col-md-2 col-xs-12"  align="center">
                                    <div class="col-md-6 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->Manzana ?>
                                    </div>
                                    <div class="col-md-6 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->TLotes ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12"  align="center">
                                    <div class="col-md-6 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->Lotes ?>
                                    </div>
                                    <div class="col-md-6 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->NViviendas ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12"  align="center">
                                    <div class="col-md-6 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->SuperficieHV ?>
                                    </div>
                                    <div class="col-md-6 col-xs-12"  align="center">
                                        <?php
                                        $respuesta = '-';
                                        foreach ($Uso as $Uso1) {
                                            if ($Uso1->id_uso == $XtipoLotes1->Uso) {
                                                $respuesta = $Uso1->dsc_uso;
                                            }
                                        }
                                        echo $respuesta;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->Modelo . " " . $XtipoLotes1->Prototipo ?>
                                </div>
                                <div class="col-md-2 col-xs-12"  align="center">
                                    <div class="col-md-6 col-xs-12"  align="center">
                    <?php echo $XtipoLotes1->Arreglo ?>
                                    </div>
                                    <div class="col-md-6 col-xs-12"  align="center" style="background-color:#<?php echo $XtipoLotes1->Color ?>">
                    <?php echo $XtipoLotes1->Color ?>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                    <?php
                    }
                }
            }
            ?>
        </table>
        <?php
    }

    public function ReporteManzanas2() {
        $datos = 0;
        $datos2 = 0;
        $Seccion = $_POST["Seccion"];

        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanasc2($Seccion);
        ?> 
        <table width="100%" border="1" bordercolor="#9c9a9a">
            <tr>
                <td bgcolor="#333333">
                    <div class="col-md-2 col-xs-12">
                        <div class="col-md-6 col-xs-12"  align="center">
                            <strong style="color:#FFF">Sección</strong>
                        </div>
                        <div class="col-md-6 col-xs-12"  align="center">
                            <strong style="color:#FFF">Manzana</strong>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie habitacional</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie comercial</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie de donación</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie vendible</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Total de superficie</strong>
                    </div>
                </td>
            </tr> 
        <?php foreach ($Manzanas as $Manzanas1) { ?> 
                <tr>
                    <td>
                        <div class="col-md-2 col-xs-12">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <?php echo $Manzanas1->Seccion ?>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                            <?php echo $Manzanas1->Manzana ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieH . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieC . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieD . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieV . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                <?php echo $Manzanas1->Total . " m2" ?>
                        </div>
                    </td>
                </tr> 
        <?php } ?>  
        </table>
        <?php
    }

    public function ReporteManzanas3() {
        $datos = 0;
        $datos2 = 0;
        $Manzana = $_POST["Manzana"];

        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanasc3($Manzana);
        ?> 
        <table width="100%" border="1" bordercolor="#9c9a9a">
            <tr>
                <td bgcolor="#333333">
                    <div class="col-md-2 col-xs-12">
                        <div class="col-md-6 col-xs-12"  align="center">
                            <strong style="color:#FFF">Sección</strong>
                        </div>
                        <div class="col-md-6 col-xs-12"  align="center">
                            <strong style="color:#FFF">Manzana</strong>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie habitacional</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie comercial</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie de donación</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Superficie vendible</strong>
                    </div>
                    <div class="col-md-2 col-xs-12"  align="center">
                        <strong style="color:#FFF">Total de superficie</strong>
                    </div>
                </td>
            </tr> 
        <?php foreach ($Manzanas as $Manzanas1) { ?> 
                <tr>
                    <td>
                        <div class="col-md-2 col-xs-12">
                            <div class="col-md-6 col-xs-12"  align="center">
                                <?php echo $Manzanas1->Seccion ?>
                            </div>
                            <div class="col-md-6 col-xs-12"  align="center">
                            <?php echo $Manzanas1->Manzana ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieH . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieC . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieD . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                            <?php echo $Manzanas1->SuperficieV . " m2" ?>
                        </div>
                        <div class="col-md-2 col-xs-12"  align="center">
                <?php echo $Manzanas1->Total . " m2" ?>
                        </div>
                    </td>
                </tr> 
        <?php } ?>  
        </table>
        <?php
    }

    public function ProyectoInformacion() {
        $Desarrollo = $_POST["Desarrollo"];
        $suma = 0;
        $suma2 = 0;
        $suma3 = 0;
        $suma4 = 0;
        $suma5 = 0;
        $suma6 = 0;
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getProyectosID($Desarrollo);
        foreach ($Proyecto as $Proyecto1) {
            
        }
        $Sterreno = $Proyecto1->Inmueble;
        $SuperficieTerreno = explode(',', $Sterreno);
        $n = count($SuperficieTerreno);
        for ($i = 0; $i < $n; $i++) {
            $this->load->model("modelo", "TProyecto");
            $TProyecto = $this->TProyecto->getInmueblesReg2($SuperficieTerreno[$i]);
            foreach ($TProyecto as $TProyecto1) {
                
            }
            $suma = $suma + $TProyecto1->Terreno;
            $suma2 = $suma2 + $TProyecto1->Valor;
        }
        $this->load->model("modelo", "Seccion");
        $Seccion = $this->Seccion->getSeccionXProy($Desarrollo);
        foreach ($Seccion as $Seccion1) {
            $suma3 = $suma3 + $Seccion1->SuperficieH;
            $suma4 = $suma4 + $Seccion1->SuperficieC;
            $suma5 = $suma5 + $Seccion1->SuperficieD;
            $suma6 = $suma6 + $Seccion1->Total;
        }
        ?> 
        <table width="100%" border="1" bordercolor="#9c9a9a">
            <tr>
                <td bgcolor="#000000"> 
                    <div class="col-md-1 col-xs-12">
                        <label for="1" style="color:#FFF" class="control-label">Referencia</label>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <label for="1" style="color:#FFF" class="control-label">Tipo de superficie</label>
                    </div>  
                    <div class="col-md-1 col-xs-12">
                        <label for="1" style="color:#FFF" class="control-label">Superficie en m2</label>
                    </div>
                    <div class="col-md-1 col-xs-12">
                        <label for="1" style="color:#FFF" class="control-label">Porcentaje</label>
                    </div>
                    <div class="col-md-1 col-xs-12">
                        <label for="1" style="color:#FFF" class="control-label">Precio</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td> 
                    <div class="col-md-1 col-xs-12">
                        <label for="1" class="control-label">1</label>
                    </div>	
                    <div class="col-md-6 col-xs-12">
                        <label for="1" class="control-label">Superficie total del terreno</label>
                    </div>  
                    <div class="col-md-1 col-xs-12">
        <?php echo number_format($suma, 2, '.', ','); ?>
                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                    <div class="col-md-1 col-xs-12">
        <?php echo "$ " . number_format($suma2, 2, '.', ','); ?>
                    </div>
                </td>
            </tr> 
            <tr>
                <td> 
                    <div class="col-md-1 col-xs-12">
                        <label for="1" class="control-label">1</label>
                    </div>	
                    <div class="col-md-6 col-xs-12">
                        <label for="1" class="control-label">Superficie habitacional</label>
                    </div>  
                    <div class="col-md-1 col-xs-12">
        <?php echo number_format($suma3, 2, '.', ','); ?>
                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                </td>
            </tr> 
            <tr>
                <td> 
                    <div class="col-md-1 col-xs-12">
                        <label for="1" class="control-label">1</label>
                    </div>	
                    <div class="col-md-6 col-xs-12">
                        <label for="1" class="control-label">Superficie comercial</label>
                    </div>  
                    <div class="col-md-1 col-xs-12">
        <?php echo number_format($suma4, 2, '.', ','); ?>
                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                </td>
            </tr> 
            <tr>
                <td> 
                    <div class="col-md-1 col-xs-12">
                        <label for="1" class="control-label">1</label>
                    </div>	
                    <div class="col-md-6 col-xs-12">
                        <label for="1" class="control-label">Superficie de donación</label>
                    </div>  
                    <div class="col-md-1 col-xs-12">
        <?php echo number_format($suma5, 2, '.', ','); ?>
                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                </td>
            </tr> 
            <tr>
                <td> 
                    <div class="col-md-1 col-xs-12">
                        <label for="1" class="control-label">1</label>
                    </div>	
                    <div class="col-md-6 col-xs-12">
                        <label for="1" class="control-label">Superficie de manzanas</label>
                    </div>  
                    <div class="col-md-1 col-xs-12">
        <?php echo number_format($suma6, 2, '.', ','); ?>
                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                    <div class="col-md-1 col-xs-12">

                    </div>
                </td>
            </tr> 
        </table>
        <?php
    }

    public function ActualManzanas() {
        $where = '';
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo = $this->input->post('Desarrollo');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $indiceuser = $this->input->post('user');
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getSecciones($Desarrollo);
        $data['Proyecto'] = $Proyecto;
        $this->load->model("modelo", "ModelosN");
        $ModelosN = $this->ModelosN->getModelosN();
        $data['ModelosN'] = $ModelosN;
        $this->load->model("modelo", "Inmueble");
        $Inmueble = $this->Inmueble->getInmueblesReg();
        $data['Inmueble'] = $Inmueble;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos_1_1_1';
        $this->_renderView($data);
    }

    public function ActualSecciones() {
        $where = '';
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $indiceuser = $this->input->post('user');
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getSecciones($Desarrollo);
        $data['Proyecto'] = $Proyecto;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanasact($Desarrollo, $Manzana);
        $data['Manzanas'] = $Manzanas;
        $this->load->model("modelo", "Desarrollo");
        $Desarrollo = $this->Desarrollo->getProyectosAll();
        $data['Desarrollo'] = $Desarrollo;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos_2_1_1';
        $this->_renderView($data);
    }

    public function ActualLotes() {
        $where = '';
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo3 = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $indiceuser = $this->input->post('user');
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getSecciones($Desarrollo3);
        $data['Proyecto'] = $Proyecto;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanasact($Desarrollo3, $Manzana);
        $data['Manzanas'] = $Manzanas;
        $this->load->model("modelo", "Desarrollo");
        $Desarrollo = $this->Desarrollo->getProyectosAll();
        $data['Desarrollo'] = $Desarrollo;
        $this->load->model("modelo", "Lotes");
        $Lotes = $this->Lotes->getLotes($Desarrollo3, $Manzana);
        $data['Lotes'] = $Lotes;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos_3_1_1';
        $this->_renderView($data);
    }

    public function ActualViviendas() {
        $where = '';
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo3 = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        $TLotes = $this->input->post('TLotes');
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $indiceuser = $this->input->post('user');
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getSecciones($Desarrollo3);
        $data['Proyecto'] = $Proyecto;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Manzanas");
        $Manzanas = $this->Manzanas->getManzanasact($Desarrollo3, $Manzana);
        $data['Manzanas'] = $Manzanas;
        $this->load->model("modelo", "Desarrollo");
        $Desarrollo = $this->Desarrollo->getProyectosAll();
        $data['Desarrollo'] = $Desarrollo;
        $this->load->model("modelo", "Viviendas");
        $Viviendas = $this->Viviendas->getXtipoLotes($Desarrollo3, $Manzana, $TLotes);
        $data['Viviendas'] = $Viviendas;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos_4_1_1';
        $this->_renderView($data);
    }

//*********************************************************planeacion
    public function do_uploadP1() {
        $Numero = $this->input->post('Numero');
        if (empty($Numero)) {
            $Numero = 1;
        }
        $indiceuser = $this->input->post('user');
        $config['upload_path'] = $this->folder16;
        $config['allowed_types'] = 'zip|rar|pdf|docx|doc|xlsx|xls|txt|gif|jpg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $Numero;
        $config['max_size'] = '2048';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            if ($error['error'] == '<p>You did not select a file to upload.</p>') {
                echo '<script>alert("Se ha registrado su información con número de orden:\n' . $Numero . ' \n Sin archivo adjunto \n")</script>';
                //********sin archivo adjunto pero registra
                $this->load->model("modelo", "datos");
                $Proyecto = $this->input->post('Proyecto');
                $Folio = $this->input->post('Folio');
                $Nproducto = $this->input->post('Nproducto');
                $OrdenC = $this->input->post('OrdenC');
                $Grupo = $this->input->post('Grupo');
                $Genero = $this->input->post('Genero');
                $Posicion = $this->input->post('Posicion');
                $Poblacion = $this->input->post('Poblacion');
                $Uso = $this->input->post('Uso');
                $Temporada = $this->input->post('Temporada');
                $Coleccion = $this->input->post('Coleccion');
                $UnidadesXS = $this->input->post('UnidadesXS');
                $PUXS = $this->input->post('PUXS');
                $PTXS = $this->input->post('PTXS');
                $myFieldXS = $this->input->post('myFieldXS');
                $UnidadesS = $this->input->post('UnidadesS');
                $PUS = $this->input->post('PUS');
                $PTS = $this->input->post('PTS');
                $myFieldS = $this->input->post('myFieldS');
                $UnidadesM = $this->input->post('UnidadesM');
                $PUM = $this->input->post('PUM');
                $PTM = $this->input->post('PTM');
                $myFieldM = $this->input->post('myFieldM');
                $UnidadesL = $this->input->post('UnidadesL');
                $PUL = $this->input->post('PUL');
                $PTL = $this->input->post('PTL');
                $myFieldL = $this->input->post('myFieldL');
                $UnidadesXL = $this->input->post('UnidadesXL');
                $PUXL = $this->input->post('PUXL');
                $PTXL = $this->input->post('PTXL');
                $myFieldXL = $this->input->post('myFieldXL');
                $Solicita = $this->input->post('Solicita');
                $Registra = $this->input->post('Registra');
                $datos = $this->datos->getPlaneacion1(
                        $Proyecto, $Folio, $Nproducto, $OrdenC, $Grupo, $Genero, $Posicion, $Poblacion, $Uso, $Temporada, $Coleccion, $UnidadesXS, $PUXS, $PTXS, $myFieldXS, $UnidadesS, $PUS, $PTS, $myFieldS, $UnidadesM, $PUM, $PTM, $myFieldM, $UnidadesL, $PUL, $PTL, $myFieldL, $UnidadesXL, $PUXL, $PTXL, $myFieldXL, $Solicita, $Registra, $Numero
                );
            } else {
                if ($error['error'] == '<p>The filetype you are attempting to upload is not allowed.</p>') {
                    echo '<script>alert("Error\n No se ha guardado su registro debido a que el tipo de archivo no es soportado")</script>';
                } else {
                    if ($error['error'] == '<p>The file you are attempting to upload is larger than the permitted size.</p>') {
                        echo '<script>alert("Error\n No se ha guardado su registro debido a que el archivo excede los 2MB")</script>';
                    } else {
                        echo '<script>alert("Error' . $error['error'] . ' \n")</script>';
                    }
                }
            }
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion';
            $this->_renderView($data);
        } else {
            $this->load->model("modelo", "datos");
            $Proyecto = $this->input->post('Proyecto');
            $Folio = $this->input->post('Folio');
            $Nproducto = $this->input->post('Nproducto');
            $OrdenC = $this->input->post('OrdenC');
            $Grupo = $this->input->post('Grupo');
            $Genero = $this->input->post('Genero');
            $Posicion = $this->input->post('Posicion');
            $Poblacion = $this->input->post('Poblacion');
            $Uso = $this->input->post('Uso');
            $Temporada = $this->input->post('Temporada');
            $Coleccion = $this->input->post('Coleccion');
            $UnidadesXS = $this->input->post('UnidadesXS');
            $PUXS = $this->input->post('PUXS');
            $PTXS = $this->input->post('PTXS');
            $myFieldXS = $this->input->post('myFieldXS');
            $UnidadesS = $this->input->post('UnidadesS');
            $PUS = $this->input->post('PUS');
            $PTS = $this->input->post('PTS');
            $myFieldS = $this->input->post('myFieldS');
            $UnidadesM = $this->input->post('UnidadesM');
            $PUM = $this->input->post('PUM');
            $PTM = $this->input->post('PTM');
            $myFieldM = $this->input->post('myFieldM');
            $UnidadesL = $this->input->post('UnidadesL');
            $PUL = $this->input->post('PUL');
            $PTL = $this->input->post('PTL');
            $myFieldL = $this->input->post('myFieldL');
            $UnidadesXL = $this->input->post('UnidadesXL');
            $PUXL = $this->input->post('PUXL');
            $PTXL = $this->input->post('PTXL');
            $myFieldXL = $this->input->post('myFieldXL');
            $Solicita = $this->input->post('Solicita');
            $Registra = $this->input->post('Registra');
            $datos = $this->datos->getPlaneacion1(
                    $Proyecto, $Folio, $Nproducto, $OrdenC, $Grupo, $Genero, $Posicion, $Poblacion, $Uso, $Temporada, $Coleccion, $UnidadesXS, $PUXS, $PTXS, $myFieldXS, $UnidadesS, $PUS, $PTS, $myFieldS, $UnidadesM, $PUM, $PTM, $myFieldM, $UnidadesL, $PUL, $PTL, $myFieldL, $UnidadesXL, $PUXL, $PTXL, $myFieldXL, $Solicita, $Registra, $Numero
            );
            echo '<script>alert("El documento ha sido registrado con número de orden:\n' . $Numero . ' \n ")</script>';
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion';
            $this->_renderView($data);
        }
    }

    public function OrdenesSolicitadas() {
        //Abriendo BD Sub-cliente
        $temp = 0;
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Ordenes");
        $Ordenes = $this->Ordenes->getInfOrden($Proyecto);
        ?>
        <select class="form-control" id="Orden" name="Orden"   required="required">
            <option value="">Selecciona</option>
        <?php foreach ($Ordenes as $Ordenes1) { ?>                    
                <option value="<?php echo $Ordenes1->ID; ?>"><?php echo $Ordenes1->Folio . " " . $Ordenes1->Nproducto; ?></option>
        <?php } ?>
        </select>
        <?php
    }

    public function OrdenesSolicitadas2() {
        //Abriendo BD Sub-cliente
        $temp = 0;
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Ordenes");
        $Ordenes = $this->Ordenes->getInfOrden2($Proyecto);
        ?>
        <select class="form-control" id="Orden" name="Orden"   required="required">
            <option value="">Selecciona</option>
        <?php foreach ($Ordenes as $Ordenes1) { ?>                    
                <option value="<?php echo $Ordenes1->ID; ?>"><?php echo $Ordenes1->Folio . " " . $Ordenes1->Nproducto; ?></option>
        <?php } ?>
        </select>
        <?php
    }

    public function OrdenesSolicitadasB() {
        //Abriendo BD Sub-cliente
        $temp = 0;
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Ordenes");
        $Ordenes = $this->Ordenes->getInfOrdenB($Proyecto);
        ?>
        <select class="form-control" id="Orden" name="Orden"   required="required">
            <option value="">Selecciona</option>
        <?php foreach ($Ordenes as $Ordenes1) { ?>                    
                <option value="<?php echo $Ordenes1->ID; ?>"><?php echo $Ordenes1->Folio . " " . $Ordenes1->Nproducto; ?></option>
        <?php } ?>
        </select>
        <?php
    }

    public function Planeacion2() {
        $this->load->model("modelo", "datos");
        $Proyecto = $this->input->post('Proyecto');
        $Orden = $this->input->post('Orden');
        $Procedimiento = $this->input->post('Procedimiento');
        $indiceuser = $this->input->post('user');
        if ($Procedimiento == '1') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionTelido();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2_1';
            $this->_renderView($data);
        }
        if ($Procedimiento == '2') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionTelido();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Prendas");
            $Prendas = $this->Prendas->getPrendasAll();
            $data['Prendas'] = $Prendas;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2_2';
            $this->_renderView($data);
        }
        if ($Procedimiento == '3') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionTelido();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Producto");
            $Producto = $this->Producto->geProductosAll();
            $data['Producto'] = $Producto;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2_3';
            $this->_renderView($data);
        }
        if ($Procedimiento == '4') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionTelido();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2_4';
            $this->_renderView($data);
        }
        if ($Procedimiento == '5') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionTelido();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "MLienzo");
            $MLienzo = $this->MLienzo->getMLienzoAll();
            $data['MLienzo'] = $MLienzo;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2_5';
            $this->_renderView($data);
        }
        /* ?>if ($Procedimiento=='6'){
          //Cargando usuarios
          $this->load->model("modelo", "USUARIOS");
          $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
          $data['USUARIOS'] = $USUARIOS;
          $data['User'] = $indiceuser;
          //Abriendo BD cliente
          $this->load->model("modelo", "Proyectos");
          $Proyectos = $this->Proyectos->getProyectosAll();
          $data['Proyectos'] = $Proyectos;
          //Abriendo BD cliente
          $this->load->model("modelo", "cliente");
          $cliente = $this->cliente->getID_Cliente();
          $data['Cliente'] = $cliente;
          //Cargando usuarios
          $this->load->model("modelo", "Operacion");
          $Operacion = $this->Operacion->getOperacionTelido();
          $data['Operacion'] = $Operacion;
          //Cargando usuarios
          $this->load->model("modelo", "Material");
          $Material = $this->Material->getMaterialesAll();
          $data['Material'] = $Material;
          //Cargando usuarios
          $this->load->model("modelo", "Producto");
          $Producto = $this->Producto->geProductosAll();
          $data['Producto'] = $Producto;
          //Cargando usuarios
          $this->load->model("modelo", "InfOrden");
          $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
          $data['InfOrden'] = $InfOrden;
          $data['scripts'] = array('cliente');
          $data['contentView'] = 'Planeacion_2_6';
          $this->_renderView($data);
          }<?php */
    }

    public function Planeacion2_1() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Color = $this->input->post('Color');
        $Formula = $this->input->post('Formula');
        $PesoT = $this->input->post('PesoT');
        $CantidadCarga = $this->input->post('CantidadCarga');
        $Fibrologia = $this->input->post('Fibrologia');
        $TipoNylon = $this->input->post('TipoNylon');
        $TipoElastano = $this->input->post('TipoElastano');
        $TipoLicra = $this->input->post('TipoLicra');
        $OtrosHilos = $this->input->post('OtrosHilos');
        $Observaciones = $this->input->post('Observaciones');
        $datos = $this->datos->getPlaneacion2_1(
                $Orden, $Color, $Formula, $PesoT, $CantidadCarga, $Fibrologia, $TipoNylon, $TipoElastano, $TipoLicra, $OtrosHilos, $Observaciones
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Cargando usuarios
        $this->load->model("modelo", "Proyecto");
        $Proyecto = $this->Proyecto->getProyectosAll();
        $data['Proyecto'] = $Proyecto;
        //Cargando usuarios
        $this->load->model("modelo", "TipoP");
        $TipoP = $this->TipoP->getTipoP();
        $data['TipoP'] = $TipoP;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenALL();
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_2';
        $this->_renderView($data);
    }

    public function Planeacion2_2() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Proyecto = $this->input->post('Proyecto');
        $Orden = $this->input->post('Orden');
        $Prendas = $this->input->post('Prendas');
        $Medida1 = $this->input->post('Medida1');
        $Medida2 = $this->input->post('Medida2');
        $Medida3 = $this->input->post('Medida3');
        $Medida4 = $this->input->post('Medida4');
        $Medida5 = $this->input->post('Medida5');
        $datos = $this->datos->getPlaneacion2_2(
                $Proyecto, $Orden, $Prendas, $Medida1, $Medida2, $Medida3, $Medida4, $Medida5
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionTelido();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Prendas");
        $Prendas = $this->Prendas->getPrendasAll();
        $data['Prendas'] = $Prendas;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_2_2';
        $this->_renderView($data);
    }

    public function Planeacion2_3() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Producto = $this->input->post('Producto');
        $Cantidad = $this->input->post('Cantidad');
        $Unidad = $this->input->post('Unidad');
        $datos = $this->datos->getPlaneacion2_3(
                $Orden, $Proyecto, $Producto, $Cantidad, $Unidad
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionTelido();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Producto");
        $Producto = $this->Producto->geProductosAll();
        $data['Producto'] = $Producto;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_2_3';
        $this->_renderView($data);
    }

    public function Planeacion2_5() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Lienzo = $this->input->post('Lienzo');
        $Medidas = $this->input->post('Medidas');
        $datos = $this->datos->getPlaneacion2_5(
                $Proyecto, $Orden, $Lienzo, $Medidas
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionTelido();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "MLienzo");
        $MLienzo = $this->MLienzo->getMLienzoAll();
        $data['MLienzo'] = $MLienzo;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_2_5';
        $this->_renderView($data);
    }

    public function do_uploadPlaneacion2_4() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Npatron = $this->input->post('Npatron');
        $NamePatron = $this->input->post('NamePatron');
        $Autor = $this->input->post('Autor');
        $Fecha = $this->input->post('Fecha');
        $Numero = $Orden . "-" . $Npatron;
        $config['upload_path'] = $this->folder17;
        $config['allowed_types'] = 'zip|rar|pdf|docx|doc|xlsx|xls|txt|gif|jpg|png';
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $Numero;
        $config['max_size'] = '2048';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            if ($error['error'] == '<p>You did not select a file to upload.</p>') {
                echo '<script>alert("Se ha registrado su información con número de orden:\n' . $Numero . ' \n Sin archivo adjunto \n")</script>';
                $datos = $this->datos->getPlaneacion2_4(
                        $Orden, $Npatron, $NamePatron, $Autor, $Fecha, $Numero
                );
            } else {
                if ($error['error'] == '<p>The filetype you are attempting to upload is not allowed.</p>') {
                    echo '<script>alert("Error\n No se ha guardado su registro debido a que el tipo de archivo no es soportado")</script>';
                } else {
                    if ($error['error'] == '<p>The file you are attempting to upload is larger than the permitted size.</p>') {
                        echo '<script>alert("Error\n No se ha guardado su registro debido a que el archivo excede los 2MB")</script>';
                    } else {
                        echo '<script>alert("Error' . $error['error'] . ' \n")</script>';
                    }
                }
            }
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2';
            $this->_renderView($data);
        } else {
            $datos = $this->datos->getPlaneacion2_4(
                    $Orden, $Npatron, $NamePatron, $Autor, $Fecha, $Numero
            );
            echo '<script>alert("El documento ha sido registrado con número de patrón:\n' . $Numero . ' \n ")</script>';
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Cargando usuarios
            $this->load->model("modelo", "Proyecto");
            $Proyecto = $this->Proyecto->getProyectosAll();
            $data['Proyecto'] = $Proyecto;
            //Cargando usuarios
            $this->load->model("modelo", "TipoP");
            $TipoP = $this->TipoP->getTipoP();
            $data['TipoP'] = $TipoP;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenALL();
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_2';
            $this->_renderView($data);
        }
    }

    public function Planeacion3() {
        $this->load->model("modelo", "datos");
        $Proyecto = $this->input->post('Proyecto');
        $Orden = $this->input->post('Orden');
        $Procedimiento = $this->input->post('Procedimiento');
        $indiceuser = $this->input->post('user');
        if ($Procedimiento == '1') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionTelido();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Equipo");
            $Equipo = $this->Equipo->getEquipoAll();
            $data['Equipo'] = $Equipo;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_3_1';
            $this->_renderView($data);
        }
        if ($Procedimiento == '2') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Equipo");
            $Equipo = $this->Equipo->getEquipoAll();
            $data['Equipo'] = $Equipo;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionLavado();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_3_2';
            $this->_renderView($data);
        }
        if ($Procedimiento == '3') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Equipo");
            $Equipo = $this->Equipo->getEquipoAll();
            $data['Equipo'] = $Equipo;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionCostura();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_3_3';
            $this->_renderView($data);
        }
        if ($Procedimiento == '4') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Equipo");
            $Equipo = $this->Equipo->getEquipoAll();
            $data['Equipo'] = $Equipo;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionEmpaque();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_3_4';
            $this->_renderView($data);
        }
        if ($Procedimiento == '5') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $data['User'] = $indiceuser;
            //Abriendo BD cliente 
            $this->load->model("modelo", "Proyectos");
            $Proyectos = $this->Proyectos->getProyectosAll();
            $data['Proyectos'] = $Proyectos;
            //Abriendo BD cliente 
            $this->load->model("modelo", "cliente");
            $cliente = $this->cliente->getID_Cliente();
            $data['Cliente'] = $cliente;
            //Cargando usuarios
            $this->load->model("modelo", "Material");
            $Material = $this->Material->getMaterialesAll();
            $data['Material'] = $Material;
            //Cargando usuarios
            $this->load->model("modelo", "Equipo");
            $Equipo = $this->Equipo->getEquipoAll();
            $data['Equipo'] = $Equipo;
            //Cargando usuarios
            $this->load->model("modelo", "Operacion");
            $Operacion = $this->Operacion->getOperacionEntrega();
            $data['Operacion'] = $Operacion;
            //Cargando usuarios
            $this->load->model("modelo", "InfOrden");
            $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
            $data['InfOrden'] = $InfOrden;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Planeacion_3_5';
            $this->_renderView($data);
        }
    }

    public function Planeacion3_1() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Operacion = $this->input->post('Operacion');
        $Duracion = $this->input->post('Duracion');
        $Margen = $this->input->post('Margen');
        $UnitxHr = $this->input->post('UnitxHr');
        $UnitxDay = $this->input->post('UnitxDay');
        $Equipo = $this->input->post('Equipo');
        $EquipoUnit = $this->input->post('EquipoUnit');
        $EquipoTime = $this->input->post('EquipoTime');
        $Material1 = $this->input->post('Material');
        if (!empty($Material1)) {
            $Material = implode(',', $Material1);
        } else {
            $Material = 0;
        }
        $CantMat = $this->input->post('CantMat');
        $Registra1 = $this->input->post('Registra');
        if (!empty($Registra1)) {
            $Registra = implode(',', $Registra1);
        } else {
            $Registra = 0;
        }
        $Observaciones = $this->input->post('Observaciones');
        $datos = $this->datos->getPlaneacion3_1(
                $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionTelido();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipoAll();
        $data['Equipo'] = $Equipo;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_3_1';
        $this->_renderView($data);
    }

    public function Planeacion3_2() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Operacion = $this->input->post('Operacion');
        $Duracion = $this->input->post('Duracion');
        $Margen = $this->input->post('Margen');
        $UnitxHr = $this->input->post('UnitxHr');
        $UnitxDay = $this->input->post('UnitxDay');
        $Equipo = $this->input->post('Equipo');
        $EquipoUnit = $this->input->post('EquipoUnit');
        $EquipoTime = $this->input->post('EquipoTime');
        $Material1 = $this->input->post('Material');
        if (!empty($Material1)) {
            $Material = implode(',', $Material1);
        } else {
            $Material = 0;
        }
        $CantMat = $this->input->post('CantMat');
        $Registra1 = $this->input->post('Registra');
        if (!empty($Registra1)) {
            $Registra = implode(',', $Registra1);
        } else {
            $Registra = 0;
        }
        $Observaciones = $this->input->post('Observaciones');
        $datos = $this->datos->getPlaneacion3_2(
                $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipoAll();
        $data['Equipo'] = $Equipo;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionLavado();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_3_2';
        $this->_renderView($data);
    }

    public function Planeacion3_3() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Operacion = $this->input->post('Operacion');
        $Duracion = $this->input->post('Duracion');
        $Margen = $this->input->post('Margen');
        $UnitxHr = $this->input->post('UnitxHr');
        $UnitxDay = $this->input->post('UnitxDay');
        $Equipo = $this->input->post('Equipo');
        $EquipoUnit = $this->input->post('EquipoUnit');
        $EquipoTime = $this->input->post('EquipoTime');
        $Material1 = $this->input->post('Material');
        if (!empty($Material1)) {
            $Material = implode(',', $Material1);
        } else {
            $Material = 0;
        }
        $CantMat = $this->input->post('CantMat');
        $Registra1 = $this->input->post('Registra');
        if (!empty($Registra1)) {
            $Registra = implode(',', $Registra1);
        } else {
            $Registra = 0;
        }
        $Observaciones = $this->input->post('Observaciones');
        $datos = $this->datos->getPlaneacion3_3(
                $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipoAll();
        $data['Equipo'] = $Equipo;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionCostura();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_3_3';
        $this->_renderView($data);
    }

    public function Planeacion3_4() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Operacion = $this->input->post('Operacion');
        $Duracion = $this->input->post('Duracion');
        $Margen = $this->input->post('Margen');
        $UnitxHr = $this->input->post('UnitxHr');
        $UnitxDay = $this->input->post('UnitxDay');
        $Equipo = $this->input->post('Equipo');
        $EquipoUnit = $this->input->post('EquipoUnit');
        $EquipoTime = $this->input->post('EquipoTime');
        $Material1 = $this->input->post('Material');
        if (!empty($Material1)) {
            $Material = implode(',', $Material1);
        } else {
            $Material = 0;
        }
        $CantMat = $this->input->post('CantMat');
        $Registra1 = $this->input->post('Registra');
        if (!empty($Registra1)) {
            $Registra = implode(',', $Registra1);
        } else {
            $Registra = 0;
        }
        $Observaciones = $this->input->post('Observaciones');
        $datos = $this->datos->getPlaneacion3_4(
                $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipoAll();
        $data['Equipo'] = $Equipo;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionEmpaque();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_3_4';
        $this->_renderView($data);
    }

    public function Planeacion3_5() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Orden = $this->input->post('Orden');
        $Proyecto = $this->input->post('Proyecto');
        $Operacion = $this->input->post('Operacion');
        $Duracion = $this->input->post('Duracion');
        $Margen = $this->input->post('Margen');
        $UnitxHr = $this->input->post('UnitxHr');
        $UnitxDay = $this->input->post('UnitxDay');
        $Equipo = $this->input->post('Equipo');
        $EquipoUnit = $this->input->post('EquipoUnit');
        $EquipoTime = $this->input->post('EquipoTime');
        $Material1 = $this->input->post('Material');
        if (!empty($Material1)) {
            $Material = implode(',', $Material1);
        } else {
            $Material = 0;
        }
        $CantMat = $this->input->post('CantMat');
        $Registra1 = $this->input->post('Registra');
        if (!empty($Registra1)) {
            $Registra = implode(',', $Registra1);
        } else {
            $Registra = 0;
        }
        $Observaciones = $this->input->post('Observaciones');
        $datos = $this->datos->getPlaneacion3_5(
                $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosAll();
        $data['Proyectos'] = $Proyectos;
        //Abriendo BD cliente 
        $this->load->model("modelo", "cliente");
        $cliente = $this->cliente->getID_Cliente();
        $data['Cliente'] = $cliente;
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        $data['Material'] = $Material;
        //Cargando usuarios
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipoAll();
        $data['Equipo'] = $Equipo;
        //Cargando usuarios
        $this->load->model("modelo", "Operacion");
        $Operacion = $this->Operacion->getOperacionEntrega();
        $data['Operacion'] = $Operacion;
        //Cargando usuarios
        $this->load->model("modelo", "InfOrden");
        $InfOrden = $this->InfOrden->getInfOrdenID($Orden);
        $data['InfOrden'] = $InfOrden;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion_3_5';
        $this->_renderView($data);
    }

    public function UProducto() {
        $Producto = $_POST["Producto"];
        $this->load->model("modelo", "Productos");
        $Productos = $this->Productos->getProductosFolio($Producto);
        foreach ($Productos as $Productos1) {
            
        }
        $Unit = $Productos1->UnidadMedida;
        ?>
        <input type="text" class="form-control" name="SegmentoD" id="SegmentoD" value="<?php echo $Unit; ?>" readonly="readonly">
        <?php
    }

    public function FolioProd() {
        $Proyecto = $_POST["Proyecto"];
        //Abriendo BD cliente 
        $this->load->model("modelo", "Proyectos");
        $Proyectos = $this->Proyectos->getProyectosID($Proyecto);

        foreach ($Proyectos as $Proyectos1) {
            
        }
        $Folio = $Proyectos1->Folio;
        ?>
        <input type="text" class="form-control" name="Folio" id="Folio" value="<?php echo $Folio; ?>" readonly="readonly">
        <?php
    }

    public function Planeacion4() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Ninventario = $this->input->post('Ninventario');
        $Fecha = $this->input->post('Fecha');
        $Nalmacen = $this->input->post('Nalmacen');
        $Denominacion = $this->input->post('Denominacion');
        $datos = $this->datos->getPlaneacion4(
                $Ninventario, $Fecha, $Nalmacen, $Denominacion
        );

        echo '<script>alert("Se ha guardado la información")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion';
        $this->_renderView($data);
    }

    public function InfoRegistro() {
        $indice = $_POST["indice"];
        $Proyecto = $_POST["Proyecto"];
        $Orden = $_POST["Orden"];
        $this->load->model("modelo", "General");
        $where = '';
        //Cargando usuarios
        $this->load->model("modelo", "Proyec");
        $Proyec = $this->Proyec->getProyectosID($Proyecto);
        //Cargando usuarios
        $this->load->model("modelo", "InfoRegis");
        $InfoRegis = $this->InfoRegis->getInfoRegis($Proyecto, $Orden);
        $this->load->model("modelo", "cliente");
        $Cliente = $this->cliente->getID_Cliente();
        //Cargando usuarios
        $this->load->model("modelo", "FormaEnt");
        $FormaEnt = $this->FormaEnt->getFormaEnt();
        //Cargando usuarios
        $this->load->model("modelo", "Grupo");
        $Grupo = $this->Grupo->getGrupo();
        //Cargando usuarios
        $this->load->model("modelo", "Genero");
        $Genero = $this->Genero->getGenero();
        //Cargando usuarios
        $this->load->model("modelo", "Posicion");
        $Posicion = $this->Posicion->getPosicion();
        //Cargando usuarios
        $this->load->model("modelo", "Poblacion");
        $Poblacion = $this->Poblacion->getPoblacion();
        //Cargando usuarios
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUso();
        //Cargando usuarios
        $this->load->model("modelo", "Temporada");
        $Temporada = $this->Temporada->getTemporada();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        //Cargando usuarios
        $this->load->model("modelo", "Modalidad");
        $Modalidad = $this->Modalidad->getModalidadPro();
        //Cargando usuarios
        $this->load->model("modelo", "FormaPago");
        $FormaPago = $this->FormaPago->getFormaPagoPro();
        //Cargando usuarios
        $this->load->model("modelo", "PrendasMedidas");
        $PrendasMedidas = $this->PrendasMedidas->getPrendasMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Prendas");
        $Prendas = $this->Prendas->getPrendasAll();
        //Cargando usuarios
        $this->load->model("modelo", "LienzoCrudo");
        $LienzoCrudo = $this->LienzoCrudo->getLienzoMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Lienzo");
        $Lienzo = $this->Lienzo->getMLienzoAll();
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialUsar($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Productos");
        $Productos = $this->Productos->getProductosAll();
        //Cargando usuarios
        $this->load->model("modelo", "Catalogo");
        $Catalogo = $this->Catalogo->getCatalogoMayor();
        $this->load->model("modelo", "Operaciones");
        $Operaciones = $this->Operaciones->getOperacionesAll();
        ?>
        <table width="100%" border="1" bordercolor="#9c9a9a">
        <?php foreach ($Proyec as $Proyec1)
            
            ?>
            <tr>
                <td bgcolor="#809982">
                    <div class="col-md-12 col-xs-12" align="center" style="color:#ffffff">
        <?php echo $Proyec1->Proyecto; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Nombre del cliente: "; ?>
                        <?php
                        foreach ($Cliente as $temp1) {
                            if ($temp1->Folio == $Proyec1->Cliente) {
                                $resp = $temp1->NombreC;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Nombre de cadena: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Ncadena; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Ubicación de cadena: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Ucadena; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
        <?php echo "Fecha de solicitud: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Solicitud; ?></strong>
                    </div>

                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
        <?php echo "Fecha de entrega: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Fentrega; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Número del producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Numero; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Forma de entrega: "; ?>
                        <?php
                        foreach ($FormaEnt as $temp1) {
                            if ($temp1->id_forma == $Proyec1->FormaEnt) {
                                $resp = $temp1->dsc_forma;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Lugar de entrega: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Calle; ?></strong>
                    </div>
                </td>
            </tr>
            <?php
            foreach ($InfoRegis as $InfoRegis1)
                $ID = $InfoRegis1->ID;
            ?>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Pedido del producto
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Nombre del producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Nproducto; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Número del producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Folio; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Grupo: "; ?>
                        <?php
                        foreach ($Grupo as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Grupo) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Género: "; ?>
                        <?php
                        foreach ($Genero as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Genero) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Posición: "; ?>
                        <?php
                        foreach ($Posicion as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Posicion) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Población: "; ?>
                        <?php
                        foreach ($Poblacion as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Poblacion) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Uso: "; ?>
                        <?php
                        foreach ($Uso as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Uso) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Temporada: "; ?>
                        <?php
                        foreach ($Temporada as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Temporada) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Colección: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Coleccion; ?></strong>
        <?php echo "</p>"; ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "</p>";
                        $unidades = $InfoRegis1->UnidadesXS + $InfoRegis1->UnidadesS + $InfoRegis1->UnidadesM + $InfoRegis1->UnidadesL + $InfoRegis1->UnidadesXL;

                        if (!empty($InfoRegis1->UnidadesXS)) {
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Unidades talla XS: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesXS; ?> </strong>    </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUXS; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTXS; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldXS; ?> </strong>
                            </div><?php
                        }
                        if (!empty($InfoRegis1->UnidadesS)) {
                            echo "</p>";
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Unidades talla S: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesS; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUS; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTS; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldS; ?> </strong>
                            </div><?php
                        }
                        if (!empty($InfoRegis1->UnidadesM)) {
                            echo "</p>";
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Unidades talla M: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesM; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUM; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTM; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldM; ?> </strong>
                            </div><?php
                        }
                        if (!empty($InfoRegis1->UnidadesL)) {
                            echo "</p>";
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Unidades talla L: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesL; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUL; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTL; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldL; ?> </strong>
                            </div><?php
                        }
                        if (!empty($InfoRegis1->UnidadesXL)) {
                            echo "</p>";
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Unidades talla XL: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesXL; ?> </strong>			    </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUXL; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTXL; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldXL; ?> </strong>
                            </div><?php }
            ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Solicita: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Solicita; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Registró el pedido: "; ?>
                        <?php
                        foreach ($USUARIOS as $temp1) {
                            if ($temp1->Id == $InfoRegis1->Registra) {
                                $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Número de piezas: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Piezas; ?></strong>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Producto(s): "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Productos; ?></strong>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->TipoProducto; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Código de barras: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->CDBarras; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12"> 
                        <?php
                        $nombre = $InfoRegis1->Numero;
                        $files = get_filenames($this->folder16, FALSE);
                        foreach ($files as $file) {
                            $ext = substr($file, strpos($file, ".") + strlen("."));
                            $name = substr($file, 0, strpos($file, "."));
                            if ($name == $nombre) {
                                if ($ext == 'pdf' || $ext == 'PDF') {
                                    ?> 
                                    <div class="col-md-12 col-xs-12"> 
                                        <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/pdf.png" width="30" height="30" /></button>
                                    </div>
                                    <?php
                                } else {
                                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG') {
                                        ?> 
                                        <div class="col-md-12 col-xs-12"> 
                                            <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/imagen.png" width="30" height="30" /></button>
                                        </div>
                                        <?php
                                    } else {
                                        if ($ext == 'zip' || $ext == 'rar') {
                                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/zip.png" width="30" height="30" /></button>
                                            </div>
                        <?php } else {
                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/Folder.png" width="30" height="30" /></button>
                                            </div>
                                        <?php
                                        }
                                    }
                                }
                            }
                        }
                        ?>

                    </div>
                </td>
            </tr>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Información del diseño
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php echo "Color: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Color; ?></strong>
                    </div>
                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
        <?php echo "Fórmula de color: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Formula; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Peso terminado en seco: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->PesoT; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Cantidad por carga: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->CantidadCarga; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Fibrología: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Fibrologia; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de Nylon: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->TipoNylon; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de Elastano: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->TipoElastano; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de licra: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->TipoLicra; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Otros Hilos: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->OtrosHilos; ?></strong>
                    </div>
                </td>
            </tr>
                        <?php if (!empty($InfoRegis1->Observaciones)) { ?>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $InfoRegis1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
        <?php } ?>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Medidas por partes de prenda
                    </div>
                </td>
            </tr>
                        <?php foreach ($PrendasMedidas as $PrendasMedidas1) { ?>
                <tr>
                    <td>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php
                            foreach ($Prendas as $temp1) {
                                if ($temp1->id_prenda == $PrendasMedidas1->Prenda) {
                                    $resp = $temp1->dsc_prenda;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php echo "Medida 1: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida1; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php echo "Medida 2: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida2; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php echo "Medida 3: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida3; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php echo "Medida 4: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida4; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medida 5: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida5; ?></strong>
                        </div>
                    </td>
                </tr>
        <?php } ?>    
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Medidas de lienzo en crudo
                    </div>
                </td>
            </tr>
                        <?php foreach ($LienzoCrudo as $LienzoCrudo1) { ?>
                <tr>
                    <td>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php
                            foreach ($Lienzo as $temp1) {
                                if ($temp1->id_lienzo == $LienzoCrudo1->Lienzo) {
                                    $resp = $temp1->dsc_lienzo;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medidas: "; ?>
                            <strong style="color:#ff6600"><?php echo $LienzoCrudo1->Medidas; ?></strong>
                        </div>
                    </td>
                </tr>
        <?php } ?>    
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Patrón
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Número de patrón: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Npatron; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Nombre del patrón: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->NamePatron; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Autor: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Autor; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Fecha: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Fecha; ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="col-md-4 col-xs-12"> 
                        <?php
                        $nombre = $InfoRegis1->Archivo;
                        $files = get_filenames($this->folder17, FALSE);
                        foreach ($files as $file) {
                            $ext = substr($file, strpos($file, ".") + strlen("."));
                            $name = substr($file, 0, strpos($file, "."));
                            if ($name == $nombre) {
                                if ($ext == 'pdf' || $ext == 'PDF') {
                                    ?> 
                                    <div class="col-md-12 col-xs-12"> 
                                        <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/pdf.png" width="30" height="30" /></button>
                                    </div>
                                    <?php
                                } else {
                                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG') {
                                        ?> 
                                        <div class="col-md-12 col-xs-12"> 
                                            <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/imagen.png" width="30" height="30" /></button>
                                        </div>
                                        <?php
                                    } else {
                                        if ($ext == 'zip' || $ext == 'rar') {
                                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/zip.png" width="30" height="30" /></button>
                                            </div>
                        <?php } else {
                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/Folder.png" width="30" height="30" /></button>
                                            </div>
                                        <?php
                                        }
                                    }
                                }
                            }
                        }
                        ?>

                    </div>
                </td>
            </tr>


            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Material a utilizar
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff">
                        <strong style="color:#ff6600">Operación</strong>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <strong style="color:#ff6600">Material</strong>
                    </div>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                        <strong style="color:#ff6600">Cantidad</strong>
                    </div>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                        <strong style="color:#ff6600">Unidad</strong align="center">
                    </div>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                        <strong style="color:#ff6600">Total</strong>
                    </div>
                </td>
            </tr>
            <?php
            foreach ($Material as $Material1) {
                $arreglo = explode(',', $Material1->Material);
                $n = count($arreglo);
                $arreglo2 = explode(',', $Material1->CantMat);
                $n2 = count($arreglo2);
                if ($n > $n2) {
                    $R = $n;
                } else {
                    $R = $n2;
                }
                for ($i = 0; $i < $R; $i++) {
                    ?>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff">
                                <?php
                                $operacion = '-';
                                foreach ($Operaciones as $temp1) {
                                    if ($temp1->id_Operacion == $Material1->Operacion) {
                                        $operacion = $temp1->dsc_Operacion;
                                    }
                                }
                                ?>
                                <strong style="color:#c0c0bf"><?php echo $operacion; ?></strong>
                            </div>
                            <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php
                                $resp = '-';
                                foreach ($Productos as $temp1) {
                                    if ($temp1->Folio == $arreglo[$i]) {
                                        $resp = $temp1->Producto . " " . $temp1->Marca . " " . $temp1->UnidadMedida;
                                    }
                                }
                                ?>
                                <strong style="color:#c0c0bf"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                <strong style="color:#c0c0bf"><?php echo number_format($arreglo2[$i], 2, '.', ','); ?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                <strong style="color:#c0c0bf"><?php echo number_format($unidades, 2, '.', ','); ?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                <?php $Total = $arreglo2[$i] * $unidades;
                ?>
                                <strong style="color:#c0c0bf"><?php echo number_format($Total, 2, '.', ','); ?></strong>
                            </div>
                        </td>
                    </tr>
            <?php } ?>
        <?php } ?>

        </table>


        <input type="hidden" name="Orden" id="Orden"  value="<?php echo $ID ?>">
        <table>
            <tr>
                <td>  
                    <div class="col-md-12 col-xs-12">
                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Motivo" name="Motivo" rows="5" cols="70%" class="form-control"></textarea>  
                    </div>
                </td>
            </tr>
            <tr>
                <td>  
                    <div class="col-md-12 col-xs-12">
                        <blockquote>
                            <br>
                            <input type="radio" value="Sí" name="Aprobar" id="Aprobar" required/> Aprobar
                            <br>
                            <input type="radio" value="No" name="Aprobar" id="Aprobar" required/> No aprobar
                            <br>
                        </blockquote>   
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                    </div>
                </td>
            </tr>

        </table>
        <?php
    }

    public function InfoRegistroA() {
        $indice = $_POST["indice"];
        $Proyecto = $_POST["Proyecto"];
        $Orden = $_POST["Orden"];
        $this->load->model("modelo", "General");
        $where = '';
        //Cargando usuarios
        $this->load->model("modelo", "Proyec");
        $Proyec = $this->Proyec->getProyectosID($Proyecto);
        //Cargando usuarios
        $this->load->model("modelo", "InfoRegis");
        $InfoRegis = $this->InfoRegis->getInfoRegis($Proyecto, $Orden);
        $this->load->model("modelo", "cliente");
        $Cliente = $this->cliente->getID_Cliente();
        //Cargando usuarios
        $this->load->model("modelo", "FormaEnt");
        $FormaEnt = $this->FormaEnt->getFormaEnt();
        //Cargando usuarios
        $this->load->model("modelo", "Grupo");
        $Grupo = $this->Grupo->getGrupo();
        //Cargando usuarios
        $this->load->model("modelo", "Genero");
        $Genero = $this->Genero->getGenero();
        //Cargando usuarios
        $this->load->model("modelo", "Posicion");
        $Posicion = $this->Posicion->getPosicion();
        //Cargando usuarios
        $this->load->model("modelo", "Poblacion");
        $Poblacion = $this->Poblacion->getPoblacion();
        //Cargando usuarios
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUso();
        //Cargando usuarios
        $this->load->model("modelo", "Temporada");
        $Temporada = $this->Temporada->getTemporada();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        //Cargando usuarios
        $this->load->model("modelo", "Modalidad");
        $Modalidad = $this->Modalidad->getModalidadPro();
        //Cargando usuarios
        $this->load->model("modelo", "FormaPago");
        $FormaPago = $this->FormaPago->getFormaPagoPro();
        //Cargando usuarios
        $this->load->model("modelo", "PrendasMedidas");
        $PrendasMedidas = $this->PrendasMedidas->getPrendasMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Prendas");
        $Prendas = $this->Prendas->getPrendasAll();
        //Cargando usuarios
        $this->load->model("modelo", "LienzoCrudo");
        $LienzoCrudo = $this->LienzoCrudo->getLienzoMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Lienzo");
        $Lienzo = $this->Lienzo->getMLienzoAll();
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialUsar($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Productos");
        $Productos = $this->Productos->getProductosAll();
        //Cargando usuarios
        $this->load->model("modelo", "Catalogo");
        $Catalogo = $this->Catalogo->getCatalogoMayor();
        $this->load->model("modelo", "Operaciones");
        $Operaciones = $this->Operaciones->getOperacionesAll();
        ?>
        <table width="100%" border="1" bordercolor="#9c9a9a">
                        <?php foreach ($Proyec as $Proyec1)
                            
                            ?>
            <tr>
                <td bgcolor="#809982">
                    <div class="col-md-12 col-xs-12" align="center" style="color:#ffffff">
        <?php echo $Proyec1->Proyecto; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Nombre del cliente: "; ?>
                        <?php
                        foreach ($Cliente as $temp1) {
                            if ($temp1->Folio == $Proyec1->Cliente) {
                                $resp = $temp1->NombreC;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Nombre de cadena: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Ncadena; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Ubicación de cadena: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Ucadena; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php echo "Fecha de solicitud: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Solicitud; ?></strong>
                    </div>

                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
        <?php echo "Fecha de entrega: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Fentrega; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Número del producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Numero; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Forma de entrega: "; ?>
                        <?php
                        foreach ($FormaEnt as $temp1) {
                            if ($temp1->id_forma == $Proyec1->FormaEnt) {
                                $resp = $temp1->dsc_forma;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
            <?php echo "Lugar de entrega: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Calle; ?></strong>
                    </div>
                </td>
            </tr>
        <?php
        foreach ($InfoRegis as $InfoRegis1)
            $ID = $InfoRegis1->ID;
        ?>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Pedido del producto
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Nombre del producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Nproducto; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Número del producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Folio; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php
                        $resp = '-';
                        echo "Grupo: ";
                        ?>
                        <?php
                        foreach ($Grupo as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Grupo) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php
                        $resp = '-';
                        echo "Género: ";
                        ?>
                        <?php
                        foreach ($Genero as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Genero) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php
                        $resp = '-';
                        echo "Posición: ";
                        ?>
                        <?php
                        foreach ($Posicion as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Posicion) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php
                        $resp = '-';
                        echo "Población: ";
                        ?>
        <?php
        foreach ($Poblacion as $temp1) {
            if ($temp1->id_concepto == $InfoRegis1->Poblacion) {
                $resp = $temp1->dsc_concepto;
            }
        }
        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php
                        $resp = '-';
                        echo "Uso: ";
                        ?>
                        <?php
                        foreach ($Uso as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Uso) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php
                        $resp = '-';
                        echo "Temporada: ";
                        ?>
                        <?php
                        foreach ($Temporada as $temp1) {
                            if ($temp1->id_concepto == $InfoRegis1->Temporada) {
                                $resp = $temp1->dsc_concepto;
                            }
                        }
                        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
        <?php echo "</p>"; ?>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Colección: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Coleccion; ?></strong>
                        <?php echo "</p>"; ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "</p>";
                        $unidades = $InfoRegis1->UnidadesXS + $InfoRegis1->UnidadesS + $InfoRegis1->UnidadesM + $InfoRegis1->UnidadesL + $InfoRegis1->UnidadesXL;

                        if (!empty($InfoRegis1->UnidadesXS)) {
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Unidades talla XS: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesXS; ?> </strong>    </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUXS; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTXS; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldXS; ?> </strong>
                            </div><?php
                            }
                            if (!empty($InfoRegis1->UnidadesS)) {
                                echo "</p>";
                                ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                                echo "Unidades talla S: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesS; ?> </strong>
                            </div><?php
                                ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUS; ?> </strong>
                            </div><?php
                                ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTS; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldS; ?> </strong>
                            </div><?php
                }
                if (!empty($InfoRegis1->UnidadesM)) {
                    echo "</p>";
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Unidades talla M: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesM; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                                echo "Precio unitario: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUM; ?> </strong>
                            </div><?php
                                ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTM; ?> </strong>
                            </div><?php
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Color: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldM; ?> </strong>
                            </div><?php
                }
                if (!empty($InfoRegis1->UnidadesL)) {
                    echo "</p>";
                    ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                                echo "Unidades talla L: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesL; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Precio unitario: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUL; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                            echo "Precio total: ";
                            ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTL; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                                echo "Color: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldL; ?> </strong>
                            </div><?php
                        }
                        if (!empty($InfoRegis1->UnidadesXL)) {
                            echo "</p>";
                            ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                                echo "Unidades talla XL: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->UnidadesXL; ?> </strong>			    </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                    echo "Precio unitario: ";
                                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PUXL; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                echo "Precio total: ";
                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->PTXL; ?> </strong>
                            </div><?php ?> <div class="col-md-3 col-xs-12" style="color:#ffffff"> <?php
                echo "Color: ";
                ?>	<strong style="color:#ff6600"><?php echo $InfoRegis1->myFieldXL; ?> </strong>
                            </div><?php }
            ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Solicita: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Solicita; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Registró el pedido: "; ?>
        <?php
        foreach ($USUARIOS as $temp1) {
            if ($temp1->Id == $InfoRegis1->Registra) {
                $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
            }
        }
        ?>
                        <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Número de piezas: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Piezas; ?></strong>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
        <?php echo "Producto(s): "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->Productos; ?></strong>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Tipo de producto: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->TipoProducto; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Código de barras: "; ?>
                        <strong style="color:#ff6600"><?php echo $Proyec1->CDBarras; ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="col-md-4 col-xs-12"> 
                        <?php
                        $nombre = $InfoRegis1->Numero;
                        $files = get_filenames($this->folder16, FALSE);
                        foreach ($files as $file) {
                            $ext = substr($file, strpos($file, ".") + strlen("."));
                            $name = substr($file, 0, strpos($file, "."));
                            if ($name == $nombre) {
                                if ($ext == 'pdf' || $ext == 'PDF') {
                                    ?> 
                                    <div class="col-md-12 col-xs-12"> 
                                        <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/pdf.png" width="30" height="30" /></button>
                                    </div>
                                    <?php
                                } else {
                                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG') {
                                        ?> 
                                        <div class="col-md-12 col-xs-12"> 
                                            <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/imagen.png" width="30" height="30" /></button>
                                        </div>
                                        <?php
                                    } else {
                                        if ($ext == 'zip' || $ext == 'rar') {
                                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/zip.png" width="30" height="30" /></button>
                                            </div>
                                        <?php } else {
                                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Productos/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/Folder.png" width="30" height="30" /></button>
                                            </div>
                        <?php
                        }
                    }
                }
            }
        }
        ?>

                    </div>
                </td>
            </tr>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Información del diseño
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
        <?php echo "Color: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Color; ?></strong>
                    </div>
                    <div class="col-md-6 col-xs-12" style="color:#ffffff">
        <?php echo "Fórmula de color: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Formula; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Peso terminado en seco: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->PesoT; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Cantidad por carga: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->CantidadCarga; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Fibrología: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Fibrologia; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de Nylon: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->TipoNylon; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de Elastano: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->TipoElastano; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Tipo de licra: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->TipoLicra; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Otros Hilos: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->OtrosHilos; ?></strong>
                    </div>
                </td>
            </tr>
            <?php if (!empty($InfoRegis1->Observaciones)) { ?>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $InfoRegis1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
        <?php } ?>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Medidas por partes de prenda
                    </div>
                </td>
            </tr>
                        <?php foreach ($PrendasMedidas as $PrendasMedidas1) { ?>
                <tr>
                    <td>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php
                            foreach ($Prendas as $temp1) {
                                if ($temp1->id_prenda == $PrendasMedidas1->Prenda) {
                                    $resp = $temp1->dsc_prenda;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medida 1: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida1; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medida 2: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida2; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medida 3: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida3; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                <?php echo "Medida 4: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida4; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medida 5: "; ?>
                            <strong style="color:#ff6600"><?php echo $PrendasMedidas1->Medida5; ?></strong>
                        </div>
                    </td>
                </tr>
        <?php } ?>    
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Medidas de lienzo en crudo
                    </div>
                </td>
            </tr>
                        <?php foreach ($LienzoCrudo as $LienzoCrudo1) { ?>
                <tr>
                    <td>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
                            <?php
                            foreach ($Lienzo as $temp1) {
                                if ($temp1->id_lienzo == $LienzoCrudo1->Lienzo) {
                                    $resp = $temp1->dsc_lienzo;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-2 col-xs-12" style="color:#ffffff">
            <?php echo "Medidas: "; ?>
                            <strong style="color:#ff6600"><?php echo $LienzoCrudo1->Medidas; ?></strong>
                        </div>
                    </td>
                </tr>
        <?php } ?>    
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Patrón
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Número de patrón: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Npatron; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Nombre del patrón: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->NamePatron; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
        <?php echo "Autor: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Autor; ?></strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        <?php echo "Fecha: "; ?>
                        <strong style="color:#ff6600"><?php echo $InfoRegis1->Fecha; ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="col-md-4 col-xs-12"> 
        <?php
        $nombre = $InfoRegis1->Archivo;
        $files = get_filenames($this->folder17, FALSE);
        foreach ($files as $file) {
            $ext = substr($file, strpos($file, ".") + strlen("."));
            $name = substr($file, 0, strpos($file, "."));
            if ($name == $nombre) {
                if ($ext == 'pdf' || $ext == 'PDF') {
                    ?> 
                                    <div class="col-md-12 col-xs-12"> 
                                        <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/pdf.png" width="30" height="30" /></button>
                                    </div>
                                    <?php
                                } else {
                                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG') {
                                        ?> 
                                        <div class="col-md-12 col-xs-12"> 
                                            <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/imagen.png" width="30" height="30" /></button>
                                        </div>
                        <?php
                    } else {
                        if ($ext == 'zip' || $ext == 'rar') {
                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/zip.png" width="30" height="30" /></button>
                                            </div>
                                        <?php } else {
                                            ?> 
                                            <div class="col-md-12 col-xs-12"> 
                                                <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Patrones/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/Folder.png" width="30" height="30" /></button>
                                            </div>
                        <?php
                        }
                    }
                }
            }
        }
        ?>

                    </div>
                </td>
            </tr>


            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Material a utilizar
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff">
                        <strong style="color:#ff6600">Operación</strong>
                    </div>
                    <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <strong style="color:#ff6600">Material</strong>
                    </div>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                        <strong style="color:#ff6600">Cantidad</strong>
                    </div>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                        <strong style="color:#ff6600">Unidad</strong align="center">
                    </div>
                    <div class="col-md-2 col-xs-12" style="color:#ffffff" align="center">
                        <strong style="color:#ff6600">Total</strong>
                    </div>
                </td>
            </tr>
            <?php
            foreach ($Material as $Material1) {
                $arreglo = explode(',', $Material1->Material);
                $n = count($arreglo);
                $arreglo2 = explode(',', $Material1->CantMat);
                $n2 = count($arreglo2);
                if ($n > $n2) {
                    $R = $n;
                } else {
                    $R = $n2;
                }
                for ($i = 0; $i < $R; $i++) {
                    ?>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff">
                                <?php
                                $operacion = '-';
                                foreach ($Operaciones as $temp1) {
                                    if ($temp1->id_Operacion == $Material1->Operacion) {
                                        $operacion = $temp1->dsc_Operacion;
                                    }
                                }
                                ?>
                                <strong style="color:#c0c0bf"><?php echo $operacion; ?></strong>
                            </div>
                            <div class="col-md-4 col-xs-12" style="color:#ffffff">
                <?php
                $resp = '-';
                foreach ($Productos as $temp1) {
                    if ($temp1->Folio == $arreglo[$i]) {
                        $resp = $temp1->Producto . " " . $temp1->Marca . " " . $temp1->UnidadMedida;
                    }
                }
                ?>
                                <strong style="color:#c0c0bf"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                <strong style="color:#c0c0bf"><?php echo number_format($arreglo2[$i], 2, '.', ','); ?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                                <strong style="color:#c0c0bf"><?php echo number_format($unidades, 2, '.', ','); ?></strong>
                            </div>
                            <div class="col-md-2 col-xs-12" style="color:#ffffff" align="right">
                <?php $Total = $arreglo2[$i] * $unidades;
                ?>
                                <strong style="color:#c0c0bf"><?php echo number_format($Total, 2, '.', ','); ?></strong>
                            </div>
                        </td>
                    </tr>
            <?php } ?>
        <?php } ?>

        </table>

        <table width="100%">    
            <tr>
                <td width="80%">    
                </td>
                <td width="20%" align="right">    
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/PDFDesign?ID=<?php echo $ID ?>&i=<?php echo $indice ?>'">Ver PDF</button>
                </td>
            </tr>
        </table>


        <?php
    }

    public function InfoRegistro2() {
        $Proyecto = $_POST["Proyecto"];
        $Orden = $_POST["Orden"];
        $this->load->model("modelo", "General");
        $where = '';
        //Cargando usuarios
        $this->load->model("modelo", "Proyec");
        $Proyec = $this->Proyec->getProyectosID($Proyecto);
        //Cargando usuarios
        $this->load->model("modelo", "InfoRegis");
        $InfoRegis = $this->InfoRegis->getInfoRegis($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "cliente");
        $Cliente = $this->cliente->getID_Cliente();
        //Cargando usuarios
        $this->load->model("modelo", "FormaEnt");
        $FormaEnt = $this->FormaEnt->getFormaEnt();
        //Cargando usuarios
        $this->load->model("modelo", "Grupo");
        $Grupo = $this->Grupo->getGrupo();
        //Cargando usuarios
        $this->load->model("modelo", "Genero");
        $Genero = $this->Genero->getGenero();
        //Cargando usuarios
        $this->load->model("modelo", "Posicion");
        $Posicion = $this->Posicion->getPosicion();
        //Cargando usuarios
        $this->load->model("modelo", "Poblacion");
        $Poblacion = $this->Poblacion->getPoblacion();
        //Cargando usuarios
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUso();
        //Cargando usuarios
        $this->load->model("modelo", "Temporada");
        $Temporada = $this->Temporada->getTemporada();
        //Cargando usuarios
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        //Cargando usuarios
        $this->load->model("modelo", "Modalidad");
        $Modalidad = $this->Modalidad->getModalidadPro();
        //Cargando usuarios
        $this->load->model("modelo", "FormaPago");
        $FormaPago = $this->FormaPago->getFormaPagoPro();
        //Cargando usuarios
        $this->load->model("modelo", "PrendasMedidas");
        $PrendasMedidas = $this->PrendasMedidas->getPrendasMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Prendas");
        $Prendas = $this->Prendas->getPrendasAll();
        //Cargando usuarios
        $this->load->model("modelo", "LienzoCrudo");
        $LienzoCrudo = $this->LienzoCrudo->getLienzoMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Lienzo");
        $Lienzo = $this->Lienzo->getMLienzoAll();
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialUsar($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Catalogo");
        $Catalogo = $this->Catalogo->geProductosAll();
        //Cargando usuarios
        $this->load->model("modelo", "Tejido");
        $Tejido = $this->Tejido->getTejidoAll($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "OperTejido");
        $OperTejido = $this->OperTejido->getOperTejido();
        //Cargando usuarios
        $this->load->model("modelo", "Equipo");
        $Equipo = $this->Equipo->getEquipoAll();
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialesAll();
        //Cargando usuarios
        $this->load->model("modelo", "Lavado");
        $Lavado = $this->Lavado->getLavadoAll($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "OperLavado");
        $OperLavado = $this->OperLavado->getOperLavado();
        //Cargando usuarios
        $this->load->model("modelo", "Costura");
        $Costura = $this->Costura->getCosturaAll($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "OperCostura");
        $OperCostura = $this->OperCostura->getOperCostura();
        //Cargando usuarios
        $this->load->model("modelo", "Empaque");
        $Empaque = $this->Empaque->getEmpaqueAll($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "OperEmpaque");
        $OperEmpaque = $this->OperEmpaque->getOperEmpaque();
        //Cargando usuarios
        $this->load->model("modelo", "Entrega");
        $Entrega = $this->Entrega->getEntregaAll($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "OperEntrega");
        $OperEntrega = $this->OperEntrega->getOperEntrega();
        ?>
        <table width="100%" border="1" bordercolor="#9c9a9a">
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Tejido
                    </div>
                </td>
            </tr>
                        <?php foreach ($Tejido as $Tejido1) { ?>
                <tr>
                    <td bgcolor="#535357">
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
            <?php echo "Operación: "; ?>
            <?php
            foreach ($OperTejido as $temp1) {
                if ($temp1->id_Operacion == $Tejido1->Operacion) {
                    $resp = $temp1->dsc_Operacion;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Duración(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Duracion; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Margen(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Margen; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Productividad por hora: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxHr; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por día:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxDay; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
            <?php
            $resp = '-';
            echo "Equipo: ";
            ?>
            <?php
            foreach ($Equipo as $temp1) {
                if ($temp1->ID == $Tejido1->Equipo) {
                    $resp = $temp1->Nombre . " " . $temp1->Marca . " " . $temp1->Modelo;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
            <?php echo "Unidades por ciclo:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoUnit; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php echo "Tiempo de uso del equipo(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoTime; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "Material: ";
                        $resp = '-';
                        ?>    
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php echo "Cantidad: "; ?> 
                            </div>
                        </div><?php
                            $arreglo = explode(',', $Tejido1->Material);
                            $n = count($arreglo);
                            $arreglo2 = explode(',', $Tejido1->CantMat);
                            $n2 = count($arreglo2);
                            if ($n > $n2) {
                                $R = $n;
                            } else {
                                $R = $n2;
                            }
                            ?>
            <?php for ($i = 0; $i < $R; $i++) { ?>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php
                            foreach ($Material as $temp1) {
                                if ($temp1->Folio == $arreglo[$i]) {
                                    $resp = $temp1->Producto;
                                }
                            }
                            ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600"><?php echo $arreglo2[$i]; ?></strong>
                            </div>
            <?php } ?>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Responsables: "; ?>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" align="right" style="color:#ffffff">
                            <?php
                            $arreglo3 = explode(',', $Tejido1->Registra);
                            $p = count($arreglo3);
                            $resp = '-';
                            ?>
            <?php for ($i = 0; $i < $p; $i++) { ?>
                    <?php
                    foreach ($USUARIOS as $temp1) {
                        if ($temp1->Id == $arreglo3[$i]) {
                            $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
                        }
                    }
                    ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                <?php echo "</p>"; ?>
            <?php } ?> 
                        </div>
                    </td>
                </tr>
        <?php } ?>


            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Lavado y teñido
                    </div>
                </td>
            </tr>
                        <?php foreach ($Lavado as $Tejido1) { ?>
                <tr>
                    <td bgcolor="#535357">
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
            <?php
            $resp = '-';
            echo "Operación: ";
            ?>
                            <?php
                            foreach ($OperLavado as $temp1) {
                                if ($temp1->id_Operacion == $Tejido1->Operacion) {
                                    $resp = $temp1->dsc_Operacion;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Duración(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Duracion; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Margen(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Margen; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por hora: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxHr; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por día:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxDay; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                            <?php
                            $resp = '-';
                            echo "Equipo: ";
                            ?>
                            <?php
                            foreach ($Equipo as $temp1) {
                                if ($temp1->ID == $Tejido1->Equipo) {
                                    $resp = $temp1->Nombre . " " . $temp1->Marca . " " . $temp1->Modelo;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php echo "Unidades por ciclo:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoUnit; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php echo "Tiempo de uso del equipo(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoTime; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "Material: ";
                        $resp = '-';
                        ?>    
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Cantidad: "; ?> 
                            </div>
                        </div><?php
                            $arreglo = explode(',', $Tejido1->Material);
                            $n = count($arreglo);
                            $arreglo2 = explode(',', $Tejido1->CantMat);
                            $n2 = count($arreglo2);
                            if ($n > $n2) {
                                $R = $n;
                            } else {
                                $R = $n2;
                            }
                            ?>
                        <?php for ($i = 0; $i < $R; $i++) { ?>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                <?php
                foreach ($Material as $temp1) {
                    if ($temp1->Folio == $arreglo[$i]) {
                        $resp = $temp1->Producto;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600"><?php echo $arreglo2[$i]; ?></strong>
                            </div>
            <?php } ?>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Responsables: "; ?>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" align="right" style="color:#ffffff">
                            <?php
                            $arreglo3 = explode(',', $Tejido1->Registra);
                            $p = count($arreglo3);
                            $resp = '-';
                            ?>
                <?php for ($i = 0; $i < $p; $i++) { ?>
                <?php
                foreach ($USUARIOS as $temp1) {
                    if ($temp1->Id == $arreglo3[$i]) {
                        $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                <?php echo "</p>"; ?>
                <?php } ?> 
                        </div>
                    </td>
                </tr>
                        <?php } ?>



            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Costura
                    </div>
                </td>
            </tr>
        <?php foreach ($Costura as $Tejido1) { ?>
                <tr>
                    <td bgcolor="#535357">
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <?php echo "Operación: "; ?>
                            <?php
                            foreach ($OperCostura as $temp1) {
                                if ($temp1->id_Operacion == $Tejido1->Operacion) {
                                    $resp = $temp1->dsc_Operacion;
                                }
                            }
                            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Duración(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Duracion; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Margen(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Margen; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por hora: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxHr; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por día:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxDay; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
            <?php
            $resp = '-';
            echo "Equipo: ";
            ?>
            <?php
            foreach ($Equipo as $temp1) {
                if ($temp1->ID == $Tejido1->Equipo) {
                    $resp = $temp1->Nombre . " " . $temp1->Marca . " " . $temp1->Modelo;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php echo "Unidades por ciclo:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoUnit; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php echo "Tiempo de uso del equipo(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoTime; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "Material: ";
                        $resp = '-';
                        ?>    
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Cantidad: "; ?> 
                            </div>
                        </div><?php
                            $arreglo = explode(',', $Tejido1->Material);
                            $n = count($arreglo);
                            $arreglo2 = explode(',', $Tejido1->CantMat);
                            $n2 = count($arreglo2);
                            if ($n > $n2) {
                                $R = $n;
                            } else {
                                $R = $n2;
                            }
                            ?>
            <?php for ($i = 0; $i < $R; $i++) { ?>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                <?php
                foreach ($Material as $temp1) {
                    if ($temp1->Folio == $arreglo[$i]) {
                        $resp = $temp1->Producto;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600"><?php echo $arreglo2[$i]; ?></strong>
                            </div>
            <?php } ?>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Responsables: "; ?>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" align="right" style="color:#ffffff">
                            <?php
                            $arreglo3 = explode(',', $Tejido1->Registra);
                            $p = count($arreglo3);
                            $resp = '-';
                            ?>
            <?php for ($i = 0; $i < $p; $i++) { ?>
                <?php
                foreach ($USUARIOS as $temp1) {
                    if ($temp1->Id == $arreglo3[$i]) {
                        $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                <?php echo "</p>"; ?>
                            <?php } ?> 
                        </div>
                    </td>
                </tr>
                        <?php } ?>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Empaque
                    </div>
                </td>
            </tr>
        <?php foreach ($Empaque as $Tejido1) { ?>
                <tr>
                    <td bgcolor="#535357">
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <?php echo "Operación: "; ?>
            <?php
            foreach ($OperEmpaque as $temp1) {
                if ($temp1->id_Operacion == $Tejido1->Operacion) {
                    $resp = $temp1->dsc_Operacion;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Duración(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Duracion; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Margen(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Margen; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por hora: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxHr; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por día:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxDay; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
            <?php
            $resp = '-';
            echo "Equipo: ";
            ?>
            <?php
            foreach ($Equipo as $temp1) {
                if ($temp1->ID == $Tejido1->Equipo) {
                    $resp = $temp1->Nombre . " " . $temp1->Marca . " " . $temp1->Modelo;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                                <?php echo "Unidades por ciclo:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoUnit; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
            <?php echo "Tiempo de uso del equipo(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoTime; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "Material: ";
                        $resp = '-';
                        ?>    
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Cantidad: "; ?> 
                            </div>
                        </div><?php
                            $arreglo = explode(',', $Tejido1->Material);
                            $n = count($arreglo);
                            $arreglo2 = explode(',', $Tejido1->CantMat);
                            $n2 = count($arreglo2);
                            if ($n > $n2) {
                                $R = $n;
                            } else {
                                $R = $n2;
                            }
                            ?>
            <?php for ($i = 0; $i < $R; $i++) { ?>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                <?php
                foreach ($Material as $temp1) {
                    if ($temp1->Folio == $arreglo[$i]) {
                        $resp = $temp1->Producto;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600"><?php echo $arreglo2[$i]; ?></strong>
                            </div>
                            <?php } ?>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Responsables: "; ?>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" align="right" style="color:#ffffff">
            <?php
            $arreglo3 = explode(',', $Tejido1->Registra);
            $p = count($arreglo3);
            $resp = '-';
            ?>
            <?php for ($i = 0; $i < $p; $i++) { ?>
                <?php
                foreach ($USUARIOS as $temp1) {
                    if ($temp1->Id == $arreglo3[$i]) {
                        $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                                <?php echo "</p>"; ?>
                            <?php } ?> 
                        </div>
                    </td>
                </tr>
                        <?php } ?>
            <tr>
                <td bgcolor="#b40000">
                    <div class="col-md-12 col-xs-12" style="color:#ffffff">
                        Entrega
                    </div>
                </td>
            </tr>
        <?php foreach ($Entrega as $Tejido1) { ?>
                <tr>
                    <td bgcolor="#535357">
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
            <?php echo "Operación: "; ?>
            <?php
            foreach ($OperEntrega as $temp1) {
                if ($temp1->id_Operacion == $Tejido1->Operacion) {
                    $resp = $temp1->dsc_Operacion;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Duración(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Duracion; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
            <?php echo "Margen(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Margen; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por hora: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxHr; ?></strong>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Productividad por día:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->UnitxDay; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                            <?php
                            $resp = '-';
                            echo "Equipo: ";
                            ?>
            <?php
            foreach ($Equipo as $temp1) {
                if ($temp1->ID == $Tejido1->Equipo) {
                    $resp = $temp1->Nombre . " " . $temp1->Marca . " " . $temp1->Modelo;
                }
            }
            ?>
                            <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
            <?php echo "Unidades por ciclo:"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoUnit; ?></strong>
                        </div>
                        <div class="col-md-4 col-xs-12" style="color:#ffffff">
                        <?php echo "Tiempo de uso del equipo(min):"; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->EquipoTime; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-xs-12" style="color:#ffffff">
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                        <?php
                        echo "Material: ";
                        $resp = '-';
                        ?>    
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Cantidad: "; ?> 
                            </div>
                        </div><?php
                            $arreglo = explode(',', $Tejido1->Material);
                            $n = count($arreglo);
                            $arreglo2 = explode(',', $Tejido1->CantMat);
                            $n2 = count($arreglo2);
                            if ($n > $n2) {
                                $R = $n;
                            } else {
                                $R = $n2;
                            }
                            ?>
            <?php for ($i = 0; $i < $R; $i++) { ?>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                                <?php
                                foreach ($Material as $temp1) {
                                    if ($temp1->Folio == $arreglo[$i]) {
                                        $resp = $temp1->Producto;
                                    }
                                }
                                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                            </div>
                            <div class="col-md-6 col-xs-12" style="color:#ffffff">
                                <strong style="color:#ff6600"><?php echo $arreglo2[$i]; ?></strong>
                            </div>
                            <?php } ?>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Observaciones: "; ?>
                            <strong style="color:#ff6600"><?php echo $Tejido1->Observaciones; ?></strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">
                            <?php echo "Responsables: "; ?>
                        </div>
                        <div class="col-md-6 col-xs-12" style="color:#ffffff">

                        </div>
                        <div class="col-md-6 col-xs-12" align="right" style="color:#ffffff">
            <?php
            $arreglo3 = explode(',', $Tejido1->Registra);
            $p = count($arreglo3);
            $resp = '-';
            ?>
            <?php for ($i = 0; $i < $p; $i++) { ?>
                <?php
                foreach ($USUARIOS as $temp1) {
                    if ($temp1->Id == $arreglo3[$i]) {
                        $resp = $temp1->nombre . " " . $temp1->apaterno . " " . $temp1->amaterno;
                    }
                }
                ?>
                                <strong style="color:#ff6600"><?php echo $resp; ?></strong>
                <?php echo "</p>"; ?>
            <?php } ?> 
                        </div>
                    </td>
                </tr>
        <?php } ?>
        </table>
        <?php
    }

    public function Aprobar() {
        $this->load->model("modelo", "datos");
        $indiceuser = $_POST["User"];
        $Aprobar = $_POST["Aprobar"];
        $Orden = $_POST["Orden"];
        $Motivo = $_POST["Motivo"];

        $datos = $this->datos->getAprobarDesign(
                $Orden, $Motivo, $Aprobar, $indiceuser
        );

        echo '<script>alert("Información registrada")</script>';
        //Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
        $data['USUARIOS'] = $USUARIOS;
        $data['User'] = $indiceuser;
        //Abriendo BD cliente
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Planeacion';
        $this->_renderView($data);
    }

    public function PDFDesign() {
        $ID = $this->input->get('ID');
        $indiceuser = $this->input->get('i');

        // Se carga el modelo alumno
        $this->load->model("modelo", "PDF_modelo");
        // Se carga la libreria fpdf
        $this->load->library('Pdf');


        //Cargando usuarios
        $this->load->model("modelo", "Proyec");
        $Proyec = $this->Proyec->getOrdenesSolicitadasID($ID);
        foreach ($Proyec as $Proyect1) {
            
        }
        $Orden = $Proyect1->ID;
        $Proyecto = $Proyect1->Proyecto;

        //Cargando usuarios
        $this->load->model("modelo", "Project");
        $Project = $this->Project->getProyectosID($Proyecto);
        foreach ($Project as $Project1) {
            
        }
        //Cargando usuarios
        $this->load->model("modelo", "InfoRegis");
        $InfoRegis = $this->InfoRegis->getInfoRegis($Proyecto, $Orden);

        $this->load->model("modelo", "cliente");
        $Cliente = $this->cliente->getID_Cliente();
        //Cargando usuarios
        $this->load->model("modelo", "FormaEnt");
        $FormaEnt = $this->FormaEnt->getFormaEnt();
        //Cargando usuarios
        $this->load->model("modelo", "Grupo");
        $Grupo = $this->Grupo->getGrupo();
        //Cargando usuarios
        $this->load->model("modelo", "Genero");
        $Genero = $this->Genero->getGenero();
        //Cargando usuarios
        $this->load->model("modelo", "Posicion");
        $Posicion = $this->Posicion->getPosicion();
        //Cargando usuarios
        $this->load->model("modelo", "Poblacion");
        $Poblacion = $this->Poblacion->getPoblacion();
        //Cargando usuarios
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUso();
        //Cargando usuarios
        $this->load->model("modelo", "Temporada");
        $Temporada = $this->Temporada->getTemporada();
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        //Cargando usuarios
        $this->load->model("modelo", "Modalidad");
        $Modalidad = $this->Modalidad->getModalidadPro();
        //Cargando usuarios
        $this->load->model("modelo", "FormaPago");
        $FormaPago = $this->FormaPago->getFormaPagoPro();
        //Cargando usuarios
        $this->load->model("modelo", "PrendasMedidas");
        $PrendasMedidas = $this->PrendasMedidas->getPrendasMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Prendas");
        $Prendas = $this->Prendas->getPrendasAll();
        //Cargando usuarios
        $this->load->model("modelo", "LienzoCrudo");
        $LienzoCrudo = $this->LienzoCrudo->getLienzoMedidas($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Lienzo");
        $Lienzo = $this->Lienzo->getMLienzoAll();
        //Cargando usuarios
        $this->load->model("modelo", "Material");
        $Material = $this->Material->getMaterialUsar($Proyecto, $Orden);
        //Cargando usuarios
        $this->load->model("modelo", "Catalogo");
        $Catalogo = $this->Catalogo->geProductosAll();


        $this->pdf = new Pdf3();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();

        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Orden de diseño");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(150, 178, 152);

        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 6);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        foreach ($InfoRegis as $recibo) {
            
        }

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('R', 'L'));
        $this->pdf->SetWidths(array(160, 15));
        $this->pdf->SetTextColor(255, 0, 0);
        $this->pdf->Row(array(utf8_decode('NÚMERO DE ORDEN: '), html_entity_decode($recibo->ID)));

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw2(array(utf8_decode($recibo->Nproducto)), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('R', 'L'));
        $this->pdf->SetWidths(array(160, 15));
        $this->pdf->SetTextColor(255, 0, 0);
        $this->pdf->Row(array(utf8_decode('Número del producto: '), html_entity_decode($recibo->Folio)));

        foreach ($Cliente as $temp1) {
            if ($temp1->Folio == $Project1->Cliente) {
                $resp = $temp1->NombreC;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Cliente: ' . $resp)), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode('Nombre de cadena: ' . $Project1->Ncadena)), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L',));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Ubicación de cadena: ' . $Project1->Ucadena)), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'L'));
        $this->pdf->SetWidths(array(90, 90));
        $this->pdf->Row2(array(utf8_decode('Fecha de solicitud: ' . $Project1->Solicitud), utf8_decode('Fecha de entrega: ' . $Project1->Fentrega)), '1', 'true');

        foreach ($FormaEnt as $temp1) {
            if ($temp1->id_forma == $Project1->FormaEnt) {
                $resp = $temp1->dsc_forma;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L',));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Forma de entrega: ' . $resp)), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L',));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Lugar de entrega: ' . $Project1->Calle)), '1', 'true');


        $this->pdf->SetDrawColor(180, 0, 0);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Características principales del diseño  ')), '1', 'true');


        foreach ($Grupo as $temp1) {
            if ($temp1->id_concepto == $recibo->Grupo) {
                $resp = $temp1->dsc_concepto;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode('Grupo: ' . $resp)), '1', 'true');
        $resp = '-';

        foreach ($Genero as $temp1) {
            if ($temp1->id_concepto == $recibo->Genero) {
                $resp = $temp1->dsc_concepto;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Género: ' . $resp)), '1', 'true');

        $resp = '-';

        foreach ($Posicion as $temp1) {
            if ($temp1->id_concepto == $recibo->Posicion) {
                $resp = $temp1->dsc_concepto;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Posición: ' . $resp)), '1', 'true');

        $resp = '-';

        foreach ($Poblacion as $temp1) {
            if ($temp1->id_concepto == $recibo->Poblacion) {
                $resp = $temp1->dsc_concepto;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Población: ' . $resp)), '1', 'true');

        $resp = '-';

        foreach ($Uso as $temp1) {
            if ($temp1->id_concepto == $recibo->Uso) {
                $resp = $temp1->dsc_concepto;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Uso: ' . $resp)), '1', 'true');

        $resp = '-';

        foreach ($Temporada as $temp1) {
            if ($temp1->id_concepto == $recibo->Temporada) {
                $resp = $temp1->dsc_concepto;
            }
        }
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(html_entity_decode('Temporada: ' . $resp)), '1', 'true');

        $resp = '-';

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Colección: ' . $recibo->Coleccion)), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Número de producto: ' . $recibo->Folio)), '1', 'true');
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L',));
        $this->pdf->SetWidths(array(180));
        $this->pdf->Row2(array(utf8_decode('Código de barras: ' . $Project1->CDBarras)), '1', 'true');


        $nombre = $recibo->Numero;
        $files = get_filenames($this->folder16, FALSE);
        foreach ($files as $file) {
            $ext = substr($file, strpos($file, ".") + strlen("."));
            $name = substr($file, 0, strpos($file, "."));
            if ($name == $nombre) {
                $Temporal = $name . "." . $ext;
                $this->pdf->Image('uploads/Productos/' . $Temporal, 150, 135, 45, 45);
            }
        }

        $this->pdf->SetDrawColor(180, 0, 0);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Información del diseño')), '1', 'true');

        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'L'));
        $this->pdf->SetWidths(array(65, 70));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode('Color: ' . $recibo->Color), utf8_decode('Fórmula del color: ' . $recibo->Formula)), '1', 'true');
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(135));
        $this->pdf->Row2(array(utf8_decode('Peso terminado en seco: ' . $recibo->PesoT)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Cantidad por carga: ' . $recibo->CantidadCarga)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Fibrología: ' . $recibo->Fibrologia)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Tipo de Nylon: ' . $recibo->TipoNylon)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Tipo de Elastano: ' . $recibo->TipoElastano)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Tipo de licra: ' . $recibo->TipoLicra)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Otros Hilos: ' . $recibo->OtrosHilos)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode('Observaciones: ' . $recibo->Observaciones)), '1', 'true');


        $this->pdf->SetDrawColor(180, 0, 0);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Patrón')), '1', 'true');
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'L'));
        $this->pdf->SetWidths(array(45, 135));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode(' '), utf8_decode('Número de patrón: ' . $recibo->Npatron)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode(' '), utf8_decode('Nombre del patrón: ' . $recibo->NamePatron)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode(' '), utf8_decode('Autor: ' . $recibo->Autor)), '1', 'true');
        $this->pdf->Row2(array(utf8_decode(' '), utf8_decode('Fecha: ' . $recibo->Fecha)), '1', 'true');

        $nombre = $recibo->Archivo;
        $files = get_filenames($this->folder17, FALSE);
        foreach ($files as $file) {
            $ext = substr($file, strpos($file, ".") + strlen("."));
            $name = substr($file, 0, strpos($file, "."));
            if ($name == $nombre) {
                $Temporal = $name . "." . $ext;
                $this->pdf->Image('uploads/Patrones/' . $Temporal, 15, 185, 45, 45);
            }
        }
        $this->pdf->Ln(30);

        $USUARIOS = $this->PDF_modelo->getUSUARIOSID($recibo->ID);
        foreach ($USUARIOS as $USUARIOS1) {
            
        }
        $this->pdf->Ln(7);
        $this->pdf->SetFont('Arial', 'B', 6);
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row(array(utf8_decode('APROBADO POR: ') . utf8_decode($USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno)));
        $this->pdf->Row(array(utf8_decode('ELABORADO POR: ') . utf8_decode($USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno)));



// Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        $this->pdf->SetDrawColor(180, 0, 0);
        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Medidas por partes de prenda')), '1', 'true');
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'L', 'L', 'L', 'L', 'L'));
        $this->pdf->SetWidths(array(30, 30, 30, 30, 30, 30));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode('Prenda'), utf8_decode('Medida 1(m): '), utf8_decode('Medida 2(m): '), utf8_decode('Medida 3(m): '), utf8_decode('Medida 4(m): '), utf8_decode('Medida 5(m): ')), '1', 'true');

        foreach ($PrendasMedidas as $PrendasMedidas1) {
            $resultado = '';
            foreach ($Prendas as $Prendas1) {
                if ($Prendas1->id_prenda == $PrendasMedidas1->Prenda) {
                    $resultado = $Prendas1->dsc_prenda;
                }
            }
            $this->pdf->Row2(array(utf8_decode($resultado), utf8_decode($PrendasMedidas1->Medida1), utf8_decode($PrendasMedidas1->Medida2), utf8_decode($PrendasMedidas1->Medida3), utf8_decode($PrendasMedidas1->Medida4), utf8_decode($PrendasMedidas1->Medida5)), '1', 'true');
        }

        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Medidas de lienzo en crudo')), '1', 'true');
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'L'));
        $this->pdf->SetWidths(array(40, 140));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode('Prenda'), utf8_decode('Medida(m): ')), '1', 'true');

        foreach ($LienzoCrudo as $LienzoCrudo1) {
            $resultado = '';
            foreach ($Lienzo as $Lienzo1) {
                if ($Lienzo1->id_lienzo == $LienzoCrudo1->Lienzo) {
                    $resultado = $Lienzo1->dsc_lienzo;
                }
            }
            $this->pdf->Row2(array(utf8_decode($resultado), utf8_decode($LienzoCrudo1->Medidas)), '1', 'true');
        }


        $this->pdf->SetAligns(array('L'));
        $this->pdf->SetWidths(array(180));
        $this->pdf->SetTextColor(255, 255, 255);
        $this->pdf->RowDraw3(array(utf8_decode('Material a utilizar')), '1', 'true');
        $this->pdf->SetDrawColor(255, 255, 255);
        $this->pdf->SetAligns(array('L', 'L', 'L', 'L'));
        $this->pdf->SetWidths(array(60, 40, 40, 40));
        $this->pdf->SetTextColor(0, 0, 0);
        $this->pdf->Row2(array(utf8_decode('Material'), utf8_decode('Cantidad: '), utf8_decode('Unidades solicitadas: '), utf8_decode('Cantidad total: ')), '1', 'true');

        $unidades = $recibo->UnidadesXS + $recibo->UnidadesS + $recibo->UnidadesM + $recibo->UnidadesL + $recibo->UnidadesXL;

        foreach ($Material as $Material1) {
            $arreglo = explode(',', $Material1->Material);
            $n = count($arreglo);
            $arreglo2 = explode(',', $Material1->CantMat);
            $n2 = count($arreglo2);
            if ($n > $n2) {
                $R = $n;
            } else {
                $R = $n2;
            }
            for ($i = 0; $i < $R; $i++) {
                $resultado = '';
                $medida = '';
                foreach ($Catalogo as $Catalogo1) {
                    if ($Catalogo1->Folio == $arreglo[$i]) {
                        $resultado = $Catalogo1->Producto . " " . $Catalogo1->Marca;
                        $medida = $Catalogo1->UnidadMedida;
                    }
                }
                $this->pdf->Row2(array(utf8_decode($resultado), utf8_decode($arreglo2[$i] . " " . $medida), utf8_decode($unidades), utf8_decode($arreglo2[$i] * $unidades . " " . $medida . "(s)")), '1', 'true');
            }
        }

        $this->pdf->Output("Orden de compra.pdf", 'D');
    }

}
