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

    <?php echo form_open_multipart(base_url() . 'index.php/controlador/Confirmar'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-4" align="left">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-4">
                                <strong style="color:#FFF">Metas</strong>		
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
                                <?php foreach ($Metas as $datos1) { ?>
                                    <div class="col-xs-12 col-sm-12">  
                                        </br>
                                        <?php echo "Meta " . $datos1->ID; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12"> 
                                        <?php echo $datos1->Descripcion; ?>
                                        <button type="button" id="Meta" name="Meta" class="btn btn-lg btn-primary btn-block"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/VerEvidencia?M=<?php echo $datos1->ID ?>&i=<?php echo $indice ?>'">Ver evidencias</button> 
                                        </br> 
                                    </div> 
                                <?php } ?>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-lg btn-primary btn-block"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


