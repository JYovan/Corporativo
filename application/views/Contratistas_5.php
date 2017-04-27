<!-- configuramos el plugin-->
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

<?php echo form_open_multipart(base_url().'index.php/controlador/EdoCuenta'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Reporte por concepto de destajo</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-12">
                                    <label for="Cliente" class="control-label">Seleccionar concepto del trabajo:</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" id="ConceptoP" name="ConceptoP"  required="required">
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($ConceptoP as $ConceptoP1) { ?> 
                                            <option value="<?php echo $ConceptoP1->id_concepto; ?>"><?php echo $ConceptoP1->dsc_concepto; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-12">
                                    <label for="NombreActividad" class="control-label">Periodo: </label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="NombreActividad" class="control-label">Fecha de inicio </label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="NombreActividad" class="control-label">Fecha de término </label><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input class="form-control" type="text" name="FechaInicioEdo" id="datepicker"  data-provide="datepicker" data-date-format="dd/mm/yyyy"  value="<?php  ?>">	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input class="form-control" type="text" name="FechaTerminoEdo" id="datepicker2"  data-provide="datepicker" data-date-format="dd/mm/yyyy"  value="<?php  ?>">	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">   
                                <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" value="<?php echo $indice; ?>" >Consultar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Reporte de conceptos:</strong>	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="ResultadoEdoCuenta">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>	
                            </div>
                        </td>
                    </tr>
                </table>  
            </td>
        </tr>
    </table>
</form>
    <div class="col-md-12">
        <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlContratistas'"><span class="fa fa-arrow-left fa-3x"></span></button>
    </div>
</div>
<script>
    cli.config.RepXConcepto();
</script>