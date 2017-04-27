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
    <?php echo form_open_multipart('controlador/IVA_R21_2'); ?> 

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
                                    $Enero = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 2) {
                                    $Febrero = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 3) {
                                    $Marzo = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 4) {
                                    $Abril = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 5) {
                                    $Mayo = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 6) {
                                    $Junio = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 7) {
                                    $Julio = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 8) {
                                    $Agosto = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 9) {
                                    $Septiembre = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 10) {
                                    $Octubre = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 11) {
                                    $Noviembre = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
                                }

                                if ($mes == 12) {
                                    $Diciembre = number_format($Declaraciones1->Cant_Pagar, 0, '.', ',') . " (" . $Declaraciones1->Anio . ")";
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
                                            <li><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=8&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>IVA P. Moral R21</strong></a></li>
                                            <?php
                                        }
                                        $length = strlen($cliente2->RFC);
                                        if ($length != 12) {
                                            ?>
                                            <li  class="active"><a href='<?php echo base_url(); ?>index.php/controladorCalculo/ubicacion?ID=81&Cl=<?php echo $ID_cliente ?>&i=<?php echo $indice ?>'><strong>IVA P. Física R21</strong></a></li>
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
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Determinación del Pago al Impuesto al Valor Agregado</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>    	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto cobrado	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Imp_Cobrado" id="Imp_Cobrado" required>
                                    <br />
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>    	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto pagado	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Imp_Pagado" id="Imp_Pagado" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>  	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto que le retuvieron	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Imp_Retenido" id="Imp_Retenido" required>
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
                                    A cargo	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ACargo">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="ACargo" id="ACargo" readonly="readonly">
                                    <br />
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>    	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    A favor	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_AFavor">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="AFavor" id="AFavor" readonly="readonly">
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
                                <div class="col-md-3 col-xs-6" align="left"  id="L_Act" >
                                    <input class="form-control" name="Actualizaciones" id="Actualizaciones"  value="0" required>
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
                                <div class="col-md-3 col-xs-6" align="left"  id="L_Rec">
                                    <input class="form-control" name="Recargos" id="Recargos"  value="0" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Multa por corrección
                                </div>
                                <div class="col-md-3 col-xs-6" align="left">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Multas" id="Multas" required>
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
                                <div class="col-md-3 col-xs-6" align="left" id="L_TContr">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Total_Cont" id="Total_Cont" readonly="readonly">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Disminución de contribuciones	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_GastosConIVA">
                                    <input class="form-control" name="Disminucion_Cont" id="Disminucion_Cont"  value="0" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Fecha del pago realizado con anteroridad	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_GastossinIVA">
                                    <input class="form-control" name="FechaRealizado" id="FechaRealizado"  value="<?php echo date("d/m/Y") ?>" readonly="readonly">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Monto pagado con anterioridad
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVAfavor">
                                    <input class="form-control" name="Pagado_Ant" id="Pagado_Ant"  value="0" required>
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Importe pagado en las últimas horas
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVAPagar">
                                    <input class="form-control" name="Imp_UltHoras" id="Imp_UltHoras"  value="0" required>
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>   	
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Cantidad a favor
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Cant_Favor">
                                    <input   type="number" step="0.01" value="0" class="form-control" name="Cant_Favor" id="Cant_Favor" readonly="readonly">
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
                                <div class="col-md-3 col-xs-6" align="left" id="L_Cant_Pagar">
                                    <input   type="number" step="0.01"  value="0" class="form-control" name="Cant_Pagar" id="Cant_Pagar" readonly="readonly">
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
    cli.config.IVA_R21_2_1();
    cli.config.IVA_R21_2_2();
    cli.config.IVA_R21_2_3();
    cli.config.IVA_R21_2_4();
    cli.config.IVA_R21_2_5();
    cli.config.IVA_R21_2_6();
    cli.config.IVA_R21_2_7();
    cli.config.IVA_R21_2_8();
    cli.config.IVA_R21_2_9();
    cli.config.RecargosIVAR21_2();
</script>

