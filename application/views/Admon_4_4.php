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

<?php echo form_open_multipart('controlador/IngresoCajaEfectivo'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Control de caja de efectivo</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Registro de ingreso a caja de efectivo</strong>
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
                                    Fecha:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input   value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="Fecha" id="datepicker" required="required" >
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
                                <div class="col-md-3 col-xs-6">
                                    Proveedor o persona que paga:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Fuente" id="Fuente" required="required" >
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
                                <div class="col-md-3 col-xs-6">
                                    Concepto de pago:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Concepto" id="Concepto" required="required" >
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Monto:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input class="form-control" type="number" name="Monto" id="Monto" step="0.01" required="required" >
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
                                <div class="col-md-3 col-xs-6">
                                    Unidad de negocio:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Unidad" id="Unidad">
                                    </br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    Personal:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Personal" id="Personal">
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
                                    Competencia del efectivo ingresado:
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input name="Competencia" id="Competencia" type="radio" value="Unidad de Negocio"/>Unidad de negocio
                                    <input name="Competencia" id="Competencia" type="radio" value="Personal"/>Personal
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
                                    Nombre de quien recibe el efectivo:
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" id="Receptor" name="Receptor">
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=82&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>


