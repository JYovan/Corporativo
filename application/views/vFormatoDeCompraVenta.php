<div class="panel panel-success">
    <div class="panel-heading" align="center">
        <h3 class="panel-title">PROMESA DE COMPRAVENTA</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12" align="center">
            <button class="btn btn-default btn-fab" id="btnNuevo"><span class="fa fa-plus"></span></button>
            <button class="btn btn-default btn-fab" id="btnEditar"><span class="fa fa-pencil"></span></button>
            <button class="btn btn-default btn-fab" id="btnRefrescar"><span class="fa fa-refresh"></span></button>
            <button class="btn btn-default btn-fab" id="btnEliminar"><span class="fa fa-trash"></span></button> 
        </div>
        <div id="" class="col-md-12">
        </div>
    </div>
</div>

<!--MODAL NUEVO-->
<div id="mdlNuevo" name="mdlNuevo" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">NUEVO FORMATO DE COMPRA VENTA</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12">
                        <h4>AVISO Y AUTORIZACIÓN DE TRATAMIENTO DE DATOS PERSONALES: LA CONSTRUCTORA E INMOBILIARIA RAROANN S.A. DE C.V., CON DOMICILIO EN LOMA DEL PEDREGAL NÚMERO 417 EN LA COLONIA LOMAS DEL CAMPESTRE UTILIZARÁ SUS DATOS PERSONALES AQUÍ RECABADOS PARA: PROVEER LOS SERVICIOS REQUERIDOS POR USTED; INFORMARLE SOBRE CAMBIOS EN LOS SERVICIOS QUE ESTÉN RELACIONADOS CON LO CONTRATADO; DAR CUMPLIMIENTO A OBLIGACIONES CONTRAÍDAS; EVALUAR LA CALIDAD DEL SERVICIO; Y REALIZAR ESTUDIOS INTERNOS SOBRE HÁBITOS DE CONSUMO. PARA MAYOR INFORMACIÓN ACERCA DEL TRATAMIENTO Y DE LOS DERECHOS QUE PUEDE HACER VALER, USTED PUEDE ACCEDER AL AVISO DE PRIVACIDAD COMPLETO A TRAVÉS DE NUESTRAS OFICINAS UBICADAS EN LA DIRECCIÓN DESCRITA. LO ANTERIOR DE CONFORMIDAD CON LA LEY FEDERAL DE PROTECCIÓN DE DATOS PERSONALES EN POSESIÓN DE LOS PARTICULARES.</h4>
                    </div>
                    <div class="col-md-6">
                        <label for="">DESARROLLO INMOBILIARIO</label>
                        <select id="Desarrollo" name="Desarrollo" class="form-control"></select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Fecha</label>
                        <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>NOMBRE COMPLETO DEL CLIENTE</h1>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="NOMBRES">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="Apaterno" id="Apaterno" class="form-control" placeholder="APELLIDO PATERNO">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="Amaterno" id="Amaterno" class="form-control" placeholder="APELLIDO MATERNO">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>DATOS DE COMERCIALIZACIÓN</h1>
                    </div>
                    <div class="col-md-6">
                        <label for="">PERSONA QUE LO REFIERE O RECOMENDÓ</label>
                        <select id="Referencia" name="Referencia" class="form-control">
                            <option></option>
                            <option value="PROMOTOR">PROMOTOR</option>
                            <option value="FAMILIAR">FAMILIAR</option>
                            <option value="AMIGO">AMIGO</option>
                            <option value="OTRO CLIENTE">OTRO CLIENTE</option>
                            <option value="INICIATIVA PERSONAL">INICIATIVA PERSONAL</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">MEDIO POR EL QUE SE ENTERÓ DE LA VENTA DE LA VIVIENDA</label>
                        <select id="Medio" name="Medio" class="form-control">
                            <option></option>
                            <option value="RADIO" >RADIO</option>
                            <option value="REVISTA" >REVISTA</option>
                            <option value="TELEVISIÓN" >TELEVISIÓN</option>
                            <option value="FOLLETOS INFORMATIVOS" >FOLLETOS INFORMATIVOS</option>
                            <option value="FACEBOOK" >FACEBOOK</option>
                            <option value="PÁGINA WEB">PÁGINA WEB</option>
                            <option value="TWIITER">TWIITER</option>
                            <option value="CORREO ELECTRÓNICO">CORREO ELECTRÓNICO</option>
                            <option value="ANUNCIO EN LA PARADERO">ANUNCIO EN LA PARADERO</option>
                            <option value="PASAR POR EL LUGAR" >PASAR POR EL LUGAR</option>
                            <option value="ANUNCIO EN PENDÓN" >	ANUNCIO EN PENDÓN</option>
                            <option value="PERIFONEO">PERIFONEO</option>
                            <option value="ESPECTACULAR">ESPECTACULAR</option>
                            <option value="TELÉFONO">TELÉFONO</option>
                            <option value="PERIÓDICO">PERIÓDICO</option>
                            <option value="OTRO" >OTRO</option>

                        </select>
                    </div>

                    <div class="col-md-12" align="center">
                        <h1>DATOS DE IDENTIFICACIÓN</h1>
                    </div>
                    <div class="col-md-6">
                        <label for="">GÉNERO</label>
                        <select id="Genero" name="Genero" class="form-control">
                            <option></option>
                            <option value="FEMENINO" >FEMENINO</option>
                            <option value="MASCULINO" >MASCULINO</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">ESTADO CIVIL</label>
                        <select id="Genero" name="Genero" class="form-control">
                            <option></option>
                            <option value="SOLTERO(A)" >SOLTERO(A)</option>
                            <option value="CASADO(A)" >CASADO(A)</option>
                            <option value="DIVORCIADO(A)" >DIVORCIADO(A)</option>
                            <option value="VIUDO(A)" >VIUDO(A)</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="ClaveElector" id="ClaveElector" class="form-control" placeholder="CLAVE DE IDENTIFICACIÓN DE ELECTOR">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="RFC" id="RFC" class="form-control" placeholder="REGISTRO FEDERAL DE CONTRIBUYENTES (R.F.C)">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="CURP" id="CURP" class="form-control" placeholder="CLAVE ÚNICA DE REGISTRO DE POBLACIÓN (CURP)">
                    </div>
                    <div class="col-md-12">
                        <BR>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="NSS" id="NSS" class="form-control" placeholder="NÚMERO DEL SEGURO SOCIAL">
                    </div>
                    <div class="col-md-6">
                        <label for="">NIVEL DE ESTUDIOS</label>
                        <select id="NivelE" name="NivelE" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="PRIMARIA" >PRIMARIA</option>
                            <option value="SECUNDARIA" >SECUNDARIA</option>
                            <option value="PREPARATORIA" >PREPARATORIA</option>
                            <option value="LICENCIATURA" >LICENCIATURA</option>
                            <option value="POSGRADO" >POSGRADO</option>
                        </select>
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>DATOS DE LOCALIZACIÓN</h1>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="Calle" id="Calle" class="form-control" placeholder="CALLE">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="Numero" id="Numero" class="form-control" placeholder="NÚMERO">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="Colonia" id="Colonia" class="form-control" placeholder="COLONIA">
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="CP" id="CP" class="form-control" placeholder="CÓDIGO POSTAL">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="Estado" id="Estado" class="form-control" placeholder="ESTADO">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="Ciudad" id="Ciudad" class="form-control" placeholder="CIUDAD">
                    </div>
                    <div class="col-md-12" align="center"></div>
                    <div class="col-md-4">
                        <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="TELÉFONO FIJO">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="Movil" id="Movil" class="form-control" placeholder="TELÉFONO MOVIL">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="Correo" id="Correo" class="form-control" placeholder="CORREO ELECTRÓNICO">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>REDES SOCIALES</h1>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="FacebookT" id="FacebookT" class="form-control" placeholder="FACEBOOK">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="TwitterT" id="TwitterT" class="form-control" placeholder="TWITTER">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>DATOS LABORALES</h1>
                    </div>
                    <div class="col-md-6">
                        <label for="">OCUPACIÓN</label>
                        <select id="Ocupacion" name="Ocupacion" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="EMPLEADO" >EMPLEADO</option>
                            <option value="AMA DE CASA" >AMA DE CASA</option>
                            <option value="TRABAJO INDEPENDIENTE" >TRABAJO INDEPENDIENTE</option>
                            <option value="BECARIO" >BECARIO</option>
                            <option value="PROPIETARIO" >PROPIETARIO</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="Trabajo" id="Trabajo" class="form-control" placeholder="NOMBRE DEL LUGAR DE TRABAJO">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-2">
                        <input type="text" name="CalleT" id="CalleT" class="form-control" placeholder="CALLE">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="NumeroT" id="NumeroT" class="form-control" placeholder="NÚMERO">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="ColoniaT" id="ColoniaT" class="form-control" placeholder="COLONIA">
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="CPT" id="CPT" class="form-control" placeholder="CÓDIGO POSTAL">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="EstadoT" id="EstadoT" class="form-control" placeholder="ESTADO">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="CiudadT" id="CiudadT" class="form-control" placeholder="CIUDAD">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <input type="text" name="TelefonoT" id="TelefonoT" class="form-control" placeholder="TELÉFONO">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="PaginaT" id="PaginaT" class="form-control" placeholder="PÁGINA WEB">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="CorreoT" id="CorreoT" class="form-control" placeholder="CORREO ELECTRÓNICO">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-6">
                        <input type="text" name="FacebookT" id="FacebookT" class="form-control" placeholder="FACEBOOK">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="TwitterT" id="TwitterT" class="form-control" placeholder="TWITTER">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>DATOS SOCIOECONÓMICOS</h1>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="NombresC" id="NombresC" class="form-control" placeholder="NOMBRES DEL CÓNYUGE">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="ApaternoC" id="ApaternoC" class="form-control" placeholder="APELLIDO PATERNO DEL CÓNYUGE">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="AmaternoC" id="AmaternoC" class="form-control" placeholder="APELLIDO MATERNO DEL CÓNYUGE">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <label for="">DEPENDIENTES ECONÓMICOS</label>
                        <select id="Dependientes" name="Dependientes" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="PADRES">PADRES</option>
                            <option value="PAREJA E HIJOS">PAREJA E HIJOS</option>
                            <option value="HIJOS">HIJOS</option>
                            <option value="PARIENTES">PARIENTES</option>
                            <option value="ESPOSO(A)">ESPOSO(A)</option>
                            <option value="NINGUNO">NINGUNO</option>
                            <option value="ESPOSO(A) E HIJOS">ESPOSO(A) E HIJOS</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="">¿CUENTA CON MÁS DE UN EMPLEO?</label>
                        <select id="MasEmpleo" name="MasEmpleo" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Ingresos" name="Ingresos" class="form-control select2" placeholder="INGRESOS MENSUALES">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <label for="">¿LA CASA DONDE VIVE ES PROPIA?</label>
                        <select id="CasaPropia" name="CasaPropia" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input id="ValorVivienda" name="ValorVivienda" class="form-control select2" placeholder="SI ES PROPIA, CUAL ES EL VALOR DE LA VIVIENDA">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input id="Renta" name="Renta" class="form-control select2" placeholder="SI PAGA RENTA, CUAL ES EL MONTO MENSUAL">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <label for="">¿CUENTA CON AUTOMÓVIL PROPIO?</label>
                        <select id="Automovil" name="Automovil" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="number" name="Autos" id="Autos" class="form-control" placeholder="NÚMERO DE AUTOMOVILES">
                    </div>
                    <div class="col-md-4">
                        <label for="">¿TIENE DEUDAS?</label>
                        <select id="Deudas" name="Deudas" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <input type="number" name="Deuda" id="Deuda" class="form-control" placeholder="MONTO DE LA DEUDA">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <input type="number" name="Abono" id="Abono" class="form-control" placeholder="CUANTO ABONA MENSUALMENTE">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>REFERENCIAS DEL CLIENTE</h1>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Nombres1" name="Nombres1" class="form-control select2" placeholder="NOMBRES">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Apaterno1" name="Apaterno1" class="form-control select2" placeholder="APELLIDO PATERNO">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Amaterno1" name="Amaterno1" class="form-control select2" placeholder="APELLIDO MATERNO">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-6">
                        <br>
                        <input type="text"  id="Profesion1" name="Profesion1" class="form-control select2" placeholder="PROFESIÓN U OFICIO">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <input type="text"  id="Trabajo1" name="Trabajo1" class="form-control select2" placeholder="LUGAR DE TRABAJO">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Telefono1" name="Telefono1" class="form-control select2" placeholder="TELÉFONO">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Movil1" name="Movil1" class="form-control select2" placeholder="TELÉFONO MÓVIL">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Correo1" name="Correo1" class="form-control select2" placeholder="CORREO ELECTRÓNICO">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>SEGUNDA REFERENCIA</h1>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Nombres2" name="Nombres2" class="form-control select2" placeholder="NOMBRES">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Apaterno2" name="Apaterno2" class="form-control select2" placeholder="APELLIDO PATERNO">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Amaterno2" name="Amaterno2" class="form-control select2" placeholder="APELLIDO MATERNO">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-6">
                        <br>
                        <input type="text"  id="Profesion2" name="Profesion2" class="form-control select2" placeholder="PROFESIÓN U OFICIO">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <input type="text"  id="Trabajo2" name="Trabajo2" class="form-control select2" placeholder="LUGAR DE TRABAJO">
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Telefono2" name="Telefono2" class="form-control select2" placeholder="TELÉFONO">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Movil2" name="Movil2" class="form-control select2" placeholder="TELÉFONO MÓVIL">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Correo2" name="Correo2" class="form-control select2" placeholder="CORREO ELECTRÓNICO">
                    </div>
                    <div class="col-md-12" align="center">
                        <h1>DATOS DE LA PROMESA DE COMPRA VENTA</h1>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Modelo" name="Modelo" class="form-control select2" placeholder="MODELO DE VIVIENDA">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Vivienda" name="Vivienda" class="form-control select2" placeholder="PROTOTIPO DE VIVIENDA">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="Lote" name="Lote" class="form-control select2" placeholder="NÚMERO DE LOTE">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="NVivienda" name="NVivienda" class="form-control select2" placeholder="NÚMERO DE VIVIENDA">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="">LOTE ESQUINA</label>
                        <select id="Lote" name="Lote" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="">TERRENO EXCEDENTE</label>
                        <select id="Lote" name="Lote" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="SuperficieExc" name="SuperficieExc" class="form-control select2" placeholder="SUPERFICIE DEL TERRENO EXCEDENTE">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="number"  id="PrecioExc" name="PrecioExc" class="form-control select2" placeholder="PRECIO DEL TERRENO EXCEDENTE">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="number"  id="PrecioT" name="PrecioT" class="form-control select2" placeholder="PRECIO TOTAL DE LA VIVIENDA">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="number"  id="Bono" name="Bono" class="form-control select2" placeholder="BONO DE DESCUENTO">
                    </div>

                    <div class="col-md-4">
                        <br>
                        <input type="number"  id="CantEntrega" name="CantEntrega" class="form-control select2" placeholder="CANTIDAD QUE ENTREGA PARA APARTAR LA VIVIENDA">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="">FORMA DE ENTREGAR EL APARTADO DE VIVIENDA</label>
                        <select id="FormaEnt" name="FormaEnt" class="form-control select2" tabindex="-1">
                            <option></option>
                            <option value="EFECTIVO">EFECTIVO</option>
                            <option value="ESPECIE">ESPECIE</option>
                            <option value="DEPÓSITO">DEPÓSITO</option>
                            <option value="CONTRA RECIBOS">CONTRA RECIBOS</option>
                            <option value="TRANSFERENCIA BANCARIA">TRANSFERENCIA BANCARIA</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <input type="text"  id="CantLetra" name="CantLetra" class="form-control select2" placeholder="CANTIDAD CON LETRA:">
                    </div>

                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-fab"><span class="fa fa-check "></span></button>
            </div>
        </div>
    </div>
</div>


<!--SCRIPTS-->
<script>
    var master_url = base_url + 'index.php/ctrlFormatoDeCompraVenta';
    var mdlNuevo = $("#mdlNuevo");
    var btnNuevo = $("#btnNuevo");

    // IIFE - Immediately Invoked Function Expression
    (function($, window, document) {

        // The $ is now locally scoped

        // Listen for the jQuery ready event on the document
        $(function() {
            btnNuevo.on('click', function() {
                mdlNuevo.modal('show');
            });


        });

        // The rest of the code goes here!

    }(window.jQuery, window, document));
    // The global jQuery object is passed as a parameter


    function getRecords() {
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {

        }).fail(function(x, y, z) {

        }).always(function() {

        });

    }
</script>