<?php 

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlMenu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
        $this->load->helper(array('download', 'file', 'url', 'html', 'form'));
        $this->folder = 'uploads/Referenciados/';
        $this->folder2 = 'uploads/Tramites/';
        $this->folder3 = 'uploads/Evidencias/';
        $this->folder4 = 'uploads/Inmuebles/';
        $this->folder5 = 'uploads/Muebles/';
        $this->folder6 = 'uploads/Material/';
        $this->folder7 = 'uploads/Accidentes/';
        $this->folder8 = 'uploads/Expediente/';
        $this->folder9 = 'uploads/Nomina/';
        $this->folder10 = 'uploads/SSExpediente/';
        $this->folder11 = 'uploads/InmuebleExp/';
        $this->folder12 = 'uploads/ViviendaExp/';
        $this->folder14 = 'uploads/TramitesExp/';
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
        $this->Menu();
    }
    
    public function Menu() {
        $this->load->model("modelo", "datos");
        $MENU = $this->input->get('ID');
        $indiceuser = $this->input->get('i');
        switch ($MENU) {
            case 1: 
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
                break;
            case 2:
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
                break;
            case 3:
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
                break;
            case 4:
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
                break;
            case 5:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'SegSoc';
                $this->_renderView($data);
                break;
            case 6:
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
                break;
            case 7:
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
                break;
            case 8:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon';
                $this->_renderView($data);
                break;
            case 81:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_3';
                $this->_renderView($data);
                break;
            case 82:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_4';
                $this->_renderView($data);
                break;
            case 83:
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
                break;
            case 84:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_6';
                $this->_renderView($data);
                break;
            case 85:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_7';
                $this->_renderView($data);
                break;
            case 9:
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
                break;
            case 10:
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
                break;
            case 11:
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
                break;
            case 12:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Recursos';
                $this->_renderView($data);
                break;
            case 13:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_6';
                $this->_renderView($data);
                break;
            case 14:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_4';
                $this->_renderView($data);
                break;
            case 15:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Admon_7';
                $this->_renderView($data);
                break;
            case 16:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Tecnologia';
                $this->_renderView($data);
                break;
            case 17:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'B_Inmueble';
                $this->_renderView($data);
                break;
            case 18:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Entrevistas';
                $this->_renderView($data);
                break;
            case 19:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Compras';
                $this->_renderView($data);
                break;
            case 20:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Viviendas';
                $this->_renderView($data);
                break;
            case 21:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Comerc';
                $this->_renderView($data);
                break;
            case 22:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'TramitesR';
                $this->_renderView($data);
                break;
            case 23:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Contratistas';
                $this->_renderView($data);
                break;
            case 24:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Cemento';
                $this->_renderView($data);
                break;
            case 25:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Desarrollos';
                $this->_renderView($data);
                break;
            case 26:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
//Abriendo BD Proyectos
                $this->load->model("modelo", "Proyectos");
                $Proyectos = $this->Proyectos->getProyectosAll();
                $data['Proyectos'] = $Proyectos;
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'Almacen_0';
                $this->_renderView($data);
                break;
            case 27:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['contentView'] = 'Transmision';
                $this->_renderView($data);
                break;
            /* }
             * POST VENTA 
             */
            case 28:
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'vPostVenta';
                $this->_renderView($data);
                break;
            case 29:
                extract($_REQUEST);
                $where = '';
                $this->load->model("modelo");
                $USUARIOS = $this->modelo->getUSUARIOSALL($where);
                $lEstados = $this->modelo->getEstado2();
                $lClientes = $this->modelo->getClientes();
                $Proyectos = $this->modelo->getProyectosAll();
                switch ($mnuID) {
                    case 0:
                        $data['USUARIOS'] = $USUARIOS;
                        $data['lEstados'] = $lEstados;
                        $data['lClientes'] = $lClientes;
                        $data['User'] = $indiceuser;
                        $data['scripts'] = array('cliente');
                        $data['ctrlscripts'] = array('ctrlEPostVenta');
                        $data['contentView'] = 'vPostVenta';
                        $this->_renderView($data);
                        break;
                    case 1:
                        $data['USUARIOS'] = $USUARIOS;
                        $data['lEstados'] = $lEstados;
                        $data['lClientes'] = $lClientes;
                        $data['User'] = $indiceuser;
                        $data['scripts'] = array('cliente');
                        $data['ctrlscripts'] = array('ctrlEntregaVivienda');
                        $data['contentView'] = 'vEntregaVivienda';
                        $this->_renderView($data);
                        break;
                    case 2:
                        $data['Desarrollos'] = $Proyectos;
                        $data['USUARIOS'] = $USUARIOS;
                        $data['lEstados'] = $lEstados;
                        $data['lClientes'] = $lClientes;
                        $data['User'] = $indiceuser;
                        $data['scripts'] = array('cliente');
                        $data['ctrlscripts'] = array('ctrlGarantias');
                        $data['contentView'] = 'vGarantiasPostVenta';
                        $this->_renderView($data);
                        break;
                    case 3:
                        $data['USUARIOS'] = $USUARIOS;
                        $data['User'] = $indiceuser;
                        $data['scripts'] = array('cliente');
                        $data['ctrlscripts'] = array('ctrlVisitaYRevision');
                        $data['contentView'] = 'vVisitaYRevision';
                        $this->_renderView($data);
                        break;
                    case 4: 
                        break;
                    case 5: 
                        break;
                    case 6:
                        $data['Desarrollos'] = $Proyectos;
                        $data['USUARIOS'] = $USUARIOS;
                        $data['User'] = $indiceuser;
                        $data['scripts'] = array('cliente');
                        $data['ctrlscripts'] = array('ctrlQuejasComentarios');
                        $data['contentView'] = 'vQuejasYComentarios';
                        $this->_renderView($data);
                        break;
                    default:
                        break;
                }
                break;
            case 30:
//Cargando usuarios
                $where = '';
                $this->load->model("modelo", "USUARIOS");
                $USUARIOS = $this->USUARIOS->getUSUARIOSALL($where);
                $data['USUARIOS'] = $USUARIOS;
                $data['User'] = $indiceuser;
                $data['scripts'] = array('cliente');
                $data['contentView'] = 'vComportamientosDesarrollo';
                $this->_renderView($data);
                break;
            case 'BorrarPP':
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
                break;
            case 180:
                $data['contentView'] = 'FueraServicio';
                $this->_renderView($data);
                break;
            default:
                break;
        }
    }
}
