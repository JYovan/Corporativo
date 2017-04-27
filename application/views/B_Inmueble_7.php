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

<?php echo form_open_multipart('controlador/Fideicomiso'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Datos de Fideicomiso</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Selección de inmueble</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-4 col-xs-12">
                                    <label for="1" class="control-label">Inmueble</label><br>
                                </div>  
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Inmueble" name="Inmueble" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Inmueble as $Inmueble1) { ?> 
                                            <option value="<?php echo $Inmueble1->ID; ?>"><?php echo $Inmueble1->Ubicacion; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
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
                                    <label for="1" class="control-label">Fideicomitente(s):</label><br>
                                    <small>En caso de dos o más personas escriba 
                                        el nombre completo de cada uno 
                                        separado por coma. 
                                    </small>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Fideicomitente" name="Fideicomitente" rows="2" cols="90%" class="form-control"></textarea> 
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Fiduciario" name="Fiduciario" rows="2" cols="90%" class="form-control"></textarea> 
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Fideicomisario" name="Fideicomisario" rows="2" cols="90%" class="form-control"></textarea> 
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
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Delegados" name="Delegados" rows="2" cols="90%" class="form-control"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Depositario:</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Depositario" id="Depositario" >
                                </div>
                            </div>

                        </td>
                    </tr>   
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos del registro</strong>		
                            </div>
                        </td>
                    </tr>  
                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Acto constitutivo del fideicomiso</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <textarea style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" id="Acto" name="Acto" rows="2" cols="90%" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Tomo</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Tomo2" id="Tomo2" >
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de escritura constitutiva</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Numero" id="Numero" >
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
                                    <input type="text" class="form-control" value="<?php echo date("d/m/Y") ?>" name="Fecha" id="datepicker" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="2" class="control-label">Número de contrato</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Contrato" id="Contrato" >
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

