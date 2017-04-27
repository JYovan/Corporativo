<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="row"> 
    <div class="col-md-12"> 
        <button class="btn btn3d btn-primary btn-lg" type="button" 
                data-toggle="tooltip" data-placement="right" title="" data-original-title="ATRAS"  
                onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'">
            <span class="fa fa-arrow-left fa-lg"></span>
        </button>  
    </div>
    <div class="col-md-12">
        <!-----------------------------SUBTITULO------------------------------------->

        <!------------------------OPTIONS------------------------------------------>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg"></span> COMPORTAMIENTO DE DESARROLLOS</h3>
                <input  class="form-control" type="hidden" name="user" id="user" >
            </div>
            <div class="panel-body">
                <fieldset>
                    <!--------------------GRAFICO - COMPORTAMIENTO DE COMERCIALIZACION DE LOS DESARROLLOS INMOBILIARIOS-------------------->
                    <div class="form-group">  
                        <div id="sTituloCCDI" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2>COMPORTAMIENTO DE COMERCIALIZACION DE LOS DESARROLLOS INMOBILIARIOS</h2></label>	
                        </div>
                        <div id="hrTituloCCDI" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div> 
                        <div id="rGraficoCCDI" class="col-md-12">
                            <H1 class="text-center">
                                <span class="fa fa-circle-o faa-burst animated fa-3x"></span>   CARGANDO... </h1></div>
                    </div> 
                    <!------------------------------------------------------------------------------------------------------------------>
                </fieldset>
                <fieldset>
                    <!--------------------GRAFICO - COMPORTAMIENTO DE COMERCIALIZACION DE LOS DESARROLLOS INMOBILIARIOS(NÚMERO)-------------------->
                    <div class="form-group">  
                        <div id="sTituloCCDIn" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2 class="">COMPORTAMIENTO DE COMERCIALIZACION DE LOS DESARROLLOS INMOBILIARIOS(NÚMERO)</h2></label>	
                        </div>
                        <div id="hrTituloCCDIn" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div> 
                        <div id="rGraficoCCDIn">

                            <H1 class="text-center">
                                <span class="fa fa-circle-o faa-burst animated fa-3x"></span> CARGANDO... </h1> 
                        </div>
                    </div> 
                    <!------------------------------------------------------------------------------------------------------------------>
                </fieldset>
                <fieldset>
                    <!--------------------GRAFICO - INGRESOS POR VENTAS DE VIVIENDAS -------------------->
                    <div class="form-group">  
                        <div id="sTituloIVV" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2> INGRESOS POR VENTAS DE VIVIENDAS</h2></label>	
                        </div>
                        <div id="hrTituloIVV" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div> 
                    </div>  
                    <div id="rGraficoIVV" style="" width="100%">    
                        <H1 class="text-center">
                            <span class="fa fa-circle-o faa-burst animated fa-3x"></span> CARGANDO... </h1>
                    </div> 
                    <!------------------------------------------------------------------------------------------------------------------>
                </fieldset>
                <fieldset>
                    <!--------------------GRAFICO - INGRESOS POR VENTAS DE VIVIENDAS -------------------->
                    <div class="form-group">  
                        <div id="sTituloCVPD" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2> COMPORTAMIENTO DE VENTAS POR DESARROLLO</h2></label>	
                        </div>
                        <div id="hrTituloCVPD" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div>
                        <div id="rGraficoCVPD">
                            <H1 class="text-center">
                                <span class="fa fa-circle-o faa-burst animated fa-3x"></span> CARGANDO... </h1></div>
                    </div> 
                    <!------------------------------------------------------------------------------------------------------------------>
                </fieldset>
                <fieldset>
                    <!--------------------GRAFICO - INGRESOS POR VENTAS DE VIVIENDAS -------------------->
                    <div class="form-group">  
                        <div id="sTituloCVPDmv" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2> COMPORTAMIENTO DE VENTAS POR DESARROLLO (MÓDELO DE VIVIENDA)</h2></label>	
                        </div>
                        <div id="hrTituloCVPDmv" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div> 
                        <div id="rGraficoCVPDmv"></div>
                    </div> 
                    <!------------------------------------------------------------------------------------------------------------------>
                </fieldset>
                <fieldset>
                    <!--------------------GRAFICO - INGRESOS POR VENTAS DE VIVIENDAS -------------------->
                    <div class="form-group">  
                        <div id="sTituloIVVDMV" class="col-xs-12 col-sm-12" align="center">
                            <br><label class="control-label"><h2> INGRESOS POR VENTA DE VIVIENDAS DEL DESARROLLO POR MÓDELO DE VIVIENDA</h2></label>	
                        </div>
                        <div id="hrTituloIVVDMV" class="col-xs-12 col-sm-12">
                            <hr class="">
                        </div> 
                        <div id="rGraficoIVVDMV"></div>
                    </div> 
                    <!------------------------------------------------------------------------------------------------------------------>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-md-12"><br></div>
</div>

<script>
</script>
