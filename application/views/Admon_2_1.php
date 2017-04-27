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
                                Visualización registro de mueble
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
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12" align="left">
                                <strong style="color:#FFF">Menú de búsqueda de mueble</strong>		
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
                                    <label for="F" class="control-label">No. de folio</label><br>
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
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="N" class="control-label">Nombre</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Nombre" name="Nombre" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Muebles as $datos1) { ?> 
                                            <option value="<?php echo $datos1->ID; ?>"><?php echo $datos1->Folio . " " . $datos1->Nombre; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="A" class="control-label">Área</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Area" name="Area">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Area as $Area1) { ?> 
                                            <option value="<?php echo $Area1->id_area; ?>"><?php echo $Area1->dsc_area; ?></option>
<?php } ?>
                                    </select>
                                </div> 
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="R" class="control-label">Responsable</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <select class="form-control" id="Responsable" name="Responsable">
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Responsables as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=8&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.MuebleFolio();
    cli.config.MuebleNombre();
    cli.config.MuebleArea();
    cli.config.MuebleResponsable();
</script>

