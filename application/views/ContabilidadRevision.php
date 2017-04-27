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
<?php echo form_open_multipart('controlador/ContabilidadRevision'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Revisión de expediente contable  de la empresa</strong>
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
                                    <label for="Cliente" class="control-label">Seleccionar empresa:</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Cliente" name="Cliente"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                            <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
<?php } ?>
                                    </select>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-12">
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="NombreActividad" class="control-label">Mes</label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Mes" name="Mes"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>	
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Documento
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Póliza de ingresos</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="Poliza" id="Poliza" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="Poliza" id="Poliza" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesPoliza" id="ObservacionesPoliza">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Comprobantes de ingresos</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="ComprobanteI" id="ComprobanteI" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="ComprobanteI" id="ComprobanteI" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesComprobantes" id="ObservacionesComprobantes">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Póliza de egresos</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="PolizaEgreso" id="PolizaEgreso" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="PolizaEgreso" id="PolizaEgreso" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesPolizaEgreso" id="ObservacionesPolizaEgreso">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Comprobante de egresos</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="ComprobanteE" id="ComprobanteE" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="ComprobanteE" id="ComprobanteE" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesComprobante2" id="ObservacionesComprobante2">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Póliza de diario</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="PolizaDiario" id="PolizaDiario" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="PolizaDiario" id="PolizaDiario" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesPolizaDiario" id="ObservacionesPolizaDiario">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Estados de cuenta bancarios</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="Estados" id="Estados" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="Estados" id="Estados" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesEstados" id="ObservacionesEstados">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Pagos provisionales SAT</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="SAT" id="SAT" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="SAT" id="SAT" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesSAT" id="ObservacionesSAT">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Pago de cuotas</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="Cuotas" id="Cuotas" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="Cuotas" id="Cuotas" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesCuotas" id="ObservacionesCuotas">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Pago de cuotas IMSS</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="IMSS" id="IMSS" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="IMSS" id="IMSS" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesIMSS" id="ObservacionesIMSS">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Pago de cuotas INFONAVIT</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="INFONAVIT" id="INFONAVIT" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="INFONAVIT" id="INFONAVIT" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesINFONAVIT" id="ObservacionesINFONAVIT">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12" style="background-color:#b8cce4; height:35px">
                                    <label for="Documento" class="control-label">Nómina del mes aplicable</label>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px; color:#000000" align="center">
                                    Recibido
                                    <input type="radio" value="Recibido" name="Nomina" id="Nomina" required/>
                                    No recibido
                                    <input type="radio" value="No_Recibido" name="Nomina" id="Nomina" required/>
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#ffffff; height:35px">
                                    <input  style="text-transform:uppercase; background-color:#CCC" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesNomina" id="ObservacionesNomina">
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
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=4&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>



