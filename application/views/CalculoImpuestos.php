<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top"> 

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center" data-toggle="collapse" >MODULO DE C&Aacute;LCULO DE IMPUESTOS</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart(base_url() . 'index.php/controladorCalculo/CambiarEstatus'); ?> 
                <fieldset>

                    <div class="form-group col-xs-12 col-sm-12">
                        <label for="Nombre_cliente" class="control-label">NOMBRE DE LA EMPRESA:</label><br>		
                    </div> 
                    <div class="form-group col-md-12 col-xs-12" id="ID_cliente2">
                        <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                </fieldset>
                <fieldset class="">
                    <div class="well form-group col-xs-12 col-sm-12" id="Informacion">
                        </br>		
                    </div>


                    <div class="col-xs-12 col-sm-12" align="center">
                        <br><label class="control-label"><h2>ASIGNACI&Oacute;N DE ESTATUS</h2></label>	
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <hr class="">
                    </div> 
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
                    <div class="col-md-2 col-xs-12">      
                        <!--<button type="submit" class="btn btn-lg btn-primary btn-block disabled" id="user" name="user" value="<?php echo $indice; ?>">-->
                        <button type="submit" class="btn btn-lg btn-primary btn-block disabled" id="btnModificarEstatus" name="user" value="<?php echo $indice; ?>">
                            MODIFICAR</button>

                    </div>
                    <div class="col-md-10 col-xs-12" id="Oculto">

                    </div>

                </fieldset>
                </form>
                <?php echo form_open_multipart(base_url() . 'index.php/controladorCalculo/Impuestos'); ?>  
                <fieldset class="">
                    <div class="col-xs-12 col-sm-12" align="center">
                        <br><label class="control-label"><h2>IMPUESTOS A CALCULAR</h2></label>	
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <hr class="">
                    </div> 

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

                    <div class="col-md-2 col-xs-12" align="left">
                        <button type="submit" id="btnCalcularImpuestos" name="user" class="btn btn-lg btn-primary btn-block disabled" value="<?php echo $indice; ?>">
                            Calcular</button>
                    </div>
                    <div class="col-md-10 col-xs-12" id="Oculto2">

                    </div>

                </fieldset>
                </form>
                <?php echo form_open_multipart(base_url() . 'index.php/Reportes/IDInformes'); ?>  
                <fieldset class="">

                    <div class="col-xs-12 col-sm-12" align="center">
                        <br><label class="control-label"><h2>INFORMES SOBRE LA EMPRESA</h2></label>	
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <hr class="">
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <blockquote>
                            <input type="radio" value="2" name="IDInforme" id="IDInforme" required/> Trámites de Cálculo Fiscal
                            <br>
                        </blockquote>   
                    </div> 
                    <div class="col-md-2 col-xs-12" align="left">
                        <button type="submit" id="btnConsultarInformes" name="user" class="btn btn-lg btn-primary btn-block disabled" value="<?php echo $indice; ?>">Consultar</button>
                    </div>
                    <div class="col-md-10 col-xs-12" id="Oculto3">

                    </div>
                </fieldset>
                </form>
            </div>


        </div>
        <div class="panel panel-danger ">
            <div class="panel-heading">
                <h3 class="panel-title text-center">NOTIFICAR O BORRAR</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart(base_url() . 'index.php/controladorCalculo/Notificar'); ?> 
                <div class="col-md-2 col-xs-12" align="left">

                </div>
                <div class="col-md-2 col-xs-12" align="left">
                    <button type="submit" id="btnNotificar" name="user" class="btn btn-lg btn-primary btn-block disabled" value="<?php echo $indice; ?>">Notificar</button>
                </div>
                <div class="col-md-2 col-xs-12" align="left">
                </div>
                <div class="col-md-2 col-xs-12" align="left">
                </div>
                <div class="col-md-2 col-xs-12" align="left">   
                    <button type="button" id="btnBorrar" name="regresar" class="btn btn-lg btn-primary btn-block disabled"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=BorrarPP&i=<?php echo $indice ?>'">Borrar</button>
                </div>
                <div class="col-md-2 col-xs-12" id="Oculto4">

                </div>
                </form>
            </div>
        </div>  

    </div> 
    <?php echo form_open_multipart(base_url() . 'index.php/controlador/Regresar'); ?> 
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
    var master_url = base_url +'index.php/ctrl'
</script>

