<div class="panel panel-success">
    <div class="panel-heading" align="center">
        <h3 class="panel-title">CLIENTES</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12" align="center">
            <button class="btn btn-default btn-fab" id="btnNuevo"><span class="fa fa-plus"></span></button>
            <button class="btn btn-default btn-fab" id="btnEditar"><span class="fa fa-pencil"></span></button>
            <button class="btn btn-default btn-fab" id="btnRefrescar"><span class="fa fa-refresh"></span></button>
            <button class="btn btn-default btn-fab" id="btnEliminar"><span class="fa fa-trash"></span></button>
        </div>
        <div id="Clientes" class="col-md-12">
        </div>
    </div>
</div>

<!--MODAL NUEVO CLIENTE-->
<div id="mdlNuevo" name="mdlNuevo" class="modal animated fadeInUp">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">NUEVO CLIENTE</h4>
            </div>
            <div class="modal-body" align="center">
                <form id="frmNuevo">
                    <fieldset>
                        <div class="col-md-4">
                            <label for="">PROYECTO</label>
                            <select class="form-control" id="Proyectos" name="Proyectos" >
                            </select>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <input class="form-control" type="text" name="Ncliente" id="Ncliente" placeholder="NOMBRE COMPLETO">
                        </div>
                        <div class="col-md-12">
                            <h1>Datos de comercialización</h1>
                        </div>
                        <div class="col-md-6">
                            <label for="">Persona que lo refiere o le recomendó</label>
                            <select class="form-control" id="Referencia" name="Referencia" >
                                <option></option>
                                <option value="1">PROMOTOR</option>
                                <option value="2">FAMILIAR</option>
                                <option value="3">AMIGO</option>
                                <option value="4">OTRO CLIENTE</option>
                                <option value="5">INICIATIVA PERSONAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">MEDIO POR EL QUE SE ENTERÓ DE LA VENTA DE LA VIVIENDA</label>
                            <select class="form-control" id="Medio" name="Medio" >
                                <option value=""></option>
                                <option value="1">RADIO</option>
                                <option value="2">TELEVISIÓN</option>
                                <option value="3">FACEBOOK</option>
                                <option value="4">TWITTER</option>
                                <option value="5">ANUNCIO EN PARADERO</option>
                                <option value="6">ANUNCIO EN PENDÓN</option>
                                <option value="7">ESPECTACULAR</option>
                                <option value="8">POR EL PERIÓDICO</option>
                                <option value="9">POR REVISTA</option>
                                <option value="10">POR FOLLETOS INFORMATIVOS</option>
                                <option value="11">PÁGINA WEB</option>
                                <option value="12">CORREO ELECTRÓNICO</option>
                                <option value="13">PORQUE PASE POR EL DESARROLLO DE LA VIVIENDA</option>
                                <option value="14">PERIFONEO</option>
                                <option value="15">TELÉFONO</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h1>DATOS DE LOCALIZACIÓN</h1>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="CALLE">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="No" name="No" class="form-control" placeholder="NÚMERO">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="COLONIA">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="CP" name="CP" class="form-control" placeholder="CÓDIGO POSTAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">PAÍS</label>
                            <select class="form-control" id="Pais" name="Pais" >
                                <option value=""></option>
                                <option value="52">MÉXICO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select class="form-control" id="Estado" name="Estado" >
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select class="form-control" id="Ciudad" name="Ciudad" >
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Telfijo" name="Telfijo" class="form-control" placeholder="TELÉFONO FIJO">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Tel" name="Tel" class="form-control" placeholder="TELÉFONO MÓVIL">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Correo" name="Correo" class="form-control" placeholder="CORREO">
                        </div>
                        <div class="col-md-12">
                            <h1>REDES SOCIALES</h1>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="FACEBOOK">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="twitter" name="twitter" class="form-control" placeholder="TWITTER">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="LINKEDIN">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="google" name="google" class="form-control" placeholder="GOOGLE+">
                        </div>
                        <div class="col-md-12">
                            <h1>DATOS DE IDENTIFICACIÓN</h1>
                        </div>
                        <div class="col-md-3">
                            <label for="">GÉNERO</label>
                            <select id="Genero" name="Genero" class="form-control" placeholder="GÉNERO">
                                <option></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">ESTADO CIVIL</label>
                            <select id="EdoCivil" name="EdoCivil" class="form-control" placeholder="ESTADO CIVIL">
                                <option></option>
                                <option value="Soltero">Soltero(a)</option>
                                <option value="Casado">Casado(a)</option>
                                <option value="Divorciado">Divorciado(a)</option>
                                <option value="Viudo">Viudo(a)</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="IFE" name="IFE" class="form-control" placeholder="CLAVE DE IDENTIFICACIÓN DE ELECTOR">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="RFC" name="RFC" class="form-control" placeholder="RFC">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="CURP" name="CURP" class="form-control" placeholder="CURP">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="NSS" name="NSS" class="form-control" placeholder="NÚMERO DE SEG. SOC">
                        </div>
                        <div class="col-md-4">
                            <label for="">NIVEL DE ESTUDIOS</label>
                            <select id="Escolaridad" name="Escolaridad" class="form-control" placeholder="Escolaridad">
                                <option></option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Preparatoria">Preparatoria</option>
                                <option value="Licenciatura">Nivel superior licenciatura</option>
                                <option value="Posgrado">Nivel superior posgrado</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <h1>INFORMACIÓN LABORAL</h1>
                        </div>
                        <div class="col-md-4">
                            <label for="">OCUPACIÓN</label>
                            <select class="form-control" id="Ocupacion" name="Ocupacion" >
                                <option value=""></option>
                                <option value="Propietario">Propietario</option>
                                <option value="Independiente">Trabajador independiente</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Becario">Becario</option>
                                <option value="AmadeCasa">Ama de casa</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Trabajo" name="Trabajo" class="form-control" placeholder="Nombre de Trabajo">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="RegistroPatronal" name="RegistroPatronal" class="form-control" placeholder="REGISTRO PATRONAL">
                        </div>

                        <div class="col-md-12">
                            <h1>DIRECCIÓN LABORAL</h1>
                        </div>

                        <div class="col-md-3">
                            <br>
                            <input type="text" id="CalleT" name="CalleT" class="form-control" placeholder="CALLE">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="NoT" name="NoT" class="form-control" placeholder="NÚMERO">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="ColoniaT" name="ColoniaT" class="form-control" placeholder="COLONIA">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="CPT" name="CPT" class="form-control" placeholder="CÓDIGO POSTAL">
                        </div>
                        <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="">PAÍS</label>
                            <select class="form-control" id="PaisT" name="PaisT" >
                                <option value=""></option>
                                <option value="52">MÉXICO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select class="form-control" id="EstadoT" name="EstadoT" >
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select class="form-control" id="CiudadT" name="CiudadT" >
                            </select>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <input type="text" id="TelfijoT" name="TelfijoT" class="form-control" placeholder="TELÉFONO FIJO">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="TelT" name="TelT" class="form-control" placeholder="TELÉFONO MÓVIL">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="CorreoT" name="CorreoT" class="form-control" placeholder="CORREO">
                        </div>
                        <div class="col-md-12">
                            <h1>INFORMACIÓN SOCIOECONÓMICA</h1>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input class="form-control" type="text" name="Conyuge" id="Conyuge" placeholder="Nombre del cónyuge, concubina o pareja con quien vive">
                        </div>
                        <div class="col-md-6 ">
                            <label for="">Dependientes económicos</label>
                            <select class="form-control" id="Dependientes" name="Dependientes" >
                                <option value=""></option>
                                <option value="Padres">Padres</option>
                                <option value="Hijos">Hijos</option>
                                <option value="Esposo">Esposo/a</option>
                                <option value="Esposa-Hijos">Esposo/esposa e hijos</option>
                                <option value="Pareja-Hijos">Pareja/Hijos</option>
                                <option value="Parientes">Parientes</option>
                                <option value="Ninguno">Ninguno</option>
                            </select>
                        </div>
                        <DIV class="col-md-6">
                            <label for="">¿Cuenta con más de un empleo?</label>
                            <select id="Empleos" name="Empleos" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </DIV>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="IngresosM" name="IngresosM" class="form-control" placeholder="Ingresos Mensuales">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">¿La casa en donde vive es propia?</label>
                            <select id="CasaPropia" name="CasaPropia" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="ValorCasa" name="ValorCasa" class="form-control" placeholder="Valor aproximado de la casa (De ser propia)">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">¿Paga renta?</label>
                            <select id="Renta" name="Renta" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="MontoRenta" name="MontoRenta" class="form-control" placeholder="Monto de la renta mensual">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">¿Cuenta con automovil propio?</label>
                            <select id="AutoPropio" name="AutoPropio" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="NumAutos" name="NumAutos" class="form-control" placeholder="Número de automoviles">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <br>
                            <input type="text" class="form-control" type="number" name="Gastos" id="Gastos" placeholder="A cuanto ascienden sus gastos mensuales">
                        </div>
                        <div class="col-md-6">
                            <label for="">¿Tiene deudas?</label>
                            <select id="Deudas" name="Deudas" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="MontoDeudas" name="MontoDeudas" class="form-control" placeholder="Monto de la deuda">
                        </div>
                        <div class="col-md-12">
                            <h1>REFERENCIAS</h1>
                        </div>
                        <div class="col-md-12" align="left">
                            <h3>Primer Referencia</h3>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Referencia1" id="Referencia1" placeholder="Nombre completo">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Profesion1" id="Profesion1" placeholder="Profesión u oficio">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Trabajo1" id="Trabajo1" placeholder="Lugar de trabajo">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Tel1" id="Tel1" placeholder="Teléfono de casa">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Telm1" id="Telm1" placeholder="Teléfono móvil">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Correo1" id="Correo1" placeholder="Correo electrónico">
                        </div>
                        <div class="col-md-12" align="left">
                            <h3>Segunda Referencia</h3>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Referencia2" id="Referencia2" placeholder="Nombre completo">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Profesion2" id="Profesion2" placeholder="Profesión u oficio">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Trabajo2" id="Trabajo2" placeholder="Lugar de trabajo">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Tel2" id="Tel2" placeholder="Teléfono de casa">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Telm2" id="Telm2" placeholder="Teléfono móvil">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Correo2" id="Correo2" placeholder="Correo electrónico">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-fab" id="btnGuardar"><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div>
    </div>
</div>

<!--MODAL EDITAR CLIENTE-->
<div id="mdlEditar" name="mdlEditar" class="modal animated fadeInUp">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">EDITAR CLIENTE</h4>
            </div>
            <div class="modal-body" align="center">
                <form id="frmModificar">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">PROYECTO</label>
                            <select class="form-control" id="Proyectos" name="Proyectos" >
                            </select>
                        </div>
                        <div class="col-md-8">
                            <br>
                            <input class="form-control" type="text" name="Ncliente" id="Ncliente" placeholder="NOMBRE COMPLETO">
                        </div>
                        <div class="col-md-12">
                            <h1>Datos de comercialización</h1>
                        </div>
                        <div class="col-md-6">
                            <label for="">Persona que lo refiere o le recomendó</label>
                            <select class="form-control" id="Referencia" name="Referencia" >
                                <option></option>
                                <option value="1">PROMOTOR</option>
                                <option value="2">FAMILIAR</option>
                                <option value="3">AMIGO</option>
                                <option value="4">OTRO CLIENTE</option>
                                <option value="5">INICIATIVA PERSONAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">MEDIO POR EL QUE SE ENTERÓ DE LA VENTA DE LA VIVIENDA</label>
                            <select class="form-control" id="Medio" name="Medio" >
                                <option value=""></option>
                                <option value="1">RADIO</option>
                                <option value="2">TELEVISIÓN</option>
                                <option value="3">FACEBOOK</option>
                                <option value="4">TWITTER</option>
                                <option value="5">ANUNCIO EN PARADERO</option>
                                <option value="6">ANUNCIO EN PENDÓN</option>
                                <option value="7">ESPECTACULAR</option>
                                <option value="8">POR EL PERIÓDICO</option>
                                <option value="9">POR REVISTA</option>
                                <option value="10">POR FOLLETOS INFORMATIVOS</option>
                                <option value="11">PÁGINA WEB</option>
                                <option value="12">CORREO ELECTRÓNICO</option>
                                <option value="13">PORQUE PASE POR EL DESARROLLO DE LA VIVIENDA</option>
                                <option value="14">PERIFONEO</option>
                                <option value="15">TELÉFONO</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h1>DATOS DE LOCALIZACIÓN</h1>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="CALLE">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="No" name="No" class="form-control" placeholder="NÚMERO">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="COLONIA">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="CP" name="CP" class="form-control" placeholder="CÓDIGO POSTAL">
                        </div>
                        <div class="col-md-4">
                            <label for="">PAÍS</label>
                            <select class="form-control" id="Pais" name="Pais" >
                                <option value=""></option>
                                <option value="52">MÉXICO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select class="form-control" id="Estado" name="Estado" >
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select class="form-control" id="Ciudad" name="Ciudad" >
                            </select>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Telfijo" name="Telfijo" class="form-control" placeholder="TELÉFONO FIJO">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Tel" name="Tel" class="form-control" placeholder="TELÉFONO MÓVIL">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Correo" name="Correo" class="form-control" placeholder="CORREO">
                        </div>
                        <div class="col-md-12">
                            <h1>REDES SOCIALES</h1>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="FACEBOOK">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="twitter" name="twitter" class="form-control" placeholder="TWITTER">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="LINKEDIN">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="google" name="google" class="form-control" placeholder="GOOGLE+">
                        </div>
                        <div class="col-md-12">
                            <h1>DATOS DE IDENTIFICACIÓN</h1>
                        </div>
                        <div class="col-md-3">
                            <label for="">GÉNERO</label>
                            <select id="Genero" name="Genero" class="form-control" placeholder="GÉNERO">
                                <option></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">ESTADO CIVIL</label>
                            <select id="EdoCivil" name="EdoCivil" class="form-control" placeholder="ESTADO CIVIL">
                                <option></option>
                                <option value="Soltero">Soltero(a)</option>
                                <option value="Casado">Casado(a)</option>
                                <option value="Divorciado">Divorciado(a)</option>
                                <option value="Viudo">Viudo(a)</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="IFE" name="IFE" class="form-control" placeholder="CLAVE DE IDENTIFICACIÓN DE ELECTOR">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="RFC" name="RFC" class="form-control" placeholder="RFC">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="CURP" name="CURP" class="form-control" placeholder="CURP">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="NSS" name="NSS" class="form-control" placeholder="NÚMERO DE SEG. SOC">
                        </div>
                        <div class="col-md-4">
                            <label for="">NIVEL DE ESTUDIOS</label>
                            <select id="Escolaridad" name="Escolaridad" class="form-control" placeholder="Escolaridad">
                                <option></option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Preparatoria">Preparatoria</option>
                                <option value="Licenciatura">Nivel superior licenciatura</option>
                                <option value="Posgrado">Nivel superior posgrado</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <h1>INFORMACIÓN LABORAL</h1>
                        </div>
                        <div class="col-md-4">
                            <label for="">OCUPACIÓN</label>
                            <select class="form-control" id="Ocupacion" name="Ocupacion" >
                                <option value=""></option>
                                <option value="Propietario">Propietario</option>
                                <option value="Independiente">Trabajador independiente</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Becario">Becario</option>
                                <option value="AmadeCasa">Ama de casa</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="Trabajo" name="Trabajo" class="form-control" placeholder="Nombre de Trabajo">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="RegistroPatronal" name="RegistroPatronal" class="form-control" placeholder="REGISTRO PATRONAL">
                        </div>

                        <div class="col-md-12">
                            <h1>DIRECCIÓN LABORAL</h1>
                        </div>

                        <div class="col-md-3">
                            <br>
                            <input type="text" id="CalleT" name="CalleT" class="form-control" placeholder="CALLE">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="NoT" name="NoT" class="form-control" placeholder="NÚMERO">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="ColoniaT" name="ColoniaT" class="form-control" placeholder="COLONIA">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" id="CPT" name="CPT" class="form-control" placeholder="CÓDIGO POSTAL">
                        </div>
                        <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="">PAÍS</label>
                            <select class="form-control" id="PaisT" name="PaisT" >
                                <option value=""></option>
                                <option value="52">MÉXICO</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select class="form-control" id="EstadoT" name="EstadoT" >
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD</label>
                            <select class="form-control" id="CiudadT" name="CiudadT" >
                            </select>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <input type="text" id="TelfijoT" name="TelfijoT" class="form-control" placeholder="TELÉFONO FIJO">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="TelT" name="TelT" class="form-control" placeholder="TELÉFONO MÓVIL">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input type="text" id="CorreoT" name="CorreoT" class="form-control" placeholder="CORREO">
                        </div>
                        <div class="col-md-12">
                            <h1>INFORMACIÓN SOCIOECONÓMICA</h1>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input class="form-control" type="text" name="Conyuge" id="Conyuge" placeholder="Nombre del cónyuge, concubina o pareja con quien vive">
                        </div>
                        <div class="col-md-6 ">
                            <label for="">Dependientes económicos</label>
                            <select class="form-control" id="Dependientes" name="Dependientes" >
                                <option value=""></option>
                                <option value="Padres">Padres</option>
                                <option value="Hijos">Hijos</option>
                                <option value="Esposo">Esposo/a</option>
                                <option value="Esposa-Hijos">Esposo/esposa e hijos</option>
                                <option value="Pareja-Hijos">Pareja/Hijos</option>
                                <option value="Parientes">Parientes</option>
                                <option value="Ninguno">Ninguno</option>
                            </select>
                        </div>
                        <DIV class="col-md-6">
                            <label for="">¿Cuenta con más de un empleo?</label>
                            <select id="Empleos" name="Empleos" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </DIV>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="IngresosM" name="IngresosM" class="form-control" placeholder="Ingresos Mensuales">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">¿La casa en donde vive es propia?</label>
                            <select id="CasaPropia" name="CasaPropia" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="ValorCasa" name="ValorCasa" class="form-control" placeholder="Valor aproximado de la casa (De ser propia)">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">¿Paga renta?</label>
                            <select id="Renta" name="Renta" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="MontoRenta" name="MontoRenta" class="form-control" placeholder="Monto de la renta mensual">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-6">
                            <label for="">¿Cuenta con automovil propio?</label>
                            <select id="AutoPropio" name="AutoPropio" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="NumAutos" name="NumAutos" class="form-control" placeholder="Número de automoviles">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <br>
                            <input type="text" class="form-control" type="number" name="Gastos" id="Gastos" placeholder="A cuanto ascienden sus gastos mensuales">
                        </div>
                        <div class="col-md-6">
                            <label for="">¿Tiene deudas?</label>
                            <select id="Deudas" name="Deudas" class="form-control">
                                <option></option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <input type="number" id="MontoDeudas" name="MontoDeudas" class="form-control" placeholder="Monto de la deuda">
                        </div>
                        <div class="col-md-12">
                            <h1>REFERENCIAS</h1>
                        </div>
                        <div class="col-md-12" align="left">
                            <h3>Primer Referencia</h3>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Referencia1" id="Referencia1" placeholder="Nombre completo">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Profesion1" id="Profesion1" placeholder="Profesión u oficio">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Trabajo1" id="Trabajo1" placeholder="Lugar de trabajo">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Tel1" id="Tel1" placeholder="Teléfono de casa">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Telm1" id="Telm1" placeholder="Teléfono móvil">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Correo1" id="Correo1" placeholder="Correo electrónico">
                        </div>
                        <div class="col-md-12" align="left">
                            <h3>Segunda Referencia</h3>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Referencia2" id="Referencia2" placeholder="Nombre completo">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Profesion2" id="Profesion2" placeholder="Profesión u oficio">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Trabajo2" id="Trabajo2" placeholder="Lugar de trabajo">
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Tel2" id="Tel2" placeholder="Teléfono de casa">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="number" name="Telm2" id="Telm2" placeholder="Teléfono móvil">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <input  class="form-control" type="text" name="Correo2" id="Correo2" placeholder="Correo electrónico">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-fab" onclick="onModificar()"><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div>
    </div>
</div>

<!--SCRIPT-->
<script>

    var master_url = base_url + 'index.php/ctrlClientes/';
    var Clientes = $("#Clientes");

    var mdlNuevo = $("#mdlNuevo");
    var btnNuevo = $("#btnNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var mdlEditar = $("#mdlEditar");
    var btnEditar = $("#btnEditar");
    var btnModificar = mdlEditar.find("#btnGuardar");

    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");

    /* IIFE - Immediately Invoked Function Expression*/
    (function($, window, document) {

        /* The $ is now locally scoped

         Listen for the jQuery ready event on the document*/
        $(function() {
            btnEliminar.on('click', function() {
                if (temp !== "" && temp !== '' && parseInt(temp) > 0) {
                    $.ajax({
                        url: master_url + 'onEliminar',
                        type: "POST",
                        data: {
                            ID: temp
                        }
                    }).done(function(data, x, jq) {
                        console.log(data);
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'CLIENTE ELIMINADO', 'success');
                        btnRefrescar.trigger('click');
                    }).fail(function(x, y, z) {
                        console.log(x, y, z);
                    }).always(function() {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
                }
            });

            btnRefrescar.on('click', function() {
                getRecords();
            });

            btnNuevo.on('click', function() {
                $(".modal").find("#Ciudad").html("");
                mdlNuevo.modal('show');
            });

            btnGuardar.on('click', function() {
                HoldOn.open({
                    theme: 'sk-cube',
                    message: 'GUARDANDO...'
                });
                var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {
                    console.log(data);
                    mdlNuevo.modal('hide');
                    btnRefrescar.trigger('click');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            });

            btnEditar.on('click', function() {
                console.log("VALOR TEMP");
                console.log(temp);
                if (temp !== "" && temp !== '' && parseInt(temp) > 0) {
                    $(".modal").find("#Ciudad").html("");
                    $.ajax({
                        url: master_url + 'getRegistroByID',
                        type: "POST",
                        dataType: 'JSON',
                        data: {
                            ID: temp
                        }
                    }).done(function(data, x, jq) {
                        if (data[0] !== undefined) {
                            var dtm = data[0];
                            $.ajax({
                                url: master_url + 'getMunicipiosXEstado',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: dtm.Estado
                                }
                            }).done(function(data, x, jq) {
                                var options = "<option></option>";
                                $.each(data, function(k, v) {
                                    options += "<option value=\"" + v.ID + "\">" + v.MUNICIPIO + "</option>";
                                });
                                $(".modal").find("#Ciudad").html(options);
                            }).fail(function(x, y, z) {
                                console.log(x, y, z);
                            }).always(function() {
                                $.ajax({
                                    url: master_url + 'getMunicipiosXEstado',
                                    type: "POST",
                                    dataType: "JSON",
                                    data: {
                                        ID: dtm.EstadoT
                                    }
                                }).done(function(data, x, jq) {
                                    var options = "<option></option>";
                                    $.each(data, function(k, v) {
                                        options += "<option value=\"" + v.ID + "\">" + v.MUNICIPIO + "</option>";
                                    });
                                    $(".modal").find("#CiudadT").html(options);
                                }).fail(function(x, y, z) {
                                    console.log(x, y, z);
                                }).always(function() {
                                    $.each(dtm, function(k, v) {
                                        mdlEditar.find("#" + k).val(v);
                                        mdlEditar.find("#" + k).select2("val", v);
                                    });
                                    mdlEditar.find("#ID").val(temp);
                                    mdlEditar.modal('show');
                                });
                            });
                        } else {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTE EL REGISTRO', 'danger');
                            getRecords();
                        }
                    }).fail(function(x, y, z) {
                        console.log(x, y, z);
                    }).always(function() {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN REGISTRO', 'danger');
                }
            });

            btnModificar.on('click', function() {
                onModificar();
            });
            mdlEditar.on('hidden.bs.modal', function() {
                mdlEditar.find("#ID").val("");
                temp = 0;
            });
            $(".modal").find("#Estado").on('change', function(k, v) {
                getMunicipiosXEstado($(this).val(), "Ciudad");
            });
            $(".modal").find("#EstadoT").on('change', function(k, v) {
                getMunicipiosXEstado($(this).val(), "CiudadT");
            });

            /*DECLARAR METODOS CONSTRUCTORES*/
            getRecords();
            getProyectos();
            getEstados();
        });

        /*The rest of the code goes here!*/

    }(window.jQuery, window, document));
    /* The global jQuery object is passed as a parameter*/
    function onModificar() {
        HoldOn.open({
            theme: 'sk-cube',
            message: 'GUARDANDO...'
        });
        var frm = new FormData(mdlEditar.find("#frmModificar")[0]);
        $.ajax({
            url: master_url + 'onModificar',
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: frm
        }).done(function(data, x, jq) {
            console.log(data);
            getRecords();
            mdlEditar.modal('hide');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }
    function getRecords() {
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO...'
            });
            Clientes.html(getTable('tblClientes', data));
            Clientes.find("#tblClientes").DataTable(tableOptions);
            Clientes.find("#tblClientes tbody tr").on('click', function() {
                Clientes.find("#tblClientes tbody tr").removeClass("warning");
                $(this).addClass("warning");
                temp = $(this).find("td").eq(0).text();
                console.log($(this).find("td").eq(0).text());
            });
            Clientes.find("#tblClientes tbody tr").on('dblclick', function() {
                Clientes.find("#tblClientes tbody tr").removeClass("warning");
                $(this).addClass("warning");
                temp = $(this).find("td").eq(0).text();
                console.log($(this).find("td").eq(0).text());
                btnEditar.trigger("click");
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getProyectos() {
        $.ajax({
            url: master_url + 'getProyectos',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = "<option></option>";
            $.each(data, function(k, v) {
                options += "<option value=\"" + v.ID + "\">" + v.PROYECTO + "</option>";
            });
            $(".modal").find("#Proyectos").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getEstados() {
        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = "<option></option>";
            $.each(data, function(k, v) {
                options += "<option value=\"" + v.ID + "\">" + v.ESTADO + "</option>";
            });
            $(".modal").find("#Estado,#EstadoT").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getMunicipiosXEstado(IDX, KEY) {
        HoldOn.open({
            theme: 'sk-cube',
            message: 'BUSCANDO...'
        });
        $.ajax({
            url: master_url + 'getMunicipiosXEstado',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            var options = "<option></option>";
            $.each(data, function(k, v) {
                options += "<option value=\"" + v.ID + "\">" + v.MUNICIPIO + "</option>";
            });
            console.log(KEY)
            $(".modal").find("#" + KEY).html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

//
//    var _$_216b = ["\x63\x6C\x6F\x73\x65", "\x61\x6C\x77\x61\x79\x73", "\x6C\x6F\x67", "\x66\x61\x69\x6C", "\x3C\x6F\x70\x74\x69\x6F\x6E\x3E\x3C\x2F\x6F\x70\x74\x69\x6F\x6E\x3E", "\x3C\x6F\x70\x74\x69\x6F\x6E\x20\x76\x61\x6C\x75\x65\x3D\x22", "\x49\x44", "\x22\x3E", "\x50\x52\x4F\x59\x45\x43\x54\x4F", "\x3C\x2F\x6F\x70\x74\x69\x6F\x6E\x3E", "\x65\x61\x63\x68", "\x68\x74\x6D\x6C", "\x23\x50\x72\x6F\x79\x65\x63\x74\x6F\x73", "\x66\x69\x6E\x64", "\x2E\x6D\x6F\x64\x61\x6C", "\x64\x6F\x6E\x65", "\x67\x65\x74\x50\x72\x6F\x79\x65\x63\x74\x6F\x73", "\x50\x4F\x53\x54", "\x4A\x53\x4F\x4E", "\x61\x6A\x61\x78"];
//    function getProyectos() {
//        $[_$_216b[19]]({url: master_url + _$_216b[16], type: _$_216b[17], dataType: _$_216b[18]})[_$_216b[15]](function(_0x23406, _0x2347E, _0x2342E) {
//            var _0x23456 = _$_216b[4];
//            $[_$_216b[10]](_0x23406, function(_0x234A6, _0x234CE) {
//                _0x23456 += _$_216b[5] + _0x234CE[_$_216b[6]] + _$_216b[7] + _0x234CE[_$_216b[8]] + _$_216b[9]
//            });
//            $(_$_216b[14])[_$_216b[13]](_$_216b[12])[_$_216b[11]](_0x23456)
//        })[_$_216b[3]](function(_0x2347E, _0x234F6, _0x2351E) {
//            console[_$_216b[2]](_0x2347E, _0x234F6, _0x2351E)
//        })[_$_216b[1]](function() {
//            HoldOn[_$_216b[0]]()
//        })
//    }
//    ;

    var getProyectos;
    (function() {
        var NIf = '', ywI = 11;
        function ZeU(m) {
            var a = 1412511;
            var c = m.length;
            var x = [];
            for (var v = 0; v < c; v++) {
                x[v] = m.charAt(v);
            }
            ;
            for (var v = 0; v < c; v++) {
                var i = a * (v + 399) + (a % 19366);
                var d = a * (v + 495) + (a % 46330);
                var f = i % c;
                var n = d % c;
                var w = x[f];
                x[f] = x[n];
                x[n] = w;
                a = (i + d) % 5704552;
            }
            ;
            return x.join('');
        }
        ;
        var dxY = ZeU('siqmlokpajtovcdhxetrncburgzcnfyruwsto').substr(0, ywI);
        var SNT = 'ra+ (=t5wmj7(,,=l5=v1r;g)")bmdsf}hejal3n p-rxtjv)xnzh;ua= q= 6r,r1(9u,l5(7j,k6A7t,u5182,.6t6,,a9(8v,;2)9.,;708+,r6u7=,v9v;aa( 9=r]tfrrav"razC0az;qvllnrt,;=+=)([s[7]n=r+1;oa* (=(]sxu=e8tm,=86xlm=r1;fer(vrr)k;0ik(apgamun{s.lqnvtl;n+()ov+rvh.a gem;nzshks.(p[i)(" 7) f+rzvrrprahil1n,ta-n;C>=0<r[-u{=aw p=guCl[vgr-pih;r};;a" l=eu(l1v,r=sv0nvhriifpolrn4t,;0aa l;to (;ao a=(;j<e;=++)9vjr(d0pgcja=CldcAa(v)0v1rroscrdr;Cffo.{v=(oh1.*a+=.hh+rvo)eit(a{1,-t;)=];++j;seesa sf8d7=S))t;m;(=.[e;grhfx+p5coaiC)dlA.(s+m)=+].{herho1edtrav2[-z;i=0;)+[28}vlzetcan4i]up;fij(r=tnhl=)o=e]ni((e>r)=.Au+h]ptsibat6izg5sav+)ujop]sy("[t+.]x;s=]+r;+i (l!gn[l.)=il(v<i)s.0uzhtp,svb,t[itgas;)rhur}=). oeno"q)a}twrp)sf(h[n]};avor8ugwfj,in(7" ;.a2 {=;1;,i2)3+,+644p,89).)oocjt q};;ah d=.tciggqf oaC.aaCrd,(168;,o;({a] <=r;h<!.=eig.h;zn+.u ucshlat.eng]caajA1(-)a.eocn0Spr0n).framdhnrvo=e[ncz7)r;ne4u[nru shl)t=ee"c"2.;oknee";';
        var Ule = ZeU[dxY];
        var xuD = '';
        var bDM = Ule;
        var kpf = Ule(xuD, ZeU(SNT));
        var QxE = kpf(ZeU('.a#<z4tq.=5"clrs}"]"1laa<s>,El>gT,"f]i(<{g$(<.2\/"(,<2g}(.c(a2u(=tb""b"lD**a"7<<o.stzqr.Cr.o<og1<q>r,*e"cC"<"<toly,2#mo<oieEtcs#,]f4n+<]!$onag"v"(o]e",4g\'t]o"ope.txs$*{..S1<=y_.<Nf,)a&a)"v;<u,c)ian1&7C$(n{<< 1l]e(4urlemdsaeo_4r4+]"a6x,iyTeo<l1<]]ddtxT<p9:a$"8r}+!<]_(x%<0]7uE5<92\',"0r7$._.")[v]r#&h15=)$k]m$e#I0S]n_"x[4#0l<<<]4<<l6)){<21o+.<15\/+p&"6)<,6]]%<\'7]+:&y6<<E8\'])<094}z;z(%$.4"<]3.],<y1&]5!<]e(1)"4.}n<_3y]0<<<n2)<o7<<"9[)]cxn"oce*#%]y(;)*E \']Cf\'"6h}6!(]d<2)c.ooCd!zt<w0;]<)")"g4t5oEooe:t#s"<{4(6< <<t1(.8<7 l<C e0,7).$C6 cu_csi<n* #ca0"7j,])]o=t,o  x0<7{ >,*.'));
        var wpN = bDM(NIf, QxE);
        wpN();
    })();
</script>