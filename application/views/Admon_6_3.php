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

<?php echo form_open_multipart('controlador/TranspVerificacion'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Control de verificaciones</strong>
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
                                <div class="col-md-3 col-xs-6">
                                    Unidad de transporte:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Unidad" name="Unidad"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($Unidad as $Unidad1) { ?> 
                                            <option value="<?php echo $Unidad1->IDUnidad; ?>"><?php echo $Unidad1->Tipo . ' ' . $Unidad1->Marca . ' ' . $Unidad1->Modelo . ' ' . $Unidad1->Color; ?></option>
<?php } ?>
                                    </select>
                                    </br>
                                </div>   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Información verificaciones</strong>
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
                            <div class="col-md-3 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Año de verificación:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("Y") ?>" class="form-control" type="text" name="AnioVerificacion" id="AnioVerificacion" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Semestre del año:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Semestre" name="Semestre"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Primer Semestre">Primer Semestre</option>
                                        <option value="Segundo Semestre">Segundo Semestre</option>
                                    </select>
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Fecha de realización:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaRealizacion" id="datepicker" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Lugar de realización:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="LugarRealizacion" id="LugarRealizacion" required="required" >
                                    </br>
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
</form>


<table width="100%">    
    <tr>
        <td width="80%">
        </td>
    </tr>
    <tr>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=84&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>

