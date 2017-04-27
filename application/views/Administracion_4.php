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
<?php echo form_open_multipart('controlador/ISR_R14'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">PLATAFORMA INFORMÁTICA<BR />
                                MÓDULO DE CÁLCULO DE IMPUESTOS
                            </strong>
                        </td>
                    </tr> 


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Info" class="control-label">Información del cliente</label><br>	
                            </div>
                            <?php
                            $Enero = "-";
                            $Febrero = "-";
                            $Marzo = "-";
                            $Abril = "-";
                            $Mayo = "-";
                            $Junio = "-";
                            $Julio = "-";
                            $Agosto = "-";
                            $Septiembre = "-";
                            $Octubre = "-";
                            $Noviembre = "-";
                            $Diciembre = "-";
                            foreach ($InfCliente as $cliente2) {
                                echo "RFC: ";
                                ?>	<strong style="color:#ff6600"><?php echo $cliente2->RFC; ?> </strong><?php
                                echo "</p>";
                                echo "Nombre comercial: ";
                                ?>	<strong style="color:#ff6600"><?php echo $cliente2->NombreC; ?> </strong><?php
                                echo "</p>";
                                echo "Razón social: ";
                                ?>	<strong style="color:#ff6600"><?php echo $cliente2->RazonS; ?> </strong><?php
                                echo "</p>";
                                echo "Representante legal: ";
                                ?>	<strong style="color:#ff6600"><?php echo $cliente2->RepresentanteL; ?> </strong><?php
                                echo "</p>";
                                echo "Teléfono: ";
                                ?>	<strong style="color:#ff6600"><?php echo $cliente2->C_Lada . " " . $cliente2->C_Tel; ?> </strong><?php
                                echo "</p>";
                                echo "Correo: ";
                                ?>	<strong style="color:#ff6600"><?php echo $cliente2->Correo; ?> </strong><?php
                                echo "</p>";
                                $ID_Rama = $cliente2->Rama;
                                $Folio = $cliente2->Folio;
                            }
                            foreach ($Rama as $RamaCl) {
                                $id_rama = $RamaCl->id_rama;
                                if ($id_rama == $ID_Rama) {
                                    echo "Rama: ";
                                    ?>	<strong style="color:#ff6600"><?php echo $RamaCl->dsc_rama; ?> </strong><?php
                                }
                            }

                            $sumaingresos = 0; //*******************************
                            $impuestoperiodo = 0;
                            foreach ($DeclaracionesR14 as $Declaraciones1) {
                                $mes = $Declaraciones1->meses;
                                if ($mes == 1) {
                                    $Enero = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 2) {
                                    $Febrero = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 3) {
                                    $Marzo = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 4) {
                                    $Abril = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 5) {
                                    $Mayo = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 6) {
                                    $Junio = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 7) {
                                    $Julio = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 8) {
                                    $Agosto = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 9) {
                                    $Septiembre = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 10) {
                                    $Octubre = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 11) {
                                    $Noviembre = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 12) {
                                    $Diciembre = number_format($Declaraciones1->CPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }


                                if ($Declaraciones1->Anio == date("y")) {
                                    $sumaingresos = $sumaingresos + $Declaraciones1->Ing;
                                }

                                if ($Declaraciones1->Anio == date("y")) {
                                    $impuestoperiodo = $impuestoperiodo + $Declaraciones1->PagosAnt;
                                }
                            }
                            ?>
                            <input  type="hidden" class="form-control" name="Folio" id="Folio" value="<?php echo $Folio ?>" readonly="readonly">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">DEFIRYO</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="http://www.defiryo.com.mx/" target="_blank"><img src="<?php echo base_url(); ?>imagenes/icono.png" width="20" height="20" /></a>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse" style="font-size:12px">
                                    <ul class="nav navbar-nav">
<?php
$length = strlen($cliente2->RFC);
if ($length == 12) {
    ?>
                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=1&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR P Morales R1</strong></a></li>

                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=61&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR AGASIPES</strong></a></li>
    <?php
}
$length = strlen($cliente2->RFC);
if ($length != 12) {
    ?>
                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=2&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Asimilables</strong></a></li>

                                            <li class="active"><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=4&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Honorarios</strong></a></li>

                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=5&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Salarios</strong></a></li>

                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=6&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Act. Empresarial</strong></a></li>      
                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=62&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Arrendamientos</strong></a></li>
<?php } ?>
                                    </ul>
                                </div>
                            </nav>
                        </td>
                    </tr>  
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">ISR RETENCIONES POR SERVICIOS PROFESIONALES ( HONORARIOS ) R14</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Saldo a favor	acumulado
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  type="number" step="0.01" class="form-control" name="SaldoFavor" id="SaldoFavor" value="<?php echo $cliente2->SFisr; ?>" readonly="readonly">
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Saldo a favor		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  type="number" step="0.01" class="form-control" name="SaldoFavor" id="SaldoFavor" value="0" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Mes a declarar		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <select class="form-control" id="meses" name="meses"  required>
                                        <option value="">Selecciona</option>
<?php foreach ($Meses as $Meses1) { ?> 
                                            <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
<?php } ?>
                                    </select>
                                    <br>
                                </div> 
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Determinación del Impuesto Sobre la Renta</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Suma de ingresos efectivamente cobrados anteriores		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="<?php echo $sumaingresos; ?>" class="form-control" name="Suma_Ing" id="Suma_Ing" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Ingresos efectivamente cobrados		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Ing" id="Ing" required>
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Total de Ingresos	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Total_Ing">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Total_Ing" id="Total_Ing" readonly="readonly">
                                    <br>
                                </div>  		  

                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Suma de compras y gastos anteriores	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="GastosAnt" id="GastosAnt" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Compras y gastos del periodo que declara		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="GastosAct" id="GastosAct" required>
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Total de compras y gastos	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_TotalGastos">
                                    <input class="form-control" name="TotalGastos" id="TotalGastos"  value="0" readonly="readonly">
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Pagos provisionales anteriores
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="<?php echo $impuestoperiodo; ?>" class="form-control" name="PagosAnt" id="PagosAnt" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Impuesto Retenido
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="ImpuestoRet" id="ImpuestoRet" required>
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Meses" class="control-label">Detalle del Pago</label>
                                </br>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-9 col-xs-6">

                                </div> 
                                <div class="col-md-3 col-xs-6" align="right">
                                    <button class="btn btn-primary" type="button" value="<?php echo date("m"); ?>" id="RecargosB" name="RecargosB">Recargos</button>
                                </div>             	  
                            </div>
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    A cargo
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_TAcargo">
                                    <input type="number" step="0.01" value="0" class="form-control" name="ACargo" id="ACargo" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Parte Actualizada
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Act">
                                    <input class="form-control" type="number" step="0.01" name="ParteAct" id="ParteAct"  value="0" required="required">
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Recargos	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Rec">
                                    <input type="number" step="0.01" value="0"  class="form-control" name="Recargos" id="Recargos" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Total de Contribuciones
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_TotalCont">
                                    <input class="form-control" name="TotalCont" id="TotalCont"  value="0" readonly="readonly">
                                    <br>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Meses" class="control-label">Conceptos que disminuyen el total de contribuciones </label>
                                </br>		
                            </div>
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Crédito al salario
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Credito_sal" id="Credito_sal" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Subsidio para el empleo		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Sub_Empleo" id="Sub_Empleo" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Impuesto a los depósitos en efectivo acreditable
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Imp_Depositos" id="Imp_Depositos" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Compensaciones	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Compensaciones" id="Compensaciones" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Crédito IEPS diesel sector primario y minero
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="IEPS" id="IEPS" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Diesel automotriz para transporte  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Diesel" id="Diesel" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Uso de infraestructura  carretera de cuota
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Carreteras" id="Carreteras" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Otros estímulos	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Otros" id="Otros" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Diesel marino
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Diesel_Marino" id="Diesel_Marino" required>
                                    <br>
                                </div>  		  

                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                </br>
                                </br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Fecha del pago anterior
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="text" value="<?php echo date("d/m/Y") ?>"  class="form-control" name="FechaAnt" id="FechaAnt" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Monto pagado anterior		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01"  class="form-control" name="Monto_Ant" id="Monto_Ant" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Importe del pago en las últimas 48 horas
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01"  class="form-control" name="Imp_UltHrs" id="Imp_UltHrs" required>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Cantidad a favor	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left"  id="L_CFavor">
                                    <input type="number" step="0.01"  class="form-control" name="CFavor" id="CFavor" readonly="readonly">
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Cantidad a pagar
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_CPagar">
                                    <input type="number" step="0.01"  class="form-control" name="CPagar" id="CPagar" readonly="readonly">
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">

                                </div>
                                <div class="col-md-3 col-xs-6" align="left">

                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Meses" class="control-label">Histórico Mensual</label>
                                </br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">	  
                                <div class="col-md-6 col-xs-6" align="center">
                                    Enero	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    Febrero
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input  class="form-control" name="Enero" id="Enero" value="<?php echo $Enero; ?>" disabled=true>  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input  class="form-control" name="Febrero" id="Febrero" value="<?php echo $Febrero; ?>"  disabled=true>
                                </div>    		  
                            </div>
                            <div class="col-md-4 col-xs-12">	  
                                <div class="col-md-6 col-xs-6" align="center">
                                    Marzo	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    Abril
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input  class="form-control" name="Marzo" id="Marzo" value="<?php echo $Marzo; ?>"  disabled=true>	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Abril" id="Abril" value="<?php echo $Abril; ?>"  disabled=true>
                                </div>    		  
                            </div>
                            <div class="col-md-4 col-xs-12">	  
                                <div class="col-md-6 col-xs-6" align="center">
                                    Mayo	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    Junio
                                </div> 
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Mayo" id="Mayo" value="<?php echo $Mayo; ?>"  disabled=true>	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Junio" id="Junio" value="<?php echo $Junio; ?>"  disabled=true>
                                </div>  		  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-12">	  
                                <div class="col-md-6 col-xs-6" align="center">
                                    Julio	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    Agosto
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Julio" id="Julio" value="<?php echo $Julio; ?>"  disabled=true> 	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Agosto" id="Agosto" value="<?php echo $Agosto; ?>"  disabled=true>
                                </div>    		  
                            </div>
                            <div class="col-md-4 col-xs-12">	  
                                <div class="col-md-6 col-xs-6" align="center">
                                    Septiembre	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    Octubre
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Septiembre" id="Septiembre" value="<?php echo $Septiembre; ?>"  disabled=true>  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Octubre" id="Octubre" value="<?php echo $Octubre; ?>"  disabled=true>
                                </div>    		  
                            </div>
                            <div class="col-md-4 col-xs-12">	  
                                <div class="col-md-6 col-xs-6" align="center">
                                    Noviembre	  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    Diciembre
                                </div> 
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input  class="form-control" name="Noviembre" id="Noviembre" value="<?php echo $Noviembre; ?>"  disabled=true>
                                </div>
                                <div class="col-md-6 col-xs-6" align="center">
                                    <input class="form-control" name="Diciembre" id="Diciembre" value="<?php echo $Diciembre; ?>"  disabled=true>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controladorCalculo/Menu?ID=6&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ISR_R7_1();
    cli.config.ISR_R7_2();
    cli.config.ISR_R7_3();
    cli.config.ISR_R7_4();
    cli.config.ISR_R7_5();
    cli.config.ISR_R7_6();
    cli.config.ISR_R7_7();
    cli.config.ISR_R7_8();
    cli.config.ISR_R7_9();
    cli.config.ISR_R7_10();
    cli.config.ISR_R7_11();
    cli.config.ISR_R7_12();
    cli.config.ISR_R7_13();
    cli.config.ISR_R7_14();
    cli.config.ISR_R7_15();
    cli.config.ISR_R7_16();
    cli.config.ISR_R7_17();
    cli.config.ISR_R7_18();

    cli.config.RecargosISR_R14();
</script>

