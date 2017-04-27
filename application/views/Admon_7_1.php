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

<?php echo form_open_multipart('controlador/crearusuario2'); ?>   
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Usuario" class="control-label">Agregar nuevo empleado</label><br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="row form-group">	  
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="Nombre" class="control-label">Nombre(s)</label><br>		  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="left">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="nombre" id="nombre"  required="required">
                                </div> 
                            </div>  		  
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="Apaterno" class="control-label">Apellido Paterno</label><br>		  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="left">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="apaterno" id="apaterno"  required="required">
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="Amaterno" class="control-label">Apellido Materno</label><br>		  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="left">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="amaterno" id="amaterno"  required="required">
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="Mail" class="control-label">E-mail</label><br>		  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="left">
                                    <input  class="form-control" type="mail" name="email" id="email"  required="required">
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="Password" class="control-label">Contraseña</label><br>		  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="left">
                                    <input class="form-control" type="password" name="password1" id="password1"  required="required">
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="RPassword" class="control-label">Repetir Contraseña</label><br>		  	
                                </div>
                                <div class="col-md-6 col-xs-6" align="left">
                                    <input  class="form-control" type="password" name="password2" id="password2" required="required">
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="AreaInterno" class="control-label">Área:</label><br>	
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="AreaInterno" name="AreaInterno"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Area as $Area1) { ?> 
                                            <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
<?php } ?>
                                    </select>
                                    </br>	
                                </div>
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="PuestoInterno" class="control-label">Puesto:</label><br>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="PuestoInterno" name="PuestoInterno"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Puesto as $Puesto1) { ?> 
                                            <option value="<?php echo $Puesto1->id_puesto; ?>"><?php echo $Puesto1->dsc_puesto; ?></option>
<?php } ?>
                                    </select>	
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
                        <td height="27" colspan="2">
                            <div class="col-xs-12 col-sm-12">
                                <button type="submit" class="btn btn-lg btn-primary btn-block" id="user" name="user" value="<?php echo $indice; ?>" >Agregar empleado</button>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

