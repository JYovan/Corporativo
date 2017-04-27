 
<?php
$respuesta = '-';
foreach ($USUARIOS as $USUARIOS1) {
    if ($USUARIOS1->Id == $User) {
        $respuesta = $USUARIOS1->nombre;
        $indice = $USUARIOS1->Id;
    }
}
//                echo $respuesta;
?>
<div class="row">	  
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE TRÁMITES</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('controlador/RegistroTramitesR'); ?> 
                <strong>Registro de trámite</strong>
                <div class="col-xs-12 col-md-12">
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
                <div class="col-xs-12 col-md-12">
                        </br> 
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="1" class="control-label">Nombre del trámite:</label>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <select class="form-control" id="Tramite" name="Tramite" >
                            <option value="">Selecciona</option>
                            <?php foreach ($TramitesR as $TramiteR1) { ?> 
                                <option value="<?php echo $TramiteR1->dsc_tramite; ?>"><?php echo $TramiteR1->dsc_tramite; ?></option>
                            <?php } ?>
                        </select>
                        </br>	
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    </br>
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="2" class="control-label">Instancia donde se realiza:</label>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <input  style="text-transform:uppercase" onblur="aMayusculas(this.value, this.id)" class="form-control" type="text" name="Instancia" id="Instancia" required>	
                        </br>	
                    </div>
                </div>

                <div class="col-xs-12 col-md-12">
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="3" class="control-label">Requisitos para su tramitación:</label>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <input  style="text-transform:uppercase" onblur="aMayusculas(this.value, this.id)" class="form-control" type="text" name="Requisitos" id="Requisitos" required>	
                        </br>	
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="4" class="control-label">Duración aproximada del trámite:</label>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <input style="text-transform:uppercase" onblur="aMayusculas(this.value, this.id)" class="form-control" type="text" name="Duracion" id="Duracion" required>	
                        </br>	
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="col-md-3 col-xs-12" align="right">
                        <label for="5" class="control-label">Dirección del lugar de tramitación:</label>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <input style="text-transform:uppercase" onblur="aMayusculas(this.value, this.id)" class="form-control" type="text" name="Direccion" id="Direccion" required>	
                        </br>	
                    </div>
                </div>

                <div class="col-xs-12 col-md-2">
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=22&i=<?php echo $indice ?>'">Regresar</button>
                </div>
                <div class="col-md-8"></div>
                <div class="col-xs-12 col-md-2">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                </div>
                </form>
            </div><!---FIN PANEL BODY -->
        </div><!---FIN PANEL --> 
    </div>
</div>


