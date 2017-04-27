<?php
$indice = $_SESSION["ID"];
?>
<div class="row"> 
    <div class="col-md-12 margin-15-top">
        <?php echo form_open_multipart(base_url() . 'index.php/controlador/do_upload'); ?> 
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">MÓDULO DE DOCUMENTACIÓN Y TRÁMITES</h3>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="col-xs-12 col-sm-12">
                        <label for="Tipo">Tipo:</label>
                        <select class="form-control" id="Tipo" name="Tipo"  required>
                            <option value=""></option>
                            <option value="ATENTA NOTA">ATENTA NOTA</option>
                            <option value="AVALÚOS">AVALÚOS</option>
                            <option value="CARTA">CARTA</option>
                            <option value="CARTA DE DISPERSIÓN DE RECURSOS">CARTA DE DISPERSIÓN DE RECURSOS</option>
                            <option value="CARTA DE TRANSMISIÓN DE VIVIENDAS">CARTA DE TRANSMISIÓN DE VIVIENDAS</option>
                            <option value="CIRCULAR">CIRCULAR</option>
                            <option value="COMPROBANTE DE GASTOS">COMPROBANTE DE GASTOS</option>
                            <option value="COMPROBANTE DE INGRESOS">COMPROBANTE DE INGRESOS</option>
                            <option value="COMPROBANTE DE PAGO">COMPROBANTE DE PAGO</option>
                            <option value="COMPROBANTES DE PAGO DE ARRENDAMIENTOS">COMPROBANTES DE PAGO DE ARRENDAMIENTOS</option>
                            <option value="COMPROBANTES DE PAGO DE INMUEBLES">COMPROBANTES DE PAGO DE INMUEBLES</option>
                            <option value="CONTRATO DE COMPRAVENTA">CONTRATO DE COMPRAVENTA</option>
                            <option value="CORTE DE CAJA DE UNIDAD DE NEGOCIO">CORTE DE CAJA DE UNIDAD DE NEGOCIO</option>
                            <option value="COTIZACIONES">COTIZACIONES</option>
                            <option value="CURRICULUM">CURRICULUM</option>
                            <option value="DOCUMENTO DE QUEJA">DOCUMENTO DE QUEJA</option>
                            <option value="ESCRITURA CONSTITUTIVA">ESCRITURA CONSTITUTIVA</option>
                            <option value="ESTADO DE CUENTA">ESTADO DE CUENTA</option>
                            <option value="ESTADO DE CUENTA DE SERVICIO DE AGUA POTABLE">ESTADO DE CUENTA DE SERVICIO DE AGUA POTABLE</option>
                            <option value="ESTADO DE CUENTA DE SERVICIO ELÉCTRICO">ESTADO DE CUENTA DE SERVICIO ELÉCTRICO</option>
                            <option value="ESTADO DE CUENTA DE TELÉFONO">ESTADO DE CUENTA DE TELÉFONO</option>
                            <option value="EXPEDIENTE DE TRAMITE DE PAGO">EXPEDIENTE DE TRAMITE DE PAGO</option>
                            <option value="FACTURAS PARA TRAMITE DE PAGO">FACTURAS PARA TRAMITE DE PAGO</option>
                            <option value="INVITACIÓN">INVITACIÓN</option>
                            <option value="NOTIFICACIONES DE PROCESO JURÍDICO">NOTIFICACIONES DE PROCESO JURÍDICO</option>
                            <option value="OFICIO">OFICIO</option>
                            <option value="PAGARE">PAGARE</option>
                            <option value="PAGO DE RENTAS ">PAGO DE RENTAS </option>
                            <option value="PLANOS">PLANOS</option>
                            <option value="PRESENTACIÓN DE SERVICIOS DE EMPRESAS Y PROFESIONISTAS">PRESENTACIÓN DE SERVICIOS DE EMPRESAS Y PROFESIONISTAS</option>
                            <option value="REQUERIMIENTO DE PAGO DE AUTORIDADES">REQUERIMIENTO DE PAGO DE AUTORIDADES</option>
                            <option value="REQUERIMIENTO DE PAGO DE IMPUESTO PREDIAL">REQUERIMIENTO DE PAGO DE IMPUESTO PREDIAL</option>
                            <option value="OTRO">OTRO</option>

                            <?php // foreach ($RefTipo as $RefTipo1) { ?> 
                                <!--<option value="<?php // echo $RefTipo1->id_tipo;                            ?>"><?php // echo $RefTipo1->dsc_tipo;                            ?></option>-->
                            <?php // } ?>
                        </select>
                    </div>
                    <div class="col-md-6"> 
                        <label for="Numero" class="control-label">Número:</label> 
                        <?php
                        $N = 0;
                        foreach ($RefTipo2 as $RefTipo1) {
                            $N = $RefTipo1->ID;
                        }
                        if (empty($RefTipo1)) {
                            $N = 0;
                        }
                        ?>
                        <input  style="text-transform:uppercase" value="DC-<?php echo str_pad($N + 1, 6, "0", STR_PAD_LEFT); ?>-<?php echo date("Y"); ?>" class="form-control" type="text" name="Numero" id="Numero" required>	
                    </div> 

                    <div class="col-md-6 text-center">
                        <label class="control-label"></label> 
                        <input name="Sinnumero" type="checkbox" value="SÍ" class="checkbox form-control"/>
                        <label for="Sinnumero" class="control-label ">Sin número</label> 
                    </div>
                    <div class="col-md-12">
                        <label for="Categoria" class="control-label">Categoría:</label> 
                        <select class="form-control" id="Categoria" name="Categoria"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($RefCategoria as $RefCategoria1) { ?> 
                                <option value="<?php echo $RefCategoria1->id_categoria; ?>"><?php echo $RefCategoria1->dsc_categoria; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-12 margin-15-top">
                        <div class="col-md-3 col-xs-12" align="right">
                            <label for="CopiConocimiento" class="control-label">Copia de conocimiento:</label>
                        </div>
                        <div class="col-md-3 col-xs-12" align="center">
                            <input type="radio" value="Sí" name="CopiConocimiento" class="form-control" id="CopiConocimiento" required/>
                            SI<br>	 
                        </div>
                        <div class="col-md-3 col-xs-12" align="center">
                            <input type="radio" value="No" name="CopiConocimiento" class="form-control"  id="CopiConocimiento" required/>
                            NO<br>
                        </div>
                    </div>     
                    <div class="col-xs-12 col-sm-12"> 
                        <label for="Asunto" class="control-label">Asunto:</label> 
                        <textarea id="Asunto" name="Asunto" rows="5" cols="70%" class="form-control"></textarea> 		
                    </div>

                    <div class="col-xs-12 col-sm-12  margin-15-top">
                        <div class="col-md-3 col-xs-4" align="right">
                            <label for="Prioridad" class="control-label">Prioridad:</label><br>		
                        </div>
                        <div class="col-md-3 col-xs-4" align="center">
                            <input type="radio" value="Normal" name="Prioridad" id="Prioridad" required  class="form-control"/>
                            NORMAL<br>	
                        </div>
                        <div class="col-md-3 col-xs-4" align="center">
                            <input type="radio" value="Urgente" name="Prioridad" id="Prioridad" required class="form-control"/>
                            URGENTE<br>
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12"> 
                        <label for="Fecha" class="control-label">Fecha del documento:</label> 
                        <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaDocumento" id="datepicker" required>	
                    </div>
                    <div class="col-xs-12 col-sm-12 margin-15-top-bottom text-center" >
                        <strong >REMITENTE EXTERNO</strong>
                        <HR>
                    </div>

                    <div class="col-xs-12 col-sm-12"> 
                        <label for="NombreExterno" class="control-label">Nombre:</label> 
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="NombreExterno" id="NombreExterno" >		
                    </div>
                    <div class="col-xs-12 col-sm-12 margin-15-top-bottom">
                        <div class="col-md-2 col-xs-6" align="right">
                            <label for="RemitenteExterno" class="control-label">Cliente:</label><br>
                        </div>
                        <div class="col-md-2 col-xs-6" align="left">
                            <input type="radio" value="Cliente" name="RemitenteExterno" id="RemitenteExterno" required class="form-control"/> 
                        </div>
                        <div class="col-md-2 col-xs-6" align="right">
                            <label for="RemitenteExterno" class="control-label">Proveedor:</label><br>
                        </div>
                        <div class="col-md-2 col-xs-6" align="left">
                            <input type="radio" value="Proveedor" name="RemitenteExterno" id="RemitenteExterno" required class="form-control"/> 
                        </div>
                        <div class="col-md-2 col-xs-6" align="right">
                            <label for="RemitenteExterno" class="control-label">Otro:</label><br>
                        </div>
                        <div class="col-md-2 col-xs-6" align="left">
                            <input type="radio" value="Otro" name="RemitenteExterno" id="RemitenteExterno" required class="form-control"/> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-3 col-xs-3" align="right">
                        </div>
                        <div class="col-md-6 col-xs-6">

                            <select class="form-control" id="Cliente" name="Cliente"  >
                                <option value="0">Selecciona</option>
                                <?php foreach ($ID_cliente as $cliente1) { ?> 
                                    <option value="<?php echo $cliente1->Folio; ?>"><?php echo $cliente1->NombreC; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>  

                    <div class="col-xs-12 col-sm-12 margin-15-top-bottom text-center" >
                        <strong >REMITENTE INTERNO</strong>
                        <HR>
                    </div>

                    <div class="col-md-6 col-xs-6">
                        <label for="AreaInterno" class="control-label">Área:</label> 
                        <select class="form-control" id="AreaInterno" name="AreaInterno"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Area as $Area1) { ?> 
                                <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
                            <?php } ?>
                        </select>	
                    </div>	 
                    <div class="col-md-6 col-xs-6">
                        <label for="PuestoInterno" class="control-label">Puesto:</label> 
                        <select class="form-control" id="PuestoInterno" name="PuestoInterno"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Puesto as $Puesto1) { ?> 
                                <option value="<?php echo $Puesto1->id_puesto; ?>"><?php echo $Puesto1->dsc_puesto; ?></option>
                            <?php } ?>
                        </select>	
                    </div> 

                    <div class="col-xs-12 col-sm-12"> 
                        <label for="NombreInterno" class="control-label">Nombre:</label> 
                        <select class="form-control" id="NombreInterno" name="NombreInterno"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Responsables as $temporal) { ?> 
                                <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                            <?php } ?>
                        </select>	 
                    </div>

                    <div class="col-xs-12 col-sm-12 margin-15-top-bottom text-center" >
                        <strong >DESTINATARIO</strong>
                        <HR>
                    </div>

                    <div class="col-md-4"> 
                        <label for="Servicio" class="control-label">Servicio:</label> 
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Servicio" id="Servicio" required>		
                    </div>	 
                    <div class="col-md-4">
                        <label for="Actividad" class="control-label">Actividad:</label> 
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Actividad" id="Actividad" required>		
                    </div> 
                    <div class="col-md-4"> 
                        <label for="AreaDestinatario" class="control-label">Área:</label> 
                        <select class="form-control" id="AreaDestinatario" name="AreaDestinatario"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Area as $Area1) { ?> 
                                <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
                            <?php } ?>
                        </select> 
                    </div>

                    <div class="col-md-6"> 
                        <label for="PuestoDestinatario" class="control-label">Puesto:</label> 
                        <select class="form-control" id="PuestoDestinatario" name="PuestoDestinatario"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Puesto as $Puesto1) { ?> 
                                <option value="<?php echo $Puesto1->id_puesto; ?>"><?php echo $Puesto1->dsc_puesto; ?></option>
                            <?php } ?>
                        </select>	
                    </div> 

                    <div class="col-md-6"> 
                        <label for="NombreDestinatario" class="control-label">Nombre:</label> 
                        <select class="form-control" id="NombreDestinatario" name="NombreDestinatario"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Responsables as $temporal) { ?> 
                                <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                            <?php } ?>
                        </select>		 
                    </div>

                    <div class="col-xs-12 col-sm-12 margin-15-top text-center" >
                        <strong >DATOS DE RECEPCIÓN</strong>
                        <HR>
                    </div>  
                    <div class="col-md-4">
                        <label for="NombreRecibe" class="control-label">Nombre:</label> 
                        <select class="form-control" id="NombreRecibe" name="NombreRecibe"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Responsables as $temporal) { ?> 
                                <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                            <?php } ?>
                        </select>		
                    </div> 
                    <div class="col-md-4">
                        <label for="AreaRecibe" class="control-label">Área:</label> 
                        <select class="form-control" id="AreaRecibe" name="AreaRecibe"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Area as $Area1) { ?> 
                                <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="PuestoRecibe" class="control-label">Puesto:</label> 
                        <select class="form-control" id="PuestoRecibe" name="PuestoRecibe"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Puesto as $Puesto1) { ?> 
                                <option value="<?php echo $Puesto1->id_puesto; ?>"><?php echo $Puesto1->dsc_puesto; ?></option>
                            <?php } ?>
                        </select>	
                    </div>

                    <div class="col-md-6">
                        <label for="FechaRecibe" class="control-label">Fecha del documento:</label> 
                        <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaRecibe" id="datepicker2" required>	
                    </div> 
                    <div class="col-md-6">
                        <label for="HoraRecibe" class="control-label">Hora del documento:</label> 
                        <input  style="text-transform:uppercase" value="<?php echo date("H:i:s") ?>" class="form-control" type="text" name="HoraRecibe" id="HoraRecibe" required>	
                    </div> 
                    <div class="col-md-12 margin-15-top">
                        <div class="col-md-4">
                            <label for="FormatoDocumento" class="control-label">Formato del documento:</label> 
                        </div>
                        <div class="col-md-4">
                            <label>
                                <input type="radio" value="Físico" name="FormatoDocumento" id="FormatoDocumento" required class="form-control"/>
                                Físico	 </label>
                        </div>
                        <div class="col-md-4">
                            <label>
                                <input type="radio" value="Electrónico" name="FormatoDocumento" id="FormatoDocumento" required class="form-control"/>
                                Electrónico</label>
                        </div>
                    </div>  
                    <div class="col-xs-12 col-sm-12 margin-15-top text-center" >
                        <strong >UBICACIÓN DEL ARCHIVO FÍSICO</strong>
                        <HR>
                    </div>   
                    <div class="col-md-6 col-xs-3" >
                        <label for="AreaUbicacion" class="control-label">Área:</label> 
                        <select class="form-control" id="AreaUbicacion" name="AreaUbicacion"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Area as $Area1) { ?> 
                                <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
                            <?php } ?>
                        </select>	 
                    </div>

                    <div class="col-xs-12 col-md-6"> 
                        <label for="Ubicacion" class="control-label">Ubicación en archivo electrónico:</label> 
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Ubicacion" id="Ubicacion">		
                    </div> 

                    <div class="col-md-8 col-xs-12 col-sm-12"> 
                        <label for="Adjuntar" class="control-label">Adjuntar documento (Max 2MB)</label> 
                        <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" /> 

                    </div>
                    <div class="col-md-4 col-xs-10"><br>
                        <label for="Adjuntar" class="control-label">(WORD, EXCEL, PDF, JPG, PNG, ZIP, RAR)</label>
                    </div>
                    <div class="col-md-6"> 
                        <button type="button" id="salir" name="salir" class="btn btn-primary btn-block btn-lg"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/View_Referenciados?i=<?php echo $indice ?>'"><span class="fa fa-eye fa-lg"></span> VER REGISTROS</button>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                    </div>
                </fieldset>
            </div>
        </div>
        </form>
    </div>  
</div>