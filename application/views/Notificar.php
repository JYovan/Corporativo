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
    <?php echo form_open_multipart('controlador/Enviar_mail2'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">PLATAFORMA INFORMÁTICA<BR />
                                MÓDULO DE NOTIFICACIÓN
                            </strong>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                Información del cliente
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

                            foreach ($DeclaracionesSN as $Declaraciones1) {
                                $mes = $Declaraciones1->Mes;
                                if ($mes == 1) {
                                    $Enero = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Enero = 0;
                                }
                                if ($mes == 2) {
                                    $Febrero = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Febrero = 0;
                                }
                                if ($mes == 3) {
                                    $Marzo = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Marzo = 0;
                                }
                                if ($mes == 4) {
                                    $Abril = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Abril = 0;
                                }
                                if ($mes == 5) {
                                    $Mayo = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Mayo = 0;
                                }
                                if ($mes == 6) {
                                    $Junio = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Junio = 0;
                                }
                                if ($mes == 7) {
                                    $Julio = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Julio = 0;
                                }
                                if ($mes == 8) {
                                    $Agosto = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Agosto = 0;
                                }
                                if ($mes == 9) {
                                    $Septiembre = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Septiembre = 0;
                                }
                                if ($mes == 10) {
                                    $Octubre = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Octubre = 0;
                                }
                                if ($mes == 11) {
                                    $Noviembre = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Noviembre = 0;
                                }
                                if ($mes == 12) {
                                    $Diciembre = $Declaraciones1->Total . " (" . $Declaraciones1->Fecha . ")";
                                } else {
                                    $Diciembre = 0;
                                }
                            }
                            ?>
                            <input  type="hidden" name="Folio" id="Folio" value="<?php echo $Folio ?>">
                            <input  type="hidden" name="Anio" id="Anio" value="<?php echo date("y") ?>">
                        </td>
                    </tr>




                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Redes" class="control-label">Totales</label><br>		
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
                                    Impuesto Sobre la Renta	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_ISR">
                                    <input class="form-control" name="ISR" id="ISR"  value="-">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto al Valor Agregado	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_IVA">
                                    <input class="form-control" name="IVA" id="IVA"  value="-">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto Sobre Nómina		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Nomina">
                                    <input class="form-control" name="NOMINA" id="NOMINA"  value="-">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto Cedular		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_CEDULAR">
                                    <input class="form-control" name="CEDULAR" id="CEDULAR"  value="-">
                                    <br />
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Impuesto sobre Hospedaje	
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Hospedaje">
                                    <input class="form-control" name="HOSPEDAJE" id="HOSPEDAJE"  value="-">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de Impuestos Federales		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Federales">
                                    <input class="form-control" name="FEDERALES" id="FEDERALES"  value="-">
                                    <br />
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total de Impuestos Estatales		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Estatales">
                                    <input class="form-control" name="ESTATALES" id="ESTATALES"  value="-">
                                    <br />
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">  
                                <div class="col-md-6 col-xs-6" align="right">
                                    Total a Pagar		
                                </div>
                                <div class="col-md-3 col-xs-6" align="left" id="L_Total">
                                    <input class="form-control" name="TOTAL" id="TOTAL"  value="-">
                                    <br />
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
                                <button type="submit" id="user" name="user" class="btn btn-primary btn-block"  value="<?php echo $indice; ?>">Enviar mail</button>
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
    cli.config.Notificar();
</script>

