<!-- configuramos el plugin--> 
    <?php
    $respuesta = '-';
    foreach ($USUARIOS as $USUARIOS1) {
        if ($USUARIOS1->Id == $User) {
            $respuesta = $USUARIOS1->nombre;
            $indice = $USUARIOS1->Id;
        }
    } 
    ?>  
    <div class="row">	  
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Asignación de trámite</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open_multipart('controlador/SegumientoT'); ?> 
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-3 col-xs-12" align="right">
                            <label for="Cliente" class="control-label">Desarrollo inmobiliario</label><br>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <select class="form-control" id="Proyectos" name="Proyectos" >
                                <option value="0">Selecciona</option>
                                <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                    <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                                <?php } ?>
                            </select>
                            </br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12" id="ResultDesarrollo">
                        <div class="col-md-3 col-xs-6" align="right">
                            <label for="NombreActividad" class="control-label">Trámite</label><br>
                        </div>
                        <div class="col-md-9 col-xs-6">
                            <select class="form-control" id="Tramite" name="Tramite"  required>
                                <option value="0">Selecciona</option>
                                <?php foreach ($Tramite as $Tramite1) { ?> 
                                    <option value="<?php echo $Tramite1->ID; ?>"><?php echo $Tramite1->Tramite; ?></option>
                                <?php } ?>
                            </select>	
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12" id="ResultTramite">
                        Información
                    </div>

                    <div class="col-xs-12 col-sm-12">
                        Asignación
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-3 col-xs-12" align="right">
                            <label for="Cliente" class="control-label">Responsable:</label><br>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <select class="form-control" id="Responsable" name="Responsable"  required>
                                <option value="">Selecciona</option>
                                <?php foreach ($USUARIOS as $USUARIOS1) { ?> 
                                    <option value="<?php echo $USUARIOS1->Id; ?>"><?php echo $USUARIOS1->nombre . " " . $USUARIOS1->apaterno . " " . $USUARIOS1->amaterno; ?></option>
                                <?php } ?>
                            </select>	
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-3 col-xs-12" align="right">
                            <label for="Fecha" class="control-label">Fecha de inicio del trámite:</label><br>	
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaInicio" id="datepicker" required>	
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-md-3 col-xs-12" align="right">
                            <label for="Fecha" class="control-label">Fecha de término del trámite:</label><br>	
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaTermino" id="datepicker2" required>	
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        </br>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <label for="DatosL" class="control-label">
                            Estado del trámite </label><br>		
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-1 col-xs-12"> 
                            <input type="radio" value="1" name="Estado" id="Estado" class="form-control" required/>
                        </div>
                        <div class="col-md-11 col-xs-12">
                            <label for="Estado" class="control-label">Generando requisitos para trámite</label> 
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1 col-xs-12">
                            <input type="radio" value="2" name="Estado" id="Estado" class="form-control" required/> 
                        </div>
                        <div class="col-md-11 col-xs-12">
                            <label for="2" class="control-label" for="Estado" >Trámite iniciado</label>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1 col-xs-12">
                            <input type="radio" value="3" name="Estado" id="Estado" required class="form-control"/> 
                        </div>
                        <div class="col-md-11 col-xs-12">
                            <label for="3" class="control-label">Trámite finalizado</label>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1 col-xs-12">
                            <input type="radio" value="4" name="Estado" id="Estado" required class="form-control"/>
                        </div>
                        <div class="col-md-11 col-xs-12">
                            <label for="4" class="control-label">Evidencia de trámite realizado archivada </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                    </div> 
                    </form>
                </div><!---FIN PANEL BODY -->
            </div><!---FIN PANEL --> 

            <table width="100%">    
                <tr>
                    <td width="80%">    
                    </td>
                    <td width="20%" align="right">    
                        <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=22&i=<?php echo $indice ?>'">Regresar</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
        <script>
            cli.config.CambioTramite();
            cli.config.InfoTramite();
        </script>



