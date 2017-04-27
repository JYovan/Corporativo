<!-- configuramos el plugin-->

<div class="container">	

    <?php echo form_open_multipart('controlador3/Planeacion'); ?>  
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
                            <strong style="color:#FFF">MÓDULO DE PLANEACIÓN DEL PRODUCTO</strong>
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
                                    <input type="radio" value="P1" name="PlaneacionID" id="PlaneacionID" required/>
                                    Registro de elaboración de proyecto técnico de fabricación
                                    <br>
                                    <input type="radio" value="P2" name="PlaneacionID" id="PlaneacionID" required/>
                                    Diseño de fabricación del producto
                                    <br>
                                    <input type="radio" value="P3" name="PlaneacionID" id="PlaneacionID" required/>
                                    Registro técnico del proceso y fabricación del producto
                                    <br>
                                    <input type="radio" value="P5" name="PlaneacionID" id="PlaneacionID" required/>
                                    Aprobar solicitud
                                    <br>
                                    <input type="radio" value="P7" name="PlaneacionID" id="PlaneacionID" required/>
                                    Visualizar solicitudes aprobadas
                                    <br>
                                    <input type="radio" value="P6" name="PlaneacionID" id="PlaneacionID" required/>
                                    Visualizar procedimiento de producción
                                    <br>
                                    <input type="radio" value="P8" name="PlaneacionID" id="PlaneacionID" required/>
                                    Visualizar costos
                                    <br>
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
            <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

