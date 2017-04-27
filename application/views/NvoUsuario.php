<!-- configuramos el plugin-->

<div class="container">	

    <?php echo form_open_multipart('controlador/crearusuario'); ?> 

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
                                    <label for="Nombre" class="control-label">Nombre(s)</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="nombre" id="nombre" required>
                                </div> 
                            </div>  		  
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="Apaterno" class="control-label">Apellido Paterno</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="apaterno" id="apaterno" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="Amaterno" class="control-label">Apellido Materno</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="amaterno" id="amaterno" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="Mail" class="control-label">E-mail</label><br>		  	
                                </div>
                                <div class="col-xs-6 col-sm-6" align="left">
                                    <input  class="form-control" type="mail" name="email" id="email" required>
                                </div>  		  
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row form-group">	  		  
                                <div class="col-xs-6 col-sm-6" align="right">
                                    <label for="Password" class="control-label">Contraseña</label><br>		  	
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit" >Crear</button>
                            </div>
                        </td>
                    </tr>
                </table>   


            </td>
        </tr>
    </table>
</form>
</div>

