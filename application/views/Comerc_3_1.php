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

<?php echo form_open_multipart('controlador/RegistroExped'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Revisión de expediente para compraventa de inmueble</strong>
<?php foreach ($Clientes as $Clientes1) {
    
} ?> 
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
                                    Fecha de revisión de expediente
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <input value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="Frevision" id="datepicker" required>
                                    </br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    Forma de adquirir la vivienda
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Fadquirir" name="Fadquirir" >
                                        <option value="0">Selecciona</option>
                                        <option value="Contado">Contado</option>
                                        <option value="Crédito">Crédito</option>
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
                                    <label for="Cliente" class="control-label">Institución donde se tramitará el crédito </label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Creditos" name="Creditos" >
                                        <option value="0">Selecciona</option>
<?php foreach ($Creditos as $Creditos1) { ?> 
                                            <option value="<?php echo $Creditos1->id_creditos; ?>"><?php echo $Creditos1->dsc_creditos; ?></option>
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
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Monto de enganche:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Enganche" id="Enganche" required>		
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Monto de crédito:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Mcredito" id="Mcredito" required>		
                                </div>		
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="Calle" class="control-label">Fecha de solicitud de crédito hipotecario:</label><br>		
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="form-control" type="text" name="Fsolicitudcredito" id="datepicker2" value="<?php echo date("d/m/y") ?>" required>		
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
                                Documentos del expediente
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Promesa de compraventa</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Promesa" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TPromesa" id="TPromesa">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Comprobante de apartado de vivienda</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Comprobante" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TComprobante" id="TComprobante">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Acta de nacimiento</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Acta" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TActa" id="TActa">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="4" class="control-label">CURP</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CCURP" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tcurp" id="Tcurp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="5" class="control-label">Identificación oficial INE</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="INE" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tine" id="Tine">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="6" class="control-label">Estados de cuenta</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="EdoCuenta" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TEdoCuenta" id="TEdoCuenta">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="7" class="control-label">Recibos de honorarios</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Recibos" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TRecibos" id="TRecibos">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="8" class="control-label">Comprobante de nómina</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Cnomina" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCnomina" id="TCnomina">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="9" class="control-label">Declaraciones de impuestos SAT</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Declaraciones" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TDeclaraciones" id="TDeclaraciones">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="10" class="control-label">Reporte de aportaciones patronales o comprobante de ingresos</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Reporte" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TReporte" id="TReporte">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="11" class="control-label">Solicitud de crédito</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Solicitud" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TSolicitud" id="TSolicitud">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="11" class="control-label">Otros</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Otros2" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TOtros2" id="TOtros2">
                                    </div>
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
                                Documentos del expediente opcionales
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="12" class="control-label">Precalificación INFONAVIT</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Precalificacion" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TPrecalificacion" id="TPrecalificacion">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="13" class="control-label">Contrato de compraventa</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Contrato" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TContrato" id="TContrato">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="14" class="control-label">Carta laboral</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Cartalaboral" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCartalaboral" id="TCartalaboral">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="15" class="control-label">Formato de sorteo BIM</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="SorteoBIM" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TSorteoBIM" id="TSorteoBIM">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="16" class="control-label">Formato de avaluo BIM</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="FormatoBIM" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TFormatoBIM" id="TFormatoBIM">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="17" class="control-label">Formato carta autorización BIM</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="AutorizacionBIM" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TAutorizacionBIM" id="TAutorizacionBIM">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="18" class="control-label">Formato avaluo bendit</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="FormatoBendit" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TFormatoBendit" id="TFormatoBendit">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="19" class="control-label">Avisos de privacidad</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="AvisosPriv" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TAvisosPriv" id="TAvisosPriv">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="20" class="control-label">Formato de inicio de operación</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="FormatoInicio" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TFormatoInicio" id="TFormatoInicio">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="21" class="control-label">Constancia de taller de orientación, saber para decidir</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Constancia" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TConstancia" id="TConstancia">
                                    </div>
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
                                Documentos de la empresa
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="22" class="control-label">Acta de nacimiento A</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="ActaNacA" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TActaNacA" id="TActaNacA">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="23" class="control-label">Acta de nacimiento B</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="ActaNacB" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TActaNacB" id="TActaNacB">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="24" class="control-label">Acta de matrimonio</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="ActaMatrimonio" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TActaMatrimonio" id="TActaMatrimonio">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="25" class="control-label">RFC A</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="RFCA" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TRFCA" id="TRFCA">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="26" class="control-label">RFC B</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="RFCB" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TRFCB" id="TRFCB">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="27" class="control-label">Copias de identificación oficial A</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CopiaIdenta" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCopiaIdenta" id="TCopiaIdenta">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="28" class="control-label">Copias de identificación oficial B</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CopiaIdentb" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCopiaIdentb" id="TCopiaIdentb">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="29" class="control-label">CURP A</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CURPA" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCURPA" id="TCURPA">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="30" class="control-label">CURP B</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CURPB" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCURPB" id="TCURPB">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="31" class="control-label">Cuenta maestra</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CuentaMtra" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCuentaMtra" id="TCuentaMtra">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="32" class="control-label">Cuenta CLABE</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CLABE" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCLABE" id="TCLABE">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="33" class="control-label">Acta constitutiva</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Acta2" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tacta2" id="Tacta2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="34" class="control-label">Declaración anual</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Declaracion" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TDeclaracion" id="TDeclaracion">
                                    </div>
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
                                Documentos acerca de la vivienda
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="35" class="control-label">Plano arquitectura</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Plano" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TPlano" id="TPlano">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="36" class="control-label">Plano de sembrado indicando el lote</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Sembrado" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TSembrado" id="TSembrado">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="37" class="control-label">Certificado libertad de gravamen</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Certificado" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCertificado" id="TCertificado">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="38" class="control-label">Pago del predial</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Pago" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TPago" id="TPago">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="39" class="control-label">Copia de las escrituras</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="CopiaEscrituras" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCopiaEscrituras" id="TCopiaEscrituras">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="40" class="control-label">Copia del régimen en condominio</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Condominio" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TCondominio" id="TCondominio">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="41" class="control-label">Licencia de construcción</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Construccion" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TConstruccion" id="TConstruccion">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="42" class="control-label">Terminación de obra</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Obra" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TObra" id="TObra">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="43" class="control-label">Alineamiento y número oficial</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Alineamiento" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TAlineamiento" id="TAlineamiento">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="44" class="control-label">Refrendo</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Refrendo" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TRefrendo" id="TRefrendo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="45" class="control-label">Anexos</label><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-2 col-xs-2">
                                        <input name="Anexos" type="checkbox" value="SÍ"/>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="TAnexos" id="TAnexos">
                                    </div>
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

