<!-- configuramos el plugin-->

<div class="container">	

    <?php echo form_open_multipart('controlador/Comercializacion'); ?>  
    <table width="100%" border="1" bordercolor="#FF6633">
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

                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">MÓDULO DE COMERCIALIZACIÓN</strong>
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
                                <blockquote>
                                    <br>
                                    <input type="radio" value="COM_21" name="COMID" id="COMID" required/>
                                    Datos de la promesa de compraventa
                                    <br>
                                    <input type="radio" value="COM_22" name="COMID" id="COMID" required/>
                                    Revisión de expediente para compraventa
                                    <br>
                                </blockquote>   
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
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
    </tr>
    <tr>
        <td width="20%" align="right">  
            <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

