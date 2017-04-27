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

    <?php echo form_open_multipart(base_url().'index.php/controlador/EstLabProyectos'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <?php foreach ($Proyectos as $Proyectos1)
                    
                    ?>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Proyectos de estancia laboral</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-4">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos del proyecto</strong>	
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
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_1" class="control-label">PROYECTISTA DE EDIFICACI&Oacute;N DE INMUEBLES</label> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_1" name="Tema_1" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_1; ?></textarea>
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_2" class="control-label">RESIDENTE DE ADMINISTRACI&Oacute;N DE EDIFICACI&Oacute;N DE INMUEBLES</label> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_2" name="Tema_2" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_2; ?></textarea> 
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_3" class="control-label">RESIDENTE DE MERCADOTECNIA EN LA COMERCIALIZACION DE INMUEBLES</label>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_3" name="Tema_3" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_3; ?></textarea> 	
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_4" class="control-label">RESIDENTE DE ARCHIVONOMIA</label> 
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_4" name="Tema_4" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_4; ?></textarea> 	
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_5" class="control-label">RESIDENTE DE CALIDAD Y MEJORA CONTINUA</label>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_5" name="Tema_5" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_5; ?></textarea> 	
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_6" class="control-label">RESIDENTE DE INOVACIÓN TECNOLÓGICA EN LA EDIFICACION DE INMUEBLES</label>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_6" name="Tema_6" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_6; ?></textarea> 
                                    </br>	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12" >
                                    <label for="Tema_7" class="control-label">RESIDENTE DE TELECOMUNICACIONES</label>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Tema_7" name="Tema_7" rows="3" cols="70%" class="form-control"><?php echo $Proyectos1->Tema_7; ?></textarea> 	
                                    </br>
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-4">
                                </br>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Actualizar información</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>  
</div>


