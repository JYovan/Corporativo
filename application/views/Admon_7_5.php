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

<?php echo form_open_multipart('controlador/Valoracion'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Valoraciones del estado de salud</strong>
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
                            <div class="col-xs-12 col-sm-12">
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Fecha de valoración
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaV" id="datepicker">
                                    </br>
                                </div>
                            </div>    

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Peso
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input class="form-control" type="text" name="Peso" id="Peso">
                                    </br>
                                </div>
                            </div>    
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Talla
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input class="form-control" type="text" name="Talla" id="Talla">
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
                        <td>
                            <div class="col-md-6 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Índice de masa corporal
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input class="form-control" type="text" name="Indice" id="ndice">
                                    </br>
                                    </br>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Diagnóstico
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <select class="form-control" id="Diagnostico" name="Diagnostico"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Sobrepeso">Sobrepeso</option>
                                        <option value="Obesidad">Obesidad</option>
                                        <option value="Desnutricion">Desnutricion</option>
                                    </select>
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
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-12 col-xs-6">
                                    Observaciones
                                </div>
                                <div class="col-md-12 col-xs-6">
                                    <input class="form-control" type="text" name="Observacion" id="Observacion">
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

