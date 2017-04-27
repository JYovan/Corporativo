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
                                Visualización registro de inmueble
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
                                <strong style="color:#FFF">Menú de búsqueda de inmueble</strong>		
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
                                    <label for="Nombre" class="control-label">Nombre</label><br>		
                                </div>
                                <div class="col-md-6 col-xs-8">
                                    <select class="form-control" id="Nombre" name="Nombre" >
                                        <option value="0">Selecciona</option>
                                        <?php foreach ($Inmuebles as $datos1) { ?> 
                                            <option value="<?php echo $datos1->ID; ?>"><?php echo $datos1->Folio . " " . $datos1->Nombre; ?></option>
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
    cli.config.InmuebleFolio();
    cli.config.InmuebleNombre();
</script>

