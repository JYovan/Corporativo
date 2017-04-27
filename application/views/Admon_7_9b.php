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

<?php echo form_open_multipart('controlador/do_upload2'); ?>    
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">
                                Visualización de expediente
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-4">
                                    <label for="Nombre" class="control-label">Nombre</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-8">
                                    <select class="form-control" id="Empleado" name="Empleado"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                            <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . ' ' . $USUARIOS1->apaterno . ' ' . $USUARIOS1->amaterno; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Documentos de expediente</strong>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>	 
                            <div class="col-xs-12 col-sm-12" id="Consulta">

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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.InfoPagosP();
</script>

