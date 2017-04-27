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
<?php echo form_open_multipart('controlador/compruebaNvaContrasenia'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td  bgcolor="#ff6600">
                            <div class="col-xs-12 col-sm-12">
                                <label for="Usuario" class="control-label">CREAR USUARIO</label><br>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="row form-group">	  
                                <div class="col-xs-6 col-sm-36" align="right">
                                    <label for="Nombre" class="control-label">Contraseña actual</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input class="form-control" type="password" name="pass" id="pass" required>
                                </div> 
                            </div>  		  
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="Password" class="control-label">Nueva Contraseña</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input class="form-control" type="password" name="password1" id="password1" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="RPassword" class="control-label">Repetir Contraseña</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input  class="form-control" type="password" name="password2" id="password2" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>



                    <tr>
                        <td height="27" colspan="2">
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Cambiar</button>
                            </div>
                        </td>
                    </tr>
                </table>   


            </td>
        </tr>
    </table>
</form>
</div>

