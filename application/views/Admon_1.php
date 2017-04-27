<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
foreach ($Inmuebles as $Inmuebles1) {
    
}
if (empty($Inmuebles1)) {
    $Ninmuebles = 0;
} else {
    $Ninmuebles = $Inmuebles1->ID;
}
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">CONTROL INMOBILIARIO</h3>
            </div>
            <div class="panel-body">
                <fieldset> 
                    <div class="col-md-12" align="center">
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > <button  type="button" class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="AGREGAR" >
                            <span class="fa fa-plus fa-2x"></span>
                            </button> </span>
                        <button type="button" class="btn btn-emerald btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="VER REGISTROS">
                            <span class="fa fa-eye fa-2x"></span>
                        </button>
                    </div>
                    <hr>
                </fieldset>
            </div> 
        </div>
    </div>
</div>

<?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon_1_1'); ?>     
<table width="100%">    
    <tr>
        <td bgcolor="#ff6600" align="center">
            <strong style="color:#FFF">Visualizar registros</strong>
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
        <td>
            <div class="col-md-12 col-xs-12">
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="left">
                    <button class="btn btn-primary" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Ver</button>
                </div>
                <div class="col-md-8 col-xs-4" id="ID_cliente" align="left">
                </div>
                <div class="col-md-2 col-xs-4" id="ID_cliente" align="right">
                    <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=8&i=<?php echo $indice ?>'">Regresar</button>
                </div>
            </div>
        </td>
    </tr>
</table> 
</form>
<script>
    cli.config.Estado();
    cli.config.Ciudad();
</script>

<div id="mdlNuevo" class="modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="mdlHTitulo" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">REGISTRO INMOBILIARIO</h4>
            </div>

            <?php echo form_open_multipart('controlador/do_uploadA1'); ?> 
            <div id="bMessages" class="modal-body text-center"> 
                <fieldset>
                    <div class="col-md-12">
                        <input class="form-control" type="hidden" name="Numero" id="Numero" value="<?php echo str_pad($Ninmuebles + 1, 6, "0", STR_PAD_LEFT); ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="">NOMBRE GENÉRICO</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Nombre" id="Nombre" required="required">
                    </div> 
                    <div class="col-md-4"> 
                        <label for="">Calle: </label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Calle" id="Calle" required="required" >
                    </div>
                    <div class="col-md-4"> 
                        <label for="">Número: </label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="No" id="No" required="required" >
                    </div>      
                    <div class="col-md-4"> 
                        <label for="">Colonia: </label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Colonia" id="Colonia" required="required" >
                        </br>
                    </div>
                    <div class="col-md-4"> 
                        <label for="">C.P.: </label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="CP" id="CP" required="required" >
                    </div>   
                    <div class="col-md-4"> 
                        <label for="">Estado: </label>
                        <div id="Estado2">
                            <select class="form-control" id="Estado" name="Estado"  required >
                                <option value="">Selecciona</option>
                                <?php foreach ($Estado as $Estado1) { ?> 
                                    <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
                                <?php } ?>
                            </select>	
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">Ciudad:</label> 
                        <div id="Ciudad2">
                            <select class="form-control" id="Ciudad" name="Ciudad"  required >
                                <option value="">Selecciona</option>
                                <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                    <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
                                <?php } ?>
                            </select>			
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for=""> Línea telefónica: </label>
                        <input  style="text-transform:uppercase" onkeyup="" class="form-control" type="text" name="Tel" id="Tel" >
                    </div>    
                    <div class="col-md-4">
                        <label for="">Oficinas:</label>
                        <textarea id="UniAdmtivas" name="UniAdmtivas" rows="5" cols="70%" class="form-control"></textarea>
                    </div>   
                    <div class="col-md-4">
                        <label for="">Número de empleados:</label> 
                        <input  class="form-control" type="number" name="Empleados" id="Empleados" required="required" >
                    </div>   
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <label for="">Número de pisos:</label>
                        <input class="form-control" type="number" name="Pisos" id="Pisos" required="required" >
                    </div>   
                    <div class="col-md-4">
                        <label for="">Espacios para estacionamiento:</label> 
                        <input class="form-control" type="number" name="Estacionamientos" id="Estacionamientos" required="required" >
                    </div> 
                    <div class="col-md-4">
                        <label for="">Superficie del terreno (m2): </label>
                        <input class="form-control" type="number" name="Superficie" id="Superficie" >
                    </div> 
                    <div class="col-md-4">
                        <label for="">Superficie construida: </label> 
                        <input class="form-control" type="number" name="Construccion" id="Construccion" >
                    </div> 
                    <div class="col-md-4">
                        <label for="">Situación jurídica del inmueble:</label> 
                        <select class="form-control" id="SitJuridica" name="SitJuridica" required="required">
                            <option value="">Selecciona</option>
                            <option value="Propio">Propio</option>
                            <option value="Arrendado">Arrendado</option>
                            <option value="Comodato">Comodato</option>
                        </select>
                    </div> 
                    <div class="col-md-4">
                        <label for="">Nombre del arrendador o propietario:</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Propietario" id="Propietario"  required="required">
                    </div>
                    <div class="col-md-4">
                        <label for="">Nombre del arrendatario:</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Arrendatario" id="Arrendatario" >
                    </div>
                    <div class="col-md-4">
                        <label for=""> Monto mensual de la renta:</label> 
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Renta" id="Renta" >
                    </div> 
                    <div class="col-md-4">
                        <label for="">Fecha en que se inició la prestación de los servicios del lugar:</label>
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Fecha" id="datepicker"  value="<?php echo date("d/m/Y") ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="Adjuntar" class="control-label">Adjuntar fotografía (Max 2MB)</label>
                        <input type="file" name="userfile" class="col-xs-12" style="background-color:#99A79A" />
                        <label for="Adjuntar" class="control-label">(jpg, png)</label><br>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
                    </div>
                </fieldset>
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button> 
            </div>
        </div>
    </div>
</div>

