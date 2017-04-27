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


<?php echo form_open_multipart(base_url().'index.php/controlador/ISR_R1'); ?>   
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
                            foreach ($Declaraciones as $Declaraciones1) {
                                $mes = $Declaraciones1->meses;
                                $Cuenta = $Declaraciones1->CantPagar;
                                if ($mes == 1) {
                                    $Enero = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 2) {
                                    $Febrero = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 3) {
                                    $Marzo = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 4) {
                                    $Abril = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 5) {
                                    $Mayo = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 6) {
                                    $Junio = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 7) {
                                    $Julio = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                } else {
                                    $Julio = 0;
                                }
                                if ($mes == 8) {
                                    $Agosto = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 9) {
                                    $Septiembre = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 10) {
                                    $Octubre = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 11) {
                                    $Noviembre = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 12) {
                                    $Diciembre = number_format($Declaraciones1->CantPagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }


                                if ($Declaraciones1->Anio == date("y")) {
                                    $sumaingresos = $sumaingresos + $Declaraciones1->Ingresosact;
                                }

                                if ($Declaraciones1->Anio == date("y")) {
                                    $impuestoperiodo = $impuestoperiodo + $Declaraciones1->Pagos;
                                }
                            }
                            ?>
                            <input  type="hidden" class="form-control" name="Folio" id="Folio" value="<?php echo $Folio ?>">
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
                                            <li class="active"><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=1&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR P Morales R1</strong></a></li>

                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=61&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR AGASIPES</strong></a></li>
    <?php
}
$length = strlen($cliente2->RFC);
if ($length != 12) {
    ?>
                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=2&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Asimilables</strong></a></li>

                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=4&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR Honorarios</strong></a></li>

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
                                <label for="Redes" class="control-label">ISR PERSONAS MORALES R1</label>
                                <br>		
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
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>  




                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-xs-6 col-md-3" align="right">
                                    Ingresos meses anteriores
                                    <br> 	
                                </div>
                                <div class="col-xs-6 col-md-3" align="left">
                                    <input  type="number" step="0.01" class="form-control" name="Ingresosant" id="Ingresosant" value="<?php echo $sumaingresos; ?>" required>
                                    <br>
                                    <br>
                                </div>  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Ingresos del mes que declara	  	
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control"  value="0" name="Ingresosact" id="Ingresosact" required>
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
                                    Total de ingresos nominales	
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Total">
                                    <input  class="form-control" name="Total"  value="0" id="Total" readonly="readonly">
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
                                    Coeficiente de utilidad
                                    <br>		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.001" class="form-control" name="Coeficiente" id="Coeficiente" value="<?php echo $cliente2->CoefUtil; ?>" required>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Utilidad fiscal (pago provisional)
                                    <br>		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Utilidad">
                                    <input  class="form-control" name="Utilidad" id="Utilidad"  value="0" readonly="readonly">
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
                                    Pérdidas fiscales (anteriores)
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="Perdidas" id="Perdidas"  value="<?php echo $cliente2->PerdFiscAnt; ?>"  required>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-xs-6 col-md-3" align="right">
                                    Base gravable del pago provisional
                                    <br>	  	
                                </div>
                                <div class="col-xs-6 col-md-3" align="left" id="L_Base">
                                    <input  class="form-control" name="Base" id="Base"  value="0" readonly="readonly">
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
                                    ISR causado (30%)	 
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ISRcausado">
                                    <input  class="form-control" name="ISRcausado"  value="0" id="ISRcausado" readonly="readonly">
                                    <br>
                                    <br>
                                </div> 
                                <div class="col-md-3 col-xs-6" align="right">
                                    Impuesto del periodo	
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ImpuestoP">
                                    <input  class="form-control"  value="0" name="ImpuestoP" id="ImpuestoP" readonly="readonly">
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
                                    Pagos provisionales (anteriores)
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="Pagos" id="Pagos"  value="<?php echo $impuestoperiodo; ?>"  required>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Impuesto retenido (Bancos)
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number"  value="0" step="0.01" class="form-control" name="ImpuestoB" id="ImpuestoB"  required>
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
                                    Impuesto a cargo	
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ImpuestoCargo">
                                    <input  class="form-control" name="ImpuestoCargo" id="ImpuestoCargo"  value="0" readonly="readonly">
                                    <br>
                                    <br>
                                </div>  		  
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">DETERMINACION ISR PERSONAS MORALES</label><br>		
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
                                    Parte actualizada
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Act">
                                    <input type="number" step="0.01" class="form-control" name="ParteAct" id="ParteAct" value="0" required>
                                    <br>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Parte de recargos
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Rec">
                                    <input type="number" step="0.01" class="form-control" name="ParteRecargos" id="ParteRecargos" value="0"  required>
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
                                    Subsidio al empleo
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="SubsidioEmp" id="SubsidioEmp" value="0"  required>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    IDE
                                    <br>	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="IDE" id="IDE" value="0"  required>
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
                                    Crédito IEPS
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="IEPS" id="IEPS"  value="0" required>
                                    <br>
                                    <br>
                                </div>	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Disel Sector Primario y Minero
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="Disel" id="Disel" value="0"  required>
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
                                    Total de aplicaciones
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left"  id="L_TotalApp">
                                    <input  class="form-control" name="TotalApp" id="TotalApp"  value="0" readonly="readonly">
                                    <br>
                                    <br>
                                </div>   
                                <div class="col-md-3 col-xs-6" align="right">
                                    Cantidad a pagar
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_CantPagar">
                                    <input  class="form-control" name="CantPagar" id="CantPagar" value="0"  readonly="readonly">
                                    <br>
                                    <br>
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
                                <button class="btn btn-lg btn-primary  btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
    cli.config.ISR_R1_1();
    cli.config.ISR_R1_2();
    cli.config.ISR_R1_3();
    cli.config.ISR_R1_4();
    cli.config.ISR_R1_5();

    cli.config.ParteAct1();
    cli.config.IEPS1();
    cli.config.ParteRecargos1();
    cli.config.Disel1();
    cli.config.SubsidioEmp1();
    cli.config.IDE1();

    cli.config.RecargosISR_R1();

</script>

