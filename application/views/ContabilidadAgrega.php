<!-- configuramos el plugin-->

<div class="container">	
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <h3><?php
        $respuesta = '-';
        foreach ($USUARIOS as $USUARIOS1) {
            if ($USUARIOS1->Id == $User) {
                $respuesta = $USUARIOS1->nombre;
                $indice = $USUARIOS1->Id;
            }
        }
        echo $respuesta;
        ?></h3>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Expediente de solicitud de tramite</h3>
        </div>
        <div class="panel-body">
            <?php echo form_open_multipart(base_url().'index.php/controlador/Cont_9'); ?> 
            <fieldset>
                <div class="col-md-6 col-xs-12" align="">
                    <label for="Cliente" class="control-label">Seleccionar empresa:</label>
                    <select class="form-control" id="Cliente" name="Cliente"  required>
                        <option value="">Selecciona</option>
                        <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                            <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
                        <?php } ?>
                    </select>
                </div> 
                <div class="col-md-6 col-xs-6" align="">
                    <label for="NombreActividad" class="control-label">Mes</label> 
                    <select class="form-control" id="Mes" name="Mes"  required>
                        <option value="">Selecciona</option>
                        <?php foreach ($Meses as $Meses1) { ?> 
                            <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
                        <?php } ?>
                    </select>	
                </div> 

                <div class="col-xs-12 col-sm-12" align="center">
                    <br><label class="control-label"><h2>DATOS DEL DOCUMENTO</h2></label>	
                </div>
                <div class="col-xs-12 col-sm-12">
                    <hr class="">
                </div>
                <div class="col-md-6 col-xs-6" align="">
                    <label for="Cliente" class="control-label">Trámite:</label>
                    <select class="form-control" id="Tramite" name="Tramite"  required>
                        <option value="">Selecciona</option>
                        <?php foreach ($SSTramite as $SSTramite1) { ?> 
                            <option value="<?php echo $SSTramite1->id_tramite; ?>"><?php echo $SSTramite1->dsc_tramite; ?></option>
                        <?php } ?>
                    </select> 
                </div> 
                <div class="col-md-6 col-xs-6" align="">
                    <label for="Fecha" class="control-label">Fecha de la solicitud:</label>
                    <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaSolicitud" id="datepicker" required>	
                </div>  
                <div class="col-md-6 col-xs-6" align="">
                    <label for="NombreExterno" class="control-label">Tipo de evidencia:</label>
                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Evidencia" id="Evidencia" >		
                </div> 
                <div class="col-md-6 col-xs-6" align="">
                    <label for="X" class="control-label">ADJUNTAR ARCHIVO</label> 
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                <span class="fa fa-files-o"></span><input type="file" name="userfile">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly> 
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
            </fieldset>

            <div class="col-xs-12 col-sm-12">
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
            </div>
            </form>
        </div>
    </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!--        <table width="100%">
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
        </table>-->
    <?php // echo form_open_multipart('controlador/Cont_9'); ?> 

<!--        <table width="100%" border="1" bordercolor="#FF6633">
            <tr>
                <td>
                    <table width="100%">    
                        <tr>
                            <td bgcolor="#ff6600">
                                <strong style="color:#FFF">Expediente de solicitud de tramite</strong>
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
                                    <div class="col-md-3 col-xs-12" align="right">
                                        <label for="Cliente" class="control-label">Seleccionar empresa:</label><br>
                                    </div>
                                    <div class="col-md-9 col-xs-12">
                                        <select class="form-control" id="Cliente" name="Cliente"  required>
                                            <option value="">Selecciona</option>
    <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                                    <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
    <?php } ?>
                                        </select>	
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-md-6 col-xs-12">
                                    </div>
                                    <div class="col-md-3 col-xs-6" align="right">
                                        <label for="NombreActividad" class="control-label">Mes</label><br>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <select class="form-control" id="Mes" name="Mes"  required>
                                            <option value="">Selecciona</option>
    <?php foreach ($Meses as $Meses1) { ?> 
                                                    <option value="<?php echo $Meses1->id_meses; ?>"><?php echo $Meses1->dsc_meses; ?></option>
    <?php } ?>
                                        </select>	
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12" style="background-color:#99A79A">
                                    Documento
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-md-3 col-xs-12" align="right">
                                        <label for="Cliente" class="control-label">Trámite:</label><br>
                                    </div>
                                    <div class="col-md-9 col-xs-12">
                                        <select class="form-control" id="Tramite" name="Tramite"  required>
                                            <option value="">Selecciona</option>
    <?php foreach ($SSTramite as $SSTramite1) { ?> 
                                                    <option value="<?php echo $SSTramite1->id_tramite; ?>"><?php echo $SSTramite1->dsc_tramite; ?></option>
    <?php } ?>
                                        </select>	
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-md-3 col-xs-12" align="right">
                                        <label for="Fecha" class="control-label">Fecha de la solicitud:</label><br>	
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <input  style="text-transform:uppercase" value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaSolicitud" id="datepicker" required>	
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-md-3 col-xs-6" align="right">
                                        <label for="NombreExterno" class="control-label">Tipo de evidencia:</label><br>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Evidencia" id="Evidencia" >		
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-md-3 col-xs-12" align="right">
                                        <label for="Adjuntar" class="control-label">Adjuntar documento (Max 2MB)</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" />
                                        </br>	
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <label for="Adjuntar" class="control-label">(word, excel, pdf, jpg, png, zip, rar)</label><br>
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
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                                </div>
                            </td>
                        </tr>
                    </table>  
                </td>
            </tr>
        </table>
        </form>-->

    <table width="100%">    
        <tr>
            <td width="80%">    
            </td>
            <td width="20%" align="right">    
                <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=4&i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>



