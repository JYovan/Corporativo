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
<?php echo form_open_multipart(base_url().'index.php/controlador/do_upload2'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">MÓDULO DE DOCUMENTACIÓN Y TRÁMITES
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-2 col-xs-6" id="ID_cliente" align="left">
                                    <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/VG_Referenciados?i=<?php echo $indice ?>'"><img src="<?php echo base_url(); ?>imagenes/Estadistica.png" width="30" height="30" /></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%">
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Menú de búsqueda de trámite y documentación</strong>		
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
                                <div class="col-md-2 col-xs-4" align="right">
                                    <label for="NFolio" class="control-label">No. de folio</label><br>
                                </div>  
                                <div class="col-md-2 col-xs-8" align="left">
                                    <input   type="text" class="form-control" name="Folio" id="Folio" required>	  	
                                </div>
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
                                <div class="col-md-6 col-xs-4" align="right">
                                    <label for="REDSocial" class="control-label">Histórico</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-8" align="left">

                                    <select class="form-control" id="Historico" name="Historico" >
                                        <option value="0">Selecciona</option>
                                        <?php $respuesta = '-';
                                        foreach ($datos as $datos1) {
                                            ?>
                                            <?php
                                            $respuesta = '-';
                                            foreach ($RefTipo as $RefTipo1) {
                                                if ($RefTipo1->id_tipo == $datos1->Tipo) {
                                                    $respuesta = $RefTipo1->dsc_tipo;
                                                }
                                            }
                                            ?>
                                            <option value="<?php echo $datos1->ID; ?>"><?php echo $datos1->Numero . " " . $datos1->Prioridad . " " . $datos1->FechaRecibe . " (" . $respuesta . ")"; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Resultado</strong>		
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=2&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ConsultarRef1();
    cli.config.ConsultarRef2();
</script>

