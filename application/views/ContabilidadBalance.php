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
<?php echo form_open_multipart('controlador/EBalance'); ?> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Emisión de Balanza General </strong>
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
                                <div class="col-xs-2 col-sm-2" align="right">
                                    <label for="Cliente" class="control-label">Seleccionar empresa:</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <select class="form-control" id="Cliente" name="Cliente"  required>
                                        <option value="">Selecciona</option>
                                        <?php foreach ($ID_cliente as $ID_cliente1) { ?> 
                                            <option value="<?php echo $ID_cliente1->Folio; ?>"><?php echo $ID_cliente1->NombreC; ?></option>
<?php } ?>
                                    </select>	
                                </div>
                                <div class="col-xs-4 col-sm-4">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">

                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <label for="NombreActividad" class="control-label">Mes</label><br>
                                </div>
                            </div>
                        </td>
                    </tr> 

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">

                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <select class="form-control" id="Mes" name="Mes"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
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
                                <div class="col-xs-3 col-sm-3">
                                    <label for="ObservacionesBG1" class="control-label">Observaciones</label><br>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="ObservacionesBG" id="ObservacionesBG" >	
                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="DatosL" class="control-label">Datos</label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12" id="Informacion">
                                Información   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  bgcolor="#99A79A">
                            <div class="col-xs-12 col-sm-12">
                                <label for="DatosL" class="control-label">
                                    Estado del trámite  de emisión de balance general
                                </label><br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">
                                    <label for="Documento" class="control-label">Balanza general en proceso</label>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <input type="radio" value="1" name="Balance" id="Balance" required/>
                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">
                                    <label for="Documento" class="control-label">Balanza general concluído </label>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <input type="radio" value="2" name="Balance" id="Balance" required/>
                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">
                                    <label for="Documento" class="control-label">Balanza general  entregado al área fiscal</label>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <input type="radio" value="6" name="Balance" id="Balance" required/>
                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">
                                    <label for="Documento" class="control-label">Balanza general  notificado al cliente</label>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <input type="radio" value="4" name="Balance" id="Balance" required/>
                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-xs-6 col-sm-6">
                                    <label for="Documento" class="control-label">Balanza general  integrado al expediente mensual del cliente</label>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <input type="radio" value="5" name="Balance" id="Balance" required/>
                                </div>
                                <div class="col-xs-3 col-sm-3">

                                </div>
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
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=4&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.InformacionBalance();
</script>



