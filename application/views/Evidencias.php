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

    <?php echo form_open_multipart('controlador/ActualizarEvidencias'); ?> 
    <table width="100%" border="1" bordercolor="#ff6633">
        <tr>
            <td>
                <?php foreach ($Meta as $datos1)
                    
                    ?> 
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Metas</strong>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>
                                <input  class="form-control" type="hidden" value="<?php echo $datos1->ID; ?>" name="Meta" id="Meta">		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <div class="col-xs-12 col-sm-12">
                                                <?php echo "Meta " . $datos1->ID . ".- " . $datos1->Descripcion; ?>
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-xs-12 col-sm-12">
                                                <?php echo $datos1->Meta; ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Forma de evidenciar la meta
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <?php echo $datos1->FormaEvidencia; ?>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Fórmula R = (A/B)*100 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">
                                <?php
                                $respuesta = '-';
                                foreach ($USUARIOS as $responsables1) {
                                    if ($responsables1->Id == $datos1->Responsable) {
                                        $respuesta = $responsables1->nombre . ' ' . $responsables1->apaterno . ' ' . $responsables1->amaterno;
                                    }
                                }
                                echo $respuesta;
                                ?>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <?php
                                $respuesta = '-';
                                foreach ($USUARIOS as $responsables1) {
                                    if ($responsables1->Id == $datos1->Encargado) {
                                        $respuesta = $responsables1->nombre . ' ' . $responsables1->apaterno . ' ' . $responsables1->amaterno;
                                    }
                                }
                                echo $respuesta;
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12" align="right">
                                <label for="NombreInterno" class="control-label">Elegir Encargado:</label><br>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control" id="Encargado" name="Encargado" >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($USUARIOS as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Variables independientes
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-4 col-xs-6">
                                <?php echo 'Sentido: ' . $datos1->Sentido; ?>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <?php echo 'Frecuencia: ' . $datos1->Frecuencia; ?>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <?php echo 'Situación inicial: ' . $datos1->Situacion; ?>
                                <input  class="form-control" type="hidden" name="Situacion" id="Situacion" value="<?php echo $datos1->Situacion; ?>">
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-4">
                                <input  class="form-control" type="number" step="0.01" name="An" id="An">
                            </div>
                            <div class="col-md-8 col-xs-4">
                                <?php echo "A: " . $datos1->A; ?>
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <?php echo $datos1->An; ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-4">
                                <input  class="form-control" type="number"  step="0.01" name="Bn" id="Bn">
                            </div>
                            <div class="col-md-8 col-xs-4">
                                <?php echo "B: " . $datos1->B; ?>
                            </div>
                            <div class="col-md-2 col-xs-4">
                                <?php echo $datos1->Bn; ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-2 col-xs-12">

                            </div>
                            <div class="col-md-8 col-xs-6" align="right">
                                <?php echo "Avance del mes: " . $datos1->Rn . "%" ?>
                            </div>
                            <div class="col-md-2 col-xs-6">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Estrategias para cumplir con la meta del Indicador
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">
                                <?php echo $datos1->Estrategias; ?>
                            </div>
                            <div class="col-md-6 col-xs-12">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">   
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Actualizar</button>
                            </div>
                        </td>
                    </tr>
                </table>
                </form>

                <?php echo form_open_multipart('controlador/do_upload3'); ?>  
                <table width="100%">
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>
                                <input  class="form-control" type="hidden" value="<?php echo $datos1->ID; ?>" name="Meta" id="Meta">		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>    
                            <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                Evidencia para cumplir con la meta del Indicador
                                </br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-6 col-xs-12">
                                Nombre de la evidencia
                                <input  type="text" name="NameEvidencia" id="NameEvidencia">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" align="left">   
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Agregar evidencia</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                <?php
                                $MetaC = "Meta_" . $datos1->ID;
                                $files = get_filenames($this->folder3, FALSE);
                                foreach ($files as $file) {
                                    $ext = substr($file, strpos($file, ".") + strlen("."));
                                    $name = substr($file, 0, strpos($file, "-"));
                                    if ($name == $MetaC) {
                                        ?> 
                                        <div class="col-md-6 col-xs-12" align="left"> 
                                            <?php echo anchor('controlador/downloads2/' . $file, $file) . br(1); ?>
                                        </div>
                                        <div class="col-md-6 col-xs-12" align="left"> 
                                            <button type="button" id="salir" name="salir"  onclick="location.href = '<?php echo base_url(); ?>index.php/../uploads/Evidencias/<?php echo $file; ?>'"><img src="<?php echo base_url(); ?>imagenes/Folder.png" width="30" height="30" /></button>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.ConsultarMetas();
</script>

