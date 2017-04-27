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
                <h3 class="panel-title">
                    REGISTRO DE TIPO DE VIVIENDA
            </div> 
            <div class="panel-body"> 
                <?php echo form_open_multipart('controlador/AsignarVivienda'); ?>    
                <strong style="color:#FFF">Registro de Tipo de Vivienda</strong>
                <strong style="color:#FFF">Datos del desarrollo</strong> 
                <div class="col-md-4 col-xs-12">	
                    <div class="col-md-12 col-xs-12">
                        <label for="1" class="control-label">Nombre del desarrolo</label><br>
                    </div>  
                    <div class="col-md-12 col-xs-12">
                        <select class="form-control" id="Ndesarrollo" name="Ndesarrollo"  required="required">
                            <option value="">Selecciona</option>
                            <?php foreach ($Proyectos as $Proyectos1) { ?> 
                                <option value="<?php echo $Proyectos1->ID; ?>"><?php echo $Proyectos1->Proyecto; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="">Viviendas asignadas</strong>		
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-3 col-xs-12">	
                        <label for="1" class="control-label">Modelo de vivienda</label><br>	
                    </div>
                    <div class="col-md-3 col-xs-12">	
                        <label for="1" class="control-label">Tipo de vivienda</label><br>	
                    </div>
                    <div class="col-md-3 col-xs-12">	
                        <label for="1" class="control-label">Superficie del modelo de vivienda</label><br>	
                    </div>
                    <div class="col-md-3 col-xs-12">	
                        <label for="1" class="control-label">Precio inicial de la vivienda</label><br>	
                    </div>
                </div>
                <div class="col-md-12 col-xs-12" id="Viviendas">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <strong style="">Asignar nuevas viviendas</strong>		
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-3 col-xs-12">	
                        <select class="form-control" id="Vivienda" name="Vivienda"  required="required">
                            <option value="">Selecciona</option >
                            <?php foreach ($Vivienda as $Vivienda1) { ?> 
                                <option value="<?php echo $Vivienda1->ID; ?>"><?php echo $Vivienda1->Modelo; ?></option>
                            <?php } ?>
                        </select>	
                    </div>
                    <div class="col-md-3 col-xs-12">	
                        <select class="form-control" id="TipoV" name="TipoV"  required="required">
                            <option value="">Selecciona</option>
                            <?php foreach ($Tipos as $Tipos1) { ?> 
                                <option value="<?php echo $Tipos1->ID; ?>"><?php echo $Tipos1->Prototipo; ?></option>
                            <?php } ?>
                        </select>	
                    </div>
                    <div class="col-md-3 col-xs-12" id="InfoViviendas1">	
                    </div>
                    <div class="col-md-3 col-xs-12" id="InfoViviendas2">	
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Agregar</button>
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
//        cli.config.AsigVivienda();
        var master_url = base_url + 'index.php/ctrlTipoVivienda/';
        var Ndesarrollo = $("#Ndesarrollo");
        var Viviendas = $("#Viviendas");

        cli.config.InfoVivienda();
        $(document).ready(function () {
            Ndesarrollo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE..."
                });
                console.log(Ndesarrollo.val());
                $.ajax({
                    url: master_url + 'getViviendasXProyecto',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        PROYECTO: Ndesarrollo.val()
                    }
                }).done(function (data, y, z) {
                    console.log(data);
                    var result = "";
                    $.each(data, function (k, v) {
                        result +='<div class="col-md-3">'+v.MODELO+'</div>';
                        result +='<div class="col-md-3">'+v.PROTOTIPO+'</div>';
                        result +='<div class="col-md-3">'+v.SUPERFICIE+'</div>';
                        result +='<div class="col-md-3">'+v.PRECIO+'</div>';
                    });
                    Viviendas.html(result);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
        });
    </script>