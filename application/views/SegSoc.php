<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE Gestiones realizadas ante el IMSS</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/SegSoc'); ?> 
            <div class="panel-body">
                <fieldset>
<!--                    <div class="col-md-12">
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-info btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="NUEVO EXPEDIENTE (IMSS Ó NÓMINA)">
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#" > 
                            <button class="btn btn-success btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title="" data-original-title="PATRÓN ANTE EL IMSS" type="button" >
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-indigo btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    title=""  type="button"
                                    data-original-title="GENERAR NÚMERO PATRONAL DE IDENTIFICACIÓN ELECTRÓNICA (NPIE) Y CERTIFICADO DIGITAL ">
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                    </div>-->
                    <div class="col-md-12">
                        <blockquote>
                            <?php
                            if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                ?>
                                <br>
                                <input type="radio" value="SS0" name="SegSocID" id="SegSocID" required/>
                                Expediente de trámite IMSS o de nómina
                                <br>
                                <input type="radio" value="SS1" name="SegSocID" id="SegSocID" required/>
                                Tramitar  alta como patrón ante el IMSS 
                                <br>
                                <input type="radio" value="SS2" name="SegSocID" id="SegSocID" required/>
                                Generar número patronal de identificación electrónica (NPIE) y certificado digital
                                <br>
                                <input type="radio" value="SS3" name="SegSocID" id="SegSocID" required/>
                                Generar constancia de movimientos afiliatorios al IMSS
                                <br>
                                <input type="radio" value="SS4" name="SegSocID" id="SegSocID" required/>
                                Generar constancia de autorizaciones y suspensiones ante el IMSS 
                                <br>
                                <input type="radio" value="SS5" name="SegSocID" id="SegSocID" required/>
                                Presentar movimientos patronales ante el IMSS  de altas o reingresos 
                                <br>
                                <input type="radio" value="SS6" name="SegSocID" id="SegSocID" required/>
                                Presentar movimientos patronales ante el IMSS de modificación de salarios
                                <br>
                                <input type="radio" value="SS7" name="SegSocID" id="SegSocID" required/>
                                Presentar movimientos patronales ante el IMSS de bajas de los trabajadores 
                                <br>
                                <input type="radio" value="SS8" name="SegSocID" id="SegSocID" required/>
                                Declaración anual de riesgos de trabajo
                                <br>
                                <input type="radio" value="SS9" name="SegSocID" id="SegSocID" required/>
                                Presentar aviso de modificación al registro patronal
                                <br>
                                <input type="radio" value="SS10" name="SegSocID" id="SegSocID" required/>
                                Declaración de sueldos y salarios de trabajadores (Archivo DIM)
                                <br>
                                <input type="radio" value="SS11" name="SegSocID" id="SegSocID" required/>
                                Presentar aviso de movimientos afiliatorios de trabajadores
                                <br>
                                <input type="radio" value="SS12" name="SegSocID" id="SegSocID" required/>
                                Presentar trámite de SATIC
                                <br>
                                <input type="radio" value="SS13" name="SegSocID" id="SegSocID" required/>
                                Renovar o cancelar número patronal de identificación electrónica (NPIE) y certificado digital
                                <br>
                                <input type="radio" value="SS14" name="SegSocID" id="SegSocID" required/>
                                Generación mensual SUA (IMSS, REV e INFONAVIT)
                                <br>
                                <input type="radio" value="SS18" name="SegSocID" id="SegSocID" required/>
                                Aclaraciones y cancelaciones ante el IMSS
                                <br>
                                <input type="radio" value="SS19" name="SegSocID" id="SegSocID" required/>
                                Elaboración de finiquitos
                                <br>
                                <input type="radio" value="SS20" name="SegSocID" id="SegSocID" required/>
                                Asesorías en trámites IMSS
                                <br>

                                <input type="radio" value="SS15" name="SegSocID" id="SegSocID" required/>
                                Generar nómina de trabajadores
                            <?php } ?>
                            <br>
                            <input type="radio" value="SS16" name="SegSocID" id="SegSocID" required/>
                            Trámites de previsión social en proceso
                            <br>
                            <input type="radio" value="SS17" name="SegSocID" id="SegSocID" required/>
                            Trámites previsión social concluidos
                            <br>
                        </blockquote>   
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>
</div>
<table width="100%">
    <tr>
        <td width="80%">

        </td>
    </tr>
    <tr>
        <td width="20%" align="right">  
            <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


<div class="modal fade" id="mdlNuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center"><span class="fa fa-file-text fa-lg"></span> NUEVO EXPEDIENTE</h2>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-md-4">
                            <label for="">EMPRESA</label>
                            <select id="Cliente" name="Cliente" class="form-control">

                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">MES</label>
                            <input type="text" id="Mes" name="Mes" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="mm">
                        </div>

                        <div class="col-md-4">
                            <label for="">Tramite</label>
                            <select id="Tramite" name="Tramite" class="form-control">
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">FECHA DE LA SOLICITUD</label>
                            <input type="text" id="Fecha" name="Fecha" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy">
                        </div>

                        <div class="col-md-8">
                            <label for="">TIPO DE EVIDENCIA</label>
                            <input type="text" id="Asesoria" name="Asesoria" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <br>
                        </div>

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor" id="fileuploadtf" align="center">
                            <br>
                            <i class="fa fa-cloud-upload fa-5x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>

                        <div id="msgNuevo" class="col-md-12"></div> 

                    </fieldset>
                </div>
            </form> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>
                <button class="btn btn-lg btn-success btn-lg" type="button" id="btnGuardar" name="btnGuardar"  data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR" ><span class="fa fa-check fa-2x"></span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    var master_url = base_url + 'index.php/ctrlSeguridadSocial/';
    window.onload = function () {
        var fileInput = document.getElementById('rArchivo');
        var fileDisplayArea = document.getElementById('frtArchivo');

        fileInput.addEventListener('change', function (e) {
            var file = fileInput.files[0];
            var imageType = /image.*/;
            if (file.type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    fileDisplayArea.innerHTML = "";
                    var img = new Image();
                    img.src = reader.result;
                    img.className = "img-responsive";
                    fileDisplayArea.appendChild(img);
                }
                reader.readAsDataURL(file);
            } else {
                fileDisplayArea.innerHTML = "LA API DE FILEREADER NO ES CAPAZ DE EJECUTARSE EN ESTE NAVEGADOR, UTILIZA CHROME O FIREFOX!"
            }
        });

    };

    $(document).ready(function () {
//        $(".btn").tooltip({placement: 'bottom'}).tooltip('show');
        var mdlNuevo = $("#mdlNuevo");
        var btnGuardar = mdlNuevo.find("#btnGuardar");
        getEmpresas();
        getTramites();
        btnGuardar.click(function () {
            dataf = new FormData($('#frmNuevo')[0]);
            dataf.append('Empresa', $("#Cliente").find("option:selected").text());
            dataf.append('TramiteT', $("#Tramite").find("option:selected").text());
            $.ajax({
                url: master_url + 'onAdd',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: dataf
            }).done(function (data) {
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
                $("#btnReCargarTramiteFactura").trigger('click');
            }).fail(function () {
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });

        $("#fileuploadtf").click(function () {
            console.log('ok');
            $("#rArchivo").trigger('click');
        });

    });
    function getEmpresas() {
        $.ajax({
            url: master_url + 'getEmpresas',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.RAZON + '</option>';
                    });
                    $("#mdlNuevo #Cliente").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
    function getTramites() {
        $.ajax({
            url: master_url + 'getTramites',
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.TRAMITE + '</option>';
                    });
                    $("#mdlNuevo #Tramite").html(options);

                } else {
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }
</script>