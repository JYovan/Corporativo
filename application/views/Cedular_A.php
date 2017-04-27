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
<?php echo form_open_multipart('controlador/Cedular_A'); ?> 

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

                            foreach ($DeclaracionesCA as $Declaraciones1) {
                                $mes = $Declaraciones1->meses;
                                if ($mes == 1) {
                                    $Enero = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 2) {
                                    $Febrero = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 3) {
                                    $Marzo = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 4) {
                                    $Abril = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 5) {
                                    $Mayo = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 6) {
                                    $Junio = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 7) {
                                    $Julio = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 8) {
                                    $Agosto = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 9) {
                                    $Septiembre = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 10) {
                                    $Octubre = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 11) {
                                    $Noviembre = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 12) {
                                    $Diciembre = number_format($Declaraciones1->Total_Impuesto, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
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
                                        <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=11&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>Cedular Actividades Empresariales de Régimen General</strong></a></li>
                                        <li class="active"><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=9&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>Cedular por Arrendamientos</strong></a></li>
                                        <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=10&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>Cedular por Servicios Profesionales</strong></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Impuesto Cedular por Arrendamiento</label><br>		
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
                            <div class="col-xs-12 col-sm-12" align="right"> 		  
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
                                    Total de ingresos obtenidos		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Ingresos" id="Ingresos" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Deducciones autorizadas	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Deducciones" id="Deducciones" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Pérdidas anteriores	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Perdidas" id="Perdidas" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Base del impuesto	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Base">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Base" id="Base"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto determinado		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IDeterminado">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="ImpRet" id="ImpRet"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Pagos provisionales anteriores	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="PagoProv" id="PagoProv" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de Impuesto Retenido	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="TotalRetenido" id="TotalRetenido" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto a cargo		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="LImp_Cargo">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="ACargo" id="ACargo"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto pagado con anterioridad	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Imp_pagado" id="Imp_pagado" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto a cargo	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="LACargo2">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="ACargo2" id="ACargo2"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Saldo a favor	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Saldo_Favor" id="Saldo_Favor"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Detalle del pago</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto Cedular	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Cedular">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Imp_Cedular" id="Imp_Cedular"  required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Actualización	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left"  id="L_Act">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Actualizaciones" id="Actualizaciones" required>
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
                                    Recargos
                                </div>
                                <div class="col-md-3 col-xs-6" align="left"   id="L_Rec">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Recargos" id="Recargos" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Multa por omisión de pago	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Multa_Pagos" id="Multa_Pagos" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Compensación de saldo a favor
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Compensacion" id="Compensacion" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Subtotal	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Subtotal">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="SubTotal" id="SubTotal"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Ajuste por redondeo
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Redondeo">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Redondeo" id="Redondeo"  readonly="readonly">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr> 
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto a pagar	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Total">
                                    <input class="form-control" name="Total_Impuesto" id="Total_Impuesto"  value="0" readonly="readonly">
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
    cli.config.CedularA_1();
    cli.config.CedularA_2();
    cli.config.CedularA_3();
    cli.config.CedularA_4();
    cli.config.CedularA_5();
    cli.config.CedularA_6();
    cli.config.CedularA_7();
    cli.config.CedularA_8();
    cli.config.CedularA_9();
    cli.config.CedularA_10();
    cli.config.CedularA_11();
    cli.config.RecargosCedularA();
</script>

