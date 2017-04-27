<!-- configuramos el plugin-->

<div class="container">	
    <table width="100%">
        <tr>
            <td><h2> 
                    <?php
                    $respuesta = '-';
                    foreach ($USUARIOS as $USUARIOS1) {
                        if ($USUARIOS1->Id == $User) {
                            $respuesta = $USUARIOS1->nombre;
                            $indice = $USUARIOS1->Id;
                        }
                    }
                    echo $respuesta;
                    ?></h2>
            </td>
        </tr>
    </table>

    <?php echo form_open_multipart('controlador/do_upload2'); ?> 

    <!----------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">MÓDULO DE TRÁMITES REFERENCIADOS</h3>
        </div>
        <div class="panel-body"> 
            <fieldset >
                <div class="form-group">
                    <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/VG_Tramite?i=<?php echo $indice ?>'">
                        <img src="<?php echo base_url(); ?>imagenes/Estadistica.png" width="30" height="30" />
                    </button>
                </div> 
                <div class="form-group">
                    <div class="breadcrumb"><h4 class="text-center"> MEN&Uacute; DE B&Uacute;SQUEDA DE TR&Aacute;MITES REFERENCIADOS</h4></div>	 
                </div>
                <div class="form-group">	
                    <div class="col-md-4 col-xs-12">
                        <label for="NFolio" class="control-label">FOLIO</label>
                        <input type="text" class="form-control" name="Folio" id="Folio" required=""/>	  	
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label for="REDSocial" class="control-label">TIPO</label>
                        <select class="form-control" id="Tipo" name="Tipo" required=""> 
                            <?php foreach ($RefTipo as $RefTipo1) { ?> 
                                <option value="<?php echo $RefTipo1->id_tipo; ?>"><?php echo $RefTipo1->dsc_tipo; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4 col-xs-12" >
                        <label for="REDSocial" class="control-label">ESTATUS</label>
                        <select class="form-control" id="Estatus" name="Estatus" required="" > 
                            <?php foreach ($Estatus as $Estatus1) { ?> 
                                <option value="<?php echo $Estatus1->id_estatus; ?>"><?php echo $Estatus1->dsc_estatus; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>  
            </fieldset>
            <br>
            <fieldset>  
                <div class="form-group">
                    <div class="breadcrumb"><h4 class="text-center"> RESULTADO</h4></div>	 
                </div>
                <!----------------------------AJAX------------------------->
                <div class="col-xs-12 col-sm-12" id="Consulta"></div>
                <!----------------------------AJAX------------------------->

                <div class="form-group">	
                    <div class="col-md-4 col-xs-12">
                        <label for="Responsable" class="control-label">
                            ASIGNAR	
                        </label> 
                        <select class="form-control" id="Responsable" name="Responsable"  required>
                            <option value="">Selecciona</option>
                            <?php foreach ($Responsables as $temporal) { ?> 
                                <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                            <?php } ?>
                        </select> 
                    </div>  	 
                    <div class="col-md-4 col-xs-12"><br>   
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-group btn-primary btn-file">
                                    ADJUNTAR <input name="userfile" type="file" required="">
                                </span>
                            </span>
                            <input type="text" class="form-control input-group" readonly="">
                        </div>  	
                    </div> 
                    <div class="col-md-4 col-xs-12"> 
                        <label for="Observaciones" class="control-label">
                            OBSERVACIONES	
                        </label> 
                        <input   type="text" class="form-control" name="Observaciones" id="Observaciones">
                    </div> 
                </div> 
            </fieldset>
            <br>
            <fieldset>
                <div class="form-group">
                    <div class="col-md-4 col-xs-12"> </div> 
                    <div class="col-md-4 col-xs-12"> </div> 

                    <div class="col-md-4 col-xs-12"> 
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Asignar</button>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <script>
        $(document).on('change', '.btn-file :file', function () {
            var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        $(document).ready(function () {
            $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                        log = numFiles > 1 ? numFiles + ' files selected' : label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log)
                        alert(log);
                }

            });
        });
    </script>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!--    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">MÓDULO DE TRÁMITES REFERENCIADOS</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/VG_Tramite?i=<?php echo $indice ?>'"><img src="<?php echo base_url(); ?>imagenes/Estadistica.png" width="30" height="30" /></button>
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
                        <td bgcolor="#99A79A">
                            <div class="col-md-12 col-xs-12">
                                <strong style="color:#FFF">Menú de búsqueda de trámites referenciados</strong>		
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
                            <div class="col-md-12 col-xs-12">	
                                <div class="col-md-2 col-xs-12" align="right">
                                    <label for="NFolio" class="control-label">No. de folio</label><br>
                                </div>  
                                <div class="col-md-2 col-xs-12" align="left">
                                    <input   type="text" class="form-control" name="Folio" id="Folio" >	  	
                                </div>
                                <div class="col-md-2 col-xs-12" align="right">
                                    <label for="REDSocial" class="control-label">Tipo</label><br>		  
                                </div>  		  
                                <div class="col-md-2 col-xs-12" align="left">
                                    <select class="form-control" id="Tipo" name="Tipo" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($RefTipo as $RefTipo1) { ?> 
                                            <option value="<?php echo $RefTipo1->id_tipo; ?>"><?php echo $RefTipo1->dsc_tipo; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2 col-xs-12" align="right">
                                    <label for="REDSocial" class="control-label">Estatus</label><br>		 
                                </div> 
                                <div class="col-md-2 col-xs-12" align="left">
                                    <select class="form-control" id="Estatus" name="Estatus" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Estatus as $Estatus1) { ?> 
                                            <option value="<?php echo $Estatus1->id_estatus; ?>"><?php echo $Estatus1->dsc_estatus; ?></option>
                                        <?php } ?>
                                    </select>
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
                        <td bgcolor="#99A79A" align="center">
                            <div class="col-md-12 col-xs-12">
                                <strong style="color:#FFF">Resultado</strong>		
                            </div>
                        </td>
                    </tr>   
                    <tr>
                        <td>  
                        </td>
                    </tr>
                    <tr>
                        <td> 	
                            <div class="col-xs-12 col-sm-12">  
                                </br>
                                </br>
                                </br>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>	
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        Asignar	
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control" id="Responsable" name="Responsable"  required>
                                            <option value="">Selecciona</option>
                                            <?php foreach ($Responsables as $temporal) { ?> 
                                                <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        Archivo Adjunto	
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12">
                                        Observaciones	
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <input   type="text" class="form-control" name="Observaciones" id="Observaciones">
                                    </div>		
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
                            <div class="col-md-12 col-xs-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Asignar</button>
                            </div>
                        </td>
                    </tr>
                </table>   
            </td>
        </tr>
    </table>-->
</form>

<?php echo form_open_multipart('controlador/View_Asignados'); ?> 
<table   width="100%">
    <tr>
        <td width="20%">
            <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Ver asignados</button>
        </td>
        <td width="60%">

        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/RegresarTramite?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</form>
</div>
<script>
    cli.config.Consultar();
    cli.config.Consultar2();
    cli.config.Consultar3();
</script>

