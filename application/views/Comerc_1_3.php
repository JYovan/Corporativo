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

<?php echo form_open_multipart('controlador/ClienteSocioEco'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos socioeconómicos</strong>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Cliente</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
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
                            <div class="col-md-6 col-xs-12">
                                <label for="Colonia" class="control-label">Nombre del cónyuge, concubina o pareja con quien vive</label><br>		
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="CP" class="control-label">Dependientes económicos</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Conyuge" id="Conyuge" required>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control" id="Dependientes" name="Dependientes" >
                                    <option value="">Selecciona</option>
                                    <option value="Padres">Padres</option>
                                    <option value="Hijos">Hijos</option>
                                    <option value="Esposo">Esposo/a</option>
                                    <option value="Esposa-Hijos">Esposo/esposa e hijos</option>
                                    <option value="Pareja-Hijos">Pareja/Hijos</option>
                                    <option value="Parientes">Parientes</option>
                                    <option value="Ninguno">Ninguno</option>
                                </select>
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
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">¿Cuenta con más de un empleo?</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input type="radio" value="Sí" name="Empleos" id="Empleos" required/>
                                Sí
                                <input type="radio" value="No" name="Empleos" id="Empleos" required/>
                                No	
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">Ingresos Mensuales</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="IngresosM" id="IngresosM" >
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
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">La casa en donde vive es propia</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input type="radio" value="Sí" name="CasaPropia" id="CasaPropia" required/>
                                Sí
                                <input type="radio" value="No" name="CasaPropia" id="CasaPropia" required/>
                                No	
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
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">Valor aproximado de la casa (De ser propia)</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="ValorCasa" id="ValorCasa" required>
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
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">¿Paga renta?</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input type="radio" value="Sí" name="Renta" id="Renta" required/>
                                Sí
                                <input type="radio" value="No" name="Renta" id="Renta" required/>
                                No	
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">Monto de la renta mensual</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="MontoRenta" id="MontoRenta" >
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
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">Cuenta con automovil propio</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input type="radio" value="Sí" name="AutoPropio" id="AutoPropio" required/>
                                Sí
                                <input type="radio" value="No" name="AutoPropio" id="AutoPropio" required/>
                                No	
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">Número de automoviles</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="NumAutos" id="NumAutos" required>
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
                            <div class="col-md-3 col-xs-12">
                                <label for="Calle" class="control-label">A cuanto ascienden sus gastos mensuales</label><br>		
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="Gastos" id="Gastos" required>
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
                                    <label for="Calle" class="control-label">Tiene deudas</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input type="radio" value="Sí" name="Deudas" id="Deudas" required/>
                                    Sí
                                    <input type="radio" value="No" name="Deudas" id="Deudas" required/>
                                    No	
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Monto de la deuda</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="MontoDeudas" id="MontoDeudas" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Cuanto abona mensualmente</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="number" name="AbonoMensual" id="AbonoMensual" required>
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
</script>

