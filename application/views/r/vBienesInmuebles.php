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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE BIENES INMUEBLES <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <div align="center">
                        <span  data-toggle="modal" data-easein="swoopIn"> 
                            <button class="btn btn-info btn-lg" id="btnNuevo"
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
                        <button id="btnRefresh" class="btn btn-warning btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x"></span>
                        </button> 
                        <button id="btnCancelar" class="btn btn-danger btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="CANCELAR">
                            <span class="fa fa-times fa-3x"></span>
                        </button>
                        <button id="btnCompraVenta" class="btn btn-indigo btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="DATOS DE COMPRAVENTA">
                            <span class="fa fa-money fa-3x"></span>
                        </button> 
                        <button id="btnFideicomiso" class="btn btn-king-blue btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="DATOS DE FIDEICOMISO">
                            <span class="fa fa-home fa-3x"></span>
                        </button>
                        <button id="btnExpediente" class="btn btn-dark btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ADJUNTAR EXPEDIENTE DE INMUEBLE">
                            <span class="fa fa-paperclip fa-3x"></span>
                        </button> 
                        <button id="btnVerExpedientes" class="btn btn-dark btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EXPEDIENTES DE INMUEBLES">
                            <span class="fa fa-eye fa-3x"></span>
                        </button> 
                        <button id="btnEditarExpediente" class="btn btn-dark btn-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR EXPEDIENTE DE INMUEBLES">
                            <span class="fa fa-pencil fa-3x"></span>
                        </button> 
                        <button id="btnEliminarExpediente" class="btn btn-dark btn-lg hide" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ELIMINAR EXPEDIENTE">
                            <span class="fa fa-trash fa-3x"></span>
                        </button> 
                    </div>
                    <div id="msgBienesInmuebles" class="col-md-12"></div>
                    <div id="rBienesInmuebles" class=""></div> 
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
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO INMUEBLE</h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset> 
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL PROPIETARIO</label>
                            <input type="text" class="form-control" id="Propietario" name="Propietario" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">RFC</label>
                            <input type="text" class="form-control" id="RFC" name="RFC" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CLAVE DEL IFE</label>
                            <input type="text" class="form-control" id="IFE" name="IFE" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" class="form-control" id="Calle1" name="Calle1" placeholder="EJ: AV.UNIVERSIDAD"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" class="form-control" id="Colonia1" name="Colonia1" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" class="form-control" id="Numero1" name="Numero1" placeholder="EJ: 301"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <input type="text" class="form-control" id="Estado1" name="Estado1" placeholder="EJ: GUANAJUATO"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <input type="text" class="form-control" id="Municipio1" name="Municipio1" placeholder="EJ: LEÓN"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COMUNIDAD</label>
                            <input type="text" class="form-control" id="Comunidad1" name="Comunidad1" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CODIGO POSTAL</label>
                            <input type="text" class="form-control" id="CP1" name="CP1" placeholder="EJ: 37500"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                            <input type="text" class="form-control" id="Tel1" name="Tel1" placeholder="EJ: 7766221"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CORREO</label>
                            <input type="text" class="form-control" id="Correo1" name="Correo1" placeholder="EJ: a@rabina.com.mx"/>
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS DEL VENDEDOR</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL VENDEDOR</label>
                            <input type="text" class="form-control" id="Vendedor" name="Vendedor" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">RFC</label>
                            <input type="text" class="form-control" id="RFC2" name="RFC2" placeholder="EJ: xxxxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CLAVE DEL IFE</label>
                            <input type="text" class="form-control" id="IFE2" name="IFE2" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" class="form-control" id="Calle2" name="Calle2" placeholder="EJ: AV.UNIVERSIDAD"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" class="form-control" id="Colonia2" name="Colonia2" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" class="form-control" id="Numero2" name="Numero2" placeholder="EJ: 301"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <input type="text" class="form-control" id="Estado2" name="Estado2" placeholder="EJ: GUANAJUATO"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <input type="text" class="form-control" id="Municipio2" name="Municipio2" placeholder="EJ: LEÓN"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COMUNIDAD</label>
                            <input type="text" class="form-control" id="Comunidad2" name="Comunidad2" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">C.P.</label>
                            <input type="text" class="form-control" id="CP2" name="CP2" placeholder="EJ: 37500"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                            <input type="text" class="form-control" id="Tel2" name="Tel2" placeholder="EJ: 7722661"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CORREO</label>
                            <input type="text" class="form-control" id="Correo2" name="Correo2" placeholder="EJ: a@rabina.com.mx"/>
                        </div>
                        <div class="col-md-12">
                            <h3>DESCRIPCIÓN DEL INMUEBLE</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO DE INMUEBLE</label>
                            <select class="form-control" id="Tinmueble" name="Tinmueble"></select>
                        </div>
                        <div class="col-md-8">
                            <label for="">UBICACIÓN</label>
                            <input type="text" class="form-control" id="Ubicacion" name="Ubicacion" />
                        </div>
                        <div class="col-md-12">
                            <h3>COLINDANCIAS</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">NORTE</label>
                            <input type="text" class="form-control" id="Norte" name="Norte">
                        </div>
                        <div class="col-md-6">
                            <label for="">NORESTE</label>
                            <input type="text" class="form-control" id="Sur" name="Sur">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUR</label>
                            <input type="text" class="form-control" id="Este" name="Este">
                        </div>
                        <div class="col-md-6">
                            <label for="">SURESTE</label>
                            <input type="text" class="form-control" id="Oeste" name="Oeste">
                        </div>
                        <div class="col-md-6">
                            <label for="">ESTE</label>
                            <input type="text" class="form-control" id="Noreste" name="Noreste">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOROESTE</label>
                            <input type="text" class="form-control" id="Sureste" name="Sureste">
                        </div>
                        <div class="col-md-6">
                            <label for="">OESTE</label>
                            <input type="text" class="form-control" id="Noroeste" name="Noroeste">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUROESTE</label>
                            <input type="text" class="form-control" id="Suroeste" name="Suroeste">
                        </div>
                        <div class="col-md-12">
                            <hr> 
                        </div>
                        <div class="col-md-6">
                            <label for="">SUPERFICIE DEL TERRENO</label>
                            <input type="text" class="form-control" id="Terreno" name="Terreno">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUPERFICIE CONSTRUIDA</label>
                            <input type="text" class="form-control" id="Construido" name="Construido">
                        </div>
                        <div class="col-md-12">
                            <h3>CONDICIONES BAJO LAS QUE SE ENCUENTRA</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">SERVIDUMBRES</label>
                            <input type="text" class="form-control" id="Servidumbres" name="Servidumbres" />
                        </div>
                        <div class="col-md-4">
                            <label for="">GRAVÁMENES</label>
                            <input type="text" class="form-control" id="Gravamenes" name="Gravamenes" />
                        </div>
                        <div class="col-md-4">
                            <label for="">OTRAS</label>
                            <input type="text" class="form-control" id="Otras" name="Otras" />
                        </div>
                        <div class="col-md-12">
                            <h3>PRECIO DEL BIEN</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">VALOR DEL BIEN</label>
                            <input type="text" class="form-control" id="Valor" name="Valor" />
                        </div>
                        <div class="col-md-6">
                            <label for="">VALOR DE VENTA</label>
                            <input type="text" class="form-control" id="Vventa" name="Vventa" />
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS DEL INMUEBLE EN EL REGISTRO PÚBLICO DE LA PROPIEDAD</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">TOMO</label>
                            <input type="text" class="form-control" id="Tomo" name="Tomo" />
                        </div>
                        <div class="col-md-4">
                            <label for="">LIBRO</label>
                            <input type="text" class="form-control" id="Libro" name="Libro" />
                        </div>
                        <div class="col-md-4">
                            <label for="">SECCIÓN</label>
                            <input type="text" class="form-control" id="Seccion" name="Seccion" />
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO</label>
                            <input type="text" class="form-control" id="Folio" name="Folio" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NUMERAL REGISTRAL</label>
                            <input type="text" class="form-control" id="Numeral" name="Numeral" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL NOTARIO PÚBLICO</label>
                            <input type="text" class="form-control" id="Notario" name="Notario" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE NOTARIO</label>
                            <input type="text" class="form-control" id="Nnotario" name="Nnotario" />
                        </div>
                        <div class="col-md-4">
                            <label for="">PARTIDO DE COMPETENCIA</label>
                            <input type="text" class="form-control" id="Partido" name="Partido" />
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


<div id="mdlModificar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO INMUEBLE</h2>
            </div> 
            <form id="frmUpdate">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset> 
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL PROPIETARIO</label>
                            <input type="text" class="form-control" id="Propietario" name="Propietario" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">RFC</label>
                            <input type="text" class="form-control" id="RFC" name="RFC" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CLAVE DEL IFE</label>
                            <input type="text" class="form-control" id="IFE" name="IFE" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" class="form-control" id="Calle1" name="Calle1" placeholder="EJ: AV.UNIVERSIDAD"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" class="form-control" id="Colonia1" name="Colonia1" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" class="form-control" id="Numero1" name="Numero1" placeholder="EJ: 301"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <input type="text" class="form-control" id="Estado1" name="Estado1" placeholder="EJ: GUANAJUATO"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <input type="text" class="form-control" id="Municipio1" name="Municipio1" placeholder="EJ: LEÓN"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COMUNIDAD</label>
                            <input type="text" class="form-control" id="Comunidad1" name="Comunidad1" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CODIGO POSTAL</label>
                            <input type="text" class="form-control" id="CP1" name="CP1" placeholder="EJ: 37500"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                            <input type="text" class="form-control" id="Tel1" name="Tel1" placeholder="EJ: 7766221"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CORREO</label>
                            <input type="text" class="form-control" id="Correo1" name="Correo1" placeholder="EJ: a@rabina.com.mx"/>
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS DEL VENDEDOR</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL VENDEDOR</label>
                            <input type="text" class="form-control" id="Vendedor" name="Vendedor" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">RFC</label>
                            <input type="text" class="form-control" id="RFC2" name="RFC2" placeholder="EJ: xxxxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CLAVE DEL IFE</label>
                            <input type="text" class="form-control" id="IFE2" name="IFE2" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" class="form-control" id="Calle2" name="Calle2" placeholder="EJ: AV.UNIVERSIDAD"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" class="form-control" id="Colonia2" name="Colonia2" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" class="form-control" id="Numero2" name="Numero2" placeholder="EJ: 301"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <input type="text" class="form-control" id="Estado2" name="Estado2" placeholder="EJ: GUANAJUATO"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <input type="text" class="form-control" id="Municipio2" name="Municipio2" placeholder="EJ: LEÓN"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">COMUNIDAD</label>
                            <input type="text" class="form-control" id="Comunidad2" name="Comunidad2" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">C.P.</label>
                            <input type="text" class="form-control" id="CP2" name="CP2" placeholder="EJ: 37500"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                            <input type="text" class="form-control" id="Tel2" name="Tel2" placeholder="EJ: 7722661"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">CORREO</label>
                            <input type="text" class="form-control" id="Correo2" name="Correo2" placeholder="EJ: a@rabina.com.mx"/>
                        </div>
                        <div class="col-md-12">
                            <h3>DESCRIPCIÓN DEL INMUEBLE</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO DE INMUEBLE</label>
                            <select class="form-control" id="Tinmueble" name="Tinmueble"></select>
                        </div>
                        <div class="col-md-8">
                            <label for="">UBICACIÓN</label>
                            <input type="text" class="form-control" id="Ubicacion" name="Ubicacion" />
                        </div>
                        <div class="col-md-12">
                            <h3>COLINDANCIAS</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">NORTE</label>
                            <input type="text" class="form-control" id="Norte" name="Norte">
                        </div>
                        <div class="col-md-6">
                            <label for="">NORESTE</label>
                            <input type="text" class="form-control" id="Sur" name="Sur">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUR</label>
                            <input type="text" class="form-control" id="Este" name="Este">
                        </div>
                        <div class="col-md-6">
                            <label for="">SURESTE</label>
                            <input type="text" class="form-control" id="Oeste" name="Oeste">
                        </div>
                        <div class="col-md-6">
                            <label for="">ESTE</label>
                            <input type="text" class="form-control" id="Noreste" name="Noreste">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOROESTE</label>
                            <input type="text" class="form-control" id="Sureste" name="Sureste">
                        </div>
                        <div class="col-md-6">
                            <label for="">OESTE</label>
                            <input type="text" class="form-control" id="Noroeste" name="Noroeste">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUROESTE</label>
                            <input type="text" class="form-control" id="Suroeste" name="Suroeste">
                        </div>
                        <div class="col-md-12">
                            <hr> 
                        </div>
                        <div class="col-md-6">
                            <label for="">SUPERFICIE DEL TERRENO</label>
                            <input type="text" class="form-control" id="Terreno" name="Terreno">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUPERFICIE CONSTRUIDA</label>
                            <input type="text" class="form-control" id="Construido" name="Construido">
                        </div>
                        <div class="col-md-12">
                            <h3>CONDICIONES BAJO LAS QUE SE ENCUENTRA</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">SERVIDUMBRES</label>
                            <input type="text" class="form-control" id="Servidumbres" name="Servidumbres" />
                        </div>
                        <div class="col-md-4">
                            <label for="">GRAVÁMENES</label>
                            <input type="text" class="form-control" id="Gravamenes" name="Gravamenes" />
                        </div>
                        <div class="col-md-4">
                            <label for="">OTRAS</label>
                            <input type="text" class="form-control" id="Otras" name="Otras" />
                        </div>
                        <div class="col-md-12">
                            <h3>PRECIO DEL BIEN</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">VALOR DEL BIEN</label>
                            <input type="text" class="form-control" id="Valor" name="Valor" />
                        </div>
                        <div class="col-md-6">
                            <label for="">VALOR DE VENTA</label>
                            <input type="text" class="form-control" id="Vventa" name="Vventa" />
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS DEL INMUEBLE EN EL REGISTRO PÚBLICO DE LA PROPIEDAD</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">TOMO</label>
                            <input type="text" class="form-control" id="Tomo" name="Tomo" />
                        </div>
                        <div class="col-md-4">
                            <label for="">LIBRO</label>
                            <input type="text" class="form-control" id="Libro" name="Libro" />
                        </div>
                        <div class="col-md-4">
                            <label for="">SECCIÓN</label>
                            <input type="text" class="form-control" id="Seccion" name="Seccion" />
                        </div>
                        <div class="col-md-4">
                            <label for="">FOLIO</label>
                            <input type="text" class="form-control" id="Folio" name="Folio" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NUMERAL REGISTRAL</label>
                            <input type="text" class="form-control" id="Numeral" name="Numeral" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL NOTARIO PÚBLICO</label>
                            <input type="text" class="form-control" id="Notario" name="Notario" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE NOTARIO</label>
                            <input type="text" class="form-control" id="Nnotario" name="Nnotario" />
                        </div>
                        <div class="col-md-4">
                            <label for="">PARTIDO DE COMPETENCIA</label>
                            <input type="text" class="form-control" id="Partido" name="Partido" />
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS DE LA COMPRA-VENTA</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL NOTARIO PÚBLICO</label>
                            <input type="text" class="form-control" id="Notario2" name="Notario2" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE NOTARIO</label>
                            <input type="text" class="form-control" id="Nnotario2" name="Nnotario2" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">PARTIDO COMPETENCIA</label>
                            <input type="text" class="form-control" id="Partido2" name="Partido2" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL COMPRADOR</label>
                            <select class="form-control" id="Comprador" name="Comprador">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE LA COMPRA VENTA</label>
                            <input type="text" class="form-control" id="FechaCompraVenta" name="FechaCompraVenta" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO DE LA OPERACIÓN</label>
                            <input type="text" class="form-control" id="Monto" name="Monto" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">MODALIDAD DE LA COMPRAVENTA</label>
                            <select class="form-control" id="Modalidad" name="Modalidad">
                                <option></option> 
                                <option value="Contado">Contado</option>
                                <option value="Parcialidades">Parcialidades</option>
                                <option value="Otras">Otras</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FORMA DE PAGO</label>  
                            <select class="form-control" id="FormaPago" name="FormaPago">
                                <option></option> 
                                <option value="Efectivo">Efectivo</option>
                                <option value="Transferencia">Transferencia</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">GASTOS DE IMPUESTOS EROGADOS</label>
                            <input type="text" class="form-control" id="Impuestos" name="Impuestos" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">GASTOS REGISTRALES</label>
                            <input type="text" class="form-control" id="GastosRegistrales" name="GastosRegistrales" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">GASTOS NOTARIALES</label>
                            <input type="text" class="form-control" id="GastosNotariales" name="GastosNotariales" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" class="form-control" readonly="" id="FechaLugarEntrega" name="FechaLugarEntrega" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker"/>
                        </div> 

                        <div class="col-md-12">
                            <h1>EXPEDIENTES ADJUNTOS</h1>
                            <hr>
                        </div>
                        <div align="center" class="col-md-12" id="AdjuntosPreview"></div>
                        <div class="col-md-12 table-responsive" id="Adjuntos"></div>
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


<div id="mdlCompraVenta" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">DATOS DE LA COMPRA-VENTA</h2>
            </div> 
            <form id="frmCompraVenta">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset> 
                        <div class="col-md-12">
                            <select id="ID" name="ID" class="form-control" readonly=""></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL NOTARIO PÚBLICO</label>
                            <input type="text" class="form-control" id="Notario2" name="Notario2" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE NOTARIO</label>
                            <input type="text" class="form-control" id="Nnotario2" name="Nnotario2" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">PARTIDO COMPETENCIA</label>
                            <input type="text" class="form-control" id="Partido2" name="Partido2" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL COMPRADOR</label>
                            <select class="form-control" id="Comprador" name="Comprador">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE LA COMPRA VENTA</label>
                            <input type="text" class="form-control" id="FechaCompraVenta" name="FechaCompraVenta" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MONTO DE LA OPERACIÓN</label>
                            <input type="text" class="form-control" id="Monto" name="Monto" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">MODALIDAD DE LA COMPRAVENTA</label>
                            <select class="form-control" id="Modalidad" name="Modalidad">
                                <option></option> 
                                <option value="Contado">Contado</option>
                                <option value="Parcialidades">Parcialidades</option>
                                <option value="Otras">Otras</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FORMA DE PAGO</label>  
                            <select class="form-control" id="FormaPago" name="FormaPago">
                                <option></option> 
                                <option value="Efectivo">Efectivo</option>
                                <option value="Transferencia">Transferencia</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">GASTOS DE IMPUESTOS EROGADOS</label>
                            <input type="text" class="form-control" id="Impuestos" name="Impuestos" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">GASTOS REGISTRALES</label>
                            <input type="text" class="form-control" id="GastosRegistrales" name="GastosRegistrales" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">GASTOS NOTARIALES</label>
                            <input type="text" class="form-control" id="GastosNotariales" name="GastosNotariales" placeholder="SIN SIMBOLOS, SIN COMA; EJ: 1501753.0031579"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" class="form-control" readonly="" id="FechaLugarEntrega" name="FechaLugarEntrega" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker"/>
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

<div id="mdlFideicomiso" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">DATOS DE FIDEICOMISO</h2>
            </div> 
            <form id="frmFideicomiso">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset> 
                        <div class="col-md-12">
                            <select id="ID" name="ID" class="form-control" readonly=""></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">FIDEICOMITENTE(S)</label>
                            <input type="text" class="form-control" id="Fideicomitente" name="Fideicomitente" placeholder="EJ: ROGELIO RAMIREZ"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">FIDUCIARIO(S)</label>
                            <input type="text" class="form-control" id="Fiduciario" name="Fiduciario" placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <label for="">FIDEICOMISARIO(S)</label>
                            <input type="text" class="form-control" id="Fideicomisario" name="Fideicomisario" placeholder="EJ: xxx-xxx"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">DELEGADOS FIDUCIARIOS</label>
                            <input type="text" class="form-control" id="Delegados" name="Delegados" /> 
                        </div>
                        <div class="col-md-4">
                            <label for="">DEPOSITARIO</label>
                            <input type="text" class="form-control" id="Depositario" name="Depositario" placeholder="EJ: CAMPESTRE"/>
                        </div>
                        <div class="col-md-4">
                            <label for="">ACTO CONSTITUTIVO DEL FIDEICOMISO</label>
                            <input type="text" class="form-control" id="Acto" name="Acto" placeholder=""/>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">TOMO</label>
                            <input type="text" class="form-control" id="Tomo2" name="Tomo2" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE ESCRITURA CONSTITTUTIVA</label>  
                            <input type="text" class="form-control" id="Numero" name="Numero"/>
                        </div> 
                        <div class="col-md-4">
                            <label for="">NÚMERO DE CONTRATO</label>
                            <input type="text" class="form-control" id="Contrato" name="Contrato" placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA</label>
                            <input type="text" class="form-control" readonly="" id="Fecha" name="Fecha" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker"/>
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

<div id="mdlExpediente" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">EXPEDIENTE DE INMUEBLES</h2>
            </div> 
            <form id="frmExpediente">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset> 
                        <div class="col-md-12">
                            <label for="">INMUEBLE</label>
                            <select id="ID" name="ID" class="form-control" readonly=""></select>
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO DE DOCUMENTO</label>
                            <select class="form-control" id="TDocumento" name="TDocumento"></select>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" class="form-control" id="Observaciones" name="Observaciones" placeholder="ESCRIBA AQUÍ SU HISTORIA"/>
                        </div> 
                        <div class="col-md-12">
                            <br>
                        </div> 
                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>ADJUNTAR DOCUMENTO</p>
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

<div id="mdlModificarExpediente" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">EDITAR EXPEDIENTE</h2>
            </div> 
            <form id="frmExpediente">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset> 
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="IDEXP" name="IDEXP" class="form-control" readonly=""/>
                        </div>
                        <div class="col-md-12">
                            <label for="">INMUEBLE</label>
                            <select id="ID" name="ID" class="form-control" readonly=""></select>
                        </div>
                        <div class="col-md-12">
                            <label for="">TIPO DE DOCUMENTO</label>
                            <select class="form-control" id="TDocumento" name="TDocumento"></select>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" class="form-control" id="Observaciones" name="Observaciones" placeholder="ESCRIBA AQUÍ SU HISTORIA"/>
                        </div> 
                        <div class="col-md-12">
                            <br>
                        </div> 
                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>ADJUNTAR DOCUMENTO</p>
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
<script>
    var master_url = base_url + 'index.php/ctrlBienesInmuebles/';
    var btnNuevo = $("#btnNuevo");
    var btnRefresh = $("#btnRefresh");
    var mdlNuevo = $("#mdlNuevo");
    var btnVerExpedientes = $("#btnVerExpedientes");
    var btnEditarExpediente = $("#btnEditarExpediente");
    var mdlModificar = $("#mdlModificar");
    var mdlCompraVenta = $("#mdlCompraVenta");
    var mdlFideicomiso = $("#mdlFideicomiso");
    var btnFideicomiso = $("#btnFideicomiso");

    var btnEditar = $("#btnEditar");

    var btnSave = mdlNuevo.find("#btnSave");
    var btnUpdate = mdlModificar.find("#btnSave");

    var btnCompraVenta = $("#btnCompraVenta");
    var btnSaveCompraVenta = mdlCompraVenta.find("#btnSave");

    var btnExpediente = $("#btnExpediente");
    var mdlExpediente = $("#mdlExpediente");
    var mdlModificarExpediente = $("#mdlModificarExpediente");

    var btnSaveExpediente = mdlExpediente.find("#btnSave");


    var RDocumentoImgD = mdlExpediente.find("#RDocumentoImgD");
    var RDocumentoFileD = mdlExpediente.find("#RDocumentoFileD");
    var RDocumentoDisplayD = mdlExpediente.find("#RDocumentoDisplayD");

    var RDocumentoImgDU = mdlModificarExpediente.find("#RDocumentoImgD");
    var RDocumentoFileDU = mdlModificarExpediente.find("#RDocumentoFileD");
    var RDocumentoDisplayDU = mdlModificarExpediente.find("#RDocumentoDisplayD");
    var btnSaveModificarExpediente = mdlModificarExpediente.find("#btnSave");

    var btnEliminarExpediente = $("#btnEliminarExpediente");

    $(document).ready(function () {

        btnEliminarExpediente.click(function () {
            if (temp !== undefined && temp !== null && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ELIMINANDO POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEliminarExpediente',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data,x,jq);
                    btnVerExpedientes.trigger('click');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', ' REGISTRO ELIMINADO', 'danger');
            }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnSaveModificarExpediente.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            mdlModificarExpediente.find("#ID").select2('enable');
            mdlModificarExpediente.find("#TDocumento").select2('enable');
            var frm = new FormData(mdlModificarExpediente.find("#frmExpediente")[0]);

            frm.append('IDEXP', mdlModificarExpediente.find("#IDEXP").val());
            frm.append('INMUEBLE', mdlModificarExpediente.find("#ID").find("option:selected").text());
            frm.append('DOCUMENTO', mdlModificarExpediente.find("#TDocumento").find("option:selected").text());

            $.ajax({
                url: master_url + 'onUpdateExpediente',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onRefresh();
                mdlModificarExpediente.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        btnEditarExpediente.click(function () {
            getReferenciadosTipo();
            if (temp !== undefined && temp !== null && temp > 0) {
                console.log(temp)
                $.ajax({
                    url: master_url + 'getExpedientesXInmuebleByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    RDocumentoDisplayDU.html("");
                    mdlModificarExpediente.find("#IDEXP").val(dtm.ID)
                    mdlModificarExpediente.find("#ID").select2("val", dtm.INMUEBLE);
                    mdlModificarExpediente.find("#TDocumento").select2("val", parseInt(dtm.DOCUMENTO));
                    mdlModificarExpediente.find("#Observaciones").val(dtm.OBSERVACIONES);
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "POR FAVOR ESPERE..."
                    });
                    if (dtm.RDOCUMENTO !== null && dtm.RDOCUMENTO !== undefined && dtm.RDOCUMENTO !== '') {
                        var ext = getExt(dtm.RDOCUMENTO);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            RDocumentoDisplayDU.html("<img id='trtImagen' src='" + dtm.RDOCUMENTO + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            RDocumentoDisplayDU.html('<embed src="' + dtm.RDOCUMENTO + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            RDocumentoDisplayDU.html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        RDocumentoDisplayDU.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                    HoldOn.close();
                    mdlModificarExpediente.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('OK');
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnVerExpedientes.click(function () {
            btnEditarExpediente.removeClass("hide");
            btnEliminarExpediente.removeClass("hide");
            getExpedientesXInmuebles("tblExpedientesInmuebles", master_url + "getExpedientesXInmuebles", "rBienesInmuebles", "msgBienesInmuebles", "NO SE ENCONTRARON REGISTROS");
        });

        btnSaveExpediente.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            var frm = new FormData(mdlExpediente.find("#frmExpediente")[0]);
            frm.append('INMUEBLE', mdlExpediente.find("#ID").find("option:selected").text());
            frm.append('DOCUMENTO', mdlExpediente.find("#TDocumento").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddExpediente',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onRefresh();
                mdlExpediente.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        RDocumentoImgD.click(function () {
            RDocumentoFileD.trigger('click');
        });

        RDocumentoFileD.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var imageType = /image.*/;
            if (RDocumentoFileD[0].files[0] !== undefined && RDocumentoFileD[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayD.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileD[0].files[0]);
            } else {
                if (RDocumentoFileD[0].files[0] !== undefined && RDocumentoFileD[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayD.html('<embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileD[0].files[0]);
                } else {
                    RDocumentoDisplayD.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
            HoldOn.close();
        });

        RDocumentoImgDU.click(function () {
            RDocumentoFileDU.trigger('click');
        });

        RDocumentoFileDU.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var imageType = /image.*/;
            if (RDocumentoFileDU[0].files[0] !== undefined && RDocumentoFileDU[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayDU.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileDU[0].files[0]);
            } else {
                if (RDocumentoFileDU[0].files[0] !== undefined && RDocumentoFileDU[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayDU.html('<embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileDU[0].files[0]);
                } else {
                    RDocumentoDisplayDU.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
            HoldOn.close();
        });


        btnExpediente.click(function () {
            getReferenciadosTipo();
            mdlExpediente.find("#RDocumentoDisplayD").html("");
            mdlExpediente.modal('show');
        });

        btnFideicomiso.click(function () {
            mdlFideicomiso.modal('show');
        });

        btnSaveCompraVenta.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var frm = new FormData(mdlCompraVenta.find("#frmCompraVenta")[0]);
            $.ajax({
                url: master_url + 'onAddCompraVenta',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onRefresh();
                mdlCompraVenta.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        btnCompraVenta.click(function () {
            mdlCompraVenta.modal('show');
        });

        btnEditar.click(function () {
            mdlModificar.find("#AdjuntosPreview").html("");
            if (temp !== undefined && temp !== null && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getRecordByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    if (dtm !== undefined && dtm !== null) {
                        var input = mdlModificar.find('input');
                        var select = mdlModificar.find('select');
                        mdlModificar.find("#ID").val(dtm.ID);
                        mdlModificar.find("#Propietario").val(dtm.Propietario);
                        mdlModificar.find("#RFC").val(dtm.RFC);
                        mdlModificar.find("#IFE").val(dtm.IFE);
                        mdlModificar.find("#Calle1").val(dtm.Calle1);
                        mdlModificar.find("#Numero1").val(dtm.Numero1);
                        mdlModificar.find("#Estado1").val(dtm.Estado1);
                        mdlModificar.find("#Municipio1").val(dtm.Municipio1);
                        mdlModificar.find("#Comunidad1").val(dtm.Comunidad1);
                        mdlModificar.find("#CP1").val(dtm.CP1);
                        mdlModificar.find("#Tel1").val(dtm.Tel1);
                        mdlModificar.find("#Correo1").val(dtm.Correo1);
                        mdlModificar.find("#Vendedor").val(dtm.Vendedor);
                        mdlModificar.find("#RFC2").val(dtm.RFC2);
                        mdlModificar.find("#IFE2").val(dtm.IFE2);
                        mdlModificar.find("#Calle2").val(dtm.Calle2);
                        mdlModificar.find("#Colonia2").val(dtm.Colonia2);
                        mdlModificar.find("#Numero2").val(dtm.Numero2);
                        mdlModificar.find("#Estado2").val(dtm.Estado2);
                        mdlModificar.find("#Municipio2").val(dtm.Municipio2);
                        mdlModificar.find("#Comunidad2").val(dtm.Comunidad2);
                        mdlModificar.find("#CP2").val(dtm.CP2);
                        mdlModificar.find("#Tel2").val(dtm.Tel2);
                        mdlModificar.find("#Correo2").val(dtm.Correo2);
                        mdlModificar.find("#Tinmueble").select2("val", dtm.Tinmueble);
                        mdlModificar.find("#Ubicacion").val(dtm.Ubicacion);
                        mdlModificar.find("#Norte").val(dtm.Norte);
                        mdlModificar.find("#Sur").val(dtm.Sur);
                        mdlModificar.find("#Este").val(dtm.Este);
                        mdlModificar.find("#Oeste").val(dtm.Oeste);
                        mdlModificar.find("#Noreste").val(dtm.Noreste);
                        mdlModificar.find("#Sureste").val(dtm.Sureste);
                        mdlModificar.find("#Noroeste").val(dtm.Noroeste);
                        mdlModificar.find("#Suroeste").val(dtm.Suroeste);
                        mdlModificar.find("#Terreno").val(dtm.Terreno);
                        mdlModificar.find("#Construido").val(dtm.Construido);
                        mdlModificar.find("#Servidumbres").val(dtm.Servidumbres);
                        mdlModificar.find("#Gravamenes").val(dtm.Gravamenes);
                        mdlModificar.find("#Otras").val(dtm.Otras);
                        mdlModificar.find("#Valor").val(dtm.Valor);
                        mdlModificar.find("#Vventa").val(dtm.Vventa);
                        mdlModificar.find("#Tomo").val(dtm.Tomo);
                        mdlModificar.find("#Libro").val(dtm.Libro);
                        mdlModificar.find("#Seccion").val(dtm.Seccion);
                        mdlModificar.find("#Folio").val(dtm.Folio);
                        mdlModificar.find("#Numeral").val(dtm.Numeral);
                        mdlModificar.find("#Notario").val(dtm.Notario);
                        mdlModificar.find("#Nnotario").val(dtm.Nnotario);
                        mdlModificar.find("#Partido").val(dtm.Partido);
                        mdlModificar.find("#Notario2").val(dtm.Notario2);
                        mdlModificar.find("#Nnotario2").val(dtm.Nnotario2);
                        mdlModificar.find("#Partido2").val(dtm.Partido2);
                        mdlModificar.find("#Comprador").select2("val", dtm.Comprador);
                        mdlModificar.find("#FechaCompraVenta").val(dtm.FechaCompraVenta);
                        mdlModificar.find("#Monto").val(dtm.Monto);
                        mdlModificar.find("#Modalidad").select2("val", dtm.Modalidad);
                        mdlModificar.find("#FormaPago").select2("val", dtm.FormaPago);
                        mdlModificar.find("#Impuestos").val(dtm.Impuestos);
                        mdlModificar.find("#GastosRegistrales").val(dtm.GastosRegistrales);
                        mdlModificar.find("#GastosNotariales").val(dtm.GastosNotariales);
                        mdlModificar.find("#FechaLugarEntrega").val(dtm.FechaLugarEntrega);
                        /**/
                        $.ajax({
                            url: master_url + 'getExpedientesXInmueble',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: temp
                            }
                        }).done(function (data, x, jq) {
                            console.log(data, x, jq);
                            mdlModificar.find("#Adjuntos").html(getTable("tblAdjuntos", data));

                            //CLICK SELECTED ROW
                            $('#tblAdjuntos tbody').on('click', 'tr', function () {
                                $("#tblAdjuntos").find("tr").removeClass("success");
                                $("#tblAdjuntos").find("tr").removeClass("warning");
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
                        }).fail(function (x, y, z) {
                            console.log('ERROR');
                            console.log(x, y, z);
                        }).always(function () {

                        });
                        /**/
                        mdlModificar.modal('show');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                    }

                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }

        });

        btnNuevo.click(function () {
            mdlNuevo.modal('show');
        });

        btnRefresh.click(function () {
            onRefresh();
        });

        btnSave.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
//                btnVerSembradoViviendas.trigger('click');
                onRefresh();
                mdlNuevo.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        btnUpdate.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var frm = new FormData(mdlModificar.find("#frmUpdate")[0]);
            $.ajax({
                url: master_url + 'onupdate',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
//                btnVerSembradoViviendas.trigger('click');
                onRefresh();
                mdlModificar.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        onRefresh();
    });

    function onRefresh() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
        btnEditarExpediente.addClass("hide");
        btnEliminarExpediente.addClass("hide");
        getInmueblesTipo();
        getBienesInmuebles();
        getCompradores();
        onGetRecords("tblBienesInmuebles", master_url + "getRecords", "rBienesInmuebles", "msgBienesInmuebles", "NO SE ENCONTRARON REGISTROS");
        HoldOn.close();
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

    function getExpedientesXInmuebles(tblname, url, target_result, target_fail_messages, fail_message)
    {
        temp = 0;
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
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
                    $("#btnEditarExpediente").trigger("click");
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

    function getInmueblesTipo()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getInmueblesTipo',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.TIPO + '</option>';
            });
            $(".modal").find("#Tinmueble").html(options);
//            $(".modal").find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getBienesInmuebles()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getBienesInmuebles',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.UBICACION + '</option>';
            });
            mdlCompraVenta.find("#ID").html(options);
            mdlFideicomiso.find("#ID").html(options);
            mdlExpediente.find("#ID").html(options);
            mdlModificarExpediente.find("#ID").html(options);
//            $(".modal").find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCompradores()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getCompradores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.USUARIO + '</option>';
            });
            $('.modal').find("#Comprador").html(options);
//            $(".modal").find("#IdProveedor").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getReferenciadosTipo()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getReferenciadosTipo',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.DOCUMENTO + '</option>';
            });
            mdlExpediente.find("#TDocumento").html(options);
            mdlModificarExpediente.find("#TDocumento").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDocumento(evt, file) {
        var display = mdlModificar.find("#AdjuntosPreview");
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
        if (file !== null && file !== undefined && file !== '') {
            var ext = getExt(file);
            console.log(ext);
            if (ext === "gif" || ext === "jpg" || ext === "png") {
                display.html("<img id='trtImagen' src='" + file + "' class ='img-responsive'/>");
            }
            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                display.html('<embed src="' + file + '" type="application/pdf" width="90%" height="800px"' +
                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
            }
            if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                display.html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
//                mdlNotaDeCreditoV.find("#fileuploadtf").removeClass("hide");
            }
        } else {
            display.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
//            mdlNotaDeCreditoV.find("#fileuploadtf").removeClass("hide");
        }
        HoldOn.close();
    }
</script>