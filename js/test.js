/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 function getEstados() {
        $.ajax({
            url: master_url + 'getEstados',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            var option = '<option></option>';
            $.each(data, function (k, v) {
                option += '<option value="'+v.ID+'">'+v.ESTADO+'</option>';
            }); 
        }).fail(function (x, y, z) {
            console.log('* * * * * ERROR AL OBTENER LOS ESTADOS* * * * * *');
            console.log(x, y, z);
        console.log('* * * * * * * * * * * * * * * * * * * * * * * * *');
            }).always(function( ){
        console.log('ESTADOS OK'); 
    });
    }
    $(document).ready(function () {
        var prepareCall = $.Callbacks();
        prepareCall.add(getOptions('index.php/ctrlContratos/getDirectorio', "Empresa", false, {}));
        prepareCall.add(getOptions('index.php/ctrlContratos/getDirectorio', "EmpresaU", false, {}));
        prepareCall.fire();

        $("#btnEditarTerceros").click(function () {
            $("#mdlModificarCuenta").modal('toggle');
        });
        var mdlGuardar = $("#mdlNuevaCuenta #btnGuardar");
        mdlGuardar.click(function () {
            mdlGuardar.find("span").removeClass("fa-check").addClass("fa-cog fa-spin");
            mdlGuardar.addClass("disabled");
            setTimeout(function () {
                mdlGuardar.find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                mdlGuardar.removeClass("disabled");
            }, 1500);
        });
        
        $("div.modal").on('hidden.bs.modal', function (e) {
            $("div.modal input").val("");
            $("div.modal select").select2("val", "");
        });

    });

    function getOptions(url, idcomponent, has_elements, elements) {
        $.ajax({
            url: base_url + url,
            type: "POST",
            dataType: "JSON",
            data: has_elements ? elements : false,
            success: function (data) {
                var options = '<option value=""></option>';
                if (data !== undefined) {
                    $.each(data, function (k, v) {
                        options = options + '<option value="' + v.ID + '">' + v.RazonS + '</option>';
                    });
                    $("#" + idcomponent).html(options);
                } else {
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'NO SÉ ENCONTRARON REGISTROS'
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                }
            },
            error: function (x, y, z) {
                console.log(x, y, z);
            }
        });
    }