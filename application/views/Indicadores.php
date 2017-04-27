<!-- configuramos el plugin-->
<?php 
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">REGISTRO DE METAS</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Metas'); ?> 
            <div class="panel-body">
                <fieldset> 
                    <h1 class="text-center">DATOS DE LA META</h1>
                    <HR>
                    <div class="col-md-6">
                        <label for="">Ponderación de la Meta (%)</label> 
                        <input type="text" class="form-control" name="Ponderacion" id="Ponderacion" >
                    </div>
                    <div class="col-md-6">
                        <label for="">Nomenclatura de la Meta</label>
                        <input   type="text" class="form-control" name="Descripcion" id="Descripcion" >
                    </div>
                    <div class="col-md-12">
                        <label for="">DESCRIPCIÓN DE LA META</label>
                        <textarea id="Meta" name="Meta" rows="3" cols="70%" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">ESTRATEGIAS PARA EL CUMPLIMIENTO DE LA META</label>
                        <textarea id="Estrategias" name="Estrategias" rows="3" cols="70%" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="">FORMA DE EVIDENCIAR EL CUMPLIMIENTO DE LA META</label>
                        <textarea id="FormaEvidencia" name="FormaEvidencia" rows="3" cols="70%" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">FÓRMULA DE CÁLCULO DE LA META R = (A/B)*100</h1>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <label for="Descripcion" class="control-label">A</label> 
                        <input   type="text" class="form-control" name="A" id="A" > 
                    </div>
                    <div class="col-md-6">
                        <label for="Descripcion" class="control-label">B</label>
                        <input   type="text" class="form-control" name="B" id="B" >
                    </div>
                    <div class="col-md-12">
                        <label for="Descripcion" class="control-label">R (Porcentaje)</label><br> 	
                        <input   type="text" class="form-control" name="R" id="R" > 
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">SENTIDO DE MEDICIÓN DE LA META</h1>
                        <hr> 
                    </div>	 
                    <div class="col-md-6 col-xs-12 text-center">
                        <input type="radio" value="Ascendente" name="Sentido" id="Sentido" class="form-control" required/>  Ascendente	
                    </div> 
                    <div class="col-md-6 col-xs-12 text-center">
                        <input type="radio" value="Descendente" name="Sentido" id="Sentido" class="form-control" required/> Descendente 	
                    </div> 

                    <div class="col-md-12">
                        <h1 class="text-center">FRECUENCIA DE MEDICIÓN DE LA META</h1>
                        <hr> 
                    </div>	 
                    <div class="col-md-3 text-center">	 
                        Mensual
                        <input type="radio" value="Mensual" class="form-control" name="Frecuencia" id="Frecuencia" required/>
                    </div>
                    <div class="col-md-3  text-center"> 
                        Bimestral 
                        <input type="radio" value="Bimestral"  class="form-control" name="Frecuencia" id="Frecuencia" required/>	
                    </div> 
                    <div class="col-md-3 text-center"> 
                        Trimestral 
                        <input type="radio" value="Trimestral"  class="form-control" name="Frecuencia" id="Frecuencia" required/>
                    </div> 	 
                    <div class="col-md-3 text-center"> 
                        Semestral 
                        <input type="radio" value="Semestral"  class="form-control" name="Frecuencia" id="Frecuencia" required/> 
                    </div>	   
                    <div class="col-md-4"> 
                        <label for="Unidad" class="control-label">Unidad de Medida</label> 	 
                        <input   type="text" class="form-control" name="Unidad" id="Unidad" >
                    </div>
                    <div class="col-md-4"> 
                        <label for="Situacion" class="control-label">Situación inicial</label> 	 
                        <input   type="number" min="1" class="form-control" name="Situacion" id="Situacion" >  	
                    </div>
                    <div class="col-md-4"> 
                        <label for="MetaxMes" class="control-label">Meta por frecuencia de medida (%)</label> 	
                        <input   type="number" class="form-control" name="MetaxMes" id="MetaxMes" >
                    </div>
                    <div class="col-md-4"> 
                        <label for="Meta1anos" class="control-label">Meta final 1 año (%)</label> 	
                        <input   type="number" class="form-control" name="Meta1anos" id="Meta1anos" >  	
                    </div> 
                    <div class="col-md-4">	 
                        <label for="Meta5anos" class="control-label">Meta final 5 años (%)</label>	
                        <input   type="number" class="form-control" name="Meta5anos" id="Meta5anos" >  	
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <label for="Responsable" class="control-label">Responsable de la Meta</label> 
                        <select class="form-control" id="Responsable" name="Responsable" >
                            <option value="">Selecciona</option>
                            <?php foreach ($USUARIOS as $temporal) { ?> 
                                <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                            <?php } ?>
                        </select> 	
                    </div>	  
                    <div class="col-md-4 col-xs-12">
                        <label for="Fecha" class="control-label">Fecha de evaluación de cumplimiento de la Meta </label><br> 	
                        <input   type="text" class="form-control" value="<?php echo date("d/m/Y") ?>" name="Fecha" id="datepicker" >  	
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Asignar</button>
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div> 
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