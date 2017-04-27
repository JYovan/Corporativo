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

<?php echo form_open_multipart('controlador/CompraVenta'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Datos de Compraventa de Inmueble para Edificación</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Selección de inmueble</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-4 col-xs-12">
                                    <label for="1" class="control-label">Inmueble</label><br>
                                </div>  
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Inmueble" name="Inmueble" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Inmueble as $Inmueble1) { ?> 
                                            <option value="<?php echo $Inmueble1->ID; ?>"><?php echo $Inmueble1->Ubicacion; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Notario Público donde consta el contrato de compraventa del inmueble</strong>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre del Notario Público</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Notario2" id="Notario2" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Notario</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Nnotario2" id="Nnotario2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Partido de competencia</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Partido2" id="Partido2" >
                                </div>
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Nombre del comprador</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Comprador" name="Comprador"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                            <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
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
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Fecha de la compraventa</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo date("d/m/Y") ?>" type="text" class="form-control" name="FechaCompraVenta" id="datepicker" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Monto de la operación</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" step="0.01" class="form-control" name="Monto" id="Monto" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Modalidad de la Compraventa</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Modalidad" name="Modalidad"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Contado">Contado</option>
                                        <option value="Parcialidades">Parcialidades</option>
                                        <option value="Otras">Otras</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Forma de pago</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="FormaPago" name="FormaPago"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Transferencia">Transferencia</option>
                                        <option value="Cheque">Cheque</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">  
                                </br>
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-6 col-xs-12">
                                    <label for="1" class="control-label">Gastos de Impuestos erogados</label><br>
                                </div>  
                                <div class="col-md-6 col-xs-12">
                                    <input  type="number" step="0.01" class="form-control" name="Impuestos" id="Impuestos" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-6 col-xs-12">
                                    <label for="1" class="control-label">Gastos Registrales</label><br>
                                </div>  
                                <div class="col-md-6 col-xs-12">
                                    <input type="number"step="0.01" class="form-control" name="GastosRegistrales" id="GastosRegistrales" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-6 col-xs-12">
                                    <label for="1" class="control-label">Gastos Notariales</label><br>
                                </div>  
                                <div class="col-md-6 col-xs-12">
                                    <input  type="number"step="0.01" class="form-control" name="GastosNotariales" id="GastosNotariales" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	
                                <div class="col-md-6 col-xs-12">
                                    <label for="1" class="control-label">Fecha</label><br>
                                </div>  
                                <div class="col-md-6 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="FechaLugarEntrega" id="datepicker2" value="<?php echo date("d/m/Y") ?>" required>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">  
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
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

