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
                        <div class="text-center cursor-hand" onclick="onHideFunctions()">MÓDULO DE DISPERSIONES <span class="fa fa-chevron-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="OCULTAR/MOSTRAR BOTONES"></span></div>
                    </div> 
                    <div class="col-md-2 panel-title" align="right">
                        <a href = '<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData'>
                            <span class="fa fa-navicon"data-toggle="tooltip" data-placement="top" title="" data-original-title="MENU PRINCIPAL"></span>
                        </a> 
                    </div>
                </div>
                <div class="panel-body">
                    <fieldset id="fAccions">
                        <div id="btnAccions" align="center" class="col-md-12">
                            <fieldset>
                                <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" >
                                    <button id="btnAgregarTramiteFactura" class="btn btn3d btn-lg btn-info fa-2x"  data-toggle="tooltip" data-placement="top" title="" data-original-title="NUEVO">
                                        <span class="fa fa-plus fa-lg"></span>
                                    </button>
                                </span>
                                <button id="btnModificar" class="btn btn3d btn-lg btn-success fa-2x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="MODIFICAR"  ><span class="fa fa-pencil fa-lg"></span></button>
                                <button id="btnRefresh" class="btn btn3d btn-lg btn-warning fa-2x"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="REFRESCAR"  ><span class="fa fa-refresh fa-lg"></span></button>
                            </fieldset>
                        </div> 
                    </fieldset>
                    <fieldset id=""> 
                        <div id="msgDispersiones"></div>
                        <div id="rDispersiones"></div>
                    </fieldset>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<script>
    var master_url = base_url + 'index.php/ctrlDispersiones/';
    var btnRefresh = $("#btnRefresh");
    $(document).ready(function () {
        onGetRecords("tblDispersiones", master_url + "getRecords", "rDispersiones", "msgDispersiones", "NO SE ENCONTRARON REGISTROS");
        btnRefresh.click(function () {
            onGetRecords("tblDispersiones", master_url + "getRecords", "rDispersiones", "msgDispersiones", "NO SE ENCONTRARON REGISTROS");

        });
    });

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
                    frow[0].innerHTML = '<span class="label label-primary">' + frow[0].innerText + '</span>';
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
                    console.log($(dtm[0])[0].innerText);
                    console.log($(dtm[0]).find("span").innerText);
                    var id = $(dtm[0]).find("span")[0] !== undefined ? $(dtm[0]).find("span")[0].innerText : $(dtm[0]).val();
                    temp = parseInt($(dtm[0])[0].innerText);
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
</script>