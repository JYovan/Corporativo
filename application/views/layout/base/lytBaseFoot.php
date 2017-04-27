 
        <div class="panel panel-danger shadow-effect">
            <div class="panel-heading text-center"><img src="<?php print base_url(); ?>/media/logozx.png" class="img-responsive" width="10%" > </div>
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-4">
                        <p class="questerial-font hand-cursor">DESARROLLOS</p>
                    </div> 
                    <div class="col-md-4">
                        <p class="questerial-font hand-cursor" data-toggle="modal"  data-target="#mdlNotificarProblema">NOTIFICAR UN PROBLEMA</p>
                    </div>
                    <div class="col-md-4"> 
                        <p class="span6 questerial-font" align="center">
                            LOMA DEL PEDREGAL #417<br>
                            COL. LOMAS DEL CAMPESTRE<br>
                            LEÓN GTO. MÉXICO. <br>
                            TEL. +52 (477) 779 72 21<br>
                            +52 (477) 779 72 27<br>
                        </p>
                    </div>
                </fieldset>
            </div>
        </div> 
</section> 
</article>
</div>



<div id="mdlNotificarProblema" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">NOTIFICAR UN PROBLEMA</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12">
                        <label for="Titulo"> ASUNTO</label>
                        <input type="text" id="Titulo" name="Titulo" placeholder="ESCRIBA EL TITULO DEL PROBLEMA" class="form-control" required=""/>
                    </div>
                    <div class="col-md-12">
                        <label for="Mensaje">MENSAJE <span class="fa fa-envelope fa-2x"></span></label>
                        <textarea id="Mensaje" name="Mensaje" rows="4" cols="20" class="form-control">
                        </textarea>
                    </div>
                </fieldset>
                <div id="rReporteGeneralDeGarantias"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times fa-3x"></span></button> 
                <button type="button" class="btn btn-danger " data-dismiss="modal"><span class="fa fa-send fa-3x"></span></button> 
            </div>
        </div>
    </div>
</div>
</html>
