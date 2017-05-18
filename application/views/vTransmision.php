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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE TRANSMISIÓN Y DISPERSIÓN<span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <span class="fa fa-navicon cursor-hand" onclick="onMenu()" data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                    </div>
                </div>
                <div class="panel-body">
                    <fieldset id="fAccions">
                        <div id="btnAccions" align="center" class="col-md-12">
                            <fieldset>
                                <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" accesskey="N" >
                                    <button id="btnAgregarTramiteFactura" class="btn btn3d btn-lg btn-default fa-3x"   data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                                        <span class="fa fa-plus fa-lg info-icon"></span>
                                    </button>
                                </span>
                                <button id="btnEditar" class="btn btn3d btn-lg btn-default fa-3x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="MODIFICAR"  ><span class="fa fa-pencil fa-lg success-icon"></span></button>
                                <button id="btnRefresh" class="btn btn3d btn-lg btn-default fa-3x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR"  ><span class="fa fa-refresh fa-lg warning-icon"></span></button>
                                <button id="btnCancelar" class="btn btn3d btn-lg btn-default fa-3x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR"  ><span class="fa fa-times fa-lg danger-icon"></span></button>
                                <button id="btnDispersar" class="btn btn3d btn-lg btn-default fa-3x "
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="DISPERSAR">
                                    <span class="fa fa-check fa-lg lime-icon"></span>
                                </button>
                                <button id="btnBusquedaEspecifica" class="btn btn3d btn-lg btn-default fa-3x" data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSQUEDA ESPECIFICA"  >
                                    <span class="fa fa-search fa-lg purple-icon"></span>
                                </button>
                                <button id="btnMovimientosCancelados" class="btn btn3d btn-lg btn-default fa-3x "
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="MOVIMIENTOS CANCELADOS">
                                    <span class="fa fa-eye-slash fa-lg danger-icon"></span>
                                </button>
                                <button id="btnDispersiones" class="btn btn3d btn-lg btn-default fa-3x "
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="TRANSMISIONES DISPERSADAS">
                                    <span class="fa fa-eye fa-lg"></span>
                                </button>
                                <button id="btnEditarDispersion" class="btn btn3d btn-lg btn-default fa-3x hide"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="EDITAR DISPERSION">
                                    <span class="fa fa-eye fa-lg"></span>
                                </button>
                                <button id="btnPagoDispersion" class="btn btn3d btn-lg btn-default fa-3x hide"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="AGREGAR PAGO DE DISPERSION">
                                    <span class="fa fa-money fa-lg lime-icon"></span>
                                </button>
                                <button id="btnEditarDispersionesPagadas" class="btn btn3d btn-lg btn-default fa-3x hide"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="EDITAR PAGO DE DISPERSION">
                                    <span class="fa fa-money fa-lg"></span>
                                </button>

                                <button id="btnCancelarPagoDispersion" class="btn btn3d btn-lg btn-default fa-3x hide"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR PAGO DE DISPERSION">
                                    <span class="fa fa-ban fa-lg danger-icon"></span>
                                </button>
                                <button id="btnHistorialDePagosXDispersion" class="btn btn3d btn-lg btn-default fa-3x hide"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="HISTORIAL DE PAGOS (DISPERSION)">
                                    <span class="fa fa-text-width fa-lg kingblue-icon"></span>
                                </button>
                                <button id="btnDispersionAcumulada" class="btn btn3d btn-lg btn-default fa-3x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="REPORTE DE DISPERSION ACUMULADA">
                                    <span class="fa fa-list-ol fa-lg"></span>
                                </button>
                                <button id="btnIncrementoTerreno" name="btnIncrementoTerreno" type="button" class="btn btn3d btn-default fa-3x hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO INCREMENTO"><span class="fa fa-adjust fa-lg kingblue-icon"></span></button>
                                <button id="btnCancelarIncrementoTerreno" name="btnCancelarIncrementoTerreno" type="button" class="btn btn3d btn-default fa-3x hide" data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR INCREMENTO"><span class="fa fa-ban fa-lg kingblue-icon"></span></button>

                                <button id="btnVerIncrementosDeTerrenos" name="btnVerIncrementosDeTerrenos" type="button" class="btn btn3d btn-default fa-3x" data-toggle="tooltip" data-placement="top" title="" data-original-title="VER INCREMENTOS">
                                    <span class="fa fa-eye fa-lg kingblue-icon"></span></button>
                            </fieldset>
                            <div id="dBusquedaEspecifica" class="hide">
                                <fieldset>
                                    <form id="fBusquedaEspecifica">
                                        <div class="col-md-4">
                                            <label for="">PROYECTO</label>
                                            <select id="Proyecto" name="Proyecto" class="form-control">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">FECHA INICIAL</label>
                                            <input type="text" id="FechaNotI" name="FechaNotI" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> 
                                        </div> 
                                        <div class="col-md-3">
                                            <label for="">FECHA FINAL</label>
                                            <input type="text" id="FechaNotF" name="FechaNotF" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn3d btn-lg btn-default fa-3x" id="btnBuscar" name="btnBuscar"><span class="fa fa-search fa-lg"></span></button>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                            <div id="rgb">
                            </div>
                            <div id="sDispersiones" class="hide">
                                <div class="col-md-2"><label for="">PROYECTO</label><select id="Proyecto" name="Proyecto" class="form-control"></select></div>
                                <div class="col-md-2"><label for="">ETAPA</label><select id="Etapa" name="Etapa" class="form-control"></select></div>
                                <div class="col-md-3"><label for="">FECHA INICIO</label><input type="text" id="Inicio" name="Inicio" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> </div>
                                <div class="col-md-3"><label for="">FECHA FINAL</label><input type="text" id="Fin" name="Fin" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""> </div>
                                <div class="col-md-12">
                                    <button type="button" id="btnBuscarDispersiones" class="btn btn3d btn-lg btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSCAR"><span class="fa fa-check fa-3x success-icon"></span></button>
                                    <button type="button" id="btnBuscarDispersionesXProyecto" class="btn btn3d btn-lg btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="GENERAR REPORTE DE DISPERSIONES POR PROYECTO"><span class="fa fa-check fa-3x warning-icon"></span></button>
                                    <button type="button" id="btnBuscarDispersionesXProyectoMasIncremento" class="btn btn3d btn-lg btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="GENERAR REPORTE DE DISPERSIONES POR PROYECTO (INCREMENTOS)"><span class="fa fa-check fa-3x kingblue-icon"></span></button>
                                    <button type="button" id="btnBuscarDispersionesXProyectoMasIncrementoTotales" class="btn btn3d btn-lg btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="GENERAR REPORTE DE DISPERSIONES POR PROYECTO (INCREMENTOS)(DIFERENCIAS)"><span class="fa fa-check fa-3x cyan-icon"></span></button>
                                </div>
                            </div>
                        </div>
                    </fieldset> 
                    <fieldset id=""> 
                        <div id="msgTransmisiones"></div>
                        <div class="col-md-12" id="tblTitulo"></div>
                        <div id="rTransmisiones"></div>
                    </fieldset>
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
    </fieldset>
</div>

<!--CHART--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script> 
<script>
                            var optionsBar = {
                                responsive: true,
                                tooltips: {
                                    custom: function (tooltip) {
                                        if (tooltip) {
                                            return;
                                        }
                                    }
                                }, scales: {
                                    yAxes: [{
                                            ticks: {
                                                min: 0,
                                                stepSize: 100
                                            }
                                        }]
                                }
                            };
                            var dtm = [{
                                    label: "TRANSMISIONES",
                                    backgroundColor: [
                                        'rgba(240,139,51, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(240,139,51, 1)'
                                    ],
                                    borderWidth: 1,
                                    data: [500],
                                }
                                ,
                                {
                                    label: "DISPERSIONES",
                                    backgroundColor: [
                                        'rgba(155,195,104,0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(155,195,104,1)'
                                    ],
                                    borderWidth: 1,
                                    data: [500],
                                },
                                {
                                    label: "DISPERSIONES PAGADAS",
                                    backgroundColor: [
                                        'rgba(46,136,159,0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(46,136,159,1)'
                                    ],
                                    borderWidth: 1,
                                    data: [250],
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

<div id="mdlNuevo" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> NUEVA TRANSMISION</h2>
            </div>
            <form id="fNuevo" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL INMUEBLE TRANSMITIDO</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">FECHA DE ENTREGA DE TRANSMISIÓN DE VIVIENDA A INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaEntrega" name="FechaEntrega" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE TRANSMISIÓN A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNot" name="FechaNot" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="Notificador" name="Notificador" class="form-control" required="" placeholder="ESCRIBA EL NOMBRE EN MAYUSCULA"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="RecibeNot" name="RecibeNot" class="form-control" required="" placeholder="ESCRIBA EL NOMBRE EN MAYUSCULA"/>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DE IDENTIFICACIÓN DE LA VIVIENDA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="NFideicomiso">PROYECTO</label>
                            <select id="NFideicomiso" name="NFideicomiso" class="form-control" readonly="" required="" value="0">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <select id="Manzana" name="Manzana" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE</label>
                            <select id="Lotes" name="Lotes" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NUMERO</label>
                            <select id="Viviendas" name="Viviendas" class="form-control"></select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL ADQUIRENTE</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL ADQUIRIENTE</label>
                            <input type="text" class="form-control" id="Adquirente" name="Adquirente">
                        </div>
                        <div class="col-md-4">
                            <label for="">GENERO</label>
                            <select type="text" class="form-control" id="Genero" name="Genero">
                                <option></option>
                                <option value="MASCULINO">MASCULINO</option>
                                <option value="FEMENINO">FEMENINO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELEFONO</label>
                            <input type="text" class="form-control" id="Telefono" name="Telefono">
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DESCRIPCIÓN DE LA COMPRA-VENTA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">PRECIO BASE</label>
                            <input type="number" class="form-control" id="PrecioBase" name="PrecioBase">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO DE DESCUENTO</label>
                            <input type="number" class="form-control" id="MontoDescuento" name="MontoDescuento">
                        </div>
                        <div class="col-md-6">
                            <label for="">COSTO ADICIONAL</label>
                            <input type="number" class="form-control" id="CostoAdic" name="CostoAdic">
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO TOTAL (COSTO ADICIONAL MENOS TOTAL DE DESCUENTOS)</label>
                            <input type="number" class="form-control" id="PrecioTotal" name="PrecioTotal">
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DESCUENTOS</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-3"></div>
                        <div class="col-md-3">CANTIDAD</div>
                        <div class="col-md-3">MONTO</div>
                        <div class="col-md-3">SUBTOTAL</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">DE CRÉDITOS</div>
                        <div class="col-md-3"><input id="txtCantidadCreditos" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoCreditos" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rCreditos">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">EMPRESARIAL</div>
                        <div class="col-md-3"><input id="txtCantidadEmpresarial" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoEmpresarial" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rEmpresarial">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">PROMOCIÓN MAMÁ</div>
                        <div class="col-md-3"><input id="txtCantidadPromocionMama" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoPromocionMama" type="number" class="form-control" placeholder="$0.0" min="0"></div> 
                        <div class="col-md-3" id="rPromocionMama">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">PRIMAVERA</div>
                        <div class="col-md-3"><input id="txtCantidadPrimavera" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoPrimavera" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rPrimavera">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">VERANO</div>
                        <div class="col-md-3"><input id="txtCantidadVerano" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoVerano" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rVerano">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">OLÍMPICO</div>
                        <div class="col-md-3"><input id="txtCantidadOlimpico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoOlimpico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rOlimpico">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">VIVA MÉXICO</div>
                        <div class="col-md-3"><input id="txtCantidadVivaMexico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoVivaMexico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rVivaMexico">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">DE MIEDO</div>
                        <div class="col-md-3"><input id="txtCantidadDeMiedo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoDeMiedo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rDeMiedo">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">AGUINALDO</div>
                        <div class="col-md-3"><input id="txtCantidadAguinaldo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoAguinaldo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rAguinaldo">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">BUEN FIN</div>
                        <div class="col-md-3"><input id="txtCantidadBuenFin" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoBuenFin" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rBuenFin">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">OTROS</div>
                        <div class="col-md-3"><input id="txtCantidadOtro" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoOtro" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rOtros">$0.0</div>

                        <div class="col-md-12"><hr></div>
                        <div class="col-md-8" align="rigth" id="">
                            <h2>TOTAL</h2>
                        </div>
                        <div id="" class="col-md-4">
                            <input type ="text" class="form-control" id="rGranDescuentoTotal" name="txtDescuentoTotal" placeholder="$0.0" readonly="">
                        </div>
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-3">
                            <label for="">FORMA DE TRANSMITIR LA VIVIENDA</label>
                            <select id="FormaTrans" name="FormaTrans" class="form-control" >
                                <option value="1">DE CONTADO</option>
                                <option value="2">POR CRÉDITO</option>
                                <option value="3">DONACIÓN</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">MONTO DE ANTICIPO</label>
                            <input type="number" class="form-control" id="MontoAnt" name="MontoAnt" placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="">OTROS ABONOS</label>
                            <input type="number" class="form-control" id="OtrosAbonos" name="OtrosAbonos" placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="">CRÉDITO COFINANCIADO</label>
                            <select id="Cofinanciado" name="Cofinanciado" class="form-control" >
                                <option value="NA">N/A</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option> 
                            </select>
                        </div>

                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">CRÉDITO A</label>
                            <input type="text" class="form-control" id="CreditoA" name="CreditoA" placeholder="0">
                        </div>

                        <div class="col-md-6">
                            <label for="">INSTITUCIÓN</label>
                            <select id="InstitucionA" name="InstitucionA" class="form-control" >
                                <option></option>
                                <option value="1">INFONAVIT</option>
                                <option value="2">COFINAVIT</option>
                                <option value="3">FOVISSTE</option> 
                                <option value="4">ISSEG</option> 
                                <option value="5">BBVA BANCOMER</option> 
                                <option value="6">BANCARIO</option> 
                                <option value="7">BANORTE</option> 
                                <option value="8">BANCO DEL BAJÍO</option> 
                                <option value="9">SANTANDER SERFIN</option> 
                                <option value="10">SCOTIABANK</option> 
                                <option value="11">HSBC</option>
                                <option value="12">HIPOTECARIA NACIONAL</option>
                                <option value="13">SOFOL</option>
                                <option value="14">SOFOM</option>
                                <option value="15">OTRO</option>
                                <option value="16">BANAMEX</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">CRÉDITO B</label>
                            <input type="text" class="form-control" id="CreditoB" name="CreditoB" placeholder="0">
                        </div>

                        <div class="col-md-6">
                            <label for="">INSTITUCIÓN</label>
                            <select id="InstitucionB" name="InstitucionB" class="form-control" >
                                <option></option>
                                <option value="1">INFONAVIT</option>
                                <option value="2">COFINAVIT</option>
                                <option value="3">FOVISSTE</option> 
                                <option value="4">ISSEG</option> 
                                <option value="5">BBVA BANCOMER</option> 
                                <option value="6">BANCARIO</option> 
                                <option value="7">BANORTE</option> 
                                <option value="8">BANCO DEL BAJÍO</option> 
                                <option value="9">SANTANDER SERFIN</option> 
                                <option value="10">SCOTIABANK</option> 
                                <option value="11">HSBC</option>
                                <option value="12">HIPOTECARIA NACIONAL</option>
                                <option value="13">SOFOL</option>
                                <option value="14">SOFOM</option>
                                <option value="15">OTRO</option>
                                <option value="16">BANAMEX</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO DE VENTA NETO</label>
                            <input type="number" class="form-control" id="PrecioVentaN" name="PrecioVentaN" placeholder="0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO DE VENTA EN ESCRITURA (IMPORTE DEL CONTADO)</label>
                            <input type="number" class="form-control" id="PrecioVentaE" name="PrecioVentaE" placeholder="0.0">
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">INGRESO POR TERRENO Y VENTA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">PAGO DE TERRENO</label>
                            <input type="number" id="PagoTerreno" name="PagoTerreno" class="form-control" placeholder="0.0" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">PAGO DE RENDIMIENTOS (SE OBTIENE DEL PORCENTAJE DE GANANCIA ESTIPULADO AL PRECIO DE VENTA NETO)</label>
                            <input type="number" id="PagoRendimientos" name="PagoRendimientos" class="form-control" placeholder="0.0" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">TOTAL DE INGRESO POR TERRENO Y VENTA</label>
                            <input type="number" id="TotalIng" name="TotalIng" class="form-control" placeholder="0" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">FIRMA CON NOTARIO PÚBLICO</label>
                            <input type="text" id="FirmaNP" name="FirmaNP" class="form-control" placeholder="SI/NO">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE FIRMA CON EL NOTARIO PÚBLICO</label>
                            <input type="text" id="FechaFirmaNP" name="FechaFirmaNP" class="form-control" placeholder="XX/XX/XXXX" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DEL NOTARIO PÚBLICO</label>
                            <input type="text" id="NPub" name="NPub" class="form-control" placeholder="ESCRIBA EL NOMBRE DEL NOTARIO">
                        </div>
                        <div class="col-md-6">
                            <label for="">NÚMERO DE NOTARIO PÚBLICO</label>
                            <input type="text" id="NumNP" name="NumNP" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">PARTIDO DE ADSCRIPCIÓN</label>
                            <input type="text" id="Adscripcion" name="Adscripcion" class="form-control" placeholder="-">
                        </div>
                        <div class="col-md-6">
                            <label for="">NUMERAL REGISTRAL</label>
                            <input type="text" id="NumeralR" name="NumeralR" class="form-control" placeholder="-">
                        </div>
                        <div class="col-md-6">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" id="Observaciones" name="Observaciones" class="form-control" placeholder="-">
                        </div>
                        <div id="RDocumentoDisplay" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFile" name="RDocumentoFile">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImg">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlModificar" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> MODIFICAR TRANSMISIÓN</h2>
            </div>
            <form id="fModificar" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL INMUEBLE TRANSMITIDO</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">FECHA DE ENTREGA DE TRANSMISIÓN DE VIVIENDA A INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaEntrega" name="FechaEntrega" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE TRANSMISIÓN A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNot" name="FechaNot" class="form-control" required="" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="Notificador" name="Notificador" class="form-control" required="" placeholder="ESCRIBA EL NOMBRE EN MAYUSCULA"/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="RecibeNot" name="RecibeNot" class="form-control" required="" placeholder="ESCRIBA EL NOMBRE EN MAYUSCULA"/>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DE IDENTIFICACIÓN DE LA VIVIENDA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="NFideicomiso">PROYECTO</label>
                            <select id="NFideicomiso" name="NFideicomiso" class="form-control" readonly="" required="" value="0">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Manzana Actual</label>
                            <input type="text" id="Manzana" name="Manzana" readonly="" class="form-control">
                            <label for="">MANZANA</label>
                            <select id="ManzanaU" name="ManzanaU" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE Actual</label>
                            <input type="text" id="Lotes" name="Lotes" readonly="" class="form-control">
                            <label for="">LOTE</label>
                            <select id="LotesU" name="LotesU" class="form-control"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NUMERO Actual</label>
                            <input type="text" id="Viviendas" name="Viviendas" readonly="" class="form-control">
                            <label for="">NUMERO</label>
                            <select id="ViviendasU" name="ViviendasU" class="form-control"></select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DATOS DEL ADQUIRENTE</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE DEL ADQUIRIENTE</label>
                            <input type="text" class="form-control" id="Adquirente" name="Adquirente">
                        </div>
                        <div class="col-md-4">
                            <label for="">GENERO</label>
                            <select type="text" class="form-control" id="Genero" name="Genero">
                                <option></option>
                                <option value="MASCULINO">MASCULINO</option>
                                <option value="FEMENINO">FEMENINO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELEFONO</label>
                            <input type="text" class="form-control" id="Telefono" name="Telefono">
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DESCRIPCIÓN DE LA COMPRA-VENTA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">PRECIO BASE</label>
                            <input type="number" class="form-control" id="PrecioBase" name="PrecioBase">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO DE DESCUENTO</label>
                            <input type="number" class="form-control" id="MontoDescuento" name="MontoDescuento">
                        </div>
                        <div class="col-md-6">
                            <label for="">COSTO ADICIONAL</label>
                            <input type="number" class="form-control" id="CostoAdic" name="CostoAdic">
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO TOTAL (COSTO ADICIONAL MENOS TOTAL DE DESCUENTOS)</label>
                            <input type="number" class="form-control" id="PrecioTotal" name="PrecioTotal">
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">DESCUENTOS</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-3"></div>
                        <div class="col-md-3">CANTIDAD</div>
                        <div class="col-md-3">MONTO</div>
                        <div class="col-md-3">SUBTOTAL</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">DE CRÉDITOS</div>
                        <div class="col-md-3"><input id="txtCantidadCreditos" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoCreditos" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rCreditos">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">EMPRESARIAL</div>
                        <div class="col-md-3"><input id="txtCantidadEmpresarial" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoEmpresarial" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rEmpresarial">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">PROMOCIÓN MAMÁ</div>
                        <div class="col-md-3"><input id="txtCantidadPromocionMama" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoPromocionMama" type="number" class="form-control" placeholder="$0.0" min="0"></div> 
                        <div class="col-md-3" id="rPromocionMama">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">PRIMAVERA</div>
                        <div class="col-md-3"><input id="txtCantidadPrimavera" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoPrimavera" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rPrimavera">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">VERANO</div>
                        <div class="col-md-3"><input id="txtCantidadVerano" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoVerano" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rVerano">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">OLÍMPICO</div>
                        <div class="col-md-3"><input id="txtCantidadOlimpico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoOlimpico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rOlimpico">$0.0</div>
                        <div class="col-md-12"></div>

                        <div class="col-md-3">VIVA MÉXICO</div>
                        <div class="col-md-3"><input id="txtCantidadVivaMexico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoVivaMexico" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rVivaMexico">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">DE MIEDO</div>
                        <div class="col-md-3"><input id="txtCantidadDeMiedo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoDeMiedo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rDeMiedo">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">AGUINALDO</div>
                        <div class="col-md-3"><input id="txtCantidadAguinaldo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoAguinaldo" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rAguinaldo">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">BUEN FIN</div>
                        <div class="col-md-3"><input id="txtCantidadBuenFin" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoBuenFin" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rBuenFin">$0.0</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">OTROS</div>
                        <div class="col-md-3"><input id="txtCantidadOtro" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3"><input id="txtMontoOtro" type="number" class="form-control" placeholder="$0.0" min="0"></div>
                        <div class="col-md-3" id="rOtros">$0.0</div>

                        <div class="col-md-12"><hr></div>
                        <div class="col-md-8" align="rigth" id="">
                            <h2>TOTAL</h2>
                        </div>
                        <div id="" class="col-md-4">
                            <input type ="text" class="form-control" id="rGranDescuentoTotal" name="txtDescuentoTotal" placeholder="$0.0" readonly="">
                        </div>
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-3">
                            <label for="">FORMA DE TRANSMITIR LA VIVIENDA</label>
                            <select id="FormaTrans" name="FormaTrans" class="form-control" >
                                <option value="1">DE CONTADO</option>
                                <option value="2">POR CRÉDITO</option>
                                <option value="3">DONACIÓN</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">MONTO DE ANTICIPO</label>
                            <input type="number" class="form-control" id="MontoAnt" name="MontoAnt" placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="">OTROS ABONOS</label>
                            <input type="number" class="form-control" id="OtrosAbonos" name="OtrosAbonos" placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="">CRÉDITO COFINANCIADO</label>
                            <select id="Cofinanciado" name="Cofinanciado" class="form-control" >
                                <option value="NA">N/A</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option> 
                            </select>
                        </div>

                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">CRÉDITO A</label>
                            <input type="text" class="form-control" id="CreditoA" name="CreditoA" placeholder="0">
                        </div>

                        <div class="col-md-6">
                            <label for="">INSTITUCIÓN</label>
                            <select id="InstitucionA" name="InstitucionA" class="form-control" >
                                <option></option>
                                <option value="1">INFONAVIT</option>
                                <option value="2">COFINAVIT</option>
                                <option value="3">FOVISSTE</option> 
                                <option value="4">ISSEG</option> 
                                <option value="5">BBVA BANCOMER</option> 
                                <option value="6">BANCARIO</option> 
                                <option value="7">BANORTE</option> 
                                <option value="8">BANCO DEL BAJÍO</option> 
                                <option value="9">SANTANDER SERFIN</option> 
                                <option value="10">SCOTIABANK</option> 
                                <option value="11">HSBC</option>
                                <option value="12">HIPOTECARIA NACIONAL</option>
                                <option value="13">SOFOL</option>
                                <option value="14">SOFOM</option>
                                <option value="15">OTRO</option>
                                <option value="16">BANAMEX</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">CRÉDITO B</label>
                            <input type="text" class="form-control" id="CreditoB" name="CreditoB" placeholder="0">
                        </div>

                        <div class="col-md-6">
                            <label for="">INSTITUCIÓN</label>
                            <select id="InstitucionB" name="InstitucionB" class="form-control" >
                                <option></option>
                                <option value="1">INFONAVIT</option>
                                <option value="2">COFINAVIT</option>
                                <option value="3">FOVISSTE</option> 
                                <option value="4">ISSEG</option> 
                                <option value="5">BBVA BANCOMER</option> 
                                <option value="6">BANCARIO</option> 
                                <option value="7">BANORTE</option> 
                                <option value="8">BANCO DEL BAJÍO</option> 
                                <option value="9">SANTANDER SERFIN</option> 
                                <option value="10">SCOTIABANK</option> 
                                <option value="11">HSBC</option>
                                <option value="12">HIPOTECARIA NACIONAL</option>
                                <option value="13">SOFOL</option>
                                <option value="14">SOFOM</option>
                                <option value="15">OTRO</option>
                                <option value="16">BANAMEX</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO DE VENTA NETO</label>
                            <input type="number" class="form-control" id="PrecioVentaN" name="PrecioVentaN" placeholder="0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">PRECIO DE VENTA EN ESCRITURA (IMPORTE DEL CONTADO)</label>
                            <input type="number" class="form-control" id="PrecioVentaE" name="PrecioVentaE" placeholder="0.0">
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center">INGRESO POR TERRENO Y VENTA</h2>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">PAGO DE TERRENO</label>
                            <input type="number" id="PagoTerreno" name="PagoTerreno" class="form-control" placeholder="0.0" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">PAGO DE RENDIMIENTOS (SE OBTIENE DEL PORCENTAJE DE GANANCIA ESTIPULADO AL PRECIO DE VENTA NETO)</label>
                            <input type="number" id="PagoRendimientos" name="PagoRendimientos" class="form-control" placeholder="0.0" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">TOTAL DE INGRESO POR TERRENO Y VENTA</label>
                            <input type="number" id="TotalIng" name="TotalIng" class="form-control" placeholder="0" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">FIRMA CON NOTARIO PÚBLICO</label>
                            <input type="text" id="FirmaNP" name="FirmaNP" class="form-control" placeholder="SI/NO">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE FIRMA CON EL NOTARIO PÚBLICO</label>
                            <input type="text" id="FechaFirmaNP" name="FechaFirmaNP" class="form-control" placeholder="XX/XX/XXXX" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DEL NOTARIO PÚBLICO</label>
                            <input type="text" id="NPub" name="NPub" class="form-control" placeholder="ESCRIBA EL NOMBRE DEL NOTARIO">
                        </div>
                        <div class="col-md-6">
                            <label for="">NÚMERO DE NOTARIO PÚBLICO</label>
                            <input type="text" id="NumNP" name="NumNP" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-6">
                            <label for="">PARTIDO DE ADSCRIPCIÓN</label>
                            <input type="text" id="Adscripcion" name="Adscripcion" class="form-control" placeholder="-">
                        </div>
                        <div class="col-md-6">
                            <label for="">NUMERAL REGISTRAL</label>
                            <input type="text" id="NumeralR" name="NumeralR" class="form-control" placeholder="-">
                        </div>
                        <div class="col-md-6">
                            <label for="">OBSERVACIONES</label>
                            <input type="text" id="Observaciones" name="Observaciones" class="form-control" placeholder="-">
                        </div>
                        <div id="RDocumentoDisplayU" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileU" name="RDocumentoFileU">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgU">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>
                        <div id="msgModificar" class="col-md-12"></div> 
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlDispersar" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> DISPERSAR TRANSMISIÓN</h2>
            </div>
            <form id="fDispersar" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="IDTransmision" name="IDTransmision" readonly="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA EN NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS POR LA INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaNotDis" name="FechaNotDis" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNotRabina" name="FechaNotRabina" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="NombreNotif" name="NombreNotif" class="form-control" placeholder="XXXXXX" />
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="NombreNotifRabina" name="NombreNotifRabina" class="form-control" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-12">
                            <label for="">PROYECTO</label>
                            <select class="form-control" id="NFideicomiso" name="NFideicomiso" readonly></select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <input  id="Manzana" name="Manzana" class="form-control" readonly=""> 
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE</label>
                            <input id="Lotes" name="Lotes" class="form-control" readonly="">  
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input id="Viviendas" name="Viviendas" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE EXTERNO</label>
                            <input type="number" id="Montofideicomitente" name="Montofideicomitente" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE CORPORACIÓN RABINA</label>
                            <input type="number" id="MontofideicomitenteRabina" name="MontofideicomitenteRabina" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO DE FIDEICOMISO</label>
                            <input type="text" id="MontoFideicomiso" name="MontoFideicomiso" class="form-control" placeholder="$0.0" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">DIFERENCIA A FAVOR</label>
                            <input type="number" id="DiferenciaAFavor" name="DiferenciaAFavor" class="form-control" placeholder="SIN SIGNOS, SIN COMAS">
                        </div>
                        <div class="col-md-3">
                            <label for="">DIFERENCIA EN CONTRA</label>
                            <input type="number" id="DiferenciaEnContra" name="DiferenciaEnContra" class="form-control" placeholder="SIN SIGNOS, SIN COMAS">
                        </div>
                        <div class="col-md-6 hide">
                            <label for="">FECHA DE LA DISPERSIÓN EN CUENTA</label>
                            <input type="text" id="FechaDispersion" name="FechaDispersion" class="form-control" placeholder="XX/XX/XXXX" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-6">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="number" id="CantidadDispersada" name="CantidadDispersada" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6 hide">
                            <label for="">CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</label>
                            <input type="text" id="CuentaDispersion" name="CuentaDispersion" class="form-control" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-6 hide">
                            <label for=""> REFERENCIA DE LA TRANSFERENCIA</label>
                            <input type="text" id="ReferenciaTran" name="ReferenciaTran" class="form-control" placeholder="XXXX-XXXX-XXXX" />
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea class="form-control" rows="25" id="Observaciones" name="Observaciones"></textarea>
                        </div>
                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlCancelar" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> CANCELAR MOVIMIENTO</h2>
            </div>
            <form id="fCancelar" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12" align="center">
                            <h1>¿ESTA SEGURO?</h1>
                        </div>
                        <div class="col-md-12">
                            <h5 class="text-danger">*CANCELAR UN MOVIMIENTO IMPLICA CANCELAR LA TRANSMISIÓN Y EN CASO DE QUE ESTE AVANZADO LA DISPERSIÓN, ASÍ MISMO AFECTARÁ EL MAPA DE DONDE SE UBICA.</h5>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="CANCELAR DE TODOS MODOS"><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlDispersarU" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> EDITAR DISPERSIÓN </h2>
            </div>
            <form id="fDispersarU" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-6 hide">
                            <label for="">ID DISPERSION</label>
                            <input type="text" id="ID" name="ID" readonly="" class="form-control">
                        </div>
                        <div class="col-md-6 hide">
                            <label for="">ID TRANSMISION</label>
                            <input type="text" id="IDTransmision" name="IDTransmision" readonly="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA EN NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS POR LA INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaNotDis" name="FechaNotDis" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNotRabina" name="FechaNotRabina" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="NombreNotif" name="NombreNotif" class="form-control" placeholder="XXXXXX" />
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="NombreNotifRabina" name="NombreNotifRabina" class="form-control" placeholder="XXXXX"/>
                        </div>
                        <div class="col-md-12">
                            <label for="">PROYECTO</label>
                            <input type="text" class="form-control" id="NFideicomiso" name="NFideicomiso" readonly=""/>
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <input  id="Manzana" name="Manzana" class="form-control" readonly=""> 
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE</label>
                            <input id="Lotes" name="Lotes" class="form-control" readonly="">  
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input id="Viviendas" name="Viviendas" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE EXTERNO</label>
                            <input type="number" id="Montofideicomitente" name="Montofideicomitente" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE CORPORACIÓN RABINA</label>
                            <input type="number" id="MontofideicomitenteRabina" name="MontofideicomitenteRabina" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO DE FIDEICOMISO</label>
                            <input type="text" id="MontoFideicomiso" name="MontoFideicomiso" class="form-control" placeholder="$0.0" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE LA DISPERSIÓN EN CUENTA</label>
                            <input type="text" id="FechaDispersion" name="FechaDispersion" class="form-control" readonly="" placeholder="XX/XX/XXXX" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-6">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="number" id="CantidadDispersada" name="CantidadDispersada" class="form-control" placeholder="$0.0" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</label>
                            <input type="text" id="CuentaDispersion" name="CuentaDispersion" class="form-control" placeholder="XX/XX/XXXX" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for=""> REFERENCIA DE LA TRANSFERENCIA</label>
                            <input type="text" id="ReferenciaTran" name="ReferenciaTran" class="form-control" placeholder="XX/XX/XXXX" readonly=""/>
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea class="form-control" rows="25" id="Observaciones" name="Observaciones"></textarea>
                        </div>
                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>
                        <div id="msgDispersionesU" class="col-md-12">

                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlPagoDispersado" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> PAGO POR DISPERSION</h2>
            </div>
            <form id="fDispersar" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-6 ">
                            <label for="">IdTransmision</label>
                            <input type="text" id="IdTransmision" name="IdTransmision" readonly="" class="form-control">
                        </div>
                        <div class="col-md-6 ">
                            <label for="">IdDispersion</label>
                            <input type="text" id="IdDispersion" name="IdDispersion" readonly="" class="form-control">
                        </div>
                        <div class="col-md-12 hide">
                            <label for="">ID</label>
                            <input type="text" id="IDTransmision" name="IDTransmision" readonly="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA EN NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS POR LA INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaNotDis" name="FechaNotDis" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNotRabina" name="FechaNotRabina" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="NombreNotif" name="NombreNotif" class="form-control" placeholder="XXXXXX"  readonly="" />
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="NombreNotifRabina" name="NombreNotifRabina" class="form-control" placeholder="XXXXX" readonly="" />
                        </div>
                        <div class="col-md-12">
                            <label for="">PROYECTO</label>
                            <input type="text" class="form-control" id="NFideicomiso" name="NFideicomiso"  readonly="" />
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <input  id="Manzana" name="Manzana" class="form-control" readonly=""> 
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE</label>
                            <input id="Lotes" name="Lotes" class="form-control" readonly="">  
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input id="Viviendas" name="Viviendas" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE EXTERNO</label>
                            <input type="number" id="Montofideicomitente" name="Montofideicomitente" class="form-control" placeholder="$0.0" readonly="" >
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE CORPORACIÓN RABINA</label>
                            <input type="number" id="MontofideicomitenteRabina" name="MontofideicomitenteRabina" class="form-control" placeholder="$0.0" readonly="" >
                        </div>
                        <div class="col-md-12">
                            <label for="">MONTO DE FIDEICOMISO</label>
                            <input type="text" id="MontoFideicomiso" name="MontoFideicomiso" class="form-control" placeholder="$0.0" readonly="">
                        </div>




                        <div class="col-md-6">
                            <label for="">FECHA DE LA DISPERSIÓN EN CUENTA</label>
                            <input type="text" id="FechaDispersion" name="FechaDispersion" class="form-control" placeholder="XX/XX/XXXX" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-6">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="number" id="CantidadDispersada" name="CantidadDispersada" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</label>
                            <input type="text" id="CuentaDispersion" name="CuentaDispersion" class="form-control" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for=""> REFERENCIA DE LA TRANSFERENCIA</label>
                            <input type="text" id="ReferenciaTran" name="ReferenciaTran" class="form-control" placeholder="XXXX-XXXX-XXXX" />
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea class="form-control" rows="25" id="Observaciones" name="Observaciones"></textarea>
                        </div>
                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>
                        <div class="col-md-12" id="msgPagoDispersado"></div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlPagoDispersadoU" class="modal animated zoomInUp"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times fa-lg"></span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-exchange fa-lg"></span> DISPERSION PAGADA</h2>
            </div>
            <form id="fDispersar" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <h2>*SOLO ES POSIBLE MODIFICAR EL DOCUMENTO*</h2>
                        </div>
                        <div class="col-md-4 ">
                            <label for="">ID</label>
                            <input type="text" id="ID" name="ID" readonly="" class="form-control">
                        </div>
                        <div class="col-md-4 ">
                            <label for="">IdTransmision</label>
                            <input type="text" id="IdTransmision" name="IdTransmision" readonly="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">IdDispersion</label>
                            <input type="text" id="IdDispersion" name="IdDispersion" readonly="" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="">FECHA EN NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS POR LA INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaNotDis" name="FechaNotDis" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNotRabina" name="FechaNotRabina" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly=""/>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="NombreNotif" name="NombreNotif" class="form-control" placeholder="XXXXXX"  readonly="" />
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="NombreNotifRabina" name="NombreNotifRabina" class="form-control" placeholder="XXXXX" readonly="" />
                        </div>
                        <div class="col-md-12">
                            <label for="">PROYECTO</label>
                            <input type="text" class="form-control" id="NFideicomiso" name="NFideicomiso"  readonly="" />
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <input  id="Manzana" name="Manzana" class="form-control" readonly=""> 
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE</label>
                            <input id="Lotes" name="Lotes" class="form-control" readonly="">  
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input id="Viviendas" name="Viviendas" class="form-control" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE EXTERNO</label>
                            <input type="number" id="Montofideicomitente" name="Montofideicomitente" class="form-control" placeholder="$0.0" readonly="" >
                        </div>
                        <div class="col-md-6">
                            <label for="">MONTO PARA FIDEICOMITENTE CORPORACIÓN RABINA</label>
                            <input type="number" id="MontofideicomitenteRabina" name="MontofideicomitenteRabina" class="form-control" placeholder="$0.0" readonly="" >
                        </div>
                        <div class="col-md-12">
                            <label for="">MONTO DE FIDEICOMISO</label>
                            <input type="text" id="MontoFideicomiso" name="MontoFideicomiso" class="form-control" placeholder="$0.0" readonly="">
                        </div>

                        <div class="col-md-6">
                            <label for="">FECHA DE LA DISPERSIÓN EN CUENTA</label>
                            <input type="text" id="FechaDispersion" name="FechaDispersion" class="form-control" placeholder="XX/XX/XXXX" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                        </div>
                        <div class="col-md-6">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="number" id="CantidadDispersada" name="CantidadDispersada" class="form-control" placeholder="$0.0">
                        </div>
                        <div class="col-md-6">
                            <label for="">CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</label>
                            <input type="text" id="CuentaDispersion" name="CuentaDispersion" class="form-control" placeholder="XXXXXX"/>
                        </div>
                        <div class="col-md-6">
                            <label for=""> REFERENCIA DE LA TRANSFERENCIA</label>
                            <input type="text" id="ReferenciaTran" name="ReferenciaTran" class="form-control" placeholder="XXXX-XXXX-XXXX" />
                        </div>
                        <div class="col-md-12">
                            <label for="">OBSERVACIONES</label>
                            <textarea class="form-control" rows="25" id="Observaciones" name="Observaciones"></textarea>
                        </div>

                        <div id="RDocumentoDisplayD" class="col-md-12">
                        </div>
                        <div class="col-md-12 hide">
                            <input type="file" class="form-control" id="RDocumentoFileD" name="RDocumentoFileD">
                        </div>
                        <div class="col-md-12 cursor-hand" align="center" id="RDocumentoImgD">
                            <span class="fa fa-upload fa-5x"></span>
                            <p>SELECCIONAR ARCHIVO</p>
                        </div>

                        <div class="col-md-12" id="msgPagoDispersado"></div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!--MODAL INCREMENTO-->


<div class="modal animated zoomInUp" id="mdlIncrementoTerreno" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> NUEVO INCREMENTO DE PRECIO DEL TERRENO POR ACTUALIZACIÓN ANUAL</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <!--IDS-->
                        <div class="col-md-4">
                            <label for="">TRANSMISION</label>
                            <input type="text" id="IdTransmision" name="IdTransmision" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">DISPERSIÓN</label>
                            <input type="text" id="IdDispersion" name="IdDispersion" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">PAGO</label>
                            <input type="text" id="IdPago" name="IdPago" class="form-control" readonly="">
                        </div>
                        <!--FIN IDS-->
                        <!--                        <div class="col-md-4">
                                                    <label for="">TRANSMISION</label>
                                                    <input type="text" id="Transmision" name="Transmision" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">DISPERSIÓN</label>
                                                    <input type="text" id="Dispersion" name="Dispersion" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">PAGO</label>
                                                    <input type="text" id="Pago" name="Pago" class="form-control">
                                                </div>-->
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS POR LA INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaNotificacion" name="FechaNotificacion" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNotificacionRabina" name="FechaNotificacionRabina" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="NombreNotifica" name="NombreNotifica" class="form-control" placeholder="EJ:PEDRO" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="RecibeNotificacion" name="RecibeNotificacion" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control" readonly=""></select>
                            <input  type="text" id="Proyecto" name="Proyecto" class="form-control hide" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">MANZANA</label>
                            <input  type="text" id="Manzana" name="Manzana" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">LOTE</label>
                            <input type="text"  id="Lote" name="Lote" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">NÚMERO</label>
                            <input type="text" id="Numero" name="Numero" class="form-control" placeholder="417" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">ADQUIRENTE</label>
                            <input type="text" id="Adquirente" name="Adquirente" class="form-control" placeholder="EJ: GIOVANNI" readonly="">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4" align="center"><h1>DATOS DE TRANSMISIÓN</h1></div>
                        <hr>    
                        <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="">PAGO DE TERRENO</label>
                            <input type="text" id="TransmisionPagoDeTerreno" name="TransmisionPagoDeTerreno" class="form-control" placeholder="1000.0" readonly="">
                        </div>

                        <div class="col-md-4">
                            <label for="">PAGO DE RENDIMIENTOS</label>
                            <input type="text" id="TransmisionPagoRendimientos" name="TransmisionPagoRendimientos" class="form-control" readonly="">
                        </div>

                        <div class="col-md-4">
                            <label for="">TOTAL DE INGRESO POR TERRENO Y VENTA</label>
                            <input type="text" id="TransmisionTotalIngresoTerrenoVenta" name="TransmisionTotalIngresoTerrenoVenta" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 " align="center"><h1>DATOS DE DISPERSIÓN</h1></div>
                        <hr>
                        <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="text" id="CantidadDispersada" name="CantidadDispersada" class="form-control" placeholder="5000000000.0" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">DIFERENCIA A FAVOR</label>
                            <input type="text" id="DiferenciaAFavor" name="DiferenciaAFavor" class="form-control" placeholder="1000.00" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">DIFERENCIA EN CONTRA</label>
                            <input type="text" id="DiferenciaEnContra" name="DiferenciaEnContra" class="form-control" placeholder="500.00" readonly="">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4" align="center"><h1>DATOS DE PAGO</h1></div>
                        <div class="col-md-12">
                            <label for="">CANTIDAD PAGADA</label>
                            <input type="text" id="CantidadPagada" name="CantidadPagada" class="form-control" placeholder="600.00" readonly="">
                        </div> 
                        <div class="col-md-12" align="center"><h1 class="">DATOS DE ACTUALIZACIÓN</h1></div>
                        <hr>
                        <div class="col-md-3">
                            <label for="">INCREMENTO</label>
                            <input type="text" id="Incremento" name="Incremento" class="form-control" placeholder="100.00">
                        </div>
                        <div class="col-md-3">
                            <label for="">PAGO DE TERRENO ACTUALIZADO (PAGO DE TERRENO + INCREMENTO)</label>
                            <input type="text" id="PagoTerrenoActualizado" name="PagoTerrenoActualizado" class="form-control" placeholder="200.00">
                        </div>
                        <div class="col-md-3">
                            <label for="">PAGO DE RENDIMIENTOS</label>
                            <input type="text" id="PagoRendimientos" name="PagoRendimientos" class="form-control" placeholder="300.00">
                        </div>
                        <div class="col-md-3">
                            <label for="">TOTAL DE INGRESO POR TERRENO Y VENTA(PAGO DE TERRENO + PAGO DE RENDIMIENTO)</label>
                            <input type="text" id="TotalIngresoTerrenoVenta" name="TotalIngresoTerrenoVenta" class="form-control" placeholder="600.00">
                        </div>
                        <div class="col-md-12" align="center"><h1 class="">DATOS DE DISPERSIÓN ACTUALIZADOS</h1></div>
                        <hr>
                        <div class="col-md-6">
                            <label for="">CANTIDAD TOTAL DISPERSADA ACTUALIZADA</label>
                            <input type="text" class="form-control" placeholder="0.0" id="CantidadTotalDispersada" name="CantidadTotalDispersada">
                        </div>
                        <div class="col-md-6">
                            <label for="">CANTIDAD TOTAL PAGADA ACTUALIZADA</label>
                            <input type="text" class="form-control" placeholder="0.0" id="CantidadTotalPagada" name="CantidadTotalPagada">
                        </div>

                        <div class="col-md-12" align="center"><h1 class="">DATOS DEL PAGO DE ACTUALIZACIÓN</h1></div>
                        <hr>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE OPERACIÓN DE DISPERSION DE RECURSOS</label>
                            <input type="text" id="NumeroDeOperacionDispersionRecursos" name="NumeroDeOperacionDispersionRecursos" class="form-control" placeholder="123">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE LA DISPERSION EN CUENTA</label>
                            <input type="text" id="FechaDispersionCuenta" name="FechaDispersionCuenta" class="form-control" placeholder="XX/XX/XXXX"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="text" id="NuevaCantidadDispersada" name="NuevaCantidadDispersada" class="form-control" placeholder="123">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</label>
                            <input type="text" id="CuentaDispersionRecurso" name="CuentaDispersionRecurso" class="form-control" placeholder="979777">
                        </div>
                        <div class="col-md-4">
                            <label for="">REFERENCIA DE LA TRANSFERENCIA</label>
                            <input type="text" id="ReferenciaTransferencia" name="ReferenciaTransferencia" class="form-control" placeholder="979777">
                        </div>
                        <div class="col-md-4">
                            <label for="">OBSERVACIONES</label>
                            <textarea type="text" class="form-control" id="Observaciones" name="Observaciones" rows="4" cols="20" placeholder="ESCRIBA LAS OBSERVACIONES DEL PAGO">
                            </textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">RESPONSABLE DEL REGISTRO</label>
                            <select id="Responsable" name="Responsable" class="form-control"></select>
                        </div>
                        <div class="col-md-12" align="center">
                            <h1>ADJUNTAR ARCHIVO</h1>
                            <div id="VistaPrevia"></div>
                            <button id="btnArchivo" name="btnArchivo" type="button" class="btn btn3d btn-default fa-lg"><span class="fa fa-upload fa-5x"></span></button>
                            <input type="file" class="hide" id="Archivo" name="Archivo">
                        </div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg fa-lg btn-default btn-lg fa-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" >
                    <span class="fa fa-check fa-3x success-icon"></span>
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal animated zoomInUp" id="mdlVerIncrementoTerreno" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-copy fa-lg"></span> RESUMEN DE INCREMENTO DE PRECIO DEL TERRENO POR ACTUALIZACIÓN ANUAL</h2>
            </div>
            <form id="frmIncremento">
                <div class="modal-body">
                    <fieldset>
                        <!--IDS-->
                        <div class="col-md-4">
                            <label for="">TRANSMISION</label>
                            <input type="text" id="IdTransmision" name="IdTransmision" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">DISPERSIÓN</label>
                            <input type="text" id="IdDispersion" name="IdDispersion" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">PAGO</label>
                            <input type="text" id="IdPago" name="IdPago" class="form-control" readonly="">
                        </div>
                        <!--FIN IDS-->
                        <!--                        <div class="col-md-4">
                                                    <label for="">TRANSMISION</label>
                                                    <input type="text" id="Transmision" name="Transmision" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">DISPERSIÓN</label>
                                                    <input type="text" id="Dispersion" name="Dispersion" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="">PAGO</label>
                                                    <input type="text" id="Pago" name="Pago" class="form-control">
                                                </div>-->
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS POR LA INSTITUCIÓN FIDUCIARIA</label>
                            <input type="text" id="FechaNotificacion" name="FechaNotificacion" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE NOTIFICACIÓN DE LA DISPERSIÓN DE RECURSOS A CORPORACIÓN RABINA</label>
                            <input type="text" id="FechaNotificacionRabina" name="FechaNotificacionRabina" class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN NOTIFICA</label>
                            <input type="text" id="NombreNotifica" name="NombreNotifica" class="form-control" placeholder="EJ:PEDRO" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE DE QUIEN RECIBE NOTIFICACIÓN DE TRANSMISIÓN EN CORPORACIÓN RABINA</label>
                            <input type="text" id="RecibeNotificacion" name="RecibeNotificacion" class="form-control" readonly="">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-3">
                            <label for="">PROYECTO</label>
                            <select id="Proyecto" name="Proyecto" class="form-control" readonly=""></select>
                            <input  type="text" id="Proyecto" name="Proyecto" class="form-control hide" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">MANZANA</label>
                            <input  type="text" id="Manzana" name="Manzana" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">LOTE</label>
                            <input type="text"  id="Lote" name="Lote" class="form-control" readonly="">
                        </div>
                        <div class="col-md-3">
                            <label for="">NÚMERO</label>
                            <input type="text" id="Numero" name="Numero" class="form-control" placeholder="417" readonly="">
                        </div>
                        <div class="col-md-12">
                            <label for="">ADQUIRENTE</label>
                            <input type="text" id="Adquirente" name="Adquirente" class="form-control" placeholder="EJ: GIOVANNI" readonly="">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4" align="center"><h1>DATOS DE TRANSMISIÓN</h1></div>
                        <hr>    
                        <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="">PAGO DE TERRENO</label>
                            <input type="text" id="TransmisionPagoDeTerreno" name="TransmisionPagoDeTerreno" class="form-control" placeholder="1000.0" readonly="">
                        </div>

                        <div class="col-md-4">
                            <label for="">PAGO DE RENDIMIENTOS</label>
                            <input type="text" id="TransmisionPagoRendimientos" name="TransmisionPagoRendimientos" class="form-control" readonly="">
                        </div>

                        <div class="col-md-4">
                            <label for="">TOTAL DE INGRESO POR TERRENO Y VENTA</label>
                            <input type="text" id="TransmisionTotalIngresoTerrenoVenta" name="TransmisionTotalIngresoTerrenoVenta" class="form-control" readonly="">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 " align="center"><h1>DATOS DE DISPERSIÓN</h1></div>
                        <hr>
                        <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="text" id="CantidadDispersada" name="CantidadDispersada" class="form-control" placeholder="5000000000.0" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">DIFERENCIA A FAVOR</label>
                            <input type="text" id="DiferenciaAFavor" name="DiferenciaAFavor" class="form-control" placeholder="1000.00" readonly="">
                        </div>
                        <div class="col-md-4">
                            <label for="">DIFERENCIA EN CONTRA</label>
                            <input type="text" id="DiferenciaEnContra" name="DiferenciaEnContra" class="form-control" placeholder="500.00" readonly="">
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4" align="center"><h1>DATOS DE PAGO</h1></div>
                        <div class="col-md-12">
                            <label for="">CANTIDAD PAGADA</label>
                            <input type="text" id="CantidadPagada" name="CantidadPagada" class="form-control" placeholder="600.00" readonly="">
                        </div> 
                        <div class="col-md-12" align="center"><h1 class="">DATOS DE ACTUALIZACIÓN</h1></div>
                        <hr>
                        <div class="col-md-3">
                            <label for="">INCREMENTO</label>
                            <input type="text" id="Incremento" name="Incremento" class="form-control" placeholder="100.00">
                        </div>
                        <div class="col-md-3">
                            <label for="">PAGO DE TERRENO ACTUALIZADO (PAGO DE TERRENO + INCREMENTO)</label>
                            <input type="text" id="PagoTerrenoActualizado" name="PagoTerrenoActualizado" class="form-control" placeholder="200.00">
                        </div>
                        <div class="col-md-3">
                            <label for="">PAGO DE RENDIMIENTOS</label>
                            <input type="text" id="PagoRendimientos" name="PagoRendimientos" class="form-control" placeholder="300.00">
                        </div>
                        <div class="col-md-3">
                            <label for="">TOTAL DE INGRESO POR TERRENO Y VENTA(PAGO DE TERRENO + PAGO DE RENDIMIENTO)</label>
                            <input type="text" id="TotalIngresoTerrenoVenta" name="TotalIngresoTerrenoVenta" class="form-control" placeholder="600.00">
                        </div>
                        <div class="col-md-12" align="center"><h1 class="">DATOS DE DISPERSIÓN ACTUALIZADOS</h1></div>
                        <hr>
                        <div class="col-md-6">
                            <label for="">CANTIDAD TOTAL DISPERSADA ACTUALIZADA</label>
                            <input type="text" class="form-control" placeholder="0.0" id="CantidadTotalDispersada" name="CantidadTotalDispersada">
                        </div>
                        <div class="col-md-6">
                            <label for="">CANTIDAD TOTAL PAGADA ACTUALIZADA</label>
                            <input type="text" class="form-control" placeholder="0.0" id="CantidadTotalPagada" name="CantidadTotalPagada">
                        </div>

                        <div class="col-md-12" align="center"><h1 class="">DATOS DEL PAGO DE ACTUALIZACIÓN</h1></div>
                        <hr>
                        <div class="col-md-4">
                            <label for="">NÚMERO DE OPERACIÓN DE DISPERSION DE RECURSOS</label>
                            <input type="text" id="NumeroDeOperacionDispersionRecursos" name="NumeroDeOperacionDispersionRecursos" class="form-control" placeholder="123">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE LA DISPERSION EN CUENTA</label>
                            <input type="text" id="FechaDispersionCuenta" name="FechaDispersionCuenta" class="form-control" placeholder="XX/XX/XXXX"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>
                        <div class="col-md-4">
                            <label for="">CANTIDAD DISPERSADA</label>
                            <input type="text" id="NuevaCantidadDispersada" name="NuevaCantidadDispersada" class="form-control" placeholder="123">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <label for="">CUENTA DE LA CORPORACIÓN DE DISPERSIÓN DEL RECURSO</label>
                            <input type="text" id="CuentaDispersionRecurso" name="CuentaDispersionRecurso" class="form-control" placeholder="979777">
                        </div>
                        <div class="col-md-4">
                            <label for="">REFERENCIA DE LA TRANSFERENCIA</label>
                            <input type="text" id="ReferenciaTransferencia" name="ReferenciaTransferencia" class="form-control" placeholder="979777">
                        </div>
                        <div class="col-md-4">
                            <label for="">OBSERVACIONES</label>
                            <textarea type="text" class="form-control" id="Observaciones" name="Observaciones" rows="4" cols="20" placeholder="ESCRIBA LAS OBSERVACIONES DEL PAGO">
                            </textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">RESPONSABLE DEL REGISTRO</label>
                            <select id="Responsable" name="Responsable" class="form-control"></select>
                        </div>
                        <div class="col-md-12" align="center">
                            <h1>ARCHIVO ADJUNTO</h1>
                            <div id="VistaPrevia"></div> 
                        </div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg fa-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<script>
    var master_url = base_url + 'index.php/ctrlTransmisiones/';
    var mdlNuevo = $("#mdlNuevo");
    var mdlModificar = $("#mdlModificar");
    var mdlDispersar = $("#mdlDispersar");
    var mdlDispersarU = $("#mdlDispersarU");
    var mdlCancelar = $("#mdlCancelar");
    var fNuevo = $('#fNuevo');
    var fModificar = $("#fModificar");
    var fDispersar = $("#fDispersar");
    var btnRefresh = $("#btnRefresh");
    var btnDispersar = $("#btnDispersar");
    var btnEditar = $("#btnEditar");
    var btnCancelar = $("#btnCancelar");
    var btnDispersiones = $("#btnDispersiones");
    var btnMovimientosCancelados = $("#btnMovimientosCancelados");
    var btnEditarDispersion = $("#btnEditarDispersion");

    var txtCantidadCreditos = mdlNuevo.find("#txtCantidadCreditos");
    var txtMontoCreditos = mdlNuevo.find("#txtMontoCreditos");
    var rCreditos = mdlNuevo.find("#rCreditos");
    var txtCantidadEmpresarial = mdlNuevo.find("#txtCantidadEmpresarial");
    var txtMontoEmpresarial = mdlNuevo.find("#txtMontoEmpresarial");
    var rEmpresarial = mdlNuevo.find("#rEmpresarial");
    var txtCantidadPromocionMama = mdlNuevo.find("#txtCantidadPromocionMama");
    var txtMontoPromocionMama = mdlNuevo.find("#txtMontoPromocionMama");
    var rPromocionMama = mdlNuevo.find("#rPromocionMama");
    var txtCantidadPrimavera = mdlNuevo.find("#txtCantidadPrimavera");
    var txtMontoPrimavera = mdlNuevo.find("#txtMontoPrimavera");
    var rPrimavera = mdlNuevo.find("#rPrimavera");
    var txtCantidadVerano = mdlNuevo.find("#txtCantidadVerano");
    var txtMontoVerano = mdlNuevo.find("#txtMontoVerano");
    var rVerano = mdlNuevo.find("#rVerano");
    var txtCantidadOlimpico = mdlNuevo.find("#txtCantidadOlimpico");
    var txtMontoOlimpico = mdlNuevo.find("#txtMontoOlimpico");
    var rOlimpico = mdlNuevo.find("#rOlimpico");
    var txtCantidadVivaMexico = mdlNuevo.find("#txtCantidadVivaMexico");
    var txtMontoVivaMexico = mdlNuevo.find("#txtMontoVivaMexico");
    var rVivaMexico = mdlNuevo.find("#rVivaMexico");
    var txtCantidadDeMiedo = mdlNuevo.find("#txtCantidadDeMiedo");
    var txtMontoDeMiedo = mdlNuevo.find("#txtMontoDeMiedo");
    var rDeMiedo = mdlNuevo.find("#rDeMiedo");
    var txtCantidadAguinaldo = mdlNuevo.find("#txtCantidadAguinaldo");
    var txtMontoAguinaldo = mdlNuevo.find("#txtMontoAguinaldo");
    var rAguinaldo = mdlNuevo.find("#rAguinaldo");
    var txtCantidadBuenFin = mdlNuevo.find("#txtCantidadBuenFin");
    var txtMontoBuenFin = mdlNuevo.find("#txtMontoBuenFin");
    var rBuenFin = mdlNuevo.find("#rBuenFin");
    var txtCantidadOtro = mdlNuevo.find("#txtCantidadOtro");
    var txtMontoOtro = mdlNuevo.find("#txtMontoOtro");

    var rOtros = mdlNuevo.find("#rOtros");
    var rGranDescuentoTotal = mdlNuevo.find("#rGranDescuentoTotal");
    var rTotalGlobal = 0.0;
    var rSubtotal = 0.0;

    var txtCantidadCreditosU = mdlModificar.find("#txtCantidadCreditos");
    var txtMontoCreditosU = mdlModificar.find("#txtMontoCreditos");
    var rCreditosU = mdlModificar.find("#rCreditos");
    var txtCantidadEmpresarialU = mdlModificar.find("#txtCantidadEmpresarial");
    var txtMontoEmpresarialU = mdlModificar.find("#txtMontoEmpresarial");
    var rEmpresarialU = mdlModificar.find("#rEmpresarial");
    var txtCantidadPromocionMamaU = mdlModificar.find("#txtCantidadPromocionMama");
    var txtMontoPromocionMamaU = mdlModificar.find("#txtMontoPromocionMama");
    var rPromocionMamaU = mdlModificar.find("#rPromocionMama");
    var txtCantidadPrimaveraU = mdlModificar.find("#txtCantidadPrimavera");
    var txtMontoPrimaveraU = mdlModificar.find("#txtMontoPrimavera");
    var rPrimaveraU = mdlModificar.find("#rPrimavera");
    var txtCantidadVeranoU = mdlModificar.find("#txtCantidadVerano");
    var txtMontoVeranoU = mdlModificar.find("#txtMontoVerano");
    var rVeranoU = mdlModificar.find("#rVerano");
    var txtCantidadOlimpicoU = mdlModificar.find("#txtCantidadOlimpico");
    var txtMontoOlimpicoU = mdlModificar.find("#txtMontoOlimpico");
    var rOlimpicoU = mdlModificar.find("#rOlimpico");
    var txtCantidadVivaMexicoU = mdlModificar.find("#txtCantidadVivaMexico");
    var txtMontoVivaMexicoU = mdlModificar.find("#txtMontoVivaMexico");
    var rVivaMexicoU = mdlModificar.find("#rVivaMexico");
    var txtCantidadDeMiedoU = mdlModificar.find("#txtCantidadDeMiedo");
    var txtMontoDeMiedoU = mdlModificar.find("#txtMontoDeMiedo");
    var rDeMiedoU = mdlModificar.find("#rDeMiedo");
    var txtCantidadAguinaldoU = mdlModificar.find("#txtCantidadAguinaldo");
    var txtMontoAguinaldoU = mdlModificar.find("#txtMontoAguinaldo");
    var rAguinaldoU = mdlModificar.find("#rAguinaldo");
    var txtCantidadBuenFinU = mdlModificar.find("#txtCantidadBuenFin");
    var txtMontoBuenFinU = mdlModificar.find("#txtMontoBuenFin");
    var rBuenFinU = mdlModificar.find("#rBuenFin");
    var txtCantidadOtroU = mdlModificar.find("#txtCantidadOtro");
    var txtMontoOtroU = mdlModificar.find("#txtMontoOtro");
    var rOtrosU = mdlModificar.find("#rOtros");
    var rGranDescuentoTotalU = mdlModificar.find("#rGranDescuentoTotal");

    var NFideicomiso = mdlNuevo.find("#NFideicomiso");
    var Manzana = mdlNuevo.find("#Manzana");
    var Lotes = mdlNuevo.find("#Lotes");
    var NumeroDeVivienda = mdlNuevo.find("#Viviendas");/*NUMERO DE VIVIENDA*/
    var NFideicomisoU = mdlModificar.find("form").find("#NFideicomiso");
    var NFideicomisoD = mdlDispersar.find("form").find("#NFideicomiso");
    var ManzanaU = mdlModificar.find("form").find("#ManzanaU");
    var LotesU = mdlModificar.find("form").find("#LotesU");
    var ViviendasU = mdlModificar.find("form").find("#ViviendasU");/*NUMERO DE VIVIENDA*/
    var btnSave = mdlNuevo.find("#btnSave");
    var RDocumentoImg = mdlNuevo.find("#RDocumentoImg");
    var RDocumentoFile = mdlNuevo.find("#RDocumentoFile");
    var RDocumentoDisplay = mdlNuevo.find("#RDocumentoDisplay");
    var btnUpdate = mdlModificar.find("#btnSave");
    var RDocumentoImgU = mdlModificar.find("#RDocumentoImgU");
    var RDocumentoFileU = mdlModificar.find("#RDocumentoFileU");
    var RDocumentoDisplayU = mdlModificar.find("#RDocumentoDisplayU");
    var btnSaveCancelar = mdlCancelar.find("#btnSave");
    var btnSaveDispersion = mdlDispersar.find("#btnSave");

    var RDocumentoImgD = mdlDispersar.find("#RDocumentoImgD");
    var RDocumentoFileD = mdlDispersar.find("#RDocumentoFileD");
    var RDocumentoDisplayD = mdlDispersar.find("#RDocumentoDisplayD");

    var MontoFideicomiso = mdlDispersar.find("#MontoFideicomiso");
    var Montofideicomitente = mdlDispersar.find("#Montofideicomitente");
    var MontofideicomitenteRabina = mdlDispersar.find("#MontofideicomitenteRabina");
    var RDocumentoImgDU = mdlDispersarU.find("#RDocumentoImgD");
    var RDocumentoFileDU = mdlDispersarU.find("#RDocumentoFileD");
    var RDocumentoDisplayDU = mdlDispersarU.find("#RDocumentoDisplayD");
    var call = $.Callbacks();

    var PrecioBase = mdlNuevo.find("#PrecioBase");
    var MontoDescuento = mdlNuevo.find("#MontoDescuento");
    var CostoAdic = mdlNuevo.find("#CostoAdic");
    var PrecioTotal = mdlNuevo.find("#PrecioTotal");

    var PagoTerreno = mdlNuevo.find("#PagoTerreno");
    var PagoRendimientos = mdlNuevo.find("#PagoRendimientos");
    var TotalIng = mdlNuevo.find("#TotalIng");

    var PrecioBaseU = mdlModificar.find("#PrecioBase");
    var MontoDescuentoU = mdlModificar.find("#MontoDescuento");
    var CostoAdicU = mdlModificar.find("#CostoAdic");
    var PrecioTotalU = mdlModificar.find("#PrecioTotal");

    var PagoTerrenoU = mdlModificar.find("#PagoTerreno");
    var PagoRendimientosU = mdlModificar.find("#PagoRendimientos");
    var TotalIngU = mdlModificar.find("#TotalIng");

    var btnBusquedaEspecifica = $("#btnBusquedaEspecifica");
    var dBusquedaEspecifica = $("#dBusquedaEspecifica");

    var btnBuscar = $("#btnBuscar");
    var btnPagoDispersion = $("#btnPagoDispersion");

    var btnCancelarPagoDispersion = $("#btnCancelarPagoDispersion");
    var btnHistorialDePagosXDispersion = $("#btnHistorialDePagosXDispersion");

    var mdlPagoDispersado = $("#mdlPagoDispersado");
    var RDocumentoImgDP = mdlPagoDispersado.find("#RDocumentoImgD");
    var RDocumentoFileDP = mdlPagoDispersado.find("#RDocumentoFileD");
    var RDocumentoDisplayDP = mdlPagoDispersado.find("#RDocumentoDisplayD");
    var btnSavePagoDispersado = mdlPagoDispersado.find("#btnSave");

    var mdlPagoDispersadoU = $("#mdlPagoDispersadoU");
    var RDocumentoImgDPU = mdlPagoDispersadoU.find("#RDocumentoImgD");
    var RDocumentoFileDPU = mdlPagoDispersadoU.find("#RDocumentoFileD");
    var RDocumentoDisplayDPU = mdlPagoDispersadoU.find("#RDocumentoDisplayD");
    var btnSavePagoDispersadoU = mdlPagoDispersadoU.find("#btnSave");

    var btnEditarDispersionesPagadas = $("#btnEditarDispersionesPagadas");

    var btnDispersionAcumulada = $("#btnDispersionAcumulada");
    var btnBuscarDispersiones = $("#btnBuscarDispersiones");
    var btnBuscarDispersionesXProyecto = $("#btnBuscarDispersionesXProyecto");
    var btnBuscarDispersionesXProyectoMasIncremento = $("#btnBuscarDispersionesXProyectoMasIncremento");
    var btnBuscarDispersionesXProyectoMasIncrementoTotales= $("#btnBuscarDispersionesXProyectoMasIncrementoTotales");
    /* *INCREMENTO* */
    var btnIncrementoTerreno = $("#btnIncrementoTerreno");
    var btnCancelarIncrementoTerreno = $("#btnCancelarIncrementoTerreno");
    var mdlIncrementoTerreno = $("#mdlIncrementoTerreno");
    var btnArchivo = mdlIncrementoTerreno.find("#btnArchivo");
    var Archivo = mdlIncrementoTerreno.find("#Archivo");
    var VistaPrevia = mdlIncrementoTerreno.find("#VistaPrevia");
    var btnVerIncrementosDeTerrenos = $("#btnVerIncrementosDeTerrenos");
    var btnGuardarIncremento = mdlIncrementoTerreno.find("#btnGuardar");
    var Incremento = mdlIncrementoTerreno.find("#Incremento");
    var TransmisionPagoDeTerreno = mdlIncrementoTerreno.find("#TransmisionPagoDeTerreno");
    var PagoTerrenoActualizado = mdlIncrementoTerreno.find("#PagoTerrenoActualizado");
    var PagoRendimientosActualizado = mdlIncrementoTerreno.find("#PagoRendimientos");
    var TotalIngresoTerrenoVenta = mdlIncrementoTerreno.find("#TotalIngresoTerrenoVenta");

    var mdlVerIncrementoTerreno = $("#mdlVerIncrementoTerreno");

    $(document).ready(function () {

        /*INCIO MODAL INCREMENTO - ACCIONES*/
        getEmpleados();
        btnVerIncrementosDeTerrenos.click(function () {

            btnCancelarIncrementoTerreno.removeClass("hide");
            btnIncrementoTerreno.addClass("hide");
            getIncrementosXTerrenos();
        });

        btnCancelarIncrementoTerreno.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onCancelarIncremento',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'INCREMENTO CANCELADO', 'danger');
                    getIncrementosXTerrenos();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELGIR UN INCREMENTO', 'danger');
            }
        });

        PagoRendimientosActualizado.keyup(function () {
            var pago_rendimientos = parseFloat((PagoTerrenoActualizado.val() !== '') ? PagoTerrenoActualizado.val() : 0) + parseFloat((PagoRendimientosActualizado.val() !== '') ? PagoRendimientosActualizado.val() : 0);
            TotalIngresoTerrenoVenta.val(pago_rendimientos);
        });
        Incremento.keyup(function () {
            var pago_total_terreno_actualizado = parseFloat((Incremento.val() !== '') ? Incremento.val() : 0) + parseFloat((TransmisionPagoDeTerreno.val() !== '') ? TransmisionPagoDeTerreno.val() : 0);
            PagoTerrenoActualizado.val(pago_total_terreno_actualizado);
        });

        btnGuardarIncremento.click(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'GUARDANDO...'
            });
            var frm = new FormData(mdlIncrementoTerreno.find("#frmNuevo")[0]);
            frm.append('ProyectoT', mdlIncrementoTerreno.find("#Proyecto").find("option:selected").text());
            frm.append('ManzanaT', mdlIncrementoTerreno.find("#Manzana").val());
            frm.append('LoteT', mdlIncrementoTerreno.find("#Lote").val());
            $.ajax({
                url: master_url + 'onAddIncremento',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                onNotify('<span class="fa fa-check fa-lg"></span>', 'INCREMENTO AGREGADO', 'success');
                mdlIncrementoTerreno.modal('hide');
                btnCancelarIncrementoTerreno.removeClass("hide");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnIncrementoTerreno.click(function () {
            if (temp !== null && temp !== undefined && temp !== '' && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getPagoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];
                    mdlIncrementoTerreno.find("#IdTransmision").val(dtm.TRANSMISION);
                    mdlIncrementoTerreno.find("#IdDispersion").val(dtm.DISPERSION);
                    mdlIncrementoTerreno.find("#IdPago").val(dtm.ID);
                    mdlIncrementoTerreno.find("#Adquirente").val(dtm.ADQUIRIENTE);
                    mdlIncrementoTerreno.find("#NombreNotifica").val(dtm.Notificador);
                    mdlIncrementoTerreno.find("#RecibeNotificacion").val(dtm.RecibeNot);
                    mdlIncrementoTerreno.find("#Proyecto").val(dtm.PROYECTO);
                    mdlIncrementoTerreno.find("#IdProyecto").val(dtm.PROYECTO);
                    mdlIncrementoTerreno.find("#Proyecto").select2("val", dtm.PROYECTO);
                    mdlIncrementoTerreno.find("#Manzana").val(dtm.MANZANA);
                    mdlIncrementoTerreno.find("#Lote").val(dtm.LOTE);
                    mdlIncrementoTerreno.find("#FechaNotificacion").val(dtm.FechaNot);
                    mdlIncrementoTerreno.find("#FechaNotificacionRabina").val(dtm.FechaNotDis);
                    mdlIncrementoTerreno.find("#Numero").val(dtm.NUMERO);

                    /*DATOS DE TRANSMISION*/
                    mdlIncrementoTerreno.find("#TransmisionPagoDeTerreno").val(dtm["PAGO DE TERRENO"]);
                    mdlIncrementoTerreno.find("#TransmisionPagoRendimientos").val(dtm["PAGO DE RENDIMIENTOS"]);
                    mdlIncrementoTerreno.find("#TransmisionTotalIngresoTerrenoVenta").val(dtm["TOTAL DE INGRESO"]);

                    /*DATOS DE DISPERSIÓN*/
                    mdlIncrementoTerreno.find("#CantidadDispersada").val(dtm["CANTIDAD DISPERSADA"]);
                    mdlIncrementoTerreno.find("#DiferenciaAFavor").val(dtm.DiferenciaAFavor);
                    mdlIncrementoTerreno.find("#DiferenciaEnContra").val(dtm.DiferenciaEnContra);
                    /*DATOS DE PAGO*/
                    mdlIncrementoTerreno.find("#CantidadPagada").val(dtm["CANTIDAD PAGADA"]);

                    VistaPrevia.html("");
                    mdlIncrementoTerreno.modal('show');
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELGIR UN PAGO', 'danger');
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELGIR UN PAGO', 'danger');
            }
            ;
        });

        btnArchivo.click(function () {
            Archivo.change(function () {
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(Archivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="100%" height="600px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(Archivo[0].files[0]);
                    } else {
                        VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
            });
            Archivo.trigger('click');
        });


        /*FIN MODAL INCREMENTO - ACCIONES*/

        btnBuscarDispersionesXProyectoMasIncrementoTotales.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            }); 

            $.ajax({
                url: master_url + 'getReporteDispersionesXProyectoYEtapaXIncrementoTotales',
                type: "POST",
                data: {
                    PROYECTO: $("#sDispersiones #Proyecto").val(),
                    PROYECTOT: $("#sDispersiones #Proyecto").find("option:selected").text(),
                    INICIO: $("#Inicio").val(),
                    FIN: $("#Fin").val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        
        btnBuscarDispersionesXProyectoMasIncremento.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            }); 

            $.ajax({
                url: master_url + 'getReporteDispersionesXProyectoYEtapaXIncremento',
                type: "POST",
                data: {
                    PROYECTO: $("#sDispersiones #Proyecto").val(),
                    PROYECTOT: $("#sDispersiones #Proyecto").find("option:selected").text(),
                    INICIO: $("#Inicio").val(),
                    FIN: $("#Fin").val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        
        btnBuscarDispersionesXProyecto.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            console.log('* * * * * ');
            console.log($("#sDispersiones #Proyecto").find("option:selected").text());
            console.log($("#sDispersiones #Proyecto").find("option:selected").text());
            console.log($("#sDispersiones #Proyecto").val());
            console.log('* * * * * ');

            $.ajax({
                url: master_url + 'getReporteDispersionesXProyectoYEtapa',
                type: "POST",
                data: {
                    PROYECTO: $("#sDispersiones #Proyecto").val(),
                    PROYECTOT: $("#sDispersiones #Proyecto").find("option:selected").text(),
                    INICIO: $("#Inicio").val(),
                    FIN: $("#Fin").val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });
        
        btnBuscarDispersiones.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            console.log('* * * * * ');
            console.log($("#sDispersiones #Proyecto").find("option:selected").text());
            console.log($("#sDispersiones #Proyecto").find("option:selected").text());
            console.log($("#sDispersiones #Proyecto").val());
            console.log('* * * * * ');

            $.ajax({
                url: master_url + 'getReporteDispersiones',
                type: "POST",
                data: {
                    PROYECTO: $("#sDispersiones #Proyecto").val(),
                    PROYECTOT: $("#sDispersiones #Proyecto").find("option:selected").text(),
                    INICIO: $("#Inicio").val(),
                    FIN: $("#Fin").val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
                window.open(data, '_blank');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OK');
                HoldOn.close();
            });
        });

        btnDispersionAcumulada.click(function () {
            $("#sDispersiones").toggleClass("hide");
        });

        btnEditarDispersionesPagadas.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'getPagosXDispersionByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                if (data[0] !== undefined) {
                    var dtm = data[0];
                    mdlPagoDispersadoU.find("#ID").val(dtm.ID);
                    mdlPagoDispersadoU.find("#IdTransmision").val(dtm.IdTransmision);
                    mdlPagoDispersadoU.find("#IdDispersion").val(dtm.IdDispersion);
                    mdlPagoDispersadoU.find("#FechaDispersion").val(dtm["FECHA DISPERSION"]);
                    mdlPagoDispersadoU.find("#CantidadDispersada").val(dtm["CANTIDAD DISPERSADA"]);
                    mdlPagoDispersadoU.find("#FechaNotDis").val(dtm.FechaNotDis);
                    mdlPagoDispersadoU.find("#FechaNotRabina").val(dtm.FechaNotRabina);
                    mdlPagoDispersadoU.find("#NombreNotif").val(dtm.NombreNotif);
                    mdlPagoDispersadoU.find("#NombreNotifRabina").val(dtm.NombreNotifRabina);
                    mdlPagoDispersadoU.find("#NFideicomiso").val(dtm.PROYECTON);
                    mdlPagoDispersadoU.find("#Manzana").val(dtm.Manzana);
                    mdlPagoDispersadoU.find("#Lotes").val(dtm.Lotes);
                    mdlPagoDispersadoU.find("#Viviendas").val(dtm.Viviendas);
                    mdlPagoDispersadoU.find("#MontoFideicomiso").val(dtm.MontoFideicomiso);
                    mdlPagoDispersadoU.find("#Montofideicomitente").val(dtm.Montofideicomitente);
                    mdlPagoDispersadoU.find("#MontofideicomitenteRabina").val(dtm.MontofideicomitenteRabina);
                    mdlPagoDispersadoU.find("#CuentaDispersion").val(dtm.CuentaDispersion);
                    mdlPagoDispersadoU.find("#ReferenciaTran").val(dtm.ReferenciaTran);
                    mdlPagoDispersadoU.find("#Observaciones").val(dtm.Observaciones);

                    if (dtm.rDocumento !== null && dtm.rDocumento !== undefined && dtm.rDocumento !== '') {
                        var ext = getExt(dtm.rDocumento);
                        if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "PNG") {
                            mdlPagoDispersadoU.find("#RDocumentoDisplayD").html("<hr><img id='trtImagen' src='" + dtm.rDocumento + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlPagoDispersadoU.find("#RDocumentoDisplayD").html('<hr> <embed src="' + dtm.rDocumento + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        mdlPagoDispersadoU.find("#RDocumentoDisplayD").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            mdlPagoDispersadoU.modal('show');
        });

        btnSavePagoDispersadoU.click(function () {

            var frm = new FormData(mdlPagoDispersadoU.find("#fDispersar")[0]);
            if (temp !== null && temp !== undefined && temp !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO POR FAVOR ESPERE..."
                });

                $.ajax({
                    url: master_url + 'onUpdatePagoDispersado',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    if (parseInt(data) === 1 || parseInt(data) === 11) {
                        btnHistorialDePagosXDispersion.trigger('click');
                        mdlPagoDispersadoU.modal('hide');
                    } else {
                        mdlPagoDispersadoU.find("#msgPagoDispersado").html('<div class="alert alert-dismissible alert-danger">\n\
            <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
                    <h2>NO SE HA PODIDO ACTUALIZAR EL REGISTRO O ALGO EXTRAÑO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</h2></div>');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                HoldOn.close();
            }
        });

        btnCancelarPagoDispersion.click(function () {
            if (temp !== null && temp !== undefined && temp !== '') {

                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onCancelPagoDispersion',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PAGO CANCELADO', 'danger');
                    btnHistorialDePagosXDispersion.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });

        btnHistorialDePagosXDispersion.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            btnIncrementoTerreno.removeClass("hide");
            btnPagoDispersion.addClass("hide");
            getDispersionesPagadas("tblDispersionesPagadas", master_url + "getDispersionesPagadas", "rTransmisiones", "msgTransmisiones", "NO SE ENCONTRARON REGISTROS");
            HoldOn.close();
        });

        btnSavePagoDispersado.click(function () {
            var frm = new FormData(mdlPagoDispersado.find("#fDispersar")[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onPagoDispersado',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
//                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    btnDispersiones.trigger('click');
                    mdlPagoDispersado.modal('hide');
//                } else {
//                    mdlPagoDispersado.find("#msgPagoDispersado").html('<div class="alert alert-dismissible alert-danger">\n\
//            <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
//                <h2>NO SE HA PODIDO ACTUALIZAR EL REGISTRO O ALGO EXTRAÑO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</h2></div>');
//                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnPagoDispersion.click(function () {
            if (temp !== undefined && temp !== null && temp !== '' && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                $.ajax({
                    url: master_url + 'getDispersionByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    var dtm = data[0];

                    mdlPagoDispersado.find("#IdDispersion").val(dtm.ID);
                    mdlPagoDispersado.find("#IdTransmision").val(dtm.IdTransmision);

                    mdlPagoDispersado.find("#MontoFideicomiso").val(dtm.MontoFideicomiso);
                    mdlPagoDispersado.find("#Montofideicomitente").val(dtm.Montofideicomitente);
                    mdlPagoDispersado.find("#MontofideicomitenteRabina").val(dtm.MontofideicomitenteRabina);

                    mdlPagoDispersado.find("#FechaNotDis").val(dtm.FechaNotDis);
                    mdlPagoDispersado.find("#FechaNotRabina").val(dtm.FechaNotRabina);

                    mdlPagoDispersado.find("#NombreNotif").val(dtm.NombreNotif);
                    mdlPagoDispersado.find("#NombreNotifRabina").val(dtm.NombreNotifRabina);

                    mdlPagoDispersado.find("#NFideicomiso").val(dtm.PROYECTON);
                    mdlPagoDispersado.find("#Manzana").val(dtm.Manzana);
                    mdlPagoDispersado.find("#Lotes").val(dtm.Lotes);
                    mdlPagoDispersado.find("#Viviendas").val(dtm.Viviendas);
                    mdlPagoDispersado.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnBuscar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            var frm = $("#fBusquedaEspecifica").serialize();
            $.ajax({
                url: master_url + 'onBusquedaEspecifica',
                type: "POST",
                dataType: "JSON",
                data: frm
            }).done(function (data, x, jq) {
                temp = 0;
                var tblName = "tblTransmisiones";
                var target_result = "rTransmisiones";
                var target_fail_messages = "msgTransmisiones";
                if (data.length > 0) {
                    $("#" + target_result).html(getTable(tblName, data));
                    var tblSelected = $('#' + tblName).DataTable(tableOptions);
                    /*CLICK SELECTED ROW*/
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
                        var dtm = tblSelected.row(this).data();
                        temp = $(dtm[0])[0].innerText;
                    });
                    /*DB CLICK FOR EDIT*/
                    $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                        $("#" + tblName).find("tr").removeClass("warning");
                        $(this).addClass('warning');
                        var dtm = tblSelected.row(this).data();
                        console.log($(dtm[0])[0].innerText);
                        console.log($(dtm[0]).find("span").innerText);
                        var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                        temp = parseInt($(dtm[0])[0].innerText);
                        $("#btnEditarDispersion").trigger("click");
                    });
                    $.ajax({
                        url: master_url + 'onBusquedaEspecificaXSuma',
                        type: "POST",
                        dataType: "JSON",
                        data: frm
                    }).done(function (data, x, jq) {
                        console.log(data);
                        var dtm = data[0];
                        var lbl = '<div class="col-md-4 rgb"><label class="text-muted">';
                        var lblmiddle = '</label><label class="text-info">';
                        var closedlbl = '</label></div>';
                        var div = '<div class="col-md-12" align="center">';
                        div += '<h2 class="text-primary">RESUMEN GENERAL DE LA BÚSQUEDA</h2>';
                        div += lbl + 'TOTAL EN PRECIOS BASE: ' + lblmiddle + dtm["PRECIO BASE"] + closedlbl;
                        div += lbl + 'TOTAL EN DESCUENTOS:' + lblmiddle + dtm["DESCUENTO"] + closedlbl;
                        div += lbl + 'TOTAL EN COSTOS ADICIONALES: ' + lblmiddle + dtm["COSTO ADICIONAL"] + closedlbl;
                        div += lbl + 'TOTAL EN PRECIO: ' + lblmiddle + dtm["PRECIO TOTAL"] + closedlbl;
                        div += lbl + 'TOTAL DE VENTA NETO: ' + lblmiddle + dtm["PRECIO DE VENTA NETO"] + closedlbl;
                        div += lbl + 'TOTAL DE VENTA EN ESCRITURA: ' + lblmiddle + dtm["PRECIO DE VENTA EN ESCRITURA"] + closedlbl;
                        div += lbl + 'TOTAL EN PAGOS DE TERRENO: ' + lblmiddle + dtm["PAGO DE TERRENO"] + closedlbl;
                        div += lbl + 'TOTAL EN PAGO DE RENDIMIENTOS: ' + lblmiddle + dtm["PAGO DE RENDIMIENTOS"] + closedlbl;
                        div += lbl + 'TOTAL DE INGRESOS: ' + lblmiddle + dtm["TOTAL DE INGRESO"] + closedlbl;
                        div += '</div>';
                        $("#" + target_result).append(div);
                        $("#rgb").html(div);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {

                    });
                } else {
                    console.log(data, x, jq);
                    $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<h1 class="text-center">ALGO EXTRAÑO OCURRIO VERIFIQUE LA CONSOLA</h1>' +
                            '</div>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnBusquedaEspecifica.click(function () {
            btnIncrementoTerreno.addClass("hide");
            btnCancelarIncrementoTerreno.addClass("hide");
            if (dBusquedaEspecifica.hasClass("hide")) {
                dBusquedaEspecifica.removeClass("hide");
            } else {
                dBusquedaEspecifica.addClass("hide");
                $("#rgb").html("");
            }
        });

        mdlDispersarU.find("#btnSave").click(function () {
            var frm = new FormData(mdlDispersarU.find("#fDispersarU")[0]);
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            $.ajax({
                url: master_url + 'onUpdateDispersion',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
//                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    btnDispersiones.trigger('click');
                    mdlDispersarU.modal('hide');
//                } else {
//                    mdlDispersarU.find("#msgDispersionesU").html('<div class="alert alert-dismissible alert-danger">\n\
//            <button type="button" class="close" data-dismiss="alert">&times;</button>\n\
//                <h2>NO SE HA PODIDO ACTUALIZAR EL REGISTRO O ALGO EXTRAÑO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</h2></div>');
//                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            console.log(frm);
        });

        mdlDispersarU.on('hidden.bs.modal', function () {
            mdlDispersarU.find("#RDocumentoDisplayD").html("");
        });

        btnEditarDispersion.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            console.log(temp);
            $.ajax({
                url: master_url + 'getDispersionByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                if (data[0] !== undefined) {
                    var dtm = data[0];
                    mdlDispersarU.find("#ID").val(dtm.ID);
                    mdlDispersarU.find("#IDTransmision").val(dtm.IdTransmision);
                    mdlDispersarU.find("#NFideicomiso").val(dtm.PROYECTON);
                    mdlDispersarU.find("#Manzana").val(dtm.Manzana);
                    mdlDispersarU.find("#Lotes").val(dtm.Lotes);
                    mdlDispersarU.find("#Viviendas").val(dtm.Viviendas);
                    mdlDispersarU.find("#FechaNotDis").val(dtm.FechaNotDis);
                    mdlDispersarU.find("#NombreNotif").val(dtm.NombreNotif);
                    mdlDispersarU.find("#FechaNotRabina").val(dtm.FechaNotRabina);
                    mdlDispersarU.find("#NombreNotifRabina").val(dtm.NombreNotifRabina);
                    mdlDispersarU.find("#MontoFideicomiso").val(dtm.MontoFideicomiso);
                    mdlDispersarU.find("#Montofideicomitente").val(dtm.Montofideicomitente);
                    mdlDispersarU.find("#MontofideicomitenteRabina").val(dtm.MontofideicomitenteRabina);
                    mdlDispersarU.find("#FechaDispersion").val(dtm.FechaDispersion);
                    mdlDispersarU.find("#MontofideicomitenteRabina").val(dtm.MontofideicomitenteRabina);
                    mdlDispersarU.find("#CantidadDispersada").val(dtm.CantidadDispersada);
                    mdlDispersarU.find("#CuentaDispersion").val(dtm.CuentaDispersion);
                    mdlDispersarU.find("#ReferenciaTran").val(dtm.ReferenciaTran);
                    mdlDispersarU.find("#Observaciones").val(dtm.Observaciones);
                    if (dtm.RDocumento !== null && dtm.RDocumento !== undefined && dtm.RDocumento !== '') {
                        var ext = getExt(dtm.RDocumento);
                        if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "PNG") {
                            mdlDispersarU.find("#RDocumentoDisplayD").html("<hr><img id='trtImagen' src='" + dtm.RDocumento + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlDispersarU.find("#RDocumentoDisplayD").html('<hr> <embed src="' + dtm.RDocumento + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        mdlDispersarU.find("#RDocumentoDisplayD").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            mdlDispersarU.modal('show');
        });

        Montofideicomitente.keyup(function () {
            if (parseFloat(Montofideicomitente.val()) > 0.0 && parseFloat(MontofideicomitenteRabina.val()) > 0.0) {
                MontoFideicomiso.val(parseFloat(Montofideicomitente.val()) + parseFloat(MontofideicomitenteRabina.val()));
            } else {
                if (parseFloat(Montofideicomitente.val()) > 0.0) {
                    MontoFideicomiso.val(parseFloat(Montofideicomitente.val()));
                }
                if (parseFloat(MontofideicomitenteRabina.val()) > 0.0) {
                    MontoFideicomiso.val(parseFloat(MontofideicomitenteRabina.val()));
                }
            }
        });

        MontofideicomitenteRabina.keyup(function () {
            if (parseFloat(Montofideicomitente.val()) > 0.0 && parseFloat(MontofideicomitenteRabina.val()) > 0.0) {
                MontoFideicomiso.val(parseFloat(Montofideicomitente.val()) + parseFloat(MontofideicomitenteRabina.val()));
            } else {
                if (parseFloat(Montofideicomitente.val()) > 0.0) {
                    MontoFideicomiso.val(parseFloat(Montofideicomitente.val()));
                }
                if (parseFloat(MontofideicomitenteRabina.val()) > 0.0) {
                    MontoFideicomiso.val(parseFloat(MontofideicomitenteRabina.val()));
                }
                if (parseFloat(Montofideicomitente.val()) === 0.0 && parseFloat(MontofideicomitenteRabina.val()) === 0.0) {
                    MontoFideicomiso.val(0);
                }
            }
        });

        btnDispersiones.click(function () {
            btnIncrementoTerreno.addClass("hide");
            btnCancelarIncrementoTerreno.addClass("hide");
            btnDispersar.addClass("hide");
            btnEditar.addClass("hide");
            btnCancelar.addClass("hide");
            btnPagoDispersion.removeClass("hide");
            btnCancelarPagoDispersion.removeClass("hide");
            btnHistorialDePagosXDispersion.removeClass("hide");
            getDispersiones("tblTransmisiones", master_url + "getDispersiones", "rTransmisiones", "msgTransmisiones", "NO SE ENCONTRARON REGISTROS");
        });

        btnMovimientosCancelados.click(function () {
            btnDispersar.addClass("hide");
            btnEditar.addClass("hide");
            btnCancelar.addClass("hide");
            btnPagoDispersion.addClass("hide");
            btnCancelarPagoDispersion.addClass("hide");
            btnHistorialDePagosXDispersion.addClass("hide");
            getCancelRecords("tblTransmisiones", master_url + "getCancelados", "rTransmisiones", "msgTransmisiones", "NO SE ENCONTRARON REGISTROS");
        });

        btnSaveCancelar.click(function () {
            $.ajax({
                url: master_url + 'onCancel',
                type: "POST",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    mdlCancelar.modal('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO CANCELADO', 'success');
                } else {
                    mdlCancelar.modal('hide');
                    onNotify('<span class="fa fa-times fa-lg"></span>', 'MOVIMIENTO NO CANCELADO', 'danger');
                }
                btnRefresh.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x.y.z);
            }).always(function () {
                console.log('OPERACION DE CANCELACION, COMPLETADA');
            });
        });

        btnCancelar.click(function () {
            if (temp !== undefined && temp !== null && temp > 0) {
                mdlCancelar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnSaveDispersion.click(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            var fDispersar = $('#fDispersar');
            var frm = new FormData($('#fDispersar')[0]);
            frm.append('IDTransmision', fDispersar.find("#IDTransmision").val());
            frm.append('NFideicomiso', fDispersar.find("#NFideicomiso").val());
            frm.append('NFideicomisoT', fDispersar.find("#NFideicomiso").find("option:selected").text());
            frm.append('Manzana', fDispersar.find("#Manzana").val());
            frm.append('Lotes', fDispersar.find("#Lotes").val());
            frm.append('Viviendas', fDispersar.find("#Viviendas").val());
            frm.append('FechaNotDis', fDispersar.find("#FechaNotDis").val());
            frm.append('FechaNotRabina', fDispersar.find("#FechaNotRabina").val());
            frm.append('NombreNotif', fDispersar.find("#NombreNotif").val());
            frm.append('NombreNotifRabina', fDispersar.find("#NombreNotifRabina").val());
            frm.append('MontoFideicomiso', fDispersar.find("#MontoFideicomiso").val());
            frm.append('Montofideicomitente', fDispersar.find("#Montofideicomitente").val());
            frm.append('MontofideicomitenteRabina', fDispersar.find("#MontofideicomitenteRabina").val());
            frm.append('FechaDispersion', fDispersar.find("#FechaDispersion").val());
            frm.append('CantidadDispersada', fDispersar.find("#CantidadDispersada").val());
            frm.append('CuentaDispersion', fDispersar.find("#CuentaDispersion").val());
            frm.append('ReferenciaTran', fDispersar.find("#ReferenciaTran").val());
            $.ajax({
                url: master_url + 'onDispersion',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
//                if (parseInt(data) === 1 || parseInt(data) === 11) {
                    mdlDispersar.modal('hide');
                    btnRefresh.trigger('click');
//                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
                console.log('OPERACION COMPLETADA');
            });
        });

        btnEditar.click(function () {
            if (temp !== undefined && temp !== null && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO..."
                });
                $.ajax({
                    url: master_url + 'getRecordsByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    console.log(x);
                    console.log(jq);
                    if (data[0] !== undefined) {
                        var dtm = data[0];
                        mdlModificar.modal('show');
                        mdlModificar.find("form").find("#ID").val(temp);
                        mdlModificar.find("form").find("#FechaEntrega").val(dtm.FechaEntrega);
                        mdlModificar.find("form").find("#FechaNot").val(dtm.FechaNot);
                        mdlModificar.find("form").find("#Notificador").val(dtm.Notificador);
                        mdlModificar.find("form").find("#RecibeNot").val(dtm.RecibeNot);
                        mdlModificar.find("form").find("#NFideicomiso").val(dtm.NFideicomiso);
                        mdlModificar.find("form").find("#NFideicomiso").select2("val", dtm.NFideicomiso);
                        mdlModificar.find("form").find("#Manzana").val(dtm.Manzana);
                        mdlModificar.find("form").find("#Lotes").val(dtm.Lotes);
                        mdlModificar.find("form").find("#Viviendas").val(dtm.Viviendas);
                        mdlModificar.find("form").find("#Adquirente").val(dtm.Adquirente);
                        mdlModificar.find("form").find("#Genero").select2("val", dtm.Genero.toUpperCase());
                        mdlModificar.find("form").find("#Telefono").val(dtm.Telefono);
                        mdlModificar.find("form").find("#PrecioBase").val(dtm.PrecioBase);
                        mdlModificar.find("form").find("#MontoDescuento").val(dtm.MontoDescuento);
                        mdlModificar.find("form").find("#CostoAdic").val(dtm.CostoAdic);
                        mdlModificar.find("form").find("#PrecioTotal").val(dtm.PrecioTotal);
                        mdlModificar.find("form").find("#MontoAnt").val(dtm.MontoAnt);
                        mdlModificar.find("form").find("#OtrosAbonos").val(dtm.OtrosAbonos);
                        mdlModificar.find("form").find("#Cofinanciado").select2("val", dtm.Cofinanciado.toUpperCase());
                        mdlModificar.find("form").find("#CreditoA").val(dtm.CreditoA);
                        mdlModificar.find("form").find("#InstitucionA").select2("val", parseInt(dtm.InstitucionA));
                        mdlModificar.find("form").find("#CreditoB").val(dtm.CreditoB);
                        mdlModificar.find("form").find("#InstitucionB").select2("val", parseInt(dtm.InstitucionB));
                        mdlModificar.find("form").find("#PrecioVentaN").val(dtm.PrecioVentaN);
                        mdlModificar.find("form").find("#PrecioVentaE").val(dtm.PrecioVentaE);
                        mdlModificar.find("form").find("#PagoTerreno").val(dtm.PagoTerreno);
                        mdlModificar.find("form").find("#PagoRendimientos").val(dtm.PagoRendimientos);
                        mdlModificar.find("form").find("#TotalIng").val(dtm.TotalIng);
                        mdlModificar.find("form").find("#FirmaNP").val(dtm.FirmaNP);
                        mdlModificar.find("form").find("#FechaFirmaNP").val(dtm.FechaFirmaNP);
                        mdlModificar.find("form").find("#NPub").val(dtm.NPub);
                        mdlModificar.find("form").find("#NumNP").val(dtm.NumNP);
                        mdlModificar.find("form").find("#Adscripcion").val(dtm.Adscripcion);
                        mdlModificar.find("form").find("#NumeralR").val(dtm.NumeralR);
                        mdlModificar.find("form").find("#Observaciones").val(dtm.Observaciones);
                        mdlModificar.find("form").find("#txtCantidadCreditos").val(dtm.C1);
                        mdlModificar.find("form").find("#txtMontoCreditos").val(dtm.M1);
                        var sst = 0.0, tt = 0.0;
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadCreditos").val() * mdlModificar.find("form").find("#txtMontoCreditos").val());
                        mdlModificar.find("form").find("#rCreditos").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadEmpresarial").val(dtm.C2);
                        mdlModificar.find("form").find("#txtMontoEmpresarial").val(dtm.M2);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadEmpresarial").val() * mdlModificar.find("form").find("#txtMontoEmpresarial").val());
                        mdlModificar.find("form").find("#rEmpresarial").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadPromocionMama").val(dtm.C3);
                        mdlModificar.find("form").find("#txtMontoPromocionMama").val(dtm.M3);
                        mdlModificar.find("form").find("#rPromocionMama").html("$" + $.number(parseFloat(mdlModificar.find("form").find("#txtCantidadPromocionMama").val() * mdlModificar.find("form").find("#txtMontoPromocionMama").val()), 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadPrimavera").val(dtm.C4);
                        mdlModificar.find("form").find("#txtMontoPrimavera").val(dtm.M4);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadPrimavera").val() * mdlModificar.find("form").find("#txtMontoPrimavera").val());
                        mdlModificar.find("form").find("#rPrimavera").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadVerano").val(dtm.C5);
                        mdlModificar.find("form").find("#txtMontoVerano").val(dtm.M5);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadVerano").val() * mdlModificar.find("form").find("#txtMontoVerano").val());
                        mdlModificar.find("form").find("#rVerano").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadOlimpico").val(dtm.C6);
                        mdlModificar.find("form").find("#txtMontoOlimpico").val(dtm.M6);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadOlimpico").val() * mdlModificar.find("form").find("#txtMontoOlimpico").val());
                        mdlModificar.find("form").find("#rOlimpico").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadVivaMexico").val(dtm.C7);
                        mdlModificar.find("form").find("#txtMontoVivaMexico").val(dtm.M7);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadVivaMexico").val() * mdlModificar.find("form").find("#txtMontoVivaMexico").val());
                        mdlModificar.find("form").find("#rVivaMexico").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadDeMiedo").val(dtm.C8);
                        mdlModificar.find("form").find("#txtMontoDeMiedo").val(dtm.M8);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadDeMiedo").val() * mdlModificar.find("form").find("#txtMontoDeMiedo").val());
                        mdlModificar.find("form").find("#rDeMiedo").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadAguinaldo").val(dtm.C8);
                        mdlModificar.find("form").find("#txtMontoAguinaldo").val(dtm.M8);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadAguinaldo").val() * mdlModificar.find("form").find("#txtMontoAguinaldo").val());
                        mdlModificar.find("form").find("#rAguinaldo").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadBuenFin").val(dtm.C8);
                        mdlModificar.find("form").find("#txtMontoBuenFin").val(dtm.M8);
                        sst = parseFloat(mdlModificar.find("form").find("#txtCantidadBuenFin").val() * mdlModificar.find("form").find("#txtMontoBuenFin").val());
                        mdlModificar.find("form").find("#rBuenFin").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#txtCantidadOtro").val(dtm.C8);
                        mdlModificar.find("form").find("#txtMontoOtro").val(dtm.M8);
                        sst = parseFloat(mdlModificar.find("form").find("#txtMontoOtro").val());
                        mdlModificar.find("form").find("#rOtros").html("$" + $.number(sst, 5, '.', ' ,'));
                        tt += sst;
                        sst = 0;
                        mdlModificar.find("form").find("#rGranDescuentoTotal").val(tt);
                        /*CARGAR EL ARCHIVO ACTUALMENTE ADJUNTO*/
                        console.log('EXTENSION ' + dtm.RDocumento);
                        if (dtm.RDocumento !== null && dtm.RDocumento !== undefined && dtm.RDocumento !== '') {
                            var ext = getExt(dtm.RDocumento);
                            if (ext === "gif" || ext === "jpg" || ext === "png") {
                                RDocumentoDisplayU.html("<hr><img id='trtImagen' src='" + dtm.RDocumento + "' class ='img-responsive'/>");
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                RDocumentoDisplayU.html('<hr> <embed src="' + dtm.RDocumento + '" type="application/pdf" width="90%" height="800px"' +
                                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            }
                        } else {
                            RDocumentoDisplayU.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                        }
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                console.log(temp);
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        btnDispersar.click(function () {
            if (temp !== undefined && temp !== null && temp !== 0) {
                mdlDispersar.find("#IDTransmision").val(temp);
                $.ajax({
                    url: master_url + 'getRecordsByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {

                    var dtm = data[0];
                    if (dtm.Estatus === "ACTIVO") {
                        mdlDispersar.modal('show');
                        mdlDispersar.find("#IDTransmision").val(temp);
                        mdlDispersar.find("form").find("#NFideicomiso").val(dtm.NFideicomiso);
                        mdlDispersar.find("form").find("#NFideicomiso").select2("val", dtm.NFideicomiso);
                        mdlDispersar.find("form").find("#Manzana").val(dtm.Manzana);
                        mdlDispersar.find("form").find("#Lotes").val(dtm.Lotes);
                        mdlDispersar.find("form").find("#Viviendas").val(dtm.Viviendas);
                        mdlDispersar.find("form").find("#CantidadDispersada").val(dtm.TotalIng);
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTE REGISTRO YA ESTA DISPERSADO', 'danger');
                    }
                });
                mdlDispersar.find('#NFideicomiso').select2("enable", false);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
            }
        });

        mdlNuevo.on('show.bs.modal', function () {});

        mdlDispersar.on('hidden.bs.modal', function () {
            RDocumentoDisplayD.html("");
            console.log(fDispersar[0]);
            mdlDispersar.find("form")[0].reset();
        });

        mdlModificar.on('show.bs.modal', function () {});

        mdlModificar.on('hidden.bs.modal', function () {
            RDocumentoDisplayU.html("");
        });

        mdlNuevo.on('hidden.bs.modal', function () {
            RDocumentoDisplay.html("");
            fNuevo[0].reset();
        });

        btnRefresh.click(function () {

            btnIncrementoTerreno.addClass("hide");
            btnCancelarIncrementoTerreno.addClass("hide");
            btnDispersar.removeClass("hide");
            btnEditar.removeClass("hide");
            btnCancelar.removeClass("hide");
            btnPagoDispersion.addClass("hide");
            btnCancelarPagoDispersion.addClass("hide");
            btnHistorialDePagosXDispersion.addClass("hide");
            onGetRecords("tblTransmisiones", master_url + "getRecords", "rTransmisiones", "msgTransmisiones", "NO SE ENCONTRARON REGISTROS");
        });

        NFideicomiso.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            Manzana.html("");
            Manzana.addClass("hide");
            Manzana.parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
            $.ajax({
                url: master_url + 'getManzanasXDesarrollo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: NFideicomiso.val()
                }
            }).done(function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                    });
                    Manzana.html(options);
                } else {
                    console.log(data);
                    $("#msgNuevo").html('<div class="alert alert-dismissible alert-danger">UN ERROR INESPERADO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</div>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
                setTimeout(function () {
                    Manzana.removeClass("hide");
                    Manzana.next().remove();
                }, 1500);
            });
        });

        NFideicomisoU.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            ManzanaU.html("");
            $.ajax({
                url: master_url + 'getManzanasXDesarrollo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: NFideicomisoU.val()
                }
            }).done(function (data) {
                var options = '<option value=""></option>';
                console.log(data);
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                    });
                    ManzanaU.html(options);
                    HoldOn.close();
                } else {
                    console.log(data);
                    $("#msgModificar").html('<div class="alert alert-dismissible alert-danger">UN ERROR INESPERADO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</div>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    ManzanaU.removeClass("hide");
                }, 1500);
            });
        });

        Manzana.change(function () {
            getLotesXManzana(NFideicomiso.val(), Manzana.val());
        });

        ManzanaU.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS...ESPERE"
            });
            LotesU.addClass("hide");
            LotesU.html("");
            $.ajax({
                url: master_url + 'getLotesXManzana',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: NFideicomisoU.val(),
                    M: ManzanaU.val()
                }
            }).done(function (data) {
                console.log(data);
                var dtm = data[0];
                var options = '<option value=""></option>';
                if (data[0] !== undefined && dtm.LOTES !== undefined) {
                    $.each(dtm.LOTES.split(","), function (k, v) {
                        options = options + '<option value="' + v + '">' + v + '</option>';
                    });
                    LotesU.html(options);
                } else {
                }

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    LotesU.removeClass("hide");
                    HoldOn.close();
                }, 1500);
            });
        });

        Lotes.change(function () {
            getNumerosXLotes(NFideicomiso.val(), Manzana.find("option:selected").text(), Lotes.val());
        });

        LotesU.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS...ESPERE"
            });
            ViviendasU.html("");
            $.ajax({
                url: master_url + 'getNumerosXLotes',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: NFideicomisoU.val(),
                    M: ManzanaU.find("option:selected").text(),
                    L: LotesU.val()
                }
            }).done(function (data) {
                console.log('NUMEROS');
                console.log(data);
                var dtm = data[0];
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        console.log(v);
                        $.each(v.NUMEROS.split(','), function (k, vv) {
                            options = options + '<option value="' + vv + '">' + (vv + ' (' + v.MODELO + ')') + '</option>';
                        });
                    });
                    ViviendasU.html(options);
                } else {
                }

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    ViviendasU.removeClass("hide");
                    HoldOn.close();
                }, 1500);
            });
        });

        call.add(onGetRecords("tblTransmisiones", master_url + "getRecords", "rTransmisiones", "msgTransmisiones", "NO SE ENCONTRARON REGISTROS"));
        call.add(getProyectos());
        call.fire();

        btnSave.click(function () {
            var fNuevo = $('#fNuevo');
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO DATOS..."
            });
            var frm = new FormData($('#fNuevo')[0]);
            frm.append('NFideicomisoT', fNuevo.find("#NFideicomiso").find("option:selected").text());
            frm.append('ManzanaT', fNuevo.find("#Manzana").find("option:selected").text());
            frm.append('LotesT', fNuevo.find("#Lotes").find("option:selected").text());
            frm.append('txtCantidadCreditos', fNuevo.find("#txtCantidadCreditos").val());
            frm.append('txtMontoCreditos', fNuevo.find("#txtMontoCreditos").val());
            frm.append('txtCantidadEmpresarial', fNuevo.find("#txtCantidadEmpresarial").val());
            frm.append('txtMontoEmpresarial', fNuevo.find("#txtMontoEmpresarial").val());
            frm.append('txtCantidadPromocionMama', fNuevo.find("#txtCantidadPromocionMama").val());
            frm.append('txtMontoPromocionMama', fNuevo.find("#txtMontoPromocionMama").val());
            frm.append('txtCantidadPrimavera', fNuevo.find("#txtCantidadPrimavera").val());
            frm.append('txtMontoPrimavera', fNuevo.find("#txtMontoPrimavera").val());
            frm.append('txtCantidadVerano', fNuevo.find("#txtCantidadVerano").val());
            frm.append('txtMontoVerano', fNuevo.find("#txtMontoVerano").val());
            frm.append('txtCantidadOlimpico', fNuevo.find("#txtCantidadOlimpico").val());
            frm.append('txtMontoOlimpico', fNuevo.find("#txtMontoOlimpico").val());
            frm.append('txtCantidadVivaMexico', fNuevo.find("#txtCantidadVivaMexico").val());
            frm.append('txtMontoVivaMexico', fNuevo.find("#txtMontoVivaMexico").val());
            frm.append('txtCantidadDeMiedo', fNuevo.find("#txtCantidadDeMiedo").val());
            frm.append('txtMontoDeMiedo', fNuevo.find("#txtMontoDeMiedo").val());
            frm.append('txtCantidadAguinaldo', fNuevo.find("#txtCantidadAguinaldo").val());
            frm.append('txtMontoAguinaldo', fNuevo.find("#txtMontoAguinaldo").val());
            frm.append('txtCantidadOtro', fNuevo.find("#txtCantidadOtro").val());
            frm.append('txtMontoOtro', fNuevo.find("#txtMontoOtro").val());
            frm.append('txtCantidadBuenFin', fNuevo.find("#txtCantidadBuenFin").val());
            frm.append('txtMontoBuenFin', fNuevo.find("#txtMontoBuenFin").val());
            $.ajax({
                url: master_url + 'onUploadFile',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                if (parseInt(data) === 1) {
                    btnRefresh.trigger('click');
                    mdlNuevo.modal('hide');
                } else {
                    console.log(data);
                    $("#msgNuevo").html('<div class="alert alert-dismissible alert-danger">UN ERROR INESPERADO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</div>');
                }
                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnUpdate.click(function () {
            var frm = new FormData($('#fModificar')[0]);
            frm.append('ID', fModificar.find("#ID").val());
            frm.append('NFideicomisoT', fModificar.find("#NFideicomiso").find("option:selected").text());
            frm.append('Manzana', fModificar.find("#Manzana").val());
            frm.append('ManzanaT', fModificar.find("#ManzanaU").find("option:selected").text());
            frm.append('Lotes', fModificar.find("#Lotes").val());
            frm.append('LotesT', fModificar.find("#LotesU").find("option:selected").text());
            frm.append('Viviendas', fModificar.find("#Viviendas").val());
            frm.append('ViviendasT', fModificar.find("#ViviendasU").val());
            frm.append('txtCantidadCreditos', fModificar.find("#txtCantidadCreditos").val());
            frm.append('txtMontoCreditos', fModificar.find("#txtMontoCreditos").val());
            frm.append('txtCantidadEmpresarial', fModificar.find("#txtCantidadEmpresarial").val());
            frm.append('txtMontoEmpresarial', fModificar.find("#txtMontoEmpresarial").val());
            frm.append('txtCantidadPromocionMama', fModificar.find("#txtCantidadPromocionMama").val());
            frm.append('txtMontoPromocionMama', fModificar.find("#txtMontoPromocionMama").val());
            frm.append('txtCantidadPrimavera', fModificar.find("#txtCantidadPrimavera").val());
            frm.append('txtMontoPrimavera', fModificar.find("#txtMontoPrimavera").val());
            frm.append('txtCantidadVerano', fModificar.find("#txtCantidadVerano").val());
            frm.append('txtMontoVerano', fModificar.find("#txtMontoVerano").val());
            frm.append('txtCantidadOlimpico', fModificar.find("#txtCantidadOlimpico").val());
            frm.append('txtMontoOlimpico', fModificar.find("#txtMontoOlimpico").val());
            frm.append('txtCantidadVivaMexico', fModificar.find("#txtCantidadVivaMexico").val());
            frm.append('txtMontoVivaMexico', fModificar.find("#txtMontoVivaMexico").val());
            frm.append('txtCantidadDeMiedo', fModificar.find("#txtCantidadDeMiedo").val());
            frm.append('txtMontoDeMiedo', fModificar.find("#txtMontoDeMiedo").val());
            frm.append('txtCantidadAguinaldo', fModificar.find("#txtCantidadAguinaldo").val());
            frm.append('txtMontoAguinaldo', fModificar.find("#txtMontoAguinaldo").val());
            frm.append('txtCantidadOtro', fModificar.find("#txtCantidadOtro").val());
            frm.append('txtMontoOtro', fModificar.find("#txtMontoOtro").val());
            frm.append('txtCantidadBuenFin', fModificar.find("#txtCantidadBuenFin").val());
            frm.append('txtMontoBuenFin', fModificar.find("#txtMontoBuenFin").val());
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
                    btnUpdate.addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
                    setTimeout(function () {
                        btnUpdate.removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
                        btnRefresh.trigger('click');
                        mdlModificar.modal('hide');
                    }, 1000);
                } else {
                    $("#msgModificar").html('<div class="alert alert-dismissible alert-danger">UN ERROR INESPERADO OCURRIO, CONSULTE LA CONSOLA PARA MÁS DETALLE.</div>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        RDocumentoImg.click(function () {
            RDocumentoFile.trigger('click');
        });

        RDocumentoFile.change(function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                RDocumentoDisplay.html('<img src="' + reader.result + '" class="img-responsive">');
            };
            reader.readAsDataURL(RDocumentoFile[0].files[0]);
        });

        RDocumentoImgU.click(function () {
            RDocumentoFileU.trigger('click');
        });

        RDocumentoFileU.change(function () {
            var imageType = /image.*/;
            if (RDocumentoFileU[0].files[0] !== undefined && RDocumentoFileU[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayU.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileU[0].files[0]);
            } else {
                if (RDocumentoFileU[0].files[0] !== undefined && RDocumentoFileU[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayU.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileU[0].files[0]);
                } else {
                    RDocumentoDisplayU.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        RDocumentoImgD.click(function () {
            RDocumentoFileD.trigger('click');
        });

        RDocumentoFileD.change(function () {
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
                        RDocumentoDisplayD.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileD[0].files[0]);
                } else {
                    RDocumentoDisplayD.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        RDocumentoImgDU.click(function () {
            RDocumentoFileDU.trigger('click');
        });

        RDocumentoFileDU.change(function () {
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
                        RDocumentoDisplayDU.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileDU[0].files[0]);
                } else {
                    RDocumentoDisplayDU.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        RDocumentoImgDP.click(function () {
            RDocumentoFileDP.trigger('click');
        });

        RDocumentoFileDP.change(function () {
            var imageType = /image.*/;
            if (RDocumentoFileDP[0].files[0] !== undefined && RDocumentoFileDP[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayDP.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileDP[0].files[0]);
            } else {
                if (RDocumentoFileDP[0].files[0] !== undefined && RDocumentoFileDP[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayDP.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileDP[0].files[0]);
                } else {
                    RDocumentoDisplayDP.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        RDocumentoImgDPU.click(function () {
            RDocumentoFileDPU.trigger('click');
        });

        RDocumentoFileDPU.change(function () {
            var imageType = /image.*/;
            if (RDocumentoFileDPU[0].files[0] !== undefined && RDocumentoFileDPU[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    RDocumentoDisplayDPU.html('<img src="' + reader.result + '" class="img-responsive">');
                };
                reader.readAsDataURL(RDocumentoFileDPU[0].files[0]);
            } else {
                if (RDocumentoFileDPU[0].files[0] !== undefined && RDocumentoFileDPU[0].files[0].type.match('application/pdf')) {
                    console.log('ES UN PDF');
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        RDocumentoDisplayDPU.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(RDocumentoFileDPU[0].files[0]);
                } else {
                    RDocumentoDisplayDPU.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                }
            }
        });

        /*CAMPOS DE DESCUENTO*/

        txtCantidadCreditos.change(function () {
            onChangeDescuentos();
        });

        txtMontoCreditos.change(function () {
            onChangeDescuentos();
        });

        txtCantidadEmpresarial.change(function () {
            onChangeDescuentos();
        });

        txtMontoEmpresarial.change(function () {
            onChangeDescuentos();
        });

        txtCantidadPromocionMama.change(function () {
            onChangeDescuentos();
        });

        txtMontoPromocionMama.change(function () {
            onChangeDescuentos();
        });

        txtCantidadPrimavera.change(function () {
            onChangeDescuentos();
        });

        txtMontoPrimavera.change(function () {
            onChangeDescuentos();
        });

        txtCantidadVerano.change(function () {
            onChangeDescuentos();
        });

        txtMontoVerano.change(function () {
            onChangeDescuentos();
        });

        txtCantidadOlimpico.change(function () {
            onChangeDescuentos();
        });

        txtMontoOlimpico.change(function () {
            onChangeDescuentos();
        });

        txtCantidadVivaMexico.change(function () {
            onChangeDescuentos();
        });

        txtMontoVivaMexico.change(function () {
            onChangeDescuentos();
        });

        txtCantidadDeMiedo.change(function () {
            onChangeDescuentos();
        });

        txtMontoDeMiedo.change(function () {
            onChangeDescuentos();
        });

        txtCantidadAguinaldo.change(function () {
            onChangeDescuentos();
        });

        txtMontoAguinaldo.change(function () {
            onChangeDescuentos();
        });

        txtCantidadBuenFin.change(function () {
            onChangeDescuentos();
        });

        txtMontoBuenFin.change(function () {
            onChangeDescuentos();
        });

        txtCantidadOtro.change(function () {
            onChangeDescuentos();
        });

        txtMontoOtro.change(function () {
            onChangeDescuentos();
        });

        /*CAMPOS UPDATES*/
        txtCantidadCreditosU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoCreditosU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadEmpresarialU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoEmpresarialU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadPromocionMamaU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoPromocionMamaU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadPrimaveraU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoPrimaveraU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadVeranoU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoVeranoU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadOlimpicoU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoOlimpicoU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadVivaMexicoU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoVivaMexicoU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadDeMiedoU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoDeMiedoU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadAguinaldoU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoAguinaldoU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadBuenFinU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoBuenFinU.change(function () {
            onChangeDescuentosU();
        });

        txtCantidadOtroU.change(function () {
            onChangeDescuentosU();
        });

        txtMontoOtroU.change(function () {
            onChangeDescuentosU();
        });
        /*FIN CAMPOS DE DESCUENTO*/

        /*CAMPOS DE COMPRA VENTA*/
        PrecioBase.change(function () {
            onChangeCompraVenta();
        });

        MontoDescuento.change(function () {
            onChangeCompraVenta();
        });

        CostoAdic.change(function () {
            onChangeCompraVenta();
        });

        PrecioBase.keyup(function () {
            onChangeCompraVenta();
        });

        MontoDescuento.keyup(function () {
            onChangeCompraVenta();
        });

        CostoAdic.keyup(function () {
            onChangeCompraVenta();
        });

        PrecioBaseU.change(function () {
            onChangeCompraVentaU();
        });

        MontoDescuentoU.change(function () {
            onChangeCompraVentaU();
        });

        CostoAdicU.change(function () {
            onChangeCompraVentaU();
        });

        PrecioBaseU.keyup(function () {
            onChangeCompraVentaU();
        });

        MontoDescuentoU.keyup(function () {
            onChangeCompraVentaU();
        });

        CostoAdicU.keyup(function () {
            onChangeCompraVentaU();
        });

        PagoTerreno.change(function () {
            onTotalIngresoPorTerrenoYVenta();
        });

        PagoTerreno.keyup(function () {
            onTotalIngresoPorTerrenoYVenta();
        });

        PagoRendimientos.change(function () {
            onTotalIngresoPorTerrenoYVenta();
        });

        PagoRendimientos.keyup(function () {
            onTotalIngresoPorTerrenoYVenta();
        });

        PagoTerrenoU.change(function () {
            onTotalIngresoPorTerrenoYVentaU();
        });

        PagoTerrenoU.keyup(function () {
            onTotalIngresoPorTerrenoYVentaU();
        });

        PagoRendimientosU.change(function () {
            onTotalIngresoPorTerrenoYVentaU();
        });

        PagoRendimientosU.keyup(function () {
            onTotalIngresoPorTerrenoYVentaU();
        });
    });

    function onChangeCompraVenta()
    {
        var subtt = parseFloat(PrecioBase.val()) - parseFloat((MontoDescuento.val() > 0 && MontoDescuento.val() !== undefined) ? MontoDescuento.val() : 0);
        subtt += parseFloat((CostoAdic.val() !== undefined && CostoAdic.val() > 0) ? CostoAdic.val() : 0);
        PrecioTotal.val(subtt);
    }

    function onChangeCompraVentaU()
    {
        var subtt = parseFloat(PrecioBaseU.val()) - parseFloat((MontoDescuentoU.val() > 0 && MontoDescuentoU.val() !== undefined) ? MontoDescuento.Uval() : 0);
        subtt += parseFloat((CostoAdicU.val() !== undefined && CostoAdicU.val() > 0) ? CostoAdicU.val() : 0);
        PrecioTotalU.val(subtt);
    }

    function onTotalIngresoPorTerrenoYVenta()
    {
        var subtt = 0.0;
        subtt = parseFloat(PagoTerreno.val()) + parseFloat((PagoRendimientos.val() !== undefined && PagoRendimientos.val() > 0) ? PagoRendimientos.val() : 0);
        TotalIng.val(subtt);
    }

    function onTotalIngresoPorTerrenoYVentaU()
    {
        var subtt = 0.0;
        subtt = parseFloat(PagoTerrenoU.val()) + parseFloat((PagoRendimientosU.val() !== undefined && PagoRendimientosU.val() > 0) ? PagoRendimientosU.val() : 0);
        TotalIngU.val(subtt);
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
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                $('#' + tblName + ' thead th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });

                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                /*CLICK SELECTED ROW*/
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
                    var dtm = tblSelected.row(this).data();
                    temp = $(dtm[0])[0].innerText;
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[0]).find("span").innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    $("#btnEditar").trigger("click");
                });
                /* Apply the search*/
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
                /* Apply the search*/
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.header()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

    function getDispersiones(tblname, url, target_result, target_fail_messages, fail_message)
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
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                /*CLICK SELECTED ROW*/
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
                    var dtm = tblSelected.row(this).data();
                    temp = $(dtm[0])[0].innerText;
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[0]).find("span").innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    $("#btnEditarDispersion").trigger("click");
                });
                /* Apply the search*/
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

    function getDispersionesPagadas(tblname, url, target_result, target_fail_messages, fail_message)
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
                $('#' + tblName + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for="">' + title + '</label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                /*CLICK SELECTED ROW*/
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
                    var dtm = tblSelected.row(this).data();
                    temp = $(dtm[0])[0].innerText;
                });
                /*DB CLICK FOR EDIT*/
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[0]).find("span").innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
                    $("#btnEditarDispersionesPagadas").trigger("click");
                });
                /* Apply the search*/
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

    function getCancelRecords(tblname, url, target_result, target_fail_messages, fail_message)
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
                /*CLICK SELECTED ROW*/
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
                    var dtm = tblSelected.row(this).data();
                    temp = $(dtm[0])[0].innerText;
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

    function onChangeDescuentos()
    {
        rTotalGlobal = 0.0;
        rSubtotal = (txtCantidadCreditos.val() * txtMontoCreditos.val());
        rCreditos.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadEmpresarial.val() * txtMontoEmpresarial.val());
        rEmpresarial.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadPromocionMama.val() * txtMontoPromocionMama.val());
        rPromocionMama.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadPrimavera.val() * txtMontoPrimavera.val());
        rPrimavera.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadVerano.val() * txtMontoVerano.val());
        rVerano.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadOlimpico.val() * txtMontoOlimpico.val());
        rOlimpico.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadVivaMexico.val() * txtMontoVivaMexico.val());
        rVivaMexico.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadDeMiedo.val() * txtMontoDeMiedo.val());
        rDeMiedo.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadAguinaldo.val() * txtMontoAguinaldo.val());
        rAguinaldo.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadBuenFin.val() * txtMontoBuenFin.val());
        rBuenFin.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = txtMontoOtro.val();
        rOtros.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += parseFloat(rSubtotal) > 0 ? parseFloat(rSubtotal) : 0;
        rGranDescuentoTotal.val(rTotalGlobal);
    }

    function onChangeDescuentosU()
    {
        rTotalGlobal = 0.0;
        rSubtotal = (txtCantidadCreditosU.val() * txtMontoCreditosU.val());
        rCreditosU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadEmpresarialU.val() * txtMontoEmpresarialU.val());
        rEmpresarialU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadPromocionMamaU.val() * txtMontoPromocionMamaU.val());
        rPromocionMamaU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadPrimaveraU.val() * txtMontoPrimaveraU.val());
        rPrimaveraU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadVeranoU.val() * txtMontoVeranoU.val());
        rVeranoU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadOlimpicoU.val() * txtMontoOlimpicoU.val());
        rOlimpicoU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadVivaMexicoU.val() * txtMontoVivaMexicoU.val());
        rVivaMexicoU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadDeMiedoU.val() * txtMontoDeMiedoU.val());
        rDeMiedoU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadAguinaldoU.val() * txtMontoAguinaldoU.val());
        rAguinaldoU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = (txtCantidadBuenFinU.val() * txtMontoBuenFinU.val());
        rBuenFinU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += rSubtotal;
        rSubtotal = txtMontoOtroU.val();
        rOtrosU.html("$" + $.number(rSubtotal, 5, '.', ' ,'));
        rTotalGlobal += parseFloat(rSubtotal) > 0 ? parseFloat(rSubtotal) : 0;
        rGranDescuentoTotalU.val(rTotalGlobal);
    }

    function getProyectos()
    {
        Manzana.html("");
        Lotes.html("");
        NumeroDeVivienda.html("");
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getProyectos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var options = "<option></option>";
            $.each(data, function (k, v) {
                options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            $("#fBusquedaEspecifica").find("#Proyecto").html(options);
            $("#sDispersiones #Proyecto").html(options);
            $(".modal #Proyecto").html(options);
            NFideicomiso.html(options);
            NFideicomisoU.html(options);
            NFideicomisoD.html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getLotesXManzana(ID, M)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS...ESPERE"
        });
        Lotes.addClass("hide");
        Lotes.html("");
        Lotes.parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
        $.ajax({
            url: master_url + 'getLotesXManzana',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M
            }
        }).done(function (data) {
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data[0] !== undefined && dtm.LOTES !== undefined) {
                $.each(dtm.LOTES.split(","), function (k, v) {
                    options = options + '<option value="' + v + '">' + v + '</option>';
                });
                Lotes.html(options);

            } else {
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            setTimeout(function () {
                Lotes.removeClass("hide");
                Lotes.next().remove();
                HoldOn.close();
            }, 1500);
        });
    }

    function getNumerosXLotes(ID, M, L)
    {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS...ESPERE"
        });
        NumeroDeVivienda.html("");
        NumeroDeVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
        $.ajax({
            url: master_url + 'getNumerosXLotes',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
            console.log('NUMEROS');
            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    console.log(v);
                    $.each(v.NUMEROS.split(','), function (k, vv) {
                        options = options + '<option value="' + vv + '">' + (vv + ' (' + v.MODELO + ')') + '</option>';
                    });
                });
                NumeroDeVivienda.html(options);
            } else {
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            setTimeout(function () {
                NumeroDeVivienda.removeClass("hide");
                NumeroDeVivienda.next().remove();
                HoldOn.close();
            }, 1500);
        });
    }

    function getIncrementosXTerrenos() {
        temp = 0;
        var VistaPreviaIncremento = mdlVerIncrementoTerreno.find("#VistaPrevia");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getIncrementosXTerrenos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            $("#rTransmisiones").html(getTable("tblIncrementosXTerrenos", data));
            var tblSelected = $("#tblIncrementosXTerrenos").DataTable(tableOptions);
            /*CLICK SELECTED ROW*/
            $("#tblIncrementosXTerrenos tbody").on('click', 'tr', function () {
                $("#tblIncrementosXTerrenos").find("tr").removeClass("success");
                $("#tblIncrementosXTerrenos").find("tr").removeClass("warning");
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                console.log('CLICK');
                console.log(dtm[0]);
                temp = dtm[0];
            });

            /*DB CLICK FOR EDIT*/
            $('#tblIncrementosXTerrenos tbody').on('dblclick', 'tr', function () {
                $("#tblIncrementosXTerrenos").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = dtm[0];
                console.log('DOBLE CLICK');
                console.log(dtm);
                VistaPreviaIncremento.html("<h1>NO SE ADJUNTO NADA ! ! ! </h1>");
                $.ajax({
                    url: master_url + 'getIncrementoXID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: dtm[0]
                    }
                }).done(function (data, x, jq) {
                    VistaPreviaIncremento.html("<h1>NO SE ADJUNTO NADA ! ! ! </h1>");
                    console.log('***** ***** ***** ***** *****');
                    console.log(data);
                    console.log('***** ***** ***** ***** *****');
                    var dtm = data[0];
                    $.each(data[0], function (k, v) {
                        console.log(k + " : " + v);
                        mdlVerIncrementoTerreno.find("#" + k).val(v);
                        mdlVerIncrementoTerreno.find("#" + k).select2("val", v);
                    });

                    if (dtm.URL !== null && dtm.URL !== undefined && dtm.URL !== '') {
                        var ext = getExt(dtm.URL);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            VistaPreviaIncremento.html("<hr><img id='trtImagen' src='" + dtm.URL + "' class ='img-responsive'/>");
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            VistaPreviaIncremento.html('<hr> <embed src="' + dtm.URL + '" type="application/pdf" width="100%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                    } else {
                        VistaPreviaIncremento.html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }

                    mdlVerIncrementoTerreno.find("#IdTransmision").val(dtm[1]);
                    mdlVerIncrementoTerreno.modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
        }).always(function () {
            HoldOn.close();
        });
    }
    function getEmpleados( ) {
        $.ajax({
            url: master_url + 'getEmpleados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="' + v.ID + '">' + v.Nombre + " " + v.apaterno + " " + v.amaterno + '</option>';
            });
            $(".modal").find("#Responsable").html(option);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).done(function () {
            HoldOn.close();
        });
    }
</script>