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

<?php echo form_open_multipart('controlador/ClienteTrabajo'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos laborales</strong>
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Ocupación</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Ocupacion" name="Ocupacion" >
                                        <option value="">Selecciona</option>
                                        <option value="Propietario">Propietario</option>
                                        <option value="Independiente">Trabajador independiente</option>
                                        <option value="Empleado">Empleado</option>
                                        <option value="Becario">Becario</option>
                                        <option value="AmadeCasa">Ama de casa</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-3 col-sm-3">
                                <label for="1" class="control-label">Nombre del lugar de trabajo:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="2" class="control-label">Registro patronal:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Trabajo" id="Trabajo" required>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Registro" id="Registro" required>
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Dirección del lugar de trabajo
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
                            <div class="col-xs-3 col-sm-3">
                                <label for="Calle" class="control-label">Calle:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="Numero" class="control-label">No.:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="Colonia" class="control-label">Colonia:</label><br>		
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <label for="CP" class="control-label">CP:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CalleT" id="CalleT" required>	
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NoT" id="NoT" required>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ColoniaT" id="ColoniaT" required>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CPT" id="CPT" required>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pais" class="control-label">País:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Estado" class="control-label">Estado:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Ciudad" class="control-label">Ciudad:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4" id="Pais2">
                                <select class="form-control" id="Pais" name="Pais"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Pais as $Pais1) { ?> 
                                        <option value="<?php echo $Pais1->id_pais; ?>"><?php echo $Pais1->dsc_pais; ?></option>
<?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-4 col-sm-4" id="Estado2">
                                <select class="form-control" id="Estado" name="Estado"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estado as $Estado1) { ?> 
                                        <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
<?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-4 col-sm-4" id="Ciudad2">
                                <select class="form-control" id="Ciudad" name="Ciudad"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                        <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
<?php } ?>
                                </select>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada" class="control-label">Teléfono de oficina:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono" class="control-label">Teléfono móvil:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Pagina" class="control-label">Correo:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TelFijoT" id="TelFijoT" required>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TelT" id="TelT" required>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  class="form-control" type="mail" name="CorreoT" id="CorreoT">
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

