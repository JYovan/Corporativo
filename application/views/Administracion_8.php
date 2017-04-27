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
<?php echo form_open_multipart('controlador/ISR_AGASIPE'); ?> 

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
                            $sumadeducciones = 0;
                            foreach ($DeclaracionesR97 as $Declaraciones1) {
                                $mes = $Declaraciones1->meses;
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
                                    $sumaingresos = $sumaingresos + $Declaraciones1->Ing;
                                }

                                if ($Declaraciones1->Anio == date("y")) {
                                    $impuestoperiodo = $impuestoperiodo + $Declaraciones1->Pagos_Prov;
                                }
                                if ($Declaraciones1->Anio == date("y")) {
                                    $sumadeducciones = $sumadeducciones + $Declaraciones1->Deduc_Auto;
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

                                            <li class="active"><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=61&Cl=<?php echo $Folio ?>&i=<?php echo $indice ?>'><strong>ISR AGASIPES</strong></a></li>
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
                                <label for="Redes" class="control-label">ISR P. MORALES REGIMEN DE ACTIVIDADES AGRICOLAS, GANADERAS, SILVICOLAS Y PESQUERAS. IMPUESTO PROPIO 
                                    R97</label><br>		
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
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Determinación del Impuesto Sobre la Renta</label><br>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-xs-6 col-md-3" align="right">
                                    Suma de ingresos anteriores
                                    <br> 	
                                </div>
                                <div class="col-xs-6 col-md-3" align="left">
                                    <input  type="number" step="0.01" class="form-control" name="Suma_Ing" id="Suma_Ing" value="<?php echo $sumaingresos; ?>" required="required">
                                    <br>
                                </div>  		  
                                <div class="col-xs-6 col-md-3" align="right">
                                    Ingresos del periodo
                                    <br>	  	
                                </div>
                                <div class="col-xs-6 col-md-3" align="left">
                                    <input  class="form-control" type="number" step="0.01" value="0" name="Ing" id="Ing" required="required">
                                    <br>
                                </div> 
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Total de ingresos	  	
                                    <br>
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
                                    Ingresos exentos
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" value="0" name="Ing_Externos" id="Ing_Externos" required="required">
                                    <br>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Suma de deducciones autorizadas anteriores
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" value="<?php echo $sumadeducciones; ?>" name="Suma_Deduc" id="Suma_Deduc" required="required">
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
                                    Deducciones autorizadas
                                    <br>		  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="Deduc_Auto" id="Deduc_Auto" value="0" required="required">
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
                                    Total de deducciones
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Total_Deduc">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Total_Deduc" id="Total_Deduc"   readonly="readonly">
                                    <br>
                                </div>  		  

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-6" align="right">
                                    Participación de los trabajadores en la utilidad
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Part_Utilidad" id="Part_Utilidad"  required="required">
                                    <br>
                                    <br>
                                </div>  		    
                                <div class="col-md-3 col-xs-6" align="right">
                                    Pérdidas fiscales (anteriores)
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01"  value="<?php echo $cliente2->PerdFiscAnt; ?>"  class="form-control" name="Perdidas" id="Perdidas"  required="required">
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
                                    Base gravable del pago provisional
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_BaseG">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Base" id="Base"  readonly="readonly">
                                    <br>
                                    <br>
                                </div>  		    
                                <div class="col-md-3 col-xs-6" align="right">
                                    ISR determinado
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ISRDet">
                                    <input type="number" step="0.01" value="0" class="form-control" name="ISR_Det" id="ISR_Det"   readonly="readonly">
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
                                    Reducciones
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Reducciones" id="Reducciones"  required="required">
                                    <br>
                                    <br>
                                </div>  		    
                                <div class="col-md-3 col-xs-6" align="right">
                                    ISR causado
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ISRC">
                                    <input type="number" step="0.01" value="0" class="form-control" name="ISR_Causado" id="ISR_Causado"   readonly="readonly">
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
                                    Pagos provisionales efectuados con anterioridad del ejercicio
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="<?php echo $impuestoperiodo; ?>" class="form-control" name="Pagos_Prov" id="Pagos_Prov"  required="required">
                                    <br>
                                    <br>
                                </div>  		    
                                <div class="col-md-3 col-xs-6" align="right">
                                    Impuesto retenido
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Imp_Ret" id="Imp_Ret"  required="required">
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
                                    Otras cantidades  a cargo del contribuyente
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="OtrasCargo" id="OtrasCargo"  required="required">
                                    <br>
                                    <br>
                                </div>  		    
                                <div class="col-md-3 col-xs-6" align="right">
                                    Otras cantidades a favor del contribuyente
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" value="0" class="form-control" name="OtrasFavor" id="OtrasFavor"  required="required">
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
                                <div class="col-md-3 col-xs-6" align="left" id="L_ACargo">
                                    <input type="number" step="0.01" value="0" class="form-control" name="Imp_Cargo" id="Imp_Cargo"  readonly="readonly">
                                    <br>
                                    <br>
                                </div>  		  
                            </div>
                        </td>
                    </tr>     
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="ss" class="control-label">Detalle del pago</label><br>		
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
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ACargo2">
                                    <input  type="number" step="0.01" class="form-control" name="ACargo" id="ACargo" value="0" required="required">
                                    <br>
                                    <br>
                                </div>  		  
                                <div class="col-md-3 col-xs-6" align="right">
                                    Parte actualizada
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Act">
                                    <input type="number" step="0.01" class="form-control" name="ParteAct" id="ParteAct" value="0"  required="required">
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
                                    Recargos
                                    <br>  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Rec">
                                    <input type="number" step="0.01" class="form-control" name="Recargos" id="Recargos" value="0"  required="required">
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    Multa por corrección
                                    <br>	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="Multas" id="Multas" value="0"  required="required">
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
                                    Total de contribuciones
                                    <br>
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_TotalC">
                                    <input type="number" step="0.01" class="form-control" name="Total_Cont" id="Total_Cont"  value="0" readonly="readonly">
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
                                    Subsidio para el empleo
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="Sub_Emple" id="Sub_Emple"  value="0" required="required">
                                    <br>
                                    <br>
                                </div>   
                                <div class="col-md-3 col-xs-6" align="right">
                                    Compensaciones
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="Compensaciones" id="Compensaciones" value="0"  required="required">
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
                                    Crédito IEPS diesel sector primario y minero
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="IEPS" id="IEPS"  value="0" required="required">
                                    <br>
                                    <br>
                                </div>   
                                <div class="col-md-3 col-xs-6" align="right">
                                    Otros Estímulos 
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="Otros" id="Otros" value="0" required="required">
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
                                    Diesel marino
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="Diesel" id="Diesel"  value="0" required="required">
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
                                <div class="col-md-3 col-xs-6" align="left" id="L_TotalApp">
                                    <input  class="form-control"  name="TotalApp" id="TotalApp"  value="0" readonly="readonly">
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
                                    Fecha del pago realizado con anterioridad
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control"  name="Fecha" id="Fecha"  value="<?php echo date("d/m/Y") ?>" required="required">
                                    <br>
                                    <br>
                                </div>   
                                <div class="col-md-3 col-xs-6" align="right">
                                    Monto pagado con anterioridad
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="MontoPagado" id="MontoPagado"   required="required">
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
                                    Importe pagado en las ultimas 48 horas
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input  class="form-control" type="number" step="0.01" name="Imp_UltHrs" id="Imp_UltHrs"   required="required">
                                    <br>
                                    <br>
                                </div>   
                                <div class="col-md-3 col-xs-6" align="right">
                                    Cantidad a cargo
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_CantCargo">
                                    <input  class="form-control" name="CantCargo" id="CantCargo" value="0" readonly="readonly">
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
                                    Cantidad a favor
                                    <br> 	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_CantFavor">
                                    <input  class="form-control" name="CantFavor" id="CantFavor" value="0"  readonly="readonly">
                                    <br>
                                    <br>
                                </div> 
                                <div class="col-md-3 col-xs-6" align="right">
                                    Cantidad a pagar
                                    <br>	  	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_CantPagar">
                                    <input  class="form-control" name="CantPagar" id="CantPagar"  value="0" readonly="readonly">
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
    cli.config.ISR_R97_1();
    cli.config.ISR_R97_2();
    cli.config.ISR_R97_3();
    cli.config.ISR_R97_4();
    cli.config.ISR_R97_41();
    cli.config.ISR_R97_42();
    cli.config.ISR_R97_43();
    cli.config.ISR_R97_44();
    cli.config.ISR_R97_45();
    cli.config.ISR_R97_46();
    cli.config.ISR_R97_47();
    cli.config.ISR_R97_48();
    cli.config.ISR_R97_5();
    cli.config.ISR_R97_6();
    cli.config.ISR_R97_7();
    cli.config.ISR_R97_8();
    cli.config.ISR_R97_9();
    cli.config.ISR_R97_10();
    cli.config.ISR_R97_11();
    cli.config.ISR_R97_12();
    cli.config.ISR_R97_13();
    cli.config.ISR_R97_14();
    cli.config.ISR_R97_15();

    cli.config.RecargosISR_R97();
</script>

