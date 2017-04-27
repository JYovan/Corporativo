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
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <div align="center">
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-info btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                        <button id="btnEditar" class="btn btn-success btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR">
                            <span class="fa fa-pencil fa-3x"></span>
                        </button>
                        <button id="btnAsignar" class="btn btn3d btn-king-blue btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ASIGNAR PRODUCTOS">
                            <span class="fa fa-arrow-down fa-3x"></span>
                        </button>
                        <button id="btnRefresh" class="btn btn-warning btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x"></span>
                        </button>
                        <button id="btnNuevoMovimiento" class="btn btn-dark btn-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO MOVIMIENTO">
                            <span class="fa fa-sign-in fa-3x"></span>
                        </button>
                        <button id="btnEntrada" class="btn btn-indigo btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA ENTRADA">
                            <span class="fa fa-sign-in fa-3x"></span>
                        </button>
                        <button id="btnEntradas" class="btn btn-indigo btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ENTRADAS">
                            <span class="fa fa-eye fa-3x"></span>
                        </button>
                        <button id="btnSalida" class="btn btn-danger btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA SALIDA">
                            <span class="fa fa-external-link fa-3x"></span>
                        </button>
                        <button id="btnSalidas" class="btn btn-danger btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="SALIDAS">
                            <span class="fa fa-eye fa-3x"></span>
                        </button>
                        <button id="btnDevolucion" class="btn btn-a-orange btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVA DEVOLUCIÓN">
                            <span class="fa fa-sign-in fa-3x"></span>
                        </button>
                        <button id="btnMovimientos" class="btn btn-brown btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="MOVIMIENTOS">
                            <span class="fa fa-eye fa-3x"></span>
                        </button>
                        <button id="btnRecepcion" class="btn btn-danger btn-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR MOVIMIENTO">
                            <span class="fa fa-times fa-3x"></span>
                        </button>
                    </div> 
                    <div id="rAlmacen" class=""></div> 
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
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
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
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
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
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
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
                            <button type="button" class="btn btn3d btn-brown" id="btnTrash"><span class="fa fa-trash fa-4x"></span></button>
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
                                    data-original-title="QUITAR TODOS" class="btn btn3d btn-danger"><span class="fa fa-angle-double-left fa-5x"></span></button>
                            <button id="btnAgregarTodos"
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="AGREGAR TODOS" class="btn btn3d btn-success"><span class="fa fa-angle-double-right fa-5x"></span></button>
                        </div>
                        <div class="col-md-3">
                            <label for="">PRODUCTO</label>
                            <input type="text" id="txtSearchA" name="txtSearchA" class="form-control" placeholder="NOMBRE DEL PRODUCTO">
                        </div>
                        <div class="col-md-2" id="nProductosAsignados" align="center"></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6" id="dtblProductos">
                            <table id="tblProductos" class="">
                                <thead> 
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>  

                        <div class="col-md-6" id="dtblProductosAsignados" style="">  
                        </div> 
                        <div class="col-md-12" id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
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
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
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
                        <div class="col-md-6">
                            <label for="">ALMACEN</label>
                            <select id="IdAlmacen" name="IdAlmacen" class="form-control"></select>
                        </div>
                        <div class="col-md-6">
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
                            <label for="">OBSERVACIONES</label>
                            <input type="text" id="ObservacionesGenerales" name="ObservacionesGenerales" class="form-control" placeholder="EJ: EL MATERIAL SE ENTREGO COMPLETO, NO HABIA MATERIAL SUFICIENTE, NO SE ENCONTRO EL MATERIAL SOLICITADO">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-12" id="msgResult"></div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
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
    var btnSalida = $("#btnSalida");
    var btnSaveSalida = mdlSalida.find("#btnSave");

    var btnEntradas = $("#btnEntradas");
    var btnSalidas = $("#btnSalidas");


    $(document).ready(function () {

        btnSaveSalida.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            var detalle = [];
            mdlSalida.find("table  tbody > tr").each(function (key, value) {
                $(this).each(function (k, v) {
                    var row = $(v).find("td");
                    
//            var producto = {
//                IdEntrada: row[0].innerText, 
//                IdProducto:row[2].innerText, 
//                Producto:row[6].innerText, 
//                Condicion:row[4].innerText, 
//                CondicionT:row[8].innerText,  
//                TipoSalida:row[8].innerText, 
//                CantidadSaliente, 
//                CantidadCajas, 
//                CantidadPaquetes, 
//                CantidadUnidades, 
//                UnidadMedida, 
//                Precio, 
//                FechaEgreso, 
//                HoraEgreso, 
//                IdProveedor, 
//                ProveedorT, 
//                NombreEntrega, 
//                ReferenciaFactura, 
//                Observaciones
//            };
                    console.log(row);
                });
            });
//            var frm = new FormData(mdlSalida.find("#frmSalida")[0]);
//            frm.append('DETALLE', JSON.stringify(detalle));
//            $.ajax({
//                url: master_url + 'onAddSalida',
//                type: "POST",
//                cache: false,
//                contentType: false,
//                processData: false,
//                data: frm
//            }).done(function (data, x, jq) {
//                console.log(data, x, jq);
////                mdlSalida.modal('hide');
//                btnSalidas.trigger('click');
//                onNotify('<span class="fa fa-check fa-lg"></span>', 'INFORMACIÓN INGRESADA CON EXITO', 'success');
//            }).fail(function (x, y, z) {
//                console.log(x, y, z);
//            }).always(function () {
                HoldOn.close();
//            });
        });

        btnSalidas.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });

            temp = 0;
            var target_result = $("#rAlmacen");
            var msgAlmacen = $("#msgAlmacen");
            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getSalidas',
                type: "POST",
                dataType: "JSON",
            }).done(function (data, x, jq) {
                var tblName = "tblEntradas";
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

        btnEntradas.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });

            temp = 0;
            var target_result = $("#rAlmacen");
            var msgAlmacen = $("#msgAlmacen");
            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getEntradas',
                type: "POST",
                dataType: "JSON",
            }).done(function (data, x, jq) {
                var tblName = "tblEntradas";
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

        mdlSalidaIdAlmacen.change(function () {
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
                                Precio: rowx[8].innerText,
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
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'INFORMACIÓN INGRESADA CON EXITO', 'success');
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

        IdAlmacenmdlEntrada.change(function () {
            mdlEntrada.find("#tblResult").html("");
            mdlEntrada.find("#Proveedor").val("");
            IdOrdenDeCompramdlEntrada.select2("val", "");
            getOrdenesDeCompra(IdAlmacenmdlEntrada.val());
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
                });

                $(head[0]).addClass("hide");
                $(head[1]).addClass("hide");
                $(head[3]).addClass("hide");
                $(head[2]).addClass("hide");
                $(head[9]).addClass("hide");
                $(head[10]).addClass("hide");

                $(foot[0]).addClass("hide");
                $(foot[1]).addClass("hide");
                $(foot[4]).addClass("hide");
                $(foot[3]).addClass("hide");
                $(foot[9]).addClass("hide");
                $(foot[10]).addClass("hide");

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
                sts += "\"></div> <button type=\"button\" class=\"btn btn3d btn-indigo\" onclick=\"onUpload(this)\"><span class=\"fa fa-arrow-up fa-2x\"></span></button>";
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

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEntrada.click(function () {
            getAlmacenesConProductosAsignados();
            mdlEntrada.find("#tblResult").html("");
            mdlEntrada.modal('show');
        });

        btnMovimientos.click(function () {
            console.log('Consultando Movimientos...');
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });

            temp = 0;
            var target_result = $("#rAlmacen");
            var msgAlmacen = $("#msgAlmacen");
            target_result.html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
            $.ajax({
                url: master_url + 'getMovimientos',
                type: "POST",
                dataType: "JSON",
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
                    console.log(rowx)
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
            getResponsables();
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

//        $("#tblProductosAsignados thead tr").droppable({
//            hoverClass: "highlight",
//            drop: function (event, e) {
//
//                var row = '<tr>';
//                row += e.draggable[0].innerHTML;
//                row += "<td><button type=\"button\" class=\"btn btn3d btn-lg btn-danger\">";
//                row += "<span class=\"fa fa-minus fa-2x\" onclick=\"onRemove(this)\"></span></button></td>";
//                row += "</tr>";
//
//                $("#tblProductosAsignados tbody").append(row);
//                $(e.draggable).remove();
//                $(e.helper).remove();
//                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
//                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
//            }
//        });

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
        getUsuarios();
        getProyectos();
        getProveedores();
        getAlmacenes();
        call.add(onGetRecords("tblAlmacenes", master_url + "getRecords", "rAlmacen", "msgAlmacen", "NO SE ENCONTRARON REGISTROS"));
        call.fire();
    }

    function onGetRecords(tblname, url, target_result, target_fail_messages, fail_message)
    {
        temp = 0;
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
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
                });
            } else {
                $("#" + target_result).html("");
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
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
        }).done(function (data, x, jq) {
//            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            mdlNuevo.find("#Proyecto").html(options);
            mdlModificar.find("#Proyecto").html(options);
            mdlNuevoMovimiento.find("#Proyecto").html(options);
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
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            $(".modal form #IdAlmacen").html(options);
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
            data: {
                ID: mdlNuevoMovimiento.find("#IdAlmacen").val()
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
            data: {
                ID: mdlNuevoMovimiento.find("#IdAlmacen").val()
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
            data: {
                ID: mdlNuevoMovimiento.find("#IdAlmacen").val(),
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
                options = options + '<option value="' + v.ID + '">' + v.PRODUCTO + '</option>';
            });
            mdlAsignacion.find("#IdProducto").html(options);
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
        }).done(function (data, x, jq) {
//            console.log(data);
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
        }).done(function (data, x, jq) {
//            console.log(data);
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
            data: {
                ID: Pais.val()
            }
        }).done(function (data, x, jq) {
//            console.log(data);
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
            data: {
                ID: Estado.val()
            }
        }).done(function (data, x, jq) {
//            console.log(data);
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
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function (data) {
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
            } else {
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
            data: {
                ID: mdlAsignacionIdAlmacen.val()
            }
        }).done(function (data) {
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

                $("#tblProductos tbody tr").each(function (k, v) {
                    $(v).find("td div").removeClass("col-md-6").addClass("col-md-12");
                });

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
            } else {
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
            data: {
                ID: mdlAsignacionIdAlmacen.val()
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
                    $(v).append("<td><button type=\"button\" class=\"btn btn3d btn-indigo\"><span class=\"fa fa-check-square-o fa-3x\" onclick=\"onRemoveAsignado(this)\"></span></button></td>");
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
                        row += "<td><button type=\"button\" class=\"btn btn3d btn-danger\">";
                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
                        row += "</tr>";

                        $("#" + tblName + " tbody").append(row);
                        $(e.draggable).remove();
                        $(e.helper).remove();
                        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
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

                $("#dtblProductosAsignados").html(tbl);
                $("#dtblProductosAsignados thead tr").droppable({
                    hoverClass: "highlight",
                    drop: function (event, e) {

                        var row = '<tr>';
                        row += e.draggable[0].innerHTML;
                        row += "<td><button type=\"button\" class=\"btn btn3d btn-danger\">";
                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
                        row += "</tr>";

                        $("#" + tblName + " tbody").append(row);
                        $(e.draggable).remove();
                        $(e.helper).remove();
                        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
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
                    $(v).append("<td><button type=\"button\" class=\"btn btn3d btn-indigo\"><span class=\"fa fa-check-square-o fa-3x\" onclick=\"onRemoveAsignado(this)\"></span></button></td>");
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
                        row += "<td><button type=\"button\" class=\"btn btn3d btn-danger\">";
                        row += "<span class=\"fa fa-minus fa-4x\" onclick=\"onRemove(this)\"></span></button></td>";
                        row += "</tr>";

                        $("#" + tblName + " tbody").append(row);
                        $(e.draggable).remove();
                        $(e.helper).remove();
                        var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                        nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
                    }
                });
            } else {
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

    function onRemoveAsignados() {
//        console.log('------------------------------------------------------');
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
                console.log($(this))
                var rowx = "<tr>";
                rowx += $(this)[0].innerHTML;
                rowx += "<td><button type=\"button\" class=\"btn btn3d btn-lg btn-danger\">";
                rowx += "<span class=\"fa fa-minus fa-2x\" onclick=\"onRemove(this)\"></span></button></td>";
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
            var btn = $(e).parent().parent().parent().find("td button").removeClass("btn-indigo").addClass("btn-danger").find("span.fa-check-square-o").removeClass("fa-check-square-o").addClass("fa-square-o");
        } else {
            $(e).parent().parent().parent().find("td")[3].innerText = "ACTIVO";
            var btn = $(e).parent().parent().parent().find("td button").removeClass("btn-indigo").addClass("btn-indigo").find("span.fa-square-o").removeClass("fa-square-o").addClass("fa-check-square-o");
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
        }).done(function (data, x, jq) {
//            console.log(data);
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

    function getOrdenesDeCompra() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });
        $.ajax({
            url: master_url + 'getOrdenesDeCompra',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: mdlEntrada.find("#IdAlmacen").val()
            }
        }).done(function (data, x, jq) {
            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ORDEN + '</option>';
            });
            mdlEntrada.find("#IdOrdenDeCompra").html(options);

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
            xCajas.val(nCajas);
            console.log("ERROR");
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA CANTIDAD INGRESADA, DEBE DE SER MENOR O IGUAL A LA CANTIDAD DISPONIBLE.', 'danger');
        }
    }

    function onCalcularPaquetes(e) {
        var row = $(e).parent().parent();
        var xPaquetes = $(e);
        var nPaquetes = $(row).find("td")[12].innerText;
        var nUnidades = $(row).find("td")[13].innerText;

        if (parseFloat(xPaquetes.val()) <= parseFloat(nPaquetes)) {
            console.log("xPaquetes: " + xPaquetes.val());
            console.log("nPaquetes: " + nPaquetes);
            console.log(nPaquetes);
        } else {
            xPaquetes.val(nPaquetes);
            console.log("ERROR");
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA CANTIDAD INGRESADA, DEBE DE SER MENOR O IGUAL A LA CANTIDAD DISPONIBLE.', 'danger');
        }
//        console.log("PAQUETES");
//        console.log(nPaquetes);
//        console.log("UNIDADES");
//        console.log(nUnidades);

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
            xUnidades.val(nUnidades);
            console.log("ERROR");
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA CANTIDAD INGRESADA, DEBE DE SER MENOR O IGUAL A LA CANTIDAD DISPONIBLE.', 'danger');
        }
//        console.log("PAQUETES");
//        console.log(nPaquetes);
//        console.log("UNIDADES");
//        console.log(nUnidades);

    }
</script>