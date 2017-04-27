<!-- configuramos el plugin-->

<div class="container">	

    <?php echo form_open_multipart('controlador/Cotizaciones'); ?>  
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
                            <strong style="color:#FFF">Generar Cotizaciones</strong>
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
                                    <input type="radio" value="COT1" name="ComprasID" id="ComprasID" required/>
                                    Generar nueva cotización
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

<?php echo form_open_multipart('controlador/Regresar'); ?>     
<table  width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>

