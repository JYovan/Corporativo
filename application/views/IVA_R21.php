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
    <?php echo form_open_multipart('controlador/IVA_R21'); ?> 

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

                            foreach ($DeclaracionesIVAR21 as $Declaraciones1) {
                                $mes = $Declaraciones1->meses;
                                if ($mes == 1) {
                                    $Enero = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 2) {
                                    $Febrero = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 3) {
                                    $Marzo = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 4) {
                                    $Abril = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 5) {
                                    $Mayo = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 6) {
                                    $Junio = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 7) {
                                    $Julio = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 8) {
                                    $Agosto = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 9) {
                                    $Septiembre = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 10) {
                                    $Octubre = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 11) {
                                    $Noviembre = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 12) {
                                    $Diciembre = number_format($Declaraciones1->PCant_pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
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
                                    </button>
                                    <a class="navbar-brand" href="http://www.defiryo.com.mx/" target="_blank"><img src="<?php echo base_url(); ?>imagenes/icono.png" width="20" height="20" /></a>
                                </div>
                                <div class="collapse navbar-collapse navbar-ex1-collapse" style="font-size:12px">
                                    <ul class="nav navbar-nav">
                                        <?php
                                        $length = strlen($cliente2->RFC);
                                        if ($length == 12) {
                                            ?>
                                            <li class="active"><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=8&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>IVA P. Moral R21</strong></a></li>
                                            <?php
                                        }
                                        $length = strlen($cliente2->RFC);
                                        if ($length != 12) {
                                            ?>
                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=81&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>IVA P. Física R21</strong></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Impuesto al Valor Agregado R21 </label><br>		
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
                        <td  bgcolor="#e6e602">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label" style="color:#000">Monto de los actos o actividades pagadas (acreditable) o impuesto pagado</label><br>		
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
                                    <input  type="number" step="0.01" class="form-control" name="SaldoFavor" id="SaldoFavor" value="<?php echo $cliente2->SFiva; ?>" required>
                                    <br />
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
                                    <br />
                                </div> 
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>    	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Ingresos 16%		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0"  class="form-control" name="Ingresos" id="Ingresos" required>
                                    <br />
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>    	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Otros Ingresos al 0%	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" value="0" step="0.01"  class="form-control" name="Otrosingresos" id="Otrosingresos" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <?php /* ?> <tr>
                      <td>
                      <div class="col-xs-12 col-sm-12">
                      <div class="col-md-6 col-xs-6" align="right">
                      Exentos
                      </div>
                      <div class="col-md-3 col-xs-6" align="left">
                      <input   type="number" step="0.01" value="0" class="form-control" name="Otrosingresos2" id="Otrosingresos2" required>
                      <br />
                      </div>
                      </div>
                      </td>
                      </tr><?php
                      <tr>
                      <td>

                      </td>
                      </tr>
                     */ ?>

                    <tr>
                        <td> 
                            <div class="col-md-3 col-xs-6" align="left">
                                <input   type="hidden" value="0" class="form-control" name="Ingresoscobrados" id="Ingresoscobrados" required>
                                <input type="hidden"  value="0" class="form-control" name="Ingresosnocobrados" id="Ingresosnocobrados">
                                <br />
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de ingresos		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_TotalIngresos">
                                    <input class="form-control" name="TotalIngresos" id="TotalIngresos"  value="0" readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>    	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    IVA trasladado	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVAtrasladado">
                                    <input class="form-control" name="IVAtrasladado" id="IVAtrasladado"  value="0" readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Gastos y compras con IVA	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="GastosconIVA" id="GastosconIVA"  value="0">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Gastos y compras sin IVA		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input type="number" step="0.01" class="form-control" name="GastossinIVA" id="GastossinIVA"  value="0" >
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de gastos y compras		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="TotalGastosYCompras">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Totalgastos" id="Totalgastos"  readonly="readonly">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    IVA acreditable	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVAacreditable">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="ivaacreditable" id="ivaacreditable" required>
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>

                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    IVA a favor	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVAfavor">
                                    <input class="form-control" name="IVAfavor" id="IVAfavor"  value="0" readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    IVA a pagar	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVAPagar">
                                    <input class="form-control" name="IVApagar" id="IVApagar"  value="0" readonly="readonly">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <?php /* ?> <tr>
                      <td>
                      <div class="col-xs-12 col-sm-12">
                      <div class="col-md-6 col-xs-6" align="right">
                      Total de los actos o actividades pagadas a la tasa del 16% de IVA
                      </div>
                      <div class="col-md-3 col-xs-6" align="left" id="L_Total_actos16">
                      <input   type="number" step="0.01" value="0" class="form-control" name="Total_actos16" id="Total_actos16" required>
                      <br />
                      </div>
                      </div>
                      </td>
                      </tr>
                      <tr>
                      <td>
                      <div class="col-xs-12 col-sm-12">
                      <div class="col-md-6 col-xs-6" align="right">
                      Total de los demás actos o actividades pagados a la tasa del 0% de IVA
                      </div>
                      <div class="col-md-3 col-xs-6" align="left" id="L_Total_actos0">
                      <input   type="number" step="0.01" value="0" class="form-control" name="Total_actos0" id="Total_actos0" required>
                      <br />
                      </div>
                      </div>
                      </td>
                      </tr> <?php */ ?>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td  bgcolor="#e6e602">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Determinacion" class="control-label" style="color:#000">Determinación del Impuesto al Valor Agregado acreditable (Impuesto pagado) </label><br>		
                            </div>
                        </td>
                    </tr>        
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de IVA de actos o actividades pagadas a la tasa del 16%	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_DTotal_actos16">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="DTotal_actos16" id="DTotal_actos16" required>
                                    <br />
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
                        <td  bgcolor="#e6e602">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Determinacion" class="control-label" style="color:#000">Determinación del impuesto al valor agregado ( Trasladado, causado o cobrado)</label><br>		
                            </div>
                        </td>
                    </tr>        
                    <tr>
                        <td>	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Valor de los actos o actividades gravadas a la tasa del 16%	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Valor_actos16">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Valor_actos16" id="Valor_actos16" required>
                                    <br />
                                </div>    
                            </div> 
                        </td>
                    </tr>      
                    <tr>
                        <td>	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Acreditamiento de saldo a favor de periodos anteriores (sin exceder de la cantidad a cargo)		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01"  class="form-control" name="Acredit_Saldo_favor" id="Acredit_Saldo_favor" value="0" required>
                                    <br />
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
                        <td  bgcolor="#e6e602">
                            <div class="col-xs-12 col-sm-12">
                                <label for="pago" class="control-label" style="color:#000">Determinación del pago</label><br>		
                            </div>
                        </td>
                    </tr>        
                    <tr>
                        <td>	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    A cargo		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_PA_Cargo">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="PA_Cargo" id="PA_Cargo" required>
                                    <br />
                                </div>    
                            </div> 
                        </td>
                    </tr>        
                    <tr>
                        <td> 
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Parte actualizada		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left"  id="L_Act">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Pparte_Actualizada" id="Pparte_Actualizada" required>
                                    <br />
                                </div>    
                                <div class="col-md-3 col-xs-6">
                                    <button class="btn btn-primary" type="button" value="<?php echo date("m"); ?>" id="RecargosB" name="RecargosB">Recargos</button>
                                </div>
                            </div> 
                        </td>
                    </tr>    
                    <tr>
                        <td>  
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Parte de recargos		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left"  id="L_Rec">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="PParte_recargos" id="PParte_recargos" required>
                                    <br />
                                </div>    
                            </div> 
                        </td>
                    </tr>    
                    <tr>
                        <td>  
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de contribuciones		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_PTotal_contribuciones">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="PTotal_contribuciones" id="PTotal_contribuciones" required>
                                    <br />
                                </div>   
                            </div> 
                        </td>
                    </tr>    
                    <tr>
                        <td>  
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Cantidad a cargo		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_PCant_cargo">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="PCant_cargo" id="PCant_cargo" required>
                                    <br />
                                </div>    
                            </div> 
                        </td>
                    </tr>    
                    <tr>
                        <td> 
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Cantidad a pagar		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_PCant_pagar">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="PCant_pagar" id="PCant_pagar" required>
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
                                <button class="btn btn-primary  btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
    cli.config.SumaIngresos();
    cli.config.SumaIngresos1();
    cli.config.SumaIngresos2();
    cli.config.SumaIngresos3();

    cli.config.IVAtrasladado1();
    cli.config.IVAtrasladado2();
    cli.config.IVAtrasladado3();

    cli.config.TotalGastos();
    cli.config.TotalGastos2();
    cli.config.IVAacreditable();

    cli.config.IVAFavor1();
    cli.config.IVAFavor2();
    cli.config.IVAFavor3();

    cli.config.IVAPagar1();
    cli.config.IVAPagar2();
    cli.config.IVAPagar3();

    cli.config.IVAtrasladado4();
    cli.config.IVAtrasladado5();
    cli.config.IVAtrasladado6();
    cli.config.IVAtrasladado7();
    cli.config.PA_Cargo1();
    cli.config.PA_Cargo2();

    cli.config.PA_Cargo3();
    cli.config.PA_Cargo4();
    cli.config.PA_Cargo5();
    cli.config.CantPagar();
    cli.config.CantPagar1();

    cli.config.CantPagar2();
    cli.config.CantPagar3();
    cli.config.CantPagar4();
    cli.config.CantPagar5();
    cli.config.CantPagar6();

    cli.config.RecargosIVAR21_1();
</script>

