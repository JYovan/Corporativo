<!-- configuramos el plugin--> 
<?php
$indice = $_SESSION["ID"];
?> 
<div class="container">	 
    <?php echo form_open_multipart(base_url().'index.php/controlador/enviarDirectorio2'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">


                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">REGISTRO</strong>
                            <?php foreach ($informacion as $cliente2)
                                
                                ?>
                            <input  type="hidden" class="form-control" name="Folio" id="Folio" value="<?php echo $cliente2->Folio ?>" readonly="readonly">
                            <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Nombre" class="control-label">Nombre comercial:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Razon" class="control-label">Razón Social:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="RFC" class="control-label">RFC:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="NombreC" id="NombreC" value="<?php echo $cliente2->NombreC ?>" disabled=true>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="RazonS" id="RazonS" value="<?php echo $cliente2->RazonS ?>" disabled=true>	
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="RFC" id="RFC"  value="<?php echo $cliente2->RFC ?>" required>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Representante legal:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="RepresentanteL" id="RepresentanteL" value="<?php echo $cliente2->RepresentanteL ?>" disabled=true>	
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="RepresentanteL" class="control-label">Resposable:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <?php
                                $resultado = "-";
                                foreach ($Responsables as $arreglo) {
                                    if ($cliente2->id_responsable == $arreglo->Id) {
                                        $resultado = $arreglo->nombre . " " . $arreglo->apaterno . " " . $arreglo->amaterno;
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="Responsable1a" id="Responsable1a" value="<?php echo $resultado ?>" disabled=true>
                                <input  type="hidden" class="form-control" name="Responsable1" id="Responsable1" value="<?php echo $cliente2->id_responsable ?>" readonly="readonly">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Tipo-cliente" class="control-label">Actualizar responsable por:</label><br>		
                            </div>
                        </td>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" >
                                <select class="form-control" id="ResponsableAct" name="ResponsableAct" >
                                    <option value="20">Seleccionar</option>
                                    <?php foreach ($Responsables as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Sucursal" class="control-label">Sucursal:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="Sucursal" id="Sucursal" value="<?php echo $cliente2->Sucursal ?>" >	
                            </div>
                        </td>
                    </tr>



                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Cliente" class="control-label">Tipo de empresa:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="cliente2">
                                <?php
                                $r = 0;
                                foreach ($cliente as $arreglo) {
                                    if ($cliente2->cliente == $arreglo->id_cliente) {
                                        $resultado = $arreglo->dsc_cliente;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="cliente" id="cliente" value="<?php echo $resultado ?>" disabled=true>
                            </div>
                        </td>
                    </tr>  

                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Tipo-cliente" class="control-label">Régimen de la empresa:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Tipo_cliente2">
                                <?php
                                $r = 0;
                                foreach ($Tipo_cliente as $arreglo) {
                                    if ($cliente2->Tipo_cliente == $arreglo->id_Tipo_cliente) {
                                        $resultado = $arreglo->dsc_Tipo_cliente;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="Tipo_cliente" id="Tipo_cliente" value="<?php echo $resultado ?>" disabled=true>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="SubTipo-cliente" class="control-label">Grupo de actividad económica:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="SubTipo_cliente2">
                                <?php
                                $r = 0;
                                foreach ($SubTipo_cliente as $arreglo) {
                                    if ($cliente2->SubTipo_cliente == $arreglo->id_SubTipo_cliente) {
                                        $resultado = $arreglo->dsc_SubTipo_cliente;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="SubTipo_cliente" id="SubTipo_cliente" value="<?php echo $resultado ?>" disabled=true>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="RegimenJ" class="control-label">CURP:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="FormaJ" class="control-label">Régimen jurídico:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="AmbitoA" class="control-label">Forma jurídica:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">  
                                <input  class="form-control" type="text" name="CURP" id="CURP" value="<?php echo $cliente2->CURP ?>" >	
                            </div>
                            <div class="col-xs-4 col-sm-4">  
                                <?php
                                $r = 0;
                                foreach ($Regimen as $arreglo) {
                                    if ($cliente2->RegimenJ == $arreglo->id_regimen) {
                                        $resultado = $arreglo->dsc_regimen;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="RegimenJ" id="RegimenJ" value="<?php echo $resultado ?>" disabled=true>	
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <?php
                                $r = 0;
                                foreach ($Forma as $arreglo) {
                                    if ($cliente2->FormaJ == $arreglo->id_forma) {
                                        $resultado = $arreglo->dsc_forma;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?> 
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="FormaJ" id="FormaJ" value="<?php echo $resultado ?>" disabled=true>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Tamanio" class="control-label">Ámbito de actuación:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Sector" class="control-label">Tamaño:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Clasificacion" class="control-label">Sector:</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-4 col-sm-4">
                                <?php
                                $r = 0;
                                foreach ($Ambito as $arreglo) {
                                    if ($cliente2->AmbitoA == $arreglo->id_ambito) {
                                        $resultado = $arreglo->dsc_ambito;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="AmbitoA" id="AmbitoA" value="<?php echo $resultado ?>" disabled=true>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <?php
                                $r = 0;
                                foreach ($Tamanio as $arreglo) {
                                    if ($cliente2->Tamanio == $arreglo->id_tamanio) {
                                        $resultado = $arreglo->dsc_tamanio;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="Tamanio" id="Tamanio" value="<?php echo $resultado ?>" disabled=true>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <?php
                                $r = 0;
                                foreach ($Sector as $arreglo) {
                                    if ($cliente2->Sector == $arreglo->id_sector) {
                                        $resultado = $arreglo->dsc_sector;
                                        $r = 1;
                                    }if ($r == 0) {
                                        $resultado = "-";
                                    }
                                }
                                ?>
                                <input  style="text-transform:uppercase" class="form-control" type="text" name="Sector" id="Sector" value="<?php echo $resultado ?>" disabled=true>
                                </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="Rama" class="control-label">Rama:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-12 col-sm-12">
                                            <?php
                                            $r = 0;
                                            foreach ($Rama as $arreglo) {
                                                if ($cliente2->Rama == $arreglo->id_rama) {
                                                    $resultado = $arreglo->dsc_rama;
                                                    $r = 1;
                                                }if ($r == 0) {
                                                    $resultado = "-";
                                                }
                                            }
                                            ?>
                                            <input  style="text-transform:uppercase" class="form-control" type="text" name="Rama" id="Rama" value="<?php echo $resultado ?>" disabled=true>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td  bgcolor="#99A79A">
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="DatosL" class="control-label">Datos de domicilio</label><br>		
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <div class="col-xs-3 col-sm-3">
                                            <label for="Calle" class="control-label">Calle:</label><br>		
                                        </div>
                                        <div class="col-xs-3 col-sm-3">
                                            <label for="Numero" class="control-label">No.:</label><br>		
                                        </div>
                                        <div class="col-xs-3 col-sm-3">
                                            <label for="Colonia" class="control-label">Colonia:</label><br>		
                                        </div>
                                        <div class="col-xs-3 col-sm-3">
                                            <label for="CP" class="control-label">CP:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-3 col-sm-3">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Calle" id="Calle"  value="<?php echo $cliente2->Calle ?>" required>	
                                        </div>
                                        <div class="col-xs-3 col-sm-3">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="No" id="No"  value="<?php echo $cliente2->No ?>" required>
                                        </div>
                                        <div class="col-xs-3 col-sm-3">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Colonia" id="Colonia"  value="<?php echo $cliente2->Colonia ?>" required>
                                        </div>
                                        <div class="col-xs-3 col-sm-3">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CP" id="CP"  value="<?php echo $cliente2->CP ?>" required>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Pais" class="control-label">País:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Estado" class="control-label">Estado:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Ciudad" class="control-label">Ciudad:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4" id="Pais2">
                                            <?php
                                            $r = 0;
                                            foreach ($Pais as $arreglo) {
                                                if ($cliente2->Pais == $arreglo->id_pais) {
                                                    $resultado = $arreglo->dsc_pais;
                                                    $r = 1;
                                                }if ($r == 0) {
                                                    $resultado = "-";
                                                }
                                            }
                                            ?>
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Pais" id="Pais"  value="<?php echo $resultado ?>" disabled=true>
                                        </div>
                                        <div class="col-xs-4 col-sm-4" id="Estado2">
                                            <?php
                                            $r = 0;
                                            foreach ($Estado as $arreglo) {
                                                if ($cliente2->Estado == $arreglo->id_estado) {
                                                    $resultado = $arreglo->dsc_estado;
                                                    $r = 1;
                                                }if ($r == 0) {
                                                    $resultado = "-";
                                                }
                                            }
                                            ?>
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Estado" id="Estado"  value="<?php echo $resultado ?>" disabled=true>
                                        </div>
                                        <div class="col-xs-4 col-sm-4" id="Ciudad2">
                                            <?php
                                            $r = 0;
                                            foreach ($Ciudad as $arreglo) {
                                                if ($cliente2->Ciudad == $arreglo->id_ciudad) {
                                                    $resultado = $arreglo->dsc_ciudad;
                                                    $r = 1;
                                                }if ($r == 0) {
                                                    $resultado = "-";
                                                }
                                            }
                                            ?>
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Ciudad" id="Ciudad"  value="<?php echo $resultado ?>" disabled=true>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Lada" class="control-label">Lada:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Telefono" class="control-label">Teléfono:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Pagina" class="control-label">Página web:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Lada" id="Lada" value="<?php echo $cliente2->Lada ?>"  required>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Tel" id="Tel" value="<?php echo $cliente2->Tel ?>"  required>
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="Pagina" id="Pagina" value="<?php echo $cliente2->Pagina ?>" >
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td  bgcolor="#99A79A">
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="Redes" class="control-label">Redes Sociales</label><br>		
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row form-group">	  
                                            <div class="col-xs-6 col-sm-6" align="center">
                                                <label for="REDSocial" class="control-label">Red Social</label><br>		  	
                                            </div>
                                            <div class="col-xs-6 col-sm-6" align="center">
                                                <label for="Correo" class="control-label">Correo Electrónico</label><br>		  	
                                            </div>		  
                                        </div>
                                        <div class="row form-group">	  
                                            <div class="col-xs-6 col-sm-6" align="center">
                                                <label for="facebook" class="control-label">Facebook:</label><br>		  	
                                            </div>
                                            <div class="col-xs-6 col-sm-6">		  	
                                                <input class="form-control" type="text" id="facebook" name="facebook" value="<?php echo $cliente2->facebook ?>" >		  	
                                            </div>		  
                                        </div>
                                        <div class="row form-group">	  
                                            <div class="col-xs-6 col-sm-6" align="center">
                                                <label for="twitter" class="control-label">Twitter:</label><br>		  	
                                            </div>
                                            <div class="col-xs-6 col-sm-6">		  	
                                                <input class="form-control" type="text" id="twitter" name="twitter" value="<?php echo $cliente2->twitter ?>"  >		  	
                                            </div>		  
                                        </div>
                                        <div class="row form-group">	  
                                            <div class="col-xs-6 col-sm-6" align="center">
                                                <label for="linkedin" class="control-label">LinkedIn:</label><br>		  	
                                            </div>
                                            <div class="col-xs-6 col-sm-6">		  	
                                                <input class="form-control" type="text" id="linkedin" name="linkedin" value="<?php echo $cliente2->linkedin ?>"  >		  	
                                            </div>		  
                                        </div>
                                        <div class="row form-group">	  
                                            <div class="col-xs-6 col-sm-6" align="center">
                                                <label for="google" class="control-label">Google+:</label><br>		  	
                                            </div>
                                            <div class="col-xs-6 col-sm-6">		  	
                                                <input class="form-control" type="text" id="google" name="google"  value="<?php echo $cliente2->google ?>" >		  	
                                            </div>		  
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td  bgcolor="#99A79A">
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="Datos" class="control-label">Datos de contacto</label><br>		
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-6 col-sm-6">
                                            <label for="Contacto" class="control-label">Nombre del contacto:</label><br>		
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <label for="Profesion" class="control-label">Profesión:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-6 col-sm-6">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Contacto" id="Contacto" value="<?php echo $cliente2->Contacto ?>"  required>		
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Profesion" id="Profesion" value="<?php echo $cliente2->Profesion ?>"  required>	
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-6 col-sm-6">
                                            <label for="Cargo" class="control-label">Cargo o puesto:</label><br>		
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <label for="Correo" class="control-label">Correo:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-6 col-sm-6">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Puesto" id="Puesto" value="<?php echo $cliente2->Puesto ?>"  required>		
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <input  class="form-control" type="email" name="Correo" id="Correo" value="<?php echo $cliente2->Correo ?>"  required>	
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Lada2" class="control-label">Lada:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Telefono2" class="control-label">Teléfono:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Ext" class="control-label">Ext:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="C_Lada" id="C_Lada" value="<?php echo $cliente2->C_Lada ?>"  >		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="C_Tel" id="C_Tel" value="<?php echo $cliente2->C_Tel ?>"  >
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="C_Ext" id="C_Ext" value="<?php echo $cliente2->C_Ext ?>" >
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td  bgcolor="#99A79A">
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="Servicios" class="control-label">Confidenciales</label><br>		
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Lada" class="control-label">Contraseña:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Telefono" class="control-label">CIEC:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Pagina" class="control-label">NIP:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="Contrasenia" id="Contrasenia" value="<?php echo $cliente2->Contrasenia ?>"  >		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input class="form-control" type="text" name="CIEC" id="CIEC" value="<?php echo $cliente2->CIEC ?>"  >
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="NIP" id="NIP" value="<?php echo $cliente2->NIP ?>" >
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Lada" class="control-label">CIEC fortalecida:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Telefono" class="control-label">Contraseña clave privada FIEL:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Pagina" class="control-label">Contraseña del sello digital:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <input class="form-control" type="text" name="CIECfort" id="CIECfort" value="<?php echo $cliente2->CIEC_fortalecida ?>"  >		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input class="form-control" type="text" name="ContraseniaCIEC" id="ContraseniaCIEC" value="<?php echo $cliente2->Cont_clave_fiel ?>"  >
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="ContraseniaSello" id="ContraseniaSello" value="<?php echo $cliente2->Cont_sello_digital ?>" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Lada" class="control-label">Usuario del Seguro Social:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Telefono" class="control-label">Clave del Seguro Social:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Pagina" class="control-label"> </label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="UsuarioITSE" id="UsuarioITSE" value="<?php echo $cliente2->UsuarioITSE ?>" >	
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="ContraseniaITSE" id="ContraseniaITSE" value="<?php echo $cliente2->ContraseniaITSE ?>" >
                                        </div>
                                        <div class="col-xs-4 col-sm-4">

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Lada" class="control-label">Fecha de inicio de operación (Año):</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Telefono" class="control-label">Fecha de último cambio de régimen:</label><br>		
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <label for="Pagina" class="control-label"> </label><br>		
                                        </div>
                                    </td>
                                </tr>    
                                <tr>
                                    <td>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="Antiguedad" id="datepicker" value="<?php echo $cliente2->Antiguedad ?>" >	
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <input  class="form-control" type="text" name="PagoDespacho" id="datepicker2" value="<?php echo $cliente2->PagoDespacho ?>" >
                                        </div>
                                        <div class="col-xs-4 col-sm-4">

                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="col-xs-12 col-sm-12">
                                            <label for="RepresentanteL" class="control-label">Observaciones:</label><br>		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div class="col-xs-12 col-sm-12">
                                            <input  class="form-control" type="text" name="Observaciones" id="Observaciones" value="<?php echo $cliente2->Observaciones ?>" >
                                        </div>
                                    </td>
                                </tr>




                                <tr>
                                    <td>
                                        <div class="col-xs-12 col-sm-12">
                                            <button class="btn btn-lg btn-primary   btn-block" type="submit" >Registrar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlEmpresa/'">Regresar</button>
        </td>
    </tr>
</table>

</div>
<script>
    cli.config.tipocliente();
    cli.config.Subtipocliente();
    cli.config.Estado();
    cli.config.Ciudad();
</script>

