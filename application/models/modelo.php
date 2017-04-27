<?php


/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class modelo extends CI_Model {

    function __construct() {
        parent::__construct();

        $this->db = $this->load->database('seug', TRUE);
        $this->db_cliente = $this->load->database('seug', TRUE);
        $this->db_Tipo_cliente = $this->load->database('seug', TRUE);
        $this->db_SubTipo_cliente = $this->load->database('seug', TRUE);
        $this->db_ID_cliente = $this->load->database('seug', TRUE);
        $this->db_idcliente = $this->load->database('seug', TRUE);
        $this->db_Regimen = $this->load->database('seug', TRUE);
        $this->db_Forma = $this->load->database('seug', TRUE);
        $this->db_Ambito = $this->load->database('seug', TRUE);
        $this->db_Tamanio = $this->load->database('seug', TRUE);
        $this->db_Sector = $this->load->database('seug', TRUE);
        $this->db_Clasificacion = $this->load->database('seug', TRUE);
        $this->db_Rama = $this->load->database('seug', TRUE);
        $this->db_Pais = $this->load->database('seug', TRUE);
        $this->db_Estado = $this->load->database('seug', TRUE);
        $this->db_Ciudad = $this->load->database('seug', TRUE);
        $this->db_InfCliente = $this->load->database('seug', TRUE);
        $this->db_meses = $this->load->database('seug', TRUE);
        $this->db_Declaraciones = $this->load->database('seug', TRUE);
        $this->db_responsable = $this->load->database('seug', TRUE);
        $this->db_estatus = $this->load->database('seug', TRUE);
        $this->db_RefTipo = $this->load->database('seug', TRUE);
        $this->db_RefCategoria = $this->load->database('seug', TRUE);
        $this->db_RefTipo2 = $this->load->database('seug', TRUE);
        $this->db_FuncionConsulta = $this->load->database('seug', TRUE);
        $this->db_FuncionConsulta2 = $this->load->database('seug', TRUE);
        $this->db_FuncionConsulta3 = $this->load->database('seug', TRUE);
        $this->db_estatusRef = $this->load->database('seug', TRUE);
        $this->db_FuncionConsultaRef = $this->load->database('seug', TRUE);
        $this->db_ResultadoRef = $this->load->database('seug', TRUE);
        $this->db_ResultadoRef2 = $this->load->database('seug', TRUE);
        $this->db_Area = $this->load->database('seug', TRUE);
        $this->db_Puesto = $this->load->database('seug', TRUE);
        $this->db_USUARIOSALL = $this->load->database('seug', TRUE);
        $this->db_AsignadosRef = $this->load->database('seug', TRUE);
        $this->db_Metas = $this->load->database('seug', TRUE);
        $this->db_Metas2 = $this->load->database('seug', TRUE);
        $this->db_Estancia = $this->load->database('seug', TRUE);
        $this->db_Estudios = $this->load->database('seug', TRUE);
        $this->db_Duracion = $this->load->database('seug', TRUE);
        $this->db_Apoyos = $this->load->database('seug', TRUE);
        $this->db_Tarifa = $this->load->database('seug', TRUE);
        $this->db_Cobranza = $this->load->database('seug', TRUE);
        $this->db_NoRecibos = $this->load->database('seug', TRUE);
        $this->db_UltimoPago = $this->load->database('seug', TRUE);
        $this->db_Estancias = $this->load->database('seug', TRUE);
        $this->db_Proyectos = $this->load->database('seug', TRUE);
        $this->db_Formacion = $this->load->database('seug', TRUE);
        $this->db_Modalidad = $this->load->database('seug', TRUE);
        $this->db_Actividad = $this->load->database('seug', TRUE);
        $this->db_ForSolicitudes = $this->load->database('seug', TRUE);
        $this->db_Jornada = $this->load->database('seug', TRUE);
        $this->db_Contratacion = $this->load->database('seug', TRUE);
        $this->db_Nivel = $this->load->database('seug', TRUE);
        $this->db_TramitesSS = $this->load->database('seug', TRUE);
        $this->db_Inmuebles = $this->load->database('seug', TRUE);
        $this->db_ResultadoInmueble = $this->load->database('seug', TRUE);
        $this->db_Muebles = $this->load->database('seug', TRUE);
        $this->db_ResultadoMueble = $this->load->database('seug', TRUE);
        $this->db_TramitesCont = $this->load->database('seug', TRUE);
        $this->db_Actividades = $this->load->database('seug', TRUE);
        $this->db_Proveedores = $this->load->database('seug', TRUE);
        $this->db_Movimientos = $this->load->database('seug', TRUE);
        $this->db_P1 = $this->load->database('seug', TRUE);
        $this->db_P2 = $this->load->database('seug', TRUE);
        $this->db_P3 = $this->load->database('seug', TRUE);
        $this->db_P4 = $this->load->database('seug', TRUE);
        $this->db_P5 = $this->load->database('seug', TRUE);
        $this->db_P6 = $this->load->database('seug', TRUE);
        $this->db_P7 = $this->load->database('seug', TRUE);
        $this->db_P8 = $this->load->database('seug', TRUE);
        $this->db_P9 = $this->load->database('seug', TRUE);
        $this->db_P10 = $this->load->database('seug', TRUE);
        $this->db_P11 = $this->load->database('seug', TRUE);
        $this->db_P12 = $this->load->database('seug', TRUE);
        $this->db_P13 = $this->load->database('seug', TRUE);
        $this->db_P14 = $this->load->database('seug', TRUE);
        $this->db_IE = $this->load->database('seug', TRUE);
        $this->db_InE = $this->load->database('seug', TRUE);
        $this->db_P15 = $this->load->database('seug', TRUE);
        $this->db_P16 = $this->load->database('seug', TRUE);
        $this->db_P17 = $this->load->database('seug', TRUE);
        $this->db_P18 = $this->load->database('seug', TRUE);
        $this->db_P19 = $this->load->database('seug', TRUE);
        $this->db_P20 = $this->load->database('seug', TRUE);
        $this->db_C = $this->load->database('seug', TRUE);
        $this->db_Materiales = $this->load->database('seug', TRUE);
        $this->db_INPC = $this->load->database('seug', TRUE);
        $this->db_Recargos = $this->load->database('seug', TRUE);
    }

    function getResponsable() {
        $where = "";
        $this->db_responsable->select('*');
        $this->db_responsable->from('usuarios');
        if ($where != NULL)
            $this->db_responsable->where($where, NULL, FALSE);
        $query = $this->db_responsable->get();
        return $query->result();
    }

    function getestatus2() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('estatus');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getCliente() {
        $where = "";
        $this->db_cliente->select('*');
        $this->db_cliente->from('Cliente');
        if ($where != NULL) {
            $this->db_cliente->where($where, NULL, FALSE);
        }
        $query = $this->db_cliente->get();
        return $query->result();
    }

    function getClientes() {
        $this->db_cliente->select('ID, Ncliente');
        $this->db_cliente->from('Clientes');
        $query = $this->db_cliente->get();
        return $query->result();
    }

    function getTipoCliente($idcliente) {
        $where = "id_cliente=" . $idcliente;
        $this->db_Tipo_cliente->select('*');
        $this->db_Tipo_cliente->from('Tipo_cliente');
        if ($where != NULL)
            $this->db_Tipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_Tipo_cliente->get();
        return $query->result();
    }

    function getTipoCliente2() {
        $where = '';
        $this->db_Tipo_cliente->select('*');
        $this->db_Tipo_cliente->from('Tipo_cliente');
        if ($where != NULL)
            $this->db_Tipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_Tipo_cliente->get();
        return $query->result();
    }

    function getSubTipoCliente($idSubcliente) {
        $where = "id_Tipo_cliente=" . $idSubcliente;
        $this->db_SubTipo_cliente->select('*');
        $this->db_SubTipo_cliente->from('SubTipo_cliente');
        if ($where != NULL)
            $this->db_SubTipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_SubTipo_cliente->get();
        return $query->result();
    }

    function getSubTipoCliente2() {
        $where = '';
        $this->db_SubTipo_cliente->select('*');
        $this->db_SubTipo_cliente->from('SubTipo_cliente');
        if ($where != NULL)
            $this->db_SubTipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_SubTipo_cliente->get();
        return $query->result();
    }

    function getID_Cliente() {
        $where = "";
        $this->db_ID_cliente->select('*');
        $this->db_ID_cliente->from('Directorio');
        if ($where != NULL)
            $this->db_ID_cliente->where($where, NULL, FALSE);
        $query = $this->db_ID_cliente->get();
        return $query->result();
    }

    function getUSUARIOSALL() {
        $where = "";
        $this->db_USUARIOSALL->select('*');
        $this->db_USUARIOSALL->from('usuarios');
        if ($where != NULL) {
            $this->db_USUARIOSALL->where($where, NULL, FALSE);
        }
        $query = $this->db_USUARIOSALL->get();
        return $query->result();
    }

    function getInformacion($idcliente) {
        $where = "Folio='" . $idcliente . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('Directorio');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInformacion2($idcliente2) {
        $where = "Folio='" . $idcliente2 . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('Directorio');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInformacionExcel() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('Directorio');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getMeses() {
        $where = "";
        $this->db_meses->select('*');
        $this->db_meses->from('Meses');
        if ($where != NULL)
            $this->db_meses->where($where, NULL, FALSE);
        $query = $this->db_meses->get();
        return $query->result();
    }

    function getEstado($idPais) {
        $where = "id_pais=" . $idPais;
        $this->db_Estado->select('*');
        $this->db_Estado->from('Estado');
        if ($where != NULL)
            $this->db_Estado->where($where, NULL, FALSE);
        $query = $this->db_Estado->get();
        return $query->result();
    }

    function getCiudad($idEstado) {
        $where = "id_estado=" . $idEstado;
        $this->db_Estado->select('*');
        $this->db_Estado->from('Ciudad');
        if ($where != NULL)
            $this->db_Estado->where($where, NULL, FALSE);
        $query = $this->db_Estado->get();
        return $query->result();
    }

    function getInfCliente($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_InfCliente->select('*');
        $this->db_InfCliente->from('Directorio');
        if ($where != NULL)
            $this->db_InfCliente->where($where, NULL, FALSE);
        $query = $this->db_InfCliente->get();
        return $query->result();
    }

    function getListaMetas() {
        $where = "";
        $this->db_Metas->select('*');
        $this->db_Metas->from('Metas');
        if ($where != NULL)
            $this->db_Metas->where($where, NULL, FALSE);
        $query = $this->db_Metas->get();
        return $query->result();
    }

    function getMeta($Meta) {
        $where = "ID='" . $Meta . "'";
        $this->db_Metas2->select('*');
        $this->db_Metas2->from('Metas');
        if ($where != NULL)
            $this->db_Metas2->where($where, NULL, FALSE);
        $query = $this->db_Metas2->get();
        return $query->result();
    }

    function getTarifa() {
        $where = "";
        $this->db_Tarifa->select('*');
        $this->db_Tarifa->from('Tarifa');
        if ($where != NULL)
            $this->db_Tarifa->where($where, NULL, FALSE);
        $query = $this->db_Tarifa->get();
        return $query->result();
    }

    function getRegimen() {
        $where = "";
        $this->db_Regimen->select('*');
        $this->db_Regimen->from('Regimen');
        if ($where != NULL)
            $this->db_Regimen->where($where, NULL, FALSE);
        $query = $this->db_Regimen->get();
        return $query->result();
    }

    function getForma() {
        $where = "";
        $this->db_Forma->select('*');
        $this->db_Forma->from('Forma');
        if ($where != NULL)
            $this->db_Forma->where($where, NULL, FALSE);
        $query = $this->db_Forma->get();
        return $query->result();
    }

    function getAmbito() {
        $where = "";
        $this->db_Ambito->select('*');
        $this->db_Ambito->from('Ambito');
        if ($where != NULL)
            $this->db_Ambito->where($where, NULL, FALSE);
        $query = $this->db_Ambito->get();
        return $query->result();
    }

    function getTamanio() {
        $where = "";
        $this->db_Tamanio->select('*');
        $this->db_Tamanio->from('Tamanio');
        if ($where != NULL)
            $this->db_Tamanio->where($where, NULL, FALSE);
        $query = $this->db_Tamanio->get();
        return $query->result();
    }

    function getSector() {
        $where = "";
        $this->db_Sector->select('*');
        $this->db_Sector->from('Sector');
        if ($where != NULL)
            $this->db_Sector->where($where, NULL, FALSE);
        $query = $this->db_Sector->get();
        return $query->result();
    }

    function getClasificacion() {
        $where = "";
        $this->db_Clasificacion->select('*');
        $this->db_Clasificacion->from('Clasificacion');
        if ($where != NULL)
            $this->db_Clasificacion->where($where, NULL, FALSE);
        $query = $this->db_Clasificacion->get();
        return $query->result();
    }

    function getRama() {
        $where = "";
        $this->db_Rama->select('*');
        $this->db_Rama->from('Rama');
        if ($where != NULL)
            $this->db_Rama->where($where, NULL, FALSE);
        $query = $this->db_Rama->get();
        return $query->result();
    }

    function getPais() {
        $where = "";
        $this->db_Pais->select('*');
        $this->db_Pais->from('Pais');
        if ($where != NULL)
            $this->db_Pais->where($where, NULL, FALSE);
        $query = $this->db_Pais->get();
        return $query->result();
    }

    function getEstado2() {
        $where = "";
        $this->db_Estado->select('*');
        $this->db_Estado->from('Estado');
        if ($where != NULL) {
            $this->db_Estado->where($where, NULL, FALSE);
        }
        $query = $this->db_Estado->get();
        return $query->result();
    }

    function getCiudad2() {
        $where = "";
        $this->db_Ciudad->select('*');
        $this->db_Ciudad->from('Ciudad');
        if ($where != NULL)
            $this->db_Ciudad->where($where, NULL, FALSE);
        $query = $this->db_Ciudad->get();
        return $query->result();
    }

    function getArea() {
        $where = "";
        $this->db_Area->select('*');
        $this->db_Area->from('Area');
        if ($where != NULL)
            $this->db_Area->where($where, NULL, FALSE);
        $query = $this->db_Area->get();
        return $query->result();
    }

    function getPuesto() {
        $where = "";
        $this->db_Puesto->select('*');
        $this->db_Puesto->from('Puesto');
        if ($where != NULL)
            $this->db_Puesto->where($where, NULL, FALSE);
        $query = $this->db_Puesto->get();
        return $query->result();
    }

    function getPermisos($usuario) {
        $where = "IdUsuario='" . $usuario . "'";
        $this->db->select('*');
        $this->db->from('Permisos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//**************************************************************Administracion*************************************************

    function getInmuebles() {
        $where = "";
        $this->db_Inmuebles->select('*');
        $this->db_Inmuebles->from('Inmuebles');
        if ($where != NULL)
            $this->db_Inmuebles->where($where, NULL, FALSE);
        $query = $this->db_Inmuebles->get();
        return $query->result();
    }

    function getInmueblesA1(
    $Folio, $Nombre, $Calle, $No, $Colonia, $CP, $Estado, $Ciudad, $Tel, $UniAdmtivas, $Empleados, $Pisos, $Estacionamientos, $Superficie, $Construccion, $SitJuridica, $Propietario, $Arrendatario, $Renta, $Fecha
    ) {
        $data = array(
            'Folio' => $Folio,
            'Nombre' => $Nombre,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'CP' => $CP,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Tel' => $Tel,
            'UniAdmtivas' => $UniAdmtivas,
            'Empleados' => $Empleados,
            'Pisos' => $Pisos,
            'Estacionamientos' => $Estacionamientos,
            'Superficie' => $Superficie,
            'Construccion' => $Construccion,
            'SitJuridica' => $SitJuridica,
            'Propietario' => $Propietario,
            'Arrendatario' => $Arrendatario,
            'Renta' => $Renta,
            'Fecha' => $Fecha
        );
        $this->db->insert('Inmuebles', $data);
        return 1;
    }

    function getResultadoInmueble($ID) {
        $where = "ID='" . $ID . "'";
        $this->db_ResultadoInmueble->select('*');
        $this->db_ResultadoInmueble->from('Inmuebles');
        if ($where != NULL)
            $this->db_ResultadoInmueble->where($where, NULL, FALSE);
        $query = $this->db_ResultadoInmueble->get();
        return $query->result();
    }

    function getResultadoInmuebleALL() {
        $where = "";
        $this->db_ResultadoInmueble->select('*');
        $this->db_ResultadoInmueble->from('Inmuebles');
        if ($where != NULL)
            $this->db_ResultadoInmueble->where($where, NULL, FALSE);
        $query = $this->db_ResultadoInmueble->get();
        return $query->result();
    }

    function getMuebles() {
        $where = "";
        $this->db_Muebles->select('*');
        $this->db_Muebles->from('Muebles');
        if ($where != NULL)
            $this->db_Muebles->where($where, NULL, FALSE);
        $query = $this->db_Muebles->get();
        return $query->result();
    }

    function getTMobiliario() {
        $where = "";
        $this->db_Muebles->select('*');
        $this->db_Muebles->from('TMobiliario');
        if ($where != NULL)
            $this->db_Muebles->where($where, NULL, FALSE);
        $query = $this->db_Muebles->get();
        return $query->result();
    }

    function getMueblesA2(
    $Folio, $TMobiliario, $Nombre, $Marca, $Modelo, $Material, $Color, $Resguardo, $Caracteristicas, $Adquisicion, $Baja, $Estado, $Proveedor, $Serie, $Area, $Valor1, $Valor2, $Nota, $Responsable
    ) {
        $data = array(
            'Folio' => $Folio,
            'TMobiliario' => $TMobiliario,
            'Nombre' => $Nombre,
            'Marca' => $Marca,
            'Modelo' => $Modelo,
            'Material' => $Material,
            'Color' => $Color,
            'Resguardo' => $Resguardo,
            'Caracteristicas' => $Caracteristicas,
            'Adquisicion' => $Adquisicion,
            'Baja' => $Baja,
            'Estado' => $Estado,
            'Proveedor' => $Proveedor,
            'Serie' => $Serie,
            'Area' => $Area,
            'Valor1' => $Valor1,
            'Valor2' => $Valor2,
            'Nota' => $Nota,
            'Responsable' => $Responsable
        );
        $this->db->insert('Muebles', $data);
        return 1;
    }

    function getResultadoMueble($ID) {
        $where = "ID='" . $ID . "'";
        $this->db_ResultadoMueble->select('*');
        $this->db_ResultadoMueble->from('Muebles');
        if ($where != NULL)
            $this->db_ResultadoMueble->where($where, NULL, FALSE);
        $query = $this->db_ResultadoMueble->get();
        return $query->result();
    }

    function getResultadoMuebleALL() {
        $where = "";
        $this->db_ResultadoMueble->select('*');
        $this->db_ResultadoMueble->from('Muebles');
        if ($where != NULL)
            $this->db_ResultadoMueble->where($where, NULL, FALSE);
        $query = $this->db_ResultadoMueble->get();
        return $query->result();
    }

    function getResultadoMuebleA() {
        $where = "";
        $this->db_ResultadoMueble->select('*');
        $this->db_ResultadoMueble->from('Muebles');
        if ($where != NULL)
            $this->db_ResultadoMueble->where($where, NULL, FALSE);
        $query = $this->db_ResultadoMueble->get();
        return $query->result();
    }

    function getMaterialesA3(
    $Folio, $Resguardo, $Material, $Marca, $Modelo, $Entrada, $Fecha, $Cajas, $CostoCaja, $Paquete, $CostoPaquete, $Unidades, $CostoUnidad, $CostoTotal, $Proveedor, $Nota
    ) {
        $data = array(
            'Folio' => $Folio,
            'Resguardo' => $Resguardo,
            'Material' => $Material,
            'Marca' => $Marca,
            'Modelo' => $Modelo,
            'Entrada' => $Entrada,
            'Fecha' => $Fecha,
            'Cajas' => $Cajas,
            'CostoCaja' => $CostoCaja,
            'Paquete' => $Paquete,
            'CostoPaquete' => $CostoPaquete,
            'Unidades' => $Unidades,
            'CostoUnidad' => $CostoUnidad,
            'CostoTotal' => $CostoTotal,
            'Proveedor' => $Proveedor,
            'Nota' => $Nota
        );
        $this->db->insert('Materiales', $data);
        return 1;
    }

    function getCuentas(
    $Banco, $Titular, $Cuenta, $CLABE, $Fecha
    ) {
        $data = array(
            'Banco' => $Banco,
            'Titular' => $Titular,
            'NoCuenta' => $Cuenta,
            'CLABE' => $CLABE,
            'Fecha' => $Fecha
        );
        $this->db->insert('Cuentas', $data);
        return 1;
    }

    function getCuentasALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Cuentas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getSaldoCuenta(
    $IDCuenta, $Saldo, $Fecha
    ) {
        $data = array(
            'IDCuenta' => $IDCuenta,
            'Saldo' => $Saldo,
            'Fecha' => $Fecha
        );
        $this->db->insert('Saldos_Cuentas', $data);
        return 1;
    }

    function getActualizaSaldo(
    $IDCuenta, $SaldoActual, $FechaSaldo
    ) {
        $data = array(
            'IDCuenta' => $IDCuenta,
            'Saldo' => $SaldoActual,
            'Fecha' => $FechaSaldo
        );
        $this->db->insert('Saldos_Cuentas', $data);
        return 1;
    }

    function getSaldoRegistrado($IDCuenta, $Fecha) {
        $where = "IDCuenta=" . $IDCuenta . " AND Fecha='" . $Fecha . "'";
        $this->db->select('*');
        $this->db->from('Saldos_Cuentas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getHoySaldosALL($Fecha) {
        $where = "Fecha='" . $Fecha . "'";
        $this->db->select('*');
        $this->db->from('Saldos_Cuentas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTodoSaldosALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Saldos_Cuentas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getSaldoCuentaActu(
    $IDCuenta, $Saldo, $Fecha
    ) {
        $data = array(
            'Saldo' => $Saldo
        );
        $this->db->where('IDCuenta', $IDCuenta);
        $this->db->where('Fecha', $Fecha);
        $this->db->update('Saldos_Cuentas', $data);
        return 1;
    }

    function getPagoTerceros(
    $Unidad, $Personal, $Concepto, $Monto, $Proveedor, $Forma, $Caja, $ReferenciaC, $CuentaFuente, $FechaPago, $FechaRPago, $Comprobante, $Emisor
    ) {
        $data = array(
            'Unidad' => $Unidad,
            'Personal' => $Personal,
            'Concepto' => $Concepto,
            'Monto' => $Monto,
            'Proveedor' => $Proveedor,
            'Forma' => $Forma,
            'Caja' => $Caja,
            'ReferenciaC' => $ReferenciaC,
            'IDCuentaFuente' => $CuentaFuente,
            'FechaPago' => $FechaPago,
            'FechaRPago' => $FechaRPago,
            'Comprobante' => $Comprobante,
            'Emisor' => $Emisor
        );
        $this->db->insert('PagoTerceros', $data);
        return 1;
    }

    function getBorrarPagoTerceros($PagosP) {
        $this->db->where('ID', $PagosP);
        return $this->db->delete('PagosProgramados');
    }

    function getFechaPagoProgramado($PagosP) {
        $Mes = date('m');
        $data = array(
            'Pagado' => $Mes
        );
        $this->db->where('ID', $PagosP);
        $this->db->update('PagosProgramados', $data);
        return 1;
    }

    function getPagoTerceros2(
    $Unidad, $Personal, $Concepto, $Monto, $Proveedor, $Forma, $Caja, $FechaPago, $Comprobante
    ) {
        $data = array(
            'Unidad' => $Unidad,
            'Personal' => $Personal,
            'Concepto' => $Concepto,
            'Monto' => $Monto,
            'Proveedor' => $Proveedor,
            'Forma' => $Forma,
            'Caja' => $Caja,
            'FechaPago' => $FechaPago,
            'Comprobante' => $Comprobante
        );
        $this->db->insert('PagosProgramados', $data);
        return 1;
    }

    function getPagosP() {
        $where = "";
        $this->db_P1->select('*');
        $this->db_P1->from('PagosProgramados');
        if ($where != NULL)
            $this->db_P1->where($where, NULL, FALSE);
        $query = $this->db_P1->get();
        return $query->result();
    }

    function getPagosPIxID($ID) {
        $where = "ID=" . $ID;
        $this->db_P1->select('*');
        $this->db_P1->from('PagosProgramados');
        if ($where != NULL)
            $this->db_P1->where($where, NULL, FALSE);
        $query = $this->db_P1->get();
        return $query->result();
    }

    function getRestaSaldoCuenta(
    $SaldoActual, $CuentaFuente, $Fecha
    ) {
        $data = array(
            'Saldo' => $SaldoActual
        );
        $this->db->where('IDCuenta', $CuentaFuente);
        $this->db->where('Fecha', $Fecha);
        $this->db->update('Saldos_Cuentas', $data);
        return 1;
    }

    function getCajaEfectivo(
    $IO, $Fecha, $Fuente, $Unidad, $Personal, $Concepto, $Monto, $Receptor
    ) {
        $data = array(
            'IO' => $IO,
            'Fecha' => $Fecha,
            'Fuente' => $Fuente,
            'Unidad' => $Unidad,
            'Personal' => $Personal,
            'Concepto' => $Concepto,
            'Monto' => $Monto,
            'Receptor' => $Receptor
        );
        $this->db->insert('CajaEfectivo', $data);
        return 1;
    }

    function getIngresoCajaEfectivo(
    $IO, $Fecha, $Fuente, $Concepto, $Monto, $Unidad, $Personal, $Competencia, $Receptor
    ) {
        $data = array(
            'IO' => $IO,
            'Fecha' => $Fecha,
            'Fuente' => $Fuente,
            'Concepto' => $Concepto,
            'Monto' => $Monto,
            'Unidad' => $Unidad,
            'Personal' => $Personal,
            'Competencia' => $Competencia,
            'Receptor' => $Receptor
        );
        $this->db->insert('CajaEfectivo', $data);
        return 1;
    }

    function getSaldosAll() {
        $where = "";
        $this->db_P1->select('*');
        $this->db_P1->from('Saldos_Cuentas');
        if ($where != NULL)
            $this->db_P1->where($where, NULL, FALSE);
        $query = $this->db_P1->get();
        return $query->result();
    }

    function getPagosAll() {
        $where = "";
        $this->db_P2->select('*');
        $this->db_P2->from('PagoTerceros');
        if ($where != NULL)
            $this->db_P2->where($where, NULL, FALSE);
        $query = $this->db_P2->get();
        return $query->result();
    }

    function getRecibosAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Recibos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getCajaAll() {
        $where = "";
        $this->db_P3->select('*');
        $this->db_P3->from('CajaEfectivo');
        if ($where != NULL)
            $this->db_P3->where($where, NULL, FALSE);
        $query = $this->db_P3->get();
        return $query->result();
    }

    function getDepositosAll() {
        $where = "";
        $this->db_P4->select('*');
        $this->db_P4->from('DepositosCuentasCobranza');
        if ($where != NULL)
            $this->db_P4->where($where, NULL, FALSE);
        $query = $this->db_P4->get();
        return $query->result();
    }

    function getTransporteAll() {
        $where = "";
        $this->db_P7->select('*');
        $this->db_P7->from('TranspRegistro');
        if ($where != NULL)
            $this->db_P7->where($where, NULL, FALSE);
        $query = $this->db_P7->get();
        return $query->result();
    }

    function getProveedores(
    $Tipo, $Proveedor, $RFC, $Correo, $Pagina, $Calle, $No, $Colonia, $Municipio, $Estado, $Tel, $Contacto, $TelContacto, $MailContacto, $Rama, $Actividad, $Tamanio, $Servicios, $Titular, $RFCcuenta, $Cuenta, $Banco, $CLABE, $Folio, $Fecha
    ) {
        $data = array(
            'Tipo' => $Tipo,
            'Proveedor' => $Proveedor,
            'RFC' => $RFC,
            'Correo' => $Correo,
            'Pagina' => $Pagina,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'Municipio' => $Municipio,
            'Estado' => $Estado,
            'Tel' => $Tel,
            'Contacto' => $Contacto,
            'TelContacto' => $TelContacto,
            'MailContacto' => $MailContacto,
            'Rama' => $Rama,
            'Actividad' => $Actividad,
            'Tamanio' => $Tamanio,
            'Servicios' => $Servicios,
            'Titular' => $Titular,
            'RFCcuenta' => $RFCcuenta,
            'Cuenta' => $Cuenta,
            'Banco' => $Banco,
            'CLABE' => $CLABE,
            'Folio' => $Folio,
            'Fecha' => $Fecha
        );
        $this->db->insert('Proveedores', $data);
        return 1;
    }

    function getProveedores2(
    $IDProveedor, $Proveedor, $RFC, $Correo, $Pagina, $Calle, $No, $Colonia, $Tel, $Contacto, $TelContacto, $MailContacto, $Servicios, $Titular, $RFCcuenta, $Cuenta, $Banco, $CLABE
    ) {
        $data = array(
            'Proveedor' => $Proveedor,
            'RFC' => $RFC,
            'Correo' => $Correo,
            'Pagina' => $Pagina,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'Tel' => $Tel,
            'Contacto' => $Contacto,
            'TelContacto' => $TelContacto,
            'MailContacto' => $MailContacto,
            'Servicios' => $Servicios,
            'Titular' => $Titular,
            'RFCcuenta' => $RFCcuenta,
            'Cuenta' => $Cuenta,
            'Banco' => $Banco,
            'CLABE' => $CLABE
        );
        $this->db->where('ID', $IDProveedor);
        $this->db->update('Proveedores', $data);
        return 1;
    }

    function getRegistroProductos(
    $folio, $Etiqueta, $n, $Producto, $Marca, $UnidadMedida, $Proveedores
    ) {
        $data = array(
            'Folio' => $folio,
            'Etiqueta' => $Etiqueta,
            'Producto' => $Producto,
            'Marca' => $Marca,
            'UnidadMedida' => $UnidadMedida,
            'Proveedores' => $Proveedores
        );
        $this->db->insert('Productos', $data);

        $proveedores3 = explode(',', $Proveedores);
        for ($i = 0; $i < $n; $i++) {
            $datos = array(
                'Folio' => $folio,
                'Proveedor' => $proveedores3[$i]
            );
            $this->db->insert('Catalogo', $datos);
        }
        return 1;
    }

    function getCatalogo() {
        $where = "";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('Catalogo');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getCambiarPrecios(
    $n, $ID, $Precio
    ) {
        $IDb = explode(',', $ID);
        $Preciob = explode(',', $Precio);
        for ($i = 0; $i < $n; $i++) {
            $datos = array(
                'Precio' => $Preciob[$i]
            );
            $this->db->where('ID', $IDb[$i]);
            $this->db->update('Catalogo', $datos);
        }
        return 1;
    }

    function getActividades() {
        $where = "";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('Actividades');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getSaldosAll2() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Saldos_Cuentas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getProveedoresAll() {
        $where = "Tipo!='1'";
        $this->db_Proveedores->select('*');
        $this->db_Proveedores->from('Proveedores');
        if ($where != NULL)
            $this->db_Proveedores->where($where, NULL, FALSE);
        $this->db_Proveedores->order_by("Proveedor", "ASC");
        $query = $this->db_Proveedores->get();
        return $query->result();
    }

    function getProveedoresAllx() {
        $where = "";
        $this->db_Proveedores->select('*');
        $this->db_Proveedores->from('Proveedores');
        if ($where != NULL)
            $this->db_Proveedores->where($where, NULL, FALSE);
        $this->db_Proveedores->order_by("Proveedor", "ASC");
        $query = $this->db_Proveedores->get();
        return $query->result();
    }

    function getProveedoresID($ID) {
        $where = "ID='" . $ID . "'";
        $this->db_Proveedores->select('*');
        $this->db_Proveedores->from('Proveedores');
        if ($where != NULL)
            $this->db_Proveedores->where($where, NULL, FALSE);
        $query = $this->db_Proveedores->get();
        return $query->result();
    }

    function getProductosAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Productos AS P');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $this->db->order_by('Producto', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function getProductosID($ID) {
        $where = "ID='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('Productos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $this->db->order_by('Producto', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function getProductosFolio($ID) {
        $where = "Folio='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('Productos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $this->db->order_by('Producto', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function getProductosFolioProv($ID, $Prov) {
        $where = "Folio='" . $ID . "' AND Proveedor='" . $Prov . "'";
        $this->db->select('*');
        $this->db->from('Catalogo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $this->db->order_by('Producto', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function getProductosIDProv($ID) {
        $where = "Proveedor='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('Catalogo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getProvID($IDProveedor) {
        $where = "ID=" . $IDProveedor;
        $this->db_Proveedores->select('*');
        $this->db_Proveedores->from('Proveedores');
        if ($where != NULL)
            $this->db_Proveedores->where($where, NULL, FALSE);
        $query = $this->db_Proveedores->get();
        return $query->result();
    }

    function getMaterialesAll() {
        $where = "";
        $this->db_Materiales->select('*');
        $this->db_Materiales->from('Materiales');
        if ($where != NULL)
            $this->db_Materiales->where($where, NULL, FALSE);
        $query = $this->db_Materiales->get();
        return $query->result();
    }

    function getSolicitudesAprobadas() {
        $where = "Estado='Pendiente'";
        $this->db_P8->select('*');
        $this->db_P8->from('TranspSolicitudes');
        if ($where != NULL)
            $this->db_P8->where($where, NULL, FALSE);
        $query = $this->db_P8->get();
        return $query->result();
    }

    function getSolicitudID($IDAprobacion) {
        $where = "ID=" . $IDAprobacion;
        $this->db_P9->select('*');
        $this->db_P9->from('TranspSolicitudes');
        if ($where != NULL)
            $this->db_P9->where($where, NULL, FALSE);
        $query = $this->db_P9->get();
        return $query->result();
    }

    function getMaterialID($MaterialID) {
        $where = "ID=" . $MaterialID;
        $this->db_P5->select('*');
        $this->db_P5->from('Materiales');
        if ($where != NULL)
            $this->db_P5->where($where, NULL, FALSE);
        $query = $this->db_P5->get();
        return $query->result();
    }

    function getMaterialALL2() {
        $where = "";
        $this->db_P5->select('*');
        $this->db_P5->from('Materiales');
        if ($where != NULL)
            $this->db_P5->where($where, NULL, FALSE);
        $query = $this->db_P5->get();
        return $query->result();
    }

    function getSalMatlesID($MaterialID) {
        $where = "MaterialID=" . $MaterialID;
        $this->db_P6->select('*');
        $this->db_P6->from('SalidaMaterial');
        if ($where != NULL)
            $this->db_P6->where($where, NULL, FALSE);
        $query = $this->db_P6->get();
        return $query->result();
    }

    function getSalMatlesALL() {
        $where = "";
        $this->db_P6->select('*');
        $this->db_P6->from('SalidaMaterial');
        if ($where != NULL)
            $this->db_P6->where($where, NULL, FALSE);
        $query = $this->db_P6->get();
        return $query->result();
    }

    function getSalidaMaterial(
    $Material, $Asigna, $Recibe, $Cajas, $Paquete, $Unidades, $Fecha
    ) {
        $data = array(
            'MaterialID' => $Material,
            'Asigna' => $Asigna,
            'Recibe' => $Recibe,
            'Cajas' => $Cajas,
            'Paquete' => $Paquete,
            'Unidades' => $Unidades,
            'Fecha' => $Fecha
        );
        $this->db->insert('SalidaMaterial', $data);
        return 1;
    }

    function getMovProveedores(
    $Proveedor, $OtroProveedor, $RFC, $Telefono, $Adquiere, $Concepto, $Servicios, $Fecha, $Monto
    ) {
        $data = array(
            'Proveedor' => $Proveedor,
            'OtroProveedor' => $OtroProveedor,
            'RFC' => $RFC,
            'Telefono' => $Telefono,
            'Adquiere' => $Adquiere,
            'Concepto' => $Concepto,
            'Servicios' => $Servicios,
            'Fecha' => $Fecha,
            'Monto' => $Monto
        );
        $this->db->insert('MovProveedores', $data);
        return 1;
    }

    function getMovimientosAll() {
        $where = "";
        $this->db_Movimientos->select('*');
        $this->db_Movimientos->from('MovProveedores');
        if ($where != NULL)
            $this->db_Movimientos->where($where, NULL, FALSE);
        $query = $this->db_Movimientos->get();
        return $query->result();
    }

    function getTranspRegistro(
    $Clase, $Tipo, $Marca, $Modelo, $Color, $Combustible, $Propietario, $Placas, $Valor1, $Aseguradora, $Poliza, $Fecha
    ) {
        $data = array(
            'Clase' => $Clase,
            'Tipo' => $Tipo,
            'Marca' => $Marca,
            'Modelo' => $Modelo,
            'Color' => $Color,
            'Combustible' => $Combustible,
            'Propietario' => $Propietario,
            'Placas' => $Placas,
            'Valor1' => $Valor1,
            'Aseguradora' => $Aseguradora,
            'Poliza' => $Poliza,
            'Fecha' => $Fecha
        );
        $this->db->insert('TranspRegistro', $data);
        return 1;
    }

    function getTranspMantenimiento(
    $Unidad, $Mantenimiento, $Kilometraje, $Taller, $Costo, $Tareas, $Fecha
    ) {
        $data = array(
            'IDUnidad' => $Unidad,
            'Mantenimiento' => $Mantenimiento,
            'Kilometraje' => $Kilometraje,
            'Taller' => $Taller,
            'Costo' => $Costo,
            'Tareas' => $Tareas,
            'Fecha' => $Fecha
        );
        $this->db->insert('TranspMantenimiento', $data);
        return 1;
    }

    function getTranspVerificacion(
    $Unidad, $AnioVerificacion, $Semestre, $FechaRealizacion, $LugarRealizacion, $Fecha
    ) {
        $data = array(
            'IDUnidad' => $Unidad,
            'AnioVerificacion' => $AnioVerificacion,
            'Semestre' => $Semestre,
            'FechaRealizacion' => $FechaRealizacion,
            'LugarRealizacion' => $LugarRealizacion,
            'Fecha' => $Fecha
        );
        $this->db->insert('TranspVerificacion', $data);
        return 1;
    }

    function getTranspAccidente(
    $Unidad, $FechaAccidente, $HoraAccidente, $Descripcion, $Danios, $Fecha
    ) {
        $data = array(
            'IDUnidad' => $Unidad,
            'FechaAccidente' => $FechaAccidente,
            'HoraAccidente' => $HoraAccidente,
            'Descripcion' => $Descripcion,
            'Danios' => $Danios,
            'Fecha' => $Fecha
        );
        $this->db->insert('TranspAccidente', $data);
        return 1;
    }

    function getTranspSolicitud(
    $Unidad, $Comision, $FechaComision, $Descripcion, $Estado2, $Ciudad, $LugarSalida, $HoraSalida, $HoraRegreso, $Duracion, $Pasajeros, $NombresPasajeros, $Conductor, $Fecha, $Estado
    ) {
        $data = array(
            'IDUnidad' => $Unidad,
            'Comision' => $Comision,
            'FechaComision' => $FechaComision,
            'Descripcion' => $Descripcion,
            'Estado2' => $Estado2,
            'Ciudad2' => $Ciudad,
            'LugarSalida' => $LugarSalida,
            'HoraSalida' => $HoraSalida,
            'HoraRegreso' => $HoraRegreso,
            'Duracion' => $Duracion,
            'Pasajeros' => $Pasajeros,
            'NombresPasajeros' => $NombresPasajeros,
            'Conductor' => $Conductor,
            'Fecha' => $Fecha,
            'Estado' => $Estado
        );
        $this->db->insert('TranspSolicitudes', $data);
        return 1;
    }

    function getTranspAprobacion(
    $IDAprobacion, $Disponibilidad, $Estado, $IDUnidad, $Autoriza, $FechaAutorizacion, $HoraAutorizacion
    ) {
        $data = array(
            'Disponibilidad' => $Disponibilidad,
            'Estado' => $Estado,
            'IDUnidadAsignada' => $IDUnidad,
            'Autoriza' => $Autoriza,
            'FechaAutorizacion' => $FechaAutorizacion,
            'HoraAutorizacion' => $HoraAutorizacion
        );
        $this->db->where('ID', $IDAprobacion);
        $this->db->update('TranspSolicitudes', $data);
        return 1;
    }

    function getSolXIDCond($User) {
        $where = "Conductor=" . $User;
        $this->db_P10->select('*');
        $this->db_P10->from('TranspSolicitudes');
        if ($where != NULL)
            $this->db_P10->where($where, NULL, FALSE);
        $query = $this->db_P10->get();
        return $query->result();
    }

    function getSolicitudesALL2() {
        $where = "";
        $this->db_P10->select('*');
        $this->db_P10->from('TranspSolicitudes');
        if ($where != NULL)
            $this->db_P10->where($where, NULL, FALSE);
        $query = $this->db_P10->get();
        return $query->result();
    }

    function getTransprtesALL() {
        $where = "";
        $this->db_P10->select('*');
        $this->db_P10->from('TranspRegistro');
        if ($where != NULL)
            $this->db_P10->where($where, NULL, FALSE);
        $query = $this->db_P10->get();
        return $query->result();
    }

    function getTransporteID($Unidad) {
        $where = "IDUnidad=" . $Unidad;
        $this->db_P11->select('*');
        $this->db_P11->from('TranspRegistro');
        if ($where != NULL)
            $this->db_P11->where($where, NULL, FALSE);
        $query = $this->db_P11->get();
        return $query->result();
    }

    function getVerifID($Unidad) {
        $where = "IDUnidad=" . $Unidad;
        $this->db_P12->select('*');
        $this->db_P12->from('TranspVerificacion');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $query = $this->db_P12->get();
        return $query->result();
    }

    function getVerificacionesALL() {
        $where = "";
        $this->db_P12->select('*');
        $this->db_P12->from('TranspVerificacion');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $query = $this->db_P12->get();
        return $query->result();
    }

    function getMantID($Unidad) {
        $where = "IDUnidad=" . $Unidad;
        $this->db_P12->select('*');
        $this->db_P12->from('TranspMantenimiento');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $query = $this->db_P12->get();
        return $query->result();
    }

    function getMantenimientoALL() {
        $where = "";
        $this->db_P12->select('*');
        $this->db_P12->from('TranspMantenimiento');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $query = $this->db_P12->get();
        return $query->result();
    }

    function getAcciID($Unidad) {
        $where = "IDUnidad=" . $Unidad;
        $this->db_P12->select('*');
        $this->db_P12->from('TranspAccidente');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $query = $this->db_P12->get();
        return $query->result();
    }

    function getAccidentesALL() {
        $where = "";
        $this->db_P12->select('*');
        $this->db_P12->from('TranspAccidente');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $query = $this->db_P12->get();
        return $query->result();
    }

    function getUsuarios2(
    $nombre, $apaterno, $amaterno, $email, $password1, $idArea, $idPuesto, $FechaAlta
    ) {
        $data = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'login' => $email,
            'password' => $password1,
            'email' => $email,
            'idArea' => $idArea,
            'idPuesto' => $idPuesto,
            'FechaAlta' => $FechaAlta,
            'Desde' => $FechaAlta
        );
        $this->db->insert('usuarios', $data);

        $where = "login='" . $email . "'";
        $this->db_P12->select('*');
        $this->db_P12->from('usuarios');
        if ($where != NULL)
            $this->db_P12->where($where, NULL, FALSE);
        $resultante = $this->db_P12->get();
        $r = $resultante->result();

        foreach ($r as $resultante1)
            $x = $resultante1->Id;

        $Info = array(
            'IDUser' => $x,
            'Nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'Correo' => $email,
            'password' => $password1
        );
        $this->db->insert('InformacionEmpleados', $Info);
        $permisos = array(
            'Usuario' => $x,
            'Personal' => '1'
        );
        $this->db->insert('Permisos', $permisos);
        return 1;
    }

    function getInfoEmpleALL2() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('InformacionEmpleados');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getInfoEmpleALL3() {
        $where = "FechaBaja=''";
        $this->db_IE->select('*');
        $this->db_IE->from('usuarios');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getBAJA(
    $Empleado, $Fecha
    ) {
        $data = array(
            'FechaBaja' => $Fecha
        );
        $this->db->where('Id', $Empleado);
        $this->db->update('usuarios', $data);
        return 1;
    }

    function getInfoEmple($indiceuser) {
        $where = "IDUser=" . $indiceuser;
        $this->db_IE->select('*');
        $this->db_IE->from('InformacionEmpleados');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getValoracionesALL() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('ValoracionesE');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getFormacionesALL() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('FCEmpleados');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getDocumentosALL2() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('Documentos');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getTabuladorALL() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('Puesto');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getRemuneracionesALL() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('Remuneraciones');
        if ($where != NULL)
            $this->db_IE->where($where, NULL, FALSE);
        $query = $this->db_IE->get();
        return $query->result();
    }

    function getInfoEmpleALL() {
        $where = "";
        $this->db_IE->select('*');
        $this->db_IE->from('InformacionEmpleados');
        if ($where != NULL) {
            $this->db_IE->where($where, NULL, FALSE);
        }$query = $this->db_IE->get();
        return $query->result();
    }

    function getEmpleadoID($Empleado) {
        $where = "Id=" . $Empleado;
        $this->db_InE->select('*');
        $this->db_InE->from('usuarios');
        if ($where != NULL) {
            $this->db_InE->where($where, NULL, FALSE);
        }
        $query = $this->db_InE->get();
        if ($query != null) {
            return $query->result();
        } else {
            return null;
        }
    }

    function gethistorial($Empleado) {
        $where = "IDUser=" . $Empleado;
        $this->db_InE->select('*');
        $this->db_InE->from('HistorialPuestos');
        if ($where != NULL) {
            $this->db_InE->where($where, NULL, FALSE);
        }
        $query = $this->db_InE->get();
        return $query->result();
    }

    function gethistorialALL() {
        $where = "";
        $this->db_InE->select('*');
        $this->db_InE->from('HistorialPuestos');
        if ($where != NULL)
            $this->db_InE->where($where, NULL, FALSE);
        $query = $this->db_InE->get();
        return $query->result();
    }

    function getInfEmpleado(
    $user, $Genero, $EstadoCivil, $CURP, $RFC, $Cedula, $NSS, $NP, $NA, $Licencia, $TipoLicencia, $NoLicencia, $Calle, $No, $Colonia, $Pais, $Estado, $Ciudad, $Cel, $Tel, $facebook, $twitter, $linkedin, $Instagram, $Estudios, $Certificado, $Institucion, $Programa, $Ingles, $Software, $Cargo, $Organizacion, $FechaInicio, $FechaTermino, $TelTrabajo, $SueldoAnt, $Funciones, $ViveCon, $Dependientes, $Auto, $DuenioCasa, $Renta, $SueldoDeseado, $Hijos, $NHijos, $OtrosIngresos, $OtroMes, $Deudas, $MDeuda, $Abono, $Gastos, $Salud, $PadeceEnfermedad, $Enfermedad, $Discapacidad, $TipoDiscapacidad, $ActividadF, $ActividadFisica, $Estatura, $Peso, $HaceDeporte, $Deporte, $Frecuencia, $Pasatiempo, $Fecha
    ) {
        $data = array(
            'Genero' => $Genero,
            'EstadoCivil' => $EstadoCivil,
            'CURP' => $CURP,
            'RFC' => $RFC,
            'Cedula' => $Cedula,
            'NSS' => $NSS,
            'NP' => $NP,
            'NA' => $NA,
            'Licencia' => $Licencia,
            'TipoLicencia' => $TipoLicencia,
            'NoLicencia' => $NoLicencia,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'Pais' => $Pais,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Cel' => $Cel,
            'Tel' => $Tel,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'Instagram' => $Instagram,
            'Estudios' => $Estudios,
            'Certificado' => $Certificado,
            'Institucion' => $Institucion,
            'Programa' => $Programa,
            'Ingles' => $Ingles,
            'Software' => $Software,
            'Cargo' => $Cargo,
            'Organizacion' => $Organizacion,
            'FechaInicio' => $FechaInicio,
            'FechaTermino' => $FechaTermino,
            'TelTrabajo' => $TelTrabajo,
            'SueldoAnt' => $SueldoAnt,
            'Funciones' => $Funciones,
            'ViveCon' => $ViveCon,
            'Dependientes' => $Dependientes,
            'Auto' => $Auto,
            'DuenioCasa' => $DuenioCasa,
            'Renta' => $Renta,
            'SueldoDeseado' => $SueldoDeseado,
            'Hijos' => $Hijos,
            'NHijos' => $NHijos,
            'OtrosIngresos' => $OtrosIngresos,
            'OtroMes' => $OtroMes,
            'Deudas' => $Deudas,
            'MDeuda' => $MDeuda,
            'Abono' => $Abono,
            'Gastos' => $Gastos,
            'Salud' => $Salud,
            'PadeceEnfermedad' => $PadeceEnfermedad,
            'Enfermedad' => $Enfermedad,
            'Discapacidad' => $Discapacidad,
            'TipoDiscapacidad' => $TipoDiscapacidad,
            'ActividadF' => $ActividadF,
            'ActividadFisica' => $ActividadFisica,
            'Estatura' => $Estatura,
            'Peso' => $Peso,
            'HaceDeporte' => $HaceDeporte,
            'Deporte' => $Deporte,
            'Frecuencia' => $Frecuencia,
            'Pasatiempo' => $Pasatiempo,
            'Fecha' => $Fecha
        );
        $this->db->where('IDUser', $user);
        $this->db->update('InformacionEmpleados', $data);
        return 1;
    }

    function getFCEmpleados(
    $IDUser, $Modalidad, $Programa, $Institucion, $FechaInicio, $FechaTermino, $Fecha
    ) {
        $data = array(
            'IDUser' => $IDUser,
            'Modalidad' => $Modalidad,
            'Programa' => $Programa,
            'Institucion' => $Institucion,
            'FechaInicio' => $FechaInicio,
            'FechaTermino' => $FechaTermino,
            'Fecha' => $Fecha
        );
        $this->db->insert('FCEmpleados', $data);
        return 1;
    }

    function getCambioP(
    $Empleado, $FechaAlta, $PAnterior, $AAnterior, $AreaInterno, $PuestoInterno, $FechaBaja
    ) {
        $data = array(
            'IDUser' => $Empleado,
            'FechaAlta' => $FechaAlta,
            'idPuesto' => $PAnterior,
            'idArea' => $AAnterior,
            'FechaBaja' => $FechaBaja
        );
        $this->db->insert('HistorialPuestos', $data);
        $Info = array(
            'idArea' => $AreaInterno,
            'idPuesto' => $PuestoInterno,
            'FechaAlta' => $FechaBaja
        );
        $this->db->where('Id', $Empleado);
        $this->db->update('usuarios', $Info);
        return 1;
    }

    function getValoracion(
    $IDEmpleado, $Mes, $FechaV, $Peso, $Talla, $Indice, $Diagnostico, $Observacion, $Fecha
    ) {
        $data = array(
            'IDEmpleado' => $IDEmpleado,
            'Mes' => $Mes,
            'FechaV' => $FechaV,
            'Peso' => $Peso,
            'Talla' => $Talla,
            'Indice' => $Indice,
            'Diagnostico' => $Diagnostico,
            'Observacion' => $Observacion,
            'Fecha' => $Fecha
        );
        $this->db->insert('ValoracionesE', $data);
        return 1;
    }

    function getRemuneraciones(
    $Empleado, $meses, $Dias, $DiaPago, $FormaPago, $Sueldo, $Vacacional, $Antiguedad, $IMSS, $INFONAVIT, $Aguinaldo, $Bono, $Despensa, $Horas, $Percepciones, $ISPT, $Prestamo, $Ahorro, $IMSS2, $Falta, $Deducciones, $Pago, $Fecha
    ) {
        $data = array(
            'Empleado' => $Empleado,
            'meses' => $meses,
            'Dias' => $Dias,
            'DiaPago' => $DiaPago,
            'FormaPago' => $FormaPago,
            'Sueldo' => $Sueldo,
            'Vacacional' => $Vacacional,
            'Antiguedad' => $Antiguedad,
            'IMSS' => $IMSS,
            'INFONAVIT' => $INFONAVIT,
            'Aguinaldo' => $Aguinaldo,
            'Bono' => $Bono,
            'Despensa' => $Despensa,
            'Horas' => $Horas,
            'Percepciones' => $Percepciones,
            'ISPT' => $ISPT,
            'Prestamo' => $Prestamo,
            'Ahorro' => $Ahorro,
            'IMSS2' => $IMSS2,
            'Falta' => $Falta,
            'Deducciones' => $Deducciones,
            'Pago' => $Pago,
            'Fecha' => $Fecha
        );
        $this->db->insert('Remuneraciones', $data);
        return 1;
    }

    function getIncSolicitud(
    $Empleado, $TAusencia, $NDias, $NHoras, $D1Ausencia, $D2Ausencia, $TIncapacidad, $Tpermiso, $Remunerada, $Fecha, $Estado
    ) {
        $data = array(
            'Empleado' => $Empleado,
            'TAusencia' => $TAusencia,
            'NDias' => $NDias,
            'NHoras' => $NHoras,
            'D1Ausencia' => $D1Ausencia,
            'D2Ausencia' => $D2Ausencia,
            'TIncapacidad' => $TIncapacidad,
            'Tpermiso' => $Tpermiso,
            'Remunerada' => $Remunerada,
            'Fecha' => $Fecha,
            'Estado' => $Estado
        );
        $this->db->insert('IncSolicitud', $data);
        return 1;
    }

    function getSolIncApro() {
        $where = "Estado='Pendiente'";
        $this->db_P15->select('*');
        $this->db_P15->from('IncSolicitud');
        if ($where != NULL)
            $this->db_P15->where($where, NULL, FALSE);
        $query = $this->db_P15->get();
        return $query->result();
    }

    function getINCSolID($IDAprobacion) {
        $where = "ID=" . $IDAprobacion;
        $this->db_P16->select('*');
        $this->db_P16->from('IncSolicitud');
        if ($where != NULL)
            $this->db_P16->where($where, NULL, FALSE);
        $query = $this->db_P16->get();
        return $query->result();
    }

    function getINCAprobacion(
    $IDAprobacion, $Remunerada, $Estado, $FechaAutorizacion
    ) {
        $data = array(
            'Remunerada' => $Remunerada,
            'Estado' => $Estado,
            'FechaAutorizacion' => $FechaAutorizacion
        );
        $this->db->where('ID', $IDAprobacion);
        $this->db->update('IncSolicitud', $data);
        return 1;
    }

    function getIncSolView($User) {
        $where = "Empleado=" . $User;
        $this->db_P17->select('*');
        $this->db_P17->from('IncSolicitud');
        if ($where != NULL)
            $this->db_P17->where($where, NULL, FALSE);
        $query = $this->db_P17->get();
        return $query->result();
    }

    function getIncSolALL() {
        $where = "";
        $this->db_P17->select('*');
        $this->db_P17->from('IncSolicitud');
        if ($where != NULL)
            $this->db_P17->where($where, NULL, FALSE);
        $query = $this->db_P17->get();
        return $query->result();
    }

    function getDocumentos() {
        $where = "";
        $this->db_P18->select('*');
        $this->db_P18->from('Documentos');
        if ($where != NULL)
            $this->db_P18->where($where, NULL, FALSE);
        $query = $this->db_P18->get();
        return $query->result();
    }

    function getExpediente(
    $Empleado, $Documento, $Observacion, $Fecha, $Archivo
    ) {
        $data = array(
            'idEmpleado' => $Empleado,
            'idDocumento' => $Documento,
            'Observacion' => $Observacion,
            'Fecha' => $Fecha,
            'Archivo' => $Archivo
        );
        $this->db->insert('Expediente', $data);
        return 1;
    }

    function getResultadoExp($ID) {
        $where = "idEmpleado=" . $ID;
        $this->db->select('*');
        $this->db->from('Expediente');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getResultadoExpALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Expediente');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getOportunidadesEmpleoALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('OportESolicitudes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//**************************************************************Fin de Administracion*************************************************  
//******************************************************Contabilidad*****************************************************************
    function getContRevision(
    $Cliente, $Mes, $Poliza, $ObservacionesPoliza, $ComprobanteI, $ObservacionesComprobantes, $PolizaEgreso, $ObservacionesPolizaEgreso, $ComprobanteE, $ObservacionesComprobante2, $PolizaDiario, $ObservacionesPolizaDiario, $Estados, $ObservacionesEstados, $SAT, $ObservacionesSAT, $Cuotas, $ObservacionesCuotas, $IMSS, $ObservacionesIMSS, $INFONAVIT, $ObservacionesINFONAVIT, $Nomina, $ObservacionesNomina, $Fecha
    ) {
        $data = array(
            'Folio' => $Cliente,
            'Mes' => $Mes,
            'Poliza' => $Poliza,
            'ObservacionesPoliza' => $ObservacionesPoliza,
            'ComprobanteI' => $ComprobanteI,
            'ObservacionesComprobantes' => $ObservacionesComprobantes,
            'PolizaEgreso' => $PolizaEgreso,
            'ObservacionesPolizaEgreso' => $ObservacionesPolizaEgreso,
            'ComprobanteE' => $ComprobanteE,
            'ObservacionesComprobante2' => $ObservacionesComprobante2,
            'PolizaDiario' => $PolizaDiario,
            'ObservacionesPolizaDiario' => $ObservacionesPolizaDiario,
            'Estados' => $Estados,
            'ObservacionesEstados' => $ObservacionesEstados,
            'SAT' => $SAT,
            'ObservacionesSAT' => $ObservacionesSAT,
            'Cuotas' => $Cuotas,
            'ObservacionesCuotas' => $ObservacionesCuotas,
            'IMSS' => $IMSS,
            'ObservacionesIMSS' => $ObservacionesIMSS,
            'INFONAVIT' => $INFONAVIT,
            'ObservacionesINFONAVIT' => $ObservacionesINFONAVIT,
            'Nomina' => $Nomina,
            'ObservacionesNomina' => $ObservacionesNomina,
            'Fecha' => $Fecha
        );
        $this->db->insert('Contabilidad', $data);
        return 1;
    }

    function getTraContablesID($ID_cliente) {
        $where = "Cliente='" . $ID_cliente . "'";
        $this->db_TramitesCont->select('*');
        $this->db_TramitesCont->from('ContHistorico');
        if ($where != NULL)
            $this->db_TramitesCont->where($where, NULL, FALSE);
        $query = $this->db_TramitesCont->get();
        return $query->result();
    }

    function getTraContablesID2() {
        $where = "";
        $this->db_TramitesCont->select('*');
        $this->db_TramitesCont->from('ContHistorico');
        if ($where != NULL)
            $this->db_TramitesCont->where($where, NULL, FALSE);
        $query = $this->db_TramitesCont->get();
        return $query->result();
    }

    function getEBalance(
    $Cliente, $Mes, $Balance
    ) {
        $data = array(
            'CMes_B' => $Mes,
            'CBalance' => $Balance
        );
        $this->db->where('Folio', $Cliente);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getEBalanceCP(
    $Cliente, $Mes, $Balance
    ) {
        $data = array(
            'CMes_BCP' => $Mes,
            'CBalanceCP' => $Balance
        );
        $this->db->where('Folio', $Cliente);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getEEstadoR(
    $Cliente, $Mes, $Estado
    ) {
        $data = array(
            'CMes_E' => $Mes,
            'CEstado' => $Estado
        );
        $this->db->where('Folio', $Cliente);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getCAnual(
    $Cliente, $Mes, $Estado
    ) {
        $data = array(
            'CMes_Anual' => $Mes,
            'CEdoAnual' => $Estado
        );
        $this->db->where('Folio', $Cliente);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getCDIOT(
    $Cliente, $Mes, $Estado
    ) {
        $data = array(
            'CMes_DIOT' => $Mes,
            'CEdoDIOT' => $Estado
        );
        $this->db->where('Folio', $Cliente);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getCont_Historico(
    $Cliente, $Tramite, $Balance, $ObservacionesBG, $Mes, $Fecha, $Hora
    ) {
        $data = array(
            'Cliente' => $Cliente,
            'Tramite' => $Tramite,
            'Estado' => $Balance,
            'ObservacionesBG' => $ObservacionesBG,
            'Mes' => $Mes,
            'Fecha' => $Fecha,
            'Hora' => $Hora
        );
        $this->db->insert('ContHistorico', $data);
        return 1;
    }

    function getTramitesCont() {
        $where = "";
        $this->db_TramitesCont->select('*');
        $this->db_TramitesCont->from('Directorio');
        if ($where != NULL)
            $this->db_TramitesCont->where($where, NULL, FALSE);
        $query = $this->db_TramitesCont->get();
        return $query->result();
    }

    function getEstatusCont() {
        $where = "";
        $this->db->select('*');
        $this->db->from('SegSoc_estatus_APatIMSS');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getDocContALL() {
        $where = "";
        $this->db_TramitesCont->select('*');
        $this->db_TramitesCont->from('Contabilidad');
        if ($where != NULL)
            $this->db_TramitesCont->where($where, NULL, FALSE);
        $query = $this->db_TramitesCont->get();
        return $query->result();
    }

    function getContTramite() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ContTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getCont_9(
    $Cliente, $Mes, $Tramite, $FechaSolicitud, $Evidencia, $Nombre
    ) {
        $data = array(
            'Cliente' => $Cliente,
            'Mes' => $Mes,
            'Tramite' => $Tramite,
            'FechaSolicitud' => $FechaSolicitud,
            'Evidencia' => $Evidencia,
            'NDocumento' => $Nombre
        );
        $this->db->insert('ContDocumentos', $data);
        return 1;
    }

    function getCont_Estatus($Folio, $Estatus
    ) {
        $data = array(
            'Estatus' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

//******************************************************Finb contabilidad************************************************************
//******************************************************Seguridad social************************************************************
    function getestatusSS() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('SegSoc_estatus_APatIMSS');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoSSTramite($ID) {
        $where = "Cliente='" . $ID . "'";
        $this->db_estatus->select('*');
        $this->db_estatus->from('SSDocumentos');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoContTramite2($ID) {
        $where = "Cliente='" . $ID . "'";
        $this->db_estatus->select('*');
        $this->db_estatus->from('ContDocumentos');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getALLdocumentosSSTCont() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('ContDocumentos');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoSSTramiteCont($ID) {
        $where = "Cliente='" . $ID . "'";
        $this->db_estatus->select('*');
        $this->db_estatus->from('ContDocumentos');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoSSTramiteALLCont() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('ContTramites');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getALLdocumentosSST() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('SSDocumentos');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoSSTramiteALL() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('SSTramites');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getSS_Historico(
    $Folio, $Tramite, $Estatus, $Asesoria, $Fecha, $Hora
    ) {
        $data = array(
            'Cliente' => $Folio,
            'Tramite' => $Tramite,
            'Estado' => $Estatus,
            'Asesoria' => $Asesoria,
            'Fecha' => $Fecha,
            'Hora' => $Hora
        );
        $this->db->insert('SSHistorico', $data);
        return 1;
    }

    function getSS_0(
    $Cliente, $Mes, $Tramite, $FechaSolicitud, $Evidencia, $Nombre
    ) {
        $data = array(
            'Cliente' => $Cliente,
            'Mes' => $Mes,
            'Tramite' => $Tramite,
            'FechaSolicitud' => $FechaSolicitud,
            'Evidencia' => $Evidencia,
            'NDocumento' => $Nombre
        );
        $this->db->insert('SSDocumentos', $data);
        return 1;
    }

    function getSS_1(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_1' => $Fecha,
            'SS_1' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_2(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_2' => $Fecha,
            'SS_2' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_3(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_3' => $Fecha,
            'SS_3' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_4(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_4' => $Fecha,
            'SS_4' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_5(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_5' => $Fecha,
            'SS_5' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_6(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_6' => $Fecha,
            'SS_6' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_7(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_7' => $Fecha,
            'SS_7' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_8(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_8' => $Fecha,
            'SS_8' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_9(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_9' => $Fecha,
            'SS_9' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_10(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_10' => $Fecha,
            'SS_10' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_11(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_11' => $Fecha,
            'SS_11' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_12(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_12' => $Fecha,
            'SS_12' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_13(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_13' => $Fecha,
            'SS_13' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_14(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_14' => $Fecha,
            'SS_14' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_15(
    $Folio, $Fecha, $Estatus, $Nomina, $Trabajadores
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_15' => $Fecha,
            'SS_15' => $Estatus,
            'Nomina_SS_15' => $Nomina,
            'Trabajadores_SS_15' => $Trabajadores
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_18(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_18' => $Fecha,
            'SS_18' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_19(
    $Folio, $Fecha, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_19' => $Fecha,
            'SS_19' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSS_20(
    $Folio, $Fecha, $Asesoria, $Estatus
    ) {
        $data = array(
            'Folio' => $Folio,
            'Fecha_SS_20' => $Fecha,
            'Asesoria' => $Asesoria,
            'SS_20' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getSSTramite() {
        $where = "";
        $this->db->select('*');
        $this->db->from('SSTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getEstatusALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('SegSoc_estatus_APatIMSS');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramitesSALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('SSTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramiteSSID($ID_cliente) {
        $where = "Cliente='" . $ID_cliente . "'";
        $this->db_TramitesCont->select('*');
        $this->db_TramitesCont->from('SSHistorico');
        if ($where != NULL)
            $this->db_TramitesCont->where($where, NULL, FALSE);
        $query = $this->db_TramitesCont->get();
        return $query->result();
    }

    function getTramiteSSIDNomina($ID_cliente) {
        $where = "Cliente='" . $ID_cliente . "' AND Tramite='18'";
        $this->db_TramitesCont->select('*');
        $this->db_TramitesCont->from('SSHistorico');
        if ($where != NULL)
            $this->db_TramitesCont->where($where, NULL, FALSE);
        $query = $this->db_TramitesCont->get();
        return $query->result();
    }

//******************************************************Fin de seguridad social************************************************
//**************************_______________Gráficas____________________***********************************************
    function getDirectorio() {
        $where = "";
        $this->db->select('Estatus');
        $this->db->from('Directorio');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getEstatusI() {
        $where = "";
        $this->db->select('*');
        $this->db->from('estatus');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//**************************_______________Fin Graficas________________***************************************************
//******************************************Directorio********************************************************************
    function getdatos($Folio, $Responsable, $Sucursal, $NombreC, $RazonS, $RFC, $RepresentanteL, $cliente, $Tipo_cliente, $SubTipo_cliente, $RegimenJ, $FormaJ, $AmbitoA, $Tamanio, $Sector, $CURP, $Rama, $Calle, $No, $Colonia, $CP, $Pais, $Estado, $Ciudad, $Lada, $Tel, $Pagina, $facebook, $twitter, $linkedin, $google, $Contacto, $Profesion, $Puesto, $Correo, $C_Lada, $C_Tel, $C_Ext, $Construccion, $Ainmuebles, $Comercio, $Amaquinaria, $AdmonConstruccion, $Autotransportes, $Fecha
    ) {
        $data = array(
            'Sucursal' => $Sucursal,
            'Estatus' => '0',
            'Folio' => $Folio,
            'id_responsable' => $Responsable,
            'NombreC' => $NombreC,
            'RazonS' => $RazonS,
            'RFC' => $RFC,
            'RepresentanteL' => $RepresentanteL,
            'cliente' => $cliente,
            'Tipo_cliente' => $Tipo_cliente,
            'SubTipo_cliente' => $SubTipo_cliente,
            'RegimenJ' => $RegimenJ,
            'FormaJ' => $FormaJ,
            'AmbitoA' => $AmbitoA,
            'Tamanio' => $Tamanio,
            'Sector' => $Sector,
            'CURP' => $CURP,
            'Rama' => $Rama,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'CP' => $CP,
            'Pais' => $Pais,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Lada' => $Lada,
            'Tel' => $Tel,
            'Pagina' => $Pagina,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'google' => $google,
            'Contacto' => $Contacto,
            'Profesion' => $Profesion,
            'Puesto' => $Puesto,
            'Correo' => $Correo,
            'C_Lada' => $C_Lada,
            'C_Tel' => $C_Tel,
            'C_Ext' => $C_Ext,
            'Contables' => $Construccion,
            'Fiscales' => $Ainmuebles,
            'GestionesIMSS' => $Comercio,
            'Capacitacion' => $Amaquinaria,
            'AdmonConst' => $AdmonConstruccion,
            'Autotransportes' => $Autotransportes,
            'Fecha' => $Fecha
        );
        $this->db->insert('Directorio', $data);
        $data = $this->db->last_query();
        return $data;
    }

    function getdatos2($Folio, $Sucursal, $RFC, $CURP, $Calle, $No, $Colonia, $CP, $Lada, $Tel, $Pagina, $facebook, $twitter, $linkedin, $google, $Contacto, $Profesion, $Puesto, $Correo, $C_Lada, $C_Tel, $C_Ext, $Contrasenia, $CIEC, $NIP, $CIECfort, $ContraseniaCIEC, $ContraseniaSello, $UsuarioITSE, $ContraseniaITSE, $Antiguedad, $PagoDespacho, $Observaciones, $ResponsableAct, $Actualizada
    ) {
        $data = array(
            'RFC' => $RFC,
            'Sucursal' => $Sucursal,
            'CURP' => $CURP,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'CP' => $CP,
            'Lada' => $Lada,
            'Tel' => $Tel,
            'Pagina' => $Pagina,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'google' => $google,
            'Contacto' => $Contacto,
            'Profesion' => $Profesion,
            'Puesto' => $Puesto,
            'Correo' => $Correo,
            'C_Lada' => $C_Lada,
            'C_Tel' => $C_Tel,
            'C_Ext' => $C_Ext,
            'Contrasenia' => $Contrasenia,
            'CIEC' => $CIEC,
            'NIP' => $NIP,
            'CIEC_fortalecida' => $CIECfort,
            'Cont_clave_fiel' => $ContraseniaCIEC,
            'Cont_sello_digital' => $ContraseniaSello,
            'UsuarioITSE' => $UsuarioITSE,
            'ContraseniaITSE' => $ContraseniaITSE,
            'Antiguedad' => $Antiguedad,
            'PagoDespacho' => $PagoDespacho,
            'Observaciones' => $Observaciones,
            'id_responsable' => $ResponsableAct,
            'Actualizada' => $Actualizada
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

//***************************************fin Directorio********************************************************************
//***************************************Modelo vinculacion****************************************************************
    function getEstanciaID($Estancia) {
        $where = "id='" . $Estancia . "'";
        $this->db_Estancia->select('*');
        $this->db_Estancia->from('EstSolicitud');
        if ($where != NULL)
            $this->db_Estancia->where($where, NULL, FALSE);
        $query = $this->db_Estancia->get();
        return $query->result();
    }

    function getEstancias() {
        $where = "Aprobacion='Pendiente'";
        $this->db_Estancias->select('*');
        $this->db_Estancias->from('EstSolicitud');
        if ($where != NULL)
            $this->db_Estancias->where($where, NULL, FALSE);
        $query = $this->db_Estancias->get();
        return $query->result();
    }

    function getEstanciasSI() {
        $where = "Aprobacion='Sí'";
        $this->db_Estancias->select('*');
        $this->db_Estancias->from('EstSolicitud');
        if ($where != NULL)
            $this->db_Estancias->where($where, NULL, FALSE);
        $query = $this->db_Estancias->get();
        return $query->result();
    }

    function getEstanciasNA() {
        $where = "Aprobacion!='Sí'";
        $this->db_Estancias->select('*');
        $this->db_Estancias->from('EstSolicitud');
        if ($where != NULL)
            $this->db_Estancias->where($where, NULL, FALSE);
        $query = $this->db_Estancias->get();
        return $query->result();
    }

    function getEstanciasALL() {
        $where = "";
        $this->db_Estancias->select('*');
        $this->db_Estancias->from('EstSolicitud');
        if ($where != NULL)
            $this->db_Estancias->where($where, NULL, FALSE);
        $query = $this->db_Estancias->get();
        return $query->result();
    }

    function getProyectos() {
        $where = "";
        $this->db_Proyectos->select('*');
        $this->db_Proyectos->from('EstLabProyectos');
        if ($where != NULL)
            $this->db_Proyectos->where($where, NULL, FALSE);
        $query = $this->db_Proyectos->get();
        return $query->result();
    }

    function getFormacion() {
        $where = "";
        $this->db_Formacion->select('*');
        $this->db_Formacion->from('ForTemas');
        if ($where != NULL)
            $this->db_Formacion->where($where, NULL, FALSE);
        $query = $this->db_Formacion->get();
        return $query->result();
    }

    function getModalidad() {
        $where = "";
        $this->db_Modalidad->select('*');
        $this->db_Modalidad->from('ForModalidad');
        if ($where != NULL)
            $this->db_Modalidad->where($where, NULL, FALSE);
        $query = $this->db_Modalidad->get();
        return $query->result();
    }

    function getActividad() {
        $where = "";
        $this->db_Actividad->select('*');
        $this->db_Actividad->from('ForActividad');
        if ($where != NULL)
            $this->db_Actividad->where($where, NULL, FALSE);
        $query = $this->db_Actividad->get();
        return $query->result();
    }

    function getActividadS() {
        $where = "Aprobacion=''";
        $this->db_ForSolicitudes->select('*');
        $this->db_ForSolicitudes->from('ForSolicitudes');
        if ($where != NULL)
            $this->db_ForSolicitudes->where($where, NULL, FALSE);
        $query = $this->db_ForSolicitudes->get();
        return $query->result();
    }

    function getJornada() {
        $where = "";
        $this->db_Jornada->select('*');
        $this->db_Jornada->from('OportJornada');
        if ($where != NULL)
            $this->db_Jornada->where($where, NULL, FALSE);
        $query = $this->db_Jornada->get();
        return $query->result();
    }

    function getContratacion() {
        $where = "";
        $this->db_Contratacion->select('*');
        $this->db_Contratacion->from('OportContratacion');
        if ($where != NULL)
            $this->db_Contratacion->where($where, NULL, FALSE);
        $query = $this->db_Contratacion->get();
        return $query->result();
    }

    function getNivelEstudios() {
        $where = "";
        $this->db_Nivel->select('*');
        $this->db_Nivel->from('OportNivelE');
        if ($where != NULL)
            $this->db_Nivel->where($where, NULL, FALSE);
        $query = $this->db_Nivel->get();
        return $query->result();
    }

    function getSolicitudesALL() {
        $where = "";
        $this->db_Nivel->select('*');
        $this->db_Nivel->from('SolicitudesEmpleo');
        if ($where != NULL)
            $this->db_Nivel->where($where, NULL, FALSE);
        $query = $this->db_Nivel->get();
        return $query->result();
    }

    function getEvaluacionesALL2() {
        $where = "";
        $this->db_Nivel->select('*');
        $this->db_Nivel->from('ForEvaluaciones');
        if ($where != NULL)
            $this->db_Nivel->where($where, NULL, FALSE);
        $query = $this->db_Nivel->get();
        return $query->result();
    }

    function getApoyoEconomico() {
        $where = "";
        $this->db_Apoyos->select('*');
        $this->db_Apoyos->from('Apoyos');
        if ($where != NULL)
            $this->db_Apoyos->where($where, NULL, FALSE);
        $query = $this->db_Apoyos->get();
        return $query->result();
    }

    function getEstancia() {
        $where = "";
        $this->db_Estancia->select('*');
        $this->db_Estancia->from('Estancia');
        if ($where != NULL)
            $this->db_Estancia->where($where, NULL, FALSE);
        $query = $this->db_Estancia->get();
        return $query->result();
    }

    function getEstudios() {
        $where = "";
        $this->db_Estudios->select('*');
        $this->db_Estudios->from('Estudios');
        if ($where != NULL)
            $this->db_Estudios->where($where, NULL, FALSE);
        $query = $this->db_Estudios->get();
        return $query->result();
    }

    function getDuracion() {
        $where = "";
        $this->db_Duracion->select('*');
        $this->db_Duracion->from('Duracion');
        if ($where != NULL)
            $this->db_Duracion->where($where, NULL, FALSE);
        $query = $this->db_Duracion->get();
        return $query->result();
    }

    function getTemasALL() {
        $where = "";
        $this->db_Duracion->select('*');
        $this->db_Duracion->from('ForTemas');
        if ($where != NULL)
            $this->db_Duracion->where($where, NULL, FALSE);
        $query = $this->db_Duracion->get();
        return $query->result();
    }

    function getEstLabProyectos(
    $Tema_1, $Tema_2, $Tema_3, $Tema_4, $Tema_5, $Tema_6, $Tema_7
    ) {
        $data = array(
            'Tema_1' => $Tema_1,
            'Tema_2' => $Tema_2,
            'Tema_3' => $Tema_3,
            'Tema_4' => $Tema_4,
            'Tema_5' => $Tema_5,
            'Tema_6' => $Tema_6,
            'Tema_7' => $Tema_7
        );
        $this->db->where('id', '1');
        $this->db->update('EstLabProyectos', $data);
        return 1;
    }

    function getEstanciaSolicitud(
    $NombreProyecto, $Solicitante, $NivelEstudios, $ProgramaEducativo, $Institucion, $Sector, $DomicilioInstCalle, $DomicilioInstNumero, $DomicilioInstColonia, $DomicilioInstTelefono, $Estado, $Ciudad, $Duracion, $Justificacion, $Objetivo, $Metas, $Actividades, $Aprobacion
    ) {
        $data = array(
            'NombreProyecto' => $NombreProyecto,
            'Solicitante' => $Solicitante,
            'NivelEstudios' => $NivelEstudios,
            'ProgramaEducativo' => $ProgramaEducativo,
            'Institucion' => $Institucion,
            'Sector' => $Sector,
            'DomicilioInstCalle' => $DomicilioInstCalle,
            'DomicilioInstNumero' => $DomicilioInstNumero,
            'DomicilioInstColonia' => $DomicilioInstColonia,
            'DomicilioInstTelefono' => $DomicilioInstTelefono,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Duracion' => $Duracion,
            'Justificacion' => $Justificacion,
            'Objetivo' => $Objetivo,
            'Metas' => $Metas,
            'Actividades' => $Actividades,
            'Aprobacion' => $Aprobacion
        );
        $this->db->insert('EstSolicitud', $data);
        return 1;
    }

    function getEstanciaAprobacion(
    $Estanciaid, $Aprobacion, $Apoyo, $FormaEntrega, $Periodicidad, $Monto, $Responsable, $FechaInicio, $Horario
    ) {
        $data = array(
            'Aprobacion' => $Aprobacion,
            'Apoyo' => $Apoyo,
            'FormaEntrega' => $FormaEntrega,
            'Periodicidad' => $Periodicidad,
            'Monto' => $Monto,
            'Responsable' => $Responsable,
            'FechaInicio' => $FechaInicio,
            'Horario' => $Horario
        );
        $this->db->where('id', $Estanciaid);
        $this->db->update('EstSolicitud', $data);
        return 1;
    }

    function getForTemas(
    $Tema_1, $Tema_2, $Tema_3, $Tema_4, $Tema_5, $Tema_6, $Tema_7, $Tema_8, $Tema_9, $Tema_10, $Tema_11, $Tema_12, $Tema_13
    ) {
        $data = array(
            'Tema_1' => $Tema_1,
            'Tema_2' => $Tema_2,
            'Tema_3' => $Tema_3,
            'Tema_4' => $Tema_4,
            'Tema_5' => $Tema_5,
            'Tema_6' => $Tema_6,
            'Tema_7' => $Tema_7,
            'Tema_8' => $Tema_8,
            'Tema_9' => $Tema_9,
            'Tema_10' => $Tema_10,
            'Tema_11' => $Tema_11,
            'Tema_12' => $Tema_12,
            'Tema_13' => $Tema_13
        );
        $this->db->where('id', '1');
        $this->db->update('ForTemas', $data);
        return 1;
    }

    function getForSolicitud(
    $TipoActividad, $NombreActividad, $Solicitante, $ResponsableOrganizacion, $Objetivo, $Temas, $Ciudad, $Domicilio, $Telefono, $Email, $Pagina, $Modalidad, $DuracionHoras, $Horario, $FechaInicio, $FechaTermino, $CupoMinimo, $CupoMaximo, $Perfil, $Fecha
    ) {
        $data = array(
            'TipoActividad' => $TipoActividad,
            'NombreActividad' => $NombreActividad,
            'Solicitante' => $Solicitante,
            'ResponsableOrganizacion' => $ResponsableOrganizacion,
            'Objetivo' => $Objetivo,
            'Temas' => $Temas,
            'Ciudad' => $Ciudad,
            'Domicilio' => $Domicilio,
            'Telefono' => $Telefono,
            'Email' => $Email,
            'Pagina' => $Pagina,
            'Modalidad' => $Modalidad,
            'DuracionHoras' => $DuracionHoras,
            'Horario' => $Horario,
            'FechaInicio' => $FechaInicio,
            'FechaTermino' => $FechaTermino,
            'CupoMinimo' => $CupoMinimo,
            'CupoMaximo' => $CupoMaximo,
            'Perfil' => $Perfil,
            'Fecha' => $Fecha
        );
        $this->db->insert('ForSolicitudes', $data);
        return 1;
    }

    function getForAprobacion(
    $Formacionid, $Aprobacion, $Costo, $Responsable, $NuevoNombreActividad, $Modalidad, $Duracion, $Horario, $FechaInicio, $FechaTermino
    ) {
        $data = array(
            'Aprobacion' => $Aprobacion,
            'Costo' => $Costo,
            'Responsable' => $Responsable,
            'NuevoNombreActividad' => $NuevoNombreActividad,
            'Modalidad2' => $Modalidad,
            'Duracion' => $Duracion,
            'Horario2' => $Horario,
            'FechaInicio2' => $FechaInicio,
            'FechaTermino2' => $FechaTermino
        );
        $this->db->where('id', $Formacionid);
        $this->db->update('ForSolicitudes', $data);
        return 1;
    }

    function getForEvaluacion(
    $Formacionid, $Dominio, $Materiales, $Habilidad, $Estructura, $Objetivos, $Fundamentos, $Practica, $Limpieza, $Mobiliario, $Equipo, $CalidadMI, $CongruenciaMI, $EntregaMI, $CalidadME, $CongruenciaME, $EntregaME, $CalifCurso, $CalifInstruc
    ) {
        $data = array(
            'Formacionid' => $Formacionid,
            'Dominio' => $Dominio,
            'Materiales' => $Materiales,
            'Habilidad' => $Habilidad,
            'Estructura' => $Estructura,
            'Objetivos' => $Objetivos,
            'Fundamentos' => $Fundamentos,
            'Practica' => $Practica,
            'Limpieza' => $Limpieza,
            'Mobiliario' => $Mobiliario,
            'Equipo' => $Equipo,
            'CalidadMI' => $CalidadMI,
            'CongruenciaMI' => $CongruenciaMI,
            'EntregaMI' => $EntregaMI,
            'CalidadME' => $CalidadME,
            'CongruenciaME' => $CongruenciaME,
            'EntregaME' => $EntregaME,
            'CalifCurso' => $CalifCurso,
            'CalifInstruc' => $CalifInstruc
        );
        $this->db->insert('ForEvaluaciones', $data);
        return 1;
    }

    function getCursosAll() {
        $where = "";
        $this->db_C->select('*');
        $this->db_C->from('ForSolicitudes');
        if ($where != NULL)
            $this->db_C->where($where, NULL, FALSE);
        $query = $this->db_C->get();
        return $query->result();
    }

    function getCursosAllAprobado() {
        $where = "Aprobacion='Sí'";
        $this->db_C->select('*');
        $this->db_C->from('ForSolicitudes');
        if ($where != NULL)
            $this->db_C->where($where, NULL, FALSE);
        $query = $this->db_C->get();
        return $query->result();
    }

    function getOportESolicitud(
    $Puesto, $Funciones, $Actividades, $Metas, $Jornada, $Contratacion, $Sueldo, $Lugar, $Estudios, $ProgramasE, $Competencias, $Experiencia, $Genero, $EstadoCivil, $Edad, $Fecha
    ) {
        $data = array(
            'Puesto' => $Puesto,
            'Funciones' => $Funciones,
            'Actividades' => $Actividades,
            'Metas' => $Metas,
            'Jornada' => $Jornada,
            'Contratacion' => $Contratacion,
            'Sueldo' => $Sueldo,
            'Lugar' => $Lugar,
            'Estudios' => $Estudios,
            'ProgramasE' => $ProgramasE,
            'Competencias' => $Competencias,
            'Experiencia' => $Experiencia,
            'Genero' => $Genero,
            'EstadoCivil' => $EstadoCivil,
            'Edad' => $Edad,
            'Fecha' => $Fecha
        );
        $this->db->insert('OportESolicitudes', $data);
        return 1;
    }

    function getOportunidadesALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('OportESolicitudes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getOportunidadesID($OportunidadID) {
        $where = "id=" . $OportunidadID;
        $this->db->select('*');
        $this->db->from('OportESolicitudes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getOportESolicitudAct(
    $ID, $Puesto, $Funciones, $Actividades, $Metas, $Sueldo, $Lugar, $ProgramasE, $Competencias, $Experiencia, $Edad, $Fecha
    ) {
        $data = array(
            'Puesto' => $Puesto,
            'Funciones' => $Funciones,
            'Actividades' => $Actividades,
            'Metas' => $Metas,
            'Sueldo' => $Sueldo,
            'Lugar' => $Lugar,
            'ProgramasE' => $ProgramasE,
            'Competencias' => $Competencias,
            'Experiencia' => $Experiencia,
            'Edad' => $Edad,
            'Fecha' => $Fecha
        );
        $this->db->where('id', $ID);
        $this->db->update('OportESolicitudes', $data);
        return 1;
    }

    function getSolicitudEmpleo(
    $Nombre, $Genero, $EstadoCivil, $CURP, $RFC, $Cedula, $NSS, $NP, $NA, $Licencia, $TipoLicencia, $NoLicencia, $Calle, $No, $Colonia, $Pais, $Estado, $Ciudad, $Correo, $Cel, $Tel, $facebook, $twitter, $linkedin, $Instagram, $Estudios, $Certificado, $Institucion, $Programa, $Ingles, $Software, $Cargo, $Organizacion, $FechaInicio, $FechaTermino, $TelTrabajo, $SueldoAnt, $Funciones, $ViveCon, $Dependientes, $Auto, $DuenioCasa, $Renta, $SueldoDeseado, $Salud, $PadeceEnfermedad, $Enfermedad, $Discapacidad, $TipoDiscapacidad, $ActividadF, $ActividadFisica, $Estatura, $Peso, $Supox, $Familiares, $Familiar, $Viajar, $CambiarR, $FechaPresentarse
    ) {
        $data = array(
            'Nombre' => $Nombre,
            'Genero' => $Genero,
            'EstadoCivil' => $EstadoCivil,
            'CURP' => $CURP,
            'RFC' => $RFC,
            'Cedula' => $Cedula,
            'NSS' => $NSS,
            'NP' => $NP,
            'NA' => $NA,
            'Licencia' => $Licencia,
            'TipoLicencia' => $TipoLicencia,
            'NoLicencia' => $NoLicencia,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'Pais' => $Pais,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Correo' => $Correo,
            'Cel' => $Cel,
            'Tel' => $Tel,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'Instagram' => $Instagram,
            'Estudios' => $Estudios,
            'Certificado' => $Certificado,
            'Institucion' => $Institucion,
            'Programa' => $Programa,
            'Ingles' => $Ingles,
            'Software' => $Software,
            'Cargo' => $Cargo,
            'Organizacion' => $Organizacion,
            'FechaInicio' => $FechaInicio,
            'FechaTermino' => $FechaTermino,
            'TelTrabajo' => $TelTrabajo,
            'SueldoAnt' => $SueldoAnt,
            'Funciones' => $Funciones,
            'ViveCon' => $ViveCon,
            'Dependientes' => $Dependientes,
            'Auto' => $Auto,
            'DuenioCasa' => $DuenioCasa,
            'Renta' => $Renta,
            'SueldoDeseado' => $SueldoDeseado,
            'Salud' => $Salud,
            'PadeceEnfermedad' => $PadeceEnfermedad,
            'Enfermedad' => $Enfermedad,
            'Discapacidad' => $Discapacidad,
            'TipoDiscapacidad' => $TipoDiscapacidad,
            'ActividadF' => $ActividadF,
            'ActividadFisica' => $ActividadFisica,
            'Estatura' => $Estatura,
            'Peso' => $Peso,
            'Supox' => $Supox,
            'Familiares' => $Familiares,
            'Familiar' => $Familiar,
            'Viajar' => $Viajar,
            'CambiarR' => $CambiarR,
            'FechaPresentarse' => $FechaPresentarse
        );
        $this->db->insert('SolicitudesEmpleo', $data);
        return 1;
    }

    function getDonativos(
    $Solicita, $Nombre, $RFC, $Domicilio, $Pais, $Estado, $Ciudad, $Representante, $CURP, $Correo, $Cel, $Tel, $facebook, $twitter, $linkedin, $Instagram, $Objetivo, $Servicios, $Logros, $Lugar, $Ingresosx, $Proyecto, $Duracion, $Problematica, $ObjGral, $Metas, $Poblacion, $Metodologia, $Ltrabajo, $Donativo, $DActividad, $Impacto, $Fecha
    ) {
        $data = array(
            'Solicita' => $Solicita,
            'Nombre' => $Nombre,
            'RFC' => $RFC,
            'Domicilio' => $Domicilio,
            'Pais' => $Pais,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Representante' => $Representante,
            'CURP' => $CURP,
            'Correo' => $Correo,
            'Cel' => $Cel,
            'Tel' => $Tel,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'Instagram' => $Instagram,
            'Objetivo' => $Objetivo,
            'Servicios' => $Servicios,
            'Logros' => $Logros,
            'Lugar' => $Lugar,
            'Ingresosx' => $Ingresosx,
            'Proyecto' => $Proyecto,
            'Duracion' => $Duracion,
            'Problematica' => $Problematica,
            'ObjGral' => $ObjGral,
            'Metas' => $Metas,
            'Poblacion' => $Poblacion,
            'Metodologia' => $Metodologia,
            'Ltrabajo' => $Ltrabajo,
            'Donativo' => $Donativo,
            'DActividad' => $DActividad,
            'Impacto' => $Impacto,
            'Fecha' => $Fecha
        );
        $this->db->insert('SolicitudDonativo', $data);
        return 1;
    }

    function getSoliEmAll() {
        $where = "";
        $this->db_P19->select('*');
        $this->db_P19->from('SolicitudesEmpleo');
        if ($where != NULL)
            $this->db_P19->where($where, NULL, FALSE);
        $query = $this->db_P19->get();
        return $query->result();
    }

    function getDonativosAll() {
        $where = "";
        $this->db_P20->select('*');
        $this->db_P20->from('SolicitudDonativo');
        if ($where != NULL)
            $this->db_P20->where($where, NULL, FALSE);
        $query = $this->db_P20->get();
        return $query->result();
    }

    function getHojaVidaID($IDHojaCV) {
        $where = "ID=" . $IDHojaCV;
        $this->db->select('*');
        $this->db->from('SolicitudesEmpleo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getDonativoID($IDDonativo) {
        $where = "ID=" . $IDDonativo;
        $this->db->select('*');
        $this->db->from('SolicitudDonativo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getEstanciaID2($Estanciaid) {
        $where = "id=" . $Estanciaid;
        $this->db->select('*');
        $this->db->from('EstSolicitud');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//**********************************Fin modelo vinculacion***************************************************************  
//********************************___________Notificacion_________*******************************************************************
    function getISRNotificacionR($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantCargo_R');
        $this->db->from('ISR_R');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR1($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantPagar');
        $this->db->from('ISR_R1');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionAGASIPE($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantPagar');
        $this->db->from('ISR_AGASIPE');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR5($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantCargo_R');
        $this->db->from('ISR_R5');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR12($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantCargo_R');
        $this->db->from('ISR_R12');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR14($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CPagar');
        $this->db->from('ISR_R14');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR7($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CPagar');
        $this->db->from('ISR_R7');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR10($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantPagar');
        $this->db->from('ISR_R10');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getISRNotificacionR15($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('CantCargo_R');
        $this->db->from('ISR_R15');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getIVANotificacionR21($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('PCant_pagar');
        $this->db->from('IVA_R21');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getIVANotificacionR24($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('Cant_Pagar');
        $this->db->from('IVA_R21_2');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getNotificacionNomina($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('S_nomina');
        $this->db->from('S_nomina');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getNotificacionCedularA($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('Total_Impuesto');
        $this->db->from('Cedular_A');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getNotificacionCedularG($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('Total_Impuesto');
        $this->db->from('Cedular_G');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getNotificacionCedularH($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('Total_Impuesto');
        $this->db->from('Cedular_H');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getNotificacionHospedaje($Anio, $meses, $Folio) {
        if ($meses == 12) {
            $Anio = $Anio - 1;
        }
        $where = "Anio='" . $Anio . "'" . " AND " . "meses='" . $meses . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('Hospedaje');
        $this->db->from('Hospedaje');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTotalCalculo(
    $Folio, $Mes, $ISR, $IVA, $NOMINA, $CEDULAR, $HOSPEDAJE, $FEDERALES, $ESTATALES, $TOTAL, $FECHA
    ) {
        $data = array(
            'Folio' => $Folio,
            'Mes' => $Mes,
            'ISR' => $ISR,
            'IVA' => $IVA,
            'Nomina' => $NOMINA,
            'Cedular' => $CEDULAR,
            'Hospedaje' => $HOSPEDAJE,
            'Federales' => $FEDERALES,
            'Estatales' => $ESTATALES,
            'Total' => $TOTAL,
            'Fecha' => $FECHA
        );
        $this->db->insert('Totales_Declaraciones', $data);
        $where = "Fecha='" . $FECHA . "'" . " AND " . "Mes='" . $Mes . "'" . " AND " . "Folio='" . $Folio . "'";
        $this->db->select('*');
        $this->db->from('Totales_Declaraciones');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getenvcorreo2($Folio, $Identificador) {
        $base = base_url();
        $this->db->select();
        $this->db->where('Folio', $Folio);
        $query = $this->db->get('Directorio');
        $datos = $query->result_array();

        $this->db->select();
        $this->db->where('id', $Identificador);
        $queryto = $this->db->get('Totales_Declaraciones');
        $declaraciones = $queryto->result_array();

        $temporal = $declaraciones[0]['Mes'];

        $this->db->select();
        $this->db->where('id', $temporal);
        $queryto = $this->db->get('Meses');
        $mes_t = $queryto->result_array();


        $mes = $mes_t[0]['dsc_meses'];


        $anio = date('Y');
        if ($mes == 'Diciembre') {
            $anio = $anio - 1;
        }


        $email_to = $datos[0]['Correo'];
        $email_from = "info@rabina.com.mx";
        $email_bcc = "isabel@matecsoluciones.mx";
        $email_subject = "Notificacion";
        $email_message = '<html><body>';
        $email_message .= "<strong>" . $datos[0]['NombreC'] . "</strong>";
        $email_message .= "</br>";
        $email_message .= "DISTINGUIDO Y ESTIMADO CLIENTE:";
        $email_message .= "</br>";
        $email_message .= "Por este medio le enviamos un cordial saludo, as&iacute mismo, le informamos los impuestos y sus montos que en este mes se deben pagar como resultados de su actividad conforme a su r&eacutegimen fiscal.";
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= '<table cellpadding="10">';
        $email_message .= "<tr style='background: #ffffff;'><td><strong>Impuestos del mes de " . $mes . " del a&ntildeo " . $anio . "</strong></td></tr>";
        $email_message .= "<tr style='background: #c3cca5;'><td><strong>Impuestos Federales:</strong></td><td align='right'>$ " . $declaraciones[0]['Federales'] . "</td></tr>";
        $email_message .= "<tr style='background: #c3cca5;'><td><strong>Impuestos Estatales:</strong></td><td align='right'>$ " . $declaraciones[0]['Estatales'] . "</td></tr>";
        $email_message .= "<tr style='background: #c3cca5;'><td><strong>Total:</strong></td><td align='right'>$ " . $declaraciones[0]['Total'] . "</td></tr>";
        $email_message .= "</table>";
        $email_message .= "</br>";
        $email_message .= "Le agradecemos confirmarnos la recepci&oacuten de la presente notificaci&oacuten, as&iacute como en su caso, de la realizaci&oacuten del pago de los impuestos para su continuar con el tr&aacutemite de la declaraci&oacuten del pago de impuestos en el Sistema de Administraci&oacuten Tributaria (SAT).";
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= "Sin otro particular por el momento quedamos a sus &oacuterdenes para cualquier duda o aclaraci&oacuten.";
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= "ATENTAMENTE";
        $email_message .= "</br>";
        $email_message .= "RABINA CORPORACIÓN";
        $email_message .= "</br>";
        $email_message .= "<img src='" . $base . "/media/logo.png' />";
        $email_message .= "</br>";
        $email_message .= "<small>Esta informaci&oacuten es privada y confidencial y est&aacute dirigida exclusivamente a su destinatario. Si usted no es el destinatario original de este mensaje y ha logrado acceder a dicha informaci&oacuten, por favor elimine el mensaje.</small>";
        $email_message .= "<small>&copy IRABINA CORPORACIÓN 2015</small>";
        $email_message .= "</body></html>";

        $headers = 'From: ' . $email_from . "\r\n" . 'Reply-To: ' . $email_from . "\r\n" . 'Bcc: ' . $email_bcc . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        @mail($email_to, $email_subject, $email_message, $headers);
        return 1;
    }

//******************************_____________Fin Notificacion_____*******************************************************************
//*************************************************____________Referenciados__________********************************  
    function getRefTipo() {
        $where = "";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('Referenciados_Tipo');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getEstatusRef() {
        $where = "";
        $this->db_estatusRef->select('*');
        $this->db_estatusRef->from('Referenciados_estatus');
        if ($where != NULL)
            $this->db_estatusRef->where($where, NULL, FALSE);
        $query = $this->db_estatusRef->get();
        return $query->result();
    }

    function getRefCategoria() {
        $where = "";
        $this->db_RefCategoria->select('*');
        $this->db_RefCategoria->from('Referenciados_Categoria');
        if ($where != NULL)
            $this->db_RefCategoria->where($where, NULL, FALSE);
        //$this->db_RefCategoria->order_by('prioridad, titulo', 'desc');
        $query = $this->db_RefCategoria->get();
        return $query->result();
    }

    function getRefTipo2() {
        $where = "";
        $this->db_RefTipo2->select('*');
        $this->db_RefTipo2->from('Referenciados');
        if ($where != NULL)
            $this->db_RefTipo2->where($where, NULL, FALSE);
        $query = $this->db_RefTipo2->get();
        return $query->result();
    }

    function getFuncionConsulta($Folio) {
        $where = "Numero='" . $Folio . "'";
        $this->db_FuncionConsulta->select('*');
        $this->db_FuncionConsulta->from('Referenciados');
        if ($where != NULL)
            $this->db_FuncionConsulta->where($where, NULL, FALSE);
        $query = $this->db_FuncionConsulta->get();
        return $query->result();
    }

    function getFuncionConsulta2($Folio) {
        $where = "Tipo='" . $Folio . "'";
        $this->db_FuncionConsulta->select('*');
        $this->db_FuncionConsulta->from('Referenciados');
        if ($where != NULL)
            $this->db_FuncionConsulta->where($where, NULL, FALSE);
        $query = $this->db_FuncionConsulta->get();
        return $query->result();
    }

    function getFuncionConsulta3($Folio) {
        $where = "Estatus='" . $Folio . "'";
        $this->db_FuncionConsulta->select('*');
        $this->db_FuncionConsulta->from('Referenciados');
        if ($where != NULL)
            $this->db_FuncionConsulta->where($where, NULL, FALSE);
        $query = $this->db_FuncionConsulta->get();
        return $query->result();
    }

    function getFuncionConsultaRef() {
        $where = "";
        $this->db_FuncionConsultaRef->select('*');
        $this->db_FuncionConsultaRef->from('Referenciados');
        if ($where != NULL)
            $this->db_FuncionConsultaRef->where($where, NULL, FALSE);
        $query = $this->db_FuncionConsultaRef->get();
        return $query->result();
    }

    function getResultadoRef($ID) {
        $where = "ID='" . $ID . "'";
        $this->db_ResultadoRef->select('*');
        $this->db_ResultadoRef->from('Referenciados');
        if ($where != NULL)
            $this->db_ResultadoRef->where($where, NULL, FALSE);
        $query = $this->db_ResultadoRef->get();
        return $query->result();
    }

    function getResultadoRef2($ID) {
        $where = "Numero='" . $ID . "'";
        $this->db_ResultadoRef->select('*');
        $this->db_ResultadoRef->from('Referenciados');
        if ($where != NULL)
            $this->db_ResultadoRef->where($where, NULL, FALSE);
        $query = $this->db_ResultadoRef->get();
        return $query->result();
    }

    function getResultadoRefALL() {
        $where = "";
        $this->db_ResultadoRef->select('*');
        $this->db_ResultadoRef->from('Referenciados');
        if ($where != NULL)
            $this->db_ResultadoRef->where($where, NULL, FALSE);
        $query = $this->db_ResultadoRef->get();
        return $query->result();
    }

    function getAsignadosRef($indiceuser) {
        $where = "TramiteAsignado_a='" . $indiceuser . "' AND Estatus=1";
        $this->db_AsignadosRef->select('*');
        $this->db_AsignadosRef->from('Referenciados');
        if ($where != NULL)
            $this->db_AsignadosRef->where($where, NULL, FALSE);
        $query = $this->db_AsignadosRef->get();
        return $query->result();
    }

    function getReferenciados(
    $Tipo, $Numero, $Sinnumero, $Categoria, $CopiConocimiento, $Asunto, $Prioridad, $FechaDocumento, $NombreExterno, $Cliente, $RemitenteExterno, $AreaInterno, $PuestoInterno, $NombreInterno, $Servicio, $Actividad, $AreaDestinatario, $PuestoDestinatario, $NombreDestinatario, $NombreRecibe, $AreaRecibe, $PuestoRecibe, $FechaRecibe, $HoraRecibe, $FormatoDocumento, $AreaUbicacion, $Ubicacion
    ) {
        $data = array(
            'Tipo' => $Tipo,
            'Numero' => $Numero,
            'Sinnumero' => $Sinnumero,
            'Categoria' => $Categoria,
            'CopiConocimiento' => $CopiConocimiento,
            'Asunto' => $Asunto,
            'Prioridad' => $Prioridad,
            'FechaDocumento' => $FechaDocumento,
            'NombreExterno' => $NombreExterno,
            'Cliente' => $Cliente,
            'RemitenteExterno' => $RemitenteExterno,
            'AreaInterno' => $AreaInterno,
            'PuestoInterno' => $PuestoInterno,
            'NombreInterno' => $NombreInterno,
            'Servicio' => $Servicio,
            'Actividad' => $Actividad,
            'AreaDestinatario' => $AreaDestinatario,
            'PuestoDestinatario' => $PuestoDestinatario,
            'NombreDestinatario' => $NombreDestinatario,
            'NombreRecibe' => $NombreRecibe,
            'AreaRecibe' => $AreaRecibe,
            'PuestoRecibe' => $PuestoRecibe,
            'FechaRecibe' => $FechaRecibe,
            'HoraRecibe' => $HoraRecibe,
            'FormatoDocumento' => $FormatoDocumento,
            'AreaUbicacion' => $AreaUbicacion,
            'Ubicacion' => $Ubicacion
        );
        $this->db->insert('Referenciados', $data);
        return 1;
    }

    function getTramitesSS() {
        $where = "";
        $this->db_TramitesSS->select('*');
        $this->db_TramitesSS->from('Directorio');
        if ($where != NULL)
            $this->db_TramitesSS->where($where, NULL, FALSE);
        $query = $this->db_TramitesSS->get();
        return $query->result();
    }

//*************************************************____________Fin referenciados__________********************************
//*************************************************____________trámites__________*************************************
    function getTramites(
    $Asignatario, $TramiteFolio, $Responsable, $FolioAsig, $Observaciones
    ) {
        $data = array(
            'Asignatario' => $Asignatario,
            'TramiteAsignado_a' => $Responsable,
            'TramiteFolio' => $FolioAsig,
            'TramiteObservaciones' => $Observaciones,
            'Estatus' => '1'
        );
        $this->db->where('ID', $TramiteFolio);
        $this->db->update('Referenciados', $data);
        return 1;
    }

    function getConfirmar(
    $ID, $Estatus
    ) {
        $data = array(
            'Estatus' => $Estatus
        );
        $this->db->where('ID', $ID);
        $this->db->update('Referenciados', $data);
        return 1;
    }

//*************************************************____________Fin trámites__________*************************************
//*************************************************____________Modelo calculo impuesto__________**************************
    function getPagosPISR_R1($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_R1');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPISR_R97($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_AGASIPE');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPISR_R($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_R');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPISR_R14($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_R14');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPISR_R12($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_R12');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPISR_R7($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_R7');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPISR_R10($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('ISR_R10');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPIVA_R21M($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('IVA_R21');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPIVA_R21F($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('IVA_R21_2');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPC_G($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('Cedular_G');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPC_A($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('Cedular_A');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPC_H($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('Cedular_H');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPL_N($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('S_nomina');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getPagosPL_H($Folio) {
        $where = "Folio='" . $Folio . "'";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('Hospedaje');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getBorrarISR_R1($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_R1');
    }

    function getBorrarISR_R97($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_AGASIPE');
    }

    function getBorrarISR_R($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_R');
    }

    function getBorrarISR_R14($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_R14');
    }

    function getBorrarISR_R12($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_R12');
    }

    function getBorrarISR_R7($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_R7');
    }

    function getBorrarISR_R10($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('ISR_R10');
    }

    function getBorrarIVA_R21m($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('IVA_R21');
    }

    function getBorrarIVA_R21f($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('IVA_R21_2');
    }

    function getBorrarC_G($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('Cedular_G');
    }

    function getBorrarC_A($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('Cedular_A');
    }

    function getBorrarC_H($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('Cedular_H');
    }

    function getBorrarL_N($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('S_nomina');
    }

    function getBorrarL_H($ID) {
        $this->db->where('ID', $ID);
        return $this->db->delete('Hospedaje');
    }

    function getTotalesDeclaracionesALL() {
        $where = "";
        $this->db_RefTipo->select('*');
        $this->db_RefTipo->from('Totales_Declaraciones');
        if ($where != NULL)
            $this->db_RefTipo->where($where, NULL, FALSE);
        $query = $this->db_RefTipo->get();
        return $query->result();
    }

    function getTotalesDeclaracionesID2($ID_cliente) {
        $where = "Folio='" . $ID_cliente . "'";
        $this->db->select('*');
        $this->db->from('Totales_Declaraciones');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getDeclaraciones($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R1');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR97($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_AGASIPE');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR14($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R14');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR15($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R15');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR12($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R12');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR7($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R7');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR10($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R10');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesR5($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('ISR_R5');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesIVAR24($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('IVA_R21_2');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesIVAR21($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('IVA_R21');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesCA($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('Cedular_A');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesCG($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('Cedular_G');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesCH($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('Cedular_H');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesSN($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('S_nomina');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getDeclaracionesHo($cliente) {
        $where = "Folio='" . $cliente . "'";
        $this->db_Declaraciones->select('*');
        $this->db_Declaraciones->from('Hospedaje');
        if ($where != NULL)
            $this->db_Declaraciones->where($where, NULL, FALSE);
        $query = $this->db_Declaraciones->get();
        return $query->result();
    }

    function getTablas() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Tablas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getINPCs() {
        $where = "";
        $this->db_INPC->select('*');
        $this->db_INPC->from('INPC');
        if ($where != NULL)
            $this->db_INPC->where($where, NULL, FALSE);
        $query = $this->db_INPC->get();
        return $query->result();
    }

    function getRecargos() {
        $where = "";
        $this->db_Recargos->select('*');
        $this->db_Recargos->from('Recargos');
        if ($where != NULL)
            $this->db_Recargos->where($where, NULL, FALSE);
        $query = $this->db_Recargos->get();
        return $query->result();
    }

    function getestatus($Folio, $Estatus
    ) {
        $data = array(
            'Estatus' => $Estatus
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data);
        return 1;
    }

    function getISR_R1($Folio, $SaldoFavor, $meses, $Ingresosant, $Base, $Ingresosact, $ISRcausado, $Total, $ImpuestoP, $Coeficiente, $Pagos, $Utilidad, $ImpuestoB, $Perdidas, $ImpuestoCargo, $ParteAct, $ParteRecargos, $SubsidioEmp, $IDE, $IEPS, $Disel, $TotalApp, $CantPagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Ingresosant' => $Ingresosant,
            'Base' => $Base,
            'Ingresosact' => $Ingresosact,
            'ISRcausado' => $ISRcausado,
            'Total' => $Total,
            'ImpuestoP' => $ImpuestoP,
            'Coeficiente' => $Coeficiente,
            'Pagos' => $Pagos,
            'Utilidad' => $Utilidad,
            'ImpuestoB' => $ImpuestoB,
            'Perdidas' => $Perdidas,
            'ImpuestoCargo' => $ImpuestoCargo,
            'ParteAct' => $ParteAct,
            'ParteRecargos' => $ParteRecargos,
            'SubsidioEmp' => $SubsidioEmp,
            'IDE' => $IDE,
            'IEPS' => $IEPS,
            'Disel' => $Disel,
            'TotalApp' => $TotalApp,
            'CantPagar' => $CantPagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R1', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
            'CoefUtil' => $Coeficiente,
            'PerdFiscAnt' => $Perdidas,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_AGASIPE($Folio, $SaldoFavor, $meses, $Suma_Ing, $Ing, $Total_Ing, $Ing_Externos, $Suma_Deduc, $Deduc_Auto, $Total_Deduc, $Part_Utilidad, $Perdidas, $Base, $ISR_Det, $Reducciones, $ISR_Causado, $Pagos_Prov, $Imp_Ret, $OtrasCargo, $OtrasFavor, $Imp_Cargo, $ACargo, $ParteAct, $Recargos, $Multas, $Total_Cont, $Sub_Emple, $Compensaciones, $IEPS, $Otros, $Diesel, $TotalApp, $Fecha, $MontoPagado, $Imp_UltHrs, $CantCargo, $CantFavor, $CantPagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Suma_Ing' => $Suma_Ing,
            'Ing' => $Ing,
            'Total_Ing' => $Total_Ing,
            'Ing_Externos' => $Ing_Externos,
            'Suma_Deduc' => $Suma_Deduc,
            'Deduc_Auto' => $Deduc_Auto,
            'Total_Deduc' => $Total_Deduc,
            'Part_Utilidad' => $Part_Utilidad,
            'Perdidas' => $Perdidas,
            'Base' => $Base,
            'ISR_Det' => $ISR_Det,
            'Reducciones' => $Reducciones,
            'ISR_Causado' => $ISR_Causado,
            'Pagos_Prov' => $Pagos_Prov,
            'Imp_Ret' => $Imp_Ret,
            'OtrasCargo' => $OtrasCargo,
            'OtrasFavor' => $OtrasFavor,
            'Imp_Cargo' => $Imp_Cargo,
            'ACargo' => $ACargo,
            'ParteAct' => $ParteAct,
            'Recargos' => $Recargos,
            'Multas' => $Multas,
            'Total_Cont' => $Total_Cont,
            'Sub_Emple' => $Sub_Emple,
            'Compensaciones' => $Compensaciones,
            'IEPS' => $IEPS,
            'Otros' => $Otros,
            'Diesel' => $Diesel,
            'TotalApp' => $TotalApp,
            'Fecha' => $Fecha,
            'MontoPagado' => $MontoPagado,
            'Imp_UltHrs' => $Imp_UltHrs,
            'CantCargo' => $CantCargo,
            'CantFavor' => $CantFavor,
            'CantPagar' => $CantPagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_AGASIPE', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
            'PerdFiscAnt' => $Perdidas,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_R($Folio, $SaldoFavor, $meses, $Cargo_R, $IEPS_R, $ParteAct_R, $Disel_R, $ParteRec_R, $OtrosEst_R, $TotalCont_R, $TESOFE_R, $CreditoSal_R, $DiselMinero_R, $Subsidio_R, $TotalApp_R, $IDE_R, $CantCargo_R, $Compensaciones_R, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Cargo_R' => $Cargo_R,
            'IEPS_R' => $IEPS_R,
            'ParteAct_R' => $ParteAct_R,
            'Disel_R' => $Disel_R,
            'ParteRec_R' => $ParteRec_R,
            'OtrosEst_R' => $OtrosEst_R,
            'TotalCont_R' => $TotalCont_R,
            'TESOFE_R' => $TESOFE_R,
            'CreditoSal_R' => $CreditoSal_R,
            'DiselMinero_R' => $DiselMinero_R,
            'Subsidio_R' => $Subsidio_R,
            'TotalApp_R' => $TotalApp_R,
            'IDE_R' => $IDE_R,
            'CantCargo_R' => $CantCargo_R,
            'Compensaciones_R' => $Compensaciones_R,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_R14($Folio, $SaldoFavor, $meses, $Suma_Ing, $Ing, $Total_Ing, $GastosAnt, $GastosAct, $TotalGastos, $PagosAnt, $ImpuestoRet, $ACargo, $ParteAct, $Recargos, $TotalCont, $Credito_sal, $Sub_Empleo, $Imp_Depositos, $Compensaciones, $IEPS, $Diesel, $Carreteras, $Otros, $Diesel_Marino, $FechaAnt, $Monto_Ant, $Imp_UltHrs, $CFavor, $CPagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Suma_Ing' => $Suma_Ing,
            'Ing' => $Ing,
            'Total_Ing' => $Total_Ing,
            'GastosAnt' => $GastosAnt,
            'GastosAct' => $GastosAct,
            'TotalGastos' => $TotalGastos,
            'PagosAnt' => $PagosAnt,
            'ImpuestoRet' => $ImpuestoRet,
            'ACargo' => $ACargo,
            'ParteAct' => $ParteAct,
            'Recargos' => $Recargos,
            'TotalCont' => $TotalCont,
            'Credito_sal' => $Credito_sal,
            'Sub_Empleo' => $Sub_Empleo,
            'Imp_Depositos' => $Imp_Depositos,
            'Compensaciones' => $Compensaciones,
            'IEPS' => $IEPS,
            'Diesel' => $Diesel,
            'Carreteras' => $Carreteras,
            'Otros' => $Otros,
            'Diesel_Marino' => $Diesel_Marino,
            'FechaAnt' => $FechaAnt,
            'Monto_Ant' => $Monto_Ant,
            'Imp_UltHrs' => $Imp_UltHrs,
            'CFavor' => $CFavor,
            'CPagar' => $CPagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R14', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_R7($Folio, $SaldoFavor, $meses, $Suma_Ing, $Ing, $Total_Ing, $GastosAnt, $GastosAct, $TotalGastos, $PagosAnt, $ImpuestoRet, $ACargo, $ParteAct, $Recargos, $TotalCont, $Credito_sal, $Sub_Empleo, $Imp_Depositos, $Compensaciones, $IEPS, $Diesel, $Carreteras, $Otros, $Diesel_Marino, $FechaAnt, $Monto_Ant, $Imp_UltHrs, $CFavor, $CPagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Suma_Ing' => $Suma_Ing,
            'Ing' => $Ing,
            'Total_Ing' => $Total_Ing,
            'GastosAnt' => $GastosAnt,
            'GastosAct' => $GastosAct,
            'TotalGastos' => $TotalGastos,
            'PagosAnt' => $PagosAnt,
            'ImpuestoRet' => $ImpuestoRet,
            'ACargo' => $ACargo,
            'ParteAct' => $ParteAct,
            'Recargos' => $Recargos,
            'TotalCont' => $TotalCont,
            'Credito_sal' => $Credito_sal,
            'Sub_Empleo' => $Sub_Empleo,
            'Imp_Depositos' => $Imp_Depositos,
            'Compensaciones' => $Compensaciones,
            'IEPS' => $IEPS,
            'Diesel' => $Diesel,
            'Carreteras' => $Carreteras,
            'Otros' => $Otros,
            'Diesel_Marino' => $Diesel_Marino,
            'FechaAnt' => $FechaAnt,
            'Monto_Ant' => $Monto_Ant,
            'Imp_UltHrs' => $Imp_UltHrs,
            'CFavor' => $CFavor,
            'CPagar' => $CPagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R7', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_R10($Folio, $SaldoFavor, $meses, $DeduccionOp, $Ing, $Deducciones, $DImp_Local, $D_Opc, $Predial, $D_PrimerEm, $Base, $Imp_Cargo, $Imp_Rete, $Otras_Cargo, $Otras_Favor, $Imp_ACargo, $ACargo, $ParteAct, $Recargos, $Multas, $Total_Cont, $Credito, $Sub_Empleo, $Imp_Dep, $Compensaciones, $IEPS, $Diesel, $Carretera, $Otros, $Diesel_Marino, $TotalApp, $Fecha, $MontoPagado, $Imp_UltHrs, $CantCargo, $CantFavor, $CantPagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'DeduccionOp' => $DeduccionOp,
            'Ing' => $Ing,
            'Deducciones' => $Deducciones,
            'DImp_Local' => $DImp_Local,
            'D_Opc' => $D_Opc,
            'Predial' => $Predial,
            'D_PrimerEm' => $D_PrimerEm,
            'Base' => $Base,
            'Imp_Cargo' => $Imp_Cargo,
            'Imp_Rete' => $Imp_Rete,
            'Otras_Cargo' => $Otras_Cargo,
            'Otras_Favor' => $Otras_Favor,
            'Imp_ACargo' => $Imp_ACargo,
            'ACargo' => $ACargo,
            'ParteAct' => $ParteAct,
            'Recargos' => $Recargos,
            'Multas' => $Multas,
            'Total_Cont' => $Total_Cont,
            'Credito' => $Credito,
            'Sub_Empleo' => $Sub_Empleo,
            'Imp_Dep' => $Imp_Dep,
            'Compensaciones' => $Compensaciones,
            'IEPS' => $IEPS,
            'Diesel' => $Diesel,
            'Carretera' => $Carretera,
            'Otros' => $Otros,
            'Diesel_Marino' => $Diesel_Marino,
            'TotalApp' => $TotalApp,
            'Fecha' => $Fecha,
            'MontoPagado' => $MontoPagado,
            'Imp_UltHrs' => $Imp_UltHrs,
            'CantCargo' => $CantCargo,
            'CantFavor' => $CantFavor,
            'CantPagar' => $CantPagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R10', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_R15($Folio, $SaldoFavor, $meses, $Cargo_R, $IEPS_R, $ParteAct_R, $Disel_R, $ParteRec_R, $OtrosEst_R, $TotalCont_R, $TESOFE_R, $CreditoSal_R, $DiselMinero_R, $Subsidio_R, $TotalApp_R, $IDE_R, $CantCargo_R, $Compensaciones_R, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Cargo_R' => $Cargo_R,
            'IEPS_R' => $IEPS_R,
            'ParteAct_R' => $ParteAct_R,
            'Disel_R' => $Disel_R,
            'ParteRec_R' => $ParteRec_R,
            'OtrosEst_R' => $OtrosEst_R,
            'TotalCont_R' => $TotalCont_R,
            'TESOFE_R' => $TESOFE_R,
            'CreditoSal_R' => $CreditoSal_R,
            'DiselMinero_R' => $DiselMinero_R,
            'Subsidio_R' => $Subsidio_R,
            'TotalApp_R' => $TotalApp_R,
            'IDE_R' => $IDE_R,
            'CantCargo_R' => $CantCargo_R,
            'Compensaciones_R' => $Compensaciones_R,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R15', $data);
        return 1;
    }

    function getISR_R12($Folio, $SaldoFavor, $meses, $Cargo_R, $IEPS_R, $ParteAct_R, $Disel_R, $ParteRec_R, $OtrosEst_R, $TotalCont_R, $TESOFE_R, $CreditoSal_R, $DiselMinero_R, $Subsidio_R, $TotalApp_R, $IDE_R, $CantCargo_R, $Compensaciones_R, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Cargo_R' => $Cargo_R,
            'IEPS_R' => $IEPS_R,
            'ParteAct_R' => $ParteAct_R,
            'Disel_R' => $Disel_R,
            'ParteRec_R' => $ParteRec_R,
            'OtrosEst_R' => $OtrosEst_R,
            'TotalCont_R' => $TotalCont_R,
            'TESOFE_R' => $TESOFE_R,
            'CreditoSal_R' => $CreditoSal_R,
            'DiselMinero_R' => $DiselMinero_R,
            'Subsidio_R' => $Subsidio_R,
            'TotalApp_R' => $TotalApp_R,
            'IDE_R' => $IDE_R,
            'CantCargo_R' => $CantCargo_R,
            'Compensaciones_R' => $Compensaciones_R,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R12', $data);
        $data2 = array(
            'SFisr' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getISR_R5($Folio, $SaldoFavor, $meses, $Cargo_R, $IEPS_R, $ParteAct_R, $Disel_R, $ParteRec_R, $OtrosEst_R, $TotalCont_R, $TESOFE_R, $CreditoSal_R, $DiselMinero_R, $Subsidio_R, $TotalApp_R, $IDE_R, $CantCargo_R, $Compensaciones_R, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Cargo_R' => $Cargo_R,
            'IEPS_R' => $IEPS_R,
            'ParteAct_R' => $ParteAct_R,
            'Disel_R' => $Disel_R,
            'ParteRec_R' => $ParteRec_R,
            'OtrosEst_R' => $OtrosEst_R,
            'TotalCont_R' => $TotalCont_R,
            'TESOFE_R' => $TESOFE_R,
            'CreditoSal_R' => $CreditoSal_R,
            'DiselMinero_R' => $DiselMinero_R,
            'Subsidio_R' => $Subsidio_R,
            'TotalApp_R' => $TotalApp_R,
            'IDE_R' => $IDE_R,
            'CantCargo_R' => $CantCargo_R,
            'Compensaciones_R' => $Compensaciones_R,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('ISR_R5', $data);
        return 1;
    }

    function getIVA_R24($Folio, $SaldoFavor, $meses, $Importe, $IVAretenciones4, $IVAretenciones10, $IVAretenciones, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Importe' => $Importe,
            'IVAretenciones4' => $IVAretenciones4,
            'IVAretenciones10' => $IVAretenciones10,
            'IVAretenciones' => $IVAretenciones,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('IVA_R24', $data);
        return 1;
    }

    function getIVA_R21($Folio, $SaldoFavor, $meses, $Ingresos, $Otrosingresos, $Otrosingresos2, $Ingresoscobrados, $Ingresosnocobrados, $TotalIngresos, $IVAtrasladado, $Totalgastos, $ivaacreditable, $GastosconIVA, $GastossinIVA, $IVAfavor, $IVApagar, $Total_actos16, $Total_actos0, $DTotal_actos16, $Valor_actos16, $Acredit_Saldo_favor, $PA_Cargo, $Pparte_Actualizada, $PParte_recargos, $PTotal_contribuciones, $PCant_cargo, $PCant_pagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Ingresos' => $Ingresos,
            'Otrosingresos' => $Otrosingresos,
            'Exentos' => $Otrosingresos2,
            'Ingresoscobrados' => $Ingresoscobrados,
            'Ingresosnocobrados' => $Ingresosnocobrados,
            'TotalIngresos' => $TotalIngresos,
            'IVAtrasladado' => $IVAtrasladado,
            'Totalgastos' => $Totalgastos,
            'ivaacreditable' => $ivaacreditable,
            'GastosconIVA' => $GastosconIVA,
            'GastossinIVA' => $GastossinIVA,
            'IVAfavor' => $IVAfavor,
            'IVApagar' => $IVApagar,
            'Total_actos16' => $Total_actos16,
            'Total_actos0' => $Total_actos0,
            'DTotal_actos16' => $DTotal_actos16,
            'Valor_actos16' => $Valor_actos16,
            'Acredit_Saldo_favor' => $Acredit_Saldo_favor,
            'PA_Cargo' => $PA_Cargo,
            'Pparte_Actualizada' => $Pparte_Actualizada,
            'PParte_recargos' => $PParte_recargos,
            'PTotal_contribuciones' => $PTotal_contribuciones,
            'PCant_cargo' => $PCant_cargo,
            'PCant_pagar' => $PCant_pagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('IVA_R21', $data);
        $data2 = array(
            'SFiVA' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getIVA_R21_2($Folio, $SaldoFavor, $meses, $Imp_Cobrado, $Imp_Pagado, $Imp_Retenido, $ACargo, $AFavor, $Parte_Act, $Recargos, $Multas, $Total_Cont, $Disminucion_Cont, $FechaRealizado, $Pagado_Ant, $Imp_UltHoras, $Cant_Favor, $Cant_Pagar, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'SaldoFavor' => $SaldoFavor,
            'meses' => $meses,
            'Imp_Cobrado' => $Imp_Cobrado,
            'Imp_Pagado' => $Imp_Pagado,
            'Imp_Retenido' => $Imp_Retenido,
            'ACargo' => $ACargo,
            'AFavor' => $AFavor,
            'Parte_Act' => $Parte_Act,
            'Recargos' => $Recargos,
            'Multas' => $Multas,
            'Total_Cont' => $Total_Cont,
            'Disminucion_Cont' => $Disminucion_Cont,
            'FechaRealizado' => $FechaRealizado,
            'Pagado_Ant' => $Pagado_Ant,
            'Imp_UltHoras' => $Imp_UltHoras,
            'Cant_Favor' => $Cant_Favor,
            'Cant_Pagar' => $Cant_Pagar,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('IVA_R21_2', $data);
        $data2 = array(
            'SFiVA' => $SaldoFavor,
        );
        $this->db->where('Folio', $Folio);
        $this->db->update('Directorio', $data2);
        return 1;
    }

    function getCA(
    $Folio, $meses, $Ingresos, $Deducciones, $Perdidas, $Base, $ImpRet, $PagoProv, $TotalRetenido, $ACargo, $Imp_pagado, $ACargo2, $Saldo_Favor, $Imp_Cedular, $Actualizacion, $Recargos, $Multa_Pagos, $Compensacion, $SubTotal, $Redondeo, $Total_Impuesto, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'meses' => $meses,
            'Ingresos' => $Ingresos,
            'Deducciones' => $Deducciones,
            'Perdidas' => $Perdidas,
            'Base' => $Base,
            'ImpRet' => $ImpRet,
            'PagoProv' => $PagoProv,
            'TotalRetenido' => $TotalRetenido,
            'ACargo' => $ACargo,
            'Imp_pagado' => $Imp_pagado,
            'ACargo2' => $ACargo2,
            'Saldo_Favor' => $Saldo_Favor,
            'Imp_Cedular' => $Imp_Cedular,
            'Actualizacion' => $Actualizacion,
            'Recargos' => $Recargos,
            'Multa_Pagos' => $Multa_Pagos,
            'Compensacion' => $Compensacion,
            'SubTotal' => $SubTotal,
            'Redondeo' => $Redondeo,
            'Total_Impuesto' => $Total_Impuesto,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('Cedular_A', $data);
        return 1;
    }

    function getCG(
    $Folio, $meses, $Ingresos, $Deducciones, $Perdidas, $Base, $ImpRet, $PagoProv, $ACargo, $Imp_pagado, $ACargo2, $Saldo_Favor, $Imp_Cedular, $Actualizacion, $Recargos, $Multa_Pagos, $Compensacion, $SubTotal, $Redondeo, $Total_Impuesto, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'meses' => $meses,
            'Ingresos' => $Ingresos,
            'Deducciones' => $Deducciones,
            'Perdidas' => $Perdidas,
            'Base' => $Base,
            'ImpRet' => $ImpRet,
            'PagoProv' => $PagoProv,
            'ACargo' => $ACargo,
            'Imp_pagado' => $Imp_pagado,
            'ACargo2' => $ACargo2,
            'Saldo_Favor' => $Saldo_Favor,
            'Imp_Cedular' => $Imp_Cedular,
            'Actualizacion' => $Actualizacion,
            'Recargos' => $Recargos,
            'Multa_Pagos' => $Multa_Pagos,
            'Compensacion' => $Compensacion,
            'SubTotal' => $SubTotal,
            'Redondeo' => $Redondeo,
            'Total_Impuesto' => $Total_Impuesto,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('Cedular_G', $data);
        return 1;
    }

    function getCH(
    $Folio, $meses, $Ingresos, $Deducciones, $Base, $ImpRet, $TotalRetenido, $ACargo, $Imp_pagado, $ACargo2, $Saldo_Favor, $Imp_Cedular, $Actualizacion, $Recargos, $Multa_Pagos, $Compensacion, $SubTotal, $Redondeo, $Total_Impuesto, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'meses' => $meses,
            'Ingresos' => $Ingresos,
            'Deducciones' => $Deducciones,
            'Base' => $Base,
            'ImpRet' => $ImpRet,
            'TotalRetenido' => $TotalRetenido,
            'ACargo' => $ACargo,
            'Imp_pagado' => $Imp_pagado,
            'ACargo2' => $ACargo2,
            'Saldo_Favor' => $Saldo_Favor,
            'Imp_Cedular' => $Imp_Cedular,
            'Actualizacion' => $Actualizacion,
            'Recargos' => $Recargos,
            'Multa_Pagos' => $Multa_Pagos,
            'Compensacion' => $Compensacion,
            'SubTotal' => $SubTotal,
            'Redondeo' => $Redondeo,
            'Total_Impuesto' => $Total_Impuesto,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('Cedular_H', $data);
        return 1;
    }

    function getSN(
    $Folio, $meses, $Importe, $ACargo, $Actualizaciones, $Recargos, $S_nomina, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'meses' => $meses,
            'Importe' => $Importe,
            'ACargo' => $ACargo,
            'Actualizaciones' => $Actualizaciones,
            'Recargos' => $Recargos,
            'S_nomina' => $S_nomina,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('S_nomina', $data);
        return 1;
    }

    function getHospedaje(
    $Folio, $meses, $Importe, $ACargo, $Actualizaciones, $Recargos, $Hospedaje, $Dia, $Mes, $Anio
    ) {
        $data = array(
            'Folio' => $Folio,
            'meses' => $meses,
            'Importe' => $Importe,
            'ACargo' => $ACargo,
            'Actualizaciones' => $Actualizaciones,
            'Recargos' => $Recargos,
            'Hospedaje' => $Hospedaje,
            'Dia' => $Dia,
            'Mes' => $Mes,
            'Anio' => $Anio
        );
        $this->db->insert('Hospedaje', $data);
        return 1;
    }

//********************************__Fin calculo modelo impuestos_____************************************************************
//********************************__Cobranza_____************************************************************
    function getCobranzaID3($ID_cliente) {
        $where = "ID_cliente='" . $ID_cliente . "' AND Cobrado='Pagado'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getBorrarPagoPendiente($PagosP) {
        $this->db->where('ID', $PagosP);
        return $this->db->delete('Cobranza');
    }

    function getBorrardeHonorarios($folio, $mes, $anio) {
        $where = "IDCliente='" . $folio . "' AND MesHonorarios='" . $mes . "' AND AnioHonorarios='" . $anio . "'";
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        return $this->db->delete('HonorariosCobrados');
    }

    function getRecibos($PagosP) {
        $where = "ID='" . $PagosP . "'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCobranza($Folio) {
        $where = "ID_cliente='" . $Folio . "'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCobranza2($Folio) {
        $where = "ID_cliente='" . $Folio . "' AND Cobrado!='Pagado'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCobranzaDepositos($Folio) {
        $where = "ID_cliente='" . $Folio . "' AND FormaConsignarPago='Deposito_en_cuenta_bancaria'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCDepositosALL() {
        $where = "FormaConsignarPago='Deposito_en_cuenta_bancaria'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCobranzaIngresos($Folio) {
        $where = "ID_cliente='" . $Folio . "' AND FormaConsignarPago='Efectivo_caja_de_ingresos_administracion'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCIngresosALL() {
        $where = "FormaConsignarPago='Efectivo_caja_de_ingresos_administracion'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCobranzaxID($IDcobranza) {
        $where = "ID='" . $IDcobranza . "'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getNoRecibos() {
        $where = "";
        $this->db_NoRecibos->select('*');
        $this->db_NoRecibos->from('Recibos');
        if ($where != NULL)
            $this->db_NoRecibos->where($where, NULL, FALSE);
        $query = $this->db_NoRecibos->get();
        return $query->result();
    }

    function getUltimoPago($IDcobranza) {
        $where = "IDOrdenCobro='" . $IDcobranza . "'";
        $this->db_UltimoPago->select('*');
        $this->db_UltimoPago->from('Recibos');
        if ($where != NULL)
            $this->db_UltimoPago->where($where, NULL, FALSE);
        $query = $this->db_UltimoPago->get();
        return $query->result();
    }

    function getPagosProg() {
        $where = "";
        $this->db->select('*');
        $this->db->from('PagosProgramados');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRecibo(
    $CobranzaID, $ReciboNoRecibo, $ReciboFechaPago, $ReciboNombre, $ReciboCantidad, $ReciboHonorarios, $ReciboSubtotal, $ReciboIVA, $ReciboTotal
    ) {
        $data = array(
            'IDOrdenCobro' => $CobranzaID,
            'ReciboNoRecibo' => $ReciboNoRecibo,
            'ReciboFechaPago' => $ReciboFechaPago,
            'ReciboNombre' => $ReciboNombre,
            'ReciboCantidad' => $ReciboCantidad,
            'ReciboHonorarios' => $ReciboHonorarios,
            'ReciboSubtotal' => $ReciboSubtotal,
            'ReciboIVA' => $ReciboIVA,
            'ReciboTotal' => $ReciboTotal
        );
        $data2 = array(
            'ReciboElaborado' => 'Sí',
            'UltimoPago' => $ReciboTotal
        );
        $this->db->insert('Recibos', $data);
//                    print $str = $this->db->last_query();
        $this->db->where('ID', $CobranzaID);
        $this->db->update('Cobranza', $data2);
//                    print $str = $this->db->last_query();
        return 1;
    }

    function getOrdenCobro(
    $ID_cliente, $ConceptoCobro, $Id_tarifa, $MontoPagar, $FechaCobro, $IdResponsableServicio, $IdResponsableOrden, $FolioCobranza, $Mes, $Anio
    ) {
        $data = array(
            'ID_cliente' => $ID_cliente,
            'ConceptoCobro' => $ConceptoCobro,
            'Id_tarifa' => $Id_tarifa,
            'MontoPagar' => $MontoPagar,
            'Resto' => $MontoPagar,
            'FechaCobro' => $FechaCobro,
            'IdResponsableServicio' => $IdResponsableServicio,
            'IdResponsableOrden' => $IdResponsableOrden,
            'FolioCobranza' => $FolioCobranza,
            'Cobrado' => 'No pagado',
            'mes' => $Mes,
            'anio' => $Anio
        ); 
        $this->db->insert('Cobranza', $data);
       $str = $this->db->last_query();
        print $str;
//        return 1;
    }

    function getHonorariosCliente($indiceuser) {
        $where = "id_responsable=" . $indiceuser;
        $this->db_ID_cliente->select('*');
        $this->db_ID_cliente->from('Directorio');
        if ($where != NULL)
            $this->db_ID_cliente->where($where, NULL, FALSE);
        $query = $this->db_ID_cliente->get();
        return $query->result();
    }

    function getHonorariosCliente2() {
        $where = "";
        $this->db_ID_cliente->select('*');
        $this->db_ID_cliente->from('Directorio');
        if ($where != NULL)
            $this->db_ID_cliente->where($where, NULL, FALSE);
        $query = $this->db_ID_cliente->get();
        return $query->result();
    }

    function getCobranzaALL() {
        $where = "";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCobranzaID2($ID_cliente) {
        $where = "ID_cliente='" . $ID_cliente . "'";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('Cobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getHonorariosCobro(
    $IDCliente, $MesHonorarios, $AnioHonorarios, $IDResponsable
    ) {
        $data = array(
            'IDCliente' => $IDCliente,
            'MesHonorarios' => $MesHonorarios,
            'AnioHonorarios' => $AnioHonorarios,
            'IDResponsable' => $IDResponsable
        );
        $this->db->insert('HonorariosCobrados', $data);
        return 1;
    }

    function getHIDCliente($ID_cliente) {
        $where = "Folio='" . $ID_cliente . "'";
        $this->db_ID_cliente->select('*');
        $this->db_ID_cliente->from('Directorio');
        if ($where != NULL)
            $this->db_ID_cliente->where($where, NULL, FALSE);
        $query = $this->db_ID_cliente->get();
        return $query->result();
    }

    function getHonorariosCobrados($indiceuser, $Mes, $Anio) {
        $where = "IDResponsable=" . $indiceuser . " AND MesHonorarios=" . $Mes . " AND AnioHonorarios=" . $Anio;
        $this->db_ID_cliente->select('*');
        $this->db_ID_cliente->from('HonorariosCobrados');
        if ($where != NULL)
            $this->db_ID_cliente->where($where, NULL, FALSE);
        $query = $this->db_ID_cliente->get();
        return $query->result();
    }

    function getHonorariosCobrados2($Mes, $Anio) {
        $where = "MesHonorarios=" . $Mes . " AND AnioHonorarios=" . $Anio;
        $this->db_ID_cliente->select('*');
        $this->db_ID_cliente->from('HonorariosCobrados');
        if ($where != NULL)
            $this->db_ID_cliente->where($where, NULL, FALSE);
        $query = $this->db_ID_cliente->get();
        return $query->result();
    }

    function getHonoCobradosxID($ID_cliente) {
        $where = "IDCliente='" . $ID_cliente . "'";
        $this->db->select('*');
        $this->db->from('HonorariosCobrados');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getHonoCobrados() {
        $where = "";
        $this->db->select('*');
        $this->db->from('HonorariosCobrados');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getOrdenPago(
    $CobranzaID, $FechaPago, $UltimoPago, $FormaPago, $BancoPago, $CuentaPago, $Factura, $NoFactura, $FormaConsignarPago, $FechaEntregaEfectivo, $FolioAcuseEntrega, $CuentaDepositoBancario, $FechaDepositoBancario, $ResponsabledeCobro, $Cobrado, $Resto, $Deposito, $Cliente
    ) {
        $data = array(
            'FechaPago' => $FechaPago,
            'UltimoPago' => $UltimoPago,
            'FormaPago' => $FormaPago,
            'BancoPago' => $BancoPago,
            'CuentaPago' => $CuentaPago,
            'Factura' => $Factura,
            'NoFactura' => $NoFactura,
            'FormaConsignarPago' => $FormaConsignarPago,
            'FechaEntregaEfectivo' => $FechaEntregaEfectivo,
            'FolioAcuseEntrega' => $FolioAcuseEntrega,
            'IDCuentaDepositoBancario' => $CuentaDepositoBancario,
            'FechaDepositoBancario' => $FechaDepositoBancario,
            'ResponsabledeCobro' => $ResponsabledeCobro,
            'Cobrado' => $Cobrado,
            'Resto' => $Resto,
            'Deposito' => $Deposito
        );
        $this->db->where('ID', $CobranzaID);
        $this->db->update('Cobranza', $data);

        $datos = array(
            'IDCuentaDepositoBancario' => $CuentaDepositoBancario,
            'FechaDepositoBancario' => $FechaDepositoBancario,
            'Deposito' => $Deposito,
            'Cliente' => $Cliente
        );
        $this->db->insert('DepositosCuentasCobranza', $datos);
        return 1;
    }

    function getDepositosALL2() {
        $where = "";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('DepositosCuentasCobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

    function getCajaALL2() {
        $where = "";
        $this->db_Cobranza->select('*');
        $this->db_Cobranza->from('DepositosCuentasCobranza');
        if ($where != NULL)
            $this->db_Cobranza->where($where, NULL, FALSE);
        $query = $this->db_Cobranza->get();
        return $query->result();
    }

//********************************__Fin cobranza_____************************************************************
//********************************___________Metas_____************************************************************

    function getMetas(
    $Ponderacion, $Descripcion, $Meta, $Estrategias, $FormaEvidencia, $A, $B, $R, $Sentido, $Frecuencia, $Unidad, $Situacion, $MetaxMes, $Meta1anos, $Meta5anos, $Responsable, $Fecha, $MesInicial, $AnioInicial
    ) {
        $data = array(
            'Ponderacion' => $Ponderacion,
            'Descripcion' => $Descripcion,
            'Meta' => $Meta,
            'Estrategias' => $Estrategias,
            'FormaEvidencia' => $FormaEvidencia,
            'A' => $A,
            'B' => $B,
            'R' => $R,
            'Sentido' => $Sentido,
            'Frecuencia' => $Frecuencia,
            'Unidad' => $Unidad,
            'Situacion' => $Situacion,
            'MetaxMes' => $MetaxMes,
            'Meta1anos' => $Meta1anos,
            'Meta5anos' => $Meta5anos,
            'Responsable' => $Responsable,
            'Fecha' => $Fecha,
            'MesInicial' => $MesInicial,
            'AnioInicial' => $AnioInicial
        );
        $this->db->insert('Metas', $data);
        return 1;
    }

    function getACTMetas(
    $IDMeta, $Ponderacion, $Descripcion, $Meta, $Estrategias, $FormaEvidencia, $A, $B, $R, $Sentido, $Frecuencia, $Unidad, $Situacion, $MetaxMes, $Meta1anos, $Meta5anos, $Responsable, $Fecha
    ) {
        $data = array(
            'Ponderacion' => $Ponderacion,
            'Descripcion' => $Descripcion,
            'Meta' => $Meta,
            'Estrategias' => $Estrategias,
            'FormaEvidencia' => $FormaEvidencia,
            'A' => $A,
            'B' => $B,
            'R' => $R,
            'Sentido' => $Sentido,
            'Frecuencia' => $Frecuencia,
            'Unidad' => $Unidad,
            'Situacion' => $Situacion,
            'MetaxMes' => $MetaxMes,
            'Meta1anos' => $Meta1anos,
            'Meta5anos' => $Meta5anos,
            'Responsable' => $Responsable,
            'Fecha' => $Fecha
        );
        $this->db->where('ID', $IDMeta);
        $this->db->update('Metas', $data);
        return 1;
    }

    function getActualizarEvidencias(
    $Meta, $Encargado, $An, $Bn, $Rn, $FechaActualizaEvidencia, $MesActualizaEvidencia, $AnioActualizaEvidencia
    ) {
        $data = array(
            'Encargado' => $Encargado,
            'An' => $An,
            'Bn' => $Bn,
            'Rn' => $Rn,
            'FechaActualizaEvidencia' => $FechaActualizaEvidencia,
            'MesActualizaEvidencia' => $MesActualizaEvidencia,
            'AnioActualizaEvidencia' => $AnioActualizaEvidencia
        );
        $this->db->where('ID', $Meta);
        $this->db->update('Metas', $data);
        return 1;
    }

    function getActualizarEvidencias1(
    $Meta, $An, $Bn, $Rn, $FechaActualizaEvidencia, $MesActualizaEvidencia, $AnioActualizaEvidencia
    ) {
        $data = array(
            'An' => $An,
            'Bn' => $Bn,
            'Rn' => $Rn,
            'FechaActualizaEvidencia' => $FechaActualizaEvidencia,
            'MesActualizaEvidencia' => $MesActualizaEvidencia,
            'AnioActualizaEvidencia' => $AnioActualizaEvidencia
        );
        $this->db->where('ID', $Meta);
        $this->db->update('Metas', $data);
        return 1;
    }

    function getHistActualizarEvidencias1(
    $Meta, $Situacion, $An, $Bn, $Rn, $FechaActualizaEvidencia, $MesActualizaEvidencia, $AnioActualizaEvidencia
    ) {
        $data = array(
            'Meta' => $Meta,
            'Situacion' => $Situacion,
            'An' => $An,
            'Bn' => $Bn,
            'Rn' => $Rn,
            'FechaActualizaEvidencia' => $FechaActualizaEvidencia,
            'MesActualizaEvidencia' => $MesActualizaEvidencia,
            'AnioActualizaEvidencia' => $AnioActualizaEvidencia
        );
        $this->db->insert('HistoricoMetas', $data);
        return 1;
    }

    function getActualizarEvidencias2(
    $Meta, $Encargado, $FechaActualizaEvidencia
    ) {
        $data = array(
            'Encargado' => $Encargado,
            'FechaActualizaEvidencia' => $FechaActualizaEvidencia
        );
        $this->db->where('ID', $Meta);
        $this->db->update('Metas', $data);
        return 1;
    }

    function getIDMeta($IDMeta) {
        $where = "ID='" . $IDMeta . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('Metas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getHistoricoMetas() {
        $where = "";
        $this->db->select('*');
        $this->db->from('HistoricoMetas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//********************************__Fin Metas_____************************************************************	
//********************************__Tecnologia_____************************************************************	


    function getEquipo() {
        $where = "TMobiliario='2' AND Baja='-'";
        $this->db->select('*');
        $this->db->from('Muebles');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        //$this->db_RefCategoria->order_by('prioridad, titulo', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function getServPreventivo() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ServPreventivo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        //$this->db_RefCategoria->order_by('prioridad, titulo', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function getServCorrectivo() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ServCorrectivo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        //$this->db_RefCategoria->order_by('prioridad, titulo', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function getTecnologia1(
    $Serie, $FechaServicio, $Hardware, $ObservacionesHardware, $Perifericos, $ObservacionesPerifericos, $Software, $ObservacionesSoftware, $Antivirus, $ObservacionesAntivirus, $Internet, $ObservacionesInternet, $Intranet, $ObservacionesIntranet, $Correo, $ObservacionesCorreo, $Asesoria, $ObservacionesAsesoria, $Otro, $ObservacionesOtro, $Equipo, $Observaciones, $HrInicio, $HrTermino, $Asesor, $Usuario
    ) {
        $data = array(
            'Serie' => $Serie,
            'FechaServicio' => $FechaServicio,
            'Hardware' => $Hardware,
            'ObservacionesHardware' => $ObservacionesHardware,
            'Perifericos' => $Perifericos,
            'ObservacionesPerifericos' => $ObservacionesPerifericos,
            'Software' => $Software,
            'ObservacionesSoftware' => $ObservacionesSoftware,
            'Antivirus' => $Antivirus,
            'ObservacionesAntivirus' => $ObservacionesAntivirus,
            'Internet' => $Internet,
            'ObservacionesInternet' => $ObservacionesInternet,
            'Intranet' => $Intranet,
            'ObservacionesIntranet' => $ObservacionesIntranet,
            'Correo' => $Correo,
            'ObservacionesCorreo' => $ObservacionesCorreo,
            'Asesoria' => $Asesoria,
            'ObservacionesAsesoria' => $ObservacionesAsesoria,
            'Otro' => $Otro,
            'ObservacionesOtro' => $ObservacionesOtro,
            'Equipo' => $Equipo,
            'Observaciones' => $Observaciones,
            'HrInicio' => $HrInicio,
            'HrTermino' => $HrTermino,
            'Asesor' => $Asesor,
            'Usuario' => $Usuario
        );
        $this->db->insert('ServPreventivo', $data);
        return 1;
    }

    function getTecnologia2(
    $Serie, $FechaServicio, $Hardware, $ObservacionesHardware, $Perifericos, $ObservacionesPerifericos, $Software, $ObservacionesSoftware, $Antivirus, $ObservacionesAntivirus, $Internet, $ObservacionesInternet, $Intranet, $ObservacionesIntranet, $Correo, $ObservacionesCorreo, $Asesoria, $ObservacionesAsesoria, $Otro, $ObservacionesOtro, $Equipo, $Propuesta, $FechaSolucion, $HrInicio, $HrTermino, $Asesor, $Usuario
    ) {
        $data = array(
            'Serie' => $Serie,
            'FechaServicio' => $FechaServicio,
            'Hardware' => $Hardware,
            'ObservacionesHardware' => $ObservacionesHardware,
            'Perifericos' => $Perifericos,
            'ObservacionesPerifericos' => $ObservacionesPerifericos,
            'Software' => $Software,
            'ObservacionesSoftware' => $ObservacionesSoftware,
            'Antivirus' => $Antivirus,
            'ObservacionesAntivirus' => $ObservacionesAntivirus,
            'Internet' => $Internet,
            'ObservacionesInternet' => $ObservacionesInternet,
            'Intranet' => $Intranet,
            'ObservacionesIntranet' => $ObservacionesIntranet,
            'Correo' => $Correo,
            'ObservacionesCorreo' => $ObservacionesCorreo,
            'Asesoria' => $Asesoria,
            'ObservacionesAsesoria' => $ObservacionesAsesoria,
            'Otro' => $Otro,
            'ObservacionesOtro' => $ObservacionesOtro,
            'Equipo' => $Equipo,
            'Propuesta' => $Propuesta,
            'FechaSolucion' => $FechaSolucion,
            'HrInicio' => $HrInicio,
            'HrTermino' => $HrTermino,
            'Asesor' => $Asesor,
            'Usuario' => $Usuario
        );
        $this->db->insert('ServCorrectivo', $data);
        return 1;
    }

    function getServiciosP() {
        $where = "";
        $this->db_RefTipo2->select('*');
        $this->db_RefTipo2->from('ServPreventivo');
        if ($where != NULL)
            $this->db_RefTipo2->where($where, NULL, FALSE);
        $query = $this->db_RefTipo2->get();
        return $query->result();
    }

    function getServiciosC() {
        $where = "";
        $this->db_RefTipo2->select('*');
        $this->db_RefTipo2->from('ServCorrectivo');
        if ($where != NULL)
            $this->db_RefTipo2->where($where, NULL, FALSE);
        $query = $this->db_RefTipo2->get();
        return $query->result();
    }

//********************************__Fin Tecnologia_____************************************************************	
//********************************__Compras_____************************************************************	
    function getOrdenesALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Compras');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratosALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Contratos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getCotizacionesALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Cotizaciones');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//********************************__Fin compras_____************************************************************	



    function getenvcorreo(
    $Folio, $Cuenta
    ) {
        $this->db->select();

        $query = $this->db->get('Directorio');
        $datos = $query->result_array();
        $email_to = $datos[0]['Correo'];
        $email_from = "info@rabina.com.mx";
        $email_bcc = "isabel@matecsoluciones.mx";
        $email_subject = "Notificación de declaración fiscal";
        $email_message = "Apreciable " . "\n\n";
        $email_message .= "Esta es su cuenta a pagar:\n\n" . $Cuenta;
        $email_message .= "Sin más por el momento quedamos a sus órdenes esperando pronto apoyarlo en su proyecto. \n\n Atentamente.\n RABINA CORPORACIÓN\n";

        $headers = 'From: ' . $email_from . "\r\n" . 'Reply-To: ' . $email_from . "\r\n" . 'Bcc: ' . $email_bcc . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);
        return 1;
    }

    function getUsuarios(
    $nombre, $apaterno, $amaterno, $email, $password1
    ) {
        $data = array(
            'nombre' => $nombre,
            'apaterno' => $apaterno,
            'amaterno' => $amaterno,
            'login' => $email,
            'password' => $password1,
            'email' => $email
        );
        $this->db->insert('usuarios', $data);


        $this->db->select();
        $this->db->where('login', $email);
        $query = $this->db->get('usuarios');
        $usuario = $query->result_array();
        foreach ($usuario as $usuario2)
            $data2 = array(
                'Usuario' => $usuario2['Id']
            );
        $this->db->insert('Permisos', $data2);

        return 1;
    }

    function getUsuarios29(
    $login, $password1
    ) {
        $data = array(
            'password' => $password1
        );
        $this->db->where('Id', $login);
        $this->db->update('usuarios', $data);
        return 1;
    }

    function getAcceso($login, $password) {
        $this->db->select('*');
        $this->db->from('usuarios AS users');
        $this->db->where('users.login', $login);
        $this->db->where('users.password', $password);
        $query = $this->db->get();
        $data = $query->result();
        /*
         * FOR DEBUG ONLY
         */
        $str = $this->db->last_query();
        var_dump($data);
//        if (isset($datos[0]['password'])) {
//            $contrasenia = $datos[0]['password'];
//            if ($contrasenia == $password) {
//                if (isset($datos[0]['Id'])) {
//                    $result = $datos[0]['Id'];
//                } else {
//                    $result = "";
//                }
//                return $result;
//            } else {
//                $result = "";
//                return 0;
//            }
//        }
    }

    function getAcceso2(
    $login, $password
    ) {

        $contrasenia = 0;
        $resulttemp = 0;
        $where = "Id='" . $login . "'";
        $this->db->select('*');
        $this->db->from('usuarios');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        $datos = $query->result();

        foreach ($datos as $datos1) {
            $contrasenia = $datos1->password;
            $resulttemp = $datos1->Id;
        }
        if ($contrasenia == $password) {
            $result = $resulttemp;
            return $result;
        } else {
            return 0;
        }
    }

    public function get_all() {
        //$query = $this->db->query('SELECT * FROM prueba ORDER BY marca ASC');		 	
        $this->db->order_by('marca', 'asc');
        $query = $this->db->get('prueba');
        return $query->result();
    }

//********************************__Entrevista_____************************************************************	

    function getEntrevista(
    $E0, $E1, $E2, $E3, $E4, $E5, $E6, $E7, $E8, $E9, $E10, $E11, $E12, $E13, $E14, $E15, $E16, $E17
    ) {
        $data = array(
            'E0' => $E0,
            'E1' => $E1,
            'E2' => $E2,
            'E3' => $E3,
            'E4' => $E4,
            'E5' => $E5,
            'E6' => $E6,
            'E7' => $E7,
            'E8' => $E8,
            'E9' => $E9,
            'E10' => $E10,
            'E11' => $E11,
            'E12' => $E12,
            'E13' => $E13,
            'E14' => $E14,
            'E15' => $E15,
            'E16' => $E16,
            'E17' => $E17
        );
        $this->db->insert('Entrevista', $data);
        return 1;
    }

//********************************__Fin Entrevista_____************************************************************	
//********************************__Entrevista_____************************************************************	
    function getTinmueble() {
        $where = "";
        $this->db->select('*');
        $this->db->from('InmuebleTipo');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRinmueble(
    $Propietario, $RFC, $IFE, $Calle1, $Colonia1, $Numero1, $Estado1, $Municipio1, $Comunidad1, $CP1, $Tel1, $Correo1, $Vendedor, $RFC2, $IFE2, $Calle2, $Colonia2, $Numero2, $Estado2, $Municipio2, $Comunidad2, $CP2, $Tel2, $Correo2, $Tinmueble, $Ubicacion, $Norte, $Sur, $Este, $Oeste, $Noreste, $Sureste, $Noroeste, $Suroeste, $Terreno, $Construido, $Servidumbres, $Gravamenes, $Otras, $Valor, $Vventa, $Tomo, $Libro, $Seccion, $Folio, $Numeral, $Notario, $Nnotario, $Partido
    ) {
        $data = array(
            'Propietario' => $Propietario,
            'RFC' => $RFC,
            'IFE' => $IFE,
            'Calle1' => $Calle1,
            'Colonia1' => $Colonia1,
            'Numero1' => $Numero1,
            'Estado1' => $Estado1,
            'Municipio1' => $Municipio1,
            'Comunidad1' => $Comunidad1,
            'CP1' => $CP1,
            'Tel1' => $Tel1,
            'Correo1' => $Correo1,
            'Vendedor' => $Vendedor,
            'RFC2' => $RFC2,
            'IFE2' => $IFE2,
            'Calle2' => $Calle2,
            'Colonia2' => $Colonia2,
            'Numero2' => $Numero2,
            'Estado2' => $Estado2,
            'Municipio2' => $Municipio2,
            'Comunidad2' => $Comunidad2,
            'CP2' => $CP2,
            'Tel2' => $Tel2,
            'Correo2' => $Correo2,
            'Tinmueble' => $Tinmueble,
            'Ubicacion' => $Ubicacion,
            'Norte' => $Norte,
            'Sur' => $Sur,
            'Este' => $Este,
            'Oeste' => $Oeste,
            'Noreste' => $Noreste,
            'Sureste' => $Sureste,
            'Noroeste' => $Noroeste,
            'Suroeste' => $Suroeste,
            'Terreno' => $Terreno,
            'Construido' => $Construido,
            'Servidumbres' => $Servidumbres,
            'Gravamenes' => $Gravamenes,
            'Otras' => $Otras,
            'Valor' => $Valor,
            'Vventa' => $Vventa,
            'Tomo' => $Tomo,
            'Libro' => $Libro,
            'Seccion' => $Seccion,
            'Folio' => $Folio,
            'Numeral' => $Numeral,
            'Notario' => $Notario,
            'Nnotario' => $Nnotario,
            'Partido' => $Partido
        );
        $this->db->insert('InmuebleRegistro', $data);
        return 1;
    }

    function getRinmueble2(
    $ID, $Propietario, $RFC, $IFE, $Calle1, $Colonia1, $Numero1, $Estado1, $Municipio1, $Comunidad1, $CP1, $Tel1, $Correo1, $Vendedor, $RFC2, $IFE2, $Calle2, $Colonia2, $Numero2, $Estado2, $Municipio2, $Comunidad2, $CP2, $Tel2, $Correo2, $Ubicacion, $Norte, $Sur, $Este, $Oeste, $Noreste, $Sureste, $Noroeste, $Suroeste, $Terreno, $Construido, $Servidumbres, $Gravamenes, $Otras, $Valor, $Vventa, $Tomo, $Libro, $Seccion, $Folio, $Numeral, $Notario, $Nnotario, $Partido, $Notario2, $Nnotario2, $Partido2, $FechaCompraVenta, $Monto, $Impuestos, $GastosRegistrales, $GastosNotariales, $FechaLugarEntrega, $Fideicomitente, $Fiduciario, $Fideicomisario, $Delegados, $Depositario, $Acto, $Tomo2, $Numero, $Fecha, $Contrato
    ) {
        $data = array(
            'Propietario' => $Propietario,
            'RFC' => $RFC,
            'IFE' => $IFE,
            'Calle1' => $Calle1,
            'Colonia1' => $Colonia1,
            'Numero1' => $Numero1,
            'Estado1' => $Estado1,
            'Municipio1' => $Municipio1,
            'Comunidad1' => $Comunidad1,
            'CP1' => $CP1,
            'Tel1' => $Tel1,
            'Correo1' => $Correo1,
            'Vendedor' => $Vendedor,
            'RFC2' => $RFC2,
            'IFE2' => $IFE2,
            'Calle2' => $Calle2,
            'Colonia2' => $Colonia2,
            'Numero2' => $Numero2,
            'Estado2' => $Estado2,
            'Municipio2' => $Municipio2,
            'Comunidad2' => $Comunidad2,
            'CP2' => $CP2,
            'Tel2' => $Tel2,
            'Correo2' => $Correo2,
            'Ubicacion' => $Ubicacion,
            'Norte' => $Norte,
            'Sur' => $Sur,
            'Este' => $Este,
            'Oeste' => $Oeste,
            'Noreste' => $Noreste,
            'Sureste' => $Sureste,
            'Noroeste' => $Noroeste,
            'Suroeste' => $Suroeste,
            'Terreno' => $Terreno,
            'Construido' => $Construido,
            'Servidumbres' => $Servidumbres,
            'Gravamenes' => $Gravamenes,
            'Otras' => $Otras,
            'Valor' => $Valor,
            'Vventa' => $Vventa,
            'Tomo' => $Tomo,
            'Libro' => $Libro,
            'Seccion' => $Seccion,
            'Folio' => $Folio,
            'Numeral' => $Numeral,
            'Notario' => $Notario,
            'Nnotario' => $Nnotario,
            'Partido' => $Partido,
            'Notario2' => $Notario2,
            'Nnotario2' => $Nnotario2,
            'Partido2' => $Partido2,
            'FechaCompraVenta' => $FechaCompraVenta,
            'Monto' => $Monto,
            'Impuestos' => $Impuestos,
            'GastosRegistrales' => $GastosRegistrales,
            'GastosNotariales' => $GastosNotariales,
            'FechaLugarEntrega' => $FechaLugarEntrega,
            'Fideicomitente' => $Fideicomitente,
            'Fiduciario' => $Fiduciario,
            'Fideicomisario' => $Fideicomisario,
            'Delegados' => $Delegados,
            'Depositario' => $Depositario,
            'Acto' => $Acto,
            'Tomo2' => $Tomo2,
            'Numero' => $Numero,
            'Fecha' => $Fecha,
            'Contrato' => $Contrato
        );
        $this->db->where('ID', $ID);
        $this->db->update('InmuebleRegistro', $data);
        return 1;
    }

    function getInmueblesALL2() {
        $where = "";
        $this->db->select('*');
        $this->db->from('InmuebleRegistro');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getInmuebleTDocumentos() {
        $where = "";
        $this->db->select('*');
        $this->db->from('InmuebleTDocumentos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getCompraVenta(
    $Inmueble, $Notario2, $Nnotario2, $Partido2, $Comprador, $FechaCompraVenta, $Monto, $Modalidad, $FormaPago, $Impuestos, $GastosRegistrales, $GastosNotariales, $FechaLugarEntrega
    ) {
        $data = array(
            'Notario2' => $Notario2,
            'Nnotario2' => $Nnotario2,
            'Partido2' => $Partido2,
            'Comprador' => $Comprador,
            'FechaCompraVenta' => $FechaCompraVenta,
            'Monto' => $Monto,
            'Modalidad' => $Modalidad,
            'FormaPago' => $FormaPago,
            'Impuestos' => $Impuestos,
            'GastosRegistrales' => $GastosRegistrales,
            'GastosNotariales' => $GastosNotariales,
            'FechaLugarEntrega' => $FechaLugarEntrega
        );
        $this->db->where('ID', $Inmueble);
        $this->db->update('InmuebleRegistro', $data);
        return 1;
    }

    function getFideicomiso(
    $Inmueble, $Fideicomitente, $Fiduciario, $Fideicomisario, $Delegados, $Depositario, $Acto, $Tomo2, $Numero, $Fecha, $Contrato
    ) {
        $data = array(
            'Fideicomitente' => $Fideicomitente,
            'Fiduciario' => $Fiduciario,
            'Fideicomisario' => $Fideicomisario,
            'Delegados' => $Delegados,
            'Depositario' => $Depositario,
            'Acto' => $Acto,
            'Tomo2' => $Tomo2,
            'Numero' => $Numero,
            'Fecha' => $Fecha,
            'Contrato' => $Contrato
        );
        $this->db->where('ID', $Inmueble);
        $this->db->update('InmuebleRegistro', $data);
        return 1;
    }

    function getInmueblesID($Inmueble) {
        $where = "ID='" . $Inmueble . "'";
        $this->db->select('*');
        $this->db->from('InmuebleRegistro');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getBInmueble4(
    $Inmueble, $TDocumento, $Observaciones, $Nombre
    ) {
        $data = array(
            'Inmueble' => $Inmueble,
            'TDocumento' => $TDocumento,
            'Observaciones' => $Observaciones,
            'Nombre' => $Nombre
        );
        $this->db->insert('InmuebleExp', $data);
        return 1;
    }

    function getResultadoBInmueble5($ID) {
        $where = "ID='" . $ID . "'";
        $this->db_estatus->select('*');
        $this->db_estatus->from('InmuebleRegistro');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoBInmueble52($ID) {
        $where = "Inmueble='" . $ID . "'";
        $this->db_estatus->select('*');
        $this->db_estatus->from('InmuebleExp');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoInmuebleDocumentos() {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('Referenciados_Tipo');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getResultadoBInmueble5ALL($ID) {
        $where = "";
        $this->db_estatus->select('*');
        $this->db_estatus->from('InmuebleExp');
        if ($where != NULL)
            $this->db_estatus->where($where, NULL, FALSE);
        $query = $this->db_estatus->get();
        return $query->result();
    }

    function getBorrarTerreno($Inmueble) {
        $this->db->where('ID', $Inmueble);
        return $this->db->delete('InmuebleRegistro');
    }

    function getBorrarExpediente($Inmueble) {
        $this->db->where('Inmueble', $Inmueble);
        return $this->db->delete('InmuebleExp');
    }

    function getProyectosAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Proyectos');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getFormaTAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('FormaT');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getInstitucionAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('InsitucionesC');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getProyectosID($Desarrollo) {
        $where = "ID='" . $Desarrollo . "'";
        $this->db->select('*');
        $this->db->from('Proyectos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getLotesALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Lotes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getLotesID($Ndesarrollo) {
        $where = "Ndesarrollo='" . $Ndesarrollo . "'";
        $this->db->select('*');
        $this->db->from('Lotes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getCotizacionConceptosALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('CotizacionConceptos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getEtiquetaALL() {
        $where = "";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('CotizacionConceptos');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getEtiquetaID($Etiquet) {
        $where = "id_conceptos='" . $Etiquet . "'";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('CotizacionConceptos');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getSaveCotizacion(
    $Proveedores, $Producto, $Etiqueta, $Cantidad, $Proyectos, $Anotaciones, $Numero, $Fecha
    ) {
        $data = array(
            'Proveedores' => $Proveedores,
            'Productos' => $Producto,
            'Etiqueta' => $Etiqueta,
            'Cantidad' => $Cantidad,
            'Proyecto' => $Proyectos,
            'Anotaciones' => $Anotaciones,
            'Numero' => $Numero,
            'Fecha' => $Fecha
        );
        $this->db->insert('Cotizaciones', $data);
//        print $str = $this->db->last_query();
        return 1;
    }

    function getUpdateCotizacion(
    $Numero, $Etiqueta, $Provs, $Producto, $Cantidad
    ) {
        $data = array(
            'Proveedores' => $Provs,
            'Productos' => $Producto,
            'Etiqueta' => $Etiqueta,
            'Cantidad' => $Cantidad
        );
        $this->db->where('Numero', $Numero);
        $this->db->update('Cotizaciones', $data);
        return 1;
    }

    function getCotizacionesALL2($Numero) {
        $where = "Numero='" . $Numero . "'";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('Cotizaciones');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getCotizacionesID($Numero) {
        $where = "ID='" . $Numero . "'";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('Cotizaciones');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getCotizacionesALL4($Numero) {
        $where = "Cotizacion='" . $Numero . "'";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('OrdenCompra');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getOrdenCompra($IDCotizacion, $Etiquet, $Proveed) {
        $where = "Cotizacion='" . $IDCotizacion . "' AND Etiquet='" . $Etiquet . "' AND Proveed='" . $Proveed . "'";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('OrdenCompra');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getCotizacionesALL3() {
        $where = "Aprobacion!=''";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('Cotizaciones');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getCotizacionesxAprobar() {
        $where = "Concluido!='Sí'";
        $this->db_Actividades->select('*');
        $this->db_Actividades->from('Cotizaciones');
        if ($where != NULL)
            $this->db_Actividades->where($where, NULL, FALSE);
        $query = $this->db_Actividades->get();
        return $query->result();
    }

    function getProductosxEtiqueta($Etiqueta) {
        $where = "Etiqueta='" . $Etiqueta . "'";
        $this->db->select('*');
        $this->db->from('Productos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $this->db->order_by('Producto', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function getSaveAprobacion(
    $Numero, $Aprobar
    ) {
        $data = array(
            'Aprobacion' => $Aprobar
        );
        $this->db->where('Numero', $Numero);
        $this->db->update('Cotizaciones', $data);
        return 1;
    }

    function getTerminarAprobacion(
    $Numero, $Terminado
    ) {
        $data = array(
            'Concluido' => $Terminado
        );
        $this->db->where('Numero', $Numero);
        $this->db->update('Cotizaciones', $data);
        return 1;
    }

    function getRegistroVivienda(
    $Modelo, $Precio, $PrecioM2, $MetrosF, $MetrosFondo, $Terreno, $Contruccion, $Niveles, $Recamaras, $EspaciosAuto, $Banios, $Vestidor, $PatioServ, $Sala, $Comedor, $JardinTrasero, $CuartoLavado, $SalaTV, $Cocina, $JardinFrente, $Vestibulo, $Escaleras, $Pasillos, $Tendedero, $Bodega, $Despensa, $VestidorTrastero, $Desvan, $Despacho, $Estudio, $Biblioteca, $SalaJuegos, $SalaFumadores, $Sauna, $Gimnasio, $Otras, $CocinaInt, $Estufa, $Muebles, $Closets, $Lavadero, $Calentador, $Cisterna, $Canceles, $Terrazas, $Porches, $Piscina, $Pergola, $Invernadero, $PistaJuego, $EspaciosDep
    ) {
        $data = array(
            'Modelo' => $Modelo,
            'Precio' => $Precio,
            'PrecioM2' => $PrecioM2,
            'MetrosF' => $MetrosF,
            'MetrosFondo' => $MetrosFondo,
            'Terreno' => $Terreno,
            'Contruccion' => $Contruccion,
            'Niveles' => $Niveles,
            'Recamaras' => $Recamaras,
            'EspaciosAuto' => $EspaciosAuto,
            'Banios' => $Banios,
            'Vestidor' => $Vestidor,
            'PatioServ' => $PatioServ,
            'Sala' => $Sala,
            'Comedor' => $Comedor,
            'JardinTrasero' => $JardinTrasero,
            'CuartoLavado' => $CuartoLavado,
            'SalaTV' => $SalaTV,
            'Cocina' => $Cocina,
            'JardinFrente' => $JardinFrente,
            'Vestibulo' => $Vestibulo,
            'Escaleras' => $Escaleras,
            'Pasillos' => $Pasillos,
            'Tendedero' => $Tendedero,
            'Bodega' => $Bodega,
            'Despensa' => $Despensa,
            'VestidorTrastero' => $VestidorTrastero,
            'Desvan' => $Desvan,
            'Despacho' => $Despacho,
            'Estudio' => $Estudio,
            'Biblioteca' => $Biblioteca,
            'SalaJuegos' => $SalaJuegos,
            'SalaFumadores' => $SalaFumadores,
            'Sauna' => $Sauna,
            'Gimnasio' => $Gimnasio,
            'Otras' => $Otras,
            'CocinaInt' => $CocinaInt,
            'Estufa' => $Estufa,
            'Muebles' => $Muebles,
            'Closets' => $Closets,
            'Lavadero' => $Lavadero,
            'Calentador' => $Calentador,
            'Cisterna' => $Cisterna,
            'Canceles' => $Canceles,
            'Terrazas' => $Terrazas,
            'Porches' => $Porches,
            'Piscina' => $Piscina,
            'Pergola' => $Pergola,
            'Invernadero' => $Invernadero,
            'PistaJuego' => $PistaJuego,
            'EspaciosDep' => $EspaciosDep
        );
        $this->db->insert('ViviendasRegistro', $data);
        return 1;
    }

    function getAsignarVivienda(
    $Ndesarrollo, $Vivienda, $TipoV
    ) {
        $data = array(
            'Ndesarrollo' => $Ndesarrollo,
            'Modelo' => $Vivienda,
            'Tipo' => $TipoV
        );
        $this->db->insert('ViviendasAsignadas', $data);
        return 1;
    }

    function getViviendaExp(
    $Vivienda, $TDocumento, $Observaciones, $Nombre
    ) {
        $data = array(
            'Vivienda' => $Vivienda,
            'TDocumento' => $TDocumento,
            'Observaciones' => $Observaciones,
            'Nombre' => $Nombre
        );
        $this->db->insert('ViviendaExp', $data);
        return 1;
    }

    function getComRef() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Com_Ref');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getViviendaALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ViviendasRegistro');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getViviendasInformacion($Vivienda) {
        $where = "ID='" . $Vivienda . "'";
        $this->db->select('*');
        $this->db->from('ViviendasRegistro');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getPrototiposALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ViviendasPrototipos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getMedio() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Com_Medios');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getVivienda($ID) {
        $where = "ID='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('ViviendasRegistro');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getViviendaExp2($ID) {
        $where = "Vivienda='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('ViviendaExp');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getBorrarVivienda($Vivienda) {
        $this->db->where('ID', $Vivienda);
        return $this->db->delete('ViviendasRegistro');
    }

    function getBorrarViviendaExpediente($Vivienda) {
        $this->db->where('Vivienda', $Vivienda);
        return $this->db->delete('ViviendaExp');
    }

    function getClientesAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Clientes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getCreditos() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Creditos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getClientesID($Cliente) {
        $where = "ID='" . $Cliente . "'";
        $this->db->select('*');
        $this->db->from('Clientes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getModeloV() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ViviendasRegistro');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRegistroCliente(
    $Proyectos, $Ncliente, $Referencia, $Medio, $Calle, $No, $Colonia, $CP, $Pais, $Estado, $Ciudad, $Telfijo, $Tel, $Correo, $facebook, $twitter, $linkedin, $google, $Genero, $EdoCivil, $IFE, $RFC, $CURP, $NSS, $Escolaridad
    ) {
        $data = array(
            'Proyectos' => $Proyectos,
            'Ncliente' => $Ncliente,
            'Referencia' => $Referencia,
            'Medio' => $Medio,
            'Calle' => $Calle,
            'No' => $No,
            'Colonia' => $Colonia,
            'CP' => $CP,
            'Pais' => $Pais,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Telfijo' => $Telfijo,
            'Tel' => $Tel,
            'Correo' => $Correo,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'google' => $google,
            'Genero' => $Genero,
            'EdoCivil' => $EdoCivil,
            'IFE' => $IFE,
            'RFC' => $RFC,
            'CURP' => $CURP,
            'NSS' => $NSS,
            'Escolaridad' => $Escolaridad
        );
        $this->db->insert('Clientes', $data);
        return 1;
    }

    function getClienteTrabajo(
    $Cliente, $Ocupacion, $Trabajo, $Registro, $CalleT, $NoT, $ColoniaT, $CPT, $PaisT, $EstadoT, $CiudadT, $TelFijoT, $TelT, $CorreoT
    ) {
        $data = array(
            'Ocupacion' => $Ocupacion,
            'Trabajo' => $Trabajo,
            'Registro' => $Registro,
            'CalleT' => $CalleT,
            'NoT' => $NoT,
            'ColoniaT' => $ColoniaT,
            'CPT' => $CPT,
            'PaisT' => $PaisT,
            'EstadoT' => $EstadoT,
            'CiudadT' => $CiudadT,
            'TelFijoT' => $TelFijoT,
            'TelT' => $TelT,
            'CorreoT' => $CorreoT
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $data);
        return 1;
    }

    function getClienteSocioEco(
    $Cliente, $Conyuge, $Dependientes, $Empleos, $IngresosM, $CasaPropia, $ValorCasa, $Renta, $MontoRenta, $AutoPropio, $NumAutos, $Gastos, $Deudas, $MontoDeudas, $AbonoMensual
    ) {
        $data = array(
            'Conyuge' => $Conyuge,
            'Dependientes' => $Dependientes,
            'Empleos' => $Empleos,
            'IngresosM' => $IngresosM,
            'CasaPropia' => $CasaPropia,
            'ValorCasa' => $ValorCasa,
            'Renta' => $Renta,
            'MontoRenta' => $MontoRenta,
            'AutoPropio' => $AutoPropio,
            'NumAutos' => $NumAutos,
            'Gastos' => $Gastos,
            'Deudas' => $Deudas,
            'MontoDeudas' => $MontoDeudas,
            'AbonoMensual' => $AbonoMensual
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $data);
        return 1;
    }

    function getClienteReferencia(
    $Cliente, $Referencia1, $Profesion1, $Trabajo1, $Tel1, $Telm1, $Correo1, $Referencia2, $Profesion2, $Trabajo2, $Tel2, $Telm2, $Correo2
    ) {
        $data = array(
            'Referencia1' => $Referencia1,
            'Profesion1' => $Profesion1,
            'Trabajo1' => $Trabajo1,
            'Tel1' => $Tel1,
            'Telm1' => $Telm1,
            'Correo1' => $Correo1,
            'Referencia2' => $Referencia2,
            'Profesion2' => $Profesion2,
            'Trabajo2' => $Trabajo2,
            'Tel2' => $Tel2,
            'Telm2' => $Telm2,
            'Correo2' => $Correo2
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $data);
        return 1;
    }

    function getRegistroVivi(
    $Cliente, $Desarrollo, $Vivienda, $Prototipo, $Lote, $Esquina, $Excedente, $Nvivienda, $Manzana, $NCalle, $Sexcedente, $Pexcedente, $Pvivienda, $Capartado, $Fapartado, $Referencia, $Fechaapartado, $Clientapartado, $Equipamiento, $PEquipamiento, $Papartado, $FtCredito
    ) {
        $data = array(
            'Desarrollo' => $Desarrollo,
            'Vivienda' => $Vivienda,
            'Prototipo' => $Prototipo,
            'Lote' => $Lote,
            'Esquina' => $Esquina,
            'Excedente' => $Excedente,
            'Nvivienda' => $Nvivienda,
            'Manzana' => $Manzana,
            'NCalle' => $NCalle,
            'Sexcedente' => $Sexcedente,
            'Pexcedente' => $Pexcedente,
            'Pvivienda' => $Pvivienda,
            'Capartado' => $Capartado,
            'Fapartado' => $Fapartado,
            'Referencia3' => $Referencia,
            'Fechaapartado' => $Fechaapartado,
            'Clientapartado' => $Clientapartado,
            'Equipamiento' => $Equipamiento,
            'PEquipamiento' => $PEquipamiento,
            'Papartado' => $Papartado,
            'FtCredito' => $FtCredito
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $data);
        return 1;
    }

    function getRevCompraVenta($Cliente, $Cofinanciado, $CreditoA, $CreditoB, $Scredito, $Anticipo, $Pventa, $Gavaluo, $Gmunicipales, $Descuento, $CostoT, $SaldoF, $Madeudo, $FPagoadeudo, $Msobrante, $Fpagosobrante, $FirmaNP, $FechaFNP, $NP, $NNP, $PartidoNP, $NumeralRegistral, $FechaEntrega, $Observaciones, $VendidaX) {
        $data = array(
            'Cofinanciado' => $Cofinanciado,
            'CreditoA' => $CreditoA,
            'CreditoB' => $CreditoB,
            'Scredito' => $Scredito,
            'Anticipo' => $Anticipo,
            'Pventa' => $Pventa,
            'Gavaluo' => $Gavaluo,
            'Gmunicipales' => $Gmunicipales,
            'Descuento' => $Descuento,
            'CostoT' => $CostoT,
            'SaldoF' => $SaldoF,
            'Madeudo' => $Madeudo,
            'FPagoadeudo' => $FPagoadeudo,
            'Msobrante' => $Msobrante,
            'Fpagosobrante' => $Fpagosobrante,
            'FirmaNP' => $FirmaNP,
            'FechaFNP' => $FechaFNP,
            'NP' => $NP,
            'NNP' => $NNP,
            'PartidoNP' => $PartidoNP,
            'NumeralRegistral' => $NumeralRegistral,
            'FechaEntrega' => $FechaEntrega,
            'Observaciones' => $Observaciones,
            'VendidaX' => $VendidaX
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $data);
        return 1;
    }

    function getRegistroExped(
    $Cliente, $Frevision, $Fadquirir, $Creditos, $Enganche, $Mcredito, $Fsolicitudcredito, $Promesa, $TPromesa, $Comprobante, $TComprobante, $Acta, $TActa, $CCURP, $Tcurp, $INE, $Tine, $EdoCuenta, $TEdoCuenta, $Recibos, $TRecibos, $Cnomina, $TCnomina, $Declaraciones, $TDeclaraciones, $Reporte, $TReporte, $Solicitud, $TSolicitud, $Otros2, $TOtros2, $Precalificacion, $TPrecalificacion, $Contrato, $TContrato, $Cartalaboral, $TCartalaboral, $SorteoBIM, $TSorteoBIM, $FormatoBIM, $TFormatoBIM, $AutorizacionBIM, $TAutorizacionBIM, $FormatoBendit, $TFormatoBendit, $AvisosPriv, $TAvisosPriv, $FormatoInicio, $TFormatoInicio, $Constancia, $TConstancia, $ActaNacA, $TActaNacA, $ActaNacB, $TActaNacB, $ActaMatrimonio, $TActaMatrimonio, $RFCA, $TRFCA, $RFCB, $TRFCB, $CopiaIdenta, $TCopiaIdenta, $CopiaIdentb, $TCopiaIdentb, $CURPA, $TCURPA, $CURPB, $TCURPB, $CuentaMtra, $TCuentaMtra, $CLABE, $TCLABE, $Acta2, $Tacta2, $Declaracion, $TDeclaracion, $Plano, $TPlano, $Sembrado, $TSembrado, $Certificado, $TCertificado, $Pago, $TPago, $CopiaEscrituras, $TCopiaEscrituras, $Condominio, $TCondominio, $Construccion, $TConstruccion, $Obra, $TObra, $Alineamiento, $TAlineamiento, $Refrendo, $TRefrendo, $Anexos, $TAnexos
    ) {
        $data = array(
            'Creditos' => $Creditos,
            'Promesa' => $Promesa,
            'TPromesa' => $TPromesa,
            'Comprobante' => $Comprobante,
            'TComprobante' => $TComprobante,
            'Acta' => $Acta,
            'TActa' => $TActa,
            'CCURP' => $CCURP,
            'Tcurp' => $Tcurp,
            'INE' => $INE,
            'Tine' => $Tine,
            'EdoCuenta' => $EdoCuenta,
            'TEdoCuenta' => $TEdoCuenta,
            'Recibos' => $Recibos,
            'TRecibos' => $TRecibos,
            'Cnomina' => $Cnomina,
            'TCnomina' => $TCnomina,
            'Declaraciones' => $Declaraciones,
            'TDeclaraciones' => $TDeclaraciones,
            'Reporte' => $Reporte,
            'TReporte' => $TReporte,
            'Solicitud' => $Solicitud,
            'TSolicitud' => $TSolicitud,
            'Otros2' => $Otros2,
            'TOtros2' => $TOtros2,
            'Precalificacion' => $Precalificacion,
            'TPrecalificacion' => $TPrecalificacion,
            'Contrato' => $Contrato,
            'TContrato' => $TContrato,
            'Cartalaboral' => $Cartalaboral,
            'TCartalaboral' => $TCartalaboral,
            'SorteoBIM' => $SorteoBIM,
            'TSorteoBIM' => $TSorteoBIM,
            'FormatoBIM' => $FormatoBIM,
            'TFormatoBIM' => $TFormatoBIM,
            'AutorizacionBIM' => $AutorizacionBIM,
            'TAutorizacionBIM' => $TAutorizacionBIM,
            'FormatoBendit' => $FormatoBendit,
            'TFormatoBendit' => $TFormatoBendit,
            'AvisosPriv' => $AvisosPriv,
            'TAvisosPriv' => $TAvisosPriv,
            'FormatoInicio' => $FormatoInicio,
            'TFormatoInicio' => $TFormatoInicio,
            'Constancia' => $Constancia,
            'TConstancia' => $TConstancia,
            'ActaNacA' => $ActaNacA,
            'TActaNacA' => $TActaNacA,
            'ActaNacB' => $ActaNacB,
            'TActaNacB' => $TActaNacB,
            'ActaMatrimonio' => $ActaMatrimonio,
            'TActaMatrimonio' => $TActaMatrimonio,
            'RFCA' => $RFCA,
            'TRFCA' => $TRFCA,
            'RFCB' => $RFCB,
            'TRFCB' => $TRFCB,
            'CopiaIdenta' => $CopiaIdenta,
            'TCopiaIdenta' => $TCopiaIdenta,
            'CopiaIdentb' => $CopiaIdentb,
            'TCopiaIdentb' => $TCopiaIdentb,
            'CURPA' => $CURPA,
            'TCURPA' => $TCURPA,
            'CURPB' => $CURPB,
            'TCURPB' => $TCURPB,
            'CuentaMtra' => $CuentaMtra,
            'TCuentaMtra' => $TCuentaMtra,
            'CLABE' => $CLABE,
            'TCLABE' => $TCLABE,
            'Acta2' => $Acta2,
            'Tacta2' => $Tacta2,
            'Declaracion' => $Declaracion,
            'TDeclaracion' => $TDeclaracion,
            'Plano' => $Plano,
            'TPlano' => $TPlano,
            'Sembrado' => $Sembrado,
            'TSembrado' => $TSembrado,
            'Certificado' => $Certificado,
            'TCertificado' => $TCertificado,
            'Pago' => $Pago,
            'TPago' => $TPago,
            'CopiaEscrituras' => $CopiaEscrituras,
            'TCopiaEscrituras' => $TCopiaEscrituras,
            'Condominio' => $Condominio,
            'TCondominio' => $TCondominio,
            'Construccion' => $Construccion,
            'TConstruccion' => $TConstruccion,
            'Obra' => $Obra,
            'TObra' => $TObra,
            'Alineamiento' => $Alineamiento,
            'TAlineamiento' => $TAlineamiento,
            'Refrendo' => $Refrendo,
            'TRefrendo' => $TRefrendo,
            'Anexos' => $Anexos,
            'TAnexos' => $TAnexos
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('ClientesExpediente', $data);

        $datos = array(
            'Frevision' => $Frevision,
            'Fadquirir' => $Fadquirir,
            'InstCrediticia' => $Creditos,
            'Enganche' => $Enganche,
            'Mcredito' => $Mcredito,
            'Fsolicitudcredito' => $Fsolicitudcredito
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $datos);

        return 1;
    }

    function getRegistroPagos(
    $Cliente, $Anio, $Mensualidad, $Monto, $FPago, $InstitBancaria, $Ncuenta, $RefePago, $FePago, $NPago, $Saldo
    ) {
        $data = array(
            'Folio' => $Cliente,
            'Anio' => $Anio,
            'Mensualidad' => $Mensualidad,
            'Monto' => $Monto,
            'FPago' => $FPago,
            'InstitBancaria' => $InstitBancaria,
            'Ncuenta' => $Ncuenta,
            'RefePago' => $RefePago,
            'FePago' => $FePago,
            'NPago' => $NPago,
            'Saldo' => $Saldo
        );
        $this->db->insert('ClientesPagos', $data);
        return 1;
    }

    function getRegistroCancelacion(
    $Cliente, $FCancelacion, $Ncancela, $MotivoCancela, $Firma
    ) {
        $data = array(
            'FCancelacion' => $FCancelacion,
            'Ncancela' => $Ncancela,
            'MotivoCancela' => $MotivoCancela,
            'Firma' => $Firma
        );
        $this->db->where('ID', $Cliente);
        $this->db->update('Clientes', $data);
        return 1;
    }

    function getPagosxFecha($fecha) {
        $where = "";
        $this->db->select('*');
        $this->db->from('ClientesPagos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratosALL2() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Contratos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratosID2($Contrato) {
        $where = "ID='" . $Contrato . "'";
        $this->db->select('*');
        $this->db->from('Contratos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getOrdenes() {
        $where = "";
        $this->db_NoRecibos->select('*');
        $this->db_NoRecibos->from('OrdenCompra');
        if ($where != NULL)
            $this->db_NoRecibos->where($where, NULL, FALSE);
        $query = $this->db_NoRecibos->get();
        return $query->result();
    }

    function getOrdenesID($ID) {
        $where = "ID='" . $ID . "'";
        $this->db_NoRecibos->select('*');
        $this->db_NoRecibos->from('OrdenCompra');
        if ($where != NULL)
            $this->db_NoRecibos->where($where, NULL, FALSE);
        $query = $this->db_NoRecibos->get();
        return $query->result();
    }

    function getRegistroOrdenCompra(
    $ID, $Cotizacion, $Etiquet, $Proveed, $Solicitante, $Facturar, $Contrat, $ProdFolios, $CantiNum, $CantLetras, $Proveedor, $Domicilio, $Telefono, $Correo, $Pagina, $Fracc, $Localidad
    ) {

        $where = "ID='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('OrdenCompra');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        $existe = $query->result();
        foreach ($existe as $existe1) {
            
        }

        if (empty($existe)) {
            $data = array(
                'Cotizacion' => $Cotizacion,
                'Etiquet' => $Etiquet,
                'Proveed' => $Proveed,
                'Solicitante' => $Solicitante,
                'Facturar' => $Facturar,
                'multiple' => $Contrat,
                'Productos' => $ProdFolios,
                'Cantidad' => $CantiNum,
                'CantidadLetras' => $CantLetras,
                'Proveedor' => $Proveedor,
                'Domicilio' => $Domicilio,
                'Telefono' => $Telefono,
                'Correo' => $Correo,
                'Pagina' => $Pagina,
                'Fracc' => $Fracc,
                'Localidad' => $Localidad
            );
            $this->db->insert('OrdenCompra', $data);
            return 1;
        } else {
            $data = array(
                'Cotizacion' => $Cotizacion,
                'Etiquet' => $Etiquet,
                'Proveed' => $Proveed,
                'Solicitante' => $Solicitante,
                'Facturar' => $Facturar,
                'multiple' => $Contrat,
                'Productos' => $ProdFolios,
                'Cantidad' => $CantiNum,
                'CantidadLetras' => $CantLetras,
                'Proveedor' => $Proveedor,
                'Domicilio' => $Domicilio,
                'Telefono' => $Telefono,
                'Correo' => $Correo,
                'Pagina' => $Pagina,
                'Fracc' => $Fracc,
                'Localidad' => $Localidad
            );
            $this->db->where('ID', $existe1->ID);
            $this->db->update('OrdenCompra', $data);
            return 1;
        }
    }

    function getTipovivienda($Proyecto) {
        $where = "Ndesarrollo=" . $Proyecto;
        $this->db_Tipo_cliente->select('*');
        $this->db_Tipo_cliente->from('ViviendasAsignadas');
        if ($where != NULL)
            $this->db_Tipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_Tipo_cliente->get();
        return $query->result();
    }

    function getTipovivienda2() {
        $where = "";
        $this->db_Tipo_cliente->select('*');
        $this->db_Tipo_cliente->from('ViviendasRegistro');
        if ($where != NULL)
            $this->db_Tipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_Tipo_cliente->get();
        return $query->result();
    }

    function getViviendas() {
        $where = "";
        $this->db_Tipo_cliente->select('*');
        $this->db_Tipo_cliente->from('ViviendasRegistro');
        if ($where != NULL)
            $this->db_Tipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_Tipo_cliente->get();
        return $query->result();
    }

    function getPrototipo() {
        $where = "";
        $this->db_Tipo_cliente->select('*');
        $this->db_Tipo_cliente->from('ViviendasPrototipos');
        if ($where != NULL)
            $this->db_Tipo_cliente->where($where, NULL, FALSE);
        $query = $this->db_Tipo_cliente->get();
        return $query->result();
    }

    function getRegistroTramitesR(
    $Proyectos, $Tramite, $Instancia, $Requisitos, $Duracion, $Direccion
    ) {
        $data = array(
            'Proyectos' => $Proyectos,
            'Tramite' => $Tramite,
            'Instancia' => $Instancia,
            'Requisitos' => $Requisitos,
            'Duracion' => $Duracion,
            'Direccion' => $Direccion
        );
        $this->db->insert('RTramites', $data);
        return 1;
    }

    function getCompraVenta2(
    $indiceuser, $Desarrollo, $Fecha, $Apaterno, $Amaterno, $Nombres, $Referencia, $Medio, $Genero, $EstadoC, $ClaveElector, $RFC, $CURP, $NSS, $NivelE, $Calle, $Numero, $Colonia, $CP, $Estado, $Ciudad, $Telefono, $Movil, $Correo, $Facebook, $Twitter, $Ocupacion, $Trabajo, $CalleT, $NumeroT, $ColoniaT, $CPT, $EstadoT, $CiudadT, $TelefonoT, $PaginaT, $CorreoT, $FacebookT, $TwitterT, $ApaternoC, $AmaternoC, $NombresC, $Dependientes, $MasEmpleo, $Ingresos, $CasaPropia, $ValorVivienda, $Renta, $Automovil, $Autos, $Deudas, $Deuda, $Abono, $Apaterno1, $Amaterno1, $Nombres1, $Profesion1, $Trabajo1, $Telefono1, $Movil1, $Correo1, $Apaterno2, $Amaterno2, $Nombres2, $Profesion2, $Trabajo2, $Telefono2, $Movil2, $Correo2, $Modelo, $Vivienda, $Lote, $NVivienda, $Manzana, $CalleV, $Esquina, $Excedente, $SuperficieExc, $PrecioExc, $PrecioT, $Bono, $CantEntrega, $FormaEnt, $CantLetra
    ) {
        $data = array(
            'Responsable' => $indiceuser,
            'Desarrollo' => $Desarrollo,
            'Fecha' => $Fecha,
            'Apaterno' => $Apaterno,
            'Amaterno' => $Amaterno,
            'Nombres' => $Nombres,
            'Descargado' => '1',
            'Referencia' => $Referencia,
            'Medio' => $Medio,
            'Genero' => $Genero,
            'EstadoC' => $EstadoC,
            'ClaveElector' => $ClaveElector,
            'RFC' => $RFC,
            'CURP' => $CURP,
            'NSS' => $NSS,
            'NivelE' => $NivelE,
            'Calle' => $Calle,
            'Numero' => $Numero,
            'Colonia' => $Colonia,
            'CP' => $CP,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad,
            'Telefono' => $Telefono,
            'Movil' => $Movil,
            'Correo' => $Correo,
            'Facebook' => $Facebook,
            'Twitter' => $Twitter,
            'Ocupacion' => $Ocupacion,
            'Trabajo' => $Trabajo,
            'CalleT' => $CalleT,
            'NumeroT' => $NumeroT,
            'ColoniaT' => $ColoniaT,
            'CPT' => $CPT,
            'EstadoT' => $EstadoT,
            'CiudadT' => $CiudadT,
            'TelefonoT' => $TelefonoT,
            'PaginaT' => $PaginaT,
            'CorreoT' => $CorreoT,
            'FacebookT' => $FacebookT,
            'TwitterT' => $TwitterT,
            'ApaternoC' => $ApaternoC,
            'AmaternoC' => $AmaternoC,
            'NombresC' => $NombresC,
            'Dependientes' => $Dependientes,
            'MasEmpleo' => $MasEmpleo,
            'Ingresos' => $Ingresos,
            'CasaPropia' => $CasaPropia,
            'ValorVivienda' => $ValorVivienda,
            'Renta' => $Renta,
            'Automovil' => $Automovil,
            'Autos' => $Autos,
            'Deudas' => $Deudas,
            'Deuda' => $Deuda,
            'Abono' => $Abono,
            'Apaterno1' => $Apaterno1,
            'Amaterno1' => $Amaterno1,
            'Nombres1' => $Nombres1,
            'Profesion1' => $Profesion1,
            'Trabajo1' => $Trabajo1,
            'Telefono1' => $Telefono1,
            'Movil1' => $Movil1,
            'Correo1' => $Correo1,
            'Apaterno2' => $Apaterno2,
            'Amaterno2' => $Amaterno2,
            'Nombres2' => $Nombres2,
            'Profesion2' => $Profesion2,
            'Trabajo2' => $Trabajo2,
            'Telefono2' => $Telefono2,
            'Movil2' => $Movil2,
            'Correo2' => $Correo2,
            'Modelo' => $Modelo,
            'Vivienda' => $Vivienda,
            'Lote' => $Lote,
            'NVivienda' => $NVivienda,
            'Manzana' => $Manzana,
            'CalleV' => $CalleV,
            'Esquina' => $Esquina,
            'Excedente' => $Excedente,
            'SuperficieExc' => $SuperficieExc,
            'PrecioExc' => $PrecioExc,
            'PrecioT' => $PrecioT,
            'Bono' => $Bono,
            'CantEntrega' => $CantEntrega,
            'FormaEnt' => $FormaEnt,
            'CantLetra' => $CantLetra
        );
        $this->db->insert('Folios', $data);
        return 1;
    }

    function getCompraVenta3(
    $indiceuser, $Desarrollo
    ) {
        $data = array(
            'Responsable' => $indiceuser,
            'Desarrollo' => $Desarrollo
        );
        $this->db->insert('Folios', $data);
        return 1;
    }

    function getFoliosAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Folios');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getFoliosID($fol) {
        $where = "id_folio='" . $fol . "'";
        $this->db->select('*');
        $this->db->from('Folios');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramiteAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('RTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramiteID25($ProyectoD) {
        $where = "Proyectos='" . $ProyectoD . "'";
        $this->db->select('*');
        $this->db->from('RTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getEstatusTramitesAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('RtramitesEstatus');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getArchivosAll($Proyectos, $ID) {
        $where = "Ndesarrollo='" . $Proyectos . "' AND Tramite='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('RTramitesSeguimiento');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramiteID($Proyectos) {
        $where = "Proyectos='" . $Proyectos . "'";
        $this->db->select('*');
        $this->db->from('RTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramiteID2($Tramite) {
        $where = "ID='" . $Tramite . "'";
        $this->db->select('*');
        $this->db->from('RTramites');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getSegumientoT(
    $Tramite, $Responsable, $FechaInicio, $FechaTermino, $Estado
    ) {
        $data = array(
            'Responsable' => $Responsable,
            'FechaInicio' => $FechaInicio,
            'FechaTermino' => $FechaTermino,
            'Estado' => $Estado
        );
        $this->db->where('ID', $Tramite);
        $this->db->update('RTramites', $data);
        return 1;
    }

    function getSegumientoTramites(
    $Proyectos, $Tramite, $Observaciones, $Evidencia, $Nombre, $Fecha
    ) {
        $data = array(
            'Ndesarrollo' => $Proyectos,
            'Tramite' => $Tramite,
            'Observaciones' => $Observaciones,
            'Evidencia' => $Evidencia,
            'Nombre' => $Nombre,
            'Fecha' => $Fecha
        );
        $this->db->insert('RTramitesSeguimiento', $data);
        return 1;
    }

    function getConceptoPAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ContratistasConceptos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getConceptoPAll2() {
        $where = "Finalizado!='Si'";
        $this->db->select('*');
        $this->db->from('Rconceptos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistas() {
        $where = "Actividad='4'";
        $this->db->select('*');
        $this->db->from('Proveedores');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getConceptosID($Ndesarrollo) {
        $where = "Ndesarrollo='" . $Ndesarrollo . "'";
        $this->db->select('*');
        $this->db->from('Rconceptos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistasID($Ndesarrollo, $ConceptoP) {
        $where = "Ndesarrollo='" . $Ndesarrollo . "' AND ConceptoP='" . $ConceptoP . "'";
        $this->db->select('*');
        $this->db->from('Rconceptos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getFormaPago() {
        $where = "";
        $this->db->select('*');
        $this->db->from('FormaPago');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTipoComprobante2() {
        $where = "";
        $this->db->select('*');
        $this->db->from('TipoComprobante');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRconceptos($Ndesarrollo, $ConceptoP, $Contratistas) {
        $where = "Ndesarrollo='" . $Ndesarrollo . "' AND ConceptoP='" . $ConceptoP . "' AND Contratistas='" . $Contratistas . "'";
        $this->db->select('*');
        $this->db->from('Rconceptos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }



    function getInfoCliente($Cliente) {
        $where = "ID='" . $Cliente . "'";
        $this->db->select('*');
        $this->db->from('Clientes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getInfoClientes() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Clientes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getExpCliente($Cliente) {
        $where = "ID='" . $Cliente . "'";
        $this->db->select('*');
        $this->db->from('ClientesExpediente');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getPagosCliente($Cliente) {
        $where = "Folio='" . $Cliente . "'";
        $this->db->select('*');
        $this->db->from('ClientesPagos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getUSUARIOSID($ID) {
        $where = "Id='" . $ID . "'";
        $this->db_USUARIOSALL->select('*');
        $this->db_USUARIOSALL->from('usuarios');
        if ($where != NULL)
            $this->db_USUARIOSALL->where($where, NULL, FALSE);
        $query = $this->db_USUARIOSALL->get();
        return $query->result();
    }

    function getContratistasPagosAll($Ndesarrollo, $ConceptoP) {
        $where = "ConceptoP='" . $ConceptoP . "' AND Ndesarrollo='" . $Ndesarrollo . "'";
        $this->db->select('*');
        $this->db->from('ContratistasPagos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistasPagosAll1($ConceptoP) {
        $where = "ConceptoP='" . $ConceptoP . "'";
        $this->db->select('*');
        $this->db->from('ContratistasPagos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistasPagosAlltodos() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ContratistasPagos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getContratistasPagosID($ID) {
        $where = "ID='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('ContratistasPagos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//********************************__Fin Entrevista_____************************************************************	
//*********************************** Cemento

    function getComercializadoresCemento(
    $Nombre, $Tel, $Pagina, $Direccion, $Numero, $Pais, $Estado, $Ciudad
    ) {
        $data = array(
            'Nombre' => $Nombre,
            'Tel' => $Tel,
            'Pagina' => $Pagina,
            'Direccion' => $Direccion,
            'Numero' => $Numero,
            'Pais' => $Pais,
            'Estado' => $Estado,
            'Ciudad' => $Ciudad
        );
        $this->db->insert('ComerCemento', $data);
        return 1;
    }

    function getComercializador() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ComerCemento');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getPreciosCemento(
    $Fecha, $Comercializador, $Atiende, $PrecioCblanco, $PrecioCgris, $PrecioCmortero, $Marca
    ) {
        $data = array(
            'Fecha' => $Fecha,
            'Comercializador' => $Comercializador,
            'Atiende' => $Atiende,
            'PrecioCblanco' => $PrecioCblanco,
            'PrecioCgris' => $PrecioCgris,
            'PrecioCmortero' => $PrecioCmortero,
            'Marca' => $Marca
        );
        $this->db->insert('ComerCementoPrecio', $data);
        return 1;
    }

    function getComercializadorID($Comercializador) {
        $where = "ID='" . $Comercializador . "'";
        $this->db->select('*');
        $this->db->from('ComerCemento');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getComerPrecios() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ComerCementoPrecio');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getComerPreciosID($Comercializador) {
        $where = "Comercializador='" . $Comercializador . "'";
        $this->db->select('*');
        $this->db->from('ComerCementoPrecio');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getComerPreciosIDCo($Comercializador) {
        $where = "Comercializador='" . $Comercializador . "'";
        $this->db->select('*');
        $this->db->from('ComerCementoPrecio');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getComerPreciosFecha($Fecha) {
        $where = "Fecha='" . $Fecha . "'";
        $this->db->select('*');
        $this->db->from('ComerCementoPrecio');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

   

    function getMarca() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ComerCementoMarca');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

//***********************************fin cemento
//***********************************Desarrollos
    function getModelosN() {
        $where = "";
        $this->db_Inmuebles->select('*');
        $this->db_Inmuebles->from('ModeloNegocio');
        if ($where != NULL)
            $this->db_Inmuebles->where($where, NULL, FALSE);
        $query = $this->db_Inmuebles->get();
        return $query->result();
    }

    function getModelos($Manzana, $Lote) {
        $where = "Manzana='" . $Manzana . "' AND Lotes='" . $Lote . "' AND Arreglo!=''";
        $this->db_Inmuebles->select('*');
        $this->db_Inmuebles->from('ProyectosViviendas');
        if ($where != NULL)
            $this->db_Inmuebles->where($where, NULL, FALSE);
        $query = $this->db_Inmuebles->get();
        return $query->result();
    }

    function getInmueblesReg() {
        $where = "";
        $this->db_Inmuebles->select('*');
        $this->db_Inmuebles->from('InmuebleRegistro');
        if ($where != NULL)
            $this->db_Inmuebles->where($where, NULL, FALSE);
        $query = $this->db_Inmuebles->get();
        return $query->result();
    }

    function getInmueblesReg2($SuperficieTerreno) {
        $where = "ID='" . $SuperficieTerreno . "'";
        $this->db_Inmuebles->select('*');
        $this->db_Inmuebles->from('InmuebleRegistro');
        if ($where != NULL)
            $this->db_Inmuebles->where($where, NULL, FALSE);
        $query = $this->db_Inmuebles->get();
        return $query->result();
    }

    function getRDesarrollo(
    $Modelo, $Inmuebles, $NDesarrollo, $SegmentoD, $SuperficieT, $SeccionD, $NumeroViviendas, $Finicio, $Ftermino
    ) {
        $data = array(
            'Modelo' => $Modelo,
            'Inmueble' => $Inmuebles,
            'Proyecto' => $NDesarrollo,
            'SegmentoD' => $SegmentoD,
            'SuperficieT' => $SuperficieT,
            'SeccionD' => $SeccionD,
            'NumeroViviendas' => $NumeroViviendas,
            'Finicio' => $Finicio,
            'Ftermino' => $Ftermino
        );
        $this->db->insert('Proyectos', $data);
        return 1;
    }

    function getRDesarrolloAct(
    $ID, $Modelo, $Inmuebles, $NDesarrollo, $SegmentoD, $SuperficieT, $SeccionD, $NumeroViviendas, $Finicio, $Ftermino
    ) {
        $data = array(
            'Modelo' => $Modelo,
            'Inmueble' => $Inmuebles,
            'Proyecto' => $NDesarrollo,
            'SegmentoD' => $SegmentoD,
            'SuperficieT' => $SuperficieT,
            'SeccionD' => $SeccionD,
            'NumeroViviendas' => $NumeroViviendas,
            'Finicio' => $Finicio,
            'Ftermino' => $Ftermino
        );
        $this->db->where('ID', $ID);
        $this->db->update('Proyectos', $data);
        return 1;
    }

    function getSecciones($Proyecto) {
        $where = "ID='" . $Proyecto . "'";
        $this->db->select('*');
        $this->db->from('Proyectos');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getManzanasC($Seccion) {
        $where = "Seccion='" . $Seccion . "'";
        $this->db->select('*');
        $this->db->from('ProyectosSeccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getSeccionXProy($Proyecto) {
        $where = "Desarrollo='" . $Proyecto . "'";
        $this->db->select('*');
        $this->db->from('ProyectosSeccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRSManzana(
    $Desarrollo, $Seccion, $Manzana, $SuperficieH, $SuperficieC, $SuperficieD, $SuperficieV, $Total
    ) {
        $data = array(
            'Desarrollo' => $Desarrollo,
            'Seccion' => $Seccion,
            'Manzana' => $Manzana,
            'SuperficieH' => $SuperficieH,
            'SuperficieC' => $SuperficieC,
            'SuperficieD' => $SuperficieD,
            'SuperficieV' => $SuperficieV,
            'Total' => $Total
        );
        $this->db->insert('ProyectosSeccion', $data);
        return 1;
    }

    function getRSManzanaAct(
    $ID, $Desarrollo, $Seccion, $Manzana, $SuperficieH, $SuperficieC, $SuperficieD, $SuperficieV, $Total
    ) {
        $data = array(
            'Manzana' => $Manzana,
            'SuperficieH' => $SuperficieH,
            'SuperficieC' => $SuperficieC,
            'SuperficieD' => $SuperficieD,
            'SuperficieV' => $SuperficieV,
            'Total' => $Total
        );
        $this->db->where('ID', $ID);
        $this->db->update('ProyectosSeccion', $data);
        return 1;
    }

    function getManzanas($Proyecto) {
        $where = "Desarrollo='" . $Proyecto . "'";
        $this->db->select('*');
        $this->db->from('ProyectosSeccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getManzanasc2($Seccion) {
        $where = "Seccion='" . $Seccion . "'";
        $this->db->select('*');
        $this->db->from('ProyectosSeccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getManzanasc3($Manzana) {
        $where = "Manzana='" . $Manzana . "'";
        $this->db->select('*');
        $this->db->from('ProyectosSeccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getManzanasact($Desarrollo, $Manzana) {
        $where = "Desarrollo='" . $Desarrollo . "' AND Manzana='" . $Manzana . "'";
        $this->db->select('*');
        $this->db->from('ProyectosSeccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRManzana(
    $Desarrollo, $Manzana, $NLotes, $LotesHr, $NLotesHr, $LotesHi, $NLotesHi, $LotesC, $NLotesC, $Total
    ) {
        $data = array(
            'Proyecto' => $Desarrollo,
            'Manzana' => $Manzana,
            'NLotes' => $NLotes,
            'LotesHr' => $LotesHr,
            'NLotesHr' => $NLotesHr,
            'LotesHi' => $LotesHi,
            'NLotesHi' => $NLotesHi,
            'LotesC' => $LotesC,
            'NLotesC' => $NLotesC,
            'Total' => $Total
        );
        $this->db->insert('ProyectosManzanas', $data);
        return 1;
    }

    function getRManzanaAct(
    $ID, $Desarrollo, $Manzana, $NLotes, $LotesHr, $NLotesHr, $LotesHi, $NLotesHi, $LotesC, $NLotesC, $Total
    ) {
        $data = array(
            'NLotes' => $NLotes,
            'LotesHr' => $LotesHr,
            'NLotesHr' => $NLotesHr,
            'LotesHi' => $LotesHi,
            'NLotesHi' => $NLotesHi,
            'LotesC' => $LotesC,
            'NLotesC' => $NLotesC,
            'Total' => $Total
        );
        $this->db->where('ID', $ID);
        $this->db->update('ProyectosManzanas', $data);
        return 1;
    }

    function getManzanas2($Proyecto) {
        $where = "Proyecto='" . $Proyecto . "'";
        $this->db->select('*');
        $this->db->from('ProyectosManzanas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getLotes($Proyecto, $Manzana) {
        $where = "Proyecto='" . $Proyecto . "' AND Manzana='" . $Manzana . "'";
        $this->db->select('*');
        $this->db->from('ProyectosManzanas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getUsoAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ProyectosUso');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTramitesRAll() {
        $where = "";
        $this->db->select('*');
        $this->db->from('TramitesConstruccion');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getRViviendas2(
    $Desarrollo, $Manzana, $TLotes, $Lotes, $NViviendas, $NumViviendas, $SuperficieHV, $Uso, $Indicador, $Arreglo, $Color, $Modelo, $Prototipo
    ) {
        $data = array(
            'Desarrollo' => $Desarrollo,
            'Manzana' => $Manzana,
            'TLotes' => $TLotes,
            'Lotes' => $Lotes,
            'NViviendas' => $NViviendas,
            'NumViviendas' => $NumViviendas,
            'SuperficieHV' => $SuperficieHV,
            'Uso' => $Uso,
            'Indicador' => $Indicador,
            'Arreglo' => $Arreglo,
            'Color' => $Color,
            'Modelo' => $Modelo,
            'Prototipo' => $Prototipo
        );
        $this->db->insert('ProyectosViviendas', $data);
        return 1;
    }

    function getRViviendas2Act(
    $ID, $Desarrollo, $Manzana, $TLotes, $Lotes, $NViviendas, $NumViviendas, $SuperficieHV, $Uso, $Indicador, $Arreglo, $Color
    ) {
        $data = array(
            'NViviendas' => $NViviendas,
            'NumViviendas' => $NumViviendas,
            'SuperficieHV' => $SuperficieHV,
            'Uso' => $Uso
        );
        $this->db->where('Desarrollo', $Desarrollo);
        $this->db->where('Manzana', $Manzana);
        $this->db->where('TLotes', $TLotes);
        $this->db->where('Lotes', $Lotes);
        $this->db->update('ProyectosViviendas', $data);
        return 1;
    }

    function getActuViviendas_Modelos(
    $ID, $Arreglo, $Color
    ) {
        $data = array(
            'Arreglo' => $Arreglo,
            'Color' => $Color
        );
        $this->db->where('Id', $ID);
        $this->db->update('ProyectosViviendas', $data);
        return 1;
    }

    function getXtipoLotes($Desarrollo, $Manzana, $TLotes, $Lotes) {
        $where = "Desarrollo='" . $Desarrollo . "' AND Manzana='" . $Manzana . "' AND TLotes='" . $TLotes . "' AND Lotes='" . $Lotes . "'";
        $this->db->select('*');
        $this->db->from('ProyectosViviendas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getManzanasFidei($Desarrollo) {
        $where = "Desarrollo='" . $Desarrollo . "'";
        $this->db->select('*');
        $this->db->from('ProyectosViviendas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getLotesFidei($Desarrollo) {
        $where = "Desarrollo='" . $Desarrollo . "'";
        $this->db->select('*');
        $this->db->from('ProyectosViviendas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getLotesFideiM($Desarrollo, $Manzana) {
        $where = "Desarrollo='" . $Desarrollo . "' AND Manzana='" . $Manzana . "'";
        $this->db->select('*');
        $this->db->from('ProyectosViviendas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getLotesFidei2($Desarrollo, $Lotes, $Manzana) {
        $where = "Desarrollo='" . $Desarrollo . "' AND Manzana='" . $Manzana . "' AND Lotes='" . $Lotes . "'";
        $this->db->select('*');
        $this->db->from('ProyectosViviendas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getComerc_5(
    $NFideicomiso, $FechaEntrega, $FechaNot, $Notificador, $RecibeNot, $Manzana, $Lotes, $Viviendas, $Adquirente, $Genero, $Telefono, $C1, $M1, $C2, $M2, $C3, $M3, $C4, $M4, $C5, $M5, $C6, $M6, $C7, $M7, $C8, $M8, $C9, $M9, $C10, $M10, $PrecioBase, $MontoDescuento, $CostoAdic, $PrecioTotal, $PrecioContrato, $FormaTrans, $MontoAnt, $OtrosAbonos, $Cofinanciado, $CreditoA, $InstitucionA, $CreditoB, $InstitucionB, $Importe, $Diferencia, $PrecioVentaN, $PrecioVentaE, $PagoTerreno, $PagoRendimientos, $TotalIng, $FirmaNP, $FechaFirmaNP, $NPub, $NumNP, $Adscripcion, $NumeralR, $Observaciones
    ) {
        $data = array(
            'NFideicomiso' => $NFideicomiso,
            'FechaEntrega' => $FechaEntrega,
            'FechaNot' => $FechaNot,
            'Notificador' => $Notificador,
            'RecibeNot' => $RecibeNot,
            'Manzana' => $Manzana,
            'Lotes' => $Lotes,
            'Viviendas' => $Viviendas,
            'Adquirente' => $Adquirente,
            'Genero' => $Genero,
            'Telefono' => $Telefono,
            'C1' => $C1,
            'M1' => $M1,
            'C2' => $C2,
            'M2' => $M2,
            'C3' => $C3,
            'M3' => $M3,
            'C4' => $C4,
            'M4' => $M4,
            'C5' => $C5,
            'M5' => $M5,
            'C6' => $C6,
            'M6' => $M6,
            'C7' => $C7,
            'M7' => $M7,
            'C8' => $C8,
            'M8' => $M8,
            'C9' => $C9,
            'M9' => $M9,
            'C10' => $C10,
            'M10' => $M10,
            'PrecioBase' => $PrecioBase,
            'MontoDescuento' => $MontoDescuento,
            'CostoAdic' => $CostoAdic,
            'PrecioTotal' => $PrecioTotal,
            'PrecioContrato' => $PrecioContrato,
            'FormaTrans' => $FormaTrans,
            'MontoAnt' => $MontoAnt,
            'OtrosAbonos' => $OtrosAbonos,
            'Cofinanciado' => $Cofinanciado,
            'CreditoA' => $CreditoA,
            'InstitucionA' => $InstitucionA,
            'CreditoB' => $CreditoB,
            'InstitucionB' => $InstitucionB,
            'Importe' => $Importe,
            'Diferencia' => $Diferencia,
            'PrecioVentaN' => $PrecioVentaN,
            'PrecioVentaE' => $PrecioVentaE,
            'PagoTerreno' => $PagoTerreno,
            'PagoRendimientos' => $PagoRendimientos,
            'TotalIng' => $TotalIng,
            'FirmaNP' => $FirmaNP,
            'FechaFirmaNP' => $FechaFirmaNP,
            'NPub' => $NPub,
            'NumNP' => $NumNP,
            'Adscripcion' => $Adscripcion,
            'NumeralR' => $NumeralR,
            'Observaciones' => $Observaciones
        );
        $this->db->insert('Transmision', $data);
        return 1;
    }

    function getComerc_5_2(
    $Cancelacion, $IDv, $NFideicomiso, $FechaEntrega, $FechaNot, $Notificador, $RecibeNot, $Manzana, $Lotes, $Viviendas, $Adquirente, $Genero, $Telefono, $C1, $M1, $C2, $M2, $C3, $M3, $C4, $M4, $C5, $M5, $C6, $M6, $C7, $M7, $C8, $M8, $C9, $M9, $C10, $M10, $PrecioBase, $MontoDescuento, $CostoAdic, $PrecioTotal, $PrecioContrato, $FormaTrans, $MontoAnt, $OtrosAbonos, $Cofinanciado, $CreditoA, $InstitucionA, $CreditoB, $InstitucionB, $Importe, $Diferencia, $PrecioVentaN, $PrecioVentaE, $PagoTerreno, $PagoRendimientos, $TotalIng, $FirmaNP, $FechaFirmaNP, $NPub, $NumNP, $Adscripcion, $NumeralR, $Observaciones
    ) {
        if ($Cancelacion == '1') {
            $data = array(
                'NFideicomiso' => $NFideicomiso,
                'FechaEntrega' => $FechaEntrega,
                'FechaNot' => $FechaNot,
                'Notificador' => $Notificador,
                'RecibeNot' => $RecibeNot,
                'Manzana' => $Manzana,
                'Lotes' => $Lotes,
                'Viviendas' => $Viviendas,
                'Adquirente' => $Adquirente,
                'Genero' => $Genero,
                'Telefono' => $Telefono,
                'C1' => $C1,
                'M1' => $M1,
                'C2' => $C2,
                'M2' => $M2,
                'C3' => $C3,
                'M3' => $M3,
                'C4' => $C4,
                'M4' => $M4,
                'C5' => $C5,
                'M5' => $M5,
                'C6' => $C6,
                'M6' => $M6,
                'C7' => $C7,
                'M7' => $M7,
                'C8' => $C8,
                'M8' => $M8,
                'C9' => $C9,
                'M9' => $M9,
                'C10' => $C10,
                'M10' => $M10,
                'PrecioBase' => $PrecioBase,
                'MontoDescuento' => $MontoDescuento,
                'CostoAdic' => $CostoAdic,
                'PrecioTotal' => $PrecioTotal,
                'PrecioContrato' => $PrecioContrato,
                'FormaTrans' => $FormaTrans,
                'MontoAnt' => $MontoAnt,
                'OtrosAbonos' => $OtrosAbonos,
                'Cofinanciado' => $Cofinanciado,
                'CreditoA' => $CreditoA,
                'InstitucionA' => $InstitucionA,
                'CreditoB' => $CreditoB,
                'InstitucionB' => $InstitucionB,
                'Importe' => $Importe,
                'Diferencia' => $Diferencia,
                'PrecioVentaN' => $PrecioVentaN,
                'PrecioVentaE' => $PrecioVentaE,
                'PagoTerreno' => $PagoTerreno,
                'PagoRendimientos' => $PagoRendimientos,
                'TotalIng' => $TotalIng,
                'FirmaNP' => $FirmaNP,
                'FechaFirmaNP' => $FechaFirmaNP,
                'NPub' => $NPub,
                'NumNP' => $NumNP,
                'Adscripcion' => $Adscripcion,
                'NumeralR' => $NumeralR,
                'Observaciones' => $Observaciones,
                'Cancelacion' => "Cancelado"
            );
        } else {
            $data = array(
                'NFideicomiso' => $NFideicomiso,
                'FechaEntrega' => $FechaEntrega,
                'FechaNot' => $FechaNot,
                'Notificador' => $Notificador,
                'RecibeNot' => $RecibeNot,
                'Manzana' => $Manzana,
                'Lotes' => $Lotes,
                'Viviendas' => $Viviendas,
                'Adquirente' => $Adquirente,
                'Genero' => $Genero,
                'Telefono' => $Telefono,
                'C1' => $C1,
                'M1' => $M1,
                'C2' => $C2,
                'M2' => $M2,
                'C3' => $C3,
                'M3' => $M3,
                'C4' => $C4,
                'M4' => $M4,
                'C5' => $C5,
                'M5' => $M5,
                'C6' => $C6,
                'M6' => $M6,
                'C7' => $C7,
                'M7' => $M7,
                'C8' => $C8,
                'M8' => $M8,
                'C9' => $C9,
                'M9' => $M9,
                'C10' => $C10,
                'M10' => $M10,
                'PrecioBase' => $PrecioBase,
                'MontoDescuento' => $MontoDescuento,
                'CostoAdic' => $CostoAdic,
                'PrecioTotal' => $PrecioTotal,
                'PrecioContrato' => $PrecioContrato,
                'FormaTrans' => $FormaTrans,
                'MontoAnt' => $MontoAnt,
                'OtrosAbonos' => $OtrosAbonos,
                'Cofinanciado' => $Cofinanciado,
                'CreditoA' => $CreditoA,
                'InstitucionA' => $InstitucionA,
                'CreditoB' => $CreditoB,
                'InstitucionB' => $InstitucionB,
                'Importe' => $Importe,
                'Diferencia' => $Diferencia,
                'PrecioVentaN' => $PrecioVentaN,
                'PrecioVentaE' => $PrecioVentaE,
                'PagoTerreno' => $PagoTerreno,
                'PagoRendimientos' => $PagoRendimientos,
                'TotalIng' => $TotalIng,
                'FirmaNP' => $FirmaNP,
                'FechaFirmaNP' => $FechaFirmaNP,
                'NPub' => $NPub,
                'NumNP' => $NumNP,
                'Adscripcion' => $Adscripcion,
                'NumeralR' => $NumeralR,
                'Observaciones' => $Observaciones
            );
        }
        $this->db->where('ID', $IDv);
        $this->db->update('Transmision', $data);
        return 1;
    }

    function getComerc_7(
    $Ndesarrollo, $Manzana, $Lotes, $Viviendas, $FechaNotDis, $FechaNotRabina, $NombreNotif, $NombreNotifRabina, $MontoFideicomiso, $Montofideicomitente, $MontofideicomitenteRabina, $FechaDispersion, $CantidadDispersada, $CuentaDispersion, $ReferenciaTran
    ) {
        $data = array(
            'NFideicomiso' => $Ndesarrollo,
            'Manzana' => $Manzana,
            'Lotes' => $Lotes,
            'Viviendas' => $Viviendas,
            'FechaNotDis' => $FechaNotDis,
            'FechaNotRabina' => $FechaNotRabina,
            'NombreNotif' => $NombreNotif,
            'NombreNotifRabina' => $NombreNotifRabina,
            'MontoFideicomiso' => $MontoFideicomiso,
            'Montofideicomitente' => $Montofideicomitente,
            'MontofideicomitenteRabina' => $MontofideicomitenteRabina,
            'FechaDispersion' => $FechaDispersion,
            'CantidadDispersada' => $CantidadDispersada,
            'CuentaDispersion' => $CuentaDispersion,
            'ReferenciaTran' => $ReferenciaTran
        );
        $this->db->insert('Dispersion', $data);
        return 1;
    }

    function getTransmisionesall() {
        $where = "";
        $this->db->select('*');
        $this->db->from('Transmision');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisionesMayor($Ndesarrollo) {
        $where = "NFideicomiso='" . $Ndesarrollo . "' AND Cancelacion!='Cancelado'";
        $this->db->select_max('Disp_Numero');
        $this->db->from('Transmision');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisiones($Ndesarrollo) {
        $where = "NFideicomiso='" . $Ndesarrollo . "' AND Cancelacion!='Cancelado'";
        $this->db->select('*');
        $this->db->from('Transmision');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisionesMonto($Ndesarrollo) {
        $where = "NFideicomiso='" . $Ndesarrollo . "' AND Cancelacion!='Cancelado'";
        $this->db->select('SUM(TotalIng) Transmisiones');
        $this->db->from('Transmision');
        if ($where != NULL) {
            $this->db->where($where, NULL, FALSE);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getCompraVentasND($Ndesarrollo) {
        $where = "Proyectos='" . $Ndesarrollo . "'";
        $this->db->select('*');
        $this->db->from('Clientes');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisionesXVivi($Ndesarrollo, $Lotes, $Manzana, $Viviendas) {
        $where = "NFideicomiso='" . $Ndesarrollo . "' AND Manzana='" . $Manzana . "' and Lotes='" . $Lotes . "' and Viviendas='" . $Viviendas . "'";
        $this->db->select('*');
        $this->db->from('Transmision');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisionesXViviDisp($Ndisp) {
        $where = "Disp_Numero='" . $Ndisp . "'";
        $this->db->select('*');
        $this->db->from('Transmision');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisionesXViviTotal(
    $ID, $IDES
    ) {
        $data = array(
            'Disp_TotalIng' => $IDES
        );
        $this->db->where('ID', $ID);
        $this->db->update('Transmision', $data);
        return 1;
    }

    function getTransmisionesXLotes($Ndesarrollo, $Lotes, $Manzana) {
        $where = "NFideicomiso='" . $Ndesarrollo . "' AND Manzana='" . $Manzana . "' and Lotes='" . $Lotes . "'";
        $this->db->select('*');
        $this->db->from('Transmision');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getTransmisionesXViviEsp($Ndesarrollo, $Lotes, $Manzana, $Viviendas) {
        $where = "NFideicomiso='" . $Ndesarrollo . "' AND Manzana='" . $Manzana . "' and Lotes='" . $Lotes . "' and Viviendas='" . $Viviendas . "'";
        $this->db->select('*');
        $this->db->from('Transmision');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getenvcorreoAsignar(
    $TramiteFolio, $indiceuser, $Responsable, $Observaciones
    ) {

        $base = base_url();
        $this->db->select('*');
        $this->db->where('Id', $indiceuser);
        $query = $this->db->get('usuarios');
        $Destinatario = $query->result_array();

        $this->db->select('*');
        $this->db->where('Id', $Responsable);
        $query = $this->db->get('usuarios');
        $Remitente = $query->result_array();

        $email_to = $Destinatario[0]['email'];
        $email_from = $Remitente[0]['email'];
        $email_bcc = "isabel@matecsoluciones.mx";
        $email_subject = "Notificacion de tramite asignado";
        $email_message = '<html><body>';
        $email_message .= "DISTINGUIDO Y ESTIMADO:";
        $email_message .= "</br>";
        $email_message .= "<strong>" . $Destinatario[0]['nombre'] . "</strong>";
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= "Se le ha asignado el siguiente n&uacutemero de tr&aacutemite:\n" . $TramiteFolio;
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= "<strong>Observaciones: </strong>";
        $email_message .= $Observaciones;
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= "Sin m&aacutes por el momento quedo a sus &oacuterdenes esperando pueda atenderlo en plataforma pronto.\n";
        $email_message .= "</br>";
        $email_message .= "</br>";
        $email_message .= "ATENTAMENTE";
        $email_message .= "</br>";
        $email_message .= "IBARRA ROCHA Y ORTEGA S.C.";
        $email_message .= "</br>";
        $email_message .= "<img src='" . $base . "/media/logo.png' />";
        $email_message .= "</br>";
        $email_message .= "<small>Esta informaci&oacuten es privada y confidencial y est&aacute dirigida exclusivamente a su destinatario. Si usted no es el destinatario original de este mensaje y ha logrado acceder a dicha informaci&oacuten, por favor elimine el mensaje.</small>";
        $email_message .= "<small>&copy IBARRA ROCHA Y ORTEGA S.C. 2015</small>";
        $email_message .= "</body></html>";

        $headers = 'From: ' . $email_from . "\r\n" . 'Reply-To: ' . $email_from . "\r\n" . 'Bcc: ' . $email_bcc . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        @mail($email_to, $email_subject, $email_message, $headers);
        return 1;
    }

//***********************************Desarrollos  
//************************************planeacion
    function getOrdenesSolicitadasALL() {
        $where = "";
        $this->db->select('*');
        $this->db->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getOrdenesSolicitadasID($ID) {
        $where = "ID='" . $ID . "'";
        $this->db->select('*');
        $this->db->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getInfOrden($idorden) {
        $where = "Proyecto='" . $idorden . "' AND Aprobada!='Sí'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfOrden2($idorden) {
        $where = "Proyecto='" . $idorden . "' AND Aprobada='Sí'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfOrdenB($idorden) {
        $where = "Proyecto='" . $idorden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfOrdenBT($idorden) {
        $where = "Proyecto='" . $idorden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenCompra');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfOrdenID($Orden) {
        $where = "ID='" . $Orden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfOrdenID2($Orden) {
        $where = "ID='" . $Orden . "' AND Aprobada='Sí'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfOrdenALL() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperacionTelido() {
        $where = "Proceso='Tejido'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperacionLavado() {
        $where = "Proceso='Lavado'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperacionCostura() {
        $where = "Proceso='Costura'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperacionEmpaque() {
        $where = "Proceso='Empaque'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperacionEntrega() {
        $where = "Proceso='Entrega'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getPrendasAll() {
        $where = "";
        $this->db_Materiales->select('*');
        $this->db_Materiales->from('Planeacion_Prendas');
        if ($where != NULL)
            $this->db_Materiales->where($where, NULL, FALSE);
        $query = $this->db_Materiales->get();
        return $query->result();
    }

    function getMLienzoAll() {
        $where = "";
        $this->db_Materiales->select('*');
        $this->db_Materiales->from('Planeacion_MLienzo');
        if ($where != NULL)
            $this->db_Materiales->where($where, NULL, FALSE);
        $query = $this->db_Materiales->get();
        return $query->result();
    }

    function geProductosAll() {
        $where = "";
        $this->db_Materiales->select('*');
        $this->db_Materiales->from('Productos');
        if ($where != NULL)
            $this->db_Materiales->where($where, NULL, FALSE);
        $this->db->order_by('Producto', 'ASC');
        $query = $this->db_Materiales->get();
        return $query->result();
    }

    function getEquipoAll() {
        $where = "TMobiliario='3'";
        $this->db_Materiales->select('*');
        $this->db_Materiales->from('Muebles');
        if ($where != NULL)
            $this->db_Materiales->where($where, NULL, FALSE);
        $query = $this->db_Materiales->get();
        return $query->result();
    }

    function getFaseAll() {
        $where = "";
        $this->db_Materiales->select('*');
        $this->db_Materiales->from('Fase');
        if ($where != NULL)
            $this->db_Materiales->where($where, NULL, FALSE);
        $query = $this->db_Materiales->get();
        return $query->result();
    }

    function getPlaneacion2_1(
    $Orden, $Color, $Formula, $PesoT, $CantidadCarga, $Fibrologia, $TipoNylon, $TipoElastano, $TipoLicra, $OtrosHilos, $Observaciones
    ) {
        $data = array(
            'Color' => $Color,
            'Formula' => $Formula,
            'PesoT' => $PesoT,
            'CantidadCarga' => $CantidadCarga,
            'Fibrologia' => $Fibrologia,
            'TipoNylon' => $TipoNylon,
            'TipoElastano' => $TipoElastano,
            'TipoLicra' => $TipoLicra,
            'OtrosHilos' => $OtrosHilos,
            'Observaciones' => $Observaciones
        );
        $this->db->where('ID', $Orden);
        $this->db->update('OrdenesSolicitadas', $data);
        return 1;
    }

    function getPlaneacion2_2(
    $Proyecto, $Orden, $Prendas, $Medida1, $Medida2, $Medida3, $Medida4, $Medida5
    ) {
        $data = array(
            'Proyecto' => $Proyecto,
            'Orden' => $Orden,
            'Prenda' => $Prendas,
            'Medida1' => $Medida1,
            'Medida2' => $Medida2,
            'Medida3' => $Medida3,
            'Medida4' => $Medida4,
            'Medida5' => $Medida5
        );
        $this->db->insert('OrdenesSolicitadasMedidas', $data);
        return 1;
    }

    function getPlaneacion2_3(
    $Orden, $Proyecto, $Producto, $Cantidad, $Unidad
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Producto' => $Producto,
            'Cantidad' => $Cantidad,
            'Unidad' => $Unidad
        );
        $this->db->insert('OrdenesSolicitadasMaterial', $data);
        return 1;
    }

    function getPlaneacion2_4(
    $Orden, $Npatron, $NamePatron, $Autor, $Fecha, $Numero
    ) {
        $data = array(
            'Npatron' => $Npatron,
            'NamePatron' => $NamePatron,
            'Autor' => $Autor,
            'Fecha' => $Fecha,
            'Archivo' => $Numero
        );
        $this->db->where('ID', $Orden);
        $this->db->update('OrdenesSolicitadas', $data);
        return 1;
    }

    function getPlaneacion2_5(
    $Proyecto, $Orden, $Lienzo, $Medidas
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Lienzo' => $Lienzo,
            'Medidas' => $Medidas
        );
        $this->db->insert('OrdenesSolicitadasLienzo', $data);
        return 1;
    }

    function getPlaneacion3_1(
    $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Operacion' => $Operacion,
            'Duracion' => $Duracion,
            'Margen' => $Margen,
            'UnitxHr' => $UnitxHr,
            'UnitxDay' => $UnitxDay,
            'Equipo' => $Equipo,
            'EquipoUnit' => $EquipoUnit,
            'EquipoTime' => $EquipoTime,
            'Material' => $Material,
            'CantMat' => $CantMat,
            'Registra' => $Registra,
            'Observaciones' => $Observaciones,
            'Proceso' => 'Tejido'
        );
        $this->db->insert('OrdenOperaciones', $data);
        return 1;
    }

    function getPlaneacion3_2(
    $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Operacion' => $Operacion,
            'Duracion' => $Duracion,
            'Margen' => $Margen,
            'UnitxHr' => $UnitxHr,
            'UnitxDay' => $UnitxDay,
            'Equipo' => $Equipo,
            'EquipoUnit' => $EquipoUnit,
            'EquipoTime' => $EquipoTime,
            'Material' => $Material,
            'CantMat' => $CantMat,
            'Registra' => $Registra,
            'Observaciones' => $Observaciones,
            'Proceso' => 'Lavado'
        );
        $this->db->insert('OrdenOperaciones', $data);
        return 1;
    }

    function getPlaneacion3_3(
    $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Operacion' => $Operacion,
            'Duracion' => $Duracion,
            'Margen' => $Margen,
            'UnitxHr' => $UnitxHr,
            'UnitxDay' => $UnitxDay,
            'Equipo' => $Equipo,
            'EquipoUnit' => $EquipoUnit,
            'EquipoTime' => $EquipoTime,
            'Material' => $Material,
            'CantMat' => $CantMat,
            'Registra' => $Registra,
            'Observaciones' => $Observaciones,
            'Proceso' => 'Costura'
        );
        $this->db->insert('OrdenOperaciones', $data);
        return 1;
    }

    function getPlaneacion3_4(
    $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Operacion' => $Operacion,
            'Duracion' => $Duracion,
            'Margen' => $Margen,
            'UnitxHr' => $UnitxHr,
            'UnitxDay' => $UnitxDay,
            'Equipo' => $Equipo,
            'EquipoUnit' => $EquipoUnit,
            'EquipoTime' => $EquipoTime,
            'Material' => $Material,
            'CantMat' => $CantMat,
            'Registra' => $Registra,
            'Observaciones' => $Observaciones,
            'Proceso' => 'Empaque'
        );
        $this->db->insert('OrdenOperaciones', $data);
        return 1;
    }

    function getPlaneacion3_5(
    $Orden, $Proyecto, $Operacion, $Duracion, $Margen, $UnitxHr, $UnitxDay, $Equipo, $EquipoUnit, $EquipoTime, $Material, $CantMat, $Registra, $Observaciones
    ) {
        $data = array(
            'Orden' => $Orden,
            'Proyecto' => $Proyecto,
            'Operacion' => $Operacion,
            'Duracion' => $Duracion,
            'Margen' => $Margen,
            'UnitxHr' => $UnitxHr,
            'UnitxDay' => $UnitxDay,
            'Equipo' => $Equipo,
            'EquipoUnit' => $EquipoUnit,
            'EquipoTime' => $EquipoTime,
            'Material' => $Material,
            'CantMat' => $CantMat,
            'Registra' => $Registra,
            'Observaciones' => $Observaciones,
            'Proceso' => 'Entrega'
        );
        $this->db->insert('OrdenOperaciones', $data);
        return 1;
    }

    function getPlaneacion4(
    $Ninventario, $Fecha, $Nalmacen, $Denominacion
    ) {
        $data = array(
            'Ninventario' => $Ninventario,
            'Fecha' => $Fecha,
            'Nalmacen' => $Nalmacen,
            'Denominacion' => $Denominacion
        );
        $this->db->insert('OrdenInventario', $data);
        return 1;
    }

    function getComercializacion_1(
    $Proyecto, $Folio, $OrdenC, $UnidadesXS, $PUXS, $PTXS, $myFieldXS, $UnidadesS, $PUS, $PTS, $myFieldM, $UnidadesM, $PUM, $PTM, $myFieldM, $UnidadesL, $PUL, $PTL, $myFieldL, $UnidadesXL, $PUXL, $PTXL, $myFieldXL, $Modalidad, $Forma, $Solicita, $Puesto, $Registra
    ) {
        $data = array(
            'Proyecto' => $Proyecto,
            'Folio' => $Folio,
            'OrdenC' => $OrdenC,
            'UnidadesXS' => $UnidadesXS,
            'PUXS' => $PUXS,
            'PTXS' => $PTXS,
            'myFieldXS' => $myFieldXS,
            'UnidadesS' => $UnidadesS,
            'PUS' => $PUS,
            'PTS' => $PTS,
            'myFieldM' => $myFieldM,
            'UnidadesM' => $UnidadesM,
            'PUM' => $PUM,
            'PTM' => $PTM,
            'myFieldM' => $myFieldM,
            'UnidadesL' => $UnidadesL,
            'PUL' => $PUL,
            'PTL' => $PTL,
            'myFieldL' => $myFieldL,
            'UnidadesXL' => $UnidadesXL,
            'PUXL' => $PUXL,
            'PTXL' => $PTXL,
            'myFieldXL' => $myFieldXL,
            'Modalidad' => $Modalidad,
            'Forma' => $Forma,
            'Solicita' => $Solicita,
            'Puesto' => $Puesto,
            'Registra' => $Registra
        );
        $this->db->insert('OrdenCompra', $data);
        return 1;
    }

    function getGrupo() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrGrupo');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getGenero() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrGenero');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getPosicion() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrPosicion');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getPoblacion() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrPoblacion');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getUso() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrUso');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getTemporada() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrTemporada');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getInfoRegis($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND ID='" . $Orden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getPrendasMedidas($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadasMedidas');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getLienzoMedidas($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenesSolicitadasLienzo');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getMaterialUsar($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND CantMat!=''";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getTejidoAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND Proceso='Tejido'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperTejido() {
        $where = "Proceso='Tejido'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getLavadoAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND Proceso='Lavado'";
        ;
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperLavado() {
        $where = "Proceso='Lavado'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getCosturaAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND Proceso='Costura'";
        ;
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperCostura() {
        $where = "Proceso='Costura'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getEmpaqueAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND Proceso='Empaque'";
        ;
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperEmpaque() {
        $where = "Proceso='Empaque'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getEntregaAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND Proceso='Entrega'";
        ;
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getOperEntrega() {
        $where = "Proceso='Entrega'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperacionesActividades');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getEquipoUsadoAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "' AND Equipo!=''";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getActividadesAll($Proyecto, $Orden) {
        $where = "Proyecto='" . $Proyecto . "' AND Orden='" . $Orden . "'";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('OrdenOperaciones');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getAprobarDesign(
    $Orden, $Motivo, $Aprobar, $indiceuser
    ) {
        $data = array(
            'Motivo' => $Motivo,
            'Aprobada' => $Aprobar,
            'Aprobo' => $indiceuser
        );
        $this->db->where('ID', $Orden);
        $this->db->update('OrdenesSolicitadas', $data);
        return 1;
    }

    function getTipoP() {
        $where = "";
        $this->db_idcliente->select('*');
        $this->db_idcliente->from('Proyecto_tipo');
        if ($where != NULL)
            $this->db_idcliente->where($where, NULL, FALSE);
        $query = $this->db_idcliente->get();
        return $query->result();
    }

    function getModalidadPro() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ProyectoModalidad');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getFormaPagoPro() {
        $where = "";
        $this->db->select('*');
        $this->db->from('ProyectoFormaP');
        if ($where != NULL)
            $this->db->where($where, NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    function getComerc_7_Disp(
    $ID, $Disp_PrecioVentaE, $Disp_PagoTerreno, $Disp_PagoRendimientos, $Disp_TotalIng, $Ndisp, $FechaNotDis, $FechaNotRabina, $NombreNotif, $NombreNotifRabina, $MontoFideicomiso, $Montofideicomitente, $MontofideicomitenteRabina, $FechaDispersion, $CantidadDispersada, $CuentaDispersion, $ReferenciaTran, $Total
    ) {
        $data = array(
            'Disp_PrecioVentaE' => $Disp_PrecioVentaE,
            'Disp_PagoTerreno' => $Disp_PagoTerreno,
            'Disp_PagoRendimientos' => $Disp_PagoRendimientos,
            'Disp_TotalIng' => $Disp_TotalIng,
            'Disp_Numero' => $Ndisp,
            'FechaNotDis' => $FechaNotDis,
            'FechaNotRabina' => $FechaNotRabina,
            'NombreNotif' => $NombreNotif,
            'NombreNotifRabina' => $NombreNotifRabina,
            'MontoFideicomiso' => $MontoFideicomiso,
            'Montofideicomitente' => $Montofideicomitente,
            'MontofideicomitenteRabina' => $MontofideicomitenteRabina,
            'FechaDispersion' => $FechaDispersion,
            'CantidadDispersada' => $CantidadDispersada,
            'CuentaDispersion' => $CuentaDispersion,
            'ReferenciaTran' => $ReferenciaTran,
            'Total' => $Total
        );
        $this->db->where('ID', $ID);
        $this->db->update('Transmision', $data);
        return 1;
    }

    function getDispN(
    $ID, $Ndisp
    ) {
        $data = array(
            'Disp_Numero' => $Ndisp
        );
        $this->db->where('ID', $ID);
        $this->db->update('Transmision', $data);
        return 1;
    }

}
