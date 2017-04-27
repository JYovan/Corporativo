<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" onclick="onHideFunctions()"><h3 class="text-white">MÓDULO PRECIOS DEL CEMENTO<span class="fa fa-chevron-up" ></span></h3></div>
                </div>
                <div class="col-md-2 panel-title" align="right">
                    <label for="chkTooltip"><input type="checkbox" class="" id="chkTooltip" name="chkTooltip" data-toggle="tooltip" data-placement="left" data-original-title="MOSTRAR LEYENDAS"></label>
                </div>
            </div>
            <div class="panel-body">
                <fieldset  align="center">
                    <div class="col-md-12" id="btnAccions">   
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-info btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x info-icon"></span>
                            </button>
                        </span>
                        <button id="btnEdit" class="btn btn-success btn-lg fa-lg" 
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
                        <button id="btnEliminar" class="btn btn-danger btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="ELIMINAR">
                            <span class="fa fa-trash fa-3x danger-icon"></span>
                        </button> 
                        <button id="btnBuscar" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="BUSQUEDA">
                            <span class="fa fa-search fa-3x lime-icon"></span>
                        </button> 
                        <button id="btnComercializador" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="AGREGAR COMERCIALIZADOR">
                            <span class="fa fa-phone fa-3x purple-icon"></span>
                        </button>
                        <button id="btnEditarComercializador" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR COMERCIALIZADOR DE CEMENTO">
                            <span class="fa fa-pencil fa-3x cyan-icon"></span>
                        </button>
                        <button id="btnVerComercializador" class="btn btn-default btn-lg fa-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="COMERCIALIZADORES DE CEMENTO">
                            <span class="fa fa-eye fa-3x brown-icon"></span>
                        </button>

                        <!--<hr>-->
                    </div>
                </fieldset>
                <div class="hide" id="dSearch"> 
                    <form id="fSearch">
                        <div class="col-md-5">
                            <input type="text" id="Inicio" name="Inicio" class="form-control cursor-hand" placeholder="FECHA INICIAL" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> 
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="Fin" name="Fin" class="form-control cursor-hand" placeholder="FECHA FINAL" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> 
                        </div>
                        <div class="col-md-2">
                            <button type="button" id="btnBuscarAhora" class="btn btn3d btn-default btn-lg fa-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="BUSCAR"><span class="fa fa-search fa-2x sea-icon"></span></button>
                            <button type="button" class="btn btn3d btn-default fa-lg" id="btnReportePrecioCemento" name="btnReportePrecioCemento" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="GENERAR REPORTE"><span class="fa fa-check fa-2x"></span></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12" id="msgCemento"></div> 
                <div class="col-md-12" id="rCemento"></div> 

            </div>
        </div>
    </div>
</div>  
<div class="col-md-6 margin-15-top">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">GRÁFICO</h3>
        </div>
        <div class="panel-body">
            <canvas id="chart_bar"></canvas>
        </div>
    </div>
</div>
<div class="col-md-6 margin-15-top">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">GRÁFICO</h3>
        </div>
        <div class="panel-body">
            <canvas id="chart_pie" ></canvas>
        </div>
    </div>
</div>
</div> 
<!--CHART--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script> 
<script>
                        var optionsBar = {
                            responsive: true,
                            tooltips: {
                                custom: function (tooltip) {
                                    // tooltip will be false if tooltip is not visible or should be hidden
                                    if (!tooltip) {
                                        return;
                                    }

                                    // Otherwise, tooltip will be an object with all tooltip properties like:

                                    // tooltip.caretSize
                                    // tooltip.caretPadding
                                    // tooltip.chart
                                    // tooltip.cornerRadius
                                    // tooltip.fillColor
                                    // tooltip.font...
                                    // tooltip.text
                                    // tooltip.x
                                    // tooltip.y
                                    // etc...
                                }
                            }
                        };
                        var dtm = [{
                                label: "CEMENTO BLANCO",
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)'
                                ],
                                borderWidth: 1,
                                data: [50.0],
                            }
                            ,
                            {
                                label: "CEMENTO GRIS",
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)'
                                ],
                                borderWidth: 1,
                                data: [50.0],
                            },
                            {
                                label: "MORTERO",
                                backgroundColor: [
                                    'rgba(255, 206, 86, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 206, 86, 1)'
                                ],
                                borderWidth: 1,
                                data: [50],
                            }];

                        var dataBar = {
                            labels: ["OCTUBRE", "NOVIEMBRE", "DICIEMBRE"],
                            datasets: dtm
                        };

                        var optionsLine = {
                            responsive: true
                        };

                        var dataLine = {
                            labels: ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"],
                            datasets: [
                                {
                                    label: "DATOS PRIMARIOS",
                                    fillColor: "rgba(220,220,220,0.2)",
                                    strokeColor: "rgba(220,220,220,1)",
                                    pointColor: "rgba(220,220,220,1)",
                                    pointStrokeColor: "#fff",
                                    pointHighlightFill: "#fff",
                                    pointHighlightStroke: "rgba(220,220,220,1)",
                                    data: [28, 48, 40, 19, 86, 27, 90, 200, 87, 20, 50, 20]
                                },
                                {
                                    label: "DATOS SECUNDARIOS",
                                    fillColor: "rgba(151,187,205,0.2)",
                                    strokeColor: "rgba(151,187,205,1)",
                                    pointColor: "rgba(151,187,205,1)",
                                    pointStrokeColor: "#fff",
                                    pointHighlightFill: "#fff",
                                    pointHighlightStroke: "rgba(151,187,205,1)",
                                    data: [28, 48, 40, 19, 86, 27, 90, 200, 87, 20, 50, 20]
                                }
                            ]
                        };

                        function start() {
                            var ctx = document.getElementById("chart_bar").getContext("2d");
                            var BarChart = new Chart(ctx, {
                                type: 'bar',
                                data: dataBar,
                                options: optionsBar
                            });


                            var ctx2 = document.getElementById("chart_pie").getContext("2d");
                            var LineChart = new Chart(ctx2, {
                                type: 'line',
                                data: dataLine,
                                options: optionsLine
                            });
                        }

                        window.onload = start;


                        Chart.plugins.register({
                            beforeDraw: function (chartInstance) {
                                var ctx = chartInstance.chart.ctx;
                                ctx.fillStyle = "white";
                                ctx.fillRect(0, 0, chartInstance.chart.width, chartInstance.chart.height);
                            }
                        });

</script>
<!--END CHART-->
<!--MODALS-->

<div class="modal fade" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NUEVO PRECIO</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-6">
                            <label for="">FECHA</label>
                            <input id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> 
                        </div>

                        <div class="col-md-6">
                            <label for="">COMERCIALIZADOR</label>
                            <select id="Comercializador" name="Comercializador" class="form-control">
                            </select>
                        </div>
                        <DIV class="col-md-12"></DIV>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN ATIENDE</label>
                            <input type="text" id="Atiende" name="Atiende" class="form-control" placeholder="EJ: FULANITO PEREZ" > 
                        </div>

                        <div class="col-md-6">
                            <label for="">MARCA</label>
                            <select id="Marca" name="Marca" class="form-control">
                            </select>
                        </div>
                        <DIV class="col-md-12"></DIV>
                        <div class="col-md-4">
                            <label for="">CEMENTO BLANCO</label>
                            <input type="number" id="PrecioCblanco" name="PrecioCblanco" class="form-control" min="0" placeholder="0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">CEMENTO GRIS</label>
                            <input type="number" id="PrecioCgris" name="PrecioCgris" class="form-control"  min="0" placeholder="0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">CEMENTO MORTERO</label>
                            <input type="number" id="PrecioCmortero" name="PrecioCmortero" class="form-control"  min="0" placeholder="0.0">
                        </div> 
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-success btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="mdlUpdate" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> ACTUALIZAR PRECIO</h2>
            </div>
            <form id="frmUpdate">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12">
                            <label for="">ID</label>
                            <input id="ID" name="ID" class="form-control" readonly=""> 
                        </div>

                        <div class="col-md-6">
                            <label for="">FECHA</label>
                            <input id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> 
                        </div>

                        <div class="col-md-6">
                            <label for="">COMERCIALIZADOR</label>
                            <select id="Comercializador" name="Comercializador" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN ATIENDE</label>
                            <input type="text" id="Atiende" name="Atiende" class="form-control" placeholder="EJ: FULANITO PEREZ" > 
                        </div>

                        <div class="col-md-6">
                            <label for="">MARCA</label>
                            <select id="Marca" name="Marca" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">CEMENTO BLANCO</label>
                            <input type="number" id="PrecioCblanco" name="PrecioCblanco" class="form-control" min="0" placeholder="0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">CEMENTO GRIS</label>
                            <input type="number" id="PrecioCgris" name="PrecioCgris" class="form-control"  min="0" placeholder="0.0">
                        </div>
                        <div class="col-md-4">
                            <label for="">CEMENTO MORTERO</label>
                            <input type="number" id="PrecioCmortero" name="PrecioCmortero" class="form-control"  min="0" placeholder="0.0">
                        </div> 
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-success btn-lg fa-lg" type="button" id="btnSave" name="btnSave"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="mdlComercializador" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg super-fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO COMERCIALIZADOR</h2>
            </div> 
            <form id="frmComercializador">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <!--Direccion, Numero, Pais, Estado, Ciudad, Estatus, Registro-->
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: MARCIANITO" />
                        </div> 
                        <div class="col-md-6">
                            <label for="">TELEFONO</label>
                            <input type="tel" id="Tel" name="Tel" class="form-control" placeholder="EJ: 4771408263" />
                        </div> 
                        <div class="col-md-6">
                            <label for="">PAGINA</label>
                            <input type="text" id="Pagina" name="Pagina" class="form-control" placeholder="EJ: MARCIANITO.COM" />
                        </div> 
                        <div class="col-md-6">
                            <label for="">CALLE</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="EJ: CALLE, ENTRE CALLES"/>
                        </div> 
                        <div class="col-md-6">
                            <label for="">NUMERO</label>
                            <input type="text" id="Numero" name="Numero" class="form-control" placeholder="EJ: CALLE, ENTRE CALLES"/>
                        </div> 
                        <div class="col-md-4">
                            <label for="">PAIS</label>
                            <select id="Pais" name="Pais" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <select id="Ciudad" name="Ciudad" class="form-control"></select>
                        </div>
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

<div id="mdlComercializadorUpdate" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg super-fullscreen" role="document">
        <div class="modal-content">
            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">MODIFICAR COMERCIALIZADOR</h2>
            </div> 
            <form id="frmComercializador">
                <div id="messages-result" class="modal-body text-center">
                    <fieldset>
                        <!--Direccion, Numero, Pais, Estado, Ciudad, Estatus, Registro-->
                        <div class="col-md-12">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: MARCIANITO" />
                        </div> 
                        <div class="col-md-6">
                            <label for="">TELEFONO</label>
                            <input type="tel" id="Tel" name="Tel" class="form-control" placeholder="EJ: 4771408263" />
                        </div> 
                        <div class="col-md-6">
                            <label for="">PAGINA</label>
                            <input type="text" id="Pagina" name="Pagina" class="form-control" placeholder="EJ: MARCIANITO.COM" />
                        </div> 
                        <div class="col-md-6">
                            <label for="">CALLE</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="EJ: CALLE, ENTRE CALLES"/>
                        </div> 
                        <div class="col-md-6">
                            <label for="">NUMERO</label>
                            <input type="text" id="Numero" name="Numero" class="form-control" placeholder="EJ: CALLE, ENTRE CALLES"/>
                        </div> 
                        <div class="col-md-4">
                            <label for="">PAIS</label>
                            <input type="text" id="txtPais" name="txtPais" class="form-control " readonly="">
                            <select id="Pais" name="Pais" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <input type="text" id="txtEstado" name="txtEstado" class="form-control " readonly="">
                            <select id="Estado" name="Estado" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <input type="text" id="txtCiudad" name="txtCiudad" class="form-control " readonly="">
                            <select id="Ciudad" name="Ciudad" class="form-control"></select>
                        </div>
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

<!--END MODALS-->
<script>
    var master_url = base_url + 'index.php/ctrlCemento/';
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnRefresh = $("#btnRefresh");
    var btnEliminar = $("#btnEliminar");
    var btnBuscar = $("#btnBuscar");

    var mdlUpdate = $("#mdlUpdate");
    var btnSavemdlUpdate = mdlUpdate.find("#btnSave");
    var btnEdit = $("#btnEdit");

    var fSearch = $("#fSearch");
    var Inicio = $("#Inicio");
    var Fin = $("#Fin");
    var btnBuscarAhora = $("#btnBuscarAhora");

    var btnComercializador = $("#btnComercializador");
    var mdlComercializador = $("#mdlComercializador");
    var mdlComercializadorUpdate = $("#mdlComercializadorUpdate");
    var btnSaveComercializador = mdlComercializador.find("#btnSave");
    var btnVerComercializador = $("#btnVerComercializador");

    var btnEditarComercializador = $("#btnEditarComercializador");
    var btnUpdateComercializador = mdlComercializadorUpdate.find("#btnSave");

    var btnReportePrecioCemento = $("#btnReportePrecioCemento");

    $(document).ready(function () {

        btnReportePrecioCemento.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });

            $.ajax({
                url: master_url + 'onGenerarReporteDePrecios',
                type: "POST", 
                data: {
                    Inicio: Inicio.val(),
                    Fin: Fin.val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
                console.log(data,x,jq);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA: REPORTE GENERAL ACUMULADO');
                HoldOn.close();
                $("#btnReporteAcumuladoGeneral").find("span").addClass("fa-file-text");
            });
        });

        onGetRecords();
        getMarcas();
        getComercializadores();

//        START BUTTONS
        mdlComercializadorUpdate.find("#Pais").change(function () {
            mdlComercializadorUpdate.find("#txtPais").val(mdlComercializadorUpdate.find("#Pais").val());
        });

        mdlComercializadorUpdate.find("#Estado").change(function () {
            mdlComercializadorUpdate.find("#txtEstado").val(mdlComercializadorUpdate.find("#Estado").val());
        });

        mdlComercializadorUpdate.find("#Ciudad").change(function () {
            mdlComercializadorUpdate.find("#txtCiudad").val(mdlComercializadorUpdate.find("#Ciudad").val());
        });


        btnUpdateComercializador.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO..."
            });
            var frm = new FormData(mdlComercializadorUpdate.find("#frmComercializador")[0]);
            $.ajax({
                url: master_url + 'onUpdateComercializador',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnVerComercializador.trigger('click');
                mdlComercializadorUpdate.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        btnEditarComercializador.click(function () {
            getPaises();
            getEstados();
            $.ajax({
                url: master_url + 'getComercializadoresByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                console.log(dtm);
                getCiudadesXID(dtm.Estado);
                mdlComercializadorUpdate.find("#Nombre").val(dtm.Nombre);
                mdlComercializadorUpdate.find("#Tel").val(dtm.Tel);
                mdlComercializadorUpdate.find("#Pagina").val(dtm.Pagina);
                mdlComercializadorUpdate.find("#Direccion").val(dtm.Direccion);
                mdlComercializadorUpdate.find("#Numero").val(dtm.Numero);
                mdlComercializadorUpdate.find("#frmComercializador #txtPais").val(dtm.PaisT);
                mdlComercializadorUpdate.find("#Pais").select2("val", dtm.Pais);
                mdlComercializadorUpdate.find("#frmComercializador #txtEstado").val(dtm.EstadoT);
                mdlComercializadorUpdate.find("#Estado").select2("val", dtm.Estado);
                mdlComercializadorUpdate.find("#frmComercializador #txtCiudad").val(dtm.CiudadT);
                mdlComercializadorUpdate.find("#frmComercializador #Ciudad").select2("val", mdlComercializadorUpdate.find("#frmComercializador #txtCiudad").val());

                mdlComercializadorUpdate.modal('show');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnVerComercializador.click(function () {
            getRecordsComercializadores();
        });

        btnSaveComercializador.click(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO..."
            });
            var frm = new FormData(mdlComercializador.find("#frmComercializador")[0]);
            $.ajax({
                url: master_url + 'onAddComercializador',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnVerComercializador.trigger('click');
                mdlComercializador.modal('hide');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        btnComercializador.click(function () {
            getPaises();
            getCiudades();
            getEstados();
            mdlComercializador.modal('show');
        });

        btnBuscarAhora.click(function () {
            getRecordsByDate();
        });

        btnBuscar.click(function () {
            $("#dSearch").toggleClass("hide");
        });

        btnEliminar.click(function () {
            console.log(temp);
            if (temp !== undefined && temp !== null && temp !== '') {
                $.ajax({
                    url: master_url + 'onEliminar',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
                    btnRefresh.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('')
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnRefresh.click(function () {
            onGetRecords();
        });

        btnSavemdlUpdate.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            var frm = mdlUpdate.find("#frmUpdate").serialize();
            $.ajax({
                type: "POST",
                url: master_url + 'onUpdatePrecioCemento',
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnRefresh.trigger('click');
                mdlUpdate.modal('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ACTUALIZADO', 'success');
            }).fail(function (x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE PUDO ACTUALIZAR.', 'danger');
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
                console.log('ACTION COMPLETADA');
            });
        });
        btnGuardar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            var frm = mdlNuevo.find("#frmNuevo").serialize();
            $.ajax({
                type: "POST",
                url: master_url + 'onAddPrecioCemento',
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                btnRefresh.trigger('click');
                mdlNuevo.modal('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO AGREGADO', 'success');
            }).fail(function (x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE PUDO REGISTRAR.', 'danger');
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
                console.log('ACTION COMPLETADA');
            });
        });

        btnEdit.click(function () {
            if (temp !== undefined && temp !== null && temp !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getPreciosDelCementoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    if (dtm !== undefined) {
                        mdlUpdate.find("#ID").val(dtm.ID);
                        mdlUpdate.find("#Fecha").val(dtm.Fecha);
                        mdlUpdate.find("#Comercializador").select2("val", dtm.Comercializador);
                        mdlUpdate.find("#Marca").select2("val", dtm.Marca);
                        mdlUpdate.find("#Atiende").val(dtm.Atiende);
                        mdlUpdate.find("#PrecioCblanco").val(dtm.PrecioCblanco);
                        mdlUpdate.find("#PrecioCgris").val(dtm.PrecioCgris);
                        mdlUpdate.find("#PrecioCmortero").val(dtm.PrecioCmortero);
                        mdlUpdate.modal('show');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();

                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

//        END BUTTONS

    });


    function getRecordsByDate() {
        if (Inicio.val() !== undefined && Inicio.val() !== '' && Fin.val() !== undefined && Fin.val() !== '') {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ESPERE..."
            });
            dataf = new FormData($("#fSearch")[0]);
            $.ajax({
                url: master_url + 'getRecordsByDate',
                type: "POST",
                dataType: "JSON",
                data: {
                    Inicio: Inicio.val(),
                    Fin: Fin.val()
                }
            }).done(function (data, x, jq) {
                var tblName = "tblCemento";
                if (data.length > 0) {
                    $("#rCemento").html(getTable("tblCemento", data));

                    $('#tblCemento tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                    });

                    var tblSelected = $('#tblCemento').DataTable(tableOptions);

                    //CLICK SELECTED ROW
                    $('#tblCemento tbody').on('click', 'tr', function () {
                        $("#tblCemento").find("tr").removeClass("success");
                        $("#tblCemento").find("tr").removeClass("warning");
                        var id = this.id;
                        var index = $.inArray(id, selected);
                        if (index === -1) {
                            selected.push(id);
                        } else {
                            selected.splice(index, 1);
                        }
                        $(this).addClass('success');
                        var dtm = tblSelected.row(this).data();
//                temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                        temp = parseInt($(dtm[0])[0].innerText);
                    });

                    //DB CLICK FOR EDIT
                    $('#tblCemento tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                        console.log('IDFACT V1: ' + $(dtm[0]));
                        console.log($(dtm[0])[0].innerText);
                        var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                        temp = parseInt($(dtm[0])[0].innerText);
                        console.log('IDFACT: ' + temp);
//                    $("#btnEditar" + doc).trigger("click");
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
                    $("#msgCemento").html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">ERROR, REVISE LA CONSOLA PARA MÁS DETALLES</h1>' +
                            '</div>');
                    console.log(data, x, jq);
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('ACTION COMPLETADA');
                HoldOn.close();
            });
        }
    }

    function onGetRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });

        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var tblName = "tblCemento";
            if (data.length > 0) {
                $("#rCemento").html(getTable("tblCemento", data));

                $('#tblCemento tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#tblCemento').DataTable(tableOptions);

                //CLICK SELECTED ROW
                $('#tblCemento tbody').on('click', 'tr', function () {
                    $("#tblCemento").find("tr").removeClass("success");
                    $("#tblCemento").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
//                temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    temp = parseInt($(dtm[0])[0].innerText);
                });

                //DB CLICK FOR EDIT
                $('#tblCemento tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('IDFACT V1: ' + $(dtm[0]));
                    console.log($(dtm[0])[0].innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    console.log('IDFACT: ' + temp);
                    btnEdit.trigger("click");
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
                $("#msgCemento").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">ERROR, REVISE LA CONSOLA PARA MÁS DETALLES</h1>' +
                        '</div>');
                console.log(data, x, jq);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getRecordsComercializadores() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "ESPERE..."
        });

        $.ajax({
            url: master_url + 'getRecordsComercializadores',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var tblName = "tblComercializadores";
            if (data.length > 0) {
                $("#rCemento").html(getTable("tblComercializadores", data));

                $('#tblComercializadores tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#tblComercializadores').DataTable(tableOptions);

                //CLICK SELECTED ROW
                $('#tblComercializadores tbody').on('click', 'tr', function () {
                    $("#tblComercializadores").find("tr").removeClass("success");
                    $("#tblComercializadores").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
//                temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
//                    temp = parseInt($(dtm[0])[0].innerText);
                });

                //DB CLICK FOR EDIT
                $('#tblComercializadores tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log('IDFACT V1: ' + $(dtm[0]));
//                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt(dtm[0]);
                    console.log('IDFACT: ' + temp);
                    mdlComercializadorUpdate.find("#ID").val(temp);
                    btnEditarComercializador.trigger("click");
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
                $("#msgCemento").html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">ERROR, REVISE LA CONSOLA PARA MÁS DETALLES</h1>' +
                        '</div>');
                console.log(data, x, jq);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getMarcas() {
        $.ajax({
            url: master_url + 'getMarcas',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.MARCA + '</option>';
                    });
                    $(".modal #Marca").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
    function getPaises() {
        $.ajax({
            url: master_url + 'getPaises',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.PAIS + '</option>';
                    });
                    $(".modal #Pais").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getCiudades() {
        $.ajax({
            url: master_url + 'getCiudades',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.CIUDAD + '</option>';
                    });
                    $(".modal #Ciudad").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getCiudadesXID(ID) {
        $.ajax({
            url: master_url + 'getCiudadesXEstado',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID
            }
        }).done(function (data) {
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.CIUDAD + '</option>';
//                    console.log(v);
                });
                $(".modal #Ciudad").html(options);

            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

    function getEstados() {
        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.ESTADOS + '</option>';
                    });
                    $(".modal #Estado").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

    function getComercializadores() {
        $.ajax({
            url: master_url + 'getComercializadores',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.COMERCIALIZADOR + '</option>';
                    });
                    $(".modal #Comercializador").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }

</script>