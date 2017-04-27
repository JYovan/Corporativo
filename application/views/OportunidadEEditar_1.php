<!-- configuramos el plugin-->

<div class="container">	
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
            </td>
        </tr>
    </table>
    <?php echo form_open_multipart('controlador/EditarSolicitud'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Actualizar oportunidad de empleo</strong>
                            <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
                        </td>
                    </tr>




                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <label for="Nombre_cliente" class="control-label">Oportunidad de empleo registrada:</label><br>		
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-9 col-sm-9">
                                    <select class="form-control" id="Oportunidad" name="Oportunidad"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Oportunidad as $Oportunidad1) { ?> 
                                            <option value="<?php echo $Oportunidad1->id; ?>"><?php echo $Oportunidad1->Puesto; ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                                <div class="col-xs-3 col-sm-3" id="ID_cliente" align="left">
                                    <button type="submit">
                                        <img src="<?php echo base_url(); ?>imagenes/Actualizar.png" width="30" height="30" />
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>


<table  width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=7&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


