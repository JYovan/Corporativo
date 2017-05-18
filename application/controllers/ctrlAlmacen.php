<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */

class ctrlAlmacen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->model("almacen_model");
        $this->load->model("resource_model");
        $almacen_models = $this->almacen_model;
        require_once APPPATH . "/third_party/fpdf17/fpdf.php";
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
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vAlmacen');
            $this->load->view('layout/base/lytBaseFoot');
        } else {
            $this->load->view('layout/base/lytBaseHead');
            $this->load->view('vLogin');
        }
    }

    public function getRecords() {
        try {
            $data = $this->almacen_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacenAsignados() {
        try {
            $data = $this->almacen_model->getProductosXAlmacenAsignados();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistencias() {
        try {
            $data = $this->almacen_model->getExistencias();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradas() {
        try {
            $data = $this->almacen_model->getEntradas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradasXProyectoXAlmacenXProveedorXProducto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getEntradasXProyectoXAlmacenXProveedorXProducto($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSalidas() {
        try {
            $data = $this->almacen_model->getSalidas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSalidasXProyectoXAlmacenXProveedorXProducto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getSalidasXProyectoXAlmacenXProveedorXProducto($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMovimientos() {
        try {
            $data = $this->almacen_model->getMovimientos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecordByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getRecordByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPerdidasXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getPerdidasXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDevolucionXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getDevolucionXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSalidaXID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getSalidaXID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistenciasPorAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getExistenciasPorAlmacen($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectos() {
        try {
            $data = $this->almacen_model->getProyectos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedores() {
        try {
            $data = $this->almacen_model->getProveedores();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedoresExistentes() {
        try {
            $data = $this->almacen_model->getProveedoresExistentes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenes() {
        try {
            $data = $this->almacen_model->getAlmacenes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenesConDevolucion() {
        try {
            $data = $this->almacen_model->getAlmacenesConDevolucion();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenesConProductos() {
        try {
            $data = $this->almacen_model->getAlmacenesConProductos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenesConProductosAsignados() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getAlmacenesConProductosAsignados($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductos() {
        try {
            $data = $this->almacen_model->getProductos();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosNoAsignados() {
        try {
            $data = $this->almacen_model->getProductosSinAsignar();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosSinAsignarXAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductosSinAsignarXAlmacen($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosAsignadosXAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductosAsignadosXAlmacen($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosAsignadosXAlmacenXProveedor() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductosAsignadosXAlmacenXProveedor($ID, $PRO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResponsables() {
        try {
            $data = $this->almacen_model->getResponsables();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPaises() {
        try {
            $data = $this->almacen_model->getPaises();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEstadosXPais() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getEstadosXPais($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMunicipiosXEstado() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getMunicipiosXEstado($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAdd() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Nombre' => strtoupper($Nombre),
                'Proyecto' => $Proyecto,
                'Pais' => $Pais,
                'Estado' => $Estado,
                'Municipio' => $Municipio,
                'Colonia' => $Colonia,
                'Calle' => $Calle,
                'Numero' => $Numero,
                'Responsable' => $Responsable,
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d-m-Y h:i:s a')));
            $this->resource_model->onAction('Almacen', $data, 'save', 0);
            print 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onUpdate() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array();
            if (isset($Nombre) && $Nombre !== '') {
                $data['Nombre'] = strtoupper($Nombre);
            }
            if (isset($Proyecto) && $Proyecto !== '') {
                $data['Proyecto'] = $Proyecto;
            }
            if (isset($PaisU) && $PaisU !== '') {
                $data['Pais'] = $PaisU;
            }
            if (isset($EstadoU) && $EstadoU !== '') {
                $data['Estado'] = $EstadoU;
            }
            if (isset($MunicipioU) && $MunicipioU !== '') {
                $data['Municipio'] = $MunicipioU;
            }
            if (isset($Colonia) && $Colonia !== '') {
                $data['Colonia'] = $Colonia;
            }
            if (isset($Calle) && $Calle !== '') {
                $data['Calle'] = $Calle;
            }
            if (isset($Numero) && $Numero !== '') {
                $data['Numero'] = $Numero;
            }
            if (isset($Responsable) && $Responsable !== '') {
                $data['Responsable'] = $Responsable;
            }
            $this->resource_model->onAction('Almacen', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddProductosXAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $D = json_decode($DETALLE, true);
            /* DETALLE */
            if (isset($DETALLE)) {
                for ($index = 0; $index < count($D); $index++) {
                    if ($D[$index]["Estatus"] === "INACTIVO") {

                        $data = array('Estatus' => "INACTIVO", 'Modificacion' => strtoupper(Date('d/m/Y h:i:s a')));
                        $this->resource_model->onAction('ProductosXAlmacen', $data, 'update', array('ID', $D[$index]["ID"]));
                    } else if ($D[$index]["Estatus"] === "") {
                        $data = array(
                            'IdAlmacen' => $IdAlmacen,
                            'IdProducto' => $D[$index]["IdProducto"],
                            'Producto' => strtoupper($D[$index]["ProductoT"]),
                            'IdProveedor' => $IdProveedor,
                            'Proveedor' => strtoupper($D[$index]["Proveedor"]),
                            'Tipo' => ($Tipo !== '') ? $Tipo : NULL,
                            'TipoT' => ($TipoT !== '') ? $TipoT : '',
                            'Cantidad' => 0,
                            'Observaciones' => strtoupper($Observaciones),
                            'Registro' => strtoupper(Date('d/m/Y h:i:s a')),
                            'Estatus' => 'ACTIVO'
                        );
                        $this->resource_model->onAction('ProductosXAlmacen', $data, 'save', 0);
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProveedoresXAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProveedoresXAlmacen($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onBeforeCancelarEntrada() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->onBeforeCancelarEntrada($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getUsuarios() {
        try {
            $data = $this->almacen_model->getUsuarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTiposDeViviendas() {
        try {
            $data = $this->almacen_model->getTiposDeViviendas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getOrdenesDeCompra() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getOrdenesDeCompra($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getOrdenesDeCompraByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getOrdenesDeCompraByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductosXAlmacen($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacenXProveedor() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductosXAlmacenXProveedor($ID, $PRO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddMovimientosXAlmacen() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'IdAlmacen' => ((isset($IdAlmacen) && $IdAlmacen !== '') ? $IdAlmacen : NULL),
                'IdProducto' => ((isset($IdProducto) && $IdProducto !== '') ? $IdProducto : NULL),
                'Producto' => strtoupper((isset($Producto) && $Producto !== '') ? $Producto : NULL),
                'Condicion' => (isset($Condicion) && $Condicion !== '') ? $Condicion : NULL,
                'CondicionT' => (isset($CondicionT) && $CondicionT !== '') ? $CondicionT : NULL,
                'Forma' => (isset($Forma) && $Forma !== '') ? $Forma : NULL,
                'FormaT' => (isset($FormaT) && $FormaT !== '') ? $FormaT : NULL,
                'CantidadSolicitada' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : 0,
                'CantidadEntrante' => (isset($CantidadEntrante) && $CantidadEntrante !== '') ? $CantidadEntrante : 0,
                'UnidadMedida' => strtoupper((isset($UnidadMedida) && $UnidadMedida !== '') ? $UnidadMedida : NULL),
                'FechaIngreso' => (isset($FechaIngreso) && $FechaIngreso !== '') ? $FechaIngreso : NULL,
                'HoraIngreso' => strtoupper(Date('h:i:s a')),
                'TipoVivienda' => (isset($TipoVivienda) && $TipoVivienda !== '') ? $TipoVivienda : NULL,
                'TipoViviendaT' => (isset($TipoViviendaT) && $TipoViviendaT !== '') ? $TipoViviendaT : NULL,
                'Procedencia' => (isset($Procedencia) && $Procedencia !== '') ? $Procedencia : NULL,
                'ProcedenciaT' => (isset($ProcedenciaT) && $ProcedenciaT !== '') ? $ProcedenciaT : NULL,
                'IdProveedor' => (isset($IdProveedor) && $IdProveedor !== '') ? $IdProveedor : NULL,
                'ProveedorT' => strtoupper((isset($ProveedorT) && $ProveedorT !== '') ? $ProveedorT : NULL),
                'NombreEntrega' => strtoupper((isset($NombreEntrega) && $NombreEntrega !== '') ? $NombreEntrega : NULL),
//                'NombreEntregaT' => (isset($NombreEntregaT) && $NombreEntregaT !== '') ? $NombreEntregaT : NULL,
                'ReferenciaOC' => strtoupper((isset($ReferenciaOC) && $ReferenciaOC !== '') ? $ReferenciaOC : NULL),
                'RecibeInstPro' => (isset($RecibeInstPro) && $RecibeInstPro !== '') ? $RecibeInstPro : NULL,
                'RecibeAlmacen' => (isset($RecibeAlmacen) && $RecibeAlmacen !== '') ? $RecibeAlmacen : NULL,
                'RecibeAlmacenT' => (isset($RecibeAlmacenT) && $RecibeAlmacenT !== '') ? $RecibeAlmacenT : NULL,
                'ReferenciaFactura' => (isset($ReferenciaFactura) && $ReferenciaFactura !== '') ? $ReferenciaFactura : NULL,
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $this->resource_model->onAction('MovimientosXAlmacen', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddEntrada() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump($DETALLE);
//            var_dump($_FILES["DETALLEF"]);
            $D = json_decode($DETALLE, true);
            var_dump($D);
            /* DETALLE */
            if (isset($DETALLE)) {
                for ($index = 0; $index < count($D); $index++) {
                    $data = array(
                        'IdAlmacen' => ((isset($IdAlmacen) && $IdAlmacen !== '') ? $IdAlmacen : NULL),
                        'OrdenDeCompra' => ((isset($IdOrdenDeCompra) && $IdOrdenDeCompra !== '') ? $IdOrdenDeCompra : NULL),
                        'IdProducto' => ((isset($D[$index]["IdProducto"]) && $D[$index]["IdProducto"] !== '') ? $D[$index]["IdProducto"] : NULL),
                        'Producto' => strtoupper((isset($D[$index]["Producto"]) && $D[$index]["Producto"] !== '') ? $D[$index]["Producto"] : NULL),
                        'Condicion' => (isset($D[$index]["Condicion"]) && $D[$index]["Condicion"] !== '') ? $D[$index]["Condicion"] : NULL,
                        'CondicionT' => (isset($D[$index]["CondicionT"]) && $D[$index]["CondicionT"] !== '') ? $D[$index]["CondicionT"] : NULL,
                        'FormaT' => 'ENTRADA',
                        'TipoEntrada' => (isset($D[$index]["TipoEntrada"]) && $D[$index]["TipoEntrada"] !== '') ? $D[$index]["TipoEntrada"] : NULL,
                        'CantidadCajas' => (isset($D[$index]["Cajas"]) && $D[$index]["Cajas"] !== '') ? ($D[$index]["Cajas"]) : 0,
                        'CantidadPaquetes' => (isset($D[$index]["Paquetes"]) && $D[$index]["Paquetes"] !== '' ) ? ($D[$index]["Paquetes"]) : 0,
                        'CantidadUnidades' => (isset($D[$index]["Unidades"]) && $D[$index]["Unidades"] !== '' ) ? $D[$index]["Unidades"] : 0,
                        'CantidadSolicitada' => (isset($D[$index]["Cantidad"]) && $D[$index]["Cantidad"] !== '') ? $D[$index]["Cantidad"] : 0,
                        'CantidadEntrante' => (isset($D[$index]["CantidadEntrante"]) && $D[$index]["CantidadEntrante"] !== '') ? $D[$index]["CantidadEntrante"] : 0,
                        'UnidadMedida' => strtoupper((isset($D[$index]["Unidad"]) && $D[$index]["Unidad"] !== '') ? $D[$index]["Unidad"] : NULL),
                        'Precio' => strtoupper((isset($D[$index]["Precio"]) && $D[$index]["Precio"] !== '') ? $D[$index]["Precio"] : NULL),
                        'FechaIngreso' => (isset($FechaIngreso) && $FechaIngreso !== '') ? $FechaIngreso : NULL,
                        'HoraIngreso' => strtoupper(Date('h:i:s a')),
                        'IdProveedor' => (isset($D[$index]["IdProveedor"]) && $D[$index]["IdProveedor"] !== '') ? $D[$index]["IdProveedor"] : NULL,
                        'ProveedorT' => strtoupper((isset($D[$index]["ProveedorT"]) && $D[$index]["ProveedorT"] !== '') ? $D[$index]["ProveedorT"] : NULL),
                        'Observaciones' => strtoupper((isset($D[$index]["Observaciones"]) && $D[$index]["Observaciones"] !== '') ? $D[$index]["Observaciones"] : NULL),
                        'ObservacionesGenerales' => strtoupper((isset($Observaciones) && $Observaciones !== '') ? $Observaciones : NULL),
                        'NombreEntrega' => strtoupper((isset($NombreEntrega) && $NombreEntrega !== '') ? $NombreEntrega : NULL),
                        'ReferenciaOC' => strtoupper((isset($ReferenciaOC) && $ReferenciaOC !== '') ? $ReferenciaOC : NULL),
                        'RecibeInstPro' => (isset($RecibeInstPro) && $RecibeInstPro !== '') ? strtoupper($RecibeInstPro) : NULL,
                        'RecibeAlmacen' => (isset($RecibeAlmacen) && $RecibeAlmacen !== '') ? $RecibeAlmacen : NULL,
                        'RecibeAlmacenT' => (isset($RecibeAlmacenT) && $RecibeAlmacenT !== '') ? $RecibeAlmacenT : NULL,
                        'ReferenciaFactura' => (isset($ReferenciaFactura) && $ReferenciaFactura !== '') ? strtoupper($ReferenciaFactura) : NULL,
                        'Estatus' => 'ACTIVO',
                        'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
                    );
//                    var_dump($data);
                    $ID = $this->resource_model->onAction('Entradas', $data, 'save', 0);

                    if (!file_exists('uploads/Almacen/' . $ID)) {
                        mkdir('uploads/Almacen/' . $ID, 0777, true);
                    }

                    if (move_uploaded_file($_FILES["DETALLEF"]["tmp_name"][$index], "uploads/Almacen/" . $ID . "/" . $_FILES["DETALLEF"]["name"][$index])) {
                        echo "LA IMAGEN: " + $_FILES["DETALLEF"]["name"][$index] + ", HA SIDO ARCHIVADA.";
                    } else {
                        echo "LA IMAGEN: " + $_FILES["DETALLEF"]["name"][$index] + ", NO SE PUDO SUBIR, VERIFIQUE EL TIPO DE ARCHIVO\n";
                    }
                    if (isset($_FILES["DETALLEF"]["name"][$index])) {
                        $data = array('rDocumento' => base_url() . "uploads/Almacen/" . $ID . "/" . $_FILES["DETALLEF"]["name"][$index]);
                        $this->resource_model->onAction('Entradas', $data, 'update', array('ID', $ID));
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAddSalida() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump($_FILES["DETALLEF"]);
            var_dump(filter_input_array(INPUT_POST));
            $D = json_decode($DETALLE, true);
            /* DETALLE */
            if (isset($DETALLE)) {

                $Subject = "SE HA REGISTRADO UNA NUEVA SALIDA";
                $bodyContent = '<div align="center">';
                $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
                $bodyContent .= '<table border="0">';
                $bodyContent .= '<thead>'
                        . '<tr><th colspan="9"><B>RESUMEN DE LA SALIDA</B></th></tr>'
                        . '<tr>'
                        . '<th><B>ALMACEN</B></th>'
                        . '<th><B>PROVEEDOR</B></th>'
                        . '<th><B>PRODUCTO</B></th>'
                        . '<th><B>SALIDA POR CONCEPTO DE</B></th>'
                        . '<th><B>CANTIDAD DESPUÉS DE LA SALIDA</B></th>'
                        . '<th><B>CANTIDAD</B></th>'
                        . '<th><B>CANTIDAD EN CAJAS</B></th>'
                        . '<th><B>CANTIDAD EN PAQUETES</B></th>'
                        . '<th><B>CANTIDAD EN UNIDADES</B></th>'
                        . '<th><B>UNIDAD DE MEDIDA</B></th>'
                        . '<th><B>PRECIO</B></th>'
                        . '<th><B>FECHA DE SALIDA</B></th>'
                        . '</tr>'
                        . '</thead>';
                $bodyContent .= '<tbody>';

                for ($index = 0; $index < count($D); $index++) {
                    var_dump($D[$index]['IdEntrada']);
                    $data = array(
                        'IdAlmacen' => (isset($IdAlmacen) && $IdAlmacen !== '') ? $IdAlmacen : NULL,
                        'IdEntrada' => (isset($D[$index]['IdEntrada']) && $D[$index]['IdEntrada'] !== '') ? $D[$index]['IdEntrada'] : NULL,
                        'IdProducto' => (isset($D[$index]['IdProducto']) && $D[$index]['IdProducto'] !== '') ? $D[$index]['IdProducto'] : NULL,
                        'Producto' => (isset($D[$index]['Producto']) && $D[$index]['Producto'] !== '') ? utf8_decode($D[$index]['Producto']) : NULL,
                        'Condicion' => (isset($D[$index]['Condicion']) && $D[$index]['Condicion'] !== '') ? $D[$index]['Condicion'] : NULL,
                        'CondicionT' => (isset($D[$index]['CondicionT']) && $D[$index]['CondicionT'] !== '') ? $D[$index]['CondicionT'] : NULL,
                        'FormaT' => 'SALIDA',
                        'Concepto' => $Concepto,
                        'ConceptoT' => $ConceptoT,
                        'TipoSalida' => (isset($D[$index]['UnidadMedida']) && $D[$index]['UnidadMedida'] !== '') ? $D[$index]['UnidadMedida'] : NULL,
                        'CantidadSaliente' => (isset($D[$index]['CantidadSaliente']) && $D[$index]['CantidadSaliente'] !== '') ? $D[$index]['CantidadSaliente'] : NULL,
                        'CantidadCajas' => (isset($D[$index]['CantidadCajas']) && $D[$index]['CantidadCajas'] !== '') ? $D[$index]['CantidadCajas'] : NULL,
                        'CantidadPaquetes' => (isset($D[$index]['CantidadPaquetes']) && $D[$index]['CantidadPaquetes'] !== '') ? $D[$index]['CantidadPaquetes'] : NULL,
                        'CantidadUnidades' => (isset($D[$index]['CantidadUnidades']) && $D[$index]['CantidadUnidades'] !== '') ? $D[$index]['CantidadUnidades'] : NULL,
                        'UnidadMedida' => (isset($D[$index]['UnidadMedida']) && $D[$index]['UnidadMedida'] !== '') ? $D[$index]['UnidadMedida'] : NULL,
                        'Precio' => (isset($D[$index]['Precio']) && $D[$index]['Precio'] !== '') ? str_replace("$", "", $D[$index]['Precio']) : 0,
                        'FechaEgreso' => (isset($FechaEgreso) && $FechaEgreso !== '') ? $FechaEgreso : NULL,
                        'HoraEgreso' => strtoupper(Date('h:i:s a')),
                        'IdProveedor' => (isset($D[$index]['IdProveedor']) && $D[$index]['IdProveedor'] !== '') ? $D[$index]['IdProveedor'] : NULL,
                        'ProveedorT' => (isset($D[$index]['ProveedorT']) && $D[$index]['ProveedorT'] !== '') ? $D[$index]['ProveedorT'] : NULL,
                        'NombreEntrega' => (isset($NombreEntrega) && $NombreEntrega !== '') ? strtoupper($NombreEntrega) : NULL,
                        'ReferenciaFactura' => (isset($ReferenciaFactura) && $ReferenciaFactura !== '') ? strtoupper($ReferenciaFactura) : NULL,
                        'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? strtoupper(utf8_decode($Observaciones)) : NULL,
                        'ObservacionesGenerales' => (isset($ObservacionesGenerales) && $ObservacionesGenerales !== '') ? strtoupper(utf8_decode($ObservacionesGenerales)) : NULL,
                        'Estatus' => 'ACTIVO',
                        'Registro' => strtoupper(Date('d/m/Y h:i:s a')),
                        'CantidadRestante' => (isset($D[$index]['CantidadRestante']) && $D[$index]['CantidadRestante'] !== '') ? $D[$index]['CantidadRestante'] : NULL,
                        'CantidadDisponible' => (isset($D[$index]['CantidadDisponible']) && $D[$index]['CantidadDisponible'] !== '') ? $D[$index]['CantidadDisponible'] : NULL
                    );
//                    var_dump($data);
                    $ID = $this->resource_model->onAction('Salidas', $data, 'save', 0);
                    $bodyContent .= '<tr>';
                    $bodyContent .= '<td>' . $IdAlmacen . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['ProveedorT'] . '</td>';
                    $bodyContent .= '<td>' . utf8_decode($D[$index]['Producto']) . '</td>';
                    $bodyContent .= '<td>' . $ConceptoT . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['CantidadRestante'] . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['CantidadSaliente'] . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['CantidadCajas'] . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['CantidadPaquetes'] . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['CantidadUnidades'] . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['UnidadMedida'] . '</td>';
                    $bodyContent .= '<td>' . $D[$index]['Precio'] . '</td>';
                    $bodyContent .= '<td>' . strtoupper(Date('d/m/Y h:i:s a')) . '</td>';
                    $bodyContent .= '</tr>';
                }
                $bodyContent .= '</tbody>';
                $bodyContent .= '</table>';

                $this->onSendEmail($Subject, $bodyContent);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteKardex() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST)); 
            date_default_timezone_set('America/Mexico_City');
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'EXISTENCIAS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 5, 'PROVEEDOR', 0, 0, 'L');
            $pdf->SetX($space += 35);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 70);
            $pdf->Cell(20, 5, 'PRECIO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetXY($X -= 0, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('CONDICIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'EXISTENCIA', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('CAJAS'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 15, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

//            $rows = $this->almacen_model->getExistenciasXAlmacenXProveedorYProducto($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN, $PRODUCTO);
            $rows = $this->almacen_model->getAlmacenesConExistencias($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->setX(5);
                    $Y = $pdf->GetY();
                    $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->ALMACEN));
                    $YY = $pdf->GetY();

                    $pdf->SetY($Y);
                    $pdf->SetX(42);
                    $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROVEEDOR));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(80);
                    if (strlen($rows[$index]->PRODUCTO) > 100) {
                        $pdf->SetFont('Arial', 'B', 5);
                    }
                    $pdf->MultiCell(65, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                    $pdf->SetFont('Arial', 'B', 6.5);

                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    if (strlen($rows[$index]->PRECIO) == 6) {
                        $pdf->SetX(140);
                    } else {
                        $pdf->SetX(150);
                    }
                    $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(170);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(195);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(213);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(235);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(250);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(270);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                    $pdf->SetFont('Arial', 'B', 6.5);

                    /*                     * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                    $Y = $pdf->SetY($YY);
                    $pdf->Cell(0, 0, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetDrawColor(96, 96, 96);
                    $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                    if ($pdf->GetY() > 190) {
                        $pdf->SetFont('Arial', 'B', 5.5);
                        $pdf->SetY(195);
                        $pdf->SetX(140);
                        $pdf->MultiCell(25, 10, $pages);
                        $pdf->AddPage();

                        $pages += 1;
                    } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);  
                    }
                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "EXISTENCIAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistenciasXAlmacenYProveedorXProducto() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'EXISTENCIAS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 5, 'PROVEEDOR', 0, 0, 'L');
            $pdf->SetX($space += 35);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 70);
            $pdf->Cell(20, 5, 'PRECIO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetXY($X -= 0, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('CONDICIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'EXISTENCIA', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('CAJAS'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 15, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

//            $rows = $this->almacen_model->getExistenciasXAlmacenXProveedorYProducto($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN, $PRODUCTO);
            $rows = $this->almacen_model->getAlmacenesConExistencias($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
//                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->ALMACEN));
                $YY = $pdf->GetY();

                $pdf->SetY($Y);
                $pdf->SetX(42);
                $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROVEEDOR));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(80);
                if (strlen($rows[$index]->PRODUCTO) > 100) {
                    $pdf->SetFont('Arial', 'B', 5);
                }
                $pdf->MultiCell(65, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                $pdf->SetFont('Arial', 'B', 6.5);

                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                if (strlen($rows[$index]->PRECIO) == 6) {
                    $pdf->SetX(140);
                } else {
                    $pdf->SetX(150);
                }
                $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY($Y);
                $pdf->SetX(170);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetY($Y);
                $pdf->SetX(195);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(213);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(235);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(250);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(270);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                $pdf->SetFont('Arial', 'B', 6.5);

                /*                 * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                $Y = $pdf->SetY($YY);
                $pdf->Cell(0, 0, "", 0, 1, 'L');
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetDrawColor(96, 96, 96);
                $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                /*                 * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                if ($pdf->GetY() > 190) {
                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY(195);
                    $pdf->SetX(140);
                    $pdf->MultiCell(25, 10, $pages);
                    $pdf->AddPage();

                    $pages += 1;
                } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);  
                }
//                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "EXISTENCIAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosExistentes() {
        try {
            $data = $this->almacen_model->getProductosExistentes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistenciasXAlmacenOnPDF() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
//            $rows = $this->almacen_model->getExistenciasXAlmacenYProveedor($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN);
            $rows = $this->almacen_model->getAlmacenesConExistencias($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 2.5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetY(5);
            $pdf->SetX(75);
            $pdf->SetFont('Arial', '', 25);
            if (isset($rows) && count($rows) > 0 && strlen($rows[0]->ALMACEN) > 10) {
                $pdf->SetX(75);
            } else {
                $pdf->SetX(125);
            }
            $pdf->Cell(100, 15, (isset($rows) && count($rows) > 0) ? $rows[0]->ALMACEN : '', 0, 0, 'L');
            $pdf->SetFont('Arial', '', 15);
            $pdf->SetY(15);
            $pdf->SetX(80);
            $pdf->Cell(100, 10, '(EXISTENCIAS POR ALMACEN)', 0, 0, 'L');
            $pdf->SetY(5);
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
//            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 10);
            $pdf->Cell(60, 5, 'PROVEEDOR', 0, 0, 'L');
            $pdf->SetX($space += 50);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 90);
            $pdf->Cell(20, 5, 'PRECIO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetXY($X -= 5, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('CONDICIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'EXISTENCIA', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('CAJAS'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 15, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->setX(5);
                    $Y = $pdf->GetY();
                    $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
//                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->ALMACEN));
                    $YY = $pdf->GetY();

                    $pdf->SetY($Y);
                    $pdf->setX(5);
                    $pdf->MultiCell(60, 4, utf8_decode($rows[$index]->PROVEEDOR));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(70);
                    if (strlen($rows[$index]->PRODUCTO) > 100) {
                        $pdf->SetFont('Arial', 'B', 5);
                    }
                    $pdf->MultiCell(90, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                    $pdf->SetFont('Arial', 'B', 6.5);

                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    if (strlen($rows[$index]->PRECIO) == 6) {
                        $pdf->SetX(160);
                    } else {
                        $pdf->SetX(165);
                    }
                    $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(180);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(205);
                    $pdf->MultiCell(15, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(225);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(15, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(245);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(15, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(260);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(15, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(280);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(15, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                    $pdf->SetFont('Arial', 'B', 6.5);

                    /*                     * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                    $Y = $pdf->SetY($YY);
                    $pdf->Cell(0, 0, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetDrawColor(96, 96, 96);
                    $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                    if ($pdf->GetY() > 190) {
                        $pdf->SetFont('Arial', 'B', 5.5);
                        $pdf->SetY(195);
                        $pdf->SetX(140);
                        $pdf->MultiCell(25, 10, $pages);
                        $pdf->AddPage();

                        $pages += 1;
                    } else {
                        
                    }
                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "EXISTENCIAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistenciasXProveedorOnPDF() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $rows = $this->almacen_model->getExistenciasXAlmacenYProveedor($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN);
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 2.5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            if (strlen($rows[0]->PROVEEDOR) > 30) {
                $pdf->SetX(80);
                $pdf->SetFont('Arial', '', 12);
            } else {
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 14);
            }
            $pdf->Cell(100, 15, utf8_decode($rows[0]->PROVEEDOR), 0, 0, 'L');
            $pdf->SetTextColor(178, 0, 0);
            $pdf->SetY(15);
            if (strlen($rows[0]->PROVEEDOR) > 30) {
                $pdf->SetX(115);
                $pdf->SetFont('Arial', '', 10);
            } else {
                $pdf->SetX(120);
                $pdf->SetFont('Arial', '', 15);
            }
            $pdf->Cell(100, 5, "(EXISTENCIAS POR PROVEEDOR)", 0, 0, 'L');
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(5);
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 5;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
//            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 5);
            $pdf->Cell(60, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 55);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 95);
            $pdf->Cell(20, 5, 'PRECIO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetXY($X -= 3, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('CONDICIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'EXISTENCIA', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('CAJAS'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 15, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->setX(5);
                    $Y = $pdf->GetY();
                    $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
//                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->ALMACEN));
                    $YY = $pdf->GetY();

                    $pdf->SetY($Y);
                    $pdf->SetX(7);
                    $pdf->MultiCell(50, 4, utf8_decode($rows[$index]->ALMACEN));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(60);
                    if (strlen($rows[$index]->PRODUCTO) > 100) {
                        $pdf->SetFont('Arial', 'B', 5);
                    }
                    $pdf->MultiCell(90, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                    $pdf->SetFont('Arial', 'B', 6.5);

                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    if (strlen($rows[$index]->PRECIO) == 6) {
                        $pdf->SetX(150);
                    } else {
                        $pdf->SetX(160);
                    }
                    $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(177.5);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(200);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(222.5);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(245);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(260);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(280);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                    $pdf->SetFont('Arial', 'B', 6.5);

                    /*                     * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                    $Y = $pdf->SetY($YY);
                    $pdf->Cell(0, 0, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetDrawColor(96, 96, 96);
                    $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                    if ($pdf->GetY() > 190) {
                        $pdf->SetFont('Arial', 'B', 5.5);
                        $pdf->SetY(195);
                        $pdf->SetX(140);
                        $pdf->MultiCell(25, 10, $pages);
                        $pdf->AddPage();

                        $pages += 1;
                    } else {
                        
                    }
                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "EXISTENCIAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getExistenciasXAlmacenYProveedor() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $rows = $this->almacen_model->getExistenciasXAlmacenYProveedor($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN);
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 2.5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 15);
            if (strlen($rows[0]->ALMACEN) > 25) {
                $pdf->SetX(80);
                $pdf->SetFont('Arial', '', 15);
            } else {
                $pdf->SetX(110);
                $pdf->SetFont('Arial', '', 20);
            }
            $pdf->Cell(100, 15, utf8_decode($rows[0]->ALMACEN), 0, 0, 'L');
            $pdf->SetY(10);
            if (strlen($rows[0]->PROVEEDOR) > 25) {
                $pdf->SetX(85);
                $pdf->SetFont('Arial', '', 12);
            } else {
                $pdf->SetX(95);
                $pdf->SetFont('Arial', '', 17);
            }
            $pdf->Cell(100, 15, utf8_decode($rows[0]->PROVEEDOR), 0, 0, 'L');
            $pdf->SetTextColor(178, 0, 0);
            $pdf->SetY(20);
            if (strlen($rows[0]->PROVEEDOR) > 30) {
                $pdf->SetX(110);
                $pdf->SetFont('Arial', '', 10);
            } else {
                $pdf->SetX(105);
                $pdf->SetFont('Arial', '', 10);
            }
            $pdf->Cell(100, 5, "(EXISTENCIAS POR ALMACEN Y PROVEEDOR)", 0, 0, 'L');
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetY(5);
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 9);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
//            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 10);
//            $pdf->Cell(60, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 40);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 68);
            $pdf->Cell(20, 5, 'PRECIO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetXY($X -= 2, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('CONDICIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 25, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('UNIDAD.M'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 23);
            $pdf->Cell(15, 5, 'EXISTENCIA', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('CAJAS'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 15, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 40, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

            $pdf->SetFont('Arial', 'B', 8);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->setX(5);
                    $Y = $pdf->GetY();
                    $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
//                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->ALMACEN));
                    $YY = $pdf->GetY();

                    $pdf->SetY($Y);
                    $pdf->SetX(20);
//                    $pdf->MultiCell(60, 4, utf8_decode($rows[$index]->ALMACEN));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->setX(5);
                    $pdf->SetFont('Arial', 'B', 8);
                    if (strlen($rows[$index]->PRODUCTO) > 100) {
                        $pdf->SetFont('Arial', 'B', 6);
                    }
                    if (strlen($rows[$index]->PRODUCTO) > 1 && strlen($rows[$index]->PRODUCTO) < 15) {
                        $pdf->SetX(60);
                    }

                    $pdf->MultiCell(125, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                    $pdf->SetFont('Arial', 'B', 7);

                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    if (strlen($rows[$index]->PRECIO) == 6) {
                        $pdf->SetX(140);
                    } else {
                        $pdf->SetX(137);
                    }
                    $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 6);
                    $pdf->SetY($Y);
                    $pdf->SetX(152);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 7);
                    $pdf->SetY($Y);
                    $pdf->SetX(178);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(203);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 7);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 7);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(226);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 7);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 7);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(245);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 7);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 7);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(260);
                    if ($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 7);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 7);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                    $pdf->SetFont('Arial', 'B', 7);

                    /*                     * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                    $Y = $pdf->SetY($YY);
                    $pdf->Cell(0, 0, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetDrawColor(96, 96, 96);
                    $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                    if ($pdf->GetY() > 190) {
                        $pdf->SetFont('Arial', 'B', 6);
                        $pdf->SetY(195);
                        $pdf->SetX(140);
                        $pdf->MultiCell(25, 10, $pages);
                        $pdf->AddPage();

                        $pages += 1;
                    } else {
                        
                    }
                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 6);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "EXISTENCIAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarSalida() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->onCancelarSalida($ID);
            $dtm = $this->almacen_model->getSalidaByID($ID);
            $row = $dtm[0];
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
            $mail->addBCC('ing.giovanniflores93@gmail.com');
//            $mail->addAttachment('media/log_1o.png', 'new.png');

            $mail->isHTML(true);  // Set email format to HTML

            $mail->Subject = 'SE HA CANCELADO UNA SALIDA EN "' . $row->{"ALMACEN ORIGEN"} . '"';
            $mail->AddEmbeddedImage('media/Rabina.png', 'RabinaLogo');

            $bodyContent = '<div align="center">';
            $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
            $bodyContent .= '<h1>SE HA CANCELADO UNA SALIDA DE MATERIAL</h1>';
            $bodyContent .= '<p><b>PROVEEDOR ORIGEN: ' . $row->PROVEEDOR . ' </b></p>';
            $bodyContent .= '<p><b>PRODUCTO: ' . $row->PRODUCTO . ' </b></p>';
            $bodyContent .= '<p><b>ALMACEN ORIGEN: ' . $row->{"ALMACEN ORIGEN"} . ' </b></p>';
            $bodyContent .= '<p><b>CANTIDAD EN CAJAS: ' . $row->{"CANTIDAD EN CAJAS"} . ' </b></p>';
            $bodyContent .= '<p><b>CANTIDAD EN PAQUETES: ' . $row->{"CANTIDAD EN PAQUETES"} . ' </b></p>';
            $bodyContent .= '<p><b>CANTIDAD EN UNIDADES: ' . $row->{"CANTIDAD EN UNIDADES"} . ' </b></p>';
            $bodyContent .= '<p><b>FECHA DE ENTRADA: ' . $row->{"FECHA DE ENTRADA"} . ' </b></p>';
            $bodyContent .= '<p><b>FECHA DE SALIDA: ' . $row->{"FECHA DE SALIDA"} . ' </b></p>';
            $bodyContent .= '<p><b>FECHA DE CANCELACION: ' . strtoupper(Date('d/m/Y h:i:s a')) . ' </b></p>';
            $bodyContent .= '</div>';

            $mail->Body = $bodyContent;
            if (!$mail->send()) {
                echo 'EL MENSAJE NO PUDO SER ENVIADO';
                echo 'ERROR EN EL CORREO: ' . $mail->ErrorInfo;
            } else {
                var_dump($dtm);
                echo 'MENSAJE ENVIADO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarEntrada() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Estatus' => 'INACTIVO'
            );
            $this->resource_model->onAction("Entradas", $data, "update", array("ID", $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSendEmailOnCancelarEntrada() {
        try {
            extract(filter_input_array(INPUT_POST));
//            var_dump(filter_input_array(INPUT_POST));
            $dtm = $this->almacen_model->getEntradaByID($ID);
//            var_dump($dtm);
            $row = $dtm[0];
            if ($row !== null) {
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
//            $mail->addAttachment('media/log_1o.png', 'new.png');

                $mail->isHTML(true);  // Set email format to HTML

                $mail->Subject = 'SE HA CANCELADO UNA ENTRADA EN "' . $row->{"ALMACEN ORIGEN"} . '"';
                $mail->AddEmbeddedImage('media/Rabina.png', 'RabinaLogo');

                $bodyContent = '<div align="center">';
                $bodyContent .= '<img src="cid:RabinaLogo" height="50%" width="50%">';
                $bodyContent .= '<h1>SE HA CANCELADO UNA ENTRADA DE MATERIAL</h1>';
                $bodyContent .= '<p><b>PROVEEDOR ORIGEN: ' . utf8_decode($row->PROVEEDOR) . ' </b></p>';
                $bodyContent .= '<p><b>PRODUCTO: ' . utf8_decode($row->PRODUCTO) . ' </b></p>';
                $bodyContent .= '<p><b>ALMACEN ORIGEN: ' . utf8_decode($row->{"ALMACEN ORIGEN"}) . ' </b></p>';
                $bodyContent .= '<p><b>CANTIDAD EN CAJAS: ' . $row->{"CANTIDAD EN CAJAS"} . ' </b></p>';
                $bodyContent .= '<p><b>CANTIDAD EN PAQUETES: ' . $row->{"CANTIDAD EN PAQUETES"} . ' </b></p>';
                $bodyContent .= '<p><b>CANTIDAD EN UNIDADES: ' . $row->{"CANTIDAD EN UNIDADES"} . ' </b></p>';
                $bodyContent .= '<p><b>FECHA DE ENTRADA: ' . $row->{"FECHA DE ENTRADA"} . ' </b></p>';
                $bodyContent .= '<p><b>FECHA DE CANCELACION: ' . Date('d/m/Y h:i:s a') . ' </b></p>';
                $bodyContent .= '</div>';

                $mail->Body = $bodyContent;
                if (!$mail->send()) {
                    echo 'EL MENSAJE NO PUDO SER ENVIADO';
                    echo 'ERROR EN EL CORREO: ' . $mail->ErrorInfo;
                } else {
//                    var_dump($dtm);
                    echo 'MENSAJE ENVIADO';
                }
            }
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

    public function onAsignarX() {
        try {
            $rows = $this->almacen_model->getAlmacenes();
            $rowx = $this->almacen_model->getCatalogo();
            $n = 0;
            foreach ($rows as $key => $a) {
                foreach ($rowx as $k => $p) {
                    $n += 1;
                    print "INSERT INTO `rabinaco_corporativo`.`productosxalmacen`(`ID`,`IdAlmacen`,`IdProducto`,`Producto`,`IdProveedor`,`Proveedor`,`Tipo`,`TipoT`,`Cantidad`,`Observaciones`,`Estatus`,`Modificacion`,`Registro`) VALUES(" . strtoupper($n . "," . $a->ID . "," . $p->IDPRODUCTO . ",'" . $p->PRODUCTO . "'," . $p->IDPROVEEDOR . ",'" . $p->PROVEEDOR . "',NULL,'',0,'NA','ACTIVO',NULL,'31/01/2017 16:00:00 PM');") . "\n";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onDevolucion() {
        try {
            /* ING.GIOVANNI - CODE IMPROVEMENT APPLIED 27/03/2017 - 11:43 AM */
            extract(filter_input_array(INPUT_POST));
            $xdata = array();
            foreach (filter_input_array(INPUT_POST) as $key => $value) {
                $xdata[$key] = (isset($value) && $value !== null && $value !== '' && $value !== '0') ? strtoupper($value) : NULL;
            }
            $xdata['FormaT'] = $TIPODEVOLUCION;
            $xdata['Registro'] = Date('d/m/Y h:i:s a');
            $xdata['Estatus'] = 'ACTIVO';
            $ID = $this->resource_model->onAction('devoluciones', $xdata, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDevoluciones() {
        try {
            $data = $this->almacen_model->getDevoluciones();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDevolucionByID() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getDevolucionByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarDevolucion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'ESTATUS' => 'INACTIVO'
            );
            var_dump(filter_input_array(INPUT_POST));
            $this->resource_model->onAction('devoluciones', $data, 'update', array('ID', $ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteDeExistencias() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'EXISTENCIAS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 5, 'PROVEEDOR', 0, 0, 'L');
            $pdf->SetX($space += 35);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 70);
            $pdf->Cell(20, 5, 'PRECIO', 0, 0, 'L');
            /*             * ****************** */
            $X = $pdf->GetX();
            $pdf->SetXY($X -= 0, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('CONDICIÓN'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'EXISTENCIA', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 22, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('CAJAS'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 15, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

//            $rows = $this->almacen_model->getExistenciasXAlmacenXProveedorYProducto($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN, $PRODUCTO);
            $rows = $this->almacen_model->getAlmacenesConExistencias($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
//                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->ALMACEN));
                $YY = $pdf->GetY();

                $pdf->SetY($Y);
                $pdf->SetX(42);
                $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROVEEDOR));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(80);
                if (strlen($rows[$index]->PRODUCTO) > 100) {
                    $pdf->SetFont('Arial', 'B', 5);
                }
                $pdf->MultiCell(65, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                $pdf->SetFont('Arial', 'B', 6.5);

                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                if (strlen($rows[$index]->PRECIO) == 6) {
                    $pdf->SetX(140);
                } else {
                    $pdf->SetX(150);
                }
                $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY($Y);
                $pdf->SetX(170);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetY($Y);
                $pdf->SetX(195);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(213);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(235);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN CAJAS"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(250);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN PAQUETES"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(270);
                if ($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD DISPONIBLE EN UNIDADES"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                $pdf->SetFont('Arial', 'B', 6.5);

                /*                 * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                $Y = $pdf->SetY($YY);
                $pdf->Cell(0, 0, "", 0, 1, 'L');
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetDrawColor(96, 96, 96);
                $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                /*                 * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                if ($pdf->GetY() > 190) {
                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY(195);
                    $pdf->SetX(140);
                    $pdf->MultiCell(25, 10, $pages);
                    $pdf->AddPage();

                    $pages += 1;
                } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);  
                }
//                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "EXISTENCIAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntradasXFecha() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getEntradasXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSalidasXFecha() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getSalidasXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteDeEntradas() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'ENTRADAS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 5, 'PROVEEDOR', 0, 0, 'L');
            $pdf->SetX($space += 35);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 60);
            $pdf->Cell(20, 5, utf8_decode('CONDICIÓN'), 0, 0, 'L');
            /*             * ****************** */
            $pdf->SetX($space += 25);
            $X = $pdf->GetX();
//            $pdf->SetXY($X -= 0, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 25, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('CANTIDAD'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'CAJAS', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('FECHA'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

//            $rows = $this->almacen_model->getExistenciasXAlmacenXProveedorYProducto($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN, $PRODUCTO);
            $rows = $this->almacen_model->getEntradasXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
//            for ($i = 0; $i < 500; $i++) {
            for ($index = 0; $index < count($rows); $index++) {
//                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                $pdf->setX(5);
                $Y = $pdf->GetY();
                $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
                $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROYECTO . " " . $rows[$index]->ALMACEN));
                $YY = $pdf->GetY();

                $pdf->SetY($Y);
                $pdf->SetX(42);
                $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROVEEDOR));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(80);
                if (strlen($rows[$index]->PRODUCTO) > 100) {
                    $pdf->SetFont('Arial', 'B', 5);
                }
                $pdf->MultiCell(57, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                $pdf->SetFont('Arial', 'B', 6.5);

                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

//                $pdf->SetY($Y);
//                if (strlen($rows[$index]->PRECIO) == 6) {
//                    $pdf->SetX(140);
//                } else {
//                    $pdf->SetX(150);
//                }
//                $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
//                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY($Y);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetY($Y);
                $pdf->SetX(168);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA (ENTRADA)"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(193);
                if ($rows[$index]->{"CANTIDAD ENTRANTE"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD ENTRANTE"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(215);
                if ($rows[$index]->{"CANTIDAD EN CAJAS"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD EN CAJAS"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(235);
                if ($rows[$index]->{"CANTIDAD EN PAQUETES"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD EN PAQUETES"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                $pdf->SetY($Y);
                $pdf->SetX(255);
                if ($rows[$index]->{"CANTIDAD EN UNIDADES"} > 0) {
                    $pdf->SetTextColor(0, 64, 32);
                    $pdf->SetFont('Arial', 'B', 6.5);
                } else {
                    $pdf->SetTextColor(178, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                }
                $pdf->SetTextColor(0, 0, 0);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD EN UNIDADES"}));
                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                $pdf->SetFont('Arial', 'B', 6.5);

                $pdf->SetY($Y);
                $pdf->SetX(270);
                $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"FECHA DE INGRESO"}));

                /*                 * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                $Y = $pdf->SetY($YY);
                $pdf->Cell(0, 0, "", 0, 1, 'L');
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetDrawColor(96, 96, 96);
                $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                /*                 * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                if ($pdf->GetY() > 190) {
                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY(195);
                    $pdf->SetX(140);
                    $pdf->MultiCell(25, 10, $pages);
                    $pdf->AddPage();

                    $pages += 1;
                } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);  
                }
//                }
            }
//            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "ENTRADAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteDeSalidas() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'SALIDAS', 0, 0, 'L');
            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 15, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetY(25);
            $pdf->SetFont('Arial', 'B', 8);

            $space = 15;
            /*             * **************************ENCABEZADO*************************** */

            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $pdf->Cell(20, 5, 'ALMACEN', 0, 0, 'L');
            $pdf->SetX($space += 30);
            $pdf->Cell(40, 5, 'PROVEEDOR', 0, 0, 'L');
            $pdf->SetX($space += 35);
            $pdf->Cell(30, 5, 'PRODUCTO', 0, 0, 'L');
            $pdf->SetX($space += 60);
            $pdf->Cell(20, 5, utf8_decode('CONDICIÓN'), 0, 0, 'L');
            /*             * ****************** */
            $pdf->SetX($space += 25);
            $X = $pdf->GetX();
//            $pdf->SetXY($X -= 0, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('U.MEDIDA'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 25, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(17, 5, utf8_decode('CANTIDAD'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetX($X += 20);
            $pdf->Cell(15, 5, 'CAJAS', 0, 0, 'L');

            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(20, 5, utf8_decode('PAQUETES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('UNIDADES'));
            $pdf->SetY($Y);
            /*             * ****************** */
            $pdf->SetXY($X += 20, $pdf->GetY());
            $Y = $pdf->GetY();
            $pdf->MultiCell(25, 5, utf8_decode('FECHA'));
            /*             * ****************** */
            $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */

//            $rows = $this->almacen_model->getExistenciasXAlmacenXProveedorYProducto($PROYECTO, $ALMACEN, $PROVEEDOR, $INICIO, $FIN, $PRODUCTO);
            $rows = $this->almacen_model->getSalidasXFecha($INICIO, $FIN, $PROYECTO, $ALMACEN, $PROVEEDOR, $PRODUCTO);
            $pdf->SetFont('Arial', 'B', 6.5);
            $pages = 1;
            for ($i = 0; $i < 500; $i++) {
                for ($index = 0; $index < count($rows); $index++) {
//                if ($rows[$index]->{"CANTIDAD DISPONIBLE"} > 0) {
                    $pdf->setX(5);
                    $Y = $pdf->GetY();
                    $pdf->SetDrawColor(96, 96, 96);
//                $pdf->Line(41, $pdf->GetY() + 1, 41, $pdf->GetY() + 9);
                    $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROYECTO . " " . $rows[$index]->ALMACEN));
                    $YY = $pdf->GetY();

                    $pdf->SetY($Y);
                    $pdf->SetX(42);
                    $pdf->MultiCell(35, 4, utf8_decode($rows[$index]->PROVEEDOR));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(80);
                    if (strlen($rows[$index]->PRODUCTO) > 100) {
                        $pdf->SetFont('Arial', 'B', 5);
                    }
                    $pdf->MultiCell(57, 4, utf8_decode($rows[$index]->PRODUCTO));
//                $pdf->MultiCell(50, 5, utf8_decode('TAPA DE CISTERNA DE 50X50 CM. (SEGÚN DISEÑO), FABRICADA EN ANGULO DE 1/8"X1" Y 2" REFUERZOS DE CUADRADO DE 1/2" CON LAMINA NEGRA CAL. 18 AL RAZ, LA BOCA DE LA TAPA ES DE 45X45. INCLUYE 2 BISAGRAS DE CILINDRO SOLDADAS A LA BOCA Y TAPA, Y JALADERA DE SOLERA (PORTACANDADO) DE 1/8" X 1", PINTADA EN FONDO ESTRUCTURAL COLOR NEGRO. SIN INSTALACION EN OBRA (ENVIAR DISEÑO A PROVEEDOR PARA TENER EL CONCEPTO DEFINIDO). P.U.O.T.'));
                    $pdf->SetFont('Arial', 'B', 6.5);

                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

//                $pdf->SetY($Y);
//                if (strlen($rows[$index]->PRECIO) == 6) {
//                    $pdf->SetX(140);
//                } else {
//                    $pdf->SetX(150);
//                }
//                $pdf->MultiCell(20, 4, utf8_decode($rows[$index]->PRECIO));
//                $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 5.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(140);
                    $pdf->MultiCell(30, 4, utf8_decode($rows[$index]->{"CONDICION DEL ARTICULO"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetY($Y);
                    $pdf->SetX(168);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"UNIDAD DE MEDIDA"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(193);
                    if ($rows[$index]->CANTIDAD > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->CANTIDAD));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(215);
                    if ($rows[$index]->{"CANTIDAD EN CAJAS"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD EN CAJAS"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(235);
                    if ($rows[$index]->{"CANTIDAD EN PAQUETES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD EN PAQUETES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );

                    $pdf->SetY($Y);
                    $pdf->SetX(255);
                    if ($rows[$index]->{"CANTIDAD EN UNIDADES"} > 0) {
                        $pdf->SetTextColor(0, 64, 32);
                        $pdf->SetFont('Arial', 'B', 6.5);
                    } else {
                        $pdf->SetTextColor(178, 0, 0);
                        $pdf->SetFont('Arial', '', 6.5);
                    }
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"CANTIDAD EN UNIDADES"}));
                    $YY = (($pdf->GetY() > $YY) ? $pdf->GetY() : $YY );
                    $pdf->SetFont('Arial', 'B', 6.5);

                    $pdf->SetY($Y);
                    $pdf->SetX(270);
                    $pdf->MultiCell(25, 4, utf8_decode($rows[$index]->{"FECHA DE SALIDA"}));

                    /*                     * ********SE ASIGNA LA ULTIMA POSICION MÁS ALTA EN "YY" A LA POSICION POR DEFECTO EN "Y" ******* */
                    $Y = $pdf->SetY($YY);
                    $pdf->Cell(0, 0, "", 0, 1, 'L');
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetDrawColor(96, 96, 96);
                    $pdf->Line(5, $pdf->GetY(), $X + 20, $pdf->GetY());


                    /*                     * SE VALIDA SI SE ESTA AL BORDE FINAL DE LA PÁGINA* */
                    if ($pdf->GetY() > 190) {
                        $pdf->SetFont('Arial', 'B', 5.5);
                        $pdf->SetY(195);
                        $pdf->SetX(140);
                        $pdf->MultiCell(25, 10, $pages);
                        $pdf->AddPage();

                        $pages += 1;
                    } else {
//                        $pdf->SetFont('Arial', 'B', 5.5);
//                        $pdf->SetY(195);
//                        $pdf->SetX(140);
//                        $pdf->MultiCell(25, 10, $pages);  
                    }
//                }
                }
            }
            if ($pages === 1) {
                $pdf->SetFont('Arial', 'B', 5.5);
                $pdf->SetY(195);
                $pdf->SetX(140);
                $pdf->MultiCell(25, 10, $pages);
            }
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "SALIDAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosConDevolucion() {
        try {
            $data = $this->almacen_model->getProyectosConDevolucion();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosConDevolucion() {
        try {
            $data = $this->almacen_model->getProductosConDevolucion();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductosXAlmacenXPerdida() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductosXAlmacenXPerdida($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenesXProyecto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getAlmacenesXProyecto($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProductoInformacion() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getProductoInformacion($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGuardarPerdida() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = array(
                'Fecha' => ((isset($Fecha) && $Fecha !== '') ? $Fecha : NULL),
                'Hora' => ((isset($Hora) && $Hora !== '') ? $Hora : NULL),
                'IdProyecto' => ((isset($IdProyecto) && $IdProyecto !== '') ? $IdProyecto : NULL),
                'IdAlmacen' => ((isset($IdAlmacen) && $IdAlmacen !== '') ? $IdAlmacen : NULL),
                'AlmacenT' => ((isset($AlmacenT) && $AlmacenT !== '') ? $AlmacenT : NULL),
                'IdProducto' => ((isset($IdProducto) && $IdProducto !== '') ? $IdProducto : NULL),
                'ProductoT' => ((isset($ProductoT) && $ProductoT !== '') ? strtoupper($ProductoT) : NULL),
                'Tipo' => ((isset($Tipo) && $Tipo !== '') ? $Tipo : NULL),
                'TipoT' => ((isset($TipoT) && $TipoT !== '') ? $TipoT : NULL),
                'Cantidad' => ((isset($Cantidad) && $Cantidad !== '') ? $Cantidad : NULL),
                'Descripcion' => ((isset($Descripcion) && $Descripcion !== '') ? strtoupper($Descripcion) : NULL),
                'PersonaDetecta' => ((isset($PersonaDetecta) && $PersonaDetecta !== '') ? $PersonaDetecta : NULL),
                'PersonaDetectaT' => ((isset($PersonaDetectaT) && $PersonaDetectaT !== '') ? strtoupper($PersonaDetectaT) : NULL),
                'Responsable' => ((isset($Responsable) && $Responsable !== '') ? $Responsable : NULL),
                'ResponsableT' => ((isset($ResponsableT) && $ResponsableT !== '') ? strtoupper($ResponsableT) : NULL),
                'UnidadDeMedida' => ((isset($UnidadDeMedida) && $UnidadDeMedida !== '') ? strtoupper($UnidadDeMedida) : NULL),
                'Precio' => ((isset($Precio) && $Precio !== '') ? strtoupper($Precio) : NULL),
                'Total' => ((isset($Total) && $Total !== '') ? strtoupper($Total) : NULL),
                'Estatus' => 'ACTIVO',
                'Registro' => strtoupper(Date('d/m/Y h:i:s a'))
            );
            $this->resource_model->onAction('Perdidas', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getGenerarReporteDePerdidas() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getGenerarReporteDePerdidas($INICIO, $FIN, $PROYECTO, $ALMACEN);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPerdidas() {
        try {
            $data = $this->almacen_model->getPerdidas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDevolucionesX() {
        try {
            $data = $this->almacen_model->getDevolucionesX();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosConPerdidas() {
        try {
            $data = $this->almacen_model->getProyectosConPerdidas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAlmacenConPerdidasXProyecto() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->almacen_model->getAlmacenConPerdidasXProyecto($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getReporteDePerdidas() {
        try {
            extract(filter_input_array(INPUT_POST));
            date_default_timezone_set('America/Mexico_City');
            $rows = $this->almacen_model->getGenerarReporteDePerdidas($INICIO, $FIN, $PROYECTO, $ALMACEN);
            $pdf = new FPDF('L');
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 63.5, /* ALTO */ 20.5);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(5);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 25);
            $pdf->Cell(100, 15, 'PERDIDAS', 0, 0, 'L');
            $pdf->SetFont('Arial', '', 10);

            if ($ALMACEN !== '' && $PROYECTO !== '') {
                $pdf->SetY(12);
                $pdf->SetX(120);
                $pdf->Cell(100, 15, $rows[0]->PROYECTO . " - " . $rows[0]->ALMACEN, 0, 0, 'L');
            } else if ($PROYECTO !== '') {
                $pdf->SetY(12);
                $pdf->SetX(130);
                $pdf->Cell(100, 15, $rows[0]->PROYECTO, 0, 0, 'L');
            }

            $pdf->SetX(238);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(100, 20, date("d/m/Y ") . ' ' . date("h:i:s a"), 0, 1, 'L');
            $pdf->SetFont('Arial', 'B', 8);
            $space = 15;
            $Y = 30;
            $YY = 30;
            /*             * **************************ENCABEZADO*************************** */
            $pdf->Line(15, 30, 280, 30);
            $pdf->Cell(20, 2, '', 0, 1, 'L');
            $pdf->SetY($Y);
            $X = $pdf->GetX();
            $pdf->SetX($space);
            $pdf->MultiCell(15, 5, 'FECHA Y HORA');
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY($Y);
            $pdf->SetX($space += 21);
            $pdf->MultiCell(30, 5, utf8_decode("DETECTÓ"));
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY($Y);
            $pdf->SetX($space += 32.5);
            $pdf->Cell(30, 5, 'RESPONSABLE', 0, 0, 'L');
            $pdf->SetY($Y);
            $pdf->SetX($space += 35);
            $pdf->Cell(20, 5, utf8_decode('PRODUCTO'), 0, 0, 'L');
            $pdf->SetY($Y);
            $pdf->SetX($space += 52.5);
            $X = $pdf->GetX();
            $pdf->MultiCell(25, 5, utf8_decode('TIPO'));
            $pdf->SetY($Y);
            $pdf->SetX($X += 20);
            $pdf->MultiCell(17, 5, utf8_decode('CANTIDAD'));
            $pdf->SetY($Y);
            $pdf->SetX($X += 20);
            $pdf->MultiCell(25, 5, utf8_decode("DESCRIPCIÓN DE LA PERDIDA"));
            $pdf->SetY($Y);
            $pdf->SetX($X += 20);
//            $pdf->MultiCell(30, 5, utf8_decode('PERSONA QUE DETECTA LA PERDIDA'));
            $pdf->SetY($Y);
            $pdf->SetX($X += 35);
//            $pdf->MultiCell(25, 5, utf8_decode('PERSONA QUE DETECTA LA PERDIDA'));
            $YY = $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX($X += 20);
//            $pdf->MultiCell(30, 5, utf8_decode('RESPONSABLE'));
            $pdf->SetY($YY);
            $pdf->Cell(15, 5, '', 0, 1, 'L');
            $pdf->Line(15, 40, 280, 40);
            /*             * *************************FIN ENCABEZADO************************ */

            /*             * ****************************DETALLE***************************** */
            $pdf->SetFont('Arial', '', 8);
            $pages = 1;
            $Y = 40;
            $YY = 40;
            $YYY = 40;
            $pdf->SetY($Y);
            $top = 0;
            $x = "";
            $page = 1;
            $nrows = count($rows);
            $nrows_displayed = 0;
            foreach ($rows as $k => $v) {
                $nrows_displayed ++;
                $pdf->SetFont('Arial', '', 8);
                if ($pdf->GetY() > 180) {
                    $pdf->AddPage();
                    $pdf->SetY(10);
                    $Y = 10;
                    $YY = 10;
                }
                if ($pdf->GetY() > 120 && $page === 2) {
                    $pdf->AddPage();
                    $pdf->SetY(10);
                    $Y = 10;
                    $YY = 10;
                    $page = 2;
                }
                $pdf->SetY($Y);
                $pdf->SetX(15);
                $pdf->MultiCell(25, 5, strtoupper($v->FECHA . " " . $v->HORA));
                if (strlen($v->{"PERSONA QUE DETECTA LA PERDIDA"}) > 20) {
                    $pdf->SetFont('Arial', '', 6.5);
                } else {
                    $pdf->SetFont('Arial', '', 8);
                }
                $YY = ($pdf->GetY() > $YY) ? $pdf->GetY() : $YY;
                $pdf->SetY($Y);
                $pdf->SetX(38);
                $pdf->MultiCell(27.5, 5, utf8_decode($v->{"PERSONA QUE DETECTA LA PERDIDA"}));
                $pdf->SetFont('Arial', '', 8);
                $YY = ($pdf->GetY() > $YY) ? $pdf->GetY() : $YY;
                $pdf->SetY($Y);
                $pdf->SetX(67.5);
                $pdf->MultiCell(27.5, 5, utf8_decode($v->{"RESPONSABLE DE ALMACÉN QUE REGISTRA LA PERDIDA"}));
                $YY = ($pdf->GetY() > $YY) ? $pdf->GetY() : $YY;
                $pdf->SetY($Y);
                $pdf->SetX(97.5);
                if (strlen($v->PRODUCTO) > 20) {
                    $pdf->SetFont('Arial', '', 6.5);
                } else {
                    $pdf->SetFont('Arial', '', 8);
                }
                $pdf->MultiCell(55, 5, utf8_decode($v->PRODUCTO));
                $pdf->SetFont('Arial', '', 8);
                $YY = ($pdf->GetY() > $YY) ? $pdf->GetY() : $YY;
                $pdf->SetY($Y);
                $pdf->SetX(156);
                $pdf->MultiCell(19, 5, utf8_decode(($v->TIPO !== NULL) ? $v->TIPO : "OTRO"));
                $pdf->SetY($Y);
                $pdf->SetX(180);
                $pdf->MultiCell(50, 5, utf8_decode($v->CANTIDAD));
                $pdf->SetY($Y);
                $pdf->SetX(197.5);
                if (strlen($v->{"DESCRIPCIÓN DE LAS CAUSAS DE LA PERDIDA"}) > 30) {
                    $pdf->SetFont('Arial', '', 5);
                }

                $pdf->MultiCell(80, 5, utf8_decode($v->{"DESCRIPCIÓN DE LAS CAUSAS DE LA PERDIDA"}));
                $YY = ($pdf->GetY() > $YY) ? $pdf->GetY() : $YY;
                $Y = $YY;
                if ($pdf->GetY() > 120 && $page === 1) {
                    $pdf->Line(15, $YY, 280, $YY);
                    $pdf->Line(15, 30, 15, $YY);
                    $pdf->Line(35, 30, 35, $YY);
                    $pdf->Line(65, 30, 65, $YY);
                    $pdf->Line(95, 30, 95, $YY);
                    $pdf->Line(155, 30, 155, $YY);
                    $pdf->Line(175, 30, 175, $YY);
                    $pdf->Line(195, 30, 195, $YY);
                    $pdf->Line(280, 30, 280, $YY);
                    if ($nrows_displayed < $nrows) {
                        $pdf->AddPage();
                        $pdf->SetY(10);
                        $Y = 10;
                        $YY = 10;
                        $page = 2;
                        $pdf->Line(15, 10, 280, 10);
                        $pdf->Line(15, $YY, 280, $YY);
                        $pdf->Line(15, 30, 15, $YY);
                        $pdf->Line(35, 30, 35, $YY);
                        $pdf->Line(65, 30, 65, $YY);
                        $pdf->Line(95, 30, 95, $YY);
                        $pdf->Line(155, 30, 155, $YY);
                        $pdf->Line(175, 30, 175, $YY);
                        $pdf->Line(195, 30, 195, $YY);
                        $pdf->Line(280, 30, 280, $YY);
                    }
                } else {
                    $pdf->Line(15, $YY, 280, $YY);
                    $pdf->Line(15, 30, 15, $YY);
                    $pdf->Line(35, 30, 35, $YY);
                    $pdf->Line(65, 30, 65, $YY);
                    $pdf->Line(95, 30, 95, $YY);
                    $pdf->Line(155, 30, 155, $YY);
                    $pdf->Line(175, 30, 175, $YY);
                    $pdf->Line(195, 30, 195, $YY);
                    $pdf->Line(280, 30, 280, $YY);
                }
                if ($pdf->GetY() > 120 && $page === 2 && $nrows_displayed < $nrows) {
                    $pdf->AddPage();
                    $pdf->SetY(10);
                    $Y = 10;
                    $YY = 10;
                    $page = 2;
                    $pdf->Line(15, 10, 280, 10);
                    $pdf->Line(15, $YY, 280, $YY);
                    $pdf->Line(15, 30, 15, $YY);
                    $pdf->Line(35, 30, 35, $YY);
                    $pdf->Line(65, 30, 65, $YY);
                    $pdf->Line(95, 30, 95, $YY);
                    $pdf->Line(155, 30, 155, $YY);
                    $pdf->Line(175, 30, 175, $YY);
                    $pdf->Line(195, 30, 195, $YY);
                    $pdf->Line(280, 30, 280, $YY);
                }
            }

            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "PERDIDAS_" . Date('d_m_Y_h_i_s_a');
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getComprobanteDeArticulosMaterialesYEquipoDeTrabajo() {
        try {
            date_default_timezone_set('America/Mexico_City');
            $pdf = new FPDF();
            $pdf->AddPage();
            $image = "log_1o.png";
            $pdf->Image('media/' . $image, /* LEFT */ 5, 5/* TOP */, /* ANCHO */ 31.8, /* ALTO */ 10.25);
            $pdf->SetAutoPageBreak(false);
            $pdf->SetX(239);
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->Cell(100, 15, utf8_decode('FECHA DE IMPRESIÓN'), 0, 1, 'L');
            $pdf->SetY(10);
            $pdf->SetX(45);
            $pdf->SetFont('Arial', '', 16);
            $pdf->MultiCell(150, 5, utf8_decode("COMPROBANTE DE SALIDA DE ARTÍCULOS, MATERIALES Y EQUIPO DE TRABAJO"), 0, 'C');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetY(30);
            $pdf->SetX(15);
            $pdf->MultiCell(150, 5, utf8_decode("PROYECTO"));
            $pdf->Rect(43, 30, 70, 15);
            $pdf->SetY(30);
            $pdf->SetX(115);
            $pdf->MultiCell(150, 5, utf8_decode("ALMACEN"));
            $pdf->Rect(140, 30, 50, 15);
            $pdf->SetY(50);
            $pdf->SetX(15);
            $pdf->MultiCell(150, 5, utf8_decode("TIPO DE SALIDA"));
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("CONSTRUCCIÓN DE INMUEBLES "));
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("CONSTRUCCIÓN DE MUEBLES "));
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("ELABORACIÓN DE TRABAJOS"));
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("USO EN EL TRABAJO"));
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("CONSUMO EN EL TRABAJO"));
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("VENTA"));
            $pdf->SetX(20);
            $pdf->MultiCell(150, 5, utf8_decode("CAMBIO DE ALMACÉN"));
            $Y_TOP = 58.5;
            $Y_BOTTOM = 55.5;
            for ($index = 0; $index < 7; $index++) {
//            $pdf->Line($x1, $y1, $x2, $y2)
                $pdf->Line(82.5, $Y_TOP, 85.5, $Y_TOP);
                $pdf->Line(82.5, $Y_BOTTOM, 85.5, $Y_BOTTOM);
                $pdf->Line(82.5, $Y_BOTTOM, 82.5, $Y_TOP);
                $pdf->Line(85.5, $Y_BOTTOM, 85.5, $Y_TOP);
                $Y_TOP += 5;
                $Y_BOTTOM += 5;
            }

            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetY(50);
            $pdf->SetX(88);
            $pdf->MultiCell(150, 5, utf8_decode("FECHA"));
            $pdf->Rect(103, 50, 35, 8);
            $pdf->SetY(50);
            $pdf->SetX(140);
            $pdf->MultiCell(150, 5, utf8_decode("HORA"));
            $pdf->Rect(155, 50, 35, 8);

            $pdf->SetY(95);
            $pdf->SetX(15);
            $pdf->MultiCell(150, 5, utf8_decode("ARTÍCULO, MATERIAL O EQUIPO"));
            $pdf->Rect(15, 105, 175, 16);

            $pdf->SetY(125);
            $pdf->SetX(15);
            $pdf->MultiCell(150, 5, utf8_decode("CANTIDAD"));
            $pdf->SetY(125);
            $pdf->SetX(55);
            $pdf->MultiCell(150, 5, utf8_decode("CAJA"));
            $pdf->SetY(125);
            $pdf->SetX(105);
            $pdf->MultiCell(150, 5, utf8_decode("PAQUETE"));
            $pdf->SetY(125);
            $pdf->SetX(155);
            $pdf->MultiCell(150, 5, utf8_decode("UNIDADES"));
            $pdf->Rect(40, 125, 150, 16);
            $pdf->Rect(40, 130, 150, 11);
            $pdf->Rect(90, 125, 50, 16);
            $pdf->SetY(145);
            $pdf->SetX(15);
            $pdf->MultiCell(150, 5, utf8_decode("OBSERVACIÓN"));
            $pdf->Rect(15, 150, 175, 32);
            $pdf->Line(20, 155, 185, 155);
            $pdf->Line(20, 160, 185, 160);
            $pdf->Line(20, 165, 185, 165);
            $pdf->Line(20, 170, 185, 170);
            $pdf->Line(20, 175, 185, 175);

            $pdf->Line(15, 205, 100, 205);
            $pdf->SetY(210);
            $pdf->SetX(25);
            $pdf->MultiCell(150, 5, utf8_decode("NOMBRE Y FIRMA DE QUIEN ENTREGA"));

            $pdf->Line(110, 205, 190, 205);
            $pdf->SetY(210);
            $pdf->SetX(125);
            $pdf->MultiCell(150, 5, utf8_decode("NOMBRE DE QUIEN RECIBE"));
//            $pdf->Line($x1, $y1, $x2, $y2);            
            /*             * ***************************FIN DETALLE************************** */
            if (!file_exists('uploads/Almacen')) {
                mkdir('uploads/Almacen', 0777, true);
            }
            $file_name = "COMPROBANTE";
            $url = 'uploads/Almacen/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onGuardarDevolucionX() {
        try {
            extract($this->input->post());
            $data = array(
                'FechaDevolucion' => ($FechaDevolucion !== '') ? $FechaDevolucion : NULL,
                'HoraDevolucion' => ($HoraDevolucion !== '') ? $HoraDevolucion : NULL,
                'IdProyecto' => ($IdProyecto !== '') ? $IdProyecto : NULL,
                'IdProyectoT' => ($IdProyectoT !== '') ? $IdProyectoT : NULL,
                'IdAlmacen' => ($IdAlmacen !== '') ? $IdAlmacen : NULL,
                'IdAlmacenT' => ($IdAlmacenT !== '') ? $IdAlmacenT : NULL,
                'OrdenDeCompraReferencia' => ($OrdenDeCompraReferencia !== '') ? strtoupper($OrdenDeCompraReferencia) : NULL,
                'Factura' => ($Factura !== '') ? strtoupper($Factura) : NULL,
                'IdProducto' => ($IdProducto !== '') ? $IdProducto : NULL,
                'Producto' => ($Producto !== '') ? $Producto : NULL,
                'Motivo' => ($Motivo !== '') ? $Motivo : NULL,
                'MotivoT' => ($MotivoT !== '') ? $MotivoT : NULL,
                'CantidadDevuelta' => ($CantidadDevuelta !== '') ? $CantidadDevuelta : 0,
                'CantidadCajas' => (isset($CantidadCajas) && $CantidadCajas !== '') ? $CantidadCajas : 0,
                'CantidadUnidades' => (isset($CantidadUnidades) && $CantidadUnidades !== '') ? $CantidadUnidades : 0,
                'CantidadPaquetes' => (isset($CantidadPaquetes) && $CantidadPaquetes !== '') ? $CantidadPaquetes : 0,
                'UnidadMedida' => ($UnidadDeMedida !== '') ? $UnidadDeMedida : NULL,
                'Precio' => ($Precio !== '') ? $Precio : 0,
                'Observaciones' => ($Observaciones !== '') ? strtoupper($Observaciones) : "SIN OBSERVACIONES",
                'PersonaDetecta' => ($PersonaDetecta !== '') ? strtoupper($PersonaDetecta) : NULL,
                'PersonaDetectaT' => ($PersonaDetectaT !== '') ? strtoupper($PersonaDetectaT) : NULL,
                'Responsable' => ($Responsable !== '') ? strtoupper($Responsable) : NULL,
                'ResponsableT' => ($ResponsableT !== '') ? strtoupper($ResponsableT) : NULL,
                'rDocumento' => (isset($rDocumento) && $rDocumento !== '') ? $rDocumento : "",
                'Estatus' => 'ACTIVO',
                'Registro' => Date('d/m/Y h:i:s a')
            );
            $this->resource_model->onAction('Devolucionesx', $data, 'save', 0);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
