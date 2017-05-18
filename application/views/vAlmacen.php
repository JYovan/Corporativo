

<div class="row">
    <fieldset>
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary container-fluid">
                <div class="panel-heading row">
                    <div class="col-md-2 panel-title">
                        <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-arrow-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="ATRAS"></span>
                        </a> 
                    </div>
                    <div class="col-md-8"> 
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE SUMINISTRO DE MATERIALES <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <span class="fa fa-navicon cursor-hand" onclick="onMenu()" data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                    </div>
                </div>
                <div class="panel-body">
                    <div align="center"> 
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-default btn-lg text-center fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title="NUEVO ALMACEN"  type="button"
                                    data-original-title="NUEVO ALMACEN">
                                <span class="fa fa-plus fa-lg info-icon"></span>
                            </button>
                        </span>
                        <button id="btnEditar" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR ALMACEN">
                            <span class="fa fa-pencil fa-lg success-icon"></span>
                        </button>
                        <button id="btnRefresh" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-lg warning-icon"></span>
                        </button>
                        <button id="btnAsignar" class="btn btn3d btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ASIGNAR PRODUCTOS">
                            <span class="fa fa-arrow-down fa-lg danger-icon"></span>
                        </button>
                        <button id="btnProductosAsignados" class="btn btn3d btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="PRODUCTOS ASIGNADOS">
                            <span class="fa fa-eye fa-lg danger-icon"></span>
                        </button>
                        <button id="btnNuevoMovimiento" class="btn btn-default btn-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO MOVIMIENTO">
                            <span class="fa fa-sign-in fa-lg purple-icon"></span>
                        </button>
                        <button id="btnEntrada" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA ENTRADA">
                            <span class="fa fa-sign-in fa-lg lime-icon"></span>
                        </button>
                        <button id="btnEntradas" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ENTRADAS">
                            <span class="fa fa-eye fa-lg lime-icon"></span>
                        </button>
                        <button id="btnCancelarEntrada" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR ENTRADA">
                            <span class="fa fa-ban fa-lg lime-icon"></span>
                        </button>
                        <button id="btnSalida" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA SALIDA">
                            <span class="fa fa-external-link fa-lg purple-icon"></span>
                        </button>
                        <button id="btnSalidas" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="SALIDAS">
                            <span class="fa fa-eye fa-lg purple-icon"></span>
                        </button>
                        <button id="btnCancelarSalida" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR SALIDA">
                            <span class="fa fa-ban fa-lg purple-icon"></span>
                        </button>
                        <button id="btnSalidasCanceladas" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="SALIDAS CANCELADAS">
                            <span class="fa fa-eye-slash fa-lg purple-icon"></span>
                        </button>
                        <button id="btnDevolucion" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA DEVOLUCIÓN">
                            <span class="fa fa-exchange fa-lg cyan-icon"></span>
                        </button>
                        <button id="btnDevoluciones" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="DEVOLUCIONES">
                            <span class="fa fa-eye fa-lg  cyan-icon"></span>
                        </button>
                        <button id="btnCancelarDevolucion" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR DEVOLUCIÓN">
                            <span class="fa fa-ban fa-lg cyan-icon"></span>
                        </button>
                        <button id="btnRecepcion" class="btn btn-default btn-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR MOVIMIENTO">
                            <span class="fa fa-times fa-lg"></span>
                        </button>
                        <button id="btnAjuste" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO AJUSTE">
                            <span class="fa fa-wrench fa-lg brown-icon"></span>
                        </button>
                        <button id="btnAjustes" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="AJUSTES">
                            <span class="fa fa-eye fa-lg brown-icon"></span>
                        </button>
                        <button id="btnExistencias" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EXISTENCIAS (KÁRDEX)">
                            <span class="fa fa-cube fa-lg bluegrey-icon"></span>
                        </button> 
                        <button id="btnKardexPDF" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REPORTES DE EXISTENCIAS (KÁRDEX)">
                            <span class="fa fa-balance-scale fa-lg bluegrey-icon"></span>
                        </button>
                        <button id="btnPerdida" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA PERDIDA">
                            <span class="fa fa-eraser fa-lg black-icon"></span>
                        </button>
                        <button id="btnPerdidas" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="PERDIDAS">
                            <span class="fa fa-eye fa-lg black-icon"></span>
                        </button>
                        <button id="btnCancelarPerdida" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR PERDIDA">
                            <span class="fa fa-ban fa-lg black-icon"></span>
                        </button>


                        <button id="btnDevolucionX" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA DEVOLUCION">
                            <span class="fa fa-mail-reply fa-lg kingblue-icon"></span>
                        </button>
                        <button id="btnDevolucionesX" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="DEVOLUCIONES">
                            <span class="fa fa-eye fa-lg kingblue-icon"></span>
                        </button>
                        <button id="btnComprobante" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="GENERAR COMPROBANTE">
                            <span class="fa fa-file-text fa-lg cyan-icon"></span>
                        </button>

                        <button id="btnAsignarX" class="btn btn-default btn-lg fa-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ASIGNAR X">
                            <span class="fa fa-exchange fa-lg black-icon"></span>
                        </button>
                    </div>

                    <div class="col-md-12 hide" id="mdlBusquedaDevolucionesX">
                        <fieldset>
                            <div class="col-md-12" align="center">
                                <h3>BÚSQUEDA DE DEVOLUCIONES</h3>
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA INICIAL</label>
                                <input type="text" id="FechaInicial" name="FechaInicial" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA FINAL</label>
                                <input type="text" id="FechaFinal" name="FechaFinal" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-md-3">
                                <label for="">PROYECTO</label>
                                <select id="IdProyecto" name="IdProyecto" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">ALMACEN</label>
                                <select id="IdAlmacen" name="IdAlmacen" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-default fa-lg" id="btnBuscarPerdidas" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="BUSCAR DEVOLUCIONES"><span class="fa fa-search fa-2x grayscale-icon"></span></button>
                                <button type="button" class="btn btn-default fa-lg" id="btnReiniciarPerdida" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="REINICIAR"><span class="fa fa-trash fa-2x grayscale-icon"></span></button>
                            </div>
                            <div class="col-md-12" align="center">
                                <button type="button" class="btn btn-default fa-lg" id="btnReporteDePerdidas" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="GENERAR REPORTE DE DEVOLUCIONES"><span class="fa fa-check fa-2x danger-icon"></span></button>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-12 hide" id="mdlBusquedaPerdida">
                        <fieldset>
                            <div class="col-md-12" align="center">
                                <h3>BÚSQUEDA DE PERDIDAS</h3>
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA INICIAL</label>
                                <input type="text" id="FechaInicial" name="FechaInicial" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA FINAL</label>
                                <input type="text" id="FechaFinal" name="FechaFinal" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-md-3">
                                <label for="">PROYECTO</label>
                                <select id="IdProyecto" name="IdProyecto" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">ALMACEN</label>
                                <select id="IdAlmacen" name="IdAlmacen" class="form-control">

                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-default fa-lg" id="btnBuscarPerdidas" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="BUSCAR PERDIDAS"><span class="fa fa-search fa-2x grayscale-icon"></span></button>
                                <button type="button" class="btn btn-default fa-lg" id="btnReiniciarPerdida" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="REINICIAR"><span class="fa fa-trash fa-2x grayscale-icon"></span></button>
                            </div>
                            <div class="col-md-12" align="center">
                                <button type="button" class="btn btn-default fa-lg" id="btnReporteDePerdidas" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title=""  type="button"
                                        data-original-title="GENERAR REPORTE DE PERDIDAS"><span class="fa fa-check fa-2x danger-icon"></span></button>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-md-12 hide" id="mdlBusquedaEntrada" >
                        <form>
                            <div class="col-md-12" align="center">
                                <h3>BÚSQUEDA DE ENTRADAS</h3>
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA INICIAL</label>
                                <input type="text" id="Inicio" name="Inicio" class="form-control cursor-hand" placeholder="FECHA INICIAL" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA FINAL</label>
                                <input type="text" id="Fin" name="Fin" class="form-control cursor-hand" placeholder="FECHA FINAL" readonly=""  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            </div>
                            <div class="col-md-2">
                                <label for="">PROYECTO</label>
                                <select class="form-control" id="cmbProyecto">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">ALMACEN</label>
                                <select class="form-control" id="cmbAlmacen">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PROVEEDOR</label>
                                <select class="form-control" id="cmbProveedor">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PRODUCTO</label>
                                <select class="form-control" id="cmbProducto">
                                    <option></option>
                                </select>
                            </div>
                            <DIV class="col-md-12" align="center">
                                <label class="label label-success">BÚSQUEDA DE ENTRADAS</label>
                            </div>
                            <div class="col-md-4" align="left">
                                <button class="btn btn3d btn-default fa-lg" id="btnResetBuscarEntrada"
                                        data-toggle="tooltip" data-placement="top" 
                                        title="REINICIAR"  type="button" data-original-title="REINICIAR">
                                    <span class="fa fa-trash kingblue-icon fa-3x"></span>
                                </button>
                            </div>
                            <div class="col-md-4" align="center">
                                <button class="btn btn3d btn-default fa-lg" id="btnReporteEntradas"
                                        data-toggle="tooltip" data-placement="top" 
                                        title="REPORTE DE ENTRADAS"  type="button" data-original-title="REPORTE DE ENTRADAS">
                                    <span class="fa fa-check kingblue-icon fa-3x"></span>
                                </button>
                            </div>
                            <div class="col-md-4" align="right">
                                <button class="btn btn3d btn-default fa-lg" id="btnBuscarEntrada"
                                        data-toggle="tooltip" data-placement="top" 
                                        title="BUSCAR"  type="button" data-original-title="BUSCAR">
                                    <span class="fa fa-search kingblue-icon fa-3x"></span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12 hide" id="mdlBusquedaSalida" >
                        <form>

                            <div class="col-md-12" align="center">
                                <h3>BÚSQUEDA DE SALIDAS</h3>
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA INICIAL</label>
                                <input type="text" id="Inicio" name="Inicio" class="form-control cursor-hand" placeholder="FECHA INICIAL" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                            </div>
                            <div class="col-md-2">
                                <label for="">FECHA FINAL</label>
                                <input type="text" id="Fin" name="Fin" class="form-control cursor-hand" placeholder="FECHA FINAL" readonly=""  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            </div>
                            <div class="col-md-2">
                                <label for="">PROYECTO</label>
                                <select class="form-control" id="cmbProyecto">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">ALMACEN</label>
                                <select class="form-control" id="cmbAlmacen">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PROVEEDOR</label>
                                <select class="form-control" id="cmbProveedor">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PRODUCTO</label>
                                <select class="form-control" id="cmbProducto">
                                    <option></option>
                                </select>
                            </div>
                            <DIV class="col-md-12" align="center">
                                <label class="label label-indigo">BÚSQUEDA DE SALIDAS</label>
                            </div>
                            <div class="col-md-4" align="left">
                                <button class="btn btn3d btn-default fa-lg" id="btnResetBuscarSalida"
                                        data-toggle="tooltip" data-placement="top" 
                                        title="REINICIAR"  type="button" data-original-title="REINICIAR">
                                    <span class="fa fa-trash kingblue-icon fa-3x"></span>
                                </button>
                            </div>
                            <div class="col-md-4" align="center">
                                <button class="btn btn3d btn-default fa-lg" id="btnReporteSalidas"
                                        data-toggle="tooltip" data-placement="top" 
                                        title="REPORTE DE SALIDAS"  type="button" data-original-title="REPORTE DE SALIDAS">
                                    <span class="fa fa-check kingblue-icon fa-3x"></span>
                                </button>
                            </div>
                            <div class="col-md-4" align="right">
                                <button class="btn btn3d btn-default fa-lg" id="btnBuscarSalida"
                                        data-toggle="tooltip" data-placement="top" 
                                        title="BUSCAR"  type="button" data-original-title="BUSCAR">
                                    <span class="fa fa-search kingblue-icon fa-3x"></span>
                                </button>
                            </div>
                            <div id="divSalidas" class="col-md-12 hide" align="center">
                                <span class="label label-primary">SIN DEVOLUCIONES</span>
                                <span class="label label-danger">CON DEVOLUCIONES</span>
                            </div>
                            <div id="divDevoluciones" class="col-md-12 hide" align="center">
                                <span class="label label-primary">SIN SALIDAS</span>
                                <span class="label label-danger">CON SALIDAS</span>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12 hide" id="mdlBusqueda" >
                        <form>
                            <div class="col-lg-2">
                                <label for="">INICIO</label>
                                <input type="text" id="Inicio" name="Inicio" class="form-control cursor-hand" placeholder="FECHA INICIAL" readonly="" data-provide="datepicker" data-date-format="dd/mm/yyyy" >
                            </div>
                            <div class="col-md-2">
                                <label for="">FIN</label>
                                <input type="text" id="Fin" name="Fin" class="form-control cursor-hand" placeholder="FECHA FINAL" readonly=""  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                            </div>
                            <div class="col-md-2">
                                <label for="">PROYECTO</label>
                                <select class="form-control" id="cmbProyecto">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">ALMACEN</label>
                                <select class="form-control" id="cmbAlmacen">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PROVEEDOR</label>
                                <select class="form-control" id="cmbProveedor">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="">PRODUCTO</label>
                                <select class="form-control" id="cmbProducto">
                                    <option></option>
                                </select>
                            </div>

                        </form>
                        <div class="col-md-12"> 
                            <div class="col-md-2">
                                <button id="btnBorrarFiltro" class="btn btn-default btn-lg text-center fa-lg" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="BORRAR TODO"  type="button"
                                        data-original-title="BORRAR TODO">
                                    <span class="fa fa-trash fa-3x cyan-icon"></span>
                                </button> 
                            </div>
                            <div class="col-md-8" align="center">
                                <button id="btnReporteXExistencias" class="btn btn-default btn-lg text-center fa-lg" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="EXISTENCIAS"  type="button"
                                        data-original-title="EXISTENCIAS">
                                    <span class="fa fa-check  fa-3x kingblue-icon"></span>
                                </button>  
                                <button id="btnReporteXAlmacen" class="btn btn-default btn-lg text-center fa-lg" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="EXISTENCIAS POR ALMACEN"  type="button"
                                        data-original-title="POR ALMACEN">
                                    <span class="fa fa-check  fa-3x yellow-icon"></span>
                                </button>  
                                <button id="btnReporteXAlmacenXProveedorXProducto" class="btn btn-default btn-lg text-center fa-lg " 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="EXISTENCIAS POR ALMACEN, PROVEEDOR Y PRODUCTO"  type="button"
                                        data-original-title="EXISTENCIAS POR ALMACEN, PROVEEDOR Y PRODUCTO">
                                    <span class="fa fa-check fa-3x success-icon"></span>
                                </button>  
                                <button id="btnReporteKardex" class="btn btn-default btn-lg text-center fa-lg hide" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="REPORTE DE EXISTENCIAS (KÁRDEX)"  type="button"
                                        data-original-title="REPORTE DE EXISTENCIAS (KÁRDEX)">
                                    <span class="fa fa-check fa-3x success-icon"></span>
                                </button>

                                <button id="btnReporteXProveedor" class="btn btn-default btn-lg text-center fa-lg hide" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="EXISTENCIAS (KÁRDEX) POR PROVEEDOR"  type="button"
                                        data-original-title="EXISTENCIAS (KÁRDEX) POR PROVEEDOR">
                                    <span class="fa fa-sticky-note fa-3x yellow-icon"></span>
                                </button>  
                                <button id="btnReporteXAlmacenXProveedor" class="btn btn-default btn-lg text-center fa-lg hide" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="EXISTENCIAS (KÁRDEX) POR ALMACEN Y PROVEEDOR"  type="button"
                                        data-original-title="EXISTENCIAS (KÁRDEX) POR ALMACEN Y PROVEEDOR">
                                    <span class="fa fa-sticky-note fa-3x kingblue-icon"></span>
                                </button>  
                            </div>
                            <div class="col-md-2"> 
                                <button id="btnReporteKardexSearch" class="btn btn-default btn-lg text-center fa-lg" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="BUSCAR"  type="button"
                                        data-original-title="BUSCAR">
                                    <span class="fa fa-search fa-3x cyan-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div  class="col-md-12 hide" id="mdlBusquedaDevoluciones">
                        <div class="col-md-12" align="center">
                            <h3>BÚSQUEDA DE DEVOLUCIONES</h3>
                        </div>
                        <div class="col-md-2">
                            <label for="">FECHA INICIAL</label>
                            <input type="text" class="form-control" id="FechaInicial" name="FechaInicial" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-2">
                            <label for="">FECHA FINAL</label>
                            <input type="text" class="form-control" id="FechaFinal" name="FechaInicial" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-2">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">ALMACEN</label>
                            <select id="Almacen" name="Almacen" class="form-control">

                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">PRODUCTO</label>
                            <select id="Producto" name="Producto" class="form-control">

                            </select>
                        </div>
                        <DIV class="col-md-12" align="center">
                            <label class="label label-indigo">BÚSQUEDA DE DEVOLUCIONES</label>
                        </div>
                        <div class="col-md-4">
                            <button id="btnResetBuscarDevoluciones" data-toggle="tooltip" data-placement="top" title="REINICIAR"  type="button"
                                    data-original-title="REINICIAR" class="btn btn3d btn-default fa-lg">
                                <span class="fa fa-trash fa-3x kingblue-icon"></span>
                            </button>
                        </div>
                        <div class="col-md-4" align="center">
                            <button data-toggle="tooltip" data-placement="top" title="REPORTE DE DEVOLUCIONES"  type="button"
                                    data-original-title="REPORTE DE DEVOLUCIONES" class="btn btn3d btn-default fa-lg">
                                <span class="fa fa-check fa-3x kingblue-icon"></span>
                            </button>
                        </div>
                        <div class="col-md-4" align="right">
                            <button data-toggle="tooltip" data-placement="top" title="BUSCAR"  type="button"
                                    data-original-title="BUSCAR" class="btn btn3d btn-default fa-lg">
                                <span class="fa fa-search fa-3x kingblue-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div id="rAlmacen" class="col-md-12"></div> 
                </div>
            </div>
        </div>
    </fieldset>
</div>

<div id="mdlNuevo" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO ALMACEN </h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <INPUT type="text" id="Nombre" name="Nombre" class="form-control" placeholder="NOMBRE DEL ALMACEN" required="">
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label for="">PAÍS</label>
                            <select id="Pais" name="Pais" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">CIUDAD</label>
                            <select id="Municipio" name="Municipio" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="EJ: LOMAS DEL CAMPESTRE">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="EJ: LOMAS DEL PEDREGAL">
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text"  id="Numero" name="Numero" class="form-control" placeholder="417">
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">RESPONSABLE</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>  
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlModificar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO ALMACEN </h2>
            </div> 
            <form id="frmModificar">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" placeholder="" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <INPUT type="text" id="Nombre" name="Nombre" class="form-control" placeholder="NOMBRE DEL ALMACEN" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control">
                            </select>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">PAÍS ACTUAL</label>
                            <input type="text" id="Pais" name="Pais" class="form-control" placeholder="" readonly="">
                            <label for="">PAÍS</label>
                            <select id="PaisU" name="PaisU" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">ESTADO ACTUAL</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" readonly="">
                            <label for="">ESTADO</label>
                            <select id="EstadoU" name="EstadoU" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">CIUDAD ACTUAL</label>
                            <input type="text" id="Municipio" name="Municipio" class="form-control" placeholder="" readonly="">

                            <label for="">CIUDAD</label>
                            <select id="MunicipioU" name="MunicipioU" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="EJ: LOMAS DEL PEDREGAL">
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text"  id="Numero" name="Numero" class="form-control" placeholder="417">
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <label for="">RESPONSABLE</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                            </select>  
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlNuevoMovimiento" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO MOVIMIENTO</h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Almacén de resguardo </label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Proveedor </label>
                            <select id="IdProveedor" name="IdProveedor" class="form-control">
                            </select>  
                        </div> 
                        <div class="col-xs-6 col-md-12 has-info">
                            <label for="">PRODUCTO</label>
                            <select id="IdProducto" name="IdProducto" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-4 has-info">
                            <label for="">Condiciones del articulo</label>
                            <select id="Condicion" name="Condicion" class="form-control">
                                <option></option>
                                <option value="1">BUEN ESTADO(SELLADO)</option>
                                <option value="2">MAL ESTADO</option>
                                <option value="3">BUEN ESTADO (ABIERTO)</option>
                                <option value="2">MAL ESTADO(ROTO)</option>
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-8">
                            <label for="">Observaciones</label>
                            <input type="text" id="Observaciones" name="Observaciones" class="form-control" placeholder="INFORMACIÓN SOBRE EL MOVIMIENTO">  
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Tipo de Movimiento</label>
                            <select id="Forma" name="Forma" class="form-control">
                                <option></option>
                                <option value="1">ENTRADA</option>
                                <option value="2">SALIDA</option>
                                <option value="3">TRASPASO</option>
                                <option value="4">DEVOLUCIÓN</option>
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Número de unidades ingresadas</label>
                            <input type="number" id="Cantidad" name="Cantidad" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Unidad</label>
                            <input type="text" id="UnidadMedida" name="UnidadMedida" class="form-control" placeholder="T,KG,G,MG,KM,HM,DAM,KM2,HM2,DAM2,M2,DM2,CM2,MM2,M,CM,MM,L,ML,MML">
                        </div> 
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Fecha de ingreso</label>
                            <input type="text" id="FechaIngreso" name="FechaIngreso" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>  
                        <div class="col-md-12"><hr></div>
                        <div class="col-xs-6 col-md-6 has-warning">
                            <label for="">Referencia de orden de compra</label>
                            <input type="text" id="ReferenciaOC" name="ReferenciaOC" class="form-control" placeholder="OC001"/>  
                        </div>
                        <div class="col-xs-6 col-md-6 has-error">
                            <label for="">Referencia de factura</label>
                            <input type="text" id="ReferenciaFactura" name="ReferenciaFactura" class="form-control" placeholder="F150"/>  
                        </div>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Recibe en almacén</label>
                            <select type="text" id="RecibeAlmacen" name="RecibeAlmacen" class="form-control" placeholder="EJ: SR.MARIO" >

                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label for="">Recibe en instalaciones del proveedor</label>
                            <input type="text" id="RecibeInstPro" name="RecibeInstPro" class="form-control" placeholder="EJ: X PERSONA"/>  
                        </div>
                        <div class="col-md-12" id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlAsignacion" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg super-fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">ASIGNACIÓN DE PRODUCTOS AL ALMACÉN</h2>
            </div> 
            <form id="frmAsignacion">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-xs-6 col-md-5">
                            <label for="">ALMACEN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                            </select>  
                        </div>
                        <!--                        <div class="col-xs-6 col-md-6">
                                                    <label for="">PRODUCTO</label>
                                                    <select id="IdProducto" name="IdProducto" class="form-control">
                                                    </select>  
                                                </div>-->
                        <div class="col-xs-6 col-md-5">
                            <label for="">PROVEEDOR</label>
                            <select id="IdProveedor" name="IdProveedor" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn3d  btn-default fa-lg" id="btnTrash"><span class="fa fa-trash fa-4x"></span></button>
                        </div>
                        <div class="col-xs-6 col-md-4 hide">
                            <label for="">USUARIO</label>
                            <select id="IdUsuario" name="IdUsuario" class="form-control">
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">TIPO</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option></option>
                                <option value="1">ENTRADA</option>
                                <option value="2">SALIDA</option>
                                <option value="3">CONTEO FISICO</option>
                                <option value="4">OTRO</option>
                            </select>  
                        </div>
                        <!--                        <div class="col-xs-6 col-md-4 hide">
                                                    <label for="">CANTIDAD</label>
                                                    <input type="number" id="Cantidad" name="Cantidad" class="form-control" placeholder="0" min="1">
                                                </div>-->
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <input id="Observaciones" name="Observaciones" class="form-control" value="" placeholder="NO SE CONTO BIEN"> 
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="txtSearch" name="txtSearch" class="form-control" placeholder="NOMBRE DEL PRODUCTO">
                        </div>
                        <div class="col-md-2"  id="nProductos"></div>
                        <div class="col-md-2"  align="left">
                            <button id="btnRemoverTodos"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="QUITAR TODOS" class="btn btn3d  btn-default fa-lg"><span class="fa fa-angle-double-left fa-3x"></span></button>
                            <button id="btnAgregarTodos"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="AGREGAR TODOS" class="btn btn3d  btn-default fa-lg"><span class="fa fa-angle-double-right fa-3x"></span></button>
                        </div>
                        <div class="col-md-3">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="txtSearchA" name="txtSearchA" class="form-control" placeholder="NOMBRE DEL PRODUCTO">
                        </div>
                        <div class="col-md-2 " id="nProductosAsignados" align="center"></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <div class="col-md-12 hide" id="dtblProductos" style="height: 600px; overflow-y: auto; overflow-x: hidden;">
                                <table id="tblProductos" class="">
                                    <thead> 
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>  
                        </div>  

                        <div class="col-md-7">
                            <div class="col-md-12 table-responsive hide" id="dtblProductosAsignados" style="height: 600px; overflow-y: auto;">  
                            </div> 
                        </div> 
                        <div class="col-md-12" id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlEntrada" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg super-fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">RECEPCIÓN DE ARTICULOS, MATERIALES Y EQUIPO EN ALMACÉN</h2>
            </div> 
            <form id="frmEntrada">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <div class="col-xs-6 col-md-6">
                            <label for="">ALMACEN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE INGRESO</label>
                            <input type="text" id="FechaIngreso" name="FechaIngreso" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-12">
                            <label for="">ORDEN DE COMPRA</label>
                            <select id="IdOrdenDeCompra" name="IdOrdenDeCompra" class="form-control"></select>
                        </div>
                        <div class="col-md-12">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="Proveedor" name="Proveedor" class="form-control" readonly=""/>
                        </div>
                        <div align="center" class="col-md-12">
                            <h2>ARTICULOS</h2>
                        </div>
                        <div id="tblResult" class="table-responsive"></div>
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" class="form-control" id="Observaciones" name="Observaciones" placeholder="OBSERVACIONES GENERALES">
                        </div>
                        <div class="col-xs-6 col-md-6 has-warning">
                            <label for="">Referencia de orden de compra</label>
                            <input type="text" id="ReferenciaOC" name="ReferenciaOC" class="form-control" placeholder="OC001"/>  
                        </div>
                        <div class="col-xs-6 col-md-6 has-error">
                            <label for="">Referencia de factura</label>
                            <input type="text" id="ReferenciaFactura" name="ReferenciaFactura" class="form-control" placeholder="F150"/>  
                        </div>
                        <div class="col-xs-6 col-md-6 has-info">
                            <label for="">Recibe en almacén</label>
                            <select type="text" id="RecibeAlmacen" name="RecibeAlmacen" class="form-control" placeholder="EJ: SR.MARIO" >
                            </select>  
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label for="">Recibe en instalaciones del proveedor</label>
                            <input type="text" id="RecibeInstPro" name="RecibeInstPro" class="form-control" placeholder="EJ: X PERSONA"/>  
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label for="">NOMBRE DE QUIEN ENTREGA</label>
                            <input type="text" id="NombreEntrega" name="NombreEntrega" class="form-control" placeholder="EJ: X PERSONA"/>  
                        </div>
                        <div id="msgResult" class="col-md-12">
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlSalida" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg super-fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">CONTROL DE SALIDAS DE ARTÍCULOS Y MATERIALES</h2>
            </div> 
            <form id="frmSalida">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-4">
                            <label for="">ALMACEN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONCEPTO</label>
                            <select id="Concepto" name="Concepto" class="form-control">
                                <option></option>
                                <option value="1">CONTEO FISICO</option>
                                <option value="2">VENTA</option>
                                <option value="3">OTRO</option>
                            </select>
                        </div>  
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" id="FechaEgreso" name="FechaEgreso" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div align="center" class="col-md-12">
                            <h2>ARTICULOS</h2>
                        </div>
                    </fieldset>
                    <div id="tblResult" class="table-responsive"></div>
                    <fieldset>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE EL MATERIAL</label>
                            <input type="text" id="NombreEntrega" name="NombreEntrega" class="form-control" placeholder="EJ: PEPITO">
                        </div>
                        <div class="col-md-6">
                            <label for="">REFRERENCIA DE LA FACTURA</label>
                            <input type="text" id="ReferenciaFactura" name="ReferenciaFactura" class="form-control" placeholder="EJ: F50">
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" id="ObservacionesGenerales" name="ObservacionesGenerales" class="form-control" placeholder="EJ: EL MATERIAL SE ENTREGO COMPLETO, NO HABIA MATERIAL SUFICIENTE, VENTAS AL MOSTRADOR">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-12" id="msgResult"></div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>


<div id="mdlDevolucion" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">DEVOLUCIÓN DE ARTICULOS, MATERIALES Y EQUIPO EN ALMACÉN</h2>
            </div> 
            <form id="frmDevolucion">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>

                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">SALIDA</label>
                            <input type="text" id="ID" name="IdSalida" class="form-control" readonly=""> 
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">ALMACEN</label>
                            <input type="text" id="IdAlmacen" name="IdAlmacen" class="form-control" readonly=""> 
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">ENTRADA</label>
                            <input type="text" id="IdEntrada" name="IdEntrada" class="form-control" readonly=""> 
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="IdProducto" name="IdProducto" class="form-control" readonly=""> 
                        </div>
                        <div class="col-md-12">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="Producto" name="Producto" class="form-control hide" readonly=""> 
                            <div id="dProducto"></div>
                        </div>

                        <div class="col-md-3 hide">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="IdProveedor" name="IdProveedor" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="ProveedorT" name="ProveedorT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">FECHA DE SALIDA</label>
                            <input type="text" id="FechaEgreso" name="FechaEgreso" class="form-control" readonly="  ">
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO (FORMA EN COMO SALIO)</label>
                            <input type="text" id="TipoSalida" name="TipoSalida" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">UNIDAD DE MEDIDA</label>
                            <input type="text" id="UnidadMedida" name="UnidadMedida" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">ENTREGÓ</label>
                            <input type="text" id="NombreEntrega" name="NombreEntrega" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-2">
                            <label for="">FACTURA DE REFERENCIA</label>
                            <input type="text" id="ReferenciaFactura" name="ReferenciaFactura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA </label>
                            <input type="text" id="CantidadSaliente" name="CantidadSaliente" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA(CAJAS)</label>
                            <input type="text" id="CantidadCajas" name="CantidadCajas" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA(PAQUETES)</label>
                            <input type="text" id="CantidadPaquetes" name="CantidadPaquetes" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA(UNIDADES)</label>
                            <input type="text" id="CantidadUnidades" name="CantidadUnidades" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">PRECIO DE SALIDA</label>
                            <input type="text" id="Precio" name="Precio" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">
                            <label for="">CONCEPTO DE SALIDA</label>
                            <input type="text" id="ConceptoT" name="ConceptoT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">CONDICIONES EN LAS QUE SALIÓ</label>
                            <input type="text" id="CondicionT" name="CondicionT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">OBSERVACIONES DE SALIDA</label>
                            <input type="text" id="ObservacionesGenerales" name="ObservacionesGenerales" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <h1 class="font50">DATOS DE LA DEVOLUCIÓN</h1>
                        </div>
                        <div class="col-md-2">
                            <label for="">FECHA DEVOLUCIÓN</label>
                            <input type="text" id="FechaDevolucion" name="FechaDevolucion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO (FORMA EN COMO ES DEVUELTA)</label>
                            <input type="text" id="TipoDevolucion" name="TipoDevolucion" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">CONDICION</label>
                            <select id="Condicion" name="Condicion" class="form-control">
                                <option></option>
                                <option value="1">BUEN ESTADO(SELLADO)</option>
                                <option value="2">MAL ESTADO</option>
                                <option value="3">BUEN ESTADO (ABIERTO)</option>
                                <option value="2">MAL ESTADO(ROTO)</option>
                            </select>  
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD A DEVOLVER</label>
                            <input type="number" id="CantidadDevuelta" name="CantidadDevuelta" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">CANTIDAD PARCIALMENTE ACEPTADA/NO DEVUELTA</label>
                            <input type="text" id="CantidadNoDevuelta" name="CantidadNoDevuelta" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES(SALIDA)</label>
                            <textarea type="text" placeholder="OBSERVACIONES..." class="form-control" id="Observaciones" name="Observaciones" rows="4" cols="20">
                            </textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES(DEVOLUCIÓN)</label>
                            <textarea type="text" placeholder="OBSERVACIONES DE LA DEVOLUCION..." class="form-control" id="ObservacionesDevolucion" name="ObservacionesDevolucion" rows="4" cols="20">
                            </textarea>
                        </div>
                        <div id="msgResult" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg  btn-default fa-lg hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" ><span class="fa fa-check success-icon fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>


<div id="mdlVerDevolucion" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">DEVOLUCIÓN DE ARTICULOS, MATERIALES Y EQUIPO EN ALMACÉN</h2>
            </div> 
            <form id="frmDevolucion">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>

                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">SALIDA</label>
                            <input type="text" id="ID" name="IdSalida" class="form-control" readonly=""> 
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">ALMACEN</label>
                            <input type="text" id="IdAlmacen" name="IdAlmacen" class="form-control" readonly=""> 
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">ENTRADA</label>
                            <input type="text" id="IdEntrada" name="IdEntrada" class="form-control" readonly=""> 
                        </div>
                        <div class="col-xs-6 col-md-3 hide">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="IdProducto" name="IdProducto" class="form-control" readonly=""> 
                        </div>
                        <div class="col-md-12">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="Producto" name="Producto" class="form-control hide" readonly=""> 
                            <div id="dProducto"></div>
                        </div>

                        <div class="col-md-3 hide">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="IdProveedor" name="IdProveedor" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">PROVEEDOR</label>
                            <input type="text" id="ProveedorT" name="ProveedorT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">FECHA DE SALIDA</label>
                            <input type="text" id="FechaEgreso" name="FechaEgreso" class="form-control" readonly="  ">
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO (FORMA EN COMO SALIO)</label>
                            <input type="text" id="TipoSalida" name="TipoSalida" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">UNIDAD DE MEDIDA</label>
                            <input type="text" id="UnidadMedida" name="UnidadMedida" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">ENTREGÓ</label>
                            <input type="text" id="NombreEntrega" name="NombreEntrega" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-2">
                            <label for="">FACTURA DE REFERENCIA</label>
                            <input type="text" id="ReferenciaFactura" name="ReferenciaFactura" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA </label>
                            <input type="text" id="CantidadSaliente" name="CantidadSaliente" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA(CAJAS)</label>
                            <input type="text" id="CantidadCajas" name="CantidadCajas" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA(PAQUETES)</label>
                            <input type="text" id="CantidadPaquetes" name="CantidadPaquetes" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD EGRESADA(UNIDADES)</label>
                            <input type="text" id="CantidadUnidades" name="CantidadUnidades" class="form-control" readonly="">
                        </div>
                        <div class="col-md-2">
                            <label for="">PRECIO DE SALIDA</label>
                            <input type="text" id="Precio" name="Precio" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">
                            <label for="">CONCEPTO DE SALIDA</label>
                            <input type="text" id="ConceptoT" name="ConceptoT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">CONDICIONES EN LAS QUE SALIÓ</label>
                            <input type="text" id="CondicionT" name="CondicionT" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">OBSERVACIONES DE SALIDA</label>
                            <input type="text" id="ObservacionesGenerales" name="ObservacionesGenerales" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <h1 class="font50">DATOS DE LA DEVOLUCIÓN</h1>
                        </div>
                        <div class="col-md-2">
                            <label for="">FECHA DEVOLUCIÓN</label>
                            <input type="text" id="FechaDevolucion" name="FechaDevolucion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO (FORMA EN COMO ES DEVUELTA)</label>
                            <input type="text" id="TipoDevolucion" name="TipoDevolucion" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">CONDICION</label>
                            <select id="Condicion" name="Condicion" class="form-control">
                                <option></option>
                                <option value="1">BUEN ESTADO(SELLADO)</option>
                                <option value="2">MAL ESTADO</option>
                                <option value="3">BUEN ESTADO (ABIERTO)</option>
                                <option value="2">MAL ESTADO(ROTO)</option>
                            </select>  
                        </div>
                        <div class="col-md-2">
                            <label for="">CANTIDAD A DEVOLVER</label>
                            <input type="number" id="CantidadDevuelta" name="CantidadDevuelta" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">CANTIDAD PARCIALMENTE ACEPTADA/NO DEVUELTA</label>
                            <input type="text" id="CantidadNoDevuelta" name="CantidadNoDevuelta" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES(SALIDA)</label>
                            <textarea type="text" placeholder="OBSERVACIONES..." class="form-control" id="Observaciones" name="Observaciones" rows="4" cols="20">
                            </textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES(DEVOLUCIÓN)</label>
                            <textarea type="text" placeholder="OBSERVACIONES DE LA DEVOLUCION..." class="form-control" id="ObservacionesDevolucion" name="ObservacionesDevolucion" rows="4" cols="20">
                            </textarea>
                        </div>
                        <div id="msgResult" class="col-md-12"></div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
            </div>
        </div>
    </div>
</div>

<div id="mdlPerdida" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">PERDIDA DE PRODUCTO EN INVENTARIO</h2>
            </div> 
            <form id="frmPerdida">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-6">
                            <label for="">FECHA</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>  
                        <div class="col-md-6">
                            <label for="">HORA</label>
                            <input type="text" id="Hora" name="Hora" class="form-control" placeholder="XX/XX/XXXX">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROYECTO</label>
                            <select id="IdProyecto" name="IdProyecto" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">ALMACÉN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div> 
                        <div class="col-md-6">
                            <label for="">PRODUCTO CON REPORTE DE PERDIDA</label>
                            <select id="IdProducto" name="IdProducto" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">TIPO DE PERDIDA</label>
                            <select id="Tipo" name="Tipo" class="form-control">
                                <option value=""></option> 
                                <option value="1">DAÑO</option> 
                                <option value="2">ROBO</option> 
                                <option value="3">EXTRAVÍO</option> 
                                <option value="4">OTRO</option> 
                            </select>
                        </div> 
                        <div class="col-md-3">
                            <label for="">CANTIDAD DE PRODUCTO</label>
                            <input type="number" id="Cantidad" name="Cantidad" class="form-control" placeholder="0">
                            <label for="">PRECIO</label>
                            <input type="text" id="Precio" name="Precio" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">UNIDAD DE MEDIDA</label>
                            <input type="text" id="UnidadDeMedida" name="UnidadDeMedida" class="form-control" placeholder="X"> 
                            <label for="">TOTAL DE LA PERDIDA</label>
                            <input type="number" id="Total" name="Total" class="form-control" placeholder="0"> 
                        </div>
                        <div class="col-md-6">
                            <label for="">DESCRIPCIÓN DE LAS CAUSAS DE LA PERDIDA</label>
                            <textarea id="Descripcion" name="Descripcion" type="text" placeholder="SE QUEBRO, SE MOJO, SE DERRAMO, SE ROMPIO,SE PERDIO" name="" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">PERSONA QUE DETECTA LA PERDIDA</label>
                            <select id="PersonaDetecta" name="PersonaDetecta" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">RESPONSABLE DE ALMACÉN QUE REGISTRA LA PERDIDA</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button id="btnGuardar" type="button" class="btn btn-default btn-lg fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"><span class="fa fa-check fa-3x success-icon"></span> </button> 
            </div>
        </div>
    </div>
</div>


<div id="mdlVerPerdida" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">VER PERDIDA DE PRODUCTO EN INVENTARIO</h2>
            </div>  
            <div id="messages-result" class="modal-body text-center">
                <fieldset>
                    <div class="col-md-6">
                        <label for="">FECHA</label>
                        <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                    </div>  
                    <div class="col-md-6">
                        <label for="">HORA</label>
                        <input type="text" id="Hora" name="Hora" class="form-control" placeholder="XX/XX/XXXX">
                    </div>
                    <div class="col-md-6">
                        <label for="">PROYECTO</label>
                        <select id="IdProyecto" name="IdProyecto" class="form-control">
                            <option value=""></option> 
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">ALMACÉN</label>
                        <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                            <option value=""></option> 
                        </select>
                    </div> 
                    <div class="col-md-6">
                        <label for="">PRODUCTO CON REPORTE DE PERDIDA</label>
                        <input type="text" id="ProductoT" name="ProductoT" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">TIPO DE PERDIDA</label>
                        <input type="text"  id="TipoT" name="TipoT" class="form-control">
                    </div> 
                    <div class="col-md-3">
                        <label for="">CANTIDAD DE PRODUCTO</label>
                        <input type="number" id="Cantidad" name="Cantidad" class="form-control" placeholder="0">
                        <label for="">PRECIO</label>
                        <input type="text" id="Precio" name="Precio" class="form-control" readonly="">
                    </div>
                    <div class="col-md-3">
                        <label for="">UNIDAD DE MEDIDA</label>
                        <input type="text" id="UnidadDeMedida" name="UnidadDeMedida" class="form-control" placeholder="X"> 
                        <label for="">TOTAL DE LA PERDIDA</label>
                        <input type="number" id="Total" name="Total" class="form-control" placeholder="0"> 
                    </div>
                    <div class="col-md-6">
                        <label for="">DESCRIPCIÓN DE LAS CAUSAS DE LA PERDIDA</label>
                        <textarea id="Descripcion" name="Descripcion" type="text" placeholder="SE QUEBRO, SE MOJO, SE DERRAMO, SE ROMPIO,SE PERDIO" name="" rows="4" cols="20" class="form-control">
                        </textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">PERSONA QUE DETECTA LA PERDIDA</label>
                        <input type="text" id="PersonaDetectaT" name="PersonaDetectaT" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">RESPONSABLE DE ALMACÉN QUE REGISTRA LA PERDIDA</label>
                        <input type="text" id="ResponsableT" name="ResponsableT" class="form-control">
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
            </div>
        </div>
    </div>
</div>


<div id="mdlDevolucionX" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">REGISTRO DE DEVOLUCIÓN DE PRODUCTO EN INVENTARIO</h2>
            </div> 
            <form id="frmDevolucion">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-6">
                            <label for="">FECHA</label>
                            <input type="text" id="FechaDevolucion" name="FechaDevolucion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>  
                        <div class="col-md-6">
                            <label for="">HORA</label>
                            <input type="text" id="HoraDevolucion" name="HoraDevolucion" class="form-control" placeholder="XX/XX/XXXX">
                        </div>
                        <div class="col-md-6">
                            <label for="">PROYECTO</label>
                            <select id="IdProyecto" name="IdProyecto" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">ALMACÉN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div align="center" class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">ORDEN DE COMPA DE REFERENCIA</label>
                            <input type="text" id="OrdenDeCompraReferencia" name="OrdenDeCompraReferencia" class="form-control" placeholder="XX/XX/XXXX">
                        </div>
                        <div class="col-md-6">
                            <label for="">ORDEN DE FACTURA DE REFERENCIA</label>
                            <input type="text" id="Factura" name="Factura" class="form-control" placeholder="XX/XX/XXXX">
                        </div>

                        <div align="center" class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRODUCTO CON REPORTE DE DEVOLUCIÓN</label>
                            <select id="IdProducto" name="IdProducto" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">MOTIVO DE DEVOLUCIÓN</label>
                            <select id="Motivo" name="Motivo" class="form-control">
                                <option value=""></option> 
                                <option value="1">NO CORRESPONDE A LO SOLICITADO</option> 
                                <option value="2">PRESENTA DAÑO O DEFECTO</option> 
                                <option value="3">NO FUNCIONAMIENTO</option> 
                                <option value="4">OTRO</option> 
                            </select>
                        </div> 
                        <div class="col-md-3">
                            <label for="">CANTIDAD DE PRODUCTO</label>
                            <input type="number" id="CantidadDevuelta" name="CantidadDevuelta" class="form-control" placeholder="0">
                            <label for="">PRECIO</label>
                            <input type="text" id="Precio" name="Precio" class="form-control" placeholder="EJ: 50.0">
                        </div>
                        <div class="col-md-3">
                            <label for="">UNIDAD DE MEDIDA</label>
                            <input type="text" id="UnidadDeMedida" name="UnidadDeMedida" class="form-control" placeholder="X"> 
                            <label for="">TOTAL DE LA PERDIDA</label>
                            <input type="number" id="Total" name="Total" class="form-control" placeholder="0.0"> 
                        </div>
                        <div class="col-md-6">
                            <label for="">DESCRIPCIÓN DE LAS CAUSAS DE LA DEVOLUCIÓN</label>
                            <textarea id="Observaciones" name="Observaciones" type="text" placeholder="SE QUEBRO, SE MOJO, SE DERRAMO, SE ROMPIO,SE PERDIO" name="" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">PERSONA QUE IDENTIFICA EL MOTIVO DE DEVOLUCIÓN</label>
                            <select id="PersonaDetecta" name="PersonaDetecta" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">RESPONSABLE DE ALMACÉN QUE REGISTRA LA DEVOLUCIÓN</label>
                            <select id="Responsable" name="Responsable" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button id="btnGuardar" type="button" class="btn btn-default btn-lg fa-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"><span class="fa fa-check fa-3x success-icon"></span> </button> 
            </div>
        </div>
    </div>
</div>



<div id="mdlVerDevolucionX" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">VER DEVOLUCIÓN DE PRODUCTO EN INVENTARIO</h2>
            </div>  
            <div id="messages-result" class="modal-body text-center">
                <fieldset>
                    <div class="col-md-6">
                        <label for="">FECHA</label>
                        <input type="text" id="FechaDevolucion" name="FechaDevolucion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                    </div>  
                    <div class="col-md-6">
                        <label for="">HORA</label>
                        <input type="text" id="HoraDevolucion" name="HoraDevolucion" class="form-control" placeholder="XX/XX/XXXX">
                    </div>
                    <div class="col-md-6">
                        <label for="">PROYECTO</label>
                        <select id="IdProyecto" name="IdProyecto" class="form-control">
                            <option value=""></option> 
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">ALMACÉN</label>
                        <select id="IdAlmacen" name="IdAlmacen" class="form-control">
                            <option value=""></option> 
                        </select>
                    </div>
                    <div align="center" class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <label for="">ORDEN DE COMPA DE REFERENCIA</label>
                        <input type="text" id="OrdenDeCompraReferencia" name="OrdenDeCompraReferencia" class="form-control" placeholder="XX/XX/XXXX">
                    </div>
                    <div class="col-md-6">
                        <label for="">ORDEN DE FACTURA DE REFERENCIA</label>
                        <input type="text" id="Factura" name="Factura" class="form-control" placeholder="XX/XX/XXXX">
                    </div>

                    <div align="center" class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <label for="">PRODUCTO CON REPORTE DE DEVOLUCIÓN</label>
                        <input type="text" id="Producto" name="Producto" class="form-control"> 
                    </div>
                    <div class="col-md-6">
                        <label for="">MOTIVO DE DEVOLUCIÓN</label>
                        <select id="Motivo" name="Motivo" class="form-control">
                            <option value=""></option> 
                            <option value="1">NO CORRESPONDE A LO SOLICITADO</option> 
                            <option value="2">PRESENTA DAÑO O DEFECTO</option> 
                            <option value="3">NO FUNCIONAMIENTO</option> 
                            <option value="4">OTRO</option> 
                        </select>
                    </div> 
                    <div class="col-md-3">
                        <label for="">CANTIDAD DE PRODUCTO</label>
                        <input type="number" id="CantidadDevuelta" name="CantidadDevuelta" class="form-control" placeholder="0">
                        <label for="">PRECIO</label>
                        <input type="text" id="Precio" name="Precio" class="form-control" placeholder="EJ: 50.0">
                    </div>
                    <div class="col-md-3">
                        <label for="">UNIDAD DE MEDIDA</label>
                        <input type="text" id="UnidadMedida" name="UnidadMedida" class="form-control" placeholder="X">
                    </div>
                    <div class="col-md-6">
                        <label for="">DESCRIPCIÓN DE LAS CAUSAS DE LA DEVOLUCIÓN</label>
                        <textarea id="Observaciones" name="Observaciones" type="text" placeholder="SE QUEBRO, SE MOJO, SE DERRAMO, SE ROMPIO,SE PERDIO" name="" rows="4" cols="20" class="form-control">
                        </textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">PERSONA QUE IDENTIFICA EL MOTIVO DE DEVOLUCIÓN</label>
                        <select id="PersonaDetecta" name="PersonaDetecta" class="form-control">
                            <option value=""></option> 
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">RESPONSABLE DE ALMACÉN QUE REGISTRA LA DEVOLUCIÓN</label>
                        <select id="Responsable" name="Responsable" class="form-control">
                            <option value=""></option> 
                        </select>
                    </div>
                </fieldset>
            </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
            </div>
        </div>
    </div>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlAlmacen/';
    var mdlNuevo = $("#mdlNuevo");
    var mdlModificar = $("#mdlModificar");
    var frmNuevo = mdlNuevo.find("#frmNuevo");
    var btnSave = mdlNuevo.find("#btnSave");
    var btnEditar = $("#btnEditar");
    var frmModificar = mdlModificar.find("#frmModificar");
    var btnSaveU = mdlModificar.find("#btnSave");
    var btnRefresh = $("#btnRefresh");
    var Pais = mdlNuevo.find("#Pais");
    var Estado = mdlNuevo.find("#Estado");
    var Municipio = mdlNuevo.find("#Municipio");
    var Responsable = mdlNuevo.find("#Responsable");
    var btnNuevoMovimiento = $("#btnNuevoMovimiento");
    var mdlNuevoMovimiento = $("#mdlNuevoMovimiento");
    var mdlNuevoMovimientobtnSave = mdlNuevoMovimiento.find("#btnSave");
    var mdlNuevoMovimientoIdAlmacen = mdlNuevoMovimiento.find("#IdAlmacen");
    var mdlNuevoMovimientoIdProveedor = mdlNuevoMovimiento.find("#IdProveedor");
    var btnAsignar = $("#btnAsignar");
    var mdlAsignacion = $("#mdlAsignacion");
    var call = $.Callbacks();
    var nProductos = mdlAsignacion.find("#nProductos");
    var nProductosAsignados = mdlAsignacion.find("#nProductosAsignados");
    var btnRemoverTodos = mdlAsignacion.find("#btnRemoverTodos");
    var btnAgregarTodos = mdlAsignacion.find("#btnAgregarTodos");
    var btnSaveAsignacion = mdlAsignacion.find("#btnSave");
    var mdlAsignacionIdAlmacen = mdlAsignacion.find("#IdAlmacen");
    var mdlAsignacionIdProveedor = mdlAsignacion.find("#IdProveedor");
    var mdlAsignacionbtnTrash = mdlAsignacion.find("#btnTrash");
    var btnMovimientos = $("#btnMovimientos");
    var tf = false;
    var btnEntrada = $("#btnEntrada");
    var mdlEntrada = $("#mdlEntrada");
    var btnSaveEntrada = mdlEntrada.find("#btnSave");
    var IdAlmacenmdlEntrada = mdlEntrada.find("#IdAlmacen");
    var IdOrdenDeCompramdlEntrada = mdlEntrada.find("#IdOrdenDeCompra");
    var mdlSalida = $("#mdlSalida");
    var mdlSalidaIdAlmacen = mdlSalida.find("#IdAlmacen");
    var mdlSalidaConcepto = mdlSalida.find("#Concepto");
    var btnSalida = $("#btnSalida");
    var btnSaveSalida = mdlSalida.find("#btnSave");
    var btnEntradas = $("#btnEntradas");
    var btnSalidas = $("#btnSalidas");
    var btnExistencias = $("#btnExistencias");
    var btnKardexPDF = $("#btnKardexPDF");
    var btnReporteKardex = $("#btnReporteKardex");
    var mdlBusqueda = $("#mdlBusqueda");
    var btnBorrarFiltro = mdlBusqueda.find("#btnBorrarFiltro");
    var btnReporteXAlmacen = mdlBusqueda.find("#btnReporteXAlmacen");
    var btnReporteXProveedor = mdlBusqueda.find("#btnReporteXProveedor");
    var btnReporteXAlmacenXProveedor = mdlBusqueda.find("#btnReporteXAlmacenXProveedor");
    var btnReporteXAlmacenXProveedorXProducto = mdlBusqueda.find("#btnReporteXAlmacenXProveedorXProducto");
    var btnCancelarEntrada = $("#btnCancelarEntrada");
    var btnCancelarSalida = $("#btnCancelarSalida");
    var btnSalidasCanceladas = $("#btnSalidasCanceladas");

    var mdlBusquedaEntrada = $("#mdlBusquedaEntrada");
    var mdlBusquedaSalida = $("#mdlBusquedaSalida");
    var btnAsignarX = $("#btnAsignarX");
    var btnProductosAsignados = $("#btnProductosAsignados");

    var btnBuscarEntrada = mdlBusquedaEntrada.find("#btnBuscarEntrada");
    var btnBuscarSalida = mdlBusquedaSalida.find("#btnBuscarSalida");

    var target_result = $("#rAlmacen");
    var msgAlmacen = $("#msgAlmacen");
    var btnDevolucion = $("#btnDevolucion");
    var btnDevoluciones = $("#btnDevoluciones");
    var mdlDevolucion = $("#mdlDevolucion");
    var CantidadDevuelta = mdlDevolucion.find("#CantidadDevuelta");
    var btnGuardarDevolucion = mdlDevolucion.find("#btnGuardar");
    var divSalidas = $("#divSalidas");
    var divDevoluciones = $("#divDevoluciones");
    var btnCancelarDevolucion = $("#btnCancelarDevolucion");
    var mdlVerDevolucion = $("#mdlVerDevolucion");
    var mdlBusquedaDevoluciones = $("#mdlBusquedaDevoluciones");
    var btnReporteXExistencias = $("#btnReporteXExistencias");

    var btnResetBuscarEntrada = mdlBusquedaEntrada.find("#btnResetBuscarEntrada");
    var btnResetBuscarSalida = mdlBusquedaSalida.find("#btnResetBuscarSalida");

    var btnReporteEntradas = mdlBusquedaEntrada.find("#btnReporteEntradas");
    var btnReporteSalidas = mdlBusquedaSalida.find("#btnReporteSalidas");
    var btnResetBuscarDevoluciones = mdlBusquedaDevoluciones.find("#btnResetBuscarDevoluciones");

    var btnPerdida = $("#btnPerdida");
    var btnPerdidas = $("#btnPerdidas");

    var mdlPerdida = $("#mdlPerdida");
    var btnGuardarPerdida = mdlPerdida.find("#btnGuardar");
    var mdlBusquedaPerdida = $("#mdlBusquedaPerdida");
    var btnReporteDePerdidas = $("#btnReporteDePerdidas");
    var mdlVerPerdida = $("#mdlVerPerdida");

    var btnBuscarPerdidas = $("#btnBuscarPerdidas");

    var entrada = false;
    var salida = false;
    /*DEVOLUCIONES*/
    var mdlDevolucionX = $("#mdlDevolucionX");
    var btnDevolucionX = $("#btnDevolucionX");
    var btnDevolucionesX = $("#btnDevolucionesX");
    var btnGuardarDevolucionX = mdlDevolucionX.find("#btnGuardar");
    var mdlBusquedaDevolucionesX = $("#mdlBusquedaDevolucionesX");

    var mdlVerDevolucionX = $("#mdlVerDevolucionX");

    var btnCancelarPerdida = $("#btnCancelarPerdida");

    var btnComprobante = $("#btnComprobante");

    var btnReiniciarPerdida = $("#btnReiniciarPerdida");
    $(document).ready(function () {


        btnDevolucionesX.click(function () {
            mdlBusquedaDevolucionesX.removeClass("hide");
            btnCancelarEntrada.addClass("hide");
            btnCancelarSalida.addClass("hide");
            btnCancelarDevolucion.addClass("hide");
            btnCancelarPerdida.addClass("hide");

            mdlBusqueda.addClass("hide");
            mdlBusquedaDevoluciones.addClass("hide");
            mdlBusquedaEntrada.addClass("hide");
            mdlBusquedaPerdida.addClass("hide");
            mdlBusquedaSalida.addClass("hide");
            getAlmacenes();
            getDevolucionesX();
            getProyectos();
        });

        btnGuardarDevolucionX.click(function () {
            var frm = new FormData(mdlDevolucionX.find("form")[0]);
            frm.append('IdProyectoT', mdlDevolucionX.find("#IdProyecto option:selected").text());
            frm.append('IdAlmacenT', mdlDevolucionX.find("#IdAlmacen option:selected").text());
            frm.append('Producto', mdlDevolucionX.find("#IdProducto option:selected").text());
            frm.append('MotivoT', mdlDevolucionX.find("#Motivo option:selected").text());
            frm.append('PersonaDetectaT', mdlDevolucionX.find("#PersonaDetecta option:selected").text());
            frm.append('ResponsableT', mdlDevolucionX.find("#Responsable option:selected").text());
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'GUARDANDO...'
            });
            $.ajax({
                url: master_url + 'onGuardarDevolucionX',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                mdlDevolucionX.modal('hide');
                btnDevolucionesX.trigger('click');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DEVOLUCION GUARDADA', 'success');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnComprobante.click(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getComprobanteDeArticulosMaterialesYEquipoDeTrabajo',
                type: "POST"
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'COMPROBANTE DE SALIDA DE ARTÍCULOS, MATERIALES Y EQUIPO DE TRABAJO, GENERADO', 'success');
                console.log(data);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnDevolucionX.click(function () {
            getUsuarios();
            mdlDevolucionX.modal('show');
        });

        btnReporteDePerdidas.click(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getReporteDePerdidas',
                type: "POST",
                data: {
                    INICIO: (mdlBusquedaPerdida.find("#FechaInicial").val() !== '') ? mdlBusquedaPerdida.find("#FechaInicial").val() : '',
                    FIN: (mdlBusquedaPerdida.find("#FechaFinal").val() !== '') ? mdlBusquedaPerdida.find("#FechaFinal").val() : '',
                    PROYECTO: (mdlBusquedaPerdida.find("#IdProyecto").val() !== '') ? mdlBusquedaPerdida.find("#IdProyecto").val() : '',
                    ALMACEN: (mdlBusquedaPerdida.find("#IdAlmacen").val() !== '') ? mdlBusquedaPerdida.find("#IdAlmacen").val() : ''
                }
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE DE PERDIDAS, GENERADO', 'success');
                console.log(data);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnReiniciarPerdida.click(function () {
            onReiniciarPerdidas();
            getProyectosConPerdidas();
            mdlBusquedaPerdida.find("#IdAlmacen").html("");
            onNotify('<span class="fa fa-check fa-lg"></span>', 'PERDIDAS REINICIADAS', 'success');
        });

        btnBuscarPerdidas.click(function () {
            getBuscarPerdidas();
        });

        btnPerdidas.click(function () {
            mdlBusquedaDevolucionesX.addClass("hide");
            mdlBusquedaEntrada.addClass("hide");
            mdlBusquedaSalida.addClass("hide");
            mdlBusqueda.addClass("hide");
            mdlBusquedaDevoluciones.addClass("hide");
            mdlBusquedaPerdida.removeClass("hide");
            getProyectosConPerdidas();
            getPerdidas();
        });

        mdlBusquedaPerdida.find("#IdProyecto").change(function () {
            getAlmacenConPerdidasXProyecto($(this).val());
        });
        mdlPerdida.find("#Cantidad").change(function () {
            var Cantidad = ($(this).val() !== '') ? $(this).val() : 0;
            var Precio = (mdlPerdida.find("#Precio").val() !== '') ? mdlPerdida.find("#Precio").val() : 0;
            mdlPerdida.find("#Total").val(parseFloat(Cantidad) * parseFloat(Precio));
        });
        mdlPerdida.find("#Cantidad").keyup(function () {
            var Cantidad = ($(this).val() !== '') ? $(this).val() : 0;
            var Precio = (mdlPerdida.find("#Precio").val() !== '') ? mdlPerdida.find("#Precio").val() : 0;
            mdlPerdida.find("#Total").val(parseFloat(Cantidad) * parseFloat(Precio));
        });

        mdlPerdida.find("#IdProducto").change(function () {
            getProductoInformacion($(this).val());
        });

        btnGuardarPerdida.click(function () {
            var Cantidad = parseFloat(mdlPerdida.find("#Cantidad").val());
            console.log(Cantidad);
            if (Cantidad > 0 && Cantidad !== undefined && Cantidad !== '') {
                var frm = new FormData(mdlPerdida.find("form")[0]);
                frm.append('AlmacenT', mdlPerdida.find("#IdAlmacen option:selected").text());
                frm.append('ProductoT', mdlPerdida.find("#IdProducto option:selected").text());
                frm.append('TipoT', mdlPerdida.find("#Tipo option:selected").text());
                frm.append('PersonaDetectaT', mdlPerdida.find("#PersonaDetecta option:selected").text());
                frm.append('ResponsableT', mdlPerdida.find("#Responsable option:selected").text());
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'GUARDANDO...'
                });
                $.ajax({
                    url: master_url + 'onGuardarPerdida',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    mdlPerdida.modal('hide');
                    btnPerdidas.trigger('click');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'PERDIDA GUARDADA', 'success');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE INGRESAR UNA CANTIDAD', 'danger');
            }
        });

        mdlDevolucionX.find("#IdProyecto").change(function () {
            getAlmacenesXProyecto($(this).val());
        });
        mdlPerdida.find("#IdProyecto").change(function () {
            getAlmacenesXProyecto($(this).val());
        });

        mdlDevolucionX.find("#IdAlmacen").change(function () {
            getProductosXPerdida($(this).val());
        });
        mdlPerdida.find("#IdAlmacen").change(function () {
            getProductosXPerdida($(this).val());
        });

        btnPerdida.click(function () {
            getUsuarios();
            mdlPerdida.find("input").val("");
            mdlPerdida.find("textarea").val("");
            mdlPerdida.modal('show');
        });

        btnReporteSalidas.click(function () {
            if (mdlBusquedaSalida.find("#cmbProyecto").val() > 0) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                $.ajax({
                    url: master_url + 'getReporteDeSalidas',
                    type: "POST",
                    data: {
                        INICIO: (mdlBusquedaSalida.find("#Inicio").val() !== '') ? mdlBusquedaSalida.find("#Inicio").val() : '',
                        FIN: (mdlBusquedaSalida.find("#Fin").val() !== '') ? mdlBusquedaSalida.find("#Fin").val() : '',
                        PROYECTO: (mdlBusquedaSalida.find("#cmbProyecto").val() > 0) ? mdlBusquedaSalida.find("#cmbProyecto").val() : '',
                        ALMACEN: (mdlBusquedaSalida.find("#cmbAlmacen").val() > 0) ? mdlBusquedaSalida.find("#cmbAlmacen").val() : '',
                        PROVEEDOR: (mdlBusquedaSalida.find("#cmbProveedor").val() > 0) ? mdlBusquedaSalida.find("#cmbProveedor").val() : '',
                        PRODUCTO: mdlBusquedaSalida.find("#cmbProducto") !== '' ? mdlBusquedaSalida.find("#cmbProducto").val() : ''
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    window.open(data, '_blank');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN PROYECTO', 'danger');
            }
        });

        btnReporteEntradas.click(function () {
            if (mdlBusquedaEntrada.find("#cmbProyecto").val() > 0) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                $.ajax({
                    url: master_url + 'getReporteDeEntradas',
                    type: "POST",
                    data: {
                        INICIO: (mdlBusquedaEntrada.find("#Inicio").val() !== '') ? mdlBusquedaEntrada.find("#Inicio").val() : '',
                        FIN: (mdlBusquedaEntrada.find("#Fin").val() !== '') ? mdlBusquedaEntrada.find("#Fin").val() : '',
                        PROYECTO: (mdlBusquedaEntrada.find("#cmbProyecto").val() > 0) ? mdlBusquedaEntrada.find("#cmbProyecto").val() : '',
                        ALMACEN: (mdlBusquedaEntrada.find("#cmbAlmacen").val() > 0) ? mdlBusquedaEntrada.find("#cmbAlmacen").val() : '',
                        PROVEEDOR: (mdlBusquedaEntrada.find("#cmbProveedor").val() > 0) ? mdlBusquedaEntrada.find("#cmbProveedor").val() : '',
                        PRODUCTO: mdlBusquedaEntrada.find("#cmbProducto") !== '' ? mdlBusquedaEntrada.find("#cmbProducto").val() : ''
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    window.open(data, '_blank');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN PROYECTO', 'danger');
            }
        });

        btnResetBuscarEntrada.click(function () {
            mdlBusquedaEntrada.find("select").select2("val", "");
            mdlBusquedaEntrada.find("input").val("");
        });

        btnResetBuscarSalida.click(function () {
            mdlBusquedaSalida.find("select").select2("val", "");
            mdlBusquedaSalida.find("input").val("");
        });

        btnResetBuscarDevoluciones.click(function () {
            mdlBusquedaDevoluciones.find("select").select2("val", "");
            mdlBusquedaDevoluciones.find("input").val("");
        });

        btnCancelarDevolucion.click(function () {
            if (temp !== null, temp !== 0 && temp !== undefined) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                $.ajax({
                    url: master_url + 'onCancelarDevolucion',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    btnDevoluciones.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function ( ) {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnDevoluciones.click(function () {
            entrada = false;
            salida = false;
            mdlBusquedaPerdida.addClass("hide");
            mdlBusquedaDevoluciones.removeClass("hide");
            mdlBusquedaSalida.addClass("hide");
            btnCancelarDevolucion.removeClass("hide");
            divSalidas.addClass("hide");
            divDevoluciones.removeClass("hide");
            btnCancelarSalida.addClass("hide");
            getDevoluciones();
            getProductosConDevolucion();
            getAlmacenesConDevolucion();
            getProyectosConDevolucion();
        });

        btnGuardarDevolucion.click(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'GUARDANDO...'
            });
            var frm = new FormData(mdlDevolucion.find("#frmDevolucion")[0]);
            $.ajax({
                url: master_url + 'onDevolucion',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                console.log(x);
                console.log(jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        CantidadDevuelta.keyup(function () {
            btnGuardarDevolucion.addClass("hide");
            var CantidadSaliente = mdlDevolucion.find("#CantidadSaliente");
            var CantidadNoDevuelta = mdlDevolucion.find("#CantidadNoDevuelta");
            var resumen = 0.0;
            resumen = (parseFloat(CantidadSaliente.val() !== '' ? CantidadSaliente.val() : 0) - parseFloat(CantidadDevuelta.val() !== '' ? CantidadDevuelta.val() : 0));
            if (resumen < 0) {
                onNotify('<span class="fa fa-exclamation"></span>', 'NO SE PUEDE REGRESAR MÁS DE LA CANTIDAD ENTREGADA', 'danger');
                CantidadDevuelta.val("");
                CantidadNoDevuelta.val("");
                ((CantidadNoDevuelta.val() === '') ? btnGuardarDevolucion.addClass("hide") : btnGuardarDevolucion.removeClass("hide").addClass("animated rubberBand"));
            } else {
                CantidadNoDevuelta.val((CantidadDevuelta.val() === '') ? '' : resumen);
                ((CantidadNoDevuelta.val() === '') ? btnGuardarDevolucion.addClass("hide") : btnGuardarDevolucion.removeClass("hide").addClass("animated rubberBand"));
            }
        });

        btnDevolucion.click(function () {
            if (temp !== null, temp !== 0 && temp !== undefined) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                if (salida) {
                    $.ajax({
                        url: master_url + 'getSalidaXID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        var dtm = data[0];
                        $.each(dtm, function (k, v) {
                            mdlDevolucion.find("#" + k).val(v);
                        });
//                    ((mdlDevolucion.find("#CantidadCajas").val() === '' && mdlDevolucion.find("#CantidadCajas").val() === 0) ? mdlDevolucion.find("#CantidadCajas").prop("readonly", false) : mdlDevolucion.find("#CantidadCajas").prop("readonly", true));
                        mdlDevolucion.find("#dProducto").html("<h1 class='font100'>" + dtm.Producto + "</h1>");
                        mdlDevolucion.modal('show');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function ( ) {
                        HoldOn.close();
                    });
                }
                if (entrada) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ENTRADA SELECCIONADA', 'success');
                }
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnProductosAsignados.click(function () {
            mdlBusquedaDevolucionesX.addClass("hide");
            btnCancelarDevolucion.addClass("hide");
            mdlBusqueda.addClass("hide");
            mdlBusquedaEntrada.addClass("hide");
            mdlBusquedaSalida.addClass("hide");

            mdlBusquedaPerdida.addClass("hide");
            btnCancelarEntrada.addClass("hide");
            btnCancelarSalida.addClass("hide");
            btnDevolucion.addClass("hide");
            btnDevoluciones.addClass("hide");
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getProductosXAlmacenAsignados',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var tblName = "tblProductosAsignados";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));
                    $('#' + tblName + ' tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });

                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var row = $(this).find("td");
                        console.log(row);
                        temp = row[0].innerText;
                        console.log('ID ENTRADA: ' + temp);
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });
                } else {
                    $("#rAlmacen").html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnBuscarSalida.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getSalidasXFecha',
                type: "POST",
                dataType: "JSON",
                data: {
                    INICIO: (mdlBusquedaSalida.find("#Inicio").val() !== '') ? mdlBusquedaSalida.find("#Inicio").val() : '',
                    FIN: (mdlBusquedaSalida.find("#Fin").val() !== '') ? mdlBusquedaSalida.find("#Fin").val() : '',
                    PROYECTO: (mdlBusquedaSalida.find("#cmbProyecto").val() > 0) ? mdlBusquedaSalida.find("#cmbProyecto").val() : '',
                    ALMACEN: (mdlBusquedaSalida.find("#cmbAlmacen").val() > 0) ? mdlBusquedaSalida.find("#cmbAlmacen").val() : '',
                    PROVEEDOR: (mdlBusquedaSalida.find("#cmbProveedor").val() > 0) ? mdlBusquedaSalida.find("#cmbProveedor").val() : '',
                    PRODUCTO: mdlBusquedaSalida.find("#cmbProducto") !== '' ? mdlBusquedaSalida.find("#cmbProducto").val() : ''
                }
            }).done(function (data, x, jq) {
                var tblName = "tblSalidas";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));
                    $('#' + tblName + ' tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });

                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var row = $(this).find("td");
                        console.log(row);
                        temp = row[0].innerText;
                        console.log('ID ENTRADA: ' + temp);
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });
                    // Apply the search
                    tblSelected.columns().every(function () {
                        var that = this;
                        $('input', this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                } else {
                    target_result.html("");
                    msgAlmacen.html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnBuscarEntrada.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getEntradasXFecha',
                type: "POST",
                dataType: "JSON",
                data: {
                    INICIO: (mdlBusquedaEntrada.find("#Inicio").val() !== '') ? mdlBusquedaEntrada.find("#Inicio").val() : '',
                    FIN: (mdlBusquedaEntrada.find("#Fin").val() !== '') ? mdlBusquedaEntrada.find("#Fin").val() : '',
                    PROYECTO: (mdlBusquedaEntrada.find("#cmbProyecto").val() > 0) ? mdlBusquedaEntrada.find("#cmbProyecto").val() : '',
                    ALMACEN: (mdlBusquedaEntrada.find("#cmbAlmacen").val() > 0) ? mdlBusquedaEntrada.find("#cmbAlmacen").val() : '',
                    PROVEEDOR: (mdlBusquedaEntrada.find("#cmbProveedor").val() > 0) ? mdlBusquedaEntrada.find("#cmbProveedor").val() : '',
                    PRODUCTO: mdlBusquedaEntrada.find("#cmbProducto") !== '' ? mdlBusquedaEntrada.find("#cmbProducto").val() : ''
                }
            }).done(function (data, x, jq) {
                var tblName = "tblEntradas";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));
                    $('#' + tblName + ' tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });

                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var row = $(this).find("td");
                        console.log(row);
                        temp = row[0].innerText;
                        console.log('ID ENTRADA: ' + temp);
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });
                    // Apply the search
                    tblSelected.columns().every(function () {
                        var that = this;
                        $('input', this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                } else {
                    target_result.html("");
                    msgAlmacen.html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnAsignarX.click(function () {
            $.ajax({
                url: master_url + 'onAsignarX',
                type: "POST"
            }).done(function (data, x, jq) {
                console.log(data);
                console.log(x);
                console.log(jq);

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
            });
        });

        btnSalidasCanceladas.click(function () {

        });

        btnCancelarSalida.click(function () {
            if (temp !== undefined && temp !== null && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                console.log($("table tbody").find("tr.warning td"));
                $.ajax({
                    url: master_url + 'onCancelarSalida',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SALIDA CANCELADA', 'success');
                    btnSalidas.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ESCOGER UNA SALIDA', 'danger');
            }
        });

        btnCancelarEntrada.click(function () {
            if (temp !== undefined && temp !== null && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onBeforeCancelarEntrada',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = parseInt(data[0].SALIDASXENTRADA);
                    console.log('ID DE CANCELACION: ' + temp);
                    if (dtm !== undefined && dtm !== null && dtm !== 'null' && dtm !== '' && dtm === 0) {
                        console.log('CANCELANDO');
                        HoldOn.open({
                            theme: "sk-bounce",
                            message: "POR FAVOR ESPERE..."
                        });
                        $.ajax({
                            url: master_url + 'onCancelarEntrada',
                            type: "POST",
                            data: {
                                ID: temp
                            }
                        }).done(function (data, x, jq) {
                            $.ajax({
                                url: master_url + 'onSendEmailOnCancelarEntrada',
                                type: "POST",
                                data: {
                                    ID: temp
                                }
                            }).done(function (data, x, jq) {
                                console.log(data);
                                btnEntradas.trigger('click');
                                HoldOn.close();
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            });
                            console.log(data, x, jq);
                            onNotify('<span class="fa fa-check fa-lg"></span>', 'ENTRADA CANCELADA', 'success');

                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                        });
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'TIENE QUE CANCELAR LAS SALIDAS RELACIONADAS A ESTA ENTRADA', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ESCOGER UNA ENTRADA, SIN UNA SALIDA', 'danger');
            }
        });


        btnBorrarFiltro.click(function () {
            mdlBusqueda.find("select").select2("val", "");
            mdlBusqueda.find("input[type='text']").val("");
            getAlmacenesConProductos();
            getProductosExistentes();
            getProveedoresExistentes();
            getProyectos();
        });

        btnKardexPDF.click(function () {
            if (mdlBusqueda.hasClass("hide")) {
                mdlBusqueda.find("select").select2("val", "");
                mdlBusqueda.find("input[type='text']").val("");
                getAlmacenesConProductos();
                getProductosExistentes();
                getProveedoresExistentes();
                getProyectos();
            }
            mdlBusquedaDevolucionesX.addClass("hide");
            btnCancelarEntrada.addClass("hide");
            btnCancelarSalida.addClass("hide");
            mdlBusqueda.removeClass("hide");
            mdlBusquedaEntrada.addClass("hide");
            mdlBusquedaSalida.addClass("hide");
            mdlBusquedaPerdida.addClass("hide");
        });

        btnExistencias.click(function () {
            mdlBusquedaDevolucionesX.addClass("hide");
            mdlBusquedaPerdida.addClass("hide");
            mdlBusquedaDevoluciones.addClass("hide");
            mdlBusqueda.addClass("hide");
            mdlBusquedaEntrada.addClass("hide");
            mdlBusquedaSalida.addClass("hide");
            btnCancelarEntrada.addClass("hide");
            btnCancelarSalida.addClass("hide");
            btnDevolucion.addClass("hide");
            btnDevoluciones.addClass("hide");
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            temp = 0;
            var target_result = $("#rAlmacen");
            var msgAlmacen = $("#msgAlmacen");
            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getExistencias',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var tblName = "tblExistencias";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));

                    $('#' + tblName + ' tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });
                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });
                    // Apply the search
                    tblSelected.columns().every(function () {
                        var that = this;
                        $('input', this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                } else {
                    target_result.html("");
                    msgAlmacen.html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnSaveSalida.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            var detalle = [];
            var Recibe = mdlSalida.find("#NombreEntrega");
            var Observaciones = mdlSalida.find("#ObservacionesGenerales");
            var has_rows = false;
            if (Recibe.val() !== '' && Observaciones.val() !== '') {

                mdlSalida.find("table  tbody > tr").each(function (key, value) {
                    $(this).each(function (k, v) {
                        var tr = $(v);
                        var row = $(v).find("td");
                        var txtCajas = (tr.find("#txtCantidadCajasSaliente").val() !== null && tr.find("#txtCantidadCajasSaliente").val() !== undefined && tr.find("#txtCantidadCajasSaliente").val() !== '') ? tr.find("#txtCantidadCajasSaliente").val() : 0;
                        var txtPaquetes = (tr.find("#txtCantidadPaquetesSaliente").val() !== null && tr.find("#txtCantidadPaquetesSaliente").val() !== undefined && tr.find("#txtCantidadPaquetesSaliente").val() !== '') ? tr.find("#txtCantidadPaquetesSaliente").val() : 0;
                        var txtUnidades = (tr.find("#txtCantidadUnidadesSaliente").val() !== null && tr.find("#txtCantidadUnidadesSaliente").val() !== undefined && tr.find("#txtCantidadUnidadesSaliente").val() !== '') ? tr.find("#txtCantidadUnidadesSaliente").val() : 0;
                        if (txtCajas > 0) {
                            has_rows = true;
                            console.log('HAS CAJAS');
                        }
                        if (txtPaquetes > 0) {
                            has_rows = true;
                            console.log('HAS PAQUETES');
                        }
                        if (txtUnidades > 0) {
                            has_rows = true;
                            console.log('HAS UNIDADES');
                        }

                    });
                });
                if (has_rows) {
                    mdlSalida.find("table  tbody > tr").each(function (key, value) {
                        $(this).each(function (k, v) {
                            var tr = $(v);
                            var row = $(v).find("td");
                            var CantidadSaliente = 0.0;
                            if (tr.find("#txtCantidadCajasSaliente").val() > 0) {
                                CantidadSaliente += parseFloat(tr.find("#txtCantidadCajasSaliente").val());
                            }
                            if (tr.find("#txtCantidadPaquetesSaliente").val() > 0) {
                                CantidadSaliente += parseFloat(tr.find("#txtCantidadPaquetesSaliente").val());
                            }
                            if (tr.find("#txtCantidadUnidadesSaliente").val() > 0) {
                                CantidadSaliente += parseFloat(tr.find("#txtCantidadUnidadesSaliente").val());
                            }
                            if (CantidadSaliente > 0) {
                                console.log(row[0].innerText + "," + CantidadSaliente);
                            }
                            if (tr.find("#txtCantidadCajasSaliente").val() > 0
                                    || tr.find("#txtCantidadPaquetesSaliente").val() > 0
                                    || tr.find("#txtCantidadUnidadesSaliente").val() > 0) {
                                var producto = {
                                    IdEntrada: row[0].innerText,
                                    IdProducto: row[2].innerText,
                                    Producto: row[6].innerText,
                                    Condicion: row[4].innerText,
                                    CondicionT: row[8].innerText,
                                    CantidadDisponible: row[10].innerText,
                                    CantidadSaliente: CantidadSaliente,
                                    CantidadRestante: (parseFloat(row[10].innerText) - parseFloat(CantidadSaliente)),
                                    CantidadCajas: (tr.find("#txtCantidadCajasSaliente").val() !== null && tr.find("#txtCantidadCajasSaliente").val() !== undefined && tr.find("#txtCantidadCajasSaliente").val() !== '') ? parseFloat(tr.find("#txtCantidadCajasSaliente").val()) : 0,
                                    CantidadPaquetes: (tr.find("#txtCantidadPaquetesSaliente").val() !== null && tr.find("#txtCantidadPaquetesSaliente").val() !== undefined && tr.find("#txtCantidadPaquetesSaliente").val() !== '') ? parseFloat(tr.find("#txtCantidadPaquetesSaliente").val()) : 0,
                                    CantidadUnidades: (tr.find("#txtCantidadUnidadesSaliente").val() !== null && tr.find("#txtCantidadUnidadesSaliente").val() !== undefined && tr.find("#txtCantidadUnidadesSaliente").val() !== '') ? parseFloat(tr.find("#txtCantidadUnidadesSaliente").val()) : 0,
                                    UnidadMedida: row[9].innerText,
                                    Precio: row[7].innerText,
                                    IdProveedor: row[3].innerText,
                                    ProveedorT: row[5].innerText,
                                    Observaciones: (tr.find("#Observacion").val()).toUpperCase()
                                };
                                detalle.push(producto);
                                console.log('******************************************************************************************************************************************************************************************************************************');
                                console.log(producto);
                                console.log('******************************************************************************************************************************************************************************************************************************');
                            }
                        });
                    });
                    var frm = new FormData(mdlSalida.find("#frmSalida")[0]);
                    frm.append('DETALLE', JSON.stringify(detalle));
                    frm.append('ConceptoT', mdlSalida.find("#Concepto option:selected").text());
                    $.ajax({
                        url: master_url + 'onAddSalida',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        console.log(data, x, jq);
                        mdlSalida.modal('hide');
                        btnSalidas.trigger('click');
                        onNotify('<span class="fa fa-check success-icon fa-lg"></span>', 'INFORMACIÓN INGRESADA CON EXITO', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    HoldOn.close();
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE INGRESAR AL MENOS UNA CANTIDAD EN LOS PRODUCTOS DISPONIBLES', 'danger');
                }
            } else {
                HoldOn.close();
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE INGRESAR AL MENOS UN NOMBRE Y UNA OBSERVACION.', 'danger');
            }
        });

        btnSalidas.click(function () {
            entrada = false;
            salida = true;
            mdlBusquedaDevolucionesX.addClass("hide");
            mdlBusquedaDevoluciones.addClass("hide");
            btnCancelarDevolucion.addClass("hide");
            divSalidas.removeClass("hide");
            divDevoluciones.addClass("hide");
            btnDevolucion.removeClass("hide");
            btnDevoluciones.removeClass("hide");
            mdlBusqueda.addClass("hide");
            mdlBusquedaEntrada.addClass("hide");
            mdlBusquedaSalida.removeClass("hide");
            btnCancelarSalida.removeClass("hide");
            btnCancelarEntrada.addClass("hide");
            mdlBusquedaSalida.find("select").select2("val", "");
            mdlBusquedaSalida.find("input[type='text']").val("");
            getAlmacenesConProductos();
            getProductosExistentes();
            getProveedoresExistentes();
            getProyectos();
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            temp = 0;
//            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getSalidas',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var tblName = "tblEntradas";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));
                    $('#' + tblName + ' tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });
                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        temp = parseInt($(this).find("td")[0].innerText);
                        console.log($(this).find("td")[0].innerText);
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });// Apply the search
                    tblSelected.columns().every(function () {
                        var that = this;
                        $('input', this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                } else {
                    target_result.html("");
                    msgAlmacen.html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEntradas.click(function () {
            entrada = true;
            salida = false;
            mdlBusquedaDevolucionesX.addClass("hide");
            mdlBusquedaPerdida.addClass("hide");
            btnCancelarDevolucion.addClass("hide");
            mdlBusquedaDevoluciones.addClass("hide");
            btnDevolucion.addClass("hide");
            btnDevoluciones.addClass("hide");
            mdlBusqueda.addClass("hide");
            mdlBusquedaEntrada.removeClass("hide");
            mdlBusquedaSalida.addClass("hide");
            btnCancelarEntrada.removeClass("hide");
            btnCancelarSalida.addClass("hide");
            mdlBusquedaEntrada.find("select").select2("val", "");
            mdlBusquedaEntrada.find("input[type='text']").val("");
            getAlmacenesConProductos();
            getProductosExistentes();
            getProveedoresExistentes();
            getProyectos();
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            temp = 0;
            var target_result = $("#rAlmacen");
            var msgAlmacen = $("#msgAlmacen");
//            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getEntradas',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var tblName = "tblEntradas";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));
                    $('#' + tblName + ' tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                    });

                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var row = $(this).find("td");
                        console.log(row);
                        temp = row[0].innerText;
                        console.log('ID ENTRADA: ' + temp);
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });
                    // Apply the search
                    tblSelected.columns().every(function () {
                        var that = this;
                        $('input', this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                } else {
                    target_result.html("");
                    msgAlmacen.html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        mdlSalidaConcepto.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getExistenciasPorAlmacen',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlSalidaIdAlmacen.val()
                }
            }).done(function (data, x, jq) {

                console.log('EXITO');
                console.log(data, x, jq);
                if (data.length > 0) {
                    mdlSalida.find("#tblResult").html(getTable("tblExistenciasXAlmacen", data));
                    var head = mdlSalida.find("#tblResult").find("thead th");
                    var body = mdlSalida.find("#tblResult").find("tbody tr");
                    var foot = mdlSalida.find("#tblResult").find("tfoot th");
                    body.each(function (k, v) {
                        var row = $(v).find("td");
                        $(row[0]).addClass("hide");
                        $(row[1]).addClass("hide");
                        $(row[2]).addClass("hide");
                        $(row[3]).addClass("hide");
                        $(row[4]).addClass("hide");
                    });
                    $(head[0]).addClass("hide");
                    $(head[1]).addClass("hide");
                    $(head[2]).addClass("hide");
                    $(head[3]).addClass("hide");
                    $(head[4]).addClass("hide");
                    $(foot[0]).addClass("hide");
                    $(foot[1]).addClass("hide");
                    $(foot[2]).addClass("hide");
                    $(foot[3]).addClass("hide");
                    $(foot[4]).addClass("hide");
                    var sts = "";
                    mdlSalida.find("#tblResult table > thead > tr").append("<th>CANTIDAD EN CAJAS</th>");
                    mdlSalida.find("#tblResult table > thead > tr").append("<th>CANTIDAD EN PAQUETES</th>");
                    mdlSalida.find("#tblResult table > thead > tr").append("<th>CANTIDAD EN UNIDADES</th>");
                    mdlSalida.find("#tblResult table > thead > tr").append("<th>OBSERVACIONES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    sts += "<td>";
                    sts += "<label for=\"\">CAJAS</label>";
                    sts += "<input type=\"number\" class=\"form-control\" placeholder=\"0\" onchange=\"onCalcularCajas(this)\" id=\"txtCantidadCajasSaliente\" name=\"txtCantidadCajasSaliente\" min=\"0\" >";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<label for=\"\">PAQUETES</label>";
                    sts += "<input type=\"number\" class=\"form-control\"  placeholder=\"0\" onchange=\"onCalcularPaquetes(this)\" id=\"txtCantidadPaquetesSaliente\" name=\"txtCantidadPaquetesSaliente\" min=\"0\" >";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<label for=\"\">UNIDADES</label>";
                    sts += "<input type=\"number\" class=\"form-control\" placeholder=\"0\" onchange=\"onCalcularUnidades(this)\" id=\"txtCantidadUnidadesSaliente\" name=\"txtCantidadUnidadesSaliente\" min=\"0\" >";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"text\" class=\"form-control\" id=\"Observacion\" name=\"Observacion\" placeholder=\"ESCRIBA SU HISTORIA...\" />";
                    sts += "</td>";
                    mdlSalida.find("#tblResult table > tbody > tr").append(sts);
                    mdlSalida.find("#tblResult table > tfoot > tr").append("<th>CANTIDAD EN CAJAS</th>");
                    mdlSalida.find("#tblResult table > tfoot > tr").append("<th>CANTIDAD EN PAQUETES</th>");
                    mdlSalida.find("#tblResult table > tfoot > tr").append("<th>CANTIDAD EN UNIDADES</th>");
                    mdlSalida.find("#tblResult table > tfoot > tr").append("<th>OBSERVACIONES</th>");
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO HAY ARTICULOS DISPONIBLES EN ESTE ALMACEN', 'danger');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO HAY ARTICULOS DISPONIBLES EN ESTE ALMACEN', 'danger');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO HAY ARTICULOS DISPONIBLES EN ESTE ALMACEN', 'danger');
                }
            }).fail(function (x, y, z) {
                console.log('FAIL');
                console.log(x, y, z);
                mdlSalida.find("#msgResult").html(x.responseText);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnSalida.click(function () {
            console.log('ok');
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            dd = (dd < 10) ? '0' + dd : dd;
            mm = (mm < 10) ? '0' + mm : mm;
            today = dd + '/' + mm + '/' + yyyy;
            getAlmacenesConProductos();
            mdlSalida.find("#FechaEgreso").val(today);
            mdlSalida.find("#tblResult").html("");
            mdlSalida.modal('show');
        });

        btnSaveEntrada.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var frm = new FormData(mdlEntrada.find("#frmEntrada")[0]);
            var detalle = [];
            var n = 0;
            var nx = 0;
            var is_valid = false;
            mdlEntrada.find("#tblResult  tbody > tr").each(function (key, value) {
                $(this).each(function (k, v) {
                    var rowx = $(v).find("td");
                    console.log('POSICIONES');
                    console.log(rowx);
                    if (mdlEntrada.find("#IdAlmacen").val() !== '' && $(v).find("#Condicion").val() !== '' && ($(v).find("#CantidadEntrante").val()) > 0 && $(v).find("#Aprobado")[0].checked) {
                        if ($(v).find("#Aprobado")[0].checked) {
                            is_valid = true;
                            n += 1;
                            var producto = {
                                IdOCP: rowx[0].innerText,
                                IdProveedor: rowx[1].innerText,
                                ProveedorT: mdlEntrada.find("#Proveedor").val(),
                                IdProducto: (rowx[3] !== undefined) ? rowx[3].innerText : '',
                                Producto: rowx[4].innerText,
                                Condicion: ($(v).find("#Condicion").val() !== '') ? $(v).find("#Condicion").val() : '',
                                CondicionT: ($(v).find("#Condicion option:selected").text() !== '') ? $(v).find("#Condicion option:selected").text() : '',
                                Unidad: rowx[5].innerText,
                                Cantidad: rowx[6].innerText,
                                CantidadExacta: ($(v).find("#CantidadExacta").val() !== '') ? $(v).find("#CantidadExacta").val() : 0,
                                Precio: rowx[7].innerText,
                                TipoEntrada: ($(v).find("#TipoEntrada option:selected").text() !== '') ? $(v).find("#TipoEntrada option:selected").text() : '',
                                Cajas: $(v).find("#CantidadExactaCajas").val(),
                                Paquetes: $(v).find("#CantidadExactaPaquete").val(),
                                Unidades: $(v).find("#CantidadExactaUnidad").val(),
                                Observaciones: ($(v).find("#ObservacionesD").val() !== '') ? $(v).find("#ObservacionesD").val() : '',
                                CantidadEntrante: ($(v).find("#CantidadEntrante").val() !== '') ? $(v).find("#CantidadEntrante").val() : ''
                            };
                            if ($(v).find("#rDocumento")[0].files[0] !== undefined && $(v).find("#rDocumento")[0].files[0] !== null) {
                                frm.append('DETALLEF[]', $(v).find("#rDocumento")[0].files[0], $(v).find("#rDocumento")[0].files[0].name);
                                /*https://developer.mozilla.org/en-US/docs/Web/API/FormData/append*/
                                detalle.push(producto);
                            } else {
                                frm.append('DETALLEF[]', base_url + 'media/si.png', 'si.png');
                                detalle.push(producto);
                            }
                        }
                    }
                    nx = n;
                    n = 0;
                    $(this).each(function (k, v) {
                        if (mdlEntrada.find("#IdAlmacen").val() !== '' && $(v).find("#Condicion").val() !== '' && ($(v).find("#CantidadEntrante").val()) > 0 && $(v).find("#Aprobado")[0].checked) {
                            if ($(v).find("#Aprobado")[0].checked) {
                                n += 1;
                            }
                        }
                    });
                    if (n > 0) {
                        var msg = '<div class="alert alert-dismissible alert-danger">\n\
                        <button type="button" class="close" data-dismiss="alert">&times;</button>';
                        msg += '<h1>LA INFORMACIÓN QUE ESTA INTRODUCIENDO ES INVÁLIDA O NO SE ADMITE EN EL SISTEMA, INTENTE DE NUEVO O MÁS TARDE</h1>';
                        if (mdlEntrada.find("#IdAlmacen").val() === '') {
                            msg += '<br>-ALMACEN';
                            console.log('---------------------------------------');
                            console.log(mdlEntrada.find("#IdAlmacen").val());
                            is_valid = (is_valid) ? is_valid : false;
                            console.log('---------------------------------------');
                        }
                        if ($(v).find("#Condicion").val() === '') {
                            msg += '<br>-CONDICION';
                            is_valid = (is_valid) ? is_valid : false;
                        }
                        if ($(v).find("#CantidadEntrante").val() === '') {
                            msg += '<br>-CANTIDAD ENTRANTE';
                            is_valid = (is_valid) ? is_valid : false;
                        }
                        msg += '</div>';
                        mdlEntrada.find("#msgResult").html(msg);
                    }
                    n = nx;
                });
            });
            frm.append('DETALLE', JSON.stringify(detalle));
            frm.append('RecibeAlmacenT', mdlEntrada.find("#RecibeAlmacen option:selected").text());
            if (n > 0 && mdlEntrada.find("#RecibeAlmacen").val() !== '' && is_valid) {
                $.ajax({
                    url: master_url + 'onAddEntrada',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    mdlEntrada.modal('hide');
                    btnEntradas.trigger('click');
                    onNotify('<span class="fa fa-check success-icon fa-lg"></span>', 'INFORMACIÓN INGRESADA CON EXITO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                console.log("N: " + n);
                console.log("RECIBE ALMACEN: " + mdlEntrada.find("#RecibeAlmacen").val());
                console.log("IS VALID: " + is_valid);
                mdlEntrada.find("#msgResult").html('<div class="alert alert-dismissible alert-danger">\n\
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                                                    <h1>DEBE DE SELECCIONAR AL MENOS UN PRODUCTO</h1>\n\
                </div>');
                HoldOn.close();
            }
        });

        $(".modal #IdAlmacen").change(function () {
            mdlEntrada.find("#tblResult").html("");
            mdlEntrada.find("#Proveedor").val("");
            IdOrdenDeCompramdlEntrada.select2("val", "");
            mdlEntrada.find("#IdOrdenDeCompra").select2("val", "");
            mdlDevolucion.find("#IdOrdenDeCompra").select2("val", "");
            console.log('ID ALMACEN');
            console.log($(this).val());
            getOrdenesDeCompra($(this).val());
        });

        mdlDevolucion.find("#IdOrdenDeCompra").change(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getOrdenesDeCompraByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlDevolucion.find("#IdOrdenDeCompra").val()
                }
            }).done(function (data, x, jq) {

                console.log(data, x, jq);
                var dtm = data[0];
                if (dtm !== undefined && dtm !== null) {
                    mdlDevolucion.find("#ReferenciaOC").val(dtm.NUMERO);
                    mdlDevolucion.find("#Proveedor").val(dtm.PROVEEDOR);
                    mdlDevolucion.find("#tblResult").html(getTable("tblProductosXOC", data));
                    var head = mdlDevolucion.find("#tblResult").find("thead th");
                    var body = mdlDevolucion.find("#tblResult").find("tbody tr");
                    var foot = mdlDevolucion.find("#tblResult").find("tfoot th");
                    console.log(body);
                    body.each(function (k, v) {
                        var row = $(v).find("td");
                        $(row[0]).addClass("hide");
                        $(row[1]).addClass("hide");
                        $(row[2]).addClass("hide");
                        $(row[3]).addClass("hide");
                        $(row[9]).addClass("hide");
                        $(row[10]).addClass("hide");
                        $(row[11]).addClass("hide");
                    });
                    $(head[0]).addClass("hide");
                    $(head[1]).addClass("hide");
                    $(head[3]).addClass("hide");
                    $(head[2]).addClass("hide");
                    $(head[9]).addClass("hide");
                    $(head[10]).addClass("hide");
                    $(head[11]).addClass("hide");
                    $(foot[0]).addClass("hide");
                    $(foot[1]).addClass("hide");
                    $(foot[4]).addClass("hide");
                    $(foot[3]).addClass("hide");
                    $(foot[9]).addClass("hide");
                    $(foot[10]).addClass("hide");
                    $(foot[11]).addClass("hide");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th>ESTATUS (ARTICULO)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th>CANTIDAD ENTRANTE</th>");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th>FORMA DE ENTRADA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th id=\"thUnidad\">UNIDADES EXACTAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th>OBSERVACIONES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th>FOTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlDevolucion.find("#tblResult table > thead > tr").append("<th>APROBAR<input type=\"checkbox\" id=\"AprobadoT\" name=\"AprobadoT\" class=\"form-control\"></th>");
                    var sts = "<td>";
                    sts += "<select id=\"Condicion\" name=\"Condicion\" class=\"form-control\">";
                    sts += "<option></option>";
                    sts += "<option value=\"1\">BUEN ESTADO(SELLADO)</option>";
                    sts += "<option value=\"2\">MAL ESTADO</option>";
                    sts += "<option value=\"3\">BUEN ESTADO (ABIERTO)</option>";
                    sts += "<option value=\"4\">MAL ESTADO(ROTO)</option>";
                    sts += "</select>";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"number\" id=\"CantidadEntrante\" name=\"CantidadEntrante\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<select id=\"TipoEntrada\" name=\"TipoEntrada\" class=\"form-control\" onchange=\"setType(this)\">";
                    sts += "<option></option>";
                    sts += "<option value=\"1\">UNIDAD</option>";
                    sts += "<option value=\"2\">PAQUETE</option>";
                    sts += "<option value=\"3\">CAJA</option>";
                    sts += "</select>";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<label for=\"\">CAJAS</label>";
                    sts += "<input type=\"number\" id=\"CantidadExactaCajas\" name=\"CantidadExactaCajas\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "<label for=\"\">PAQUETES</label>";
                    sts += "<input type=\"number\" id=\"CantidadExactaPaquete\" name=\"CantidadExactaPaquete\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "<label for=\"\">UNIDADES</label>";
                    sts += "<input type=\"number\" id=\"CantidadExactaUnidad\" name=\"CantidadExactaUnidad\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"text\" id=\"ObservacionesD\" name=\"ObservacionesD\" class=\"form-control\" placeholder=\"OBSERVACIONES DEL ARTICULO\">";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"file\" class=\"form-control hide\" id=\"rDocumento\" name=\"rDocumento[]\"> <div id=\"rDocumentoDisplay\" width=\"96\" height=\"96\"><img src=\"";
                    sts += (base_url + 'media/si.png');
                    sts += "\"></div> <button type=\"button\" class=\"btn btn-default\" onclick=\"onUpload(this)\"><span class=\"fa fa-arrow-up fa-3x white-icon\"></span></button>";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"checkbox\" id=\"Aprobado\" name=\"Aprobado\" class=\"form-control\">";
                    sts += "</td>";
                    mdlDevolucion.find("#tblResult table > tbody > tr").append(sts);
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th>ESTATUS (ARTICULO)</th>");
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th>CANTIDAD ENTRANTE</th>");
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th>FORMA DE ENTRADA</th>");
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th id=\"thUnidad\">UNIDADES EXACTAS</th>");
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th>OBSERVACIONES</th>");
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th>FOTO</th>");
                    mdlDevolucion.find("#tblResult table > tfoot > tr").append("<th>APROBAR</th>");
                    mdlDevolucion.find("#tblResult #AprobadoT").change(function () {
                        if ($(this)[0].checked) {
                            console.log('APROBADOS');
                            mdlDevolucion.find("#tblResult table > tbody > tr").each(function (k, v) {
                                var row = $(v).find("td");
                                $(row).find("#Aprobado")[0].checked = true;
                            });
                        } else {
                            mdlDevolucion.find("#tblResult table > tbody > tr").each(function (k, v) {
                                var row = $(v).find("td");
                                $(row).find("#Aprobado")[0].checked = false;
                            });
                            console.log('NO APROBADOS');
                        }
                    });
                } else {

                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        IdOrdenDeCompramdlEntrada.change(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getOrdenesDeCompraByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdOrdenDeCompramdlEntrada.val()
                }
            }).done(function (data, x, jq) {

                console.log(data, x, jq);
                var dtm = data[0];
                if (dtm !== undefined && dtm !== null) {

                    mdlEntrada.find("#ReferenciaOC").val(dtm.NUMERO);
                    mdlEntrada.find("#Proveedor").val(dtm.PROVEEDOR);
                    mdlEntrada.find("#tblResult").html(getTable("tblProductosXOC", data));
                    var head = mdlEntrada.find("#tblResult").find("thead th");
                    var body = mdlEntrada.find("#tblResult").find("tbody tr");
                    var foot = mdlEntrada.find("#tblResult").find("tfoot th");
                    console.log(body);
                    body.each(function (k, v) {
                        var row = $(v).find("td");
                        $(row[0]).addClass("hide");
                        $(row[1]).addClass("hide");
                        $(row[2]).addClass("hide");
                        $(row[3]).addClass("hide");
                        $(row[9]).addClass("hide");
                        $(row[10]).addClass("hide");
                        $(row[11]).addClass("hide");
                    });
                    $(head[0]).addClass("hide");
                    $(head[1]).addClass("hide");
                    $(head[3]).addClass("hide");
                    $(head[2]).addClass("hide");
                    $(head[9]).addClass("hide");
                    $(head[10]).addClass("hide");
                    $(head[11]).addClass("hide");
                    $(foot[0]).addClass("hide");
                    $(foot[1]).addClass("hide");
                    $(foot[4]).addClass("hide");
                    $(foot[3]).addClass("hide");
                    $(foot[9]).addClass("hide");
                    $(foot[10]).addClass("hide");
                    $(foot[11]).addClass("hide");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th>ESTATUS (ARTICULO)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th>CANTIDAD ENTRANTE</th>");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th>FORMA DE ENTRADA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th id=\"thUnidad\">UNIDADES EXACTAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th>OBSERVACIONES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th>FOTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>");
                    mdlEntrada.find("#tblResult table > thead > tr").append("<th>APROBAR<input type=\"checkbox\" id=\"AprobadoT\" name=\"AprobadoT\" class=\"form-control\"></th>");
                    var sts = "<td>";
                    sts += "<select id=\"Condicion\" name=\"Condicion\" class=\"form-control\">";
                    sts += "<option></option>";
                    sts += "<option value=\"1\">BUEN ESTADO(SELLADO)</option>";
                    sts += "<option value=\"2\">MAL ESTADO</option>";
                    sts += "<option value=\"3\">BUEN ESTADO (ABIERTO)</option>";
                    sts += "<option value=\"4\">MAL ESTADO(ROTO)</option>";
                    sts += "</select>";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"number\" id=\"CantidadEntrante\" name=\"CantidadEntrante\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<select id=\"TipoEntrada\" name=\"TipoEntrada\" class=\"form-control\" onchange=\"setType(this)\">";
                    sts += "<option></option>";
                    sts += "<option value=\"1\">UNIDAD</option>";
                    sts += "<option value=\"2\">PAQUETE</option>";
                    sts += "<option value=\"3\">CAJA</option>";
                    sts += "</select>";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<label for=\"\">CAJAS</label>";
                    sts += "<input type=\"number\" id=\"CantidadExactaCajas\" name=\"CantidadExactaCajas\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "<label for=\"\">PAQUETES</label>";
                    sts += "<input type=\"number\" id=\"CantidadExactaPaquete\" name=\"CantidadExactaPaquete\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "<label for=\"\">UNIDADES</label>";
                    sts += "<input type=\"number\" id=\"CantidadExactaUnidad\" name=\"CantidadExactaUnidad\" class=\"form-control\" placeholder=\"0\" min=\"0\">";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"text\" id=\"ObservacionesD\" name=\"ObservacionesD\" class=\"form-control\" placeholder=\"OBSERVACIONES DEL ARTICULO\">";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"file\" class=\"form-control hide\" id=\"rDocumento\" name=\"rDocumento[]\"> <div id=\"rDocumentoDisplay\" width=\"96\" height=\"96\"><img src=\"";
                    sts += (base_url + 'media/si.png');
                    sts += "\"></div> <button type=\"button\" class=\"btn btn-default\" onclick=\"onUpload(this)\"><span class=\"fa fa-arrow-up fa-3x white-icon\"></span></button>";
                    sts += "</td>";
                    sts += "<td>";
                    sts += "<input type=\"checkbox\" id=\"Aprobado\" name=\"Aprobado\" class=\"form-control\">";
                    sts += "</td>";
                    mdlEntrada.find("#tblResult table > tbody > tr").append(sts);
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th>ESTATUS (ARTICULO)</th>");
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th>CANTIDAD ENTRANTE</th>");
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th>FORMA DE ENTRADA</th>");
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th id=\"thUnidad\">UNIDADES EXACTAS</th>");
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th>OBSERVACIONES</th>");
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th>FOTO</th>");
                    mdlEntrada.find("#tblResult table > tfoot > tr").append("<th>APROBAR</th>");
                    mdlEntrada.find("#tblResult #AprobadoT").change(function () {
                        if ($(this)[0].checked) {
                            console.log('APROBADOS');
                            mdlEntrada.find("#tblResult table > tbody > tr").each(function (k, v) {
                                var row = $(v).find("td");
                                $(row).find("#Aprobado")[0].checked = true;
                            });
                        } else {
                            mdlEntrada.find("#tblResult table > tbody > tr").each(function (k, v) {
                                var row = $(v).find("td");
                                $(row).find("#Aprobado")[0].checked = false;
                            });
                            console.log('NO APROBADOS');
                        }
                    });
                } else {

                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEntrada.click(function () {
            getAlmacenesConProductos();
            mdlEntrada.find("#IdOrdenDeCompra").html("");
            mdlEntrada.find("#tblResult").html("");
            mdlEntrada.modal('show');
        });

        btnMovimientos.click(function () {
            btnDevolucion.addClass("hide");
            btnDevoluciones.addClass("hide");
            console.log('Consultando Movimientos...');
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            temp = 0;
            var target_result = $("#rAlmacen");
            var msgAlmacen = $("#msgAlmacen");
//            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getMovimientos',
                type: "POST",
                dataType: "JSON"
            }).done(function (data, x, jq) {
                var tblName = "tblMovimientos";
                if (data.length > 0) {
                    target_result.html(getTable(tblName, data));
                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    //CLICK SELECTED ROW
                    $('#' + tblName + ' tbody').on('click', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("success");
                        $("#" + tblName).find("tr").removeClass("warning");
                        //                console.log(this)
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                    });
                    //DB CLICK FOR EDIT
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                    });
                } else {
                    target_result.html("");
                    msgAlmacen.html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                            '</div>');
                    HoldOn.close();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        mdlNuevoMovimientoIdProveedor.change(function () {
            getProductosXAlmacenXProveedor();
        });

        mdlNuevoMovimientoIdAlmacen.change(function () {
            getTiposDeViviendas();
            getProveedoresXAlmacen();
            getProductosXAlmacen();
        });

        mdlNuevoMovimientobtnSave.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO..."
            });
            var IdAlmacen = mdlNuevoMovimiento.find("#IdAlmacen").val();
            var IdProducto = mdlNuevoMovimiento.find("#IdProducto").val();
            var IdProveedor = mdlNuevoMovimiento.find("#IdProveedor").val();
            var Forma = mdlNuevoMovimiento.find("#Forma").val();
            var Condicion = mdlNuevoMovimiento.find("#Condicion").val();
            var Cantidad = mdlNuevoMovimiento.find("#Cantidad").val();
            var UnidadMedida = mdlNuevoMovimiento.find("#UnidadMedida").val();
            var UnidadMedida = mdlNuevoMovimiento.find("#UnidadMedida").val();
            var UnidadMedida = mdlNuevoMovimiento.find("#UnidadMedida").val();
            if (IdAlmacen !== '' && IdAlmacen.length > 0 && IdProducto !== '' && IdProducto.length > 0 &&
                    IdProveedor !== '' && IdProveedor.length > 0 && Cantidad !== '' && Cantidad.length > 0 &&
                    Forma !== '' && Forma.length > 0 && Condicion !== '' && Condicion.length > 0 &&
                    UnidadMedida !== '' && UnidadMedida.length > 0) {
                var frm = new FormData(mdlNuevoMovimiento.find("#frmNuevo")[0]);
                frm.append('Producto', mdlNuevoMovimiento.find("#IdProducto option:selected").text());
                frm.append('CondicionT', mdlNuevoMovimiento.find("#Condicion option:selected").text());
                frm.append('FormaT', mdlNuevoMovimiento.find("#Forma option:selected").text());
                frm.append('TipoViviendaT', mdlNuevoMovimiento.find("#TipoVivienda option:selected").text());
                frm.append('ProcedenciaT', mdlNuevoMovimiento.find("#Procedencia option:selected").text());
                frm.append('ProveedorT', mdlNuevoMovimiento.find("#IdProveedor option:selected").text());
                frm.append('RecibeAlmacenT', mdlNuevoMovimiento.find("#RecibeAlmacen option:selected").text());
                $.ajax({
                    url: master_url + 'onAddMovimientosXAlmacen',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    //                btnVerSembradoViviendas.trigger('click');
                    //                mdlNuevoMovimiento.modal('hide');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('OK');
                    HoldOn.close();
                });
            } else {
                var r = '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
                r += '<H2>FALTAN DATOS POR CAPTURAR</H2>';
                if (IdAlmacen === '' && IdAlmacen.length <= 0) {
                    r += '<p>* ALMACÉN DE RESGUARDO: SIN CAPTURAR</p>';
                }
                if (IdProducto === '' && IdProducto.length <= 0) {
                    r += '<p>* PRODUCTO: SIN CAPTURAR</p>';
                }
                if (IdProveedor === '' && IdProveedor.length <= 0) {
                    r += '<p>* PROVEEDOR: SIN CAPTURAR</p>';
                }
                if (Condicion === '' && Condicion.length <= 0) {
                    r += '<p>* CONDICIONES DEL ARTICULO: SIN CAPTURAR</p>';
                }
                if (Forma === '' && Forma.length <= 0) {
                    r += '<p>* TIPO DE MOVIMIENTO: SIN CAPTURAR</p>';
                }
                if (Cantidad === '' && Cantidad.length <= 0) {
                    r += '<p>* NÚMERO DE UNIDADES INGRESADAS: SIN CAPTURAR</p>';
                }
                if (UnidadMedida === '' && UnidadMedida.length <= 0) {
                    r += '<p>* UNIDAD: SIN CAPTURAR</p>';
                }
                r += '</div>';
                mdlNuevoMovimiento.find("#msgResult").html(r);
                HoldOn.close();
            }
        });

        mdlAsignacionbtnTrash.click(function () {
            mdlAsignacionIdAlmacen.select2("val", "");
            mdlAsignacionIdProveedor.select2("val", "");
            mdlAsignacion.find("#tblProductosAsignados tbody").empty();
        });

        mdlAsignacionIdProveedor.change(function () {
            mdlAsignacion.find("#tblProductosAsignados tbody").empty();
            mdlAsignacion.find("#dtblProductos").removeClass("hide");
            mdlAsignacion.find("#dtblProductosAsignados").removeClass("hide");
            getProductosAsignadosXAlmacenXProveedor();
        });

        mdlAsignacionIdAlmacen.change(function () {
            getProductosSinAsignarXAlmacen();
            getProductosAsignadosXAlmacen();
        });

        btnSaveAsignacion.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO..."
            });
            mdlAsignacion.find("#tblProductosAsignados  tbody > tr").each(function (key, value) {
                $(this).each(function (k, v) {
                    var rowx = $(v).find("td");
                    if (rowx[3] === undefined) {
                        tf = true;
                    }
                });
            });
            var frm = new FormData(mdlAsignacion.find("#frmAsignacion")[0]);
            var detalle = [];
            mdlAsignacion.find("#tblProductosAsignados  tbody > tr").each(function (key, value) {
                $(this).each(function (k, v) {
                    var rowx = $(v).find("td");
                    var producto = {
                        ID: (rowx[4] !== undefined) ? rowx[4].innerText : '',
                        IdProducto: rowx[0].innerText,
                        ProductoT: rowx[1].innerText,
                        Proveedor: (mdlAsignacion.find("#IdProveedor option:selected").text() !== '') ? mdlAsignacion.find("#IdProveedor option:selected").text() : '',
                        Estatus: (rowx[3] !== undefined) ? rowx[3].innerText : ''
                    };
                    detalle.push(producto);
                });
            });
            frm.append('DETALLE', JSON.stringify(detalle));
            frm.append('TipoT', mdlAsignacion.find("#Tipo option:selected").text());
            $.ajax({
                url: master_url + 'onAddProductosXAlmacen',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                //                btnVerSembradoViviendas.trigger('click');
                mdlAsignacion.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        mdlNuevo.on('show.bs.modal', function () {
            getProyectos();
            getPaises();
        });

        btnAgregarTodos.click(function () {
            console.log('AGREGANDO...');
            onAddAsignados();
        });

        btnRemoverTodos.click(function () {
            onRemoveAsignados();
        });

        var search = $("#txtSearch");

        search.keyup(function () {
            if ($(this).val() !== '') {
                $("#tblProductos tbody tr").addClass("hide");
                var modules = $("#tblProductos tbody").find("tr");
                $.each(modules, function (k, v) {
                    var cell = $(v).find("td");
                    var producto = $(v).find("td")[1].innerText;
                    if (producto.includes(search.val().toUpperCase())) {
                        cell.parent().removeClass("hide").addClass("unhide");
                    } else {
                        cell.parent().removeClass("unhide");
                    }
                });
            } else {
                $("#tblProductos tbody tr").removeClass("hide");
            }
            var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
            nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA ENCONTRADA" : nrow + " FILAS ENCONTRADAS") + "</span>");
        });

        var searchA = $("#txtSearchA");

        searchA.keyup(function () {
            if ($(this).val() !== '') {
                $("#tblProductosAsignados tbody tr").addClass("hide");
                var modules = $("#tblProductosAsignados tbody").find("tr");
                $.each(modules, function (k, v) {
                    var cell = $(v).find("td");
                    var producto = $(v).find("td")[1].innerText;
                    if (producto.includes(searchA.val().toUpperCase())) {
                        cell.parent().removeClass("hide").addClass("unhide");
                    } else {
                        cell.parent().removeClass("unhide");
                    }
                });
            } else {
                $("#tblProductosAsignados tbody tr").removeClass("hide");
            }
            var nrow = (parseInt($("#tblProductosAsignados tbody tr").length) - parseInt($("#tblProductosAsignados tbody tr.hide").length));
            nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA ENCONTRADA" : nrow + " FILAS ENCONTRADAS") + "</span>");
        });

        mdlAsignacion.on('hidden.bs.modal', function () {
            mdlAsignacion.find("#tblProductosAsignados tbody").empty();
            mdlAsignacion.find("#tblProductos tbody").empty();
        });

        btnAsignar.click(function () {
            mdlAsignacion.modal('show');
        });

        btnNuevoMovimiento.click(function () {
            mdlNuevoMovimiento.modal("show");
        });

        Pais.change(function () {
            getEstadosXPais();
        });

        mdlModificar.find("#PaisU").change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getEstadosXPais',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlModificar.find("#PaisU").val()
                }
            }).done(function (data, x, jq) {
                //            console.log(data);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.ESTADO + '</option>';
                });
                mdlModificar.find("#EstadoU").html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        Estado.change(function () {
            getMunicipiosXEstado();
        });

        mdlModificar.find("#EstadoU").change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getMunicipiosXEstado',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlModificar.find("#EstadoU").val()
                }
            }).done(function (data, x, jq) {
                //            console.log(data);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MUNICIPIO + '</option>';
                });
                mdlModificar.find("#MunicipioU").html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnRefresh.click(function () {
            onRefresh();
        });

        btnEditar.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && parseInt(temp) > 0) {
                getPaises();
                mdlModificar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnSave.click(function () {
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    mdlNuevo.modal('hide');
                    btnRefresh.trigger('click');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnSaveU.click(function () {
            var frm = mdlModificar.find("#frmModificar");
            $.ajax({
                url: master_url + 'onUpdate',
                type: "POST",
                data: frm.serialize()
            }).done(function (data, x, jq) {
                console.log(data);
                mdlModificar.modal('hide');
                btnRefresh.trigger('click');
                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    mdlModificar.modal('hide');
                    btnRefresh.trigger('click');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        mdlModificar.on('show.bs.modal', function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getRecordByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                var dtm = data[0];
                mdlModificar.find("#ID").val(dtm.ID);
                mdlModificar.find("#Nombre").val(dtm.Nombre);
                mdlModificar.find("#Proyecto").val(dtm.Proyecto);
                mdlModificar.find("#Proyecto").select2('val', dtm.Proyecto);
                mdlModificar.find("#Responsable").val(dtm.ID);
                mdlModificar.find("#Responsable").select2('val', dtm.Responsable);
                mdlModificar.find("#Numero").val(dtm.Numero);
                mdlModificar.find("#Calle").val(dtm.Calle);
                mdlModificar.find("#Colonia").val(dtm.Colonia);
                mdlModificar.find("#Pais").val(dtm.PAIS);
                mdlModificar.find("#Estado").val(dtm.ESTADO);
                mdlModificar.find("#Municipio").val(dtm.MUNICIPIO);

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        onRefresh();
    });



    function onUpload(e)
    {
        var row = $(e).parent().parent();
        var btnFile = $(row).find("#rDocumento");
        var rDisplay = $(row).find("#rDocumentoDisplay");
        btnFile.trigger('click');
        btnFile.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var imageType = /image.*/;
            if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    rDisplay.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(btnFile[0].files[0]);
            } else {
                if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        rDisplay.html('<embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnFile[0].files[0]);
                } else {
                    rDisplay.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
            HoldOn.close();
        });
    }

    function onRemove(e) {
        console.log('------------------------------------------------------');
        var trow = $(e).parent().parent().parent();
        console.log(trow);
        var tcell = trow.find("td");
        console.log(tcell);
        var xrow = "";
        xrow += "<td>";
        xrow += tcell[0].innerHTML;
        xrow += "</td>";
        xrow += "<td class=\"text-justify\">";
        xrow += tcell[1].innerHTML;
        xrow += "</td>";
        $("#tblProductos tbody tr").draggable("destroy");
        $("#tblProductos tbody").append("<tr data-toggle=\"tooltip\">" + xrow + "</tr>");
        var c = {};
        $("#tblProductos tbody tr").draggable({
            helper: "clone",
            start: function (event, ui) {
                c.tr = this;
                c.helper = ui.helper;
            },
            stop: function (event, ui) {
                var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            },
            zIndex: 10000
        });
        trow.remove();
        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
        var xnrow = parseInt($("#tblProductosAsignados tbody tr").length);
        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((xnrow === 1) ? xnrow + " FILA" : (xnrow === 0) ? xnrow + " FILAS" : xnrow + " FILAS") + "</span>");
        console.log('------------------------------------------------------');
    }

    function onRefresh() {
        entrada = false;
        salida = false;
        mdlBusquedaPerdida.addClass("hide");
        btnCancelarDevolucion.addClass("hide");
        btnDevolucion.addClass("hide");
        mdlBusqueda.addClass("hide");
        mdlBusquedaEntrada.addClass("hide");
        mdlBusquedaSalida.addClass("hide");
        btnCancelarSalida.addClass("hide");
        btnCancelarEntrada.addClass("hide");
        getUsuarios();
        getProyectos();
        getProveedores();
        getAlmacenes();
        getResponsables();
        call.add(onGetRecords("tblAlmacenes", master_url + "getRecords", "rAlmacen", "msgAlmacen", "NO SE ENCONTRARON REGISTROS"));
        call.fire();
    }

    function onGetRecords(tblname, url, target_result, target_fail_messages, fail_message)
    {
        temp = 0;
//        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON"
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                });

                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    //                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    temp = $(dtm[0])[0].innerText;
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    $("#btnEditar").trigger("click");
                });// Apply the search
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#" + target_result).html("");
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' + '<button type="button" class="close" data-dismiss="alert">&times;</button>' + '<h1 class="text-center">' + fail_message + '</h1>' + '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }

    function getProyectos()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProyectos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            mdlNuevo.find("#Proyecto").html(options);
            mdlModificar.find("#Proyecto").html(options);
            mdlNuevoMovimiento.find("#Proyecto").html(options);
            mdlBusqueda.find("#cmbProyecto").html(options);
            mdlBusquedaEntrada.find("#cmbProyecto").html(options);
            mdlBusquedaSalida.find("#cmbProyecto").html(options);
            mdlPerdida.find("#IdProyecto").html(options);
            mdlVerPerdida.find("#IdProyecto").html(options);
            mdlDevolucionX.find("#IdProyecto").html(options);
            mdlVerDevolucionX.find("#IdProyecto").html(options);
            mdlBusquedaDevolucionesX.find("#IdProyecto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenes()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAlmacenes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(' * * * * * ALMACENES * * * * * ');
            console.log(data);
            console.log(' * * * * * ALMACENES * * * * * ');
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            $(".modal form #IdAlmacen").html(options);
            mdlVerPerdida.find("#IdAlmacen").html(options);
            mdlDevolucionX.find("#IdAlmacen").html(options);
            mdlVerDevolucionX.find("#IdAlmacen").html(options);
            console.log("ALMACENES SETEADOS");
            getAlmacenesConDevolucion();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenesXProyecto(IDX)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAlmacenesXProyecto',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            mdlPerdida.find("#IdAlmacen").html(options);
            mdlDevolucionX.find("#IdAlmacen").html(options);
            mdlBusquedaPerdida.find("#IdAlmacen").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenesConDevolucion()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAlmacenesConDevolucion',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            mdlBusquedaDevoluciones.find("#Almacen").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenesConProductosAsignados()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAlmacenesConProductosAsignados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            $("#mdlEntrada form #IdAlmacen").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenesConProductos()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getAlmacenesConProductos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            $("#mdlSalida form #IdAlmacen").html(options);
            $("#mdlBusqueda #cmbAlmacen").html(options);
            $("#mdlBusquedaEntrada #cmbAlmacen").html(options);
            $("#mdlBusquedaSalida #cmbAlmacen").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosExistentes()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProductosExistentes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            $("#mdlBusqueda #cmbProducto").html(options);
            $("#mdlBusquedaEntrada #cmbProducto").html(options);
            $("#mdlBusquedaSalida #cmbProducto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosXAlmacen()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProductosXAlmacen',
            type: "POST",
            dataType: "JSON",
            data: {ID: mdlNuevoMovimiento.find("#IdAlmacen").val()
            }
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlNuevoMovimiento.find("#IdProducto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProveedoresXAlmacen()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProveedoresXAlmacen',
            type: "POST",
            dataType: "JSON",
            data: {ID: mdlNuevoMovimiento.find("#IdAlmacen").val()
            }
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
            });
            mdlNuevoMovimiento.find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosXAlmacenXProveedor()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProductosXAlmacenXProveedor',
            type: "POST",
            dataType: "JSON",
            data: {ID: mdlNuevoMovimiento.find("#IdAlmacen").val(),
                PRO: mdlNuevoMovimiento.find("#IdProveedor").val()
            }
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlNuevoMovimiento.find("#IdProducto select").select2("val", "");
            mdlNuevoMovimiento.find("#IdProducto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductos()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProductos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlAsignacion.find("#IdProducto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosXPerdida(IDX)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProductosXAlmacenXPerdida',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlPerdida.find("#IdProducto").html(options);
            mdlDevolucionX.find("#IdProducto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProveedores()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProveedores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
            });
            mdlAsignacion.find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProveedoresExistentes()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProveedoresExistentes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROVEEDOR + '</option>';
            });
            mdlBusqueda.find("#cmbProveedor").html(options);
            $("#mdlBusquedaEntrada #cmbProveedor").html(options);
            $("#mdlBusquedaSalida #cmbProveedor").html(options);
            //            $(".modal").find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getUsuarios()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getUsuarios',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.USUARIO + '</option>';
            });
            mdlNuevoMovimiento.find("#RecibeAlmacen").html(options);
            mdlEntrada.find("#RecibeAlmacen").html(options);
            mdlPerdida.find("#PersonaDetecta").html(options);
            mdlPerdida.find("#Responsable").html(options);
            mdlDevolucionX.find("#PersonaDetecta").html(options);
            mdlDevolucionX.find("#Responsable").html(options);
            mdlVerDevolucionX.find("#PersonaDetecta").html(options);
            mdlVerDevolucionX.find("#Responsable").html(options);

            //            $(".modal").find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getResponsables()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getResponsables',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.RESPONSABLE + '</option>';
            });
            Responsable.html(options);
            mdlModificar.find("#Responsable").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getPaises()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getPaises',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PAIS + '</option>';
            });
            Pais.html(options);
            mdlModificar.find("#PaisU").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getEstadosXPais()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getEstadosXPais',
            type: "POST",
            dataType: "JSON",
            data: {ID: Pais.val()
            }
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ESTADO + '</option>';
            });
            Estado.html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getMunicipiosXEstado()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getMunicipiosXEstado',
            type: "POST",
            dataType: "JSON",
            data: {ID: Estado.val()
            }
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.MUNICIPIO + '</option>';
            });
            Municipio.html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosNoAsignados()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        temp = 0;
        $.ajax({
            url: master_url + 'getProductosNoAsignados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var tblName = "tblProductos";
            if (data.length > 0) {
                $("#dtblProductos").html(getTable(tblName, data));
                var thID = $("#" + tblName + " thead").find("th")[0];
                var thPRO = $("#" + tblName + " thead").find("th")[1];
                var thIDf = $("#" + tblName + " tfoot").find("th")[0];
                var thPROf = $("#" + tblName + " tfoot").find("th")[1];
                console.log('******************************************HEADER**********************************************');
                $(thID).addClass("hide");
                $(thPRO).attr('colspan', 2);
                $(thIDf).addClass("hide");
                $(thPROf).attr('colspan', 2);
                console.log('*******************************************END HEADER*********************************************');
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                });
                var c = {};
                $("#" + tblName + " tbody tr").draggable({
                    helper: "clone",
                    start: function (event, ui) {
                        c.tr = this;
                        c.helper = ui.helper;
                    },
                    stop: function (event, ui) {
                        var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    },
                    zIndex: 10000
                });
                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            } else { //                $("#" + target_result).html("");
                //                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                //                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                //                        '<h1 class="text-center">' + fail_message + '</h1>' +
                //                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosSinAsignarXAlmacen()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        temp = 0;
        $.ajax({
            url: master_url + 'getProductosSinAsignarXAlmacen',
            type: "POST",
            dataType: "JSON",
            data: {ID: mdlAsignacionIdAlmacen.val()
            }
        }).done(function (data) {
            var tblName = "tblProductos";
            if (data.length > 0) {
                mdlAsignacion.find("#dtblProductos").html(getTable(tblName, data));
                var thID = $("#" + tblName + " thead").find("th")[0];
                var thPRO = $("#" + tblName + " thead").find("th")[1];
                var thIDf = $("#" + tblName + " tfoot").find("th")[0];
                var thPROf = $("#" + tblName + " tfoot").find("th")[1];
                console.log('******************************************HEADER**********************************************');
                $(thID).addClass("hide");
                $(thPRO).attr('colspan', 2);
                $("#tblProductos tbody tr").each(function (k, v) {
                    $(v).find("td div").removeClass("col-md-6").addClass("col-md-12");
                });
                $(thIDf).addClass("hide");
                $(thPROf).attr('colspan', 2);
                console.log('*******************************************END HEADER*********************************************');
                //CLICK SELECTED ROW
                mdlAsignacion.find('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                });
                //DB CLICK FOR EDIT
                mdlAsignacion.find('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    mdlAsignacion.find("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                });
                var c = {};
                mdlAsignacion.find("#" + tblName + " tbody tr").draggable({
                    helper: "clone",
                    start: function (event, ui) {
                        c.tr = this;
                        c.helper = ui.helper;
                    },
                    stop: function (event, ui) {
                        var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    },
                    zIndex: 10000
                });
                var nrow = (parseInt(mdlAsignacion.find("#tblProductos tbody tr").length) - parseInt(mdlAsignacion.find("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            } else { //                $("#" + target_result).html("");
                //                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                //                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                //                        '<h1 class="text-center">' + fail_message + '</h1>' +
                //                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosAsignadosXAlmacen()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        temp = 0;
        $.ajax({
            url: master_url + 'getProductosAsignadosXAlmacen',
            type: "POST",
            dataType: "JSON",
            data: {ID: mdlAsignacionIdAlmacen.val()
            }
        }).done(function (data) {
            var tblName = "tblProductosAsignados";
            if (data.length > 0) {
                mdlAsignacion.find("#dtblProductosAsignados").html(getTable(tblName, data));
                console.log($("#" + tblName + " thead").find("th"));
                var thID = mdlAsignacion.find("#" + tblName + " thead").find("th")[0];
                var thPRO = mdlAsignacion.find("#" + tblName + " thead").find("th")[1];
                var thIDPXA = mdlAsignacion.find("#" + tblName + " thead").find("th")[4];
                var thIDf = mdlAsignacion.find("#" + tblName + " tfoot").find("th")[0];
                var thPROf = mdlAsignacion.find("#" + tblName + " tfoot").find("th")[1];
                var thIDPXAF = mdlAsignacion.find("#" + tblName + " tfoot").find("th")[4];
                console.log('******************************************HEADER**********************************************');
                mdlAsignacion.find(thID).addClass("hide");
                mdlAsignacion.find(thIDPXA).addClass("hide");
                mdlAsignacion.find(thPRO).attr('colspan', 2);
                mdlAsignacion.find("#" + tblName + " thead tr").append("<th>ELIMINAR</th>");
                mdlAsignacion.find("#" + tblName + " tfoot tr").append("<th>ELIMINAR</th>");
                mdlAsignacion.find("#tblProductosAsignados tbody tr").each(function (k, v) {
                    var r = mdlAsignacion.find(v).find("td")[4];
                    mdlAsignacion.find(r).addClass("hide");
                    mdlAsignacion.find(v).find("td div").removeClass("col-md-6").addClass("col-md-12");
                    mdlAsignacion.find(v).append("<td><button type=\"button\" class=\"btn btn3d btn-default fa-lg\"><span class=\"fa fa-check success-icon-square-o fa-3x\" onclick=\"onRemoveAsignado(this)\"></span></button></td>");
                });
                mdlAsignacion.find(thIDf).addClass("hide");
                mdlAsignacion.find(thPROf).attr('colspan', 2);
                mdlAsignacion.find(thIDPXAF).addClass("hide");
                console.log('*******************************************END HEADER*********************************************');
                //CLICK SELECTED ROW
                mdlAsignacion.find('#' + tblName + ' tbody').on('click', 'tr', function () {
                    mdlAsignacion.find("#" + tblName).find("tr").removeClass("success");
                    mdlAsignacion.find("#" + tblName).find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    mdlAsignacion.find(this).addClass('success');
                });
                //DB CLICK FOR EDIT
                mdlAsignacion.find('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    mdlAsignacion.find("#" + tblName).find("tr").removeClass("warning");
                    mdlAsignacion.find(this).addClass('warning');
                });
                var c = {};
                mdlAsignacion.find("#" + tblName + " tbody tr").draggable({
                    helper: "clone",
                    start: function (event, ui) {
                        c.tr = this;
                        c.helper = ui.helper;
                    },
                    stop: function (event, ui) {
                        var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    },
                    zIndex: 10000
                });
                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA ENCONTRADA" : nrow + " FILAS ENCONTRADAS") + "</span>");
//                $("#" + tblName + " thead tr").droppable({
//                    hoverClass: "highlight",
//                    drop: function (event, e) {
//                        var row = '<tr>';
//                        row += e.draggable[0].innerHTML;
//                        row += "<td><button type=\"button\" class=\"btn btn3d btn-default\">";
//                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
//                        row += "</tr>";
//                        $("#" + tblName + " tbody").append(row);
//                        $(e.draggable).remove();
//                        $(e.helper).remove();
//                        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
//                        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
//                    }
//                });
                mdlAsignacion.find("#" + tblName).droppable({
                    hoverClass: "highlight",
                    drop: function (event, e) {
                        var row = '<tr>';
                        row += e.draggable[0].innerHTML;
                        row += "<td></td><td></td><td></td><td><button type=\"button\" class=\"btn btn3d btn-default\">";
                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
                        row += "</tr>";
//                        mdlAsignacion.find("#" + tblName + " tbody").append(row);
                        mdlAsignacion.find("#" + tblName + " tbody").prependTo(row).fadeIn("slow");
                        mdlAsignacion.find(e.draggable).remove();
                        mdlAsignacion.find(e.helper).remove();
                        var nrow = (parseInt(mdlAsignacion.find("#tblProductos tbody tr").length) - parseInt(mdlAsignacion.find("#tblProductos tbody tr.hide").length));
                        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    }
                });

            } else {
                var tbl = "<div class=\"table-responsive\">";
                tbl = "<table id=\"tblProductosAsignados\" class=\"table table-bordered table-striped table-hover display row-border hover order-column\" cellspacing=\"10\" width=\"100%\">";
                //Create header
                tbl += "<thead>";
                tbl += "<tr class=\"primary text-center\" >";
                tbl += "<th>ID</th>";
                tbl += "<th>PRODUCTO</th>";
                tbl += "<th>ACCIONES</th>";
                tbl += "</tr></thead>";
                tbl += "<tbody>";
                tbl += "</tbody>";
                tbl += "<tfoot>";
                tbl += "</tfoot>";
                tbl += "</table>";
                tbl += "</div>";
                //                tbl +="";
                //                tbl +="";

                mdlAsignacion.find("#dtblProductosAsignados").html(tbl);
//                $("#dtblProductosAsignados thead tr").droppable({
//                    hoverClass: "highlight",
//                    drop: function (event, e) {
//                        var row = '<tr>';
//                        row += e.draggable[0].innerHTML;
//                        row += "<td><button type=\"button\" class=\"btn btn3d btn-default\">";
//                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
//                        row += "</tr>";
//                        $("#" + tblName + " tbody").append(row);
//                        $(e.draggable).remove();
//                        $(e.helper).remove();
//                        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
//                        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
//                    }
//                });
                mdlAsignacion.find("#dtblProductosAsignados").droppable({
                    hoverClass: "highlight",
                    drop: function (event, e) {
                        var row = '<tr>';
                        row += e.draggable[0].innerHTML;
                        row += "<td></td><td></td><td></td><button type=\"button\" class=\"btn btn3d btn-default\">";
                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
                        row += "</tr>";
                        mdlAsignacion.find("#" + tblName + " tbody").prependTo(row).fadeIn("slow");
                        mdlAsignacion.find(e.draggable).remove();
                        mdlAsignacion.find(e.helper).remove();
                        var nrow = (parseInt(mdlAsignacion.find("#tblProductos tbody tr").length) - parseInt(mdlAsignacion.find("#tblProductos tbody tr.hide").length));
                        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    }
                });
                //                $("#" + target_result).html("");
                //                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                //                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                //                        '<h1 class="text-center">' + fail_message + '</h1>' +
                //                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductosAsignadosXAlmacenXProveedor()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        temp = 0;
        $.ajax({
            url: master_url + 'getProductosAsignadosXAlmacenXProveedor',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: mdlAsignacionIdAlmacen.val(),
                PRO: mdlAsignacion.find("#IdProveedor").val()
            }
        }).done(function (data) {
            var tblName = "tblProductosAsignados";
            if (data.length > 0) {
                $("#dtblProductosAsignados").html(getTable(tblName, data));
                console.log($("#" + tblName + " thead").find("th"));
                var thID = $("#" + tblName + " thead").find("th")[0];
                var thPRO = $("#" + tblName + " thead").find("th")[1];
                var thIDPXA = $("#" + tblName + " thead").find("th")[4];
                var thIDf = $("#" + tblName + " tfoot").find("th")[0];
                var thPROf = $("#" + tblName + " tfoot").find("th")[1];
                var thIDPXAF = $("#" + tblName + " tfoot").find("th")[4];
                console.log('******************************************HEADER**********************************************');
                $(thID).addClass("hide");
                $(thIDPXA).addClass("hide");
                $(thPRO).attr('colspan', 2);
                $("#" + tblName + " thead tr").append("<th>ELIMINAR</th>");
                $("#" + tblName + " tfoot tr").append("<th>ELIMINAR</th>");
                $("#tblProductosAsignados tbody tr").each(function (k, v) {
                    var r = $(v).find("td")[4];
                    $(r).addClass("hide");
                    $(v).find("td div").removeClass("col-md-6").addClass("col-md-12");
                    $(v).append("<td><button type=\"button\" class=\"btn btn3d btn-default  fa-lg\"><span class=\"fa fa-check success-icon-square-o fa-3x\" onclick=\"onRemoveAsignado(this)\"></span></button></td>");
                });
                $(thIDf).addClass("hide");
                $(thPROf).attr('colspan', 2);
                $(thIDPXAF).addClass("hide");
                console.log('*******************************************END HEADER*********************************************');
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                });
                var c = {};
                $("#" + tblName + " tbody tr").draggable({
                    helper: "clone",
                    start: function (event, ui) {
                        c.tr = this;
                        c.helper = ui.helper;
                    },
                    stop: function (event, ui) {
                        var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    },
                    zIndex: 10000
                });
                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA ENCONTRADA" : nrow + " FILAS ENCONTRADAS") + "</span>");
                $("#" + tblName + " thead tr").droppable({
                    hoverClass: "highlight",
                    drop: function (event, e) {
                        var row = '<tr>';
                        row += e.draggable[0].innerHTML;
                        row += "<td><button type=\"button\" class=\"btn btn3d btn-default\">";
                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
                        row += "</tr>";
                        $("#" + tblName + " tbody").append(row);
                        $(e.draggable).remove();
                        $(e.helper).remove();
                        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    }
                });
            } else { //                $("#" + target_result).html("");
                //                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                //                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                //                        '<h1 class="text-center">' + fail_message + '</h1>' +
                //                        '</div>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemoveAsignados() { //        console.log('------------------------------------------------------');
        $("#tblProductos tbody tr").draggable("destroy");
        $('#tblProductosAsignados > tbody  > tr').each(function () {
            var tcell = $(this).find("td");
            var xrow = "";
            xrow += "<td>";
            xrow += tcell[0].innerHTML;
            xrow += "</td>";
            xrow += "<td class=\"text-justify\">";
            xrow += tcell[1].innerHTML;
            xrow += "</td>";
            $("#tblProductos tbody").append("<tr data-toggle=\"tooltip\">" + xrow + "</tr>");
            console.log('* * * * * * * * * * * * * * * * * * * * * * * REMOVIDO * * * * * * * * * * * * * * * * * * * * ');
            $(this).remove();
            console.log($(this));
            console.log('* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * ');
        });
        var c = {};
        $("#tblProductos tbody tr").draggable({
            helper: "clone",
            start: function (event, ui) {
                c.tr = this;
                c.helper = ui.helper;
            },
            stop: function (event, ui) {
                var nrow = parseInt($("#tblProductosAsignados tbody tr").length);
                nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            },
            zIndex: 10000
        });
        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
        var xnrow = parseInt($("#tblProductosAsignados tbody tr").length);
        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((xnrow === 1) ? xnrow + " FILA" : (xnrow === 0) ? xnrow + " FILAS" : xnrow + " FILAS") + "</span>");
        console.log('------------------------------------------------------');
        //        console.log('------------------------------------------------------');
    }

    function onAddAsignados() {
        $('#tblProductos > tbody  > tr').each(function () {
            if (!$(this).hasClass("hide")) {
                console.log($(this));
                var rowx = "<tr>";
                rowx += $(this)[0].innerHTML;
                rowx += "<td><button type=\"button\" class=\"btn btn3d btn-lg btn-default\">";
                rowx += "<span class=\"fa fa-minus fa-3x\" onclick=\"onRemove(this)\"></span></button></td>";
                rowx += "</tr>";
                $("#tblProductosAsignados tbody").append(rowx);
                $(this).remove();
            }
        });
        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
        var xnrow = parseInt($("#tblProductosAsignados tbody tr").length);
        nProductosAsignados.html("<br><span class=\"label label-king-blue\">" + ((xnrow === 1) ? xnrow + " FILA" : (xnrow === 0) ? xnrow + " FILAS" : xnrow + " FILAS") + "</span>");
    }

    function onRemoveAsignado(e) {
        var sts = $(e).parent().parent().parent().find("td")[3].innerText;
        if (sts === "ACTIVO") {
            $(e).parent().parent().parent().find("td")[3].innerText = "INACTIVO";
            var btn = $(e).parent().parent().parent().find("td button").removeClass(" btn-default fa-lg").addClass(" btn-default fa-lg").find("span.fa-check success-icon-square-o").removeClass("fa-check success-icon-square-o").addClass("fa-square-o");
        } else {
            $(e).parent().parent().parent().find("td")[3].innerText = "ACTIVO";
            var btn = $(e).parent().parent().parent().find("td button").removeClass(" btn-default fa-lg").addClass(" btn-default fa-lg").find("span.fa-square-o").removeClass("fa-square-o").addClass("fa-check success-icon-square-o");
        }
    }

    function getTiposDeViviendas() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getTiposDeViviendas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROTOTIPO + '</option>';
            });
            Pais.html(options);
            mdlNuevoMovimiento.find("#TipoVivienda").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getOrdenesDeCompra(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getOrdenesDeCompra',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ORDEN + '</option>';
            });
            //            mdlEntrada.find("#IdOrdenDeCompra").html(options);
            mdlEntrada.find("#IdOrdenDeCompra").html(options);
            mdlDevolucion.find("#IdOrdenDeCompra").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function setType(e) {
        var row = $(e).parent().parent();
        var txtCajas = $(row).find("#CantidadExactaCajas");
        var txtPaquete = $(row).find("#CantidadExactaPaquete");
        var txtUnidad = $(row).find("#CantidadExactaUnidad");
        var FormaEntrada = $(row).find("#TipoEntrada option:selected").text();
        var CantidadEntrante = $(row).find("#CantidadEntrante");
        switch (FormaEntrada) {
            case "CAJA":
                txtUnidad.val("");
                txtPaquete.val("");
                txtCajas.val(CantidadEntrante.val());
                break;
            case "PAQUETE":
                txtUnidad.val("");
                txtPaquete.val(CantidadEntrante.val());
                txtCajas.val("");
                break;
            case "UNIDAD":
                txtUnidad.val(CantidadEntrante.val());
                txtPaquete.val("");
                txtCajas.val("");
                break;
        }
    }

    function onCalcularCajas(e) {
        var row = $(e).parent().parent();
        var xCajas = $(e);
        var nCajas = $(row).find("td")[11].innerText;
        if (parseFloat(xCajas.val()) <= parseFloat(nCajas)) {
            console.log("xCAJAS: " + xCajas.val());
            console.log("nCAJAS: " + nCajas);
            console.log(nCajas);
        } else {
            xCajas.val('');
            console.log("ERROR");
            console.log("xCAJAS: " + xCajas.val());
            console.log("nCAJAS: " + nCajas);
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA CANTIDAD INGRESADA, DEBE DE SER MENOR O IGUAL A LA CANTIDAD DISPONIBLE.', 'danger');
        }
    }

    function onCalcularPaquetes(e) {
        var row = $(e).parent().parent();
        var xPaquetes = $(e);
        var nPaquetes = $(row).find("td")[12].innerText;
        if (parseFloat(xPaquetes.val()) <= parseFloat(nPaquetes)) {
            console.log("xPaquetes: " + xPaquetes.val());
            console.log("nPaquetes: " + nPaquetes);
            console.log(nPaquetes);
        } else {
            xPaquetes.val('');
            console.log("ERROR");
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA CANTIDAD INGRESADA, DEBE DE SER MENOR O IGUAL A LA CANTIDAD DISPONIBLE.', 'danger');
        }

    }

    function onCalcularUnidades(e) {
        var row = $(e).parent().parent();
        var xUnidades = $(e);
        var nUnidades = $(row).find("td")[13].innerText;
        if (parseFloat(xUnidades.val()) <= parseFloat(nUnidades)) {
            console.log("xUnidades: " + xUnidades.val());
            console.log("nPaquetes: " + nUnidades);
            console.log(nUnidades);
        } else {
            xUnidades.val('');
            console.log("ERROR");
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA CANTIDAD INGRESADA, DEBE DE SER MENOR O IGUAL A LA CANTIDAD DISPONIBLE.', 'danger');
        }

    }

    function getDevoluciones() {
        temp = 0;
        btnDevolucion.addClass("hide");
        btnCancelarDevolucion.removeClass("hide");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        $.ajax({
            url: master_url + 'getDevoluciones',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            $("#rAlmacen").html(getTable("tblDevoluciones", data));
            $('#tblDevoluciones tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblDevoluciones').DataTable(tableOptions);
            $('#tblDevoluciones tbody').on('click', 'tr', function () {
                $("#tblDevoluciones").find("tr").removeClass("success");
                $("#tblDevoluciones").find("tr").removeClass("warning");
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0])[0].innerText);
                temp = parseInt($(dtm[0])[0].innerText);
                console.log(temp);
            });
            //DB CLICK FOR EDIT
            $('#tblDevoluciones tbody').on('dblclick', 'tr', function () {
                $("#tblDevoluciones").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                console.log($(dtm[0])[0].innerText);
                temp = parseInt($(dtm[0])[0].innerText);
                console.log(temp);

                getDevolucionByID(temp);

            });
            // Apply the search
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDevolucionByID(temp) {
        $.ajax({
            url: master_url + 'getDevolucionByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: temp
            }
        }).done(function (data, x, jq) {
            var dtm = data[0];
            $.each(dtm, function (k, v) {
                mdlVerDevolucion.find("#" + k).val(v);
                mdlVerDevolucion.find("#" + k).select2("val", v);
            });
            mdlVerDevolucion.modal('show');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    /*REPORTES*/

    btnReporteXExistencias.click(function () {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getReporteDeExistencias',
            type: "POST",
            data: {
                INICIO: (mdlBusqueda.find("#Inicio").val() !== '') ? mdlBusqueda.find("#Inicio").val() : '',
                FIN: (mdlBusqueda.find("#Fin").val() !== '') ? mdlBusqueda.find("#Fin").val() : '',
                PROYECTO: (mdlBusqueda.find("#cmbProyecto").val() > 0) ? mdlBusqueda.find("#cmbProyecto").val() : '',
                ALMACEN: (mdlBusqueda.find("#cmbAlmacen").val() > 0) ? mdlBusqueda.find("#cmbAlmacen").val() : '',
                PROVEEDOR: (mdlBusqueda.find("#cmbProveedor").val() > 0) ? mdlBusqueda.find("#cmbProveedor").val() : '',
                PRODUCTO: mdlBusqueda.find("#cmbProducto") !== '' ? mdlBusqueda.find("#cmbProducto").val() : ''
            }
        }).done(function (data, x, jq) {
            window.open(data, '_blank');
            console.log(data, x, jq);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    });


    btnReporteKardex.click(function () {
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
        $.ajax({
            url: master_url + 'getReporteKardex',
            type: "POST",
            data: {
                PROYECTO: (mdlBusqueda.find("#cmbProyecto").val() > 0) ? mdlBusqueda.find("#cmbProyecto").val() : '',
                ALMACEN: (mdlBusqueda.find("#cmbAlmacen").val() > 0) ? mdlBusqueda.find("#cmbAlmacen").val() : '',
                PROVEEDOR: (mdlBusqueda.find("#cmbProveedor").val() > 0) ? mdlBusqueda.find("#cmbProveedor").val() : '',
                INICIO: (mdlBusqueda.find("#Inicio").val() !== '') ? mdlBusqueda.find("#Inicio").val() : '',
                FIN: (mdlBusqueda.find("#Fin").val() !== '') ? mdlBusqueda.find("#Fin").val() : '',
                PRODUCTO: mdlBusqueda.find("#cmbProducto") !== '' ? mdlBusqueda.find("#cmbProducto").val() : ''
            }
        }).done(function (data, x, jq) {
            console.log(data);
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    });



    btnReporteXAlmacenXProveedorXProducto.click(function () {
        var Almacen = mdlBusqueda.find("#cmbAlmacen").val();
        var Proveedor = mdlBusqueda.find("#cmbProveedor").val();
        if (Almacen !== undefined && Almacen !== '' && Almacen > 0 &&
                Proveedor !== undefined && Proveedor !== '' && Proveedor > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getExistenciasXAlmacenYProveedorXProducto',
                type: "POST",
                data: {
                    PROYECTO: (mdlBusqueda.find("#cmbProyecto").val() > 0) ? mdlBusqueda.find("#cmbProyecto").val() : '',
                    ALMACEN: (mdlBusqueda.find("#cmbAlmacen").val() > 0) ? mdlBusqueda.find("#cmbAlmacen").val() : '',
                    PROVEEDOR: (mdlBusqueda.find("#cmbProveedor").val() > 0) ? mdlBusqueda.find("#cmbProveedor").val() : '',
                    INICIO: (mdlBusqueda.find("#Inicio").val() !== '') ? mdlBusqueda.find("#Inicio").val() : '',
                    FIN: (mdlBusqueda.find("#Fin").val() !== '') ? mdlBusqueda.find("#Fin").val() : '',
                    PRODUCTO: mdlBusqueda.find("#cmbProducto") !== '' ? mdlBusqueda.find("#cmbProducto").val() : ''
                }
            }).done(function (data, x, jq) {
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ESCOGER UN ALMACEN, UN PROVEEDOR Y UN PRODUCTO', 'danger');
        }
    });

    btnReporteXAlmacenXProveedor.click(function () {
        var Almacen = mdlBusqueda.find("#cmbAlmacen").val();
        var Proveedor = mdlBusqueda.find("#cmbProveedor").val();
        if (Almacen !== undefined && Almacen !== '' && Almacen > 0 &&
                Proveedor !== undefined && Proveedor !== '' && Proveedor > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getExistenciasXAlmacenYProveedor',
                type: "POST",
                data: {
                    PROYECTO: (mdlBusqueda.find("#cmbProyecto").val() > 0) ? mdlBusqueda.find("#cmbProyecto").val() : '',
                    ALMACEN: (mdlBusqueda.find("#cmbAlmacen").val() > 0) ? mdlBusqueda.find("#cmbAlmacen").val() : '',
                    PROVEEDOR: (mdlBusqueda.find("#cmbProveedor").val() > 0) ? mdlBusqueda.find("#cmbProveedor").val() : '',
                    INICIO: (mdlBusqueda.find("#Inicio").val() !== '') ? mdlBusqueda.find("#Inicio").val() : '',
                    FIN: (mdlBusqueda.find("#Fin").val() !== '') ? mdlBusqueda.find("#Fin").val() : ''
                }
            }).done(function (data, x, jq) {
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ESCOGER UN ALMACEN Y UN PROVEEDOR', 'danger');
        }
    });

    btnReporteXProveedor.click(function () {
        var Proveedor = mdlBusqueda.find("#cmbProveedor").val();
        if (Proveedor !== undefined && Proveedor !== '' && Proveedor > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getExistenciasXProveedorOnPDF',
                type: "POST",
                data: {
                    PROYECTO: (mdlBusqueda.find("#cmbProyecto").val() > 0) ? mdlBusqueda.find("#cmbProyecto").val() : '',
                    ALMACEN: (mdlBusqueda.find("#cmbAlmacen").val() > 0) ? mdlBusqueda.find("#cmbAlmacen").val() : '',
                    PROVEEDOR: (mdlBusqueda.find("#cmbProveedor").val() > 0) ? mdlBusqueda.find("#cmbProveedor").val() : '',
                    INICIO: (mdlBusqueda.find("#Inicio").val() !== '') ? mdlBusqueda.find("#Inicio").val() : '',
                    FIN: (mdlBusqueda.find("#Fin").val() !== '') ? mdlBusqueda.find("#Fin").val() : ''
                }
            }).done(function (data, x, jq) {
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ESCOGER UN PROVEEDOR', 'danger');
        }
    });

    btnReporteXAlmacen.click(function () {
        var Almacen = mdlBusqueda.find("#cmbAlmacen").val();
        if (Almacen !== undefined && Almacen !== '' && Almacen > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getExistenciasXAlmacenOnPDF',
                type: "POST",
                data: {
                    INICIO: (mdlBusqueda.find("#Inicio").val() !== '') ? mdlBusqueda.find("#Inicio").val() : '',
                    FIN: (mdlBusqueda.find("#Fin").val() !== '') ? mdlBusqueda.find("#Fin").val() : '',
                    PROYECTO: (mdlBusqueda.find("#cmbProyecto").val() > 0) ? mdlBusqueda.find("#cmbProyecto").val() : '',
                    ALMACEN: (mdlBusqueda.find("#cmbAlmacen").val() > 0) ? mdlBusqueda.find("#cmbAlmacen").val() : '',
                    PROVEEDOR: (mdlBusqueda.find("#cmbProveedor").val() > 0) ? mdlBusqueda.find("#cmbProveedor").val() : '',
                    PRODUCTO: (mdlBusqueda.find("#cmbProducto").val() > 0) ? mdlBusqueda.find("#cmbProducto").val() : ''
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ESCOGER UN ALMACEN', 'danger');
        }
    });

    function getProductosConDevolucion() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getProductosConDevolucion',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) { //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlBusquedaDevoluciones.find("#Producto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProyectosConDevolucion() {
        console.log('PROYECTOS CON DEVOLUCION');
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getProyectosConDevolucion',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log('*********************************************');
            console.log(data);
            console.log('*********************************************');
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            mdlBusquedaDevoluciones.find("#Proyecto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getProductoInformacion(IDX) {
        console.log(IDX);
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getProductoInformacion',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var dtm = data[0];
            mdlPerdida.find("#Precio").val(dtm.PRECIO);
            mdlPerdida.find("#UnidadMedida").val(dtm["UNIDAD DE MEDIDA"]);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getPerdidas() {
        temp = 0;
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });

        $.ajax({
            url: master_url + 'getPerdidas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);

            var tblName = "tblPerdidas";
            if (data.length > 0) {
                target_result.html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                });

                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    //                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var row = $(this).find("td");
                    console.log(row);
                    temp = row[0].innerText;
                    console.log('ID PERDIDA: ' + temp);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    console.log("* * * * * * * * * * * * * * * * * * * * * * AIDI * * * * * * * * *");
                    console.log($(this).find("td")[0].innerText);
                    console.log("* * * * * * * * * * * * * * * * * * * * * * AIDI * * * * * * * * *");
                    HoldOn.open({
                        theme: 'sk-bounce',
                        message: 'ESPERE UN MOMENTO...'
                    });
                    $.ajax({
                        url: master_url + 'getPerdidasXID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: $(this).find("td")[0].innerText
                        }
                    }).done(function (data, x, jq) {
                        console.log(data);
                        var dtm = data[0];
                        $.each(dtm, function (k, v) {
                            console.log(k, v);
                            mdlVerPerdida.find("#" + k).val(v);
                            mdlVerPerdida.find("#" + k).select2("val", v);
                        });
                        mdlVerPerdida.modal('show');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                });
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#rAlmacen").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                        '</div>');
                HoldOn.close();
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }

    function getBuscarPerdidas() {
        temp = 0;
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });

        $.ajax({
            url: master_url + 'getGenerarReporteDePerdidas',
            type: "POST",
            dataType: "JSON",
            data: {
                INICIO: (mdlBusquedaPerdida.find("#FechaInicial").val() !== '') ? mdlBusquedaPerdida.find("#FechaInicial").val() : '',
                FIN: (mdlBusquedaPerdida.find("#FechaFinal").val() !== '') ? mdlBusquedaPerdida.find("#FechaFinal").val() : '',
                PROYECTO: (mdlBusquedaPerdida.find("#IdProyecto").val() !== '') ? mdlBusquedaPerdida.find("#IdProyecto").val() : '',
                ALMACEN: (mdlBusquedaPerdida.find("#IdAlmacen").val() !== '') ? mdlBusquedaPerdida.find("#IdAlmacen").val() : ''
            }
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var tblName = "tblPerdidas";
            if (data.length > 0) {
                target_result.html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                });

                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    //                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var row = $(this).find("td");
                    console.log(row);
                    temp = row[0].innerText;
                    console.log('ID PERDIDA: ' + temp);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                });
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#rAlmacen").html('<div class="col-md-12"><div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                        '</div></div>');
                HoldOn.close();
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }

    function getProyectosConPerdidas() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getProyectosConPerdidas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            mdlBusquedaPerdida.find("#IdProyecto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getAlmacenConPerdidasXProyecto(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getAlmacenConPerdidasXProyecto',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            mdlBusquedaPerdida.find("#IdAlmacen").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onReiniciarPerdidas() {
        getPerdidas();
        mdlBusquedaPerdida.find("#FechaInicial").val("");
        mdlBusquedaPerdida.find("#FechaFinal").val("");
        mdlBusquedaPerdida.find("#IdProyecto").select2("val", "");
        mdlBusquedaPerdida.find("#IdAlmacen").select2("val", "");
    }

    function getDevolucionesX() {
        temp = 0;
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });

        $.ajax({
            url: master_url + 'getDevolucionesX',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);

            var tblName = "tblDevolucionesX";
            if (data.length > 0) {
                target_result.html(getTable(tblName, data));
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<fieldset><div><label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div></fieldset>');
                });

                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
                    //                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var row = $(this).find("td");
                    console.log(row);
                    temp = row[0].innerText;
                    console.log('ID DEVOLUCIONX: ' + temp);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    console.log("* * * * * * * * * * * * * * * * * * * * * * AIDI * * * * * * * * *");
                    console.log($(this).find("td")[0].innerText);
                    console.log("* * * * * * * * * * * * * * * * * * * * * * AIDI * * * * * * * * *");
                    HoldOn.open({
                        theme: 'sk-bounce',
                        message: 'ESPERE UN MOMENTO...'
                    });
                    $.ajax({
                        url: master_url + 'getDevolucionXID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: $(this).find("td")[0].innerText
                        }
                    }).done(function (data, x, jq) {
                        console.log(data);
                        var dtm = data[0];
                        $.each(dtm, function (k, v) {
                            console.log(k, v);
                            mdlVerDevolucionX.find("#" + k).val(v);
                            mdlVerDevolucionX.find("#" + k).select2("val", v);
                        });
                        mdlVerDevolucionX.modal('show');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                });
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#rAlmacen").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">NO SE ENCONTRARON REGISTROS</h1>' +
                        '</div>');
                HoldOn.close();
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }

</script>