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
        <tr>
            <td bgcolor="#ff6600" align="center">
                <strong style="color:#FFF">Módulo de Cálculo de Impuestos</strong>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="Nombre_cliente" class="control-label">Nombre de la empresa:</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" id="ID_cliente2">
                    <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                        <option value="">Selecciona</option>
                        <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                            <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
<?php } ?>
                    </select>

                </div>
            </td>
        </tr>

    </table>

<?php echo form_open_multipart('controladorCalculo/CambiarEstatus'); ?>  
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="DatosL" class="control-label">Datos</label><br>		
                            </div>
                            <div class="col-xs-12 col-sm-12">Información de la empresa</div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Informacion">
                                </br>		
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td bgcolor="#3a545f">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Impuestos" class="control-label" style="color:#FFF">Asignación de estatus</label><br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <blockquote>
                                    <input type="radio" value="0" name="Estatus" id="Estatus" required/> Sin información
                                    <br>
                                    <input type="radio" value="1" name="Estatus" id="Estatus" required/> Información incompleta
                                    <br>
                                    <input type="radio" value="2" name="Estatus" id="Estatus" required/> Información completa 
                                    <br>
                                    <input type="radio" value="3" name="Estatus" id="Estatus" required/> Generando balance contable
                                    <br>
                                    <input type="radio" value="4" name="Estatus" id="Estatus" required/> Calculando los impuestos
                                    <br>
                                    <input type="radio" value="5" name="Estatus" id="Estatus" required/> Integrando los montos a declarar
                                    <br>
                                    <input type="radio" value="6" name="Estatus" id="Estatus" required/> Notificado el monto a declarar
                                    <br>
                                    <input type="radio" value="8" name="Estatus" id="Estatus" required/> Impuestos pagados
                                    <br>
                                    <input type="radio" value="7" name="Estatus" id="Estatus" required/> Impuestos declarados
                                    <br>
                                    <input type="radio" value="9" name="Estatus" id="Estatus" required/> Inactivo
                                    <br>
                                </blockquote>   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12">      
                                <button type="submit" class="btn btn-lg btn-primary btn-block" id="user" name="user" value="<?php echo $indice; ?>" >Cambiar Estatus</button>

                            </div>
                            <div class="col-md-10 col-xs-12" id="Oculto">

                            </div>
                        </td>
                    </tr>
                </table>   


            </td>
        </tr>
    </table>
</form>



<?php echo form_open_multipart('controladorCalculo/xImpuestos'); ?>  
<table width="100%" border="1" bordercolor="#FF6633">
    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td bgcolor="#ff6600">
                        <div class="col-xs-12 col-sm-12">
                            <label for="Impuestos" class="control-label" style="color:#FFF">Impuestos a calcular</label><br>		
                        </div>
                    </td>
                </tr>     
                <tr>
                    <td>
                        <div class="col-xs-12 col-sm-12">
                            <blockquote>
                                <input type="radio" value="1" name="Impuestos" id="Impuestos" required/> Impuesto Sobre la Renta ISR
                                <br>
                                <input type="radio" value="2" name="Impuestos" id="Impuestos" required/> Impuesto al Valor Agregado IVA
                                <br>
                                <input type="radio" value="3" name="Impuestos" id="Impuestos" required/> Impuesto Cedular 
                                <br>
                                <input type="radio" value="4" name="Impuestos" id="Impuestos" required/> Impuesto sobre Nómina
                                <br>
                                <input type="radio" value="5" name="Impuestos" id="Impuestos" required/> Impuesto sobre Hospedaje
                                <br>
                            </blockquote>   
                        </div>
                    </td>
                </tr> 

                <tr>
                    <td height="27" colspan="2">
                        <div class="col-md-2 col-xs-12" align="left">
                            <button type="submit" id="Calcular" name="Calcular" class="btn btn-lg btn-primary btn-block" value="<?php echo $indice; ?>">Calcular</button>
                        </div>
                        <div class="col-md-10 col-xs-12" id="Oculto2">

                        </div>
                    </td>
                </tr>
            </table>   


        </td>
    </tr>
</table>
</form>

<?php echo form_open_multipart('controladorCalculo/xIDInformes'); ?>  
<table width="100%" border="1" bordercolor="#FF6633">
    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td bgcolor="#3a545f">
                        <div class="col-xs-12 col-sm-12">
                            <label for="Impuestos" class="control-label" style="color:#FFF">Informes sobre la empresa</label><br>		
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <div class="col-xs-12 col-sm-12">
                            <blockquote>
                                <?php /* <br>
                                  <input type="radio" value="1" name="IDInforme" id="IDInforme" required/> Trámites contables
                                  <br>
                                 */ ?>
                                <input type="radio" value="2" name="IDInforme" id="IDInforme" required/> Trámites de Cálculo Fiscal
                                <br>
                            </blockquote>   
                        </div>
                    </td>
                </tr> 

                <tr>
                    <td height="27" colspan="2">
                        <div class="col-md-2 col-xs-12" align="left">
                            <button type="submit" id="Calcular" name="Calcular" class="btn btn-lg btn-primary btn-block" value="<?php echo $indice; ?>">Calcular</button>
                        </div>
                        <div class="col-md-10 col-xs-12" id="Oculto3">

                        </div>
                    </td>
                </tr>
            </table>   
        </td>
    </tr>
</table>
</form>




<?php echo form_open_multipart('controladorCalculo/xIDInformes'); ?>  
<table width="100%" border="1" bordercolor="#FF6633">
    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td bgcolor="#ff6600">
                        <div class="col-xs-12 col-sm-12">
                            <label for="Impuestos" class="control-label" style="color:#FFF">Notificar o borrar</label><br>		
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td height="27" colspan="2">
                        <div class="col-md-2 col-xs-12" align="left">

                        </div>
                        <div class="col-md-2 col-xs-12" align="left">
                            <button type="submit" id="user" name="user" class="btn btn-lg btn-primary btn-block" value="<?php echo $indice; ?>">Notificar</button>
                        </div>
                        <div class="col-md-2 col-xs-12" align="left">
                        </div>
                        <div class="col-md-2 col-xs-12" align="left">
                        </div>
                        <div class="col-md-2 col-xs-12" align="left">   
                            <button type="button" id="regresar" name="regresar" class="btn btn-lg btn-primary btn-block"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=BorrarPP&i=<?php echo $indice ?>'">Borrar</button>
                        </div>
                        <div class="col-md-2 col-xs-12" align="left">
                        </div>
                    </td>
                </tr>
            </table>   
        </td>
    </tr>
</table>
</form>

<?php echo form_open_multipart('controlador/Regresar'); ?> 
<table width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">  
            <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>
<script>
    cli.config.Informacion();
    cli.config.Oculto();
</script>

