<div class="row">
    <fieldset>
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary container-fluid">
                <div class="panel-heading row">
                    <div class="col-md-2 panel-title">
                        <a  href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-arrow-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="ATRAS"></span>
                        </a> 
                    </div>
                    <div class="col-md-8"> 
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE PROVEEDORES <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <div align="center">
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-info btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                        <button id="btnEditar" class="btn btn-success btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="EDITAR">
                            <span class="fa fa-pencil fa-3x"></span>
                        </button>
                        <button id="btnRefresh" class="btn btn-yellow btn-lg" 
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title=""  type="button"
                                data-original-title="REFRESCAR">
                            <span class="fa fa-refresh fa-3x"></span>
                        </button>
                    </div>
                    <div id="msgProveedores" class="col-md-12"></div>
                    <div id="rProveedores" class=""></div> 
                </div>
            </div>
        </div>
    </fieldset>
</div>
<!--- MODALES --->


<div id="mdlNuevo" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO PROVEEDOR </h2>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-6">
                            <br>
                            <label for="">TIPO</label>
                            <select id="Tipo" name="Tipo" class="form-control">

                            </select>  
                        </div> 
                        <div class="col-md-6">
                            <label for="">NOMBRE COMPLETO O DENOMINACIÓN SOCIAL</label>
                            <input type="text" id="Proveedor" name="Proveedor" class="form-control" placeholder="" required="">
                        </div>
                        <div class="col-md-4">
                            <label for="">RFC</label> 
                            <input type="text" id="RFC" name="RFC" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">CORREO</label>
                            <input type="email" class="form-control" id="Correo" name="Correo"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">PÁGINA WEB</label>
                            <input type="text" id="Pagina" name="Pagina" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class="">DATOS DE LOCALIZACIÓN</h2>

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" id="No" name="No" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <select id="Municipio" name="Municipio" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                            <input type="tel" class="form-control" id="Tel" name="Tel">
                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class=" ">DATOS DE CONTACTO</h2>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>  
                        <div class="col-md-12">
                            <label for="">NOMBRE COMPLETO</label>
                            <input type="text" class="form-control" id="Contacto" name="Contacto">
                        </div>
                        <div class="col-md-6">
                            <label for="">TELÉFONO</label>
                            <input type="tel" id="TelContacto" name="TelContacto" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">CORREO</label>
                            <input type="email" id="MailContacto" name="MailContacto" class="form-control">
                        </div>

                        <div class="col-md-12" align="center">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class=" ">INFORMACIÓN ESPECÍFICA DE LA PERSONA FÍSICA O MORAL</h2>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="">RAMA</label>
                            <select id="Rama" name="Rama" class="form-control">
                                <option></option>
                            </select>  
                        </div>

                        <div class="col-md-6">
                            <label for="">ACTIVIDAD</label>
                            <select id="Actividad" name="Actividad" class="form-control">
                                <option></option>
                            </select>  
                        </div>

                        <div class="col-md-6">
                            <label for="">TAMAÑO DE LA ORGANIZACIÓN</label>
                            <select id="Tamanio" name="Tamanio" class="form-control"> 
                                <option></option>
                            </select>  
                        </div>

                        <div class="col-md-12">
                            <label for="">PRINCIPALES BIENES Y/O SERVICIOS QUE OFRECE</label>
                            <textarea id="Servicios" name="Servicios" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>


                        <div class="col-md-12" align="center">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class=" ">INFORMACIÓN BANCARIA PARA PAGO VÍA TRANSFERENCIA</h2>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">TITULAR DE LA CUENTA</label>
                            <input type="text" class="form-control" id="Titular" name="Titular">
                        </div>

                        <div class="col-md-6">
                            <label for="">RFC</label>
                            <input type="text" class="form-control" id="RFCcuenta" name="RFCcuenta">
                        </div>

                        <div class="col-md-4">
                            <label for="">NÚMERO DE CUENTA</label>
                            <input type="text" class="form-control" id="Cuenta" name="Cuenta">
                        </div>

                        <div class="col-md-4">
                            <label for="">NOMBRE DEL BANCO</label>
                            <input type="text" class="form-control" id="Banco" name="Banco">
                        </div>

                        <div class="col-md-4">
                            <label for="">CLABE</label>
                            <input type="text" class="form-control" id="CLABE" name="CLABE">
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" ><span class="fa fa-check fa-3x"></span></button>
                <!--<button class="btn btn-lg btn-success hide disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>-->
            </div>
        </div>
    </div>
</div>


<div id="mdlModificar" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="text-center modal-title" id="myModalLabel">NUEVO PROVEEDOR </h2>
            </div> 
            <form id="frmEdicion">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" class="form-control disabled" id="ID" name="ID" readonly="">
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label for="">TIPO</label>
                            <select id="Tipo" name="Tipo" class="form-control">

                            </select>  
                        </div> 
                        <div class="col-md-6">
                            <label for="">NOMBRE COMPLETO O DENOMINACIÓN SOCIAL</label>
                            <input type="text" id="Proveedor" name="Proveedor" class="form-control" placeholder="" required="">
                        </div>
                        <div class="col-md-4">
                            <label for="">RFC</label> 
                            <input type="text" id="RFC" name="RFC" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">CORREO</label>
                            <input type="email" class="form-control" id="Correo" name="Correo"> 
                        </div>
                        <div class="col-md-4">
                            <label for="">PÁGINA WEB</label>
                            <input type="text" id="Pagina" name="Pagina" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class="">DATOS DE LOCALIZACIÓN</h2>

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                            <input type="text" id="Calle" name="Calle" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                            <input type="text" id="No" name="No" value="" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                            <select id="Municipio" name="Municipio" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                            <select id="Estado" name="Estado" class="form-control">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                            <input type="tel" class="form-control" id="Tel" name="Tel">
                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class=" ">DATOS DE CONTACTO</h2>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>  
                        <div class="col-md-12">
                            <label for="">NOMBRE COMPLETO</label>
                            <input type="text" class="form-control" id="Contacto" name="Contacto">
                        </div>
                        <div class="col-md-6">
                            <label for="">TELÉFONO</label>
                            <input type="tel" id="TelContacto" name="TelContacto" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">CORREO</label>
                            <input type="email" id="MailContacto" name="MailContacto" class="form-control">
                        </div>

                        <div class="col-md-12" align="center">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class=" ">INFORMACIÓN ESPECÍFICA DE LA PERSONA FÍSICA O MORAL</h2>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="">RAMA</label>
                            <select id="Rama" name="Rama" class="form-control">
                                <option></option>
                            </select>  
                        </div>

                        <div class="col-md-6">
                            <label for="">ACTIVIDAD</label>
                            <select id="Actividad" name="Actividad" class="form-control">
                                <option></option>
                            </select>  
                        </div>

                        <div class="col-md-6">
                            <label for="">TAMAÑO DE LA ORGANIZACIÓN</label>
                            <select id="Tamanio" name="Tamanio" class="form-control"> 
                                <option></option>
                            </select>  
                        </div>

                        <div class="col-md-12">
                            <label for="">PRINCIPALES BIENES Y/O SERVICIOS QUE OFRECE</label>
                            <textarea id="Servicios" name="Servicios" rows="4" cols="20" class="form-control">
                            </textarea>
                        </div>


                        <div class="col-md-12" align="center">
                            <br>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                            <h2 class=" ">INFORMACIÓN BANCARIA PARA PAGO VÍA TRANSFERENCIA</h2>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">TITULAR DE LA CUENTA</label>
                            <input type="text" class="form-control" id="Titular" name="Titular">
                        </div>

                        <div class="col-md-6">
                            <label for="">RFC</label>
                            <input type="text" class="form-control" id="RFCcuenta" name="RFCcuenta">
                        </div>

                        <div class="col-md-4">
                            <label for="">NÚMERO DE CUENTA</label>
                            <input type="text" class="form-control" id="Cuenta" name="Cuenta">
                        </div>

                        <div class="col-md-4">
                            <label for="">NOMBRE DEL BANCO</label>
                            <input type="text" class="form-control" id="Banco" name="Banco">
                        </div>

                        <div class="col-md-4">
                            <label for="">CLABE</label>
                            <input type="text" class="form-control" id="CLABE" name="CLABE">
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" ><span class="fa fa-check fa-3x"></span></button>
                <!--<button class="btn btn-lg btn-success hide disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>-->
            </div>
        </div>
    </div>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlProveedors/';
    $(document).ready(function () {
        onRefresh();
        var btnGuardar = $("#mdlNuevo #btnGuardar");
        btnGuardar.click(function () {
            $("#mdlNuevo #btnGuardar").addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
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
        $("#btnEditar").click(function () {

            onBeforeUpdate();
        });
    });

    function onRefresh() {
        $.ajax({
            url: master_url + 'getTipos',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                console.log(data[x])
                options += '<option value="' + data[x].ID + '">' + data[x].TIPO + '</option>';
            }
            $("#mdlNuevo #Tipo").html(options);
            $("#mdlModificar #Tipo").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });
        $.ajax({
            url: master_url + 'getRamas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x].ID + '">' + data[x].RAMA + '</option>';
            }
            $("#mdlNuevo #Rama").html(options);
            $("#mdlModificar #Rama").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });

        $.ajax({
            url: master_url + 'getTamanio',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x].ID + '">' + data[x].TAMANIO + '</option>';
            }
            $("#mdlNuevo #Tamanio").html(options);
            $("#mdlModificar #Tamanio").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });

        $.ajax({
            url: master_url + 'getCiudades',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x].ID + '">' + data[x].CIUDAD + '</option>';
            }
            $("#mdlNuevo #Municipio").html(options);
            $("#mdlModificar #Municipio").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });

        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x].ID + '">' + data[x].ESTADO + '</option>';
            }
            $("#mdlNuevo #Estado").html(options);
            $("#mdlModificar #Estado").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });

        $.ajax({
            url: master_url + 'getActividades',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data)
            var options = "<option></option>";
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x].ID + '">' + data[x].ACTIVIDADES + '</option>';
            }
            $("#mdlNuevo #Actividad").html(options);
            $("#mdlModificar #Actividad").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
        });

        onGetRecords("tblProveedores", master_url + "getRecords", "rProveedores", "msgProveedores", "NO SE ENCONTRARON REGISTROS");
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

    function onAdd() {
        var frm = $("#frmNuevo").serialize();
        $.ajax({
            url: master_url + 'onAdd',
            type: "POST",
            data: frm
        }).done(function (data, x, jq) {
            console.log(data);
            onRefresh();
            $("#mdlNuevo").modal('toggle');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            console.log('FINALIZADO');
            setTimeout(function () {
                $("#mdlNuevo #btnGuardar").removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
            }, 2500);
        });
    }

    function onBeforeUpdate() {
        if (temp !== undefined && temp !== null && temp !== 0) {
            $("#btnEditar").find("span").removeClass("fa-pencil").addClass("fa-cog fa-spin");
            $("#btnEditar").addClass("disabled");
            $.ajax({
                url: master_url + 'getRecordsByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data)
                var dtm = data[0];
                $("#mdlModificar").modal('toggle');
                $("#mdlModificar #ID").val(dtm.ID);
                $("#mdlModificar #Tipo").select2("val", dtm.Tipo);
                $("#mdlModificar #Proveedor").val(dtm.Proveedor);
                $("#mdlModificar #RFC").val(dtm.RFC);
                $("#mdlModificar #Correo").val(dtm.Correo);
                $("#mdlModificar #Pagina").val(dtm.Pagina);
                $("#mdlModificar #Calle").val(dtm.Calle);
                $("#mdlModificar #No").val(dtm.No);
                $("#mdlModificar #Colonia").val(dtm.Colonia);
                $("#mdlModificar #Municipio").select2("val", dtm.Municipio);
                $("#mdlModificar #Estado").select2("val", dtm.Estado);
                $("#mdlModificar #Tel").val(dtm.Tel);
                $("#mdlModificar #Contacto").val(dtm.Contacto);
                $("#mdlModificar #TelContacto").val(dtm.TelContacto);
                $("#mdlModificar #MailContacto").val(dtm.MailContacto);
                $("#mdlModificar #Rama").select2("val", dtm.Rama);
                $("#mdlModificar #Actividad").select2("val", dtm.Actividad);
                $("#mdlModificar #Tamanio").select2("val", dtm.Tamanio);
                $("#mdlModificar #Servicios").val(dtm.Servicios);
                $("#mdlModificar #Titular").val(dtm.Titular);
                $("#mdlModificar #RFCcuenta").val(dtm.RFCcuenta);
                $("#mdlModificar #Cuenta").val(dtm.Cuenta);
                $("#mdlModificar #Banco").val(dtm.Banco);
                $("#mdlModificar #CLABE").val(dtm.CLABE);

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                $("#btnEditar").find("span").removeClass("fa-cog fa-spin").addClass("fa-pencil");
                $("#btnEditar").removeClass("disabled");
            });
        }
    }

    function onUpdate() {
    }
</script>