<html>
    <head>
        <?php
        foreach ($Meta as $datos1) {
            $a = $datos1->An;
            $b = $datos1->Bn;
            $Situacion = $datos1->Situacion;
            if ($b != 0) {
                $Rn = ($a / $Situacion) * 100;
            } else {
                $Rn = 0;
            }
            $Frecuencia = $datos1->Frecuencia;
            $Mes = $datos1->MetaxMes;
            $Unanos = $datos1->Meta1anos;
            $Cincoanos = $datos1->Meta5anos;
            $acumulado = abs(($b * 100) / $Situacion);
            $Acumuladomes = abs(($a * 100) / $Situacion);
            $Rmes = ($Acumuladomes * 100) / $Mes;
            $Runanio = ($acumulado * 100) / $Unanos;
            $Rcincoanios = ($acumulado * 100) / $Cincoanos;
            $lRmes = abs(($a * 100) / $Situacion);
            $lRunanio = abs(($b / $Situacion) * 100);
            $lRcincoanios = abs(($b / $Situacion) * 100);
            if ($lRmes >= $Mes) {
                $CumplioMes = 'Cumplida';
            } else {
                $CumplioMes = 'No Cumplida';
            }
            if ($lRunanio >= $Unanos) {
                $CumplioAnio = 'Cumplida';
            } else {
                $CumplioAnio = 'No Cumplida';
            }
            if ($lRcincoanios >= $Cincoanos) {
                $Cumplio5Anios = 'Cumplida';
            } else {
                $Cumplio5Anios = 'No Cumplida';
            }
        }
        ?>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages: ["gauge"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Label', 'Value'],
                    [<?php echo "'" . $Frecuencia . "'" ?>, <?php echo round($Rmes, 2) ?>],
                    ['1 año', <?php echo round($Runanio, 2) ?>],
                    ['5 años', <?php echo round($Rcincoanios, 2) ?>]
                ]);

                var options = {
                    width: 250, height: 75,
                    redFrom: 0, redTo: 10,
                    yellowFrom: 10, yellowTo: 20,
                    greenFrom: 90, greenTo: 100,
                    minorTicks: 5
                };

                var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

                chart.draw(data, options);


            }
        </script>
    </head>
    <body>

        <div class="container">	
            <table width="100%">
                <tr>
                    <td>
                        <?php
                        $respuesta = '-';
                        foreach ($USUARIOS as $USUARIOS1) {
                            if ($USUARIOS1->Id == $User) {
                                $respuesta = $USUARIOS1->nombre;
                                $indice = $USUARIOS1->Id;
                            }
                        }
                        echo $respuesta;
                        ?>
                    </td>
                </tr>
            </table>

<?php echo form_open_multipart('controlador/ActualizarEvidencias'); ?>  
            <table width="100%" border="1" bordercolor="#ff6633">
                <tr>
                    <td>
<?php foreach ($Meta as $datos1)
     ?> 
                        <table width="100%">
                            <tr>
                                <td bgcolor="#ff6600" align="center">
                                    <div class="col-xs-12 col-sm-12">
                                        <strong style="color:#FFF">Metas</strong>		
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12">
                                        </br>
                                        <input  class="form-control" type="hidden" value="<?php echo $datos1->ID; ?>" name="Meta" id="Meta">	
                                    </div>
                                </td>
                            </tr>    
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12">
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <div class="col-xs-12 col-sm-12">
<?php echo "Meta " . $datos1->ID . ".- " . $datos1->Descripcion; ?>
                                                    </div> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-xs-12 col-sm-12">
<?php echo $datos1->Meta; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Forma de evidenciar la meta
                                    </div> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12">
                                        <?php echo $datos1->FormaEvidencia; ?>
                                    </div> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Fórmula R = (A/B)*100 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-6 col-xs-12">
<?php
$respuesta = '-';
foreach ($USUARIOS as $responsables1) {
    if ($responsables1->Id == $datos1->Responsable) {
        $respuesta = $responsables1->nombre . ' ' . $responsables1->apaterno . ' ' . $responsables1->amaterno;
    }
}
echo $respuesta;
?>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <?php
                                        $respuesta = '-';
                                        foreach ($USUARIOS as $responsables1) {
                                            if ($responsables1->Id == $datos1->Encargado) {
                                                $respuesta = $responsables1->nombre . ' ' . $responsables1->apaterno . ' ' . $responsables1->amaterno;
                                            }
                                        }
                                        echo $respuesta;
                                        ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Variables independientes
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-4 col-xs-6">
<?php echo 'Sentido: ' . $datos1->Sentido; ?>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
<?php echo 'Frecuencia: ' . $datos1->Frecuencia; ?>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <?php echo 'Situación inicial: ' . $datos1->Situacion; ?>
                                    </div> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-2 col-xs-12">

                                    </div>
                                    <div class="col-md-8 col-xs-6">
<?php echo "A: " . $datos1->A; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-6">
                                        <?php echo $datos1->An; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-2 col-xs-12">

                                    </div>
                                    <div class="col-md-8 col-xs-6">
<?php echo "B: " . $datos1->B; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-6">
<?php echo $datos1->Bn; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-2 col-xs-12">

                                    </div>
                                    <div class="col-md-8 col-xs-6" align="right">
<?php echo "Avance del mes: " . $datos1->Rn . "%"; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-6">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Estrategias para cumplir con la meta del Indicador
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-6 col-xs-12">
<?php echo $datos1->Estrategias; ?>
                                    </div>
                                    <div class="col-md-6 col-xs-12">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Porcentajes de Metas
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-2 col-xs-12">
                                        Meta Mensual
                                    </div>
                                    <div class="col-md-2 col-xs-12">
<?php echo $datos1->MetaxMes . "%"; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        Meta 1 año
                                    </div>
                                    <div class="col-md-2 col-xs-12">
<?php echo $datos1->Meta1anos . "%"; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-12">
                                        Meta 5 años
                                    </div>
                                    <div class="col-md-2 col-xs-12">
<?php echo $datos1->Meta5anos . "%"; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-4 col-xs-12">
                                        <?php echo 'Meta Mensual ' . $CumplioMes . ' (' . $lRmes . '%)'; ?>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <?php echo 'Meta 1 año ' . $CumplioAnio . ' (' . $lRunanio . '%)'; ?>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                            <?php echo 'Meta 5 años ' . $Cumplio5Anios . ' (' . $lRcincoanios . '%)'; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>    
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Evidencia para cumplir con la meta del Indicador
                                        </br>   
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12 col-xs-12">
<?php
$MetaC = "Meta_" . $datos1->ID;
$files = get_filenames($this->folder3, FALSE);
foreach ($files as $file) {
    $ext = substr($file, strpos($file, ".") + strlen("."));
    $name = substr($file, 0, strpos($file, "-"));
    if ($name == $MetaC) {
        ?> 
                                                <div class="col-md-6 col-xs-12" align="left"> <?php
        echo anchor('controlador/downloads2/' . $file, $file) . br(1);
        ?>
                                                </div>
                                                <div class="col-md-6 col-xs-12" align="left"> 
                                                    <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Evidencias/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/Folder.png" width="30" height="30" /></button>
                                                </div>
    <?php }
}
?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                <tr>
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                        Porcentajes de avance para cumplir la meta
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>	
                                    <div id="chart_div" style="width:100px; height:auto;"></div>
                                </td>
                            </tr>
                        </table>  
                    </td>
                </tr>
            </table>
        </form>

        <table width="100%">
            <tr>
                <td width="80%">

                </td>
                <td width="20%" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table>
    </div>
