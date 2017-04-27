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

<?php echo form_open_multipart('controlador/Rinmueble'); ?>    
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
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Propietario" id="Propietario" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">RFC</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="RFC" id="RFC" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label   for="3" class="control-label">Clave del IFE</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="IFE" id="IFE" >
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
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Calle1" id="Calle1" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Colonia</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Colonia1" id="Colonia1" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Número</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Numero1" id="Numero1" >
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
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Estado1" id="Estado1" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Municipio</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Municipio1" id="Municipio1" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Comunidad</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Comunidad1" id="Comunidad1" >
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
                                    <input type="number" class="form-control" name="CP1" id="CP1" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Teléfono</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Tel1" id="Tel1" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Correo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="email" class="form-control" name="Correo1" id="Correo1" >
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
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Vendedor" id="Vendedor" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label  for="2" class="control-label">RFC</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="RFC2" id="RFC2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Clave del IFE</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="IFE2" id="IFE2" >
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
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Calle2" id="Calle2" required="required">
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Colonia</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Colonia2" id="Colonia2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Número</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Numero2" id="Numero2" >
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
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Estado2" id="Estado2" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Municipio</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Municipio2" id="Municipio2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Comunidad</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Comunidad2" id="Comunidad2" >
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
                                    <input type="number" class="form-control" name="CP2" id="CP2" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Teléfono</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Tel2" id="Tel2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Correo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="email" class="form-control" name="Correo2" id="Correo2" >
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
                                    <select class="form-control" id="Tinmueble" name="Tinmueble" required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Tipo_Inmueble as $Tipo_Inmueble1) { ?> 
                                            <option value="<?php echo $Tipo_Inmueble1->id_Tinmueble; ?>"><?php echo $Tipo_Inmueble1->dsc_Tinmueble; ?></option>
<?php } ?>
                                    </select>
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Ubicacion" name="Ubicacion" rows="2" cols="80%" class="form-control"></textarea> 
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
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Norte" id="Norte" >
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Sur</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Sur" id="Sur" >
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Este</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Este" id="Este" >
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Oeste</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Oeste" id="Oeste" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">    
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Noreste</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Noreste" id="Noreste" >
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Sureste</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Sureste" id="Sureste" >
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Noroeste</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Noroeste" id="Noroeste" >
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <label for="3" class="control-label">Suroeste</label><br>
                                    </div> 
                                    <div class="col-md-8 col-xs-12">
                                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Suroeste" id="Suroeste" >
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
                                    <input type="number" class="form-control" name="Terreno" id="Terreno" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Superficie construida</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" class="form-control" name="Construido" id="Construido" >
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Servidumbres" name="Servidumbres" rows="5" cols="80%" class="form-control"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">  
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Gravámenes</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Gravamenes" name="Gravamenes" rows="5" cols="80%" class="form-control"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">  
                                <div class="col-md-12 col-xs-12">
                                    <label for="3" class="control-label">Otras</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Otras" name="Otras" rows="5" cols="80%" class="form-control"></textarea> 
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
                                    <input type="number" class="form-control" name="Valor" id="Valor" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Valor de venta</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input   type="number" class="form-control" name="Vventa" id="Vventa" >
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
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Tomo" id="Tomo" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Libro</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Libro" id="Libro" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Sección</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Seccion" id="Seccion" required>
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
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Folio" id="Folio" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Numeral registral</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Numeral" id="Numeral" >
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
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Notario" id="Notario" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de Notario</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Nnotario" id="Nnotario" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Partido de competencia</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="text" class="form-control" name="Partido" id="Partido" >
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=17&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


