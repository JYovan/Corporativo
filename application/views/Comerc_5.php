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
<?php echo form_open_multipart('controlador/Comerc_5'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de transmisión de propiedad en ejecución 
                                de fideicomiso y extinción parcial del mismo</strong>
                        </td>
                    </tr>   

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-12" align="right">
                                    <label for="Cliente" class="control-label">Nombre del fideicomiso</label><br>
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                                            <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
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
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="1" class="control-label">Datos del inmueble transmitido</label><br>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Fecha de entrega de transmisión de vivienda a Institución Fiduciaria 	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" type="text" class="form-control" name="FechaEntrega" id="datepicker" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Fecha de notificación de transmisión a Corporación Rabina		  	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input  value="<?php echo date("d/m/Y") ?>" type="text" class="form-control" name="FechaNot" id="datepicker2" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Nombre de quien notifica  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="Notificador" id="Notificador" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Nombre de quien recibe notificación de transmisión en Corporación Rabina 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="RecibeNot" id="RecibeNot" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Datos de identificación de la vivienda</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Manzana:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoManzana">
                                    <select class="form-control" id="Manzana" name="Manzana"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Lote:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoLotes">
                                    <select class="form-control" id="Lotes" name="Lotes"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Viviendas:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="ResultadoViviendas">
                                    <select class="form-control" id="Viviendas" name="Viviendas"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <label for="Redes" class="control-label">Información de la vivienda</label><br>		
                            </div>
                            <div class="col-md-12 col-xs-12" id="ResultadoViviendasInfo">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Datos del adquirente</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Nombre del adquirente  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="Adquirente" id="Adquirente" required>
                                    <br>
                                </div>  	
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Género  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Genero" name="Genero"   required="required">
                                        <option value="">Selecciona</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Teléfono 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="Telefono" id="Telefono" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="2" class="control-label">Descripción de la compra-venta</label><br>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Precio base  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" step="0.01" class="form-control" value="0" name="PrecioBase" id="PrecioBase">
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Monto de descuento 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input  value="0"  type="number" step="0.01" class="form-control" name="MontoDescuento" id="MontoDescuento">
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Costo adicional  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  type="number" step="0.01" value="0" class="form-control" name="CostoAdic" id="CostoAdic" >
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Precio total (Costo adicional menos total de descuentos) 	
                                </div>
                                <div class="col-md-12 col-xs-12" id="ResultadoFA1">
                                    <input   type="number" step="0.01"  class="form-control" name="PrecioTotal" id="PrecioTotal" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12" style="background-color:#b3b2b2">	  
                                <div class="col-md-4 col-xs-12"  style="background-color:#b3b2b2">
                                    Tipo de descuentos	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    Cantidad	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    Monto	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12">
                                    De créditos	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="1" class="form-control" name="C1" id="C1">	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="M1" id="M1">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    Empresarial	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="1" class="form-control" name="C2" id="C2">	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="0.01" class="form-control" name="M2" id="M2">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12">
                                    Promoción Mamá	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="1" class="form-control" name="C3" id="C3">	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="M3" id="M3">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    Primavera	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="1" class="form-control" name="C4" id="C4">	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="0.01" class="form-control" name="M4" id="M4">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12">
                                    Verano	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="1" class="form-control" name="C5" id="C5">	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="M5" id="M5">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    Olímpico	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="1" class="form-control" name="C6" id="C6">	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="0.01" class="form-control" name="M6" id="M6">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12">
                                    Viva México	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="1" class="form-control" name="C7" id="C7">	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="M7" id="M7">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    De miedo	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="1" class="form-control" name="C8" id="C8">	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="0.01" class="form-control" name="M8" id="M8">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">	  
                                <div class="col-md-4 col-xs-12">
                                    Aguinaldo	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="1" class="form-control" name="C9" id="C9">	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" step="0.01" class="form-control" name="M9" id="M9">	
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12" style="background-color:#b3b2b2">	  
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    Otros	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="1" class="form-control" name="C10" id="C10">	
                                </div>
                                <div class="col-md-4 col-xs-12" style="background-color:#b3b2b2">
                                    <input type="number" step="0.01" class="form-control" name="M10" id="M10">	
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">

                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="col-md-4 col-xs-12"4>

                                </div>
                                <div class="col-md-4 col-xs-12">
                                    Total descuentos
                                </div>
                                <div class="col-md-4 col-xs-12" id="SumaDesc">

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">

                                </div>
                                <div class="col-md-12 col-xs-12">

                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Forma de transmitir la vivienda 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <select class="form-control" id="FormaTrans" name="FormaTrans"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($FormaT as $FormaT1) { ?> 
                                            <option value="<?php echo $FormaT1->id_forma; ?>"><?php echo $FormaT1->dsc_forma; ?></option>
<?php } ?>
                                    </select>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Monto de anticipo  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="MontoAnt" id="MontoAnt" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Otros abonos 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="OtrosAbonos" id="OtrosAbonos" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Crédito cofinanciado  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Cofinanciado" name="Cofinanciado"   required="required">
                                        <option value="">Selecciona</option>
                                        <option value="Sí">Sí</option>
                                        <option value="No">No</option>
                                    </select>
                                    <br>
                                </div>  	
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Crédito A  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="CreditoA" id="CreditoA" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Institución 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <select class="form-control" id="InstitucionA" name="InstitucionA"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Institucion as $Institucion1) { ?> 
                                            <option value="<?php echo $Institucion1->id_institucion; ?>"><?php echo $Institucion1->dsc_institucion; ?></option>
<?php } ?>
                                    </select>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Crédito B  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="CreditoB" id="CreditoB" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Institución 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <select class="form-control" id="InstitucionB" name="InstitucionB"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Institucion as $Institucion1) { ?> 
                                            <option value="<?php echo $Institucion1->id_institucion; ?>"><?php echo $Institucion1->dsc_institucion; ?></option>
<?php } ?>
                                    </select>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>








                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Precio de venta neto  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="PrecioVentaN" id="PrecioVentaN" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Precio de venta en escritura (Importe del contado) 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="PrecioVentaE" id="PrecioVentaE" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="2" class="control-label">Ingreso por terreno y venta</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Pago de terreno  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" step="0.01" value="0"  class="form-control" name="PagoTerreno" id="PagoTerreno" >
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Pago de rendimientos (se obtiene del porcentaje de ganancia estipulado al precio de venta neto) 	
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input  type="number" step="0.01" value="0" class="form-control" name="PagoRendimientos" id="PagoRendimientos">
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Total  de ingreso por terreno y venta  	
                                </div>
                                <div class="col-md-12 col-xs-12" id="ResultadoFB1">
                                    <input   type="number" step="0.01"  class="form-control" name="TotalIng" id="TotalIng" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Firma con Notario Público
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="FirmaNP" id="FirmaNP" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Fecha de firma con el Notario Público  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input value="<?php echo date("d/m/Y") ?>"  type="text" class="form-control" name="FechaFirmaNP" id="datepicker3" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Nombre del Notario Público
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="NPub" id="NPub" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Número de Notario Público  	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="NumNP" id="NumNP" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12" >
                                    Partido de adscripción
                                </div>
                                <div class="col-md-12 col-xs-12" >
                                    <input   type="text" class="form-control" name="Adscripcion" id="Adscripcion" required>
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">	  
                                <div class="col-md-12 col-xs-12">
                                    Numeral registral	
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="NumeralR" id="NumeralR" required>
                                    <br>
                                </div>  	
                            </div>

                            <div class="col-md-6 col-xs-12"> 
                                <div class="col-md-12 col-xs-12">
                                    Observaciones5
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input   type="text" class="form-control" name="Observaciones" id="Observaciones">
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ManzanaF();
    cli.config.LotesF();
    cli.config.LotesFM();
    cli.config.ViviendasF();
    cli.config.ViviendasInFo();

    cli.config.FormulaA0();
    cli.config.FormulaA1();
    cli.config.FormulaA2();
    cli.config.FormulaB1();
    cli.config.FormulaB2();

    cli.config.SumaDesc_1();
    cli.config.SumaDesc_2();
    cli.config.SumaDesc_3();
    cli.config.SumaDesc_4();
    cli.config.SumaDesc_5();
    cli.config.SumaDesc_6();
    cli.config.SumaDesc_7();
    cli.config.SumaDesc_8();
    cli.config.SumaDesc_9();
    cli.config.SumaDesc_10();
</script>

