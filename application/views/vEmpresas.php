<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row"> 
    <div class="col-md-12 margin-15-top"> 
    </div>
    <div class="col-md-12">
        <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="panel panel-primary container-fluid">
            <div class="panel-heading row">
                <div class="col-md-2 panel-title">
                    <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-arrow-left"></span>
                    </a> 
                </div>
                <div class="col-md-8"> 
                    <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE EMPRESAS RABINA<span class="fa fa-chevron-up" ></span></div>
                </div> 
                <div class="col-md-2 panel-title" align="right">
                    <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                        <span class="fa fa-navicon"></span>
                    </a> 
                </div>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/ctrlEmpresa/Actualizar'); ?> 
            <div class="panel-body">
                <fieldset> 
                    <div class="col-md-12" align="center">
                        <span data-toggle="modal" data-target="#mdlNuevo">
                            <button type="button" id="btnAgregarEmpresaMdl" class="btn btn-info btn-lg fa-lg"   
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x info-icon"></span>
                            </button> </span>
                        <button id="btnEditar"  type="button" class="btn btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDTIAR">
                            <span class="fa fa-pencil fa-3x success-icon"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-lg fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x warning-icon"></span>
                        </button>
                        <button type=button onClick="location = '<?php echo base_url(); ?>index.php/controlador/ExcelDirectorio';" class="btn btn-success btn-lg fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="DESCARGAR ARCHIVO DE EXCEL">
                            <span class="fa fa-file-excel-o fa-3x success-icon"></span>
                        </button> 
                        <hr>
                    </div> 
                    <div id="msgEmpresas" class="col-md-12"></div>
                    <div id="rEmpresas" class="col-md-12"></div> 
                </fieldset>
            </div>
            </form>
        </div>  

    </div>
</div> 

<div class="modal fade" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-building fa-lg"></span> NUEVO</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="Nombre" class="control-label">NOMBRE COMERCIAL</label>
                                <input class="form-control" type="text" name="NombreC" id="NombreC" required>		
                            </div>
                            <div class="col-md-4">
                                <label for="Nombre" class="control-label">RAZ&Oacute;N SOCIAL</label>
                                <input class="form-control" type="text" name="RazonS" id="RazonS" required>		
                            </div>
                            <div class="col-md-4">
                                <label for="Nombre" class="control-label">RFC</label>
                                <input class="form-control" type="text" name="RFC" id="RFC" required>		
                            </div> 
                            <div class="col-md-12">
                                <label for="RepresentanteL" >REPRESENTANTE LEGAL:</label> 
                                <input class="form-control" type="text" name="RepresentanteL" id="RepresentanteL" required>		
                            </div>
                            <div class="col-md-12">
                                <label for="RepresentanteL">RESPONSABLE:</label> 
                                <select class="form-control" id="Responsable" name="Responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Responsables as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="Sucursal" class="control-label">SUCURSAL:</label> 
                                <select class="form-control" id="Sucursal" name="Sucursal"  required>
                                    <option value="">Selecciona</option>
                                    <option value="León">León</option>
                                </select>
                            </div>
                            <div class="col-md-6"> 
                                <label for="Sucursal" class="control-label">TIPO DE EMPRESA:</label>
                                <select class="form-control" id="cliente" name="cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($cliente as $cliente1) { ?> 
                                        <option value="<?php echo $cliente1->id_cliente; ?>"><?php echo $cliente1->dsc_cliente; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6"> 
                                <label for="Tipo_cliente" class="control-label">REGIMEN DE LA EMPRESA:</label>
                                <select class="form-control" id="Tipo_cliente" name="Tipo_cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Tipo_cliente as $Tipo_cliente1) { ?> 
                                        <option value="<?php echo $Tipo_cliente1->id_Tipo_cliente; ?>"><?php echo $Tipo_cliente1->dsc_Tipo_cliente; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="SubTipo-cliente" class="control-label">GRUPO DE ACTIVIDAD ECON&Oacute;MICA:</label> 
                                <select class="form-control" id="SubTipo_cliente" name="SubTipo_cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($SubTipo_cliente as $SubTipo_cliente1) { ?> 
                                        <option value="<?php echo $SubTipo_cliente1->id_SubTipo_cliente; ?>"><?php echo $SubTipo_cliente1->dsc_SubTipo_cliente; ?></option>
                                    <?php } ?>
                                </select> 
                            </div>
                            <div class="col-md-4">
                                <label for="RegimenJ">CURP:</label>
                                <input  class="form-control" type="text" name="CURP" id="CURP">		
                            </div>
                            <div class="col-md-4">
                                <label for="FormaJ">R&Eacute;GIMEN JUR&Iacute;DICO:</label> 
                                <select class="form-control" id="RegimenJ" name="RegimenJ"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Regimen as $Regimen1) { ?> 
                                        <option value="<?php echo $Regimen1->id_regimen; ?>"><?php echo $Regimen1->dsc_regimen; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="AmbitoA" class="control-label">FORMA JUR&Iacute;DICA:</label>
                                <select class="form-control" id="FormaJ" name="FormaJ"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Forma as $Forma1) { ?> 
                                        <option value="<?php echo $Forma1->id_forma; ?>"><?php echo $Forma1->dsc_forma; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-md-4">
                                <label for="Tamanio" class="control-label">&Aacute;MBITO DE ACTUACI&Oacute;N:</label>
                                <select class="form-control" id="AmbitoA" name="AmbitoA"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Ambito as $Ambito1) { ?> 
                                        <option value="<?php echo $Ambito1->id_ambito; ?>"><?php echo $Ambito1->dsc_ambito; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-md-4">
                                <label for="Sector" class="control-label">TAMA&Ntilde;O:</label>
                                <select class="form-control" id="Tamanio" name="Tamanio"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Tamanio as $Tamanio1) { ?> 
                                        <option value="<?php echo $Tamanio1->id_tamanio; ?>"><?php echo $Tamanio1->dsc_tamanio; ?></option>
                                    <?php } ?>
                                </select>			
                            </div>
                            <div class="col-md-4">
                                <label for="Clasificacion" class="control-label">SECTOR:</label>
                                <select class="form-control" id="Sector" name="Sector"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Sector as $Sector1) { ?> 
                                        <option value="<?php echo $Sector1->id_sector; ?>"><?php echo $Sector1->dsc_sector; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="Rama" class="control-label">RAMA:</label> 
                                <select class="form-control" id="Rama" name="Rama"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Rama as $Rama1) { ?> 
                                        <option value="<?php echo $Rama1->id_rama; ?>"><?php echo $Rama1->dsc_rama; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label  class="control-label"><h2>DOMICILIO</h2></label><br>		
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Calle" class="control-label">CALLE:</label>
                                <input   class="form-control" type="text" name="Calle" id="Calle" required>	

                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Numero" class="control-label">No.:</label>    
                                <input   class="form-control" type="text" name="No" id="No" required>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Colonia" class="control-label">COLONIA:</label>
                                <input   class="form-control" type="text" name="Colonia" id="Colonia" required>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="CP" class="control-label">C.P:</label>
                                <input   class="form-control" type="text" name="CP" id="CP" required>
                            </div>  
                            <div class="col-xs-6 col-sm-6" id="Pais2">
                                <label for="Pais" class="control-label">PA&Iacute;S:</label><br>
                                <select class="form-control" id="Pais" name="Pais"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Pais as $Pais1) { ?> 
                                        <option value="<?php echo $Pais1->id_pais; ?>"><?php echo $Pais1->dsc_pais; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-6 col-sm-6" id="Estado2">
                                <label for="Estado" class="control-label">ESTADO:</label><br>
                                <select class="form-control" id="Estado" name="Estado"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estado as $Estado1) { ?> 
                                        <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-6 col-sm-6" id="Ciudad2">
                                <label for="Ciudad" class="control-label">CIUDAD:</label><br>	
                                <select class="form-control" id="Ciudad" name="Ciudad"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                        <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>  
                            <div class="col-xs-6 col-sm-6">
                                <label for="Lada" class="control-label">LADA:</label><br>
                                <input   class="form-control" type="text" name="Lada" id="Lada" required>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Telefono" class="control-label">TEL&Eacute;FONO:</label><br>
                                <input   class="form-control" type="text" name="Tel" id="Tel" required>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Pagina" class="control-label">P&Aacute;GINA WEB:</label><br>
                                <input  class="form-control" type="text" name="Pagina" id="Pagina">
                            </div>

                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>REDES SOCIALES</h2></label>	
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div> 	 		   	  
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="facebook" class="control-label">Facebook:</label>	
                                <input class="form-control" type="text" id="facebook" name="facebook">		  	
                            </div>		   	  
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="twitter" class="control-label">Twitter:</label> 		  	
                                <input class="form-control" type="text" id="twitter" name="twitter" >		  	
                            </div>		   	  
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="linkedin" class="control-label">LinkedIn:</label> 		  	
                                <input class="form-control" type="text" id="linkedin" name="linkedin" >		  	
                            </div>		 
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="google" class="control-label">Google+:</label>  		  	
                                <input class="form-control" type="text" id="google" name="google" >		  	
                            </div>


                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>DATOS DE CONTACTO</h2></label>	
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div> 	
                            <div class="col-xs-6 col-sm-6">
                                <label for="Contacto" class="control-label">NOMBRE DEL CONTACTO:</label><br>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Profesion" class="control-label">PROFESI&Oacute;N:</label><br>		
                            </div> 
                            <div class="col-xs-6 col-sm-6">
                                <input   class="form-control" type="text" name="Contacto" id="Contacto" required>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <input   class="form-control" type="text" name="Profesion" id="Profesion" required>	
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Cargo" class="control-label">CARGO O PUESTO:</label><br>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Correo" class="control-label">CORREO ELECTR&Oacute;NICO:</label><br>		
                            </div> 
                            <div class="col-xs-6 col-sm-6">
                                <input   class="form-control" type="text" name="Puesto" id="Puesto" required>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <input  class="form-control" type="email" name="Correo" id="Correo" required>	
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada2" class="control-label">LADA:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono2" class="control-label">TEL&Eacute;FONO:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Ext" class="control-label">EXT:</label><br>		
                            </div> 
                            <div class="col-xs-4 col-sm-4">
                                <input   class="form-control" type="text" name="C_Lada" id="C_Lada" required>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input   class="form-control" type="text" name="C_Tel" id="C_Tel" required>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input   class="form-control" type="text" name="C_Ext" id="C_Ext">
                            </div>  
                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>SERVICIOS</h2></label>	
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div> 
                            <div class="form-group col-xs-6 col-sm-6" >
                                <input name="Construccion" type="checkbox" value="SÍ"/>
                                <label for="1" class="control-label">CONSTRUCCI&Oacute;N DE VIVIENDA</label><br>		
                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Ainmuebles" type="checkbox" value="SÍ"/>
                                <label for="2" class="control-label">ALQUILER DE INMUEBLES</label><br>		
                            </div> 
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Comercio" type="checkbox" value="SÍ"/>
                                <label for="3" class="control-label">COMERCIO DE MATERIALES DE LA CONSTRUCCI&Oacute;N</label><br>		
                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Amaquinaria" type="checkbox" value="SÍ"/>
                                <label for="4" class="control-label">ALQUILER DE MAQUINARIA PARA LA CONSTRUCCI&Oacute;N</label><br>		
                            </div> 
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="AdmonConstruccion" type="checkbox" value="SÍ"/>
                                <label for="5" class="control-label">ADMINISTRACI&Oacute;N Y SUPERVISI&Oacute;N DE VIVIENDA</label><br>		
                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Autotransportes" type="checkbox" value="SÍ"/>
                                <label for="6" class="control-label">AUTOTRANSPORTE FOR&Aacute;NEO DE CARGA GENERAL</label><br>		
                            </div>
                            <div class="col-xs-12 col-sm-12">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg btn-success btn-lg" type="submit" id="btnGuardar" name="btnGuardar" value="<?php echo $indice; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="AGREGAR" ><span class="fa fa-check fa-2x"></span></button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- /.modal -->

<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR EMPRESA</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" >
                        </div> 
                            <div class="col-md-4">
                                <label for="Nombre" class="control-label">NOMBRE COMERCIAL</label>
                                <input class="form-control" type="text" name="NombreC" id="NombreC" required>		
                            </div>
                            <div class="col-md-4">
                                <label for="Nombre" class="control-label">RAZ&Oacute;N SOCIAL</label>
                                <input class="form-control" type="text" name="RazonS" id="RazonS" required>		
                            </div>
                            <div class="col-md-4">
                                <label for="Nombre" class="control-label">RFC</label>
                                <input class="form-control" type="text" name="RFC" id="RFC" required>		
                            </div> 
                            <div class="col-md-12">
                                <label for="RepresentanteL" >REPRESENTANTE LEGAL:</label> 
                                <input class="form-control" type="text" name="RepresentanteL" id="RepresentanteL" required>		
                            </div>
                            <div class="col-md-12">
                                <label for="RepresentanteL">RESPONSABLE:</label> 
                                <select class="form-control" id="id_responsable" name="id_responsable"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Responsables as $temporal) { ?> 
                                        <option value="<?php echo $temporal->Id; ?>"><?php echo $temporal->nombre . " " . $temporal->apaterno . " " . $temporal->amaterno; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="Sucursal" class="control-label">SUCURSAL:</label> 
                                <select class="form-control" id="Sucursal" name="Sucursal"  required>
                                    <option value="">Selecciona</option>
                                    <option value="León">León</option>
                                </select>
                            </div>
                            <div class="col-md-6"> 
                                <label for="Sucursal" class="control-label">TIPO DE EMPRESA:</label>
                                <select class="form-control" id="cliente" name="cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($cliente as $cliente1) { ?> 
                                        <option value="<?php echo $cliente1->id_cliente; ?>"><?php echo $cliente1->dsc_cliente; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6"> 
                                <label for="Tipo_cliente" class="control-label">REGIMEN DE LA EMPRESA:</label>
                                <select class="form-control" id="Tipo_cliente" name="Tipo_cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Tipo_cliente as $Tipo_cliente1) { ?> 
                                        <option value="<?php echo $Tipo_cliente1->id_Tipo_cliente; ?>"><?php echo $Tipo_cliente1->dsc_Tipo_cliente; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="SubTipo-cliente" class="control-label">GRUPO DE ACTIVIDAD ECON&Oacute;MICA:</label> 
                                <select class="form-control" id="SubTipo_cliente" name="SubTipo_cliente"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($SubTipo_cliente as $SubTipo_cliente1) { ?> 
                                        <option value="<?php echo $SubTipo_cliente1->id_SubTipo_cliente; ?>"><?php echo $SubTipo_cliente1->dsc_SubTipo_cliente; ?></option>
                                    <?php } ?>
                                </select> 
                            </div>
                            <div class="col-md-4">
                                <label for="RegimenJ">CURP:</label>
                                <input  class="form-control" type="text" name="CURP" id="CURP">		
                            </div>
                            <div class="col-md-4">
                                <label for="FormaJ">R&Eacute;GIMEN JUR&Iacute;DICO:</label> 
                                <select class="form-control" id="RegimenJ" name="RegimenJ"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Regimen as $Regimen1) { ?> 
                                        <option value="<?php echo $Regimen1->id_regimen; ?>"><?php echo $Regimen1->dsc_regimen; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="AmbitoA" class="control-label">FORMA JUR&Iacute;DICA:</label>
                                <select class="form-control" id="FormaJ" name="FormaJ"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Forma as $Forma1) { ?> 
                                        <option value="<?php echo $Forma1->id_forma; ?>"><?php echo $Forma1->dsc_forma; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-md-4">
                                <label for="Tamanio" class="control-label">&Aacute;MBITO DE ACTUACI&Oacute;N:</label>
                                <select class="form-control" id="AmbitoA" name="AmbitoA"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Ambito as $Ambito1) { ?> 
                                        <option value="<?php echo $Ambito1->id_ambito; ?>"><?php echo $Ambito1->dsc_ambito; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-md-4">
                                <label for="Sector" class="control-label">TAMA&Ntilde;O:</label>
                                <select class="form-control" id="Tamanio" name="Tamanio"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Tamanio as $Tamanio1) { ?> 
                                        <option value="<?php echo $Tamanio1->id_tamanio; ?>"><?php echo $Tamanio1->dsc_tamanio; ?></option>
                                    <?php } ?>
                                </select>			
                            </div>
                            <div class="col-md-4">
                                <label for="Clasificacion" class="control-label">SECTOR:</label>
                                <select class="form-control" id="Sector" name="Sector"  required  >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Sector as $Sector1) { ?> 
                                        <option value="<?php echo $Sector1->id_sector; ?>"><?php echo $Sector1->dsc_sector; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="Rama" class="control-label">RAMA:</label> 
                                <select class="form-control" id="Rama" name="Rama"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Rama as $Rama1) { ?> 
                                        <option value="<?php echo $Rama1->id_rama; ?>"><?php echo $Rama1->dsc_rama; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label  class="control-label"><h2>DOMICILIO</h2></label><br>		
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Calle" class="control-label">CALLE:</label>
                                <input   class="form-control" type="text" name="Calle" id="Calle" required>	

                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Numero" class="control-label">No.:</label>    
                                <input   class="form-control" type="text" name="No" id="No" required>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Colonia" class="control-label">COLONIA:</label>
                                <input   class="form-control" type="text" name="Colonia" id="Colonia" required>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="CP" class="control-label">C.P:</label>
                                <input   class="form-control" type="text" name="CP" id="CP" required>
                            </div>  
                            <div class="col-xs-6 col-sm-6" id="Pais2">
                                <label for="Pais" class="control-label">PA&Iacute;S:</label><br>
                                <select class="form-control" id="Pais" name="Pais"  required>
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Pais as $Pais1) { ?> 
                                        <option value="<?php echo $Pais1->id_pais; ?>"><?php echo $Pais1->dsc_pais; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-6 col-sm-6" id="Estado2">
                                <label for="Estado" class="control-label">ESTADO:</label><br>
                                <select class="form-control" id="Estado" name="Estado"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Estado as $Estado1) { ?> 
                                        <option value="<?php echo $Estado1->id_estado; ?>"><?php echo $Estado1->dsc_estado; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>
                            <div class="col-xs-6 col-sm-6" id="Ciudad2">
                                <label for="Ciudad" class="control-label">CIUDAD:</label><br>	
                                <select class="form-control" id="Ciudad" name="Ciudad"  required >
                                    <option value="">Selecciona</option>
                                    <?php foreach ($Ciudad as $Ciudad1) { ?> 
                                        <option value="<?php echo $Ciudad1->id_ciudad; ?>"><?php echo $Ciudad1->dsc_ciudad; ?></option>
                                    <?php } ?>
                                </select>		
                            </div>  
                            <div class="col-xs-6 col-sm-6">
                                <label for="Lada" class="control-label">LADA:</label><br>
                                <input   class="form-control" type="text" name="Lada" id="Lada" required>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Telefono" class="control-label">TEL&Eacute;FONO:</label><br>
                                <input   class="form-control" type="text" name="Tel" id="Tel" required>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Pagina" class="control-label">P&Aacute;GINA WEB:</label><br>
                                <input  class="form-control" type="text" name="Pagina" id="Pagina">
                            </div>

                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>REDES SOCIALES</h2></label>	
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div> 	 		   	  
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="facebook" class="control-label">Facebook:</label>	
                                <input class="form-control" type="text" id="facebook" name="facebook">		  	
                            </div>		   	  
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="twitter" class="control-label">Twitter:</label> 		  	
                                <input class="form-control" type="text" id="twitter" name="twitter" >		  	
                            </div>		   	  
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="linkedin" class="control-label">LinkedIn:</label> 		  	
                                <input class="form-control" type="text" id="linkedin" name="linkedin" >		  	
                            </div>		 
                            <div class="col-xs-6 col-sm-6" align="center">
                                <label for="google" class="control-label">Google+:</label>  		  	
                                <input class="form-control" type="text" id="google" name="google" >		  	
                            </div>


                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>DATOS DE CONTACTO</h2></label>	
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div> 	
                            <div class="col-xs-6 col-sm-6">
                                <label for="Contacto" class="control-label">NOMBRE DEL CONTACTO:</label><br>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Profesion" class="control-label">PROFESI&Oacute;N:</label><br>		
                            </div> 
                            <div class="col-xs-6 col-sm-6">
                                <input   class="form-control" type="text" name="Contacto" id="Contacto" required>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <input   class="form-control" type="text" name="Profesion" id="Profesion" required>	
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Cargo" class="control-label">CARGO O PUESTO:</label><br>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <label for="Correo" class="control-label">CORREO ELECTR&Oacute;NICO:</label><br>		
                            </div> 
                            <div class="col-xs-6 col-sm-6">
                                <input   class="form-control" type="text" name="Puesto" id="Puesto" required>		
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <input  class="form-control" type="email" name="Correo" id="Correo" required>	
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Lada2" class="control-label">LADA:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Telefono2" class="control-label">TEL&Eacute;FONO:</label><br>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <label for="Ext" class="control-label">EXT:</label><br>		
                            </div> 
                            <div class="col-xs-4 col-sm-4">
                                <input   class="form-control" type="text" name="C_Lada" id="C_Lada" required>		
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input   class="form-control" type="text" name="C_Tel" id="C_Tel" required>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <input   class="form-control" type="text" name="C_Ext" id="C_Ext">
                            </div>  
                            <div class="col-xs-12 col-sm-12" align="center">
                                <br><label class="control-label"><h2>SERVICIOS</h2></label>	
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <hr class="">
                            </div> 
                            <div class="form-group col-xs-6 col-sm-6" >
                                <input name="Construccion" type="checkbox" value="SÍ"/>
                                <label for="1" class="control-label">CONSTRUCCI&Oacute;N DE VIVIENDA</label><br>		
                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Ainmuebles" type="checkbox" value="SÍ"/>
                                <label for="2" class="control-label">ALQUILER DE INMUEBLES</label><br>		
                            </div> 
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Comercio" type="checkbox" value="SÍ"/>
                                <label for="3" class="control-label">COMERCIO DE MATERIALES DE LA CONSTRUCCI&Oacute;N</label><br>		
                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Amaquinaria" type="checkbox" value="SÍ"/>
                                <label for="4" class="control-label">ALQUILER DE MAQUINARIA PARA LA CONSTRUCCI&Oacute;N</label><br>		
                            </div> 
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="AdmonConstruccion" type="checkbox" value="SÍ"/>
                                <label for="5" class="control-label">ADMINISTRACI&Oacute;N Y SUPERVISI&Oacute;N DE VIVIENDA</label><br>		
                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <input name="Autotransportes" type="checkbox" value="SÍ"/>
                                <label for="6" class="control-label">AUTOTRANSPORTE FOR&Aacute;NEO DE CARGA GENERAL</label><br>		
                            </div>
                            <div class="col-xs-12 col-sm-12">
                            </div> 
                        
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                <button type="button" class="btn btn-default fa-lg" id="btnModificar"><span class="fa fa-check fa-3x success-icon"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
    cli.config.tipocliente();
    cli.config.Subtipocliente();
    cli.config.Estado();
    cli.config.Ciudad();
    var master_url = base_url + 'index.php/ctrlEmpresa/';
    
    
    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    $(document).ready(function () {
        
        
       btnEditar.click(function(){
           HoldOn.open({
               theme: 'sk-bounce',
               message: 'CARGANDO...'
           });
           $.ajax({
               url: master_url + 'getEmpresaByID',
               type:"POST",
               dataType: "JSON",
               data:{
                   ID: temp
               }
           }).done(function(data,x,jq){
               console.log(data);
               var dtm = data[0];
               $.each(dtm, function(k,v){
                   console.log(k,v);
                   mdlEditar.find("#"+k).val(v);
                   mdlEditar.find("#"+k).select2("val",v);
               });
           }).fail(function(x,y,z){
               console.log(x,y,z);
           }).always(function(){
               HoldOn.close();
           });
           console.log('ok')
           mdlEditar.modal('show');
       });
       
        onRefresh();
        var btnGuardar = $("#mdlNuevo #btnGuardar");
        btnGuardar.click(function () {
            onAdd();
        });

        var btnActualizar = $("#mdlModificar #btnGuardar");
        btnActualizar.click(function () {
            $(btnActualizar).find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            $(btnActualizar).addClass("disabled");
            var frm = $("#frmEdicion").serialize();
            $.ajax({
                url: master_url + 'onUpdate',
                type: "POST",
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                onRefresh();
                $("#mdlModificar").modal('toggle');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('FINALIZADO');
                $(btnActualizar).find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                $(btnActualizar).removeClass("disabled");
            });
        });

        $("#btnRefresh").click(function () {
            onRefresh();
        });
         
    });


    function onAdd() {
        var frm = new FormData($('#frmNuevo')[0]);
//            frm.append('IMG', JSON.stringify(detalleNC));
        $.ajax({
            url: master_url + 'onAddEmpresa',
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: frm
        }).done(function (data, x, jq) {
            console.log(data);
            onRefresh();
            $("#mdlNuevo").modal('toggle');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });
    }

    function onRefresh() {
//        $.ajax({
//            url: master_url + 'getActividades',
//            type: "POST",
//            dataType: "JSON"
//        }).done(function (data, x, jq) {
//            console.log(data)
//            var options = "<option></option>";
//            for (var x = 0; x < data.length; x++) {
//                options += '<option value="' + data[x].ID + '">' + data[x].ACTIVIDADES + '</option>';
//            }
//            $("#mdlNuevo #Actividad").html(options);
//            $("#mdlModificar #Actividad").html(options);
//        }).fail(function (x, y, z) {
//            console.log(x, y, z);
//        }).always(function () {
//            console.log('FINALIZADO');
//        });

        onGetRecords("tblResultEmpresas", master_url + "getRecords", "rEmpresas", "msgEmpresas", "NO SE ENCONTRARON REGISTROS");
    }

    function onGetRecords(tblname, url, target_result, target_fail_messages, fail_message) {
        temp = 0;
        $("#" + target_result).html("<div align='center'><span class='fa fa-spinner fa-pulse fa-5x fa-fw'></span></div>");
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
                console.log(errorThrown);
            }
        }).done(function (data) {
            var tblName = tblname;
            if (data.length > 0) {
                $("#" + target_result).html(getTable(tblName, data));
                $("#" + target_result + "  tbody > tr").each(function (k, v) {
                    var frow = $(this).find("td");
                    frow[0].innerHTML = '<div class="text-center"><span class="label label-primary">' + frow[0].innerText + '</span></div>';
                });
                var tblSelected = $('#' + tblName).DataTable(tableOptions);
                var detailRows = [];
                $('#' + tblName + ' tbody').on('click', 'tr td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = tblSelected.row(tr);
                    var idx = $.inArray(tr.attr('id'), detailRows);

                    if (row.child.isShown()) {
                        tr.removeClass('details');
                        row.child.hide();

                        // Remove from the 'open' array
                        detailRows.splice(idx, 1);
                    } else {
                        tr.addClass('details');
                        row.child(format(row.data())).show();

                        // Add to the 'open' array
                        if (idx === -1) {
                            detailRows.push(tr.attr('id'));
                        }
                    }
                });
                tblSelected.on('draw', function () {
                    $.each(detailRows, function (i, id) {
                        $('#' + id + ' td.details-control').trigger('click');
                    });
                });
                //CLICK SELECTED ROW
                $('#' + tblName + ' tbody').on('click', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("success");
                    $("#" + tblName).find("tr").removeClass("warning");
//                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                });
                //DB CLICK FOR EDIT
                $('#' + tblName + ' tbody').on('dblclick', 'tr', function () {
                    $("#" + tblName).find("tr").removeClass("warning");
                    $(this).addClass('warning');
                    var dtm = tblSelected.row(this).data();
//                console.log(dtm);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : dtm[0]);
                    $("#btnEditar").trigger("click");
                });
            } else {
                $("#" + target_fail_messages).html('<div class="alert alert-dismissible alert-warning">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<h1 class="text-center">' + fail_message + '</h1>' +
                        '</div>');
            }
            console.log('FETCHING...' + tblname);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }

</script>  