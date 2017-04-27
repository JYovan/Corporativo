
<!-- Modal -->
<div class="modal fade" id="mdlPostVenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-dollar"></span> MENÚ DE PROMOCI&OacuteN Y POSTVENTA</h4>
            </div>
            <div class="modal-body">


                <div class="row">
                    <DIV class="col-md-12">

                        <div class="col-sm-6 col-md-3 hover">
                            <div class="smenu thumbnail text-center ">
                                <span class="fa fa-calendar fa-5x"></span>
                                <div class="caption">
                                    <h4>PROGRAMACIÓN DE CITA</h4>
                                    <p> <input type="radio" name="gPostVenta" value="0" required="" class="form-control hide"> </p>
                                    <!--<p> <button type="button" id="btnContinuar" class="btn btn-primary">Continuar <span class="fa fa-arrow-right"></span></button></p>-->
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3">
                            <div class="smenu thumbnail text-center ">
                                <span class="fa fa-file-zip-o fa-5x"></span>
                                <div class="caption">
                                    <h4>PROCESO DE ENTREGA DE VIVIENDA</h4>
                                    <p><input type="radio" name="gPostVenta" value="1" required="" class="form-control hide"/>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3">
                            <div class="smenu thumbnail text-center">
                                <span class="fa fa-info fa-5x"></span>
                                <div class="caption">
                                    <h4>ATENCI&Oacute;N DE</h4><h4> GARANT&Iacute;AS</h4>
                                    <p><input type="radio" name="gPostVenta" value="2" required="" class="form-control hide"/>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="smenu thumbnail text-center ">
                                <span class="fa fa-eye fa-5x"></span>
                                <div class="caption">
                                    <h4>VISITA DE LA VIVIENDA Y REVISI&Oacute;N</h4>
                                    <p><input type="radio" name="gPostVenta" value="3" required="" class="form-control hide"/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="col-sm-6 col-md-3 hide">
                            <div class="smenu thumbnail text-center ">
                                <span class="fa fa-folder-open fa-5x"></span>
                                <div class="caption">
                                    <h4>PROCESO DE ENTREGA DE ESCRITURAS</h4>
                                    <p>
                                        <input type="radio" name="gPostVenta" value="4" required="" class="form-control hide"/>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="smenu thumbnail text-center ">
                                <span class="fa fa-comments fa-5x"></span>
                                <div class="caption">
                                    <h4>QUEJAS Y COMENTARIOS</h4>
                                    <p>
                                        <input type="radio" name="gPostVenta" value="6" required="" class="form-control hide"/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3"></div>
                        <div class="col-sm-6 col-md-3">
                            <a href="<?php echo base_url(); ?>index.php/ctrlsesion/onLoadData">
                                <div class="thumbnail text-center ">
                                    <span class="fa fa-th fa-5x"></span>
                                    <div class="caption">
                                        <h4>MENU </h4><h4>PRINCIPAL</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div> 

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                <button type="button" id="btnContinuar" class="btn btn-primary">Continuar <span class="fa fa-arrow-right"></span></button>
            </div>
        </div> 
    </div>
</div>
<script>
    $(document).ready(function () {
        $("div > div .smenu").on('click', function (e) {
            $(this).find("input[name='gPostVenta']").prop('checked', true);
            console.log('Clicked: ' + $("input[name=gPostVenta]:checked").val());
            location.href = '<?php echo base_url(); ?>index.php/ctrlPostVenta/?ID=29&i=<?php // echo ($indice !== null ? $indice : 0) ?>&mnuID=' + $("input[name=gPostVenta]:checked").val();

        });

        $("#btnContinuar").on('click', function (e) {
            console.log($("input[name=gPostVenta]:checked").val());
            location.href = '<?php echo base_url(); ?>index.php/ctrlSesion/';
        });
    });
</script>