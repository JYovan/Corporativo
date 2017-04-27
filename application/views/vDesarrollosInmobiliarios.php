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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DESARROLLOS INMOBILIARIOS <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <div align="center"> 
                        <button id="btnNuevo" class="btn btn-info btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="NUEVO">
                            <span class="fa fa-plus fa-3x info-icon"></span>
                        </button>

                        <button id="btnEditar" class="btn btn-success btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR">
                            <span class="fa fa-pencil fa-3x success-icon"></span>
                        </button>
                        <button id="btnRefresh" class="btn btn-warning btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x warning-icon"></span>
                        </button>
                        <button id="btnSembradoManzanas" class="btn btn-danger btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="SEMBRADO DE MANZANAS">
                            <span class="fa fa-apple fa-3x danger-icon"></span>
                        </button>
                        <button id="btnVerSembradoManzanas" class="btn btn-danger btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="VER SEMBRADO DE MANZANAS">
                            <span class="fa fa-eye fa-3x danger-icon"></span>
                        </button>
                        <button id="btnSembradoLotes" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="SEMBRADO DE LOTES">
                            <span class="fa fa-th fa-3x lime-icon"></span>
                        </button>
                        <button id="btnVerSembradoLotes" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="VER SEMBRADO DE LOTES">
                            <span class="fa fa-eye fa-3x lime-icon"></span>
                        </button>
                        <button id="btnSembradoViviendas" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="SEMBRADO DE VIVIENDAS">
                            <span class="fa fa-home fa-3x purple-icon"></span>
                        </button>
                        <button id="btnVerSembradoViviendas" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="VER SEMBRADO DE VIVIENDAS">
                            <span class="fa fa-eye fa-3x purple-icon"></span>
                        </button>

                    </div>
                    <div id="msgDesarrolloInmobiliario" class="col-md-12">

                    </div>
                    <div id="rDesarrolloInmobiliario" class=""></div> 
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
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO DESARROLLO INMOBILIARIO </h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-4">
                            <label for="">MODELO DE NEGOCIO</label>
                            <select  type="text" id="Modelo" name="Modelo" class="form-control" >
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">INMUEBLE A DESARROLLAR</label>
                            <select id="Inmueble" name="Inmueble" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL DESARROLLO</label>
                            <INPUT type="text" id="Proyecto" name="Proyecto" class="form-control" > 
                        </div>
                        <div class="col-md-12"><br><br></div>
                        <div class="col-md-4">
                            <label for="">SEGEMENTO DEL DESARROLLO</label>
                            <INPUT type="text"  id="SegmentoD" name="SegmentoD" class="form-control">  
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DEL TERRENO</label>
                            <input type="text"  id="SuperficieT" name="SuperficieT" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">SECCIONES A DESARROLLAR</label>
                            <input type="text" id="SeccionD" name="SeccionD" class="form-control" placeholder="SECC. 1">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO TOTAL DE VIVIENDAS</label>
                            <input type="text" id="NumeroViviendas" name="NumeroViviendas" class="form-control" placeholder="EJ: 500">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE INICIO</label>
                            <input type="text"  id="Finicio" readonly="" name="Finicio" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE TÉRMINO</label>
                            <input type="text" readonly="" id="Ftermino" name="Ftermino" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-3">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">NO</label>
                            <input type="text" id="No" name="No" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO</label>
                            <input type="text"  id="Tipo" name="Tipo" class="form-control">
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<div id="mdlModificar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">MODIFICAR DESARROLLO INMOBILIARIO </h2>
            </div> 
            <form id="frmModificar">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">MODELO DE NEGOCIO</label>
                            <select  type="text" id="Modelo" name="Modelo" class="form-control" >
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">INMUEBLE A DESARROLLAR</label>
                            <select id="Inmueble" name="Inmueble" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL DESARROLLO</label>
                            <INPUT type="text" id="Proyecto" name="Proyecto" class="form-control" > 
                        </div>
                        <div class="col-md-12"><br><br></div>
                        <div class="col-md-4">
                            <label for="">SEGEMENTO DEL DESARROLLO</label>
                            <INPUT type="text"  id="SegmentoD" name="SegmentoD" class="form-control">  
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DEL TERRENO</label>
                            <input type="text"  id="SuperficieT" name="SuperficieT" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">SECCIONES A DESARROLLAR</label>
                            <input type="text" id="SeccionD" name="SeccionD" class="form-control" placeholder="SECC. 1">
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO TOTAL DE VIVIENDAS</label>
                            <input type="text" id="NumeroViviendas" name="NumeroViviendas" class="form-control" placeholder="EJ: 500">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE INICIO</label>
                            <input type="text"  id="Finicio" readonly="" name="Finicio" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE TÉRMINO</label>
                            <input type="text" readonly="" id="Ftermino" name="Ftermino" class="form-control" placeholder="XX/XX/XXXX"  data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-3">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">NO</label>
                            <input type="text" id="No" name="No" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO</label>
                            <input type="text"  id="Tipo" name="Tipo" class="form-control">
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>


<div id="mdlSembradoManzanas" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">SEMBRADO DE MANZANAS</h2>
            </div> 
            <form id="frmSembradoManzanas">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">DESARROLLO</label>
                            <select  type="text" id="Desarrollo" name="Desarrollo" class="form-control" >
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">SECCION</label>
                            <select id="Seccion" name="Seccion" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE MANZANA</label>
                            <INPUT type="text" id="Manzana" name="Manzana" class="form-control" > 
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE HABITACIONAL</label>
                            <input type="text" id="SuperficieH" name="SuperficieH" class="form-control">  
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE COMERCIAL</label>
                            <input type="text"  id="SuperficieC" name="SuperficieC" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE DE DONACIÓN</label>
                            <input type="text" id="SuperficieD" name="SuperficieD" class="form-control" placeholder="SECC. 1">
                        </div>
                        <div class="col-md-6">
                            <label for="">SUPERFICIE VENDIBLE</label>
                            <input type="text" id="SuperficieV" name="SuperficieV" class="form-control" placeholder="EJ: 500">
                        </div>
                        <div class="col-md-6">
                            <label for="">TOTAL DE SUPERFICIE EN MANZANA</label>
                            <input type="text"  id="Total" name="Total" class="form-control">
                        </div> 
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>


<div id="mdlSembradoLotes" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">SEMBRADO DE LOTES</h2>
            </div> 
            <form id="frmSembradoLotes">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">DESARROLLO</label>
                            <select  type="text" id="Proyecto" name="Proyecto" class="form-control" >
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <select id="Manzana" name="Manzana" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE LOTES</label>
                            <INPUT type="text" id="NLotes" name="NLotes" class="form-control" > 
                        </div> 

                        <div class="col-md-12">
                            <label for="">CALLE</label>
                            <INPUT type="text"  id="Calle" name="Calle" class="form-control" placeholder="XXXX XXXX XXXX">  
                        </div>
                        <div class="col-md-4">
                            <label for="">CANTIDAD DE LOTES REGULARES</label>
                            <INPUT type="number"  id="LotesHr" name="LotesHr" class="form-control" placeholder="0">  
                        </div>
                        <div class="col-md-8">
                            <label for="">NUMERACIÓN DE LOTES</label>
                            <input type="text"  id="NLotesHr" name="NLotesHr" class="form-control" placeholder="1,2,3,4,5,6...50000"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">CANTIDAD DE LOTES IRREGULARES</label>
                            <input type="number" id="LotesHi" name="LotesHi" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-8">
                            <label for="">NUMERACIÓN DE LOTES</label>
                            <input type="text" id="NLotesHi" name="NLotesHi" class="form-control" placeholder="1,2,3,4,5,6...50000">
                        </div>
                        <div class="col-md-4">
                            <label for="">CANTIDAD DE LOTES COMERCIALES</label>
                            <input type="number"  id="LotesC"  name="LotesC" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-8">
                            <label for="">NUMERACIÓN DE LOTES</label>
                            <input type="text" id="NLotesC" name="NLotesC" class="form-control" placeholder="1,2,3,4,5,6...50000">
                        </div>
                        <div class="col-md-12">
                            <label for="">TOTAL DE LOTES EN MANZANA</label>
                            <input type="number" id="Total" name="Total" class="form-control" placeholder="EJ: 500">
                        </div> 
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>


<div id="mdlSembradoViviendas" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">SEMBRADO DE VIVIENDAS</h2>
            </div> 
            <form id="frmSembradoViviendas">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">DESARROLLO</label>
                            <select  type="text" id="Desarrollo" name="Desarrollo" class="form-control" >
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANAS</label>
                            <select id="Manzana" name="Manzana" class="form-control">
                            </select>  
                        </div>
                        <div class="col-md-4">
                            <label for="">TIPO DE LOTES</label>
                            <select type="text" id="TLotes" name="TLotes" class="form-control" > 
                            </select>  
                        </div> 
                        <div class="col-md-4">
                            <label for="">LOTES</label>
                            <select  type="text"  id="Lotes" name="Lotes" class="form-control">
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE VIVIENDAS</label>
                            <input type="text"  id="NViviendas" name="NViviendas" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">NUMERACIÓN DE VIVIENDAS</label>
                            <input type="text"  id="NumViviendas" name="NumViviendas" class="form-control" placeholder="200-A,200-B"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">SUPERFICIE VENDIBLE DEL LOTE</label>
                            <input type="text" id="SuperficieHV" name="SuperficieHV" class="form-control" placeholder="SECC. 1">
                        </div>
                        <div class="col-md-4">
                            <label for="">USO DEL LOTE</label>
                            <select id="Uso" name="Uso" class="form-control">
                                <option></option>
                                <option value="1">Habitacional</option>
                                <option value="2">Comercial</option>
                                <option value="3">Donación</option>
                            </select>
                        </div>
                        <div class="col-md-12"><br></div>
                        <div class="col-md-12">
                            <table id="tblViviendas" class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>NUMERO</th>
                                        <th>MANZANA</th>
                                        <th>LOTE</th>
                                        <th>MODELO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                                        <th>TIPO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table> 
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg fa-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnSave" name="btnSave" ><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + 'index.php/ctrlDesarrollosInmobiliarios/';
    var mdlNuevo = $("#mdlNuevo");
    var btnNuevo = $("#btnNuevo");
    var btnSave = mdlNuevo.find("#btnSave");
    var mdlModificar = $("#mdlModificar");
    var btnEditar = $("#btnEditar");
    var btnUpdate = mdlModificar.find("#btnSave");
    var btnRefresh = $("#btnRefresh");
    var btnSembradoManzanas = $("#btnSembradoManzanas");
    var btnSembradoLotes = $("#btnSembradoLotes");
    var btnSembradoViviendas = $("#btnSembradoViviendas");
    var btnVerSembradoManzanas = $("#btnVerSembradoManzanas");
    var btnVerSembradoLotes = $("#btnVerSembradoLotes");
    var btnVerSembradoViviendas = $("#btnVerSembradoViviendas");
    var mdlSembradoManzanas = $("#mdlSembradoManzanas"), mdlSembradoManzanasDesarrollo = mdlSembradoManzanas.find("#Desarrollo"),
            mdlSembradoManzanasSeccion = mdlSembradoManzanas.find("#Seccion"), btnSaveSembradoManzanas = mdlSembradoManzanas.find("#btnSave");

    var mdlSembradoLotes = $("#mdlSembradoLotes"), btnSaveSembradoLotes = mdlSembradoLotes.find("#btnSave"),
            mdlSembradoLotesDesarrollo = mdlSembradoLotes.find("#Proyecto"), mdlSembradoLotesLotesHr = mdlSembradoLotes.find("#LotesHr"),
            mdlSembradoLotesLotesHi = mdlSembradoLotes.find("#LotesHi"), mdlSembradoLotesLotesC = mdlSembradoLotes.find("#LotesC"),
            mdlSembradoLotesManzana = mdlSembradoLotes.find("#Manzana"), mdlSembradoLotesTotal = mdlSembradoLotes.find("#Total");

    var mdlSembradoViviendas = $("#mdlSembradoViviendas"), btnSaveSembradoViviendas = mdlSembradoViviendas.find("#btnSave"),
            mdlSembradoViviendasDesarrollo = mdlSembradoViviendas.find("#Desarrollo"), mdlSembradoViviendasLotes = mdlSembradoViviendas.find("#Lotes"),
            mdlSembradoViviendasManzana = mdlSembradoViviendas.find("#Manzana"), mdlSembradoViviendasTLotes = mdlSembradoViviendas.find("#TLotes"),
            mdlSembradoViviendastblViviendas = mdlSembradoViviendas.find("#tblViviendas"), mdlSembradoViviendasNViviendas = mdlSembradoViviendas.find("#NViviendas"),
            mdlSembradoViviendasNumViviendas = mdlSembradoViviendas.find("#NumViviendas"), mdlSembradoViviendasUso = mdlSembradoViviendas.find("#Uso"),
            mdlSembradoViviendasSuperficieHV = mdlSembradoViviendas.find("#SuperficieHV");


    $(document).ready(function () {

        mdlSembradoViviendas.on('show.bs.modal', function () {
            mdlSembradoViviendas.find('table tbody').empty();
        });


        mdlSembradoLotesLotesC.keyup(function () {
            var r = 0;
            r = parseInt((mdlSembradoLotesLotesHr.val() !== '') ? mdlSembradoLotesLotesHr.val() : 0) + parseInt((mdlSembradoLotesLotesHi.val() !== '') ? mdlSembradoLotesLotesHi.val() : 0) + parseInt((mdlSembradoLotesLotesC.val() !== '') ? mdlSembradoLotesLotesC.val() : 0);
            mdlSembradoLotesTotal.val(r);
        });
        mdlSembradoLotesLotesHi.keyup(function () {
            var r = 0;
            r = parseInt((mdlSembradoLotesLotesHr.val() !== '') ? mdlSembradoLotesLotesHr.val() : 0) + parseInt((mdlSembradoLotesLotesHi.val() !== '') ? mdlSembradoLotesLotesHi.val() : 0) + parseInt((mdlSembradoLotesLotesC.val() !== '') ? mdlSembradoLotesLotesC.val() : 0);
            mdlSembradoLotesTotal.val(r);
        });
        mdlSembradoLotesLotesHr.keyup(function () {
            var r = 0;
            r = parseInt((mdlSembradoLotesLotesHr.val() !== '') ? mdlSembradoLotesLotesHr.val() : 0) + parseInt((mdlSembradoLotesLotesHi.val() !== '') ? mdlSembradoLotesLotesHi.val() : 0) + parseInt((mdlSembradoLotesLotesC.val() !== '') ? mdlSembradoLotesLotesC.val() : 0);
            mdlSembradoLotesTotal.val(r);
        });


        btnSaveSembradoViviendas.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO . . ."
            });
            var frm = new FormData(mdlSembradoViviendas.find("#frmSembradoViviendas")[0]);
            frm.append('ManzanaT', mdlSembradoViviendas.find("#Manzana").find("option:selected").text());

            var detalle = [];
            mdlSembradoViviendastblViviendas.find("tbody tr").each(function (key, value) {

                $(this).each(function (k, v) {

                    var vivienda = {
                        Desarrollo: mdlSembradoViviendasDesarrollo.val(),
                        Manzana: $(v).find(".tdManzana")[0].innerText,
                        TLotes: mdlSembradoViviendasTLotes.val(),
                        Lotes: $(v).find(".tdLote")[0].innerText,
                        NViviendas: mdlSembradoViviendasNViviendas.val(),
                        NumViviendas: mdlSembradoViviendasNumViviendas.val(),
                        SuperficieHV: mdlSembradoViviendasSuperficieHV.val(),
                        Uso: mdlSembradoViviendasUso.val(),
                        Indicador: mdlSembradoViviendasDesarrollo.val(),
                        Modelo: $(v).find(".tdModelo").find("select :selected").text(),
                        Prototipo: $(v).find(".tdPrototipo").find("select :selected").text()
                    };
                    detalle.push(vivienda);

                });
            });
            frm.append('DETALLE', JSON.stringify(detalle));
            $.ajax({
                url: master_url + 'onAddSembradoViviendas',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnVerSembradoViviendas.trigger('click');
                mdlSembradoViviendas.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        btnSaveSembradoLotes.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO . . ."
            });
            var frm = new FormData(mdlSembradoLotes.find("#frmSembradoLotes")[0]);
            frm.append('ManzanaT', mdlSembradoLotes.find("#Manzana").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAddSembradoLotes',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnVerSembradoLotes.trigger('click');
                mdlSembradoLotes.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        btnSaveSembradoManzanas.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO . . ."
            });
            var frm = new FormData(mdlSembradoManzanas.find("#frmSembradoManzanas")[0]);
            $.ajax({
                url: master_url + 'onAddSembradoManzanas',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnVerSembradoManzanas.trigger('click');
                mdlSembradoManzanas.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        btnVerSembradoViviendas.click(function () {
            getSembradoDeViviendas("tblDesarrolloInmobiliarios", master_url + "getSembradoDeViviendas", "rDesarrolloInmobiliario", "msgDesarrolloInmobiliario", "NO SE ENCONTRARON REGISTROS");
        });
        btnVerSembradoLotes.click(function () {
            getSembradoDeLotes("tblDesarrolloInmobiliarios", master_url + "getSembradoDeLotes", "rDesarrolloInmobiliario", "msgDesarrolloInmobiliario", "NO SE ENCONTRARON REGISTROS");
        });
        btnVerSembradoManzanas.click(function () {
            getSembradoDeManzanas("tblDesarrolloInmobiliarios", master_url + "getSembradoDeManzanas", "rDesarrolloInmobiliario", "msgDesarrolloInmobiliario", "NO SE ENCONTRARON REGISTROS");
        });
        mdlSembradoViviendasNumViviendas.change(function () {
            onAddtblVivienda();
        });
        mdlSembradoViviendasUso.change(function () {
//            onAddtblVivienda();
        });

        mdlSembradoViviendasTLotes.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            mdlSembradoViviendasLotes.html("");
            mdlSembradoViviendasLotes.select2("val", "");
            $.ajax({
                url: master_url + 'getTipoLoteXProyectoYManzana',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: parseInt(mdlSembradoViviendasDesarrollo.val()),
                    MANZANA: parseInt(mdlSembradoViviendasManzana.find("option:selected").text())
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                var options = "<option></option>";
                var dtm = data[0];
                if (mdlSembradoViviendasTLotes.val() === "REGULARES") {
                    $.each(dtm.REGULARES.split(','), function (k, v) {
                        options = options + '<option value="' + v + '">' + v + '</option>';
                    });
                }
                if (mdlSembradoViviendasTLotes.val() === "IRREGULARES") {
                    $.each(dtm.IRREGULARES.split(','), function (k, v) {
                        options = options + '<option value="' + v + '">' + v + '</option>';
                    });
                }
                if (mdlSembradoViviendasTLotes.val() === "COMERCIALES") {
                    $.each(dtm.COMERCIALES.split(','), function (k, v) {
                        options = options + '<option value="' + v + '">' + v + '</option>';
                    });
                }
                mdlSembradoViviendasLotes.html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlSembradoViviendasManzana.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            mdlSembradoViviendasTLotes.html("");
            mdlSembradoViviendasTLotes.select2("val", "");
            $.ajax({
                url: master_url + 'getTipoLoteXProyectoYManzana',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: parseInt(mdlSembradoViviendasDesarrollo.val()),
                    MANZANA: parseInt(mdlSembradoViviendasManzana.find("option:selected").text())
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                var options = "<option></option>";
                var dtm = data[0];
                if (dtm.REGULARES !== '') {
                    options += "<option value=\"REGULARES\">REGULARES " + data[0].REGULARES + "</option>";
                }
                if (dtm.IRREGULARES !== '') {
                    options += "<option value=\"IRREGULARES\">IRREGULARES " + data[0].IRREGULARES + "</option>";
                }
                if (dtm.COMERCIALES !== '') {
                    options += "<option value=\"COMERCIALES\">COMERCIALES " + data[0].COMERCIALES + "</option>";
                }

                mdlSembradoViviendasTLotes.html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlSembradoViviendasDesarrollo.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            mdlSembradoViviendasManzana.html("");
            mdlSembradoViviendasManzana.select2("val", "");
            $.ajax({
                url: master_url + 'getManzanasXProyecto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlSembradoViviendasDesarrollo.val()
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    console.log(k, v);
                    if (v.MANZANA !== null && v.MANZANA !== "null" && v.MANZANA !== 'null') {
                        options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                    }
                });
                mdlSembradoViviendasManzana.html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlSembradoManzanasDesarrollo.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            mdlSembradoManzanasSeccion.html("");
            mdlSembradoManzanasSeccion.select2("val", "");
            $.ajax({
                url: master_url + 'getSeccionesXProyecto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlSembradoManzanasDesarrollo.val()
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    if (v.SECCION !== null && v.SECCION !== "null" && v.SECCION !== 'null') {
                        options = options + '<option value="' + v.ID + '">' + v.SECCION + '</option>';
                    }
                });
                mdlSembradoManzanasSeccion.html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlSembradoLotesDesarrollo.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            mdlSembradoLotesManzana.html("");
            mdlSembradoLotesManzana.select2("val", "");
            $.ajax({
                url: master_url + 'getManzanasXProyecto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlSembradoLotesDesarrollo.val()
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                var options = "<option></option>";
                $.each(data, function (k, v) {
                    console.log(k, v);
                    if (v.MANZANA !== null && v.MANZANA !== "null" && v.MANZANA !== 'null') {
                        options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                    }
                });
                mdlSembradoLotesManzana.html(options);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnSembradoViviendas.click(function () {
            mdlSembradoViviendas.modal('show');
        });
        btnSembradoLotes.click(function () {
            mdlSembradoLotes.modal('show');
        });
        btnSembradoManzanas.click(function () {
            mdlSembradoManzanas.modal('show');
        });
        btnUpdate.click(function () {
            var frm = new FormData(mdlModificar.find("#frmModificar")[0]);
            frm.append('ID', mdlModificar.find("#ID").val());
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onUpdate',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
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
        btnNuevo.click(function () {
            mdlNuevo.modal('show');
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
        $("#tblProductosAsignados tr").droppable({
            hoverClass: "highlight",
            drop: function (event, e) {

                var row = '<tr>';
                row += e.draggable[0].innerHTML;
                row += "<td><button type=\"button\" class=\"btn btn3d btn-lg fa-lg btn-danger\">";
                row += "<span class=\"fa fa-minus fa-2x\" onclick=\"onRemove(this)\"></span></button></td>";
                row += "</tr>";
                $("#tblProductosAsignados tbody").append(row);
                $(e.draggable).remove();
                $(e.helper).remove();
                var nrow = (parseInt($("#tblProductos tbody tr").length) - parseInt($("#tblProductos tbody tr.hide").length));
                nProductos.html("<br><span class=\"label label-emerald\">" + ((nrow === 1) ? nrow + " FILA" : nrow + " FILAS") + "</span>");
            }
        });
        btnRefresh.click(function () {
            onRefresh();
        });
        btnEditar.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && parseInt(temp) > 0) {
                onBeforeUpdate();
                mdlModificar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
//
//        btnSaveU.click(function () {
//            var frm = mdlModificar.find("#frmModificar");
//            $.ajax({
//                url: master_url + 'onUpdate',
//                type: "POST",
//                data: frm.serialize()
//            }).done(function (data, x, jq) {
//                console.log(data);
//                if (parseInt(data) === 1 || parseInt(data) === 11) {
//                    mdlModificar.modal('hide');
//                    btnRefresh.trigger('click');
//                }
//            }).fail(function (x, y, z) {
//                console.log(x, y, z);
//            }).always(function () {
//                HoldOn.close();
//            });
//        });
//
//        mdlModificar.on('show.bs.modal', function () {
//            HoldOn.open({
//                theme: "sk-bounce",
//                message: "CARGANDO DATOS..."
//            });
//            $.ajax({
//                url: master_url + 'getRecordByID',
//                type: "POST",
//                dataType: "JSON",
//                data: {
//                    ID: temp
//                }
//            }).done(function (data, x, jq) {
//                console.log(data);
//                var dtm = data[0];
//                mdlModificar.find("#ID").val(dtm.ID);
//                mdlModificar.find("#Proyecto").val(dtm.Proyecto);
//                mdlModificar.find("#Proyecto").select2('val', dtm.Proyecto);
//                mdlModificar.find("#Responsable").val(dtm.ID);
//                mdlModificar.find("#Responsable").select2('val', dtm.Responsable);
//                mdlModificar.find("#Numero").val(dtm.Numero);
//                mdlModificar.find("#Calle").val(dtm.Calle);
//                mdlModificar.find("#Colonia").val(dtm.Colonia);
//                mdlModificar.find("#Pais").val(dtm.PAIS);
//                mdlModificar.find("#Estado").val(dtm.ESTADO);
//                mdlModificar.find("#Municipio").val(dtm.MUNICIPIO);
//            }).fail(function (x, y, z) {
//                console.log(x, y, z);
//            }).always(function () {
//                HoldOn.close();
//            });
//        });

        onRefresh();
    });
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
        getModelosDeNegocio();
        getProyectos();
        getInmuebleRegistro();
        onGetRecords("tblDesarrolloInmobiliarios", master_url + "getRecords", "rDesarrolloInmobiliario", "msgDesarrolloInmobiliario", "NO SE ENCONTRARON REGISTROS");
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

    function getSembradoDeManzanas(tblname, url, target_result, target_fail_messages, fail_message)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
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
//                    temp = $(dtm[0])[0].innerText;
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
//                    temp = parseInt($(dtm[0])[0].innerText);
//                    $("#btnEditar").trigger("click");
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
            HoldOn.close();
        });
    }

    function getSembradoDeLotes(tblname, url, target_result, target_fail_messages, fail_message)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
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
//                    temp = $(dtm[0])[0].innerText;
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
//                    temp = parseInt($(dtm[0])[0].innerText);
//                    $("#btnEditar").trigger("click");
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
            HoldOn.close();
        });
    }


    function getSembradoDeViviendas(tblname, url, target_result, target_fail_messages, fail_message)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "POR FAVOR ESPERE..."
        });
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
//                    temp = $(dtm[0])[0].innerText;
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
//                    temp = parseInt($(dtm[0])[0].innerText);
//                    $("#btnEditar").trigger("click");
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
            HoldOn.close();
        });
    }

    function getModelosDeNegocio()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getModelosDeNegocio',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.MODELO + '</option>';
            });
            $(".modal").find("#Modelo").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
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
            $(".modal").find("#Desarrollo").html(options);
            $(".modal").find("#Proyecto").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getInmuebleRegistro()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getInmuebleRegistro',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            //            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                if (v.UBICACION !== undefined && v.UBICACION !== null && v.UBICACION !== 'null' && v.UBICACION !== 'NULL' && v.UBICACION !== '') {
                    options = options + '<option value="' + v.ID + '">' + v.PROPIETARIO + '(' + v.UBICACION + ')</option>';
                }
            });
            $(".modal").find("#Inmueble").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getDesarrolloInmobiliarioes()
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getDesarrolloInmobiliarioes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.ALMACEN + '</option>';
            });
            mdlAsignacion.find("#IdDesarrolloInmobiliario").html(options);
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
                rowx +=
                        rowx += "</tr>";
                $("#tblProductosAsignados tbody").append(rowx);
                $(this).remove();
            }
        });
    }

    function onBeforeUpdate() {
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
            console.log(data, x, jq);
            var dtm = data[0];
            mdlModificar.find("#ID").val(dtm.ID);
            mdlModificar.find("#Proyecto").val(dtm.Proyecto);
            mdlModificar.find("#Modelo").select2("val", dtm.Modelo);
            mdlModificar.find("#Inmueble").select2("val", dtm.Inmueble);
            mdlModificar.find("#SegmentoD").val(dtm.SegmentoD);
            mdlModificar.find("#SuperficieT").val(dtm.SuperficieT);
            mdlModificar.find("#SeccionD").val(dtm.SeccionD);
            mdlModificar.find("#NumeroViviendas").val(dtm.NumeroViviendas);
            mdlModificar.find("#Finicio").val(dtm.Finicio);
            mdlModificar.find("#Ftermino").val(dtm.Ftermino);
            mdlModificar.find("#Calle").val(dtm.Calle);
            mdlModificar.find("#No").val(dtm.No);
            mdlModificar.find("#Colonia").val(dtm.Colonia);
            mdlModificar.find("#Tipo").val(dtm.Tipo);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onAddtblVivienda() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        console.log('ok')
        var rowx = mdlSembradoViviendasNumViviendas.val();
        mdlSembradoViviendastblViviendas.find("tbody").empty();
        $.ajax({
            url: master_url + 'getModelosDeViviendas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.ajax({
                url: master_url + 'getViviendasPrototipos',
                type: "POST",
                dataType: "JSON"
            }).done(function (datax, x, jq) {
                var trs = "";
                $.each(rowx.split(','), function (k, v) {
                    trs += "<tr>";
                    trs += "<td class=\"tdNumero\">";
                    trs += v;
                    trs += "</td>";
                    trs += "<td class=\"tdManzana\">";
                    trs += mdlSembradoViviendasManzana.find("option:selected").text();
                    trs += "</td>";
                    trs += "<td class=\"tdLote\">";
                    trs += mdlSembradoViviendasLotes.find("option:selected").text();
                    trs += "</td>";
                    trs += "<td class=\"tdModelo\">";
                    trs += "<select class=\"form-control\">";
                    options = "<option></option>";
                    $.each(data, function (k, vk) {
                        options = options + '<option value="' + vk.ID + '">' + vk.MODELO + '</option>';
                    });

                    setOptions(options);
                    trs += options;
                    trs += "</select>";
                    trs += "</td>";
                    trs += "<td class=\"tdPrototipo\">";
                    trs += "<select class=\"form-control\">";
                    options = "<option></option>";
                    $.each(datax, function (k, vk) {
                        options = options + '<option value="' + vk.ID + '">' + vk.PROTOTIPO + '</option>';
                    });
                    setOptions(options);
                    trs += options;
                    trs += "</select>";
                    trs += "</td>";
                    trs += "</tr>";
                });
                mdlSembradoViviendastblViviendas.find("tbody").html(trs);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });

    }
    var options = "";
    function setOptions(option) {
        options = option;
        console.log(options);
    }

</script>
