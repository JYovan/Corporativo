
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
                <h3 class="panel-title">Registro de Tipo de Vivienda
            </div> 
            <div class="panel-body">
                <?php echo form_open_multipart('controlador/RegistroVivienda'); ?>    
                <div class="col-xs-12 col-sm-12">
                    <strong>Datos del desarrollo</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="2" class="control-label">Modelo (Prototipo) de vivienda</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" class="form-control" name="Modelo" id="Modelo" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="1" class="control-label">Precio</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="number" step="0.01" class="form-control" name="Precio" id="Precio" required>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="2" class="control-label">Precio*m2</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="number" step="0.01" class="form-control" name="PrecioM2" id="PrecioM2" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	

                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="1" class="control-label">Metros de frente</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="number" step="0.01" class="form-control" name="MetrosF" id="MetrosF" required>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="2" class="control-label">Metros de fondo</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="number" step="0.01" class="form-control" name="MetrosFondo" id="MetrosFondo" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="3" class="control-label">M2 del terreno</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="number" step="0.01" class="form-control" name="Terreno" id="Terreno" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="1" class="control-label">M2 de construcción</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input type="number" step="0.01" class="form-control" name="Contruccion" id="Contruccion" required>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="2" class="control-label">Niveles</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="number" class="form-control" name="Niveles" id="Niveles" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="3" class="control-label">Recamaras</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input   type="number" class="form-control" name="Recamaras" id="Recamaras" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="1" class="control-label">Espacios para automovil</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="number" class="form-control" name="EspaciosAuto" id="EspaciosAuto" required>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label  for="2" class="control-label">Baños</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="number" step="0.01" class="form-control" name="Banios" id="Banios" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	

                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Vestidor" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Vestidor recámara principal</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="PatioServ" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Patio de servicio (lavado)</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Sala" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Sala</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Comedor" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Comedor</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="JardinTrasero" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Jardín trasero</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="CuartoLavado" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Cuarto de servicio (lavado)</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="SalaTV" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Sala de TV</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Cocina" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Cocina</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="JardinFrente" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Jardín de frente</label><br>	
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="color:#FFF">Espacios de vivienda</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	      
                    <input name="Vestibulo" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Vestíbulo</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label  for="2" class="control-label">Escaleras</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="number" class="form-control" name="Escaleras" id="Escaleras" >
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label  for="2" class="control-label">Pasillos</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()"  type="number" class="form-control" name="Pasillos" id="Pasillos" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="color:#FFF">Zonas auxiliares de trabajo</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Tendedero" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Tendedero</label><br>	
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="color:#FFF">Cuartos de almacenamiento</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Bodega" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Bodega</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Despensa" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Despensa</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="VestidorTrastero" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Vestidor trastero</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Desvan" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Desván</label><br>	
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="color:#FFF">Salas complementarias</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Despacho" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Despacho</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Estudio" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Estudio</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Biblioteca" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Biblioteca</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="SalaJuegos" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Sala de juegos</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="SalaFumadores" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Sala de fumadores</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Sauna" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Sauna</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Gimnasio" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Gimnasio</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Otras" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Otras</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	

                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="color:#FFF">Equipamiento/Amueblados</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="CocinaInt" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Cocina integral</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Estufa" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Estufa</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Muebles" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Muebles de baño</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Closets" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Closets</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Lavadero" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Lavadero</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Calentador" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Calentador de paso</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Cisterna" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Cisterna</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Canceles" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Canceles de baño</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	

                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="">Zonas de estar en el exterior</strong>		
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Terrazas" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Terrazas</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Porches" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Porches</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Piscina" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Piscina</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Pergola" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Pérgola</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="Invernadero" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Invernadero</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="PistaJuego" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Pista de juego</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	
                    <input name="EspaciosDep" type="checkbox" value="SÍ"/>
                    <label for="1" class="control-label">Espacios deportivos</label><br>	
                </div>
                <div class="col-md-4 col-xs-12">	

                </div>
                <div class="col-md-4 col-xs-12">	

                </div>
                <div class="col-md-12 col-xs-12">  
                    </br>
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
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=20&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table>
    </div>
    <script>
        cli.config.Proyecto();
    </script>

