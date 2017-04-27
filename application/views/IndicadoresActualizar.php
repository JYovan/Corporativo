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

    <?php
    echo form_open_multipart('controlador/ActMetas');
    foreach ($Meta as $datos1)
        
        ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">Registro de Meta</strong>
                            <input   type="text" class="form-control" name="IDMeta" id="IDMeta" value="<?php echo $datos1->ID; ?>">
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
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Datos de meta</strong>	
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
                                <div class="col-md-3 col-xs-12">
                                    <div class="col-xs-12 col-sm-12" style="background-color:#3a545f; border-radius:5px">
                                        Ponderación de la Meta (%)
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <input   type="text" class="form-control" name="Ponderacion" id="Ponderacion" value="<?php echo $datos1->Ponderacion; ?>">	
                                    </div>
                                </div>  
                                <div class="col-md-9 col-xs-12">
                                    <div class="col-xs-12 col-sm-12" style="background-color:#3a545f; border-radius:5px">
                                        Nomenclatura de la Meta
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <input   type="text" class="form-control" name="Descripcion" id="Descripcion" value="<?php echo $datos1->Descripcion; ?>">
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
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Descripcion2" class="control-label">Descripción de la Meta</label><br> 
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-12 col-xs-12">
                                    <textarea id="Meta" name="Meta" rows="3" cols="70%" class="form-control"><?php echo $datos1->Meta; ?></textarea>
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
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Descripcion" class="control-label">Estrategias para el cumplimiento de la Meta</label><br> 
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="Estrategias" name="Estrategias" rows="3" cols="70%" class="form-control"><?php echo $datos1->Estrategias; ?></textarea>
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
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Descripcion" class="control-label">Forma de evidenciar el cumplimiento de la Meta</label><br> 
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="FormaEvidencia" name="FormaEvidencia" rows="3" cols="70%" class="form-control"><?php echo $datos1->FormaEvidencia; ?></textarea> 
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
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Descripcion" class="control-label">Fórmula de cálculo de la Meta  R = (A/B)*100</label><br> 
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="Descripcion" class="control-label">A</label><br> 	
                                </div>
                                <div class="col-md-9 col-xs-6">
                                    <input   type="text" class="form-control" name="A" id="A" value="<?php echo $datos1->A; ?>"> 	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-6" align="right">
                                    <label for="Descripcion" class="control-label">B</label><br> 	
                                </div>
                                <div class="col-md-9 col-xs-6">
                                    <input   type="text" class="form-control" name="B" id="B" value="<?php echo $datos1->B; ?>"> 	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6" align="right">
                                    <label for="Descripcion" class="control-label">R (Porcentaje)</label><br> 	
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <input   type="text" class="form-control" name="R" id="R" value="<?php echo $datos1->R; ?>"> 	
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
                                <div class="col-md-4 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Sentido" class="control-label">Sentido de medición de la Meta </label><br>  	
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    Ascendente <input type="radio" value="Ascendente" name="Sentido" id="Sentido" required/> 	
                                </div> 
                                <div class="col-md-4 col-xs-12">
                                    Descendente <input type="radio" value="Descendente" name="Sentido" id="Sentido" required/> 	
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
                                <div class="col-md-4 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Descripcion" class="control-label">Frecuencia de Medición de la Meta</label><br> 	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12">
                                    <div class="col-md-12 col-xs-6">
                                        Mensual
                                    </div>
                                    <div class="col-md-12 col-xs-6">
                                        <input type="radio" value="Mensual" name="Frecuencia" id="Frecuencia" required/>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <div class="col-md-12 col-xs-6">
                                        Bimestral
                                    </div>
                                    <div class="col-md-12 col-xs-6">
                                        <input type="radio" value="Bimestral" name="Frecuencia" id="Frecuencia" required/>	
                                    </div>	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <div class="col-md-12 col-xs-6">
                                        Trimestral
                                    </div>
                                    <div class="col-md-12 col-xs-6">
                                        <input type="radio" value="Trimestral" name="Frecuencia" id="Frecuencia" required/>
                                    </div> 	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <div class="col-md-12 col-xs-6">
                                        Semestral
                                    </div>
                                    <div class="col-md-12 col-xs-6">
                                        <input type="radio" value="Semestral" name="Frecuencia" id="Frecuencia" required/> 
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
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Unidad" class="control-label">Unidad de Medida</label> 	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   type="text" class="form-control" name="Unidad" id="Unidad" value="<?php echo $datos1->Unidad; ?>">
                                    </br> 	
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Situacion" class="control-label">Situación inicial</label> 	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   type="number"  min="1" class="form-control" name="Situacion" id="Situacion" value="<?php echo $datos1->Situacion; ?>">  	
                                    </br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="MetaxMes" class="control-label">Meta por frecuencia de medida (%)</label> 	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   type="number" class="form-control" name="MetaxMes" id="MetaxMes" value="<?php echo $datos1->MetaxMes; ?>">
                                    </br>  	
                                </div>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Meta1anos" class="control-label">Meta final 1 año (%)</label> 	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   type="number" class="form-control" name="Meta1anos" id="Meta1anos" value="<?php echo $datos1->Meta1anos; ?>">  	
                                    </br>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">	
                                <div class="col-md-3 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Meta5anos" class="control-label">Meta final 5 años (%)</label>	
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <input   type="number" class="form-control" name="Meta5anos" id="Meta5anos" value="<?php echo $datos1->Meta5anos; ?>">  	
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
                                <div class="col-md-4 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Responsable" class="control-label">Responsable de la Meta</label><br> 	
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" id="Responsable" name="Responsable" >
                                        <option value="">Selecciona</option>
                                        <?php foreach ($USUARIOS as $temporal) { ?> 
                                            <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
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
                        <td>
                            <div class="col-xs-12 col-sm-12">	  
                                <div class="col-md-4 col-xs-12" style="background-color:#3a545f; border-radius:5px">
                                    <label for="Fecha" class="control-label">Fecha de evaluación de cumplimiento de la Meta </label><br> 	
                                </div> 
                                <div class="col-md-8 col-xs-12">
                                    <input   type="text" class="form-control" name="Fecha" id="datepicker" value="<?php echo $datos1->Fecha; ?>">  	
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
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Actualizar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

