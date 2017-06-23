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

    <?php echo form_open_multipart('controlador/ClienteReferencia'); ?>
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos de referencias del cliente</strong>
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
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Primer Referencia
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-3 col-xs-12">
                                <label for="Colonia" class="control-label">Nombre completo</label><br>
                            </div>
                            <div class="col-md-9 col-xs-12">
                                <input  class="form-control" type="text" name="Referencia1" id="Referencia1" required>
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
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Profesión u oficio</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Profesion1" id="Profesion1" required>
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
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Lugar de trabajo</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Trabajo1" id="Trabajo1" required>
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
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Teléfono de casa</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel1" id="Tel1" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Teléfono móvil</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Telm1" id="Telm1" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Correo electrónico</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Correo1" id="Correo1" required>
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
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Segunda Referencia
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-3 col-xs-12">
                                <label for="Colonia" class="control-label">Nombre completo</label><br>
                            </div>
                            <div class="col-md-9 col-xs-12">
                                <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Referencia2" id="Refrencia2" required>
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
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Profesión u oficio</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Profesion2" id="Profesion2" required>
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
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Lugar de trabajo</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Trabajo2" id="Trabajo2" required>
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
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Teléfono de casa</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel2" id="Tel2" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Teléfono móvil</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Telm2" id="Telm2" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-6 col-xs-12">
                                    <label for="Colonia" class="control-label">Correo electrónico</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Correo2" id="Correo2" required>
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

