<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">ALMACENES</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Almacen'); ?> 
            <div class="panel-body">
                <fieldset>
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
                    <div class="col-md-12">
                        <blockquote>
                            <br>
                            <input type="radio" value="AL1" name="ALMACENID" id="ALMACENID" required/>
                            Registro de almacén
                            <br>    
                            <input type="radio" value="AL2" name="ALMACENID" id="ALMACENID" required/>
                            Actualizar responsable de almacén
                            <br>
                            <input type="radio" value="AL3" name="ALMACENID" id="ALMACENID" required/>
                            Recepción de artículos, materiales y equipo en almacén
                            <br> 
                            <input type="radio" value="AL4" name="ALMACENID" id="ALMACENID" required/>
                            Control de artículos y materiales
                            <br>
<!--                            <input type="radio" value="AL4" name="ALMACENID" id="ALMACENID" required/>
                            Recepción de facturas por pagar de material entregado
                            <br>-->
                        </blockquote>   
                        <div class="col-md-12">
                            <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <?php echo form_open_multipart(base_url() . 'index.php/controlador/Regresar'); ?>     
    <table  width="100%">
        <tr>
            <td width="80%">
            </td>
            <td width="20%" align="right">
                <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
            </td>
        </tr>
    </table>
</form>
</div>

