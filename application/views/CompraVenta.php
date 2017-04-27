
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

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Promesa de Compraventa</h3>
    </div>
    <?php echo form_open_multipart('controlador/CompraVenta2'); ?>     
    <div class="panel-body">
        <div class="col-md-12">
            <small style="text-justify:auto">
                Aviso y autorización de tratamiento de datos personales: La Constructora e Inmobiliaria RAROANN S.A. de C.V., con domicilio en Loma del Pedregal número 417 en la colonia Lomas del Campestre utilizará sus datos personales aquí recabados para: proveer los servicios requeridos por usted; informarle sobre cambios en los servicios que estén relacionados con lo contratado; dar cumplimiento a obligaciones contraídas; evaluar la calidad del servicio; y realizar estudios internos sobre hábitos de consumo. Para mayor información acerca del tratamiento y de los derechos que puede hacer valer, usted puede acceder al aviso de privacidad completo a través de nuestras oficinas ubicadas en la dirección descrita. Lo anterior de conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. 
            </small>
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="P" class="control-label">Desarrollo inmobiliario:</label><br>		
        </div>
        <div class="col-md-3 col-xs-12">
            <select class="form-control" id="Desarrollo" name="Desarrollo"   required="required">
                <option value="">Selecciona</option>
                <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                    <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="P" class="control-label">Fecha:</label><br>		
        </div>
        <div class="col-md-3 col-xs-12">
            <input  type="text" name="Fecha" id="datepicker" class="form-control">
        </div>
        <div class="col-md-12 col-xs-12">
            <label for="P" class="control-label">Nombre completo del cliente:</label><br>		
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Apaterno" id="Apaterno" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido paterno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Amaterno" id="Amaterno" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido materno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Nombres" id="Nombres" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Nombre(s):</label><br>		
            </div>
        </div>
        <div class="col-md-12 col-xs-12" style="background-color:#d9d9d9">
            <label for="P" class="control-label">Datos de comercialización</label><br>		
        </div>
        <div class="col-md-6 col-xs-12">
            <label for="P" class="control-label">Persona que lo refiere o recomendó:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Promotor</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Promotor" name="Referencia" id="Referencia" required/>
        </div>
        <div class="col-md-2 col-xs-12">	
        </div>
        <div class="col-md-1 col-xs-12">
        </div>
        <div class="col-md-6 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Familiar</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Familiar" name="Referencia" id="Referencia" required/>
        </div>
        <div class="col-md-2 col-xs-12">	
        </div>
        <div class="col-md-1 col-xs-12">
        </div>
        <div class="col-md-6 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Amigo</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Amigo" name="Referencia" id="Referencia" required/>
        </div>
        <div class="col-md-2 col-xs-12">	
        </div>
        <div class="col-md-1 col-xs-12">
        </div>
        <div class="col-md-6 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Otro cliente</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Otro_cliente" name="Referencia" id="Referencia" required/>
        </div>
        <div class="col-md-2 col-xs-12">	
        </div>
        <div class="col-md-1 col-xs-12">
        </div>
        <div class="col-md-6 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Iniciativa personal</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Iniciativa" name="Referencia" id="Referencia" required/>
        </div>
        <div class="col-md-2 col-xs-12">	
        </div>
        <div class="col-md-1 col-xs-12">
        </div>
        <div class="col-md-5 col-xs-12">
            <label for="P" class="control-label">Medio por el que se enteró de la venta de la vivienda:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Radio</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Radio" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Revista</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Revista" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Televisión</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Televisión" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Folletos informativos</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Folletos" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Facebook</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Facebook" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Página web</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Página" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Twiiter</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Twitter" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Correo electrónico</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Correo" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Anuncio en la paradero</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Anuncio" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Pasar por el lugar</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Pasar" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Anuncio en pendón</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Pendón" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Perifoneo</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Perifoneo" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Espectacular</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Espectacular" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Teléfono</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Teléfono" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Periódico</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Periódico" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Otro</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Otro" name="Medio" id="Medio" required/>
        </div>
        <div class="col-md-12 col-xs-12" style="">
            <label for="P" class="control-label">Datos de identificación</label><br>		
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">Género:</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <label for="Documento" class="control-label">Femenino</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <input type="radio" value="Femenino" name="Genero" id="Genero" required/>
            </div>
            <div class="col-md-6 col-xs-12">	
            </div>
            <div class="col-md-3 col-xs-12">
                <label for="Documento" class="control-label">Masculino</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <input type="radio" value="Masculino" name="Genero" id="Genero" required/>
            </div>
        </div>

        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">Estado Civil:</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <label for="Documento" class="control-label">Soltero(a)</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <input type="radio" value="Soltero" name="EstadoC" id="EstadoC" required/>
            </div>
            <div class="col-md-6 col-xs-12">	
            </div>
            <div class="col-md-3 col-xs-12">
                <label for="Documento" class="control-label">Casado(a)</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <input type="radio" value="Casado" name="EstadoC" id="EstadoC" required/>
            </div>
            <div class="col-md-6 col-xs-12">	
            </div>
            <div class="col-md-3 col-xs-12">
                <label for="Documento" class="control-label">Divorciado(a)</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <input type="radio" value="Divorciado" name="EstadoC" id="EstadoC" required/>
            </div>
            <div class="col-md-6 col-xs-12">	
            </div>
            <div class="col-md-3 col-xs-12">
                <label for="Documento" class="control-label">Viudo(a)</label>
            </div>
            <div class="col-md-3 col-xs-12">
                <input type="radio" value="Viudo" name="EstadoC" id="EstadoC" required/>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Clave de identificación de elector: </label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="ClaveElector" id="ClaveElector" class="form-control">
            </div> 
        </div> 
        <div class="col-md-6 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Registro Federal de Contribuyentes (R.F.C):</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="RFC" id="RFC" class="form-control">
            </div>
        </div> 
        <div class="col-md-6 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Clave única de registro de población (CURP):</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CURP" id="CURP" class="form-control">
            </div> 
        </div> 
        <div class="col-md-6 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Número del Seguro Social:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="NSS" id="NSS" class="form-control">
            </div>
        </div> 
        <div class="col-md-5 col-xs-12">
            <label for="P" class="control-label">Nivel de estudios:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Primaria</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Primaria" name="NivelE" id="NivelE" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Licenciatura</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Licenciatura" name="NivelE" id="NivelE" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Secundaria</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Secundaria" name="NivelE" id="NivelE" required/>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Posgrado</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Posgrado" name="NivelE" id="NivelE" required/>
        </div>
        <div class="col-md-5 col-xs-12">	
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Preparatoria</label>
        </div>
        <div class="col-md-1 col-xs-12">
            <input type="radio" value="Preparatoria" name="NivelE" id="NivelE" required/>
        </div>
        <div class="col-md-2 col-xs-12">
        </div>
        <div class="col-md-1 col-xs-12">
        </div>
        <div class="col-md-12 col-xs-12" style="">
            <label for="P" class="control-label">Datos de localización</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Calle:</label> 
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Calle" id="Calle" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Número:</label> 
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Numero" id="Numero" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Colonia:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Colonia" id="Colonia" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Código postal:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CP" id="CP" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Estado:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Estado" id="Estado" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Ciudad:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Ciudad" id="Ciudad" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12"> 
            <label for="Documento" class="control-label">Teléfono fijo</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control">
        </div> 
        <div class="col-md-4 col-xs-12">
            <label for="Documento" class="control-label">Teléfono movil:</label>
            <input type="text" name="Movil" id="Movil" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <label for="Documento" class="control-label">Correo electrónico:</label>
            <input  type="text" name="Correo" id="Correo" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">	
            <label for="Documento" class="control-label">Redes sociales.-</label>
        </div>
        <div class="col-md-4 col-xs-12">
            <label for="Documento" class="control-label">Facebook</label>
            <input type="text" name="Facebook" id="Facebook" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <label for="Documento" class="control-label">Twitter</label>
            <input  type="text" name="Twitter" id="Twitter" class="form-control">
        </div>

        <div class="col-md-12 col-xs-12" style="text-align: center">
            <hr>
            <h2>Datos laborales</h2><br>		
            <hr>
        </div>
        <div class="col-md-12 col-xs-12">
            <div class="col-md-1 col-xs-12">
                <label for="P" class="control-label">Ocupación:</label><br>		
            </div>
            <div class="col-md-2 col-xs-12" align="center">
                <input type="radio" value="Empleado" name="Ocupacion" id="Ocupacion" required class="form-control"/>
                <label for="Documento" class="control-label">Empleado</label> 
            </div>
            <div class="col-md-2 col-xs-12" align="center">
                <input type="radio" value="Ama_Casa" name="Ocupacion" id="Ocupacion" required class="form-control"/>
                <label for="Documento" class="control-label">Ama de casa</label>
            </div>  
            <div class="col-md-2 col-xs-12" align="center">
                <input type="radio" value="Independiente" name="Ocupacion" id="Ocupacion" required class="form-control"/>
                <label for="Documento" class="control-label">Trabajo independiente</label>
            </div> 
            <div class="col-md-2 col-xs-12" align="center">
                <input type="radio" value="Becario" name="Ocupacion" id="Ocupacion" required class="form-control"/>
                <label for="Documento" class="control-label">Becario</label>
            </div>  
            <div class="col-md-2 col-xs-12" align="center">
                <input type="radio" value="Propietario" name="Ocupacion" id="Ocupacion" required class="form-control"/>
                <label for="Documento" class="control-label">Propietario</label>
            </div> 
        </div>
        <div class="col-md-6 col-xs-12"> 
            <label for="P" class="control-label">Nombre del lugar de trabajo:</label><br>	 
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Trabajo" id="Trabajo" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Calle:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CalleT" id="CalleT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Número:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="NumeroT" id="NumeroT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Colonia:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="ColoniaT" id="ColoniaT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Código postal:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CPT" id="CPT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Estado:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="EstadoT" id="EstadoT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Ciudad:</label>
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CiudadT" id="CiudadT" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <label for="Documento" class="control-label">Teléfono:</label>
            <input type="text" name="TelefonoT" id="TelefonoT" class="form-control">
        </div>  
        <div class="col-md-6 col-xs-12"> 
            <label for="Documento" class="control-label">Página web:</label> 
            <input  type="text" name="PaginaT" id="PaginaT" class="form-control">
        </div>
        <div class="col-md-6 col-xs-12"> 
            <label for="Documento" class="control-label">Correo electrónico:</label> 
            <input type="text" name="CorreoT" id="CorreoT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">	
            <label for="Documento" class="control-label">Redes sociales.-</label>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Facebook</label> 
            <input  type="text" name="FacebookT" id="FacebookT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="Documento" class="control-label">Twitter</label> 
            <input  type="text" name="TwitterT" id="TwitterT" class="form-control">
        </div>
        
        <div class="col-md-12 col-xs-12" style="text-align: center">
            <hr>
            <h1>Datos socioeconómicos</h1>
            <hr>		
        </div>

        <div class="col-md-12 col-xs-12">
            <label for="P" class="control-label">Nombre del cónyuge:</label><br>		
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="ApaternoC" id="ApaternoC" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido paterno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="AmaternoC" id="AmaternoC" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido materno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="NombresC" id="NombresC" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Nombre(s):</label><br>		
            </div>
        </div> 
        <div class="col-md-8 col-xs-12">
            <div class="col-md-5 col-xs-12">
                <label for="P" class="control-label">Dependientes económicos:</label><br>		
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="1" class="control-label">Padres</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Padres" name="Dependientes" id="Dependientes" required/>
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="1" class="control-label">Pareja e hijos</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Pareja" name="Dependientes" id="Dependientes" required/>
            </div>

            <div class="col-md-5 col-xs-12">		
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="Documento" class="control-label">Hijos</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Hijos" name="Dependientes" id="Dependientes" required/>
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="Documento" class="control-label">Parientes</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Parientes" name="Dependientes" id="Dependientes" required/>
            </div>

            <div class="col-md-5 col-xs-12">		
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="Documento" class="control-label">Esposo(a)</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Esposo" name="Dependientes" id="Dependientes" required/>
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="Documento" class="control-label">Ninguno</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Ninguno" name="Dependientes" id="Dependientes" required/>
            </div>

            <div class="col-md-5 col-xs-12">		
            </div>
            <div class="col-md-2 col-xs-12">
                <label for="Documento" class="control-label">Esposo(a) e hijos</label>
            </div>
            <div class="col-md-1 col-xs-12">
                <input type="radio" value="Esposo_Hijos" name="Dependientes" id="Dependientes" required/>
            </div>
            <div class="col-md-2 col-xs-12">
            </div>
            <div class="col-md-1 col-xs-12">
            </div>

        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <label for="P" class="control-label">¿Cuenta con más de un empleo?</label><br>		
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">Sí</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="Sí" name="MasEmpleo" id="MasEmpleo" required/>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">	
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">No</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="No" name="MasEmpleo" id="MasEmpleo" required/>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <label for="P" class="control-label">Ingresos Mensuales</label><br>		
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-12 col-xs-12">
                    <input type="text"  name="Ingresos" id="Ingresos" required/>
                </div>
            </div> 
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">¿La casa donde vive es propia?</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">Sí</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="Sí" name="CasaPropia" id="CasaPropia" required/>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">No</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="No" name="CasaPropia" id="CasaPropia" required/>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <label for="1" class="control-label">Si es propia, cual es el valor de la vivienda </label>
            </div>
            <div class="col-md-6 col-xs-12">
                <label for="1" class="control-label">Si paga renta, cual es el monto mensual</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="ValorVivienda" id="ValorVivienda" class="form-control">
            </div>
            <div class="col-md-6 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Renta" id="Renta" class="form-control">
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">¿Cuenta con automóvil propio?</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">Sí</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="Sí" name="Automovil" id="Automovil" required/>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">No</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="No" name="Automovil" id="Automovil" required/>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <label for="Documento" class="control-label">Número de automoviles</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Autos" id="Autos" class="form-control">
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">¿Tiene deudas?</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">Sí</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="Sí" name="Deudas" id="Deudas" required/>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">No</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="No" name="Deudas" id="Deudas" required/>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <label for="Documento" class="control-label">Monto de la deuda </label>
            </div>
            <div class="col-md-6 col-xs-12">
                <label for="Documento" class="control-label">Cuanto abona mensualmente</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Deuda" id="Deuda" class="form-control">
            </div>
            <div class="col-md-6 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Abono" id="Abono" class="form-control">
            </div>
        </div>
        <div class="col-md-12 col-xs-12" style="background-color:#d9d9d9">
            <label for="P" class="control-label">Referencias del cliente</label><br>		
        </div>
        <div class="col-md-12 col-xs-12" style="background-color:#f2f2f2">
            <label for="P" class="control-label">Primera referencia</label><br>		
        </div>
        <div class="col-md-12 col-xs-12">
            <label for="P" class="control-label">Nombre:</label><br>		
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Apaterno1" id="Apaterno1" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido paterno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Amaterno1" id="Amaterno1" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido materno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Nombres1" id="Nombres1" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Nombre(s):</label><br>		
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="Documento" class="control-label">Profesión u oficio</label>
        </div>
        <div class="col-md-3 col-xs-12">
            <input  type="text" name="Profesion1" id="Profesion1" class="form-control">
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="Documento" class="control-label">Lugar de trabajo</label>
        </div>
        <div class="col-md-3 col-xs-12">
            <input  type="text" name="Trabajo1" id="Trabajo1" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Teléfono:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input type="text" name="Telefono1" id="Telefono1" class="form-control">
            </div> 
        </div> 
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Teléfono móvil:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input  type="text" name="Movil1" id="Movil1" class="form-control">
            </div>
        </div> 
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Correo electrónico:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input type="text" name="Correo1" id="Correo1" class="form-control">
            </div>
        </div> 

        <div class="col-md-12 col-xs-12" style="">
            <label for="P" class="control-label">Segunda referencia</label><br>		
        </div>
        <div class="col-md-12 col-xs-12">
            <label for="P" class="control-label">Nombre:</label><br>		
        </div><div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Apaterno2" id="Apaterno2" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido paterno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Amaterno2" id="Amaterno2" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Apellido materno</label><br>		
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Nombres2" id="Nombres2" class="form-control">
            </div>
            <div class="col-md-12 col-xs-12">
                <label for="P" class="control-label">Nombre(s):</label><br>		
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="Documento" class="control-label">Profesión u oficio</label>
        </div>
        <div class="col-md-3 col-xs-12">
            <input  type="text" name="Profesion2" id="Profesion2" class="form-control">
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="Documento" class="control-label">Lugar de trabajo</label>
        </div>
        <div class="col-md-3 col-xs-12">
            <input  type="text" name="Trabajo2" id="Trabajo2" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Teléfono:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input type="text" name="Telefono2" id="Telefono2" class="form-control">
            </div> 
        </div> 
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Teléfono móvil:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input  type="text" name="Movil2" id="Movil2" class="form-control">
            </div>
        </div> 
        <div class="col-md-4 col-xs-12">
            <div class="col-md-12 col-xs-12">
                <label for="Documento" class="control-label">Correo electrónico:</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <input type="text" name="Correo2" id="Correo2" class="form-control">
            </div>
        </div>

        <div class="col-md-12 col-xs-12" style="background-color:#d9d9d9">
            <label for="P" class="control-label">Datos de la promesa de compra venta</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Modelo de vivienda:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Modelo" id="Modelo" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Prototipo de vivienda:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Vivienda" id="Vivienda" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Número de lote:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Lote" id="Lote" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Número de vivienda:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="NVivienda" id="NVivienda" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Número de manzana:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Manzana" id="Manzana" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Calle:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CalleV" id="CalleV" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">Lote esquina</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">Sí</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="Sí" name="Esquina" id="Esquina" required/>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">No</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="No" name="Esquina" id="Esquina" required/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">Terreno excedente</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">Sí</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="Sí" name="Excedente" id="Excedente" required/>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <label for="Documento" class="control-label">No</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="radio" value="No" name="Excedente" id="Excedente" required/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-6 col-xs-12">	
                <label for="Documento" class="control-label">Superficie del terreno excedente</label>
            </div>
            <div class="col-md-6 col-xs-12">
                <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="SuperficieExc" id="SuperficieExc" class="form-control">
            </div>
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Precio del terreno excedente:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="PrecioExc" id="PrecioExc" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Precio total de la vivienda:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="PrecioT" id="PrecioT" class="form-control">
        </div>
        <div class="col-md-2 col-xs-12">
            <label for="P" class="control-label">Bono de descuento:</label><br>		
        </div>
        <div class="col-md-2 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="Bono" id="Bono" class="form-control">
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <label for="P" class="control-label">Cantidad que entrega para apartar la vivienda:</label><br>		
            </div>
            <div class="col-md-6 col-xs-12">
                <input type="text" name="CantEntrega" id="CantEntrega" class="form-control">
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="col-md-4 col-xs-12">
                <label for="P" class="control-label">Forma de entregar el apartado de vivienda:</label><br>		
            </div>
            <div class="col-md-8 col-xs-12" align="center">
                <div class="col-md-4 col-xs-12">
                    <input type="radio" value="Efectivo" name="FormaEnt" id="FormaEnt" required class="form-control"/>
                    <label for="">
                        Efectivo
                    </label>
                </div>  
                <div class="col-md-4 col-xs-12">
                    <input type="radio" value="Especie" name="FormaEnt" id="FormaEnt" required class="form-control"/>
                    <label for="">
                        Especie
                    </label>
                </div>
                <div class="col-md-4 col-xs-12">
                    <input type="radio" value="No" name="FormaEnt" id="FormaEnt" required class="form-control"/>
                    <label for="">Depósito</label>
                </div>
                <div class="col-md-4 col-xs-12">
                    <input type="radio" value="Contra" name="FormaEnt" id="FormaEnt" required class="form-control"/>
                    <label for="">Contra recibos</label>
                </div>        
                <div class="col-md-3 col-xs-12">
                    <input type="radio" value="Transferencia" name="FormaEnt" id="FormaEnt" required class="form-control"/>
                    <label for="">Transferencia bancaria</label>
                </div> 
            </div>
        </div>
        <div class="col-md-12"></div>
        <div class="col-md-4 col-xs-12">
            <label for="P" class="control-label">Cantidad con letra:</label><br>		
        </div>
        <div class="col-md-8 col-xs-12">
            <input style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" type="text" name="CantLetra" id="CantLetra" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12">
            <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Guardar y generar pdf</button>		
        </div>
    </div><!--FIN PANEL BODY--->
</form>
</div><!--FIN PANEL--->  
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">
        </h3>
    </div>
    <?php echo form_open_multipart('controlador/CompraVenta3'); ?>     
    <div class="panel-body">
        <div class="col-md-3 col-xs-12">
            <label for="P" class="control-label">Desarrollo inmobiliario:</label><br>		
        </div>
        <div class="col-md-3 col-xs-12">
            <select class="form-control" id="Desarrollo" name="Desarrollo"   required="required">
                <option value="">Selecciona</option>
                <?php foreach ($Desarrollo as $Desarrollo1) { ?> 
                    <option value="<?php echo $Desarrollo1->ID; ?>"><?php echo $Desarrollo1->Proyecto; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-3 col-xs-12">
            <label for="P" class="control-label">Cantidad de Folios:</label><br>		
        </div>
        <div class="col-md-3 col-xs-12">
            <input  type="number" step="1" name="Cantidad" id="Cantidad" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12">

            <button class="btn btn-lg btn-primary btn-block" type="submit"u  id="user" name="user" value="<?php echo $indice ?>" data-toggle="modal">Descargar folios en blanco PDF</button>		
        </div>
    </div><!--FIN PANEL BODY--->
</form>
</div><!--FIN PANEL--->  


<table width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

