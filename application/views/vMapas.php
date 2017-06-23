<div class="row">
    <div id="controls">
        <div class="col-md-12 inside-map" align="center">
            <button id="btnAdd" name="btnAdd" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="NUEVO" ><span class="fa fa-plus fa-2x info-icon"></span></button>
            <button id="btnEdit" name="btnEdit" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="EDITAR" ><span class="fa fa-pencil fa-2x success-icon"></span></button>
            <button id="btnRefresh" name="btnRefresh" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="REFRESCAR" ><span class="fa fa-refresh fa-2x warning-icon"></span></button>
            <button id="btnRemove" name="btnRemove" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="ELIMINAR" ><span class="fa fa-minus fa-2x danger-icon"></span></button>
            <button id="btnAddD" name="btnAddD" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="NUEVO PREDIO" ><span class="fa fa-plus fa-2x lime-icon "></span></button>
            <button id="btnEditD" name="btnAddD" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="EDITAR PREDIO" ><span class="fa fa-pencil fa-2x purple-icon"></span></button>
            <button id="btnEntregada" name="btnEntregada" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="ENTREGADA" ><span class="fa fa-check fa-2x yellow-icon"></span></button>
            <button id="btnBack" name="btnBack" class="btn btn3d btn-default fa-lg box-shadow"  data-toggle="tooltip" data-placement="right" title="" data-original-title="MENU PRINCIPAL" ><span class="fa fa-arrow-left fa-2x bluegrey-icon"></span></button>
        </div> 
        <div class="col-md-4"></div>
        <div class="col-md-4 inside-map" align="center">
            <select class="form-control" id="ID" name="ID" placeholder="PROYECTO">
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="col-md-2 inside-map">
        <button id="btnControls" class="btn btn3d btn-default fa-lg box-shadow" data-toggle="tooltip" data-placement="right" title="" data-original-title="OCULTAR CONTROLES" > <span class="fa fa-arrow-up fa-2x kingblue-icon"></span></button>
    </div>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgP8SdTIln3TX3GECba-MCpLVadfSZCa0&libraries=drawing"></script>
    <div class="col-md-4"></div> 
    <div class="col-md-4">
    </div>
    <div class="col-md-4"></div>
    <div id="map_canvas"></div>

</div>

<!--MODALS-->


<div id="mdlNuevo" class="modal animated bounceInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-map-marker fa-lg"></span> REGISTRO DE COORDENADAS POR CASA</h2>
            </div>
            <form id="fNuevo" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-3 hide">
                            <label for="ID">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="" required="" value="0"></div>
                        <div class="col-md-4">
                            <label for="">DESARROLLO</label>
                            <select type="text" id="IdProyecto" name="IdProyecto" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA</label>
                            <select type="text" id="Manzana" name="Manzana" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Lote</label>
                            <select type="text" id="Lote" name="Lote" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Numero</label>
                            <select type="text" id="Numero" name="Numero" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Modelo</label>
                            <select type="text" id="Modelo" name="Modelo" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Tipo</label>
                            <select type="text" id="Tipo" name="Tipo" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-12"><h3>UBIQUE EL INMUEBLE EN EL MAPA, 
                                ARRASTRANDO Y SOLTANDO EL ICONO EN EL LUGAR 
                                DONDE ESTARÁ EL INMUEBLE</h3></div>
                        <div id="map_register" class="col-md-12" height="525px"></div>
                        <div class="col-md-6">
                            <label for="">LATITUD</label>
                            <input type="text" class="form-control" id="Latitud" name="Latitud" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">LONGITUD</label>
                            <input type="text" class="form-control" id="Longitud" name="Longitud" readonly=""/>
                        </div>
                        <div id="msgNuevo" class="col-md-12"></div> 
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default fa-lg"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default fa-lg" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>

<div id="mdlEdit" class="modal animated bounceInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-map-marker fa-lg"></span> EDITAR COORDENADAS POR CASA</h2>
            </div>
            <form id="fEdit" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <label for="ID">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="" required="" value="0"></div>
                        <div class="col-md-4">
                            <label for="">DESARROLLO ACTUAL</label>
                            <input type="text" id="IdProyectoU" name="IdProyectoU" class="form-control" readonly="">

                            <label for="">NUEVO DESARROLLO</label>
                            <select type="text" id="IdProyecto" name="IdProyecto" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MANZANA ACTUAL</label>
                            <input type="text" id="ManzanaU" name="ManzanaU" class="form-control" readonly="">
                            <label for="">NUEVA MANZANA</label>
                            <select type="text" id="Manzana" name="Manzana" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">LOTE ACTUAL</label>
                            <input type="text" id="LoteU" name="LoteU" class="form-control" readonly="">
                            <label for="">NUEVO LOTE</label>
                            <select type="text" id="Lote" name="Lote" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">NUMERO ACTUAL</label>
                            <input type="text" id="NumeroU" name="NumeroU" class="form-control" readonly="">
                            <label for="">NUEVO NÚMERO</label>
                            <select type="text" id="Numero" name="Numero" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">MODELO ACTUAL</label>
                            <input type="text" id="ModeloU" name="ModeloU" class="form-control" readonly="">
                            <label for="">NUEVO MODELO</label>
                            <select type="text" id="Modelo" name="Modelo" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Tipo ACTUAL</label>
                            <input type="text" id="TipoU" name="TipoU" class="form-control" readonly="">
                            <label for="">NUEVO Tipo</label>
                            <select type="text" id="Tipo" name="Tipo" class="form-control" required="">
                            </select>
                        </div>
                        <div class="col-md-12"><h3>UBIQUE EL INMUEBLE EN EL MAPA, 
                                ARRASTRANDO Y SOLTANDO EL ICONO EN EL LUGAR 
                                DONDE ESTARÁ EL INMUEBLE</h3></div>
                        <div id="map_updater" class="col-md-12 map" height="525px"></div>
                        <div class="col-md-6">
                            <label for="">LATITUD</label>
                            <input type="text" class="form-control" id="Latitud" name="Latitud" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">LONGITUD</label>
                            <input type="text" class="form-control" id="Longitud" name="Longitud" readonly=""/>
                        </div>
                        <div id="msgEdit" class="col-md-12"></div> 
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default fa-lg" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default fa-lg" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>


<div id="mdlNuevoD" class="modal animated bounceInDown"  data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center" id="myModalLabel"> <span class="fa fa-map-marker fa-lg"></span> REGISTRO DE COORDENADAS POR PREDIO</h2>
            </div>
            <form id="fNuevoD" type="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-3 hide">
                            <label for="ID">ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="" required="" value="0">
                        </div>
                        <div class="col-md-12">
                            <h3>UBIQUE EL PREDIO EN EL MAPA, 
                                ARRASTRANDO Y SOLTANDO EL ICONO EN EL LUGAR 
                                DONDE SE ENCUENTRA</h3>
                        </div>
                        <div class="col-md-12">
                            <label for="">DESARROLLO</label>
                            <select type="text" id="IdProyecto" name="IdProyecto" class="form-control " required="">
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn3d btn-default fa-lg inside-map-extv2" id="btnAddCoor">
                                <span class="fa fa-check fa-2x"></span>
                            </button>
                            <div id="map_registerd" class="col-md-12 map"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="">ICONO</label> 
                        </div>
                        <div class="col-md-6 ">
                            <label for="">LATITUD</label>
                            <input type="text" class="form-control" id="Latitud" name="Latitud" readonly="">
                        </div>
                        <div class="col-md-6">
                            <label for="">LONGITUD</label>
                            <input type="text" class="form-control" id="Longitud" name="Longitud" readonly=""/>
                        </div>
                        <div id="msgNuevoD" class="col-md-12"></div> 
                        <div class="table-responsive">
                            <table id="tblCoordenadasXPolygono" class="table table-striped table-hover">
                                <thead>
                                    <tr class="primary">
                                        <th>ID</th>
                                        <th>LAT</th>
                                        <th>LONG</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table> 
                        </div>
                        <div id="rPortada" name="rPortada" class="col-md-12 img-responsive" align="center"></div>
                        <div id="cPortada" class="col-md-12 hand-cursor text-center">
                            <span class="fa fa-upload fa-5x"></span>
                            <h2>SELECCIONE UNA IMAGEN DE PORTADA</h2>
                        </div>
                        <input type="file" id="Portada" name="Portada" class="btn btn3d btn-default fa-lg hide" >
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" type="button" class="btn btn-default fa-lg"><span class="fa fa-times fa-3x"></span></button>
                    <button id="btnSave" name="btnSave" type="button" class="btn btn-default fa-lg" ><span class="fa fa-check fa-3x"></span></button>
                </div>
            </form> 
        </div>
    </div>
</div>
<script>
    var map, mapx, mapedit, mapd;
    var markers = [];
    var xpath = [];
    var master_url = base_url + 'index.php/ctrlMapas/';
    var btnAdd = $("#btnAdd");
    var btnEdit = $("#btnEdit");
    var btnRefresh = $("#btnRefresh");
    var btnClose = $("#btnClose");
    var prepareCall = $.Callbacks();
    var mdlNuevo = $("#mdlNuevo");
    var ID = $("#ID");
    var IdProyecto = $("#IdProyecto");
    var Manzana = $("#mdlNuevo #Manzana");
    var Lote = $("#mdlNuevo #Lote");
    var Numero = $("#mdlNuevo #Numero");
    var Tipo = $("#mdlNuevo #Tipo");
    var Modelo = $("#mdlNuevo #Modelo");
    var Latitud = $("#mdlNuevo #Latitud");
    var Longitud = $("#mdlNuevo #Longitud");
    var btnSave = $("#mdlNuevo #btnSave");
    var fNuevo = $("#mdlNuevo #fNuevo");
    var mdlEdit = $("#mdlEdit");
    var btnRemove = $("#btnRemove");
    var mdlNuevoD = $("#mdlNuevoD");
    var btnAddD = $("#btnAddD");
    var cPortada = $("#cPortada");
    var Portada = $("#Portada");
    var navID = $("#navID");
    var btnBack = $("#btnBack");
    var marker_update;


    var lapera_map = {
        north: 21.177352906166117, //ARRIBA
        south: 21.172883425653563, //ABAJO
        east: -101.63426484863282, //DER
        west: -101.63831766645433//IZQ
    };
    var btnEntregada = $("#btnEntregada");

    var btnControls = $("#btnControls");
    var controls = $("#controls");

    $(document).ready(function () {

        btnControls.click(function () {
            btnControls.find("span").toggleClass("fa-arrow-up fa-arrow-right");
            controls.toggleClass("hide");
        });

        btnEntregada.click(function () {
            if (temp !== undefined && temp !== 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                $.ajax({
                    url: master_url + 'onEntregar',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    if (parseInt(data[0]) === 1) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'CASA ENTREGADA', 'success');
                        btnRefresh.trigger('click');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTA CASA NO PUEDE SER ENTREGADA AÚN', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PUNTO EN EL MAPA', 'danger');
            }
        });

        ID.select2({
            minimumResultsForSearch: -1
        });
        navID.addClass("hide");
        $("html, body").css("padding-top", "0px");
        $("html, body").css("height", "0px");
        $("#map_canvas").css({height: "100%",
            width: "100%",
            position: "absolute",
            bottom: "0px"});
        $("html, body").css("height", "0px");

        mdlNuevo.on('shown.bs.modal', function () {
            init_mapx();
            $.ajax({
                url: base_url + 'index.php/ctrlMapas/getDesarrollosSCO',
                type: "POST",
                dataType: "JSON"

            }).done(function (data) {
//            console.log(data)
                var options = '<option value=""></option>';
                $.each(data, function (k, v) {
                    options += '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';

                    $.ajax({
                        url: base_url + 'index.php/ctrlMapas/getRecordsMaps',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: v.ID
                        }
                    }).done(function (data, x, jq) {
                        console.log('MAPA X PREDIOX');
                        console.log(data);
                        if (data.length > 0) {
                            $.each(data, function (km, vm) {
                                var coormap = {
                                    north: parseFloat(vm.Norte),
                                    south: parseFloat(vm.Sur),
                                    east: parseFloat(vm.Este),
                                    west: parseFloat(vm.Oeste)
                                };
                                var mapa = new google.maps.GroundOverlay(
                                        base_url + vm.RDocumento,
                                        coormap);
                                mapa.setMap(mapx);
                            });
                        }
                        console.log('FIN MAPA X PREDIO');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                });
                mdlNuevo.find("#IdProyecto").html(options);
            }
            ).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        });

        mdlNuevoD.on('shown.bs.modal', function () {
            init_mapd();
        });

        mdlEdit.on('shown.bs.modal', function () {
            $.ajax({
                url: master_url + 'getRecordByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {


                var dtm = data[0];
                marker_update = new google.maps.Marker({
                    position: new google.maps.LatLng(dtm.Latitud, dtm.Longitud),
                    draggable: true,
                    icon: base_url + 'imagenes/house_warning.png'
                });
                var Latitud = mdlEdit.find("#Latitud");
                var Longitud = mdlEdit.find("#Longitud");
                mapedit = new google.maps.Map(document.getElementById('map_updater'), {
                    zoom: 5,
                    center: new google.maps.LatLng(25.76431662040222, -101.88626375000001),
                    mapTypeId: google.maps.MapTypeId.HYBRID
                });
                mapedit.setTilt(45);
                google.maps.event.addListener(marker_update, 'dragend', function (evt) {
                    Latitud.val(evt.latLng.lat());
                    Longitud.val(evt.latLng.lng());
                    mdlEdit.find('#msgEdit').html('<p>COORDENADAS SETEADAS</p>');
                });
                google.maps.event.addListener(marker_update, 'dragstart', function (evt) {
                    mdlEdit.find('#msgEdit').html('<p>BUSCANDO COORDENADAS...</p>');
                });
                mapedit.setCenter(marker_update.position);
                marker_update.setMap(mapedit);
                console.log('PROYECTO');
                console.log(dtm.IdProyecto);

                $.ajax({
                    url: base_url + 'index.php/ctrlMapas/getDesarrollosSCO',
                    type: "POST",
                    dataType: "JSON"

                }).done(function (data) {
//            console.log(data)
                    var options = '<option value=""></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
                        $.ajax({
                            url: base_url + 'index.php/ctrlMapas/getRecordsMaps',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: v.ID
                            }
                        }).done(function (data, x, jq) {
                            console.log('MAPA X PREDIO');
                            console.log(data);
                            if (data.length > 0) {
                                $.each(data, function (km, vm) {
                                    var coormap = {
                                        north: parseFloat(vm.Norte),
                                        south: parseFloat(vm.Sur),
                                        east: parseFloat(vm.Este),
                                        west: parseFloat(vm.Oeste)
                                    };
                                    var mapa = new google.maps.GroundOverlay(
                                            base_url + vm.RDocumento,
                                            coormap);
                                    mapa.setMap(mapedit);
                                });
                            }
                            console.log('FIN MAPA X PREDIO');
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {

                        });
                    });
                    mdlEdit.find("#IdProyecto").html(options);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {

                });
                console.log(data);
                mdlEdit.find("#ID").val(dtm.ID);
                mdlEdit.find("#IdProyectoU").val(dtm.IdProyecto);
                mdlEdit.find("#ManzanaU").val(dtm.ManzanaT);
                mdlEdit.find("#LoteU").val(dtm.LoteT);
                mdlEdit.find("#NumeroU").val(dtm.NumeroT);
                mdlEdit.find("#ModeloU").val(dtm.ModeloT);
                mdlEdit.find("#TipoU").val(dtm.TipoT);
                mapedit.setCenter(new google.maps.LatLng(dtm.Latitud, dtm.Longitud));
                mapedit.setZoom(19);
                mdlEdit.find("#ID").val(dtm.ID);
            }).fail(function (x, y, z) {
                console.log('ERRRO AL OBTENER LOS DATOS');
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA');
            });
        });

        mdlEdit.on('hidden.bs.modal', function () {
            temp = 0;
        });
        /**
         * BUTTON FUNCTIONS
         * */

        btnBack.click(function () {
            window.location.href = base_url + "index.php/";
        });

        cPortada.click(function () {
            Portada.trigger('click');
        });

        Portada.change(function () {
            var file = Portada[0].files[0];
            var imageType = /image.*/;
            if (file.type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    mdlNuevoD.find("#rPortada").html('<img src=' + reader.result + " class='img-responsive'/>");
                };
                reader.readAsDataURL(file);
            } else {
                fileDisplayArea.innerHTML = "LA API DE FILEREADER NO ES CAPAZ DE EJECUTARSE EN ESTE NAVEGADOR, UTILIZA CHROME O FIREFOX!";
            }
        });

        mdlEdit.find("#btnSave").click(function () {
            console.log('FORMDATA INIT')
            var frm = new FormData(mdlEdit.find("#fEdit")[0]);
            frm.append('ManzanaT', mdlEdit.find("#fEdit").find('#Manzana').find("option:selected").text());
            frm.append('LoteT', mdlEdit.find("#fEdit").find('#Lote').find("option:selected").text());
            frm.append('NumeroT', mdlEdit.find("#fEdit").find('#Numero').find("option:selected").text());
            frm.append('ModeloT', mdlEdit.find("#fEdit").find('#Modelo').find("option:selected").text());
            frm.append('TipoT', mdlEdit.find("#fEdit").find('#Tipo').find("option:selected").text());

            mdlEdit.find("#btnSave").addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            $.ajax({
                url: master_url + 'onUpdate',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                if (parseInt(data) === 1) {
                    mdlEdit.modal('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ACTUALIZADO CON EXITO', 'success');
                    btnRefresh.trigger('click');
                } else {
                    mdlEdit.find('#msgEdit').html('NO SE HA PODIDO ACTUALIZAR EL REGISTRO O NO SE ACTUALIZO NADA');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA');
            });
            setTimeout(function () {
                mdlEdit.find("#btnSave").removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
            }, 1000);
        });

        btnRemove.click(function () {
            if (temp !== undefined && temp !== 0) {
                $.ajax({
                    url: master_url + 'onRemove',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    if (parseInt(data) === 1) {
                        onNotify('<span class="fa fa-cog fa-spin fa-lg"></span>', 'REGISTRO ELIMINADO CON EXITO', 'success');
                        btnRefresh.trigger('click');
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO SE HA PODIDO ELIMINAR EL REGISTRO, CONSULTE LA CONSOLA PARA MÁS INFORMACIÓN.', 'danger');
                        console.log(data, x, jq);
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    console.log('OPERACION COMPLETADA ID REMOVIDO: ' + temp);
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PUNTO', 'danger');
            }
        });

        btnSave.click(function () {
            btnSave.addClass("disabled").find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                data: {
                    IdProyecto: IdProyecto.val(),
                    ProyectoT: IdProyecto.find("option:selected").text(),
                    Manzana: Manzana.val(),
                    ManzanaT: Manzana.find("option:selected").text(),
                    Lote: Lote.val(),
                    LoteT: Lote.find("option:selected").text(),
                    Numero: Numero.val(),
                    NumeroT: Numero.val(),
                    Modelo: Modelo.val(),
                    ModeloT: Modelo.find("option:selected").text(),
                    Tipo: Tipo.val(),
                    TipoT: Tipo.find("option:selected").text(),
                    Latitud: Latitud.val(),
                    Longitud: Longitud.val()
                }
            }).done(function (data, x, jq) {
                if (parseInt(data) === 1) {
                    console.log('DATOS OBTENIDOS');
                    console.log(data);
                    console.log('------------------------------');
                    setTimeout(function () {
                        btnSave.removeClass("disabled").find("span").addClass("fa-check").removeClass("fa-cog fa-spin");
                        btnClose.trigger('click');
                    }, 1500);
                    btnRefresh.trigger('click');
                } else {
                    $("#msgNuevo").html('ERROR');
                    $("#msgNuevo").append(data);
                }

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION SAVE, COMPLETADA');
            });
        });

        mdlNuevoD.find("#btnSave").click(function () {
            $.ajax({
                url: master_url + 'onAddD',
                type: "POST",
                data: mdlNuevoD.find("#fNuevoD").serialize()
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION DE GUARDADO, COMPLETADA');
            });
        });

        btnEdit.click(function () {
            if (temp !== undefined && temp !== 0) {
                mdlEdit.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PUNTO', 'danger');
            }
        });
        btnAdd.click(function () {
            mdlNuevo.modal('show');
        });
        btnAddD.click(function () {
            mdlNuevoD.modal('show');
        });

        btnRefresh.click(function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            prepareCall.add(onStart());
            prepareCall.add(onLoadMainMap());
            prepareCall.fire();
            HoldOn.close();
        });

        btnClose.click(function () {
            mdlNuevo.toggle(
                    function () {
                        mdlNuevo.fadeOut('slow');
                    }, function () {
                mdlNuevo.modal('hide');
            }
            );
        });

        ID.change(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO... POR FAVOR ESPERE"
            });
            $.ajax({
                url: base_url + 'index.php/ctrlMapas/getCoordenadasXProyecto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: ID.val()
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                map.setCenter(new google.maps.LatLng(dtm.Latitud, dtm.Longitud));
                map.setZoom(17);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
                console.log('OPERACION COMPLETADA');
            });
        });

        IdProyecto.change(function () {

            $.ajax({
                url: base_url + 'index.php/ctrlMapas/getCoordenadasXProyecto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdProyecto.val()
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                mapx.setCenter(new google.maps.LatLng(dtm.Latitud, dtm.Longitud));
                mapx.setZoom(17);
                marker_register.setPosition(new google.maps.LatLng(dtm.Latitud, dtm.Longitud));
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA');
            });
            Manzana.html("");
            Manzana.addClass("hide");
            Manzana.parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
            $.ajax({
                url: master_url + 'getManzanasXDesarrollo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdProyecto.val()
                }
            }).done(function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                    });
                    Manzana.html(options);
                } else {
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    Manzana.removeClass("hide");
                    Manzana.next().remove();
                }, 1500);
            });
        });

        mdlEdit.find("#IdProyecto").change(function () {
            $.ajax({
                url: base_url + 'index.php/ctrlMapas/getCoordenadasXProyecto',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlEdit.find("#IdProyecto").val()
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                mapedit.setCenter(new google.maps.LatLng(dtm.Latitud, dtm.Longitud));
                mapedit.setZoom(17);
//                marker_update.setPosition(new google.maps.LatLng(dtm.Latitud, dtm.Longitud));
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                console.log('OPERACION COMPLETADA');
            });
            mdlEdit.find("#Manzana").html("");
            mdlEdit.find("#Manzana").addClass("hide");
            mdlEdit.find("#Manzana").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');

            $.ajax({
                url: master_url + 'getManzanasXDesarrollo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlEdit.find("#IdProyecto").val()
                }
            }).done(function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.MANZANA + '</option>';
                    });
                    mdlEdit.find("#Manzana").html(options);
                } else {
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    mdlEdit.find("#Manzana").removeClass("hide");
                    mdlEdit.find("#Manzana").next().remove();
                }, 1500);
            });
        });

        Manzana.change(function () {
            getLotesXManzana(IdProyecto.val(), Manzana.val());
        });

        mdlEdit.find("#Manzana").change(function () {
            var Lote = mdlEdit.find("#Lote");
            Lote.addClass("hide");
            Lote.html("");
            Lote.parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
            $.ajax({
                url: master_url + 'getLotesXManzana',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlEdit.find("#IdProyecto").val(),
                    M: mdlEdit.find("#Manzana").val()
                }
            }).done(function (data) {
                console.log(data);
                var dtm = data[0];
                var options = '<option value=""></option>';
                if (data[0] !== undefined && dtm.LOTES !== undefined) {
                    $.each(dtm.LOTES.split(","), function (k, v) {
                        options = options + '<option value="' + v + '">' + v + '</option>';
                    });
                    Lote.html(options);
                } else {
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    Lote.removeClass("hide");
                    Lote.next().remove();
                }, 1500);
            });
        });

        Lote.change(function () {
            getNumerosXLotes(IdProyecto.val(), Manzana.find("option:selected").text(), Lote.val());
        });

        mdlEdit.find("#Lote").change(function () {
            var NumeroDeVivienda = mdlEdit.find("#Numero");
            NumeroDeVivienda.html("");
            NumeroDeVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
            $.ajax({
                url: master_url + 'getNumerosXLotes',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlEdit.find("#IdProyecto").val(),
                    M: mdlEdit.find("#Manzana").find("option:selected").text(),
                    L: mdlEdit.find("#Lote").val()
                }
            }).done(function (data) {
                console.log('NUMEROS');
                console.log(data);
                var dtm = data[0];
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        console.log(v);
                        $.each(v.NUMEROS.split(','), function (k, vv) {
                            options = options + '<option value="' + vv + '">' + (vv + ' (' + v.MODELO + ')') + '</option>';
                        });
                    });
                    NumeroDeVivienda.html(options);
                } else {
                }

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    NumeroDeVivienda.removeClass("hide");
                    NumeroDeVivienda.next().remove();
                }, 1500);
            });
        });

        Numero.change(function () {
            getModelosXNumeroDeVivienda(IdProyecto.val(), Manzana.find("option:selected").text(), Lote.val());
        });

        mdlEdit.find("#Numero").change(function () {

            var ModeloVivienda = mdlEdit.find("#Modelo");
            ModeloVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
            $.ajax({
                url: master_url + 'getModelosXNumeroDeVivienda',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlEdit.find("#IdProyecto").val(),
                    M: mdlEdit.find("#Manzana").find("option:selected").text(),
                    L: mdlEdit.find("#Lote").val()
                }
            }).done(function (data) {
                console.log(data);
                var dtm = data[0];
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.MODELO + '</option>';
                    });
                    ModeloVivienda.html(options);
                } else {
                }

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    ModeloVivienda.removeClass("hide");
                    ModeloVivienda.next().remove();
                }, 1500);
            });
        });

        Modelo.change(function () {
            getTiposDeVivienda(IdProyecto.val(), Manzana.find("option:selected").text(), Lote.val(), Numero.val(), Modelo.val());
        });

        mdlEdit.find("#Modelo").change(function () {
            var TipoVivienda = mdlEdit.find("#Tipo");
            TipoVivienda.html("");
            TipoVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
            $.ajax({
                url: master_url + 'getTiposDeVivienda',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: mdlEdit.find("#IdProyecto").val(),
                    M: mdlEdit.find("#Manzana").find("option:selected").text(),
                    L: mdlEdit.find("#Lote").val(),
                    NV: mdlEdit.find("#Numero").val(),
                    MD: mdlEdit.find("#Modelo").val()
                }
            }).done(function (data) {
                console.log(data);
                var dtm = data[0];
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.TIPO + '</option>';
                    });
                    TipoVivienda.html(options);
                } else {
                }

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                setTimeout(function () {
                    TipoVivienda.removeClass("hide");
                    TipoVivienda.next().remove();
                }, 1500);
            });
        });

        Tipo.change(function () {

        });

        prepareCall.add(onStart());
        prepareCall.add(onLoadMainMap());
        prepareCall.add(getDesarrollos());
        prepareCall.fire();
    });

    function onStart() {

        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO... POR FAVOR ESPERE"
        });
        $.ajax({
            url: base_url + 'index.php/ctrlMapas/getProyectos',
            type: "POST",
            dataType: "JSON"

        }).done(function (data) {
            console.log('DATA PROYECT')
            console.log(data)
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {

                    var c = [];
                    $.ajax({
                        url: base_url + 'index.php/ctrlMapas/getPolygonoXDesarrollo',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: v.ID
                        }
                    }).done(function (data, x, jq) {
                        var stk = '';
                        var bgr = '';
                        $.each(data, function (k, v) {
                            var obj = {lat: parseFloat(v.LATITUD), lng: parseFloat(v.LONGITUD)};
                            c.push(obj);
                            stk = v.STROKECOLOR;
                            bgr = v.BACKGROUNDCOLOR;
                        });
                        var poligonoxdesarrollo = [];
                        poligonoxdesarrollo[v.ID] = new google.maps.Polygon({
                            paths: c,
                            strokeColor: stk,
                            strokeOpacity: 1,
                            strokeWeight: 2,
                            fillColor: bgr,
                            fillOpacity: 0,
                            editable: true,
//                            draggable: true
                        });
                        poligonoxdesarrollo[v.ID].setMap(map);
                        poligonoxdesarrollo[v.ID].addListener('click', function () {
                            console.log(v.ID);
                            console.log(this);
                        });
                        console.log('POLYGONOS X DESARROLLO');

                        $.ajax({
                            url: base_url + 'index.php/ctrlMapas/getRecordsMaps',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: v.ID
                            }
                        }).done(function (data, x, jq) {
                            console.log('MAPA X PREDIO');
                            console.log(data);
                            if (data.length > 0) {
                                $.each(data, function (km, vm) {
                                    var coormap = {
                                        north: parseFloat(vm.Norte),
                                        south: parseFloat(vm.Sur),
                                        east: parseFloat(vm.Este),
                                        west: parseFloat(vm.Oeste)
                                    };
                                    var mapa = new google.maps.GroundOverlay(
                                            base_url + vm.RDocumento,
                                            coormap);
                                    mapa.setMap(map);
                                });
                            }
                            console.log('FIN MAPA X PREDIO');
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {

                        });

                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        console.log('OPERACION FINALIZADA');
                    });
//                    console.log('AFTER ')
//                    console.log(c)

                    var desarrollos = [];
                    var casas = [];
                    desarrollos[v.ID] = new google.maps.Marker({
                        position: new google.maps.LatLng(v.Latitud, v.Longitud),
                        map: map,
                        html: v.PROYECTO,
                        id: v.ID,
                        animation: google.maps.Animation.DROP,
                        icon: base_url + v.ICONO
                    });
                    var infowindow;
                    var contentString =
                            '<div class="col-md-6">\n\
                            <p>NÚMERO DE VIVIENDAS: </p><p><span class="label label-emerald">' + v.NumeroViviendas + '</span></p>' +
                            '<p>CASAS TRANSMITIDAS: </p><p><span class="label label-warning">' + v.TRANSMITIDAS + '</span></p>' +
                            '<p>TOTAL EN RENDIMIENTOS TRANSMITIDOS : </p><p><span class="label label-warning"> ' + ((v["TOTAL RENDIMIENTOS"] !== null && v["TOTAL RENDIMIENTOS"] !== 'null') ? v["TOTAL RENDIMIENTOS"] : "$ 0.0") + '</span></p>' +
                            '<p>CASAS DISPERSADAS: </p><p><span class="label label-success">' + v.DISPERSADAS + '</span></p>' +
                            '<p>CASAS PAGADAS: </p><p><span class="label label-king-blue">' + v.PAGADAS + '</span></p>' 
                            +'<p>TOTAL INCREMENTO: </p><p><span class="label label-king-blue"> ' + ((v["INCREMENTO"] !== null && v["INCREMENTO"] !== 'null') ? v["INCREMENTO"] : "$ 0.0") + '</span></p>'+
                            '</div><div class="col-md-6"> <p>CASAS NO VENDIDAS: </p><p><span class="label label-danger">' + v["NO VENDIDAS"] + '</span></p>' +
                            '<p>TOTAL EN TERRENOS TRANSMITIDOS : </p><p><span class="label label-warning"> ' + ((v["TOTAL TERRENOS"] !== null && v["TOTAL TERRENOS"] !== 'null') ? v["TOTAL TERRENOS"] : "$ 0.0") + '</span></p>' +
                            '<p>TOTAL EN INGRESOS TRANSMITIDOS :</p><p><span class="label label-warning"> ' + ((v["TOTAL TRANSMITIDO"] !== null && v["TOTAL TRANSMITIDO"] !== 'null') ? v["TOTAL TRANSMITIDO"] : "$ 0.0") + '</span></p>' +
                            '<p>TOTAL DISPERSADO: </p><p><span class="label label-success"> ' + ((v["TOTAL DISPERSADO"] !== null && v["TOTAL DISPERSADO"] !== 'null') ? v["TOTAL DISPERSADO"] : "$ 0.0") + '</span></p>' +
                            '<p>TOTAL PAGADO: </p><p><span class="label label-king-blue"> ' + ((v["TOTAL PAGADO"] !== null && v["TOTAL PAGADO"] !== 'null') ? v["TOTAL PAGADO"] : "$ 0.0") + '</span></p>'
                            +
                            '<p>TOTAL PAGADO (ACTUALIZADO): </p><p><span class="label label-king-blue"> ' + ((v["TOTAL PAGADO ACTUALIZADO"] !== null && v["TOTAL PAGADO ACTUALIZADO"] !== 'null') ? v["TOTAL PAGADO ACTUALIZADO"] : "$ 0.0") + '</span></p>'
                            + '</div>';
                    google.maps.event.addListener(desarrollos[v.ID], 'click', function () {
                        infowindow = new google.maps.InfoWindow({
                            id: v.ID,
                            content: contentString,
                            maxWidth: 800,
                            draggable: true,
                            position: this.getPosition()
                        });
                        //FUNCTIONS FOR INTERACT WITH THE DATABASE
                        console.log('ID EN MAPS: ' + v.ID);
                        temp = v.ID;
                        //END FUNCTIONS
                        var info = $(".gm-style-iw");
//                        info.addClass('custom-infowindow');
                        google.maps.event.addListenerOnce(infowindow, 'closeclick', function () {
                            desarrollos[v.ID].setVisible(true);
                        });
                        this.setVisible(false);
                        infowindow.open(map);
                    });
                    desarrollos[v.ID].setMap(map);
                    $.ajax({
                        url: base_url + 'index.php/ctrlMapas/getPolygonoXCasa',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: v.ID
                        }
                    }).done(function (data, x, jq) {
//                        console.log(data, x, jq);
                        $.each(data, function (k, c) {
                            casas[c.ID] = new google.maps.Marker({
                                position: new google.maps.LatLng(c.Latitud, c.Longitud),
                                map: map,
                                html: c.Numero,
                                id: c.ID,
                                animation: google.maps.Animation.DROP,
                                icon: base_url + c.Icono
                            });
                            var infowindow_house;
                            console.log('PV ' + (c["PRECIO DE VENTA"] === null));
                            var contentString = '<div id="">' +
                                    '<div class="col-md-4">\n\
                                    <img src="' + (base_url + v.PORTADA) + '" class="image-responsive" width="100%" height="100%">' +
                                    '<p class="">ADQUIRENTE: ' + (c.Adquiriente !== null ? c.Adquiriente : "SIN ESPECIFICAR") + '</p>' +
                                    '<p class="">MANZANA: ' + c.ManzanaT + '</p>' +
                                    '<p class="">LOTE: ' + c.Lote + '</p></div>' +
                                    '<div class="col-md-4">\n\
                                    <p class="">NUMERO OFICIAL: ' + c.NumeroT + '</p>' +
                                    '<p class="">MODELO: ' + c.ModeloT + '</p>' +
                                    '<p class="">TIPO: ' + c.TipoT + '</p>' +
                                    '<p class="">PRECIO DE VENTA: <span class="label label-emerald">' + (c["PRECIO DE VENTA"] !== null ? c["PRECIO DE VENTA"] : '$0.0') + '</span></p></div>' +
                                    '<p class="">PAGO POR TERRENO: <span class="label label-danger">' + (c["PAGO POR TERRENO"] !== null ? c["PAGO POR TERRENO"] : '$0.0') + '</span></p>' +
                                    '<div class="col-md-4"><p>PAGO POR RENDIMIENTOS: <span class="label label-warning">' + (c["PAGO POR RENDIMIENTOS"] !== null ? c["PAGO POR RENDIMIENTOS"] : '$0.0') + '</span></p>' +
                                    '<p class="">TOTAL DE INGRESO: <span class="label label-indigo">' + (c["TOTAL DE INGRESO"] !== null ? c["TOTAL DE INGRESO"] : '$0.0') + '</span></p>' +
                                    '<p class="">ESTATUS: ' + c.Estatus + '</p>' +
                                    '</div></div>';
                            google.maps.event.addListener(casas[c.ID], 'click', function () {
                                infowindow_house = new google.maps.InfoWindow({
                                    id: c.ID,
                                    content: contentString,
                                    draggable: true,
                                    position: this.getPosition()
                                });
                                //FUNCTIONS FOR INTERACT WITH THE DATABASE
                                console.log('IDCASA EN MAPS: ' + c.ID);
                                temp = c.ID;
                                //END FUNCTIONS  
                                google.maps.event.addListenerOnce(infowindow_house, 'closeclick', function () {
                                    casas[c.ID].setVisible(true);
                                });
                                this.setVisible(false);
                                infowindow_house.open(map);
                            });
                            google.maps.event.addListener(casas[c.ID], 'mouseover', function () {
                                casas[c.ID].setIcon(base_url + 'imagenes/house_indigo.png');
                            });
                            google.maps.event.addListener(casas[c.ID], 'mouseout', function () {
                                casas[c.ID].setIcon(base_url + c.Icono);
                            });
                            casas[c.ID].setMap(map);
                        });
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        console.log('CASAS ASIGNADAS AL MAPA');
                    });
                    options = options + '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
                });
                $("#ID").html(options);
            } else {
                console.log('CORREO DE SOPORTE: ing.giovanniflores93@gmail.com');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'NO EXISTEN DATOS PARA EL MAPA, CONSULTE LA CONSOLA PARA MÁS INFORMACIÓN.', 'success');
            }
        }
        ).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemoveObject(e) {
        $(e).parent().parent().remove();
    }

    function onLoadMainMap() {
        map = new google.maps.Map(document.getElementById('map_canvas'), {
            zoom: 9,
            center: new google.maps.LatLng(20.95219596488945, -101.42757113973619),
            mapTypeId: google.maps.MapTypeId.HYBRID
        });
        map.setTilt(45);
        var myMarker = new google.maps.Marker({
            position: new google.maps.LatLng(20.71860169145368, -101.35753329793931),
            draggable: true,
            icon: base_url + 'imagenes/house_danger.png'
        });
        var mm = new google.maps.Marker({
            position: new google.maps.LatLng(20.72169996412897, -101.36014845172883),
            draggable: true,
            icon: base_url + 'imagenes/mark.png'
        });
        google.maps.event.addListener(myMarker, 'click', function () {
            var infowindow = new google.maps.InfoWindow({
                id: 1,
                content: '<div class="col-md-12">HOLA</div>',
                position: this.getPosition()
            });
            google.maps.event.addListenerOnce(infowindow, 'closeclick', function () {
                myMarker.setVisible(true);
            });
            this.setVisible(false);
            infowindow.open(map);
        });
        google.maps.event.addListener(myMarker, 'dragend', function (evt) {
            var ID = $("#ID").parent();
            ID.children("#ID").next().remove();
            ID.append('<div id="Mensajes" class="box-messages">ESPERANDO...</div>');
            var log = $("#Mensajes");
            log.html("<div class='col-md-10'>COORDENADAS</div><div class='col-md-2' align='right'><span class='fa fa-times fa-sm cursor-hand' onclick='onRemoveObject(this)'></span></div>");
            log.append('<br>Latitud:     ' + evt.latLng.lat() + '<br>Longitud:     ' + evt.latLng.lng());
        });
        google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
            document.getElementById('Mensajes').innerHTML = '<p>BUSCANDO COORDENADAS...</p>';
        });
        map.setCenter(myMarker.position);
//        myMarker.setMap(map);
    }

    var marker_register;

    function init_mapx() {
        var Latitud = $("#Latitud");
        var Longitud = $("#Longitud");
        mapx = new google.maps.Map(document.getElementById('map_register'), {
            zoom: 5,
            center: new google.maps.LatLng(25.76431662040222, -101.88626375000001),
            mapTypeId: google.maps.MapTypeId.HYBRID
        });
        mapx.setTilt(45);
        marker_register = new google.maps.Marker({
            position: new google.maps.LatLng(20.71860169145368, -101.35753329793931),
            draggable: true,
            icon: base_url + 'imagenes/house_indigo.png'
        });
        google.maps.event.addListener(marker_register, 'dragend', function (evt) {
            Latitud.val(evt.latLng.lat());
            Longitud.val(evt.latLng.lng());
            document.getElementById('msgNuevo').innerHTML = '<p>COORDENADAS SETEADAS</p>';
        });
        google.maps.event.addListener(marker_register, 'dragstart', function (evt) {
            document.getElementById('msgNuevo').innerHTML = '<p>BUSCANDO COORDENADAS...</p>';
        });
        mapx.setCenter(marker_register.position);
        var image_coor_title = {
            north: 20.72194581625067,
            south: 20.721429024593842,
            east: -101.35867323677064,
            west: -101.36027183334352
        };
        var sanmarino_title = new google.maps.GroundOverlay(
                base_url + 'imagenes/SANMARINO.png',
                image_coor_title);
        var image_coor_map = {
            north: 20.72169996412897,
            south: 20.718604200202137,
            east: -101.35760571758271,
            west: -101.36014845172883
        };
        var sanmarino_map = new google.maps.GroundOverlay(
                base_url + 'imagenes/SANMARINO_MAPAV4.png',
                image_coor_map);
        var lapera_title = {
            north: 21.17476264607671, //ARRIBA
            south: 21.174416893192944, //ABAJO
            east: -101.63556907276632, //DER
            west: -101.63597609798433//IZQ
        };
        var lapera = new google.maps.GroundOverlay(
                base_url + 'imagenes/LAPERA.png',
                lapera_title);

        var laperamap = new google.maps.GroundOverlay(
                base_url + 'imagenes/PERA.png',
                lapera_map);

        marker_register.setMap(mapx);
//        sanmarino_map.setMap(mapx);
//        sanmarino_title.setMap(mapx);
//        laperamap.setMap(mapx);
    }


    function init_mapd() {
        var Latitud = mdlNuevoD.find("#Latitud");
        var Longitud = mdlNuevoD.find("#Longitud");
        var tblCoordenadasXPolygono = mdlNuevoD.find("#tblCoordenadasXPolygono");

        mapd = new google.maps.Map(document.getElementById('map_registerd'), {
            zoom: 5,
            center: new google.maps.LatLng(25.76431662040222, -101.88626375000001),
            mapTypeId: google.maps.MapTypeId.HYBRID
        });
        mapd.setTilt(45);
        var marker_register = new google.maps.Marker({
            position: new google.maps.LatLng(20.71860169145368, -101.35753329793931),
            draggable: true,
            icon: base_url + 'imagenes/house_indigo.png'
        });
        google.maps.event.addListener(marker_register, 'dragend', function (evt) {
            Latitud.val(evt.latLng.lat());
            Longitud.val(evt.latLng.lng());
            tblCoordenadasXPolygono.find("tbody").append("<tr><td>0</td><td>" + evt.latLng.lat() + "</td><td>" + evt.latLng.lng() + "</td></tr>");
            document.getElementById('msgNuevoD').innerHTML = '<p>COORDENADAS SETEADAS</p>';
        });
        google.maps.event.addListener(marker_register, 'dragstart', function (evt) {
            document.getElementById('msgNuevoD').innerHTML = '<p>BUSCANDO COORDENADAS...</p>';
        });
        mapd.setCenter(marker_register.position);
        marker_register.setMap(mapd);

    }


    function getDesarrollos() {
//        $.ajax({
//            url: base_url + 'index.php/ctrlMapas/getDesarrollos',
//            type: "POST",
//            dataType: "JSON"
//
//        }).done(function (data) {
//            console.log('DESARROLLOS');
////            console.log(data)
//            var options = '<option value=""></option>';
//            $.each(data, function (k, v) {
//                options += '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
//            });
//        }
//        ).fail(function (x, y, z) {
//            console.log(x, y, z);
//        }).always(function () {
//
//        });
        $.ajax({
            url: base_url + 'index.php/ctrlMapas/getDesarrollosSCO',
            type: "POST",
            dataType: "JSON"

        }).done(function (data) {
//            console.log(data)
            var options = '<option value=""></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
            mdlNuevo.find("#IdProyecto").html(options);
            mdlNuevoD.find("#IdProyecto").html(options);
        }
        ).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {

        });
        $.ajax({
            url: base_url + 'index.php/ctrlMapas/getDesarrollosXModelo',
            type: "POST",
            dataType: "JSON"

        }).done(function (data) {
//            console.log(data)
            var options = '<option value=""></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
//            $("#IdProyecto").html(options);
//            mdlEdit.find("#IdProyecto").html(options);
        }
        ).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {

        });
        $.ajax({
            url: base_url + 'index.php/ctrlMapas/getDesarrollosSCO',
            type: "POST",
            dataType: "JSON"

        }).done(function (data) {
//            console.log(data)
            var options = '<option value=""></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.PROYECTO + '</option>';
            });
//            mdlNuevoD.find("#IdProyecto").html(options);
        }
        ).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {

        });
    }

    function getLotesXManzana(ID, M) {
        var Lote = $("#mdlNuevo #Lote");
        Lote.addClass("hide");
        Lote.html("");
        Lote.parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
        $.ajax({
            url: master_url + 'getLotesXManzana',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M
            }
        }).done(function (data) {
//            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data[0] !== undefined && dtm.LOTES !== undefined) {
                $.each(dtm.LOTES.split(","), function (k, v) {
                    options = options + '<option value="' + v + '">' + v + '</option>';
                });
                Lote.html(options);
            } else {
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            setTimeout(function () {
                Lote.removeClass("hide");
                Lote.next().remove();
            }, 1500);
        });
    }

    function getNumerosXLotes(ID, M, L) {
        var NumeroDeVivienda = $("#mdlNuevo #Numero");
        NumeroDeVivienda.html("");
        NumeroDeVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
        $.ajax({
            url: master_url + 'getNumerosXLotes',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
            console.log('NUMEROS');
//            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
//                    console.log(v);
                    $.each(v.NUMEROS.split(','), function (k, vv) {
                        options = options + '<option value="' + vv + '">' + (vv + ' (' + v.MODELO + ')') + '</option>';
                    });
                });
                NumeroDeVivienda.html(options);
            } else {
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            setTimeout(function () {
                NumeroDeVivienda.removeClass("hide");
                NumeroDeVivienda.next().remove();
            }, 1500);
        });
    }

    function getModelosXNumeroDeVivienda(ID, M, L) {
        var ModeloVivienda = $("#mdlNuevo #Modelo");
        ModeloVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
        $.ajax({
            url: master_url + 'getModelosXNumeroDeVivienda',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L
            }
        }).done(function (data) {
//            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.MODELO + '</option>';
                });
                ModeloVivienda.html(options);
            } else {
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            setTimeout(function () {
                ModeloVivienda.removeClass("hide");
                ModeloVivienda.next().remove();
            }, 1500);
        });
    }

    function getTiposDeVivienda(ID, M, L, NV, MOD) {
        var TipoVivienda = $("#mdlNuevo #Tipo");
        TipoVivienda.html("");
        TipoVivienda.addClass("hide").parent().append('<span class="fa fa-cog fa-spin fa-3x"></span>');
        $.ajax({
            url: master_url + 'getTiposDeVivienda',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                M: M,
                L: L,
                NV: NV,
                MD: MOD
            }
        }).done(function (data) {
//            console.log(data);
            var dtm = data[0];
            var options = '<option value=""></option>';
            if (data !== undefined) {
                $.each(data, function (k, v) {
                    options = options + '<option value="' + v.ID + '">' + v.TIPO + '</option>';
                });
                TipoVivienda.html(options);
            } else {
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            setTimeout(function () {
                TipoVivienda.removeClass("hide");
                TipoVivienda.next().remove();
            }, 1500);
        });
    }

</script>
<style>
    .gm-style-iw{
        width: 100%;
    }
</style>