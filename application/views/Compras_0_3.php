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

<?php echo form_open_multipart(base_url().'index.php/controlador/Cot02'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Modificar las cotizaciones</strong>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Selección la cotización</strong>		
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-4 col-xs-12">
                                    <label for="1" class="control-label">Cotizaciones</label><br>
                                </div>  
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Cotizacion" name="Cotizacion" >
                                        <option value="0">Selecciona</option>
                                            <?php foreach ($Cotizaciones as $Cotizaciones1) { ?> 
                                            <option value="<?php echo $Cotizaciones1->Numero; ?>">
                                                <?php
                                                foreach ($Proyectos as $Proyectos1) {
                                                    if ($Proyectos1->ID == $Cotizaciones1->Proyecto) {
                                                        $Proy = $Proyectos1->Proyecto;
                                                        ?>
            <?php echo " COT-" . $Cotizaciones1->Numero . " " . $Proy; ?></option>
        <?php }
    }
} ?>
                                    </select>
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Continuar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=19&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

