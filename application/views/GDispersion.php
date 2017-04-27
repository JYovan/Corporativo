<script>
    $(function () {
        $("#datepicker").datepicker();
    });
    $(function () {
        $("#datepicker2").datepicker();
    });
    $(function () {
        $("#datepicker3").datepicker();
    });
    $(function () {
        $("#datepicker4").datepicker();
    });</script> 
<script>
    $(function () {
        //Agregamos el "Idioma" Español con las traducciones que deseemos y el formato que queramos que tenga la fecha.
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi&eacute;', 'Juv', 'Vie', 'S&aacute;b'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        //Indicamos que por defecto coja el idioma es(Español)
        $.datepicker.setDefaults($.datepicker.regional['es']);
    });
    $(function () {
        //Declaramos que todos los IDs que se llamen datepicker(id="datepicker") se conviertan en el Objeto Datepicker
        // y le indicamos que se aparezca una lista con los meses y otra con los años.
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1
        });
    });</script>
<?php 
    $respuesta = '-';
    foreach ($USUARIOS as $USUARIOS1) {
        if ($USUARIOS1->Id == $User) {
            $respuesta = $USUARIOS1->nombre;
            $indice = $USUARIOS1->Id;
        }
    } 
?>
<fieldset>  
    <div class="col-md-1">
        <br>
        <button type="button" id="regresar" name="regresar" class="btn btn-primary btn-lg"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>'">
            <span class="fa fa-arrow-left fa-lg"></span> ATRAS</button>
    </div>
</fieldset> 
<h3><?php echo $respuesta;?></h3>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg"></span> Gráfico de dispersiones</h3>
    </div>
    <div class="panel-body"> 
        <fieldset>
            <div class="col-md-12 col-xs-12">
                <label for="1" class="control-label">Fideicomiso</label><br>
            </div>  
            <div class="col-md-12 col-xs-12">
                <select class="form-control" id="cmbFideicomiso" name="cmbFideicomiso"   required="required">
                    <option value="0">Selecciona</option>
                    <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                        <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
                    <?php } ?>
                </select>
            </div>
                      <div class="col-md-12 col-xs-12">
                            <div class="col-md-6 col-xs-6">
                                <label for="NombreActividad" class="control-label">Fecha de inicio </label><br>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label for="NombreActividad" class="control-label">Fecha de término </label><br>
                            </div>
                        </div> 
                        <div class="col-md-6 col-xs-6">
                            <input class="form-control" type="text" name="FechaInicioEdo" id="datepicker"  value="<?php echo date("d/m/Y")  ?>">	
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <input class="form-control" type="text" name="FechaTerminoEdo" id="datepicker2"  value="<?php echo date("d/m/Y")  ?>">	
                        </div>

            <div id="sTituloTransVSDisp" class="col-xs-12 col-sm-12 hide" align="center">
                <br><label class="control-label"><h2>COMPORTAMIENTO DE DISPERSIONES DE RECURSOS POR TRANSMISION DE VIVIENDA</h2></label>	
            </div>
            <div id="hrTitulo" class="col-xs-12 col-sm-12 hide">
                <hr class="">
            </div> 
            <!------------------------------------------------GRAFICA DE TRANSMISIONES VS DISPERSIONES CON ETIQUETAS DE MONTOS---------------------------------------------------->

            <div class="col-md-12 col-xs-12" id="gTransVsDispTransNoDisp">
                <div class="col-md-12 col-xs-12">
                    <div id="rGraph"></div>
                    <label class="text-center" for = "barTransmisionesVSDispersiones" id="tChart">
                    </label>
                    <div id="rChart"></div>
                    </br>

                </div>
                <div id="legendDiv1" class="col-md-6 col-xs-12 doughnut-legend" >
                </div>

                </br>
            </div>

            <!------------------------------------------------FIN GRAFICA ---------------------------------------------------->
        </fieldset>
    </div>
</div> 
</div>    
<script>
    cli.config.TransVSDispTranNoDisp();
</script>


