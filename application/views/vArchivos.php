<div class="row">
    <div class="margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">PANEL DE ARCHIVOS</h3>
            </div>
            <div class="panel-body">
                <form id="frmArchivos">
                    <div class="col-md-12">  

                        <div align="center" class="col-md-12" id="frtArchivo"></div>
                        <div class="col-xs-12 col-md-4"></div>
                        <div class="col-xs-12 col-md-4 hand-cursor fileupload" id="fileuploadtf" align="center" onclick="onUpload(this)">
                            <br>
                            <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                            <h1 >ADJUNTAR ARCHIVO</h1>
                        </div>
                        <div class="col-md-12 hide" align="center">
                            <input type="file" class="btn btn-primary" id="rArchivo" name="rArchivo">
                            <input type="text" id="rtImagenText" name="rtImagenText" readonly="" class="">
                        </div>
                    </div>
                </form>
                <button class="btn btn3d btn-success" id="btnArchivo" name="btnArchivo"><span class="fa fa-check fa-3x"></span></button>
            </div>
        </div>
    </div>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlArchivos/';
    var btnArchivo = $("#btnArchivo");
    $(document).ready(function () {
        btnArchivo.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO POR FAVOR ESPERE..."
            });
            frm = new FormData($('#frmArchivos')[0]);
            $.ajax({
                url: master_url + 'onUploadArchivo',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data) {
                HoldOn.close();
                console.log(data);
                console.log('SE HA SUBIDO EL ARCHIVO');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA SUBIDO EL ARCHIVO', 'success');
            }).fail(function () {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR NO SE HA SUBIDO EL ARCHIVO', 'danger');
                console.log('ERROR NO SE HA SUBIDO EL ARCHIVO');
                console.log(arguments);
            });
        });
    });
    function onUpload(e) {
        var parent = $(e).parent().parent();
        var btnFile = parent.find("input[type='file']");
        var rArchivo = parent.find("#frtArchivo");
        btnFile.change(function () {
            var imageType = /image.*/;
            if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match(imageType)) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    rArchivo.html('<img src="' + reader.result + '" >');
                };
                reader.readAsDataURL(btnFile[0].files[0]);
            } else {
                if (btnFile[0].files[0] !== undefined && btnFile[0].files[0].type.match('application/pdf')) {
                    var readerpdf = new FileReader();
                    readerpdf.onload = function (e) {
                        rArchivo.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="900px" height="1200px"' +
                                ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    };
                    readerpdf.readAsDataURL(btnFile[0].files[0]);
                } else {
                    var extension = getExt(btnFile[0].files[0].name);
                    switch (extension) {
                        case "rar":
                            rArchivo.html('<img src="../../media/overlays/rar.png" class="image-responsive">');
                            break;
                        case "zip":
                            rArchivo.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "zip":
                            rArchivo.html('<img src="../../media/overlays/zip.png" class="image-responsive">');
                            break;
                        case "xml":
                            rArchivo.html('<img src="../../media/overlays/xml.png" class="image-responsive">');
                            break;
                        case "doc":
                            rArchivo.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "docx":
                            rArchivo.html('<img src="../../media/overlays/word.png" class="image-responsive">');
                            break;
                        case "xls":
                            rArchivo.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "xlsx":
                            rArchivo.html('<img src="../../media/overlays/excel.png" class="image-responsive">');
                            break;
                        case "txt":
                            rArchivo.html('<img src="../../media/overlays/txt.png" class="image-responsive">');
                            break;
                        case "css":
                            rArchivo.html('<img src="../../media/overlays/css.png" class="image-responsive">');
                            break;
                        case "html":
                            rArchivo.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "htm":
                            rArchivo.html('<img src="../../media/overlays/html.png" class="image-responsive">');
                            break;
                        case "sql":
                            rArchivo.html('<img src="../../media/overlays/sql.png" class="image-responsive">');
                            break;
                        default:
                            rArchivo.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                            break;
                    }
                }
            }
        });
        btnFile.trigger('click');
    }

</script>