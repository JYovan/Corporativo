 <div class="row"> 
    <div class="col-md-12 margin-15-top-bottom">  
        <!------------------------OPTIONS------------------------------------------>
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" onclick="onHideFunctions()">PAGOS PROGRAMADOS<span class="fa fa-chevron-up" ></span></div>
                </div> 
                <div class="col-md-2 panel-title" align="right">
                    <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div id="btnAccions" align="center" class="col-md-12">
                        <fieldset>
                            <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevaCuenta" > 
                                <button id="btnNuevo" class="btn btn3d   btn-info "  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVA CUENTA">
                                    <span class="fa fa-plus fa-4x"></span></button>
                            </span>
                            <button id="btnEditar" class="btn btn3d btn-success" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="MODIFICAR CUENTA"><span class="fa fa-pencil fa-4x"></span></button>

                            <button id="btnRefrescar" class="btn btn3d btn- btn-warning" data-toggle="tooltip" data-placement="top" 
                                    title="" data-original-title="REFRESCAR CUENTAS"  ><span class="fa fa-refresh fa-4x"></span></button>
                        </fieldset>
                    </div>  
                    <div id="content-busqueda" class="col-md-12 ui-widget-content hide ztop">
                        <form id="frmBusquedaEspecifica">
                            <div class="col-md-2">
                                <label for="">INICIO</label> 
                                <input type="text" data-provide="datepicker" id="FechaInicioH" name="FechaInicioH" class="form-control" required="" data-date-format="dd/mm/yyyy" readonly="">

                            </div>
                            <div class="col-md-2">
                                <label for="">TERMINO</label>
                                <input type="text" data-provide="datepicker" id="FechaTerminoH" name="FechaInicioH" class="form-control" required="" data-date-format="dd/mm/yyyy" readonly="">

                            </div>
                            <div class="col-md-3">
                                <label for="">EMPRESA</label>
                                <select id="cmbEmpresaBusqueda" name="cmbEmpresaBusqueda" class="form-control"> 
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">PROVEEDOR</label>
                                <select id="cmbProveedorFactura" name="cmbProveedorFactura" class="form-control">
                                </select>
                            </div>
                            <div class="col-md-1" align="center" > 
                                <button id="btnReporteBusqueda" class="btn btn3d btn-lg btn-indigo"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="BUSCAR" type="button" >
                                    <span class="fa fa-search fa-2x"></span>
                                </button>
                            </div>
                            <div class="col-md-1" align="center" > 
                                <button id="btnResetBusqueda" class="btn btn3d btn-lg btn-brown"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="RESETEAR"  type="button" >
                                    <span class="fa fa-trash fa-2x"></span>
                                </button>
                                <script>
                                </script>
                                <!--</span>-->
                            </div>
                            <div class="col-md-12" align="center" >
                                <div id="msgReportsTF"></div> 

                                <button id="btnReportesFacturas" class="btn btn3d btn-lg btn-brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL(A)"  type="button" >
                                    <span class="fa fa-eye fa-2x"></span>
                                </button> 
                                <button id="btnReportesFacturasSinAvanzar" class="btn btn3d btn-lg btn-brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO GENERAL(SA)(REGISTRADA)"  type="button" >
                                    <span class="fa fa-eye-slash fa-2x"></span>
                                </button> 
                                <button id="btnCRIndividual" class="btn btn3d btn-lg btn-brown " data-toggle="tooltip" data-placement="top" title="" data-original-title="CONTRA RECIBO"  type="button" >
                                    <span class="fa fa-exclamation fa-2x"></span>
                                </button>  
                                <button id="btnAcumuladoPorProveedor" class="btn btn3d btn-lg btn-brown " data-toggle="tooltip" data-placement="top" title="" data-original-title="ACUMULADO ESPECÍFICO"  type="button" >
                                    <span class="fa fa-file-text fa-2x"></span>
                                </button>  
                                <!--</span>-->
                            </div>
                        </form>
                    </div>
                    <div id="msgTerceros" class="col-md-12"></div>
                    <div id="rTerceros" class=""></div> 
                </fieldset>
            </div>
        </div>
        <fieldset> 
            <div class="col-md-10"></div>
            <div class="col-md-1">
            </div>
        </fieldset>
    </div> 
</div>