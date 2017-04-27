<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlador2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
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

    public function Desarrollos() {
        $this->load->model("modelo", "datos");
        $DesarrolloID = $this->input->post('DesarrolloID');
        $indiceuser = $this->input->post('user');
        if ($DesarrolloID == 'D1') {
            //Cargando usuarios
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "ModelosN");
            $ModelosN = $this->ModelosN->getModelosN();
            $data['ModelosN'] = $ModelosN;
            $this->load->model("modelo", "Inmueble");
            $Inmueble = $this->Inmueble->getInmueblesReg();
            $data['Inmueble'] = $Inmueble;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_1';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D7') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_1_1';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D2') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_2';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D8') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_2_1';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D3') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_3';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D9') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_3_1';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D4') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $this->load->model("modelo", "Uso");
            $Uso = $this->Uso->getUsoAll();
            $data['Uso'] = $Uso;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_4';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D10') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_4_1';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D5') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_2_1x';
            $this->_renderView($data);
        }
        if ($DesarrolloID == 'D6') {
            //Cargando usuarios
            $where = '';
            $this->load->model("modelo", "USUARIOS");
            $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
            $data['USUARIOS'] = $USUARIOS;
            $this->load->model("modelo", "Desarrollo");
            $Desarrollo = $this->Desarrollo->getProyectosAll();
            $data['Desarrollo'] = $Desarrollo;
            $data['User'] = $indiceuser;
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_2_2';
            $this->_renderView($data);
        }
    }

    public function ViviendasxProyecto2() {
        //Abriendo BD Sub-cliente
        $Proyecto = $_POST["Proyecto"];
        $this->load->model("modelo", "Vivienda");
        $Vivienda = $this->Vivienda->getTipovivienda($Proyecto);
        $this->load->model("modelo", "Vivienda2");
        $Vivienda2 = $this->Vivienda2->getTipovivienda2();
        $this->load->model("modelo", "Tipos");
        $Tipos = $this->Tipos->getPrototipo();
        ?>
        <script src="<?php echo base_url(); ?>js/jscolor/jscolor.js"></script>
        <?php
        $i = 1;
        foreach ($Vivienda as $Vivienda1) {
            ?>
            <script type="text/javascript">
                var myPicker1 = new jscolor.color(document.getElementById( < ? echo "'myField"."$i'"? > ), {})
                        myPicker1.fromString('517C87')   // now you can access API via 'myPicker' variable
            </script>

            <div class="col-md-3 col-xs-12">	
                <?php
                $respuesta = '-';
                foreach ($Vivienda2 as $Vivienda3) {
                    if ($Vivienda3->ID == $Vivienda1->Modelo) {
                        $respuesta = $Vivienda3->Modelo;
                    }
                }
                echo $respuesta;
                ?>
                <input value="<?php echo $respuesta ?>" name="<?php echo "Modelos" . $i; ?>" id="<?php echo "Modelos" . $i; ?>" type="hidden">
            </div>
            <div class="col-md-3 col-xs-12">	
                <?php
                $respuesta2 = '-';
                foreach ($Tipos as $Tipos1) {
                    if ($Tipos1->ID == $Vivienda1->Tipo) {
                        $respuesta2 = $Tipos1->Prototipo;
                    }
                }
                echo $respuesta2;
                ?>
                <input value="<?php echo $respuesta2 ?>" name="<?php echo "Prototipos" . $i; ?>" id="<?php echo "Prototipos" . $i; ?>" type="hidden">
            </div>
            <div class="col-md-3 col-xs-12">	
                <input type="text" class="form-control" name="<?php echo "Cantidad" . $i; ?>" id="<?php echo "Cantidad" . $i; ?>" >	
            </div>
            <div class="col-md-3 col-xs-12">	
                <input type="text" name="<?php echo "myField" . $i; ?>" id="<?php echo "myField" . $i; ?>" value="517C87" class="form-control">

                <input value="<?php echo $i ?>" name="Indicador" id="Indicador" type="hidden">
            </div>
            <?php
            $i++;
        }
    }

    public function RDesarrollo() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Modelo = $this->input->post('Modelo');
        $Inmueble = $this->input->post('Inmueble');
        $NDesarrollo = $this->input->post('NDesarrollo');
        $SegmentoD = $this->input->post('SegmentoD');
        $SuperficieT = $this->input->post('SuperficieT');
        $SeccionD = $this->input->post('SeccionD');
        $NumeroViviendas = $this->input->post('NumeroViviendas');
        $Finicio = $this->input->post('Finicio');
        $Ftermino = $this->input->post('Ftermino');
        $Inmuebles = implode(',', $Inmueble);
        $datos = $this->datos->getRDesarrollo(
                $Modelo, $Inmuebles, $NDesarrollo, $SegmentoD, $SuperficieT, $SeccionD, $NumeroViviendas, $Finicio, $Ftermino
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
        $data['contentView'] = 'Desarrollos';
        $this->_renderView($data);
    }

    public function RDesarrolloAct() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $ID = $this->input->post('ID');
        $Modelo = $this->input->post('Modelo');
        $Inmueble = $this->input->post('Inmueble');
        $NDesarrollo = $this->input->post('NDesarrollo');
        $SegmentoD = $this->input->post('SegmentoD');
        $SuperficieT = $this->input->post('SuperficieT');
        $SeccionD = $this->input->post('SeccionD');
        $NumeroViviendas = $this->input->post('NumeroViviendas');
        $Finicio = $this->input->post('Finicio');
        $Ftermino = $this->input->post('Ftermino');
        $Inmuebles = implode(',', $Inmueble);
        $datos = $this->datos->getRDesarrolloAct(
                $ID, $Modelo, $Inmuebles, $NDesarrollo, $SegmentoD, $SuperficieT, $SeccionD, $NumeroViviendas, $Finicio, $Ftermino
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
        $data['contentView'] = 'Desarrollos';
        $this->_renderView($data);
    }

    public function RViviendas() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Proyecto = $this->input->post('Proyecto');
        $ModeloV = $this->input->post('ModeloV');
        $TipoV = $this->input->post('TipoV');
        $SuperficieV = $this->input->post('SuperficieV');
        $PrecioV = $this->input->post('PrecioV');
        $datos = $this->datos->getRViviendas(
                $Proyecto, $ModeloV, $TipoV, $SuperficieV, $PrecioV
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
        $data['contentView'] = 'Desarrollos';
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
        $Total = $SuperficieH + $SuperficieC + $SuperficieD;
        ?>
        <input value="<?php echo $Total ?>" type="number" class="form-control" name="Total" id="Total" readonly="readonly">
        <?php
    }

    public function SumaVendible() {
        //Abriendo BD Sub-cliente
        $SuperficieH = $_POST["SuperficieH"];
        $SuperficieC = $_POST["SuperficieC"];
        $Total = $SuperficieH + $SuperficieC;
        ?>
        <input value="<?php echo $Total ?>" type="number" step="0.01"  class="form-control" name="SuperficieV" id="SuperficieV">
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

    public function RSManzanaAct() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $ID = $this->input->post('ID');
        $Desarrollo = $this->input->post('Desarrollo');
        $Seccion = $this->input->post('Seccion');
        $Manzana = $this->input->post('Manzana');
        $SuperficieH = $this->input->post('SuperficieH');
        $SuperficieC = $this->input->post('SuperficieC');
        $SuperficieD = $this->input->post('SuperficieD');
        $SuperficieV = $this->input->post('SuperficieV');
        $Total = $this->input->post('Total');
        $datos = $this->datos->getRSManzanaAct(
                $ID, $Desarrollo, $Seccion, $Manzana, $SuperficieH, $SuperficieC, $SuperficieD, $SuperficieV, $Total
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
        $Total = $LotesHr + $LotesHi;
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

    public function RManzanaAct() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $ID = $this->input->post('ID');
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
        $datos = $this->datos->getRManzanaAct(
                $ID, $Desarrollo, $Manzana, $NLotes, $LotesHr, $NLotesHr, $LotesHi, $NLotesHi, $LotesC, $NLotesC, $Total
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

    public function LotesxTipo22() {
        //Abriendo BD Sub-cliente
        $temp = 0;
        $Proyecto = $_POST["Proyecto"];
        $Manzana = $_POST["Manzana"];
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
        $NumViviendas = $this->input->post('NumViviendas');
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
                    $Desarrollo, $Manzana, $TLotes, $Lotes, $NViviendas, $NumViviendas, $SuperficieHV, $Uso, $Indicador, $Arreglo, $Color, $Modelo, $Prototipo
            );
        }

        echo '<script>alert("Se ha sembrado la vivienda")</script>';
//Cargando usuarios
        $where = '';
        $this->load->model("modelo", "USUARIOS");
        $USUARIOS = $this->USUARIOS->getUSUARIOSALL();
        $data['USUARIOS'] = $USUARIOS;
        $this->load->model("modelo", "Desarrollo");
        $Desarrollo = $this->Desarrollo->getProyectosAll();
        $data['Desarrollo'] = $Desarrollo;
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUsoAll();
        $data['Uso'] = $Uso;
        $data['User'] = $indiceuser;
        $data['scripts'] = array('cliente');
        $data['contentView'] = 'Desarrollos_4';
        $this->_renderView($data);
    }

    public function RViviendas2Act() {
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $ID = $this->input->post('ID');
        $Desarrollo = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        $TLotes = $this->input->post('TLotes');
        $Lotes = $this->input->post('Lotes');
        $NViviendas = $this->input->post('NViviendas');
        $NumViviendas = $this->input->post('NumViviendas');
        $SuperficieHV = $this->input->post('SuperficieHV');
        $Uso = $this->input->post('Uso');
        $Indicador = $this->input->post('Indicador');
//$Arreglo = $this->input->post('Cantidad1');
        for ($i = 1; $i <= $Indicador; $i++) {
            $variable = "Cantidad" . $i;
            $Arreglo = $this->input->post($variable);
            $temporal = "myField" . $i;
            $Color = $this->input->post($temporal);
            $temporal2 = "Idents" . $i;
            $ID = $this->input->post($temporal2);
            $datos1 = $this->datos->getActuViviendas_Modelos(
                    $ID, $Arreglo, $Color
            );
        }
        $datos = $this->datos->getRViviendas2Act(
                $ID, $Desarrollo, $Manzana, $TLotes, $Lotes, $NViviendas, $NumViviendas, $SuperficieHV, $Uso, $Indicador, $Arreglo, $Color
        );

        echo '<script>alert("Se ha actualizado la vivienda")</script>';
        $where = '';
        $this->load->model("modelo", "datos");
        $indiceuser = $this->input->post('user');
        $Desarrollo3 = $this->input->post('Desarrollo');
        $Manzana = $this->input->post('Manzana');
        $TLotes = $this->input->post('TLotes');
        $Lotes = $this->input->post('Lotes');
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
        $Viviendas = $this->Viviendas->getXtipoLotes($Desarrollo3, $Manzana, $TLotes, $Lotes);
        $data['Viviendas'] = $Viviendas;
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUsoAll();
        $data['Uso'] = $Uso;
        $this->load->model("modelo", "Vivienda");
        $Vivienda = $this->Vivienda->getTipovivienda($Desarrollo3);
        $data['Vivienda'] = $Vivienda;
        $this->load->model("modelo", "Vivienda2");
        $Vivienda2 = $this->Vivienda2->getTipovivienda2();
        $data['Vivienda2'] = $Vivienda2;
        $this->load->model("modelo", "Tipos");
        $Tipos = $this->Tipos->getPrototipo();
        $data['Tipos'] = $Tipos;
        if (!empty($Viviendas)) {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_4_1_1';
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_4_1';
        }
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
                    <?php
                }
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
        <table class="table table-bordered table" width="100%" border="1" bordercolor="#9c9a9a">
            <thead>
            <tr class="primary">
                <td>  
                    <label for="1" class="control-label">Referencia</label>
                </td>
                <td>
                    <label for="1"  class="control-label">Tipo de superficie</label>
                </td>
                <td>
                    <label for="1" class="control-label">Superficie en m2</label>
                </td>
<!--                <td>
                    <label for="1" class="control-label">Porcentaje</label>
                </td>-->
                <td>
                    <label for="1" class="control-label">Precio</label>

                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>  
                        <label for="1" class="control-label">1</label>
                </td>
                <td>
                        <label for="1" class="control-label">Superficie total del terreno</label>
                    
                </td>
                <td>
                        <?php echo number_format($suma, 2, '.', ','); ?>
                   
                </td>
                <!--<td></td>-->
                <td>  
                        <?php echo "$ " . number_format($suma2, 2, '.', ','); ?>
                 
                </td> 
            </tr> 
            <tr>
                <td>  
                        <label for="1" class="control-label">1</label>
                </td>
                <td>
                        <label for="1" class="control-label">Superficie habitacional</label>
                </td>
                <td>
                        <?php echo number_format($suma3, 2, '.', ','); ?>
                  
                </td>
                <!--<td></td>-->
                <td>
                </td>
            </tr> 
            <tr>
                <td>  
                        <label for="1" class="control-label">1</label>
                    
                </td>
                <td>
                        <label for="1" class="control-label">Superficie comercial</label>
                 
                </td>
                <td>
                        <?php echo number_format($suma4, 2, '.', ','); ?>
             
                </td>
<!--                <td>
                   
                </td>-->
                <td> 
                </td>
            </tr> 
            <tr>
                <td>  
                        <label for="1" class="control-label">1</label>
                  
                </td>
                <td>
                        <label for="1" class="control-label">Superficie de donación</label>
                 
                </td>
                <td>
                        <?php echo number_format($suma5, 2, '.', ','); ?>
                 
                </td>
<!--                <td> 
                </td>-->
                <td> 
                </td>
            </tr> 
            <tr>
                <td>  
                        <label for="1" class="control-label">1</label>
                    
                </td>
                <td>
                        <label for="1" class="control-label">Superficie de manzanas</label>
                    
                </td>
                <td>
                        <?php echo number_format($suma6, 2, '.', ','); ?>
                   
                </td>
                <td>

                  
                </td>
                <td> 
                </td>
            </tr> 
            </tbody>
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
        $Lotes = $this->input->post('Lotes');
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
        $Viviendas = $this->Viviendas->getXtipoLotes($Desarrollo3, $Manzana, $TLotes, $Lotes);
        $data['Viviendas'] = $Viviendas;
        $this->load->model("modelo", "Uso");
        $Uso = $this->Uso->getUsoAll();
        $data['Uso'] = $Uso;
        $this->load->model("modelo", "Vivienda");
        $Vivienda = $this->Vivienda->getTipovivienda($Desarrollo3);
        $data['Vivienda'] = $Vivienda;
        $this->load->model("modelo", "Vivienda2");
        $Vivienda2 = $this->Vivienda2->getTipovivienda2();
        $data['Vivienda2'] = $Vivienda2;
        $this->load->model("modelo", "Tipos");
        $Tipos = $this->Tipos->getPrototipo();
        $data['Tipos'] = $Tipos;
        if (!empty($Viviendas)) {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_4_1_1';
        } else {
            $data['scripts'] = array('cliente');
            $data['contentView'] = 'Desarrollos_4_1';
        }
        $this->_renderView($data);
    }

}
