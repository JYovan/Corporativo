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

<?php echo form_open_multipart('controlador/SS_2'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Generar Número Patronal de Identificación Electrónica (NPIE) y Certificado Digital </strong>
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
                            <div class="col-md-9 col-xs-12" id="ID_cliente2">
                                Nombre de la empresa:
                                </br>
                                <select class="form-control" id="ID_cliente" name="ID_cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                        <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
<?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                Fecha:
                                </br>
                                <input  class="form-control" type="text" name="Fecha" id="datepicker"  value="<?php echo date("d/m/Y") ?>">	
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="DatosL" class="control-label">Datos</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Informacion">
                                Información   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="DatosL" class="control-label">
                                    Estado del trámite de generar Número Patronal de Identificación Electrónica (NPIE) y Certificado Digital
                                </label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <blockquote>
                                    <br>
                                    <input type="radio" value="1" name="Estatus" id="Estatus" required/>
                                    En proceso
                                    <br>
                                    <input type="radio" value="2" name="Estatus" id="Estatus" required/>
                                    Concluido
                                    <br>
                                    <input type="radio" value="3" name="Estatus" id="Estatus" required/>
                                    Notificado al área contable 
                                    <br>
                                    <input type="radio" value="4" name="Estatus" id="Estatus" required/>
                                    Notificado al titular de la empresa
                                    <br>
                                    <input type="radio" value="5" name="Estatus" id="Estatus" required/>
                                    Integrado al expediente de la empresa
                                    <br>
                                </blockquote>   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button type="submit" class="btn btn-lg btn-primary btn-block" id="user" name="user" value="<?php echo $indice; ?>" >Cambiar Estatus</button>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=5&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.InformacionSS_2();
</script>

