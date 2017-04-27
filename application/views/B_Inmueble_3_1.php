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

    <?php echo form_open_multipart('controlador/Rinmueble2'); ?>    
<?php foreach ($Inmueble as $Inmueble1) { ?>   
        <table width="100%" border="1" bordercolor="#FF6633">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td bgcolor="#ff6600" align="center">
                                <strong style="color:#FFF">Registro de Inmueble para Edificación</strong>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#99A79A">
                                <div class="col-xs-12 col-sm-12">
                                    <strong style="color:#FFF">Datos de las partes</strong>		
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo $Inmueble1->ID ?>" type="hidden" class="form-control" name="ID" id="ID" required>
                                    </br>		
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Nombre del propietario</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Propietario ?>" type="text" class="form-control" name="Propietario" id="Propietario" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">RFC</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->RFC ?>" type="text" class="form-control" name="RFC" id="RFC" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Clave del IFE</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->IFE ?>" type="text" class="form-control" name="IFE" id="IFE" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    Domicilio
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Calle</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Calle1 ?>" type="text" class="form-control" name="Calle1" id="Calle1" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Colonia</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Colonia1 ?>" type="text" class="form-control" name="Colonia1" id="Colonia1" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Número</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Numero1 ?>" type="text" class="form-control" name="Numero1" id="Numero1" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Estado</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Estado1 ?>" type="text" class="form-control" name="Estado1" id="Estado1" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Municipio</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Municipio1 ?>" type="text" class="form-control" name="Municipio1" id="Municipio1" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Comunidad</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Comunidad1 ?>" type="text" class="form-control" name="Comunidad1" id="Comunidad1" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">C.P.</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->CP1 ?>" type="number" class="form-control" name="CP1" id="CP1" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Teléfono</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Tel1 ?>"  type="text" class="form-control" name="Tel1" id="Tel1" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Correo</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Correo1 ?>"  type="email" class="form-control" name="Correo1" id="Correo1" >
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
                            <td>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Nombre del vendedor</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Vendedor ?>"  type="text" class="form-control" name="Vendedor" id="Vendedor" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">RFC</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->RFC2 ?>"  type="text" class="form-control" name="RFC2" id="RFC2" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Clave del IFE</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->IFE2 ?>"  type="text" class="form-control" name="IFE2" id="IFE2" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    Domicilio
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Calle</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Calle2 ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Calle2" id="Calle2" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Colonia</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Colonia2 ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Colonia2" id="Colonia2" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Número</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Numero2 ?>" type="text" class="form-control" name="Numero2" id="Numero2" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Estado</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Estado2 ?>" type="text" class="form-control" name="Estado2" id="Estado2" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Municipio</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Municipio2 ?>" type="text" class="form-control" name="Municipio2" id="Municipio2" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Comunidad</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Comunidad2 ?>"  type="text" class="form-control" name="Comunidad2" id="Comunidad2" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">C.P.</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->CP2 ?>" type="number" class="form-control" name="CP2" id="CP2" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Teléfono</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Tel2 ?>"  type="text" class="form-control" name="Tel2" id="Tel2" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Correo</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Correo2 ?>" type="email" class="form-control" name="Correo2" id="Correo2" >
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
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    Descripción del inmueble
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">	
                                    <div class="col-md-4 col-xs-12">
                                        <label for="1" class="control-label">Tipo de inmueble</label><br>
                                    </div>  
                                    <div class="col-md-4 col-xs-12">
                                        <?php
                                        foreach ($Tipo_Inmueble as $Tipo_Inmueble1) {
                                            if ($Tipo_Inmueble1->id_Tinmueble == $Inmueble1->Tinmueble) {
                                                $resultado = $Tipo_Inmueble1->dsc_Tinmueble;
                                            }
                                        }
                                        ?>

                                        <input  value="<?php echo $resultado ?>" type="text" class="form-control" name="Tinmueble" id="Tinmueble" readonly="readonly">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-6 col-xs-12">  
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Ubicación</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Ubicacion" name="Ubicacion" rows="2" cols="80%" class="form-control"><?php echo $Inmueble1->Ubicacion ?></textarea> 
                                    </div>
                                </div>
                            </td>
                        </tr>   
                        <tr>
                            <td>    
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Colindancias</label><br>
                                </div>
                                <div class="col-md-6 col-xs-12">    
                                    <div class="col-md-12 col-xs-12">
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Norte</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Norte ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Norte" id="Norte" >
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Sur</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Sur ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Sur" id="Sur" >
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Este</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Este ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Este" id="Este" >
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Oeste</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Oeste ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Oeste" id="Oeste" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">    
                                    <div class="col-md-12 col-xs-12">
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Noreste</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Noreste ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Noreste" id="Noreste" >
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Sureste</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Sureste ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Sureste" id="Sureste" >
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Noroeste</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Noroeste ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Noroeste" id="Noroeste" >
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <label for="3" class="control-label">Suroeste</label><br>
                                        </div> 
                                        <div class="col-md-8 col-xs-12">
                                            <input value="<?php echo $Inmueble1->Suroeste ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Suroeste" id="Suroeste" >
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Superficie del terreno</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Terreno ?>" step="0.01" type="number" class="form-control" name="Terreno" id="Terreno" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Superficie construida</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Construido ?>" type="number" class="form-control" step="0.01" name="Construido" id="Construido" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    </br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    Condiciones bajo las que se encuentra
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-4 col-xs-12">  
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Servidumbres</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea id="Servidumbres" name="Servidumbres" rows="5" cols="80%" class="form-control"><?php echo $Inmueble1->Servidumbres ?></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">  
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Gravámenes</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea id="Gravamenes" name="Gravamenes" rows="5" cols="80%" class="form-control"><?php echo $Inmueble1->Gravamenes ?></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">  
                                    <div class="col-md-12 col-xs-12">
                                        <label for="3" class="control-label">Otras</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea id="Otras" name="Otras" rows="5" cols="80%" class="form-control">
    <?php echo $Inmueble1->Otras ?>
                                        </textarea> 
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    Precio del bien
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Valor del bien</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Valor ?>" type="number" class="form-control" name="Valor" id="Valor" step="0.01" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Valor de venta</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Vventa ?>" type="number" class="form-control" name="Vventa" id="Vventa" step="0.01">
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    Datos del inmueble en el  registro público de la propiedad
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Tomo</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Tomo ?>" type="text" class="form-control" name="Tomo" id="Tomo" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Libro</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Libro ?>" type="text" class="form-control" name="Libro" id="Libro" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Sección</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Seccion ?>" type="text" class="form-control" name="Seccion" id="Seccion" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Folio</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Folio ?>" type="text" class="form-control" name="Folio" id="Folio" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Numeral registral</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Numeral ?>" type="text" class="form-control" name="Numeral" id="Numeral" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Nombre del Notario Público</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Notario ?>" type="text" class="form-control" name="Notario" id="Notario" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Número de Notario</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Nnotario ?>" type="text" class="form-control" name="Nnotario" id="Nnotario" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Partido de competencia</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Partido ?>" type="text" class="form-control" name="Partido" id="Partido" >
                                    </div>
                                </div>
                            </td>
                        </tr>












                        <tr>
                            <td bgcolor="#99A79A">
                                <div class="col-xs-12 col-sm-12">
                                    <strong style="color:#FFF">Datos de compraventa</strong>		
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Nombre del Notario Público</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Notario2 ?>" type="text" class="form-control" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" name="Notario2" id="Notario2" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Número de Notario</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Nnotario2 ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Nnotario2" id="Nnotario2" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Partido de competencia</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Partido2 ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Partido2" id="Partido2" >
                                    </div>
                                </div>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Nombre del comprador</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <?php
                                        $respuesta = '-';
                                        foreach ($USUARIOS as $USUARIOS2) {
                                            if ($USUARIOS2->Id == $Inmueble1->Comprador) {
                                                $respuesta = $USUARIOS2->nombre . $USUARIOS2->apaterno . $USUARIOS2->amaterno;
                                            }
                                        }
                                        ?>
                                        <input  value="<?php echo $respuesta ?>" class="form-control" name="Comprador" id="Comprador" readonly="readonly">
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
                            <td>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Fecha de la compraventa</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->FechaCompraVenta ?>" style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="FechaCompraVenta" id="datepicker" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Monto de la operación</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->Monto ?>"  type="number" step="0.01" class="form-control" name="Monto" id="Monto" >
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Modalidad de la Compraventa</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  value="<?php echo $Inmueble1->Modalidad ?>" type="text" class="form-control" name="Modalidad" id="Modalidad" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Forma de pago</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input value="<?php echo $Inmueble1->FormaPago ?>"  type="number" step="0.01" class="form-control" name="FormaPago" id="FormaPago" readonly="readonly">
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    </br>
                                </div>
                            </td>
                        </tr>   
                        <tr>
                            <td>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-6 col-xs-12">
                                        <label for="1" class="control-label">Gastos de Impuestos erogados</label><br>
                                    </div>  
                                    <div class="col-md-6 col-xs-12">
                                        <input  type="number" value="<?php echo $Inmueble1->Impuestos ?>" step="0.01" class="form-control" name="Impuestos" id="Impuestos" required>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-6 col-xs-12">
                                        <label for="1" class="control-label">Gastos Registrales</label><br>
                                    </div>  
                                    <div class="col-md-6 col-xs-12">
                                        <input type="number"step="0.01" value="<?php echo $Inmueble1->GastosRegistrales ?>" class="form-control" name="GastosRegistrales" id="GastosRegistrales" required>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-6 col-xs-12">
                                        <label for="1" class="control-label">Gastos Notariales</label><br>
                                    </div>  
                                    <div class="col-md-6 col-xs-12">
                                        <input  type="number"step="0.01" value="<?php echo $Inmueble1->GastosNotariales ?>" class="form-control" name="GastosNotariales" id="GastosNotariales" required>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-md-6 col-xs-12">	
                                    <div class="col-md-6 col-xs-12">
                                        <label for="1" class="control-label">Fecha </label>
                                    </div>  
                                    <div class="col-md-6 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo $Inmueble1->FechaLugarEntrega ?>" type="text" class="form-control" name="FechaLugarEntrega" id="datepicker2" required>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#99A79A">
                                <div class="col-xs-12 col-sm-12">
                                    <strong style="color:#FFF">Datos de fideicomiso</strong>		
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Fideicomitente(s):</label><br>
                                        <small>En caso de dos o más personas escriba 
                                            el nombre completo de cada uno 
                                            separado por coma. 
                                        </small>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Fideicomitente" name="Fideicomitente" rows="2" cols="90%" class="form-control"><?php echo $Inmueble1->Fideicomitente ?></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Fiduciario(s):</label><br>
                                        <small>En caso de dos o más personas escriba 
                                            el nombre completo de cada uno 
                                            separado por coma. 
                                        </small>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Fiduciario" name="Fiduciario" rows="2" cols="90%" class="form-control"><?php echo $Inmueble1->Fiduciario ?></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Fideicomisario(s):</label><br>
                                        <small>En caso de dos o más personas escriba 
                                            el nombre completo de cada uno 
                                            separado por coma. 
                                        </small>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Fideicomisario" name="Fideicomisario" rows="2" cols="90%" class="form-control"><?php echo $Inmueble1->Fideicomisario ?></textarea> 
                                    </div>
                                </div>
                            </td>
                        </tr>  

                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Delegados fiduciarios:</label><br>
                                        <small>En caso de dos o más personas escriba 
                                            el nombre completo de cada uno 
                                            separado por coma. 
                                        </small>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Delegados" name="Delegados" rows="2" cols="90%" class="form-control"><?php echo $Inmueble1->Delegados ?></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Depositario:</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo $Inmueble1->Depositario ?>" type="text" class="form-control" name="Depositario" id="Depositario" >
                                    </div>
                                </div>

                            </td>
                        </tr>   
                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Acto constitutivo del fideicomiso:</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Acto" name="Acto" rows="2" cols="90%" class="form-control"><?php echo $Inmueble1->Acto ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Tomo</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo $Inmueble1->Tomo2 ?>" type="text" class="form-control" name="Tomo2" id="Tomo2" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Número de escritura constitutiva</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" value="<?php echo $Inmueble1->Numero ?>" type="text" class="form-control" name="Numero" id="Numero" >
                                    </div>
                                </div>
                            </td>
                        </tr> 

                        <tr>
                            <td> 
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="1" class="control-label">Fecha</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" class="form-control" name="Fecha" id="datepicker3" value="<?php echo $Inmueble1->Fecha ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">	
                                    <div class="col-md-12 col-xs-12">
                                        <label for="2" class="control-label">Número de contrato</label><br>
                                    </div>  
                                    <div class="col-md-12 col-xs-12">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Contrato" id="Contrato" value="<?php echo $Inmueble1->Contrato ?>" >
                                    </div>
                                </div>
                            </td>
                        </tr> 


                        <tr>
                            <td>
                                <div class="col-md-12 col-xs-12">  
                                    </br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Actualizar</button>
                                </div>
                            </td>
                        </tr>
                    </table>   
                </td>
            </tr>
        </table>
<?php } ?>   
</form>

<table width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


