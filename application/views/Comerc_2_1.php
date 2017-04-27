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

<?php echo form_open_multipart('controlador/RegistroVivi'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro de vivienda vendida</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Cliente</label><br>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Cliente" name="Cliente" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Clientes as $Clientes1) { ?> 
                                            <option value="<?php echo $Clientes1->ID; ?>"><?php echo $Clientes1->Ncliente; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12" id="RCliente">

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
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Desarrollo inmobiliario:</label><br>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Ndesarrollo" name="Ndesarrollo" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                            <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12"  id="Tipo_vivienda" align="right">
                                <div class="col-md-3 col-xs-12">
                                    <label for="Cliente" class="control-label">Modelo de vivienda:</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Vivienda" name="Vivienda" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Modelo as $Modelo1) { ?> 
                                            <option value="<?php echo $Modelo1->ID; ?>"><?php echo $Modelo1->Modelo; ?></option>
<?php } ?>
                                    </select>
                                    </br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Prototipo de vivienda:</label><br>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Prototipo" name="Prototipo" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Prototipo as $Prototipo1) { ?> 
                                            <option value="<?php echo $Prototipo1->ID; ?>"><?php echo $Prototipo1->Prototipo; ?></option>
<?php } ?>
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
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Lote:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Lote" id="Lote" required>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Esquina:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input type="radio" value="Sí" name="Esquina" id="Esquina" required/>
                                    Sí
                                    <input type="radio" value="No" name="Esquina" id="Esquina" required/>
                                    No		
                                </div>		
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Terreno excedente:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input type="radio" value="Sí" name="Excedente" id="Excedente" required/>
                                    Sí
                                    <input type="radio" value="No" name="Excedente" id="Excedente" required/>
                                    No		
                                </div>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Número de vivienda:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Nvivienda" id="Nvivienda" required>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Manzana:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Manzana" id="Manzana" required>		
                                </div>		
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Calle:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NCalle" id="NCalle" required>	
                                </div>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Superficie del terreno excedente:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Sexcedente" id="Sexcedente" required>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Precio del terreno excedente:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pexcedente" id="Pexcedente" required>		
                                </div>		
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Precio total de la vivienda:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pvivienda" id="Pvivienda" required>	
                                </div>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Cantidad que entrega para apartar vivienda:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Capartado" id="Capartado" required>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Forma de entrega de apartado:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Fapartado" name="Fapartado" >
                                        <option value="0">Selecciona</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Deposito">Deposito</option>
                                        <option value="Transferencia">Transferencia</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Especie">Especie</option>
                                        <option value="Contrarecibos">Contrarecibos</option>
                                    </select>		
                                </div>		
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Referencia:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Referencia" id="Referencia" required>	
                                </div>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Fecha de entrega del apartado:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="Fechaapartado" id="datepicker" required>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Cliente que entrega el apartado:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Clientapartado" id="Clientapartado" required>		
                                </div>		
                            </div>


                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Vivienda equipada y precio por equipamiento</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Equipamiento" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="PEquipamiento" id="PEquipamiento">
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Personal de la corporación que recibe el apartado:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Papartado" name="Papartado" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                            <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
<?php } ?>
                                    </select>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Fecha de termino para traer la documentación para trámite de crédito de compraventa:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>"class="form-control" type="text" name="FtCredito" id="datepicker2" required>		
                                </div>		
                            </div>
                            <div class="col-md-4 col-xs-12">
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

<?php echo form_open_multipart('controlador/xxx'); ?>     
<table width="100%">    
    <tr>
        <td>
            <div class="col-md-12 col-xs-12">
                <div class="col-md-10 col-xs-4" id="ID_cliente" align="left">
                </div>
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
                </div>
            </div>
        </td>
    </tr>
</table> 
</form> 
</div>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
    cli.config.RCliente();
    cli.config.Proyecto();
</script>

