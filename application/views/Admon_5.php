<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <fieldset>
        <div class="col-md-12 margin-15-top">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">CONTROL DE PROVEEDORES</h3>
                </div>
                <?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?>  
                <div class="panel-body">
                    <div class="col-md-12">
                        <span  data-toggle="modal" data-easein="swoopIn" data-target="#mdlNuevo" > 
                            <button class="btn btn-info btn-lg" 
                                    data-toggle="tooltip" 
                                    data-placement="top" 
                                    title=""  type="button"
                                    data-original-title="NUEVO">
                                <span class="fa fa-plus fa-3x"></span>
                            </button>
                        </span>
                    </div>
                    <blockquote>
                        <br>
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <input type="radio" value="A51" name="SegSocID" id="SegSocID" required/>
                            Registro de proveedores 
                            <br>
                            <input type="radio" value="A52" name="SegSocID" id="SegSocID" required/>
                            Actualizar datos de proveedores
                            <br>
                        <?php }
                        ?>
                        <input type="radio" value="A53" name="SegSocID" id="SegSocID" required/>
                        Directorio de proveedores
                        <br> 
                        <input type="radio" value="A54" name="SegSocID" id="SegSocID" required/>
                        Catálogo de  materiales, productos y servicios
                        <br> 
                    </blockquote>   
                    <div class="col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                    </div>
                </div>
                </form>
            </div>
        </div>
    </fieldset> 
</div>


<div id="mdlNuevo" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg fullscreen" role="document">
        <div class="modal-content">

            <div id="hmsgModals" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NUEVO PROVEEDOR </h4>
            </div> 
            <form id="frmNuevo">
                <div id="messages-result" class="modal-body text-center">

                    <fieldset>
                        <div class="col-md-6">
                            <label for="">TIPO</label>
                            <input type="text" id="Folio" name="Folio" class="form-control" placeholder="FOLIO" required="">
                        </div> 
                        <div class="col-md-6">
                            <label for="">NOMBRE COMPLETO O DENOMINACIÓN SOCIAL</label>
                            <input type="text" id="Folio" name="Folio" class="form-control" placeholder="FOLIO" required="">
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
                            <input type="text" id="PaginaWeb" name="PaginaWeb" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <h2>DATOS DE LOCALIZACIÓN</h2>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">CALLE</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">NÚMERO</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">MUNICIPIO</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">TELÉFONO</label>
                        </div>
                        <div id="msgResult"></div>
                    </fieldset>

                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal"  data-toggle="tooltip" data-placement="top" title="" data-original-title="CERRAR"><span class="fa fa-times fa-3x"></span> </button> 
                <button class="btn btn-lg btn-success disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardar" name="btnGuardar" ><span class="fa fa-check fa-3x"></span></button>
                <!--<button class="btn btn-lg btn-success hide disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="GUARDAR"  type="button" id="btnGuardando" name="btnGuardando" value="" ><span class="fa fa-cog fa-spin fa-3x fa-fw"></span></button>-->
            </div>
        </div>
    </div>
</div>