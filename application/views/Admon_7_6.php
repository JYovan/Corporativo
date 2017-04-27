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

<?php echo form_open_multipart('controlador/Remuneraciones'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Información sobre remuneraciones</strong>
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
                                <div class="col-md-3 col-xs-6">
                                    Elegir empleado:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Empleado" name="Empleado"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
<?php } ?>
                                    </select>
                                </div>   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-6">
                                Mes
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <select class="form-control" id="meses" name="meses"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Meses as $Meses1) { ?> 
                                        <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
<?php } ?>
                                </select>
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Since">

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
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Cantidad de días de pago
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  class="form-control" type="text" name="Dias" id="Dias">
                                    </br>
                                    </br>
                                </div>
                            </div>    

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Día de pago programado
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input class="form-control" type="text" name="DiaPago" id="DiaPago">
                                    </br>
                                    </br>
                                </div>
                            </div>    
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Forma de pago
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="FormaPago" name="FormaPago"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Deposito">Deposito</option>
                                    </select>
                                    </br>
                                    </br>
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Percepciones</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Sueldo:
                                </div>
                                <div class="col-md-3 col-xs-6" id="InSueldo">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Sueldo" id="Sueldo" disabled="disabled">
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Prima vacacional:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input value="0" type="number" step="0.01"  class="form-control" name="Vacacional" id="Vacacional" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Prima de antigüedad:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input value="0"  type="number" step="0.01"  class="form-control" name="Antiguedad" id="Antiguedad" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Apoyo IMSS:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="IMSS" id="IMSS" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Apoyo INFONAVIT:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="INFONAVIT" id="INFONAVIT" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Aguinaldo:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Aguinaldo" id="Aguinaldo" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Bono de productividad:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Bono" id="Bono" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Apoyo para despensa:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Despensa" id="Despensa" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Horas extra:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Horas" id="Horas" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Total:
                                </div>
                                <div class="col-md-3 col-xs-6" id="SPer">
                                    <input  value="-" type="number" step="0.01"  class="form-control" name="Percepciones" id="Percepciones" disabled="disabled">
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <button class="btn btn-primary" type="button" id="Cper" name="Cper">Sumar Percepciones</button>
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Deducciones</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    ISPT:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="ISPT" id="ISPT" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Préstamo:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Prestamo" id="Prestamo" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Fondo de ahorro:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Ahorro" id="Ahorro" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    IMSS:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="IMSS2" id="IMSS2" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Inasistencia laboral:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  value="0" type="number" step="0.01"  class="form-control" name="Falta" id="Falta" required>
                                </div>
                                <div class="col-md-3 col-xs-12">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Total:
                                </div>
                                <div class="col-md-3 col-xs-6" id="Sdedu">
                                    <input  value="-" type="number" step="0.01"  class="form-control" name="Deducciones" id="Deducciones" disabled="disabled">
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <button class="btn btn-primary" type="button" id="Cded" name="Cded">Sumar Deducciones</button>
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
                                <div class="col-md-3 col-xs-12">

                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Total:
                                </div>
                                <div class="col-md-3 col-xs-6" id="Total">
                                    <input  value="-" type="number" step="0.01"  class="form-control" name="Pago" id="Pago" disabled="disabled">
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <button class="btn btn-primary" type="button" id="Total" name="Total">Sumar remuneraciones</button>
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                            </div>
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
    </tr>
    <tr>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>
<script>
    cli.config.Since();
    cli.config.Percepciones();
    cli.config.Deducciones();
    cli.config.Total();
</script>

